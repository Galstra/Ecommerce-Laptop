-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2019 pada 13.19
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

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
-- Struktur dari tabel `tabel_amd`
--

CREATE TABLE `tabel_amd` (
  `id_barang` int(11) NOT NULL,
  `merk_barang` varchar(120) NOT NULL,
  `harga_barang` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `stok` int(10) NOT NULL,
  `gambar` text NOT NULL,
  `gambar 2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_amd`
--

INSERT INTO `tabel_amd` (`id_barang`, `merk_barang`, `harga_barang`, `keterangan`, `stok`, `gambar`, `gambar 2`) VALUES
(1, 'HP Envy AMD x360 13-AR0009AU(Black)', 'RP17.499.000', 'Operating system: Windows 10 Home Single Language 64\r\nProsesor: AMD Ryzen™ 7 3700U with Radeon™ Vega 10 Graphics (2.3 GHz base clock, up to 4 GHz max boost clock, 6 MB cache, 4 cores)\r\nProcessor family: AMD Ryzen™ 7 processor\r\nChipset: AMD Integrated SoC\r\nForm factor: Convertible\r\nSpecial features: Convertible\r\nMemory: 16 GB DDR4-2400 SDRAM (onboard)\r\nMemory Note: Transfer rates up to 2400 MT/s.\r\nInternal storage: 512 GB PCIe® NVMe™ M.2 SSD\r\nStorage type: SSD\r\nOptical drive: Optical drive not included\r\nCloud service: Dropbox\r\nDisplay: 13.3\" diagonal FHD IPS micro-edge WLED-backlit touch screen with Corning® Gorilla® Glass NBT™ (1920 x 1080)\r\nGraphics: AMD Radeon™ RX Vega 10 Graphics\r\nPorts: 1 USB 3.1 Gen 1 Type-C™ (5 Gb/s signaling rate, Power Delivery 3.0, DisplayPort™ 1.4, HP Sleep and Charge); 1 USB 3.1 Gen 1 Type-A (HP Sleep and Charge); 1 USB 3.1 Gen 1 Type-A (Data Transfer Only); 1 headphone/microphone combo\r\nExpansion slots: 1 multi-format SD media card reader\r\nAudio features: Bang & Olufsen, quad speakers, HP Audio Boost\r\nWebcam: HP Wide Vision HD Camera with integrated dual array digital microphone\r\nSensors: Accelerometer; Gyroscope; Magentometer\r\nPointing device: HP Imagepad with multi-touch gesture support; Precision Touchpad Support\r\nKeyboard: Full-size island-style nightfall black backlit keyboard\r\nWireless: 802.11ac (2x2) Wi-Fi® and Bluetooth® 4.2 combo\r\nWireless note: Miracast compatible\r\nPower supply type: 65 W AC power adapter\r\nBattery type: 4-cell, 53 Wh Li-ion polymer\r\nBattery weight: 210 g\r\nEnergy Efficiency Compliance: ENERGY STAR® certified; EPEAT® Silver registered\r\nDimensions without stand (W x D x H): 30.6 x 21.2 x 1.47 cm\r\nDimension note (metric): Dimensions vary by configuration\r\nBerat: Starting at 1.31 kg\r\nProduct color: Nightfall black\r\nSecurity management: Privacy camera kill switch\r\nHP apps: HP Audio Switch; HP Documentation; HP e-Service; HP JumpStart; HP Support Assistant; HP Connection Optimizer; HP Command Center; HP PC Hardware Diagnostics Windows\r\nSoftware included: McAfee LiveSafe™\r\nPre-installed software: iQiyi\r\nJaminan: 1 year limited parts and labour\r\n', 10, '13-AR0009AU(Black) 1.png', '13-AR0009AU(Black) 2.png'),
(2, 'Lenovo AMD IP330-4RID', 'RP9.800.000', 'Processor: Up to 8th Gen Intel® Quad Core i7-8550U\r\nOperating System: Windows 10 Home\r\nGraphics: Up to NVIDIA® GeForce® GTX1050/Up to AMD Radeon™ 540/Intel Integrated Graphics\r\nDisplay: 15.6” FHD (1920 x 1080) IPS/15.6” HD (1366 x 768)\r\nMemory: 4 GB onboard DDR4 + 8 GB DIMM/4 GB onboard DDR4 + 4 GB DIMM/4 GB onboard DDR4 + 2 GB DIMM/16 GB DIMM/4 GB onboard DDR4/16 GB Intel® Optane™ (optional)\r\nStorage: 128 GB PCIe SSD/256 GB PCIe SSD/500 GB SATA HDD/1 TB SATA HDD/2 TB SATA HDD/128 GB PCIe SSD + 1 TB SATA HDD/256 GB PCIe SSD + 1 TB SATA HDD\r\nAudio: 2 x 2 W speakers with Dolby Audio™\r\nBattery: Up to 6 hours*; Rapid Charge (Charge 15 minutes for up to 2 hours use**)\r\nKeyboard: Standard keyboard, Backlit numeric keyboard (optional)\r\nDimensions (W x D x H): 378 mm x 260 mm x 22.9 mm / 14.1\" x 10.2\" x 0.9\"\r\nWeight: Starting at 2.2 kg / 4.85 lbs\r\nColors: Platinum Grey, Onyx Black, Midnight Blue\r\nWiFi/Bluetooth®: 1 x 1 AC WiFi + Bluetooth 4.1\r\nPorts: USB Type-C 3.1, 2 x USB 3.0 (one charging), HDMI, 4-in-1 card reader (SD, SDHC, SDXC, MMC), Audio jack\r\n', 10, 'IP330-4TID(Blue) 1.jpg', 'IP330-4TID(Blue) 2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_amd`
--
ALTER TABLE `tabel_amd`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_amd`
--
ALTER TABLE `tabel_amd`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
