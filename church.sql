-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2024 at 11:22 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `church`
--

-- --------------------------------------------------------

--
-- Table structure for table `attends`
--

CREATE TABLE `attends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `attend_entry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fphone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attends`
--

INSERT INTO `attends` (`id`, `flno`, `attend_entry`, `fname`, `fphone`, `remark`, `created_at`, `updated_at`) VALUES
(1, '1', 'present', 'ysg', '48578437', NULL, '2024-03-20 21:53:41', '2024-03-20 21:53:41'),
(2, '2', 'present', 'queen', '7584785748', 'hii', '2024-03-20 21:53:44', '2024-05-09 04:49:17'),
(3, '2', 'present', 'upena', '76543245', 'speech about society', '2024-03-20 21:54:10', '2024-05-09 04:50:20'),
(4, '1', 'absent', 'ramcharan', '6458437', NULL, '2024-03-20 21:54:12', '2024-03-20 21:54:12'),
(5, '1', 'present', 'ysg', '48578437', NULL, '2024-05-09 01:16:39', '2024-05-09 01:16:39'),
(6, '1', 'absent', 'ramcharan', '6458437', 'fever', '2024-05-09 01:16:41', '2024-05-09 04:50:33'),
(7, '2', 'present', 'upena', '76543245', NULL, '2024-05-09 01:16:45', '2024-05-09 01:16:45'),
(8, '2', 'absent', 'queen', '7584785748', NULL, '2024-05-09 01:16:47', '2024-05-09 01:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `churches`
--

CREATE TABLE `churches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guest_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_msg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `families`
--

CREATE TABLE `families` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `family_head_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `family_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `family_member_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `relation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `marriage_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `baptism_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `joining_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `member_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `member_saved` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `member_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `families`
--

INSERT INTO `families` (`id`, `fno`, `family_head_name`, `family_photo`, `slno`, `family_member_name`, `gender`, `relation`, `occupation`, `dob`, `marriage_date`, `baptism_date`, `mobile`, `ad_no`, `joining_date`, `member_status`, `member_saved`, `member_photo`, `street`, `created_at`, `updated_at`) VALUES
(1, 'F001', 'Ysg', 'C:\\fakepath\\moon.jpg', '1', 'ysg', 'Male', 'head', 'work', '2024-03-21', '2024-03-21', '2024-03-21', '48578437', '475768475', '2024-03-21', 'y', 'Yes', 'C:\\fakepath\\moon.jpg', 'tuty', NULL, NULL),
(2, 'F001', 'Ysg', 'sun.jpg', '2', 'queen', 'female', 'love', 'heard', '2024-03-08', '2024-03-08', '2024-03-08', '7584785748', '8478534756', '2024-03-08', 'm', 'Yes', 'moon.jpg', 'tut', NULL, '2024-03-20 21:53:26'),
(3, 'f002', 'ram charan', 'C:\\fakepath\\vj.jpg', '1', 'ramcharan', 'Male', 'head', 'wrk', '2024-03-21', '2024-03-21', '2024-03-21', '6458437', '5674584385', '2024-03-21', 'y', 'Yes', 'C:\\fakepath\\sun.jpg', 'hyd', NULL, NULL),
(4, 'f002', 'ram charan', 'C:\\fakepath\\vj.jpg', '2', 'upena', 'Female', 'wife', 'house', '2024-03-21', '2024-03-21', '2024-03-21', '76543245', '456899', '2024-03-21', 'm', 'Yes', 'C:\\fakepath\\tree.jpg', 'hyd', NULL, NULL),
(5, '001', 'Raja', 'C:\\fakepath\\moon.jpg', '1', 'Raja', 'Male', 'Head', 'King', '2024-05-10', '2024-05-10', '2024-05-10', '12345', '67890', '2024-05-10', 'm', 'Yes', 'C:\\fakepath\\moon.jpg', 'palace', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2024_03_07_024840_create_churches_table', 1),
(20, '2024_03_11_085624_create_receipts_table', 1),
(21, '2024_03_12_085516_create_vouchers_table', 1),
(22, '2024_03_12_152328_create_events_table', 1),
(23, '2024_03_13_104743_create_families_table', 1),
(24, '2024_03_18_031657_create_attends_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `receipt_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `offering` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `offering_with` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `receipt_date`, `offering`, `offering_with`, `description`, `amount_type`, `amount`, `rno`, `created_at`, `updated_at`) VALUES
(1, '2024-05-09', 'Macheiney', 'mugesh', 'for properties', 'Cheque', '23000', '12', '2024-05-09 01:15:14', '2024-05-09 01:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voucher_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paid_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `voucher_date`, `paid_to`, `description`, `amount_type`, `amount`, `vno`, `created_at`, `updated_at`) VALUES
(1, '2024-05-09', 'xyz', 'fund', 'Online', '15000', '001', '2024-05-09 01:14:24', '2024-05-09 01:14:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attends`
--
ALTER TABLE `attends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `churches`
--
ALTER TABLE `churches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attends`
--
ALTER TABLE `attends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `churches`
--
ALTER TABLE `churches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `families`
--
ALTER TABLE `families`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
