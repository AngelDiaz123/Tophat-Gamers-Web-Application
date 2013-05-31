<!DOCTYPE html>
<html>
<head>
	<title>About Us | Tophat Gamers</title>
	<link href="<?php echo base_url('images/favicon.ico'); ?>" rel="icon" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Didact+Gothic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/main.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('magnific-popup/magnific-popup.css'); ?>">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="<?php echo base_url('magnific-popup/jquery.magnific-popup.js'); ?>"></script>
</head>
<body>
	<div class="top">
		<div class="login_form" style="color:white;">
			<?php
				// hidden login form
				$attributes = array('id'=>'login_profile','class'=>'white-popup-block','class'=>'mfp-hide'); 
				echo form_open('verifylogin',$attributes); ?>
				<div class="login_form_div">
					<h1>Login</h1>
				    <label for="username">Username:</label>
				    <input type="text" size="20" class="username_login" name="username">
				    <br/>
				    <label for="password">Password:</label>
				    <input type="password" size="20" class="password_login" name="password">
				    <br/>
				    <input type="submit" value="Login">
				</div>
			</form>
		</div>
		<header class="header_holder">
			<a href="<?php echo base_url('index.php/search'); ?>" class="logo_link"><img src="<?php echo base_url('images/tophatGamers.png'); ?>" class="top_logo"></a>
			<a class="popup" href="#login_profile"><button class="top_login_button">Log In</button></a>
			<a href="<?php echo base_url('index.php/register'); ?>" class="top_register_link">Register</a>
		</header>
	</div>
	<div class="top_banner"></div>

	<section class="about_div">
		<h1 class="contact_header">About Us</h1>
		<h3 class="lead">Angel Diaz</h3>
		<h3 class="lead_dev">Developer, Designer and Idea Maker</h3>
		<img src="<?php echo base_url('images/me.jpg') ?>" class="lead_img"><p class="lead_info">I am web developer and web designer that was orginally suppose to be a game developer but the web called to me instead.  I am a military brat and have lived in at least 10 different states and another country by the time I was 18.  I then moved to Florida with my parents and started working at walmart.  I decided to better my life after working there for 2 years and went to Full Sail University. I graudated in June of 2013 and Tophat Gamers was my final project there.</p>
		<p class="lead_bot">Tophat gamers is a community driven site for gamers. It gives you the ability to find new people, message them, watch their videos and read their blogs. Tophat gamers is built around the idea of making a better gamer community  by making new connections and new friendships. The site will help the world understand that the gamer community is not as bad or immature as it is given out to be. Tophatgamers.com,  come and get fancy with us.</p> 
	</section>

	<div class="all_footer_banner"></div>
	<div class="footer_background">
		<footer>
			<a href="<?php echo base_url('index.php/about'); ?>" class="about">About Us</a>
			<a href="<?php echo base_url('index.php/contact'); ?>" class="contact">Contact Us</a>
			<a href="#" class="faq">FAQs</a>
			<p class="copyright">&copy; 2013 Angel Productions</p>
		</footer>
	</div>

	<script type="text/javascript">
	$('.popup').magnificPopup({ 
			  type: 'inline'
				// other options
			});
	</script>

</body>
</html>