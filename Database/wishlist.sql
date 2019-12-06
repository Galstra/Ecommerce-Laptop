-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 02:23 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_barang` int(11) NOT NULL,
  `merk_barang` varchar(120) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `gambar_2` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id_barang`, `merk_barang`, `harga`, `gambar`, `nama_user`, `gambar_2`, `keterangan`) VALUES
(19, 'HP OMEN 15-DH0105TX', 23999000, 'OMEN 15-DH0105TX Black 1.png', 'admin', 'OMEN 15-DH0105TX Black 2.png', 'Operating system: Windows 10 Home Single Language 64|\r\nProsesor: Intel® Core™ i7 8565U (1.8 GHz base frequency, up to 4.6 GHz with Intel® Turbo Boost Technology, 8 MB cache, 4 cores)|\r\nProcessor family: 8th Generation Intel® Core™ i7 processor|\r\nChipset: Intel® Integrated SoC|\r\nForm factor: Standard laptop|\r\nMemory: 16 GB DDR4-2400 SDRAM (onboard)|\r\nMemory Note: Transfer rates up to 2400 MT/s.|\r\nInternal storage: 512 GB PCIe® NVMe™ M.2 SSD|\r\nStorage type: SSD|\r\nCloud service: Dropbox|\r\nDisplay: 13.3\" diagonal FHD IPS BrightView micro-edge WLED-backlit touch screen (1920 x 1080)|\r\nGraphics: NVIDIA® GeForce® MX250 (2 GB GDDR5 dedicated)|\r\nPorts: 1 USB 3.1 Gen 1 Type-C™ (5 Gb/s signaling rate, Power Delivery 3.0, DisplayPort™ 1.2, HP Sleep and Charge); 1 USB 3.1 Gen 1 Type-A (HP Sleep and Charge); 1 USB 3.1 Gen 1 Type-A (Data Transfer Only); 1 AC smart pin; 1 headphone/microphone combo|\r\nExpansion slots: 1 microSD media card reader|\r\nAudio features: B&O, quad speakers, HP Audio Boost, HP Far-field Cortana support|\r\nWebcam: HP Wide Vision HD Camera with integrated dual array digital microphone|\r\nPointing device: HP Imagepad with multi-touch gesture support; Precision Touchpad Support\r\nKeyboard: Full-size island-style pale gold backlit keyboard|\r\nWireless: Intel® Wireless-AC 9560 802.11a/b/g/n/ac (2x2) Wi-Fi® and Bluetooth® 5 Combo|\r\nWireless note: MU-MIMO supported; Miracast compatible|\r\nPower supply type: 65 W AC power adapter|\r\nBattery type: 4-cell, 53 Wh Li-ion polymer|\r\nBattery weight: 210 g|\r\nEnergy Efficiency Compliance: ENERGY STAR® certified; EPEAT® Silver registered|\r\nDimensions without stand (W x D x H): 30.7 x 21.15 x 1.47 cm|\r\nDimension note (metric): Dimensions vary by configuration\r\nPackage dimensions (W x D x H): 52 x 30.5 x 6.9 cm|\r\nBerat: Starting at 1.17 kg|\r\nProduct color: Gold & Silver|\r\nSecurity management: Privacy camera kill switch|\r\nHP apps: HP Audio Switch; HP Documentation; HP e-Service; HP JumpStart; HP Support Assistant; HP Connection Optimizer; HP Command Center; HP PC Hardware Diagnostics Windows|\r\nSoftware included: McAfee LiveSafe™|\r\nPre-installed software: iQiyi|\r\nJaminan: 1 year limited parts and labour|');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
