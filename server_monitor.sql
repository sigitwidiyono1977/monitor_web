-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2025 pada 22.03
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `server_monitor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_monitor`
--

DROP TABLE IF EXISTS `tab_monitor`;
CREATE TABLE `tab_monitor` (
  `id` int(11) NOT NULL,
  `waktu` varchar(30) DEFAULT NULL,
  `id_website` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `kode` int(11) DEFAULT NULL,
  `enkripsi` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_website`
--

DROP TABLE IF EXISTS `tab_website`;
CREATE TABLE `tab_website` (
  `id` int(11) NOT NULL,
  `website` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tab_website`
--

INSERT INTO `tab_website` (`id`, `website`, `created_at`, `updated_at`) VALUES
(1, 'https://e-bikon.sukamarakab.go.id', NULL, NULL),
(2, 'https://binakonstruksi.sukamarakab.go.id', NULL, NULL),
(3, 'https://jdih.sukamarakab.go.id', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tab_monitor`
--
ALTER TABLE `tab_monitor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tab_website`
--
ALTER TABLE `tab_website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tab_monitor`
--
ALTER TABLE `tab_monitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tab_website`
--
ALTER TABLE `tab_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
