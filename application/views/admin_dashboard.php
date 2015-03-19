<?php 
	$this->load->view('partials/head');
?>
	<title>Admin Dashboard</title>
</head>
<body>
<?php 
	$this->load->view('partials/navbar');
?>
<br>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Hello <?= $this->session->userdata('username') ?> (<?= $this->session->userdata('user_level') ?>)</h3>
				<h4 class="inline">Manage Users</h4>
				<a href="new_user"><button type="submit" class="btn btn-info pull-right inline">Add New</button></a>
			</div>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<table class="table table-bordered">
		      <thead>
		        <tr>
		          <th>ID</th>
		          <th>Name</th>
		          <th>Email</th>
		          <th>Created At</th>
		          <th>User Level</th>
		          <th>Actions</th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td>1</td>
		          <td>Michael Choi</td>
		          <td>michael@village88.com</td>
		          <td>Dec. 24th 2015</td>
		          <td>admin</td>
		          <td>
		          	<a href="edit_user">edit</a> |
		          	<a href="#">remove</a>
		          </td>
		        </tr>
		      </tbody>
		    </table>
			</div>
		</div>
	</div>
</body>
</html>