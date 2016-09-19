<?php 
	session_start();
		if(isset($_SESSION['username']))
			{
				echo "Welcome<strong>".$_SESSION['username']."</strong><a href='deletesession2.php'>Logout</a>";
			}else{
				echo "<a href='session2.php'>Login</a>";
			}


 ?>