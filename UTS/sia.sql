-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 11:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sia`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(5) NOT NULL,
  `namagur` varchar(10) DEFAULT NULL,
  `alamatgur` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `namagur`, `alamatgur`) VALUES
('1234', 'Udin', 'Jl. Gajah 9'),
('2345', 'Unyil', 'Jl. Peyek 4');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` varchar(10) NOT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `nama_mapel` varchar(20) DEFAULT NULL,
  `nip` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `kelas`, `nama_mapel`, `nip`) VALUES
('DB.1', 'melati', 'Database', '2345'),
('WL.1', 'mawar', 'Web Advanced', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `nis` varchar(5) DEFAULT NULL,
  `id_mapel` varchar(5) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`nis`, `id_mapel`, `nilai`) VALUES
('11.34', 'WL.1', 90),
('10.45', 'DB.1', 70);

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `NIM` varchar(30) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `prodi` varchar(225) NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `username` varchar(45) NOT NULL,
  `pword` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`NIM`, `nama`, `alamat`, `prodi`, `dob`, `sex`, `username`, `pword`) VALUES
('J0077272', 'Jaminan Surga', 'Solo', 'Teknik Industri', '2003-01-21', 'Male', 'surgaituada', 'surgaituada'),
('L10065463', 'Nama Saya Budi', 'Jogjakarta', 'Teknik Kimia', '1993-05-02', 'Perempuan', 'budidododo', 'budidododo'),
('L200162524', 'Sule Prikitiew', 'Rembang', 'Komunikasi', '2021-11-15', 'Lanang', 'helloworld', 'helloworld'),
('L200183161', 'Donny Rizal Adhi Pratama', 'Rembang', 'Informatika', '2008-10-22', 'lanang', 'donn', 'donn'),
('U00032844', 'Kamu Siapa', 'Address itu apa', 'Informasi', '1997-01-15', 'Perempuan', '727272', '727272');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(10) NOT NULL,
  `namasis` varchar(20) NOT NULL,
  `alamatsis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `namasis`, `alamatsis`) VALUES
('10.45', 'Budi', 'Jl. Cepat 7'),
('11.34', 'Ari', 'Jl. Santai 5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD KEY `nis` (`nis`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mapel`
--
ALTER TABLE `mapel`
  ADD CONSTRAINT `mapel_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
