-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2019 at 08:53 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `year` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mob_no` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fname`, `mname`, `lname`, `branch`, `year`, `phone`, `mob_no`, `email`, `gender`) VALUES
('humera', 'hakeem', 'shaikh', 'IT', 'T.E', '+91', '7021506558', 'humera198.hshs@gmail.com', 'female'),
('neha', 'kashi', 'sharma', 'IT', 'F.E', '+91', '8554679522', 'nehabharti@gmail.com', 'female'),
('rehan', 'hakeem', 'shaikh', 'IT', 'F.E', '+91', '7412589630', 'rehan11@gmail.com', 'male'),
('game', 'jkfgsdf', 'auyfd', 'Automobile', 'F.E', '+91', '9564472833', 'agds@asd.com', 'male'),
('sfgcd', 'usfd', 'audf', 'Automobile', 'F.E', '+91', '9675843567', 'sgdfsjghed@dvdffsh.com', 'male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
