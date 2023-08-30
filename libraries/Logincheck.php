<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	This Script was created by ahmad B. Yusuf
	ahmad.osoep@gmail.com
 */
class Logincheck {
	private $ci;
	var $app 		= 'analitika';
	var $apikey     = 'f5rNGwipwLF5CJ+jpG+MOnx%217vmBByAAU7UA5zOthfD9N5cGjcXlDrsiaByK9U9c8uS9VUb%217TQCSVvI00FwWw==';
	function __construct()	{
		$this->ci =& get_instance();
	}
	function check(){
		$cookies = get_cookie('um-bp');
		$sess_id = substr($cookies, strpos($cookies, "32:") + 4, 32);
		$isian = array( 'session' => $sess_id,
						'app'	   => $this->app,
						'apikey'   => $this->apikey);
		$url = "https://akun.bappenas.go.id/bp-um/service/checkSession";
		$data =  $this->postData($isian, $url);
		if(empty($data->data)){
			redirect('login/logout');
		}
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