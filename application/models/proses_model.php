<?php

class Proses_model extends CI_Model {

    	public function __construct() {
        parent::__construct();
        $this->load->database();
    	}

	
// --------------------------------------------------------------------
	
	/**
	 * Proses
	 *
	 * Proses model
	 *
	 * @access	public
	 */

	public function get_count_proses() {
                
	$this->db->from('dalam_proses');	
	$this->db->where('status', 2);
	return $this->db->count_all_results();
    	}
	

	public function get_proses($param) {
                
	$this->db->from('dalam_proses');
	
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
	 * Proses Rilis
	 *
	 * Rilis model
	 *
	 * @access	public
	 */	

	public function get_count_rilis() {
                
	$this->db->from('dalam_proses');	
	$this->db->where('status', 1);
	return $this->db->count_all_results();
    	}
	
	public function get_rilis($param) {
                
	$this->db->from('dalam_proses');
	
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
	$this->db->where('status',1 );
	$result = $this->db->get();	
	return $result;
    	}


// --------------------------------------------------------------------
	
	/**
	 * Proses Arsip
	 *
	 * Arsip model
	 *
	 * @access	public
	 */	
	
	public function get_count_arsip() {
                
	$this->db->from('dalam_proses');	
	$this->db->where('arsip', 1);
	return $this->db->count_all_results();
    	}


	public function get_arsip($param) {
                
	$this->db->from('dalam_proses');
	
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
	$this->db->where('arsip',1 );
	$result = $this->db->get();	
	return $result;
    	}

// --------------------------------------------------------------------
	
	/**
	 * Add Kategori
	 *
	 * @access	public   		 
	 * @return
	 */		
	function add_update($param)
	{
	
	switch($param['type'])
	{
	case 'proses':
		
		$this->db->set('judul', $param['judul']);
		$this->db->set('rangkuman', $param['rangkuman']);
		$this->db->set('keterangan', $param['keterangan']);
		$this->db->set('terusan', $param['terusan']);
		
		if(!empty($param['id'])) 
			{
		$this->db->where('id', $param['id']);
		$this->db->update('dalam_proses');
		} else $this->db->insert('dalam_proses'); 
	
	break;	

	case 'rilis':
		
		$this->db->set('judul', $param['judul']);
		$this->db->set('rangkuman', $param['rangkuman']);
		$this->db->set('keterangan', $param['keterangan']);
		$this->db->set('terusan', $param['terusan']);

		if(!empty($param['id'])) 
			{
		$this->db->where('id', $param['id']);
		$this->db->update('dalam_proses');
		} else $this->db->insert('dalam_proses'); 
				 
	break;	

	case 'arsip':
		
		$this->db->set('judul', $param['judul']);
		$this->db->set('rangkuman', $param['rangkuman']);
		$this->db->set('keterangan', $param['keterangan']);
		$this->db->set('terusan', $param['terusan']);

		if(!empty($param['id'])) 
			{
		$this->db->where('id', $param['id']);
		$this->db->update('dalam_proses');
		} else $this->db->insert('dalam_proses'); 
	break;	

  	}
	}
	
}?>
