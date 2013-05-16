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
		<a href="<?php echo base_url('index.php/search'); ?>" class="logo_link"><img src="<?php echo base_url('images/tophatGamers.png'); ?>" class="top_logo"></a>
		<header>
			<button class="top_login_button">Log In</button>
			<a href="#" class="top_register_link">Register</a>
		</header>
	</div>
	<div class="top_banner"></div>

	<section class="profile_div">
		<div class="profile_buttons">
			<button class="message">Message</button>
			<a href="<?php echo base_url("index.php/stream/user/$profile[twitch_username]"); ?>" target="_blank"><button class="stream">Watch Stream</button></a>
			<button>Follow</button>
		</div>
		<div id="profile_top">
			<img src="<?php echo base_url("$profile[user_img]"); ?>" class="profile_img">
			<p class="title">Username</p>
			<p class="info"><?php echo $profile['username']; ?></p>
			<p class="title">Game Type</p>
			<p class="info"><?php echo $profile['gametype']; ?></p>
		</div>
		<div id="profile_bio">
			<p class="bio_title">Player Biography</p>
			<p class="bio"><?php echo $profile['bio']; ?></p>
		</div>
		<div id="profile_video">
		</div>
		<div id="profile_post">
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
		var username;
		username = <?php echo $profile['youtube_username']; ?>;

        var videos = document.getElementById('profile_video');

        $.ajax({
            type: "GET",
            //the username of the youtube account
            url: "https://gdata.youtube.com/feeds/api/users//uploads",
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
                    video.innerHTML='<iframe id="player" type="text/html" width="640" height="390" src="http://www.youtube.com/embed/'+video_id+'?enablejsapi=1" frameborder="0"></iframe>';
                    //add it to the videos div
                    videos.appendChild(video);
                }
            },
            error: function(){
                alert("not working");
            }
        });

        </script>

</body>
</html>