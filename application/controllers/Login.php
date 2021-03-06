<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//session_start();
class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
      $this->load->helper('form');
      //$this->load->library('form_validation');
			$this->load->model('M_login');
	}
		
	public function index(){
		$this->load->view('template/login');
	}

	public function cek_login(){
		$dataArray = array(
			'username' => $this->input->post('username', TRUE),
			'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('M_login'); // load M_login

		$hasil = $this->M_login->cek_user($dataArray);
		if ($hasil->num_rows() == 1){
			foreach ($hasil->result() as $sess){
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['uid'] = $sess->uid;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='admin'){
				redirect('dashboard');
			}
			elseif ($this->session->userdata('level')=='member'){
				redirect('dashboard');
			}		
		}
		else {
			//echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
			//$this->session->set_flashdata('info', 'Maaf us');
			$this->session->set_flashdata('info', "<div class='alert alert-danger alert-dismissible' role='alert'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>		
					<span>Username Atau Password Salah!!</span>
				</div>");
			redirect ('login');
		}
	}

	public function logout() {
		/*$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();*/
		$this->session->sess_destroy();
		redirect('login');
	}


}