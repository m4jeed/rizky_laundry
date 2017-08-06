<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	function __construct(){
    parent::__construct();
    if ($this->session->userdata('username')==""){
    	$this->session->set_flashdata("msg", "<div class='alert alert-info alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>		
				<span class='glyphicon glyphicon-remove-sign'></span> Ops.. Silahkan login terlebih dahulu!!
				</div>");
			redirect('login');
		} 
		$this->load->model('M_pelanggan');
  }

	public function index()
	{
		$data['side'] 			='template/side';
		$data['judul'] 			='Pelanggan';
		$data['sub_judul']	='Data Pelanggan';
		$data['content'] 		='pelanggan/v_pelanggan';
		$data['pelanggan'] 	= $this->M_pelanggan->data_pelanggan();
		$this->load->view('template/isi-halaman', $data);
	}

	
	public function search(){
		/*$data['side'] 			='template/side';*/ //di kasih ini maka tidak tampil js nya
		$keyword = $this->uri->segment(3); //tadinya 0 atau 3 sama saja
		$data = $this->db->from('barang')->like('nama_barang',$keyword)->get();	
		foreach($data->result() as $row){
		$arr['query'] = $keyword;
		$arr['suggestions'][] = array(
				'value'				=>$row->nama_barang, //buat nampilin autocompletenya, ambil data dr fieldnya
				'jml_barang'	=>$row->nama_barang, //buat nampilin autocompletenya, ambil data dr fieldnya
				'harga'				=>$row->harga
			);
		}
		echo json_encode($arr);
		//echo json_encode($this->db->last_query()); //buat var_dump
	}

	public function select(){
		$data= $this->input->post($vals);
		if ($vals =='satuan'){
			$query= $this->db->query("SELECT * FROM `barang` WHERE id_kategori=2"); //SELECT * FROM barang WHERE id_kategori LIKE 2
    	return $query->result($data);
		}else{
			$query= $this->db->query("SELECT * FROM `barang` WHERE id_kategori=1"); //SELECT * FROM barang WHERE id_kategori LIKE 2
    	return $query->result($data);
		}
		
		echo json_encode($data);		

	}

	public function seleksi_data(){
		$data['side'] 			='template/side';
		$data['judul'] 			='Pelanggan';
		$data['sub_judul']	='Form Data Pelanggan';
		$data['content'] 		='pelanggan/form_pelanggan';
		//$data['selek_data'] 		= $this->M_barang->dataSeleksi();
		$id_opsi = $this->input->post('nama_opsi');
		//var_dump($jml);die;
		$ambil=array('nama_barang'=>$jml);
		
		$data1=$this->M_pelanggan->seleksi($id_opsi);
		$this->load->view('template/isi-halaman', $data);
	}

	public function tambah_pelanggan(){
		$this->load->model('M_kategori');

		$data['side'] 			='template/side';
		$data['judul'] 			='Pelanggan';
		$data['sub_judul']	='Form Pelanggan';
		$data['content'] 		='pelanggan/form_pelanggan';
		$data['data_select']= $this->M_kategori->data_kategori();
		$this->load->view('template/isi-halaman', $data);
	}

	public function simpan(){
		$data['side'] 			='template/side';
		$data['judul'] 			='Pelanggan';
		$data['sub_judul']	='Form Data Pelanggan';
		$data['content'] 		='pelanggan/form_pelanggan';
		//$id = $this->input->post('id_jenis')

		$pelanggan  = $this->input->post('pelanggan');
		$alamat 	  = $this->input->post('alamat');
		$jml_barang = $this->input->post('jml_barang');
		$qty 				= $this->input->post('jml_qty');
		//print_r($jml_barang);die();
		$tanggal 		= $this->input->post('tgl_terima');
		$tgl_keluar = $this->input->post('tgl_keluar');
		$harga 	 		= $this->input->post('harga');
		//var_dump($tgl_keluar);die;
		$param = array(
	    'pelanggan'   	=>$pelanggan,
	    'alamat'        =>$alamat,
	    'jml_barang' 		=>$jml_barang,
	    'jml_qty'				=>$qty,
	    'tgl_terima'    =>$tanggal,
	    'tgl_keluar'    =>$tgl_keluar,
	    'harga'    			=>$harga
	    );
		$query=$this->M_pelanggan->simpan_data($param);
    $this->load->view('template/isi-halaman', $data);
	}

	public function hapus($id){
	$where = array('id_pelanggan'=>$id);	
	$data['pelanggan'] 	= $this->M_pelanggan->hapus($where, 'pelanggan');
	//$data['pelanggan'] = $this->M_pelanggan->hapus($where, 'pelanggan');
	redirect ('Pelanggan');
	$this->load->view('template/isi-halaman', $data);

	}

}