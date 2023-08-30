<?php
	class Login_model extends CI_Model
	{

		public function __construct()
		{
			parent::__construct();
			$this->db1  = $this->load->database('analitika',TRUE);
		}

		function getDataOnPrem($cond, $table){
			$this->db1->where($cond);
			$query = $this->db1->get($table);
			return $this->toArray($query);
		}

		// function getdatalocal($cond, $table){
		// 	$this->db2->where($cond);
		// 	$query = $this->db2->get($table);
		// 	return $this->toArray($query);
		// }
		// function getroledata($idrole){
		// 	$query = $this->db2->query("select a.idrole, a.nama, b.*, c.view_, c.update_, c.delete_, c.create_, c.approve, c.reject
		// 								from role a, menu_role b, define_role c
		// 								where c.idrole=a.idrole and c.idmenu=b.idmenu and a.idrole='$idrole'
		// 								order by b.idmenu");
		// 	return $this->toArray($query);
		// }

		private function toArray($query){
			if ($query->num_rows() > 0 ) {
				foreach ($query->result() as $data) {
						$hasil[] = $data;
						}
						return $hasil;
			}
		}
	}
?>