# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.25)
# Database: Tophat Gamers
# Generation Time: 2013-05-31 17:48:16 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table blogs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `post_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `post` longtext,
  `title` text,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;

INSERT INTO `blogs` (`post_id`, `user_id`, `post`, `title`)
VALUES
	(4,1,'<p>Bacon ipsum dolor sit amet bresaola flank doner venison chicken pork jowl pig beef ribs meatloaf salami tail short loin. Pancetta corned beef ball tip, kielbasa jowl bacon hamburger ground round short loin shankle. Pastrami andouille doner cow drumstick pancetta, bacon ham brisket pork chop chicken jowl shankle ham hock. Swine bacon chuck andouille. Tenderloin corned beef swine sausage beef pork belly.</p>\n<p>Cow venison ham hock, flank prosciutto bresaola turkey shoulder pork chop pig beef ball tip. Pork brisket venison pork belly pork chop. Hamburger pork belly tenderloin swine pig corned beef spare ribs boudin ham hock ball tip jerky turducken shoulder tail tri-tip. Pig hamburger short ribs, bresaola leberkas short loin strip steak doner ground round kielbasa swine bacon. Cow swine chuck prosciutto sirloin, turkey short ribs tenderloin pig strip steak.</p>','update title test'),
	(5,1,'<p>Bacon ipsum dolor sit amet bresaola flank doner venison chicken pork jowl pig beef ribs meatloaf salami tail short loin. Pancetta corned beef ball tip, kielbasa jowl bacon hamburger ground round short loin shankle. Pastrami andouille doner cow drumstick pancetta, bacon ham brisket pork chop chicken jowl shankle ham hock. Swine bacon chuck andouille. Tenderloin corned beef swine sausage beef pork belly.</p>\n<p>Cow venison ham hock, flank prosciutto bresaola turkey shoulder pork chop pig beef ball tip. Pork brisket venison pork belly pork chop. Hamburger pork belly tenderloin swine pig corned beef spare ribs boudin ham hock ball tip jerky turducken shoulder tail tri-tip. Pig hamburger short ribs, bresaola leberkas short loin strip steak doner ground round kielbasa swine bacon. Cow swine chuck prosciutto sirloin, turkey short ribs tenderloin pig strip steak.</p>\n<p>Shank pig meatloaf tenderloin, pastrami strip steak bacon short loin sirloin. Sausage strip steak shankle hamburger, ribeye biltong chicken capicola frankfurter bacon prosciutto. Andouille kielbasa hamburger boudin. Tongue boudin t-bone bacon turkey venison. Filet mignon turkey t-bone tenderloin, boudin shankle sirloin. Sausage sirloin corned beef, ball tip turducken hamburger fatback.</p>','update this crap'),
	(6,1,'<p>Bacon ipsum dolor sit amet bresaola flank doner venison chicken pork jowl pig beef ribs meatloaf salami tail short loin. Pancetta corned beef ball tip, kielbasa jowl bacon hamburger ground round short loin shankle. Pastrami andouille doner cow drumstick pancetta, bacon ham brisket pork chop chicken jowl shankle ham hock. Swine bacon chuck andouille. Tenderloin corned beef swine sausage beef pork belly.</p>\n<p>Cow venison ham hock, flank prosciutto bresaola turkey shoulder pork chop pig beef ball tip. Pork brisket venison pork belly pork chop. Hamburger pork belly tenderloin swine pig corned beef spare ribs boudin ham hock ball tip jerky turducken shoulder tail tri-tip. Pig hamburger short ribs, bresaola leberkas short loin strip steak doner ground round kielbasa swine bacon. Cow swine chuck prosciutto sirloin, turkey short ribs tenderloin pig strip steak.</p>\n<p>Shank pig meatloaf tenderloin, pastrami strip steak bacon short loin sirloin. Sausage strip steak shankle hamburger, ribeye biltong chicken c<img src=\"http://www.shockinglydelicious.com/wp-content/uploads/2010/08/Is-anything-better-than-bacon...no_.jpg\" alt=\"bacon\" width=\"295\" height=\"295\" />apicola frankfurter bacon prosciutto. Andouille kielbasa hamburger boudin. Tongue boudin t-bone bacon turkey venison. Filet mignon turkey t-bone tenderloin, boudin shankle sirloin. Sausage sirloin corned beef, ball tip turducken hamburger fatback.</p>\n<p>Tri-tip doner pig ribeye tenderloin ground round, corned beef prosciutto swine. Turducken pork chop sausage corned beef spare ribs. Brisket rump short ribs bresaola. Short ribs pork chop sausage, ground round shoulder meatloaf shank jerky meatball pancetta beef fatback. Rump pancetta pork, kielbasa corned beef pork loin boudin venison drumstick sausage chicken beef shank jowl.</p>\n<p>Capicola prosciutto boudin chicken pork belly brisket short ribs pig ball tip cow meatball tail shoulder pastrami hamburger. T-bone shankle strip steak fatback. Prosciutto sausage shank ball tip, shankle beef ribs hamburger venison ham drumstick shoulder cow strip steak bresaola. Shankle short ribs ground round tri-tip prosciutto cow, biltong pork bresaola jowl doner. Sausage short loin meatball, t-bone short ribs pork loin capicola frankfurter beef ham hock.</p>','Bacon Baacon Baaacon Baaaacon'),
	(7,1,'<p>Bacon ipsum dolor sit amet bresaola flank doner venison chicken pork jowl pig beef ribs meatloaf salami tail short loin. Pancetta corned beef ball tip, kielbasa jowl bacon hamburger ground round short loin shankle. Pastrami andouille doner cow drumstick pancetta, bacon ham brisket pork chop chicken jowl shankle ham hock. Swine bacon chuck andouille. Tenderloin corned beef swine sausage beef pork belly.</p>\n<p>Cow venison ham hock, flank prosciutto bresaola turkey shoulder pork chop pig beef ball tip. Pork brisket venison pork belly pork chop. Hamburger pork belly tenderloin swine pig corned beef spare ribs boudin ham hock ball tip jerky turducken shoulder tail tri-tip. Pig hamburger short ribs, bresaola leberkas short loin strip steak doner ground round kielbasa swine bacon. Cow swine chuck prosciutto sirloin, turkey short ribs tenderloin pig strip steak.</p>\n<p>Shank pig meatloaf tenderloin, pastrami strip steak bacon short loin sirloin. Sausage strip steak shankle hamburger, ribeye biltong chicken capicola frankfurter bacon prosciutto. Andouille kielbasa hamburger boudin. Tongue boudin t-bone bacon turkey venison. Filet mignon turkey t-bone tenderloin, boudin shankle sirloin. Sausage sirloin corned beef, ball tip turducken hamburger fatback.</p>','test'),
	(8,1,'<p>Bacon ipsum dolor sit amet bresaola flank doner venison chicken pork jowl pig beef ribs meatloaf salami tail short loin. Pancetta corned beef ball tip, kielbasa jowl bacon hamburger ground round short loin shankle. Pastrami andouille doner cow drumstick pancetta, bacon ham brisket pork chop chicken jowl shankle ham hock. Swine bacon chuck andouille. Tenderloin corned beef swine sausage beef pork belly.</p>\n<p>Cow venison ham hock, flank prosciutto bresaola turkey shoulder pork chop pig beef ball tip. Pork brisket venison pork belly pork chop. Hamburger pork belly tenderloin swine pig corned beef spare ribs boudin ham hock ball tip jerky turducken shoulder tail tri-tip. Pig hamburger short ribs, bresaola leberkas short loin strip steak doner ground round kielbasa swine bacon. Cow swine chuck prosciutto sirloin, turkey short ribs tenderloin pig strip steak.</p>\n<p>Shank pig meatloaf tenderloin, pastrami strip steak bacon short loin sirloin. Sausage strip steak shankle hamburger, ribeye biltong chicken capicola frankfurter bacon prosciutto. Andouille kielbasa hamburger boudin. Tongue boudin t-bone bacon turkey venison. Filet mignon turkey t-bone tenderloin, boudin shankle sirloin. Sausage sirloin corned beef, ball tip turducken hamburger fatback.</p>','this is a test'),
	(9,1,'<p>lkajisjfaoirjweof;kwejewkl</p>','new post');

