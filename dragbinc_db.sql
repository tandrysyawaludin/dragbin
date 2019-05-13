-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2019 at 05:28 PM
-- Server version: 10.2.23-MariaDB
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
(9, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiOnimLTdPG/58H+z4LIJLS0=', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-03-16 11:50:48'),
(10, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiOnimLTdPG/58H+z4LIJLS0=', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-03-16 11:51:13'),
(11, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-03-16 13:59:51'),
(12, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-03-16 14:05:33'),
(13, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-03-16 14:14:21'),
(14, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-03-16 14:39:10'),
(15, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-03-17 14:16:58'),
(16, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-03-28 04:50:05'),
(17, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-04-03 11:53:07'),
(18, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-04-16 15:13:01'),
(19, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-04-17 15:54:56'),
(20, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-04-18 11:20:30'),
(21, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-04-18 17:32:41'),
(22, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-04-22 15:24:50'),
(23, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-04-22 15:27:49'),
(24, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-04-24 11:59:24'),
(25, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:66.0) Gecko/20100101 Firefox/66.0', 0, '2019-05-12 04:34:52', '2019-04-29 10:09:21'),
(26, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-04-29 12:41:32'),
(27, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Linux; Android 7.0; Moto C Plus Build/NRD90M.03.045) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Mobile Safari/537.36 OPR/51.3.2461.138727', 0, '2019-05-12 04:34:52', '2019-05-01 10:23:08'),
(28, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Mobile Safari/537.36', 0, '2019-05-12 04:34:52', '2019-05-01 10:30:36'),
(29, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Linux; Android 7.0; Moto C Plus Build/NRD90M.03.045) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Mobile Safari/537.36 OPR/51.3.2461.138727', 0, '2019-05-12 04:34:52', '2019-05-01 10:36:30'),
(30, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Mobile Safari/537.36', 0, '2019-05-12 04:34:52', '2019-05-01 10:37:32'),
(31, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Mobile Safari/537.36', 0, '2019-05-12 04:34:52', '2019-05-01 10:41:23'),
(32, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Linux; Android 7.0; Moto C Plus Build/NRD90M.03.045) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Mobile Safari/537.36 OPR/51.3.2461.138727', 0, '2019-05-12 04:34:52', '2019-05-01 10:45:11'),
(33, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Linux; Android 7.0; Moto C Plus Build/NRD90M.03.045) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Mobile Safari/537.36 OPR/51.3.2461.138727', 0, '2019-05-12 04:34:52', '2019-05-01 10:46:11'),
(34, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Linux; Android 7.0; Moto C Plus Build/NRD90M.03.045) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Mobile Safari/537.36 OPR/51.3.2461.138727', 0, '2019-05-12 04:34:52', '2019-05-01 10:47:00'),
(35, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-05-02 07:05:13'),
(36, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-05-02 07:37:05'),
(37, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-05-03 08:22:30'),
(38, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-05-03 10:52:14'),
(39, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-05-03 10:53:03'),
(40, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-05-04 08:39:40'),
(41, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-05-04 13:37:26'),
(42, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-05-09 06:29:31'),
(43, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-12 04:34:52', '2019-05-10 16:03:05'),
(44, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-12 04:34:52', '2019-05-11 13:48:17'),
(45, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-12 04:34:52', '2019-05-12 03:50:41'),
(46, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-12 13:46:14', '2019-05-12 13:46:14'),
(47, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-13 06:04:43', '2019-05-13 06:04:43'),
(48, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-13 09:25:34', '2019-05-13 09:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `categories` set('hdpe','ldpe','pet','pp','ps','vinyl','others') NOT NULL,
  `description` varchar(700) NOT NULL,
  `count_view` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `categories`, `description`, `count_view`, `user_id`, `is_active`, `updated_at`, `created_at`) VALUES
(2, 'hdpe,ldpe,pet,pp,ps,vinyl,others', 'Budi\r\nTono\r\nSilit\r\nBajing', 0, 16, 1, '2019-05-12 04:34:16', '2019-03-16 10:27:08'),
(3, '', '', 0, 17, 0, '2019-05-12 04:34:16', '2019-04-29 12:28:30');

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
  `courier_name` varchar(50) NOT NULL,
  `courier_phone_number` varchar(50) NOT NULL,
  `status` enum('created','paid','delivered','received','') NOT NULL DEFAULT 'created',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `seller_id`, `buyer_id`, `total_pay`, `description`, `courier_name`, `courier_phone_number`, `status`, `updated_at`, `created_at`) VALUES
(1, 16, 17, 1200000, 'PET: 100kg', 'Joko', '08123829323', 'created', '2019-05-13 09:28:19', '2019-05-13 09:28:19');

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
(16, 'syawaludintandry@yahoo.com', '0898999999', 'de2ad159d3cff810c09a6a6681bd52254eba8818', 'tandry', 'jl duku 1 c2/25 pondok sejahtera', 'syawaludintandry@yahoo.com', 'no-image.svg', '', '', 'A62319', 1, 0, '2019-05-12 04:32:48', '2019-03-12 12:53:22'),
(17, 'syawaludintandry@gmail.com', '081212', 'de2ad159d3cff810c09a6a6681bd52254eba8818', 'tandry', 'jlaslajslkalsk', 'syawaludintandry@gmail.com', 'no-image.svg', '0812121212', 'akjlsalsal', NULL, 0, 0, '2019-05-12 04:32:48', '2019-04-29 12:28:30');

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
  ADD KEY `buyer_id` (`buyer_id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `whatsapp` (`whatsapp`),
  ADD UNIQUE KEY `facebook` (`facebook`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`);

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
