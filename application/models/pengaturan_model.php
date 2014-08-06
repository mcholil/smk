<?php

class Pengaturan_model extends CI_Model {

    	public function __construct() {
        parent::__construct();
        $this->load->database();
    	}

	

	public function get_count_kategori() {
                
	$this->db->from('ref_kategori');	
	return $this->db->count_all_results();
    	}

// --------------------------------------------------------------------
	
	/**
	 * Get Kategori
	 *
	 * @access	public   		 
	 * @return
	 */

	public function get_kategori($param) {
                
	// Kategori
	$this->db->from('ref_kategori');
	//
	switch($param['option'])
	{
		case 'all':
		$this->db->select('*');
		break;
			
		case 'paginate':
		$this->db->limit($param['limit'], $param['offset']);
		break;
			
		case 'by_id':
		$this->db->where('id', $param['id']);
		break;
		
	}	
	
	$result = $this->db->get();
	//
	return $result;
    	}


// --------------------------------------------------------------------
	
	/**
	 * Get Wilayah
	 *
	 * @access	public   		 
	 * @return
	 */

	// kabupaten
	public function get_wilayah($param) {
                
	$this->db->from('ref_kabupaten');

	switch($param['option'])
	{
					
		case 'by_id':
		$this->db->where('id', $param['id']);
		break;
		
	}
	
	$result = $this->db->get();
	return $result;
    	}
	
	public function get_count_kecamatan($param) {
                
	$this->db->from('ref_kecamatan');

	if(isset($param)) 
		{
			$this->db->where(id_kab, $param);
		}	
	return $this->db->count_all_results();
    	}

	
	// kecamatan
	public function get_kecamatan($param) {
                
	$this->db->from('ref_kecamatan');
	
	switch($param['option'])
	{
		case 'all':
		$this->db->select('*');
		break;
			
		case 'paginate':
		$this->db->limit($param['limit'], $param['offset']);
		break;
			
		case 'by_id':
		$this->db->where('id_kab', $param['id']);
		break;

		case 'by_id2':
		$this->db->where('id', $param['id']);
		break;
		
	}
	
	$result = $this->db->get();
	return $result;	
    	}
	

	// jumlah desa
	public function get_count_desa($param) {
                
	$this->db->from('ref_desa');	

	if(isset($param)) 
		{
			$this->db->where('id_kec', $param);
		}		
	
	return $this->db->count_all_results();
    	}

	// jumlah desa kabupaten
	public function get_count_desa_kab($param) {
                
	$this->db->from('ref_desa');	
	$this->db->join('ref_kecamatan', 'ref_desa.id_kec = ref_kecamatan.id');
	$this->db->join('ref_kabupaten', 'ref_kecamatan.id_kab = ref_kabupaten.id', 'left');
        
        $this->db->where('id_kab', $param);
	
	return $this->db->count_all_results();
    	}

	// jumlah user kabupaten
	public function get_count_user_kab($param) {
                
	$this->db->from('user');
	$this->db->join('ref_desa', 'user.id_desa = ref_desa.id');
	$this->db->join('ref_kecamatan', 'ref_desa.id_kec = ref_kecamatan.id', 'left');
	$this->db->join('ref_kabupaten', 'ref_kecamatan.id_kab = ref_kabupaten.id', 'left');
        
        $this->db->where('id_kab', $param);
	
	return $this->db->count_all_results();
    	}


	// jumlah user kecamatan
	public function get_count_user_kec($param) {
                
	$this->db->from('user');
	$this->db->join('ref_desa', 'user.id_desa = ref_desa.id');
	$this->db->join('ref_kecamatan', 'ref_desa.id_kec = ref_kecamatan.id', 'left');
	$this->db->join('ref_kabupaten', 'ref_kecamatan.id_kab = ref_kabupaten.id', 'left');
        
        $this->db->where('id_kec', $param);
	
	return $this->db->count_all_results();
    	}

	// jumlah user desa
	public function get_count_user_desa($param) {
                
	$this->db->from('user');
	$this->db->join('ref_desa', 'user.id_desa = ref_desa.id');
	$this->db->join('ref_kecamatan', 'ref_desa.id_kec = ref_kecamatan.id', 'left');
	$this->db->join('ref_kabupaten', 'ref_kecamatan.id_kab = ref_kabupaten.id', 'left');
        
        $this->db->where('id_desa', $param);
	
	return $this->db->count_all_results();
    	}

	// get desa
	public function get_desa($param) {
                
	$this->db->from('ref_desa');
	
	switch($param['option'])
	{
		case 'all':
		$this->db->select('*');
		break;
			
		case 'paginate':
		$this->db->limit($param['limit'], $param['offset']);
		break;
			
		case 'by_id':
		$this->db->where('id_kec', $param['id']);
		break;

		case 'by_id2':
		$this->db->where('id', $param['id']);
		break;
		
	}
	
	$result = $this->db->get();
	return $result;
    	}


// --------------------------------------------------------------------
	
