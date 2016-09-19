<?php 
	session_start();
		if(isset($_SESSION['username']))
			{
				echo "WELCOME".$_SESSION['username']."<a href='deletesession.php'>Logout</a>";
			}else{
				echo "<a href='session.php'>Login";
			}
?>