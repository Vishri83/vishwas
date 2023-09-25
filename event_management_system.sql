-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 02:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` bigint(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `event_name` varchar(20) NOT NULL,
  `city` varchar(10) NOT NULL,
  `venue` varchar(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(10) NOT NULL,
  `attendees` varchar(15) NOT NULL,
  `time` time DEFAULT current_timestamp(),
  `additional_requirements` varchar(10) NOT NULL,
  `user_id` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `name`, `email`, `event_name`, `city`, `venue`, `date`, `phone`, `attendees`, `time`, `additional_requirements`, `user_id`) VALUES
(20222001, 'raj', 'raj@gmail.com', 'cricket', 'benglore', 'gat ', '2022-09-29', '8861151432', 'raj , mohan ,re', '14:00:34', 'nothing', 20220038),
(20222002, 'ram', 'ram@gmail.com', 'football', 'banglore', 'gat', '2022-08-31', '8861151432', 'ram , sham , ba', '17:29:24', 'nothing', 20220002),
(20222003, 'raj', 'raj@gmail.com', 'cricket', 'benglore', 'gat ', '2022-08-25', '8861151432', 'raj , mohan ,re', '15:51:37', 'nothing', 20220038),
(20222222, 'deehkshi', 'dej@gmail.com', 'cricket', 'benglore', 'gat ', '2022-08-03', '8861151432', 'raj', '00:00:00', 'nothing', 20220038),
(202220104, 'raj', 'raj@gmail.com', 'cricket', 'banglore', 'G A T', '2022-10-06', '9880002123', '45', '11:54:21', 'water', 20220001),
(202220105, 'raj', 'raj@gmail.com', 'cricket', 'banglore', 'G A T', '2022-10-06', '9880002123', '45', '11:54:36', 'water', 20220001),
(202220106, 'raj', 'raj@gmail.com', 'cricket', 'banglore', 'G A T', '2022-10-06', '9880002123', '45', '11:54:55', 'water', 20220001),
(202220107, 'raj', 'raj@gmail.com', 'cricket', 'banglore', 'G A T', '2022-10-06', '9880002123', '45', '11:55:00', 'water', 20220001),
(202220108, 'raj', 'raj@gmail.com', 'cricket', 'banglore', 'G A T', '2022-10-06', '9880002123', '45', '11:55:11', 'water', 20220001),
(202220109, 'raj', 'raj@gmail.com', 'cricket', 'banglore', 'G A T', '2022-10-06', '9880002126', '9', '12:01:05', 'nothing', 20220001),
(202220110, 'amogh', 'raj@gmail.com', 'cricket', 'banglore', 'G A T', '2022-10-06', '7259595353', '6', '12:09:02', 'nothing', 20220001),
(202220111, 'amogh', 'raj@gmail.com', 'cricket', 'banglore', 'G A T', '2022-10-06', '7259595353', '6', '12:09:37', 'nothing', 20220001),
(202220112, 'raj', 'raj@gmail.com', 'cricket', 'banglore', 'G A T', '2022-10-06', '9880002126', '9', '12:12:42', 'nothing', 20220001),
(202220113, 'raj', 'raj@gmail.com', 'cricket', 'banglore', 'G A T', '2022-10-06', '9880002126', '9', '12:13:48', 'nothing', 20220001),
(202220114, 'sam', 'raj@gmail.com', 'Treasure hunt', 'banglore', 'G A T', '2022-10-06', '5766989096', '3', '12:18:52', 'hgk', 20220001);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` bigint(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `user_id` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `email`, `feedback`, `user_id`) VALUES
(20224001, 'raj', 'raj@gmail.com', 'very good', 20220001),
(20224002, 'ram', 'ram@gmail.com', 'good', 20220002),
(20224014, 'bharath', 'raj@gmail.com', 'grate', 20220001);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `user_id` bigint(10) DEFAULT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `email`, `name`, `user_id`, `password`) VALUES
(20221001, 'raj@gmail.com', 'raj', 20220001, 1),
(20221002, 'ram@gmail.com', 'ram njfvnnknkdsn', 20220002, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` bigint(10) NOT NULL,
  `name_on_card` varchar(10) NOT NULL,
  `card_number` bigint(12) NOT NULL,
  `expiry_date` date NOT NULL,
  `cvv` int(3) NOT NULL,
  `user_id` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `name_on_card`, `card_number`, `expiry_date`, `cvv`, `user_id`) VALUES
(202230001, 'raj', 101120020022, '2030-08-28', 566, 20220001),
(202230002, 'ram', 101120020069, '2030-08-29', 698, 20220002),
(202230030, 'SATWIK KAD', 123654789668, '2035-11-10', 964, 20220041),
(202230031, 'chandan', 123654789987, '2035-10-15', 267, 20220042),
(202230038, 'SHREERAM', 159357486200, '2035-10-15', 729, 20220043),
(202230051, 'amogh simh', 456987215, '0000-00-00', 256, 20220001),
(202230052, 'amogh simh', 456987215, '0000-00-00', 256, 20220001),
(202230053, 'amogh simh', 456987215, '0000-00-00', 256, 20220001),
(202230054, 'amogh simh', 456987215, '0000-00-00', 256, 20220001),
(202230055, 'amogh simh', 456987215, '0000-00-00', 256, 20220001),
(202230056, 'ajith', 5689214736, '2022-05-21', 789, 20220001),
(202230057, 'amogh simh', 456123789, '2022-05-14', 123, 20220001),
(202230058, 'amogh simh', 456123789, '2022-05-14', 123, 20220001),
(202230059, 'ajith', 5689214736, '2022-08-14', 789, 20220001),
(202230060, 'ajith', 5689214736, '2022-08-14', 789, 20220001),
(202230061, 'amogh simh', 7152456789061234, '2022-04-14', 123, 20220001);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(10) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`) VALUES
(20220001, 'raj', 'raj@gmail.com', 'raj@520'),
(20220002, 'ram', 'ram@gmail.com', 'ram@520'),
(20220038, 'bharathraj', 'bharathraj8861151432@gmail.com', 'bharathraj@123'),
(20220041, 'SATWIK', 'satwikkaddi@gmail.com', 'hdifhij@64.cn'),
(20220042, 'chandan ', 'chandan@gmail.com', 'njsshksij@6895665.hhs'),
(20220043, 'SHREERAM', 'shreeram@gmail.com', 'sri@5862'),
(20220045, '1GA20CS023', 'bharathrannara@gmail.com', '1ra785@89t'),
(20220046, '1GA20CS023', 'bharathranaraj@gmail.com', 'jhdfh@husdh'),
(20220048, 'bharathraj', 'b8861151432@gmail.com', 'kumar@155'),
(20220049, 'yashas', 'yashas@gmail.com', 'yash@4965');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202220115;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20224017;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20221031;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202230062;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20220050;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
