-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 25, 2022 at 03:10 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(5) NOT NULL,
  `nclass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `age`, `nclass`) VALUES
(1, 'Nguyễn Văn A', 20, 'KT10'),
(2, 'Nguyễn Văn B', 21, 'DT5'),
(3, 'Nguyễn Văn C', 20, 'KT10'),
(4, 'Nguyễn Văn D', 21, 'DT5'),
(5, 'Nguyễn Văn E', 21, 'CK2'),
(6, 'Trần Hải Nam', 22, 'N12'),
(7, 'Trần Hải Nam 2', 22, 'N121'),
(8, 'Trần Hải Nam 2333', 23, 'N12133'),
(9, 'Trần Hải Nam 2333', 23, 'N12133'),
(10, 'Trần Hải Nam 23333344', 23, 'N12133'),
(11, 'Tommy', 23, 'a2'),
(12, 'adfd', 33, 'fsdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
