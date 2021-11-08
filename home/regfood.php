<?php
	//Start session
	include("../config.php");
	
	//Unset the variables stored in session
	
	
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Public Distribution management system</title>
<link href="../styles/layout.css" rel="stylesheet" type="text/css" />
<link href="../styles/form.css" rel="stylesheet" type="text/css" />

</head>
<body >
<div id="header"> 
<p></p>
<h1><strong>PUBLIC DISTRIBUTION SYSTEM<font color="red"></font></strong></h1>

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
    if(isset($_POST['Register'])){

$w = $_POST['w'];
$r = $_POST['r'];
$s = $_POST['s'];
$d = $_POST['d'];

$M = date('F');
$Y = date('Y');

$id = $_SESSION['ID'];

$qry = "SELECT * FROM shop WHERE sr='$d'";

$res = mysqli_query($link,$qry);

$member = mysqli_fetch_assoc($res);
$sid = $member['sid']; 
echo $id;
$qry2 = "SELECT * FROM grains";

$res2 = mysqli_query($link,$qry2);

$wgid = $rgid = $sgid = 0;

while($row = mysqli_fetch_assoc($res2)) {
	if($row['name'] == 'wheat'){
		$wgid = $row['gid'];
		mysqli_query($link,"insert into  purchase
		values(
			'$id',
			'$wgid',
			'$M',
			'$Y',
			'$w',
			'$sid'
		)");
	}else if($row['name'] == 'rice'){
		$rgid = $row['gid'];
		mysqli_query($link,"insert into  purchase
		values(
			'$id',
			'$rgid',
			'$M',
			'$Y',
			'$r',
			'$sid'
		)");
	}else if($row['name'] == 'sugar'){
		$sgid = $row['gid'];
		mysqli_query($link,"insert into purchase
		values(
			'$id',
			'$sgid',
			'$M',
			'$Y',
			'$s',
			'$sid'
		)");
	}

} 	
	}
?>
<form method="Post">
<legend style="background-color:purple; width:800px; color:white; border-radius: 10px;">Register Food here!</legend>

		<tr><?php echo "<td>RATION-CARD NUMBER : ".$_SESSION['ID']."<td>"; ?></tr>
		<tr><?php echo "<td>".date('F Y'."</td>"); ?></tr>
		</br>
		<tr>
          <td><label>Distributor Id:<label></td>
          <td ><input type="number" autocomplete="off" name="d" tabindex="2" required /></td>
        </tr>
		<tr>
          <td><label>Wheat:<label></td>
          <td ><input type="number" autocomplete="off" name="w" tabindex="2" required /></td>
        </tr>
		<tr>
          <td><label>Rice:<label></td>
          <td ><input type="number" autocomplete="off" name="r" tabindex="2" required /></td>
        </tr>
		<tr>
          <td><label>Sugar:<label></td>
          <td ><input type="number" autocomplete="off" name="s" tabindex="2" required /></td>
        </tr>

				  
		  
		  </td>
        </tr>
		<tr>
          <td></td>
          <td><input type="submit" style="background-color:green; width: 150px; color:white; border-radius: 10px;" name="Register" value="Register"/></td>
        </tr>
</fieldset>
	
				
				</table>
				
</form>
</div>
</div>
<!--############################################################################################################################################-->
<div id="footer"> 
<p>Copy right! <?php echo date('d-m-Y');?></p>




</div>
<!--##############################################################################################################################################-->

</body>
</html>
