<?php 
	/**
	 * User controller
	 */
	class Usercontroller extends Scontroller
	{
		
		function __construct()
		{
			parent::__construct();
			Session::checksession();
		}

		public function createuser()
		{

			$this->load->view('Admin/header');
			$this->load->view('Admin/sidebar');

			$this->load->view('Admin/adduser');

			$this->load->view('Admin/footer');
		}

		public function Userlist()
		{
			$data = array();

			$this->load->view('Admin/header');
			$this->load->view('Admin/sidebar');

			$usermodel = $this->load->model('UserModel');
			$data['user'] = $usermodel->userlist();
			$this->load->view('Admin/userlist',$data);

			$this->load->view('Admin/footer');
		}

		public function insertuser()
		{
			$validcheck = $this->load->validation('Sform');

			$validcheck->post('username')->isEmpty();
			$validcheck->post('email')->isEmpty();
			$validcheck->post('level')->isEmpty();

			$data = array();
			if ($validcheck->submit()) {
				$data['username'] = $validcheck->values['username'];
				$data['email']    = $validcheck->values['email'];
				$data['level']    = $validcheck->values['level'];
				$data['pass']     = md5(123);
				$usermodel = $this->load->model('UserModel');
				$data['user'] = $usermodel->adduser($data);
				Session::set('msg','User added successfull');
				header("location: ".BASE_URL."/Usercontroller/userlist");
			}else{
				$error['useradderror'] = $validcheck->errors;
				$this->load->view('Admin/header');
				$this->load->view('Admin/sidebar');
				$this->load->view('Admin/adduser',$error);
				$this->load->view('Admin/footer');
			}
			
		}


		public function useredit($id)
		{
			$data = array();
			$usermodel = $this->load->model("UserModel");
			$data['user'] = $usermodel->userbyid($id);

			$this->load->view('Admin/header');
			$this->load->view('Admin/sidebar');
			$this->load->view('Admin/edituser',$data);
			$this->load->view('Admin/footer');

		}

		public function userupdate($id)
		{
			$data = array();
			$data['username'] = $_POST['username'];
			$data['email'] = $_POST['email'];
			$data['level'] = $_POST['level'];
			$data['pass']     = md5(123);
			$usermodel = $this->load->model("UserModel");
			$data['user'] = $usermodel->userupdate($data,$id);
			Session::set('msg','User update successfull');
			$this->userlist();
		}

		public function userdelete($id)
		{
			$usermodel = $this->load->model("UserModel");
			$usermodel->userdelete($id);
			Session::set('msg','User delete successfull');
			$this->userlist();
		}
	}
 ?>