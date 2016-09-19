<?php 
	session_start();
		if(isset($_SESSION['username']))
			{
				echo "WELCOME<strong>".$_SESSION['username']."</strong><a href='deletesession9.php'>Logout</a>";
			}else{
				echo "<a href='session9.php'>Login</a>";
			}
 ?>