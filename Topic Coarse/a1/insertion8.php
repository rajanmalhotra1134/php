<?php 
	if(isset($_POST['email']))
		{
			require_once 'conn8.php';
			$email=$_POST['email'];
			$password=$_POST['password'];
			$query="INSERT INTO users(email,password) VALUES('{$email}','{$password}')";
			$res=mysqli_query($con,$query);
				if($res)
					{
						echo "user saved";
					}else{
						echo "error while saving user".mysqli_error($con);
					}
		}	



 ?>