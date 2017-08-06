-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2017 at 12:06 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kategori`, `kode_barang`, `nama_barang`, `harga`) VALUES
(1, 2, 'CK001', 'Cuci + Setrika+Parfum', '6000'),
(2, 2, 'CK002', 'Cuci Kering', '5000'),
(3, 2, 'CK003', 'Setrika+Parfum', '4500'),
(4, 2, 'CK004', 'Cuci Express (1 Hari)', '11000'),
(5, 2, 'CK005', 'Cuci Kilat (6 Jam)', '16000'),
(6, 2, '', 'Cuci Standar (2 Hari)', '80001'),
(7, 1, 'CJ001', 'Jas, Atasan', '20000'),
(8, 1, 'CJ002', 'Jas, 1 Stell', '26000'),
(9, 1, 'CB001', 'Blazer', '15000'),
(10, 1, 'CBC001', 'Bed Cover Single 1', '13000'),
(11, 1, 'CBC002', 'Bed Cover Single 2', '14000'),
(12, 1, 'CBC003', 'Bed Cover Single 3', '15000'),
(13, 1, 'CBC004', 'Bad Cover Sedang (Double)1', '18000'),
(14, 1, 'CBC005', 'Bad Cover Sedang (Double)2', '19000'),
(15, 1, 'CBC006', 'Bed Cover Sedang (Double)3', '20000'),
(16, 1, 'CBC007', 'Bad Cover Sedang (Double)4', '21000'),
(17, 1, 'CBC008', 'Bad Cover Sedang (Double)5', '22000'),
(18, 1, 'CBC009', 'Bad Cover King1', '25000'),
(19, 1, 'CBC0010', 'Bad Cover King2', '26000'),
(20, 1, 'CBC0011', 'Bad Cover King3', '27000'),
(21, 1, 'CBC0012', 'Bad Cover King 4', '28000'),
(22, 1, 'CBC0013', 'Bad Cover King 5', '29000'),
(23, 1, 'CBC0014', 'Bad Cover King 6', '30000'),
(24, 1, 'CBK001', 'Boneka Kecil 1', '3000'),
(25, 1, 'CBK002', 'Boneka Kecil 2', '4000'),
(26, 1, 'CBK003', 'Boneka Kecil 3', '5000'),
(27, 1, 'CBK004', 'Boneka Kecil 4', '6000'),
(28, 1, 'CBK005', 'Boneka Kecil 5', '7000'),
(29, 1, 'CBK006', 'Boneka Kecil 6', '8000'),
(30, 1, 'CBS001', 'Boneka Sedang 1', '10000'),
(31, 1, 'CBS002', 'Boneka Sedang 2', '11000'),
(32, 1, 'CBS003', 'Boneka Sedang 3', '12000'),
(33, 1, 'CBS004', 'Boneka Sedang 4', '13000'),
(34, 1, 'CBS005', 'Boneka Sedang 5', '14000'),
(35, 1, 'CBS006', 'Boneka Sedang 6', '15000'),
(36, 1, 'CBS007', 'Boneka Besar 1', '18000'),
(37, 1, 'CBS008', 'Boneka Besar 2', '19000'),
(38, 1, 'CBS009', 'Boneka Besar 3', '20000'),
(39, 1, 'CBS0010', 'Boneka Besar 4', '21000'),
(40, 1, 'CBS0011', 'Boneka Besar 5', '22000'),
(41, 1, 'CBS0012', 'Boneka Besar 6', '23000'),
(42, 1, 'CBS0013', 'Boneka Besar 7', '24000'),
(43, 1, 'CBS0014', 'Boneka Besar 8', '25000'),
(44, 1, 'CBJ001', 'Boneka Jumbo 1', '30000'),
(45, 1, 'CBJ002', 'Boneka Jumbo 2', '35000'),
(46, 1, 'CBJ003', 'Boneka Jumbo 3', '40000'),
(47, 1, 'CBJ004', 'Boneka Jumbo 4', '45000'),
(48, 1, 'CBJ005', 'Boneka Jumbo 5', '50000'),
(49, 1, 'CBJ006', 'Boneka Jumbo 6', '55000'),
(50, 1, 'CBJ007', 'Boneka Jumbo 7', '60000'),
(51, 1, 'CBJ008', 'Boneka Jumbo 8', '65000'),
(52, 1, 'CBJ009', 'Boneka Jumbo 9', '70000'),
(53, 1, 'CBJ0010', 'Boneka Jumbo 10', '75000'),
(54, 1, 'CBJ0011', 'Boneka Jumbo 11', '80000'),
(55, 1, 'CBJ0012', 'Boneka Jumbo 12', '85000'),
(56, 1, 'CBJ0013', 'Boneka Jumbo 13', '90000'),
(57, 1, 'CBJ0014', 'Boneka Jumbo 14', '95000'),
(58, 1, 'CBJ0015', 'Boneka Jumbo 15', '100000'),
(59, 3, '', 'Gordyn Tipis ', '4500'),
(60, 3, '', 'Gordyn Tebal 12', '3600'),
(61, 0, '4455', 'Karet Ban MM', '27900'),
(62, 0, 'KTY901', 'Gerr 4', '340905'),
(63, 1, 'RK109', 'Handuk Tebal', '30000'),
(64, 1, '', 'GELANG KARDUS', '70000');

-- --------------------------------------------------------

--
-- Table structure for table `cek_in`
--

CREATE TABLE `cek_in` (
  `id_cek` varchar(5) NOT NULL,
  `nama_cek` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_barang`
--

