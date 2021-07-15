<?php	session_start();	
include("./includes/connection.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<title>Profile - Helping Hands</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style_form.css">
<style>
.colorchange
{
background:black;
}
</style>
</head>
<body>
<div class="colorchange"> 
	<div id="header">
		<div class="colorchange">
			<a href="index.php" id="logo"><img src="images/logo.png" alt="logo"></a>
			<ul>
				
				<?php 
					if(isset($_SESSION["user_id"])){
				?>
					
					<li class="log_btn"><a href="logout.php">Logout</a></li>
				<?php 
					}
					else{
				?>
					<li class="log_btn"><a href="login.php">Login</a></li>
				<?php
					}
				?>
			</ul>
		</div>
	</div>
	<div  id="body">
		<h3 style="color:orange;" >FAQ(s)</h3><hr>
		<?php
			$sql = "SELECT * FROM faq WHERE answer IS NOT NULL";
			$result = mysqli_query($con,$sql);
			while($rs = mysqli_fetch_array($result)){
				?>
				<div>
					<h3 style="color:orange;"><?php echo $rs['question']; ?></h3>
					<p><?php echo $rs['answer']; ?></p>
				</div>
				<?php
			}
		?>
		<hr>
		<h3 style="color:orange;" >Ask a Question</h3><hr>
		<form action="insert_faq.php" class="user">
			<input type="text" name="faq_que">
			<input style="color:orange;" type="submit" value="ASK">
		</form>
	</div>
	</div>
</body>
</html>