<?php
class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		session_start();
	}
	
	function index(){

		if ($this->session->userdata('loggedin')==NULL) redirect('siteman');
		
		switch($this->session->userdata('id_auth')){
			case 1: redirect('sms/inbox/inbox'); break; //administrator
			case 2: redirect('proses'); break; // redaksi
			case 3: redirect('sms/inbox/inbox'); break; // admin
			default: redirect('siteman');
		}
	}
	
}
