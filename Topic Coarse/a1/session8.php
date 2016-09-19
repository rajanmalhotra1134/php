<?php 
	session_start();
		$_SESSION['username']="singh sahb";
		echo "WeLcOmE<strong>".$_SESSION['username']."</strong>";
		header("location:checksession8.php");
		exit;


 ?>