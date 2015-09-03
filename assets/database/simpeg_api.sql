-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31 Mar 2015 pada 18.53
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simpeg_api`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `api_akses`
--

CREATE TABLE IF NOT EXISTS `api_akses` (
`id_api_akses` int(11) NOT NULL,
  `id_aplikasi` int(11) NOT NULL,
  `id_method` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `api_akses`
--

INSERT INTO `api_akses` (`id_api_akses`, `id_aplikasi`, `id_method`) VALUES
(1, 1, 10),
(2, 1, 11),
(3, 1, 9),
(4, 1, 12),
(5, 1, 13),
(6, 1, 14),
(7, 2, 5),
(8, 2, 6),
(9, 2, 7),
(10, 2, 8),
(11, 2, 1),
(12, 2, 2),
(13, 2, 3),
(14, 2, 4),
(15, 2, 9),
(16, 2, 13),
(17, 2, 12),
(18, 2, 14),
(19, 1, 16),
(20, 1, 17),
(21, 2, 17),
(22, 1, 18),
(23, 1, 19),
(24, 2, 19),
(25, 1, 20),
(26, 1, 21),
(27, 1, 22),
(28, 1, 23),
(29, 1, 24),
(30, 2, 24),
(31, 1, 25),
(32, 2, 25),
(33, 1, 26),
(34, 2, 26),
(35, 1, 27),
(36, 2, 27),
(37, 1, 28),
(38, 2, 28),
(39, 1, 29),
(40, 2, 29),
(41, 1, 30),
(42, 2, 30),
(43, 1, 31),
(44, 2, 31),
(45, 1, 32),
(46, 2, 32);

-- --------------------------------------------------------

--
-- Struktur dari tabel `aplikasi`
--

CREATE TABLE IF NOT EXISTS `aplikasi` (
`id_aplikasi` int(11) NOT NULL,
  `nama_aplikasi` varchar(50) NOT NULL,
  `api_key` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aplikasi`
--

INSERT INTO `aplikasi` (`id_aplikasi`, `nama_aplikasi`, `api_key`) VALUES
(1, 'Simpeg Mobile', '4363fd3160133c66eb83de0f930abd2e'),
(2, 'Simpeg Web', '068ef921a60778c4e7d71c488ff3c475');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dum_user_app`
--

CREATE TABLE IF NOT EXISTS `dum_user_app` (
`id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_aplikasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `error_status`
--

