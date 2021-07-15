<?php
	session_start();
	include("./includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<title>Helping Hands</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt="logo"></a>
			<ul>
				<li class="current"><a>Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="gallery.php">gallery</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="event.php">Events</a></li>
				<li><a href="donate.php">Donate</a></li>
				<?php 
					if(isset($_SESSION["user_id"])){
				?>
					<li><a href="profile.php">profile</a></li>
					<li><a href="faq.php">FAQ</a></li>
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
	<div id="body">
		<div class="header">
<div class="slider">
        <ul class="items">
          <li> <img src="images/img1.jpg" alt="">
            <div class="banner">
              <div class="wrapper"><span>“Our<em>Mission</em>is to<em>Help</em></span></div>
              <div class="wrapper"><strong>Those Who<em>Need</em>It”</strong></div>
            </div>
          </li>
          <li> <img src="images/img2.jpg" alt="">
            <div class="banner">
              <div class="wrapper"><span>“Spread Happiness</span></div>
              <div class="wrapper"><strong>and Care”</strong></div>
            </div>
          </li>
          <li> <img src="images/img3.jpg" alt="">
            <div class="banner">
              <div class="wrapper"><span>“TOGETHER we can CHANGE</span></div>
              <div class="wrapper"><strong>Many LIVES”</strong></div>
            </div>
          </li>
        </ul>

        <ul class="pagination1">
          <li id="banner1"><a href="donate.php">Make<span>Donations</span></a></li>
          <li id="banner2"><a href="volunteer.php">join<span>Volunteer</span></a></li>
          <li id="banner3"><a href="help.php">Help<span>NGO</span></a></li>
        </ul>
      </div>
    </header>
    <!-- / header -->
    <!-- content -->
    <article id="content">
      <div class="wrapper">
        <div class="box1">
          <div class="line1">
            <div class="line2 wrapper">
              <section class="col1">
                <h2><strong>P</strong>roject<span> 1</span></h2>
                <div class="pad_bot1">
                  <figure><img src="images/page1_img1.jpg" alt=""></figure>
                </div>
               Education is both the means as well as the end to a better life; means, because it empowers an individual to earn his/her livelihood and the end because it increases one's awareness on a range of issues – from healthcare to appropriate social behavior to understanding one's rights, and in the process evolve as a better citizen.<a href="donation.php" class="button1">>></a> </section>
              <section class="col1 pad_left1">
                <h2 class="color2"><strong>P</strong>roject<span> 2</span></h2>
                <div class="pad_bot1">
                  <figure><img src="images/page1_img2.jpg" alt=""></figure>
                </div>
               Children and youth growing up in poverty typically lack proper health care and nutrition. They’re also more likely to be exposed to the stress of domestic violence, gangs and drugs. All of this can impair brain development, negatively impacting long-term physical and mental well-being.
               <a href="donation.php" class="button1 color2">>></a> </section>
              <section class="col1 pad_left1">
                <h2 class="color3"><strong>P</strong>roject<span> 3</span></h2>
                <div class="pad_bot1">
                  <figure><img src="images/page1_img3.jpg" alt=""></figure>
                </div>
               Some are left by their parents within a few months they are born and some are left even before they open their eyes to see the world. To give a normal childhood to destitute, orphans and children whose parents couldn’t take care of them. Donate to an NGO for children in India, to give a poor child a better childhood.<a href="donation.php" class="button1 color3">>></a> </section>
            </div>
          </div>
        </div>
      </div>
      <div class="wrapper">
        <h3>Our Mission</h3>
        <p class="quot"> Our work aims to break the vicious cycle of poverty and social isolation and to restore hope for a better future. We believe that every person has the right to access resources and opportunities in order to live and develop with dignity and to become an active and contributing member of our society.<img src="images/quot2.png" alt=""> </p>
      </div>
    </article>
    <!-- / content -->
    <!-- footer -->
    <footer>
      <div class="wrapper"> <a href="index.php" id="footer_logo"><span> We For </span>You</a>

        <ul id="icons">
          <li><a href="#" class="normaltip"><img src="images/icon1.gif" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="images/icon2.gif" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="images/icon3.gif" alt=""></a></li>
        </ul>
      </div>
      <div class="wrapper">
        <nav>
          <ul id="footer_menu">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="mission.php">Our Mission</a></li>
            <li><a href="news.php">News &amp; Press</a></li>
            <li class="end"><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
        <div class="tel"><span>+1 800</span>123 45 67</div>
      </div>
      
    </footer>
    <!-- / footer -->
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(window).load(function () {
    $('.slider')._TMS({
        preset: 'zabor',
        easing: 'easeOutQuad',
        duration: 800,
        pagination: true,
        banners: true,
        waitBannerAnimation: false,
        slideshow: 6000,
        bannerShow: function (banner) {
            banner.css({
                right: '-700px'
            }).stop().animate({
                right: '0'
            }, 600, 'easeOutExpo')
        },
        bannerHide: function (banner) {
            banner.stop().animate({
                right: '-700'
            }, 600, 'easeOutExpo')
        }
    })
    $('.pagination1 li').hover(function () {
        if (!$(this).hasClass('current')) {
            $(this).find('a').stop().animate({
                backgroundPosition: '0 0'
            }, 600, 'easeOutExpo', function () {
                $(this).parent().css({
                    backgroundPosition: '-20px 0'
                })
            });
        }
    }, function () {
        if (!$(this).hasClass('current')) {
            $(this).css({
                backgroundPosition: '0 0'
            }).find('a').stop().animate({
                backgroundPosition: '-250px 0'
            }, 600, 'easeOutExpo');
        }
    })
})
</script>
			<div>
				<img src="images/people.jpg" alt="Image">
				<div id="tagline">
					<h1>Help Pepole</h1>
					<h3>We are working here always for helping Pepole.</h3>
				</div>
				<div class="section">
					<h2>Organizing seminars, impact studies, workshops, research study and awareness campaign on educational policies, statistics, health, legal issues, women and children developmental activities.</h2>
					<p>
						We Encouraging sustainable agricultural development and organic farming, Establishing unity, integrity and communal harmony, Encouraging adult education among rural masses and slum dwellers, Working for persons with disability.
					</p>
					<a href="about.php" class="first">Learn More About Us</a>
					<a href="login.php">Join Us</a>
				</div>
			</div>
		</div>
		<div class="body">
			<div>
				<div class="figure">
					<a href="gallery.php"><img src="images/hands.jpg" alt="Image"></a>
					<h2><a href="gallery.php">gallery</a></h2>
				</div>
				<div class="news">
					<h2>News</h2>
					<ul>
						<li>
							<span class="date">Sep 12, 2016</span>
							<h3><a href="news.php">New JOin of Children Foundetions</a></h3>
							<p>
								more and more foundetions are now joining with us "Hope" is a new foundetion which is now going to connect with us.
							</p>
						</li>
						<li>
							<span class="date">Sep 12, 2016</span>
							<h3><a href="news.php">Saved elders</a></h3>
							<p>
								some elder homes(read..)
							</p>
						</li>
					</ul>
					<span class="link"><a href="news.php">Go To News</a></span>
				</div>
				<div class="help">
					<h2>How To Help</h2>
					<a href="login.php"><img src="images/finger.jpg" alt="Image"></a>
					<h3><a href="login.php">on your single step</a></h3>
					<p>
						stay connected with us, we know the needs of pepole who are poor, disabled. get invloved with us and start helping pepole with your abilities
					</p>
					<span class="link"><a href="login.php">Get Involved</a></span>
				</div>
			</div>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>