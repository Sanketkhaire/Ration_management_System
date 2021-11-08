
<?php
	//Start session
	session_start();
	include("../config.php");
	
	//Unset the variables stored in session
	

	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <html lang="en">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Public Distribution system</title>
<link href="../styles/viewcss.css" rel="stylesheet" type="text/css" />
<link href="../styles/table.css" rel="stylesheet" type="text/css" />
<link href="../styles/layout.css" rel="stylesheet" type="text/css" />
<link href="../styles/layout1.css" rel="stylesheet" type="text/css" />
<link href="../styles/form.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header"> 
<p></p>
<h1><strong>PUBLIC DISTRIBUTION SYSTEM <font color="red"></font></strong></h1>
</div>
<div id="menu">
<?php include("menu.php");?>
</div>
<div id="wrap">
<div class="cont_details">
<legend>Welcome <?php echo $_SESSION['SESS_LAST_NAME'];?> to the system!
<fieldset>
<table align="center"> 
<form method="Post" action="viewdata.php">
<legend style="background-color:purple; width:800px; color:white; border-radius: 10px;">RETRIVE DATA</legend>
		<tr>
          <td><label>Username:<label></td>
          <td ><input type="text" autocomplete="off" name="a" tabindex="2" required /></td>
        </tr>
		<tr>
          <td><label>Password:<label></td>
          <td ><input type="password" autocomplete="off" name="b" tabindex="2" required /></td>
        </tr>
		<tr>
          <td><label>Month:<label></td>
          <td ><input type="text" autocomplete="off" name="m" tabindex="2" required /></td>
        </tr>
		<tr>
          <td><label>Year:<label></td>
          <td ><input type="number" autocomplete="off" name="y" tabindex="2" required /></td>
        </tr>
		<tr>
          <td><input type="submit" style="background-color:green; width: 150px; color:white; border-radius: 10px;" name="Register" value="Get Data"/></td>
        </tr>
</form>
</table>
</fieldset>
</div>
</div>
</body>

</html>