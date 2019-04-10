-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2019 at 12:37 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(1, 'amit', 20190330);

-- --------------------------------------------------------

--
-- Table structure for table `new_record`
--

CREATE TABLE `new_record` (
  `id` int(50) NOT NULL,
  `author` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `body` varchar(256) NOT NULL,
  `trn_date` datetime NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `submittedby` varchar(50) NOT NULL,
  `key` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_record`
--

INSERT INTO `new_record` (`id`, `author`, `title`, `body`, `trn_date`, `name`, `age`, `password`, `submittedby`, `key`) VALUES
(10, 'a', 'a', 'a', '2019-04-04 14:13:50', 'a', 1, '', 'amit', ''),
(11, 'a', 'a', 'a', '2019-04-04 14:40:47', 'a', 45, '', 'amit', ''),
(12, 'aa', 'aa', 'a', '2019-04-04 14:40:38', 'a', 12, '', 'amit', ''),
(13, 'auth', 'jam', 'kalhiu', '2019-04-05 15:56:10', 'q', 7, '', 'amit8595', 'qOUSr2xvcG0$'),
(14, 'book', 'amit', 'anaha', '2019-04-06 06:18:45', 'amit', 14, '', 'itm', '1Snd6HILmGiB'),
(15, 'a', 'a', 'a', '2019-04-09 09:18:46', 'a', 0, '', 'amit001', 'lo0BwmHfSRPZ'),
(16, 'a', 'a', 'a', '2019-04-09 09:19:10', 'a', 0, '', 'amit001', 'lo0BwmHfSRPZ'),
(17, 'a', 'a', 'a', '2019-04-09 09:19:56', 'a', 0, '', 'amit001', 'lo0BwmHfSRPZ'),
(18, 'a', 'a', 'a', '2019-04-09 09:21:21', 'a', 0, 'a', 'amit001', 'lo0BwmHfSRPZ');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`email`, `key`, `expDate`) VALUES
('arun@gmail.com', '768e78024aa8fdb9b8fe87be86f647453bcc0ea211', '2019-04-11 08:58:46'),
('amit@gmail.com', '768e78024aa8fdb9b8fe87be86f647451a28cc9c4d', '2019-04-11 09:00:28'),
('amit@gmail.com', '768e78024aa8fdb9b8fe87be86f64745dfe186bb26', '2019-04-11 09:03:44'),
('amit@gmail.com', '768e78024aa8fdb9b8fe87be86f64745c7bd440cb3', '2019-04-11 09:04:44'),
('amit@gmail.com', '768e78024aa8fdb9b8fe87be86f64745048597e058', '2019-04-11 09:04:45'),
('amit@gmail.com', '768e78024aa8fdb9b8fe87be86f64745fa377b209d', '2019-04-11 09:04:45'),
('amit@gmail.com', '768e78024aa8fdb9b8fe87be86f6474504d7026b16', '2019-04-11 09:04:46'),
('amit@gmail.com', '768e78024aa8fdb9b8fe87be86f64745c6f81b41f1', '2019-04-11 09:04:46'),
('amit@gmail.com', '768e78024aa8fdb9b8fe87be86f64745bf9be35d32', '2019-04-11 09:06:07'),
('amit@gmail.com', '768e78024aa8fdb9b8fe87be86f647452de4123621', '2019-04-11 09:06:07'),
('amit@gmail.com', '768e78024aa8fdb9b8fe87be86f6474516771ebfc9', '2019-04-11 09:06:08'),
('amit@gmail.com', '768e78024aa8fdb9b8fe87be86f647454952a40b3d', '2019-04-11 09:06:08'),
('amit@gmail.com', '768e78024aa8fdb9b8fe87be86f647458dc98858b5', '2019-04-11 09:06:08'),
('amit@gmail.com', '768e78024aa8fdb9b8fe87be86f64745d118802f55', '2019-04-11 09:06:08'),
('amit@gmail.com', '768e78024aa8fdb9b8fe87be86f64745fe4b809901', '2019-04-11 09:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `email`, `password`, `category_id`, `title`, `body`, `author`, `created_at`) VALUES
(1, 'amit@gmail.com', '$2y$10$B8xI2mbx5QRgKBo78/XZDe/M.rQzqAOUcYkwZXg0TQrQmDHWI9Evm', 1, 'ABC', '', 'AMIT', '0000-00-00 00:00:00'),
(2, '', '', 2, 'sdsfsdfsdfsdfsfa', '', 'afafaef', '0000-00-00 00:00:00'),
(3, '', '', 3, 'sdsfsdfsdfsdfsfa', '', 'afafaef', '2019-03-30 00:00:00'),
(5, 'itm@gmail.com', '$2y$10$e/QHKt4FHAdP0aKCZoRSY.lutQO6zyu438ecKkFpzCJqiW4FZPSEq', 5, 'Book', '', 'baghel', '0000-00-00 00:00:00'),
(6, '', '', 1, 'My post', 'Post api', 'Amit', '0000-00-00 00:00:00'),
(7, '', '', 0, '', '', '', '0000-00-00 00:00:00'),
(8, '', '', 0, '', '', '', '0000-00-00 00:00:00'),
(9, '', '', 0, '', '', '', '0000-00-00 00:00:00'),
(10, '', '', 0, '', '', '', '0000-00-00 00:00:00'),
(11, '', '', 0, '', '', '', '0000-00-00 00:00:00'),
(12, '', '$2y$10$GCDCAifxgNkxY.k3EGm46Oisz/YZ.N5FrpEcmNUYcDr47ry89r4MS', 2, 'abc', '', 'aaa', '0000-00-00 00:00:00'),
(13, '', '$2y$10$aW6edoW3maYLdbhH9R2WoeBg1YPzBqtEojz.HYUak7kUf10HadXtu', 2, 'abc', '', 'aaa', '0000-00-00 00:00:00'),
(14, '', '$2y$10$7KqaFRvK4u5X.5fY6SmsDugFyKvigmrPyu5ED65hnSEnlxHmESTfC', 5, 'CODE', '', 'Amit singh', '0000-00-00 00:00:00'),
(15, '', '$2y$10$3MEbjAvPzDNbpMRpA.VO4uDQmulu7rHT.4QpMZYmIIqxh6vfBddhO', 5, 'CODE', '', 'Amit singh', '0000-00-00 00:00:00'),
(16, '', '$2y$10$f.VV3pvdykkexqBIWSVAq.CaWZ6oG.KlQtQKPoOxexO4.TMVksmPa', 5, 'CODE', '', 'Amit singh', '0000-00-00 00:00:00'),
(17, 'amitsingh@gmail.com', '$2y$10$/mtrb81j7TgTFHw5aLavaOk22Mi5iGaagyhxbRGp4PTTjkGwRyFDC', 5, 'CODE', '', 'Amit singh', '0000-00-00 00:00:00'),
(18, 'amit_Singh@gmail.com', '$2y$10$QJa/7FKbunK78.HNXwNkJe6zVSlyCa2N3EEFYb1n7iuW24DzjGZ/C', 5, 'Book', '', 'Amit', '0000-00-00 00:00:00'),
(19, '', '$2y$10$inwA8MQbsSP06Kq5hSlqa.pHnHSp62.q9CBWqB1dvwwu.6cxLhLpC', 0, '', '', '', '0000-00-00 00:00:00'),
(20, '', '$2y$10$3OVpznagJJgnxPYhhvTV8ubLiLZuMuOHOv7Z2HEB1qpIajIA4cJ9a', 0, '', '', '', '0000-00-00 00:00:00'),
(21, '', '$2y$10$XAgOmq0WSnIdQSiMWTIsVu/IWe6LrUnP/qnjK/BaxbHCNkHM1eePG', 0, '', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `api_key` varchar(200) NOT NULL,
  `trn_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `api_key`, `trn_date`) VALUES
(27, 'arun', 'arun@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'h*eZY0CDg&65', '2019-04-05 13:20:23'),
(29, 'amit', 'amit@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'sn1CNr!5f&9d', '2019-04-05 14:01:14'),
(30, 'amit8595', 'amit@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'qOUSr2xvcG0$', '2019-04-05 14:43:03'),
(31, 'amit singh', 'amit@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'fpv6M7hEqiXg', '2019-04-05 15:25:07'),
(32, 'itm', 'amit@gmail.com', '202cb962ac59075b964b07152d234b70', '1Snd6HILmGiB', '2019-04-06 06:16:10'),
(33, 'a', 'amit@gmail.com', '202cb962ac59075b964b07152d234b70', 'C8&F6Inzip#j', '2019-04-08 12:02:56'),
(34, 'amit001', 'amitsingh8595@gmail.com', '202cb962ac59075b964b07152d234b70', 'lo0BwmHfSRPZ', '2019-04-09 09:12:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_record`
--
ALTER TABLE `new_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `new_record`
--
ALTER TABLE `new_record`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
