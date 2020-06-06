-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2020 pada 23.29
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mathgame`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mathgame`
--

CREATE TABLE `tb_mathgame` (
  `id` varchar(50) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `skor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_mathgame`
--

INSERT INTO `tb_mathgame` (`id`, `nama`, `email`, `skor`) VALUES
(NULL, 'Susanti Setiyani', 'susanti@gmail.com', 0),
(NULL, 'Susanti Setiyani', 'susanti@gmail.com', 0),
(NULL, 'Susanti Setiyani', 'susanti@gmail.com', 0),
(NULL, 'Susanti Setiyani', 'susanti@gmail.com', 0),
(NULL, 'Susanti Setiyani', 'susanti@gmail.com', 0),
(NULL, 'Susanti Setiyani', 'susanti@gmail.com', 0),
(NULL, 'Susanti Setiyani', 'susanti@gmail.com', 0),
(NULL, 'Susanti Setiyani', 'susanti@gmail.com', 0),
(NULL, 'Susanti Setiyani', 'susanti@gmail.com', 0),
(NULL, 'nabila', 'nabila@yahoo.com', 30),
(NULL, 'nabila', 'nabila@yahoo.com', 30),
(NULL, 'saras', 'saras@gmail.com', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
