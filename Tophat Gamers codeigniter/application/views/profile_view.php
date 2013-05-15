<!DOCTYPE html>
<html>
<head>
	<title>Search | Tophat Gamers</title>
	<link href="favicon.ico" rel="icon" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Didact+Gothic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="top">
		<a href="#" class="logo_link"><img src="images/tophatGamers.png" class="top_logo"></a>
		<header>
			<button class="top_login_button">Log In</button>
			<a href="#" class="top_register_link">Register</a>
		</header>
	</div>
	<div class="top_banner"></div>

	<section class="profile_div">
		<button class="back_button">Back</button>
		<div class="profile_buttons">
			<button class="message">Message</button>
			<a href="<?php echo base_url("index.php/stream"); ?>" target="_blank"><button class="stream">Watch Stream</button></a>
			<button>Follow</button>
		</div>
		<img src="<?php echo base_url("'+result.user_img+'"); ?>" class="profile_img">
		<p class="title">Username</p>
		<p class="info">result.username</p><p class="title">Game Type</p>
		<p class="info">result.gametype</p><p class="bio_title">Player Biography</p>
		<p class="bio">result.bio</p>
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