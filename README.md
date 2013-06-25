Tophat Gamer - READ ME

URL to live site:
tophatgamers.com

setup for localhost:
base_url: http://localhost:8888/TophatGamers
username: root
database: (name of database)
password: root

GitHub:
https://github.com/surferdie141/TophatGamers

the previous save are all from localhost setup and the latest save is for last site

Quick overview of site:
Tophat gamers is a community driven site for gamers. It gives you the ability to find new people, message them, watch their videos and read their blogs. Tophat gamers is built around the idea of making a better gamer community  by making new connections and new friendships. The site will help the world understand that the gamer community is not as bad or immature as it is given out to be. Tophatgamers.com,  come and get fancy with us.


How the site functions:
each controller has a different view and functionality attached to it.  The welcome controller is for the landing page. Logging in is handled by the verifyLogin controller and registering is handled by the register controller.  The search bar on the landing page goes to controller searchHome, which loads the results in the view.  To continue searching, it uses the search controller.  Once a selection is made, it leads to the profile controller. The profile controller loads all of the users info and pulls the videos using the Youtube API. If you are logged in, it allows you to message the user.  To watch the stream, it goes to the stream controller and then pulls from the Twitch.tv API.  If any post are made, it leads to the post controller.  If you are logged in, it allows you comment on the post.  Once you are logged in, it gives you the ability to edit your account information ex. upload an image or change my username.  The images uploaded go to the upload folder.  Once update, it will send you to the conformation page.  It will also allow you to edit your previous post.  That is handled by the editpost controller.


Developed by Angel Diaz
Email:   Angel.L.Diaz123@gmail.com
Webiste: www.angelldiaz.com
Phone:   (352) 214-8285