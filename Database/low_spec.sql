-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 03:27 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
-- Table structure for table `low_spec`
--

CREATE TABLE `low_spec` (
  `id_barang` int(11) NOT NULL,
  `merk_barang` varchar(200) NOT NULL,
  `stok` int(200) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(200) NOT NULL,
  `gambar` text NOT NULL,
  `gambar 2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `low_spec`
--

INSERT INTO `low_spec` (`id_barang`, `merk_barang`, `stok`, `keterangan`, `harga`, `gambar`, `gambar 2`) VALUES
(1, 'Lenovo V330-BUID', 10, 'Processor: Up to 8th Generation Intel® Core™ i7-8550U Processor (1.80GHz, up to 4.0GHz with Turbo Boost, 6MB Cache)\r\nOperating System: Windows 10 Home\r\nDisplay: 15.6” FHD (1920 x 1080) Anti-Glare\r\nGraphics: Integrated Intel® UHD Graphics 620\r\nCamera: 720p HD camera with physical shutter\r\nMemory: Up to 12GB DDR4 2400MHz\r\nStorage: 1TB 5400RPM\r\nBattery: 2 cell 39Wh; up to 8 hours \r\nAudio: Stereo speakers with Dolby Audio™, Integrated single digital microphone, Integrated Skype-certified dual-array digital microphone\r\nSecurity: Trusted Platform Module (TPM) 1.2, Touch Fingerprint Reader, Kensington Minisaver™ lock slot, Physical camera shutter, Active Protection System (APS)\r\nPorts: 1 x USB 3.0 Gen1** Type-C, 2 x USB 3.0** (One always-on), VGA, HDMI, 4-in-1 card reader (SD, SDHC, SDXC, MMC), RJ-45 Gigabit Ethernet, Audio combo jack\r\nConnectivity: 802.11 AC (2 x 2) + Bluetooth® 4.1\r\nHinges: 180 degrees\r\nDimensions (W x D x H): 4.6\" x 10\" x 0.88\" / 375 x 253 x 22.3 (mm)\r\nWeight: Starting at 3.97 lbs (1.8 kg)\r\nColor: Iron Grey\r\nPreloaded Software: Lenovo App Explorer, Lenovo ID, Microsoft Office 2016 Trial (not available in Japan)\r\n', 'Rp 7.625.000', 'V330-BUID(Grey) 1.jpg', 'V330-BUID(Grey) 2.jpg'),
(2, 'HP 14s-CF2005TX', 10, 'Operating system: Windows 10 Home Single Language 64\r\nProsesor: Intel® Core™ i5-10210U (1.6 GHz base frequency, up to 4.2 GHz base with Intel® Turbo Boost Technology, 6 MB cache, 4 cores)\r\nProcessor family: 10th Generation Intel® Core™ i5 processor\r\nChipset: Intel® Integrated SoC\r\nForm factor: Standard laptop\r\nMemory: 4 GB DDR4-2666 SDRAM (1 x 4 GB)\r\nMemory Note: Transfer rates up to 2666 MT/s.\r\nInternal storage: 1 TB 5400 rpm SATA\r\nStorage type: HDD\r\nDisplay: 14\" diagonal HD SVA BrightView micro-edge WLED-backlit (1366 x 768)\r\nGraphics: AMD Radeon™ 530 Graphics (2 GB GDDR5 dedicated)\r\nPorts: 1 HDMI 1.4; 1 headphone/microphone combo; 1 RJ-45; 1 AC smart pin; 2 USB 3.1 Gen 1 Type-A (Data Transfer Only); 1 USB 3.1 Gen 1 Type-C™ (Data Transfer Only, 5 Gb/s signaling rate)\r\nExpansion slots: 1 multi-format SD media card reader\r\nAudio features: Dual speakers\r\nWebcam: HP TrueVision HD Camera with integrated digital microphone\r\nPointing device: Touchpad with multi-touch gesture support; Precision Touchpad Support\r\nKeyboard: Full-size island-style ash silver backlit keyboard\r\nNetwork interface: Integrated 10/100/1000 GbE LAN\r\nWireless: Realtek 802.11 a/b/g/n/ac (1x1) Wi-Fi® and Bluetooth® 4.2 Combo\r\nWireless note: Miracast compatible\r\nPower supply type: 65 W AC power adapter\r\nBattery type: 3-cell, 41 Wh Li-ion\r\nBattery weight: 210 g\r\nEnergy Efficiency Compliance: ENERGY STAR® certified; EPEAT® Silver registered\r\nDimensions without stand (W x D x H): 32.4 x 22.59 x 1.99 cm\r\nDimension note (metric): Dimensions vary by configuration\r\nBerat: Starting at 1.43 kg\r\nWeight note (metric): Weight varies by configuration\r\nProduct color: Gold\r\nSecurity management: Kensington Mini Security slot™\r\nHP apps: HP Audio Switch; HP Documentation; HP ePrint; HP e-Service; HP JumpStart; HP Recovery Manager; HP Support Assistant; HP Connection Optimizer\r\nSoftware included: McAfee LiveSafe™\r\nPre-installed software: Netflix (30-day free trial offer)\r\nSoftware - Productivity & finance: 1 month trial for new Microsoft Office 365 customers\r\nJaminan: 1 year limited parts and labour\r\n', 'Rp 8.249.000', '14s-CF2005TX(Gold).jpg', '14s-CF2005TX(Gold) 2.jpg'),
(3, 'Lenovo IP330-4TID', 10, 'Processor: Up to 8th Gen Intel® Quad Core i7-8550U\r\nOperating System: Windows 10 Home\r\nGraphics: Up to NVIDIA® GeForce® GTX1050/Up to AMD Radeon™ 540/Intel Integrated Graphics\r\nDisplay: 15.6” FHD (1920 x 1080) IPS/15.6” HD (1366 x 768)\r\nMemory: 4 GB onboard DDR4 + 8 GB DIMM/4 GB onboard DDR4 + 4 GB DIMM/4 GB onboard DDR4 + 2 GB DIMM/16 GB DIMM/4 GB onboard DDR4/16 GB Intel® Optane™ (optional)\r\nStorage: 128 GB PCIe SSD/256 GB PCIe SSD/500 GB SATA HDD/1 TB SATA HDD/2 TB SATA HDD/128 GB PCIe SSD + 1 TB SATA HDD/256 GB PCIe SSD + 1 TB SATA HDD\r\nAudio: 2 x 2 W speakers with Dolby Audio™\r\nBattery: Up to 6 hours*; Rapid Charge (Charge 15 minutes for up to 2 hours use**)\r\nKeyboard: Standard keyboard, Backlit numeric keyboard (optional)\r\nDimensions (W x D x H): 378 mm x 260 mm x 22.9 mm / 14.1\" x 10.2\" x 0.9\"\r\nWeight: Starting at 2.2 kg / 4.85 lbs\r\nColors: Platinum Grey, Onyx Black, Midnight Blue\r\nWiFi/Bluetooth®: 1 x 1 AC WiFi + Bluetooth 4.1\r\nPorts: USB Type-C 3.1, 2 x USB 3.0 (one charging), HDMI, 4-in-1 card reader (SD, SDHC, SDXC, MMC), Audio jack\r\n', 'Rp 9.800.000', 'IP330-4TID(Blue) 1.jpg', 'IP330-4TID(Blue) 2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `low_spec`
--
ALTER TABLE `low_spec`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `low_spec`
--
ALTER TABLE `low_spec`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
