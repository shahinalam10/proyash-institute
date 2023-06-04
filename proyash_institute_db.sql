-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 10:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyash_institute_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrative_people`
--

CREATE TABLE `administrative_people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrative_people`
--

INSERT INTO `administrative_people` (`id`, `name`, `designation`, `image`, `created_at`, `updated_at`) VALUES
(8, 'Qazi Afroza Sultana', 'Vice Principal, PROYASH', 'frontEndAsset/administrative-body-img/269130942.jpg', '2023-05-31 09:38:03', '2023-05-31 09:38:03'),
(9, 'Lt Col Md Razib Hossain Khan, PSC, Inf', 'Director, PISER', 'frontEndAsset/administrative-body-img/1746689587.jpg', '2023-05-31 09:38:45', '2023-05-31 09:38:45'),
(10, 'Lt Col Md Altaf Ali, PSC, Arty', 'Director, Incl & Sp Svc, PROYASH', 'frontEndAsset/administrative-body-img/579521426.jpg', '2023-05-31 09:39:36', '2023-05-31 09:39:36'),
(11, 'Col Md Anwar Uz Zaman, BPMS, PPM ,AFWC, PSC,G', 'Executive Director, Principal PROYASH', 'frontEndAsset/administrative-body-img/1797910115.jpg', '2023-05-31 09:40:47', '2023-05-31 09:40:47'),
(12, 'Brig Gen Md Moin Uddin, SUP, ndc, psc', 'Chairman, PROYASH', 'frontEndAsset/administrative-body-img/1139840175.jpg', '2023-05-31 09:41:10', '2023-05-31 09:41:10'),
(13, 'Noorjahan Ahmed', 'Patron, PROYASH', 'frontEndAsset/administrative-body-img/159500093.jpg', '2023-05-31 09:41:34', '2023-05-31 09:41:34');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Sports', 'frontEndAsset/album-image/2078248631.jpg', '2023-05-30 12:44:34', '2023-05-31 11:18:27'),
(3, 'Birthday celebration-2023', 'frontEndAsset/album-image/96848021.jpg', '2023-05-31 11:19:15', '2023-05-31 11:19:15'),
(4, 'Drawing activity', 'frontEndAsset/album-image/492582867.jpg', '2023-05-31 11:19:57', '2023-05-31 11:19:57'),
(5, 'Anual sports', 'frontEndAsset/album-image/1997440560.jpg', '2023-05-31 11:20:15', '2023-05-31 11:20:15'),
(6, 'Victory day-2023', 'frontEndAsset/album-image/823373018.jpg', '2023-05-31 11:20:44', '2023-05-31 11:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `image_sliders`
--

CREATE TABLE `image_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slide_content` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_sliders`
--

