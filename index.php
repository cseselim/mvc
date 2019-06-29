
<?php
	spl_autoload_register(function ($class){
		include_once 'system/libs/'.$class.'.php';
	});

	include_once 'app/helpers/helper.php';
	include_once 'app/config/config.php';



	$main = new Main();

	/*$url = isset($_GET['url']) ? $_GET['url'] : NULL;
	if ($url != NULL) {
	$url = rtrim($url,'/');
	$url = explode('/', $url);	
	}else{
		unset($url);
	}

	if (isset($url[0])) {
		include_once 'app/controllers/'.$url[0].'.php';
		$selim = new $url[0]();
		if (isset($url[1])) {
			$method = $url[1];
		}
		if (isset($url[2])) {
			echo $selim->$method($url[2]);
		}else{
			if (isset($url[1])) {
				echo $selim->$method();
			}
		}
	}else{
		include_once 'app/controllers/Index.php';
		$wellcome = new Index();
		$wellcome->home();	
	}*/
	


 ?>

















<?php /*include "inc/footer.php";*/ ?>