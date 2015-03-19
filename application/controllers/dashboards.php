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

	public function createNewUser()
	{
		$postData = $this->input->post();
		$result = $this->dashboard->createNewUser($postData);
		if($result)
		{
			//Change so created user is logged in automatically and redirected to login page.
			$this->session->set_flashdata('success', 'Account successfully created. Please sign in below.');
			redirect('signin');
		}
		else
		{
			$this->session->set_flashdata("error", "Something went wrong. Please try again later.");
			redirect('register');
		}
	}

	public function retrieveOneUser()
	{
		$postData = $this->input->post();
		$user = $this->dashboard->retrieveOneUser($postData);
		if($user) 
		{
			$this->session->set_userdata('logged_in', TRUE);
			$this->session->set_userdata('username', $user['first_name']." ".$user['last_name']);
			$this->session->set_userdata('first_name', $user['first_name']);
			$this->session->set_userdata('last_name', $user['last_name']);
			$this->session->set_userdata('email', $user['email']);
			$this->session->set_userdata('user_level', $user['user_level']);
			$this->session->set_userdata('user_id', $user['id']);
			redirect('dashboard');
		}
		else
		{
			$this->session->set_flashdata("error", "Something went wrong. Invalid email or password.");
			redirect('signin');
		}
	}

	public function new_user()
	{
		$this->load->view('new_user');
	}

	public function edit_user()
	{
		$this->load->view('edit_user');
	}

	public function dashboard()
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

	public function profile()
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