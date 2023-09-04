-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 04:59 PM
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
  `name` varchar(30) NOT NULL,
  `unit` char(10) NOT NULL,
  `unitprice` decimal(5,2) NOT NULL,
  `foodgroup` char(5) NOT NULL,
  `inventory` int(11) NOT NULL,
  `supplierid` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`ingredientid`, `name`, `unit`, `unitprice`, `foodgroup`, `inventory`, `supplierid`) VALUES
('00001', 'Coocking Oil', '.5Kg', 50.00, 'Fat', 100, '00001'),
('00002', 'Flour', '.5Kg', 50.00, 'Proti', 100, '00002'),
('00003', 'Vinegar', '.5Kg', 50.00, 'Prote', 100, '00003'),
('00004', 'Salt', '.5Kg', 50.00, 'Grain', 100, '00004'),
('00005', 'Sugar', '.5Kg', 50.00, 'Grain', 100, '00005'),
('00006', 'Juice Powder', '.5Kg', 50.00, 'Fat', 100, '00006'),
('00007', 'Bread', '.5Kg', 50.00, 'Grain', 100, '00007'),
('00008', 'Ketchup', '.5Kg', 50.00, 'Fat', 100, '00008'),
('00009', 'Mayonaise', '.5Kg', 60.00, 'Fat', 100, '00009'),
('00010', 'Garlic', '.5Kg', 30.00, 'Grain', 100, '00010'),
('00011', 'Onion', '.5Kg', 30.00, 'Grain', 100, '00011'),
('00012', 'Egg', '.5Kg', 40.00, 'Grain', 100, '00012'),
('00013', 'Pepper', '.5Kg', 40.00, 'Fat', 100, '00013'),
('00014', 'Soy Souce', '.5Kg', 60.00, 'Fat', 100, '00014'),
('00015', 'Raw Chicken', '.5Kg', 150.00, 'Fat', 100, '00015'),
('00016', 'Ground Meat', '.5Kg', 250.00, 'Fat', 100, '00016'),
('00017', 'Beef', '.5Kg', 250.00, 'Fat', 100, '00017'),
('00018', 'Pork', '.5Kg', 250.00, 'Fat', 100, '00018'),
('00019', 'Salmon', '.5Kg', 250.00, 'Proti', 100, '00019'),
('00020', 'Squid', '.5Kg', 350.00, 'Proti', 100, '00020'),
('00021', 'Oyster', '.5Kg', 250.00, 'Proti', 100, '00021'),
('00022', 'Lobster', '.5Kg', 150.00, 'Proti', 100, '00022'),
('00023', 'Crab', '.5Kg', 150.00, 'Proti', 100, '00023'),
('00024', 'Cabbage', '.5Kg', 50.00, 'Veget', 100, '00024'),
('00025', 'Letuce', '.5Kg', 30.00, 'Veget', 100, '00025'),
('00026', 'Toamato', '.5Kg', 40.00, 'Veget', 100, '00026'),
('00027', 'Potato', '.5Kg', 50.00, 'Veget', 100, '00027'),
('00028', 'Corn', '.5Kg', 20.00, 'Veget', 100, '00028'),
('00029', 'Grain Rice', '.5Kg', 30.00, 'Grain', 100, '00029'),
('00030', 'Banana', '.5Kg', 50.00, 'Veget', 100, '00030');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemid` char(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `dateadded` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemid`, `name`, `price`, `dateadded`) VALUES
('i-001', 'Orange Juice', 35.00, '2023-09-04'),
('i-002', 'Fried chicken', 60.00, '2023-09-04'),
('i-003', 'Hotdog', 50.00, '2023-09-04'),
('i-004', 'Fried rice', 35.00, '2023-09-04'),
('i-005', 'Apple Juice', 35.00, '2023-09-04'),
('i-006', 'Mango Juice', 35.00, '2023-09-04'),
('i-007', 'Banana Shake', 45.00, '2023-09-04'),
('i-008', 'Beaf Steak', 60.00, '2023-09-04'),
('i-009', 'Burger Steak', 60.00, '2023-09-04'),
('i-010', 'Fried Egg', 30.00, '2023-09-04'),
('i-011', 'Egg Sandwich', 35.00, '2023-09-04'),
('i-012', 'Lobster meat', 50.00, '2023-09-04'),
('i-013', 'Salmon meat', 60.00, '2023-09-04'),
('i-014', 'Fried Squid', 35.00, '2023-09-04'),
('i-015', 'French Fries', 40.00, '2023-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `madewith`
--

CREATE TABLE `madewith` (
  `itemid` char(5) NOT NULL,
  `ingredientid` char(5) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `madewith`
--

INSERT INTO `madewith` (`itemid`, `ingredientid`, `quantity`) VALUES
('i-001', '00006', 1),
('i-001', '00005', 2),
('i-002', '00001', 1),
('i-002', '00004', 2),
('i-002', '00012', 1),
('i-002', '00015', 1),
('i-002', '00010', 1),
('i-002', '00011', 1),
('i-003', '00007', 1),
('i-003', '00008', 1),
('i-003', '00004', 1),
('i-003', '00016', 1),
('i-004', '00001', 1),
('i-004', '00029', 1),
('i-004', '00012', 1),
('i-004', '00010', 1),
('i-004', '00011', 1),
('i-004', '00013', 1),
('i-004', '00014', 1),
('i-005', '00005', 1),
('i-005', '00006', 1),
('i-006', '00006', 1),
('i-006', '00004', 1),
('i-007', '00005', 1),
('i-007', '00006', 1),
('i-007', '00030', 1),
('i-008', '00001', 1),
('i-008', '00010', 1),
('i-008', '00011', 1),
('i-008', '00012', 1),
('i-008', '00017', 1),
('i-009', '00016', 1),
('i-009', '00004', 1),
('i-009', '00012', 1),
('i-009', '00010', 1),
('i-009', '00011', 1),
('i-010', '00001', 1),
('i-010', '00012', 1),
('i-010', '00013', 1),
('i-010', '00014', 1),
('i-011', '00012', 1),
('i-011', '00007', 1),
('i-011', '00004', 1),
('i-012', '00022', 1),
('i-012', '00004', 1),
('i-012', '00010', 1),
('i-012', '00011', 1),
('i-012', '00013', 1),
('i-013', '00019', 1),
('i-013', '00004', 1),
('i-014', '00020', 1),
('i-014', '00001', 1),
('i-014', '00002', 1),
('i-014', '00004', 1),
('i-014', '00003', 1),
('i-015', '00001', 1),
('i-015', '00004', 1),
('i-015', '00027', 1);

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `mealid` char(5) NOT NULL,
  `name` char(10) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`mealid`, `name`, `description`) VALUES
('m-001', 'Rice Meal', 'Rice + Egg'),
('m-002', 'Rice Meal', 'Rice + Chicken'),
('m-003', 'Rice Meal', 'Rice + Beaf'),
('m-004', 'Rice Meal', 'Rice + Burger'),
('m-005', 'Rice Meal', 'Rice + Lobster'),
('m-006', 'Rice Meal', 'Rice + Salmon'),
('m-007', 'Rice Meal', 'Rice + Squid');

-- --------------------------------------------------------

--
-- Table structure for table `menuitems`
--

CREATE TABLE `menuitems` (
  `menuitemid` char(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menuitems`
--

INSERT INTO `menuitems` (`menuitemid`, `name`, `price`) VALUES
('i-001', 'Juice', 35.00),
('i-002', 'Fried chicken', 60.00),
('i-003', 'Hotdog', 50.00),
('i-004', 'Fried rice', 35.00),
('i-005', 'Apple Juice', 35.00),
('i-006', 'Mango Juice', 35.00),
('i-007', 'Banana Shake', 45.00),
('i-008', 'Beaf Steak', 60.00),
('i-009', 'Burger Steak', 60.00),
('i-010', 'Fried Egg', 30.00),
('i-011', 'Egg Sandwich', 35.00),
('i-012', 'Lobster meat', 50.00),
('i-013', 'Salmon meat', 60.00),
('i-014', 'Fried Squid', 35.00),
('i-015', 'French Fries', 40.00),
('m-001', 'Rice Meal', 61.75),
('m-002', 'Rice Meal', 90.25),
('m-003', 'Rice Meal', 90.25),
('m-004', 'Rice Meal', 90.25),
('m-005', 'Rice Meal', 80.75),
('m-006', 'Rice Meal', 90.25),
('m-007', 'Rice Meal', 66.50);

-- --------------------------------------------------------

--
-- Table structure for table `partof`
--

CREATE TABLE `partof` (
  `mealid` char(5) NOT NULL,
  `itemid` char(5) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `discount` decimal(2,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partof`
--

INSERT INTO `partof` (`mealid`, `itemid`, `quantity`, `discount`) VALUES
('m-001', 'i-010', 1, 0.05),
('m-001', 'i-004', 1, 0.05),
('m-002', 'i-004', 1, 0.05),
('m-002', 'i-002', 1, 0.05),
('m-003', 'i-004', 1, 0.05),
('m-003', 'i-008', 1, 0.05),
('m-004', 'i-004', 1, 0.05),
('m-004', 'i-009', 1, 0.05),
('m-005', 'i-004', 1, 0.05),
('m-005', 'i-012', 1, 0.05),
('m-006', 'i-004', 1, 0.05),
('m-006', 'i-013', 1, 0.05),
('m-007', 'i-014', 1, 0.05),
('m-007', 'i-004', 1, 0.05);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplierid` char(5) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `rep_fname` varchar(20) NOT NULL,
  `rep_lname` varchar(20) NOT NULL,
  `referred_by` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplierid`, `company_name`, `rep_fname`, `rep_lname`, `referred_by`) VALUES
('00001', 'Company01', 'C01Representative', 'C01LName', NULL),
('00002', 'Company02', 'C02Representative', 'C02LName', '00001'),
('00003', 'Company03', 'C03Representative', 'C03LName', '00002'),
('00004', 'Company04', 'C04Representative', 'C04LName', '00003'),
('00005', 'Company05', 'C05Representative', 'C05LName', '00004'),
('00006', 'Company06', 'C06Representative', 'C06LName', '00005'),
('00007', 'Company07', 'C07Representative', 'C07LName', '00006'),
('00008', 'Company08', 'C08Representative', 'C08LName', '00007'),
('00009', 'Company09', 'C09Representative', 'C09LName', '00008'),
('00010', 'Company10', 'C10Representative', 'C10LName', '00009'),
('00011', 'Company11', 'C11Representative', 'C11LName', '00010'),
('00012', 'Company12', 'C12Representative', 'C12LName', '00011'),
('00013', 'Company13', 'C13Representative', 'C13LName', '00012'),
('00014', 'Company14', 'C14Representative', 'C14LName', '00013'),
('00015', 'Company15', 'C15Representative', 'C15LName', '00014'),
('00016', 'Company16', 'C16Representative', 'C16LName', '00015'),
('00017', 'Company17', 'C17Representative', 'C17LName', '00016'),
('00018', 'Company18', 'C18Representative', 'C18LName', '00017'),
('00019', 'Company19', 'C19Representative', 'C19LName', '00018'),
('00020', 'Company20', 'C20Representative', 'C20LName', '00019'),
('00021', 'Company21', 'C21Representative', 'C21LName', '00020'),
('00022', 'Company22', 'C22Representative', 'C22LName', '00021'),
('00023', 'Company23', 'C23Representative', 'C23LName', '00022'),
('00024', 'Company24', 'C24Representative', 'C24LName', '00023'),
('00025', 'Company25', 'C25Representative', 'C25LName', '00024'),
('00026', 'Company26', 'C26Representative', 'C26LName', '00025'),
('00027', 'Company27', 'C27Representative', 'C27LName', '00026'),
('00028', 'Company28', 'C28Representative', 'C28LName', '00027'),
('00029', 'Company29', 'C29Representative', 'C29LName', '00028'),
('00030', 'Company30', 'C30Representative', 'C30LName', '00029');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD UNIQUE KEY `ingredientid` (`ingredientid`),
  ADD KEY `supplierid` (`supplierid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD UNIQUE KEY `itemid` (`itemid`);

--
-- Indexes for table `madewith`
--
ALTER TABLE `madewith`
  ADD KEY `itemid` (`itemid`),
  ADD KEY `ingredientid` (`ingredientid`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD UNIQUE KEY `mealid` (`mealid`);

--
-- Indexes for table `partof`
--
ALTER TABLE `partof`
  ADD KEY `mealid` (`mealid`),
  ADD KEY `itemid` (`itemid`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD UNIQUE KEY `supplierid` (`supplierid`),
  ADD KEY `referred_by` (`referred_by`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD CONSTRAINT `ingredients_ibfk_1` FOREIGN KEY (`supplierid`) REFERENCES `suppliers` (`supplierid`);

--
-- Constraints for table `madewith`
--
ALTER TABLE `madewith`
  ADD CONSTRAINT `madewith_ibfk_1` FOREIGN KEY (`itemid`) REFERENCES `items` (`itemid`),
  ADD CONSTRAINT `madewith_ibfk_2` FOREIGN KEY (`ingredientid`) REFERENCES `ingredients` (`ingredientid`);

--
-- Constraints for table `partof`
--
ALTER TABLE `partof`
  ADD CONSTRAINT `partof_ibfk_1` FOREIGN KEY (`mealid`) REFERENCES `meals` (`mealid`),
  ADD CONSTRAINT `partof_ibfk_2` FOREIGN KEY (`itemid`) REFERENCES `items` (`itemid`);

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `suppliers_ibfk_1` FOREIGN KEY (`referred_by`) REFERENCES `suppliers` (`supplierid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
