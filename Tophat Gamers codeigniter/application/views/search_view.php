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

	<!-- a search form for username or email or gametype -->
	<section class="search_div">
		<h1 class="search_header">Search For A Friend</h1>
		<?php echo form_open('search'); ?>
			<p class="search_text">Search By Username or Email</p>
			<input type="input" class="main_input" name="main_input" placeholder="Ex. JohnDoe or John@email.com">
			<p class="search_drop">Gametype</p>
			<select class="main_dropdown" name="main_dropdown">
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
				<div class="search_result">
					<img src="<?php echo base_url("$item[user_img]"); ?>" class="basic_profile">
					<p class="username"><?php echo $item['username']; ?></p>
					<p class="uID"><?php echo $item['user_id']; ?></p>
					<p class="gametype"><?php echo $item['gametype']; ?></p>
				</div>
				<?php
			}
		?>
	</section>

	<script type="text/javascript">
		$(document).ready(function(){

			$('.uID').hide();

			//just in case placeholder isnt working in the latest browser, this is back up
			$('[placeholder]').focus(function() {
			  var input = $(this);
			  if (input.val() == input.attr('placeholder')) {
			    input.val('');
			    input.removeClass('placeholder');
			  }
			}).blur(function() {
			  var input = $(this);
			  if (input.val() == '' || input.val() == input.attr('placeholder')) {
			    input.addClass('placeholder');
			    input.val(input.attr('placeholder'));
			  }
			}).blur();

			/*$('.search_result').click(function(){
				// get the value from the username field                              
			    var userId = $(this).children('.uID').text();

			    // post the username field's value
				$.ajax({
					url: "<?php echo base_url('index.php/retrieve/ajax/userID'); ?>",
					type: 'GET',
					dataType: 'json',
					data: {
						'userID': $(this).children('.uID').text(),
					},
					success: function(result) {
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


					}
				});
			});*/

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