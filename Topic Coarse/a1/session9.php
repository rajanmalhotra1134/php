<?php 
	session_start();
		$_SESSION['username']="aman singh";
		echo "<strong>".$_SESSION['username']."</strong>";
		header("location:checksession9.php");
		exit;


 ?>