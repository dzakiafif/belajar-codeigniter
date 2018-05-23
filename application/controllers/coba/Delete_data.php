<?php



class Delete_data extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('coba/Delete_data_model','model');
	}


	public function do_delete($id)
	{
		$this->model->delete_data($id);

		redirect('list-data');
	}
}