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
			$this->session->set_userdata('description', $user['description']);
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
			$users = $this->dashboard->retrieveAllUsers();
			$this->load->view('admin_dashboard', array('users' => $users));
		}
		else if ($this->session->userdata('user_level') == 'normal')
		{
			$users = $this->dashboard->retrieveAllUsers();
			$this->load->view('user_dashboard', array('users' => $users));
		}
		else {
			redirect('/');
		}
	}

	public function profile()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{			
			$user = $this->dashboard->retrieveUserProfile($this->input->post('id'));
			$this->load->view('user_information', array('user' => $user));
		}
		else
		{
			redirect('/');
		}
	}

	public function edit_profile()
	{
		$user = $this->dashboard->retrieveUserProfile($this->input->post('id'));
		$this->load->view('edit_profile', array('user' => $user));
	}

	public function updateUserProfile()
	{
		$postData = $this->input->post();
		$this->session->set_userdata('username', $postData['first_name']." ".$postData['last_name']);
		$this->session->set_userdata('first_name', $postData['first_name']);
		$this->session->set_userdata('last_name', $postData['last_name']);
		$this->session->set_userdata('email', $postData['email']);
		$result = $this->dashboard->updateUserProfile($postData);
		if($result)
		{
			$this->session->set_flashdata("success", "Profile successfully updated!");
			redirect('edit_profile');
		}
		else
		{
			$this->session->set_flashdata("error", "Something went wrong! Please try again later...");
			redirect('edit_profile');
		}
	}

	public function updatePassword()
	{
		$postData = $this->input->post();
		$result = $this->dashboard->updatePassword($postData);
		if($result)
		{
			$this->session->set_flashdata("success", "Password successfully updated!");
			redirect('edit_profile');
		}
		else
		{
			$this->session->set_flashdata("error", "Something went wrong! We couldn't update your password. Please try again later...");
			redirect('edit_profile');
		}
	}

	public function updateDescription()
	{
		$postData = $this->input->post();
		$this->session->set_userdata('description', $postData['description']);
		$result = $this->dashboard->updateDescription($postData);
		if($result)
		{
			$this->session->set_flashdata("success", "Description successfully updated!");
			redirect('edit_profile');
		}
		else
		{
			$this->session->set_flashdata("error", "Something went wrong! We couldn't update your description. Please try again later...");
			redirect('edit_profile');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

}

//end of Dashboards controller