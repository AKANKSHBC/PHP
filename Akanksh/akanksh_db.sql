-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 09:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akanksh_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_master`
--

CREATE TABLE `item_master` (
  `ino` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(5) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_master`
--

INSERT INTO `item_master` (`ino`, `name`, `price`, `quantity`) VALUES
(1001, 'keyboard', 1200, 20),
(1002, 'mouse', 800, 45),
(1003, 'cpu', 3000, 40),
(1004, 'monitor', 4000, 35),
(1005, 'ram', 700, 20);

-- --------------------------------------------------------

--
-- Table structure for table `passport`
--

CREATE TABLE `passport` (
  `ino` int(10) UNSIGNED NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `faname` varchar(20) NOT NULL,
  `moname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `nat` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `photo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passport`
--

INSERT INTO `passport` (`ino`, `fname`, `lname`, `faname`, `moname`, `dob`, `nat`, `gender`, `address`, `photo`) VALUES
(1934509, 'Suresh', 'Kamath', 'Ramesh Kam', 'Surthi R K', '2011-06-12', 'Indian', 'male', '5-56 Latha Villa,\r\n4th Cross, Baikampady,\r\nMangalore,Karnataka\r\n-573899', 'download.png'),
(1934510, 'Mark', 'Henry', 'Duster ', 'Jessica', '1982-12-31', 'USA', 'male', 'n m m n dn ddjd sidsjd sdndsn dj\r\nsdjs sdisdhd ', 'download.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passport`
--
ALTER TABLE `passport`
  ADD PRIMARY KEY (`ino`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passport`
--
ALTER TABLE `passport`
  MODIFY `ino` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1934511;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
