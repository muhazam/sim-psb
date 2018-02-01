<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		if (!$this->session->userdata('username')) {
            	redirect('auth');
        }
	}

	public function index() {
		$this->template->load('admin/guru/templateAdmin', 'admin/guru/dashboard');
	}

	function pengumuman() {

	} 

}