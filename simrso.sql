-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 09:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simrso`
--

-- --------------------------------------------------------

--
-- Table structure for table `datarso`
--

CREATE TABLE `datarso` (
  `id` int(11) NOT NULL,
  `nama_of_rso` varchar(200) DEFAULT NULL,
  `no_of_degree` varchar(50) DEFAULT NULL,
  `Issued` varchar(10) DEFAULT NULL,
  `valid` varchar(10) DEFAULT NULL,
  `comment` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datarso`
--

INSERT INTO `datarso` (`id`, `nama_of_rso`, `no_of_degree`, `Issued`, `valid`, `comment`) VALUES
(1, 'PT. Nawakara Perkasa Nusantara', 'KL. 002/1/3/DJPL-16', '18/03/2016', '17/03/2018', 'Ship and Port\r'),
(2, 'PT. Jakarta International Maritime Consultan', 'KL.002/1/6/DJPL-16', '30/05/2016', '29/05/2018', 'Port\r'),
(3, 'PT. Yapanindo Konsultan', 'KL.002/1/8/DJPL-14', '26/05/2014', '25/05/2016', 'Ship and Port\r'),
(4, 'PT. Insurindo Inter Services', 'KL.002/2/2/DJPL-14', '30/12/2014', '29/12/2016', 'Ship and Port\r'),
(5, 'PT. Edhery Lautan Berkah', 'KL.002/1/10/DJPL-14', '17/07/2014', '16/07/2016', 'Ship and Port\r'),
(6, 'PT. Carsurin', 'KL.002/1/2/DJPL-16', '18/03/2016', '17/03/2018', 'Ship and Port\r'),
(7, 'PT. Ditra Adhika Perkasa', 'KL.002/1/10/DJPL-15', '30/06/2015', '29/06/2017', 'Ship and Port\r'),
(8, 'PT. Tomo & Son', 'KL. 002/1/20/DJPL-15', '03/10/2015', '02/10/2017', 'Ship and Port\r'),
(9, 'PT. Dantarsa Gatra', 'KL.002/1/11/DJPL-15', '27/07/2015', '26/07/2017', 'Ship and Port\r'),
(10, 'PT. Gema Abdi Nusantara', 'KL.002/1/8/DJPL-15', '21/04/2015', '21/04/2017', 'Ship and Port\r'),
(11, 'PT. Surveyor Indonesia', 'KL.002/1/7/DJPL-15', '21/04/2015', '20/04/2017', 'Ship and Port\r'),
(12, 'PT. Gardatama Nusantara', 'KL.002/1/9/DJPL-15', '27/04/2015', '26/04/2017', 'Ship and Port\r'),
(13, 'PT. Amarta Indonesia Makmur', 'KL. 002/2/1/DJPL-14', '15/12/2014', '14/12/2016', 'Ship and Port\r'),
(14, 'PT. Pertamina Trans Kontinental', 'KL.002/1/19/DJPL-14', '13/08/2014', '12/08/2016', 'Ship and Port\r'),
(15, 'PT. Biro Klasifikasi Indonesia', 'KL. 002/1/18/DJPL-14', '10/10/2014', '09/10/2016', 'Ship\r'),
(16, 'PT. Biro Klasifikasi Indonesia', 'KL.002/1/17/DJPL-14', '10/10/2014', '09/10/2016', 'Port\r'),
(17, 'PT. Don & Profesional', 'KL.002/1/16/DJPL-14', '10/10/2014', '09/10/2016', 'Ship and Port\r'),
(18, 'PT. New Horison Informatika Nusantara', 'KL.002/1/7/DJPL-14', '26/05/2014', '25/05/2016', 'Ship and Port\r'),
(19, 'PT. Sucofindo', 'KL.002/1/13/DJPL-15', '07/09/2015', '06/09/2016', 'Port\r'),
(20, 'PT. Bina Sena Bahari Sentosa', 'KL.002/1/9/DJPL-14', '28/05/2014', '27/05/2016', 'Ship and Port\r'),
(21, 'PT. Jaya Harapan Terminalindo', 'KL.002/2/1/DJPL-15', '03/11/2015', '02/11/2017', 'Ship and Port\r'),
(22, 'PT. Tridaya Buana Konsultan', 'KL.002/1/4/DJPL-16', '05/04/2016', '04/04/2018', 'Ship and Port');

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
(5, '2021_10_08_152740_simrso', 1);

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
(1, 'Fransisco', 'admin@gmail.com', NULL, '$2y$10$hhSqldGT5HNR7p4UAWBO3OQkd7sv4qgL1TX31GCpGG6ZicQhTNwKy', NULL, '2021-10-08 08:32:47', '2021-10-08 08:32:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datarso`
--
ALTER TABLE `datarso`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
