<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboards extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->output->enable_profiler();
	// }

	public function index()
	{
		$this->load->view('landing_page');
	}

	public function sign_in()
	{
		$this->load->view('signin');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function addNewUser()
	{
		$this->load->view('new_user');
	}

	public function editUser()
	{
		$this->load->view('edit_user');
	}

	public function showDashboard()
	{
		if($this->session->userdata('user_level') == 'admin')
		{
			$this->load->view('admin_dashboard');
		}
		else if ($this->session->userdata('user_level') == 'normal')
		{
			$this->load->view('user_dashboard');
		}
		else {
			redirect('/');
		}
	}

	public function showProfile()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$this->load->view('user_information');
		}
		else
		{
			redirect('/');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

}

//end of Dashboards controller