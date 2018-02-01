<?php 

class M_user extends CI_Model {
	
	function cekLogin($username, $password)	{
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$user = $this->db->get('tbl_user')->row_array();
		return $user;
	}

	function pengumuman() {
		$this->db->select('*');
		$this->db->from('tbl_pengumuman');
		$this->db->where('id','1');

		return $this->db->get()->row();
	}

	function up_pengumuman($id, $data) {
		$this->db->where('id', $id);
		$this->db->update('tbl_pengumuman', $data);
	}
}