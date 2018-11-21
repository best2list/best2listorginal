-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 10:00 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `best2list`
--

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('passive','active') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `country` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `image_path` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `user_id`, `title`, `summary`, `description`, `email`, `zip_code`, `phone`, `fax`, `website`, `address`, `city`, `location`, `type`, `status`, `country`, `parent_id`, `image_path`, `created_at`, `updated_at`) VALUES
(4, 1, 'UPRIGHT LAW - BANKRUPTCY ATTORNEYS', 'انجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرس', 'انجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرس', 'kamran@gmail.com', '212554', '22121586652', '22121586652', 'www.kizhan.com', 'تهران - میدان نوبنیاد - خ کوهستان سوم', 'najaf', 'تهران', 'active', 0, 4, NULL, 'images/business/2018/11/18/2018_11_18_09_30_26_kamran.jpg', '2018-11-11 08:16:48', '2018-11-18 06:00:26'),
(10, 1, 'Law Office of Richard Cherry', 'انجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرس', 'انجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرس', 'kamran@gmail.com', '212554', '22121586652', '22121586652', 'www.kizhan.com', 'تهران - میدان نوبنیاد - خ کوهستان سوم', 'todz', '3687346374674663743846', 'active', 0, 2, NULL, NULL, '2018-11-12 06:58:43', '2018-11-13 06:15:17'),
(12, 1, 'Financial Counseling Center', 'انجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرس', 'انجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرس', 'kamran@gmail.com', '212554', '22121586652', '22121586652', 'www.kizhan.com', 'تهران - میدان نوبنیاد - خ کوهستان سوم', 'karbala', '3687346374674663743846', 'active', 0, 4, NULL, NULL, '2018-11-12 07:11:33', '2018-11-13 06:15:58'),
(13, 1, 'dominguez firm', 'انجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرس', 'انجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرس', 'kamran@gmail.com', '212554', '22121586652', '22121586652', 'www.kizhan.com', 'تهران - میدان نوبنیاد - خ کوهستان سوم', 'mousel', 'تهران', 'passive', 0, 4, NULL, NULL, '2018-11-12 07:18:38', '2018-11-17 10:09:41'),
(14, 2, 'armani', 'انجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرس', 'انجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرس', 'kamran@gmail.com', '212554', '22121586652', '22121586652', 'www.kizhan.com', 'تهران - میدان نوبنیاد - خ کوهستان سوم', 'baghdad', '3687346374674663743846', 'active', 0, 4, NULL, NULL, '2018-11-13 03:50:27', '2018-11-13 06:02:49'),
(15, 2, 'test 3', 'انجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرس', 'انجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرس', 'kamran@gmail.com', '212554', '22121586652', '22121586652', 'www.kizhan.com', 'تهران - میدان نوبنیاد - خ کوهستان سوم', 'warsaw', '3687346374674663743846', 'active', 0, 2, NULL, NULL, '2018-11-13 03:51:34', '2018-11-13 06:04:43'),
(24, 1, 'انجمن تنیس روی میز قبرس', 'انجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرس', 'انجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرس', 'kamran@gmail.com', '212554', '22121586652', '22121586652', 'www.kizhan.com', 'تهران - میدان نوبنیاد - خ کوهستان سوم', 'تهران', '3687346374674663743846', 'passive', 0, 2, 12, '\\images/business/2018/11/17/2018_11_17_08_35_06_kamran.jpg', '2018-11-17 05:05:06', '2018-11-17 05:05:06'),
(25, 1, 'انجمن تنیس روی میز قبرس', 'انجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرس', 'انجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرسانجمن تنیس روی میز قبرس', 'kamran@gmail.com', '212554', '22121586652', '22121586652', 'www.kizhan.com', 'تهران - میدان نوبنیاد - خ کوهستان سوم', 'تهران', '3687346374674663743846', 'active', 0, 2, 12, '/images/business/ 2018/11/17/2018_11_17_08_41_49_kamran.jpg', '2018-11-17 05:11:49', '2018-11-17 05:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `businesses_to_categories`
--

CREATE TABLE `businesses_to_categories` (
  `business_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses_to_categories`
--

INSERT INTO `businesses_to_categories` (`business_id`, `category_id`) VALUES
(10, 1),
(10, 2),
(10, 3),
(12, 1),
(12, 2),
(12, 3),
(13, 2),
(14, 1),
(15, 1),
(15, 2),
(15, 3),
(24, 1),
(24, 2),
(24, 3),
(24, 4),
(24, 5),
(24, 6),
(25, 2),
(25, 3),
(25, 4);

-- --------------------------------------------------------

--
-- Table structure for table `business_images`
--

CREATE TABLE `business_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `business_id` int(10) UNSIGNED NOT NULL,
  `image_path` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_images`
--

INSERT INTO `business_images` (`id`, `business_id`, `image_path`, `created_at`, `updated_at`) VALUES
(15, 4, '/images/businessImages/2018/11/18/2018_11_18_09_30_17_4.jpg', '2018-11-18 06:00:17', '2018-11-18 06:00:17'),
(16, 4, '/images/businessImages/2018/11/18/2018_11_18_09_30_21_4.jpg', '2018-11-18 06:00:21', '2018-11-18 06:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'sport', NULL, '2018-11-14 20:30:00', '2018-11-14 20:30:00'),
(2, 'colture', NULL, '2018-11-29 20:30:00', '2018-11-29 20:30:00'),
(3, 'business', NULL, '2018-11-11 06:54:14', '2018-11-11 06:54:14'),
(4, 'football', 1, '2018-11-11 06:54:34', '2018-11-11 06:54:34'),
(5, 'tourism', NULL, '2018-11-11 06:56:35', '2018-11-11 06:56:35'),
(6, 'bascketball', 1, '2018-11-15 05:10:59', '2018-11-15 05:10:59'),
(7, 'handball', 1, '2018-11-15 05:11:20', '2018-11-15 05:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` enum('passive','active') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `business_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'hello', 4, 1, 'passive', '2018-11-20 08:57:52', '2018-11-20 08:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `flag`, `created_at`, `updated_at`) VALUES
(2, 'poland', 'poland', '2018-11-15 20:30:00', '2018-11-15 20:30:00'),
(4, 'iraq', 'iraq', '2018-11-11 06:38:28', '2018-11-11 06:38:28'),
(8, 'usa', 'images/country/2018_11_17_09_36_59_usa.jpg', '2018-11-17 06:06:59', '2018-11-17 06:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(10) UNSIGNED NOT NULL,
  `business_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `business_id`, `user_id`, `created_at`, `updated_at`) VALUES
(14, 25, 1, '2018-11-20 10:13:06', '2018-11-20 10:13:06'),
(16, 15, 1, '2018-11-20 10:20:08', '2018-11-20 10:20:08'),
(19, 13, 1, '2018-11-20 10:21:24', '2018-11-20 10:21:24'),
(21, 14, 1, '2018-11-20 10:30:17', '2018-11-20 10:30:17'),
(22, 12, 1, '2018-11-20 10:30:19', '2018-11-20 10:30:19'),
(23, 4, 1, '2018-11-21 02:28:13', '2018-11-21 02:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_10_29_092627_create_countries_table', 1),
(2, '2018_10_29_092628_create_users_table', 1),
(3, '2018_10_29_092629_create_businesses_table', 1),
(4, '2018_10_29_092755_create_categories_table', 1),
(5, '2018_10_29_093058_create_comments_table', 1),
(6, '2018_10_29_093423_create_business_categories_table', 1),
(7, '2018_11_11_135013_create_business_categories_table', 2),
(8, '2018_11_12_063003_create_businesses_to_categories', 3),
(9, '2018_11_14_090511_create_comments_table', 4),
(10, '2018_11_15_064405_create_comments_table', 5),
(11, '2018_11_15_065521_create_comments_table', 6),
(12, '2014_10_12_100000_create_password_resets_table', 7),
(14, '2018_11_17_100110_create_business_images_table', 8),
(15, '2018_11_18_103014_create_favorites_table', 9),
(16, '2018_11_21_073840_create_slideshows_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slideshows`
--

CREATE TABLE `slideshows` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_path` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altTag` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slideshows`
--

INSERT INTO `slideshows` (`id`, `image_path`, `altTag`, `title`, `created_at`, `updated_at`) VALUES
(3, '/images/slideImage/2018/11/21/2018_11_21_08_02_42.jpg', 'Koala', 'Koala', '2018-11-21 04:32:42', '2018-11-21 04:32:42'),
(4, '/images/slideImage/2018/11/21/2018_11_21_08_20_51.jpg', NULL, NULL, '2018-11-21 04:50:51', '2018-11-21 04:50:51'),
(6, '/images/slideImage/2018/11/21/2018_11_21_08_55_26.jpg', NULL, NULL, '2018-11-21 05:25:26', '2018-11-21 05:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` enum('active','passive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'passive',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `phone`, `password`, `access`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kamran', 'kamran', 'kami', 'kamran@gmail.com', '09364526912', '$2y$10$VqY4cGjHEZSPDYNReewyF.0UkjAEohWQ4QGAgnqegBhVGZqSriyjy', 'user', 'passive', 'OxnENlfWtUAwGu4hcwGUHgkYIYMrPkb4xBtuDbcErzjhzb6secwxhPYB3ftk', '2018-11-05 07:00:17', '2018-11-05 07:00:17'),
(2, 'arman', 'arman', 'armani', 'arman@gmail.com', '0935852741', '$2y$10$0VqvU5mLpqzyYqCNMtb9Xewy2Pe/ioSNdBF3MxIFQmE2Vwsh1Y1Ri', 'user', 'passive', 'BpZ0jbSBncXCsXL5Aj6omXS048As2EVnSPfPikYmj6qOEBwWZ95WqjBpkPh1', '2018-11-13 03:48:30', '2018-11-13 03:48:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `businesses_id_unique` (`id`),
  ADD KEY `businesses_user_id_foreign` (`user_id`),
  ADD KEY `businesses_parent_id_foreign` (`parent_id`),
  ADD KEY `businesses_country_foreign` (`country`);

--
-- Indexes for table `businesses_to_categories`
--
ALTER TABLE `businesses_to_categories`
  ADD UNIQUE KEY `businesses_to_categories_business_id_category_id_unique` (`business_id`,`category_id`),
  ADD KEY `businesses_to_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `business_images`
--
ALTER TABLE `business_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `business_images_business_id_foreign` (`business_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_id_unique` (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `comments_id_unique` (`id`),
  ADD KEY `comments_business_id_foreign` (`business_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_id_unique` (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_business_id_foreign` (`business_id`),
  ADD KEY `favorites_user_id_foreign` (`user_id`);

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
-- Indexes for table `slideshows`
--
ALTER TABLE `slideshows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id_unique` (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `business_images`
--
ALTER TABLE `business_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slideshows`
--
ALTER TABLE `slideshows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `businesses`
--
ALTER TABLE `businesses`
  ADD CONSTRAINT `businesses_country_foreign` FOREIGN KEY (`country`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `businesses_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `businesses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `businesses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `businesses_to_categories`
--
ALTER TABLE `businesses_to_categories`
  ADD CONSTRAINT `businesses_to_categories_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `businesses_to_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `business_images`
--
ALTER TABLE `business_images`
  ADD CONSTRAINT `business_images_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
