<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')==""){
			$this->session->set_flashdata("msg", "<div class='alert alert-info alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>		
				<span class='glyphicon glyphicon-remove-sign'></span> Ops.. Silahkan login terlebih dahulu!!
				</div>");
		//redirect(base_url('login')); //sama-sama
		redirect('login');
		} 
	}

	public function index() {
		$data['side'] 			='template/side';
		$data['judul'] 			='Dashboard';
		$data['sub_judul']	='dashboard';
		$data['content'] 		='template/content';
		$this->load->view('template/isi-halaman', $data);
	}


}