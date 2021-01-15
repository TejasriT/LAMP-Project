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

    <title>Bookings</title>

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


	
	<?php
	$rows = get_movie_details($con,$_GET["movie_id"]);
  	?>
  	 
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
			<h3 class="text-center text-primary">
				Booking Details
			</h3>
		</div>
	<?php foreach($rows as $movies)  { 	
	?>
		
	</div>
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-2">
			<img width = 100% alt="<?=$movies["name"]?>" src="<?=$movies["poster"]?>" />
		</div>
		<div class="col-md-8">
			<div class="jumbotron">
				<h2>
					<?= $movies["name"] ?>
				</h2> 
				<p>
					<?php echo "<br>Plot:"?>
					<?= $movies["plot"] ?>
					
					<?php echo "<br>Ratings:"?> 
					<?= $movies["ratings"] ?>
					<b>
					<?php for($i=1;$i<=$movies["ratings"];$i++) {
							echo "*";
						  } ?>
					</b>
					<?php } ?>
				</p>	
			</div>
			
		</div>
		<div class="col-md-1">
		</div>
		
	</div>
</div>
			
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<div class="row">
					
						<div class="col-md-4">
							<div class="thumbnail">
								<div class="caption">
									
										<?php 
					$screens = get_screens($con, $_GET["movie_id"], 0);
					echo "<h3> ".$screens[0]["showdate"] ."</h3>";
					foreach ($screens as $screen){
						echo "<h3>Screen : ". $screen["screen_id"] . "</h3>";
						$showtimings = get_show_timings($con, $_GET["movie_id"], $screen["screen_id"], $screens[0]["showdate"]); 
						foreach ($showtimings as $showtiming){
							echo "<h4> Slot Start Time: ". $showtiming["slot_start"]. "</h4>";
							$seats = get_seats($con, $_GET["movie_id"], $screen["screen_id"], $showtiming["slot_start"],$screens[0]["showdate"]);
							foreach ($seats as $seat){
								?>
								<a href = confirmbooking.php?show_id=<?= $showtiming["show_id"] ?>&seat_type=<?=$seat["seat_type"]?>&price=<?=$seat["price"]?>>
								<?php
								echo "<br>" .$seat["seat_type"]. "(" .$seat["capacity"] . ") Rs." . $seat["price"];
								echo "</a>";
							}
						}
					}
				?>
										
									</p>
									
								</div>
							</div>
							
						</div>
						
						<div class="col-md-4">
							<div class="thumbnail">
								<div class="caption">
									
										<?php 
					$screens = get_screens($con, $_GET["movie_id"], 1);
					echo "<h3> ".$screens[0]["showdate"] ."</h3>";
					foreach ($screens as $screen){
						echo "<h3>Screen : ". $screen["screen_id"] . "</h3>";
						$showtimings = get_show_timings($con, $_GET["movie_id"], $screen["screen_id"], $screens[0]["showdate"]); 
						foreach ($showtimings as $showtiming){
							echo "<h4> Slot Start Time: ". $showtiming["slot_start"]. "</h4>";
							$seats = get_seats($con, $_GET["movie_id"], $screen["screen_id"], $showtiming["slot_start"],$screens[0]["showdate"]);
							foreach ($seats as $seat){
								?>
								<a href = confirmbooking.php?show_id=<?= $showtiming["show_id"] ?>&seat_type=<?=$seat["seat_type"]?>&price=<?=$seat["price"]?>>
								<?php
								echo "<br>" .$seat["seat_type"]. "(" .$seat["capacity"] . ") Rs." . $seat["price"];
								echo "</a>";
							}
						}
					}
				?>
										
									</p>
									
								</div>
							</div>
							
						</div>
						
						<div class="col-md-4">
							<div class="thumbnail">
								<div class="caption">
									
										<?php 
					$screens = get_screens($con, $_GET["movie_id"], 2);
					echo "<h3> ".$screens[0]["showdate"] ."</h3>";
					foreach ($screens as $screen){
						echo "<h3>Screen : ". $screen["screen_id"] . "</h3>";
						$showtimings = get_show_timings($con, $_GET["movie_id"], $screen["screen_id"], $screens[0]["showdate"]); 
						foreach ($showtimings as $showtiming){
							echo "<h4> Slot Start Time: ". $showtiming["slot_start"]. "</h4>";
							$seats = get_seats($con, $_GET["movie_id"], $screen["screen_id"], $showtiming["slot_start"],$screens[0]["showdate"]);
							foreach ($seats as $seat){
								?>
								<a href = confirmbooking.php?show_id=<?= $showtiming["show_id"] ?>&seat_type=<?=$seat["seat_type"]?>&price=<?=$seat["price"]?>>
								<?php
								echo "<br>" .$seat["seat_type"]. "(" .$seat["capacity"] . ") Rs." . $seat["price"];
								echo "</a>";
							}
						}
					}
				?>
										
									</p>
									
								</div>
							</div>
							
						</div>
						
					</div>
				</div>
				
				<div class="col-md-2">
				</div>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>
