-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 26, 2018 at 06:34 AM
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
('3second', 'trisecond.png'),
('Converse', 'converse.png'),
('FCM', 'chanel.png'),
('Lea', 'levis.png'),
('Nike', 'nike.png');

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
('item_00127', 'Biru', 'stock_60.jpg', NULL, NULL, NULL),
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
('item_00127', 'Converse All Star 2018', 'B', 'Sepatu', 750000, 0, 'Sepatu converse asli.', '200', '13 x 10', 'Jangan dibakar', 'Converse', '2018-05-30 23:17:38'),
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
('order_002312', 'item_00127', 'Converse All Star 2018', 'Biru', '30', 750000, 1),
('order_002576', 'item_001', '3Second Men Shoes', 'Hitam', 'XL', 300000, 1),
('order_002576', 'item_004', '3Second Wave Men', 'Putih', 'XL', 272000, 3),
('order_002626', 'item_001', '3Second Men Shoes', 'Hijau', 'L', 300000, 1),
('order_00352', 'item_00127', 'Converse All Star 2018', 'Biru', '30', 750000, 1),
('order_00653', 'item_001', '3Second Men Shoes', 'Hijau', 'XL', 300000, 1),
('order_00653', 'item_004', '3Second Wave Men', 'Putih', 'XL', 272000, 3),
('order_00967', 'item_00127', 'Converse All Star 2018', 'Biru', '30', 750000, 1);

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
('order_002312', 'mem_001498', '2018-06-01 22:20:33', 'bakekok@gmail.com', 'Virginia', 'Hendras', '08565542339', 'Indonesia, Malang, Jawa Timur, Jl.Harapan, 65432', NULL, 'SHIPPED', NULL),
('order_002576', 'GUEST', '2018-05-19 18:08:48', 'hendras@gmail.com', 'Virginia', 'Hendras', '08565542339', 'Indonesia, Malang, Jawa Timur, Jl.Harapan, 65432', NULL, 'SHIPPED', NULL),
('order_002626', 'GUEST', '2018-05-30 15:30:23', 'doraemon@gmail.com', 'Doora', 'Emon', '08780869', 'United Kingdom, Surabaya, Jawa Barat, JL. Semarang no. 19, 65415', NULL, 'NEW ORDER', NULL),
('order_00352', 'mem_001498', '2018-05-31 13:09:58', 'bakekok@gmail.com', 'Virginia', 'Hendras', '08565542339', 'Indonesia, Malang, Jawa Timur, Jl.Harapan, 65432', NULL, 'NEW ORDER', NULL),
('order_00653', 'GUEST', '2018-05-12 16:12:18', 'hendras@gmail.com', 'Virginia', 'Hendras', '08565542339', 'Indonesia, Malang, Jawa Timur, Jl.Harapan, 65432', NULL, 'CANCELED', NULL),
('order_00967', 'mem_001498', '2018-05-31 13:11:26', 'bakekok@gmail.com', 'Virginia', 'Hendras', '08565542339', 'Indonesia, Malang, Jawa Timur, Jl.Harapan, 65432', NULL, 'NEW ORDER', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_report`
--

CREATE TABLE `payment_report` (
  `id_order` varchar(20) NOT NULL,
  `id_buyer` varchar(15) DEFAULT NULL,
  `transfer_bank` varchar(45) DEFAULT NULL,
  `token_image` varchar(45) DEFAULT NULL,
  `note` text,
  `report_date` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_report`
--

INSERT INTO `payment_report` (`id_order`, `id_buyer`, `transfer_bank`, `token_image`, `note`, `report_date`) VALUES
('order_002034', NULL, 'BCA', 'tok_120.png', NULL, '2018-05-08 22:40:32'),
('order_00967', NULL, 'BCA', 'tok_814.png', 'Suda saya bayar lunas ya....', '2018-05-31 21:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `ratings_table`
--

CREATE TABLE `ratings_table` (
  `email` varchar(75) NOT NULL,
  `id_item` varchar(15) NOT NULL,
  `color` varchar(15) NOT NULL,
  `rating` int(10) DEFAULT NULL,
  `review` text,
  `review_date` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings_table`
--

INSERT INTO `ratings_table` (`email`, `id_item`, `color`, `rating`, `review`, `review_date`) VALUES
('hendras@gmail.com', 'item_001', 'Hijau', 5, 'Heeeemmmm.....payah....', '2018-06-01 21:38:32'),
('hendras@gmail.com', 'item_00127', 'Biru', 5, 'Bagus....', '2018-06-01 22:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `shop_info`
--

CREATE TABLE `shop_info` (
  `id_sinfo` varchar(100) NOT NULL,
  `description` text,
  `video_about` text,
  `team_photo` varchar(45) DEFAULT NULL,
  `instagram` text,
  `facebook` text,
  `twitter` text,
  `youtube` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_info`
--

INSERT INTO `shop_info` (`id_sinfo`, `description`, `video_about`, `team_photo`, `instagram`, `facebook`, `twitter`, `youtube`) VALUES
('001', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras euismod leo nec orci sagittis, id bibendum metus sagittis. Phasellus in nibh consequat sem commodo tincidunt et ut sapien. Vestibulum aliquam urna magna. In ligula quam, condimentum eget est sed, imperdiet molestie lectus. Morbi scelerisque, lectus non vehicula tincidunt, lectus enim sodales nulla, at faucibus erat lacus id turpis. Quisque eu convallis sapien. Nunc vestibulum nunc vitae massa mollis, at dapibus tellus feugiat. Donec scelerisque euismod auctor. Phasellus quis efficitur sapien, non tincidunt mauris. Phasellus et orci nec libero placerat semper et id tortor. Curabitur feugiat pellentesque magna, nec placerat massa dignissim ac. Curabitur vitae dolor quis lacus hendrerit efficitur ac vitae dui. Pellentesque tincidunt vehicula nisi sollicitudin tempus. Maecenas finibus urna quis nunc tristique semper. Pellentesque ultricies ligula eleifend est lacinia accumsan. ', 'https://www.youtube.com/embed/Ee-hvm93Gro\" frameborder=\"0\" allow=\"autoplay; encrypted-media', 'team.jpg', 'https://www.instagram.com/?hl=en', 'https://www.facebook.com/', 'https://twitter.com/?lang=en', 'https://www.youtube.com/user/OfficialNoahMusic');

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
('item_00127', 'Biru', '30', '12', '2018-05-30 23:38:31'),
('item_001', 'Biru', '40', '0', '2018-05-25 05:47:48'),
('item_004', 'Biru', 'L', '9', '2018-03-10 07:07:56'),
('item_002', 'Biru', 'X', '2', '2015-03-10 07:07:56'),
('item_002', 'Biru', 'XL', '10', '2016-05-10 07:07:56'),
('item_001', 'Hijau', 'L', '4', '2018-12-10 07:07:45'),
('item_001', 'Hijau', 'XL', '43', '2013-10-10 07:07:56'),
('item_006', 'Hitam', '40', '2', '2011-10-10 07:07:56'),
('item_005', 'Hitam', 'L', '2', '2012-10-10 07:07:56'),
('item_001', 'Hitam', 'S', '18', '2016-05-10 07:07:56'),
('item_005', 'Hitam', 'S', '3', '2016-05-10 07:07:56'),
('item_001', 'Hitam', 'XL', '19', '2016-05-10 07:07:56'),
('item_003', 'Hitam', 'XL', '5', '2016-05-10 07:07:56'),
('item_005', 'Hitam', 'XL', '3', '2016-05-10 07:07:56'),
('item_004', 'Putih', 'XL', '10', '2016-05-10 07:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_table`
--

CREATE TABLE `wishlist_table` (
  `id_customer` varchar(10) NOT NULL,
  `id_item` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist_table`
--

INSERT INTO `wishlist_table` (`id_customer`, `id_item`, `color`) VALUES
('mem_001498', 'item_003', 'Hitam'),
('mem_001498', 'item_004', 'Biru'),
('mem_001498', 'item_004', 'Putih'),
('mem_001498', 'item_006', 'Hitam');

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
-- Indexes for table `ratings_table`
--
ALTER TABLE `ratings_table`
  ADD PRIMARY KEY (`email`,`id_item`,`color`);

--
-- Indexes for table `shop_info`
--
ALTER TABLE `shop_info`
  ADD PRIMARY KEY (`id_sinfo`);

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

--
-- Indexes for table `wishlist_table`
--
ALTER TABLE `wishlist_table`
  ADD PRIMARY KEY (`id_customer`,`id_item`,`color`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
