<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model
{
    public $table = 'file';
    public $table2 = 'homepage';
    public $table3 = 'faq';
    public $column_order = array(null,'judul_buletin','judul_paper','sumber','penulis_paper','edisi_terbit_paper'); //set column field database for datatable orderable
    public $column_search = array('judul_buletin','judul_paper','sumber','penulis_paper','edisi_terbit_paper'); //set column field database for datatable searchable
    public $order = array('id' => 'asc'); // default order

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        $this->db->from($this->table);

        $i = 0;
    
        foreach ($this->column_search as $item) { // loop column
            if ($_POST['search']['value']) { // if datatable send POST for search
                if ($i===0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) { //last loop
                    $this->db->group_end();
                } //close bracket
            }
            $i++;
        }
        
        if (isset($_POST['order'])) { // here order processing
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } elseif (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
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

    public function read_data()
    {
        return $this->db->get('file');
    }

    public function read_data_actlog()
    {
        $this->db->order_by("log_id", "desc");
        return $this->db->get('log_activity');
    }

    public function read_kategori1()
    {
        return $this->db->query("SELECT * FROM file WHERE kategori=1");
    }

    public function read_kategori2()
    {
        return $this->db->query("SELECT * FROM file WHERE kategori=2");
    }

    public function read_kategori3()
    {
        return $this->db->query("SELECT * FROM file WHERE kategori=3");
    }

    public function read_kategori4()
    {
        return $this->db->query("SELECT * FROM file WHERE kategori=4");
    }

    public function read_data_view()
    {
        return $this->db->get('homepage');
    }

    public function read_data_faq()
    {
        return $this->db->get('faq');
    }

    public function create_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // public function delete_data($id, $table)
    // {
    //     $this->db->where($id);
    //     $this->db->delete($table);
    // }

    public function delete_data($id)
    {
        $hasil=$this->db->query("DELETE FROM file WHERE id='$id'");
        return $hasil;
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    // function update_data($where,$data,$table){
    // 	$this->db->where($where);
    // 	$this->db->update($table,$data);
    // }

    public function update_data($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    
    public function update_data_view($where, $data)
    {
        $this->db->update($this->table2, $data, $where);
        return $this->db->affected_rows();
    }

    public function update_data_faq($where, $data)
    {
        $this->db->update($this->table3, $data, $where);
        return $this->db->affected_rows();
    }

    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
 
        return $query->row();
    }

    public function get_by_id_banner($id)
    {
        $this->db->from($this->table2);
        $this->db->where('id', $id);
        $query = $this->db->get();
 
        return $query->row();
    }

    public function get_by_id_faq($id)
    {
        $this->db->from($this->table3);
        $this->db->where('id', $id);
        $query = $this->db->get();
 
        return $query->row();
    }

    public function get_all()
    {
        return $this->db->get('file')->result();
    }
    
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('file');
        $this->db->like('judul_buletin', $keyword);
        $this->db->or_like('judul_paper', $keyword);
        $this->db->or_like('sumber', $keyword);
        $this->db->or_like('penulis_paper', $keyword);
        $this->db->or_like('edisi_terbit_paper', $keyword);
        $this->db->or_like('periode', $keyword);
        return $this->db->get()->result();
	}
	
	public function get_kategori($kategori)
    {
        $this->db->select('*');
        $this->db->from('file');
        $this->db->like('kategori', $kategori);
        return $this->db->get()->result();
    }

    public function save_log($param)
    {
        $sql = $this->db->insert_string('log_activity',$param);
        $ex  = $this->db->query($sql);
        return $this->db->affected_rows($sql);
    }

}
?>