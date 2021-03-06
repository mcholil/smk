<?php

class Proses extends CI_Controller {

	public function __construct() {
        parent::__construct();
        session_start();

	// session check
	if ($this->session->userdata('loggedin')==NULL) redirect('siteman');
	$param['uid'] = $this->session->userdata('id_user');
	}



	public function index(){
	
	redirect('proses/folder');
    
	}



// --------------------------------------------------------------------
	
	/**
	 * List
	 *
	 * List proses
	 *
	 * @access	public
	 */	

	public function folder($type=NULL){
	
	$valid_type = array('proses','rilis', 'arsip');	

	$this->load->library('pagination');
	$config['type'] = $type;
	$config['base_url'] = site_url('proses/folder');

	switch ($type) {

	// parameter proses
	case "proses":
	$this->load->library('pagination');
	$config['type'] = $type;
	$config['base_url'] = site_url('/proses/folder/proses');
	$config['total_rows'] = $this->proses_model->get_count_proses();
	$config['per_page'] = 15;
	$config['uri_segment'] = 4;					
	$config['limit'] = $config['per_page'];
	$config['offset'] = $offset;	
	$this->pagination->initialize($config);
	$param = array('option' => 'paginate', 'limit' => $config['per_page'], 'offset' => $this->uri->segment($config['uri_segment']));
	$data['proses'] = $this->proses_model->get_proses($param);	
	$data['right'] = 'first/proses/proses';
	break;
 		
	case "rilis":
	$config['type'] = $type;
	//parameter rilis			
	$this->load->library('pagination');
	$config['type'] = $type;
	$config['base_url'] = site_url('/proses/folder/rilis');
	$config['total_rows'] = $this->proses_model->get_count_rilis();
	$config['per_page'] = 15;
	$config['uri_segment'] = 4;					
	$config['limit'] = $config['per_page'];
	$config['offset'] = $offset;	
	$this->pagination->initialize($config);
	$param = array('option' => 'paginate', 'limit' => $config['per_page'], 'offset' => $this->uri->segment($config['uri_segment'])); 
	$data['proses'] = $this->proses_model->get_rilis($param);	
	
	$data['right'] = 'first/proses/rilis';
	break;
		
		
	case "arsip":
	$param['type'] = $type;
	//parameter arsip
	
	$config['type'] = $type;
			
	$this->load->library('pagination');
	$config['type'] = $type;
	$config['base_url'] = site_url('/proses/folder/arsip');
	$config['total_rows'] = $this->proses_model->get_count_arsip();
	$config['per_page'] = 15;
	$config['uri_segment'] = 4;					
	$config['limit'] = $config['per_page'];
	$config['offset'] = $offset;	
	$this->pagination->initialize($config); 
	$data['proses'] = $this->proses_model->get_arsip($config['per_page'], $this->uri->segment($config['uri_segment']));

	$data['right'] = 'first/proses/arsip';

	break;
		}

	//paging, limit, filter
	$data['menu'] = 'first/proses/menu';	
        $this->load->view('first/layout', $data);
   	}



// --------------------------------------------------------------------
	
	/**
	 * Add
	 *
	 * Add proses
	 *
	 * @access	public
	 */	


	public function add($type=NULL){

	$valid_type = array('','rilis','arsip');	
	
	switch ($type) {

		case "":
			$param['type'] = $type;
			//			
			$data['pengaturan'] = $this->pengaturan_model->get_kategori();	
			
		       	$data['right'] = 'first/proses/add_proses';
		        break;
 		
		case "rilis":
			$param['type'] = $type;
			//			
			$data['pengaturan'] = $this->pengaturan_model->get_kategori();	
			
		        $data['right'] = 'first/proses/add_rilis';
		        break;
				
		case "arsip":
			$param['type'] = $type;
			//
			$data['pengaturan'] = $this->pengaturan_model->get_kategori();
		        $data['right'] = 'first/proses/add_arsip';
		        break;
		
		
		}
	//paging, limit, filter
	$data['menu'] = 'first/proses/menu';	
        $this->load->view('first/layout', $data);
   	}



// --------------------------------------------------------------------
	
