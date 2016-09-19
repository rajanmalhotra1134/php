<?php 
	session_start();
		if(isset($_SESSION['username']))
			{
				echo "WELCOME<strong>".$_SESSION['username']."</strong><a href='deletesession6.php'>Logout</a>";
			}else{
				echo "<a href='session6.php'>Login</a>";
			}

 ?>