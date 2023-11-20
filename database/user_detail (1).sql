-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 06:59 PM
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
('AgraKhal'),
('Chamba'),
('Devprayag'),
('Dhalwala'),
('Dhanaulti'),
('Fakot'),
('Gaja'),
('Gangi'),
('Ghansali'),
('Hindolakhal'),
('Kanatal'),
('Kirtinagar'),
('Makhlanu'),
('Muni Ki Reti'),
('NarendraNagar'),
('New Tehri');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceName`) VALUES
('Carpenter'),
('Designer'),
('Developer'),
('Editor'),
('Electrician'),
('Freelancer'),
('Plumber');

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
(1, 'Rohit', 'rohit12@gmail.com', 'M', 5468945643, 'Chamba', 'Freelancer', 5000, 'avatar1.jpg', 1),
(2, 'Rahul', 'rahul12@gmail.com', 'M', 8778643125, 'Kanatal', 'Electrician', 7000, 'avatar3.jpeg', 1),
(3, 'Rakesh ', 'raki83@gmail.com', 'M', 8456123942, 'Kritinagar', 'Developer', 1000, 'avatar1.jpg', 1),
(4, 'Suman', 'sagar966@gmail.com', 'F', 7896543278, 'Devprayag', 'Editor', 5000, 'avatar2.png', 0),
(5, 'Ajeet', 'ajt77@gmail.com', 'M', 5482645193, 'Dhalwala', 'Carpenter', 3000, 'avatar3.jpeg', 1),
(6, 'Pankaj ', 'pankaj496@gmail.com', 'M', 4852639752, 'Dhanaulti', 'Designer', 7930, 'avatar1.jpg', 0),
(7, 'Ayaan', 'ayaan779@gmail.com', 'M', 1584236985, 'Makhlanu', 'Freelancer', 5000, 'avatar1.jpg', 0),
(8, 'Neha', 'neha486@gmail.com', 'F', 4785639852, 'Muni Ki Reti', 'Electrician', 9000, 'avatar4.jpeg', 1),
(9, 'Khushi ', 'Khushirwt726@gmail.com', 'F', 9581205203, 'Gangi', 'Developer', 4000, 'avatar2.png', 1),
(10, 'Neha', 'neha486@gmail.com', 'F', 4785639852, 'Ghansali', 'Electrician', 9000, 'avatar4.jpeg', 1),
(11, 'Khushi ', 'Khushirwt726@gmail.com', 'F', 9581205203, 'NarendraNagar', 'Developer', 4000, 'avatar2.png', 1),
(12, 'Mohit ', 'mohit565@gmail.com', 'M', 8025309072, 'New Tehri', 'Editor', 6000, 'avatar3.jpeg', 0),
(13, 'Deepak ', 'dpk8263@gmail.com', 'M', 7505800534, 'Gaja', 'Carpenter', 5000, 'avatar1.jpg', 1),
(14, 'Ajay ', 'ajay7162@gmail.com', 'M', 5493428120, 'Fakot', 'Designer', 5000, 'avatar1.jpg', 1),
(15, 'Himanshu ', 'himan23@gmail.com', 'M', 8052401035, 'Hindolakhal', 'Carpenter', 7000, 'avatar3.jpeg', 0),
(16, 'Aman', 'Aman@gmail.com', 'M', 9456835205, 'NarendraNagar', 'Designer', 1000, 'avatar1.jpg', 1),
(17, 'Ankit ', 'ankit23@gmail.com', 'M', 4720569857, 'Chamba', 'Freelancer', 5000, 'avatar3.jpeg', 1),
(18, 'Rajiv', 'rajiv523@gmail.com', 'M', 4208523725, 'Kanatal', 'Electrician', 3500, 'avatar3.jpeg', 0),
(19, 'Sagar', 'sagar94@gmail.com', 'M', 8459620753, 'Kirtinagar', 'Developer', 7930, 'avatar3.jpeg', 1),
(20, 'Aakash', 'ankit25@gmail.com', 'M', 7896543278, 'Devprayag', 'Editor', 50000, 'avatar3.jpeg', 1),
(21, 'Sameer', 'sameer996@gmail.com', 'M', 7854963528, 'Dhalwala', 'Carpenter', 9000, 'avatar3.jpeg', 1),
(22, 'Amit', 'amit027@gmail.com', 'M', 5285587698, 'Dhanaulti', 'Designer', 4000, 'avatar1.jpg', 0),
(23, 'Manoj', 'manoj18@gmail.com', 'M', 7778695037, 'Makhlanu', 'Freelancer', 6000, 'avatar3.jpeg', 1),
(24, 'Shubham', 'shubham4@gmail.com', 'M', 6659755483, 'Agrakhal', 'Electrician', 5000, 'avatar3.jpeg', 1),
(25, 'Virat', 'virat30@gmail.com', 'M', 7898787962, 'Muni Ki Reti', 'Developer', 5700, 'avatar1.jpg', 0),
(26, 'Abhinav', 'abhinav31@gmail.com', 'M', 3856987524, 'Gangi', 'Editor', 7000, 'avatar3.jpeg', 1),
(27, 'Prabhakar', 'prabhakar78@gmail.com', 'M', 8596767690, 'Ghansali', 'Carpenter', 1000, 'avatar3.jpeg', 1),
(28, 'Rishabh', 'rishu33@gmail.com', 'M', 8590902317, 'NarendraNagar', 'Freelancer', 5000, 'avatar1.jpg', 1),
(29, 'Shobhit', 'shobhit34@gmail.com', 'M', 6143805972, 'New Tehri', 'Electrician', 3000, 'avatar3.jpeg', 0),
(30, 'Rajendra', 'rajendr5@gmail.com', 'M', 9467582035, 'Gaja', 'Developer', 7930, 'avatar1.jpg', 0),
(31, 'Harendra', 'harendra76@gmail.com', 'M', 4822434952, 'Fakot', 'Editor', 5000, 'avatar1.jpg', 1),
(32, 'Prem', 'pre3@gmail.com', 'M', 8296882203, 'Hindolakhal', 'Carpenter', 9000, 'avatar3.jpeg', 1),
(33, 'Bhupendra', 'bhupendra38@gmail.com', 'M', 7552036201, 'Agrakhal', 'Designer', 4500, 'avatar3.jpeg', 1),
(34, 'Kalpana', 'kalpana39@gmail.com', 'F', 4854896401, 'Chamba', 'Freelancer', 6000, 'avatar4.jpeg', 0),
(35, 'Nitish', 'nitish0@gmail.com', 'M', 9424204015, 'kanatal', 'Electrician', 5000, 'avatar1.jpg', 0),
(36, 'Rita', 'rita89@gmail.com', 'F', 9464345084, 'Agrakhal', 'Developer', 7800, 'avatar4.jpeg', 0),
(37, 'Sheetal', 'sheetal7@gmail.com', 'F', 7955886634, 'Kritinagar', 'Editor', 5000, 'avatar2.jpeg', 0),
(38, 'Nitin', 'nitin94@gmail.com', 'M', 9411349754, 'New Tehri', 'Developer', 9000, 'avatar1.jpg', 1),
(39, 'Mahesh', 'mahesh098@gmail.com', 'M', 9440340762, 'Devprayag', 'Plumber', 12000, 'avatar3.jpeg', 1),
(40, 'Anurag', 'anurag01@gmail.com', 'M', 9991432780, 'Dhalwala', 'Designer', 12000, 'avatar3.jpeg', 1),
(41, 'Robin', 'robin4566@gmail.com', 'M', 6526453478, 'Gaja', 'Plumber', 5000, 'avatar1.jpg', 1),
(42, 'Amisha', 'amishabhtt1234@gmail.com', 'F', 7562615955, 'Gaja', 'Developer', 15000, 'avatar2.png', 1),
(43, 'Anuj', 'aunjsingh76@gmail.com', 'M', 9996548710, 'Makhlanu', 'Designer', 15000, 'avatar1.jpg', 0),
(44, 'Vivek', 'vivek35@gmail.com', 'M', 6397584907, 'Muni Ki Reti', 'Electrician', 12000, 'avatar3.jpeg', 0),
(45, 'Robin', 'robin66@gmail.com', 'M', 7042829434, 'New Tehri', 'Developer', 11000, 'avatar1.jpg', 0),
(46, 'Vasu', 'vasu1212@gmail.com', 'M', 7082099406, 'Gangi', 'Developer', 15000, 'avatar3.jpeg', 0),
(47, 'Vansh', 'vansh86@gmail.com', 'M', 7455933278, 'Agrakhal', 'Plumber', 5000, 'avatar3.jpeg', 0),
(48, 'Rudra', 'rudra985@gmail.com', 'M', 7500371996, 'Gaja', 'Developer', 14999, 'avatar1.jpg', 1),
(49, 'Shivang', 'shivangsingh11@gmail.com', 'M', 7533959875, 'Fakot', 'Electrician', 8000, 'avatar1.jpg', 0),
(50, 'Ruhi', 'ruhi632@gmail.com', 'F', 7815048539, 'Fakot', 'Editor', 15000, 'avatar4.jpeg', 1),
(51, 'Trisha', 'Trisha678@gmail.com', 'F', 7895665455, 'Gangi', 'Developer', 14000, 'avatar4.jpeg', 0),
(52, 'Tanushi', 'tanu1234@gmail.com', 'F', 7983896510, 'Ghansali', 'Developer ', 13000, 'avatar2.png', 0),
(53, 'Avni', 'avni43@gmail.com', 'F', 8171067728, 'NarendraNagar', 'Editor ', 15000, 'avatar4.jpeg', 0),
(54, 'Ahana', 'ahana009@gmail.com', 'F', 8453194780, 'New Tehri', 'Tutor', 12000, 'avatar4.jpeg', 1),
(55, 'Prisha', 'prisha550@gmail.com', 'F', 9027418005, 'Gaja', 'Dance_academy ', 15000, 'avatar4.jpeg', 0),
(56, 'Twinkal', 'twinkal54@gmail.com', 'F', 9105121911, 'Fakot', 'Music_academy ', 8000, 'avatar2.png', 1),
(57, 'Sushant', 'sushantsingh@gmail.com', 'M', 9149073059, 'Hindolakhal', 'Financial ', 13000, 'avatar3.jpeg', 0),
(58, 'Varun', 'varun347@gmail.com', 'M', 9326583941, 'AgraKhal', 'LegalWork', 10000, 'avatar3.jpeg', 1),
(59, 'Manak', 'manaksingh32@gmail.com', 'M', 8218841823, 'Chamba', 'Developer ', 12000, 'avatar1.jpg', 0),
(60, 'Jitendar', 'jitendar357@gmail.com', 'M', 9369973452, 'Kanatal', 'Financial ', 8000, 'avatar3.jpeg', 0),
(61, 'Raghav', 'raghav4455@gmail.com', 'M', 9634726794, 'Kirtinagar', 'Editor ', 14000, 'avatar3.jpeg', 1),
(62, 'Switi', 'switi5005@gmail.com', 'F', 8273705082, 'Devprayag', 'Dance_academy ', 7000, 'avatar4.jpeg', 0),
(63, 'Rudraksh ', 'rudrakshmishra026@gmail.com', 'M', 8755443383, 'Dhalwala', 'Developer', 12000, 'IMG-654d0b3c0e3310.59571109.jpg', 1),
(64, 'Aditya', 'aditya28@gmail.com', 'M', 6006589535, 'Dhanaulti', 'Editor', 14797, 'avatar1.jpg', 1),
(65, 'Ayushi', 'ayushi123@gmail.com', 'F', 8589882822, 'Makhlanu', 'Electrician', 10554, 'avatar2.png', 1),
(66, 'Numan', 'numan28@gmail.com', 'M', 6397227901, 'Muni Ki Reti', 'Plumber', 12471, 'avatar3.jpeg', 0),
(67, 'Neha', 'neha12@gmail.com', 'F', 9744281329, 'NarendraNagar', 'Freelancer', 12058, 'avatar4.jpeg', 1),
(68, 'Mayank', 'mayank25@gmail.com', 'M', 8318495848, 'NarendraNagar', 'Tutor', 13140, 'avatar3.jpeg', 0),
(69, 'Abhishek', 'abhishek10@gmil.com', 'M', 7254623907, 'AgraKhal', 'Developer', 12438, 'avatar1.jpg', 1),
(70, 'Sarthek', 'sharthek321@gmail.com', 'M', 7777003944, 'Agrakhal', 'Developer', 11448, 'avatar3.jpeg', 0),
(71, 'Astha', 'astha264@gmail.com', 'F', 9282433119, 'Fakot', 'Developer', 9056, 'avatar4.jpeg', 1),
(72, 'Sarita', 'sarita22@gmail.com', 'F', 9437609316, 'Gaja', 'Medical', 10197, 'avatar2.png', 0),
(73, 'Akash', 'akash@gmail.com', 'M', 7661427838, 'New Tehri', 'Designer', 6850, 'avatar1.jpg', 0),
(74, 'Neeraj', 'neeraj62@gmail.com', 'M', 8481071560, 'NarendraNagar', 'Tutor', 7343, 'avatar3.jpeg', 0),
(75, 'Rudrakesh', 'rudrakseh25@gmail.com', 'M', 7187825961, 'New Tehri', 'Sport_Academy', 7167, 'avatar3.jpeg', 0),
(76, 'Preeti', 'preeti31@gmail.com', 'F', 6606625251, 'Gangi', 'Medical', 14852, 'avatar4.jpeg', 0),
(77, 'Akriti', 'akriti10@gmail.com', 'F', 7517496644, 'Gangi', 'Music_Academy', 9574, 'avatar2.png', 0),
(78, 'Akshit', 'akshit15@gmail.com', 'M', 6779629714, 'New Tehri', 'Carpenter', 13504, 'avatar1.jpg', 0),
(79, 'Sunil', 'sunil89@gmail.com', 'M', 8253897847, 'NarendraNagar', 'Delivery', 11815, 'avatar3.jpeg', 0),
(80, 'Sujata', 'sujata63@gmail.com', 'F', 7557523679, 'Chamba', 'Editior', 6117, 'avatar4.jpeg', 0),
(81, 'Surej', 'surej47@gmail.com', 'M', 6676030300, 'Ghansali', 'Insurance', 10906, 'avatar3.jpeg', 0),
(82, 'Rohit', 'rohit32@gmail.com', 'M', 8136001239, 'Gaja', 'Legal_work', 6338, 'avatar3.jpeg', 1),
(83, 'Anjay', 'anjay20@gmail.com', 'M', 9502248443, 'NarendraNagar', 'Financial_services', 13875, 'avatar1.jpg', 1),
(84, 'Shivam', 'shivam80@gmail.com', 'M', 8480302604, 'Kanatal', 'Constructor', 14582, 'avatar3.jpeg', 0),
(85, 'Shvangi', 'shvangi11@gmail.com', 'F', 6433591185, 'Kritinagar', 'Travel_agency', 11064, 'avatar4.jpeg', 0),
(86, 'Pooja', 'pooja24@gmail.com', 'F', 9706466670, 'Devprayag', 'Designer', 6271, 'avatar2.png', 1),
(87, 'Rekha', 'rekha22@gmail.com', 'F', 7484228336, 'Dhalwala', 'Electrician', 13367, 'avatar4.jpeg', 0),
(88, 'Rithik', 'rithik30@gmail.com', 'M', 6816150068, 'Dhanaulti', 'Constructor', 12569, 'avatar3.jpeg', 1),
(89, 'Sumar', 'sumar54@gmail.com', 'M', 6174760239, 'Makhlanu', 'Carpenter', 6945, 'avatar1.jpg', 0),
(90, 'Sumit', 'sumitk@gmail.com', 'M', 7258491348, 'NarendraNagar', 'Tutor', 7993, 'avatar3.jpeg', 0),
(91, 'Trisha ', 'trisha@gmail.com', 'F', 8345043609, 'Muni ki Reti', 'Designer', 8716, 'avatar4.jpeg', 1),
(92, 'Mohit', 'mohit20@gmail.com', 'M', 8393320325, 'Gangi', 'Medical', 8966, 'avatar1.jpg', 0),
(93, 'Shechin', 'shechin@gmail.com', 'M', 7949336232, 'Ghansali', 'Legal_work', 11480, 'avatar3.jpeg', 1),
(94, 'Ankit', 'ankit67@gmail.com', 'M', 8419836418, 'NarendraNagar', 'Sport_Academy', 5133, 'avatar1.jpg', 0),
(95, 'Sanjna', 'sanjana11@gmail.com', 'F', 6679885745, 'NarendraNagar', 'Designer', 11273, 'avatar2.png', 1),
(96, 'Krishna', 'krishna@gmail.com', 'M', 8926598529, 'New Tehri', 'Insurance', 13658, 'avatar3.jpeg', 1),
(97, 'Kavya', 'kavya00@gmail.com', 'F', 7957588124, 'Gaja', 'Travel_agency', 13630, 'avatar4.jpeg', 1),
(98, 'Neresh', 'neresh@gmail.com', 'M', 7728571344, 'New Tehri', 'Sport_Academy', 13865, 'avatar3.jpeg', 0),
(99, 'Amit', 'rudrakseh25@gmail.com', 'M', 7624524704, 'Fakot', 'Music_Academy', 14945, 'avatar3.jpeg', 0),
(100, 'Reena', 'reena22@gmail.com', 'F', 9297375951, 'Hindolakhal', 'Freelancer', 14836, 'avatar2.png', 0),
(101, 'Reshma', 'reshma@gmail.com', 'F', 7163736973, 'AgraKhal', 'Delivery', 8140, 'avatar4.jpeg', 0),
(102, 'Robin', 'robin23@gmail.com', 'M', 9063274654, 'Chamba', 'Designer', 5030, 'avatar1.jpg', 1),
(103, 'Priyanka', 'priyanka@gmail.com', 'F', 9378761929, 'Kanatal', 'Developer', 13325, 'avatar2.png', 1),
(104, 'Ayush', 'ayush21@gmail.com', 'M', 9769542476, 'Kritinagar', 'Editor', 9769, 'avatar3.jpeg', 0),
(105, 'Jagdesh', 'jagdesh@gmil.com', 'M', 7257158686, 'Devprayag', 'Designer', 6490, 'avatar3.jpeg', 0),
(106, 'Akshey', 'akshey21@gmail.com', 'M', 9890941891, 'Dhalwala', 'Developer', 8602, 'avatar1.jpg', 0),
(107, 'Vipin', 'vipin87@gmail.com', 'M', 6512794427, 'Gaja', 'Electrician', 9001, 'avatar1.jpg', 0),
(108, 'Priya', 'priya32@gmail.com', 'F', 6777745283, 'Dhanaulti', 'Plumber', 10807, 'avatar4.jpeg', 0),
(109, 'Anjali', 'anjali15@gmail.com', 'F', 6028041952, 'Fakot', 'Constructor', 13339, 'avatar2.png', 0),
(110, 'Arti', 'arti20@gmail.com', 'F', 6238466221, 'New Tehri', 'Insurance', 7692, 'avatar4.jpeg', 1),
(111, 'Shiv', 'shiv15@gmail.com', 'M', 8875658688, 'Makhlanu', 'Travel_agency', 12693, 'avatar3.jpeg', 0),
(112, 'Shubham', 'shubham@gmail.com', 'M', 9418968526, 'New Tehri', 'Financial_services', 10424, 'avatar1.jpg', 0),
(113, 'Manish', 'manish@gmail.com', 'M', 6590456514, 'Muni Ki Reti', 'Constructor', 14211, 'avatar3.jpeg', 1),
(114, 'Ritika', 'ritu456@gmail.com', 'F', 9998754547, 'Gangi', 'Designer', 14539, 'avatar2.png', 1),
(115, 'Shruti', 'shruti@gmail.com', 'F', 8160204324, 'Ghansali', 'Developer', 13526, 'avatar4.jpeg', 1),
(116, 'Vasu', 'vasu45@gmail.com', 'M', 7509059765, 'NarendraNagar', 'Electrician', 5733, 'avatar1.jpg', 0),
(117, 'Vansh', 'vansh99@gmail.com', 'M', 8415148859, 'NarendraNagar', 'Plumber', 8598, 'avatar3.jpeg', 1),
(118, 'Vandna', 'vandna56@gmail.com', 'F', 6836801755, 'New Tehri', 'Constructor', 8346, 'avatar4.jpeg', 0),
(119, 'kartik', 'kartik1234@gmail.com', 'M', 6453514780, 'Gaja', 'Insurance', 10037, 'avatar3.jpeg', 1),
(120, 'Kritika', 'kritika001@gmail.com', 'F', 9625795461, 'Fakot', 'Travel_agency', 10238, 'avatar2.png', 1),
(121, 'Kusum', 'kusum121@gmail.com', 'F', 7770817948, 'Hindolakhal', 'Financial_services', 8779, 'avatar4.jpeg', 1),
(122, 'Keshav', 'keshav113@gmail.com', 'M', 9941990025, 'AgraKhal', 'Medical', 8451, 'avatar1.jpg', 1),
(123, 'kunal', 'kunal999@gmail.com', 'M', 9942292447, 'Chamba', 'Legal_work', 5043, 'avatar3.jpeg', 0),
(124, 'Rohit', 'Rohit5468@yahoo.com', 'M', 9112035201, 'Agrakhal', 'Tutor', 5410, 'avatar1.jpg', 1),
(125, 'John', 'john5468@yahoo.com', 'M', 6243211109, 'New Tehri', 'Sport_academy', 5044, 'avatar3.jpeg', 0),
(126, 'Mukesh', 'mukesh121@gmail.com', 'M', 8314349347, 'Gaja', 'Music_Academy', 12590, 'avatar3.jpeg', 1),
(127, 'Manpreet', 'manpreet121@gmail.com', 'M', 9497364264, 'Gaja', 'Dance_Academy', 10023, 'avatar1.jpg', 1),
(128, 'Shruti', 'shruti@gmail.com', 'F', 6566544994, 'Fakot', 'Freelancer', 13014, 'avatar4.jpeg', 0),
(129, 'Kajal', 'kajal11@gmail.com', 'F', 6729981946, 'Fakot', 'Designer', 9385, 'avatar2.png', 1),
(130, 'Sapna', 'sapna34@gmail.com', 'F', 6833662961, 'NarendraNagar', 'Freelancer', 13101, 'avatar4.jpeg', 1),
(131, 'Shivani', 'shivu15@hotmail.com', 'F', 6039656832, 'Hindolakhal', 'Plumber', 7025, 'avatar2.png', 1),
(132, 'Kapil', 'kkapil785@yahoo.com', 'M', 9204228053, 'Agrakhal', 'Tutor', 7586, 'avatar1.jpg', 0),
(133, 'Kunal', 'kunal789@hotmail.com', 'M', 7114707201, 'Chamba', 'Electrician\r\n', 6452, 'avatar3.jpeg\r\n', 1),
(134, 'Sheetal', 'sheetal7@gmail.com', 'F', 7867445610, 'Agrakhal', 'Editor', 10311, 'avatar2.png', 0),
(135, 'Tanu', 'tanu12@gmail.com', 'F', 9238547840, 'Devprayag', 'Plumber', 13743, 'avatar4.jpeg', 1),
(136, 'Puja', 'puja23@gmail.com', 'F', 8902435273, 'Muni Ki Reti', 'Constructor', 10785, 'avatar4.jpeg', 1),
(137, 'Diya', 'diya53@gmail.com', 'F', 7180398979, 'Kirtinagar', 'Insurance', 8254, 'avatar2.png', 0),
(138, 'Shagun', 'shagun23@gmail.com', 'F', 9828774819, 'Muni Ki Reti', 'Travel agency', 13824, 'avatar4.jpeg', 0),
(139, 'Nancy', 'nancy43@gmail.com', 'F', 6498547183, 'Devprayag', 'Financial services', 6337, 'avatar4.jpeg', 1),
(140, 'Anjali', 'anjali43@gmail.com', 'F', 9843978524, 'Chamba', 'Medical', 5135, 'avatar2.png', 0),
(141, 'Kanchan', 'kanchan93@gmail.com', 'F', 6994095541, 'Kanatal', 'Legal work', 7610, 'avatar4.jpeg', 0),
(142, 'Chandani', 'chandani33@gmail.com', 'F', 8000287374, 'Kanatal', 'Tutor', 13774, 'avatar2.png', 0),
(143, 'Shivani', 'shivani63@gmail.com', 'F', 7735398529, 'Gangi', 'Insurance', 6230, 'avatar4.jpeg', 1),
(144, 'Abhishek', 'abhishek83@gmail.com', 'M', 7532475940, 'Kanatal', 'Sport Academy', 11625, 'avatar1.jpg', 0),
(145, 'Puneet', 'puneet93@gmail.com', 'M', 6629593346, 'New Tehri', 'Music Academy', 10931, 'avatar3.jpeg', 0),
(146, 'Shobha', 'shobha73@gmail.com', 'F', 9952068663, 'Ghansali', 'Dance Academy', 12805, 'avatar4.jpeg', 1),
(147, 'Sanjay', 'sanjay93@gmail.com', 'M', 7214976383, 'Muni Ki Reti', 'Freelancer', 13265, 'avatar3.jpeg', 1),
(148, 'Aditaya', 'aditaya73@gmail.com', 'M', 7060839274, 'Makhlanu', 'Insurance', 10334, 'avatar1.jpg', 1),
(149, 'Dheeraj', 'dheeraj53@gmail.com', 'M', 6918975221, 'Gaja', 'Travel agency', 6195, 'avatar3.jpeg', 0),
(150, 'Ritik', 'ritik83@gmail.com', 'M', 6348336905, 'Muni Ki Reti', 'Financial services', 13294, 'avatar3.jpeg', 0),
(151, 'Kavita', 'kavita93@gmail.com', 'F', 9097242825, 'New Tehri', 'Medical', 6347, 'avatar2.png', 1),
(152, 'Hena', 'hena93@gmail.com', 'F', 8486532934, 'Kanatal', 'Legal work', 14399, 'avatar4.jpeg', 1),
(153, 'Ritika', 'ritika43@gmail.com', 'F', 7979249880, 'New Tehri', 'Tutor', 11148, 'avatar2.png', 0),
(154, 'Astha', 'astha63@gmail.com', 'F', 7256418028, 'Gangi', 'Insurance', 5307, 'avatar4.jpeg', 0),
(155, 'Komal', 'komal93@gmail.com', 'F', 9179102105, 'Kanatal', 'Music Academy', 11346, 'avatar2.png', 0),
(156, 'Ankita', 'ankita63@gmail.com', 'F', 8603782434, 'Agrakhal', 'Dance Academy', 13969, 'avatar4.jpeg', 1),
(157, 'Payal', 'payal93@gmail.com', 'F', 7685302005, 'Agrakhal', 'Freelancer', 10716, 'avatar2.png', 0),
(158, 'Simaran', 'simaran93@gmail.com', 'F', 7396633546, 'Gaja', 'Plumber', 14463, 'avatar4.jpeg', 1),
(159, 'Anmol', 'anmol73@gmail.com', 'M', 7704783688, 'New Tehri', 'Constructor', 5585, 'avatar3.jpeg', 1),
(160, 'Ridhu', 'ridhu83@gmail.com', 'F', 9878863797, 'Muni Ki Reti', 'Insurance', 6101, 'avatar2.png', 1),
(161, 'Tanuja', 'tanuja93@gmail.com', 'F', 9281882089, 'Kanatal', 'Travel agency', 12749, 'avatar4.jpeg', 1),
(162, 'Anuj', 'anuj93@gmail.com', 'M', 8256983551, 'Gangi', 'Financial services', 12777, 'avatar3.jpeg', 1),
(163, 'Anup', 'anup53@gmail.com', 'M', 7257029816, 'New Tehri', 'Medical', 8244, 'avatar1.jpg', 0),
(164, 'Shakshi', 'shakshi93@gmail.com', 'F', 9324507931, 'Hindolakhal', 'Legal work', 14605, 'avatar4.jpeg', 0),
(165, 'Ayush', 'ayush73@gmail.com', 'M', 7866420562, 'Narendra Nagar', 'Medical', 7929, 'avatar3.jpeg', 0),
(166, 'Sarita', 'sarita43@gmail.com', 'F', 9154305584, 'Devprayag', 'Legal work', 12597, 'avatar2.png', 1),
(167, 'Naresh', 'naresh83@gmail.com', 'M', 9749082864, 'Narendra Nagar', 'Tutor', 14526, 'avatar3.jpeg', 0),
(168, 'Neeraj', 'neeraj53@gmail.com', 'M', 6370527681, 'New Tehri', 'Insurance', 13067, 'avatar1.jpg', 0),
(169, 'Sanjana', 'sanjana73@gmail.com', 'F', 9187298437, 'Hindolakhal', 'Insurance', 11816, 'avatar4.jpeg', 1),
(170, 'Vivek', 'vivek43@gmail.com', 'M', 9190626551, 'New Tehri', 'Sport Academy', 13631, 'avatar1.jpg', 0),
(171, 'Divake', 'divake93@gmail.com', 'M', 8374924742, 'Dhanaulti', 'Music Academy', 13612, 'avatar3.jpeg', 0),
(172, 'Divashe', 'divashe53@gmail.com', 'M', 7439585402, 'New Tehri', 'Dance Academy', 14258, 'avatar1.jpg', 1),
(173, 'Lucky', 'lucky53@gmail.com', 'M', 6403730518, 'Dhanaulti', 'Freelancer', 7798, 'avatar3.jpeg', 0),
(174, 'Nirmal', 'nirmal43@gmail.com', 'M', 9319579995, 'Fakot', 'Insurance', 10967, 'avatar3.jpeg', 1),
(175, 'Sourabh', 'sourabh93@gmail.com', 'M', 6607127680, 'New Tehri', 'Travel agency', 5108, 'avatar1.jpg', 0),
(176, 'Anshu', 'anshu43@gmail.com', 'M', 6367102297, 'Dhalwala', 'Legal work', 9304, 'avatar3.jpeg', 0),
(177, 'Shivansh', 'shivansh43@gmail.com', 'M', 6399488556, 'Devprayag', 'Travel agency', 12373, 'avatar1.jpg', 0),
(178, 'Arnav', 'arnav93@gmail.com', 'M', 7662443081, 'Hindolakhal', 'Financial services', 6606, 'avatar3.jpeg', 1);

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
(2, 'Rudraksh', '2005-09-26', 'M', 'rudrakshmishra026@gmail.com', 8755443383, 'rm 260905', '2023-08-21 23:42:30', 'Dehradun'),
(3, 'chaman', '1957-02-28', 'M', 'sudarshanmishra92007@gmail.com', 8126882800, '123456', '2023-08-23 16:21:52', 'Dehradun'),
(6, 'Rudraksh', '2005-09-26', 'M', 'vsudarshan94@gmail', 1654, '12345', '2023-09-06 19:06:12', 'Dehradun'),
(7, 'Rudraksh', '2006-09-26', 'M', 'vsudarshan94@gmail.co', 6454, 'rm 260905', '2023-11-09 21:44:12', 'Khadi'),
(4, 'Rudraksh', '2007-07-07', 'M', 'vsudarshan94@gmail.com', 12345, '12345', '2023-08-23 16:22:46', 'Dehradun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locate`
--
ALTER TABLE `locate`
  ADD PRIMARY KEY (`locationName`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceName`);

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
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
