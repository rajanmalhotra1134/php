<?php 
	if(isset($_POST['email']))
		{
			require_once 'conn4.php';
			$email=$_POST['email'];
			$password=$_POST['password'];
			$query="INSERT INTO users(email,password) VALUES('{$email}','{$password}')";
			$res=mysqli_query($con,$query);
				if($res)
					{
						echo "User Saved";
					}else{
						echo "Error while inserting user".mysqli_error($con);
					}
		}




 ?>