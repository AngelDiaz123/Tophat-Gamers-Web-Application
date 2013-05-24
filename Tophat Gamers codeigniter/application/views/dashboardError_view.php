<!DOCTYPE html>
<html>
	<head>
	<title>Dashboard | Tophat Gamers</title>
	<link href="<?php echo base_url('images/favicon.ico'); ?>" rel="icon" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Didact+Gothic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/main.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('magnific-popup/magnific-popup.css'); ?>">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="<?php echo base_url('magnific-popup/jquery.magnific-popup.js'); ?>"></script>
	<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
</head>
 	<body>
 		<!-- <div class="successAlert messageAlert">
			<h3>You Logged In</h3>
			<p>Welcome Back <?php echo $info['username']; ?>!</p>
		</div> -->
 		<div class="top">
			<a href="<?php echo base_url('index.php/search'); ?>" class="logo_link"><img src="<?php echo base_url('images/tophatGamers.png') ?>" class="top_logo"></a>
			<header>
				<a href="<?php echo base_url('index.php/search'); ?>" class="search_link navigation">Search</a>
				<span class="line">|</span>
				<a class="dashboard_link navigation onPage" href="<?php echo base_url('index.php/dashboard/'); ?>">Dashboard</a>
				<span class="line">|</span>
				<a class="create_link navigation" href="<?php echo base_url('index.php/createPost'); ?>">Create a Post</a>
				<span class="line">|</span>
				<a class="read_link navigation" href="<?php echo base_url('index.php/readMail'); ?>">Mail</a>
				<a class="logout_link navigation" href="<?php echo base_url('index.php/dashboard/logout'); ?>">Logout</a>
			</header>
		</div>
		<div class="top_banner"></div>
	 	<!-- <div class="infoAlert messageAlert">
				 <h3>FYI, something just happened!</h3>
				 <p>This is just an info notification message.</p>
		</div>

		<div class="errorAlert messageAlert">
				 <h3>Ups, an error ocurred</h3>
				 <p>This is just an error notification message.</p>
		</div>

		<div class="warningAlert messageAlert">
				 <h3>Wait, I must warn you!</h3>
				 <p>This is just a warning notification message.</p>
		</div> -->

	   <div class="dashboard_div">
	   		<h1>Dashboard</h1>
	   		<img src="<?php echo base_url("$info[user_img]"); ?>" class="dash_img">
	   		<h3 class="profile_error">The image exceded the width or height or file size recommended please try agian.</h3>
			<?php echo form_open_multipart("dashboard/editAccount/".$info['user_id']); ?>
				<label class="label" for="userFile">User Image:</label>
				<input type="file" class="user_dash" size="20" name="userfile">
				<br/>
				<label class="label" for="username">Username:</label>
				<input type="text" class="user_dash" size="20" name="username" value="<?php echo $info['username']; ?>">
				<br/>
				<label class="label" for="email">Email:</label>
				<input type="text" class="email_dash" name="email" value="<?php echo $info['email']; ?>">
				<br/>
				<label class="label" for="youtube">Youtube Username:</label>
				<input type="text" class="youtube_dash" name="youtube" value="<?php echo $info['youtube_username']; ?>">
				<br/>
				<label class="label" for="twitch">Twitch Username:</label>
				<input type="text" class="twitch_dash" name="twitch" value="<?php echo $info['twitch_username']; ?>">
				<br/>
				<label class="label" for="gametype">Gametype:</label>
				<select class="gametype_dash" name="gametype">
					<option value="<?php echo $info['gametype']; ?>">Select an Option</option>
					<option value="FPS">First Person Shooter</option>
					<option value="MMO">Massive Multiplayer Online</option>
					<option value="Sports">Sports</option>
					<option value="Strategy">Strategy</option>
					<option value="Arcade">Arcade</option>
					<option value="Fighter">Fighter</option>
					<option value="Strategy">Third Person Shooter</option>
				</select>
				</br>
				<label class="label" for="bio">Your Bio:</label>
				<textarea name="bio"><?php echo $info['bio']; ?></textarea>
				<br/>
				<input type="submit" value="Update" class="update_btn">
			</form>
		</div>
		<div class="editPost">
			<?php foreach($post as $item){
				echo $item['title'].'</br>';
				echo $item['post'].'</br>';
				echo $item['post_id'].'</br></br>';
			} ?>
		</div>


	   <script type="text/javascript">
	   		// var myMessages = ['infoAlert','warningAlert','errorAlert','successAlert'];

	   		var myMessages = 'successAlert';

			function hideAllMessages(){
				var messagesHeights = new Array(); // this array will store height for each
						 
				for (i=0; i<myMessages.length; i++){
					messagesHeights[i] = $('.' + myMessages).outerHeight(); // fill array
					$('.' + myMessages).css('top', -messagesHeights[i]); //move element outside viewport	  
				}
			}

			function showMessage(type){
				$('.'+ type +'-trigger').click(function(){
					hideAllMessages();				  
					$('.'+type).animate({top:"0"}, 500);
				});
			}

			$(document).ready(function(){
			 
				// Initially, hide them all
				// hideAllMessages();
				 
				// Show message
				// for(var i=0;i<myMessages.length;i++){
				// 	showMessage(myMessages[i]);
				// }

				showMessage('successAlert');

			});


			tinymce.init({
				selector:'textarea',
				plugins: "image",
				width: 800,
				height: 500,
				browser_spellcheck: true,
				resize: false,

			});
			 
			// When message is clicked, hide it
			$('.messageAlert').click(function(){			  
				$(this).animate({top: -$(this).outerHeight()}, 500);
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