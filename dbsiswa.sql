-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 08:28 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `dsiswa`
--

CREATE TABLE `dsiswa` (
  `ID` int(11) NOT NULL,
  `nis` varchar(155) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dsiswa`
--

INSERT INTO `dsiswa` (`ID`, `nis`, `nama`, `tanggal`, `jurusan`, `agama`, `alamat`) VALUES
(6, '343411', 'papay', '2021-06-04', 'RPL', 'islam', 'yasmin'),
(7, '141342', 'arul', '2004-02-04', 'RPL', 'islam', 'bogor'),
(9, '12314', 'muhammad hafidz', '2004-06-22', 'RPL', 'islam', 'yasmin'),
(19, '34124', 'tuit', '2021-06-10', 'MM', 'katolik', 'medan'),
(20, '1341234', 'budi', '2021-06-17', 'TKJ', 'Kong Hu Cu', 'depok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dsiswa`
--
ALTER TABLE `dsiswa`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dsiswa`
--
ALTER TABLE `dsiswa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
