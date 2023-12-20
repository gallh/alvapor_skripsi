-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 06:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `head` varchar(50) NOT NULL,
  `content` varchar(100) NOT NULL,
  `text_color` enum('text-dark','text-light') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `product_id`, `image`, `head`, `content`, `text_color`) VALUES
(11, 9, '469b1f84550b21c2c4021baf872b71d0.jpg', 'LOSTVAPE Ursa Nano Pod Kit 800mAh', 'LOSTVAPE Ursa Nano Pod Kit 800mAh', 'text-dark'),
(12, 7, 'dd32d578e44b59eeb7ec302a0511fe7f.jpg', 'NEVOKS Feelin Mini Pod Kit', 'a stylish body designed with adjustable airflow', 'text-light');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `status` enum('menunggu','dibayar','dikirim','dibatalkan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `date`, `invoice`, `total`, `name`, `address`, `phone`, `status`) VALUES
(36, 118, '2023-05-21', '11820230521152421', 180000, 'Galih Aditya Ananta', 'perumnas condong catur,kost putra kantl 3', '085234574210', 'dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `orders_confirm`
--

CREATE TABLE `orders_confirm` (
  `id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_confirm`
--

INSERT INTO `orders_confirm` (`id`, `orders_id`, `account_name`, `account_number`, `nominal`, `note`, `image`) VALUES
(14, 36, 'Galih Aditya Ananta', '085234574210', 180000, 'taruh dimeja', '094c14c89bcb6e8beada03fd1727a35a.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`id`, `orders_id`, `product_id`, `subtotal`) VALUES
(42, 36, 8, 180000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `edition` enum('e-liquid','vape kits','pod kits','tank','coils','accessories') NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `requirements` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `edition`, `image`, `description`, `requirements`) VALUES
(7, 'NEVOKS Feelin Mini POD Kit 750mAh', 175000, 'pod kits', 'e1045ecb788dec61d440f7fc2559f6d3.jpg', '							Main Features\r\nEasy to use, Pod friendly\r\nAirflow Adjustable\r\nDraw-Activated\r\n750mAh Built-in Battery\r\nSPL10 Coil 0.8Ohm\r\n(Compatible with : Feelin & Pagee)\r\n\r\nSpecifications :\r\nProduct Name : Feelin Mini\r\nSize : 90*25*15mm\r\nPower Range : 10W-18W\r\nCapacity : 2ml\r\nResistance : 0.8Ohm (SPL-10 Mesh coil)\r\nOutput Voltage : 3.3-4.2V\r\nBattery : 750mAh\r\nPod Material : PCTG\r\nDevice Material : PC+ABS\r\nCharge : 5V/1A( Type-C )\r\n\r\nContents :\r\nX1 Feelin Mini Device\r\nX1 Feelin Mini Empty Cartridge(2ml)\r\nX1 SPL-10 Mesh Coil 0.8Ohm\r\nX1 Type-C Cable\r\nX1 User Manual\r\nX1 Warranty Card\r\n\r\nBerat: 0.13 kg						', 'Baru'),
(8, 'Innokin MVP Pod Kit', 180000, 'pod kits', 'ceb22bde49356ce7317fd2dcd56f7d78.jpg', '							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce placerat nulla a nisl commodo, venenatis rutrum erat convallis. Nunc a justo tellus. Sed molestie odio augue, ac consequat mi aliquam a. Praesent vitae accumsan augue. Nullam eu tincidunt metus, at congue eros. Maecenas id pellentesque metus, a posuere tellus. Aliquam vel leo laoreet, hendrerit velit quis, vulputate ante. Donec fringilla turpis ac aliquam accumsan.						', 'Baru'),
(9, 'Ursa Nano Pod Kit ', 180000, 'pod kits', 'c9526b5af6512996bd895c83b5c1fa75.jpg', '							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce placerat nulla a nisl commodo, venenatis rutrum erat convallis. Nunc a justo tellus. Sed molestie odio augue, ac consequat mi aliquam a. Praesent vitae accumsan augue. Nullam eu tincidunt metus, at congue eros. Maecenas id pellentesque metus, a posuere tellus. Aliquam vel leo laoreet, hendrerit velit quis, vulputate ante. Donec fringilla turpis ac aliquam accumsan.						', 'Baru'),
(10, 'Space No. 1 Twist E-liquids', 220000, 'e-liquid', 'e17c4bd3e802b87d48d52c3b7f46e5ec.jpg', '							Space No. 1 by Twist E-Liquids is an out-of-this-world vape that blends ripe strawberry and tropical kiwi flavors. Blast off to a whole new world of flavor with this sweet and tangy ejuice!						', 'Baru');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(104, 'Admin', 'admin@email.com', '$2y$10$K/eQCGFQxCxRfWNXRQzFGuli1UL404J5424mo4PymxppJvT6Zw3KS', '1'),
(118, 'GALIH ADITYA ANANTA', 'user@user.com', '$2y$10$z32mtDQ0Ps9epEdcWd4VCOR2Zsgj47vCtkSjbScuef/wBif1wTUxa', '2'),
(119, 'Galih Aditya Ananta', 'admin@admin.com', '$2y$10$JiJMakHePnBDIU7x3aGx1epHSQ7/FbnWYgP8t4b/kwh.ir6Dih2mi', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_confirm`
--
ALTER TABLE `orders_confirm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `orders_confirm`
--
ALTER TABLE `orders_confirm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
