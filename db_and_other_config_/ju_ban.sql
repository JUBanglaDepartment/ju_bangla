-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 08:16 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ju_ban`
--

-- --------------------------------------------------------

--
-- Table structure for table `cgpa`
--

CREATE TABLE `cgpa` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `grade_point` double DEFAULT NULL,
  `grade` varchar(5) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `class_notes`
--

CREATE TABLE `class_notes` (
  `id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `note_title` varchar(100) NOT NULL,
  `note_desc` text,
  `note_link` varchar(200) NOT NULL,
  `uploaded_user_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contact_text` varchar(50) NOT NULL,
  `contact_type_id` int(2) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact_types`
--

CREATE TABLE `contact_types` (
  `id` int(2) NOT NULL,
  `contact_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_types`
--

INSERT INTO `contact_types` (`id`, `contact_type`) VALUES
(1, 'Mobile No'),
(2, 'Email');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `course_title` varchar(200) NOT NULL,
  `course_category` varchar(10) DEFAULT NULL,
  `course_credit` decimal(10,0) DEFAULT NULL,
  `course_desc` text,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_title`, `course_category`, `course_credit`, `course_desc`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'C001', 'Bangla Sahitto', 'Pre', '3', 'Something', 1, '2017-04-18 18:19:46', '2017-04-18 18:19:46'),
(2, 'C002', 'Bangla Sahittyo-2', 'Pre', '3', '', 1, '2017-04-23 01:25:21', '2017-04-23 01:25:21'),
(3, 'C003', 'Bangla Goddo-1', 'Pre', '3', '', 1, '2017-04-23 01:25:45', '2017-04-23 01:25:45'),
(4, 'C004', 'Bangla Goddo-2', 'Pre', '3', '', 1, '2017-04-23 01:26:00', '2017-04-23 01:26:00'),
(5, 'C005', 'Bangla Poddo-1', 'Pre', '3', '', 1, '2017-04-23 01:26:22', '2017-04-23 01:26:22'),
(6, 'C006', 'Bangla Poddo-2', 'Pre', '3', '', 1, '2017-04-23 01:26:38', '2017-04-23 01:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `teacher_code` varchar(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `present_address` text,
  `permanent_address` text,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `user_id`, `teacher_code`, `name`, `dob`, `present_address`, `permanent_address`, `is_active`, `created_at`, `updated_at`) VALUES
