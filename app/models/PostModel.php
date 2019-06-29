<?php 
	/**
	 * CatModel
	 */
	class PostModel extends SModel
	{		
		function __construct(){
			parent::__construct();
		}

		public function posts()
		{
			$sql = "SELECT * FROM post WHERE status = '1'";
			return $this->db->select($sql);
		}

		public function postbyid($id)
		{
			$sql = "select * from post where id=:id";
			$data = array(":id" => $id);

			return $this->db->select($sql, $data);
		}

		public function updatepost($data,$id)
		{
			$table = "post";
			$cond = "id=$id"; 
			return $this->db->update($table, $data, $cond);
		}

		public function insertpost($data)
		{
			$table = "post";
			$this->db->insert($table, $data);
		}

		public function deletepost($id)
		{
			$table = "post";
			$cond = "id=$id";
			return $this->db->delete($table, $cond);
		}

		public function category()
		{
			$sql = "SELECT * FROM category";
			return $this->db->select($sql);
		}

		public function postdetails($id)
		{
			$posttable = "post";
			$cattable = "category";
			$sql = "SELECT $posttable.*, $cattable.name FROM $posttable INNER JOIN $cattable 
			ON $posttable.cat_id = $cattable.id WHERE $posttable.id = $id";

			return $this->db->select($sql);
		}

		public function catbypost($id)
		{
			$posttable = "post";
			$cattable = "category";
			$sql = "SELECT $posttable.*, $cattable.name FROM $posttable INNER JOIN $cattable 
			ON $posttable.cat_id = $cattable.id WHERE $posttable.cat_id = $id";

			return $this->db->select($sql);
		}

		public function searchquery($keyword, $cat_id)
		{
			$posttable = "post";
			if (isset($keyword) && !empty($keyword)) {
				$sql = "SELECT * FROM post WHERE title LIKE '%$keyword%' or body LIKE '%$keyword%'";
			}elseif (isset($cat_id) && !empty($cat_id)) {
				$sql = "SELECT * FROM post WHERE cat_id = '$cat_id'";
			}
			return $this->db->select($sql);
		}

	}
 ?>