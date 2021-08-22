-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 05:49 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat`
--

CREATE TABLE `alat` (
  `id_alat` int(11) NOT NULL,
  `nama_alat` text NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alat`
--

INSERT INTO `alat` (`id_alat`, `nama_alat`, `gambar`, `deskripsi`, `created_at`) VALUES
(2, 'Sensor TDS', 'ec02aad9bdb9d21063e347ac94e9c2e0.jpg', '<p>Sensor TDS</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-08-18 12:03:14'),
(3, 'ESP32 Board', 'a694d7cc2b3c7a61bad5fbc3924d0a8c.jpg', '<p>ESP32 Board</p>\r\n', '2021-08-20 08:11:04'),
(4, 'Sensor Suhu DS18B20', 'b7635d45c355843dd21d831cd4302a7a.jpg', '<p>Sensor Suhu</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-08-20 08:11:42'),
(5, 'Sensor PH4502C', '1e0f068b9344b3275b47832477e89dfd.jpg', '<p>Sensor PH4502C</p>\r\n', '2021-08-20 08:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `lokasi` text NOT NULL,
  `nama_kolam` text NOT NULL,
  `deskripsi` text NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `judul`, `lokasi`, `nama_kolam`, `deskripsi`, `CreatedDate`) VALUES
(4, 'Ryan Hartadi', 'Jl Jawa', 'Kolam A', '<p>asdad</p>\r\n', '2021-06-09 10:35:40');

-- --------------------------------------------------------

--
-- Table structure for table `data_sensor`
--

