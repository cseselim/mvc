<article class="adminright">
		<h2>Welcome in Admin panel...</h2>
		<div>
			<?php if (isset($posterror)) {
				foreach ($posterror as $key => $value) {
					if ($key == "title") {
						echo "Title ".$value['empty']."<br>";
					}
					if ($key == "body") {
						echo "Body ".$value['empty']."<br>";
					}
					if ($key == "cat_id") {
						echo "Category ".$value['empty']."<br>";
					}
				}
			} ?>
		</div>
		<?php foreach ($posts as  $values) { ?>
			
		<form action="<?php echo BASE_URL ?>/Adminpost/updatepost/<?php echo $values['id']; ?>" method="post">
			<table class="adduser">
				<tr>
					<td>Title:</td>
					<td><input type="text" name="title" value="<?php echo $values['title']; ?>"></td>
				</tr>

				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>

				<tr>
					<td>Body:</td>
					<td><textarea rows="7" cols="50" name="body"><?php echo $values['body']; ?></textarea></td>
				</tr>

				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>

				<tr>
					<td>Category:</td>
					<td>
						<select name="cat_id">
							<option value="">select Category</option>
							<?php foreach ($cat as $value) { ?>

									<option <?php if ($values['cat_id'] == $value['id']) { ?> selected <?php } ?> value="<?php echo $value['id'] ?>"><?php echo $value['name']; ?></option>

							<?php } ?>
						</select>
					</td>
				</tr>

				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>

				<tr>
					<td>publish:</td>
					<td><input type="checkbox" name="status" value="1" <?php if ($values['status'] == '1') { ?>
						checked 
						<?php } ?> ></td>
				</tr>

				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>

				<tr>
					<td></td>
					<td><input type="submit" value="Update"></td>
				</tr>
			</table>
		</form>

	<?php } ?>
	</article>

</section>
