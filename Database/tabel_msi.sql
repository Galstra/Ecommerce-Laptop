-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 03:49 PM
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
-- Table structure for table `tabel_msi`
--

CREATE TABLE `tabel_msi` (
  `id_barang` int(11) NOT NULL,
  `merk_barang` varchar(200) NOT NULL,
  `stok` int(200) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(200) NOT NULL,
  `gambar` text NOT NULL,
  `gambar_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_msi`
--

INSERT INTO `tabel_msi` (`id_barang`, `merk_barang`, `stok`, `keterangan`, `harga`, `gambar`, `gambar_2`) VALUES
(1, 'MSI GL63 8SE-087', 10, 'Display: 15.6″ FHD (1920*1080), wideview 94%NTSC color Anti-glare, 100% sRGB\r\nCPU: Intel® Coffeelake Core™ i7-8750H (9M Cache, up to 4.10 GHz) 6 core , 12 threads\r\nChipset: HM370\r\nGraphic Card: nVidia GeForce® RTX 2060, 6GB GDDR6\r\nMemory RAM: DDR4 8GB 2666 (2 Slots, Max 32GB)\r\nHDD Capacity: 1TB (SATA) 2.5″ 7200RPM + SSD 256GB NVMe\r\nOperating System: Windows 10 Home\r\nODD: N/A\r\nNetworking: Gigabit LAN, Intel Wireless-AC 9560 (2*2 a/c) + BT5\r\nAudio: 2x 3W Speaker\r\nBattery: 6-Cell , 51 Whr\r\nAdapter: 180W adapter\r\nKeyboard Backlight: Backlight Keyboard (Single-Color, Red)\r\nI/O Ports: 1x Type-C USB3.1 Gen2, 2x Type-A USB3.1 Gen1, 1x Type-A USB3.1 Gen2, 1x RJ45, 1x SD (XC/HC), 1x (4K @ 60Hz) HDMI, 1x Mini-DisplayPort\r\nWeight: 2.3 KG (With Battery)\r\nMouse: Gaming Mouse by Pemmz\r\nBag: Air Gaming Backpack By MSI\r\nDimension (WxDxH): 383x260x29.5 mm\r\nWarranty: 2 Years\r\n', 'Rp 22.999.000', 'GL63 8SE - 087 1.png', 'GL63 8SE - 087 2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_msi`
--
ALTER TABLE `tabel_msi`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_msi`
--
ALTER TABLE `tabel_msi`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
