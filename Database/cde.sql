-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2014 at 10:26 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


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
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `User_Id` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `accounttype` varchar(50) NOT NULL,
  `status` int(20) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`fname`, `lname`, `User_Id`, `phone`, `username`, `password`, `accounttype`, `status`) VALUES
('Teklay', 'Teklu', '137', '0910916122', 'admin', '123', 'admin', 1),
('drib', 'worku', 'compr/067/03', '0914669983', 'dribworku', '1234', 'registrar', 2),
('alemu', 'endale', 'compr/104/03', '0916875431', 'alemu@gmail.com', '12345', 'student', 2),
('tesfa', 'adamu', 'Mgr1030', '0914698572', 'tesfaadamu', '12', 'director', 3);

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
('Abebe', 'Kebede', 'male', 'Abebe@gmail.com', '444', 'Information Technology', 'degree', 91432567, 4),
('alemu', 'endale', 'male', 'alemu@yahoo.com', '12345', 'it', 'degree', 2147483647, 4),
('kibrom', 'tsegay', 'male', 'kb@gmail.com`', '123', 'Information Technology', 'degree', 910916122, 4),
('Marti', 'Mebrahtu', 'male', 'marti@gmail.com', '1234', 'Management', 'degree', 915478962, 4),
('serkalem', 'bante', 'male', 'serkale@yahoo.com', '1234', 'Geography', 'degree', 914568796, 4),
('teklay', 'dfgdfg', 'male', 'teklay.teklu@facebook.com', '456', 'Accounting', 'degree', 910916122, 4),
('kibrom', 'tsegay', 'male', 'tesfa@yahoo.com', '123', 'Economics', 'degree', 910916122, 4),
('Tesfa', 'Adamu', 'male', 'tesfaadamu52@yahoo.com', '1234', 'Economics', 'degree', 123454, 4),
('yared', 'dinku', 'male', 'yareddinku@yahoo.com', '123', 'it', 'degree', 920345678, 4);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `gender`, `Email`, `comment`) VALUES
('AlemuEndale', 'male', 'Alemu@yahoo.com', 'hi come soon!'),
('DribWorku', 'female', 'dribworku@gmail.com', 'we have psesentation tmrw'),
('Eyobkebede', 'male', 'EyobK@gmail.com', 'I am in campus now. please contact'),
('Marthalemlem', 'female', 'Martha.love@gmail.com', 'your site is good.'),
('MohammedYigoraw', 'male', 'Mohammed@gmail.com', 'please inform'),
('SerkalemBante', 'female', 'SerkalemBante@yahoo.com', 'how are you/\r\n'),
('chalachuchu', 'female', 'ttt@yahoo.com', 'please');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `TeacherName` varchar(20) NOT NULL,
  `coursename` varchar(20) NOT NULL,
  `modulenum` varchar(30) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `term` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `Filename` varchar(20) NOT NULL,
  `tmp_name` varchar(20) NOT NULL,
  `fileSize` float NOT NULL,
  `fileType` varchar(30) NOT NULL,
  PRIMARY KEY (`coursename`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`TeacherName`, `coursename`, `modulenum`, `dept`, `term`, `year`, `Filename`, `tmp_name`, `fileSize`, `fileType`) VALUES
('Baye', 'computer sec', 'comp4116', 'Information Technolo', '2', '4', 'cde design.docx', 'C:xampp	mpphp512B.tm', 124256, 'application/vnd.openxmlformats'),
('Abeba', 'computer seck', 'comp102035', 'Information Technolo', '2', '4', 'OSUnit-VIFM.doc', 'C:xampp	mpphp4F69.tm', 450048, 'application/msword'),
('Alberica Catora', 'current ', 'current33', 'Information Technolo', '2', '4', 'web info.docx', 'C:xampp	mpphpF7.tmp', 10453, 'application/vnd.openxmlformats'),
('abebe belachew', 'data structure', 'compr3010', 'Information Technolo', '2', '3', 'dd.docx', 'C:xampp	mpphpAEA.tmp', 20920, 'application/vnd.openxmlformats'),
('hagos', 'economics', 'oop20302', 'Accounting', '2', '3', 'foreignkey.docx', 'C:xampp	mpphp4852.tm', 116139, 'application/vnd.openxmlformats'),
('Abebakk', 'fdf', 'cde12', 'Accounting', '2', '3', 'Module V.docx', 'C:xampp	mpphpAB3A.tm', 336112, 'application/vnd.openxmlformats'),
('abebe', 'hjgfjh', '4545', 'Economics', '2', '4', 'Lesson3.pdf', 'D:xampp	mpphp27AC.tm', 226484, 'application/pdf'),
('mekonnen', 'html5', 'hh12', 'Geography', '2', '3', 'love.jpg', 'C:xampp	mpphpA8C0.tm', 5587, 'image/jpeg'),
('Satish', 'integrative', 'comp40201', 'Information Technolo', '2', '4', 'Zip file.docx', 'C:xampp	mpphp224B.tm', 17235, 'application/vnd.openxmlformats'),
('teklay', 'java', 'java2030', 'Information Technolo', '2', '2', 'Hello.docx', 'C:xampp	mpphp4252.tm', 9859, 'application/vnd.openxmlformats'),
('abebe', 'jsdj23', '2313', 'Sociology', '2', '4', 'powerpoint.pptx', 'C:xampp	mpphpBE01.tm', 476579, 'application/vnd.openxmlformats'),
('Silas', 'Maintenance', 'comp4020', 'Information Technolo', '2', '3', 'component design.doc', 'C:xampp	mpphp78B9.tm', 44605, 'application/vnd.openxmlformats'),
('Sielay Gebrug', 'OOP', 'comp4116', 'Information Technolo', '2', '4', 'ale.zip', 'C:xampp	mpphpA005.tm', 30625, 'application/x-zip-compressed'),
('Amanuel', 'OOPgg', 'comp4116', 'Information Technolo', '2', '4', 'Zip file.docx', 'C:xampp	mpphpC461.tm', 17235, 'application/vnd.openxmlformats'),
('satish', 'php', 'php12', 'Sociology', '2', '2', 'powerpoint.pptx', 'D:xampp	mpphp75BD.tm', 355499, 'application/vnd.openxmlformats'),
('Abeba', 'phphn', 'php30', 'Information Technolo', '2', '4', 'Acknowledgement.docx', 'C:xampp	mpphp11DA.tm', 15886, 'application/vnd.openxmlformats'),
('robel', 'vb', 'vb12', 'Information Technolo', '1', '4', '_CASE STUDY 1.docx', 'D:xampp	mpphp367E.tm', 18128, 'application/vnd.openxmlformats');

