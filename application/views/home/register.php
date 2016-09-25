<link rel="stylesheet" href="<?php  echo ASSET_ROOT;?>/css/signin.css">
<!-- Begin content / container -->
<div class="container">
	<div class="row header">
		<div class="col-md-12">
			<h3 class="logo">
				<a href="../index.html">jpFramework</a>
			</h3>
			<h4>Registration</h4>
			<p>
				jpFramework was designed for service-based organizations with daily
				office task-view requirements. <br>Please make sure your contact
				information is correct.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="wrapper clearfix">
				<div class="formy">
					<div class="row">
						<div class="col-md-12">
							<form action="<?php echo ASSET_ROOT;?>/user/register"
								method="post" role="form">
								<div class="form-group">
									<label for="profileCompany">Company name</label> <input
										name="profileCompany" type="text" class="form-control"
										id="profileCompany" size="26" required="required" />
								</div>

								<div class="form-group">
									<label for="profileFirstName">First name</label>
									<div class="form-group">
										<input name="profileFirstName" type="text"
											class="form-control" id="profileFirstName" size="26"
											required="required">
									</div>
									<label for="profileLastName">Last name</label>
									<div class="form-group">
										<input name="profileLastName" type="text" class="form-control"
											id="profileLastName" maxlength="26" required="required">
									</div>
								</div>

								<div class="form-group">
									<label for="profileEmailAddress">Email address</label> <input
										name="profileEmailAddress" type="email" class="form-control"
										id="email" maxlength="26" required="required" />
								</div>
								<div class="submit">
									<button name="okRegister" value="submit" type="submit"
										class="button-clear">
										<span> Create account </span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="already-account">
                <?php echo MY_COMPANY;?> &copy; 2016 - All Rights Reserved</a>
			</div>
		</div>
	</div>
</div>
<!-- End content /container -->

