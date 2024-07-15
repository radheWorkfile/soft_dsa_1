-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 07:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blank`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_by_user_id` int(11) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `created_by_user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 1, 1, '2021-12-30', '2023-04-04 10:10:50');

-- --------------------------------------------------------

--
-- Table structure for table `system_config`
--

CREATE TABLE `system_config` (
  `id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_address` varchar(200) NOT NULL,
  `company_url` varchar(200) NOT NULL,
  `default_timezone` int(10) NOT NULL,
  `session_timeout` int(10) NOT NULL,
  `inactive_timeout` int(1) NOT NULL,
  `max_file_size` int(11) NOT NULL,
  `allowed_file_types` varchar(200) NOT NULL,
  `default_time_format` varchar(100) NOT NULL,
  `default_date_format` varchar(100) NOT NULL,
  `default_date_time_format` varchar(100) NOT NULL,
  `updates_enabled` int(1) NOT NULL,
  `error_reporting` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_config`
--

INSERT INTO `system_config` (`id`, `company_name`, `company_address`, `company_url`, `default_timezone`, `session_timeout`, `inactive_timeout`, `max_file_size`, `allowed_file_types`, `default_time_format`, `default_date_format`, `default_date_time_format`, `updates_enabled`, `error_reporting`) VALUES
(1, 'Natraj', '       Patna', 'http://shantamanipaper.com/', 49, 60, 0, 10000000, 'jpg,JPG,JPEG,jpeg,png,PNG,GIF,gif,doc,DOC,docx,DOCX,pdf,PDF,RAR,rar,ZIP,zip', 'h:i:A', 'j M, Y', 'd-m-Y h:i:s A', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `user` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `ipaddress` varchar(100) DEFAULT NULL,
  `user_agent` varchar(500) DEFAULT NULL,
  `login_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `user`, `role`, `ipaddress`, `user_agent`, `login_datetime`) VALUES
(1, 'admin@g.com', '1', '::1', 'Chrome 102.0.0.0, Windows 10', '2022-06-21 10:23:27'),
(2, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-24 07:45:00'),
(3, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-03 10:32:20'),
(4, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-03 10:52:54'),
(5, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-03 10:55:36'),
(6, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 05:27:36'),
(7, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 06:42:50'),
(8, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 10:08:30'),
(9, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-05 10:32:39'),
(10, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-05 11:48:41'),
(11, 'admin@g.com', '1', '192.168.1.203', 'Chrome 111.0.0.0, Android', '2023-04-05 12:15:23'),
(12, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-06 07:43:10'),
(13, 'admin@g.com', '1', '192.168.1.203', 'Chrome 111.0.0.0, Android', '2023-04-06 11:51:09'),
(14, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-07 11:11:46'),
(15, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-07 11:49:22'),
(16, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-08 05:21:55'),
(17, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-08 10:19:18'),
(18, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-08 11:19:41'),
(19, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-10 05:20:43'),
(20, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-11 06:13:06'),
(21, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-11 11:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `department_type` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `show_ps` varchar(200) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'uploads/user/no_image.png',
  `status` int(1) NOT NULL DEFAULT 1,
  `created_by_user_id` varchar(10) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `department_type`, `email`, `password`, `show_ps`, `name`, `address`, `mobile`, `photo`, `status`, `created_by_user_id`, `created_at`, `update_at`) VALUES
(1, 1, 'admin@g.com', '1593ea35effffa72e44264f78de0a25a', '1593ea35effffa72e44264f78de0a25a', 'Admin', 'Patna', '9874335133', 'uploads/user/admin.png', 1, '1', '2022-06-02', '2023-04-05 12:17:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_config`
--
ALTER TABLE `system_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
