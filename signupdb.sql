-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 09:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signupdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `logininfo`
--

CREATE TABLE `logininfo` (
  `Email` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logininfo`
--

INSERT INTO `logininfo` (`Email`, `Password`) VALUES
('', ''),
('aruna13@gmail.com', '98765432');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `FirstName`, `LastName`, `Email`, `Password`) VALUES
(11, 'spoorthi', 'jutur', 'spoorthijv@gmail.com', '$2y$10$ubVvlpsPAl3kJrvj5/W33.PDRdV68LiE5LqFWRbgnb/kyemug7DMy'),
(12, 'spoorthi', 'jutur', 'spoorthijv123@gmail.com', '$2y$10$tzxGdi9BUt7lbKW0BXHGAet0u.2/mvJRQFPBj2hTInk6dhgPrUiMC'),
(14, 'Manoj', 'Kumar', 'manu@gmail.com', '$2y$10$uvjrrStnDnjYJm8Vq4YANOOH/AhMltkprApUK0lxty1mXzlu.eFsC'),
(15, 'Aruna', 'Patil', 'aruna13@gmail.com', '$2y$10$4jS/AX4DX.tMoqLEZlaEp.Sc99dvH1Zes40WinT02pqMf6l3dmPyu'),
(16, '', '', '', '$2y$10$uINfBjgMw8E50kNJjWZRG.OdAT8D1hCW6FiNaFvl0oWnrG6M/NIz.'),
(17, 'stuti', 'uniyal', 'stutiuniyal27@gmail.com', '$2y$10$MxrdN20yhV.TP2Jv4IRdduZpO98OBjDC5UbfY/9lfqpWt7E8uNX4y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logininfo`
--
ALTER TABLE `logininfo`
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
