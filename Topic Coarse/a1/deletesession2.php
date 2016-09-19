<?php 
	session_start();
	unset($_SESSION['username']);
	session_destroy();
	header("location:checksession2.php");
	exit;


 ?>