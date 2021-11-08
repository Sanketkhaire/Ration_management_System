<?php
if(isset($_POST['Register'])){

//$a = $_POST['refNo'];
$u = $_POST['uname'];
$p = $_POST['pw'];
$n = $_POST['name'];
$t = 'customer';
$aa = $_POST['age'];
$c = $_POST['contact'];
$in = $_POST['income'];
// $nationality_nid= $_POST['nationality_nid'];
// $date =date('Y-m-d');
$color = 'White';
if($in < 15000){
	$color = 'Yellow';
}else if($in < 100000){
	$color = 'Orange';
}else{
	$color = 'White';
}

$qry1 = mysqli_query($link,"
	insert into accounts
	
	values(
	'',
		'$u',
		'$p',
		'$t'
	)
	");

$qry2 = "SELECT * FROM accounts WHERE username='$u' AND password='$p'";
$res = mysqli_query($link,$qry2);

$member = mysqli_fetch_assoc($res);
$sr = $member['sr'];
	
$qry3 = mysqli_query($link,"
	insert into rationcard
	
	values(
		'',
		'$n',
		'$color',
		'$sr'
	)
	");

$qry4 = "SELECT * FROM rationcard WHERE sr='$sr'";
$res = mysqli_query($link,$qry4);
	
$member = mysqli_fetch_assoc($res);
$id = $member['id'];

$qry5 = mysqli_query($link,"
	insert into customer
	
	values(
	'',
		'$n',
		'$aa',
		'$c',
		'$id'
	)
	");
	

			if($qry1){

				echo 'successfully registered... ';

				echo '<script type="text/javascript">

						var myVar=setInterval(function(){myTimer()},2000);

				function myTimer()
				{
					window.location="home.php";

				}
			</script>';
			}else {	echo mysqli_error($link);	}

	
	}
?>
<form method="Post">
<legend style="background-color:purple; width:800px; color:white; border-radius: 10px;">Register Card Holder here!</legend>
	<!-- <tr>
          <td><label>Refugee No:<label></td>
          <td ><input type="text" name="refNo" tabindex="2" required /></td>
        </tr> -->
		<tr>
          <td><label>Userame:<label></td>
          <td ><input type="text"  name="uname" tabindex="2" required /></td>
        </tr>
		<tr>
          <td><label>Password:<label></td>
          <td ><input type="password"  name="pw" tabindex="2" required /></td>
		</tr>
		<tr>
          <td><label>Card Holder Name:<label></td>
          <td ><input type="text"  name="name" tabindex="2" required /></td>
		</tr>
		<tr>
          <td><label>Age:<label></td>
          <td ><input type="text"  name="age" tabindex="2" required /></td>
        </tr>
		<tr>
          <td><label>Income:<label></td>
          <td ><input type="number"  name="income" tabindex="2" required /></td>
        </tr>
		<tr>
          <td><label>Contact:<label></td>
          <td ><input type="text"  name="contact" tabindex="2"  /></td>
        </tr>
		
		<tr>
          <td><input type="submit" style="background-color:green; width: 150px; color:white; border-radius: 10px;" name="Register" value="Register"/></td>
        </tr>
		
			</table>
</form>
