-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 09:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chelsea`
--
CREATE DATABASE IF NOT EXISTS `db_chelsea` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_chelsea`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemain`
--

CREATE TABLE `tbl_pemain` (
  `kode_pemain` char(6) NOT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `posisi` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `no_punggung` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemain`
--

INSERT INTO `tbl_pemain` (`kode_pemain`, `nama`, `posisi`, `gambar`, `no_punggung`) VALUES
('asd', 'si ganteng bangeutz', 'pemaen dadakan', '615ee26db5d47.jpg', '-'),
('dsa', 'si tampan', 'suporter', '6162fcf792438.jpg', '-'),
('ply001', 'Kepa Arrizabalaga', 'GK', 'kepa.jpeg', '1'),
('ply002', 'Antonio Rudiger', 'CB', 'rudi.jpg', '2'),
('ply003', 'Marcos Alonso', 'LB, LMF', 'alonso.jpg', '3'),
('ply004', 'Andreas Christensen', 'CB', 'christensen.jpg', '4'),
('ply005', 'Jorginho Frello', 'DMF', 'jorgi.jpg', '5'),
('ply006', 'Thiago Silva', 'CB', 'tsilva.jpg', '6'),
('ply007', 'Ngolo Kante', 'DMF, CMF', 'kante.jpg', '7'),
('ply008', 'Mateo Kovacic', 'CMF, DMF', 'kovacic.jpg', '8'),
('ply009', 'Romelu Lukaku', 'CF', 'lukaku.jpg', '9'),
('ply010', 'Christian Pulisic', 'LWF, SS, RWF, AMF', 'pulisic.jpg', '10'),
('ply011', 'Timo Werner', 'SS, LWF, RWF, CF', 'werner.jpg', '11'),
('ply012', 'Ruben Loftus Cheek', 'CMF, DMF, AMF', 'rlc.jpg', '12'),
('ply014', 'Trevoh Chalobah', 'CMF, CB, DMF', 'trevohchalobah.jpg', '14'),
('ply016', 'Edouard Mendy', 'GK', 'mendy.jpg', '16'),
('ply017', 'Saul Niguez', 'CMF, DMF', 'saul.jpg', '17'),
('ply018', 'Ross Barkley', 'AMF, CMF', 'barkley.jpg', '18'),
('ply019', 'Mason Mount', 'AMF, LWF, RWF, CMF', 'mount.jpg', '19'),
('ply020', 'Callum Hudson Odoi', 'RMF, RWF, LMF', 'odoi.jpg', '20'),
('ply021', 'Ben Chilwell', 'LB, LMF', 'chilwell.jpg', '21'),
('ply022', 'Hakim Ziyech', 'RWF, AMF, SS', 'ziyech.jpg', '22'),
('ply024', 'Reece James', 'RMF, RB', 'reecejames.jpg', '24'),
('ply028', 'Cesar Azpilicueta', 'RB, CB, RMF', 'azpi.jpg', '28'),
('ply029', 'Kai Havertz', 'AMF, SS, RWF', 'kai.jpg', '29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(1, 'ay', '$2y$10$b/baBFvXOfaarlpwZytOuerWtpm4a4KKyUJOM4LAUcrInK48hd2rW'),
(2, 'ay2', '$2y$10$jmMPhAoqkJUJKOWRSvjHe.7u.KXKnbUoNf6g7M9ppv9QcwIgmuoa6'),
(3, 'eheh', '$2y$10$kBPcUEC8EfTdk.x4J5zKpOErgLWPgxqo/PUs0gsKChUM46YVzCH..'),
(4, 'hehe', '$2y$10$3G4xKNZdG6GpbgNpqWG9YuRYjKsVOjZrVc41Yf30t8GJwwmoaXDti'),
(5, 'hiha', '$2y$10$Aiv9kT6rfKdqnK57cGzlbeFko/CDYCo0Lj2ASsGnh2EJfuEEPjiPm'),
(6, 'admin', 'admin'),
(7, 'admin02', '$2y$10$bHPmVSuX1ujrkXDSeCvfb.16LUGia6nMa/kjpg7CnrVWsdbakS1lS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pemain`
--
ALTER TABLE `tbl_pemain`
  ADD PRIMARY KEY (`kode_pemain`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
