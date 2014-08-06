<?php

class Sms extends CI_Controller {

	public function __construct() {
        parent::__construct();
        session_start();

	// session check
	if ($this->session->userdata('loggedin')==NULL) redirect('siteman');
	$param['uid'] = $this->session->userdata('id_user');
	
	}


	public function index(){
	
	redirect('sms/inbox');   
	}


/// --------------------------------------------------------------------
	
	/**
	 * Inbox
	 *
	 * Inbox sms
	 *
	 * @access	public
	 */	


	public function inbox($type=NULL, $offset=0){
	
	// phone number untuk identifikasi nama pengirim jika sudah terdaftar	
	$valid_type = array('inbox','spam', 'sampah', 'komersial');	

	// Pagination
	
	$this->load->library('pagination');
	$config['type'] = $type;
	$config['base_url'] = site_url('/sms/inbox');

	switch ($type) {

	case "inbox":
	$this->load->library('pagination');
	$config['type'] = $type;
	$config['base_url'] = site_url('/sms/inbox/inbox');
	$config['total_rows'] = $this->sms_model->get_count_inbox();
	$config['per_page'] = 15;
	$config['uri_segment'] = 4;			
	$config['limit'] = $config['per_page'];
	$config['offset'] = $offset;	
	$this->pagination->initialize($config);   
	$data['sms'] = $this->sms_model->get_sms_inbox($config['per_page'], $this->uri->segment($config['uri_segment']));	 
	$data['right'] = 'first/sms/sms_masuk';	
			
	break;
// penggabungan multipart ada pada view dengan UDH sebagai kuncinya -> namun id SMS yang digunakan untuk eksekusi hanya yang bernilai UDH =1 dan UDH = ""
 		
	case "spam":
	$config['type'] = $type;
	$this->load->library('pagination');
	//$config['type'] = $type;
	$config['base_url'] = site_url('/sms/inbox/spam');
	$config['total_rows'] = $this->sms_model->get_count_inbox();
	$config['per_page'] = 15;
	$config['uri_segment'] = 4;
						
	$config['limit'] = $config['per_page'];
	$config['offset'] = $offset;	
	$this->pagination->initialize($config);   
	$data['sms'] = $this->sms_model->get_sms_inbox($config['per_page'], $this->uri->segment($config['uri_segment']));	 		
	$data['right'] = 'first/sms/folder';
	break;
		
	case "sampah":

	$this->load->library('pagination');
	$config['type'] = $type;
	$config['base_url'] = site_url('/sms/inbox/sampah');
	$config['total_rows'] = $this->sms_model->get_count_inbox();
	$config['per_page'] = 15;
	$config['uri_segment'] = 4;
					
	$config['limit'] = $config['per_page'];
	$config['offset'] = $offset;	
	$this->pagination->initialize($config);   
	
	$data['sms'] = $this->sms_model->get_sms_inbox($config['per_page'], $this->uri->segment($config['uri_segment']));	 
	$data['right'] = 'first/sms/sms_masuk';	
	$data['right'] = 'first/sms/folder';
	break;
		
	
	case "komersial":
	$this->load->library('pagination');
	$config['type'] = $type;
	$config['base_url'] = site_url('/sms/inbox/komersial');
	$config['total_rows'] = $this->sms_model->get_count_inbox();
	$config['per_page'] = 15;
	$config['uri_segment'] = 4;
						
	$config['limit'] = $config['per_page'];
	$config['offset'] = $offset;	
	$this->pagination->initialize($config);   
	
	$data['sms'] = $this->sms_model->get_sms_inbox($config['per_page'], $this->uri->segment($config['uri_segment']));	 
	$data['right'] = 'first/sms/folder';
	break;
		
	}


	//paging, limit, filter
	$data['menu'] = 'first/sms/menu';	
        $this->load->view('first/layout', $data);
   	}


// --------------------------------------------------------------------
	
	/**
	 * Outbox
	 *
	 * Outbox sms
	 *
	 * @access	public
	 */	


