<?php	session_start();	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>WE FOR YOU</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
	<script type="text/javascript">
		function checkPassword(){
			if(document.getElementById("password").value == document.getElementById("password1").value){
				return true;
			}
			else{
				document.getElementById("password").style.border="2px solid #ff3300";
				document.getElementById("password1").style.border="2px solid #ff3300";
				return false;
			}
		}
	</script>
<style>
.colorchange
{
background:black;
}
</style>
</head>
<body>
<div class= "colorchange">
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img  style="margin-left:430px;"  src="images/logo.png" alt="logo"></a>
		</div>
	</div>
	<div id="body">
			<div>
				<div class="login_div">
					<h3 style="color:orange";>Login</h3>
					<form action="./login_check.php" method="post" class="user">
						<label style="color:orange";>Email Address</label>
						<input type="email" name="email" required>
						<label style="color:orange";>Password</label>
						<input type="password" name="password" required>
						<label  class="forgot"><a href="forgot_password.php" style="text-decoration: none; color:orange;">forgot password ?</a></label><br>
						<input style="color:orange"; type="submit" value="Login">
					</form>
				</div>
				<div class="register_div">
					<h3 style="color:orange";>Register</h3>
					<form action="./registration.php" method="post" onsubmit="return checkPassword()" class="user">
						<label style="color:orange";>Your Name</label>
						<input type="text" name="name" required>
						<label style="color:orange";>Email Address</label>
						<input type="email" name="email" required>
						<label style="color:orange";>Password</label>
						<input type="password" name="password" id="password" required>
						<label style="color:orange";>Confirm Password</label>
						<input type="password" name="password" id="password1" required>
						<input style="color:orange"; type="submit" value="Register">
					</form>
				</div>
			</div>
	</div>
	</div>
</body>
</html>