-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 11:32 AM
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
-- Database: `ymdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `follow_mapels`
--

CREATE TABLE `follow_mapels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gurus`
--

CREATE TABLE `gurus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gurus`
--

INSERT INTO `gurus` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ulfah Putri Bisba', 'ulfahpb@email.com', '$2y$10$LulWABgyynu09V1JGydSIen4kxJAyC.2ZdlpbqXtGWBszAQnUn2R6', NULL, '2019-05-27 08:12:48', '2019-05-27 08:12:48'),
(3, 'Gamas', 'gamas@email.com', '$2y$10$9mRlxr5MJe0.dmH5A00XM.7NTrmeV.e3jeaQ00qsAFtXUxlKP0YsC', NULL, '2019-06-13 02:15:01', '2019-06-13 02:15:01'),
(4, 'Putri', 'putri@email.com', '$2y$10$0JSZ8MvRk8nxPqtMfCj0kuWZzX8Ph0zqix7zs.TpLazj2o.a50Z9C', NULL, '2019-06-16 16:41:59', '2019-06-16 16:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `mapels`
--

CREATE TABLE `mapels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `durasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mapels`
--

INSERT INTO `mapels` (`id`, `judul_mapel`, `deskripsi_mapel`, `materi`, `durasi`, `created_at`, `updated_at`) VALUES
(1, 'Rekayasa Perangkat Lunak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis pulvinar enim. Nam rutrum facilisis urna ut pellentesque. Integer rutrum quis mi ac venenatis.', 'SDLC', '90 menit', NULL, NULL),
(2, 'Rekayasa Perangkat Lunak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis pulvinar enim. Nam rutrum facilisis urna ut pellentesque. Integer rutrum quis mi ac venenatis.', 'SDLC', '90 menit', NULL, NULL),
(3, 'Rekayasa Perangkat Lunak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis pulvinar enim. Nam rutrum facilisis urna ut pellentesque. Integer rutrum quis mi ac venenatis.', 'SDLC', '90 menit', NULL, NULL),
(4, 'Rekayasa Perangkat Lunak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis pulvinar enim. Nam rutrum facilisis urna ut pellentesque. Integer rutrum quis mi ac venenatis.', 'SDLC', '90 menit', NULL, NULL),
(5, 'Rekayasa Perangkat Lunak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis pulvinar enim. Nam rutrum facilisis urna ut pellentesque. Integer rutrum quis mi ac venenatis.', 'SDLC', '90 menit', NULL, NULL),
(6, 'Rekayasa Perangkat Lunak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis pulvinar enim. Nam rutrum facilisis urna ut pellentesque. Integer rutrum quis mi ac venenatis.', 'SDLC', '90 menit', NULL, NULL),
(7, 'Rekayasa Perangkat Lunak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis pulvinar enim. Nam rutrum facilisis urna ut pellentesque. Integer rutrum quis mi ac venenatis.', 'SDLC', '90 menit', NULL, NULL),
(8, 'Rekayasa Perangkat Lunak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis pulvinar enim. Nam rutrum facilisis urna ut pellentesque. Integer rutrum quis mi ac venenatis.', 'SDLC', '90 menit', NULL, NULL),
(9, 'Rekayasa Perangkat Lunak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis pulvinar enim. Nam rutrum facilisis urna ut pellentesque. Integer rutrum quis mi ac venenatis.', 'SDLC', '90 menit', NULL, NULL),
(10, 'Rekayasa Perangkat Lunak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis pulvinar enim. Nam rutrum facilisis urna ut pellentesque. Integer rutrum quis mi ac venenatis.', 'SDLC', '90 menit', NULL, NULL),
(11, 'Rekayasa Perangkat Lunak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis pulvinar enim. Nam rutrum facilisis urna ut pellentesque. Integer rutrum quis mi ac venenatis.', 'SDLC', '90 menit', NULL, NULL),
(12, 'Rekayasa Perangkat Lunak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis pulvinar enim. Nam rutrum facilisis urna ut pellentesque. Integer rutrum quis mi ac venenatis.', 'SDLC', '90 menit', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mapel_comments`
--

CREATE TABLE `mapel_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` int(10) UNSIGNED NOT NULL,
  `mapel_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_06_17_035244_create_mapels_table', 1),
(2, '2019_06_17_211437_create_follow_mapels_table', 2),
(3, '2019_06_18_035712_create_mapel_comments_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cyntia Rizki Nayobi', 'cyntianayobi@email.com', '$2y$10$DTTZdiWTSx3bMW/YqZ3G6.LWElRBEPuySCS5xAXgYtIVGS0it0E66', NULL, '2019-05-27 13:44:22', '2019-05-27 13:44:22'),
(2, 'Atharana Aliya', 'atharana@email.com', 'athaaliya9876', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `follow_mapels`
--
ALTER TABLE `follow_mapels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapels`
--
ALTER TABLE `mapels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel_comments`
--
ALTER TABLE `mapel_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `follow_mapels`
--
ALTER TABLE `follow_mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mapels`
--
ALTER TABLE `mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mapel_comments`
--
ALTER TABLE `mapel_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
