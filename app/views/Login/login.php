<?php include_once 'inc/header.php'; ?>

	<section id="login">
		<div class="login">
			<h2>Login</h2>
			<form action="<?php echo BASE_URL ?>/Login/logincheck" method="post">
				<table class="loginform">
					<tr>
						<td>User Name : </td>
						<td><input type="text" name="username" placeholder="Enter username"></td>
					</tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr>
						<td>Password : </td>
						<td><input type="text" name="password" placeholder="Enter password"></td>
					</tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Login"></td>
					</tr>
				</table>
			</form>
		</div>
	</section>

<?php include_once 'inc/footer.php'; ?>