-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 08:50 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pulz`
--

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `password` varchar(50) NOT NULL,
  `localid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `password`, `localid`) VALUES
(2, 'Nalanda College', '7dc162247c0ac9483f4b623c8f1dcd8f', 1265690376),
(3, 'Musaeus College', 'af22cabdf28a1c04121fbefb66ec17d7', 827393146),
(4, 'Visakha Vidyalaya', '70a9df534ba6a1eae48c2525d397e6a5', 677308713),
(6, 'Devi Balika Vidyalaya', 'e0c8d182c66abc485a478e38dc3d65ac', 2061656747),
(7, 'Vidura College', '18a93dc7aed93e6f1c4a3e4d7bdd36d6', 444236625),
(8, 'Anula Vidyalaya', '37e671bf65f1211f9d20625c89759acf', 221951505),
(9, 'Ananda Balika Vidalaya', '9f91659ba1de9243c95af920935b8aae', 81764583),
(10, 'Gothami Balika Vidyalaya', 'e37b413d42281e31e3d3065e0f20d397', 1667758006),
(11, 'Muslims Ladies College', '7308537548387994101bd96357aeb66c', 864624769),
(12, 'Buddhist Ladies College', '4b653f5c719857d4adb340e450015202', 187302182),
(13, 'Rathnawali Balika Maha Vidyalaya - Gampaha', '075c2616ad290b7281a44ccd07d536d3', 2090504675),
(14, 'St. Pauls Girls School - Milagiriya', '00b7e4ba9a6d0951894a9a3764f277ae', 2094118647),
(15, 'Princess of Wales College', 'fc930f65edd4eea31f180f3f5f918a14', 1322055315);

-- --------------------------------------------------------

--
-- Table structure for table `solo`
--

CREATE TABLE `solo` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bday` date NOT NULL,
  `grade` varchar(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solo`
--
ALTER TABLE `solo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `solo`
--
ALTER TABLE `solo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
