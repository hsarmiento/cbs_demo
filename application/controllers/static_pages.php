<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Static_pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->layout->setLayout('static_pages_layout');
		$this->layout->css(array(base_url().'public/css/bootstrap.css'));
		$this->layout->css(array(base_url().'public/css/users_signin.css'));
		$this->layout->css(array(base_url().'public/css/AdminLTE.css'));
		$this->layout->view('index');
	}

	public function create()
	{
		$this->layout->setLayout('static_pages_layout');
		$this->layout->css(array(base_url().'public/css/bootstrap.css'));
		$this->layout->css(array(base_url().'public/css/users_signin.css'));
		$this->layout->css(array(base_url().'public/css/AdminLTE.css'));
		$this->layout->view('create');
	}
}