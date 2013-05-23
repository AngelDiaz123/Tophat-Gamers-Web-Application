<!DOCTYPE html>
<html>
<head>
	<title>Create a Post | Tophat Gamers</title>
	<link href="<?php echo base_url('images/favicon.ico'); ?>" rel="icon" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Didact+Gothic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/main.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('magnific-popup/magnific-popup.css'); ?>">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="<?php echo base_url('magnific-popup/jquery.magnific-popup.js'); ?>"></script>
	<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
</head>
<body>
	<div class="top">
		<a href="<?php echo base_url('index.php/search'); ?>" class="logo_link"><img src="<?php echo base_url('images/tophatGamers.png') ?>" class="top_logo"></a>
		<header>
			<a href="<?php echo base_url('index.php/search'); ?>" class="search_link navigation">Search</a>
			<span class="line">|</span>
			<a class="dashboard_link navigation" href="<?php echo base_url('index.php/dashboard/'); ?>">Dashboard</a>
			<span class="line">|</span>
			<a class="create_link navigation onPage" href="<?php echo base_url('index.php/createPost'); ?>">Create a Post</a>
			<span class="line">|</span>
			<a class="read_link navigation" href="<?php echo base_url('index.php/readMail'); ?>">Mail</a>
			<a class="logout_link navigation" href="<?php echo base_url('index.php/dashboard/logout'); ?>">Logout</a>
		</header>
	</div>
	<div class="top_banner"></div>

	<section class="create_div">
		<?php echo form_open('createPost/user/$userID'); ?>
			<input type="text" class="header_input">
			</br>
			<textarea class="post_entry"></textarea>
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

	<script type="text/javascript">
		tinymce.init({
			selector:'textarea',
			width: 960,
			height: 500
		});
    </script>

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