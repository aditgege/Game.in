-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 Apr 2018 pada 02.19
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_admin`
--

CREATE TABLE `t_admin` (
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_admin`
--

INSERT INTO `t_admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_berita`
--

CREATE TABLE `t_berita` (
  `kode_berita` varchar(25) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `sub_judul` varchar(150) NOT NULL,
  `kategori` enum('Console','Desktop','Mobile','') NOT NULL,
  `genre` enum('Action','Adventure','RPG','Simulation','Strategy','Sports','IdleGaming') NOT NULL,
  `isi_berita` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `FOTO` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_berita`
--

INSERT INTO `t_berita` (`kode_berita`, `judul`, `sub_judul`, `kategori`, `genre`, `isi_berita`, `FOTO`) VALUES
('frg', 'ddd', 'ffff', 'Console', 'RPG', 'kjbbbbbjjbkjgkjgkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjgchccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccchhgghccccccccccccccchccccccccccccccccccccccccccccccccc', '24042018095249bus-130905b.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `t_berita`
--
ALTER TABLE `t_berita`
  ADD PRIMARY KEY (`kode_berita`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
