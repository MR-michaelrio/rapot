-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2019 at 10:10 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrapot`
--

-- --------------------------------------------------------

--
-- Table structure for table `xrpl`
--

CREATE TABLE `xiotkp` (
  `nama` varchar(30) NOT NULL,
  `tahun` varchar(30) NOT NULL,
  `nik` int(10) NOT NULL,
  `agamap` varchar(30) NOT NULL,
  `agamapp` varchar(30) NOT NULL,
  `agamak` varchar(30) NOT NULL,
  `agamakk` varchar(30) NOT NULL,
  `pknp` varchar(30) NOT NULL,
  `pknpp` varchar(30) NOT NULL,
  `pknk` varchar(30) NOT NULL,
  `pknkk` varchar(30) NOT NULL,
  `bindop` varchar(30) NOT NULL,
  `bindopp` varchar(30) NOT NULL,
  `bindok` varchar(30) NOT NULL,
  `bindokk` varchar(30) NOT NULL,
  `mtkp` varchar(30) NOT NULL,
  `mtkpp` varchar(30) NOT NULL,
  `mtkk` varchar(30) NOT NULL,
  `mtkkk` varchar(30) NOT NULL,
  `sjrp` varchar(30) NOT NULL,
  `sjrpp` varchar(30) NOT NULL,
  `sjrk` varchar(30) NOT NULL,
  `sjrkk` varchar(30) NOT NULL,
  `bingp` varchar(30) NOT NULL,
  `bingpp` varchar(30) NOT NULL,
  `bingk` varchar(30) NOT NULL,
  `bingkk` varchar(30) NOT NULL,
  `sbdp` varchar(30) NOT NULL,
  `sbdpp` varchar(30) NOT NULL,
  `sbdk` varchar(30) NOT NULL,
  `sbdkk` varchar(30) NOT NULL,
  `orp` varchar(30) NOT NULL,
  `orpp` varchar(30) NOT NULL,
  `ork` varchar(30) NOT NULL,
  `orkk` varchar(30) NOT NULL,
  `mandap` varchar(30) NOT NULL,
  `mandapp` varchar(30) NOT NULL,
  `mandak` varchar(30) NOT NULL,
  `mandakk` varchar(30) NOT NULL,
  `bhump` varchar(30) NOT NULL,
  `bhumpp` varchar(30) NOT NULL,
  `bhumk` varchar(30) NOT NULL,
  `bhumkk` varchar(30) NOT NULL,
  `simdigp` varchar(30) NOT NULL,
  `simdigpp` varchar(30) NOT NULL,
  `simdigk` varchar(30) NOT NULL,
  `simdigkk` varchar(30) NOT NULL,
  `fisikap` varchar(30) NOT NULL,
  `fisikapp` varchar(30) NOT NULL,
  `fisikak` varchar(30) NOT NULL,
  `fisikakk` varchar(30) NOT NULL,
  `kimiap` varchar(30) NOT NULL,
  `kimiapp` varchar(30) NOT NULL,
  `kimiak` varchar(30) NOT NULL,
  `kimiakk` varchar(30) NOT NULL,
  `sistekomp` varchar(30) NOT NULL,
  `sistekompp` varchar(30) NOT NULL,
  `sistekomk` varchar(30) NOT NULL,
  `sistekomkk` varchar(30) NOT NULL,
  `komjardasp` varchar(30) NOT NULL,
  `komjardaspp` varchar(30) NOT NULL,
  `komjardask` varchar(30) NOT NULL,
  `komjardaskk` varchar(30) NOT NULL,
  `pemrogramanp` varchar(30) NOT NULL,
  `pemrogramanpp` varchar(30) NOT NULL,
  `pemrogramank` varchar(30) NOT NULL,
  `pemrogramankk` varchar(30) NOT NULL,
  `desgrafp` varchar(30) NOT NULL,
  `desgrafpp` varchar(30) NOT NULL,
  `desgrafk` varchar(30) NOT NULL,
  `desgrafkk` varchar(30) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `eskula` varchar(50) NOT NULL,
  `nilaieskula` varchar(10) NOT NULL,
  `deskripsia` text NOT NULL,
  `eskulb` varchar(500) NOT NULL,
  `nilaieskulb` varchar(10) NOT NULL,
  `deskripsib` varchar(500) NOT NULL,
  `eskulc` varchar(500) NOT NULL,
  `nilaieskulc` varchar(10) NOT NULL,
  `deskripsic` varchar(500) NOT NULL,
  `thn` varchar(30) NOT NULL,
  `sakit` varchar(10) NOT NULL,
  `izin` varchar(10) NOT NULL,
  `alfa` varchar(10) NOT NULL,
  `ajaib` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xrpl`
--

INSERT INTO `xiotkp` (`nama`, `tahun`, `nik`, `agamap`, `agamapp`, `agamak`, `agamakk`, `pknp`, `pknpp`, `pknk`, `pknkk`, `bindop`, `bindopp`, `bindok`, `bindokk`, `mtkp`, `mtkpp`, `mtkk`, `mtkkk`, `sjrp`, `sjrpp`, `sjrk`, `sjrkk`, `bingp`, `bingpp`, `bingk`, `bingkk`, `sbdp`, `sbdpp`, `sbdk`, `sbdkk`, `orp`, `orpp`, `ork`, `orkk`, `mandap`, `mandapp`, `mandak`, `mandakk`, `bhump`, `bhumpp`, `bhumk`, `bhumkk`, `simdigp`, `simdigpp`, `simdigk`, `simdigkk`, `fisikap`, `fisikapp`, `fisikak`, `fisikakk`, `kimiap`, `kimiapp`, `kimiak`, `kimiakk`, `sistekomp`, `sistekompp`, `sistekomk`, `sistekomkk`, `komjardasp`, `komjardaspp`, `komjardask`, `komjardaskk`, `pemrogramanp`, `pemrogramanpp`, `pemrogramank`, `pemrogramankk`, `desgrafp`, `desgrafpp`, `desgrafk`, `desgrafkk`, `semester`, `eskula`, `nilaieskula`, `deskripsia`, `eskulb`, `nilaieskulb`, `deskripsib`, `eskulc`, `nilaieskulc`, `deskripsic`, `thn`, `sakit`, `izin`, `alfa`, `ajaib`) VALUES
('', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', '', '', '', ''),
('', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', '', '', '', ''),
('', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('MOSES1234', '2', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2019/2020', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '2', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '2', 1234, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2'),
('', '2', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019/2020'),
('', '2019/2020', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'II', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('MOSES', '2019/2020', 4321, '90', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'II', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
