<?php
/*
	Lib Standart untuk framework Codeigniter
*/
class Libcontrol extends CI_Model {
	
	var $app 		= 'analitika';
	var $apikey     = 'f5rNGwipwLF5CJ+jpG+MOnx%217vmBByAAU7UA5zOthfD9N5cGjcXlDrsiaByK9U9c8uS9VUb%217TQCSVvI00FwWw==';
	var $sess_id	= '';
	public function __construct()
	{
		parent::__construct();
		$this->setCookies();
		//echo '<script src="https://akun.bappenas.go.id/bp-um/service/setCookieOnSite"></script>';
	}
	private function setCookies(){
		$this->load->helper('cookie');
		$cookies = get_cookie('um-bp');
		$this->sess_id = substr($cookies, strpos($cookies, "32:") + 4, 32);
	}
	function getData(){
		//print_r($this->sess_id);exit;
		$isian = array( 'session' => $this->sess_id,
						'app'	   => $this->app,
						'apikey'   => $this->apikey);
		$url = "https://akun.bappenas.go.id/bp-um/service/checkSession";
		return $this->postData($isian, $url);
	}
	function deleteSession(){
		$isian = array( 'session' => $this->sess_id,
						'app'	   => $this->app,
						'apikey'   => $this->apikey);
		$url = "https://akun.bappenas.go.id/bp-um/service/deleteSession";
		unset($_COOKIE["um-bp"]);
		return $this->postData($isian, $url);
		
	}
	function getOneStepAhead($username){
		if(!empty($username)){
			$isian = array( 'username' => $username,
							'app'	   => $this->app,
							'apikey'   => $this->apikey);
			$url = "https://akun.bappenas.go.id/bp-um/service/getUserBoss";
			//unset($_COOKIE["um-bp"]);
			return $this->postData($isian, $url);
		}else{
			return false;
		}
	}
	function getUserapp(){
		$isian = array( 'username' => $this->getData()->data[0]->userid,
						'app'	   => $this->app,
						'apikey'   => $this->apikey);
		$url = "https://akun.bappenas.go.id/bp-um/service/getUserApp";
		return $this->postData($isian, $url);
	}
	function getuserdata($uid){
		$isian = array( 'username' => $uid,
						'app'	   => $this->app,
						'apikey'   => $this->apikey);
		$url = "https://akun.bappenas.go.id/bp-um/service/checkUser";
		return $this->postData($isian, $url);
	}
	private function postData($data, $url){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec ($ch);
		curl_close ($ch);
		$hasil = json_decode($output);
		return $hasil;
	}
}

?>
