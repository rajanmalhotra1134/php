<?php 
	session_start();
		if(isset($_SESSION['username']))
			{
				echo "WELCOME<strong>".$_SESSION['username']."</strong><a href='deletesession4.php'>Logout</a>";
			}else{
				echo "<a href='session4.php'>Login</a>";
			}
?>