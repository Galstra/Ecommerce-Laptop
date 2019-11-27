-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 03:28 PM
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
-- Table structure for table `med_spec`
--

CREATE TABLE `med_spec` (
  `id_barang` int(11) NOT NULL,
  `merk_barang` varchar(200) NOT NULL,
  `stok` int(200) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(200) NOT NULL,
  `gambar` text NOT NULL,
  `gambar 2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `med_spec`
--

INSERT INTO `med_spec` (`id_barang`, `merk_barang`, `stok`, `keterangan`, `harga`, `gambar`, `gambar 2`) VALUES
(1, 'Lenovo S340-96ID', 10, 'Processor: Up to 10th Generation Intel® Core™ i5-1035G1 Processor (1.0GHz, up to 3.60GHz with Turbo Boost, 6MB Cache)/Up to 8th Generation Intel® Core™ i5-8265U Processor (1.60GHz, up to 3.90GHz with Turbo Boost, 6MB Cache)\r\nOperating System: Windows 10 Home\r\nDisplay: 15.6\" HD (1366 x 768) antiglare, touchscreen/15.6\" FHD (1920 x 1080) Anti-Glare/15.6\" FHD (1920 x 1080) IPS, Anti-Glare, Multi-touch\r\nMemory: Up to 8GB DDR4 2400MHz (1 Onboard, 1 DIMM)/8GB DDR4 2666MHz (1 Onboard, 1 DIMM)\r\nBattery: 10th Gen processors - Up to 10 hours* with rapid charging technology/8th Gen processors - Up to 8 hours*\r\nStorage: Up to 256GB PCIe SSD\r\nGraphics: Up to Integrated Intel® UHD 620 Graphics\r\nAudio: Dolby Audio™ Premium, 2 x 2W speakers\r\nDimensions (W x D x H): 14.1\" x 9.6\" x .7\" / 358 x 245 x 17.9 (mm)\r\nWeight: Starting at 3.96 lbs (1.79 kg)\r\nColors: Platinum Grey, Abyss Blue\r\nConnectivity: 802.11 AC (1 x 1), Bluetooth® 4.2\r\nPorts/Slots: 2 x USB 3.1 (Gen 1)** (1 supports charging), 1 x UBS 3.1 (Gen 1) Type-C, HDMI, 4-in-1 SD card reader, Headphone / mic combo, Power connector\r\nKeyboard: Backlit Keyboard (select models)\r\nWebcam: 720p HD with Privacy shutter\r\nPreloaded Software: McAfee LiveSafe (trial), Lenovo Vantage, Microsoft Office 365 (trial), Lenovo App Explorer, LinkedIn, Lenovo Utility\r\nWhat\'s in the box: IdeaPad S340 15\", 65W AC Adapter, Quick start guide, 3 Cell 52.5Wh Battery\r\n', 'Rp 10.199.000', 'S340-96ID(Grey) 1.jpg', 'S340-96ID(Grey) 2.jpg'),
(2, 'Lenovo L340-HPID', 10, 'Processor: 9th Generation Intel® Core™ i5-9300H (2.40GHZ, up to 4.10GHz with Turbo Boost, 4 Cores, 8MB Cache)/9th Generation Intel® Core™ i7-9750H (2.60GHZ, up to 4.50GHz with Turbo Boost, 6 Cores, 12MB Cache)\r\nOperating System: Windows 10 Home/Windows 10 Pro\r\nGraphics: NVIDIA® GeForce® GTX 1650 4GB/NVIDIA® GeForce® GTX 1050 3GB\r\nMemory: Up to 16GB DDR4 2400MHz \r\nBattery: Up to 9 hours\r\nStorage: Up to 1TB SSD PCIe/Up to 2TB HDD 5400RPM, Dual Drive Configurations available. (HDD + SSD)\r\nDisplay: 17.3\" FHD (1920 x 1080) IPS, anti-glare 72% color gamut, 300 nits\r\nSecurity: TrueBlock Privacy Shutter, SW TPM , Kensington® lock slot \r\nAudio: 2x 1.5W speakers with Dolby Audio®\r\nCamera: 720p HD camera with dual microphones\r\nDimensions (W x D x H): 16.26\" x 11.2\" x 0.99\" / 413 x 284.7 x 25.3 (mm)\r\nWeight: Starting at 6.13 lbs (2.78 kg)\r\nColor: Granite Black\r\nConnectivity: Up to 802.11 AC (2 x 2), Bluetooth® 4.2\r\nPorts / Slots: 2 x USB 3.1** (Gen. 1), 1 x HDMI 2.0, 1 x RJ45, 1 x Novo hole, 1 x Combo of 3.5mm Stereo Headphone, 1 x Type C (USB 3.0)\r\nPreloaded Software: Lenovo App Explorer, Lenovo Vantage, Lenovo Utility, LinkedIn  , McAfee LiveSafe™ 30-day trial, Microsoft Office 365 30-day trial\r\nWhat\'s in the box: IdeaPad L340 (17”) Gaming, 135W AC adapter, 3 cell 45Wh battery, Quick start guide\r\n', 'Rp 10.999.000', 'L340-HPID(Black) 1.jpg', 'L340-HPID(Black) 2.jpg'),
(3, 'Lenovo C340-HKI', 10, 'Processor: Intel® Celeron® N4000 (1.10GHz, up to 2.60GHz Burst Frequency, 4MB Cache)\r\nOperating System: Chrome OS\r\nDisplay: 14” FHD (1920 x 1080) IPS, 250 nits, multi-touch, anti-glare/14” HD (1366 x 768) 220 nits, anti-glare\r\nGraphics: Intel® UHD 600 Graphics\r\nCamera: 720p HD\r\nMemory: 4GB LPDDR4 2400 MHz\r\nStorage: Up to 64GB eMMC\r\nBattery: Up to 10 hours\r\nAudio: 2x2W stereo speaker\r\nDimensions (H x W x D): 12.9? x 9.2? x 0.74? / 328.9mm x 234.3mm x 18.8mm\r\nWeight: Starting at 3.02 lbs (1.37 kg)\r\nColor: Onyx Black\r\nConnectivity: Intel® 9560 802.11AC (2 x 2), Bluetooth® 4.2\r\nPorts: 2 x USB-C 3.1 Gen 1**, 2 x USB-A 3.1 Gen 1**, MicroSD card reader, Headphone / mic combo, Kensington Lock Slot\r\nWhat\'s in the box: Chromebook S340 14”: 3 Cell 42Wh internal battery: 45 AC adapter: Quick start guide\r\n', 'Rp 11.899.000', 'C340-HKID(Black) 1.jpg', 'C340-HLID(Gray) 1.jpg'),
(4, 'HP 14-CE2013TX', 10, 'Operating system: Windows 10 Home Single Language 64\r\nProsesor: Intel® Core™ i7-8565U (1.8 GHz base frequency, up to 4.6 GHz with Intel® Turbo Boost Technology, 8 MB cache, 4 cores)\r\nProcessor family: 8th Generation Intel® Core™ i7 processor\r\nChipset: Intel® Integrated SoC\r\nForm factor: Standard laptop\r\nMemory: 8 GB DDR4-2400 SDRAM (1 x 8 GB)\r\nMemory Note: Transfer rates up to 2400 MT/s.\r\nInternal storage: 1 TB 5400 rpm SATA\r\nHard drive (2nd): 256 GB PCIe® NVMe™ M.2 SSD\r\nStorage type: SSD; HDD\r\nCloud service: Dropbox\r\nDisplay: 14\" diagonal FHD IPS anti-glare micro-edge WLED-backlit (1920 x 1080)\r\nGraphics: NVIDIA® GeForce® MX250 (2 GB GDDR5 dedicated)\r\nPorts: 1 USB 3.1 Gen 1 Type-C™ (Data Transfer Only, 5 Gb/s signaling rate); 2 USB 3.1 Gen 1 Type-A (Data Transfer Only); 1 RJ-45; 1 AC smart pin; 1 HDMI; 1 headphone/microphone combo\r\nExpansion slots: 1 multi-format SD media card reader\r\nAudio features: B&O, dual speakers, HP Audio Boost\r\nWebcam: HP Wide Vision HD Camera with integrated dual array digital microphone\r\nSensors: Accelerometer\r\nPointing device: HP Imagepad with multi-touch gesture support\r\nKeyboard: Full-size island-style natural silver backlit keyboard\r\nNetwork interface: Integrated 10/100/1000 GbE LAN\r\nWireless: Intel® Wireless-AC 9560 802.11a/b/g/n/ac (2x2) Wi-Fi® and Bluetooth® 5 Combo\r\nWireless note: MU-MIMO supported; Miracast compatible\r\nPower supply type: 65 W AC power adapter\r\nBattery type: 3-cell, 41 Wh Li-ion\r\nBattery weight: 210 g\r\nEnergy Efficiency Compliance: ENERGY STAR® certified; EPEAT® Silver registered\r\nDimensions without stand (W x D x H): 32.68 x 22.55 x 1.79 cm\r\nDimension note (metric): Dimensions vary by configuration\r\nBerat: Starting at 1.6 kg\r\nPackage weight: 2.99 kg\r\nProduct color: White & Gold\r\nSecurity management: Kensington Nano Security Slot™; Fingerprint reader\r\nHP apps: HP Audio Switch; HP CoolSense; HP Documentation; HP ePrint; HP JumpStart; HP Support Assistant; HP Connection Optimizer; HP Privacy Settings; HP BIOS Recovery\r\nSoftware included: McAfee LiveSafe™\r\nJaminan: 1 year limited parts and labour\r\n', 'Rp 13.699.000', '14-CE2013TX(White).png', '14-CE2013TX(White) 2.png'),
(5, 'HP 14-DH1006TX', 10, 'Operating system: Windows 10 Home Single Language 64\r\nProsesor: Intel® Core™ i7-10510U (1.8 GHz base frequency, up to 4.9 GHz base with Intel® Turbo Boost Technology, 8 MB cache, 4 cores)\r\nProcessor family: 10th Generation Intel® Core™ i7 processor\r\nChipset: Intel® Integrated SoC\r\nForm factor: Convertible\r\nMemory: 8 GB DDR4-2666 SDRAM (1 x 8 GB)\r\nMemory Note: Transfer rates up to 2666 MT/s.\r\nInternal storage: 512 GB PCIe® NVMe™ M.2 SSD\r\nStorage type: SSD\r\nCloud service: Dropbox\r\nDisplay: 14\" diagonal FHD IPS anti-glare micro-edge WLED-backlit touch screen (1920 x 1080)\r\nGraphics: NVIDIA® GeForce® MX250 (2 GB GDDR5 dedicated)\r\nPorts: 1 USB 3.1 Gen 1 Type-C™ (Data Transfer Only, 5 Gb/s signaling rate); 2 USB 3.1 Gen 1 Type-A (Data Transfer Only); 1 AC smart pin; 1 HDMI 1.4; 1 headphone/microphone combo\r\nExpansion slots: 1 multi-format SD media card reader\r\nAudio features: B&O, dual speakers, HP Audio Boost\r\nWebcam: HP Wide Vision HD Camera with integrated dual array digital microphone\r\nSensors: Accelerometer; Gyroscope; eCompass\r\nPointing device: HP Imagepad with multi-touch gesture support; Precision Touchpad Support\r\nKeyboard: Full-size island-style luminous gold backlit keyboard\r\nWireless: 802.11ac (1x1) Wi-Fi® and Bluetooth® 4.2 combo\r\nWireless note: MU-MIMO supported; Miracast compatible\r\nPower supply type: 65 W Smart AC power adapter\r\nBattery type: 3-cell, 41 Wh Li-ion\r\nBattery weight: 210 g\r\nEnergy Efficiency Compliance: ENERGY STAR® certified; EPEAT® Silver registered\r\nDimensions without stand (W x D x H): 32.4 x 22.29 x 1.97 cm\r\nDimension note (metric): Dimensions vary by configuration\r\nBerat: Starting at 1.58 kg\r\nWeight note (metric): Weight varies by configuration\r\nProduct color: Warm Gold & Silver\r\nSecurity management: Kensington Nano Security Slot™; Fingerprint reader\r\nHP apps: HP 3D DriveGuard; HP Audio Switch; HP JumpStart; HP CoolSense; HP Documentation; HP Support Assistant; HP Connection Optimizer; HP Privacy Settings\r\nSoftware included: McAfee LiveSafe™\r\nPre-installed software: B&O Audio; Amazon Alexa on Windows\r\nJaminan: 1 year limited parts and labour\r\n', 'Rp 14.699.000', '14-DH1006TX(Gold) 1.png', '14-DH1006TX(Gold) 2.png'),
(6, 'Lenovo Yoga 520-QMID', 10, 'Processor: 7th Generation Intel® Core™ i5-7200U Processor (2.50GHz 3MB)\r\nOperating System: Windows 10 Home\r\nGraphics: Intel® HD Graphics 620\r\nWebcam / Microphone: 720 HD with array microphone\r\nMemory: 8 GB DDR4 2133 MHz\r\nStorage: 1 TB 5400 RPM\r\nAudio: Harman speakers with Dolby Audio\r\nBattery: Up to 6 hours with MobileMark 2014\r\nDisplay: 15.6\" FHD (1920 x 1080) IPS LED Anti-Glare \r\nDimensions (W x D x H): 14.89\" x 10.2\" x .90\" / 378 x 260 x 22.9 (mm)\r\nWeight: 4.8 lbs (2.17 kg)\r\nColors: Black\r\nWiFi/Bluetooth®: 802.11 AC (1 x 1) WiFi + Bluetooth® 4.1\r\nPorts: 2 USB 3.0, 1 USB-Type C, HDMI, 4-in-1 card reader, RJ-45 LAN\r\n', 'Rp 14.999.000', '520-QMID(Black) 1.jpg', '520-QMID(Black) 2.jpg'),
(7, 'HP 13-AR0009AU', 10, 'Operating system: Windows 10 Home Single Language 64\r\nProsesor: AMD Ryzen™ 7 3700U with Radeon™ Vega 10 Graphics (2.3 GHz base clock, up to 4 GHz max boost clock, 6 MB cache, 4 cores)\r\nProcessor family: AMD Ryzen™ 7 processor\r\nChipset: AMD Integrated SoC\r\nForm factor: Convertible\r\nSpecial features: Convertible\r\nMemory: 16 GB DDR4-2400 SDRAM (onboard)\r\nMemory Note: Transfer rates up to 2400 MT/s.\r\nInternal storage: 512 GB PCIe® NVMe™ M.2 SSD\r\nStorage type: SSD\r\nOptical drive: Optical drive not included\r\nCloud service: Dropbox\r\nDisplay: 13.3\" diagonal FHD IPS micro-edge WLED-backlit touch screen with Corning® Gorilla® Glass NBT™ (1920 x 1080)\r\nGraphics: AMD Radeon™ RX Vega 10 Graphics\r\nPorts: 1 USB 3.1 Gen 1 Type-C™ (5 Gb/s signaling rate, Power Delivery 3.0, DisplayPort™ 1.4, HP Sleep and Charge); 1 USB 3.1 Gen 1 Type-A (HP Sleep and Charge); 1 USB 3.1 Gen 1 Type-A (Data Transfer Only); 1 headphone/microphone combo\r\nExpansion slots: 1 multi-format SD media card reader\r\nAudio features: Bang & Olufsen, quad speakers, HP Audio Boost\r\nWebcam: HP Wide Vision HD Camera with integrated dual array digital microphone\r\nSensors: Accelerometer; Gyroscope; Magentometer\r\nPointing device: HP Imagepad with multi-touch gesture support; Precision Touchpad Support\r\nKeyboard: Full-size island-style nightfall black backlit keyboard\r\nWireless: 802.11ac (2x2) Wi-Fi® and Bluetooth® 4.2 combo\r\nWireless note: Miracast compatible\r\nPower supply type: 65 W AC power adapter\r\nBattery type: 4-cell, 53 Wh Li-ion polymer\r\nBattery weight: 210 g\r\nEnergy Efficiency Compliance: ENERGY STAR® certified; EPEAT® Silver registered\r\nDimensions without stand (W x D x H): 30.6 x 21.2 x 1.47 cm\r\nDimension note (metric): Dimensions vary by configuration\r\nBerat: Starting at 1.31 kg\r\nProduct color: Nightfall black\r\nSecurity management: Privacy camera kill switch\r\nHP apps: HP Audio Switch; HP Documentation; HP e-Service; HP JumpStart; HP Support Assistant; HP Connection Optimizer; HP Command Center; HP PC Hardware Diagnostics Windows\r\nSoftware included: McAfee LiveSafe™\r\nPre-installed software: iQiyi\r\nJaminan: 1 year limited parts and labour\r\n', 'Rp 17.499.000', '13-AR0009AU(Black) 1.png', '13-AR0009AU(Black) 2.png'),
(8, 'HP ENVY 13-AQ0018TX', 10, 'Operating system: Windows 10 Home Single Language 64\r\nProsesor: Intel® Core™ i7 8565U (1.8 GHz base frequency, up to 4.6 GHz with Intel® Turbo Boost Technology, 8 MB cache, 4 cores)\r\nProcessor family: 8th Generation Intel® Core™ i7 processor\r\nChipset: Intel® Integrated SoC\r\nForm factor: Standard laptop\r\nMemory: 16 GB DDR4-2400 SDRAM (onboard)\r\nMemory Note: Transfer rates up to 2400 MT/s.\r\nInternal storage: 512 GB PCIe® NVMe™ M.2 SSD\r\nStorage type: SSD\r\nCloud service: Dropbox\r\nDisplay: 13.3\" diagonal FHD IPS BrightView micro-edge WLED-backlit touch screen (1920 x 1080)\r\nGraphics: NVIDIA® GeForce® MX250 (2 GB GDDR5 dedicated)\r\nPorts: 1 USB 3.1 Gen 1 Type-C™ (5 Gb/s signaling rate, Power Delivery 3.0, DisplayPort™ 1.2, HP Sleep and Charge); 1 USB 3.1 Gen 1 Type-A (HP Sleep and Charge); 1 USB 3.1 Gen 1 Type-A (Data Transfer Only); 1 AC smart pin; 1 headphone/microphone combo\r\nExpansion slots: 1 microSD media card reader\r\nAudio features: B&O, quad speakers, HP Audio Boost, HP Far-field Cortana support\r\nWebcam: HP Wide Vision HD Camera with integrated dual array digital microphone\r\nPointing device: HP Imagepad with multi-touch gesture support; Precision Touchpad Support\r\nKeyboard: Full-size island-style pale gold backlit keyboard\r\nWireless: Intel® Wireless-AC 9560 802.11a/b/g/n/ac (2x2) Wi-Fi® and Bluetooth® 5 Combo\r\nWireless note: MU-MIMO supported; Miracast compatible\r\nPower supply type: 65 W AC power adapter\r\nBattery type: 4-cell, 53 Wh Li-ion polymer\r\nBattery weight: 210 g\r\nEnergy Efficiency Compliance: ENERGY STAR® certified; EPEAT® Silver registered\r\nDimensions without stand (W x D x H): 30.7 x 21.15 x 1.47 cm\r\nDimension note (metric): Dimensions vary by configuration\r\nPackage dimensions (W x D x H): 52 x 30.5 x 6.9 cm\r\nBerat: Starting at 1.17 kg\r\nProduct color: Gold & Silver\r\nSecurity management: Privacy camera kill switch\r\nHP apps: HP Audio Switch; HP Documentation; HP e-Service; HP JumpStart; HP Support Assistant; HP Connection Optimizer; HP Command Center; HP PC Hardware Diagnostics Windows\r\nSoftware included: McAfee LiveSafe™\r\nPre-installed software: iQiyi\r\nJaminan: 1 year limited parts and labour', 'Rp 19.999.000', '13-AQ0018TX(Gold) 1.png', '13-AQ0018TX(Gold) 2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `med_spec`
--
ALTER TABLE `med_spec`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `med_spec`
--
ALTER TABLE `med_spec`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
