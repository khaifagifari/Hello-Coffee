-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2019 pada 10.56
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
  `id_user` int(8) NOT NULL,
  `foto_toko` varchar(128) NOT NULL,
  `Desc` varchar(256) NOT NULL,
  `Jam operasional` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_toko`
--

INSERT INTO `daftar_toko` (`id_toko`, `nama_toko`, `alamat`, `id_user`, `foto_toko`, `Desc`, `Jam operasional`) VALUES
(1, 'Kopi Tungku', 'Bandung, bojongsoang', 5, 'tungku.jpg', 'Tempat kopi yang terdapat dekat dengan kawasan kampus telkom, dan memiliki desgin tempat kopi yang cukup menarik', '19.00-24.00'),
(2, 'Kopi 372', 'Jl. Ir. H. Juanda No. 372, Dago Atas, Bandung', 5, '372.jpg', 'Tempat kopi yang biasa digolongkan sebagai hidden gems, karena tempatnya dari luar terlihat biasa saja. Namun kalau sudah masuk ke dalam tempatnya sangat luas, seperti satu lembah digunakan oleh kafe ini. ', '13.00-24.00'),
(3, 'Kopi Kulo', 'Bandung, bojongsoang', 5, 'kulo.jpg', 'Tempat kopi yang menyajikan Menu es kopi terenak dan nikmat', '08.00-19.00'),
(4, 'tes', 'tes', 5, 'tes', '', '');

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
(5, 5, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama_komentar` varchar(64) NOT NULL,
  `isi_komentar` varchar(256) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_menu` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama_komentar`, `isi_komentar`, `id_user`, `id_menu`) VALUES
(1, 'adam', 'adam', 5, 1),
(4, 'khaifa', 'kopi ku', 4, 4),
(5, 'Rizky', 'hello coffee, website impianku', 4, 2),
(6, 'abi', 'bisa mesan mas?', 4, 3);

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
  `foto_kopi` varchar(32) NOT NULL,
  `id_toko` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga`, `deskripsi`, `jenis`, `foto_kopi`, `id_toko`) VALUES
(1, 'Kopi Capucino', 10000, 'Kopi yang pantas buat kamu yang manis', 'Capucino', 'coffee1.jpg', 1),
(2, 'Kopi Espreso', 15000, 'Espresso merupakan kopi modern yang paling kuat kadar kopinya (very strong). Espresso merupakan ekstrak biji kopi murni tanpa campuran. Rasanya sudah pasti pahit, dengan tingkat kekentalannya tergantung dari biji kopi yang digunakan. Espresso biasa dikonsu', 'Espreso', 'Coffee4.jpg', 1),
(3, 'Kopi Macchiato', 20000, 'Macchiato merupakan espresso yang diberi campuran susu foam. Foam atau susu yang di-steam sendiri kadarnya sedikit, sehingga rasanya tetap strong.', 'Macchiato', 'Coffee1.jpg', 1);

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
  `Foto` varchar(40) NOT NULL,
  `id_toko` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `email`, `gender`, `Foto`, `id_toko`) VALUES
(0, 'apaaja', 'e03ae33ee8417ce2c9785274217636e0', 'apaaja', 'apaaja', 'laki-laki', 'kopi.png', 0),
(1, 'faris', '7d77e825b80cff62a72e680c1c81424f', 'faris', 'faris@gmail.com', 'laki-laki', 'kopi.jpg', 0),
(2, 'Ihsan', 'f9c8074d5a013e0729373f8f74cd0648', 'Ihsan', 'ihsan@gmail.com', 'L', 'Ihsan3.jpg', 0),
(3, 'Kekey', '93960bd0831c5282386062cfa3903c6b', 'Kekey', 'kekey@gmail.com', 'L', 'kopi.jpg', 0),
(4, 'mukhtar', 'bc6ed692dd28b4860b19789b59f330b1', 'Putra', 'putra16.mp@gmail.com', 'Laki-laki', 'profile.jpg', 0),
(5, 'toko', 'bbb48314e5e6ee68d2d8bc1364b8599b', 'toko', 'toko@gmail.com', 'L', 'kopi.jpg', 1),
(7, 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 'tes', 'tes', 'laki-laki', 'kopi.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_toko`
--
ALTER TABLE `daftar_toko`
  ADD PRIMARY KEY (`id_toko`),
  ADD KEY `user_fk` (`id_user`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `toko_fk` (`id_toko`);

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
  MODIFY `id_toko` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
