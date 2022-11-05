-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 09:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse328`
--

-- --------------------------------------------------------

--
-- Table structure for table `users7`
--

CREATE TABLE `users7` (
  `sno` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `udept` varchar(10) NOT NULL,
  `upassword` varchar(100) NOT NULL,
  `uclub` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users7`
--

INSERT INTO `users7` (`sno`, `username`, `uid`, `udept`, `upassword`, `uclub`, `date`) VALUES
(1, 'admin', 294, 'CSE', '1234', 'IT', '2022-11-04 19:46:32'),
(3, 'Tasfia Disha', 286, 'CSE', '1234', 'IT', '2022-11-04 20:05:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users7`
--
ALTER TABLE `users7`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users7`
--
ALTER TABLE `users7`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
