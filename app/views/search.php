<section id="searchpotion">
	<div class="menu">
		<a href="<?php echo BASE_URL ?>">Home</a>  &nbsp; &nbsp;
		<a href="<?php echo BASE_URL ?>/Login/">login</a>
	</div>
	<div class="search">
		<form action="<?php echo BASE_URL ?>/Index/search" method="post">
			<input type="text" name="keyword" placeholder="search.....">
			<select name="cat">
				<option>Select Category</option>
				<?php foreach ($cat as  $value) { ?>
					<option value="<?php echo $value['id']; ?>"><?php echo $value['name'] ?></option>
				<?php } ?>
				
			</select>
			<input type="submit" name="submit" value="search">
		</form>
	</div>
</section>