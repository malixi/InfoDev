<?php
class UserClass
{
	private $db;
	
	// constructor
	function __construct($db)
	{
		$this->db = $db;
	}
	
	function userLogin($username, $pwd)
	{
		$result = $this->db->query("SELECT * FROM users WHERE userName = '" . $username. "' and password = '" . md5($pwd) . "'");
		
		if ($result->num_rows > 0)
		{
			// success
			@session_start();
			$row = $result->fetch_assoc();
			$_SESSION['user_id'] = $row['userID'];
			$_SESSION['user_name'] = $row['userName'];
			$_SESSION['user_firstname'] = $row['firstName'];
			$_SESSION['user_lastname'] = $row['lastName'];
			$_SESSION['user_type'] = $row['userType'];

			return true;


		}
		else
		{
			// login fail
			return false;
		}

	}
	
	function userLogout()
	{
		session_destroy();
		unset($_SESSION['user_id']);
		unset($_SESSION['user_name']);
		return;
	}
	
	function escapeString($str) {
		return $this->db->real_escape_string($str);
	}
}
?>