CREATE TABLE `data_sensor` (
  `id_data` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `ph` float NOT NULL,
  `tds` float NOT NULL,
  `suhu` float NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_sensor`
--

INSERT INTO `data_sensor` (`id_data`, `id`, `ph`, `tds`, `suhu`, `createdDate`) VALUES
(1, 4, 8.96, 534.59, 26, '2021-08-21 04:25:05'),
(2, 4, 6.01, 1261.86, 27, '2021-08-22 09:45:17'),
(3, 4, 6.01, 1261.86, 27, '2021-08-22 09:45:19'),
(4, 4, 6.01, 1261.86, 27, '2021-08-22 09:45:21'),
(5, 4, 6.01, 1261.86, 27, '2021-08-22 09:45:23'),
(6, 4, 6.01, 1261.86, 27, '2021-08-22 09:45:25'),
(7, 4, 6.01, 1261.86, 27, '2021-08-22 09:45:27'),
(8, 4, 6.01, 1261.86, 27, '2021-08-22 09:45:29'),
(9, 4, 6.01, 1261.86, 27, '2021-08-22 09:45:31'),
(10, 4, 4.53, 1381.33, 27, '2021-08-22 09:53:18'),
(11, 4, 4.53, 1381.33, 27, '2021-08-22 09:53:20'),
(12, 4, 7.98, 1337.29, 27, '2021-08-22 09:53:22'),
(13, 4, 7.98, 1337.29, 27, '2021-08-22 09:53:24'),
(14, 4, 7.98, 1337.29, 27, '2021-08-22 09:53:26'),
(15, 4, 7.73, 119.3, 27, '2021-08-22 11:05:27'),
(16, 4, 7.83, 149.36, 27, '2021-08-22 11:05:29'),
(17, 4, 7.83, 149.36, 27, '2021-08-22 11:05:31'),
(18, 4, 7.88, 129.87, 27, '2021-08-22 11:05:33'),
(19, 4, 7.88, 129.87, 27, '2021-08-22 11:05:35'),
(20, 4, 7.88, 129.87, 27, '2021-08-22 11:05:37'),
(21, 4, 7.66, 142.61, 27, '2021-08-22 11:05:39'),
(22, 4, 7.66, 142.61, 27, '2021-08-22 11:05:41'),
(23, 4, 7.77, 148.54, 27, '2021-08-22 11:05:43'),
(24, 4, 7.77, 148.54, 27, '2021-08-22 11:05:45'),
(25, 4, 7.83, 152.41, 27, '2021-08-22 11:05:47'),
(26, 4, 7.83, 152.41, 27, '2021-08-22 11:05:49'),
(27, 4, 7.83, 152.41, 27, '2021-08-22 11:05:51'),
(28, 4, 7.83, 151.19, 27, '2021-08-22 11:05:53'),
(29, 4, 7.83, 151.19, 27, '2021-08-22 11:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `detail_ikan`
--

CREATE TABLE `detail_ikan` (
  `id_detail` int(11) NOT NULL,
  `id_ikan` int(11) NOT NULL,
  `ph` varchar(20) NOT NULL,
  `tds` varchar(20) NOT NULL,
  `suhu` varchar(20) NOT NULL,
  `do` varchar(20) NOT NULL,
  `salinity` varchar(20) NOT NULL,
  `grade` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_ikan`
--

INSERT INTO `detail_ikan` (`id_detail`, `id_ikan`, `ph`, `tds`, `suhu`, `do`, `salinity`, `grade`) VALUES
(3, 6, '9', '300', '27', '7', '0.15', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_ikan`
--

CREATE TABLE `jenis_ikan` (
  `id_jenis` int(11) NOT NULL,
  `nama_ikan` text NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_ikan`
--

INSERT INTO `jenis_ikan` (`id_jenis`, `nama_ikan`, `gambar`, `deskripsi`, `created_at`) VALUES
(3, 'Ogon', '334ba3cb93cc08de7bc0bb32fa65ff75.jpg', '<p>Dalam bahasa Jepang, &quot;Ogon&quot; berarti &quot;emas.&quot; Ini mengacu pada skala reflektif metalik yang terlihat pada koi ini. Kelompok ogon berisi sejumlah jenis koi lain selain yamabuki, termasuk ogon biasa dan gin. Ogon &quot;biasa&quot; memiliki warna emas ditambah dengan skala reflektif, sedangkan gin ogon memiliki warna platinum metalik atau keperakan.</p>\r\n', '2021-06-16 13:13:24'),
(4, 'Yamabuki', '64e3af9d80f702ec1a1988af08226302.jpg', '<p>Ikan Koi Yamabuki adalah subtipe dari koi Ogon. Yamabuki memiliki arti &quot;kuning pucat&quot; karena termasuk dalam kelompok Ogon, warnanya yang terdiri dari kunging pucat dibandingkan dengan Ogon, namun dengan skala reflektif karakteristik yang sama memberi tampilan metalik seperti subtipe dari ikan koi Ogon lainnya.</p>\r\n', '2021-06-16 13:13:24'),
(5, 'Shiro', '16542746b50191a6c8cbec470d966217.jpg', '<p>Dalam bahasa Jepang, &quot;Shiro&quot; berarti &quot;Putih&quot;. Ini mengacu pada skala reflektif metalik yang terlihat pada koi ini. Kelompok ohgon berisi sejumlah jenis koi lain selain yamabuki, termasuk ohgon biasa dan gin. Oghon &quot;biasa&quot; memiliki warna emas ditambah dengan skala reflektif, sedangkan gin oghon memiliki warna platinum metalik atau keperakan.</p>\r\n', '2021-06-16 13:13:39'),
(6, 'Showa', '70256c5e4562cd1de510edc02f541229.jpg', '<p>Sowa adalah salah satu ikan koi Gosanke atau &quot;3 Besar&quot; bersama dengan Taisho Sanke dan koi Kohaku. Sowa adalah koi yang cantik, dengan warna putih, merah, dan hitam yang dicat di seluruh tubuh mereka dengan cara yang sama seperti gambar kuas Jepang yang menunjukkan interpretasi artistik tanpa setiap goresan menjadi lengkap. Keindahan ikan ini menggugah emosi kita dengan kombinasi warna yang indah.</p>\r\n', '2021-06-16 13:13:39'),
(7, 'Sanke', 'c0c9d6daf0d9f04aab1da9455769e6d4.jpg', '<p>Taisho Sanshoku, juga disebut Taisho Sanke dan Sanke, dikembangkan dari Kohaku sekitar 80 tahun yang lalu pada tahun 1918 di era Taisho. Varietas Sanshoku akan memiliki 3 warna berbeda: putih, merah, dan hitam. Ada dua varietas &quot; Showa Sanshoku &quot; dan &quot;Taisho Sanshoku&quot;. Nama &quot;Sanshoku&quot; menandakan 3 warna dalam bahasa Jepang, keduanya Sanshoku akan menjadi Koi tiga warna. Mereka perlu dibedakan karena 2 varietas ini memiliki pola dan latar belakang yang berbeda. Umumnya, Sanke tidak memiliki warna hitam di kepalanya.</p>\r\n', '2021-06-16 13:13:50'),
(8, 'Kohaku', '9ab4ab58450e821c7e5e20ac4fb73087.jpg', '<p>Varietas koi yang paling representatif dari 80+ varietas adalah Kohaku yang memiliki pola merah pada tubuh putih. Kohaku adalah salah satu perwakilan varietas ikan Koi, dan mereka dicintai oleh orang-orang dari seluruh dunia. Seperti anjing dan kucing, orang menganggap garis keturunan Koi sangat serius, dan nama peternak koi merupakan faktor penting.</p>\r\n', '2021-06-16 13:13:50');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_min`
--

CREATE TABLE `nilai_min` (
  `id_min` int(11) NOT NULL,
  `id_perhitungan` int(11) NOT NULL,
  `nilai_min` float NOT NULL,
  `inference` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_min`
--

INSERT INTO `nilai_min` (`id_min`, `id_perhitungan`, `nilai_min`, `inference`, `created_at`) VALUES
(1, 1, 1, 100, '2021-08-21 09:34:30'),
(2, 1, 0, 0, '2021-08-21 09:34:30'),
(3, 1, 0, 0, '2021-08-21 09:34:30'),
(4, 1, 0, 0, '2021-08-21 09:34:30'),
(5, 1, 0, 0, '2021-08-21 09:34:30'),
(6, 1, 0, 0, '2021-08-21 09:34:30'),
(7, 1, 0, 0, '2021-08-21 09:34:30'),
(8, 1, 0, 0, '2021-08-21 09:34:30'),
(9, 2, 0, 0, '2021-08-21 09:54:53'),
(10, 2, 1, 400, '2021-08-21 09:54:53'),
(11, 2, 0, 0, '2021-08-21 09:54:53'),
(12, 2, 0, 0, '2021-08-21 09:54:54'),
(13, 2, 0, 0, '2021-08-21 09:54:54'),
(14, 2, 0, 0, '2021-08-21 09:54:54'),
(15, 2, 0, 0, '2021-08-21 09:54:54'),
(16, 2, 0, 0, '2021-08-21 09:54:54'),
(17, 3, 0, 0, '2021-08-22 09:45:49'),
(18, 3, 0, 0, '2021-08-22 09:45:49'),
(19, 3, 0.02, 6, '2021-08-22 09:45:49'),
(20, 3, 0, 0, '2021-08-22 09:45:49'),
(21, 4, 0, 0, '2021-08-22 09:53:33'),
(22, 4, 0, 0, '2021-08-22 09:53:33'),
(23, 4, 1, 200, '2021-08-22 09:53:33'),
(24, 4, 0, 0, '2021-08-22 09:53:33'),
(25, 5, 0, 0, '2021-08-22 11:06:04'),
(26, 5, 0, 0, '2021-08-22 11:06:04'),
(27, 5, 0, 0, '2021-08-22 11:06:04'),
(28, 5, 0, 0, '2021-08-22 11:06:04'),
(29, 5, 0.20952, 58, '2021-08-22 11:06:04'),
(30, 5, 0, 0, '2021-08-22 11:06:04'),
(31, 5, 0.79048, 175, '2021-08-22 11:06:04'),
(32, 5, 0, 0, '2021-08-22 11:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 = admin 2 = users',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `password`, `status`, `created_at`) VALUES
(3, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2021-08-14 18:03:42'),
(4, 'user', 'user', '21232f297a57a5a743894a0e4a801fc3', 2, '2021-08-14 18:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `perhitungan`
--

CREATE TABLE `perhitungan` (
  `id_perhitungan` int(11) NOT NULL,
  `ph` float NOT NULL,
  `tds` float NOT NULL,
  `suhu` float NOT NULL,
  `do` float NOT NULL,
  `salinity` float NOT NULL,
  `grade` varchar(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perhitungan`
--

INSERT INTO `perhitungan` (`id_perhitungan`, `ph`, `tds`, `suhu`, `do`, `salinity`, `grade`, `created_at`) VALUES
(1, 8.96, 534.59, 26, 7, 0.15, 'A', '2021-08-21 09:34:30'),
(2, 8.96, 534.59, 26, 5, 0.225, 'D', '2021-08-21 09:54:53'),
(3, 6.01, 1261.86, 27, 5, 0.125, 'C', '2021-08-22 09:45:48'),
(4, 7.98, 1337.29, 27, 5, 0.125, 'B', '2021-08-22 09:53:32'),
(5, 7.83, 151.19, 27, 5, 0.125, 'B', '2021-08-22 11:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id_rules` int(11) NOT NULL,
  `ph` varchar(13) NOT NULL,
  `suhu` varchar(13) NOT NULL,
  `tds` varchar(13) NOT NULL,
  `do` varchar(13) NOT NULL,
  `salinity` varchar(13) NOT NULL,
  `grade` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id_rules`, `ph`, `suhu`, `tds`, `do`, `salinity`, `grade`) VALUES
(4, 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'A'),
(5, 'Baik', 'Baik', 'Baik', 'Baik', 'Sedang', 'A'),
(6, 'Baik', 'Baik', 'Baik', 'Baik', 'Buruk', 'A'),
(7, 'Baik', 'Baik', 'Baik', 'Baik', 'Sangat Buruk', 'A'),
(8, 'Baik', 'Baik', 'Baik', 'Sedang', 'Baik', 'A'),
(9, 'Baik', 'Baik', 'Baik', 'Sedang', 'Sedang', 'A'),
(10, 'Baik', 'Baik', 'Baik', 'Sedang', 'Buruk', 'A'),
(11, 'Baik', 'Baik', 'Baik', 'Sedang', 'Sangat Buruk', 'A'),
(12, 'Baik', 'Baik', 'Baik', 'Buruk', 'Baik', 'A'),
(13, 'Baik', 'Baik', 'Baik', 'Buruk', 'Sedang', 'A'),
(14, 'Baik', 'Baik', 'Baik', 'Buruk', 'Buruk', 'A'),
(15, 'Baik', 'Baik', 'Baik', 'Buruk', 'Sangat Buruk', 'A'),
(16, 'Baik', 'Baik', 'Baik', 'Sangat Buruk', 'Baik', 'A'),
(17, 'Baik', 'Baik', 'Baik', 'Sangat Buruk', 'Sedang', 'A'),
(18, 'Baik', 'Baik', 'Baik', 'Sangat Buruk', 'Buruk', 'A'),
(19, 'Baik', 'Baik', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'A'),
(20, 'Baik', 'Baik', 'Sedang', 'Baik', 'Baik', 'A'),
(21, 'Baik', 'Baik', 'Sedang', 'Baik', 'Sedang', 'A'),
(22, 'Baik', 'Baik', 'Sedang', 'Baik', 'Buruk', 'A'),
(23, 'Baik', 'Baik', 'Sedang', 'Baik', 'Sangat Buruk', 'A'),
(24, 'Baik', 'Baik', 'Sedang', 'Sedang', 'Baik', 'A'),
(25, 'Baik', 'Baik', 'Sedang', 'Sedang', 'Sedang', 'B'),
(26, 'Baik', 'Baik', 'Sedang', 'Sedang', 'Buruk', 'A'),
(27, 'Baik', 'Baik', 'Sedang', 'Sedang', 'Sangat Buruk', 'A'),
(28, 'Baik', 'Baik', 'Sedang', 'Buruk', 'Baik', 'A'),
(29, 'Baik', 'Baik', 'Sedang', 'Buruk', 'Sedang', 'A'),
(30, 'Baik', 'Baik', 'Sedang', 'Buruk', 'Buruk', 'A'),
(31, 'Baik', 'Baik', 'Sedang', 'Buruk', 'Sangat Buruk', 'A'),
(32, 'Baik', 'Baik', 'Sedang', 'Sangat Buruk', 'Baik', 'A'),
(33, 'Baik', 'Baik', 'Sedang', 'Sangat Buruk', 'Sedang', 'A'),
(34, 'Baik', 'Baik', 'Sedang', 'Sangat Buruk', 'Buruk', 'A'),
(35, 'Baik', 'Baik', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'A'),
(36, 'Baik', 'Baik', 'Buruk', 'Baik', 'Baik', 'A'),
(37, 'Baik', 'Baik', 'Buruk', 'Baik', 'Sedang', 'A'),
(38, 'Baik', 'Baik', 'Buruk', 'Baik', 'Buruk', 'A'),
(39, 'Baik', 'Baik', 'Buruk', 'Baik', 'Sangat Buruk', 'A'),
(40, 'Baik', 'Baik', 'Buruk', 'Sedang', 'Baik', 'A'),
(41, 'Baik', 'Baik', 'Buruk', 'Sedang', 'Sedang', 'A'),
(42, 'Baik', 'Baik', 'Buruk', 'Sedang', 'Buruk', 'A'),
(43, 'Baik', 'Baik', 'Buruk', 'Sedang', 'Sangat Buruk', 'A'),
(44, 'Baik', 'Baik', 'Buruk', 'Buruk', 'Baik', 'A'),
(45, 'Baik', 'Baik', 'Buruk', 'Buruk', 'Sedang', 'A'),
(46, 'Baik', 'Baik', 'Buruk', 'Buruk', 'Buruk', 'C'),
(47, 'Baik', 'Baik', 'Buruk', 'Buruk', 'Sangat Buruk', 'A'),
(48, 'Baik', 'Baik', 'Buruk', 'Sangat Buruk', 'Baik', 'A'),
(49, 'Baik', 'Baik', 'Buruk', 'Sangat Buruk', 'Sedang', 'A'),
(50, 'Baik', 'Baik', 'Buruk', 'Sangat Buruk', 'Buruk', 'A'),
(51, 'Baik', 'Baik', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'A'),
(52, 'Baik', 'Baik', 'Sangat Buruk', 'Baik', 'Baik', 'A'),
(53, 'Baik', 'Baik', 'Sangat Buruk', 'Baik', 'Sedang', 'A'),
(54, 'Baik', 'Baik', 'Sangat Buruk', 'Baik', 'Buruk', 'A'),
(55, 'Baik', 'Baik', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'A'),
(56, 'Baik', 'Baik', 'Sangat Buruk', 'Sedang', 'Baik', 'A'),
(57, 'Baik', 'Baik', 'Sangat Buruk', 'Sedang', 'Sedang', 'A'),
(58, 'Baik', 'Baik', 'Sangat Buruk', 'Sedang', 'Buruk', 'A'),
(59, 'Baik', 'Baik', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'A'),
(60, 'Baik', 'Baik', 'Sangat Buruk', 'Buruk', 'Baik', 'A'),
(61, 'Baik', 'Baik', 'Sangat Buruk', 'Buruk', 'Sedang', 'A'),
(62, 'Baik', 'Baik', 'Sangat Buruk', 'Buruk', 'Buruk', 'A'),
(63, 'Baik', 'Baik', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'A'),
(64, 'Baik', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'A'),
(65, 'Baik', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'A'),
(66, 'Baik', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'A'),
(67, 'Baik', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(68, 'Baik', 'Sedang', 'Baik', 'Baik', 'Baik', 'A'),
(69, 'Baik', 'Sedang', 'Baik', 'Baik', 'Sedang', 'A'),
(70, 'Baik', 'Sedang', 'Baik', 'Baik', 'Buruk', 'A'),
(71, 'Baik', 'Sedang', 'Baik', 'Baik', 'Sangat Buruk', 'A'),
(72, 'Baik', 'Sedang', 'Baik', 'Sedang', 'Baik', 'A'),
(73, 'Baik', 'Sedang', 'Baik', 'Sedang', 'Sedang', 'B'),
(74, 'Baik', 'Sedang', 'Baik', 'Sedang', 'Buruk', 'A'),
(75, 'Baik', 'Sedang', 'Baik', 'Sedang', 'Sangat Buruk', 'A'),
(76, 'Baik', 'Sedang', 'Baik', 'Buruk', 'Baik', 'A'),
(77, 'Baik', 'Sedang', 'Baik', 'Buruk', 'Sedang', 'A'),
(78, 'Baik', 'Sedang', 'Baik', 'Buruk', 'Buruk', 'A'),
(79, 'Baik', 'Sedang', 'Baik', 'Buruk', 'Sangat Buruk', 'A'),
(80, 'Baik', 'Sedang', 'Baik', 'Sangat Buruk', 'Baik', 'A'),
(81, 'Baik', 'Sedang', 'Baik', 'Sangat Buruk', 'Sedang', 'A'),
(82, 'Baik', 'Sedang', 'Baik', 'Sangat Buruk', 'Buruk', 'A'),
(83, 'Baik', 'Sedang', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'A'),
(84, 'Baik', 'Sedang', 'Sedang', 'Baik', 'Baik', 'A'),
(85, 'Baik', 'Sedang', 'Sedang', 'Baik', 'Sedang', 'B'),
(86, 'Baik', 'Sedang', 'Sedang', 'Baik', 'Buruk', 'A'),
(87, 'Baik', 'Sedang', 'Sedang', 'Baik', 'Sangat Buruk', 'A'),
(88, 'Baik', 'Sedang', 'Sedang', 'Sedang', 'Baik', 'B'),
(89, 'Baik', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'B'),
(90, 'Baik', 'Sedang', 'Sedang', 'Sedang', 'Buruk', 'B'),
(91, 'Baik', 'Sedang', 'Sedang', 'Sedang', 'Sangat Buruk', 'B'),
(92, 'Baik', 'Sedang', 'Sedang', 'Buruk', 'Baik', 'A'),
(93, 'Baik', 'Sedang', 'Sedang', 'Buruk', 'Sedang', 'B'),
(94, 'Baik', 'Sedang', 'Sedang', 'Buruk', 'Buruk', 'C'),
(95, 'Baik', 'Sedang', 'Sedang', 'Buruk', 'Sangat Buruk', 'B'),
(96, 'Baik', 'Sedang', 'Sedang', 'Sangat Buruk', 'Baik', 'A'),
(97, 'Baik', 'Sedang', 'Sedang', 'Sangat Buruk', 'Sedang', 'B'),
(98, 'Baik', 'Sedang', 'Sedang', 'Sangat Buruk', 'Buruk', 'B'),
(99, 'Baik', 'Sedang', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(100, 'Baik', 'Sedang', 'Buruk', 'Baik', 'Baik', 'A'),
(101, 'Baik', 'Sedang', 'Buruk', 'Baik', 'Sedang', 'A'),
(102, 'Baik', 'Sedang', 'Buruk', 'Baik', 'Buruk', 'A'),
(103, 'Baik', 'Sedang', 'Buruk', 'Baik', 'Sangat Buruk', 'A'),
(104, 'Baik', 'Sedang', 'Buruk', 'Sedang', 'Baik', 'A'),
(105, 'Baik', 'Sedang', 'Buruk', 'Sedang', 'Sedang', 'B'),
(106, 'Baik', 'Sedang', 'Buruk', 'Sedang', 'Buruk', 'C'),
(107, 'Baik', 'Sedang', 'Buruk', 'Sedang', 'Sangat Buruk', 'B'),
(108, 'Baik', 'Sedang', 'Buruk', 'Buruk', 'Baik', 'A'),
(109, 'Baik', 'Sedang', 'Buruk', 'Buruk', 'Sedang', 'C'),
(110, 'Baik', 'Sedang', 'Buruk', 'Buruk', 'Buruk', 'C'),
(111, 'Baik', 'Sedang', 'Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(112, 'Baik', 'Sedang', 'Buruk', 'Sangat Buruk', 'Baik', 'A'),
(113, 'Baik', 'Sedang', 'Buruk', 'Sangat Buruk', 'Sedang', 'B'),
(114, 'Baik', 'Sedang', 'Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(115, 'Baik', 'Sedang', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(116, 'Baik', 'Sedang', 'Sangat Buruk', 'Baik', 'Baik', 'A'),
(117, 'Baik', 'Sedang', 'Sangat Buruk', 'Baik', 'Sedang', 'A'),
(118, 'Baik', 'Sedang', 'Sangat Buruk', 'Baik', 'Buruk', 'A'),
(119, 'Baik', 'Sedang', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'A'),
(120, 'Baik', 'Sedang', 'Sangat Buruk', 'Sedang', 'Baik', 'A'),
(121, 'Baik', 'Sedang', 'Sangat Buruk', 'Sedang', 'Sedang', 'B'),
(122, 'Baik', 'Sedang', 'Sangat Buruk', 'Sedang', 'Buruk', 'B'),
(123, 'Baik', 'Sedang', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(124, 'Baik', 'Sedang', 'Sangat Buruk', 'Buruk', 'Baik', 'A'),
(125, 'Baik', 'Sedang', 'Sangat Buruk', 'Buruk', 'Sedang', 'B'),
(126, 'Baik', 'Sedang', 'Sangat Buruk', 'Buruk', 'Buruk', 'C'),
(127, 'Baik', 'Sedang', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'D'),
(128, 'Baik', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'A'),
(129, 'Baik', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(130, 'Baik', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'D'),
(131, 'Baik', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(132, 'Baik', 'Buruk', 'Baik', 'Baik', 'Baik', 'A'),
(133, 'Baik', 'Buruk', 'Baik', 'Baik', 'Sedang', 'A'),
(134, 'Baik', 'Buruk', 'Baik', 'Baik', 'Buruk', 'A'),
(135, 'Baik', 'Buruk', 'Baik', 'Baik', 'Sangat Buruk', 'A'),
(136, 'Baik', 'Buruk', 'Baik', 'Sedang', 'Baik', 'A'),
(137, 'Baik', 'Buruk', 'Baik', 'Sedang', 'Sedang', 'A'),
(138, 'Baik', 'Buruk', 'Baik', 'Sedang', 'Buruk', 'A'),
(139, 'Baik', 'Buruk', 'Baik', 'Sedang', 'Sangat Buruk', 'A'),
(140, 'Baik', 'Buruk', 'Baik', 'Buruk', 'Baik', 'A'),
(141, 'Baik', 'Buruk', 'Baik', 'Buruk', 'Sedang', 'A'),
(142, 'Baik', 'Buruk', 'Baik', 'Buruk', 'Buruk', 'C'),
(143, 'Baik', 'Buruk', 'Baik', 'Buruk', 'Sangat Buruk', 'A'),
(144, 'Baik', 'Buruk', 'Baik', 'Sangat Buruk', 'Baik', 'A'),
(145, 'Baik', 'Buruk', 'Baik', 'Sangat Buruk', 'Sedang', 'A'),
(146, 'Baik', 'Buruk', 'Baik', 'Sangat Buruk', 'Buruk', 'A'),
(147, 'Baik', 'Buruk', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'A'),
(148, 'Baik', 'Buruk', 'Sedang', 'Baik', 'Baik', 'A'),
(149, 'Baik', 'Buruk', 'Sedang', 'Baik', 'Sedang', 'A'),
(150, 'Baik', 'Buruk', 'Sedang', 'Baik', 'Buruk', 'A'),
(151, 'Baik', 'Buruk', 'Sedang', 'Baik', 'Sangat Buruk', 'A'),
(152, 'Baik', 'Buruk', 'Sedang', 'Sedang', 'Baik', 'A'),
(153, 'Baik', 'Buruk', 'Sedang', 'Sedang', 'Sedang', 'B'),
(154, 'Baik', 'Buruk', 'Sedang', 'Sedang', 'Buruk', 'C'),
(155, 'Baik', 'Buruk', 'Sedang', 'Sedang', 'Sangat Buruk', 'B'),
(156, 'Baik', 'Buruk', 'Sedang', 'Buruk', 'Baik', 'A'),
(157, 'Baik', 'Buruk', 'Sedang', 'Buruk', 'Sedang', 'C'),
(158, 'Baik', 'Buruk', 'Sedang', 'Buruk', 'Buruk', 'C'),
(159, 'Baik', 'Buruk', 'Sedang', 'Buruk', 'Sangat Buruk', 'C'),
(160, 'Baik', 'Buruk', 'Sedang', 'Sangat Buruk', 'Baik', 'A'),
(161, 'Baik', 'Buruk', 'Sedang', 'Sangat Buruk', 'Sedang', 'B'),
(162, 'Baik', 'Buruk', 'Sedang', 'Sangat Buruk', 'Buruk', 'C'),
(163, 'Baik', 'Buruk', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(164, 'Baik', 'Buruk', 'Buruk', 'Baik', 'Baik', 'A'),
(165, 'Baik', 'Buruk', 'Buruk', 'Baik', 'Sedang', 'A'),
(166, 'Baik', 'Buruk', 'Buruk', 'Baik', 'Buruk', 'C'),
(167, 'Baik', 'Buruk', 'Buruk', 'Baik', 'Sangat Buruk', 'A'),
(168, 'Baik', 'Buruk', 'Buruk', 'Sedang', 'Baik', 'A'),
(169, 'Baik', 'Buruk', 'Buruk', 'Sedang', 'Sedang', 'C'),
(170, 'Baik', 'Buruk', 'Buruk', 'Sedang', 'Buruk', 'C'),
(171, 'Baik', 'Buruk', 'Buruk', 'Sedang', 'Sangat Buruk', 'C'),
(172, 'Baik', 'Buruk', 'Buruk', 'Buruk', 'Baik', 'C'),
(173, 'Baik', 'Buruk', 'Buruk', 'Buruk', 'Sedang', 'C'),
(174, 'Baik', 'Buruk', 'Buruk', 'Buruk', 'Buruk', 'C'),
(175, 'Baik', 'Buruk', 'Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(176, 'Baik', 'Buruk', 'Buruk', 'Sangat Buruk', 'Baik', 'A'),
(177, 'Baik', 'Buruk', 'Buruk', 'Sangat Buruk', 'Sedang', 'C'),
(178, 'Baik', 'Buruk', 'Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(179, 'Baik', 'Buruk', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'C'),
(180, 'Baik', 'Buruk', 'Sangat Buruk', 'Baik', 'Baik', 'A'),
(181, 'Baik', 'Buruk', 'Sangat Buruk', 'Baik', 'Sedang', 'A'),
(182, 'Baik', 'Buruk', 'Sangat Buruk', 'Baik', 'Buruk', 'A'),
(183, 'Baik', 'Buruk', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'A'),
(184, 'Baik', 'Buruk', 'Sangat Buruk', 'Sedang', 'Baik', 'A'),
(185, 'Baik', 'Buruk', 'Sangat Buruk', 'Sedang', 'Sedang', 'B'),
(186, 'Baik', 'Buruk', 'Sangat Buruk', 'Sedang', 'Buruk', 'C'),
(187, 'Baik', 'Buruk', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(188, 'Baik', 'Buruk', 'Sangat Buruk', 'Buruk', 'Baik', 'A'),
(189, 'Baik', 'Buruk', 'Sangat Buruk', 'Buruk', 'Sedang', 'C'),
(190, 'Baik', 'Buruk', 'Sangat Buruk', 'Buruk', 'Buruk', 'C'),
(191, 'Baik', 'Buruk', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(192, 'Baik', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'A'),
(193, 'Baik', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(194, 'Baik', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(195, 'Baik', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(196, 'Baik', 'Sangat Buruk', 'Baik', 'Baik', 'Baik', 'A'),
(197, 'Baik', 'Sangat Buruk', 'Baik', 'Baik', 'Sedang', 'A'),
(198, 'Baik', 'Sangat Buruk', 'Baik', 'Baik', 'Buruk', 'A'),
(199, 'Baik', 'Sangat Buruk', 'Baik', 'Baik', 'Sangat Buruk', 'A'),
(200, 'Baik', 'Sangat Buruk', 'Baik', 'Sedang', 'Baik', 'A'),
(201, 'Baik', 'Sangat Buruk', 'Baik', 'Sedang', 'Sedang', 'A'),
(202, 'Baik', 'Sangat Buruk', 'Baik', 'Sedang', 'Buruk', 'A'),
(203, 'Baik', 'Sangat Buruk', 'Baik', 'Sedang', 'Sangat Buruk', 'A'),
(204, 'Baik', 'Sangat Buruk', 'Baik', 'Buruk', 'Baik', 'A'),
(205, 'Baik', 'Sangat Buruk', 'Baik', 'Buruk', 'Sedang', 'A'),
(206, 'Baik', 'Sangat Buruk', 'Baik', 'Buruk', 'Buruk', 'A'),
(207, 'Baik', 'Sangat Buruk', 'Baik', 'Buruk', 'Sangat Buruk', 'A'),
(208, 'Baik', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Baik', 'A'),
(209, 'Baik', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Sedang', 'A'),
(210, 'Baik', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Buruk', 'A'),
(211, 'Baik', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(212, 'Baik', 'Sangat Buruk', 'Sedang', 'Baik', 'Baik', 'A'),
(213, 'Baik', 'Sangat Buruk', 'Sedang', 'Baik', 'Sedang', 'A'),
(214, 'Baik', 'Sangat Buruk', 'Sedang', 'Baik', 'Buruk', 'A'),
(215, 'Baik', 'Sangat Buruk', 'Sedang', 'Baik', 'Sangat Buruk', 'A'),
(216, 'Baik', 'Sangat Buruk', 'Sedang', 'Sedang', 'Baik', 'A'),
(217, 'Baik', 'Sangat Buruk', 'Sedang', 'Sedang', 'Sedang', 'B'),
(218, 'Baik', 'Sangat Buruk', 'Sedang', 'Sedang', 'Buruk', 'B'),
(219, 'Baik', 'Sangat Buruk', 'Sedang', 'Sedang', 'Sangat Buruk', 'D'),
(220, 'Baik', 'Sangat Buruk', 'Sedang', 'Buruk', 'Baik', 'A'),
(221, 'Baik', 'Sangat Buruk', 'Sedang', 'Buruk', 'Sedang', 'B'),
(222, 'Baik', 'Sangat Buruk', 'Sedang', 'Buruk', 'Buruk', 'C'),
(223, 'Baik', 'Sangat Buruk', 'Sedang', 'Buruk', 'Sangat Buruk', 'D'),
(224, 'Baik', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Baik', 'A'),
(225, 'Baik', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Sedang', 'D'),
(226, 'Baik', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Buruk', 'D'),
(227, 'Baik', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(228, 'Baik', 'Sangat Buruk', 'Buruk', 'Baik', 'Baik', 'A'),
(229, 'Baik', 'Sangat Buruk', 'Buruk', 'Baik', 'Sedang', 'A'),
(230, 'Baik', 'Sangat Buruk', 'Buruk', 'Baik', 'Buruk', 'A'),
(231, 'Baik', 'Sangat Buruk', 'Buruk', 'Baik', 'Sangat Buruk', 'A'),
(232, 'Baik', 'Sangat Buruk', 'Buruk', 'Sedang', 'Baik', 'A'),
(233, 'Baik', 'Sangat Buruk', 'Buruk', 'Sedang', 'Sedang', 'B'),
(234, 'Baik', 'Sangat Buruk', 'Buruk', 'Sedang', 'Buruk', 'C'),
(235, 'Baik', 'Sangat Buruk', 'Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(236, 'Baik', 'Sangat Buruk', 'Buruk', 'Buruk', 'Baik', 'A'),
(237, 'Baik', 'Sangat Buruk', 'Buruk', 'Buruk', 'Sedang', 'C'),
(238, 'Baik', 'Sangat Buruk', 'Buruk', 'Buruk', 'Buruk', 'C'),
(239, 'Baik', 'Sangat Buruk', 'Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(240, 'Baik', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Baik', 'A'),
(241, 'Baik', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(242, 'Baik', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(243, 'Baik', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(244, 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Baik', 'A'),
(245, 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Sedang', 'A'),
(246, 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Buruk', 'A'),
(247, 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'D'),
(248, 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Baik', 'A'),
(249, 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Sedang', 'D'),
(250, 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Buruk', 'D'),
(251, 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(252, 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Baik', 'A'),
(253, 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Sedang', 'D'),
(254, 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Buruk', 'C'),
(255, 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'D'),
(256, 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'D'),
(257, 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(258, 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'D'),
(259, 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(260, 'Sedang', 'Baik', 'Baik', 'Baik', 'Baik', 'A'),
(261, 'Sedang', 'Baik', 'Baik', 'Baik', 'Sedang', 'A'),
(262, 'Sedang', 'Baik', 'Baik', 'Baik', 'Buruk', 'A'),
(263, 'Sedang', 'Baik', 'Baik', 'Baik', 'Sangat Buruk', 'A'),
(264, 'Sedang', 'Baik', 'Baik', 'Sedang', 'Baik', 'A'),
(265, 'Sedang', 'Baik', 'Baik', 'Sedang', 'Sedang', 'B'),
(266, 'Sedang', 'Baik', 'Baik', 'Sedang', 'Buruk', 'A'),
(267, 'Sedang', 'Baik', 'Baik', 'Sedang', 'Sangat Buruk', 'A'),
(268, 'Sedang', 'Baik', 'Baik', 'Buruk', 'Baik', 'A'),
(269, 'Sedang', 'Baik', 'Baik', 'Buruk', 'Sedang', 'A'),
(270, 'Sedang', 'Baik', 'Baik', 'Buruk', 'Buruk', 'A'),
(271, 'Sedang', 'Baik', 'Baik', 'Buruk', 'Sangat Buruk', 'A'),
(272, 'Sedang', 'Baik', 'Baik', 'Sangat Buruk', 'Baik', 'A'),
(273, 'Sedang', 'Baik', 'Baik', 'Sangat Buruk', 'Sedang', 'A'),
(274, 'Sedang', 'Baik', 'Baik', 'Sangat Buruk', 'Buruk', 'A'),
(275, 'Sedang', 'Baik', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'A'),
(276, 'Sedang', 'Baik', 'Sedang', 'Baik', 'Baik', 'A'),
(277, 'Sedang', 'Baik', 'Sedang', 'Baik', 'Sedang', 'B'),
(278, 'Sedang', 'Baik', 'Sedang', 'Baik', 'Buruk', 'A'),
(279, 'Sedang', 'Baik', 'Sedang', 'Baik', 'Sangat Buruk', 'A'),
(280, 'Sedang', 'Baik', 'Sedang', 'Sedang', 'Baik', 'B'),
(281, 'Sedang', 'Baik', 'Sedang', 'Sedang', 'Sedang', 'B'),
(282, 'Sedang', 'Baik', 'Sedang', 'Sedang', 'Buruk', 'B'),
(283, 'Sedang', 'Baik', 'Sedang', 'Sedang', 'Sangat Buruk', 'B'),
(284, 'Sedang', 'Baik', 'Sedang', 'Buruk', 'Baik', 'A'),
(285, 'Sedang', 'Baik', 'Sedang', 'Buruk', 'Sedang', 'B'),
(286, 'Sedang', 'Baik', 'Sedang', 'Buruk', 'Buruk', 'C'),
(287, 'Sedang', 'Baik', 'Sedang', 'Buruk', 'Sangat Buruk', 'B'),
(288, 'Sedang', 'Baik', 'Sedang', 'Sangat Buruk', 'Baik', 'A'),
(289, 'Sedang', 'Baik', 'Sedang', 'Sangat Buruk', 'Sedang', 'B'),
(290, 'Sedang', 'Baik', 'Sedang', 'Sangat Buruk', 'Buruk', 'B'),
(291, 'Sedang', 'Baik', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(292, 'Sedang', 'Baik', 'Buruk', 'Baik', 'Baik', 'A'),
(293, 'Sedang', 'Baik', 'Buruk', 'Baik', 'Sedang', 'A'),
(294, 'Sedang', 'Baik', 'Buruk', 'Baik', 'Buruk', 'A'),
(295, 'Sedang', 'Baik', 'Buruk', 'Baik', 'Sangat Buruk', 'A'),
(296, 'Sedang', 'Baik', 'Buruk', 'Sedang', 'Baik', 'A'),
(297, 'Sedang', 'Baik', 'Buruk', 'Sedang', 'Sedang', 'B'),
(298, 'Sedang', 'Baik', 'Buruk', 'Sedang', 'Buruk', 'C'),
(299, 'Sedang', 'Baik', 'Buruk', 'Sedang', 'Sangat Buruk', 'B'),
(300, 'Sedang', 'Baik', 'Buruk', 'Buruk', 'Baik', 'A'),
(301, 'Sedang', 'Baik', 'Buruk', 'Buruk', 'Sedang', 'C'),
(302, 'Sedang', 'Baik', 'Buruk', 'Buruk', 'Buruk', 'C'),
(303, 'Sedang', 'Baik', 'Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(304, 'Sedang', 'Baik', 'Buruk', 'Sangat Buruk', 'Baik', 'A'),
(305, 'Sedang', 'Baik', 'Buruk', 'Sangat Buruk', 'Sedang', 'B'),
(306, 'Sedang', 'Baik', 'Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(307, 'Sedang', 'Baik', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(308, 'Sedang', 'Baik', 'Sangat Buruk', 'Baik', 'Baik', 'A'),
(309, 'Sedang', 'Baik', 'Sangat Buruk', 'Baik', 'Sedang', 'A'),
(310, 'Sedang', 'Baik', 'Sangat Buruk', 'Baik', 'Buruk', 'A'),
(311, 'Sedang', 'Baik', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'A'),
(312, 'Sedang', 'Baik', 'Sangat Buruk', 'Sedang', 'Baik', 'A'),
(313, 'Sedang', 'Baik', 'Sangat Buruk', 'Sedang', 'Sedang', 'B'),
(314, 'Sedang', 'Baik', 'Sangat Buruk', 'Sedang', 'Buruk', 'B'),
(315, 'Sedang', 'Baik', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(316, 'Sedang', 'Baik', 'Sangat Buruk', 'Buruk', 'Baik', 'A'),
(317, 'Sedang', 'Baik', 'Sangat Buruk', 'Buruk', 'Sedang', 'B'),
(318, 'Sedang', 'Baik', 'Sangat Buruk', 'Buruk', 'Buruk', 'C'),
(319, 'Sedang', 'Baik', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'D'),
(320, 'Sedang', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'A'),
(321, 'Sedang', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(322, 'Sedang', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'D'),
(323, 'Sedang', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(324, 'Sedang', 'Sedang', 'Baik', 'Baik', 'Baik', 'A'),
(325, 'Sedang', 'Sedang', 'Baik', 'Baik', 'Sedang', 'B'),
(326, 'Sedang', 'Sedang', 'Baik', 'Baik', 'Buruk', 'A'),
(327, 'Sedang', 'Sedang', 'Baik', 'Baik', 'Sangat Buruk', 'A'),
(328, 'Sedang', 'Sedang', 'Baik', 'Sedang', 'Baik', 'B'),
(329, 'Sedang', 'Sedang', 'Baik', 'Sedang', 'Sedang', 'B'),
(330, 'Sedang', 'Sedang', 'Baik', 'Sedang', 'Buruk', 'B'),
(331, 'Sedang', 'Sedang', 'Baik', 'Sedang', 'Sangat Buruk', 'B'),
(332, 'Sedang', 'Sedang', 'Baik', 'Buruk', 'Baik', 'A'),
(333, 'Sedang', 'Sedang', 'Baik', 'Buruk', 'Sedang', 'B'),
(334, 'Sedang', 'Sedang', 'Baik', 'Buruk', 'Buruk', 'C'),
(335, 'Sedang', 'Sedang', 'Baik', 'Buruk', 'Sangat Buruk', 'B'),
(336, 'Sedang', 'Sedang', 'Baik', 'Sangat Buruk', 'Baik', 'A'),
(337, 'Sedang', 'Sedang', 'Baik', 'Sangat Buruk', 'Sedang', 'B'),
(338, 'Sedang', 'Sedang', 'Baik', 'Sangat Buruk', 'Buruk', 'B'),
(339, 'Sedang', 'Sedang', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(340, 'Sedang', 'Sedang', 'Sedang', 'Baik', 'Baik', 'B'),
(341, 'Sedang', 'Sedang', 'Sedang', 'Baik', 'Sedang', 'B'),
(342, 'Sedang', 'Sedang', 'Sedang', 'Baik', 'Buruk', 'B'),
(343, 'Sedang', 'Sedang', 'Sedang', 'Baik', 'Sangat Buruk', 'B'),
(344, 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Baik', 'B'),
(345, 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'B'),
(346, 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Buruk', 'B'),
(347, 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Sangat Buruk', 'B'),
(348, 'Sedang', 'Sedang', 'Sedang', 'Buruk', 'Baik', 'B'),
(349, 'Sedang', 'Sedang', 'Sedang', 'Buruk', 'Sedang', 'B'),
(350, 'Sedang', 'Sedang', 'Sedang', 'Buruk', 'Buruk', 'B'),
(351, 'Sedang', 'Sedang', 'Sedang', 'Buruk', 'Sangat Buruk', 'B'),
(352, 'Sedang', 'Sedang', 'Sedang', 'Sangat Buruk', 'Baik', 'B'),
(353, 'Sedang', 'Sedang', 'Sedang', 'Sangat Buruk', 'Sedang', 'B'),
(354, 'Sedang', 'Sedang', 'Sedang', 'Sangat Buruk', 'Buruk', 'B'),
(355, 'Sedang', 'Sedang', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'B'),
(356, 'Sedang', 'Sedang', 'Buruk', 'Baik', 'Baik', 'A'),
(357, 'Sedang', 'Sedang', 'Buruk', 'Baik', 'Sedang', 'B'),
(358, 'Sedang', 'Sedang', 'Buruk', 'Baik', 'Buruk', 'C'),
(359, 'Sedang', 'Sedang', 'Buruk', 'Baik', 'Sangat Buruk', 'B'),
(360, 'Sedang', 'Sedang', 'Buruk', 'Sedang', 'Baik', 'B'),
(361, 'Sedang', 'Sedang', 'Buruk', 'Sedang', 'Sedang', 'B'),
(362, 'Sedang', 'Sedang', 'Buruk', 'Sedang', 'Buruk', 'B'),
(363, 'Sedang', 'Sedang', 'Buruk', 'Sedang', 'Sangat Buruk', 'B'),
(364, 'Sedang', 'Sedang', 'Buruk', 'Buruk', 'Baik', 'C'),
(365, 'Sedang', 'Sedang', 'Buruk', 'Buruk', 'Sedang', 'B'),
(366, 'Sedang', 'Sedang', 'Buruk', 'Buruk', 'Buruk', 'C'),
(367, 'Sedang', 'Sedang', 'Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(368, 'Sedang', 'Sedang', 'Buruk', 'Sangat Buruk', 'Baik', 'B'),
(369, 'Sedang', 'Sedang', 'Buruk', 'Sangat Buruk', 'Sedang', 'B'),
(370, 'Sedang', 'Sedang', 'Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(371, 'Sedang', 'Sedang', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(372, 'Sedang', 'Sedang', 'Sangat Buruk', 'Baik', 'Baik', 'A'),
(373, 'Sedang', 'Sedang', 'Sangat Buruk', 'Baik', 'Sedang', 'B'),
(374, 'Sedang', 'Sedang', 'Sangat Buruk', 'Baik', 'Buruk', 'B'),
(375, 'Sedang', 'Sedang', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'D'),
(376, 'Sedang', 'Sedang', 'Sangat Buruk', 'Sedang', 'Baik', 'B'),
(377, 'Sedang', 'Sedang', 'Sangat Buruk', 'Sedang', 'Sedang', 'B'),
(378, 'Sedang', 'Sedang', 'Sangat Buruk', 'Sedang', 'Buruk', 'B'),
(379, 'Sedang', 'Sedang', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'B'),
(380, 'Sedang', 'Sedang', 'Sangat Buruk', 'Buruk', 'Baik', 'B'),
(381, 'Sedang', 'Sedang', 'Sangat Buruk', 'Buruk', 'Sedang', 'B'),
(382, 'Sedang', 'Sedang', 'Sangat Buruk', 'Buruk', 'Buruk', 'C'),
(383, 'Sedang', 'Sedang', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'D'),
(384, 'Sedang', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'D'),
(385, 'Sedang', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'B'),
(386, 'Sedang', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'D'),
(387, 'Sedang', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(388, 'Sedang', 'Buruk', 'Baik', 'Baik', 'Baik', 'A'),
(389, 'Sedang', 'Buruk', 'Baik', 'Baik', 'Sedang', 'A'),
(390, 'Sedang', 'Buruk', 'Baik', 'Baik', 'Buruk', 'A'),
(391, 'Sedang', 'Buruk', 'Baik', 'Baik', 'Sangat Buruk', 'A'),
(392, 'Sedang', 'Buruk', 'Baik', 'Sedang', 'Baik', 'A'),
(393, 'Sedang', 'Buruk', 'Baik', 'Sedang', 'Sedang', 'B'),
(394, 'Sedang', 'Buruk', 'Baik', 'Sedang', 'Buruk', 'C'),
(395, 'Sedang', 'Buruk', 'Baik', 'Sedang', 'Sangat Buruk', 'B'),
(396, 'Sedang', 'Buruk', 'Baik', 'Buruk', 'Baik', 'A'),
(397, 'Sedang', 'Buruk', 'Baik', 'Buruk', 'Sedang', 'C'),
(398, 'Sedang', 'Buruk', 'Baik', 'Buruk', 'Buruk', 'C'),
(399, 'Sedang', 'Buruk', 'Baik', 'Buruk', 'Sangat Buruk', 'C'),
(400, 'Sedang', 'Buruk', 'Baik', 'Sangat Buruk', 'Baik', 'A'),
(401, 'Sedang', 'Buruk', 'Baik', 'Sangat Buruk', 'Sedang', 'B'),
(402, 'Sedang', 'Buruk', 'Baik', 'Sangat Buruk', 'Buruk', 'C'),
(403, 'Sedang', 'Buruk', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(404, 'Sedang', 'Buruk', 'Sedang', 'Baik', 'Baik', 'A'),
(405, 'Sedang', 'Buruk', 'Sedang', 'Baik', 'Sedang', 'B'),
(406, 'Sedang', 'Buruk', 'Sedang', 'Baik', 'Buruk', 'C'),
(407, 'Sedang', 'Buruk', 'Sedang', 'Baik', 'Sangat Buruk', 'B'),
(408, 'Sedang', 'Buruk', 'Sedang', 'Sedang', 'Baik', 'B'),
(409, 'Sedang', 'Buruk', 'Sedang', 'Sedang', 'Sedang', 'B'),
(410, 'Sedang', 'Buruk', 'Sedang', 'Sedang', 'Buruk', 'B'),
(411, 'Sedang', 'Buruk', 'Sedang', 'Sedang', 'Sangat Buruk', 'B'),
(412, 'Sedang', 'Buruk', 'Sedang', 'Buruk', 'Baik', 'C'),
(413, 'Sedang', 'Buruk', 'Sedang', 'Buruk', 'Sedang', 'B'),
(414, 'Sedang', 'Buruk', 'Sedang', 'Buruk', 'Buruk', 'C'),
(415, 'Sedang', 'Buruk', 'Sedang', 'Buruk', 'Sangat Buruk', 'C'),
(416, 'Sedang', 'Buruk', 'Sedang', 'Sangat Buruk', 'Baik', 'B'),
(417, 'Sedang', 'Buruk', 'Sedang', 'Sangat Buruk', 'Sedang', 'B'),
(418, 'Sedang', 'Buruk', 'Sedang', 'Sangat Buruk', 'Buruk', 'C'),
(419, 'Sedang', 'Buruk', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(420, 'Sedang', 'Buruk', 'Buruk', 'Baik', 'Baik', 'A'),
(421, 'Sedang', 'Buruk', 'Buruk', 'Baik', 'Sedang', 'C'),
(422, 'Sedang', 'Buruk', 'Buruk', 'Baik', 'Buruk', 'C'),
(423, 'Sedang', 'Buruk', 'Buruk', 'Baik', 'Sangat Buruk', 'C'),
(424, 'Sedang', 'Buruk', 'Buruk', 'Sedang', 'Baik', 'C'),
(425, 'Sedang', 'Buruk', 'Buruk', 'Sedang', 'Sedang', 'B'),
(426, 'Sedang', 'Buruk', 'Buruk', 'Sedang', 'Buruk', 'C'),
(427, 'Sedang', 'Buruk', 'Buruk', 'Sedang', 'Sangat Buruk', 'C'),
(428, 'Sedang', 'Buruk', 'Buruk', 'Buruk', 'Baik', 'C'),
(429, 'Sedang', 'Buruk', 'Buruk', 'Buruk', 'Sedang', 'C'),
(430, 'Sedang', 'Buruk', 'Buruk', 'Buruk', 'Buruk', 'C'),
(431, 'Sedang', 'Buruk', 'Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(432, 'Sedang', 'Buruk', 'Buruk', 'Sangat Buruk', 'Baik', 'C'),
(433, 'Sedang', 'Buruk', 'Buruk', 'Sangat Buruk', 'Sedang', 'C'),
(434, 'Sedang', 'Buruk', 'Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(435, 'Sedang', 'Buruk', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'C'),
(436, 'Sedang', 'Buruk', 'Sangat Buruk', 'Baik', 'Baik', 'A'),
(437, 'Sedang', 'Buruk', 'Sangat Buruk', 'Baik', 'Sedang', 'B'),
(438, 'Sedang', 'Buruk', 'Sangat Buruk', 'Baik', 'Buruk', 'C'),
(439, 'Sedang', 'Buruk', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'D'),
(440, 'Sedang', 'Buruk', 'Sangat Buruk', 'Sedang', 'Baik', 'B'),
(441, 'Sedang', 'Buruk', 'Sangat Buruk', 'Sedang', 'Sedang', 'B'),
(442, 'Sedang', 'Buruk', 'Sangat Buruk', 'Sedang', 'Buruk', 'C'),
(443, 'Sedang', 'Buruk', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(444, 'Sedang', 'Buruk', 'Sangat Buruk', 'Buruk', 'Baik', 'C'),
(445, 'Sedang', 'Buruk', 'Sangat Buruk', 'Buruk', 'Sedang', 'C'),
(446, 'Sedang', 'Buruk', 'Sangat Buruk', 'Buruk', 'Buruk', 'C'),
(447, 'Sedang', 'Buruk', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(448, 'Sedang', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'D'),
(449, 'Sedang', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(450, 'Sedang', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(451, 'Sedang', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(452, 'Sedang', 'Sangat Buruk', 'Baik', 'Baik', 'Baik', 'A'),
(453, 'Sedang', 'Sangat Buruk', 'Baik', 'Baik', 'Sedang', 'A'),
(454, 'Sedang', 'Sangat Buruk', 'Baik', 'Baik', 'Buruk', 'A'),
(455, 'Sedang', 'Sangat Buruk', 'Baik', 'Baik', 'Sangat Buruk', 'A'),
(456, 'Sedang', 'Sangat Buruk', 'Baik', 'Sedang', 'Baik', 'A'),
(457, 'Sedang', 'Sangat Buruk', 'Baik', 'Sedang', 'Sedang', 'B'),
(458, 'Sedang', 'Sangat Buruk', 'Baik', 'Sedang', 'Buruk', 'B'),
(459, 'Sedang', 'Sangat Buruk', 'Baik', 'Sedang', 'Sangat Buruk', 'D'),
(460, 'Sedang', 'Sangat Buruk', 'Baik', 'Buruk', 'Baik', 'A'),
(461, 'Sedang', 'Sangat Buruk', 'Baik', 'Buruk', 'Sedang', 'B'),
(462, 'Sedang', 'Sangat Buruk', 'Baik', 'Buruk', 'Buruk', 'C'),
(463, 'Sedang', 'Sangat Buruk', 'Baik', 'Buruk', 'Sangat Buruk', 'D'),
(464, 'Sedang', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Baik', 'A'),
(465, 'Sedang', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Sedang', 'D'),
(466, 'Sedang', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Buruk', 'D'),
(467, 'Sedang', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(468, 'Sedang', 'Sangat Buruk', 'Sedang', 'Baik', 'Baik', 'A'),
(469, 'Sedang', 'Sangat Buruk', 'Sedang', 'Baik', 'Sedang', 'B'),
(470, 'Sedang', 'Sangat Buruk', 'Sedang', 'Baik', 'Buruk', 'B'),
(471, 'Sedang', 'Sangat Buruk', 'Sedang', 'Baik', 'Sangat Buruk', 'D'),
(472, 'Sedang', 'Sangat Buruk', 'Sedang', 'Sedang', 'Baik', 'B'),
(473, 'Sedang', 'Sangat Buruk', 'Sedang', 'Sedang', 'Sedang', 'B'),
(474, 'Sedang', 'Sangat Buruk', 'Sedang', 'Sedang', 'Buruk', 'B'),
(475, 'Sedang', 'Sangat Buruk', 'Sedang', 'Sedang', 'Sangat Buruk', 'B'),
(476, 'Sedang', 'Sangat Buruk', 'Sedang', 'Buruk', 'Baik', 'B'),
(477, 'Sedang', 'Sangat Buruk', 'Sedang', 'Buruk', 'Sedang', 'B'),
(478, 'Sedang', 'Sangat Buruk', 'Sedang', 'Buruk', 'Buruk', 'C'),
(479, 'Sedang', 'Sangat Buruk', 'Sedang', 'Buruk', 'Sangat Buruk', 'D'),
(480, 'Sedang', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Baik', 'D'),
(481, 'Sedang', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Sedang', 'B'),
(482, 'Sedang', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Buruk', 'D'),
(483, 'Sedang', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(484, 'Sedang', 'Sangat Buruk', 'Buruk', 'Baik', 'Baik', 'A'),
(485, 'Sedang', 'Sangat Buruk', 'Buruk', 'Baik', 'Sedang', 'B'),
(486, 'Sedang', 'Sangat Buruk', 'Buruk', 'Baik', 'Buruk', 'C'),
(487, 'Sedang', 'Sangat Buruk', 'Buruk', 'Baik', 'Sangat Buruk', 'D'),
(488, 'Sedang', 'Sangat Buruk', 'Buruk', 'Sedang', 'Baik', 'B'),
(489, 'Sedang', 'Sangat Buruk', 'Buruk', 'Sedang', 'Sedang', 'B'),
(490, 'Sedang', 'Sangat Buruk', 'Buruk', 'Sedang', 'Buruk', 'C'),
(491, 'Sedang', 'Sangat Buruk', 'Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(492, 'Sedang', 'Sangat Buruk', 'Buruk', 'Buruk', 'Baik', 'C'),
(493, 'Sedang', 'Sangat Buruk', 'Buruk', 'Buruk', 'Sedang', 'C'),
(494, 'Sedang', 'Sangat Buruk', 'Buruk', 'Buruk', 'Buruk', 'C'),
(495, 'Sedang', 'Sangat Buruk', 'Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(496, 'Sedang', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Baik', 'D'),
(497, 'Sedang', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(498, 'Sedang', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(499, 'Sedang', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(500, 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Baik', 'A'),
(501, 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Sedang', 'D'),
(502, 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Buruk', 'D'),
(503, 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'D'),
(504, 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Baik', 'D'),
(505, 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Sedang', 'B'),
(506, 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Buruk', 'D'),
(507, 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(508, 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Baik', 'D'),
(509, 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Sedang', 'D'),
(510, 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Buruk', 'C'),
(511, 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'D'),
(512, 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'D'),
(513, 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(514, 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'D'),
(515, 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(516, 'Buruk', 'Baik', 'Baik', 'Baik', 'Baik', 'A'),
(517, 'Buruk', 'Baik', 'Baik', 'Baik', 'Sedang', 'A'),
(518, 'Buruk', 'Baik', 'Baik', 'Baik', 'Buruk', 'A'),
(519, 'Buruk', 'Baik', 'Baik', 'Baik', 'Sangat Buruk', 'A'),
(520, 'Buruk', 'Baik', 'Baik', 'Sedang', 'Baik', 'A'),
(521, 'Buruk', 'Baik', 'Baik', 'Sedang', 'Sedang', 'A'),
(522, 'Buruk', 'Baik', 'Baik', 'Sedang', 'Buruk', 'A'),
(523, 'Buruk', 'Baik', 'Baik', 'Sedang', 'Sangat Buruk', 'A'),
(524, 'Buruk', 'Baik', 'Baik', 'Buruk', 'Baik', 'A'),
(525, 'Buruk', 'Baik', 'Baik', 'Buruk', 'Sedang', 'A'),
(526, 'Buruk', 'Baik', 'Baik', 'Buruk', 'Buruk', 'C'),
(527, 'Buruk', 'Baik', 'Baik', 'Buruk', 'Sangat Buruk', 'A'),
(528, 'Buruk', 'Baik', 'Baik', 'Sangat Buruk', 'Baik', 'A'),
(529, 'Buruk', 'Baik', 'Baik', 'Sangat Buruk', 'Sedang', 'A'),
(530, 'Buruk', 'Baik', 'Baik', 'Sangat Buruk', 'Buruk', 'A'),
(531, 'Buruk', 'Baik', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'A'),
(532, 'Buruk', 'Baik', 'Sedang', 'Baik', 'Baik', 'A'),
(533, 'Buruk', 'Baik', 'Sedang', 'Baik', 'Sedang', 'A'),
(534, 'Buruk', 'Baik', 'Sedang', 'Baik', 'Buruk', 'A'),
(535, 'Buruk', 'Baik', 'Sedang', 'Baik', 'Sangat Buruk', 'A'),
(536, 'Buruk', 'Baik', 'Sedang', 'Sedang', 'Baik', 'A'),
(537, 'Buruk', 'Baik', 'Sedang', 'Sedang', 'Sedang', 'B'),
(538, 'Buruk', 'Baik', 'Sedang', 'Sedang', 'Buruk', 'C'),
(539, 'Buruk', 'Baik', 'Sedang', 'Sedang', 'Sangat Buruk', 'B'),
(540, 'Buruk', 'Baik', 'Sedang', 'Buruk', 'Baik', 'A'),
(541, 'Buruk', 'Baik', 'Sedang', 'Buruk', 'Sedang', 'C'),
(542, 'Buruk', 'Baik', 'Sedang', 'Buruk', 'Buruk', 'C'),
(543, 'Buruk', 'Baik', 'Sedang', 'Buruk', 'Sangat Buruk', 'C'),
(544, 'Buruk', 'Baik', 'Sedang', 'Sangat Buruk', 'Baik', 'A'),
(545, 'Buruk', 'Baik', 'Sedang', 'Sangat Buruk', 'Sedang', 'B'),
(546, 'Buruk', 'Baik', 'Sedang', 'Sangat Buruk', 'Buruk', 'C'),
(547, 'Buruk', 'Baik', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(548, 'Buruk', 'Baik', 'Buruk', 'Baik', 'Baik', 'A'),
(549, 'Buruk', 'Baik', 'Buruk', 'Baik', 'Sedang', 'A'),
(550, 'Buruk', 'Baik', 'Buruk', 'Baik', 'Buruk', 'C'),
(551, 'Buruk', 'Baik', 'Buruk', 'Baik', 'Sangat Buruk', 'A'),
(552, 'Buruk', 'Baik', 'Buruk', 'Sedang', 'Baik', 'A'),
(553, 'Buruk', 'Baik', 'Buruk', 'Sedang', 'Sedang', 'C'),
(554, 'Buruk', 'Baik', 'Buruk', 'Sedang', 'Buruk', 'C'),
(555, 'Buruk', 'Baik', 'Buruk', 'Sedang', 'Sangat Buruk', 'C'),
(556, 'Buruk', 'Baik', 'Buruk', 'Buruk', 'Baik', 'C'),
(557, 'Buruk', 'Baik', 'Buruk', 'Buruk', 'Sedang', 'C'),
(558, 'Buruk', 'Baik', 'Buruk', 'Buruk', 'Buruk', 'C'),
(559, 'Buruk', 'Baik', 'Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(560, 'Buruk', 'Baik', 'Buruk', 'Sangat Buruk', 'Baik', 'A'),
(561, 'Buruk', 'Baik', 'Buruk', 'Sangat Buruk', 'Sedang', 'C'),
(562, 'Buruk', 'Baik', 'Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(563, 'Buruk', 'Baik', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'C'),
(564, 'Buruk', 'Baik', 'Sangat Buruk', 'Baik', 'Baik', 'A'),
(565, 'Buruk', 'Baik', 'Sangat Buruk', 'Baik', 'Sedang', 'A'),
(566, 'Buruk', 'Baik', 'Sangat Buruk', 'Baik', 'Buruk', 'A'),
(567, 'Buruk', 'Baik', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'A'),
(568, 'Buruk', 'Baik', 'Sangat Buruk', 'Sedang', 'Baik', 'A'),
(569, 'Buruk', 'Baik', 'Sangat Buruk', 'Sedang', 'Sedang', 'B'),
(570, 'Buruk', 'Baik', 'Sangat Buruk', 'Sedang', 'Buruk', 'C'),
(571, 'Buruk', 'Baik', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(572, 'Buruk', 'Baik', 'Sangat Buruk', 'Buruk', 'Baik', 'A'),
(573, 'Buruk', 'Baik', 'Sangat Buruk', 'Buruk', 'Sedang', 'C'),
(574, 'Buruk', 'Baik', 'Sangat Buruk', 'Buruk', 'Buruk', 'C'),
(575, 'Buruk', 'Baik', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(576, 'Buruk', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'A'),
(577, 'Buruk', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(578, 'Buruk', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(579, 'Buruk', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(580, 'Buruk', 'Sedang', 'Baik', 'Baik', 'Baik', 'A'),
(581, 'Buruk', 'Sedang', 'Baik', 'Baik', 'Sedang', 'A'),
(582, 'Buruk', 'Sedang', 'Baik', 'Baik', 'Buruk', 'A'),
(583, 'Buruk', 'Sedang', 'Baik', 'Baik', 'Sangat Buruk', 'A'),
(584, 'Buruk', 'Sedang', 'Baik', 'Sedang', 'Baik', 'A'),
(585, 'Buruk', 'Sedang', 'Baik', 'Sedang', 'Sedang', 'B'),
(586, 'Buruk', 'Sedang', 'Baik', 'Sedang', 'Buruk', 'C'),
(587, 'Buruk', 'Sedang', 'Baik', 'Sedang', 'Sangat Buruk', 'B'),
(588, 'Buruk', 'Sedang', 'Baik', 'Buruk', 'Baik', 'A'),
(589, 'Buruk', 'Sedang', 'Baik', 'Buruk', 'Sedang', 'C'),
(590, 'Buruk', 'Sedang', 'Baik', 'Buruk', 'Buruk', 'C'),
(591, 'Buruk', 'Sedang', 'Baik', 'Buruk', 'Sangat Buruk', 'C'),
(592, 'Buruk', 'Sedang', 'Baik', 'Sangat Buruk', 'Baik', 'A'),
(593, 'Buruk', 'Sedang', 'Baik', 'Sangat Buruk', 'Sedang', 'B'),
(594, 'Buruk', 'Sedang', 'Baik', 'Sangat Buruk', 'Buruk', 'C'),
(595, 'Buruk', 'Sedang', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(596, 'Buruk', 'Sedang', 'Sedang', 'Baik', 'Baik', 'A'),
(597, 'Buruk', 'Sedang', 'Sedang', 'Baik', 'Sedang', 'B'),
(598, 'Buruk', 'Sedang', 'Sedang', 'Baik', 'Buruk', 'C'),
(599, 'Buruk', 'Sedang', 'Sedang', 'Baik', 'Sangat Buruk', 'B'),
(600, 'Buruk', 'Sedang', 'Sedang', 'Sedang', 'Baik', 'B'),
(601, 'Buruk', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'B'),
(602, 'Buruk', 'Sedang', 'Sedang', 'Sedang', 'Buruk', 'B'),
(603, 'Buruk', 'Sedang', 'Sedang', 'Sedang', 'Sangat Buruk', 'B'),
(604, 'Buruk', 'Sedang', 'Sedang', 'Buruk', 'Baik', 'C'),
(605, 'Buruk', 'Sedang', 'Sedang', 'Buruk', 'Sedang', 'B'),
(606, 'Buruk', 'Sedang', 'Sedang', 'Buruk', 'Buruk', 'C'),
(607, 'Buruk', 'Sedang', 'Sedang', 'Buruk', 'Sangat Buruk', 'C'),
(608, 'Buruk', 'Sedang', 'Sedang', 'Sangat Buruk', 'Baik', 'B'),
(609, 'Buruk', 'Sedang', 'Sedang', 'Sangat Buruk', 'Sedang', 'B'),
(610, 'Buruk', 'Sedang', 'Sedang', 'Sangat Buruk', 'Buruk', 'C'),
(611, 'Buruk', 'Sedang', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(612, 'Buruk', 'Sedang', 'Buruk', 'Baik', 'Baik', 'A'),
(613, 'Buruk', 'Sedang', 'Buruk', 'Baik', 'Sedang', 'C'),
(614, 'Buruk', 'Sedang', 'Buruk', 'Baik', 'Buruk', 'C'),
(615, 'Buruk', 'Sedang', 'Buruk', 'Baik', 'Sangat Buruk', 'C'),
(616, 'Buruk', 'Sedang', 'Buruk', 'Sedang', 'Baik', 'C'),
(617, 'Buruk', 'Sedang', 'Buruk', 'Sedang', 'Sedang', 'B'),
(618, 'Buruk', 'Sedang', 'Buruk', 'Sedang', 'Buruk', 'C'),
(619, 'Buruk', 'Sedang', 'Buruk', 'Sedang', 'Sangat Buruk', 'C'),
(620, 'Buruk', 'Sedang', 'Buruk', 'Buruk', 'Baik', 'C'),
(621, 'Buruk', 'Sedang', 'Buruk', 'Buruk', 'Sedang', 'C'),
(622, 'Buruk', 'Sedang', 'Buruk', 'Buruk', 'Buruk', 'C'),
(623, 'Buruk', 'Sedang', 'Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(624, 'Buruk', 'Sedang', 'Buruk', 'Sangat Buruk', 'Baik', 'C'),
(625, 'Buruk', 'Sedang', 'Buruk', 'Sangat Buruk', 'Sedang', 'C'),
(626, 'Buruk', 'Sedang', 'Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(627, 'Buruk', 'Sedang', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'C'),
(628, 'Buruk', 'Sedang', 'Sangat Buruk', 'Baik', 'Baik', 'A'),
(629, 'Buruk', 'Sedang', 'Sangat Buruk', 'Baik', 'Sedang', 'B'),
(630, 'Buruk', 'Sedang', 'Sangat Buruk', 'Baik', 'Buruk', 'C'),
(631, 'Buruk', 'Sedang', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'D'),
(632, 'Buruk', 'Sedang', 'Sangat Buruk', 'Sedang', 'Baik', 'B'),
(633, 'Buruk', 'Sedang', 'Sangat Buruk', 'Sedang', 'Sedang', 'B'),
(634, 'Buruk', 'Sedang', 'Sangat Buruk', 'Sedang', 'Buruk', 'C'),
(635, 'Buruk', 'Sedang', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(636, 'Buruk', 'Sedang', 'Sangat Buruk', 'Buruk', 'Baik', 'C'),
(637, 'Buruk', 'Sedang', 'Sangat Buruk', 'Buruk', 'Sedang', 'C'),
(638, 'Buruk', 'Sedang', 'Sangat Buruk', 'Buruk', 'Buruk', 'C'),
(639, 'Buruk', 'Sedang', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(640, 'Buruk', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'D'),
(641, 'Buruk', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(642, 'Buruk', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(643, 'Buruk', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(644, 'Buruk', 'Buruk', 'Baik', 'Baik', 'Baik', 'A'),
(645, 'Buruk', 'Buruk', 'Baik', 'Baik', 'Sedang', 'A'),
(646, 'Buruk', 'Buruk', 'Baik', 'Baik', 'Buruk', 'C'),
(647, 'Buruk', 'Buruk', 'Baik', 'Baik', 'Sangat Buruk', 'A'),
(648, 'Buruk', 'Buruk', 'Baik', 'Sedang', 'Baik', 'A'),
(649, 'Buruk', 'Buruk', 'Baik', 'Sedang', 'Sedang', 'C'),
(650, 'Buruk', 'Buruk', 'Baik', 'Sedang', 'Buruk', 'C'),
(651, 'Buruk', 'Buruk', 'Baik', 'Sedang', 'Sangat Buruk', 'C'),
(652, 'Buruk', 'Buruk', 'Baik', 'Buruk', 'Baik', 'C'),
(653, 'Buruk', 'Buruk', 'Baik', 'Buruk', 'Sedang', 'C'),
(654, 'Buruk', 'Buruk', 'Baik', 'Buruk', 'Buruk', 'C'),
(655, 'Buruk', 'Buruk', 'Baik', 'Buruk', 'Sangat Buruk', 'C'),
(656, 'Buruk', 'Buruk', 'Baik', 'Sangat Buruk', 'Baik', 'A'),
(657, 'Buruk', 'Buruk', 'Baik', 'Sangat Buruk', 'Sedang', 'C'),
(658, 'Buruk', 'Buruk', 'Baik', 'Sangat Buruk', 'Buruk', 'C'),
(659, 'Buruk', 'Buruk', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'C'),
(660, 'Buruk', 'Buruk', 'Sedang', 'Baik', 'Baik', 'A'),
(661, 'Buruk', 'Buruk', 'Sedang', 'Baik', 'Sedang', 'C'),
(662, 'Buruk', 'Buruk', 'Sedang', 'Baik', 'Buruk', 'C'),
(663, 'Buruk', 'Buruk', 'Sedang', 'Baik', 'Sangat Buruk', 'C'),
(664, 'Buruk', 'Buruk', 'Sedang', 'Sedang', 'Baik', 'C'),
(665, 'Buruk', 'Buruk', 'Sedang', 'Sedang', 'Sedang', 'B'),
(666, 'Buruk', 'Buruk', 'Sedang', 'Sedang', 'Buruk', 'C'),
(667, 'Buruk', 'Buruk', 'Sedang', 'Sedang', 'Sangat Buruk', 'C'),
(668, 'Buruk', 'Buruk', 'Sedang', 'Buruk', 'Baik', 'C'),
(669, 'Buruk', 'Buruk', 'Sedang', 'Buruk', 'Sedang', 'C'),
(670, 'Buruk', 'Buruk', 'Sedang', 'Buruk', 'Buruk', 'C'),
(671, 'Buruk', 'Buruk', 'Sedang', 'Buruk', 'Sangat Buruk', 'C'),
(672, 'Buruk', 'Buruk', 'Sedang', 'Sangat Buruk', 'Baik', 'C'),
(673, 'Buruk', 'Buruk', 'Sedang', 'Sangat Buruk', 'Sedang', 'C'),
(674, 'Buruk', 'Buruk', 'Sedang', 'Sangat Buruk', 'Buruk', 'C'),
(675, 'Buruk', 'Buruk', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'C'),
(676, 'Buruk', 'Buruk', 'Buruk', 'Baik', 'Baik', 'C'),
(677, 'Buruk', 'Buruk', 'Buruk', 'Baik', 'Sedang', 'C'),
(678, 'Buruk', 'Buruk', 'Buruk', 'Baik', 'Buruk', 'C'),
(679, 'Buruk', 'Buruk', 'Buruk', 'Baik', 'Sangat Buruk', 'C'),
(680, 'Buruk', 'Buruk', 'Buruk', 'Sedang', 'Baik', 'C'),
(681, 'Buruk', 'Buruk', 'Buruk', 'Sedang', 'Sedang', 'C'),
(682, 'Buruk', 'Buruk', 'Buruk', 'Sedang', 'Buruk', 'C'),
(683, 'Buruk', 'Buruk', 'Buruk', 'Sedang', 'Sangat Buruk', 'C'),
(684, 'Buruk', 'Buruk', 'Buruk', 'Buruk', 'Baik', 'C'),
(685, 'Buruk', 'Buruk', 'Buruk', 'Buruk', 'Sedang', 'C'),
(686, 'Buruk', 'Buruk', 'Buruk', 'Buruk', 'Buruk', 'C'),
(687, 'Buruk', 'Buruk', 'Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(688, 'Buruk', 'Buruk', 'Buruk', 'Sangat Buruk', 'Baik', 'C'),
(689, 'Buruk', 'Buruk', 'Buruk', 'Sangat Buruk', 'Sedang', 'C'),
(690, 'Buruk', 'Buruk', 'Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(691, 'Buruk', 'Buruk', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'C'),
(692, 'Buruk', 'Buruk', 'Sangat Buruk', 'Baik', 'Baik', 'A'),
(693, 'Buruk', 'Buruk', 'Sangat Buruk', 'Baik', 'Sedang', 'C'),
(694, 'Buruk', 'Buruk', 'Sangat Buruk', 'Baik', 'Buruk', 'C'),
(695, 'Buruk', 'Buruk', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'C'),
(696, 'Buruk', 'Buruk', 'Sangat Buruk', 'Sedang', 'Baik', 'C'),
(697, 'Buruk', 'Buruk', 'Sangat Buruk', 'Sedang', 'Sedang', 'C'),
(698, 'Buruk', 'Buruk', 'Sangat Buruk', 'Sedang', 'Buruk', 'C'),
(699, 'Buruk', 'Buruk', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'C'),
(700, 'Buruk', 'Buruk', 'Sangat Buruk', 'Buruk', 'Baik', 'C'),
(701, 'Buruk', 'Buruk', 'Sangat Buruk', 'Buruk', 'Sedang', 'C'),
(702, 'Buruk', 'Buruk', 'Sangat Buruk', 'Buruk', 'Buruk', 'C'),
(703, 'Buruk', 'Buruk', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(704, 'Buruk', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'C'),
(705, 'Buruk', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'C'),
(706, 'Buruk', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(707, 'Buruk', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(708, 'Buruk', 'Sangat Buruk', 'Baik', 'Baik', 'Baik', 'A'),
(709, 'Buruk', 'Sangat Buruk', 'Baik', 'Baik', 'Sedang', 'A'),
(710, 'Buruk', 'Sangat Buruk', 'Baik', 'Baik', 'Buruk', 'A'),
(711, 'Buruk', 'Sangat Buruk', 'Baik', 'Baik', 'Sangat Buruk', 'A'),
(712, 'Buruk', 'Sangat Buruk', 'Baik', 'Sedang', 'Baik', 'A'),
(713, 'Buruk', 'Sangat Buruk', 'Baik', 'Sedang', 'Sedang', 'B'),
(714, 'Buruk', 'Sangat Buruk', 'Baik', 'Sedang', 'Buruk', 'C'),
(715, 'Buruk', 'Sangat Buruk', 'Baik', 'Sedang', 'Sangat Buruk', 'D'),
(716, 'Buruk', 'Sangat Buruk', 'Baik', 'Buruk', 'Baik', 'A'),
(717, 'Buruk', 'Sangat Buruk', 'Baik', 'Buruk', 'Sedang', 'C'),
(718, 'Buruk', 'Sangat Buruk', 'Baik', 'Buruk', 'Buruk', 'C'),
(719, 'Buruk', 'Sangat Buruk', 'Baik', 'Buruk', 'Sangat Buruk', 'C'),
(720, 'Buruk', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Baik', 'A'),
(721, 'Buruk', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Sedang', 'D'),
(722, 'Buruk', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Buruk', 'C'),
(723, 'Buruk', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(724, 'Buruk', 'Sangat Buruk', 'Sedang', 'Baik', 'Baik', 'A'),
(725, 'Buruk', 'Sangat Buruk', 'Sedang', 'Baik', 'Sedang', 'B'),
(726, 'Buruk', 'Sangat Buruk', 'Sedang', 'Baik', 'Buruk', 'C'),
(727, 'Buruk', 'Sangat Buruk', 'Sedang', 'Baik', 'Sangat Buruk', 'D'),
(728, 'Buruk', 'Sangat Buruk', 'Sedang', 'Sedang', 'Baik', 'B'),
(729, 'Buruk', 'Sangat Buruk', 'Sedang', 'Sedang', 'Sedang', 'B'),
(730, 'Buruk', 'Sangat Buruk', 'Sedang', 'Sedang', 'Buruk', 'C'),
(731, 'Buruk', 'Sangat Buruk', 'Sedang', 'Sedang', 'Sangat Buruk', 'D'),
(732, 'Buruk', 'Sangat Buruk', 'Sedang', 'Buruk', 'Baik', 'C'),
(733, 'Buruk', 'Sangat Buruk', 'Sedang', 'Buruk', 'Sedang', 'C'),
(734, 'Buruk', 'Sangat Buruk', 'Sedang', 'Buruk', 'Buruk', 'C'),
(735, 'Buruk', 'Sangat Buruk', 'Sedang', 'Buruk', 'Sangat Buruk', 'C'),
(736, 'Buruk', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Baik', 'D'),
(737, 'Buruk', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Sedang', 'D'),
(738, 'Buruk', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Buruk', 'C'),
(739, 'Buruk', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(740, 'Buruk', 'Sangat Buruk', 'Buruk', 'Baik', 'Baik', 'A'),
(741, 'Buruk', 'Sangat Buruk', 'Buruk', 'Baik', 'Sedang', 'C'),
(742, 'Buruk', 'Sangat Buruk', 'Buruk', 'Baik', 'Buruk', 'C'),
(743, 'Buruk', 'Sangat Buruk', 'Buruk', 'Baik', 'Sangat Buruk', 'C'),
(744, 'Buruk', 'Sangat Buruk', 'Buruk', 'Sedang', 'Baik', 'C'),
(745, 'Buruk', 'Sangat Buruk', 'Buruk', 'Sedang', 'Sedang', 'C'),
(746, 'Buruk', 'Sangat Buruk', 'Buruk', 'Sedang', 'Buruk', 'C'),
(747, 'Buruk', 'Sangat Buruk', 'Buruk', 'Sedang', 'Sangat Buruk', 'C'),
(748, 'Buruk', 'Sangat Buruk', 'Buruk', 'Buruk', 'Baik', 'C'),
(749, 'Buruk', 'Sangat Buruk', 'Buruk', 'Buruk', 'Sedang', 'C'),
(750, 'Buruk', 'Sangat Buruk', 'Buruk', 'Buruk', 'Buruk', 'C'),
(751, 'Buruk', 'Sangat Buruk', 'Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(752, 'Buruk', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Baik', 'C'),
(753, 'Buruk', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Sedang', 'C'),
(754, 'Buruk', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(755, 'Buruk', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(756, 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Baik', 'A'),
(757, 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Sedang', 'D'),
(758, 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Buruk', 'C'),
(759, 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'D'),
(760, 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Baik', 'D'),
(761, 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Sedang', 'D'),
(762, 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Buruk', 'C'),
(763, 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(764, 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Baik', 'C'),
(765, 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Sedang', 'C'),
(766, 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Buruk', 'C'),
(767, 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'D'),
(768, 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'D'),
(769, 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(770, 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'D'),
(771, 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(772, 'Sangat Buruk', 'Baik', 'Baik', 'Baik', 'Baik', 'A'),
(773, 'Sangat Buruk', 'Baik', 'Baik', 'Baik', 'Sedang', 'A'),
(774, 'Sangat Buruk', 'Baik', 'Baik', 'Baik', 'Buruk', 'A'),
(775, 'Sangat Buruk', 'Baik', 'Baik', 'Baik', 'Sangat Buruk', 'A'),
(776, 'Sangat Buruk', 'Baik', 'Baik', 'Sedang', 'Baik', 'A'),
(777, 'Sangat Buruk', 'Baik', 'Baik', 'Sedang', 'Sedang', 'A'),
(778, 'Sangat Buruk', 'Baik', 'Baik', 'Sedang', 'Buruk', 'A'),
(779, 'Sangat Buruk', 'Baik', 'Baik', 'Sedang', 'Sangat Buruk', 'A'),
(780, 'Sangat Buruk', 'Baik', 'Baik', 'Buruk', 'Baik', 'A'),
(781, 'Sangat Buruk', 'Baik', 'Baik', 'Buruk', 'Sedang', 'A'),
(782, 'Sangat Buruk', 'Baik', 'Baik', 'Buruk', 'Buruk', 'A'),
(783, 'Sangat Buruk', 'Baik', 'Baik', 'Buruk', 'Sangat Buruk', 'A'),
(784, 'Sangat Buruk', 'Baik', 'Baik', 'Sangat Buruk', 'Baik', 'A'),
(785, 'Sangat Buruk', 'Baik', 'Baik', 'Sangat Buruk', 'Sedang', 'A'),
(786, 'Sangat Buruk', 'Baik', 'Baik', 'Sangat Buruk', 'Buruk', 'A'),
(787, 'Sangat Buruk', 'Baik', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(788, 'Sangat Buruk', 'Baik', 'Sedang', 'Baik', 'Baik', 'A'),
(789, 'Sangat Buruk', 'Baik', 'Sedang', 'Baik', 'Sedang', 'A'),
(790, 'Sangat Buruk', 'Baik', 'Sedang', 'Baik', 'Buruk', 'A'),
(791, 'Sangat Buruk', 'Baik', 'Sedang', 'Baik', 'Sangat Buruk', 'A'),
(792, 'Sangat Buruk', 'Baik', 'Sedang', 'Sedang', 'Baik', 'A'),
(793, 'Sangat Buruk', 'Baik', 'Sedang', 'Sedang', 'Sedang', 'B'),
(794, 'Sangat Buruk', 'Baik', 'Sedang', 'Sedang', 'Buruk', 'B'),
(795, 'Sangat Buruk', 'Baik', 'Sedang', 'Sedang', 'Sangat Buruk', 'D'),
(796, 'Sangat Buruk', 'Baik', 'Sedang', 'Buruk', 'Baik', 'A'),
(797, 'Sangat Buruk', 'Baik', 'Sedang', 'Buruk', 'Sedang', 'B'),
(798, 'Sangat Buruk', 'Baik', 'Sedang', 'Buruk', 'Buruk', 'C'),
(799, 'Sangat Buruk', 'Baik', 'Sedang', 'Buruk', 'Sangat Buruk', 'D'),
(800, 'Sangat Buruk', 'Baik', 'Sedang', 'Sangat Buruk', 'Baik', 'A'),
(801, 'Sangat Buruk', 'Baik', 'Sedang', 'Sangat Buruk', 'Sedang', 'D'),
(802, 'Sangat Buruk', 'Baik', 'Sedang', 'Sangat Buruk', 'Buruk', 'D'),
(803, 'Sangat Buruk', 'Baik', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(804, 'Sangat Buruk', 'Baik', 'Buruk', 'Baik', 'Baik', 'A'),
(805, 'Sangat Buruk', 'Baik', 'Buruk', 'Baik', 'Sedang', 'A'),
(806, 'Sangat Buruk', 'Baik', 'Buruk', 'Baik', 'Buruk', 'A'),
(807, 'Sangat Buruk', 'Baik', 'Buruk', 'Baik', 'Sangat Buruk', 'A'),
(808, 'Sangat Buruk', 'Baik', 'Buruk', 'Sedang', 'Baik', 'A');
INSERT INTO `rules` (`id_rules`, `ph`, `suhu`, `tds`, `do`, `salinity`, `grade`) VALUES
(809, 'Sangat Buruk', 'Baik', 'Buruk', 'Sedang', 'Sedang', 'B'),
(810, 'Sangat Buruk', 'Baik', 'Buruk', 'Sedang', 'Buruk', 'C'),
(811, 'Sangat Buruk', 'Baik', 'Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(812, 'Sangat Buruk', 'Baik', 'Buruk', 'Buruk', 'Baik', 'A'),
(813, 'Sangat Buruk', 'Baik', 'Buruk', 'Buruk', 'Sedang', 'C'),
(814, 'Sangat Buruk', 'Baik', 'Buruk', 'Buruk', 'Buruk', 'C'),
(815, 'Sangat Buruk', 'Baik', 'Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(816, 'Sangat Buruk', 'Baik', 'Buruk', 'Sangat Buruk', 'Baik', 'A'),
(817, 'Sangat Buruk', 'Baik', 'Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(818, 'Sangat Buruk', 'Baik', 'Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(819, 'Sangat Buruk', 'Baik', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(820, 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Baik', 'Baik', 'A'),
(821, 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Baik', 'Sedang', 'A'),
(822, 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Baik', 'Buruk', 'A'),
(823, 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'D'),
(824, 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Sedang', 'Baik', 'A'),
(825, 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Sedang', 'Sedang', 'D'),
(826, 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Sedang', 'Buruk', 'D'),
(827, 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(828, 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Buruk', 'Baik', 'A'),
(829, 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Buruk', 'Sedang', 'D'),
(830, 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Buruk', 'Buruk', 'C'),
(831, 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'D'),
(832, 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'D'),
(833, 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(834, 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'D'),
(835, 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(836, 'Sangat Buruk', 'Sedang', 'Baik', 'Baik', 'Baik', 'A'),
(837, 'Sangat Buruk', 'Sedang', 'Baik', 'Baik', 'Sedang', 'A'),
(838, 'Sangat Buruk', 'Sedang', 'Baik', 'Baik', 'Buruk', 'A'),
(839, 'Sangat Buruk', 'Sedang', 'Baik', 'Baik', 'Sangat Buruk', 'A'),
(840, 'Sangat Buruk', 'Sedang', 'Baik', 'Sedang', 'Baik', 'A'),
(841, 'Sangat Buruk', 'Sedang', 'Baik', 'Sedang', 'Sedang', 'B'),
(842, 'Sangat Buruk', 'Sedang', 'Baik', 'Sedang', 'Buruk', 'B'),
(843, 'Sangat Buruk', 'Sedang', 'Baik', 'Sedang', 'Sangat Buruk', 'D'),
(844, 'Sangat Buruk', 'Sedang', 'Baik', 'Buruk', 'Baik', 'A'),
(845, 'Sangat Buruk', 'Sedang', 'Baik', 'Buruk', 'Sedang', 'B'),
(846, 'Sangat Buruk', 'Sedang', 'Baik', 'Buruk', 'Buruk', 'C'),
(847, 'Sangat Buruk', 'Sedang', 'Baik', 'Buruk', 'Sangat Buruk', 'D'),
(848, 'Sangat Buruk', 'Sedang', 'Baik', 'Sangat Buruk', 'Baik', 'A'),
(849, 'Sangat Buruk', 'Sedang', 'Baik', 'Sangat Buruk', 'Sedang', 'D'),
(850, 'Sangat Buruk', 'Sedang', 'Baik', 'Sangat Buruk', 'Buruk', 'D'),
(851, 'Sangat Buruk', 'Sedang', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(852, 'Sangat Buruk', 'Sedang', 'Sedang', 'Baik', 'Baik', 'A'),
(853, 'Sangat Buruk', 'Sedang', 'Sedang', 'Baik', 'Sedang', 'B'),
(854, 'Sangat Buruk', 'Sedang', 'Sedang', 'Baik', 'Buruk', 'B'),
(855, 'Sangat Buruk', 'Sedang', 'Sedang', 'Baik', 'Sangat Buruk', 'D'),
(856, 'Sangat Buruk', 'Sedang', 'Sedang', 'Sedang', 'Baik', 'B'),
(857, 'Sangat Buruk', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'B'),
(858, 'Sangat Buruk', 'Sedang', 'Sedang', 'Sedang', 'Buruk', 'B'),
(859, 'Sangat Buruk', 'Sedang', 'Sedang', 'Sedang', 'Sangat Buruk', 'B'),
(860, 'Sangat Buruk', 'Sedang', 'Sedang', 'Buruk', 'Baik', 'B'),
(861, 'Sangat Buruk', 'Sedang', 'Sedang', 'Buruk', 'Sedang', 'B'),
(862, 'Sangat Buruk', 'Sedang', 'Sedang', 'Buruk', 'Buruk', 'C'),
(863, 'Sangat Buruk', 'Sedang', 'Sedang', 'Buruk', 'Sangat Buruk', 'D'),
(864, 'Sangat Buruk', 'Sedang', 'Sedang', 'Sangat Buruk', 'Baik', 'D'),
(865, 'Sangat Buruk', 'Sedang', 'Sedang', 'Sangat Buruk', 'Sedang', 'B'),
(866, 'Sangat Buruk', 'Sedang', 'Sedang', 'Sangat Buruk', 'Buruk', 'D'),
(867, 'Sangat Buruk', 'Sedang', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(868, 'Sangat Buruk', 'Sedang', 'Buruk', 'Baik', 'Baik', 'A'),
(869, 'Sangat Buruk', 'Sedang', 'Buruk', 'Baik', 'Sedang', 'B'),
(870, 'Sangat Buruk', 'Sedang', 'Buruk', 'Baik', 'Buruk', 'C'),
(871, 'Sangat Buruk', 'Sedang', 'Buruk', 'Baik', 'Sangat Buruk', 'D'),
(872, 'Sangat Buruk', 'Sedang', 'Buruk', 'Sedang', 'Baik', 'B'),
(873, 'Sangat Buruk', 'Sedang', 'Buruk', 'Sedang', 'Sedang', 'B'),
(874, 'Sangat Buruk', 'Sedang', 'Buruk', 'Sedang', 'Buruk', 'C'),
(875, 'Sangat Buruk', 'Sedang', 'Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(876, 'Sangat Buruk', 'Sedang', 'Buruk', 'Buruk', 'Baik', 'C'),
(877, 'Sangat Buruk', 'Sedang', 'Buruk', 'Buruk', 'Sedang', 'C'),
(878, 'Sangat Buruk', 'Sedang', 'Buruk', 'Buruk', 'Buruk', 'C'),
(879, 'Sangat Buruk', 'Sedang', 'Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(880, 'Sangat Buruk', 'Sedang', 'Buruk', 'Sangat Buruk', 'Baik', 'D'),
(881, 'Sangat Buruk', 'Sedang', 'Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(882, 'Sangat Buruk', 'Sedang', 'Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(883, 'Sangat Buruk', 'Sedang', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(884, 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Baik', 'Baik', 'A'),
(885, 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Baik', 'Sedang', 'D'),
(886, 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Baik', 'Buruk', 'D'),
(887, 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'D'),
(888, 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Sedang', 'Baik', 'D'),
(889, 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Sedang', 'Sedang', 'B'),
(890, 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Sedang', 'Buruk', 'D'),
(891, 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(892, 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Buruk', 'Baik', 'D'),
(893, 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Buruk', 'Sedang', 'D'),
(894, 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Buruk', 'Buruk', 'C'),
(895, 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'D'),
(896, 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'D'),
(897, 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(898, 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'D'),
(899, 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(900, 'Sangat Buruk', 'Buruk', 'Baik', 'Baik', 'Baik', 'A'),
(901, 'Sangat Buruk', 'Buruk', 'Baik', 'Baik', 'Sedang', 'A'),
(902, 'Sangat Buruk', 'Buruk', 'Baik', 'Baik', 'Buruk', 'A'),
(903, 'Sangat Buruk', 'Buruk', 'Baik', 'Baik', 'Sangat Buruk', 'A'),
(904, 'Sangat Buruk', 'Buruk', 'Baik', 'Sedang', 'Baik', 'A'),
(905, 'Sangat Buruk', 'Buruk', 'Baik', 'Sedang', 'Sedang', 'B'),
(906, 'Sangat Buruk', 'Buruk', 'Baik', 'Sedang', 'Buruk', 'C'),
(907, 'Sangat Buruk', 'Buruk', 'Baik', 'Sedang', 'Sangat Buruk', 'D'),
(908, 'Sangat Buruk', 'Buruk', 'Baik', 'Buruk', 'Baik', 'A'),
(909, 'Sangat Buruk', 'Buruk', 'Baik', 'Buruk', 'Sedang', 'C'),
(910, 'Sangat Buruk', 'Buruk', 'Baik', 'Buruk', 'Buruk', 'C'),
(911, 'Sangat Buruk', 'Buruk', 'Baik', 'Buruk', 'Sangat Buruk', 'C'),
(912, 'Sangat Buruk', 'Buruk', 'Baik', 'Sangat Buruk', 'Baik', 'A'),
(913, 'Sangat Buruk', 'Buruk', 'Baik', 'Sangat Buruk', 'Sedang', 'D'),
(914, 'Sangat Buruk', 'Buruk', 'Baik', 'Sangat Buruk', 'Buruk', 'C'),
(915, 'Sangat Buruk', 'Buruk', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(916, 'Sangat Buruk', 'Buruk', 'Sedang', 'Baik', 'Baik', 'A'),
(917, 'Sangat Buruk', 'Buruk', 'Sedang', 'Baik', 'Sedang', 'B'),
(918, 'Sangat Buruk', 'Buruk', 'Sedang', 'Baik', 'Buruk', 'C'),
(919, 'Sangat Buruk', 'Buruk', 'Sedang', 'Baik', 'Sangat Buruk', 'D'),
(920, 'Sangat Buruk', 'Buruk', 'Sedang', 'Sedang', 'Baik', 'B'),
(921, 'Sangat Buruk', 'Buruk', 'Sedang', 'Sedang', 'Sedang', 'B'),
(922, 'Sangat Buruk', 'Buruk', 'Sedang', 'Sedang', 'Buruk', 'C'),
(923, 'Sangat Buruk', 'Buruk', 'Sedang', 'Sedang', 'Sangat Buruk', 'D'),
(924, 'Sangat Buruk', 'Buruk', 'Sedang', 'Buruk', 'Baik', 'C'),
(925, 'Sangat Buruk', 'Buruk', 'Sedang', 'Buruk', 'Sedang', 'C'),
(926, 'Sangat Buruk', 'Buruk', 'Sedang', 'Buruk', 'Buruk', 'C'),
(927, 'Sangat Buruk', 'Buruk', 'Sedang', 'Buruk', 'Sangat Buruk', 'C'),
(928, 'Sangat Buruk', 'Buruk', 'Sedang', 'Sangat Buruk', 'Baik', 'D'),
(929, 'Sangat Buruk', 'Buruk', 'Sedang', 'Sangat Buruk', 'Sedang', 'D'),
(930, 'Sangat Buruk', 'Buruk', 'Sedang', 'Sangat Buruk', 'Buruk', 'C'),
(931, 'Sangat Buruk', 'Buruk', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(932, 'Sangat Buruk', 'Buruk', 'Buruk', 'Baik', 'Baik', 'A'),
(933, 'Sangat Buruk', 'Buruk', 'Buruk', 'Baik', 'Sedang', 'C'),
(934, 'Sangat Buruk', 'Buruk', 'Buruk', 'Baik', 'Buruk', 'C'),
(935, 'Sangat Buruk', 'Buruk', 'Buruk', 'Baik', 'Sangat Buruk', 'C'),
(936, 'Sangat Buruk', 'Buruk', 'Buruk', 'Sedang', 'Baik', 'C'),
(937, 'Sangat Buruk', 'Buruk', 'Buruk', 'Sedang', 'Sedang', 'C'),
(938, 'Sangat Buruk', 'Buruk', 'Buruk', 'Sedang', 'Buruk', 'C'),
(939, 'Sangat Buruk', 'Buruk', 'Buruk', 'Sedang', 'Sangat Buruk', 'C'),
(940, 'Sangat Buruk', 'Buruk', 'Buruk', 'Buruk', 'Baik', 'C'),
(941, 'Sangat Buruk', 'Buruk', 'Buruk', 'Buruk', 'Sedang', 'C'),
(942, 'Sangat Buruk', 'Buruk', 'Buruk', 'Buruk', 'Buruk', 'C'),
(943, 'Sangat Buruk', 'Buruk', 'Buruk', 'Buruk', 'Sangat Buruk', 'C'),
(944, 'Sangat Buruk', 'Buruk', 'Buruk', 'Sangat Buruk', 'Baik', 'C'),
(945, 'Sangat Buruk', 'Buruk', 'Buruk', 'Sangat Buruk', 'Sedang', 'C'),
(946, 'Sangat Buruk', 'Buruk', 'Buruk', 'Sangat Buruk', 'Buruk', 'C'),
(947, 'Sangat Buruk', 'Buruk', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(948, 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Baik', 'Baik', 'A'),
(949, 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Baik', 'Sedang', 'D'),
(950, 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Baik', 'Buruk', 'C'),
(951, 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'D'),
(952, 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Sedang', 'Baik', 'D'),
(953, 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Sedang', 'Sedang', 'D'),
(954, 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Sedang', 'Buruk', 'C'),
(955, 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(956, 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Buruk', 'Baik', 'C'),
(957, 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Buruk', 'Sedang', 'C'),
(958, 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Buruk', 'Buruk', 'C'),
(959, 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'D'),
(960, 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'D'),
(961, 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(962, 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'D'),
(963, 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(964, 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Baik', 'Baik', 'A'),
(965, 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Baik', 'Sedang', 'A'),
(966, 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Baik', 'Buruk', 'A'),
(967, 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Baik', 'Sangat Buruk', 'D'),
(968, 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Sedang', 'Baik', 'A'),
(969, 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Sedang', 'Sedang', 'D'),
(970, 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Sedang', 'Buruk', 'D'),
(971, 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Sedang', 'Sangat Buruk', 'D'),
(972, 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Buruk', 'Baik', 'A'),
(973, 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Buruk', 'Sedang', 'D'),
(974, 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Buruk', 'Buruk', 'C'),
(975, 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Buruk', 'Sangat Buruk', 'D'),
(976, 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Baik', 'D'),
(977, 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Sedang', 'D'),
(978, 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Buruk', 'D'),
(979, 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(980, 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Baik', 'Baik', 'A'),
(981, 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Baik', 'Sedang', 'D'),
(982, 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Baik', 'Buruk', 'D'),
(983, 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Baik', 'Sangat Buruk', 'D'),
(984, 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Sedang', 'Baik', 'D'),
(985, 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Sedang', 'Sedang', 'B'),
(986, 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Sedang', 'Buruk', 'D'),
(987, 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Sedang', 'Sangat Buruk', 'D'),
(988, 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Buruk', 'Baik', 'D'),
(989, 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Buruk', 'Sedang', 'D'),
(990, 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Buruk', 'Buruk', 'C'),
(991, 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Buruk', 'Sangat Buruk', 'D'),
(992, 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Baik', 'D'),
(993, 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Sedang', 'D'),
(994, 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Buruk', 'D'),
(995, 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(996, 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Baik', 'Baik', 'A'),
(997, 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Baik', 'Sedang', 'D'),
(998, 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Baik', 'Buruk', 'C'),
(999, 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Baik', 'Sangat Buruk', 'D'),
(1000, 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Sedang', 'Baik', 'D'),
(1001, 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Sedang', 'Sedang', 'D'),
(1002, 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Sedang', 'Buruk', 'C'),
(1003, 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(1004, 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Buruk', 'Baik', 'C'),
(1005, 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Buruk', 'Sedang', 'C'),
(1006, 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Buruk', 'Buruk', 'C'),
(1007, 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Buruk', 'Sangat Buruk', 'D'),
(1008, 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Baik', 'D'),
(1009, 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(1010, 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Buruk', 'D'),
(1011, 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D'),
(1012, 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Baik', 'D'),
(1013, 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Sedang', 'D'),
(1014, 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Buruk', 'D'),
(1015, 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'Sangat Buruk', 'D'),
(1016, 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Baik', 'D'),
(1017, 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Sedang', 'D'),
(1018, 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Buruk', 'D'),
(1019, 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'Sangat Buruk', 'D'),
(1020, 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Baik', 'D'),
(1021, 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Sedang', 'D'),
(1022, 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Buruk', 'D'),
(1023, 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'Sangat Buruk', 'D'),
(1024, 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Baik', 'D'),
(1025, 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sedang', 'D'),
(1026, 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Buruk', 'D'),
(1027, 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'Sangat Buruk', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `rules_grade`
--

CREATE TABLE `rules_grade` (
  `id_rules_grade` int(11) NOT NULL,
  `id_perhitungan` int(11) NOT NULL,
  `id_rules` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rules_grade`
--

INSERT INTO `rules_grade` (`id_rules_grade`, `id_perhitungan`, `id_rules`, `created_at`) VALUES
(1, 1, 820, '2021-08-21 09:34:30'),
(2, 1, 821, '2021-08-21 09:34:30'),
(3, 1, 824, '2021-08-21 09:34:30'),
(4, 1, 825, '2021-08-21 09:34:30'),
(5, 1, 884, '2021-08-21 09:34:30'),
(6, 1, 885, '2021-08-21 09:34:30'),
(7, 1, 888, '2021-08-21 09:34:30'),
(8, 1, 889, '2021-08-21 09:34:30'),
(9, 2, 825, '2021-08-21 09:54:53'),
(10, 2, 826, '2021-08-21 09:54:53'),
(11, 2, 829, '2021-08-21 09:54:53'),
(12, 2, 830, '2021-08-21 09:54:53'),
(13, 2, 889, '2021-08-21 09:54:53'),
(14, 2, 890, '2021-08-21 09:54:53'),
(15, 2, 893, '2021-08-21 09:54:53'),
(16, 2, 894, '2021-08-21 09:54:53'),
(17, 3, 312, '2021-08-22 09:45:49'),
(18, 3, 316, '2021-08-22 09:45:49'),
(19, 3, 376, '2021-08-22 09:45:49'),
(20, 3, 380, '2021-08-22 09:45:49'),
(21, 4, 312, '2021-08-22 09:53:32'),
(22, 4, 316, '2021-08-22 09:53:32'),
(23, 4, 376, '2021-08-22 09:53:33'),
(24, 4, 380, '2021-08-22 09:53:33'),
(25, 5, 264, '2021-08-22 11:06:04'),
(26, 5, 268, '2021-08-22 11:06:04'),
(27, 5, 280, '2021-08-22 11:06:04'),
(28, 5, 284, '2021-08-22 11:06:04'),
(29, 5, 328, '2021-08-22 11:06:04'),
(30, 5, 332, '2021-08-22 11:06:04'),
(31, 5, 344, '2021-08-22 11:06:04'),
(32, 5, 348, '2021-08-22 11:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `id` int(11) NOT NULL,
  `ph` float NOT NULL,
  `tds` float NOT NULL,
  `suhu` float NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sensor`
--

INSERT INTO `sensor` (`id`, `ph`, `tds`, `suhu`, `createdDate`) VALUES
(1, 14.18, 1297.83, 27, '2021-08-22 09:40:53'),
(2, 5.44, 1520.39, 27, '2021-08-22 09:41:00'),
(3, 5.21, 1530.92, 27, '2021-08-22 09:41:07'),
(4, 5.07, 1575.67, 27, '2021-08-22 09:41:14'),
(5, 6.56, 1432.08, 27, '2021-08-22 09:41:21'),
(6, 5.5, 1509.92, 27, '2021-08-22 09:41:27'),
(7, 5.54, 1404.27, 27, '2021-08-22 09:41:34'),
(8, 14.21, 1360.44, 27, '2021-08-22 09:41:41'),
(9, 11.89, 1447.54, 27, '2021-08-22 09:41:48'),
(10, 7.32, 1301.98, 27, '2021-08-22 09:41:55'),
(11, 13.99, 1470.54, 27, '2021-08-22 09:42:01'),
(12, 14.13, 1343.26, 27, '2021-08-22 09:42:08'),
(13, 14.8, 1252.2, 27, '2021-08-22 09:42:15'),
(14, 14.47, 1441.16, 27, '2021-08-22 09:42:22'),
(15, 14.5, 1265.09, 27, '2021-08-22 09:42:28'),
(16, 14.84, 1159.32, 27, '2021-08-22 09:42:35'),
(17, 11.7, 1257.02, 27, '2021-08-22 09:42:42'),
(18, 14.36, 1245.81, 27, '2021-08-22 09:42:49'),
(19, 13.53, 1249.8, 27, '2021-08-22 09:42:56'),
(20, 14.45, 1253.81, 27, '2021-08-22 09:43:03'),
(21, 14.5, 1354.41, 27, '2021-08-22 09:43:10'),
(22, 14.09, 1327.11, 27, '2021-08-22 09:43:16'),
(23, 14.09, 1225.22, 27, '2021-08-22 09:43:23'),
(24, 14.28, 1287.93, 27, '2021-08-22 09:43:30'),
(25, 14.65, 1388.35, 27, '2021-08-22 09:43:37'),
(26, 13.41, 1383.96, 27, '2021-08-22 09:43:44'),
(27, 5.67, 1237.85, 27, '2021-08-22 09:43:50'),
(28, 5.42, 1306.14, 27, '2021-08-22 09:43:57'),
(29, 6.81, 1328.81, 27, '2021-08-22 09:44:04'),
(30, 10.74, 1326.27, 27, '2021-08-22 09:44:11'),
(31, 6.01, 1261.86, 27, '2021-08-22 09:44:18'),
(32, 14.51, 1331.35, 27, '2021-08-22 09:52:11'),
(33, 12.16, 1253.01, 27, '2021-08-22 09:52:17'),
(34, 13.76, 1204.94, 27, '2021-08-22 09:52:24'),
(35, 6.86, 1352.69, 27, '2021-08-22 09:52:31'),
(36, 5.41, 1175.86, 27, '2021-08-22 09:52:38'),
(37, 6.56, 1278.1, 27, '2021-08-22 09:52:45'),
(38, 12.91, 1236.27, 27, '2021-08-22 09:52:51'),
(39, 6.16, 1296.18, 27, '2021-08-22 09:52:58'),
(40, 6.07, 1392.76, 27, '2021-08-22 09:53:05'),
(41, 4.53, 1381.33, 27, '2021-08-22 09:53:12'),
(42, 7.98, 1337.29, 27, '2021-08-22 09:53:19'),
(43, 6.61, 1301.98, 27, '2021-08-22 09:53:25'),
(44, 11.09, 1354.41, 27, '2021-08-22 09:53:32'),
(45, 12.4, 1374.33, 27, '2021-08-22 09:53:39'),
(46, 13.85, 1299.49, 27, '2021-08-22 09:53:46'),
(47, 14.29, 1301.98, 27, '2021-08-22 09:53:53'),
(48, 14.14, 1356.13, 27, '2021-08-22 09:53:59'),
(49, 14.3, 1281.37, 27, '2021-08-22 09:54:06'),
(50, 10.22, 1383.96, 27, '2021-08-22 09:54:13'),
(51, 8.12, 1371.72, 27, '2021-08-22 09:54:20'),
(52, 14.07, 1370.85, 27, '2021-08-22 09:54:26'),
(53, 14.22, 1358.72, 27, '2021-08-22 09:54:33'),
(54, 14.31, 1342.4, 27, '2021-08-22 09:54:40'),
(55, 14.08, 1300.32, 27, '2021-08-22 09:54:47'),
(56, 14.38, 1215.04, 27, '2021-08-22 10:02:59'),
(57, 10.92, 1249.8, 27, '2021-08-22 10:03:06'),
(58, 14.88, 1242.62, 27, '2021-08-22 10:03:13'),
(59, 7.42, 1203.39, 27, '2021-08-22 10:03:20'),
(60, 9.67, 1187.26, 27, '2021-08-22 10:03:26'),
(61, 5.32, 1245.01, 27, '2021-08-22 10:03:33'),
(62, 7.12, 1168.31, 27, '2021-08-22 10:03:40'),
(63, 7.02, 1201.08, 27, '2021-08-22 10:03:47'),
(64, 14.58, 1156.33, 27, '2021-08-22 10:03:54'),
(65, 14.82, 1213.48, 27, '2021-08-22 10:04:00'),
(66, 14.74, 0, 27, '2021-08-22 10:07:41'),
(67, 6.81, 0, 27, '2021-08-22 10:07:48'),
(68, 6.81, 0, 27, '2021-08-22 10:07:55'),
(69, 11.33, 0, 27, '2021-08-22 10:08:02'),
(70, 13.95, 0, 27, '2021-08-22 10:08:08'),
(71, 5.67, 0, 27, '2021-08-22 10:08:15'),
(72, 7.28, 0, 27, '2021-08-22 10:08:22'),
(73, 6.23, 0, 27, '2021-08-22 10:08:29'),
(74, 11.84, 0, 27, '2021-08-22 10:08:35'),
(75, 7, 0, 27, '2021-08-22 10:08:42'),
(76, 6.53, 0, 27, '2021-08-22 10:08:49'),
(77, 6.46, 0, 27, '2021-08-22 10:08:56'),
(78, 14.52, 0, 27, '2021-08-22 10:09:02'),
(79, 13.78, 0, 27, '2021-08-22 10:09:09'),
(80, 12.95, 0, 27, '2021-08-22 10:09:16'),
(81, 5.63, 0, 27, '2021-08-22 10:09:23'),
(82, 10.82, 0, 27, '2021-08-22 10:09:30'),
(83, 14.81, 0, 27, '2021-08-22 10:09:36'),
(84, 14.21, 0, 27, '2021-08-22 10:09:43'),
(85, 2.97, 0, 27, '2021-08-22 10:09:50'),
(86, 14.21, 0, 27, '2021-08-22 10:09:57'),
(87, 13.98, 0, 27, '2021-08-22 10:10:04'),
(88, 13.78, 0, 27, '2021-08-22 10:10:10'),
(89, 14.19, 0, 27, '2021-08-22 10:10:17'),
(90, 13.69, 0, 27, '2021-08-22 10:10:24'),
(91, 2.96, 0, 27, '2021-08-22 10:10:31'),
(92, 14.58, 0, 27, '2021-08-22 10:10:37'),
(93, 14.4, 0, 27, '2021-08-22 10:10:44'),
(94, 3.74, 0, 27, '2021-08-22 10:10:51'),
(95, 9.14, 0, 27, '2021-08-22 10:10:58'),
(96, 14.61, 0, 27, '2021-08-22 10:11:05'),
(97, 1.2, 0, 27, '2021-08-22 10:11:11'),
(98, 14.42, 0, 27, '2021-08-22 10:11:18'),
(99, 13.82, 0, 27, '2021-08-22 10:11:25'),
(100, 14.5, 0, 27, '2021-08-22 10:11:32'),
(101, 15.42, 0, 27, '2021-08-22 10:17:32'),
(102, 12.41, 0, 27, '2021-08-22 10:17:39'),
(103, 15.45, 0, 27, '2021-08-22 10:17:46'),
(104, 4.34, 0, 27, '2021-08-22 10:17:53'),
(105, 3.18, 0, 27, '2021-08-22 10:17:59'),
(106, 14.31, 0, 27, '2021-08-22 10:18:06'),
(107, 14.65, 0, 27, '2021-08-22 10:18:13'),
(108, 15.45, 0, 27, '2021-08-22 10:18:20'),
(109, 3.68, 0, 27, '2021-08-22 10:18:26'),
(110, 4.56, 0, 27, '2021-08-22 10:18:33'),
(111, 14.98, 0, 27, '2021-08-22 10:18:40'),
(112, 9.9, 0, 27, '2021-08-22 10:18:47'),
(113, 15.41, 0, 27, '2021-08-22 10:18:53'),
(114, 5.36, 0, 27, '2021-08-22 10:19:00'),
(115, 14.27, 0, 27, '2021-08-22 10:19:07'),
(116, 15.19, 0, 27, '2021-08-22 10:19:14'),
(117, 14.6, 0, 27, '2021-08-22 10:19:21'),
(118, 15.28, 0, 27, '2021-08-22 10:19:27'),
(119, 15.45, 0, 27, '2021-08-22 10:19:34'),
(120, 6.69, 0, 27, '2021-08-22 10:19:41'),
(121, 4.53, 0, 27, '2021-08-22 10:19:48'),
(122, 15.25, 0, 27, '2021-08-22 10:19:54'),
(123, 13.6, 0, 27, '2021-08-22 10:20:01'),
(124, 14.1, 0, 27, '2021-08-22 10:20:08'),
(125, 4.98, 0, 27, '2021-08-22 10:23:37'),
(126, 10.64, 0, 27, '2021-08-22 10:23:43'),
(127, 7.76, 0, 27, '2021-08-22 11:04:43'),
(128, 7.53, 0, 27, '2021-08-22 11:04:47'),
(129, 7.87, 0, 27, '2021-08-22 11:04:52'),
(130, 7.73, 0, 27, '2021-08-22 11:04:57'),
(131, 7.71, 0, 27, '2021-08-22 11:05:02'),
(132, 7.68, 145.68, 27, '2021-08-22 11:05:06'),
(133, 7.69, 124.91, 27, '2021-08-22 11:05:11'),
(134, 7.55, 123.88, 27, '2021-08-22 11:05:16'),
(135, 7.73, 119.3, 27, '2021-08-22 11:05:21'),
(136, 7.83, 149.36, 27, '2021-08-22 11:05:25'),
(137, 7.88, 129.87, 27, '2021-08-22 11:05:30'),
(138, 7.66, 142.61, 27, '2021-08-22 11:05:35'),
(139, 7.77, 148.54, 27, '2021-08-22 11:05:40'),
(140, 7.83, 152.41, 27, '2021-08-22 11:05:45'),
(141, 7.83, 151.19, 27, '2021-08-22 11:05:49'),
(142, 7.76, 128.84, 27, '2021-08-22 11:05:54'),
(143, 7.63, 121.59, 27, '2021-08-22 11:05:59'),
(144, 7.63, 141.8, 27, '2021-08-22 11:06:04'),
(145, 7.63, 125.74, 27, '2021-08-22 11:06:08'),
(146, 7.77, 123.67, 27, '2021-08-22 11:06:13'),
(147, 7.55, 149.36, 27, '2021-08-22 11:06:18'),
(148, 7.87, 145.27, 27, '2021-08-22 11:06:23'),
(149, 7.55, 129.67, 27, '2021-08-22 11:06:27'),
(150, 7.58, 130.29, 27, '2021-08-22 11:06:32'),
(151, 7.61, 136.26, 27, '2021-08-22 11:06:37'),
(152, 7.87, 145.68, 27, '2021-08-22 11:06:42'),
(153, 7.58, 152.62, 27, '2021-08-22 11:06:46'),
(154, 7.56, 150.99, 27, '2021-08-22 11:06:51'),
(155, 7.53, 135.64, 27, '2021-08-22 11:06:56'),
(156, 7.77, 129.87, 27, '2021-08-22 11:07:01'),
(157, 7.67, 148.54, 27, '2021-08-22 11:07:05'),
(158, 8.03, 129.46, 27, '2021-08-22 11:07:10'),
(159, 7.57, 126.78, 27, '2021-08-22 11:07:15'),
(160, 7.83, 122.84, 27, '2021-08-22 11:07:20'),
(161, 7.61, 132.35, 27, '2021-08-22 11:07:24'),
(162, 7.57, 145.68, 27, '2021-08-22 11:07:29'),
(163, 7.67, 131.32, 27, '2021-08-22 11:07:34'),
(164, 7.71, 139.34, 27, '2021-08-22 11:07:39'),
(165, 7.79, 151.8, 27, '2021-08-22 11:07:43'),
(166, 7.85, 142, 27, '2021-08-22 11:07:48'),
(167, 7.59, 138.52, 27, '2021-08-22 11:07:53'),
(168, 7.55, 139.13, 27, '2021-08-22 11:07:58'),
(169, 7.55, 150.99, 27, '2021-08-22 11:08:02'),
(170, 7.88, 129.26, 27, '2021-08-22 11:08:07'),
(171, 7.75, 140.16, 27, '2021-08-22 11:08:12'),
(172, 7.85, 134.82, 27, '2021-08-22 11:08:16'),
(173, 7.83, 122.01, 27, '2021-08-22 11:08:21'),
(174, 7.65, 126.15, 27, '2021-08-22 11:08:26'),
(175, 7.63, 130.49, 27, '2021-08-22 11:08:31'),
(176, 7.74, 152.21, 27, '2021-08-22 11:08:35'),
(177, 7.59, 142.41, 27, '2021-08-22 11:08:40'),
(178, 7.67, 150.99, 27, '2021-08-22 11:08:45'),
(179, 7.89, 137.08, 27, '2021-08-22 11:08:50'),
(180, 7.78, 129.46, 27, '2021-08-22 11:08:54'),
(181, 7.7, 146.09, 27, '2021-08-22 11:08:59'),
(182, 7.77, 120.55, 27, '2021-08-22 11:09:04'),
(183, 7.68, 136.05, 27, '2021-08-22 11:09:09'),
(184, 7.74, 134.82, 27, '2021-08-22 11:09:14'),
(185, 7.83, 129.46, 27, '2021-08-22 11:09:18'),
(186, 7.58, 126.98, 27, '2021-08-22 11:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `variabel`
--

CREATE TABLE `variabel` (
  `id_variabel` int(11) NOT NULL,
  `nama_variabel` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `variabel`
--

INSERT INTO `variabel` (`id_variabel`, `nama_variabel`) VALUES
(1, 'Baik'),
(2, 'Sedang'),
(3, 'Buruk'),
(4, 'Sangat Buruk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_sensor`
--
ALTER TABLE `data_sensor`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `detail_ikan`
--
ALTER TABLE `detail_ikan`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `jenis_ikan`
--
ALTER TABLE `jenis_ikan`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `nilai_min`
--
ALTER TABLE `nilai_min`
  ADD PRIMARY KEY (`id_min`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD PRIMARY KEY (`id_perhitungan`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id_rules`);

--
-- Indexes for table `rules_grade`
--
ALTER TABLE `rules_grade`
  ADD PRIMARY KEY (`id_rules_grade`);

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variabel`
--
ALTER TABLE `variabel`
  ADD PRIMARY KEY (`id_variabel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat`
--
ALTER TABLE `alat`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_sensor`
--
ALTER TABLE `data_sensor`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `detail_ikan`
--
ALTER TABLE `detail_ikan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_ikan`
--
ALTER TABLE `jenis_ikan`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nilai_min`
--
ALTER TABLE `nilai_min`
  MODIFY `id_min` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `perhitungan`
--
ALTER TABLE `perhitungan`
  MODIFY `id_perhitungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id_rules` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1030;

--
-- AUTO_INCREMENT for table `rules_grade`
--
ALTER TABLE `rules_grade`
  MODIFY `id_rules_grade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `sensor`
--
ALTER TABLE `sensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `variabel`
--
ALTER TABLE `variabel`
  MODIFY `id_variabel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
