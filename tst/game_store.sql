-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 مارس 2025 الساعة 14:11
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game store`
--

-- --------------------------------------------------------

--
-- بنية الجدول `addcard`
--

CREATE TABLE `addcard` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `addcard`
--

INSERT INTO `addcard` (`id`, `name`, `price`) VALUES
(2, 'Hogwarts', '10 087 DA'),
(3, 'Astro Bot', '27 500 DA');

-- --------------------------------------------------------

--
-- بنية الجدول `prod`
--

CREATE TABLE `prod` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `prod`
--

INSERT INTO `prod` (`id`, `name`, `price`, `image`) VALUES
(21, 'Astro Bot', '27 500 DA', '/Users/belarouci/Desktop/image/Astro_Bot.jpg'),
(22, 'Hogwarts', '10 087 DA', '/Users/belarouci/Desktop/image/Hogwarts.jpg'),
(23, 'God of war', '9 055 DA', '/Users/belarouci/Desktop/image/God_of_war.jpg'),
(24, 'Crash team racing', '29 000 DA', '/Users/belarouci/Desktop/image/Crash_team_racing.jpg'),
(25, 'Call of duty', '40 648 DA', '/Users/belarouci/Desktop/image/Call_of_duty.jpg'),
(26, 'Kinect Adventures', '5 000 DA', '/Users/belarouci/Desktop/image/Kinect_Adventures.jpg'),
(27, 'BLITZ', '36 090 DA', '/Users/belarouci/Desktop/image/BLITZ.jpg'),
(29, 'The Hunter', '30 000 DA', '/Users/belarouci/Desktop/image/The_Hunter.jpg'),
--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcard`
--
ALTER TABLE `addcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcard`
--
ALTER TABLE `addcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
