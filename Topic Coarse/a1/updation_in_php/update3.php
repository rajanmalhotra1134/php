<?php 
	require_once '../conn3.php';
	if(isset($_POST['id']))
		{
			$id=$_POST['id'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$query="UPDATE users SET email='{$email}',password='{$password}' WHERE id='{$id}'";
			$res=mysqli_query($con,$query);
// echo "yaha tak thik hai g";exit;
				if($res)
					{
						header('location:edit3.php');
						exit;
					}else{
						echo "Error while Updating User".mysqli_error($con);
					}
		}





 ?>