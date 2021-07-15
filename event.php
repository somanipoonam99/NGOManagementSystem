<?php
	session_start();
	include("./includes/connection.php");
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<title>Events - WE FOR YOU</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

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
			<a href="index.php" id="logo"><img  style="margin-left:420px;" src="images/logo.png" alt="logo"></a>
			
			
		</div>
	</div>
	<div id="body">
		<div id="newsblog">
			<div class="aside">
			<?php
				$sql = "SELECT * FROM event ORDER BY date DESC";
				$result = mysqli_query($con,$sql);
				$rs = mysqli_fetch_array($result);
			?>
				<div>
					<h2><a href="event.php"><?php echo $rs['event_name']; ?></a></h2>
					<span class="date">Sep 12, 2020</span> <a href="event.php" class="figure"><img src="<?php echo $rs['image'] ?>" alt="Image" height="180px" width="180px"></a>
					<p>
						<?php echo $rs['event_description']; ?>
					</p>
				</div>
			<?php
				$count = 1;
				while($rs = mysqli_fetch_array($result)){
					if($count <=4){
			?>
				<ul style="display:inline;">
					<li style="overflow:scroll">
						<h2><a href="event.php"><?php echo $rs['event_name']; ?></a></h2>
						<span class="date">Sep 12, 2020</span>
						<p>
							<?php echo $rs['event_description']; ?>
						</p>
					</li>
				</ul>
			<?php
					}
					$count++;
				}
			?>
			</div>
			<div class="sidebar">
				<div>
					<h2>Recent Post</h2>
					<ul>
						<li>
							 <a  href="event.php">Hospitals are now Joining with us and docots will help us for good health care.</a>
						</li>
						<li>
							<a  href="event.php"> Hope" is just joined with us which is for childrens.</a>
						</li>
						<li>
							<a  href="event.php">Elders get there requirement full-filled by donors.</a>
						</li>
						<li>
							<a href="event.php">Childrens are now happy when they get toys, clothes and foodpackets from donors.</a>
						</li>
						<li>
							<a href="event.php">"NaiSoch" and "Savera" two new founadtions are joined with us.</a>
						</li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>

	
</div>
</body>
</php>















