/*
Navicat MySQL Data Transfer

Source Server         : koneksi
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : helpdesk

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2015-10-21 12:37:56
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `attachment`
-- ----------------------------
DROP TABLE IF EXISTS `attachment`;
CREATE TABLE `attachment` (
  `id_attachment` int(11) NOT NULL AUTO_INCREMENT,
  `id_tiket` int(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_size` bigint(20) NOT NULL,
  `upload_date` datetime NOT NULL,
  PRIMARY KEY (`id_attachment`),
  KEY `fk_id_tiket` (`id_tiket`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of attachment
-- ----------------------------
INSERT INTO `attachment` VALUES ('28', '71', '71.pdf', '166167', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('29', '75', '75.pdf', '166167', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `customer`
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `nama_customer` varchar(255) NOT NULL,
  `no_hp_customer` varchar(255) NOT NULL,
  `sub_divisi_customer` int(11) NOT NULL,
  `email_customer` varchar(255) NOT NULL,
  `time` varchar(255) DEFAULT NULL,
  `other` text,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('103', 'caesar', '1', '4', 'a@a.com', '1445389803', 'Tolong Dibantu');
INSERT INTO `customer` VALUES ('104', 'Devi Andriani', '1', '8', 'a@a.com', '1445390527', 'Tolong segera karena membuat kalkulasi perusahaan melambat');
INSERT INTO `customer` VALUES ('105', 'Faradita Fairuz Aulia', '1', '8', 'a@a.com', '1445391337', 'Butuh cepat');
INSERT INTO `customer` VALUES ('106', 'Kuncoro', '1', '4', 'a@a.com', '1445391660', 'tolong diperbaiki segera');
INSERT INTO `customer` VALUES ('107', 'Rizki Ruskandi', '1', '6', 'a@a.com', '1445393618', 'butu cepat');
INSERT INTO `customer` VALUES ('108', 'Try Haryatno', '081220556459', '6', 'a@a.com', '1445405693', '');

-- ----------------------------
-- Table structure for `dampak`
-- ----------------------------
DROP TABLE IF EXISTS `dampak`;
CREATE TABLE `dampak` (
  `id_dampak` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dampak` varchar(255) NOT NULL,
  `deskripsi_dampak` text,
  PRIMARY KEY (`id_dampak`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dampak
-- ----------------------------
INSERT INTO `dampak` VALUES ('1', 'Kritis', 'Berkaitan dengan Proses Bisnis perusahaan, bila kritis tidak dikerjakan makan perusahaan akan mengalami dampak seperti kerugian');
INSERT INTO `dampak` VALUES ('2', 'Standar', 'Tidak begitu berpengaruh pada proses bisnis perusahaan');
INSERT INTO `dampak` VALUES ('3', 'None', 'Tidak berpengaruh sama sekali pada proses bisnis perusahaan');

-- ----------------------------
-- Table structure for `divisi`
-- ----------------------------
DROP TABLE IF EXISTS `divisi`;
CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_divisi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_divisi`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of divisi
-- ----------------------------
INSERT INTO `divisi` VALUES ('1', 'Gardu Induk');
INSERT INTO `divisi` VALUES ('2', 'Sumber Daya Manusia');
INSERT INTO `divisi` VALUES ('3', 'Keuangan');
INSERT INTO `divisi` VALUES ('4', 'Operasi Sistem Distribusi');
INSERT INTO `divisi` VALUES ('5', 'Scada dan Teknologi Informasi');

-- ----------------------------
-- Table structure for `jabatan`
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL,
  `level_jabatan` int(11) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
INSERT INTO `jabatan` VALUES ('1', 'General Manager', '1');
INSERT INTO `jabatan` VALUES ('2', 'Asisten Manajer', '2');
INSERT INTO `jabatan` VALUES ('3', 'Supervisor', '3');
INSERT INTO `jabatan` VALUES ('4', 'Kepala Deputi', '4');
INSERT INTO `jabatan` VALUES ('5', 'Karyawan', '5');
INSERT INTO `jabatan` VALUES ('6', 'Staf Helpdesk', '11');
INSERT INTO `jabatan` VALUES ('7', 'Staf Technical Support', '12');
INSERT INTO `jabatan` VALUES ('8', 'Staf Admin Helpdesk', '13');

-- ----------------------------
-- Table structure for `kantor`
-- ----------------------------
DROP TABLE IF EXISTS `kantor`;
CREATE TABLE `kantor` (
  `id_kantor` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kantor` varchar(255) NOT NULL,
  `alamat_kantor` text NOT NULL,
  `no_telp_kantor` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kantor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kantor
-- ----------------------------
INSERT INTO `kantor` VALUES ('0', 'Distribusi Jawa Barat dan Banten', 'Jl. Asia Afrika No. 63, Kota Bandung', '0224230747');
INSERT INTO `kantor` VALUES ('1', 'APJ Tasikmalaya', 'Jl. Mayor Utarya No. 28', '0224230747');
INSERT INTO `kantor` VALUES ('2', 'APJ Garut', 'Jl. Mayor Utarya No. 28', '0224230747');

-- ----------------------------
-- Table structure for `kategori`
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) NOT NULL,
  `deskripsi_kategori` text,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES ('1', 'AMS', 'Aplikasi Manajemen Surat');
INSERT INTO `kategori` VALUES ('2', 'Dashboard', null);
INSERT INTO `kategori` VALUES ('3', 'Email', 'Permasalahan seputar email corporate');
INSERT INTO `kategori` VALUES ('4', 'Eproc dan ABG', null);
INSERT INTO `kategori` VALUES ('5', 'Graphon', null);
INSERT INTO `kategori` VALUES ('6', 'Hardware', 'Permasalahan seputar perangkat keras');
INSERT INTO `kategori` VALUES ('7', 'Network', 'Permasalahan seputar jaringan komuter');
INSERT INTO `kategori` VALUES ('8', 'QCC', 'Permasalah mengenai Quality Control Circle');
INSERT INTO `kategori` VALUES ('9', 'Revas', 'Reavenue Assurance, suatu program pengamanan pendapatan perusahaan dari kebocoran-kebocoran');
INSERT INTO `kategori` VALUES ('10', 'SAP', 'System Application and Product');
INSERT INTO `kategori` VALUES ('11', 'Smart One', null);

-- ----------------------------
-- Table structure for `kode_status`
-- ----------------------------
DROP TABLE IF EXISTS `kode_status`;
CREATE TABLE `kode_status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `nama_status` varchar(255) NOT NULL,
  `deskripsi_status` text,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kode_status
-- ----------------------------
INSERT INTO `kode_status` VALUES ('1', 'New', 'Kondisi dimana Tiket baru di buat dan akan dikirimkan ke Technical Support atau Tim Teknisi');
INSERT INTO `kode_status` VALUES ('2', 'Open', 'Kondisi dimana Tiket telah dibuka dan dibaca oleh Technical Support atau Tim Teknisi');
INSERT INTO `kode_status` VALUES ('3', 'Close', 'Kondisi dimana Tiket telah diselesaikan');

-- ----------------------------
-- Table structure for `level_prioritas`
-- ----------------------------
DROP TABLE IF EXISTS `level_prioritas`;
CREATE TABLE `level_prioritas` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(255) NOT NULL,
  `deskripsi_level` text,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of level_prioritas
-- ----------------------------
INSERT INTO `level_prioritas` VALUES ('1', 'Top', 'Seperti Top Level Management');
INSERT INTO `level_prioritas` VALUES ('2', 'Middle', 'Seperti Supervisor');
INSERT INTO `level_prioritas` VALUES ('3', 'Lower', 'Seperti Karyawan');

-- ----------------------------
-- Table structure for `pegawai`
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `nip` varchar(255) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `no_tlp_pegawai` varchar(255) NOT NULL,
  `email_pegawai` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `last_login_date` datetime DEFAULT NULL,
  `kantor` int(11) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `sub_divisi` int(11) NOT NULL,
  `team` int(11) DEFAULT NULL,
  `aktivasi` varchar(255) NOT NULL,
  `tgl_diedit` datetime DEFAULT NULL,
  `diedit_oleh` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `fk_kantor` (`kantor`),
  KEY `fk_jabatan` (`jabatan`),
  KEY `fk_sub_divisi` (`sub_divisi`),
  CONSTRAINT `fk_jabatan` FOREIGN KEY (`jabatan`) REFERENCES `jabatan` (`id_jabatan`),
  CONSTRAINT `fk_kantor` FOREIGN KEY (`kantor`) REFERENCES `kantor` (`id_kantor`),
  CONSTRAINT `fk_sub_divisi` FOREIGN KEY (`sub_divisi`) REFERENCES `sub_divisi` (`id_sub_divisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
INSERT INTO `pegawai` VALUES ('1100300', 'Winapamungkas Rino', '1', 'a@a.com', 'teknisi1', '491b4c7ab9757487389b0fbea6a1d2ea', '2015-10-21 08:17:25', '2015-10-21 08:39:44', '0', '7', '17', '1', '491b4c7ab9757487389b0fbea6a1d2ea', '2015-10-21 08:18:27', 'AD');
INSERT INTO `pegawai` VALUES ('1100448', 'Try Haryatno', '1', 'a@a.com', 'teknisi2', '3a4bd8b8554827fe98db41e5ac1950b6', '2015-10-21 08:18:08', '2015-10-21 08:39:20', '0', '7', '17', '1', '3a4bd8b8554827fe98db41e5ac1950b6', '2015-10-21 08:18:36', 'AD');
INSERT INTO `pegawai` VALUES ('1104579', 'Farhan Maulana', '1', 'a@a.com', 'kepala', '870f669e4bbbfa8a6fde65549826d1c4', '2015-10-21 08:16:37', '2015-10-21 09:01:59', '0', '4', '17', null, '870f669e4bbbfa8a6fde65549826d1c4', '2015-10-21 08:18:55', 'AD');
INSERT INTO `pegawai` VALUES ('1104660', 'Iman Muhamad Ramadhan', '081220556459', 'iman.mr@hotmail.com', 'teknisi', 'e21394aaeee10f917f581054d24b031f', '2015-10-21 08:15:23', '2015-10-21 12:33:13', '0', '7', '17', null, 'e21394aaeee10f917f581054d24b031f', '2015-10-21 08:19:00', 'AD');
INSERT INTO `pegawai` VALUES ('1105994', 'Eggy Ryana Agustian', '1', 'a@a.com', 'helpdesk', '288682ec5f2450588bb37a4523d11616', '2015-10-21 08:15:49', '2015-10-21 12:33:33', '0', '6', '17', null, '288682ec5f2450588bb37a4523d11616', '2015-10-21 08:19:06', 'AD');
INSERT INTO `pegawai` VALUES ('AD', 'admin', '0', 'dummy@dymm.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2015-10-15 08:06:59', '2015-10-21 08:18:20', '2', '8', '17', null, '21232f297a57a5a743894a0e4a801fc3', null, null);

-- ----------------------------
-- Table structure for `solusi`
-- ----------------------------
DROP TABLE IF EXISTS `solusi`;
CREATE TABLE `solusi` (
  `id_solusi` int(11) NOT NULL AUTO_INCREMENT,
  `judul_solusi` text NOT NULL,
  `dilihat_sebanyak` int(11) DEFAULT NULL,
  `deskripsi_solusi` mediumtext NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  PRIMARY KEY (`id_solusi`),
  KEY `fk_tiket_solusi` (`id_tiket`),
  KEY `fk_pegawai_solusi` (`nip`),
  CONSTRAINT `fk_pegawai_solusi` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`),
  CONSTRAINT `fk_tiket_solusi` FOREIGN KEY (`id_tiket`) REFERENCES `tiket` (`id_tiket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of solusi
-- ----------------------------

-- ----------------------------
-- Table structure for `sub_divisi`
-- ----------------------------
DROP TABLE IF EXISTS `sub_divisi`;
CREATE TABLE `sub_divisi` (
  `id_sub_divisi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sub_divisi` varchar(255) NOT NULL,
  `divisi` int(11) NOT NULL,
  PRIMARY KEY (`id_sub_divisi`),
  KEY `fk_divisi2` (`divisi`),
  CONSTRAINT `fk_divisi2` FOREIGN KEY (`divisi`) REFERENCES `divisi` (`id_divisi`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sub_divisi
-- ----------------------------
INSERT INTO `sub_divisi` VALUES ('1', 'Gardu Induk', '1');
INSERT INTO `sub_divisi` VALUES ('2', 'Pengukuran dan Transaksi Energi', '1');
INSERT INTO `sub_divisi` VALUES ('3', 'Sumber Daya Manusia', '2');
INSERT INTO `sub_divisi` VALUES ('4', 'Sekretariat', '2');
INSERT INTO `sub_divisi` VALUES ('6', 'Logistik', '2');
INSERT INTO `sub_divisi` VALUES ('7', 'Pengelolaan Anggaran dan Keuangan', '3');
INSERT INTO `sub_divisi` VALUES ('8', 'Akutansi', '3');
INSERT INTO `sub_divisi` VALUES ('9', 'Perencanaan Operasi', '4');
INSERT INTO `sub_divisi` VALUES ('10', 'Operasi', '4');
INSERT INTO `sub_divisi` VALUES ('11', 'Perencanaan dan Pemeliharaan', '4');
INSERT INTO `sub_divisi` VALUES ('12', 'Pemeliharaan Gardu Induk', '4');
INSERT INTO `sub_divisi` VALUES ('13', 'Pengusahaan data dan Gambar', '4');
INSERT INTO `sub_divisi` VALUES ('15', 'Remote Terminal Unit (RTU)', '5');
INSERT INTO `sub_divisi` VALUES ('16', 'Perencanaan SCADA', '5');
INSERT INTO `sub_divisi` VALUES ('17', 'Teknologi Informasi', '5');
INSERT INTO `sub_divisi` VALUES ('18', 'Telekomunikasi', '5');
INSERT INTO `sub_divisi` VALUES ('19', 'Peripheral', '5');

-- ----------------------------
-- Table structure for `team`
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id_team` int(11) NOT NULL AUTO_INCREMENT,
  `nama_team` varchar(255) NOT NULL,
  PRIMARY KEY (`id_team`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of team
-- ----------------------------
INSERT INTO `team` VALUES ('1', 'Admin AMS');

-- ----------------------------
-- Table structure for `tiket`
-- ----------------------------
DROP TABLE IF EXISTS `tiket`;
CREATE TABLE `tiket` (
  `id_tiket` int(255) NOT NULL AUTO_INCREMENT,
  `judul_tiket` text NOT NULL,
  `tgl_awal_tiket` datetime NOT NULL,
  `date_open` datetime DEFAULT NULL,
  `date_close` datetime DEFAULT NULL,
  `durasi` int(255) DEFAULT NULL,
  `deskripsi_masalah` text NOT NULL,
  `staf_helpdesk` varchar(255) NOT NULL,
  `staf_teknisi` varchar(255) DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `kantor` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `level_prioritas` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `dampak` int(11) NOT NULL,
  `taken_by` varchar(11) DEFAULT NULL,
  `tutorial` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tiket`),
  KEY `fk_staf_helpdesk` (`staf_helpdesk`),
  KEY `fk_ketegori` (`kategori`),
  KEY `fk_level` (`level_prioritas`),
  KEY `fk_status` (`status`),
  KEY `fk_dampak` (`dampak`),
  KEY `fk_kantor2` (`kantor`),
  CONSTRAINT `fk_dampak` FOREIGN KEY (`dampak`) REFERENCES `dampak` (`id_dampak`),
  CONSTRAINT `fk_kantor2` FOREIGN KEY (`kantor`) REFERENCES `kantor` (`id_kantor`),
  CONSTRAINT `fk_ketegori` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`),
  CONSTRAINT `fk_level` FOREIGN KEY (`level_prioritas`) REFERENCES `level_prioritas` (`id_level`),
  CONSTRAINT `fk_staf_helpdesk` FOREIGN KEY (`staf_helpdesk`) REFERENCES `pegawai` (`nip`),
  CONSTRAINT `fk_status` FOREIGN KEY (`status`) REFERENCES `kode_status` (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tiket
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1');
INSERT INTO `user` VALUES ('2', 'manager', '1d0258c2440a8d19e716292b231e3190', '2');
INSERT INTO `user` VALUES ('3', 'supervisor', '09348c20a019be0318387c08df7a783d', '3');
INSERT INTO `user` VALUES ('4', 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', '4');


-- ----------------------------
-- Rollback auto increment to 1
-- ----------------------------

ALTER TABLE `tiket` AUTO_INCREMENT = 0;
ALTER TABLE `solusi` AUTO_INCREMENT = 0;
ALTER TABLE `customer` AUTO_INCREMENT = 0;