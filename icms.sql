-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2013 at 04:02 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `icms`
--
CREATE DATABASE IF NOT EXISTS `icms` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `icms`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2013_10_09_051855_create_users_table', 1),
('2013_10_09_052232_add_username_to_users_table', 2),
('2013_10_09_070810_create_news_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `thumb`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sport', 'Sport Detail', '', '', '2013-10-09 02:03:21', '2013-10-09 02:03:21'),
(2, 'ssdf', 'sdfds', '', '', '2013-10-09 02:12:24', '2013-10-09 02:12:24'),
(3, 'Anatomy', 'of love', '', '', '2013-10-09 02:12:44', '2013-10-09 02:12:44'),
(4, 'test 13', 'test 13 es', '', '', '2013-10-09 19:49:38', '2013-10-09 19:49:38'),
(5, 'test 14', 'test 14 es', '', '', '2013-10-09 19:53:43', '2013-10-09 19:53:43'),
(6, 'test 14', 'test 14 es', '', '', '2013-10-09 19:55:24', '2013-10-09 19:55:24'),
(7, 'iPhone 5c', 'desc  iPhone 5c', '', '', '2013-10-09 19:55:39', '2013-11-05 19:50:56'),
(8, 'iPad Wi‑Fi 128GB (4th generation)', 'desc iPad Wi‑Fi 128GB (4th generation)', '', '', '2013-10-09 19:56:45', '2013-11-05 19:50:33'),
(11, 'iPad Wi‑Fi + Cellular 128GB (4th generation)', 'desc iPad Wi‑Fi + Cellular 128GB (4th generation)', '', '', '2013-10-25 09:06:56', '2013-11-05 19:50:15'),
(12, 'Sony Xperia ZR', 'desc Sony Xperia ZR', '', '', '2013-10-28 07:17:36', '2013-11-05 19:49:32'),
(13, 'Sony Xperia Z Ultra', 'desc Sony Xperia Z Ultra', '', '', '2013-10-28 07:18:21', '2013-11-05 19:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
