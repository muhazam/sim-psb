<?php 
class M_psb extends CI_Model {
	
	public $table 	= "student";
	public $id 		= "id";
	public $r_murid = "r_murid";
	public $c_murid = "c_murid";

	// fungsi view details santri
	function getById($id) {
		$this->db->where($this->id, $id);
		return $this->db->get($this->table)->row();
	}

	function save() {
		$data = array(
			'id' 					=> $this->input->post('id', true), 
			'name' 					=> $this->input->post('name', true), 
			'nick_name'				=> $this->input->post('nick_name', true), 
			'gender'				=> $this->input->post('gender', true), 
			'birth_place'			=> $this->input->post('birth_place', true),
			'birth_date'			=> $this->input->post('birth_date', true),
			'education_level'		=> $this->input->post('education_level', true),
			'to_grade'				=> $this->input->post('to_grade', true),
			'school_previous'		=> $this->input->post('school_previous', true),
			'father_name'			=> $this->input->post('father_name', true),
			'school_address'		=> $this->input->post('school_address', true),
			'father_birth_place'	=> $this->input->post('father_birth_place', true),
			'father_birth_date'		=> $this->input->post('father_birth_date', true),
			'father_education'		=> $this->input->post('father_education', true),
			'father_job'			=> $this->input->post('father_job', true),
			'father_phone'			=> $this->input->post('father_phone', true),
			'father_whatsapp'		=> $this->input->post('father_whatsapp', true),
			'mother_name'			=> $this->input->post('mother_name', true),
			'mother_birth_place'	=> $this->input->post('mother_birth_place', true),
			'mother_birth_date'		=> $this->input->post('mother_birth_date', true),
			'mother_education'		=> $this->input->post('mother_education', true),
			'mother_job'			=> $this->input->post('mother_job', true),
			'mother_phone'			=> $this->input->post('mother_phone', true),
			'mother_whatsapp'		=> $this->input->post('mother_whatsapp', true),
			'note'					=> $this->input->post('note', true)
		);
		$this->db->insert($this->table,$data);	
	}

	function replace() {
		$this->db->get($this->c_murid)->row();
		$this->db->replace($this->r_murid,$data);
		$this->db->get_where('c_murid', array('status' => 'y'))->row_array();
	}

}