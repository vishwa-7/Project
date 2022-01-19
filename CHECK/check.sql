-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 02:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `a12`
--

CREATE TABLE `a12` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `a12`
--

INSERT INTO `a12` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '', '', '', '', '', ''),
('monday', '', '', '', '', '', ''),
('saturday', '', '', '', '', '', ''),
('thursday', '', '', '', '', '', ''),
('tuesday', '', '', '', '', '', ''),
('wednesday', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` varchar(10) NOT NULL,
  `a_name` varchar(20) NOT NULL,
  `a_pass` varchar(10) NOT NULL DEFAULT 'ad001'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_pass`) VALUES
('AD01', 'Peter', 'ad001');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `name` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`name`, `status`) VALUES
('test2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` varchar(10) NOT NULL,
  `c_name` varchar(10) NOT NULL,
  `course_type` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `isalloted` int(255) NOT NULL,
  `alloted01` text NOT NULL,
  `alloted02` text NOT NULL,
  `alloted03` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `c_name`, `course_type`, `semester`, `isalloted`, `alloted01`, `alloted02`, `alloted03`) VALUES
('CS01', 'DBMS', 'LAB\r\n', 5, 1, 'a12', '', ''),
('CS02', 'CNS', 'THEORY\r\n', 5, 1, '', '', ''),
('CS03', 'DS', 'LAB', 3, 1, 'xz12', '', ''),
('CS04', 'ADE', '', 3, 1, '', '', ''),
('CS05', 'OS', '', 7, 1, '', '', ''),
('CS06', 'ELE', '', 7, 1, '', '', ''),
('CS07', 'UP', '', 5, 1, 'a12', '', ''),
('CS08', 'ADP', '', 5, 1, 'a12', '', ''),
('CS09', 'CN LAB', '', 5, 1, '', '', ''),
('CS10', 'DB LAB', '', 5, 1, 'a12', '', ''),
('CS11', 'DMS', '', 3, 1, '', '', ''),
('CS12', 'ADE LAB', '', 3, 0, '', '', ''),
('CS13', 'DS LAB', '', 3, 0, '', '', ''),
('CS14', 'OS LAB', '', 7, 1, 'xz12', '', ''),
('CS15', 'ELE LAB', '', 7, 0, '', '', ''),
('CS16', 'EME', '', 7, 0, '', '', ''),
('s123', 'dis', 'THEORY', 5, 0, '', '', ''),
('t01', 'test1', '', 5, 1, 'xz12', '', ''),
('test01', 'test1', '', 5, 0, '', '', ''),
('tttt01', 'test1', '', 4, 0, '', '', ''),
('up90', 'up', 'THEORY', 7, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `grievance`
--

CREATE TABLE `grievance` (
  `grv_id` varchar(10) NOT NULL,
  `issue` text NOT NULL,
  `solution taken` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `g_id` varchar(100) NOT NULL,
  `g_name` varchar(100) NOT NULL,
  `topic` varchar(30) NOT NULL,
  `phno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`g_id`, `g_name`, `topic`, `phno`) VALUES
('dada@gmail.com', 'dada', 'ENGINE RUNNING', 1234),
('GS01', 'Sam', 'Network Security', 10923435),
('GS02', 'John', 'Big Data', 20214325);

-- --------------------------------------------------------

--
-- Table structure for table `j02`
--

CREATE TABLE `j02` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `j02`
--

INSERT INTO `j02` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '', '', '', '', '', ''),
('monday', '', '', '', '', '', ''),
('saturday', '', '', '', '', '', ''),
('thursday', '', '', '', '', '', ''),
('tuesday', '', '', '', '', '', ''),
('wednesday', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `L_id` varchar(10) NOT NULL,
  `L_pass` varchar(10) NOT NULL DEFAULT 'ad001'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`L_id`, `L_pass`) VALUES
('AD01', 'ad001'),
('CR01', 'ad001'),
('CR02', 'ad001'),
('CR03', 'ad001'),
('CR04', 'ad001'),
('CR05', 'ad001'),
('CR06', 'ad001'),
('ST01', 'ad001'),
('ST02', 'ad001'),
('ST03', 'ad001'),
('ST04', 'ad001'),
('ST05', 'ad001');

-- --------------------------------------------------------

--
-- Table structure for table `semester3`
--

CREATE TABLE `semester3` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester3`
--

INSERT INTO `semester3` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '<br>', '<br>', '<br>', '<br>', '-<br>-', '-<br>-, -, -'),
('tuesday', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>'),
('wednesday', '<br>', '<br>', '<br>', '-<br>-', '-<br>-', '<br>'),
('thursday', '<br>', '<br>', '<br>', '<br>', '-<br>-', '<br>'),
('friday', '<br>', '<br>', '<br>', '-<br>-', '-<br>-', '-<br>-, -, -'),
('saturday', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` varchar(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `alias` varchar(20) NOT NULL,
  `adv_id` varchar(255) NOT NULL,
  `s_pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s_id`, `s_name`, `alias`, `adv_id`, `s_pass`) VALUES
('a12', 'saaa', 'aa', 'a111', ''),
('xz12', 'saaa', 'asd', 'aaaa111', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_id` varchar(10) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `section` varchar(3) NOT NULL,
  `semester` int(11) NOT NULL,
  `st_pass` varchar(10) NOT NULL DEFAULT 'ad001'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `s_name`, `section`, `semester`, `st_pass`) VALUES
('CR01', 'Samuel', '3A', 3, 'ad001'),
('CR02', 'Jenny', '3B', 3, 'ad001'),
('CR03', 'Lisa', '5A', 5, 'ad001'),
('CR04', 'Jackson', '5B', 5, 'ad001'),
('CR05', 'Mason', '7A', 7, 'ad001'),
('CR06', 'Nathan', '7B', 7, 'ad001');

-- --------------------------------------------------------

--
-- Table structure for table `xz12`
--

CREATE TABLE `xz12` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xz12`
--

INSERT INTO `xz12` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '', '', '', '', '', ''),
('monday', '', '', '', '', '', ''),
('saturday', '', '', '', '', '', ''),
('thursday', '', '', '', '', '', ''),
('tuesday', '', '', '', '', '', ''),
('wednesday', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a12`
--
ALTER TABLE `a12`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `grievance`
--
ALTER TABLE `grievance`
  ADD PRIMARY KEY (`grv_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `j02`
--
ALTER TABLE `j02`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`L_id`);

--
-- Indexes for table `semester3`
--
ALTER TABLE `semester3`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `xz12`
--
ALTER TABLE `xz12`
  ADD PRIMARY KEY (`day`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `login` (`L_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `login` (`L_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
