-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2024 at 02:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hom_2.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'jemis', '$2a$04$lTiad/kNmf.tTfpM3gCfVe2Su4mwdn7ltPhFQba8ErSnsekzvxL4C', 'kakadiyajemish797@gmail.com', '2024-09-28 19:14:51'),
(2, 'test', '$2y$10$Y92w0.VWOox7ns9pDi14M.x3PwGmW6fo79/76ZhQGbofjPoznco3q', 'kakadiyajemish797@gmail.com', '2024-09-28 19:20:35'),
(3, 'test', '$2y$10$QgWRhafOYOb4xE4wXGQM3O1Z2yShL4pAv0itxlV3.dlP9crnlSlFC', 'kakadiyajemish797@gmail.com', '2024-09-28 19:21:44'),
(4, 'test', '$2y$10$NB6RbflHzHXm.1k5bRcXDOEKE4WPGNeKT.4aCKrFrwbLpv2ICmSm2', 'kakadiyajemish797@gmail.com', '2024-09-28 19:23:52'),
(5, 'test', '$2y$10$UQ1s2F9jCAs2eZ8sEap8lOyDCGXcUwlQoPnXkvdzNYxlRoKkxDWbC', 'kakadiyajemish797@gmail.com', '2024-09-29 13:12:12'),
(6, 'testing', '$2y$10$7fkBuij6G1Z2pJGzHm6jc.0GfmBVG7lHqTW96Ky2NcNWQCfOcQprm', 'kakadiyajemish797@gmail.com', '2024-09-29 13:47:20'),
(7, 'vaishnavi', '$2y$10$A5edZdsOssDUAc7PcN5MGOnw/7DhXfuMUyJ1BEC8hZvsh4qw8U0uC', 'vaishnavikasodariya1501@gmail.com', '2024-10-02 06:59:13'),
(8, 'Divya', '$2y$10$ihkIGO0zNKl1XOfCaG2fF.Z5XIOJVRXa1E9Q7AZu2axeljFRNSwP6', 'ramanid557@gmail.com', '2024-10-08 08:51:48');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_requests`
--

CREATE TABLE `appointment_requests` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `service` varchar(100) DEFAULT NULL,
  `request_time` datetime DEFAULT NULL,
  `worker_assigned` varchar(50) DEFAULT NULL,
  `status` enum('pending','assigned','completed') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_requests`
--

