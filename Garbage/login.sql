-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 04:04 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `aregistration`
--

CREATE TABLE `aregistration` (
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aregistration`
--

INSERT INTO `aregistration` (`ID`, `username`, `email`, `password`, `cpassword`, `token`) VALUES
(0, 'pabel', 'monjurhassan44@gmail.com', '$2y$10$/QkuVBPHOxbp0XQHcAoQEOVjF27rMld416ur/01w45WdNu26DMfHm', '$2y$10$oTOGpNB6cBWUzOdMxtiNlurHEfQHQMKTpjEv2f6SID8I37wQpZzv.', 'f3b39eb511dbeeb613632d4d91f005'),
(0, 'mohin1', 'nasermahmood123@gmail.com', '$2y$10$k1W1cXl8djw4jzo4MmSGCOzwwjLqQGILnB4YQFzm.70KswITO65PO', '$2y$10$Fq0a7IxMdPQum7ml1gH3TeTaU/OOJxGgcGUl4Kt54gv2Wz0zx5xda', '65ca2134ac03610b5623a8f209f7e8'),
(0, 'pabel', 'jdjdj@gmail.com', '$2y$10$vnwUDGjTeIX2iEv1kpmnOOFoBqGzwuSayRpRNXRKsg1lP.3te4gkC', '$2y$10$RuayXt5N.465.3uGuQF2D.u3M17rM3GCnuCFhEpUO.mpqkO/gZa4W', 'd691eebb375ac0f7b5aac07debf9fd');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_Id` int(100) NOT NULL,
  `Full_Name` text NOT NULL,
  `Phone_No` bigint(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_Id`, `Full_Name`, `Phone_No`, `Address`, `description`) VALUES
(5, 'pabel', 1252255, 'bashundhara ra', ''),
(6, 'pabel', 111, 'wefrrr', ''),
(7, 'pabel', 1234567, 'bashundhara ra', ''),
(8, 'pabel', 125555, 'bashundhara', ''),
(9, 'pabel', 1817354874, 'bashundhara ra', ''),
(10, 'pabel', 13545555555, 'bashundhara ra', ''),
(11, 'pabel', 1234567892, 'bashundhara ra', ''),
(12, 'pabel', 125525555, 'bashundhara ra', ''),
(13, 'pabel', 12558777, 'bashundhara ra', 'plastic and battery');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'pabel', '$2y$10$NAw/jgFHJEp3nPfAdnZKgeHyqz7.LYuewy9G20TxJaP3zv0Jo2HbK', '', '2022-07-26 01:40:39'),
(4, 'mohin', '$2y$10$ap17oLQoWySBPMSG9lIFRO6wBtCACg6E7O4iu8bVF5eKNuLJKJyOK', '', '2022-07-26 20:35:39'),
(6, 'urid', '$2y$10$b1mNK0KeD5buJcRM6jATiOdTiEYZW7G4M32/CZsBY9YE7PSlxgRs6', '', '2022-07-27 13:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_Id` int(100) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
