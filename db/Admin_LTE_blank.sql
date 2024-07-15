-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 12:35 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `status` int(10) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `created_by_user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, 1, '2021-12-30', '2022-01-15 06:57:50'),
(2, 'Entry', 1, 1, '2022-06-13', '2022-06-13 12:24:53'),
(3, 'Kata', 1, 1, '2022-06-15', '2022-06-16 07:22:35'),
(4, 'Accountant', 1, 1, '2022-06-15', '2022-06-16 07:22:53');

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
  `login_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `user`, `role`, `ipaddress`, `user_agent`, `login_datetime`) VALUES
(1, 'admin@g.com', '1', '::1', 'Chrome 102.0.0.0, Windows 10', '2022-06-21 10:23:27');

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
  `status` int(1) NOT NULL DEFAULT '1',
  `created_by_user_id` varchar(10) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `department_type`, `email`, `password`, `show_ps`, `name`, `address`, `mobile`, `photo`, `status`, `created_by_user_id`, `created_at`, `update_at`) VALUES
(1, 1, 'admin@g.com', '1593ea35effffa72e44264f78de0a25a', 'admin@g.com', 'Admin', 'Patna', '9874433513', 'uploads/user/admin.png', 1, '1', '2022-06-02', '2022-06-21 10:35:11');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
