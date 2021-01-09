-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 06:03 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_reading_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'John', 'Doe', 'admin@admin.com', NULL, '$2y$10$9Byo02hPNA/w64V6lMCYu.eAcBmP/ezoSh4Hc6GFdjDRqgjI0FpRq', 'knbRC0php5usUK8i7zJQmWenLTCEoFRprVv6S4eEkei9qU1SlYFJ3NbbD6LK', '2020-12-20 08:56:59', '2020-12-20 08:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `news_id`, `created_at`, `updated_at`, `text`) VALUES
(1, 5, 12, NULL, NULL, 'adssadsadasd'),
(2, 5, 12, NULL, '2021-01-08 14:51:40', 'hi there');

-- --------------------------------------------------------

--
-- Table structure for table `content_layouts`
--

CREATE TABLE `content_layouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_category_id` bigint(20) UNSIGNED NOT NULL,
  `layout_no` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_layouts`
--

INSERT INTO `content_layouts` (`id`, `news_category_id`, `layout_no`, `position`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 2, NULL, NULL),
(3, 2, 2, 2, NULL, '2020-12-13 08:53:13'),
(4, 4, 3, 3, NULL, NULL),
(5, 3, 1, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `created_at`, `updated_at`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`) VALUES
(2, '2021-01-05 11:15:36', '2021-01-05 11:15:36', 'Bappi', 'Saha', 'admin@admin.com', NULL, '$2y$10$iUkfEgyrcXbZLYEB4pOkL.c62K5FSy6QMZn3XsVsXI8ab1nFqy1ra', 'JjxeTSc68gJ9gXPHa3Fp03pkvJTkCHvTaCRpKFIZEF6V4LelYArq3eUrTn9L');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metas`
--

CREATE TABLE `metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metas`
--

INSERT INTO `metas` (`id`, `title`, `author`, `logo`, `favicon`, `description`, `keyword`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'ORS (Online Reading System)', 'Akash Khan', '\\assets\\img\\115fd3be4d08f42.png', '\\assets\\img\\115fd3beab0551b.png', 'Competently conceptualize go forward testing procedures and B2B expertise. Phosfluorescently cultivates principle-centered methods. of empowerment through fully researched.', 'news, newspaper, online reading system, ors', '© Copyright Daffodil Software Ltd.', '2020-12-11 09:04:10', '2020-12-18 07:27:11');

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(7, '2016_02_15_204651_create_categories_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(17, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(18, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(19, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(20, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(21, '2017_08_05_000000_add_group_to_settings_table', 1),
(22, '2017_11_26_013050_add_user_role_relationship', 1),
(23, '2017_11_26_015000_create_user_roles_table', 1),
(24, '2018_03_11_000000_add_user_settings', 1),
(25, '2018_03_14_000000_add_details_to_data_types_table', 1),
(26, '2018_03_16_000000_make_settings_value_nullable', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2020_11_28_104242_create_members_table', 1),
(29, '2020_12_04_170632_create_admins_table', 1),
(30, '2020_12_06_153409_create_news_categories_table', 1),
(31, '2020_12_07_171840_create_news_table', 1),
(32, '2020_12_08_070011_create_tags_table', 1),
(33, '2020_12_09_101524_create_news_news_category', 1),
(34, '2020_12_09_102025_create_news_tag', 1),
(35, '2020_12_10_094141_create_content_layouts_table', 2),
(36, '2020_12_10_161314_create_social_media_table', 3),
(37, '2020_12_10_181850_add_name_column', 4),
(38, '2020_12_11_112323_create_metas_table', 5),
(39, '2020_12_13_160757_add_views_count_to_news', 6),
(40, '2020_12_18_091142_create_menus_table', 7),
(41, '2020_12_19_115114_add_detail_to_members', 8),
(42, '2021_01_08_162025_add_to_users', 9),
(43, '2021_01_08_173801_drop_from_users', 10),
(44, '2021_01_08_195517_create_comments_table', 11),
(45, '2021_01_08_203722_add_to_comment', 12),
(46, '2021_01_08_205317_drop_from_comments', 13);

-- --------------------------------------------------------

--
-- Table structure for table `nav_menus`
--

CREATE TABLE `nav_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_category_id` bigint(20) UNSIGNED NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nav_menus`
--

