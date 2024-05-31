-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2024 at 11:29 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `browser_histories`
--

CREATE TABLE `browser_histories` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `browser_histories`
--

INSERT INTO `browser_histories` (`id`, `user_id`, `url`, `title`, `created_at`, `updated_at`) VALUES
(1, 4, 'http://fyp.test/coursepage', 'Course Page', '2024-05-13 07:53:20', '2024-05-13 07:53:20'),
(2, 4, 'http://fyp.test/coursepage', 'Course Page', '2024-05-13 15:54:42', '2024-05-13 15:54:42'),
(3, 4, 'http://fyp.test/coursepage', 'Course Page', '2024-05-13 15:57:07', '2024-05-13 15:57:07'),
(4, 4, 'http://fyp.test/coursepage', 'Course Page', '2024-05-13 16:10:12', '2024-05-13 16:10:12'),
(5, 4, 'http://fyp.test/bcdrcourse', 'Course Page', '2024-05-13 16:11:35', '2024-05-13 16:11:35'),
(6, 4, 'http://fyp.test/coursepage', 'Course Page', '2024-05-13 16:11:54', '2024-05-13 16:11:54'),
(7, 4, 'http://fyp.test/coursepage', 'Course Page', '2024-05-13 16:14:42', '2024-05-13 16:14:42'),
(8, 4, 'http://fyp.test/bcdrcourse', 'Course Page', '2024-05-13 16:18:27', '2024-05-13 16:18:27'),
(9, 4, 'http://fyp.test/bcdrcourse', 'Course Page', '2024-05-13 16:18:50', '2024-05-13 16:18:50'),
(10, 4, 'http://fyp.test/coursepage', 'Course Page', '2024-05-13 16:18:53', '2024-05-13 16:18:53'),
(11, 4, 'http://fyp.test/bcdrcourse', 'Course Page', '2024-05-13 16:18:56', '2024-05-13 16:18:56'),
(12, 4, 'http://fyp.test/bcdrcourse', 'Course Page', '2024-05-13 16:22:10', '2024-05-13 16:22:10'),
(13, 4, 'http://fyp.test/bcdrcourse', 'Course Page', '2024-05-13 16:23:54', '2024-05-13 16:23:54'),
(14, 4, 'course.coursepage', 'Course Page', '2024-05-13 16:24:29', '2024-05-13 16:24:29'),
(15, 4, 'http://fyp.test/bcdrcourse', 'Course Page', '2024-05-13 16:25:14', '2024-05-13 16:25:14'),
(16, 4, 'course.coursepage', 'Course Page', '2024-05-13 16:25:33', '2024-05-13 16:25:33'),
(17, 4, 'course.coursepage', 'Course Page', '2024-05-14 14:18:32', '2024-05-14 14:18:32'),
(18, 4, 'course.coursepage', 'Course Page', '2024-05-14 14:21:26', '2024-05-14 14:21:26'),
(19, 4, 'course.coursepage', 'Course Page', '2024-05-14 14:21:42', '2024-05-14 14:21:42'),
(20, 4, 'course.coursepage', 'Course Page', '2024-05-14 14:21:44', '2024-05-14 14:21:44'),
(21, 4, 'course.coursepage', 'Management of Information Security', '2024-05-14 14:22:29', '2024-05-14 14:22:29'),
(22, 4, 'http://fyp.test/bcdrcourse', 'Management of Information Security', '2024-05-14 14:24:21', '2024-05-14 14:24:21'),
(23, 4, 'http://fyp.test/bcdrcourse', 'Business Continuity & Disaster Recovery', '2024-05-14 14:24:33', '2024-05-14 14:24:33'),
(24, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-14 14:25:05', '2024-05-14 14:25:05'),
(25, 4, 'course.coursepage', 'Management of Information Security', '2024-05-14 14:26:46', '2024-05-14 14:26:46'),
(26, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 14:28:07', '2024-05-14 14:28:07'),
(27, 4, 'course.auditcoursepage', 'Risk Management', '2024-05-14 14:29:08', '2024-05-14 14:29:08'),
(28, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-14 14:30:01', '2024-05-14 14:30:01'),
(29, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-14 14:30:05', '2024-05-14 14:30:05'),
(30, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 14:30:07', '2024-05-14 14:30:07'),
(31, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 14:30:46', '2024-05-14 14:30:46'),
(32, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 14:32:45', '2024-05-14 14:32:45'),
(33, 4, 'course.auditcoursepage', 'Control & Audit of Information System', '2024-05-14 14:32:58', '2024-05-14 14:32:58'),
(34, 4, 'course.auditcoursepage', 'Control & Audit of Information System', '2024-05-14 14:33:37', '2024-05-14 14:33:37'),
(35, 4, 'course.auditcoursepage', 'Control & Audit of Information System', '2024-05-14 14:34:20', '2024-05-14 14:34:20'),
(36, 4, 'course.auditcoursepage', 'Control & Audit of Information System', '2024-05-14 14:34:21', '2024-05-14 14:34:21'),
(37, 4, 'course.auditcoursepage', 'Control & Audit of Information System', '2024-05-14 14:34:23', '2024-05-14 14:34:23'),
(38, 4, 'course.coursepage', 'Management of Information Security', '2024-05-14 15:03:58', '2024-05-14 15:03:58'),
(39, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-14 15:04:20', '2024-05-14 15:04:20'),
(40, 4, 'course.coursepage', 'Management of Information Security', '2024-05-14 15:05:52', '2024-05-14 15:05:52'),
(41, 4, 'course.coursepage', 'Management of Information Security', '2024-05-14 15:06:01', '2024-05-14 15:06:01'),
(42, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 15:09:14', '2024-05-14 15:09:14'),
(43, 4, 'course.auditcoursepage', 'Control & Audit of Information System', '2024-05-14 15:09:21', '2024-05-14 15:09:21'),
(44, 1, 'course.coursepage', 'Management of Information Security', '2024-05-14 15:25:57', '2024-05-14 15:25:57'),
(45, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-14 15:32:58', '2024-05-14 15:32:58'),
(46, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 15:33:07', '2024-05-14 15:33:07'),
(47, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 15:33:26', '2024-05-14 15:33:26'),
(48, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 15:33:29', '2024-05-14 15:33:29'),
(49, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 15:33:30', '2024-05-14 15:33:30'),
(50, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 15:33:30', '2024-05-14 15:33:30'),
(51, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 15:33:31', '2024-05-14 15:33:31'),
(52, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 15:34:09', '2024-05-14 15:34:09'),
(53, 4, 'course.auditcoursepage', 'Control & Audit of Information System', '2024-05-14 15:34:13', '2024-05-14 15:34:13'),
(54, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 15:34:25', '2024-05-14 15:34:25'),
(55, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-14 15:34:31', '2024-05-14 15:34:31'),
(56, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-14 15:34:33', '2024-05-14 15:34:33'),
(57, 4, 'course.coursepage', 'Management of Information Security', '2024-05-14 15:34:40', '2024-05-14 15:34:40'),
(58, 4, 'course.coursepage', 'Management of Information Security', '2024-05-14 15:34:41', '2024-05-14 15:34:41'),
(59, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 15:35:11', '2024-05-14 15:35:11'),
(60, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 15:37:42', '2024-05-14 15:37:42'),
(61, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 15:37:47', '2024-05-14 15:37:47'),
(62, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 15:37:52', '2024-05-14 15:37:52'),
(63, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-14 15:37:54', '2024-05-14 15:37:54'),
(64, 4, 'course.auditcoursepage', 'Control & Audit of Information System', '2024-05-14 15:37:57', '2024-05-14 15:37:57'),
(65, 4, 'course.auditcoursepage', 'Control & Audit of Information System', '2024-05-14 15:38:01', '2024-05-14 15:38:01'),
(66, 4, 'course.coursepage', 'Management of Information Security', '2024-05-14 15:42:17', '2024-05-14 15:42:17'),
(67, 4, 'course.coursepage', 'Management of Information Security', '2024-05-15 21:33:04', '2024-05-15 21:33:04'),
(68, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-15 21:34:13', '2024-05-15 21:34:13'),
(69, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-15 21:34:32', '2024-05-15 21:34:32'),
(70, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-15 21:35:20', '2024-05-15 21:35:20'),
(71, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-15 21:36:31', '2024-05-15 21:36:31'),
(72, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-15 21:36:41', '2024-05-15 21:36:41'),
(73, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-15 23:58:42', '2024-05-15 23:58:42'),
(74, 4, 'course.coursepage', 'Management of Information Security', '2024-05-16 00:16:02', '2024-05-16 00:16:02'),
(75, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-16 00:16:12', '2024-05-16 00:16:12'),
(76, 4, 'course.coursepage', 'Management of Information Security', '2024-05-16 00:16:42', '2024-05-16 00:16:42'),
(77, 4, 'course.coursepage', 'Management of Information Security', '2024-05-16 01:40:48', '2024-05-16 01:40:48'),
(78, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-16 01:41:19', '2024-05-16 01:41:19'),
(79, 4, 'course.coursepage', 'Management of Information Security', '2024-05-16 01:41:27', '2024-05-16 01:41:27'),
(80, 4, 'course.coursepage', 'Management of Information Security', '2024-05-16 01:41:41', '2024-05-16 01:41:41'),
(81, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-16 01:41:43', '2024-05-16 01:41:43'),
(82, 4, 'course.coursepage', 'Management of Information Security', '2024-05-16 01:42:03', '2024-05-16 01:42:03'),
(83, 4, 'course.coursepage', 'Management of Information Security', '2024-05-16 01:42:09', '2024-05-16 01:42:09'),
(84, 4, 'course.coursepage', 'Management of Information Security', '2024-05-16 01:42:12', '2024-05-16 01:42:12'),
(85, 4, 'course.coursepage', 'Management of Information Security', '2024-05-16 01:46:31', '2024-05-16 01:46:31'),
(86, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-16 01:46:40', '2024-05-16 01:46:40'),
(87, 1, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-16 01:47:35', '2024-05-16 01:47:35'),
(88, 4, 'course.coursepage', 'Management of Information Security', '2024-05-16 07:07:01', '2024-05-16 07:07:01'),
(89, 1, 'course.coursepage', 'Management of Information Security', '2024-05-16 07:26:44', '2024-05-16 07:26:44'),
(90, 1, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-16 07:26:47', '2024-05-16 07:26:47'),
(91, 1, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-16 07:26:53', '2024-05-16 07:26:53'),
(92, 1, 'course.riskcoursepage', 'Risk Management', '2024-05-16 07:26:56', '2024-05-16 07:26:56'),
(93, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 09:29:13', '2024-05-17 09:29:13'),
(94, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 09:34:39', '2024-05-17 09:34:39'),
(95, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 09:35:39', '2024-05-17 09:35:39'),
(96, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 09:36:02', '2024-05-17 09:36:02'),
(97, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 09:36:09', '2024-05-17 09:36:09'),
(98, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 09:36:56', '2024-05-17 09:36:56'),
(99, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 09:37:17', '2024-05-17 09:37:17'),
(100, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 10:10:14', '2024-05-17 10:10:14'),
(101, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 10:12:12', '2024-05-17 10:12:12'),
(102, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 10:12:38', '2024-05-17 10:12:38'),
(103, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 10:13:14', '2024-05-17 10:13:14'),
(104, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 10:14:01', '2024-05-17 10:14:01'),
(105, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 10:15:34', '2024-05-17 10:15:34'),
(106, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 10:15:44', '2024-05-17 10:15:44'),
(107, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 10:16:50', '2024-05-17 10:16:50'),
(108, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 10:36:23', '2024-05-17 10:36:23'),
(109, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 10:36:51', '2024-05-17 10:36:51'),
(110, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 10:37:26', '2024-05-17 10:37:26'),
(111, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 10:40:09', '2024-05-17 10:40:09'),
(112, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 10:41:13', '2024-05-17 10:41:13'),
(113, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 10:41:14', '2024-05-17 10:41:14'),
(114, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 10:57:53', '2024-05-17 10:57:53'),
(115, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 10:58:51', '2024-05-17 10:58:51'),
(116, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 11:02:36', '2024-05-17 11:02:36'),
(117, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 11:05:13', '2024-05-17 11:05:13'),
(118, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 11:22:32', '2024-05-17 11:22:32'),
(119, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 20:39:52', '2024-05-17 20:39:52'),
(120, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 21:31:51', '2024-05-17 21:31:51'),
(121, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-17 21:31:56', '2024-05-17 21:31:56'),
(122, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-17 21:33:11', '2024-05-17 21:33:11'),
(123, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-17 21:34:14', '2024-05-17 21:34:14'),
(124, 4, 'course.auditcoursepage', 'Control & Audit of Information System', '2024-05-17 21:34:35', '2024-05-17 21:34:35'),
(125, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-17 21:37:30', '2024-05-17 21:37:30'),
(126, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-17 21:38:07', '2024-05-17 21:38:07'),
(127, 4, 'course.auditcoursepage', 'Control & Audit of Information System', '2024-05-17 21:38:09', '2024-05-17 21:38:09'),
(128, 4, 'course.auditcoursepage', 'Control & Audit of Information System', '2024-05-17 21:38:50', '2024-05-17 21:38:50'),
(129, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 21:53:22', '2024-05-17 21:53:22'),
(130, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 21:53:31', '2024-05-17 21:53:31'),
(131, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 21:53:37', '2024-05-17 21:53:37'),
(132, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 21:53:43', '2024-05-17 21:53:43'),
(133, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 21:57:18', '2024-05-17 21:57:18'),
(134, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 21:57:31', '2024-05-17 21:57:31'),
(135, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 21:57:42', '2024-05-17 21:57:42'),
(136, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 22:01:17', '2024-05-17 22:01:17'),
(137, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 22:01:22', '2024-05-17 22:01:22'),
(138, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-17 22:01:24', '2024-05-17 22:01:24'),
(139, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 22:01:32', '2024-05-17 22:01:32'),
(140, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 22:01:36', '2024-05-17 22:01:36'),
(141, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 22:01:42', '2024-05-17 22:01:42'),
(142, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 22:02:36', '2024-05-17 22:02:36'),
(143, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 22:02:40', '2024-05-17 22:02:40'),
(144, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-17 22:02:45', '2024-05-17 22:02:45'),
(145, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-17 22:03:04', '2024-05-17 22:03:04'),
(146, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-17 22:03:07', '2024-05-17 22:03:07'),
(147, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 22:03:10', '2024-05-17 22:03:10'),
(148, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 22:03:29', '2024-05-17 22:03:29'),
(149, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 22:03:50', '2024-05-17 22:03:50'),
(150, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 22:04:00', '2024-05-17 22:04:00'),
(151, 4, 'course.coursepage', 'Management of Information Security', '2024-05-17 22:04:14', '2024-05-17 22:04:14'),
(152, 1, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 22:27:59', '2024-05-17 22:27:59'),
(153, 1, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 22:28:32', '2024-05-17 22:28:32'),
(154, 1, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 22:29:13', '2024-05-17 22:29:13'),
(155, 1, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-17 22:31:40', '2024-05-17 22:31:40'),
(156, 4, 'course.coursepage', 'Management of Information Security', '2024-05-18 19:19:44', '2024-05-18 19:19:44'),
(157, 4, 'course.coursepage', 'Management of Information Security', '2024-05-18 20:04:38', '2024-05-18 20:04:38'),
(158, 4, 'course.coursepage', 'Management of Information Security', '2024-05-19 09:13:55', '2024-05-19 09:13:55'),
(159, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-19 09:31:01', '2024-05-19 09:31:01'),
(160, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-19 09:32:58', '2024-05-19 09:32:58'),
(161, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-19 09:33:21', '2024-05-19 09:33:21'),
(162, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-19 09:33:29', '2024-05-19 09:33:29'),
(163, 4, 'course.auditcoursepage', 'Control & Audit of Information System', '2024-05-19 09:33:36', '2024-05-19 09:33:36'),
(164, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-19 09:33:58', '2024-05-19 09:33:58'),
(165, 4, 'course.coursepage', 'Management of Information Security', '2024-05-19 09:53:51', '2024-05-19 09:53:51'),
(166, 4, 'course.coursepage', 'Management of Information Security', '2024-05-19 13:28:36', '2024-05-19 13:28:36'),
(167, 8, 'course.coursepage', 'Management of Information Security', '2024-05-19 14:10:11', '2024-05-19 14:10:11'),
(168, 8, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-19 14:10:17', '2024-05-19 14:10:17'),
(169, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-19 14:12:03', '2024-05-19 14:12:03'),
(170, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-19 14:13:06', '2024-05-19 14:13:06'),
(171, 4, 'course.coursepage', 'Management of Information Security', '2024-05-20 02:02:32', '2024-05-20 02:02:32'),
(172, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-20 02:03:40', '2024-05-20 02:03:40'),
(173, 4, 'course.bcdrcoursepage', 'Business Continuity & Disaster Recovery', '2024-05-20 02:04:06', '2024-05-20 02:04:06'),
(174, 4, 'course.coursepage', 'Management of Information Security', '2024-05-20 02:04:21', '2024-05-20 02:04:21'),
(175, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-20 02:06:02', '2024-05-20 02:06:02'),
(176, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-20 02:06:08', '2024-05-20 02:06:08'),
(177, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-20 02:06:31', '2024-05-20 02:06:31'),
(178, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-20 02:06:37', '2024-05-20 02:06:37'),
(179, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-20 02:07:13', '2024-05-20 02:07:13'),
(180, 4, 'course.coursepage', 'Management of Information Security', '2024-05-20 02:07:19', '2024-05-20 02:07:19'),
(181, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-20 02:07:45', '2024-05-20 02:07:45'),
(182, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-20 02:09:04', '2024-05-20 02:09:04'),
(183, 4, 'course.riskcoursepage', 'Risk Management', '2024-05-20 02:09:15', '2024-05-20 02:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint UNSIGNED NOT NULL,
  `feedback` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_01_053843_create_admins_table', 1),
(6, '2024_05_01_073115_create_files_table', 1),
(7, '2024_05_06_105209_create_feedback_table', 2),
(8, '2024_05_13_153704_create_browser_histories_table', 2),
(9, '2024_05_13_235836_add_last_login_at_to_users_table', 3),
(10, '2024_05_15_001927_create_courses_table', 4),
(13, '2024_05_15_001948_create_quizzes_table', 5),
(14, '2024_05_15_002025_create_questions_table', 5),
(16, '2024_05_16_064325_create_options_table', 6),
(17, '2024_05_17_191448_create_quiz_user_table', 7),
(18, '2024_05_19_032246_create_pdf_files_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint UNSIGNED NOT NULL,
  `question_id` bigint UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `question_id`, `value`, `is_correct`, `created_at`, `updated_at`) VALUES
(1, 22, 'asd3', 0, '2024-05-17 11:22:00', '2024-05-18 19:14:47'),
(2, 22, 'asd3', 0, '2024-05-17 11:22:00', '2024-05-18 19:14:47'),
(3, 22, 'Blue3', 0, '2024-05-17 11:22:00', '2024-05-18 19:14:47'),
(4, 22, 'Answer A3', 0, '2024-05-17 11:22:00', '2024-05-18 19:14:47'),
(5, 23, 'ajshd3', 0, '2024-05-17 11:22:00', '2024-05-18 19:14:47'),
(6, 23, '1233', 0, '2024-05-17 11:22:00', '2024-05-18 19:14:47'),
(7, 23, 'asdjh3', 0, '2024-05-17 11:22:00', '2024-05-18 19:14:47'),
(8, 23, '3243', 0, '2024-05-17 11:22:00', '2024-05-18 19:14:47'),
(9, 24, 'asdh3', 0, '2024-05-17 11:22:00', '2024-05-18 19:14:47'),
(10, 24, '91823', 0, '2024-05-17 11:22:00', '2024-05-18 19:14:47'),
(11, 24, 'jasd03', 0, '2024-05-17 11:22:00', '2024-05-18 19:14:47'),
(12, 24, 'ajsd99223', 0, '2024-05-17 11:22:00', '2024-05-18 19:14:47'),
(13, 25, 'Answer A23', 0, '2024-05-17 21:36:45', '2024-05-18 19:13:12'),
(14, 25, 'Answer A23', 0, '2024-05-17 21:36:45', '2024-05-18 19:13:12'),
(15, 25, 'Answer A23', 0, '2024-05-17 21:36:45', '2024-05-18 19:13:12'),
(16, 25, 'Answer A23', 0, '2024-05-17 21:36:45', '2024-05-18 19:13:12'),
(17, 26, 'Answer A33', 0, '2024-05-17 21:36:45', '2024-05-18 19:13:12'),
(18, 26, 'Answer A33', 0, '2024-05-17 21:36:45', '2024-05-18 19:13:12'),
(19, 26, 'Answer A33', 0, '2024-05-17 21:36:45', '2024-05-18 19:13:12'),
(20, 26, 'Answer A33', 0, '2024-05-17 21:36:45', '2024-05-18 19:13:12'),
(21, 27, 'asdh43', 0, '2024-05-17 21:36:45', '2024-05-18 19:13:12'),
(22, 27, 'asd43', 0, '2024-05-17 21:36:45', '2024-05-18 19:13:12'),
(23, 27, '12343', 0, '2024-05-17 21:36:45', '2024-05-18 19:13:12'),
(24, 27, 'asd12343', 0, '2024-05-17 21:36:45', '2024-05-18 19:13:12'),
(25, 28, 'asd53', 0, '2024-05-17 21:36:45', '2024-05-18 19:13:12'),
(26, 28, '12353', 0, '2024-05-17 21:36:45', '2024-05-18 19:13:12'),
(27, 28, 'asd3153', 0, '2024-05-17 21:36:45', '2024-05-18 19:13:12'),
(28, 28, '123asd53', 0, '2024-05-17 21:36:45', '2024-05-18 19:13:12'),
(29, 29, 'Answer A', 0, '2024-05-17 21:37:16', '2024-05-17 21:37:16'),
(30, 29, 'Answer A', 0, '2024-05-17 21:37:16', '2024-05-17 21:37:16'),
(31, 29, 'Answer A', 0, '2024-05-17 21:37:16', '2024-05-17 21:37:16'),
(32, 29, 'Answer A', 0, '2024-05-17 21:37:16', '2024-05-17 21:37:16'),
(33, 30, 'Answer A', 0, '2024-05-19 14:11:36', '2024-05-19 14:11:36'),
(34, 30, 'Answer A', 0, '2024-05-19 14:11:36', '2024-05-19 14:11:36'),
(35, 30, 'Answer A', 0, '2024-05-19 14:11:36', '2024-05-19 14:11:36'),
(36, 30, 'Answer A', 0, '2024-05-19 14:11:36', '2024-05-19 14:11:36'),
(37, 31, 'Answer A', 0, '2024-05-19 14:11:36', '2024-05-19 14:11:36'),
(38, 31, 'Answer A', 0, '2024-05-19 14:11:36', '2024-05-19 14:11:36'),
(39, 31, 'Answer A', 0, '2024-05-19 14:11:36', '2024-05-19 14:11:36'),
(40, 31, 'Answer A', 0, '2024-05-19 14:11:36', '2024-05-19 14:11:36');

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
-- Table structure for table `pdf_files`
--

CREATE TABLE `pdf_files` (
  `id` bigint UNSIGNED NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
`category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pdf_files`
--

INSERT INTO `pdf_files` (`id`, `file_path`, `file_name`, `chapter`, `course`, `created_at`, `updated_at`) VALUES
(9, '66490d317d5c6_Articles.pdf', 'Articles.pdf', 'Chapter 99', 'Math', '2024-05-18 20:18:57', '2024-05-18 20:18:57'),
(10, '6649c22b74b18_Articles.pdf', 'Articles.pdf', '1', 'Management of Information Security', '2024-05-19 09:11:07', '2024-05-19 09:11:07'),
(11, '6649c2336e401_Articles.pdf', 'Articles.pdf', '1', 'Management of Information Security', '2024-05-19 09:11:15', '2024-05-19 09:11:15'),
(12, '6649c2403e77f_Articles.pdf', 'Articles.pdf', '1', 'Risk Management', '2024-05-19 09:11:28', '2024-05-19 09:11:28'),
(13, '6649c25336063_Articles.pdf', 'Articles.pdf', '1', 'Business Continuity & Disaster Recovery', '2024-05-19 09:11:47', '2024-05-19 09:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint UNSIGNED NOT NULL,
  `quiz_id` bigint UNSIGNED NOT NULL,
  `question_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marks` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `correct_option_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quiz_id`, `question_text`, `correct_answer`, `marks`, `created_at`, `updated_at`, `correct_option_id`) VALUES
(22, 15, 'What is Secrety3', 'C', 10, '2024-05-17 11:22:00', '2024-05-18 19:14:47', NULL),
(23, 15, 'OKSD ?3', 'C', 10, '2024-05-17 11:22:00', '2024-05-18 19:14:47', NULL),
(24, 15, 'KAJLKS?3', 'C', 10, '2024-05-17 11:22:00', '2024-05-18 19:14:47', NULL),
(25, 16, 'What is Risk23?', 'D', 9, '2024-05-17 21:36:45', '2024-05-18 19:12:17', NULL),
(26, 16, 'What is Journey 33', 'D', 15, '2024-05-17 21:36:45', '2024-05-18 19:12:44', NULL),
(27, 16, 'New Risk43', 'D', 15, '2024-05-17 21:36:45', '2024-05-18 19:12:44', NULL),
(28, 16, 'How good is risk53', 'A', 15, '2024-05-17 21:36:45', '2024-05-18 19:12:44', NULL),
(29, 17, 'Control', 'B', 15, '2024-05-17 21:37:16', '2024-05-17 21:37:16', NULL),
(30, 18, 'What is Quiz?', 'A', 10, '2024-05-19 14:11:36', '2024-05-19 14:11:36', NULL),
(31, 18, 'Important of Quiz', 'C', 15, '2024-05-19 14:11:36', '2024-05-19 14:11:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED DEFAULT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passing_score` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `course_id`, `course_name`, `title`, `description`, `passing_score`, `created_at`, `updated_at`, `status`) VALUES
(15, NULL, 'Business Continuity & Disaster Recovery', 'What is Seaads 3', 'HASKJHAJSKN ASBJKAHS MA<NSasd asdasd3', 50, '2024-05-17 11:21:21', '2024-05-19 14:11:47', 'disabled'),
(16, NULL, 'Risk Management', 'What is Risk 22234', 'kaksldjlkasjd asdjas asdkjhasd 22234', 40, '2024-05-17 21:35:43', '2024-05-18 19:13:12', 'enabled'),
(17, NULL, 'Control & Audit of Information System', 'Control Meaning', 'adasdasd asdas zxczxcasd 123', 35, '2024-05-17 21:37:03', '2024-05-17 21:38:39', 'disabled'),
(18, NULL, 'Business Continuity & Disaster Recovery', 'Quiz New 2', 'JLSDJalsjdas  asdasd', 50, '2024-05-19 14:11:00', '2024-05-19 14:11:00', 'enabled');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_user`
--

CREATE TABLE `quiz_user` (
  `user_id` bigint UNSIGNED NOT NULL,
  `quiz_id` bigint UNSIGNED NOT NULL,
  `score` double DEFAULT NULL,
  `is_passed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quiz_user`
--

INSERT INTO `quiz_user` (`user_id`, `quiz_id`, `score`, `is_passed`, `created_at`, `updated_at`) VALUES
(4, 15, 0, 0, NULL, NULL),
(4, 15, 0, 0, NULL, NULL),
(4, 15, 0, 0, NULL, NULL),
(4, 15, 0, 0, NULL, NULL),
(4, 15, 0, 0, NULL, NULL),
(1, 15, 67, 1, NULL, NULL),
(1, 15, 0, 0, NULL, NULL),
(1, 15, 66.67, 1, NULL, NULL),
(1, 15, 66.67, 1, '2024-05-17 21:48:48', NULL),
(1, 16, 44.44, 1, '2024-05-18 18:59:25', '2024-05-18 18:59:25'),
(1, 16, 44.44, 1, '2024-05-18 19:01:08', '2024-05-18 19:01:08'),
(4, 18, 40, 0, '2024-05-19 14:12:23', '2024-05-19 14:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `last_login_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Admin', NULL, 'admin@gmail.com', NULL, '2024-05-20 01:44:23', '$2y$10$ATVjBwA5.QYbXuV8GhKsruCR0l9DdAQ33.qeJEDuRjYchMeTeN8Ty', NULL, NULL, '2024-05-20 01:44:23', 'admin'),
(2, 'nini', NULL, 'nini@gmail.com', NULL, NULL, '$2y$10$izg3GWGo2mddVHURaCe13u7NXZ8rwIxP4aT16CRk76Asltq0hK70u', NULL, NULL, '2024-05-07 05:51:10', 'user'),
(3, 'Nizam Amin', NULL, 'nizam@gmail.com', NULL, NULL, '$2y$10$374XAAAVugB2duI3H1hq7.vKx501zQDrI1QqS2ob3uFnh4MBEHdmS', NULL, '2024-05-12 07:51:31', '2024-05-12 07:51:31', 'user'),
(4, 'Nizam Amin', NULL, 'nizam2@gmail.com', NULL, '2024-05-20 02:01:32', '$2y$10$6fJSz9Wp8R5Yx9C.XYFjqejOsybcGRpks24Xe30Pp.JNsrwYd7zIi', NULL, '2024-05-12 07:52:39', '2024-05-20 02:01:32', 'user'),
(5, 'Nizam Amin', NULL, 'nizam3@gmail.com', NULL, NULL, '$2y$10$jFoZXQeP5gWWyMa2CtDs1OyC05rgi3A/tbQr9YA916nqdjakb1XvK', NULL, '2024-05-12 08:36:28', '2024-05-12 08:36:28', 'user'),
(6, 'sayadev', NULL, 'sayadev@gmail.com', NULL, '2024-05-14 15:54:56', '$2y$10$3T39ZceONUJCZOckc42b6.eRVYe/F0nNOYB82hvmfCeFrNbFAGDMW', NULL, '2024-05-14 15:53:54', '2024-05-14 15:54:56', 'user'),
(7, 'sayadev2', NULL, 'sayadev2@gmail.com', NULL, '2024-05-14 16:02:06', '$2y$10$CjmKeT4D/dKtzlt9wmwYGe6iwXfplQkD.e/p69ZgfEFSArGpjONHm', NULL, '2024-05-14 16:01:53', '2024-05-14 16:02:06', 'user'),
(8, 'Sufian Kolom', NULL, 'pkolom@gmail.com', NULL, '2024-05-19 14:08:50', '$2y$10$HMJqJP4H5Z8F9N9aekc0JeiZMmlEaRZ2lCsi3kwmuxvA7UrcKBA5.', NULL, '2024-05-19 14:08:36', '2024-05-19 14:08:50', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `browser_histories`
--
ALTER TABLE `browser_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `browser_histories_user_id_foreign` (`user_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_question_id_foreign` (`question_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pdf_files`
--
ALTER TABLE `pdf_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_quiz_id_foreign` (`quiz_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_user`
--
ALTER TABLE `quiz_user`
  ADD KEY `quiz_user_user_id_foreign` (`user_id`),
  ADD KEY `quiz_user_quiz_id_foreign` (`quiz_id`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `browser_histories`
--
ALTER TABLE `browser_histories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pdf_files`
--
ALTER TABLE `pdf_files`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `browser_histories`
--
ALTER TABLE `browser_histories`
  ADD CONSTRAINT `browser_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quiz_user`
--
ALTER TABLE `quiz_user`
  ADD CONSTRAINT `quiz_user_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `quiz_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
