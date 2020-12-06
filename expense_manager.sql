-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 12:05 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expense manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `kush-9354752373`
--

CREATE TABLE `kush-9354752373` (
  `Trans Id` int(11) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `Source` varchar(20) NOT NULL,
  `Mode` varchar(20) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kush-9354752373`
--

INSERT INTO `kush-9354752373` (`Trans Id`, `Category`, `Source`, `Mode`, `Amount`) VALUES
(15, 'Income', 'Gifts', 'Cash', 200),
(16, 'Expense', 'Family', 'Cash', 200),
(17, 'Expense', 'Bills', 'Debit Card', 1000),
(18, 'Income', 'Salary', 'Cash', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `name`, `contact`, `email`, `password`) VALUES
(8, 'Kush', '9354752373', 'skushdeep5@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kush-9354752373`
--
ALTER TABLE `kush-9354752373`
  ADD PRIMARY KEY (`Trans Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kush-9354752373`
--
ALTER TABLE `kush-9354752373`
  MODIFY `Trans Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
