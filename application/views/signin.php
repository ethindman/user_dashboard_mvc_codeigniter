<?php 
	$this->load->view('partials/head');
?>
	<title>Signin Page</title>
</head>
<body>
<?php 
	$this->load->view('partials/navbar');
?>
<?php 
		if($this->session->flashdata('success'))
		{
?>		<div class="alert alert-success alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  			<strong>Congrats!</strong> <?= $this->session->flashdata('success'); ?>
			</div>
<?php
		 	}
?>
<?php 
		if($this->session->flashdata('error'))
		{
?>		<div class="alert alert-danger alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  			<strong>Oops!</strong> <?= $this->session->flashdata('error'); ?>
			</div>
<?php
		 	}
?>
<br>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h3>Sign-In</h3>
				<form action="retrieveOneUser" method="post">
				  <div class="form-group">
				    <label for="email">Email Address:</label>
				    <input type="email" name="email" class="form-control" id="email" placeholder="First Name">
				  </div>
				  <div class="form-group">
				    <label for="password">Password:</label>
				    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-success pull-right">Sign In</button>
				</form>
				<a href="register">Don't have an account? Register today!</a>
			</div>
		</div>
	</div>

	<hr>

</body>
</html>

