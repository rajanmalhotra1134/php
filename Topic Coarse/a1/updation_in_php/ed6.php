<?php 
	if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			$email=$_GET['email'];
			$password=$_GET['password'];
		}
?>
<html>
<head>
	<title>Updation6</title>
</head>
<body>
	<form action='update6.php' method="POST">
		<input type="hidden" name="id" value="<?php echo $id;?>"/></br>
		Enter Email:-<input type="text" name="email" value="<?php echo $email;?>"/></br>
		Enter Password:-<input type="password" name="password" value="<?php echo $password;?>"/></br>
		<input type="submit" name="submit" value="Update User"/>
	</form>
</body>
</html>