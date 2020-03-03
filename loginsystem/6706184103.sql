-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Mei 2019 pada 11.00
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `6706184103`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lamarkerja`
--

CREATE TABLE `lamarkerja` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `formasi` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lamarkerja`
--

INSERT INTO `lamarkerja` (`id`, `iduser`, `username`, `formasi`, `status`) VALUES
(1, 12, 'asep', 'programmer', 'terdaftar'),
(2, 14, 'joni', 'UI/X Designer', 'terdaftar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`iduser`, `username`, `password`, `status`) VALUES
(11, 'admin', '$2y$10$7z4q/lGDpxYDF2MNNG96QO/2EWT840UHtWdIGT6UIrqpvWzZIXsl.', 'admin'),
(15, 'shakila', '$2y$10$2lQgmMEHWpC95WmvgRp3RewuP9RuurslatCLKwiZWNCsEDr3rA3Z2', 'lamar'),
(18, 'zahra', '$2y$10$EdznMHMVfz.IFVhLBeG9XuawNLv5c88N5T1keVLwFVj5rLcYXHgE.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lamarkerja`
--
ALTER TABLE `lamarkerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lamarkerja`
--
ALTER TABLE `lamarkerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
