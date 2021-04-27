-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 11:32 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `discount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `price`, `discount`) VALUES
(8, 'black-t-shirt.jpeg', 'black T-Shirt', 700, 450),
(9, 'card1.jpeg', 'White T-Shirt', 700, 380),
(10, 'card1.jpeg', 'Gents shirt', 1000, 500),
(11, 'card2.jpeg', 'Gents shirt', 1000, 500),
(12, 'card3.jpeg', 'Gents shirt', 1000, 300),
(13, 'yellow-t-shirt.jpeg', 'yellow T-shirt', 1000, 480),
(14, 'red-t-shirt.jpeg', 'Red T-shirt', 1000, 300),
(15, 'black-t-shirt.jpeg', 'Black T-shirt', 1000, 500),
(16, 'red-t-shirt.jpeg', 'Red T-shirt', 1000, 300),
(17, 'black-t-shirt.jpeg', 'Black T-shirt', 1000, 300),
(18, 'jeans-pent1.jpg', 'Geans Pent', 2000, 300),
(20, 'jeans-pent2.jpg', 'Geans pent', 2000, 350),
(21, 'jeans-pent3.jpg', 'Geans pent', 2000, 450),
(22, 'jeans-pent1.jpg', 'Geans pent', 2300, 300),
(23, 'jeans-pent2.jpg', 'Geans pent', 2500, 400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
