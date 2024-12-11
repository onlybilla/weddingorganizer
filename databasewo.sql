-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_wo
CREATE DATABASE IF NOT EXISTS `db_wo` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_wo`;

-- Dumping structure for table db_wo.data_bobot
CREATE TABLE IF NOT EXISTS `data_bobot` (
  `id_bobot` int NOT NULL AUTO_INCREMENT,
  `id_kriteria` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `bobot` float DEFAULT NULL,
  PRIMARY KEY (`id_bobot`),
  KEY `id_kriteria` (`id_kriteria`),
  CONSTRAINT `FK_data_bobot_data_kriteria` FOREIGN KEY (`id_kriteria`) REFERENCES `data_kriteria` (`id_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table db_wo.data_bobot: ~6 rows (approximately)
INSERT INTO `data_bobot` (`id_bobot`, `id_kriteria`, `bobot`) VALUES
	(1, 'C1', 0.15),
	(2, 'C2', 0.15),
	(3, 'C3', 0.15),
	(4, 'C4', 0.15),
	(5, 'C5', 0.2),
	(6, 'C6', 0.2);

-- Dumping structure for table db_wo.data_kriteria
CREATE TABLE IF NOT EXISTS `data_kriteria` (
  `id_kriteria` varchar(50) COLLATE armscii8_bin NOT NULL,
  `nama_kriteria` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `keterangan` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table db_wo.data_kriteria: ~6 rows (approximately)
INSERT INTO `data_kriteria` (`id_kriteria`, `nama_kriteria`, `keterangan`) VALUES
	('C1', 'Dekorasi', 'Cost'),
	('C2', 'Katering', 'Cost'),
	('C3', 'Busana dan Rias Pengantin', 'Cost'),
	('C4', 'Dokumentasi', 'Cost'),
	('C5', 'Jumlah Tamu', 'Benefit'),
	('C6', 'Harga Paket', 'Cost');

-- Dumping structure for table db_wo.data_paket
CREATE TABLE IF NOT EXISTS `data_paket` (
  `kode_paket` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `nama_paket` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  PRIMARY KEY (`kode_paket`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table db_wo.data_paket: ~6 rows (approximately)
INSERT INTO `data_paket` (`kode_paket`, `nama_paket`) VALUES
	('A1', 'Paket 1'),
	('A2', 'Paket 2'),
	('A3', 'Paket 3'),
	('A4', 'Paket 4'),
	('A5', 'Paket 5'),
	('A6', 'Paket 6');

-- Dumping structure for table db_wo.konversi_penilaian
CREATE TABLE IF NOT EXISTS `konversi_penilaian` (
  `id_konversi` int NOT NULL AUTO_INCREMENT,
  `id_kriteria` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `kode_paket` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `value` int NOT NULL,
  PRIMARY KEY (`id_konversi`),
  KEY `kode_kriteria` (`id_kriteria`) USING BTREE,
  KEY `nama_paket` (`kode_paket`) USING BTREE,
  CONSTRAINT `FK_konversi_penilaian_data_kriteria` FOREIGN KEY (`id_kriteria`) REFERENCES `data_kriteria` (`id_kriteria`),
  CONSTRAINT `FK_konversi_penilaian_data_paket` FOREIGN KEY (`kode_paket`) REFERENCES `data_paket` (`kode_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table db_wo.konversi_penilaian: ~36 rows (approximately)
INSERT INTO `konversi_penilaian` (`id_konversi`, `id_kriteria`, `kode_paket`, `value`) VALUES
	(1, 'C1', 'A1', 5),
	(2, 'C2', 'A1', 4),
	(3, 'C3', 'A1', 2),
	(4, 'C4', 'A1', 3),
	(5, 'C5', 'A1', 1000),
	(6, 'C6', 'A1', 95000000),
	(7, 'C1', 'A2', 2),
	(10, 'C2', 'A2', 3),
	(11, 'C3', 'A2', 1),
	(12, 'C4', 'A2', 2),
	(13, 'C5', 'A2', 500),
	(14, 'C6', 'A2', 44000000),
	(15, 'C1', 'A3', 4),
	(16, 'C2', 'A3', 3),
	(17, 'C3', 'A3', 4),
	(18, 'C4', 'A3', 2),
	(19, 'C5', 'A3', 1000),
	(20, 'C6', 'A3', 70000000),
	(21, 'C1', 'A4', 4),
	(22, 'C2', 'A4', 3),
	(23, 'C3', 'A4', 3),
	(24, 'C4', 'A4', 2),
	(25, 'C5', 'A4', 800),
	(26, 'C6', 'A4', 81000000),
	(27, 'C1', 'A5', 4),
	(28, 'C2', 'A5', 3),
	(29, 'C3', 'A5', 5),
	(30, 'C4', 'A5', 3),
	(31, 'C5', 'A5', 800),
	(32, 'C6', 'A5', 58000000),
	(33, 'C1', 'A6', 3),
	(34, 'C2', 'A6', 2),
	(35, 'C3', 'A6', 2),
	(36, 'C4', 'A6', 3),
	(37, 'C5', 'A6', 600),
	(38, 'C6', 'A6', 49000000);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
