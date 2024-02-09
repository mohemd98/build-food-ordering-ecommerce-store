-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 09, 2024 at 03:37 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `build-food-ordering-ecommerce-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'mohemd', 'hasn@gmail.com', '$2y$12$4sN0FM/fWmw80rpudTvrvuAEnc4CM4ruVCjj8Z54dFsEDwO..getW', '2024-02-08 15:47:35', '2024-02-08 15:47:35'),
(2, 'محمد رضا عبد الرحمن', 'random98app@gmail.com', '$2y$12$4sN0FM/fWmw80rpudTvrvuAEnc4CM4ruVCjj8Z54dFsEDwO..getW', '2024-02-08 16:53:10', '2024-02-08 16:53:10'),
(3, 'محمد رضا عبد الرحمن', 'mohemd.web@gmail.com', '$2y$12$wjykgyOQ/.J271Jr6oAbzOghvqJ7aeHyUmMjZEkev.ISgJ7bynxti', '2024-02-08 16:56:49', '2024-02-08 16:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `subtotal` int(100) NOT NULL,
  `pro_id` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `image`, `price`, `qty`, `user_id`, `subtotal`, `pro_id`, `created_at`, `updated_at`) VALUES
(10, 'meats', 'meats.jpg', '20', 1, 2, 20, 1, '2024-02-08 10:24:42', '2024-02-08 10:24:42');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'meats', 'meats.jpg', 'roast-leg', '2024-02-03 17:27:13', '2024-02-03 17:27:13'),
(2, 'fish', 'fish.jpg', 'fish-1', '2024-02-03 17:27:13', '2024-02-03 17:27:13'),
(3, 'vegetables', 'vegetables.jpg', 'french-fries', '2024-02-03 17:27:13', '2024-02-03 17:27:13'),
(4, 'fruits', 'fruits.jpg', 'apple', '2024-02-03 17:27:13', '2024-02-03 17:27:13'),
(9, 'frozen', 'frozen.jpg', 'carrot', '2024-02-03 17:27:13', '2024-02-03 17:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `town` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `order_notes` text NOT NULL,
  `status` varchar(255) DEFAULT 'proccessing',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `last_name`, `address`, `town`, `state`, `zip_code`, `email`, `phone_number`, `price`, `user_id`, `order_notes`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Diana Nelson', 'Romero', 'Velit minima quo ven', 'Aut veniam vel illo', 'Nihil quidem sunt c', 99370, 'vojodi@mailinator.com', '+1 (421) 375-1674', '110', 2, 'Consequatur Sit exp', 'deliverd', '2024-02-06 12:14:31', '2024-02-09 12:35:09'),
(2, 'محمد رضا', 'عبد الرحمن', 'd', 'd', 'd', 232, 'random98app@gmail.com', '32323', '110', 2, 'Enthusiastically productivate multifunctional web services via flexible process improvements. Dramatically utilize cooperative information without emerging strategic theme areas. Uniquely aggregate.', 'proccessing', '2024-02-07 15:44:01', '2024-02-07 15:44:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `exp_date` varchar(255) NOT NULL,
  `category_id` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `price`, `exp_date`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'meats', 'meats.jpg', 'Globally pontificate distinctive expertise whereas interactive human capital. Seamlessly impact installed base methods of empowerment whereas worldwide niches. Globally transition goal-oriented initiatives.', '20', '2025', 1, '2024-02-04 07:40:00', '2024-02-04 07:40:00'),
(2, 'apple', 'fruits.jpg', 'Competently synthesize installed base catalysts for change before cost effective opportunities. Completely maximize sustainable mindshare before extensible niche markets. Proactively morph quality.', '10', '2025', 4, '2024-02-04 07:40:00', '2024-02-04 07:40:00'),
(3, 'chickern', 'chickern.jpg', 'Globally pontificate distinctive expertise whereas interactive human capital. Seamlessly impact installed base methods of empowerment whereas worldwide niches. Globally transition goal-oriented initiatives.', '15', '2025', 1, '2024-02-04 07:40:00', '2024-02-04 07:40:00'),
(4, 'tomtaus', 'vegetables.jpg', 'Globally pontificate distinctive expertise whereas interactive human capital. Seamlessly impact installed base methods of empowerment whereas worldwide niches. Globally transition goal-oriented initiatives.', '10', '2025', 3, '2024-02-04 07:40:00', '2024-02-04 07:40:00'),
(5, 'fish', 'fish.jpg', 'Globally pontificate distinctive expertise whereas interactive human capital. Seamlessly impact installed base methods of empowerment whereas worldwide niches. Globally transition goal-oriented initiatives.', '10', '2025', 2, '2024-02-04 07:40:00', '2024-02-04 07:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` int(100) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Ryuk.full.2728159.jpg',
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `town`, `state`, `zip_code`, `image`, `phone_number`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mohemd', 'mohedm@gmail.com', NULL, '$2y$12$4sN0FM/fWmw80rpudTvrvuAEnc4CM4ruVCjj8Z54dFsEDwO..getW', NULL, NULL, NULL, NULL, 'Ryuk.full.2728159.jpg', NULL, NULL, '2024-02-02 08:28:10', '2024-02-02 08:28:10'),
(2, 'ali', 'ali@gmail.com', NULL, '$2y$12$m5sM0o.HiB0lvGPXjZYlhOZe2bgl.BnDlhmF.iA3XRZ6RrfTk/zzK', 'Conveniently evisculate bricks-and-clicks materials via out-of-the-box potentialities. Competently incubate adaptive platforms rather than B2B niche markets. Proactively pursue client-centric intellectual.', 'basra', 'iraq', 26441, 'Ryuk.full.2728159.jpg', '+1 (818) 283-9404', NULL, '2024-02-02 13:20:51', '2024-02-08 10:18:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
