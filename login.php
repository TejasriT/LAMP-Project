<link class="cssdeck" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" class="cssdeck">

<title>Login Page</title>
<style>
	body {
    background-image: url("images/last1.jpg");
    display: block;
    margin: auto;
    width: 100%;
	}
	h3 {
    color: white;
}
</style>

<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include 'dbcon.php';
session_start();	
?>

<div class="" id="loginModal">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>Have an Account?</h3>
	</div>
	<div class="modal-body">
		<div class="well">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#login" data-toggle="tab">Login</a></li>
				<li><a href="#create" data-toggle="tab">Create Account</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active in" id="login">
					<form class="form-horizontal" action='' method="POST">
						<fieldset>
							<div id="legend">
								<legend class="">Login</legend>
							</div>    
							<div class="control-group">
								<!-- Username -->
								<label class="control-label"  for="email">Email Id</label>
								<div class="controls">
									<input type="text" id="username" name="email" placeholder="" class="input-xlarge">
								</div>
							</div>
							
							<div class="control-group">
								<!-- Password-->
								<label class="control-label" for="password">Password</label>
								<div class="controls">
									<input type="password" id="password" name="pwd" placeholder="" class="input-xlarge">
								</div>
							</div>
							
							
							<div class="control-group">
								<!-- Button -->
								<div class="controls">
									<button class="btn btn-success" type = "submit" name = "submit">Login</button>
								</div>
							</div>
						</fieldset>
					</form>                
				</div>
				<div class="tab-pane fade" id="create">
					<form id="tab" action = '' method = "POST" >
						<label>Username</label>
						<input type="text" value="" name = "name" class="input-xlarge" required>
						<label>Email Id</label>
						<input type="email" value="" name = "email" class="input-xlarge" required>
						<label>Mobile No</label>
						<input type="number" value="" name = "mobile_no" class="input-xlarge" required>
						<label>Date of Birth</label>
						<input type="date" value="" name = "dob" class="input-xlarge" required>
						<label>Password</label>
						<input type="password" name= "pwd" value="" class="input-xlarge" required>
						<label>Confirm Password</label>
						<input type="password" name="cpwd" value="" class="input-xlarge" required>
						
    					<div>
						<button class="btn btn-primary" name = "create">Create Account</button>						
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>


<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>

</form>
<?php

if(isset($_POST['submit'])) {
	 
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
#Login	
	 if($email!=''&&$pwd!='') {
	 	$res = get_login_details($con,$email,$pwd);
	    if($res) {
	    	//session_register("sessionusername");
			$_SESSION['email']=$email;
			header('location:movies.php');
	   	}
	   	else {
	   		echo '<script language="javascript">';
			echo 'alert("Entered username or password is incorrect")';
			echo '</script>';
	   	}
	 	}
	 	else {
	 		echo '<script language="javascript">';
			echo 'alert("Enter both username and password")';
			echo '</script>';
	 	}
	}
#Registration

if(isset($_POST['create'])) {
	$name = $_POST['name'];
	$email=$_POST['email'];
	$mobile_no=$_POST['mobile_no'];
	$dob=$_POST['dob'];
	$pwd=$_POST['pwd'];
	$cpwd=$_POST['cpwd'];
	if($name!=''&&$email!=''&&$mobile_no!=''&&$dob!=''&&$pwd!=''&&$cpwd!='') {
		/*if($pwd != $cpwd) {
	    			echo '<script language="javascript">';
	    			echo 'alert("Passwords doesnt match, please re-enter")';
	    			echo '</script>';
	    	}*/
	 	$res = post_user_details($con,$name,$email,$mobile_no,$dob,$pwd);
	    if($res) {
	    	
			$_SESSION['email']=$email;
			header('location:loginsucess.php');
		
	   	}
	   	else {
	   		echo '<script language="javascript">';
			echo 'alert("Your Account is not created, Try Again Later")';
			echo '</script>';
	   	}
	   	
	 	}

	}
?>
</body>
</html>
