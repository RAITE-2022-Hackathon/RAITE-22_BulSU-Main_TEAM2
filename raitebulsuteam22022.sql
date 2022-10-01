-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 10:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raitebulsuteam22022`
--

-- --------------------------------------------------------

--
-- Table structure for table `following`
--

CREATE TABLE `following` (
  `User` int(11) NOT NULL,
  `Following` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `AccountID` int(11) NOT NULL,
  `PostID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`AccountID`, `PostID`) VALUES
(1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `PostID` int(11) NOT NULL,
  `ReplyingTo` int(11) DEFAULT NULL,
  `AccountID` int(11) NOT NULL,
  `DatePosted` timestamp NOT NULL DEFAULT current_timestamp(),
  `Body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`PostID`, `ReplyingTo`, `AccountID`, `DatePosted`, `Body`) VALUES
(16, NULL, 2, '2022-10-01 05:10:05', 'sadf'),
(17, NULL, 2, '2022-10-01 05:11:18', 'sadfasdgrg'),
(18, 16, 2, '2022-10-01 05:22:05', 'hehe'),
(19, 16, 2, '2022-10-01 05:22:11', 'hehi'),
(20, NULL, 2, '2022-10-01 05:47:06', 'KNADFSDJKJGJDGHdfskglhsddfh d ghx zsf z fsnz snfd fh dfh df df hdf hd dfxh df '),
(21, NULL, 2, '2022-10-01 05:48:11', 'sadfadfs'),
(22, NULL, 2, '2022-10-01 05:48:21', '12342134'),
(23, NULL, 2, '2022-10-01 05:52:56', 'wert'),
(24, NULL, 2, '2022-10-01 05:53:53', 'testing'),
(25, NULL, 2, '2022-10-01 05:54:22', 'Mark and Jason Dashboard'),
(26, 16, 2, '2022-10-01 06:34:11', ''),
(27, 16, 2, '2022-10-01 06:34:41', 'hehiihi'),
(28, 16, 2, '2022-10-01 06:34:48', '23452345'),
(29, NULL, 4, '2022-10-01 07:20:56', 'Hello po'),
(30, NULL, 5, '2022-10-01 07:25:56', 'helo'),
(31, 30, 4, '2022-10-01 07:26:05', 'hi'),
(32, 30, 4, '2022-10-01 07:49:40', 'mosta po'),
(33, 29, 4, '2022-10-01 07:55:47', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `AccountID` int(11) NOT NULL,
  `Username` text DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `Email` text DEFAULT NULL,
  `Bio` text DEFAULT NULL,
  `JoinDate` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`AccountID`, `Username`, `Password`, `Email`, `Bio`, `JoinDate`) VALUES
(4, 'jason', 'asd', 'charlesjason.garcia.m@bulsu.edu.ph', NULL, '2022-10-01'),
(5, 'mark', 'asd', 'asda@gmail.com', NULL, '2022-10-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`PostID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`AccountID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `AccountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
