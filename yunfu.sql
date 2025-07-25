-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-07-24 04:33:06
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `yunfu`
--

-- --------------------------------------------------------

--
-- 資料表結構 `manager`
--

CREATE TABLE `manager` (
  `id` int(10) UNSIGNED NOT NULL,
  `cover` varchar(100) NOT NULL DEFAULT 'error.jpg',
  `account` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `release` enum('y','n') NOT NULL DEFAULT 'y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `manager`
--

INSERT INTO `manager` (`id`, `cover`, `account`, `password`, `name`, `phone`, `release`, `created_at`, `updated_at`) VALUES
(28, 'bamanager1753083256.jpg', '2@2.2', '$2y$12$A0NKM9yEiv2nb6kSlHM8ze3A40jhhuy7uQbpQSrQQavZQtPPrmqgO', '222222', '222222', 'y', '2025-07-21 05:21:59', '2025-07-21 08:06:22'),
(29, 'bamanager1753075944.jpg', '1@1.1', '$2y$12$WCwoFYexj8mgBNad.rwxfu1B0vXKHTtk1jd.mwnxiQQl/e8E.5aHi', '111111', '111111', 'y', '2025-07-21 05:32:24', '2025-07-21 05:32:24');

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('maJNcSWpTMfEyNhCnqjxZnVGdKYzWIKkRyYeKdXn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUzBLa2l1WTdjcmZOa2pjeHdzWGlJT0ZPR09MeTh0RjVHUUNYaUJkNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hc3NldHMvZmF2aWNvbi5pY28iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjU0OiJsb2dpbl9tYW5hZ2VyXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO3M6NToiMUAxLjEiO30=', 1753269225),
('sGFQyx48cei8YEoLinMkpsC5g2JmXGT37ImCfMEz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibnpkcHp1c01hc29rWldqbVA2cmF5MVFIeVFpdnJwekFDa1NoOTNBWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hc3NldHMvZmF2aWNvbi5pY28iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753323815);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `work`
--

CREATE TABLE `work` (
  `id` int(10) UNSIGNED NOT NULL,
  `cover` varchar(100) NOT NULL DEFAULT 'error.jpg',
  `title` varchar(20) NOT NULL,
  `name` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `release` enum('y','n') NOT NULL DEFAULT 'y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `work`
--

INSERT INTO `work` (`id`, `cover`, `title`, `name`, `class`, `release`, `created_at`, `updated_at`) VALUES
(113, 'baworks1753182383.jpg', '東區小東路', '衛浴翻修', '1', 'y', '2025-07-22 11:06:23', '2025-07-22 11:06:23'),
(117, 'baworks1753240153.jpg', '東區大同段', '電梯雙車', '2', 'y', '2025-07-23 03:09:13', '2025-07-23 04:04:54'),
(118, 'baworks1753240207.jpg', '同安路', '重建案例', '2', 'y', '2025-07-23 03:10:07', '2025-07-23 04:04:50'),
(119, 'baworks1753240260.jpg', '安南區商60', '七米電梯雙車', '2', 'y', '2025-07-23 03:11:00', '2025-07-23 04:04:44'),
(120, 'baworks1753243108.jpg', '府安路5段', '電梯雙車', '2', 'y', '2025-07-23 03:58:28', '2025-07-23 04:04:39'),
(122, 'baworks1753243346.jpg', '東區府連段', '重建案例', '2', 'y', '2025-07-23 04:02:26', '2025-07-23 04:02:26'),
(123, 'baworks1753243627.jpg', '新市區華美段', '重建案例', '2', 'y', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(124, 'baworks1753243745.jpg', '溪東段913', '重建案例', '2', 'y', '2025-07-23 04:09:05', '2025-07-23 04:09:15'),
(125, 'baworks1753244124.jpg', '立德八路', '衛浴翻修', '1', 'y', '2025-07-23 04:15:24', '2025-07-23 04:15:24');

-- --------------------------------------------------------

--
-- 資料表結構 `workmore`
--

CREATE TABLE `workmore` (
  `id` int(10) UNSIGNED NOT NULL,
  `work_id` int(10) UNSIGNED NOT NULL,
  `cover` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `workmore`
--

INSERT INTO `workmore` (`id`, `work_id`, `cover`, `created_at`, `updated_at`) VALUES
(158, 113, 'baworkmore17532400160.jpg', '2025-07-23 03:06:56', '2025-07-23 03:06:56'),
(159, 113, 'baworkmore17532400161.jpg', '2025-07-23 03:06:56', '2025-07-23 03:06:56'),
(160, 113, 'baworkmore17532400162.jpg', '2025-07-23 03:06:56', '2025-07-23 03:06:56'),
(161, 113, 'baworkmore17532400163.jpg', '2025-07-23 03:06:56', '2025-07-23 03:06:56'),
(162, 113, 'baworkmore17532400164.jpg', '2025-07-23 03:06:56', '2025-07-23 03:06:56'),
(163, 113, 'baworkmore17532400165.jpg', '2025-07-23 03:06:56', '2025-07-23 03:06:56'),
(164, 113, 'baworkmore17532400166.jpg', '2025-07-23 03:06:56', '2025-07-23 03:06:56'),
(165, 113, 'baworkmore17532400167.jpg', '2025-07-23 03:06:56', '2025-07-23 03:06:56'),
(166, 113, 'baworkmore17532400168.jpg', '2025-07-23 03:06:56', '2025-07-23 03:06:56'),
(167, 113, 'baworkmore17532400169.jpg', '2025-07-23 03:06:56', '2025-07-23 03:06:56'),
(168, 113, 'baworkmore175324001610.jpg', '2025-07-23 03:06:56', '2025-07-23 03:06:56'),
(169, 113, 'baworkmore175324001611.jpg', '2025-07-23 03:06:56', '2025-07-23 03:06:56'),
(170, 117, 'baworkmore17532401530.jpg', '2025-07-23 03:09:13', '2025-07-23 03:09:13'),
(171, 117, 'baworkmore17532401531.jpg', '2025-07-23 03:09:13', '2025-07-23 03:09:13'),
(172, 117, 'baworkmore17532401532.jpg', '2025-07-23 03:09:13', '2025-07-23 03:09:13'),
(173, 117, 'baworkmore17532401533.jpg', '2025-07-23 03:09:13', '2025-07-23 03:09:13'),
(174, 117, 'baworkmore17532401534.jpg', '2025-07-23 03:09:13', '2025-07-23 03:09:13'),
(175, 117, 'baworkmore17532401535.jpg', '2025-07-23 03:09:13', '2025-07-23 03:09:13'),
(176, 117, 'baworkmore17532401536.jpg', '2025-07-23 03:09:13', '2025-07-23 03:09:13'),
(177, 117, 'baworkmore17532401537.jpg', '2025-07-23 03:09:13', '2025-07-23 03:09:13'),
(178, 117, 'baworkmore17532401538.jpg', '2025-07-23 03:09:13', '2025-07-23 03:09:13'),
(179, 117, 'baworkmore17532401539.jpg', '2025-07-23 03:09:13', '2025-07-23 03:09:13'),
(180, 117, 'baworkmore175324015310.jpg', '2025-07-23 03:09:13', '2025-07-23 03:09:13'),
(181, 117, 'baworkmore175324015311.jpg', '2025-07-23 03:09:13', '2025-07-23 03:09:13'),
(182, 117, 'baworkmore175324015312.jpg', '2025-07-23 03:09:13', '2025-07-23 03:09:13'),
(183, 117, 'baworkmore175324015313.jpg', '2025-07-23 03:09:13', '2025-07-23 03:09:13'),
(184, 117, 'baworkmore175324015314.jpg', '2025-07-23 03:09:13', '2025-07-23 03:09:13'),
(185, 117, 'baworkmore175324015315.jpg', '2025-07-23 03:09:13', '2025-07-23 03:09:13'),
(186, 118, 'baworkmore17532402070.jpg', '2025-07-23 03:10:07', '2025-07-23 03:10:07'),
(187, 118, 'baworkmore17532402071.jpg', '2025-07-23 03:10:07', '2025-07-23 03:10:07'),
(188, 118, 'baworkmore17532402072.jpg', '2025-07-23 03:10:07', '2025-07-23 03:10:07'),
(189, 118, 'baworkmore17532402073.jpg', '2025-07-23 03:10:07', '2025-07-23 03:10:07'),
(190, 118, 'baworkmore17532402074.jpg', '2025-07-23 03:10:07', '2025-07-23 03:10:07'),
(191, 118, 'baworkmore17532402075.jpg', '2025-07-23 03:10:07', '2025-07-23 03:10:07'),
(192, 118, 'baworkmore17532402076.jpg', '2025-07-23 03:10:07', '2025-07-23 03:10:07'),
(193, 118, 'baworkmore17532402077.jpg', '2025-07-23 03:10:07', '2025-07-23 03:10:07'),
(194, 118, 'baworkmore17532402078.jpg', '2025-07-23 03:10:07', '2025-07-23 03:10:07'),
(195, 118, 'baworkmore17532402079.jpg', '2025-07-23 03:10:07', '2025-07-23 03:10:07'),
(196, 119, 'baworkmore17532402600.jpg', '2025-07-23 03:11:00', '2025-07-23 03:11:00'),
(197, 119, 'baworkmore17532402601.jpg', '2025-07-23 03:11:00', '2025-07-23 03:11:00'),
(198, 119, 'baworkmore17532402602.jpg', '2025-07-23 03:11:00', '2025-07-23 03:11:00'),
(199, 119, 'baworkmore17532402603.jpg', '2025-07-23 03:11:00', '2025-07-23 03:11:00'),
(200, 119, 'baworkmore17532402604.jpg', '2025-07-23 03:11:00', '2025-07-23 03:11:00'),
(201, 119, 'baworkmore17532402605.jpg', '2025-07-23 03:11:00', '2025-07-23 03:11:00'),
(202, 119, 'baworkmore17532402606.jpg', '2025-07-23 03:11:00', '2025-07-23 03:11:00'),
(203, 119, 'baworkmore17532402607.jpg', '2025-07-23 03:11:00', '2025-07-23 03:11:00'),
(204, 119, 'baworkmore17532402608.jpg', '2025-07-23 03:11:00', '2025-07-23 03:11:00'),
(205, 119, 'baworkmore17532402609.jpg', '2025-07-23 03:11:00', '2025-07-23 03:11:00'),
(206, 120, 'baworkmore17532431080.jpg', '2025-07-23 03:58:28', '2025-07-23 03:58:28'),
(207, 120, 'baworkmore17532431081.jpg', '2025-07-23 03:58:28', '2025-07-23 03:58:28'),
(208, 120, 'baworkmore17532431082.jpg', '2025-07-23 03:58:28', '2025-07-23 03:58:28'),
(209, 120, 'baworkmore17532431083.jpg', '2025-07-23 03:58:28', '2025-07-23 03:58:28'),
(210, 120, 'baworkmore17532431084.jpg', '2025-07-23 03:58:28', '2025-07-23 03:58:28'),
(211, 120, 'baworkmore17532431085.jpg', '2025-07-23 03:58:28', '2025-07-23 03:58:28'),
(212, 120, 'baworkmore17532431086.jpg', '2025-07-23 03:58:28', '2025-07-23 03:58:28'),
(213, 120, 'baworkmore17532431087.jpg', '2025-07-23 03:58:28', '2025-07-23 03:58:28'),
(214, 120, 'baworkmore17532431088.jpg', '2025-07-23 03:58:28', '2025-07-23 03:58:28'),
(215, 122, 'baworkmore17532434060.jpg', '2025-07-23 04:03:26', '2025-07-23 04:03:26'),
(216, 122, 'baworkmore17532434061.jpg', '2025-07-23 04:03:26', '2025-07-23 04:03:26'),
(217, 122, 'baworkmore17532434062.jpg', '2025-07-23 04:03:26', '2025-07-23 04:03:26'),
(218, 122, 'baworkmore17532434063.jpg', '2025-07-23 04:03:26', '2025-07-23 04:03:26'),
(219, 122, 'baworkmore17532434064.jpg', '2025-07-23 04:03:26', '2025-07-23 04:03:26'),
(220, 122, 'baworkmore17532434065.jpg', '2025-07-23 04:03:26', '2025-07-23 04:03:26'),
(221, 122, 'baworkmore17532434066.jpg', '2025-07-23 04:03:26', '2025-07-23 04:03:26'),
(222, 122, 'baworkmore17532434067.jpg', '2025-07-23 04:03:26', '2025-07-23 04:03:26'),
(223, 122, 'baworkmore17532434068.jpg', '2025-07-23 04:03:26', '2025-07-23 04:03:26'),
(224, 122, 'baworkmore17532434069.jpg', '2025-07-23 04:03:26', '2025-07-23 04:03:26'),
(225, 123, 'baworkmore17532436270.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(226, 123, 'baworkmore17532436271.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(227, 123, 'baworkmore17532436272.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(228, 123, 'baworkmore17532436273.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(229, 123, 'baworkmore17532436274.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(230, 123, 'baworkmore17532436275.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(231, 123, 'baworkmore17532436276.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(232, 123, 'baworkmore17532436277.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(233, 123, 'baworkmore17532436278.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(234, 123, 'baworkmore17532436279.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(235, 123, 'baworkmore175324362710.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(236, 123, 'baworkmore175324362711.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(237, 123, 'baworkmore175324362712.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(238, 123, 'baworkmore175324362713.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(239, 123, 'baworkmore175324362714.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(240, 123, 'baworkmore175324362715.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(241, 123, 'baworkmore175324362716.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(242, 123, 'baworkmore175324362717.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(243, 123, 'baworkmore175324362718.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(244, 123, 'baworkmore175324362719.jpg', '2025-07-23 04:07:07', '2025-07-23 04:07:07'),
(245, 124, 'baworkmore17532437450.jpg', '2025-07-23 04:09:05', '2025-07-23 04:09:05'),
(246, 124, 'baworkmore17532437451.jpg', '2025-07-23 04:09:05', '2025-07-23 04:09:05'),
(247, 124, 'baworkmore17532437452.jpg', '2025-07-23 04:09:05', '2025-07-23 04:09:05'),
(248, 124, 'baworkmore17532437453.jpg', '2025-07-23 04:09:05', '2025-07-23 04:09:05'),
(249, 124, 'baworkmore17532437454.jpg', '2025-07-23 04:09:05', '2025-07-23 04:09:05'),
(250, 124, 'baworkmore17532437455.jpg', '2025-07-23 04:09:05', '2025-07-23 04:09:05'),
(251, 124, 'baworkmore17532437456.jpg', '2025-07-23 04:09:05', '2025-07-23 04:09:05'),
(252, 124, 'baworkmore17532437457.jpg', '2025-07-23 04:09:05', '2025-07-23 04:09:05'),
(253, 124, 'baworkmore17532437458.jpg', '2025-07-23 04:09:05', '2025-07-23 04:09:05'),
(254, 124, 'baworkmore17532437459.jpg', '2025-07-23 04:09:05', '2025-07-23 04:09:05'),
(255, 124, 'baworkmore175324374510.jpg', '2025-07-23 04:09:05', '2025-07-23 04:09:05'),
(256, 125, 'baworkmore17532441240.jpg', '2025-07-23 04:15:24', '2025-07-23 04:15:24'),
(257, 125, 'baworkmore17532441241.jpg', '2025-07-23 04:15:24', '2025-07-23 04:15:24'),
(258, 125, 'baworkmore17532441242.jpg', '2025-07-23 04:15:24', '2025-07-23 04:15:24'),
(259, 125, 'baworkmore17532441243.jpg', '2025-07-23 04:15:24', '2025-07-23 04:15:24'),
(260, 125, 'baworkmore17532441244.jpg', '2025-07-23 04:15:24', '2025-07-23 04:15:24'),
(261, 125, 'baworkmore17532441245.jpg', '2025-07-23 04:15:24', '2025-07-23 04:15:24'),
(262, 125, 'baworkmore17532441246.jpg', '2025-07-23 04:15:24', '2025-07-23 04:15:24');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- 資料表索引 `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 資料表索引 `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `workmore`
--
ALTER TABLE `workmore`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `work`
--
ALTER TABLE `work`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `workmore`
--
ALTER TABLE `workmore`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
