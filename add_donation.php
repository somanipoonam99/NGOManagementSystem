<?php
	session_start();
	include("./includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<title>WE FOR YOU</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
	<script src="./js/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#donor_state").change(function(){
				var state = $("#donor_state").val();
				$("#donor_city").load("getCity.php?state="+state);
			});
		});
	</script>

<style>
.colorchange
{
background:black;
}
.donation_div label
{
color:orange;
}

</head>
</style>
<body>
<div class="colorchange">
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img  style="margin-left:430px;"src="images/logo.png" alt="logo"></a>
	
		</div>
	</div>
	<div id="body">
		<div class="donation_div">
			<h3 style="color:orange";><?php echo $_GET["donate"]; ?> Donation</h3><hr>
			<form action="./insert_donation.php" method="post" class="user">
				<input type="hidden" name="cat" value="<?php echo $_GET['cat'];?>">
				<label style="color:orange";>Name</label>
				<input type="text" name="donor_name">
				<label style="color:orange";>Email</label>
				<input type="email" name="donor_email">
				<label style="color:orange";>Address</label>
				<textarea name="donor_address" rows="3">
				</textarea>
				<label style="color:orange";>State</label>
				<select id="donor_state" name="donor_state">
					<option value="">Select State</option>
					<?php
						$sql = "SELECT * FROM state";
						$result = mysqli_query($con,$sql);
						while($rs = mysqli_fetch_array($result)){
							?>
							<option value="<?php echo $rs["state_id"]; ?>"><?php echo $rs["state_name"]; ?></option>
							<?php
						}
					?>
				</select>
				<label style="color:orange";>City</label>
				<select id="donor_city" name="donor_city">
					<option value="">Select State First</option>
				</select>
<label style="color:orange";>Items</label>
				<input type="number" name="items">
				<label style="color:orange"; >description</label>
				<textarea name="donor_discription" rows="5">
				</textarea>
				<label style="color:orange"; >How we collect your donation? </label>
				<div class="pickup">
					<span><input type="radio" name="pickup" value="M" checked>
					<label style="color:orange";>I'll come to the organization</label><br></span>
					<span><input type="radio" name="pickup" value="A">
					<label style="color:orange";>Pickup it from my address</label></span>
				</div>
				<input style="color:orange"; type="submit" value="Donate">
			</form>
		</div>
	</div>
	</div>
</body>
</html>