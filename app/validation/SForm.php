<?php 
	/**
	 * From valition class
	 */
	class SForm
	{
		public $currentvalue;
		public $values = array();
		public $errors = array();
		
		function __construct()
		{
			
		}

		public function post($key)
		{
			$this->values[$key] = trim($_POST[$key]);
			$this->currentvalue = $key;
			return $this;
		}

		public function isEmpty()
		{
			if (empty($this->values[$this->currentvalue])) {
				$this->errors[$this->currentvalue]['empty'] = "Field must not be empty";  
			}
			return $this;
		}

		public function length($min=0, $max)
		{
			if (strlen($this->values[$this->currentvalue]) < $min || strlen($this->values[$this->currentvalue]) > $max) {
				$this->errors[$this->currentvalue]['empty'] = "Please fix character length";
			}
			return $this;
		}

		public function submit()
		{
			if (empty($this->errors)) {
				return true;
			}else{
				return false;
			}
		}

	}
 ?>