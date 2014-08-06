<?php

class Bantuan extends CI_Controller {

	public function __construct() {
        parent::__construct();
        session_start();
		// session check
		if ($this->session->userdata('loggedin')==NULL) redirect('siteman');
		$param['uid'] = $this->session->userdata('id_user');
	}

	public function index(){
	
	//paging, limit, filter
	$data['right'] = 'first/bantuan/referensi';	
	$data['menu'] = 'first/bantuan/menu';
        $this->load->view('first/layout', $data);
    
	}

	public function registered(){
	
	//paging, limit, filter
	$data['right'] = 'first/bantuan/registered';	
	$data['menu'] = 'first/bantuan/menu';
        $this->load->view('first/layout', $data);
    
	}

	
   
}?>
