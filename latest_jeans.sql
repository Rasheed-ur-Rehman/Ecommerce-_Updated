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
-- Table structure for table `latest jeans`
--

CREATE TABLE `latest jeans` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latest jeans`
--

INSERT INTO `latest jeans` (`id`, `image`, `name`, `price`, `discount`) VALUES
(1, 'jeans-pent3.jpg', 'Geans Pent', '3000', '1200'),
(2, 'Mens-Chinos.jpg', 'Geans Pent', '3000', '800'),
(3, 'jeans-pent2.jpg', 'Geans Pent', '3000', '1300'),
(4, 'jeans-pent3.jpg', 'Geans Pent', '3000', '1100'),
(5, 'jeans-pent1.jpg', 'Geans Pent', '2500', '650');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `latest jeans`
--
ALTER TABLE `latest jeans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `latest jeans`
--
ALTER TABLE `latest jeans`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
