-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2019 at 09:17 PM
-- Server version: 10.2.24-MariaDB
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
(43, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-05-10 16:03:05'),
(44, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-05-11 13:48:17'),
(45, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 0, '2019-05-12 04:34:52', '2019-05-12 03:50:41'),
(46, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 0, '2019-05-12 13:46:14', '2019-05-12 13:46:14'),
(47, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 0, '2019-05-13 06:04:43', '2019-05-13 06:04:43'),
(48, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 0, '2019-05-13 09:25:34', '2019-05-13 09:25:34'),
(49, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 0, '2019-05-13 14:33:15', '2019-05-13 14:33:15'),
(50, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 0, '2019-05-14 14:31:02', '2019-05-14 14:31:02'),
(51, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 0, '2019-05-15 14:35:56', '2019-05-15 14:35:56'),
(52, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 0, '2019-05-17 15:56:28', '2019-05-17 15:56:28'),
(53, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ijnZgVuLV/38aoBkyEhYMiLd9TeNETpxRraG/EV8/1BR2zAO8GPEq2MgdCK0vzPLLzvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 0, '2019-05-18 10:55:17', '2019-05-18 10:55:17'),
(54, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 0, '2019-05-18 11:24:18', '2019-05-18 11:24:18'),
(55, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 0, '2019-05-18 13:49:44', '2019-05-18 13:49:44'),
(56, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Linux; Android 7.0; Moto C Plus Build/NRD90M.03.045) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.90 Mobile Safari/537.36 OPR/52.0.2517.139457', 0, '2019-05-19 15:05:39', '2019-05-19 15:05:39'),
(57, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-05-25 04:39:01', '2019-05-25 04:39:01'),
(58, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-06-03 10:11:45', '2019-06-03 10:11:45'),
(59, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-06-03 15:06:58', '2019-06-03 15:06:58'),
(60, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-06-03 15:07:55', '2019-06-03 15:07:55'),
(61, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-06-03 15:10:33', '2019-06-03 15:10:33'),
(62, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-06-03 16:55:52', '2019-06-03 16:55:52'),
(63, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-06-03 17:16:16', '2019-06-03 17:16:16'),
(64, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-06-04 07:06:08', '2019-06-04 07:06:08'),
(65, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-06-04 07:10:15', '2019-06-04 07:10:15'),
(66, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-06-04 07:10:50', '2019-06-04 07:10:50'),
(67, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-06-04 07:16:55', '2019-06-04 07:16:55'),
(68, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-06-04 07:23:04', '2019-06-04 07:23:04'),
(69, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-06-04 07:27:56', '2019-06-04 07:27:56'),
(70, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-06-04 07:35:20', '2019-06-04 07:35:20'),
(71, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-06-04 07:37:17', '2019-06-04 07:37:17'),
(72, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-06-04 07:38:57', '2019-06-04 07:38:57'),
(73, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, '2019-06-04 07:39:32', '2019-06-04 07:39:32'),
(74, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 1, '2019-06-04 07:52:47', '2019-06-04 07:52:47'),
(75, 'KiFkdJG4bsXQSmpIqb8eWsU/xxUaf8HRvm2VQg4j42LfyMAEKXn3oyCKSYwy632ihuMS7Xx+g2EodIfejNKyHvUJVFLjCCC3rdPzicUvgsqr7kmh1dlljFrMsPoGptS8zvMmkY1kBfyO85z3YKgO+Q==', 16, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 1, '2019-06-04 12:09:42', '2019-06-04 12:09:42');

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
(3, 11, '12121', '3469797921', 1212121212, '11.jpeg', 'paid', '2019-06-04 13:13:28', '2019-06-04 13:13:28');

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
(2, 'hdpe,ldpe,pet,pp,ps,vinyl', 'Budi\r\nTono\r\nSilit\r\nBajing', 0, 16, 1, '2019-06-04 13:04:10', '2019-03-16 10:27:08'),
(4, 'hdpe,ldpe,pet,pp,ps,vinyl,others', 'Budi\r\nTono\r\nSilit\r\nBajing', 0, 17, 1, '2019-05-12 04:34:16', '2019-03-16 10:27:08');

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
  `status` enum('offered','paid','delivered','received','') NOT NULL DEFAULT 'offered',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `seller_id`, `buyer_id`, `total_pay`, `description`, `courier_name`, `courier_phone_number`, `status`, `updated_at`, `created_at`) VALUES
(9, 16, 17, 100000, 'The main problem I have encountered with the CSS alternative is that it doesn\'t work for multiline. If your 50 characters wraps over 2 lines, well, say good bye to the second line. Unless there is an alternative I haven\'t found yet? Hopes ', 'joko', '081212121', 'offered', '2019-05-18 14:16:48', '2019-05-18 14:16:48'),
(10, 17, 16, 66666, 'jkjkjkjk', 'jkjkjkj', '07070', 'offered', '2019-06-03 11:23:17', '2019-06-03 11:23:17'),
(11, 17, 16, 1000, 'asas', 'asa', '0808', 'paid', '2019-06-03 11:23:30', '2019-06-03 11:23:30');

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
(17, 'syawaludintandry@gmail.com', '081212', 'de2ad159d3cff810c09a6a6681bd52254eba8818', 'tandry gmail', 'jlaslajslkalsk', 'syawaludintandry@gmail.com', 'no-image.svg', '0812121212', 'akjlsalsal', 'A20000', 0, 0, '2019-05-12 04:32:48', '2019-04-29 12:28:30'),
(23, 'fotavio_he@dogberries.ru', 'KOKOKOK', 'fd5873da16d423e418edcd7b4c0736854f553f5b', 'kmkkmkm', 'asasasasasa', 'fotavio_he@dogberries.ru', 'no-image.svg', '', '', NULL, 1, 0, '2019-06-04 07:51:14', '2019-06-04 07:51:14');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
