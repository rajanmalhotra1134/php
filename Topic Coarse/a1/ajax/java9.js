function runajax()
	{
		var objajax=null;
		try{
			objajax=new XMLHttpRequest();
		}
		catch(e1)
		{
			try{
				objajax=new ActiveXObject("Msxml12.XMLHTTP");
			}
			catch(e2)
			{
				try{
					objajax=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch(e3)
				{
					alert("Your browser does not support ajax");
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
					if(obj.status==200 &&obj.readyState==4)
						{
							document.getElementById("fill").innerHTML=obj.responseText;
						}
				}
				obj.open("GET","echo9.php",true);
				obj.send();
		}
		function insertUser()
		// alert('done');
		{
			em=document.getElementById("email").value;
			pw=document.getElementById("password").value;
			var obj=runajax();
			obj.onreadystatechange=function()
				{
					if(obj.status==200 && obj.readyState==4)
						{
							alert(obj.responseText);
							document.getElementById("email").value="";
							document.getElementById("password").value="";
						}
				}
				obj.open("GET","insertionthroughajax9.php?email="+em+"&password="+pw,true);
				obj.send();
		}