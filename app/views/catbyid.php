<?php include_once 'inc/header.php';?>

	<?php 


	if (isset($cat)) {
		foreach ($cat as $key => $value) {
			echo $value['name']."<br>";
		}
	}


	 ?>

<?php include_once 'inc/footer.php'; ?>