<?php 
	if(isset($_POST['name']))
		{
			echo $_POST['name'];
		}
		$url=urlencode("checking&testing&welocme");
 ?>
 <a href='urlencode10.php?name=<?php echo $url;?>'>
 	<?php echo htmlspecialchars("click here");?>
 </a>