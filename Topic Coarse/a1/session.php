<?php 
	session_start();
		$_SESSION['username']="DLF MALL";
		echo "WELCOME<strong>"." ".$_SESSION['username']."</strong>";
		header("location:checksession.php");
		exit;
 ?>