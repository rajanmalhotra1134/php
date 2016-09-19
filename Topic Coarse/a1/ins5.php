
<html>
<head>
	<title>Insertion5</title>
	<?php 
	if(isset($_POST['email']))
		{
			require_once 'conn5.php';
			$email=$_POST['email'];
			$password=$_POST['password'];
			$query="INSERT INTO users(email,password) VALUES('{$email}','{$password}')";
			$res=mysqli_query($con,$query);
				if($res)
					{
						echo "Inserted User";
					}else{
						echo "error while making error".mysqli_error($con);
					}
		}

 ?>
</head>
<body>
	<form action='ins5.php' method="POST">
		Enter Email:-<input type='text' name="email"></br>
		Enter Password:-<input type='password' name="password"></br>
		<input type="submit" value="submit">
	</form>
</body>
</html>