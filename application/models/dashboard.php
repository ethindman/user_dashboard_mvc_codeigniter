<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Model {

	public function createNewUser($postData)
	{
		//make first user automatticaly addmin, normal thereafter
		$query = "INSERT INTO users (first_name, last_name, email, password, user_level, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
		$result = $this->db->query( $query, array($postData['first_name'], $postData['last_name'], $postData['email'], $postData['password'], 'normal' ));
		return $result;
	}

	public function retrieveOneUser($postData)
	{
		$query = "SELECT * FROM users WHERE email = ? AND password = ?";
		$user = $this->db->query( $query, array($postData['email'], $postData['password']) )->row_array();
		return $user;
	}

}

//end of Dashboard model