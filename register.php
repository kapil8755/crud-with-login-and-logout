<?php

include("db.php");
include("insert.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

</head>

<body>
	<div class="container contact">
		<div class="row">
			<div class="col-md-3">
				<div class="contact-info">
					<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
					<h2>Register Now</h2>
					<h4> Welcome To My Website</h4>
				</div>
			</div>
			<div class="col-md-9">
				<div class="contact-form">
					<form action="one.php" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2" for="fname">First Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="lname">Last Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Email:</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="comment">Password:</label>
							<div class="col-sm-10">

								<input type="password" class="form-control" placeholder="Enter password" name="pwd">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default" name="submit">Submit</button>
							</div>
						</div>
				</div>
			</div>
			</form>
		</div>
	</div>
</body>

</html>