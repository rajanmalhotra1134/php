<?php 
	if(isset($_GET['email']))
		{
			require_once '../conn3.php';
				if(!$con)
					{
						echo "ERROR";
					}
			$email=$_GET['email'];
			$password=$_GET['password'];
			$query="INSERT INTO users(email,password) VALUES('{$email}','{$password}')";
			$res=mysqli_query($con,$query);
				if($res)
					{
						echo "User Inserted";
					}else{
						echo "Error while inserted User".mysqli_error($con);
					}
		}



 ?>