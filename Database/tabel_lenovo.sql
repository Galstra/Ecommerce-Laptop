-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2019 pada 18.49
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

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
-- Struktur dari tabel `tabel_lenovo`
--

CREATE TABLE `tabel_lenovo` (
  `id_barang` int(11) NOT NULL,
  `merk_barang` varchar(200) NOT NULL,
  `stok` int(200) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(200) NOT NULL,
  `gambar` text NOT NULL,
  `gambar_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_lenovo`
--

INSERT INTO `tabel_lenovo` (`id_barang`, `merk_barang`, `stok`, `keterangan`, `harga`, `gambar`, `gambar_2`) VALUES
(1, 'Lenovo IP330-4RID', 10, 'Processor: Up to 8th Gen Intel® Quad Core i7-8550U\r\nOperating System: Windows 10 Home\r\nGraphics: Up to NVIDIA® GeForce® GTX1050/Up to AMD Radeon™ 540/Intel Integrated Graphics\r\nDisplay: 15.6” FHD (1920 x 1080) IPS/15.6” HD (1366 x 768)\r\nMemory: 4 GB onboard DDR4 + 8 GB DIMM/4 GB onboard DDR4 + 4 GB DIMM/4 GB onboard DDR4 + 2 GB DIMM/16 GB DIMM/4 GB onboard DDR4/16 GB Intel® Optane™ (optional)\r\nStorage: 128 GB PCIe SSD/256 GB PCIe SSD/500 GB SATA HDD/1 TB SATA HDD/2 TB SATA HDD/128 GB PCIe SSD + 1 TB SATA HDD/256 GB PCIe SSD + 1 TB SATA HDD\r\nAudio: 2 x 2 W speakers with Dolby Audio™\r\nBattery: Up to 6 hours*; Rapid Charge (Charge 15 minutes for up to 2 hours use**)\r\nKeyboard: Standard keyboard, Backlit numeric keyboard (optional)\r\nDimensions (W x D x H): 378 mm x 260 mm x 22.9 mm / 14.1\" x 10.2\" x 0.9\"\r\nWeight: Starting at 2.2 kg / 4.85 lbs\r\nColors: Platinum Grey, Onyx Black, Midnight Blue\r\nWiFi/Bluetooth®: 1 x 1 AC WiFi + Bluetooth 4.1\r\nPorts: USB Type-C 3.1, 2 x USB 3.0 (one charging), HDMI, 4-in-1 card reader (SD, SDHC, SDXC, MMC), Audio jack\r\n', 'Rp 9.800.000', 'IP330-4TID(Blue)1.jpg', 'IP330-4TID(Blue) 2.jpg'),
(2, 'Lenovo V330-BUID', 10, 'Processor: Up to 8th Generation Intel® Core™ i7-8550U Processor (1.80GHz, up to 4.0GHz with Turbo Boost, 6MB Cache)\r\nOperating System: Windows 10 Home\r\nDisplay: 15.6” FHD (1920 x 1080) Anti-Glare\r\nGraphics: Integrated Intel® UHD Graphics 620\r\nCamera: 720p HD camera with physical shutter\r\nMemory: Up to 12GB DDR4 2400MHz\r\nStorage: 1TB 5400RPM\r\nBattery: 2 cell 39Wh; up to 8 hours \r\nAudio: Stereo speakers with Dolby Audio™, Integrated single digital microphone, Integrated Skype-certified dual-array digital microphone\r\nSecurity: Trusted Platform Module (TPM) 1.2, Touch Fingerprint Reader, Kensington Minisaver™ lock slot, Physical camera shutter, Active Protection System (APS)\r\nPorts: 1 x USB 3.0 Gen1** Type-C, 2 x USB 3.0** (One always-on), VGA, HDMI, 4-in-1 card reader (SD, SDHC, SDXC, MMC), RJ-45 Gigabit Ethernet, Audio combo jack\r\nConnectivity: 802.11 AC (2 x 2) + Bluetooth® 4.1\r\nHinges: 180 degrees\r\nDimensions (W x D x H): 4.6\" x 10\" x 0.88\" / 375 x 253 x 22.3 (mm)\r\nWeight: Starting at 3.97 lbs (1.8 kg)\r\nColor: Iron Grey\r\nPreloaded Software: Lenovo App Explorer, Lenovo ID, Microsoft Office 2016 Trial (not available in Japan)\r\n', 'Rp 7.625.000', 'V330-BUID(Grey) 1.jpg', 'V330-BUID(Grey) 2.jpg'),
(3, 'Lenovo S340-96ID', 10, 'Processor: Up to 10th Generation Intel® Core™ i5-1035G1 Processor (1.0GHz, up to 3.60GHz with Turbo Boost, 6MB Cache)/Up to 8th Generation Intel® Core™ i5-8265U Processor (1.60GHz, up to 3.90GHz with Turbo Boost, 6MB Cache)\r\nOperating System: Windows 10 Home\r\nDisplay: 15.6\" HD (1366 x 768) antiglare, touchscreen/15.6\" FHD (1920 x 1080) Anti-Glare/15.6\" FHD (1920 x 1080) IPS, Anti-Glare, Multi-touch\r\nMemory: Up to 8GB DDR4 2400MHz (1 Onboard, 1 DIMM)/8GB DDR4 2666MHz (1 Onboard, 1 DIMM)\r\nBattery: 10th Gen processors - Up to 10 hours* with rapid charging technology/8th Gen processors - Up to 8 hours*\r\nStorage: Up to 256GB PCIe SSD\r\nGraphics: Up to Integrated Intel® UHD 620 Graphics\r\nAudio: Dolby Audio™ Premium, 2 x 2W speakers\r\nDimensions (W x D x H): 14.1\" x 9.6\" x .7\" / 358 x 245 x 17.9 (mm)\r\nWeight: Starting at 3.96 lbs (1.79 kg)\r\nColors: Platinum Grey, Abyss Blue\r\nConnectivity: 802.11 AC (1 x 1), Bluetooth® 4.2\r\nPorts/Slots: 2 x USB 3.1 (Gen 1)** (1 supports charging), 1 x UBS 3.1 (Gen 1) Type-C, HDMI, 4-in-1 SD card reader, Headphone / mic combo, Power connector\r\nKeyboard: Backlit Keyboard (select models)\r\nWebcam: 720p HD with Privacy shutter\r\nPreloaded Software: McAfee LiveSafe (trial), Lenovo Vantage, Microsoft Office 365 (trial), Lenovo App Explorer, LinkedIn, Lenovo Utility\r\nWhat\'s in the box: IdeaPad S340 15\", 65W AC Adapter, Quick start guide, 3 Cell 52.5Wh Battery\r\n', 'Rp 10.199.000', 'S340-96ID(Grey) 1.jpg', 'S340-96ID(Grey) 2.jpg'),
(4, 'Lenovo Yoga 520-QMID', 10, 'Processor: 7th Generation Intel® Core™ i5-7200U Processor (2.50GHz 3MB)\r\nOperating System: Windows 10 Home\r\nGraphics: Intel® HD Graphics 620\r\nWebcam / Microphone: 720 HD with array microphone\r\nMemory: 8 GB DDR4 2133 MHz\r\nStorage: 1 TB 5400 RPM\r\nAudio: Harman speakers with Dolby Audio\r\nBattery: Up to 6 hours with MobileMark 2014\r\nDisplay: 15.6\" FHD (1920 x 1080) IPS LED Anti-Glare \r\nDimensions (W x D x H): 14.89\" x 10.2\" x .90\" / 378 x 260 x 22.9 (mm)\r\nWeight: 4.8 lbs (2.17 kg)\r\nColors: Black\r\nWiFi/Bluetooth®: 802.11 AC (1 x 1) WiFi + Bluetooth® 4.1\r\nPorts: 2 USB 3.0, 1 USB-Type C, HDMI, 4-in-1 card reader, RJ-45 LAN\r\n', 'Rp 14.999.000', 'QMID1.jpg', 'QMID2.jpg'),
(5, 'Lenovo C340-HKI', 10, 'Processor: Intel® Celeron® N4000 (1.10GHz, up to 2.60GHz Burst Frequency, 4MB Cache)\r\nOperating System: Chrome OS\r\nDisplay: 14” FHD (1920 x 1080) IPS, 250 nits, multi-touch, anti-glare/14” HD (1366 x 768) 220 nits, anti-glare\r\nGraphics: Intel® UHD 600 Graphics\r\nCamera: 720p HD\r\nMemory: 4GB LPDDR4 2400 MHz\r\nStorage: Up to 64GB eMMC\r\nBattery: Up to 10 hours\r\nAudio: 2x2W stereo speaker\r\nDimensions (H x W x D): 12.9″ x 9.2″ x 0.74″ / 328.9mm x 234.3mm x 18.8mm\r\nWeight: Starting at 3.02 lbs (1.37 kg)\r\nColor: Onyx Black\r\nConnectivity: Intel® 9560 802.11AC (2 x 2), Bluetooth® 4.2\r\nPorts: 2 x USB-C 3.1 Gen 1**, 2 x USB-A 3.1 Gen 1**, MicroSD card reader, Headphone / mic combo, Kensington Lock Slot\r\nWhat\'s in the box: Chromebook S340 14”: 3 Cell 42Wh internal battery: 45 AC adapter: Quick start guide\r\n', 'Rp 11.899.000', 'C340-HKID(Black) 1.jpg', 'C340-HLID(Gray) 1.jpg'),
(6, 'Lenovo L340-HPID', 10, 'Processor: 9th Generation Intel® Core™ i5-9300H (2.40GHZ, up to 4.10GHz with Turbo Boost, 4 Cores, 8MB Cache)/9th Generation Intel® Core™ i7-9750H (2.60GHZ, up to 4.50GHz with Turbo Boost, 6 Cores, 12MB Cache)\r\nOperating System: Windows 10 Home/Windows 10 Pro\r\nGraphics: NVIDIA® GeForce® GTX 1650 4GB/NVIDIA® GeForce® GTX 1050 3GB\r\nMemory: Up to 16GB DDR4 2400MHz \r\nBattery: Up to 9 hours\r\nStorage: Up to 1TB SSD PCIe/Up to 2TB HDD 5400RPM, Dual Drive Configurations available. (HDD + SSD)\r\nDisplay: 17.3\" FHD (1920 x 1080) IPS, anti-glare 72% color gamut, 300 nits\r\nSecurity: TrueBlock Privacy Shutter, SW TPM , Kensington® lock slot \r\nAudio: 2x 1.5W speakers with Dolby Audio®\r\nCamera: 720p HD camera with dual microphones\r\nDimensions (W x D x H): 16.26\" x 11.2\" x 0.99\" / 413 x 284.7 x 25.3 (mm)\r\nWeight: Starting at 6.13 lbs (2.78 kg)\r\nColor: Granite Black\r\nConnectivity: Up to 802.11 AC (2 x 2), Bluetooth® 4.2\r\nPorts / Slots: 2 x USB 3.1** (Gen. 1), 1 x HDMI 2.0, 1 x RJ45, 1 x Novo hole, 1 x Combo of 3.5mm Stereo Headphone, 1 x Type C (USB 3.0)\r\nPreloaded Software: Lenovo App Explorer, Lenovo Vantage, Lenovo Utility, LinkedIn  , McAfee LiveSafe™ 30-day trial, Microsoft Office 365 30-day trial\r\nWhat\'s in the box: IdeaPad L340 (17”) Gaming, 135W AC adapter, 3 cell 45Wh battery, Quick start guide\r\n', 'Rp 10.999.000', 'L340-HPID(Black) 1.jpg', 'L340-HPID(Black) 2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_lenovo`
--
ALTER TABLE `tabel_lenovo`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_lenovo`
--
ALTER TABLE `tabel_lenovo`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
