-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: 30 Des 2017 pada 01.18
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boss_aum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kategori`, `kode_barang`, `nama_barang`, `harga`) VALUES
(1, 1, 'MTA', 'Miwa Rengginang Telor Asin ', '100000'),
(2, 2, 'MCO', 'Miwa Rengginang Coklat', '40000'),
(3, 3, 'MJB', 'Miwa Rengginang Jagung Bakar', '30000'),
(4, 4, 'MKU', 'Miwa Rengginang Keju', '25000'),
(5, 5, 'MCU', 'Miwa Rengginang Cumi', '20000'),
(6, 6, 'MTI', 'Miwa Rengginang Terasi', '15000'),
(7, 7, 'MPS', 'Miwa Rengginang Pedas', '10000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cek_in`
--

CREATE TABLE `cek_in` (
  `id_cek` varchar(5) NOT NULL,
  `nama_cek` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_barang`
--

INSERT INTO `kategori_barang` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Rasa Telor Asin'),
(2, 'Rasa Coklat'),
(3, 'Rasa Jagung Bakar'),
(4, 'Rasa Keju'),
(5, 'Rasa Cumi'),
(6, 'Rasa Terasi'),
(7, 'Rasa Pedas'),
(12, 'oke oce'),
(13, 'yess oke'),
(14, 'hhh'),
(15, 'wow');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
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
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `pelanggan`, `alamat`, `jml_barang`, `jml_qty`, `tgl_terima`, `tgl_keluar`, `harga`, `harga_total`) VALUES
(1, 'fadli', 'Jakarta Timur', 'Miwa Rengginang', '2', '2017-11-28', '2017-11-30', '50000', '100000'),
(2, 'Datuk', 'Jakarta Utara', 'Miwa Rengginang Cumi', '3', '2017-11-28', '2017-11-30', '20000', '60000'),
(3, 'Abdul Ghoni', 'Jakarta Timur', 'Miwa Rengginang Pedas', '10', '2017-11-27', '2017-11-29', '10000', '100000'),
(4, 'gugun nn', 'losari', 'Miwa Rengginang Jagung Bakar', '3', '2017-12-01', '2017-12-03', '30000', '90000'),
(5, 'boss majid', 'kalimukti', 'Miwa Rengginang Telor Asin ', '3', '2017-12-01', '2017-12-03', '100000', '300000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `uid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_login`
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
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