INSERT INTO `appointment_requests` (`id`, `username`, `service`, `request_time`, `worker_assigned`, `status`) VALUES
(1, 'Jemish', 'sndjkasnfkjsdb', '2024-09-30 13:04:58', '3', 'assigned'),
(2, 'Jemish', 'sndjkasnfkjsdb', '2024-09-30 13:04:58', NULL, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` varchar(15) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `fullname`, `email`, `phoneno`, `message`) VALUES
(1, 'vaishnavi', 'vaishnavikasodariya34@gmail.com', '8878909877', 'i am trying to contact your manager but for some reason its not possible,please contact me');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceid` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceid`, `service_name`, `description`) VALUES
(3, 'plumbing', 'safseawe'),
(4, 'plumbing', '1'),
(5, 'furnichur', 'f'),
(6, 'cooking', 'paratha'),
(7, 'cooking', 'paratha');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'vaishnavii', '$2y$10$CYm0.SdiQBmr8Q7anMW6T.gJZIoLfeFLb8Skc1VxlRizpsl6rZG96', 'vaishnavikasodariya34@gmail.com', '2024-10-08 11:34:19'),
(2, 'vaishnavii', '$2y$10$OZkJrgj5jOPbqdJ2trgRK.k4Q1BoHG4yZwBqw11ebLSqAiwC27jYm', 'vaishnavikasodariya34@gmail.com', '2024-10-08 11:35:07'),
(3, 'vaishnavii', '$2y$10$9nYXfRFIDWTmjqo9LWCeregBvXJZK8d1BdyiQQdFNw4.Aba.ADY3O', 'vaishnavikasodariya34@gmail.com', '2024-10-08 11:37:19'),
(4, 'vaishnavii', '$2y$10$EbdmJXIuuRP.IC.PL.YUqOM44fFvsODBcr6p1KZz.zoDSINVWovVW', 'vaishnavikasodariya34@gmail.com', '2024-10-08 11:38:30'),
(5, 'vaishnavii', '$2y$10$Os.tM4117aLp5gZmDNgJJOcUk5INtd3rNmPzpu/VAhjrPMMSJI.wG', 'vaishnavikasodariya34@gmail.com', '2024-10-08 11:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `user_requested_tasks`
--

CREATE TABLE `user_requested_tasks` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `request_time` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `phoneno` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `status` enum('pending','assigned') DEFAULT NULL,
  `worker_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_requested_tasks`
--

INSERT INTO `user_requested_tasks` (`id`, `username`, `service_type`, `request_time`, `created_at`, `phoneno`, `address`, `status`, `worker_id`) VALUES
(1, 'User1', 'Plumbing', '2024-09-30 12:00:00', '2024-09-29 09:06:46', NULL, NULL, 'assigned', 3),
(2, 'User2', 'Electrical', '2024-09-30 13:00:00', '2024-09-29 09:06:46', NULL, NULL, 'pending', NULL),
(3, 'User3', 'Cleaning', '2024-09-30 12:00:00', '2024-09-29 09:06:46', NULL, NULL, 'assigned', NULL),
(4, 'User1', 'Gardening', '2024-09-30 15:00:00', '2024-09-29 09:06:46', NULL, NULL, 'pending', NULL),
(5, 'User2', 'Repair', '2024-09-30 16:00:00', '2024-09-29 09:06:46', NULL, NULL, 'pending', NULL),
(6, 'User3', 'Painting', '2024-09-30 17:00:00', '2024-09-29 09:06:46', NULL, NULL, 'pending', NULL),
(7, 'User1', 'Carpentry', '2024-09-30 18:00:00', '2024-09-29 09:06:46', NULL, NULL, 'pending', NULL),
(8, 'User2', 'Masonry', '2024-09-30 19:00:00', '2024-09-29 09:06:46', NULL, NULL, 'pending', NULL),
(9, 'User3', 'Cleaning', '2024-09-30 20:00:00', '2024-09-29 09:06:46', NULL, NULL, 'pending', NULL),
(10, 'User1', 'Electrical', '2024-09-30 21:00:00', '2024-09-29 09:06:46', NULL, NULL, 'pending', NULL),
(11, 'vaishnavi', 'hh', '0000-00-00 00:00:00', '2024-10-06 12:39:09', 2147483647, 'hgkhn', 'pending', NULL),
(12, 'rdff', 'dd', '0000-00-00 00:00:00', '2024-10-06 12:41:10', 2147483647, 'hgkhn', 'pending', NULL),
(13, 'rdff', 'dd', '0000-00-00 00:00:00', '2024-10-06 12:41:37', 2147483647, 'hgkhn', 'pending', NULL),
(14, 'Divya', 'plumbing', '0000-00-00 00:00:00', '2024-10-06 20:37:49', 2147483647, 'adajan', 'pending', NULL),
(15, 'divuu_.13', 'plumbing', '2024-10-01 03:09:00', '2024-10-06 20:39:35', 2147483647, 'gherdthdtyhe', 'pending', NULL),
(16, 'divuu_.13', 'plumbing', '2024-10-01 03:09:00', '2024-10-06 20:50:20', 2147483647, 'gherdthdtyhe', '', NULL),
(17, 'v', 'cooking', '2024-10-01 11:29:00', '2024-10-07 04:59:28', 2147483647, 'adajan', 'pending', NULL),
(18, 'v', 'cooking', '2024-10-01 11:29:00', '2024-10-07 05:09:44', 2147483647, 'adajan', 'assigned', 8),
(19, 'h', 'plumbing', '2024-10-10 12:40:00', '2024-10-07 05:10:25', 2147483647, 'gherdthdtyhe', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `status` enum('available','unavailable') NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `name`, `email`, `phone`, `status`) VALUES
(2, 'Jane Smith', 'jane.smith@example.com', '2345678901', 'available'),
(3, 'Michael Brown', 'michael.brown@example.com', '1234567898', 'unavailable'),
(4, 'Emily Davis', 'emily.davis@example.com', '4567890123', 'available'),
(5, 'David Wilson', 'david.wilson@example.com', '5678901234', 'available'),
(6, 'Sarah Johnson', 'sarah.johnson@example.com', '6789012345', 'available'),
(7, 'Chris Lee', 'chris.lee@example.com', '7890123456', 'available'),
(8, 'Jessica White', 'jessica.white@example.com', '8901234567', 'available'),
(9, 'Daniel Harris', 'daniel.harris@example.com', '9012345678', 'unavailable'),
(10, 'Laura Martinez', 'laura.martinez@example.com', '0123456789', 'available'),
(11, 'divya', 'ramanid557@gmail.com', '6787678767', ''),
(12, 'vaish', 'vaishnavikasodariya34@gmail.com', '0098998786', ''),
(13, 'pal', 'palkathiriya3444@gmail.com', '8878909877', ''),
(15, 'priyankaaa', 'p455@gmail.com', '8897789887', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `worker_assigned_tasks`
--

CREATE TABLE `worker_assigned_tasks` (
  `id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `assigned_time` datetime NOT NULL,
  `status` enum('pending','completed') NOT NULL,
  `user_task_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worker_assigned_tasks`
--

INSERT INTO `worker_assigned_tasks` (`id`, `worker_id`, `assigned_time`, `status`, `user_task_id`) VALUES
(70, 8, '2024-10-01 11:29:00', 'pending', 18),
(71, 3, '2024-09-30 12:00:00', 'pending', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_requests`
--
ALTER TABLE `appointment_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_requested_tasks`
--
ALTER TABLE `user_requested_tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_worker` (`worker_id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `worker_assigned_tasks`
--
ALTER TABLE `worker_assigned_tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `worker_id` (`worker_id`),
  ADD KEY `fk_user_task` (`user_task_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `appointment_requests`
--
ALTER TABLE `appointment_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_requested_tasks`
--
ALTER TABLE `user_requested_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `worker_assigned_tasks`
--
ALTER TABLE `worker_assigned_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_requested_tasks`
--
ALTER TABLE `user_requested_tasks`
  ADD CONSTRAINT `fk_worker` FOREIGN KEY (`worker_id`) REFERENCES `workers` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `worker_assigned_tasks`
--
ALTER TABLE `worker_assigned_tasks`
  ADD CONSTRAINT `fk_user_task` FOREIGN KEY (`user_task_id`) REFERENCES `user_requested_tasks` (`id`),
  ADD CONSTRAINT `worker_assigned_tasks_ibfk_1` FOREIGN KEY (`worker_id`) REFERENCES `workers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
