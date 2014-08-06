<?php

class Statistik extends CI_Controller {

	public function __construct() {
        parent::__construct();
        session_start();
		// session check
		if ($this->session->userdata('loggedin')==NULL) redirect('siteman');
		$param['uid'] = $this->session->userdata('id_user');
	}


	public function index(){
	
	redirect('statistik/folder/wilayah');
    
	}


// --------------------------------------------------------------------
	
	/**
	 * Proses Statistik
	 *
	 * Statistik model
	 *
	 * @access	public
	 */	


	public function folder($type=NULL){
	
	$valid_type = array('wilayah','kecamatan','desa','waktu','kategori','kontemporer');	
	
	$this->load->library('pagination');
	$config['type'] = $type;
	$config['base_url'] = site_url('statistik/folder');


	switch ($type) {

	case "wilayah":
		$param['type'] = $type;
		//parameter wilayah			
		$data['statistik'] = $this->statistik_model->get_wilayah();
		
		$data['right'] = 'first/statistik/wilayah';
	break;

	case "kecamatan":

	$this->load->library('pagination');

	$config['base_url'] = site_url('statistik/folder/kecamatan');
	$config['total_rows'] = $this->statistik_model->get_count_kecamatan();
	$config['per_page'] = 15;
	$config['uri_segment'] = 4;
						
	$config['limit'] = $config['per_page'];
	$config['offset'] = $offset;	
	$this->pagination->initialize($config);   

	$data['statistik'] = $this->statistik_model->get_kecamatan($config['per_page'], $this->uri->segment($config['uri_segment']));
	$data['right'] = 'first/statistik/kecamatan';
	break;


	case "desa":
	$this->load->library('pagination');

	$config['base_url'] = site_url('statistik/folder/desa');
	$config['total_rows'] = $this->statistik_model->get_count_desa();
	$config['per_page'] = 15;
	$config['uri_segment'] = 4;
						
	$config['limit'] = $config['per_page'];
	$config['offset'] = $offset;	
	$this->pagination->initialize($config);   

	$data['statistik'] = $this->statistik_model->get_desa($config['per_page'], $this->uri->segment($config['uri_segment']));
	$data['right'] = 'first/statistik/desa';
	break;
 	
	
	case "waktu":
	$param['type'] = $type;
	//parameter waktu			
	$data['statistik'] = $this->statistik_model->get_waktu();	
			
	$data['right'] = 'first/statistik/waktu';
	break;
		
		
	case "kategori":
		$param['type'] = $type;
		//parameter kategori
		$data['statistik'] = $this->statistik_model->get_kategori();
		
	        $data['right'] = 'first/statistik/kategori';
	        break;


	case "kontemporer":
		$param['type'] = $type;
		//parameter kontemporer
		$data['statistik'] = $this->statistik_model->get_kontemporer();
	        $data['right'] = 'first/statistik/kontemporer';
	        break;
	}

	//paging, limit, filter
	$data['menu'] = 'first/statistik/menu';	
        $this->load->view('first/layout', $data);
   	}
	
// --------------------------------------------------------------------
	
	/**
	 * Detail
	 *
	 * Detail pengaturan
	 *
	 * @access	public
	 */	


	public function detail($type=NULL){

	$valid_type = array('wilayah','kecamatan','desa');	
	
	switch ($type) {

 		
	case "wilayah":
	$param['type'] = $type;
	//			
	$data['statistik'] = $this->statistik_model->get_wilayah();	
			
        $data['right'] = 'first/statistik/add_wilayah';
        break;
				
	case "kecamatan":
	$param['type'] = $type;
	// 
	$data['statistik'] = $this->statistik_model->get_kecamatan(array('option' => 'by_id', 'id' => $this->uri->segment(4)));
        $data['right'] = 'first/statistik/kecamatan';
        break;

	case "desa":
	$param['type'] = $type;
	//
	$data['statistik'] = $this->statistik_model->get_desa(array('option' => 'by_id', 'id' => $this->uri->segment(4)));
        $data['right'] = 'first/statistik/desa';
        break;

	
	}

	//paging, limit, filter
	$data['menu'] = 'first/statistik/menu';	
        $this->load->view('first/layout', $data);

	}

   
}?>
