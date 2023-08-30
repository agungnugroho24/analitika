<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Crud');				
		$this->load->helper(array('download', 'form', 'url'));	
	}

	public function index()
	{	
		$data['title'] = "Analitika";
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/navbar',$data);
		$this->load->view('_partials/slider',$data);

		$data['file'] = $this->Crud->read_data()->result();
		$data['homepage'] = $this->Crud->read_data_view()->result();

		$this->load->view('home',$data);
		$this->load->view('_partials/footer',$data);
		$this->load->view('_partials/js',$data);
	}

	public function search(){
		// $keyword = $this->input->post('keyword');
		$this->sessioncheck();
		if(empty($keyword = $this->input->post('keyword'))){
			// no records to display
			redirect(base_url().'');
		} else {
			// records have been returned
			$data['file']=$this->Crud->get_keyword($keyword);
			$data['title'] = "Analitika";
			$this->load->view('_partials/header',$data);
			$this->load->view('_partials/navbar',$data);
			// $this->load->view('_partials/slider',$data);
			$data['homepage'] = $this->Crud->read_data_view()->result();
			helper_log("search", "Mencari data <b>$keyword</b>");
			$this->load->view('search',$data);
			$this->load->view('_partials/footer',$data);
			$this->load->view('_partials/js',$data);
		}
	}

	public function buletin()
	{
		$data['title'] = "Analitika";
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/navbar',$data);
		// $this->load->view('_partials/slider',$data);
		$data['file'] = $this->Crud->read_data()->result();
		$data['homepage'] = $this->Crud->read_data_view()->result();
		$this->load->view('shop',$data);
		$this->load->view('_partials/footer',$data);
		$this->load->view('_partials/js',$data);
	}

	public function harian()
	{
		$data['title'] = "Analitika";
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/navbar',$data);
		// $this->load->view('_partials/slider',$data);
		$data['file'] = $this->Crud->read_kategori1()->result();
		$data['homepage'] = $this->Crud->read_data_view()->result();
		helper_log("view", "Melihat <b>buletin harian</b>");
		$this->load->view('hari',$data);
		$this->load->view('_partials/footer',$data);
		$this->load->view('_partials/js',$data);
	}

	public function mingguan()
	{
		$data['title'] = "Analitika";
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/navbar',$data);
		// $this->load->view('_partials/slider',$data);
		$data['file'] = $this->Crud->read_kategori2()->result();
		$data['homepage'] = $this->Crud->read_data_view()->result();
		helper_log("view", "Melihat <b>buletin mingguan</b>");
		$this->load->view('minggu',$data);
		$this->load->view('_partials/footer',$data);
		$this->load->view('_partials/js',$data);
	}

	public function bulanan()
	{
		$data['title'] = "Analitika";
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/navbar',$data);
		// $this->load->view('_partials/slider',$data);
		$data['file'] = $this->Crud->read_kategori3()->result();
		$data['homepage'] = $this->Crud->read_data_view()->result();
		helper_log("view", "Melihat <b>buletin bulanan</b>");
		$this->load->view('bulan',$data);
		$this->load->view('_partials/footer',$data);
		$this->load->view('_partials/js',$data);
	}

	public function triwulanan()
	{
		$data['title'] = "Analitika";
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/navbar',$data);
		// $this->load->view('_partials/slider',$data);
		$data['file'] = $this->Crud->read_kategori4()->result();
		$data['homepage'] = $this->Crud->read_data_view()->result();
		helper_log("view", "Melihat <b>buletin triwulanan</b>");
		$this->load->view('triwulan',$data);
		$this->load->view('_partials/footer',$data);
		$this->load->view('_partials/js',$data);
	}

	public function about()
	{
		$data['title'] = "Analitika";
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/navbar',$data);
		// $this->load->view('_partials/slider',$data);
		$data['homepage'] = $this->Crud->read_data_view()->result();
		helper_log("view", "Melihat <b>tentang analitika</b>");
		$this->load->view('about',$data);
		$this->load->view('_partials/footer',$data);
		$this->load->view('_partials/js',$data);
	}

	public function faq()
	{
		$data['title'] = "Analitika";
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/navbar',$data);
		// $this->load->view('_partials/slider',$data);
		$data['faq'] = $this->Crud->read_data_faq()->result();
		$data['homepage'] = $this->Crud->read_data_view()->result();
		helper_log("view", "Melihat <b>FAQ</b>");
		$this->load->view('faq',$data);
		$this->load->view('_partials/footer',$data);
		$this->load->view('_partials/js',$data);
	}


	public function policy()
	{
		$data['title'] = "Analitika";
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/navbar',$data);
		// $this->load->view('_partials/slider',$data);
		$this->load->view('privacypolicy',$data);
		$this->load->view('_partials/footer',$data);
		$this->load->view('_partials/js',$data);
	}

	public function product($id="")
	{
		if(!empty($id)){
			$data['title'] = "Analitika";
			$this->load->view('_partials/header',$data);
			$this->load->view('_partials/navbar',$data);
			// $this->load->view('_partials/slider',$data);
			
			$where = array('id' => $id);
			$data['file'] = $this->Crud->edit_data($where,'file')->result();

			$this->load->view('products',$data);
			$this->load->view('_partials/footer',$data);
			$this->load->view('_partials/js',$data);
		}else{
			redirect(base_url());
		}
	}

	public function detail($id="")
	{
		if(!empty($id)){
			$this->sessioncheck();
			$data['title'] = "Analitika";
			$this->load->view('_partials/header',$data);
			$this->load->view('_partials/navbar',$data);
			// $this->load->view('_partials/slider',$data);

			$where 				= array('id' => $id);
			$data['file']	 	= $this->Crud->edit_data($where,'file')->result();
			$data['homepage']	= $this->Crud->read_data_view()->result();
			
			$judul =  $data['file'][0]->judul_buletin;
			helper_log("read", "Membaca buletin <b>".$judul."</b>");

			$this->load->view('detail',$data);
			$this->load->view('_partials/footer',$data);
			$this->load->view('_partials/js',$data);
		}else{
			redirect(base_url());
		}
	}

	public function productsingle()
	{
		$data['title'] = "Analitika";
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/navbar',$data);
		// $this->load->view('_partials/slider',$data);
		$this->load->view('productsingle',$data);
		$this->load->view('_partials/footer',$data);
		$this->load->view('_partials/js',$data);
	}

	public function register()
	{
		$data['title'] = "Analitika";
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/navbar',$data);
		// $this->load->view('_partials/slider',$data);
		$this->load->view('register',$data);
		$this->load->view('_partials/footer',$data);
		$this->load->view('_partials/js',$data);
	}

	public function shipping()
	{
		$data['title'] = "Analitika";
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/navbar',$data);
		// $this->load->view('_partials/slider',$data);
		$this->load->view('shipping',$data);
		$this->load->view('_partials/footer',$data);
		$this->load->view('_partials/js',$data);
	}

	public function condition()
	{
		$data['title'] = "Analitika";
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/navbar',$data);
		// $this->load->view('_partials/slider',$data);
		$this->load->view('termsconditions',$data);
		$this->load->view('_partials/footer',$data);
		$this->load->view('_partials/js',$data);
	}

	public function content()
	{
		$data['title'] = "Analitika";
		$this->load->view('_partials/header',$data);
		// $this->load->view('_partials/navbar',$data);
		// $this->load->view('_partials/slider',$data);
		$data['file'] = $this->Crud->read_data()->result();
		$this->load->view('_partials/content',$data);
		// $this->load->view('_partials/footer',$data);
		$this->load->view('_partials/js',$data);
	}

	public function welcome_message()
	{
		$this->load->view('welcome_message');
	}

	function download($id="")
	{
		if(!empty($id)){
			$this->sessioncheck();
			$data = $this->db->get_where('file',['id'=>$id])->row();
			
			//for counter download data
			if($data){
				$hitcon = $data->hitcounter;
				if((int)$hitcon >= 0){
					$newhitcon = (int)$hitcon + 1;
				}else{
					$newhitcon = 1;
				}
				$update = array( "hitcounter" => $newhitcon);
				$this->Crud->update_data(array('id' => $id), $update);
			}
			//end counter
			// force_download('upload/file/'.$data->nama_file4,NULL);

			$masked_name = $data->judul_buletin;
			$file_ext = $data->tipe_file4;
			$file_name = $data->nama_file4;
		
			$path = "upload/file/".$file_name;
			// $f = fopen($file, 'rb');
			
			header('Pragma: public');     // required
			header('Expires: 0');         // no cache
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header("Content-Type: application/octet-stream");
			// header("Content-Disposition: attachment; filename=$masked_name$file_ext;");
			header('Content-Disposition: attachment; filename="'.$masked_name.'""'.$file_ext.'"');
			header('Content-Transfer-Encoding: binary');
			header('Content-Length: ' . filesize($path));
			header('Connection: close');
			// fpassthru($f);
			readfile($path);
			helper_log("download", "Mengunduh file buletin <b>$masked_name</b>");
			exit;
		}else{
			redirect(base_url());
		}
	}
	
	private function sessioncheck(){
		$this->load->library('logincheck');
		$this->logincheck->check();
		
		if($this->session->userdata('login')!=true){
			redirect('login/logout');
		}
	}

	public function tes()
	{
		$data['title'] = "Analitika";
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/navbar',$data);
		$data['file'] = $this->Crud->read_data()->result();
		$data['homepage'] = $this->Crud->read_data_view()->result();
		$this->load->view('tes',$data);
		$this->load->view('_partials/footer',$data);
		$this->load->view('_partials/js',$data);
	}

	public function filter()
	{
		$this->sessioncheck();
		if(empty($kategori = $this->input->post('kategori'))){
			// no records to display
			redirect(base_url().'');
		} else {
			// records have been returned
			$data['file']=$this->Crud->get_kategori($kategori);
			$data['homepage'] = $this->Crud->read_data_view()->result();
			$data['title'] = "Analitika";
			$this->load->view('_partials/header',$data);
			$this->load->view('_partials/navbar',$data);
			$this->load->view('_partials/slider',$data);
			$this->load->view('filter',$data);
			$this->load->view('_partials/footer',$data);
			$this->load->view('_partials/js',$data);
		}
		
	}

}
