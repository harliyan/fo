-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2020 at 02:50 PM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.0.33-14+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(10) NOT NULL,
  `waktu` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `id_kecamatan` varchar(255) NOT NULL,
  `opd` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `cluster` varchar(20) NOT NULL,
  `kondisi` varchar(4) NOT NULL,
  `jenis_konverter` varchar(6) NOT NULL,
  `jointing1` varchar(100) NOT NULL DEFAULT 'No Jointing',
  `jointing2` varchar(100) NOT NULL DEFAULT 'No Jointing',
  `jointing3` varchar(100) NOT NULL DEFAULT 'No Jointing',
  `ip` varchar(15) NOT NULL,
  `surveyor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `waktu`, `id_kecamatan`, `opd`, `alamat`, `cluster`, `kondisi`, `jenis_konverter`, `jointing1`, `jointing2`, `jointing3`, `ip`, `surveyor`) VALUES
(2, '2020-04-28 10:54:23', '1', 'KOMINFO', 'Jl Labuhan no 149 RT 01 RW 01 Degayu Jl Labuhan no 149 RT 01 RW 01 Degayu', 'FO', 'up', 'single', '1', '0', 'Tidak Layak', '192.168.254.144', 'muslim'),
(3, '2020-04-28 10:34:16', '2', 'Kecamatan Barat', 'Jl.kimangunsarkoro gg. Pesantren', 'Sekolah', 'down', 'double', '1', '0', 'Tidak Layak', '192.168.254.144', 'muslim'),
(4, '2020-04-28 10:54:27', '3', 'DPMPTSP', 'Jl Labuhan no 138 RT 04 RW 07 Degayu', 'NOC', 'up', 'single', '1', '1', 'Tidak Layak', '192.168.254.144', 'muslim'),
(5, '2020-04-28 10:54:29', '4', 'Kecamatan Selatan', 'Jl Joko Tingkir No 235 RT 1 RW 2 Degayu', 'Fingerprint', 'down', 'double', '1', '0', 'Tidak Layak', '192.168.254.144', 'muslim'),
(6, '2020-04-28 10:54:29', '4', 'Kecamatan Utara', 'Jl Joko Tingkir No 235 RT 1 RW 2 Degayu', 'Fingerprint', 'down', 'double', '1', '0', 'Tidak Layak', '192.168.254.144', 'muslim');

-- --------------------------------------------------------

--
-- Table structure for table `data2`
--

CREATE TABLE `data2` (
  `id` int(50) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'no.jpg',
  `foto_printer` varchar(255) NOT NULL DEFAULT 'no.jpg',
  `foto_jaringan` varchar(255) NOT NULL DEFAULT 'no.jpg',
  `foto_sarpras` varchar(255) NOT NULL DEFAULT 'no.jpg',
  `latitude` float(10,6) NOT NULL,
  `longitude` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data2`
--

INSERT INTO `data2` (`id`, `foto`, `foto_printer`, `foto_jaringan`, `foto_sarpras`, `latitude`, `longitude`) VALUES
(2, '1.jpeg', 'rw1netdegayu2.jpeg', 'no.jpg', 'no.jpg', -6.879667, 109.698730),
(3, '2.jpg', 'pondok1.jpeg', 'pondok2.jpeg', 'no.jpg', -6.881876, 109.703903),
(4, '3.jpg', 'd7c164cbafd3bd251e543e03d14e947d.jpg', 'no.jpg', 'no.jpg', -6.882350, 109.698097),
(5, '3.jpg', 'IMG-20190424-WA0011.jpg', 'IMG-20190424-WA0013.jpg', 'no.jpg', -6.879967, 109.698662),
(6, '3.jpg', 'IMG-20190424-WA0011.jpg', 'IMG-20190424-WA0013.jpg', 'no.jpg', -6.979967, 109.798660);

-- --------------------------------------------------------

--
-- Table structure for table `desc`
--

CREATE TABLE `desc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desc`
--

INSERT INTO `desc` (`id`, `name`, `desc`) VALUES
(1, 'nama aplikasi', 'GIS Kabel FO Kota Pekalongan'),
(2, 'logo aplikasi', 'default.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(1) NOT NULL,
  `kecamatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(1, 'Kecamatan Utara'),
(2, 'Kecamatan Timur'),
(3, 'Kecamatan Selatan'),
(4, 'Kecamatan Barat');

-- --------------------------------------------------------

--
-- Table structure for table `status_perangkat`
--

CREATE TABLE `status_perangkat` (
  `id_status` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_perangkat`
--

INSERT INTO `status_perangkat` (`id_status`, `status`, `flag`) VALUES
(1, 'baik', 'success'),
(2, 'kurang baik', 'warning'),
(3, 'tidak baik', 'danger');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL DEFAULT 'default.jpeg',
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Harliyan Tri M', 'admin', 'default.jpeg', '$2y$10$3XNPvG/eGH8SX3vuUTFM1.zkGgUfEAbqEtLHcy923wT2Qjnq6K21K', 1, 1, 1571114764),
(4, 'doddy', 'user', 'default.jpeg', '$2y$10$vdlFTyY.9M9MK16tuVwIXe4hVXG8FgLrA.4PN2OBBB1OjVywYBOnO', 2, 1, 1571124645);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(11, 1, 3),
(12, 1, 4),
(13, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `icons` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `icons`) VALUES
(1, 'Admin', 'fas fa-fw fa-user'),
(2, 'User', 'fas fa-fw fa-users'),
(3, 'Menu', 'fas fa-fw fa-bars'),
(4, 'Data', 'fas fa-fw fa-home'),
(6, 'Report', 'fas fa-fw fa-flag');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(5, 'role');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-home', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 1, 'User List', 'admin/userlist', 'fas fa-user-cog', 1),
(10, 4, 'Data', 'data', 'fas fa-database', 1),
(11, 4, 'Input Status Perangkat', 'data/inputstatus', 'fas fa-pencil-alt', 1),
(12, 6, 'Report All', 'report', 'fas fa-flag-checkered', 1),
(13, 4, 'Input Data', 'data/inputdata', 'fas fa-pen-square', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data2`
--
ALTER TABLE `data2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desc`
--
ALTER TABLE `desc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `status_perangkat`
--
ALTER TABLE `status_perangkat`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `data2`
--
ALTER TABLE `data2`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `desc`
--
ALTER TABLE `desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status_perangkat`
--
ALTER TABLE `status_perangkat`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
