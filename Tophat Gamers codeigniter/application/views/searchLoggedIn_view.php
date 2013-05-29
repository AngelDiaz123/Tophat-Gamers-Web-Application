<!DOCTYPE html>
<html>
<head>
	<title>Search | Tophat Gamers</title>
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
				<a href="<?php echo base_url('index.php/search'); ?>" class="search_link navigation onPage">Search</a>
				<span class="line">|</span>
				<a class="dashboard_link navigation" href="<?php echo base_url('index.php/dashboard/'); ?>">Dashboard</a>
				<span class="line">|</span>
				<a class="create_link navigation" href="<?php echo base_url('index.php/createPost'); ?>">Create a Post</a>
				<span class="line">|</span>
				<a class="read_link navigation" href="<?php echo base_url('index.php/readMail'); ?>">Mail</a>
				<a class="logout_link navigation" href="<?php echo base_url('index.php/dashboard/logout'); ?>">Logout</a>
			</header>
		</div>
		<div class="top_banner"></div>

	<!-- a search form for username or email or gametype -->
	<section class="search_div">
		<h1 class="search_header">Search For A Friend</h1>
		<?php echo form_open('search', array('method' => 'GET')); ?>
			<p class="search_text">Search By Username or Email</p>
			<input type="input" class="main_input" name="q" placeholder="Ex. JohnDoe or John@email.com">
			<input type="submit" value="SEARCH" class="main_search_button">
			<h2 class="e_options">Extra Options<button type="button" class="extra"> >> </button></h2>
			<div class="extra_options">
				<p class="search_drop">Gametype</p>
				<select class="main_dropdown" name="d">
					<option value="">Select an Option</option>
					<option value="FPS">FPS</option>
					<option value="MMO">MMO</option>
					<option value="Test">Test</option>
				</select>
			</div>

			
		</form>
	</section>

	<h1 class="results_title">Search Results</h1>
	<section class="result_div">
		<?php 
			//loops through all of the data from the controller
			foreach ($info as $item) { ?>
				<!-- goes through all of the items and pulls what it needs to display -->
				<a href="<?php echo base_url('index.php/profile/user/'.$item['user_id'].''); ?>"><div class="search_result">
					<img src="<?php echo base_url("$item[user_img]"); ?>" class="basic_profile">
					<p class="username"><?php echo $item['username']; ?></p>
					<p class="gametype"><?php echo $item['gametype']; ?></p>
				</div></a>
				<?php
			}
		?>
	</section>

	<script type="text/javascript">
		$(document).ready(function(){

			$('.popup').magnificPopup({ 
			  type: 'inline'
				// other options
			});

			$('.extra_options').hide();
			$('.extra').addClass('active');

			$('.extra').click(function(){
				if($('.extra').hasClass('active')){
					$('.extra').removeClass('active');
					$('.extra').html('<<');
					$('.extra_options').show();
				}else{
					$('.extra').addClass('active');
					$('.extra').html('>>');
					$('.extra_options').hide();
				}
			});

			$('.result_div').hide();

			$('.result_div').fadeIn(1000);

		});
	</script>

	<div class="all_footer_banner"></div>
	<div class="footer_background">
		<footer>
			<a href="#" class="about">About Us</a>
			<a href="#" class="contact">Contact Us</a>
			<a href="#" class="faq">FAQs</a>
			<p class="copyright">&copy; 2013 Angel Productions</p>
		</footer>
	</div>

	<!-- google analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-41003327-1', 'tophatgamers.com');
		ga('send', 'pageview');

	</script>

</body>
</html>