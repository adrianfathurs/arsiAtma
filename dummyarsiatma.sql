-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 03:08 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dummyarsiatma`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama_lengkap` varchar(64) NOT NULL,
  `no_telp` varchar(32) NOT NULL,
  `instasi` varchar(32) NOT NULL,
  `type_akun` char(2) NOT NULL,
  `status` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `biro`
--

CREATE TABLE `biro` (
  `id_biro` int(11) NOT NULL,
  `nama_biro` varchar(64) NOT NULL,
  `foto1_biro` text NOT NULL,
  `foto2_biro` text NOT NULL,
  `tugas_biro` text NOT NULL,
  `deskripsi_biro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favorite_fakultas`
--

CREATE TABLE `favorite_fakultas` (
  `id_favorite_fakultas` int(11) NOT NULL,
  `fk_akun` int(11) NOT NULL,
  `fk_informasi_fakultas` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favorite_hima`
--

CREATE TABLE `favorite_hima` (
  `id_favorite_hima` int(11) NOT NULL,
  `fk_akun` int(11) NOT NULL,
  `fk_informasi_hima` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favorite_pamiy`
--

CREATE TABLE `favorite_pamiy` (
  `id_favorite_pamiy` int(11) NOT NULL,
  `fk_akun` int(11) NOT NULL,
  `fk_informasi_pamiy` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favorite_portofolio`
--

CREATE TABLE `favorite_portofolio` (
  `id_favorite_portofolio` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `fk_portofolio` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favorite_umum`
--

CREATE TABLE `favorite_umum` (
  `id_favorite_umum` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `fk_informasi_umum` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favorite_univ`
--

CREATE TABLE `favorite_univ` (
  `id_favorite_univ` int(11) NOT NULL,
  `fk_akun` int(11) NOT NULL,
  `fk_informasi_univ` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `informasi_fakultas`
--

CREATE TABLE `informasi_fakultas` (
  `id_informasi_fakultas` int(11) NOT NULL,
  `judul_fakultas` varchar(256) NOT NULL,
  `nama_penulis` varchar(64) NOT NULL,
  `foto1_fakultas` text NOT NULL,
  `foto2_fakultas` text NOT NULL,
  `foto3_fakultas` text NOT NULL,
  `foto4_fakultas` text NOT NULL,
  `foto5_fakultas` text NOT NULL,
  `deskripsi_fakultas` text NOT NULL,
  `status` char(2) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `informasi_hima`
--

CREATE TABLE `informasi_hima` (
  `id_informasi_hima` int(11) NOT NULL,
  `judul_hima` varchar(256) NOT NULL,
  `nama_penulis` varchar(64) NOT NULL,
  `foto1_hima` text NOT NULL,
  `foto2_hima` text NOT NULL,
  `foto3_hima` text NOT NULL,
  `foto4_hima` text NOT NULL,
  `foto5_hima` text NOT NULL,
  `deskripsi_hima` text NOT NULL,
  `status` char(2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `informasi_pamiy`
--

CREATE TABLE `informasi_pamiy` (
  `id_informasi_pamiy` int(11) NOT NULL,
  `judul_pamiy` text NOT NULL,
  `nama_penulis` varchar(64) NOT NULL,
  `foto1_pamiy` text NOT NULL,
  `foto2_pamiy` text NOT NULL,
  `foto3_pamiy` text NOT NULL,
  `foto4_pamiy` text NOT NULL,
  `foto5_pamiy` text NOT NULL,
  `deskripsi_pamiy` text NOT NULL,
  `status` char(2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `informasi_umum`
--

CREATE TABLE `informasi_umum` (
  `id_informasi_umum` int(11) NOT NULL,
  `judul_umum` text NOT NULL,
  `nama_penulis` varchar(64) NOT NULL,
  `foto1_umum` text NOT NULL,
  `foto2_umum` text NOT NULL,
  `foto3_umum` text NOT NULL,
  `foto4_umum` text NOT NULL,
  `foto5_umum` text NOT NULL,
  `deskripsi_umum` text NOT NULL,
  `status` char(2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `informasi_univ`
--

CREATE TABLE `informasi_univ` (
  `id_informasi_univ` int(11) NOT NULL,
  `judul_univ` varchar(256) NOT NULL,
  `nama_penulis` varchar(64) NOT NULL,
  `foto1_univ` text NOT NULL,
  `foto2_univ` text NOT NULL,
  `foto3_univ` text NOT NULL,
  `foto4_univ` text NOT NULL,
  `foto5_univ` text NOT NULL,
  `deskripsi_univ` text NOT NULL,
  `status` char(2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instagram`
--

CREATE TABLE `instagram` (
  `id_instagram` int(11) NOT NULL,
  `link_instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ph`
--

CREATE TABLE `ph` (
  `id_ph` int(11) NOT NULL,
  `foto1_ph` text NOT NULL,
  `nama_lengkap` varchar(64) NOT NULL,
  `tugas_ph` text NOT NULL,
  `deskripsi_ph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `judul_portofolio` text NOT NULL,
  `nama_peraih` varchar(64) NOT NULL,
  `foto1_portofolio` text NOT NULL,
  `foto2_portofolio` text NOT NULL,
  `foto3_portofolio` text NOT NULL,
  `foto4_portofolio` text NOT NULL,
  `foto5_portofolio` text NOT NULL,
  `keterangan_portofolio` text NOT NULL,
  `status` char(2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `nama_lengkap` varchar(64) NOT NULL,
  `isi_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `biro`
--
ALTER TABLE `biro`
  ADD PRIMARY KEY (`id_biro`);

--
-- Indexes for table `favorite_fakultas`
--
ALTER TABLE `favorite_fakultas`
  ADD PRIMARY KEY (`id_favorite_fakultas`),
  ADD KEY `fk_informasi_fakultas` (`fk_informasi_fakultas`);

--
-- Indexes for table `favorite_hima`
--
ALTER TABLE `favorite_hima`
  ADD PRIMARY KEY (`id_favorite_hima`),
  ADD KEY `fk_informasi_hima` (`fk_informasi_hima`);

--
-- Indexes for table `favorite_pamiy`
--
ALTER TABLE `favorite_pamiy`
  ADD KEY `fk_informasi_pamiy` (`fk_informasi_pamiy`);

--
-- Indexes for table `favorite_portofolio`
--
ALTER TABLE `favorite_portofolio`
  ADD PRIMARY KEY (`id_favorite_portofolio`),
  ADD KEY `fk_portofolio` (`fk_portofolio`);

--
-- Indexes for table `favorite_umum`
--
ALTER TABLE `favorite_umum`
  ADD PRIMARY KEY (`id_favorite_umum`),
  ADD KEY `fk_informasi_umum` (`fk_informasi_umum`);

--
-- Indexes for table `favorite_univ`
--
ALTER TABLE `favorite_univ`
  ADD PRIMARY KEY (`id_favorite_univ`),
  ADD KEY `fk_informasi_univ` (`fk_informasi_univ`);

--
-- Indexes for table `informasi_fakultas`
--
ALTER TABLE `informasi_fakultas`
  ADD PRIMARY KEY (`id_informasi_fakultas`);

--
-- Indexes for table `informasi_hima`
--
ALTER TABLE `informasi_hima`
  ADD PRIMARY KEY (`id_informasi_hima`);

--
-- Indexes for table `informasi_pamiy`
--
ALTER TABLE `informasi_pamiy`
  ADD PRIMARY KEY (`id_informasi_pamiy`);

--
-- Indexes for table `informasi_umum`
--
ALTER TABLE `informasi_umum`
  ADD PRIMARY KEY (`id_informasi_umum`);

--
-- Indexes for table `informasi_univ`
--
ALTER TABLE `informasi_univ`
  ADD PRIMARY KEY (`id_informasi_univ`);

--
-- Indexes for table `instagram`
--
ALTER TABLE `instagram`
  ADD PRIMARY KEY (`id_instagram`);

--
-- Indexes for table `ph`
--
ALTER TABLE `ph`
  ADD PRIMARY KEY (`id_ph`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `biro`
--
ALTER TABLE `biro`
  MODIFY `id_biro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorite_fakultas`
--
ALTER TABLE `favorite_fakultas`
  MODIFY `id_favorite_fakultas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorite_hima`
--
ALTER TABLE `favorite_hima`
  MODIFY `id_favorite_hima` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorite_portofolio`
--
ALTER TABLE `favorite_portofolio`
  MODIFY `id_favorite_portofolio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorite_umum`
--
ALTER TABLE `favorite_umum`
  MODIFY `id_favorite_umum` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorite_univ`
--
ALTER TABLE `favorite_univ`
  MODIFY `id_favorite_univ` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi_fakultas`
--
ALTER TABLE `informasi_fakultas`
  MODIFY `id_informasi_fakultas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi_hima`
--
ALTER TABLE `informasi_hima`
  MODIFY `id_informasi_hima` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi_pamiy`
--
ALTER TABLE `informasi_pamiy`
  MODIFY `id_informasi_pamiy` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi_umum`
--
ALTER TABLE `informasi_umum`
  MODIFY `id_informasi_umum` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi_univ`
--
ALTER TABLE `informasi_univ`
  MODIFY `id_informasi_univ` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instagram`
--
ALTER TABLE `instagram`
  MODIFY `id_instagram` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ph`
--
ALTER TABLE `ph`
  MODIFY `id_ph` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorite_fakultas`
--
ALTER TABLE `favorite_fakultas`
  ADD CONSTRAINT `fk_informasi_fakultas` FOREIGN KEY (`fk_informasi_fakultas`) REFERENCES `informasi_fakultas` (`id_informasi_fakultas`);

--
-- Constraints for table `favorite_hima`
--
ALTER TABLE `favorite_hima`
  ADD CONSTRAINT `fk_informasi_hima` FOREIGN KEY (`fk_informasi_hima`) REFERENCES `informasi_hima` (`id_informasi_hima`);

--
-- Constraints for table `favorite_pamiy`
--
ALTER TABLE `favorite_pamiy`
  ADD CONSTRAINT `fk_informasi_pamiy` FOREIGN KEY (`fk_informasi_pamiy`) REFERENCES `informasi_pamiy` (`id_informasi_pamiy`);

--
-- Constraints for table `favorite_portofolio`
--
ALTER TABLE `favorite_portofolio`
  ADD CONSTRAINT `fk_portofolio` FOREIGN KEY (`fk_portofolio`) REFERENCES `portofolio` (`id_portofolio`);

--
-- Constraints for table `favorite_umum`
--
ALTER TABLE `favorite_umum`
  ADD CONSTRAINT `fk_informasi_umum` FOREIGN KEY (`fk_informasi_umum`) REFERENCES `informasi_umum` (`id_informasi_umum`);

--
-- Constraints for table `favorite_univ`
--
ALTER TABLE `favorite_univ`
  ADD CONSTRAINT `fk_informasi_univ` FOREIGN KEY (`fk_informasi_univ`) REFERENCES `informasi_univ` (`id_informasi_univ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