-- --------------------------------------------------------

--
-- Table structure for table `postinfo`
--

CREATE TABLE IF NOT EXISTS `postinfo` (
  `User_Id` varchar(30) NOT NULL,
  `dates` date NOT NULL,
  `types` varchar(30) NOT NULL,
  `info` mediumtext NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postinfo`
--

INSERT INTO `postinfo` (`User_Id`, `dates`, `types`, `info`) VALUES
('137', '2014-06-12', 'meeting', 'the presentation is good.');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `User_Id` varchar(30) NOT NULL,
  `First_Name` varchar(25) NOT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `program` varchar(25) NOT NULL,
  `phone_No` int(15) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`Email`),
  KEY `nnn` (`User_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`User_Id`, `First_Name`, `Last_Name`, `Sex`, `Email`, `password`, `dept`, `program`, `phone_No`, `status`) VALUES
('compr/104/03', 'alemu', 'endale', 'male', 'alemu@gmail.com', '12345', 'IS', 'degree', 914568791, '4'),
('compr/067/03', 'Alemu', 'Endale', 'male', 'alex@yahoo.com', '5555', 'Information Technology', 'degree', 910916122, '4'),
('compr/067/03', 'Yared', 'Dinku', 'male', 'yared@yahoo.com', '222', 'It', 'degree', 914763753, '4');

-- --------------------------------------------------------

--
-- Table structure for table `studentassignment`
--

CREATE TABLE IF NOT EXISTS `studentassignment` (
  `User_Id` varchar(20) NOT NULL,
  `stName` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `coursename` varchar(30) NOT NULL,
  `term` varchar(30) NOT NULL,
  `Filename` varchar(20) NOT NULL,
  `tmp_name` varchar(20) NOT NULL,
  `Filesize` double NOT NULL,
  `Filetype` varchar(30) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentassignment`
--

INSERT INTO `studentassignment` (`User_Id`, `stName`, `dept`, `year`, `coursename`, `term`, `Filename`, `tmp_name`, `Filesize`, `Filetype`) VALUES
('alemu', 'it', 'Accounting', '2', 'current isse', '2', 'new ppt group12.pptx', 'D:xampp	mpphpA101.tm', 802603, 'application/vnd.openxmlformats'),
('comp4050', 'nuredin', 'Geography', '3', 'current issee', '2', 'DBU ICT.docx', 'C:xampp	mpphpEBC5.tm', 10937, 'application/vnd.openxmlformats'),
('compr/104/03', 'Abel Hailu', 'Information Technology', '2', 'architecture', '2', 'meeting.docx', 'C:xampp	mpphpAB9E.tm', 10878, 'application/vnd.openxmlformats'),
('compr/137/03', 'Alemu Endale', 'Information Technology', '3', 'data structure', '2', 'ww.docx', 'C:xampp	mpphp2B86.tm', 14026, 'application/vnd.openxmlformats'),
('compr301', 'belay mekurya', 'Information Technology', '2', 'introduction', '3', 'PHP download.docx', 'C:xampp	mpphp28D6.tm', 13659, 'application/vnd.openxmlformats'),
('FBE123/04', 'Dirib Worku', 'Accounting', '4', 'introduction to acc', '2', 'powerpoint.pptx', 'C:xampp	mpphp1939.tm', 348384, 'application/vnd.openxmlformats');

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

INSERT INTO `user` (`User_Id`, `username`, `password`, `Accounttype`, `Email`) VALUES
('137', 'admin', '123456', 'admin', 'teklay@facebook.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `postinfo`
--
ALTER TABLE `postinfo`
  ADD CONSTRAINT `ttt` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_Id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `nnn` FOREIGN KEY (`User_Id`) REFERENCES `account` (`User_Id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `yyy` FOREIGN KEY (`User_Id`) REFERENCES `account` (`User_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
