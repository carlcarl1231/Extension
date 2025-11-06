-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2024 at 02:48 PM
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
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-27-2024 01:42 PM', 'Aug-08-2024 03:23 PM'),
(0, 2, 'jace@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 08:53 AM', 'Jun-28-2024 10:50 AM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 10:53 AM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 01:33 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 01:59 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 02:55 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 04:05 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-29-2024 08:15 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-30-2024 02:08 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-01-2024 10:11 AM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-02-2024 10:01 AM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-03-2024 11:00 AM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-03-2024 05:06 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-03-2024 06:41 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-03-2024 08:12 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 02:00 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 03:21 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 05:35 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 05:41 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 05:42 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 08:15 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-05-2024 01:25 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-05-2024 01:37 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-06-2024 08:15 AM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-18-2024 04:54 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-18-2024 05:02 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-19-2024 03:01 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-19-2024 04:03 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-22-2024 08:32 AM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-22-2024 10:34 AM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-22-2024 02:54 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-23-2024 08:48 AM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-23-2024 01:23 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-23-2024 01:24 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-23-2024 03:29 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-24-2024 08:17 AM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-24-2024 11:40 AM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-24-2024 04:09 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-25-2024 07:13 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-26-2024 08:23 AM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-26-2024 01:34 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-30-2024 04:03 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-30-2024 04:05 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-30-2024 04:12 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-31-2024 02:31 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-01-2024 08:44 AM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-01-2024 02:09 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-01-2024 02:41 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-01-2024 02:52 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-02-2024 08:40 AM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-02-2024 08:50 AM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-04-2024 01:25 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-04-2024 01:30 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-05-2024 01:57 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-06-2024 09:30 AM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-08-2024 03:19 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-08-2024 03:22 PM', 'Aug-08-2024 03:23 PM'),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-15-2024 10:59 AM', ''),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-20-2024 04:11 PM', ''),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-20-2024 04:16 PM', ''),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-20-2024 04:46 PM', ''),
(0, 3, 'jacetundag@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-28-2024 06:25 PM', '');

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
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 01:29 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 01:58 PM', 'Aug-20-2024 04:39 PM'),
(0, 12, 'joneltoledo@yahoo.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 02:29 PM', ''),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 02:56 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 04:02 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 04:02 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 04:04 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-28-2024 04:04 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-29-2024 03:55 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jun-30-2024 02:32 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-01-2024 10:12 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-02-2024 10:01 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-03-2024 11:00 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-03-2024 05:06 PM', 'Aug-20-2024 04:39 PM'),
(0, 13, 'jace@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-03-2024 06:37 PM', ''),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-03-2024 08:12 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 10:01 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 03:21 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 05:34 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 05:42 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-04-2024 08:14 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-05-2024 01:24 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-05-2024 01:38 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-06-2024 08:39 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-18-2024 04:54 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-18-2024 05:00 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-19-2024 10:42 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-22-2024 08:31 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-22-2024 10:32 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-22-2024 10:34 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-22-2024 02:50 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-23-2024 08:47 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-23-2024 01:26 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-23-2024 02:56 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-24-2024 08:17 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-24-2024 11:40 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-24-2024 03:14 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-25-2024 07:12 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-25-2024 07:13 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-26-2024 08:23 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-26-2024 01:34 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-30-2024 04:02 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-30-2024 04:05 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Jul-31-2024 02:30 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-01-2024 08:45 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-01-2024 10:04 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-01-2024 11:05 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-01-2024 02:09 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-01-2024 02:52 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-01-2024 03:10 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-02-2024 08:43 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-02-2024 10:30 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-04-2024 01:24 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-04-2024 01:29 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-05-2024 01:57 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-06-2024 09:30 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-08-2024 03:19 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-15-2024 10:58 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-20-2024 10:15 AM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-20-2024 04:12 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-20-2024 04:37 PM', 'Aug-20-2024 04:39 PM'),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-20-2024 04:39 PM', ''),
(0, 14, 'celiarosenota@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'JACE', 'Aug-28-2024 06:25 PM', '');

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
(2, 'Jace', 'jace@gmail.com', '$2y$12$VHdvwYbklKCfPpLLJ2WSg.hX6jxpBbeEcAUs7fPU6OCPZ511vVJzG', ''),
(3, 'Jace', 'jacetundag@gmail.com', '$2y$12$LNBQ0DeQs3OjXO8q8n0cjOI73f2/qrL1gA.yScZiCUzl8WMzAfO.e', '');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `setting` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `setting`, `value`) VALUES
(1, 'private_files_password', '12345');

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
(87, 'Extension Activities for IndusTech 2015-2019.pdf', '1746009', '0', 'Jul-22-2024 10:07 AM', 'Admin', '', 'general', 'a:1:{i:0;s:16:\"industech_agenda\";}'),
(88, 'Agenda for IndusTech 2015-2019.pdf', '537879', '0', 'Jul-22-2024 10:21 AM', 'Admin', '', 'general', 'a:1:{i:0;s:16:\"industech_agenda\";}'),
(89, 'Agenda for BS Information System 2017-2020.pdf', '344048', '1', 'Jul-22-2024 10:31 AM', 'Admin', '', 'general', 'a:1:{i:0;s:11:\"is_projects\";}'),
(90, 'Campus Agenda.pdf', '1209055', '0', 'Jul-22-2024 11:23 AM', 'Admin', '', 'general', 'a:1:{i:0;s:13:\"campus_agenda\";}'),
(91, 'RDE-Manual.pdf', '1598144', '0', 'Jul-22-2024 11:44 AM', 'Admin', '', 'general', 'a:1:{i:0;s:17:\"manual_operations\";}'),
(92, 'RD&E Proposal Format Form No.1.pdf', '389692', '0', 'Jul-22-2024 11:58 AM', 'Admin', '', 'general', 'a:1:{i:0;s:15:\"proposal_format\";}'),
(93, 'DOST Form No.2.pdf', '1390797', '0', 'Jul-22-2024 11:58 AM', 'Admin', '', 'general', 'a:1:{i:0;s:15:\"proposal_format\";}'),
(95, 'Agenda Conducted to BS in Civil Eng 2017-2020.pdf', '373135', '2', 'Jul-22-2024 01:29 PM', 'Admin', '', 'general', 'a:1:{i:0;s:18:\"engineering_agenda\";}'),
(96, 'Agenda Conducted to BS in Computer Eng 2017-2020.pdf', '364183', '2', 'Jul-22-2024 01:30 PM', 'Admin', '', 'general', 'a:1:{i:0;s:18:\"engineering_agenda\";}'),
(97, 'DOST Form 1.pdf', '139841', '0', 'Jul-22-2024 02:00 PM', 'Admin', '', 'general', 'a:1:{i:0;s:5:\"forms\";}'),
(98, 'DOST Form 2.pdf', '161982', '0', 'Jul-22-2024 02:01 PM', 'Admin', '', 'general', 'a:1:{i:0;s:5:\"forms\";}'),
(99, 'DOST Form 3.pdf', '143597', '0', 'Jul-22-2024 02:01 PM', 'Admin', '', 'general', 'a:1:{i:0;s:5:\"forms\";}'),
(100, 'DOST Form 4.pdf', '280747', '0', 'Jul-22-2024 02:01 PM', 'Admin', '', 'general', 'a:1:{i:0;s:5:\"forms\";}'),
(101, 'DOST Form No. 1A.pdf', '267740', '0', 'Jul-22-2024 02:03 PM', 'Admin', '', 'general', 'a:1:{i:0;s:5:\"forms\";}'),
(102, 'DOST Form No. 1B.pdf', '453964', '0', 'Jul-22-2024 02:03 PM', 'Admin', '', 'general', 'a:1:{i:0;s:5:\"forms\";}'),
(103, 'DOST Form No. 2A.pdf', '323932', '0', 'Jul-22-2024 02:03 PM', 'Admin', '', 'general', 'a:1:{i:0;s:5:\"forms\";}'),
(104, 'DOST Form No. 2B.pdf', '356958', '0', 'Jul-22-2024 02:03 PM', 'Admin', '', 'general', 'a:1:{i:0;s:5:\"forms\";}'),
(105, 'NARRDS Form No. 1.pdf', '195221', '0', 'Jul-22-2024 02:03 PM', 'Admin', '', 'general', 'a:1:{i:0;s:5:\"forms\";}'),
(106, 'NARRDS Form No. 2.pdf', '243001', '0', 'Jul-22-2024 02:04 PM', 'Admin', '', 'general', 'a:1:{i:0;s:5:\"forms\";}'),
(107, 'NARRDS Form No. 2B.pdf', '296089', '0', 'Jul-22-2024 02:04 PM', 'Admin', '', 'general', 'a:1:{i:0;s:5:\"forms\";}'),
(125, 'MOA Thai Nguyen University 2015.pdf', '2835364', '0', 'Jul-23-2024 09:27 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(126, 'MOA LGU BRGY. Kalawag ll 2015.pdf', '756533', '0', 'Jul-23-2024 09:27 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(127, 'MOA ST. Charles Borromea Parish Church 2017.pdf', '879839', '0', 'Jul-23-2024 09:27 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(128, 'MOA DICT 2016.pdf', '3340962', '0', 'Jul-23-2024 09:27 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(129, 'MOA Kalawag 1 BLGU 2021.pdf', '1735059', '0', 'Jul-23-2024 09:30 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(130, 'MOA Kalawag Central ES 2020.pdf', '1695266', '0', 'Jul-23-2024 09:31 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(131, 'MOA Kalawag Central Elem School 2023.pdf', '1126229', '0', 'Jul-23-2024 09:31 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(132, 'MOA Sagasa BRGY. LGU 2023.pdf', '1059967', '0', 'Jul-23-2024 09:31 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(133, 'MOA DTI-SK 2013.pdf', '712342', '0', 'Jul-23-2024 11:06 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(134, 'MOA BRGY SAGASA 2017.pdf', '2005229', '0', 'Jul-23-2024 11:06 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(135, 'MOA BJMP Region 12 2017.pdf', '929537', '0', 'Jul-23-2024 11:06 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(136, 'MOA Division of South Cot, Crispin Soliven 2017.pdf', '969763', '0', 'Jul-23-2024 11:06 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(137, 'MOA KARBEMCO 2013.pdf', '768687', '0', 'Jul-23-2024 11:07 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(138, 'MOA BRGY TAYUGO 2004.pdf', '931185', '0', 'Jul-23-2024 11:07 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(139, 'MOA Maremco Elem School 2003.pdf', '1133363', '0', 'Jul-23-2024 11:07 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(140, 'MOA R.E.C.E Computer Tutorial Services inc. 2012.pdf', '1042426', '0', 'Jul-23-2024 11:07 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(141, 'MOA Dealership with Upper Singao Kidapawan City 2005.pdf', '971921', '0', 'Jul-23-2024 11:08 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(142, 'MOA SKPSC 2004.pdf', '1030296', '0', 'Jul-23-2024 11:08 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(143, 'MOA LG Isulan 2003.pdf', '1056562', '0', 'Jul-23-2024 11:08 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(144, 'MOA JULIALITA A. LEGASPI 2005.pdf', '872695', '0', 'Jul-23-2024 11:08 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(145, 'MOA BRGY TAYUGO 2003.pdf', '1073416', '0', 'Jul-23-2024 11:09 AM', 'Admin', '', 'general', 'a:1:{i:0;s:3:\"moa\";}'),
(154, 'Programming Languages Skills Training for K-12 Teachers Of I.S.K 2020-2021.pdf', '1328373', '2', 'Jul-23-2024 03:28 PM', 'Admin', '', 'general', 'a:1:{i:0;s:15:\"funded_projects\";}'),
(155, 'SKSU Isulan TRAINING ASSISTANCE for PRODUCT and INDUSTRY (SKSU Isulan- TAPI) 2020.pdf', '1461319', '0', 'Jul-23-2024 03:28 PM', 'Admin', '', 'general', 'a:1:{i:0;s:15:\"funded_projects\";}'),
(156, 'WASTE MANAGEMENT & RECYCLING OF PLASTIC BOTTLE WASTES IN KALAWAG 1 ISK 2020.pdf', '1421579', '0', 'Jul-23-2024 03:28 PM', 'Admin', '', 'general', 'a:1:{i:0;s:15:\"funded_projects\";}'),
(157, 'Financial Literacy Training of Beneficiaries of Gawad Kalinga at BRGY SAGASA, Esperanza SK 2017.pdf', '855108', '0', 'Jul-23-2024 04:09 PM', 'Admin', '', 'general', 'a:1:{i:0;s:11:\"ce_projects\";}'),
(158, 'Proposed Training on Masonry Literacy of Gawad Kalinga, BRGY SAGASA, Esperanza SK 2017.pdf', '882804', '0', 'Jul-23-2024 04:09 PM', 'Admin', '', 'general', 'a:1:{i:0;s:11:\"ce_projects\";}'),
(159, 'Masonry Literacy Training of The Beneficiaries of BRGY Kalawag ll ISK 2017.pdf', '887100', '0', 'Jul-23-2024 04:09 PM', 'Admin', '', 'general', 'a:1:{i:0;s:11:\"ce_projects\";}'),
(160, 'Technology Dissemination & Transfer 2017.pdf', '784071', '0', 'Jul-23-2024 04:36 PM', 'Admin', '', 'general', 'a:1:{i:0;s:12:\"ece_projects\";}'),
(161, 'Techno-Transfer Program on Industrial Technologies 2019.pdf', '1993480', '0', 'Jul-23-2024 04:36 PM', 'Admin', '', 'general', 'a:1:{i:0;s:12:\"ece_projects\";}'),
(162, 'Innovative Food Processing Skills Training 2018.pdf', '914843', '0', 'Jul-23-2024 04:37 PM', 'Admin', '', 'general', 'a:0:{}'),
(163, 'Proposed Training on Financial Literacy, Output Monitoring and Outcome Assessment of Purok Leaders Income-Generating Grants at BRGY Kalawag 2 ISK 2014.pdf', '847066', '0', 'Jul-23-2024 04:37 PM', 'Admin', '', 'general', 'a:0:{}'),
(164, 'Seminar-Workshop on Research and Extension Proposals Writing cum Thesis Advising 2019.pdf', '1711929', '0', 'Jul-23-2024 04:37 PM', 'Admin', '', 'general', 'a:0:{}'),
(166, 'Travel Order for BRGY SAGASA Esperanza SK 2018.pdf', '871873', '0', 'Jul-24-2024 09:49 AM', 'Admin', '', 'general', 'a:1:{i:0;s:12:\"travel_order\";}'),
(167, 'Travel Order for BRGY SAGASA Esperanza SK 2019.pdf', '975184', '0', 'Jul-24-2024 09:49 AM', 'Admin', '', 'general', 'a:1:{i:0;s:12:\"travel_order\";}'),
(168, 'Travel Order for BRGY SAGASA Masonry Literacy Training 2017.pdf', '757762', '0', 'Jul-24-2024 09:49 AM', 'Admin', '', 'general', 'a:1:{i:0;s:12:\"travel_order\";}'),
(169, 'Travel Order for BRGY Tuka Bagumbayan SK Training needs Assessment Survey 2018.pdf', '334087', '0', 'Jul-24-2024 09:49 AM', 'Admin', '', 'general', 'a:1:{i:0;s:12:\"travel_order\";}'),
(170, 'Travel Order for BRGY Tuka, Bagumbayan SK 2019.pdf', '616602', '0', 'Jul-24-2024 09:50 AM', 'Admin', '', 'general', 'a:1:{i:0;s:12:\"travel_order\";}'),
(171, 'Travel Order for BRGY Kalawag ll Masonry Literacy Training 2017.pdf', '877834', '0', 'Jul-24-2024 09:50 AM', 'Admin', '', 'general', 'a:1:{i:0;s:12:\"travel_order\";}'),
(172, 'Travel Order for INHS CCTV installation 2018.pdf', '518071', '0', 'Jul-24-2024 09:50 AM', 'Admin', '', 'general', 'a:1:{i:0;s:12:\"travel_order\";}'),
(173, 'COLLEGE OF ENGINEERING.pdf.pdf', '1876453', '1', 'Jul-30-2024 04:03 PM', 'Admin', '', 'general', 'a:1:{i:0;s:16:\"engineering_pool\";}'),
(174, 'COLLEGE OF INDUSTRIAL TECH.pdf.pdf', '1239503', '0', 'Jul-30-2024 04:03 PM', 'Admin', '', 'general', 'a:1:{i:0;s:14:\"industech_pool\";}'),
(175, 'COLLEGE OF COMPUTER STUDIES.pdf', '3374494', '0', 'Jul-30-2024 04:03 PM', 'Admin', '', 'general', 'a:1:{i:0;s:8:\"ccs_pool\";}'),
(176, 'Industrial Tech Extension Agenda.pdf', '1772715', '0', 'Aug-01-2024 02:22 PM', 'Admin', '', 'general', 'a:1:{i:0;s:16:\"industech_agenda\";}'),
(177, 'green.jpg', '7562', '0', 'Aug-01-2024 02:25 PM', 'Admin', '', 'general', 'a:1:{i:0;s:17:\"manual_operations\";}');

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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
