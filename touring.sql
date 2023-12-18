-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 04:36 AM
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
-- Database: `touring`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon_path`, `created_at`, `updated_at`) VALUES
(1, 'Adventure', 's', '2023-12-13 04:15:51', '2023-12-13 04:15:51'),
(2, 'Farm', NULL, '2023-12-13 04:18:01', '2023-12-13 04:18:01'),
(3, 'Resort', NULL, '2023-12-13 04:18:12', '2023-12-13 04:18:12'),
(4, 'Restaurant', NULL, '2023-12-13 04:19:11', '2023-12-13 04:19:11'),
(5, 'Scenic View', NULL, '2023-12-13 04:19:40', '2023-12-13 04:19:40');

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
(5, '2023_12_13_042438_create_categories_table', 1),
(9, '2023_12_13_063418_create_places_table', 2),
(10, '2023_12_13_100055_create_place_images_table', 2),
(13, '2023_12_15_054355_create_views_table', 4),
(14, '2023_12_15_044444_create_reviews_table', 5);

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
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `guideline` varchar(255) NOT NULL,
  `view_url` varchar(255) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `category_id`, `user_id`, `name`, `address`, `description`, `guideline`, `view_url`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, 'Cowboy’s Camp', 'Kiliog, Libona Bukidnon', '<p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\">Cowboy’s Camp is a charming tourist spot nestled in the heart of Libona, Bukidnon, Philippines. This rustic destination offers visitors a glimpse into the Wild West, Filipino style. The main attraction of Cowboy’s Camp is its Western-themed ambiance, which immerses guests in a world of cowboys, horses, and the spirit of adventure. Visitors can expect to find wooden cabins adorned with cowboy memorabilia, creating a nostalgic atmosphere. The camp also allow campfire sessions where visitors can bond over stories, songs, and marshmallow roasting under the starry Bukidnon sky. With its picturesque landscapes, Western charm, and diverse recreational options, Cowboy’s Camp in Libona, Bukidnon, promises a unique and memorable adventure for travelers seeking a taste of cowboy culture in the heart of the Philippines.</p><h3 class=\"wp-block-heading\" style=\"margin-top: 20px; margin-bottom: 10px; font-family: Raleway; line-height: 1.1; color: rgb(34, 34, 34); font-size: 24px;\"><em><strong style=\"font-weight: bold;\">Entrance Fee:</strong></em></h3><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\"><img decoding=\"async\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t86/1.5/16/1f4cd.png\" alt=\"📍\" width=\"16\" height=\"16\" style=\"border: 0px; max-width: 100%;\"><em><strong style=\"font-weight: bold;\">20 pesos – day time</strong></em></p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\"><img decoding=\"async\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t86/1.5/16/1f4cd.png\" alt=\"📍\" width=\"16\" height=\"16\" style=\"border: 0px; max-width: 100%;\"><strong style=\"font-weight: bold;\"><em>50 pesos – overnight</em></strong></p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\"><img decoding=\"async\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t86/1.5/16/1f4cd.png\" alt=\"📍\" width=\"16\" height=\"16\" style=\"border: 0px; max-width: 100%;\"><em><strong style=\"font-weight: bold;\">10 pesos – environmental fee (additional)</strong></em></p><h3 class=\"wp-block-heading\" style=\"margin-top: 20px; margin-bottom: 10px; font-family: Raleway; line-height: 1.1; color: rgb(34, 34, 34); font-size: 24px;\"><em><strong style=\"font-weight: bold;\">Additional Reservations:</strong></em></h3><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\"><em><strong style=\"font-weight: bold;\">Tent: •300 pesos (3-4 persons)</strong></em></p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\"><em><strong style=\"font-weight: bold;\">Firewood (bonfire/cooking) •50 pesos per bundle</strong></em></p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\"><em><strong style=\"font-weight: bold;\">Water (CR) •200 pesos per container</strong></em></p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\"><em><strong style=\"font-weight: bold;\">Tourguide •300 pesos per group</strong></em></p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\"><em><strong style=\"font-weight: bold;\">Packers/porter •300 pesos one way, 500 pesos back and forth</strong></em></p><h3 class=\"wp-block-heading\" style=\"margin-top: 20px; margin-bottom: 10px; font-family: Raleway; line-height: 1.1; color: rgb(34, 34, 34); font-size: 24px;\"><em><strong style=\"font-weight: bold;\">Tandem Paragliding adventure:</strong></em></h3><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\"><em><strong style=\"font-weight: bold;\">&nbsp;3,500 pesos including GoPro documentation</strong></em></p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\"><em><strong style=\"font-weight: bold;\">Flying time is minimum of 8-15 minutes</strong></em></p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\"><em><strong style=\"font-weight: bold;\">Advised to book atleast 2-3 days before your desired date of the certain activity.</strong></em></p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\"><em><strong style=\"font-weight: bold;\">FOR TANDEM PASSENGERS</strong></em></p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\"><em><strong style=\"font-weight: bold;\">• Wear comfortable clothing (long pants and sleeves are advisable but not required)</strong></em></p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\"><em><strong style=\"font-weight: bold;\">• Wear proper footwear- running shoes or any closed footwear is acceptable (flipflops or any open footwear is not allowed)</strong></em></p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\"><em><strong style=\"font-weight: bold;\">• Minimum age is 12 years old</strong></em></p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\"><em><strong style=\"font-weight: bold;\">• Maximum weight is 80kg</strong></em></p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; line-height: 29px; color: rgb(112, 112, 112); font-family: Raleway;\"><em><strong style=\"font-weight: bold;\">• Passengers with any heart condition is discouraged.</strong></em></p>', 'iTSnRYbgBE.png', 'https://tour.panoee.com/iframe/6527feb34eb4d666b2301350', '8.349322694206242', '124.71217009532282', '2023-12-14 11:21:23', '2023-12-14 11:21:23'),
(3, 4, 1, 'Chelly’s Restaurant', 'Zone 1, Kili-og Libona Bukidnon', '<p><span style=\"color: rgb(112, 112, 112); font-family: Raleway;\">Chelly’s Restaurant is a charming and popular tourist spot nestled in the heart of Libona, Bukidnon. This quaint establishment offers visitors a delightful culinary experience infused with the rich cultural flavors of the Philippines. As you step into Chelly’s Restaurant, you’ll be greeted by a warm and inviting atmosphere. The restaurant boasts a rustic yet cozy interior, adorned with local artworks and traditional decor that reflect the vibrant Bukidnon culture. The restaurant also prides itself on using locally sourced ingredients, ensuring freshness and supporting the community. As you savor your meal, you can enjoy breathtaking views of the surrounding natural beauty that Bukidnon has to offer, making your dining experience even more memorable. Whether you’re a local or a traveler exploring Bukidnon, Chelly’s Restaurant provides a delightful blend of delicious food, cultural ambiance, and scenic surroundings, making it a must-visit tourist spot in the area. It’s the perfect place to immerse yourself in the flavors and culture of Bukidnon while enjoying a memorable meal.</span><br></p>', 'P74tNZLfQW.png', 'https://tour.panoee.com/iframe/6527f0b84eb4d6af533012b4', '8.341949905529248', '124.70227042415821', '2023-12-14 11:52:56', '2023-12-14 11:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `place_images`
--

CREATE TABLE `place_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `place_images`
--

