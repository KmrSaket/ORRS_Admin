-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 09, 2020 at 08:04 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`user_id`, `user_name`, `fname`, `lname`, `email`, `password`, `phone`) VALUES
(18, 'Saketkr', 'Saket', 'Kumar', 'saketkumark@gmail.com', '$2y$10$xrRrKG5/OO7NmTQgaEqrZOOD.Dya69QhP5djbbpZKa0zkuVBDIQK.', '7050890061'),
(19, 'Rishavraj', 'Rishav', 'Raj', 'rishavraj@gmail.com', '$2y$10$z4gn6Qp4ND6N4nbNM/4VNO969CrO6NZiaUTJDYiWKlQB0ah54IWJS', '9517534652'),
(20, 'Shalinikumari', 'Shalini', 'Kumari', 'shalinikumari@gmail.com', '$2y$10$fI237NgRov3wreBXIL.Ulu/VycOxzlfpnjZpLd6S2nyCQF0Dcirtm', '7539518520'),
(21, 'Shradhapraveen', 'Shradha', 'Praveen', 'shradhapraveen@gmail.com', '$2y$10$E9pnDyVTsDBJIWesIRcRbOW.pdsqDV/21O/IBDBjhrgyXF7Q8cKQ2', '7894561230'),
(22, 'Sujatakumari', 'Sujata', 'Kumari', 'sujatakumari@gmail.com', '$2y$10$u3SncJFTev5i02Qa6O.E5uSmgAzWUk1gVIyieeyWqwDHyghOEfDs.', '7391824650');

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
  `p2_name` varchar(50) DEFAULT NULL,
  `p2_age` int(3) DEFAULT NULL,
  `p2_gender` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`pnr`),
  KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=1643597447 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`user_name`, `pnr`, `source_st`, `destination_st`, `dateOfBooking`, `p1_name`, `p1_age`, `p1_gender`, `p2_name`, `p2_age`, `p2_gender`) VALUES
('Saketkr', 1643597438, 'Agartala', 'Anand Vihar Terminal', '2020-07-27', 'Saket Kumar', 22, 'Male', '', 0, 'Male'),
('Rishavraj', 1643597439, 'Bilaspur Jn', 'New Delhi', '2020-07-23', 'Rishav Raj', 22, 'Male', '', 0, 'Male'),
('Rishavraj', 1643597440, 'Bhubaneswar', 'New Delhi', '2020-08-22', 'Shradha Praveen', 21, 'Female', 'Rishav Raj', 22, 'Male'),
('Shradhapraveen', 1643597441, 'Hazrat Nizamuddin', 'C Shivaji Maharaj T', '2020-09-12', 'Shradha Praveen', 21, 'Female', '', 0, 'Male'),
('Shradhapraveen', 1643597442, 'C Shivaji Maharaj T', 'Hazrat Nizamuddin', '2020-09-12', 'Rishav Raj', 22, 'Male', 'Shradha Praveen', 21, 'Female'),
('Shalinikumari', 1643597443, 'Hazrat Nizamuddin', 'Ksr Bengaluru', '2020-07-29', 'Shalini Kumari', 22, 'Female', '', 0, 'Male'),
('Shalinikumari', 1643597444, 'Dibrugarh', 'New Delhi', '2020-08-27', 'Sujata Kumari', 22, 'Female', 'Shalini Kumari', 22, 'Female'),
('Sujatakumari', 1643597445, 'Agartala', 'Anand Vihar Terminal', '2020-09-14', 'Sujata Kumari', 22, 'Female', '', 0, 'Male'),
('Sujatakumari', 1643597446, 'C Shivaji Maharaj T', 'Hazrat Nizamuddin', '2020-11-27', 'Shalini Kumari', 22, 'Female', 'Sujata Kumari', 22, 'Female');

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
  `fare` int(10) NOT NULL,
  `distance` int(10) NOT NULL,
  PRIMARY KEY (`train_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`train_no`, `train_name`, `source_st`, `destination_st`, `running_days`, `fare`, `distance`) VALUES
(12438, 'NZM SC RJDHNI', 'Hazrat Nizamuddin', 'Secunderabad Jn', 11000000, 1230, 500),
(12434, 'CHENNAI RAJDHNI', 'Hazrat Nizamuddin', 'Mgr Chennai Ctr', 10001010, 1230, 593),
(12432, 'TRIVDRM RJDHNI', 'Hazrat Nizamuddin', 'Thiruvananthapuram Central', 11011001, 560, 518),
(12423, 'DBRG RAJDHANI EX', 'Dibrugarh Town', 'New Delhi', 11111111, 742, 500),
(20505, 'DBRG RAJDHANI EX', 'Dibrugarh', 'New Delhi', 10100010, 852, 719),
(20503, 'DBRG NDLS RAJEXP', 'Dibrugarh', 'New Delhi', 10000100, 753, 500),
(22221, 'NZM RAJDHANI EXP', 'C Shivaji Maharaj T', 'Hazrat Nizamuddin', 10101011, 951, 690),
(12441, 'BSP NDLS RAJ EX', 'Bilaspur Jn', 'New Delhi', 10100100, 852, 651),
(22823, 'BBS RAJDHANI EXP', 'Bhubaneswar', 'New Delhi', 10110110, 863, 690),
(22811, 'BBS RAJDHANI EXP', 'Bhubaneswar', 'New Delhi', 11001000, 957, 349),
(20817, 'BBS RAJDHANI EXP', 'Bhubaneswar', 'New Delhi', 10000001, 758, 690),
(20502, 'Anand Vihar Terminal', 'Agartala', 'Anand Vihar Terminal', 10100000, 857, 690),
(12957, 'SWARNA J RAJEX', 'Ahemdabad Jn', 'New Delhi', 11111111, 856, 499),
(20501, 'AGTL ANVT RAJ', 'Agartala', 'Anand Vihar Terminal', 10100000, 458, 750),
(22222, 'CSMT RAJDHANI', 'Hazrat Nizamuddin', 'C Shivaji Maharaj T', 11010101, 896, 511),
(22414, 'NZM MAO RAJ', 'Hazrat Nizamuddin', 'Madgaon', 10000011, 875, 320),
(22692, 'BANGLORE RJDHNI', 'Hazrat Nizamuddin', 'Ksr Bengaluru', 11111111, 778, 690);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `user_name` FOREIGN KEY (`user_name`) REFERENCES `passenger` (`user_name`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
