<?php 
	if(isset($_GET['email']))
			// echo "okay";exit;
		{
			require_once '../conn2.php';
				if(!$con)
					{
						echo "ERROR";
					}
			$email=$_GET['email'];
			$password=$_GET['password'];
			$query="INSERT INTO users(email,password) VALUES('{$email}','{$password}')";
			$res=mysqli_query($con,$query);
				if($res)
					{
						echo "User insert ho gya hai g";
					}else{
						echo "kuch to kadbad hai".mysqli_error($con);
					}
		}



 ?>