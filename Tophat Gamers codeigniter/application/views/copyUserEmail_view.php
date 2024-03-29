<!DOCTYPE html>
<html>
<head>
	<title>Register | Tophat Gamers</title>
	<link href="<?php echo base_url('images/favicon.ico'); ?>" rel="icon" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Didact+Gothic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/main.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('magnific-popup/magnific-popup.css'); ?>">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="<?php echo base_url('magnific-popup/jquery.magnific-popup.js'); ?>"></script>
</head>
<body>
	<div class="top">
		<a href="<?php echo base_url('index.php/search'); ?>" class="logo_link"><img src="<?php echo base_url('images/tophatGamers.png') ?>" class="top_logo"></a>
		<header>
			<a class="popup" href="#login_search"><button class="top_login_button">Log In</button></a>
			<a href="<?php echo base_url('index.php/register'); ?>" class="top_register_link">Register</a>
		</header>
	</div>
	<div class="top_banner"></div>

	<h3>Username or Email already in use. Please try another</h3>
	<?php echo form_open('verifyRegister'); ?>
		<div class="register_form_div">
			<label for="username">Username:</label>
			<input type="text" size="20" class="username_register" name="username">
			<br/>
			<label for="username">Email:</label>
			<input type="text" size="20" class="email_register" name="email">
			<br/>
			<label for="password">Password:</label>
			<input type="password" size="20" class="password_register" name="password">
			<br/>
			<input type="submit" value="Login">
			</div>
		</form>

	

	<div class="all_footer_banner"></div>
	<div class="footer_background">
		<footer>
			<a href="<?php echo base_url('index.php/about'); ?>" class="about">About Us</a>
			<a href="<?php echo base_url('index.php/contact'); ?>" class="contact">Contact Us</a>
			<a href="#" class="faq">FAQs</a>
			<p class="copyright">&copy; 2013 Angel Productions</p>
		</footer>
	</div>

</body>
</html>