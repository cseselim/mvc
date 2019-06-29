<?php include_once 'inc/header.php';?>
	<p>
		<?php 
			if (isset($msg)) {
				echo $msg;
			}
		 ?>
	</p>
	<form action="http://localhost/mvc_template/CategoryController/updatecat" method="post">
		<?php
			foreach ($data as  $value) { 
		 ?>
		<input type="hidden" name="id" required value="<?php echo $value['id']; ?>"><br>
		<p>Name</p>
		<input type="text" name="name" required value="<?php echo $value['name']; ?>"><br>
		<p>Title</p>
		<input type="text" name="title" required value="<?php echo $value['title']; ?>"><br>
		<?php } ?>
		<input type="submit" value="submit"><br>
	</form>

<?php include_once 'inc/footer.php'; ?>