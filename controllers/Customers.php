<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('customers_model','file');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('admin/customers_view');
	}

	public function ajax_list()
	{
		$list = $this->customers->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $customers->judul_buletin;
			$row[] = $customers->penulis_paper;
			$row[] = $customers->edisi_terbit_paper;
			$row[] = $customers->teks_ringkasan;
			$row[] = $customers->periode;

			// $row[] = $customers->judul_buletin;
			// $row[] = $customers->judul_paper;
			// $row[] = $customers->sumber;
			// $row[] = $customers->penulis_paper;
			// $row[] = $customers->edisi_terbit_paper;
			// $row[] = $customers->teks_ringkasan;
			// $row[] = $customers->periode;
			// $row[] = $customers->cover;
			// $row[] = $customers->cover2;
			// $row[] = $customers->cover3;
			// $row[] = $customers->tipe_file;
			// $row[] = $customers->ukuran_file;
			// $row[] = $customers->nama_file;
			// $row[] = $customers->tipe_file2;
			// $row[] = $customers->ukuran_file2;
			// $row[] = $customers->nama_file2;
			// $row[] = $customers->tipe_file3;
			// $row[] = $customers->ukuran_file3;
			// $row[] = $customers->nama_file3;
			// $row[] = $customers->tipe_file4;
			// $row[] = $customers->ukuran_file4;
			// $row[] = $customers->nama_file4;
			// $row[] = $customers->uploadfile;
			// $row[] = $customers->uploader;

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->customers->count_all(),
						"recordsFiltered" => $this->customers->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

}
