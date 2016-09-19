<?php 
	session_start();
		if(isset($_SESSION['username']))
			{
				echo "WELCOME<strong>".$_SESSION['username']."</strong><a href='deletesession10.php'>Logout</a>";
			}else{
				echo "<a href='session10.php'>Login</a>";
			}
 ?>