INSERT INTO `kategori_barang` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Satuan/Pcs'),
(2, 'Kiloan/Kg'),
(3, 'M');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `pelanggan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jml_barang` varchar(30) NOT NULL,
  `jml_qty` varchar(30) NOT NULL,
  `tgl_terima` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `harga` varchar(20) NOT NULL,
  `harga_total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `pelanggan`, `alamat`, `jml_barang`, `jml_qty`, `tgl_terima`, `tgl_keluar`, `harga`, `harga_total`) VALUES
(1, 'Hsanah', 'Jakarta', '4 kg', '', '2017-06-12', '2017-06-14', '51000', '51000'),
(2, 'Jamani', 'Kalimukti', '1 kg', '', '2017-06-11', '2017-06-13', '7000', '7000'),
(3, 'Karso', 'Kalimukti', '2 Kg', '', '2017-06-13', '2017-06-15', '14000', ''),
(6, 'Kusen', 'Jakarta', 'Jaket', '', '2017-07-06', '2017-07-09', '6000', ''),
(7, 'Kusen', 'Jakarta', 'Jaket', '', '2017-07-06', '2017-07-09', '6000', ''),
(8, 'Jamal', 'jakarta utara', 'kaos ', '', '2017-07-03', '2017-07-05', '5000', ''),
(9, 'Dewi', 'Tangerang', 'Kaos kaki', '', '2017-07-03', '2017-07-05', '4500', ''),
(32, 'dadang', 'kalimukti', 'Blazer', '', '2017-07-12', '2017-07-17', '15000', ''),
(33, 'ghoni ', 'Kalimukti', 'Cuci Kilat (6 Jam)', '', '2017-07-11', '2017-07-13', '16000', ''),
(34, 'hamidah', 'Kalimukti', 'Cuci Kering', '', '2017-07-10', '2017-07-12', '5000', ''),
(47, 'Gunawan', 'jakarta barat', 'kaos kaki ', '', '2017-07-11', '2017-07-13', '4000', ''),
(51, 'dahlan', 'kalimukti', 'Bed Cover Single 3', '', '2017-07-10', '2017-07-12', '15000', ''),
(52, 'siti jannah', 'losari', 'Jas, 1 Stell', '', '2017-07-10', '2017-07-12', '26000', ''),
(53, 'Rojali', 'kalimukti', 'Boneka Jumbo 3', '', '2017-07-10', '2017-07-12', '40000', ''),
(55, 'kusnan', 'kalimukti', 'Setrika+Parfum', '', '2017-07-10', '2017-07-12', '4500', ''),
(63, 'suja', 'kalibuntu', 'Cuci Express (1 Hari)', '', '2017-07-12', '2017-07-14', '11000', ''),
(65, 'hambali', 'kalibuntu', 'Jas, 1 Stell', '', '2017-07-10', '2017-07-12', '26000', ''),
(66, 'Muhammad', 'jakarta', 'Blazer', '', '2017-07-09', '2017-07-11', '15000', ''),
(67, 'Kasmad ', 'Jakarta', 'Bed Cover Single 1', '', '2017-07-11', '2017-07-13', '13000', ''),
(68, 'Muhammad jainudin alkahfi almajidi', 'jakarta utara kelurahan kebon bawang', 'Bad Cover Sedang (Double)2', '', '2017-07-12', '2017-07-14', '19000', ''),
(69, 'gnaepo', 'jakarta barat', 'Blazer', '2', '2017-07-23', '2017-07-25', '15000', ''),
(70, '', '', 'Cuci Kering', '', '0000-00-00', '0000-00-00', '5000', ''),
(71, '', '', 'Cuci + Setrika+Parfum', '', '0000-00-00', '0000-00-00', '6000', ''),
(72, '', '', 'Setrika+Parfum', '', '0000-00-00', '0000-00-00', '4500', ''),
(73, '', '', 'Setrika+Parfum', '', '0000-00-00', '0000-00-00', '4500', ''),
(74, '', '', 'Jas, Atasan', '', '0000-00-00', '0000-00-00', '20000', ''),
(75, '', '', 'Jas, Atasan', '', '0000-00-00', '0000-00-00', '20000', ''),
(76, '', '', 'Jas, Atasan', '', '0000-00-00', '0000-00-00', '20000', ''),
(77, 'saikinah', 'jakarta barat', 'Cuci Kering', '2', '2017-07-24', '2017-07-25', '5000', ''),
(78, '', '', 'Cuci Standar (2 Hari)', '', '0000-00-00', '0000-00-00', '80001', ''),
(79, '', '', 'Blazer', '', '0000-00-00', '0000-00-00', '15000', ''),
(80, '', '', 'Blazer', '', '0000-00-00', '0000-00-00', '15000', ''),
(81, 'galih', 'jakarta utara', 'Jas, 1 Stell', '2', '2017-07-25', '2017-07-24', '26000', ''),
(82, 'galih', 'jakarta utara', 'Jas, 1 Stell', '2', '2017-07-25', '2017-07-24', '26000', ''),
(83, '', '', '', '3', '0000-00-00', '0000-00-00', '6000', ''),
(84, '', '', 'c', '', '0000-00-00', '0000-00-00', '', ''),
(85, '', '', 'bad', '', '0000-00-00', '0000-00-00', '', ''),
(86, '', '', 'c', '', '0000-00-00', '0000-00-00', '', ''),
(87, '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(88, 'sudaryo', 'barisan', '', '2', '2017-07-27', '2017-07-30', '20000', ''),
(89, 'sudaryo', 'barisan', 'Jas, Atasan', '2', '2017-07-27', '2017-07-27', '20000', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `uid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`uid`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'member', 'aa08769cdcb26674c6706093503ff0a3', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `cek_in`
--
ALTER TABLE `cek_in`
  ADD PRIMARY KEY (`id_cek`);

--
-- Indexes for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
