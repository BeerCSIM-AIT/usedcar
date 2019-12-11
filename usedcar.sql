-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2019 at 07:23 AM
-- Server version: 5.7.23
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usedcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(80) NOT NULL,
  `color` varchar(20) NOT NULL,
  `license` varchar(20) NOT NULL,
  `province` varchar(30) NOT NULL,
  `modelYear` varchar(4) NOT NULL,
  `postedBy` int(11) NOT NULL,
  `postedDate` datetime NOT NULL,
  `carpic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `active`) VALUES
(1, 'Alex', '5f4dcc3b5aa765d61d8327deb882cf99', 'Alex', 'Garnett', 'alex.g@gmail.com', 0),
(2, 'BeerBC16', '9032d29da6f07136c5d5c51699157bc9', 'Phakpoom', 'Ittirattanakomon', 'beerbc16@gmail.com', 0),
(4, 'Supanan.T', 'b2dd0eac7e66799028f2c247fac22ed3', 'Supanan', 'Tongrak', 'supanan.t@gmail.com', 0),
(5, 'AekThanatorn', '25d55ad283aa400af464c76d713c07ad', 'Thanatorn', 'Jeungrunruengkit', 'thana@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
