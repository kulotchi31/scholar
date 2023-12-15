-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 03:33 PM
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
-- Database: `scholarinfosystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl`
--

CREATE TABLE `course_tbl` (
  `Course_ID` int(10) NOT NULL,
  `Course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disability_tbl`
--

CREATE TABLE `disability_tbl` (
  `disability_id` int(10) DEFAULT NULL,
  `type_of_disability` varchar(255) NOT NULL,
  `fk_scholar_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `family_tbl`
--

CREATE TABLE `family_tbl` (
  `family_id` int(10) NOT NULL,
  `fk_scholar_id` int(10) NOT NULL,
  `father_status` varchar(255) NOT NULL,
  `mother_status` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `father_address` varchar(255) NOT NULL,
  `mother_address` varchar(255) NOT NULL,
  `father_education_attainment` varchar(255) NOT NULL,
  `mother_education_attainment` varchar(255) NOT NULL,
  `father_occupation` varchar(255) NOT NULL,
  `mother_occupation` varchar(255) NOT NULL,
  `parent_gross_income` int(10) NOT NULL,
  `number_of_siblings` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lgu_staff`
--

CREATE TABLE `lgu_staff` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lgu_staff`
--

INSERT INTO `lgu_staff` (`id`, `username`, `password`) VALUES
(1, 'SDadmin1', 'SDadmin1');

-- --------------------------------------------------------

--
-- Table structure for table `report_card_tbl`
--

CREATE TABLE `report_card_tbl` (
  `repor_card_id` int(10) NOT NULL,
  `report_card` varchar(255) NOT NULL,
  `fk_scholar_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requirements_tbl`
--

CREATE TABLE `requirements_tbl` (
  `requirements_id` int(10) NOT NULL,
  `fk_scholar_id` int(10) NOT NULL,
  `COR` varchar(255) NOT NULL,
  `COG` varchar(255) NOT NULL,
  `tax_exemption` varchar(255) NOT NULL,
  `fk_lgu_staff_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `citizen` varchar(10) NOT NULL,
  `placeofbirth` varchar(100) NOT NULL,
  `yearlevel` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `genaverage` double NOT NULL,
  `intend` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `brgy` varchar(100) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `profile` text NOT NULL,
  `brgclear_img` varchar(100) NOT NULL,
  `moral_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `mname`, `lname`, `suffix`, `birth`, `citizen`, `placeofbirth`, `yearlevel`, `phone`, `email`, `civil_status`, `gender`, `genaverage`, `intend`, `status`, `brgy`, `username`, `password`, `profile`, `brgclear_img`, `moral_img`) VALUES
(1, 'Jhon Paulo', 'Melchor', 'Mase', '', '2001-10-31', 'Filipino', 'Homestead 1 Talavera Nueva Ecija', 'Grade 12', '09669803718', 'jhonpaulomckinnon@gmail.com', 'Single', 'Male', 89.9, 'Sanricardo National High School', 'applicants', 'Baloc', 'jhonpaulomckinnon@gmail.com', 'SD00002', 'user.png', 'Defame.png', '348355367_775225360634257_1442397434352226744_n.jpg'),
(2, 'Robenson', 'Diaz', 'Delacruz', '', '2001-02-03', 'Filipino', 'Baloc Santo Domingo Nueva Ecija', 'Grade 12', '09669803718', 'jhonpaulomckinnon@gmail.com', 'Single', 'Male', 90.9, 'National Trade School', 'applicants', 'Baloc', 'jhonpaulomckinnon@gmail.com', 'SD00002', '384465575_615217330813746_9167074865613876270_n.jpg', '346050264_1238114773511009_355076682198742420_n.jpg', '350947800_726723785892130_1875374553200381570_n.jpg'),
(3, 'Marvin', 'Dizon', 'Thomas', '', '2001-10-31', 'Filipino', 'Homestead 1 Talavera Nueva Ecija', 'Grade 12', '09669803718', 'paulo@gmail.com', 'Single', 'Female', 90.9, 'Sanricardo', 'applicants', 'Baloc', 'admin', 'admin', '4001198.jpg', 'All-you-need-to-know-about-Cyber-Defamation-scaled-pfzgju59iof05zo5eks2akbd0e3cc3fz2bonus3z48.jpg', 'Blue Modern Phone Wallpaper.png'),
(4, 'Hans', 'Emiliano', 'Buagrin', '', '2002-05-07', 'Filipino', 'Sto. Domingo', 'Grade 12', '09972879306', 'bugarin.hansabbye@gmail.com', 'Single', 'Female', 1.75, 'Neust-mgt', 'applicants', 'Pulong Buli', 'bugarin.hansabbye@gmail.com', 'SD00001', 'IMG_20231126_140429.jpg', 'user2.png', 'user.png'),
(5, 'Angel Joy ', 'Agustin', 'Tabucalde', '', '2000-12-20', 'Filipino', 'Homestead 1 Talavera Nueva Ecija', 'Grade 9', '09669803718', 'jhonpaulomase@gmail.com', 'Single', 'Female', 90.9, 'Neust Talavera Nueva Ecija', 'applicants', 'Conception', '', '', '', '379882034_683763300050941_6889736552345560233_n.jpg', '379882034_683763300050941_6889736552345560233_n.jpg'),
(6, 'Carlo', 'Melchor', 'Thomas', '', '2001-10-31', 'Filipino', 'Homestead 1 Talavera Nueva Ecija', 'Grade 12', '09669803718', 'paulo@gmail.com', 'Single', 'Male', 90.9, 'Sanricardo', 'applicants', 'Dolores', '', '', '', 'foil-method.png', '379654202_339151091810526_855669491208412233_n.jpg'),
(7, 'Jhon Paulo', 'Dela Cruz', 'Mase', '', '2001-10-31', 'Filipino', 'Homestead 1 Talavera Nueva Ecija', 'Grade 10', '09669803718', 'jhonpaulomckinnon@gmail.com', 'Single', 'Male', 90.9, 'Sanricardo', 'applicants', 'Cabugao', 'jhonpaulomckinnon@gmail.com', 'SD00003', '387632666_3647082805539684_4947093783448655443_n.jpg', 'aa.jpg', '386476832_7106194089474966_5341796197862006784_n (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `university_tbl`
--

CREATE TABLE `university_tbl` (
  `university_id` int(10) DEFAULT NULL,
  `university_name` varchar(255) NOT NULL,
  `university_address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_tbl`
--
ALTER TABLE `course_tbl`
  ADD PRIMARY KEY (`Course_ID`);

--
-- Indexes for table `family_tbl`
--
ALTER TABLE `family_tbl`
  ADD PRIMARY KEY (`family_id`);

--
-- Indexes for table `lgu_staff`
--
ALTER TABLE `lgu_staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `report_card_tbl`
--
ALTER TABLE `report_card_tbl`
  ADD PRIMARY KEY (`repor_card_id`);

--
-- Indexes for table `requirements_tbl`
--
ALTER TABLE `requirements_tbl`
  ADD PRIMARY KEY (`requirements_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_tbl`
--
ALTER TABLE `course_tbl`
  MODIFY `Course_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `family_tbl`
--
ALTER TABLE `family_tbl`
  MODIFY `family_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_card_tbl`
--
ALTER TABLE `report_card_tbl`
  MODIFY `repor_card_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requirements_tbl`
--
ALTER TABLE `requirements_tbl`
  MODIFY `requirements_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
