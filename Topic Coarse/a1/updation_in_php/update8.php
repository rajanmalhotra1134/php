<?php 
	require_once '../conn8.php';
		if(isset($_POST['id']))
			{
				$id=$_POST['id'];
				$email=$_POST['email'];
				$password=$_POST['password'];
				$query="UPDATE users SET email='{$email}',password='{$password}' WHERE id='{$id}'";
				$res=mysqli_query($con,$query);
					if($res)
					{
						header('location:edit8.php');
						exit;
					}else{
						echo "error while updating user".mysqli_error($con);
					}
			}



 ?>