-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 06:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinicdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE `appointments` (
  `appt_no` int(11) NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `appt_date` date NOT NULL,
  `appt_time` time NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appt_no`, `patient_id`, `appt_date`, `appt_time`, `updated_at`, `created_at`) VALUES
(1, 1, '2022-06-15', '17:00:00', '2022-06-14 00:28:28', '2022-06-14 00:28:28'),
(2, 4, '2022-06-24', '11:11:00', '2022-06-14 00:48:46', '2022-06-14 00:48:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `health_assessments`
--

DROP TABLE IF EXISTS `health_assessments`;
CREATE TABLE `health_assessments` (
  `health_asmnid` int(11) NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `body_temp` float NOT NULL,
  `BMI` float NOT NULL,
  `sugar_lvl` float NOT NULL,
  `blood_press` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `health_assessments`
--

INSERT INTO `health_assessments` (`health_asmnid`, `patient_id`, `body_temp`, `BMI`, `sugar_lvl`, `blood_press`) VALUES
(1, 1, 36.4, 23, 120, 125),
(2, 2, 40.6, 18.2, 135, 110),
(3, 3, 36, 22.1, 127, 118),
(4, 4, 35.4, 19.8, 117, 99),
(5, 5, 36.4, 20.7, 123, 105);

-- --------------------------------------------------------

--
-- Table structure for table `health_records`
--

DROP TABLE IF EXISTS `health_records`;
CREATE TABLE `health_records` (
  `record_id` int(11) NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `date_diagnosed` date NOT NULL,
  `doctor` varchar(50) NOT NULL,
  `payment` float DEFAULT NULL,
  `prescription_id` int(11) NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `health_records`
--

INSERT INTO `health_records` (`record_id`, `diagnosis`, `date_diagnosed`, `doctor`, `payment`, `prescription_id`, `patient_id`) VALUES
(1, 'High Blood Pressure', '2022-06-08', 'Dr. Ismail bin Ahmad', NULL, 4, 2),
(2, 'High Fever', '2022-02-14', 'Dr. Jamilah Kasim', 58.6, 1, 1),
(3, 'Mild Inflammation', '2020-04-16', 'Dr. Ismail bin Ahmad', 35.6, 3, 3),
(4, 'Lymphoma', '2022-06-09', 'Dr. Jamilah Kasim', NULL, 6, 5),
(5, 'Eye infection', '2022-02-22', 'Dr. Jamilah Kasim', 60, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_infos`
--

DROP TABLE IF EXISTS `medicine_infos`;
CREATE TABLE `medicine_infos` (
  `prescription_id` int(11) NOT NULL,
  `med_name` varchar(50) NOT NULL,
  `med_details` varchar(1000) NOT NULL,
  `warning` varchar(1000) NOT NULL,
  `price` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_infos`
--

INSERT INTO `medicine_infos` (`prescription_id`, `med_name`, `med_details`, `warning`, `price`, `stock`) VALUES
(1, 'Paracetamol', 'Paracetamol is a pain reliever and a fever reducer. To treat many conditions such as headache, muscle aches, arthritis, backache, toothaches, colds, and fevers.', 'An overdose of paracetamol can cause serious harm and could cause damage to liver. The maximum amount of paracetamol for adults is 4 grams (4000 mg) per DAY', '$8.41/500 Mg', 378),
(2, 'Amoxicillin', 'Amoxicillin is a penicillin antibiotic that fights bacteria. It us to treat many different types of infection caused by bacteria, such as tonsillitis, bronchitis, pneumonia, and infections of the ear, nose, throat, skin, or urinary tract.', 'Do not use this medication if users are allergic to amoxicillin or to any other penicillin antibiotic', '$10/4 capsule', 203),
(3, 'Bryhali', 'Bryhali helps reduce inflammation in the body. It used to treat inflammation and itching caused by plaque psoriasis or skin conditions that respond to steroid medication. Bryhali may also be used for purposes not listed in this medication guide.', 'Do not give halobetasol if users are allergic to it', '$310/60 Gr', 329),
(4, 'Bystolic', 'Bystolic is used to treat hypertension (high blood pressure)', 'Do not skip doses or stop taking Bystolic without first talking to doctor. It can impact heart', '$184/10 Mg', 112),
(5, 'Casodex', 'Casodex is used to treat prostate cancer that has spread to other parts of the body (metastatic) and to treat prostate cancer that has spread to other parts of the body (metastatic).', 'This medicine should never be taken by a woman or a child.', '$161.05/50 Mg', 130),
(6, 'Umbralisib', 'Umbralisib is used to treat certain types of lymphoma in adults', 'Umbralisib affects immune system. Users may get infections more easily, even serious or fatal infections.', '$16,752/200 Mg', 256),
(7, 'Focalin', 'Focalin is a prescription medicine used to treat attention deficit hyperactivity disorder (ADHD). Focalin should be used as a part of a total treatment program for ADHD that may include counseling or other therapies.', 'Focalin may cause new or worsening psychosis, especially if users have a history of depression, mental illness, or bipolar disorder.', '$1,345/100 capsules', 321),
(8, 'Herceptin', 'Herceptin is a cancer medicine. Herceptin is used to treat certain types of breast cancer or stomach cancer.', 'Do not use Herceptin if pregnant.', '$1.651/150 Mg injection', 284);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_12_074555_create_patients_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('afiqridhwan11@gmail.com', '$2y$10$EXLfJK.G19ykBTa/7PssY.4SGd0oGvdVjMje0MF.jVBYaByxmAKL.', '2022-06-11 20:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `prescription_id` int(11) DEFAULT NULL,
  `health_asmnid` int(11) DEFAULT NULL,
  `record_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `email`, `phoneno`, `created_at`, `updated_at`, `prescription_id`, `health_asmnid`, `record_id`) VALUES
(1, 'Abu Iman', 'abu11@gmail.com', '60101543194', '2022-06-12 00:54:09', '2022-06-12 00:54:09', 1, 1, 2),
(2, 'Kamal Akmal', 'kamal11@gmail.com', '60146847245', '2022-06-12 01:06:17', '2022-06-12 01:06:17', 4, 2, 1),
(3, 'Ahmad Razali', 'ahmad02@gmail.com', '60123454324', '2022-06-12 01:06:58', '2022-06-12 01:06:58', 3, 3, 3),
(4, 'Rasyidah Ali', 'rasyidah@gmail.com', '60145456753', '2022-06-12 01:07:30', '2022-06-12 01:07:30', 6, 4, 4),
(5, 'Latifah Jamil', 'latif23@gmail.com', '60125467834', '2022-06-12 01:08:06', '2022-06-12 01:08:06', 2, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phoneno` bigint(20) DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phoneno`, `gender`, `religion`, `birthdate`, `address`) VALUES
(1, 'Rasyid bin Amir', '1@google.com', NULL, '$2y$10$RyjoRPc/yt8E2kcRlLBOc.IPaVME8dl47x8qLhZv3gq18O8aS8oIm', NULL, '2022-06-11 06:08:00', '2022-06-11 06:08:00', 601234565, 'Male', 'Islam', '1983-03-07', '34, Jalan Meranti,SBCR 47000, Sg Buloh, Selangor'),
(7, 'Zainal Husin', 'user@gmail.com', NULL, '$2y$10$5BFGuqH49X2khs8byEp1TuJ5FU62aDiQMLcVlHcKrwxIvHCtmiCK.', NULL, '2022-06-14 01:33:22', '2022-06-14 07:40:22', 6010123432, 'Male', 'Islam', '1983-04-05', 'Jalan Mawar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appt_no`),
  ADD KEY `test15` (`patient_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `health_assessments`
--
ALTER TABLE `health_assessments`
  ADD PRIMARY KEY (`health_asmnid`),
  ADD KEY `testinh` (`patient_id`);

--
-- Indexes for table `health_records`
--
ALTER TABLE `health_records`
  ADD PRIMARY KEY (`record_id`),
  ADD KEY `prescription_id_fk2` (`prescription_id`),
  ADD KEY `test81` (`patient_id`);

--
-- Indexes for table `medicine_infos`
--
ALTER TABLE `medicine_infos`
  ADD PRIMARY KEY (`prescription_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test11` (`health_asmnid`),
  ADD KEY `test12` (`prescription_id`),
  ADD KEY `test13` (`record_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appt_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `test15` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `health_assessments`
--
ALTER TABLE `health_assessments`
  ADD CONSTRAINT `testinh` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `health_records`
--
ALTER TABLE `health_records`
  ADD CONSTRAINT `prescription_id_fk2` FOREIGN KEY (`prescription_id`) REFERENCES `medicine_infos` (`prescription_id`),
  ADD CONSTRAINT `test81` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `test11` FOREIGN KEY (`health_asmnid`) REFERENCES `health_assessments` (`health_asmnid`),
  ADD CONSTRAINT `test12` FOREIGN KEY (`prescription_id`) REFERENCES `medicine_infos` (`prescription_id`),
  ADD CONSTRAINT `test13` FOREIGN KEY (`record_id`) REFERENCES `health_records` (`record_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
