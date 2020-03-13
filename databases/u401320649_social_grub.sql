-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2020 at 08:26 AM
-- Server version: 10.2.30-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u401320649_social_grub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(50) NOT NULL,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email_id`, `password`) VALUES
(0, 'raju', 'raju@gmail.com', 'poiuy'),
(7, 'lakshman', 'lk@gmail.com', '43722f2440d7028a19fe3f7484385a73'),
(57, 'lathika', 'hhh@gmail.com', '43722f2440d7028a19fe3f7484385a73'),
(67, 'ravi', 'fff@gmail.com', '43722f2440d7028a19fe3f7484385a73'),
(89, 'lathika', 'kkkk@gmail.com', '43722f2440d7028a19fe3f7484385a73'),
(112, 'Santhya', 'santhya@rr.com', '43722f2440d7028a19fe3f7484385a73'),
(130, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70'),
(133, 'cathy', 'cathy@gmail.com', '202cb962ac59075b964b07152d234b70'),
(134, 'daisy', 'daisy@gmail.com', '202cb962ac59075b964b07152d234b70'),
(135, 'lara', 'lara@gmail.com', '202cb962ac59075b964b07152d234b70'),
(136, 'vini', 'a@gmail.com', '202cb962ac59075b964b07152d234b70'),
(138, 'dj', 'tiwinkumar.tk@gmail.', '202cb962ac59075b964b07152d234b70'),
(139, 'RABINA', 'rabinacathrine@gmail', '1a360c93e3dd488d085000301b3e86d1'),
(140, 'sundar', 'sundar@gmail.com', '3daf6955f1575115e21e448e0b559a3b'),
(141, 'sundar', 'sundar@gmail.com', '3daf6955f1575115e21e448e0b559a3b'),
(142, 'dj', 's@gmail.com', '64ca60972a6ec926d1c4b9d31080c687'),
(143, 'Syunun', 's@gmail.com', '64ca60972a6ec926d1c4b9d31080c687'),
(144, 'abc', 'abc@mail.com', '900150983cd24fb0d6963f7d28e17f72'),
(145, 'Doe', 'john@example.com', '7y7y7y'),
(146, 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ailments`
--

