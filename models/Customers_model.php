<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers_model extends CI_Model {

	var $table = 'file';
	var $column_order = array(null, 'judul_buletin','penulis_paper','edisi_terbit_paper','teks_ringkasan','periode'); //set column field database for datatable orderable
	var $column_search = array('judul_buletin','penulis_paper','edisi_terbit_paper','teks_ringkasan','periode'); //set column field database for datatable searchable 
	var $order = array('id' => 'asc'); // default order 
	
	// var $column_order = array(null, 'judul_buletin','judul_paper','sumber','penulis_paper','edisi_terbit_paper','teks_ringkasan','periode','cover','cover2','cover3','tipe_file','ukuran_file','nama_file','tipe_file2','ukuran_file2','nama_file2','tipe_file3','ukuran_file3','nama_file3','tipe_file4','ukuran_file4','nama_file4','uploadfile','uploader'); //set column field database for datatable orderable
	// var $column_search = array('judul_buletin','judul_paper','sumber','penulis_paper','edisi_terbit_paper','teks_ringkasan','periode','cover','cover2','cover3','tipe_file','ukuran_file','nama_file','tipe_file2','ukuran_file2','nama_file2','tipe_file3','ukuran_file3','nama_file3','tipe_file4','ukuran_file4','nama_file4','uploadfile','uploader'); //set column field database for datatable searchable 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		
		$this->db->from($this->table);

		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

}
