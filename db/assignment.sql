-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 04:53 AM
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
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_info`
--

CREATE TABLE `access_info` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `user_id` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `browser` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `os` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `device` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `login_time` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `logout_time` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `access_info`
--

INSERT INTO `access_info` (`id`, `date`, `user_id`, `browser`, `os`, `ip`, `device`, `login_time`, `logout_time`) VALUES
(1, '2022-10-27', '1', 'Chrome', 'Windows 10', '::1', 'Computer', '2022-10-27 20:07:46', '2022-10-28 04:12:34 '),
(2, '2022-10-27', '1', 'Chrome', 'Windows 10', '::1', 'Computer', '2022-10-27 21:52:59', '2022-10-28 04:12:34 '),
(3, '2022-10-28', '1', 'Chrome', 'Windows 10', '::1', 'Computer', '2022-10-28 04:16:00', '2022-10-28 04:16:12 ');

-- --------------------------------------------------------

--
-- Table structure for table `currency_informations`
--

CREATE TABLE `currency_informations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `num_code` varchar(255) NOT NULL,
  `char_code` varchar(255) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `value` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currency_informations`
--

INSERT INTO `currency_informations` (`id`, `name`, `num_code`, `char_code`, `nominal`, `value`) VALUES
(1, 'Австралийский доллар', '036', 'AUD', '1', '174757.00'),
(2, 'Фунт стерлингов Соединенного королевства', '826', 'GBP', '1', '489230.00'),
(3, 'Белорусских рублей', '974', 'BYR', '1000', '170272.00'),
(4, 'Датских крон', '208', 'DKK', '10', '418614.00'),
(5, 'Доллар США', '840', 'USD', '1', '315673.00'),
(6, 'Евро', '978', 'EUR', '1', '310938.00'),
(7, 'Исландских крон', '352', 'ISK', '100', '356693.00'),
(8, 'Казахстанских тенге', '398', 'KZT', '100', '204288.00'),
(9, 'Канадский доллар', '124', 'CAD', '1', '202549.00'),
(10, 'Норвежских крон', '578', 'NOK', '10', '420914.00'),
(11, 'СДР (специальные права заимствования)', '960', 'XDR', '1', '418737.00'),
(12, 'Сингапурский доллар', '702', 'SGD', '1', '180529.00'),
(13, 'Турецких лир', '792', 'TRL', '1000000', '193072.00'),
(14, 'Украинских гривен', '980', 'UAH', '10', '587058.00'),
(15, 'Шведских крон', '752', 'SEK', '10', '339572.00'),
(16, 'Швейцарский франк', '756', 'CHF', '1', '211464.00'),
(17, 'Японских иен', '392', 'JPY', '100', '267429.00'),
(18, 'Азербайджанский манат', '944', 'AZN', '1', '360935.00'),
(19, 'Армянских драмов', '051', 'AMD', '100', '154673.00'),
(20, 'Белорусский рубль', '933', 'BYN', '1', '247955.00'),
(21, 'Болгарский лев', '975', 'BGN', '1', '314451.00'),
(22, 'Бразильский реал', '986', 'BRL', '1', '115239.00'),
(23, 'Венгерских форинтов', '348', 'HUF', '100', '151399.00'),
(24, 'Гонконгских долларов', '344', 'HKD', '10', '783138.00'),
(25, 'Индийских рупий', '356', 'INR', '100', '737450.00'),
(26, 'Киргизских сомов', '417', 'KGS', '100', '739878.00'),
(27, 'Китайских юаней', '156', 'CNY', '10', '843967.00'),
(28, 'Молдавских леев', '498', 'MDL', '10', '317118.00'),
(29, 'Польский злотый', '985', 'PLN', '1', '129449.00'),
(30, 'Румынский лей', '946', 'RON', '1', '125906.00'),
(31, 'Таджикских сомони', '972', 'TJS', '10', '600657.00'),
(32, 'Турецких лир', '949', 'TRY', '10', '329830.00'),
(33, 'Новый туркменский манат', '934', 'TMT', '1', '175311.00'),
(34, 'Узбекских сумов', '860', 'UZS', '10000', '550051.00'),
(35, 'Чешских крон', '203', 'CZK', '10', '250762.00'),
(36, 'Южноафриканских рэндов', '710', 'ZAR', '10', '341059.00'),
(37, 'Вон Республики Корея', '410', 'KRW', '1000', '433020.00');

-- --------------------------------------------------------

--
-- Table structure for table `log_table`
--

CREATE TABLE `log_table` (
  `id` int(11) NOT NULL,
  `request_ip` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(2) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_table`
--

INSERT INTO `log_table` (`id`, `request_ip`, `created_at`, `status`, `comments`) VALUES
(1, '::1', '2022-10-28 07:38:28', 200, 'success'),
(2, '::1', '2022-10-28 07:41:13', 200, 'success'),
(3, '::1', '2022-10-28 07:41:13', 200, 'success'),
(4, '::1', '2022-10-28 07:41:13', 200, 'success'),
(5, '::1', '2022-10-28 07:41:13', 200, 'success'),
(6, '::1', '2022-10-28 07:41:13', 200, 'success'),
(7, '::1', '2022-10-28 07:41:13', 200, 'success'),
(8, '::1', '2022-10-28 07:41:13', 200, 'success'),
(9, '::1', '2022-10-28 07:41:13', 200, 'success'),
(10, '::1', '2022-10-28 07:41:13', 200, 'success'),
(11, '::1', '2022-10-28 07:41:13', 200, 'success'),
(12, '::1', '2022-10-28 07:53:06', 200, 'success'),
(13, '::1', '2022-10-28 07:53:16', 200, 'success'),
(14, '::1', '2022-10-28 07:55:45', 401, 'Invalid request type'),
(15, '::1', '2022-10-28 07:56:28', 200, 'success'),
(16, '::1', '2022-10-28 08:03:07', 200, 'success'),
(17, '::1', '2022-10-28 08:03:11', 401, 'Invalid request type'),
(18, '::1', '2022-10-28 08:03:29', 401, 'Invalid request type'),
(19, '::1', '2022-10-28 08:03:42', 401, 'Invalid request type'),
(20, '::1', '2022-10-28 08:04:15', 401, 'Invalid request type'),
(21, '::1', '2022-10-28 08:06:40', 200, 'success'),
(22, '::1', '2022-10-28 08:07:54', 200, 'success');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `last_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `modified_at`, `last_login`, `last_ip`) VALUES
(1, 'demo_123', '$2y$10$lp2gk8GxXPWZ6N.jk5ozPujD4.qjQ/7icmpx4qZanlIHFE4Ir0guS', '2022-10-27 23:14:57', '2022-10-27 19:14:44', '2022-10-27 19:14:44', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_info`
--
ALTER TABLE `access_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency_informations`
--
ALTER TABLE `currency_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_table`
--
ALTER TABLE `log_table`
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
-- AUTO_INCREMENT for table `access_info`
--
ALTER TABLE `access_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `currency_informations`
--
ALTER TABLE `currency_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `log_table`
--
ALTER TABLE `log_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
