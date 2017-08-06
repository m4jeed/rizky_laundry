<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	function __construct(){
    parent::__construct();
    if ($this->session->userdata('username')==""){
    	$this->session->set_flashdata("msg", "<div class='alert alert-info alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>		
				<span class='glyphicon glyphicon-remove-sign'></span> Ops.. Silahkan login terlebih dahulu!!
				</div>");
			redirect('login');
		} 
    //$this->load->library('form_validation');
    $this->load->model('M_barang');
  }



	public function index(){
		$data['side'] 			='template/side';
		$data['judul'] 			='Barang';
		$data['sub_judul']	='Data Barang';
		$data['content'] 		='barang/v_barang';
		$data['barang'] 		= $this->M_barang->data_barang();
		//$data['kat_brg']    = $this->M_barang->kategori();
		$this->load->view('template/isi-halaman', $data);
	}

	public function tambah_barang(){
		$data['side'] 			='template/side';
		$data['judul'] 			='Barang';
		$data['sub_judul']	='Form Barang';
		$data['content'] 		='barang/form_barang';
		$data['kat_brg']    = $this->M_barang->kategori();
		$this->load->view('template/isi-halaman', $data);
	}

	public function simpan(){
		$data['side'] 			='template/side';
		$data['judul'] 			='Barang';
		$data['sub_judul']	='Form Barang';
		$data['content'] 		='barang/form_barang';
		$data['kat_brg']    = $this->M_barang->kategori();
		$data['barang'] 		= $this->M_barang->data_barang();
		$this->load->view('template/isi-halaman', $data);

		/*$kode_barang 	 = $this->input->post('kode_barang');
		$nama_barang 	 = $this->input->post('nama_barang');
		$kategori 		 = $this->input->post('nama_kategori');
		$harga			 	 = $this->input->post('harga');*/
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('kode', 'kode barang ', 'trim|required');
		$this->form_validation->set_rules('nama_barang', 'nama barang', 'trim|required');
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
		$this->form_validation->set_rules('harga', 'harga', 'trim|required');
		if($this->form_validation->run()==true){

		$data_array=array(
			"kode_barang"=>$this->input->post("kode"),
			"nama_barang"=>$this->input->post("nama_barang"),
			"id_kategori"=>$this->input->post("kategori"),
			"harga"=>$this->input->post("harga"),
					/*$kode_barang 	 = $this->input->post('kode_barang'),
					$nama_barang 	 = $this->input->post('nama_barang'),
					$kategori 		 = $this->input->post('nama_kategori'),
					$harga			 	 = $this->input->post('harga'),*/
			);
		$query=$this->M_barang->simpan($data_array);
		redirect('Barang');
		//$this->load->view('template/isi-halaman', $data);

	}else{
		$data['barang'] = $this->M_barang->data_barang();
		$this->load->view('template/isi-halaman', $data);
	}

}

public function edit(){
	$id=$this->input->get('id_barang');

	$data['side'] 			='template/side';
	$data['judul'] 			='Edit Barang';
	$data['sub_judul']	='Form Edit Barang';
	$data['content'] 		='barang/form_edit';
	$data['barang'] 		= $this->M_barang->edit_barang($id);
	//$this->load->model('M_kategori');
	$data['kat_brg']    = $this->M_barang->kategori();
	//print_r($data['kat_brg']);//die();
	//$data['kategori_data']   =  $this->M_barang->get_one($id)->row_array();
	$this->load->view('template/isi-halaman', $data);

}

public function update($id){
	//print_r($this->input->post('kode_barang'));die();
	$id	           = $this->input->post('id_barang');
	$kode          = $this->input->post('kode_barang');
	$nama_barang 	 = $this->input->post('nama_barang');
	$nama_kategori = $this->input->post('nama_kategori');
	$harga 	       = $this->input->post('harga');


	$data = array(
		'id_barang'		=>$id,
		'kode_barang' =>$kode,
		'nama_barang' =>$nama_barang,
		'id_kategori' =>$nama_kategori,
		'harga' 			=>$harga
		);
	$this->M_barang->update_barang($id, $data);
	redirect('Barang');

}



}