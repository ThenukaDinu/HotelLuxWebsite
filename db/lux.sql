-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 25, 2019 at 05:52 PM
-- Server version: 5.7.23
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
-- Database: `lux`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_services`
--

DROP TABLE IF EXISTS `additional_services`;
CREATE TABLE IF NOT EXISTS `additional_services` (
  `as_no` int(20) NOT NULL AUTO_INCREMENT,
  `res_no` varchar(4) NOT NULL,
  `res_date` date NOT NULL,
  `liquor` tinyint(1) DEFAULT NULL,
  `DJ_Music` tinyint(1) DEFAULT NULL,
  `Decorations` tinyint(1) DEFAULT NULL,
  `Pro_Services` tinyint(1) DEFAULT NULL,
  `Photography` tinyint(1) DEFAULT NULL,
  `addi_tot` varchar(20) NOT NULL,
  PRIMARY KEY (`as_no`,`res_no`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `additional_services`
--

INSERT INTO `additional_services` (`as_no`, `res_no`, `res_date`, `liquor`, `DJ_Music`, `Decorations`, `Pro_Services`, `Photography`, `addi_tot`) VALUES
(1, 'R1', '2019-03-29', 1, 1, 0, 1, 1, '30000'),
(2, 'R2', '2019-03-28', 1, 0, 0, 0, 1, '62000');

-- --------------------------------------------------------

--
-- Table structure for table `contact_email`
--

DROP TABLE IF EXISTS `contact_email`;
CREATE TABLE IF NOT EXISTS `contact_email` (
  `eId` int(11) NOT NULL AUTO_INCREMENT,
  `con_email` varchar(100) NOT NULL,
  `req_date` date NOT NULL,
  PRIMARY KEY (`eId`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_email`
--

INSERT INTO `contact_email` (`eId`, `con_email`, `req_date`) VALUES
(1, 'thenuka@gmail.com', '2019-03-18'),
(18, 'thenuka@gmail.com', '2019-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cus_no` varchar(4) NOT NULL,
  `cus_fname` varchar(150) NOT NULL,
  `cus_lname` varchar(150) NOT NULL,
  `cus_email` varchar(150) NOT NULL,
  `cus_password` varchar(100) NOT NULL,
  `cus_bday` date NOT NULL,
  `cus_nic` varchar(15) NOT NULL,
  `cus_address1` varchar(200) NOT NULL,
  `cus_address2` varchar(200) DEFAULT NULL,
  `cus_city` varchar(50) DEFAULT NULL,
  `cus_state` varchar(50) DEFAULT NULL,
  `cus_zip` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cus_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_no`, `cus_fname`, `cus_lname`, `cus_email`, `cus_password`, `cus_bday`, `cus_nic`, `cus_address1`, `cus_address2`, `cus_city`, `cus_state`, `cus_zip`) VALUES
('C1', 'Thenuka', 'Dinu', 'thenuka123@gmail.com', 'pass123', '2019-03-14', '1312432423v', 'dawdfafsefsefgse', 'esfefsfsef', 'efsfsefse', 'efsfefs', '23123'),
('C2', 'Mahela', 'Dilshan', 'mahela12345@gmail.com', '12345', '2019-03-01', '2342423423v', 'no 100, Wijerama road, Colombo 03', '', 'Colombo', 'Western Province', '10100');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `res_no` varchar(4) NOT NULL,
  `res_name` varchar(150) NOT NULL,
  `res_email` varchar(150) NOT NULL,
  `res_date` date NOT NULL,
  `res_hall` varchar(50) NOT NULL,
  `res_how_many` int(10) NOT NULL,
  `res_type` varchar(100) DEFAULT NULL,
  `res_tot` varchar(20) NOT NULL,
  `res_comments` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`res_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`res_no`, `res_name`, `res_email`, `res_date`, `res_hall`, `res_how_many`, `res_type`, `res_tot`, `res_comments`) VALUES
('R1', 'kamal perera', 'kamalperera@gmail.com', '2019-03-29', 'Hall 01', 100, 'Birthday Party', '200000', ''),
('R2', 'Thenuka dinu', 'thenukadinu@gmail.com', '2019-03-28', 'Hall 02', 100, 'Privte Party', '440000', '');

-- --------------------------------------------------------

--
-- Table structure for table `time_of_reservation`
--

DROP TABLE IF EXISTS `time_of_reservation`;
CREATE TABLE IF NOT EXISTS `time_of_reservation` (
  `tor_no` int(20) NOT NULL AUTO_INCREMENT,
  `res_no` varchar(4) NOT NULL,
  `res_date` date NOT NULL,
  `res_hall` varchar(50) NOT NULL,
  `Night_Party` tinyint(1) DEFAULT NULL,
  `Mornign_Party` tinyint(1) DEFAULT NULL,
  `Afternoon_Party` tinyint(1) DEFAULT NULL,
  `Evening_Party` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`tor_no`,`res_no`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_of_reservation`
--

INSERT INTO `time_of_reservation` (`tor_no`, `res_no`, `res_date`, `res_hall`, `Night_Party`, `Mornign_Party`, `Afternoon_Party`, `Evening_Party`) VALUES
(1, 'R1', '2019-03-29', 'Hall 01', 1, 1, 0, 0),
(13, 'R2', '2019-03-28', 'Hall 02', 1, 1, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
