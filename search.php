<?php
session_start();

ini_set('display_errors',1);
error_reporting(E_ALL);
include 'dbcon.php';	

?>


<html>
	
	<title>Search Page</title>
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
<?php


	$query = $_POST['query']; 
	// gets value sent over search form
	
	$min_length = 3;
	// you can set minimum length of the query if you want
	
	if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
		
		$query = htmlspecialchars($query); 
		// changes characters used in html to their equivalents, for example: < to &gt;
		
		//$query = mysql_real_escape_string($query);
		// makes sure nobody uses SQL injection
		
		$raw_results = mysqli_query($con,"SELECT * FROM movies
			WHERE (`name` LIKE '%".$query."%') OR (`ratings` LIKE '%".$query."%')") or die(mysqli_error($con));
			
		// * means that it selects all fields, you can also write: `id`, `title`, `text`
		// articles is the name of our table
		
		// '%$query%' is what we're looking for, % means anything, for example if $query is Hello
		// it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
		// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
		
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
			while($results = mysqli_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			
				echo "<p><h3>".$results['ratings']."</h3></p>";
				// posts results gotten from database(title and text) you can also show id ($results['id'])
			}
			
		}
		else{ // if there is no matching rows do following
			echo "No results";
		}
		
	}
	else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
	}
?>
</body>
</html>