CREATE TABLE IF NOT EXISTS `error_status` (
  `id_error` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `error_status`
--

INSERT INTO `error_status` (`id_error`, `status`) VALUES
(100, 'Sukses'),
(101, 'API KEY yang Anda masukkan tidak sesuai'),
(102, 'NIP yang dimasukkan tidak tersedia'),
(103, 'Password yang dimasukkan salah'),
(104, 'Penambahan data tidak berhasil'),
(105, 'Lokasi salah'),
(106, 'Imei salah'),
(107, 'Maaf, Anda telat'),
(108, 'Hari ini bukan hari kerja'),
(109, 'Anda sudah absen'),
(110, 'Lokasi kerja belum ada'),
(111, 'Imei sudah ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_api`
--

CREATE TABLE IF NOT EXISTS `log_api` (
`id_log` int(11) NOT NULL,
  `id_aplikasi` int(11) NOT NULL,
  `id_method` int(11) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=364 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_api`
--

INSERT INTO `log_api` (`id_log`, `id_aplikasi`, `id_method`, `date_time`) VALUES
(5, 1, 1, '2015-02-24 15:50:35'),
(6, 1, 1, '2015-02-24 19:58:36'),
(7, 1, 1, '2015-02-24 20:13:59'),
(8, 1, 1, '2015-02-24 20:16:08'),
(11, 1, 2, '2015-02-24 20:31:43'),
(12, 1, 3, '2015-02-24 20:33:16'),
(14, 1, 4, '2015-02-24 20:36:41'),
(15, 1, 6, '2015-02-24 20:54:33'),
(16, 1, 9, '2015-02-24 20:59:20'),
(17, 1, 10, '2015-02-24 21:27:56'),
(18, 1, 10, '2015-02-24 21:28:18'),
(19, 1, 10, '2015-02-24 21:39:11'),
(20, 1, 10, '2015-02-24 21:40:27'),
(21, 1, 10, '2015-02-24 21:53:47'),
(22, 1, 10, '2015-02-24 21:57:29'),
(23, 1, 10, '2015-02-24 22:02:45'),
(24, 1, 10, '2015-02-24 22:05:46'),
(25, 1, 10, '2015-02-24 22:08:11'),
(26, 1, 10, '2015-02-24 22:10:43'),
(27, 1, 10, '2015-02-24 22:15:08'),
(28, 1, 10, '2015-02-24 22:16:39'),
(29, 1, 10, '2015-02-24 22:17:45'),
(30, 1, 10, '2015-02-24 22:19:59'),
(31, 1, 10, '2015-02-24 22:20:25'),
(32, 1, 10, '2015-02-24 22:22:55'),
(33, 1, 10, '2015-02-24 22:23:14'),
(34, 1, 10, '2015-02-24 22:25:18'),
(35, 1, 10, '2015-02-24 22:28:09'),
(36, 1, 10, '2015-02-24 22:28:49'),
(37, 1, 11, '2015-02-25 13:10:29'),
(38, 1, 11, '2015-02-25 13:10:58'),
(39, 1, 11, '2015-02-25 13:11:10'),
(40, 1, 11, '2015-02-25 13:14:36'),
(41, 1, 12, '2015-02-25 14:57:41'),
(42, 1, 12, '2015-02-25 14:59:57'),
(43, 1, 12, '2015-02-25 15:02:01'),
(44, 1, 12, '2015-02-25 15:07:04'),
(45, 1, 12, '2015-02-25 15:07:09'),
(46, 1, 12, '2015-02-25 15:40:59'),
(47, 1, 12, '2015-02-25 15:43:15'),
(48, 1, 12, '2015-02-25 15:46:14'),
(49, 1, 12, '2015-02-25 15:50:31'),
(50, 1, 12, '2015-02-25 15:50:43'),
(51, 1, 11, '2015-02-25 23:05:27'),
(52, 1, 10, '2015-02-25 23:13:12'),
(53, 1, 11, '2015-02-25 23:22:56'),
(54, 1, 10, '2015-02-25 23:27:23'),
(55, 1, 10, '2015-02-25 23:28:09'),
(56, 1, 10, '2015-02-25 23:28:17'),
(57, 1, 10, '2015-02-25 23:29:57'),
(58, 1, 10, '2015-02-25 23:32:36'),
(59, 1, 10, '2015-02-25 23:32:39'),
(60, 1, 10, '2015-02-25 23:34:28'),
(61, 1, 14, '2015-02-26 09:50:44'),
(62, 1, 13, '2015-02-26 09:50:45'),
(63, 1, 9, '2015-02-26 11:13:26'),
(64, 2, 9, '2015-02-26 11:13:36'),
(65, 1, 10, '2015-02-26 12:06:36'),
(66, 1, 16, '2015-02-26 14:12:15'),
(67, 2, 5, '2015-03-05 14:31:35'),
(68, 1, 17, '2015-03-06 17:29:31'),
(69, 1, 17, '2015-03-06 17:36:21'),
(70, 1, 17, '2015-03-06 17:37:35'),
(71, 1, 17, '2015-03-06 18:01:25'),
(72, 1, 10, '2015-03-10 13:31:47'),
(73, 1, 10, '2015-03-10 13:34:58'),
(74, 1, 10, '2015-03-10 13:37:55'),
(75, 2, 5, '2015-03-10 13:42:10'),
(76, 2, 5, '2015-03-10 13:47:31'),
(77, 2, 5, '2015-03-10 13:47:44'),
(78, 2, 5, '2015-03-10 13:48:02'),
(79, 2, 5, '2015-03-10 13:49:01'),
(80, 2, 5, '2015-03-10 13:51:42'),
(81, 2, 5, '2015-03-10 13:53:23'),
(82, 2, 5, '2015-03-10 13:55:28'),
(83, 1, 17, '2015-03-10 13:55:45'),
(84, 2, 5, '2015-03-10 14:04:38'),
(85, 2, 5, '2015-03-10 14:06:58'),
(86, 1, 11, '2015-03-10 14:16:38'),
(87, 1, 11, '2015-03-10 14:18:09'),
(88, 1, 11, '2015-03-10 14:19:50'),
(89, 1, 11, '2015-03-10 14:22:04'),
(90, 2, 1, '2015-03-10 14:39:03'),
(91, 2, 1, '2015-03-12 22:46:06'),
(92, 2, 1, '2015-03-13 09:17:14'),
(93, 1, 10, '2015-03-13 09:17:36'),
(94, 1, 10, '2015-03-13 09:21:17'),
(95, 1, 10, '2015-03-13 13:51:13'),
(96, 2, 1, '2015-03-13 13:51:29'),
(97, 2, 1, '2015-03-16 12:45:30'),
(98, 2, 1, '2015-03-16 12:46:41'),
(99, 1, 10, '2015-03-16 12:54:40'),
(100, 1, 10, '2015-03-16 12:55:05'),
(101, 1, 10, '2015-03-16 12:55:15'),
(102, 1, 10, '2015-03-16 12:55:49'),
(103, 1, 10, '2015-03-16 12:56:06'),
(104, 1, 10, '2015-03-16 12:56:13'),
(105, 1, 10, '2015-03-16 12:56:43'),
(106, 1, 10, '2015-03-16 12:56:47'),
(107, 1, 10, '2015-03-16 12:58:27'),
(108, 1, 10, '2015-03-16 12:58:34'),
(109, 1, 10, '2015-03-16 12:59:26'),
(110, 1, 10, '2015-03-16 12:59:48'),
(111, 1, 10, '2015-03-17 09:38:05'),
(112, 1, 10, '2015-03-17 09:38:14'),
(113, 1, 10, '2015-03-17 09:38:34'),
(114, 2, 1, '2015-03-17 09:42:52'),
(115, 2, 1, '2015-03-17 09:43:48'),
(116, 2, 1, '2015-03-17 09:44:35'),
(117, 2, 1, '2015-03-17 09:45:32'),
(118, 2, 1, '2015-03-17 09:47:57'),
(119, 2, 1, '2015-03-17 09:48:09'),
(120, 2, 2, '2015-03-17 09:51:01'),
(121, 2, 2, '2015-03-17 09:53:13'),
(122, 2, 3, '2015-03-17 09:53:35'),
(123, 2, 4, '2015-03-17 09:54:19'),
(124, 1, 10, '2015-03-17 10:05:13'),
(125, 1, 10, '2015-03-17 10:06:00'),
(126, 2, 13, '2015-03-17 10:21:18'),
(127, 1, 10, '2015-03-17 11:05:51'),
(128, 1, 11, '2015-03-17 13:49:43'),
(129, 1, 11, '2015-03-17 13:55:19'),
(130, 1, 11, '2015-03-17 13:58:15'),
(131, 1, 11, '2015-03-17 13:59:00'),
(132, 1, 11, '2015-03-17 14:01:52'),
(133, 1, 11, '2015-03-17 14:09:46'),
(134, 1, 11, '2015-03-17 14:15:03'),
(135, 1, 11, '2015-03-17 14:15:45'),
(136, 1, 11, '2015-03-17 14:16:15'),
(137, 1, 11, '2015-03-17 14:16:44'),
(138, 1, 11, '2015-03-17 14:17:45'),
(139, 1, 11, '2015-03-17 14:18:10'),
(140, 1, 11, '2015-03-17 14:18:42'),
(141, 1, 11, '2015-03-17 14:19:20'),
(142, 1, 10, '2015-03-17 14:56:23'),
(143, 2, 1, '2015-03-18 17:08:04'),
(144, 2, 1, '2015-03-18 17:11:08'),
(145, 1, 10, '2015-03-18 17:13:00'),
(146, 1, 10, '2015-03-18 17:15:52'),
(147, 1, 10, '2015-03-18 17:51:01'),
(148, 1, 10, '2015-03-18 17:51:30'),
(149, 1, 10, '2015-03-18 21:37:05'),
(150, 1, 10, '2015-03-18 22:07:32'),
(151, 1, 10, '2015-03-18 22:13:06'),
(152, 1, 18, '2015-03-18 22:14:42'),
(153, 1, 18, '2015-03-18 22:18:00'),
(154, 1, 19, '2015-03-18 23:00:18'),
(155, 1, 20, '2015-03-18 23:18:56'),
(156, 1, 21, '2015-03-18 23:33:21'),
(157, 1, 10, '2015-03-19 08:55:23'),
(158, 1, 10, '2015-03-19 10:00:14'),
(159, 1, 10, '2015-03-19 10:03:46'),
(160, 1, 10, '2015-03-19 10:09:20'),
(161, 1, 10, '2015-03-19 10:10:14'),
(162, 1, 10, '2015-03-19 10:14:51'),
(163, 1, 10, '2015-03-19 10:15:33'),
(164, 1, 10, '2015-03-19 10:16:45'),
(165, 1, 10, '2015-03-19 10:16:54'),
(166, 1, 10, '2015-03-19 10:17:23'),
(167, 1, 10, '2015-03-19 10:17:33'),
(168, 1, 10, '2015-03-19 10:18:43'),
(169, 1, 10, '2015-03-19 10:19:39'),
(170, 1, 10, '2015-03-19 10:19:46'),
(171, 1, 10, '2015-03-19 10:19:56'),
(172, 1, 10, '2015-03-19 10:20:01'),
(173, 1, 10, '2015-03-19 10:21:29'),
(174, 1, 10, '2015-03-19 10:21:48'),
(175, 1, 10, '2015-03-19 10:24:35'),
(176, 1, 10, '2015-03-19 10:24:42'),
(177, 1, 20, '2015-03-19 10:44:58'),
(178, 1, 21, '2015-03-19 10:45:01'),
(179, 1, 10, '2015-03-19 14:57:04'),
(180, 1, 10, '2015-03-19 14:57:22'),
(181, 1, 10, '2015-03-19 15:40:31'),
(182, 1, 10, '2015-03-19 15:41:16'),
(183, 1, 10, '2015-03-19 15:41:36'),
(184, 1, 20, '2015-03-20 12:33:54'),
(185, 1, 21, '2015-03-20 12:34:32'),
(186, 1, 19, '2015-03-20 12:34:36'),
(187, 1, 20, '2015-03-20 12:35:50'),
(188, 1, 21, '2015-03-20 12:59:08'),
(189, 1, 20, '2015-03-20 13:03:53'),
(190, 1, 20, '2015-03-20 13:08:05'),
(191, 1, 16, '2015-03-20 13:19:00'),
(192, 1, 10, '2015-03-20 13:20:19'),
(193, 1, 16, '2015-03-20 13:23:00'),
(194, 1, 11, '2015-03-20 15:38:11'),
(195, 1, 11, '2015-03-20 15:38:45'),
(196, 1, 11, '2015-03-20 15:40:23'),
(197, 1, 11, '2015-03-20 15:42:59'),
(198, 1, 11, '2015-03-20 15:44:29'),
(199, 1, 11, '2015-03-20 15:45:19'),
(200, 1, 11, '2015-03-20 16:03:26'),
(201, 1, 11, '2015-03-20 16:04:30'),
(202, 1, 11, '2015-03-20 16:04:52'),
(203, 1, 11, '2015-03-20 16:07:35'),
(204, 1, 11, '2015-03-20 16:07:46'),
(205, 1, 11, '2015-03-20 16:09:44'),
(206, 1, 11, '2015-03-20 16:12:22'),
(207, 1, 11, '2015-03-20 16:41:41'),
(208, 1, 10, '2015-03-21 13:54:41'),
(209, 1, 10, '2015-03-22 14:01:34'),
(210, 1, 9, '2015-03-22 22:06:05'),
(211, 1, 17, '2015-03-22 22:17:58'),
(212, 1, 17, '2015-03-22 22:20:41'),
(213, 1, 17, '2015-03-22 22:22:56'),
(214, 1, 17, '2015-03-22 22:23:47'),
(215, 1, 17, '2015-03-22 22:25:33'),
(216, 1, 17, '2015-03-22 22:25:46'),
(217, 1, 17, '2015-03-22 22:25:56'),
(218, 1, 17, '2015-03-22 22:26:33'),
(219, 1, 17, '2015-03-22 22:27:10'),
(220, 1, 17, '2015-03-22 22:27:22'),
(221, 1, 17, '2015-03-23 08:03:52'),
(222, 1, 17, '2015-03-23 08:10:26'),
(223, 1, 11, '2015-03-23 08:29:39'),
(224, 1, 11, '2015-03-23 08:30:25'),
(225, 1, 11, '2015-03-23 08:33:09'),
(226, 1, 11, '2015-03-23 08:33:45'),
(227, 1, 11, '2015-03-23 08:34:07'),
(228, 1, 11, '2015-03-23 09:34:37'),
(229, 1, 11, '2015-03-23 09:34:46'),
(230, 1, 10, '2015-03-23 09:36:40'),
(231, 1, 11, '2015-03-23 09:37:28'),
(232, 1, 11, '2015-03-23 09:37:51'),
(233, 1, 9, '2015-03-23 09:38:57'),
(234, 1, 22, '2015-03-23 10:02:20'),
(235, 1, 22, '2015-03-23 10:02:34'),
(236, 1, 23, '2015-03-23 10:30:44'),
(237, 1, 23, '2015-03-23 10:32:20'),
(238, 1, 10, '2015-03-23 10:33:37'),
(239, 1, 10, '2015-03-23 10:42:11'),
(240, 1, 21, '2015-03-23 11:45:48'),
(241, 1, 17, '2015-03-23 13:44:09'),
(242, 1, 17, '2015-03-23 13:46:35'),
(243, 1, 17, '2015-03-23 13:48:26'),
(244, 1, 17, '2015-03-23 13:50:06'),
(245, 1, 17, '2015-03-23 13:50:50'),
(246, 1, 17, '2015-03-23 13:54:01'),
(247, 1, 19, '2015-03-23 14:08:53'),
(248, 1, 17, '2015-03-23 14:10:07'),
(249, 1, 17, '2015-03-23 14:10:33'),
(250, 1, 17, '2015-03-23 14:10:53'),
(251, 1, 17, '2015-03-23 14:11:26'),
(252, 1, 17, '2015-03-23 14:11:40'),
(253, 1, 17, '2015-03-23 14:39:41'),
(254, 1, 17, '2015-03-23 14:42:12'),
(255, 1, 20, '2015-03-23 14:53:34'),
(256, 1, 9, '2015-03-23 15:26:23'),
(257, 1, 9, '2015-03-23 15:27:38'),
(258, 1, 11, '2015-03-23 15:51:12'),
(259, 1, 17, '2015-03-26 19:46:09'),
(260, 1, 23, '2015-03-26 19:46:35'),
(261, 1, 23, '2015-03-26 19:56:30'),
(262, 1, 23, '2015-03-26 19:57:52'),
(263, 1, 18, '2015-03-26 20:00:08'),
(264, 1, 11, '2015-03-26 20:01:57'),
(265, 1, 22, '2015-03-26 20:03:21'),
(266, 1, 14, '2015-03-26 20:06:21'),
(267, 1, 13, '2015-03-26 20:06:21'),
(268, 1, 23, '2015-03-26 20:06:35'),
(269, 1, 22, '2015-03-26 20:06:39'),
(270, 1, 14, '2015-03-26 20:07:02'),
(271, 1, 13, '2015-03-26 20:07:02'),
(272, 1, 14, '2015-03-26 20:07:17'),
(273, 1, 13, '2015-03-26 20:07:17'),
(274, 1, 14, '2015-03-26 20:08:06'),
(275, 1, 13, '2015-03-26 20:08:06'),
(276, 1, 12, '2015-03-26 20:08:39'),
(277, 1, 12, '2015-03-26 20:08:59'),
(278, 1, 12, '2015-03-26 20:09:11'),
(279, 1, 12, '2015-03-26 20:09:20'),
(280, 1, 11, '2015-03-27 09:43:48'),
(281, 1, 23, '2015-03-27 10:11:49'),
(282, 1, 23, '2015-03-27 10:11:58'),
(283, 1, 23, '2015-03-27 10:12:47'),
(284, 1, 23, '2015-03-27 10:13:27'),
(285, 1, 23, '2015-03-27 10:16:23'),
(286, 1, 23, '2015-03-27 10:16:29'),
(287, 1, 10, '2015-03-27 11:22:10'),
(288, 1, 10, '2015-03-27 11:23:57'),
(289, 1, 10, '2015-03-27 11:24:20'),
(290, 1, 10, '2015-03-27 11:26:25'),
(291, 1, 10, '2015-03-27 11:27:56'),
(292, 1, 10, '2015-03-27 11:30:24'),
(293, 1, 10, '2015-03-27 11:30:55'),
(294, 1, 10, '2015-03-27 11:38:28'),
(295, 1, 10, '2015-03-27 11:40:21'),
(296, 1, 10, '2015-03-27 11:42:34'),
(297, 1, 10, '2015-03-27 11:43:57'),
(298, 1, 11, '2015-03-27 11:54:11'),
(299, 1, 10, '2015-03-27 12:09:49'),
(300, 1, 24, '2015-03-27 12:16:47'),
(301, 1, 25, '2015-03-27 14:52:15'),
(302, 1, 9, '2015-03-28 20:13:01'),
(303, 1, 9, '2015-03-28 20:22:29'),
(304, 1, 9, '2015-03-28 20:24:03'),
(305, 1, 13, '2015-03-28 20:25:28'),
(306, 1, 23, '2015-03-28 20:50:15'),
(307, 1, 23, '2015-03-28 20:51:28'),
(308, 1, 23, '2015-03-28 20:52:17'),
(309, 1, 23, '2015-03-28 20:54:54'),
(310, 1, 23, '2015-03-28 20:56:12'),
(311, 1, 23, '2015-03-28 20:59:35'),
(312, 1, 23, '2015-03-28 21:01:36'),
(313, 1, 23, '2015-03-28 21:02:21'),
(314, 1, 23, '2015-03-28 21:03:37'),
(315, 1, 22, '2015-03-29 20:41:26'),
(316, 1, 9, '2015-03-29 20:57:07'),
(317, 1, 13, '2015-03-29 21:05:51'),
(318, 1, 9, '2015-03-29 21:06:00'),
(319, 1, 9, '2015-03-29 21:06:22'),
(320, 1, 22, '2015-03-29 21:06:50'),
(321, 1, 17, '2015-03-29 21:06:56'),
(322, 1, 23, '2015-03-29 21:09:40'),
(323, 1, 23, '2015-03-29 21:24:43'),
(324, 1, 23, '2015-03-29 21:27:49'),
(325, 1, 23, '2015-03-29 21:31:05'),
(326, 1, 13, '2015-03-29 21:39:38'),
(327, 1, 13, '2015-03-29 22:04:26'),
(328, 1, 13, '2015-03-29 22:04:43'),
(329, 1, 23, '2015-03-29 22:06:06'),
(330, 1, 13, '2015-03-29 22:06:40'),
(331, 1, 9, '2015-03-29 22:08:12'),
(332, 1, 13, '2015-03-29 22:19:00'),
(333, 1, 13, '2015-03-29 22:23:05'),
(334, 1, 13, '2015-03-29 22:25:26'),
(335, 1, 13, '2015-03-29 22:27:10'),
(336, 1, 13, '2015-03-29 22:33:33'),
(337, 1, 13, '2015-03-29 22:34:46'),
(338, 1, 13, '2015-03-29 22:37:01'),
(339, 1, 9, '2015-03-29 22:37:05'),
(340, 1, 23, '2015-03-29 22:37:33'),
(341, 1, 13, '2015-03-29 22:39:56'),
(342, 1, 13, '2015-03-29 22:41:17'),
(343, 1, 9, '2015-03-29 22:41:51'),
(344, 1, 9, '2015-03-29 22:45:28'),
(345, 1, 13, '2015-03-29 22:47:26'),
(346, 1, 23, '2015-03-29 22:49:36'),
(347, 1, 9, '2015-03-29 22:50:47'),
(348, 1, 13, '2015-03-29 22:51:00'),
(349, 1, 23, '2015-03-29 22:51:11'),
(350, 1, 23, '2015-03-29 22:52:07'),
(351, 1, 23, '2015-03-29 22:52:17'),
(352, 1, 9, '2015-03-30 09:51:18'),
(353, 1, 11, '2015-03-30 10:02:06'),
(354, 1, 11, '2015-03-30 10:04:19'),
(355, 1, 10, '2015-03-30 10:05:13'),
(356, 1, 11, '2015-03-30 10:05:20'),
(357, 1, 10, '2015-03-30 10:05:30'),
(358, 1, 11, '2015-03-30 10:05:37'),
(359, 1, 9, '2015-03-30 10:30:47'),
(360, 1, 9, '2015-03-30 10:31:24'),
(361, 1, 23, '2015-03-30 10:31:42'),
(362, 1, 10, '2015-03-30 10:37:59'),
(363, 1, 11, '2015-03-30 10:38:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `method`
--

CREATE TABLE IF NOT EXISTS `method` (
`id_method` int(11) NOT NULL,
  `nama_method` varchar(50) NOT NULL,
  `parameter` varchar(500) NOT NULL,
  `method_request` char(5) NOT NULL,
  `output` varchar(500) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `method`
--

INSERT INTO `method` (`id_method`, `nama_method`, `parameter`, `method_request`, `output`, `deskripsi`) VALUES
(1, 'pegawai/find_all', 'api_key', 'GET', 'List', 'Method untuk menampilkan semua data PNS Kota Bogor. Output yang dihasilkan berupa JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(2, 'pegawai/find_by_nama', 'nama, api_key', 'GET', 'List, Data tunggal', 'Method untuk menampilkan data pegawai berdasarkan nama pegawai, karena nama yang dimasukkan sebagai parameter dapat menghasilkan lebih dari 1 data, maka keluarannya akan berupa list atau data tunggal. Keluaran dari method yang berupa list atau data tunggal direpresentasikan dalam bentuk JSON. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah nama yang berisikan karakter (ex. Rini), api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(3, 'pegawai/find_by_nip', 'nip, api_key', 'GET', 'Data tunggal', 'Method untuk menampilkan data pegawai berdasarkan nip pegawai. Output yang dihasilkan adalah JSON. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah nip dari pegawai, api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(4, 'pegawai/find_by_unit_kerja', 'unit_kerja, api_key', 'GET', 'List', 'Method untuk menampilkan data pegawai berdasarkan unit kerja pegawai. Pencarian pegawai berdasarkan unit kerja dapat menghasilkan lebih dari 1 data pegawai, maka keluaran dari REST akan menghasilkan data pegawai dalam bentuk JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah unit_kerja yang berisikan nilai karakter dari nama unit kerja (ex. Badan Kepegawaian Pendidikan dan Pelatihan), api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(5, 'absensi/get_hadir', 'unit_kerja, tgl, api_key', 'GET', 'List, Data tunggal', 'Method untuk mencari jumlah kehadiran pegawai dari masing-masing unit kerja. Pencarian kehadiran per unit kerja ini berdasarkan tanggal dan unit kerja, method akan menghasilkan jumlah kehadiran dari setiap unit kerja dan menampilkan jumlah pegawai yang ada di unit kerja tersebut. Output yang dihasilkan adalah JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah unit_kerja yang berisikan nilai karakter nama unit kerja (ex. Badan Kepegawaian Pendidikan dan Pelatihan), tgl berformat YYYY-MM-DD (ex. 2015-02-02), api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(6, 'absensi/get_sakit', 'unit_kerja, tgl, api_key', 'GET', 'List, Data tunggal', 'Method yang menghasilkan jumlah pegawai yang sakit dalam periode hari dan berdasarkan unit kerja. Output yang dihasilkan berupa data yang berbentuk JSON. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah unit_kerja yang berisikan nilai karakter nama unit kerja (ex. Badan Kepegawaian Pendidikan dan Pelatihan), tgl berformat YYYY-MM-DD (ex. 2015-02-02), api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(7, 'absensi/get_izin', 'unit_kerja, tgl, api_key', 'GET', 'List, Data tunggal', 'Method yang menghasilkan jumlah pegawai yang izin pada periode hari dan berdasarkan unit kerja. Method ini menghasilkan JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah unit_kerja yang berisikan nilai karakter nama unit kerja (ex. Badan Kepegawaian Pendidikan dan Pelatihan), tgl berformat YYYY-MM-DD (ex. 2015-02-02), api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(8, 'absensi/get_alpha', 'unit_kerja, tgl, api_key', 'GET', 'List, Data tunggal', 'Method yang menghasilkan jumlah pegawai yang tidak hadir dan tidak ada keterangan apapun. Method ini menghasilkan data pegawai berdasarkan periode hari dan berdasarkan unit kerja. Output yang dihasilkan adalah JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah unit_kerja yang berisikan nilai karakter nama unit kerja (ex. Badan Kepegawaian Pendidikan dan Pelatihan), tgl berformat YYYY-MM-DD (ex. 2015-02-02), api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(9, 'unit_kerja/get_all', 'api_key', 'POST', 'List', 'Menghasilkan data semua unit kerja. Data yang dihasilkan dari method ini adalah JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(10, 'pegawai_mobile/login', 'nip, password, imei, android_api_level, api_key', 'POST', 'Data tunggal', 'Method yang memungkinkan pengguna untuk masuk ke dalam sistem; mobile ataupun web. Method ini akan menghasilkan data JSON yang mengembalikan data pegawai berdasarkan nip yang dimasukkan oleh pengguna. Output data pegawai ini akan ditampilkan ketika nip dan password yang dimasukkan oleh pengguna valid. Saat data masukkan (parameter) tidak valid JSON list akan mengembalikan nilai tidak sama dengan 100 untuk atribut request_status. Parameter yang dibutuhkan adalah nip dari pegawai, password, imei, android_api_level yang berisikan mobile atau web, api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(11, 'absensi_mobile/hadir', 'id_pegawai, nip, password, latitude, longitude, imei, api_key', 'POST', 'List', 'Method yang memungkinkan aplikasi untuk menambah kehadiran pegawai bedasarkan pegawai. Penambahan absensi ini hanya dapat diakses untuk satu pegawai saja. Output yang dihasilkan oleh method ini berupa JSON list yang hanya memiliki atribut request_status. Jika method mengembalikan nilai request_status tidak sama dengan 100, penambahan absensi tidak berhasil atau ada kesalahan lain sesuai dengan nomor request_status yang dikembalikan. Sedangkan method akan mengembalikan nilai request_status sama dengan 100 ketika penambahan absensi sukses. Parameter yang dibutuhkan adalah id_pegawai yang bernilai integer, nip, password, latitude (ex. -6.595074), longitude (ex. 106.793595), imei yang unik dari setiap device, api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(12, 'kgb/get_all', 'tahun, bulan, api_key', 'POST', 'List', 'Method yang menghasilkan semua data kenaikan gaji berkala berdasarkan tahun dan bulan. Keluaran dari pemanggilan method ini adalah JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah tahun (ex. 2015), bulan (ex. 01 atau 1), api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(13, 'unit_kerja/get_by_unit_kerja', 'unit_kerja, api_key', 'POST', 'List, Data tunggal', 'Method yang menghasilkan data unit kerja berdasarkan unit kerja yang dicari. Output yang dihasilkan adalah JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah unit_kerja yang berisikan nilai karakter yang menunjukkan nama dari unit kerja (ex. Badan Kepegawaian Pendidikan dan Pelatihan), api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(14, 'kgb/get_by_unit_kerja', 'unit_kerja, tahun, bulan, api_key', 'POST', 'List, Data tunggal', 'Method yang menampilkan data kenaikan gaji berkala berdasarkan unit kerja, tahun dan bulan. Keluaran yang dihasilkan adalah JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah unit_kerja yang bernilai integer atau id_unit_kerja (ex. 4089) yang menunjukkan id_unit_kerja dari unit kerja yang hendak ditampilkan, tahun (ex. 2015), bulan (ex. 01 atau 1), api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(16, 'absensi_mobile/tidak_hadir', 'id_pegawai, status, api_key', 'POST', 'List', 'Method yang memungkinkan aplikasi untuk menambahkan data pegawai yang tidak hadir. Penambahan pegawai yang tidak hadir ini hanya berlaku untuk satu pegawai, artinya untuk menambahkan absensi ketidakhadiran hanya dapat diakses untuk satu pegawai saja. Output yang dihasilkan oleh method ini berupa JSON list yang hanya memiliki atribut request_status. Jika method mengembalikan nilai request_status tidak sama dengan 100, penambahan absensi tidak berhasil atau ada kesalahan lain sesuai dengan nomor request_status yang dikembalikan. Sedangkan method akan mengembalikan nilai request_status sama dengan 100 ketika penambahan absensi sukses. Parameter yang dibutuhkan adalah id_pegawai yang bernilai integer (ex. id_pegawai=1100), status yang bernilai ABSENT;EXCUSED;SICK, api_key yang berisi nilai unik dari aplikasi yang digunakan.	'),
(17, 'post/get_timeline', 'jumlah, api_key', 'POST', 'List', 'Method untuk menghasilkan data post pegawai sesuai dengan jumlah parameter jumlah. Method ini memungkinkan aplikasi untuk menampilkan data post yang di posting oleh pegawai. Keluaran dari method ini adalah JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah jumlah yang berisikan nilai integer yang menunjukkan jumlah dari data post yang akan ditampilkan dari database, api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(18, 'absensi_mobile/get_attendance', 'id_pegawai, api_key', 'POST', 'List, Data tunggal', 'Method untuk menampilkan riwayat kehadiran pegawai pada bulan ini. Method akan menghasilkan data JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah id_pegawai yang bernilai integer (ex. id_pegawai=1100), api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(19, 'post/get_comments', 'parent_id, api_key', 'POST', 'List', 'Method yang menampilkan komentar sesuai dengan parent_id dari post pegawai yang dimasukkan. Keluaran dari method ini adalah JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah parent_id yang menunjukkan id dari post yang akan ditampilkan data komentarnya (ex. 101), api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(20, 'post/add_comments', 'msg, id_pegawai, parent_id, api_key', 'POST', 'List', 'Method untuk menambahkan komentar pada data post pegawai. Output yang dihasilkan oleh method ini berupa JSON list yang hanya memiliki atribut request_status. Jika method mengembalikan nilai request_status tidak sama dengan 100, penambahan absensi tidak berhasil atau ada kesalahan lain sesuai dengan nomor request_status yang dikembalikan. Sedangkan method akan mengembalikan nilai request_status sama dengan 100 ketika penambahan absensi sukses. Parameter yang dibutuhkan adalah msg yang berisikan pesan dari komentar yang akan dimasukkan ke database, id_pegawai yang berisikan nilai integer (ex. 1100), parent_id yang menunjukkan id post yang dikomentar (ex. 101), api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(21, 'post/add_message', 'msg, id_pegawai, api_key', 'POST', 'List', 'Method untuk menambahkan message/pesan yang di posting oleh pegawai. Output yang dihasilkan oleh method ini berupa JSON list yang hanya memiliki atribut request_status. Jika method mengembalikan nilai request_status tidak sama dengan 100, penambahan absensi tidak berhasil atau ada kesalahan lain sesuai dengan nomor request_status yang dikembalikan. Sedangkan method akan mengembalikan nilai request_status sama dengan 100 ketika penambahan absensi sukses. Parameter yang dibutuhkan adalah msg yang berisikan pesan dari post yang akan dimasukkan ke database, id_pegawai yang berisikan nilai integer (ex. 1100), api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(22, 'unit_kerja/get_id_nama', 'api_key', 'POST', 'List', 'Method yang digunakan untuk menampilkan data id unit kerja dan nama unit kerja. Keluaran yang dihasilkan oleh method ini adalah JSON. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(23, 'unit_kerja/get_location_uk', 'id_pegawai, api_key', 'POST', 'List, Data tunggal', 'Method ini digunakan untuk mendapatkan data id unit kerja, latitude dan longitude berdasarkan id pegawai. Method ini mengembanlikan keluaran JSON. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah id_pegawai (ex. 1100), api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(24, 'statistic/getStatisticBidangPendidikan', 'api_key', 'POST', 'List', 'Method ini digunakan untuk menampilkan data value dan attribute dari masing-masing bidang pendidikan PNS Kota Bogor. Fungsi ini digunakan untuk menunjukkan banyak pendidikan akhir PNS Kota Bogor. Output yang dihasilkan adalah JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(25, 'statistic/getStatisticFungsional', 'api_key', 'POST', 'List', 'Method yang mengembalikan nilai value dan attribute untuk data fungsional. Data ini dipakai untuk penampilan data statistik. Output yang dihasilkan adalah JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(26, 'statistic/getStatisticGolongan', 'api_key', 'POST', 'List', 'Method yang mengembalikan nilai value dan attribute untuk data golongan. Data ini dipakai untuk penampilan data statistik. Output yang dihasilkan adalah JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(27, 'statistic/getStatisticJabatan', 'api_key', 'POST', 'List', 'Method yang mengembalikan nilai value dan attribute untuk data jabatan PNS Kota Bogor. Data ini dipakai untuk penampilan data statistik. Output yang dihasilkan adalah JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(28, 'statistic/getStatisticJenisKelamin', 'api_key', 'POST', 'List', 'Method yang mengembalikan nilai value dan attribute untuk data jenis kelamin PNS Kota Bogor. Data ini dipakai untuk penampilan data statistik. Output yang dihasilkan adalah JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(29, 'statistic/getStatisticLulusanPt', 'api_key', 'POST', 'List', 'Method yang mengembalikan nilai value dan attribute untuk data lulusan perguruan tinggi PNS Kota Bogor. Data ini dipakai untuk penampilan data statistik. Output yang dihasilkan adalah JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(30, 'statistic/getStatisticPendidikan', 'api_key', 'POST', 'List', 'Method yang mengembalikan nilai value dan attribute untuk data pendidikan PNS Kota Bogor. Data ini dipakai untuk penampilan data statistik. Output yang dihasilkan adalah JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(31, 'statistic/getStatisticStruktural', 'api_key', 'POST', 'List', 'Method yang mengembalikan nilai value dan attribute untuk data struktural PNS Kota Bogor. Data ini dipakai untuk penampilan data statistik. Output yang dihasilkan adalah JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah api_key yang berisi nilai unik dari aplikasi yang digunakan.'),
(32, 'statistic/getStatisticUmur', 'api_key', 'POST', 'List', 'Method yang mengembalikan nilai value dan attribute untuk data umur PNS Kota Bogor. Data ini dipakai untuk penampilan data statistik. Output yang dihasilkan adalah JSON list. Data JSON memiliki atribut request_status yang menyatakan apakah data yang diinginkan berhasil diambil dari basis data ataukah masukkan dari method tidak valid. Atribut request_status akan bernilai sama dengan 100 ketika method yang dipanggil memiliki masukkan (parameter) yang bernilai benar dan berhasil mengambil data riwayat absensi pegawai dari basis data. Parameter yang dibutuhkan adalah api_key yang berisi nilai unik dari aplikasi yang digunakan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` char(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `email`, `no_telp`, `flag`) VALUES
(1, 'simpeg', 'simpeg', '58ae088ac10231f7a94d51d29a52b77d', 'bkpp.kotabogor.go.id', '', 0),
(2, 'Fernalia', 'fernalia', '81dc9bdb52d04dc20036dbd8313ed055', 'fernalia.h@gmail.com', '089681760016', 1),
(3, 'Fernalia', 'fernalia', 'fc3cee5d6a37bd5732a96e6f87ffaf2d', 'fernaliahalim@yahoo.co.id', '089681760016', 1),
(5, 'Fernalia', 'fernalia.h', 'fc3cee5d6a37bd5732a96e6f87ffaf2d', 'fernajelek@fena.com', '089681760016', 1),
(6, 'Fernalia Halim', 'fernaliahalim', 'e7f1ecd1e17d22f652155b5d26dea4a2', 'fernaliahalim@yahoo.co.id', '089681760016', 1),
(7, 'Fernalia Halim', 'ferna', '81dc9bdb52d04dc20036dbd8313ed055', 'fernalia.h@gmail.com', '089681760016', 1),
(8, 'Fernalia', 'fernalia.halim', 'fc3cee5d6a37bd5732a96e6f87ffaf2d', 'fernaliahalim@hotmail.com', '089681760016', 0),
(9, 'Fernaa', 'fernaa', 'e9b6c7567651fa8e1eed240b8b62b1c4', 'fernaa@hotmail.com', '089681760016', 1),
(13, 'Simpeg', 'simpeg', '58ae088ac10231f7a94d51d29a52b77d', 'bkpp.kotabogor@kotabogor.go.id', '0251787347', 1),
(14, 'Simpeg Kota Bogor', 'simpegkotabogor', '58ae088ac10231f7a94d51d29a52b77d', 'bkpp.kotabogor@kotabogor.go.id', '0251787347', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_app`
--

CREATE TABLE IF NOT EXISTS `user_app` (
`id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_aplikasi` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_app`
--

INSERT INTO `user_app` (`id`, `id_user`, `id_aplikasi`) VALUES
(1, 2, 1),
(2, 3, 2),
(3, 5, 1),
(4, 6, 2),
(5, 7, 1),
(6, 8, 1),
(7, 8, 2),
(8, 5, 2),
(9, 9, 2),
(10, 3, 1),
(13, 13, 1),
(15, 14, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_akses`
--
ALTER TABLE `api_akses`
 ADD PRIMARY KEY (`id_api_akses`), ADD KEY `id_aplikasi` (`id_aplikasi`), ADD KEY `id_method` (`id_method`);

--
-- Indexes for table `aplikasi`
--
ALTER TABLE `aplikasi`
 ADD PRIMARY KEY (`id_aplikasi`);

--
-- Indexes for table `dum_user_app`
--
ALTER TABLE `dum_user_app`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `error_status`
--
ALTER TABLE `error_status`
 ADD PRIMARY KEY (`id_error`);

--
-- Indexes for table `log_api`
--
ALTER TABLE `log_api`
 ADD PRIMARY KEY (`id_log`), ADD KEY `id_method` (`id_method`), ADD KEY `id_aplikasi` (`id_aplikasi`);

--
-- Indexes for table `method`
--
ALTER TABLE `method`
 ADD PRIMARY KEY (`id_method`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_app`
--
ALTER TABLE `user_app`
 ADD PRIMARY KEY (`id`), ADD KEY `id_aplikasi` (`id_aplikasi`), ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_akses`
--
ALTER TABLE `api_akses`
MODIFY `id_api_akses` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `aplikasi`
--
ALTER TABLE `aplikasi`
MODIFY `id_aplikasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dum_user_app`
--
ALTER TABLE `dum_user_app`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_api`
--
ALTER TABLE `log_api`
MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=364;
--
-- AUTO_INCREMENT for table `method`
--
ALTER TABLE `method`
MODIFY `id_method` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user_app`
--
ALTER TABLE `user_app`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `api_akses`
--
ALTER TABLE `api_akses`
ADD CONSTRAINT `api_akses_ibfk_1` FOREIGN KEY (`id_aplikasi`) REFERENCES `aplikasi` (`id_aplikasi`),
ADD CONSTRAINT `api_akses_ibfk_2` FOREIGN KEY (`id_method`) REFERENCES `method` (`id_method`);

--
-- Ketidakleluasaan untuk tabel `log_api`
--
ALTER TABLE `log_api`
ADD CONSTRAINT `log_api_ibfk_1` FOREIGN KEY (`id_method`) REFERENCES `method` (`id_method`),
ADD CONSTRAINT `log_api_ibfk_2` FOREIGN KEY (`id_aplikasi`) REFERENCES `aplikasi` (`id_aplikasi`);

--
-- Ketidakleluasaan untuk tabel `user_app`
--
ALTER TABLE `user_app`
ADD CONSTRAINT `user_app_ibfk_1` FOREIGN KEY (`id_aplikasi`) REFERENCES `aplikasi` (`id_aplikasi`),
ADD CONSTRAINT `user_app_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
