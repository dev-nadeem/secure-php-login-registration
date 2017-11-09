-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 08:21 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `mobile`) VALUES
(23, 'Muhammad', 'nadeem.phps@gmail.com', '$2y$10$FXxCJPAAB4hR5qqVf/lKvuREpAcfFjllpdK7brwDOC8r.trw.7Yve', 2147483647),
(24, 'ajay', 'ajay@gmail.com', '$2y$10$0XPXcV2lsyX05ez5DZAcaeXi9Vd9QpGUFu4kXKvePf8IjrqHT53q2', 2147483647),
(27, 'ashwani', 'ashwani@gmail.com', '$2y$10$02EuSvhWcQoa2v8fXclUD.nLyRoa4ElnmNR4h3upG.v6vwvhQpJHC', 0),
(28, 'amir', 'amir@gmail.com', '$2y$10$24krQlfhkz/vswdw8H15bOCumoThXEwXdS5X0s6MVyySr9K2j9Xla', 2147483647),
(29, 'test', 'test@gmail.com', '$2y$10$DuVriM2WAm2lRN7DlseqneQA.SB3REa/y76cmTr3UOqi3kUimuK82', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
