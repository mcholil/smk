<?php

class Statistik_model extends CI_Model {

    	public function __construct() {
        parent::__construct();
        $this->load->database();
    	}

	
	public function get_wilayah() {
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

	public function get_count_desa() {
        $this->db->select('id_desa');
        $this->db->distinct('id_desa');         
	$this->db->from('dalam_proses');	
	return $this->db->count_all_results();
    	}



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

	// jumlah desa kabupaten
	public function get_count_desa_kab($param) {
                
	$this->db->from('ref_desa');	
	$this->db->join('ref_kecamatan', 'ref_desa.id_kec = ref_kecamatan.id');
	$this->db->join('ref_kabupaten', 'ref_kecamatan.id_kab = ref_kabupaten.id', 'left');
        
        $this->db->where('id_kab', $param);
	
	return $this->db->count_all_results();
    	}
	

	// jumlah desa kecamatan
	public function get_count_desa_kec($param) {
                
	$this->db->from('ref_desa');	
	$this->db->join('ref_kecamatan', 'ref_desa.id_kec = ref_kecamatan.id');
	$this->db->join('ref_kabupaten', 'ref_kecamatan.id_kab = ref_kabupaten.id', 'left');
        
        $this->db->where('id_kec', $param);
	
	return $this->db->count_all_results();
    	}

	// jumlah laporan kabupaten
	public function get_count_lap_kab($param) {
                
	$this->db->from('dalam_proses');
	$this->db->join('ref_desa', 'dalam_proses.id_desa = ref_desa.id');
	$this->db->join('ref_kecamatan', 'ref_desa.id_kec = ref_kecamatan.id', 'left');
	$this->db->join('ref_kabupaten', 'ref_kecamatan.id_kab = ref_kabupaten.id', 'left');
        
        $this->db->where('dalam_proses.id_kab', $param);
	
	return $this->db->count_all_results();
    	}

	// jumlah laporan kecamatan
	public function get_count_lap_kec($param) {
                
	$this->db->from('dalam_proses');
	$this->db->join('ref_desa', 'dalam_proses.id_desa = ref_desa.id');
	$this->db->join('ref_kecamatan', 'ref_desa.id_kec = ref_kecamatan.id', 'left');
	$this->db->join('ref_kabupaten', 'ref_kecamatan.id_kab = ref_kabupaten.id', 'left');
        
        $this->db->where('dalam_proses.id_kec', $param);
	
	return $this->db->count_all_results();
    	}

	// jumlah laporan desa
	public function get_count_lap_desa($param) {
                
	$this->db->from('dalam_proses');
	$this->db->join('ref_desa', 'dalam_proses.id_desa = ref_desa.id');
	$this->db->join('ref_kecamatan', 'ref_desa.id_kec = ref_kecamatan.id', 'left');
	$this->db->join('ref_kabupaten', 'ref_kecamatan.id_kab = ref_kabupaten.id', 'left');
        
        $this->db->where('dalam_proses.id_desa', $param);
	
	return $this->db->count_all_results();
    	}
	
	// jumlah laporan waktu
	public function get_waktu() {
                
	$this->db->from('dalam_proses');	
	$result = $this->db->get();	
	return $result;
    	}
	
	public function get_kategori() {
                
	$this->db->from('dalam_proses');	
	$result = $this->db->get();
		
	return $result;
    	}
	
	public function get_kontemporer() {
                
	$this->db->from('dalam_proses');	
	$result = $this->db->get();
		
	return $result;
    	}
	
}?>
