<article class="adminright">
		<h2>Welcome in Admin panel...</h2>
		<div class="error">
			<?php if (isset($useradderror)) {
				foreach ($useradderror as $key => $value) {
					if ($key == "username") {
						echo "Username ".$value['empty']."<br>";
					}
					if ($key == "email") {
						echo "Email ".$value['empty']."<br>";
					}
					if ($key == "level") {
						echo "Level ".$value['empty']."<br>";
					}
				}
			} ?>
		</div>
		<?php foreach ($user as $value) { ?>
			
		<form action="<?php echo BASE_URL ?>/Usercontroller/userupdate/<?php echo $value['id'] ?>" method="post">
			<table class="adduser">
				<tr>
					<td>User Name : </td>
					<td><input type="text" name="username" value="<?php echo $value['username'] ?>"></td>
				</tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>

				<tr>
					<td>User Email : </td>
					<td><input type="email" name="email" value="<?php echo $value['email'] ?>" ></td>
				</tr>

				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>

				<tr>
					<td>User Level : </td>
					<td>
						<select name="level">
							<option value="0">Select level</option>
							<option value="1">Admin</option>
							<option value="2">Editor</option>
							<option value="3">Publisher</option>
						</select>
					</td>
				</tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr>
					<td></td>
					<td><input type="submit" value="AddUser"></td>
				</tr>
			</table>
		</form>

		<?php } ?>
	</article>

</section>