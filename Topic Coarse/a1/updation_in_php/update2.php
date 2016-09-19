<?php 
	require_once '../conn2.php';
		if(isset($_POST['id']))
			{
				$id=$_POST['id'];
				$email=$_POST['email'];
				$password=$_POST['password'];
				$query= "UPDATE users set email='{$email}',password='{$password}' WHERE id='{$id}'";
	// echo "done";exit;
				$res=mysqli_query($con,$query);
					if($res)
						{
							header('location:edit2.php');
							exit;
						}else{
							echo "Error while updating User".mysqli_error($con);
						}
			}



 ?>