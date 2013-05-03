<!DOCTYPE html>
<html>
<head>
	<title>Contact Us | Tophat Gamers</title>
	<link href="images/favicon.ico" rel="icon" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Didact+Gothic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css'); ?>">
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

	<section class="contact_div">
		<h1 class="contact_header">Contact Us</h1>
		<p class="contact_one_linner">I want to thank you for becoming a user of this website.  If you have a concern or just want to thank us for making this site a awesome, please will out the form and it will email the customer service department directly.  Thank you!</p>
		<form action="#" method="POST">
			<p>Reason to contact us</p>
			<select>
				<option value="problem">Problem with site</option>
				<option value="content">Issue with content</option>
				<option value="thank">To thank us for the service</option>
				<option value="other">Other</option>
			</select>
			<p>Message</p>
			<textarea rows="20" cols="70">Leave your message here!</textarea>
			<input type="submit" value="Send Email" class="contact_submit">
		</form>
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