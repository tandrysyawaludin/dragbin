-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2019 at 01:42 PM
-- Server version: 10.2.25-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dragbinc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_token`
--

CREATE TABLE `access_token` (
  `id` int(11) NOT NULL,
  `token` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_agent` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_token`
--

INSERT INTO `access_token` (`id`, `token`, `user_id`, `user_agent`, `is_active`, `updated_at`, `created_at`) VALUES
(84, 'KiFkdJG4bsXQSmpIqb8eWmV4pk2g2MwMqxJ8Js6m8tTfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsoYjKV/FsQ1cGqNFki+wp/A', 39, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-06-09 05:22:20', '2019-06-09 05:22:20'),
(85, 'KiFkdJG4bsXQSmpIqb8eWmV4pk2g2MwMqxJ8Js6m8tTfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgspDb2ngTg7fZ6BKwEt3JGXr1eDSzQE3fDwRRlSmXicy3w==', 39, 'Mozilla/5.0 (Linux; Android 7.0; Moto C Plus Build/NRD90M.03.045) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/62.0.3202.84 Mobile Safari/537.36 OPT/1.17.66', 0, '2019-06-09 05:22:45', '2019-06-09 05:22:45'),
(86, 'KiFkdJG4bsXQSmpIqb8eWmV4pk2g2MwMqxJ8Js6m8tTfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgspDb2ngTg7fZ6BKwEt3JGXr1eDSzQE3fDwRRlSmXicy3w==', 39, 'Mozilla/5.0 (Linux; Android 7.0; Moto C Plus Build/NRD90M.03.045) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/62.0.3202.84 Mobile Safari/537.36 OPT/1.17.66', 0, '2019-06-10 12:35:51', '2019-06-10 12:35:51'),
(87, 'KiFkdJG4bsXQSmpIqb8eWjp6ac6e+UjEcv0QGkEwg3nfyMAEKXn3oyCKSYwy632iuQbzaCPNGJyCxhM/TpmUQPUJVFLjCCC3rdPzicUvgsoYjKV/FsQ1cGqNFki+wp/A', 40, 'Mozilla/5.0 (Linux; Android 7.0; Moto C Plus Build/NRD90M.03.045) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/62.0.3202.84 Mobile Safari/537.36 OPT/1.17.66', 1, '2019-06-10 12:39:37', '2019-06-10 12:39:37'),
(88, 'KiFkdJG4bsXQSmpIqb8eWmV4pk2g2MwMqxJ8Js6m8tTfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgspDb2ngTg7fZ6BKwEt3JGXr1eDSzQE3fDwRRlSmXicy3w==', 39, 'Mozilla/5.0 (Linux; Android 7.0; Moto C Plus Build/NRD90M.03.045) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/62.0.3202.84 Mobile Safari/537.36 OPT/1.17.66', 1, '2019-06-10 12:41:27', '2019-06-10 12:41:27'),
(89, 'KiFkdJG4bsXQSmpIqb8eWmV4pk2g2MwMqxJ8Js6m8tTfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgspDb2ngTg7fZ6BKwEt3JGXr1eDSzQE3fDwRRlSmXicy3w==', 39, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 1, '2019-06-10 14:56:14', '2019-06-10 14:56:14'),
(90, 'KiFkdJG4bsXQSmpIqb8eWjp6ac6e+UjEcv0QGkEwg3nfyMAEKXn3oyCKSYwy632iuQbzaCPNGJyCxhM/TpmUQPUJVFLjCCC3rdPzicUvgsoYjKV/FsQ1cGqNFki+wp/A', 40, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 1, '2019-06-10 15:31:28', '2019-06-10 15:31:28'),
(91, 'KiFkdJG4bsXQSmpIqb8eWmV4pk2g2MwMqxJ8Js6m8tTfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgspDb2ngTg7fZ6BKwEt3JGXr1eDSzQE3fDwRRlSmXicy3w==', 39, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 1, '2019-06-20 06:13:36', '2019-06-20 06:13:36'),
(92, 'KiFkdJG4bsXQSmpIqb8eWmV4pk2g2MwMqxJ8Js6m8tTfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgspDb2ngTg7fZ6BKwEt3JGXr1eDSzQE3fDwRRlSmXicy3w==', 39, 'Mozilla/5.0 (Linux; Android 7.0; Moto C Plus) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Mobile Safari/537.36', 1, '2019-06-22 07:49:23', '2019-06-22 07:49:23'),
(93, 'KiFkdJG4bsXQSmpIqb8eWmV4pk2g2MwMqxJ8Js6m8tTfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgspDb2ngTg7fZ6BKwEt3JGXr1eDSzQE3fDwRRlSmXicy3w==', 39, 'Mozilla/5.0 (Linux; Android 7.0; Moto C Plus) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Mobile Safari/537.36', 1, '2019-06-23 06:57:52', '2019-06-23 06:57:52'),
(94, 'KiFkdJG4bsXQSmpIqb8eWmV4pk2g2MwMqxJ8Js6m8tTfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgspDb2ngTg7fZ6BKwEt3JGXr1eDSzQE3fDwRRlSmXicy3w==', 39, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 1, '2019-06-25 11:37:37', '2019-06-25 11:37:37'),
(95, 'KiFkdJG4bsXQSmpIqb8eWmV4pk2g2MwMqxJ8Js6m8tTfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgspDb2ngTg7fZ6BKwEt3JGXr1eDSzQE3fDwRRlSmXicy3w==', 39, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 1, '2019-07-05 06:24:24', '2019-07-05 06:24:24'),
(96, 'KiFkdJG4bsXQSmpIqb8eWmV4pk2g2MwMqxJ8Js6m8tTfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgspDb2ngTg7fZ6BKwEt3JGXr1eDSzQE3fDwRRlSmXicy3w==', 39, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 1, '2019-07-05 14:48:43', '2019-07-05 14:48:43');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int(11) NOT NULL,
  `courier_name` varchar(50) NOT NULL,
  `courier_phone_number` varchar(20) NOT NULL,
  `delivery_photo` varchar(200) NOT NULL,
  `other_detail` text NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`id`, `courier_name`, `courier_phone_number`, `delivery_photo`, `other_detail`, `transaction_id`, `updated_at`, `created_at`) VALUES
(2, 'Joko', '0812121212', '12.png', 'jalala', 12, '2019-06-10 15:33:26', '2019-06-10 15:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `source_account_number` varchar(30) NOT NULL,
  `destination_account_number` varchar(30) NOT NULL,
  `total_payment` int(11) NOT NULL,
  `payment_slip` varchar(100) NOT NULL,
  `status` enum('paid','decline','expired','') NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `transaction_id`, `source_account_number`, `destination_account_number`, `total_payment`, `payment_slip`, `status`, `updated_at`, `created_at`) VALUES
(5, 12, '081212121', '3469797921', 100000, '12.png', 'paid', '2019-06-10 15:32:35', '2019-06-10 15:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `categories` set('hdpe','ldpe','pet','pp','ps','vinyl','others') DEFAULT NULL,
  `description` varchar(700) NOT NULL,
  `count_view` int(11) NOT NULL DEFAULT 0,
  `type` enum('sell','buy') NOT NULL DEFAULT 'buy',
  `user_id` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `categories`, `description`, `count_view`, `type`, `user_id`, `is_active`, `updated_at`, `created_at`) VALUES
(14, 'hdpe,ldpe,pet,pp,ps,vinyl,others', 'Butuh masing-masing kategori 100kg', 0, 'buy', 39, 1, '2019-06-10 12:37:05', '2019-06-09 05:20:56'),
(15, NULL, '', 0, 'buy', 40, 0, '2019-06-10 12:38:06', '2019-06-10 12:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `total_pay` int(11) NOT NULL,
  `description` varchar(700) NOT NULL,
  `status` enum('offered','accepted','paid','delivered','received') NOT NULL DEFAULT 'offered',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `seller_id`, `buyer_id`, `total_pay`, `description`, `status`, `updated_at`, `created_at`) VALUES
(12, 39, 40, 80000, 'Saya tawarkan untuk 100kg semua kategori', 'delivered', '2019-06-10 15:33:26', '2019-06-10 12:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `map_link` text DEFAULT NULL,
  `photo` varchar(200) NOT NULL DEFAULT 'no-image.svg',
  `whatsapp` varchar(50) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `partner_code` varchar(100) DEFAULT NULL,
  `email_verified` tinyint(1) NOT NULL DEFAULT 0,
  `is_blocked` tinyint(1) DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `phone_number`, `password`, `name`, `address`, `map_link`, `photo`, `whatsapp`, `facebook`, `partner_code`, `email_verified`, `is_blocked`, `updated_at`, `created_at`) VALUES
(39, 'syawaludintandry@yahoo.com', '08121212', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'tandry', 'jl nila no 53', 'syawaludintandry@yahoo.com', 'no-image.svg', '081921212', 'facebook.com/tandry', 'A123121', 1, 0, '2019-06-09 05:20:56', '2019-06-09 05:20:56'),
(40, 'syawaludintandry@gmail.com', '081214226778', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'Syawal', 'Jl cerme no 56', 'syawaludintandry@gmail.com', 'no-image.svg', '081233343', 'Facebook.com/syawal', NULL, 1, 0, '2019-06-10 12:38:05', '2019-06-10 12:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_rating`
--

CREATE TABLE `user_rating` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `user_rater` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_token`
--
ALTER TABLE `access_token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seller_id` (`seller_id`),
  ADD KEY `buyer_id` (`buyer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `users` ADD FULLTEXT KEY `address` (`address`);

--
-- Indexes for table `user_rating`
--
ALTER TABLE `user_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_rater` (`user_rater`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_token`
--
ALTER TABLE `access_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_rating`
--
ALTER TABLE `user_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `access_token`
--
ALTER TABLE `access_token`
  ADD CONSTRAINT `access_token_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD CONSTRAINT `deliveries_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transactions_ibfk_3` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_rating`
--
ALTER TABLE `user_rating`
  ADD CONSTRAINT `user_rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_rating_ibfk_2` FOREIGN KEY (`user_rater`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