INSERT INTO `nav_menus` (`id`, `name`, `news_category_id`, `position`, `created_at`, `updated_at`) VALUES
(2, 'Business', 1, 1, NULL, NULL),
(3, 'Sports', 2, 2, NULL, NULL),
(4, 'Lifestyle', 3, 3, NULL, NULL),
(5, 'Country', 4, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `quote` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `image`, `author`, `short_description`, `body`, `quote`, `created_at`, `updated_at`, `views_count`) VALUES
(1, 'Airbnb launches photo-centric app for iPads and Android tablets.', 'airbnb-launches-photo-centric-app-for-ipads-and-android-tablets', '\\news\\images\\115fd4c37b19d4e.jpg', 'Eric joan', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.', '<div class=\"entity_content\">\r\n        <p>\r\n            But I must explain to you how all this mistaken idea of denouncing pleasure and praising\r\n            pain was born and I will give you a complete account of the system, and expound the\r\n            actual teachings of the great explorer of the truth, the master-builder of human\r\n            happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,\r\n            but because those who do not know how to pursue pleasure rationally encounter\r\n            consequences that are extremely painful.\r\n        </p>\r\n\r\n        <p>\r\n            Nor again is there anyone who loves or pursues or desires to obtain pain of itself,\r\n            because it is pain, but because occasionally circumstances occur in which toil and pain\r\n            can procure him some great pleasure. To take a trivial example, which of us ever\r\n            undertakes laborious physical exercise, except to obtain some advantage from it?</p><p>But who has any right to find fault with a man who chooses to enjoy a pleasure that has\r\n            no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\r\n            On the other hand, we denounce with righteous indignation and dislike men who are so\r\n            beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,\r\n            that they cannot foresee.Nor again is there anyone who loves or pursues or desires to\r\n            obtain pain of itself, because it is pain, but because occasionally circumstances occur\r\n            in which toil and pain can procure him some great pleasure. To take a trivial example,\r\n            which of us ever undertakes laborious physical exercise, except to obtain some advantage\r\n            from it? Nor again is there anyone who loves or pursues or desires to obtain pain of\r\n            itself, because it is pain, but because occasionally circumstances occur in which toil\r\n            and pain can procure him some great pleasure. To take a trivial example, which of us\r\n            ever\r\n        \r\n\r\n        </p><p>\r\n            But I must explain to you how all this mistaken idea of denouncing pleasure and praising\r\n            pain was born and I will give you a complete account of the system, and expound the\r\n            actual teachings of the great explorer of the truth, the master-builder of human\r\n            happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,\r\n            but because those who do not know how to pursue pleasure rationally encounter\r\n            consequences that are extremely painful.\r\n        </p>\r\n    </div>', 'But I must explain to you how all this mistaken idea of denouncing pleasure', '2020-12-12 07:19:55', '2020-12-12 07:19:55', 0),
(2, 'Technology market see the new Android tablets', 'technology-market-see-the-new-android-tablets', '\\news\\images\\115fd4d7ff8e61d.jpg', 'Eric joan', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.', '<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate\r\n                    B2C users after installed base benefits. Dramatically visualize customer directed convergence\r\n                    without revolutionary ROI.\r\n                Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate\r\n                    B2C users after installed base benefits. Dramatically visualize customer directed convergence\r\n                    without revolutionary ROI.\r\n                Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate\r\n                    B2C users after installed base benefits. Dramatically visualize customer directed convergence\r\n                    without revolutionary ROI.\r\n                Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate\r\n                    B2C users after installed base benefits. Dramatically visualize customer directed convergence\r\n                    without revolutionary ROI.\r\n                Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate\r\n                    B2C users after installed base benefits. Dramatically visualize customer directed convergence\r\n                    without revolutionary ROI.\r\n                Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate\r\n                    B2C users after installed base benefits. Dramatically visualize customer directed convergence\r\n                    without revolutionary ROI.\r\n                Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate\r\n                    B2C users after installed base benefits. Dramatically visualize customer directed convergence\r\n                    without revolutionary ROI.\r\n                Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate\r\n                    B2C users after installed base benefits. Dramatically visualize customer directed convergence\r\n                    without revolutionary ROI.\r\n                Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate\r\n                    B2C users after installed base benefits. Dramatically visualize customer directed convergence\r\n                    without revolutionary ROI.\r\n                Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate\r\n                    B2C users after installed base benefits. Dramatically visualize customer directed convergence\r\n                    without revolutionary ROI.\r\n                Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate\r\n                    B2C users after installed base benefits. Dramatically visualize customer directed convergence\r\n                    without revolutionary ROI.\r\n                Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate\r\n                    B2C users after installed base benefits. Dramatically visualize customer directed convergence\r\n                    without revolutionary ROI.\r\n                Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate\r\n                    B2C users after installed base benefits. Dramatically visualize customer directed convergence\r\n                    without revolutionary ROI.\r\n                Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate\r\n                    B2C users after installed base benefits. Dramatically visualize customer directed convergence\r\n                    without revolutionary ROI</p><p><iframe src=\"//www.youtube.com/embed/lImFHbmnon4\" class=\"note-video-clip\" width=\"640\" height=\"360\" frameborder=\"0\"></iframe><br></p><p><br></p><p>\r\n                </p>', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C', '2020-12-12 08:47:27', '2020-12-12 08:47:27', 0),
(3, 'Govt cannot withdraw or recommend for withdrawal of graft cases, HC rules Sinha discovered Pradeep’s links to drug trade', 'govt-cannot-withdraw-or-recommend-for-withdrawal-of-graft-cases--hc-rules-sinha-discovered-pradeep-s-links-to-drug-trade', '\\news\\images\\115fd61e24c1f00.jpg', 'John DOe', 'The High Court has ruled that the government cannot withdraw any corruption case filed or moved by the Anti-Corruption Commission (ACC) and cannot recommend for withdrawal of such cases from the trial proceedings either.', '<p>The ACC is an independent body under the Anti-Corruption Commission \r\nAct, 2004, and therefore, any case filed and moved following the \r\napproval from the commission (ACC) cannot be withdrawn and \r\nrecommendations for case withdrawal by the government will not be \r\nentertained, the HC observed.</p>\r\n<p>The HC bench of Justice M Enayetur Rahim and Justice Md Mostafizur \r\nRahman came up with the observation while delivering a short verdict on \r\nDecember 10 on a revision petition filed by the ACC involving this \r\nissue.</p>\r\n<p>The government has reportedly recommended for withdrawal of more than\r\n 7,000 criminal cases --including many corruption cases filed during the\r\n regimes of the BNP-led alliance government and the military backed \r\ncaretaker government.</p>\r\n<p>ACC\'s lawyer AKM Fazlul Hoque today told The Daily Star that the HC \r\nbench has come up with the observation endorsing his arguments that the \r\ntrial proceedings of the ACC\'s cases are run by the courts under the \r\nCriminal Law Amendment Act, 1958.</p><div class=\"mobile-adv-in-body pull-left pad-left-right-big gero-left pad-bottom-small\"><div id=\"dfp-ad-news_details_after_2nd_paragraph-wrapper\" class=\"dfp-tag-wrapper\">\r\n<div id=\"dfp-ad-news_details_after_2nd_paragraph\" class=\"dfp-tag-wrapper\" data-google-query-id=\"CJqqwNmOy-0CFREdcgodylIN4g\">\r\n\r\n</div>\r\n</div></div>\r\n<p>Under section 10(4) of this act, the cases of the ACC can be \r\nwithdrawn by the trial courts concerned only following the written \r\napproval from the commission (ACC).</p>\r\n<p>The government cannot interfere in the running of trials of ACC cases, he said.</p>\r\n<p>He said the divisional special judge\'s court in Sunamganj on January \r\n26, 2012 had approved an application from the government to withdraw a \r\ncorruption case filed against Md Abdul Kashem, chairman of Fourth \r\nBorodal Uttar Union under Taherpur upazila in Sunamganj, and two others.</p>\r\n<p>The Sunamganj court also exempted the accused from the case \r\nproceedings. The case was filed with Taherpur Police Station on April 5,\r\n 2007 against the accused, on charges of embezzling 17 bundles of \r\ngovernment relief tin worth Tk 1.36 lakh.</p>\r\n<p>Earlier on February 11, 2011 the home ministry recommended for withdrawal of the case.</p>\r\n<p>The ACC filed the revision petition with the HC on November 19, 2014 challenging the Sunamganj court order.</p>\r\n<p>Following the revision petition, a HC bench led by Justice M Enayetur\r\n Rahim issued a rule asking the state and the accused persons to explain\r\n why the home ministry\'s recommendation for withdrawal of the corruption\r\n case should not be declared illegal.</p>\r\n<p>The bench also ordered the three accused to surrender to the trial \r\ncourt concerned in four weeks in connection with the corruption case. \r\nThe accused surrendered to the lower court concerned in line with the HC\r\n directive.</p>\r\n<p>The accused persons, however, were granted bail in the case.</p>\r\n<p>After holding hearing on the pending rule, the HC on December 10 delivered the short verdict.</p>\r\n<p>The details of the HC observation will be known when the full text of\r\n the HC verdict is released, lawyer Fazlul Hoque said, adding that the \r\ngovernment did not place any argument on the rule.</p>', 'The High Court has ruled that the government', '2020-12-13 07:59:00', '2020-12-13 08:00:20', 0),
(4, 'Bangladesh an inspiration to South Asian peers', 'bangladesh-an-inspiration-to-south-asian-peers', '\\news\\images\\115fd620fb2e2aa.jpg', 'John Doe', 'Bangladesh’s incredible economic rise over the years has become a source of inspiration for other south Asian nations as the country has already shown its resilience even amid the ongoing Covid-19 pandemic, a time when the global economy is struggling to survive, said Binod Chaudhary, founder of CG Corp Global.', '<p>Bangladesh’s incredible economic rise over the years has become a source\r\n of inspiration for other south Asian nations as the country has already\r\n shown its resilience even amid the ongoing Covid-19 pandemic, a time \r\nwhen the global economy is struggling to survive, said Binod Chaudhary, \r\nfounder of CG Corp Global.Bangladesh’s incredible economic rise over the years has become a source\r\n of inspiration for other south Asian nations as the country has already\r\n shown its resilience even amid the ongoing Covid-19 pandemic, a time \r\nwhen the global economy is struggling to survive, said Binod Chaudhary, \r\nfounder of CG Corp Global.</p>', NULL, '2020-12-13 08:11:07', '2020-12-13 08:11:07', 0),
(5, 'Airports being used to smuggle out yaba', 'airports-being-used-to-smuggle-out-yaba', '\\news\\images\\115fdc5d2ca4726.jpg', 'John Doe', 'Drug traffickers smuggled four to five stashes of yaba pills in luggages or shipping boxes out of the country through the airports every month in the last two years.', '<p>Drug traffickers smuggled four to five stashes of yaba pills in luggages\r\n or shipping boxes out of the country through the airports every month \r\nin the last two years.Drug traffickers smuggled four to five stashes of yaba pills in luggages\r\n or shipping boxes out of the country through the airports every month \r\nin the last two years.Drug traffickers smuggled four to five stashes of yaba pills in luggages\r\n or shipping boxes out of the country through the airports every month \r\nin the last two years.Drug traffickers smuggled four to five stashes of yaba pills in luggages\r\n or shipping boxes out of the country through the airports every month \r\nin the last two years.Drug traffickers smuggled four to five stashes of yaba pills in luggages\r\n or shipping boxes out of the country through the airports every month \r\nin the last two years.Drug traffickers smuggled four to five stashes of yaba pills in luggages\r\n or shipping boxes out of the country through the airports every month \r\nin the last two years.Drug traffickers smuggled four to five stashes of yaba pills in luggages\r\n or shipping boxes out of the country through the airports every month \r\nin the last two years.</p>', 'Drug traffickers smuggled four to five stashes of yaba pills in luggages', '2020-12-18 01:41:32', '2020-12-18 01:41:32', 0),
(6, 'Bangladeshis at Big Tech: What’s it like to work at Google?', 'bangladeshis-at-big-tech--what-s-it-like-to-work-at-google-', '\\news\\images\\115fdc5d67a0176.jpg', 'John Doe', 'The tech titan Google, providing various kinds of online-based services to the masses for decades, is one of the most well...', '<p>The tech titan Google, providing various kinds of online-based services to the masses for decades, is one of the most well...The tech titan Google, providing various kinds of online-based services to the masses for decades, is one of the most well...The tech titan Google, providing various kinds of online-based services to the masses for decades, is one of the most well...The tech titan Google, providing various kinds of online-based services to the masses for decades, is one of the most well...The tech titan Google, providing various kinds of online-based services to the masses for decades, is one of the most well...The tech titan Google, providing various kinds of online-based services to the masses for decades, is one of the most well...The tech titan Google, providing various kinds of online-based services to the masses for decades, is one of the most well...The tech titan Google, providing various kinds of online-based services to the masses for decades, is one of the most well...The tech titan Google, providing various kinds of online-based services to the masses for decades, is one of the most well...The tech titan Google, providing various kinds of online-based services to the masses for decades, is one of the most well...</p>', 'The tech titan Google, providing various kinds of online-based services to', '2020-12-18 01:42:31', '2020-12-18 01:42:31', 0),
(7, 'DU Film Society’s ‘Smritir Bijoy’ shines a light on the true spirit of the Liberation War', 'du-film-society-s--smritir-bijoy--shines-a-light-on-the-true-spirit-of-the-liberation-war', '\\news\\images\\115fdc5d9e131a4.jpg', 'John Doe', 'On the occasion of the Martyred Intellectuals Day and the Victory Day of Bangladesh, Dhaka University Film Society (DUFS)...', '<p>On the occasion of the Martyred Intellectuals Day and the Victory Day of Bangladesh, Dhaka University Film Society (DUFS)...On the occasion of the Martyred Intellectuals Day and the Victory Day of Bangladesh, Dhaka University Film Society (DUFS)...On the occasion of the Martyred Intellectuals Day and the Victory Day of Bangladesh, Dhaka University Film Society (DUFS)...On the occasion of the Martyred Intellectuals Day and the Victory Day of Bangladesh, Dhaka University Film Society (DUFS)...On the occasion of the Martyred Intellectuals Day and the Victory Day of Bangladesh, Dhaka University Film Society (DUFS)...On the occasion of the Martyred Intellectuals Day and the Victory Day of Bangladesh, Dhaka University Film Society (DUFS)...On the occasion of the Martyred Intellectuals Day and the Victory Day of Bangladesh, Dhaka University Film Society (DUFS)...On the occasion of the Martyred Intellectuals Day and the Victory Day of Bangladesh, Dhaka University Film Society (DUFS)...On the occasion of the Martyred Intellectuals Day and the Victory Day of Bangladesh, Dhaka University Film Society (DUFS)...</p>', 'On the occasion of the Martyred Intellectuals Day and the Victory Day of Bangladesh,', '2020-12-18 01:43:26', '2020-12-18 01:43:26', 0),
(8, 'India hit back after folding against Australia', 'india-hit-back-after-folding-against-australia', '\\news\\images\\115fdc5dcee9536.jpg', 'John Doe', 'India snared both of Australia\'s openers after falling cheaply in their first innings as six wickets tumbled in day...', '<p>India snared both of Australia\'s openers after falling cheaply in their first innings as six wickets tumbled in day...India snared both of Australia\'s openers after falling cheaply in their first innings as six wickets tumbled in day...India snared both of Australia\'s openers after falling cheaply in their first innings as six wickets tumbled in day...India snared both of Australia\'s openers after falling cheaply in their first innings as six wickets tumbled in day...India snared both of Australia\'s openers after falling cheaply in their first innings as six wickets tumbled in day...India snared both of Australia\'s openers after falling cheaply in their first innings as six wickets tumbled in day...India snared both of Australia\'s openers after falling cheaply in their first innings as six wickets tumbled in day...India snared both of Australia\'s openers after falling cheaply in their first innings as six wickets tumbled in day...India snared both of Australia\'s openers after falling cheaply in their first innings as six wickets tumbled in day...India snared both of Australia\'s openers after falling cheaply in their first innings as six wickets tumbled in day...India snared both of Australia\'s openers after falling cheaply in their first innings as six wickets tumbled in day...</p>', NULL, '2020-12-18 01:44:14', '2020-12-18 01:44:14', 0),
(9, 'Column by Mahfuz Anam: ‘Democracy Day’ came and went, nobody noticed', 'column-by-mahfuz-anam---democracy-day--came-and-went--nobody-noticed', '\\news\\images\\115fdc5e0dd4b53.jpg', 'John Doe', 'What was once a startling thunderclap passed off as a whimper, what was welcomed by millions and celebrated as the rebirth...', '<p>What was once a startling thunderclap passed off as a whimper, what was welcomed by millions and celebrated as the rebirth...What was once a startling thunderclap passed off as a whimper, what was welcomed by millions and celebrated as the rebirth...What was once a startling thunderclap passed off as a whimper, what was welcomed by millions and celebrated as the rebirth...What was once a startling thunderclap passed off as a whimper, what was welcomed by millions and celebrated as the rebirth...</p>', 'What was once a startling thunderclap passed off', '2020-12-18 01:45:17', '2020-12-18 01:45:17', 0),
(10, 'Wearing someone else’s face: Hyper-realistic masks to go on sale in Japan', 'wearing-someone-else-s-face--hyper-realistic-masks-to-go-on-sale-in-japan', '\\news\\images\\115fdc5e3669d35.jpg', 'Mask', 'A year into the coronavirus epidemic, a Japanese retailer has come up with a new take on the theme of facial camouflage -...', '<p>A year into the coronavirus epidemic, a Japanese retailer has come up with a new take on the theme of facial camouflage -...A year into the coronavirus epidemic, a Japanese retailer has come up with a new take on the theme of facial camouflage -...A year into the coronavirus epidemic, a Japanese retailer has come up with a new take on the theme of facial camouflage -...A year into the coronavirus epidemic, a Japanese retailer has come up with a new take on the theme of facial camouflage -...A year into the coronavirus epidemic, a Japanese retailer has come up with a new take on the theme of facial camouflage -...A year into the coronavirus epidemic, a Japanese retailer has come up with a new take on the theme of facial camouflage -...A year into the coronavirus epidemic, a Japanese retailer has come up with a new take on the theme of facial camouflage -...A year into the coronavirus epidemic, a Japanese retailer has come up with a new take on the theme of facial camouflage -...A year into the coronavirus epidemic, a Japanese retailer has come up with a new take on the theme of facial camouflage -...</p>', NULL, '2020-12-18 01:45:58', '2020-12-18 01:45:58', 0),
(11, 'Stimulus eludes 42pc apparel workers', 'stimulus-eludes-42pc-apparel-workers', '\\news\\images\\115fdc5e76ce234.jpg', 'John Doe', 'More than 42 per cent garment workers did not benefit from the stimulus package despite being one of the poorest segments of the population and hardest hit by the coronavirus pandemic, according to a new survey.', '<p>More than 42 per cent garment workers did not benefit from the stimulus \r\npackage despite being one of the poorest segments of the population and \r\nhardest hit by the coronavirus pandemic, according to a new survey.\r\nMore than 42 per cent garment workers did not benefit from the stimulus \r\npackage despite being one of the poorest segments of the population and \r\nhardest hit by the coronavirus pandemic, according to a new survey.\r\nMore than 42 per cent garment workers did not benefit from the stimulus \r\npackage despite being one of the poorest segments of the population and \r\nhardest hit by the coronavirus pandemic, according to a new survey.\r\nMore than 42 per cent garment workers did not benefit from the stimulus \r\npackage despite being one of the poorest segments of the population and \r\nhardest hit by the coronavirus pandemic, according to a new survey.\r\nMore than 42 per cent garment workers did not benefit from the stimulus \r\npackage despite being one of the poorest segments of the population and \r\nhardest hit by the coronavirus pandemic, according to a new survey.\r\nMore than 42 per cent garment workers did not benefit from the stimulus \r\npackage despite being one of the poorest segments of the population and \r\nhardest hit by the coronavirus pandemic, according to a new survey.\r\nMore than 42 per cent garment workers did not benefit from the stimulus \r\npackage despite being one of the poorest segments of the population and \r\nhardest hit by the coronavirus pandemic, according to a new survey.\r\nMore than 42 per cent garment workers did not benefit from the stimulus \r\npackage despite being one of the poorest segments of the population and \r\nhardest hit by the coronavirus pandemic, according to a new survey.\r\nMore than 42 per cent garment workers did not benefit from the stimulus \r\npackage despite being one of the poorest segments of the population and \r\nhardest hit by the coronavirus pandemic, according to a new survey.\r\nMore than 42 per cent garment workers did not benefit from the stimulus \r\npackage despite being one of the poorest segments of the population and \r\nhardest hit by the coronavirus pandemic, according to a new survey.\r\nMore than 42 per cent garment workers did not benefit from the stimulus \r\npackage despite being one of the poorest segments of the population and \r\nhardest hit by the coronavirus pandemic, according to a new survey.\r\n</p>', NULL, '2020-12-18 01:47:02', '2020-12-18 01:47:02', 0),
(12, 'India pledges vaccine support hi', 'india-pledges-vaccine-support-hi', '\\news\\images\\115fdc5ed446370.jpg', 'John Doe', 'India promised to promptly and effectively deliver to Bangladesh...', '<p>India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...India promised to promptly and effectively deliver to Bangladesh...</p>', 'India promised to promptly and effectively deliver to Bangladesh', '2020-12-18 01:48:36', '2021-01-05 08:27:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', 'mobile', '2020-12-10 01:49:14', '2020-12-10 01:49:14'),
(2, 'Tablet', 'tablet', '2020-12-10 01:49:14', '2020-12-10 01:49:14'),
(3, 'Hot News', 'hot-news', '2020-12-10 01:49:14', '2020-12-10 01:49:14'),
(4, 'Top Viewed', 'top-viewed', '2020-12-11 05:33:28', '2020-12-11 05:33:28');

-- --------------------------------------------------------

--
-- Table structure for table `news_news_category`
--

CREATE TABLE `news_news_category` (
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `news_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_news_category`
--

INSERT INTO `news_news_category` (`news_id`, `news_category_id`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, NULL),
(1, 4, NULL, NULL),
(2, 1, '2020-12-12 08:47:27', '2020-12-12 08:47:27'),
(2, 2, '2020-12-12 08:47:27', '2020-12-12 08:47:27'),
(2, 4, '2020-12-12 08:47:27', '2020-12-12 08:47:27'),
(1, 1, '2020-12-13 07:35:12', '2020-12-13 07:35:12'),
(1, 2, '2020-12-13 07:35:12', '2020-12-13 07:35:12'),
(2, 3, '2020-12-13 07:35:33', '2020-12-13 07:35:33'),
(3, 1, '2020-12-13 07:59:00', '2020-12-13 07:59:00'),
(3, 2, '2020-12-13 07:59:00', '2020-12-13 07:59:00'),
(3, 3, '2020-12-13 07:59:00', '2020-12-13 07:59:00'),
(3, 4, '2020-12-13 07:59:00', '2020-12-13 07:59:00'),
(4, 1, '2020-12-13 08:11:07', '2020-12-13 08:11:07'),
(4, 2, '2020-12-13 08:11:07', '2020-12-13 08:11:07'),
(4, 3, '2020-12-13 08:11:07', '2020-12-13 08:11:07'),
(4, 4, '2020-12-13 08:11:07', '2020-12-13 08:11:07'),
(5, 1, '2020-12-18 01:41:32', '2020-12-18 01:41:32'),
(5, 2, '2020-12-18 01:41:32', '2020-12-18 01:41:32'),
(5, 3, '2020-12-18 01:41:32', '2020-12-18 01:41:32'),
(5, 4, '2020-12-18 01:41:32', '2020-12-18 01:41:32'),
(6, 1, '2020-12-18 01:42:31', '2020-12-18 01:42:31'),
(6, 2, '2020-12-18 01:42:31', '2020-12-18 01:42:31'),
(6, 3, '2020-12-18 01:42:31', '2020-12-18 01:42:31'),
(6, 4, '2020-12-18 01:42:31', '2020-12-18 01:42:31'),
(7, 1, '2020-12-18 01:43:26', '2020-12-18 01:43:26'),
(7, 2, '2020-12-18 01:43:26', '2020-12-18 01:43:26'),
(7, 3, '2020-12-18 01:43:26', '2020-12-18 01:43:26'),
(7, 4, '2020-12-18 01:43:26', '2020-12-18 01:43:26'),
(8, 1, '2020-12-18 01:44:14', '2020-12-18 01:44:14'),
(8, 2, '2020-12-18 01:44:14', '2020-12-18 01:44:14'),
(8, 3, '2020-12-18 01:44:14', '2020-12-18 01:44:14'),
(8, 4, '2020-12-18 01:44:14', '2020-12-18 01:44:14'),
(9, 1, '2020-12-18 01:45:17', '2020-12-18 01:45:17'),
(9, 2, '2020-12-18 01:45:17', '2020-12-18 01:45:17'),
(9, 3, '2020-12-18 01:45:17', '2020-12-18 01:45:17'),
(9, 4, '2020-12-18 01:45:17', '2020-12-18 01:45:17'),
(10, 1, '2020-12-18 01:45:58', '2020-12-18 01:45:58'),
(10, 2, '2020-12-18 01:45:58', '2020-12-18 01:45:58'),
(10, 3, '2020-12-18 01:45:58', '2020-12-18 01:45:58'),
(10, 4, '2020-12-18 01:45:58', '2020-12-18 01:45:58'),
(11, 1, '2020-12-18 01:47:02', '2020-12-18 01:47:02'),
(11, 2, '2020-12-18 01:47:02', '2020-12-18 01:47:02'),
(11, 3, '2020-12-18 01:47:02', '2020-12-18 01:47:02'),
(11, 4, '2020-12-18 01:47:02', '2020-12-18 01:47:02'),
(12, 1, '2020-12-18 01:48:36', '2020-12-18 01:48:36'),
(12, 2, '2020-12-18 01:48:36', '2020-12-18 01:48:36'),
(12, 3, '2020-12-18 01:48:36', '2020-12-18 01:48:36'),
(12, 4, '2020-12-18 01:48:36', '2020-12-18 01:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `news_tag`
--

CREATE TABLE `news_tag` (
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_tag`
--

INSERT INTO `news_tag` (`news_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(1, 2, NULL, NULL),
(1, 3, NULL, NULL),
(1, 4, NULL, NULL),
(2, 1, '2020-12-12 08:47:27', '2020-12-12 08:47:27'),
(2, 2, '2020-12-12 08:47:27', '2020-12-12 08:47:27'),
(2, 3, '2020-12-12 08:47:27', '2020-12-12 08:47:27'),
(3, 2, '2020-12-13 07:59:00', '2020-12-13 07:59:00'),
(4, 1, '2020-12-13 08:11:07', '2020-12-13 08:11:07'),
(5, 1, '2020-12-18 01:41:32', '2020-12-18 01:41:32'),
(6, 1, '2020-12-18 01:42:31', '2020-12-18 01:42:31'),
(7, 1, '2020-12-18 01:43:26', '2020-12-18 01:43:26'),
(7, 3, '2020-12-18 01:43:26', '2020-12-18 01:43:26'),
(8, 4, '2020-12-18 01:44:14', '2020-12-18 01:44:14'),
(8, 2, '2020-12-18 01:44:14', '2020-12-18 01:44:14'),
(9, 2, '2020-12-18 01:45:17', '2020-12-18 01:45:17'),
(9, 3, '2020-12-18 01:45:17', '2020-12-18 01:45:17'),
(10, 3, '2020-12-18 01:45:58', '2020-12-18 01:45:58'),
(11, 2, '2020-12-18 01:47:02', '2020-12-18 01:47:02'),
(12, 2, '2020-12-18 01:48:36', '2020-12-18 01:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `icon`, `link`, `created_at`, `updated_at`, `name`) VALUES
(6, '<i class=\"fab fa-facebook-f\"></i>', 'www.facebook.com', NULL, '2020-12-11 05:53:30', 'Facebook'),
(7, '<i class=\"fab fa-twitter\"></i>', 'www.twittter.com', NULL, '2020-12-11 05:26:30', 'Twitter');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tech', '2020-12-10 01:49:14', '2020-12-10 01:49:14'),
(2, 'Transport', '2020-12-10 01:49:14', '2020-12-10 01:49:14'),
(3, 'Mobile', '2020-12-10 01:49:14', '2020-12-10 01:49:14'),
(4, 'Gadgets', '2020-12-10 01:49:14', '2020-12-10 01:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`, `first_name`, `last_name`) VALUES
(5, NULL, 'admin@example.com', 'users/default.png', NULL, '$2y$10$sY4n.6FxkcXWlcFyMlucZuWLu23FXVOFMPgm7bZfLdANysOHTa.AC', NULL, NULL, '2021-01-08 11:53:00', '2021-01-08 11:53:00', 'Bappi', 'Saha');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_layouts`
--
ALTER TABLE `content_layouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav_menus`
--
ALTER TABLE `nav_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`) USING HASH;

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_categories_slug_unique` (`slug`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `content_layouts`
--
ALTER TABLE `content_layouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metas`
--
ALTER TABLE `metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `nav_menus`
--
ALTER TABLE `nav_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
