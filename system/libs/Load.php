<?php 
	/**
	 * View load class
	 */
	class Load
	{
		
		function __construct(){}

		public function view($fileName,$data = false,$cat = false,$extra = false)
		{
			if ($data == true && $cat == true && $extra) {
				extract($data);
				extract($cat);
				extract($extra);
			}

			if ($data == true && $cat == true) {
				extract($data);
				extract($cat);
			}
			if ($data == true) {
				extract($data);
			}

			include_once 'app/views/'.$fileName.'.php';
		}

		public function model($ModelName)
		{
			include_once 'app/models/'.$ModelName.'.php';
			return $model = new $ModelName();
		}

		public function validation($filename)
		{
			include_once 'app/validation/'.$filename.'.php';
			return $rule = new $filename();			
		}
	}
 ?>