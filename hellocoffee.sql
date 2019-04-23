-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 02:45 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

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
  `foto` varchar(128) NOT NULL,
  `Desc` varchar(256) NOT NULL,
  `Jam operasional` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_toko`
--

INSERT INTO `daftar_toko` (`id_toko`, `nama_toko`, `alamat`, `id_user`, `foto`, `Desc`, `Jam operasional`) VALUES
(1, 'Kopi Tungku', 'Bandung, bojongsoang', 5, 'tungku.jpg', 'Tempat kopi yang terdapat dekat dengan kawasan kampus telkom, dan memiliki desgin tempat kopi yang cukup menarik', '19.00-24.00'),
(2, 'Kopi 372', 'Jl. Ir. H. Juanda No. 372, Dago Atas, Bandung', 5, '372.jpg', 'Tempat kopi yang biasa digolongkan sebagai hidden gems, karena tempatnya dari luar terlihat biasa saja. Namun kalau sudah masuk ke dalam tempatnya sangat luas, seperti satu lembah digunakan oleh kafe ini. ', '13.00-24.00'),
(3, 'Kopi Kulo', 'Bandung, bojongsoang', 5, 'kulo.jpg', 'Tempat kopi yang menyajikan Menu es kopi terenak dan nikmat', '08.00-19.00'),
(4, 'tes', 'tes', 5, 'tes', '', '');

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

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `qty`, `id_menu`, `id_user`) VALUES
(1, 2, 3, 2),
(2, 1, 1, 2);

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
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama_komentar`, `isi_komentar`, `id_user`, `id_menu`) VALUES
(1, 'adam', 'adam', 5, 1),
(4, 'khaifa', 'kopi ku', 4, 4),
(5, 'Rizky', 'hello coffee, website impianku', 4, 2),
(6, 'abi', 'bisa mesan mas?', 4, 3);

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
  `foto` varchar(32) NOT NULL,
  `id_toko` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga`, `deskripsi`, `jenis`, `foto`, `id_toko`) VALUES
(1, 'Kopi Capucino', 10000, 'Kopi yang pantas buat kamu yang manis', 'Capucino', 'coffee1.jpg', 1),
(2, 'Kopi Espreso', 15000, 'Espresso merupakan kopi modern yang paling kuat kadar kopinya (very strong). Espresso merupakan ekstrak biji kopi murni tanpa campuran. Rasanya sudah pasti pahit, dengan tingkat kekentalannya tergantung dari biji kopi yang digunakan. Espresso biasa dikonsu', 'Espreso', 'Coffee4.jpg', 1),
(3, 'Kopi Macchiato', 20000, 'Macchiato merupakan espresso yang diberi campuran susu foam. Foam atau susu yang di-steam sendiri kadarnya sedikit, sehingga rasanya tetap strong.', 'Macchiato', 'Coffee1.jpg', 1),
(6, 'Cincau', 8000, 'Cincau lezat', 'Cincau', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
(1, 'faris', '7d77e825b80cff62a72e680c1c81424f', 'faris', 'faris@gmail.com', 'laki-laki', '', 0),
(2, 'Ihsan', 'f9c8074d5a013e0729373f8f74cd0648', 'Ihsan', 'ihsan@gmail.com', 'L', '', 0),
(3, 'Kekey', '93960bd0831c5282386062cfa3903c6b', 'Kekey', 'kekey@gmail.com', 'L', '', 0),
(4, 'mukhtar', 'bc6ed692dd28b4860b19789b59f330b1', 'Putra', 'putra16.mp@gmail.com', 'Laki-laki', '', 0),
(5, 'toko', 'bbb48314e5e6ee68d2d8bc1364b8599b', 'toko', 'toko@gmail.com', 'L', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_toko`
--
ALTER TABLE `daftar_toko`
  ADD PRIMARY KEY (`id_toko`),
  ADD KEY `user_fk` (`id_user`);

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
  MODIFY `id_keranjang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_toko`
--
ALTER TABLE `daftar_toko`
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `id_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `toko_fk` FOREIGN KEY (`id_toko`) REFERENCES `daftar_toko` (`id_toko`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
