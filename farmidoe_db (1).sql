-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2024 at 04:13 PM
-- Server version: 10.6.16-MariaDB-cll-lve-log
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmidoe_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `additionalPhone` varchar(255) DEFAULT NULL,
  `isPrimary` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `fullname`, `address`, `city`, `state`, `phone`, `additionalPhone`, `isPrimary`) VALUES
(3, 2, 'Richard Affiong', '106 old odukpani road ', 'Calabar ', 'cross river', '09077844542', '', 1),
(4, 2, 'Richard Effiong', '12 allen avenue', 'Ikeja', 'Lagos', '09097744111', '08073121111', 0),
(5, 4, 'emama', '24 anating road', 'calabar', 'crossriver', '0805825316', '+2348149678', 1),
(7, 7, 'Marcus Oladapo', '11c Alhaji Yekini Olawale Bakare Street, Royal Pine Estate, Orchid Road, Lekki', 'Eti-Osa', 'Lagos State', '08024543272', '', 1),
(9, 11, 'Akanji Julius ', 'Olorunsogo Esuyare', 'Ife East', 'Osun State', '08030858302', '08125376198', 1),
(10, 10, 'Richard ', 'gdejds', 'Bende', 'Edo State', '09063451244', '83646', 1),
(11, 15, 'Eyo Akak ', 'Marian ', 'Calabar South', 'Cross River State', '09060047882', '', 1),
(12, 14, 'Ene Henry', '100 Marian road', 'Calabar South', 'Cross River State', '08181394644', '', 1),
(13, 18, 'Adedayo', '11c, alahaji Yekini Olawale Street ', 'Lagos', 'Lagos', '09074017375', '', 1),
(14, 19, 'Marcus Oladapo', '11c Alhaji Yekini Olawale Bakare Street, Royal Pine Estate, Orchid Road, Lekki', 'City', 'Lagos State', '08024543272', '', 1),
(15, 20, 'Ribetan Nanjwan ', 'The place where I live', 'Amuwo-Odofin', 'Lagos State', '09036619934', '', 1),
(16, 1, 'Richard Offiong', '109 old odukpani ', 'Agege', 'Lagos State', '09063784512', '', 1),
(17, 16, 'Lawrence Offiong ', 'Ikotishie ', 'Victoria Island', 'Lagos State', '08133333333', '', 1),
(18, 7, 'Marcus Oladapo ', '8 Cooperative Street, Toro Road, Modakeke ', 'Ife East', 'Osun State', '08024543272', '', 0),
(19, 36, 'Layi Olaleru', '17A Ozumba Mbadiwe Avenue', 'Eti Osa', 'Lagos State', '07038954231', '', 0),
(20, 36, 'Layi Olaleru', '7 Ojoo Road', 'Ibadan North', 'Oyo State', '07038954231', '', 0),
(21, 36, 'Layi Olaleru', '31 Musa Aliyu Road', 'Gombe', 'Gombe State', '07038884331', '', 0),
(22, 36, 'Layi Olaleru ', '33, Musa Yar Adua Crescent', 'Gwagwalada', 'FCT', '07018824561', '', 1),
(23, 29, 'Adedayo', '11c, Yekini Olawale Street Royal Pine Estate Orchid Road Lekki', 'Lekki', 'Lagos State', '09074017375', '', 1),
(24, 22, 'Emeka Okafor', 'No 6 CTC ROAD 8MILES', 'Lagos Island', 'Lagos', '90000000', NULL, 1),
(25, 39, 'Marcus Oladapo ', '11c Alhaji Yekini Olawale Bakare Street, Orchid Road ', 'Lekki', 'Lagos State', '08024543272', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `type`, `mobile`, `email`, `email_verified_at`, `password`, `image`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '07039730125', 'admin@admin.com', NULL, '$2y$12$jqFS5kYmb7COfYqrrjK06e4qIMKxab0UkqL4tpOP1p5Uq2Vesln9G', '', 1, NULL, NULL, '2023-11-08 15:29:52'),
(2, 'Reo', 'subadmin', '08039730190', 'subadmin@admin.com', NULL, '$2y$10$2TO8X7cWKwLomnByLFioBuIUdAH5ONw9HpTJGGppp.sny0Hw1WOY6', '', 1, NULL, NULL, NULL),
(3, 'John', 'subadmin', '09039730144', 'john@admin.com', NULL, '$2y$10$2TO8X7cWKwLomnByLFioBuIUdAH5ONw9HpTJGGppp.sny0Hw1WOY6', '', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `prod_id`, `qty`) VALUES
(27, 9, 2, 1),
(28, 9, 1, 1),
(133, 23, 4, 1),
(134, 26, 4, 1),
(135, 26, 1, 1),
(136, 23, 1, 1),
(164, 23, 6, 1),
(165, 14, 2, 1),
(166, 14, 5, 1),
(167, 14, 6, 1),
(179, 20, 1, 1),
(208, 36, 9, 1),
(209, 36, 5, 1),
(210, 36, 3, 1),
(213, 7, 53, 1),
(214, 1, 1, 1),
(215, 37, 10, 1),
(216, 37, 8, 1),
(217, 37, 289, 1),
(219, 29, 2, 1),
(220, 29, 7, 1),
(221, 20, 12, 1),
(223, 39, 71, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `category_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Soup & Ingredients', '25099.png', 1, NULL, '2024-01-22 01:30:14'),
(2, 'Grains', '2645.png', 1, NULL, '2023-12-27 02:44:34'),
(3, 'Foodstuffs', '91315.png', 1, NULL, '2024-01-27 14:21:22'),
(4, 'Fruits', '32600.png', 1, NULL, '2023-12-27 02:59:57'),
(5, 'Spices & herbs', '52749.png', 1, NULL, '2024-01-22 01:30:33'),
(6, 'Dairy products', '60873.png', 1, NULL, '2023-12-27 03:00:40'),
(7, 'Nuts and Oilseeds', '53402.png', 1, NULL, '2023-12-27 03:02:04'),
(11, 'Meat, Poultry & Seafood', '12090.png', 1, '2023-12-22 14:16:27', '2024-01-27 14:19:20');

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
-- Table structure for table `lagos_shipping`
--

CREATE TABLE `lagos_shipping` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lagos_shipping`
--

INSERT INTO `lagos_shipping` (`id`, `city`, `cost`) VALUES
(1, 'Ikeja', 3500),
(2, 'Lekki', 3500),
(3, 'Victoria Island', 3500),
(4, 'Magodo', 3500),
(5, 'Ijora', 3500),
(6, 'Oshodi', 3500),
(7, 'Eti-Osa', 3500),
(8, 'Mushin', 3500),
(9, 'Agege', 3500),
(10, 'Ikorodu', 3500),
(11, 'Epe', 3500),
(12, 'Amuwo-Odofin', 3500),
(13, 'Surulere', 3500),
(14, 'Ojo', 3500),
(15, 'Badagry', 3500),
(16, 'Lagos Island', 3500),
(17, 'Ajah', 3500),
(18, 'Eko Atlantic', 5000),
(19, 'Banana Island', 5000),
(20, 'Apapa', 3500),
(21, 'Yaba', 3500),
(22, 'Tarkwa Bay Beach', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `prod_id`) VALUES
(17, 39, 145),
(3, 1, 2),
(5, 7, 44),
(6, 7, 48),
(7, 7, 51),
(8, 7, 10),
(9, 7, 211),
(10, 7, 214),
(11, 16, 4),
(12, 16, 29),
(16, 22, 1),
(14, 29, 7),
(15, 29, 2),
(19, 39, 71);

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
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_03_17_172759_create_admins_table', 1),
(7, '2021_03_19_215800_create_sections_table', 1),
(8, '2021_03_21_035619_create_categories_table', 1),
(9, '2021_03_26_002502_create_products_table', 1),
(10, '2021_03_31_042236_create_product_attributes_table', 1),
(11, '2021_05_25_123150_create_products_images_table', 1),
(12, '2023_11_08_171224_create_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `title`, `description`, `created_at`) VALUES
(1, 1, 'Order Successful', 'You have successfully placed your order to vendor and it will be delivered to you soon', '2023-09-16T18:37:53.579Z'),
(2, 1, 'Order Successful', 'You have successfully placed your order to vendor and it will be delivered to you soon', '2023-09-16T18:54:50.867Z'),
(3, 1, 'Order Successful', 'You have successfully placed your order to vendor and it will be delivered to you soon', '2023-09-16T18:57:08.040Z'),
(4, 1, 'Order Successful', 'You have successfully placed your order to vendor and it will be delivered to you soon', '2023-09-17T09:52:09.732Z'),
(5, 1, 'Order Successful', 'You have successfully placed your order to vendor and it will be delivered to you soon', '2023-09-21T20:41:01.267Z'),
(6, 4, 'Order Successful', 'You have successfully placed your order to vendor and it will be delivered to you soon', '2023-09-28T15:38:39.510Z'),
(7, 4, 'Order Successful', 'You have successfully placed your order to vendor and it will be delivered to you soon', '2023-09-28T15:38:39.510Z'),
(8, 4, 'Order Successful', 'You have successfully placed your order to vendor and it will be delivered to you soon', '2023-09-28T16:27:33.907Z'),
(9, 4, 'Order Successful', 'You have successfully placed your order to vendor and it will be delivered to you soon', '2023-09-28T16:28:30.429Z'),
(10, 4, 'Order Successful', 'You have successfully placed your order to vendor and it will be delivered to you soon', '2023-09-28T16:32:37.285Z'),
(11, 4, 'Order Successful', 'You have successfully placed your order to vendor and it will be delivered to you soon', '2023-09-28T16:39:59.675Z'),
(12, 1, 'Order Successful', 'You have successfully placed your order.', '2023-11-22T14:12:11.928Z'),
(13, 1, 'Order Successful', 'You have successfully placed your order.', '2023-11-22T14:12:11.928Z'),
(14, 1, 'Order Successful', 'You have successfully placed your order.', '2023-11-22T14:21:58.818Z'),
(15, 1, 'Order Successful', 'You have successfully placed your order.', '2023-11-22T14:21:58.818Z'),
(16, 1, 'Order Successful', 'You have successfully placed your order.', '2023-11-22T14:27:05.674Z'),
(17, 1, 'Order Successful', 'You have successfully placed your order.', '2023-12-08T09:16:50.450Z'),
(18, 1, 'Order Successful', 'You have successfully placed your order.', '2023-12-16T11:34:21.346Z'),
(19, 1, 'Order Successful', 'You have successfully placed your order.', '2023-12-16T11:34:21.346Z'),
(20, 1, 'Order Successful', 'You have successfully placed your order.', '2023-12-16T11:34:21.346Z'),
(21, 1, 'Order Successful', 'You have successfully placed your order.', '2023-12-16T11:34:21.346Z'),
(22, 7, 'Order Successful', 'You have successfully placed your order.', '2023-12-17T12:09:46.807Z'),
(23, 7, 'Order Successful', 'You have successfully placed your order.', '2023-12-17T12:09:46.807Z'),
(24, 10, 'Order Successful', 'You have successfully placed your order.', '2023-12-18T22:26:28.507Z'),
(25, 10, 'Order Successful', 'You have successfully placed your order.', '2023-12-18T22:26:28.507Z'),
(26, 10, 'Order Successful', 'You have successfully placed your order.', '2023-12-18T22:32:02.160Z'),
(27, 10, 'Order Successful', 'You have successfully placed your order.', '2023-12-22T18:04:47.374Z'),
(28, 10, 'Order Successful', 'You have successfully placed your order.', '2023-12-22T18:04:47.374Z'),
(29, 11, 'Order Successful', 'You have successfully placed your order.', '2023-12-22T19:57:15.260Z'),
(30, 11, 'Order Successful', 'You have successfully placed your order.', '2023-12-22T19:57:15.260Z'),
(31, 10, 'Order Successful', 'You have successfully placed your order.', '2023-12-23T16:45:45.508Z'),
(32, 10, 'Order Successful', 'You have successfully placed your order.', '2023-12-23T16:45:45.508Z'),
(33, 10, 'Order Successful', 'You have successfully placed your order.', '2023-12-26T23:43:47.650Z'),
(34, 10, 'Order Successful', 'You have successfully placed your order.', '2023-12-26T23:43:47.650Z'),
(35, 10, 'Order Successful', 'You have successfully placed your order.', '2023-12-26T23:44:05.823Z'),
(36, 10, 'Order Successful', 'You have successfully placed your order.', '2023-12-26T23:44:13.524Z'),
(37, 10, 'Order Successful', 'You have successfully placed your order.', '2023-12-26T23:46:17.292Z'),
(38, 10, 'Order Successful', 'You have successfully placed your order.', '2023-12-26T23:46:17.292Z'),
(39, 15, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T16:55:20.620Z'),
(40, 14, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T17:03:37.100Z'),
(41, 14, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T17:03:37.100Z'),
(42, 14, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T17:03:37.100Z'),
(43, 15, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T17:08:50.132Z'),
(44, 15, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T17:08:50.132Z'),
(45, 15, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T17:08:50.132Z'),
(46, 15, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T17:08:50.132Z'),
(47, 18, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T20:56:32.049Z'),
(48, 18, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T20:56:32.049Z'),
(49, 18, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T20:56:32.049Z'),
(50, 18, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T20:56:32.049Z'),
(51, 18, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T20:59:18.271Z'),
(52, 7, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T21:06:24.094Z'),
(53, 7, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T21:06:24.094Z'),
(54, 7, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T21:06:24.094Z'),
(55, 7, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T21:06:24.094Z'),
(56, 19, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T21:38:19.776Z'),
(57, 19, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T21:38:19.776Z'),
(58, 19, 'Order Successful', 'You have successfully placed your order.', '2023-12-27T21:38:19.776Z'),
(59, 20, 'Order Successful', 'You have successfully placed your order.', '2023-12-30T13:54:58.635Z'),
(60, 20, 'Order Successful', 'You have successfully placed your order.', '2023-12-30T13:54:58.635Z'),
(61, 20, 'Order Successful', 'You have successfully placed your order.', '2023-12-30T13:54:58.635Z'),
(62, 7, 'Order Successful', 'You have successfully placed your order.', '2024-01-13T09:46:55.794Z'),
(63, 7, 'Order Successful', 'You have successfully placed your order.', '2024-01-13T17:10:08.307Z'),
(64, 7, 'Order Successful', 'You have successfully placed your order.', '2024-01-14T09:57:43.635Z'),
(65, 7, 'Order Successful', 'You have successfully placed your order.', '2024-01-14T09:57:43.635Z'),
(66, 10, 'Order Successful', 'You have successfully placed your order.', '2024-01-19T12:42:19.189Z'),
(67, 10, 'Order Successful', 'You have successfully placed your order.', '2024-01-19T12:42:19.189Z'),
(68, 11, 'Order Successful', 'You have successfully placed your order.', '2024-01-21T11:13:22.917Z'),
(69, 11, 'Order Successful', 'You have successfully placed your order.', '2024-01-21T11:13:22.917Z'),
(70, 11, 'Order Successful', 'You have successfully placed your order.', '2024-01-21T11:13:22.917Z'),
(71, 1, 'Order Successful', 'You have successfully placed your order.', '2024-02-02T23:23:24.761Z'),
(72, 1, 'Order Successful', 'You have successfully placed your order.', '2024-02-02T23:23:24.761Z'),
(73, 1, 'Order Successful', 'You have successfully placed your order.', '2024-02-02T23:23:24.761Z'),
(74, 1, 'Order Successful', 'You have successfully placed your order.', '2024-02-02T23:23:24.761Z'),
(75, 7, 'Order Successful', 'You have successfully placed your order.', '2024-02-03T07:05:06.586Z'),
(76, 7, 'Order Successful', 'You have successfully placed your order.', '2024-02-03T08:12:14.549Z');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'pending',
  `track_order` int(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `is_rated` int(11) NOT NULL DEFAULT 0,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `prod_id`, `qty`, `order_status`, `track_order`, `order_id`, `payment_status`, `is_rated`, `created_at`, `updated_at`) VALUES
(21, 7, 2, 1, 'completed', 4, '7417902310', 'unpaid', 1, '2023-12-17T12:09:46.807Z', '2023-12-22 09:43:31'),
(22, 7, 4, 1, 'completed', 4, '7198970319', 'unpaid', 1, '2023-12-17T12:09:46.807Z', '2023-12-22 09:46:21'),
(23, 10, 1, 1, 'completed', 4, '9813523206', 'paid', 0, '2023-12-18T22:24:37.177Z', '2024-01-13 09:54:56'),
(24, 10, 1, 1, 'completed', 4, '7268838319', 'paid', 0, '2023-12-18T22:24:37.983Z', '2024-01-13 09:55:47'),
(25, 10, 1, 1, 'completed', 4, '3008292472', 'paid', 0, '2023-12-18T22:26:28.507Z', '2024-01-13 09:55:35'),
(26, 10, 2, 1, 'completed', 4, '6273414529', 'paid', 0, '2023-12-18T22:26:28.507Z', '2024-01-13 09:57:14'),
(27, 10, 1, 3, 'completed', 4, '1491274298', 'paid', 0, '2023-12-18T22:32:02.160Z', '2024-01-13 09:57:49'),
(28, 10, 3, 1, 'completed', 4, '3739624724', 'unpaid', 0, '2023-12-22T18:04:47.374Z', '2024-01-13 09:58:35'),
(29, 10, 1, 3, 'completed', 4, '4160029758', 'unpaid', 0, '2023-12-22T18:04:47.374Z', '2024-01-13 09:56:12'),
(30, 11, 3, 3, 'completed', 4, '4497052781', 'paid', 1, '2023-12-22T19:57:15.260Z', '2024-01-13 09:54:31'),
(31, 11, 4, 1, 'completed', 4, '3023544828', 'paid', 1, '2023-12-22T19:57:15.260Z', '2024-01-13 10:16:37'),
(32, 10, 3, 3, 'completed', 4, '1588857865', 'unpaid', 0, '2023-12-23T16:45:45.508Z', '2024-01-14 09:35:50'),
(33, 10, 2, 2, 'completed', 4, '2062964907', 'unpaid', 0, '2023-12-23T16:45:45.508Z', '2024-01-14 09:36:09'),
(34, 10, 4, 2, 'completed', 4, '2976656690', 'unpaid', 0, '2023-12-26T23:43:47.650Z', '2024-01-14 09:36:25'),
(35, 10, 1, 1, 'completed', 4, '6211615887', 'unpaid', 0, '2023-12-26T23:43:47.650Z', '2024-01-14 09:36:42'),
(36, 10, 1, 3, 'completed', 4, '0233951615', 'unpaid', 1, '2023-12-26T23:44:05.823Z', '2024-01-13 10:16:12'),
(37, 10, 4, 3, 'completed', 4, '6297703067', 'unpaid', 1, '2023-12-26T23:44:13.524Z', '2024-01-13 10:15:53'),
(38, 10, 3, 2, 'completed', 4, '7329663184', 'unpaid', 1, '2023-12-26T23:46:17.292Z', '2024-01-13 10:11:38'),
(39, 10, 2, 1, 'completed', 4, '7453803589', 'unpaid', 1, '2023-12-26T23:46:17.292Z', '2024-01-13 10:11:14'),
(40, 15, 1, 2, 'completed', 4, '6190904692', 'paid', 0, '2023-12-27T16:55:20.620Z', '2024-01-13 10:10:53'),
(41, 14, 1, 1, 'completed', 4, '6643694665', 'unpaid', 0, '2023-12-27T17:03:37.100Z', '2024-01-13 09:59:40'),
(42, 14, 2, 2, 'completed', 4, '8268326688', 'unpaid', 0, '2023-12-27T17:03:37.100Z', '2024-01-13 10:00:32'),
(43, 14, 3, 1, 'completed', 4, '6371050899', 'unpaid', 0, '2023-12-27T17:03:37.100Z', '2024-01-13 10:02:11'),
(44, 15, 1, 3, 'completed', 4, '4462114403', 'unpaid', 0, '2023-12-27T17:08:50.132Z', '2024-01-14 09:37:03'),
(45, 15, 2, 1, 'completed', 4, '9252944603', 'unpaid', 0, '2023-12-27T17:08:50.132Z', '2024-01-14 09:37:26'),
(46, 15, 3, 3, 'completed', 4, '9137223321', 'unpaid', 0, '2023-12-27T17:08:50.132Z', '2024-01-14 09:37:45'),
(47, 15, 4, 1, 'completed', 4, '9523922162', 'unpaid', 0, '2023-12-27T17:08:50.132Z', '2024-01-14 09:35:15'),
(48, 18, 3, 1, 'completed', 4, '4985611048', 'paid', 0, '2023-12-27T20:56:32.049Z', '2024-01-14 09:35:04'),
(49, 18, 1, 1, 'completed', 4, '1715624924', 'paid', 0, '2023-12-27T20:56:32.049Z', '2024-01-14 09:34:54'),
(50, 18, 2, 1, 'completed', 4, '1978142740', 'paid', 0, '2023-12-27T20:56:32.049Z', '2024-01-14 09:34:42'),
(51, 18, 4, 1, 'completed', 4, '2861328497', 'paid', 0, '2023-12-27T20:56:32.049Z', '2024-01-14 09:31:58'),
(52, 18, 2, 1, 'completed', 4, '7799758595', 'paid', 0, '2023-12-27T20:59:18.271Z', '2024-01-14 09:31:37'),
(53, 7, 1, 3, 'completed', 4, '0659332863', 'paid', 1, '2023-12-27T21:06:24.094Z', '2024-01-13 10:03:38'),
(54, 7, 2, 1, 'completed', 4, '6964232007', 'paid', 1, '2023-12-27T21:06:24.094Z', '2024-01-13 10:05:34'),
(55, 7, 3, 1, 'completed', 4, '1038444900', 'paid', 1, '2023-12-27T21:06:24.094Z', '2024-01-13 10:06:32'),
(56, 7, 4, 1, 'completed', 4, '9443365750', 'paid', 1, '2023-12-27T21:06:24.094Z', '2024-01-13 10:04:06'),
(57, 19, 1, 1, 'completed', 4, '1732050870', 'paid', 0, '2023-12-27T21:38:19.776Z', '2024-01-14 09:31:02'),
(58, 19, 2, 1, 'completed', 4, '0442305562', 'paid', 0, '2023-12-27T21:38:19.776Z', '2024-01-14 09:30:47'),
(59, 19, 3, 1, 'completed', 4, '8154426774', 'paid', 0, '2023-12-27T21:38:19.776Z', '2024-01-14 09:30:37'),
(60, 20, 1, 1, 'completed', 4, '1793400916', 'unpaid', 0, '2023-12-30T13:54:58.635Z', '2024-01-14 09:30:24'),
(61, 20, 2, 1, 'completed', 4, '8934628129', 'unpaid', 0, '2023-12-30T13:54:58.635Z', '2024-01-14 09:30:03'),
(62, 20, 4, 1, 'completed', 4, '9724092715', 'unpaid', 0, '2023-12-30T13:54:58.635Z', '2024-01-13 10:07:00'),
(63, 7, 2, 1, 'completed', 4, '6650506122', 'paid', 1, '2024-01-13T09:46:55.794Z', '2024-01-13 09:53:43'),
(64, 7, 3, 1, 'completed', 4, '5367663041', 'paid', 1, '2024-01-13T17:10:08.307Z', '2024-01-14 09:29:39'),
(65, 7, 1, 1, 'completed', 4, '2479276191', 'paid', 1, '2024-01-14T09:57:43.635Z', '2024-01-14 09:58:59'),
(66, 7, 2, 1, 'completed', 4, '0081033208', 'paid', 1, '2024-01-14T09:57:43.635Z', '2024-01-14 09:59:12'),
(67, 10, 1, 2, 'completed', 4, '3584759103', 'unpaid', 0, '2024-01-19T12:42:19.189Z', '2024-01-19 13:10:10'),
(68, 10, 2, 1, 'completed', 4, '6659217276', 'unpaid', 0, '2024-01-19T12:42:19.189Z', '2024-01-19 13:10:27'),
(69, 11, 6, 1, 'pending', 0, '9504825568', 'unpaid', 0, '2024-01-21T11:13:22.917Z', NULL),
(70, 11, 18, 2, 'pending', 0, '5878586098', 'unpaid', 0, '2024-01-21T11:13:22.917Z', NULL),
(71, 11, 1, 1, 'pending', 0, '4396609168', 'unpaid', 0, '2024-01-21T11:13:22.917Z', NULL),
(72, 1, 1, 3, 'pending', 0, '8444797628', 'paid', 0, '2024-02-02T23:23:24.761Z', NULL),
(73, 1, 2, 1, 'pending', 0, '0779929005', 'paid', 0, '2024-02-02T23:23:24.761Z', NULL),
(74, 1, 3, 2, 'pending', 0, '2382360655', 'paid', 0, '2024-02-02T23:23:24.761Z', NULL),
(75, 1, 5, 1, 'pending', 0, '5670268228', 'paid', 0, '2024-02-02T23:23:24.761Z', NULL),
(76, 7, 1, 1, 'completed', 4, '2168520597', 'paid', 1, '2024-02-03T07:05:06.586Z', '2024-02-03 08:36:28'),
(77, 7, 8, 1, 'completed', 4, '8653830234', 'paid', 1, '2024-02-03T08:12:14.549Z', '2024-02-03 08:37:14'),
(78, 7, 319, 1, 'completed', 3, '244235', 'paid', 0, '2024-02-07 05:54:41', '2024-02-07 06:20:20'),
(79, 7, 3, 1, 'completed', 4, '596902', 'paid', 0, '2024-02-07 06:10:07', '2024-02-07 06:20:06'),
(80, 19, 3, 1, 'completed', 1, '363682', 'paid', 0, '2024-02-18 10:20:47', '2024-02-18 10:20:47'),
(81, 19, 3, 1, 'completed', 1, '535686', 'paid', 0, '2024-02-18 10:26:13', '2024-02-18 10:26:13');

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
-- Table structure for table `productimages`
--

CREATE TABLE `productimages` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `product_discount` int(11) DEFAULT NULL,
  `unit` varchar(255) NOT NULL DEFAULT 'kg',
  `product_weight` double(8,2) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `is_featured` enum('No','Yes') NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `price`, `product_discount`, `unit`, `product_weight`, `main_image`, `description`, `quantity`, `is_featured`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 'Groundnut (75cl, 1 Bottle)', 1900.00, 0, 'kg', 75.00, 'groundnut-bottle.jpg-864.jpg', 'Groundnuts, also known as peanuts, are a popular legume known for their nutty flavor and versatility. They are widely consumed around the world and are used in various forms, including roasted peanuts, peanut butter, and as an ingredient in many savory and sweet dishes.\r\n\r\nNutritionally, a 1-ounce (28g) serving of dry roasted peanuts typically contains:\r\n\r\n- Calories: 161\r\n- Protein: 7.3g\r\n- Carbohydrates: 4.6g\r\n- Dietary fiber: 2.4g\r\n- Sugars: 1.3g\r\n- Fat: 14g\r\n    - Saturated fat: 2g\r\n    - Monounsaturated fat: 6.9g\r\n    - Polyunsaturated fat: 4.4g\r\n- Vitamins and minerals:\r\n    - Niacin (Vitamin B3)\r\n    - Vitamin E\r\n    - Magnesium\r\n    - Phosphorus\r\n    - Potassium\r\n\r\nPeanuts are a good source of plant-based protein, healthy fats, and various essential nutrients. They are also rich in antioxidants, particularly resveratrol, which is associated with several health benefits.\r\n\r\nWhen consumed in moderation, peanuts can be a nutritious addition to a balanced diet. However, it\'s important to be mindful of portion sizes, especially for those who are monitoring their calorie and fat intake.\r\n\r\nPeanuts are commonly enjoyed as a snack, used as a topping in salads and stir-fries, and processed into peanut butter, which is a popular spread and ingredient in many recipes.', 10, 'Yes', 5, 1, '2023-11-08 16:19:36', '2024-02-17 16:57:02'),
(3, 3, 'Potato - Sweet (1 Paint Bucket)', 1600.00, 0, 'kg', 3.50, 'african-white-sweet-potatoes.jpg-751.jpg', 'Sweet potatoes are a nutritious and delicious root vegetable that comes in a variety of colors, including orange, purple, and white. They are known for their sweet flavor and are a staple food in many cuisines around the world.\r\n\r\nNutritionally, a 1-cup (200g) serving of cooked, mashed sweet potato typically contains:\r\n\r\n- Calories: 180\r\n- Carbohydrates: 41g\r\n- Fiber: 6.6g\r\n- Sugars: 16.9g\r\n- Protein: 4g\r\n- Fat: 0.3g\r\n\r\nSweet potatoes are an excellent source of several essential vitamins and minerals, including:\r\n\r\n- Vitamin A\r\n- Vitamin C\r\n- Vitamin B6\r\n- Potassium\r\n- Manganese\r\n\r\nThey also provide significant amounts of antioxidants, particularly beta-carotene, which gives orange sweet potatoes their vibrant color and is converted into vitamin A in the body.\r\n\r\nSweet potatoes are high in fiber and relatively low on the glycemic index, making them a good choice for those looking to manage blood sugar levels. They are also naturally gluten-free.\r\n\r\nSweet potatoes can be prepared in numerous ways, such as baked, boiled, mashed, or roasted. They are versatile and can be used in both savory and sweet dishes, adding a nutritional boost to meals.\r\n\r\nOverall, sweet potatoes are a nutrient-dense, delicious vegetable that provides a range of essential nutrients and can be a valuable addition to a healthy, balanced diet.', 2, 'Yes', 5, 1, '2023-11-14 21:45:31', '2024-02-11 12:20:55'),
(4, 2, 'Corn - Yellow', 82000.00, 0, 'kg', 100.00, 'Yellow Corn.jpeg-146.jpeg', 'Yellow corn, also known as sweet corn, is a popular cereal grain known for its sweet, juicy kernels. It is a staple food in many cultures and can be enjoyed in various forms, including fresh, frozen, canned, or processed into products like cornmeal and corn flour.\r\n\r\nNutritionally, a 1-cup (164g) serving of cooked yellow corn typically contains:\r\n\r\n- Calories: 177\r\n- Carbohydrates: 41g\r\n- Fiber: 4.6g\r\n- Sugars: 6.3g\r\n- Protein: 5.4g\r\n- Fat: 2.1g\r\n\r\nYellow corn is a good source of several essential nutrients, including:\r\n\r\n- Vitamin C\r\n- Thiamine (Vitamin B1)\r\n- Folate (Vitamin B9)\r\n- Pantothenic acid (Vitamin B5)\r\n- Magnesium\r\n- Phosphorus\r\n- Potassium\r\n\r\nYellow corn is also a good source of antioxidants, such as lutein and zeaxanthin, which are beneficial for eye health.\r\n\r\nIt\'s important to note that the nutritional content of corn can vary depending on how it\'s prepared and served. For example, adding butter or salt can impact the overall nutritional profile.\r\n\r\nYellow corn can be enjoyed in a variety of ways, including steamed, boiled, grilled, or added to salads, soups, and casseroles. Its sweet flavor and nutritional value make it a valuable addition to a balanced diet.', 2, 'No', 5, 1, '2023-11-14 21:46:38', '2024-02-17 02:05:26'),
(5, 1, 'Carrot - Washed', 50000.00, 0, 'kg', 40.00, 'Carrot.webp-227.webp', 'Carrots are a popular root vegetable known for their bright orange color, crisp texture, and sweet flavor. They are widely enjoyed both raw and cooked and are a versatile ingredient in a variety of dishes.\r\n\r\nNutritionally, a 1-cup (128g) serving of chopped raw carrots typically contains:\r\n\r\n- Calories: 52\r\n- Carbohydrates: 12g\r\n- Fiber: 3.6g\r\n- Sugars: 6g\r\n- Protein: 1.2g\r\n- Fat: 0.3g\r\n\r\nCarrots are an excellent source of several essential nutrients, including:\r\n\r\n- Vitamin A: Carrots are particularly rich in beta-carotene, which the body converts into vitamin A, a crucial nutrient for vision, immune function, and skin health.\r\n- Vitamin K1: Important for blood clotting and bone health.\r\n- Vitamin C: An antioxidant that supports the immune system and skin health.\r\n- Potassium: A mineral essential for heart health and muscle function.\r\n- Biotin: Important for metabolism and skin health.\r\n\r\nCarrots are also known for being rich in antioxidants, particularly beta-carotene, which has been associated with various health benefits.\r\n\r\nCarrots are a versatile vegetable and can be enjoyed in numerous ways, including raw in salads, cut into sticks for snacking, cooked in soups and stews, and even juiced. Their crunchy texture and sweet taste make them a popular and nutritious addition to many meals.', 2, 'No', 0, 1, '2024-01-04 23:43:07', '2024-02-17 02:06:15'),
(6, 2, 'Beans - Oloyin', 43000.00, 0, 'kg', 25.00, 'Beans - Oloyin Maiduguri (25kg).webp-165.webp', 'Beans are a type of legume that come in various shapes, sizes, and colors, and they are a staple food in many cultures around the world. They are valued for their versatility, nutritional value, and culinary appeal.\r\n\r\nNutritionally, a 1-cup (177g) serving of cooked beans, such as black beans, kidney beans, or chickpeas, typically contains:\r\n\r\n- Calories: Varies by bean type, but generally ranges from 220-250 calories\r\n- Carbohydrates: Around 40-45g\r\n- Fiber: 10-15g\r\n- Protein: 15-20g\r\n- Fat: 1-2g\r\n\r\nIn addition to being a good source of complex carbohydrates, beans are nutrient-dense and provide a range of essential vitamins and minerals, including:\r\n\r\n- Folate (Vitamin B9)\r\n- Iron\r\n- Magnesium\r\n- Potassium\r\n- Zinc\r\n- B vitamins (varies by type)\r\n\r\nBeans are also rich in plant-based protein and are an excellent source of dietary fiber, which can promote digestive health and contribute to a feeling of fullness.\r\n\r\nThe specific nutritional content can vary depending on the type of bean, but in general, beans are a valuable source of nutrients and can be a beneficial addition to a balanced diet.\r\n\r\nBeans can be prepared in numerous ways, such as added to soups, stews, salads, or used as a main ingredient in vegetarian dishes. They are a versatile and nutritious food that can contribute to a well-rounded and healthy eating pattern.', 5, 'No', 0, 1, '2024-01-05 00:08:00', '2024-02-17 02:07:49'),
(7, 1, 'Carrot - Washed', 1300.00, 0, 'kg', 1.00, 'Carrot.webp-767.webp', 'Carrots are a popular root vegetable known for their bright orange color, crisp texture, and sweet flavor. They are widely enjoyed both raw and cooked and are a versatile ingredient in a variety of dishes.\r\n\r\nNutritionally, a 1-cup (128g) serving of chopped raw carrots typically contains:\r\n\r\n- Calories: 52\r\n- Carbohydrates: 12g\r\n- Fiber: 3.6g\r\n- Sugars: 6g\r\n- Protein: 1.2g\r\n- Fat: 0.3g\r\n\r\nCarrots are an excellent source of several essential nutrients, including:\r\n\r\n- Vitamin A: Carrots are particularly rich in beta-carotene, which the body converts into vitamin A, a crucial nutrient for vision, immune function, and skin health.\r\n- Vitamin K1: Important for blood clotting and bone health.\r\n- Vitamin C: An antioxidant that supports the immune system and skin health.\r\n- Potassium: A mineral essential for heart health and muscle function.\r\n- Biotin: Important for metabolism and skin health.\r\n\r\nCarrots are also known for being rich in antioxidants, particularly beta-carotene, which has been associated with various health benefits.\r\n\r\nCarrots are a versatile vegetable and can be enjoyed in numerous ways, including raw in salads, cut into sticks for snacking, cooked in soups and stews, and even juiced. Their crunchy texture and sweet taste make them a popular and nutritious addition to many meals.', 20, 'Yes', 0, 1, '2024-01-20 00:14:55', '2024-02-11 13:39:58'),
(8, 1, 'Shombo Bawa (1 Paint Bucket)', 3000.00, 0, 'kg', 1.70, 'Shombo 2.jpg-274.jpg', 'Cayenne pepper is a type of chili pepper that is commonly used to add heat and flavor to dishes. It is named after the city of Cayenne in French Guiana and is a popular spice in many cuisines around the world.\r\n\r\nDescription:\r\nCayenne pepper is typically a bright red, long and thin chili pepper. It is often used in powdered form, and it is known for its spicy heat and distinct flavor. Cayenne pepper is commonly used in both savory and sweet dishes, as well as in spice blends and sauces.\r\n\r\nNutritional Value of Cayenne Pepper (1 tablespoon, approximately 5.3g):\r\n\r\nCalories: 17\r\nTotal fat: 1g\r\nSaturated fat: 0.3g\r\nCholesterol: 0mg\r\nSodium: 1mg\r\nPotassium: 107mg\r\nTotal Carbohydrate: 3g\r\nDietary fiber: 1.4g\r\nSugars: 0.6g\r\nProtein: 0.6g\r\nVitamin A: 44% of the Daily Value (DV)\r\nVitamin C: 8% of the DV\r\nVitamin E: 4% of the DV\r\nVitamin K: 5% of the DV\r\n\r\nCayenne pepper is known for its high concentration of capsaicin, which is responsible for its heat. It is also a good source of vitamins A and E, as well as antioxidants.\r\n\r\nWhen used in moderation, cayenne pepper can add flavor and heat to dishes and also provide some nutritional benefits. However, it is important to be cautious when using cayenne pepper, as it is very spicy and can cause discomfort if consumed in large amounts.', 20, 'No', 3, 1, '2024-01-20 00:21:56', '2024-02-11 14:30:28'),
(10, 1, 'Shombo Bawa', 17000.00, 0, 'kg', 10.00, 'Shombo 2.jpg-447.jpg', 'Cayenne pepper is a type of chili pepper that is commonly used to add heat and flavor to dishes. It is named after the city of Cayenne in French Guiana and is a popular spice in many cuisines around the world.\r\n\r\nDescription:\r\nCayenne pepper is typically a bright red, long and thin chili pepper. It is often used in powdered form, and it is known for its spicy heat and distinct flavor. Cayenne pepper is commonly used in both savory and sweet dishes, as well as in spice blends and sauces.\r\n\r\nNutritional Value of Cayenne Pepper (1 tablespoon, approximately 5.3g):\r\n\r\nCalories: 17\r\nTotal fat: 1g\r\nSaturated fat: 0.3g\r\nCholesterol: 0mg\r\nSodium: 1mg\r\nPotassium: 107mg\r\nTotal Carbohydrate: 3g\r\nDietary fiber: 1.4g\r\nSugars: 0.6g\r\nProtein: 0.6g\r\nVitamin A: 44% of the Daily Value (DV)\r\nVitamin C: 8% of the DV\r\nVitamin E: 4% of the DV\r\nVitamin K: 5% of the DV\r\n\r\nCayenne pepper is known for its high concentration of capsaicin, which is responsible for its heat. It is also a good source of vitamins A and E, as well as antioxidants.\r\n\r\nWhen used in moderation, cayenne pepper can add flavor and heat to dishes and also provide some nutritional benefits. However, it is important to be cautious when using cayenne pepper, as it is very spicy and can cause discomfort if consumed in large amounts.', 5, 'No', 0, 1, '2024-01-20 00:29:43', '2024-02-11 14:31:43'),
(11, 1, 'Shombo Bawa', 35000.00, 0, 'kg', 20.00, 'Shombo 2.jpg-954.jpg', 'Cayenne pepper is a type of chili pepper that is commonly used to add heat and flavor to dishes. It is named after the city of Cayenne in French Guiana and is a popular spice in many cuisines around the world.\r\n\r\nDescription:\r\nCayenne pepper is typically a bright red, long and thin chili pepper. It is often used in powdered form, and it is known for its spicy heat and distinct flavor. Cayenne pepper is commonly used in both savory and sweet dishes, as well as in spice blends and sauces.\r\n\r\nNutritional Value of Cayenne Pepper (1 tablespoon, approximately 5.3g):\r\n\r\nCalories: 17\r\nTotal fat: 1g\r\nSaturated fat: 0.3g\r\nCholesterol: 0mg\r\nSodium: 1mg\r\nPotassium: 107mg\r\nTotal Carbohydrate: 3g\r\nDietary fiber: 1.4g\r\nSugars: 0.6g\r\nProtein: 0.6g\r\nVitamin A: 44% of the Daily Value (DV)\r\nVitamin C: 8% of the DV\r\nVitamin E: 4% of the DV\r\nVitamin K: 5% of the DV\r\n\r\nCayenne pepper is known for its high concentration of capsaicin, which is responsible for its heat. It is also a good source of vitamins A and E, as well as antioxidants.\r\n\r\nWhen used in moderation, cayenne pepper can add flavor and heat to dishes and also provide some nutritional benefits. However, it is important to be cautious when using cayenne pepper, as it is very spicy and can cause discomfort if consumed in large amounts.', 3, 'No', 0, 1, '2024-01-20 00:32:46', '2024-02-11 14:33:06'),
(13, 2, 'Beans - Oloyin (1 Paint Bucket)', 6900.00, 0, 'kg', 4.00, 'beans-2.jpg-424.jpg', 'Beans are a type of legume that come in various shapes, sizes, and colors, and they are a staple food in many cultures around the world. They are valued for their versatility, nutritional value, and culinary appeal.\r\n\r\nNutritionally, a 1-cup (177g) serving of cooked beans, such as black beans, kidney beans, or chickpeas, typically contains:\r\n\r\n- Calories: Varies by bean type, but generally ranges from 220-250 calories\r\n- Carbohydrates: Around 40-45g\r\n- Fiber: 10-15g\r\n- Protein: 15-20g\r\n- Fat: 1-2g\r\n\r\nIn addition to being a good source of complex carbohydrates, beans are nutrient-dense and provide a range of essential vitamins and minerals, including:\r\n\r\n- Folate (Vitamin B9)\r\n- Iron\r\n- Magnesium\r\n- Potassium\r\n- Zinc\r\n- B vitamins (varies by type)\r\n\r\nBeans are also rich in plant-based protein and are an excellent source of dietary fiber, which can promote digestive health and contribute to a feeling of fullness.\r\n\r\nThe specific nutritional content can vary depending on the type of bean, but in general, beans are a valuable source of nutrients and can be a beneficial addition to a balanced diet.\r\n\r\nBeans can be prepared in numerous ways, such as added to soups, stews, salads, or used as a main ingredient in vegetarian dishes. They are a versatile and nutritious food that can contribute to a well-rounded and healthy eating pattern.', 20, 'No', 0, 1, '2024-01-20 00:45:41', '2024-02-17 02:11:20'),
(14, 2, 'Beans - Oloyin', 1800.00, 0, 'kg', 1.00, 'oloyin1kg_393x.jpg-354.jpg', 'Beans are a type of legume that come in various shapes, sizes, and colors, and they are a staple food in many cultures around the world. They are valued for their versatility, nutritional value, and culinary appeal.\r\n\r\nNutritionally, a 1-cup (177g) serving of cooked beans, such as black beans, kidney beans, or chickpeas, typically contains:\r\n\r\n- Calories: Varies by bean type, but generally ranges from 220-250 calories\r\n- Carbohydrates: Around 40-45g\r\n- Fiber: 10-15g\r\n- Protein: 15-20g\r\n- Fat: 1-2g\r\n\r\nIn addition to being a good source of complex carbohydrates, beans are nutrient-dense and provide a range of essential vitamins and minerals, including:\r\n\r\n- Folate (Vitamin B9)\r\n- Iron\r\n- Magnesium\r\n- Potassium\r\n- Zinc\r\n- B vitamins (varies by type)\r\n\r\nBeans are also rich in plant-based protein and are an excellent source of dietary fiber, which can promote digestive health and contribute to a feeling of fullness.\r\n\r\nThe specific nutritional content can vary depending on the type of bean, but in general, beans are a valuable source of nutrients and can be a beneficial addition to a balanced diet.\r\n\r\nBeans can be prepared in numerous ways, such as added to soups, stews, salads, or used as a main ingredient in vegetarian dishes. They are a versatile and nutritious food that can contribute to a well-rounded and healthy eating pattern.', 20, 'No', 0, 1, '2024-01-20 00:53:41', '2024-02-17 02:10:38'),
(15, 2, 'Beans - Oloyin', 85000.00, 0, 'kg', 50.00, 'Beans - Oloyin Maiduguri (25kg).webp-409.webp', 'Beans are a type of legume that come in various shapes, sizes, and colors, and they are a staple food in many cultures around the world. They are valued for their versatility, nutritional value, and culinary appeal.\r\n\r\nNutritionally, a 1-cup (177g) serving of cooked beans, such as black beans, kidney beans, or chickpeas, typically contains:\r\n\r\n- Calories: Varies by bean type, but generally ranges from 220-250 calories\r\n- Carbohydrates: Around 40-45g\r\n- Fiber: 10-15g\r\n- Protein: 15-20g\r\n- Fat: 1-2g\r\n\r\nIn addition to being a good source of complex carbohydrates, beans are nutrient-dense and provide a range of essential vitamins and minerals, including:\r\n\r\n- Folate (Vitamin B9)\r\n- Iron\r\n- Magnesium\r\n- Potassium\r\n- Zinc\r\n- B vitamins (varies by type)\r\n\r\nBeans are also rich in plant-based protein and are an excellent source of dietary fiber, which can promote digestive health and contribute to a feeling of fullness.\r\n\r\nThe specific nutritional content can vary depending on the type of bean, but in general, beans are a valuable source of nutrients and can be a beneficial addition to a balanced diet.\r\n\r\nBeans can be prepared in numerous ways, such as added to soups, stews, salads, or used as a main ingredient in vegetarian dishes. They are a versatile and nutritious food that can contribute to a well-rounded and healthy eating pattern.', 2, 'No', 0, 1, '2024-01-20 00:57:52', '2024-02-17 02:11:54'),
(19, 2, 'Beans - Oloyin - (1 Derica)', 1200.00, 0, 'kg', 0.60, 'Beans.jpg-658.jpg', 'Beans are a type of legume that come in various shapes, sizes, and colors, and they are a staple food in many cultures around the world. They are valued for their versatility, nutritional value, and culinary appeal.\r\n\r\nNutritionally, a 1-cup (177g) serving of cooked beans, such as black beans, kidney beans, or chickpeas, typically contains:\r\n\r\n- Calories: Varies by bean type, but generally ranges from 220-250 calories\r\n- Carbohydrates: Around 40-45g\r\n- Fiber: 10-15g\r\n- Protein: 15-20g\r\n- Fat: 1-2g\r\n\r\nIn addition to being a good source of complex carbohydrates, beans are nutrient-dense and provide a range of essential vitamins and minerals, including:\r\n\r\n- Folate (Vitamin B9)\r\n- Iron\r\n- Magnesium\r\n- Potassium\r\n- Zinc\r\n- B vitamins (varies by type)\r\n\r\nBeans are also rich in plant-based protein and are an excellent source of dietary fiber, which can promote digestive health and contribute to a feeling of fullness.\r\n\r\nThe specific nutritional content can vary depending on the type of bean, but in general, beans are a valuable source of nutrients and can be a beneficial addition to a balanced diet.\r\n\r\nBeans can be prepared in numerous ways, such as added to soups, stews, salads, or used as a main ingredient in vegetarian dishes. They are a versatile and nutritious food that can contribute to a well-rounded and healthy eating pattern.', 20, 'No', 0, 1, '2024-01-21 14:13:51', '2024-02-17 02:12:32'),
(21, 2, 'Beans - Iron or White - (1 Paint Bucket)', 4600.00, 0, 'kg', 4.00, 'white beans.jpg-482.jpg', 'Beans are a type of legume that come in various shapes, sizes, and colors, and they are a staple food in many cultures around the world. They are valued for their versatility, nutritional value, and culinary appeal.\r\n\r\nNutritionally, a 1-cup (177g) serving of cooked beans, such as black beans, kidney beans, or chickpeas, typically contains:\r\n\r\n- Calories: Varies by bean type, but generally ranges from 220-250 calories\r\n- Carbohydrates: Around 40-45g\r\n- Fiber: 10-15g\r\n- Protein: 15-20g\r\n- Fat: 1-2g\r\n\r\nIn addition to being a good source of complex carbohydrates, beans are nutrient-dense and provide a range of essential vitamins and minerals, including:\r\n\r\n- Folate (Vitamin B9)\r\n- Iron\r\n- Magnesium\r\n- Potassium\r\n- Zinc\r\n- B vitamins (varies by type)\r\n\r\nBeans are also rich in plant-based protein and are an excellent source of dietary fiber, which can promote digestive health and contribute to a feeling of fullness.\r\n\r\nThe specific nutritional content can vary depending on the type of bean, but in general, beans are a valuable source of nutrients and can be a beneficial addition to a balanced diet.\r\n\r\nBeans can be prepared in numerous ways, such as added to soups, stews, salads, or used as a main ingredient in vegetarian dishes. They are a versatile and nutritious food that can contribute to a well-rounded and healthy eating pattern.', 20, 'No', 0, 1, '2024-01-21 14:24:01', '2024-02-11 13:58:15'),
(22, 2, 'Beans - Iron or White', 1300.00, 0, 'kg', 1.00, 'iron-beans 1kg.jpg-841.jpg', 'Beans are a type of legume that come in various shapes, sizes, and colors, and they are a staple food in many cultures around the world. They are valued for their versatility, nutritional value, and culinary appeal.\r\n\r\nNutritionally, a 1-cup (177g) serving of cooked beans, such as black beans, kidney beans, or chickpeas, typically contains:\r\n\r\n- Calories: Varies by bean type, but generally ranges from 220-250 calories\r\n- Carbohydrates: Around 40-45g\r\n- Fiber: 10-15g\r\n- Protein: 15-20g\r\n- Fat: 1-2g\r\n\r\nIn addition to being a good source of complex carbohydrates, beans are nutrient-dense and provide a range of essential vitamins and minerals, including:\r\n\r\n- Folate (Vitamin B9)\r\n- Iron\r\n- Magnesium\r\n- Potassium\r\n- Zinc\r\n- B vitamins (varies by type)\r\n\r\nBeans are also rich in plant-based protein and are an excellent source of dietary fiber, which can promote digestive health and contribute to a feeling of fullness.\r\n\r\nThe specific nutritional content can vary depending on the type of bean, but in general, beans are a valuable source of nutrients and can be a beneficial addition to a balanced diet.\r\n\r\nBeans can be prepared in numerous ways, such as added to soups, stews, salads, or used as a main ingredient in vegetarian dishes. They are a versatile and nutritious food that can contribute to a well-rounded and healthy eating pattern.', 100, 'No', 0, 1, '2024-01-21 14:38:19', '2024-02-11 14:07:00'),
(23, 2, 'Beans - Iron or White', 45000.00, 0, 'kg', 40.00, 'White beans - Bag.jpeg-634.jpeg', 'Beans are a type of legume that come in various shapes, sizes, and colors, and they are a staple food in many cultures around the world. They are valued for their versatility, nutritional value, and culinary appeal.\r\n\r\nNutritionally, a 1-cup (177g) serving of cooked beans, such as black beans, kidney beans, or chickpeas, typically contains:\r\n\r\n- Calories: Varies by bean type, but generally ranges from 220-250 calories\r\n- Carbohydrates: Around 40-45g\r\n- Fiber: 10-15g\r\n- Protein: 15-20g\r\n- Fat: 1-2g\r\n\r\nIn addition to being a good source of complex carbohydrates, beans are nutrient-dense and provide a range of essential vitamins and minerals, including:\r\n\r\n- Folate (Vitamin B9)\r\n- Iron\r\n- Magnesium\r\n- Potassium\r\n- Zinc\r\n- B vitamins (varies by type)\r\n\r\nBeans are also rich in plant-based protein and are an excellent source of dietary fiber, which can promote digestive health and contribute to a feeling of fullness.\r\n\r\nThe specific nutritional content can vary depending on the type of bean, but in general, beans are a valuable source of nutrients and can be a beneficial addition to a balanced diet.\r\n\r\nBeans can be prepared in numerous ways, such as added to soups, stews, salads, or used as a main ingredient in vegetarian dishes. They are a versatile and nutritious food that can contribute to a well-rounded and healthy eating pattern.', 3, 'No', 0, 1, '2024-01-21 14:57:01', '2024-02-11 14:07:55'),
(24, 4, 'Pineapple (Small, 1 Piece)', 1200.00, 0, 'kg', 0.00, 'pineapple 2.webp-196.webp', 'Pineapple (Small, 1 Piece)', 100, 'No', 0, 1, '2024-01-21 15:10:34', '2024-01-26 17:21:50'),
(25, 4, 'Pineapple (Medium, 1 Piece)', 1600.00, 0, 'kg', 0.00, 'pineapple 2.webp-886.webp', 'Pineapple (Medium, 1 Piece)', 20, 'No', 0, 1, '2024-01-21 15:14:16', '2024-01-26 17:22:19'),
(26, 4, 'Pineapple (Small, 1 Dozen)', 10649.00, 0, 'kg', 0.00, 'pineapple dozen.jpeg-679.jpeg', 'Pineapple (Small, 1 Dozen)', 10, 'No', 0, 1, '2024-01-21 15:18:36', '2024-01-26 17:22:52'),
(27, 4, 'Pineapple (Medium, 1 Dozen)', 15449.00, 0, 'kg', 0.00, 'pineapple dozen.jpeg-370.jpeg', 'Pineapple (Medium, 1 Dozen)', 2, 'No', 0, 1, '2024-01-21 15:20:19', '2024-01-26 17:23:24'),
(28, 2, 'Beans - Iron or White', 90000.00, 0, 'kg', 80.00, 'White beans - Bag.jpeg-859.jpeg', 'Beans are a type of legume that come in various shapes, sizes, and colors, and they are a staple food in many cultures around the world. They are valued for their versatility, nutritional value, and culinary appeal.\r\n\r\nNutritionally, a 1-cup (177g) serving of cooked beans, such as black beans, kidney beans, or chickpeas, typically contains:\r\n\r\n- Calories: Varies by bean type, but generally ranges from 220-250 calories\r\n- Carbohydrates: Around 40-45g\r\n- Fiber: 10-15g\r\n- Protein: 15-20g\r\n- Fat: 1-2g\r\n\r\nIn addition to being a good source of complex carbohydrates, beans are nutrient-dense and provide a range of essential vitamins and minerals, including:\r\n\r\n- Folate (Vitamin B9)\r\n- Iron\r\n- Magnesium\r\n- Potassium\r\n- Zinc\r\n- B vitamins (varies by type)\r\n\r\nBeans are also rich in plant-based protein and are an excellent source of dietary fiber, which can promote digestive health and contribute to a feeling of fullness.\r\n\r\nThe specific nutritional content can vary depending on the type of bean, but in general, beans are a valuable source of nutrients and can be a beneficial addition to a balanced diet.\r\n\r\nBeans can be prepared in numerous ways, such as added to soups, stews, salads, or used as a main ingredient in vegetarian dishes. They are a versatile and nutritious food that can contribute to a well-rounded and healthy eating pattern.', 2, 'No', 0, 1, '2024-01-21 15:40:20', '2024-02-11 14:08:50'),
(29, 4, 'Sugarcane Stick - Peeled (1 Stick)', 1500.00, 0, 'kg', 0.00, 'peeled_sugarcane.webp-163.webp', 'Sugarcane Stick - Peeled (1 Stick)', 10, 'No', 0, 1, '2024-01-21 15:41:17', '2024-01-26 17:24:13'),
(30, 5, 'Moi Moi Leaf - Pack', 600.00, 0, 'kg', 0.00, 'Moi Moi Leaf (1 Pack).webp-170.webp', 'Moi Moi Leaf (1 Pack)', 20, 'No', 0, 1, '2024-01-21 16:40:21', '2024-02-17 02:16:58'),
(31, 2, 'Beans - Olotu (1 Paint Bucket)', 6900.00, 0, 'kg', 4.00, 'beans olutu.png-194.png', 'Beans are a type of legume that come in various shapes, sizes, and colors, and they are a staple food in many cultures around the world. They are valued for their versatility, nutritional value, and culinary appeal.\r\n\r\nNutritionally, a 1-cup (177g) serving of cooked beans, such as black beans, kidney beans, or chickpeas, typically contains:\r\n\r\n- Calories: Varies by bean type, but generally ranges from 220-250 calories\r\n- Carbohydrates: Around 40-45g\r\n- Fiber: 10-15g\r\n- Protein: 15-20g\r\n- Fat: 1-2g\r\n\r\nIn addition to being a good source of complex carbohydrates, beans are nutrient-dense and provide a range of essential vitamins and minerals, including:\r\n\r\n- Folate (Vitamin B9)\r\n- Iron\r\n- Magnesium\r\n- Potassium\r\n- Zinc\r\n- B vitamins (varies by type)\r\n\r\nBeans are also rich in plant-based protein and are an excellent source of dietary fiber, which can promote digestive health and contribute to a feeling of fullness.\r\n\r\nThe specific nutritional content can vary depending on the type of bean, but in general, beans are a valuable source of nutrients and can be a beneficial addition to a balanced diet.\r\n\r\nBeans can be prepared in numerous ways, such as added to soups, stews, salads, or used as a main ingredient in vegetarian dishes. They are a versatile and nutritious food that can contribute to a well-rounded and healthy eating pattern.', 20, 'No', 0, 1, '2024-01-21 18:08:29', '2024-02-11 14:20:17'),
(32, 2, 'Beans - Olotu', 84000.00, 0, 'kg', 50.00, 'Beans olotu in bag.jpg-253.jpg', 'Beans are a type of legume that come in various shapes, sizes, and colors, and they are a staple food in many cultures around the world. They are valued for their versatility, nutritional value, and culinary appeal.\r\n\r\nNutritionally, a 1-cup (177g) serving of cooked beans, such as black beans, kidney beans, or chickpeas, typically contains:\r\n\r\n- Calories: Varies by bean type, but generally ranges from 220-250 calories\r\n- Carbohydrates: Around 40-45g\r\n- Fiber: 10-15g\r\n- Protein: 15-20g\r\n- Fat: 1-2g\r\n\r\nIn addition to being a good source of complex carbohydrates, beans are nutrient-dense and provide a range of essential vitamins and minerals, including:\r\n\r\n- Folate (Vitamin B9)\r\n- Iron\r\n- Magnesium\r\n- Potassium\r\n- Zinc\r\n- B vitamins (varies by type)\r\n\r\nBeans are also rich in plant-based protein and are an excellent source of dietary fiber, which can promote digestive health and contribute to a feeling of fullness.\r\n\r\nThe specific nutritional content can vary depending on the type of bean, but in general, beans are a valuable source of nutrients and can be a beneficial addition to a balanced diet.\r\n\r\nBeans can be prepared in numerous ways, such as added to soups, stews, salads, or used as a main ingredient in vegetarian dishes. They are a versatile and nutritious food that can contribute to a well-rounded and healthy eating pattern.', 10, 'No', 0, 1, '2024-01-21 18:15:58', '2024-02-11 14:21:05'),
(33, 2, 'Beans - Olotu', 1750.00, 0, 'kg', 1.00, 'olotu-beans 1kg.jpg-362.jpg', 'Beans are a type of legume that come in various shapes, sizes, and colors, and they are a staple food in many cultures around the world. They are valued for their versatility, nutritional value, and culinary appeal.\r\n\r\nNutritionally, a 1-cup (177g) serving of cooked beans, such as black beans, kidney beans, or chickpeas, typically contains:\r\n\r\n- Calories: Varies by bean type, but generally ranges from 220-250 calories\r\n- Carbohydrates: Around 40-45g\r\n- Fiber: 10-15g\r\n- Protein: 15-20g\r\n- Fat: 1-2g\r\n\r\nIn addition to being a good source of complex carbohydrates, beans are nutrient-dense and provide a range of essential vitamins and minerals, including:\r\n\r\n- Folate (Vitamin B9)\r\n- Iron\r\n- Magnesium\r\n- Potassium\r\n- Zinc\r\n- B vitamins (varies by type)\r\n\r\nBeans are also rich in plant-based protein and are an excellent source of dietary fiber, which can promote digestive health and contribute to a feeling of fullness.\r\n\r\nThe specific nutritional content can vary depending on the type of bean, but in general, beans are a valuable source of nutrients and can be a beneficial addition to a balanced diet.\r\n\r\nBeans can be prepared in numerous ways, such as added to soups, stews, salads, or used as a main ingredient in vegetarian dishes. They are a versatile and nutritious food that can contribute to a well-rounded and healthy eating pattern.', 50, 'No', 0, 1, '2024-01-21 18:21:14', '2024-02-11 14:24:02'),
(34, 2, 'Beans - Olotu', 168000.00, 0, 'kg', 100.00, 'Beans olotu in bag.jpg-721.jpg', 'Beans are a type of legume that come in various shapes, sizes, and colors, and they are a staple food in many cultures around the world. They are valued for their versatility, nutritional value, and culinary appeal.\r\n\r\nNutritionally, a 1-cup (177g) serving of cooked beans, such as black beans, kidney beans, or chickpeas, typically contains:\r\n\r\n- Calories: Varies by bean type, but generally ranges from 220-250 calories\r\n- Carbohydrates: Around 40-45g\r\n- Fiber: 10-15g\r\n- Protein: 15-20g\r\n- Fat: 1-2g\r\n\r\nIn addition to being a good source of complex carbohydrates, beans are nutrient-dense and provide a range of essential vitamins and minerals, including:\r\n\r\n- Folate (Vitamin B9)\r\n- Iron\r\n- Magnesium\r\n- Potassium\r\n- Zinc\r\n- B vitamins (varies by type)\r\n\r\nBeans are also rich in plant-based protein and are an excellent source of dietary fiber, which can promote digestive health and contribute to a feeling of fullness.\r\n\r\nThe specific nutritional content can vary depending on the type of bean, but in general, beans are a valuable source of nutrients and can be a beneficial addition to a balanced diet.\r\n\r\nBeans can be prepared in numerous ways, such as added to soups, stews, salads, or used as a main ingredient in vegetarian dishes. They are a versatile and nutritious food that can contribute to a well-rounded and healthy eating pattern.', 1, 'No', 0, 1, '2024-01-21 18:23:57', '2024-02-11 14:25:32'),
(35, 4, 'Plantain - ripe', 2200.00, 0, 'kg', 2.00, 'Plantain ripe.jpg-685.jpg', 'Plantain - ripe', 10, 'No', 0, 1, '2024-01-21 18:27:07', '2024-02-17 02:19:21'),
(36, 4, 'Plantain - Unripe', 2200.00, 0, 'kg', 2.00, 'Plantain.webp-585.webp', 'Plantain 2kg', 10, 'No', 0, 1, '2024-01-21 18:32:56', '2024-02-17 02:19:36'),
(40, 1, 'Tomato - (1 Paint Bucket)', 4700.00, 0, 'kg', 3.50, 'tomatoes-canva.jpg-997.jpg', 'Fresh from the vine to your table! Our juicy, ripe tomatoes are bursting with flavor and ready to elevate your favorite dishes. From savory sauces to vibrant salads, our tomatoes are the perfect addition to any meal. Taste the difference with our farm-fresh tomatoes!', 10, 'No', 0, 1, '2024-01-21 19:03:49', '2024-02-17 02:22:44'),
(41, 1, 'Tomato', 1500.00, 0, 'kg', 1.00, 'tomato-2.webp-984.webp', 'Fresh from the vine to your table! Our juicy, ripe tomatoes are bursting with flavor and ready to elevate your favorite dishes. From savory sauces to vibrant salads, our tomatoes are the perfect addition to any meal. Taste the difference with our farm-fresh tomatoes!', 90, 'No', 0, 1, '2024-01-21 19:07:19', '2024-02-17 02:23:59'),
(42, 1, 'Tomato', 39000.00, 0, 'kg', 25.00, 'Tomatoes crate.jpg-700.jpg', 'Fresh from the vine to your table! Our juicy, ripe tomatoes are bursting with flavor and ready to elevate your favorite dishes. From savory sauces to vibrant salads, our tomatoes are the perfect addition to any meal. Taste the difference with our farm-fresh tomatoes!', 10, 'No', 0, 1, '2024-01-21 19:09:37', '2024-02-17 02:26:01'),
(43, 1, 'Tomato', 66000.00, 0, 'kg', 50.00, 'tomatoes-canva.jpg-478.jpg', 'Fresh from the vine to your table! Our juicy, ripe tomatoes are bursting with flavor and ready to elevate your favorite dishes. From savory sauces to vibrant salads, our tomatoes are the perfect addition to any meal. Taste the difference with our farm-fresh tomatoes!', 10, 'No', 0, 1, '2024-01-21 19:13:10', '2024-02-17 02:26:55'),
(44, 1, 'Onions - Red (1 Paint Bucket)', 2900.00, 0, 'kg', 4.00, 'onion.webp-860.webp', 'Add depth and flavor to your dishes with our premium onions! Whether caramelized, raw, or sautéed, our fresh onions are the versatile ingredient your recipes have been missing. Elevate your cooking with the aromatic goodness of our farm-fresh onions!', 10, 'No', 0, 1, '2024-01-21 19:18:30', '2024-02-17 02:31:10'),
(49, 1, 'Onions - Red', 1000.00, 0, 'kg', 1.00, 'Red Onion.webp-340.webp', 'Add depth and flavor to your dishes with our premium onions! Whether caramelized, raw, or sautéed, our fresh onions are the versatile ingredient your recipes have been missing. Elevate your cooking with the aromatic goodness of our farm-fresh onions!', 100, 'No', 0, 1, '2024-01-21 19:44:12', '2024-02-17 02:33:26'),
(50, 1, 'Onions - Red', 36000.00, 0, 'kg', 50.00, 'red-onion bag.webp-331.webp', 'Onions - Red (50kg)', 5, 'No', 0, 1, '2024-01-21 19:48:47', '2024-02-17 02:34:41'),
(51, 1, 'Onions - Red', 72000.00, 0, 'kg', 100.00, 'red-onion bag.webp-298.webp', 'Onions - Red (100kg)', 3, 'No', 0, 1, '2024-01-21 19:51:26', '2024-02-17 02:35:08'),
(52, 1, 'Ugu -Dozen Bunches', 5300.00, 0, 'kg', 0.00, 'Ugu 2.jpg-644.jpg', 'Elevate your culinary creations with the fresh and nutritious (Ugu) fluted pumpkin leaves! Bursting with flavor and packed with essential nutrients, these vibrant leaves are perfect for soups, stews, and traditional dishes. Experience the authentic taste of Africa with our premium fluted pumpkin leaves!', 100, 'No', 0, 1, '2024-01-21 19:57:04', '2024-02-17 02:38:20'),
(53, 1, 'Ugu - Bunch', 500.00, 0, 'kg', 0.00, 'Ugu-leaves.jpg-875.jpg', 'Elevate your culinary creations with the fresh and nutritious (Ugu) fluted pumpkin leaves! Bursting with flavor and packed with essential nutrients, these vibrant leaves are perfect for soups, stews, and traditional dishes. Experience the authentic taste of Africa with our premium fluted pumpkin leaves!', 100, 'No', 0, 1, '2024-01-21 19:59:28', '2024-02-17 02:40:49'),
(54, 1, 'Tatase Pepper (1 Paint Bucket)', 2700.00, 0, 'kg', 1.65, 'Tatashe red-bell pepper.webp-802.webp', 'Tatashe Pepper Grade B (1 Paint Bucket, 1.65kg)', 20, 'No', 0, 1, '2024-01-21 20:14:06', '2024-02-17 02:44:57'),
(58, 1, 'Tatase Pepper', 39000.00, 0, 'kg', 25.00, 'Tatashe red-bell pepper.webp-857.webp', 'Tatase Pepper', 10, 'No', 0, 1, '2024-01-21 20:31:41', '2024-02-17 02:46:40'),
(59, 1, 'Tatase Pepper', 9300.00, 0, 'kg', 6.25, 'Tatashe red-bell pepper.webp-559.webp', 'Tatase Pepper (6.25kg)', 10, 'No', 0, 1, '2024-01-21 20:36:46', '2024-02-17 02:47:30'),
(60, 1, 'Tatase Pepper', 18200.00, 0, 'kg', 12.50, 'Tatashe red-bell pepper.webp-126.webp', 'Tatase Pepper - (12.5kg)', 10, 'No', 0, 1, '2024-01-21 20:39:56', '2024-02-17 02:48:26'),
(62, 1, 'Pepper - Ata Rodo', 18200.00, 0, 'kg', 12.50, 'Ata Rodo 2.webp-701.webp', 'Spice up your dishes with our fiery Scotch bonnet peppers! Known for their bold heat and fruity flavor, these vibrant peppers are a staple in Caribbean and West African cuisine. Whether you\'re making salsas, marinades, or spicy sauces, our premium Scotch bonnets will bring the heat to your cooking!', 20, 'No', 0, 1, '2024-01-21 20:55:59', '2024-02-17 02:52:47'),
(63, 1, 'Pepper - Ata Rodo (1 Paint Bucket)', 2700.00, 0, 'kg', 1.75, 'Ata Rodo 2.webp-228.webp', 'Spice up your dishes with our fiery Scotch bonnet peppers! Known for their bold heat and fruity flavor, these vibrant peppers are a staple in Caribbean and West African cuisine. Whether you\'re making salsas, marinades, or spicy sauces, our premium Scotch bonnets will bring the heat to your cooking!', 10, 'No', 0, 1, '2024-01-21 21:00:21', '2024-02-17 02:53:52'),
(66, 1, 'Pepper - Ata Rodo', 39000.00, 0, 'kg', 25.00, 'Ata Rodo.jpeg-554.jpeg', 'Spice up your dishes with our fiery Scotch bonnet peppers! Known for their bold heat and fruity flavor, these vibrant peppers are a staple in Caribbean and West African cuisine. Whether you\'re making salsas, marinades, or spicy sauces, our premium Scotch bonnets will bring the heat to your cooking!', 20, 'No', 0, 1, '2024-01-21 21:09:11', '2024-02-17 02:55:16'),
(68, 1, 'Green Ata Rodo (1 Paint Bucket)', 39000.00, 0, 'kg', 1.70, 'Ata Rodo green.webp-162.webp', 'Spice up your dishes with our fiery Scotch bonnet peppers! Known for their bold heat and fruity flavor, these vibrant peppers are a staple in Caribbean and West African cuisine. Whether you\'re making salsas, marinades, or spicy sauces, our premium Scotch bonnets will bring the heat to your cooking!', 10, 'No', 0, 1, '2024-01-21 21:15:02', '2024-02-17 02:57:05'),
(69, 1, 'Green Ata Rodo', 2300.00, 0, 'kg', 1.00, 'Ata Rodo green.webp-947.webp', 'Spice up your dishes with our fiery Scotch bonnet peppers! Known for their bold heat and fruity flavor, these vibrant peppers are a staple in Caribbean and West African cuisine. Whether you\'re making salsas, marinades, or spicy sauces, our premium Scotch bonnets will bring the heat to your cooking!', 20, 'No', 0, 1, '2024-01-21 21:16:57', '2024-02-17 02:57:37'),
(70, 1, 'Green Ata Rodo', 2300.00, 0, 'kg', 10.00, 'Ata Rodo green.webp-620.webp', 'Spice up your dishes with our fiery Scotch bonnet peppers! Known for their bold heat and fruity flavor, these vibrant peppers are a staple in Caribbean and West African cuisine. Whether you\'re making salsas, marinades, or spicy sauces, our premium Scotch bonnets will bring the heat to your cooking!', 10, 'No', 0, 1, '2024-01-21 21:18:44', '2024-02-17 02:58:14'),
(71, 2, 'Fresh Sweet Corn', 1200.00, 0, 'kg', 1.00, 'Sweet Corn.png-804.png', 'Fresh sweet corn, also known simply as sweet corn, is a delicious and versatile cereal grain that is enjoyed around the world. It is well-known for its sweet, juicy kernels and is a popular ingredient in many dishes.\r\n\r\nNutritionally, a 1-cup (164g) serving of cooked sweet corn typically contains:\r\n\r\n- Calories: 177\r\n- Carbohydrates: 41g\r\n- Fiber: 4.6g\r\n- Sugars: 6.3g\r\n- Protein: 5.4g\r\n- Fat: 2.1g\r\n\r\nSweet corn is a good source of several essential nutrients, including:\r\n\r\n- Vitamin C\r\n- Thiamine (Vitamin B1)\r\n- Folate (Vitamin B9)\r\n- Pantothenic acid (Vitamin B5)\r\n- Magnesium\r\n- Phosphorus\r\n- Potassium\r\n\r\nIn addition to these nutrients, sweet corn is also a good source of antioxidants, such as lutein and zeaxanthin, which are beneficial for eye health.\r\n\r\nFresh sweet corn can be enjoyed in various ways, including steamed, boiled, grilled, or added to salads, soups, and casseroles. Its sweet flavor and nutritional content make it a valuable and tasty addition to a balanced diet.', 20, 'Yes', 0, 1, '2024-01-21 21:46:30', '2024-02-17 02:59:26'),
(72, 4, 'Strawberry (1 Pack)', 3600.00, 0, 'kg', 0.00, 'strawberry.webp-623.webp', 'Indulge in the sweetness of summer with our luscious strawberries! Bursting with flavor and packed with antioxidants, our farm-fresh strawberries are perfect for snacking, baking, and creating delightful desserts. Elevate your day with the vibrant taste of our premium strawberries!', 20, 'No', 0, 1, '2024-01-21 22:41:59', '2024-02-17 03:02:03'),
(73, 3, 'Mama Gold Semolina', 6700.00, 0, 'kg', 5.00, 'Mama Gold Semolina.webp-788.webp', 'Mama Gold Semolina (5kg)', 20, 'No', 0, 1, '2024-01-21 23:03:05', '2024-02-17 03:02:55'),
(74, 4, 'Cabbage Jos- Peeled', 12700.00, 0, 'kg', 25.00, 'fresh-cabbage.webp-575.webp', 'Fresh, crisp, and versatile – our farm-fresh cabbage is here to elevate your meals! Whether you\'re creating coleslaw, stir-fries, or hearty soups, our premium cabbage is the perfect addition to your culinary creations. Experience the goodness of our locally grown cabbage today!', 100, 'No', 0, 1, '2024-01-22 01:00:56', '2024-02-17 03:05:24'),
(75, 4, 'Cabbage Jos -Peeled', 25300.00, 0, 'kg', 50.00, 'fresh-cabbage.webp-444.webp', 'Fresh, crisp, and versatile – our farm-fresh cabbage is here to elevate your meals! Whether you\'re creating coleslaw, stir-fries, or hearty soups, our premium cabbage is the perfect addition to your culinary creations. Experience the goodness of our locally grown cabbage today!', 10, 'No', 0, 1, '2024-01-22 01:03:03', '2024-02-17 03:06:01'),
(76, 4, 'Cabbage Jos - Peeled', 1200.00, 0, 'kg', 1.00, 'fresh-cabbage 2.webp-381.webp', 'Fresh, crisp, and versatile – our farm-fresh cabbage is here to elevate your meals! Whether you\'re creating coleslaw, stir-fries, or hearty soups, our premium cabbage is the perfect addition to your culinary creations. Experience the goodness of our locally grown cabbage today!', 100, 'Yes', 0, 1, '2024-01-22 01:07:44', '2024-02-17 03:07:05'),
(77, 11, 'Periwinkle - With Shell (1 Paint Bucket)', 3900.00, 0, 'kg', 0.00, 'periwinkles-shellfish.png-365.png', 'Periwinkle - With Shell (1 Paint Bucket)', 5, 'No', 0, 1, '2024-01-22 01:25:20', '2024-01-26 18:45:36'),
(78, 11, 'Periwinkle - Without Shell (1 Paint Bucket)', 23000.00, 0, 'kg', 0.00, 'Periwinkle-no-shell.webp-191.webp', 'Periwinkle - Without Shell (1 Paint Bucket)', 5, 'No', 0, 1, '2024-01-22 01:26:57', '2024-02-05 02:34:45'),
(79, 3, 'Potato - Sweet', 600.00, 0, 'kg', 1.00, 'african-white-sweet-potatoes.jpg-218.jpg', 'Sweet potatoes are a nutritious and delicious root vegetable that comes in a variety of colors, including orange, purple, and white. They are known for their sweet flavor and are a staple food in many cuisines around the world.\r\n\r\nNutritionally, a 1-cup (200g) serving of cooked, mashed sweet potato typically contains:\r\n\r\n- Calories: 180\r\n- Carbohydrates: 41g\r\n- Fiber: 6.6g\r\n- Sugars: 16.9g\r\n- Protein: 4g\r\n- Fat: 0.3g\r\n\r\nSweet potatoes are an excellent source of several essential vitamins and minerals, including:\r\n\r\n- Vitamin A\r\n- Vitamin C\r\n- Vitamin B6\r\n- Potassium\r\n- Manganese\r\n\r\nThey also provide significant amounts of antioxidants, particularly beta-carotene, which gives orange sweet potatoes their vibrant color and is converted into vitamin A in the body.\r\n\r\nSweet potatoes are high in fiber and relatively low on the glycemic index, making them a good choice for those looking to manage blood sugar levels. They are also naturally gluten-free.\r\n\r\nSweet potatoes can be prepared in numerous ways, such as baked, boiled, mashed, or roasted. They are versatile and can be used in both savory and sweet dishes, adding a nutritional boost to meals.\r\n\r\nOverall, sweet potatoes are a nutrient-dense, delicious vegetable that provides a range of essential nutrients and can be a valuable addition to a healthy, balanced diet.', 2, 'No', 0, 1, '2024-01-22 01:34:47', '2024-02-11 12:23:06'),
(80, 3, 'Potato - Sweet', 20500.00, 0, 'kg', 50.00, 'african-white-sweet-potatoes.jpg-322.jpg', 'Sweet potatoes are a nutritious and delicious root vegetable that comes in a variety of colors, including orange, purple, and white. They are known for their sweet flavor and are a staple food in many cuisines around the world.\r\n\r\nNutritionally, a 1-cup (200g) serving of cooked, mashed sweet potato typically contains:\r\n\r\n- Calories: 180\r\n- Carbohydrates: 41g\r\n- Fiber: 6.6g\r\n- Sugars: 16.9g\r\n- Protein: 4g\r\n- Fat: 0.3g\r\n\r\nSweet potatoes are an excellent source of several essential vitamins and minerals, including:\r\n\r\n- Vitamin A\r\n- Vitamin C\r\n- Vitamin B6\r\n- Potassium\r\n- Manganese\r\n\r\nThey also provide significant amounts of antioxidants, particularly beta-carotene, which gives orange sweet potatoes their vibrant color and is converted into vitamin A in the body.\r\n\r\nSweet potatoes are high in fiber and relatively low on the glycemic index, making them a good choice for those looking to manage blood sugar levels. They are also naturally gluten-free.\r\n\r\nSweet potatoes can be prepared in numerous ways, such as baked, boiled, mashed, or roasted. They are versatile and can be used in both savory and sweet dishes, adding a nutritional boost to meals.\r\n\r\nOverall, sweet potatoes are a nutrient-dense, delicious vegetable that provides a range of essential nutrients and can be a valuable addition to a healthy, balanced diet.', 0, 'No', 0, 1, '2024-01-22 01:38:25', '2024-02-11 12:24:05'),
(81, 3, 'Potato - Sweet', 41500.00, 0, 'kg', 100.00, 'african-white-sweet-potatoes.jpg-222.jpg', 'Sweet potatoes are a nutritious and delicious root vegetable that comes in a variety of colors, including orange, purple, and white. They are known for their sweet flavor and are a staple food in many cuisines around the world.\r\n\r\nNutritionally, a 1-cup (200g) serving of cooked, mashed sweet potato typically contains:\r\n\r\n- Calories: 180\r\n- Carbohydrates: 41g\r\n- Fiber: 6.6g\r\n- Sugars: 16.9g\r\n- Protein: 4g\r\n- Fat: 0.3g\r\n\r\nSweet potatoes are an excellent source of several essential vitamins and minerals, including:\r\n\r\n- Vitamin A\r\n- Vitamin C\r\n- Vitamin B6\r\n- Potassium\r\n- Manganese\r\n\r\nThey also provide significant amounts of antioxidants, particularly beta-carotene, which gives orange sweet potatoes their vibrant color and is converted into vitamin A in the body.\r\n\r\nSweet potatoes are high in fiber and relatively low on the glycemic index, making them a good choice for those looking to manage blood sugar levels. They are also naturally gluten-free.\r\n\r\nSweet potatoes can be prepared in numerous ways, such as baked, boiled, mashed, or roasted. They are versatile and can be used in both savory and sweet dishes, adding a nutritional boost to meals.\r\n\r\nOverall, sweet potatoes are a nutrient-dense, delicious vegetable that provides a range of essential nutrients and can be a valuable addition to a healthy, balanced diet.', 0, 'No', 0, 1, '2024-01-22 01:40:33', '2024-02-11 12:27:21'),
(82, 11, 'Ponmo - COW SKIN (BROWN)', 3500.00, 0, 'kg', 1.00, 'Ponmo 2.png-247.png', 'Ponmo - COW SKIN ( BROWN) 1KG', 100, 'Yes', 0, 1, '2024-01-22 01:44:43', '2024-02-12 18:07:38'),
(83, 3, 'Ogbono', 3500.00, 0, 'kg', 0.50, 'Ogbono.png-301.png', 'Ogbono (500g, 1 Derica)', 5, 'No', 0, 1, '2024-01-22 01:49:51', '2024-02-17 03:53:09'),
(84, 2, 'Runner Beans', 69000.00, 0, 'kg', 20.00, 'Runner Beans.webp-424.webp', 'Runner Beans (20kg)', 10, 'No', 0, 1, '2024-01-22 01:52:40', '2024-02-17 03:10:40'),
(85, 3, 'Yam Flour or Elubo Isu', 1800.00, 0, 'kg', 1.00, 'Yam Flour elubo isu.jpg-531.jpg', 'Yam Flour or Elubo Isu (1kg)', 10, 'No', 0, 1, '2024-01-22 01:55:14', '2024-01-22 01:55:14'),
(86, 3, 'Yam Flour or Elubo Isu', 16769.00, 0, 'kg', 0.00, 'Yam-Flour - Elubo Isu Garawa.webp-507.webp', 'Yam Flour or Elubo Isu (Garawa)', 10, 'No', 0, 1, '2024-01-22 01:57:15', '2024-01-22 01:57:15');
INSERT INTO `products` (`id`, `category_id`, `product_name`, `price`, `product_discount`, `unit`, `product_weight`, `main_image`, `description`, `quantity`, `is_featured`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(87, 3, 'Yam Flour or Elubo Isu (1 Paint Bucket)', 4300.00, 0, 'kg', 2.45, 'Yam-Flour - Elubo Isu.webp-558.webp', 'Yam Flour or Elubo Isu (1 Paint Bucket, 2.45kg)', 20, 'No', 0, 1, '2024-01-22 01:59:41', '2024-01-26 18:46:21'),
(88, 3, 'Plantain Flour or Elubo Ogede', 2000.00, 0, 'kg', 1.00, 'Plantain flour - Elubo Ogede.webp-840.webp', 'Plantain Flour or Elubo Ogede (1kg)', 20, 'No', 0, 1, '2024-01-22 02:02:36', '2024-02-17 03:12:45'),
(89, 3, 'Plantain Flour or Elubo Ogede (1 Paint)', 4990.00, 0, 'kg', 2.40, 'Plantain flour - Elubo Ogede.webp-838.webp', 'Plantain Flour or Elubo Ogede (1 Paint, 2.4kg)', 10, 'No', 0, 1, '2024-01-22 02:06:56', '2024-01-26 18:47:17'),
(90, 3, 'Lafun - Dried Cassava', 6700.00, 0, 'kg', 0.00, 'Lafun.jpg-580.jpg', 'Lafun - Dried Cassava (Garawa)', 20, 'No', 0, 1, '2024-01-22 02:09:57', '2024-02-17 03:13:39'),
(91, 2, 'Runner Beans', 3500.00, 0, 'kg', 1.00, 'Runner Beans.webp-743.webp', 'Runner Beans (1kg)', 50, 'No', 0, 1, '2024-01-22 02:14:38', '2024-01-22 02:14:38'),
(93, 3, 'Lafun - Blended (1 Paint Bucket)', 4000.00, 0, 'kg', 1.90, 'Lafun Flour.png-409.png', 'Lafun - Blended (1 Paint Bucket, 1.9k)', 20, 'No', 0, 1, '2024-01-22 22:44:46', '2024-02-17 03:16:00'),
(94, 2, 'Ofada Rice - Local (1 Paint Bucket', 6500.00, 0, 'kg', 4.00, 'ofada-rice-.jpg-178.jpg', 'Ofada Rice - Local (1 Paint Bucket, 4kg)', 10, 'No', 0, 1, '2024-01-22 22:48:34', '2024-01-26 18:57:25'),
(95, 2, 'Ofada Rice - Local', 40000.00, 0, 'kg', 25.00, 'Ofada Rice.jpeg-755.jpeg', 'Ofada Rice - Local (25kg)', 10, 'No', 0, 1, '2024-01-22 22:50:42', '2024-01-23 01:23:47'),
(96, 2, 'Ofada Rice - Local', 79000.00, 0, 'kg', 50.00, 'Ofada Rice.jpeg-178.jpeg', 'Ofada Rice - Local (50kg)', 10, 'No', 0, 1, '2024-01-22 22:53:08', '2024-01-23 01:24:18'),
(97, 3, 'Yam - Ogoja (Big, 100 Tubers)', 350000.00, 0, 'kg', 0.00, 'Yam.png-762.png', 'Yam - Ogoja (Big, 100 Tubers)', 5, 'No', 0, 1, '2024-01-22 23:03:50', '2024-01-26 18:58:32'),
(98, 3, 'Yam - Ogoja (Big, 1 Tuber)', 3500.00, 0, 'kg', 0.00, 'Yam-Tubers.jpg-548.jpg', 'Yam - Ogoja (Big, 1 Tuber)', 100, 'No', 0, 1, '2024-01-22 23:07:04', '2024-01-26 18:59:12'),
(99, 3, 'Yam - Ogoja (Medium, 1 Tuber)', 3200.00, 0, 'kg', 0.00, 'Yam-Tubers.jpg-448.jpg', 'Yam - Ogoja (Medium, 1 Tuber)', 100, 'No', 0, 1, '2024-01-22 23:09:23', '2024-01-26 18:59:37'),
(100, 3, 'Yam - Ogoja (Medium, 100 Tubers)', 335600.00, 0, 'kg', 0.00, 'Yam.png-153.png', 'Yam - Ogoja (Medium, 100 Tubers)', 5, 'No', 0, 1, '2024-01-22 23:11:49', '2024-01-26 19:00:23'),
(101, 2, 'Big Bull Rice', 18500.00, 0, 'kg', 10.00, 'Rice big bull 10kg.jpg-625.jpg', 'Big Bull Rice (10kg)', 100, 'No', 0, 1, '2024-01-22 23:17:57', '2024-01-23 01:56:18'),
(102, 2, 'Big Bull Rice', 9500.00, 0, 'kg', 5.00, 'Rice big bull 10kg.jpg-588.jpg', 'Big Bull Rice (5kg)', 10, 'No', 0, 1, '2024-01-22 23:20:32', '2024-01-23 01:55:22'),
(103, 2, 'Big Bull Rice', 34600.00, 0, 'kg', 25.00, 'Rice Big-Bull-50kg.jpg-759.jpg', 'Big Bull Rice (25kg)', 10, 'No', 0, 1, '2024-01-22 23:24:51', '2024-01-23 01:53:47'),
(104, 2, 'Big Bull Rice', 69000.00, 0, 'kg', 50.00, 'Rice Big-Bull-50kg.jpg-602.jpg', 'Big Bull Rice (50kg)', 10, 'No', 0, 1, '2024-01-22 23:29:00', '2024-02-17 03:20:32'),
(105, 2, 'Soya beans', 630.00, 0, 'kg', 1.00, 'soyabean kg.jpeg-422.jpeg', 'Soya beans (1kg)', 20, 'No', 0, 1, '2024-01-22 23:37:00', '2024-01-23 01:33:34'),
(106, 2, 'Soya beans', 29500.00, 0, 'kg', 50.00, 'soyabean.jpg-582.jpg', 'Soya beans (50kg)', 10, 'No', 0, 1, '2024-01-22 23:38:55', '2024-01-23 01:34:07'),
(107, 2, 'Soya Beans', 59000.00, 0, 'kg', 100.00, 'soyabean.jpg-438.jpg', 'Soya Beans (100kg)', 5, 'No', 0, 1, '2024-01-22 23:42:43', '2024-01-23 01:34:59'),
(108, 3, 'Garri - White (1 Paint Bucket)', 1600.00, 0, 'kg', 3.15, 'garri Bag.jpg-444.jpg', 'Garri - White (1 Paint Bucket)', 100, 'No', 0, 1, '2024-01-22 23:45:50', '2024-01-28 19:17:20'),
(109, 3, 'Garri - Ijebu Premium', 52000.00, 0, 'kg', 50.00, 'Ijebu Garri 50kg.jpeg-620.jpeg', 'Garri - Ijebu Premium (50kg)', 20, 'No', 0, 1, '2024-01-22 23:52:39', '2024-02-17 03:23:59'),
(110, 3, 'Garri - Ijebu (1 Paint Bucket)', 3400.00, 0, 'kg', 3.15, 'Ijebu Garri 1kg.webp-944.webp', 'Garri - Ijebu (1 Paint Bucket, 3.15kg)', 100, 'No', 0, 1, '2024-01-22 23:57:41', '2024-02-17 03:24:55'),
(111, 2, 'Tuwo Rice', 4300.00, 0, 'kg', 4.00, 'Tuwo.jpg-912.jpg', 'Tuwo Rice (1 Paint Bucket, 4kg)', 25, 'No', 0, 1, '2024-01-23 00:00:54', '2024-01-23 01:30:44'),
(112, 2, 'Tuwo Rice', 1200.00, 0, 'kg', 1.00, 'Tuwo.jpg-514.jpg', 'Tuwo Rice (1kg)', 100, 'No', 0, 1, '2024-01-23 00:04:04', '2024-01-23 01:29:43'),
(113, 2, 'Tuwo Rice', 46700.00, 0, 'kg', 45.00, 'Tuwo.jpg-999.jpg', 'Tuwo Rice (45kg)', 5, 'No', 0, 1, '2024-01-23 00:09:50', '2024-01-23 01:28:53'),
(114, 2, 'Corn - Yellow (1 Paint Bucket)', 3500.00, 0, 'kg', 3.50, 'Yellow Corn Paint.jpg-950.jpg', 'Yellow corn, also known as sweet corn, is a popular cereal grain known for its sweet, juicy kernels. It is a staple food in many cultures and can be enjoyed in various forms, including fresh, frozen, canned, or processed into products like cornmeal and corn flour.\r\n\r\nNutritionally, a 1-cup (164g) serving of cooked yellow corn typically contains:\r\n\r\n- Calories: 177\r\n- Carbohydrates: 41g\r\n- Fiber: 4.6g\r\n- Sugars: 6.3g\r\n- Protein: 5.4g\r\n- Fat: 2.1g\r\n\r\nYellow corn is a good source of several essential nutrients, including:\r\n\r\n- Vitamin C\r\n- Thiamine (Vitamin B1)\r\n- Folate (Vitamin B9)\r\n- Pantothenic acid (Vitamin B5)\r\n- Magnesium\r\n- Phosphorus\r\n- Potassium\r\n\r\nYellow corn is also a good source of antioxidants, such as lutein and zeaxanthin, which are beneficial for eye health.\r\n\r\nIt\'s important to note that the nutritional content of corn can vary depending on how it\'s prepared and served. For example, adding butter or salt can impact the overall nutritional profile.\r\n\r\nYellow corn can be enjoyed in a variety of ways, including steamed, boiled, grilled, or added to salads, soups, and casseroles. Its sweet flavor and nutritional value make it a valuable addition to a balanced diet.', 1, 'No', 0, 1, '2024-01-23 00:15:50', '2024-02-17 03:26:28'),
(115, 2, 'Corn - Yellow', 950.00, 0, 'kg', 1.00, 'Yellow Corn 1kg.jpg-671.jpg', 'Yellow corn, also known as sweet corn, is a popular cereal grain known for its sweet, juicy kernels. It is a staple food in many cultures and can be enjoyed in various forms, including fresh, frozen, canned, or processed into products like cornmeal and corn flour.\r\n\r\nNutritionally, a 1-cup (164g) serving of cooked yellow corn typically contains:\r\n\r\n- Calories: 177\r\n- Carbohydrates: 41g\r\n- Fiber: 4.6g\r\n- Sugars: 6.3g\r\n- Protein: 5.4g\r\n- Fat: 2.1g\r\n\r\nYellow corn is a good source of several essential nutrients, including:\r\n\r\n- Vitamin C\r\n- Thiamine (Vitamin B1)\r\n- Folate (Vitamin B9)\r\n- Pantothenic acid (Vitamin B5)\r\n- Magnesium\r\n- Phosphorus\r\n- Potassium\r\n\r\nYellow corn is also a good source of antioxidants, such as lutein and zeaxanthin, which are beneficial for eye health.\r\n\r\nIt\'s important to note that the nutritional content of corn can vary depending on how it\'s prepared and served. For example, adding butter or salt can impact the overall nutritional profile.\r\n\r\nYellow corn can be enjoyed in a variety of ways, including steamed, boiled, grilled, or added to salads, soups, and casseroles. Its sweet flavor and nutritional value make it a valuable addition to a balanced diet.', 10, 'No', 0, 1, '2024-01-23 00:18:11', '2024-02-11 12:55:47'),
(116, 2, 'Millet', 72000.00, 0, 'kg', 100.00, 'millet.webp-314.webp', 'Corn- Millet (100kg)', 5, 'No', 0, 1, '2024-01-23 00:37:41', '2024-01-23 01:26:29'),
(117, 2, 'Millet', 850.00, 0, 'kg', 1.00, 'millet.webp-940.webp', 'Millet (1kg)', 100, 'No', 0, 1, '2024-01-23 00:42:21', '2024-01-23 01:25:57'),
(118, 2, 'Millet', 3000.00, 0, 'kg', 4.00, 'millet.webp-674.webp', 'Millet (1 Paint Bucket, 4kg)', 20, 'No', 0, 1, '2024-01-23 00:53:10', '2024-01-23 01:25:32'),
(119, 2, 'Corn - White', 950.00, 0, 'kg', 1.00, 'White Corn1.jpg-475.jpg', 'Corn - White (1kg)', 100, 'No', 0, 1, '2024-01-23 01:10:26', '2024-01-23 01:10:26'),
(120, 2, 'Corn - White', 3350.00, 0, 'kg', 0.00, 'White Corn1.jpg-830.jpg', 'Corn - White (1 Paint Bucket)', 20, 'No', 0, 1, '2024-01-23 01:15:55', '2024-01-23 01:15:55'),
(122, 3, 'Cocoyam (1 Paint Bucket)', 3000.00, 0, 'kg', 0.00, 'cocoyam.png-440.png', 'Cocoyam (1 Paint Bucket)', 10, 'No', 0, 1, '2024-01-23 01:27:46', '2024-02-17 03:31:19'),
(123, 2, 'Beans - Oloyin Maiduguri', 1200.00, 0, 'kg', 0.60, 'Beans.jpg-204.jpg', 'Beans - Oloyin Maiduguri (1 Derica, 600g)', 20, 'No', 0, 1, '2024-01-23 01:34:36', '2024-02-17 03:32:34'),
(124, 3, 'Garri - Ijebu Premium', 1200.00, 0, 'kg', 1.00, 'Ijebu Garri 50kg.jpeg-843.jpeg', 'Garri - Ijebu Premium (1kg)', 100, 'No', 0, 1, '2024-01-23 01:47:09', '2024-02-17 03:33:54'),
(125, 3, 'Garri Bendel - White (1 Paint Bucket)', 2300.00, 0, 'kg', 3.15, 'Garri-Ijebu Paint.webp-984.webp', 'Garri Bendel - White (1 Paint Bucket, 3.15kg)', 100, 'No', 0, 1, '2024-01-23 15:01:46', '2024-02-17 03:35:02'),
(126, 3, 'Garri Bendel - White', 900.00, 0, 'kg', 1.00, 'Ijebu Garri 50kg.jpeg-618.jpeg', 'Garri Bendel - White (1kg)', 100, 'No', 0, 1, '2024-01-23 15:05:06', '2024-02-17 03:35:40'),
(127, 3, 'Garri Bendel - White', 29000.00, 0, 'kg', 40.00, 'Ijebu Garri 1kg.webp-705.webp', 'Garri Bendel - White (40kg)', 20, 'No', 0, 1, '2024-01-23 15:32:18', '2024-02-17 03:36:23'),
(131, 3, 'Water Yam (Big, 100 Tubers)', 225000.00, 0, 'kg', 0.00, 'Water Yam.jpg-799.jpg', 'Water Yam (Big, 100 Tubers)', 2, 'No', 0, 1, '2024-01-23 16:04:52', '2024-02-17 03:40:22'),
(132, 2, 'Guinea Corn - Red', 90000.00, 0, 'kg', 100.00, 'Guinea Corn 100kg.jpg-316.jpg', 'Guinea Corn - Red (100kg)', 10, 'No', 0, 1, '2024-01-23 16:10:44', '2024-01-23 16:10:44'),
(133, 2, 'Guinea Corn - Red', 3500.00, 0, 'kg', 4.00, 'Guinea Corn 100kg.jpg-742.jpg', 'Guinea Corn - Red (1 Paint Bucket, 4kg)', 100, 'No', 0, 1, '2024-01-23 16:14:39', '2024-01-23 16:32:02'),
(134, 2, 'Guinea Corn - White', 955.00, 0, 'kg', 1.00, 'White Guinea Corn - Bag.jpeg-419.jpeg', 'Guinea Corn - White (1kg)', 100, 'No', 0, 1, '2024-01-23 16:19:50', '2024-01-23 16:19:50'),
(135, 2, 'Guinea Corn - White', 95000.00, 0, 'kg', 100.00, 'White Guinea Corn - Bag.jpeg-429.jpeg', 'Guinea Corn - White (100kg)', 10, 'No', 0, 1, '2024-01-23 16:22:40', '2024-01-23 16:22:40'),
(136, 2, 'Guinea Corn - White', 3500.00, 0, 'kg', 4.00, 'White Guinea Corn - Bag.jpeg-749.jpeg', 'Guinea Corn - White (paint Bucket, 4kg)', 50, 'No', 0, 1, '2024-01-23 16:36:50', '2024-01-23 16:36:50'),
(137, 2, 'Guinea Corn - Red', 950.00, 0, 'kg', 1.00, 'Guinea Corn 100kg.jpg-118.jpg', 'Guinea Corn - Red (1kg)', 100, 'No', 0, 1, '2024-01-23 16:38:58', '2024-01-23 16:38:58'),
(138, 3, 'Egusi - Hand Peeled', 2050.00, 0, 'kg', 0.50, 'egusi-1.webp-661.webp', 'Egusi - Hand Peeled (500g, 1 Derica)', 20, 'No', 0, 1, '2024-01-23 16:44:08', '2024-01-23 16:44:08'),
(139, 3, 'Water Yam (Medium, 1 Tuber)', 2200.00, 0, 'kg', 0.00, 'Water Yam.jpg-873.jpg', 'Water Yam (Medium, 1 Tuber)', 100, 'No', 0, 1, '2024-01-23 16:47:01', '2024-02-17 03:41:08'),
(140, 3, 'Water Yam (Big, 1 Tuber', 2400.00, 0, 'kg', 0.00, 'Water Yam.jpg-152.jpg', 'Water Yam (Big, 1 Tuber', 100, 'No', 0, 1, '2024-01-23 16:49:03', '2024-02-17 03:41:47'),
(141, 2, 'Red Kidney Beans (1 Paint Bucket)', 5060.00, 0, 'kg', 0.00, 'Red Kidney Beans.jpg-994.jpg', 'Red Kidney Beans (1 Paint Bucket)', 50, 'No', 0, 1, '2024-01-23 16:51:36', '2024-01-28 19:28:14'),
(142, 2, 'Red Kidney Beans', 1050.00, 0, 'kg', 0.00, 'Red Kidney Beans.jpg-707.jpg', 'Red Kidney Beans (1 Derica)', 40, 'No', 0, 1, '2024-01-23 16:55:15', '2024-01-23 16:55:15'),
(143, 2, 'Soya Beans', 650.00, 0, 'kg', 1.00, 'soyabean kg.jpeg-827.jpeg', 'Soya Beans (1kg)', 50, 'No', 0, 1, '2024-01-23 17:20:51', '2024-01-23 17:20:51'),
(144, 2, 'Soya Beans', 2050.00, 0, 'kg', 0.00, 'soyabean.jpg-968.jpg', 'Soya Beans (1 Paint Bucket)', 50, 'No', 0, 1, '2024-01-23 17:22:37', '2024-01-23 17:22:37'),
(145, 1, 'Bell Pepper', 10000.00, 10, 'kg', 2.00, 'Bell Pepper.png-134.png', 'Bell peppers, also known as sweet peppers or capsicums, are vibrant and versatile vegetables that come in a variety of colors, including red, yellow, orange, and green. They are a member of the nightshade family along with tomatoes and eggplants. Bell peppers are popular in a wide range of cuisines and can be eaten raw or cooked.\r\n\r\nNutritionally, bell peppers are low in calories and rich in essential vitamins and minerals. A 1-cup (149g) serving of chopped, raw bell pepper typically contains:\r\n\r\n- Calories: 46\r\n- Carbohydrates: 9g\r\n- Fiber: 3g\r\n- Sugar: 6g\r\n- Protein: 1g\r\n- Fat: 0.5g\r\n\r\nBell peppers are an excellent source of vitamin C, providing more than 100% of the recommended daily intake in just one cup. They also contain significant amounts of vitamin A, vitamin B6, vitamin K1, and folate. Additionally, bell peppers are rich in various antioxidants, particularly carotenoids like beta-carotene, which can have numerous health benefits.\r\n\r\nThe vibrant colors of bell peppers are not just for appearance; they also signify different nutritional profiles. For example, red bell peppers generally contain more vitamin C and beta-carotene than their green counterparts. All bell peppers are low in calories and high in fiber, making them a great addition to a balanced diet.\r\n\r\nOverall, bell peppers are a nutritious and delicious addition to meals, whether eaten raw with dips, tossed in salads, or cooked in a variety of dishes. Their crunchy texture and sweet flavor make them a versatile and popular vegetable choice.', 10, 'Yes', 0, 1, '2024-01-23 20:42:38', '2024-02-09 00:48:36'),
(147, 1, 'Green Pepper', 2250.00, 0, 'kg', 1.00, 'Tatashe green bell pepper.webp-175.webp', 'Green Pepper (1kg)', 100, 'No', 0, 1, '2024-01-23 20:47:28', '2024-01-23 20:47:28'),
(148, 1, 'Beef Tomatoes', 2400.00, 0, 'kg', 1.00, 'Beef Tomato 1.png-957.png', 'The Fresh Beef Tomatoes are slightly sweeter than regular tomatoes and is a great source of carbs and sugar. Additionally, the beef tomato is highly nutritious and loaded with vitamin C and E, calcium, magnesium, and more. With a slightly sweet and tart taste, these tomatoes are ideal for adding to various dishes. You can add the Lulu Fresh beef tomatoes to savoury items, burgers, and snacks\r\n\r\n1. Great source of vitamin C and E, sugar, carbs, and more\r\n2. Healthy addition to your meal\r\n3. Helps maintain a balanced diet\r\n4. Elevates the taste of your food', 10, 'No', 0, 1, '2024-01-23 20:50:48', '2024-02-08 23:27:46'),
(149, 3, 'Egusi - Machine Peeled', 3400.00, 0, 'kg', 1.00, 'egusi-1.webp-697.webp', 'Egusi - Machine Peeled (1kg)', 20, 'No', 0, 1, '2024-01-23 20:54:38', '2024-01-23 20:54:38'),
(150, 1, 'Onions - White', 50000.00, 0, 'kg', 50.00, 'organic-white-onion.webp-798.webp', 'Onions - White (50Kg)', 10, 'No', 0, 1, '2024-01-23 20:57:57', '2024-02-17 03:50:20'),
(151, 1, 'Onions - White', 4000.00, 0, 'kg', 4.00, 'organic-white-onion.webp-643.webp', 'Onions - White (1 Paint Bucket, 4kg)', 10, 'No', 0, 1, '2024-01-23 20:59:39', '2024-02-17 03:50:54'),
(155, 1, 'Egusi - Machine Peeled', 9500.00, 0, 'kg', 2.50, 'egusi-1.webp-664.webp', 'Egusi - Machine Peeled (1 Paint Bucket, 2.5kg)', 20, 'No', 0, 1, '2024-01-24 00:08:35', '2024-01-24 00:08:35'),
(156, 1, 'Egusi - Machine Peeled', 8500.00, 0, 'kg', 2.50, 'egusi-1.webp-577.webp', 'Egusi - Machine Peeled (1 Paint Bucket, 2.5kg)', 20, 'No', 0, 1, '2024-01-24 00:10:27', '2024-01-24 00:10:27'),
(157, 1, 'Ogbono', 20000.00, 0, 'kg', 2.50, 'Ogbono.png-525.png', 'Ogbono (1 Paint Bucket, 2.5kg)', 1, 'No', 0, 1, '2024-01-24 00:17:24', '2024-02-17 03:52:47'),
(158, 1, 'Ogbono', 7000.00, 0, 'kg', 1.00, 'Ogbono.png-409.png', 'Ogbono (1kg)', 3, 'No', 0, 1, '2024-01-24 00:21:30', '2024-02-17 03:53:59'),
(159, 4, 'Pineapple (Big, 1 Piece)', 1800.00, 0, 'kg', 0.00, 'pineapple 2.webp-173.webp', 'Pineapple (Big, 1 Piece)', 10, 'No', 0, 1, '2024-01-24 00:28:56', '2024-02-05 02:24:57'),
(160, 4, 'Pineapple (Big, 1 Dozen)', 20500.00, 0, 'kg', 0.00, 'Pineapple Cotonu.webp-788.webp', 'Pineapple (Big, 1 Dozen)', 100, 'No', 0, 1, '2024-01-24 00:31:13', '2024-02-05 02:25:33'),
(162, 2, 'Wheat - Local', 36500.00, 0, 'kg', 50.00, 'wheat Local.jpg-974.jpg', 'Wheat - Local (50kg)', 10, 'No', 0, 1, '2024-01-25 15:24:29', '2024-01-25 15:24:29'),
(163, 2, 'Wheat - Foreign (1 Paint Bucket)', 30100.00, 0, 'kg', 0.00, 'Wheat Foreign.jpg-495.jpg', 'Wheat - Foreign (1 Paint Bucket)', 10, 'No', 0, 1, '2024-01-25 15:44:12', '2024-02-05 02:38:01'),
(164, 2, 'Wheat - Local (1 Paint Bucket)', 3550.00, 0, 'kg', 0.00, 'wheat Local.jpg-637.jpg', 'Wheat - Local (1 Paint Bucket)', 10, 'No', 0, 1, '2024-01-25 15:46:56', '2024-02-05 02:37:18'),
(165, 2, 'Wheat - Foreign', 30000.00, 0, 'kg', 50.00, 'Wheat Foreign.jpg-121.jpg', 'Wheat - Foreign (50kg)', 10, 'No', 0, 1, '2024-01-25 15:50:04', '2024-02-17 15:42:10'),
(166, 1, 'Efo Shoko - Agric (Dozen Bunches)', 4500.00, 0, 'kg', 0.00, 'Efo Shoko.webp-338.webp', 'Efo Shoko - Agric (Dozen Bunches)', 10, 'No', 0, 1, '2024-01-25 15:53:41', '2024-02-17 15:43:20'),
(167, 1, 'Efo Shoko - Agric (1 Bunch)', 600.00, 0, 'kg', 0.00, 'Efo Shoko.webp-938.webp', 'Efo Shoko - Agric (1 Bunch)', 10, 'No', 0, 1, '2024-01-25 15:56:20', '2024-02-17 15:44:20'),
(168, 1, 'Ewedu leaf', 4700.00, 0, 'kg', 0.00, 'ewedu.jpg-509.jpg', 'Ewedu leaf (Dozen Bunches)', 10, 'No', 0, 1, '2024-01-25 15:59:06', '2024-01-25 15:59:06'),
(169, 1, 'Ewedu Leaf', 480.00, 0, 'kg', 0.00, 'ewedu.jpg-719.jpg', 'Ewedu Leaf (1 Bunch)', 20, 'No', 0, 1, '2024-01-25 16:01:34', '2024-01-25 16:01:34'),
(170, 4, 'Marrow', 11500.00, 0, 'kg', 10.00, 'Marrow.jpg-717.jpg', 'Marrow (1 Basket, 10kg)', 10, 'No', 0, 1, '2024-01-25 16:11:23', '2024-01-25 16:11:23'),
(171, 1, 'Waterleaf or Gbure (1 Bag)', 20000.00, 0, 'kg', 35.00, 'Waterleaf.webp-540.webp', 'Waterleaf or Gbure (1 Bag, 35kg)', 10, 'No', 0, 1, '2024-01-25 16:14:37', '2024-02-17 15:50:47'),
(172, 1, 'Waterleaf or Gbure', 770.00, 0, 'kg', 1.00, 'Waterleaf.webp-673.webp', 'Waterleaf or Gbure (1kg)', 10, 'No', 0, 1, '2024-01-25 16:16:12', '2024-01-25 16:16:12'),
(173, 1, 'Parsley Leaf', 1100.00, 0, 'kg', 0.00, 'Parsley Leaf.webp-267.webp', 'Parsley Leaf (1 Pack)', 10, 'No', 0, 1, '2024-01-25 16:17:56', '2024-01-25 16:17:56'),
(174, 1, 'Dry Tatashe (Quarter Bag)', 21600.00, 0, 'kg', 0.00, 'Dry Tatashe.webp-491.webp', 'Dry Tatashe (Quarter Bag)', 10, 'No', 0, 1, '2024-01-25 16:20:02', '2024-02-17 15:53:35'),
(175, 1, 'Locust Beans - Iru (Big Pack)', 1750.00, 0, 'kg', 0.00, 'Locust Beans - Iru.png-570.png', 'Locust Beans - Iru (Big Pack)', 10, 'No', 0, 1, '2024-01-25 16:22:06', '2024-02-17 15:54:58'),
(176, 1, 'Lettuce', 20800.00, 0, 'kg', 10.00, 'Lettuce.jpeg-433.jpeg', 'Lettuce (10kg)', 10, 'No', 0, 1, '2024-01-25 16:28:06', '2024-01-25 16:28:06'),
(177, 1, 'Lettuce', 2250.00, 0, 'kg', 1.00, 'Lettuce.jpeg-904.jpeg', 'Lettuce (1kg)', 10, 'No', 0, 1, '2024-01-25 16:29:36', '2024-01-25 16:29:36'),
(178, 1, 'Dry Pepper (1 Paint Bucket)', 2800.00, 0, 'kg', 0.00, 'Dry Pepper.webp-972.webp', 'Dry Pepper (1 Paint Bucket)', 10, 'No', 0, 1, '2024-01-25 16:32:18', '2024-02-17 15:58:41'),
(179, 1, 'Dry Pepper (1 Bag)', 53000.00, 0, 'kg', 25.00, 'Dry Pepper.webp-126.webp', 'Dry Pepper (25kg,1 Bag)', 10, 'No', 0, 1, '2024-01-25 16:34:15', '2024-02-17 15:59:14'),
(180, 1, 'Uziza (Dozen Bunches)', 4650.00, 0, 'kg', 0.00, 'Uziza Leaf.jpg-790.jpg', 'Uziza (Dozen Bunches)', 10, 'No', 0, 1, '2024-01-25 16:37:09', '2024-02-17 16:09:10'),
(181, 1, 'Uziza (1 Bunch)', 500.00, 0, 'kg', 0.00, 'Uziza Leaf.jpg-363.jpg', 'Uziza (1 Bunch)', 10, 'No', 0, 1, '2024-01-25 16:38:50', '2024-02-17 16:09:42'),
(182, 5, 'Uziza Seeds', 2965.00, 0, 'kg', 0.25, 'Uziza Seeds.webp-904.webp', 'Uziza Seeds (250g)', 10, 'No', 0, 1, '2024-01-25 16:43:19', '2024-02-17 16:10:43'),
(183, 5, 'Uziza Seeds', 11500.00, 0, 'kg', 1.00, 'Uziza Seeds.webp-613.webp', 'Uziza Seeds (1kg)', 10, 'No', 0, 1, '2024-01-25 16:45:10', '2024-01-25 16:45:10'),
(184, 1, 'Pepper - Cameroun Grinded (1 Paint)', 13500.00, 0, 'kg', 0.00, 'Pepper - Cameroun Grinded.jpg-736.jpg', 'Pepper - Cameroun Grinded (1 Paint', 10, 'No', 0, 1, '2024-01-25 16:51:40', '2024-02-17 16:12:30'),
(185, 3, 'Abacha (1 Pack)', 800.00, 0, 'kg', 0.00, 'Abacha.png-114.png', 'Abacha (1 Pack)', 10, 'No', 0, 1, '2024-01-25 16:54:50', '2024-02-17 16:14:30'),
(186, 3, 'Garri - Yellow', 30000.00, 0, 'kg', 40.00, 'Garri Yellow.jpg-825.jpg', 'Garri - Yellow (40kg)', 10, 'No', 0, 1, '2024-01-25 16:58:19', '2024-02-17 16:24:04'),
(187, 3, 'Garri - Yellow (1 Paint Bucket)', 2300.00, 0, 'kg', 3.00, 'Garri Yellow.jpg-789.jpg', 'Garri - Yellow (1 Paint Bucket, 3kg)', 100, 'No', 0, 1, '2024-01-25 16:59:40', '2024-02-17 16:26:50'),
(188, 3, 'Garri - Yellow', 900.00, 0, 'kg', 1.00, 'Garri Yellow.jpg-168.jpg', 'Garri - Yellow (1kg)', 100, 'No', 0, 1, '2024-01-25 17:01:26', '2024-02-17 16:27:17'),
(189, 1, 'Locust Beans - Iru (Small Pack)', 755.00, 0, 'kg', 0.00, 'Locust Beans - Iru.png-136.png', 'Locust Beans - Iru (Small Pack)', 10, 'No', 0, 1, '2024-01-25 17:03:43', '2024-02-17 15:55:32'),
(191, 1, 'Okazi (1 Bunch)', 700.00, 0, 'kg', 0.00, 'Okazi.jpeg-963.jpeg', 'Okazi (1 Bunch)', 20, 'No', 0, 1, '2024-01-25 17:07:16', '2024-02-17 16:29:43'),
(192, 1, 'Oha (1 Bunch)', 350.00, 0, 'kg', 0.00, 'Oha.jpeg-401.jpeg', 'Oha (1 Bunch)', 10, 'No', 0, 1, '2024-01-25 17:09:00', '2024-02-17 16:31:03'),
(195, 5, 'Onions - Spring (1 Bunch)', 650.00, 0, 'kg', 0.00, 'Onions - Spring.jpg-914.jpg', 'Onions - Spring (1 Bunch)', 20, 'Yes', 0, 1, '2024-01-25 17:21:32', '2024-02-17 16:32:33'),
(196, 1, 'Bitter Leaf (1 Bunch)', 270.00, 0, 'kg', 0.00, 'Bitter Leaf.webp-730.webp', 'Bitter Leaf (1 Bunch)', 20, 'No', 0, 1, '2024-01-25 17:23:52', '2024-02-17 16:38:02'),
(197, 5, 'Miyan Kuka Powder', 1850.00, 0, 'kg', 1.00, 'Miyan Kuka Powder.jpg-561.jpg', 'Miyan Kuka Powder (1kg)', 10, 'No', 0, 1, '2024-01-25 17:26:17', '2024-01-25 17:26:17'),
(198, 1, 'Egusi - Machine Peeled (500g, 1 Derica)', 1800.00, 0, 'kg', 0.50, 'egusi-1.webp-848.webp', 'Egusi - Machine Peeled (500g, 1 Derica)', 10, 'No', 0, 1, '2024-01-25 17:28:19', '2024-02-17 16:38:53'),
(199, 1, 'Dry Tatase (1 Paint Bucket)', 4650.00, 0, 'kg', 0.40, 'Dry Tatashe.webp-286.webp', 'Dry Tatase (1 Paint Bucket, 0.4kg)', 20, 'No', 0, 1, '2024-01-25 17:30:54', '2024-02-17 15:59:51'),
(200, 1, 'Oha (Dozen Bunches)', 3700.00, 0, 'kg', 0.00, 'Oha.jpeg-645.jpeg', 'Oha (Dozen Bunches)', 20, 'No', 0, 1, '2024-01-25 17:32:51', '2024-02-17 16:31:23'),
(201, 11, 'Stockfish - Head - Small', 2050.00, 0, 'kg', 0.00, 'Stockfish - Head.jpg-354.jpg', 'Stockfish - Head (Small)', 10, 'No', 0, 1, '2024-01-25 17:34:59', '2024-01-25 17:38:35'),
(202, 1, 'Efo Tete', 750.00, 0, 'kg', 0.00, 'Efo Tete.png-422.png', 'Efo Tete (1 Bunch)', 10, 'No', 0, 1, '2024-01-25 17:38:41', '2024-01-25 17:38:41'),
(203, 1, 'Dry Pepper - Sombo (1 Paint Bucket)', 2800.00, 0, 'kg', 0.00, 'Dry Pepper.webp-476.webp', 'Dry Pepper - Sombo (1 Paint Bucket)', 10, 'No', 0, 1, '2024-01-25 17:42:04', '2024-02-17 16:00:24'),
(204, 1, 'Spinach or Amunututu (1 Pack)', 655.00, 0, 'kg', 0.00, 'Spinach or Amunututu.webp-785.webp', 'Spinach or Amunututu (1 Pack)', 10, 'Yes', 0, 1, '2024-01-25 17:43:46', '2024-02-17 16:42:05'),
(205, 1, 'Dry Pepper - Sombo (Quarter Bag)', 11500.00, 0, 'kg', 0.00, 'Dry Pepper.webp-426.webp', 'Dry Pepper - Sombo (Quarter Bag)', 10, 'No', 0, 1, '2024-01-25 17:45:57', '2024-02-17 16:00:53'),
(206, 5, 'Dry Green Peas (1 Derica)', 1600.00, 0, 'kg', 0.00, 'Dry Green Peas.jpg-606.jpg', 'Dry Green Peas (1 Derica)', 20, 'No', 0, 1, '2024-01-25 17:47:35', '2024-02-17 16:43:04'),
(207, 11, 'Smoked Hake Fish or Eja Egun Big', 4550.00, 0, 'kg', 0.00, 'Smoked Hake Fish or Eja Egun.jpeg-163.jpeg', 'Smoked Hake Fish or Eja Egun (Big, 10 Pieces)', 20, 'No', 0, 1, '2024-01-25 17:50:49', '2024-01-25 17:50:49'),
(208, 11, 'Fish - Titus', 4600.00, 0, 'kg', 1.00, 'Fish - Titus.jpeg-545.jpeg', 'Fish - Titus (1kg)', 20, 'No', 0, 1, '2024-01-25 17:53:57', '2024-02-17 16:52:50'),
(209, 11, 'Fish - Titus', 87500.00, 0, 'kg', 20.00, 'Fish - Titus.jpeg-290.jpeg', 'Fish - Titus (20kg)', 10, 'No', 0, 1, '2024-01-25 17:56:53', '2024-02-17 16:53:54'),
(210, 11, 'Crayfish - Derica', 1250.00, 0, 'kg', 1.50, 'crayfish.png-285.png', 'Crayfish (1 Derica, 150g)', 20, 'No', 0, 1, '2024-01-26 14:21:08', '2024-01-26 14:21:08'),
(211, 11, 'Chicken - Hard Lap Orobo-Carton', 37000.00, 0, 'kg', 0.00, 'Chicken - Hard Lap Orobo.webp-794.webp', 'Chicken - Hard Lap Orobo (9-10kg, 1 Carton)', 10, 'No', 0, 1, '2024-01-26 14:24:01', '2024-02-17 16:50:19'),
(212, 11, 'Frozen Turkey', 56300.00, 0, 'kg', 10.00, 'Frozen Turkey.jpg-463.jpg', 'Frozen Turkey (9-10kg)', 10, 'No', 0, 1, '2024-01-26 14:32:55', '2024-01-26 14:32:55'),
(213, 11, 'Goat Meat - Male -Full', 68200.00, 0, 'kg', 0.00, 'Goat Male & Female.jpg-976.jpg', 'Goat Meat - Male (Full)', 10, 'No', 0, 1, '2024-01-26 14:36:47', '2024-02-17 16:56:05'),
(214, 11, 'Prawns  -Unpeeled Jumbo', 13500.00, 0, 'kg', 0.50, 'Prawns - Unpeeled.jpg-378.jpg', 'Prawns - Unpeeled (Jumbo, 1kg)', 10, 'No', 0, 1, '2024-01-26 14:45:02', '2024-02-18 01:14:47'),
(215, 11, 'Fish - Hake', 37050.00, 0, 'kg', 15.00, 'Fish - Hake.jpg-329.jpg', 'Fish - Hake (15kg)', 10, 'No', 0, 1, '2024-01-26 14:47:58', '2024-01-26 14:47:58'),
(216, 11, 'Cow beef', 6000.00, 0, 'kg', 1.00, 'Cow Meat or Beef.webp-146.webp', 'Cow  Beef -  (1kg)', 10, 'Yes', 0, 1, '2024-01-26 14:51:58', '2024-02-12 15:09:59'),
(217, 11, 'Cow Meat or Beef - Boneless', 4500.00, 0, 'kg', 1.00, 'Cow Meat or Beef.webp-324.webp', 'Cow Meat or Beef - Boneless (1kg)', 10, 'No', 0, 1, '2024-01-26 14:53:41', '2024-01-26 14:53:41'),
(218, 11, 'Chicken - Organic Broiler', 15200.00, 0, 'kg', 3.50, 'Chicken - Organic Broiler.webp-258.webp', 'Chicken - Organic Broiler (3.3 - 3.5kg)', 5, 'No', 0, 1, '2024-01-26 15:01:32', '2024-01-27 00:47:09'),
(219, 11, 'Chicken - Broiler Whole', 13900.00, 0, 'kg', 0.00, 'Chicken - Broiler.jpg-948.jpg', 'Chicken - Broiler (Whole)', 10, 'No', 0, 1, '2024-01-26 15:03:39', '2024-01-26 15:03:39'),
(220, 11, 'Fish - Kote', 41900.00, 0, 'kg', 20.00, 'Fish - Kote.png-133.png', 'Fish - Kote (20kg)', 20, 'No', 0, 1, '2024-01-26 15:10:26', '2024-01-26 15:10:26'),
(221, 11, 'Chicken - Nigerian', 32150.00, 0, 'kg', 10.00, 'Chicken - Nigerian.webp-267.webp', 'Chicken - Nigerian (9.5 -10kg)', 10, 'No', 0, 1, '2024-01-26 15:12:45', '2024-01-26 15:12:45'),
(222, 11, 'Cow Leg - Without Bone', 4300.00, 0, 'kg', 1.00, 'Cow Leg.jpg-688.jpg', 'Cow Leg - Without Bone (1kg)', 10, 'No', 0, 1, '2024-01-26 15:59:57', '2024-01-26 15:59:57'),
(223, 11, 'Cow Leg - With Bone', 3970.00, 0, 'kg', 1.00, 'Cow Leg.jpg-882.jpg', 'Cow Leg - With Bone (1kg)', 10, 'No', 0, 1, '2024-01-26 16:02:11', '2024-01-26 16:02:11'),
(224, 11, 'Chicken - Hard Lap Orobo', 3789.00, 0, 'kg', 1.00, 'Chicken - Hard Lap Orobo.webp-885.webp', 'Chicken - Hard Lap Orobo (900g-1kg)', 10, 'No', 0, 1, '2024-01-26 16:04:35', '2024-01-26 16:04:35'),
(225, 11, 'Shaki or Beef Tripe', 6800.00, 0, 'kg', 1.00, 'Shaki or Beef Tripe.jpeg-414.jpeg', 'Shaki or Beef Tripe (1kg)', 20, 'Yes', 0, 1, '2024-01-26 16:10:38', '2024-02-12 15:21:17'),
(226, 11, 'Chicken - Wings', 3800.00, 0, 'kg', 1.00, 'Chicken - Wings.png-790.png', 'Chicken - Wings (1kg)', 10, 'No', 0, 1, '2024-01-26 16:12:58', '2024-01-26 16:12:58'),
(227, 11, 'Chicken - Wings -Carton', 43450.00, 0, 'kg', 10.00, 'Chicken - Wings.png-813.png', 'Chicken - Wings (1 Carton, 10kg)', 10, 'Yes', 0, 1, '2024-01-26 16:15:04', '2024-02-17 17:09:48'),
(228, 11, 'Chicken - Nigerian', 3340.00, 0, 'kg', 1.00, 'Chicken - Nigerian.webp-668.webp', 'Chicken - Nigerian (900g-1kg)', 10, 'Yes', 0, 1, '2024-01-26 16:17:56', '2024-01-26 16:17:56'),
(229, 11, 'Fish - Shawa', 2300.00, 0, 'kg', 1.00, 'Fish - Shawa.png-531.png', 'Fish - Shawa (1kg)', 20, 'No', 0, 1, '2024-01-26 16:21:17', '2024-01-26 16:21:17'),
(230, 11, 'Fish - Foreign Tilapia', 28900.00, 0, 'kg', 10.00, 'Fish - Foreign Tilapia.webp-793.webp', 'Fish - Foreign Tilapia (10kg)', 10, 'Yes', 0, 1, '2024-01-26 16:48:00', '2024-01-26 16:48:00'),
(231, 11, 'River Crab', 4000.00, 0, 'kg', 1.00, 'River Crab.webp-780.webp', 'River Crab (1kg)', 10, 'No', 0, 1, '2024-01-26 16:49:46', '2024-02-18 00:56:31'),
(232, 11, 'Fish - Mullet or Akoko', 2200.00, 0, 'kg', 1.00, 'Fish - Mullet or Akoko.jpg-984.jpg', 'Fish - Mullet or Akoko (1kg)', 10, 'Yes', 0, 1, '2024-01-26 16:51:28', '2024-01-26 16:51:28'),
(233, 11, 'Frozen Turkey', 6000.00, 0, 'kg', 1.00, 'Frozen Turkey.jpg-470.jpg', 'Frozen Turkey (900g-1kg)', 10, 'No', 0, 1, '2024-01-26 16:53:53', '2024-01-26 16:53:53'),
(234, 11, 'Dry Smoked Catfish', 1200.00, 0, 'kg', 0.00, 'Dima Dry Smoked Catfish.webp-896.webp', 'Dry Smoked Catfish (1 Piece)', 100, 'No', 0, 1, '2024-01-26 16:56:11', '2024-02-03 16:44:12'),
(235, 11, 'Stockfish Panla - Body', 9400.00, 0, 'kg', 0.50, 'Stockfish Panla.jpg-835.jpg', 'Stockfish Panla - Body (500g)', 10, 'No', 0, 1, '2024-01-26 17:00:15', '2024-01-26 17:00:15'),
(236, 11, 'Ram Meat - Without Bone -Frozen', 16000.00, 0, 'kg', 3.00, 'Ram Meat.png-409.png', 'Ram Meat - Without Bone (Frozen, 3kg)', 20, 'Yes', 0, 1, '2024-01-26 17:03:31', '2024-01-26 17:03:31'),
(237, 11, 'COW OXTAIL 1KG', 6200.00, 0, 'kg', 1.00, 'Oxtail.jpg-942.jpg', 'COW OXTAIL 1KG', 10, 'No', 0, 1, '2024-01-26 17:07:15', '2024-02-12 18:09:32'),
(238, 11, 'Goat Head -Per Head', 3500.00, 0, 'kg', 0.00, 'Goat Head.png-796.png', 'Goat Head (Per Head)', 10, 'No', 0, 1, '2024-01-26 17:08:39', '2024-01-26 17:08:39'),
(239, 11, 'Prawns - Dry -Big -Derica', 6350.00, 0, 'kg', 1.50, 'Prawns - Dry.webp-755.webp', 'Prawns - Dry (Big, 1 Derica, 150g)', 10, 'Yes', 0, 1, '2024-01-26 17:12:48', '2024-01-26 17:12:48'),
(240, 11, 'Prawns - Dry Big  1 Paint Bucket', 25000.00, 0, 'kg', 0.60, 'Prawns - Dry.webp-800.webp', 'Prawns - Dry (Big, 1 Paint Bucket, 0.6kg)', 20, 'No', 0, 1, '2024-01-26 17:16:37', '2024-01-26 17:16:37'),
(241, 11, 'Smoked Hake Fish or Eja Egun -Medium 10 Pieces', 2600.00, 0, 'kg', 0.00, 'Smoked Hake Fish or Eja Egun.jpeg-813.jpeg', 'Smoked Hake Fish or Eja Egun (Medium, 10 Pieces)', 20, 'Yes', 0, 1, '2024-01-26 17:20:14', '2024-01-26 17:20:14'),
(242, 11, 'Smoked Hake Fish or Eja Egun (Small, 10 Pieces)', 2300.00, 0, 'kg', 0.00, 'Smoked Hake Fish or Eja Egun.jpeg-165.jpeg', 'Smoked Hake Fish or Eja Egun (Small, 10 Pieces)', 10, 'No', 0, 1, '2024-01-26 17:22:44', '2024-01-26 17:22:44'),
(243, 11, 'Kote Fish (1kg)', 2200.00, 0, 'kg', 1.00, 'Fish - Kote.png-639.png', 'Kote Fish (1kg)', 20, 'Yes', 0, 1, '2024-01-26 17:24:52', '2024-01-26 17:24:52'),
(244, 11, 'Fish - Alaska Pollock or Panla Osun (20kg)', 43200.00, 0, 'kg', 20.00, 'Fish - Alaska Pollock or Panla Osun.webp-238.webp', 'Fish - Alaska Pollock or Panla Osun (20kg)', 20, 'No', 0, 1, '2024-01-26 17:27:26', '2024-01-26 17:27:26'),
(245, 11, 'Fish - Alaska Pollock or Panla Osun (1kg)', 2300.00, 0, 'kg', 1.00, 'Fish - Alaska Pollock or Panla Osun.webp-719.webp', 'Fish - Alaska Pollock or Panla Osun (1kg)', 20, 'No', 0, 1, '2024-01-26 17:29:01', '2024-01-26 17:29:01'),
(246, 11, 'Fish - Alaska Pollock or Panla Osun (1kg)', 3100.00, 0, 'kg', 1.00, 'Fish - Foreign Tilapia.webp-362.webp', 'Fish - Alaska Pollock or Panla Osun (1kg)', 10, 'No', 0, 1, '2024-01-26 19:42:20', '2024-01-26 19:42:20'),
(248, 11, 'Liver (1kg)', 5000.00, 0, 'kg', 1.00, 'Liver 1.jpg-184.jpg', 'Liver (1kg)', 20, 'Yes', 0, 1, '2024-01-26 20:20:32', '2024-02-12 15:48:36'),
(249, 11, 'Fish - Titus (10kg)', 34900.00, 0, 'kg', 10.00, 'Fish - Titus.jpeg-196.jpeg', 'Fish - Titus (10kg)', 10, 'Yes', 0, 1, '2024-01-26 20:22:12', '2024-01-26 20:22:12'),
(250, 11, 'Ram - Life (Big)', 185000.00, 0, 'kg', 0.00, 'Ram.jpg-418.jpg', 'Ram - Life (Big)', 5, 'No', 0, 1, '2024-01-26 20:41:20', '2024-01-26 20:41:20'),
(251, 11, 'Dry Smoked Catfish one piece', 750.00, 0, 'kg', 0.00, 'Dima Dry Smoked Catfish.webp-385.webp', 'Dry Smoked Catfish (1 Piece)', 100, 'Yes', 0, 1, '2024-01-26 20:43:42', '2024-02-03 16:46:33'),
(252, 11, 'Crayfish (1 Paint Bucket, 850g)', 6400.00, 0, 'kg', 8.50, 'crayfish.png-165.png', 'Crayfish (1 Paint Bucket, 850g)', 10, 'No', 0, 1, '2024-01-26 20:47:07', '2024-01-26 20:47:07'),
(253, 11, 'Ram Meat - With Bone (Frozen, 3kg)', 15970.00, 0, 'kg', 3.00, 'Ram Meat.png-707.png', 'Ram Meat - With Bone (Frozen, 3kg)', 20, 'No', 0, 1, '2024-01-26 20:49:30', '2024-01-26 20:49:30'),
(254, 11, 'Goat Meat - Female (Full)', 60000.00, 0, 'kg', 0.00, 'Goat Male & Female.jpg-600.jpg', 'Goat Meat - Female (Full)', 5, 'No', 0, 1, '2024-01-26 20:51:54', '2024-01-26 20:51:54'),
(255, 11, 'Goat Meat - With Bone (2kg)', 8300.00, 0, 'kg', 2.00, 'Goat Meat.jpg-730.jpg', 'Goat Meat - With Bone (2kg)', 10, 'Yes', 0, 1, '2024-01-26 20:54:49', '2024-01-26 20:54:49'),
(256, 11, 'Goat Meat - Boneless (1kg)', 5500.00, 0, 'kg', 1.00, 'Goat Meat.jpg-324.jpg', 'Goat Meat - Boneless (1kg)', 10, 'No', 0, 1, '2024-01-26 20:57:34', '2024-01-26 20:57:34'),
(257, 11, 'Goat Meat - Female (Quarter)', 14000.00, 0, 'kg', 0.00, 'Goat Male & Female.jpg-151.jpg', 'Goat Meat - Female (Quarter)', 10, 'No', 0, 1, '2024-01-26 20:59:49', '2024-01-26 20:59:49'),
(258, 11, 'Goat Meat - Female (Quarter)', 27600.00, 0, 'kg', 0.00, 'Goat Male & Female.jpg-830.jpg', 'Goat Meat - Female (Quarter)', 10, 'No', 0, 1, '2024-01-26 21:01:34', '2024-01-26 21:01:34'),
(259, 11, 'Fish - Kampala Titus (1kg)', 2600.00, 0, 'kg', 1.00, 'Fish - Titus.jpeg-515.jpeg', 'Fish - Kampala Titus (1kg)', 10, 'No', 0, 1, '2024-01-26 21:05:18', '2024-01-26 21:05:18'),
(260, 11, 'Fish - Kampala Titus (15kg, 1 Carton)', 38000.00, 0, 'kg', 15.00, 'Fish - Titus.jpeg-740.jpeg', 'Fish - Kampala Titus (15kg, 1 Carton)', 10, 'No', 0, 1, '2024-01-26 21:07:08', '2024-01-26 21:07:08'),
(261, 11, 'Stockfish - Pieced Flesh (1 Dozen)', 6200.00, 0, 'kg', 0.00, 'Stockfish - Pieced Flesh.png-347.png', 'Stockfish - Pieced Flesh (1 Dozen)', 10, 'No', 0, 1, '2024-01-26 21:09:57', '2024-01-26 21:09:57'),
(262, 11, 'Stockfish - Pieced Flesh (1 Pack)', 600.00, 0, 'kg', 0.00, 'Stockfish - Pieced Flesh.png-760.png', 'Stockfish - Pieced Flesh (1 Pack)', 10, 'No', 0, 1, '2024-01-26 21:11:38', '2024-01-26 21:11:38'),
(263, 11, 'Guinea Fowl', 7400.00, 0, 'kg', 0.00, 'Guinea Fowl.jpg-385.jpg', 'Guinea Fowl', 8, 'No', 0, 1, '2024-01-26 21:14:13', '2024-01-26 21:14:13'),
(264, 11, 'Ram Meat - Big (Full)', 180500.00, 0, 'kg', 0.00, 'Ram.jpg-446.jpg', 'Ram Meat - Big (Full)', 5, 'No', 0, 1, '2024-01-26 21:17:46', '2024-01-26 21:17:46'),
(265, 11, 'Ram Meat - Big (Half)', 92500.00, 0, 'kg', 0.00, 'Ram.jpg-485.jpg', 'Ram Meat - Big (Half)', 5, 'No', 0, 1, '2024-01-26 21:19:23', '2024-01-26 21:19:23'),
(266, 11, 'Ram Meat - Big (Quarter)', 46500.00, 0, 'kg', 0.00, 'Ram.jpg-358.jpg', 'Ram Meat - Big (Quarter)', 5, 'No', 0, 1, '2024-01-26 21:20:46', '2024-01-26 21:20:46'),
(267, 11, 'Ram Meat - Medium (Full)', 144500.00, 0, 'kg', 0.00, 'Ram.jpg-288.jpg', 'Ram Meat - Medium (Full)', 5, 'No', 0, 1, '2024-01-26 21:22:14', '2024-01-26 21:22:14'),
(268, 11, 'Ram Meat - Medium (Half)', 72500.00, 0, 'kg', 0.00, 'Ram.jpg-284.jpg', 'Ram Meat - Medium (Half)', 5, 'No', 0, 1, '2024-01-26 21:23:39', '2024-01-26 21:23:39'),
(269, 11, 'Ram Meat - Medium (Quarter)', 36500.00, 0, 'kg', 0.00, 'Ram.jpg-637.jpg', 'Ram Meat - Medium (Quarter)', 5, 'No', 0, 1, '2024-01-26 21:25:18', '2024-01-26 21:25:18'),
(270, 11, 'Ram Meat - Small (Full)', 90500.00, 0, 'kg', 0.00, 'Ram.jpg-745.jpg', 'Ram Meat - Small (Full)', 5, 'No', 0, 1, '2024-01-26 21:26:42', '2024-01-26 21:26:42'),
(271, 11, 'Ram Meat - Small (Half)', 45500.00, 0, 'kg', 0.00, 'Ram.jpg-242.jpg', 'Ram Meat - Small (Half)', 5, 'No', 0, 1, '2024-01-26 21:28:01', '2024-01-26 21:28:01'),
(272, 11, 'Ram Meat - Small (Quarter)', 22600.00, 0, 'kg', 0.00, 'Ram.jpg-371.jpg', 'Ram Meat - Small (Quarter)', 5, 'No', 0, 1, '2024-01-26 21:29:25', '2024-01-26 21:29:25'),
(273, 11, 'Ram - Live (Small)', 120500.00, 0, 'kg', 0.00, 'Ram.jpg-605.jpg', 'Ram - Live (Small)', 5, 'No', 0, 1, '2024-01-26 21:30:52', '2024-01-26 21:30:52'),
(274, 11, 'Ram - Live (Medium)', 216500.00, 0, 'kg', 0.00, 'Ram.jpg-872.jpg', 'Ram - Live (Medium)', 5, 'No', 0, 1, '2024-01-26 21:32:51', '2024-01-26 21:32:51'),
(275, 11, 'Ram - Live (Extra Large)', 350050.00, 0, 'kg', 0.00, 'Ram.jpg-699.jpg', 'Ram - Live (Extra Large)', 5, 'No', 0, 1, '2024-01-26 21:36:19', '2024-01-26 21:36:19'),
(276, 11, 'Thailand Fish (Small, 1 Piece)', 1050.00, 0, 'kg', 0.00, 'Thailand Fish.jpeg-752.jpeg', 'Thailand Fish (Small, 1 Piece)', 10, 'No', 0, 1, '2024-01-26 21:38:26', '2024-01-26 21:38:26'),
(277, 11, 'Thailand Fish (Medium, 1 Piece)', 1250.00, 0, 'kg', 0.00, 'Thailand Fish.jpeg-794.jpeg', 'Thailand Fish (Medium, 1 Piece)', 10, 'No', 0, 1, '2024-01-26 21:40:30', '2024-01-26 21:40:30'),
(278, 11, 'Thailand Fish (Big, 1 Piece)', 1500.00, 0, 'kg', 0.00, 'Thailand Fish.jpeg-991.jpeg', 'Thailand Fish (Big, 1 Piece)', 10, 'No', 0, 1, '2024-01-26 21:42:53', '2024-01-26 21:42:53'),
(279, 11, 'Asa Fish or Eja Osan (Big, 1 Piece)', 1550.00, 0, 'kg', 0.00, 'Asa Fish or Eja Osan.jpg-875.jpg', 'Asa Fish or Eja Osan (Big, 1 Piece)', 10, 'No', 0, 1, '2024-01-26 21:44:14', '2024-01-26 21:44:14'),
(280, 11, 'Asa Fish or Eja Osan (Small, 1 Piece)', 1150.00, 0, 'kg', 0.00, 'Asa Fish or Eja Osan.jpg-455.jpg', 'Asa Fish or Eja Osan (Small, 1 Piece)', 10, 'No', 0, 1, '2024-01-26 21:45:48', '2024-01-26 21:45:48'),
(281, 11, 'Asa Fish or Eja Osan (Medium, 1 Piece)', 1400.00, 0, 'kg', 0.00, 'Asa Fish or Eja Osan.jpg-953.jpg', 'Asa Fish or Eja Osan (Medium, 1 Piece)', 10, 'No', 0, 1, '2024-01-26 21:47:36', '2024-01-26 21:47:36'),
(282, 11, 'Stockfish - Head (Big)', 3550.00, 0, 'kg', 0.00, 'Stockfish - Head.jpg-794.jpg', 'Stockfish - Head (Big)', 10, 'No', 0, 1, '2024-01-26 21:49:30', '2024-01-26 21:49:30'),
(283, 11, 'Stockfish Panla - Body (Medium)', 4900.00, 0, 'kg', 0.00, 'Stockfish Panla.jpg-949.jpg', 'Stockfish Panla - Body (Medium)', 10, 'No', 0, 1, '2024-01-26 21:51:28', '2024-01-26 21:51:28'),
(284, 11, 'Fish - Hake (1 Piece)', 2550.00, 0, 'kg', 0.00, 'Fish - Hake.jpg-827.jpg', 'Fish - Hake (1 Piece)', 10, 'No', 0, 1, '2024-01-27 00:45:03', '2024-01-27 00:45:03'),
(285, 5, 'Ginger', 2300.00, 0, 'kg', 1.00, 'Ginger-Root.webp-338.webp', 'Ginger (1kg)', 100, 'No', 0, 1, '2024-01-28 19:33:03', '2024-02-17 16:45:59'),
(286, 7, 'Palm Oil - Local', 37000.00, 0, 'kg', 25.00, 'Palm Oil 25 Liters.jpg-969.jpg', 'Palm Oil - Local (25 liters)', 10, 'No', 0, 1, '2024-01-28 19:42:41', '2024-02-17 16:47:32'),
(287, 7, 'Palm Oil - Local', 6900.00, 0, 'kg', 5.00, 'palm-oil-5ltrs.jpg-413.jpg', 'Palm Oil - Local (5 Liters)', 50, 'No', 0, 1, '2024-01-28 19:45:19', '2024-01-28 19:45:19'),
(288, 4, 'Apples - Red (1 Dozen)', 6000.00, 0, 'kg', 0.00, 'Apples - Red 2.webp-457.webp', 'Apples - Red (1 Dozen)', 20, 'No', 0, 1, '2024-01-29 15:13:43', '2024-02-17 16:48:55'),
(289, 4, 'Agbalumo or Star Apple (50 Pieces)', 5600.00, 0, 'kg', 0.00, 'Agbalumo or Star Apple.png-983.png', 'Agbalumo or Star Apple (50 Pieces)', 10, 'No', 0, 1, '2024-01-29 15:15:15', '2024-02-17 16:50:10'),
(290, 4, 'Pineapple - Cotonou (Big, 1 Dozen)', 14000.00, 0, 'kg', 0.00, 'Pineapple Cotonu.webp-989.webp', 'Pineapple - Cotonou (Big, 1 Dozen)', 20, 'Yes', 0, 1, '2024-01-29 15:17:14', '2024-01-29 15:17:14'),
(291, 4, 'Pineapple - Cotonou (Medium, 1 Dozen', 12000.00, 0, 'kg', 0.00, 'Pineapple Cotonu.webp-855.webp', 'Pineapple - Cotonou (Medium, 1 Dozen', 20, 'No', 0, 1, '2024-01-29 15:18:32', '2024-01-29 15:18:32'),
(292, 4, 'Pineapple - Cotonou (Small, 1 Dozen)', 11000.00, 0, 'kg', 0.00, 'Pineapple Cotonu.webp-769.webp', 'Pineapple - Cotonou (Small, 1 Dozen)', 20, 'No', 0, 1, '2024-01-29 15:21:02', '2024-01-29 15:21:02'),
(293, 4, 'Pineapple - Cotonou (1 Big)', 1200.00, 0, 'kg', 0.00, 'Pineapple Cotonu.webp-537.webp', 'Pineapple - Cotonou ( 1 Big)', 20, 'No', 0, 1, '2024-01-29 15:23:15', '2024-01-29 15:23:15'),
(294, 4, 'Pineapple - Cotonou (1 Medium)', 1100.00, 0, 'kg', 0.00, 'Pineapple Cotonu.webp-405.webp', 'Pineapple - Cotonou (Medium)', 20, 'No', 0, 1, '2024-01-29 15:25:54', '2024-01-29 15:25:54'),
(295, 4, 'Pineapple - Cotonou (Small)', 1000.00, 0, 'kg', 0.00, 'Pineapple Cotonu.webp-143.webp', 'Pineapple - Cotonou (Small)', 20, 'No', 0, 1, '2024-01-29 15:30:16', '2024-01-29 15:30:16'),
(296, 4, 'Avocado (Big, 4 Pieces)', 2600.00, 0, 'kg', 0.00, 'Avocado.webp-365.webp', 'Avocado (Big, 4 Pieces)', 20, 'Yes', 0, 1, '2024-01-29 15:34:11', '2024-01-29 15:34:11'),
(297, 4, 'Avocado (Medium, 4 Pieces)', 2200.00, 0, 'kg', 0.00, 'Avocado.webp-491.webp', 'Avocado (Medium, 4 Pieces)', 20, 'No', 0, 1, '2024-01-29 15:38:04', '2024-01-29 15:38:04'),
(298, 4, 'Avocado (Big, 1 Dozen)', 7500.00, 0, 'kg', 0.00, 'Avocado.webp-131.webp', 'Avocado (Big, 1 Dozen)', 10, 'No', 0, 1, '2024-01-29 15:41:58', '2024-01-29 15:41:58'),
(299, 4, 'Avocado (Medium, 1 Dozen)', 6400.00, 0, 'kg', 0.00, 'Avocado.webp-385.webp', 'Avocado (Medium, 1 Dozen)', 20, 'No', 0, 1, '2024-01-29 15:46:12', '2024-01-29 15:46:12'),
(300, 4, 'Avocado (Small, 1 Dozen)', 5250.00, 0, 'kg', 0.00, 'Avocado.webp-598.webp', 'Avocado (Small, 1 Dozen)', 20, 'No', 0, 1, '2024-01-29 16:06:04', '2024-01-29 16:06:04'),
(301, 4, 'Apples - Pink lady (1 Dozen)', 4900.00, 0, 'kg', 0.00, 'Apples - Pink lady.webp-950.webp', 'Apples - Pink lady (1 Dozen)', 20, 'No', 0, 1, '2024-01-29 16:07:30', '2024-01-29 16:07:30'),
(302, 4, 'Watermelon (Small,1 Dozen)', 19200.00, 0, 'kg', 0.00, 'Watermelon.jpg-654.jpg', 'Watermelon (Small,1 Dozen)', 20, 'Yes', 0, 1, '2024-01-29 16:09:22', '2024-01-29 16:09:22'),
(303, 4, 'Watermelon (Small,1 Piece)', 1700.00, 0, 'kg', 0.00, 'Watermelon.jpg-418.jpg', 'Watermelon (Small,1 Piece)', 20, 'No', 0, 1, '2024-01-29 16:11:17', '2024-01-29 16:11:17'),
(304, 4, 'Watermelon (Medium,1 Dozen)', 20570.00, 0, 'kg', 0.00, 'Watermelon.jpg-169.jpg', 'Watermelon (Medium,1 Dozen)', 20, 'Yes', 0, 1, '2024-01-29 16:13:09', '2024-01-29 16:13:09'),
(305, 4, 'Watermelon (Medium,1 Piece)', 1809.00, 0, 'kg', 0.00, 'Watermelon.jpg-680.jpg', 'Watermelon (Medium,1 Piece)', 20, 'No', 0, 1, '2024-01-29 16:14:35', '2024-01-29 16:14:35'),
(306, 4, 'Watermelon (Big,1 Dozen)', 28500.00, 0, 'kg', 0.00, 'Watermelon.jpg-804.jpg', 'Watermelon (Big,1 Dozen)', 20, 'No', 0, 1, '2024-01-29 16:16:09', '2024-01-29 16:16:09'),
(307, 4, 'Blueberries (1 Pack)', 4500.00, 0, 'kg', 0.00, 'Blueberries.webp-422.webp', 'Blueberries (1 Pack)', 10, 'Yes', 0, 1, '2024-01-29 16:17:57', '2024-02-17 16:54:05'),
(308, 4, 'Lemon - Big (1 Dozen)', 2500.00, 0, 'kg', 0.00, 'Lemon - Big.jpg-460.jpg', 'Lemon - Big (1 Dozen)', 20, 'No', 0, 1, '2024-01-29 16:27:24', '2024-01-29 16:27:24'),
(310, 7, 'Coconut (Small, 2 Pieces)', 2200.00, 0, 'kg', 0.00, 'Coconut.webp-405.webp', 'Coconut (Small, 2 Pieces)', 20, 'Yes', 0, 1, '2024-01-29 16:32:40', '2024-02-17 02:47:34'),
(311, 7, 'Coconut (Medium, 2 Pieces)', 1600.00, 0, 'kg', 0.00, 'Coconut.webp-792.webp', 'Coconut (Medium, 2 Pieces)', 20, 'No', 0, 1, '2024-01-29 16:35:16', '2024-01-29 16:35:16'),
(312, 7, 'Coconut (Medium, 1 Dozen)', 8500.00, 0, 'kg', 0.00, 'Coconut.webp-573.webp', 'Coconut (Medium, 1 Dozen)', 20, 'No', 0, 1, '2024-01-29 16:36:41', '2024-01-29 16:36:41'),
(313, 7, 'Coconut (Big, 2 Pieces)', 1900.00, 0, 'kg', 0.00, 'Coconut.webp-863.webp', 'Coconut (Big, 2 Pieces)', 20, 'Yes', 0, 1, '2024-01-29 16:40:27', '2024-01-29 16:40:27'),
(314, 7, 'Coconut (Big, 1 Dozen)', 10900.00, 0, 'kg', 0.00, 'Coconut.webp-382.webp', 'Coconut (Big, 1 Dozen)', 10, 'Yes', 0, 1, '2024-01-29 16:42:16', '2024-01-29 16:42:16'),
(315, 5, 'Lemon Grass - Without Roots', 2850.00, 0, 'kg', 0.00, 'Lemon Grass - Without Roots.webp-756.webp', 'Lemon Grass - Without Roots', 10, 'No', 0, 1, '2024-01-29 16:44:16', '2024-01-29 16:44:16'),
(316, 4, 'Apples - Irish Peach (1 Dozen)', 5500.00, 0, 'kg', 0.00, 'Apples - Irish Peach.webp-183.webp', 'Apples - Irish Peach (1 Dozen)', 10, 'Yes', 0, 1, '2024-01-29 16:46:12', '2024-01-29 16:46:12'),
(317, 7, 'Groundnut - Big Seed (1 Paint Bucket, 3.2kg)', 4900.00, 0, 'kg', 0.00, 'Groundnut - Big Seed.jpeg-488.jpeg', 'Groundnut - Big Seed (1 Paint Bucket, 3.2kg)', 20, 'No', 0, 1, '2024-01-29 16:47:57', '2024-01-29 16:47:57'),
(318, 7, 'Groundnut - Big Seed (1 Derica, 650g)', 1200.00, 0, 'kg', 0.00, 'Groundnut - Big Seed.jpeg-777.jpeg', 'Groundnut - Big Seed (1 Derica, 650g)', 20, 'No', 0, 1, '2024-01-29 16:49:50', '2024-01-29 16:49:50'),
(319, 4, 'Sugarcane Stick - Unpeeled (1 Stick)', 1500.00, 0, 'kg', 0.00, 'Sugarcane - Unpeeled.jpg-883.jpg', 'Sugarcane Stick - Unpeeled (1 Stick)', 10, 'Yes', 0, 1, '2024-01-29 16:51:49', '2024-01-29 16:51:49'),
(320, 7, 'Tiger Nuts (1 Bag, 100kg)', 68000.00, 0, 'kg', 100.00, 'Tiger Nuts.jpg-866.jpg', 'Tiger Nuts (1 Bag, 100kg)', 10, 'No', 0, 1, '2024-01-29 16:55:08', '2024-01-29 17:04:00'),
(321, 7, 'Tiger Nuts (1 Derica, 600g)', 750.00, 0, 'kg', 0.60, 'Tiger Nuts.jpg-434.jpg', 'Tiger Nuts (1 Derica, 600g)', 10, 'No', 0, 1, '2024-01-29 16:57:52', '2024-01-29 17:04:56'),
(322, 7, 'Tiger Nuts (1 Paint Bucket, 3.2kg)', 2300.00, 0, 'kg', 3.20, 'Tiger Nuts.jpg-708.jpg', 'Tiger Nuts (1 Paint Bucket, 3.2kg)', 20, 'No', 0, 1, '2024-01-29 17:01:34', '2024-01-29 17:05:57'),
(323, 4, 'Beetroot (1kg)', 1500.00, 0, 'kg', 1.00, 'Beetroot.webp-539.webp', 'Beetroot (1kg)', 10, 'No', 0, 1, '2024-01-29 17:07:41', '2024-01-29 17:07:41'),
(324, 7, 'Groundnut (25cl, 1 Bottle)', 600.00, 0, 'kg', 25.00, 'groundnut-bottle.jpg-263.jpg', 'Groundnuts, also known as peanuts, are a popular legume known for their nutty flavor and versatility. They are widely consumed around the world and are used in various forms, including roasted peanuts, peanut butter, and as an ingredient in many savory and sweet dishes.\r\n\r\nNutritionally, a 1-ounce (28g) serving of dry roasted peanuts typically contains:\r\n\r\n- Calories: 161\r\n- Protein: 7.3g\r\n- Carbohydrates: 4.6g\r\n- Dietary fiber: 2.4g\r\n- Sugars: 1.3g\r\n- Fat: 14g\r\n    - Saturated fat: 2g\r\n    - Monounsaturated fat: 6.9g\r\n    - Polyunsaturated fat: 4.4g\r\n- Vitamins and minerals:\r\n    - Niacin (Vitamin B3)\r\n    - Vitamin E\r\n    - Magnesium\r\n    - Phosphorus\r\n    - Potassium\r\n\r\nPeanuts are a good source of plant-based protein, healthy fats, and various essential nutrients. They are also rich in antioxidants, particularly resveratrol, which is associated with several health benefits.\r\n\r\nWhen consumed in moderation, peanuts can be a nutritious addition to a balanced diet. However, it\'s important to be mindful of portion sizes, especially for those who are monitoring their calorie and fat intake.\r\n\r\nPeanuts are commonly enjoyed as a snack, used as a topping in salads and stir-fries, and processed into peanut butter, which is a popular spread and ingredient in many recipes.', 10, 'Yes', 0, 1, '2024-01-29 17:09:53', '2024-02-17 16:58:55'),
(325, 7, 'Groundnut (50cl, 1 Bottle)', 1200.00, 0, 'kg', 50.00, 'groundnut-bottle.jpg-852.jpg', 'Groundnuts, also known as peanuts, are a popular legume known for their nutty flavor and versatility. They are widely consumed around the world and are used in various forms, including roasted peanuts, peanut butter, and as an ingredient in many savory and sweet dishes.\r\n\r\nNutritionally, a 1-ounce (28g) serving of dry roasted peanuts typically contains:\r\n\r\n- Calories: 161\r\n- Protein: 7.3g\r\n- Carbohydrates: 4.6g\r\n- Dietary fiber: 2.4g\r\n- Sugars: 1.3g\r\n- Fat: 14g\r\n    - Saturated fat: 2g\r\n    - Monounsaturated fat: 6.9g\r\n    - Polyunsaturated fat: 4.4g\r\n- Vitamins and minerals:\r\n    - Niacin (Vitamin B3)\r\n    - Vitamin E\r\n    - Magnesium\r\n    - Phosphorus\r\n    - Potassium\r\n\r\nPeanuts are a good source of plant-based protein, healthy fats, and various essential nutrients. They are also rich in antioxidants, particularly resveratrol, which is associated with several health benefits.\r\n\r\nWhen consumed in moderation, peanuts can be a nutritious addition to a balanced diet. However, it\'s important to be mindful of portion sizes, especially for those who are monitoring their calorie and fat intake.\r\n\r\nPeanuts are commonly enjoyed as a snack, used as a topping in salads and stir-fries, and processed into peanut butter, which is a popular spread and ingredient in many recipes.', 10, 'No', 0, 1, '2024-01-29 17:12:36', '2024-02-17 16:59:14'),
(326, 4, 'Banana - Native or Yoruba (1 Bunch)', 1250.00, 0, 'kg', 0.00, 'Banana - Native or Yoruba.jpeg-622.jpeg', 'Banana - Native or Yoruba (1 Bunch)', 10, 'Yes', 0, 1, '2024-01-29 17:15:13', '2024-01-29 17:15:13'),
(327, 4, 'Banana (Small, Stem of Bunches)', 6550.00, 0, 'kg', 0.00, 'Banana.webp-697.webp', 'Banana (Small, Stem of Bunches)', 10, 'Yes', 0, 1, '2024-01-29 17:17:02', '2024-01-29 17:17:02'),
(328, 4, 'Banana (Big, 1 Bunch)', 950.00, 0, 'kg', 0.00, 'Banana.webp-424.webp', 'Banana (Big, 1 Bunch)', 10, 'No', 0, 1, '2024-01-29 17:18:15', '2024-01-29 17:18:15'),
(329, 5, 'Lime (1 Paint Bucket)', 3050.00, 0, 'kg', 0.00, 'Lime.webp-818.webp', 'Lime (1 Paint Bucket)', 10, 'Yes', 0, 1, '2024-01-29 17:20:10', '2024-01-29 17:20:10'),
(330, 5, 'Lime (1kg)', 1050.00, 0, 'kg', 1.00, 'Lime.webp-867.webp', 'Lime (1kg)', 10, 'No', 0, 1, '2024-01-29 17:22:01', '2024-01-29 17:22:01'),
(331, 5, 'Lemon Grass - With Roots', 2550.00, 0, 'kg', 0.00, 'Lemon Grass - With Roots.jpeg-803.jpeg', 'Lemon Grass - With Roots', 10, 'No', 0, 1, '2024-01-29 17:23:40', '2024-01-29 17:23:40'),
(332, 7, 'Bambara Nut (100kg)', 86500.00, 0, 'kg', 100.00, 'Bambara Nut.jpg-260.jpg', 'Bambara Nut (100kg)', 5, 'No', 0, 1, '2024-01-29 17:25:25', '2024-01-29 17:25:25'),
(333, 7, 'Bambara Nut (1 Paint Bucket)', 3800.00, 0, 'kg', 0.00, 'Bambara Nut.jpg-872.jpg', 'Bambara Nut (1 Paint Bucket)', 10, 'No', 0, 1, '2024-01-29 17:27:15', '2024-01-29 17:27:15'),
(334, 3, 'Dried Yam (Garawa)', 16300.00, 0, 'kg', 0.00, 'Dried Yam (Garawa).jpg-742.jpg', 'Dried Yam (Garawa)', 10, 'No', 0, 1, '2024-01-29 17:28:55', '2024-01-29 17:28:55'),
(335, 1, 'Efo Shoko - Toko (Dozen Bunches)', 6340.00, 0, 'kg', 0.00, 'Efo Shoko.webp-393.webp', 'Efo Shoko - Toko (Dozen Bunches)', 10, 'Yes', 0, 1, '2024-01-29 18:44:57', '2024-01-29 18:44:57');
INSERT INTO `products` (`id`, `category_id`, `product_name`, `price`, `product_discount`, `unit`, `product_weight`, `main_image`, `description`, `quantity`, `is_featured`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(336, 1, 'Efo Shoko - Toko (1 Bunch)', 620.00, 0, 'kg', 0.00, 'Efo Shoko.webp-319.webp', 'Efo Shoko - Toko (1 Bunch)', 10, 'No', 0, 1, '2024-01-29 18:46:01', '2024-01-29 18:46:01'),
(337, 3, 'Potato - Irish', 1500.00, 0, 'kg', 1.00, 'Irish Potatoe.jpg-814.jpg', 'Irish potatoes, also known as white potatoes or simply potatoes, are a widely consumed and versatile vegetable that is a staple in many cuisines around the world. They are a good source of carbohydrates and provide various essential nutrients.\r\n\r\nNutritionally, a medium-sized (150g) baked potato with skin typically contains:\r\n\r\n- Calories: 161\r\n- Carbohydrates: 37g\r\n- Fiber: 3.8g\r\n- Protein: 4.3g\r\n- Fat: 0.2g\r\n- Vitamin C\r\n- Vitamin B6\r\n- Potassium\r\n- Manganese\r\n\r\nPotatoes are also a good source of resistant starch, a type of starch that acts like fiber in the body and has been associated with various health benefits, including improved gut health and blood sugar regulation.\r\n\r\nPotatoes are a versatile ingredient and can be prepared in numerous ways, such as boiled, baked, mashed, or fried. However, it\'s important to note that the nutritional content can vary based on the cooking method and any added ingredients, such as butter or oil.\r\n\r\nWhile potatoes are a good source of nutrients, it\'s important to be mindful of portion sizes and how they are prepared, especially for individuals who need to monitor their carbohydrate and calorie intake.\r\n\r\nOverall, potatoes are a nutritious and satisfying vegetable that can be enjoyed in a variety of dishes, adding both flavor and valuable nutrients to meals.', 5, 'Yes', 0, 1, '2024-02-07 15:33:36', '2024-02-17 02:40:30'),
(338, 3, 'Potato - Irish (50kg)', 50200.00, 0, 'kg', 50.00, 'potato.webp-875.webp', 'Irish potatoes, also known as white potatoes or simply potatoes, are a widely consumed and versatile vegetable that is a staple in many cuisines around the world. They are a good source of carbohydrates and provide various essential nutrients.\r\n\r\nNutritionally, a medium-sized (150g) baked potato with skin typically contains:\r\n\r\n- Calories: 161\r\n- Carbohydrates: 37g\r\n- Fiber: 3.8g\r\n- Protein: 4.3g\r\n- Fat: 0.2g\r\n- Vitamin C\r\n- Vitamin B6\r\n- Potassium\r\n- Manganese\r\n\r\nPotatoes are also a good source of resistant starch, a type of starch that acts like fiber in the body and has been associated with various health benefits, including improved gut health and blood sugar regulation.\r\n\r\nPotatoes are a versatile ingredient and can be prepared in numerous ways, such as boiled, baked, mashed, or fried. However, it\'s important to note that the nutritional content can vary based on the cooking method and any added ingredients, such as butter or oil.\r\n\r\nWhile potatoes are a good source of nutrients, it\'s important to be mindful of portion sizes and how they are prepared, especially for individuals who need to monitor their carbohydrate and calorie intake.\r\n\r\nOverall, potatoes are a nutritious and satisfying vegetable that can be enjoyed in a variety of dishes, adding both flavor and valuable nutrients to meals.', 1, 'Yes', 0, 1, '2024-02-07 15:35:32', '2024-02-11 12:35:38'),
(339, 3, 'Potato - Irish (100kg)', 100185.00, 0, 'kg', 100.00, 'potato.webp-888.webp', 'Irish potatoes, also known as white potatoes or simply potatoes, are a widely consumed and versatile vegetable that is a staple in many cuisines around the world. They are a good source of carbohydrates and provide various essential nutrients.\r\n\r\nNutritionally, a medium-sized (150g) baked potato with skin typically contains:\r\n\r\n- Calories: 161\r\n- Carbohydrates: 37g\r\n- Fiber: 3.8g\r\n- Protein: 4.3g\r\n- Fat: 0.2g\r\n- Vitamin C\r\n- Vitamin B6\r\n- Potassium\r\n- Manganese\r\n\r\nPotatoes are also a good source of resistant starch, a type of starch that acts like fiber in the body and has been associated with various health benefits, including improved gut health and blood sugar regulation.\r\n\r\nPotatoes are a versatile ingredient and can be prepared in numerous ways, such as boiled, baked, mashed, or fried. However, it\'s important to note that the nutritional content can vary based on the cooking method and any added ingredients, such as butter or oil.\r\n\r\nWhile potatoes are a good source of nutrients, it\'s important to be mindful of portion sizes and how they are prepared, especially for individuals who need to monitor their carbohydrate and calorie intake.\r\n\r\nOverall, potatoes are a nutritious and satisfying vegetable that can be enjoyed in a variety of dishes, adding both flavor and valuable nutrients to meals.', 10, 'No', 0, 1, '2024-02-07 15:37:38', '2024-02-17 02:39:18'),
(340, 3, 'Potato - Irish (10kg)', 4800.00, 0, 'kg', 10.00, 'potato.webp-409.webp', 'Irish potatoes, also known as white potatoes or simply potatoes, are a widely consumed and versatile vegetable that is a staple in many cuisines around the world. They are a good source of carbohydrates and provide various essential nutrients.\r\n\r\nNutritionally, a medium-sized (150g) baked potato with skin typically contains:\r\n\r\n- Calories: 161\r\n- Carbohydrates: 37g\r\n- Fiber: 3.8g\r\n- Protein: 4.3g\r\n- Fat: 0.2g\r\n- Vitamin C\r\n- Vitamin B6\r\n- Potassium\r\n- Manganese\r\n\r\nPotatoes are also a good source of resistant starch, a type of starch that acts like fiber in the body and has been associated with various health benefits, including improved gut health and blood sugar regulation.\r\n\r\nPotatoes are a versatile ingredient and can be prepared in numerous ways, such as boiled, baked, mashed, or fried. However, it\'s important to note that the nutritional content can vary based on the cooking method and any added ingredients, such as butter or oil.\r\n\r\nWhile potatoes are a good source of nutrients, it\'s important to be mindful of portion sizes and how they are prepared, especially for individuals who need to monitor their carbohydrate and calorie intake.\r\n\r\nOverall, potatoes are a nutritious and satisfying vegetable that can be enjoyed in a variety of dishes, adding both flavor and valuable nutrients to meals.', 2, 'No', 0, 1, '2024-02-07 15:39:13', '2024-02-11 12:38:07'),
(341, 1, 'Pepper - Habanero', 4000.00, 0, 'kg', 1.00, 'Habanero.png-678.png', 'Habanero is a hot variety of chilli. The habanero’s heat, flavour and floral aroma make it a popular ingredient in hot sauces and other spicy foods.', 20, 'No', 0, 1, '2024-02-09 00:19:36', '2024-02-09 00:19:36'),
(342, 11, 'Minced Meat 1kg', 6200.00, 0, 'kg', 1.00, 'Minced Meat.webp-928.webp', 'Minced Meat 1kg', 10, 'Yes', 0, 1, '2024-02-12 15:19:50', '2024-02-12 15:19:50'),
(343, 11, 'Cow Head 1kg', 5000.00, 0, 'kg', 1.00, 'Cow-head.jpg-775.jpg', 'Cow Head 1kg', 10, 'Yes', 0, 1, '2024-02-12 15:25:28', '2024-02-12 15:25:28'),
(344, 11, 'Cow offals', 5000.00, 0, 'kg', 1.00, 'COW OFFALS.png-938.png', 'Cow offals 1KG', 10, 'Yes', 0, 1, '2024-02-12 15:35:10', '2024-02-12 15:35:10'),
(345, 11, 'Cow kidney 1kg', 5000.00, 0, 'kg', 1.00, 'COW KIDNEY.jpg-712.jpg', 'Cow kidney 1KG', 10, 'Yes', 0, 1, '2024-02-12 15:51:07', '2024-02-12 15:51:07'),
(346, 11, 'Cow Tail', 5500.00, 0, 'kg', 1.00, 'COW TAIL.png-161.png', 'Cow Tail 1Kg', 10, 'Yes', 0, 1, '2024-02-12 15:53:57', '2024-02-12 15:53:57'),
(347, 11, 'COW LEG', 3800.00, 0, 'kg', 1.00, 'Cow Leg.jpg-440.jpg', 'Cow leg 1kg', 10, 'Yes', 0, 1, '2024-02-12 16:01:40', '2024-02-12 16:01:40'),
(348, 11, 'Cow Skin (white)', 3500.00, 0, 'kg', 0.00, 'Ponmo.webp-272.webp', 'Cow skin (white)', 20, 'Yes', 0, 1, '2024-02-12 16:47:20', '2024-02-12 16:47:20'),
(349, 11, 'Cow Neck1KG', 4800.00, 0, 'kg', 0.00, 'COW NECK.jpg-202.jpg', 'Cow Neck 1KG', 10, 'Yes', 0, 1, '2024-02-12 16:50:34', '2024-02-12 16:50:34'),
(350, 11, 'Cow Fat 1KG', 1000.00, 0, 'kg', 1.00, 'COW FAT.webp-792.webp', 'Cow Fat', 10, 'No', 0, 1, '2024-02-12 16:52:50', '2024-02-12 16:52:50'),
(351, 11, 'Cow brisket Bone 1KG', 3500.00, 0, 'kg', 1.00, 'COW BRISKET BONE.webp-790.webp', 'Cow brisket Bone 1KG', 20, 'Yes', 0, 1, '2024-02-12 16:55:11', '2024-02-12 16:55:11'),
(352, 11, 'COW BONE 1KG', 1000.00, 0, 'kg', 1.00, 'COW BONE.jpg-813.jpg', 'Cow Bone  1KG', 10, 'Yes', 0, 1, '2024-02-12 17:29:06', '2024-02-12 17:29:06'),
(353, 11, 'Lamb Chops', 6800.00, 0, 'kg', 1.00, 'LAMB CHOPS.jpg-118.jpg', 'Lamb Chops 1KG', 20, 'Yes', 0, 1, '2024-02-12 17:31:47', '2024-02-12 17:31:47'),
(354, 11, 'Cow Carcass', 3800.00, 0, 'kg', 1.00, 'COW CARCASS.jpg-972.jpg', 'Cow Carcass', 10, 'Yes', 0, 1, '2024-02-12 17:34:04', '2024-02-12 17:34:04'),
(355, 11, 'Cow TOZO', 6000.00, 0, 'kg', 1.00, 'COW TOZO.jpg-901.jpg', 'COW TOZO', 20, 'Yes', 0, 1, '2024-02-12 17:35:57', '2024-02-12 17:35:57'),
(356, 11, 'SHREDDED BEEF 1KG', 6200.00, 0, 'kg', 1.00, 'SHREDDED BEEF.jpg-417.jpg', 'Shredded Beef 1KG', 10, 'Yes', 0, 1, '2024-02-12 17:40:59', '2024-02-12 17:40:59'),
(357, 11, 'COW SHIN 1KG', 6200.00, 0, 'kg', 1.00, 'COW SHIN.jpeg-722.jpeg', 'COW SHIN  1KG', 10, 'Yes', 0, 1, '2024-02-12 17:47:18', '2024-02-12 17:47:18'),
(358, 11, 'COW SILVERSIDE  1KG', 6200.00, 0, 'kg', 1.00, 'COW SILVERSIDE.jpeg-249.jpeg', 'Cow Silverside', 10, 'Yes', 0, 1, '2024-02-12 17:55:33', '2024-02-12 17:55:33'),
(359, 11, 'Beef Filet', 6200.00, 0, 'kg', 1.00, 'BEEF FILLET.jpeg-220.jpeg', 'BEEF FILET  1KG', 20, 'Yes', 0, 1, '2024-02-12 17:59:53', '2024-02-12 17:59:53'),
(360, 11, 'Cow TOPSIDE  1KG', 6200.00, 0, 'kg', 1.00, 'COW TOPSIDE.webp-964.webp', 'COW TOPSIDE 1KG', 10, 'Yes', 0, 1, '2024-02-12 18:02:23', '2024-02-12 18:02:23'),
(361, 11, 'COW ROSTO', 6200.00, 0, 'kg', 1.00, 'COW ROSTO.jpeg-985.jpeg', 'COW ROSTO', 20, 'Yes', 0, 1, '2024-02-12 18:04:32', '2024-02-12 18:04:32'),
(362, 11, 'Chicken Breast', 4050.00, 0, 'kg', 1.00, 'CHICKEN BREAST.webp-547.webp', 'Chicken Breast 1KG', 10, 'Yes', 0, 1, '2024-02-16 21:26:50', '2024-02-16 21:26:50'),
(363, 11, 'Chicken Wings', 4250.00, 0, 'kg', 1.00, 'Chicken - Wings.png-167.png', 'Chicken Wings 1KG', 10, 'Yes', 0, 1, '2024-02-16 21:31:51', '2024-02-16 21:31:51'),
(364, 11, 'Chicken Thighs', 4100.00, 0, 'kg', 1.00, 'CHIECKEN THIGHS.jpeg-987.jpeg', 'Chicken Thighs 1KG', 10, 'Yes', 0, 1, '2024-02-16 22:13:16', '2024-02-16 22:13:16'),
(365, 11, 'Turkey Gizzard', 5250.00, 0, 'kg', 1.00, 'TURKEY GIZZARD.webp-866.webp', 'Turkey Gizzard 1KG', 10, 'Yes', 0, 1, '2024-02-17 17:01:56', '2024-02-17 17:01:56'),
(366, 11, 'Turkey Wings', 6150.00, 0, 'kg', 1.00, 'TURKEY WINGS.jpg-912.jpg', 'Turkey Wigs 1KG', 10, 'Yes', 0, 1, '2024-02-17 17:04:38', '2024-02-17 17:04:38'),
(367, 11, 'Extra Jumbo Snail (20 pieces)', 47000.00, 0, 'kg', 0.00, 'SNAIL.jpg-265.jpg', 'Extra Jumbo Snail (20  pieces)', 10, 'Yes', 0, 1, '2024-02-17 23:30:11', '2024-02-17 23:34:58'),
(368, 11, 'Snail -Jumbo (20 pieces)', 43000.00, 0, 'kg', 0.00, 'SNAIL.jpg-887.jpg', 'Sail-Jumbo (20 pieces)', 10, 'Yes', 0, 1, '2024-02-17 23:33:31', '2024-02-17 23:33:31'),
(369, 11, 'Sail- Large (20 pieces)', 39000.00, 0, 'kg', 0.00, 'SNAIL.jpg-549.jpg', 'Snail -Large (20 pieces)', 20, 'No', 0, 1, '2024-02-17 23:55:30', '2024-02-17 23:55:30'),
(370, 11, 'Snail - Medium ( 20 pieces)', 31000.00, 0, 'kg', 0.00, 'SNAIL.jpg-803.jpg', 'Snail- Medium ( 20 pieces)', 20, 'No', 0, 1, '2024-02-17 23:58:02', '2024-02-17 23:58:02'),
(371, 11, 'Snail-Small (20 pieces )', 27000.00, 0, 'kg', 0.00, 'SNAIL.jpg-391.jpg', 'Snail-Small ( 20 pieces)', 20, 'No', 0, 1, '2024-02-18 00:16:11', '2024-02-18 00:16:11'),
(372, 11, 'Shrimps', 2600.00, 0, 'kg', 0.20, 'SHRIMPS.jpg-423.jpg', 'Shrimps', 10, 'No', 0, 1, '2024-02-18 01:08:49', '2024-02-18 01:08:49'),
(373, 11, 'Prown (Large)', 11000.00, 0, 'kg', 1.00, 'Prawns - Unpeeled.jpg-665.jpg', 'Prown (Large)', 10, 'No', 0, 1, '2024-02-18 01:24:00', '2024-02-18 01:24:00'),
(374, 11, 'Prown ( Medium)', 9000.00, 0, 'kg', 1.00, 'Prawns - Unpeeled.jpg-177.jpg', 'Prown ( Medium)', 10, 'No', 0, 1, '2024-02-18 01:28:08', '2024-02-18 01:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, '5401699722910.png', 1, '2023-11-11 16:15:10', '2023-11-11 16:15:10'),
(3, 1, '3011699723259.png', 1, '2023-11-11 16:20:59', '2023-11-11 16:20:59'),
(5, 1, '3041699723259.jpg', 1, '2023-11-11 16:20:59', '2023-11-11 16:20:59'),
(6, 22, '6681705830785.jpg', 1, '2024-01-21 14:53:05', '2024-01-21 14:53:05'),
(7, 3, '6701705849796.webp', 1, '2024-01-21 20:09:56', '2024-01-21 20:09:56'),
(8, 3, '1221705849796.jpeg', 1, '2024-01-21 20:09:56', '2024-01-21 20:09:56'),
(9, 72, '3321707082763.webp', 1, '2024-02-05 02:39:23', '2024-02-05 02:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rating` int(10) UNSIGNED NOT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Men', 1, NULL, NULL),
(2, 'Women', 1, NULL, NULL),
(3, 'Kids', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `city`, `state`, `cost`) VALUES
(1, 'Ikeja', 'Abia State', 3000),
(2, 'Lekki', 'Adamawa State', 3000),
(3, 'Victoria Island', 'Akwa Ibom State', 1000),
(4, 'Magodo', 'Anambra State', 2000),
(5, 'Ijora', 'Bauchi State', 2000),
(6, 'Oshodi', 'Bayelsa State', 1000),
(7, 'Eti-Osa', 'Benue State', 1000),
(8, 'Mushin', 'Borno State', 2500),
(9, 'Agege', 'Cross River State', 1000),
(10, 'Ikorodu', 'Delta State', 1000),
(11, 'Epe', 'Ebonyi State', 2000),
(12, 'Amuwo-Odofin', 'Edo State', 1500),
(13, 'Surulere', 'Ekiti State', 1500),
(14, 'Ojo', 'Enugu State', 2000),
(15, 'Badagry', 'FCT', 700),
(16, 'Lagos Island', 'Gombe State', 3000),
(17, 'Ajah', 'Imo State', 2000),
(18, 'Eko Atlantic', 'Jigawa State', 1000),
(19, 'Banana Island', 'Kaduna State', 3000),
(20, 'Apapa', 'Kano State', 3000),
(21, 'Yaba', 'Katsina State', 3000),
(22, 'Tarkwa Bay Beach', 'Kebbi State', 3000),
(23, '', 'Kogi State', 3000),
(24, '', 'Kwara State', 3000),
(25, '', 'Lagos State', 4000),
(26, '', 'Nasarawa State', 2500),
(27, '', 'Niger State', 3000),
(28, '', 'Ogun State', 700),
(29, '', 'Ondo State', 700),
(30, '', 'Osun State', 700),
(31, '', 'Oyo State', 700),
(32, '', 'Plateau State', 1000),
(33, '', 'Rivers State', 1500),
(34, '', 'Sokoto State', 3000),
(35, '', 'Taraba State', 3000),
(36, '', 'Yobe State', 3000),
(37, '', 'Zamfara State', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `id` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `status` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`id`, `orderId`, `status`, `description`, `date`) VALUES
(1, 2, '1', 'this is mad', '2023-10-02'),
(2, 10, '2', 'Order has been sent to vendor', '2023-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `pushtoken` varchar(255) DEFAULT NULL,
  `is_verified` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `password`, `email`, `phone`, `code`, `pushtoken`, `is_verified`) VALUES
(1, 'Richard', 'Offiong', '$2b$10$mkHxEqzSOAFCsb8FJyyZLexdfQaCSWDq06tB//9FLqr2Fimk1G9UW', 'richierex10@gmail.com', '09063785748', '848236', 'ExponentPushToken[jAtSXgNgFpPgta1u0CHU9e]', 1),
(5, 'Lawrence', 'Ani', '$2b$10$Anl9NE5Bv9IbOHCY/3tf2.Tt4pAyR0OEx3KKlw2wkb71dQVkYkKNO', 'Law@gmail.com', '', NULL, NULL, 0),
(6, 'Ricardo', 'Tevez', '$2b$10$zY49w4dJmXD4ee648vWFAeHjd4/hNI1fBiieFoosF1fIh2t550HQS', 'reotech8@gmail.com', '09063785748', '634193', NULL, 1),
(7, 'Marcus', 'Oladapo', '$2b$10$cYVtvhPo8tcIUQ2suBRF9.zTAa.VpcEC1A3h8M6i3YgPG2HIpc1MO', 'marcusoladapo@gmail.com', '', '119704', NULL, 1),
(8, 'Imisioluwa', 'Oladapo', '$2b$10$C07swvWmqupmLmh/ErJSD.XSQ2tdzNm/jbU2.mL8mpj4h.7w3fNda', 'Imoladapo@gmail.com', '', '607034', NULL, 0),
(9, 'Benjamin', 'Oladapo', '$2b$10$tfwkbOu5fCYj9TaKvKMfZOv6rVxRH5oePsY7w4jVX5HDKQ6QQP2.q', 'oladapobenjamin@gmail.com', '', '195339', NULL, 1),
(10, 'utgopu', 'gzkzof', '$2b$10$uxPJbLzaPQoWCbL8wq7MG.H3Ssed3qY2/pTzO4yW3MkCc50l.LAd6', 'marketplacefarmers@gmail.com', '', '484678', 'ExponentPushToken[jtwA6GOBc3SfDhynWUqixd]', 1),
(11, 'Julius', 'Akanji', '$2b$10$CKitmG04sgr8.sfOgDBe5.LfB/dsyCxNhLAy6Xtvv6cT9oJ.i2pwq', 'juliusayodele3@gmail.com', '', '188931', NULL, 1),
(12, 'Abel', 'Oladapo', '$2b$10$.0L6Sy1JopHojx418KL.6.eCsUi.7T1HfFgSjwI38C8OnZPAZ8uXS', 'meccianooladapo@gmail.com', '', '338224', NULL, 1),
(13, '15666666666', '15666666666', '$2b$10$Inx.ZFvEUCJBWcc5JZbATOJnNp7lijZN4qno./H2dS7Y/G8.xNgY.', '15666666666', '', '619823', NULL, 0),
(14, 'Ene', 'Asuquo', '$2b$10$KcjodJH4s2YeyC2ZhSQUmeOvXSo8Z6vdq6hn647ecqz4AK3phUXgK', 'ene.henry.eh@gmail.com', '', '119745', NULL, 1),
(15, 'Eyo', 'Akak', '$2b$10$x0em2LDHAaphLOAlp6uQau38Pb12Vo1mHXcLP4UIjqO0vNdgi3/.K', 'favourakak@gmail.com', '', '566247', NULL, 1),
(16, 'Lawrence', 'Offiong', '$2b$10$bDz0aynGIRcneKQMIpk.BObBoElb66XhfpPYuxFTcaPGSZbblBBxe', 'larryani24@gmail.com', '', '881608', NULL, 1),
(17, 'Mary', 'Offiong', '$2b$10$TByYFlM4/77DriG2lE7u4uMelkC.TT2yLo.gHonUkHkaJQx8Hh71S', 'maryoffiong2017@gmail.com', '', '800566', NULL, 0),
(18, 'Adedayo', 'Oladapo', '$2b$10$Qu6lVQaIQAmcXly4DnSMVOCmyN1qjaj2P/ZQpUXMdKK4d7KNgob2y', 'dayo.oyedun@gmail.com', '', '863421', NULL, 1),
(19, 'Marcus', 'Oladapo', '$2y$12$nEPOZfyftQ2FPDrMQIF88eScAbrY0TBCGzvI4x.miXePOSxu.ZOdW', 'oladapomarcus28@gmail.com', '', '105377', NULL, 1),
(20, 'Ribetan', 'Nanjwan', '$2b$10$fcN9gYb2nr.CrY5YA5/t.OWBD4QrRf1VMqswXW1KFjbi7qI9iaClC', 'mnanjwan@gmail.com', '', '521937', NULL, 1),
(22, 'Ribetan', 'Nanjwan', '$2b$10$o6uF/IqWysgFctMgeljZvu4FvyS0mX3aCa.1v8Fxc.7J5.4P8.0QW', 'testdomy50@gmail.com', '90000000', '841432', NULL, 1),
(23, 'Godswill', 'Akpa', '$2b$10$o9A9wakYtK0HYeF4CooJpubhnUw5PPFDhoa2WBhx40fW9W./FGYCG', 'akpagodswill2@outlook.com', '', '411388', NULL, 1),
(24, 'Angelo', 'MONVO', '$2b$10$pAfBz.wBXZYDOdzhm4v83uevT7uCStN31KC6CJfUIHQq7LIVQZZlK', 'monvoangelo@gmail.com', '', '773343', NULL, 1),
(25, 'Bob', 'Marley', '$2b$10$eMXFWYgimIwz/sxR7rqbKOMkhJMMjMeTwlgojVtHoIFFA4Wba5u8W', 'bob@marley.com', '', '060462', NULL, 0),
(26, 'Flow', 'Emmanuel', '$2b$10$VLOzrQwAI2OR99yvb0bal.ftq1wLShvECUu10OYUoQU5EWZIk9QsC', 'Devflow0@gmail.com', '', '828217', NULL, 1),
(27, 'Isaac', 'Cletus', '$2b$10$4zX2CZHGLlEy0aI0RZHjHuDyDBgZGlUK2GX2Aaidvj4zBzPdeTKEO', 'isaaccletus52@gmail.com', '', '616866', NULL, 1),
(28, 'Otiwa', 'Anthony', '$2b$10$H4In87iSXfaZDBSgiclONeuP.9PW0EgB5o3WYYZ2mLE/OlamQUgBS', 'otiwatony59@gmail.com', '', '698212', NULL, 0),
(29, 'Adedayo', 'Oladapo', '$2b$10$VtiBf6ModGShb4QDpxMzJO6cILTvIxDavlEcf7.TQQTBYAMXTP7mW', 'oladapoadedayo387@gmail.com', '', '793346', NULL, 1),
(30, 'Beatrice sayo', 'Ajoloko', '$2b$10$pzkEBB.Um.22epBcNyH/fefOqJ1zuMcfrUGKWGV8Q/ouLJvThmGeW', 'sayopeace1@gmail.com', '', '744883', NULL, 0),
(31, 'Momo', 'Kandy', '$2b$10$4E2a5a9ajV4YGgjq595fP.q7eltCfdkxdeRu3keaH3c3wNM51tWOu', 'karabok913@gmail.com', '', '864245', NULL, 0),
(32, 'Ajoloko', 'Beatrice Sayo', '$2b$10$yj65sLiqQmaJtKtaERFX4.MDVvoBSfcLy32LhxoQVXNAy/THeQ2dO', 'sayopeace@yahoo.com', '', '503449', NULL, 0),
(33, 'larry', 'Offiong', '$2b$10$VWvUhR7XGgowDkyJF0c7/.pVb3nV2PU9ioIi6oXrO.68U4w5Q2Qma', 'offionglarry5@gmail.com', '', '517498', NULL, 0),
(34, 'Sanjeev', 'Kumar', '$2b$10$pZfT36VSTg5plLFRFExucO8n1K60.Mi08dFTdgt/MbHL2tPBPVdFO', 'harshitauniversalexport@gmail.com', '', '868070', NULL, 1),
(35, 'Collins', 'Gathumbi', '$2b$10$i9jiMyxm2NCpELm5EXql0OacA9VFq.EIrXRtDBftqG2X11bQPzImu', 'collinsgathumbi4@gmail.com', '', '808788', NULL, 0),
(36, 'Layi', 'Olaleru', '$2b$10$eobQ3KFlO.gcOP70ZwytZ.Umx4nwlrDE7uQ8EvRE3ip1wipTv26fu', 'xolayiwola@gmail.com', '', '411561', NULL, 1),
(37, 'Kehinde', 'Adesokan', '$2b$10$W2OwXKwdAJYizL92TAaunuUwzZUszyijAfv20M7EKEAw2f39n1CLO', 'dankofafrica@gmail.com', '', '873636', NULL, 1),
(38, 'Rose', 'Michelle', '$2b$10$bA49Ax/itYOMv5E4Q.LQHuNldmR70ZJqRwYt4p2kLosdu1KH170eq', 'rose.michie46@gmail.com', '', '571593', NULL, 1),
(39, 'Marcus', 'Oladapo', '$2b$10$MHnKAA2m88BByscRFcjPHe0jeBdgMbuHad64Bnci9rwsQLTt5HDvq', 'marcusoladapo28@gmail.com', '', '704032', NULL, 1),
(40, 'Larry', 'Offiong', '$2b$10$Sq5UXIubHkZWmm6/fjlwLew6xdn1uLASgfk5jRWok0zK97FyNWziO', 'thesleepingiris@gmail.com', '', '978209', NULL, 0),
(41, 'Richard', 'Offiong', '$2b$10$7p8qI47ucclzuM6D48XAT.4VmkEL9q0styah4d3iF6UYTR6QmTcrK', 'hueandskyltd@gmail.com', '', '376243', NULL, 0),
(42, 'Mark', 'John', '$2b$10$wBO1DqPycVcf1y..2kHnD.jZkGWdBgqTr9Mt50odq.tvgz0x7R3je', '08131387200', '', '973760', NULL, 0),
(43, 'Mark', 'John', '$2b$10$oMXzXG4faghegl8sjFNILOigSHov3y5UqRzI6S28IIPQjvAkhsJ1y', 'Markjohn899900@gmail.com', '', '018000', NULL, 0),
(44, 'Ribetan', 'Nanjwan', '$2y$12$xZlOqnIapnQP8oj/zO3esu3kfF4GHZw6s6xJpz1fVfNJz6Y8BmOLO', 'mnanjwan@outlook.com', '', 'BWtCuF', NULL, 0),
(45, 'Larry', 'Offiong', '$2y$12$lAF2rReUrtPpAu4yjs2B4eUqVRR4wI5E47j2ITD28Aqx8zBWqf8eu', 'larry@hueandsky.com', '', 'D5gLv3', NULL, 0),
(46, 'Marcus', 'Oladapo', '$2y$12$4i6pd4JgaKX9FwDs5k.zzOUAPpK0asOatjZ1z/44d0Zt/qiVoNX8q', 'marcusoladapo78@gmail.com', '', 'pEN5Tp', NULL, 0),
(47, 'MAGDALENE', 'ISHIE', '$2y$12$50xun93EzXCy.ozEzpDJB.7Wyn2CJgmVTATZybyV53OH4JO1Z35D2', 'pigeonpoledev@gmail.com', '', 'zWJRmd', NULL, 0),
(48, 'I В₽\n8D\n.', 'r <', '$2b$10$KfG3zwOQnbpqpMkxFyH.puxt6m.BoNhGqWp0TLH1pQNTd1BIyWr1O', 'indigaonline@gmail.com', '', '337614', NULL, 0),
(49, 'Milo', 'Merlyn', '$2b$10$4zSrf3Wgjzk99QgRLZuox.OlbeMb4v593ov5R5YYyhNtzZPGx.vCy', 'Milomerlyn778@gmail.co', '', '789207', NULL, 0),
(50, 'Hezekiah', 'Oladapo', '$2b$10$vxYdc.UFsDeIVMTf9oRxLuc.G1FLo.wj51kUh/NLB2BgIeGOnJhrS', 'Hezeladho@gmail.com', '', '728152', NULL, 0),
(51, 'Agboola', 'Odunayo', '$2b$10$nqCeLX9CtG7dqz/aHCIsseg.T4WwP1Yt6/FM6TLgPRNRQjJum3ddm', 'agboolaodunayo2016@gmail.com', '', '253763', NULL, 0),
(52, 'Grace', 'Fasoto', '$2b$10$wKOXYhHakev7NwHQSuxxh.VOOfKqMaXeGkBSdVgDz1ip4dtnxQLFG', 'gracefasoto@gmail.com', '', '071481', NULL, 1),
(53, 'Folakemi', 'Nurudeen', '$2b$10$wU0rocSp/7yDevJSe5TBtO3pfPpjkVf9izBBYB4S76KIYT4hTo.1W', 'bussyamid@gmail.com', '', '908652', NULL, 0),
(54, 'Joseph', 'Kolawole', '$2b$10$SVRvYLSgm6Z0m3/wWdoJpOvr8Qd.TQnKiy5vrq1OuXV4KsCeVawEu', 'odunjok1@gmail.com', '', '266459', NULL, 1),
(55, 'Mustapha', 'Ibrahim', '$2b$10$xfPrP4GK.ixtSRf0NJlINO2FfHyssF09FBVy61h1gzx9mUS7QpP2e', 'iamustapha213@gmail.com', '', '887294', NULL, 0),
(56, 'Ibukun', 'Owode', '$2b$10$su332tsO6qHuk6kGHzE9JeCY3yT.LO4pBU5C45/cxLJfEj/MfvS8m', 'ibukunowode76@gmail.com', '', '073609', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `lagos_shipping`
--
ALTER TABLE `lagos_shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `productimages`
--
ALTER TABLE `productimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_product_id_foreign` (`product_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lagos_shipping`
--
ALTER TABLE `lagos_shipping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productimages`
--
ALTER TABLE `productimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=375;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
