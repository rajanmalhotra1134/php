<?php 
	session_start();
		$_SESSION['username']="AMANDEEP SINGH JI";
		echo "welcome<strong>"." ".$_SESSION['username']."</strong>";
		header("location:checksession7.php");
		exit;

 ?>