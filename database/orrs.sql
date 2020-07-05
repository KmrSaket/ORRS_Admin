-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2020 at 05:11 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(10) NOT NULL,
  `password` longtext NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_name` (`admin_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

DROP TABLE IF EXISTS `passenger`;
CREATE TABLE IF NOT EXISTS `passenger` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(32) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` longtext NOT NULL,
  `phone` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`user_id`, `user_name`, `fname`, `lname`, `email`, `password`, `phone`) VALUES
(3, 'qw', 'Jhon', 'Doe', 'asdfghjk@gmail.com', '$2y$10$sh745URiBxJm9BJxknBrY.CRsyLkoURoqP5qIQ81NYdhrhphW/v06', '1212121212');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `user_name` varchar(32) DEFAULT NULL,
  `pnr` int(11) NOT NULL AUTO_INCREMENT,
  `source_st` varchar(50) NOT NULL,
  `destination_st` varchar(50) NOT NULL,
  `dateOfBooking` date NOT NULL,
  `p1_name` varchar(50) NOT NULL,
  `p1_age` int(3) NOT NULL,
  `p1_gender` varchar(6) NOT NULL,
  `p2_name` varchar(50) NOT NULL,
  `p2_age` int(3) NOT NULL,
  `p2_gender` varchar(6) NOT NULL,
  PRIMARY KEY (`pnr`),
  KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

DROP TABLE IF EXISTS `train`;
CREATE TABLE IF NOT EXISTS `train` (
  `train_no` int(11) NOT NULL,
  `train_name` varchar(50) NOT NULL,
  `source_st` varchar(50) NOT NULL,
  `destination_st` varchar(50) NOT NULL,
  `running_days` int(8) NOT NULL,
  PRIMARY KEY (`train_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`train_no`, `train_name`, `source_st`, `destination_st`, `running_days`) VALUES
(12954, 'AG KRANTI RJDHN', 'Hazrat Nizamuddin', 'Mumbai Central', 11111111),
(12438, 'NZM SC RJDHNI', 'Hazrat Nizamuddin', 'Secunderabad Jn ', 11000000),
(12434, 'CHENNAI RAJDHNI', 'Hazrat Nizamuddin', 'Mgr Chennai Ctr', 10001010),
(12432, 'TRIVDRM RJDHNI', 'Hazrat Nizamuddin', 'Thiruvananthapuram Central', 11011001),
(12423, 'DBRG RAJDHANI EX', 'Dibrugarh Town', 'New Delhi', 11111111),
(20505, 'DBRG RAJDHANI EX', 'Dibrugarh', 'New Delhi', 10100010),
(20503, 'DBRG NDLS RAJEXP', 'Dibrugarh', 'New Delhi', 10000100),
(22221, 'NZM RAJDHANI EXP', 'C Shivaji Maharaj T', 'Hazrat Nizamuddin', 10101011),
(12441, 'BSP NDLS RAJ EX', 'Bilaspur Jn', 'New Delhi', 10100100),
(22823, 'BBS RAJDHANI EXP', 'Bhubaneswar', 'New Delhi', 10110110),
(22811, 'BBS RAJDHANI EXP', 'Bhubaneswar', 'New Delhi', 11001000),
(20817, 'BBS RAJDHANI EXP', 'Bhubaneswar', 'New Delhi', 10000001),
(20502, 'Anand Vihar Terminal', 'Agartala', 'Anand Vihar Terminal', 10100000),
(12957, 'SWARNA J RAJEX', 'Ahemdabad Jn', 'New Delhi', 11111111),
(20501, 'AGTL ANVT RAJ', 'Agartala', 'Anand Vihar Terminal', 10100000),
(22222, 'CSMT RAJDHANI', 'Hazrat Nizamuddin', 'C Shivaji Maharaj T', 11010101),
(22414, 'NZM MAO RAJ', 'Hazrat Nizamuddin', 'Madgaon', 10000011),
(22692, 'BANGLORE RJDHNI', 'Hazrat Nizamuddin', 'Ksr Bengaluru', 11111111),
(12301, 'KOLKATA RAJDHANI', 'Hawrah Jn', 'New Delhi', 10111111),
(11111, 'A B', 'A', 'B', 11101011),
(11113, 'X Y', 'A', 'B', 10101010);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `user_name` FOREIGN KEY (`user_name`) REFERENCES `passenger` (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
