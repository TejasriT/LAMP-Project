
<?php


ini_set('display_errors',1);
error_reporting(E_ALL);
include 'dbcon.php';	

?>
<html>
<style>
		
	body {
    background-image: url("images/last1.jpg");
    display: block;
    margin: auto;
    width: 100%;
	}
	
</style>
	
<title>Login Success</title>

<meta charset="utf-8">
	<meta name = "viewport" content ="width=device-width,initial-scale=1"/>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<h3 class="text-center text-primary">
						Account Creation is Successful
					</h3>
					<div class="jumbotron well" align = "center">
						<h2>
							Congrats!!!!!
						</h2>
						<p>
							Your Account with this App is Created.
							Please login and book tickets.
						</p>
						<p>
							<a class="btn btn-primary btn-xlarge" href="login.php"><b>Login Here</b></a>
						</p>
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
