<?php

session_start();

ini_set('display_errors',1);
error_reporting(E_ALL);
include 'dbcon.php';
//include 'login.php';


	
	//$email=$_SESSION['email'];	

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User Bookings Page</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.css" rel="stylesheet">
    <script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<style>
	
	
	body {
    background-image: url("images/last1.jpg");
    display: block;
    margin: auto;
    width: 100%;
	}
	
	</style>
  </head>
  <body>
  
  <nav class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Movie Sparks</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
						</li>
						
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Movie Buzz<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								
								<li>
									<a href="ratings.php">Movie Ratings</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="aboutus.php">Help</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="aboutus.php">About Us</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="logout.php"><b>Logout</b></a>
						</li>
					</ul>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> 
						<button type="submit" name="search" class="btn btn-default">
							Submit
						</button>
					</form>
		
				</div>
				
			</nav>
  
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center text-info">
				<marquee width = 20%>Your Bookings Record </marquee>
			</h3>
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
				<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<div class="form-group" align = "center">

  				<label>Email Id</label>
						<input type="email" value="" name = "email" class="input-xlarge" required>
  				<button id="submit" name="submit" class="btn btn-primary">Submit</button>
  				</div>
  				</form>
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>
									Booking Id
								</th>
								<th>
									User_email
								</th>
								<th>
									Show_ID
								</th>
								<th>
									Seats Booked
								</th>
								<th>
									Date
								</th>
								<th>
									Seat Type
								</th>
								<th>
									Total Cost 
								</th>
							</tr>
						</thead>
						<tbody>
						<?php
				if(isset($_POST['submit'])) {
					$email=$_POST["email"];
					//$_SESSION['email']=$email;
				
					$rows = userbooking($con,$_POST["email"]);
					foreach($rows as $userbooking) {
					?>
							<tr class="success">
								<td>
									<?= $userbooking["booking_id"]?>
								</td>
								<td>
									<?= $userbooking["user_email"]?>
								</td>
								<td>
									<?= $userbooking["show_id"]?>
								</td>
								<td>
									<?= $userbooking["no_of_seats"]?>
								</td>
								<td>
									<?= $userbooking["date"]?>
								</td>
								<td>
									<?= $userbooking["seat_type"]?>
								</td>
								<td>
									<?= $userbooking["total_cost"]?>
								</td>
							</tr>
					<?php } } ?>
							
						</tbody>
					</table>
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
