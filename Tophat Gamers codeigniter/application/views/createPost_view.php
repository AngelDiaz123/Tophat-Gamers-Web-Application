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
		<div class="nav_holder">
			<a href="<?php echo base_url('index.php/search'); ?>" class="logo_link"><img src="<?php echo base_url('images/tophatGamers.png') ?>" class="top_logo"></a>
			<header>
				<a href="<?php echo base_url('index.php/search'); ?>" class="search_link navigation">Search</a>
				<span class="line">|</span>
				<a class="dashboard_link navigation" href="<?php echo base_url('index.php/dashboard/'); ?>">Dashboard</a>
				<span class="line">|</span>
				<a class="create_link navigation onPage" href="<?php echo base_url('index.php/createpost'); ?>">Create a Post</a>
				<span class="line">|</span>
				<a class="read_link navigation" href="<?php echo base_url('index.php/readmail'); ?>">Mail</a>
				<a class="logout_link navigation" href="<?php echo base_url('index.php/dashboard/logout'); ?>">Logout</a>
			</header>
		</div>
	</div>
	<div class="top_banner"></div>

	<section class="create_div">
		<?php echo form_open('createPost/savePost/'.$userID); ?>
			<h1 class="post_title">Title of post</h1>
			<input type="text" name="title" class="title_input">
			</br>
			<h1 class="post_msg">Post message</h1>
			<textarea name="post" class="post_entry"></textarea>
			<input type="Submit" class="submit_post">
		</form>

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

	<script type="text/javascript">
		tinymce.init({
			selector:'textarea',
			plugins: "image",
			width: 800,
			height: 500,
			browser_spellcheck: true,
			resize: false,

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