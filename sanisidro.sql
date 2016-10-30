-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2016 at 02:16 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanisidro`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcement`
--

CREATE TABLE IF NOT EXISTS `tbl_announcement` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `date_ann` varchar(50) NOT NULL,
  `ann` text NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_announcement`
--

INSERT INTO `tbl_announcement` (`id`, `pid`, `date_ann`, `ann`, `title`) VALUES
(2, 5, '2016-10-09', 'Sample  Announcement', 'asa'),
(3, 5, '2016-10-09', 'This is for the title', 'Sample Title'),
(4, 5, '2016-10-30', '2qwewqeqw', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE IF NOT EXISTS `tbl_branch` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`id`, `description`) VALUES
(1, 'Branch 1'),
(2, 'Branch 3'),
(3, 'branch 3'),
(4, 'branch 4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file_upload`
--

CREATE TABLE IF NOT EXISTS `tbl_file_upload` (
  `id` int(11) NOT NULL,
  `filename` varchar(150) NOT NULL,
  `file_path` text NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_file_upload`
--

INSERT INTO `tbl_file_upload` (`id`, `filename`, `file_path`, `pid`) VALUES
(1, 'Text', 'About-NBC.docx', 5),
(2, 'Sample Attachments', 'Attachment13-VehicleandEquipmentPurchaseApprovalLetter11.doc', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_party`
--

CREATE TABLE IF NOT EXISTS `tbl_party` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `position` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `civil` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_party`
--

INSERT INTO `tbl_party` (`id`, `firstname`, `lastname`, `position`, `branch`, `address`, `contact`, `civil`, `gender`, `email`) VALUES
(5, 'Admins22', 'Sonits', 1, 0, '1002 Real Street', '09090909090', 'Single', 'Male', 'sonitgregorio@gmail.com'),
(11, 'person', 'Ssss', 2, 0, '1002 Real Street', '09090909090', 'Single', 'Male', 'sonitgregorio@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE IF NOT EXISTS `tbl_position` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`id`, `description`) VALUES
(1, 'Admin'),
(2, 'Personnel'),
(3, 'Manager'),
(4, 'Baker');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request`
--

CREATE TABLE IF NOT EXISTS `tbl_request` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `filename` text NOT NULL,
  `description` text NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_request`
--

INSERT INTO `tbl_request` (`id`, `fullname`, `address`, `contact`, `email`, `filename`, `description`, `status`) VALUES
(2, 'asdasd', 'asdsa', 'aa', 'ad', 'For_Interview_0_0.docx', 'asdasdas', 'Approved'),
(3, 'Gregorio', '1002 Real Street', '09172580624', 'sonitgregorio@gmail.com', 'About-NBC1.docx', 'Sample Request', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `pid` int(11) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `pid`, `position`) VALUES
(2, 'admin', '40be4e59b9a2a2b5dffb918c0e86b3d7', 5, 1),
(4, '', 'd41d8cd98f00b204e9800998ecf8427e', 7, 0),
(5, '', 'd41d8cd98f00b204e9800998ecf8427e', 8, 0),
(6, '', 'd41d8cd98f00b204e9800998ecf8427e', 9, 0),
(7, 'personnel', '40be4e59b9a2a2b5dffb918c0e86b3d7', 11, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_file_upload`
--
ALTER TABLE `tbl_file_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_party`
--
ALTER TABLE `tbl_party`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_request`
--
ALTER TABLE `tbl_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_file_upload`
--
ALTER TABLE `tbl_file_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_party`
--
ALTER TABLE `tbl_party`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