(6, 8, 't1', NULL, NULL, NULL, NULL, 1, '2017-04-22 13:50:31', '2017-04-22 13:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `id` int(11) NOT NULL,
  `hall_name_en` text NOT NULL,
  `hall_name_bn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_link` varchar(200) NOT NULL,
  `is_profile_pic` tinyint(1) NOT NULL DEFAULT '1',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `attendance` decimal(10,0) DEFAULT NULL,
  `tutorial` decimal(10,0) DEFAULT NULL,
  `course_final` decimal(10,0) DEFAULT NULL,
  `extra_grace_marks` decimal(10,0) DEFAULT NULL,
  `total_marks` decimal(10,0) DEFAULT NULL,
  `grade_point` decimal(10,0) DEFAULT NULL,
  `grade` varchar(5) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `menu_title` varchar(50) NOT NULL,
  `menu_url` varchar(100) DEFAULT NULL,
  `menu_desc` text,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_title`, `menu_url`, `menu_desc`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Create Menu', '/menu/create', '', 1, '2017-08-28 02:35:47', '2017-08-28 02:35:47'),
(2, 'Assign Menu', '/menu/assign', '', 1, '2017-08-28 02:36:10', '2017-08-28 02:36:10'),
(3, 'Create Program', '/program/create', '', 1, '2017-08-28 02:37:18', '2017-08-28 02:37:18'),
(4, 'Create Course', '/course/create', '', 1, '2017-08-28 02:37:53', '2017-08-28 02:37:53'),
(5, 'Create Semester', '/semester/create', '', 1, '2017-08-28 02:38:24', '2017-08-28 02:38:24'),
(6, 'Create Faculty', '/faculty/create', '', 1, '2017-08-28 02:38:52', '2017-08-28 02:38:52'),
(7, 'Create Student', '/student/create', '', 1, '2017-08-28 02:39:45', '2017-08-28 02:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updatedat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `program_title_en` varchar(250) NOT NULL,
  `program_title_bn` varchar(250) NOT NULL,
  `program_desc` text,
  `total_credit` int(3) DEFAULT NULL,
  `total_courses` int(2) DEFAULT NULL,
  `estimated_semester` int(2) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `program_title_en`, `program_title_bn`, `program_desc`, `total_credit`, `total_courses`, `estimated_semester`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'BSc', 'asd', '', 12, 12, 12, 1, '2017-04-18 16:26:02', '2017-04-18 16:26:02'),
(2, 'MSc', 'asd', '', 12, 12, 12, 1, '2017-04-18 16:26:24', '2017-04-18 16:26:24'),
(3, 'Program-3', 'asd', '', 12, 12, 12, 1, '2017-04-18 16:35:21', '2017-04-18 16:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `paper_title` text NOT NULL,
  `paper_abstract` text NOT NULL,
  `date_of_publications` date NOT NULL,
  `paper_location` text,
  `paper_url` text,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `role_desc` text,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `role_desc`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, 1, '2017-04-10 00:00:00', '2017-04-10 00:00:00'),
(2, 'Faculty', NULL, 1, '2017-04-10 00:00:00', '2017-04-10 00:00:00'),
(3, 'Student', NULL, 1, '2017-04-10 00:00:00', '2017-04-10 00:00:00'),
(4, 'Editor', NULL, 1, '2017-04-10 00:00:00', '2017-04-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_menu`
--

CREATE TABLE `role_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_menu`
--

INSERT INTO `role_menu` (`id`, `role_id`, `menu_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 7, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` int(11) NOT NULL,
  `semester_code` varchar(100) NOT NULL,
  `semester_title` varchar(100) NOT NULL,
  `semester_desc` text,
  `year` year(4) DEFAULT NULL,
  `duration_months` int(2) DEFAULT NULL,
  `start_month` date NOT NULL,
  `end_month` date NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `semester_code`, `semester_title`, `semester_desc`, `year`, `duration_months`, `start_month`, `end_month`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '0', 'Summer - 2017', 'Test Semester', 2017, 3, '2017-05-09', '2017-07-19', 0, '2017-04-19 14:56:41', '2017-04-19 14:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `semester_course_faculty`
--

CREATE TABLE `semester_course_faculty` (
  `id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `faculty_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester_course_faculty`
--

INSERT INTO `semester_course_faculty` (`id`, `semester_id`, `course_id`, `faculty_id`) VALUES
(1, 1, 3, 6),
(2, 1, 5, 6),
(3, 1, 4, 6),
(4, 1, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `semester_course_student`
--

CREATE TABLE `semester_course_student` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `reg_code` varchar(20) NOT NULL,
  `student_code` varchar(20) NOT NULL,
  `hall_id` int(4) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `present_address` text,
  `permanent_address` text,
  `guardian_name` varchar(50) DEFAULT NULL,
  `guardian_contact` varchar(20) DEFAULT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `father_contact` varchar(20) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `program_id`, `reg_code`, `student_code`, `hall_id`, `name`, `dob`, `blood_group`, `present_address`, `permanent_address`, `guardian_name`, `guardian_contact`, `father_name`, `father_contact`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 9, 2, '902234589', '23434', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-22 19:36:28', '2017-04-22 19:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_aactive` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(250) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`, `is_aactive`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'a', '$2y$10$A8E1zRcMx/d/Dk0Wj7paXOrpp1LlS66cBlonbEosgul0B9f3oXvxi', 1, 1, 'Ldup2ttP2cQ3R4E7A0GNdlPtpnN23VR3VqVdmbKdbzCBPKUCqcXX6Syxu6f7', '2017-04-15 10:44:50', '2017-04-15 10:44:50'),
(8, 't1', '$2y$10$wQkVQUqUqEdxNEh5abpi2.Dwxn1o3pqBabBxz3ugRk51n8s.LdbZq', 2, 1, 'ISaDROQetN8pLmRNSev9fz0rMknbwwrgi2mR091ByazQyFXx5PdK256YRn8v', '2017-04-22 13:50:31', '2017-04-22 13:50:31'),
(9, 'student1', '$2y$10$lqFmvtJxOY9mWGpq3ROOpeZGOgz.vhGlGI.iLv8Iw/2KHkUol4PCO', 3, 1, 'fPlCZHtM9RHznCRPnEgUZlE0mfxikgnboTVPDqANUYDZIEDskTmQNo2LQ3V4', '2017-04-22 19:36:28', '2017-04-22 19:36:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cgpa`
--
ALTER TABLE `cgpa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semester_id` (`semester_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `class_notes`
--
ALTER TABLE `class_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semester_id` (`semester_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `user_id` (`uploaded_user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `FK_contacts_contact_types` (`contact_type_id`);

--
-- Indexes for table `contact_types`
--
ALTER TABLE `contact_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_code` (`course_code`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semester_id` (`semester_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_menu`
--
ALTER TABLE `role_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_role_menu_roles` (`role_id`),
  ADD KEY `FK_role_menu_menus` (`menu_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `semister_code` (`semester_code`);

--
-- Indexes for table `semester_course_faculty`
--
ALTER TABLE `semester_course_faculty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semester_id` (`semester_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `semester_course_student`
--
ALTER TABLE `semester_course_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semester_id` (`semester_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `FK_students_programs` (`program_id`),
  ADD KEY `FK_students_halls` (`hall_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `FK_users_roles` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cgpa`
--
ALTER TABLE `cgpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `class_notes`
--
ALTER TABLE `class_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact_types`
--
ALTER TABLE `contact_types`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `role_menu`
--
ALTER TABLE `role_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `semester_course_faculty`
--
ALTER TABLE `semester_course_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `semester_course_student`
--
ALTER TABLE `semester_course_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cgpa`
--
ALTER TABLE `cgpa`
  ADD CONSTRAINT `FK_cgpa_semesters` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`),
  ADD CONSTRAINT `FK_cgpa_students` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `class_notes`
--
ALTER TABLE `class_notes`
  ADD CONSTRAINT `FK_class_notes_courses` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `FK_class_notes_semesters` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`);

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `FK_contacts_contact_types` FOREIGN KEY (`contact_type_id`) REFERENCES `contact_types` (`id`),
  ADD CONSTRAINT `FK_contacts_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `faculties`
--
ALTER TABLE `faculties`
  ADD CONSTRAINT `FK_faculties_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_images_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `FK_marks_courses` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `FK_marks_faculties` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`),
  ADD CONSTRAINT `FK_marks_semesters` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`),
  ADD CONSTRAINT `FK_marks_students` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD CONSTRAINT `FK_password_reset_tokens_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `FK_publications_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_menu`
--
ALTER TABLE `role_menu`
  ADD CONSTRAINT `FK_role_menu_menus` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `FK_role_menu_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `semester_course_faculty`
--
ALTER TABLE `semester_course_faculty`
  ADD CONSTRAINT `FK_semester_course_faculty_courses` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `FK_semester_course_faculty_faculties` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`),
  ADD CONSTRAINT `FK_semester_course_faculty_semester` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`);

--
-- Constraints for table `semester_course_student`
--
ALTER TABLE `semester_course_student`
  ADD CONSTRAINT `FK_semester_course_student_courses` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `FK_semester_course_student_semesters` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`),
  ADD CONSTRAINT `FK_semester_course_student_students` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `FK_students_halls` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`id`),
  ADD CONSTRAINT `FK_students_programs` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`),
  ADD CONSTRAINT `FK_students_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
