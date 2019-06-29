<section id="admin_panel">
	<aside class="adminleft">
		<div class="widget">
			<h3>Site option</h3>
			<ul>
				<li><a href="<?php echo BASE_URL; ?>/Admin">Home</a></li>
				<li><a href="<?php echo BASE_URL; ?>/Login/logout">Logout</a></li>
			</ul>
		</div>
		<div class="widget">
			<h3>Cateogry</h3>
			<ul>
				<li><a href="<?php echo BASE_URL ?>/Admin/addcategory">Add Category</a></li>
				<li><a href="<?php echo BASE_URL ?>/Admin/categorylist">Category list</a></li>
			</ul>
		</div>
		<div class="widget">
			<h3>Post option</h3>
			<ul>
				<li><a href="<?php echo BASE_URL ?>/Adminpost/createpost">Add post</a></li>
				<li><a href="<?php echo BASE_URL ?>/Adminpost/postlist">Post list</a></li>
			</ul>
		</div>

		<div class="widget">
			<h3>User option</h3>
			<ul>
				<li><a href="<?php echo BASE_URL ?>/Usercontroller/createuser">Add user</a></li>
				<li><a href="<?php echo BASE_URL ?>/Usercontroller/userlist">User list</a></li>
			</ul>
		</div>
	</aside>