<!DOCTYPE html>
<html lang="en">
<head>
<title>WE FOR YOU | Contact</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Vegur_700.font.js"></script>
<script type="text/javascript" src="js/Vegur_400.font.js"></script>
<script type="text/javascript" src="js/Vegur_300.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>
<body id="page5">
<div class="body1">
  <div class="main">
    <!-- header -->
    <header>
      <div class="wrapper">
        <h1><a href="index.html" id="logo">We For You</a></h1>
        
        <nav>
          <ul id="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="mission.php">Our Mission</a></li>
<li><a href="submain/gallery.php">Gallery</a></li>
<li><a href="submain/faq.php">FAQ</a></li>
            <li><a href="news.php">News &amp; Press</a></li>
            <li id="menu_active"><a href="contact.php">Contact</a></li>
          </ul>

				
				
        </nav>
      </div>
    </header>
    <!-- / header -->
    <!-- content -->
    <article id="content">
      <div class="wrapper">
        <div class="box1">
          <div class="line1 wrapper">
            <section class="col1">
              <h2><strong>O</strong>ur<span>Address</span></h2>
              <strong class="address"> Country:<br>
              City:<br>
              Zip Code:<br>
              Telephone:<br>
              Fax:<br>
              E-Mail: </strong> INDIA<br>
              Ajmer<br>
              305801<br>
              +305 5635600<br>
              +305 5635610<br>
              <a href="#">weforyou@gmail.com</a> </section>
            </div>
        </div>
      </div>



<?php	
include("./includes/connection.php");
	
	if(isset($_POST['send_msg'])){
	//for creating unique id with database checked
	$f = 0;
	$id = "";
	while($f != 1){
		$temp_id = uniqid("MG");
		//query for checking the uniqueid is exist in table or not
		$sql = "SELECT * FROM messages WHERE msg_id='".$temp_id."'";	
		$q = mysqli_query($con,$sql);
		if(mysqli_num_rows($q)==0){
			$id = $temp_id;
			$f = 1;
		}
	}
		$sql = "INSERT into messages(msg_id,name,email,message) VALUES('".$id."','".$_POST['sender_name']."','".$_POST['sender_email']."','".$_POST['message']."')";
		$result = mysqli_query($con,$sql);
		if($result==1){
			?>
			<script>
				alert("Your message is sent.");
			</script>
			<?php
		}
		else{
			?>
			<script>
				alert("Message sending failed..!");
			</script>
			<?php
			echo mysqli_error($con);	
		}
		
	}
?>
<!--
<div id="footer">
	<div>
		<form action="" method="post">
			<h2>Send A Message</h2>
			<label for="name" style="margin:0px"><span>Your Name:</span>
				<input type="text" id="name" name="sender_name" required>
			</label>
			<label for="emailad" style="margin:0px"><span>Email Address:</span>
				<input type="email" id="emailad" name="sender_email" required>
			</label>
			<label for="message" style="margin:0px"><span class="message">Message:</span>
				<textarea name="message" id="message" cols="30" rows="10" required></textarea>
			</label>
			<input type="submit" class="send" name="send_msg" value="Send">
		</form>
		<div>
			


-->




      <div class="wrapper">
        <div class="pad_left2 relative">
          <h4 class="color3"><span>Contact</span>Form</h4>
          <img src="images/page6_img1.png" alt="" class="img1">
          <form id="ContactForm" action="" method="post">
            <div>
              <div class="wrapper"><span>Your Name:</span>
                <input type="text" class="input"   id="name" name="sender_name" required>
              </div>
              <div class="wrapper"><span>Your E-mail:</span>
                <input type="text" class="input" id="emailad" name="sender_email" required>
              </div>
              
              <div class="textarea_box"><span>Your Message:</span>
                <textarea name="message" id="message" cols="30" rows="10" required></textarea>
              </div>
<div>
              <input type="submit"  class="send "  name="send_msg" value="Send"></div>
          </form>
        </div>
      </div>
    </article>
    <!-- / content -->
    <!-- footer -->
    <footer>
      <div class="wrapper"> <a href="index.html" id="footer_logo"><span> We For </span>You</a>
        <ul id="icons">
          <li><a href="#" class="normaltip"><img src="images/icon1.gif" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="images/icon2.gif" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="images/icon3.gif" alt=""></a></li>
        </ul>
      </div>
      <div class="wrapper">
        <nav>
          <ul id="footer_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="mission.php">Our Mission</a></li>
            <li><a href="news.php">News &amp; Press</a></li>
            <li class="end active"><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
        <div class="tel"><span>+1 800</span>123 45 67</div>
      </div>
    </footer>
    <!-- / footer -->
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>


