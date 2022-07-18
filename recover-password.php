<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP OOP Login Example Using AJAX jQuery</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/style.css">
</head>
<body>
	
	<div class="container">
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Brand</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      
		      
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#" data-toggle="modal" data-target="#login">Log In</a></li>
		        <li><a href="#" data-toggle="modal" data-target="#signup">Sign Up</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>



		<div class="row">
			<div class="col-lg-4 col-lg-offset-4">
				<h1>Reset Password</h1>
				<div class="modal-body">
					<form class="form" method="post" action="update-reset-password.php">
					  <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
					  <input type="hidden" name="code" value="<?= $_GET['code'] ?>">	
					  <div class="form-group">
					    <label for="exampleInputPassword1">New Password</label>
					    <input type="password" class="form-control" name="npassword"  id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Confirm Password</label>
					    <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1" placeholder="Password">
					  </div>	
					  <button type="submit" class="btn btn-primary btn-lg">Reset Password!</button>
					</form>
				</div>
				<div class="modal-footer"></div>
			</div>
		</div>

	</div>

	
	


	<!-- change password box -->
	
	<div class="modal fade my-modal" id="change-password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Change your password</h4>
	      </div>
	      <div class="modal-body">
	        <form class="form" method="post" action="change-password.php">

			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">New Password</label>
			    <input type="password" class="form-control" name="npassword" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Confirm Password</label>
			    <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1" placeholder="Password">
			  </div>	
			  <button type="submit" class="btn btn-primary btn-lg">Change Password!</button>
			</form>
	      </div>
	      <div class="modal-footer">
	        
	        
	      </div>
	    </div>
	  </div>
	</div>

	<!-- /change password box -->


	<script src="public/js/jquery.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/script.js"></script>
</body>
</html>