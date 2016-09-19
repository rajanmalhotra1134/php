<?php 
	if(isset($_GET['email']))
		{
			require_once '../conn6.php';
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
							echo "user Inserted";
						}else{
							echo "error while inserted User".mysqli_error($con);
						}
		}





 ?>