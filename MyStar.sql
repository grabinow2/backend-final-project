-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 08:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MyStar`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `CUST_ID` int(11) NOT NULL,
  `F_NAME` varchar(20) NOT NULL,
  `L_NAME` varchar(20) NOT NULL,
  `DT_JOINED` date NOT NULL,
  `EMAIL` varchar(64) NOT NULL,
  `PAYMENT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PAYMENT_INFO`
--

CREATE TABLE `PAYMENT_INFO` (
  `PAYMENT_ID` int(11) NOT NULL,
  `NAME_ON_CARD` varchar(40) NOT NULL,
  `CC_NUM` varchar(19) NOT NULL,
  `EXP_DT` varchar(5) NOT NULL,
  `CCV` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PURCHASE`
--

CREATE TABLE `PURCHASE` (
  `PURCHASE_ID` int(11) NOT NULL,
  `CUST_ID` int(11) NOT NULL,
  `STAR_ID` int(11) NOT NULL,
  `PURCHASE_DT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Star`
--

CREATE TABLE `Star` (
  `STAR_ID` int(11) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `DT_UPLOADED` date NOT NULL,
  `PRICE` decimal(10,0) NOT NULL,
  `DESCRIPTION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`CUST_ID`);

--
-- Indexes for table `PAYMENT_INFO`
--
ALTER TABLE `PAYMENT_INFO`
  ADD PRIMARY KEY (`PAYMENT_ID`);

--
-- Indexes for table `PURCHASE`
--
ALTER TABLE `PURCHASE`
  ADD PRIMARY KEY (`PURCHASE_ID`);

--
-- Indexes for table `Star`
--
ALTER TABLE `Star`
  ADD PRIMARY KEY (`STAR_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `CUST_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PAYMENT_INFO`
--
ALTER TABLE `PAYMENT_INFO`
  MODIFY `PAYMENT_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PURCHASE`
--
ALTER TABLE `PURCHASE`
  MODIFY `PURCHASE_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Star`
--
ALTER TABLE `Star`
  MODIFY `STAR_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
