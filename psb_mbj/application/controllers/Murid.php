<?php 

class Murid extends CI_Controller {
	
	function __construct() {
		parent:: __construct();
		$this->load->library('Ssp');
		$this->load->model('m_murid');
	}

	function index() {
		$this->template->load('psb/template', 'murid');
	}

	function data() {
		$data = $this->m_murid->murid_list();
		echo json_encode($data);
		// DB table to use
		// $table = 'c_murid';
		 
		// Table's primary key
		// $primaryKey = 'id_pendaftaran';
		 
		// Array of database columns which should be read and sent back to DataTables.
		// The `db` parameter represents the column name in the database, while the `dt`
		// parameter represents the DataTables column identifier. In this case object
		// parameter names
		// $columns = array(
		//     array('db' => 'id_pendaftaran', 'dt' => 'id_pendaftaran'),
  //           array('db' => 'nama', 'dt' => 'nama'),
  //           array('db' => 'umur', 'dt' => 'umur'),
  //           array('db' => 'alamat', 'dt' => 'alamat'),
  //           array('db' => 'status', 'dt' => 'status'),
		// );
		 
		// SQL server connection information
		// $sql_details = array(
		//     'user' => $this->db->username,
		//     'pass' => $this->db->password,
		//     'db'   => $this->db->database,
		//     'host' => $this->db->hostname
		// );
		 
		// echo json_encode(
		//     SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
		// );
	}
}