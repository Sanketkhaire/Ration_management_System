<?php
	//Start session
	session_start();
	include("../config.php");
	
	//Unset the variables stored in session
	
	
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Public Distribution system</title>
<link href="../styles/layout.css" rel="stylesheet" type="text/css" />
<link href="../styles/form.css" rel="stylesheet" type="text/css" />

</head>
<body >
<div id="header"> 
<p></p>
<h1><strong>Public Distribution system <font color="red"></font></strong></h1>

</div>
<div id="menu">
<?php include("menu.php");?>
</div>
<div id="wrap">

    	<div class="cont_details">

                <legend>Welcome <?php echo $_SESSION['SESS_LAST_NAME'];?> to the system!
			<a href="../logout.php">Logout</a>
         <fieldset>	     
		 <table align="center">
		 <?php
		 $pos=$_SESSION['SESS_LAST_NAME'];
if($pos=='field officer') {
	include 'newuser.php';
    
	}
else if($pos == 'admin'){
			
include ("addusers.php");			

}else{
	include('userforregister.php');
}
			?>
			</fieldset>

</div>

</div>

<!--############################################################################################################################################-->
<div id="footer"> 
<p>Copy right! <?php echo date('d-m-Y');?></p>




</div>
<!--##############################################################################################################################################-->

</body>
</html>
