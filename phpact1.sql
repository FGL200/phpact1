-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 01:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addbase_lab1`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ingredientid` char(5) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `unit` char(10) DEFAULT NULL,
  `unitprice` decimal(5,2) DEFAULT NULL,
  `foodgroup` char(15) DEFAULT NULL,
  `inventory` int(11) DEFAULT NULL,
  `supplierid` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemid` char(5) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `dateadded` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `madewith`
--

CREATE TABLE `madewith` (
  `itemid` char(5) DEFAULT NULL,
  `ingredientid` char(5) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `mealid` char(5) NOT NULL,
  `name` char(10) DEFAULT NULL,
  `description` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menuitems`
--

CREATE TABLE `menuitems` (
  `menuitemid` char(5) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partof`
--

CREATE TABLE `partof` (
  `mealid` char(5) DEFAULT NULL,
  `itemid` char(5) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `discount` decimal(2,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplierid` char(5) NOT NULL,
  `company_name` varchar(30) DEFAULT NULL,
  `rep_fname` varchar(20) DEFAULT NULL,
  `rep_lname` varchar(20) DEFAULT NULL,
  `referred_by` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ingredientid`),
  ADD KEY `supplierid_FK` (`supplierid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `madewith`
--
ALTER TABLE `madewith`
  ADD KEY `itemid_FK` (`itemid`),
  ADD KEY `ingredientid_FK` (`ingredientid`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`mealid`),
  ADD UNIQUE KEY `meal_nameFK` (`name`);

--
-- Indexes for table `menuitems`
--
ALTER TABLE `menuitems`
  ADD PRIMARY KEY (`menuitemid`),
  ADD KEY `meal_nameFK` (`name`);

--
-- Indexes for table `partof`
--
ALTER TABLE `partof`
  ADD KEY `mealid_FK` (`mealid`),
  ADD KEY `itemid_FK` (`itemid`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplierid`),
  ADD KEY `refered_byFK` (`referred_by`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD CONSTRAINT `supplierid_FK` FOREIGN KEY (`supplierid`) REFERENCES `suppliers` (`supplierid`);

--
-- Constraints for table `madewith`
--
ALTER TABLE `madewith`
  ADD CONSTRAINT `madewith_ibfk_1` FOREIGN KEY (`itemid`) REFERENCES `items` (`itemid`),
  ADD CONSTRAINT `madewith_ibfk_2` FOREIGN KEY (`ingredientid`) REFERENCES `ingredients` (`ingredientid`);

--
-- Constraints for table `menuitems`
--
ALTER TABLE `menuitems`
  ADD CONSTRAINT `meal_nameFK` FOREIGN KEY (`name`) REFERENCES `meals` (`name`);

--
-- Constraints for table `partof`
--
ALTER TABLE `partof`
  ADD CONSTRAINT `itemid_FK` FOREIGN KEY (`itemid`) REFERENCES `items` (`itemid`),
  ADD CONSTRAINT `mealid_FK` FOREIGN KEY (`mealid`) REFERENCES `meals` (`mealid`);

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `refered_byFK` FOREIGN KEY (`referred_by`) REFERENCES `suppliers` (`supplierid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
