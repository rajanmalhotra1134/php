<?php 
	if(isset($_POST['name']))
		{
			echo $_POST['name'];
		}
			$url=urlencode("aman&singh");
 ?>
 	<a href="urlencode.php?name=<?php echo $url; ?>">
 		<?php echo htmlspecialchars("click here");?>
 	</a>