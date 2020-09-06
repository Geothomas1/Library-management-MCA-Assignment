-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 06, 2019 at 01:59 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_626566`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books`
--

DROP TABLE IF EXISTS `tbl_books`;
CREATE TABLE IF NOT EXISTS `tbl_books` (
  `book_id` int(5) NOT NULL AUTO_INCREMENT,
  `isdn` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `branch_id` int(5) NOT NULL,
  `subject_id` int(5) NOT NULL,
  `count` int(5) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`book_id`, `isdn`, `author`, `book_name`, `branch_id`, `subject_id`, `count`) VALUES
(2, '198273647', 'Kenneth H Rosen', 'Discrete Mathematics and its Applications', 1, 23, 5),
(3, '122342323', 'Thomas H. Cormen', 'Introduction to Algorithms', 1, 24, 0),
(4, '54645789988', 'Brian W. Kernighan', 'The C Programming Language', 1, 25, 1),
(5, '3344334433', 'John Erickson', 'Hacking: The Art of Exploitation', 1, 26, 3),
(6, '345433434', 'Paul Horowitz', 'The Art of Electronics', 2, 27, 5),
(7, '6754545454', 'Adel S. Sedra', 'Microelectronic Circuits', 2, 28, 5),
(8, '45464343534', 'B.P. Lathi', 'Linear Systems and Signals', 2, 29, 14),
(9, '859685745', 'Stephen Corda', 'Introduction to Aerospace Engineering', 3, 30, 4),
(10, '524125854', 'Douglas M', 'Introduction to Unmanned Aircraft Systems', 3, 31, 4),
(11, '854685474', 'Helicopter Aerodynamics', 'Ethirajan Rathakrishnan', 3, 32, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books_branch`
--

DROP TABLE IF EXISTS `tbl_books_branch`;
CREATE TABLE IF NOT EXISTS `tbl_books_branch` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(50) NOT NULL,
  `b_id` int(11) NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_books_branch`
--

INSERT INTO `tbl_books_branch` (`branch_id`, `branch_name`, `b_id`) VALUES
(1, 'Computer Science and Engineering', 1),
(2, 'Electronics and Communication Engineering.', 2),
(3, 'Aerospace Engineering', 3),
(4, 'Agriculture & Food Engineering', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books_request`
--

DROP TABLE IF EXISTS `tbl_books_request`;
CREATE TABLE IF NOT EXISTS `tbl_books_request` (
  `request_id` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` int(5) NOT NULL,
  `book_id` int(5) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_books_request`
--

INSERT INTO `tbl_books_request` (`request_id`, `student_id`, `book_id`, `date`) VALUES
(67, 1, 23, '05/11/2019'),
(75, 2, 24, '05/11/2019'),
(76, 3, 25, '05/11/2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books_subject`
--

DROP TABLE IF EXISTS `tbl_books_subject`;
CREATE TABLE IF NOT EXISTS `tbl_books_subject` (
  `subject_id` int(5) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(50) NOT NULL,
  `branch_id` int(5) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_books_subject`
--

INSERT INTO `tbl_books_subject` (`subject_id`, `subject_name`, `branch_id`) VALUES
(32, 'Ethirajan Rathakrishnan', 3),
(31, 'Introduction to Unmanned Aircraft Systems', 3),
(30, 'Introduction to Aerospace Engineering', 3),
(29, 'Linear Systems and Signals', 2),
(28, 'Microelectronic Circuits', 2),
(27, 'The Art of Electronics', 2),
(26, 'Hacking: The Art of Exploitation', 1),
(25, 'The C Programming Language', 1),
(24, 'Introduction to Algorithms', 1),
(23, 'Discrete Mathematics and its Applications', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `loginid` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`loginid`, `username`, `password`, `status`) VALUES
(1, 'staff', 'staff', 'staff'),
(2, 'geo@gmail.com', 'g123', 'user'),
(3, 'geothomas@gmail.com', '1897', 'user'),
(4, 'faizal@gmail.com', 'f123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

DROP TABLE IF EXISTS `tbl_register`;
CREATE TABLE IF NOT EXISTS `tbl_register` (
  `Regid` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Dob` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Roll_no` int(10) NOT NULL,
  `Ad_no` int(10) NOT NULL,
  `Course` varchar(8) NOT NULL,
  `Semester` varchar(5) NOT NULL,
  `Yearofpass` varchar(6) NOT NULL,
  `Mobile_no` varchar(12) NOT NULL,
  `idfromreg` int(5) NOT NULL,
  PRIMARY KEY (`Regid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`Regid`, `Name`, `Dob`, `Email`, `Roll_no`, `Ad_no`, `Course`, `Semester`, `Yearofpass`, `Mobile_no`, `idfromreg`) VALUES
(1, 'Geo Thomas ', '2019-10-30', 'geo@gmail.com', 62, 191234, 'MCA', '3', '2021', '6574657868', 2),
(2, 'Geo', '2019-11-06', 'geothomas@gmail.com', 62, 191234, 'MCA', '3', '2021', '6238908844', 3),
(3, 'Faizal', '2019-11-01', 'faizal@gmail.com', 65, 191276, 'MTECH', '3', '2021', '8574961236', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
