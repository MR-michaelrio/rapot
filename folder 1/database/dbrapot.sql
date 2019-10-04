-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2019 at 03:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

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
('Michael Rio Agustino Tan', 1234, 'X / I (Satu)', '2018/2019', 'Akuntansi dan Keuangan', 'Akuntansi Keuangan dan Pajak', 'AK', '', '', 'C', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '85', 'B', '', 'C', '85', 'B', '', 'C', '85', 'B', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', 'C', '', '', '', '', '', '', '', '', '', 0, 0, 0),
('Michael Rio Agustino Tan', 1234, 'X / I (Satu)', '', 'Akuntansi dan Keuangan', 'Akuntansi Keuangan dan Pajak', 'AK', '81', '90', 'C', 'B', '80', 'C', '95', 'A', '80', 'C', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '58', 'C', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '55', 'C', '85', 'B', '85', 'B', '85', 'B', '', 'C', '85', 'B', '85', 'B', '-', '-', '-', '-', '-', '-', '-', '', '-', 0, 0, 0),
('Alber', 1234, 'X / I (Satu)', '', 'Akuntansi dan Keuangan', 'Akuntansi Keuangan dan Pajak', 'AK', '81', '90', 'C', 'B', '80', 'C', '95', 'A', '80', 'C', '100', 'A', '80', 'C', '90', 'B', '100', 'A', '100', 'A', '58', 'C', '85', 'B', '85', 'B', '58', 'C', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '85', 'B', '55', 'C', '85', 'B', '85', 'B', '85', 'B', '', 'C', '85', 'B', '85', 'B', '-', '-', '-', '-', '-', '-', '-', '', '-', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'agus', 'agus', 'agus', 'guru_mapel'),
(3, 'yuli', 'yuli', 'yuli', 'walikelas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
