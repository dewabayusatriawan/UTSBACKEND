-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 08:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bc214`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nidndosen` int(11) NOT NULL,
  `namadosen` varchar(30) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `matakuliah` varchar(20) NOT NULL,
  `ruangkelas` varchar(30) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nidndosen`, `namadosen`, `kelas`, `matakuliah`, `ruangkelas`, `nohp`, `email`) VALUES
(23455, 'wyn', 'BA214', 'Basis Data', 'Lab Database', '0087754', 'yan@gmail.com'),
(23456, 'wyn', 'BB214', 'Front end', 'Lab Database', '0087754', 'yan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(9) NOT NULL,
  `nama_mhs` varchar(150) NOT NULL,
  `kode_jurusan` char(20) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mhs`, `kode_jurusan`, `gender`, `alamat`, `no_hp`, `email`) VALUES
('210005555', 'wayan', 'Sistem Informasi', 'Laki-laki', 'Padangbai', '0087754', 'yan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ruangkelas`
--

CREATE TABLE `ruangkelas` (
  `kodekelas` varchar(10) NOT NULL,
  `namakelas` varchar(20) NOT NULL,
  `lokasikelas` varchar(15) NOT NULL,
  `kapasitaskelas` int(5) NOT NULL,
  `statuskelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ukm`
--

CREATE TABLE `ukm` (
  `idukm` int(11) NOT NULL,
  `namaukm` varchar(30) NOT NULL,
  `namaketuaukm` varchar(30) NOT NULL,
  `namadosenpembimbing` varchar(30) NOT NULL,
  `jumlahanggotaukm` int(5) NOT NULL,
  `jumlahpengurusukm` int(5) NOT NULL,
  `tempatkegiatan` varchar(50) NOT NULL,
  `statusukm` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidndosen`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `ruangkelas`
--
ALTER TABLE `ruangkelas`
  ADD PRIMARY KEY (`kodekelas`);

--
-- Indexes for table `ukm`
--
ALTER TABLE `ukm`
  ADD PRIMARY KEY (`idukm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `nidndosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `ukm`
--
ALTER TABLE `ukm`
  MODIFY `idukm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
