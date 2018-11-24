<!DOCTYPE html>
<html>
<style>
body {font-family: Arial;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

<form action="page0.php" style="border:1px solid #ccc" name="nam" method="post" onsubmit="return validate()">

  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="username" required id="email">
    <div id="email_error"></div>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required id="psw">
    <div id="password_Error"></div>

    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required id="psw-repeat">
    <div id="password_Error"></div>
    <label>
      <input type="checkbox" checked="checked" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
    
      <button onClick="" type="button" class="cancelbtn">Cancel</button>
      
    <input type="submit" name="register" class="button" value="register">
    </div>
  </div>
</form>
<script type="text/javascript">
	var username=document.forms["nam"]["username"];
	var password=document.forms["nam"]["psw"];
	var re_password=document.forms["nam"]["psw-repeat"];

	var name_error = document.getElementById("name_error");
	var email_error=document.getElementById("email_error");
	var password_Error=document.getElementById("password_Error");

	username.addEventListener("blur" nameVerify,true);
	email.addEventListener("blur" emailVerify,true);
	password.addEventListener("blur" passwordVerify,true);

	function validate()
	{
		if(username.value==""){
		username.style.border="1px solid red";
		name_error.textContent="username is required";
		username.focus();
		return false;}


		if(email.value==""){
		email.style.border="1px solid red";
		email.textContent="email is required";
		email.focus();
		return false;}


		if(password.value==""){
		password.style.border="1px solid red";
		password.textContent="password is required";
		password.focus();
		return false;} 

	function nameVerify()
	{
		if(username.value !="")
		{
			username.style.border="1px solid #5E6E66"
			username_error.innerHTML="";
			return true;
		}
	}
		function emailVerify()
	{
		if(email.value !="")
		{
			email.style.border="1px solid #5E6E66"
			email_error.innerHTML="";
			return true;
		}

			function emailVerify()
	{
		if(password.value !="")
		{
			password.style.border="1px solid #5E6E66"
			password_error.innerHTML="";
			return true;
		}
	}



	}


</script>
</body>
</html>
