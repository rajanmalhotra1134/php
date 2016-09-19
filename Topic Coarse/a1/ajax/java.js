function runajax()
	{
		var objajax=null;
		try{
			objajax=new XMLHttpRequest();
			// alert("one");
		}
		catch(e1)
		/*alert('this one')*/
		{
			try{
				objajax=new ActiveXObject("Msxml12.XMLHTTP");
			// alert("two");
			}
			catch(e2)
				{
					try{
						objajax=new ActiveXObject("Microsoft.XMLHTTP");
						// alert("three");
					}
					catch(e3)
						{
							alert("your browser does not support ajax");
						}
				}
		}
		return objajax;
	}
	function getData()
	{
		var obj=runajax();
		obj.onreadystatechange=function()
		{
			if(obj.status==200 && obj.readyState==4)
			{
				document.getElementById("fill").innerHTML=obj.responseText;
			}
		}
		obj.open("Get","echo.php",true);
		obj.send();
	}
	function insertUser()
	{
		email=document.getElementById("email").value;
		password=document.getElementById("password").value;
		var obj=runajax();
		obj.onreadystatechange=function()
			{
				if(obj.status==200 && obj.readyState==4)
	// alert('done');
					{
						alert(obj.responseText);
						document.getElementById("email").value="";
						document.getElementById("password").value="";
					}

			}
			obj.open("GET","insertionthroughajax.php?email="+ email + "&password=" + password,true);
			obj.send();
	}