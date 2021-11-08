<?php 
$link = mysqli_connect('localhost','root',"");
if(!$link) {
    die('Failed to connect to server: ' . mysql_error());
}

//Select database
$db = mysqli_select_db($link,'sample');
if(!$db) {
    die("Unable to select database");
}
?>