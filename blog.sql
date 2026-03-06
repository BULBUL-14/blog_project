-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2026 at 01:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`) VALUES
(1, 'Blog Project', 'my first php projet.', '2026-03-06 11:55:35'),
(2, 'My Sql', 'this is my sql database', '2026-03-06 11:56:20'),
(3, 'greeting', 'good morning!', '2026-03-06 11:56:43'),
(4, 'author', 'bulbul', '2026-03-06 11:56:58'),
(5, 'welcome', 'welcome to first inter!', '2026-03-06 12:13:51'),
(6, 'Thankyou', 'thankyou for applying  !', '2026-03-06 12:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) DEFAULT 'editor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'Bulbul Ahirwar ', '$2y$10$sZ43qS2Ogvgix.rk88bh7O3X7eBWQaFthixOzB4qZOqolCCb1jkaO', 'editor'),
(2, 'Bulbul Ahirwar ', '$2y$10$gPQIj69waVFuZGazV2KrIusH1wupLypTEMhNapGIDvVqsMNm/bfKK', 'editor'),
(3, 'Bulbul Ahirwar ', '$2y$10$1n9WC8yG2MWyqXHphZMa2ueYVvImVB4MynJz1Hvwj2HA6XZwgz.gi', 'editor'),
(4, 'admin', '$2y$10$u37lexA.1vRssX6MkUjjOOSkx.nt7b0bo1U9bN1p0g4aNkkMBIikC', 'editor'),
(5, 'admin', '$2y$10$ntvuAqgQyXX9qbSZVjgEb.uQQDS0wVLDc1nZrmXkFJ5ZXeFWAKnTy', 'editor'),
(6, 'admin', '$2y$10$KhFlpbyt/rzK0CWOHQpA..uL0noVXQdu5AIVxv8RGjpiCiEJ9hBfC', 'editor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
