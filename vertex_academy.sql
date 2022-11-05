-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 03:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vertex_academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `contact_name`, `contact_email`, `contact_message`) VALUES
(1, 'Debasish Biswas', 'biswas.deb238@gmail.com', 'I need Web Development Course.'),
(3, 'Sykat Biswas', 'saykat@gmail.com', 'i need this course'),
(4, 'Asif Hasan', 'asifhasan2k18@gmail.com', 'I want buy your web development course.');

-- --------------------------------------------------------

--
-- Table structure for table `course_list`
--

CREATE TABLE `course_list` (
  `course_id` int(255) NOT NULL,
  `course_image` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_desc` text NOT NULL,
  `course_category` varchar(255) NOT NULL,
  `timeStamp` datetime NOT NULL DEFAULT current_timestamp(),
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_list`
--

INSERT INTO `course_list` (`course_id`, `course_image`, `course_name`, `course_desc`, `course_category`, `timeStamp`, `price`) VALUES
(3, 'retina_1708x683_COVER-dcbcd112f1d502d97d7f2467c1ce21da.png', 'SOFTWARE DEVELOPMENT', 'We cannot think about our day-to-day life without software. Here you can find all kinds of notes about java, Dart, Python, JavaScript, and so on. Hopefully, it will be helpful.', 'website_show', '2022-09-19 19:42:18', '500'),
(4, '6038586442907648.png', 'CYBER SECURITY', 'In this world, the most expensive thing is data. So we have to know about cyber security for our safety issue. On the other hand this PDF can help your career to being a cyber security specialist . For know more download this PDF and have a look.', '', '2022-09-19 19:46:31', '600'),
(6, 'R.png', 'THERMODYNAMICS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in.', '', '2022-09-19 19:50:04', '650'),
(17, '6896db168cdc97dd503297fc65514853.jpg', 'ICT HSC FINAL', 'All Suggetions About Chemistry 1st Paper. It Is Very Helpful For A Hsc Candidate. You Must Follow This PDF And Take Better Preparation For Your HSC Exam.HSC Chemistry Offers Powerful Calculation Methods For Studying The Effects Of Different Variables On The Chemical System At Equilibrium. For Example, If The User Gives The Raw Materials, Amounts And Other Conditions Of Almost Any Chemical', '', '2022-10-17 10:13:43', '750'),
(21, '70165631_947476742252359_343104845420429312_n.jpg', 'Web Development3', 'All Suggetions About Chemistry 1st Paper. It Is Very Helpful For A Hsc Candidate. You Must Follow This PDF And Take Better Preparation For Your HSC Exam.HSC Chemistry Offers Powerful Calculation Methods For Studying The Effects Of Different Variables On The Chemical System At Equilibrium. For Example, If The User Gives The Raw Materials, Amounts And Other Conditions Of Almost Any Chemical', 'website_show', '2022-10-25 15:39:57', '678'),
(22, '6896db168cdc97dd503297fc65514853.jpg', 'Hsc Bangla', 'All Suggetions About Chemistry 1st Paper. It Is Very Helpful For A Hsc Candidate. You Must Follow This PDF And Take Better Preparation For Your HSC Exam.HSC Chemistry Offers Powerful Calculation Methods For Studying The Effects Of Different Variables On The Chemical System At Equilibrium. For Example, If The User Gives The Raw Materials, Amounts And Other Conditions Of Almost Any Chemical', 'website_show', '2022-10-25 15:47:06', '6789');

-- --------------------------------------------------------

--
-- Table structure for table `course_videos`
--

CREATE TABLE `course_videos` (
  `id` int(255) NOT NULL,
  `course_id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_image` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_videos`
--

INSERT INTO `course_videos` (`id`, `course_id`, `course_name`, `course_image`, `video_link`) VALUES
(1, 1, 'HSC Chemistry', 'rais.png', 'https://www.youtube.com/watch?v=0dndTKxKO8k'),
(3, 3, 'Hsc Physics', '70165631_947476742252359_343104845420429312_n.jpg', 'https://www.youtube.com/watch?v=0dndTKxKO8k'),
(4, 0, 'Hsc Chemistry', '6038586442907648.png', 'https://www.youtube.com/watch?v=0dndTKxKO8k');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `course_name` text NOT NULL,
  `star` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `course_name`, `star`) VALUES
(6, 'Sujan Kumar Dhali', 'sujan@cseku.ac.bd', 'Excellent', 'Artificial Intelligence', 'Four_Star ⭐⭐⭐⭐'),
(8, 'Sykat Biswas', 'sykat@gmail.com', 'very very impresive', 'Artificial Intelligence', 'Five_Star ⭐⭐⭐⭐⭐'),
(9, 'Moniruzzaman', 'monir@gmail.com', 'very good', 'Data Structure', 'One_Star ⭐'),
(10, 'Md Shariar Kabir', 'shariar@gmail.com', 'Excellent,mind Blowing', 'Web Development', 'Five_Star ⭐⭐⭐⭐⭐'),
(12, 'Nisat Tasnim Mim', 'nisat@gmail.com', 'very good', 'Data Structure', 'Five_Star ⭐⭐⭐⭐⭐'),
(13, 'Sykat Biswas', 'sykat345@gmail.com', 'very very impressive', 'Data Structure', 'Five_Star ⭐⭐⭐⭐⭐'),
(14, 'Asif Hasan', 'asifhasan2k18@gmail.com', ' Very good course', 'Web Development', 'Three_Star ⭐⭐⭐');

-- --------------------------------------------------------

--
-- Table structure for table `success`
--

CREATE TABLE `success` (
  `id` int(11) NOT NULL,
  `tran_id` varchar(255) NOT NULL,
  `card_type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tran_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `success`
--

INSERT INTO `success` (`id`, `tran_id`, `card_type`, `status`, `tran_date`) VALUES
(1, 'SSLCZ_TEST_634e1fe4befd9', 'BKASH-BKash', 'VALIDATED', '2022-10-18 09:39:34.000000'),
(2, 'SSLCZ_TEST_634e1fe4befd9', 'BKASH-BKash', 'VALIDATED', '2022-10-18 09:39:34.000000'),
(3, 'SSLCZ_TEST_634e36f8a25f8', 'BKASH-BKash', 'VALID', '2022-10-18 11:18:02.000000'),
(4, 'SSLCZ_TEST_634e3a400f4ff', 'DBBLMOBILEB-Dbbl Mobile Banking', 'VALID', '2022-10-18 11:32:02.000000'),
(5, 'SSLCZ_TEST_634e36f8a25f8', 'BKASH-BKash', 'VALIDATED', '2022-10-18 11:18:02.000000'),
(6, 'SSLCZ_TEST_634e3af2d4c11', 'VISA-Dutch Bangla', 'VALID', '2022-10-18 11:35:01.000000'),
(7, 'SSLCZ_TEST_634e528b024b5', 'BKASH-BKash', 'VALID', '2022-10-18 13:15:41.000000'),
(8, 'SSLCZ_TEST_634e534286721', 'MASTER-Dutch Bangla', 'VALID', '2022-10-18 13:18:45.000000'),
(9, 'SSLCZ_TEST_63535e3bd2375', 'BKASH-BKash', 'VALID', '2022-10-22 08:22:18.000000'),
(10, 'SSLCZ_TEST_6357848e2e806', 'BKASH-BKash', 'VALID', '2022-10-25 12:39:16.000000'),
(17, 'SSLCZ_TEST_63578a5486c76', 'DBBLMOBILEB-Dbbl Mobile Banking', 'VALIDATED', '2022-10-25 13:03:54.000000'),
(18, 'SSLCZ_TEST_635799fca74db', 'IBBL-Islami Bank', 'VALID', '2022-10-25 14:10:41.000000'),
(19, 'SSLCZ_TEST_63579af7ea46b', 'BKASH-BKash', 'VALID', '2022-10-25 14:14:52.000000'),
(20, 'SSLCZ_TEST_6357a4c484f57', 'BKASH-BKash', 'VALID', '2022-10-25 14:56:41.000000');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_list`
--

CREATE TABLE `teacher_list` (
  `teacher_id` int(255) NOT NULL,
  `teacher_image` varchar(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_desc` text NOT NULL,
  `timeStamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_list`
--

INSERT INTO `teacher_list` (`teacher_id`, `teacher_image`, `teacher_name`, `teacher_desc`, `timeStamp`) VALUES
(5, 'rais.jpg', 'Sheikh Rais Rahman', 'CSE Discipline,3rd Year,Khulna University', '2022-10-17 10:43:21'),
(6, 'debasish.png', 'Debasish Biswas', 'CSE Discipline,3rd Year,Khulna University', '2022-10-17 10:44:00'),
(7, '274381251_1602952633403252_5906259503267801618_n.jpg', 'Sheikh Asif Hossain', 'CSE Discipline,4th Year,Khulna University', '2022-10-17 10:46:32'),
(8, 'saykat2.jpg', 'Saykat Mondal', 'CSE Discipline,3rd Year,Khulna University', '2022-10-17 12:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_name`, `user_email`, `user_password`, `user_type`) VALUES
(14, 'debnew', 'deb@hotmail.com', '123456', 'customer'),
(15, 'Debadmin', 'admin@admin.com', 'admin123', 'admin'),
(16, 'Debasish Biswas', 'biswas.deb238@gmail.com', '123456', 'customer'),
(17, 'Editor', 'admin123@gmail.com', 'admin123', 'admin'),
(18, 'Debasish190206', 'debasish1906@cseku.ac.bd', '123456', 'customer'),
(19, 'DEBASISH67', 'debasish.bs238@gmail.com', 'debasish123', 'customer'),
(20, 'Motiur', 'motiur@gmail.com', '123456', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_list`
--
ALTER TABLE `course_list`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_videos`
--
ALTER TABLE `course_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success`
--
ALTER TABLE `success`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_list`
--
ALTER TABLE `teacher_list`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_list`
--
ALTER TABLE `course_list`
  MODIFY `course_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `course_videos`
--
ALTER TABLE `course_videos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `success`
--
ALTER TABLE `success`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `teacher_list`
--
ALTER TABLE `teacher_list`
  MODIFY `teacher_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
