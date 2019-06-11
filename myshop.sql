-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 12:07 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Computer'),
(2, 'Mobile'),
(3, 'Camera'),
(4, 'Sound System');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_form`
--

CREATE TABLE `tbl_contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `messagebody` varchar(600) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact_form`
--

INSERT INTO `tbl_contact_form` (`id`, `name`, `email`, `subject`, `messagebody`, `time`) VALUES
(1, 'Cardinal', 'Norway', NULL, NULL, '2018-10-29 13:06:37'),
(2, 'Cardinal', 'Norway', NULL, NULL, '2018-10-29 13:07:48'),
(3, 'Cardinal', 'Norway', NULL, NULL, '2018-10-29 13:08:26'),
(4, 'Cardinal', 'Norway', NULL, NULL, '2018-10-29 13:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `price` varchar(20) NOT NULL,
  `main_image` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `descs` varchar(1000) NOT NULL,
  `cat_id` varchar(10) NOT NULL,
  `sub_cat_id` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `title`, `price`, `main_image`, `link`, `image1`, `image2`, `descs`, `cat_id`, `sub_cat_id`, `date`) VALUES
(10, 'HP Pavilion 24 Desktop 256GB SSD 5TB HD 32GB RAM Win 10 PRO(Intel Core i7-8700K - 3.70GHz Turbo to 4.70GHz, 32 GB RAM, 256 GB SSD + 5 TB HD, 24\" Touchscreen FullHD, Win 10 PRO) PC Computer All-in-One', '1,999.00 ', 'upload/71Q674rvigL._SL1200_.jpg', 'https://www.amazon.com/18X-Core-Workstation-Desktop-Blu-Ray-GeForce/dp/B079YY22JJ/ref=sr_1_7?s=pc&ie=UTF8&qid=1541005989&sr=1-7&keywords=computer', 'upload/61Aq6L+xmhL._SL1000_.jpg', 'upload/71wE-1ir-oL._SL1280_.jpg', '<li>Intel Core i7-8700K at 3.70GHz with TURBO BOOST to 4.70GHz (EXTREME-power processor)</li>\r\n<li>32 GB of RAM (ULTRA performance); Graphics RAM up to 6GB</li>\r\n<li>256 GB SSD m.2 + 5 TB HD (5.25TB TOTAL STORAGE); HDMI in&out ports</li>\r\n<li>24\" Diagonal TOUCHSCREEN WLED-backlit edge-to-edge display</li>\r\n<li>WIN 10 PRO; DVD-RW/CD-R; Bang & Olufsen speakers; HD web cam&mic, 802.11a/b/g/n/ac + Bluetooth 4.2; 1x USB 3.1 Type-C; 2xUSB 3.0; 2x USB 2.0; 3-in-1 memory card reader; Wireless keyboard/mouse, etc</li>', '1', '1', '2018-10-31 17:19:15'),
(11, 'Adamant Custom 16X-Core Liquid Cooled Video Editing Rendering Workstation Desktop Computer Intel Core i9 7960X 2.8Ghz 128Gb DDR4 RAM 5TB HDD 500Gb NVMe SSD 850W Toughpower PSU Nvidia GTX 1080 Ti 11Gb', '5,929.99 ', 'upload/61SrTM7tKcL._SL1000_.jpg', 'https://www.amazon.com/16X-Core-Rendering-Workstation-Computer-Toughpower/dp/B07FXSBNT6/ref=sr_1_8?s=pc&ie=UTF8&qid=1541005989&sr=1-8&keywords=computer', 'upload/61KdEzHuZRL._SL1000_.jpg', 'upload/41EZBVp-1jL.jpg', '             \r\n<li>CPU 16X-Core Intel Core i9 7960X 2.8GHz || Corsair H110 Liquid CPU Cooler || MB ASUS PRIME X299 Series</li>\r\n<li>RAM 128GB DDR4 High Performance Memory || HDD 5TB Storage Drive || M.2 SSD 500GB NVMe Samsung 970 EVO</li>\r\n<li>GPU nVidia Geforce GTX 1080 Ti 11GB || PSU Thermaltake Toughpower 850W 80 PLUS Gold</li>\r\n<li>12X LG Blu-Ray || OS Windows 10 Professional 64-bit || Wireless-N N900 PCI-x Adapter Dual Band</li>\r\n<li>Assembled and Tested, 3 Years Parts / Labor Warranty || Free Lifetime Tech Support || 1-2 Business Day Shipping</li>                       \r\n                                ', '1', '2', '2018-10-31 17:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_cat`
--

CREATE TABLE `tbl_sub_cat` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_cat`
--

INSERT INTO `tbl_sub_cat` (`id`, `cat_id`, `name`) VALUES
(1, 1, 'Desktop'),
(2, 1, 'laptop'),
(3, 1, 'Graphics Card'),
(4, 1, 'Desktop Casing'),
(5, 1, 'MotherBoard'),
(6, 1, 'Ram'),
(7, 1, 'Processor'),
(8, 1, 'Power Supply'),
(10, 2, 'asfdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(1, 'admin', '11111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact_form`
--
ALTER TABLE `tbl_contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sub_cat`
--
ALTER TABLE `tbl_sub_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_contact_form`
--
ALTER TABLE `tbl_contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_sub_cat`
--
ALTER TABLE `tbl_sub_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
