<?php 
	session_start();
		$_SESSION['username']="Aman's House";
			echo "WELCOME<strong>"." ".$_SESSION['username']."</strong>";
			header("location:checksession2.php");
			exit;
?>