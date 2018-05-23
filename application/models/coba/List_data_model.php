<?php


class List_data_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	// ambil semua data username dari tabel user
	public function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get()->result_array();
	}
}