-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 08:07 AM
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
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `club_id` int(10) NOT NULL,
  `club_name` varchar(128) NOT NULL,
  `club_motto` varchar(1024) NOT NULL,
  `club_about` varchar(2048) NOT NULL,
  `club_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`club_id`, `club_name`, `club_motto`, `club_about`, `club_created`) VALUES
(1, 'IT Club', 'The main purpose of IT CLUB is to coherently distribute knowledge among those who are eager to learn technology.', 'BUBT IT CLUB started its munificent journey in September, 2011. By the earnest endeavor of students and teachers of different departments led by CSE, BUBT IT CLUB was established with the aim of delivering IT knowledge towards the students of all disciplines. The main purpose of IT CLUB is to coherently distribute knowledge among those who are eager to learn technology. To achieve this target, they are conducting numerous benevolent activities. It is also a matter great success that the CLUB is run by self finance.  This CLUB organizes different workshops, seminars to dilate the ken of students and external audiences. Added with this, members of the CLUB arrange Math Olympiad, numerous mathematic and logical problem solving competitions, programming contest & campaign and many more creative and brain storming events like them.  As an outcome, IT CLUB and the Dept. of CSE combindly launch its annual mega program for the fourth time which is well recognized as CSE FIESTA. It is encouraging that FIESTA gives an opportunity to a nationwide programming contest under the title of ACM ICPC.  Apart from this, other lucrative events just as - Gaming contest, Hacking, Outsourcing Programming Camp are to be the special parts of the program CSE FIESTA-13. This CLUB strongly believes that extra-curricular activities help students to improve analytical and reasoning skill which will make them expert and astute to solve problems in real life.', '2022-11-07 10:34:37'),
(2, 'Cultural Club\n', 'BUBTCC promotes students’creativity and professionalism through a cultural framework by invigorating the cultural diversity and awareness; in connection with beholding the ideology of open mind to move beyond boundaries of own self.', 'Organizing the various inter-departmental cultural competitions and central cultural programs in the University. Observing the national days solemnly with cultural events. Encouraging the budding talents of the University and developing their creative skills. Providing the right platform for students to showcase their talents. Enhancing  students’ personal skills like confidence, collaboration, teamwork, discipline, communication and improvisation to make them competitive in global environment. To develop and promote the rich diversity and uniqueness of various art and to upgrade and to enrich the consciousness of the people about their cultural heritage. To make special efforts to encourage the folk and tribal arts and to frame special programs for the preservation and strengthening of art forms.', '2022-11-07 10:36:33'),
(3, 'Sports Club', 'BUBT Sports Club aims to providing a relevant and sustainable sports service to the students of BUBT. Our aim is to ensure sporting facilities through support and services. We believe that the structure, organization, and execution of BUBT Sports Club are primarily the responsibility of students, but BUBT provides supports with human, financial and dedicated resources. Though the club is unique in its purpose and operation, but it reflects positively as a part of sport and BUBT as a whole.', 'BUBT Sports Club is an organization consisting of a bunch of young, energetic and sporting minded pupils. Last few years, BUBT Sports Club has been participating in several indoor and outdoor games and sports (both Intra and Inter university) and bringing out fame for BUBT by their outstanding performances. BUBT was the semifinalist in DIU-ACME Inter University T20 Cricket Tournament-2017 and 9th UIU Inter University Table Tennis Championship.  There are many co-curricular opportunities for students here in BUBT. Students involved in co-curricular activities find themselves fitting well in BUBT. They are strongly encouraged to be involve in sports. BUBT Sports Club offers a wide range of sporting events:  Sporting opportunities include:  Badminton Football/Futsal Basketball Table Tennis Chess Volleyball Carom Some other indoor games Cricket', '2022-11-07 10:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `users7`
--

CREATE TABLE `users7` (
  `sno` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `udept` varchar(10) NOT NULL,
  `upassword` varchar(255) NOT NULL,
  `uclub` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users7`
--

INSERT INTO `users7` (`sno`, `username`, `uid`, `udept`, `upassword`, `uclub`, `date`) VALUES
(6, 'tasfia', 286, 'CSE', '$2y$10$J2jD70yf.WkxJGjeYaY4v.epMBxTTxQ7WtH.kB5rPjcRHMESJV4eW', 'IT', '2022-11-05 19:55:34'),
(8, 'tanbir', 294, 'CSE', '$2y$10$432nWJiHHUAcRZvPIQOcEO9IdNjQltsrcnqXOEq.pN7fbmDSpXuKC', 'IT', '2022-11-06 06:39:34'),
(9, 'imran', 248, 'CSE', '$2y$10$B/dBLlt8VcevhdpuOnTBzuAEUXZG.S3tpeXLPlBEBqNOVvV.iK27q', 'IT', '2022-11-06 07:03:32'),
(10, 'Sami', 420, 'EEE', '$2y$10$M4xzD6elTIGXNG95CYOHIeEa3KcT2gCUdvRPxgzYEKkSMTNdMSg0q', 'Sports', '2022-11-06 07:06:51');

-- --------------------------------------------------------

--
-- Table structure for table `users8`
--

CREATE TABLE `users8` (
  `sno` int(50) NOT NULL,
  `club` varchar(30) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `udept` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `userpass` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users8`
--

INSERT INTO `users8` (`sno`, `club`, `fullname`, `email`, `uid`, `udept`, `gender`, `userpass`, `date`) VALUES
(1, 'IT Club', 'Md. Imran Nazir', 'imrannazir1.in@gmail.com', 248, 'CSE', 'male', '1234', '2022-11-05 13:30:13'),
(3, 'IT Club', 'Afsana Akter', '0189050afra@gmail.com', 295, 'CSE', 'female', '1234', '2022-11-05 20:35:00'),
(4, 'IT Club', 'Tanbir Hasan', 'tanbir@gmail.com', 286, 'CSE', 'male', '1234', '2022-11-05 22:10:11'),
(5, 'Cultural Club', 'Tasfia Disha', 'disha@gmail.com', 294, 'CSE', 'female', '1234', '2022-11-05 22:16:37'),
(6, 'IT Club', 'Nila', 'nila@gmail.com', 342, 'CSE', 'female', '234', '2022-11-06 11:52:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `users7`
--
ALTER TABLE `users7`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `users8`
--
ALTER TABLE `users8`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `club_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users7`
--
ALTER TABLE `users7`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users8`
--
ALTER TABLE `users8`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
