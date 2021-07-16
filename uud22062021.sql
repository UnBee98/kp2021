-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 03:21 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uud`
--

-- --------------------------------------------------------

--
-- Table structure for table `dana`
--

CREATE TABLE `dana` (
  `id` int(20) NOT NULL,
  `loans` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Nonactiv') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dana`
--

INSERT INTO `dana` (`id`, `loans`, `status`) VALUES
(1, '200000', 'Nonactiv'),
(2, '300000', 'Active'),
(3, '400000', 'Active'),
(6, '500000', 'Active'),
(11, '600000', 'Nonactiv'),
(13, '800000', 'Nonactiv'),
(14, '900000', 'Nonactiv'),
(15, '1000000', 'Nonactiv'),
(21, '100000', 'Active'),
(23, '1500000', 'Nonactiv'),
(24, '2500000', 'Nonactiv');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(5) NOT NULL,
  `kode_nilai` varchar(50) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_user2` int(5) NOT NULL,
  `tanggal` text NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `bobot1` varchar(50) NOT NULL,
  `bobot2` varchar(50) NOT NULL,
  `bobot3` varchar(50) NOT NULL,
  `bobot4` varchar(50) NOT NULL,
  `bobot5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `kode_nilai`, `id_user`, `id_user2`, `tanggal`, `posisi`, `bobot1`, `bobot2`, `bobot3`, `bobot4`, `bobot5`) VALUES
(3, 'NILAI001', 17, 16, '2021-05-19', 'Depan', '78', '90', '45', '62', '70'),
(4, 'NILAI002', 18, 16, '2021-05-19', 'Depan', '78', '50', '50', '80', '71'),
(5, 'NILAI003', 21, 20, '2021-05-19', 'Bek', '40', '40', '40', '40', '40');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjaman` int(20) UNSIGNED NOT NULL,
  `no_trx` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_t` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_pinjaman` int(20) NOT NULL,
  `keterangan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_bukti` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'media/avatars/avatar15.jpg',
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `tanggal_create` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_update` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_dibayar` timestamp NULL DEFAULT NULL,
  `id_user` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjaman`, `no_trx`, `no_t`, `jml_pinjaman`, `keterangan`, `photo_bukti`, `status`, `tanggal_create`, `tanggal_update`, `tanggal_dibayar`, `id_user`) VALUES
(66, 'DT/020621/001', '001', 400000, 'butuh', 'photo_bukti/410795ww.png', 'Selesai', '2021-06-02', ' 2021-06-02 23:40:51', '2021-06-02 16:44:38', 17),
(67, 'DT/070621/002', '002', 500000, 'banyak utang', 'photo_bukti/514302Screenshot_1.png', 'Selesai', '2021-06-07', ' 2021-06-07 20:49:34', '2021-06-07 13:52:15', 21);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `foto_user` text NOT NULL,
  `hak_akses` enum('admin','manager','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `foto_user`, `hak_akses`) VALUES
(15, 'admin', 'admin', 'Dwiki FIrmansyah', 'foto_user/701484Dwiki.JPG', 'admin'),
(16, 'judi', 'judi', 'judika 01', 'foto_user/663303a_robiansyah.JPG', 'manager'),
(17, 'elang', 'elang', 'elangga 01', 'foto_user/304291ari_aldaningrum.JPG', 'user'),
(18, 'maung', 'maung', 'maung sembilan belas', 'foto_user/564345Hikma_(1).JPG', 'user'),
(19, 'komisaris', 'komisaris', 'komisaris', 'foto_user/522192ww.png', 'admin'),
(20, 'gogon', 'gogon', 'gogon syaputra', 'foto_user/298976ww.png', 'manager'),
(21, 'jojo', 'jojo', 'jojo firmansyah', 'foto_user/685510download_(1).jpg', 'user'),
(23, 'mandor', 'mandor', 'mandor 8 asd', 'foto_user/728790ww.png', 'user'),
(25, 'mandora', 'mandora', 'mandora', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dana`
--
ALTER TABLE `dana`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `availables_loans_available_unique` (`loans`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user2` (`id_user2`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dana`
--
ALTER TABLE `dana`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_pinjaman` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_user2` FOREIGN KEY (`id_user2`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
