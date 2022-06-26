-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 26, 2022 at 03:23 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

DROP TABLE IF EXISTS `blood_donor`;
CREATE TABLE IF NOT EXISTS `blood_donor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `weight` int(3) NOT NULL,
  `dob` date NOT NULL,
  `contact` varchar(14) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `last_d_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`id`, `name`, `father_name`, `blood`, `gender`, `weight`, `dob`, `contact`, `city`, `address`, `last_d_date`, `created_at`, `status`) VALUES
(1, 'waqas', ' Khan', 'A+', 'male', 20, '2022-06-15', '03331213124 ', 'swat', 'mingora swat', '2021-12-02', '2022-06-26 06:51:12', 1),
(3, 'azmat', ' ali', 'AB+', 'male', 50, '2022-06-02', '0333 ', 'mingora', 'kalam', '2022-06-09', '2022-06-26 08:03:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`) VALUES
(1, 'user', 'user', 'user@gmail.com'),
(2, 'waqas', 'waqas', 'waqas@abc.com');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request_blood`
--

DROP TABLE IF EXISTS `request_blood`;
CREATE TABLE IF NOT EXISTS `request_blood` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(50) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `r_blood` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `h_name` varchar(50) NOT NULL,
  `h_address` varchar(250) NOT NULL,
  `request_by` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_blood`
--

INSERT INTO `request_blood` (`id`, `p_name`, `blood`, `r_blood`, `gender`, `age`, `contact`, `city`, `h_name`, `h_address`, `request_by`, `created_at`, `status`) VALUES
(1, 'anwar', 'A+', 'Low HB ', 'Male', 60, '03201213124', 'dir', 'shifa', 'kalam', 'neshte khan', '2022-06-26 06:59:42', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
