-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2019 at 06:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(255) NOT NULL,
  `adminpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminpassword`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookid` int(10) NOT NULL,
  `bookimage` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `availability` varchar(100) NOT NULL,
  `actualprice` int(100) NOT NULL,
  `priceperday` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `bookimage`, `title`, `author`, `catagory`, `description`, `availability`, `actualprice`, `priceperday`, `username`, `userid`) VALUES
(2, '../resources/images.jfif', 'Amar Bondhu Rashed', 'Jafor Iqbal', 'Story', 'About independence of Bangladesh', 'no', 150, 10, 'sowvik', 1),
(3, '../resources/images.jfif', 'Amar Bondhu Rashed', 'MD Jafor Iqbal', 'Story', 'About independence of Bangladesh', 'yes', 150, 10, 'sowvik', 1),
(6, '../resources/img140206_71414.gif', 'advanced learners communicative english', 'Chowdhury and Hossain', 'Grammer', 'test', 'yes', 300, 10, 'itzsowvik', 5),
(7, '../resources/dsc02955-2.jpg', 'test', 'test', 'test', 'test', 'yes', 5000, 10, 'sowvik', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rentedbook`
--

CREATE TABLE `rentedbook` (
  `userid` int(255) NOT NULL,
  `bookid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(100) NOT NULL,
  `secmoney` int(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `fullname`, `email`, `address`, `phone`, `secmoney`, `password`) VALUES
(1, 'sowvik', 'Sowvik Sarker', 'ssowvik@gmail.com', 'Nikunja-2, Khilkhet, Dhaka', 1309606984, 1550, '12345'),
(7, 'itzsowvik', 'Sowvik Sarker', 'ssowvik@gmail.com', 'Nikunja-2, Khilkhet, Dhaka', 1779250484, 1000, '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
