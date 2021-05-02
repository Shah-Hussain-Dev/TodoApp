-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 05:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo_table`
--

CREATE TABLE `todo_table` (
  `id` int(11) NOT NULL,
  `todo` varchar(250) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `times` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo_table`
--

INSERT INTO `todo_table` (`id`, `todo`, `time`, `times`, `tm`) VALUES
(38, 'JavaScript and Bootstrap ', '2020-12-30 03:50:38', '2020-12-29 22:20:38', '10:00'),
(39, 'MongoDB CRUD Operations ', '2020-12-30 03:54:51', '2020-12-29 22:24:51', '11:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo_table`
--
ALTER TABLE `todo_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo_table`
--
ALTER TABLE `todo_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
