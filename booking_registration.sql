-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2025 at 07:54 PM
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
-- Database: `travelagency`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking registration`
--

CREATE TABLE `booking registration` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `number` int(15) NOT NULL,
  `guest` int(13) NOT NULL,
  `date` varchar(30) NOT NULL,
  `destination` varchar(150) NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking registration`
--

INSERT INTO `booking registration` (`id`, `fullname`, `number`, `guest`, `date`, `destination`, `dateandtime`) VALUES
(2, 'fuzail', 345217828, 3, '2025-12-12', 'Islamabad', '2025-07-09 17:51:13'),
(3, 'anas', 345217828, 2, '2025-07-24', 'Islamabad', '2025-07-09 17:52:06'),
(22, 'fuzail', 2147483647, 2, '2025-07-31', 'Sakardu', '2025-07-14 11:26:59'),
(26, '', 0, 0, '', '', '2025-07-14 17:47:55'),
(27, '', 0, 0, '', '', '2025-07-14 17:53:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking registration`
--
ALTER TABLE `booking registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking registration`
--
ALTER TABLE `booking registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
