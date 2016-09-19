<?php 
	require_once '../conn7.php';
		if(isset($_POST['id']))
			{
				$id=$_POST['id'];
				$email=$_POST['email'];
				$password=$_POST['password'];
				$query="UPDATE users SET email='{$email}',password='{$password}' WHERE id='{$id}'";
				$res=mysqli_query($con,$query);
					if($res)
						{
							header('location:edit7.php');
							exit;
						}else{
							echo "Error while updating".mysqli_error($con);
						}
			}




 ?>