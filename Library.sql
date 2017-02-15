-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2017 at 02:49 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Library`
--

-- --------------------------------------------------------

--
-- Table structure for table `Accounts`
--

CREATE TABLE `Accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `phno` varchar(30) NOT NULL,
  `type` int(11) NOT NULL,
  `date` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Accounts`
--

INSERT INTO `Accounts` (`id`, `name`, `email`, `pass`, `phno`, `type`, `date`) VALUES
(6, 'Ashwin R', 'vivekashwin@gmail.com', 'a666122cf9c56f71fb4785d65ec1574b', '9791775770', 1, 'February 4, 2017, 12:06 pm'),
(7, 'Ashwin', 'vivek@gmail.com', 'd0609a6b7fbbc5159a804b3cf5a52ffe', '9791775770', 2, ''),
(8, 'Ashwin R', 'vivekashwin@gmail.com', 'd0609a6b7fbbc5159a804b3cf5a52ffe', '9791775770', 1, 'February 4, 2017, 2:33 pm');

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

CREATE TABLE `Books` (
  `id` int(11) NOT NULL,
  `ISBN` varchar(40) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Author` varchar(40) NOT NULL,
  `pub_date` varchar(30) NOT NULL,
  `genre` int(11) NOT NULL,
  `cover` varchar(40) NOT NULL,
  `category` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Books`
--

INSERT INTO `Books` (`id`, `ISBN`, `Title`, `Author`, `pub_date`, `genre`, `cover`, `category`, `status`) VALUES
(1, '123123', 'Computer Science', 'Thomas', '12/12/12', 1, '', 'Online', 1),
(2, '12312312', 'Algorithm', 'Henry', '12/12/12', 1, '', 'Physical', 0),
(3, '21123', 'Shanthan', 'Shan', '12/12/12', 3, '', 'Online', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Genre`
--

CREATE TABLE `Genre` (
  `id` int(11) NOT NULL,
  `genre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Genre`
--

INSERT INTO `Genre` (`id`, `genre`) VALUES
(1, 'Educational'),
(2, 'Fiction'),
(3, 'Comedy'),
(4, 'Parody'),
(5, 'Drama'),
(6, 'Horror'),
(7, 'Tragedy'),
(8, 'Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `withdraw_id` int(11) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `book_id` varchar(40) NOT NULL,
  `w_date` varchar(30) NOT NULL,
  `r_date` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`withdraw_id`, `user_id`, `book_id`, `w_date`, `r_date`) VALUES
(4, '8', '2', 'February 4, 2017, 3:28 pm', 'February 7, 2017, 11:30 am'),
(5, '8', '1', 'February 4, 2017, 3:48 pm', 'February 7, 2017, 11:30 am'),
(6, '8', '1', 'February 4, 2017, 4:01 pm', 'February 7, 2017, 11:30 am'),
(7, '8', '2', 'February 7, 2017, 11:29 am', 'February 7, 2017, 11:30 am'),
(8, '8', '2', 'February 7, 2017, 11:30 am', ' '),
(9, '8', '3', 'February 7, 2017, 11:31 am', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Accounts`
--
ALTER TABLE `Accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Books`
--
ALTER TABLE `Books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Genre`
--
ALTER TABLE `Genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`withdraw_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Accounts`
--
ALTER TABLE `Accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `Books`
--
ALTER TABLE `Books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Genre`
--
ALTER TABLE `Genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `withdraw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
