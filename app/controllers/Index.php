<?php 
	/**
	 * Wellcome class
	 */

	class Index extends Scontroller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$this->home();
		}

		//This function is used for view all post in home page
		public function home()
		{

			$data = array();
			$category = array();
			$postmodel = $this->load->model('PostModel');
			$data['posts'] = $postmodel->posts();
			$category['cat'] = $postmodel->category();
			$this->load->view('home',$data,$category);
		}

		//This function is used for view postdetails in post single page
		public function postdetails($id)
		{
			$data = array();
			$postmodel = $this->load->model('PostModel');
			$data['postdetails'] = $postmodel->postdetails($id);
			$category['cat'] = $postmodel->category();
			$this->load->view('postdetails',$data,$category);
		}

		//This function is used for view post by category in post
		public function categorybypost($id)
		{
			$data = array();
			$postmodel = $this->load->model('PostModel');
			$data['catbypost'] = $postmodel->catbypost($id);
			$category['cat'] = $postmodel->category();
			$this->load->view('category-post',$data,$category);
		}

		public function search()
		{
			$keyword = $_REQUEST['keyword'];
			$cat_id  = $_REQUEST['cat'];
			if (empty($keyword) && $cat_id == 0) {
				header('location:'.BASE_URL.'/Index/home');
			}else{	
				$category = array();
				$search = array();
				$postmodel = $this->load->model('PostModel');
				$category['cat'] = $postmodel->category();
				$search['sresult'] = $postmodel->searchquery($keyword, $cat_id);
				$this->load->view('searchresult',$search,$category);
			}
		}
		
	}

?>