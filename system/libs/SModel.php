<?php 

	/**
	 * Main model
	 */
	class SModel
	{
		protected $db = array();
		function __construct()
		{
			$dbc = 'mysql:dbname=db_mvc; host=localhost';
			$user = 'root';
			$pass = '';
			$this->db = new Database($dbc,$user,$pass);
		}
	}

 ?>