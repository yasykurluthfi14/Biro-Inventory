-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 11:42 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biro1`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory_admin`
--

CREATE TABLE `inventory_admin` (
  `id` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `no_room` varchar(20) NOT NULL,
  `volume_perhitungan` varchar(100) NOT NULL,
  `satuan_perhitungan` int(20) NOT NULL,
  `satuan_harga` int(20) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `keterangan` varchar(75) NOT NULL,
  `status` varchar(20) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory_admin`
--

INSERT INTO `inventory_admin` (`id`, `tanggal`, `nama_barang`, `no_room`, `volume_perhitungan`, `satuan_perhitungan`, `satuan_harga`, `total_harga`, `keterangan`, `status`, `foto`) VALUES
(19, '2022-06-09', 'Sabu', '002', '12 pc', 54, 76654, 4139316, 'Lunas', '', '62a1b04ad3fc6.jpg'),
(20, '2022-06-09', 'Kokain', '001', '50pc', 54342, 5332412, 2147483647, 'Halal', '', 'Screenshot (30).jpg'),
(21, '2022-06-13', 'Lemari', '001', '12 pc', 3213, 4255, 13671315, '23553764', '', 'Screenshot (38).png'),
(22, '2022-07-24', 'pena', 'INV', '2', 3, 5, 15, 'Inventory', 'inventory_admin', 'Screenshot (31).jpg'),
(23, '2022-07-27', 'Buku', 'LAB', '170 kg', 100, 50, 5000, 'Barang Masuk', 'inventory_admin', '20732.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `main_inventory`
--

CREATE TABLE `main_inventory` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `no_room` varchar(20) NOT NULL,
  `volume_perhitungan` varchar(20) NOT NULL,
  `satuan_perhitungan` varchar(20) NOT NULL,
  `satuan_harga` varchar(20) NOT NULL,
  `total_harga` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `foto` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_inventory`
--

INSERT INTO `main_inventory` (`id`, `tanggal`, `nama_barang`, `no_room`, `volume_perhitungan`, `satuan_perhitungan`, `satuan_harga`, `total_harga`, `keterangan`, `status`, `foto`) VALUES
(1, '2022-07-24', 'pena', 'INV', '2', '3', '5', '15', 'Inventory', 'main_inventory', 'Screenshot (31).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `main_pengadaan`
--

CREATE TABLE `main_pengadaan` (
  `id_pengadaan` int(11) NOT NULL,
  `tanggal_pengadaan` date NOT NULL,
  `nb_pengadaan` varchar(50) NOT NULL,
  `no_room` varchar(20) NOT NULL,
  `vp_pengadaan` varchar(20) NOT NULL,
  `sp_pengadaan` varchar(20) NOT NULL,
  `sh_pengadaan` varchar(20) NOT NULL,
  `th_pengadaan` varchar(20) NOT NULL,
  `kp` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `foto` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_pengadaan`
--

INSERT INTO `main_pengadaan` (`id_pengadaan`, `tanggal_pengadaan`, `nb_pengadaan`, `no_room`, `vp_pengadaan`, `sp_pengadaan`, `sh_pengadaan`, `th_pengadaan`, `kp`, `status`, `foto`) VALUES
(1, '2022-07-24', 'Karung', 'PENG', '17 BUNGKUS', '5', '100', '500', 'Lunas', 'Aman', 'Gambar Form Login.jpg'),
(2, '2022-07-27', 'sapu', 'PENG', '17N', '100', '5', '500', 'Lunas', 'main_pengadaan', 'WhatsApp Image 2022-07-23 at 21.29.38.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan_admin`
--

CREATE TABLE `pengadaan_admin` (
  `id_pengadaan` int(20) NOT NULL,
  `tanggal_pengadaan` date NOT NULL,
  `nb_pengadaan` varchar(50) NOT NULL,
  `no_room` varchar(20) NOT NULL,
  `vp_pengadaan` varchar(75) NOT NULL,
  `sp_pengadaan` int(20) NOT NULL,
  `sh_pengadaan` int(20) NOT NULL,
  `th_pengadaan` int(20) NOT NULL,
  `kp` varchar(75) NOT NULL,
  `status` varchar(20) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengadaan_admin`
--

INSERT INTO `pengadaan_admin` (`id_pengadaan`, `tanggal_pengadaan`, `nb_pengadaan`, `no_room`, `vp_pengadaan`, `sp_pengadaan`, `sh_pengadaan`, `th_pengadaan`, `kp`, `status`, `foto`) VALUES
(5, '2022-06-09', 'Ganja', '001', '1 kg', 54233, 45354, 2147483647, 'Belum lunas', 'pengadaan_admin', 'Screenshot (29).png'),
(6, '0000-00-00', 'sapu', '001', '10', 3, 25000, 75000, 'Lunas', 'pengadaan_admin', 'Screenshot (30).png');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalianbarang_admin`
--

CREATE TABLE `pengembalianbarang_admin` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `penerimaan_unit` varchar(20) NOT NULL,
  `pengembalian_unit` varchar(20) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengembalianbarang_admin`
--

INSERT INTO `pengembalianbarang_admin` (`id`, `tanggal`, `nama_barang`, `penerimaan_unit`, `pengembalian_unit`, `foto`) VALUES
(1, '2022-07-25', 'kipas', '5', '1', 'Screenshot (30).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `tlp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat_perusahaan`, `tlp`) VALUES
(1, 'BIRO ADPEMB SEKDA PROVINSI SUMSEL', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `room_inventory`
--

CREATE TABLE `room_inventory` (
  `id` int(11) NOT NULL,
  `no_room` varchar(20) NOT NULL,
  `nama_room` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_inventory`
--

INSERT INTO `room_inventory` (`id`, `no_room`, `nama_room`) VALUES
(2, '001', 'ASO'),
(3, '002', 'ASU');

-- --------------------------------------------------------

--
-- Table structure for table `room_pengadaan`
--

CREATE TABLE `room_pengadaan` (
  `id` int(11) NOT NULL,
  `no_room` varchar(20) NOT NULL,
  `nama_room` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_pengadaan`
--

INSERT INTO `room_pengadaan` (`id`, `no_room`, `nama_room`) VALUES
(2, '001', 'CCTV'),
(3, '002', 'CCT');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` char(32) NOT NULL,
  `jenis_user` varchar(11) NOT NULL,
  `alamat_user` varchar(255) NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `email` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nm_user`, `username`, `pass`, `jenis_user`, `alamat_user`, `telepon`, `email`) VALUES
(9, 'Kilian', 'Kilian', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 'Jl.Perancis', '095049898', 'kilian@gmail.com'),
(13, 'Luthfi', 'Luthfi', '827ccb0eea8a706c4c34a16891f84e7b', 'officer', 'Jl.Rustini', '081391496048', 'yasykurluthfi07@gmail.com'),
(17, 'Aang', 'Aang', '827ccb0eea8a706c4c34a16891f84e7b', 'manager', 'Jl. Cinde', '67584889892', 'Gilo@gmail.com'),
(18, 'Ari', 'Manager', '827ccb0eea8a706c4c34a16891f84e7b', 'manager', 'Palembang', '991', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory_admin`
--
ALTER TABLE `inventory_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_inventory`
--
ALTER TABLE `main_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_pengadaan`
--
ALTER TABLE `main_pengadaan`
  ADD PRIMARY KEY (`id_pengadaan`);

--
-- Indexes for table `pengadaan_admin`
--
ALTER TABLE `pengadaan_admin`
  ADD PRIMARY KEY (`id_pengadaan`);

--
-- Indexes for table `pengembalianbarang_admin`
--
ALTER TABLE `pengembalianbarang_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `room_inventory`
--
ALTER TABLE `room_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_pengadaan`
--
ALTER TABLE `room_pengadaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory_admin`
--
ALTER TABLE `inventory_admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `main_inventory`
--
ALTER TABLE `main_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_pengadaan`
--
ALTER TABLE `main_pengadaan`
  MODIFY `id_pengadaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengadaan_admin`
--
ALTER TABLE `pengadaan_admin`
  MODIFY `id_pengadaan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengembalianbarang_admin`
--
ALTER TABLE `pengembalianbarang_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room_inventory`
--
ALTER TABLE `room_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room_pengadaan`
--
ALTER TABLE `room_pengadaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
