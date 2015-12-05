# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.38)
# Database: Profile
# Generation Time: 2015-12-05 21:07:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table ci_sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`),
  CONSTRAINT `ci_sessions_ibfk_1` FOREIGN KEY (`timestamp`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table Jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Jobs`;

CREATE TABLE `Jobs` (
  `jobsid` int(50) NOT NULL AUTO_INCREMENT,
  `jname` varchar(50) NOT NULL DEFAULT '',
  `jstate` varchar(50) NOT NULL DEFAULT '',
  `jcity` varchar(50) NOT NULL DEFAULT '',
  `slug` varchar(128) NOT NULL DEFAULT '',
  `text` text NOT NULL,
  PRIMARY KEY (`jobsid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;

INSERT INTO `news` (`id`, `title`, `slug`, `text`)
VALUES
	(3,'Banana Vape ','banana-vape','Banana Vapes are hard to digest because of the flavor that seems fake, but check out this one from Noble!'),
	(7,'Looper','looper','Has anyone Found a Clone recipe for the liquid Looper by ANML Vapes??'),
	(8,'Eleaf 50w','eleaf-50w','Awesome device!');

/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table resume
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resume`;

CREATE TABLE `resume` (
  `resumeid` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `lname` int(50) DEFAULT NULL,
  `phone` decimal(10,0) DEFAULT NULL,
  `file_upload` varchar(50) DEFAULT NULL,
  `jobid` int(50) NOT NULL,
  PRIMARY KEY (`resumeid`),
  KEY `jobid` (`jobid`),
  CONSTRAINT `resume_ibfk_1` FOREIGN KEY (`jobid`) REFERENCES `Jobs` (`jobsid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `avatar` varchar(255) DEFAULT 'default.jpg',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_confirmed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `fname` varchar(20) DEFAULT '',
  `lname` varchar(20) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `email`, `password`, `avatar`, `created_at`, `updated_at`, `is_admin`, `is_confirmed`, `is_deleted`, `fname`, `lname`)
VALUES
	(1,'Batman41','kyleszymanski@gmail.com','$2y$10$2iK2lR5u2yghEHy6NS62NuIUhe5eFqvVdkJVaanD7M3zMNrXpPOci','default.jpg','2015-12-05 06:19:18',NULL,0,0,0,'',''),
	(3,'WalkingMoth','TheEmail@gmai.com','$2y$10$YzOrbUpfeXfK20tZUQMJH.k0efFhlQFtGv5KwmTZRvcPuROqhblwC','default.jpg','2015-12-05 10:30:27',NULL,0,0,0,'',''),
	(4,'TheMan','student@hotmail.com','$2y$10$LXFOFy5MWaFAqlMjbKjAm.xXybuMSl1tBsoi1wHeRrOjZE3sCD1A6','default.jpg','2015-12-05 18:30:38',NULL,0,0,0,'',''),
	(5,'hamster','hammy','$2y$10$9wx1ymHW07kJPNrNVCrCPuQ7eU173ndiuoFf7V9A4X25uQo5qCcpG','default.jpg','2015-12-05 18:39:13',NULL,0,0,0,'',''),
	(6,'Szymanski41','kyle','$2y$10$5MLwWpLzF3uzNf.MowUbBOiFc5Xe.OsHgs3lrsC2mhhnZ4kcNQzPi','default.jpg','2015-12-05 18:41:03',NULL,0,0,0,'',''),
	(7,'Szy1234','student@wwww.com','$2y$10$VkMQJPiAegLNHvmprChoFODlxKJejYvse61qDw/R0Z1j2O14hbpnC','default.jpg','2015-12-05 18:48:06',NULL,0,0,0,'Kyle','jame'),
	(8,'hotdog','student@www.com','$2y$10$pkqNBu.tIhFfbyfe55tgUOkgrz1xda7925Zd8CVObgOQBMF3LyCC6','default.jpg','2015-12-05 20:16:39',NULL,0,0,0,'meaty','potroast');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table vape_gear
# ------------------------------------------------------------

DROP TABLE IF EXISTS `vape_gear`;

CREATE TABLE `vape_gear` (
  `vape_gearid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `mod` varchar(50) DEFAULT NULL,
  `tank` varchar(50) DEFAULT NULL,
  `battery_set` varchar(50) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`vape_gearid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `vape_gear` WRITE;
/*!40000 ALTER TABLE `vape_gear` DISABLE KEYS */;

INSERT INTO `vape_gear` (`vape_gearid`, `username`, `mod`, `tank`, `battery_set`, `id`)
VALUES
	(1,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `vape_gear` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
