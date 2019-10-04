-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 06:06 PM
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
-- Table structure for table `rapot`
--

CREATE TABLE `rapot` (
  `nama` varchar(30) NOT NULL,
  `nik` int(10) NOT NULL,
  `kls` varchar(30) NOT NULL,
  `thn` varchar(30) NOT NULL,
  `bdg` varchar(30) NOT NULL,
  `pgm` varchar(50) NOT NULL,
  `kmp` varchar(30) NOT NULL,
  `agamap` varchar(30) NOT NULL,
  `agamak` varchar(30) NOT NULL,
  `agamapp` varchar(30) NOT NULL,
  `agamakk` varchar(30) NOT NULL,
  `pknp` varchar(30) NOT NULL,
  `pknpp` varchar(30) NOT NULL,
  `pknk` varchar(30) NOT NULL,
  `pknkk` varchar(30) NOT NULL,
  `bip` varchar(30) NOT NULL,
  `bipp` varchar(30) NOT NULL,
  `bik` varchar(30) NOT NULL,
  `bikk` varchar(30) NOT NULL,
  `mtp` varchar(30) NOT NULL,
  `mtpp` varchar(30) NOT NULL,
  `mtk` varchar(30) NOT NULL,
  `mtkk` varchar(30) NOT NULL,
  `sip` varchar(30) NOT NULL,
  `sipp` varchar(30) NOT NULL,
  `sik` varchar(30) NOT NULL,
  `sikk` varchar(30) NOT NULL,
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
  `hump` varchar(30) NOT NULL,
  `humpp` varchar(30) NOT NULL,
  `humk` varchar(30) NOT NULL,
  `humkk` varchar(30) NOT NULL,
  `skp` varchar(30) NOT NULL,
  `skpp` varchar(30) NOT NULL,
  `skk` varchar(30) NOT NULL,
  `skkk` varchar(30) NOT NULL,
  `fsp` varchar(30) NOT NULL,
  `fspp` varchar(30) NOT NULL,
  `fsk` varchar(30) NOT NULL,
  `fskk` varchar(30) NOT NULL,
  `kap` varchar(30) NOT NULL,
  `kapp` varchar(30) NOT NULL,
  `kak` varchar(30) NOT NULL,
  `kakk` varchar(30) NOT NULL,
  `ssp` varchar(30) NOT NULL,
  `sspp` varchar(30) NOT NULL,
  `ssk` varchar(30) NOT NULL,
  `sskk` varchar(30) NOT NULL,
  `kmdasp` varchar(30) NOT NULL,
  `kmdaspp` varchar(30) NOT NULL,
  `kmdask` varchar(30) NOT NULL,
  `kmdaskk` varchar(30) NOT NULL,
  `pmdp` varchar(30) NOT NULL,
  `pmdpp` varchar(30) NOT NULL,
  `pmdk` varchar(30) NOT NULL,
  `pmdkk` varchar(30) NOT NULL,
  `ddgp` varchar(30) NOT NULL,
  `ddgpp` varchar(30) NOT NULL,
  `ddgk` varchar(30) NOT NULL,
  `ddgkk` varchar(30) NOT NULL,
  `ka` varchar(50) NOT NULL,
  `kb` varchar(50) NOT NULL,
  `kc` varchar(50) NOT NULL,
  `kba` varchar(30) NOT NULL,
  `kbb` varchar(30) NOT NULL,
  `kbc` varchar(50) NOT NULL,
  `ca` varchar(30) NOT NULL,
  `cb` varchar(30) NOT NULL,
  `cc` varchar(50) NOT NULL,
  `sakit` int(30) NOT NULL,
  `izin` int(30) NOT NULL,
  `alpha` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rapot`
--

INSERT INTO `rapot` (`nama`, `nik`, `kls`, `thn`, `bdg`, `pgm`, `kmp`, `agamap`, `agamak`, `agamapp`, `agamakk`, `pknp`, `pknpp`, `pknk`, `pknkk`, `bip`, `bipp`, `bik`, `bikk`, `mtp`, `mtpp`, `mtk`, `mtkk`, `sip`, `sipp`, `sik`, `sikk`, `bingp`, `bingpp`, `bingk`, `bingkk`, `sbdp`, `sbdpp`, `sbdk`, `sbdkk`, `orp`, `orpp`, `ork`, `orkk`, `mandap`, `mandapp`, `mandak`, `mandakk`, `hump`, `humpp`, `humk`, `humkk`, `skp`, `skpp`, `skk`, `skkk`, `fsp`, `fspp`, `fsk`, `fskk`, `kap`, `kapp`, `kak`, `kakk`, `ssp`, `sspp`, `ssk`, `sskk`, `kmdasp`, `kmdaspp`, `kmdask`, `kmdaskk`, `pmdp`, `pmdpp`, `pmdk`, `pmdkk`, `ddgp`, `ddgpp`, `ddgk`, `ddgkk`, `ka`, `kb`, `kc`, `kba`, `kbb`, `kbc`, `ca`, `cb`, `cc`, `sakit`, `izin`, `alpha`) VALUES
('MR', 1153, 'X / II (Dua)', '2019/2020', 'Akuntansi dan Keuangan', 'Akuntansi Keuangan dan Pajak', 'AK', '90', '79', 'B', 'C', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '55', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '-', '-', '-', '-', '-', '-', '-', '-', '-', 10, 0, 0),
('MR', 5811, 'XII / II (Satu)', '2019/2020', 'Administrasi dan Perkantoran', 'Administrasi dan Perkantoran', 'AP', '90', '90', 'B', 'B', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', 'Basket', '100', 'Baik dalam shooting', '-', '-', '-', '-', '-', '-', 0, 0, 0),
('', 0, '', '', '', '', '', '', '', 'C', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', '', '', '', '', '', '', '', '', 0, 0, 0),
('MR', 1153, 'X / II (Dua)', '2019/2020', 'Akuntansi dan Keuangan', 'Akuntansi Keuangan dan Pajak', 'AK', '90', '79', 'B', 'C', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '55', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '-', '-', '-', '-', '-', '-', '-', '-', '-', 10, 0, 0),
('MR', 5811, 'XII / II (Satu)', '2019/2020', 'Administrasi dan Perkantoran', 'Administrasi dan Perkantoran', 'AP', '90', '90', 'B', 'B', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', 'Basket', '100', 'Baik dalam shooting', '-', '-', '-', '-', '-', '-', 0, 0, 0),
('', 0, '', '', '', '', '', '', '', 'C', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', '', '', '', '', '', '', '', '', 0, 0, 0),
('MR', 1153, 'X / II (Dua)', '2019/2020', 'Akuntansi dan Keuangan', 'Akuntansi Keuangan dan Pajak', 'AK', '90', '79', 'B', 'C', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '55', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '-', '-', '-', '-', '-', '-', '-', '-', '-', 10, 0, 0),
('MR', 5811, 'XII / II (Satu)', '2019/2020', 'Administrasi dan Perkantoran', 'Administrasi dan Perkantoran', 'AP', '90', '90', 'B', 'B', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', 'Basket', '100', 'Baik dalam shooting', '-', '-', '-', '-', '-', '-', 0, 0, 0),
('', 0, '', '', '', '', '', '', '', 'C', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', '', '', '', '', '', '', '', '', 0, 0, 0),
('MR', 1153, 'X / II (Dua)', '2019/2020', 'Akuntansi dan Keuangan', 'Akuntansi Keuangan dan Pajak', 'AK', '90', '79', 'B', 'C', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '55', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '-', '-', '-', '-', '-', '-', '-', '-', '-', 10, 0, 0),
('MR', 5811, 'XII / II (Satu)', '2019/2020', 'Administrasi dan Perkantoran', 'Administrasi dan Perkantoran', 'AP', '90', '90', 'B', 'B', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', 'Basket', '100', 'Baik dalam shooting', '-', '-', '-', '-', '-', '-', 0, 0, 0),
('', 0, '', '', '', '', '', '', '', 'C', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', '', '', '', '', '', '', '', '', 0, 0, 0),
('MR', 1153, 'X / II (Dua)', '2019/2020', 'Akuntansi dan Keuangan', 'Akuntansi Keuangan dan Pajak', 'AK', '90', '79', 'B', 'C', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '55', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '-', '-', '-', '-', '-', '-', '-', '-', '-', 10, 0, 0),
('MR', 5811, 'XII / II (Satu)', '2019/2020', 'Administrasi dan Perkantoran', 'Administrasi dan Perkantoran', 'AP', '90', '90', 'B', 'B', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', 'Basket', '100', 'Baik dalam shooting', '-', '-', '-', '-', '-', '-', 0, 0, 0),
('', 0, '', '', '', '', '', '', '', 'C', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', '', '', '', '', '', '', '', '', 0, 0, 0),
('MR', 1153, 'X / II (Dua)', '2019/2020', 'Akuntansi dan Keuangan', 'Akuntansi Keuangan dan Pajak', 'AK', '90', '79', 'B', 'C', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '55', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '-', '-', '-', '-', '-', '-', '-', '-', '-', 10, 0, 0),
('MR', 5811, 'XII / II (Satu)', '2019/2020', 'Administrasi dan Perkantoran', 'Administrasi dan Perkantoran', 'AP', '90', '90', 'B', 'B', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', 'Basket', '100', 'Baik dalam shooting', '-', '-', '-', '-', '-', '-', 0, 0, 0),
('', 0, '', '', '', '', '', '', '', 'C', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', '', '', '', '', '', '', '', '', 0, 0, 0),
('MR', 1153, 'X / II (Dua)', '2019/2020', 'Akuntansi dan Keuangan', 'Akuntansi Keuangan dan Pajak', 'AK', '90', '79', 'B', 'C', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '55', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '-', '-', '-', '-', '-', '-', '-', '-', '-', 10, 0, 0),
('MR', 5811, 'XII / II (Satu)', '2019/2020', 'Administrasi dan Perkantoran', 'Administrasi dan Perkantoran', 'AP', '90', '90', 'B', 'B', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', 'Basket', '100', 'Baik dalam shooting', '-', '-', '-', '-', '-', '-', 0, 0, 0),
('', 0, '', '', '', '', '', '', '', 'C', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', '', '', '', '', '', '', '', '', 0, 0, 0),
('MR', 1153, 'X / II (Dua)', '2019/2020', 'Akuntansi dan Keuangan', 'Akuntansi Keuangan dan Pajak', 'AK', '90', '79', 'B', 'C', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '55', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '-', '-', '-', '-', '-', '-', '-', '-', '-', 10, 0, 0),
('MR', 5811, 'XII / II (Satu)', '2019/2020', 'Administrasi dan Perkantoran', 'Administrasi dan Perkantoran', 'AP', '90', '90', 'B', 'B', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', 'Basket', '100', 'Baik dalam shooting', '-', '-', '-', '-', '-', '-', 0, 0, 0),
('', 0, '', '', '', '', '', '', '', 'C', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', '', '', '', '', '', '', '', '', 0, 0, 0),
('MR', 1153, 'X / II (Dua)', '2019/2020', 'Akuntansi dan Keuangan', 'Akuntansi Keuangan dan Pajak', 'AK', '90', '79', 'B', 'C', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '55', 'C', '85', 'B', '85', 'B', '100', 'A', '85', 'B', '85', 'B', '85', 'B', '-', '-', '-', '-', '-', '-', '-', '-', '-', 10, 0, 0),
('MR', 5811, 'XII / II (Satu)', '2019/2020', 'Administrasi dan Perkantoran', 'Administrasi dan Perkantoran', 'AP', '90', '90', 'B', 'B', '80', 'C', '95', 'A', '100', 'A', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '90', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', 'Basket', '100', 'Baik dalam shooting', '-', '-', '-', '-', '-', '-', 0, 0, 0),
('', 0, '', '', '', '', '', '', '', 'C', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', '', '', '', '', '', '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mapel` varchar(500) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `mapel`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin'),
(3, 'miss yuli', 'yuli', 'yuli', 'Bahasa Inggrish', 'walikelas'),
(4, 'Prima', 'prima', 'xirpl', '-', 'xirpl');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `username`, `password`, `level`) VALUES
(1, 'Prima', 'xrpl', 'xrpl'),
(2, 'Margaretha', 'xakl', 'xakl'),
(3, 'Ernesta', 'xotkp', 'xotkp'),
(4, 'Yuli', 'xirpl', 'xirpl'),
(5, 'Ocin', 'xiakl', 'xiakl'),
(6, 'Anwar', 'xiotkp', 'xiotkp');

