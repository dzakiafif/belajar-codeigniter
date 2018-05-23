<?php


class Create_data_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function save($data)
	{
		return $this->db->insert('user',$data);
	}
}