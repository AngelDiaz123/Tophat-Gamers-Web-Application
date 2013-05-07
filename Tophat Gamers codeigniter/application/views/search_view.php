<!DOCTYPE html>
<html>
<head>
	<title>Search | Tophat Gamers</title>
	<link href="favicon.ico" rel="icon" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Didact+Gothic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/main.css') ?>">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
<body>
	<div class="top">
		<a href=" <?php echo base_url('index.php/search'); ?>" class="logo_link"><img src=" <?php echo base_url('images/tophatGamers.png') ?>" class="top_logo"></a>
		<header>
			<button class="top_login_button">Log In</button>
			<a href="#" class="top_register_link">Register</a>
		</header>
	</div>
	<div class="top_banner"></div>

	<section class="search_div">
		<h1 class="search_header">Search For A Friend</h1>
		<form action="#" method="GET">
			<p class="search_text">Search By Username or Email</p>
			<input type="input" class="main_input">
			<p class="search_drop">Select a Gametype</p>
			<select class="main_dropdown">
				<option value="option1">option 1</option>
				<option value="option2">option 2</option>
				<option value="option3">option 3</option>
				<option value="option4">option 4</option>
			</select>

			<input type="button" value="SEARCH" class="main_search_button">
		</form>
	</section>

	<h1 class="results_title">Search Results</h1>
	<section class="result_div">
		<?php 
			//loops through all of the data from the controller
			foreach ($info as $item) {
				//stores each object of the data into a new array
				?>
				<div class="search_result">
					<img src="<?php echo base_url("$item[user_img]"); ?>" class="basic_profile">
					<p class="username"><?php echo $item['username']; ?></p>
					<p class="gametype"><?php echo $item['gametype']; ?></p>
				</div>
				<?php
			}
		?>
	</section>

	<script type="text/javascript">
		$(document).ready(function(){

			$('.main_search_button').click(function(){
				$(".result_div").html('');
				$(".result_div").html('<div class="search_result"><img src="<?php echo base_url("images/basic_profile.jpg") ?>" class="basic_profile"><p class="username">Username</p><p class="gametype">Game Type</p></div><div class="search_result"><img src="<?php echo base_url("images/basic_profile.jpg") ?>" class="basic_profile"><p class="username">Username</p><p class="gametype">Game Type</p></div><div class="search_result"><img src="<?php echo base_url("images/basic_profile.jpg") ?>" class="basic_profile"><p class="username">Username</p><p class="gametype">Game Type</p></div><div class="search_result"><img src="<?php echo base_url("images/basic_profile.jpg") ?>" class="basic_profile"><p class="username">Username</p><p class="gametype">Game Type</p></div><div class="search_result"><img src="<?php echo base_url("images/basic_profile.jpg") ?>" class="basic_profile"><p class="username">Username</p><p class="gametype">Game Type</p></div><div class="search_result"><img src="<?php echo base_url("images/basic_profile.jpg") ?>" class="basic_profile"><p class="username">Username</p><p class="gametype">Game Type</p></div><div class="search_result"><img src="<?php echo base_url("images/basic_profile.jpg") ?>" class="basic_profile"><p class="username">Username</p><p class="gametype">Game Type</p></div><div class="search_result"><img src="<?php echo base_url("images/basic_profile.jpg") ?>" class="basic_profile"><p class="username">Username</p><p class="gametype">Game Type</p></div><div class="search_result"><img src="<?php echo base_url("images/basic_profile.jpg") ?>" class="basic_profile"><p class="username">Username</p><p class="gametype">Game Type</p></div><div class="search_result"><img src="<?php echo base_url("images/basic_profile.jpg") ?>" class="basic_profile"><p class="username">Username</p><p class="gametype">Game Type</p></div><div class="search_result"><img src="<?php echo base_url("images/basic_profile.jpg") ?>" class="basic_profile"><p class="username">Username</p><p class="gametype">Game Type</p></div><div class="search_result"><img src="<?php echo base_url("images/basic_profile.jpg") ?>" class="basic_profile"><p class="username">Username</p><p class="gametype">Game Type</p></div><div class="search_result"><img src="<?php echo base_url("images/basic_profile.jpg") ?>" class="basic_profile"><p class="username">Username</p><p class="gametype">Game Type</p></div><div class="search_result"><img src="<?php echo base_url("images/basic_profile.jpg") ?>" class="basic_profile"><p class="username">Username</p><p class="gametype">Game Type</p></div>');
			});

			$('.search_result').click(function(){
				$(".results_title").html('');
				$(".result_div").html('');
				$(".result_div").html('<section class="profile_div"><div class="profile_buttons"><button class="message">Message</button><a href="<?php echo base_url("index.php/stream"); ?>" target="_blank"><button class="stream">Watch Stream</button></a><button>Follow</button></div><img src="<?php echo base_url("images/basic_profile.jpg") ?>" class="profile_img"><p class="title">Username</p><p class="info">General Mustacho</p><p class="title">Game Type</p><p class="info">RPG, MMO, FPS </p><p class="bio_title">Player Biography</p><p class="bio">Born and raised in the military,  he knew he was meant to play video games from a young age.  He was always glued to the television and has always had a vivid imagination.  He spent his free time makeing up his own worlds and playing inside them.  He was a gamer.  He grew a beard at the age of 3 and was able to bench press buses since 4.  He was a manly gamer.</br></br>I like to play first-person shooter because of the action that happens in the game.  Role playing games interest me as well because it lets my imagination run wild and lets me be whoever I want to be. Come and join me in my games so we can play together and have fun.</p></section>');
			});

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

</body>
</html>