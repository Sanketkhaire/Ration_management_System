<?php
	//Start session
	if (session_status() == PHP_SESSION_NONE) {
      session_start();
   }
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		header("location: admin/index.php");
		exit();
	}
?>
