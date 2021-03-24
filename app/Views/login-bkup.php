<html>
  <head>
    <title>Login</title>
	      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		  <link rel = "stylesheet" type = "text/css"  href = "<?php echo base_url(); ?>/public/assets/css/auth.css">

	      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
  </head>
  <body>
	  <div class="container">

		  	<div class="row" style="height:100%; padding:10px;">
				<div class="col">
					<div style="background:pink; width:100%; height:100%;"></div>
				</div>
			
				<div class="col">

					<div class="login-right-section">

						<div class="login-form-container">
								<h4 >Welcome to T.E.A.M</h4>
								<p style="color:#B5B6C3;">New Here? <a style="color:#54609E;"><strong>Create an Account</strong></a></p>

								<div id="infoMessage"><?php if (isset($message)) {echo $message;} ?></div>
								<form method="post" action="<?php echo site_url('webportal/webloginApi'); ?>">
									<div class="form-group">
										<label for="exampleInputEmail1">Email</label>
										<input style="background:#F5F6FA;height: 50px;" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Password</label><a style="color:#0A3A6A;float: right;"><strong>Forget Password ?</strong></a>
										<input style="background:#F5F6FA;height: 50px;" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
									</div>
									<div>
										<button type="submit" class="btn" style="background:#0A3A6A;color: white; width: 110px;">Sign In</button>
									</div>
								</form>
						</div>
						<div class="row" style="position: absolute; left: 50; bottom: 0;">
							<div class="col">
							<a style="color:#0A3A6A;"><strong>Terms</strong></a> &nbsp;&nbsp;&nbsp;
							<a style="color:#0A3A6A;"><strong>Plans</strong></a> &nbsp;&nbsp;&nbsp;
							<a style="color:#0A3A6A;"><strong>Contact Us</strong></a>
							</div>
						</div>

					</div>
				</div>

		  	</div>

		</div>
  </body>
</html>
