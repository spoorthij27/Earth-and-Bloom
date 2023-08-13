-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 09:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `product_name`, `product_price`, `product_image`, `quantity`) VALUES
(1, '10 Inch Coir Mulch Mat ', 299, './images/img71.jpg', 500),
(2, '2ft Coir Pole', 199, './images/img72.jpg', 80),
(3, 'Green Artificial Grass', 1499, './images/img73.jpg', 0),
(4, 'Anodised Aluminium Wire for Bonsai Training', 349, './images/img74.jpg', 1000),
(5, 'Moss Stick (Set of 2)', 299, './images/img75.jpg', 100),
(6, 'Coir Grow Mat(set of 20)', 999, 'images/img76.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `quantity`) VALUES
(1, '10 Inch Coir Mulch Mat ', 299, './images/img71.jpg', 5),
(2, '2ft Coir Pole', 199, './images/img72.jpg', 1),
(3, 'Green Artificial Grass', 1499, './images/img73.jpg', 0),
(4, 'Anodised Aluminium Wire for Bonsai Training', 349, './images/img74.jpg', 0),
(5, 'Moss Stick (Set of 2)', 299, './images/img75.jpg', 0),
(6, 'Coir Grow Mat (Set of 20)', 1299, './images/img76.jpg', 0),
(7, 'garden soil', 499, './images/img11.jpg', 0),
(8, 'Cow Manure', 299, './images/img12.jpg', 0),
(9, 'Vermicompost', 199, './images/img13.jpg', 0),
(10, 'Oraginic Manure', 299, './images/img14.jpg', 0),
(11, 'Epsom Salt', 299, './images/img15.jpg', 0),
(12, 'Neem Cake Powder', 399, './images/img16.jpg', 0),
(13, 'Cow Dung Cakes', 399, './images/img17.jpg', 0),
(14, 'Plant Fertilizer Pellets', 399, './images/img18.jpg', 0),
(15, 'Daisy seeds', 99, './images/img31.jpg', 0),
(16, 'Lavender Seeds', 199, './images/img32.jpg', 0),
(17, 'Eggplant Seeds', 129, './images/img33.jpg', 0),
(18, 'Rosemary Seeds', 149, './images/img34.jpg', 0),
(19, 'Basil Seeds', 149, './images/img35.jpg', 0),
(20, 'Carrot Seeds', 59, './images/img36.jpg', 0),
(21, 'Papaya Seeds', 129, './images/img37.jpg', 0),
(22, 'Strawberry Seeds', 159, './images/img38.jpg', 0),
(23, 'black stool', 299, './images/img51.jpg', 0),
(24, 'White Stool', 399, './images/img52.jpg', 0),
(25, 'white stool', 399, './images/img53.jpg', 0),
(26, 'blue stool', 499, './images/img53.jpg', 0),
(27, 'Green stool', 549, './images/img54.jpg', 0),
(28, 'River Pebbles', 359, './images/img61.jpg', 0),
(29, 'Marble Pebbles', 199, './images/img62.jpg', 0),
(30, 'Aquarium Pebbles(red)', 149, './images/img63.jpg', 0),
(31, 'Aquarium Pebbles(yellow)', 149, './images/img64.jpg', 0),
(32, 'Stone sand(red)', 199, './images/img65.jpg', 0),
(33, 'Stone sand(pink)', 199, './images/img66.jpg', 0),
(34, 'Stone sand(yellow)', 199, './images/img67.jpg', 0),
(35, 'granite pebble', 199, './images/img68.jpg', 0),
(36, 'spade shovel', 999, './images/img21.jpg', 0),
(37, 'trowel', 299, './images/img22.jpg', 0),
(38, 'rake', 599, './images/img23.jpg', 0),
(39, 'fork', 199, './images/img24.jpg', 0),
(40, 'watering can', 499, './images/img25.jpg', 0),
(41, 'gardening gloves', 299, './images/img26.jpg', 0),
(42, 'gardening tools set of 3 ', 1349, './images/img27.jpg', 0),
(43, 'gardening tools set of 4', 1499, './images/img28.jpg', 0),
(44, 'Plant Pot(White)', 399, './images/img41.jpg', 0),
(45, 'Plant Pot(Dark Grey)', 399, './images/img42.jpg', 0),
(46, 'Plant Pot(Black)', 399, './images/img43.jpg', 0),
(47, 'Plant Pot(Brown)', 399, './images/img44.jpg', 0),
(48, 'Plant Pot with saucer(White)', 599, './images/img45.jpg', 0),
(49, 'Plant Pot with saucer(Brown)', 599, './images/img46.jpg', 0),
(50, 'flower potted plant', 499, './images/img1.jpg', 0),
(51, 'tomato potted plant', 299, './images/img2.jpg', 0),
(52, 'bamboo potted plant', 599, './images/img3.jpg', 0),
(53, 'aloe veera potted plant', 349, './images/img4.jpg', 0),
(54, 'lemon potted plant', 699, './images/img5.jpg', 0),
(55, 'strawberry potted plant', 299, './images/img6.jpg', 0),
(56, 'artificial potted plant', 299, './images/img7.jpg', 0),
(57, 'artificial potted plant', 299, './images/img8.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fertilizers`
--

CREATE TABLE `fertilizers` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fertilizers`
--

INSERT INTO `fertilizers` (`id`, `product_name`, `product_price`, `product_image`, `quantity`) VALUES
(7, 'garden soil', 499, './images/img11.jpg', 100),
(8, 'Cow Manure', 299, './images/img12.jpg', 0),
(9, 'Vermicompost', 199, './images/img13.jpg', 805),
(10, 'Oraginic Manure', 299, './images/img14.jpg', 700),
(11, 'Epsom Salt', 299, './images/img15.jpg', 800),
(12, 'Neem Cake Powder', 399, './images/img16.jpg', 0),
(13, 'Cow Dung Cakes', 399, './images/img17.jpg', 509),
(14, 'Plant Fertilizer Pellets', 399, './images/img18.jpg', 90);

-- --------------------------------------------------------

--
-- Table structure for table `pebbles`
--

CREATE TABLE `pebbles` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pebbles`
--

INSERT INTO `pebbles` (`id`, `product_name`, `product_price`, `product_image`, `quantity`) VALUES
(28, 'River Pebbles', 359, './images/img61.jpg', 80),
(29, 'Marble Pebbles', 199, './images/img62.jpg', 1000),
(30, 'Aquarium Pebbles(red)', 149, './images/img63.jpg', 900),
(31, 'Aquarium Pebbles(yellow)', 149, './images/img64.jpg', 1500),
(32, 'Stone sand(red)', 199, './images/img65.jpg', 900),
(33, 'Stone sand(pink)', 199, './images/img66.jpg', 1000),
(34, 'Stone sand(yellow)', 199, './images/img67.jpg', 1500),
(35, 'granite pebble', 199, './images/img68.jpg', 800);

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `product_name`, `product_price`, `product_image`, `quantity`) VALUES
(50, 'Flower Potted Plant', 399, './images/img1.jpg', 400),
(51, 'Tomato Potted Plant', 149, './images/img2.jpg', 700),
(52, 'Bamboo Potted Plant', 349, './images/img3.jpg', 0),
(53, 'Aloe vera Potted Plant', 259, './images/img4.jpg', 850),
(54, 'Lemon Potted Plant', 399, './images/img5.jpg', 973),
(55, 'Strawberry Potted Plant', 199, './images/img6.jpg', 128),
(56, 'Artificial Potted Plant', 399, './images/img7.jpg', 97),
(57, 'Artificial Potted Plant', 299, './images/img8.jpg', 765);

-- --------------------------------------------------------

--
-- Table structure for table `pots`
--

CREATE TABLE `pots` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pots`
--

INSERT INTO `pots` (`id`, `product_name`, `product_price`, `product_image`, `quantity`) VALUES
(44, 'Plant Pot(White)', 399, './images/img41.jpg', 1000),
(45, 'Plant Pot(Dark Grey)', 399, './images/img42.jpg', 1288),
(46, 'Plant Pot(Black)', 399, './images/img43.jpg', 976),
(47, 'Plant Pot(Brown)', 399, './images/img44.jpg', 657),
(48, 'Plant Pot with saucer(White)', 599, './images/img45.jpg', 976),
(49, 'Plant Pot with saucer(Brown)', 599, './images/img46.jpg', 489);

-- --------------------------------------------------------

--
-- Table structure for table `seeds`
--

CREATE TABLE `seeds` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seeds`
--

INSERT INTO `seeds` (`id`, `product_name`, `product_price`, `product_image`, `quantity`) VALUES
(15, 'Daisy seeds', 99, './images/img31.jpg', 100),
(16, 'Lavender Seeds', 199, './images/img32.jpg', 0),
(17, 'Eggplant Seeds', 129, './images/img33.jpg', 578),
(18, 'Rosemary Seeds', 149, './images/img34.jpg', 399),
(19, 'Basil Seeds', 149, './images/img35.jpg', 677),
(20, 'Carrot Seeds', 59, './images/img36.jpg', 390),
(21, 'Papaya Seeds', 129, './images/img37.jpg', 850),
(22, 'Strawberry Seeds', 159, './images/img38.jpg', 122);

-- --------------------------------------------------------

--
-- Table structure for table `stools`
--

CREATE TABLE `stools` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stools`
--

INSERT INTO `stools` (`id`, `product_name`, `product_price`, `product_image`, `quantity`) VALUES
(23, 'black stool', 299, './images/img51.jpg', 545),
(24, 'White Stool', 399, './images/img52.jpg', 688),
(25, 'white stool', 399, './images/img53.jpg', 466),
(26, 'blue stool', 499, './images/img53.jpg', 266),
(27, 'Green stool', 549, './images/img54.jpg', 544);

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `product_name`, `product_price`, `product_image`, `quantity`) VALUES
(36, 'Spade Shovel', 999, './images/img21.jpg', 0),
(37, 'Trowel', 299, './images/img22.jpg', 90),
(38, 'Rake', 599, './images/img23.jpg', 59),
(39, 'Fork', 199, './images/img24.jpg', 489),
(40, 'Watering Can', 499, './images/img25.jpg', 99),
(41, 'Garden Gloves', 299, './images/img26.jpg', 567),
(42, 'Gardening Tools Set of 3', 1349, './images/img27.jpg', 34),
(43, 'Gardening Tools Set of 4', 1499, './images/img28.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fertilizers`
--
ALTER TABLE `fertilizers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pebbles`
--
ALTER TABLE `pebbles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pots`
--
ALTER TABLE `pots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seeds`
--
ALTER TABLE `seeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stools`
--
ALTER TABLE `stools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `fertilizers`
--
ALTER TABLE `fertilizers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pebbles`
--
ALTER TABLE `pebbles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `pots`
--
ALTER TABLE `pots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `seeds`
--
ALTER TABLE `seeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `stools`
--
ALTER TABLE `stools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
