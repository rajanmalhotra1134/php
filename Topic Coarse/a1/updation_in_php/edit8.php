<?php 
	require_once '../conn8.php';
		$query="SELECT id,email,password FROM users";
		$res=mysqli_query($con,$query);
			if($res)
				{
					while($row=mysqli_fetch_assoc($res))
						{
							echo $row['id']."".$row['email']."".$row['password']."<a href='ed8.php?id={$row['id']}&email={$row['email']}&password={$row['password']}'>EdiT</a></br>";
						}
				}





 ?>