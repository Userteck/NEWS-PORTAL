-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 09:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `r_id` int(11) NOT NULL,
  `r_title` varchar(255) NOT NULL,
  `r_category` varchar(255) NOT NULL,
  `r_content` varchar(10000) NOT NULL,
  `r_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='article (raksts)';

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_title` varchar(255) NOT NULL,
  `n_category` varchar(255) NOT NULL,
  `n_content` varchar(10000) NOT NULL,
  `n_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='news';

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_title`, `n_category`, `n_content`, `n_img`) VALUES
(1, '‘I just can’t block this out’ Punk singer ‘Chacha’ Ivanov spoke out in support of the Moskalev family at a recent concert', 'Political', 'The case of 13-year-old Masha Moskaleva, who drew an anti-war picture in school art class in April 2022, has captivated certain segments of the Russian population. The drawing set off a cascade of legal problems for Moskaleva and her single father, Alexey Moskalev, who was sentenced, on April 5, to two years in prison for his own posts on social media. At a concert in Moscow on April 15, Alexander “Chacha” Ivanov, frontman for the punk band Naive, wore a T-shirt emblazoned with Masha Moskaleva’s name and spoke to the audience about her case.\r\n\r\nAlexander “Chacha” Ivanov, the singer for the Russian punk band Naive, wore a T-shirt emblazoned with the words Masha Moskaleva on stage at an April 15 concert. He also spoke to the audience about the persecution of the Moskalev family, writes Mediazona.\r\n\r\n“Friends, I’m taking this opportunity. I can’t pass it up, I’ve tried to block out this affair, but I don’t know, I can’t do it, I don’t understand why, it worked for some reason with everything else. This thing with Masha Moskaleva somehow just won’t leave me alone. Maybe it’s because my own daughter is about the same age — she’s 14, and Masha is 13. Friends, I want to ask you to google this case, find out what happened, be horrified about what happened to Masha and her family because of a drawing she did during art class,” said the musician.\r\n\r\nThe audience reacted to Ivanov’s words with applause and started chanting “Fuck the war!”', 'pictures/gallery.png'),
(2, 'De Facto: Latvian manufacturer on US watch list may be linked to Russia', 'Local', 'The Latvian manufacturer of high-quality navigation equipment Fiber Optical Solution, included in the so-called US export control list last December, has historical ties to two Russian companies. The United States said that the Latvian manufacturer helped the Russian military industry. The Ministry of Foreign Affairs of Latvia has no information that would confirm this. The company itself contested the inclusion in the list, according to the portal rus.lsm.lv with reference to the De facto program of Latvian television.', 'pictures/tree.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `username`, `email`, `password`, `active`) VALUES
(10, 'platon', 'sadasdasd@gmail.com', 'asdasda', 1),
(14, '6756756', 'asd45623asd@gmail.com', '4567645', 0),
(17, 'savva', 'savva@savva.lv', 'asdasda', 0),
(18, 'Saveliy', 'saveliy.martynov@gmail.com', 'asdasda', 0),
(22, 'asdasd', 'xzxasd@saddsa.lv', 'dsads', 0),
(23, 'dsadsadsa', 'dsasdadsa', 'dsadsadsa', 0),
(24, 'dsaadsda', 'test', 'test', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
