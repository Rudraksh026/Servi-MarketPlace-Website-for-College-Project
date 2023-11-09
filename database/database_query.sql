-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 05:13 PM
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
-- Table structure for table `locate`
--

CREATE TABLE `locate` (
  `locationName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locate`
--

INSERT INTO `locate` (`locationName`) VALUES
('Agrakhal'),
('Almora'),
('Auli'),
('Badrinath'),
('Chamoli'),
('Champawat'),
('Chopta'),
('Dehradun'),
('Dhanaulti'),
('Gaja'),
('Haridwar'),
('Kedarnath'),
('Lansdowne'),
('Mukteshwar'),
('Mussoorie'),
('Nainital'),
('NarendraNagar'),
('Pauri'),
('Pithoragarh'),
('Raipur'),
('Raiwala'),
('Ranikhet'),
('Ranipokhari'),
('Rishikesh'),
('Rudraprayag'),
('Shyampur'),
('Srinagar'),
('Tehri'),
('Uttarkhasi');

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
  `image_url` text NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`sno`, `name`, `email`, `gender`, `number`, `location`, `service`, `amount`, `image_url`, `active`) VALUES
(1, 'Rohit', 'rohit12@gmail.com', 'M', 5468945643, 'Raiwala', 'Freelancer', 5000, 'avatar1.jpg', 1),
(2, 'Rahul', 'rahul12@gmail.com', 'M', 8778643125, 'Dehradun', 'Electrician', 7000, 'avatar3.jpeg', 1),
(3, 'Rakesh ', 'raki83@gmail.com', 'M', 8456123942, 'Rishikesh', 'Developer', 1000, 'avatar1.jpg', 1),
(4, 'Suman', 'sagar966@gmail.com', 'F', 7896543278, 'NarendraNagar ', 'Editor', 5000, 'avatar2.png', 0),
(5, 'Ajeet', 'ajt77@gmail.com', 'M', 5482645193, 'Chamoli', 'Carpenter', 3000, 'avatar3.jpeg', 1),
(6, 'Pankaj ', 'pankaj496@gmail.com', 'M', 4852639752, 'Srinagar', 'Designer', 7930, 'avatar1.jpg', 0),
(7, 'Ayaan', 'ayaan779@gmail.com', 'M', 1584236985, 'Rudraprayag', 'Freelancer', 5000, 'avatar1.jpg', 0),
(8, 'Neha', 'neha486@gmail.com', 'F', 4785639852, 'Haridwar', 'Electrician', 9000, 'avatar4.jpeg', 1),
(9, 'Khushi ', 'Khushirwt726@gmail.com', 'F', 9581205203, 'Ranipokhari', 'Developer', 4000, 'avatar2.png', 1),
(10, 'Neha', 'neha486@gmail.com', 'F', 4785639852, 'Haridwar', 'Electrician', 9000, 'avatar4.jpeg', 1),
(11, 'Khushi ', 'Khushirwt726@gmail.com', 'F', 9581205203, 'Ranipokhari', 'Developer', 4000, 'avatar2.png', 1),
(12, 'Mohit ', 'mohit565@gmail.com', 'M', 8025309072, 'Haridwar', 'Editor', 6000, 'avatar3.jpeg', 0),
(13, 'Deepak ', 'dpk8263@gmail.com', 'M', 7505800534, 'Raiwala', 'Carpenter', 5000, 'avatar1.jpg', 1),
(14, 'Ajay ', 'ajay7162@gmail.com', 'M', 5493428120, 'Dehradun', 'Designer', 5000, 'avatar1.jpg', 1),
(15, 'Himanshu ', 'himan23@gmail.com', 'M', 8052401035, 'Rishikesh', 'Carpenter', 7000, 'avatar3.jpeg', 0),
(16, 'Aman', 'Aman@gmail.com', 'M', 9456835205, 'NarendraNagar', 'Designer', 1000, 'avatar1.jpg', 1),
(17, 'Ankit ', 'ankit23@gmail.com', 'M', 4720569857, 'Chamoli', 'Freelancer', 5000, 'avatar3.jpeg', 1),
(18, 'Rajiv', 'rajiv523@gmail.com', 'M', 4208523725, 'Srinagar', 'Electrician', 3500, 'avatar3.jpeg', 0),
(19, 'Sagar', 'sagar94@gmail.com', 'M', 8459620753, 'Rudraprayag', 'Developer', 7930, 'avatar3.jpeg', 1),
(20, 'Aakash', 'ankit25@gmail.com', 'M', 7896543278, 'Haridwar', 'Editor', 50000, 'avatar3.jpeg', 1),
(21, 'Sameer', 'sameer996@gmail.com', 'M', 7854963528, 'Ranipokhari', 'Carpenter', 9000, 'avatar3.jpeg', 1),
(22, 'Amit', 'amit027@gmail.com', 'M', 5285587698, 'Haridwar', 'Designer', 4000, 'avatar1.jpg', 0),
(23, 'Manoj', 'manoj18@gmail.com', 'M', 7778695037, 'Shyampur', 'Freelancer', 6000, 'avatar3.jpeg', 1),
(24, 'Shubham', 'shubham4@gmail.com', 'M', 6659755483, 'Agrakhal', 'Electrician', 5000, 'avatar3.jpeg', 1),
(25, 'Virat', 'virat30@gmail.com', 'M', 7898787962, 'Raiwala', 'Developer', 5700, 'avatar1.jpg', 0),
(26, 'Abhinav', 'abhinav31@gmail.com', 'M', 3856987524, 'Dehradun', 'Editor', 7000, 'avatar3.jpeg', 1),
(27, 'Prabhakar', 'prabhakar78@gmail.com', 'M', 8596767690, 'Rishikesh', 'Carpenter', 1000, 'avatar3.jpeg', 1),
(28, 'Rishabh', 'rishu33@gmail.com', 'M', 8590902317, 'NarendraNagar', 'Freelancer', 5000, 'avatar1.jpg', 1),
(29, 'Shobhit', 'shobhit34@gmail.com', 'M', 6143805972, 'Chamoli', 'Electrician', 3000, 'avatar3.jpeg', 0),
(30, 'Rajendra', 'rajendr5@gmail.com', 'M', 9467582035, 'Srinagar', 'Developer', 7930, 'avatar1.jpg', 0),
(31, 'Harendra', 'harendra76@gmail.com', 'M', 4822434952, 'Rudraprayag', 'Editor', 5000, 'avatar1.jpg', 1),
(32, 'Prem', 'pre3@gmail.com', 'M', 8296882203, 'Haridwar', 'Carpenter', 9000, 'avatar3.jpeg', 1),
(33, 'Bhupendra', 'bhupendra38@gmail.com', 'M', 7552036201, 'Ranipokhari', 'Designer', 4500, 'avatar3.jpeg', 1),
(34, 'Kalpana', 'kalpana39@gmail.com', 'F', 4854896401, 'Haridwar', 'Freelancer', 6000, 'avatar4.jpeg', 0),
(35, 'Nitish', 'nitish0@gmail.com', 'M', 9424204015, 'Shyampur', 'Electrician', 5000, 'avatar1.jpg', 0),
(36, 'Rita', 'rita89@gmail.com', 'F', 9464345084, 'Agrakhal', 'Developer', 7800, 'avatar4.jpeg', 0),
(37, 'Sheetal', 'sheetal7@gmail.com', 'F', 7955886634, 'Haridwar ', 'Editor', 5000, 'avatar2.jpeg', 0),
(38, 'Nitin', 'nitin94@gmail.com', 'M', 9411349754, 'Tehri ', 'Carpenter ', 9000, 'avatar1.jpg', 1),
(39, 'Mahesh', 'mahesh098@gmail.com', 'M', 9440340762, 'Nanital ', 'Developer ', 12000, 'avatar3.jpeg', 1),
(40, 'Ankit', 'anki654@gmail.com', 'M', 9712665432, 'Gaja', 'Electrician ', 8000, 'avatar3.jpeg', 1),
(41, 'Anurag', 'anurag01@gmail.com', 'M', 9991432780, 'Dehradun ', 'Designer', 12000, 'avatar3.jpeg', 1);

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
(5, 'Rudraksh', '2005-09-26', 'M', 'ccit1234@outlook.com', 12345654, 'rm 260905', '2023-08-24 20:06:14', 'Dehradun'),
(2, 'Rudraksh', '2005-09-26', 'M', 'rudrakshmishra026@gmail.com', 8755443383, 'rm 260905', '2023-08-21 23:42:30', 'Rishikesh'),
(3, 'chaman', '1957-02-28', 'M', 'sudarshanmishra92007@gmail.com', 8126882800, '123456', '2023-08-23 16:21:52', 'Haridwar'),
(6, 'Rudraksh', '2005-09-26', 'M', 'vsudarshan94@gmail', 1654, '12345', '2023-09-06 19:06:12', 'NarendraNagar'),
(4, 'Rudraksh', '2007-07-07', 'M', 'vsudarshan94@gmail.com', 12345, '12345', '2023-08-23 16:22:46', 'Agrakhal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locate`
--
ALTER TABLE `locate`
  ADD PRIMARY KEY (`locationName`);

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
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
