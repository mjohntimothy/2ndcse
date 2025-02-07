-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2024 at 05:42 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class_attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `higher_degree` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `loc` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `password`, `mobile`, `email`, `higher_degree`, `department`, `doj`, `loc`, `created_at`) VALUES
(1, 'john', '$2y$10$dJQioQ1HpURr36H/415MQuUeHR1diJjvEvXqsC0FwK0RgEss2XI0K', '9494464001', 'john@gmail.com', 'm-tech', 'cse', '2021-01-12', 'vzm', '2024-09-03 15:36:34'),
(2, 'john', '$2y$10$iybrgD7IL8kyiKKVEe4Tp.qzRNl9uPMuViQsir9KfsF9zCsk4Dc0C', '9494464001', 'john@gmail.com', 'm-tech', 'cse', '2021-01-12', 'vzm', '2024-09-03 15:38:59'),
(3, 'john', '$2y$10$6E4u4H8Ix3dYbevyz/QeLOk0jHDT.l2s4HTeXNxlHXWHUFIgYchLG', '9494464001', 'john@gmail.com', 'm-tech', 'cse', '2021-01-12', 'vzm', '2024-09-03 15:39:47'),
(4, 'john', '$2y$10$3piwxdru9B2AG9Kqo/kVEu5Gix3Lk2iWBg8fRxgryzF.SrrE2oZHW', '9494464001', 'john@gmail.com', 'm-tech', 'cse', '2021-01-12', 'vzm', '2024-09-03 15:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `register_number` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `study` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `loc` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `register_number` (`register_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
