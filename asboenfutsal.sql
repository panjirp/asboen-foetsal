-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2019 at 12:26 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asboenfutsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_field` int(11) NOT NULL,
  `start_time` int(2) NOT NULL,
  `end_time` int(2) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_name` varchar(50) NOT NULL,
  `total_payment` int(11) NOT NULL,
  `down_payment` int(11) NOT NULL,
  `transfer_pict` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `id_user`, `id_field`, `start_time`, `end_time`, `booking_date`, `booking_name`, `total_payment`, `down_payment`, `transfer_pict`, `status`, `created_date`, `updated_date`) VALUES
(28, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 05:58:17', '0000-00-00 00:00:00'),
(29, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 05:59:06', '0000-00-00 00:00:00'),
(30, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 05:59:19', '0000-00-00 00:00:00'),
(31, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 05:59:34', '0000-00-00 00:00:00'),
(32, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 05:59:49', '0000-00-00 00:00:00'),
(33, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 06:01:47', '0000-00-00 00:00:00'),
(34, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 06:02:02', '0000-00-00 00:00:00'),
(35, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 06:02:23', '0000-00-00 00:00:00'),
(36, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 06:02:43', '0000-00-00 00:00:00'),
(37, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 06:02:46', '0000-00-00 00:00:00'),
(38, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 06:04:16', '0000-00-00 00:00:00'),
(39, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 06:05:45', '0000-00-00 00:00:00'),
(40, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 06:14:38', '0000-00-00 00:00:00'),
(41, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 06:14:45', '0000-00-00 00:00:00'),
(42, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 06:16:31', '0000-00-00 00:00:00'),
(43, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 06:17:58', '0000-00-00 00:00:00'),
(44, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 06:18:28', '0000-00-00 00:00:00'),
(45, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, '', 0, '2019-08-27 06:18:39', '0000-00-00 00:00:00'),
(46, 0, 1, 8, 9, '2019-08-25', 'panji', 150000, 0, './uploads/46.PNG', 0, '2019-08-27 06:18:55', '0000-00-00 00:00:00'),
(47, 0, 1, 8, 9, '2019-08-29', 'panji', 150000, 0, './uploads/47.PNG', 1, '2019-08-28 08:31:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `pics` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`id`, `name`, `price`, `pics`, `created_date`, `updated_date`) VALUES
(1, 'Lapangan Indoor', 150000, '', '2019-08-21 16:47:22', '0000-00-00 00:00:00'),
(2, 'Lapangan Outdoor', 120000, '', '2019-08-21 16:47:22', '2019-08-28 14:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `ref_bank`
--

CREATE TABLE `ref_bank` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `account_number` varchar(100) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_bank`
--

INSERT INTO `ref_bank` (`id`, `bank_name`, `account_number`, `account_name`, `created_date`, `updated_date`) VALUES
(1, 'Mandiri', '4444-4444-4444-4444', 'Asboen Futsal', '2019-08-27 05:48:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ref_hour`
--

CREATE TABLE `ref_hour` (
  `id` int(11) NOT NULL,
  `hour` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_hour`
--

INSERT INTO `ref_hour` (`id`, `hour`) VALUES
(0, '00:00:00'),
(1, '01:00:00'),
(2, '02:00:00'),
(3, '03:00:00'),
(4, '04:00:00'),
(5, '05:00:00'),
(6, '06:00:00'),
(7, '07:00:00'),
(8, '08:00:00'),
(9, '09:00:00'),
(10, '10:00:00'),
(11, '11:00:00'),
(12, '12:00:00'),
(13, '13:00:00'),
(14, '14:00:00'),
(15, '15:00:00'),
(16, '16:00:00'),
(17, '17:00:00'),
(18, '18:00:00'),
(19, '19:00:00'),
(20, '20:00:00'),
(21, '21:00:00'),
(22, '22:00:00'),
(23, '23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_bank`
--
ALTER TABLE `ref_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_hour`
--
ALTER TABLE `ref_hour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ref_bank`
--
ALTER TABLE `ref_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ref_hour`
--
ALTER TABLE `ref_hour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
