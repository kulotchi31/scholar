-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2023 at 02:39 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `scholar_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `birth` date NOT NULL,
  `citizen` varchar(10) NOT NULL,
  `placeofbirth` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `schooladdr` varchar(100) NOT NULL,
  `yearlevel` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(5) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `genaverage` double NOT NULL,
  `school_type` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `fatheraddress` varchar(100) NOT NULL,
  `motheraddress` varchar(100) NOT NULL,
  `fatheroccup` varchar(100) NOT NULL,
  `motheroccup` varchar(100) NOT NULL,
  `fathereducattain` varchar(100) NOT NULL,
  `mothereducattain` varchar(100) NOT NULL,
  `gross` varchar(100) NOT NULL,
  `sibling` varchar(100) NOT NULL,
  `fatherstat` varchar(100) NOT NULL,
  `motherstat` varchar(100) NOT NULL,
  `intend` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `brgy` varchar(100) NOT NULL,
  `municipality` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `disability` varchar(50) NOT NULL,
  `profile` text NOT NULL,
  `tax_img` text NOT NULL,
  `cor_img` varchar(100) NOT NULL,
  `cog_img` varchar(100) NOT NULL,
  `report_img` varchar(100) NOT NULL,
  `brgclear_img` varchar(100) NOT NULL,
  `moral_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `scholar_id`, `fname`, `mname`, `lname`, `birth`, `citizen`, `placeofbirth`, `school`, `schooladdr`, `yearlevel`, `course`, `phone`, `email`, `age`, `civil_status`, `gender`, `genaverage`, `school_type`, `fathername`, `mothername`, `fatheraddress`, `motheraddress`, `fatheroccup`, `motheroccup`, `fathereducattain`, `mothereducattain`, `gross`, `sibling`, `fatherstat`, `motherstat`, `intend`, `status`, `brgy`, `municipality`, `province`, `username`, `password`, `disability`, `profile`, `tax_img`, `cor_img`, `cog_img`, `report_img`, `brgclear_img`, `moral_img`) VALUES
(1, 'SD', 'Jhon Paulo', 'Melchor', 'Mase', '2001-10-31', 'Filipino', 'Homestead 1 Talavera Nueva Ecija', 'Neust', 'Homestead 1- Paludpod Rd', 'Grade 12', 'BS in Information Technology', '09669803718', 'jhonpaulomckinnon@gmail.com', 22, 'Single', 'Male', 89.9, 'Public', 'Orlando Mase', 'Vilma Mase', 'Homestead 1- Paludpod Rd', 'Homestead 1', 'Welder', 'Housewife', 'Highschool Graduate', 'Highschool', '20,000', '8', 'Living', 'Living', 'Sanricardo National High School', 'Applicants', 'Baloc', 'Santo Dominggo', 'Nueva Ecija', 'admin', 'admin', 'N/A', '', 'foil-method.png', '396303112_1503696980444319_6430417976842101815_n.png', '382299170_1344379112830900_385665764148854890_n.jpg', 'man_reading_newspaper_1.jpg', 'Defame.png', '348355367_775225360634257_1442397434352226744_n.jpg'),
(2, 'SD', 'Robenson', 'Diaz', 'Delacruz', '2001-02-03', 'Filipino', 'Baloc Santo Domingo Nueva Ecija', 'National Trade School', 'Homestead 1- Paludpod Rd', 'Grade 12', 'BS in Information Technology', '09669803718', 'jhonpaulomckinnon@gmail.com', 22, 'Single', 'Male', 90.9, 'Private', 'Gregorio Dela Cruz', 'Lea Salonggga', 'Baloc Santo Domingo', 'Homestead 1', 'Tricycle Driver', 'Housewife', 'Highschool Graduate', 'Highschool', '25,000', '9', 'Living', 'Living', 'National Trade School', 'Applicants', 'Baloc', 'Santo Dominggo', 'Nueva Ecija', '', '', 'N/A', '', 'foil-method.png', '384396717_278469361674104_6043290280870458067_n.jpg', '379654202_339151091810526_855669491208412233_n.jpg', 'CYBER DEFAMATION.png', '346050264_1238114773511009_355076682198742420_n.jpg', '350947800_726723785892130_1875374553200381570_n.jpg'),
(3, 'SD', 'Jkcdbj', 'Jkbejc', 'Lnec', '2001-10-31', 'Filipino', 'Homestead 1 Talavera Nueva Ecija', 'Neust', 'Homestead 1- Paludpod Rd', 'Grade 12', 'Accountancy', '09669803718', 'paulo@gmail.com', 22, 'Single', 'Female', 90.9, 'Public', 'Orlando Mase', 'Lea Salonggga', 'Homestead 1- Paludpod Rd', 'Homestead 1', 'Welder', 'Housewife', 'Highschool Graduate', 'Highschool', '15,000', '8', 'Living', 'Living', 'Sanricardo', 'Applicants', 'Baloc', 'Santo Domingo', 'Nueva Ecija', '', '', 'N/A', '', 'Blue Modern Phone Wallpaper.png', '382072347_716427560326781_794445007768648279_n.jpg', 'All-you-need-to-know-about-Cyber-Defamation-scaled-pfzgju59iof05zo5eks2akbd0e3cc3fz2bonus3z48.jpg', '379654202_339151091810526_855669491208412233_n.jpg', 'All-you-need-to-know-about-Cyber-Defamation-scaled-pfzgju59iof05zo5eks2akbd0e3cc3fz2bonus3z48.jpg', 'Blue Modern Phone Wallpaper.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
