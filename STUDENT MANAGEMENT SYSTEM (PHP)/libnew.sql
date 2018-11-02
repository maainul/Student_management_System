-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2016 at 09:09 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `b_id` int(15) NOT NULL,
  `writer_id` int(15) NOT NULL,
  `page` int(5) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`b_id`, `writer_id`, `page`, `price`) VALUES
(0, 0, 0, 0),
(1, 1, 250, 190),
(3, 0, 250, 120),
(4, 4, 987, 897),
(6, 5, 250, 120);

-- --------------------------------------------------------

--
-- Table structure for table `book_info_writer_info_join`
--

CREATE TABLE `book_info_writer_info_join` (
  `b_id` int(15) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `w_name` varchar(30) NOT NULL,
  `edition` varchar(5) NOT NULL,
  `page` varchar(5) NOT NULL,
  `price` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member_and_student_join`
--

CREATE TABLE `member_and_student_join` (
  `m_id` int(15) NOT NULL,
  `s_id` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `depertment` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member_info`
--

CREATE TABLE `member_info` (
  `m_id` int(15) NOT NULL,
  `s_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `s_id` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `depertment` varchar(30) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `writer_info`
--

CREATE TABLE `writer_info` (
  `w_id` int(15) NOT NULL,
  `w_name` varchar(15) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `edition` varchar(5) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `writer_info`
--

INSERT INTO `writer_info` (`w_id`, `w_name`, `book_name`, `edition`, `phone`, `mail`) VALUES
(1, 'habibur rahman', 'math of class 7', '1st', '01778811664', 'habib@gmail.com'),
(2, 'pintu mia', 'math of class 5', '1st', '01778811668', 'pin2@gmail.com'),
(5, 'meem', 'comic', '1st', '01832726116', 'meen@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `member_info`
--
ALTER TABLE `member_info`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `writer_info`
--
ALTER TABLE `writer_info`
  ADD PRIMARY KEY (`w_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
