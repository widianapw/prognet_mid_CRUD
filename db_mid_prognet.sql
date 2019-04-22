/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.1.35-MariaDB : Database - db_mid_prognet
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_mid_prognet` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_mid_prognet`;

/*Table structure for table `tb_mahasiswa` */

DROP TABLE IF EXISTS `tb_mahasiswa`;

CREATE TABLE `tb_mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_prodi` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `telpon` varchar(13) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_prodi` (`id_prodi`),
  CONSTRAINT `tb_mahasiswa_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `tb_prodi` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_mahasiswa` */

insert  into `tb_mahasiswa`(`id`,`id_prodi`,`nama`,`telpon`,`email`,`gender`,`deleted_at`) values 
(1,1,'widiana','082146456432','widianaputraa@gmail.com','L',NULL),
(3,1,'widiana','082146456432','widianaputraa@gmail.com','L','2019-04-22 22:29:31');

/*Table structure for table `tb_prodi` */

DROP TABLE IF EXISTS `tb_prodi`;

CREATE TABLE `tb_prodi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prodi` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_prodi` */

insert  into `tb_prodi`(`id`,`prodi`,`deleted_at`) values 
(1,'Teknologi Informasi',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
