<?php 
	/**
	 * Wellcome class
	 */

	class CategoryController extends Scontroller
	{
		
		function __construct()
		{
			parent::__construct();
			Session::checksession();
		}


		public function catlist()
		{
			$data = array();
			$table = "category";
			$catmodel = $this->load->model('CatModel');
			$data['cat'] = $catmodel->catlist($table);
			$this->load->view('catlist',$data);			
		}
		public function catById()
		{
			$data = array();
			$table = "category";
			$id = 77;
			$catmodel = $this->load->model('CatModel');
			$data['cat'] = $catmodel->catById($table, $id);
			$this->load->view('catbyid',$data);			
		}

		public function addCategory()
		{
			return $this->load->view('addcategory');
		}

		public function insertCategory()
		{
			$table = "category";
			$name = $_POST['name'];
			$data = array(
				'name' => $name,
			);
			$catmodel = $this->load->model("CatModel");
			$result = $catmodel->insertCat($table, $data);

			$message = array();
			if ($result == '1') {
				$message['msg'] = "Data insert Sucessfull";
			}else{
				$message['msg'] = "Data not inserted";
			}
			return $this->load->view('addcategory', $message);
		}

		public function catEdit()
		{
			$table = "category";
			$id = "74";
			$catmodel = $this->load->model("CatModel");
			$data = $catmodel->catById($table, $id);
			$this->load->view('categoryUpdate',$data);
		}

		public function updatecat()
		{
			$data = array();
			$table="category";
			$id = $_POST['id'];
			$cond = "id=$id"; 
			$data['name'] = $_POST['name'];
			$data['title'] = $_POST['title'];
			$catmodel = $this->load->model("CatModel");
			$result = $catmodel->catUpdate($table, $data, $cond);
			/*$message = array();
			if ($result == '1') {
				$message['msg'] = "Category Update Sucessfull";
			}else{
				$message['msg'] = "Category Not updated";
			}
			return $this->load->view('categoryUpdate', $message);*/
		}

		public function deleteCatById()
		{
			$table = "category";
			$cond = "id=77";
			$catmodel = $this->load->model("CatModel");
			$result = $catmodel->deleteCatById($table, $cond);
		}
	}

?>