INSERT INTO `place_images` (`id`, `place_id`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 2, 'krvrEMQxFo.jpg', '2023-12-14 11:21:23', '2023-12-14 11:21:23'),
(2, 2, '3YUrqfBOgy.jpg', '2023-12-14 11:21:23', '2023-12-14 11:21:23'),
(3, 2, 'RKoaTpdKy5.jpg', '2023-12-14 11:21:23', '2023-12-14 11:21:23'),
(4, 2, 'RFzVLgXXgY.jpg', '2023-12-14 11:21:23', '2023-12-14 11:21:23'),
(5, 2, 'sNcJwFWGi0.jpg', '2023-12-14 11:21:23', '2023-12-14 11:21:23'),
(6, 2, 'hhnQQjsxPm.jpg', '2023-12-14 11:21:23', '2023-12-14 11:21:23'),
(7, 2, 'hwRWvimYPC.jpg', '2023-12-14 11:21:23', '2023-12-14 11:21:23'),
(8, 3, 'XCuv2G33YZ.jpg', '2023-12-14 11:52:56', '2023-12-14 11:52:56'),
(9, 3, 'rgfuBesbbV.jpg', '2023-12-14 11:52:56', '2023-12-14 11:52:56'),
(10, 3, '5Ju9sy9YVZ.jpg', '2023-12-14 11:52:56', '2023-12-14 11:52:56'),
(11, 3, 'kbhwNRclbJ.jpg', '2023-12-14 11:52:56', '2023-12-14 11:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 0,
  `review` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `place_id`, `user_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(2, 3, 3, 5, 'good one', '2023-12-16 02:57:30', '2023-12-16 02:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `google_id`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Smith', 'admin@gmail.com', NULL, '$2y$12$nx5Rn9e0qFZ/mFAVFq54V.P1QH4ff2vZbsg8yfU4ZdqL9NENhQavu', NULL, 1, NULL, '2023-12-13 02:48:39', '2023-12-13 02:48:39'),
(2, 'Administrator', 'admin@admin.com', NULL, '$2y$12$kDnFZsNdpvKFBzEgCXnkGO4X04NXtqIGjG3.FXcVDIH6InFN4wyr2', NULL, 1, NULL, '2023-12-13 03:07:06', '2023-12-13 03:07:06'),
(3, 'Mphatso Mlenga', 'mphatsomlenga2021@gmail.com', NULL, NULL, '105374617055100424250', 0, NULL, '2023-12-15 07:35:26', '2023-12-15 07:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `viewable_type` varchar(255) NOT NULL,
  `viewable_id` bigint(20) UNSIGNED NOT NULL,
  `visitor` text DEFAULT NULL,
  `collection` varchar(255) DEFAULT NULL,
  `viewed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `viewable_type`, `viewable_id`, `visitor`, `collection`, `viewed_at`) VALUES
(1, 'App\\Models\\Place', 3, '7oFHnzfIkfapknilmSco5CLWjg39KzsvToP7BQHRrXWLk6VSuLN5RjBIYFLDxfGiQ2e6CIU7SxDpbSAc', NULL, '2023-12-15 03:47:43'),
(2, 'App\\Models\\Place', 2, '7oFHnzfIkfapknilmSco5CLWjg39KzsvToP7BQHRrXWLk6VSuLN5RjBIYFLDxfGiQ2e6CIU7SxDpbSAc', NULL, '2023-12-15 03:48:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`),
  ADD KEY `places_category_id_foreign` (`category_id`),
  ADD KEY `places_user_id_foreign` (`user_id`);

--
-- Indexes for table `place_images`
--
ALTER TABLE `place_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place_images_place_id_foreign` (`place_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_place_id_foreign` (`place_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_viewable_type_viewable_id_index` (`viewable_type`,`viewable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `place_images`
--
ALTER TABLE `place_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `places_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `places_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `place_images`
--
ALTER TABLE `place_images`
  ADD CONSTRAINT `place_images_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `places` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `places` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
