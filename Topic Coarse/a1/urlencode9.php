<?php 
	if(isset($_POST['name']))
		{
			echo $_POST['name'];
		}
		$url=urlencode("hey&hello");
 ?>
 <a href='urlencode9.php?name=<?php echo $url;?>'>
 	<?php echo htmlspecialchars("click here");?>
 </a>