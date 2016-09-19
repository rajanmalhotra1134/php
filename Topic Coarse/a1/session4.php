<?php 
	session_start();
		$_SESSION['username']="TO MY SWEET HOME";
		echo "welcome <strong>"." ".$_SESSION['username']."</strong>";
		header("location:checksession4.php");
		exit;

 ?>