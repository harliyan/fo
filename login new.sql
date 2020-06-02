-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2020 at 11:45 AM
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
-- Table structure for table `cluster`
--

CREATE TABLE `cluster` (
  `id` int(3) NOT NULL,
  `cluster` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cluster`
--

INSERT INTO `cluster` (`id`, `cluster`) VALUES
(2, 'Cluster NOC 2'),
(3, 'Cluster A'),
(4, 'Cluster NOC B'),
(8, 'd');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_kecamatan` varchar(255) NOT NULL,
  `opd` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `cluster` varchar(3) NOT NULL,
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
(2, '2019-11-24 17:00:00', '1', 'Kominfo', 'Jl Labuhan no 149 RT 01 RW 01 Degayu Jl Labuhan no 149 RT 01 RW 01 Degayu Jl Labuhan no 149 RT 01 RW 01 Degayu Jl Labuhan no 149 RT 01 RW 01 Degayu', '2', 'up', 'single', '1', '0', 'Tidak Layak', '192.168.254.166', 'muslim'),
(3, '2019-11-24 17:00:00', '2', 'Kecamatan Barat', 'Jl.kimangunsarkoro gg. Pesantren', '3', 'down', 'double', '1', '0', 'Tidak Layak', '192.168.254.144', 'muslim'),
(4, '2019-11-24 17:00:00', '3', 'DPMPTSP', 'Jl Labuhan no 138 RT 04 RW 07 Degayu', '4', 'up', 'single', '1', '1', 'Tidak Layak', '192.168.254.144', 'muslim'),
(5, '2019-11-24 17:00:00', '4', 'Kecamatan Selatan', 'Jl Joko Tingkir No 235 RT 1 RW 2 Degayu', '2', 'down', 'double', '1', '0', 'Tidak Layak', '192.168.254.144', 'muslim'),
(6, '2019-11-24 17:00:00', '4', 'Kecamatan Utara', 'Jl Joko Tingkir No 235 RT 1 RW 2 Degayu', '3', 'down', 'double', '1', '0', 'Tidak Layak', '192.168.254.144', 'muslim');

-- --------------------------------------------------------

--
-- Table structure for table `data2`
--

CREATE TABLE `data2` (
  `id` int(50) NOT NULL,
  `foto1` varchar(255) NOT NULL DEFAULT 'no.jpg',
  `foto2` varchar(255) NOT NULL DEFAULT 'no.jpg',
  `foto3` varchar(255) NOT NULL DEFAULT 'no.jpg',
  `foto4` varchar(255) NOT NULL DEFAULT 'no.jpg',
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data2`
--

INSERT INTO `data2` (`id`, `foto1`, `foto2`, `foto3`, `foto4`, `latitude`, `longitude`) VALUES
(2, '1.jpeg', '2.jpg', '3.jpg', '3.jpg', '-6.879666805267334', '109.698730468750000'),
(3, '2.jpg', 'pondok1.jpeg', 'pondok2.jpeg', 'no.jpg', '-6.881875991821289', '109.703903198242190'),
(4, '3.jpg', 'd7c164cbafd3bd251e543e03d14e947d.jpg', 'no.jpg', 'no.jpg', '-6.882349967956543', '109.698097229003900'),
(5, '3.jpg', 'IMG-20190424-WA0011.jpg', 'IMG-20190424-WA0013.jpg', 'no.jpg', '-6.879967212677002', '109.698661804199220'),
(6, '3.jpg', 'IMG-20190424-WA0011.jpg', 'IMG-20190424-WA0013.jpg', 'no.jpg', '-6.979967117309570', '109.798660278320310');

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
-- Table structure for table `jointing`
--

CREATE TABLE `jointing` (
  `id` int(4) NOT NULL,
  `jointing` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jointing`
--

INSERT INTO `jointing` (`id`, `jointing`) VALUES
(1, 'Dinas Kominfo'),
(2, 'Kecamatan Barat'),
(5, 'f'),
(6, 'ddd'),
(8, 'ddd'),
(9, 'hjhj'),
(10, 'd');

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
(10, 4, 'Tambah Data', 'data/tambah', 'fas fa-fw fa-plus', 1),
(11, 4, 'Data Inventaris', 'data', 'fas fa-database', 1),
(12, 4, 'Input Status Perangkat', 'data/inputstatus', 'fas fa-pencil-alt', 1),
(13, 6, 'Report All', 'report', 'fas fa-flag-checkered', 1),
(14, 4, 'Jointing', 'data/jointing', 'fas fa-pen-square', 1),
(15, 4, 'Cluster', 'data/cluster', 'fas fa-pencil-alt', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cluster`
--
ALTER TABLE `cluster`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `jointing`
--
ALTER TABLE `jointing`
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
-- AUTO_INCREMENT for table `cluster`
--
ALTER TABLE `cluster`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `data2`
--
ALTER TABLE `data2`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `desc`
--
ALTER TABLE `desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jointing`
--
ALTER TABLE `jointing`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status_perangkat`
--
ALTER TABLE `status_perangkat`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
