<?php 
	require_once 'conn5.php';
		if(isset($_GET['id']))
			{
				$id=$_GET['id'];
				$query="DELETE FROM users WHERE id={$id}";
				$res=mysqli_query($con,$query);
					if($res)
						{
							header('location:deletion5.php');
						}else{
							echo "Error".mysqli_error($con);
						}
			}



 ?>