/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.34 : Database - paramarta
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `t_alamat` */

CREATE TABLE `t_alamat` (
  `id_alamat` int(11) NOT NULL AUTO_INCREMENT,
  `id_murid` int(11) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `dusun` varchar(150) DEFAULT NULL,
  `kelurahan` varchar(150) DEFAULT NULL,
  `kecamatan` varchar(150) DEFAULT NULL,
  `kabupaten` varchar(150) DEFAULT NULL,
  `provinsi` varchar(1510) DEFAULT NULL,
  `rtrw` varchar(8) DEFAULT NULL,
  `kodepos` varchar(8) DEFAULT NULL,
  `alat` char(1) DEFAULT NULL,
  `jenis` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_alamat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_alamat` */

/*Table structure for table `t_asal` */

CREATE TABLE `t_asal` (
  `id_asal` int(11) NOT NULL,
  `id_murid` int(11) DEFAULT NULL,
  `nisn` varchar(25) DEFAULT NULL,
  `no_ijazah` varchar(100) DEFAULT NULL,
  `no_skhun` varchar(100) DEFAULT NULL,
  `no_ujian` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_asal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_asal` */

/*Table structure for table `t_daftar` */

CREATE TABLE `t_daftar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_daftar` */

insert  into `t_daftar`(`id`,`username`,`password`,`email`,`hash`,`active`) values (1,'achmadmaezar','202cb962ac59075b964b07152d234b70','aembeaaja@gmail.com','bd4c9ab730f5513206b999ec0d90d1fb',1);

/*Table structure for table `t_ekskul` */

CREATE TABLE `t_ekskul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nm_ekskul` varchar(250) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT 'logo1.png',
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `t_ekskul` */

insert  into `t_ekskul`(`id`,`nm_ekskul`,`gambar`,`keterangan`) values (1,'Tari Tradisional','logo1.png','dapat dirumuskan sedagai wadah atau penyatuan beberapa media yang kemudian didefinisikan sebagai elemen-elemen pembentukan multimedia. Elemen-elemen tersebut seperti teks, gambar, suara, animasi, dan video. Multimedia merupakan suatu konsep dan teknologi baru bidang teknologi informasi, di mana informasi dalam bentuk teks, gambar, suara, animasi, dan video disatukan dalam computer untuk di simpan, diproses dan disajikan baik secara liner mahupun interaktif.');
insert  into `t_ekskul`(`id`,`nm_ekskul`,`gambar`,`keterangan`) values (2,'Teater','logo1.png','dapat dirumuskan sedagai wadah atau penyatuan beberapa media yang kemudian didefinisikan sebagai elemen-elemen pembentukan multimedia. Elemen-elemen tersebut seperti teks, gambar, suara, animasi, dan video. Multimedia merupakan suatu konsep dan teknologi baru bidang teknologi informasi, di mana informasi dalam bentuk teks, gambar, suara, animasi, dan video disatukan dalam computer untuk di simpan, diproses dan disajikan baik secara liner mahupun interaktif.');
insert  into `t_ekskul`(`id`,`nm_ekskul`,`gambar`,`keterangan`) values (3,'Musik','logo1.png','dapat dirumuskan sedagai wadah atau penyatuan beberapa media yang kemudian didefinisikan sebagai elemen-elemen pembentukan multimedia. Elemen-elemen tersebut seperti teks, gambar, suara, animasi, dan video. Multimedia merupakan suatu konsep dan teknologi baru bidang teknologi informasi, di mana informasi dalam bentuk teks, gambar, suara, animasi, dan video disatukan dalam computer untuk di simpan, diproses dan disajikan baik secara liner mahupun interaktif.');
insert  into `t_ekskul`(`id`,`nm_ekskul`,`gambar`,`keterangan`) values (4,'Seni Bela Diri','logo1.png','dapat dirumuskan sedagai wadah atau penyatuan beberapa media yang kemudian didefinisikan sebagai elemen-elemen pembentukan multimedia. Elemen-elemen tersebut seperti teks, gambar, suara, animasi, dan video. Multimedia merupakan suatu konsep dan teknologi baru bidang teknologi informasi, di mana informasi dalam bentuk teks, gambar, suara, animasi, dan video disatukan dalam computer untuk di simpan, diproses dan disajikan baik secara liner mahupun interaktif.');
insert  into `t_ekskul`(`id`,`nm_ekskul`,`gambar`,`keterangan`) values (5,'Volley Ball ','logo1.png','dapat dirumuskan sedagai wadah atau penyatuan beberapa media yang kemudian didefinisikan sebagai elemen-elemen pembentukan multimedia. Elemen-elemen tersebut seperti teks, gambar, suara, animasi, dan video. Multimedia merupakan suatu konsep dan teknologi baru bidang teknologi informasi, di mana informasi dalam bentuk teks, gambar, suara, animasi, dan video disatukan dalam computer untuk di simpan, diproses dan disajikan baik secara liner mahupun interaktif.');
insert  into `t_ekskul`(`id`,`nm_ekskul`,`gambar`,`keterangan`) values (6,'Futsal ','logo1.png','dapat dirumuskan sedagai wadah atau penyatuan beberapa media yang kemudian didefinisikan sebagai elemen-elemen pembentukan multimedia. Elemen-elemen tersebut seperti teks, gambar, suara, animasi, dan video. Multimedia merupakan suatu konsep dan teknologi baru bidang teknologi informasi, di mana informasi dalam bentuk teks, gambar, suara, animasi, dan video disatukan dalam computer untuk di simpan, diproses dan disajikan baik secara liner mahupun interaktif.');
insert  into `t_ekskul`(`id`,`nm_ekskul`,`gambar`,`keterangan`) values (7,'Basket Ball','logo1.png','dapat dirumuskan sedagai wadah atau penyatuan beberapa media yang kemudian didefinisikan sebagai elemen-elemen pembentukan multimedia. Elemen-elemen tersebut seperti teks, gambar, suara, animasi, dan video. Multimedia merupakan suatu konsep dan teknologi baru bidang teknologi informasi, di mana informasi dalam bentuk teks, gambar, suara, animasi, dan video disatukan dalam computer untuk di simpan, diproses dan disajikan baik secara liner mahupun interaktif.');
insert  into `t_ekskul`(`id`,`nm_ekskul`,`gambar`,`keterangan`) values (8,'Bulu Tangkis','logo1.png','dapat dirumuskan sedagai wadah atau penyatuan beberapa media yang kemudian didefinisikan sebagai elemen-elemen pembentukan multimedia. Elemen-elemen tersebut seperti teks, gambar, suara, animasi, dan video. Multimedia merupakan suatu konsep dan teknologi baru bidang teknologi informasi, di mana informasi dalam bentuk teks, gambar, suara, animasi, dan video disatukan dalam computer untuk di simpan, diproses dan disajikan baik secara liner mahupun interaktif.');
insert  into `t_ekskul`(`id`,`nm_ekskul`,`gambar`,`keterangan`) values (9,'Marawis','logo1.png','dapat dirumuskan sedagai wadah atau penyatuan beberapa media yang kemudian didefinisikan sebagai elemen-elemen pembentukan multimedia. Elemen-elemen tersebut seperti teks, gambar, suara, animasi, dan video. Multimedia merupakan suatu konsep dan teknologi baru bidang teknologi informasi, di mana informasi dalam bentuk teks, gambar, suara, animasi, dan video disatukan dalam computer untuk di simpan, diproses dan disajikan baik secara liner mahupun interaktif.');
insert  into `t_ekskul`(`id`,`nm_ekskul`,`gambar`,`keterangan`) values (10,'Broadcaster','logo1.png','dapat dirumuskan sedagai wadah atau penyatuan beberapa media yang kemudian didefinisikan sebagai elemen-elemen pembentukan multimedia. Elemen-elemen tersebut seperti teks, gambar, suara, animasi, dan video. Multimedia merupakan suatu konsep dan teknologi baru bidang teknologi informasi, di mana informasi dalam bentuk teks, gambar, suara, animasi, dan video disatukan dalam computer untuk di simpan, diproses dan disajikan baik secara liner mahupun interaktif.');
insert  into `t_ekskul`(`id`,`nm_ekskul`,`gambar`,`keterangan`) values (11,'Taekwondo','logo1.png','dapat dirumuskan sedagai wadah atau penyatuan beberapa media yang kemudian didefinisikan sebagai elemen-elemen pembentukan multimedia. Elemen-elemen tersebut seperti teks, gambar, suara, animasi, dan video. Multimedia merupakan suatu konsep dan teknologi baru bidang teknologi informasi, di mana informasi dalam bentuk teks, gambar, suara, animasi, dan video disatukan dalam computer untuk di simpan, diproses dan disajikan baik secara liner mahupun interaktif.');
insert  into `t_ekskul`(`id`,`nm_ekskul`,`gambar`,`keterangan`) values (12,'Islamic Club','logo1.png','dapat dirumuskan sedagai wadah atau penyatuan beberapa media yang kemudian didefinisikan sebagai elemen-elemen pembentukan multimedia. Elemen-elemen tersebut seperti teks, gambar, suara, animasi, dan video. Multimedia merupakan suatu konsep dan teknologi baru bidang teknologi informasi, di mana informasi dalam bentuk teks, gambar, suara, animasi, dan video disatukan dalam computer untuk di simpan, diproses dan disajikan baik secara liner mahupun interaktif.');

/*Table structure for table `t_murid` */

CREATE TABLE `t_murid` (
  `id_murid` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(10) DEFAULT NULL,
  `nm_murid` varchar(255) DEFAULT NULL,
  `jekel` char(1) DEFAULT NULL,
  `tlhr` varchar(255) DEFAULT NULL,
  `tgllhr` date DEFAULT NULL,
  `agama` char(1) DEFAULT NULL,
  `kebutuhan` varchar(150) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(32) DEFAULT NULL,
  `ttd_murid` varchar(150) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `nokps` varchar(50) DEFAULT NULL,
  `tinggi` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `jarak` int(11) DEFAULT '1',
  `waktu` int(11) DEFAULT '60',
  `saudara` int(11) DEFAULT NULL,
  `id_program` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_murid`),
  KEY `id_murid` (`id_murid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_murid` */

/*Table structure for table `t_ortu` */

CREATE TABLE `t_ortu` (
  `id_murid` int(11) DEFAULT NULL,
  `nm_ayah` varchar(150) DEFAULT NULL,
  `ayah_khusus` varchar(150) DEFAULT NULL,
  `pekerjaan_ayah` varchar(150) DEFAULT NULL,
  `pendidikan_ayah` varchar(150) DEFAULT NULL,
  `penghasilan_ayah` int(11) DEFAULT NULL,
  `th_ayah` varchar(4) DEFAULT NULL,
  `nm_ibu` varchar(150) DEFAULT NULL,
  `ibu_khusus` varchar(150) DEFAULT NULL,
  `pekerjaan_ibu` varchar(150) DEFAULT NULL,
  `pendidikan_ibu` varchar(150) DEFAULT NULL,
  `penghasilan_ibu` int(11) DEFAULT NULL,
  `th_ibu` varchar(4) DEFAULT NULL,
  `nm_wali` varchar(150) DEFAULT NULL,
  `pekerjaan_wali` varchar(150) DEFAULT NULL,
  `pendidikan_wali` varchar(150) DEFAULT NULL,
  `penghasilan_wali` int(150) DEFAULT NULL,
  `th_wali` varchar(4) DEFAULT NULL,
  `ttd` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_ortu` */

/*Table structure for table `t_prestasi` */

CREATE TABLE `t_prestasi` (
  `id_prestasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_murid` int(11) DEFAULT NULL,
  `jenis_p` varchar(150) DEFAULT NULL,
  `tingkat_p` varchar(150) DEFAULT NULL,
  `nama_p` varchar(150) DEFAULT NULL,
  `tahun_p` varchar(150) DEFAULT NULL,
  `penyelenggara` varchar(150) DEFAULT NULL,
  `jenis_b` varchar(150) DEFAULT NULL,
  `sumber` varchar(150) DEFAULT NULL,
  `th_mulai` varchar(4) DEFAULT NULL,
  `th_selesai` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id_prestasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_prestasi` */

/*Table structure for table `t_program` */

CREATE TABLE `t_program` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nm_program` varchar(100) DEFAULT NULL,
  `logo` varchar(150) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `t_program` */

insert  into `t_program`(`id`,`nm_program`,`logo`,`keterangan`) values (1,'Administrasi Perkantoran','flaticon-briefcase','program keahlian yang menguasai dasar pengelolaan manajeman keuangan perusahaan dan semua jenis usaha bisnis terkait peluang usaha: Sekertaris,juru seteno,operator telpon dll.');
insert  into `t_program`(`id`,`nm_program`,`logo`,`keterangan`) values (2,'Akuntansi','flaticon-abacus','program keahlian yang menguasai dasar pengelolaan manajemen keuangan suatu perusahaan ,peluang uasaha : accounting,kasir staff,admin keuangan');
insert  into `t_program`(`id`,`nm_program`,`logo`,`keterangan`) values (3,'Multimedia ','flaticon-working-with-computer','dapat dirumuskan sedagai wadah atau penyatuan beberapa media yang kemudian didefinisikan sebagai elemen-elemen pembentukan multimedia. Elemen-elemen tersebut seperti teks, gambar, suara, animasi, dan video. Multimedia merupakan suatu konsep dan teknologi baru bidang teknologi informasi, di mana informasi dalam bentuk teks, gambar, suara, animasi, dan video disatukan dalam computer untuk di simpan, diproses dan disajikan baik secara liner mahupun interaktif.');
insert  into `t_program`(`id`,`nm_program`,`logo`,`keterangan`) values (4,'Tekhnik Sepeda Motor','flaticon-chemical-bond','kompetensi keahlian pada Bidang Studi Keahlian Teknologi dan Rekayasa Program Studi Keahlian Teknik Otomotif yang menekankan pada keterampilan pelayanan jasa mekanik kendaraan sepeda motor roda dua. Kompetensi Keahlian Teknik Sepeda Motor menyiapkan peserta didik untuk bekerja pada bidang pekerjaan yang dikelola oleh badan, instansi atauperusahaan pribadi (wirausaha).');

/*Table structure for table `t_upload` */

CREATE TABLE `t_upload` (
  `id_upload` int(11) NOT NULL AUTO_INCREMENT,
  `id_murid` int(11) DEFAULT NULL,
  `jenis` varchar(2) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_upload`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_upload` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
