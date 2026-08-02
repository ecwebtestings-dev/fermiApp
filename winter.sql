-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2026 at 07:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winter`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `preferred_date` date NOT NULL,
  `contact` varchar(20) NOT NULL,
  `service_address` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `user_id`, `service_type`, `preferred_date`, `contact`, `service_address`, `status`, `created_at`) VALUES
(1, 5, 'CCTV Camera installation', '2026-02-26', '0777891441', 'Kampala', 0, '2026-02-23 13:42:33'),
(2, 7, 'Wiring', '2026-02-26', '07485556762', 'lira', 0, '2026-02-23 16:48:47'),
(3, 4, 'Electrical installation', '2026-02-26', '0747555474', 'Yumbe', 0, '2026-02-24 16:54:58'),
(4, 4, 'Internet connection', '2026-02-27', '0788983275', 'Kampala Uganda', 0, '2026-02-24 16:55:33'),
(5, 4, 'Automatic gates installation', '2026-02-28', '0747555474', 'Soroti', 0, '2026-02-24 16:56:19'),
(6, 9, 'cctv', '2026-02-25', '', 'Bukedea', 0, '2026-02-25 06:48:47'),
(7, 5, 'Automatic gates', '2026-02-25', '0786777709', 'Arua', 0, '2026-02-25 06:48:47'),
(8, 4, 'wiring house', '2026-02-24', '0777891441', 'Mbarara', 0, '2026-02-25 06:51:13'),
(13, 7, 'solar installation', '2026-03-13', '0777891441', 'kampala', 0, '2026-02-25 07:13:22'),
(14, 5, 'AC installation', '2026-03-24', '0786777709', 'jinja', 0, '2026-02-25 07:13:22'),
(15, 12, 'Electrical installation', '2026-02-27', '0767222023', 'pallisa', 0, '2026-02-27 16:58:50'),
(16, 13, 'Power installation', '2026-03-29', '0777891441', 'Oyam', 0, '2026-03-01 06:32:48'),
(17, 13, 'Cctv', '2026-03-29', '0777891441', 'Lira', 0, '2026-03-01 06:49:36'),
(18, 13, 'Electrical installation', '2026-03-07', '0747555474', 'ayere', 0, '2026-03-01 06:59:21'),
(19, 13, 'ELECTRIC FENCE', '2026-03-13', '0747555474', 'Koboko', 0, '2026-03-01 07:00:34'),
(20, 13, 'AC', '2026-03-11', '0777891551', 'Ajumani', 0, '2026-03-01 07:01:48'),
(21, 13, 'WAN/LAN Setup', '2026-03-10', '0747555474', 'mbale', 0, '2026-03-01 08:04:47'),
(22, 4, 'Line Power Quality Checks', '2026-03-24', '0777891551', 'hoima', 0, '2026-03-01 08:05:22'),
(23, 13, 'Elevators & Escalators Installation', '2026-03-29', '077558777777', 'Iokk', 0, '2026-03-01 08:22:07'),
(24, 13, 'CCTV Surveillance Installation', '2026-03-14', '0788983275', 'AYERE', 0, '2026-03-01 08:36:04'),
(25, 13, 'Access Control Systems', '2026-03-29', '077777756623', 'Yeyi', 0, '2026-03-01 08:50:36'),
(26, 16, 'Smart Door Installation', '2026-03-02', '0747555474', 'kumi', 0, '2026-03-02 09:04:55'),
(27, 12, 'Access Control Systems', '2026-03-02', '077558777777', 'Lira', 0, '2026-03-02 09:19:40'),
(28, 12, 'Wiring for offices and shops', '2026-03-11', '0788983275', 'arua', 0, '2026-03-02 14:10:20'),
(29, 12, 'Access Control Systems', '2026-03-26', '0777891441', 'Aleptong', 0, '2026-03-02 17:53:27'),
(30, 12, 'CCTV Camera Installation', '2026-03-20', '077777756623', 'Ayere', 0, '2026-03-02 18:14:30'),
(31, 12, 'Electrical System Maintenance', '2026-03-07', '077558777777', 'Ayere', 0, '2026-03-02 18:40:08'),
(32, 12, 'Water Heaters Installation', '2026-03-27', '0777891441', 'Arua', 0, '2026-03-02 18:40:55'),
(33, 12, 'Electrical System Maintenance', '2026-03-28', '077', 'Kla', 0, '2026-03-02 18:41:30'),
(34, 12, 'Water Heaters Installation', '2026-03-29', '0777891441', 'Gule', 0, '2026-03-02 18:42:34'),
(35, 12, 'Line Power Quality Checks', '2026-04-01', '0777891441', 'Ayere', 0, '2026-03-02 18:44:39'),
(36, 12, 'Panel Upgradations', '2026-03-29', '0777891441', 'Ayere', 0, '2026-03-02 18:45:20'),
(37, 12, 'CCTV Surveillance Installation', '2026-03-28', '0777891441', 'Sfgc', 0, '2026-03-02 18:50:23'),
(38, 12, 'Whole House Surge Protector', '2026-03-26', '0777891441', '123', 0, '2026-03-02 18:52:14'),
(39, 19, 'Whole House Surge Protector', '2026-03-06', '0767222023', 'kla', 0, '2026-03-06 10:07:10'),
(40, 12, 'Electrical Safety Check', '2026-03-06', '0767222023', 'Jinja', 0, '2026-03-06 12:20:15'),
(41, 12, 'Elevators & Escalators Installation', '2026-04-04', '0767222023', 'kumi', 0, '2026-03-06 12:21:11'),
(42, 12, 'Electrical System Maintenance', '2026-03-06', '0767222023', 'kla', 0, '2026-03-06 12:29:42'),
(43, 33, 'Line Power Quality Checks', '2026-03-06', '0767222023', 'kla', 0, '2026-03-06 14:06:54'),
(44, 37, 'Wiring for offices and shops', '2026-05-01', '0767222023', 'lira', 0, '2026-05-01 11:38:16'),
(45, 36, 'CCTV Camera Installation', '2026-05-01', '0737730938', 'kenya', 0, '2026-05-01 11:43:06'),
(46, 37, 'Electrical Safety Check', '2026-05-01', '0767222023', 'kenya', 0, '2026-05-01 12:44:16'),
(47, 35, 'Air Conditioning (AC)', '2026-05-09', '0737730938', 'Kira', 0, '2026-05-01 17:35:40'),
(48, 36, 'Air Conditioning (AC)', '2026-05-09', '0737730938', 'YUbe', 0, '2026-05-09 07:58:13'),
(49, 35, 'Panel Upgradations', '2026-05-30', '0747444848', 'Jinja', 0, '2026-05-09 07:59:32'),
(50, 36, 'Electrical Safety Check', '2026-05-30', '0747444848', '0797048917', 0, '2026-05-09 08:18:36'),
(51, 36, 'Panel Upgradations', '2026-06-06', '0737730938', 'cgvhbnjghfdxcv', 0, '2026-06-06 13:04:12'),
(52, 36, 'Panel Upgradations', '2026-06-07', '0737730938', 'KIRUHURA', 0, '2026-06-06 13:39:49'),
(53, 43, 'Electrical Safety Check', '2026-06-27', '0775556667', 'Alrptong', 0, '2026-06-18 15:15:08'),
(54, 47, 'Electrical Safety Check', '2026-06-28', '8231415127', 'Arua', 0, '2026-06-21 14:59:33'),
(55, 52, 'POS & Tracking Solutions', '2026-07-24', '0777891441', 'Arua', 0, '2026-07-06 13:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `appointments_archive`
--

CREATE TABLE `appointments_archive` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `preferred_date` date NOT NULL,
  `contact` varchar(20) NOT NULL,
  `service_address` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments_archive`
--

