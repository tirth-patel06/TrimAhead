-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2025 at 06:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cc_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `analytics`
--

CREATE TABLE `analytics` (
  `id` int(10) NOT NULL,
  `9am_to_11am` int(100) NOT NULL,
  `11am_to_1pm` int(100) NOT NULL,
  `1pm_to_3pm` int(100) NOT NULL,
  `3pm_to_5pm` int(100) NOT NULL,
  `5pm_to_7pm` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `analytics`
--

INSERT INTO `analytics` (`id`, `9am_to_11am`, `11am_to_1pm`, `1pm_to_3pm`, `3pm_to_5pm`, `5pm_to_7pm`) VALUES
(1, 70, 25, 3, 16, 21);

-- --------------------------------------------------------

--
-- Table structure for table `analytics2`
--

CREATE TABLE `analytics2` (
  `id` int(50) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Number_of_Bookings` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `analytics2`
--

INSERT INTO `analytics2` (`id`, `Time`, `Number_of_Bookings`) VALUES
(1, '9am-11am', 30),
(7, '11am-1pm', 21),
(8, '1pm-3pm', 19),
(9, '3pm-5pm', 10),
(10, '5pm-7pm', 25);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `serial_no` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `user_image` longblob NOT NULL,
  `Age` varchar(30) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_Number` varchar(11) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Confirm_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `serial_no` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `shop_image` varchar(100) NOT NULL,
  `Shop_Name` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_Number` bigint(11) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Confirm_Password` varchar(100) NOT NULL,
  `Queue` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `queue`
--

CREATE TABLE `queue` (
  `ID` int(50) NOT NULL,
  `Vendor` varchar(50) NOT NULL,
  `Customer` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `Times` varchar(50) NOT NULL,
  `VendorId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `serial_no` int(50) NOT NULL,
  `ID` varchar(45) NOT NULL,
  `Customer` varchar(45) NOT NULL,
  `Mobile` varchar(45) NOT NULL,
  `VendorId` varchar(45) NOT NULL,
  `VendorName` varchar(45) NOT NULL,
  `Times` varchar(50) NOT NULL,
  `Queuecount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analytics`
--
ALTER TABLE `analytics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analytics2`
--
ALTER TABLE `analytics2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `queue`
--
ALTER TABLE `queue`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analytics`
--
ALTER TABLE `analytics`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `analytics2`
--
ALTER TABLE `analytics2`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `serial_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `serial_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `queue`
--
ALTER TABLE `queue`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `serial_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
