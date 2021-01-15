<?php


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

    <title>English Page</title>

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
	
	
    <div class="container-fluid">
	<div class="row">
		
			<nav class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Movies Sparks</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
						</li>
						<li>
							<a href="#">Music</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Movie Buzz<strong class="caret"></strong></a>
							<ul class="dropdown-menu"
								<li>
									<a href="#">Movie Reviews</a>
								</li>
								<li>
									<a href="#">Movie Ratings</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">About Us</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Help</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-center" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> 
						<button type="submit" class="btn btn-default">
							Submit
						</button>
					</form>
		
				</div>
				
			</nav>
		</div>
	</div>
	
				</div>
				
				<div class="col-md-12">
					<div class="row">
					<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<div class="row">				
				<?php
				$rows = language_english($con);
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
				

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
