-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2016 at 01:51 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simple_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_view`
--

CREATE TABLE IF NOT EXISTS `detail_view` (
  `username` varchar(250) NOT NULL,
  `org_shipper` varchar(250) NOT NULL,
  `harvest_date` varchar(50) NOT NULL,
  `harvest_location` varchar(250) NOT NULL,
  `type_of_shellfish` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `temp` int(11) NOT NULL,
  `geo_location` varchar(250) NOT NULL,
  `time_of_scan` varchar(250) NOT NULL,
  `date_of_scan` varchar(250) NOT NULL,
  `unique_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_view`
--

INSERT INTO `detail_view` (`username`, `org_shipper`, `harvest_date`, `harvest_location`, `type_of_shellfish`, `quantity`, `temp`, `geo_location`, `time_of_scan`, `date_of_scan`, `unique_id`) VALUES
('Chris', 'sdjk', '11/12/12', 'LA', 'new', 11323, 23, 'Earth', '12:23:AM', '11/11/11', 122);

-- --------------------------------------------------------

--
-- Table structure for table `tag_search`
--

CREATE TABLE IF NOT EXISTS `tag_search` (
  `username` varchar(250) NOT NULL,
`ID` int(11) NOT NULL,
  `scan_ID` int(11) NOT NULL,
  `scan_date` text NOT NULL,
  `oyster_type` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `temp` int(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tag_search`
--

INSERT INTO `tag_search` (`username`, `ID`, `scan_ID`, `scan_date`, `oyster_type`, `quantity`, `temp`, `status`) VALUES
('Chris', 122, 454, '02/10/15', 'cape', 1212, 23, 'received'),
('varun', 132, 12, '01/01/14', 'snow hils', 900, 24, 'received'),
('Chris', 142, 1, '01/12/16', 'barcats', 1000, 42, 'received');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `access_level` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `access_level`) VALUES
(1, 'Varun', 'password', 'admin'),
(2, 'Matt ', 'password', 'member'),
(3, 'Jyotsna', 'password', 'member'),
(4, 'Chris', 'password', 'member'),
(5, 'James', 'passowrd', 'member'),
(6, 'James', 'passowrd', 'member'),
(7, 'James', 'passowrd', 'member'),
(8, 'Mayank', 'password', 'member'),
(9, 'kira', 'deathnote', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tag_search`
--
ALTER TABLE `tag_search`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tag_search`
--
ALTER TABLE `tag_search`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=154;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
