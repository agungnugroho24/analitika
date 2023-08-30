<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	This Script was created by ahmad B. Yusuf
	ahmad.osoep@gmail.com
 */
class Home extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('libcontrol');
		$this->load->library('encode');
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

		$newdata = array( 'username'	=> $userdata[0]->user_name,
						  'nama'		=> $userdata[0]->nama,
						  'nip'			=> $userdata[0]->nip,
						  'jabatan'		=> $userdata[0]->jabatan_akhir,
						  //'idjabatan'	=> $idjabatan,
						  'kode_surat'	=> $userdata[0]->kode_surat,
						  'iduke'		=> $userdata[0]->id_unitkerja,
						  'nama_uke'	=> $userdata[0]->unit_kerja,
						  'avatar'		=> $userdata[0]->avatar,
						  'isorganik'	=> $userdata[0]->isorganik,
						  'userapp'		=> $this->libcontrol->getUserapp(),
						  'login'		=> TRUE
					);
		$this->session->set_userdata($newdata);
		// echo json_encode($newdata);
		$uid = $this->encode->encoded($userdata[0]->user_name);
		redirect('home/' . $uid);
	}
	
	function logout(){
		$this->libcontrol->deleteSession();
		$this->session->sess_destroy();
		redirect('home');
	}
	function getUser(){
		$getdata = file_get_contents("https://akun.bappenas.go.id/bp-um/mapping/treeMapping");
		$level0	 = json_decode($getdata);
		//print_r($level0->suborg);exit;
		foreach($level0->suborg as $lv1){
			$datauser[] = array( 'nama' 	=> $lv1->pejabat,
								 'username'	=> $lv1->user_name);
			
			if($lv1->staff != ""){
				foreach($lv1->staff as $lv1staf){
					$datauser[] = array( 'nama' 	=> $lv1staf->nama,
										 'username'	=> $lv1staf->user_name);
				}
			}
			if($lv1->suborg != ""){
				foreach($lv1->suborg as $lv2){
					$datauser[] = array( 'nama' 	=> $lv2->pejabat,
										 'username'	=> $lv2->user_name);
					if($lv2->staff != ""){
						foreach($lv2->staff as $lv2staf){
							$datauser[] = array( 'nama' 	=> $lv2staf->nama,
												 'username'	=> $lv2staf->user_name);
						}
					}
					if($lv2->suborg != ""){
						foreach($lv2->suborg as $lv3){
							$datauser[] = array( 'nama' 	=> $lv3->pejabat,
												 'username'	=> $lv3->user_name);
							if($lv3->staff != ""){
								foreach($lv3->staff as $lv3staf){
									$datauser[] = array( 'nama' 	=> $lv3staf->nama,
														'username'	=> $lv3staf->user_name);
								}
							}
							if($lv3->suborg != ""){
								foreach($lv3->suborg as $lv4){
									$datauser[] = array( 'nama' 	=> $lv4->pejabat,
														 'username'	=> $lv4->user_name);
									if($lv4->staff != ""){
										foreach($lv4->staff as $lv4staf){
											$datauser[] = array( 'nama' 	=> $lv4staf->nama,
																 'username'	=> $lv4staf->user_name);
										}
									}
								}
							}
						}
					}
				}
			}
		}
		$this->output
				 ->set_content_type('application/json')
				 ->set_output(json_encode($datauser));
		
	}
}
?>