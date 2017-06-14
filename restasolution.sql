/*
SQLyog Professional v12.4.1 (64 bit)
MySQL - 5.7.14 : Database - restasolution
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`restasolution` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `restasolution`;

/*Table structure for table `download_foto` */

DROP TABLE IF EXISTS `download_foto`;

CREATE TABLE `download_foto` (
  `id_fi` int(11) NOT NULL AUTO_INCREMENT,
  `id_di` int(11) NOT NULL,
  `nama_foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_fi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `download_foto` */

/*Table structure for table `download_item` */

DROP TABLE IF EXISTS `download_item`;

CREATE TABLE `download_item` (
  `id_di` int(11) NOT NULL AUTO_INCREMENT,
  `nama_item` varchar(50) NOT NULL,
  `deskripsi_singkat` varchar(50) NOT NULL,
  `deskripsi_full` text,
  `kategori` int(3) DEFAULT NULL,
  `sub_kategori` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_di`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `download_item` */

/*Table structure for table `download_kategori` */

DROP TABLE IF EXISTS `download_kategori`;

CREATE TABLE `download_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `download_kategori` */

insert  into `download_kategori`(`id_kategori`,`nama_kategori`) values 
(1,'Software'),
(2,'Aplikasi / Program'),
(3,'E-Book'),
(4,'Template Website');

/*Table structure for table `download_sub_kategori` */

DROP TABLE IF EXISTS `download_sub_kategori`;

CREATE TABLE `download_sub_kategori` (
  `int_sk` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `nama_sk` varchar(50) NOT NULL,
  PRIMARY KEY (`int_sk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `download_sub_kategori` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
