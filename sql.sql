DROP DATABASE `addbase_lab1`;

CREATE DATABASE `addbase_lab1`;

USE `addbase_lab1`;

CREATE TABLE `suppliers` (
	`supplierid` CHAR(5) UNIQUE NOT NULL,
    `company_name` VARCHAR(30) NOT NULL,
    `rep_fname` VARCHAR(20) NOT NULL,
    `rep_lname` VARCHAR(20) NOT NULL,
    `referred_by` CHAR(5),
    FOREIGN KEY (`referred_by`) REFERENCES `suppliers`(`supplierid`)
);
	
CREATE TABLE `ingredients`(
	`ingredientid` CHAR(5) UNIQUE NOT NULL,
    `name` VARCHAR(30) NOT NULL,
    `unit` CHAR(10) NOT NULL,
    `unitprice` DECIMAL(5,2) NOT NULL,
    `foodgroup` CHAR(5) NOT NULL,
    `inventory` INT(11) NOT NULL,
    `supplierid` CHAR(5) NOT NULL,
    FOREIGN KEY (`supplierid`) REFERENCES `suppliers`(`supplierid`)
);

CREATE TABLE `items`(
	`itemid` CHAR(5) UNIQUE NOT NULL,
    `name` VARCHAR(30) NOT NULL,
    `price` DECIMAL(5,2) NOT NULL,
    `dateadded` DATE
);

CREATE TABLE `madewith`(
	`itemid` CHAR(5) NOT NULL,
    `ingredientid` CHAR(5) NOT NULL,
    `quantity` INT(11) NOT NULL DEFAULT 0,
    FOREIGN KEY (`itemid`) REFERENCES `items`(`itemid`),
    FOREIGN KEY (`ingredientid`) REFERENCES `ingredients`(`ingredientid`)
);

CREATE TABLE `meals`(
	`mealid` CHAR(5) UNIQUE NOT NULL,
    `name` CHAR(10) NOT NULL,
    `description` VARCHAR(30) NOT NULL
);

CREATE TABLE `partof`(
	`mealid` CHAR(5) NOT NULL,
    `itemid` CHAR(5) NOT NULL,
    `quantity` INT(11) NOT NULL DEFAULT 0,
    `discount` DECIMAL(2,2) NOT NULL,
    FOREIGN KEY (`mealid`) REFERENCES `meals`(`mealid`),
    FOREIGN KEY (`itemid`) REFERENCES `items`(`itemid`)
);

CREATE TABLE `menuitems`(
	`menuitemid` CHAR(5) NOT NULL,
    `name` VARCHAR(30) NOT NULL,
    `price` DECIMAL(5,2) NOT NULL
);



















