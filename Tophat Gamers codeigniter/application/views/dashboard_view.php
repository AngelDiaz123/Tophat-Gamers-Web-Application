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
</head>
 	<body>
 		<div class="top">
			<a href="<?php echo base_url('index.php/search'); ?>" class="logo_link"><img src="<?php echo base_url('images/tophatGamers.png') ?>" class="top_logo"></a>
			<header>
				<a class="logout_link" href="dashboard/logout">Logout</a>
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

		<div class="successAlert messageAlert">
				 <h3>You Logged In</h3>
				 <p>Welcome Back <?php echo $username; ?>!</p>
		</div>

	   <h1>Home</h1>

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