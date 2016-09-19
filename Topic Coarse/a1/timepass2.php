<?php 
	$to='amandeepsinghjii@gmail.com';
	$subject='Hello';
	$body="This is a test";
	$headers="From:webmaster@my.domain.com\r\n 
	Organization:MyOrg Inc.\r\nX-Mailer:PHP";
		if(mail($to,$subject,$body,$headers))
			{
				echo "Your message was Sent.";
			}else{
				die("error:Mail delivery error");
			}




 ?>