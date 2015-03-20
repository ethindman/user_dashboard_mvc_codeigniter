<?php 
	$this->load->view('partials/head');
?>
	<title>Edit Profile</title>
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
  			<strong>Congratulations!</strong> <?= $this->session->flashdata('success'); ?>
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
			<div class="col-lg-12">
				<h3 class="inline">Hello <?= $this->session->userdata('first_name') ?>!</h3>
				<a href="dashboard"><button type="submit" class="btn btn-info pull-right inline">Return to Dashboard</button></a>
				<p>Let's edit your profile!</p>
			</div>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="box col-lg-6 col-md-12 col-sm-12">
				<h5>Edit Information</h5>
				<form action="updateUserProfile" method="post">
				  <div class="form-group">
				    <label for="email">Email Address:</label>
				    <input type="email" name="email" class="form-control" id="email" value="<?= $this->session->userdata('email');?>">
				  </div>
				  <div class="form-group">
				    <label for="first_name">First Name:</label>
				    <input type="text" name="first_name" class="form-control" id="first_name" value="<?= $this->session->userdata('first_name');?>">
				  </div>
				  <div class="form-group">
				    <label for="last_name">Last Name:</label>
				    <input type="text" name="last_name" class="form-control" id="last_name" value="<?= $this->session->userdata('last_name');?>">
				  </div>
				  <button type="submit" class="btn btn-success pull-right">Save</button>
				  <input type="hidden" name="id" value="<?= $this->session->userdata('user_id');?>">
				</form>
			</div>
			<div class="box col-lg-5 col-md-12 col-sm-12 pull-right">
				<h5>Change Password</h5>
				<form action="updatePassword" method="post">
					<div class="form-group">
				  	<label for="password">Password:</label>
				  	<input type="password" name="password" class="form-control" id="password" placeholder="Password">
					</div>
					<div class="form-group">
				 		<label for="confirm">Confirm Password:</label>
				  	<input type="password" name="confirm" class="form-control" id="confirm" placeholder="Retype Password">
					</div>
					<button type="submit" class="btn btn-success pull-right">Update Password</button>
					<input type="hidden" name="id" value="<?= $this->session->userdata('user_id');?>">
				</form>
			</div>			
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="box col-lg-12 col-md-12 col-sm-12">
				<h5>Edit Description</h5>
				<form action="updateDescription" method="post">
					<div class="form-group">
				  	<textarea class="form-control" rows="3" name="description"><?= $this->session->userdata('description');?></textarea>
					</div>
					<button type="submit" class="btn btn-success pull-right">Save</button>
					<input type="hidden" name="id" value="<?= $this->session->userdata('user_id');?>">
				</form>
			</div>
		</div>
	</div>
	<hr>
</body>
</html>

