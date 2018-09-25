-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2018 at 07:07 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `id_kad` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nokp` varchar(14) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `jantina` varchar(100) NOT NULL,
  `tarikh` date NOT NULL,
  PRIMARY KEY (`id_kad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id_kad`, `nama`, `nokp`, `pekerjaan`, `jantina`, `tarikh`) VALUES
(31, 'MUHAMMAD LUQMAN ', '011013-06-0031', 'WEB DESIGNER', 'LELAKI', '2018-09-21'),
(2137, 'MOHD DANIEL', '010817-01-2137', 'PELAJAR', 'PEREMPUAN', '2018-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('syahir', ''),
('admin', '123\r\n'),
('123', '123'),
('syahir', '123456'),
('zainularif123', 'enulhaziq123'),
('ozil', 'ozil123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
