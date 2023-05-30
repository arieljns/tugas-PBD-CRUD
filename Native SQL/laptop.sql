-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 02:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET TIME_ZONE = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop_tb`
--

CREATE TABLE `LAPTOP_TB` (
  `ID_LAPTOP` INT(100) NOT NULL,
  `NAMA_LAPTOP` VARCHAR(100) NOT NULL,
  `TIPE_LAPTOP` VARCHAR(100) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

--
-- Dumping data for table `laptop_tb`
--

INSERT INTO `LAPTOP_TB` (
  `ID_LAPTOP`,
  `NAMA_LAPTOP`,
  `TIPE_LAPTOP`
) VALUES (
  1,
  'asus',
  'vivobook'
),
(
  2,
  'asus',
  'ROG'
),
(
  3,
  'lenovo',
  'legion'
),
(
  4,
  'lenovo',
  'thinkpad'
),
(
  5,
  'lenovo',
  'ideapad'
),
(
  6,
  'lenovo',
  'ideapadSlim'
),
(
  7,
  'apple',
  'macbook-pro-m1'
),
(
  8,
  'apple',
  'macbook-air-m1'
),
(
  9,
  'dell',
  'inspiron'
),
(
  10,
  'apple',
  'macbook-air-m2'
),
(
  11,
  'asus',
  'zenbook'
),
(
  12,
  'asus',
  'zenbook-duo'
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop_tb`
--
ALTER TABLE `LAPTOP_TB` ADD PRIMARY KEY (`ID_LAPTOP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laptop_tb`
--
ALTER TABLE `LAPTOP_TB` MODIFY `ID_LAPTOP` INT(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;