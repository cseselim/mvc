<?php 
	include_once 'Load.php';
	
	/**
	 * Main controller
	 */
	class Scontroller 
	{
		protected $load = array(); 
		function __construct()
		{
			$this->load = new Load();
		}

	}

 ?>