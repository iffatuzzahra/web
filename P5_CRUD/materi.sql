-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 08:56 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `materi`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `email`, `password`, `foto`) VALUES
('asd', 'a@a.a', '0ec53c34ceb021b4c7907d31db2ff752', ''),
('Bonus Bon Jofri', 'marellaputrimelina@gmail.com', 'b1893c46d6b915ec0b858b752c9e03dd', ''),
('Octavina Yenni Siregar', 'octavina.yenni@gmail.com', 'c088084621d9ff3294940742e3de37c2', ''),
('rahul subagio', 'rahul@gmail.com', '671400d5f1f202dcdac3dbaf216bae8e', 'upload/cc353c78058f6271911004443b96617aupn-bg-1.jpg'),
('Rizal Ardhi Rahmadani', 'rizal.ardhi.rahmadani@gmail.com', '150fb021c56c33f82eef99253eb36ee1', ''),
('rizal ardhi r', 'rizal@gmail.com', '1c104b9c0accfca52ef21728eaf01453', ''),
('Lolita Mariana Tambunan', 'siregaryeni@rocketmail.com', '202cb962ac59075b964b07152d234b70', ''),
('iffatuz zahra', 'zahra@gmail.com', '45502f6b02563050eedcc750e383a0ff', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
