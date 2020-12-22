-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 07:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `lineitem`
--

CREATE TABLE `lineitem` (
  `id` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(50) NOT NULL,
  `dish_id` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `dish_name` varchar(100) NOT NULL,
  `Status` enum('PENDING','CONFIRMED','DELIVERED','') DEFAULT NULL,
  `order_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lineitem`
--

INSERT INTO `lineitem` (`id`, `price`, `quantity`, `dish_id`, `Email`, `dish_name`, `Status`, `order_id`) VALUES
(0, 180, 15, '5fe1048e47', 'nour@gmail.com', 'Chicken fila', 'CONFIRMED', '5fe235f77d31e'),
(0, 210, 14, '5fe1f53a6f', 'nour@gmail.com', 'Meat with things', 'CONFIRMED', '5fe235f77d31e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
