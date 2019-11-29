-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 04:00 PM
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
-- Table structure for table `tabel_asus`
--

CREATE TABLE `tabel_asus` (
  `id_barang` int(11) NOT NULL,
  `merk_barang` varchar(120) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `stok` int(10) NOT NULL,
  `gambar` text NOT NULL,
  `gambar_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_asus`
--

INSERT INTO `tabel_asus` (`id_barang`, `merk_barang`, `harga`, `keterangan`, `stok`, `gambar`, `gambar_2`) VALUES
(1, 'ASUS ROG STRIX SCAR III', 'Rp 31.999.000', 'Operating system: Windows 10/Windows 10 Pro\r\nProcessor: Intel® Core™ i7-9750H\r\nGraphics: NVIDIA® GeForce RTX™ 2060 with 6GB GDDR6 VRAM\r\nMemory: DDR4 2666MHz SDRAM\r\nUp to 32GB\r\nStorage: M.2 NVMe PCIE 3.0 512GB/1TB SSD\r\nDisplay: 15.6-inch Full HD (1920x1080) IPS-level panel, 144Hz, 3ms, 100% sRGB\r\nVR Ready: YES\r\nKeyboard: Backlit chiclet keyboard, N-key rollover, Per Key RGB, Aura Sync, Hotkeys (Volume down, volume up, mute, HyperFan, Armoury Crate)\r\nAudio: 4W*2 speakers with Smart AMP technology, Array Microphone\r\nSoftware: Armoury Crate, GameFirst V, Sonic Studio, GameVisual, Aura Creator (Coming soon) \r\nI/O Ports: 1 x Type C USB 3.2 (GEN2) support DP function, 3 x Type A USB 3.2 (GEN1), 1 x HDMI 2.0b, 1 x 3.5mm Audio Jack / 1 x Audio Jack Mic-in, 1 x RJ45 LAN Jack, 1 x Keystone\r\nPower: 230W/280W (i9 only) Power Adaptor\r\nWi-Fi / Bluetooth: Intel® 802.11ac (2x2) Gigabit Wi-Fi support Rangeboost technology, Bluetooth 5.0\r\n*Bluetooth version may vary as the OS upgrades\r\nDimensions: 360 (W) x 275 (D) x 24.9 (H) mm\r\nWeight: 2.57 kg\r\n', 10, 'ROG Strix SCAR III 1.jpg ', 'ROG Strix SCAR III 3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_asus`
--
ALTER TABLE `tabel_asus`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_asus`
--
ALTER TABLE `tabel_asus`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
