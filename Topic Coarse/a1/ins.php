<?php 
	if(isset($_POST['email']))
	{
		$con=mysqli_connect("localhost","root","","testing");
		$email= $_POST['email'];
	// echo "yaha tak thik hai g";exit;
		$password= $_POST['password'];
		$query= "INSERT INTO users (email,password) VALUES ('{$email}','{$password}')";
		$res=mysqli_query($con,$query);
			if($res)
				{
					echo "User Saved";
				}else{
					echo "Error while saving user".mysqli_error($con);
				}

	}else{
		echo "variable is not set";
	}
 ?>