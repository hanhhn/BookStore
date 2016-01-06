<section>
	<div class="row">
		<div class="container">
			<div class="col-sm-6 col-sm-offset-3 col-xs-12">
				<div class="wrapper-authen">
					<div class="authen-head">
						<span>Register Form</span>
					</div>
					<div class="error"><?php echo validation_errors(); ?></div>
					<form action="" method="post">
						<div class="form-group">
							<label for="email">Email:</label>
							<input name="email" type="text" class="form-control" id="email">
						</div>
						<div class="form-group">
							<label for="fullname">Full name:</label>
							<input name="fullname" type="texr" class="form-control" id="fullname">
						</div>
						<div class="form-group">
							<label for="password">Password:</label>
							<input name="password" type="password" class="form-control" id="password">
						</div>
						<div class="form-group">
							<label for="confirmpassword">Confirm Password:</label>
							<input name="confirmpassword" type="password" class="form-control" id="confirmpassword">
						</div>
						<div class="form-group">
							<label for="phone">Phone:</label>
							<input name="phone" type="text" class="form-control" id="phone">
						</div>
						<div class="form-group" style="float: right;">
							<input type="reset" class="btn btn-reset" value="Reset" />
							<input name="submit" type="submit" class="btn btn-submit" value="Sign in" />
						</div>
						<div class="form-group">
							<button class="login-social facebook"><i class="fa fa-facebook-square"></i></button>
							<button class="login-social googleplus"><i class="fa fa-google-plus-square"></i></button>
						</div>
						<hr>
						<div class="form-group">
							<a href="">Back page Home</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>