-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1

-- Waktu pembuatan: 22 Apr 2019 pada 14.57
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

-- Generation Time: Apr 22, 2019 at 11:24 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12


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
  `id_user` int(8) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_toko`
--

INSERT INTO `daftar_toko` (`id_toko`, `nama_toko`, `alamat`, `id_user`, `foto`) VALUES
(1, 'Kopi Tungku', 'Bandung, bojongsoang', 5, 'tungku.jpg'),
(2, 'Kopi 372', 'Bandung, bojongsoang', 5, '372.jpg'),
(3, 'Kopi Kulo', 'Bandung, bojongsoang', 5, 'kulo.jpg'),
(4, 'tes', 'tes', 5, 'tes');

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
  `jenis` varchar(32) NOT NULL,
  `foto` varchar(32) NOT NULL,
  `id_toko` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga`, `deskripsi`, `jenis`, `foto`, `id_toko`) VALUES
(1, 'Kopi Capucino', 10000, 'Kopi yang pantas buat kamu yang manis', 'Capucino', 'coffee1.jpg', 1),
(2, 'Kopi Espreso', 15000, 'Espresso merupakan kopi modern yang paling kuat kadar kopinya (very strong). Espresso merupakan ekstrak biji kopi murni tanpa campuran. Rasanya sudah pasti pahit, dengan tingkat kekentalannya tergantung dari biji kopi yang digunakan. Espresso biasa dikonsu', 'Espreso', 'Coffee4.jpg', 1),
(3, 'Kopi Macchiato', 20000, 'Macchiato merupakan espresso yang diberi campuran susu foam. Foam atau susu yang di-steam sendiri kadarnya sedikit, sehingga rasanya tetap strong.', 'Macchiato', 'Coffee1.jpg', 1),
(6, 'Cincau', 8000, 'Cincau lezat', 'Cincau', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `id_toko` int(8) NOT NULL

  `nama_komentar` varchar(64) NOT NULL,
  `isi_komentar` varchar(256) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_menu` int(8) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--


INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `email`, `gender`, `id_toko`) VALUES
(1, 'faris', '7d77e825b80cff62a72e680c1c81424f', 'faris', 'faris@gmail.com', 'laki-laki', 0),
(2, 'Ihsan', 'f9c8074d5a013e0729373f8f74cd0648', 'Ihsan', 'ihsan@gmail.com', 'L', 0),
(3, 'Kekey', '93960bd0831c5282386062cfa3903c6b', 'Kekey', 'kekey@gmail.com', 'L', 0),
(4, 'mukhtar', 'bc6ed692dd28b4860b19789b59f330b1', 'Putra', 'putra16.mp@gmail.com', 'Laki-laki', 0),
(5, 'toko', 'bbb48314e5e6ee68d2d8bc1364b8599b', 'toko', 'toko@gmail.com', 'L', 1);

INSERT INTO `komentar` (`id_komentar`, `nama_komentar`, `isi_komentar`, `id_user`, `id_menu`) VALUES
(1, 'adam', 'adam', 5, 1),
(4, 'khaifa', 'kopi ku', 4, 4),
(5, 'Rizky', 'hello coffee, website impianku', 4, 2),
(6, 'abi', 'bisa mesan mas?', 4, 3);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `fk_menu` (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

ALTER TABLE `daftar_toko`
  MODIFY `id_toko` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


--
-- Constraints for table `komentar`
--

ALTER TABLE `menu`

ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE NO ACTION ON UPDATE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
