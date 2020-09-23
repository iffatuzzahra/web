-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Nov 2019 pada 17.38
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `borbang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nama` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nama`, `password`) VALUES
('Admin', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `freelancer`
--

CREATE TABLE `freelancer` (
  `id` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `freelancer`
--

INSERT INTO `freelancer` (`id`, `nama`, `ktp`, `foto`) VALUES
(2, 'Rahul', '456', ''),
(3, 'Auliya', '1238910', ''),
(4, 'Zahra', '19991', ''),
(5, 'indah yani', '654321', ''),
(18, 'Fiqri', '40000', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id` int(4) NOT NULL,
  `presensi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id`, `presensi`) VALUES
(1, '2019-10-29'),
(1, '2019-10-30'),
(1, '2019-10-01'),
(2, '2019-10-01'),
(3, '2019-11-11'),
(2, '2019-11-10'),
(2, '2019-11-24'),
(4, '2019-10-07'),
(4, '2019-10-22'),
(3, '2019-11-08'),
(5, '2019-10-02'),
(5, '2019-11-16'),
(5, '2019-11-08'),
(5, '2019-11-24'),
(5, '2019-11-10'),
(5, '2019-11-11'),
(2, '2019-11-15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `freelancer`
--
ALTER TABLE `freelancer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `freelancer`
--
ALTER TABLE `freelancer`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
