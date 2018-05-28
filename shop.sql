-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2018 at 10:45 AM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand_table`
--

CREATE TABLE `brand_table` (
  `brand` varchar(10) NOT NULL,
  `logo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand_table`
--

INSERT INTO `brand_table` (`brand`, `logo`) VALUES
('3second', NULL),
('FCM', NULL),
('Lea', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories_table`
--

CREATE TABLE `categories_table` (
  `category` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories_table`
--

INSERT INTO `categories_table` (`category`) VALUES
('Asesoris'),
('Baju'),
('Celana'),
('Jaket'),
('Rok'),
('Sepatu'),
('Tas');

-- --------------------------------------------------------

--
-- Table structure for table `colors_table`
--

CREATE TABLE `colors_table` (
  `color` varchar(45) NOT NULL,
  `color_code` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colors_table`
--

INSERT INTO `colors_table` (`color`, `color_code`) VALUES
('Biru', '#3f54bf'),
('Hijau', '#a2d053'),
('Hitam', '#3c3e38'),
('Kuning', '#e5f274'),
('Merah', '#ec3455'),
('Putih', '#ffffff');

-- --------------------------------------------------------

--
-- Table structure for table `customer_member`
--

CREATE TABLE `customer_member` (
  `id_customer` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `password` text,
  `member_status` varchar(10) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `address` text,
  `phone` varchar(45) DEFAULT NULL,
  `zip_code` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_member`
--

INSERT INTO `customer_member` (`id_customer`, `email`, `first_name`, `last_name`, `password`, `member_status`, `country`, `province`, `city`, `address`, `phone`, `zip_code`) VALUES
('mem_001498', 'bakekok@gmail.com', 'Virginia', 'Hendras', '12345', 'ACTIVE', 'Indonesia', 'Jawa Timur', 'Malang', 'Jl.Harapan', '08565542339', '65432');

-- --------------------------------------------------------

--
-- Table structure for table `image_item`
--

CREATE TABLE `image_item` (
  `id_item` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `image_one` varchar(45) DEFAULT NULL,
  `image_two` varchar(45) DEFAULT NULL,
  `image_three` varchar(45) DEFAULT NULL,
  `image_four` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_item`
--

INSERT INTO `image_item` (`id_item`, `color`, `image_one`, `image_two`, `image_three`, `image_four`) VALUES
('item_001', 'Biru', 'stock_758.jpg', 'stock_7581.jpg', 'stock_7582.jpg', 'stock_7583.jpg'),
('item_001', 'Hijau', 'shoes_green1.jpg', 'shoes_green2.jpg', 'shoes_green3.jpg', 'shoes_green4.jpg'),
('item_001', 'Hitam', 'shoes_black1.jpg', 'shoes_black2.jpg', 'shoes_black3.jpg', 'shoes_black4.jpg'),
('item_002', 'Biru', 'flickr-06.jpg', 'flickr-06.jpg', NULL, NULL),
('item_003', 'Hitam', 'home-latest1.jpg', 'home-latest2.jpg', NULL, NULL),
('item_004', 'Biru', '3second_men_wave_blue1.jpg', '3second_men_wave_blue2.jpg', '3second_men_wave_blue3.jpg', '3second_men_wave_blue4.jpg'),
('item_004', 'Putih', '3second_men_wave_white1.jpg', '3second_men_wave_white2.jpg', '3second_men_wave_white3.jpg', '3second_men_wave_white4.jpg'),
('item_005', 'Hitam', '3second_sporty_jacket_1.jpg', '3second_sporty_jacket_2.jpg', '3second_sporty_jacket_3.jpg', '3second_sporty_jacket_4.jpg'),
('item_006', 'Hitam', 'tas_ireng1.jpg', 'tas_ireng2.jpg', 'tas_ireng3.jpg', 'tas_ireng4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items_table`
--

CREATE TABLE `items_table` (
  `id_item` varchar(10) NOT NULL,
  `name` varchar(75) DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `category` varchar(75) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `description` text,
  `weight` varchar(15) DEFAULT NULL,
  `dimension` varchar(15) DEFAULT NULL,
  `note` varchar(15) DEFAULT NULL,
  `brand` varchar(10) DEFAULT NULL,
  `publish_date` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items_table`
--

INSERT INTO `items_table` (`id_item`, `name`, `gender`, `category`, `price`, `discount`, `description`, `weight`, `dimension`, `note`, `brand`, `publish_date`) VALUES
('item_001', '3Second Men Shoes', 'M', 'Sepatu', 300000, 0, 'sip', '2', '10 x 10', 'Jangan dibuang', '3second', '2018-01-10 07:07:56'),
('item_002', 'Baju Cewek Kekinian', 'F', 'Baju', 350000, 30, 'Baju unyu', NULL, NULL, NULL, '3second', '2018-02-10 07:07:56'),
('item_003', 'Baju dan Rok Mini Hits', 'F', 'Baju', 150000, 20, 'Tas sip', NULL, NULL, NULL, 'Lea', '2018-03-10 07:07:56'),
('item_004', '3Second Wave Men', 'M', 'Baju', 320000, 15, 'Baju berbentuk gelombang menyejukkan hati', NULL, NULL, NULL, '3second', '2018-04-20 07:07:56'),
('item_005', 'Jaket Sporty 3Second Limited Edition', 'M', 'Jaket', 450000, 0, 'Jaket baru dari 3second yang membuat anda yang memakai kece badai', NULL, NULL, NULL, '3second', '2018-01-10 07:07:56'),
('item_006', 'FCM Bag Men Black Cat', 'M', 'Tas', 200000, 0, 'Tas yang iya iayalah', NULL, NULL, NULL, 'FCM', '2018-04-10 07:07:56'),
('item_007', 'Gelang Sakti', 'B', 'Asesoris', 700000, 25, 'Yang pake sakti mandraguna', NULL, NULL, NULL, '3second', '2018-05-05 07:07:56'),
('item_008', 'Kalung Rantai Kapal Lapis Emas 24 Karat', 'F', 'Asesoris', 8000000, 10, 'Kalung nya sultan', NULL, NULL, NULL, '3second', '2018-03-10 07:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id_order` varchar(20) NOT NULL,
  `id_item` varchar(10) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `color` varchar(25) NOT NULL,
  `size` varchar(5) NOT NULL,
  `price` int(10) DEFAULT NULL,
  `number_item` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id_order`, `id_item`, `name`, `color`, `size`, `price`, `number_item`) VALUES
('order_002034', 'item_001', '3Second Men Shoes', 'Hijau', 'L', 300000, 3),
('order_002078', 'item_001', '3Second Men Shoes', 'Hijau', 'XL', 300000, 1),
('order_002078', 'item_004', '3Second Wave Men', 'Putih', 'XL', 272000, 3),
('order_002310', 'item_004', '3Second Wave Men', 'Biru', 'L', 272000, 1),
('order_002576', 'item_001', '3Second Men Shoes', 'Hitam', 'XL', 300000, 1),
('order_002576', 'item_004', '3Second Wave Men', 'Putih', 'XL', 272000, 3),
('order_00653', 'item_001', '3Second Men Shoes', 'Hijau', 'XL', 300000, 1),
('order_00653', 'item_004', '3Second Wave Men', 'Putih', 'XL', 272000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id_order` varchar(20) NOT NULL,
  `id_customer` varchar(15) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `email_buyer` varchar(75) DEFAULT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `phone_buyer` varchar(15) DEFAULT NULL,
  `ship_info` text,
  `bill_info` text,
  `order_status` varchar(15) DEFAULT NULL,
  `order_listcol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id_order`, `id_customer`, `order_date`, `email_buyer`, `first_name`, `last_name`, `phone_buyer`, `ship_info`, `bill_info`, `order_status`, `order_listcol`) VALUES
('order_002034', 'GUEST', '2018-05-20 15:51:04', 'brian@gmail.com', 'Brian', 'Angkasa', '08123380867', 'Indonesia, Malang, Jawa Timur, Rampal Jaya Blok A, No.15, 65412', NULL, 'CANCELED', NULL),
('order_002078', 'mem_001498', '2018-05-21 16:14:40', 'hendras@gmail.com', 'Virginia', 'Hendras', '08565542339', 'Indonesia, Malang, Jawa Timur, Jl.Harapan, 65432', NULL, 'CANCELED', NULL),
('order_002310', 'mem_001498', '2018-05-12 16:16:06', 'hendras@gmail.com', 'Virginia', 'Hendras', '08565542339', 'Indonesia, Malang, Jawa Timur, Jl.Harapan, 65432', NULL, 'PAID OFF', NULL),
('order_002576', 'GUEST', '2018-05-19 18:08:48', 'hendras@gmail.com', 'Virginia', 'Hendras', '08565542339', 'Indonesia, Malang, Jawa Timur, Jl.Harapan, 65432', NULL, 'SHIPPED', NULL),
('order_00653', 'GUEST', '2018-05-12 16:12:18', 'hendras@gmail.com', 'Virginia', 'Hendras', '08565542339', 'Indonesia, Malang, Jawa Timur, Jl.Harapan, 65432', NULL, 'CANCELED', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_report`
--

CREATE TABLE `payment_report` (
  `id_order` varchar(20) NOT NULL,
  `id_buyer` varchar(15) DEFAULT NULL,
  `transfer_bank` varchar(45) DEFAULT NULL,
  `token_image` varchar(45) DEFAULT NULL,
  `report_date` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_report`
--

INSERT INTO `payment_report` (`id_order`, `id_buyer`, `transfer_bank`, `token_image`, `report_date`) VALUES
('order_002034', NULL, 'BCA', 'tok_120.png', '2018-05-08 22:40:32');

-- --------------------------------------------------------

--
-- Table structure for table `shop_promo`
--

CREATE TABLE `shop_promo` (
  `id_ref` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `ref` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_promo`
--

INSERT INTO `shop_promo` (`id_ref`, `title`, `ref`, `image`) VALUES
('002', 'FUN SHIRT AND SHORT', 'BAJU', 'promo_949.jpg'),
('001', 'MARVEL SHIRT SERIES', 'BAJU', 'promo_615.jpg'),
('003', 'NEW NIKE SHOES', 'BAJU', 'promo_101.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shop_slider`
--

CREATE TABLE `shop_slider` (
  `id_slider` varchar(10) NOT NULL,
  `image` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_slider`
--

INSERT INTO `shop_slider` (`id_slider`, `image`) VALUES
('001', 'slider_276.jpg'),
('002', 'slider_151.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `size_table`
--

CREATE TABLE `size_table` (
  `size_val` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size_table`
--

INSERT INTO `size_table` (`size_val`) VALUES
('20'),
('30'),
('40'),
('L'),
('M'),
('S'),
('XL');

-- --------------------------------------------------------

--
-- Table structure for table `stock_table`
--

CREATE TABLE `stock_table` (
  `id_item` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `stock` varchar(45) DEFAULT NULL,
  `add_date` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_table`
--

INSERT INTO `stock_table` (`id_item`, `color`, `size`, `stock`, `add_date`) VALUES
('item_001', 'Biru', '40', '7', '2018-05-25 05:47:48'),
('item_004', 'Biru', 'L', '9', '2018-03-10 07:07:56'),
('item_002', 'Biru', 'X', '2', '2015-03-10 07:07:56'),
('item_002', 'Biru', 'XL', '10', '2016-05-10 07:07:56'),
('item_001', 'Hijau', 'L', '5', '2018-12-10 07:07:45'),
('item_001', 'Hijau', 'XL', '43', '2013-10-10 07:07:56'),
('item_006', 'Hitam', '40', '2', '2011-10-10 07:07:56'),
('item_005', 'Hitam', 'L', '2', '2012-10-10 07:07:56'),
('item_001', 'Hitam', 'S', '18', '2016-05-10 07:07:56'),
('item_005', 'Hitam', 'S', '3', '2016-05-10 07:07:56'),
('item_001', 'Hitam', 'XL', '19', '2016-05-10 07:07:56'),
('item_003', 'Hitam', 'XL', '5', '2016-05-10 07:07:56'),
('item_005', 'Hitam', 'XL', '3', '2016-05-10 07:07:56'),
('item_004', 'Putih', 'XL', '10', '2016-05-10 07:07:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_table`
--
ALTER TABLE `brand_table`
  ADD PRIMARY KEY (`brand`);

--
-- Indexes for table `categories_table`
--
ALTER TABLE `categories_table`
  ADD PRIMARY KEY (`category`);

--
-- Indexes for table `colors_table`
--
ALTER TABLE `colors_table`
  ADD PRIMARY KEY (`color`);

--
-- Indexes for table `customer_member`
--
ALTER TABLE `customer_member`
  ADD PRIMARY KEY (`email`,`id_customer`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `customer_id_UNIQUE` (`id_customer`);

--
-- Indexes for table `image_item`
--
ALTER TABLE `image_item`
  ADD PRIMARY KEY (`id_item`,`color`);

--
-- Indexes for table `items_table`
--
ALTER TABLE `items_table`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id_order`,`color`,`size`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `payment_report`
--
ALTER TABLE `payment_report`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `shop_promo`
--
ALTER TABLE `shop_promo`
  ADD PRIMARY KEY (`title`,`id_ref`);

--
-- Indexes for table `shop_slider`
--
ALTER TABLE `shop_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `size_table`
--
ALTER TABLE `size_table`
  ADD PRIMARY KEY (`size_val`);

--
-- Indexes for table `stock_table`
--
ALTER TABLE `stock_table`
  ADD PRIMARY KEY (`color`,`size`,`id_item`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
