<?php 
	session_start();
		$_SESSION['username']="hElLo Ji";
		echo "welcome<strong>".$_SESSION['username']."</strong>";
		header("location:checksession10.php");
		exit;


 ?>