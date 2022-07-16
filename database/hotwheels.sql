-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 04:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotwheels`
--

-- --------------------------------------------------------

--
-- Table structure for table `2020hwcars`
--

CREATE TABLE `2020hwcars` (
  `id` int(255) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `series_name` varchar(255) NOT NULL,
  `series_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2020hwcars`
--

INSERT INTO `2020hwcars` (`id`, `model_name`, `series_name`, `series_number`) VALUES
(1, '1970 Pontiac Firebird', 'HW Dream Garage - New for 2022', '1/5'),
(2, '1970 Pontiac Firebird (2nd Color)', 'HW Dream Garage - New for 2022', '1/5'),
(3, 'Twinnin\' \'n Winnin\'', 'Baja Blazers', '1/10'),
(4, 'Twinnin\' \'n Winnin\' (2nd Color)', 'Baja Blazers', '1/10'),
(5, 'Baja Bone Shaker', 'Baja Blazers', '2/10'),
(6, 'Baja Bone Shaker (2nd Color)', 'Baja Blazers', '2/10'),
(7, 'Humvee', 'Baja Blazers', '3/10'),
(8, '\'20 Jeep Gladiator', 'Baja Blazers', '4/10'),
(9, '\'20 Jeep Gladiator (2nd Color - Zamac)', 'Baja Blazers - Walmart Exclusive', '4/10'),
(10, '\'20 Jeep Gladiator (3rd Color)', 'Baja Blazers', '4/10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `key_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `key_token`) VALUES
(1, 'Nuraeni', 'Nuraeni', 'af4771617414099c077978c4c9448dc5'),
(2, 'taufik', 'TAUFIK', ''),
(3, 'ifa', 'ifa', ''),
(4, 'firda', 'firda', ''),
(5, 'root', '123', ''),
(6, 'yaya', 'yaya', ''),
(7, 'nina', 'nina', ''),
(8, 'nina', 'nina', ''),
(9, 'nuraeni', '123', ''),
(10, 'Nuraeni', '123', ''),
(11, 'nina', '123', ''),
(12, 'Nuraeni', '123', ''),
(13, 'Nuraeni', '123', ''),
(14, 'Nuraeni', '123', ''),
(40, 'fasya', 'fasya', ''),
(50, 'ray', 'ray', '51e006eb864cb1ee38290fcd5b4d92e3'),
(51, 'iska', 'fed0c7effc6860ab7306160c0413a1a5', 'ae8ed94134e945cf037fd3411397f5f4'),
(52, 'ray28', '25d55ad283aa400af464c76d713c07ad', 'f7ff221ee4265101dd05568d5763ae07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2020hwcars`
--
ALTER TABLE `2020hwcars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2020hwcars`
--
ALTER TABLE `2020hwcars`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
