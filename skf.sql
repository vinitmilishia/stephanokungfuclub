-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 03:27 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skf`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `attendance_class_id` int(11) NOT NULL,
  `attendance_stud_id` int(11) NOT NULL,
  `attendance_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `attendance_status` varchar(255) NOT NULL DEFAULT 'present' COMMENT 'present or absance'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `attendance_class_id`, `attendance_stud_id`, `attendance_date`, `attendance_status`) VALUES
(1, 1, 1, '2017-04-08 04:00:00', 'present'),
(2, 10, 4, '2017-04-08 04:00:00', 'present'),
(3, 10, 6, '2017-04-08 04:00:00', 'present'),
(4, 2, 4, '2017-04-11 01:49:25', 'present'),
(5, 2, 5, '2017-04-11 01:49:25', 'present'),
(6, 2, 4, '2017-04-11 03:18:16', 'present'),
(7, 2, 5, '2017-04-11 03:18:16', 'present'),
(8, 2, 7, '2017-04-11 03:18:16', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(10) NOT NULL,
  `class_day` varchar(255) NOT NULL COMMENT 'sunday or monday',
  `class_time` varchar(255) NOT NULL COMMENT '1:00pm to 3:00 pm',
  `class_level` varchar(255) NOT NULL COMMENT 'intermediate or pro',
  `class_status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_day`, `class_time`, `class_level`, `class_status`) VALUES
(1, 'Sunday', '7am to 11am', 'Expert Level', 'active'),
(2, 'Monday', '5:30am to 10:30am', 'Beginner Level', 'active'),
(3, 'Monday', '4:00pm to 7:00pm', 'Moderate Level', 'active'),
(4, 'Tuesday', '6:30am to 11:30am', 'Beginner Level', 'active'),
(5, 'Tuesday', '5:00pm to 7:00pm', 'Moderate Level', 'active'),
(6, 'Thursday', '6:30am to 11:30am', 'Moderate Level', 'active'),
(7, 'Thursday', '5:00pm to 7:00pm', 'Beginner Level', 'active'),
(8, 'Wednesday', '5:30am to 10:30am', 'Beginner Level', 'active'),
(9, 'Wednesday', '4:00pm to 7:00pm', 'Moderate Level', 'active'),
(10, 'Saturday', '7:30am to 11:30am', 'Expert Level', 'active'),
(11, 'Saturday', '4:30pm to 7:00pm', 'Expert Level', 'active'),
(12, 'Friday', '7:30am to 12:30pm', 'Moderate Level', 'active'),
(13, 'Friday', '5:00pm to 8:30pm', 'Begginner Level', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `parents_id` int(10) NOT NULL,
  `parents_email` varchar(255) DEFAULT NULL,
  `parents_mobile` varchar(255) DEFAULT NULL,
  `parents_status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`parents_id`, `parents_email`, `parents_mobile`, `parents_status`) VALUES
(1, 'test@parents.com', '9856321475', 'active'),
(2, 'kkshah@gmail.com', '5192533000', 'active'),
(3, 'patel1bm@yahoo.com', '2265478541', 'active'),
(4, 'patel1ck@gmail.com', '4561237895', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) NOT NULL,
  `payment_type` int(10) NOT NULL,
  `payment_amount` double NOT NULL,
  `payment_date` date NOT NULL,
  `payment_status` varchar(255) NOT NULL COMMENT 'pending or paid',
  `payment_stud_id` int(10) NOT NULL COMMENT 'paid_by'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_type`, `payment_amount`, `payment_date`, `payment_status`, `payment_stud_id`) VALUES
(2, 1, 500, '2017-04-08', 'paid', 6),
(3, 4, 300, '2017-04-07', 'paid', 4),
(4, 1, 450, '2017-04-10', 'paid', 7);

-- --------------------------------------------------------

--
-- Table structure for table `payment_type`
--

CREATE TABLE `payment_type` (
  `payment_type_id` int(10) NOT NULL,
  `payment_type_name` varchar(255) NOT NULL,
  `payment_type_stauts` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_type`
--

INSERT INTO `payment_type` (`payment_type_id`, `payment_type_name`, `payment_type_stauts`) VALUES
(1, 'Membership Fees', 'active'),
(4, 'Exam Fees', 'active'),
(5, 'Product Purchase', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `rank_id` int(10) NOT NULL,
  `rank_belt_color` varchar(255) NOT NULL,
  `rank_requirement` longtext NOT NULL,
  `rank_status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`rank_id`, `rank_belt_color`, `rank_requirement`, `rank_status`) VALUES
