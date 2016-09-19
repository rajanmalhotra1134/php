<?php 
	if(isset($_POST['name']))
		{
			echo $_POST['name'];
		}
		$url=urlencode("aman's&house");
 ?>
 	<a href='urlencode8.php?name=<?php echo $url;?>'>
 		<?php echo htmlspecialchars("click here");?>
 	</a>