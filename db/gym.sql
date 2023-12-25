-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2023 at 08:25 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

DROP TABLE IF EXISTS `contact_messages`;
CREATE TABLE IF NOT EXISTS `contact_messages` (
  `mNumber` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`mNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int NOT NULL,
  `username` varchar(30) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `DOB` date DEFAULT NULL,
  `gender` char(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int NOT NULL,
  `membership` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `membership` (`membership`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `fname`, `mname`, `lname`, `DOB`, `gender`, `email`, `phone`, `membership`) VALUES
(1, 'ahmad', 'ahmad', 'B', 'alawneh', '2001-08-13', 'Male', 'a@a.com', 791234567, 1);

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

DROP TABLE IF EXISTS `memberships`;
CREATE TABLE IF NOT EXISTS `memberships` (
  `mNumber` int NOT NULL AUTO_INCREMENT,
  `Mname` varchar(25) NOT NULL,
  `price` float NOT NULL,
  UNIQUE KEY `Mname` (`Mname`),
  UNIQUE KEY `mNumber_3` (`mNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`mNumber`, `Mname`, `price`) VALUES
(1, 'annual', 319),
(2, 'oneMonth', 49),
(3, 'threeMonths', 99);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `price` float NOT NULL,
  `type` varchar(60) NOT NULL,
  `img` varchar(20) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `name`, `price`, `type`, `img`) VALUES
(1, 'BioTech 1Kg Protien Powder', 59.99, 'SUPPLEMENTS', 'protein1.jpg'),
(2, 'BioTech 2Kg Protien Powder', 109.99, 'SUPPLEMENTS', 'protien2.jpg'),
(3, 'Amino Acids', 19.99, 'SUPPLEMENTS', 'amino acids.webp'),
(4, 'Adjustable Dumbells (2.25Kg-24Kg)', 99.99, 'EQUIPMENT', 'dumbells.jpg'),
(5, 'ProBody Pilates Ball ', 14.99, 'EQUIPMENT', 'pilates ball.jpg'),
(6, 'Coated KettleBell (2.25Kg-22.5Kg)', 19.99, 'EQUIPMENT', 'kettleball.jpg'),
(7, 'Body Building Gloves', 9.99, 'EQUIPMENT', 'gloves.jpeg'),
(8, 'T90 Sport Bag', 19.99, 'EQUIPMENT', 'sportbag.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `is_admin`) VALUES
(1, 'ahmad', '0c870b38522626f0b125797cd87d4bd6', 1);
-- password = ahmad1234 
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `id_fk1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `membership` FOREIGN KEY (`membership`) REFERENCES `memberships` (`mNumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `username_fk` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