(1, 'White Belt', 'Five Stance Form', 'active'),
(2, 'Yellow Belt', 'Long Fist (Beginner)', 'active'),
(3, 'Green Belt', 'Staff or Spear (Beginner)', 'active'),
(4, 'Blue Belt', '\r\nBroadsword or Straight Sword (Beginner)', 'active'),
(5, 'Red Belt', 'Long Fist (Intermediate)', 'active'),
(6, 'Brown Belt', 'Long Fist or Southern Fist (Advanced)', 'active'),
(7, 'Gold Belt', 'Advanced Broadsword or Straight Sword', 'active'),
(8, 'Black Belt', 'Individual Empty Hand, Short Weapon and Long Weapon', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` int(10) NOT NULL,
  `stud_enroll_num` varchar(255) NOT NULL,
  `stud_name` varchar(255) NOT NULL,
  `stud_address` longtext NOT NULL,
  `stud_email` varchar(255) NOT NULL,
  `stud_dob` date NOT NULL,
  `stud_mobile` varchar(255) NOT NULL,
  `stud_join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `stud_status` varchar(255) NOT NULL DEFAULT 'active',
  `stud_parents_id` int(10) DEFAULT NULL,
  `stud_rank_id` int(10) NOT NULL,
  `stud_user_id` int(10) NOT NULL COMMENT 'student added by'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `stud_enroll_num`, `stud_name`, `stud_address`, `stud_email`, `stud_dob`, `stud_mobile`, `stud_join_date`, `stud_status`, `stud_parents_id`, `stud_rank_id`, `stud_user_id`) VALUES
(1, 'SKF00000', 'Test Entry', 'Test Entry', 'Test Entry', '2017-04-07', '9887456525', '2017-04-07 07:40:46', 'disable', 1, 1, 1),
(4, 'SKF00001', 'Aditya Shah', '395 Mill St, Windsor, ON N9C2R3', 'aditya.shah7023@gmail.com', '1993-12-07', '5192712398', '2017-04-08 01:59:06', 'active', 2, 2, 1),
(5, 'SKF00002', 'Jagdish Patil', '2125 University Ave, Windsor, ON N9C2M4', 'jagdishp@gmail.com', '1993-01-02', '2261457895', '2017-04-08 03:54:47', 'active', 1, 1, 1),
(6, 'SKF00004', 'Harsh Patel', '621 Partington Ave, Windsor, ON N9C2B5', 'harshpatel@gmail.com', '1993-05-15', '3064578954', '2017-04-08 03:57:04', 'active', 3, 2, 1),
(7, 'SKF00004', 'Parthiv Patel', '325 Wyandotte St W, Windsor, ON N9C1M6', 'parthiv@uwindsor.ca', '1995-04-10', '5194562347', '2017-04-11 03:16:32', 'active', 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_progress`
--

CREATE TABLE `student_progress` (
  `stud_prog_id` int(10) NOT NULL,
  `stud_prog_stud_id` int(10) NOT NULL,
  `stud_prog_rank_id` int(10) NOT NULL,
  `stud_prog_rank_date` date NOT NULL,
  `stud_prog_status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_progress`
--

INSERT INTO `student_progress` (`stud_prog_id`, `stud_prog_stud_id`, `stud_prog_rank_id`, `stud_prog_rank_date`, `stud_prog_status`) VALUES
(4, 4, 3, '2017-04-09', 'active'),
(5, 4, 2, '2017-04-08', 'active'),
(6, 6, 2, '2017-04-09', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_type` varchar(255) NOT NULL COMMENT 'admin or instructor',
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_type`, `user_name`, `user_password`, `user_status`) VALUES
(1, 'instructor', 'stephano@uwindsor.ca', 'password', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `fK_class` (`attendance_class_id`),
  ADD KEY `FK_student` (`attendance_stud_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`parents_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `FK_payment_type` (`payment_type`),
  ADD KEY `FK_student` (`payment_stud_id`);

--
-- Indexes for table `payment_type`
--
ALTER TABLE `payment_type`
  ADD PRIMARY KEY (`payment_type_id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`rank_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`),
  ADD KEY `FK_parents` (`stud_parents_id`),
  ADD KEY `FK_rank` (`stud_rank_id`),
  ADD KEY `FK_user` (`stud_user_id`);

--
-- Indexes for table `student_progress`
--
ALTER TABLE `student_progress`
  ADD PRIMARY KEY (`stud_prog_id`),
  ADD KEY `FK_student` (`stud_prog_stud_id`),
  ADD KEY `FK_rank` (`stud_prog_rank_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `parents_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `payment_type`
--
ALTER TABLE `payment_type`
  MODIFY `payment_type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `rank_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stud_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `student_progress`
--
ALTER TABLE `student_progress`
  MODIFY `stud_prog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`attendance_class_id`) REFERENCES `class` (`class_id`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`attendance_stud_id`) REFERENCES `student` (`stud_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`payment_type`) REFERENCES `payment_type` (`payment_type_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`payment_stud_id`) REFERENCES `student` (`stud_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`stud_parents_id`) REFERENCES `parents` (`parents_id`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`stud_rank_id`) REFERENCES `rank` (`rank_id`),
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`stud_user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `student_progress`
--
ALTER TABLE `student_progress`
  ADD CONSTRAINT `student_progress_ibfk_1` FOREIGN KEY (`stud_prog_stud_id`) REFERENCES `student` (`stud_id`),
  ADD CONSTRAINT `student_progress_ibfk_2` FOREIGN KEY (`stud_prog_rank_id`) REFERENCES `rank` (`rank_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
