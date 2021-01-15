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

    <title>Movies Page</title>

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
	
	<h1 align="center">
		Movies
	</h1>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				
			</div>
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#">Home</a>
				</li>
				<li class="inactive">
					<a href="message.php">Your Bookings</a>
				</li>
				<li class="dropdown pull-left">
					<li class="inactive" />
					 <a href="#" data-toggle="dropdown" class="dropdown-toggle">Languages<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						
						<li>
							<a href="telugu.php">Telugu</a>
						</li>
						<li>
							<a href="hindi.php">Hindi</a>
						</li>
						<li>
							<a href="english.php">English</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="homemovies.php">All Languages</a>
						</li>
					</ul>
				</li>
			</ul>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<h2><h4>
					BOOKINGS
					</h4>
					</h2>
					
					<h4>
					<ul id="navWrapper"> <!-- Top Nav -->
       <!-- 
    <li> 
  <h4>
      <a href="pageA.html"><h4>Time Slots</h4></a>
      <ul>
        <li><a href="pageA1.html"><h4>Morning Slots</h4></a></li> 
        <li><a href="pageA2.html"><h4>Afternoon Slots</h4></a></li>
        <li><a href="pageA1.html"><h4>Evening Slots</h4></a></li>
        <li><a href="pageA2.html"><h4>Night Slots</h4></a></li>
      </ul>
      </h4>
 -->
    </li> <!-- Menu A -->
    <li> <!-- Menu B -->
      <h4>Shows</h4></a>
      <ul>
        <li><a href="morningshows.php"><h4>Morning Shows</h4></a></li>
        <li><a href="afternoonshows.php"><h4>Afternoon Shows</h4></a></li>
        <li><a href="eveningshows.php"><h4>Evening Shows</h4></a></li>
        <li><a href="nightshows.php"><h4>Night Shows</h4></a></li>       
      </ul>
    </li> <!-- Menu B -->
  </ul> <!-- Top Nav -->
					
	</h4>
			
				</div>
				<div class="col-md-8">
					<div class="row">				
				<?php
				$rows = get_movie_list($con);
				foreach($rows as $movies) {
				?>
				
						<div class="col-md-4">
							<div class="thumbnail">
								<img alt="<?= $movies["name"]?>" src="<?=$movies["poster"] ?>" />
								<div class="caption">
									<h3>
										<?= $movies["name"] ?>
									</h3>
									<p>
										<?php echo "<br>Plot:"?>
										<?= $movies["plot"]?>
										<?php echo "<br>Ratings:"?>
										<?= $movies["ratings"]?>
									</p>
									<p>
		<a class="btn btn-primary" href="bookingdetails.php?movie_id=<?= $movies["movie_id"]?>">Book</a> <a class="btn" href="moviedetails.php?movie_id=<?= $movies["movie_id"]?>"> Reviews </a>
									</p>
								</div>
							</div>
						</div>
<?php } ?>					
					</div>
										
				
					
						
				
					</div>
				</div>

		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
