/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.26 : Database - bookstoredb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bookstoredb` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `bookstoredb`;

/*Table structure for table `author` */

DROP TABLE IF EXISTS `author`;

CREATE TABLE `author` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `born` date DEFAULT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introduce` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `author` */

insert  into `author`(`id`,`name`,`born`,`field`,`introduce`) values (1,'Hoàng Ngọc Hạnh','1994-12-14','Tiểu thuyết, truyện ngắn','Là người sống tận tâm với sách');

/*Table structure for table `book` */

DROP TABLE IF EXISTS `book`;

CREATE TABLE `book` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `introduce` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `page` int(11) NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_author` int(10) unsigned NOT NULL,
  `id_produce` int(10) unsigned NOT NULL,
  `id_category` int(10) unsigned NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Tiếng Việt',
  `format` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(15,3) NOT NULL,
  `saleoff` decimal(2,2) DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `id_author` (`id_author`),
  KEY `id_produce` (`id_produce`),
  KEY `id_category` (`id_category`),
  CONSTRAINT `book_ibfk_1` FOREIGN KEY (`id_author`) REFERENCES `author` (`id`),
  CONSTRAINT `book_ibfk_2` FOREIGN KEY (`id_produce`) REFERENCES `produce` (`id`),
  CONSTRAINT `book_ibfk_3` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `book` */

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `category` */

insert  into `category`(`id`,`name`) values (31,'Sách kinh điển'),(32,'Chọn lọc'),(34,'khocs tham trong dem'),(35,'Khóc thầm trong đêm :v');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) unsigned NOT NULL,
  `ojectto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `feedback` */

/*Table structure for table `kind` */

DROP TABLE IF EXISTS `kind`;

CREATE TABLE `kind` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `kind` */

insert  into `kind`(`id`,`name`) values (1,'Trinh thám'),(2,'Tiểu thuyết'),(3,'Tình cảm'),(4,'Truyện ngắn');

/*Table structure for table `kindofbook` */

DROP TABLE IF EXISTS `kindofbook`;

CREATE TABLE `kindofbook` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_book` int(10) unsigned NOT NULL,
  `id_kind` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_book` (`id_book`),
  KEY `id_kind` (`id_kind`),
  CONSTRAINT `kindofbook_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `book` (`id`),
  CONSTRAINT `kindofbook_ibfk_2` FOREIGN KEY (`id_kind`) REFERENCES `kind` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `kindofbook` */

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descrip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `accessed` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `id_poster` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_poster` (`id_poster`),
  CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_poster`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `news` */

/*Table structure for table `order` */

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) unsigned NOT NULL,
  `id_book` int(10) unsigned NOT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `payable` decimal(15,3) NOT NULL,
  `orderdate` datetime NOT NULL,
  `payment` tinyint(1) DEFAULT '0',
  `orderaddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_book` (`id_book`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `book` (`id`),
  CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `order` */

/*Table structure for table `produce` */

DROP TABLE IF EXISTS `produce`;

CREATE TABLE `produce` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varbinary(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `produce` */

/*Table structure for table `tabbook` */

DROP TABLE IF EXISTS `tabbook`;

CREATE TABLE `tabbook` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_tag` int(10) unsigned NOT NULL,
  `id_book` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_book` (`id_book`),
  KEY `id_tag` (`id_tag`),
  CONSTRAINT `tabbook_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `book` (`id`),
  CONSTRAINT `tabbook_ibfk_2` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tabbook` */

/*Table structure for table `tag` */

DROP TABLE IF EXISTS `tag`;

CREATE TABLE `tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tag` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `useragent` varbinary(255) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `born` date NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `accessed` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `loginnumber` int(10) unsigned NOT NULL,
  `acctive` tinyint(1) DEFAULT '0',
  `admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`email`,`password`,`salt`,`useragent`,`fullname`,`born`,`address`,`phone`,`created`,`accessed`,`modified`,`loginnumber`,`acctive`,`admin`) values (1,'superadmin@admin.com','admin123','','','Super Administrator','2016-01-01','UIT','000','2016-01-04 00:00:00','2016-01-04 00:00:00','2016-01-04 00:00:00',0,1,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
