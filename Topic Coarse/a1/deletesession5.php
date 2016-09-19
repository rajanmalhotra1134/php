<?php 
	session_start();
	unset($_SESSION['username']);
	session_destroy();
	header("location:checksession5.php");
	exit;


 ?>