<?php 
	/**
	 * login class
	 */
	class Login extends Scontroller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			return $this->login();
		}

		public function login()
		{
			return $this->load->view('Login/login');
		}

		public function logincheck()
		{
			$username = $_POST['username'];
			$pass     = $_POST['password'];
			$pass     = md5($pass);
			$LoginModel = $this->load->model('LoginModel');
			$result = $LoginModel->loginchekdata($username,$pass);
			if($result > 0) {
				$result = $LoginModel->getUserData($username,$pass);
				Session::init();
				Session::set('login', true);
				Session::set('username',$result[0]['username']);
				Session::set('id',$result[0]['id']);
				Session::set('level',$result[0]['level']);
				header("location: ".BASE_URL."/Admin");
			}else{
				header("location: ".BASE_URL."/Login/login");
			}
		}

		public function logout()
		{
			Session::destroy();
		}

	}

 ?>