/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table mail
# ------------------------------------------------------------

DROP TABLE IF EXISTS `mail`;

CREATE TABLE `mail` (
  `mail_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `mailer_id` int(11) DEFAULT NULL,
  `message` longtext,
  `title` longtext,
  PRIMARY KEY (`mail_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `mail_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `mail` WRITE;
/*!40000 ALTER TABLE `mail` DISABLE KEYS */;

INSERT INTO `mail` (`mail_id`, `user_id`, `mailer_id`, `message`, `title`)
VALUES
	(3,12,1,'kristy hi','test'),
	(7,12,1,'hi','test'),
	(10,12,1,'lets see how this works','test message'),
	(12,1,13,'a message from another user','test message');

/*!40000 ALTER TABLE `mail` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table profile
# ------------------------------------------------------------

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `profile_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `bio` longtext,
  PRIMARY KEY (`profile_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;

INSERT INTO `profile` (`profile_id`, `user_id`, `bio`)
VALUES
	(1,1,'<p>Bacon ipsum dolor sit amet bresaola flank doner venison chicken pork jowl pig beef ribs meatloaf salami tail short loin. Pancetta corned beef ball tip, kielbasa jowl bacon hamburger ground round short loin shankle. Pastrami andouille doner cow drumstick pancetta, bacon ham brisket pork chop chicken jowl shankle ham hock. Swine bacon chuck andouille. Tenderloin corned beef swine sausage beef pork belly.</p>\n<p>Cow venison ham hock, flank prosciutto bresaola turkey shoulder pork chop pig beef ball tip. Pork brisket venison pork belly pork chop. Hamburger pork belly tenderloin swine pig corned beef spare ribs boudin ham hock ball tip jerky turducken shoulder tail tri-tip. Pig hamburger short ribs, bresaola leberkas short loin strip steak doner ground round kielbasa swine bacon. Cow swine chuck prosciutto sirloin, turkey short ribs tenderloin pig strip steak.</p>'),
	(2,2,'<p>blank</p>'),
	(3,3,'<p>blank</p>'),
	(4,4,'<p>blank</p>');

/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` text,
  `password` text,
  `email` text,
  `youtube_username` text,
  `twitch_username` text,
  `user_img` text,
  `gametype` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `youtube_username`, `twitch_username`, `user_img`, `gametype`)
VALUES
	(1,'angel','5f4dcc3b5aa765d61d8327deb882cf99','angel@email.com','surferdie141','DanDinh','uploads/tophatGamers.png','Sports'),
	(2,'surferdie141',NULL,'user@email.com','surferdie141','surferdie141','images/basic_profile.jpg','fps'),
	(3,'General Mustacho',NULL,NULL,NULL,NULL,'images/basic_profile.jpg','Test'),
	(4,'ben','81dc9bdb52d04dc20036dbd8313ed055','ben@email.com',NULL,NULL,'images/basic_profile.jpg','mmo'),
	(5,'me','81dc9bdb52d04dc20036dbd8313ed055','me@email.com',NULL,NULL,'images/basic_profile.jpg','mmo'),
	(7,'test','81dc9bdb52d04dc20036dbd8313ed055','test@email.com',NULL,NULL,'images/basic_profile.jpg',NULL),
	(8,'alanjames1987','680ab8940635a86b513253d4e836f008','alanjames1987@gmail.com',NULL,NULL,'images/basic_profile.jpg',NULL),
	(9,'darth_ire','fc5e038d38a57032085441e7fe7010b0','bisike.nnadi@gmail.com','bnnadi','darth_ire','images/basic_profile.jpg',''),
	(10,'Blah','912ec803b2ce49e4a541068d495ab570','blah@blah.com','','Blah','images/basic_profile.jpg',''),
	(11,'angel','162bc46168bd6730edcedb39e83bf50a','123@email.com','','angel','images/basic_profile.jpg',''),
	(12,'kmills006','e62e3ce65b4bd91d57353fa9473696e2','miller.kristy06@gmail.com','','','images/basic_profile.jpg','MMO'),
	(13,'sam','5f4dcc3b5aa765d61d8327deb882cf99','sam@email.com','','','images/basic_profile.jpg','Arcade');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
