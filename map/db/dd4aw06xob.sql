-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 01:59 PM
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
('10707181@students.plymouth.ac.uk', 'dileka', 'Dilshan', 'female', 'No 21, Wajirapura', '', 'Nuwara Eliya', 'Central Provunce', '46546465', '45', '0766807668', 'Free-Msi-P'),
('abc@gmail.com', 'madawa', 'saman', 'male', 'no 43', 'shanthipura', 'Nuwara Eliya', 'Central Provunce', '343423432', '1234', '0766807668', 'Msi-HD-Bac'),
('gg@gmail.com', 'Rakshitha', 'Dilshan', 'male', 'No 21, Wajirapura', '', 'Nuwara Eliya', 'Central Provunce', '46546465', '123', '0766807668', 'Bvhd8NXUTN'),
('rakshithadilshan1@gmail.com', 'dileka', 'Dilshan', 'male', 'No 21, Wajirapura', '', 'Nuwara Eliya', 'Central Provunce', '46546465', '456', '0766807668', 'Free-Msi-P');

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `myguests` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reg_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `myguests`
--

INSERT INTO `myguests` (`id`, `firstname`, `lastname`, `email`, `reg_date`) VALUES
(1, 'John', 'Doe', 'john@example.com', '2021-01-08 08:32:52');

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
  `photos` text COLLATE utf8_unicode_ci NOT NULL,
  `lat` float NOT NULL,
  `longt` float NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `email`, `fname`, `lname`, `crop_name`, `crop_type`, `photos`, `lat`, `longt`, `description`) VALUES
(2, 'gg@gmail.com', 'pasindu', 'Dilshan', 'karote', 'FoodCrops', 'Free-Msi-Photo-Download.jpg', 7.29332, 80.7491, 'hondar3'),
(4, 'rakshithadilshan1@gmail.com', 'Rakshitha', 'Dilshan', 'Potatoes', 'FoodCrops', 'msi-12.jpg', 7.2906, 80.6337, 'honder 200'),
(5, 'rakshithadilshan1@gmail.com', 'Rakshitha', 'Dilshan', '', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `PersonID` int(11) DEFAULT NULL,
  `LastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FirstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`PersonID`, `LastName`, `FirstName`) VALUES
(123, 'hasiru', 'navodya'),
(124, 'abc', 'qwe'),
(125, 'asd', 'zxc'),
(126, 'ert', 'dfg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
