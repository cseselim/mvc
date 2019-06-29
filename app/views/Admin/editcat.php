
<article class="adminright">
	<h2>Update  Categoy</h2>
	
	<?php foreach ($cat as  $value) { ?>
	<form action="<?php echo BASE_URL ?>/Admin/UpdateCategory/<?php echo $value['id']; ?>" method="post">

		<table class="adduser">
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" required value="<?php echo $value['name']; ?>"></td>
				</tr>

				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>


				<tr>
					<td></td>
					<td><input type="submit" value="UpdateCategory"></td>
				</tr>
			</table>
	</form>
	<?php } ?>
</article>

</section>