<?php



class Create_data extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('coba/Create_data_model','model');
	}

	public function index()
	{
		if($this->input->post())
		{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$data = [
				'username' => $username,
				'password' => $password
			];

			$this->model->save($data);

			redirect('success');
		}

		$this->twig->display('coba/index');
	}


}