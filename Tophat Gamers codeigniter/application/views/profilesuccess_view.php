<!DOCTYPE html>
<html>
<head>
	<title>Profile | Tophat Gamers</title>
	<link href="<?php echo base_url('images/favicon.ico'); ?>" rel="icon" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Didact+Gothic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/main.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('magnific-popup/magnific-popup.css'); ?>">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="<?php echo base_url('magnific-popup/jquery.magnific-popup.js'); ?>"></script>
</head>
<body>
	<div class="top">
		<div class="successAlert messageAlert">
			<h3>Message Sent</h3>
			<p>Now let's wait for them to respond.</p>
		</div>

		<div class="nav_holder">
		<div class="login_form" style="color:white;">
			<?php
				// hidden login form
				$attributes = array('id'=>'message_form','class'=>'white-popup-block','class'=>'mfp-hide'); 
				echo form_open('messageuser',$attributes); ?>
				<div class="login_form_div">
					<h3>Message <?php echo $profile['username']; ?></h3>
					<label for="message">Title:</label>
				    <input type="text" name="title">
				    <br/>
				    <label for="message">Message:</label>
				    <textarea rows="15" cols="25" class="message_user" name="message"></textarea>
				    <br/>
				    <input type="hidden" value="<?php echo $profile['user_id']; ?>" name="user_id">
				    <input type="submit" value="Message">
				</div>
			</form>
		</div>
			<a href="<?php echo base_url('index.php/search'); ?>" class="logo_link"><img src="<?php echo base_url('images/tophatGamers.png') ?>" class="top_logo"></a>
			<header>
				<a href="<?php echo base_url('index.php/search'); ?>" class="search_link navigation">Search</a>
				<span class="line">|</span>
				<a class="dashboard_link navigation" href="<?php echo base_url('index.php/dashboard/'); ?>">Dashboard</a>
				<span class="line">|</span>
				<a class="create_link navigation" href="<?php echo base_url('index.php/createPost'); ?>">Create a Post</a>
				<span class="line">|</span>
				<a class="read_link navigation" href="<?php echo base_url('index.php/readMail'); ?>">Mail</a>
				<a class="logout_link navigation" href="<?php echo base_url('index.php/dashboard/logout'); ?>">Logout</a>
			</header>
		</div>
	</div>
	<div class="top_banner"></div>

	<section class="profile_div">
		<div class="profile_buttons">
			<a class="msgBtn" href="#message_form"><button class="message">Message</button></a>
			<a href="<?php echo base_url("index.php/stream/user/$profile[twitch_username]"); ?>" target="_blank"><button class="stream">Watch Stream</button></a>
			<button>Follow</button>
		</div>
		<div id="profile_top">
			<img src="<?php echo base_url("$profile[user_img]"); ?>" class="profile_img">
			<p class="title">Username</p>
			<p class="info"><?php echo $profile['username']; ?></p>
			<p class="title">Favorite Game Type</p>
			<p class="info"><?php echo $profile['gametype']; ?></p>
		</div>
		<div class="list">
			<ul>
				<li class="first">Bio</li>
				<li class="second">Videos</li>
				<li class="third">Posts</li>
			</ul>
		</div>

		<div id="profile_bio">
			<p class="bio_title">Player Biography</p>
			<p class="bio"><?php
					if(isset($profile['bio'])){
						echo $profile['bio'];
					}else{
						echo "No bio available";
					};
				?></p>
		</div>
		<div id="profile_video">
			<h1>Videos</h1>
		</div>
		<div id="profile_post">
			<h1>Post</h1>
			<?php 
			if(sizeof($post) > 0){
				foreach($post as $item){ ?>
				<div class="blog_container">
					<a class="blogTitle_link" href="<?php echo base_url("index.php/post/blog/$item[post_id]"); ?>">
					<?php echo $item['title'].'</a></br>';
					echo $item['post'].'</br>'; ?>
				</div>
			<?php }
			}else{
				echo "No blogs made";
			}?>
		</div>
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
			showMessage('successAlert');

			$('.successAlert').click(function(){			  
				$(this).animate({top: -$(this).outerHeight()}, 500);
			});

			$('.msgBtn').magnificPopup({ 
			  type: 'inline'
				// other options
			});

			$('.first').addClass('activeList');

			$('#profile_video').hide();
			$('#profile_post').hide();

			$('.first').click(function(){
				$('.second').removeClass('activeList');
				$('.third').removeClass('activeList');
				$('.first').addClass('activeList');
				$('#profile_bio').show();
				$('#profile_video').hide();
				$('#profile_post').hide();
			});

			$('.second').click(function(){
				$('.second').addClass('activeList');
				$('.third').removeClass('activeList');
				$('.first').removeClass('activeList');
				$('#profile_bio').hide();
				$('#profile_video').show();
				$('#profile_post').hide();
			});

			$('.third').click(function(){
				$('.second').removeClass('activeList');
				$('.third').addClass('activeList');
				$('.first').removeClass('activeList');
				$('#profile_bio').hide();
				$('#profile_video').hide();
				$('#profile_post').show();
			});
		});

		var username = '<?= $profile['youtube_username'] ?>';

        var videos = document.getElementById('profile_video');

        if(username == ''){
        	videos.innerHTML='<h1>Videos</h1><p>No videos avialable</p>';
        }else{
	        $.ajax({
	            type: "GET",
	            //the username of the youtube account
	            url: "https://gdata.youtube.com/feeds/api/users/" + username + "/uploads",
	            dataType: "json",
	            //switch it to json instead of xml
	            data: {alt: 'json'},
	            success: function(response) {
	                //loop through all of the entries which are the videos
	                for(var i=0; i < response.feed.entry.length; i++){

	                    //the full url we are going to split
	                    var url = response.feed.entry[i].id.$t,
	                    //the part that we are getting rid of
	                    parts = url.toString().split("http://gdata.youtube.com/feeds/api/videos/"),
	                    //the video id that I will need so I can embed it into the iframe
	                    video_id = parts[1].toString(),
	                    //creates the div for the iframe and youtube player
	                    video = document.createElement("ytplayer");
	                    //add the frame and the video that will be shown
	                    video.innerHTML='<div class="youtube_video"><iframe id="player" type="text/html" width="300" height="169" src="http://www.youtube.com/embed/'+video_id+'?enablejsapi=1" frameborder="0"></iframe></div>';
	                    //add it to the videos div
	                    videos.appendChild(video);
	                }
	            },
	            error: function(){
	               videos.innerHTML('<p>No videos available</p>');
	            }
	        });
		}

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