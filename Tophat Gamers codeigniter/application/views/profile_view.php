<!DOCTYPE html>
<html>
<head>
	<title>Profile | Tophat Gamers</title>
	<link href="<?php echo base_url('images/favicon.ico'); ?>" rel="icon" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Didact+Gothic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/main.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('magnific-popup/magnific-popup.css'); ?>">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="<?php echo base_url('magnific-popup/jquery.magnific-popup.js'); ?>"></script>
</head>
<body>
	<div class="top">
		<a href="#" class="logo_link"><img src="<?php echo base_url('images/tophatGamers.png'); ?>" class="top_logo"></a>
		<header>
			<button class="top_login_button">Log In</button>
			<a href="#" class="top_register_link">Register</a>
		</header>
	</div>
	<div class="top_banner"></div>

	<section class="profile_div">
		<div class="profile_buttons">
			<button class="message">Message</button>
			<a href="<?php echo base_url("index.php/stream"); ?>" target="_blank"><button class="stream">Watch Stream</button></a>
			<button>Follow</button>
		</div>
		<img src="<?php echo base_url("$profile[user_img]"); ?>" class="profile_img">
		<p class="title">Username</p>
		<p class="info"><?php echo $profile['username']; ?></p>
		<p class="title">Game Type</p>
		<p class="info"><?php echo $profile['gametype']; ?></p>
		<p class="bio_title">Player Biography</p>
		<p class="bio"><?php echo $profile['bio']; ?></p>
	</section>

	<div class="all_footer_banner"></div>
	<div class="footer_background">
		<footer>
			<a href="#" class="about">About Us</a>
			<a href="#" class="contact">Contact Us</a>
			<a href="#" class="faq">FAQs</a>
			<p class="copyright">&copy; 2013 Angel Productions</p>
		</footer>
	</div>

</body>
</html>