INSERT INTO `image_sliders` (`id`, `title`, `slide_content`, `image`, `created_at`, `updated_at`) VALUES
(9, 'Special Child Special Rights', 'Proyash –is a specialized organization that values the holistic development of all children', 'frontEndAsset/image-slider/1048203851.jpg', '2023-05-31 14:16:24', '2023-05-31 14:54:47'),
(10, '১৭ই মার্চ বঙ্গবন্ধু শেখ মুজিবুর রহমান এর  103 তম জন্মবার্ষিকী ও জাতীয় শিশু দিবস ২০২৩', 'স্মার্ট বাংলাদেশের স্বপ্ন বঙ্গবন্ধুর জন্মদিন শিশুদের চোখ সমৃদ্ধির স্বপ্নে রঙ্গিন', 'frontEndAsset/image-slider/1225369053.jpg', '2023-05-31 14:18:05', '2023-05-31 14:44:54'),
(11, 'Annual Sports Closing and Prize Giving Ceremony', 'General S M Shafiuddin Ahmed, SBP (BAR), OSP, ndu, psc, PhD was attended the program as Chief Guest', 'frontEndAsset/image-slider/1177762966.jpg', '2023-05-31 14:19:03', '2023-05-31 14:43:22'),
(12, 'Annual Picnic  - 2023', 'Every year PROYASH arrange a Picnic for Student refreshment', 'frontEndAsset/image-slider/1433945108.jpg', '2023-05-31 14:21:22', '2023-05-31 14:43:32'),
(13, 'বাংলা ইশারা ভাষা দিবস-২০২৩', 'বাংলা ইশারা ভাষা দিবস উপলক্ষে উজ্জাপিত অনুষ্ঠানে প্রয়াস বিশেষায়িত শিক্ষা প্রতিষ্ঠানের অংশগ্রহণ', 'frontEndAsset/image-slider/384920588.jpg', '2023-05-31 14:22:03', '2023-05-31 14:43:40'),
(14, 'মহান স্বাধীনতা ও জাতীয় দিবস - ২০২৩', 'উদযাপন উপলক্ষে প্রামাণ্য চিত্র প্রদর্শন অনুষ্ঠানের আয়োজন', 'frontEndAsset/image-slider/1540405929.jpg', '2023-05-31 14:22:37', '2023-05-31 14:56:03'),
(15, 'Give a little. Change a lot', 'Proyash runs similar programs in Jessore, Bogra, Chittagong, Rangpur, Savar, Comilla, Shyllhet and Ghatail area.', 'frontEndAsset/image-slider/78451116.jpg', '2023-05-31 14:23:44', '2023-05-31 14:44:02'),
(16, 'Raise your helping hand', 'Proyash is functioning under the patronization of Bangladesh Army since July 2006', 'frontEndAsset/image-slider/1967323012.jpg', '2023-05-31 14:24:39', '2023-05-31 14:24:39');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_27_191549_create_sessions_table', 1),
(7, '2023_05_29_171138_create_image_sliders_table', 2),
(8, '2023_05_29_201330_create_news_sliders_table', 3),
(9, '2023_05_30_035931_create_proyash_services_table', 4),
(10, '2023_05_30_045948_create_administrative_people_table', 5),
(11, '2023_05_30_063439_create_proyash_logos_table', 6),
(12, '2023_05_30_090241_create_proyash_notices_table', 7),
(13, '2023_05_30_174304_create_galleries_table', 8),
(14, '2023_05_30_185757_create_upoloadimages_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `news_sliders`
--

CREATE TABLE `news_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `news_content` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_sliders`
--

INSERT INTO `news_sliders` (`id`, `title`, `news_content`, `image`, `created_at`, `updated_at`) VALUES
(8, 'বিশেষ শিক্ষার্থীদের আইসিটি বিভাগে অর্জিত সফলতা', 'বাংলাদেশ কম্পিউটার কাউন্সিল, আইসিটি মন্ত্রণালয় ও বেসরকারি এনজিও সিএসআইডি সম্মেলিত ভাবে `যুব বিশেষায়িত শিক্ষার্থীদের জন্য  আইটি প্রতিযো...', 'frontEndAsset/proyash-news-slider/252052458.jpg', '2023-05-31 15:20:47', '2023-05-31 15:20:47'),
(9, '১৭ই মার্চ বঙ্গবন্ধু শেখ মুজিবুর রহমান এর ১০৩ তম জন্মবার্ষিকী ও জাতীয় শিশু দিবস ২০২৩', '১৭ই মার্চ ২০২৩ জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এর ১০৩ তম জন্মবার্ষিকী ও জাতীয় শিশু দিবস ২০২৩- উপলক্ষে &quot; স্মার্ট বাংলাদেশের স্ব...', 'frontEndAsset/proyash-news-slider/964765176.jpg', '2023-05-31 15:22:28', '2023-05-31 15:29:49'),
(10, 'PROYASH Annual Sports - 2023', 'Proyash Institute Of Special Education organized Annual Sports - 2023 held on 27/02/2023. General S M Shafiuddin Ahmed, SBP (BAR), OSP...', 'frontEndAsset/proyash-news-slider/854703250.jpg', '2023-05-31 15:31:41', '2023-05-31 15:31:41'),
(11, 'মহান শহিদ দিবস ও আন্তর্জাতিক মাতৃভাষা দিবস - ২০২৩', 'মহান শহিদ দিবস ও আন্তর্জাতিক মাতৃভাষা দিবস - ২০২৩ উপলক্ষে চিত্রাঙ্কন প্রতিযোগিতার আয়োজন করা হয়। উক্ত অনুষ্ঠানে প্রধান অতিথি হিসেবে উপস...', 'frontEndAsset/proyash-news-slider/1063751347.jpg', '2023-05-31 15:32:38', '2023-05-31 15:32:38'),
(12, 'বিশেষ শিক্ষার্থীদের আইসিটি বিভাগে অর্জিত সফলতা', 'বাংলাদেশ কম্পিউটার কাউন্সিল, আইসিটি মন্ত্রণালয় ও বেসরকারি এনজিও সিএসআইডি সম্মেলিত ভাবে `যুব বিশেষায়িত শিক্ষার্থীদের জন্য  আইটি প্রতিযো...', 'frontEndAsset/proyash-news-slider/2081277552.jpg', '2023-05-31 15:39:23', '2023-05-31 15:39:23'),
(13, '১৭ই মার্চ বঙ্গবন্ধু শেখ মুজিবুর রহমান এর ১০৩ তম জন্মবার্ষিকী ও জাতীয় শিশু দিবস ২০২৩', '১৭ই মার্চ ২০২৩ জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এর ১০৩ তম জন্মবার্ষিকী ও জাতীয় শিশু দিবস ২০২৩- উপলক্ষে &quot; স্মার্ট বাংলাদেশের স্ব..', 'frontEndAsset/proyash-news-slider/465389534.jpg', '2023-05-31 15:40:42', '2023-05-31 15:41:05');

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
-- Table structure for table `proyash_logos`
--

CREATE TABLE `proyash_logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proyash_logos`
--

INSERT INTO `proyash_logos` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(5, 'frontEndAsset/proyash-logo/1695937726.png', '2023-05-30 10:12:50', '2023-05-31 14:00:04'),
(6, 'frontEndAsset/proyash-logo/549489645.png', '2023-05-31 14:04:15', '2023-05-31 14:04:15');

-- --------------------------------------------------------

--
-- Table structure for table `proyash_notices`
--

CREATE TABLE `proyash_notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `notice_file` text NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proyash_notices`
--

INSERT INTO `proyash_notices` (`id`, `title`, `notice_file`, `date`, `created_at`, `updated_at`) VALUES
(2, 'অকুপেশনাল থেরাপিস্ট নিয়োগ-', 'frontEndAsset/proyash-notice/436578188.jpg', '2023-05-31', '2023-05-31 10:38:40', '2023-06-01 00:30:05'),
(4, 'Lorem ipsum dolor sit amet, sitelit', 'frontEndAsset/proyash-notice/863360949.jpeg', '2023-06-01', '2023-06-01 00:28:43', '2023-06-01 00:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `proyash_services`
--

CREATE TABLE `proyash_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `service_content` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proyash_services`
--

INSERT INTO `proyash_services` (`id`, `title`, `service_content`, `image`, `created_at`, `updated_at`) VALUES
(3, 'AFTER SCHOOL PROGRAM', 'After school programs (sometimes called OST or Out-of-School Time) serve children and youth of all.', 'frontEndAsset/proyash-services/1353908065.jpg', '2023-05-31 09:55:30', '2023-05-31 09:55:30'),
(4, 'INTERVENTION CLINIC', 'There are many support services helps to run the core programs to improve the quality.\r\n.', 'frontEndAsset/proyash-services/1558113946.jpg', '2023-05-31 09:57:55', '2023-05-31 10:00:37'),
(5, 'SPECIAL EDUCATION PROGRAM', 'In the Education System of Proyash Institute of Special education.', 'frontEndAsset/proyash-services/2090538276.jpg', '2023-05-31 09:59:01', '2023-05-31 09:59:01'),
(6, 'INCLUSIVE EDUCATIONAL PROGRAM', 'A comprehensive early childhood care and pre-primary education program is essential for.', 'frontEndAsset/proyash-services/1250919182.jpg', '2023-05-31 09:59:57', '2023-05-31 09:59:57');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5Y8TsgfEz3H1iEcfbQcqTmRuMBqjx1SsKidmZJ4y', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSGlOa3BZeUR1UzBSZWl2VFhRUWpRVVBrN2xCYVBGdzR0MmJUUkxRbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3QvcHJveWFzaC1pbnN0aXR1dGUvcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRqTGkwQk5QNjhQbjhydjY5Vmx1cVEuN1U4NFNUTVNCUHJrZk1oWUgyeWE2TUtFRmw0VVdMaSI7fQ==', 1685611712),
('CoIznKxio3HHezgOCehRmysYMa2N8WfxIcZAFPp5', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiS1RCR295dWJvRDI5OGxBSlZtYlE2aFRRalF1TUF5ZkYzU3FtNVYwSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTg6Imh0dHA6Ly9sb2NhbGhvc3QvcHJveWFzaC1pbnN0aXR1dGUvcHVibGljL3N0dWRlbnQtcmVnaXN0ZXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGpMaTBCTlA2OFBuOHJ2NjlWbHVxUS43VTg0U1RNU0JQcmtmTWhZSDJ5YTZNS0VGbDRVV0xpIjt9', 1685601117);

-- --------------------------------------------------------

--
-- Table structure for table `upoloadimages`
--

CREATE TABLE `upoloadimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upoloadimages`
--

INSERT INTO `upoloadimages` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'frontEndAsset/upload-gallery-image/1483039780.JPG', '2023-05-30 13:07:04', '2023-05-30 13:37:36'),
(3, 'frontEndAsset/upload-gallery-image/1113765244.JPG', '2023-05-31 23:22:24', '2023-05-31 23:22:24'),
(4, 'frontEndAsset/upload-gallery-image/934930689.JPG', '2023-05-31 23:23:18', '2023-05-31 23:23:18'),
(5, 'frontEndAsset/upload-gallery-image/509753144.JPG', '2023-05-31 23:34:25', '2023-05-31 23:34:25'),
(7, 'frontEndAsset/upload-gallery-image/1804136724.JPG', '2023-05-31 23:38:59', '2023-05-31 23:38:59'),
(8, 'frontEndAsset/upload-gallery-image/1859133445.JPG', '2023-05-31 23:39:12', '2023-05-31 23:39:12'),
(10, 'frontEndAsset/upload-gallery-image/622052330.JPG', '2023-05-31 23:40:48', '2023-05-31 23:40:48'),
(11, 'frontEndAsset/upload-gallery-image/1907181702.JPG', '2023-05-31 23:41:46', '2023-05-31 23:41:46');

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'proyashchattogram@gmail.com', NULL, '$2y$10$yjaFXdAi2fLTbpCdtyd09u2fJKIwesaisYVo4HPnxfuvWphNA7GM2', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-28 08:48:50', '2023-05-28 08:48:50'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$jLi0BNP68Pn8rv69VluqQ.7U84STMSBPrkfMhYH2ya6MKEFl4UWLi', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-28 10:15:16', '2023-05-28 10:15:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrative_people`
--
ALTER TABLE `administrative_people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_sliders`
--
ALTER TABLE `image_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_sliders`
--
ALTER TABLE `news_sliders`
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
-- Indexes for table `proyash_logos`
--
ALTER TABLE `proyash_logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proyash_notices`
--
ALTER TABLE `proyash_notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proyash_services`
--
ALTER TABLE `proyash_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `upoloadimages`
--
ALTER TABLE `upoloadimages`
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
-- AUTO_INCREMENT for table `administrative_people`
--
ALTER TABLE `administrative_people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `image_sliders`
--
ALTER TABLE `image_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news_sliders`
--
ALTER TABLE `news_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proyash_logos`
--
ALTER TABLE `proyash_logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `proyash_notices`
--
ALTER TABLE `proyash_notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proyash_services`
--
ALTER TABLE `proyash_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upoloadimages`
--
ALTER TABLE `upoloadimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
