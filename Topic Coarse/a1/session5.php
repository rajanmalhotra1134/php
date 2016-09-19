<?php 
	session_start();
		$_SESSION['username']="Aman ji";
		echo "welcome<strong>"." ".$_SESSION['username']."</strong>";
		header("location:checksession5.php");
		exit; 


 ?>