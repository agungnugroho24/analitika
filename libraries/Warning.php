<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Warning {
	
	private $ci;
	
	function error_404(){
		$data['tittle'] = "Uppss";
		$data['page']	= "Page 404";
		$this->ci =& get_instance();
		return $this->ci->load->view('web/warning', $data, true);
	}
}
?>