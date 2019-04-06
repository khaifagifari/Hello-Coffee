-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2019 pada 12.35
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hellocoffee`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_toko`
--

CREATE TABLE `daftar_toko` (
  `id_toko` int(8) NOT NULL,
  `nama_toko` varchar(32) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `id_user` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_toko`
--

INSERT INTO `daftar_toko` (`id_toko`, `nama_toko`, `alamat`, `id_user`) VALUES
(1, 'Kopi Tungku', 'Bandung, bojongsoang', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `komentar` varchar(256) NOT NULL,
  `bintang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(8) NOT NULL,
  `nama_menu` varchar(64) NOT NULL,
  `harga` int(16) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `id_toko` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga`, `deskripsi`, `id_toko`) VALUES
(0, 'Kopi Capucino', 10000, 'Kopi yang pantas buat kamu yang manis', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `id_toko` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `gender`, `id_toko`) VALUES
(1, 'Faris', 'faris', 'faris@gmail.com', 'L', 0),
(2, 'Ihsan', 'ihsan', 'ihsan@gmail.com', 'L', 0),
(3, 'Kekey', 'kekey', 'kekey@gmail.com', 'L', 0),
(4, 'Putra', 'putra', 'putra@gmail.com', 'L', 0),
(5, 'toko', 'toko', 'toko@gmail.com', 'L', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_toko`
--
ALTER TABLE `daftar_toko`
  ADD PRIMARY KEY (`id_toko`),
  ADD KEY `fk_user` (`id_user`) USING BTREE;

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `fk_user` (`id_user`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_toko` (`id_toko`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_toko`
--
ALTER TABLE `daftar_toko`
  MODIFY `id_toko` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar_toko`
--
ALTER TABLE `daftar_toko`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `id_toko` FOREIGN KEY (`id_toko`) REFERENCES `daftar_toko` (`id_toko`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