	/**
	 * Get Grup
	 *
	 * @access	public   		 
	 * @return
	 */

	public function get_grup($param) {
                
	
	$this->db->from('ref_group');	
	
	switch($param['option'])
	{
		case 'all':
		$this->db->select('*');
		break;
			
		case 'paginate':
		$this->db->limit($param['limit'], $param['offset']);
		break;
			
		case 'by_id':
		$this->db->where('id', $param['id']);
		break;
		
	}

	$result = $this->db->get();	
	return $result;
    	}


// --------------------------------------------------------------------
	
	/**
	 * Get Pengguna
	 *
	 * @access	public   		 
	 * @return
	 */

	public function get_count_pengguna() {
                
	$this->db->from('user');	
	return $this->db->count_all_results();
    	}
	

	public function get_pengguna($param) {
	
	$this->db->from('user');	
		
	switch($param['option'])
	{
		case 'cari':
		$this->db->like('nama',$param['cari']);
		break;
			
		case 'paginate':
		$this->db->limit($param['limit'], $param['offset']);
		break;
			
		case 'by_id':
		$this->db->where('id', $param['id']);
		break;
		
	}

	$result = $this->db->get();	
	return $result;
    	}	

	public function get_kelompok($param) {
	
	$this->db->from('user');
	$this->db->join('ref_desa', 'user.id_desa = ref_desa.id');
	$this->db->join('ref_kecamatan', 'ref_desa.id_kec = ref_kecamatan.id', 'left');
	$this->db->join('ref_kabupaten', 'ref_kecamatan.id_kab = ref_kabupaten.id', 'left');
        
      

	 switch ($param['option']) {
            case "kab":
		  $this->db->where('id_kab', $param);
		 break;
            case "kec":
		 $this->db->where('id_kec', $param);
		break;
            case "desa":
		 $this->db->where('id_kec', $param);
		break;
		}

	 if ($group != "all") {
         
           
           
        }
		
	}

// --------------------------------------------------------------------
	
	/**
	 * Add Update
	 *
	 * @access	public   		 
	 * @return
	 */	
	
	function add_update($param)
	{
	
	switch($param['type'])
	{
	case 'kategori':
		
		$this->db->set('nama', $param['nama']);
		$this->db->set('keterangan', $param['keterangan']);

		if(!empty($param['id'])) 
			{
		$this->db->where('id', $param['id']);
		$this->db->update('ref_kategori');
		} else $this->db->insert('ref_kategori'); 
	
	break;	

	case 'wilayah':
		$this->db->set('nama', $param['nama']);
		if(!empty($param['id'])) 
			{
		$this->db->where('id', $param['id']);
		$this->db->update('ref_kabupaten');
		} else $this->db->insert('ref_kabupaten'); 
				 
	break;	

	case 'kecamatan':
		$this->db->set('nama', $param['nama']);
		$this->db->set('id_kab', $param['id_kab']);
		if(!empty($param['id'])) 
			{
		$this->db->where('id', $param['id']);
		$this->db->update('ref_kecamatan');
		} else $this->db->insert('ref_kecamatan'); 
	break;	

	case 'desa':
		$this->db->set('nama', $param['nama']);
		$this->db->set('id_kec', $param['id_kec']);
		if(!empty($param['id'])) 
			{
		$this->db->where('id', $param['id']);
		$this->db->update('ref_desa');
		} else $this->db->insert('ref_desa'); 
	break;

	case 'grup':
		$this->db->set('nama', $param['nama']);
		$this->db->set('keterangan', $param['keterangan']);
		if(!empty($param['id'])) 
			{
		$this->db->where('id', $param['id']);
		$this->db->update('ref_group');
		} else $this->db->insert('ref_group'); 
	break;

	case 'pengguna':
		$this->db->set('nama', $param['nama']);
		$this->db->set('alamat', $param['alamat']);
		$this->db->set('profesi', $param['profesi']);
		$this->db->set('no_hp', $param['no_hp']);
		$this->db->set('username', $param['username']);
		$this->db->set('password', $param['password']);
		if(!empty($param['id'])) 
			{
		$this->db->where('id', $param['id']);
		$this->db->update('user');
		} else $this->db->insert('user'); 
	break;
  	}
	}


// delete

	public function del_kategori() {
        $id_get = $_POST['id_kat'];

        if (!empty($id_get)) {
            foreach ($id_get as $id) {
                	
      $this->db->delete('ref_kategori', array('id' => $id));       
            }
            return true;
        } else {
            return false;
        }
	}



}?>
