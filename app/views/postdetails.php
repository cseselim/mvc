<?php include_once 'inc/header.php';?>
<?php include_once 'search.php';?>

	<section id="blog_post">
		<div class="post_content">
			<?php foreach ($postdetails as $key => $value) { ?>
				<h2><?php echo $value['title']; ?></h2>
				<span>Category: <a href="<?php echo BASE_URL ?>/index/categorybypost/<?php echo $value['cat_id']; ?>"><?php echo $value['name']; ?></a></span>
				<br><br>
				<p><?php echo $value['body']; ?></p>
			<?php } ?>
		</div>
	</section>

	<?php include_once'sidebar.php'; ?>

<?php include_once 'inc/footer.php'; ?>