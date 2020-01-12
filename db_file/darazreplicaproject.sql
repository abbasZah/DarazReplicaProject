-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2020 at 06:34 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darazreplicaproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `full_name`) VALUES
('a', 'a', 'Abbas Zaheer');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pro_id`) VALUES
(26, 'b', 73),
(27, 'b', 77),
(28, 'b', 74),
(29, 'b', 77);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1001, 'Electronic Devices'),
(1002, 'Electronic Accessories'),
(1003, 'TV & Home Appliances'),
(1004, 'Health & Beauty'),
(1005, 'Babies & Toys'),
(1006, 'Groceries & Pets'),
(1007, 'Home & Lifestyle'),
(1008, 'Womens Fashion'),
(1009, 'Mens Fashion'),
(1010, 'Watches, Bags & Jewelery'),
(1011, 'Sports & Outdoor'),
(1012, 'Automotive & Motorbike');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `quantity`, `image_path`, `category`) VALUES
(72, 'Apple iPhone X - 3GB RAM - 256GB ROM - Dual Camera - 5.8 Display - Official Warranty', 200000, 15, 'images/pro_images/esdfdsf.jpg', 1001),
(73, 'Black Winter thicken Warm Plain Zipper Hoodie Sweatshirt Zipper Street Wear Hoodies Sweatshirts Fleece Jacket Coat Fashion Oversize Tracksuit For Men Boys', 600, 36, 'images/pro_images/asdsadsad.JPG', 1001),
(74, 'Premium Quality - New Collection Black Mens or Womens Stainless Steel and Leather Quartz Watch', 600, 25, 'images/pro_images/Capture.JPG', 1010),
(75, 'Computer Xone | D18 Bluetooth Smart Watch Men Blood Pressure Round Smartwatch Women Watch Waterproof Sport Tracker WhatsApp For Android Ios | Black', 6000, 25, 'images/pro_images/sadsd.JPG', 1010),
(76, 'Best Power bank ever Samsung Power bank 2600 mAh for all mobile phones', 3600, 25, 'images/pro_images/sadsad.JPG', 1002),
(77, 'Kingston Digital 32GB USB Data Traveler 50, 6-Months Warranty', 3600, 52, 'images/pro_images/sadsads.JPG', 1002),
(78, 'Handfree White Samsung Blutooth', 360, 26, 'images/pro_images/sdsd.JPG', 1002),
(79, 'Ultra Slim Alluma Wallet', 260, 55, 'images/pro_images/Wallet.JPG', 1009),
(80, 'Apple iPhone X - 3GB RAM - 256GB ROM - Dual Camera - 5.8 Display - Official Warranty', 52200, 52, 'images/pro_images/esdfdsf.jpg', 1001),
(173, 'Black Winter thicken Warm Plain Zipper Hoodie Sweatshirt Zipper Street Wear Hoodies Sweatshirts Fleece Jacket Coat Fashion Oversize Tracksuit For Men Boys', 600, 36, 'images/pro_images/asdsadsad.JPG', 1001),
(174, 'Premium Quality - New Collection Black Mens or Womens Stainless Steel and Leather Quartz Watch', 600, 25, 'images/pro_images/Capture.JPG', 1010),
(175, 'Computer Xone | D18 Bluetooth Smart Watch Men Blood Pressure Round Smartwatch Women Watch Waterproof Sport Tracker WhatsApp For Android Ios | Black', 6000, 25, 'images/pro_images/sadsd.JPG', 1010),
(176, 'Best Power bank ever Samsung Power bank 2600 mAh for all mobile phones', 3600, 25, 'images/pro_images/sadsad.JPG', 1002),
(177, 'Kingston Digital 32GB USB Data Traveler 50, 6-Months Warranty', 3600, 52, 'images/pro_images/sadsads.JPG', 1002),
(179, 'Ultra Slim Alluma Wallet', 260, 55, 'images/pro_images/Wallet.JPG', 1009),
(180, 'Apple iPhone X - 3GB RAM - 256GB ROM - Dual Camera - 5.8 Display - Official Warranty', 52200, 52, 'images/pro_images/esdfdsf.jpg', 1001),
(273, 'Black Winter thicken Warm Plain Zipper Hoodie Sweatshirt Zipper Street Wear Hoodies Sweatshirts Fleece Jacket Coat Fashion Oversize Tracksuit For Men Boys', 600, 36, 'images/pro_images/asdsadsad.JPG', 1001),
(274, 'Premium Quality - New Collection Black Mens or Womens Stainless Steel and Leather Quartz Watch', 600, 25, 'images/pro_images/Capture.JPG', 1010),
(275, 'Computer Xone | D18 Bluetooth Smart Watch Men Blood Pressure Round Smartwatch Women Watch Waterproof Sport Tracker WhatsApp For Android Ios | Black', 6000, 25, 'images/pro_images/sadsd.JPG', 1010),
(276, 'Best Power bank ever Samsung Power bank 2600 mAh for all mobile phones', 3600, 25, 'images/pro_images/sadsad.JPG', 1002),
(277, 'Kingston Digital 32GB USB Data Traveler 50, 6-Months Warranty', 3600, 52, 'images/pro_images/sadsads.JPG', 1002),
(278, 'Handfree White Samsung Blutooth', 360, 26, 'images/pro_images/sdsd.JPG', 1002),
(279, 'Ultra Slim Alluma Wallet', 260, 55, 'images/pro_images/Wallet.JPG', 1009),
(280, 'Apple iPhone X - 3GB RAM - 256GB ROM - Dual Camera - 5.8 Display - Official Warranty', 52200, 52, 'images/pro_images/esdfdsf.jpg', 1001),
(373, 'Black Winter thicken Warm Plain Zipper Hoodie Sweatshirt Zipper Street Wear Hoodies Sweatshirts Fleece Jacket Coat Fashion Oversize Tracksuit For Men Boys', 600, 36, 'images/pro_images/asdsadsad.JPG', 1001),
(374, 'Premium Quality - New Collection Black Mens or Womens Stainless Steel and Leather Quartz Watch', 600, 25, 'images/pro_images/Capture.JPG', 1010),
(375, 'Computer Xone | D18 Bluetooth Smart Watch Men Blood Pressure Round Smartwatch Women Watch Waterproof Sport Tracker WhatsApp For Android Ios | Black', 6000, 25, 'images/pro_images/sadsd.JPG', 1010),
(376, 'Best Power bank ever Samsung Power bank 2600 mAh for all mobile phones', 3600, 25, 'images/pro_images/sadsad.JPG', 1002),
(377, 'Kingston Digital 32GB USB Data Traveler 50, 6-Months Warranty', 3600, 52, 'images/pro_images/sadsads.JPG', 1002),
(378, 'Handfree White Samsung Blutooth', 360, 26, 'images/pro_images/sdsd.JPG', 1002),
(379, 'Ultra Slim Alluma Wallet', 260, 55, 'images/pro_images/Wallet.JPG', 1009),
(380, 'Apple iPhone X - 3GB RAM - 256GB ROM - Dual Camera - 5.8 Display - Official Warranty', 52200, 52, 'images/pro_images/esdfdsf.jpg', 1001);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`, `full_name`, `gender`, `email`, `birthday`) VALUES
('b', 'b', 'Abbas Ali', 'male', 'abbas@gmail.com', '2020-01-03'),
('c', 'c', 'cddfdf', 'female', 'abc@gmail.com', '2020-01-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_pro_id` (`pro_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category` (`category`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=381;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_pro_id` FOREIGN KEY (`pro_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
