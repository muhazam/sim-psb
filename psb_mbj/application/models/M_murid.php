<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_murid extends CI_Model {

	function murid_list() {
		$list = $this->db->query('SELECT * FROM c_murid WHERE status="y"');
		return $list->result();
	}

}

/* End of file M_murid.php */
/* Location: ./application/models/M_murid.php */