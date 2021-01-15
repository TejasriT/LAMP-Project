<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
	<title>Confirm Booking</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<link rel="stylesheet" href="css/bootstrap.css"/>
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
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">



<form class="form-horizontal" action="validate.php" method="POST" >
<fieldset>

<!-- Form Name -->
<legend align = "center">Confirm Booking</legend>

<!-- Text input-->
<div class="form-group">
  <div class="col-md-4">
  <label>Screen:</label><input id="show_id" name="show_id" value=<?= $_GET["show_id"] ?> placeholder="placeholder" class="form-control input-md"
  value="<?= $_GET["seat_type"]?>" readonly> 
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <div class="col-md-4">
  <label>Price:</label><input id="price" name="price" value=<?= $_GET["price"] ?> placeholder="placeholder" class="form-control input-md"
  value="<?= $_GET["seat_type"]?>" readonly> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <div class="col-md-4">
  <label>Seat type:</label><input id="seat_type" name="seat_type" placeholder="placeholder" class="form-control input-md"
  value="<?= $_GET["seat_type"]?>" readonly> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">

  <div class="col-md-4" align = "center">
  <label>no.of seats:</label><input id="no_of_seats" name="no_of_seats" type="text" placeholder="" class="form-control input-md" hidden>
  </div>
</div>

<!-- Text input-->
<div class="form-group" align = "center">

  <div class="col-md-4">
  <label>User email:</label><input align = "center" id="email" name="email" type="text" placeholder="" class="form-control input-md" hidden>
  </div>
</div>


<!-- Button -->
<div class="form-group" align = "center">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>













				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
