-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2021 at 09:27 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16999651_user_priyal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resume`
--

CREATE TABLE `tbl_resume` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(60) NOT NULL,
  `user_lname` varchar(60) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_subject` varchar(50) NOT NULL,
  `user_message` varchar(100) NOT NULL,
  `user_delete` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_resume`
--

INSERT INTO `tbl_resume` (`user_id`, `user_fname`, `user_lname`, `user_email`, `user_subject`, `user_message`, `user_delete`) VALUES
(1, 'jk', 'talpafe', 'hbccsdc@bhdbnd.com', 'bjdbvbdbv', 'vbudysbvisdbvhibshjbvijsbvib', ''),
(2, 'PRIYAL', 'DALAL', 'PRIYALSDALAL@YAHOO.COM', 'hello', 'hvuhycbdbv', ''),
(3, 'jay', 'dalal', 'jaydalal@gamil.com', 'heloo', 'priyal how are you', ''),
(4, 'jay', 'dalal', 'jaydalal@gamil.com', 'heloo', 'priyal how are you', ''),
(5, 'jay', 'dalal', 'jaydalal@gamil.com', 'heloo', 'priyal how are you', ''),
(6, 'jay', 'dalal', 'jaydalal@gamil.com', 'heloo', 'priyal how are you', ''),
(7, 'priyal', 'dalal', 'priyaldalal3456@gmail.com', 'ghcvschjbasjkc', 'hii', ''),
(8, 'priyal', 'dalal', 'priyaldalal3456@gmail.com', 'ghcvschjbasjkc', 'hii', ''),
(9, 'Priyal', 'Dalal', 'priyaldalal3456@gmail.com', 'vsdfvsbvv', ' sdvvsfbv s', ''),
(12, 'PRIYAL', 'DALAL', 'PRIYALSDALAL@YAHOO.COM', 'egte', 'hello', NULL),
(13, 'Jimit', 'Modi', 'jimitmodi2005@gmail.com', 'Hii', 'Jimit Modi', NULL),
(14, 'Heet', 'Dalal', 'heetdalal70@gmail.com', '', 'Very helpful guy ', NULL),
(15, 'Khushali ', 'Dalal', 'khushalidalal3456@gmail.com', 'How Are You', 'Just Got Email', NULL),
(16, 'RAJ ', 'Shah', '123@gmail.com', 'Hi there', 'We want to hire you.', NULL),
(17, 'Rushil', 'Soni', 'rushil.soni03@gmail.com', 'Abc', 'Hello sir ', NULL),
(18, 'Jay', 'Hirpara', 'boytecht@gmail.com', '', '', NULL),
(19, 'Sandeep ', 'Dalal', 'dalalsandeep1972@gmsil.com', 'Hi', 'Good', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_resume`
--
ALTER TABLE `tbl_resume`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_resume`
--
ALTER TABLE `tbl_resume`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
