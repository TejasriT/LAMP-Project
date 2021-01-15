<?php


ini_set('display_errors',1);
error_reporting(E_ALL);
include 'dbcon.php';	

?>

<style>
		
	body {
    background-image: url("images/last1.jpg");
    display: block;
    margin: auto;
    width: 100%;
	}
	
</style>
	
<title>Movie Details</title>
<meta charset="utf-8">
	<meta name = "viewport" content ="width=device-width,initial-scale=1"/>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
<body>
<?php
	
	//echo "User clicked on the movie :" . $_GET["movie_id"];
	$rows = get_movie_details($con,$_GET["movie_id"]);
	#var_dump($rows);
	$reviews = get_movie_reviews($con,$_GET["movie_id"]);
	#var_dump($reviews);
  ?>

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
			<h3 class="text-center text-primary">
				Movie Details
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
				<?php	foreach($reviews as $reviews1) { 	?>
				<p>
					<?php echo "Reviews:"?>
					<?=$reviews1["review"]?>
					<?php echo "<br>" ?>
				</p>
				<?php } ?>
			</div>
			
		</div>
		<div class="col-md-1">
		</div>
		
	</div>
</div>
</body>
</html>
