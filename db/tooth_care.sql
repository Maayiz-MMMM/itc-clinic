-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2024 at 03:23 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tooth_care`
--

-- --------------------------------------------------------
--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(240) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `permission` enum('user','operator','doctor') COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'user',
  `is_active` tinyint(5) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `permission`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$fNfundFX.rzgSLoUD/AeiOwcujWFAWoAYysuEWAXvnhnbir7XWCLu', 'operator', 1, '2023-10-31 20:47:36', '2023-10-31 20:47:36');


--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `appointment_no` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `patient_name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `address` varchar(240) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `telephone` varchar(240) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(240) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nic` varchar(240) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `time_slot_from` varchar(240) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `time_slot_to` varchar(240) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `appointment_date` date NOT NULL,
  `treatment_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `appointment_no`, `patient_name`, `address`, `telephone`, `email`, `nic`, `doctor_id`, `time_slot_from`, `time_slot_to`, `appointment_date`, `treatment_id`, `created_at`, `updated_at`) VALUES
(102, '1700533506', 'Alen', '123,ParkStreet', '09820998209', 'solomanv@test.com', '963331234Vasd', 1, '18:00:00', '19:00:00', '2023-11-27', 1, '2023-11-21 02:25:27', '2023-11-22 17:12:00'),
(103, '1700676156', 'Test', 'asd', '09820998209', 'solomanv@test.com', '963331234V', 1, '19:00:00', '20:00:00', '2023-11-27', 3, '2023-11-22 18:02:58', '2023-11-22 18:02:58'),
(104, '1700676181', 'Test Patient MM', '123,ParkStreet', '09820998209', 'solomanv@test.com', '963331738V', 1, '20:00:00', '21:00:00', '2023-11-27', 4, '2023-11-22 18:03:14', '2023-11-22 18:03:14'),
(105, '1700676201', 'Testing  mm', 'm', '0981123', 'asd@asd', '963331738V', 1, '19:00:00', '20:00:00', '2023-12-03', 5, '2023-11-22 18:03:38', '2023-11-22 18:03:38'),
(106, '1700676658', 'Testing AA', '116B al-hasanath road', '+94755513162', 'musab.dot@gmail.com', '963331738V', 1, '18:00:00', '19:00:00', '2023-12-04', 2, '2023-11-22 18:11:14', '2023-11-22 18:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `about` varchar(240) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `photo` varchar(240) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `is_active` tinyint(5) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `about`, `photo`, `is_active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Mr. A.D. Ranasinghe', 'Dental surgeon', '', 1, 1, '2023-11-15 17:11:15', '2023-11-15 17:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_availability`
--

CREATE TABLE `doctor_availability` (
  `id` int(11) NOT NULL,
  `day` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `session_from` varchar(240) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `session_to` varchar(240) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `is_active` tinyint(5) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `doctor_availability`
--

INSERT INTO `doctor_availability` (`id`, `day`, `session_from`, `session_to`, `doctor_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'monday', '18:00:00', '21:00:00', 1, 1, '2023-11-15 18:16:27', '2023-11-21 02:19:06'),
(3, 'saturday', '15:00:00', '22:00:00', 1, 1, '2023-11-15 18:16:27', '2023-11-17 21:07:44'),
(4, 'sunday', '15:00:00', '22:00:00', 1, 1, '2023-11-15 18:16:27', '2023-11-15 21:33:33'),
(5, 'wednesday', '18:00:00', '21:00:00', 1, 1, '2023-11-15 18:16:27', '2023-11-16 00:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `registration_fee` float DEFAULT NULL,
  `registration_fee_paid` int(11) DEFAULT '0',
  `treatment_fee` float DEFAULT NULL,
  `quantity` int(11) DEFAULT '0',
  `treatment_fee_paid` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `appointment_id`, `registration_fee`, `registration_fee_paid`, `treatment_fee`, `quantity`, `treatment_fee_paid`, `created_at`, `updated_at`) VALUES
(7, 102, 500, 1, 5000, 1, 1, '2023-11-21 02:25:27', '2023-11-21 02:41:47'),
(8, 103, 1000, 1, 5000, 4, 1, '2023-11-22 18:02:58', '2023-11-22 18:33:58'),
(9, 104, 1000, 1, 8000, 2, 0, '2023-11-22 18:03:14', '2023-11-22 18:18:41'),
(10, 105, 1000, 1, 9000, 4, 1, '2023-11-22 18:03:38', '2023-11-22 18:33:06'),
(11, 106, 1000, 1, 6000, 1, 0, '2023-11-22 18:11:14', '2023-11-22 18:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `treatments`
--

CREATE TABLE `treatments` (
  `id` int(11) NOT NULL,
  `name` varchar(240) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `treatment_fee` float DEFAULT NULL,
  `registration_fee` float DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `treatments`
--

INSERT INTO `treatments` (`id`, `name`, `description`, `treatment_fee`, `registration_fee`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Cleanings', 'Cleanings', 4000, 1000, 1, '2023-11-15 17:46:01', '2023-11-17 23:04:27'),
(2, 'Whitening', 'Whitening', 6000, 1000, 1, '2023-11-15 17:46:22', '2023-11-16 08:23:21'),
(3, 'Filling', 'Filling', 5000, 1000, 1, '2023-11-15 17:46:34', '2023-11-17 23:04:22'),
(4, 'Nerve Filling', 'Nerve Filling', 8000, 1000, 1, '2023-11-15 17:46:48', '2023-11-16 08:23:24'),
(5, 'Root Canal Therapy', 'Root Canal Therapy', 9000, 1000, 1, '2023-11-15 17:47:00', '2023-11-16 08:23:25');

-- --------------------------------------------------------


--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_appointments_doctor_id` (`doctor_id`),
  ADD KEY `fk_appointments_treatment_id` (`treatment_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_doctors_user_id` (`user_id`);

--
-- Indexes for table `doctor_availability`
--
ALTER TABLE `doctor_availability`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_doctor_availability_doctor_id` (`doctor_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_payments_appointment_id` (`appointment_id`);

--
-- Indexes for table `treatments`
--
ALTER TABLE `treatments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor_availability`
--
ALTER TABLE `doctor_availability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `treatments`
--
ALTER TABLE `treatments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `fk_appointments_doctor_id` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `fk_appointments_treatment_id` FOREIGN KEY (`treatment_id`) REFERENCES `treatments` (`id`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `fk_doctors_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `doctor_availability`
--
ALTER TABLE `doctor_availability`
  ADD CONSTRAINT `fk_doctor_availability_doctor_id` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk_payments_appointment_id` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
