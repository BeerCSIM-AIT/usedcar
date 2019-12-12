-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2019 at 06:59 AM
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
  `carType` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(80) NOT NULL,
  `color` varchar(20) NOT NULL,
  `license` varchar(20) NOT NULL,
  `province` varchar(30) NOT NULL,
  `modelYear` varchar(4) NOT NULL,
  `price` int(11) NOT NULL,
  `postedBy` int(11) NOT NULL,
  `postedDate` datetime NOT NULL,
  `carpic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `carType`, `brand`, `model`, `color`, `license`, `province`, `modelYear`, `price`, `postedBy`, `postedDate`, `carpic`) VALUES
(2, 1, 'Volksvaken', 'Turtle', 'ส้ม', 'กก9688', 'นนทบุรี', '1960', 300000, 2, '2019-12-12 21:22:08', 'car01.jpg'),
(3, 1, 'Car002', 'Model002', 'ส้ม', 'กก9999', 'นนทบุรี', '1999', 400000, 2, '2019-12-12 21:27:39', 'car02.jpg'),
(4, 1, 'Car003', 'Model003', 'น้ำเงิน', 'กก8888', 'กรุงเทพ', '2001', 400000, 2, '2019-12-12 21:30:15', 'car03.jpg'),
(5, 2, 'Truck001', 'Model001', 'น้ำตาล', 'กก9600', 'นนทบุรี', '1977', 40000, 2, '2019-12-12 21:33:00', 'truck02.jpg'),
(6, 2, 'Truck002', 'Model002', 'เทา', 'กก7777', 'นนทบุรี', '2004', 200000, 2, '2019-12-12 21:33:58', 'truck03.jpg'),
(7, 2, 'Truck003', 'Model003', 'ทอง', 'กก9677', 'นนทบุรี', '2006', 400000, 2, '2019-12-12 21:34:52', 'truck01.jpg'),
(8, 3, 'Van001', 'Model001', 'ขาว', 'กก4444', 'นนทบุรี', '2002', 500000, 2, '2019-12-12 21:41:11', 'van01.jpg'),
(9, 3, 'Van002', 'Model002', 'เขียวขาว', 'กก4321', 'นนทบุรี', '1960', 200000, 2, '2019-12-12 21:41:58', 'van02.jpg');

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
(2, 'BeerBC16', '25d55ad283aa400af464c76d713c07ad', 'Phakpoom', 'Ittirattanakomon', 'beerbc16@gmail.com', 0),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
