<?php 
	/**
	 * Login model
	 */
	class LoginModel extends SModel
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function loginchekdata($username,$pass)
		{
			$table = "user";
			$sql = "SELECT * FROM $table WHERE username = ? && pass = ?";

			return $resutl = $this->db->loginrow($sql, $username, $pass);

		}

		public function getUserData($username, $pass)
		{
			$sql = "SELECT * FROM user WHERE username = ? && pass = ?";
			return $this->db->selectUser($sql, $username, $pass);
		}
	}

 ?>