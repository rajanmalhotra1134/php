<?php 
	require_once 'conn6.php';
		if(isset($_GET['id']))
			{
				$id=$_GET['id'];
				$query="DELETE FROM users WHERE id={$id}";
				$res=mysqli_query($con,$query);
					if($res)
						{
							header('location:deletion6.php');
							exit;
						}else{
							echo "Error".mysqli_error($con);
						}
			}



 ?>