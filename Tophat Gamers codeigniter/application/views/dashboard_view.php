<!DOCTYPE html>
<html>
	<head>
   		<title>Simple Login with CodeIgniter - Private Area</title>
   		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
   		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/main.css') ?>">
 	</head>
 	<body>
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
		</div>

	   <h1>Home</h1>
	   <h2>Welcome <?php echo $username; ?>!</h2>
	   <a href="dashboard/logout">Logout</a>

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

 </body>
</html>