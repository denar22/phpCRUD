-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2020 at 09:54 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfakultas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `dosen_id` int(11) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `pendidikan_terakhir` tinyint(4) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomer_hp` varchar(15) NOT NULL,
  `dosen_pa` enum('Y','N') NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`dosen_id`, `nama_dosen`, `pendidikan_terakhir`, `alamat`, `email`, `nomer_hp`, `dosen_pa`, `gambar`) VALUES
(26, 'Abdillah Bradja, S.Kom., M.Eng', 1, 'solo, jebres unsa', 'tomas@gmail.com', '081325120', 'Y', '22072019084930SILUET DENI.jpg'),
(27, 'Taufik, S.kom M.H', 1, 'jatipuro', 'taufik@gmail.com', '19183818', 'N', '20072019164345ZZZZZZZZZZZZZZZZZZZZZZZZZ.jpg'),
(31, 'Deni A', 3, 'sadasd', 'tomas@gmail.com', '311313113', 'Y', '19072019121152asasasasasasasasasasa.PNG'),
(32, 'very sb', 2, 'sasasaa', 'taufik@gmail.com', '00', 'N', 'spp1.PNG'),
(33, 'Deni A', 2, 'asasasa', 'taufik@gmail.com', '0000', 'Y', '22072019085036hitam putih crop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tahun_masuk` int(4) NOT NULL,
  `program_studi_id` int(11) NOT NULL,
  `dosen_pa` int(11) NOT NULL,
  `gambar_mhs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama_mhs`, `tempat_lahir`, `tanggal_lahir`, `tahun_masuk`, `program_studi_id`, `dosen_pa`, `gambar_mhs`) VALUES
(1201622010, 'deni ardiansyah', 'karanganyar', '2019-07-10', 2016, 10, 26, ''),
(1201622011, 'budi', 'jumapolo', '2019-07-18', 2018, 10, 27, ''),
(1201622013, 'zain', 'solo', '2018-08-14', 2016, 9, 26, ''),
(1201622017, 'iqbal', 'sragen', '2019-07-16', 2016, 8, 31, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_program_studi`
--

CREATE TABLE `tb_program_studi` (
  `program_studi_id` int(11) NOT NULL,
  `nama_progdi` varchar(30) NOT NULL,
  `jenjang_progdi` tinyint(4) NOT NULL,
  `nama_kepala_progdi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_program_studi`
--

INSERT INTO `tb_program_studi` (`program_studi_id`, `nama_progdi`, `jenjang_progdi`, `nama_kepala_progdi`) VALUES
(8, 'Teknik Informatika', 2, 'abdillah S.kom'),
(9, 'hukum', 1, 'tri irianto.S.kom'),
(10, 'manajemen', 3, 'jani.sh'),
(11, 'mesin', 1, 'ahmad');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `nama`, `password`, `level`) VALUES
('admin', 'admin', 'admin', 'admin'),
('sasa', 'user', 'asasasas', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`dosen_id`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `program_studi_id` (`program_studi_id`,`dosen_pa`),
  ADD KEY `doesn_pa` (`dosen_pa`);

--
-- Indexes for table `tb_program_studi`
--
ALTER TABLE `tb_program_studi`
  ADD PRIMARY KEY (`program_studi_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `dosen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_program_studi`
--
ALTER TABLE `tb_program_studi`
  MODIFY `program_studi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD CONSTRAINT `tb_mahasiswa_ibfk_1` FOREIGN KEY (`dosen_pa`) REFERENCES `tb_dosen` (`dosen_id`),
  ADD CONSTRAINT `tb_mahasiswa_ibfk_2` FOREIGN KEY (`program_studi_id`) REFERENCES `tb_program_studi` (`program_studi_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
