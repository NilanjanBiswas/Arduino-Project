-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 10:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nodemcu_rfidrc522_mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `nodemcu_ldr_table`
--

CREATE TABLE `nodemcu_ldr_table` (
  `No` int(10) NOT NULL,
  `id` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nodemcu_ldr_table`
--

INSERT INTO `nodemcu_ldr_table` (`No`, `id`, `Date`, `Time`) VALUES
(80, 'E4BF472A', '2020-04-20', '01:45:48'),
(81, '996D20E5', '2020-04-20', '01:46:32'),
(82, 'E4BF472A', '2020-04-20', '01:47:37'),
(83, 'E4BF472A', '2020-04-20', '01:47:59'),
(84, 'E4BF472A', '2020-04-20', '01:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `table_nodemcu_rfidrc522_mysql`
--

CREATE TABLE `table_nodemcu_rfidrc522_mysql` (
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_nodemcu_rfidrc522_mysql`
--

INSERT INTO `table_nodemcu_rfidrc522_mysql` (`name`, `id`, `gender`, `email`, `mobile`) VALUES
('Hasina parker', 'E4BF472A', 'Female', 'hasina@gvt.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nodemcu_ldr_table`
--
ALTER TABLE `nodemcu_ldr_table`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `table_nodemcu_rfidrc522_mysql`
--
ALTER TABLE `table_nodemcu_rfidrc522_mysql`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nodemcu_ldr_table`
--
ALTER TABLE `nodemcu_ldr_table`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
