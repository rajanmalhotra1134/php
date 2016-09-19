<?php 
	if(isset($_POST['email']))
		{
			require_once 'conn10.php';
			require_once 'good.php';
			$email=$_POST['email'];
			$password=$_POST['password'];
			$query="INSERT INTO users(email,password) VALUES('{$email}','{$password}')";
			$res=mysqli_query($con,$query);
				if($res)
					{
						echo "<h3>User Saved</h3>";
					}else{
						echo "<h3>Error While Saving User</h3>".mysqli_error($con);
					}
		}



 ?>