	public function outbox(){
	
	$valid_type = array('','tertunda');	
	
	// Pagination
	
	$this->load->library('pagination');
	//$config['type'] = $type;
	$config['base_url'] = site_url('/sms/outbox');
	$config['total_rows'] = $this->sms_model->get_count_outbox();
	$config['per_page'] = 15;
	$config['uri_segment'] = 3;
						
	$config['limit'] = $config['per_page'];
	$config['offset'] = $offset;	
	$this->pagination->initialize($config);   
	
	$data['sms'] = $this->sms_model->get_sms_outbox($config['per_page'], $this->uri->segment($config['uri_segment']));	 
	$data['right'] = 'first/sms/sms_keluar';


	switch ($type) {

	case "":
	$param['type'] = $type;			
	$data['sms'] = $this->sms_model->get_sms_outbox();	
	$data['right'] = 'first/sms/sms_keluar';
	break;

	case "tertunda":
	$param['type'] = $type;			
	$data['sms'] = $this->sms_model->get_sms_outbox();	
	$data['right'] = 'first/sms/tertunda';
	break;
	}

		
	$data['menu'] = 'first/sms/menu';
        $this->load->view('first/layout', $data);
    
   	}


// --------------------------------------------------------------------
	
	/**
	 * Sentitems
	 *
	 * Sentitems sms
	 *
	 * @access	public
	 */	


	public function sentitems(){

	$this->load->library('pagination');
	//$config['type'] = $type;
	$config['base_url'] = site_url('/sms/sentitems');
	$config['total_rows'] = $this->sms_model->get_count_sentitems();
	$config['per_page'] = 15;
	$config['uri_segment'] = 3;
						
	$config['limit'] = $config['per_page'];
	$config['offset'] = $offset;	
	$this->pagination->initialize($config);   

	$data['sms'] = $this->sms_model->get_sms_sentitems($config['per_page'], $this->uri->segment($config['uri_segment']));	 
	$data['right'] = 'first/sms/terkirim';

	$data['menu'] = 'first/sms/menu';
        $this->load->view('first/layout', $data);	
    
   	}


// --------------------------------------------------------------------
	
	/**
	 * Conversation
	 *
	 * Conversation sms
	 *
	 * @access	public
	 */	


	public function percakapan(){
	$key = $id;
	// kebutuhan Ajax (Percakapan, detail pelapor, kirim SMS)
	$data['sms'] = $this->sms_model->get_sms_percakapan($this->uri->segment(3));
	
	$data['menu'] = 'first/sms/menu';
	$data['right'] = 'first/sms/percakapan';
	$this->load->view('first/layout',$data);

	}


// --------------------------------------------------------------------
	
	/**
	 * Kirim
	 *
	 * Kirim sms
	 *
	 * @access	public
	 */	

	public function kirim($type=NULL,$cari=NULL, $offset=0){
	// kebutuhan Ajax (kirim SMS)
	// phone number untuk identifikasi nama pengirim jika sudah terdaftar	
	$valid_type = array('single','masal');	
		
	switch ($type) {

	// kirim pesan 
		case "single":
			$param['type'] = $type;
			$data['cari'] = $this->input->post('cari');
			$param['cari'] = $this->input->post('cari');
			$data['sms'] = $this->pengaturan_model->get_pengguna(array('option' => 'cari', 'cari' => $this->input->post('cari')));

			$data['right'] = 'first/sms/kirim';
		        break;

	//
		case "masal":
			$param['type'] = $type;
			$data['kabupaten'] = $this->pengaturan_model->get_wilayah();
        		$data['kecamatan'] = $this->pengaturan_model->get_kecamatan();
       			$data['desa'] = $this->pengaturan_model->get_desa();

			$data['grup'] = $this->pengaturan_model->get_grup();
			$data['right'] = 'first/sms/masal';
		        break;

			}

	$data['menu'] = 'first/sms/menu';
	$this->load->view('first/layout',$data);

	}


	public function kirim_proses($type=NULL, $offset=0){
	// kebutuhan Ajax (kirim SMS)
	// phone number untuk identifikasi nama pengirim jika sudah terdaftar	
	$valid_type = array('single','masal');	
		
	switch ($type) {

	// kirim pesan 
		case "single":
			$param['type'] = $type;
			$kat['no_hp'] = $this->input->post('no_hp');
			$kat['isi_sms'] = trim($this->input->post('isi_sms'));
			
			$data['sms'] = $this->sms_model->send_sms('$kat');
			$data['right'] = 'first/sms/kirim';
		        break;

	//
		case "masal":
			$param['type'] = $type;
			$kat['filter'] = $this->input->post('filter');
			$kat['kabupaten'] = $this->input->post('kab');
        		$kat['kecamatan'] = $this->input->post('kec');
       			$kat['desa'] = $this->input->post('desa');
			$kat['grup'] = $this->input->post('grup');

			$kat['isi_sms'] = trim($this->input->post('isi_sms'));
			$data['sms'] = $this->sms_model->send_sms_masal('$kat');
			$data['right'] = 'first/sms/masal';
		        break;

			}

	$data['menu'] = 'first/sms/menu';
	$this->load->view('first/layout',$data);

	}

}?>
