<?php	session_start();
include("./includes/connection.php");
?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png">
	<title>Gallery - WE FOR YOU</title>
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
			<a href="../index.php" id="logo"><img src="images/logo.png" alt="logo"></a>
			<ul>
				
				
					
					<li class="log_btn"><a href="../index.php">Home</a></li>
				
			</ul>
		</div>
	</div>
	<div id="body">
		<div id="gallery">
			
			<div class="body">		
             <?php
				$sql = "SELECT * FROM media_gallery ";
				$result = mysqli_query($con,$sql);
				$rs = mysqli_fetch_array($result);
			 ?>
				<div>
					<h2><a href="gallery.php"><?php echo $rs['caption']; ?></a></h2>
					<span class="date">Sep 12, 2020</span> <a href="gallery.php" class="figure"><img src="<?php echo $rs['image'] ?>" alt="Image" height="180px" width="180px"></a>
					<p>
						<?php echo $rs['description']; ?>
					</p>
				</div>
			 <?php
				$count = 1;
				while($rs = mysqli_fetch_array($result)){
					if($count <=4){
					}
				}
			 ?>
			<div>
        </div>
			
	            
	  </div>
    </div>
</body>
</html>