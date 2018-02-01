<?php

class Psb extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('Ssp');
		$this->load->model('M_psb');
	}

	function datas() {
		// jika belum login maka kembali ke halaman login
		if (!$this->session->userdata('username','nick_name')) {
			redirect('auth');
		}
		// DB table to use
		$table = 'student';
		 
		// Table's primary key
		$primaryKey = 'id';
		 
		// Array of database columns which should be read and sent back to DataTables.
		// The `db` parameter represents the column name in the database, while the `dt`
		// parameter represents the DataTables column identifier. In this case object
		// parameter names
		$columns = array(
		    array('db' => 'id', 'dt' => 'id'),
            array('db' => 'name', 'dt' => 'name'),
            array('db' => 'nick_name', 'dt' => 'nick_name'),
            array('db' => 'gender', 'dt' => 'gender'),
            array('db' => 'birth_place', 'dt' => 'birth_place'),
            array('db' => 'birth_date', 'dt' => 'birth_date'),
            array('db' => 'education_level', 'dt' => 'education_level'),
            array('db' => 'to_grade', 'dt' => 'to_grade'),
            array('db' => 'school_previous', 'dt' => 'school_previous'),
            array('db' => 'father_name', 'dt' => 'father_name'),
            array('db' => 'school_address', 'dt' => 'school_address'),
            array('db' => 'father_birth_place', 'dt' => 'father_birth_place'),
            array('db' => 'father_birth_date', 'dt' => 'father_birth_date'),
            array('db' => 'father_education', 'dt' => 'father_education'),
            array('db' => 'father_job', 'dt' => 'father_job'),
            array('db' => 'father_phone', 'dt' => 'father_phone'),
            array('db' => 'father_whatsapp', 'dt' => 'father_whatsapp'),
            array('db' => 'mother_name', 'dt' => 'mother_name'),
            array('db' => 'mother_birth_place', 'dt' => 'mother_birth_place'),
            array('db' => 'mother_birth_date', 'dt' => 'mother_birth_date'),
            array('db' => 'mother_education', 'dt' => 'mother_education'),
            array('db' => 'mother_job', 'dt' => 'mother_job'),
            array('db' => 'mother_phone', 'dt' => 'mother_phone'),
            array('db' => 'mother_whatsapp', 'dt' => 'mother_whatsapp'),
            array('db' => 'note', 'dt' => 'note'),
		    array(
		        'db'        => 'id',
		        'dt'        => 'action',
		        'formatter' => function( $d) {
		            return anchor('psb/details/'.$d,'<i class="fa fa-eye"></i>','class="btn btn-xs btn-primary btn-flat tooltips" data-placement="top" title="Details"');;
		        }
		    )
		);
		 
		// SQL server connection information
		$sql_details = array(
		    'user' => $this->db->username,
		    'pass' => $this->db->password,
		    'db'   => $this->db->database,
		    'host' => $this->db->hostname
		);
		 
		echo json_encode(
		    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
		);
	}

	public function index() {
		// jika belum login maka kembali ke halaman login
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		$this->template->load('admin/guru/templateAdmin', 'admin/guru/modul_siswa/list');
	}

	public function register() {
		if (isset($_POST['submit'])) {
			$this->M_psb->save();
			redirect('psb');
		}else {
			$this->template->load('psb/template', 'psb/menu_content/formulir');
		}
	}

	public function details($id) {
		$row 	= $this->M_psb->getById($id);
		if ($row) {
			$data = array(
				'id' => $row->id, 
				'name' => $row->name, 
				'nick_name' => $row->nick_name, 
				'gender' => $row->gender, 
				'birth_place' => $row->birth_place, 
				'birth_date' => $row->birth_date, 
				'education_level' => $row->education_level, 
				'to_grade' => $row->to_grade, 
				'school_previous' => $row->school_previous, 
				'father_name' => $row->father_name, 
				'school_address' => $row->school_address, 
				'father_birth_place' => $row->father_birth_place, 
				'father_birth_date' => $row->father_birth_date, 
				'father_education' => $row->father_education, 
				'father_job' => $row->father_job, 
				'father_phone' => $row->father_phone, 
				'father_whatsapp' => $row->father_whatsapp, 
				'mother_name' => $row->mother_name, 
				'mother_birth_place' => $row->mother_birth_place, 
				'mother_birth_date' => $row->mother_birth_date, 
				'mother_education' => $row->mother_education, 
				'mother_job' => $row->mother_job, 
				'mother_phone' => $row->mother_phone, 
				'mother_whatsapp' => $row->mother_whatsapp, 
				'note' => $row->note, 
			);
			$this->template->load('admin/guru/templateAdmin', 'admin/guru/modul_siswa/details', $data);
		}else {
			redirect('psb');
		}
	}

	public function alur() {
		$this->template->load('psb/template', 'psb/menu_content/alur');	
	}

}