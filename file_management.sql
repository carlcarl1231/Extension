-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2024 at 09:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `file_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `admin_user` text NOT NULL,
  `admin_password` text NOT NULL,
  `admin_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `admin_user`, `admin_password`, `admin_status`) VALUES
(12, 'jonel toledo', 'joneltoledo@yahoo.com', '$2y$12$Z5g8Lt6W7TxN0vziWmUILObFvynwsuBrZidfLL4yrVDpyWUcFOYzW', 'Admin'),
(13, 'Jace Tundag', 'jace@gmail.com', '$2y$12$mKhJ7SHXDJQvW/vWs7b4lOXoDiOqC71GAbOlnDzy9wW0ys9p1P7.K', ''),
(14, 'CELIA ROSE NOTA', 'celiarosenota@gmail.com', '$2y$12$DK9Pi4l/MeTori6B029huuzszlZjmJaPQ9lzz9L1Y6FssrxJ0ptyC', '');

-- --------------------------------------------------------

--
-- Table structure for table `history_log`
--

CREATE TABLE `history_log` (
  `log_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `email_address` text NOT NULL,
  `action` varchar(100) NOT NULL,
  `actions` varchar(200) NOT NULL DEFAULT 'Has LoggedOut the system at',
  `ip` text NOT NULL,
  `host` text NOT NULL,
  `login_time` varchar(200) NOT NULL,
  `logout_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `history_log`
--

INSERT INTO `history_log` (`log_id`, `id`, `email_address`, `action`, `actions`, `ip`, `host`, `login_time`, `logout_time`) VALUES
(0, 1, 'nario@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'buhayko-PC', 'May-29-2019 02:36 PM', 'May-30-2019 04:33 PM'),
(0, 1, 'nario@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'buhayko-PC', 'May-30-2019 04:30 PM', 'May-30-2019 04:33 PM'),
(0, 2, 'jace@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-27-2024 12:12 PM', 'Jun-28-2024 10:50 AM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-27-2024 01:42 PM', 'Jul-04-2024 05:41 PM'),
(0, 2, 'jace@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 08:53 AM', 'Jun-28-2024 10:50 AM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 10:53 AM', 'Jul-04-2024 05:41 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 01:33 PM', 'Jul-04-2024 05:41 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 01:59 PM', 'Jul-04-2024 05:41 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 02:55 PM', 'Jul-04-2024 05:41 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 04:05 PM', 'Jul-04-2024 05:41 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-29-2024 08:15 PM', 'Jul-04-2024 05:41 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-30-2024 02:08 PM', 'Jul-04-2024 05:41 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-01-2024 10:11 AM', 'Jul-04-2024 05:41 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-02-2024 10:01 AM', 'Jul-04-2024 05:41 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-03-2024 11:00 AM', 'Jul-04-2024 05:41 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-03-2024 05:06 PM', 'Jul-04-2024 05:41 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-03-2024 06:41 PM', 'Jul-04-2024 05:41 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-03-2024 08:12 PM', 'Jul-04-2024 05:41 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 02:00 PM', 'Jul-04-2024 05:41 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 03:21 PM', 'Jul-04-2024 05:41 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 05:35 PM', 'Jul-04-2024 05:41 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 05:41 PM', 'Jul-04-2024 05:41 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 05:42 PM', ''),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 08:15 PM', ''),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-05-2024 01:25 PM', ''),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-05-2024 01:37 PM', ''),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-06-2024 08:15 AM', '');

-- --------------------------------------------------------

--
-- Table structure for table `history_log1`
--

CREATE TABLE `history_log1` (
  `log_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `admin_user` text NOT NULL,
  `action` varchar(100) NOT NULL,
  `actions` varchar(200) NOT NULL DEFAULT 'Has LoggedOut the system at',
  `ip` text NOT NULL,
  `host` text NOT NULL,
  `login_time` varchar(200) NOT NULL,
  `logout_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `history_log1`
--

INSERT INTO `history_log1` (`log_id`, `id`, `admin_user`, `action`, `actions`, `ip`, `host`, `login_time`, `logout_time`) VALUES
(0, 11, 'richard@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'buhayko-PC', 'May-29-2019 02:34 PM', 'May-29-2019 02:35 PM'),
(0, 12, 'joneltoledo@yahoo.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'buhayko-PC', 'May-29-2019 02:35 PM', 'Jun-27-2024 12:08 PM'),
(0, 12, 'joneltoledo@yahoo.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'buhayko-PC', 'May-29-2019 02:37 PM', 'Jun-27-2024 12:08 PM'),
(0, 12, 'joneltoledo@yahoo.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'buhayko-PC', 'May-30-2019 04:33 PM', 'Jun-27-2024 12:08 PM'),
(0, 12, 'joneltoledo@yahoo.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-27-2024 12:05 PM', 'Jun-27-2024 12:08 PM'),
(0, 13, 'jace@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-27-2024 12:08 PM', 'Jun-28-2024 10:52 AM'),
(0, 13, 'jace@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-27-2024 01:35 PM', 'Jun-28-2024 10:52 AM'),
(0, 13, 'jace@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-27-2024 01:40 PM', 'Jun-28-2024 10:52 AM'),
(0, 13, 'jace@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-27-2024 01:48 PM', 'Jun-28-2024 10:52 AM'),
(0, 13, 'jace@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 08:55 AM', 'Jun-28-2024 10:52 AM'),
(0, 13, 'jace@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 10:52 AM', 'Jun-28-2024 10:52 AM'),
(0, 13, 'jace@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 10:54 AM', ''),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 01:29 PM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 01:58 PM', 'Jul-05-2024 01:36 PM'),
(0, 12, 'joneltoledo@yahoo.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 02:29 PM', ''),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 02:56 PM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 04:02 PM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 04:02 PM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 04:04 PM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 04:04 PM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-29-2024 03:55 PM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-30-2024 02:32 PM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-01-2024 10:12 AM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-02-2024 10:01 AM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-03-2024 11:00 AM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-03-2024 05:06 PM', 'Jul-05-2024 01:36 PM'),
(0, 13, 'jace@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-03-2024 06:37 PM', ''),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-03-2024 08:12 PM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 10:01 AM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 03:21 PM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 05:34 PM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 05:42 PM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 08:14 PM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-05-2024 01:24 PM', 'Jul-05-2024 01:36 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-05-2024 01:38 PM', ''),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-06-2024 08:39 AM', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email_address` text NOT NULL,
  `user_password` text NOT NULL,
  `user_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id`, `name`, `email_address`, `user_password`, `user_status`) VALUES
(1, 'Email Luis Nario', 'nario@gmail.com', '$2y$12$xxxzp5LySIAgobcyOnpp1uW6VzGdrZXTuqXrj3V7rA5ZP8RbpzNtW', 'Employee'),
(2, 'Jace', 'jace@gmail.com', '$2y$12$VHdvwYbklKCfPpLLJ2WSg.hX6jxpBbeEcAUs7fPU6OCPZ511vVJzG', ''),
(3, 'Jace', 'jacetundag@gmail.com', '$2y$12$LNBQ0DeQs3OjXO8q8n0cjOI73f2/qrL1gA.yScZiCUzl8WMzAfO.e', '');

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE `upload_files` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `SIZE` varchar(200) NOT NULL,
  `DOWNLOAD` varchar(200) NOT NULL,
  `TIMERS` varchar(200) NOT NULL,
  `ADMIN_STATUS` varchar(300) NOT NULL,
  `EMAIL` text NOT NULL,
  `page_identifier` varchar(50) DEFAULT 'general',
  `display_options` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `upload_files`
--

INSERT INTO `upload_files` (`ID`, `NAME`, `SIZE`, `DOWNLOAD`, `TIMERS`, `ADMIN_STATUS`, `EMAIL`, `page_identifier`, `display_options`) VALUES
(54, '4,8.docx', '588433', '0', 'Jul-06-2024 01:31 PM', 'Admin', '', 'general', 'a:1:{i:0;s:15:\"proposal_format\";}'),
(74, 'ARTA ni jeff ni! (2).docx', '359245', '0', 'Jul-06-2024 03:31 PM', 'Admin', '', 'general', 'a:5:{i:0;s:3:\"moa\";i:1;s:4:\"ppmp\";i:2;s:8:\"ccs_pool\";i:3;s:16:\"engineering_pool\";i:4;s:14:\"industech_pool\";}'),
(75, 'JACE APP (1).pdf', '514767', '0', 'Jul-06-2024 03:34 PM', 'Admin', '', 'general', 'a:4:{i:0;s:18:\"engineering_agenda\";i:1;s:11:\"ce_projects\";i:2;s:12:\"cpe_projects\";i:3;s:12:\"ece_projects\";}'),
(76, 'BORROWERS (1).docx', '19438', '0', 'Jul-06-2024 03:34 PM', 'Admin', '', 'general', 'a:4:{i:0;s:10:\"ccs_agenda\";i:1;s:11:\"cs_projects\";i:2;s:11:\"it_projects\";i:3;s:11:\"is_projects\";}'),
(77, 'SKSU-OJT-ARTA-FORMS-01-12 (1).docx', '589130', '0', 'Jul-06-2024 03:35 PM', 'Admin', '', 'general', 'a:1:{i:0;s:17:\"manual_operations\";}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
