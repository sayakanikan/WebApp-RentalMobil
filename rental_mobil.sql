-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 08:31 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`, `role_id`) VALUES
(1, 'Samsul Huda', 'admin23', 'c3284d0f94606de1fd2af172aba15bf3', 1),
(2, 'Irfansyah', 'admin', '202cb962ac59075b964b07152d234b70', 1),
(3, 'Ahmad Junaidi', 'ahmad', '61243c7b9a4022cb3f8dc3106767ed12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bank`
--

CREATE TABLE `tb_bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bank`
--

INSERT INTO `tb_bank` (`id_bank`, `nama_bank`) VALUES
(1, 'BCA'),
(2, 'BNI'),
(3, 'BRI'),
(4, 'Mandiri'),
(5, 'BSI'),
(6, 'Danamon'),
(7, 'BTN'),
(8, 'Maybank'),
(9, 'Permata');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `gambar` varchar(220) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_telepon`, `no_ktp`, `password`, `gambar`, `role_id`) VALUES
(1, 'Puteri Siregarr', 'sayakanberuang', 'Jalan Beruang no. 13A, Salatiga', 'Perempuan', '082139417521', '3374019284920002', '202cb962ac59075b964b07152d234b70', '', 2),
(2, 'Raihan Jamal Sudibyo', 'sayakanikan', 'Jalan Beruang no. 17, Semarang', 'Laki - laki', '081390181502', '3374102319520003', '202cb962ac59075b964b07152d234b70', '', 2),
(5, 'Cholid', 'cholid', 'Klipang Permai, Sendangmulyo, Tembalang, Semarang, Jawa Tengah', 'Laki - laki', '081390149646', '89679576456452', 'e10adc3949ba59abbe56e057f20f883e', '', 2),
(7, 'Abdul Somad', 'user', 'Jakarta Selatan, DKI Jakarta', 'Laki - laki', '085162738492', '337410293120001', '202cb962ac59075b964b07152d234b70', '', 2),
(8, 'Putri Hannah', 'rentalmobil', 'Jalan Kelinci Raya no. 14, Sendangmulyo, Tembalang, Semarang, 50273', 'Perempuan', '087593729385', '3374102938590003', 'e1aaef260db7f48558149ce9b0c2c3d8', 'DSC088621.jpg', 2),
(9, 'Irfansyah', 'irfan11796', 'Semarang, Jawa Tengah', 'Laki - laki', '0821647295723', '337410029401920003', '202cb962ac59075b964b07152d234b70', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `id_mobil` int(11) NOT NULL,
  `kode_tipe` varchar(150) NOT NULL,
  `merk` varchar(120) NOT NULL,
  `no_plat` varchar(2000) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `auto` int(11) NOT NULL,
  `disel` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `kode_tipe`, `merk`, `no_plat`, `warna`, `tahun`, `status`, `harga`, `denda`, `auto`, `disel`, `gambar`) VALUES
(8, 'CTY', 'Honda Civic', 'H 3376 IR', 'Putih', '2019', '0', 500000, 499000, 1, 0, 'civic.jpeg'),
(9, 'SUV', 'Mitsubishi Pajero Sport', 'H 8341 HG', 'Putih', '2018', '1', 500000, 499000, 1, 1, 'pajero.png'),
(10, 'LMPV', 'Honda Mobilio', 'H 7812 JP', 'Silver', '2017', '1', 300000, 299000, 0, 0, 'mobilio.jpg'),
(11, 'LCGC', 'Honda Brio', 'B 1832 HI', 'Kuning', '2019', '1', 250000, 249000, 0, 0, 'brio.jpg'),
(12, 'SUV', 'Honda CRV', 'H 2384 YI', 'Biru Tua', '2020', '1', 500000, 499000, 1, 0, 'crv.jpeg'),
(13, 'LCGC', 'Toyota Calya', 'H 2391 UV', 'Abu -abu', '2016', '1', 250000, 249000, 0, 0, 'calya2.jpg'),
(14, 'LMPV', 'Toyota Avanza', 'H 3281 TG', 'Putih', '2020', '1', 300000, 299000, 0, 0, 'avanza.jpg'),
(15, 'LMPV', 'Mitsubishi Xpander', 'H 1474 JG', 'Hitam', '2017', '1', 300000, 299000, 1, 0, 'xpander.jpg'),
(16, 'CTY', 'Toyota Camry', 'H 6630 JO', 'Hitam', '2014', '1', 300000, 299000, 1, 0, 'camry.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekening`
--

CREATE TABLE `tb_rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_rekening` varchar(120) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `no_rekening` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rekening`
--

INSERT INTO `tb_rekening` (`id_rekening`, `nama_rekening`, `id_bank`, `no_rekening`) VALUES
(1, 'Abdul Jaelani', 1, '3710951294821'),
(2, 'Abdul Jaelani', 4, '052341593534'),
(4, 'Bastian Abdul Jaelani', 3, '052341593534');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tipe`
--

CREATE TABLE `tb_tipe` (
  `id_tipe` int(11) NOT NULL,
  `kode_tipe` varchar(10) NOT NULL,
  `nama_tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tipe`
--

INSERT INTO `tb_tipe` (`id_tipe`, `kode_tipe`, `nama_tipe`) VALUES
(6, 'SUV', 'Sport Utility Vehicle'),
(7, 'HTB', 'Hatchback'),
(8, 'MPV', 'Multi Purpose Vehicle'),
(9, 'LMPV', 'Low Multi Purpose Vehicle'),
(10, 'LCGC', 'Low Cost Green Car'),
(11, 'CTY', 'City Car');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_rental` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` varchar(120) NOT NULL,
  `denda` varchar(120) NOT NULL,
  `total_denda` varchar(120) NOT NULL,
  `supir` int(11) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(120) NOT NULL,
  `foto_ktp` varchar(120) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_rental`, `username`, `id_mobil`, `tanggal_rental`, `tanggal_kembali`, `harga`, `denda`, `total_denda`, `supir`, `tanggal_pengembalian`, `status_pengembalian`, `status_rental`, `bukti_pembayaran`, `foto_ktp`, `status_pembayaran`) VALUES
(8, 'user', 8, '2022-06-06', '2022-06-08', '500000', '499000', '', 0, '0000-00-00', 'Belum Kembali', 'Belum Selesai', 'SIDOMBA.png', 'contoh-wbs-sederhana-8.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_bank`
--
ALTER TABLE `tb_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id_mobil`),
  ADD KEY `kode_tipe` (`kode_tipe`);

--
-- Indexes for table `tb_rekening`
--
ALTER TABLE `tb_rekening`
  ADD PRIMARY KEY (`id_rekening`),
  ADD KEY `id_bank` (`id_bank`);

--
-- Indexes for table `tb_tipe`
--
ALTER TABLE `tb_tipe`
  ADD PRIMARY KEY (`id_tipe`),
  ADD KEY `kode_tipe` (`kode_tipe`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_rental`),
  ADD KEY `id_customer` (`username`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_bank`
--
ALTER TABLE `tb_bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_rekening`
--
ALTER TABLE `tb_rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_tipe`
--
ALTER TABLE `tb_tipe`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD CONSTRAINT `tb_mobil_ibfk_1` FOREIGN KEY (`kode_tipe`) REFERENCES `tb_tipe` (`kode_tipe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_rekening`
--
ALTER TABLE `tb_rekening`
  ADD CONSTRAINT `tb_rekening_ibfk_1` FOREIGN KEY (`id_bank`) REFERENCES `tb_bank` (`id_bank`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `tb_mobil` (`id_mobil`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
