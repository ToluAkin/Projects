-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2018 at 02:48 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `userid`, `title`, `note`, `created_at`) VALUES
(4, 6, 'Welcome', 'Played Upuojcdcndmwncjdwjncjoe/', '2018-12-08 11:54:01'),
(5, 7, 'Two', 'Bleehehjkdbvcjdbwljvc', '2018-12-09 00:07:23'),
(11, 6, 'make sense', 'hjvhkbjkn.', '2018-12-09 00:01:35'),
(13, 10, 'bling', 'blingblingblingblingblingblingblingblingblingblingblingblingblingblingblingblingblingblingblingblingv', '2018-12-09 19:27:19'),
(14, 11, 'm,cvnwell', 'vdvljdfnkvn fknalkkafkbvngnbkn lanif kvfkv', '2018-12-11 12:07:37'),
(15, 14, 'nbkbnlkm:Lytvhjbklmmk;', 'gjhbnlklm",?><?:";', '2018-12-11 14:28:53');

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
  `pswd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `pswd`, `created_at`) VALUES
(6, 'tolu', 'tolu', 'tolu', 'toluakintoye@gmail.com', 'akin', '2018-12-03'),
(7, 'akin', 'tolu', 'akintoye', 'toluakintoye@gmail.com', 'adeola', '2018-12-04'),
(8, 'toluwa', 'tolu', 'akintoye', 't@yahoo.com', 'akintoye', '2018-12-06'),
(9, 'Toluwalase', 'Toluwalase', 'Akintoye', 'toluakintoye@gmail.com', 'toluwala', '2018-12-08'),
(10, 'bangs', 'bang', 'bling', 'think@ymail.com', 'flinch', '2018-12-09'),
(11, 'ada', 'ada', 'ade', 'ada@email.com', '1234', '2018-12-10'),
(14, 'Efe', 'tolu', 'tolu', 'toluakintoye@gmail.com', 'tolu', '2018-12-11'),
(15, 'Ope', 'ofe', 'ale', 'ope@ymail.com', 'd873a0905d937c0dac16d65a2c42d9eae585650a', '2018-12-11');

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
  ADD UNIQUE KEY `username_2` (`username`),
  ADD KEY `username` (`username`),
  ADD KEY `firstname` (`firstname`),
  ADD KEY `lastname` (`lastname`),
  ADD KEY `email` (`email`),
  ADD KEY `pswd` (`pswd`),
  ADD KEY `created_at` (`created_at`),
  ADD KEY `firstname_2` (`firstname`,`lastname`,`email`,`pswd`,`created_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
