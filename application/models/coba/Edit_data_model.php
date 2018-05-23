<?php 


class Edit_data_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_data_by_id($id)
	{
		return $this->db->get_where('user',['id' => $id])->row_array();
	}

	public function update_data($id,$data)
	{
		$this->db->where('id',$id);
		return $this->db->update('user',$data);
	}
}