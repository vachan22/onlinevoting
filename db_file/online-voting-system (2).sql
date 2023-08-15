-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 07:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-voting-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('vachan22', 'vachan22'),
('vachan22', 'vachan22');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `name`) VALUES
(1, 'secratry'),
(4, 'sports'),
(5, 'minister');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `regno` varchar(20) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `qtn` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`regno`, `answer`, `qtn`) VALUES
('JUA19060', 'it', 3),
('JUA19080', 'don', 3),
('JUA19080', 'don', 3),
('JUA19080', 'don', 3),
('JUA19080', 'fun', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `regno` varchar(10) NOT NULL,
  `password` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL,
  `votes` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `regno`, `password`, `address`, `photo`, `status`, `votes`, `role`, `position`) VALUES
(8, 'vachan K r', '9353724746', '0', 'rajashekar s (ground floor) 21 EWS 3RD STAGE KHB KUVEMPUNAGA Complex MYSURU, KARNATAKA 570023', 'sukuna-6094183_1280.jpg', '0', 0, 1, ''),
(10, 'vachan', '9480195789', '19080', 'mysore', 'kamado.jpeg', '0', 0, 1, ''),
(12, 'suraj', 'JUA19038', '0', 'nanjangud', 'movie-spider-man-into-the-spider-verse-marvel-comics-miles-morales-spider-man-hd-wallpaper-preview.jpg', '0', 0, 1, ''),
(13, 'Vachan K R', 'JUA19080', '234', '', '', '0', 0, 0, ''),
(14, 'Vachan K R', 'JUA19080', '234', '', '', '0', 0, 0, ''),
(15, 'Vachan K R', 'JUA19080', '234', '', '', '0', 0, 0, ''),
(16, 'suraj', 'JUA19040', '123', 'nanjangud', 'kamado.jpeg', 'secratry', 0, 1, ''),
(17, 'suraj', 'JUA19040', '123', 'mysore', 'miles-morales-marvel-comics-spider-man-into-the-spider-verse-spider-man-wallpaper-preview.jpg', '0', 0, 1, ''),
(18, 'Samarth', 'JUA19040', '0', 'thirthalli', 'sukuna-6094183_1280.jpg', '0', 0, 1, ''),
(25, 'jeevan', 'JUA19034', '1234', 'bhalehonnur', 'photo pass.jpg', 'sports', 0, 1, ''),
(26, 'adithya', 'JUA19003', '234', 'ckm', '933d2daefb359bce5be96653ef8284f3.jpg', 'secratry', 0, 1, ''),
(27, 'amshu', 'JUA19045', '456', 'bhonnur', 'IMG_20210715_104403.jpg', '0', 0, 1, ''),
(28, 'suresh', 'JUA19038', '123', ' zxv', 'miles-morales-marvel-comics-spider-man-into-the-spider-verse-spider-man-wallpaper-preview.jpg', '0', 0, 1, ''),
(29, 'ganesh', 'JUA19034', '123', 'dxv', 'kamado.jpeg', '0', 0, 1, ''),
(30, 'tejas', 'JUA19040', '0', 'asd', 'miles-morales-marvel-comics-spider-man-into-the-spider-verse-spider-man-wallpaper-preview.jpg', '0', 0, 1, ''),
(31, 'htd', 'JUA19080', '234', 'ssd', 'kamado.jpeg', 'secratry', 0, 1, ''),
(33, 'suraj', 'JUA19034', '2233', 'nanjangud', 'kamado.jpeg', '0', 0, 1, ''),
(34, 'rohith', 'JUA19060', '123', 'mysore', 'kamado.jpeg', '0', 0, 1, ''),
(35, 'rohith', 'JUA19080', '234', 'mysore', 'kamado.jpeg', '0', 0, 1, ''),
(36, 'rohith', 'JUA19080', '234', 'mysore', 'kamado.jpeg', '0', 0, 1, ''),
(37, 'rohith', 'JUA19080', '234', 'mysore', 'kamado.jpeg', '0', 0, 1, ''),
(38, 'rohith', 'JUA19080', '234', 'mysore', 'kamado.jpeg', '0', 0, 1, ''),
(39, 'rohith', 'JUA19080', '234', 'mysore', 'kamado.jpeg', '0', 0, 1, ''),
(46, 'Vachan K R', 'JUA19080', '', '', 'kamado.jpeg', '0', 0, 2, 'secratry'),
(47, 'suraj', 'JUA19038', '', '', 'movie-spider-man-into-the-spider-verse-marvel-comics-miles-morales-spider-man-hd-wallpaper-preview.jpg', '0', 3, 2, 'secratry'),
(48, 'rohith', 'JUA19040', '', '', 'sidy.jpeg', '0', 3, 2, 'sports'),
(49, 'secratry', 'JUA19060', '', '', 'sukuna-6094183_1280.jpg', '0', 1, 2, 'secratry'),
(50, 'tejas', 'JUA19034', '', '', 'wallpaperflare-cropped.jpeg', '0', 0, 2, 'secratry');

-- --------------------------------------------------------

--
-- Table structure for table `voted`
--

CREATE TABLE `voted` (
  `id` int(10) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voted`
--

INSERT INTO `voted` (`id`, `position`) VALUES
(31, 'sports'),
(31, 'secratry'),
(25, 'secratry'),
(25, 'sports'),
(16, 'secratry'),
(26, 'sports'),
(26, 'secratry');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `name` varchar(20) NOT NULL,
  `regno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`name`, `regno`) VALUES
('Vachan K R', 'JUA19080'),
('tejas', 'JUA19034'),
('Vachan K R', 'JUA19080'),
('rohith', 'JUA19038'),
('tejas', 'JUA19034'),
('Vachan K R', 'JUA19080'),
('', 'JUA19038'),
('Vachan K R', 'JUA19080'),
('rohith', 'JUA19038');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
