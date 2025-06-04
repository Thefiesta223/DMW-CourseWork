-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2025 at 07:22 PM
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
-- Database: `medical_records`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `user_id` int(11) DEFAULT NULL,
  `patient_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `prescription` text DEFAULT NULL,
  `symptoms` text DEFAULT NULL,
  `patient_address` text DEFAULT NULL,
  `doctor_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`user_id`, `patient_id`, `name`, `prescription`, `symptoms`, `patient_address`, `doctor_name`) VALUES
(1, 6, 'sathsara', '0912839128', '12321', '219837', 'Yehen'),
(0, 7, 'dinidu', '', '', '', ''),
(0, 8, 'dinidu', '', '', '', ''),
(0, 11, '', '', '', '', ''),
(0, 12, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `email`, `name`, `password`) VALUES
(3, 'gh@gmail.com', 'sathsara', '$2y$10$svy393oDwnaC4wA5fEM4Ru1IOh8SxpoBlPxJ/R8ijWd0LFcPZ.L3i'),
(4, 'user@example.com', 'yehen', '$2y$10$P5/pRHQKqFUF8L6Bqpl87e1L4jEF.UoMRHWIeTX7nunEjtMcQCvYO'),
(5, 'sadira@gmail.com', 'sadira', '$2y$10$c23NIiZOs39PBZ6hm2Ddue2xOv0e6fim2uooRV3BV3yV68YQ4skB.'),
(6, 'user1@example.com', 'Username', '$2y$10$/14.Zqr..p.iAEzBMjqsUuBLCqmt63BTW8GEOs7r3cPPisNe5.eq.'),
(7, 'user2@example.com', 'Example2', 'dinidu'),
(10, 'user3@example.com', 'bimsara', 'yehen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
