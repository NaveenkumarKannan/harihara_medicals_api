-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 15, 2019 at 07:15 AM
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
-- Database: `harihara_medicals`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Admin_id` int(50) NOT NULL AUTO_INCREMENT,
  `Username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Email_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Username`, `Email_id`, `Password`) VALUES
(7, 'lakshman', 'lk@gmail.com', '43722f2440d7028a19fe3f7484385a73'),
(57, 'lathika', 'hhh@gmail.com', '43722f2440d7028a19fe3f7484385a73'),
(67, 'ravi', 'fff@gmail.com', '43722f2440d7028a19fe3f7484385a73'),
(89, 'lathika', 'kkkk@gmail.com', '43722f2440d7028a19fe3f7484385a73'),
(112, 'Santhya', 'santhya@rr.com', '43722f2440d7028a19fe3f7484385a73'),
(117, 'lks', 'avfgj@gmail.com', 'sdfghjk');

-- --------------------------------------------------------

--
-- Table structure for table `ailments`
--

DROP TABLE IF EXISTS `ailments`;
CREATE TABLE IF NOT EXISTS `ailments` (
  `Ailment_id` int(3) DEFAULT NULL,
  `Ailments` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  KEY `Id` (`Ailment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_feed`
--

DROP TABLE IF EXISTS `news_feed`;
CREATE TABLE IF NOT EXISTS `news_feed` (
  `Feed_id` int(10) NOT NULL,
  `Text` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Image` geometry DEFAULT NULL,
  `Price` int(6) DEFAULT NULL,
  `Description` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Feed_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `Order_id` int(10) NOT NULL,
  `Product_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`Order_id`),
  UNIQUE KEY `Order_id` (`Order_id`),
  KEY `Product_id` (`Product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `Product_name` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Product_id` int(5) NOT NULL,
  `Company` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Price` int(5) DEFAULT NULL,
  `Dosage` int(3) DEFAULT NULL,
  `Prescription_required` tinyint(1) DEFAULT NULL,
  `SKU` int(5) DEFAULT NULL,
  `Expiry_date` date DEFAULT NULL,
  `Category` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Stock` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_name`, `Product_id`, `Company`, `Price`, `Dosage`, `Prescription_required`, `SKU`, `Expiry_date`, `Category`, `Stock`) VALUES
('Acetaminophen', 1, 'Acetaminophen', 5, 2, 127, 1, '2020-01-30', 'fever', NULL),
('Acyclovir', 2, 'zovirax', 11, 5, 1, 77, '2020-02-22', 'stomach pain', 1),
('Liv.52', 32, 'himalaya', 90, 10, 0, 34, '2021-03-12', 'digestion', 1),
('platorich', 45, 'Seth ayurveda', 300, 1, 1, 877, '2020-08-28', 'dengue fever', 1);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `Report_id` int(10) NOT NULL,
  `Customer_id` int(6) DEFAULT NULL,
  `URL` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description_bill` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Report_id`),
  KEY `Customer_id` (`Customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

DROP TABLE IF EXISTS `shopping`;
CREATE TABLE IF NOT EXISTS `shopping` (
  `Order_id` int(6) DEFAULT NULL,
  `Customer_id` int(6) DEFAULT NULL,
  `Amount` float DEFAULT NULL,
  `Payment` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  KEY `Customer_id` (`Customer_id`),
  KEY `Order_id` (`Order_id`),
  KEY `Order_id_2` (`Order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(3) NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Phone_number` int(10) NOT NULL,
  `Email_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Sex` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `Age` int(3) NOT NULL,
  `Current_weight` int(3) NOT NULL,
  `Current_height` int(3) NOT NULL,
  `BMI` int(2) NOT NULL,
  `Consulting_doctor_name` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ailments`
--
ALTER TABLE `ailments`
  ADD CONSTRAINT `ailments_ibfk_1` FOREIGN KEY (`Ailment_id`) REFERENCES `user` (`Id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`Customer_id`) REFERENCES `user` (`Id`);

--
-- Constraints for table `shopping`
--
ALTER TABLE `shopping`
  ADD CONSTRAINT `shopping_ibfk_1` FOREIGN KEY (`Customer_id`) REFERENCES `user` (`Id`),
  ADD CONSTRAINT `shopping_ibfk_2` FOREIGN KEY (`Order_id`) REFERENCES `order` (`Order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
