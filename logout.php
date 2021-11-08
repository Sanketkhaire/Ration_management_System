<?php 
session_start();
 if (! isset ( $_SESSION ['auth'] ) || $_SESSION ['auth'] == false) {
	 session_cache_expire();
	 session_destroy();
	 session_unset();
    header ( "Location: index.php" );
    exit ();
}
?>