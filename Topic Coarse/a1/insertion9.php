<?php 
	if(isset($_POST['email']))
		{
			require_once 'conn9.php';
			$email=$_POST['email'];
			$password=$_POST['password'];
			$query="INSERT INTO users(email,password) VALUES('{$email}','{$password}')";
			$res=mysqli_query($con,$query);
				if($res)
					{
						echo "<h5>User Saved</h5>";
					}else{
						echo "<h5>Error while Saving User</h5>";
					}
		}




 ?>