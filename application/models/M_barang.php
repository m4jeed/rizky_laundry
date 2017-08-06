<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

	function __construct(){
        parent::__construct();
    
    }

  public function data_barang(){
  	/*$data = $this->db->query("SELECT barang.id_barang,barang.nama_barang, kategori_barang.nama_kategori, barang.harga from barang 
  		INNER JOIN kategori_barang ON barang.id_kategori=kategori_barang.id_kategori");
  	return $data->result();*/
    $query= "SELECT b.id_barang,b.nama_barang,b.kode_barang,kb.nama_kategori,b.harga
                FROM barang as b,kategori_barang as kb
                WHERE b.id_kategori=kb.id_kategori";
        return $this->db->query($query);
  } 

  public function simpan($data_array){
    $this->db->insert('barang', $data_array);
  }

  public function edit_barang($id) { 
        $SQL = "SELECT A.* , B.nama_kategori FROM barang A INNER JOIN kategori_barang B ON A.id_kategori = B.id_kategori WHERE id_barang ='$id'";
        $QUERY = $this->db->query($SQL);
        return $QUERY->result();
    }

  public function kategori(){
    return $this->db->get('kategori_barang')->result(); //ini
  }

  public function get_one($id){
        $param  =   array('id_barang'=>$id);
        return $this->db->get_where('barang',$param);
    }

  public function update_barang($id, $data){
    $this->db->where('id_barang', $id);
    $this->db->update('barang', $data);
  }
 

}