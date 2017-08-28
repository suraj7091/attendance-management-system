-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2017 at 03:50 AM
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
-- Database: `faculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `cse1`
--

CREATE TABLE `cse1` (
  `name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cse2`
--

CREATE TABLE `cse2` (
  `name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cse3`
--

CREATE TABLE `cse3` (
  `name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cse4`
--

CREATE TABLE `cse4` (
  `name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse4`
--

INSERT INTO `cse4` (`name`, `subject`, `id`) VALUES
('geetanjali chopra', 'DIGITAL', 123456),
('syyed aamirudin', 'foundation of computer', 5421),
('anjali', 'multimedia', 12345),
('abcd', 'organistaion behaviour', 2456);

-- --------------------------------------------------------

--
-- Table structure for table `ece1`
--

CREATE TABLE `ece1` (
  `name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ece2`
--

CREATE TABLE `ece2` (
  `name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ece3`
--

CREATE TABLE `ece3` (
  `name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ece4`
--

CREATE TABLE `ece4` (
  `name` varchar(30) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `id` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ece4`
--

INSERT INTO `ece4` (`name`, `subject`, `id`) VALUES
('khyati singh', 'data structure', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `it1`
--

CREATE TABLE `it1` (
  `name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `it2`
--

CREATE TABLE `it2` (
  `name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `it3`
--

CREATE TABLE `it3` (
  `name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `it4`
--

CREATE TABLE `it4` (
  `name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cse1`
--
ALTER TABLE `cse1`
  ADD PRIMARY KEY (`subject`);

--
-- Indexes for table `cse2`
--
ALTER TABLE `cse2`
  ADD PRIMARY KEY (`subject`);

--
-- Indexes for table `cse3`
--
ALTER TABLE `cse3`
  ADD PRIMARY KEY (`subject`);

--
-- Indexes for table `cse4`
--
ALTER TABLE `cse4`
  ADD PRIMARY KEY (`subject`);

--
-- Indexes for table `ece1`
--
ALTER TABLE `ece1`
  ADD PRIMARY KEY (`subject`);

--
-- Indexes for table `ece2`
--
ALTER TABLE `ece2`
  ADD PRIMARY KEY (`subject`);

--
-- Indexes for table `ece3`
--
ALTER TABLE `ece3`
  ADD PRIMARY KEY (`subject`);

--
-- Indexes for table `ece4`
--
ALTER TABLE `ece4`
  ADD PRIMARY KEY (`subject`);

--
-- Indexes for table `it1`
--
ALTER TABLE `it1`
  ADD PRIMARY KEY (`subject`);

--
-- Indexes for table `it2`
--
ALTER TABLE `it2`
  ADD PRIMARY KEY (`subject`);

--
-- Indexes for table `it3`
--
ALTER TABLE `it3`
  ADD PRIMARY KEY (`subject`);

--
-- Indexes for table `it4`
--
ALTER TABLE `it4`
  ADD PRIMARY KEY (`subject`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
