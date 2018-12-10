-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2018 at 07:21 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scrapbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(255) NOT NULL,
  `userid` int(255) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `note` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `userid`, `title`, `note`, `created_at`) VALUES
(4, 6, 'Welcome', 'Played Upuojcdcndmwncjdwjncjoe/', '2018-12-08 11:54:01'),
(5, 7, 'Two', 'Bleehehjkdbvcjdbwljvc', '2018-12-09 00:07:23'),
(11, 6, 'make sense', 'hjvhkbjkn.', '2018-12-09 00:01:35'),
(13, 10, 'bling', 'blingblingblingblingblingblingblingblingblingblingblingblingblingblingblingblingblingblingblingblingv', '2018-12-09 19:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pswd` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `cpswd` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `pswd`, `cpswd`, `created_at`) VALUES
(6, 'tolu', 'tolu', 'tolu', 'toluakintoye@gmail.com', 'akin', 'akin', '2018-12-03'),
(7, 'akin', 'tolu', 'akintoye', 'toluakintoye@gmail.com', 'adeola', 'adeola', '2018-12-04'),
(8, 'toluwa', 'tolu', 'akintoye', 't@yahoo.com', 'akintoye', 'akintoye', '2018-12-06'),
(9, 'Toluwalase', 'Toluwalase', 'Akintoye', 'toluakintoye@gmail.com', 'toluwala', 'toluwala', '2018-12-08'),
(10, 'bangs', 'bang', 'bling', 'think@ymail.com', 'flinch', 'flinch', '2018-12-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`),
  ADD KEY `created_at` (`created_at`),
  ADD KEY `note` (`note`(255)),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `firstname` (`firstname`),
  ADD KEY `lastname` (`lastname`),
  ADD KEY `email` (`email`),
  ADD KEY `pswd` (`pswd`),
  ADD KEY `cpswd` (`cpswd`),
  ADD KEY `created_at` (`created_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
