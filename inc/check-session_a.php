<?php
session_start(); // ******* this code mesti paling atas sekali //this script is to check session to verify user login ****
	if(!isset($_SESSION['id_no'])){ //if session NOT set
		//not logged in
		//redirect to login form
		
		header ("location: login_a.php");
		
	}
?>

