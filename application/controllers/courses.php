<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function current()
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
		$this->layout->view('current');
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

	public function previous()
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
		$this->layout->view('previous');
	}

	public function show()
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
		$this->layout->view('show');	
	}

	public function edit_calification()
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
		$this->layout->view('edit_calification');
	}

	public function future()
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
		$this->layout->view('future');
	}

	public function add_future()
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
		$this->layout->view('add_future');
	}

	public function schedule()
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
		$this->layout->js(array(base_url().'public/js/calendarGrid.js'));
		$this->layout->view('schedule');
	}
}