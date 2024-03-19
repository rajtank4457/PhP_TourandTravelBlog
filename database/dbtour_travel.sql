-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 01:11 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtour&travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbook_form`
--

CREATE TABLE `tblbook_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `member` int(255) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbook_form`
--

INSERT INTO `tblbook_form` (`id`, `name`, `email`, `phone`, `address`, `location`, `member`, `arrivals`, `leaving`) VALUES
(1, 'Raj', 'rajtank9789@gmail.com', '7954035109', 'surat', 'Chennai', 2, '2023-09-20', '2023-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(10) UNSIGNED NOT NULL,
  `usernames` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwords` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `usernames`, `email`, `passwords`, `phone`) VALUES
(1, 'raj', 'anjana_gohel@hotmail.com', 'raj12345', '7954035109'),
(2, 'meet', 'demoaccount@gmail.com', 'meet123', '7932017418'),
(3, 'prince', 'prince123@gmail.com', 'prince123', '1234567890'),
(8, 'prince', 'demoaccount@gmail.com', '12345', '7954035109'),
(9, 'meet', 'prince123@gmail.com', '12345', '1234567890'),
(10, 'test', 'test123@hotmail.com', 'test123', '7932017418'),
(11, 'test1', 'test12@hotmail.com', 'test12', '7932017418'),
(12, 'test2', 'test1@hotmail.com', 'test1', '7932017418'),
(13, 'testy', 'demoaccount@gmail.com', 'testy1', '1234567890'),
(14, 'vinay', 'vinay123@gmail.com', 'vinay123', '0987654321'),
(15, 'test', 'anjana_gohel@hotmail.com', 'test12345', '7954035109');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbook_form`
--
ALTER TABLE `tblbook_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbook_form`
--
ALTER TABLE `tblbook_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