CREATE TABLE `ailments` (
  `Ailment_id` int(3) DEFAULT NULL,
  `Ailments` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `user_id` int(10) NOT NULL,
  `doctor_id` int(7) NOT NULL,
  `doctor_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `specialist` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `experience` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `fees` int(8) NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`user_id`, `doctor_id`, `doctor_name`, `specialist`, `experience`, `date`, `fees`, `time`) VALUES
(0, 1, 'ravi', 'dgo', '3', '2020-02-11', 100, '12:00pm'),
(0, 2, 'ravi', 'dgo', '3', '2020-02-11', 100, '12:00pm'),
(0, 3, 'bhuvan1', 'Ortho', '10', '0000-00-00', 100, '2:25'),
(0, 4, 'bhuvan12', 'Ortho', '10', '0000-00-00', 100, '2:25'),
(0, 5, 'rani', 'dgo', '10 yrs of ', '0000-00-00', 0, ''),
(0, 6, 'venkat', 'child', '10 yrs of ', '0000-00-00', 0, ''),
(0, 7, 'rani', 'dgo', '10 yrs of ', '0000-00-00', 0, ''),
(0, 8, 'rani', 'dgo', '10 yrs of ', '0000-00-00', 0, '10:20 am'),
(0, 9, 'rani', 'dgo', '10 yrs of ', '2020-01-11', 0, '05:47 am'),
(0, 10, 'venkat', 'child', 'nullyrs of', '2020-01-18', 0, '09:21 pm'),
(0, 11, 'qq', 'qq', 'nullyrs of', '2020-01-03', 123, '10:20 pm'),
(0, 12, '', '', '', '0000-00-00', 0, ''),
(0, 13, '', '', '', '0000-00-00', 0, ''),
(0, 14, 'rani', 'dgo', 'nullyrs of', '2020-01-19', 0, '04:07 pm'),
(0, 15, '', '', '', '0000-00-00', 0, ''),
(0, 16, '', '', '', '0000-00-00', 0, ''),
(0, 17, '', '', '', '0000-00-00', 0, ''),
(0, 18, '', '', '', '0000-00-00', 0, ''),
(0, 19, '', '', '', '0000-00-00', 0, ''),
(0, 20, '', '', '', '0000-00-00', 0, ''),
(0, 21, '', '', '', '0000-00-00', 0, ''),
(0, 22, '', '', '', '0000-00-00', 0, ''),
(0, 23, '', '', '', '0000-00-00', 0, ''),
(0, 24, '', '', '', '0000-00-00', 0, ''),
(0, 25, '', '', '', '0000-00-00', 0, ''),
(0, 26, '', '', '', '0000-00-00', 0, ''),
(0, 27, '', '', '', '0000-00-00', 0, ''),
(0, 28, '', '', '', '0000-00-00', 0, ''),
(0, 29, '', '', '', '0000-00-00', 0, ''),
(0, 30, '', '', '', '0000-00-00', 0, ''),
(0, 31, '', '', '', '0000-00-00', 0, ''),
(0, 32, '', '', '', '0000-00-00', 0, ''),
(0, 33, '', '', '', '0000-00-00', 0, ''),
(0, 34, '', '', '', '0000-00-00', 0, ''),
(0, 35, '', '', '', '0000-00-00', 0, ''),
(0, 36, '', '', '', '0000-00-00', 0, ''),
(0, 37, '', '', '', '0000-00-00', 0, ''),
(0, 38, '', '', '', '0000-00-00', 0, ''),
(0, 39, '', '', '', '0000-00-00', 0, ''),
(0, 40, '', '', '', '0000-00-00', 0, ''),
(0, 41, '', '', '', '0000-00-00', 0, ''),
(0, 42, '', '', '', '0000-00-00', 0, ''),
(0, 43, '', '', '', '0000-00-00', 0, ''),
(0, 44, '', '', '', '0000-00-00', 0, ''),
(0, 45, '', '', '', '0000-00-00', 0, ''),
(0, 46, '', '', '', '0000-00-00', 0, ''),
(0, 47, '', '', '', '0000-00-00', 0, ''),
(0, 48, '', '', '', '0000-00-00', 0, ''),
(0, 49, '', '', '', '0000-00-00', 0, ''),
(0, 50, '', '', '', '0000-00-00', 0, ''),
(0, 51, '', '', '', '0000-00-00', 0, ''),
(0, 52, '', '', '', '0000-00-00', 0, ''),
(0, 53, '', '', '', '0000-00-00', 0, ''),
(0, 54, '', '', '', '0000-00-00', 0, ''),
(0, 55, '', '', '', '0000-00-00', 0, ''),
(0, 56, '', '', '', '0000-00-00', 0, ''),
(0, 57, '', '', '', '0000-00-00', 0, ''),
(0, 58, '', '', '', '0000-00-00', 0, ''),
(0, 59, '', '', '', '0000-00-00', 0, ''),
(0, 60, '', '', '', '0000-00-00', 0, ''),
(0, 61, '', '', '', '0000-00-00', 0, ''),
(0, 62, '', '', '', '0000-00-00', 0, ''),
(0, 63, '', '', '', '0000-00-00', 0, ''),
(0, 64, '', '', '', '0000-00-00', 0, ''),
(0, 65, '', '', '', '0000-00-00', 0, ''),
(0, 66, '', '', '', '0000-00-00', 0, ''),
(0, 67, '', '', '', '0000-00-00', 0, ''),
(0, 68, '', '', '', '0000-00-00', 0, ''),
(0, 69, '', '', '', '0000-00-00', 0, ''),
(0, 70, '', '', '', '0000-00-00', 0, ''),
(0, 71, '', '', '', '0000-00-00', 0, ''),
(0, 72, '', '', '', '0000-00-00', 0, ''),
(0, 73, '', '', '', '0000-00-00', 0, ''),
(0, 74, '', '', '', '0000-00-00', 0, ''),
(0, 75, '', '', '', '0000-00-00', 0, ''),
(0, 76, '', '', '', '0000-00-00', 0, ''),
(0, 77, '', '', '', '0000-00-00', 0, ''),
(0, 78, '', '', '', '0000-00-00', 0, ''),
(0, 79, '', '', '', '0000-00-00', 0, ''),
(0, 80, '', '', '', '0000-00-00', 0, ''),
(0, 81, '', '', '', '0000-00-00', 0, ''),
(0, 82, '', '', '', '0000-00-00', 0, ''),
(0, 83, '', '', '', '0000-00-00', 0, ''),
(0, 84, '', '', '', '0000-00-00', 0, ''),
(0, 85, '', '', '', '0000-00-00', 0, ''),
(0, 86, '', '', '', '0000-00-00', 0, ''),
(0, 87, '', '', '', '0000-00-00', 0, ''),
(0, 88, '', '', '', '0000-00-00', 0, ''),
(0, 89, '', '', '', '0000-00-00', 0, ''),
(0, 90, '', '', '', '0000-00-00', 0, ''),
(0, 91, '', '', '', '0000-00-00', 0, ''),
(0, 92, '', '', '', '0000-00-00', 0, ''),
(0, 93, '', '', '', '0000-00-00', 0, ''),
(0, 94, '', '', '', '0000-00-00', 0, ''),
(0, 95, '', '', '', '0000-00-00', 0, ''),
(0, 96, '', '', '', '0000-00-00', 0, ''),
(0, 97, '', '', '', '0000-00-00', 0, ''),
(0, 98, '', '', '', '0000-00-00', 0, ''),
(0, 99, '', '', '', '0000-00-00', 0, ''),
(0, 100, '', '', '', '0000-00-00', 0, ''),
(0, 101, '', '', '', '0000-00-00', 0, ''),
(0, 102, '', '', '', '0000-00-00', 0, ''),
(0, 103, '', '', '', '0000-00-00', 0, ''),
(0, 104, '', '', '', '0000-00-00', 0, ''),
(0, 105, '', '', '', '0000-00-00', 0, ''),
(0, 106, '', '', '', '0000-00-00', 0, ''),
(0, 107, '', '', '', '0000-00-00', 0, ''),
(0, 108, '', '', '', '0000-00-00', 0, ''),
(0, 109, '', '', '', '0000-00-00', 0, ''),
(0, 110, '', '', '', '0000-00-00', 0, ''),
(0, 111, '', '', '', '0000-00-00', 0, ''),
(0, 112, '', '', '', '0000-00-00', 0, ''),
(0, 113, '', '', '', '0000-00-00', 0, ''),
(0, 114, '', '', '', '0000-00-00', 0, ''),
(0, 115, '', '', '', '0000-00-00', 0, ''),
(0, 116, '', '', '', '0000-00-00', 0, ''),
(0, 117, '', '', '', '0000-00-00', 0, ''),
(0, 118, '', '', '', '0000-00-00', 0, ''),
(0, 119, '', '', '', '0000-00-00', 0, ''),
(0, 120, '', '', '', '0000-00-00', 0, ''),
(0, 121, '', '', '', '0000-00-00', 0, ''),
(0, 122, '', '', '', '0000-00-00', 0, ''),
(0, 123, '', '', '', '0000-00-00', 0, ''),
(0, 124, '', '', '', '0000-00-00', 0, ''),
(0, 125, '', '', '', '0000-00-00', 0, ''),
(0, 126, '', '', '', '0000-00-00', 0, ''),
(0, 127, '', '', '', '0000-00-00', 0, ''),
(0, 128, '', '', '', '0000-00-00', 0, ''),
(0, 129, '', '', '', '0000-00-00', 0, ''),
(0, 130, '', '', '', '0000-00-00', 0, ''),
(0, 131, '', '', '', '0000-00-00', 0, ''),
(0, 132, '', '', '', '0000-00-00', 0, ''),
(0, 133, '', '', '', '0000-00-00', 0, ''),
(0, 134, '', '', '', '0000-00-00', 0, ''),
(0, 135, '', '', '', '0000-00-00', 0, ''),
(0, 136, '', '', '', '0000-00-00', 0, ''),
(0, 137, '', '', '', '0000-00-00', 0, ''),
(0, 138, '', '', '', '0000-00-00', 0, ''),
(0, 139, '', '', '', '0000-00-00', 0, ''),
(0, 140, '', '', '', '0000-00-00', 0, ''),
(0, 141, '', '', '', '0000-00-00', 0, ''),
(0, 142, '', '', '', '0000-00-00', 0, ''),
(0, 143, '', '', '', '0000-00-00', 0, ''),
(0, 144, '', '', '', '0000-00-00', 0, ''),
(0, 145, '', '', '', '0000-00-00', 0, ''),
(0, 146, '', '', '', '0000-00-00', 0, ''),
(0, 147, '', '', '', '0000-00-00', 0, ''),
(0, 148, '', '', '', '0000-00-00', 0, ''),
(0, 149, '', '', '', '0000-00-00', 0, ''),
(0, 150, '', '', '', '0000-00-00', 0, ''),
(0, 151, '', '', '', '0000-00-00', 0, ''),
(0, 152, '', '', '', '0000-00-00', 0, ''),
(0, 153, '', '', '', '0000-00-00', 0, ''),
(0, 154, '', '', '', '0000-00-00', 0, ''),
(0, 155, '', '', '', '0000-00-00', 0, ''),
(0, 156, '', '', '', '0000-00-00', 0, ''),
(0, 157, '', '', '', '0000-00-00', 0, ''),
(0, 158, '', '', '', '0000-00-00', 0, ''),
(0, 159, '', '', '', '0000-00-00', 0, ''),
(0, 160, '', '', '', '0000-00-00', 0, ''),
(0, 161, '', '', '', '0000-00-00', 0, ''),
(0, 162, '', '', '', '0000-00-00', 0, ''),
(0, 163, '', '', '', '0000-00-00', 0, ''),
(0, 164, '', '', '', '0000-00-00', 0, ''),
(0, 165, '', '', '', '0000-00-00', 0, ''),
(0, 166, '', '', '', '0000-00-00', 0, ''),
(0, 167, '', '', '', '0000-00-00', 0, ''),
(0, 168, '', '', '', '0000-00-00', 0, ''),
(0, 169, '', '', '', '0000-00-00', 0, ''),
(0, 170, '', '', '', '0000-00-00', 0, ''),
(0, 171, '', '', '', '0000-00-00', 0, ''),
(0, 172, '', '', '', '0000-00-00', 0, ''),
(0, 173, '', '', '', '0000-00-00', 0, ''),
(0, 174, '', '', '', '0000-00-00', 0, ''),
(0, 175, '', '', '', '0000-00-00', 0, ''),
(0, 176, '', '', '', '0000-00-00', 0, ''),
(0, 177, '', '', '', '0000-00-00', 0, ''),
(0, 178, '', '', '', '0000-00-00', 0, ''),
(0, 179, '', '', '', '0000-00-00', 0, ''),
(0, 180, '', '', '', '0000-00-00', 0, ''),
(0, 181, '', '', '', '0000-00-00', 0, ''),
(0, 182, '', '', '', '0000-00-00', 0, ''),
(0, 183, '', '', '', '0000-00-00', 0, ''),
(0, 184, '', '', '', '0000-00-00', 0, ''),
(0, 185, '', '', '', '0000-00-00', 0, ''),
(0, 186, '', '', '', '0000-00-00', 0, ''),
(0, 187, '', '', '', '0000-00-00', 0, ''),
(0, 188, '', '', '', '0000-00-00', 0, ''),
(0, 189, '', '', '', '0000-00-00', 0, ''),
(0, 190, '', '', '', '0000-00-00', 0, ''),
(0, 191, '', '', '', '0000-00-00', 0, ''),
(0, 192, '', '', '', '0000-00-00', 0, ''),
(0, 193, '', '', '', '0000-00-00', 0, ''),
(0, 194, '', '', '', '0000-00-00', 0, ''),
(0, 195, '', '', '', '0000-00-00', 0, ''),
(0, 196, '', '', '', '0000-00-00', 0, ''),
(0, 197, '', '', '', '0000-00-00', 0, ''),
(0, 198, '', '', '', '0000-00-00', 0, ''),
(0, 199, '', '', '', '0000-00-00', 0, ''),
(0, 200, '', '', '', '0000-00-00', 0, ''),
(0, 201, '', '', '', '0000-00-00', 0, ''),
(0, 202, '', '', '', '0000-00-00', 0, ''),
(0, 203, '', '', '', '0000-00-00', 0, ''),
(0, 204, '', '', '', '0000-00-00', 0, ''),
(0, 205, '', '', '', '0000-00-00', 0, ''),
(0, 206, '', '', '', '0000-00-00', 0, ''),
(0, 207, '', '', '', '0000-00-00', 0, ''),
(0, 208, '', '', '', '0000-00-00', 0, ''),
(0, 209, '', '', '', '0000-00-00', 0, ''),
(0, 210, '', '', '', '0000-00-00', 0, ''),
(0, 211, '', '', '', '0000-00-00', 0, ''),
(0, 212, '', '', '', '0000-00-00', 0, ''),
(0, 213, '', '', '', '0000-00-00', 0, ''),
(0, 214, '', '', '', '0000-00-00', 0, ''),
(0, 215, '', '', '', '0000-00-00', 0, ''),
(0, 216, '', '', '', '0000-00-00', 0, ''),
(0, 217, '', '', '', '0000-00-00', 0, ''),
(0, 218, '', '', '', '0000-00-00', 0, ''),
(0, 219, '', '', '', '0000-00-00', 0, ''),
(0, 220, '', '', '', '0000-00-00', 0, ''),
(0, 221, '', '', '', '0000-00-00', 0, ''),
(0, 222, '', '', '', '0000-00-00', 0, ''),
(0, 223, '', '', '', '0000-00-00', 0, ''),
(0, 224, '', '', '', '0000-00-00', 0, ''),
(0, 225, '', '', '', '0000-00-00', 0, ''),
(0, 226, '', '', '', '0000-00-00', 0, ''),
(0, 227, '', '', '', '0000-00-00', 0, ''),
(0, 228, '', '', '', '0000-00-00', 0, ''),
(0, 229, '', '', '', '0000-00-00', 0, ''),
(0, 230, '', '', '', '0000-00-00', 0, ''),
(0, 231, '', '', '', '0000-00-00', 0, ''),
(0, 232, '', '', '', '0000-00-00', 0, ''),
(0, 233, '', '', '', '0000-00-00', 0, ''),
(0, 234, '', '', '', '0000-00-00', 0, ''),
(0, 235, '', '', '', '0000-00-00', 0, ''),
(0, 236, '', '', '', '0000-00-00', 0, ''),
(0, 237, '', '', '', '0000-00-00', 0, ''),
(0, 238, '', '', '', '0000-00-00', 0, ''),
(0, 239, '', '', '', '0000-00-00', 0, ''),
(0, 240, '', '', '', '0000-00-00', 0, ''),
(0, 241, '', '', '', '0000-00-00', 0, ''),
(0, 242, '', '', '', '0000-00-00', 0, ''),
(0, 243, '', '', '', '0000-00-00', 0, ''),
(0, 244, '', '', '', '0000-00-00', 0, ''),
(0, 245, '', '', '', '0000-00-00', 0, ''),
(0, 246, '', '', '', '0000-00-00', 0, ''),
(0, 247, '', '', '', '0000-00-00', 0, ''),
(0, 248, '', '', '', '0000-00-00', 0, ''),
(0, 249, '', '', '', '0000-00-00', 0, ''),
(0, 250, '', '', '', '0000-00-00', 0, ''),
(0, 251, '', '', '', '0000-00-00', 0, ''),
(0, 252, '', '', '', '0000-00-00', 0, ''),
(0, 253, '', '', '', '0000-00-00', 0, ''),
(0, 254, '', '', '', '0000-00-00', 0, ''),
(0, 255, '', '', '', '0000-00-00', 0, ''),
(0, 256, '', '', '', '0000-00-00', 0, ''),
(0, 257, '', '', '', '0000-00-00', 0, ''),
(0, 258, '', '', '', '0000-00-00', 0, ''),
(0, 259, '', '', '', '0000-00-00', 0, ''),
(0, 260, '', '', '', '0000-00-00', 0, ''),
(0, 261, '', '', '', '0000-00-00', 0, ''),
(0, 262, '', '', '', '0000-00-00', 0, ''),
(0, 263, '', '', '', '0000-00-00', 0, ''),
(0, 264, '', '', '', '0000-00-00', 0, ''),
(0, 265, '', '', '', '0000-00-00', 0, ''),
(0, 266, '', '', '', '0000-00-00', 0, ''),
(0, 267, '', '', '', '0000-00-00', 0, ''),
(0, 268, '', '', '', '0000-00-00', 0, ''),
(0, 269, '', '', '', '0000-00-00', 0, ''),
(0, 270, '', '', '', '0000-00-00', 0, ''),
(0, 271, '', '', '', '0000-00-00', 0, ''),
(0, 272, '', '', '', '0000-00-00', 0, ''),
(0, 273, '', '', '', '0000-00-00', 0, ''),
(0, 274, '', '', '', '0000-00-00', 0, ''),
(0, 275, '', '', '', '0000-00-00', 0, ''),
(0, 276, '', '', '', '0000-00-00', 0, ''),
(0, 277, '', '', '', '0000-00-00', 0, ''),
(0, 278, '', '', '', '0000-00-00', 0, ''),
(0, 279, '', '', '', '0000-00-00', 0, ''),
(0, 280, '', '', '', '0000-00-00', 0, ''),
(0, 281, '', '', '', '0000-00-00', 0, ''),
(0, 282, '', '', '', '0000-00-00', 0, ''),
(0, 283, '', '', '', '0000-00-00', 0, ''),
(0, 284, '', '', '', '0000-00-00', 0, ''),
(0, 285, '', '', '', '0000-00-00', 0, ''),
(0, 286, '', '', '', '0000-00-00', 0, ''),
(0, 287, '', '', '', '0000-00-00', 0, ''),
(0, 288, '', '', '', '0000-00-00', 0, ''),
(0, 289, '', '', '', '0000-00-00', 0, ''),
(0, 290, '', '', '', '0000-00-00', 0, ''),
(0, 291, '', '', '', '0000-00-00', 0, ''),
(0, 292, '', '', '', '0000-00-00', 0, ''),
(0, 293, '', '', '', '0000-00-00', 0, ''),
(0, 294, '', '', '', '0000-00-00', 0, ''),
(0, 295, '', '', '', '0000-00-00', 0, ''),
(0, 296, '', '', '', '0000-00-00', 0, ''),
(0, 297, '', '', '', '0000-00-00', 0, ''),
(0, 298, '', '', '', '0000-00-00', 0, ''),
(0, 299, '', '', '', '0000-00-00', 0, ''),
(0, 300, '', '', '', '0000-00-00', 0, ''),
(0, 301, '', '', '', '0000-00-00', 0, ''),
(0, 302, '', '', '', '0000-00-00', 0, ''),
(0, 303, '', '', '', '0000-00-00', 0, ''),
(0, 304, '', '', '', '0000-00-00', 0, ''),
(0, 305, '', '', '', '0000-00-00', 0, ''),
(0, 306, '', '', '', '0000-00-00', 0, ''),
(0, 307, '', '', '', '0000-00-00', 0, ''),
(0, 308, '', '', '', '0000-00-00', 0, ''),
(0, 309, '', '', '', '0000-00-00', 0, ''),
(0, 310, '', '', '', '0000-00-00', 0, ''),
(0, 311, '', '', '', '0000-00-00', 0, ''),
(0, 312, '', '', '', '0000-00-00', 0, ''),
(0, 313, '', '', '', '0000-00-00', 0, ''),
(0, 314, '', '', '', '0000-00-00', 0, ''),
(0, 315, '', '', '', '0000-00-00', 0, ''),
(0, 316, '', '', '', '0000-00-00', 0, ''),
(0, 317, '', '', '', '0000-00-00', 0, ''),
(0, 318, '', '', '', '0000-00-00', 0, ''),
(0, 319, '', '', '', '0000-00-00', 0, ''),
(0, 320, '', '', '', '0000-00-00', 0, ''),
(0, 321, '', '', '', '0000-00-00', 0, ''),
(0, 322, '', '', '', '0000-00-00', 0, ''),
(0, 323, '', '', '', '0000-00-00', 0, ''),
(0, 324, '', '', '', '0000-00-00', 0, ''),
(0, 325, '', '', '', '0000-00-00', 0, ''),
(0, 326, '', '', '', '0000-00-00', 0, ''),
(0, 327, '', '', '', '0000-00-00', 0, ''),
(0, 328, '', '', '', '0000-00-00', 0, ''),
(0, 329, '', '', '', '0000-00-00', 0, ''),
(0, 330, '', '', '', '0000-00-00', 0, ''),
(0, 331, '', '', '', '0000-00-00', 0, ''),
(0, 332, '', '', '', '0000-00-00', 0, ''),
(0, 333, '', '', '', '0000-00-00', 0, ''),
(0, 334, '', '', '', '0000-00-00', 0, ''),
(0, 335, '', '', '', '0000-00-00', 0, ''),
(0, 336, '', '', '', '0000-00-00', 0, ''),
(0, 337, '', '', '', '0000-00-00', 0, ''),
(0, 338, '', '', '', '0000-00-00', 0, ''),
(0, 339, '', '', '', '0000-00-00', 0, ''),
(0, 340, '', '', '', '0000-00-00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_image` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_image`) VALUES
('final.png'),
('final.png'),
('Screenshot (68).png'),
('Screenshot (68).png');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` int(10) NOT NULL,
  `cart_id` int(20) NOT NULL,
  `product_image` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_count` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`user_id`, `cart_id`, `product_image`, `product_name`, `product_count`, `price`) VALUES
(0, 379, '', 're', '4', '32'),
(0, 380, '', 're', '3', '32'),
(0, 381, '', 're', '4', '32'),
(0, 382, '', 're', '3', '32'),
(0, 383, '', 're', '3', '32'),
(0, 384, '', '', '', ''),
(0, 385, '', '', '', ''),
(0, 386, '', '', '', ''),
(0, 387, '', '', '', ''),
(0, 388, '', '', '', ''),
(0, 389, '', '', '', ''),
(0, 390, '', '', '', ''),
(0, 391, '', '', '', ''),
(0, 392, '', '', '', ''),
(0, 393, '', '', '', ''),
(0, 394, '', '', '', ''),
(0, 395, '', '', '', ''),
(0, 396, '', '', '', ''),
(0, 397, '', '', '', ''),
(0, 398, '', '', '', ''),
(0, 399, '', '', '', ''),
(0, 400, '', '', '', ''),
(0, 401, '', '', '', ''),
(0, 402, '', '', '', ''),
(0, 403, '', '', '', ''),
(0, 404, '', '', '', ''),
(0, 405, '', '', '', ''),
(0, 406, '', '', '', ''),
(0, 407, 'reslogo1.png', 'helo', '2', '78'),
(0, 408, 'reslogo1.png', 'helo', '2', '78'),
(0, 409, 'reslogo1.png', 'helo', '2', '78'),
(0, 410, 'reslogo1.png', 'helo', '2', '78'),
(0, 411, 'reslogo1.png', 'helo', '2', '78'),
(0, 412, 'reslogo1.png', 'productname', '3', '32'),
(0, 413, '', '', '', ''),
(0, 414, '', '', '2', ''),
(0, 415, '', 'hari', '1', ''),
(0, 416, '', 'hari', '1', '234'),
(0, 417, '', 'Gulcovita', '1', '999'),
(0, 418, '', 're', '1', '32'),
(0, 419, '', '', '1', ''),
(0, 420, '', 'hari', '1', ''),
(0, 421, '', 'hari', '1', ''),
(0, 422, '', 'hari', '1', '234'),
(0, 423, '', '', '1', ''),
(0, 424, '', '', '1', ''),
(0, 425, '', '', '6', ''),
(0, 426, '', '', '6', ''),
(0, 427, '', '', '6', ''),
(0, 428, '', 're', '4', '32'),
(0, 429, '', 're', '1', '32'),
(0, 430, '', 're', '1', '32'),
(0, 431, '', 're', '3', '32'),
(0, 432, '', 're', '1', '32'),
(0, 433, '', 're', '1', '32'),
(0, 434, '', 're', '1', '32'),
(0, 435, '', 're', '1', '32');

-- --------------------------------------------------------

--
-- Table structure for table `cust_prescription`
--

CREATE TABLE `cust_prescription` (
  `user_id` int(10) NOT NULL,
  `id` int(5) NOT NULL,
  `patient_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tablet_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dosage` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `after_meals` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `before_meals` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `morning` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `afternoon` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `night` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `vistored_doctor` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cust_prescription`
--

INSERT INTO `cust_prescription` (`user_id`, `id`, `patient_name`, `tablet_name`, `dosage`, `after_meals`, `before_meals`, `morning`, `afternoon`, `night`, `vistored_doctor`) VALUES
(0, 1, 'qqwq', 'wqwew', '3mg', '1', '', '1', '', '1', ''),
(0, 2, 'qqwq', 'wqwew', '3mg', '1', '', '1', '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(10) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `specialist` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hospital_name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `qualification` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fees` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `experience` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `lab_facility` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `name`, `specialist`, `address`, `hospital_name`, `qualification`, `fees`, `experience`, `phone_number1`, `phone_number2`, `lab_facility`) VALUES
(1, 'venkat', 'child', 'kovai', 'kmch', '', '', '', '', '', '0'),
(2, 'rani', 'dgo', 'chennai', 'apollo', '', '', '', '', '', '0'),
(3, 'venkat', 'child', 'kovai', 'kmch', '', '', '', '', '', '0'),
(4, 'rani', 'dgo', 'chennai', 'apollo', '', '', '', '', '', '0'),
(5, 'qq', 'qq', 'qq', 'qq', 'qq', '123', 'qq', '12345', '2345', '0'),
(6, 'qq', 'qq', 'qq', 'qq', 'qq', '123', 'qq', '12345', '2345', '0'),
(7, 'gg', 'gg', 'g', 'g', 'g', '234', '4', '4568', '98765', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_order`
--

CREATE TABLE `invoice_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_receiver_name` varchar(250) NOT NULL,
  `order_receiver_address` text NOT NULL,
  `order_total_before_tax` decimal(10,2) NOT NULL,
  `order_total_tax` decimal(10,2) NOT NULL,
  `order_tax_per` varchar(250) NOT NULL,
  `order_total_after_tax` double(10,2) NOT NULL,
  `order_amount_paid` decimal(10,2) NOT NULL,
  `order_total_amount_due` decimal(10,2) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_order`
--

INSERT INTO `invoice_order` (`order_id`, `user_id`, `order_date`, `order_receiver_name`, `order_receiver_address`, `order_total_before_tax`, `order_total_tax`, `order_tax_per`, `order_total_after_tax`, `order_amount_paid`, `order_total_amount_due`, `note`) VALUES
(1, 1, '2020-02-17 13:06:30', 'name', 'add', '1480.00', '74.00', '5', 1554.00, '1554.00', '0.00', ''),
(2, 0, '2020-02-17 13:32:05', 'name here', 'address here', '2816.00', '84.48', '3', 2900.48, '2900.00', '0.48', ''),
(3, 0, '2020-02-17 14:03:03', 'CompanyName', 'add', '133.00', '3.33', '2.5', 136.32, '136.00', '0.32', ''),
(4, 0, '2020-02-17 14:05:52', 'helo', 'add', '3354.00', '335.40', '10', 3689.40, '3689.00', '0.40', ''),
(5, 0, '2020-02-17 17:55:17', 'helo', 'add', '1240.00', '285.20', '23', 1525.20, '32.00', '1493.20', ''),
(6, 0, '2020-02-17 17:56:25', 'kjhk', 'jhkj', '57246.00', '507772.02', '887', 565018.02, '98765.00', '466253.02', ''),
(7, 0, '2020-02-17 17:57:08', 'kjhjk', 'hk', '4732.00', '378.56', '8', 5110.56, '1000.00', '4110.56', ''),
(8, 0, '2020-02-17 18:06:07', 'hkjh', 'kjh', '5721729.00', '0.00', '', 5721729.00, '0.00', '5721729.00', ''),
(9, 0, '2020-02-17 18:07:50', 'yui', '88', '456.00', '127.68', '28', 583.68, '500.00', '83.68', ''),
(10, 0, '2020-02-17 18:57:08', 'comp', 'add', '468.00', '14.04', '3', 482.04, '480.00', '2.04', ''),
(11, 1, '2020-02-17 19:00:52', 'iuy', 'uy', '61464.00', '1843.92', '3', 63307.92, '50000.00', '13307.92', ''),
(12, 0, '2020-02-17 19:01:57', 'kjh', 'jkhkj', '6608.00', '1387.68', '21', 7995.68, '313.00', '7682.68', ''),
(13, 0, '2020-02-17 19:17:00', 'Helo', 'add', '572.00', '11.44', '2', 583.44, '583.00', '0.44', ''),
(14, 0, '2020-02-17 19:20:51', 'jkhk', 'hkjh', '780.00', '54.60', '7', 834.60, '7261.00', '-6426.40', ''),
(15, 0, '2020-02-17 19:23:46', 'kh', 'kjhjk', '68469.00', '464219.82', '678', 532688.82, '87655.00', '445033.82', ''),
(16, 0, '2020-02-17 19:40:54', 'jkh', 'ui', '6084.00', '1946.88', '32', 8030.88, '32.00', '7998.88', ''),
(17, 0, '2020-02-18 10:34:55', 'santhiya', 'udt', '100.00', '10.00', '10', 110.00, '200.00', '-90.00', ''),
(18, 0, '2020-02-20 10:01:47', 'kjh', 'mnbv', '195.00', '3.90', '2', 198.90, '200.00', '-1.10', 'dfghj'),
(19, 0, '2020-02-20 17:10:07', 'jhg', 'hkjh', '1156.00', '647.36', '56', 1803.36, '1800.00', '3.36', ''),
(20, 0, '2020-02-20 17:12:22', 'heloo', 'addres', '4480.00', '1478.40', '33', 5958.40, '5850.00', '108.40', ''),
(21, 0, '2020-02-20 17:20:08', 'hi', 'ad', '3025.00', '151.25', '5', 3176.25, '3000.00', '176.25', '');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_order_item`
--

CREATE TABLE `invoice_order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_code` varchar(250) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `order_item_quantity` decimal(10,2) NOT NULL,
  `order_item_price` decimal(10,2) NOT NULL,
  `order_item_final_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_order_item`
--

INSERT INTO `invoice_order_item` (`order_item_id`, `order_id`, `item_code`, `item_name`, `order_item_quantity`, `order_item_price`, `order_item_final_amount`) VALUES
(1, 1, 'helo', '123', '33.00', '40.00', '1320.00'),
(2, 1, 'world', '34', '4.00', '40.00', '160.00'),
(4, 3, '123', 'itemname', '12.00', '4.00', '48.00'),
(5, 3, '322', 'helo', '34.00', '2.50', '85.00'),
(6, 4, '324', 'hkjs', '43.00', '78.00', '3354.00'),
(7, 5, '88', 'helo', '78.00', '8.00', '624.00'),
(8, 5, '232', 'hel', '88.00', '7.00', '616.00'),
(9, 6, 'kjh', '87gh', '87.00', '658.00', '57246.00'),
(10, 7, 'kjhkj', 'hkjhkjh', '7.00', '676.00', '4732.00'),
(11, 8, '876ty', 'iuuiiokj', '87.00', '65767.00', '5721729.00'),
(12, 9, '78', 'yiuy', '76.00', '6.00', '456.00'),
(13, 10, '34', 'hkf', '78.00', '6.00', '468.00'),
(14, 11, '876gtu', '8976hjk', '788.00', '78.00', '61464.00'),
(16, 12, '866', 'hh', '86.00', '7.00', '602.00'),
(17, 12, '67', 'ui', '78.00', '77.00', '6006.00'),
(18, 13, '67', 'hh', '7.00', '65.00', '455.00'),
(19, 13, '36', 'hj', '78.00', '1.50', '117.00'),
(21, 2, '234', 'hj', '32.00', '88.00', '2816.00'),
(23, 14, '98', 'hkjhk', '10.00', '78.00', '780.00'),
(24, 15, '987', 'jkhykjh', '87.00', '787.00', '68469.00'),
(25, 16, '88', 'he', '78.00', '78.00', '6084.00'),
(26, 17, '007', 'dfgh', '2.00', '50.00', '100.00'),
(27, 18, '866', 'dfgh', '6.00', '30.00', '180.00'),
(28, 18, '23', 'nyntk', '3.00', '5.00', '15.00'),
(29, 19, '43', 'try', '34.00', '34.00', '1156.00'),
(30, 20, '566', 'helo', '56.00', '80.00', '4480.00'),
(31, 21, '34', 'df', '55.00', '55.00', '3025.00');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_user`
--

CREATE TABLE `invoice_user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_user`
--

INSERT INTO `invoice_user` (`id`, `email`, `password`, `first_name`, `last_name`, `mobile`, `address`) VALUES
(1, 'admin@admin.com', 'admin', 'san', 'san', 9876543210, 'add');

-- --------------------------------------------------------

--
-- Table structure for table `news_feed`
--

CREATE TABLE `news_feed` (
  `Feed_id` int(10) NOT NULL,
  `Text` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Image` blob DEFAULT NULL,
  `Description` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_feed`
--

INSERT INTO `news_feed` (`Feed_id`, `Text`, `Image`, `Description`) VALUES
(0, 'zxcvbn,', NULL, NULL),
(10, 'comment', NULL, NULL),
(12, 'text', '', ''),
(27, 'here goes the comment section', NULL, NULL),
(41, 'lalalalalalala', '', ''),
(42, 'abcdefghijklmno', '', ''),
(48, 'lalalalalalala', '', ''),
(52, 'cdefried', '', ''),
(54, 'hatahata', '', ''),
(68, 'abcdefghijklmno', '', ''),
(69, 'lalalalalalalalalaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', ''),
(72, 'senorita senorita', '', ''),
(81, 'oyyyyyyyy', '', ''),
(82, 'hoi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `user_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `tablet_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tablet_count` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`user_id`, `order_id`, `tablet_name`, `tablet_count`) VALUES
(0, 1, 'qq', '5'),
(0, 2, 'nn', '4'),
(0, 3, 'mn', '4'),
(0, 4, 'cvbn', '7'),
(0, 5, 'aaa', '2');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(5) NOT NULL,
  `patient_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tablet_name1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dosage1` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `before_meals1` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `after_meals1` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `morning1` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `afternoon1` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `night1` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `tablet_name2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dosage2` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `before_meals2` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `after_meals2` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `morning2` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `afternoon2` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `night2` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `tablet_name3` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dosage3` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `before_meals3` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `after_meals3` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `morning3` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `afternoon3` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `night3` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `tablet_name4` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dosage4` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `before_meals4` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `after_meals4` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `morning4` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `afternoon4` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `night4` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `tablet_name5` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dosage5` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `before_meals5` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `after_meals5` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `morning5` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `afternoon5` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `night5` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `patient_name`, `tablet_name1`, `dosage1`, `before_meals1`, `after_meals1`, `morning1`, `afternoon1`, `night1`, `tablet_name2`, `dosage2`, `before_meals2`, `after_meals2`, `morning2`, `afternoon2`, `night2`, `tablet_name3`, `dosage3`, `before_meals3`, `after_meals3`, `morning3`, `afternoon3`, `night3`, `tablet_name4`, `dosage4`, `before_meals4`, `after_meals4`, `morning4`, `afternoon4`, `night4`, `tablet_name5`, `dosage5`, `before_meals5`, `after_meals5`, `morning5`, `afternoon5`, `night5`) VALUES
(1, 'er', 'gy', '4t', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'yry', '5g', 'fffgf', '', '1', '', '01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'hgvhvhvh', 'fyhu', '5mg', '0', '', '', '01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'abc', 'yugiu', '4', '', '1', '1', '1', '1', 'nbjiu', '9', '1', '', '1', '', '', ' hgjhk', '6', '', '1', '1', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `user_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `productname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expirydate` date NOT NULL,
  `stock` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`user_id`, `id`, `productname`, `company`, `category`, `price`, `sku`, `expirydate`, `stock`, `image`) VALUES
(0, 1, 're', 'we', ' rtq', '32', '3', '2020-02-22', '43', ''),
(0, 2, '', '', ' ', '', '', '0000-00-00', '', ''),
(0, 3, 'hari', 'hari', ' hari', '', '456', '0000-00-00', '123', 'final.png'),
(0, 4, 'hari', 'hari', ' hari', '234', '456', '2020-08-07', '123', 'final.png'),
(0, 5, 'Gulcovita', 'Nestle', ' Duplicate', '999', '88', '2222-08-09', '8', ''),
(0, 6, 'tablet 2', 'qwer', ' head ', '120', '', '0000-00-00', '', ''),
(0, 7, 'tablet 2', 'qwer', ' head ', '120', '22', '2020-01-05', '20', ''),
(0, 8, 'tablet 2', 'qwer', ' head ', '120', '22', '2020-01-05', '20', ''),
(0, 9, 'tabletc15', 'teli', ' stomach', '230', '2', '2020-03-12', '2', ''),
(0, 10, 'tabletc10', 'teli', ' stomach', '230', '2', '2020-03-12', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `user_id` int(10) NOT NULL,
  `id` int(6) NOT NULL,
  `description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `title` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`user_id`, `id`, `description`, `date`, `title`, `location`, `time`) VALUES
(0, 1, 'ertu', '2020-02-11', 'erty', '', '00:00:'),
(0, 2, 'uyt', '2020-02-07', 'werty', '', '00:00:'),
(0, 3, 'poiuy', '2020-02-05', 'poiu', 'oiuyk', '00:00:'),
(0, 4, 'sfdvbv', '0000-00-00', 'bhuvan12', 'Ortho', '2:25:'),
(0, 5, 'tty', '2020-03-22', 'ggg', 'ttt', '00'),
(0, 6, 'hhh', '2020-02-22', 'huj', 'uuu', '08:43 '),
(0, 7, '', '0000-00-00', '', '', ''),
(0, 8, 'ysyy', '2020-02-18', 'yuu', 'yy', '10:01 '),
(0, 9, '', '0000-00-00', '', '', ''),
(0, 10, '', '0000-00-00', '', '', ''),
(0, 11, 'one ', '2020-02-22', 'yyu', 't6', '03:35 '),
(0, 12, 'hh', '2020-02-04', 'hhh', 'j', '10:37 '),
(0, 13, 'hai', '2020-02-26', 'hhhe', 'hcbr', '07:22 pm'),
(0, 14, '', '0000-00-00', '', '', ''),
(0, 15, '', '0000-00-00', '', '', ''),
(0, 16, 'fever ', '2020-02-23', 'viral feve', 'coimbatore ', '05:19 pm'),
(0, 17, 'cold ', '2020-02-29', 'ghh', 'ikk', '02:38 pm');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_image` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmp_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_image`, `tmp_name`) VALUES
('', ''),
('', ''),
('', ''),
('', ''),
('green.png', ''),
('green.png', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE `shopping` (
  `Order_id` int(6) DEFAULT NULL,
  `Customer_id` int(6) DEFAULT NULL,
  `Amount` float DEFAULT NULL,
  `Payment` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `invoice` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`Order_id`, `Customer_id`, `Amount`, `Payment`, `invoice`) VALUES
(NULL, 1, 10000, 'cash', ''),
(NULL, 1, 10000, 'cash', ''),
(NULL, 1, 10000, 'card', ''),
(NULL, 1, 10000, 'card', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `order_no` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `order_receiver_name` varchar(250) NOT NULL,
  `order_receiver_address` text NOT NULL,
  `order_total_before_tax` decimal(10,2) NOT NULL,
  `order_total_tax1` decimal(10,2) NOT NULL,
  `order_total_tax2` decimal(10,2) NOT NULL,
  `order_total_tax3` decimal(10,2) NOT NULL,
  `order_total_tax` decimal(10,2) NOT NULL,
  `order_total_after_tax` decimal(10,2) NOT NULL,
  `order_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE `tbl_order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `order_item_quantity` decimal(10,2) NOT NULL,
  `order_item_price` decimal(10,2) NOT NULL,
  `order_item_actual_amount` decimal(10,2) NOT NULL,
  `order_item_tax1_rate` decimal(10,2) NOT NULL,
  `order_item_tax1_amount` decimal(10,2) NOT NULL,
  `order_item_tax2_rate` decimal(10,2) NOT NULL,
  `order_item_tax2_amount` decimal(10,2) NOT NULL,
  `order_item_tax3_rate` decimal(10,2) NOT NULL,
  `order_item_tax3_amount` decimal(10,2) NOT NULL,
  `order_item_final_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload_prescription`
--

CREATE TABLE `upload_prescription` (
  `user_id` int(10) NOT NULL,
  `doctor_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `visiting_date` date NOT NULL,
  `place` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `purpose_of_visit` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `upload_prescription` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `upload_prescription`
--

INSERT INTO `upload_prescription` (`user_id`, `doctor_name`, `visiting_date`, `place`, `purpose_of_visit`, `upload_prescription`) VALUES
(0, 'hari', '2020-08-08', 'dfghj', 'wrewre', 'final.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(10) NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umobile` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'sab', 'sab5@gmail.com', '2ef4d613a5cc85d9e2217a295b003815', '2020-01-13 09:05:31'),
(2, 'sab', 'sab5@gmail.com', '2ef4d613a5cc85d9e2217a295b003815', '2020-01-13 09:07:02'),
(3, 'cathy', 'rabinacathrine@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-01-13 09:08:03'),
(4, 'frg', 'frg@gmail.com', 'f5455cd4463c6a43e70f2fd8dc3ec51f', '2020-01-23 11:40:07'),
(5, 'lkj', 'lkj@gmail.com', '48e2e79fec9bc01d9a00e0a8fa68b289', '2020-01-23 11:43:19'),
(6, 'lkj', 'lkj@gmail.com', '48e2e79fec9bc01d9a00e0a8fa68b289', '2020-01-23 11:54:54'),
(7, 'sab', 'sab@gmail.com', '77422eb5d86130f6200b5e4f25b0d213', '2020-01-23 11:56:16'),
(8, 'Ramki0202', 'ram.ramki0202@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-01-23 11:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `user_id` int(7) NOT NULL,
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `gender` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `weight` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `height` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `bmi` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `bp_level` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `sugar_level` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `preferred_doctor_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`user_id`, `firstname`, `lastname`, `dob`, `email`, `address`, `phone`, `gender`, `weight`, `height`, `bmi`, `bp_level`, `sugar_level`, `preferred_doctor_name`, `image`) VALUES
(1, 'Bhuvi', 'Bhuvi', '01/12/', '', 'maill@gmail.com', 0, 'addr', '65', '165', '165', '165', '65', 'Bhuvi', 'imagef301560e-c4ed-4299-8aa1-8ee074b2f2a4.jpg'),
(2, 'Bhuvi', 'Bhuvi', '01/12/', '', 'maill@gmail.com', 0, 'addr', '65', '165', '165', '165', '65', 'Bhuvi', 'imagec16f174e-024e-466e-9157-0849c700a67a.jpg'),
(3, 'Bhuvi', 'Bhuvi', '01/12/', '', 'maill@gmail.com', 0, 'addr', '65', '165', '165', '165', '65', 'Bhuvi', 'imagee2a77f69-0ae3-426d-a5d9-9760c794a154.jpg'),
(4, 'fname', 'lname', 'dob', 'mail', 'address', 0, 'gender', 'curr', 'curr', 'bmi', 'bp', 'suga', 'dname', ''),
(5, 'Bhuvi', 'Bhuvi', '01/12/', 'Male', 'maill@gmail.com', 0, 'addr', '65', '165', '165', '165', '65', 'Bhuvi', 'imagefde41c67-491b-4a1f-8cc1-255c4bffff73.jpg'),
(6, 'Bhuvi', 'Bhuvi', '01/12/', 'Male', 'maill@gmail.com', 0, 'addr', '65', '165', '165', '165', '65', 'Bhuvi', 'imagebd059933-7005-400c-8d39-7943e42f096c.jpg'),
(7, 'Test firstname', 'Test ', '01/12/', 'testmaill@gmail.com', 'test addr', 0, 'Male', '75', '172', '', '165', '65', 'Test Dr', '3cdee695-4ed4-40e9-bbe0-c374f7fb5c6c.jpg'),
(8, 'Test firstname', 'Test ', '01/12/', 'testmaill@gmail.com', 'test addr', 0, 'Male', '75', '172', '', '165', '65', 'Test Dr', '3cdee695-4ed4-40e9-bbe0-c374f7fb5c6c.jpg'),
(9, 'Test firstname', 'Test ', '01/12/', 'testmaill@gmail.com', 'test addr', 0, 'Male', '75', '172', '', '165', '65', 'Test Dr', '3cdee695-4ed4-40e9-bbe0-c374f7fb5c6c.jpg'),
(10, 'Test firstname', 'Test ', '01/12/', 'testmaill@gmail.com', 'test addr', 0, 'Male', '75', '172', '', '165', '65', 'Test Dr', '3cdee695-4ed4-40e9-bbe0-c374f7fb5c6c.jpg'),
(11, 'Test firstname', 'Test ', '01/12/', 'testmaill@gmail.com', 'test addr', 0, 'Male', '75', '172', '', '165', '65', 'Test Dr', '3cdee695-4ed4-40e9-bbe0-c374f7fb5c6c.jpg'),
(12, 'Test firstname', 'Test ', '01/12/', 'testmaill@gmail.com', 'test addr', 0, 'Male', '75', '172', '', '165', '65', 'Test Dr', '3cdee695-4ed4-40e9-bbe0-c374f7fb5c6c.jpg'),
(13, 'Test firstname', 'Test ', '01/12/', 'testmaill@gmail.com', 'test addr', 0, 'Male', '75', '172', '', '165', '65', 'Test Dr', '3cdee695-4ed4-40e9-bbe0-c374f7fb5c6c.jpg'),
(14, 'Test firstname', 'Test ', '01/12/', 'testmaill@gmail.com', 'test addr', 0, 'Male', '75', '172', '', '165', '65', 'Test Dr', '3cdee695-4ed4-40e9-bbe0-c374f7fb5c6c.jpg'),
(15, 'Test firstname', 'Test ', '01/12/', 'testmaill@gmail.com', 'test addr', 0, 'Male', '75', '172', '', '165', '65', 'Test Dr', '3cdee695-4ed4-40e9-bbe0-c374f7fb5c6c.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ailments`
--
ALTER TABLE `ailments`
  ADD KEY `Id` (`Ailment_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cust_prescription`
--
ALTER TABLE `cust_prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `invoice_order`
--
ALTER TABLE `invoice_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `invoice_order_item`
--
ALTER TABLE `invoice_order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `news_feed`
--
ALTER TABLE `news_feed`
  ADD PRIMARY KEY (`Feed_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminder`
--
ALTER TABLE `reminder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping`
--
ALTER TABLE `shopping`
  ADD KEY `Customer_id` (`Customer_id`),
  ADD KEY `Order_id` (`Order_id`),
  ADD KEY `Order_id_2` (`Order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `doctor_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=436;

--
-- AUTO_INCREMENT for table `invoice_order`
--
ALTER TABLE `invoice_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `invoice_order_item`
--
ALTER TABLE `invoice_order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reminder`
--
ALTER TABLE `reminder`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
