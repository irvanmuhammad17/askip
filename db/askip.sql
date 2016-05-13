/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.49-0ubuntu0.14.04.1 : Database - askip
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`askip` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `askip`;

/*Table structure for table `divisi` */

DROP TABLE IF EXISTS `divisi`;

CREATE TABLE `divisi` (
  `id_divisi` varchar(50) NOT NULL,
  `nama_divisi` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_divisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `divisi` */

insert  into `divisi`(`id_divisi`,`nama_divisi`,`username`,`password`,`level`) values ('1','IT','it','it','admin');

/*Table structure for table `instansi` */

DROP TABLE IF EXISTS `instansi`;

CREATE TABLE `instansi` (
  `id_instansi` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(160) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `update_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_instansi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `instansi` */

insert  into `instansi`(`id_instansi`,`nama`,`alamat`,`logo`,`update_by`) values (1,'Yayasan Bintara - Cakra Buana ','Jl Raya Sawangan No 91','LOGO-BINTARA.png','');

/*Table structure for table `surat_keluar` */

DROP TABLE IF EXISTS `surat_keluar`;

CREATE TABLE `surat_keluar` (
  `id_sk` varchar(50) NOT NULL,
  `no_sk` varchar(50) DEFAULT NULL,
  `id_div` varchar(50) DEFAULT NULL,
  `tgl_surat` datetime DEFAULT NULL,
  `no_index` varchar(20) DEFAULT NULL,
  `perihal` varchar(100) DEFAULT NULL,
  `to_1` varchar(50) DEFAULT NULL,
  `to_2` varchar(50) DEFAULT NULL,
  `isi_ringkas` varchar(500) DEFAULT NULL,
  `isi_disposisi` varchar(500) DEFAULT NULL,
  `tanggapan_1` varchar(500) DEFAULT NULL,
  `tanggapan_2` varchar(500) DEFAULT NULL,
  `catatan` varchar(500) DEFAULT NULL,
  `insert_by` varchar(50) DEFAULT NULL,
  `update_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_sk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `surat_keluar` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
