<?php 
	session_start();
		if(isset($_SESSION['username']))
			{
				echo "WELCOME<strong>".$_SESSION['username']."</strong><a href='deletesession7.php'>Logout</a>";
			}else{
				echo "<a href='session7.php'>Login</a>";
			}
?>