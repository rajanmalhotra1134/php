<?php 
	session_start();
	unset($_SESSION['username']);
	session_destroy();
	header("location:checksession7.php");
	exit;



 ?>