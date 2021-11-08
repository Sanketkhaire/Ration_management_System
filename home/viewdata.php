
<?php
	//Start session
	session_start();
	include("../config.php");
	
	//Unset the variables stored in session

    if(isset($_POST['Register'])){
        $u = $_POST['a'];
        $p = $_POST['b'];
        $t = 'customer';
        $m = $_POST['m'];
        $y = $_POST['y'];
        
        
        $qry1 = "SELECT * FROM accounts WHERE username='$u' AND password='$p'";
        $res = mysqli_query($link,$qry1);
            
        $member = mysqli_fetch_assoc($res);
        $sr = $member['sr'];

        $qry2 = "SELECT * FROM rationcard WHERE sr='$sr'";
        $res = mysqli_query($link,$qry2);
        
        $member = mysqli_fetch_assoc($res);
        $id = $member['id'];
        $color = $member['color'];
        $ch = $member['cardholder'];

        $qry3 = "SELECT * FROM purchase WHERE id='$id' AND month='$m' AND year='$y'";
        $res1 = mysqli_query($link,$qry3);

        $qry4 = "SELECT * FROM grains";
        $res = mysqli_query($link,$qry4);

        $wid = $rid = $sid = 0;
        $wp = $rp = $sp = 0;

        
        while($row = mysqli_fetch_assoc($res)) {
            if($row['name'] == 'wheat'){
                $wid = $row['gid'];
                $wp = $row[$color];
            }else if($row['name'] == 'rice'){
                $rid = $row['gid'];
                $rp = $row[$color];
            }else if($row['name'] == 'sugar'){
                $sid = $row['gid'];
                $sp = $row[$color];
            }

        }
        
        $rice = $wheat = $sugar = 0;
        $shop = "";
        while($row = mysqli_fetch_assoc($res1)) {
            if($row['gid'] == $wid){
                $wheat = $row['quantity'];
            }else if($row['gid'] == $rid){
                $rice = $row['quantity'];
            }else if($row['gid'] == $sid){
                $sugar = $row['quantity'];
            }
            $shop = $row['sid'];
        }

        $price = $rice * $rp + $wheat * $wp + $sugar * $sp;


    }
	

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
<?php print "<tr><td>"."Card-Holder : ".$ch."</td></tr>"?>
<?php print "<tr><td>"."Card-Color : ".$color."</td></tr>"?>
<?php print "<tr><td>"."Month and Year : ".$m." ".$y."</td></tr>"?>
<?php print "<tr><td>"."Wheat : ".$wheat." Kg</td></tr>"?>
<?php print "<tr><td>"."Rice : ".$rice." Kg</td></tr>"?>
<?php print "<tr><td>"."Sugar : ".$sugar." Kg</td></tr>"?>
<?php print "<tr><td>"."Price : Rs.".$price."</td></tr>"?>
</table>
</fieldset>
</div>
</div>
</body>

</html>