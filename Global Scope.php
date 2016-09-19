<html>
	<body>
		<?php
			$name = "hello everybody i am working";

			function myTest()
			{
				echo "<h1>hello guys : $name</h1>";/*($name will not work here because)*/   	/*we can call variable only  calling by name of funcion not within the function*/ 
			}

			myTest();
			echo "<h1>$name</h1>" /*($name will work here) because varaiable is always called by function name not in function */
		?>
	</body>
</html>