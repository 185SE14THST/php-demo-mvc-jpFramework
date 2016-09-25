<?php
// Create new object )data can be gathered from supar globals, javaScript or post forms
// $user = new Users ( 'Filipe', 'Daiz', '55@55.com', '305-555-5555', 'j6U8r44lw4g12kl' );

?>
	<link rel="stylesheet" href="<?php  echo ASSET_ROOT;?>/css/signin.css" />

	<!-- Begin content / container -->
	<div class="container">
		<form action="<?php echo ASSET_ROOT;?>/user/login" method="post" class="form-signin">
			<h2 class="form-signin-heading">Please sign in</h2>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input
				type="email" id="inputEmail" name="inputEmail" class="form-control"
				placeholder="<?php echo $user->emailAddress; ?>" required autofocus />
			<label
				for="inputPassword" class="sr-only">
				Password
			</label>
			<input
				type="password" id="inputPassword" name="inputPassword" class="form-control"
				placeholder="Password" required />
			<div class="checkbox">
				<label>
					<input type="checkbox" value="remember-me" />Remember me
				</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign	in</button>
			<a class="btn btn-lg btn-default btn-block" href="<?php  echo ASSET_ROOT;?>/user/register" role="button">Register</a>
		</form>

</div>
	<!-- End content /container -->