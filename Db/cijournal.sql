-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2014 at 10:15 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cijournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `credits`
--

CREATE TABLE IF NOT EXISTS `credits` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Account_Name` varchar(30) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Voucher_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Voucher_Id` (`Voucher_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `credits`
--

INSERT INTO `credits` (`Id`, `Account_Name`, `Amount`, `Voucher_Id`) VALUES
(1, 'Sales', 20000, 1),
(2, 'Sales cr', 24424, 2),
(3, 'Sales', 34000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `debits`
--

CREATE TABLE IF NOT EXISTS `debits` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Account_Name` varchar(30) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Voucher_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Voucher_Id` (`Voucher_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `debits`
--

INSERT INTO `debits` (`Id`, `Account_Name`, `Amount`, `Voucher_Id`) VALUES
(1, 'Jhon Doe', 20000, 1),
(2, 'Jhon Doe dr', 24424, 2),
(3, 'Cash', 34000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(30) NOT NULL,
  `User_Role` varchar(30) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `User_Position` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `User_Name`, `User_Role`, `Password`, `User_Position`) VALUES
(1, 'admin', '', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE IF NOT EXISTS `vouchers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Voucher_No` varchar(255) NOT NULL,
  `Time` time NOT NULL,
  `Chk_No` varchar(255) DEFAULT NULL,
  `Recipt_No` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`Id`, `Date`, `Voucher_No`, `Time`, `Chk_No`, `Recipt_No`) VALUES
(1, '0000-00-00', 'v112', '00:00:00', 'c332', 'r443'),
(2, '0000-00-00', 'v1122', '00:00:00', 'c3321', 'r4433'),
(3, '0000-00-00', 'v142', '00:00:00', 'c344', 'r4213');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `credits`
--
ALTER TABLE `credits`
  ADD CONSTRAINT `credits_ibfk_1` FOREIGN KEY (`Voucher_Id`) REFERENCES `vouchers` (`Id`);

--
-- Constraints for table `debits`
--
ALTER TABLE `debits`
  ADD CONSTRAINT `debits_ibfk_1` FOREIGN KEY (`Voucher_Id`) REFERENCES `vouchers` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