INSERT INTO `appointments_archive` (`id`, `user_id`, `service_type`, `preferred_date`, `contact`, `service_address`, `status`, `created_at`) VALUES
(1, 5, 'CCTV Camera installation', '2026-02-26', '0777891441', 'Kampala', 0, '2026-02-23 13:42:33'),
(2, 7, 'Wiring', '2026-02-26', '07485556762', 'lira', 0, '2026-02-23 16:48:47'),
(3, 4, 'Electrical installation', '2026-02-26', '0747555474', 'Yumbe', 0, '2026-02-24 16:54:58'),
(4, 4, 'Internet connection', '2026-02-27', '0788983275', 'Kampala Uganda', 0, '2026-02-24 16:55:33'),
(5, 4, 'Automatic gates installation', '2026-02-28', '0747555474', 'Soroti', 0, '2026-02-24 16:56:19'),
(9, 10, 'Pos', '2026-01-25', '0777891441', 'kumi', 0, '2026-02-25 06:54:51'),
(10, 11, 'LAN', '2026-01-25', '0777891441', 'Pallisa', 0, '2026-02-25 07:01:21'),
(11, 8, 'WAN', '2026-01-25', '0786777709', '', 0, '2026-02-25 07:01:21'),
(12, 10, 'Point of sale', '2026-01-25', '0777257523', 'KUMI', 0, '2026-02-25 07:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `audit_logs`
--

CREATE TABLE `audit_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audit_logs`
--

INSERT INTO `audit_logs` (`id`, `user_id`, `action`, `created_at`) VALUES
(312, 4, 'LOGIN SUCCESS', '2026-03-02 19:24:06'),
(313, 4, 'LOGIN FAILED', '2026-03-03 10:30:26'),
(314, 4, 'LOGIN FAILED', '2026-03-03 10:30:35'),
(315, 4, 'LOGIN SUCCESS', '2026-03-03 10:30:44'),
(316, 19, 'SIGN UP (user)', '2026-03-06 10:04:50'),
(317, 19, 'LOGIN SUCCESS', '2026-03-06 10:05:02'),
(318, 19, 'Created appointment for Whole House Surge Protector on 2026-03-06', '2026-03-06 10:07:10'),
(319, 12, 'LOGIN SUCCESS', '2026-03-06 10:07:28'),
(320, 4, 'LOGIN SUCCESS', '2026-03-06 10:07:44'),
(321, 4, 'LOGIN SUCCESS', '2026-03-06 10:19:38'),
(322, 4, 'LOGIN SUCCESS', '2026-03-06 10:22:31'),
(323, 12, 'LOGIN SUCCESS', '2026-03-06 10:24:09'),
(324, 20, 'SIGN UP (user)', '2026-03-06 10:55:31'),
(325, 20, 'LOGIN SUCCESS', '2026-03-06 10:55:57'),
(326, 21, 'SIGN UP (user)', '2026-03-06 11:02:55'),
(327, 21, 'LOGIN FAILED', '2026-03-06 11:03:09'),
(328, 21, 'LOGIN SUCCESS', '2026-03-06 11:03:19'),
(329, 21, 'LOGIN SUCCESS', '2026-03-06 11:14:29'),
(330, 12, 'LOGIN SUCCESS', '2026-03-06 11:16:22'),
(331, 4, 'LOGIN SUCCESS', '2026-03-06 11:20:11'),
(332, 12, 'LOGIN SUCCESS', '2026-03-06 11:48:20'),
(333, 12, 'Created appointment for Electrical Safety Check on 2026-03-06', '2026-03-06 12:20:15'),
(334, 12, 'Created appointment for Elevators & Escalators Installation on 2026-04-04', '2026-03-06 12:21:11'),
(335, 22, 'SIGN UP (user)', '2026-03-06 12:23:14'),
(336, 23, 'SIGN UP (user)', '2026-03-06 12:24:07'),
(337, 24, 'SIGN UP (user)', '2026-03-06 12:26:49'),
(338, 23, 'LOGIN FAILED', '2026-03-06 12:28:44'),
(339, 23, 'LOGIN FAILED', '2026-03-06 12:28:53'),
(340, 12, 'LOGIN SUCCESS', '2026-03-06 12:29:20'),
(341, 12, 'Created appointment for Electrical System Maintenance on 2026-03-06', '2026-03-06 12:29:42'),
(342, 25, 'SIGN UP (user)', '2026-03-06 12:34:22'),
(343, 26, 'SIGN UP (user)', '2026-03-06 12:35:34'),
(344, 27, 'SIGN UP (user)', '2026-03-06 12:40:08'),
(345, 28, 'SIGN UP (user)', '2026-03-06 12:44:29'),
(346, 29, 'SIGN UP (user)', '2026-03-06 12:46:06'),
(347, 4, 'LOGIN SUCCESS', '2026-03-06 12:46:20'),
(355, 30, 'SIGN UP (user)', '2026-03-06 12:47:49'),
(356, 4, 'LOGIN SUCCESS', '2026-03-06 12:47:55'),
(357, 5, 'LOGIN FAILED', '2026-03-06 12:48:16'),
(358, 4, 'LOGIN SUCCESS', '2026-03-06 12:48:37'),
(359, 5, 'LOGIN FAILED', '2026-03-06 12:49:15'),
(360, 5, 'LOGIN FAILED', '2026-03-06 12:49:24'),
(361, 5, 'LOGIN FAILED', '2026-03-06 12:50:00'),
(362, 23, 'LOGIN FAILED', '2026-03-06 12:50:50'),
(363, 23, 'LOGIN SUCCESS', '2026-03-06 12:51:08'),
(364, 12, 'LOGIN SUCCESS', '2026-03-06 12:51:59'),
(365, 4, 'LOGIN SUCCESS', '2026-03-06 12:53:50'),
(366, 12, 'LOGIN SUCCESS', '2026-03-06 12:53:58'),
(367, 31, 'SIGN UP (admin)', '2026-03-06 13:01:50'),
(368, 31, 'LOGIN SUCCESS', '2026-03-06 13:02:11'),
(369, 4, 'LOGIN SUCCESS', '2026-03-06 13:03:32'),
(370, 4, 'LOGIN SUCCESS', '2026-03-06 13:04:07'),
(371, 4, 'LOGIN SUCCESS', '2026-03-06 13:08:03'),
(372, 14, 'LOGIN SUCCESS', '2026-03-06 13:08:17'),
(373, 14, 'LOGIN SUCCESS', '2026-03-06 13:16:11'),
(374, 31, 'LOGIN SUCCESS', '2026-03-06 13:16:25'),
(375, 4, 'LOGIN SUCCESS', '2026-03-06 13:19:08'),
(376, 9, 'LOGIN SUCCESS', '2026-03-06 13:19:22'),
(377, 4, 'LOGIN SUCCESS', '2026-03-06 13:25:34'),
(378, 12, 'LOGIN FAILED', '2026-03-06 13:25:46'),
(379, 12, 'LOGIN SUCCESS', '2026-03-06 13:25:57'),
(380, 12, 'LOGIN FAILED', '2026-03-06 13:26:09'),
(381, 12, 'LOGIN FAILED', '2026-03-06 13:26:18'),
(382, 5, 'LOGIN FAILED', '2026-03-06 13:30:45'),
(383, 32, 'SIGN UP (user)', '2026-03-06 13:31:18'),
(384, 12, 'LOGIN SUCCESS', '2026-03-06 13:33:12'),
(385, 33, 'SIGN UP (user)', '2026-03-06 14:04:40'),
(388, 33, 'LOGIN SUCCESS', '2026-03-06 14:05:17'),
(389, 12, 'LOGIN SUCCESS', '2026-03-06 14:05:37'),
(390, 33, 'Created appointment for Line Power Quality Checks on 2026-03-06', '2026-03-06 14:06:54'),
(391, 12, 'LOGIN SUCCESS', '2026-03-06 16:52:20'),
(392, 12, 'LOGIN SUCCESS', '2026-03-06 17:04:20'),
(393, 12, 'LOGIN SUCCESS', '2026-03-06 17:26:42'),
(394, 12, 'LOGIN SUCCESS', '2026-03-06 18:10:18'),
(395, 12, 'LOGIN SUCCESS', '2026-03-06 18:32:01'),
(396, 12, 'LOGIN SUCCESS', '2026-03-06 18:48:26'),
(397, 12, 'LOGIN SUCCESS', '2026-03-06 19:00:30'),
(398, 12, 'LOGIN SUCCESS', '2026-03-06 19:27:41'),
(399, 12, 'LOGIN SUCCESS', '2026-03-06 20:01:34'),
(400, 12, 'LOGIN SUCCESS', '2026-03-07 05:49:23'),
(401, 12, 'LOGIN SUCCESS', '2026-03-07 06:06:18'),
(402, 12, 'LOGIN SUCCESS', '2026-03-07 06:14:56'),
(403, 12, 'LOGIN SUCCESS', '2026-03-07 06:17:21'),
(404, 12, 'LOGIN SUCCESS', '2026-03-07 06:28:22'),
(405, 12, 'LOGIN SUCCESS', '2026-03-07 08:53:12'),
(406, 12, 'LOGIN SUCCESS', '2026-03-07 13:12:44'),
(407, 12, 'LOGIN SUCCESS', '2026-03-07 14:58:46'),
(408, 12, 'LOGIN SUCCESS', '2026-03-07 15:15:30'),
(409, 12, 'LOGIN SUCCESS', '2026-03-07 15:18:09'),
(410, 12, 'LOGIN SUCCESS', '2026-03-07 15:21:01'),
(411, 12, 'LOGIN SUCCESS', '2026-03-08 10:25:34'),
(412, 12, 'LOGIN SUCCESS', '2026-03-11 16:19:10'),
(413, 34, 'SIGN UP (user)', '2026-04-23 08:47:10'),
(414, 34, 'LOGIN SUCCESS', '2026-04-23 08:47:35'),
(415, 34, 'LOGIN SUCCESS', '2026-04-23 08:49:33'),
(416, 34, 'LOGIN SUCCESS', '2026-04-23 09:00:19'),
(417, 34, 'LOGIN SUCCESS', '2026-04-23 09:02:51'),
(418, 35, 'SIGN UP (user)', '2026-04-29 15:59:20'),
(419, 35, 'LOGIN SUCCESS', '2026-04-29 15:59:39'),
(420, 35, 'LOGIN SUCCESS', '2026-04-30 18:48:03'),
(421, 35, 'LOGIN SUCCESS', '2026-04-30 18:48:57'),
(422, 36, 'SIGN UP (user)', '2026-05-01 11:28:53'),
(423, 36, 'LOGIN SUCCESS', '2026-05-01 11:29:20'),
(424, 34, 'LOGIN SUCCESS', '2026-05-01 11:30:12'),
(425, 4, 'LOGIN FAILED', '2026-05-01 11:31:26'),
(427, 9, 'LOGIN SUCCESS', '2026-05-01 11:33:52'),
(428, 36, 'LOGIN FAILED', '2026-05-01 11:35:33'),
(430, 37, 'SIGN UP (user)', '2026-05-01 11:37:26'),
(431, 37, 'LOGIN SUCCESS', '2026-05-01 11:37:38'),
(432, 37, 'Created appointment for Wiring for offices and shops on 2026-05-01', '2026-05-01 11:38:16'),
(433, 36, 'Created appointment for CCTV Camera Installation on 2026-05-01', '2026-05-01 11:43:06'),
(434, 38, 'SIGN UP (user)', '2026-05-01 11:45:40'),
(435, 37, 'LOGIN SUCCESS', '2026-05-01 11:45:55'),
(436, 9, 'LOGIN SUCCESS', '2026-05-01 11:59:36'),
(437, 9, 'LOGIN SUCCESS', '2026-05-01 12:01:15'),
(438, 37, 'LOGIN SUCCESS', '2026-05-01 12:03:33'),
(439, 37, 'LOGIN SUCCESS', '2026-05-01 12:06:07'),
(440, 37, 'LOGIN SUCCESS', '2026-05-01 12:09:13'),
(441, 37, 'LOGIN SUCCESS', '2026-05-01 12:09:26'),
(442, 9, 'LOGIN SUCCESS', '2026-05-01 12:09:41'),
(443, 9, 'LOGIN SUCCESS', '2026-05-01 12:11:51'),
(444, 37, 'LOGIN SUCCESS', '2026-05-01 12:12:03'),
(445, 37, 'LOGIN SUCCESS', '2026-05-01 12:14:21'),
(446, 9, 'LOGIN SUCCESS', '2026-05-01 12:14:44'),
(447, 37, 'LOGIN SUCCESS', '2026-05-01 12:25:42'),
(448, 37, 'LOGIN SUCCESS', '2026-05-01 12:27:31'),
(449, 9, 'LOGIN SUCCESS', '2026-05-01 12:29:56'),
(450, 37, 'LOGIN SUCCESS', '2026-05-01 12:43:31'),
(451, 37, 'Created appointment for Electrical Safety Check on 2026-05-01', '2026-05-01 12:44:16'),
(452, 9, 'LOGIN SUCCESS', '2026-05-01 12:44:28'),
(453, 37, 'LOGIN SUCCESS', '2026-05-01 12:50:47'),
(454, 35, 'LOGIN SUCCESS', '2026-05-01 17:31:31'),
(455, 35, 'Created appointment for Air Conditioning (AC) on 2026-05-09', '2026-05-01 17:35:40'),
(456, 39, 'SIGN UP (user)', '2026-05-01 17:36:34'),
(457, 39, 'LOGIN FAILED', '2026-05-01 17:36:54'),
(458, 39, 'LOGIN SUCCESS', '2026-05-01 17:36:58'),
(459, 36, 'LOGIN SUCCESS', '2026-05-01 17:44:34'),
(460, 34, 'LOGIN SUCCESS', '2026-05-01 17:45:07'),
(461, 4, 'LOGIN FAILED', '2026-05-01 17:48:01'),
(462, 4, 'LOGIN FAILED', '2026-05-01 17:48:08'),
(463, 4, 'LOGIN FAILED', '2026-05-01 17:48:16'),
(464, 4, 'LOGIN FAILED', '2026-05-01 17:48:29'),
(465, 14, 'LOGIN SUCCESS', '2026-05-01 17:49:27'),
(466, 14, 'LOGIN SUCCESS', '2026-05-01 17:50:28'),
(467, 14, 'LOGIN SUCCESS', '2026-05-01 17:57:09'),
(468, 14, 'LOGIN SUCCESS', '2026-05-01 18:15:10'),
(469, 37, 'LOGIN SUCCESS', '2026-05-01 18:24:52'),
(470, 14, 'LOGIN SUCCESS', '2026-05-01 18:25:35'),
(471, 14, 'LOGIN SUCCESS', '2026-05-01 18:27:55'),
(472, 36, 'LOGIN SUCCESS', '2026-05-02 08:52:58'),
(473, 14, 'LOGIN SUCCESS', '2026-05-02 19:48:40'),
(474, 36, 'LOGIN SUCCESS', '2026-05-02 19:48:49'),
(475, 36, 'LOGIN SUCCESS', '2026-05-02 20:02:31'),
(476, 9, 'LOGIN SUCCESS', '2026-05-02 20:03:01'),
(477, 14, 'LOGIN SUCCESS', '2026-05-02 20:03:12'),
(478, 37, 'LOGIN SUCCESS', '2026-05-02 20:03:22'),
(479, 37, 'LOGIN SUCCESS', '2026-05-02 20:30:29'),
(480, 36, 'LOGIN SUCCESS', '2026-05-02 20:46:54'),
(481, 37, 'LOGIN SUCCESS', '2026-05-02 20:47:29'),
(482, 36, 'LOGIN SUCCESS', '2026-05-03 17:29:50'),
(483, 4, 'LOGIN SUCCESS', '2026-05-03 17:36:22'),
(484, 13, 'LOGIN SUCCESS', '2026-05-03 17:36:35'),
(485, 36, 'LOGIN SUCCESS', '2026-05-03 17:40:13'),
(486, 13, 'LOGIN SUCCESS', '2026-05-03 17:45:10'),
(487, 37, 'LOGIN SUCCESS', '2026-05-03 17:45:45'),
(488, 40, 'SIGN UP (user)', '2026-05-03 18:00:55'),
(489, 40, 'LOGIN SUCCESS', '2026-05-03 18:01:12'),
(490, 40, 'LOGIN SUCCESS', '2026-05-03 18:02:23'),
(491, 36, 'LOGIN SUCCESS', '2026-05-03 18:22:36'),
(492, 40, 'LOGIN SUCCESS', '2026-05-03 18:26:49'),
(493, 14, 'LOGIN SUCCESS', '2026-05-04 16:15:01'),
(494, 36, 'LOGIN SUCCESS', '2026-05-05 06:51:14'),
(495, 14, 'LOGIN SUCCESS', '2026-05-05 10:55:45'),
(496, 36, 'LOGIN SUCCESS', '2026-05-05 11:23:49'),
(497, 14, 'LOGIN SUCCESS', '2026-05-05 11:54:18'),
(498, 14, 'LOGIN SUCCESS', '2026-05-05 13:07:18'),
(499, 14, 'LOGIN SUCCESS', '2026-05-05 18:51:50'),
(500, 14, 'LOGIN SUCCESS', '2026-05-05 19:03:07'),
(501, 14, 'LOGIN SUCCESS', '2026-05-06 05:53:10'),
(502, 14, 'LOGIN SUCCESS', '2026-05-06 08:59:10'),
(503, 14, 'LOGIN SUCCESS', '2026-05-06 13:30:51'),
(504, 14, 'LOGIN SUCCESS', '2026-05-06 15:35:03'),
(505, 37, 'LOGIN SUCCESS', '2026-05-06 15:37:44'),
(506, 14, 'LOGIN SUCCESS', '2026-05-06 15:37:56'),
(507, 14, 'LOGIN SUCCESS', '2026-05-06 15:51:41'),
(508, 14, 'LOGIN SUCCESS', '2026-05-06 15:53:21'),
(509, 14, 'LOGIN SUCCESS', '2026-05-07 14:14:35'),
(510, 14, 'LOGIN SUCCESS', '2026-05-07 14:39:12'),
(511, 14, 'LOGIN SUCCESS', '2026-05-07 15:17:16'),
(512, 14, 'LOGIN SUCCESS', '2026-05-07 15:43:09'),
(513, 14, 'LOGIN SUCCESS', '2026-05-07 15:58:16'),
(514, 14, 'LOGIN SUCCESS', '2026-05-07 17:14:04'),
(515, 14, 'LOGIN SUCCESS', '2026-05-07 17:33:26'),
(516, 14, 'LOGIN SUCCESS', '2026-05-07 17:52:32'),
(517, 14, 'LOGIN SUCCESS', '2026-05-07 18:12:09'),
(518, 14, 'LOGIN SUCCESS', '2026-05-07 18:39:43'),
(519, 36, 'LOGIN SUCCESS', '2026-05-07 19:00:43'),
(520, 37, 'LOGIN SUCCESS', '2026-05-07 19:01:22'),
(521, 14, 'LOGIN SUCCESS', '2026-05-08 15:26:01'),
(522, 14, 'LOGIN SUCCESS', '2026-05-08 16:10:54'),
(523, 14, 'LOGIN SUCCESS', '2026-05-08 16:42:14'),
(524, 14, 'LOGIN SUCCESS', '2026-05-09 06:26:56'),
(525, 14, 'LOGIN SUCCESS', '2026-05-09 06:43:20'),
(526, 14, 'LOGIN SUCCESS', '2026-05-09 07:00:05'),
(527, 14, 'LOGIN SUCCESS', '2026-05-09 07:29:44'),
(528, 14, 'LOGIN SUCCESS', '2026-05-09 07:32:01'),
(529, 36, 'LOGIN SUCCESS', '2026-05-09 07:45:50'),
(530, 14, 'LOGIN SUCCESS', '2026-05-09 07:46:11'),
(531, 36, 'LOGIN SUCCESS', '2026-05-09 07:57:53'),
(532, 36, 'Created appointment for Air Conditioning (AC) on 2026-05-09', '2026-05-09 07:58:13'),
(533, 14, 'LOGIN SUCCESS', '2026-05-09 07:58:25'),
(534, 35, 'LOGIN SUCCESS', '2026-05-09 07:58:54'),
(535, 35, 'Created appointment for Panel Upgradations on 2026-05-30', '2026-05-09 07:59:33'),
(536, 14, 'LOGIN SUCCESS', '2026-05-09 07:59:48'),
(537, 14, 'LOGIN SUCCESS', '2026-05-09 08:01:42'),
(538, 4, 'LOGIN FAILED', '2026-05-09 08:02:24'),
(539, 4, 'LOGIN FAILED', '2026-05-09 08:03:07'),
(540, 4, 'LOGIN SUCCESS', '2026-05-09 08:03:19'),
(541, 36, 'LOGIN SUCCESS', '2026-05-09 08:18:05'),
(542, 36, 'Appointment created:Electrical Safety Check', '2026-05-09 08:18:36'),
(543, 14, 'LOGIN SUCCESS', '2026-05-09 08:18:46'),
(544, 14, 'LOGIN SUCCESS', '2026-05-09 08:24:24'),
(545, 14, 'LOGIN SUCCESS', '2026-05-09 08:49:11'),
(546, 14, 'LOGIN SUCCESS', '2026-05-10 10:26:26'),
(547, 36, 'LOGIN SUCCESS', '2026-05-10 10:28:30'),
(548, 14, 'LOGIN SUCCESS', '2026-05-10 11:38:28'),
(549, 14, 'LOGIN SUCCESS', '2026-05-11 16:45:44'),
(550, 36, 'LOGIN SUCCESS', '2026-05-11 16:45:55'),
(551, 14, 'LOGIN SUCCESS', '2026-05-15 17:32:52'),
(552, 36, 'LOGIN SUCCESS', '2026-05-15 17:33:09'),
(553, 36, 'LOGIN SUCCESS', '2026-05-15 17:37:40'),
(554, 14, 'LOGIN SUCCESS', '2026-06-03 10:12:35'),
(555, 36, 'LOGIN SUCCESS', '2026-06-03 10:14:57'),
(556, 14, 'LOGIN SUCCESS', '2026-06-05 17:45:55'),
(557, 36, 'LOGIN SUCCESS', '2026-06-05 19:02:34'),
(558, 41, 'SIGN UP (user)', '2026-06-05 19:03:46'),
(559, 41, 'LOGIN SUCCESS', '2026-06-05 19:04:14'),
(560, 14, 'LOGIN SUCCESS', '2026-06-05 19:12:54'),
(561, 42, 'SIGN UP (user)', '2026-06-05 19:20:08'),
(562, 35, 'LOGIN SUCCESS', '2026-06-05 19:20:18'),
(563, 4, 'LOGIN SUCCESS', '2026-06-06 11:39:22'),
(564, 36, 'LOGIN SUCCESS', '2026-06-06 11:42:37'),
(565, 4, 'LOGIN SUCCESS', '2026-06-06 12:02:02'),
(566, 14, 'LOGIN SUCCESS', '2026-06-06 12:27:33'),
(567, 14, 'LOGIN FAILED', '2026-06-06 12:32:41'),
(568, 4, 'LOGIN SUCCESS', '2026-06-06 12:32:52'),
(569, 4, 'LOGIN SUCCESS', '2026-06-06 12:40:48'),
(570, 35, 'LOGIN SUCCESS', '2026-06-06 12:41:04'),
(571, 14, 'LOGIN SUCCESS', '2026-06-06 12:49:36'),
(572, 36, 'LOGIN SUCCESS', '2026-06-06 12:53:43'),
(573, 36, 'Appointment created:Panel Upgradations', '2026-06-06 13:04:12'),
(574, 36, 'LOGIN SUCCESS', '2026-06-06 13:04:38'),
(575, 36, 'LOGIN SUCCESS', '2026-06-06 13:39:02'),
(576, 36, 'Appointment created:Panel Upgradations', '2026-06-06 13:39:49'),
(577, 36, 'LOGIN SUCCESS', '2026-06-06 14:17:04'),
(578, 36, 'LOGIN SUCCESS', '2026-06-06 14:32:42'),
(579, 14, 'LOGIN SUCCESS', '2026-06-06 14:34:05'),
(580, 36, 'LOGIN SUCCESS', '2026-06-07 18:05:51'),
(581, 36, 'LOGIN SUCCESS', '2026-06-07 18:43:33'),
(582, 36, 'LOGIN SUCCESS', '2026-06-08 12:32:47'),
(583, 36, 'LOGIN SUCCESS', '2026-06-09 05:28:58'),
(584, 39, 'LOGIN SUCCESS', '2026-06-09 05:39:13'),
(585, 37, 'LOGIN SUCCESS', '2026-06-09 05:40:40'),
(586, 14, 'LOGIN SUCCESS', '2026-06-09 05:47:37'),
(587, 14, 'LOGIN SUCCESS', '2026-06-09 05:48:38'),
(588, 14, 'LOGIN SUCCESS', '2026-06-12 17:13:08'),
(589, 14, 'LOGIN SUCCESS', '2026-06-12 17:13:33'),
(590, 36, 'LOGIN SUCCESS', '2026-06-12 17:17:18'),
(591, 36, 'LOGIN SUCCESS', '2026-06-12 17:47:57'),
(592, 36, 'LOGIN SUCCESS', '2026-06-13 18:05:29'),
(593, 36, 'LOGIN SUCCESS', '2026-06-13 18:46:44'),
(594, 36, 'LOGIN SUCCESS', '2026-06-13 18:46:59'),
(595, 36, 'LOGIN SUCCESS', '2026-06-13 19:18:46'),
(596, 36, 'LOGIN SUCCESS', '2026-06-14 13:19:21'),
(597, 36, 'LOGIN SUCCESS', '2026-06-15 13:20:16'),
(598, 36, 'LOGIN SUCCESS', '2026-06-18 14:40:02'),
(599, 43, 'SIGN UP (user)', '2026-06-18 15:10:57'),
(600, 43, 'LOGIN SUCCESS', '2026-06-18 15:11:29'),
(601, 43, 'Appointment created:Electrical Safety Check', '2026-06-18 15:15:08'),
(602, 43, 'LOGIN SUCCESS', '2026-06-18 16:01:44'),
(603, 36, 'LOGIN SUCCESS', '2026-06-18 18:01:37'),
(604, 43, 'LOGIN FAILED', '2026-06-18 18:03:19'),
(605, 43, 'LOGIN FAILED', '2026-06-18 18:03:34'),
(606, 43, 'LOGIN FAILED', '2026-06-18 18:03:38'),
(607, 43, 'LOGIN FAILED', '2026-06-18 18:03:48'),
(608, 43, 'LOGIN FAILED', '2026-06-18 18:03:49'),
(609, 44, 'SIGN UP (user)', '2026-06-18 18:04:26'),
(610, 44, 'LOGIN SUCCESS', '2026-06-18 18:04:42'),
(611, 36, 'LOGIN SUCCESS', '2026-06-18 18:34:26'),
(612, 36, 'LOGIN SUCCESS', '2026-06-18 18:48:42'),
(613, 44, 'LOGIN SUCCESS', '2026-06-18 18:53:33'),
(614, 36, 'LOGIN SUCCESS', '2026-06-18 19:25:33'),
(615, 36, 'LOGIN SUCCESS', '2026-06-19 07:42:54'),
(616, 36, 'LOGIN SUCCESS', '2026-06-19 07:52:44'),
(617, 43, 'LOGIN SUCCESS', '2026-06-19 09:15:45'),
(618, 36, 'LOGIN SUCCESS', '2026-06-19 09:24:54'),
(619, 43, 'LOGIN SUCCESS', '2026-06-19 09:44:00'),
(620, 36, 'LOGIN SUCCESS', '2026-06-19 11:17:59'),
(621, 36, 'LOGIN SUCCESS', '2026-06-19 11:41:02'),
(622, 43, 'LOGIN SUCCESS', '2026-06-19 11:42:56'),
(623, 43, 'LOGIN SUCCESS', '2026-06-19 11:42:57'),
(624, 36, 'LOGIN SUCCESS', '2026-06-19 12:41:41'),
(625, 43, 'LOGIN SUCCESS', '2026-06-19 13:09:18'),
(626, 36, 'LOGIN SUCCESS', '2026-06-19 14:13:38'),
(627, 43, 'LOGIN SUCCESS', '2026-06-19 14:14:42'),
(628, 36, 'LOGIN SUCCESS', '2026-06-19 14:43:13'),
(629, 43, 'LOGIN SUCCESS', '2026-06-19 14:49:32'),
(630, 43, 'LOGIN SUCCESS', '2026-06-19 14:52:45'),
(631, 36, 'LOGIN SUCCESS', '2026-06-20 06:58:59'),
(632, 43, 'LOGIN SUCCESS', '2026-06-20 07:03:15'),
(633, 43, 'LOGIN SUCCESS', '2026-06-20 07:07:50'),
(634, 43, 'LOGIN SUCCESS', '2026-06-20 07:13:11'),
(635, 43, 'LOGIN SUCCESS', '2026-06-20 07:13:12'),
(636, 36, 'LOGIN SUCCESS', '2026-06-20 07:22:04'),
(637, 43, 'LOGIN SUCCESS', '2026-06-20 07:32:51'),
(638, 45, 'SIGN UP (user)', '2026-06-20 07:36:48'),
(640, 45, 'LOGIN SUCCESS', '2026-06-20 07:37:35'),
(641, 36, 'LOGIN SUCCESS', '2026-06-20 08:46:20'),
(642, 45, 'LOGIN SUCCESS', '2026-06-20 08:50:37'),
(643, 45, 'LOGIN SUCCESS', '2026-06-20 08:50:38'),
(644, 36, 'LOGIN SUCCESS', '2026-06-20 09:00:35'),
(645, 45, 'LOGIN SUCCESS', '2026-06-20 09:11:03'),
(646, 36, 'LOGIN SUCCESS', '2026-06-20 11:34:11'),
(647, 14, 'LOGIN SUCCESS', '2026-06-20 12:22:10'),
(648, 36, 'LOGIN SUCCESS', '2026-06-20 12:23:34'),
(649, 46, 'SIGN UP (user)', '2026-06-20 12:30:32'),
(650, 46, 'LOGIN SUCCESS', '2026-06-20 12:30:47'),
(651, 45, 'LOGIN SUCCESS', '2026-06-20 12:59:03'),
(652, 45, 'LOGIN SUCCESS', '2026-06-20 13:24:25'),
(653, 46, 'LOGIN SUCCESS', '2026-06-20 13:28:53'),
(654, 46, 'LOGIN SUCCESS', '2026-06-20 13:33:58'),
(657, 45, 'LOGIN SUCCESS', '2026-06-20 13:39:35'),
(658, 35, 'LOGIN FAILED', '2026-06-20 13:41:46'),
(659, 46, 'LOGIN SUCCESS', '2026-06-20 13:43:17'),
(660, 46, 'LOGIN SUCCESS', '2026-06-20 13:44:00'),
(661, 46, 'LOGIN SUCCESS', '2026-06-21 09:43:23'),
(662, 46, 'LOGIN SUCCESS', '2026-06-21 09:55:00'),
(663, 46, 'LOGIN SUCCESS', '2026-06-21 10:14:19'),
(664, 46, 'LOGIN SUCCESS', '2026-06-21 10:45:53'),
(665, 46, 'LOGIN SUCCESS', '2026-06-21 10:45:54'),
(666, 36, 'LOGIN SUCCESS', '2026-06-21 10:50:27'),
(667, 7, 'LOGIN FAILED', '2026-06-21 10:51:43'),
(668, 7, 'LOGIN FAILED', '2026-06-21 10:51:45'),
(669, 7, 'LOGIN FAILED', '2026-06-21 10:51:46'),
(670, 7, 'LOGIN FAILED', '2026-06-21 10:51:46'),
(671, 7, 'LOGIN FAILED', '2026-06-21 10:51:46'),
(672, 7, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 10:51:46'),
(673, 7, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 10:51:46'),
(674, 7, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 10:51:46'),
(675, 7, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 10:51:46'),
(676, 7, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 10:51:47'),
(677, 7, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 10:51:47'),
(678, 7, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 10:51:47'),
(679, 7, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 10:51:47'),
(680, 7, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 10:51:48'),
(681, 7, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 10:51:48'),
(682, 7, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 10:51:48'),
(683, 7, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 10:51:48'),
(684, 7, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 10:51:48'),
(685, 7, 'LOGIN FAILED', '2026-06-21 11:17:18'),
(686, 7, 'LOGIN FAILED', '2026-06-21 11:17:19'),
(687, 7, 'LOGIN FAILED', '2026-06-21 11:17:20'),
(688, 14, 'LOGIN SUCCESS', '2026-06-21 11:17:56'),
(689, 14, 'LOGIN SUCCESS', '2026-06-21 11:17:57'),
(690, 45, 'LOGIN SUCCESS', '2026-06-21 11:21:35'),
(691, 45, 'LOGIN SUCCESS', '2026-06-21 11:21:45'),
(692, 36, 'LOGIN SUCCESS', '2026-06-21 11:23:00'),
(693, 1, 'LOGIN FAILED', '2026-06-21 11:23:51'),
(694, 1, 'LOGIN FAILED', '2026-06-21 11:23:54'),
(695, 1, 'LOGIN FAILED', '2026-06-21 11:23:56'),
(696, 1, 'LOGIN FAILED', '2026-06-21 11:23:57'),
(697, 1, 'LOGIN FAILED', '2026-06-21 11:23:57'),
(698, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:23:57'),
(699, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:23:58'),
(700, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:23:58'),
(701, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:23:58'),
(702, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:23:59'),
(703, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:23:59'),
(704, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:23:59'),
(705, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:23:59'),
(706, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:23:59'),
(707, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:23:59'),
(708, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:23:59'),
(709, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:23:59'),
(710, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:24:00'),
(711, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:24:00'),
(712, 45, 'LOGIN SUCCESS', '2026-06-21 11:24:47'),
(713, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:29:14'),
(714, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:29:18'),
(715, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:29:20'),
(716, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:29:22'),
(717, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:29:23'),
(718, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:29:23'),
(719, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:29:24'),
(720, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:29:24'),
(721, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:29:24'),
(722, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:29:24'),
(723, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:29:24'),
(724, 1, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 11:29:24'),
(725, 4, 'LOGIN SUCCESS', '2026-06-21 11:29:43'),
(726, 4, 'LOGIN SUCCESS', '2026-06-21 11:31:20'),
(727, 45, 'LOGIN SUCCESS', '2026-06-21 11:33:34'),
(728, 36, 'LOGIN SUCCESS', '2026-06-21 11:35:54'),
(729, 36, 'LOGIN SUCCESS', '2026-06-21 11:35:55'),
(730, 14, 'LOGIN SUCCESS', '2026-06-21 11:40:16'),
(731, 4, 'LOGIN SUCCESS', '2026-06-21 11:41:04'),
(732, 14, 'LOGIN SUCCESS', '2026-06-21 11:48:30'),
(733, 36, 'LOGIN SUCCESS', '2026-06-21 11:49:50'),
(734, 45, 'LOGIN SUCCESS', '2026-06-21 11:53:37'),
(735, 45, 'LOGIN SUCCESS', '2026-06-21 11:54:39'),
(736, 4, 'LOGIN SUCCESS', '2026-06-21 11:56:10'),
(738, 36, 'LOGIN SUCCESS', '2026-06-21 11:59:27'),
(739, 45, 'LOGIN SUCCESS', '2026-06-21 11:59:39'),
(740, 4, 'LOGIN SUCCESS', '2026-06-21 11:59:47'),
(741, 45, 'LOGIN SUCCESS', '2026-06-21 12:00:10'),
(742, 36, 'LOGIN SUCCESS', '2026-06-21 13:19:26'),
(743, 45, 'LOGIN SUCCESS', '2026-06-21 13:21:27'),
(744, 4, 'LOGIN SUCCESS', '2026-06-21 13:21:39'),
(745, 14, 'LOGIN SUCCESS', '2026-06-21 13:22:22'),
(746, 4, 'LOGIN SUCCESS', '2026-06-21 13:22:40'),
(747, 47, 'SIGN UP (user)', '2026-06-21 14:00:09'),
(748, 47, 'LOGIN SUCCESS', '2026-06-21 14:00:32'),
(749, 47, 'LOGIN SUCCESS', '2026-06-21 14:03:30'),
(750, 31, 'LOGIN SUCCESS', '2026-06-21 14:07:47'),
(751, 31, 'LOGIN SUCCESS', '2026-06-21 14:07:50'),
(752, 31, 'LOGIN SUCCESS', '2026-06-21 14:12:10'),
(753, 31, 'LOGIN SUCCESS', '2026-06-21 14:12:13'),
(754, 48, 'SIGN UP (user)', '2026-06-21 14:12:28'),
(755, 48, 'LOGIN SUCCESS', '2026-06-21 14:12:49'),
(756, 31, 'LOGIN FAILED', '2026-06-21 14:14:53'),
(757, 31, 'LOGIN FAILED', '2026-06-21 14:15:19'),
(758, 31, 'LOGIN FAILED', '2026-06-21 14:15:27'),
(759, 31, 'LOGIN FAILED', '2026-06-21 14:15:33'),
(760, 31, 'LOGIN FAILED', '2026-06-21 14:16:29'),
(761, 4, 'LOGIN FAILED', '2026-06-21 14:16:42'),
(762, 31, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 14:16:49'),
(763, 4, 'LOGIN SUCCESS', '2026-06-21 14:17:03'),
(764, 31, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 14:17:35'),
(765, 31, 'LOGIN BLOCKED - RATE LIMIT', '2026-06-21 14:18:24'),
(766, 49, 'SIGN UP (user)', '2026-06-21 14:22:08'),
(767, 49, 'LOGIN SUCCESS', '2026-06-21 14:22:38'),
(768, 4, 'LOGIN SUCCESS', '2026-06-21 14:24:25'),
(769, 4, 'LOGIN SUCCESS', '2026-06-21 14:30:03'),
(770, 4, 'LOGIN SUCCESS', '2026-06-21 14:30:04'),
(771, 4, 'LOGIN SUCCESS', '2026-06-21 14:30:04'),
(772, 4, 'LOGIN SUCCESS', '2026-06-21 14:30:04'),
(773, 50, 'SIGN UP (user)', '2026-06-21 14:36:09'),
(774, 50, 'LOGIN SUCCESS', '2026-06-21 14:36:32'),
(775, 50, 'LOGIN SUCCESS', '2026-06-21 14:36:36'),
(776, 49, 'LOGIN FAILED', '2026-06-21 14:46:39'),
(777, 31, 'LOGIN SUCCESS', '2026-06-21 14:46:48'),
(778, 31, 'LOGIN SUCCESS', '2026-06-21 14:46:49'),
(779, 49, 'LOGIN SUCCESS', '2026-06-21 14:46:50'),
(780, 47, 'LOGIN SUCCESS', '2026-06-21 14:57:50'),
(781, 47, 'Appointment created:Electrical Safety Check', '2026-06-21 14:59:33'),
(782, 47, 'LOGIN SUCCESS', '2026-06-21 15:09:13'),
(783, 4, 'LOGIN SUCCESS', '2026-06-21 15:10:00'),
(784, 4, 'LOGIN SUCCESS', '2026-06-30 18:42:33'),
(785, 12, 'LOGIN FAILED', '2026-06-30 18:43:02'),
(786, 12, 'LOGIN FAILED', '2026-06-30 18:43:15'),
(787, 35, 'LOGIN SUCCESS', '2026-07-01 06:39:06'),
(788, 35, 'LOGIN SUCCESS', '2026-07-01 10:46:08'),
(789, 36, 'LOGIN SUCCESS', '2026-07-01 10:47:43'),
(790, 35, 'LOGIN SUCCESS', '2026-07-01 13:54:37'),
(791, 51, 'SIGN UP (user)', '2026-07-01 13:58:23'),
(792, 51, 'LOGIN SUCCESS', '2026-07-01 13:58:36'),
(793, 35, 'LOGIN SUCCESS', '2026-07-01 14:15:10'),
(794, 51, 'LOGIN SUCCESS', '2026-07-01 14:16:29'),
(795, 51, 'LOGIN SUCCESS', '2026-07-01 14:35:58'),
(796, 51, 'LOGIN SUCCESS', '2026-07-01 14:35:59'),
(797, 51, 'LOGIN SUCCESS', '2026-07-01 14:48:23'),
(798, 51, 'LOGIN SUCCESS', '2026-07-01 15:24:09'),
(799, 51, 'LOGIN SUCCESS', '2026-07-01 15:24:10'),
(800, 35, 'LOGIN SUCCESS', '2026-07-06 13:32:50'),
(801, 14, 'LOGIN SUCCESS', '2026-07-06 13:34:28'),
(802, 14, 'LOGIN SUCCESS', '2026-07-06 13:34:59'),
(803, 36, 'LOGIN SUCCESS', '2026-07-06 13:39:14'),
(804, 52, 'SIGN UP (user)', '2026-07-06 13:42:26'),
(805, 52, 'LOGIN SUCCESS', '2026-07-06 13:42:55'),
(806, 52, 'Appointment created:POS & Tracking Solutions', '2026-07-06 13:46:55'),
(807, 36, 'LOGIN SUCCESS', '2026-07-07 06:57:31'),
(808, 36, 'LOGIN SUCCESS', '2026-07-07 07:24:00'),
(809, 36, 'LOGIN SUCCESS', '2026-07-07 08:07:03'),
(810, 36, 'LOGIN SUCCESS', '2026-07-07 11:12:14'),
(811, 14, 'LOGIN SUCCESS', '2026-07-07 11:21:06'),
(812, 35, 'LOGIN SUCCESS', '2026-07-07 11:21:17'),
(813, 35, 'LOGIN SUCCESS', '2026-07-08 05:54:33'),
(814, 35, 'LOGIN SUCCESS', '2026-08-02 13:16:02'),
(815, 4, 'LOGIN SUCCESS', '2026-08-02 13:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `attempts` int(11) DEFAULT 0,
  `last_attempt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `email`, `attempts`, `last_attempt`) VALUES
(2, 'andrew@gmail.com', 2, '2026-02-23 09:13:36'),
(15, 'aredoivan999@gmail.com', 1, '2026-02-25 05:18:35'),
(17, 'esther@gmail.com', 5, '2026-02-25 05:41:23'),
(19, 'ivan6@gmail.com', 2, '2026-02-27 12:24:16'),
(21, 'edith@gmail.com', 1, '2026-03-01 07:36:05'),
(32, 'Ivo20akg@gmail.com', 5, '2026-03-06 12:46:50'),
(37, 'joel.econi@edu.lirauni.ac.ug', 1, '2026-03-06 13:30:45'),
(38, 'ivan@20gmail.com', 2, '2026-03-06 14:05:08'),
(40, 'aredoian91@gmail.com', 1, '2026-05-01 11:33:41'),
(42, 'ivan17@gmail.com', 1, '2026-05-01 11:35:41'),
(48, 'echjoel@gmail.com', 1, '2026-06-20 07:37:16'),
(49, 'aredo@gmail.com', 1, '2026-06-20 13:38:19'),
(50, 'jxbs@gmail.com', 1, '2026-06-20 13:38:36'),
(53, 'joo@gmail.com', 3, '2026-06-21 11:17:20'),
(54, 'joel@gmail.com', 5, '2026-06-21 11:23:57'),
(55, 'aredoo@gmail.com', 1, '2026-06-21 11:59:19'),
(59, 'akg@gmail.com', 2, '2026-06-30 18:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(90) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(200) NOT NULL DEFAULT 'Images/client.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `status`, `image`) VALUES
(1, 'joel Econi', 'joel@gmail.com', '$2y$10$fXlypCHakhj.JgG6BUafCeKhQCnN1igNnk/WjgaE4V0z/tNr9wnCW', 'admin', 0, 'Images/person.png'),
(4, 'Andrew', 'joelec@gmail.com', '$2y$10$q2iE4UzKMHDZGNvBSbdMjulyflfIkNdhwHfEtXMGZu3BIPghWWl3S', 'admin', 0, 'Images/ceoWinter.jpg'),
(5, 'econi joel', 'joel.econi@edu.lirauni.ac.ug', '$2y$10$GHYjdnyE0TqrJcwUyWDkcOiH/1LmM620iBHzwo5eGvxWqqW89GVwO', 'user', 0, 'Images/person.png'),
(6, 'Ak Tom', 'ak@yahoo.com', '$2y$10$J.v6ggutbG3KPjZnwoD.jO.y/kyxOZK2gQqGGXa3IumIbjXaNdOWO', 'user', 0, 'Images/person.png'),
(7, 'jooe', 'joo@gmail.com', '$2y$10$eRuGAhDWJ3Y6VjsWc7OB0everozrb9RcLT/E5P2ruzzlsIT3oOuYS', 'user', 0, 'Images/person.png'),
(8, 'liberty', 'lib@gmail.com', '$2y$10$/kmj873eKesxfFjRgcT16OV25KcbqVfMezOpv8ciZrIlFuKtmQBTC', 'user', 0, 'Images/person.png'),
(9, 'Arikod', 'aredoivan91@gmail.com', '$2y$10$0.v8JFix.wy5fypzC47O/.5QRclyYt1HHH6ssMGlw/nJLKLXGxPpe', 'admin', 0, 'Images/person.png'),
(10, 'Esther Akuma', 'esthery@gmail.com', '$2y$10$kw91./kwph9oGU/j.exK2ujh4OSgurjhmBo1Ca2LsNulUWSnESq/u', 'user', 0, 'Images/person.png'),
(11, 'Amiro', 'aredoivan25@gmail.com', '$2y$10$HuaoX909/xM88A9M.qP/GugOsW/RYBREqFcywMwCXQaoHOOtuDJ.G', 'user', 0, 'Images/person.png'),
(12, 'ak', 'akg@gmail.com', '$2y$10$sHmxSQpDIfC.3B72hNW8L.5DRi4IFaqw2C9P6a2n8N0.6d2FW2y4O', 'user', 0, 'Images/person.png'),
(13, 'ECONI JOEL', 'econijoel@gmail.com', '$2y$10$tJTiCcH1VBeO6CYJta1rX.WMY3Wk4z7OAdmLe7PzWfA3hDoGBUR4e', 'user', 0, 'Images/person.png'),
(14, 'Aredo Ivan', 'aredoivan20@gmail.com', '$2y$10$/fhyr7oqPWn4o2wUhB3XBeTqPRtaBW6teXHzJXGWbNGV80l8W9RBi', 'admin', 0, 'Images/person.png'),
(15, 'Aredo Ivan', 'ivan@gmail.com', '$2y$10$7UJdKQ6ahApdWQObyaFdfOjllHQTtbU0aIuwsIt/hNicS6FmB8OPe', 'user', 0, 'Images/person.png'),
(16, 'Apolot Martha', 'apolot@gmail.com', '$2y$10$Nfzh2UzyxFV90BvgSXZHeeECl5yhziF0J7COhuJXw0kRMdbULjvDy', 'user', 0, 'Images/person.png'),
(17, 'Andrew', 'ad@gmail.com', '$2y$10$TladGhlMxixCz/OVeqR2.O01.ZWuHoCo5gMlR6u6hmDFKb47TVJdO', 'user', 0, 'Images/person.png'),
(18, 'econijoel@gmail.com', 'joeleconi02@gmail.com', '$2y$10$c.haIM9D1zWVYHvdxXqUWOPprUGGQ/j1hv.peDzmVKwh42obp.Hiq', 'user', 0, 'Images/person.png'),
(19, 'Kalule Brian', 'brian@gmail.com', '$2y$10$BueA7fQE9pIeLij7zFm7Lej2AItmHME/nUrwk4t9/iZC.00Yyqghq', 'user', 0, 'Images/person.png'),
(20, 'fermi demo', 'fermi@gmail.com', '$2y$10$2vvvFVXpnZJifALOuYXHLOEQiF7LkRHx7xhFoLU2QPoa.WMMJMiru', 'user', 0, 'Images/person.png'),
(21, 'fermi demo', 'fermidemo@gmail.com', '$2y$10$06YtCRXA77MnJlYKSTW5JuIKys.DJvKr/BUh0HI5uKutkbjB/lRUG', 'user', 0, 'Images/person.png'),
(22, 'Kalule Brian', 'kalule@gmail.com', '$2y$10$qZrJ7/tRYpppBntmNcx77.J98JYY80rHSXtcddwad3SA/0K.XjREm', 'user', 0, 'Images/person.png'),
(23, 'Ivan', 'ivo@gmail.com', '$2y$10$tlcWHrZ9O4lk7bVLhZlh/.kv6KwIq/w4ULGMJ72tPxuFTaxPUxotK', 'user', 0, 'Images/person.png'),
(24, 'ivan256', 'joel.econi20@edu.lirauni.ac.ug', '$2y$10$BGuA0.Ee4x03g3z7buas8OPftfvwvOg4lDJl7maYKa7EsACrPUayK', 'user', 0, 'Images/person.png'),
(25, 'abc', 'abc@gmail.com', '$2y$10$7P55YMtvf0h3xwc4vuzbwO68pQ7Syugd1TEuplucWX2cWJwvnRNBO', 'user', 0, 'Images/person.png'),
(26, 'reno', 'reno@gmail.com', '$2y$10$0vcgtgRsACmlIIkwksi3cOAzS4jnR.IjdLduT6r5rA9c9MVVUYoD2', 'user', 0, 'Images/person.png'),
(27, 'counter', 'counter@gmail.com', '$2y$10$h.Knymx0Tf31Td3Deg0ZGuzffkEW9HZhRQKjNi6Ipb0OvWWXKW0nO', 'user', 0, 'Images/person.png'),
(28, 'counter2', 'counter2@gmail.com', '$2y$10$O3vN1e7vT0/egDnPJJaxIuTawt5fxcfJCBtccUFC3cnRcUg4H4R2i', 'user', 0, 'Images/person.png'),
(29, 'Ivo20', 'akg20@gmail.com', '$2y$10$eGH1dgU6em3DW4yvZ4.vG.GMYRSzNzEwyiLA4w9rU.75jmKieYyVa', 'user', 0, 'Images/person.png'),
(30, 'joelec@gmail.com', 'gmail@gmail.com', '$2y$10$Cn0Wo6f8tUxdZz9HCVLpN.iE2iGG0UInCJd2COQJ8i7hSVMl3JtNi', 'user', 0, 'Images/person.png'),
(31, 'Aredo', 'aredoivan9@gmail.com', '$2y$10$MkdKNOLlIqShh5P9lZXFBOww7DikIlGTQouyaIEtcUUmM8LyldQEC', 'admin', 0, 'Images/person.png'),
(32, 'agk', 'agk@gmail.com', '$2y$10$P4yp4.En0PCxNeC1zA11/OBLo8vb3TyD5m1cF4TzsG1eOfEElKsd2', 'user', 0, 'Images/client.jpg'),
(33, 'Ivan', 'ivan20@gmail.com', '$2y$10$nZW4fRBeSZ5XLNJgKM4h0uu8GjRMVy5GrsvfR59nEWqLDO329AA5e', 'user', 0, 'Images/client.jpg'),
(34, 'aredo', 'joel.econi2@edu.lirauni.ac.ug', '$2y$10$yD0tElCk8N82gFVqg7ISFuWUBG234eL1jLYwzbtx4KP4xwOIzB34.', 'user', 0, 'Images/client.jpg'),
(35, 'ecwebs', 'ecwebtesting@gmmail.com', '$2y$10$CcmB12rzL.Lk8Zi10H0SneYIeUfPdBq7yaaqNLy1u5BZqt2qF5R3O', 'user', 0, 'Images/client.jpg'),
(36, 'okiria', 'aredoivan17@gmail.com', '$2y$10$ZtUP0eprzAg3MZdbRgGDHe1nTLD0dRQI1Rk5cO.NT4HDUcvimvcWK', 'user', 0, 'Images/client.jpg'),
(37, 'jonathan', 'aredoivan00@gmail.com', '$2y$10$rbyKW.m9pPlDCuyJvn6EJencMFy61ro0wnFup2HSSFkBzBghluYkm', 'user', 0, 'Images/client.jpg'),
(38, 'Kalule Brian', 'joeleconi00@gmail.com', '$2y$10$4m6KtbhqWa4bI3GCLaY39OFfJ7zdV.WOfpvJPYp0FT03i3lPAG7Ry', 'user', 0, 'Images/client.jpg'),
(39, 'econijoel', 'ec@gmail.com', '$2y$10$lsWRlX5iej7thzzoWDFA1OwHs0D3J4ly6kChWq5F9o0q.Tcn6327q', 'user', 0, 'Images/client.jpg'),
(40, 'Joeleconi', 'blossoms@gmail.com', '$2y$10$CYd4mHqOUdzdtfS0lqveX.ypb9SMhIGKWFm5z6lQvKrn9Al1QoLKu', 'user', 0, 'Images/client.jpg'),
(41, 'jxbs', 'jb@gmail.com', '$2y$10$kHQcsnT0yEU/KpI33OkgQuUupgGfEirLX9tdwnJMdvGLn72ubr/0q', 'user', 0, 'Images/client.jpg'),
(42, 'xasdFC', 'aredoivan@gmail.com', '$2y$10$L03EE67WiQfWpaCvU4ezBeGbql4jo2M10CJ29mXjwa1HmZtZfL49G', 'user', 0, 'Images/client.jpg'),
(43, 'Joo joo', 'trst@gmail.com', '$2y$10$CnlO8qUFS4pSKyOv2P8amOO0dQELzR7Hb2GLd5cmzQOMCrVX0U306', 'user', 0, 'Images/client.jpg'),
(44, 'Testing', 'testing@gmail.com', '$2y$10$fwZKmTynXxMrcMUKuiIy2uWDCsz3QuG6Y.Ab2GDGl5sUi7uPRGTV6', 'user', 0, 'Images/client.jpg'),
(45, 'Ec joel', 'ecjoel@gmail.com', '$2y$10$ke/l82/zp8DcQNAm5GB04.1pxh9kKdfSbbw3wLRu6Lkf2A3tRBSH6', 'user', 0, 'Images/client.jpg'),
(46, 'testings 45', 'testings5@gmail.com', '$2y$10$BlN3fpPkHuUs/1shCqxxr.P7HJIhtf6D9E6rxQtpF0yDegGrxPsue', 'user', 0, 'Images/client.jpg'),
(47, 'ECONI JOEL', 'econijoel02@gmail.com', '$2y$10$QJGLpH3VyLTIMGdTvBXqx.ev5GpPbbkiWEbg75cSIrZcPw1AWDQOW', 'user', 0, 'Images/client.jpg'),
(48, 'James Atandu', 'atandujames@gmail.com', '$2y$10$G78lAWUgEhyn7R1E69yTMu3F9qt471ZacVvMyc3RMT.fHSjoK4IHC', 'user', 0, 'Images/client.jpg'),
(49, 'Winter Bomani', 'winternuwagaba5@gmail.com', '$2y$10$Z7o0KoNu63ibwbHj/mjaVON5ZOcgdjVpz89l7ykOWQ.vERO48/CLK', 'admin', 0, 'Images/client.jpg'),
(50, 'Timo', 'timo@gmail.com', '$2y$10$MDj8qb1gZ0zddPq4qZB9VeaxsY9WcsAFoP9vfSx14sqdTW/cf4gW2', 'user', 0, 'Images/client.jpg'),
(51, 'Econi joel', 'ecwebtestings@gmail.com', '$2y$10$1DBABH0N51Vb0Df9y/qT8Og8vKtvR3Rr4/ZTtRkDcnp92tHDbNALG', 'user', 0, 'Images/client.jpg'),
(52, 'Junior theadus', 'junior@gmail.com', '$2y$10$Bx4A1cNP3qnkUHfjxn2qWuM9C1bY1zckYBFkFMThZp2uIO5qpm.iW', 'user', 0, 'Images/client.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `appointments_archive`
--
ALTER TABLE `appointments_archive`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_idx` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `appointments_archive`
--
ALTER TABLE `appointments_archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=816;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD CONSTRAINT `audit_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
