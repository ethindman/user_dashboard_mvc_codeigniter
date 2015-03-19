<?php 
	$this->load->view('partials/head');
?>
	<title>User Dashboard</title>
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
				<h4 class="inline">All Users</h4>
			</div>
			<div class="col-lg-12">
				<table class="table table-bordered">
		      <thead>
		        <tr>
		          <th>ID</th>
		          <th>Name</th>
		          <th>Email</th>
		          <th>Created At</th>
		          <th>User Level</th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td>1</td>
		          <td>Michael Choi</td>
		          <td>michael@village88.com</td>
		          <td>Dec. 24th 2015</td>
		          <td>admin</td>
		        </tr>
		      </tbody>
		    </table>
			</div>
		</div>
	</div>
</body>
</html>