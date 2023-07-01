-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 01:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `euro_mall`
--

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
-- Table structure for table `investment`
--

CREATE TABLE `investment` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT 'Active(1) InActive(0)',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investment`
--

INSERT INTO `investment` (`id`, `user_id`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 500, 1, '2023-07-01 11:03:48', '2023-07-01 11:03:48'),
(3, 3, 1000, 1, '2023-07-01 11:49:13', '2023-07-01 11:49:13'),
(4, 4, 500, 1, '2023-07-01 14:48:08', '2023-07-01 14:48:08'),
(5, 5, 600, 1, '2023-07-01 15:35:21', '2023-07-01 15:35:21'),
(6, 6, 400, 1, '2023-07-01 15:35:21', '2023-07-01 15:35:21'),
(7, 7, 500, 1, '2023-07-01 15:47:47', '2023-07-01 15:47:47'),
(8, 1, 500, 1, '2023-07-01 17:13:44', '2023-07-01 17:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `matching`
--

CREATE TABLE `matching` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `left_buss` double DEFAULT NULL,
  `right_buss` double DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `carry_amount` double DEFAULT NULL,
  `carry_side` varchar(10) DEFAULT NULL COMMENT 'Left/Right',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matching`
--

INSERT INTO `matching` (`id`, `user_id`, `left_buss`, `right_buss`, `amount`, `carry_amount`, `carry_side`, `created_at`, `updated_at`) VALUES
(1, 1, 1600, 1900, 128, 300, 'RIGHT', '2023-06-30 15:48:14', '2023-07-01 15:48:14'),
(2, 2, 500, 600, 40, 100, 'RIGHT', '2023-06-30 15:48:14', '2023-07-01 15:48:14'),
(3, 3, 400, 500, 32, 100, 'RIGHT', '2023-05-30 15:48:14', '2023-07-01 15:48:14'),
(4, 1, 1600, 1900, 0, 300, 'RIGHT', '2023-07-01 15:52:30', '2023-07-01 15:52:30'),
(5, 2, 500, 600, 0, 100, 'RIGHT', '2023-07-01 15:52:30', '2023-07-01 15:52:30'),
(6, 3, 400, 500, 0, 100, 'RIGHT', '2023-06-30 15:52:30', '2023-07-01 15:52:30'),
(7, 3, 400, 500, 0, 100, 'RIGHT', '2023-07-01 16:22:47', '2023-07-01 16:22:47');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(122) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(222) DEFAULT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `transaction_password` varchar(100) DEFAULT NULL,
  `referral_code` varchar(255) DEFAULT NULL COMMENT 'Parent Referral Code',
  `position` varchar(50) DEFAULT NULL COMMENT 'Only 2 (Left & Right)',
  `parent_id` text DEFAULT NULL,
  `left_parent` text DEFAULT NULL,
  `right_parent` text DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT 'Active(1) Inactive(0)',
  `is_verify` int(11) NOT NULL DEFAULT 0,
  `referral_right` varchar(122) DEFAULT NULL,
  `referral_left` text DEFAULT NULL,
  `otp` int(10) DEFAULT NULL,
  `expire_time` datetime DEFAULT NULL,
  `created_at` varchar(250) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `last_name`, `phone`, `email`, `userid`, `password`, `transaction_password`, `referral_code`, `position`, `parent_id`, `left_parent`, `right_parent`, `status`, `is_verify`, `referral_right`, `referral_left`, `otp`, `expire_time`, `created_at`, `updated_at`) VALUES
