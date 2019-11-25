-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 07:42 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `username` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `city` varchar(25) NOT NULL,
  `package` varchar(15) NOT NULL,
  `dayplan` text NOT NULL,
  `amount` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`username`, `image`, `city`, `package`, `dayplan`, `amount`) VALUES
('prathiksha', 'maldives.jpg', 'Maldives', 'Delux', '2/12/2019 - 20/12/2019', 19000),
('prathiksha', 'paris.jpg', 'Paris', 'Delux', '16/11/2019 - 8/12/2019', 20000),
('leena', 'manali.jpg', 'Manali', 'Special', '14/11/2019 - 20/11/2019', 12000),
('leena', 'philli.jpg', 'Philli', 'Special', '19/3/2019 - 2/4/2019      ', 10000),
('prathiksha', 'images.jpg', 'huwai', 'Special', '23/9/2019 - 8/9/2019 ', 12000),
('prathiksha', 'philli.jpg', 'Philli', 'Special', '19/3/2019 - 2/4/2019      ', 10000),
('prathiksha', 'philli.jpg', 'Philli', 'Special', '19/3/2019 - 2/4/2019      ', 10000),
('prathiksha', 'bhali.jpg', 'Bhali', 'Special', '7/9/2019 - 23/7/2019', 7000),
('prathiksha', 'bhali.jpg', 'Bhali', 'Special', '7/9/2019 - 23/7/2019', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`username`, `email`, `review`) VALUES
('prathiksha', 'p@gmail.com', 'Awsome places'),
('prathiksha', 'prathiksha@gmail.com', 'Amzing trip'),
('leena', 'leena@gmail.com', 'amzing!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `city` varchar(25) NOT NULL,
  `package` varchar(15) NOT NULL,
  `dayplan` text NOT NULL,
  `amount` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `city`, `package`, `dayplan`, `amount`) VALUES
(1, 'bhali.jpg', 'Bhali', 'Special', '7/9/2019 - 23/7/2019', 7000),
(2, 'images.jpg', 'huwai', 'Special', '23/9/2019 - 8/9/2019 ', 12000),
(3, 'maldives.jpg', 'Maldives', 'Delux', '2/12/2019 - 20/12/2019', 19000),
(4, 'manali.jpg', 'Manali', 'Special', '14/11/2019 - 20/11/2019', 12000),
(5, 'paris.jpg', 'Paris', 'Delux', '16/11/2019 - 8/12/2019', 20000),
(6, 'philli.jpg', 'Philli', 'Special', '19/3/2019 - 2/4/2019      ', 10000),
(7, 'swizz.jpg', 'Swizz', 'Special', '12/6/2019 - 29/6/2019', 12300);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `place` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `email`, `place`, `country`) VALUES
(4, 'prathiksha', '1234', 'prathiksha', 'manglore', 'India'),
(5, 'leena', '1234', 'leena@gmail.com', 'manglore', 'India'),
(6, 'xyz', 'xyz', 'xyz@gmail.com', 'manglore', 'India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
