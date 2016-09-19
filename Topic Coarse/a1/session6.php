<?php 
	session_start();
		$_SESSION['username']="ji";
		echo "<strong>"." ".$_SESSION['username']."</strong>";
		header("location:checksession6.php");
		exit;


 ?>