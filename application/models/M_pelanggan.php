<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggan extends CI_Model {

  var $tabel = 'barang';
	function __construct(){
    parent::__construct();
    $this->load->model('M_pelanggan');
  }

	public function data_pelanggan(){
    	$data=$this->db->query("SELECT DATE_FORMAT(tgl_terima,'%d-%m-%Y') as tgl_terima,pelanggan,alamat,jml_barang,jml_qty,harga,id_pelanggan FROM pelanggan"); //select DATE_FOTMAT(tgl,'%d-%m-%Y') from tbl1
        return $data->result();
  }

  public function get_jumlah(){
    /*$SQL = "SELECT nama_barang FROM barang WHERE nama_barang LIKE '%$jml_barang%'";
    return $SQL->result();*/
    $this->db->from($this->tabel);
    $query = $this->db->get();
    //cek apakah ada data
    if ($query->num_rows() > 0) { //jika ada maka jalankan
        return $query->result();
    }
  }

  public function dataSeleksi(){
    $query= $this->db->query("SELECT * FROM 'barang' where nama_barang ");
    return $this->db->query($query);
  }

  public function seleksi($ambil){
    $data = $this->db->query("SELECT * FROM `barang` WHERE id_kategori=2");
    return $data->result($ambil);

  }

   public function simpan_data($param){
   		$this->db->insert('pelanggan', $param);
   }

   public function hapus($where, $table){
    $this->db->where($where);
    $this->db->delete($table);
   }

}