-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2019 at 10:32 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astube`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` char(5) DEFAULT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('1', 'Music'),
('2', 'Games'),
('3', 'Sport'),
('4', 'Animation'),
('5', 'Trailer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `photo`) VALUES
(1, 'tester1', 'test@test.com', '$2y$10$teLaf7E0hhTzKKnk1Rl63u5/QmhfzARJMU2OVMdULlbE5efn.30wm', 'tester1', 'default.jpg'),
(2, 'aaa', '', '$2y$10$LAQOioBuwbUKX2ve5yt0Yu9N4jEpujBE7OZjHWZLfQzrtf7KmkaJi', 'aaa', 'default.jpg'),
(3, 'ea', '', '$2y$10$ICLLRgN0iKO79yLQWA.hWuFLndj/3EaHwu9PGROwYaOibzep9C7JG', 'ea', 'default.jpg'),
(7, 'abc', 'aaa@aa.com', '$2y$10$D83WKcK7eSHZIIKRE7QGAOcTKu9deYuh7bOZVwJJpdhErd9/32HOi', 'abc', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(5) NOT NULL,
  `nama_video` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `deskripsi` text,
  `tgl_masuk` date DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `thumb` varchar(225) NOT NULL,
  `owner` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `nama_video`, `kategori`, `deskripsi`, `tgl_masuk`, `video`, `thumb`, `owner`) VALUES
(2, 'BRIGHTBURN', 'Trailer', 'BRIGHTBURN Trailer', '2019-05-12', 'BRIGHTBURN.mkv', 'default.png', 'aaa'),
(3, 'IT CHAPTER TWO', 'Trailer', 'IT CHAPTER TWO Trailer', '2019-05-12', 'IT CHAPTER TWO.mkv', 'default.png', 'aaa'),
(4, 'John Wick - Chapter 3', 'Trailer', 'John Wick - Chapter 3 Trailer', '2019-05-12', 'John Wick- Chapter 3.mkv', 'default.png', 'aaa'),
(5, 'SPIDER-MAN- FAR FROM HOME', 'Trailer', 'SPIDER-MAN- FAR FROM HOME Trailer', '2019-05-12', 'SPIDER-MAN- FAR FROM HOME.mp4', 'default.png', 'aaa'),
(14, '[MV] REOL - drop pop candy', 'Music', 'REOL Music', '2019-05-08', '[MV] REOL - drop pop candy.MKV', 'Tsaber.jpg', 'aaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