-- --------------------------------------------------------

--
-- Table structure for table `xakl`
--

CREATE TABLE `xakl` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tahun` varchar(30) NOT NULL,
  `nis` int(10) NOT NULL,
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
  `ipap` varchar(3) NOT NULL,
  `ipapp` varchar(5) NOT NULL,
  `ipak` varchar(3) NOT NULL,
  `ipakk` varchar(5) NOT NULL,
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
  `perbankanp` varchar(10) NOT NULL,
  `perbankanpp` varchar(10) NOT NULL,
  `perbankank` varchar(10) NOT NULL,
  `perbankankk` varchar(10) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `eskula` varchar(50) NOT NULL,
  `nilaieskula` varchar(10) NOT NULL,
  `deskripsia` text NOT NULL,
  `eskulb` varchar(500) NOT NULL,
  `nilaieskulb` varchar(10) NOT NULL,
  `deskripsib` varchar(500) NOT NULL,
  `eskulc` int(255) NOT NULL,
  `eskulab` int(255) NOT NULL,
  `nilaieskulc` varchar(10) NOT NULL,
  `deskripsic` varchar(500) NOT NULL,
  `thn` varchar(30) NOT NULL,
  `sakit` varchar(10) NOT NULL,
  `izin` varchar(10) NOT NULL,
  `alfa` varchar(10) NOT NULL,
  `ajaib` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xakl`
