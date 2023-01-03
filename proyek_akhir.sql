-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 03:59 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggotas`
--

INSERT INTO `anggotas` (`id`, `kode_anggota`, `nama_anggota`, `no_tlp`, `alamat`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'AT001', 'Biru', '089765456123', 'jl', 'pelajar', NULL, '2023-01-02 22:11:21', '2023-01-02 22:11:21'),
(2, 'AT001', 'Awan', '08990890876', 'jl soekarno hatta', 'Pelajar', '2023-01-03 03:02:01', '2023-01-03 03:02:01', NULL),
(3, 'AT002', 'Tirta', '089765432122', 'Jl. MT Haryono', 'Mahasiswa', '2023-01-03 05:55:35', '2023-01-03 05:55:35', NULL),
(4, 'AT003', 'puspita', '089908908765', 'jl soekarno hatta', 'Mahasiswa', '2023-01-03 06:59:03', '2023-01-03 06:59:03', NULL),
(5, 'AT004', 'Tirta 12', '089908098678', 'jl soekarno hatta', 'Mahasiswa', '2023-01-03 07:15:31', '2023-01-03 07:15:51', '2023-01-03 07:15:51'),
(6, 'AT003', 'Tirta s', '089908789099', 'jl soekarno hatta', 'Mahasiswa', '2023-01-03 07:33:04', '2023-01-03 07:33:15', '2023-01-03 07:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengarang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `kode_buku`, `nama_buku`, `kategori`, `pengarang`, `penerbit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'BK001', 'Kata', 'Fiksi', 'Rintik Sedu', 'Erlangga', '2023-01-02 22:17:56', '2023-01-02 22:17:56', NULL),
(2, 'BK002', 'Sukses Toefl', 'Non Fiksi', 'Amanda', 'Gramedia', '2023-01-03 05:51:37', '2023-01-03 06:57:49', NULL),
(3, 'BK003', 'Framework Laravel', 'Non Fiksi', 'Fajar', 'Erlangga', '2023-01-03 05:53:19', '2023-01-03 05:53:19', NULL),
(4, 'BK004', 'Sukses Toefl 2', 'Non Fiksi', 'Mawar', 'Gramedia', '2023-01-03 06:57:30', '2023-01-03 06:57:57', '2023-01-03 06:57:57'),
(5, 'BK004', 'Framework Laravel', 'Non Fiksi', 'Amanda', 'Gramedia', '2023-01-03 07:13:56', '2023-01-03 07:14:19', '2023-01-03 07:14:19'),
(6, 'BK004', 'Sukses Toefl', 'Non Fiksi', 'Amanda', 'Gramedia', '2023-01-03 07:31:47', '2023-01-03 07:32:07', '2023-01-03 07:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_03_041121_create_bukus_table', 2),
(6, '2023_01_03_041408_create_petugas_table', 3),
(7, '2023_01_03_041848_create_anggotas_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sari@gmail.com', '$2y$10$xl5.pqk5LDq5XmHneeOo7OJ7di6.zLM82x5Ln5E40H9.7zYZLdqHe', '2023-01-02 22:18:37'),
('irapuspitasari1406@gmail.com', '$2y$10$fFnGTnNjbq8hzsAZ8sBVjOkw3meexTqNAhed9wh7sd56j9jkDFTvq', '2023-01-02 22:44:57'),
('proyek@gmail.com', '$2y$10$MjdkwmCX/GP.bIj7w9eLuOKbfEPc/tjd0WRhXWSEO8tz3osRNvQUm', '2023-01-03 06:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `kode_petugas`, `nama_petugas`, `shift`, `jabatan`, `alamat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PT001', 'Langit Biru', 'Pagi', 'Petugas', 'Jl. Soekarno Hatta', '2023-01-02 21:43:20', '2023-01-03 06:58:36', '2023-01-03 06:58:36'),
(2, 'PT002', 'Bintang', 'Sore', 'Staff Kontrak', 'Jl. Semarang Kota', '2023-01-03 05:54:46', '2023-01-03 05:54:46', NULL),
(3, 'PT003', 'alam', 'Pagi', 'Petugas Tetap', 'jl soekarno hatta', '2023-01-03 06:58:18', '2023-01-03 06:58:18', NULL),
(4, 'PT004', 'Pelangi', 'Sore', 'Petugas Tetap', 'jl soekarno hatta', '2023-01-03 07:14:40', '2023-01-03 07:15:00', '2023-01-03 07:15:00'),
(5, 'PT003', 'ira p', 'Pagi', 'Petugas Tetap', 'jl soekarno hatta', '2023-01-03 07:32:25', '2023-01-03 07:32:36', '2023-01-03 07:32:36');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sari', 'sari@gmail.com', NULL, '$2y$10$doiKsNOmeWYdgrMixlJgA.aYdKrks/lt9iRUlCsox9VWA225/E/x6', NULL, '2023-01-02 21:08:12', '2023-01-02 21:08:12'),
(2, 'Ira', 'irapuspitasari1406@gmail.com', NULL, '$2y$10$XR7n3DejFH9T.KIG9dJvvufvQ0/FF09kr2jr1Wqgeh3s09md4/rD.', NULL, '2023-01-02 22:44:27', '2023-01-02 22:44:27'),
(3, 'Ira Puspita Sari', 'user@gmail.com', NULL, '$2y$10$OcTcNe1hp6lqfHRxprjIne58g3/c1Mkx8MTInKVKPOqn.eMaZW1M2', NULL, '2023-01-03 04:58:21', '2023-01-03 04:58:21'),
(4, 'user123', 'usm.ac.id@gmail.com', NULL, '$2y$10$K/o4dMT76wdI01QajMxpWexS6zgNLQ/gVvLwf1qwXNDqOsxqTcpQ6', NULL, '2023-01-03 06:20:24', '2023-01-03 06:20:24'),
(6, 'proyek_akhir', 'proyek@gmail.com', NULL, '$2y$10$8GkdlrbzL2jV4VARRCjrtubgCv3WIUYWofaRR96By4lcqLTAlKxU2', NULL, '2023-01-03 07:13:25', '2023-01-03 07:13:25'),
(7, 'Proyek Akhir', 'proyekakhir@gmail.com', NULL, '$2y$10$Qq0Y/sJlDPH4KwoTuWhgI.HOULlq5ikbGaHy4bzqioPI/taWrDc6y', NULL, '2023-01-03 07:31:25', '2023-01-03 07:31:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
