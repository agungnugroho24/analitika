<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->library('logincheck'); //this library for sincronize session between host app and sso
		$this->logincheck->check(); //this function for checking current user sesssion
		
		$this->load->model('Crud');				
		$this->load->helper('url');
		
		if(!$this->session->userdata('login')){
			redirect('login/logout');
			//or get some code for error display
		}else{
			if($this->session->userdata('role') == "user"){
				redirect('login/logout');
			}
		}
	}
	
	public function index()
	{
		$data['title'] = "Analitika";
		$this->load->view("admin/template/header",$data);
		$this->load->view("admin/template/navbar",$data);
		$this->load->view("admin/template/sidebar",$data);

		$data['homepage'] = $this->Crud->read_data_view()->result();
		
		$this->load->view("admin/dashboard",$data);
		$this->load->view("admin/template/footer",$data);
        $this->load->view("admin/template/js",$data);
	}

	public function listbuletin()
	{
		$data['title'] = "Analitika";
		$this->load->view("admin/template/header",$data);
		$this->load->view("admin/template/navbar",$data);
		$this->load->view("admin/template/sidebar",$data);

		$data['file'] = $this->Crud->read_data();
		// $data['file'] = $this->Crud->read_data()->result();
		// $this->load->view("admin/home",$data);
		
		$this->load->view("admin/bulletin",$data);
		$this->load->view("admin/template/footer",$data);
        $this->load->view("admin/template/js",$data);
	}

	public function faq()
	{
		$data['title'] = "Analitika";
		$this->load->view("admin/template/header",$data);
		$this->load->view("admin/template/navbar",$data);
		$this->load->view("admin/template/sidebar",$data);

		$data['faq'] = $this->Crud->read_data_faq()->result();
		
		$this->load->view("admin/faq",$data);
		$this->load->view("admin/template/footer",$data);
        $this->load->view("admin/template/js",$data);
	}

	public function actlog()
	{
		$data['title'] = "Analitika";
		$this->load->view("admin/template/header",$data);
		$this->load->view("admin/template/navbar",$data);
		$this->load->view("admin/template/sidebar",$data);

		$data['log_activity'] = $this->Crud->read_data_actlog();
		// $data['file'] = $this->Crud->read_data()->result();
		// $this->load->view("admin/home",$data);
		
		$this->load->view("admin/actlog",$data);
		$this->load->view("admin/template/footer",$data);
        $this->load->view("admin/template/js",$data);
	}

	public function createview()
	{
		$data['title'] = "form_analitika";
		$this->load->view("admin/template/header",$data);
		$this->load->view("admin/template/navbar",$data);
		$this->load->view("admin/template/sidebar",$data);
		$this->load->view("admin/create",$data);
		$this->load->view("admin/template/footer",$data);
        $this->load->view("admin/template/js",$data);
	}

	public function createhomepage()
	{
		$data['title'] = "Analitika";
		$this->load->view("admin/template/header",$data);
		$this->load->view("admin/template/navbar",$data);
		$this->load->view("admin/template/sidebar",$data);
		$this->load->view("admin/createview",$data);
		$this->load->view("admin/template/footer",$data);
        $this->load->view("admin/template/js",$data);
	}

	public function createfaq()
	{
		$data['title'] = "Analitika";
		$this->load->view("admin/template/header",$data);
		$this->load->view("admin/template/navbar",$data);
		$this->load->view("admin/template/sidebar",$data);
		$this->load->view("admin/createfaq",$data);
		$this->load->view("admin/template/footer",$data);
        $this->load->view("admin/template/js",$data);
	}

	function create(){
		$judulbuletin = $this->input->post('judulbuletin');
		$judulpaper = $this->input->post('judulpaper');
		$sumber = $this->input->post('sumber');
		$penulispaper = $this->input->post('penulispaper');
		$edisiterbitpaper = $this->input->post('edisiterbitpaper');
		$teksringkasan = $this->input->post('teksringkasan');
		$periode = $this->input->post('periode');
		$tag = $this->input->post('tag');
		$kategori = $this->input->post('kategori');
		$tglcreate = $this->input->post('tglcreate');
		$uploader = $this->input->post('uploader');
 
		$data = array(
			'judul_buletin' => $judulbuletin,
			'judul_paper' => $judulpaper,
			'sumber' => $sumber,
			'penulis_paper' => $penulispaper,
			'edisi_terbit_paper' => $edisiterbitpaper,
			'teks_ringkasan' => $teksringkasan,
			'periode' => $periode,
			'tag' => $tag,
			'kategori' => $kategori,
			'tglcreate' => $tglcreate,
			'uploader' => $uploader
		);
		if(!empty($_FILES['cover']['name']))
        {
            $upload = $this->cover();
			$data['cover'] = $upload;
			$data['tipe_file'] = $this->upload->data('file_ext');
			$data['ukuran_file'] = $this->upload->data('file_size');
			$data['nama_file'] =  $this->upload->data('file_name');
		}
		if(!empty($_FILES['cover2']['name']))
        {
            $upload = $this->cover2();
			$data['cover2'] = $upload;
			$data['tipe_file2'] = $this->upload->data('file_ext');
			$data['ukuran_file2'] = $this->upload->data('file_size');
			$data['nama_file2'] =  $this->upload->data('file_name');
		}
		if(!empty($_FILES['cover3']['name']))
        {
            $upload = $this->cover3();
			$data['cover3'] = $upload;
			$data['tipe_file3'] = $this->upload->data('file_ext');
			$data['ukuran_file3'] = $this->upload->data('file_size');
			$data['nama_file3'] =  $this->upload->data('file_name');
		}
		if(!empty($_FILES['uploadfile']['name']))
        {
            $upload = $this->uploadfile();
			$data['uploadfile'] = $upload;
			$data['tipe_file4'] = $this->upload->data('file_ext');
			$data['ukuran_file4'] = $this->upload->data('file_size');
			$data['nama_file4'] =  $this->upload->data('file_name');
        }
		$this->Crud->create_data($data,'file');
		echo json_encode(array("status" => TRUE));
		//Panggil helper log
		helper_log("add", "Menambahkan data <b>$judulbuletin</b>");
		//silahkan di ganti2 aja kalimatnya
		redirect('admin/listbuletin');
	}

	function create2(){
		$alamat = $this->input->post('alamat');
		$tlp = $this->input->post('tlp');
		$fax = $this->input->post('fax');
		$email = $this->input->post('email');
		$tentang = $this->input->post('tentang');
 
		$data = array(
			'alamat' => $alamat,
			'tlp' => $tlp,
			'fax' => $fax,
			'email' => $email,
			'tentang' => $tentang
		);
		if(!empty($_FILES['banner']['name']))
        {
            $upload = $this->banner();
			$data['banner'] = $upload;
			$data['tipe_file'] = $this->upload->data('file_ext');
			$data['ukuran_file'] = $this->upload->data('file_size');
			$data['nama_file'] =  $this->upload->data('file_name');
		}
		if(!empty($_FILES['banner2']['name']))
        {
            $upload = $this->banner2();
			$data['banner2'] = $upload;
			$data['tipe_file2'] = $this->upload->data('file_ext');
			$data['ukuran_file2'] = $this->upload->data('file_size');
			$data['nama_file2'] =  $this->upload->data('file_name');
		}
		if(!empty($_FILES['banner3']['name']))
        {
            $upload = $this->banner3();
			$data['banner3'] = $upload;
			$data['tipe_file3'] = $this->upload->data('file_ext');
			$data['ukuran_file3'] = $this->upload->data('file_size');
			$data['nama_file3'] =  $this->upload->data('file_name');
		}
		if(!empty($_FILES['banner4']['name']))
        {
            $upload = $this->banner4();
			$data['banner4'] = $upload;
			$data['tipe_file4'] = $this->upload->data('file_ext');
			$data['ukuran_file4'] = $this->upload->data('file_size');
			$data['nama_file4'] =  $this->upload->data('file_name');
        }
		$this->Crud->create_data($data,'homepage');
		echo json_encode(array("status" => TRUE));
		redirect('admin/index');
	}

	function create3(){
		$pertanyaan1 = $this->input->post('pertanyaan1');
		$pertanyaan2 = $this->input->post('pertanyaan2');
		$jawaban1 = $this->input->post('jawaban1');
		$jawaban2 = $this->input->post('jawaban2');
 
		$data = array(
			'pertanyaan1' => $pertanyaan1,
			'pertanyaan2' => $pertanyaan2,
			'jawaban1' => $jawaban1,
			'jawaban2' => $jawaban2
		);

		$this->Crud->create_data($data,'faq');
		echo json_encode(array("status" => TRUE));
		redirect('admin/faq');
	}

	private function cover()
    {
    	$config['upload_path']          = './upload/image/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1000; // set max width image allowed
        // $config['max_height']           = 1000; // set max height allowed
 
        $this->load->library('upload', $config);
 
        if(!$this->upload->do_upload('cover')) //upload and validate
        {
            //$data['inputerror'][] = 'cover';
            //$data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
			//$data['status'] = FALSE;
            //echo json_encode($data);
            //exit();
			$this->session->set_flashdata("msg", 'Upload error: '.$this->upload->display_errors('',''));
			redirect('admin/createview');
        }
        return $this->upload->data('file_name');
	}
	
	private function cover2()
    {
        $config['upload_path']          = './upload/image/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1000; // set max width image allowed
        // $config['max_height']           = 1000; // set max height allowed
 
        $this->load->library('upload', $config);
 
        if(!$this->upload->do_upload('cover2')) //upload and validate
        {
            //$data['inputerror'][] = 'cover2';
            //$data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
			//$data['status'] = FALSE;
            //echo json_encode($data);
            //exit();
			$this->session->set_flashdata("msg", 'Upload error: '.$this->upload->display_errors('',''));
			redirect('admin/createview');
        }
        return $this->upload->data('file_name');
	}
	
	private function cover3()
    {
        $config['upload_path']          = './upload/image/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1000; // set max width image allowed
        // $config['max_height']           = 1000; // set max height allowed
 
        $this->load->library('upload', $config);
 
        if(!$this->upload->do_upload('cover3')) //upload and validate
        {
            //$data['inputerror'][] = 'cover3';
            //$data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
			//$data['status'] = FALSE;
            //echo json_encode($data);
            //exit();
			$this->session->set_flashdata("msg", 'Upload error: '.$this->upload->display_errors('',''));
			redirect('admin/createview');
        }
        return $this->upload->data('file_name');
	}
	
	private function uploadfile()
    {
		//ini_set('post_max_size', '64M');
		//ini_set('upload_max_filesize', '64M');
        $config['upload_path']          = './upload/file/';
		$config['allowed_types']        = 'pdf';
		$config['overwrite']			= true;
		$config['max_size']             = 8192; // 8MB
        // $config['max_width']            = 1000; // set max width image allowed
        // $config['max_height']           = 1000; // set max height allowed
 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
 
        if(!$this->upload->do_upload('uploadfile')) //upload and validate
        {
            //$data['inputerror'][] = 'uploadfile';
            //$data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
			//$data['status'] = FALSE;
            //echo json_encode($data);
            //exit();
			$this->session->set_flashdata("msg", 'Upload error: '.$this->upload->display_errors('',''));
			redirect('admin/createview');
        }
        return $this->upload->data('file_name');
	}
	
	private function banner()
    {
    	$config['upload_path']          = './upload/banner/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['overwrite']			= true;
		$config['max_size']             = 8192; // 1MB
        // $config['max_width']            = 1000; // set max width image allowed
        // $config['max_height']           = 1000; // set max height allowed
 
        $this->load->library('upload', $config);
 
        if(!$this->upload->do_upload('banner')) //upload and validate
        {
            $data['inputerror'][] = 'banner';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
			$data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
	}
	
	private function banner2()
    {
        $config['upload_path']          = './upload/banner/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['overwrite']			= true;
		$config['max_size']             = 8192; // 1MB
        // $config['max_width']            = 1000; // set max width image allowed
        // $config['max_height']           = 1000; // set max height allowed
 
        $this->load->library('upload', $config);
 
        if(!$this->upload->do_upload('banner2')) //upload and validate
        {
            $data['inputerror'][] = 'banner2';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
			$data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
	}
	
	private function banner3()
    {
        $config['upload_path']          = './upload/banner/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1000; // set max width image allowed
        // $config['max_height']           = 1000; // set max height allowed
 
        $this->load->library('upload', $config);
 
        if(!$this->upload->do_upload('banner3')) //upload and validate
        {
            $data['inputerror'][] = 'banner3';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
			$data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
	}
	
	private function banner4()
    {
        $config['upload_path']          = './upload/banner/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1000; // set max width image allowed
        // $config['max_height']           = 1000; // set max height allowed
 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
 
        if(!$this->upload->do_upload('banner4')) //upload and validate
        {
            $data['inputerror'][] = 'banner4';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
			$data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }

	// function delete($id=""){
	// 	if(!empty($id)){
	// 		$getdata = $this->Crud->get_by_id($id);
	// 		if(empty($getdata)){
	// 			//some page  errorto show
	// 			exit;
	// 		}

	// 		$where = array('id' => $id);
	// 		$this->Crud->delete_data($where,'file');
	// 		redirect('admin/listbuletin');
	// 	}else{
	// 		//some error page to show
	// 	}
	// }

	function delete(){
		$id = $this->input->post('id');
		$judulbuletin=$this->input->post('judulbuletin');
		$this->Crud->delete_data($id);
		helper_log("delete", "Menghapus data <b>$judulbuletin</b>");
		// $this->Crud->delete_data($id,'file');
        redirect('admin/listbuletin');
    }

	function deleteview($id=""){
		if(!empty($id)){
			$getdata = $this->Crud->get_by_id($id);
			if(empty($getdata)){
				//some page  errorto show
				exit;
			}

			$where = array('id' => $id);
			$this->Crud->delete_data($where,'homepage');
			redirect('admin/index');
		}else{
			//some error page to show
		}
	}

	function edit($id = ""){
		if(!empty($id)){
			$data['title'] = "Analitika";
			$this->load->view("admin/template/header",$data);
			$this->load->view("admin/template/navbar",$data);
			$this->load->view("admin/template/sidebar",$data);
			
			//first check if exist
			$getdata = $this->Crud->get_by_id($id);
			if(empty($getdata)){
				//some page  errorto show
				exit;
			}

			$where = array('id' => $id);
			$data['file'] = $this->Crud->edit_data($where,'file')->result();

			$this->load->view('admin/edit',$data);
			$this->load->view("admin/template/footer",$data);
			$this->load->view("admin/template/js",$data);
		}else{
			//some page error to show on user
		}
	}

	function editview($id = ""){
		if(!empty($id)){
			$data['title'] = "Analitika";
			$this->load->view("admin/template/header",$data);
			$this->load->view("admin/template/navbar",$data);
			$this->load->view("admin/template/sidebar",$data);
			
			//first check if exist
			$getdata = $this->Crud->get_by_id_banner($id);
			if(empty($getdata)){
				//some page  errorto show
				exit;
			}

			$where = array('id' => $id);
			$data['homepage'] = $this->Crud->edit_data($where,'homepage')->result();

			$this->load->view('admin/editview',$data);
			$this->load->view("admin/template/footer",$data);
			$this->load->view("admin/template/js",$data);
		}else{
			//some page error to show on user
		}
	}

	function editfaq($id = ""){
		if(!empty($id)){
			$data['title'] = "Analitika";
			$this->load->view("admin/template/header",$data);
			$this->load->view("admin/template/navbar",$data);
			$this->load->view("admin/template/sidebar",$data);
			
			//first check if exist
			$getdata = $this->Crud->get_by_id_faq($id);
			if(empty($getdata)){
				//some page  errorto show
				exit;
			}

			$where = array('id' => $id);
			$data['faq'] = $this->Crud->edit_data($where,'faq')->result();

			$this->load->view('admin/editfaq',$data);
			$this->load->view("admin/template/footer",$data);
			$this->load->view("admin/template/js",$data);
		}else{
			//some page error to show on user
		}
	}

	function update(){
		// $id = $this->input->post('id');
		$judulbuletin = $this->input->post('judulbuletin');
		$judulpaper = $this->input->post('judulpaper');
		$sumber = $this->input->post('sumber');
		$penulispaper = $this->input->post('penulispaper');
		$edisiterbitpaper = $this->input->post('edisiterbitpaper');
		$teksringkasan = $this->input->post('teksringkasan');
		$periode = $this->input->post('periode');
		$tag = $this->input->post('tag');
		$kategori = $this->input->post('kategori');
		$tgledit = $this->input->post('tgledit');
		$editor = $this->input->post('editor');
		// $hitcounter = $this->input->post('hitcounter')+1;
 
		$data = array(
			'judul_buletin' => $judulbuletin,
			'judul_paper' => $judulpaper,
			'sumber' => $sumber,
			'penulis_paper' => $penulispaper,
			'edisi_terbit_paper' => $edisiterbitpaper,
			'teks_ringkasan' => $teksringkasan,
			'periode' => $periode,
			'tag' => $tag,
			'kategori' => $kategori,
			'tgledit' => $tgledit,
			'editor' => $editor
			// 'hitcounter' => $hitcounter
		);

		if($this->input->post('remove_cover')) // if remove cover checked
        {
            if(file_exists('upload/image/'.$this->input->post('remove_cover')) && $this->input->post('remove_cover'))
                unlink('upload/image/'.$this->input->post('remove_cover'));
            $data['cover'] = '';
        }
 
        if(!empty($_FILES['cover']['name']))
        {
			$upload = $this->cover();
             
            //delete file
            $cover = $this->Crud->get_by_id($this->input->post('id'));
            if(file_exists('upload/image/'.$cover->cover) && $cover->cover)
                unlink('upload/image/'.$cover->cover);
 
			$data['cover'] = $upload;
			$data['tipe_file'] = $this->upload->data('file_ext');
			$data['ukuran_file'] = $this->upload->data('file_size');
			$data['nama_file'] =  $this->upload->data('file_name');
		}
		
		if($this->input->post('remove_cover2')) // if remove cover2 checked
        {
            if(file_exists('upload/image/'.$this->input->post('remove_cover2')) && $this->input->post('remove_cover2'))
                unlink('upload/image/'.$this->input->post('remove_cover2'));
            $data['cover2'] = '';
        }
 
        if(!empty($_FILES['cover2']['name']))
        {
			$upload = $this->cover2();
             
            //delete file
            $cover2 = $this->Crud->get_by_id($this->input->post('id'));
            if(file_exists('upload/image/'.$cover2->cover2) && $cover2->cover2)
                unlink('upload/image/'.$cover2->cover2);
 
			$data['cover2'] = $upload;
			$data['tipe_file2'] = $this->upload->data('file_ext');
			$data['ukuran_file2'] = $this->upload->data('file_size');
			$data['nama_file2'] =  $this->upload->data('file_name');
		}
		
		if($this->input->post('remove_cover3')) // if remove cover3 checked
        {
            if(file_exists('upload/image/'.$this->input->post('remove_cover3')) && $this->input->post('remove_cover3'))
                unlink('upload/image/'.$this->input->post('remove_cover3'));
            $data['cover3'] = '';
        }
 
        if(!empty($_FILES['cover3']['name']))
        {
			$upload = $this->cover3();
             
            //delete file
            $cover3 = $this->Crud->get_by_id($this->input->post('id'));
            if(file_exists('upload/image/'.$cover3->cover3) && $cover3->cover3)
                unlink('upload/image/'.$cover3->cover3);
 
			$data['cover3'] = $upload;
			$data['tipe_file3'] = $this->upload->data('file_ext');
			$data['ukuran_file3'] = $this->upload->data('file_size');
			$data['nama_file3'] =  $this->upload->data('file_name');
		}
		
		if($this->input->post('remove_file')) // if remove cover3 checked
        {
            if(file_exists('upload/file/'.$this->input->post('remove_file')) && $this->input->post('remove_file'))
                unlink('upload/file/'.$this->input->post('remove_file'));
            $data['uploadfile'] = '';
        }
 
        if(!empty($_FILES['uploadfile']['name']))
        {
			$upload = $this->uploadfile();
             
            //delete file
            $uploadfile = $this->Crud->get_by_id($this->input->post('id'));
            if(file_exists('upload/file/'.$uploadfile->uploadfile) && $uploadfile->uploadfile)
                unlink('upload/file/'.$uploadfile->uploadfile);
 
			$data['uploadfile'] = $upload;
			$data['tipe_file4'] = $this->upload->data('file_ext');
			$data['ukuran_file4'] = $this->upload->data('file_size');
			$data['nama_file4'] =  $this->upload->data('file_name');
        }
 
        $this->Crud->update_data(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
		helper_log("edit", "Mengubah data <b>$judulbuletin</b>");
		// $where = array(
		// 	'id' => $id
		// );
	
		// $this->Crud->update_data($where,$data,'file');
		redirect('admin/listbuletin');
	}

	function updateview(){
		// $id = $this->input->post('id');
		$alamat = $this->input->post('alamat');
		$tlp = $this->input->post('tlp');
		$fax = $this->input->post('fax');
		$email = $this->input->post('email');
		$tentang = $this->input->post('tentang');
 
		$data = array(
			'alamat' => $alamat,
			'tlp' => $tlp,
			'fax' => $fax,
			'email' => $email,
			'tentang' => $tentang
		);

		if($this->input->post('remove_banner')) // if remove cover checked
        {
            if(file_exists('upload/banner/'.$this->input->post('remove_banner')) && $this->input->post('remove_banner'))
                unlink('upload/banner/'.$this->input->post('remove_banner'));
            $data['banner'] = '';
        }
 
        if(!empty($_FILES['banner']['name']))
        {
			$upload = $this->banner();
             
            //delete file
            $banner = $this->Crud->get_by_id_banner($this->input->post('id'));
            if(file_exists('upload/banner/'.$banner->banner) && $banner->banner)
                unlink('upload/banner/'.$banner->banner);
 
			$data['banner'] = $upload;
			$data['tipe_file'] = $this->upload->data('file_ext');
			$data['ukuran_file'] = $this->upload->data('file_size');
			$data['nama_file'] =  $this->upload->data('file_name');
		}
		
		if($this->input->post('remove_banner2')) // if remove cover2 checked
        {
            if(file_exists('upload/banner/'.$this->input->post('remove_banner2')) && $this->input->post('remove_banner2'))
                unlink('upload/banner/'.$this->input->post('remove_banner2'));
            $data['banner2'] = '';
        }
 
        if(!empty($_FILES['banner2']['name']))
        {
			$upload = $this->banner2();
             
            //delete file
            $cover2 = $this->Crud->get_by_id_banner($this->input->post('id'));
            if(file_exists('upload/banner/'.$banner2->banner2) && $banner2->banner2)
                unlink('upload/banner/'.$banner2->banner2);
 
			$data['banner2'] = $upload;
			$data['tipe_file2'] = $this->upload->data('file_ext');
			$data['ukuran_file2'] = $this->upload->data('file_size');
			$data['nama_file2'] =  $this->upload->data('file_name');
		}
		
		if($this->input->post('remove_banner3')) // if remove cover3 checked
        {
            if(file_exists('upload/banner/'.$this->input->post('remove_banner3')) && $this->input->post('remove_banner3'))
                unlink('upload/banner/'.$this->input->post('remove_banner3'));
            $data['banner3'] = '';
        }
 
        if(!empty($_FILES['banner3']['name']))
        {
			$upload = $this->banner3();
             
            //delete file
            $banner3 = $this->Crud->get_by_id_banner($this->input->post('id'));
            if(file_exists('upload/banner/'.$banner3->banner3) && $banner3->banner3)
                unlink('upload/banner/'.$banner3->banner3);
 
			$data['banner3'] = $upload;
			$data['tipe_file3'] = $this->upload->data('file_ext');
			$data['ukuran_file3'] = $this->upload->data('file_size');
			$data['nama_file3'] =  $this->upload->data('file_name');
		}
		
		if($this->input->post('remove_banner4')) // if remove cover3 checked
        {
            if(file_exists('upload/banner/'.$this->input->post('remove_banner4')) && $this->input->post('remove_banner4'))
                unlink('upload/banner/'.$this->input->post('remove_banner4'));
            $data['banner4'] = '';
        }
 
        if(!empty($_FILES['banner4']['name']))
        {
			$upload = $this->banner4();
             
            //delete file
            $banner4 = $this->Crud->get_by_id_banner($this->input->post('id'));
            if(file_exists('upload/banner/'.$banner4->banner4) && $banner4->banner4)
                unlink('upload/banner/'.$banner4->banner4);
 
			$data['banner4'] = $upload;
			$data['tipe_file4'] = $this->upload->data('file_ext');
			$data['ukuran_file4'] = $this->upload->data('file_size');
			$data['nama_file4'] =  $this->upload->data('file_name');
        }
 
        $this->Crud->update_data_view(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
		helper_log("edit", "Mengubah <b>data homepage</b>");
		// $where = array(
		// 	'id' => $id
		// );
	
		// $this->Crud->update_data($where,$data,'file');
		redirect('admin/index');
	}

	function updatefaq(){
		// $id = $this->input->post('id');
		$pertanyaan1 = $this->input->post('pertanyaan1');
		$pertanyaan2 = $this->input->post('pertanyaan2');
		$jawaban1 = $this->input->post('jawaban1');
		$jawaban2 = $this->input->post('jawaban2');
 
		$data = array(
			'pertanyaan1' => $pertanyaan1,
			'pertanyaan2' => $pertanyaan2,
			'jawaban1' => $jawaban1,
			'jawaban2' => $jawaban2
		);
 
        $this->Crud->update_data_faq(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
		helper_log("edit", "Mengubah data <b>FAQ</b>");
		// $where = array(
		// 	'id' => $id
		// );
	
		// $this->Crud->update_data($where,$data,'file');
		redirect('admin/faq');
	}

	function hitcounter(){
		// $id = $this->input->post('id');
		$hitcounter = $this->input->post('hitcounter')+1;
 
		$data = array(
			'hitcounter' => $hitcounter
		);
 
        $this->Crud->update_data(array('id' => $this->input->post('id')), $data);
        // echo json_encode(array("status" => TRUE));
	
		// $where = array(
		// 	'id' => $id
		// );
	
		// $this->Crud->update_data($where,$data,'file');
		// redirect('admin/listbuletin');
		redirect('welcome/detail/',$id);
	}

	public function tes()
	{
		phpinfo();
		/*
		$data['title'] = "Analitika";
		// $this->load->view("admin/template/header",$data);
		// $this->load->view("admin/template/navbar",$data);
		// $this->load->view("admin/template/sidebar",$data);

		$data['file'] = $this->Crud->read_data()->result();
		
		$this->load->view("admin/tes",$data);
		// $this->load->view("admin/template/footer",$data);
        // $this->load->view("admin/template/js",$data);
		*/
	}

}
