-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 07:30 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std`
--
CREATE DATABASE IF NOT EXISTS `std` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `std`;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` varchar(30) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `cradit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `c_name`, `cradit`) VALUES
('247', 'Architecture', '3'),
('307', 'Operating System', '3'),
('383', 'Java', '4'),
('433', 'Database', '4'),
('BUS', '247', '3');

-- --------------------------------------------------------

--
-- Table structure for table `courselist`
--

CREATE TABLE `courselist` (
  `id` varchar(30) NOT NULL,
  `c_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courselist`
--

INSERT INTO `courselist` (`id`, `c_id`, `f_id`, `sn`) VALUES
('18103055', 247, 13, 14),
('18103055', 383, 12, 15),
('18103055', 433, 11, 16),
('18103088', 247, 13, 17),
('18103088', 383, 10, 18),
('18103088', 433, 11, 19),
('18103335', 247, 18, 20),
('18103335', 383, 12, 21),
('18103335', 433, 11, 22);

-- --------------------------------------------------------

--
-- Table structure for table `tb_faculty`
--

CREATE TABLE `tb_faculty` (
  `f_id` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `f_dep` varchar(20) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_faculty`
--

INSERT INTO `tb_faculty` (`f_id`, `f_name`, `f_dep`, `contact`) VALUES
('10', 'Rana Sir', 'CSE', '014'),
('11', 'Arifa ma\'am', 'CSE', '018'),
('12', 'sajid sir', 'CSE', '016'),
('13', 'Sahin sir', 'CSE', '013'),
('15', 'Faquir Sir', 'BBA', '01542'),
('18', 'Md.Humayun Kabir Biswas Sir', 'CSE', '0154');

-- --------------------------------------------------------

--
-- Table structure for table `tb_std`
--

CREATE TABLE `tb_std` (
  `id` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dep` varchar(10) NOT NULL,
  `area` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_std`
--

INSERT INTO `tb_std` (`id`, `name`, `dep`, `area`) VALUES
('18103055', 'Md.Kamruzaman Polash', 'CSE', 'Uttara'),
('18103088', 'Rifat Ahmed Rony', 'CSE', 'Uttara'),
('18103335', 'Sanchita Rani Sarkar', 'CSE', 'Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `courselist`
--
ALTER TABLE `courselist`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `tb_faculty`
--
ALTER TABLE `tb_faculty`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `tb_std`
--
ALTER TABLE `tb_std`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courselist`
--
ALTER TABLE `courselist`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
