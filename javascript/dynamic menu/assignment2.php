<html>
<head>
<title>WELCOME TO THE WEBONISE</title>

	<script type="text/javascript">

		function abc()
		{
			window.addEventListener("contextmenu", function (ab)
				{
					ab.preventDefault();
					
				
				    var dynDiv = document.createElement("div");
					dynDiv.id = "divDyna";
					dynDiv.style.height = "200px";
					dynDiv.style.width = "200px";

					dynDiv.style.display="block";
					dynDiv.style.position="absolute";
					dynDiv.style.left=ab.pageX-40;
					dynDiv.style.top=ab.pageY-15;
					dynDiv.style.backgroundColor = 'gray';
					document.getElementById("myDive").innerHTML='';
					document.getElementById("myDive").appendChild(dynDiv);
					
					
				},false)


			var xmlhttp;
				if(window.XMLHttpRequest)
				{
					xmlhttp=new XMLHttpRequest();
				}
				else
				{
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
					xmlhttp.open("GET","server.php",true);
					xmlhttp.send();
		

					xmlhttp.onreadystatechange=function()
					  {
						  if (xmlhttp.readyState==4 && xmlhttp.status==200)
						    {
						  	  document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
						
						    }
					  } 
				
		}
			

	</script>
</head>

	<body onload="abc()">
			<dive id="myDive" syle="none" ></dive>


		
	</body>


</html>
