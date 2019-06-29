<?php 
	/**
	 * User model
	 */
	class UserModel extends SModel
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function userlist()
		{
			$table = "user";
			$sql = "SELECT * FROM $table";
			return $this->db->select($sql);
		}

		public function adduser($data)
		{
			$table = "user";
			return $this->db->insert($table,$data);
		}

		public function userbyid($id)
		{
			$table = "user";
			$sql = "SELECT * FROM $table WHERE id = '$id'";
			return $this->db->select($sql);
		}

		public function userupdate($data, $id)
		{
			$table = "user";
			$cond = "id=$id";
			return $this->db->update($table,$data,$cond);
		}

		public function userdelete($id)
		{
			$table = "user";
			$cond = "id=$id";
			return $this->db->delete($table,$cond);
		}
	}
 ?>