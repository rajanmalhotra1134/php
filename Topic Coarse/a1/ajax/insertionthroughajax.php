<?php 
	if(isset($_GET['email']))
		{
			require_once '../conn.php';
				{
					if(!$con)
					{
						echo "ERROR";
					}
				}
			$email=$_GET['email'];
			$password=$_GET['password'];
			$query="INSERT INTO users(email,password) VALUES('{$email}','{$password}')";
			$res=mysqli_query($con,$query);
				if($res)
					{
						echo "USer Inserted";
					}else{
						echo "Error while inserting User".mysqli_error($con);
					}
		}



 ?>