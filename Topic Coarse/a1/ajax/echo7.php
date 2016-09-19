<?php 
	require_once '../conn7.php';
		if(!$con)
			{
				echo "error";
			}
		$query="SELECT id,email,password FROM users";
		$res=mysqli_query($con,$query);
			if($res)
				{
					while($row=mysqli_fetch_assoc($res))
						{
							echo $row['id']."".$row['email']."".$row['password']."</br>";
						}
				}




 ?>