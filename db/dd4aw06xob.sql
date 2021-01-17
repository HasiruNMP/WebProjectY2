-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 01:14 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dd4aw06xob`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` text COLLATE utf8_unicode_ci NOT NULL,
  `adline1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `adline2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nic` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `imgpath` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`email`, `fname`, `lname`, `gender`, `adline1`, `adline2`, `city`, `province`, `nic`, `password`, `phone`, `imgpath`) VALUES
('dilanlasitha@gmail.com', 'Dilan', 'Lasitha', 'male', 'No 22,', 'Rambewa,', 'Anuradhapura,', 'North Central Provin', '9757890543', 'dilan', '+947245677', 'th.jfif'),
('hasirunawodya@gmail.com', 'Hasiru ', 'Nawodya', 'male', 'No 41,', 'Pelmadulla,', 'Rathnapura,', 'Sabaragamuwa Provinc', '1998343259', 'hasiru', '+947145678', 'passport-p'),
('rakshithadilshan@gmail.com', 'Rakshitha', 'Dilshan', 'male', 'No 21,', 'Wajirapura,', 'Nuwara Eliya,', 'Central Province', '2000001023', 'rakshitha', '+947668076', 'man-poses-'),
('ravindujayathilake@gmail.com', 'Ravindu', 'Jayathilake', 'male', 'No 32,', 'Rakwana,', 'Rathnapura,', 'Sabaragamuwa Provinc', '9843348294', 'ravindu', '+947245675', 'photo-docu'),
('thusharaariyathilake@gmail.com', 'Thushara ', 'Ariyathilake', 'male', 'No 78,', 'Kahawaththa,', 'Rathnapura,', 'Sabaragamuwa Provinc', '9809654346', 'thushara', '+947845671', 'Sample-per');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `crop_name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `crop_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `photo1` text COLLATE utf8_unicode_ci NOT NULL,
  `photo2` text COLLATE utf8_unicode_ci NOT NULL,
  `photo3` text COLLATE utf8_unicode_ci NOT NULL,
  `lat` float NOT NULL,
  `longt` float NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `bought` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `quality` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `email`, `fname`, `lname`, `crop_name`, `crop_type`, `quantity`, `photo1`, `photo2`, `photo3`, `lat`, `longt`, `description`, `bought`, `quality`) VALUES
(1, 'hasirunawodya@gmail.com', 'Hasiru', 'Nawodya', 'Potatoes', 'Vegetables', '750 Kg', 'harvest-potatoes.jpg', 'When-to-Harvest-Potatoes-Everything-You-Need-to-Know-to-Get-it-Right-FI.jpg', 'shutterstock_1141480919.jpg', 8.60171, 81.2105, 'Fresh Potatoes', '', ''),
(2, 'rakshithadilshan@gmail.com', 'Rakshitha', 'Dilshan', 'Carrots', 'Vegetables', '1500 Kg', 'Carrots.jfif', 'karote111.jpg', 'karotte.jpg', 6.94175, 80.8012, 'Colorful Organic carrots', '', ''),
(3, 'thusharaariyathilake@gmail.com', 'Thushara ', 'Ariyathilake', 'Beetroot', 'Vegetables', '500 Kg', 'beet1111.jpg', 'beetroot2.jpg', 'beets jpg.jpg', 7.2906, 80.6337, 'Sugar Beet', '', ''),
(5, 'ravindujayathilake@gmail.com', 'Ravindu', 'Jayathilake', 'Onion', 'Vegetables', '200 Kg', 'onion1.jfif', 'onion 2.jfif', 'onion3.jfif', 6.93663, 79.9714, 'Fresh Red Onions', '', ''),
(6, 'dilanlasitha@gmail.com', 'Dilan', 'Lasitha', 'Leeks', 'Vegetables', '420 Kg', 'leeks1.jpg', 'leeks2.jpg', 'leeks3.jpg', 7.21159, 81.0965, 'Fresh Leeks', '', ''),
(7, 'hasirunawodya@gmail.com', 'Hasiru ', 'Nawodya', 'Pineapple', 'Fruits', '185 Kg', 'pineapple1.jpg', 'pineapple2.jpg', 'pineapple3.jpg', 6.08011, 80.6591, 'Fresh Pineapple', '', ''),
(8, 'thusharaariyathilake@gmail.com', 'Thushara ', 'Ariyathilake', 'Banana', 'Fruits', '370 Kg', 'banana1.jfif', 'banana2.jfif', 'banana3.jfif', 7.33861, 80.9993, 'Kolikuttu Banana', '', ''),
(9, 'rakshithadilshan@gmail.com', 'Rakshitha', 'Dilshan', 'Orange', 'Fruits', '100', 'orange1.jfif', 'orange2.jpg', 'orange3.jfif', 6.41457, 81.333, 'Fresh Colorful Oranges', '', ''),
(10, 'dilanlasitha@gmail.com', 'Dilan', 'Lasitha', 'Tomato', 'Vegetables', '355 Kg', 'tomato1.jfif', 'tomato2.jpg', 'tomato3.jpg', 6.90562, 80.6763, 'Cherry Tomatoes', '', ''),
(11, 'rakshithadilshan@gmail.com', 'Rakshitha', 'Dilshan', 'Pumpkin', 'Vegetables', '815 Kg', 'pumpkin1.jpg', 'pumpkin3.jfif', 'pumpkin12.jfif', 7.63374, 79.8358, 'Fresh Pumpkins', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `name` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`name`, `username`, `password`) VALUES
('testacc', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `stat_crops`
--

CREATE TABLE `stat_crops` (
  `croptype` varchar(10) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stat_crops`
--

INSERT INTO `stat_crops` (`croptype`, `count`) VALUES
('Friuts', 3),
('Grains', 0),
('Vegetables', 10);

-- --------------------------------------------------------

--
-- Table structure for table `stat_farmers`
--

CREATE TABLE `stat_farmers` (
  `district` varchar(15) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stat_farmers`
--

INSERT INTO `stat_farmers` (`district`, `count`) VALUES
('Ampara', 17),
('Anuradhapura', 45),
('Badulla', 42),
('Batticaloa', 15),
('Colombo', 12),
('Galle', 12),
('Gampaha', 13),
('Hambantota', 12),
('Jaffna', 17),
('Kalutara', 10),
('Kandy', 25),
('Kegalla', 15),
('Kilinochchi', 8),
('Kurunegala', 35),
('Mannar', 5),
('Matale', 37),
('Matara', 13),
('Monaragala', 34),
('Mullaittivu', 7),
('Nuwara Eliya', 50),
('Polonnaruwa', 44),
('Puttalam', 0),
('Ratnapura', 23),
('Trincomalee', 11),
('Vavuniya', 13);

-- --------------------------------------------------------

--
-- Table structure for table `stat_reports`
--

CREATE TABLE `stat_reports` (
  `status` varchar(10) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stat_reports`
--

INSERT INTO `stat_reports` (`status`, `count`) VALUES
('successful', 100),
('wasted', 11);

-- --------------------------------------------------------

--
-- Table structure for table `webmaster`
--

CREATE TABLE `webmaster` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `stat_crops`
--
ALTER TABLE `stat_crops`
  ADD PRIMARY KEY (`croptype`);

--
-- Indexes for table `stat_farmers`
--
ALTER TABLE `stat_farmers`
  ADD PRIMARY KEY (`district`);

--
-- Indexes for table `stat_reports`
--
ALTER TABLE `stat_reports`
  ADD PRIMARY KEY (`status`);

--
-- Indexes for table `webmaster`
--
ALTER TABLE `webmaster`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
