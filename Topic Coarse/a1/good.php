<script type="text/javascript">
		function checkEmail()
			{
				em=document.getElementById("email").value;
				atPos=em.indexOf('@');
				dotPos=em.lastIndexOf('.');

				if(atPos<1 || atPos+2 >dotPos || dotPos +2 >=em.length)
					{
						alert("email is wrong");
					}else{
						alert("email is correct");
					}
					checkPassword()
			}
		function checkPassword()
			{
				pw=document.getElementById("password").value;
				if(pw.length>10 || pw.length<4)
					{
						alert("password strength is small");
					}else{
						alert("password strength is good");
					}
			}


	</script>