<?php 
	session_start();
		if(isset($_SESSION['username']))
			{
				echo "WELCOME<strong>".$_SESSION['username']."</strong><a href='deletesession8.php'>Logout</a>";
			}else{
				echo "<a href='session8.php'>Login</a>";
			}
 ?>