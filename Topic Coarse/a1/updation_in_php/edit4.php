<?php 
	require_once '../conn4.php';
		$query="SELECT id,email,password FROM users";
		$res=mysqli_query($con,$query);
			if($res)
				{
					while($row=mysqli_fetch_assoc($res))
						{
							echo $row['id']."".$row['email']."".$row['password']."<a href=ed4.php?id={$row['id']}&email={$row['email']}&password={$row['password']}>EdiT</a></br>";
						}
				}



 ?>