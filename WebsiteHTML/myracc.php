<!doctype html>
<html>
	<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Untitled Document</title>
	<link rel="stylesheet" href="page0.css">
	<link rel="stylesheet" href="css/model.css">

	<body>
	<body bgcolor="white">
	
	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="razerlap.php">Razer Laptops</a>
  		<a href="razermobile.php">Razer Mobiles</a>
  		<a href="razerkey.php">Razer Keyboards</a>
  		<a href="razerhead.php">Razer Headset</a>
  		<a href="razermouse.php">Razr Mouse</a>
  			<br><br>
  		<a href="page0.php">HOME</a>
  
	</div>

<div id="main">
  <table bgcolor=" #FFFFFF" class="ex1" align="center">
			<tr height="50">
				<td width="80%">
					<table>
						<td height="100%">
						<font color=" #000000" size="+6" style="stencil">Xiris Computer Technologies
						
				<td width="20%">
						<img src="razernew/gamescom-razer-logo.png" height="90" width="250">
					</table>
					<font color="#C9C9C9" size="2" style="calibry">
				</td>
			</tr>
			<tr height="30">
				<td width="80%">
					<ul>
  						
  						
   						<li class="dropdown">
    						<a href="javascript:void(0)" class="dropbtn">
    						<font color="#FFFFFF" size="3" style="calibry">
    						Contact & Help</a>
    						
    						<li class="dropdown">
    						<a href="javascript:void(0)" class="dropbtn">
    						<font color="#FFFFFF" size="3" style="calibry">
    						About Apleed</a>
    						
    						
     		 				
     		 				<li style="float:right"><a class="active" href="logaf.php"><font color="#FFFFFF" size="3" style="calibry">HOME</a></li></font>
    						
    						<li style="float:right"><a class="active" href="abof.php"><font color="#FFFFFF" size="3" style="calibry">About</a></li></font>
    						
  						</li>
					</ul>
				</td>
			</tr>
			<tr height="100">
				<td width="80%">
			
				<div class="tabb">
  					<buttonnn class="tablinkss" onclick="openCity(event, 'myacc')">My Account</buttonnn>
  					<buttonnn class="tablinkss" onclick="openCity(event, 'mess')">Messages</buttonnn>
  					<buttonnn class="tablinkss" onclick="openCity(event, 'noti')">Notifications</buttonnn>
  					<buttonnn class="tablinkss" onclick="openCity(event, 'news')">News</buttonnn>
				</div>

			<table bgcolor="#FFFFFF" align="center">
					

			<div id="myacc" class="tabcontentt">
  					<h1><font color=" #000000">My Account</h1>	
			</div>
				


			<div id="mess" class="tabcontentt">
  					<h1><font color=" #000000">Messages</h1>
  						<p>Paris is the capital of France.</font></p> 
			</div>
			<div id="noti" class="tabcontentt">
  					<h3><font color="#000000">Notifications</h3>
  						<p>Tokyo is the capital of Japan.</p>
			</div>
			<div id="news" class="tabcontentt">
  					<h3><font color="#000000">News</h3>
  						<p>Tokyo is the capital of Japan.</p>
			</div></table>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontentt");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinkss");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" activee", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " activee";
}
</script>
     
				</td>
			</tr>
		</table>		
	</body>
</html>


