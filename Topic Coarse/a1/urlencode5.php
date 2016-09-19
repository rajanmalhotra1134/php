<?php 
	if(isset($_POST['name']))
		{
			echo $_POST['name'];
		}
		$url=urlencode("testing&checking");
?>
	<a href='urlencode5.php?name=<?php echo $url;?>'>
		<?php echo htmlspecialchars("click here");?>
	</a>