<?php 
	if(isset($_GET['email']))
		{
			require_once '../conn10.php';
				if(!$con)
					{
						echo "error";
					}
			$email=$_GET['email'];
			$password=$_GET['password'];
			$query="INSERT INTO users(email,password) VALUES('{$email}','{$password}')";
			$res=mysqli_query($con,$query);
				if($res)
					{
						echo "user inserted";
					}else{
						echo "Error while saving user".mysqli_error($con);
					}
		}







 ?>