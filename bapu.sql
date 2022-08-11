-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 07:11 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bapu`
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
(4, '2021_06_14_100819_create_category_table', 1),
(5, '2021_06_14_100819_create_package_table', 1),
(6, '2021_06_14_100819_create_settings_table', 1),
(7, '2021_10_22_143742_create_pack_img_table', 1),
(10, '2021_12_26_075823_add_cat_id_table', 2),
(11, '2021_12_26_090915_add_c_name_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pack_img`
--

CREATE TABLE `pack_img` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_payed` tinyint(4) NOT NULL DEFAULT 0,
  `p_id` int(11) DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `isdelete` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pack_img`
--

INSERT INTO `pack_img` (`id`, `c_name`, `is_payed`, `p_id`, `img`, `active`, `isdelete`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '', 0, 1, '20211226080549-236548412-channels4_profile.jpg', 0, 0, 1, '2021-12-26 02:35:49', '2022-07-31 00:44:21'),
(2, '', 0, 1, '20211226080549-193338631-test.png', 0, 0, 1, '2021-12-26 02:35:49', '2022-07-31 00:44:21'),
(3, 'Test', 0, 2, '20211226081213-604549115-test.png', 0, 0, 1, '2021-12-26 02:42:14', '2021-12-26 03:50:56'),
(4, 'Test2', 0, 2, '20211226092757-901062193-test.png', 0, 0, 1, '2021-12-26 03:57:58', '2021-12-26 03:57:58'),
(5, '', 0, 2, '20211227152731-650511886-channels4_profile.jpg', 0, 0, 1, '2021-12-26 03:57:58', '2021-12-27 09:57:32'),
(6, 'Test', 0, 3, '20211227164300-84436203-channels4_profile.jpg', 0, 0, 1, '2021-12-27 11:13:00', '2021-12-27 11:13:17'),
(7, 'Test2', 0, 3, '20211227164300-7708816-test.png', 0, 0, 1, '2021-12-27 11:13:00', '2021-12-27 11:13:17'),
(8, 'Test', 0, 3, '20211227164300-729707093-test.png', 0, 0, 1, '2021-12-27 11:13:01', '2021-12-27 11:13:01'),
(9, 'Mex', 0, 4, '20211227164412-796085724-test.png', 0, 0, 1, '2021-12-27 11:14:13', '2021-12-27 11:14:13'),
(10, 'Dd Hd', 0, 4, '20211227164440-578237249-channels4_profile.jpg', 0, 0, 1, '2021-12-27 11:14:40', '2021-12-27 11:14:40'),
(11, 'Mkl', 0, 2, '20220731061258-352321531-HTMLVSCSS LOGO.png', 0, 0, 1, '2022-07-31 00:42:59', '2022-07-31 00:42:59'),
(12, '5454', 0, 2, '20220731061321-608911229-test (1).png', 0, 0, 1, '2022-07-31 00:43:22', '2022-07-31 00:43:22'),
(13, NULL, 0, 1, '20220731061407-417558241-WhatsApp Image 2022-07-26 at 11.07.16 PM (1).jpeg', 0, 0, 1, '2022-07-31 00:44:07', '2022-07-31 00:44:07'),
(14, NULL, 0, 1, '20220731061408-502441542-WhatsApp Image 2022-07-26 at 11.10.27 PM.jpeg', 0, 0, 1, '2022-07-31 00:44:08', '2022-07-31 00:44:08'),
(15, NULL, 0, 1, '20220731061408-521023242-WhatsApp Image 2022-07-26 at 11.09.11 PM.jpeg', 0, 0, 1, '2022-07-31 00:44:09', '2022-07-31 00:44:09'),
(16, NULL, 0, 1, '20220731061409-438622131-WhatsApp Image 2022-07-26 at 11.07.16 PM.jpeg', 0, 0, 1, '2022-07-31 00:44:10', '2022-07-31 00:44:10'),
(17, NULL, 0, 1, '20220731061410-222913840-bd66d3d8-49dd-4ebe-84d1-3b800b1e2ec7.jpg', 0, 0, 1, '2022-07-31 00:44:10', '2022-07-31 00:44:10'),
(18, NULL, 0, 1, '20220731061410-809583517-20220722043531download.jpeg', 0, 0, 1, '2022-07-31 00:44:10', '2022-07-31 00:44:10'),
(19, NULL, 0, 1, '20220731061411-380094606-Email template business  email template business proposal  html email templates for gmail.png', 0, 0, 1, '2022-07-31 00:44:12', '2022-07-31 00:44:12'),
(20, NULL, 0, 1, '20220731061412-907465000-HTMLVSCSS LOGO.png', 0, 0, 1, '2022-07-31 00:44:12', '2022-07-31 00:44:12'),
(21, NULL, 0, 1, '20220731061412-175196562-Sending Username And Password In Email Template.png', 0, 0, 1, '2022-07-31 00:44:13', '2022-07-31 00:44:13'),
(22, NULL, 0, 1, '20220731061413-336800634-screencapture-127-0-0-1-8000-edit-profile-1-2022-07-11-20_47_52.png', 0, 0, 1, '2022-07-31 00:44:14', '2022-07-31 00:44:14'),
(23, NULL, 0, 1, '20220731061414-266878347-asynchronoustechnology-logo.png', 0, 0, 1, '2022-07-31 00:44:14', '2022-07-31 00:44:14'),
(24, NULL, 0, 1, '20220731061414-8643690-WhatsApp Image 2022-07-26 at 11.07.16 PM (1).jpeg', 0, 0, 1, '2022-07-31 00:44:15', '2022-07-31 00:44:15'),
(25, NULL, 0, 1, '20220731061415-128458881-WhatsApp Image 2022-07-26 at 11.10.27 PM.jpeg', 0, 0, 1, '2022-07-31 00:44:15', '2022-07-31 00:44:15'),
(26, NULL, 0, 1, '20220731061415-953512984-WhatsApp Image 2022-07-26 at 11.07.16 PM (1).jpeg', 0, 0, 1, '2022-07-31 00:44:16', '2022-07-31 00:44:16'),
(27, NULL, 0, 1, '20220731061416-12506357-WhatsApp Image 2022-07-26 at 11.09.11 PM.jpeg', 0, 0, 1, '2022-07-31 00:44:16', '2022-07-31 00:44:16'),
(28, NULL, 0, 1, '20220731061416-738808085-WhatsApp Image 2022-07-26 at 11.07.16 PM (1).jpeg', 0, 0, 1, '2022-07-31 00:44:17', '2022-07-31 00:44:17'),
(29, NULL, 0, 1, '20220731061417-831513522-WhatsApp Image 2022-07-26 at 11.10.27 PM.jpeg', 0, 0, 1, '2022-07-31 00:44:17', '2022-07-31 00:44:17'),
(30, NULL, 0, 1, '20220731061417-967445368-WhatsApp Image 2022-07-26 at 11.07.16 PM.jpeg', 0, 0, 1, '2022-07-31 00:44:17', '2022-07-31 00:44:17'),
(31, NULL, 0, 1, '20220731061417-925679321-WhatsApp Image 2022-07-26 at 11.10.27 PM.jpeg', 0, 0, 1, '2022-07-31 00:44:18', '2022-07-31 00:44:18'),
(32, NULL, 0, 1, '20220731061417-409157373-WhatsApp Image 2022-07-26 at 11.09.11 PM.jpeg', 0, 0, 1, '2022-07-31 00:44:18', '2022-07-31 00:44:18'),
(33, NULL, 0, 1, '20220731061418-446158606-WhatsApp Image 2022-07-26 at 11.09.11 PM.jpeg', 0, 0, 1, '2022-07-31 00:44:18', '2022-07-31 00:44:18'),
(34, NULL, 0, 1, '20220731061418-563761882-bd66d3d8-49dd-4ebe-84d1-3b800b1e2ec7.jpg', 0, 0, 1, '2022-07-31 00:44:18', '2022-07-31 00:44:18'),
(35, NULL, 0, 1, '20220731061419-765322220-20220722043531download.jpeg', 0, 0, 1, '2022-07-31 00:44:19', '2022-07-31 00:44:19'),
(36, NULL, 0, 1, '20220731061415-126767511-screencapture-localhost-laravel-caprusDigitall-About-SuccessStory-2022-06-13-23_14_23.png', 0, 0, 1, '2022-07-31 00:44:19', '2022-07-31 00:44:19'),
(37, NULL, 0, 1, '20220731061418-453527558-WhatsApp Image 2022-07-26 at 11.07.16 PM.jpeg', 0, 0, 1, '2022-07-31 00:44:19', '2022-07-31 00:44:19'),
(38, NULL, 0, 1, '20220731061418-856306558-WhatsApp Image 2022-07-26 at 11.07.16 PM.jpeg', 0, 0, 1, '2022-07-31 00:44:19', '2022-07-31 00:44:19'),
(39, NULL, 0, 1, '20220731061419-548827548-screencapture-localhost-ursproject-home-php-2022-06-07-20_09_19.png', 0, 0, 1, '2022-07-31 00:44:20', '2022-07-31 00:44:20'),
(40, NULL, 0, 1, '20220731061419-916429149-bd66d3d8-49dd-4ebe-84d1-3b800b1e2ec7.jpg', 0, 0, 1, '2022-07-31 00:44:20', '2022-07-31 00:44:20'),
(41, NULL, 0, 1, '20220731061420-729145934-bd66d3d8-49dd-4ebe-84d1-3b800b1e2ec7.jpg', 0, 0, 1, '2022-07-31 00:44:20', '2022-07-31 00:44:20'),
(42, NULL, 0, 1, '20220731061420-86513369-20220722043531download.jpeg', 0, 0, 1, '2022-07-31 00:44:20', '2022-07-31 00:44:20'),
(43, NULL, 0, 1, '20220731061419-338935557-Email template business  email template business proposal  html email templates for gmail.png', 0, 0, 1, '2022-07-31 00:44:21', '2022-07-31 00:44:21'),
(44, NULL, 0, 1, '20220731061420-786003919-20220722043531download.jpeg', 0, 0, 1, '2022-07-31 00:44:21', '2022-07-31 00:44:21'),
(45, NULL, 0, 1, '20220731061420-642754501-test (1).png', 0, 0, 1, '2022-07-31 00:44:21', '2022-07-31 00:44:21'),
(46, NULL, 0, 1, '20220731061421-382157481-HTMLVSCSS LOGO.png', 0, 0, 1, '2022-07-31 00:44:21', '2022-07-31 00:44:21'),
(47, NULL, 0, 1, '20220731061421-906892612-Sending Username And Password In Email Template.png', 0, 0, 1, '2022-07-31 00:44:22', '2022-07-31 00:44:22'),
(48, NULL, 0, 1, '20220731061421-72766958-Email template business  email template business proposal  html email templates for gmail.png', 0, 0, 1, '2022-07-31 00:44:22', '2022-07-31 00:44:22'),
(49, NULL, 0, 1, '20220731061421-858970251-Email template business  email template business proposal  html email templates for gmail.png', 0, 0, 1, '2022-07-31 00:44:22', '2022-07-31 00:44:22'),
(50, NULL, 0, 1, '20220731061423-656929025-HTMLVSCSS LOGO.png', 0, 0, 1, '2022-07-31 00:44:23', '2022-07-31 00:44:23'),
(51, NULL, 0, 1, '20220731061423-427502649-HTMLVSCSS LOGO.png', 0, 0, 1, '2022-07-31 00:44:23', '2022-07-31 00:44:23'),
(52, NULL, 0, 1, '20220731061422-395688483-screencapture-127-0-0-1-8000-edit-profile-1-2022-07-11-20_47_52.png', 0, 0, 1, '2022-07-31 00:44:24', '2022-07-31 00:44:24'),
(53, NULL, 0, 1, '20220731061423-964183615-Sending Username And Password In Email Template.png', 0, 0, 1, '2022-07-31 00:44:24', '2022-07-31 00:44:24'),
(54, NULL, 0, 1, '20220731061424-529225424-asynchronoustechnology-logo.png', 0, 0, 1, '2022-07-31 00:44:24', '2022-07-31 00:44:24'),
(55, NULL, 0, 1, '20220731061423-960351159-Sending Username And Password In Email Template.png', 0, 0, 1, '2022-07-31 00:44:24', '2022-07-31 00:44:24'),
(56, NULL, 0, 1, '20220731061424-218496828-screencapture-127-0-0-1-8000-edit-profile-1-2022-07-11-20_47_52.png', 0, 0, 1, '2022-07-31 00:44:25', '2022-07-31 00:44:25'),
(57, NULL, 0, 1, '20220731061424-308082158-screencapture-127-0-0-1-8000-edit-profile-1-2022-07-11-20_47_52.png', 0, 0, 1, '2022-07-31 00:44:25', '2022-07-31 00:44:25'),
(58, NULL, 0, 1, '20220731061425-123531461-asynchronoustechnology-logo.png', 0, 0, 1, '2022-07-31 00:44:26', '2022-07-31 00:44:26'),
(59, NULL, 0, 1, '20220731061425-247343559-asynchronoustechnology-logo.png', 0, 0, 1, '2022-07-31 00:44:26', '2022-07-31 00:44:26'),
(60, NULL, 0, 1, '20220731061424-380846869-screencapture-localhost-laravel-caprusDigitall-About-SuccessStory-2022-06-13-23_14_23.png', 0, 0, 1, '2022-07-31 00:44:28', '2022-07-31 00:44:28'),
(61, NULL, 0, 1, '20220731061428-990369828-screencapture-localhost-ursproject-home-php-2022-06-07-20_09_19.png', 0, 0, 1, '2022-07-31 00:44:29', '2022-07-31 00:44:29'),
(62, NULL, 0, 1, '20220731061426-392440882-screencapture-localhost-laravel-caprusDigitall-About-SuccessStory-2022-06-13-23_14_23.png', 0, 0, 1, '2022-07-31 00:44:29', '2022-07-31 00:44:29'),
(63, NULL, 0, 1, '20220731061426-439956955-screencapture-localhost-laravel-caprusDigitall-About-SuccessStory-2022-06-13-23_14_23.png', 0, 0, 1, '2022-07-31 00:44:29', '2022-07-31 00:44:29'),
(64, NULL, 0, 1, '20220731061429-191439576-test (1).png', 0, 0, 1, '2022-07-31 00:44:30', '2022-07-31 00:44:30'),
(65, NULL, 0, 1, '20220731061429-107952612-screencapture-localhost-ursproject-home-php-2022-06-07-20_09_19.png', 0, 0, 1, '2022-07-31 00:44:30', '2022-07-31 00:44:30'),
(66, NULL, 0, 1, '20220731061430-405270335-screencapture-localhost-ursproject-home-php-2022-06-07-20_09_19.png', 0, 0, 1, '2022-07-31 00:44:30', '2022-07-31 00:44:30'),
(67, NULL, 0, 1, '20220731061431-908332310-test (1).png', 0, 0, 1, '2022-07-31 00:44:31', '2022-07-31 00:44:31'),
(68, NULL, 0, 1, '20220731061431-159120600-test (1).png', 0, 0, 1, '2022-07-31 00:44:31', '2022-07-31 00:44:31');

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
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `isdelete` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `active`, `isdelete`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Demo23222tttt', 0, 1, 1, '2021-12-22 09:49:46', '2021-12-22 09:50:01'),
(2, 'Primaym', 0, 0, 1, '2021-12-22 09:51:53', '2021-12-22 09:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_id` int(11) DEFAULT NULL,
  `package_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `isdelete` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`id`, `cat_id`, `sub_id`, `package_name`, `price`, `active`, `isdelete`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 'Test', '25.00', 0, 0, 1, '2021-12-26 02:35:49', '2022-07-31 00:44:07'),
(2, 2, NULL, 'Royal Pak', '25.00', 0, 0, 1, '2021-12-26 02:42:13', '2021-12-27 09:56:59'),
(3, 2, NULL, 'Test 2', '50.00', 0, 0, 1, '2021-12-27 11:13:00', '2021-12-27 11:13:00'),
(4, 2, NULL, 'Test 3', '100.00', 0, 0, 1, '2021-12-27 11:14:12', '2021-12-27 11:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `isdelete` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$MCIrq0uEgcwzxhx2wy33q.TpakaugqwXYbrJ.1/ehe1qYDIyGEm7C', NULL, '2021-12-22 09:46:30', '2021-12-22 09:46:30');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pack_img`
--
ALTER TABLE `pack_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pack_img`
--
ALTER TABLE `pack_img`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
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
