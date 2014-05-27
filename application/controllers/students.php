<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function add()
	{
		$this->layout->setLayout('admin_layout');
		$this->layout->js(array(base_url().'public/js/jquery.validate.min.js'));
		$this->layout->css(array(base_url().'public/css/bootstrap.css'));	
		$this->layout->css(array(base_url().'public/css/AdminLTE.css'));
		$this->layout->js(array(base_url().'public/js/jquery.validate.min.js'));
		$this->layout->css(array(base_url().'public/css/bootstrap_override.css'));
		$this->layout->css(array(base_url().'public/css/AdminLTE.css'));
		$this->layout->css(array(base_url().'public/css/font-awesome.min.css'));
		$this->layout->css(array(base_url().'public/css/ionicons.min.css'));
		$this->layout->js(array(base_url().'public/js/jquery-ui-1.10.3.custom.js'));
		$this->layout->js(array(base_url().'public/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'));
		$this->layout->js(array(base_url().'public/js/AdminLTE/app.js'));
		$this->layout->js(array(base_url().'public/js/bootstrap.file-input.js'));
		$this->layout->view('add');
	}

}