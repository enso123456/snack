-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2015 at 03:12 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `snack`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_id`, `friend_id`) VALUES
(1, 1, 2),
(2, 1, 4),
(3, 2, 1),
(4, 2, 4),
(5, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_11_10_064608_create_users_table', 1),
('2015_02_09_085824_create_users_table', 2),
('2015_02_09_085911_create_friends_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` datetime NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `description`, `profile`, `dob`, `remember_token`) VALUES
(1, 'romeo', '$2y$10$ZBLMNAq9GGCGLzin.M650OWKQga9j51e46jZJLxYKZvZgTWacnwEG', 'romeo@enso.com', 'romeo', 'enso', ' Jellyfish', 'Jellyfish.jpg', '1993-12-05 00:00:00', '6AhGHAz9eaFQgIJBKVEKdHcsdbaDRO4ehs7ZAPtndmkW0IEFxsguxr0OWumP'),
(2, 'john', '$2y$10$wYDhE5cJOb.6EldxngSgV.TSuSmLqQ6YY2h/7Oc5SPGXFLW0gZOyG', 'john@clivern.com', 'John', 'Clivern', 'I like Penguins', 'Penguins.jpg', '1993-12-13 00:00:00', 'RKL4EqmbDE8s4LVs3Pf9Nty58IonthF8Pna3tyyTDV8lVstGeoGZDEfTVMPJ'),
(3, 'mark', '$2y$10$sMOjNdNTdei8B64AN0NiJ.c6kkLRpzNBnvbegWPDtLpk.fP.DHUZ2', 'mark@clivern.com', 'mark', 'clivern', ' Hello!', 'Hydrangeas.jpg', '1991-11-23 00:00:00', 'WBEZdnoSu4XtAfRHEuxffV8JwjFonM2JOR0rcfX69I4SkoEYqbmLt0BV6Q6J'),
(4, 'Karl', '$2y$10$.W8Y.OflfVx6ShbatzLOj.ouWxwFvRxIFMAzv96IQYxlan6pIlwoy', 'karl@clivern.com', 'karl', 'clivern', '', '', '1992-10-11 00:00:00', ''),
(5, 'marl', '$2y$10$My6A6uIJDpxNf.u6hbCwwO0iz798P7OGV2uJchKcmnwAblIjdTAlW', 'marl@clivern.com', 'marl', 'clivern', '', '', '1995-09-10 00:00:00', ''),
(6, 'mary', '$2y$10$8.8BAaxYdsmqvmmFX.s8VOGfFtT6.OtDBFF5XCrUNgyUqD48xIkOu', 'mary@clivern.com', 'mary', 'clivern', '', '', '1996-08-16 00:00:00', ''),
(7, 'sels', '$2y$10$kwDKlt6vTTKHy0kxzFNNQ.BvNyX3fF8g8cW9xDODeTe1chiwJKPpu', 'sels@clivern.com', 'sels', 'clivern', '', '', '1997-07-24 00:00:00', ''),
(8, 'taylor', '$2y$10$i1WH8w1gEr0/iE4POdf7bujSrqEEyoKYd11VuByYRiegjYaSOIaRW', 'taylor@clivern.com', 'taylor', 'clivern', '', '', '1992-06-30 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
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
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
