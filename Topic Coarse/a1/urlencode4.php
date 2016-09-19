<?php 
	if(isset($_POST['name']))
		{
			echo $_POST['name'];
		}
		$url=urlencode("hi&hello");
?>
<a href='urlencode4.php?name=<?php echo $url;?>'>
	<?php echo htmlspecialchars("click here");?>
</a>