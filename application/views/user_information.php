<?php 
	$this->load->view('partials/head');
?>
	<title>User Info</title>
</head>
<body>
<?php 
	$this->load->view('partials/navbar');
?>
<br>
  <div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="inline"><?= $user['user_name']; ?></h3>
<?php 	if($this->session->userdata('user_id') == $user['id'])
				{
?>				<form action="edit_profile" method="post">
          <input type="hidden" name="id" value="<?= $this->session->userdata('user_id') ?>">
          <input class="btn btn-info" type="submit" value="Edit Profile">
  	      </form>
<?php 	}
?>
			</div>
		</div>
	</div>
	<br>      
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
				<table class="table table" style="text-align: left">
					<tbody>
						<tr>
							<td>Registered at:</td>
							<td><?= $user['created_at']; ?></td>
						</tr>
						<tr>
							<td>User ID:</td>
							<td>#<?= $user['id']; ?></td>
						</tr>
						<tr>
							<td>Email Address:</td>
							<td><?= $user['email']; ?></td>
						</tr>
						<tr>
							<td>Description:</td>
							<td><?= $user['description']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h4>Leave a message for <?= $user['first_name']; ?></h4>
				<form action="#" method="post">
					<div class="form-group">
				  	<textarea class="form-control" rows="3" name="description" placeholder="Write a message..."></textarea>
					</div>
					<button type="submit" class="btn btn-success pull-right">Post</button>
				</form>
			</div>
		</div>
	</div>
	<br>

<!-- MESSAGES START -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h5 class="inline">Mark Anthony wrote:</h5>
				<p class="inline pull-right">7 hours ago</p>
				<div class="well">
					<p>Low hanging fruit market technology. Ownership gen-z deployment metrics infographic stealth www.discoverartisans.com technology scrum project partnership pitch. Leverage assets freemium release beta hypotheses strategy accelerator. Beta series A financing founders startup market value proposition analytics agile development supply chain monetization seed money launch party funding.</p>
				</div>
			</div>
			<div class="col-lg-11 col-md-12 col-sm-12 pull-right">
				<h5 class="inline">Julius Ceasar wrote:</h5>
				<p class="inline pull-right">23 minutes ago</p>
				<div class="well">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A sed magni, in. In accusantium totam atque eaque earum ad possimus vitae doloremque ipsa. Libero, asperiores obcaecati ullam cumque nostrum minima.</p>
				</div>
				<form action="#" method="post">
					<div class="form-group">
				  	<textarea class="form-control" rows="3" name="description" placeholder="Write a comment..."></textarea>
					</div>
					<button type="submit" class="btn btn-success pull-right">Post</button>
				</form>
			</div>
		</div>
	</div>
<!-- COMMENTS START -->
	<hr>
</body>
</html>

