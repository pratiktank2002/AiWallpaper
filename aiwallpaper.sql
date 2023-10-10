-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 11:46 AM
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
-- Database: `aiwallpaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `blog_url` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `blog_url`, `date`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Feature Shoot', 'Feature Shoot celebrates photographers as artists, delving into photography’s rich history and culture through the lenses of both the past and the future. This blog also explores what happens when things and people are photographed and “seen.”', 'feature shot.png', 'https://www.featureshoot.com/', '2023-10-02', NULL, '2023-10-02 13:13:37', '2023-10-02 13:13:37'),
(2, 'The Colossal', 'Starting in 2010, Christopher Jobson has built Colossal into one of the largest visual art, design, and culture blogs on the internet. Featuring over 5,000 articles celebrating artists of all sorts, Colossal’s photography section alone is well worth a visit.', 'colossal.png', 'https://www.thisiscolossal.com/', '2023-09-30', NULL, '2023-10-02 13:18:30', '2023-10-02 13:18:30'),
(3, 'Ignant', 'Need a break from the wordy analysis? Photography is all about the pictures, after all, which is where Ignant comes into play. Serving as a beautiful, curated Instagram-esque feed, Ignant’s photography section primarily features imagery along with brief introductions to the featured artists.', 'ignite-1.png', 'https://www.ignant.com/', '2023-10-01', NULL, '2023-10-02 13:21:27', '2023-10-02 13:21:27'),
(4, 'Behind the Shutter', 'When readers explore “Behind the Shutter”, they can expect to find an immense catalog of tutorials. Photographers of any level can find tutorials ranging from aperture setting to something more creative and complex, such as using color gels in portrait work.', 'behind the shutter-1.png', 'https://www.behindtheshutter.com/', '2023-10-05', NULL, '2023-10-05 10:30:07', '2023-10-05 10:30:07');

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
(5, '2023_09_28_113217_create_product_type_table', 1),
(6, '2023_09_28_113749_create_products_table', 2),
(7, '2023_09_29_051352_add_image_to_products_table', 3),
(8, '2023_10_02_061036_create_user_details_table', 4),
(9, '2023_10_02_070015_add_extra_columns_to_user_details_table', 5),
(10, '2023_10_02_131120_create_blogs_table', 6),
(11, '2023_10_03_080437_add_role_column_to_users_table', 7),
(12, '2023_10_03_112417_add_is_mobile_column_to_products_table', 8),
(13, '2023_10_09_075753_create_news_letters_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE `news_letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_letters`
--

INSERT INTO `news_letters` (`id`, `email`, `date`, `created_at`, `updated_at`) VALUES
(1, 'shakti@gmail.com', '2023-10-09', '2023-10-09 02:39:34', '2023-10-09 02:39:34'),
(2, 'abcd@123.com', '2023-10-09', '2023-10-09 02:46:30', '2023-10-09 02:46:30');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `category` bigint(20) UNSIGNED NOT NULL,
  `resolution` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `is_mobile` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image_url`, `category`, `resolution`, `file_type`, `status`, `is_mobile`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'santa cluse', 'This is a sample wallpaper description.', 'santa claus.png', 1, '1920x1080', 'png', '1', '0', '2023-09-28 07:42:26', '2023-09-29 00:26:13', NULL),
