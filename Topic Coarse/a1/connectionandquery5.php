<?php 
	require_once 'conn5.php';
	$query="SELECT * FROM users";
	$res=mysqli_query($con,$query);
	if($res)
		{
			while($row=mysqli_fetch_assoc($res))
				{
					echo $row['id']."".$row['email']."".$row['password']."<br>";
				}
		}


 ?>