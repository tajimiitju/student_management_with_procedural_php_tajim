-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 11:49 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-63`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `c_title` varchar(222) NOT NULL,
  `c_code` varchar(222) NOT NULL,
  `c_duration` varchar(222) NOT NULL,
  `c_credit` varchar(222) NOT NULL,
  `c_teacher` varchar(222) NOT NULL,
  `students` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `c_title`, `c_code`, `c_duration`, `c_credit`, `c_teacher`, `students`) VALUES
(7, 'aaa', 'IT-1105', '6 months', '3', 'aaaaa', ''),
(8, 'Circuit', 'IT-1105', '6 months', '3', 'gggggggggggggg', ''),
(9, 'bbb', 'bbb', 'bbbbb', 'bbbbbbb', 'bbbbbbbb', ''),
(10, 'ccc', 'ccccc', 'ccccc', 'cccccc', 'cccccc', ''),
(13, 'php', 'pppp', 'ppppp', 'pppp', 'ppppp', ''),
(14, 'zz', 'zz', 'zz', 'zzzz', 'zzzz', ''),
(15, 'html', 'aa', 'aaaaa', 'aa', 'aa', ' aaa, aa, aa');

-- --------------------------------------------------------

--
-- Table structure for table `day_16_taj`
--

CREATE TABLE `day_16_taj` (
  `id` int(11) NOT NULL,
  `ct` varchar(33) NOT NULL,
  `cc` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day_16_taj`
--

INSERT INTO `day_16_taj` (`id`, `ct`, `cc`) VALUES
(11, 'cse', '1122'),
(12, 'EDC', 'IT-2105'),
(13, 'MC', 'IT-3105'),
(14, 'circuit', 'IT-1105');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `subjectcs` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `email`, `password`, `address`, `mobile`, `gender`, `hobby`, `image_name`, `dob`, `subjectcs`) VALUES
(2, 'Tajim', 'tajim@gmail.com', '455877', 'KSAKJD', '333333333333', 'male', 'cricket, singing', '1.jpg', '19 - 12 - 2010', 'zz, html'),
(4, 'enan', 'nazifa@GGGG.AAA', '455877', 'dhaka', '0000000000000000', 'male', 'cricket, singing, dancing', 'tajimiugdrtd 2 ffff-edit.jpg', '19 - 6 - 2005', 'aaa, Circuit, bbb'),
(7, 'mmmmm', 'nazifa@GGGG.AAA', '455877', 'jhsfgdhj', '88888888', 'male', 'cricket, singing', 'Basis_173919.jpg', '29 - 9 - 2001', 'Circuit, php, html'),
(8, 'aaaaaaa', 'nazifa@GGGG.AAA', '455877', 'aaaaaaaaaaaaa1111111', '111111111111111111', 'female', 'singing', 'k.jpg', '19 - 12 - 2010', 'Circuit, bbb, ccc, php, html'),
(9, 'bbbbb', 'nazifa@GGGG.AAA', '455877', 'bbbbbbbbbb', 'bbbbbbbbbb', 'female', 'singing, dancing', 'i.jpg', '19 - 12 - 2010', 'php, zz'),
(10, 'ccccc', 'nazifa@GGGG.AAA', '455877', 'cccccccc', 'ccccccccc', 'male', 'cricket', 'h.jpg', '5 - 5 - 2005', 'Circuit, php'),
(11, 'dddd', 'nazifa@GGGG.AAA', '455877', 'dddddddd', 'dddddddd', 'male', 'cricket, singing, dancing', '14572773_1320279491318251_7604877284929059290_n.jpg', '1 - 1 - 2001', 'php, html'),
(12, 'zzzzz', 'zzz@zzz.com', 'zzzz', 'zzzz', 'zzzz', 'male', 'cricket, singing, dancing', 'Bismillah_Hir_Rahman_Nir_Raheem.svg.png', '19 - 12 - 2010', 'Circuit, bbb, ccc'),
(13, 'aa', 'asdfsafd@gmail.com', 'aaaa', 'aaaaaaaa', 'aaaaaaaa', 'male', 'cricket, singing', 'item8.png', '19 - 12 - 2010', ''),
(14, 'aaaa', 'asdfsafd@gmail.com', 'aaaa', 'aaaaaaaaaaa', 'aaaaaaaaa', 'female', 'singing, dancing', 'basis.png', '19 - 12 - 2010', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day_16_taj`
--
ALTER TABLE `day_16_taj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `day_16_taj`
--
ALTER TABLE `day_16_taj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
