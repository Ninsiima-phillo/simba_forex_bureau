-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 02:20 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simbaforex_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients_table`
--

CREATE TABLE `clients_table` (
  `id` int(11) NOT NULL,
  `client_name` varchar(40) NOT NULL,
  `initial_usd` double(50,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients_table`
--

INSERT INTO `clients_table` (`id`, `client_name`, `initial_usd`) VALUES
(1, 'John', 100.00),
(2, 'Mark', 150.00),
(3, 'Slyvia', 1100.00),
(4, 'Juma', 3500.00),
(5, 'Mike', 600.00),
(6, 'Sana', 50.00),
(7, 'Linda', 8000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients_table`
--
ALTER TABLE `clients_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients_table`
--
ALTER TABLE `clients_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
