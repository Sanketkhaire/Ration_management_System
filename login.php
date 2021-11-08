<?php
	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysqli_connect('localhost','root',"");
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	var_dump(get_object_vars($link));
	
	//Select database
	$db = mysqli_select_db($link,'sample');
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	// function clean($str) {
	// 	$str = @trim($str);
	// 	// if(get_magic_quotes_gpc()) {
	// 	// 	$str = stripslashes($str);
	// 	// }
	// 	return mysql_real_escape_string($str);
	// }
	
	//Sanitize the POST values
	$login = $_POST['user'];
	$password = $_POST['pass'];
	
	
	
	//Create query
	$qry="SELECT * FROM accounts WHERE username='$login' AND password='$password'";
	$result=mysqli_query($link,$qry);
	if(!$result){echo mysqli_error();}
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['sr'];
			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			$_SESSION['SESS_LAST_NAME'] = $member['type'];
			//$_SESSION['SESS_PRO_PIC'] = $member['profImage'];
			session_write_close();
			header("Location: home/home.php");
			exit();
		}else  {
			//Login failed
			isset($_SESSION['error']);
			
			
			$_SESSION['error'] = "Incorrect username or password";
			
			header("location: index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>