(1, 'User 1', 'User 1', '72727272727', 'user1@gmailc.om', 'JC0001', '$2y$10$Xy75o5EYY8XDBZbJZr4ZbOkua5IhRPmJJFP3v12WlbmA.V6PKZvUi', '$2y$10$Xy75o5EYY8XDBZbJZr4ZbOkua5IhRPmJJFP3v12WlbmA.V6PKZvUi', NULL, NULL, NULL, NULL, NULL, 1, 1, '1ABCR', '1ABCL', NULL, NULL, '2023-07-01 10:39:38', '2023-07-01 17:13:44'),
(2, 'User 2', 'User 2', '72727272727', 'admin@admin.com', 'JC2727E', '$2y$10$gs7W5QVCxEbM4xGFweXdJ.iJlGbDdw0ctx9fc/zkcJKyUFLRhnnHa', NULL, '1ABCL', 'LEFT', '1', '1', '', 0, 0, '2F07274R', '2F07266L', NULL, NULL, '2023-07-01 10:43:02', '2023-07-01 10:43:03'),
(3, 'User 3', 'User 3', '72727272727', 'animsanddccandgm@gmail.com', 'JC3BC18', '$2y$10$V/Mvh8z864Pb1ljJBTO44e/PTY2RDl9YutU1g4RmAkvtm3Yr0elUq', NULL, '1ABCR', 'RIGHT', '1', '', '1', 0, 0, '337BC0AR', '337BBF7L', NULL, NULL, '2023-07-01 10:45:31', '2023-07-01 10:45:31'),
(4, 'User 4', 'User 4', '72727272727', 'animsanddccandgm@gmail.com', 'JC42A43', '$2y$10$XrpKaSmYSx.7bZ0J3Geib.5pEJQRabZqqU1Imu452TdsoXCu2hV4K', NULL, '2F07266L', 'LEFT', '1,2', '1,2', '', 0, 0, '4832A3ER', '4832A33L', NULL, NULL, '2023-07-01 10:48:00', '2023-07-01 10:48:00'),
(5, 'User 5', 'User 5', '72727272727', 'admin@admin.com', 'JC5DD98', '$2y$10$DsGVApGZ6Wzb25RjqG6ZaOfl1tVS2iw4a0R6bfP6q4ZZZafzQ2RRW', NULL, '2F07274R', 'RIGHT', '1,2', '1', '2', 0, 0, '5BCDD8FR', '5BCDD84L', 785460, '2023-07-01 10:49:55', '2023-07-01 10:49:55', '2023-07-01 10:49:55'),
(6, 'User 6', 'User 6', '72727272727', 'admin@admin.com', 'JC6850B', '$2y$10$C9bJSvp1wqy7Bwq9rBgtyOc/1fp2sNWjoQQckXoP4Q.8onypPn3z2', NULL, '337BBF7L', 'LEFT', '1,3', '3', '1', 0, 0, '6168507R', '6168501L', 576409, '2023-07-01 10:51:21', '2023-07-01 10:51:21', '2023-07-01 10:51:21'),
(7, 'User 7', 'User 7', '72727272727', 'admin@admin.com', 'JC76891', '$2y$10$s8G9bST9lMaxZi06zGzij.ADA6Ndlm8Pz/9ZUpgF7iI2h4Ck0mG.y', NULL, '337BC0AR', 'RIGHT', '1,3', '', '1,3', 0, 0, '7F5688CR', '7F56885L', 482338, '2023-07-01 10:52:23', '2023-07-01 10:52:23', '2023-07-01 10:52:23'),
(8, 'User 8', 'User 8', '72727272727', 'admin@admin.com', 'JC81B21', '$2y$10$Moc.8SLz4e0chAYaMiRooeqaVAUcqhBjDdM0sX6qoL0hF2MxPK5Bu', NULL, '4832A33L', 'LEFT', '1,2,4', '1,2,4', '', 0, 0, '8851B12R', '8851AFFL', 335241, '2023-07-01 10:57:36', '2023-07-01 10:57:36', '2023-07-01 10:57:36'),
(9, 'User 9', 'User 9', '72727272727', 'admin@admin.com', 'JC926CD', '$2y$10$brsLI.0OLZ3kY/maki/vC.PEX6InefPwytAIVR18INfQehkwRdh2u', NULL, '4832A3ER', 'RIGHT', '1,2,4', '1,2', '4', 0, 0, '98026BER', '98026ABL', 288514, '2023-07-01 10:58:24', '2023-07-01 10:58:23', '2023-07-01 10:58:24'),
(10, 'User 10', 'User 10', '72727272727', 'animsanddccandgm@gmail.com', 'JC107337', '$2y$10$lT49RFJpYdzf2lvglxNpHu9DEeu6D/qJpsDf41W0Yf2YpItrOT2A.', NULL, '1ABCR', 'RIGHT', '1,3,7', '', '1,3,7', 0, 0, '103A7330R', '103A7324L', 236960, '2023-07-01 11:00:43', '2023-07-01 11:00:43', '2023-07-01 11:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `roi`
--

CREATE TABLE `roi` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `amount_per_day` double DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roi`
--

INSERT INTO `roi` (`id`, `user_id`, `amount_per_day`, `created_at`, `updated_at`) VALUES
(1, 2, 2.5, '2023-07-01 17:00:53', '2023-07-01 17:00:53'),
(2, 3, 5, '2023-07-01 17:00:53', '2023-07-01 17:00:53'),
(3, 4, 2.5, '2023-07-01 17:00:53', '2023-07-01 17:00:53'),
(4, 5, 3, '2023-07-01 17:00:53', '2023-07-01 17:00:53'),
(5, 6, 2, '2023-07-01 17:00:53', '2023-07-01 17:00:53'),
(6, 7, 500, '2023-06-30 17:00:53', '2023-07-01 17:00:53'),
(7, 7, 250, '2023-06-30 17:03:30', '2023-07-01 17:03:30'),
(8, 7, 250, '2023-06-30 17:05:24', '2023-07-01 17:05:24');

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
(1, 'Ankit', 'admin@gmail.com', NULL, '$2y$10$wZ9QcGHrHS9UdGSPJPR8nuwLXfQnFM5mtN95rpsx4/fO.APnapto.', NULL, '2023-06-19 03:28:54', '2023-06-19 03:28:54');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `amount` double DEFAULT NULL,
  `trans_charge` double DEFAULT NULL,
  `remarks` varchar(300) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT 'Active(1) Inactive(0)',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `investment`
--
ALTER TABLE `investment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matching`
--
ALTER TABLE `matching`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roi`
--
ALTER TABLE `roi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investment`
--
ALTER TABLE `investment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `matching`
--
ALTER TABLE `matching`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roi`
--
ALTER TABLE `roi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
