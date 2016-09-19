<?php 
	if(isset($_POST['email']))
		{
			require_once 'conn7.php';
			$email=$_POST['email'];
			$password=$_POST['password'];
			$query="INSERT INTO users(email,password) VALUES('{$email}','{$password}')";
			$res=mysqli_query($con,$query);
				if($res)
					{
						echo "<h1>Inserted User</h1>";
					}else{
						echo "Error while Inserting User".mysqli_error($con);
					}
		}



 ?>