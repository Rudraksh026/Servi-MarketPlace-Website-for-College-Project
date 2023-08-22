-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 08:15 PM
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
-- Database: `user_detail`
--

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `sno` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(70) NOT NULL,
  `gender` char(1) NOT NULL,
  `number` bigint(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `service` varchar(70) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(70) NOT NULL,
  `number` bigint(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `created on` datetime NOT NULL DEFAULT current_timestamp(),
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`sno`, `name`, `birthday`, `gender`, `email`, `number`, `password`, `created on`, `location`) VALUES
(2, 'Rudraksh', '2005-09-26', 'M', 'rudrakshmishra026@gmail.com', 8755443383, 'rm 260905', '2023-08-21 23:42:30', 'Dehradun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
