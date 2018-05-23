<?php 



class Edit_data extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('coba/Edit_data_model','model');
	}

	public function index($id)
	{
		//ambil data berdasarkan id
		$data['data'] = $this->model->get_data_by_id($id);

		//jika melakukan aksi POST
		if($this->input->post())
		{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$data = [
			   'username' => $username,
			   'password' => $password
 			];

 			$this->model->update_data($id,$data);

 			redirect('list-data');

		}

		$this->twig->display('coba/edit-data',$data);
	}

	

}