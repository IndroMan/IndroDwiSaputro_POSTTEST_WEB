-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 08:17 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `markobar`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `nama_gambar` varchar(64) NOT NULL,
  `upload_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `id_menu`, `nama_gambar`, `upload_on`, `file`) VALUES
(5, 43, 'Martabak Telur', '2022-10-26 12:16:20', 'Martabak Telur.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(32) NOT NULL,
  `harga_menu` float NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga_menu`, `stok`) VALUES
(43, 'Martabak Telur Ayam', 100000, 24);

-- --------------------------------------------------------

--
-- Table structure for table `pasok`
--

CREATE TABLE `pasok` (
  `id_pasok` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasok`
--

INSERT INTO `pasok` (`id_pasok`, `id_menu`, `tanggal_masuk`, `jumlah`, `total`) VALUES
(4, 43, '2022-10-26', 12, 1200000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_menu` (`id_menu`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pasok`
--
ALTER TABLE `pasok`
  ADD PRIMARY KEY (`id_pasok`),
  ADD KEY `id_menu` (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pasok`
--
ALTER TABLE `pasok`
  MODIFY `id_pasok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`);

--
-- Constraints for table `pasok`
--
ALTER TABLE `pasok`
  ADD CONSTRAINT `pasok_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
