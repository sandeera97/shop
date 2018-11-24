<!doctype html>
<html>
<style>
	form{
		border: 3px solid #f1f1f1;
	}
	input[type = text],input[type=password]
	{
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
	}
	button {
		background-color: darkgoldenrod;
		color:white;
		padding: 14px 20px;
		margin: 8x 0;
		border: none;
		cursor: pointer;
		width: 100%;
	}
	button: hover{
		opacity: 0.8;
	}
	.cancelbtn{
		width: auto;
		padding: 10px 18px;
		background-color:crimson; 
	}
	.imgcontainer{
		text-align: center;
		margin: 24px 0 12px 0;
	}
	img.avatar{
		width: 40%;
	    border-radius: 50%;
	}
	.container{
		padding-top: 16px;
	}
	span.psw{
		float: right;
		padding-top: 16px;
	}
	@media  screen and (max-width: 300px){
		span.psw{
			display: block;
			float: none;
		}
		.camcelbtn{
			width:100%
		}
	}
	</style>
	<body>
	
	
	<table   background="razernew/369696-Razer_Inc.-logo-748x421.jpg" class="ex1" align="center">
			<tr height="50">
				<td width="1400">
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
	
	<center><h1>LOGIN</h1></center>
	<form action="logaf.php">
	<div class="imgcontainer">
	<img src="razernew/Powered-by-Razer-Scaled.png" alt="Avatar" class="avatar">
	</div>
	
	<div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>
  
  <div class="container" style="background-color:#f1f1f1">
   <a href="page0.php">
    <button onClick="page0.php" type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="signU.php">password?</a></span>
  </div>
  
  <br>
  
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
</form>



</body>	
</html>
