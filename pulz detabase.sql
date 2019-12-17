-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 03:24 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

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
  `mail` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solo`
--

INSERT INTO `solo` (`id`, `firstname`, `lastname`, `gender`, `bday`, `grade`, `type`, `phone`, `mail`, `school`, `file`) VALUES
(1, '', '', 'Male', '2003-04-10', '11', 'Web Design', '0702358060', 'nayanthanethsara@gmail.com', 'Nalanda College', ''),
(2, 'Nayantha', 'Nethsarsa', 'Male', '2019-11-07', '13', 'Presentation', '0708665456', 'balbal@gmail.com', 'Musaeus College', 'Musaeus College_Presentation_Nayantha_Nethsarsa');

-- --------------------------------------------------------

--
-- Table structure for table `squad`
--

CREATE TABLE `squad` (
  `id` int(11) NOT NULL,
  `school` text NOT NULL,
  `firstname1` text NOT NULL,
  `lastname1` text NOT NULL,
  `gender1` text NOT NULL,
  `birthday1` date NOT NULL,
  `grade1` int(2) NOT NULL,
  `telephone1` varchar(12) NOT NULL,
  `email1` varchar(225) NOT NULL,
  `firstname2` text NOT NULL,
  `lastname2` text NOT NULL,
  `gender2` text NOT NULL,
  `birthday2` date NOT NULL,
  `grade2` int(2) NOT NULL,
  `telephone2` varchar(12) NOT NULL,
  `email2` varchar(225) NOT NULL,
  `firstname3` text NOT NULL,
  `lastname3` text NOT NULL,
  `gender3` text NOT NULL,
  `birthday3` date NOT NULL,
  `grade3` int(2) NOT NULL,
  `telephone3` varchar(12) NOT NULL,
  `email3` varchar(225) NOT NULL,
  `firstname4` text NOT NULL,
  `lastname4` text NOT NULL,
  `gender4` text NOT NULL,
  `birthday4` date NOT NULL,
  `grade4` int(2) NOT NULL,
  `telephone4` varchar(12) NOT NULL,
  `email4` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `squad`
--

INSERT INTO `squad` (`id`, `school`, `firstname1`, `lastname1`, `gender1`, `birthday1`, `grade1`, `telephone1`, `email1`, `firstname2`, `lastname2`, `gender2`, `birthday2`, `grade2`, `telephone2`, `email2`, `firstname3`, `lastname3`, `gender3`, `birthday3`, `grade3`, `telephone3`, `email3`, `firstname4`, `lastname4`, `gender4`, `birthday4`, `grade4`, `telephone4`, `email4`) VALUES
(1, 'Musaeus College', 'Nayantha', 'Nethsara', 'Male', '2003-04-10', 11, '0702358060', 'nayanthanethsara@gmail.com', 'aaaa', 'aaaaaaaaa', 'Male', '2019-11-05', 11, '000000000', 'nayanthanethsara@gnau.com', 'aaas', 'ssssss', 'Male', '2019-11-05', 11, '111111111', 'aaaa@gmail.com', 'sqwwwww', 'wwwwwwwww', 'Male', '2019-11-05', 2, '2222222222', '2w@gmail.com'),
(2, '', 'Nayantha', 'Nethsara', 'Male', '2003-04-10', 11, '0702358060', 'nayanthanethsara@gmail.com', 'aaaa', 'aaaaaaaaa', 'Male', '2019-11-05', 11, '000000000', 'nayanthanethsara@gnau.com', 'aaas', 'ssssss', 'Male', '2019-11-05', 11, '111111111', 'aaaa@gmail.com', 'sqwwwww', 'wwwwwwwww', 'Male', '2019-11-05', 2, '2222222222', '2w@gmail.com');

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
-- Indexes for table `squad`
--
ALTER TABLE `squad`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `squad`
--
ALTER TABLE `squad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
