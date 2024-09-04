-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2024 at 12:55 PM
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
-- Database: `vu`
--

-- --------------------------------------------------------

--
-- Table structure for table `peoples`
--

CREATE TABLE `peoples` (
  `name` varchar(40) DEFAULT NULL,
  `designation` varchar(40) DEFAULT NULL,
  `type` varchar(60) DEFAULT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peoples`
--

INSERT INTO `peoples` (`name`, `designation`, `type`, `img`) VALUES
('DR. N. USHA RANI', 'Chair Person', 'WEDC_Commitee_Members', './assets/images/pexels_photo_by_pegah_sharifi.webp'),
('MRS. PRIYA GUTTA', 'Member', 'WEDC_Commitee_Members', './assets/images/pexels_photo_by_pegah_sharifi (1).webp'),
('MRS. LOKI MADINENI', 'Member', 'WEDC_Commitee_Members', './assets/images/pexels_photo_by_pegah_sharifi (2).webp'),
('MISS. ARUNA ANCHULA', 'Student Member', 'WEDC_Commitee_Members', './assets/images/pexels_photo_by_pegah_sharifi (3).webp'),
('DR. N. USHA RANI', 'Member', 'WEDC_Commitee_Members', './assets/images/pexels_photo_by_pegah_sharifi (4).webp'),
('MRS. PRIYA GUTTA', 'Member', 'WEDC_Commitee_Members', './assets/images/pexels_photo_by_pegah_sharifi (5).webp'),
('MRS. LOKI MADINENI', 'Member', 'WEDC_Commitee_Members', './assets/images/pexels_photo_by_pegah_sharifi (6).webp'),
('MISS. ARUNA ANCHULA', 'Student Member', 'WEDC_Commitee_Members', './assets/images/pexels_photo_by_pegah_sharifi (7).webp'),
('DR. N. USHA RANI', 'Chair Person', 'WEDC_Commitee_Members', './assets/images/pexels_photo_by_pegah_sharifi (8).webp'),
('MRS. PRIYA GUTTA', 'Member', 'WEDC_Commitee_Members', './assets/images/pexels_photo_by_pegah_sharifi (9).webp'),
('MRS. LOKI MADINENI', 'Member', 'WEDC_Commitee_Members', './assets/images/pexels_photo_by_pegah_sharifi (10).webp'),
('MISS. ARUNA ANCHULA', 'Student Member', 'WEDC_Commitee_Members', './assets/images/pexels_photo_by_pegah_sharifi (11).webp'),
('MRS. PRIYA GUTTA', 'Member', 'WEDC_Commitee_Members', './assets/images/pexels_photo_by_pegah_sharifi.webp'),
('MISS. ARUNA ANCHULA', 'Student Member', 'WEDC_Commitee_Members', './assets/images/pexels_photo_by_pegah_sharifi (1).webp'),
('MISS. ARUNA ANCHULA', 'Student Member', 'WEDC_Commitee_Members', './assets/images/pexels_photo_by_pegah_sharifi (2).webp'),
('MRS. LOKI MADINENI', 'Member', 'WEDC_Commitee_Members', './assets/images/pexels_photo_by_pegah_sharifi (3).webp'),
('D. Chanikya Chandra Sekhar', 'BA.LLB(Hons.)', 'lib_student_committee', 'assets/images/studentimage1.png'),
('Gorantla Jahnavi', 'BBA.LLB(Hons.)', 'lib_student_committee', 'assets/images/studentimage0.png'),
('K. Dinesh', 'EEE', 'lib_student_committee', 'assets/images/studentimage2.png'),
('P. Ravi Shankar', 'Mechanical', 'lib_student_committee', 'assets/images/studentimage3.png'),
('K. Yaswanth', 'IT', 'lib_student_committee', 'assets/images/studentimage1.png'),
('Shaik Nasmeen', 'BCA', 'lib_student_committee', 'assets/images/studentimage0.png'),
('B. Raju', 'MCA', 'lib_student_committee', 'assets/images/studentimage2.png'),
('Vadiyara Gopichand', 'Textile', 'lib_student_committee', 'assets/images/studentimage3.png'),
('Gadi Aditya Varma', 'Bioinformatics', 'lib_student_committee', 'assets/images/studentimage1.png'),
('Machavarapu Naga Pavan Satish Kumar', 'Biotechnology', 'lib_student_committee', 'assets/images/studentimage2.png\"'),
('Irfan', 'BBA', 'lib_student_committee', 'assets/images/studentimage3.png'),
('Vemula Chandra Lakshmi Manasa', 'MBA', 'lib_student_committee', 'assets/images/studentimage0.png'),
('Arun Kumar', 'Pharmacy', 'lib_student_committee', 'assets/images/studentimage1.png'),
('V. Naga Venkatanadh', 'Agriculture', 'lib_student_committee', 'assets/images/studentimage2.png'),
('J. Akshay', 'Automobile', 'lib_student_committee', 'assets/images/studentimage3.png'),
('A. Pardhav Sai', 'CSE', 'lib_student_committee', 'assets/images/studentimage1.png'),
('P. Tarun Sai', 'AI & ML', 'lib_student_committee', 'assets/images/studentimage2.png'),
('B. Srinivas', 'ECE', 'lib_student_committee', 'assets/images/studentimage3.png'),
('I. Dilleswarao', 'Biomedical', 'lib_student_committee', 'assets/images/studentimage1.png'),
('Y. Jyothsna', 'AHS', 'lib_student_committee', 'assets/images/studentimage0.png'),
('S.P.C.S. VaraPrasad', 'Civil', 'lib_student_committee', 'assets/images/studentimage2.png'),
('Dr. Y. Ravi Sekhar', 'Chairman', 'lib_advisory_committee', 'assets/images/aboutus_img12.webp'),
('Dr.M. Subba Rao', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img14.webp'),
('Dr. A. Vijaya Sai', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img13.webp'),
('Dr. Sk. Farooq', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img11.webp'),
('Dr. D. Satish Chandra', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img11.webp'),
('Dr. B.M.Rao', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img12.webp'),
('Mr. K. S Raghuram', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img13.webp'),
('Mr. M. Srikanth Yadav', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img14.webp'),
('Ch. Govardhana Rao', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img11.webp'),
('Dr. Irshaan Syed', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img12.webp'),
('Mrs. K. Ramya sri', 'Member', 'lib_advisory_committee', 'assets/images/lib_img1.png'),
('Ashutosh Kumar Dikshit', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img13.webp'),
('Uttej Kumar Nannapaneni', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img11.webp'),
('Mr. A. Venkata Ramana', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img12.webp'),
('Dr. A. Aruna Kumari', 'Member', 'lib_advisory_committee', 'assets/images/lib_img1.png'),
('Dr. Praveen Kumar', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img14.webp'),
('Smt. A. Rajani Kumari', 'Member, Secretary', 'lib_advisory_committee', 'assets/images/lib_img1.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
