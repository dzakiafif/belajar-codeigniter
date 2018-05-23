<?php


class Delete_data_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function delete_data($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('user');
	}
}