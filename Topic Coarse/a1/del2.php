<?php 
	require_once 'conn2.php';
		if(isset($_GET['id']))
			{
				$id=$_GET['id'];
				$query= 'DELETE from users WHERE id =$id';
				$res= mysqli_query($con,$query);
					if($res)
						{
							header('location:deletion2.php');
			// echo "yaha tak thik hai g";exit;
							exit;
						}else{
							"Error".mysqli_error($con);
						}

			}



 ?>