<?php 
	/**
	 * Admin controller
	 */
	class Admin extends Scontroller
	{
		
		function __construct()
		{
			parent::__construct();
			Session::checksession();
		}

		public function index()
		{
			return $this->home();
		}

		public function home()
		{
			$this->load->view('Admin/header');
			$this->load->view('Admin/sidebar');
			$this->load->view('Admin/home');
			$this->load->view('Admin/footer');

		}

		public function addcategory()
		{
			$this->load->view('Admin/header');
			$this->load->view('Admin/sidebar');
			$this->load->view('Admin/addcategory');
			$this->load->view('Admin/footer');

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

			$mdata = array();
			if ($result == '1') {
				$mdata['msg'] = "Data insert Sucessfull";
			}else{
				$mdata['msg'] = "Data not inserted";
			}
			$url = BASE_URL."/Admin/categorylist?msg=".urldecode(serialize($mdata));
			header("location:$url");
		}


		public function categorylist()
		{
			$this->load->view('Admin/header');
			$this->load->view('Admin/sidebar');

			$data = array();
			$table = "category";
			$catmodel = $this->load->model('CatModel');
			$data['cat'] = $catmodel->catlist($table);
			$this->load->view('Admin/catlist',$data);

			$this->load->view('Admin/footer');

		}

		public function editcat($id=NULL)
		{
			$this->load->view('Admin/header');
			$this->load->view('Admin/sidebar');

			$table = "category";
			$catmodel = $this->load->model("CatModel");
			$data['cat'] = $catmodel->catById($table, $id);
			$this->load->view('Admin/editcat',$data);

			$this->load->view('Admin/footer');
		}

		public function UpdateCategory($id=NULL)
		{
			$this->load->view('Admin/header');
			$this->load->view('Admin/sidebar');

			$data = array();
			$table="category";
			$cond = "id=$id"; 
			$data['name'] = $_POST['name'];
			$catmodel = $this->load->model("CatModel");
			$result = $catmodel->catUpdate($table, $data, $cond);
		
			$mdata = array();
			if ($result == 1) {
				$mdata['msg'] = "Data Update Sucessfull";
			}else{
				$mdata['msg'] = "Data not Update";
			}
			$url = BASE_URL."/Admin/categorylist?msg=".urldecode(serialize($mdata));
			header("location:$url");

			$this->load->view('Admin/footer');
		}

		public function deletecat($id=NULL)
		{
			$this->load->view('Admin/header');
			$this->load->view('Admin/sidebar');

			$table = "category";
			$cond = "id=$id";
			$catmodel = $this->load->model("CatModel");
			$result = $catmodel->deleteCatById($table, $cond);

			$mdata = array();
			if ($result == 1) {
				$mdata['msg'] = "Cateogy Deleted Sucessfull";
			}else{
				$mdata['msg'] = "Category not delete";
			}
			$url = BASE_URL."/Admin/categorylist?msg=".urldecode(serialize($mdata));
			header("location:$url");

			$this->load->view('Admin/footer');
		}

	}

