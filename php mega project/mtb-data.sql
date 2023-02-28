-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 11:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtb-data`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking-id` int(11) NOT NULL,
  `customer-id` int(11) NOT NULL,
  `m-title` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `movie-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `register-id` int(11) NOT NULL,
  `customer-id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user-password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genere-id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genere-id`, `type`) VALUES
(1, 'horror'),
(2, 'comedy'),
(3, 'kids animation'),
(4, 'action'),
(5, 'mystry');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie-id` int(11) NOT NULL,
  `movieTitle` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `duration` time NOT NULL,
  `genre-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie-id`, `movieTitle`, `genre`, `year`, `duration`, `genre-id`) VALUES
(1, 'kingsman:the secret service\r\n', 'action', 2015, '02:10:00', 0),
(2, 'enola holmes', 'mystry', 2020, '02:03:00', 0),
(3, 'knives out', 'mystry', 2020, '02:10:00', 0),
(4, 'Now you see me', 'action', 2013, '01:13:34', 0),
(5, 'boss baby', 'kids animation', 2017, '01:17:34', 0),
(6, 'lights out', 'horror', 2016, '01:21:34', 0),
(7, 'anabelle creation', 'horror', 2017, '01:39:56', 0),
(8, 'resident evil:welcome to racon city\r\n', 'action', 2021, '01:21:34', 0),
(9, 'spderman home coming', 'action', 2021, '02:03:00', 0),
(10, 'zombieland', 'comedy', 2009, '01:21:34', 0),
(12, 'pixels', 'comedy', 2015, '01:13:34', 0),
(13, 'freeguy', 'comedy', 2020, '01:21:34', 0),
(14, 'love and monsters', 'comedy', 2020, '01:13:34', 0),
(15, 'orphan', 'mystry', 2016, '01:39:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `register-id` int(11) NOT NULL,
  `first-name` varchar(255) NOT NULL,
  `last-name` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user-password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking-id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer-id`),
  ADD KEY `test` (`register-id`),
  ADD KEY `email` (`email`),
  ADD KEY `password` (`user-password`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genere-id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie-id`),
  ADD UNIQUE KEY `movieTitle` (`movieTitle`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`register-id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user-password` (`user-password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genere-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `register-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `password` FOREIGN KEY (`user-password`) REFERENCES `registration` (`user-password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
