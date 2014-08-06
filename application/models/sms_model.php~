<?php

class Sms_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

	
	
	public function get_count_inbox() {
		$this->db->from('inbox');
		$this->db->where("(UDH = '' OR UDH LIKE '%1')",NULL);
		return $this->db->count_all_results();
    	}
	


	public function get_sms_inbox($limit=10000, $offset=0) {

	// Inbox dipecah (Inbox, Spam, Sampah, Komersial) berdasarkan type
		
        $this->db->from(inbox);
	$this->db->where("(UDH = '' OR UDH LIKE '%1')",NULL);	
	$this->db->order_by("ReceivingDateTime", "asc");
	$this->db->limit($limit);
	$this->db->offset($offset);
	$result = $this->db->get();
	// Tambahan untuk menampilkan UDH Multi Part Diulang dalam view	 

	
	return $result;
    	}
	

// fungsi get multipart (ambil UDH multi part yang tidak bernilai 1) 

	public function get_count_outbox(){
	$this->db->from('outbox');
	$this->db->where("(UDH = '' OR UDH LIKE '%1')",NULL);
	$this->db->limit($limit);
	$this->db->offset($offset);
	return $this->db->count_all("outbox");
	}

	public function get_sms_outbox($limit=10000, $offset=0) {
	
	$this->db->from(outbox);
	//$this->db->where("(UDH = '' OR UDH LIKE '%1')",NULL);	
	$this->db->order_by("SendingDateTime", "asc");
	$this->db->limit($limit);
	$this->db->offset($offset);
	$result = $this->db->get();
		
	return $result;
    	}

	public function get_count_sentitems() {
	$this->db->from('sentitems');
	$this->db->where("(UDH = '' OR UDH LIKE '%1')",NULL);
	return $this->db->count_all_results();
	}



	public function get_sms_sentitems($limit=10000, $offset=0) {
        
	$this->db->from(sentitems);
	$this->db->order_by("SendingDateTime", "asc");
	$this->db->limit($limit);
	$this->db->offset($offset);
	$result = $this->db->get();
		
	return $result;
    	}



	public function get_sms_percakapan($id=0) {
	
	$number = $this->get_number_by_id($id);	

	$sql = "(
                SELECT DestinationNumber as no, ID as id, SendingDateTime AS tgl, TextDecoded AS isi, 'out' AS
                tipe FROM sentitems
                WHERE DestinationNumber = '" . $number . "'
                )
                UNION (
                SELECT SenderNumber as no, ID as id, UpdatedInDB AS tgl, TextDecoded AS isi, 'in' AS
                tipe FROM inbox
                WHERE SenderNumber = '" . $number . "'
                )
                ORDER BY tgl DESC";    
        
        $result = $this->db->query($sql);
	       		
	return $result;
    	}

	
	public function get_number_by_id($id) {
        $sql = "SELECT SenderNumber as no_pengirim, ID as id FROM inbox where id = ?";
        $query = $this->db->query($sql, array($id));
        $hasil = $query->row();

        if ($hasil != null) {
            return $hasil->no_pengirim;
        } else {
            return NULL;
        }
   	}


	public function get_sms_multipart(){

	$this->db->from(inbox);
	$this->db->where("(UDH <> ''  OR UDH LIKE '%1')",NULL);
	        
	$result = $this->db->get();
		
	return $result;
	}


  // --------------------------------------------------------------------
	
	/**
	 * All About Send Sms
	 *
	 * @access	public   		 
	 */


	function send_sms($data)
	{
	
	// cek2 
	// Multipart message
	
	// --- prngrturan multipart


	// single sms
	$data['option'] = 'single';
	// kirim ke route
	$this->_send_sms_route($data);
	// ok	
	}


	function _send_sms_route($tmp_data)
	{

	$list_no = explode(",", $this->input->post('no_hp'));
        $isi_sms = $this->input->post('isi_sms');
        $jml = count($list_no);
        $c = 0;

        foreach ($list_no as $no) {
        if ($this->db->insert('outbox', 
		array('DestinationNumber' => $no, 
		'TextDecoded' => $isi_sms, 
		'jenis' => 1)
		)) {
                $c++;
            }
        }

        if ($jml == $c) {
            return TRUE;
        } else {
            return FALSE;
        }
	}


	// 

	function _send_sms_multipart($outboxid, $sms, $pos, $part, $coding, $class, $UDH) 
	{
		$code = $pos+1;
		if($code < 10) $code = '0'.$code;
		
		$data = array (
				'ID' => $outboxid,
				'UDH' => $UDH.$part.''.$code,
				'SequencePosition' => $pos+1,
				'Coding' => $coding,
				'Class' => $class,
				'TextDecoded' => $sms,
				);	
		$this->db->insert('outbox_multipart',$data);						
	}




 public function send_sms_masal() {
        $filter_option = $this->input->post('filter');
        $isi_sms = $this->input->post('isi_sms');
        $grup = $this->input->post('grup');
        $list_no = $this->get_list_broadcast($filter_option, $grup);
        if (!empty ($list_no)) {
            foreach ($list_no as $data) {
                if (!$this->db->insert('outbox', array('DestinationNumber' => $data->no_hp, 'TextDecoded' => $isi_sms, 'jenis' => 2))) {
                    return false;
                }
            }
        } else {
            return false;
        }

        return true;
    }

    public function get_list_broadcast($filter_option, $grup) {
        $hasil = array();
        
        $query_user = "SELECT user.no_hp, user.nama, ref_desa.nama, ref_kecamatan.nama, ref_kabupaten.nama
FROM user
LEFT JOIN user_group ON user_group.id = user.id
LEFT JOIN ref_group ON user_group.id = ref_group.id
LEFT JOIN ref_desa ON user.id = ref_desa.id
LEFT JOIN ref_kecamatan ON ref_desa.id_kec = ref_kecamatan.id
LEFT JOIN ref_kabupaten ON ref_kecamatan.id_kab = ref_kabupaten.id
WHERE no_hp IS NOT NULL  ";
        
        switch ($filter_option) {
            case "kab":
                $id_kab = $this->input->post('kab');
                
                $query_user = $query_user . "AND ref_kabupaten.id = '" . $id_kab . "' ";
              
                break;
            case "kec":
                $id_kec = $this->input->post('kec');
               
                $query_user = $query_user . "AND ref_kecamatan.id = '" . $id_kec . "' ";
               
                break;
            case "des":
                $id_desa = $this->input->post('des');
               
                $query_user = $query_user . "AND ref_desa.id = '" . $id_desa . "' ";
               
                break;
            default:
                break;
        }

        if ($grup != "all") {
         
            $query_user = $query_user . "AND ref_group.id = " . $grup . " ";
           
        }

     
        $query_user = $query_user . "GROUP BY no_hp";
     

        $all_query = "(" . $query_user . ")";

        $query = $this->db->query($all_query);

        foreach ($query->result() as $data) {
            $hasil[] = $data;
        }

        return $hasil;
    }

	

  // --------------------------------------------------------------------
	/**
	 * Close All About Send Sms	 
	 */
  // --------------------------------------------------------------------




}?>
