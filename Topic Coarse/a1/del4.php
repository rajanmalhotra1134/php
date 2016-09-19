<?php 
	require_once 'conn4.php';
		if(isset($_GET['id']))
			{
				$id=$_GET['id'];
				$query= "DELETE FROM users where id={$id}";
				$res=mysqli_query($con,$query);
					if($res)
						{
							header('location:deletion4.php');
							exit;
						}else{
							echo "Error".mysqli_error($con);
						}
			}



 ?>