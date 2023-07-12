-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 06:58 AM
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
-- Database: `mehedi_softbit_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `mobile`, `email`, `password`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mehedi', '01755771232', 'admin@gmail.com', '$2y$10$/6CyAh8w2V3JwcyHa8q2/OVV.IFGsuoE/H0Fgp.Q/oztZtb8K12ka', 'assets/project-images/admin/4234.jpg', 1, NULL, '2023-07-11 22:54:26');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `official_email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `web_address` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `address`, `official_email`, `phone_number`, `web_address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Richman', 'Dhaka', 'richman@gmail.com', '01755771232', 'https://richmanbd.com/in', 1, '2023-07-11 11:46:19', '2023-07-11 17:19:40'),
(5, 'Dorjibari', 'Rangpur', 'dorjibari@gmail.com', '13124334512', 'https://dorjibari.com.bd/', 1, '2023-07-11 17:21:34', '2023-07-11 17:21:34'),
(6, 'Daraz', 'Dhaka', 'daraz@gmail.com', '23452342', 'https://daraz.com.bd/', 1, '2023-07-11 17:22:02', '2023-07-11 17:55:27'),
(8, 'Hanif Enterprice', 'Dhaka', 'hanif@gmail.com', '13124334512', 'https://www.hanif.com/', 1, '2023-07-11 21:55:24', '2023-07-11 21:57:40'),
(9, 'DataSoft', 'Dhaka', 'datasoft@gmail.com', '1234567', 'https://datasoft.com/', 1, '2023-07-11 21:58:47', '2023-07-11 21:58:47'),
(10, 'Kazi It', 'Dhaka', 'kazi@gmail.com', '23452342', 'https://kazibd.com/', 1, '2023-07-11 22:00:10', '2023-07-11 22:00:10'),
(11, 'DELL', 'US', 'dell@gmail.com', '01564574', 'https://dell.com/', 1, '2023-07-11 22:01:31', '2023-07-11 22:01:31'),
(12, 'Samsung', 'US', 'samsung@gmail.com', '6573556', 'https://samsung.com/', 1, '2023-07-11 22:02:19', '2023-07-11 22:02:19'),
(13, 'Walton', 'Dhaka', 'walton@gmail.com', '13434645', 'https://walton.com.bd/', 1, '2023-07-11 22:02:51', '2023-07-11 22:02:51'),
(14, 'RFL', 'Rangpur', 'rfl@gmail.com', '246457', 'https://rfl.com.bd/', 1, '2023-07-11 22:03:21', '2023-07-11 22:03:21'),
(15, 'Olympic', 'Dhaka', 'olc@gmail.com', '876578', 'https://olc.com/', 1, '2023-07-11 22:03:56', '2023-07-11 22:03:56'),
(16, 'NewWays', 'US', 'new@gmail.com', '890789', 'https://news.com/', 1, '2023-07-11 22:04:41', '2023-07-11 22:04:41'),
(17, 'Alhamra', 'Dhaka', 'al@gmail.com', '234523', 'https://alr.com/', 1, '2023-07-11 22:55:00', '2023-07-11 22:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_people`
--

CREATE TABLE `contact_people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_people`
--

INSERT INTO `contact_people` (`id`, `company_id`, `name`, `phone_number`, `designation`, `email`, `whatsapp`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rabbi', '01755771232', 'Executive', 'rabbi@gmail.com', '2435245', 1, '2023-07-11 22:18:53', '2023-07-11 22:18:53'),
(2, 1, 'Hasan', '01755771232', 'HR', 'rabbi@gmail.com', '2435245', 1, '2023-07-11 22:19:06', '2023-07-11 22:19:06'),
(3, 5, 'Hasan', '13124334512', 'Executive', 'rabbi@gmail.com', '2435245', 1, '2023-07-11 22:19:20', '2023-07-11 22:19:20'),
(4, 5, 'Shozib', '23452342', 'Manager', 'saima@gmail.com', '134134', 1, '2023-07-11 22:19:36', '2023-07-11 22:19:36'),
(5, 6, 'Hasibur', '23452342', 'Manager', 'sdf@gmail.com', '134134', 1, '2023-07-11 22:20:01', '2023-07-11 22:20:01'),
(6, 8, 'Shozib', '1234567', 'HR', 'sharif@gmail.com', '134134', 1, '2023-07-11 22:20:31', '2023-07-11 22:20:31'),
(7, 9, 'Shakil', '13124334512', 'Manager', 'mehedi@gmail.com', '2435245', 1, '2023-07-11 22:20:46', '2023-07-11 22:20:46'),
(8, 10, 'Hasibur2', '01755771232', 'Executive', 'kazi@gmail.com', '134134', 1, '2023-07-11 22:25:42', '2023-07-11 22:25:42'),
(9, 17, 'Shohidul', '3452', 'Manager', 'sh@gmail.com', '134134', 1, '2023-07-11 22:55:56', '2023-07-11 22:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_person_id` int(11) NOT NULL,
  `meeting_title` varchar(255) NOT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `discussion` varchar(255) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  `next_meeting_date_time` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `contact_person_id`, `meeting_title`, `purpose`, `discussion`, `result`, `next_meeting_date_time`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 'Sells', 'Business', 'cvredf', 'DONE', NULL, 1, '2023-07-11 19:48:55', '2023-07-11 22:21:26'),
(3, 1, 'Sell', 'Business', 'test', 'DONE', '2023-07-12T13:22', 1, '2023-07-11 22:21:13', '2023-07-11 22:21:13'),
(5, 6, 'Sells', 'Business', 'asfdsdf', 'DONE', '2023-07-19T14:27', 1, '2023-07-11 22:23:40', '2023-07-11 22:23:40'),
(6, 3, 'Sell', 'product sell', 'sdfasdf', 'DONE', '2023-07-22T13:23', 1, '2023-07-11 22:24:05', '2023-07-11 22:24:05'),
(7, 4, 'business', 'product sell', 'dsfdfer', 'DONE', '2023-07-18T13:27', 1, '2023-07-11 22:24:42', '2023-07-11 22:24:42'),
(8, 8, 'Sell', 'product sell', 'SDszgdf', 'DONE', NULL, 1, '2023-07-11 22:27:27', '2023-07-11 22:27:27'),
(9, 7, 'Sell', 'product sell', 'SDF', 'DONE', '2023-07-12T01:30', 1, '2023-07-11 22:27:53', '2023-07-11 22:27:53'),
(10, 9, 'Bus', 'Business', 'asdfgase', 'half done and need to talk', NULL, 1, '2023-07-11 22:56:31', '2023-07-11 22:57:08');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_11_105351_create_admins_table', 2),
(6, '2023_07_11_134306_create_companies_table', 3),
(7, '2023_07_11_163014_create_contact_people_table', 4),
(11, '2023_07_11_172642_create_companies_table', 5),
(12, '2023_07_11_174419_create_contact_person_table', 5),
(13, '2023_07_11_174734_create_contact_people_table', 6),
(14, '2023_07_11_233159_create_contact_people_table', 7),
(16, '2023_07_12_003511_create_meetings_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_people`
--
ALTER TABLE `contact_people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact_people`
--
ALTER TABLE `contact_people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