	/**
	 * Edit
	 *
	 * Edit proses
	 *
	 * @access	public
	 */	



	public function edit($type=NULL){

	$valid_type = array('proses','rilis','arsip');	
	
	switch ($type) {

		case "proses":
			$param['type'] = $type;
			//		
			$data['proses'] = $this->proses_model->get_proses(array('option' => 'by_id', 'id' => $this->uri->segment(4)));	
//			
		$data['kabupaten'] = $this->pengaturan_model->get_wilayah();
       		$data['kecamatan'] = $this->pengaturan_model->get_kecamatan();
  		$data['desa'] = $this->pengaturan_model->get_desa();
		$data['kategori'] = $this->pengaturan_model->get_kategori();
		$data['right'] = 'first/proses/add_proses';
		        break;
 		
		case "rilis":
			$param['type'] = $type;
			//			
			$data['proses'] = $this->proses_model->get_rilis(array('option' => 'by_id', 'id' => $this->uri->segment(4)));

		$data['kabupaten'] = $this->pengaturan_model->get_wilayah();
       		$data['kecamatan'] = $this->pengaturan_model->get_kecamatan();
  		$data['desa'] = $this->pengaturan_model->get_desa();
		$data['kategori'] = $this->pengaturan_model->get_kategori();	
		        $data['right'] = 'first/proses/add_rilis';
		        break;
				
		case "arsip":
			$param['type'] = $type;
			//
			$data['proses'] = $this->proses_model->get_proses(array('option' => 'by_id', 'id' => $this->uri->segment(4)));
		$data['kabupaten'] = $this->pengaturan_model->get_wilayah();
       		$data['kecamatan'] = $this->pengaturan_model->get_kecamatan();
  		$data['desa'] = $this->pengaturan_model->get_desa();	
		$data['kategori'] = $this->pengaturan_model->get_kategori();
		        $data['right'] = 'first/proses/add_arsip';
		        break;
		
		
		}
	//paging, limit, filter
	$data['menu'] = 'first/proses/menu';	
        $this->load->view('first/layout', $data);
   	}
	
// --------------------------------------------------------------------
	
	/**
	 * Add Kategori Wilayah Grup Pengguna
	 *
	 * Process the submitted add/update 
	 *
	 * @access	public   		 
	 */		
	function update($type=NULL, $source=NULL)
	{

	$valid_type = array('proses','rilis','arsip');	
	
	switch ($type) {

	case "proses":
		$kat['type']= $type ;
		$kat['id'] = $this->input->post('id');
		$kat['judul'] = trim($this->input->post('judul'));
		$kat['rangkuman'] = trim($this->input->post('rangkuman'));
		$kat['keterangan'] = trim($this->input->post('keterangan'));
		$kat['terusan'] = trim($this->input->post('terusan'));

	
		$this->proses_model->add_update($kat);
		redirect('proses/folder/proses');
	break;

	case "rilis":
		$kat['type']= $type ;
		$kat['id'] = $this->input->post('id');
		$kat['judul'] = trim($this->input->post('judul'));
		$kat['rangkuman'] = trim($this->input->post('rangkuman'));
		$kat['keterangan'] = trim($this->input->post('keterangan'));
		$kat['terusan'] = trim($this->input->post('terusan'));

	
		$this->proses_model->add_update($kat);
		redirect('proses/folder/rilis');
	break;

	case "arsip":
		$kat['type']= $type ;
		$kat['id'] = $this->input->post('id');
		$kat['judul'] = trim($this->input->post('judul'));
		$kat['rangkuman'] = trim($this->input->post('rangkuman'));
		$kat['keterangan'] = trim($this->input->post('keterangan'));
		$kat['terusan'] = trim($this->input->post('terusan'));

	
		$this->proses_model->add_update($kat);
		redirect('proses/folder/arsip');
	break;

	}

	}

   
}?>
