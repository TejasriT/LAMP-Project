<?php
session_start();

ini_set('display_errors',1);
error_reporting(E_ALL);
include 'dbcon.php';	

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Evening Shows</title>

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
		</div>
	</div>




<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center text-success">
				<marquee width=20%>Evening Shows </marquee>
			</h3>
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>
									Movie Name
								</th>
								<th>
									Slot Start Time
								</th>
								<th>
									Slot End Time
								</th>
								<th>
									Proceed
								</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$rows = eveningshows($con);
						foreach($rows as $movies) {
						?>
							<tr class="active">
								
								<td>
									<?= $movies["name"] ?>
								</td>
								<td>
									<?= $movies["slot_start"] ?>
								</td>
								<td>
									<?= $movies["slot_end"] ?>
								</td>
								<td>
									<a class="btn btn-primary" href="bookingdetails.php?movie_id=<?= $movies["movie_id"]?>">Book</a>
								</td>
							</tr>
							<?php } ?>
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
