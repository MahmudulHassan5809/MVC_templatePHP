-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 07:30 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cId` int(11) NOT NULL,
  `cName` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cId`, `cName`, `title`) VALUES
(1, 'Coding', 'Coding Category'),
(3, 'Technology', 'Technology'),
(4, 'International', 'International'),
(5, 'Science', 'Science Category'),
(6, 'National', 'National Category'),
(9, 'Test Category', 'Test Category');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `pId` int(11) NOT NULL,
  `pTitle` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`pId`, `pTitle`, `content`, `cat`) VALUES
(2, 'Second Post Title Will Be Here ...', '<p>This Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy TextThis Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy Text.</p>\r\n\r\n<p>This Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy TextThis Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy Text This Is Dummy Text.</p>', 3),
(3, 'This Is our Test Post', '<p>This Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test PostThis Is our Test Post</p>', 9),
(4, 'Football', '<p>Football ContentFootball ContentFootball ContentFootball ContentFootball ContentFootball ContentFootball ContentFootball ContentFootball ContentFootball ContentFootball ContentFootball ContentFootball ContentFootball ContentFootball ContentFootball ContentFootball ContentFootball ContentFootball ContentFootball Content</p>', 4),
(5, 'Cricket', '<p>Cricket Content Cricket Content.Cricket Content.Cricket Content.Cricket Content.Cricket Content.Cricket Content.Cricket Content.Cricket Content.Cricket Content.Cricket Content.Cricket Content.Cricket Content.Cricket Content.Cricket Content..</p>', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(32) NOT NULL,
  `label` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `label`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`pId`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
