-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 09:09 AM
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
(51, 'iska', 'fed0c7effc6860ab7306160c0413a1a5', 'ae8ed94134e945cf037fd3411397f5f4'),
(52, 'ray28', '25d55ad283aa400af464c76d713c07ad', 'f7ff221ee4265101dd05568d5763ae07'),
(53, 'nina', '25d55ad283aa400af464c76d713c07ad', '4e9550472be9fbbe65bb798ee2d0d03b'),
(54, 'fira', '25a77d92320c0bcc9f808b94ec7364a5', 'f4df2214e38120f4f7aa2a7f2bb59bbb'),
(55, 'nuraeni', '5431cc714cd9c464e2729f7049e4cdec', '19d5213de0d952e046992ecb52b1f7d6'),
(56, 'dian', '25d55ad283aa400af464c76d713c07ad', '8d45482ed8f88f8c02f080d825af90c8'),
(57, 'fasya', '25d55ad283aa400af464c76d713c07ad', '9dcc81abc2a7fe1a585e316ba657eb49'),
(58, 'fasya12', '25d55ad283aa400af464c76d713c07ad', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
