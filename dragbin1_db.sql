-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 31, 2020 at 11:54 PM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dragbin1_db`
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
(120, 'cOtGjjZsgJnHtc3/HhQ6v/cfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbXl1xZMc5nfWQ9VHdDOvHbA==', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 0, '2020-01-07 06:55:53', '2019-12-05 07:13:26'),
(121, 'cOtGjjZsgJnHtc3/HhQ6v/cfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbXl1xZMc5nfWQ9VHdDOvHbA==', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 0, '2020-01-07 06:55:53', '2019-12-06 03:10:43'),
(122, 'cOtGjjZsgJnHtc3/HhQ6v/cfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbXl1xZMc5nfWQ9VHdDOvHbA==', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 0, '2020-01-07 06:55:53', '2019-12-06 13:57:20'),
(123, 'cOtGjjZsgJnHtc3/HhQ6v/cfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbXl1xZMc5nfWQ9VHdDOvHbA==', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 0, '2020-01-07 06:55:53', '2019-12-12 14:25:55'),
(124, 'cOtGjjZsgJnHtc3/HhQ6v/cfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbXl1xZMc5nfWQ9VHdDOvHbA==', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 0, '2020-01-07 06:55:53', '2019-12-12 15:10:13'),
(125, 'cOtGjjZsgJnHtc3/HhQ6v/cfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbXl1xZMc5nfWQ9VHdDOvHbA==', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 0, '2020-01-07 06:55:53', '2019-12-17 06:02:59'),
(126, 'KiFkdJG4bsXQSmpIqb8eWvcfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', 0, '2020-01-07 06:55:53', '2019-12-18 06:11:24'),
(127, 'KiFkdJG4bsXQSmpIqb8eWoRqiLArNzCinY8hg9J7FT4kvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 50, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', 0, '2020-01-07 06:55:39', '2019-12-18 06:38:30'),
(128, 'KiFkdJG4bsXQSmpIqb8eWoRqiLArNzCinY8hg9J7FT4kvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 50, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', 0, '2020-01-07 06:55:39', '2019-12-18 06:40:51'),
(129, 'KiFkdJG4bsXQSmpIqb8eWoRqiLArNzCinY8hg9J7FT4kvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7BJBW9va0tK/1uwJ8jCJ96Y', 50, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', 0, '2020-01-07 06:55:39', '2019-12-18 06:41:43'),
(130, 'KiFkdJG4bsXQSmpIqb8eWoRqiLArNzCinY8hg9J7FT4kvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7BJBW9va0tK/1uwJ8jCJ96Y', 50, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', 0, '2020-01-07 06:55:39', '2019-12-18 06:41:55'),
(131, 'KiFkdJG4bsXQSmpIqb8eWvcfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', 0, '2020-01-07 06:55:53', '2019-12-18 06:42:02'),
(132, 'KiFkdJG4bsXQSmpIqb8eWvcfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:53', '2019-12-22 12:39:17'),
(133, 'KiFkdJG4bsXQSmpIqb8eWoRqiLArNzCinY8hg9J7FT4kvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7BJBW9va0tK/1uwJ8jCJ96Y', 50, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:39', '2019-12-22 12:51:29'),
(134, 'KiFkdJG4bsXQSmpIqb8eWvcfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:53', '2019-12-22 12:54:38'),
(135, 'KiFkdJG4bsXQSmpIqb8eWvcfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:53', '2019-12-24 12:22:07'),
(136, 'KiFkdJG4bsXQSmpIqb8eWvcfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:53', '2019-12-24 14:28:47'),
(137, 'KiFkdJG4bsXQSmpIqb8eWvcfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:53', '2019-12-25 12:35:38'),
(138, 'KiFkdJG4bsXQSmpIqb8eWoRqiLArNzCinY8hg9J7FT4kvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7BJBW9va0tK/1uwJ8jCJ96Y', 50, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:39', '2019-12-25 12:35:57'),
(139, 'KiFkdJG4bsXQSmpIqb8eWvcfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:53', '2019-12-27 18:36:02'),
(140, 'KiFkdJG4bsXQSmpIqb8eWoRqiLArNzCinY8hg9J7FT4kvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7BJBW9va0tK/1uwJ8jCJ96Y', 50, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:39', '2019-12-27 18:36:12'),
(141, 'KiFkdJG4bsXQSmpIqb8eWvcfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:53', '2019-12-27 19:03:41'),
(142, 'KiFkdJG4bsXQSmpIqb8eWvcfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:53', '2019-12-29 15:59:06'),
(143, 'KiFkdJG4bsXQSmpIqb8eWoRqiLArNzCinY8hg9J7FT4kvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7BJBW9va0tK/1uwJ8jCJ96Y', 50, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:39', '2019-12-29 16:08:55'),
(144, 'KiFkdJG4bsXQSmpIqb8eWvcfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:53', '2019-12-29 16:27:18'),
(145, 'KiFkdJG4bsXQSmpIqb8eWvcfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:53', '2020-01-02 06:00:40'),
(146, 'KiFkdJG4bsXQSmpIqb8eWoRqiLArNzCinY8hg9J7FT4kvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7BJBW9va0tK/1uwJ8jCJ96Y', 50, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:39', '2020-01-02 06:47:05'),
(147, 'KiFkdJG4bsXQSmpIqb8eWvcfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:53', '2020-01-06 04:21:40'),
(148, 'KiFkdJG4bsXQSmpIqb8eWoRqiLArNzCinY8hg9J7FT4kvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7BJBW9va0tK/1uwJ8jCJ96Y', 50, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:39', '2020-01-06 05:53:42'),
(149, 'KiFkdJG4bsXQSmpIqb8eWvcfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:53', '2020-01-06 06:13:34'),
(150, 'KiFkdJG4bsXQSmpIqb8eWoRqiLArNzCinY8hg9J7FT4kvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7BJBW9va0tK/1uwJ8jCJ96Y', 50, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:39', '2020-01-06 06:15:57'),
(151, 'KiFkdJG4bsXQSmpIqb8eWvcfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:53', '2020-01-06 10:39:56'),
(152, 'KiFkdJG4bsXQSmpIqb8eWoRqiLArNzCinY8hg9J7FT4kvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7BJBW9va0tK/1uwJ8jCJ96Y', 50, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:39', '2020-01-06 11:03:00'),
(153, 'KiFkdJG4bsXQSmpIqb8eWvcfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:53', '2020-01-07 05:06:18'),
(154, 'KiFkdJG4bsXQSmpIqb8eWoRqiLArNzCinY8hg9J7FT4kvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7BJBW9va0tK/1uwJ8jCJ96Y', 50, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:39', '2020-01-07 06:20:53'),
(155, 'KiFkdJG4bsXQSmpIqb8eWvcfLPLAIcy8uOyWhZqRIiEkvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7Cs0xDsQXZqJm45dOAB0lnw', 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 0, '2020-01-07 06:55:53', '2020-01-07 06:55:43'),
(156, 'KiFkdJG4bsXQSmpIqb8eWoRqiLArNzCinY8hg9J7FT4kvzGevrBfpKc/CP5tRQqbN3hCGIUVRJvryAqn4uZ3dbtl9gW+n32bOalwDAXYt7BJBW9va0tK/1uwJ8jCJ96Y', 50, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 1, '2020-01-07 06:56:00', '2020-01-07 06:56:00');

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

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `categories` set('hdpe','ldpe','pet','pp','ps','vinyl','others') DEFAULT NULL,
  `description` varchar(700) NOT NULL,
  `weight` int(11) NOT NULL DEFAULT 0,
  `pickup_date` varchar(20) NOT NULL,
  `pickup_time` varchar(20) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `categories`, `description`, `weight`, `pickup_date`, `pickup_time`, `is_active`, `user_id`, `updated_at`, `created_at`) VALUES
(20, 'hdpe,ldpe,ps,vinyl', 'anjing', 10, '07 Jan 2020', '08:00 - 10:00 WIB', 1, 48, '2020-01-06 05:45:02', '2019-12-05 07:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `total_pay` int(11) NOT NULL,
  `description` varchar(700) NOT NULL,
  `status` enum('finding_partner','got_partner','picking_up','completed') NOT NULL DEFAULT 'finding_partner',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `seller_id`, `buyer_id`, `post_id`, `total_pay`, `description`, `status`, `updated_at`, `created_at`) VALUES
(24, 48, 50, 20, 50000, 'njnjnj', 'got_partner', '2020-01-07 07:49:36', '2020-01-07 07:49:36');

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
  `map_link` text DEFAULT 'NULL',
  `photo` varchar(200) NOT NULL DEFAULT '"no-image.svg"',
  `identity_card` varchar(200) DEFAULT NULL,
  `whatsapp` varchar(50) DEFAULT NULL,
  `email_verified` tinyint(1) NOT NULL DEFAULT 0,
  `partner_code` varchar(50) DEFAULT 'NULL',
  `identity_number` varchar(50) DEFAULT 'NULL',
  `is_blocked` tinyint(1) DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `phone_number`, `password`, `name`, `address`, `map_link`, `photo`, `identity_card`, `whatsapp`, `email_verified`, `partner_code`, `identity_number`, `is_blocked`, `updated_at`, `created_at`) VALUES
(48, '1@1.com', '081214225775', '356a192b7913b04c54574d18c28d46e6395428ab', 'Halo', 'Jl Halo', 'syawaludintandry@yahoo.com', '1.jpeg', NULL, '081214225775', 1, NULL, NULL, 0, '2020-01-06 05:33:05', '2019-12-05 07:04:12'),
(50, '', '', 'da4b9237bacccdf19c0760cab7aec4a8359010b0', '', '', '', '3.jpeg', NULL, '', 1, '123', NULL, 0, '2020-01-07 08:41:12', '2019-12-05 07:04:12');

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
  ADD KEY `buyer_id` (`buyer_id`),
  ADD KEY `post_id` (`post_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transactions_ibfk_3` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transactions_ibfk_4` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

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
