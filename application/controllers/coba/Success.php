<?php


class Success extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->twig->display('coba/success');
	}
}