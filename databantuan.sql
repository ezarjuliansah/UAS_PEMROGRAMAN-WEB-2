-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2021 pada 08.23
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databantuan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(12, '123', '123', '1234'),
(123, 'ezar juliansah12', '123', '12345'),
(1258, 'ezar juliansah', 'qwerty', 'ezar juliansah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penerima`
--

CREATE TABLE `data_penerima` (
  `id_no` int(10) NOT NULL,
  `alokasi_dana` varchar(100) CHARACTER SET latin1 NOT NULL,
  `transaksi` int(100) NOT NULL,
  `Dana` int(100) NOT NULL,
  `Nama` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Hp` int(13) NOT NULL,
  `Email` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_penerima`
--

INSERT INTO `data_penerima` (`id_no`, `alokasi_dana`, `transaksi`, `Dana`, `Nama`, `Hp`, `Email`) VALUES
(21, '3DADAD', 4, 5, '6', 7, '8'),
(22, '', 0, 0, '', 0, ''),
(23, '', 0, 0, '', 0, ''),
(24, '', 0, 0, '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_penerima`
--
ALTER TABLE `data_penerima`
  ADD PRIMARY KEY (`id_no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT untuk tabel `data_penerima`
--
ALTER TABLE `data_penerima`
  MODIFY `id_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
