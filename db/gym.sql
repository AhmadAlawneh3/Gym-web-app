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
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`mNumber`, `name`, `phone`, `email`, `message`) VALUES
(6, 'dasdasdsadasd', 789634596, 'dsfsdfs`fds@wdasda.com', 'dasdadasda');

-- --------------------------------------------------------

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
(11, 'ahmad', 'ahmad', 'B', 'alawneh', '2003-05-20', 'Male', 'a@a.com', 792834949, 1),
(12, 'aya', 'aya', 'saleh', 'salman', '2003-05-07', 'Female', 'ayasalman.j@gmail.com', 791312109, 1),
(13, 'tiger', 'tiger', 'tiger', 'mustafa', '2003-06-25', 'Male', 'mustafa2562003@gmail.com', 776669993, NULL),
(14, 'ayaaa', 'Aya', 'salman', 'Salman', '2003-05-07', 'f', 'ayasalman.j@gmail.com', 791312108, 1),
(15, 'abd', 'abdelrahman', 'Kamel', 'Nayfeh', '2023-05-29', 'm', 'nayfehabdelrahman@gmail.com', 790251813, NULL),
(16, 'abood', 'abood', 'kamel', 'nayfeh', '2023-06-12', 'Male', 'nayfehabdelrahman@gmail.com', 790251813, 3),
(17, 'mum', 'rasha', 'rasha', 'mustafa', '1984-07-08', 'Female', 'ayasalman.j@gmail.com', 791312108, 1),
(18, 'abu_haider', 'abu', 'abed', 'haider', '1946-05-25', 'Female', 'abuHaider@gmail.com', 784631928, NULL),
(19, 'abu_haider1', 'abu', 'abed', 'haider', '1946-05-25', 'Female', 'abuHaider@gmail.com', 784631928, 1),
(20, 'monkey', 'chipmunk', 'gorilla', 'panda', '2005-06-27', 'Female', 'ramaabuasaad11@gmail.com', 788483931, NULL),
(21, 'ruba', 'ruba', 'mohd', 'malkawi', '1977-01-14', 'Female', 'malkakssshdb@fdfdj.com', 798185520, 3),
(22, 'sara123', 'sara', 'tedmori', 'teddmori', '2023-06-10', 'Female', 'a@a.com', 789087668, 1);

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
(11, 'ahmad', '9c140fcec5136bd1eb5fad96e4201ab9', 1),
(12, 'aya', 'cfac09994fc224213e63a2fb8336ab92', 1),
(13, 'tiger', 'f986bff64aa331ab68778a9a4ea3372c', 0),
(14, 'ayaaa', 'cfac09994fc224213e63a2fb8336ab92', 0),
(15, 'abd', '7171cbe2c97cbca3dd6cf50cde37d21d', 0),
(16, 'abood', '8de13959395270bf9d6819f818ab1a00', 0),
(17, 'mum', '85b688d384b130182207ce4bf923deb7', 0),
(18, 'abu_haider', '7e2231449eb61daee84bc387360498f7', 0),
(19, 'abu_haider1', '8e869f6e094efd9e2187b797b46b60bb', 0),
(20, 'monkey', '5528593b1ccb1598205101c94741638e', 0),
(21, 'ruba', '1adbb3178591fd5bb0c248518f39bf6d', 0),
(22, 'sara123', '25d55ad283aa400af464c76d713c07ad', 0);

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
