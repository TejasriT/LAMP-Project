<?php
session_start();

ini_set('display_errors',1);
error_reporting(E_ALL);
include 'dbcon.php';	

?>


<html>
	
	<title>Home Page</title>
	<meta charset="utf-8">
	<meta name = "viewport" content ="width=device-width,initial-scale=1"/>
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
	img {
    display: block;
    margin: auto;
    width: 70%;
	}
	
	</style>
	
	<body>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		
			<div class="row">
			
				<div class="col-md-12">
					
					<nav class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" align="center" href="#">MOVIE SPARKS</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="homemovies.php">Movies</a>
						</li>
						
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								
								<li>
									<a href="homemovies.php">Movies List</a>
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
					</ul>
					<ul class="nav navbar-nav navbar-left-right">
						<li>
							<a href="login.php"><b>Login / Register</b></a>
						</li>
						
					</ul>
					
					<form class="navbar-form navbar-right" role="search" action="search.php" method="POST">
						<div class="form-group">
							<input type="text" name = "query" class="form-control" />
						</div> 
						<button type="submit" class="btn btn-default">
							Search
						</button>
					</form>
					
				</div>
				
			</nav>
		
					<h3 class="text-center text-primary">
				<marquee direction="right" width = 40% scrollamount="10">Movie Sparks............A world of Movies</marquee>
			</h3>
					<div class="carousel slide" id="carousel-530077">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#carousel-530077">
							</li>
							<li data-slide-to="1" data-target="#carousel-530077">
							</li>
							<li data-slide-to="2" data-target="#carousel-530077">
							</li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img alt="Carousel Bootstrap First" src="images/jagga.jpg" />
								<div class="carousel-caption">
									<h3>
										Jagga Jasoos
									</h3>
									<p>
										A movie which makes you go into dream world. A must watch movie of this month.
										Grab the tickets ASAP!!!
									</p>
								</div>
							</div>
							<div class="item">
							<img alt="Carousel Bootstrap Second" src="images/carosel6.jpg" />
								<div class="carousel-caption">
									<h3>
										Ninnu Kori
									</h3>
									<p>
										A Sweet romantic movie.
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="Carousel Bootstrap Third" src="images/carosel3.jpg" />
								<div class="carousel-caption">
									<h3>
										Mom
									<h3>
									<p>
										Thriller with high end drama.
									</p>
								</div>
							</div>
						</div> <a class="left carousel-control" href="#carousel-530077" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-530077" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail First" src="images/carsel3.jpg" />
						<div class="caption">
							<h3>
								Movie with Popcorn
							</h3>
							<p>
								Mouth watering food is waiting for you at the theatre. Visit the nearest theatre.
							</p>
							<p>
								<a class="btn btn-primary" href="food.php">Proceed</a> 
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail Second" src="images/carosel4.jpg" />
						<div class="caption">
							<h3>
								Its Movie Time
							</h3>
							<p>
								Enjoy the movie with your dearest and make memories.
							</p>
							<p>
								<a class="btn btn-primary" href="homemovies.php">Proceed</a> 
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail Third" src="images/mvetkt.jpg" />
						<div class="caption">
							<h3>
								Pick me!!! Ticket
							</h3>
							<p>
								Book tickets online and grab goodies...!!!
							<p>
								<a class="btn btn-primary" href="login.php">Proceed</a> 
							</p>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
	</div>
</div>
	</body>

</html>
