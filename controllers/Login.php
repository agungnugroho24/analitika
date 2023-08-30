<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	This Script was created by ahmad B. Yusuf
	ahmad.osoep@gmail.com
 */
class Login extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('libcontrol');
		$this->load->library('encode');
		$this->load->model('login_model');
	}
	
	function index(){
		$data = $this->libcontrol->getData();
		//echo json_encode($data);exit;
		if(empty($data->data)){
			header("location: https://akun.bappenas.go.id/bp-um/service/front/analitika/f5rNGwipwLF5CJ+jpG+MOnx%217vmBByAAU7UA5zOthfD9N5cGjcXlDrsiaByK9U9c8uS9VUb%217TQCSVvI00FwWw==");
		}else{
			if(empty($data->userdata)){
				$this->logout();
			}else{
				$this->process_login($data->userdata);
			}
		}
	}
	
	private function process_login($userdata){
		ini_set('display_errors', 1);
		
		//get user
		$uid  = $userdata[0]->user_name;
		$cond = "username = '$uid'";
		$user =  $this->login_model->getDataOnPrem($cond, "auth_users");
		
		if($user[0]->role_id == "1"){
			$role = "root";
		}else{
			$role = "user";
		}
		//end getuser
		$newdata = array( 'username'	=> $userdata[0]->user_name,
						  'nama'		=> $userdata[0]->nama,
						  'nip'			=> $userdata[0]->nip,
						  'jabatan'		=> $userdata[0]->jabatan_akhir,
						  'role'		=> $role,
						  'kode_surat'	=> $userdata[0]->kode_surat,
						  'iduke'		=> $userdata[0]->id_unitkerja,
						  'nama_uke'	=> $userdata[0]->unit_kerja,
						  'avatar'		=> $userdata[0]->avatar,
						  'isorganik'	=> $userdata[0]->isorganik,
						  'userapp'		=> $this->libcontrol->getUserapp(),
						  'login'		=> TRUE
					);
		$this->session->set_userdata($newdata);
		helper_log("login", "Masuk ke sistem");
		// echo json_encode($newdata);
		///$uid = $this->encode->encoded($userdata[0]->user_name);
		if($role == "root"){
			redirect('admin');
		}else{
			redirect(base_url());
		}
	}
	
	function logout(){
		$this->libcontrol->deleteSession();
		$this->session->sess_destroy();
		helper_log("logout", "Keluar dari sistem");
		redirect('login');
	}
}
?>