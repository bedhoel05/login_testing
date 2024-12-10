-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2024 pada 07.09
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_testing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nik` int(16) NOT NULL,
  `wa` int(12) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `nik`, `wa`, `img`) VALUES
(1, 'admin', 'admin', 0, 0, ''),
(2, 'asas', 'asdasd', 0, 0, ''),
(3, 'asas', 'asdasd', 0, 0, ''),
(4, 'sadasd', 'asfasd', 2147483647, 1923123, ''),
(5, 'asdasd', 'sdfsdf', 123019283, 1298123, ''),
(6, 'asdasd', 'dsafsdf', 29802394, 9098, ''),
(7, 'asdasd', '0989', 98098, 9898, ''),
(8, 'asa', 'kjn', 9809809, 98098, ''),
(9, 'asa', 'asas', 9809809, 98098, ''),
(10, 'asdasd', '9878', 98, 987, ''),
(11, 'asda', 'kj', 8, 8, ''),
(12, 'asda', 'kj', 8, 8, ''),
(13, 'asda', 'kj', 8, 8, ''),
(14, 'asda', 'kj', 8, 8, ''),
(15, 'asda', 'kj', 8, 8, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
