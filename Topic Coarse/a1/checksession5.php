<?php 
	session_start();
		if(isset($_SESSION['username']))
			{
				echo "WELCOME<strong>".$_SESSION['username']."</strong><a href='deletesession5.php'>Logout</a>";
			}else{
				echo "<a href='session5.php'>Login</a>";
			}



 ?>