-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Apr 24, 2019 at 04:25 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32
=======
-- Waktu pembuatan: 21 Nov 2019 pada 23.39
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12
>>>>>>> pr/34

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
-- Table structure for table `daftar_toko`
--

CREATE TABLE `daftar_toko` (
  `id_toko` int(8) NOT NULL,
  `nama_toko` varchar(32) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `id_user` int(8) NOT NULL,
<<<<<<< HEAD
  `foto` varchar(128) NOT NULL,
=======
  `foto_toko` varchar(128) NOT NULL,
>>>>>>> pr/34
  `Desc` varchar(256) NOT NULL,
  `Jam operasional` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_toko`
--

<<<<<<< HEAD
INSERT INTO `daftar_toko` (`id_toko`, `nama_toko`, `alamat`, `id_user`, `foto`, `Desc`, `Jam operasional`) VALUES
=======
INSERT INTO `daftar_toko` (`id_toko`, `nama_toko`, `alamat`, `id_user`, `foto_toko`, `Desc`, `Jam operasional`) VALUES
>>>>>>> pr/34
(1, 'Kopi Tungku', 'Bandung, bojongsoang', 5, 'tungku.jpg', 'Tempat kopi yang terdapat dekat dengan kawasan kampus telkom, dan memiliki desgin tempat kopi yang cukup menarik', '19.00-24.00'),
(2, 'Kopi 372', 'Jl. Ir. H. Juanda No. 372, Dago Atas, Bandung', 5, '372.jpg', 'Tempat kopi yang biasa digolongkan sebagai hidden gems, karena tempatnya dari luar terlihat biasa saja. Namun kalau sudah masuk ke dalam tempatnya sangat luas, seperti satu lembah digunakan oleh kafe ini. ', '13.00-24.00'),
(3, 'Kopi Kulo', 'Bandung, bojongsoang', 5, 'kulo.jpg', 'Tempat kopi yang menyajikan Menu es kopi terenak dan nikmat', '08.00-19.00'),
(4, 'tes', 'tes', 5, 'tes', '', '');
<<<<<<< HEAD
=======

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(8) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `city` varchar(64) NOT NULL,
  `zip` varchar(64) NOT NULL,
  `state` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `full_name`, `email`, `address`, `city`, `zip`, `state`) VALUES
(14, 'a', 'kekey', 'a', 'A', '12012', 'jambi'),
(15, 'a', 'kekey', 'a', 'A', '12012', 'jambi'),
(16, '', '', '', '', '', ''),
(17, 'putra', 'putra', 'putra', 'putra', '12345', 'bojongpasir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(50) NOT NULL,
  `qty` int(50) NOT NULL,
  `id_menu` int(50) NOT NULL,
  `id_user` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `qty`, `id_menu`, `id_user`) VALUES
(3, 2, 3, 2),
(4, 2, 2, 2),
(5, 2, 2, 2),
(6, 1, 2, 4);
>>>>>>> pr/34

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(50) NOT NULL,
  `qty` int(50) NOT NULL,
  `id_menu` int(50) NOT NULL,
  `id_user` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama_komentar` varchar(64) NOT NULL,
  `isi_komentar` varchar(256) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_menu` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
<<<<<<< HEAD
-- Dumping data for table `komentar`
=======
-- Dumping data untuk tabel `komentar`
>>>>>>> pr/34
--

INSERT INTO `komentar` (`id_komentar`, `nama_komentar`, `isi_komentar`, `id_user`, `id_menu`) VALUES
(1, 'adam', 'adam', 5, 1),
(4, 'khaifa', 'kopi ku', 4, 4),
<<<<<<< HEAD
(5, 'Rizky', 'hello coffee, website impianku', 4, 2),
(6, 'abi', 'bisa mesan mas?', 4, 3);
=======
(6, 'abi', 'bisa mesan mas?', 4, 3),
(7, 'Putra', 'wah', 4, 2),
(12, 'Ihsan', 'tes', 2, 2);
>>>>>>> pr/34

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(8) NOT NULL,
  `nama_menu` varchar(64) NOT NULL,
  `harga` int(16) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `jenis` varchar(32) NOT NULL,
  `foto_kopi` varchar(32) NOT NULL,
  `id_toko` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga`, `deskripsi`, `jenis`, `foto_kopi`, `id_toko`) VALUES
