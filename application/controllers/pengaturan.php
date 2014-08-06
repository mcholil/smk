<?php

class Pengaturan extends CI_Controller {

	public function __construct() {
        parent::__construct();
        session_start();
		// session check
		if ($this->session->userdata('loggedin')==NULL) redirect('siteman');
		$param['uid'] = $this->session->userdata('id_user');
	}

	public function index(){
	
	redirect('pengaturan/folder/kategori');
    
	}


// --------------------------------------------------------------------
	
	/**
	 * List
	 *
	 * List pengaturan
	 *
	 * @access	public
	 */	

	public function folder($type=NULL){
	
	$valid_type = array('kategori','wilayah','kecamatan','desa','grup','pengguna');	
	
	$this->load->library('pagination');
	$config['type'] = $type;
	$config['base_url'] = site_url('pengaturan/folder');


	switch ($type) {


	case "kategori":
	$config['type'] = $type;
	//parameter 	
	$this->load->library('pagination');

	$config['base_url'] = site_url('pengaturan/folder/pengguna');
	$config['total_rows'] = $this->pengaturan_model->get_count_kategori();
	$config['per_page'] = 15;
	$config['uri_segment'] = 4;
						
	$config['limit'] = $config['per_page'];
	$config['offset'] = $offset;

	$param = array('option' => 'paginate', 'limit' => $config['per_page'], 'offset' => $this->uri->segment($config['uri_segment']));
		
	$data['pengaturan'] = $this->pengaturan_model->get_kategori($param);	
		
	$data['right'] = 'first/pengaturan/kategori';
	break;

 		
	case "wilayah":
	$config['type'] = $type;
	//parameter			
	$data['pengaturan'] = $this->pengaturan_model->get_wilayah();	
	
	$data['right'] = 'first/pengaturan/wilayah';
	break;

				
	case "kecamatan":

	$this->load->library('pagination');

	$config['base_url'] = site_url('pengaturan/folder/kecamatan');
	$config['total_rows'] = $this->pengaturan_model->get_count_kecamatan();
	$config['per_page'] = 15;
	$config['uri_segment'] = 4;
						
	$config['limit'] = $config['per_page'];
	$config['offset'] = $offset;	
	$this->pagination->initialize($config);   
	
	$data['pengaturan'] = $this->pengaturan_model->get_kecamatan($config['per_page'], $this->uri->segment($config['uri_segment']));	 
	$data['right'] = 'first/pengaturan/kecamatan';
		
	break;


	case "desa":

	$this->load->library('pagination');

	$config['base_url'] = site_url('pengaturan/folder/desa');
	$config['total_rows'] = $this->pengaturan_model->get_count_kecamatan();
	$config['per_page'] = 15;
	$config['uri_segment'] = 4;
						
	$config['limit'] = $config['per_page'];
	$config['offset'] = $offset;	
	$this->pagination->initialize($config);   

	$data['pengaturan'] = $this->pengaturan_model->get_desa($config['per_page'], $this->uri->segment($config['uri_segment']));	 
	$data['right'] = 'first/pengaturan/desa';

	        break;

	case "grup":
		$param['type'] = $type;
		//
		$data['pengaturan'] = $this->pengaturan_model->get_grup();
	        $data['right'] = 'first/pengaturan/grup';
	        break;

		case "pengguna":
	$this->load->library('pagination');

	$config['base_url'] = site_url('pengaturan/folder/pengguna');
	$config['total_rows'] = $this->pengaturan_model->get_count_pengguna();
	$config['per_page'] = 15;
	$config['uri_segment'] = 4;
						
	$config['limit'] = $config['per_page'];
	$config['offset'] = $offset;	
	$param = array('option' => 'paginate', 'limit' => $config['per_page'], 'offset' => $this->uri->segment($config['uri_segment']));	
	$this->pagination->initialize($config);   
	
	$data['pengaturan'] = $this->pengaturan_model->get_pengguna($param);	 
	$data['right'] = 'first/pengaturan/pengguna';
        break;
		
		}

	//paging, limit, filter
	$data['menu'] = 'first/pengaturan/menu';	
        $this->load->view('first/layout', $data);
   	}


// --------------------------------------------------------------------
	
