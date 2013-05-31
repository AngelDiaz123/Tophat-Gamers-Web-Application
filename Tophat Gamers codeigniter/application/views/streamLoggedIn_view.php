<!DOCTYPE html>
<html>
<head>
	<title>Stream | Tophat Gamers</title>
	<link href="<?php echo base_url('images/favicon.ico') ?>" rel="icon" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Didact+Gothic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css'); ?>">
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
				<a class="create_link navigation" href="<?php echo base_url('index.php/createpost'); ?>">Create a Post</a>
				<span class="line">|</span>
				<a class="read_link navigation" href="<?php echo base_url('index.php/readmail'); ?>">Mail</a>
				<a class="logout_link navigation" href="<?php echo base_url('index.php/dashboard/logout'); ?>">Logout</a>
			</header>
		</div>
	</div>
	<div class="top_banner"></div>

	<section class="stream_div">
		<h1 class="user_title">User's Stream</h1>
		<div class="stream_video">
			<object type="application/x-shockwave-flash" 
		        height="400" 
		        width="620" 
		        id="live_embed_player_flash" 
		        data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=<?php echo $streamName; ?>" 
		        bgcolor="#000000">
		    <param  name="allowFullScreen" 
		            value="true" />
		    <param  name="allowScriptAccess" 
		            value="always" />
		    <param  name="allowNetworking" 
		            value="all" />
		    <param  name="movie" 
		            value="http://www.twitch.tv/widgets/live_embed_player.swf" />
		    <param  name="flashvars" 
		            value="hostname=www.twitch.tv&channel=<?php echo $streamName; ?>&auto_play=true&start_volume=50" />
		  </object>
		</div>
  <!-- the code for the chat -->
  		<div class="stream_chat">
			<iframe frameborder="0" 
			    scrolling="no" 
			    id="chat_embed" 
			    src="http://twitch.tv/chat/embed?channel=<?php echo $streamName; ?>&amp;popout_chat=true" 
			    height="400" 
			    width="300">
			</iframe>
		</div>

		<p class="stream_descript">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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