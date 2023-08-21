-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 21, 2023 at 01:10 PM
-- Server version: 10.3.21-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sheldoij_Semester_Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Authenitcate`
--

CREATE TABLE `Authenitcate` (
  `Name` varchar(255) DEFAULT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Item` varchar(255) DEFAULT NULL,
  `ItemID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Authenitcate`
--

INSERT INTO `Authenitcate` (`Name`, `Date`, `Item`, `ItemID`) VALUES
('Isaac Sheldon', '2023-06-27', 'Chandler Riggs Poster', 1),
('Test Record', '2023-07-27', 'Testing Tester Photo Op', 10),
('Kai Woodsworth', '2023-07-27', 'Autographed Knife - Skeet', 11);

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE `Login` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`Username`, `Password`) VALUES
('admin', 'password'),
('create', 'password'),
('', ''),
('nat', '1817'),
('JohnDoe', 'passwordtest'),
('ashli', 'ashli'),
('test', 'test123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Authenitcate`
--
ALTER TABLE `Authenitcate`
  ADD PRIMARY KEY (`ItemID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Authenitcate`
--
ALTER TABLE `Authenitcate`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