	/**
	 * Add
	 *
	 * Add pengaturan
	 *
	 * @access	public
	 */	

	public function add($type=NULL, $source=NULL){

	$valid_type = array('kategori','wilayah','kecamatan','desa','grup','pengguna');	
	


	switch ($type) {

	case "kategori":
		$param['type'] = $type;
		//			
		if ($source=='edit')
			{
		$data['pengaturan'] = $this->pengaturan_model->get_kategori(array('option' => 'by_id', 'id' => $this->uri->segment(5)));	
			}
		$data['right'] = 'first/pengaturan/add_kategori';
		break;
 		
	case "wilayah":
		$param['type'] = $type;
		//	
		if ($source=='edit')
			{		
		$data['pengaturan'] = $this->pengaturan_model->get_wilayah(array('option' => 'by_id', 'id' => $this->uri->segment(5)));
			}
		$data['jml_desa'] = $this->pengaturan_model->get_count_desa_kab();	
	        $data['right'] = 'first/pengaturan/add_wilayah';
		break;
				
	case "kecamatan":
		$param['type'] = $type;
		//
		if ($source=='edit')
			{
		$data['pengaturan'] = $this->pengaturan_model->get_kecamatan(array('option' => 'by_id2', 'id' => $this->uri->segment(5)));

		}
		else if ($source=='add')
			{
		$data['kab'] = $this->pengaturan_model->get_wilayah(array('option' => 'by_id', 'id' => $this->uri->segment(5)));
		}
	        $data['right'] = 'first/pengaturan/add_kecamatan';
	        break;

	case "desa":
		$param['type'] = $type;
		//
		if ($source=='edit')
			{
		$data['pengaturan'] = $this->pengaturan_model->get_desa(array('option' => 'by_id2', 'id' => $this->uri->segment(5)));
		} else if ($source=='add'){
		$data['kec'] = $this->pengaturan_model->get_kecamatan(array('option' => 'by_id2', 'id' => $this->uri->segment(5)));
		
		}
	        $data['right'] = 'first/pengaturan/add_desa';
	        break;

	case "grup":
		$param['type'] = $type;
		//
		if ($source=='edit')
			{		
		$data['pengaturan'] = $this->pengaturan_model->get_grup(array('option' => 'by_id', 'id' => $this->uri->segment(5)));
		}	        
		$data['right'] = 'first/pengaturan/add_grup';
	        break;

	case "pengguna":
			$param['type'] = $type;
			//
		if ($source=='edit')
			{	
		$data['kabupaten'] = $this->pengaturan_model->get_wilayah();
       		$data['kecamatan'] = $this->pengaturan_model->get_kecamatan();
  		$data['desa'] = $this->pengaturan_model->get_desa();
		$data['pengaturan'] = $this->pengaturan_model->get_pengguna(array('option' => 'by_id', 'id' => $this->uri->segment(5)));
		}
		$data['right'] = 'first/pengaturan/add_pengguna';
		break;
		}

	//paging, limit, filter
	$data['menu'] = 'first/pengaturan/menu';	
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

	$valid_type = array('kategori','wilayah','kecamatan','desa','grup','pengguna');	
	
	switch ($type) {

	case "kategori":
	$param['type'] = $type;
	//	
	$data['pengaturan'] = $this->pengaturan_model->get_kategori(array('option' => 'by_id', 'id' => $this->uri->segment(4)));			
	//	
		
	$data['right'] = 'first/pengaturan/add_kategori';
        break;
 		
	case "wilayah":
	$param['type'] = $type;
	//			
	$data['pengaturan'] = $this->pengaturan_model->get_wilayah();	
			
        $data['right'] = 'first/pengaturan/add_wilayah';
        break;
				
	case "kecamatan":
	$param['type'] = $type;
	// 
	$data['pengaturan'] = $this->pengaturan_model->get_kecamatan(array('option' => 'by_id', 'id' => $this->uri->segment(4)));
	$data['kab'] = $this->pengaturan_model->get_wilayah(array('option' => 'by_id', 'id' => $this->uri->segment(4)));
        $data['right'] = 'first/pengaturan/kecamatan';
        break;

	case "desa":
	$param['type'] = $type;
	//
	$data['pengaturan'] = $this->pengaturan_model->get_desa(array('option' => 'by_id', 'id' => $this->uri->segment(4)));
	$data['kec'] = $this->pengaturan_model->get_kecamatan(array('option' => 'by_id2', 'id' => $this->uri->segment(4)));
        $data['right'] = 'first/pengaturan/desa';
        break;

	case "grup":
	$param['type'] = $type;
	//
	$data['pengaturan'] = $this->pengaturan_model->get_grup();
        $data['right'] = 'first/pengaturan/add_grup';
        break;

	case "pengguna":
	//    
	$data['pengaturan'] = $this->pengaturan_model->get_pengguna(array('option' => 'by_id', 'id' => $this->uri->segment(4)));
	$data['right'] = 'first/pengaturan/add_pengguna';
	break;
	}

	//paging, limit, filter
	$data['menu'] = 'first/pengaturan/menu';	
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

	$valid_type = array('kategori','wilayah','kecamatan','desa','grup','pengguna');	
	
	switch ($type) {

	case "kategori":
		$kat['type']= $type ;
		$kat['id'] = $this->input->post('id');
		$kat['nama'] = trim($this->input->post('nama'));
		$kat['keterangan'] = trim($this->input->post('keterangan'));
			
		$this->pengaturan_model->add_update($kat);
		redirect('pengaturan/folder/kategori');
	break;

	case "wilayah":
		$kat['type']= $type ;
		$kat['id'] = $this->input->post('id');
		$kat['nama'] = trim($this->input->post('nama'));
				
		$this->pengaturan_model->add_update($kat);
		redirect('pengaturan/folder/wilayah');
	break;

	case "kecamatan":
		$kat['type']= $type ;
		$kat['id_kab'] = trim($this->input->post('id_kab'));
		$kat['nama'] = trim($this->input->post('nama'));
			
		$this->pengaturan_model->add_update($kat);
		redirect('pengaturan/detail/kecamatan/'.$kat['id_kab']);
	break;

	case "desa":
		$kat['type']= $type ;
		$kat['id_kec'] = trim($this->input->post('id_kec'));
		$kat['nama'] = trim($this->input->post('nama'));
			
		$this->pengaturan_model->add_update($kat);
		redirect('pengaturan/detail/desa/'.$kat['id_kec']);
	break;

	case "grup":
		
		$kat['type']= $type ;
		$kat['id'] = $this->input->post('id');
		$kat['nama'] = trim($this->input->post('nama'));
		$kat['keterangan'] = trim($this->input->post('keterangan'));
		
	
		$this->pengaturan_model->add_update($kat);
		redirect('pengaturan/folder/grup');
	break;

	case "pengguna":
		$kat['type']= $type ;
		$kat['id'] = $this->input->post('id');
		$kat['nama'] = trim($this->input->post('nama'));
		$kat['alamat'] = trim($this->input->post('alamat'));
		$kat['profesi'] = trim($this->input->post('profesi'));
		$kat['no_hp'] = trim($this->input->post('no_hp'));
		$kat['username'] = trim($this->input->post('username'));
		$kat['password'] = trim($this->input->post('password'));


		$this->pengaturan_model->add_update($kat);
		redirect('pengaturan/folder/pengguna');
	break;
	}


	}


// --------------------------------------------------------------------
	
