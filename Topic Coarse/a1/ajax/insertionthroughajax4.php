<?php 
	if(isset($_GET['email']))
		{
			require_once '../conn4.php';
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
							echo "user Inserted";
						}else{
							echo "Error while inserting User".mysqli_error($con);
						}
		}




 ?>