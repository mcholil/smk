<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siteman extends CI_Controller {
	
	function __construct(){
		parent::__construct();

		$this->load->library('session');
		
	}
	
	function index(){
		
		$this->load->helper('form');
		if($_POST) $this->user_model->siteman();
		$this->load->view('first/login');


	}
	
	
	
	function logout() {
		
		$this->user_model->logout();
		redirect('main');
	}

	function forgot_password(){
		
		$this->load->helper('form');
		//if($_POST) $this->user_model->siteman();
		$this->load->view('first/forgot_password');

	}
	
	function register(){
		
		$this->load->helper('form');
		//
		$this->load->view('first/register');

	}

}
