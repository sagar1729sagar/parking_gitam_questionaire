-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 08:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `slno` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `living_outside_campus` varchar(255) NOT NULL,
  `living` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `entry_gate` varchar(255) NOT NULL,
  `exit_gate` varchar(255) NOT NULL,
  `commute_to_campus` varchar(255) NOT NULL,
  `commute_from_campus` varchar(255) NOT NULL,
  `pool_ride` varchar(255) NOT NULL,
  `pool_often` varchar(255) NOT NULL,
  `drive_often` varchar(255) NOT NULL,
  `entrance_time` varchar(255) NOT NULL,
  `exit_time` varchar(255) NOT NULL,
  `alight_point` varchar(255) NOT NULL,
  `drop_status` varchar(255) NOT NULL,
  `parking_location` varchar(255) NOT NULL,
  `vehicle_brand` varchar(255) NOT NULL,
  `vehicle_model` varchar(255) NOT NULL,
  `registration_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`slno`, `user`, `living_outside_campus`, `living`, `area`, `pincode`, `entry_gate`, `exit_gate`, `commute_to_campus`, `commute_from_campus`, `pool_ride`, `pool_often`, `drive_often`, `entrance_time`, `exit_time`, `alight_point`, `drop_status`, `parking_location`, `vehicle_brand`, `vehicle_model`, `registration_number`) VALUES
(3, 'Teaching Faculty', 'yes', 'Gitamites', 'dfghd', 'cbhfgh', 'West Gate at Yendada Road', 'East Gate at Beach Road', 'RTC bus for Gitamites', 'No answer', 'Yes', 'No', 'No answer', '8:30 AM to 8:45 AM', '5:15 PM to 6 PM', 'Near pharmacy bhavan', 'Remain for you till end of the day', 'Near viswevaraya bhavan', 'Volkswagen', 'gfh', 'fgh'),
(4, 'Teaching Faculty', 'yes', 'Gitamites', 'dfghd', 'cbhfgh', 'West Gate at Yendada Road', 'East Gate at Beach Road', 'RTC bus for Gitamites', 'No answer', 'Yes', 'No', 'No answer', '8:30 AM to 8:45 AM', '5:15 PM to 6 PM', 'Near pharmacy bhavan', 'Remain for you till end of the day', 'Near viswevaraya bhavan', 'Volkswagen', 'gfh', 'fgh'),
(5, 'Student', 'no', 'No answer', 'No answer', 'No answer', 'No answer', 'No answer', 'No answer', 'No answer', 'No answer', 'No answer', 'No answer', 'No answer', 'No answer', 'No answer', 'No answer', 'No answer', 'No answer', 'No answer', 'No answer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