(1, 'Kopi Capucino', 10000, 'Kopi yang pantas buat kamu yang manis', 'Capucino', 'coffee1.jpg', 1),
(2, 'Kopi Espreso', 15000, 'Espresso merupakan kopi modern yang paling kuat kadar kopinya (very strong). Espresso merupakan ekstrak biji kopi murni tanpa campuran. Rasanya sudah pasti pahit, dengan tingkat kekentalannya tergantung dari biji kopi yang digunakan. Espresso biasa dikonsu', 'Espreso', 'Coffee4.jpg', 1),
(3, 'Kopi Macchiato', 20000, 'Macchiato merupakan espresso yang diberi campuran susu foam. Foam atau susu yang di-steam sendiri kadarnya sedikit, sehingga rasanya tetap strong.', 'Macchiato', 'Coffee1.jpg', 1),
(6, 'Cincau', 8000, 'Cincau lezat', 'Cincau', '', 1),
(7, 'Baru', 50, 'mahal', 'kopi', '', 1);

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Table structure for table `user`
=======
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(8) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `qty` int(11) NOT NULL,
  `id_user` int(8) NOT NULL,
  `id_menu` int(8) NOT NULL,
  `id_detail_transaksi` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal_transaksi`, `qty`, `id_user`, `id_menu`, `id_detail_transaksi`) VALUES
(16, '2019-11-20', 3, 2, 2, 14),
(17, '2019-11-20', 1, 2, 3, 14),
(18, '2019-11-20', 4, 2, 1, 14),
(19, '2019-11-21', 1, 4, 3, 17),
(20, '2019-11-21', 3, 4, 2, 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
>>>>>>> pr/34
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `Foto` varchar(40) NOT NULL,
  `id_toko` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `email`, `gender`, `Foto`, `id_toko`) VALUES
<<<<<<< HEAD
(0, 'tegarganteng', '825d5b19a4be0614f0a8b8c6f7f4aaf8', 'tegar', 'tegar@gmail.com', 'laki-laki', '', 0),
(1, 'faris', '7d77e825b80cff62a72e680c1c81424f', 'faris', 'faris@gmail.com', 'laki-laki', '', 0),
(2, 'Ihsan', 'f9c8074d5a013e0729373f8f74cd0648', 'Ihsan', 'ihsan@gmail.com', 'L', '', 0),
(3, 'Kekey', '93960bd0831c5282386062cfa3903c6b', 'Kekey', 'kekey@gmail.com', 'L', '', 0),
(4, 'mukhtar', 'bc6ed692dd28b4860b19789b59f330b1', 'Putra', 'putra16.mp@gmail.com', 'Laki-laki', '', 0),
(5, 'toko', 'bbb48314e5e6ee68d2d8bc1364b8599b', 'toko', 'toko@gmail.com', 'L', '', 1);
=======
(0, 'apaaja', 'e03ae33ee8417ce2c9785274217636e0', 'apaaja', 'apaaja', 'laki-laki', 'kopi.png', 0),
(1, 'faris', '7d77e825b80cff62a72e680c1c81424f', 'faris', 'faris@gmail.com', 'laki-laki', 'kopi.jpg', 0),
(2, 'Ihsan', 'f9c8074d5a013e0729373f8f74cd0648', 'Ihsan', 'ihsan@gmail.com', 'L', 'Ihsan3.jpg', 0),
(3, 'Kekey', '93960bd0831c5282386062cfa3903c6b', 'Kekey', 'kekey@gmail.com', 'L', 'kopi.jpg', 0),
(4, 'mukhtar', 'bc6ed692dd28b4860b19789b59f330b1', 'Putra', 'putra16.mp@gmail.com', 'Laki-laki', 'profile.jpg', 0),
(5, 'toko', 'bbb48314e5e6ee68d2d8bc1364b8599b', 'toko', 'toko@gmail.com', 'L', 'kopi.jpg', 1),
(7, 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 'tes', 'tes', 'laki-laki', 'kopi.png', 0);
>>>>>>> pr/34

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_toko`
--
ALTER TABLE `daftar_toko`
  ADD PRIMARY KEY (`id_toko`),
  ADD KEY `user_fk` (`id_user`);
<<<<<<< HEAD
=======

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_menu` (`id_menu`);
>>>>>>> pr/34

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `toko_fk` (`id_toko`);
<<<<<<< HEAD
=======

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `transaksi_fk1` (`id_menu`),
  ADD KEY `transaksi_fk2` (`id_user`),
  ADD KEY `transaksi_fk3` (`id_detail_transaksi`);
>>>>>>> pr/34

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_toko`
--
ALTER TABLE `daftar_toko`
  MODIFY `id_toko` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_toko`
--
ALTER TABLE `daftar_toko`
<<<<<<< HEAD
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `id_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;
=======
  MODIFY `id_toko` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
>>>>>>> pr/34

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
<<<<<<< HEAD
  ADD CONSTRAINT `toko_fk` FOREIGN KEY (`id_toko`) REFERENCES `daftar_toko` (`id_toko`) ON DELETE CASCADE ON UPDATE CASCADE;
=======
  MODIFY `id_menu` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar_toko`
--
ALTER TABLE `daftar_toko`
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `id_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `toko_fk` FOREIGN KEY (`id_toko`) REFERENCES `daftar_toko` (`id_toko`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_fk1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_fk2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_fk3` FOREIGN KEY (`id_detail_transaksi`) REFERENCES `detail_transaksi` (`id_detail_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;
>>>>>>> pr/34
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
