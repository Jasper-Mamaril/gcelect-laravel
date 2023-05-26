-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 10:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gcelect`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_fname` varchar(255) DEFAULT NULL,
  `candidate_lname` varchar(255) DEFAULT NULL,
  `position_id` bigint(20) UNSIGNED NOT NULL,
  `partylist_id` bigint(20) UNSIGNED NOT NULL,
  `candidate_program` varchar(255) DEFAULT NULL,
  `candidate_yrlevel` varchar(255) DEFAULT NULL,
  `candidate_picture` longtext DEFAULT NULL,
  `candidate_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `candidate_platform` varchar(255) DEFAULT NULL,
  `candidate_achievement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `candidate_fname`, `candidate_lname`, `position_id`, `partylist_id`, `candidate_program`, `candidate_yrlevel`, `candidate_picture`, `candidate_verified_at`, `created_at`, `updated_at`, `candidate_platform`, `candidate_achievement`) VALUES
(1, 'Lou', 'Ballesteros', 1, 1, 'BSIT', 'Third-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(2, 'Kim', 'Padua', 1, 2, 'BSIT', 'Third-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(3, 'Anthony', 'Mizal', 2, 1, 'BSIT', 'Third-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(4, 'Nathaniel', 'Ribada', 2, 2, 'BSIT', 'Third-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(5, 'Jazmine', 'Isip', 3, 1, 'BSIT', 'Third-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(6, 'Jmie', 'Bolate', 3, 2, 'BSIT', 'Third-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(7, 'Raven', 'Cruz', 4, 1, 'BSIT', 'Third-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(8, 'Jasper', 'Mamaril', 4, 2, 'BSIT', 'Third-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(9, 'Daniel', 'Duran', 5, 1, 'BSIT', 'Third-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(10, 'Josh', 'paclibar', 5, 2, 'BSCS', 'Second-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(11, 'Lucky', 'Versoza', 6, 1, 'BSEMC', 'Third-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(12, 'Haidee', 'Hidocos', 6, 2, 'BSCS', 'Fourth-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(13, 'Eric', 'Mandrique', 7, 1, 'BSIT', 'Second-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(14, 'Karl', 'Lacap', 7, 2, 'BSIT', 'First-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(15, 'Tanya', 'Gonzaga', 8, 1, 'BSIT', 'First-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(16, 'Gwyneth', 'Gonzales', 8, 2, 'BSIT', 'First-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(17, 'Justin', 'Reyes', 9, 1, 'BSIT', 'Fourth-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(18, 'Fatrizha', 'Boongaling', 9, 2, 'BSIT', 'Fourth-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(19, 'Everly', 'Bayog', 10, 1, 'BSCS', 'Fourth-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(20, 'Henrico', 'Roque', 10, 2, 'BSCS', 'Third-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(21, 'Neil', 'Figueroa', 11, 1, 'BSEMC', 'Third-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(22, 'Senny', 'Fuertes', 11, 2, 'BSEMC', 'Third-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(23, 'Arron', 'Mangali', 12, 1, 'ACT', 'Second-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement'),
(24, 'Denise', 'Punzalan', 12, 2, 'ACT', 'Fourth-year', 'Unavailable', NULL, NULL, NULL, 'Example platform', 'Example achievement');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_04_01_095826_create_users_table', 1),
(4, '2023_04_01_100016_create_partylists_table', 1),
(5, '2023_04_01_100017_create_positions_table', 1),
(6, '2023_04_01_100053_create_candidates_table', 1),
(7, '2023_04_01_100208_create_votes_table', 1),
(8, '2023_05_20_023157_add_new_fields_to_candidates', 1),
(9, '2023_05_20_023419_add_roles_field_to_users', 1),
(10, '2023_05_20_073007_add_status_to_partylists_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partylists`
--

CREATE TABLE `partylists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partylist_name` varchar(255) NOT NULL DEFAULT 'Independent',
  `partylist_logo` longtext NOT NULL DEFAULT 'None',
  `partylist_verfied_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'verification'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partylists`
--

INSERT INTO `partylists` (`id`, `partylist_name`, `partylist_logo`, `partylist_verfied_at`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Kapuso', 'None', NULL, '2023-05-24 20:12:54', NULL, 'approved'),
(2, 'Kapamilya', 'None', NULL, '2023-05-24 20:12:54', NULL, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position_name` varchar(255) NOT NULL,
  `position_verfied_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `position_name`, `position_verfied_at`, `created_at`, `updated_at`) VALUES
(1, 'President', NULL, NULL, NULL),
(2, 'Vice-President Internal Affairs', NULL, NULL, NULL),
(3, 'Vice-President External Affairs', NULL, NULL, NULL),
(4, 'Secretary', NULL, NULL, NULL),
(5, 'Treasurer', NULL, NULL, NULL),
(6, 'Auditor', NULL, NULL, NULL),
(7, 'Public Information Officer', NULL, NULL, NULL),
(8, 'Business Manager', NULL, NULL, NULL),
(9, 'BSIT Representative', NULL, NULL, NULL),
(10, 'BSCS Representative', NULL, NULL, NULL),
(11, 'BSEMC Representative', NULL, NULL, NULL),
(12, 'ACT Representative', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_roles` varchar(255) NOT NULL DEFAULT 'user',
  `user_status` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_fname`, `user_lname`, `email`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `user_roles`, `user_status`) VALUES
(1, 'GCELECT', 'Admin', 'admin.gcelect@gordoncollege.edu.ph', '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a', NULL, NULL, NULL, NULL, 'admin', 'no'),
(2, 'Lou', 'Ballesteros', 'lb@gordoncollege.edu.ph', '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a', NULL, NULL, NULL, '2023-05-26 11:57:08', 'user', 'yes'),
(3, 'Kim', 'Padua', 'kp@gordoncollege.edu.ph', '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a', NULL, NULL, NULL, '2023-05-26 11:57:44', 'user', 'yes'),
(4, 'Anthony', 'Mizal', 'am@gordoncollege.edu.ph', '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a', NULL, NULL, NULL, NULL, 'user', 'no'),
(5, 'Jasper', 'Mamaril', 'jm@gordoncollege.edu.ph', '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a', NULL, NULL, NULL, '2023-05-26 11:56:04', 'user', 'yes'),
(6, 'Nathaniel', 'Ribada', 'nr@gordoncollege.edu.ph', '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a', NULL, NULL, NULL, NULL, 'user', 'no'),
(7, 'Jmie', 'Bolate', 'jb@gordoncollege.edu.ph', '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a', NULL, NULL, NULL, '2023-05-26 11:56:35', 'user', 'yes'),
(8, 'Lovelyn', 'Perez', 'lp@gordoncollege.edu.ph', '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a', NULL, NULL, NULL, NULL, 'user', 'no'),
(9, 'Raven', 'Cruz', 'rc@gordoncollege.edu.ph', '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a', NULL, NULL, NULL, NULL, 'user', 'no'),
(10, 'Kapuso', 'Partylist', 'kapuso@gordoncollege.edu.ph', '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a', NULL, NULL, NULL, NULL, 'partylist', 'yes'),
(11, 'Kapamilya', 'Partylist', 'kapamilya@gordoncollege.edu.ph', '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a', NULL, NULL, NULL, NULL, 'partylist', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `vote_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `candidate_id`, `user_id`, `vote_verified_at`, `created_at`, `updated_at`) VALUES
(1, 1, 5, NULL, '2023-05-26 11:56:04', '2023-05-26 11:56:04'),
(2, 4, 5, NULL, '2023-05-26 11:56:04', '2023-05-26 11:56:04'),
(3, 5, 5, NULL, '2023-05-26 11:56:04', '2023-05-26 11:56:04'),
(4, 8, 5, NULL, '2023-05-26 11:56:04', '2023-05-26 11:56:04'),
(5, 9, 5, NULL, '2023-05-26 11:56:04', '2023-05-26 11:56:04'),
(6, 12, 5, NULL, '2023-05-26 11:56:04', '2023-05-26 11:56:04'),
(7, 13, 5, NULL, '2023-05-26 11:56:04', '2023-05-26 11:56:04'),
(8, 15, 5, NULL, '2023-05-26 11:56:04', '2023-05-26 11:56:04'),
(9, 18, 5, NULL, '2023-05-26 11:56:04', '2023-05-26 11:56:04'),
(10, 19, 5, NULL, '2023-05-26 11:56:04', '2023-05-26 11:56:04'),
(11, 21, 5, NULL, '2023-05-26 11:56:04', '2023-05-26 11:56:04'),
(12, 23, 5, NULL, '2023-05-26 11:56:04', '2023-05-26 11:56:04'),
(13, 2, 7, NULL, '2023-05-26 11:56:34', '2023-05-26 11:56:34'),
(14, 4, 7, NULL, '2023-05-26 11:56:34', '2023-05-26 11:56:34'),
(15, 6, 7, NULL, '2023-05-26 11:56:34', '2023-05-26 11:56:34'),
(16, 8, 7, NULL, '2023-05-26 11:56:34', '2023-05-26 11:56:34'),
(17, 10, 7, NULL, '2023-05-26 11:56:34', '2023-05-26 11:56:34'),
(18, 12, 7, NULL, '2023-05-26 11:56:34', '2023-05-26 11:56:34'),
(19, 14, 7, NULL, '2023-05-26 11:56:34', '2023-05-26 11:56:34'),
(20, 15, 7, NULL, '2023-05-26 11:56:35', '2023-05-26 11:56:35'),
(21, 18, 7, NULL, '2023-05-26 11:56:35', '2023-05-26 11:56:35'),
(22, 20, 7, NULL, '2023-05-26 11:56:35', '2023-05-26 11:56:35'),
(23, 22, 7, NULL, '2023-05-26 11:56:35', '2023-05-26 11:56:35'),
(24, 24, 7, NULL, '2023-05-26 11:56:35', '2023-05-26 11:56:35'),
(25, 1, 2, NULL, '2023-05-26 11:57:08', '2023-05-26 11:57:08'),
(26, 4, 2, NULL, '2023-05-26 11:57:08', '2023-05-26 11:57:08'),
(27, 5, 2, NULL, '2023-05-26 11:57:08', '2023-05-26 11:57:08'),
(28, 8, 2, NULL, '2023-05-26 11:57:08', '2023-05-26 11:57:08'),
(29, 9, 2, NULL, '2023-05-26 11:57:08', '2023-05-26 11:57:08'),
(30, 11, 2, NULL, '2023-05-26 11:57:08', '2023-05-26 11:57:08'),
(31, 13, 2, NULL, '2023-05-26 11:57:08', '2023-05-26 11:57:08'),
(32, 16, 2, NULL, '2023-05-26 11:57:08', '2023-05-26 11:57:08'),
(33, 17, 2, NULL, '2023-05-26 11:57:08', '2023-05-26 11:57:08'),
(34, 19, 2, NULL, '2023-05-26 11:57:08', '2023-05-26 11:57:08'),
(35, 21, 2, NULL, '2023-05-26 11:57:08', '2023-05-26 11:57:08'),
(36, 23, 2, NULL, '2023-05-26 11:57:08', '2023-05-26 11:57:08'),
(37, 1, 3, NULL, '2023-05-26 11:57:44', '2023-05-26 11:57:44'),
(38, 3, 3, NULL, '2023-05-26 11:57:44', '2023-05-26 11:57:44'),
(39, 6, 3, NULL, '2023-05-26 11:57:44', '2023-05-26 11:57:44'),
(40, 7, 3, NULL, '2023-05-26 11:57:44', '2023-05-26 11:57:44'),
(41, 10, 3, NULL, '2023-05-26 11:57:44', '2023-05-26 11:57:44'),
(42, 11, 3, NULL, '2023-05-26 11:57:44', '2023-05-26 11:57:44'),
(43, 14, 3, NULL, '2023-05-26 11:57:44', '2023-05-26 11:57:44'),
(44, 15, 3, NULL, '2023-05-26 11:57:44', '2023-05-26 11:57:44'),
(45, 18, 3, NULL, '2023-05-26 11:57:44', '2023-05-26 11:57:44'),
(46, 19, 3, NULL, '2023-05-26 11:57:44', '2023-05-26 11:57:44'),
(47, 22, 3, NULL, '2023-05-26 11:57:44', '2023-05-26 11:57:44'),
(48, 23, 3, NULL, '2023-05-26 11:57:44', '2023-05-26 11:57:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidates_position_id_foreign` (`position_id`),
  ADD KEY `candidates_partylist_id_foreign` (`partylist_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partylists`
--
ALTER TABLE `partylists`
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
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `votes_candidate_id_foreign` (`candidate_id`),
  ADD KEY `votes_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `partylists`
--
ALTER TABLE `partylists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidates`
--
ALTER TABLE `candidates`
  ADD CONSTRAINT `candidates_partylist_id_foreign` FOREIGN KEY (`partylist_id`) REFERENCES `partylists` (`id`),
  ADD CONSTRAINT `candidates_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`);

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`),
  ADD CONSTRAINT `votes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
