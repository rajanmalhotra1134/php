<?php 
	require_once 'conn.php';
		if(isset($_GET))
			{
				$id=$_GET['id'];
				$query="DELETE FROM users WHERE id={$id}";
				$res=mysqli_query($con,$query);
					if($res)
						{
							header('location:deletion.php');
							exit;
						}else{
							echo "Error".mysqli_error($con);
						}
			}




 ?>