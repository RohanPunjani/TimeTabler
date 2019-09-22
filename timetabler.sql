-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2019 at 07:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetabler`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `Branch` varchar(20) NOT NULL,
  `Semester` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `SubjectCode` varchar(20) NOT NULL,
  `SubjectName` varchar(20) NOT NULL,
  `AcademicYear` year(4) NOT NULL,
  `Semester` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`SubjectCode`, `SubjectName`, `AcademicYear`, `Semester`) VALUES
('e01245', 'Maths', 2019, 3),
('e01245', 'Maths', 2019, 3);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `SDRN` char(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Experience` tinyint(4) NOT NULL,
  `Availability` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`SDRN`, `Name`, `Designation`, `Experience`, `Availability`) VALUES
('54841', 'RohanPunjani', 'Professor', 0, 'av');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SubjectCode` varchar(20) NOT NULL,
  `SDRN` varchar(20) NOT NULL,
  `Semester` tinyint(4) NOT NULL,
  `Division` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl`
--

CREATE TABLE `tbl` (
  `Day` varchar(9) NOT NULL,
  `StartTime` tinyint(4) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Faculty` varchar(20) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `RoomNo` varchar(4) NOT NULL,
  `Division` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl`
--

INSERT INTO `tbl` (`Day`, `StartTime`, `Subject`, `Faculty`, `Semester`, `Branch`, `RoomNo`, `Division`) VALUES
('Monday', 8, 'PCT', 'MC', 3, 'IT', '604', 'A1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD KEY `Semester` (`Semester`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD KEY `Semester` (`Semester`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`SDRN`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD KEY `SDRN` (`SDRN`);

--
-- Indexes for table `tbl`
--
ALTER TABLE `tbl`
  ADD PRIMARY KEY (`Day`,`StartTime`,`Semester`,`Branch`,`Division`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
