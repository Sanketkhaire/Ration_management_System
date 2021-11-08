<?php	include("auth.php"); ?>


<head>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: green;
	
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: black;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: red;}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>

  <!--end of banner-->
</head>
<?php 
$pos=$_SESSION['SESS_LAST_NAME'];
if($pos=='field officer' or $pos == 'distributor') {
	?>
	 <ul>
  <li><a href="home.php">Home</a></li>
    
    <?php 
    if($pos=='field officer') {
	?>
<li>
 <a href="viewusers.php" class="dropbtn">ViewUsers</a>
 </li>
 <?php   }else if($pos=='distributor'){?>
   <li> <a href="viewcustomers.php" class="dropbtn">Viewcustomers</a></li>
   <?php } ?>
<li>
<a href="viewtakenfd.php">View Ration Purchase</a>
</li>

  <li><a href="../logout.php">Logout</a><li>
</ul>
<?php
}
if($pos=='admin') {
	?>
	 <ul>
  <li><a href="home.php">Home</a></li>
  <!--<li><a href="addusers.php">Users</a></li>-->
  <li><a href="viewusers.php">ViewUsers</a></li>
  <li><a href="../logout.php">Logout</a><li>
</ul>
<?php
}
?>
  