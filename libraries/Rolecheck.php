<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*

	This Script was created by ahmad B. Yusuf

	ahmad.osoep@gmail.com

 */

class Rolecheck {

	private $ci;

	

	function __construct()	{

		$this->ci =& get_instance();

		$this->ci->load->library('logincheck');

	}

	

	function data($key, $search){

		if($this->ci->session->userdata('login') == true){

			$menu = $this->ci->session->userdata('menu');

			//print_r($menu);exit;

			foreach($menu as $object) {

				if(is_object($object)) {

					$object = get_object_vars($object);

				}

				if(array_key_exists($key, $object) && $object[$key] == $search){

					$data = $object;

				}

			}

			if(!empty($data)){

				return $data;

			}else{

				return false;

			}

		}else{

			redirect('login');

		}

		

	}

}

?>