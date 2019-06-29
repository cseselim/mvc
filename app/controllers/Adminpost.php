<?php 
	/**
	 * Adminpost controller
	 */
	class Adminpost extends Scontroller
	{
		
		function __construct()
		{
			parent::__construct();
			Session::checksession();
		}

		public function postlist()
		{
			$this->load->view('Admin/header');
			$this->load->view('Admin/sidebar');

			$data = array();
			$postmodel = $this->load->model("PostModel");
			$data['posts'] = $postmodel->posts();
			$this->load->view('Admin/postlist',$data);

			$this->load->view('Admin/footer');
		}

		public function createpost()
		{
			$this->load->view('Admin/header');
			$this->load->view('Admin/sidebar');

			$data = array();
			$category = array();
			$table = "category";
			$catmodel = $this->load->model('CatModel');
			$category['cat'] = $catmodel->catlist($table);

			$postmodel = $this->load->model("PostModel");
			$data['posts'] = $postmodel->posts();
			$this->load->view('Admin/addpost',$data,$category);

			$this->load->view('Admin/footer');	
		}
		
		public function insertpost()
		{
			$validcheck = $this->load->validation('Sform');

			$validcheck->post('title')->isEmpty();
			$validcheck->post('body')->isEmpty()->length(5,500);
			$validcheck->post('cat_id')->isEmpty();


			if ($validcheck->submit()) {
				$data = array();
				$data['title'] = $_POST['title'];
				$data['body'] = $_POST['body'];
				$data['cat_id'] = $_POST['cat_id'];
				if (empty($_POST['status'])) {
					$data['status'] = 0;
				}else{
					$data['status'] = $_POST['status'];
				}
				$postmodel = $this->load->model("PostModel");
				$resutl = $postmodel->insertpost($data);
				header("location:".BASE_URL."/Adminpost/postlist");	
			}else{
				$error['posterror'] = $validcheck->errors;

				$category = array();
				$table = "category";
				$catmodel = $this->load->model('CatModel');
				$category['cat'] = $catmodel->catlist($table);

				$this->load->view('Admin/header');
				$this->load->view('Admin/sidebar');
				$this->load->view('Admin/addpost',$error,$category);
				$this->load->view('Admin/footer');	
			}
			
		}

		public function editpost($id)
		{
			$data = array();
			$postmodel = $this->load->model("PostModel");
			$data['posts'] = $postmodel->postbyid($id);

			$category = array();
			$table = "category";
			$catmodel = $this->load->model('CatModel');
			$category['cat'] = $catmodel->catlist($table);

			$this->load->view('Admin/header');
			$this->load->view('Admin/sidebar');
			$this->load->view('Admin/editpost',$data,$category);
			$this->load->view('Admin/footer');	
		}

		public function updatepost($id)
		{
			$input = $this->load->validation('Sform');

			$input->post('title')->isEmpty();
			$input->post('body')->isEmpty()->length(5,500);
			$input->post('cat_id')->isEmpty();

			if ($input->submit()) {
				$data = array();
				$data['title'] = $input->values['title'];
				$data['body'] = $input->values['body'];
				$data['cat_id'] = $input->values['cat_id'];
				if (empty($_POST['status'])) {
					$data['status'] = 0;
				}else{
					$data['status'] = $_POST['status'];
				}

				$postmodel = $this->load->model("PostModel");
				$postmodel->updatepost($data,$id);
				header("location:".BASE_URL."/Adminpost/postlist");	
			}else{
				$error['posterror'] = $input->errors;

				$data = array();
				$category = array();
				$table = "category";
				$catmodel = $this->load->model('CatModel');
				$category['cat'] = $catmodel->catlist($table);
				$data = array();
				$postmodel = $this->load->model("PostModel");
				$data['posts'] = $postmodel->postbyid($id);

				$this->load->view('Admin/header');
				$this->load->view('Admin/sidebar');
				$this->load->view('Admin/editpost',$error,$category,$data);
				$this->load->view('Admin/footer');	
			}
		}

		public function deletepost($id)
		{
			$postmodel = $this->load->model("PostModel");
			$resutl = $postmodel->deletepost($id);
			header("location:".BASE_URL."/Adminpost/postlist");	
		}


	}

 ?>