<?php 
	session_start();
		$_SESSION['username']="AmAn's HoUsE";
		echo "WELCOME<strong>"." ".$_SESSION['username']."</strong>";
		header("location:checksession3.php");
		exit;

 ?>