<?php 

class Auth extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('M_user');
	}

	function index() {
		// jika sudah login
		if ($this->session->userdata('username', 'nick_name')) {
			redirect('admin');
		}
		$this->template->load('psb/template', 'login');
	}

	function cek_login() {
		if (isset($_POST['submit'])) {
			$username 	= $this->input->post('username');
			$password 	= $this->input->post('password');
			$loginUser 	= $this->M_user->cekLogin($username, $password);
			if (!empty($loginUser)) {
				$this->session->set_userdata($loginUser);
				redirect('admin');
			}else {
				redirect('auth');
			}
		}else {
			redirect('auth');
		}
	}

	function logout() {
		unset($_SESSION);
		$this->session->sess_destroy();
		redirect('auth');
	}
}