<?php 
	session_start();
		if(isset($_SESSION['username']))
			{
				echo "Welcome<strong>".$_SESSION['username']."</strong><a href='deletesession3.php'>Logout</a>";
			}else{
				echo"<a href='session3.php'>Login</a>";
			}
 ?>