--

INSERT INTO `xakl` (`id`, `nama`, `tahun`, `nis`, `agamap`, `agamapp`, `agamak`, `agamakk`, `pknp`, `pknpp`, `pknk`, `pknkk`, `bindop`, `bindopp`, `bindok`, `bindokk`, `mtkp`, `mtkpp`, `mtkk`, `mtkkk`, `sjrp`, `sjrpp`, `sjrk`, `sjrkk`, `bingp`, `bingpp`, `bingk`, `bingkk`, `sbdp`, `sbdpp`, `sbdk`, `sbdkk`, `orp`, `orpp`, `ork`, `orkk`, `mandap`, `mandapp`, `mandak`, `mandakk`, `bhump`, `bhumpp`, `bhumk`, `bhumkk`, `simdigp`, `simdigpp`, `simdigk`, `simdigkk`, `fisikap`, `fisikapp`, `fisikak`, `fisikakk`, `kimiap`, `kimiapp`, `kimiak`, `kimiakk`, `ipap`, `ipapp`, `ipak`, `ipakk`, `sistekomp`, `sistekompp`, `sistekomk`, `sistekomkk`, `komjardasp`, `komjardaspp`, `komjardask`, `komjardaskk`, `pemrogramanp`, `pemrogramanpp`, `pemrogramank`, `pemrogramankk`, `desgrafp`, `desgrafpp`, `desgrafk`, `desgrafkk`, `perbankanp`, `perbankanpp`, `perbankank`, `perbankankk`, `semester`, `eskula`, `nilaieskula`, `deskripsia`, `eskulb`, `nilaieskulb`, `deskripsib`, `eskulc`, `eskulab`, `nilaieskulc`, `deskripsic`, `thn`, `sakit`, `izin`, `alfa`, `ajaib`) VALUES
(1, 'Vinolia', '2019/2020', 1153, '70', 'B', '90', 'B', '86', 'B', '87', 'B', '90', 'B', '89', 'B', '100', 'A', '98', 'A', '60', 'C', '78', 'C', '81', 'B', '80', 'B', '90', 'B', '98', 'A', '90', 'B', '90', 'B', '90', 'B', '90', 'B', '78', 'C', '78', 'C', '90', 'B', '90', 'B', '90', 'B', '90', 'B', '90', 'B', '89', 'B', '90', '', '90', '', '78', 'C', '78', 'C', '90', 'B', '89', 'B', '45', 'D', '58', 'D', '', '', '', '', '90', 'B', '86', 'B', '', 'gundam', '90', 'bisa merakit gudam dengan baik', 'nonton anime ', '90', 'suka nonton anime non stop pagi ke temu pagi', 0, 0, '90', 'gdgfgfgfhfjfkf', '', '1', '2', '3', 'michael'),
(2, 'MR', 'RPL', 1111, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '90', '9', '9', ''),
(3, 'test1', '2019/2020', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', ''),
(4, 'test1', '2019/2020', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `xiakl`
--

CREATE TABLE `xiakl` (
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

-- --------------------------------------------------------

--
-- Table structure for table `xiotkp`
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

-- --------------------------------------------------------

--
-- Table structure for table `xirpl`
--

CREATE TABLE `xirpl` (
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

-- --------------------------------------------------------

--
-- Table structure for table `xotkp`
--

CREATE TABLE `xotkp` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tahun` varchar(30) NOT NULL,
  `nis` int(10) NOT NULL,
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
-- Dumping data for table `xotkp`
--

INSERT INTO `xotkp` (`id`, `nama`, `tahun`, `nis`, `agamap`, `agamapp`, `agamak`, `agamakk`, `pknp`, `pknpp`, `pknk`, `pknkk`, `bindop`, `bindopp`, `bindok`, `bindokk`, `mtkp`, `mtkpp`, `mtkk`, `mtkkk`, `sjrp`, `sjrpp`, `sjrk`, `sjrkk`, `bingp`, `bingpp`, `bingk`, `bingkk`, `sbdp`, `sbdpp`, `sbdk`, `sbdkk`, `orp`, `orpp`, `ork`, `orkk`, `mandap`, `mandapp`, `mandak`, `mandakk`, `bhump`, `bhumpp`, `bhumk`, `bhumkk`, `simdigp`, `simdigpp`, `simdigk`, `simdigkk`, `fisikap`, `fisikapp`, `fisikak`, `fisikakk`, `kimiap`, `kimiapp`, `kimiak`, `kimiakk`, `sistekomp`, `sistekompp`, `sistekomk`, `sistekomkk`, `komjardasp`, `komjardaspp`, `komjardask`, `komjardaskk`, `pemrogramanp`, `pemrogramanpp`, `pemrogramank`, `pemrogramankk`, `desgrafp`, `desgrafpp`, `desgrafk`, `desgrafkk`, `semester`, `eskula`, `nilaieskula`, `deskripsia`, `eskulb`, `nilaieskulb`, `deskripsib`, `eskulc`, `nilaieskulc`, `deskripsic`, `thn`, `sakit`, `izin`, `alfa`, `ajaib`) VALUES
(1, 'Roger Gunawan', '2019/2020', 1153, '90', 'B', '90', 'B', '86', 'B', '87', 'B', '90', 'B', '87', 'B', '100', 'A', '98', 'A', '60', 'C', '78', 'C', '81', 'B', '80', 'B', '90', 'B', '98', 'A', '90', 'B', '90', 'B', '90', 'B', '90', 'B', '78', 'C', '78', 'C', '90', 'B', '90', 'B', '90', 'B', '90', 'B', '90', 'B', '89', 'B', '78', 'C', '78', 'C', '90', 'B', '89', 'B', '45', 'D', '58', 'D', '90', 'B', '90', 'B', '', 'gundam', '88', 'bisa merakit gudam dengan baik', 'nonton anime ', '67', 'suka nonton anime non stop pagi ke temu pagi', '-', '66', 'banyakin olahraga supaya tulangnya sehat', '', '8', '6', '5', 'michael'),
(4, 'test1', '2019/2020', 1999, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `xrpl`
--

CREATE TABLE `xrpl` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tahun` varchar(30) NOT NULL,
  `nis` varchar(10) NOT NULL,
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

INSERT INTO `xrpl` (`id`, `nama`, `tahun`, `nis`, `agamap`, `agamapp`, `agamak`, `agamakk`, `pknp`, `pknpp`, `pknk`, `pknkk`, `bindop`, `bindopp`, `bindok`, `bindokk`, `mtkp`, `mtkpp`, `mtkk`, `mtkkk`, `sjrp`, `sjrpp`, `sjrk`, `sjrkk`, `bingp`, `bingpp`, `bingk`, `bingkk`, `sbdp`, `sbdpp`, `sbdk`, `sbdkk`, `orp`, `orpp`, `ork`, `orkk`, `mandap`, `mandapp`, `mandak`, `mandakk`, `bhump`, `bhumpp`, `bhumk`, `bhumkk`, `simdigp`, `simdigpp`, `simdigk`, `simdigkk`, `fisikap`, `fisikapp`, `fisikak`, `fisikakk`, `kimiap`, `kimiapp`, `kimiak`, `kimiakk`, `sistekomp`, `sistekompp`, `sistekomk`, `sistekomkk`, `komjardasp`, `komjardaspp`, `komjardask`, `komjardaskk`, `pemrogramanp`, `pemrogramanpp`, `pemrogramank`, `pemrogramankk`, `desgrafp`, `desgrafpp`, `desgrafk`, `desgrafkk`, `semester`, `eskula`, `nilaieskula`, `deskripsia`, `eskulb`, `nilaieskulb`, `deskripsib`, `eskulc`, `nilaieskulc`, `deskripsic`, `thn`, `sakit`, `izin`, `alfa`, `ajaib`) VALUES
(10, 'AGNEgubww', '2019/2020', '23558', '86', '', '90', '', '50', '', '90', '', '90', '', '90', '', '90', '', '90', '', '90', '', '90', '', '1', '', '90', '', '1', '', '90', '', '1', '', '90', '', '1', '', '90', '', '1', '', '90', '', '1', '', '90', '', '1', '', '90', '', '1', '', '90', '', '1', '', '90', '', '1', '', '78', '', '1', '', '90', '', '1', '', '90', '', '', 'gundam', '90', 'bisa merakit gudam dengan baik', 'nonton anime ', '90', 'suka nonton anime non stop pagi ke temu pagi', '', '95', 'banyakin olahraga supaya tulangnya sehat', '', '1', '2', '3', 'michael'),
(188, 'TEST', '2019/2020', '1234', '90', 'A', '90', 'A', '100', 'A', '90', 'A', '90', 'A', '90', 'A', '90', 'A', '90', 'A', '90', 'A', '90', 'A', '1', 'A', '90', 'A', '1', 'A', '90', 'A', '1', 'A', '90', 'A', '1', 'A', '90', 'A', '1', 'A', '90', 'A', '1', 'A', '90', 'A', '1', 'A', '90', 'A', '1', 'A', '90', 'A', '1', 'A', '90', 'A', '1', 'A', '78', 'S', '1', 'A', '90', 'A', '1', 'A', '90', 'A', '', '', '', 'bisa merakit gudam dengan baik', '', '90', 'suka nonton anime non stop pagi ke temu pagi', '', '-', '-', '', '-4', '-4', '-4', ''),
(223, 'TEST', '2019/2020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(224, 'test1', '2019/2020', '1999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(258, 'test1', '2019/2020', '1999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(259, 'MOSES1', '', '1111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(260, 'MOSES2', '', '2222', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(261, 'MOSES3', '', '3333', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(293, 'test1', '2019/2020', '1999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(294, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(295, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(296, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(297, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(298, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(299, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(300, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(301, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(302, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(303, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(304, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(305, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(306, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(307, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(308, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(309, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(310, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(311, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(312, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(313, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(314, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(315, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(316, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(317, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(318, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(319, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(320, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(321, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(322, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(323, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(324, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(325, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(326, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(327, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1 ( Satu)', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xakl`
--
ALTER TABLE `xakl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xotkp`
--
ALTER TABLE `xotkp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xrpl`
--
ALTER TABLE `xrpl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `xakl`
--
ALTER TABLE `xakl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `xotkp`
--
ALTER TABLE `xotkp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `xrpl`
--
ALTER TABLE `xrpl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
