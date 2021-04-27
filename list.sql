-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2019 at 04:11 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `list`
--

-- --------------------------------------------------------

--
-- Table structure for table `rahul`
--

CREATE TABLE `rahul` (
  `id` int(11) NOT NULL,
  `tasks` varchar(255) DEFAULT NULL,
  `priority` tinyint(20) DEFAULT '0',
  `completed` tinyint(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rishabh`
--

CREATE TABLE `rishabh` (
  `id` int(11) NOT NULL,
  `tasks` varchar(255) DEFAULT NULL,
  `priority` tinyint(20) DEFAULT '0',
  `completed` tinyint(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `root`
--

CREATE TABLE `root` (
  `id` int(11) NOT NULL,
  `tasks` varchar(255) DEFAULT NULL,
  `priority` tinyint(20) DEFAULT '0',
  `completed` tinyint(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shreyas`
--

CREATE TABLE `shreyas` (
  `id` int(11) NOT NULL,
  `tasks` varchar(255) DEFAULT NULL,
  `priority` tinyint(20) DEFAULT '0',
  `completed` tinyint(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `somesh`
--

CREATE TABLE `somesh` (
  `id` int(11) NOT NULL,
  `tasks` varchar(255) DEFAULT NULL,
  `priority` tinyint(20) DEFAULT '0',
  `completed` tinyint(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `somesh`
--

INSERT INTO `somesh` (`id`, `tasks`, `priority`, `completed`) VALUES
(1, 'asifhauif', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tarunrai`
--

CREATE TABLE `tarunrai` (
  `id` int(11) NOT NULL,
  `tasks` varchar(255) DEFAULT NULL,
  `priority` tinyint(20) DEFAULT '0',
  `completed` tinyint(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tejas`
--

CREATE TABLE `tejas` (
  `id` int(255) NOT NULL,
  `tasks` varchar(255) NOT NULL,
  `priority` tinyint(20) NOT NULL DEFAULT '0',
  `completed` tinyint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tejas`
--

INSERT INTO `tejas` (`id`, `tasks`, `priority`, `completed`) VALUES
(5, 'Submit Documents', 0, 0),
(6, 'Prepare Presentation', 1, 0),
(7, 'Homework', 0, 0),
(8, 'Assignments', 0, 0),
(9, 'Projects', 1, 0),
(11, 'Optimizing Computer', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `todo2`
--

CREATE TABLE `todo2` (
  `id` int(20) NOT NULL,
  `tasks` varchar(255) NOT NULL,
  `priority` int(20) NOT NULL DEFAULT '0',
  `completed` tinyint(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tp`
--

CREATE TABLE `tp` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tp`
--

INSERT INTO `tp` (`id`, `name`, `password`) VALUES
(2, 'tejas', '$2y$10$np7PXDa2YJGFmWBvlcfJ..gGZ8ZWJBHOiSpQE3hDfe9HSYubpSDw2'),
(7, 'tarunrai', '$2y$10$cqFRjl9P85SSsR6oPzI9n.4jQBRdsek2CplCwEuEI3evjQlC2wA.2'),
(15, 'root', '$2y$10$cb2HBy8BIsSyyxSyyMpJYebQcKX7k/qeeJve3V6C4DhCWUIzC6heC'),
(16, 'rahul', '$2y$10$1RsrnXn0DeNDWdcy5Et9DOQ4Lp9Ifb7Zt3ou.K4G1vcxclwZJWf2y'),
(19, 'somesh', '$2y$10$QUBandBYT6ZSc0OKSa3Dwex5eaZow9lsUgwSgSYPxFKch9y7BcTqm'),
(20, 'rishabh', '$2y$10$rKpE9d.R4534dL2xGReDpeKmEPPvDy/ecRQm76awul5TRzWL69UCe'),
(22, '', '$2y$10$NDtbY1h4pUfpuM88GZ.K5u.KdRQ28xJ8KbvEcJcjTH4CMnc3gZ1/C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rahul`
--
ALTER TABLE `rahul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rishabh`
--
ALTER TABLE `rishabh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `root`
--
ALTER TABLE `root`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shreyas`
--
ALTER TABLE `shreyas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `somesh`
--
ALTER TABLE `somesh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tarunrai`
--
ALTER TABLE `tarunrai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tejas`
--
ALTER TABLE `tejas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo2`
--
ALTER TABLE `todo2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp`
--
ALTER TABLE `tp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rahul`
--
ALTER TABLE `rahul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rishabh`
--
ALTER TABLE `rishabh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `root`
--
ALTER TABLE `root`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shreyas`
--
ALTER TABLE `shreyas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `somesh`
--
ALTER TABLE `somesh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tarunrai`
--
ALTER TABLE `tarunrai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tejas`
--
ALTER TABLE `tejas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `todo2`
--
ALTER TABLE `todo2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tp`
--
ALTER TABLE `tp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
