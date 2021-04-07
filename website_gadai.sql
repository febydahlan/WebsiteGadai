-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2021 pada 23.46
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_gadai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_gadai`
--

CREATE TABLE `pengajuan_gadai` (
  `id` int(11) NOT NULL,
  `nama_nasabah` varchar(128) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(128) COLLATE utf8_bin NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `batas_pengembalian` date NOT NULL,
  `jumlah_peminjaman` int(11) NOT NULL,
  `nama_jaminan` varchar(128) COLLATE utf8_bin NOT NULL,
  `bukti_jaminan` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `pengajuan_gadai`
--

INSERT INTO `pengajuan_gadai` (`id`, `nama_nasabah`, `alamat`, `tanggal_pinjam`, `batas_pengembalian`, `jumlah_peminjaman`, `nama_jaminan`, `bukti_jaminan`) VALUES
(1, 'Park Jeong Woo', 'South Korea', '2021-04-01', '2021-07-01', 500000, 'Treasure', 'default.jpg'),
(2, 'Kim Junkyu', 'South Korea', '2021-04-02', '2021-08-01', 100000, 'Treasure', 'default.jpg'),
(3, 'Bang Yedam', 'South Korea', '2021-04-16', '2021-04-30', 900000, 'Treasure', ''),
(4, 'Park Jihoon', 'South Korea', '2021-04-16', '2021-05-28', 300000, 'Treasure', ''),
(5, 'So Junghwan', 'South Korea', '2021-04-23', '2021-12-23', 10000, 'Treasure', ''),
(6, 'So Junghwan', 'South Korea', '2021-04-28', '2021-07-30', 400000, 'Treasure', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE `user_admin` (
  `id_admin` int(128) NOT NULL,
  `username` varchar(128) COLLATE utf8_bin NOT NULL,
  `email` varchar(128) COLLATE utf8_bin NOT NULL,
  `image` varchar(128) COLLATE utf8_bin NOT NULL,
  `password` varchar(128) COLLATE utf8_bin NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_activated` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id_admin`, `username`, `email`, `image`, `password`, `role_id`, `is_activated`, `date_created`) VALUES
(1, 'febbydahlan', '', '', 'pebidahlan', 0, 0, 0),
(4, 'Feby Dahlan', 'febbydahlan034@gmail.com', 'default.jpg', '$2y$10$qQo4Amg/qsnzFHvS8sGiVeO/ROC/HSaS.iFr2RGedDnG/oyPJaVoi', 2, 1, 1617428442),
(8, 'Ceptari', 'Ceptari1234@gmail.com', 'default.jpg', '$2y$10$JR/atvuUx4QeZYEIPVCRPOYclGHNSnXm7nAUBjWXi8R5/kI5bqPOa', 2, 1, 1617429598);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, ''),
(2, 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `tittle` varchar(128) COLLATE utf8_bin NOT NULL,
  `url` varchar(128) COLLATE utf8_bin NOT NULL,
  `icon` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `tittle`, `url`, `icon`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'fas fa-fw fa-chart-area'),
(2, 2, 'Pengajuan', 'pengajuan', 'fas fa-fw fa-chart-area'),
(3, 3, 'Riwayat', 'riwayat', 'fas fa-fw fa-chart-area'),
(4, 4, 'DetailRiwayat', 'detailriwayat', 'fas fa-fw fa-chart-area'),
(5, 5, 'Pembayaran', 'pembayaran', 'fas fa-fw fa-chart-area');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengajuan_gadai`
--
ALTER TABLE `pengajuan_gadai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengajuan_gadai`
--
ALTER TABLE `pengajuan_gadai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id_admin` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
