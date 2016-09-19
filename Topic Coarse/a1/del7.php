<?php 
	require_once 'conn7.php';
		if(isset($_GET[id]))
			{
				$id=$_GET['id'];
				$query="DELETE FROM users WHERE id={$id}";
				$res=mysqli_query($con,$query);
					if($res)
						{
							header('location:deletion7.php');
							exit;
						}else{
							echo "ERROR".mysqli_error($con);
						}
			}




 ?>