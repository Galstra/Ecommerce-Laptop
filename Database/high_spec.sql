-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 03:47 PM
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
-- Table structure for table `high_spec`
--

CREATE TABLE `high_spec` (
  `id_barang` int(11) NOT NULL,
  `merk_barang` varchar(200) NOT NULL,
  `stok` int(200) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(200) NOT NULL,
  `gambar` text NOT NULL,
  `gambar_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `high_spec`
--

INSERT INTO `high_spec` (`id_barang`, `merk_barang`, `stok`, `keterangan`, `harga`, `gambar`, `gambar_2`) VALUES
(1, 'MSI GL63 8SE-087', 10, 'Display: 15.6\" FHD (1920*1080), wideview 94%NTSC color Anti-glare, 100% sRGB\r\nCPU: Intel® Coffeelake Core™ i7-8750H (9M Cache, up to 4.10 GHz) 6 core , 12 threads\r\nChipset: HM370\r\nGraphic Card: nVidia GeForce® RTX 2060, 6GB GDDR6\r\nMemory RAM: DDR4 8GB 2666 (2 Slots, Max 32GB)\r\nHDD Capacity: 1TB (SATA) 2.5? 7200RPM + SSD 256GB NVMe\r\nOperating System: Windows 10 Home\r\nODD: N/A\r\nNetworking: Gigabit LAN, Intel Wireless-AC 9560 (2*2 a/c) + BT5\r\nAudio: 2x 3W Speaker\r\nBattery: 6-Cell , 51 Whr\r\nAdapter: 180W adapter\r\nKeyboard Backlight: Backlight Keyboard (Single-Color, Red)\r\nI/O Ports: 1x Type-C USB3.1 Gen2, 2x Type-A USB3.1 Gen1, 1x Type-A USB3.1 Gen2, 1x RJ45, 1x SD (XC/HC), 1x (4K @ 60Hz) HDMI, 1x Mini-DisplayPort\r\nWeight: 2.3 KG (With Battery)\r\nMouse: Gaming Mouse by Pemmz\r\nBag: Air Gaming Backpack By MSI\r\nDimension (WxDxH): 383x260x29.5 mm\r\nWarranty: 2 Years\r\n', 'Rp 22.999.000', 'GL63 8SE - 087 1.png', 'GL63 8SE - 087 2.png'),
(2, 'HP OMEN 15-DH0105TX', 10, 'Operating system: Windows 10 Home Single Language 64\r\nProsesor: Intel® Core™ i7 8565U (1.8 GHz base frequency, up to 4.6 GHz with Intel® Turbo Boost Technology, 8 MB cache, 4 cores)\r\nProcessor family: 8th Generation Intel® Core™ i7 processor\r\nChipset: Intel® Integrated SoC\r\nForm factor: Standard laptop\r\nMemory: 16 GB DDR4-2400 SDRAM (onboard)\r\nMemory Note: Transfer rates up to 2400 MT/s.\r\nInternal storage: 512 GB PCIe® NVMe™ M.2 SSD\r\nStorage type: SSD\r\nCloud service: Dropbox\r\nDisplay: 13.3\" diagonal FHD IPS BrightView micro-edge WLED-backlit touch screen (1920 x 1080)\r\nGraphics: NVIDIA® GeForce® MX250 (2 GB GDDR5 dedicated)\r\nPorts: 1 USB 3.1 Gen 1 Type-C™ (5 Gb/s signaling rate, Power Delivery 3.0, DisplayPort™ 1.2, HP Sleep and Charge); 1 USB 3.1 Gen 1 Type-A (HP Sleep and Charge); 1 USB 3.1 Gen 1 Type-A (Data Transfer Only); 1 AC smart pin; 1 headphone/microphone combo\r\nExpansion slots: 1 microSD media card reader\r\nAudio features: B&O, quad speakers, HP Audio Boost, HP Far-field Cortana support\r\nWebcam: HP Wide Vision HD Camera with integrated dual array digital microphone\r\nPointing device: HP Imagepad with multi-touch gesture support; Precision Touchpad Support\r\nKeyboard: Full-size island-style pale gold backlit keyboard\r\nWireless: Intel® Wireless-AC 9560 802.11a/b/g/n/ac (2x2) Wi-Fi® and Bluetooth® 5 Combo\r\nWireless note: MU-MIMO supported; Miracast compatible\r\nPower supply type: 65 W AC power adapter\r\nBattery type: 4-cell, 53 Wh Li-ion polymer\r\nBattery weight: 210 g\r\nEnergy Efficiency Compliance: ENERGY STAR® certified; EPEAT® Silver registered\r\nDimensions without stand (W x D x H): 30.7 x 21.15 x 1.47 cm\r\nDimension note (metric): Dimensions vary by configuration\r\nPackage dimensions (W x D x H): 52 x 30.5 x 6.9 cm\r\nBerat: Starting at 1.17 kg\r\nProduct color: Gold & Silver\r\nSecurity management: Privacy camera kill switch\r\nHP apps: HP Audio Switch; HP Documentation; HP e-Service; HP JumpStart; HP Support Assistant; HP Connection Optimizer; HP Command Center; HP PC Hardware Diagnostics Windows\r\nSoftware included: McAfee LiveSafe™\r\nPre-installed software: iQiyi\r\nJaminan: 1 year limited parts and labour', 'Rp 23.999.000', 'OMEN 15-DH0105TX Black 1.png', 'OMEN 15-DH0105TX Black 2.png'),
(3, 'HP 13-AP0056TU', 10, 'Operating system: Windows 10 Home Single Language 64\r\nProsesor: Intel® Core™ i7 8565U (1.8 GHz base frequency(2b), up to 4.6 GHz with Intel® Turbo Boost Technology(2g), 8 MB cache, 4 cores)\r\nProcessor family: 8th Generation Intel® Core™ i7 processor\r\nForm factor: Convertible\r\nMemory: 16 GB DDR4-2400 SDRAM (onboard)\r\nMemory Note: Transfer rates up to 2400 MT/s.\r\nInternal storage: 512 GB PCIe® NVMe™ M.2 SSD\r\nStorage type: SSD\r\nCloud service: Dropbox\r\nDisplay: HP Sure View Integrated Privacy Screen 13.3\" diagonal FHD IPS anti-glare micro-edge WLED-backlit touch screen (1920 x 1080)\r\nGraphics: Intel® UHD Graphics 620\r\nPorts: 2x USB Type-C™ 3.1 Gen 2 (Thunderbolt™ 3, DP 1.2, PD 3.0, Data transfer, HP Sleep and Charge ); 1x USB 3.1 Gen2 Type-A™ (HP Sleep and Charge); 1 headphone/microphone combo\r\nExpansion slots: 1 microSD media card reader\r\nAudio features: Bang & Olufsen; quad speakers; HP Audio Boost 2.0\r\nWebcam: HP Wide Vision FHD IR Camera with integrated dual array digital microphone\r\nSensors: Accelerometer; Gyroscope; eCompass\r\nPointing device: HP SecurePad with multi-touch gesture support\r\nKeyboard: Full-size island-style backlit keyboard\r\nWireless: Intel® Wireless-AC 9560 802.11a/b/g/n/ac (2x2) Wi-Fi® and Bluetooth® 5 Combo\r\nWireless note: MU-MIMO supported; Miracast compatible\r\nPower supply type: 65 W USB Type-C™ adapter\r\nBattery type: 4-cell, 61 Wh Li-ion\r\nBattery weight: 250 g\r\nEnergy Efficiency Compliance: ENERGY STAR® certified; EPEAT® Silver registered\r\nDimensions without stand (W x D x H): 30.88 x 21.79 x 1.45 cm\r\nBerat: Starting at 1.32 kg\r\nProduct color: Black-Gold & Blue\r\nSecurity management: Trusted Platform Module (TPM) support; Privacy Camera Kill Switch\r\nHP apps: HP Audio Switch; HP Documentation; HP ePrint; HP e-Service; HP JumpStart; HP Support Assistant; HP Connection Optimizer; HP Command Center; HP PC Hardware Diagnostics Windows\r\nSoftware included: McAfee LiveSafe™\r\nPre-installed software: iQiyi\r\nJaminan: 2 year limited parts and labour\r\n', 'Rp 25.499.000', '13-AP0056TU(Black Gold) 1.png', '13-AP0056TU(Black Gold) 2.png'),
(4, 'ASUS ROG Strix SCAR III', 10, 'Operating system: Windows 10/Windows 10 Pro\r\nProcessor: Intel® Core™ i7-9750H\r\nGraphics: NVIDIA® GeForce RTX™ 2060 with 6GB GDDR6 VRAM\r\nMemory: DDR4 2666MHz SDRAM\r\nUp to 32GB\r\nStorage: M.2 NVMe PCIE 3.0 512GB/1TB SSD\r\nDisplay: 15.6-inch Full HD (1920x1080) IPS-level panel, 144Hz, 3ms, 100% sRGB\r\nVR Ready: YES\r\nKeyboard: Backlit chiclet keyboard, N-key rollover, Per Key RGB, Aura Sync, Hotkeys (Volume down, volume up, mute, HyperFan, Armoury Crate)\r\nAudio: 4W*2 speakers with Smart AMP technology, Array Microphone\r\nSoftware: Armoury Crate, GameFirst V, Sonic Studio, GameVisual, Aura Creator (Coming soon) \r\nI/O Ports: 1 x Type C USB 3.2 (GEN2) support DP function, 3 x Type A USB 3.2 (GEN1), 1 x HDMI 2.0b, 1 x 3.5mm Audio Jack / 1 x Audio Jack Mic-in, 1 x RJ45 LAN Jack, 1 x Keystone\r\nPower: 230W/280W (i9 only) Power Adaptor\r\nWi-Fi / Bluetooth: Intel® 802.11ac (2x2) Gigabit Wi-Fi support Rangeboost technology, Bluetooth 5.0\r\n*Bluetooth version may vary as the OS upgrades\r\nDimensions: 360 (W) x 275 (D) x 24.9 (H) mm\r\nWeight: 2.57 kg\r\n', 'Rp 31.999.000', 'ROG Strix SCAR III 1.jpg', 'ROG Strix SCAR III 3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `high_spec`
--
ALTER TABLE `high_spec`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `high_spec`
--
ALTER TABLE `high_spec`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
