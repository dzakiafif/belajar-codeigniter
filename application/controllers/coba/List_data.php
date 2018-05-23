<?php


class List_data extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('coba/List_data_model','model');
	}


	public function index()
	{
		//ambil semua data
		$data['data'] = $this->model->get_all_data();

		$this->twig->display('coba/list-data',$data);
	}

}