<?php include_once 'inc/header.php';?>
	<?php include_once'search.php'; ?>

	<section id="blog_post">
	<?php foreach ($catbypost as $value) {?>
		<div class="post">
			<h2><a href=""><?php echo $value['title']; ?></a></h2>
			<span>Category: <?php echo $value['name']; ?></span>
				<br>
			<p><?php echo text_shorter($value['body'],0,150); ?> [...]</p>
			<a class="read" href="<?php echo BASE_URL; ?>/index/postdetails/<?php echo $value['id'] ?>">read more</a>
		</div>
	<?php } ?>
</section>

	<?php include_once'sidebar.php'; ?>

<?php include_once 'inc/footer.php'; ?>