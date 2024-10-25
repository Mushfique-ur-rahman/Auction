-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2024 at 10:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auctionx`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `Bid_id` int(11) NOT NULL,
  `Bid_product` int(11) NOT NULL,
  `Bid_amount` int(11) NOT NULL,
  `Bid_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`Bid_id`, `Bid_product`, `Bid_amount`, `Bid_user`) VALUES
(1, 3, 65, 5),
(8, 2, 75, 5),
(14, 4, 65, 5);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_listing_time` date NOT NULL,
  `product_end_time` date NOT NULL,
  `upploder_id` int(11) NOT NULL,
  `bided_user_id` int(11) DEFAULT NULL,
  `img_dir` varchar(255) NOT NULL,
  `img_dir2` varchar(255) DEFAULT NULL,
  `img_dir3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`, `product_listing_time`, `product_end_time`, `upploder_id`, `bided_user_id`, `img_dir`, `img_dir2`, `img_dir3`) VALUES
(2, 'iPhoneX', 'BODY	Dimensions	143.6 x 70.9 x 7.7 mm (5.65 x 2.79 x 0.30 in)\r\nWeight	174 g (6.14 oz)\r\nBuild	Glass front (Corning-made glass), glass back (Corning-made glass), stainless steel frame\r\nSIM	Nano-SIM\r\n 	IP67 dust/water resistant (up to 1m for 30 min)\r\nApple Pay (Visa, MasterCard, AMEX certified)\r\nDISPLAY	Type	Super Retina OLED, HDR10, Dolby Vision, 625 nits (HBM)\r\nSize	5.8 inches, 84.4 cm2 (~82.9% screen-to-body ratio)\r\nResolution	1125 x 2436 pixels, 19.5:9 ratio (~458 ppi density)\r\nProtection	Scratch-resistant glass\r\n 	3D Touch\r\nPLATFORM	OS	iOS 11.1.1, up to iOS 16.6\r\nChipset	Apple A11 Bionic (10 nm)\r\nCPU	Hexa-core 2.39 GHz (2x Monsoon + 4x Mistral)\r\nGPU	Apple GPU (three-core graphics)\r\nMEMORY	Card slot	No\r\nInternal	64GB 3GB RAM, 256GB 3GB RAM\r\n 	NVMe\r\nMAIN CAMERA	Dual	12 MP, f/1.8, 28mm (wide), 1/3\", 1.22µm, dual pixel PDAF, OIS\r\n12 MP, f/2.4, 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS, 2x optical zoom\r\nFeatures	Quad-LED dual-tone flash, HDR (photo/panorama), panorama, HDR\r\nVideo	4K@24/30/60fps, 1080p@30/60/120/240fps\r\nSELFIE CAMERA	Single	7 MP, f/2.2, 32mm (standard)\r\nSL 3D, (depth/biometrics sensor)\r\nFeatures	HDR\r\nVideo	1080p@30fps\r\nSOUND	Loudspeaker	Yes, with stereo speakers\r\n3.5mm jack	No\r\nCOMMS	WLAN	Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot\r\nBluetooth	5.0, A2DP, LE\r\nPositioning	GPS, GLONASS, GALILEO, QZSS\r\nNFC	Yes\r\nRadio	No\r\nUSB	Lightning, USB 2.0\r\nFEATURES	Sensors	Face ID, accelerometer, gyro, proximity, compass, barometer\r\nBATTERY	Type	Li-Ion 2716 mAh, non-removable (10.35 Wh)\r\nCharging	15W wired, PD2.0, 50% in 30 min (advertised)\r\nWireless (Qi)\r\nTalk time	Up to 21 h (3G)\r\nMISC	Colors	Space Gray, Silver\r\nModels	A1865, A1901, A1902, A1903, iPhone10,3, iPhone10,6\r\nSAR	1.09 W/kg (head)     1.17 W/kg (body)    \r\nPrice	About 280 EUR\r\nTESTS	Performance	AnTuTu: 233100 (v7)\r\nGeekBench: 10215 (v4.4)\r\nGFXBench: 28fps (ES 3.1 onscreen)\r\nDisplay	Contrast ratio: Infinity (nominal), 5.013 (sunlight)\r\nCamera	Photo / Video\r\nLoudspeaker	Voice 68dB / Noise 74dB / Ring 76dB\r\nAudio quality	Noise -93.7dB / Crosstalk -82.8dB\r\nBattery life	\r\nEndurance rating 74h', '2023-08-27', '2023-09-27', 5, NULL, 'aucimg/DiploymentDiagram.png', NULL, NULL),
(3, 'Corolla X', 'Toyota\r\nModelCorolla Altis X\r\nBody stylePassenger Cars\r\nTransmissionAutomatic\r\nSeats4 SEATS\r\nFuel typePetrol\r\nEngine Type2 ZR-FE\r\nEngine Displacement(cc)1798', '2023-08-29', '2023-09-07', 7, NULL, 'aucimg/Exterior4.jpg', NULL, NULL),
(4, 'TOYOTA COROLLA X', 'ModelDBA-NZE121\r\n\r\nDimension4410×1695×1470mm\r\n\r\nWheelbase2600mm\r\n\r\nTread front/rear1490/1470mm\r\n\r\nDimension(Interior)1925×1430×1230mm\r\n\r\nWeight1060kg\r\n\r\nBody TypeSedan\r\n\r\nDoors4\r\n\r\nRiding Capacity5', '2023-08-29', '2023-09-07', 6, NULL, 'aucimg/Toyotacorollax.webp', 'aucimg/10101029_200412bk.webp', 'aucimg/10101029_200412aa.webp');

-- --------------------------------------------------------

--
-- Table structure for table `top_up`
--

CREATE TABLE `top_up` (
  `Top_up_id` int(11) NOT NULL,
  `Top_up_user` int(11) NOT NULL,
  `Top_up_source_name` varchar(100) NOT NULL,
  `Top_up_mobile_no` varchar(20) NOT NULL,
  `Top_up_amount` int(11) NOT NULL,
  `Top_up_trnx_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `balance` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `email`, `pass`, `balance`, `img`) VALUES
(5, 'Mushfique ur rahman', 'mushfiqueur122@gmail.com', 'Koushik332', 50, 'Userimg/mushfik.jpg'),
(6, 'Loskor', 'loskor123@gmail.com', 'Loskor332', 30, ''),
(7, 'Rahat', 'rahat123@gmail.com', 'R321450', 70, ''),
(9, 'Khaled Hosain', 'khaled596@gmail.com', 'khal0805', 40, ''),
(11, 'Esha', 'esha123@gmail.com', 'Esha332', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`Bid_id`),
  ADD KEY `uid` (`Bid_user`),
  ADD KEY ` Product_ID` (`Bid_product`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `Upploder` (`upploder_id`),
  ADD KEY `Bidder` (`bided_user_id`);

--
-- Indexes for table `top_up`
--
ALTER TABLE `top_up`
  ADD PRIMARY KEY (`Top_up_id`),
  ADD KEY `top_up_user_id` (`Top_up_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `User_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `Bid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `top_up`
--
ALTER TABLE `top_up`
  MODIFY `Top_up_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT ` Product_ID` FOREIGN KEY (`Bid_product`) REFERENCES `product` (`Product_ID`),
  ADD CONSTRAINT `uid` FOREIGN KEY (`Bid_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `Bidder` FOREIGN KEY (`bided_user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `Upploder` FOREIGN KEY (`upploder_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `top_up`
--
ALTER TABLE `top_up`
  ADD CONSTRAINT `top_up_user_id` FOREIGN KEY (`Top_up_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
