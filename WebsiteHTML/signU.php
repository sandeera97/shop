<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<title></title>
	
	<link rel="stylesheet" href="signUp.css">
	<link rel="stylesheet" href="page0.css">
	
	<link rel="icon" type="image/gif/png" href="Images/icon.png">
	</head>

	<body>
	
	<table   background="razernew/369696-Razer_Inc.-logo-748x421.jpg" class="ex1" align="center">
			<tr height="50">
				<td width="80%">
					<table  background="razernew/369696-Razer_Inc.-logo-748x421d.jpg">
						<td height="100%">
						<font color="#FFFFFF" size="+6" style="calibri"> &nbsp;Xiris Computer Technologies 
						
				<td width="20%">
						<img src="razernew/gamescom-razer-logo.png" height="90" width="250">
					</table>
					<font color="#C9C9C9" size="2" style="calibry">
				</td>
			</tr>
			
			<tr height="40">
				<td width="80%">
					
					<form>
  					<input type="text" name="search" placeholder="Search..">
					</form>
					
					
				</td>
			</tr>
		</table>
	
	
		<table class="ex1">
			<tr height="622">
				<td width="100%">
					<table class="ex1">
						<tr height="621">
							
							<td width="30%">
								<p><font face="arial" size="3"><b>If you are already a member:</b></font></p>
								<a class="active" href="log.php"><font face="arial" size="5"><b>Log In</b></font></a><br><br>
     						
     							
							<form class="modal-content" action="/action_page.php">
    							<div class="container">
    							
      							<h1>Sign Up</h1>
      							<p>Please fill in this form to create an account.</p>
      							<hr>
      							<label><b>Email</b></label>
      							<input type="text" id="email" placeholder="Enter Email" name="email" required>

      							<label><b>Password</b></label>
      							<input type="password" id="psw" placeholder="Enter Password" name="psw" required>

      							<label><b>Repeat Password</b></label>
      							<input type="password" id="psw-repeat" placeholder="Repeat Password" name="psw-repeat" required>
      							
      
      							<label>
        						<input type="checkbox" checked="checked" style="margin-bottom:15px"> Remember me
      							</label>
      							
      							<div class="clearfix">
        							<a class="active" href="page0.php"><button type="button" class="cancelbtn">Cancel</button></a>
        							
        							<button type="button" class="signupbtn" id="myBtnn">Sign Up</button>
        							<div id="myModall" class="modall">
        							
									
  									<!-- Modal content -->
  									<div class="modall-contentt">
    									<div class="modall-headerr">
      										 <span class="closee">&times;</span>
      										<h3>Xiris Computers</h3>
    									</div>
   	 									<div class="modall-bodyy">
      										<p><font size="2" face="arial">Thank you for Sing Up with us. Now you can use your Logging Details for Sign In.</font></p>
      										<p><font size="2" face="arial">GET YOUR RAZER</font></p>
      										<p><font size="2" face="arial">Press OK to Continue.</font></p>
      										
    									</div>
    									<div class="modall-footerr">
      										<a href="logaf.php" class="okbtn"><button type="button">OK</button></a>
    									</div>
  									</div>
									</div>
     								<script>
										// Get the modal
										var modal = document.getElementById('myModall');

										// Get the button that opens the modal
										var btn = document.getElementById("myBtnn");

										// Get the <span> element that closes the modal
										var span = document.getElementsByClassName("closee")[0];

										// When the user clicks the button, open the modal 
										btn.onclick = function() 
										{
											
											var x = document.getElementById("email").value;
											var atpos = x.indexOf("@");
    										var dotpos = x.lastIndexOf(".");
											
											if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
												alert("Not a valid e-mail address");
											}
											else
											{
												if ((document.getElementById("psw").value.length > 7)){
												if (document.getElementById("psw-repeat").value == document.getElementById("psw").value)
												{
													modal.style.display = "block";
												}
												else
												{
													alert("Passwords doesn't match.");
												}
												}
												else
													{
														alert("Password length should be greater than 7 characters.");
													}
    										}
											
    										
										}

										// When the user clicks on <span> (x), close the modal
										span.onclick = function() 
										{
    										modal.style.display = "none";
											
										}

										// When the user clicks anywhere outside of the modal, close it
										window.onclick = function(event) 
										{
    										if (event.target == modal) 
											{
        										modal.style.display = "none";
    										}
										}
									</script>
      							</div>
    						</div>
  							</form>	
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<hr width="100%">
			<table class="ex1" align="right">
				<tr height="80">
					<td width="70%">
						<center><font size="2" color=" #000000" face="arial">Copyright © 2017-2018 Xiris Computer Technologies All Rights Reserved. Accessibility, User Agreement, Privacy, Cookies.</font></center>
					</td>
					
				</tr>
			</table>
			
			<table  background="razernew/razer-logo-green-hd-1920x1080.jpg" class="ex1" align="center">
			<tr height="50">
			<td width="1400">
			<br><br>
			
			<center>
				<img src="social/facebook-logo-png-white-facebook-logo-png-white-facebook-icon-png--32.png" width="50" height="50">
				
				<img src="social/instagram-4096.png" width="50" height="50">
			</center>
			
				<tr height="180">
				<td width="100%">
				
				<center>
			<font color=" #FFFFFF" size="4" style="calibri"><center>WWW.RAZERSRILANKA.LK all rights reserved<br>copyright@2018</center>
				
				</td>
				</tr>
			
			</td>
			</tr>
		</table>
		
		<script type="text/javascript">
	function aa()
	{
		var xmlhttp;
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","insert.php?nm="+document.getElementById("email").value+"&ct="+document.getElementById("psw").value+"age="+document.getElementById("psw-repeat").value,false);
		xmlhttp.send(null);
	}
	
</script>
	</body>
</html>