(2, 'old women', 'This is a sample wallpaper description.', 'old women.png', 1, '1920x1080', 'png', '1', '0', '2023-09-28 07:42:26', '2023-09-29 00:27:53', NULL),
(3, 'nature', 'This is a sample wallpaper description.', 'nature.jpg', 3, '1920x1080', 'JPEG', '1', '1', '2023-09-28 07:42:26', '2023-09-29 01:08:35', NULL),
(4, 'dark world', 'dark world imagination.', 'dark world.jpg', 3, '1920x1080', 'JPEG', '1', '1', '2023-09-28 07:42:26', '2023-09-29 01:09:40', NULL),
(5, 'feature mask ', 'mask from feature.', 'mask.png', 1, '1920x1080', 'png', '1', '0', '2023-09-28 07:42:26', '2023-09-29 01:11:01', NULL),
(6, 'book of imagination', 'books of imagination.', 'book.png', 1, '1920x1080', 'png', '1', '0', '2023-09-28 07:42:26', '2023-09-29 01:12:00', NULL),
(7, 'jesus chriest', 'jesus chriest in hevan.', 'jesus.png', 1, '1920x1080', 'png', '1', '0', '2023-09-28 07:42:26', '2023-09-29 01:14:27', NULL),
(8, 'rose drawing', 'black and white drawing of rose.', 'ai rose.png', 1, '628 * 628', 'png', '1', '0', '2023-09-28 07:42:26', '2023-09-29 01:16:01', NULL),
(9, 'party of 90\'s', 'party image from 90\'s.', 'party.png', 1, '1920x1080', 'png', '1', '0', '2023-09-28 07:42:26', '2023-09-29 01:18:06', NULL),
(10, 'feature table', 'table design from feature.', 'ai table.png', 1, '1920x1080', 'png', '1', '0', '2023-09-28 07:42:26', '2023-09-29 01:17:01', NULL),
(11, 'cloth shop', 'cloth shop from 90\'s.', 'ai room 1.png', 3, '1920x1080', 'png', '1', '0', '2023-09-28 07:42:26', '2023-09-29 01:37:39', NULL),
(12, 'jupiter', 'image of jupiter.', 'jupiter.png', 3, '1920x1080', 'png', '1', '0', '2023-09-28 07:42:26', '2023-09-29 01:41:05', NULL),
(13, 'Isabelle Adjani', 'portrait of Isabelle Adjani', 'Isabelle_Adjani.png', 1, '1920x1080', 'jpg', '1', '0', '2023-09-28 07:42:26', '2023-09-29 01:41:56', NULL),
(14, 'cute cat', 'cute cat on moon light', 'cute cat.png', 1, '1920x1080', 'png', '1', '0', '2023-09-28 07:42:26', '2023-09-29 01:42:44', NULL),
(15, 'cute teen', 'cute teen smiling.', 'cute teen.jpg', 1, '1920x1080', 'JPEG', '1', '1', '2023-09-28 07:42:26', '2023-09-29 01:52:26', NULL),
(16, 'real forest painting', 'painting of forest in night', 'real forest painting.png', 1, '1920x1080', 'png', '1', '0', '2023-09-28 07:42:26', '2023-09-29 01:53:42', NULL),
(17, 'old man', 'old man in village', 'village old man.jpg', 1, '1920x1080', 'png', '1', '0', '2023-09-28 07:42:26', '2023-09-29 01:54:56', NULL),
(18, 'nyc subway', 'sun set view of nyc subway', 'nyc subway.jpg', 1, '1920x1080', 'JPEG', '1', '1', '2023-09-28 07:42:26', '2023-09-28 07:42:26', NULL),
(19, 'half human', 'half human and half robot', 'half human.jpg', 1, '1920x1080', 'JPEG', '1', '0', '2023-09-28 07:42:26', '2023-09-28 07:42:26', NULL),
(20, 'beautifull house', 'beautifull house beside river in 3d', 'beautifull house.png', 1, '1920x1080', 'JPEG', '1', '0', '2023-09-28 07:42:26', '2023-09-28 07:42:26', NULL),
(21, 'boiling water', 'boiling water scene', 'rip boild water.png', 3, '1080 * 1080', 'png', '1', '0', '2023-09-29 00:36:31', '2023-09-29 00:36:31', NULL),
(22, 'game character', '3d game character', 'game vilan.png', 1, '1920x1080', 'JPEG', '1', '0', '2023-09-29 05:21:39', '2023-09-29 05:21:39', NULL),
(23, 'dr strange', '3d dr.strange', 'dr strange 3d.png', 1, '1920x1080', 'JPEG', '1', '0', '2023-09-29 05:21:39', '2023-09-29 05:21:39', NULL),
(24, 'butifull sunrise', 'beautifull sunrise', 'morning sunrise.jpg', 1, '1920x1080', 'JPEG', '1', '0', '2023-09-29 05:21:39', '2023-09-29 05:21:39', NULL),
(25, 'cartoon character', 'realstic cartoon character', 'cartoon character.png', 1, '1920x1080', 'JPEG', '1', '0', '2023-09-29 05:21:39', '2023-09-29 05:21:39', NULL),
(26, 'japanes village', 'imagine japanes village', 'japanes village.jpg', 1, '1920x1080', 'PNG', '1', '0', '2023-09-29 05:21:39', '2023-09-29 05:21:39', NULL),
(27, 'yoth working', 'yoth working on new inovation', 'yoth working.png', 1, '1920x1080', 'PNG', '1', '0', '2023-09-29 05:21:39', '2023-09-29 05:21:39', NULL),
(28, 'anime character', 'beautifull anime character', 'anime character.png', 1, '1920x1080', 'PNG', '1', '0', '2023-09-29 05:56:12', '2023-09-29 05:56:12', NULL),
(29, '3d game scene', '3d game scene with car', 'game lambo.png', 1, '1920x1080', 'PNG', '1', '0', '2023-09-29 05:56:12', '2023-09-29 05:56:12', NULL),
(30, 'fire in dark', 'fire torch in dark', 'fire in dark.png', 1, '1920x1080', 'PNG', '1', '1', '2023-09-29 05:56:12', '2023-09-29 05:56:12', NULL),
(31, 'dark fantecy character', '3d dark fantecy character', 'dark fantcy character.png', 1, '1920x1080', 'PNG', '1', '0', '2023-09-29 05:56:12', '2023-09-29 05:56:12', NULL),
(32, '3d person portrait', 'person beautifull portrait', '3d person.png', 1, '1920x1080', 'PNG', '1', '0', '2023-09-29 05:56:12', '2023-09-29 05:56:12', NULL),
(33, 'rainbow temple', '3d rainbow temple', 'rainbow tample.png', 1, '1920x1080', 'PNG', '1', '0', '2023-09-29 05:56:12', '2023-09-29 05:56:12', NULL),
(34, 'person shadow', 'person shadow in moon light', 'person shadow.jpg', 1, '1920x1080', 'JPEG', '1', '1', '2023-10-03 01:42:59', '2023-10-03 01:42:59', NULL),
(35, 'women drinking', 'women drinking in bar', 'women drinking.png', 1, '1920x1080', 'PNG', '1', '0', '2023-10-03 01:42:59', '2023-10-03 01:42:59', NULL),
(36, 'evil nun', 'evil nun in village at midnight', 'evil nun.jfif', 1, '1920x1080', 'JIFF', '1', '0', '2023-10-03 01:42:59', '2023-10-03 01:42:59', NULL),
(37, 'painted nature', 'painted nature in canvas', 'painted nature.jpg', 1, '1920x1080', 'JPEG', '1', '1', '2023-10-03 01:42:59', '2023-10-03 01:42:59', NULL),
(38, 'bee art', 'bee art', 'bea art.jpg', 1, '1920x1080', 'JPEG', '1', '0', '2023-10-03 01:42:59', '2023-10-03 01:42:59', NULL),
(39, 'anime style multiverse', 'anime style multiverse imagination', 'anime-style_multiverse.png', 1, '1920x1080', 'PNG', '1', '0', '2023-10-03 01:51:46', '2023-10-03 01:51:46', NULL),
(40, 'woman on bench', 'woman seating on bench', 'woman on bench.png', 1, '1920x1080', 'PNG', '1', '0', '2023-10-03 01:51:46', '2023-10-03 01:51:46', NULL),
(41, 'pertra city', 'pertra city in mountain', 'pertra city.png', 1, '1920x1080', 'PNG', '1', '0', '2023-10-03 01:51:46', '2023-10-03 01:51:46', NULL),
(42, 'prince kissing a toad', 'prince kissing a toad', 'prince_kissing_a_toad.png', 1, '1920x1080', 'PNG', '1', '0', '2023-10-03 01:51:46', '2023-10-03 01:51:46', NULL),
(43, 'apple park 3d cartton', 'apple park in 3d cartton', 'apple park 3d cartton.png', 1, '1920x1080', 'PNG', '1', '0', '2023-10-03 01:51:46', '2023-10-03 01:51:46', NULL),
(44, 'cute panda', 'cute panda eating.', 'panda.jpg', 1, '1720*1720', 'JPG', '1', '1', '2023-10-03 10:22:32', '2023-10-03 10:22:32', NULL),
(45, 'astronaut mouse', 'mouse in astronaut suit', 'mouse astronaut.png', 1, '1024 *1024', 'PNG', '1', '0', '2023-10-03 10:24:56', '2023-10-03 10:24:56', NULL),
(46, 'architecture designed', 'designed by architecture', 'architecture_designed.png', 1, '626 * 626', 'PNG', '1', '0', '2023-10-03 10:27:47', '2023-10-03 10:27:47', NULL),
(47, 'flurry cat', 'cute flurry cat', 'fluury cat.jpg', 1, '4096 * 5446', 'JPG', '1', '1', '2023-10-03 11:05:33', '2023-10-03 11:05:33', NULL),
(48, 'town in mountain', 'design of town in mountain', 'architecture building.png', 3, '626 * 626', 'PNG', '1', '0', '2023-10-03 11:07:24', '2023-10-03 11:07:24', NULL),
(49, 'pink girl', 'girl in pink dress', 'cute girl.jpg', 1, '1720 * 3728', 'JPG', '1', '1', '2023-10-03 11:11:18', '2023-10-03 11:11:18', NULL),
(50, 'deer', 'deer in forest', 'deer.jpg', 3, '4096 * 5464', 'JPG', '1', '1', '2023-10-03 11:12:59', '2023-10-03 11:12:59', NULL),
(51, 'baby penguin', 'baby penguin smiling', 'panguine.jpg', 3, '1720 * 3728', 'JPG', '1', '1', '2023-10-03 11:15:32', '2023-10-03 11:15:32', NULL),
(52, 'girl with red hair', 'girl with red hair', 'red hair girl.jpg', 1, '1720 * 3728', 'JPG', '1', '1', '2023-10-03 11:17:11', '2023-10-03 11:17:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'person', '2023-09-28 11:33:32', '2023-09-28 11:33:32'),
(2, 'car', '2023-09-28 11:33:49', '2023-09-28 11:33:49'),
(3, 'nature', '2023-09-28 11:34:00', '2023-09-28 11:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pratik tank', 'aiwallpaper@gmail.com', 'admin', NULL, '$2y$10$Ui/QvhdyBq5MFp/muzapJ.O59nvZqjoupozv53oGYZUg7aG.SYFVG', 'bgHL5gWFbptlzn086tNCPaA0wjPJ3sLSM91bJPMslPgIPEihhyVR7jSKzDVs', '2023-09-28 23:25:04', '2023-09-28 23:25:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `image_download_count` int(11) NOT NULL,
  `image_genrate_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `name`, `phone_number`, `address`, `country`, `state`, `city`, `image_download_count`, `image_genrate_count`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'pratik tank', 0, '', '', '', '', 9, 5, '2023-10-02 06:26:20', '2023-10-09 01:14:11', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
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
-- Indexes for table `news_letters`
--
ALTER TABLE `news_letters`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_foreign` (`category`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_details_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_foreign` FOREIGN KEY (`category`) REFERENCES `product_type` (`id`);

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
