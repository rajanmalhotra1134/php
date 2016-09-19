<?php 
	if(isset($_POST['name']))
		{
			echo $_POST['name'];
		}
		$url=urlencode("checking&testing");
 ?>
 	<a href='urlencode6.php?name=<?php echo $url;?>'>
 		<?php echo htmlspecialchars("click here");?>
 	</a>