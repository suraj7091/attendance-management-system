-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2017 at 03:49 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse4`
--

-- --------------------------------------------------------

--
-- Table structure for table `digital`
--

CREATE TABLE `digital` (
  `roll_no` varchar(30) NOT NULL,
  `08/05/2017` varchar(30) NOT NULL,
  `08/02/2017` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `digital`
--

INSERT INTO `digital` (`roll_no`, `08/05/2017`, `08/02/2017`) VALUES
('03616403215', 'present', ''),
('41416403215', 'present', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `foundation of computer`
--

CREATE TABLE `foundation of computer` (
  `roll_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foundation of computer`
--

INSERT INTO `foundation of computer` (`roll_no`) VALUES
('03616403215'),
('41416403215');

-- --------------------------------------------------------

--
-- Table structure for table `multimedia`
--

CREATE TABLE `multimedia` (
  `roll_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multimedia`
--

INSERT INTO `multimedia` (`roll_no`) VALUES
('03616403215'),
('41416403215');

-- --------------------------------------------------------

--
-- Table structure for table `organistaion behaviour`
--

CREATE TABLE `organistaion behaviour` (
  `roll_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organistaion behaviour`
--

INSERT INTO `organistaion behaviour` (`roll_no`) VALUES
('03616403215'),
('41416403215');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `digital`
--
ALTER TABLE `digital`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `foundation of computer`
--
ALTER TABLE `foundation of computer`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `multimedia`
--
ALTER TABLE `multimedia`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `organistaion behaviour`
--
ALTER TABLE `organistaion behaviour`
  ADD PRIMARY KEY (`roll_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
