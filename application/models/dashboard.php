<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Model {

	public function createNewUser($postData)
	{
		//make first user automatticaly addmin, normal thereafter
		$query = "INSERT INTO users (first_name, last_name, email, password, user_level, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
		$result = $this->db->query( $query, array($postData['first_name'], $postData['last_name'], $postData['email'], $postData['password'], 'normal' ));
		return $result;
	}

	public function retrieveAllUsers()
	{
		$query = "SELECT id, first_name, last_name, email, DATE_FORMAT(created_at, '%M %d, %Y') AS created_at, user_level FROM users";
		$users = $this->db->query( $query )->result_array();
		return $users;
	}

	public function retrieveOneUser($postData)
	{
		$query = "SELECT * FROM users WHERE email = ? AND password = ?";
		$user = $this->db->query( $query, array($postData['email'], $postData['password']) )->row_array();
		return $user;
	}

	public function retrieveUserProfile($id)
	{
		$query = "SELECT id, first_name, last_name, CONCAT_WS(' ', first_name, last_name) AS user_name, email, description, DATE_FORMAT(created_at, '%M %d, %Y') AS created_at FROM users WHERE id = ?";
		$user = $this->db->query( $query, array($id) )->row_array();
		return $user;
	}

}

//end of Dashboard model