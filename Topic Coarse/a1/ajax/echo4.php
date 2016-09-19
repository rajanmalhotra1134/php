<?php 
	require_once '../conn4.php';
		if(!$con)
			{
				echo "Error";
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