<?php

class User_Model extends CI_Model{

	function __construct(){
		parent::__construct();
	}
	
	function siteman(){
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));
		
		$this->db->from('user');
		$this->db->where('no_hp', $username);
		$this->db->where('password', $password);
		$query = $this->db->get();
		
		if($query->num_rows()=='1') {
			$this->session->set_userdata('loggedin', 'TRUE');
			$this->session->set_userdata('id_auth', $query->row('id_auth'));
			$this->session->set_userdata('id_user', $query->row('id'));
			$this->session->set_userdata('username', $query->row('username'));
			
			redirect('sms/inbox/inbox');
		}
		else
			$this->session->set_flashdata('errorlogin', 'Nomor Hp dan Password anda salah, mohon diulang kembali!');
		
			
	}
	
	

	// --------------------------------------------------------------------
	
	/**
	 * Get User
	 *
	 * @access	public   		 
	 * @param	mixed $param
	 * @return	object
	 */		
	function getUsers($param)
	{
		$this->db->from('user');
		
		switch($param['option'])
		{
			case 'all':
			$this->db->select('*');
			break;
			
			case 'paginate':
			$this->db->limit($param['limit'], $param['offset']);
			break;
			
			case 'by_id':
			$this->db->where('id', $param['uid']);
			break;

			case 'search':
			$this->db->like('realname', $this->input->post('search_name'));
			break;			
		}
		
		return $this->db->get();
	}

// --------------------------------------------------------------------
	
	/**
	 * Get Config

	 *
	 * @access	public   		 
	 * @param	mixed $param
	 * @return	object

	 */		
	function getConfig($param)
	{
		$this->db->from('config');
		
		switch($param['option'])
		{
			case 'all':
			$this->db->select('*');
			break;
			
			case 'paginate':
			$this->db->limit($param['limit'], $param['offset']);
			break;
			
			case 'by_id':
			$this->db->where('id', $param['uid']);
			break;

			case 'search':
			$this->db->like('realname', $this->input->post('search_name'));
			break;			
		}
		
		return $this->db->get();
	}



	
	function logout()
	{
		

		$this->session->sess_destroy();
		redirect('siteman');
	}
		
	
}
?>
