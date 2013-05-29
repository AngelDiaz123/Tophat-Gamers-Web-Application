<!DOCTYPE html>
<html>
<head>
	<title>Mail | Tophat Gamers</title>
	<link href="<?php echo base_url('images/favicon.ico'); ?>" rel="icon" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Didact+Gothic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/main.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('magnific-popup/magnific-popup.css'); ?>">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="<?php echo base_url('magnific-popup/jquery.magnific-popup.js'); ?>"></script>
</head>
<body>
	<div class="top">
		<div class="nav_holder">
			<a href="<?php echo base_url('index.php/search'); ?>" class="logo_link"><img src="<?php echo base_url('images/tophatGamers.png') ?>" class="top_logo"></a>
			<header>
				<a href="<?php echo base_url('index.php/search'); ?>" class="search_link navigation">Search</a>
				<span class="line">|</span>
				<a class="dashboard_link navigation" href="<?php echo base_url('index.php/dashboard/'); ?>">Dashboard</a>
				<span class="line">|</span>
				<a class="create_link navigation" href="<?php echo base_url('index.php/createPost'); ?>">Create a Post</a>
				<span class="line">|</span>
				<a class="read_link navigation onPage" href="<?php echo base_url('index.php/readMail'); ?>">Mail</a>
				<a class="logout_link navigation" href="<?php echo base_url('index.php/dashboard/logout'); ?>">Logout</a>
			</header>
		</div>
	</div>
	<div class="top_banner"></div>

	<div class="mail_div">
		<div class="list_mail">
			<h1 class="message_top">Read messages</h1>
			<div class="mail_top">
				<p class="list_title">Title</p>
				<p class="list_message">Message</p>
			</div>
			<div
			<?php 
				if(isset($message)){
					echo $message; 
				}else{
					foreach($results as $item){ ?>
						<div class="message_content">
							<p class="content_title"><?php echo $item['title']; ?></p>
							<p class="content_message"><?php echo $item['message']; ?></p>
						</div>
					<?php }
				}; 
			?>
		</div>
		<div class="read_messages">

		</div>
	</div>

	

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