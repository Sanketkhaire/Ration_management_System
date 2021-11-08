<?php
	//Start session
	// session_start();
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
<style>
table, td, th {
  border: 1px solid black;
  padding:10px
}

th{
    font-weight: bolder;
    font-family: sans-serif;
    font-style: normal;
}
td{
    font-weight: 500
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
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
<table align="center" style="border-collapse: collapse;">
<tr>
    <th>Ration-Card ID</th>
    <th>Card-Holder</th>
    <th>Card-Color</th>
</tr>
		 <?php

$query = "SELECT * FROM rationcard";

$res = mysqli_query($link,$query);

while($row = mysqli_fetch_assoc($res)) {
    echo "<tr><td>".$row['id']."</td><td>".$row['cardholder']."</td><td>".$row['color']."</td></tr>";
}

?>
			
</table>
</fieldset>
</div>
</div>
</body>

</html>
