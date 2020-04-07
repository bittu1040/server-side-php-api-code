-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 08:13 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `name2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `name1`, `name2`) VALUES
(1, '', '', ''),
(2, 'Amit', 'amit1998@gmail.com', 'gvgv'),
(3, 'bitu', 'amit1998@gmail.com', 'gvgv'),
(4, 'manish', 'amit1998@gmail.com', 'gvgv'),
(5, 'rakesh', 'amit1998@gmail.com', 'gvgv'),
(6, 'rakesh', 'amit1998@gmail.com', 'gvgv'),
(7, 'rakesh', 'amit1998@gmail.com', 'gvgv'),
(8, 'bitu', 'amit1998@gmail.com', 'vygbhb hbgh'),
(9, 'rakesh', 'amit1998@gmail.com', 'gvgv'),
(10, 'rakesh', 'amit1998@gmail.com', 'gvgv'),
(11, 'rakesh', 'amit1998@gmail.com', 'gvgv'),
(12, 'rakesh', 'amit1998@gmail.com', 'gvgv'),
(13, 'rakesh', 'amit1998@gmail.com', 'gvgv'),
(14, 'rohan', 'amit1998@gmail.com', 'gvgv'),
(15, 'rohan', 'amit1998@gmail.com', 'vygbhb hbgh'),
(16, 'bitu', 'amit1998@gmail.com', 'vygbhb hbgh'),
(17, 'rohan', 'amit1998@gmail.com', 'vygbhb hbgh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