	/**
	 * Delete
	 *
	 * Del pengaturan
	 *
	 * @access	public
	 */	

	public function del($type=NULL, $source=NULL){

	$valid_type = array('kategori','wilayah','kecamatan','desa','grup','pengguna');	
	


	switch ($type) {

	case "kategori":
		$param['type'] = $type;
		//			
		$this->pengaturan_model->del_kategori();
		//$data['right'] = 'first/pengaturan/add_kategori';
		redirect('pengaturan/folder/kategori');
		break;
 		
	case "wilayah":
		$param['type'] = $type;
		//	
		if ($source=='del')
			{		
		$data['pengaturan'] = $this->pengaturan_model->get_wilayah(array('option' => 'by_id', 'id' => $this->uri->segment(5)));
			}
		$data['jml_desa'] = $this->pengaturan_model->get_count_desa_kab();	
	        $data['right'] = 'first/pengaturan/add_wilayah';
		redirect('pengaturan/folder/kategori');
		break;
				
	case "kecamatan":
		$param['type'] = $type;
		//
		if ($source=='del')
			{
		$data['pengaturan'] = $this->pengaturan_model->get_kecamatan(array('option' => 'by_id2', 'id' => $this->uri->segment(5)));

		}
		else if ($source=='add')
			{
		$data['kab'] = $this->pengaturan_model->get_wilayah(array('option' => 'by_id', 'id' => $this->uri->segment(5)));
		}
	        $data['right'] = 'first/pengaturan/add_kecamatan';
	        break;

	case "desa":
		$param['type'] = $type;
		//
		if ($source=='del')
			{
		$data['pengaturan'] = $this->pengaturan_model->get_desa(array('option' => 'by_id2', 'id' => $this->uri->segment(5)));
		} else if ($source=='add'){
		$data['kec'] = $this->pengaturan_model->get_kecamatan(array('option' => 'by_id2', 'id' => $this->uri->segment(5)));
		
		}
	        $data['right'] = 'first/pengaturan/add_desa';
	        break;

	case "grup":
		$param['type'] = $type;
		//
		if ($source=='del')
			{		
		$data['pengaturan'] = $this->pengaturan_model->get_grup(array('option' => 'by_id', 'id' => $this->uri->segment(5)));
		}	        
		$data['right'] = 'first/pengaturan/add_grup';
	        break;

	case "pengguna":
			$param['type'] = $type;
			//
		if ($source=='del')
			{	
		$data['kabupaten'] = $this->pengaturan_model->get_wilayah();
       		$data['kecamatan'] = $this->pengaturan_model->get_kecamatan();
  		$data['desa'] = $this->pengaturan_model->get_desa();
		$data['pengaturan'] = $this->pengaturan_model->get_pengguna(array('option' => 'by_id', 'id' => $this->uri->segment(5)));
		}
		$data['right'] = 'first/pengaturan/add_pengguna';
		break;
		}

	//paging, limit, filter
	$data['menu'] = 'first/pengaturan/menu';	
        $this->load->view('first/layout', $data);

	}
   




// --------------------------------------------------------------------
	
