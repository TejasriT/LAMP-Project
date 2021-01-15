

<?php

	$con = mysqli_connect("localhost","root","root");

	if (mysqli_connect_errno()) {
		echo "Error in connecting";
	}
	
	mysqli_select_db($con,"multiplex");
	
	
	function get_movie_list($con) {
	
		$res = mysqli_query($con, "select * from movies");
	
		if(mysqli_connect_errno()) {
			echo "Error connecting mysql";
		}
	
		$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
	
		/*while($rows=mysqli_fetch_array($res))
		{
		     echo "<br>". $rows["name"];
	 	}*/

		return $rows;
	}
	
	function post_user_details($con,$name,$email,$mobile_no,$dob,$password) {
		$res = mysqli_query($con,"insert into users(name,email,mobile_no,dob,password) VALUES ('" .$name."', '".$email."', '".$mobile_no."','".$dob."','".$password."')");
		
		if(mysqli_connect_errno()) {
			echo "Error in connecting mysql";
		}
		return true;
	}
	
	function language_telugu($con) {
		$res = mysqli_query($con,"select * from movies where language = 'Telugu'");
		
		if(mysqli_connect_errno()) {
			echo "Error in connecting mysql";
		}
		$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $rows;
	}
	
	function language_hindi($con) {
		$res = mysqli_query($con,"select * from movies where language = 'Hindi'");
		
		if(mysqli_connect_errno()) {
			echo "Error in connecting mysql";
		}
		$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $rows;
	}
	
	function userbooking($con,$email) {
		$res = mysqli_query($con,"select * from bookings where user_email = '".$email."'");
		
		if(mysqli_connect_errno()) {
			echo "Error in connecting mysql";
		}
		$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $rows;
	}
	
	function language_english($con) {
		$res = mysqli_query($con,"select * from movies where language = 'English'");
		
		if(mysqli_connect_errno()) {
			echo "Error in connecting mysql";
		}
		$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $rows;
	}
	
	function morningshows($con) {
		$res = mysqli_query($con,"select s.slot_start,s.slot_end,m.name,m.movie_id from shows s,movies m where s.movie_id = m.movie_id having s.slot_start between '08:00:00' and '11:59:59'");
		
		if(mysqli_connect_errno()) {
			echo "Error in connecting mysql";
		}
		$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $rows;
	}
	
	function afternoonshows($con) {
		$res = mysqli_query($con,"select s.slot_start,s.slot_end,m.name,m.movie_id from shows s,movies m where s.movie_id = m.movie_id having s.slot_start between '12:00:00' and '15:59:59'");
		
		if(mysqli_connect_errno()) {
			echo "Error in connecting mysql";
		}
		$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $rows;
	}
	
	function eveningshows($con) {
		$res = mysqli_query($con,"select s.slot_start,s.slot_end,m.name,m.movie_id from shows s,movies m where s.movie_id = m.movie_id having s.slot_start between '16:00:00' and '19:59:59'");
		
		if(mysqli_connect_errno()) {
			echo "Error in connecting mysql";
		}
		$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $rows;
	}
	
	function nightshows($con) {
		$res = mysqli_query($con,"select s.slot_start,s.slot_end,m.name,m.movie_id from shows s,movies m where s.movie_id = m.movie_id having s.slot_start between '20:00:00' and '23:59:59'");
		
		if(mysqli_connect_errno()) {
			echo "Error in connecting mysql";
		}
		$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $rows;
	}
	function logout($con,$email) {
		$res = mysqli_query($con,"SELECT email FROM users WHERE email='".$email."'");
		
		if(mysqli_connect_errno()) {
			echo "Error in connecting mysql";
		}
		$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $rows;
	}
	
	function get_login_details($con,$email,$pwd) {
		$res = mysqli_query($con,"select email,password from users where email='". $email ."' and password='". $pwd ."'");
		
		if(mysqli_connect_errno()) {
			echo "Error in connecting mysql";
		}
		$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $rows;
	}
	
	function get_movie_details($con,$movie_id) {
		$res = mysqli_query($con,"select * from movies where movie_id =" . $movie_id);
		
		if(mysqli_connect_errno()) {
			echo "Error in connecting mysql";
		}
		$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $rows;
		
	}
	
	function get_movie_reviews($con,$movie_id) {
		$res = mysqli_query($con,"select * from reviews where movie_id =" . $movie_id);
		
		if(mysqli_connect_errno()) {
			echo "Error in connecting mysql";
		}
		$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $rows;
		
	}
	
	function get_ratings($con) {
		$res = mysqli_query($con,"select name,ratings from movies order by ratings desc;");
		
		if(mysqli_connect_errno()) {
			echo "Error in connecting mysql";
		}
		$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $rows;
	}

	
	function get_screens($con,$movie_id,$day) {
		$res = mysqli_query($con,"select distinct(screen_id), DATE_ADD(CURDATE(),INTERVAL $day day) as showdate from shows where movie_id =$movie_id  and date = DATE_ADD(CURDATE(), INTERVAL $day day)");
		if(mysqli_connect_errno()) {
			echo "Error in connecting mysql";
		}
		$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $rows;
	}
	
	function get_show_timings($con,$movie_id,$screen_id,$date) {
		$res = mysqli_query($con,"select * from shows where movie_id = $movie_id and screen_id = $screen_id and date = '" . $date . "'");
		
		if(mysqli_connect_errno()) {
			echo "Error in connecting mysql";
		}
		$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $rows;
	}
	
	function get_seats($con,$movie_id,$screen_id,$slot_start,$showdate) {
	$res = mysqli_query($con,"select price,capacity,seat_type from shows s,screen_seatings ss where s.screen_id = ss.screen_id and s.screen_id 				= $screen_id and s.date = '" . $showdate . "' and s.slot_start = '" . $slot_start . "' and s.movie_id = $movie_id");
	if(mysqli_connect_errno()) {
			echo "Error in connecting mysql";
		}
		$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $rows;
	}
	
	function create_ticket($con, $show_id, $seat_type, $no_of_seats, $price, $user_id){
	$sql = mysqli_query($con,"INSERT INTO bookings values(null, '".$user_id."', $show_id, $no_of_seats, CURDATE(), '".$seat_type."', ".$no_of_seats * $price . ")");
	echo $sql;


	/*if (mysqli_connect_errno()) {
       	 echo "Error connecting to mysql";
	}
	
	$rows = mysqli_fetch_all($sql, MYSQLI_ASSOC);
	return $rows;*/
	
	
	$res = mysqli_query($con, "select * from bookings where user_email = '" . $user_id . "' order by date desc" );

	if (mysqli_connect_errno()) {
       	 echo "Error connecting to mysql";
	}

	$rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $rows;

}
	
	
	
	
	
	
	
	
	
	
		
	
?>
