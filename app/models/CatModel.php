<?php 
	/**
	 * CatModel
	 */
	class CatModel extends SModel
	{		
		function __construct(){
			parent::__construct();
		}

		public function catlist($table)
		{
			$sql = "SELECT * FROM $table";
			return $cat  = $this->db->select($sql);
		}

		public function catById($table, $id)
		{
			$sql = "select * from $table where id=:id";
			$data = array(":id" => $id);

			return $this->db->select($sql, $data);
		}

		public function insertCat($table, $data)
		{
			return $result =  $this->db->insert($table, $data);
		}

		public function catUpdate($table, $data, $cond)
		{
			return $this->db->update($table, $data, $cond);
		}

		public function deleteCatById($table, $cond)
		{
			return $this->db->delete($table, $cond);
		}


	}
 ?>