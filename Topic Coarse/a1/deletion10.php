<?php 
	require_once 'conn10.php';
	$query='SELECT id,email,password FROM users';
	$res=mysqli_query($con,$query);
		if($res)
			{
				while($row=mysqli_fetch_assoc($res))
					{
						echo $row['id']."".$row['email']."".$row['password']."<a href=del10.php?id={$row['id']}>DELETE</a></br>";
					}
			}




 ?>