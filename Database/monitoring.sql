-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 05:45 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `lahan`
--

CREATE TABLE `lahan` (
  `id_lahan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `luas` int(11) NOT NULL,
  `komoditas` varchar(255) NOT NULL,
  `penggarap` varchar(255) NOT NULL,
  `daerah` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1342472442, 1136060001, 'p'),
(2, 1342472442, 1136060001, 'ppp'),
(3, 962683405, 377243437, 'p'),
(4, 377243437, 962683405, 'hai'),
(5, 1602834144, 215220205, 'pp'),
(6, 215220205, 1602834144, 'p'),
(7, 1146015156, 1245603928, 'pp'),
(8, 1245603928, 1146015156, 'pp'),
(9, 1245603928, 1306847313, 'selamat malam'),
(10, 1306847313, 1245603928, 'malam');

-- --------------------------------------------------------

--
-- Table structure for table `panen`
--

CREATE TABLE `panen` (
  `id` int(11) NOT NULL,
  `id_lahan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penanaman`
--

CREATE TABLE `penanaman` (
  `id` int(11) NOT NULL,
  `id_lahan` int(11) DEFAULT NULL,
  `tgl_tanam` date NOT NULL,
  `luas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`id`, `nama_file`, `status`) VALUES
(1, 'V3921021-V3921026-V3921029-TI E-PROPOSAL GEMASTIK.docx', 0),
(2, 'V3921026-Perwira Dzakwan Ramadhani_TIE-Laporan1.docx', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_akun` int(11) NOT NULL,
  `unique_id` int(255) DEFAULT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `noHp` varchar(14) DEFAULT '6287888536344',
  `role` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT '8.jpg',
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_akun`, `unique_id`, `fname`, `lname`, `email`, `username`, `password`, `noHp`, `role`, `img`, `status`) VALUES
(36, 1245603928, 'Rayya', 'Alika', 'example@gmail.com', 'rey', '$2y$10$u5S1MsTO1c0mr/9yqb8Ekums9IuOW6G3OFCATDHayUgVTeNes4C2y', '087888536344', 'dinas', '3.jpg', 'Active now'),
(37, 948032689, 'Perwira', 'Dzakwan Ramadhani', 'perwira.dhany@yahoo.com', 'dhani', '$2y$10$KRYGAdqsE5LSbVcn3k50zu6/0wklzxcbtBU5dJ8alEUVRApIJ20zi', '087888536344', 'bpp', '8.jpg', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lahan`
--
ALTER TABLE `lahan`
  ADD PRIMARY KEY (`id_lahan`),
  ADD KEY `fk_lahan` (`id_user`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `panen`
--
ALTER TABLE `panen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_la` (`id_lahan`);

--
-- Indexes for table `penanaman`
--
ALTER TABLE `penanaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tanam` (`id_lahan`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_akun`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lahan`
--
ALTER TABLE `lahan`
  MODIFY `id_lahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `panen`
--
ALTER TABLE `panen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penanaman`
--
ALTER TABLE `penanaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lahan`
--
ALTER TABLE `lahan`
  ADD CONSTRAINT `fk_lahan` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_akun`);

--
-- Constraints for table `panen`
--
ALTER TABLE `panen`
  ADD CONSTRAINT `fk_la` FOREIGN KEY (`id_lahan`) REFERENCES `lahan` (`id_lahan`);

--
-- Constraints for table `penanaman`
--
ALTER TABLE `penanaman`
  ADD CONSTRAINT `id_tanam` FOREIGN KEY (`id_lahan`) REFERENCES `lahan` (`id_lahan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
