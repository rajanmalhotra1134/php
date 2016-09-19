<?php 
	require_once '../conn6.php';
		if($isset($_POST['id']))
			{
				$id=$_POST['id'];
				$email=$_POST['email'];
				$password=$_POST['password'];
				$query="SELECT users SET email='{$email}',password='{$password}' WHERE id='{$id}'";
				$res=mysqli_query($con,$query);
					if($res)
						{
							header('location:edit6.php');
							exit;
						}else{
							echo "Error while updating user".mysqli_error($con);
						}
			}



 ?>