	/**
	 * Profil
	 *
	 * Profil pengaturan
	 *
	 * @access	public
	 */	

	public function profil(){
	
	//paging, limit, filter
	$param['uid'] = $this->session->userdata('id_user');
	$data['right'] = 'first/pengaturan/profil';	
	$data['profil'] = $this->user_model->getUsers($param);
	$data['menu'] = 'first/bantuan/menu';
        $this->load->view('first/layout', $data);
    
	}

// --------------------------------------------------------------------
	
	/**
	 * Setting
	 *
	 * Setting 
	 *
	 * @access	public
	 */	

	public function setting(){
	
	//paging, limit, filter
	$param['uid'] = 1;
	$data['right'] = 'first/pengaturan/setting';	
	$data['config'] = $this->user_model->getConfig($param);
	$data['menu'] = 'first/bantuan/menu';
        $this->load->view('first/layout', $data);
    
	}

// --------------------------------------------------------------------
	
	/**
	 * Dump Database
	 *
	 * Database
	 *
	 * @access	public
	 */	

	public function dump_database(){
	
	//paging, limit, filter
	$param['uid'] = 1;
	$data['right'] = 'first/pengaturan/dump_database';	
	//
	$data['menu'] = 'first/bantuan/menu';
        $this->load->view('first/layout', $data);
    
	}

}?>
