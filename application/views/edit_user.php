<?php 
	$this->load->view('partials/head');
?>
	<title>Edit User</title>
</head>
<body>
<?php 
	$this->load->view('partials/navbar');
?>
<br>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="inline">Edit user #[user_id]</h3>
				<a href="showDashboard"><button type="submit" class="btn btn-info pull-right inline">Return to Dashboard</button></a>
			</div>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="box col-lg-6 col-md-12 col-sm-12">
				<h5>Edit Information</h5>
				<form action="#" method="post">
				  <div class="form-group">
				    <label for="email">Email Address:</label>
				    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address">
				  </div>
				  <div class="form-group">
				    <label for="first_name">First Name:</label>
				    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
				  </div>
				  <div class="form-group">
				    <label for="last_name">Last Name:</label>
				    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
				  </div>
				  <div class="form-group">
				    <label for="user_level">User Level:</label>
				    <select name="user_level" class="form-control">
				  		<option value="Normal">Normal</option>
				  		<option value="Admin">Admin</option>
				  	</select>
				  </div>
				  <button type="submit" class="btn btn-success pull-right">Save</button>
				</form>
			</div>
			<div class="box col-lg-5 col-md-12 col-sm-12 pull-right">
				<h5>Change Password</h5>
				<form action="#" method="post">
				  <div class="form-group">
				    <label for="password">Password:</label>
				    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
				  </div>
				  <div class="form-group">
				    <label for="confirm">Confirm Password:</label>
				    <input type="password" name="confirm" class="form-control" id="confirm" placeholder="Retype Password">
				  </div>
				  <button type="submit" class="btn btn-success pull-right">Update Password</button>
				</form>
			</div>
		</div>
	</div>
	<hr>
</body>
</html>

