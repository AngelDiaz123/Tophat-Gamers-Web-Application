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
		<div class="login_form" style="color:white;">
			<?php
				// hidden login form
				$attributes = array('id'=>'login_search','class'=>'white-popup-block','class'=>'mfp-hide'); 
				echo form_open('verifylogin',$attributes); ?>
				<div class="login_form_div">
				    <label for="username">Username:</label>
				    <input type="text" size="20" class="username_login" name="username">
				    <br/>
				    <label for="password">Password:</label>
				    <input type="password" size="20" class="password_login" name="password">
				    <br/>
				    <input type="submit" value="Login">
				</div>
			</form>
		</div>
		<a href="<?php echo base_url('index.php/search'); ?>" class="logo_link"><img src="<?php echo base_url('images/tophatGamers.png') ?>" class="top_logo"></a>
		<header>
			<a class="popup" href="#login_search"><button class="top_login_button">Log In</button></a>
			<a href="#" class="top_register_link">Register</a>
		</header>
	</div>
	<div class="top_banner"></div>

	<!-- a search form for username or email or gametype -->
	<section class="search_div">
		<h1 class="search_header">Search For A Friend</h1>
		<?php echo form_open('search', array('method' => 'GET')); ?>
			<p class="search_text">Search By Username or Email</p>
			<input type="input" class="main_input" name="q" placeholder="Ex. JohnDoe or John@email.com">
			<p class="search_drop">Gametype</p>
			<select class="main_dropdown" name="d">
				<option value="">Select an Option</option>
				<option value="FPS">FPS</option>
				<option value="MMO">MMO</option>
				<option value="Test">Test</option>
			</select>

			<input type="submit" value="SEARCH" class="main_search_button">
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
					<p class="uID"><?php echo $item['user_id']; ?></p>
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

			$('.uID').hide();

			$('.result_div').hide();

			$('.result_div').fadeIn(1000);

			$('.search_result').click(function(){
				// get the value from the username field                              
			    var userId = $(this).children('.uID').text();

			    // post the username field's value
				$.ajax({
					url: "<?php echo base_url('index.php/retrieve/'); ?>",
					type: 'GET',
					dataType: 'json',
					data: {
						'userID': $(this).children('.uID').text(),
					},
					/*success: function(result) {
						// to get rid of the search results title
						$(".results_title").html('');

						// to clear the result div
						$(".result_div").html('');

						<?php echo site_url('result.username'); ?>

						// to display the profile after the ajax call was made
						$(".result_div").html('<section class="profile_div">'+
												'<button class="back_button">Back</button>'+
												'<div class="profile_buttons">'+
													'<button class="message">Message</button>'+
													'<a href="<?php echo base_url("index.php/stream"); ?>" target="_blank"><button class="stream">Watch Stream</button></a>'+
													'<button>Follow</button>'+
												'</div>'+
												'<img src="<?php echo base_url("'+result.user_img+'"); ?>" class="profile_img">'+
												'<p class="title">Username</p>'+
												'<p class="info">'+result.username+'</p><p class="title">Game Type</p>'+
												'<p class="info">'+result.gametype+'</p><p class="bio_title">Player Biography</p>'+
												'<p class="bio">'+result.bio+'</p>'+
											'</section>');

						$('.back_button').click(function(){
							console.log('working');
							$(".result_div").html('');
							$(".results_title").html('<h1 class="results_title">Search Results</h1>');
							$(".result_div").html('<?php foreach ($info as $item) { ?>'+
														'<div class="search_result">'+
															'<img src="<?php echo base_url("$item[user_img]"); ?>" class="basic_profile">'+
															'<p class="username"><?php echo $item["username"]; ?></p>'+
															//'<p class="uID"><?php echo $item["user_id"]; ?></p>'+
															//'<p class="gametype"><?php echo $item["gametype"]; ?>//</p>'+
															'</div>'+
													'<?php } ?>');
						});


					}*/
				});
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