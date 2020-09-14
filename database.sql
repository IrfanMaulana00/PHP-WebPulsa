-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2020 at 11:49 PM
-- Server version: 5.7.31-log
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `irfancoi_pulsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `provider` varchar(10) NOT NULL,
  `provider_sub` varchar(10) NOT NULL,
  `operator` varchar(10) NOT NULL,
  `operator_sub` varchar(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `description` varchar(20) NOT NULL,
  `price` int(7) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `provider`, `provider_sub`, `operator`, `operator_sub`, `code`, `description`, `price`, `status`) VALUES
(1, 'AXIS', 'REGULER', 'AXIS', 'AX', 'AX5', 'AXIS 5K', 5895, 'normal'),
(2, 'AXIS', 'REGULER', 'AXIS', 'AX', 'AX10', 'AXIS 10K', 10799, 'normal'),
(3, 'AXIS', 'REGULER', 'AXIS', 'AX', 'AX25', 'AXIS 25K', 24835, 'normal'),
(4, 'AXIS', 'REGULER', 'AXIS', 'AX', 'AX30', 'AXIS 30K', 29885, 'normal'),
(5, 'AXIS', 'REGULER', 'AXIS', 'AX', 'AX50', 'AXIS 50K', 49525, 'normal'),
(6, 'AXIS', 'REGULER', 'AXIS', 'AX', 'AX100', 'AXIS 100K', 98650, 'normal'),
(7, 'AXIS', 'REGULER', 'AXIS', 'AX', 'AX15', 'AXIS 15K', 14989, 'normal'),
(8, 'INDOSAT', 'REGULER', 'INDOSAT', 'I', 'I5', 'INDOSAT 5K', 5875, 'normal'),
(9, 'INDOSAT', 'REGULER', 'INDOSAT', 'I', 'I10', 'INDOSAT 10K', 10875, 'normal'),
(10, 'INDOSAT', 'REGULER', 'INDOSAT', 'I', 'I25', 'INDOSAT 25K', 24994, 'normal'),
(11, 'INDOSAT', 'REGULER', 'INDOSAT', 'I', 'I50', 'INDOSAT 50K', 49149, 'normal'),
(12, 'INDOSAT', 'REGULER', 'INDOSAT', 'I', 'I100', 'INDOSAT 100K', 97650, 'normal'),
(13, 'INDOSAT', 'REGULER', 'INDOSAT', 'I', 'I20', 'INDOSAT 20K', 19995, 'normal'),
(14, 'INDOSAT', 'REGULER', 'INDOSAT', 'I', 'I30', 'INDOSAT 30K', 29815, 'normal'),
(15, 'INDOSAT', 'REGULER', 'INDOSAT', 'I', 'I200', 'INDOSAT 200K', 189975, 'normal'),
(16, 'INDOSAT', 'REGULER', 'INDOSAT', 'I', 'I150', 'INDOSAT 150K', 144200, 'normal'),
(17, 'INDOSAT', 'REGULER', 'INDOSAT', 'I', 'I250', 'INDOSAT 250K', 235975, 'normal'),
(18, 'INDOSAT', 'REGULER', 'INDOSAT', 'I', 'I15', 'INDOSAT 15K', 15190, 'normal'),
(19, 'INDOSAT', 'REGULER', 'INDOSAT', 'I', 'I12', 'INDOSAT 12K', 12155, 'normal'),
(20, 'INDOSAT', 'REGULER', 'INDOSAT', 'I', 'I60', 'INDOSAT 60K', 58975, 'normal'),
(21, 'INDOSAT', 'REGULER', 'INDOSAT', 'I', 'I80', 'INDOSAT 80K', 78025, 'normal'),
(22, 'INDOSAT', 'REGULER', 'INDOSAT', 'I', 'I90', 'INDOSAT 90K', 87275, 'normal'),
(23, 'INDOSAT', 'REGULER', 'INDOSAT', 'I', 'I500', 'INDOSAT 500K', 468975, 'normal'),
(24, 'INDOSAT', 'REGULER', 'INDOSAT', 'I', 'I40', 'INDOSAT 40K', 39650, 'normal'),
(25, 'SMARTFREN', 'REGULER', 'SMARTFREN', 'SM', 'SM5', 'SMARTFREN 5K', 5074, 'normal'),
(26, 'SMARTFREN', 'REGULER', 'SMARTFREN', 'SM', 'SM10', 'SMARTFREN 10K', 9983, 'normal'),
(27, 'SMARTFREN', 'REGULER', 'SMARTFREN', 'SM', 'SM20', 'SMARTFREN 20K', 19850, 'normal'),
(28, 'SMARTFREN', 'REGULER', 'SMARTFREN', 'SM', 'SM25', 'SMARTFREN 25K', 24674, 'normal'),
(29, 'SMARTFREN', 'REGULER', 'SMARTFREN', 'SM', 'SM30', 'SMARTFREN 30K', 29660, 'normal'),
(30, 'SMARTFREN', 'REGULER', 'SMARTFREN', 'SM', 'SM50', 'SMARTFREN 50K', 49224, 'normal'),
(31, 'SMARTFREN', 'REGULER', 'SMARTFREN', 'SM', 'SM100', 'SMARTFREN 100K', 98900, 'normal'),
(32, 'SMARTFREN', 'REGULER', 'SMARTFREN', 'SM', 'SM60', 'SMARTFREN 60K', 59130, 'normal'),
(33, 'SMARTFREN', 'REGULER', 'SMARTFREN', 'SM', 'SM150', 'SMARTFREN 150K', 148900, 'normal'),
(34, 'SMARTFREN', 'REGULER', 'SMARTFREN', 'SM', 'SM200', 'SMARTFREN 200K', 198900, 'normal'),
(35, 'SMARTFREN', 'REGULER', 'SMARTFREN', 'SM', 'SM300', 'SMARTFREN 300K', 298900, 'normal'),
(36, 'SMARTFREN', 'REGULER', 'SMARTFREN', 'SM', 'SM75', 'SMARTFREN 75K', 74275, 'normal'),
(37, 'SMARTFREN', 'REGULER', 'SMARTFREN', 'SM', 'SM15', 'SMARTFREN 15K', 15000, 'normal'),
(38, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S5', 'TELKOMSEL 5K', 5775, 'normal'),
(39, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S10', 'TELKOMSEL 10K', 10475, 'normal'),
(40, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S20', 'TELKOMSEL 20K', 20095, 'normal'),
(41, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S25', 'TELKOMSEL 25K', 24875, 'normal'),
(42, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S50', 'TELKOMSEL 50K', 49525, 'normal'),
(43, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S100', 'TELKOMSEL 100K', 97924, 'normal'),
(44, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S200', 'TELKOMSEL 200K', 197050, 'normal'),
(45, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S150', 'TELKOMSEL 150K', 148435, 'normal'),
(46, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S300', 'TELKOMSEL 300K', 295650, 'normal'),
(47, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S1000', 'TELKOMSEL 1000K', 975800, 'normal'),
(48, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S500', 'TELKOMSEL 500K', 487700, 'normal'),
(49, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S1', 'TELKOMSEL 1K', 1525, 'normal'),
(50, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S30', 'TELKOMSEL 30K', 29895, 'normal'),
(51, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S40', 'TELKOMSEL 40K', 40000, 'normal'),
(52, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S60', 'TELKOMSEL 60K', 60025, 'normal'),
(53, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S70', 'TELKOMSEL 70K', 70125, 'normal'),
(54, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S80', 'TELKOMSEL 80K', 80125, 'normal'),
(55, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S90', 'TELKOMSEL 90K', 89500, 'normal'),
(56, 'TELKOMSEL', 'REGULER', 'TELKOMSEL', 'S', 'S75', 'TELKOMSEL 75K', 74125, 'normal'),
(57, 'TELKOMSEL', 'REGULER', 'TELKOMSEL ', 'SB', 'SB10', 'BY.U 10000', 10295, 'normal'),
(58, 'TELKOMSEL', 'REGULER', 'TELKOMSEL ', 'SB', 'SB20', 'BY.U 20000', 20125, 'normal'),
(59, 'TELKOMSEL', 'REGULER', 'TELKOMSEL ', 'SB', 'SB25', 'BY.U 25000', 24995, 'normal'),
(60, 'TELKOMSEL', 'REGULER', 'TELKOMSEL ', 'SB', 'SB50', 'BY.U 50000', 49725, 'normal'),
(61, 'TELKOMSEL', 'REGULER', 'TELKOMSEL ', 'SB', 'SB100', 'BY.U 100000', 99025, 'normal'),
(62, 'TELKOMSEL', 'REGULER', 'TELKOMSEL ', 'SB', 'SB1', 'BY.U 1000', 1295, 'normal'),
(63, 'TELKOMSEL', 'REGULER', 'TELKOMSEL ', 'SB', 'SB5', 'BY.U 5000', 5295, 'normal'),
(64, 'TELKOMSEL', 'REGULER', 'TELKOMSEL ', 'SB', 'SB15', 'BY.U 15000', 15075, 'normal'),
(65, 'TELKOMSEL', 'REGULER', 'TELKOMSEL ', 'SB', 'SB30', 'BY.U 30000', 29975, 'normal'),
(66, 'TELKOMSEL', 'REGULER', 'TELKOMSEL ', 'SB', 'SB40', 'BY.U 40000', 39995, 'normal'),
(67, 'TELKOMSEL', 'REGULER', 'TELKOMSEL ', 'SB', 'SB60', 'BY.U 60000', 59975, 'normal'),
(68, 'TELKOMSEL', 'REGULER', 'TELKOMSEL ', 'SB', 'SB70', 'BY.U 70000', 69975, 'normal'),
(69, 'TELKOMSEL', 'REGULER', 'TELKOMSEL ', 'SB', 'SB80', 'BY.U 80000', 79675, 'normal'),
(70, 'TELKOMSEL', 'REGULER', 'TELKOMSEL ', 'SB', 'SB90', 'BY.U 90000', 89575, 'normal'),
(71, 'TRI', 'REGULER', 'TRI', 'T', 'T1', 'TRI 1K', 1311, 'normal'),
(72, 'TRI', 'REGULER', 'TRI', 'T', 'T2', 'TRI 2K', 2278, 'normal'),
(73, 'TRI', 'REGULER', 'TRI', 'T', 'T3', 'TRI 3K', 3270, 'normal'),
(74, 'TRI', 'REGULER', 'TRI', 'T', 'T4', 'TRI 4K', 4457, 'normal'),
(75, 'TRI', 'REGULER', 'TRI', 'T', 'T5', 'TRI 5K', 5400, 'normal'),
(76, 'TRI', 'REGULER', 'TRI', 'T', 'T6', 'TRI 6K', 6563, 'normal'),
(77, 'TRI', 'REGULER', 'TRI', 'T', 'T7', 'TRI 7K', 7546, 'normal'),
(78, 'TRI', 'REGULER', 'TRI', 'T', 'T8', 'TRI 8K', 8528, 'normal'),
(79, 'TRI', 'REGULER', 'TRI', 'T', 'T9', 'TRI 9K', 9511, 'normal'),
(80, 'TRI', 'REGULER', 'TRI', 'T', 'T10', 'TRI 10K', 10260, 'normal'),
(81, 'TRI', 'REGULER', 'TRI', 'T', 'T20', 'TRI 20K', 19674, 'normal'),
(82, 'TRI', 'REGULER', 'TRI', 'T', 'T30', 'TRI 30K', 29695, 'normal'),
(83, 'TRI', 'REGULER', 'TRI', 'T', 'T40', 'TRI 40K', 39625, 'normal'),
(84, 'TRI', 'REGULER', 'TRI', 'T', 'T50', 'TRI 50K', 48975, 'normal'),
(85, 'TRI', 'REGULER', 'TRI', 'T', 'T75', 'TRI 75K', 73250, 'normal'),
(86, 'TRI', 'REGULER', 'TRI', 'T', 'T100', 'TRI 100K', 98100, 'normal'),
(87, 'TRI', 'REGULER', 'TRI', 'T', 'T150', 'TRI 150K', 147550, 'normal'),
(88, 'TRI', 'REGULER', 'TRI', 'T', 'T25', 'TRI 25K', 24640, 'normal'),
(89, 'XL', 'REGULER', 'XL', 'X', 'X5', 'XL 5K', 5895, 'normal'),
(90, 'XL', 'REGULER', 'XL', 'X', 'X10', 'XL 10K', 10799, 'normal'),
(91, 'XL', 'REGULER', 'XL', 'X', 'X25', 'XL 25K', 24835, 'normal'),
(92, 'XL', 'REGULER', 'XL', 'X', 'X50', 'XL 50K', 49575, 'normal'),
(93, 'XL', 'REGULER', 'XL', 'X', 'X100', 'XL 100K', 98595, 'normal'),
(94, 'XL', 'REGULER', 'XL', 'X', 'X15', 'XL 15K', 14989, 'normal'),
(95, 'XL', 'REGULER', 'XL', 'X', 'X30', 'XL 30K', 29885, 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `margin` int(7) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `portaluserid` varchar(10) NOT NULL,
  `portalkey` varchar(100) NOT NULL,
  `portalsecret` varchar(100) NOT NULL,
  `tripayapiKey` varchar(100) NOT NULL,
  `tripayprivateKey` varchar(100) NOT NULL,
  `tripaymerchantCode` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `nama_toko`, `title`, `margin`, `username`, `password`, `portaluserid`, `portalkey`, `portalsecret`, `tripayapiKey`, `tripayprivateKey`, `tripaymerchantCode`) VALUES
(1, 'Beli Pulsa', 'Jual Pulsa All Operator', 2050, 'admin', 'admin', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `reference` varchar(25) NOT NULL,
  `ref` varchar(10) NOT NULL,
  `nomer` varchar(15) NOT NULL,
  `kode_produk` varchar(3) NOT NULL,
  `harga` int(7) NOT NULL,
  `rek_va` varchar(20) NOT NULL,
  `status_pembayaran` enum('waiting','success','failed') NOT NULL DEFAULT 'waiting',
  `waktu_pembelian` int(17) NOT NULL,
  `status_trx` enum('sukses','gagal','pending','refund') NOT NULL DEFAULT 'pending',
  `keterangan` varchar(50) DEFAULT NULL,
  `trxid` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
