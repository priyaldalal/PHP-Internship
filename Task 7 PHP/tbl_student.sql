-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 03:34 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `std_id` int(11) NOT NULL,
  `std_name` varchar(60) NOT NULL,
  `std_lname` varchar(50) NOT NULL,
  `std_gender` varchar(6) NOT NULL,
  `std_email` varchar(30) NOT NULL,
  `std_mobile` bigint(20) NOT NULL,
  `std_college` varchar(60) NOT NULL,
  `std_degree` varchar(50) NOT NULL,
  `std_sem` int(10) NOT NULL,
  `std_city` varchar(10) NOT NULL,
  `std_state` varchar(10) NOT NULL,
  `std_zip` bigint(20) NOT NULL,
  `std_course` varchar(50) NOT NULL,
  `std_time` bigint(20) NOT NULL,
  `std_resume` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`std_id`, `std_name`, `std_lname`, `std_gender`, `std_email`, `std_mobile`, `std_college`, `std_degree`, `std_sem`, `std_city`, `std_state`, `std_zip`, `std_course`, `std_time`, `std_resume`) VALUES
(1, 'priyal', 'Dalal', 'Male', 'PRIYALSDALAL@YAHOO.COM', 7878040785, 'dSDSA', 'AFDDAF', 0, 'AHMEDABAD', 'GUJARAT', 380015, 'C++', 0, ''),
(2, 'fvufsdsnv', 'fbffbdb', 'Female', 'dvvhbd@vfhvb.cvfv', 51462165612501, 'hjdsvcuyhdv', 'vsfvfbe', 0, 'sfvfb', 'bafbvtge', 2266202, 'Pyhton Django', 0, '664446_ico.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
