<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Tophat Gamers</title>
	<link href="<?php echo base_url('images/favicon.ico') ?>" rel="icon" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Didact+Gothic' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php echo base_url('magnific-popup/jquery.magnific-popup.js'); ?>"></script>
	<script src="<?php echo base_url('toast/jquery.toastmessage.js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('magnific-popup/magnific-popup.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/jquery.toastmessage.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css'); ?>">
</head>
<body>
	<div id="home_header">
		<img src='<?php echo base_url("images/tophatGamers.png") ?>' class="logo">
		<h1>A site for gamers by gamers. Start searching now.</h1>
		<div class="login_form" style="color:white;">
			<?php
				$attributes = array('id'=>'login','class'=>'white-popup-block','class'=>'mfp-hide'); 
				echo form_open('verifylogin',$attributes); ?>
				<div class="login_form_div">
				    <label for="username">Username:</label>
				    <input type="text" size="20" id="username" name="username">
				    <br/>
				    <label for="password">Password:</label>
				    <input type="password" size="20" id="password" name="password">
				    <br/>
				    <input type="submit" value="Login">
				</div>
			</form>
		</div>
		<header>
			<a class="popup_login" href="#login"><button class="login_button">Log In</button></a>
			<a href="<?php echo base_url('register'); ?>" class="register_link">Register</a>
			<?php
				$attributes = array("class"=>'search_form');
				echo form_open('searchHome', $attributes); ?>
				<input type="text" name="search_input" id="search_input" class="search_input" value="Ex. JohnDoe or JohnDoe@email.com">
				<input type="submit" class="search_button" value="SEARCH">
			</form>
		</header>
		<img src="<?php echo base_url('images/controllers.jpg'); ?>" id="background_img_home">
	</div>
	<div class="home_banner"></div>

	<section id="home_content">
		<div class="group_img circles">
			<img src="<?php echo base_url('images/people.png') ?>" class="circle_people">
			<p class="people_text">Come and interact with people that have the same love for games that you do.</p>
		</div>
		<div class="group_file circles">
			<img src="<?php echo base_url('images/file.png') ?>" class="circle_file">
			<p class="file_text">Let others read your ideas by creating blogs for others on the site.</p>
		</div>
		<div class="group_play circles">
			<img src="<?php echo base_url('images/play_img.png') ?>" class="circle_play">
			<p class="play_text">Watch videos from other users to catch up on their interest and gaming styles.</p>
		</div>
	</section>

	<div class="footer_banner"></div>
	<div class="footer_background">
		<footer>
			<a href="#" class="about">About Us</a>
			<a href="<?php echo base_url('index.php/contact'); ?>" class="contact">Contact Us</a>
			<a href="#" class="faq">FAQs</a>
			<p class="copyright">&copy; 2013 Angel Productions</p>
		</footer>
	</div>

	<script>
		$(document).ready(function(){
			$('.popup_login').magnificPopup({ 
			  type: 'inline'
				// other options
			});
		});
	</script>
</body>
</html>