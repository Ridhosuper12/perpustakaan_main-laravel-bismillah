-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 04:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbperpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jurusan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('pria','wanita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `nim`, `no_hp`, `tgl_lahir`, `jurusan`, `jenis_kelamin`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'Riko', '1811002934', '1234567', '1999-11-21', 'PAI', 'pria', 2, '2022-10-27 14:23:49', '2023-02-20 15:18:43'),
(10, 'nova', '123456', '335235252', '2022-12-06', 'PAI', 'wanita', 2, '2022-12-10 08:02:40', '2023-02-20 15:39:26'),
(13, 'Hartati', '2011003169', '081314743431', '2004-01-19', 'HES', 'pria', 2, '2022-12-19 08:28:50', '2023-02-20 15:39:09'),
(14, 'Depi', '2011003194', '085211665720', '2003-06-22', 'HES', 'wanita', 2, '2022-12-22 03:51:51', '2023-02-20 15:13:13'),
(15, 'yoga saputra', '8020190008', '081237999', '1999-04-26', 'PAI', 'pria', 2, '2023-02-19 03:05:40', '2023-02-19 03:06:21'),
(16, 'Aditya Eka Dharmawan', '2011003129', '0812908828', '2000-11-08', 'PAI', 'wanita', 2, '2023-03-08 16:48:12', '2023-03-08 16:48:12'),
(17, 'Amellia Fitri', '2011003164', '098126943', '2001-07-12', 'PAI', 'wanita', 2, '2023-03-08 16:49:15', '2023-03-08 16:49:15'),
(18, 'Cici Syahriza', '2011003130', '081238987', '2001-09-08', 'PAI', 'wanita', 2, '2023-03-08 16:50:45', '2023-03-08 16:50:45'),
(19, 'Roni', '2011003137', '081314743431', '2001-06-17', 'PAI', 'pria', 2, '2023-03-08 16:54:19', '2023-03-08 16:54:19'),
(20, 'Yoga Iqbal', '2011003198', '09875432', '2001-12-31', 'PAI', 'pria', 2, '2023-03-08 16:55:34', '2023-03-08 16:55:34'),
(21, 'M.Tomi Alamsyah', '2011203200', '0812334559', '2008-02-02', 'PAI', 'pria', 2, '2023-03-08 16:56:50', '2023-03-08 16:56:50'),
(22, 'Sobirin', '2111003221', '09876542', '2001-04-07', 'PAI', 'pria', 8, '2023-03-08 16:59:12', '2023-03-08 16:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi` enum('rak1','rak2','rak3') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `isbn`, `penulis`, `penerbit`, `tahun_terbit`, `jumlah_buku`, `deskripsi`, `lokasi`, `gambar`, `created_at`, `updated_at`) VALUES
(7, 'Sosiologi Islam', '9794212733', 'Heri Gunawan, S.Pd.I., M.Ag', 'CV . PUSTAKA  SETIA  BANDUNG', 2019, 2, '', 'rak1', '', '2023-02-19 03:02:41', '2023-02-19 03:02:41'),
(9, 'Riset Pendidikan', '9786022294740', 'Jhon Creswell', 'PUSTAKA BELAJAR', 2015, 3, '', 'rak2', '', '2023-02-20 15:33:29', '2023-02-21 07:32:04'),
(10, 'PAI', '9789796926435', 'Mursid', 'Rosda', 2019, 5, '', 'rak3', '', '2023-02-20 15:36:23', '2023-03-09 08:06:37'),
(11, 'Studi Kasus', '9789797695200', 'Prof.Dr.Robert K.Yin.', 'PT RAJA GRAFINFO PERSADA DEPOK', 2019, 3, '', 'rak2', '', '2023-02-20 15:37:53', '2023-02-21 02:22:40'),
(13, 'Pengantar Ekonomi Syariah', '97876024251215', 'Dr.H.Abdul Ghofur, M.Ag', 'Raja Grafindo Persada', 2018, 0, '', 'rak1', '', '2023-03-08 16:00:37', '2023-03-09 08:05:07'),
(14, 'Konseling Individual', '9786026322043', 'Prof.Dr.Syamsu Yusuf LN, M.Pd', 'Reflika Aditama', 2016, 2, '', 'rak1', '', '2023-03-08 16:11:26', '2023-03-08 16:11:26'),
(15, 'a', '2', 'Heri Gunawan, S.Pd.I., M.Ag', 'rey', 2019, 2, '', 'rak3', '', '2023-03-08 16:43:58', '2023-03-08 16:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporans`
--

CREATE TABLE `laporans` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_11_07_145624_create_bukus_table', 1),
(5, '2021_11_07_232210_create_anggotas_table', 1),
(6, '2021_11_08_001403_add_nim_to_anggota_table', 1),
(7, '2021_11_08_041236_create_transaksis_table', 1),
(8, '2021_11_12_051341_create_laporans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` enum('pinjam','kembali','terlambat') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anggota_id` bigint(20) UNSIGNED NOT NULL,
  `buku_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `kode_transaksi`, `tgl_pinjam`, `tgl_kembali`, `status`, `ket`, `anggota_id`, `buku_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(22, 'pkrj9Qi1Q8', '2023-02-21', '2023-02-28', 'kembali', NULL, 14, 11, 1, '2023-02-21 02:21:51', '2023-02-21 02:22:40', NULL),
(23, 'BA8uJExZtW', '2023-02-21', '2023-02-28', 'kembali', NULL, 13, 9, 1, '2023-02-21 07:31:45', '2023-02-21 07:32:04', NULL),
(24, 'GslAlJMV61', '2023-09-03', '2023-10-03', 'pinjam', NULL, 14, 13, 1, '2023-03-09 08:05:07', '2023-03-09 08:05:07', NULL),
(25, 'HTvdjDKXef', '2023-09-03', '2023-10-03', 'pinjam', NULL, 17, 10, 1, '2023-03-09 08:06:37', '2023-03-09 08:06:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$Is/5Y2nL7Ni3OsushZEqy.yALXtJFgmgN.MNqZcbacVr1cIGleVZO', 'admin', NULL, NULL, NULL),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$Is/5Y2nL7Ni3OsushZEqy.yALXtJFgmgN.MNqZcbacVr1cIGleVZO', 'user', NULL, NULL, NULL),
(8, 'Depi', 'depi@gmail.com', NULL, '$2y$10$Is/5Y2nL7Ni3OsushZEqy.yALXtJFgmgN.MNqZcbacVr1cIGleVZO', 'user', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggota_user_id_foreign` (`user_id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_anggota_id_foreign` (`anggota_id`),
  ADD KEY `transaksi_buku_id_foreign` (`buku_id`),
  ADD KEY `transaksi_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_anggota_id_foreign` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_buku_id_foreign` FOREIGN KEY (`buku_id`) REFERENCES `buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
