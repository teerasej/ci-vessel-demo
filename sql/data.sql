-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 03, 2018 at 04:24 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `FishingDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Country`
--

CREATE TABLE `Country` (
  `id` int(11) NOT NULL,
  `Name` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Country`
--

INSERT INTO `Country` (`id`, `Name`) VALUES
(2, 'Thailand'),
(3, 'Brunei'),
(4, 'Cambodia'),
(5, 'Japan'),
(6, 'Malaysia'),
(7, 'Laos'),
(8, 'Vietnam');

-- --------------------------------------------------------

--
-- Table structure for table `Vessel`
--

CREATE TABLE `Vessel` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Country_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Vessel`
--

INSERT INTO `Vessel` (`id`, `Name`, `Country_ID`) VALUES
(1, 'Lind-Schuppe', 4),
(2, 'Haag-Armstrong', 3),
(3, 'Shields-Shields', 4),
(4, 'Cronin, Cronin and Leffler', 8),
(5, 'Rau, Prohaska and White', 4),
(6, 'Kub Inc', 8),
(7, 'O\'Kon, Hyatt and Johnston', 8),
(8, 'Bosco and Sons', 4),
(9, 'Adams-Cummings', 4),
(10, 'Sporer-Stroman', 6),
(11, 'Kassulke and Sons', 4),
(12, 'Jast-Lang', 6),
(13, 'Waelchi Inc', 2),
(14, 'Harber, Anderson and Lebsack', 8),
(15, 'Thiel-Lubowitz', 6),
(16, 'Powlowski-Harvey', 1),
(17, 'Robel, Krajcik and Eichmann', 3),
(18, 'Jenkins, Lueilwitz and Hermiston', 7),
(19, 'Sporer-Huel', 2),
(20, 'Schaden, Hettinger and Douglas', 3),
(21, 'Schultz, Pacocha and Bashirian', 1),
(22, 'Bahringer-Rippin', 5),
(23, 'Christiansen Group', 8),
(24, 'Jaskolski Group', 5),
(25, 'Murazik, Torphy and Bosco', 4),
(26, 'Deckow Inc', 5),
(27, 'Langosh-Roberts', 2),
(28, 'Kerluke, Kassulke and Hilpert', 5),
(29, 'Hand Group', 2),
(30, 'Pfeffer Inc', 8),
(31, 'Murazik, Spinka and Hills', 2),
(32, 'Romaguera-Effertz', 8),
(33, 'Kemmer, Kohler and Stehr', 8),
(34, 'Huels, Stroman and Bernier', 8),
(35, 'Christiansen-Rowe', 1),
(36, 'Goyette-Lebsack', 3),
(37, 'Murazik, Yundt and VonRueden', 7),
(38, 'Klocko Group', 5),
(39, 'Larkin, Ullrich and O\'Hara', 2),
(40, 'Block, Beatty and Reichert', 7),
(41, 'Lehner-Kovacek', 5),
(42, 'Harvey LLC', 8),
(43, 'Luettgen Group', 8),
(44, 'Jacobson LLC', 8),
(45, 'Upton, Lueilwitz and Rempel', 7),
(46, 'Kozey LLC', 6),
(47, 'Kunze Inc', 6),
(48, 'Daugherty-Cremin', 1),
(49, 'Armstrong and Sons', 2),
(50, 'Deckow Group', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Country`
--
ALTER TABLE `Country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Vessel`
--
ALTER TABLE `Vessel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Country`
--
ALTER TABLE `Country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Vessel`
--
ALTER TABLE `Vessel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
