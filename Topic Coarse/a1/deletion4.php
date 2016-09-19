<?php 
	require_once 'conn4.php';
	$query="SELECT id,email,password FROM users";
	$res=mysqli_query($con,$query);
		if($res)
			{
				while($row=mysqli_fetch_assoc($res))
					{
						echo $row['id']."".$row['email']."".$row['password']."<a href='del4.php?id={$row['id']}'>DELETE</a></br>";
					}
			}

 ?>