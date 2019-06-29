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
					if ($key == "title") {
						echo "Category ".$value['empty']."<br>";
					}
				}
			} ?>
		</div>
		<form action="<?php echo BASE_URL ?>/Adminpost/insertpost" method="post">
			<table class="adduser">
				<tr>
					<td>Title:</td>
					<td><input type="text" name="title"></td>
				</tr>

				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>

				<tr>
					<td>Body:</td>
					<td><textarea rows="7" cols="50" name="body"></textarea></td>
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
								<option value="<?php echo $value['id'] ?>"><?php echo $value['name']; ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>

				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>

				<tr>
					<td>publish:</td>
					<td><input type="checkbox" name="status" value="1"></td>
				</tr>

				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>

				<tr>
					<td></td>
					<td><input type="submit" value="AddPost"></td>
				</tr>
			</table>
		</form>
	</article>
</section>
	