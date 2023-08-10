-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2014 at 08:08 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cde`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `user_Id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `accounttype` varchar(50) NOT NULL,
  PRIMARY KEY (`user_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_Id`, `username`, `password`, `accounttype`) VALUES
('comp2014', 'muluneh', '1235', 'registrar'),
('comp30', 'aster', '1235', 'student'),
('compr/100/03', 'alemu', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `First_Name` varchar(25) NOT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dept` varchar(25) NOT NULL,
  `program` varchar(30) NOT NULL,
  `Phone_No` int(15) NOT NULL,
  `status` int(20) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`First_Name`, `Last_Name`, `Sex`, `Email`, `password`, `dept`, `program`, `Phone_No`, `status`) VALUES
('Alemu', 'Endale', 'msle', 'alex@yahoo.com', '1234', '', '', 9243147, 2),
('drib', 'worku', 'female', 'drib21@gmail.com', '12345', '', '', 913145278, 3),
('kibrom', 'tsegay', 'male', 'kb@gmail.com`', '123', 'it', 'degree', 910916122, 4),
('Teklay', 'Teklu', 'male', 'teklay@facebook.com', '123', '', '', 914775642, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `gender`, `email`, `comment`) VALUES
('AlemuEndale', 'male', 'Alemu@yahoo.com', 'hi come soon!'),
('MohammedYigoraw', 'male', 'Mohammed@gmail.com', 'please inform');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `TeacherName` varchar(20) NOT NULL,
  `modulename` varchar(20) NOT NULL,
  `modulenum` varchar(30) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `term` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `Filename` varchar(20) NOT NULL,
  `tmp_name` varchar(20) NOT NULL,
  `fileSize` float NOT NULL,
  `fileType` varchar(30) NOT NULL,
  PRIMARY KEY (`modulenum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`TeacherName`, `modulename`, `modulenum`, `dept`, `term`, `year`, `Filename`, `tmp_name`, `fileSize`, `fileType`) VALUES
('abebe belachew', 'data structure', 'compr3010', 'Information Technolo', '2', '3', 'dd.docx', 'C:xampp	mpphpAEA.tmp', 20920, 'application/vnd.openxmlformats'),
('mekonnen', 'html5', 'hh12', 'Geography', '2', '3', 'love.jpg', 'C:xampp	mpphpA8C0.tm', 5587, 'image/jpeg'),
('teklay', 'java', 'java2030', 'Information Technolo', '2', '2', 'Hello.docx', 'C:xampp	mpphp4252.tm', 9859, 'application/vnd.openxmlformats');

-- --------------------------------------------------------

--
-- Table structure for table `postinfo`
--

CREATE TABLE IF NOT EXISTS `postinfo` (
  `dates` date NOT NULL,
  `types` varchar(30) NOT NULL,
  `info` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postinfo`
--

INSERT INTO `postinfo` (`dates`, `types`, `info`) VALUES
('2014-04-07', 'new cariclum', 'there is new curriculum in this year ');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `user_Id` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `First_Name` varchar(25) NOT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Sex` text NOT NULL,
  `Phone_No` int(15) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `register` varchar(10) NOT NULL,
  PRIMARY KEY (`user_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--


-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `User_Id` varchar(25) NOT NULL,
  `First_Name` varchar(25) NOT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `program` varchar(30) NOT NULL,
  `Phone_No` int(15) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--


-- --------------------------------------------------------

--
-- Table structure for table `studentassignment`
--

CREATE TABLE IF NOT EXISTS `studentassignment` (
  `sid` varchar(20) NOT NULL,
  `stName` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `coursename` varchar(30) NOT NULL,
  `term` varchar(30) NOT NULL,
  `Filename` varchar(20) NOT NULL,
  `tmp_name` varchar(20) NOT NULL,
  `Filesize` double NOT NULL,
  `Filetype` varchar(30) NOT NULL,
  PRIMARY KEY (`coursename`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentassignment`
--

INSERT INTO `studentassignment` (`sid`, `stName`, `dept`, `year`, `coursename`, `term`, `Filename`, `tmp_name`, `Filesize`, `Filetype`) VALUES
('compr/067/03', 'Dirib Worku', 'Law', '4', 'administer', '2', 'konjo.jpg', 'C:xampp	mpphpF0F7.tm', 8852, 'image/jpeg'),
('compr/104/03', 'Abel Hailu', 'Information Technology', '2', 'architecture', '2', 'meeting.docx', 'C:xampp	mpphpAB9E.tm', 10878, 'application/vnd.openxmlformats'),
('compr/137/03', 'Alemu Endale', 'Information Technology', '3', 'data structure', '2', 'ww.docx', 'C:xampp	mpphp2B86.tm', 14026, 'application/vnd.openxmlformats');

-- --------------------------------------------------------

--
-- Table structure for table `studentassignment_module`
--

CREATE TABLE IF NOT EXISTS `studentassignment_module` (
  `coursename` varchar(30) NOT NULL,
  `modulenum` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentassignment_module`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_Id` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Accounttype` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `kk` FOREIGN KEY (`user_Id`) REFERENCES `student` (`User_Id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `account` (`user_Id`);
