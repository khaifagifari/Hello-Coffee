-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 11:14 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

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
  `id_toko` tinyint(10) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `id_user` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_toko`
--

INSERT INTO `daftar_toko` (`id_toko`, `nama_toko`, `alamat`, `notelp`, `id_user`) VALUES
(1, 'Kopi jon', 'Garut', '08957240797', 5),
(3, 'Kopi joni', 'Cimahi', '08957240797', 5);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `komentar` varchar(256) NOT NULL,
  `bintang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(8) NOT NULL,
  `nama_menu` varchar(64) NOT NULL,
  `harga` int(16) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `id_toko` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga`, `deskripsi`, `id_toko`) VALUES
(0, 'Kopi Capucino', 10000, 'Kopi yang pantas buat kamu yang manis', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
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
-- Indexes for table `daftar_toko`
--
ALTER TABLE `daftar_toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_toko`
--
ALTER TABLE `daftar_toko`
  MODIFY `id_toko` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
