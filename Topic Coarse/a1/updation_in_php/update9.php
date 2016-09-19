<?php 
	require_once '../conn9.php';
		if(isset($_POST['id']))
			{
				$id=$_POST['id'];
				$email=$_POST['email'];
				$password=$_POST['password'];
				$query="UPDATE users SET email='{$email}',password='{$password}' WHERE id='{$id}'";
				$res=mysqli_query($con,$query);
					if($res)
						{
							header('location:edit9.php');
							exit;
						}else{
							echo "ERROR while updating User".mysqli_error($con);
						}

			}



 ?>