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
	<title>Updation2</title>
</head>
<body>
	<form action='update2.php' method="POST">
		<input type="hidden" name="id" value="<?php echo $id;?>">
		Enter Email:-<input type="text" name="email" value="<?php echo $email;?>"/></br>
		Enter Password:-<input type="password" name="password" value="<?php echo $password;?>"/></br>
		<input type="submit" name="submit" value="Update User"/>
	</form>
</body>
</html>