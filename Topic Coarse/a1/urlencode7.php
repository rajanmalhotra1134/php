<?php 
	if(isset($_POST['name']))
		{
			echo $_POST['name'];
		}
		$url=urlencode("kaapor&sons");
 ?>
 	<a href='urlencode7.php?name=<?php echo $url;?>'>
 		<?php echo htmlspecialchars("click here");?>
 	</a>