-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2020 at 05:02 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstorecreator`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinventory`
--

CREATE TABLE `bookinventory` (
  `bookId` int(10) NOT NULL,
  `bookName` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinventory`
--

INSERT INTO `bookinventory` (`bookId`, `bookName`, `quantity`, `image`) VALUES
(1, 'Captain Canuck', 4, 'image1.jpg'),
(2, 'Lethargic Lad', 4, 'image2.jpg'),
(3, 'Underwater', 7, 'image3.jpg'),
(4, 'Yummy Fur', 5, 'image4.jpg'),
(5, 'Night Life', 7, 'image5.jpg'),
(6, 'Drawn and Quarterly', 5, 'image6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Payment` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `FirstName`, `LastName`, `ProductId`, `Payment`) VALUES
(1, 'test', 'test', 5, ''),
(2, 'test1', 'test1', 1, ''),
(3, 'qw', 'qw', 1, ''),
(4, '1', 'w', 1, ''),
(5, 'final', 'final', 1, ''),
(6, 'hlo', 'hlo', 1, ''),
(7, 'test123', 'test123', 1, ''),
(8, 'erfwer', 'qweqwe', 1, ''),
(9, 'we', 'we', 1, ''),
(10, 'asdfasef', 'waerwer', 1, ''),
(11, 'wqeq', 'qweqe', 1, ''),
(12, 'qqq', 'qqqq', 0, ''),
(13, 'testplz', 'testplz', 0, ''),
(14, 'test', 'testmmmmmmmmmmmm', 4, ''),
(15, 're', 're', 4, ''),
(16, ',.m.', 'kljlkj', 1, ''),
(17, 'test', 'testfinal', 1, ''),
(18, 'test', 'test', 4, ''),
(19, 'test', 'test44', 5, ''),
(20, '', 'weqw', 5, ''),
(21, '', 'ewrwr', 5, ''),
(22, '', 'test', 5, ''),
(23, '', 'tesssss', 2, ''),
(24, '', 'erwer', 4, ''),
(25, 'test', 'test', 4, ''),
(26, 'testfinal', 'testfinal', 6, 'debit'),
(27, 'test', 'testuu', 6, 'debit'),
(28, 'test', 'test', 6, 'credit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinventory`
--
ALTER TABLE `bookinventory`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinventory`
--
ALTER TABLE `bookinventory`
  MODIFY `bookId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
