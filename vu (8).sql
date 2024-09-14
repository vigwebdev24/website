-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2024 at 04:19 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.32

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
-- Table structure for table `accreditation`
--

CREATE TABLE `accreditation` (
  `id` varchar(100) NOT NULL DEFAULT '',
  `acc_logo` varchar(100) DEFAULT NULL,
  `acc_desc` varchar(255) DEFAULT NULL,
  `acc_btnm` varchar(100) DEFAULT NULL,
  `acc_btnhlink` varchar(255) DEFAULT NULL,
  `acc_nm` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accreditation`
--

INSERT INTO `accreditation` (`id`, `acc_logo`, `acc_desc`, `acc_btnm`, `acc_btnhlink`, `acc_nm`) VALUES
('homeacc_disr', 'assets/images/dsir.svg', 'The Department of Scientific & Industrial ResearchCertified   Institute', 'Know More', 'https://vignan.ac.in/iqacranks.php', 'dsir'),
('homeacc_naac', 'assets/images/naaca.svg', ' National Assessment\r\n                                    <br />\r\n                                    and Accredetation Council\r\n                                    <br />\r\n                                    (NAAC) 2021', 'Know More', 'naac.php', 'naac'),
('homeacc_nba', 'assets/images/nba.svg', ' National Board of Accreditation\r\n                                    <br />\r\n                                    CSE,ECE,EEE,Mechanical\r\n                                    <br />\r\n                                    & Biotech For 3 years', 'Know More', 'https://vignan.ac.in/iqaccer.php', 'nba');

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `descr` varchar(2048) NOT NULL,
  `start_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `type`, `title`, `img1`, `img2`, `img3`, `descr`, `start_date`, `end_date`) VALUES
(2, 'ueac', 'SWACHH VIGNAN- CLEANLINESS DRIVE (PLASTIC FREE ENVIRONMENT)', 'assets/images/ueacevent3.png', '', '', 'The team UEAC conducted “Cleanliness Drive” on 27.01.2024 in the VFSTR premises (All Blocks) from 03:00PM to 4:00PM. The main objective of this programme is to make India a clean and green country.As per the schedule. Registrar Cmde. Dr. M.S. Raghunathan initiated the Swachh Vignan programme in VFSTR. Dean Students Affairs Dr.M.S.S. Rukmini,The UEAC Programme Officer, Dr. Vijayababu Palukuri, Mr. Veeranjee S&H Department (Maths), ECE UEAC Faculty coordinator Mr. Bhumi Reddy, NSS coordinator Mr. D. Suresh Babu, & UEAC faculty coordinators of all departments along with 325 students actively participated in the cleanliness drive at five blocks of the university. The volunteers spread into five groups and collected the plastic bottles, wrappers, covers and glasses in and around A-block & Library, H block & Sport ground (opposite OAT), N block surroundings & MHP, U block back side corners and Gust house areas. Wearing gloves and masks collected all the litter in big bags for disposal.', '2024-01-27 00:00:00', '2024-01-27 00:00:00'),
(3, 'ueac', 'Blood Donation Camp - Give Blood Give Life', 'assets/images/ueacevent1.png', '', '', 'UEAC (University Extension Activity council) Unit of VFSTR organized a Blood Donation Camp on the occasion of Republic Day on 24th January 2024 in University premises at five places (NTR Library Video Conference Hall, 1st floor, TBI Seminar Hall 2nd floor Nagarjuna Block, AGF-10 U-Block ground floor, Pharmacy Block ground floor and VFF-02 Lara Campus). A team of 10 doctors and 50 lab technicians from Government General Hospital Guntur and Needs blood bank, Guntur came for the collection of blood. The event started from 10.00 AM.', '2024-01-24 00:00:00', '2024-01-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` varchar(30) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `person_name` varchar(100) DEFAULT NULL,
  `descr` varchar(1000) DEFAULT NULL,
  `img1` varchar(100) DEFAULT NULL,
  `img2` varchar(100) DEFAULT NULL,
  `img3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `title`, `person_name`, `descr`, `img1`, `img2`, `img3`) VALUES
('awards_card1', 'Best Women Leader', 'M. S. S. Rukmini', '\"Vignan has been doing a wonderful job. The knowledge you acquire from Vignan will help the students to kiss the sky\"', 'assets/images/awards_mssRukmini.webp', NULL, NULL),
('awards_card2', 'Best Speaker', '', '\"Vignan has been doing a wonderful job. The knowledge you acquire from Vignan will help the students to kiss the sky\"', 'assets/images/awards_img1.webp', 'assets/images/awards_img2.webp', NULL),
('awards_card3', 'Best Women Leader', 'M. S. S. Rukmini', '\"Vignan has been doing a wonderful job. The knowledge you acquire from Vignan will help the students to kiss the sky\"', 'assets/images/awards_mssRukmini.webp', NULL, NULL),
('awards_card4', 'Best Women Leader', 'M. S. S. Rukmini', '\"Vignan has been doing a wonderful job. The knowledge you acquire from Vignan will help the students to kiss the sky\"', 'assets/images/awards_mssRukmini.webp', NULL, NULL),
('awards_card5', 'Best Women Leader', 'M. S. S. Rukmini', '\"Vignan has been doing a wonderful job. The knowledge you acquire from Vignan will help the students to kiss the sky\"', 'assets/images/awards_mssRukmini.webp', NULL, NULL),
('awards_card6', 'Best Speaker', '', '\"Vignan has been doing a wonderful job. The knowledge you acquire from Vignan will help the students to kiss the sky\"', 'assets/images/awards_img1.webp', 'assets/images/awards_img2.webp', NULL),
('awards_card7', 'Best Speaker', '', '\"Vignan has been doing a wonderful job. The knowledge you acquire from Vignan will help the students to kiss the sky\"', 'assets/images/awards_img1.webp', 'assets/images/awards_img2.webp', NULL),
('awards_card8', 'Best Speaker', '', '\"Vignan has been doing a wonderful job. The knowledge you acquire from Vignan will help the students to kiss the sky\"', 'assets/images/awards_img1.webp', 'assets/images/awards_img2.webp', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` varchar(100) NOT NULL,
  `dept_id` varchar(100) DEFAULT NULL,
  `schl_id` varchar(100) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `branch_name1` varchar(255) DEFAULT NULL,
  `branch_short_name1` varchar(255) DEFAULT NULL,
  `branch_name2` varchar(255) DEFAULT NULL,
  `branch_short_name2` varchar(255) DEFAULT NULL,
  `branch_name3` varchar(255) DEFAULT NULL,
  `branch_short_name3` varchar(255) DEFAULT NULL,
  `branch_name4` varchar(255) DEFAULT NULL,
  `branch_short_name4` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `dept_id`, `schl_id`, `title`, `branch_name1`, `branch_short_name1`, `branch_name2`, `branch_short_name2`, `branch_name3`, `branch_short_name3`, `branch_name4`, `branch_short_name4`, `image`) VALUES
('sch1_dept1_branch1', 'dept1', 'sch1', 'PROGRAMMES OFFERED', '', '', 'B.Tech in Agriculture Engineering', 'Age', 'M.Tech in Farm Machinery', 'Farm', 'Ph.D in Agriculture Engineering', 'Phd-agri', 'assets/images/ae-img.jpg'),
('sch1_dept2_branch2', 'dept2', 'sch1', 'PROGRAMMES OFFERED', 'B.Tech in Mechanical Engineering', 'Mech', 'M.Tech in Machine Design', 'Machine Design', 'Ph.D. in Mechanical Engineering', 'Phd-ME', '', '', 'assets/images/mech-img.webp'),
('sch1_dept3_branch3', 'dept3', 'sch1', 'PROGRAMMES OFFERED', 'B.Tech In Chemical Engineering', 'Chem', 'B.Tech in Petroleum Engineering', 'Petroleum', 'Ph.D. in Chemical Engineering', 'Phd-chem', '', '', 'assets/images/chemical-img.png'),
('sch1_dept4_branch4', 'dept4', 'sch1', 'PROGRAMMES OFFERED', 'B.Tech In Civil Engineering', 'Civil', 'M.Tech In Structural Engineering', 'Structural', 'Ph.D. in Civil Engineering', 'Phd-civil', '', '', 'assets/images/civil-img.jpg'),
('sch1_dept5_branch5', 'dept5', 'sch1', 'PROGRAMMES OFFERED', 'B.Tech in Textile Technology', 'Textile', 'M.Tech In Technical Textiles', 'Technical Textiles', 'Ph.D. in Textile Technology', 'Phd-textile', '', '', 'assets/images/textile-tech.jfif'),
('sch2_dept1_branch1', 'dept1', 'sch2', 'PROGRAMMES OFFERED', 'B.Tech in Electronics and Communication Engineering', 'ECE', 'Embedded Systems', 'Embedded Systems', 'VLSI', 'VLSI', 'Ph.D. in Electronics and Communication Engineering', 'Phd-ECE', 'assets/images/DepartmentHomeImages/Electronics_and_Communication_Engineering_basic.jpg'),
('sch2_dept2_branch2', 'dept2', 'sch2', 'PROGRAMMES OFFERED', 'B.Tech in Biomedical Engineering', 'BME', '', '', '', '', '', '', 'assets/images/DepartmentHomeImages/Biomedical_Engineering_basic.jpg'),
('sch2_dept3_branch3', 'dept3', 'sch2', 'PROGRAMMES OFFERED', 'B.Tech In Electrical and Electronics Engineering', 'EEE', 'Power Electronics and Drives', 'PED', 'Ph.D. in Electrical and Electronics Engineering', 'Phd-EEE', '', '', 'assets/images/DepartmentHomeImages/Electrical_and_Electronics_Engineering_basic.jpg'),
('sch3_dept1_branch1', 'dept1', 'sch3', 'PROGRAMMES OFFERED', 'B.Tech in Computer Science and Engineering', 'CSE', 'M.Tech in Computer Science and Engineering', 'Mtech-CSE', 'Ph.D. in Computer Science and Engineering', 'Phd-CSE', '', '', 'assets/images/DepartmentHomeImages/Computer_Science_and_Engineering_basic.jpeg'),
('sch3_dept2_branch2', 'dept2', 'sch3', 'PROGRAMMES OFFERED', 'B.Tech ACSE - Artificial Intelligence and Machine Learning', 'ACSE-AIML', 'B.Tech ACSE - Cyber Security', 'ACSE-CS', 'B.Tech ACSE - Computer Science and Business Systems', 'ACSE-CSBS', 'M.Tech in ACSE - Internet of Things', 'ACSE-IOT', 'assets/images/DepartmentHomeImages/Advanced_Computer_Science_and_Engineering_basic.jpeg'),
('sch3_dept3_branch3', 'dept3', 'sch3', 'PROGRAMMES OFFERED', 'B.Tech- Information Technology', 'IT', 'BCA - Bachelor of Computer Applications', 'BCA', 'MCA - Master of Computer Applications', 'MCA', 'Ph.D - Computer Applications', 'Phd-Computer Applications', 'assets/images/DepartmentHomeImages/Information_Technology_basic.webp'),
('sch4_dept1_branch1', 'dept1', 'sch4', 'PROGRAMMES OFFERED', 'B.Tech in Biotechnology', 'BT', 'B.Tech in Bioinformatics', 'BI', 'M.Tech in Biotechnology', 'Mtech-BT', 'Ph.D in Biotechnology', 'Phd-BT', 'assets/images/DepartmentHomeImages/biotechnology_basic.jpg'),
('sch4_dept2_branch2', 'dept2', 'sch4', 'PROGRAMMES OFFERED', 'B.Pharmacy', 'b.pharm', '', '', '', '', '', '', 'assets/images/DepartmentHomeImages/Pharmaceutical_Sciences_basic.jpeg'),
('sch5_dept1_branch1', 'dept1', 'sch5', 'PROGRAMMES OFFERED', 'B.B.A', 'B.B.A', 'M.B.A', 'M.B.A', 'Ph.D in Management', 'Ph.D in Management', '', '', 'assets/images/DepartmentHomeImages/Management_Studies_basic.jpg'),
('sch5_dept2_branch2', 'dept2', 'sch5', 'PROGRAMMES OFFERED', 'BA.LLB (Hons.)', 'BA.LLB', 'BBA.LLB (Hons.)', 'BBA.LLB', '', '', '', '', 'assets/images/DepartmentHomeImages/Institue_of_Law_basic.jpg'),
('sch6_dept1_branch1', 'dept1', 'sch6', 'PROGRAMMES OFFERED', 'B.Sc. (Hons) Agriculture', 'B.Sc. Agri', '', '', '', '', '', '', 'assets/images/DepartmentHomeImages/Agriculture_and_Horticulture_Sciences_basic.jpg'),
('sch6_dept2_branch2', 'dept2', 'sch6', 'PROGRAMMES OFFERED', 'B.Tech in Food Technology', 'FT', 'M.Tech in Food Processing Technology', 'Mtech FT', 'Ph.D. in Food Processing Technology', 'Phd FT', '', '', 'assets/images/DepartmentHomeImages/Food_Technology_basic.jpg'),
('sch7_dept1_branch1', 'dept1', 'sch7', 'PROGRAMMES OFFERED', 'Ph.D in Physics', 'Phd-Phy', '', '', '', '', '', '', 'assets/images/DepartmentHomeImages/Department_of_Physics_basic.jpg'),
('sch7_dept2_branch2', 'dept2', 'sch7', 'PROGRAMMES OFFERED', 'M.Sc. (Chemistry)', 'M.Sc Chem', 'M.Sc. (Organic Chemistry)', 'M.Sc Organic chem', 'Ph.D in Chemistry', 'Phd Chem', '', '', 'assets/images/DepartmentHomeImages/Department_of_Chemistry_basic.jpg'),
('sch7_dept3_branch3', 'dept3', 'sch7', 'PROGRAMMES OFFERED', 'B.Sc.+ M.Sc. (Data Science)', 'B.Sc DS', 'Ph.D. in Mathematics', 'Phd Math', 'Ph.D. in Statistics', 'Phd Stats', '', '', 'assets/images/DepartmentHomeImages/D_Mathematics_and_Statistics_basic.webp'),
('sch7_dept4_branch4', 'dept4', 'sch7', 'PROGRAMMES OFFERED', 'M.A-English', 'MA-Eng', 'Ph.D in English', 'Phd-Eng', '', '', '', '', 'assets/images/DepartmentHomeImages/D_of_English_basic.jpeg'),
('sch7_dept5_branch5', 'dept5', 'sch7', 'PROGRAMMES OFFERED', 'B.Sc(Mathematics, Statastics, Computer Science)', 'BSc(Mathematics, Statastics, Computer Science)', 'M.Sc-Chemistry', 'MSc-chem', 'M.A-English', 'MA-Eng', 'Ph.D in Mathematics', 'Phd-Maths', 'assets/images/DepartmentHomeImages/D_of_Sciences_and_Humanities_basic.webp');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `Id` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(100) DEFAULT NULL,
  `descr` varchar(1500) DEFAULT NULL,
  `btn_nm` varchar(100) DEFAULT NULL,
  `btn_hlink` varchar(255) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `caption` varchar(100) DEFAULT NULL,
  `cardtype` varchar(100) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT '1994-01-01 00:00:00',
  `todate` datetime DEFAULT '1994-01-01 00:00:00',
  `subtitle` varchar(200) DEFAULT NULL,
  `sequence` int(11) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`Id`, `title`, `descr`, `btn_nm`, `btn_hlink`, `img`, `caption`, `cardtype`, `date`, `todate`, `subtitle`, `sequence`, `dept`) VALUES
('aboutus_sec2_card1', 'Our Vision', 'To evolve into a centre of excellence in Science & Technology through creative and innovative practices in teaching - learning, towards promoting academic achievement and research excellence to produce internationally accepted, competitive and world class', NULL, NULL, '', NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, NULL, NULL),
('aboutus_sec2_card2', 'Our Mission', ' To provide high quality academic programmes, training activities,\r\n                  research facilities and opportunities supported by continuous\r\n                  industry - institute interaction aimed at promoting employability,\r\n                  en', NULL, NULL, '', NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, NULL, NULL),
('antiragging_card1', 'Supreme Court of India ', 'Ragging in essence is a human rights abuse... In present times shocking incidents of ragging have come to the notice... The student is physically tortured or psychologically terrorized', 'Feb 11, 2009', NULL, NULL, '', NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 1, NULL),
('antiragging_card2', 'Raghavan Committee', 'If education, and particularly Higher Education, is to serve as the lever to the great surge forward of the Indian nation, the scourge of ragging which corrodes the vitals of our campuses needs to be curbed ...?... Ragging adversely impacts the standards of higher education', NULL, NULL, NULL, '', NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 2, NULL),
('antiragging_card3', 'Debalina Haldar, ', 'Ragging at its most harmless is embarrassing and silly, but at its worst, it attempts to prevent individual students from independent thinking, attempts, in fact, to eradicate freewill', 'The Female Ward', 'https://www.goodreads.com/work/quotes/23596800-the-female-ward', NULL, '', NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 3, NULL),
('grievance_card1', 'Students Grievance Redressal Cell', 'The function of the Cell is to look into the grievances lodged by any student, and  judge its merit, and take appropriate actions for redressal.', 'Read More', NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 1, NULL),
('grievance_card2', 'Anti-Ragging Committee', 'Stakeholder Feedback of provides invaluable insights into satisfaction levels, areas of improvement, and alignment with organisational goals. It fosters transparency, collaboration, and continuous enhancement of the educational experience for all involved stakeholders.', 'Read More', NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 2, NULL),
('grievance_card3', 'Internal Complaints Committee (ICC)', '\"Institutional Distinctiveness\" embodies the unique characteristics, strengths, and values that differentiate one educational institution from another. It encapsulates the essence of the institution\'s identity, culture, and contributions to the academic community and society at large.', 'Read More', NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 3, NULL),
('iqachead_aaa', 'AAA', 'Academic & Administrative Audit (AAA) report<br><br>\r\nQuality Education should be the vision of every University and every  educational institution. Academic Audit has been acclaimed as the effective  instrument for enhancing Quality Education all over the world. Academic Audit  provides measures of effectiveness to gauge academic programmes, research  outputs, administrative functions, learning resources, evaluation that add up to  Quality Education. The Vignan’s Foundation for Science, Technology & Research  (VFSTR) has undertaken self-assessment and exposed itself to external agency  towards assessment. Further, AAA Committee adds that the University had  external evaluation by NAAC during the year 2015 and received A Grade. In  continuation of Quality Assurance, the University has put up the Internal Quality  Assurance Cell in order to have continuous quality assessment. The University is  going for accreditation in 2021. The University was assessed by the Academic,  Administrative and Audit Committee (AAA Committee) in the year 2020-21. While  doing so the committee used the extensive database generated by the Internal  Quality Assurance Cell (IQAC).', NULL, NULL, NULL, NULL, 'aaa', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqachead_aishe', 'AISHE', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', NULL, NULL, NULL, NULL, 'certifications', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqachead_ariia', 'ARIIA', 'Atal Ranking of Institutions on Innovation Achievements (ARIIA) is an initiative of Ministry of Education (MoE), Govt. of India to systematically rank all major higher educational institutions and universities in India on indicators related to “Innovation and Entrepreneurship Development” amongst students and faculties. The first edition was launched in 2019.\r\n              <br><br>\r\n              The methodology designed to calculate ARIIA metrics considers all major parameters/ indicators used globally to rank education institutions for innovation output. Additionally, ARIIA also measures some parameters which are India specific considering the current scenario and status of higher education in India.\r\n              <br><br>\r\n              Vignan Institute\'s departments like Bio-tech, Food, Agricultural and Engineering Technologies s are part of innovation and startup ecosystem of the institute.', NULL, NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 2, NULL),
('iqachead_auap', 'AUAP', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', NULL, NULL, NULL, NULL, 'certifications', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqachead_bookletonhealth', 'Booklet on Health & Fitness of the Student', 'VFSTR has converted  its standard practices in to a special course on Physical Fitness allotting three credits in its R19 curriculum.', '', NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqachead_Careers360', 'Careers 360', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', NULL, NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 10, NULL),
('iqachead_dsir', 'DSIR', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', NULL, NULL, NULL, NULL, 'certifications', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqachead_educationworld', 'Education World', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', NULL, NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 6, NULL),
('iqachead_facultydevelopment', 'Academic Faculty Development', 'Faculty members in Engineering and Technology do not undergo a formal training in teaching  methodology unlike the teachers in schools where they are required to possess a formal degree/ certificate in education', '', NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqachead_hansa', 'HANSA', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', NULL, NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 8, NULL),
('iqachead_i3RCtimes', 'i3RC Times', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', NULL, NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 12, NULL),
('iqachead_iao', 'IAO', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', NULL, NULL, NULL, NULL, 'accreditation', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqachead_indiatoday', 'India Today', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', NULL, NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 7, NULL),
('iqachead_institutionaldistinctiveness', 'Institutional Distinctiveness', '\"Institutional Distinctiveness\" embodies the unique characteristics, strengths, and values that differentiate one educational institution from another. It encapsulates the essence of the institution\'s identity, culture, and contributions to the academic community and society at large.', NULL, NULL, NULL, NULL, '', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqachead_iqac_initiatives', 'IQAC Initiatives', 'IQAC initiatives strive to enhance institutional quality through continuous evaluation and improvement processes. By fostering a culture of excellence and innovation, IQAC initiatives empower institutions to adapt and thrive in an ever-evolving educational landscape.', NULL, NULL, NULL, NULL, 'iqac', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 2, NULL),
('iqachead_iso', 'ISO', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', NULL, NULL, NULL, NULL, 'certifications', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 2, NULL),
('iqachead_minutes_of_meeting', 'Minutes of Meeting', 'Minutes of Meeting serve as a comprehensive record summarising discussions, decisions, and action items from a meeting that were conducted under IQAC. They ensure clarity, accountability, and continuity by documenting key points for reference and follow-up.', NULL, NULL, NULL, NULL, '', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqachead_naac', 'NAAC', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', '', '', NULL, NULL, 'accreditation', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqachead_nba', 'NBA', 'National Board of Accreditation (NBA), promotes international quality standards for technical education in India.\r\n<br><br>\r\nNBA is a accrediting agency of international standard by ensuring the highest degree of credibility in assurance of quality and relevance to professional education and come up to the expectations of its stakeholder\'s viz., academicians, corporates, educational institutions, government, industry, regulators, students and their parents.', '', '', NULL, NULL, 'accreditation', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 2, NULL),
('iqachead_nirf', 'NIRF', 'Vignan received 76 NIRF in 2023 ranking\r\n<br><br>\r\nThe National Institutional Ranking Framework (NIRF) was approved by the MHRD and launched by Honourable Minister of Human Resource Development on 29th September 2015.<br>\r\nThis framework outlines a methodology to rank institutions across the country. The methodology draws from the overall recommendations broad understanding arrived at by a Core Committee set up by MHRD, to identify the broad parameters for ranking various universities and institutions. The parameters broadly cover “Teaching, Learning and Resources,” “Research and Professional Practices,” “Graduation Outcomes,” “Outreach and Inclusivity,” and “Perception”.<br>\r\nIndia Rankings – 2016 based on this framework were released on 4th April 2016.\r\nFor India Rankings – 2017, the main ranking parameters remain the same. However, there are a few significant changes in a few sub-parameters. Also, this year every large institution will be given a common overall rank as well as a discipline specific rank as applicable.', NULL, NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqachead_physicalfitness', 'Physical Fitness Record', 'This document provides a tangible record to track progress, identify areas for improvement, and maintain motivation on the journey towards optimal physical well-being.', '', NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 2, NULL),
('iqachead_qsi-gauge', 'QS I-GAUGE', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', NULL, NULL, NULL, NULL, 'accreditation', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqachead_rworldranking', 'R World Ranking', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', NULL, NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqachead_stakeholderfeedback', 'Stakeholder Feedback', 'Stakeholder Feedback of provides invaluable insights into satisfaction levels, areas of improvement, and alignment with organisational goals. It fosters transparency, collaboration, and continuous enhancement of the educational experience for all involved stakeholders.', NULL, NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqachead_statutoryaicte', 'All India Council for Technical Education (AICTE) ', 'A Statutory body under Ministry of Education, Govt. of India, Approval Process', '', '', 'assets/images/iqac_aicte.webp', '', 'statutory', '2023-01-01 00:00:00', '2024-06-11 12:01:22', '', 1, NULL),
('iqachead_statutorybci', 'Bar Council of India (BCI)', 'A Statutory Body Constituted under the Advocates Act, 1961, Interim Consent letter of Recognition 2021-22', '', '', 'assets/images/iqac_bci.webp', '', '', '2021-01-01 00:00:00', '2024-06-11 12:01:22', '', 3, NULL),
('iqachead_statutorypci', 'Pharmacy Council of India (PCI) ', 'A Statutory body under Ministry of Health & Family Welfare Govt. of India. Approval Letter 2022-23', '', '', 'assets/images/iqac_pci.webp', '', 'statutory', '2022-01-01 00:00:00', '2024-06-11 12:01:22', '', 2, NULL),
('iqachead_statutoryugc', 'University Grants Commission (UGC) ', 'Approvals for starting new courses ', '', '', 'assets/images/iqac_ugc.webp', '', 'statutory', '2023-01-01 00:00:00', '2024-06-11 12:01:22', '', 1, NULL),
('iqachead_the', 'THE', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', NULL, NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 9, NULL),
('iqachead_timesengineering', 'Times Engineering', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', NULL, NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 11, NULL),
('iqachead_uigreenmetric', 'UI Green Metric', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', NULL, NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqachead_wuriranking', 'WURI Ranking', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', NULL, NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 5, NULL),
('iqac_aaa_2019-20', NULL, NULL, 'AAA Report 2019-20', 'https://vignan.ac.in/naac/AAA%20report.pdf', NULL, NULL, NULL, '2019-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_aaa_2020-21', NULL, NULL, 'AAA Report 2020-21', 'https://vignan.ac.in/naac/AAA%20report(2020-21).pdf', NULL, NULL, NULL, '2020-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_aaa_card1', 'AAA Report', 'Academic & Administrative Audit (AAA) report  provides measures of effectiveness to gauge academic programmes, research  outputs, administrative functions, learning resources, evaluation that add up to  Quality Education', 'View All', NULL, NULL, NULL, 'aaa', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_aaa_card2', 'IQAC Initiatives', 'IQAC initiatives strive to enhance institutional quality through continuous evaluation and improvement processes. By fostering a culture of excellence and innovation, IQAC initiatives empower institutions to adapt and thrive in an ever-evolving educational landscape.', 'View All', NULL, NULL, NULL, 'aaa', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 2, NULL),
('iqac_aaa_card3', 'Minutes of Meeting', 'Minutes of Meeting serve as a comprehensive record summarising discussions, decisions, and action items from a meeting that were conducted under IQAC. They ensure clarity, accountability, and continuity by documenting key points for reference and follow-up.', 'View All', NULL, NULL, NULL, 'aaa', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_accreditation_card1', 'NAAC', 'UNIVERSITY GRANTS COMMISSION Approval for starting new courses', 'Read More', NULL, NULL, NULL, 'accreditation', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 1, NULL),
('iqac_accreditation_card2', 'NBA', 'National Board of Accreditation (NBA) approved accreditation status to multiple programs at Vignan', 'Read More', NULL, NULL, NULL, 'accreditation', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 2, NULL),
('iqac_accreditation_card3', 'QS I-GAUGE', 'QS I-GAUGE is a nationwide rating system for universities, colleges, and schools in India', 'Read More', NULL, NULL, NULL, 'accreditation', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 3, NULL),
('iqac_accreditation_card4', 'IAO', 'International Accreditation Organisation (IAO), certified Vignan', 'Read More', NULL, NULL, NULL, 'accreditation', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 4, NULL),
('iqac_aishe_2016-17', 'AISHE', NULL, 'AISHE 2016-17', 'https://vignan.ac.in/naac/AISHE-2016-2017.pdf', NULL, NULL, 'certifications', '2016-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_aishe_2017-18', 'AISHE', NULL, 'AISHE 2017-18', 'https://vignan.ac.in/naac/AISHE-2017-2018.pdf', NULL, NULL, 'certifications', '2017-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_aishe_2018-19', 'AISHE', NULL, 'AISHE 2018-19', 'https://vignan.ac.in/naac/AISHE-2018-2019.pdf', NULL, NULL, 'certifications', '2018-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_aishe_2019-20', 'AISHE', NULL, 'AISHE 2019-20', 'https://vignan.ac.in/naac/AISHE-2019-2020.pdf', NULL, NULL, 'certifications', '2019-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_aishe_2020-21', 'AISHE', NULL, 'AISHE 2020-21', 'https://vignan.ac.in/naac/AISHE-2020-2021.pdf', NULL, NULL, 'certifications', '2020-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_aishe_2021-22', 'AISHE', NULL, 'AISHE 2021-22', 'https://vignan.ac.in/naac/AISHE%202021-22%20%20Certificate.pdf', NULL, NULL, 'certifications', '2021-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_aishe_2022-23', 'AISHE', NULL, 'AISHE 2022-23', 'https://vignan.ac.in/naac/AISHE%202022-23%20Certificate.pdf', NULL, NULL, 'certifications', '2022-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_ariiarank_2021', 'ariia', NULL, '2021', 'https://vignan.ac.in/ARI-U-0043.pdf', NULL, NULL, 'rank', '2021-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 2, NULL),
('iqac_auap_1', 'AUAP', NULL, 'AUAP', 'https://vignan.ac.in/iqac/Association%20of%20Universities%20of%20Asia%20And%20The%20Pacific%20(AUAP).pdf', NULL, NULL, 'certifications', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_best_practices_card1', 'Booklet on Health & Fitness of the Student', 'VFSTR has converted  its standard practices in to a special course on Physical Fitness allotting three credits in its R19 curriculum.', 'Read More', NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_best_practices_card2', 'Physical Fitness Record', 'This document provides a tangible record to track progress, identify areas for improvement, and maintain motivation on the journey towards optimal physical well-being.', 'Read More', NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 2, NULL),
('iqac_best_practices_card3', 'Academic Faculty Development', 'Faculty members in Engineering and Technology do not undergo a formal training in teaching  methodology unlike the teachers in schools where they are required to possess a formal degree/ certificate in education', 'Read More', NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_bookletonhealth_1', '', '', 'Booklet on Health & Fitness of the Student', 'https://vignan.ac.in/naac/Health%20Booklet%20-%202021.pdf', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_Careers360_2022', 'Careers360', NULL, 'Careers 360 2022', 'https://vignan.ac.in/iqac/Careers360%20Best_Engineering_Colleges_AAAA.pdf', NULL, NULL, 'rank', '2022-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 10, NULL),
('iqac_certifications_card1', 'DSIR', 'International Accreditation Organisation (IAO), certified Vignan', 'Read More', NULL, NULL, NULL, 'certifications', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 1, NULL),
('iqac_certifications_card2', 'ISO', 'QS I-GAUGE is a nationwide rating system for universities, colleges, and schools in India', 'Read More', NULL, NULL, NULL, 'certifications', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 2, NULL),
('iqac_certifications_card3', 'AUAP', 'National Board of Accreditation (NBA) approved accreditation status to multiple programs at Vignan', 'Read More', NULL, NULL, NULL, 'certifications', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 3, NULL),
('iqac_certifications_card4', 'AISHE', 'All India Survey on Higher Education 2021-22', 'Read More', NULL, NULL, NULL, 'certifications', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 4, NULL),
('iqac_collaborations_card1', '', NULL, 'Adichunchanagiri University', 'https://vignan.ac.in/iqaccollaborations.php', 'assets/images/iqac_adichunchanagiri.webp', NULL, 'IQAC Collaborations', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_collaborations_card10', '', NULL, 'SRI RAMAKRISHNA ENGINEERING COLLEGE', 'https://vignan.ac.in/iqaccollaborations.php', 'assets/images/iqac_sriramakrishna.webp', NULL, 'IQAC Collaborations', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 10, NULL),
('iqac_collaborations_card11', '', NULL, 'SRI SIVASUBRAMANIYA NADAR COLLEGE OF ENGINEERING', 'https://vignan.ac.in/iqaccollaborations.php', 'assets/images/iqac_srisivasubramaniya.webp', NULL, 'IQAC Collaborations', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 11, NULL),
('iqac_collaborations_card12', '', NULL, 'SRK INSTITUTE of TECHNOLOGY', 'https://vignan.ac.in/iqaccollaborations.php', 'assets/images/iqac_srk.webp', NULL, 'IQAC Collaborations', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 12, NULL),
('iqac_collaborations_card13', '', NULL, 'SWARNANDHRA INSTITUTE of ENGINEERING & TECHNOLOGY', 'https://vignan.ac.in/iqaccollaborations.php', 'assets/images/iqac_swarnandhra.webp', NULL, 'IQAC Collaborations', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 13, NULL),
('iqac_collaborations_card14', '', NULL, 'VIGNAN GROUP', 'https://vignan.ac.in/iqaccollaborations.php', 'assets/images/iqac_vignangroup.webp', NULL, 'IQAC Collaborations', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 14, NULL),
('iqac_collaborations_card15', '', NULL, 'VNR VIGNANA JYOTHI INSTITUTE of ENGINEERING & TECHNOLOGY', 'https://vignan.ac.in/iqaccollaborations.php', 'assets/images/iqac_vnr.webp', NULL, 'IQAC Collaborations', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 15, NULL),
('iqac_collaborations_card2', '', NULL, 'AKS University', 'https://vignan.ac.in/iqaccollaborations.php', 'assets/images/iqac_aks.webp', NULL, 'IQAC Collaborations', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 2, NULL),
('iqac_collaborations_card3', '', NULL, 'BABA INSTITUTE of TECHNOLOGY & SCIENCES', 'https://vignan.ac.in/iqaccollaborations.php', 'assets/images/iqac_baba.webp', NULL, 'IQAC Collaborations', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_collaborations_card4', '', NULL, 'BHASKAR INSTITUTE of TECHNOLOGY and SCIENCES', 'https://vignan.ac.in/iqaccollaborations.php', 'assets/images/iqac_bhaskar.webp', NULL, 'IQAC Collaborations', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_collaborations_card5', '', NULL, 'KLR COLLEGE of ENGINEERING and TECHNOLOGY', 'https://vignan.ac.in/iqaccollaborations.php', 'assets/images/iqac_klr.webp', NULL, 'IQAC Collaborations', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 5, NULL),
('iqac_collaborations_card6', '', NULL, 'KSRM COLLEGE of ENGINEERING', 'https://vignan.ac.in/iqaccollaborations.php', 'assets/images/iqac_ksrm.webp', NULL, 'IQAC Collaborations', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 6, NULL),
('iqac_collaborations_card7', '', NULL, 'NAWAB SHAH ALAM KHAN COLLEGE of ENGINEERING', 'https://vignan.ac.in/iqaccollaborations.php', 'assets/images/iqac_nawab.webp', NULL, 'IQAC Collaborations', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 7, NULL),
('iqac_collaborations_card8', '', NULL, 'RAMCO INSTITUTE OF TECHNOLOGY', 'https://vignan.ac.in/iqaccollaborations.php', 'assets/images/iqac_ramco.webp', NULL, 'IQAC Collaborations', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 8, NULL),
('iqac_collaborations_card9', '', NULL, 'R.J.S FIRST GRADE COLLEGE', 'https://vignan.ac.in/iqaccollaborations.php', 'assets/images/iqac_rjs.webp', NULL, 'IQAC Collaborations', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 9, NULL),
('iqac_dsir_1', 'DSIR', NULL, 'DSIR', 'https://vignan.ac.in/pdf/DSIR%20Certificate.pdf', NULL, NULL, 'certifications', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_educationworld_2021', 'educationworld', NULL, 'Education World 2021', 'https://vignan.ac.in/iqac/EW%20Magazine%20Ranking%202021.pdf', NULL, NULL, 'rank', '2021-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 6, NULL),
('iqac_facultydevelopment_1', '', '', 'Faculty Development Program', 'https://vignan.ac.in/naac/AFD%20Booklet%20-%202021.pdf', NULL, '', NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 3, NULL),
('iqac_hansa_2021', 'hansa', NULL, 'hansa 2021', 'https://vignan.ac.in/iqac/The%20Week%20HANSA%20Research%20Survey%202021%20(India\'s%20Best%20Universities).pdf', NULL, NULL, 'rank', '2021-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 8, NULL),
('iqac_hansa_2022', 'hansa', NULL, 'hansa 2022', 'https://vignan.ac.in/iqac/Thee%20Week%20Hansa%202022%20Ranks.pdf', NULL, NULL, 'rank', '2022-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 8, NULL),
('iqac_i3RCtimes_2016', 'i3RCTimes', NULL, 'i3RC Times 2016', 'https://vignan.ac.in/iqac/i3RC%20Times%20Top%20150%20Engineering%20Institute%20Rankings%202016.pdf', NULL, NULL, 'rank', '2016-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 12, NULL),
('iqac_i3RCtimes_2017', 'i3RCTimes', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ex!<br><br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores sunt voluptatem nisi tenetur totam fuga dolores possimus quasi quia sit exercitationem natus numquam, magni fugiat nostrum suscipit. Blanditiis reiciendis beatae quae nihil? Exercitationem commodi at explicabo, provident eveniet, debitis minus cupiditate ducimus laborum consequatur labore voluptatibus. Cum, voluptatum delectus!<br>\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam eum molestiae enim, amet dolores quaerat, cum quisquam in maxime, eos est nemo! Obcaecati totam debitis, itaque minus corporis voluptate, ut dolorum ad modi molestias quas laborum harum eius aliquid.', 'i3RC Times 2017', 'https://vignan.ac.in/iqac/i3RC%20Times%20Top%20150%20Engineering%20Institute%20Rankings%202017.pdf', NULL, NULL, 'rank', '2017-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 12, NULL),
('iqac_iao_1', 'iao', NULL, 'IAO', 'https://vignan.ac.in/iqac/IAO%20Certificate.jpg', NULL, NULL, 'accreditation', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_indiatoday_2021', 'indiatoday', NULL, 'India Today 2021', 'https://vignan.ac.in/iqac/India%20Today%20Best%20Colleges%20of%20India%202021.pdf', NULL, NULL, 'rank', '2021-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 7, NULL),
('iqac_indiatoday_2022', 'indiatoday', NULL, 'India Today 2022', 'https://vignan.ac.in/iqac/India%20Today%20Engineering%20Rank%202022.pdf', NULL, NULL, 'rank', '2022-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 7, NULL),
('iqac_initiatives_Facility for e-Content', NULL, NULL, 'Facility for e-Content', 'https://vignan.ac.in/VFSTR%20Recording%20Editing%20Facilities%20presentation%20video.mp4', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 2, NULL),
('iqac_initiatives_VU Moodle', NULL, NULL, 'VU Moodle', 'https://vumoodle.in/', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 2, NULL),
('iqac_institutionaldistinctiveness_1', '', '', 'Facilitating Access for Rural Youth', 'https://vignan.ac.in/naac/Facilitating%20Access%20for%20Rural%20Youth.pdf', NULL, NULL, '', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_iso_1', 'ISO', NULL, 'ISO', 'https://vignan.ac.in/iqac/ISO%20Certificate%202023.pdf', NULL, NULL, 'certifications', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 2, NULL),
('iqac_minutes_of_meeting_2015-16', '', '', 'View', 'https://vignan.ac.in/iqac/mom%202015-16.pdf', '', 'Minutes of Meeting', '', '2015-01-01 00:00:00', '2024-06-11 12:01:22', '2015-2016', 3, NULL),
('iqac_minutes_of_meeting_2016-17', '', '', 'View', 'https://vignan.ac.in/iqac/mom%202016-17.pdf', '', 'Minutes of Meeting', '', '2016-01-01 00:00:00', '2024-06-11 12:01:22', '2016-2017', 3, NULL),
('iqac_minutes_of_meeting_2017-18', '', '', 'View', 'https://vignan.ac.in/iqac/mom%202017-18.pdf', '', 'Minutes of Meeting', '', '2017-01-01 00:00:00', '2024-06-11 12:01:22', '2017-2018', 3, NULL),
('iqac_minutes_of_meeting_2018-19', '', '', 'View', 'https://vignan.ac.in/iqac/mom%202018-19.pdf', '', 'Minutes of Meeting', '', '2018-01-01 00:00:00', '2024-06-11 12:01:22', '2018-2019', 3, NULL),
('iqac_minutes_of_meeting_2019-20', '', '', 'View', 'https://vignan.ac.in/iqac/mom%202019-20.pdf', '', 'Minutes of Meeting', '', '2019-01-01 00:00:00', '2024-06-11 12:01:22', '2019-2020', 3, NULL),
('iqac_minutes_of_meeting_2020-21', '', '', 'View', 'https://vignan.ac.in/iqac/mom%202020-21.pdf', '', 'Minutes of Meeting', '', '2020-01-01 00:00:00', '2024-06-11 12:01:22', '2020-2021', 3, NULL),
('iqac_minutes_of_meeting_2021-22', '', '', 'View', 'https://vignan.ac.in/iqac/mom%202021-22.pdf', '', 'Minutes of Meeting', '', '2021-01-01 00:00:00', '2024-06-11 12:01:22', '2021-2022', 3, NULL),
('iqac_minutes_of_meeting_2022-23', '', '', 'View', 'https://vignan.ac.in/iqac/mom%202022-23.pdf', '', 'Minutes of Meeting', '', '2022-01-01 00:00:00', '2024-06-11 12:01:22', '2022-2023', 3, NULL),
('iqac_naac_cycle_1', 'NAAC_Cyle-I', NULL, 'NAAC Cyle-I', 'https://vignan.ac.in/pdf/NAAC.pdf', NULL, NULL, 'accreditation', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_naac_cycle_2', 'NAAC_Cyle-II', '', 'NAAC Cyle-II', 'https://vignan.ac.in/pdf/NAAC-Cycle-II.pdf', NULL, NULL, 'accreditation', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_nba_2020-23', 'NBA', NULL, 'NBA 2020-23', 'https://vignan.ac.in/pdf/NBA%20Approval%20for%205%20Depts.pdf', NULL, NULL, 'accreditation', '2020-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 2, NULL),
('iqac_nba_2023-26', 'NBA', '', 'NBA 2023-26', 'https://vignan.ac.in/pdf/NBA%20Approval%202023-26.pdf', NULL, NULL, 'accreditation', '2023-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 2, NULL),
('iqac_nirfrank_2016', 'nirf', NULL, '2016', 'https://vignan.ac.in/naac/NIRF%20India%20Ranking%202016.pdf', NULL, NULL, 'rank', '2016-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_nirfrank_2017', 'nirf', NULL, '2017', 'https://vignan.ac.in/naac/NIRF%20India%20Ranking%202017.pdf', NULL, NULL, 'rank', '2017-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_nirfrank_2018', 'nirf', NULL, '2018', 'https://vignan.ac.in/naac/NIRF%20India%20Ranking%202018.pdf', NULL, NULL, 'rank', '2018-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_nirfrank_2019', 'nirf', NULL, '2019', 'https://vignan.ac.in/naac/NIRF%20India%20Ranking%202019.pdf', NULL, NULL, 'rank', '2019-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_nirfrank_2020_el', 'nirf', NULL, '2020(Engineering Level)', 'https://vignan.ac.in/nirf/NIRF-20%20IR-E-U-0043%20Engineering.jpeg', NULL, NULL, 'rank', '2020-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_nirfrank_2020_ul', 'nirf', NULL, '2020(University Level)', 'https://vignan.ac.in/nirf/NIRF-20%20IR-O-U-0043%20University.jpg', NULL, NULL, 'rank', '2020-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_nirfrank_2021_el', 'nirf', NULL, '2021(Engineering Level)', 'https://vignan.ac.in/nirf/NIRF-21%20IR-E-U-0043%20-%20Engineering.jpeg', NULL, NULL, 'rank', '2021-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_nirfrank_2021_ul', 'nirf', NULL, '2021(University Level)', 'https://vignan.ac.in/nirf/NIRF-21%20IR-O-U-0043%20-%20University.jpg', NULL, NULL, 'rank', '2021-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_nirfrank_2022_el', 'nirf', NULL, '2022(Engineering Level)', 'https://vignan.ac.in/nirf/NIRF%20Certificate%20Engineering%20copy.jpg', NULL, NULL, 'rank', '2022-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_nirfrank_2022_ul', 'nirf', NULL, '2022(University Level)', 'https://vignan.ac.in/nirf/NIRF%20Certificate%20University.jpg', NULL, NULL, 'rank', '2022-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_nirfrank_2023_el', 'nirf', NULL, '2023(Engineering Level)', 'https://vignan.ac.in/nirf/NIRF%202023%20(Engineering%20Level).pdf', NULL, NULL, 'rank', '2023-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_nirfrank_2023_ul', 'nirf', NULL, '2023(University Level)', 'https://vignan.ac.in/nirf/NIRF%202023%20(University%20Level).pdf', NULL, NULL, 'rank', '2023-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_physicalfitness_2017-18', '', '', 'View', 'https://vignan.ac.in/naac/Physical%20Fitness%20Record%202018.pdf', NULL, 'Physical Fitness Record', NULL, '2015-01-01 00:00:00', '2024-06-11 12:01:22', '2015-16 to 2017-18', 2, NULL),
('iqac_physicalfitness_2018-19', '', '', 'View', 'https://vignan.ac.in/naac/Physical%20Fitness%20Record%202019.pdf', NULL, 'Physical Fitness Record', NULL, '2018-01-01 00:00:00', '2024-06-11 12:01:22', '2018-19', 2, NULL),
('iqac_physicalfitness_2019-20', '', '', 'View', 'https://vignan.ac.in/naac/Physical%20Fitness%20Record%202020.pdf', NULL, 'Physical Fitness Record', NULL, '2019-01-01 00:00:00', '2024-06-11 12:01:22', '2019-20', 2, NULL),
('iqac_physicalfitness_2020-21', '', '', 'View', 'https://vignan.ac.in/naac/Physical%20Fitness%20Record%202021.pdf', NULL, 'Physical Fitness Record', NULL, '2020-01-01 00:00:00', '2024-06-11 12:01:22', '2020-21', 2, NULL),
('iqac_policieshandbook_card1', 'Policies & Handbook', 'It covers academic activities, student activities, content developed by faculties, department level details, physical education & sport achievements, university budget etc', 'Policies & Handbook', 'policies.php', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 1, NULL),
('iqac_policieshandbook_card2', 'Stakeholder Feedback', 'Stakeholder Feedback of provides invaluable insights into satisfaction levels, areas of improvement, and alignment with organisational goals. It fosters transparency, collaboration, and continuous enhancement of the educational experience for all involved stakeholders.', 'Give Feedback', '', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 2, NULL),
('iqac_policieshandbook_card3', 'Institutional Distinctiveness', '\"Institutional Distinctiveness\" embodies the unique characteristics, strengths, and values that differentiate one educational institution from another. It encapsulates the essence of the institution\'s identity, culture, and contributions to the academic community and society at large.', 'Download', '', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_qsi-gauge_2023', 'QS I-GAUGE', NULL, 'QS I-GAUGE 2023', 'https://vignan.ac.in/pdf/QS%20I-GAUGE%20University%20Certificate_Vignan%20University.pdf', NULL, NULL, 'accreditation', '2023-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_ranking_card1', '76', 'National Institutional Ranking Framework is a ranking methodology adopted by the Ministry of Education, Gov. of India', 'Read More', NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'NIRF', 1, NULL),
('iqac_ranking_card10', '47', 'World\'s Universities with Real Impact', 'Read More', NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'Careers 360', 10, NULL),
('iqac_ranking_card11', '47', 'World\'s Universities with Real Impact', 'Read More', NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'Times Engineering', 11, NULL),
('iqac_ranking_card12', '47', 'World\'s Universities with Real Impact', 'Read More', NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'i3RC Times', 12, NULL),
('iqac_ranking_card2', '47', 'ATAL Ranking of Institutions on Innovation Achievements', 'Read More', NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'ARIIA', 2, NULL),
('iqac_ranking_card3', '13', 'International Accreditation Organisation (IAO), certified Vignan', 'Read More', NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'UI Green Metric', 3, NULL),
('iqac_ranking_card4', '21', 'National Board of Accreditation (NBA) approved accreditation status to multiple programs at Vignan', 'Read More', NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'R World Ranking', 4, NULL),
('iqac_ranking_card5', '57', 'World\'s Universities with Real Impact', 'Read More', NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'WURI Ranking', 5, NULL),
('iqac_ranking_card6', '47', 'World\'s Universities with Real Impact', 'Read More', NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'Education World', 6, NULL),
('iqac_ranking_card7', '47', 'World\'s Universities with Real Impact', 'Read More', NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'India Today', 7, NULL),
('iqac_ranking_card8', '47', 'World\'s Universities with Real Impact', 'Read More', NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'HANSA', 8, NULL),
('iqac_ranking_card9', '47', 'Times Higher Education(THE) World Ranking', 'Read More', NULL, NULL, NULL, 'rank', '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'THE', 9, NULL);
INSERT INTO `cards` (`Id`, `title`, `descr`, `btn_nm`, `btn_hlink`, `img`, `caption`, `cardtype`, `date`, `todate`, `subtitle`, `sequence`, `dept`) VALUES
('iqac_rworldranking_2021_1', 'rworldranking', NULL, 'Green Institutional Rankings 2021', 'https://vignan.ac.in/naac/SII_Green_Institutionsal_R_World_Ranking_13.png', NULL, NULL, 'rank', '2021-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_rworldranking_2021_2', 'rworldranking', NULL, 'Global Impact 2021', 'https://vignan.ac.in/naac/Global%20Impact%20Rankings.pdf%202022.pdf', NULL, NULL, 'rank', '2021-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_rworldranking_2021_3', 'rworldranking', NULL, 'MHW 2021', 'https://vignan.ac.in/naac/MHW%20Ranking%202021%20Reimagine.pdf', NULL, NULL, 'rank', '2021-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_rworldranking_2021_4', 'rworldranking', NULL, 'OBE 2021', 'https://vignan.ac.in/naac/OBE%20Rankings%202021%20-%20Result%20Published.pdf', NULL, NULL, 'rank', '2021-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_rworldranking_2022_1', 'rworldranking', NULL, 'Stakeholders Sentiment Survey 2022', 'https://vignan.ac.in/naac/Stakeholders%20Sentiment%20Survey.jpg', NULL, NULL, 'rank', '2022-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_rworldranking_2022_2', 'rworldranking', NULL, 'OBE 2022', 'https://vignan.ac.in/naac/OBE%20Rankings%202022%20-%20Result%20Published.jpg', NULL, NULL, 'rank', '2022-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_rworldranking_2023_1', 'rworldranking', NULL, 'Research Excellence Ranking 2023', 'https://vignan.ac.in/naac/research_rank_2023.png', NULL, NULL, 'rank', '2023-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_rworldranking_2023_2', 'rworldranking', NULL, 'Employability and startup Ecosystem 2023', 'https://vignan.ac.in/naac/employ_rank_2023.png', NULL, NULL, 'rank', '2023-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_rworldranking_2023_3', 'rworldranking', NULL, 'India Academia Ranking 2023', 'https://vignan.ac.in/naac/academia_rank_2023.png', NULL, NULL, 'rank', '2023-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 4, NULL),
('iqac_stakeholderfeedback_1', '', '', 'Feedback on Academic Facilities', 'https://vignan.ac.in/acf_feedback/', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_stakeholderfeedback_10', '', '', 'Stakeholder Feedback on PO\'s and PSO\'s', 'https://vignan.ac.in/attain_feedback/', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_stakeholderfeedback_11', '', '', 'Feedback on CRT Programme', 'https://vignan.ac.in/crt_feedback/', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_stakeholderfeedback_12', '', '', 'Feedback on Electrical, IT Infrastructure& Furniture Maintenance', 'https://vignan.ac.in/ief_feedback/', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_stakeholderfeedback_13', '', '', 'Feedback on Pandemic Precautionary Measures', 'https://vignan.ac.in/covid_feedback/', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_stakeholderfeedback_14', '', '', 'Student Satisfaction Survey Brochure', 'https://vignan.ac.in/iqac/Qualityinitiatives%20Brochure.jpg', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_stakeholderfeedback_15', '', '', 'Stakeholder Feedback on Curriculum', 'https://vignan.ac.in/stake/', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_stakeholderfeedback_16', '', '', ' The Feedback facility of students and faculty is avaliable in AICTE Web-portal (http://www.aicte-in', 'http://www.aicte-india.org/feedback/', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_stakeholderfeedback_2', '', '', 'Feedback on Library', 'https://vignan.ac.in/lib_feedback/', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_stakeholderfeedback_3', '', '', 'Feedback on Transportation Facility', 'https://vignan.ac.in/transport_feedback/', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_stakeholderfeedback_4', '', '', 'Feedback on Sports Facility', 'https://vignan.ac.in/sports_feedback/', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_stakeholderfeedback_5', '', '', 'Feedback on Sports Facility’s Maintenance', 'https://vignan.ac.in/sm_feedback/', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_stakeholderfeedback_6', '', '', 'Feedback on Mess Facility', 'https://vignan.ac.in/mess_feedback/', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_stakeholderfeedback_7', '', '', 'Feedback on Campus Maintenance', 'https://vignan.ac.in/lc_feedback/', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_stakeholderfeedback_8', '', '', 'Feedback on Hostel', 'https://vignan.ac.in/hostel_feedback/', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_stakeholderfeedback_9', '', '', 'Student Satisfaction Survey Questionnaire', 'https://vignan.ac.in/iqac/SSS-Questinnaire_Students.pdf', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_statutory_aicte_2019-20', '', '', 'View', 'https://vignan.ac.in/naac/EOA_Report_2019-20.pdf', '', 'Intake  Approval Letter', 'statutory', '2019-01-01 00:00:00', '2024-06-11 12:01:22', '2019-2020', 1, NULL),
('iqac_statutory_aicte_2020-21', '', '', 'View', 'https://vignan.ac.in/naac/EOA_Report_2020-21.pdf', '', 'Intake  Approval Letter', 'statutory', '2020-01-01 00:00:00', '2024-06-11 12:01:22', '2020-2021', 1, NULL),
('iqac_statutory_aicte_2021-22', '', '', 'View', 'https://vignan.ac.in/naac/EOA_Report_2021-22.pdf', '', 'Intake  Approval Letter', 'statutory', '2021-01-01 00:00:00', '2024-06-11 12:01:22', '2021-2022', 1, NULL),
('iqac_statutory_aicte_2022-23', '', '', 'View', 'https://vignan.ac.in/naac/EOA_Report_2022-23.pdf', '', 'Intake  Approval Letter', 'statutory', '2022-01-01 00:00:00', '2024-06-11 12:01:22', '2022-2023', 1, NULL),
('iqac_statutory_aicte_2023-24', '', '', 'View', 'https://vignan.ac.in/naac/EOA-Report-2023-24.pdf', '', 'Intake  Approval Letter', 'statutory', '2023-01-01 00:00:00', '2024-06-11 12:01:22', '2023-2024', 1, NULL),
('iqac_statutory_card1', 'AICTE', 'The All India Council for Technical Education (AICTE), A Statutory body under Ministry of Education, Govt. of India, Approval Process 2023-24', 'Read More', NULL, NULL, NULL, 'statutory', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 1, NULL),
('iqac_statutory_card2', 'PCI', 'Pharmacy Council of India, A Statutory body under Ministry of Health & Family Welfare Govt. of IndiaApproval Letter 2023-24', 'Read More', NULL, NULL, NULL, 'statutory', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 2, NULL),
('iqac_statutory_card3', 'BCI', 'Bar Council of India,  A Statutory Body Constituted under the Advocates Act, 1961, Interim Consent letter of Recognition 2021-22', 'Read More', NULL, NULL, NULL, 'statutory', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 3, NULL),
('iqac_statutory_card4', 'UGC Approvals', 'UNIVERSITY GRANTS COMMISSION Approval for starting new courses ', 'Read More', NULL, NULL, NULL, 'statutory', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 4, NULL),
('iqac_statutory_pci_2019-20', '', '', 'View', 'https://vignan.ac.in/naac/PCI%20Approval%20Letter%202019-20.pdf', '', 'Intake  Approval Letter', 'statutory', '2019-01-01 00:00:00', '2024-06-11 12:01:22', '2019-2020', 2, NULL),
('iqac_statutory_pci_2020-21', '', '', 'View', 'https://vignan.ac.in/naac/PCI%20Approval%20Letter%202020-21.pdf', '', 'Intake  Approval Letter', 'statutory', '2020-01-01 00:00:00', '2024-06-11 12:01:22', '2020-2021', 2, NULL),
('iqac_statutory_pci_2021-22', '', '', 'View', 'https://vignan.ac.in/naac/PCI%20Approval%20Letter%202021-22.pdf', '', 'Intake  Approval Letter', 'statutory', '2021-01-01 00:00:00', '2024-06-11 12:01:22', '2021-2022', 2, NULL),
('iqac_statutory_pci_2022-23', '', '', 'View', 'https://vignan.ac.in/naac/PCI%20Approval%20Letter%202022-23.pdf', 'assets/images/iqac_pci.webp', 'Intake  Approval Letter', 'statutory', '2022-01-01 00:00:00', '2024-06-11 12:01:22', '2022-2023', 2, NULL),
('iqac_statutory_ugc_1', '', '', 'UGC 12B', 'https://vignan.ac.in/naac/UGC%2012B.pdf', '', '', '', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 4, NULL),
('iqac_statutory_ugc_2017', '', '', 'UGC Approval 2017', 'https://vignan.ac.in/naac/UGC%20Approval%202017.pdf', '', '', '', '2017-01-01 00:00:00', '2024-06-11 12:01:22', '', 4, NULL),
('iqac_statutory_ugc_2019', '', '', 'UGC Approval 2019', 'https://vignan.ac.in/naac/UGC%20Approval%202019.pdf', '', '', '', '2019-01-01 00:00:00', '2024-06-11 12:01:22', '', 4, NULL),
('iqac_statutory_ugc_2020', '', '', 'Age Appropriate Fitness Protocols', 'https://vignan.ac.in/naac/FIT%20INDIA-16-9-2020.pdf', '', '', '', '2020-01-01 00:00:00', '2024-06-11 12:01:22', '', 4, NULL),
('iqac_statutory_ugc_5', '', '', 'Mandatory Disclosure', 'https://vignan.ac.in/naac/Mandatory%20Disclosure.pdf', '', '', '', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 4, NULL),
('iqac_the_2022', 'the', NULL, 'the 2022', 'https://vignan.ac.in/iqac/THE%20Indian%20University%20(SDG)%20Ranks%202022.pdf', NULL, NULL, 'rank', '2022-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 9, NULL),
('iqac_timesengineering_2022', 'TimesEngineering', NULL, 'Times Engineering 2022', 'https://vignan.ac.in/iqac/Times%20Engineering%202022%20Ranks.pdf', NULL, NULL, 'rank', '2022-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 11, NULL),
('iqac_uigreenmetric_2022', 'uigreenmetric', NULL, 'UI Green Metric Ranking 2022', 'https://vignan.ac.in/naac/UI%20World%20Ranking%202022%20Certificates.pdf', NULL, NULL, 'rank', '2022-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_uigreenmetric_2023', 'uigreenmetric', NULL, 'UI Green Metric Ranking 2023', 'https://vignan.ac.in/naac/UI%20World%20Ranking%202023%20Certificates.pdf', NULL, NULL, 'rank', '2023-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 3, NULL),
('iqac_wuriranking_2024', 'wuriranking', NULL, 'WURI Ranking 2024', 'https://vignan.ac.in/naac/WURI2024.pdf', NULL, NULL, 'rank', '2024-01-01 00:00:00', '2024-06-11 12:01:22', NULL, 5, NULL),
('lib_copyrights&guidelines', 'Copyright & Guidelines  on usage', 'Vignan’s University provides access to several online journals (IEEE/IET, ASCE, ASME, EBSCO) available to students and faculty through IP-based access without a password. The usage of these resources is restricted to authorized users, primarily students and faculty, for personal, educational, and research purposes only. Users must comply with the following guidelines:<br><br>\n\n1. **Prohibited Actions:**<br>\n   <span style=\"margin-left: 1em\" /> - Systematic downloading, retention, and printing of large quantities of material.<br>\n   <span style=\"margin-left: 1em\" /> - Electronic distribution of content outside the institution or to large groups.<br>\n   <span style=\"margin-left: 1em\" />- Commercial use of resources.<br><br>\n\n2. **Permitted Actions:**<br>\n   <span style=\"margin-left: 1em\" /> - Viewing, downloading, copying, printing, and saving individual articles for personal use.<br>\n   <span style=\"margin-left: 1em\" /> - Sharing articles with other authorized users within the institution.<br>\n   <span style=\"margin-left: 1em\" /> - Posting URLs to the publisher\'s version of articles on class websites (access restricted to authorized users).<br><br>\n\nViolations of these terms can result in suspended access for the entire institution, not just the individual violator. Users must ensure compliance with license agreements to maintain access to these valuable resources.<br><br>', 'View Document', 'https://vignan.ac.in/pdf/License_Agreements_and_Guidelines_for_Fair_Use-1.pdf', NULL, NULL, NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('lib_sec5_books1', '341- No of Volumes', 'COMPUTER SCIENCE & ENGINEERING', 'Show All Books', NULL, NULL, NULL, 'lib_resources_books', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 0, NULL),
('lib_sec5_books10', '158-No of Volumes', 'MBA', NULL, NULL, NULL, NULL, 'lib_resources_books', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 9, NULL),
('lib_sec5_books11', '139-No of Volumes', 'BASIC SCIENCES', NULL, NULL, NULL, NULL, 'lib_resources_books', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 10, NULL),
('lib_sec5_books12', '99-No of Volumes', 'TRAINING & PLACEMENT CELL', NULL, NULL, NULL, NULL, 'lib_resources_books', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 11, NULL),
('lib_sec5_books13', '600-No of Volumes', 'BOYS HOSTEL', NULL, NULL, NULL, NULL, 'lib_resources_books', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 12, NULL),
('lib_sec5_books14', '450-No of Volumes', 'GIRLS HOSTEL', NULL, NULL, NULL, NULL, 'lib_resources_books', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 13, NULL),
('lib_sec5_books2', '397-No of Volumes', 'INFORMATION TECHNOLOGY', 'Show All Books', NULL, NULL, NULL, 'lib_resources_books', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 1, NULL),
('lib_sec5_books3', '383-No of Volumes', 'ECE', 'Show All Books', NULL, NULL, NULL, 'lib_resources_books', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 2, NULL),
('lib_sec5_books4', '411- No of Volumes', 'EEE', 'Show All Books', NULL, NULL, NULL, 'lib_resources_books', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 3, NULL),
('lib_sec5_books5', '153- No of Volumes', 'CHEMICAL ENGINEERING', 'Show All Books', NULL, NULL, NULL, 'lib_resources_books', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 4, NULL),
('lib_sec5_books6', '521-No of Volumes', 'MECHANICAL ENGINEERING', 'Show All Books', NULL, NULL, NULL, 'lib_resources_books', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 5, NULL),
('lib_sec5_books7', '161-No of Volumes', 'CIVIL ENGINEERING', 'Show All Books', NULL, NULL, NULL, 'lib_resources_books', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 6, NULL),
('lib_sec5_books8', '119- No of Volumes', 'APPLIED ENGINEERING', 'Show All Books', NULL, NULL, NULL, 'lib_resources_books', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 7, NULL),
('lib_sec5_books9', '202-No of Volumes', 'BIOTECHNOLOGY', NULL, NULL, NULL, NULL, 'lib_resources_books', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 8, NULL),
('lib_sec5_ebooks1', 'EBC Reader', 'EBC Reader', 'website', 'https://www.ebcreader.com/', NULL, NULL, 'lib_resources_ebooks', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 0, NULL),
('lib_sec5_ebooks2', 'Engineering Express (130 e-Books)', 'McGraw Hill Education (Perpetual)', 'website', 'https://resolver.vitalsource.com', NULL, NULL, 'lib_resources_ebooks', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 1, NULL),
('lib_sec5_ebooks3', 'Engineering (102 e-Books)', 'Pearson Education(Perpetual)', 'website', 'https://ebookcentral.proquest.com/lib/vignanuniversity/home.action', NULL, NULL, 'lib_resources_ebooks', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 2, NULL),
('lib_sec5_ebooks4', 'Engineering, Humanities, Management (6000+ eBooks )', 'EBSCO eBook Engineering Core Collection (Annual Subscription)', 'website', 'https://search.ebscohost.com/', NULL, NULL, 'lib_resources_ebooks', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 3, NULL),
('lib_sec5_ebooks5', 'Engineering, Humanities, Management & Literature (2,00,000+ eBooks )', 'World Library', 'website', 'https://database.worldlibrary.org/', NULL, NULL, 'lib_resources_ebooks', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 4, NULL),
('lib_sec5_ebooks6', 'Engineering Express (1800+ e-Books)', 'Springer : Electrical and Electronics, Computer Science,Maths,physics.Chemistry & BiotechnologySpringerlink (Annual Subscription)', 'website', 'https://link.springer.com/search?facet-content-type=%22Book%22&showAll=false', NULL, NULL, 'lib_resources_ebooks', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 5, NULL),
('lib_sec5_econtent1', 'Learning Management System', NULL, 'View Details', 'https://vumoodle.in/', NULL, NULL, 'lib_resources_econtent', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 0, NULL),
('lib_sec5_econtent2', 'NPTEL', NULL, 'View Details', 'https://nptel.ac.in/', NULL, NULL, 'lib_resources_econtent', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 1, NULL),
('lib_sec5_econtent3', 'IUCEE webinars', NULL, 'View Details', 'https://iucee.com/webinars/', NULL, NULL, 'lib_resources_econtent', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 2, NULL),
('lib_sec5_econtent4', 'Classel.net', NULL, 'View Details', 'https://www.classle.net/', NULL, NULL, 'lib_resources_econtent', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 3, NULL),
('lib_sec5_ejournals1', '283 Journals', 'IEL Growth Plan (Multi User)-Computer Engg + Computer Science + Electrical & Electronics Engg + Telecommunication & related displines', 'website', 'http://www.ieee.org/ieeexplore/', NULL, NULL, 'lib_resources_ejournals', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 0, NULL),
('lib_sec5_ejournals10', 'Thesis', 'Soudhganga', 'website', 'https://shodhganga.inflibnet.ac.in/handle/10603/230424', NULL, NULL, 'lib_resources_ejournals', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 9, NULL),
('lib_sec5_ejournals11', 'Thesis', 'Soudhgangotri', 'website', 'https://shodhgangotri.inflibnet.ac.in/', NULL, NULL, 'lib_resources_ejournals', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 10, NULL),
('lib_sec5_ejournals12', 'Journals', 'E-Soudh Sindhu', 'website', 'https://ess.inflibnet.ac.in/ndl.php', NULL, NULL, 'lib_resources_ejournals', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 11, NULL),
('lib_sec5_ejournals13\r\n\r\n', 'Online Resources link', 'Institutional Digital Repository of VFSTR Library', 'website', 'https://192.168.10.34:8080/jspui/', NULL, NULL, 'lib_resources_ejournals', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 12, NULL),
('lib_sec5_ejournals14', 'Articles', 'E-Prints', 'website', 'https://ir.vignan.ac.in/', NULL, NULL, 'lib_resources_ejournals', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 13, NULL),
('lib_sec5_ejournals2', '1400 Journals', 'Springer : Electrical and Electronics, Computer Science,Maths,physics.Chemistry & Biotechnology', 'website', 'http://link.springer.com', NULL, NULL, 'lib_resources_ejournals', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 1, NULL),
('lib_sec5_ejournals3', '25 Journals', 'ASME :(American Society of Mechanical Engineers): Mechanical Engineering Journals', 'website', 'http://asmedl.org', NULL, NULL, 'lib_resources_ejournals', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 2, NULL),
('lib_sec5_ejournals4', '33 Journals', 'ASCE : (American Society of Civil Engineers): Civil Engineering Journals', 'website', 'http://ascelibrary.org', NULL, NULL, 'lib_resources_ejournals', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 3, NULL),
('lib_sec5_ejournals5', '1096 = Total number of journals & magazines in full text', 'EBSCO -Business Sournce Elite e journal (Management)', 'website', 'Http://search.ebscohost.com', NULL, NULL, 'lib_resources_ejournals', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 4, NULL),
('lib_sec5_ejournals6', 'Science & Humanities e-journals', 'JSTOR', 'website', 'http://www.jstor.org/', NULL, NULL, 'lib_resources_ejournals', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 5, NULL),
('lib_sec5_ejournals7', 'free, full text, quality controlled scientific and scholarly journals', 'DOAJ e journals', 'website', 'https://doaj.org', NULL, NULL, 'lib_resources_ejournals', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 6, NULL),
('lib_sec5_ejournals8\r\n', 'Remote Access', 'Infeed', 'website', 'https://idp.vignan.ac.in/', NULL, NULL, 'lib_resources_ejournals', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 7, NULL),
('lib_sec5_ejournals9', 'Books & Journals', 'DELNET', 'website', 'http://164.100.247.26/', NULL, NULL, 'lib_resources_ejournals', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 8, NULL),
('lib_sec5_others1', 'Teachpitch', NULL, 'View Details', 'https://teachpitch.com/', NULL, NULL, 'lib_resources_others', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('lib_sec5_others2', 'Stanford University', NULL, 'View Details', 'https://scpd.stanford.edu/', NULL, NULL, 'lib_resources_others', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('lib_sec5_others3', 'University of Phoenix', NULL, 'View Details', 'https://www.phoenix.edu/', NULL, NULL, 'lib_resources_others', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('lib_sec5_others4', 'Johns Hopkins University', NULL, 'View Details', 'https://www.coursera.org/', NULL, NULL, 'lib_resources_others', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('lib_sec5_others5', 'MOOC', NULL, 'View Details', 'http://mooc.org/', NULL, NULL, 'lib_resources_others', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('lib_sec5_others6', 'NAI', NULL, 'View Details', 'https://vignan.ac.in/pdf/NAI%20resources.pdf', NULL, NULL, 'lib_resources_others', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('naacapc1_card1', 'Circular Aspects', '', 'View Details', 'naacCircularAspects.php', '', '', 'naacapc1', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 0, NULL),
('naacapc1_card2', 'Extended Profile', '', 'View Details', 'naacExtendedProfile.php', '', '', 'naacapc1', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 0, NULL),
('naacapc1_card3', 'Teaching & Evaluation', '', 'View Details', 'naacTeachingAndEvaluation.php', '', '', 'naacapc1', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 0, NULL),
('naacapc1_card4', 'Research, Innovation & Extensions', '', 'View Details', 'naacRIE.php', '', '', 'naacapc1', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 0, NULL),
('naacapc1_card5', 'Infrastructure & Learning Resources', '', 'View Details', 'naacInfraAndLearning.php', '', '', 'naacapc1', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 0, NULL),
('naacapc1_card6', 'Student Support & Progression', '', 'View Details', 'naacStudentSupportsAndProgression.php', '', '', 'naacapc1', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 0, NULL),
('naacapc1_card7', 'Governance, Leadership & Management', '', 'View Details', 'naacGovLeaderMang.php', '', '', 'naacapc1', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 0, NULL),
('naacapc1_card8', 'Institutional Values & Best Practices', '', 'View Details', 'naacInstitutionalValuesAndBestPractices.php', '', '', 'naacapc1', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 0, NULL),
('naacapc2_card1', 'Circular Aspects', '', 'View Details', 'naacm.php', '', '', 'naacapc2', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 0, NULL),
('naacapc2_card2', 'Extended Profile', '', 'View Details', '#', '', '', 'naacapc2', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 0, NULL),
('naacapc2_card3', 'Teaching & Evaluation', '', 'View Details', '#', '', '', 'naacapc2', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 0, NULL),
('naacapc2_card4', 'Research, Innovation & Extensions', '', 'View Details', '#', '', '', 'naacapc2', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 0, NULL),
('naacapc2_card5', 'Infrastructure & Learning Resources', '', 'View Details', '#', '', '', 'naacapc2', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 0, NULL),
('naacapc2_card6', 'Student Support & Progression', '', 'View Details', '#', '', '', 'naacapc2', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 0, NULL),
('naacapc2_card7', 'Governance, Leadership & Management', '', 'View Details', '#', '', '', 'naacapc2', '1994-01-10 00:00:00', '2024-06-11 12:01:22', '', 0, NULL),
('naacapc2_card8', 'Institutional Values & Best Practices', '', 'View Details', '#', '', '', 'naacapc2', '1994-01-01 00:00:00', '2024-06-11 12:01:22', '', 0, NULL),
('nad_sec1_card1', '1.Login to DigiLocker', 'Student with DigiLocker Account can create APAAR/ABC ID', NULL, NULL, 'assets/images/nad_sec1_card1.svg', NULL, 'nad_sec4', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('nad_sec3_card1', NULL, 'Allows academic institutions to lodge and maintain the integrity of the credits', NULL, NULL, 'assets/images/nad_sec3_card1.svg', NULL, 'nad_sec3', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('nad_sec3_card2', NULL, 'Maintains the authenticity and confidentiality of student credits', NULL, NULL, 'assets/images/nad_sec3_card2.svg', NULL, 'nad_sec3', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('nad_sec3_card3', NULL, 'Enables easy credit transfer through digital mode', NULL, NULL, 'assets/images/nad_sec3_card3.svg', NULL, 'nad_sec3', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('nad_sec3_card4', NULL, 'Facilitates faster credit recognition', NULL, NULL, 'assets/images/nad_sec3_card4.svg', NULL, 'nad_sec3', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('nad_sec4_card1', '1.Login to DigiLocker', 'Student with DigiLocker Account can create APAAR/ABC ID', NULL, NULL, 'assets/images/nad_sec4_card1.svg', NULL, 'nad_sec4', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('nad_sec4_card2', '2.Search for Education', 'Education category shows Academic Bank of Credits service', NULL, NULL, 'assets/svgicons/search.svg', NULL, 'nad_sec4', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('nad_sec4_card3', '3.Create ID & View Credits', 'Select your University and click on Generate APAAR/ABC ID. Students can check accumulated credits by logging into abc website', NULL, NULL, 'assets/images/nad_sec4_card3.svg', NULL, 'nad_sec4', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('ncc_act_ani_cd1', 'Kargil Divas ', '\"Kargil Vijay Diwas is a special occasion will be organised at the \'Kargil War Memorial\' in Dras on the Kargil Vijay DiwasThe objective of these celebrations is to evoke feeling of nationalism and patriotism through nationwide campaigns especially amongst youth and to pay homage to the valiant soldiers. Our University 29 NCC students was successfully participated on that special occation', NULL, NULL, 'assets/images/ncc_img10.webp', NULL, NULL, '2019-07-25 00:00:00', NULL, NULL, NULL, NULL),
('ncc_act_ani_cd10', 'Krishna Purshkara', '\"Kargil Vijay Diwas is a special occasion will be organised at the \'Kargil War Memorial\' in Dras on the Kargil Vijay DiwasThe objective of these celebrations is to evoke feeling of nationalism and patriotism through nationwide campaigns especially amongst youth and to pay homage to the valiant soldiers. Our University 29 NCC students was successfully participated on that special occation', NULL, NULL, 'assets/images/ncc_img19.webp', NULL, NULL, '2016-08-11 00:00:00', '2016-08-23 00:00:00', NULL, NULL, NULL),
('ncc_act_ani_cd2', 'World Water Day ', '\"Kargil Vijay Diwas is a special occasion will be organised at the \'Kargil War Memorial\' in Dras on the Kargil Vijay DiwasThe objective of these celebrations is to evoke feeling of nationalism and patriotism through nationwide campaigns especially amongst youth and to pay homage to the valiant soldiers. Our University 29 NCC students was successfully participated on that special occation', NULL, NULL, 'assets/images/ncc_img11.webp', NULL, NULL, '2019-05-21 00:00:00', '2019-05-30 00:00:00', NULL, NULL, NULL),
('ncc_act_ani_cd3', 'VFSTR Hosted for ATC Camp during Summer', '\"Kargil Vijay Diwas is a special occasion will be organised at the \'Kargil War Memorial\' in Dras on the Kargil Vijay DiwasThe objective of these celebrations is to evoke feeling of nationalism and patriotism through nationwide campaigns especially amongst youth and to pay homage to the valiant soldiers. Our University 29 NCC students was successfully participated on that special occation', NULL, NULL, 'assets/images/ncc_img12.webp', NULL, NULL, '2019-05-21 00:00:00', '2019-05-30 00:00:00', NULL, NULL, NULL),
('ncc_act_ani_cd4', 'VFSTR Hosted for ATC Camp during Summer', '\"Kargil Vijay Diwas is a special occasion will be organised at the \'Kargil War Memorial\' in Dras on the Kargil Vijay DiwasThe objective of these celebrations is to evoke feeling of nationalism and patriotism through nationwide campaigns especially amongst youth and to pay homage to the valiant soldiers. Our University 29 NCC students was successfully participated on that special occation', NULL, NULL, 'assets/images/ncc_img13.webp', NULL, NULL, '2019-05-21 00:00:00', '2019-05-30 00:00:00', NULL, NULL, NULL),
('ncc_act_ani_cd5', 'VFSTR Hosted for ATC Camp during Summer', '\"Kargil Vijay Diwas is a special occasion will be organised at the \'Kargil War Memorial\' in Dras on the Kargil Vijay DiwasThe objective of these celebrations is to evoke feeling of nationalism and patriotism through nationwide campaigns especially amongst youth and to pay homage to the valiant soldiers. Our University 29 NCC students was successfully participated on that special occation', NULL, NULL, 'assets/images/ncc_img14.webp', NULL, NULL, '2019-05-21 00:00:00', '2019-05-30 00:00:00', NULL, NULL, NULL),
('ncc_act_ani_cd6', 'VFSTR Hosted for ATC Camp during Summer', '\"Kargil Vijay Diwas is a special occasion will be organised at the \'Kargil War Memorial\' in Dras on the Kargil Vijay DiwasThe objective of these celebrations is to evoke feeling of nationalism and patriotism through nationwide campaigns especially amongst youth and to pay homage to the valiant soldiers. Our University 29 NCC students was successfully participated on that special occation', NULL, NULL, 'assets/images/ncc_img15.webp', NULL, NULL, '2019-05-21 00:00:00', '2019-05-30 00:00:00', NULL, NULL, NULL),
('ncc_act_ani_cd7', 'VFSTR Hosted for ATC Camp during Summer', '\"Kargil Vijay Diwas is a special occasion will be organised at the \'Kargil War Memorial\' in Dras on the Kargil Vijay DiwasThe objective of these celebrations is to evoke feeling of nationalism and patriotism through nationwide campaigns especially amongst youth and to pay homage to the valiant soldiers. Our University 29 NCC students was successfully participated on that special occation', NULL, NULL, 'assets/images/ncc_img16.webp', NULL, NULL, '2019-05-21 00:00:00', '2019-05-30 00:00:00', NULL, NULL, NULL),
('ncc_act_ani_cd8', 'VFSTR Hosted for ATC Camp during Summer', '\"Kargil Vijay Diwas is a special occasion will be organised at the \'Kargil War Memorial\' in Dras on the Kargil Vijay DiwasThe objective of these celebrations is to evoke feeling of nationalism and patriotism through nationwide campaigns especially amongst youth and to pay homage to the valiant soldiers. Our University 29 NCC students was successfully participated on that special occation', NULL, NULL, 'assets/images/ncc_img17.webp', NULL, NULL, '2018-02-14 00:00:00', NULL, NULL, NULL, NULL),
('ncc_act_ani_cd9', 'Our NCC Students Served as volunteers at “Quary”', '\"Kargil Vijay Diwas is a special occasion will be organised at the \'Kargil War Memorial\' in Dras on the Kargil Vijay DiwasThe objective of these celebrations is to evoke feeling of nationalism and patriotism through nationwide campaigns especially amongst youth and to pay homage to the valiant soldiers. Our University 29 NCC students was successfully participated on that special occation', NULL, NULL, 'assets/images/ncc_img18.webp', NULL, NULL, '2019-05-21 00:00:00', '2019-05-30 00:00:00', NULL, NULL, NULL),
('ncc_act_cd1', 'NCC Activities', 'Participating in NCC activities nurtures teamwork and a sense of responsibility, equipping young individuals for civic duties and national service.', NULL, NULL, 'assets/images/ncc_img10.webp', 'Kargil Divas', NULL, '2019-07-25 00:00:00', NULL, NULL, NULL, NULL),
('ncc_act_cd10', NULL, NULL, NULL, NULL, 'assets/images/ncc_img19.webp', 'Krishna Purshkara', NULL, '2016-08-11 00:00:00', '2016-08-23 00:00:00', NULL, NULL, NULL),
('ncc_act_cd2', NULL, NULL, NULL, NULL, 'assets/images/ncc_img11.webp', 'World Water Day', NULL, '2019-03-22 00:00:00', NULL, NULL, NULL, NULL),
('ncc_act_cd3', NULL, NULL, NULL, NULL, 'assets/images/ncc_img12.webp', 'VFSTR Hosted for ATC Camp during Summer', NULL, '2019-05-21 00:00:00', '2019-05-30 00:00:00', NULL, NULL, NULL),
('ncc_act_cd4', NULL, NULL, NULL, NULL, 'assets/images/ncc_img13.webp', 'VFSTR Hosted for ATC Camp during Summer', NULL, '2019-05-21 00:00:00', '2019-05-30 00:00:00', NULL, NULL, NULL),
('ncc_act_cd5', NULL, NULL, NULL, NULL, 'assets/images/ncc_img14.webp', 'VFSTR Hosted for ATC Camp during Summer', NULL, '2019-05-21 00:00:00', '2019-05-30 00:00:00', NULL, NULL, NULL),
('ncc_act_cd6', NULL, NULL, NULL, NULL, 'assets/images/ncc_img15.webp', 'VFSTR Hosted for ATC Camp during Summer', NULL, '2019-05-21 00:00:00', '2019-05-30 00:00:00', NULL, NULL, NULL),
('ncc_act_cd7', NULL, NULL, NULL, NULL, 'assets/images/ncc_img16.webp', 'VFSTR Hosted for ATC Camp during Summer', NULL, '2019-05-21 00:00:00', '2019-05-30 00:00:00', NULL, NULL, NULL),
('ncc_act_cd8', NULL, NULL, NULL, NULL, 'assets/images/ncc_img17.webp', 'VFSTR Hosted for ATC Camp during Summer', NULL, '2019-05-21 00:00:00', '2019-05-30 00:00:00', NULL, NULL, NULL),
('ncc_act_cd9', NULL, NULL, NULL, NULL, 'assets/images/ncc_img18.webp', 'Our NCC Students Served as volunteers at “Quary”', NULL, '2018-02-14 00:00:00', NULL, NULL, NULL, NULL),
('ncc_high_ani_cd1', 'Vignan Student Selected for Republic Day Parade', '\"Kargil Vijay Diwas is a special occasion will be organised at the \'Kargil War Memorial\' in Dras on the Kargil Vijay DiwasThe objective of these celebrations is to evoke feeling of nationalism and patriotism through nationwide campaigns especially amongst youth and to pay homage to the valiant soldiers. Our University 29 NCC students was successfully participated on that special occation', NULL, NULL, 'assets/images/ncc_img20.webp', NULL, NULL, '2014-01-20 00:00:00', NULL, NULL, NULL, NULL),
('ncc_high_ani_cd2', 'VFSTR NCC Cadet SreeTeja Bharadwaj got selected for Indian armed forces ', '\"Kargil Vijay Diwas is a special occasion will be organised at the \'Kargil War Memorial\' in Dras on the Kargil Vijay DiwasThe objective of these celebrations is to evoke feeling of nationalism and patriotism through nationwide campaigns especially amongst youth and to pay homage to the valiant soldiers. Our University 29 NCC students was successfully participated on that special occation', NULL, NULL, 'assets/images/ncc_img21.webp', NULL, NULL, '2014-01-15 00:00:00', NULL, NULL, NULL, NULL),
('ncc_high_ani_cd3', 'Cadet Bommu Mahender Reddy got Cadet Welfare Society Scholarship', '\"Kargil Vijay Diwas is a special occasion will be organised at the \'Kargil War Memorial\' in Dras on the Kargil Vijay DiwasThe objective of these celebrations is to evoke feeling of nationalism and patriotism through nationwide campaigns especially amongst youth and to pay homage to the valiant soldiers. Our University 29 NCC students was successfully participated on that special occation', NULL, NULL, 'assets/images/ncc_img22.webp', NULL, NULL, '2024-01-13 00:00:00', NULL, NULL, NULL, NULL),
('ncc_high_ani_cd4', 'Cadet Bommu Mahender Reddy got Cadet Welfare Society Scholarship', '\"Kargil Vijay Diwas is a special occasion will be organised at the \'Kargil War Memorial\' in Dras on the Kargil Vijay DiwasThe objective of these celebrations is to evoke feeling of nationalism and patriotism through nationwide campaigns especially amongst youth and to pay homage to the valiant soldiers. Our University 29 NCC students was successfully participated on that special occation', NULL, NULL, 'assets/images/ncc_img22.webp', NULL, NULL, '2024-01-13 00:00:00', NULL, NULL, NULL, NULL),
('ncc_high_ani_cd5', 'Cadet Bommu Mahender Reddy got Cadet Welfare Society Scholarship', '\"Kargil Vijay Diwas is a special occasion will be organised at the \'Kargil War Memorial\' in Dras on the Kargil Vijay DiwasThe objective of these celebrations is to evoke feeling of nationalism and patriotism through nationwide campaigns especially amongst youth and to pay homage to the valiant soldiers. Our University 29 NCC students was successfully participated on that special occation', NULL, NULL, 'assets/images/ncc_img22.webp', NULL, NULL, '2024-01-13 00:00:00', NULL, NULL, NULL, NULL),
('ncc_high_ani_cd6', 'Cadet Bommu Mahender Reddy got Cadet Welfare Society Scholarship', '\"Kargil Vijay Diwas is a special occasion will be organised at the \'Kargil War Memorial\' in Dras on the Kargil Vijay DiwasThe objective of these celebrations is to evoke feeling of nationalism and patriotism through nationwide campaigns especially amongst youth and to pay homage to the valiant soldiers. Our University 29 NCC students was successfully participated on that special occation', NULL, NULL, 'assets/images/ncc_img22.webp', NULL, NULL, '2024-01-13 00:00:00', NULL, NULL, NULL, NULL),
('ncc_high_ani_cd7', 'Cadet Bommu Mahender Reddy got Cadet Welfare Society Scholarship', '\"Kargil Vijay Diwas is a special occasion will be organised at the \'Kargil War Memorial\' in Dras on the Kargil Vijay DiwasThe objective of these celebrations is to evoke feeling of nationalism and patriotism through nationwide campaigns especially amongst youth and to pay homage to the valiant soldiers. Our University 29 NCC students was successfully participated on that special occation', NULL, NULL, 'assets/images/ncc_img22.webp', NULL, NULL, '2024-01-13 00:00:00', NULL, NULL, NULL, NULL),
('ncc_high_cd1', 'NCC Highlights', 'Engaging in NCC activities cultivates teamwork and a sense of duty, preparing young individuals for civic responsibility and national service', NULL, NULL, 'assets/images/ncc_img20.webp', 'Vignan Student selected for Republic Day Pared', NULL, '2024-01-20 00:00:00', NULL, NULL, NULL, NULL),
('ncc_high_cd2', NULL, NULL, NULL, NULL, 'assets/images/ncc_img21.webp', 'VFSTR NCC Cadet SreeTeja Bharadwaj got selected for Indian armed forces ', NULL, '2024-01-15 00:00:00', NULL, NULL, NULL, NULL),
('ncc_high_cd3', NULL, NULL, NULL, NULL, 'assets/images/ncc_img22.webp', 'Cadet Bommu Mahender Reddy got Cadet Welfare Society Scholarship', NULL, '2024-01-13 00:00:00', NULL, NULL, NULL, NULL),
('ncc_high_cd4', NULL, NULL, NULL, NULL, 'assets/images/ncc_img22.webp', 'Cadet Bommu Mahender Reddy got Cadet Welfare Society Scholarship', NULL, '2024-01-13 00:00:00', NULL, NULL, NULL, NULL),
('ncc_high_cd5', NULL, NULL, NULL, NULL, 'assets/images/ncc_img22.webp', 'Cadet Bommu Mahender Reddy got Cadet Welfare Society Scholarship', NULL, '2024-01-13 00:00:00', NULL, NULL, NULL, NULL),
('ncc_high_cd6', NULL, NULL, NULL, NULL, 'assets/images/ncc_img22.webp', 'Cadet Bommu Mahender Reddy got Cadet Welfare Society Scholarship', NULL, '2024-01-13 00:00:00', NULL, NULL, NULL, NULL),
('ncc_high_cd7', NULL, NULL, NULL, NULL, 'assets/images/ncc_img22.webp', 'Cadet Bommu Mahender Reddy got Cadet Welfare Society Scholarship', NULL, '2024-01-13 00:00:00', NULL, NULL, NULL, NULL),
('ncc_sec2_card1', 'Objective', 'The National Cadet Corps aims to instil character, unity, and leadership qualities among the youth of India. Vignan’s NCC unit inspires students with top-notch training and a commitment to selfless service.', NULL, NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', NULL, NULL, NULL, NULL),
('ncc_sec2_card2', 'Training', 'Vignan’s NCC serves as a paramilitary organization, focusing on training youth in discipline, leadership, and physical fitness. It promotes citizenship, community service, and teamwork while offering adventurous experiences through activities and camps.', NULL, NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', NULL, NULL, NULL, NULL),
('ncc_sec4_card1', 'Highlights', 'Vignan Student selected for Republic Day Parade', NULL, NULL, 'assets/images/ncc_img5.webp', NULL, NULL, '2024-01-20 00:00:00', NULL, NULL, NULL, NULL),
('ncc_sec4_card2', NULL, 'VFSTR NCC Cadet SreeTeja Bharadwaj got selected for Indian armed forces', NULL, NULL, 'assets/images/ncc_img6.webp', NULL, NULL, '2024-01-15 00:00:00', NULL, NULL, NULL, NULL),
('ncc_sec4_card3', NULL, 'Cadet Bommu Mahender Reddy got Cadet Welfare Society Scholarship', NULL, NULL, 'assets/images/ncc_img7.webp', NULL, NULL, '2024-01-13 00:00:00', NULL, NULL, NULL, NULL),
('newpar_entrepreneur', '02%', 'Identifying a significant problem or groundbreaking idea that has the potential to transform people\'s lives.', 'Read More', NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'Become  Entrepreneurs  & Consults ', 4, 'dum'),
('newpar_entrepreneur_mba', '02%', 'Identifying a significant problem or groundbreaking idea that has the potential to transform people\'s lives.', 'Read More', NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'Become  Entrepreneurs  & Consults ', 4, 'mgt'),
('newpar_higheredu', '10-15%', 'Opting for higher education opens a gateway to specialised knowledge and advanced skills, propelling your career to new heights', 'Read More', NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'Go For Higher Education', 2, 'dum'),
('newpar_higheredu_ft', '25-30%', 'Higher education opens doors to deeper exploration, research, and specialization, providing individuals with the expertise and credentials necessary to excel in their careers or pursue advanced academic endeavors', 'Read More', '#higedu', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'Go For Higher Education', 2, 'ft'),
('newpar_higheredu_mba', '27.8%', 'Identifying a significant problem or groundbreaking idea that has the potential to transform people\'s lives.', 'Read More', NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'Go For Higher Education', 2, 'mgt'),
('newpar_joincmpny', '85-90%', 'Establish a goal by identifying the specific company you aspire to join right from\r\n                                    the beginning.', 'Read More', NULL, NULL, NULL, 'newpar', '1994-01-01 00:00:00', '2024-06-11 12:01:22', ' Join a Company', 1, 'dum'),
('newpar_joincmpny_ft', '70%', 'Explore our Food Technology Department\'s success stories! \r\nOur graduates have secured positions in leading food and non-food industries, including renowned names such as Continental Coffee Pvt Ltd, ID Fresh Foods, Thinking Forks Pvt Ltd.', 'Read More', NULL, NULL, NULL, 'newpar', '1994-01-01 00:00:00', '2024-06-11 12:01:22', ' Join a Company', 1, 'ft'),
('newpar_joincmpny_mgt', '85-90%', 'Establish a goal by identifying the specific company you aspire to join right from\r\n                                    the beginning.', 'Read More', '#joincmpny', NULL, NULL, 'newpar', '1994-01-01 00:00:00', '2024-06-11 12:01:22', ' Join a Company', 1, 'mgt'),
('newpar_research', '02%', 'Opting for higher education opens a gateway to specialised knowledge and advanced skills, propelling your career to new heights', 'Read More', NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'Choose Academia and Research', 3, 'dum'),
('newpar_research_ft', '02%', 'Their experiences and accomplishments serve as inspirations to current and future students, illustrating the transformative power of education and the limitless opportunities it offers for personal and professional development.', 'Read More', '#acad', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'Choose Academia and Research', 3, 'ft'),
('newpar_research_mba', '02%', 'Opting for higher education opens a gateway to specialised knowledge and advanced skills, propelling your career to new heights', 'Read More', NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', 'Choose Academia and Research', 3, 'mgt'),
('ulifeaboutus_ic_card1', 'Parents Teachers\r\nAssociation', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Parents%20Teachers%20Association%20Executive%20Committee%2018.07.2023.pdf', '', '', '', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, NULL, NULL),
('ulifeaboutus_ic_card10', 'Hostel Governing Body', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Hostel%20Governing%20Body%20Committee%2018.07.2023.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 10, NULL),
('ulifeaboutus_ic_card11', 'International Students Council', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/International%20Students%20Council%2018.07.2023.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 11, NULL),
('ulifeaboutus_ic_card12', 'IQAC Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Internal%20Quality%20Assurance%20Cell%20IQAC%2023.06.2023.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 12, NULL),
('ulifeaboutus_ic_card13', 'Internal Complaints Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Internal%20Complaints%20Comittee%2031.01.2023.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 13, NULL),
('ulifeaboutus_ic_card14', 'Library Advisory Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Library Advisory Committe 09.09.2024.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 14, NULL),
('ulifeaboutus_ic_card15', 'MoA', '', 'View Details\r\n', 'https://vignan.ac.in/2023pdf/MoA.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 15, NULL),
('ulifeaboutus_ic_card16', 'OMBUDSPERSON', '', 'View Details\r\n', 'https://vignan.ac.in/2023pdf/Ombudsperson.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 16, NULL),
('ulifeaboutus_ic_card17', 'Research Monitoring Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Research%20Monitoring%20Committee%2023.06.2023.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 17, NULL),
('ulifeaboutus_ic_card18', 'Students - Grievance Redressal Cell Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Students%20Grievance%20Redressel%2005.05.2023.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 18, NULL),
('ulifeaboutus_ic_card19', 'Staff - Grievance Redressal Cell Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Staff%20Grievance%20Redressal%20Committee%2026.03.2023.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 19, NULL),
('ulifeaboutus_ic_card2', 'Admissions Advisory Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Admissions%20Advisory%20Committee%2022.02.2022.pdf', '', '', '', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, NULL, NULL),
('ulifeaboutus_ic_card20', 'SC, ST, BC, OBC Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/8%20SC,%20ST,%20BC,%20OBC%20Committee%2020.07.2023.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 20, NULL),
('ulifeaboutus_ic_card21', 'Sports Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Sports%20Committee%2018.07.2023.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 21, NULL),
('ulifeaboutus_ic_card22', 'Students Welfare Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Student%20Welfare%20Committee%2018.07.2023.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 22, NULL),
('ulifeaboutus_ic_card23', 'Technical Skill Development Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Technical%20Skill%20Development%20Institute%20Committee%20APSSDC%2013.05.2022.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 23, NULL),
('ulifeaboutus_ic_card24', 'Training and Placement Cell Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Training%20and%20Placement%20Cell%20Committee%2023.06.2023.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 24, NULL),
('ulifeaboutus_ic_card25', 'University Discipline Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/University%20Discipline%20Committee%2003.11.2022.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 25, NULL),
('ulifeaboutus_ic_card26', 'Women Development and Empowerment Cell Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Women%20Development%20and%20Empowerment%20Cell%2018.07.2023.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 26, NULL),
('ulifeaboutus_ic_card27', 'Women Sports and Cultural Forum Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Women%20Sports%20and%20Cultural%20Forum%20Committee%2019.06.2023.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 27, NULL),
('ulifeaboutus_ic_card3', 'Evaluation Standards Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Evaluation%20Standards%20Committee%2025.04.2022.pdf', '', '', '', '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, NULL, NULL),
('ulifeaboutus_ic_card4', 'Advisory Committee for Technology Development', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Advisory%20Committee%20for%20Technology%20Development%2008092023.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 4, NULL),
('ulifeaboutus_ic_card5', 'Anti-ragging Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Anti%20Ragging%20Committee%2023.06.2023.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 5, NULL),
('ulifeaboutus_ic_card6', 'Canteen Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Canteen%20Committee%2019.06.2023.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 6, NULL),
('ulifeaboutus_ic_card7', 'Central Purchase Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Central%20Purchase%20Committee%2025.02.2021.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 7, NULL),
('ulifeaboutus_ic_card8', 'E-Samadhaan', '', 'View Details\r\n', 'https://samadhaan.ugc.ac.in/', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 8, NULL),
('ulifeaboutus_ic_card9', 'Fee Fixation Committee', '', 'View Details\r\n', 'https://vignan.ac.in/pdf/Fee%20Fixation%20Committee%2022.02.2022.pdf', '', '', '', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, 9, NULL);
INSERT INTO `cards` (`Id`, `title`, `descr`, `btn_nm`, `btn_hlink`, `img`, `caption`, `cardtype`, `date`, `todate`, `subtitle`, `sequence`, `dept`) VALUES
('ulife_sc_card1', 'SAC', 'Our mission is to offer diverse educational, entertainment, cultural, and recreational activities that complement academic pursuits and student interests.', 'Read More', 'https://vignan.ac.in/sac.php', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, NULL, NULL),
('ulife_sc_card2', 'Sports Cell', 'The Sports and Games Cell of the institute is dedicated with a team comprising 9 Physical Directors (PDs), 9 Special Coaches, and 10 assistants.', 'Read More', 'https://vignan.ac.in/recreational.php', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, NULL, NULL),
('ulife_sc_card3', 'NCC', 'The primary aim of the National Cadet Corps is to foster the development of character, camaraderie, and leadership skills among the youth of India.', 'Read More', 'https://vignan.ac.in/ncchome.php', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, NULL, NULL),
('ulife_sc_card4', 'UEAC', 'UEAC activities are aimed at instilling social consciousness and responsibility among budding engineers', 'Read More', 'https://vignan.ac.in/nss.php', NULL, NULL, NULL, '1994-01-01 00:00:00', '2024-06-11 12:01:22', NULL, NULL, NULL),
('unires_sec10_c1', 'RESEARCH FUND', '40', NULL, NULL, NULL, NULL, NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('unires_sec3_c1', 'By Ms Jyostna Devi Bodapati', 'Designing and Implementing a Two-Channel Deep Neural Network Architecture for Brain Tumor Classification', 'View More', NULL, NULL, NULL, 'unires_sec3', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('unires_sec3_c2', 'Dr ShubhaLshmiSengupta', 'A novel Bioreactor for bio degradation  of Marian plastic  litter in coastal Andhra Pradesh', 'View More', NULL, NULL, NULL, 'unires_sec3', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('unires_sec3_c3', 'Dr S.Krupanidhi', 'Phylogenetic analysis and bar coding of  Indian apple snails as a prelude to their conservation stagey', 'View More', NULL, NULL, NULL, 'unires_sec3', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('unires_sec3_c4', 'Dr VenkataSwamyNalaja', 'Preparation of High pure anhydrous Magnesium chloride from sea water bitterns and Magnesite', 'View More', NULL, NULL, NULL, 'unires_sec3', '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('unires_sec4_c1', 'M. Rama krishna', NULL, NULL, NULL, 'assets/images/profl.webp', NULL, NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('unires_sec4_c2', 'G. Srinivasa Rao', NULL, NULL, NULL, 'assets/images/prof2.webp', NULL, NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('unires_sec4_c3', 'K.V. Krishna Kishore', NULL, NULL, NULL, 'assets/images/prof3.webp', NULL, NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('unires_sec4_c4', 'D. Vijay Krishna', NULL, NULL, NULL, 'assets/images/prof4.webp', NULL, NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('unires_sec6_c1', 'M. S. S. Rukmini', NULL, NULL, NULL, 'assets/images/award1.webp', NULL, NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', 'Best Women Leader', NULL, NULL),
('unires_sec6_c2', 'P. M. V. Rao', NULL, NULL, NULL, 'assets/images/award2.webp', NULL, NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', 'Best Speaker', NULL, NULL),
('unires_sec6_c3', 'Y. Ravi sekhar', NULL, NULL, NULL, 'assets/images/award3.webp', NULL, NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', 'Best motivator', NULL, NULL),
('unires_sec6_c4', 'D. Vijaya Ramu', NULL, NULL, NULL, 'assets/images/award4.webp', NULL, NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', 'Best Speaker', NULL, NULL),
('unires_sec8_c1', 'Ms. Syed Habibunnisa,Dr N.Ruben', 'An unique sustainable construction material extracted from WRIGTHIA –TINCTORIA seed fiber and analyzing its properties thereof', 'Read More', NULL, NULL, '2019-20', NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', '', NULL, NULL),
('unires_sec8_c2', 'Dr. U. Srilakshmi', 'Aeroplane, Aircraft accidents predictive analytics using machine learning, deep learning and other programing', 'Read More', NULL, NULL, '2019-20', NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('unires_sec8_c3', 'Mr.T.R.Rajesh', 'Segmenatation of surface cacks based on a fully convolutional neural network and gated scale pooling', 'Read More', NULL, NULL, '2019-20', NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('unires_sec8_c4', 'Dr.T.P.Latchoumi', 'Method For Diagnose Medical Problem Using Medical Image Processing Using Big Data And Machine Learning', 'Read More', NULL, NULL, '2019-20', NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('unnat_history', 'History', 'Unnat Bharat Abhiyan was conceptualised by a group of IIT Delhi faculty members specialising in rural development and appropriate technology. The concept evolved through extensive consultations with representatives from technical institutions, RTAG coordinators, voluntary organisations, and government agencies during a national workshop at IIT Delhi in September 2014, sponsored by CAPART, Ministry of Rural Development. The Ministry of Education formally inaugurated the program on November 11, 2014, with the President of India presiding.', NULL, NULL, 'assets/icons/timer.svg', NULL, NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('unnat_mission', 'Mission', 'Unnat Bharat Abhiyan is inspired by the vision of transformational change in rural development processes by leveraging knowledge institutions to help build the architecture of an Inclusive India and to have a paradigm shift in academic and research programs of the country.', NULL, NULL, 'assets/icons/join.png', NULL, NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('unnat_obj', 'Objective', 'To engage the faculty and students of Higher Educational Institutions in understanding rural realities. <br> To identify & select existing innovative technologies, enable customization of technologies, or devise implementation methods for innovative solutions, as per the local needs. <br> To leverage the knowledge base of the educational institutions for effective implementation of various government programmes', NULL, NULL, 'assets/icons/bulb.svg', NULL, NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL),
('unnat_vision', 'Vision', 'Establish coordination among educational institutions, implementation agencies, and grassroots stakeholders for effective field intervention. <br> \r\n                Select rural clusters for holistic development using sustainable technologies and local resources, creating employment and leveraging government schemes. Reorient academic curricula and research programs in higher educational institutions to address contemporary needs and enhance student understanding of village and societal issues.', NULL, NULL, 'assets/icons/target.png', NULL, NULL, '1994-01-01 00:00:00', '1994-01-01 00:00:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` varchar(100) NOT NULL,
  `career_type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `btn_name` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `caption_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `career_type`, `title`, `descr`, `btn_name`, `btn_link`, `caption_date`) VALUES
('careers1', 'Academic', 'School of Computing and Informatics', 'Educating and mentoring future generations of tech innovators, guiding them through complex theoretical concepts and practical applications.', 'View Details', '', 'Tue, 01 April'),
('careers2', 'Academic', 'School of Computing and Informatics', 'Educating and mentoring future generations of tech innovators, guiding them through complex theoretical concepts and practical applications.', 'View Details', '', 'Tue, 01 April'),
('careers3', 'Academic', 'School of Computing and Informatics', 'Educating and mentoring future generations of tech innovators, guiding them through complex theoretical concepts and practical applications.', 'View Details', '', 'Tue, 01 April'),
('careers4', 'academic', 'School of Computing and Informatics', 'Educating and mentoring future generations of tech innovators, guiding them through complex theoretical concepts and practical applications.', 'View Details', '', 'Tue, 01 April'),
('careers5', 'Administrative', 'School of Computing and Informatics', 'Educating and mentoring future generations of tech innovators, guiding them through complex theoretical concepts and practical applications.', 'View Details', '', 'Tue, 01 April'),
('careers6', 'Administrative', 'School of Computing and Informatics', 'Educating and mentoring future generations of tech innovators, guiding them through complex theoretical concepts and practical applications.', 'View Details', '', 'Tue, 01 April'),
('careers7', 'Administrative', 'School of Computing and Informatics', 'Educating and mentoring future generations of tech innovators, guiding them through complex theoretical concepts and practical applications.', 'View Details', '', 'Tue, 01 April');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(100) DEFAULT NULL,
  `descr` varchar(150) DEFAULT NULL,
  `btn_nm1` varchar(30) DEFAULT NULL,
  `btn1_hlink` varchar(50) DEFAULT NULL,
  `btn_nm2` varchar(30) DEFAULT NULL,
  `btn2_hlink` varchar(50) DEFAULT NULL,
  `btn_nm3` varchar(30) DEFAULT NULL,
  `btn3_hlink` varchar(50) DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `slide` int(6) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `title`, `descr`, `btn_nm1`, `btn1_hlink`, `btn_nm2`, `btn2_hlink`, `btn_nm3`, `btn3_hlink`, `img1`, `slide`, `active`) VALUES
('home_carou1', 'Building Character for a Brighter Tomorrow.', 'We are Transforming Education, Nurturing Minds & Fostering values that transcend challenges. ', 'Apply now', 'https://vignan.ac.in/v-sat/?type=individual', 'International Students', 'https://internationaladmissions.vignan.ac.in/?type', NULL, '#', 'assets/images/building_character.webp', 1, 1),
('home_carou2', 'Admissions open<br> for 2024.', 'Thanks for choosing Vignan, You are making right decision to achieve your dreams.', 'Download Brochure', 'assets/pdf/brochure 2024.pdf', 'How to Reach', 'howtoreach.php', NULL, '#', 'assets/images/admission_open.webp', 2, 0),
('home_carou3', 'Learn, Thrive,<br> Enjoy, and Grow.', 'The beautifully landscaped campus has green tree lined avenues, lush green lawns, spacious classrooms, open corridors and large playgrounds.', 'Apply now', 'https://vignan.ac.in/v-sat/?type=individual', 'International Students', 'https://internationaladmissions.vignan.ac.in/?type', NULL, '#', 'assets/images/u-life.webp', 3, 0),
('home_carou4', 'Others saw the problem, He Sought the Solution.', 'Today the state of A.P is an acknowledged hub for education. It has especially become famous for its technical education.', NULL, '#', NULL, '#', NULL, '#', 'assets/images/about.webp', 4, 0),
('home_carou5', 'Encourages, challenges, you to be inquisitive, ', 'A strong scientific spirit and commitment to innovation drive faculty and students at VFSTR University. ', NULL, '#', NULL, '#', NULL, '#', 'assets/images/home_research.webp', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `certificatenames`
--

CREATE TABLE `certificatenames` (
  `ind` int(250) NOT NULL,
  `id` varchar(500) NOT NULL,
  `certificates` varchar(500) NOT NULL,
  `duplicate_certificates` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificatenames`
--

INSERT INTO `certificatenames` (`ind`, `id`, `certificates`, `duplicate_certificates`) VALUES
(1, 'exam_sec6_certificate_1', 'Correcting the name on certificate\r\n', 'Duplicate provisional certificate'),
(2, 'exam_sec6_certificate_2\r\n', 'backlog clearence certificate\r\n', 'Duplicate CMM'),
(3, 'exam_sec6_certificate_3\r\n', 'Transcript', 'Duplicate degree certificate'),
(4, 'exam_sec6_certificate_4\r\n', 'Provisional Certificate and CMM\r\n', ''),
(5, 'exam_sec6_certificate_5\r\n', 'Degree certificate\r\n', ''),
(6, 'exam_sec6_certificate_6\r\n', 'Migration Certificate\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `circulars`
--

CREATE TABLE `circulars` (
  `id` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `btn_nm` varchar(255) DEFAULT NULL,
  `hlink` varchar(255) DEFAULT NULL,
  `ctype` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `circulars`
--

INSERT INTO `circulars` (`id`, `title`, `date`, `img`, `btn_nm`, `hlink`, `ctype`) VALUES
('nad_sec6_card1', 'Implementation of NAD', '2020-01-26', NULL, NULL, 'https://vignan.ac.in/pdf/7a%20SecretaryLetter_NAD_26June_2020.pdf', 'nad_sec6'),
('nad_sec6_card2', 'Implementation of NAD', '2020-01-26', NULL, NULL, 'https://vignan.ac.in/pdf/7a%20SecretaryLetter_NAD_26June_2020.pdf', 'nad_sec6'),
('nad_sec6_card3', 'Upload ABC videos to website', '2023-03-23', NULL, NULL, 'https://vignan.ac.in/nadvideos.php', 'nad_sec6'),
('nad_sec6_card4', 'Upload Data to NAD Digi Locker', '2023-03-23', NULL, NULL, 'https://vignan.ac.in/pdf/Owner%20Information%20of%20NAD-Digilocker.pdf', 'nad_sec6');

-- --------------------------------------------------------

--
-- Table structure for table `conferences`
--

CREATE TABLE `conferences` (
  `id` varchar(30) NOT NULL DEFAULT '',
  `title` varchar(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `descr` varchar(1000) DEFAULT NULL,
  `btn1_nm` varchar(255) DEFAULT NULL,
  `btn2_nm` varchar(255) DEFAULT NULL,
  `hlink1` varchar(255) DEFAULT NULL,
  `hlink2` varchar(255) DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `subsec1_title` varchar(500) DEFAULT NULL,
  `subsec1_desc` varchar(1000) DEFAULT NULL,
  `subsec1_btn1` varchar(20) DEFAULT NULL,
  `subsec1_btn1_hlink` varchar(255) DEFAULT NULL,
  `subsec2_title` varchar(150) DEFAULT NULL,
  `subsec2_desc` varchar(1000) DEFAULT NULL,
  `subsec2_btn1` varchar(20) DEFAULT NULL,
  `subsec2_btn1_hlink` varchar(255) DEFAULT NULL,
  `subsec3_title` varchar(150) DEFAULT NULL,
  `subsec3_desc` varchar(500) DEFAULT NULL,
  `subsec3_btn1` varchar(20) DEFAULT NULL,
  `subsec3_btn1_hlink` varchar(255) DEFAULT NULL,
  `subsec4_title` varchar(150) DEFAULT NULL,
  `subsec4_desc` varchar(500) DEFAULT NULL,
  `subsec4_btn1` varchar(20) DEFAULT NULL,
  `subsec4_btn1_hlink` varchar(255) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conferences`
--

INSERT INTO `conferences` (`id`, `title`, `date`, `descr`, `btn1_nm`, `btn2_nm`, `hlink1`, `hlink2`, `img1`, `subsec1_title`, `subsec1_desc`, `subsec1_btn1`, `subsec1_btn1_hlink`, `subsec2_title`, `subsec2_desc`, `subsec2_btn1`, `subsec2_btn1_hlink`, `subsec3_title`, `subsec3_desc`, `subsec3_btn1`, `subsec3_btn1_hlink`, `subsec4_title`, `subsec4_desc`, `subsec4_btn1`, `subsec4_btn1_hlink`, `dept`, `type`) VALUES
('conf_phy1', ' National Conference on FAM', '2024-06-23 18:30:00', 'The aim of NCFAM is to bring academicians, scientists, researchers & industrialists to a common platform for showcasing their current interests and significant contributions in the field of Materials Science. ', NULL, NULL, NULL, NULL, NULL, 'Overview', 'The aim of NCFAM is to bring academicians, scientists,\r\nresearchers & industrialists to a common platform for\r\nshowcasing their current interests and significant\r\ncontributions in the field of Materials Science.<br><br>Materials Science, today, is the most diverse field with\r\nchallenges posed by the demands from almost all\r\nthe sectors of domestic appliances, health, telecommunication\r\nand automation etc. Research &\r\nDevelopment in all these areas witnessed exponential\r\ngrowth during past few decades calling for the need\r\nfor frequent interactions among technocrats\r\nacademicians, scientists and industrialists to share the\r\nknowledge and set the road map for the future. The\r\naim is to provide a suitable platform for researchers in\r\nthe areas of materials science with a special emphasis\r\non nurturing local younger talents.', ' Read More', 'dep_assets/pdf/NCFAM Brochure.pdf', 'Venue', 'Vignan\'s Foundation for Science, Technology and Research (VFSTR), Guntur and University.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'physics', 'conference'),
('conf_phy1_cp', 'Call for papers', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Food Process And Product Technology', 'Processing of fruits and vegetables, cereals, dairy, meat fish poultry, beverage, spices, traditional foods, nutraceutical and functional food sector. Novel food processing technologies - Non thermal processing, advancement in existing technologies, Recent food trends and future foods and clean eating.', NULL, NULL, 'Food Safety And Public Health', 'Food quality, Food toxicology, Biofilm, Predictive microbiology, Safety assessment, Public health and nutrition, Quality control system, Food analytical techniques.', NULL, NULL, 'Food Entrepreneurship', 'Food start-ups, Skill Development and Human Resource, Marketing challenges, Case studies in start-ups, E-Marketing in food sector.', NULL, NULL, 'Sustainability In Agriculture And Food', 'Global food chain, Food security, Food biotechnology, Environmental security, Contract forming, Waste to wealth, Digital and sustainable agriculture, Food in pandemic and disaster, Combating hunger and malnutrition.', NULL, NULL, 'physics', 'callpapers'),
('conf_phy1_reg', 'Register', '2019-06-15 04:18:17', ' Registration should be completed on or before 15 June 2019. Accommodation will be provided on\r\n                        payment basis subject to availability. Payment to register for accepted Papers in the Conference\r\n                        through NEFT only.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'physics', 'register');

-- --------------------------------------------------------

--
-- Table structure for table `conf_reg`
--

CREATE TABLE `conf_reg` (
  `id` int(11) NOT NULL,
  `cnfrnc_id` varchar(300) DEFAULT NULL,
  `cand_typ` varchar(300) DEFAULT NULL,
  `amt1` varchar(20) DEFAULT NULL,
  `amt2` varchar(20) NOT NULL,
  `dept` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conf_reg`
--

INSERT INTO `conf_reg` (`id`, `cnfrnc_id`, `cand_typ`, `amt1`, `amt2`, `dept`) VALUES
(1, 'conf_phy1_reg', 'Students (PG/UG)', '4000', '1000', 'physics'),
(2, 'conf_phy1_reg', 'Research Scholars', '4500', '1500', 'physics'),
(3, 'conf_phy1_reg', 'Faculty/PDF', '5000', '2000', 'physics'),
(4, 'conf_phy1_reg', 'Industry Person', '6000', '2500', 'physics'),
(5, 'conf_phy1_reg', 'Accompanying Person', '-', '1000', 'physics');

-- --------------------------------------------------------

--
-- Table structure for table `conf_schedu`
--

CREATE TABLE `conf_schedu` (
  `id` int(11) NOT NULL,
  `cnfrnc_id` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `frm_tm` time DEFAULT NULL,
  `to_tm` time DEFAULT NULL,
  `topic` varchar(500) DEFAULT NULL,
  `speaker` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conf_schedu`
--

INSERT INTO `conf_schedu` (`id`, `cnfrnc_id`, `date`, `frm_tm`, `to_tm`, `topic`, `speaker`, `location`, `day`) VALUES
(1, 'conf_phy1', '2019-06-24 00:00:00', '09:30:00', '10:30:00', 'Inauguration', '-', '-', 'day 1'),
(2, 'conf_phy1', '2019-06-24 00:00:00', '10:30:00', '11:15:00', 'Materials for Societal Applications', 'Prof. B. N. Jagatap, IIT-Bombay and                 Ex- Distinguished Scientist, BARC, Mumbai', '-', 'day 1'),
(3, 'conf_phy1', '2019-06-25 00:00:00', '09:30:00', '10:00:00', 'Material Science Aspects of Functional Materials and Nanostructures', 'Dr. G. Mangamma, Senior Scientist, Materials Science Group, IGCAR, Kalpakkam', '-', 'day 2'),
(4, 'conf_phy1', '2019-06-24 00:00:00', '11:15:00', '11:45:00', 'High Tea & Group Photograph', 'Dr. G. Mangamma, Senior Scientist, Materials Science Group, IGCAR, Kalpakkam', '-', 'day 1'),
(5, 'conf_phy1', '2019-06-24 00:00:00', '11:45:00', '12:15:00', 'Nanostructured carbonaceous transition metal oxide composites \r\nfor\r\nadvanced energy storage devices\r\n', ' Prof O.M. Hussain, SVU, Tirupati', '-', 'day 1'),
(6, 'conf_phy1', '2019-06-24 00:00:00', '12:15:00', '12:45:00', 'Optical properties of Er3+ -doped oxide glasses for optical\r\ntemperature sensors\r\n', 'Prof. Venkata Ramu, Krishna University', '-', 'day 1'),
(7, 'conf_phy1', '2019-06-24 00:00:00', '12:45:00', '13:00:00', '(OP-1)', 'Dr. M. Sreenivasulu, VFSTR', '-', 'day 1'),
(8, 'conf_phy1', '2019-06-24 00:00:00', '13:00:00', '13:15:00', '(OP-2)', 'Dr. M. V. Sambasiva Rao, \r\nBapatlaEngineering college \r\n', '-', 'day 1'),
(9, 'conf_phy1', '2019-06-24 00:00:00', '13:15:00', '14:15:00', 'LUNCH', NULL, '-', 'day 1'),
(10, 'conf_phy1', '2019-06-24 00:00:00', '14:15:00', '15:15:00', 'Poster Session \r\n(Display of all posters for two days)\r\n', '-', '-', 'day 1'),
(11, 'conf_phy1', '2019-06-24 00:00:00', '15:15:00', '15:45:00', 'IT-3', 'Dr. Ravishankar, Head Public Awareness Division, DAE', '-', 'day 1'),
(12, 'conf_phy1', '2019-06-24 00:00:00', '15:45:00', '16:15:00', 'Solar Energy and its Industrial Applications', 'Dr. Y. Bharat  Reddy, Dy.G.M, SECI, New Delhi', '-', 'day 1'),
(13, 'conf_phy1', '2019-06-24 00:00:00', '16:15:00', '16:30:00', 'Tea/Coffee Break', '-', '-', 'day 1'),
(14, 'conf_phy1', '2019-06-24 00:00:00', '16:30:00', '16:45:00', '(OP-3)', 'Dr. J. N. Kiran, VFSTR', '-', 'day 1'),
(15, 'conf_phy1', '2019-06-24 00:00:00', '16:45:00', '17:00:00', '(OP-4)', 'Dr. K. Pandurangarao, \r\nAndhraloyola Institute of Engineering and Technology,', '-', 'day 1'),
(16, 'conf_phy1', '2019-06-24 00:00:00', '19:30:00', '20:30:00', 'DINNER', NULL, NULL, 'day 1'),
(17, 'conf_phy1', '2019-06-25 00:00:00', '10:00:00', '10:30:00', 'Regulatory Aspects of Indian Nuclear Power Programme', 'Dr. A. Ramakrishna, VFSTR', '-', 'day 2'),
(18, 'conf_phy1', '2019-06-25 00:00:00', '10:30:00', '11:00:00', 'Challenges in materials sciences and engineering', 'Dr. B.Purnaiah, VFSTR', NULL, 'day 2'),
(19, 'conf_phy1', '2019-06-25 00:00:00', '11:00:00', '11:30:00', 'Tea Break', '-', '-', 'day 2'),
(20, 'conf_phy1', '2019-06-25 00:00:00', '11:30:00', '11:45:00', '(OP-5)', 'Dr.Koya Prabhakara Rao, VFSTR', '-', 'day 2'),
(21, 'conf_phy1', '2019-06-25 00:00:00', '11:45:00', '12:00:00', '(OP-6)', 'Dr.P.Sudam Sekhar, VFTR', '-', 'day 2'),
(22, 'conf_phy1', '2019-06-25 00:00:00', '12:00:00', '12:30:00', 'Biomaterials in Medicine', 'Prof.J.Prakash Rao, VFSTR', '-', 'day 2'),
(23, 'conf_phy1', '2019-06-25 00:00:00', '12:30:00', '12:45:00', '(OP-7)', 'Dr.Vidya P. Kodali, VikramaSimhapuri University, AP', '-', 'day 2'),
(24, 'conf_phy1', '2019-06-25 00:00:00', '12:45:00', '13:00:00', '(OP-8)', 'Dr.N.S. Sampath Kumar, VFSTR', '-', 'day 2'),
(25, 'conf_phy1', '2019-06-25 00:00:00', '13:00:00', '14:00:00', 'LUNCH', '-', '-', 'day 2'),
(26, 'conf_phy1', '2019-06-25 00:00:00', '14:00:00', '15:00:00', 'Session V\r\nPosters discussion Session\r\n', '(Judges- Dr. G. Mangamma, Dr. Y. Bharat Reddy, Dr. A. Ramakrishna & Shri R.V. Subba Rao)', '-', 'day 2'),
(27, 'conf_phy1', '2019-06-25 00:00:00', '15:00:00', '15:30:00', 'Nanotechnology and us', 'Dr.Prajith Ghosh,  VFSTR', '-', 'day 2'),
(28, 'conf_phy1', '2019-06-25 00:00:00', '15:30:00', '15:45:00', '(OP-9)', 'Dr. Venkata Naga BajiTokala, Vignan s Lara Institute of Technology & Science', '-', 'day 2'),
(29, 'conf_phy1', '2019-06-25 00:00:00', '15:45:00', '16:00:00', '(OP-10)', 'D. Gangadharudu, SRVBSJB MR Degree College, Peddapuram', '-', 'day 2'),
(30, 'conf_phy1', '2019-06-25 00:00:00', '16:00:00', '16:15:00', '(OP-11)', 'Dr A Srivani, Quantum University', '-', 'day 2'),
(31, 'conf_phy1', '2019-06-25 00:00:00', '16:15:00', '16:30:00', '(OP-12)', 'Dr.Gomatam Mohana Charyulu, VFSTR(OP-12)', '-', 'day 2'),
(32, 'conf_phy1', '2019-06-25 00:00:00', '16:30:00', '16:45:00', 'Tea/Coffee Break', '-', '-', 'day 2'),
(33, 'conf_phy1', '2019-06-25 00:00:00', '16:45:00', '17:45:00', 'Concluding Session/ Valedictory', '-', '-', 'day 2');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Id` varchar(500) NOT NULL,
  `title` varchar(2000) DEFAULT NULL,
  `img` varchar(2000) DEFAULT NULL,
  `name` varchar(2000) DEFAULT NULL,
  `designation` varchar(2000) DEFAULT NULL,
  `subsec` varchar(2000) DEFAULT NULL,
  `address` varchar(2000) DEFAULT NULL,
  `email` varchar(2000) DEFAULT NULL,
  `mobno` varchar(100) DEFAULT NULL,
  `extn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Id`, `title`, `img`, `name`, `designation`, `subsec`, `address`, `email`, `mobno`, `extn`) VALUES
('antiragging_1', 'Anti Ragging Cell', NULL, NULL, NULL, NULL, 'University Grants Commission (UGC)\r\nAnti Ragging Cell 6, Benito Juarez Marg South Campus, South Moti Bagh New Delhi - 110021', NULL, NULL, ''),
('antiragging_2', 'National Anti-Ragging Helpline', NULL, NULL, NULL, NULL, '', 'helpline@antiragging.in', '1800-180-5522', ''),
('antiragging_3', 'Monitoring Agency', NULL, NULL, NULL, NULL, 'Centre for Youth (C4Y) New Delhi - 110068', 'antiragging@c4yindia.org', '91-11416 19005', ''),
('direc_sec1_cd1', 'Administrative Officials', NULL, 'Cmde. Dr. M.S.Raghunathan, VSM (Retd.)', 'Registrar', NULL, NULL, 'registrar@vignan.ac.in', '0863-2344700', '283'),
('direc_sec1_cd2', NULL, NULL, 'Dr. P. Nagabhushan', 'Vice-Chancellor', NULL, NULL, 'vc@vignan.ac.in', '0863-2344700', '282'),
('direc_sec1_cd3', NULL, NULL, 'Cmde. Dr. M.S.Raghunathan, VSM (Retd.)', 'Registrar', NULL, NULL, 'registrar@vignan.ac.in', '0863-2344700', '283'),
('direc_sec2_cd1', 'Advanced Computer Science and Engineering', NULL, 'Dr. B. Premamayudu', 'HoD', NULL, NULL, 'registrar@vignan.ac.in', '9578945856', '266'),
('direc_sec3_cd1', 'Biotechnology and Bio-informatics', NULL, 'Cmde. Dr. M.S.Raghunathan, VSM (Retd.)', 'Registrar', NULL, NULL, 'registrar@vignan.ac.in', '0863-2344700', '283'),
('direc_sec4_cd1', 'Biomedical Engineering', NULL, 'Dr. G. Sitaramnajaneya Reddy', 'HoD', NULL, NULL, 'registrar@vignan.ac.in', '77308 22065', '321'),
('direc_sec5_cd1', 'Civil Engineering', NULL, 'Dr. M. Karthikeyan', 'HoD', NULL, NULL, 'registrar@vignan.ac.in', '9765854353', '131'),
('direc_sec6_cd1', 'Computer Science and Engineering', NULL, 'Dr. K.V. Krishna Kishore', 'HoD', NULL, NULL, 'registrar@vignan.ac.in', '987656543', '266'),
('direc_sec6_cd2', NULL, NULL, 'Dr. Venkatarama Phani Kumar Sistla', 'HoD', NULL, NULL, 'registrar@vignan.ac.in', '8632344476', '321'),
('direc_sec7_cd1', 'Electronics and Communication Engineering', NULL, 'Dr. T. Pitchaiah', 'HoD', NULL, NULL, 'registrar@vignan.ac.in', '987654323', '266'),
('direc_sec7_cd2', NULL, NULL, 'Dr. T. Pitchaiah', 'HoD', NULL, NULL, 'registrar@vignan.ac.in', '8632344476', '311'),
('lib_contact_1', 'Contact Us', 'assets/images/aboutus_img12.webp', 'Dr. Y. Ravisekhar', 'Dean - Library & Information Sciences', 'Email', NULL, 'dean_td@vignan.ac.in </br>ykravi@gmail.com', '0863 - 2344737 ', ''),
('lib_contact_2', 'Contact Us', 'assets/images/lib_img1.png\n', 'Smt. A. Rajani Kumari', 'Librarian', 'Phone', NULL, 'librarian@vignan.ac.in </br>rajanivu96@gmail.com', '09533562529', ''),
('ncc_sec5_1', 'Contact Us', 'assets/images/ncc_img8.webp', 'Lt Siva Koteswararao Chinnam', 'Associate NCC Officer', 'Email', '138-B, 25(A) BN NCC, Guntur', 'vfstrncc@gmail.com', '', ''),
('ncc_sec5_2', NULL, 'assets/images/ncc_img9.webp', 'Lt Keerthi Priya Yadala', 'Associate NCC Officer', NULL, '138-B, 25(A) BN NCC, Guntur', 'keerthi.kavi111@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `coordinators`
--

CREATE TABLE `coordinators` (
  `id` int(11) NOT NULL,
  `prg_id` varchar(300) DEFAULT NULL,
  `org_typ` varchar(300) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `img` varchar(300) NOT NULL,
  `sufix` varchar(100) DEFAULT NULL,
  `dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinators`
--

INSERT INTO `coordinators` (`id`, `prg_id`, `org_typ`, `name`, `img`, `sufix`, `dept`) VALUES
(1, 'conf_phy1', 'Chief Patron', 'Dr. L. Rathaiah, ', '', 'Chairman, Vignan\'s Group', 'physics'),
(2, 'conf_phy1', 'Chief Patron', 'Dr. L. Sri Krishna Devarayalu, ', '', 'Vice-Chairman, Vignan\'s Group', 'physics'),
(3, 'conf_phy1', 'Convener', 'Dr. K. V. Madhuri', '', 'HoD of Physics Department', 'physics'),
(4, 'conf_phy1', 'coordinator', 'Dr. Purnaiah', '../assets/images/personimage.png', 'Ex-Head, ICPD, NCPW, DAE, Mumbai', 'physics'),
(5, 'conf_phy1', 'coordinator', 'Dr. A. RamaKrishna', '../assets/images/personimage.png', 'Ex-Head, TSR&RPS, AERB, Mumbai', 'physics'),
(6, 'conf_phy1', 'Patron', 'Dr. P. Nagabhushan', '', 'Vice-Chancellor, VFSTR', 'physics'),
(7, 'conf_phy1', 'Patron', 'Ex. Comd. Dr. M. S Raghunathan', '', 'Registrar, VFSTR', 'physics');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` varchar(100) NOT NULL,
  `schl_id` varchar(100) DEFAULT NULL,
  `dept_name` varchar(255) DEFAULT NULL,
  `dept_short_name` varchar(255) DEFAULT NULL,
  `dept_btn` varchar(255) DEFAULT NULL,
  `dept_btn_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `schl_id`, `dept_name`, `dept_short_name`, `dept_btn`, `dept_btn_link`) VALUES
('sch1_dept1', 'sch1', 'Agriculture Engineering', 'AGE', 'View Department', 'https://vignan.ac.in/aehome.php'),
('sch1_dept2', 'sch1', 'Mechanical Engineering', 'ME', 'View Department', 'https://vignan.ac.in/mechhome.php'),
('sch1_dept3', 'sch1', 'Chemical Engineering', 'chem', 'View Department', 'https://vignan.ac.in/chemhome.php'),
('sch1_dept4', 'sch1', 'Civil Engineering', 'civil', 'View Department', 'https://vignan.ac.in/civilhome.php'),
('sch1_dept5', 'sch1', 'Textile Technology', 'TT', 'View Department', 'https://vignan.ac.in/texthome.php'),
('sch2_dept1', 'sch2', 'Electronics and Communication Engineering', 'ECE', 'View Department', 'https://vignan.ac.in/ecehome.php'),
('sch2_dept2', 'sch2', 'Biomedical Engineering', 'BME', 'View Department', 'https://vignan.ac.in/bmehome.php'),
('sch2_dept3', 'sch2', 'Electrical and Electronics Engineering', 'EEE', 'View Department', 'https://vignan.ac.in/eeehome.php'),
('sch3_dept1', 'sch3', 'Computer Science and Engineering', 'CSE', 'View Department', 'https://vignan.ac.in/csehome.php'),
('sch3_dept2', 'sch3', 'Advanced Computer Science and Engineering', 'ACSE', 'View Department', 'https://vignan.ac.in/acsehome.php'),
('sch3_dept3', 'sch3', 'Information Technology', 'IT', 'View Department', 'https://vignan.ac.in/ithome.php'),
('sch4_dept1', 'sch4', 'Biotechnology', 'BT', 'View Department', 'https://vignan.ac.in/biotechhome.php'),
('sch4_dept2', 'sch4', 'Pharmaceutical Sciences', 'Pharm.Sci.', 'View Department', 'https://vignan.ac.in/pharmacy.php'),
('sch5_dept1', 'sch5', 'Management Studies', 'MGT', 'View Department', 'https://vignan.ac.in/mgthome.php'),
('sch5_dept2', 'sch5', 'Institue of Law', 'LAW', 'View Department', 'https://vignan.ac.in/lawhome.php'),
('sch6_dept1', 'sch6', 'Agriculture and Horticulture Sciences', 'Agri', 'View Department', 'https://vignan.ac.in/agrihome.php'),
('sch6_dept2', 'sch6', 'Food Technology', 'FT', 'View Department', 'https://vignan.ac.in/foodhome.php'),
('sch7_dept1', 'sch7', 'Department of Physics', 'Physics', 'View Department', 'https://vignan.ac.in/physicshome.php'),
('sch7_dept2', 'sch7', 'Department of Chemistry', 'Chemistry', 'View Department', 'https://vignan.ac.in/chemistryhome.php'),
('sch7_dept3', 'sch7', 'Department of Mathematics and Statistics', 'Maths', 'View Department', 'https://vignan.ac.in/mathshome.php'),
('sch7_dept4', 'sch7', 'Department of English', 'English', 'View Department', 'https://vignan.ac.in/englishhome.php'),
('sch7_dept5', 'sch7', 'Department of Sciences and Humanities', 'BSH', 'View Department', 'https://vignan.ac.in/bshhome.php');

-- --------------------------------------------------------

--
-- Table structure for table `dept_data`
--

CREATE TABLE `dept_data` (
  `sec_id` int(11) NOT NULL,
  `id` varchar(255) NOT NULL DEFAULT '',
  `dept_id` varchar(30) DEFAULT NULL,
  `schl_id` varchar(30) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `descr` varchar(3000) DEFAULT NULL,
  `btn_nm1` varchar(100) DEFAULT NULL,
  `btn1_hlink` varchar(255) DEFAULT NULL,
  `btn_nm2` varchar(100) DEFAULT NULL,
  `btn2_hlink` varchar(255) DEFAULT NULL,
  `btn_nm3` varchar(100) DEFAULT NULL,
  `btn3_hlink` varchar(255) DEFAULT NULL,
  `btn_nm4` varchar(100) DEFAULT NULL,
  `btn4_hlink` varchar(255) DEFAULT NULL,
  `subsec1_title` varchar(500) DEFAULT NULL,
  `subsec1_desc` varchar(1000) DEFAULT NULL,
  `subsec1_btn1` varchar(20) DEFAULT NULL,
  `subsec1_btn1_hlink` varchar(255) DEFAULT NULL,
  `subsec2_title` varchar(150) DEFAULT NULL,
  `subsec2_desc` varchar(3000) DEFAULT NULL,
  `subsec2_btn1` varchar(20) DEFAULT NULL,
  `subsec2_btn1_hlink` varchar(255) DEFAULT NULL,
  `subsec3_title` varchar(150) DEFAULT NULL,
  `subsec3_desc` varchar(3000) DEFAULT NULL,
  `subsec3_btn1` varchar(20) DEFAULT NULL,
  `subsec3_btn1_hlink` varchar(255) DEFAULT NULL,
  `subsec4_title` varchar(150) DEFAULT NULL,
  `subsec4_desc` varchar(500) DEFAULT NULL,
  `subsec4_btn1` varchar(20) DEFAULT NULL,
  `subsec4_btn1_hlink` varchar(255) DEFAULT NULL,
  `img1` varchar(100) DEFAULT NULL,
  `img2` varchar(100) DEFAULT NULL,
  `img3` varchar(100) DEFAULT NULL,
  `img4` varchar(100) DEFAULT NULL,
  `hod_nm` varchar(255) DEFAULT NULL,
  `img1name` varchar(255) DEFAULT NULL,
  `img2name` varchar(255) DEFAULT NULL,
  `img3name` varchar(255) DEFAULT NULL,
  `img4name` varchar(255) DEFAULT NULL,
  `desig` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_data`
--

INSERT INTO `dept_data` (`sec_id`, `id`, `dept_id`, `schl_id`, `title`, `descr`, `btn_nm1`, `btn1_hlink`, `btn_nm2`, `btn2_hlink`, `btn_nm3`, `btn3_hlink`, `btn_nm4`, `btn4_hlink`, `subsec1_title`, `subsec1_desc`, `subsec1_btn1`, `subsec1_btn1_hlink`, `subsec2_title`, `subsec2_desc`, `subsec2_btn1`, `subsec2_btn1_hlink`, `subsec3_title`, `subsec3_desc`, `subsec3_btn1`, `subsec3_btn1_hlink`, `subsec4_title`, `subsec4_desc`, `subsec4_btn1`, `subsec4_btn1_hlink`, `img1`, `img2`, `img3`, `img4`, `hod_nm`, `img1name`, `img2name`, `img3name`, `img4name`, `desig`) VALUES
(1, 'home_1', 'sch5_dept1', 'sch5', 'Business Education for a changing world', NULL, 'Vision & Mission', '#overlay', 'HoD Message', '#hodoverlay', NULL, NULL, NULL, NULL, NULL, 'To be a centre of excellence in Management Education by attracting staff and students of highest quality', NULL, NULL, NULL, 'To advance knowledge through high quality academic programes, training activities, research facilities and opportunities supported by continuous industry - institute interaction aimed at employability, entrepreneurship, leadership and research aptitude among students and develop leaders so as to serve business and society.', NULL, NULL, NULL, 'Business Administration is transforming our world, in myriad ways. It is changing the way we do business, the way we learn, the way we communicate, the way we utilize human, financial, technology resources and even the way we entertain ourselves. \r\n\r\nThe discipline of Business Administration addresses the strategies, innovative methods, integration, new product or service deployment, and management of people and networking resources and services, as well as the development of new technology infrastructures in organizations. The global business has undergone a rapid evolution, as it has kept abreast of what the global markets require in terms of products and services. India has now positioned itself as a potential market for global business. Business Administration has shaped itself into a process oriented, Best Practices-focused and skill-rich entity that has found favor with global customers.', NULL, NULL, NULL, NULL, NULL, NULL, 'dep_assets/images/depthomeimg.webp', 'https://vignan.ac.in/img/fac/Dr.Sarita%20Sathpathy.jpeg', NULL, NULL, 'Dr. Sarita Satpathy', '', NULL, NULL, NULL, 'Professor & HoD Management Studies Dept'),
(2, 'home_1', 'sch7_dept2', 'sch7', 'Experiment, Explore and Innovate', ' Since its formal inception initially as a division in 2018 and followed by a department in 2022, the Department of Chemistry under the School of Applied Sciences and Humanities at VFSTR (Vignan s Foundation for Science, Technology, and Research) has emerged as a dynamic and cutting-edge academic hub that thrives on creativity and scientific discovery. The department, comprised of highly qualified professors, researchers, and enthusiastic students, is dedicated to creating a profound grasp of the fundamental principles of chemistry and its many applications through various academic and research endeavors. Students are encouraged to participate in hands-on experiments in laboratories and research facilities that are state-of-the-art, promoting a practical and experiential learning style.', 'Vision & Mission', '#overlay', 'HoD Message', '#hodoverlay', NULL, NULL, NULL, NULL, NULL, 'To be recognised as a centre of excellence in chemistry through creative and innovative practices in teaching-learning and research activities, thus driving transformative progress to produce internationally accepted, competitive, and competent professionals with social consciousness and ethical values.', NULL, NULL, NULL, 'To provide high-quality academic programmes, training activities, research facilities, and opportunities supported by continuous industry-institute interaction aimed at promoting employability, entrepreneurship, leadership, and research aptitude among students and contributing to the economic and technological development of the region, state, and nation.', NULL, NULL, NULL, 'Dear students, faculty, and visitors,<br><br>Welcome to the Department of Chemistry!<br><br>It gives me immense pleasure and delight to extend a warm welcome to the Department of Chemistry at VIGNAN S FOUNDATION FOR SCIENCE, TECHNOLOGY & RESEARCH (VFSTR)(Deemed to be University). As the Head of the Department, it is my honor to introduce you to our vibrant and dynamic community of students, scholars, and faculty. At VFSTR, we are driven by a passion for scientific discovery and innovation in the themes of materials for the health, energy, and environment (HEE). <br><br>Thank you and I look forward to seeing you contribute to the Department of Chemistry at VFSTR.', NULL, NULL, NULL, NULL, NULL, NULL, 'dep_assets/images/depthomeimg.webp', 'dep_assets/images/chmstry_hod.jpg', NULL, NULL, 'Prof.Koya Prabhakara Rao', '', NULL, NULL, NULL, 'Professor & HoD Chemistry Dept'),
(3, 'what_ulearn', 'sch5_dept1', 'sch5', 'What You\'ll learn', 'Some key learnings that you ll embrace once you get part of us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Advanced Business Knowledge, Leadership and Management Skills', NULL, NULL, NULL, 'Global Perspective,	Practical Experience', NULL, NULL, NULL, 'Innovation and Entrepreneurship, Personal and Professional Growth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://vignan.ac.in/img/fac/Dr.Sarita%20Sathpathy.jpeg', NULL, NULL, 'Dr. Sarita Satpathy', '', NULL, NULL, NULL, 'Professor & HoD Management Studies Dept'),
(4, 'research_1', 'sch5_dept1', 'sch5', 'Unleashing Innovation.', 'Dive into the forefront of innovation within our Computer Science Research Section, where groundbreaking exploration converges with cutting-edge technology. Our researchers push boundaries, unraveling complexities, and pioneering solutions that define the future of computing. Join us in the pursuit of knowledge that transforms ideas into impactful realities, shaping the landscape of technology with every discovery', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dep_assets/images/dept_research.webp', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
(5, 'research_2', 'sch5_dept1', 'sch5', 'Research Projects', 'To identify and cater the needs in the society and to provide cost effective solutions using the advanced technologies and promote the research zeal among the faculty members of Computer Science & Engineering.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
(6, 'contact', 'sch5_dept1', 'sch5', 'Contact Us', 'Connect with us effortlessly; your inquiries, feedback, and curiosity are always welcome   reach out through our Contact Us section for prompt assistance and information', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dep_assets/images/hod_phy.jpg', NULL, NULL, 'Prof. K V Madhuri', '', NULL, NULL, NULL, 'Professor & HoD Physics Dept'),
(7, 'home_1', 'sch7_dept1', 'sch7', 'Inquisitiveness, Perseverance, Ingenious', NULL, 'Vision & Mission', '#overlay', 'HoD Message', '#hodoverlay', NULL, NULL, NULL, NULL, NULL, 'To enhance the scientific temperament and research skill set of young minds, and to keep them abreast of innovative practices through lifelong learning.', NULL, NULL, NULL, 'To equip students with ample laboratory practices along with an outcome-based learning philosophy, which will enable them to compete globally.', NULL, NULL, NULL, 'As the head of the department, it gives me great pleasure to deliver this message.\r\nDepartment of Physics was formally founded in 2018 as a division and later gained prominence as anindependent department in 2022 under the School of Applied Sciences & Humanities. It gives me greatenthusiasm  to welcome you to our active academic community as the Head of the Physics department. In order to prepare students for successful careers in Physics, Science, Technology and Engineering, and other fields, our department is dedicated to provide excellent teaching learning environment, with pursuinginnovative research, and promoting a collaborative atmosphere. Doctorates from prestigious State Universities, IIT, NIT, HCU, and other nationally renowned institutions are department\'s academic members. Additionally, some of them have post-doctoral research experience in Canada and other developed countries. ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dep_assets/images/hod_phy.jpg', NULL, NULL, 'Prof. K V Madhuri', '', NULL, NULL, NULL, NULL),
(8, 'research_1', 'sch7_dept1', 'sch7', 'Unleashing Innovation.', 'Dive into the forefront of innovation within our Computer Science Research Section, where groundbreaking exploration converges with cutting-edge technology. Our researchers push boundaries, unraveling complexities, and pioneering solutions that define the future of computing. Join us in the pursuit of knowledge that transforms ideas into impactful realities, shaping the landscape of technology with every discovery', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dep_assets/images/dept_research.webp', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
(9, 'research_1', 'sch7_dept2', 'sch7', 'Unleashing Innovation.', 'Dive into the forefront of innovation within our Computer Science Research Section, where groundbreaking exploration converges with cutting-edge technology. Our researchers push boundaries, unraveling complexities, and pioneering solutions that define the future of computing. Join us in the pursuit of knowledge that transforms ideas into impactful realities, shaping the landscape of technology with every discovery', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dep_assets/images/dept_research.webp', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
(10, 'research_2', 'sch7_dept1', 'sch7', 'Research Projects', 'To identify and cater the needs in the society and to provide cost effective solutions using the advanced technologies and promote the research zeal among the faculty members of Computer Science & Engineering.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
(11, 'research_2', 'sch7_dept2', 'sch7', 'Research Projects', 'To identify and cater the needs in the society and to provide cost effective solutions using the advanced technologies and promote the research zeal among the faculty members of Computer Science & Engineering.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
(12, 'researchfacilities_1', 'sch7_dept1', 'sch7', 'Our Research Facilities', 'We provide cutting-edge lab facilities empower students to engage in hands-on learning experiences, fostering innovation and scientific exploration', NULL, 'https://vignan.ac.in/vignantest/departments/deptresearch.php?deptid=sch7_dept1&school=sch7&deptnm=Physics', NULL, 'https://vignan.ac.in/vignantest/departments/deptresearch.php?deptid=sch7_dept1&school=sch7&deptnm=Physics', NULL, 'https://vignan.ac.in/vignantest/departments/deptresearch.php?deptid=sch7_dept1&school=sch7&deptnm=Physics', NULL, 'https://vignan.ac.in/vignantest/departments/deptresearch.php?deptid=sch7_dept1&school=sch7&deptnm=Physics', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dep_assets/images/phyreserachfacility_1.jpg', 'dep_assets/images/phyreserachfacility_4.jpg', 'dep_assets/images/phyreserachfacility_16.jpg', 'dep_assets/images/phyreserachfacility_3.jpg', NULL, 'Muffle Furnace', 'Hydraulic Press', 'Cooling Centrifuge', 'Spin coater', NULL),
(13, 'home_1', 'sch3_dept1', 'sch3', 'Design, Develop, Revolutionize', NULL, 'Vision & Mission', '#overlay', 'HoD Message', '#hodoverlay', NULL, NULL, NULL, NULL, NULL, 'To evolve as a centre of high repute in Computer Science & Engineering and create computer software professionals trained on problem solving skills imbued with ethics to serve the ever evolving and emerging requirements of IT Industry and society at large.', NULL, NULL, NULL, 'Imparting quality education through well designed curriculum, innovative teaching and learning methodologies integrated with professional skill development activities to meet the challenges in the career.<br><br>Nurture research and consultancy activities amongst students and faculty by providing State-of-art facilities and Industry-Institute Interaction.<br><br>Developing capacity to learn new technologies and apply to solve social and industrial problems to become an entrepreneur.', NULL, NULL, NULL, 'The unprecedented growth of computer systems and their adoption into every possible walk of life made the computer science as one of the fast-paced engineering streams. Be it a simple mobile-phone or a sophisticated space shuttle, computer is there everywhere to play its vital role.<br><br>B.Tech. CSE Programme is accredited with NBA in the year 2020-21.\r\nFaculty is one of the core strengths of the department of Computer Science, they hailed from higher learning institutes such as IIT/NIT/CU/IIITs. Faculty encourages the students to choose their career as per their interest. The faculty members undergo training on latest technologies that are in high demand in the industry and impart the knowledge and skill acquired to the students to get placed with high salary package. Students are also motivated to participate in various global coding competitions and research activities under the guidance of the faculty members.', NULL, NULL, NULL, NULL, NULL, NULL, 'dep_assets/images/depthomeimg.webp', 'https://vignan.ac.in/deans/cse_hod.jpg', NULL, NULL, 'Dr. S. Venkatrama Phani Kumar', '', NULL, NULL, NULL, 'Professor. & HoD, CSE Dept'),
(14, 'research_1', 'sch3_dept1', 'sch3', 'Unleashing Innovation.', 'Dive into the forefront of innovation within our Computer Science Research Section, where groundbreaking exploration converges with cutting-edge technology. Our researchers push boundaries, unraveling complexities, and pioneering solutions that define the future of computing. Join us in the pursuit of knowledge that transforms ideas into impactful realities, shaping the landscape of technology with every discovery', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dep_assets/images/dept_research.webp', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
(15, 'research_2', 'sch3_dept1', 'sch3', 'Research Projects', 'To identify and cater the needs in the society and to provide cost effective solutions using the advanced technologies and promote the research zeal among the faculty members of Computer Science & Engineering.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
(16, 'home_1', 'sch7_dept5', 'sch7', 'Experiment, Explore and Innovate', 'SSH was officially launched in the year 2023 and is a part of the School of Applied Sciences and Humanities at VFSTR. The department is envisioned to be a multi-disciplinary unit, with the availability of subject experts in such fields as sociology, economics, history, political science, geography, and psychology, who are engaged in cutting-edge research and other academic endeavours.', 'Vision & Mission', '#overlay', 'HoD Message', '#hodoverlay', NULL, NULL, NULL, NULL, NULL, 'To burgeon into an academic unit that embraces and enhances multi-disciplinarity of social sciences and humanities. Staying true to the spirit of VFSTR, the department aspires to remain tethered to both local and global societal realities. This vision aims at the intellectual nourishment of our students, scholars, and professionals who engage in learning, research, and the dissemination of knowledge.   ', NULL, NULL, NULL, '• Foster civic engagement through education that empowers individuals to understand their societal responsibilities<br> \r\n• Cultivate excellence in the social sciences and humanities<br>\r\n• Encourage collaborative research and teaching that bridges disciplinary boundaries across VFSTR<br>\r\n• Pursue impactful research that informs real-world solutions and advancements<br>\r\n• Champion a vibrant intellectual environment that celebrates diversity of thought, background, and experience\r\n', NULL, '', NULL, 'Mahatma Gandhi redefined seven deadly sins to include “science without humanity” as one of them. Here at VFSTR, we pride ourselves on creating future scientists and technological experts who will play a key role on the global stage, and social sciences and humanities, I believe, have an enormous responsibility in inculcating human values and social consciousness among our students. Over the past few decades, there has been a growing realization of how integral social sciences and humanities are to the engineering and technology curriculum. This recognition is evident in the increasing emphasis and integration of these disciplines at many well-reputed higher educational institutions in India and around the world.\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'dep_assets/images/depthomeimg.webp', '../assets/images/personimage.png', NULL, NULL, 'Dr. Adam Dasari', '', NULL, NULL, NULL, 'Professor & HoD SSH Dept'),
(17, 'home_1', 'sch6_dept2', 'sch6', 'Food Technology was started in the 2012 in this institution  ', NULL, 'Vision & Mission', '#overlay', 'HoD Message', '#hodoverlay', NULL, NULL, NULL, NULL, NULL, 'To be a leading center of excellence in food technology, recognized globally for fostering innovation and sustainability, advancing food science, and nurturing future leaders to enhance global food security and health. ', NULL, NULL, NULL, 'Our mission is to provide outstanding engineering education that equips students with the knowledge and skills to drive advancements in the food industry; conduct impactful research to develop sustainable technologies that improve nutrition, health, and food security; and foster an environment of innovation and collaboration with industry and communities to create positive change locally and globally. ', NULL, NULL, NULL, 'Our department is committed to nurturing future leaders in food technology by providing a dynamic learning environment that bridges the gap between academia and industry. We encourage our students and faculty to engage in collaborative projects that push the boundaries of knowledge and bring impactful solutions to the food industry.<br><br>I look forward to continuing our journey of excellence and innovation in food technology with the support and enthusiasm of our dedicated faculty, students, and industry partners.<br><br>WE DO ACTIVELY SUPPORT THE FOOD ENTREPRENEUR’S BY OFFERING MUTUAL COLLABORATIONS IN RESEARCH & CONSULTANCY PROJECT.', NULL, NULL, NULL, NULL, NULL, NULL, 'dep_assets/images/depthomeimg.webp', '../assets/images/personimage.png', NULL, NULL, 'Dr. S. Karthikeyan', '', NULL, NULL, NULL, 'Department Coordinator Food Technology, VFSTR '),
(18, 'what_ulearn', 'sch6_dept2', 'sch6', 'What You ll learn', 'Some key learnings that you ll embrace once you get part of us, like Product Development, Sensory Evaluation, Nutrition and Health, Industry Trends and Innovations, Regulatory Affairs, Project Management.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fundamentals of Food Science, Food Processing Techniques', NULL, NULL, NULL, 'Food Safety and Quality Control, Innovative Food Technologies', NULL, NULL, NULL, 'Sustainable Food Systems, Food Engineering Principles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '../assets/images/personimage.png', NULL, NULL, 'Dr. S. Karthikeyan', '', NULL, NULL, NULL, 'Department Coordinator Food Technology, VFSTR '),
(19, 'newpar_whrdostugo', 'sch6_dept2', 'sch6', 'Career Paths After Graduation', 'After graduation, students embark on diverse paths, few enter the workforce to apply their knowledge, while others pursue higher education to deepen their expertise. They shape their futures with purpose and ambition, making impactful strides in their chosen fields.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', NULL, NULL, NULL, ''),
(20, 'newpar_whrdostugo', 'sch5_dept1', 'sch5', 'Career Paths After Graduation', 'After graduation, students embark on diverse paths, few enter the workforce to apply their knowledge, while others pursue higher education to deepen their expertise. They shape their futures with purpose and ambition, making impactful strides in their chosen fields.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', NULL, NULL, NULL, ''),
(21, 'research_1', 'sch6_dept2', 'sch6', 'Unleashing Innovation.', 'Dive into the forefront of innovation within our Computer Science Research Section, where groundbreaking exploration converges with cutting-edge technology. Our researchers push boundaries, unraveling complexities, and pioneering solutions that define the future of computing. Join us in the pursuit of knowledge that transforms ideas into impactful realities, shaping the landscape of technology with every discovery', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dep_assets/images/dept_research.webp', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
(22, 'research_2', 'sch6_dept2', 'sch6', 'Research Projects', 'To identify and cater the needs in the society and to provide cost effective solutions using the advanced technologies and promote the research zeal among the faculty members of Computer Science & Engineering.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
(23, 'exp_faci', 'sch6_dept2', 'sch6', 'Explore Facilities to Support you', 'As a Constituent Institute of VFSTR, Vignan Institute of Law (VIL) was established in the year 2020 approved by Bar Council of India (BCI) and University Grants Commission (UGC). The college is nestled in more than 10 acres of lush green environment. The amalgamation of natural magnificence with modern architectural brilliance and state-of-the-art facilities provides the right atmosphere for the students to grow up through a complete participative learning process. VIL has been set up with a view to advancing as well as disseminating the knowledge of Law and legal processes practiced in India. ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dep_assets/images/expfac_ft_img1.jpg\r\n', 'dep_assets/images/expfac_ft_img2.jpg', 'dep_assets/images/expfac_ft_img3.jpg', 'dep_assets/images/expfac_ft_img4.jpg', NULL, '', NULL, NULL, NULL, NULL),
(24, '6day_jrny', 'sch6_dept2', 'sch6', 'A Journey of Insights and Discoveries', 'Vignan\'s offers a six-day orientation program for new students, featuring goal-setting, lifestyle guidance by the Chancellor, psychological counseling, career development training, Civil Services orientation, sessions by the Vice Chancellor on education quality, stress assessment and management, and discussions on society and nature.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '../assets/images/newstu_img1.webp', '../assets/images/newstu_img2.webp', '../assets/images/newstu_img3.webp', NULL, NULL, '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Id` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(100) DEFAULT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `img1` varchar(100) DEFAULT NULL,
  `img2` varchar(100) DEFAULT NULL,
  `img3` varchar(100) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT '1994-01-01 00:00:00',
  `caption` varchar(100) DEFAULT NULL,
  `hlink` varchar(255) DEFAULT NULL,
  `eve_type` varchar(50) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `event_mode` varchar(255) DEFAULT NULL,
  `summary` varchar(4000) DEFAULT NULL,
  `lecture` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`Id`, `title`, `descr`, `img1`, `img2`, `img3`, `date`, `caption`, `hlink`, `eve_type`, `dept`, `event_mode`, `summary`, `lecture`) VALUES
('events_1', 'ATAL FDP', NULL, NULL, NULL, NULL, '2023-12-18 00:00:00', 'By ECE Department', 'https://vignan.ac.in/atalfdp/', 'academics', 'ece', NULL, NULL, NULL),
('events_10', 'Webinar on IPR & Recent Trends', NULL, NULL, NULL, NULL, '2024-07-10 00:00:00', 'By Law Department', 'https://vignan.ac.in/events/ipr_law.jpg', 'academics', 'law', 'Webinar', NULL, NULL),
('events_11', 'Business Environment', NULL, 'dep_assets/images/gl_img3.webp', NULL, NULL, '2024-07-31 00:00:00', 'by MBA Department', NULL, 'academics', 'mgt', 'guestlec', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights into the transformative power of data exploration.'),
('events_12', 'PESTEL Analysis', NULL, 'dep_assets/images/gl_img1.webp', NULL, NULL, '2024-08-03 10:30:00', 'by MBA Department', NULL, 'academics', 'mgt', 'guestlec', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights into the transformative power of data exploration.'),
('events_13', 'Design Thinking', NULL, 'dep_assets/images/gl_img2.webp', NULL, NULL, '2024-08-03 01:30:00', 'by MBA Department', NULL, 'academics', 'mgt', 'guestlec', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights into the transformative power of data exploration.'),
('events_14', 'Sustainable Business', NULL, 'dep_assets/images/gl_img4.webp', NULL, NULL, '2024-10-08 01:30:00', 'by MBA Department', NULL, 'academics', 'mgt', 'guestlec', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights into the transformative power of data exploration.'),
('events_15', 'National Science Day ', NULL, 'dep_assets/images/phy_eve1.jpg', NULL, NULL, '2024-02-28 10:00:00', 'by Physics Department', NULL, 'academics', 'physics', 'guestlec', 'The National Science Day event comprised an array of engaging activities designed to inspire and challenge participants. The highlight of the event was the series of competitions, including quiz, essay writing, and oral presentations, which provided students with a platform to demonstrate their knowledge, critical thinking skills, and creativity. Additionally, a captivating guest lecture by Dr. P. Rama Subba Reddy on \"Advanced Composite Materials for Defense Applications\" enriched the event, offering valuable insights into cutting-edge research and its practical implications.', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights into the transformative power of data exploration.'),
('events_16', 'Exploring Data for AI: An Induatry Perspective', NULL, 'dep_assets/images/cse_eve_28042023.jpeg', NULL, NULL, '2023-04-28 10:00:00', 'by CSE Department', NULL, 'academics', 'cse', 'guestlec', 'On the 28th of April, 2023, the Department of Computer Science and Engineering at VFSTR organized a guest lecture for third-year students on \"Exploring Data for AI: An Induatry Perspective\". Sri Y Hanumantha Rao, has served as resource person for the session. His session covered the topics of how operating systems are used in our daily lives, with a focus on the applications of DevOps tools, career guidance, and exploring AI tools such as ChatGPT. ', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights into the transformative power of data exploration.'),
('events_17', 'on ‘Data Wrangling*’ and “Software Automation & Testing”', NULL, 'dep_assets/images/cse_eve_11022023.jpeg', NULL, NULL, '2023-02-11 10:00:00', 'by CSE Department', NULL, 'academics', 'cse', 'guestlec', 'Dr. Nagesh Bhatt, Asst. Professor, Department of CSE, NIT, AP has given a session on fundamentals of “Data Wrangling” with a hands-on in the forenoon session. He sessions include various Python Libraries, Data Pre-procession strategies and visualization techniques. The session went on well with extraordinary responses from the students. Further, in the afternoon session, Shri. Bhargav Krishna.Y, Senior quality Engineer, L&TI has given session Software Testing & Automation. In this session, Shri Bhargav has covered various career opportunities available in Testing domain and also, he stressed the Tools & Techniques used in the design and development various business case studies. Prof. K V Krishna Kishore, Head, CSE appreciated the efforts of Mr. O Gandhi and Mr. Ch Ravi Kishore Reddy for the smooth conduction of two Seminars for the technical enrichment of students.', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights into the transformative power of data exploration.'),
('events_18', 'AI is future', NULL, 'dep_assets/images/cse_eve_08052024.jpeg', NULL, NULL, '2022-05-08 10:00:00', 'by CSE Department', NULL, 'academics', 'cse', 'guestlec', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights into the transformative power of data exploration.', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights into the transformative power of data exploration.'),
('events_19', 'IOT 4.0', NULL, 'dep_assets/images/cse_eve_19052022.jpeg', NULL, NULL, '2022-05-20 10:00:00', 'by CSE Department', NULL, 'academics', 'cse', 'guestlec', 'Sri Srinivasa Ramanujam, Delivery Head, Talent Transformation, AWS Business Unit,Bangalore has interacted with 3rd year CSE  students. During the lecture ,Ramanujam has discussed about how IOT4.0  takes the emphasis on digital technology from recent decades to a whole new level with the help of interconnectivity through the Internet of Things (IoT), access to real-time data, and the introduction of cyber-physical systems and also discussed the main purpose of cloud computing in fourth industrial revolution.The session went on interactive and informative way.', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights into the transformative power of data exploration.'),
('events_2', 'eFDP/SDP', NULL, NULL, NULL, NULL, '2024-02-12 00:00:00', 'By BIOTECH Department', 'https://vignan.ac.in/pdf/FLSVAPB%20FDP%20BROCHURE.pdf', 'academics', 'biotech', NULL, NULL, NULL),
('events_20', 'Optical fiber and IOT', NULL, 'dep_assets/images/cse_eve_10092022.jpeg', NULL, NULL, '2022-09-10 10:00:00', 'by CSE Department', NULL, 'academics', 'cse', 'guestlec', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights into the transformative power of data exploration.', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights into the transformative power of data exploration.'),
('events_21', 'Machine Learning', NULL, 'dep_assets/images/cse_eve_10092022.jpeg', NULL, NULL, '2022-02-19 03:00:00', 'by CSE Department', NULL, 'academics', 'cse', 'Webinar', 'Natural Language Processing refers to the branch of artificial intelligence concerned with the ability of computers to understand text and spoken words like how humans understand. NLP deals with various machine learning algorithms to understand, analyze, manipulate, and potentially generate human language. NLP drives computer programs that translate text from one language to another, respond to spoken commands, and summarize large volumes of text in real time. NLP combines computational linguistics—rule-based modeling of human language—with statistical, machine learning, and deep learning models. Together, these technologies enable computers to process human language in the form of text or voice data and to ‘understand’ its full meaning.  This webinar focuses on the discussion on various NLP applications, challenges, machine learning algorithms useful for a wide range of NLP tasks, techniques for word representation and language modelling, and core technologies such as Part-of-Speech tagging and Named Entity Recognition. This will also cover the recent advances and Machine learning algorithms for NLP along with the NLP tools.', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights into the transformative power of data exploration.'),
('events_22', 'Cyber Security', NULL, 'dep_assets/images/eve_wrkshp_01062022.jpeg', NULL, NULL, '2022-06-01 03:00:00', 'by CSE Department', NULL, 'academics', 'cse', 'Workshop', 'This is to immense pleasure to inform that CSE Department has organised \"Workshop on CyberSecurity \"for CyberSecurity Specialized branch on June 1st 2022 at 3PM to 5PM.. through virtually.', 'Embarking on a comprehensive exploration of data within the realm of artificial intelligence, \'Exploring Data for AI: An Industry Perspective\' illuminates the integral role data plays in the ever-evolving landscape of advanced technology. This immersive narrative intricately delves into the multifaceted process of data exploration, where the fusion of understanding, cleaning, and harnessing vast datasets becomes the linchpin for empowering artificial intelligence algorithms. Industry visionaries and experts contribute to this engaging discourse, offering invaluable insights into the transformative power of data exploration.'),
('events_3', 'WAASAGA 2024', NULL, NULL, NULL, NULL, '2024-03-05 00:00:00', 'By ECE Department', 'https://vignan.ac.in/wAASAGA2024/register.php', 'academics', 'ece', NULL, NULL, NULL),
('events_4', 'RDLLCC', NULL, NULL, NULL, NULL, '2024-04-29 00:00:00', 'By English Department', 'https://docs.google.com/forms/d/e/1FAIpQLSc_T53dDsc23vcZ-871WgMKQKPpSn_DTOjoUBql8uuKUPEEcg/viewform', 'academics', 'sh', NULL, NULL, NULL),
('events_5', 'Internship Programme', NULL, NULL, NULL, NULL, '2024-06-01 00:00:00', 'By Biotech Department', 'https://vignan.ac.in/pdf/AOIP-2024_Biotech_Brochure.pdf', 'academics', 'biotech', NULL, NULL, NULL),
('events_6', 'ICETMSC 2024', NULL, NULL, NULL, NULL, '2024-06-20 00:00:00', 'By Maths Department', 'https://docs.google.com/forms/d/e/1FAIpQLSfV8fMqOqyI9N1DLLTd47rhoMajByToycLZrppUH8tOGdPHfA/viewform', 'academics', 'maths', NULL, NULL, NULL),
('events_7', 'Alumni meet 2024', NULL, NULL, NULL, NULL, '2024-07-28 00:00:00', 'By Alumni Association', 'https://forms.gle/Qbb2MKe8PshTFCzP9', 'academics', NULL, 'Others', NULL, NULL),
('events_8', 'National Webinar', NULL, NULL, NULL, NULL, '2024-06-20 00:00:00', 'By Law Department', 'https://vignan.ac.in/events/nationalwebinar_law.jpg', 'academics', 'law', NULL, NULL, NULL),
('events_9', 'National Webinar', NULL, NULL, NULL, NULL, '2024-07-01 00:00:00', 'By Law Department', 'https://vignan.ac.in/events/law_webinar_01072024.jpeg', 'academics', 'law', NULL, NULL, NULL),
('ulife_event1', 'MAHOTSAV', NULL, 'assets/images/ulife_mahotsav.webp', NULL, NULL, '2024-02-01 00:00:00', NULL, NULL, NULL, NULL, 'Others', NULL, NULL),
('ulife_event2', 'AAVEGA', NULL, 'assets/images/ulife_aavega.webp', NULL, NULL, '2023-05-15 00:00:00', NULL, NULL, NULL, NULL, 'Others', NULL, NULL),
('ulife_event3', 'KAIZIEN', NULL, 'assets/images/ulife_kaizien.webp', NULL, NULL, '2024-05-13 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ulife_event4', 'SRUJANANKURA', NULL, 'assets/images/ulife_srujanankura.webp', NULL, NULL, '2023-03-17 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('unires_events1', '20th Jan 2024', 'Exploring Data for AI: An Industry Perspective', 'assets/images/events1.webp', 'assets/images/events2.webp', NULL, '1994-01-01 00:00:00', 'by Sri Y Hanumantha Rao', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `ques` varchar(500) DEFAULT NULL,
  `answer` varchar(2000) DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `page` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `ques`, `answer`, `dept`, `page`) VALUES
(1, 'How can I apply to the Computer Science program?', 'Applications are typically submitted online through the university\'s admission portal. Required documents usually include Class 12th mark sheets, entrance exam scores (such as JEE Main/Advanced for undergraduate programs), and personal statements. Specific details are available on the university\'s admissions page.', 'cse', 'depthome'),
(2, 'What are the admission requirements for the Computer Science department?', 'Admission requirements often include a strong background in mathematics and science. For undergraduate programs, a good score in entrance exams like JEE Main/Advanced or state-level CETs is essential. For postgraduate programs, exams like GATE may be required.', 'cse', 'depthome'),
(3, 'Are there any prerequisites for specific courses within the department?', 'Many advanced courses have prerequisites, including basic programming, data structures, and algorithms courses. The academic advisor or course catalog can provide details on specific prerequisites.', 'cse', 'depthome'),
(4, 'What are the key skills I should develop during my CSE course?', 'Important skills include programming languages (such as Python, Java, C++), data structures and algorithms, database management, software development, and soft skills like teamwork and communication. ', 'cse', 'depthome'),
(5, 'Are there opportunities for entrepreneurship within the CSE department?', 'The university has incubation centers and entrepreneurship cells that support students in starting their ventures. They offer mentorship, funding opportunities, and workshops to nurture innovative ideas.', 'cse', 'depthome'),
(6, 'What is the eligibility criteria for the MBA program?', 'Typically, a bachelor\'s degree in any discipline and a competitive GMAT/GRE score are required. Some programs may also require work experience.', 'mgt', NULL),
(7, 'What are the career prospects after completing an MBA?', 'Career options include management consulting, investment banking, marketing management, financial management, operations management, entrepreneurship, and more.', 'mgt', NULL),
(8, 'How long does the MBA program take to complete?', '2 years long.', 'mgt', NULL),
(9, 'What specializations are available in the MBA program?', 'Common specializations include Finance, Marketing, Human Resources, Operations', 'mgt', NULL),
(10, 'What is the average cost of an MBA program?', 'The cost can vary significantly depending on the institution, ranging from $30,000 to over $100,000 for top-tier programs.', 'mgt', NULL),
(11, 'Are there internship opportunities during the MBA program?', 'Yes, most MBA programs offer internships, which are crucial for gaining practical experience and networking.', 'mgt', NULL),
(12, 'Can I pursue an MBA while working?', 'Yes, many institutions offer part-time, evening, and online MBA programs designed for working professionals.', 'mgt', NULL),
(13, 'What is the difference between an MBA and an Executive MBA (EMBA)?', 'An EMBA is designed for experienced professionals looking to enhance their leadership skills while continuing to work, whereas a traditional MBA may be more suited for those earlier in their careers or looking to make a significant career change.', 'mgt', NULL),
(14, 'How do I become a member of the Library', 'Vignan\'s University faculty, students, and staff are bona-fide members and no other formality is required. As soon as you get your ID card, please visit the library once to activate your membership.', NULL, 'library'),
(15, 'How do I search books', '1. Go to library home page. There is a search box with caption \"Search Catalogue (OPAC)\". Enter a word or words from title or subject or author of a book you like to search. Press enter. It will list all books matching the words you input.</br></br>\n2. You can also click on \"Advanced Search\" just below the search box. It will take you to another page \"Web OPAC Page\". It provides Advanced Search option.</br></br>\n3. In Simple Search, you can search books by Author, Title (any word in the title, s', NULL, 'library'),
(16, 'What is OPAC', 'OPAC stands for Online Public Access Catalogue. This is a database of all books, theses,Journals back volumes, CD\'s & DVD\'s etc. available in the library. It enables speedy searching of a particular book, books on a given subject, and/or a book by an author.', NULL, 'library'),
(17, 'How do I Know what e-books are available / accessible to VU users', 'Go to library online Resource page. Click E-Books.', NULL, 'library'),
(18, 'How do I Borrow books', 'Go to the library, pick up the books you like to borrow, carry these books to the Circulation Counter. Show your ID Card. The library staff will assist you in getting these books issued to you.', NULL, 'library'),
(19, 'What are the Issue / Return Timings of the library', '9.00 AM - 6.00 PM (9 hrs) on all working days', NULL, 'library'),
(20, 'How do I renew / re - issue books I have already barrowed', 'Off-line - Bring all books back to the library and get them one time renewed at the Circulation Counter.', NULL, 'library'),
(21, 'How many books can I borrow', 'Faculty can borrow 10 books, UG Students (I,II,III Years) eligible for 3 books ,IVth Year Students eligible for 4 books and PG Students can borrow 5 books and Scholars and PDFs can borrow 5 books. More details can be seen at \"Circulation Counter\" .', NULL, 'library'),
(22, 'Is there a fine for late return (Over-due) of books', 'Yes, a member is required to pay late fee, as per the late fee structure, if he/she fails to return the books within prescribed period of time. Members can consult the library staff to know their overdue charges at Circulation Counter.', NULL, 'library'),
(23, 'How / where do I pay Library dues', 'Library dues (late fees/cost of lost books etc) can be paid at Circulation Counter in cash on the Ground floor of the Library.', NULL, 'library'),
(24, 'How do I borrow the reference books', 'Reference books are issued only to the faculty, Scholars and students for overnight or before the holidays at the time of closing the library can borrow the book (s).', NULL, 'library'),
(25, 'How do I refer to Dissertations/ theses & Journals Back Volumes', 'Vignan\'s University Faculty, students and staff can refer to dissertations, theses, Journals Back Volumes which are kept in Reference Section (Ground floor) .', NULL, 'library'),
(26, 'How do I replace a lost book (What am I required to do for a lost book)', 'The latest procurement cost will be intimated to the member and he/she has to pay the double cost of book or the member can buy the same New Book and it can be Replaced.', NULL, 'library'),
(27, 'How do I recommend a book for purchase in the Library', 'Faculty and Students can recommend books (aSuggestion book is available in Circulation Counter) for purchase by the library or through the LAC (Library Advisory Committee)', NULL, 'library'),
(28, 'Are E-RESOURCES accessible to all the users ', 'E-Resources are accessible only to Vignan\'s University students and faculty on the campus (IP Based) . However, others can request copies of articles from the E-Resources and the library will download and supply them (Inter Library loan members) to the users on personal request.', NULL, 'library'),
(29, 'Can the Library borrow documents from other libraries', 'Yes, the Library can arrange books and copies of articles on inter-library loan from other libraries.', NULL, 'library');

-- --------------------------------------------------------

--
-- Table structure for table `importantdates`
--

CREATE TABLE `importantdates` (
  `Id` varchar(100) NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '1994-01-01 00:00:00',
  `title` varchar(100) DEFAULT NULL,
  `descr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `importantdt`
--

CREATE TABLE `importantdt` (
  `id` int(11) NOT NULL,
  `cnfrnc_id` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `importantdt`
--

INSERT INTO `importantdt` (`id`, `cnfrnc_id`, `date`, `desc`) VALUES
(1, 'conf_phy1', '2019-05-25 00:00:00', 'Call for Abstracts'),
(2, 'conf_phy1', '2019-05-31 00:00:00', 'Deadline for Abstract Submission'),
(3, 'conf_phy1', '2019-06-14 00:00:00', 'Deadline for full paper submission'),
(4, 'conf_phy1', '2019-06-10 00:00:00', 'Early bird registration');

-- --------------------------------------------------------

--
-- Table structure for table `modals`
--

CREATE TABLE `modals` (
  `id` int(11) NOT NULL,
  `modal_id` varchar(100) DEFAULT NULL,
  `mdl_title` varchar(300) DEFAULT NULL,
  `mdl_descr` varchar(3000) DEFAULT NULL,
  `img1` varchar(100) DEFAULT NULL,
  `uni1_nm` varchar(100) DEFAULT NULL,
  `hlink1` varchar(300) DEFAULT NULL,
  `img2` varchar(100) DEFAULT NULL,
  `uni2_nm` varchar(100) DEFAULT NULL,
  `hlink2` varchar(300) DEFAULT NULL,
  `img3` varchar(100) DEFAULT NULL,
  `uni3_nm` varchar(100) DEFAULT NULL,
  `hlink3` varchar(300) DEFAULT NULL,
  `img4` varchar(100) DEFAULT NULL,
  `uni4_nm` varchar(100) DEFAULT NULL,
  `hlink4` varchar(300) DEFAULT NULL,
  `img5` varchar(100) DEFAULT NULL,
  `uni5_nm` varchar(100) DEFAULT NULL,
  `hlink5` varchar(300) DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modals`
--

INSERT INTO `modals` (`id`, `modal_id`, `mdl_title`, `mdl_descr`, `img1`, `uni1_nm`, `hlink1`, `img2`, `uni2_nm`, `hlink2`, `img3`, `uni3_nm`, `hlink3`, `img4`, `uni4_nm`, `hlink4`, `img5`, `uni5_nm`, `hlink5`, `dept`) VALUES
(1, '#joincmpny', 'Join a Company', 'Explore our Food Technology Department\'s success stories! Our graduates have secured positions in leading food and non-food industries, including renowned names such as Continental Coffee Pvt Ltd, ID Fresh Foods, Thinking Forks Pvt Ltd.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'FT'),
(2, '#higedu', 'For Higher Education', 'Higher education opens doors to deeper exploration, research, and specialization, providing individuals with the expertise and credentials necessary to excel in their careers or pursue advanced academic endeavors', 'dep_assets/images/stanford.webp', 'Montclair State University Newjersey USA', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjWlZzB3OuGAxUW5DQHHUylD2IQFnoECBAQAQ&url=https%3A%2F%2Fwww.montclair.edu%2F&usg=AOvVaw3DmNZI1TCFvjBFGAvIUmg3&opi=89978449', 'dep_assets/images/stanford.webp', 'Royal Melbourne Institute of Technology', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiVqtWA3euGAxXIxTgGHZIsBMQQFnoECEwQAQ&url=https%3A%2F%2Fwww.rmit.edu.au%2F&usg=AOvVaw3amaaiuD-3NWrX8qC3p9Wi&opi=89978449', 'dep_assets/images/stanford.webp', 'Texas Tech University', 'https://www.ttu.edu/', 'dep_assets/images/stanford.webp', 'IIT, Guwahati ', 'https://www.bing.com/ck/a?!&&p=a1f308af26c8bbb7JmltdHM9MTcxODg0MTYwMCZpZ3VpZD0yYzdiYmRhNC1jNDRmLTY2YjItMWQ5Yy1hZTU5YzVmZDY3YmQmaW5zaWQ9NTIyNA&ptn=3&ver=2&hsh=3&fclid=2c7bbda4-c44f-66b2-1d9c-ae59c5fd67bd&psq=%e2%80%a2+IIT%2c+Guwahati&u=a1aHR0cHM6Ly93d3cuaWl0Zy5hYy5pbi8&ntb=1', 'dep_assets/images/stanford.webp', 'Gulu university', 'https://www.bing.com/ck/a?!&&p=0e834de46b7997e4JmltdHM9MTcxODg0MTYwMCZpZ3VpZD0yYzdiYmRhNC1jNDRmLTY2YjItMWQ5Yy1hZTU5YzVmZDY3YmQmaW5zaWQ9NTI0NA&ptn=3&ver=2&hsh=3&fclid=2c7bbda4-c44f-66b2-1d9c-ae59c5fd67bd&psq=Gilu+univeristy&u=a1aHR0cHM6Ly9ndS5hYy51Zy8&ntb=1', 'FT'),
(3, '#acad', 'Academia and Research', 'Their experiences and accomplishments serve as inspirations to current and future students, illustrating the transformative power of education and the limitless opportunities it offers for personal and professional development.', 'dep_assets/images/stanford.webp', 'CFTRI', 'https://www.bing.com/ck/a?!&&p=77bf310a38055b3dJmltdHM9MTcxODkyODAwMCZpZ3VpZD0yYzdiYmRhNC1jNDRmLTY2YjItMWQ5Yy1hZTU5YzVmZDY3YmQmaW5zaWQ9NTIxNw&ptn=3&ver=2&hsh=3&fclid=2c7bbda4-c44f-66b2-1d9c-ae59c5fd67bd&psq=%e2%80%a2%09CFTRI&u=a1aHR0cHM6Ly93d3cuY2Z0cmkucmVzLmluLw&ntb=1', NULL, 'DFRL', 'https://www.bing.com/ck/a?!&&p=c59cccdaf8d10cf5JmltdHM9MTcxODkyODAwMCZpZ3VpZD0yYzdiYmRhNC1jNDRmLTY2YjItMWQ5Yy1hZTU5YzVmZDY3YmQmaW5zaWQ9NTIxMw&ptn=3&ver=2&hsh=3&fclid=2c7bbda4-c44f-66b2-1d9c-ae59c5fd67bd&psq=%e2%80%a2%09DFRL&u=a1aHR0cHM6Ly9kcmRvLmdvdi5pbi9kcmRvL2xhYnMtYW5kLWVzdGFibGlzaG1lbnRzL2RlZmVu', NULL, 'IIMR', 'https://www.bing.com/ck/a?!&&p=1374c5c4591aecb8JmltdHM9MTcxODkyODAwMCZpZ3VpZD0yYzdiYmRhNC1jNDRmLTY2YjItMWQ5Yy1hZTU5YzVmZDY3YmQmaW5zaWQ9NTIyNQ&ptn=3&ver=2&hsh=3&fclid=2c7bbda4-c44f-66b2-1d9c-ae59c5fd67bd&psq=%e2%80%a2%09IIMR&u=a1aHR0cHM6Ly93d3cubWlsbGV0cy5yZXMuaW4v&ntb=1', NULL, 'NIT Rourkela', 'https://www.bing.com/ck/a?!&&p=d1d6339c5c7b30e5JmltdHM9MTcxODkyODAwMCZpZ3VpZD0yYzdiYmRhNC1jNDRmLTY2YjItMWQ5Yy1hZTU5YzVmZDY3YmQmaW5zaWQ9NTIyNg&ptn=3&ver=2&hsh=3&fclid=2c7bbda4-c44f-66b2-1d9c-ae59c5fd67bd&psq=%e2%80%a2%09NIT+Rourkela&u=a1aHR0cHM6Ly9uaXRya2wuYWMuaW4v&ntb=1 ', NULL, NULL, NULL, 'FT');

-- --------------------------------------------------------

--
-- Table structure for table `naac`
--

CREATE TABLE `naac` (
  `id` int(11) NOT NULL,
  `metricno` varchar(255) DEFAULT NULL,
  `qnqi` varchar(10) DEFAULT NULL,
  `descr` varchar(1000) NOT NULL,
  `pageno` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `naac`
--

INSERT INTO `naac` (`id`, `metricno`, `qnqi`, `descr`, `pageno`) VALUES
(1, '1.1.1', 'QI', 'Curricula developed and implemented  have relevance to the local, national, regional and global developmental needs which  is reflected in Programme outcomes (POs), Programme Specific Outcomes(PSOs) and Course Outcomes(COs) of the Programmes offered by the University', 'cy2_card1'),
(2, '1.1.2', 'Qn', 'Percentage of Programmes where syllabus revision was carried out during the last five years', 'cy2_card1'),
(3, '1.1.3', 'Qn', 'Average percentage of courses having focus on employability/ entrepreneurship/ skill development offered by the University', 'cy2_card1'),
(4, '	\r\n1.2.1', 'Qn', 'Percentage of new courses introduced of the total number of courses across all programs offered during the last five years', 'cy2_card1'),
(5, '1.2.2', 'Qn', 'Percentage of Programmes in which Choice Based Credit System (CBCS)/elective course system has been implemented  (Data for the latest completed academic year)', 'cy2_card1'),
(6, '1.3.1', 'Qn', 'Institution integrates crosscutting issues relevant to Professional Ethics ,Gender, Human Values ,Environment and Sustainability into the Curriculum', 'cy2_card1'),
(7, '1.3.2', 'Qn', 'Number of value-added courses for imparting transferable and life skills offered during last five years', 'cy2_card1'),
(8, '1.3.3', 'Qn', 'Average Percentage of students enrolled in the courses under 1.3.2 above', 'cy2_card1'),
(9, '1.3.4', 'Qn', 'Percentage  of students undertaking  field projects / research projects / internships  (Data for the latest completed  academic year)', 'cy2_card1'),
(10, '1.4.1', 'Qn', 'Structured feedback for design and review of syllabus  semester wise / year wise is received from<br>\r\n          1) Students &emsp;&emsp;        2) Teachers,  &emsp;&emsp;      3) Employers,  &emsp;&emsp;       4) Alumni', 'cy2_card1'),
(11, '1.4.2', 'Qn', 'Feedback processes of the institution may be classified as follows:', 'cy2_card1'),
(12, '1.1', '', 'Number of Programmes offered year wise for last five years', 'cy2_card2'),
(13, '1.2', '', 'Number of departments offering academic programmes', 'cy2_card2'),
(14, '2.1', '', 'Number of students year wise during the last five years', 'cy2_card2'),
(15, '2.2', '', 'Number of outgoing / final year students year wise during the last five years', 'cy2_card2'),
(16, '2.3', '', 'Number  of  students  appeared  in  the  University  examination  year  wise  during  the  last  five years', 'cy2_card2'),
(17, '2.4', '', 'Number of revaluation applications year wise during the last 5 years', 'cy2_card2'),
(18, '3.1', '', 'Number of courses in all Programmes year wise during the last five years', 'cy2_card2'),
(19, '3.2', '', 'Number of full time teachers year wise during last five years', 'cy2_card2'),
(20, '3.3', '', 'Number of sanctioned posts year wise during the last five years', 'cy2_card2'),
(21, '4.1', '', 'Number of eligible applications received for admissions to all the Programmes year wise during the last five years', 'cy2_card2'),
(22, '4.2', '', 'Number of seats earmarked for reserved category as per GOI/State Govt rule year wise during the last five years', 'cy2_card2'),
(23, '4.3', '', 'Total number of classrooms and seminar halls', 'cy2_card2'),
(24, '4.4', '', 'Total number of computers in the campus for academic purpose', 'cy2_card2'),
(25, '4.5', '', 'Total Expenditure excluding salary year wise during the last five years (INR in Lakhs)', 'cy2_card2'),
(26, '2.1.1', 'Qn', 'Demand Ratio (Average of last five years)', 'cy2_card3'),
(27, '2.1.2', 'Qn', 'Average percentage of seats filled against reserved categories (SC, ST, OBC, Divyangjan, etc.) as per applicable reservation policy during the last five years (Excluding Supernumerary Seats)', 'cy2_card3'),
(28, '2.2.1', 'QI', 'The institution assesses the learning levels of the students and  organises special Programmes for advanced learners and slow learners.', 'cy2_card3'),
(29, '2.2.2', 'Qn', 'Student - Full time teacher ratio (Data for the latest completed academic year)', 'cy2_card3'),
(30, '2.3.1', 'QI', 'Student centric methods, such as experiential learning, participative learning and problem solving methodologies are used for enhancing learning experiences', 'cy2_card3'),
(31, '2.3.2', 'Qn', 'Teachers use ICT enabled tools including online resources for effective teaching and learning processes  (Write description in maximum of 500 words)', 'cy2_card3'),
(32, '2.3.3', 'Qn', 'Ratio of students to  mentor  for academic and other related issues   (Data for the latest completed academic  year data)', 'cy2_card3'),
(33, '2.4.1', 'Qn', 'Average percentage of full time teachers against sanctioned posts during the last five years', 'cy2_card3'),
(34, '2.4.2', 'Qn', 'Average percentage of full time teachers with Ph.D./D.M/M.Ch./D.N.B Superspeciality/D.Sc./D’Lit. during the last five years', 'cy2_card3'),
(35, '2.4.3', 'Qn', 'Average teaching experience of full time teachers in the same institution (Data for the latest completed academic year in number of years)', 'cy2_card3'),
(36, '2.4.4', 'Qn', 'Average percentage of full time teachers who received awards, recognition, fellowships at State, National, International level from Government/Govt. recognised bodies during the last five years', 'cy2_card3'),
(37, '2.5.1', 'Qn', 'Average number of days from the date of last semester-end/ year- end examination till the declaration of  results during the last  five years', 'cy2_card3'),
(38, '2.5.2', 'Qn', 'Average percentage of student complaints/grievances about evaluation against total number appeared in the examinations during the last five years', 'cy2_card3'),
(39, '2.5.3', 'QI', 'IT integration and reforms in the examination procedures and processes (continuous internal assessment and end-semester assessment) have brought in considerable improvement in examination management system of the institution (Write description in maximum of 500 words)', 'cy2_card3'),
(40, '2.5.4', 'QI', 'Status of automation of Examination division along with approved Examination Manual', 'cy2_card3'),
(41, '2.6.1', 'QI', 'The institution has stated learning outcomes  (generic and programme specific)/graduate attributes which are integrated into the assessment process and widely publicized through the website and other documents', 'cy2_card3'),
(42, '2.6.2', 'QI', 'Attainment of Programme outcomes, Programme specific outcomes and course outcomes are evaluated by the institution', 'cy2_card3'),
(43, '2.6.3', 'Qn', 'Pass percentage of students (Data for the latest completed academic year)', 'cy2_card3'),
(44, '2.7.1', 'Qn', 'Online student satisfaction survey regarding teaching learning process. (Online survey to be conducted)', 'cy2_card3');

-- --------------------------------------------------------

--
-- Table structure for table `naac_link`
--

CREATE TABLE `naac_link` (
  `lid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `link_nm` varchar(255) NOT NULL,
  `hlink` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `naac_link`
--

INSERT INTO `naac_link` (`lid`, `id`, `link_nm`, `hlink`) VALUES
(1, 1, 'Flow chart for the process of curriculum design', 'https://vignan.ac.in/naacdownload/Flow%20chart%20for%20the%20process%20of%20curriculum%20design.pdf'),
(2, 1, 'POs, PSOs, PEOs of all the programmes', 'https://vignan.ac.in/naacdownload/POs,%20PSOs,%20PEOs%20of%20all%20the%20programmes.pdf'),
(3, 2, '2020', 'https://vignan.ac.in/naacdownload/Minutes%20of%20Academic%20Council%202020.pdf'),
(4, 2, '2019', 'https://vignan.ac.in/naacdownload/Minutes%20of%20Academic%20Council%202019.pdf'),
(5, 2, '2018', 'https://vignan.ac.in/naacdownload/Minutes%20of%20Academic%20Council%202018.pdf'),
(6, 2, '2017', 'https://vignan.ac.in/naacdownload/Minutes%20of%20Academic%20Council%202017.pdf'),
(7, 2, '2016', 'https://vignan.ac.in/naacdownload/Minutes%20of%20Academic%20Council%202016.pdf'),
(8, 2, '2015', 'https://vignan.ac.in/naacdownload/Minutes%20of%20Academic%20Council%202015.pdf'),
(9, 2, '2014', 'https://vignan.ac.in/naacdownload/Minutes%20of%20Academic%20Council%202014.pdf'),
(10, 2, '2013', 'https://vignan.ac.in/naacdownload/Minutes%20of%20Academic%20Council%202013.pdf'),
(11, 2, 'Syllabus revision (Registrar Letter)', 'https://vignan.ac.in/naacdownload/Syllabus%20revision%20(Registrar%20Letter).pdf'),
(12, 3, 'Syllabus of courses', 'https://vignan.ac.in/naacdownload/Syllabus%20of%20courses.pdf'),
(13, 3, 'MoU\'s', 'https://vignan.ac.in/naacdownload/MoU\'s.pdf'),
(14, 4, 'New courses (Registrar Letter)', 'https://vignan.ac.in/naacdownload/New%20courses%20(Registrar%20Letter).pdf'),
(15, 5, 'Minutes of Academic Council', 'https://vignan.ac.in/naacdownload/Minutes%20of%20Academic%20Council.pdf'),
(16, 5, 'CBCS (Registrar Letter)', 'https://vignan.ac.in/naacdownload/CBCS%20(Registrar%20Letter).pdf'),
(17, 5, 'Programme Structure', 'https://vignan.ac.in/naacdownload/Programme%20Structure.pdf'),
(18, 6, 'Course on Environment, gender equity, human values', 'https://vignan.ac.in/naacdownload/Course%20on%20Environment,%20gender%20equity,%20human%20values.pdf'),
(19, 6, 'Environment and gender Policies', 'https://vignan.ac.in/naacdownload/Environment%20and%20gender%20Policies.pdf'),
(20, 7, 'Brochures of Value Added Courses (2019-20)', 'https://vignan.ac.in/naacdownload/Brochures%20of%20Value%20Added%20Courses%20(2019-20).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `naac_tg`
--

CREATE TABLE `naac_tg` (
  `id` int(11) NOT NULL,
  `pid` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `naac_tg`
--

INSERT INTO `naac_tg` (`id`, `pid`, `title`) VALUES
(1, 'cy2_card1', 'Circular Aspects'),
(2, 'cy2_card2', 'Extended Profile'),
(3, 'cy2_card3', 'Teaching & Evaluation'),
(4, 'cy2_card4', 'Research, Innovation & Extensions'),
(5, 'cy2_card5', 'Infrastructure & Learning Resources'),
(6, 'cy2_card5', 'Student Support & Progression'),
(7, 'cy2_card7', 'Governance, Leadership & Management'),
(8, 'cy2_card8', 'Institutional Values & Best Practices'),
(9, 'cy1_card1', 'Circular Aspects'),
(10, 'cy1_card2', 'Extended Profile'),
(11, 'cy1_card3', 'Teaching & Evaluation'),
(12, 'cy1_card4', 'Research, Innovation & Extensions'),
(13, 'cy1_card5', 'Infrastructure & Learning Resources'),
(14, 'cy1_card5', 'Student Support & Progression'),
(15, 'cy1_card7', 'Governance, Leadership & Management'),
(16, 'cy1_card8', 'Institutional Values & Best Practices');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `subheading` varchar(65) DEFAULT NULL,
  `descr` varchar(6000) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(255) NOT NULL,
  `deptname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `subheading`, `descr`, `date`, `img`, `active`, `type`, `deptname`) VALUES
(1, 'State Level Conference', 'Vignan Pharmacy has State Level Conference for the first time', 'Gokaraju Gangaraju, CMD of Laila Group Companies suggested that students should be honest and dedicated towards the pharmacy profession. The first two-day state-level conference on \"Recent Trends in Pharmaceutical and Applied Sciences for Global Development\" was held under the joint auspices of Akhil Bharat Vidyarthi Parishad (ABVP) and Vigyans Colleges of Chebrolu Mandal Vadlamudi Vigyans University Farence Sunday ended on a grand note. Gokaraju Gangaraju, CMD of Laila Group of Companies, who attended the program as the chief guest, said that students should acquire enough knowledge and skills from different parts of the world to benefit the Indian population. Emphasizes hard work, discipline and commitment to work to achieve success in life. <br><br>More than 600 students from various pharmacy institutions participated in the oral and poster presentations, quiz competitions, interactive technology demonstrations and innovation demonstrations organized for the students as part of the conference. The winners were presented with certificates of appreciation and cash prizes of Rs.8000 for the first prize, Rs.6000 for the second prize and Rs.4000 for the third prize. ABVP State Organizing Secretary, Central Executive Member, Dharmapracharak Ramineni, Chairman of Ramineni Foundation, Dr. P Muralidharan, Head of Department of Biotechnology, Bapatla College of Pharmacy, S. Ramachandra Shetty, MD, Government College of Pharmacy, Bangalore were present in the program Y Ramachandra Reddy, University Vice-Chancellor Professor P. Nagabhushan, Registrar Dr. MS Raghunathan, Deans, Heads and students of the respective departments participated.', '2024-03-24 00:00:00', 'assets/images/DSC_813.webp', 0, 'academics', NULL),
(2, 'MOU related to Sports', 'Vignan made a MoU with Elite Universal', 'Chebrolu Mandal Vadlamudi Science University – Delhi\'s Elite Universal Sports Alliance India Pvt Ltd signed a Memorandum of Understanding on Thursday. In a program arranged on this occasion, Dr. MS Raghunathan, Registrar of Vignan\'s University exchanged MoUs with Mohit Singh, CEO of Elite Universal Sports Alliance India Private Limited. Registrar Dr. MS Raghunathan said that this MoU will provide a unique platform for university athletes to showcase their talent at the national level. It is said that aspiring athletes will be identified and their talent and sportsmanship will be developed and more opportunities will be provided at the national and international level. He said that there will be four leagues namely Basketball, Volleyball, E-Sports and Kabaddi. Each team will have the opportunity to play 5-6 matches in the league. Because of this Elite Power Sports will provide a platform to the athletes and bear all their expenses. <br><br>Mohit Singh, CEO of Elite Universal Sports Alliance India Pvt Ltd said that he is very happy to sign the MoU with Vignan\'s University. The aim of this agreement is to encourage the youth. He highlighted that the matches they conduct will be telecasted live on various channels. Additionally, athletes can assess their strengths and weaknesses by watching match previews and recordings. He said that this MoU will serve as a platform to recruit top talent. They said that their aim is to give training to the athletes in such a way that they can win medals in the Olympics. Deans and heads of the respective departments participated in the program.', '2024-03-21 00:00:00', 'assets/images/DSC_7222.webp', 0, 'students', NULL),
(3, 'Pharmacy CSC MOU', 'Vignan Pharmacy made a MoU with CSC Academy', 'Chebrolu Mandal Vadlamudi Science Pharmacy College has signed an MoU with CSC (Common Service Center) Academy in Visakhapatnam, which is run by the Ministry of Electronics and IT, Government of India, on Monday, said College Principal Dr. P.Srinivasababu. In the program organized on this occasion, the principal of the college, Dr. P. Srinivasababu, exchanged documents related to the MoU with CSC Academy Virtual Learning Executive Ram Mohan Rao. On this occasion, Principal Dr. P. Srinivasababu said that due to this MoU, students will be provided free training on the rapidly developing Internet of Things, 3D printing and robotic processing technology. <br><br>Certificates will be given to the students who have completed the training. It has been informed that special programs will be organized in colleges and virtual but with mutual understanding to be useful for students and teachers. CSC Academy Virtual Learning Executive Ram Mohan Rao said that in today\'s society students should embrace the technology coming in the digital world regardless of industry or profession. We are happy to partner with Vigyans College of Pharmacy in an effort to enhance the skills of students. Deans and heads of the respective departments participated in the program.', '2024-03-18 00:00:00', 'assets/images/MOU PHOTO.webp', 0, 'academics', NULL),
(4, 'What\'s Up in Department.', 'Law Department has conducted a guest lecture', 'Telangana High Court Advocate Asad Hussain said that if students want to practice corporate law, they should have a proper understanding of the law of contracts. Chebrolu Mandal organized a special guest lecture program on “Corporate Legal Practice and General Litigation” under the auspices of Law Department of Vadlamudi Science University. Telangana High Court Advocate Asad Hussain, who was the chief guest of the program, spoke about the challenges that students have to face after entering the legal profession. Students are advised to first understand the basics of law if they want to fight for people. Explained the interrelationship of Civil Procedure Code, Criminal Procedure and Corporate Laws and emerged as the foundation of legal practice. He explained the basic structure and legal responsibilities of companies as well as their working. <br><br>He gave practical examples to the students of how disputes arise and legal procedures are initiated in cases like company board resolutions, forgery cases, negotiable instruments etc. Also informed about various disputes like incorporation of company, suppression, misappropriation, shareholding etc. A corporate lawyer also explained the procedural aspects to the students like knowing the jurisdiction of the court, applicable rules, court etiquette etc. In the program, the staff and students of Vignan\'s Institute of Law participated in the lecture.', '2024-03-16 00:00:00', 'assets/images/DSC_683.webp', 0, 'academics', NULL),
(5, 'International Guest Lecture', 'BioTech has conducted an International guest lecture', 'Professor Patrick Phelan, Assistant Dean of Mechanical and Aero Space Engineering, Arizona State University, USA, said that AI (Artificial Intelligence) will kill the whole world in the future. A special guest lecture program on \"The Future of Artificial Intelligence and Engineering at Arizona State University\" was held on Wednesday under the joint auspices of the School of Advances Computer Science Engineering and Department of Biotechnologies in Vadlamudi Science University, Chebrolu Mandal. Professor Patrick Phelan, Assistant Dean of Mechanical and Aero Space Engineering, Arizona State University, USA, who attended the program as the chief guest, said that at present, organizations are looking at candidates only if they have AI and machine learning skills. There is no doubt that the whole world will revolve around artificial intelligence in the near future. <br><br>Recently, some companies have revealed that recruiters are using AI technology in selecting the human resources they need. He said that AI technology will enhance the marketing efficiency and track the sentiments of the consumers and their buying habits in advance and provide them to the companies. It is known that many new and innovative job profiles are likely to become available if AI technology becomes available. After that, the chief guest was honored. Arizona State University, USA, Graduate and International Transfer Recruitment Associate Director, Chester Henderson, Arizona State University, USA, Representative, Roshan Lalan, University Vice-Chancellor, Prof. P. Nagabhushan, Registrar, Dr. MS Raghunathan, Deans, Heads, and students of the respective departments were present in the program participated.', '2024-03-13 00:00:00', 'assets/images/1.webp', 0, 'academics', NULL),
(6, 'What\'s Up in Department.', 'Women\'s Day Celebration in Vignan', 'DRDO, CMSDS Director Dr. Madhumita Chakraborty said that women should not wait for anyone for opportunities, women can achieve anything if they increase their knowledge and skills. International Women\'s Day was celebrated on Thursday under the auspices of Women Empowerment and Development Cell at Vignan\'s University in Vadlamudi, Chebrolu Mandal. First the program was started by lighting the lamp. This year\'s Women\'s Day celebrations were organized with the theme Inspire Inclusion. Dr. Madhumita Chakraborty, Director of DRDO, CMSDS, who attended the program as the chief guest, said that women should fight hard for problems in life and society. Women should always keep their emotions under control. They want to increase their strengths and overcome their weaknesses. <br><br> Balakrishna Koduru, director of Avinaya Naturals Private Limited, who attended the program as the guest of honour, said that women have diverse leadership qualities. She said that many women are creating history as leaders of the country and changing the stage and direction of the nation. She said that women are the embodiment of power by nature. Later, prizes were awarded to the students and teachers who won the competitions held on the occasion of Women\'s Day. The chief guests who attended the program were felicitated. Vignan’s University Vice Chancellor Professor P. Nagabhushan, Registrar Dr. MS Raghunathan, Deans, Heads, faculty members and students of the respective departments participated in the program.', '2024-03-07 00:00:00', 'assets/images/womensday-2024.jpeg', 0, 'all', NULL),
(7, 'IIT JEE Results', 'Vignan students have cleared IIT JEE Mains', 'G. Srikurmanath, Coordinator of Vignan\'s Educational Institutions, said that their students have performed well in the national level IIT JEE Mains examination held in the month of January 2024. He held a congratulatory meeting with the students of Vignan\'s Mahila Junior Colleges in Chebrolu and Guntur on Tuesday at Inter College in Vadlamudi, Chebrolu Mandal. In the program organized on this occasion, Vignan\'s Junior College Principal J. Mohana Rao and Women\'s College Principal Y. Venkateswara Rao said that in the January 2024 IIT JEE Mains exam results, their college\'s I. Haneeth (99.67), M. Sneha (99.46), Rohan (98.48), K. Lilavati (98.30), B. Yoga Vijay Kumar (98.07), S.Venkata Gayathri (96.32), A.Deepika (95.78) and T.Sanjay Teja (94.71), P. Gautam (94.61), M. Nagasai Prakash (93.66), V. Abhiram (93.57), Naga Manasa (93.56), A. Chandrika (93.07), A. Thafil (93.50), G. Vaishali (92.76), C. .Revanth (92.11), G. Pullareddy (92.05), V. Nandini (91.60), Y. Nagakarthikeya (90.96) have created a sensation with their percentile.<br><br> In the IIT JEE Mains results, it was revealed that 25 percent of the students from their college scored more than 90 percent percentile. They said that they have achieved these extraordinary results with ordinary students. They said that as a result of the special training they are giving for the competitive exams, their students are able to excel in the national level competitions. It has been mentioned that more than 30 mock tests have been conducted for the students in the college so that they can verify the IIT JEE Mains results. Dr. Lavu Rattaiah, Vice-Chairman of Vignan\'s Educational Institutions, Lavu Srikrishna Devarayalu, teaching staff and students congratulated the students who showed their talent.', '2024-02-13 00:00:00', 'assets/images/news1-5.jpg', 0, 'students', NULL),
(8, 'An Interaction program', 'Vignan conducted Industry academia interaction', '“Industry Academia Interaction Program\" was organized on Wednesday under the auspices of the School of Agriculture and Food Technology of Vadlamudi Science University, Chebrolu Mandal. Dr. Ravi Khetarpal, Executive Director of APARI (Asia-Pacific Association of Agricultural Research Institutes) in Bangkok, who attended the program as the chief guest, said that the best results can be achieved technically if students are taught the curriculum not only by teachers but also by industry leaders. He said that if more MoUs are formed with industries, it will be possible to provide students with practical knowledge skills and send them for internships. He said that currently there is a shortage of candidates in the industries... Skilled candidates will get good opportunities. <br><br>President of AP Chamber of Commerce, Potluri Bhaskara Rao, who attended the program as the guest of honour, said that the students studying agriculture should provide necessary research technologies to the farmers and teach them marketing skills. Later, the chief guests were felicitated. Dr. KPC Rao, former scientist of ICRISAT, Hyderabad, Dr. KP Vidhu, IIT Kharagpur, Prof. P. Srinivasa Rao, Vignan’s University Vice Chancellor, Prof. P. Nagabhushan, Registrar, Dr. MS Raghunathan, Deans, Heads of the respective departments were present in the program Staff participated.', '2024-02-14 00:00:00', 'assets/images/news1-4.jpg', 0, 'students', NULL),
(9, 'Student Ph.D News', 'Vignan Student acheived Ph.D degree', 'Vignan\'s University, Chebrolu Mandal Vadlamudi Vignan\'s University – Vice Chancellor Professor P. Nagabhushan said that Garigipati Prithvi Raju, a student from the Department of Mechanical Department of Core Engineering, was awarded the PhD degree by Vignan\'s University on Friday. In the program organized on this occasion, he informed that he has done research on \"Preparation, Characterization and Computational Machining Studies on Aluminum Silicon 7-Silicon Carbide Composite\". It is stated that former professor K. Balamurugan of the Mechanical Department of Vignan\'s University acted as his guide. The deans, heads and teachers of the respective departments felicitated Garigipati Prithvi Raju who received the PhD degree.', '2024-02-16 00:00:00', 'assets/images/news1-2.jpg', 0, 'students', NULL),
(10, 'Staff won Cricket Match', 'Vignan Faculty won by Chandus Cricket Cup.', 'Vignans University won the 27th edition of the Chandoo\'s Silver Cup cricket tournament for faculty organized by JKC College, Guntur for the second time in a row and retained the trophy. In the final match held at the cricket ground of the local JKC College, Vadlamudi Science University team won by 94 runs against Narasa Rao pet Engineering College team. Batting first in the final match, the Vignan’s University team scored 206 runs without losing wickets in the allotted 20 overs. S.Vinoth, the batsman of Vignan\'s University scored a huge century with 100 (10 fours and 4 sixes in 58 balls). Among the rest of the batsmen, Madineni Lokesh created a flow of runs with fours and sixes at the end of his 47 (3 fours and 4 sixes in 18 balls). Narasaraopet Engineering College, which entered the ring with a target of 207 runs, was bowled out for 112 runs in 15.4 overs. <br><br>Captain Srikanth Nallapaneni and Madineni Lokesh among the bowlers of Vigyan University took three wickets and brought the team to victory. The best batsman in the tournament was S.Vinoth (Vignan’s University), the man of the tournament was Madineni Lokesh (Vignan\'s University), and the best bowler in the tournament was captain Srikanth Nallapaneni (Vignan’s University). JKC College Secretary and Correspondent JKC College Secretary and Correspondent Jagarlamudi Muralimohan, who was the chief guest at the awarding ceremony, received the trophy from Vignan\'s University team captain Nallapaneni Srikanth. Chairman Dr. Lavu Rattaiah, Vice Chancellor Prof. P. Nagabhushan, Registrar Dr. MS Raghunathan, Deans, Heads and teaching staff of the respective departments congratulated the members of the cricket team who became the winners of the Chandoo\'s Silver Cup Cricket Tournament.', '2024-02-15 00:00:00', 'assets/images/news1-3.JPG', 0, 'all', NULL),
(12, 'What\'s Up in Department.', 'ECE Department had International Workshop', 'Dr. Sudhakar Rao, President and CEO of WAMs Light Fellow in USA and IEEE Life Fellow said that all students should invest in research and development. International level work on \"Recent Advances in Fundamentals, Analysis, Design, Fabrication and Test of Advanced Antennas for Space, Air and Ground Applications\" under the aegis of Department of ECE, School of Electrical, Electronics and Communication Engineering, Chebrolu Mandal, Vadlamudi Science University Shop on Tuesday Organized grandly. <br><br>Dr. Sudhakar Rao, President and CEO of WAMS Light Fellow, USA, IEEE Life Fellow, who attended the program as the chief guest, said that innovation should be a daily routine for engineering students. Every student pursuing engineering education should have five qualities like learning, applying, developing, innovating and leading. They want to develop critical skills like systems, hardware, software, mechanical, tests and customer understanding. They want to think outside of the box and develop concepts. They want to understand the fundamentals thoroughly and apply them to problems and get results. Students are advised not to follow your passions and do only what you like. <br><br>Professor Ramana Reddy, Vice Principal of JNTU, Pulivendulu, who attended the program as the guest of honour, said that if we always do things in the same stereotyped manner, it will bore the students after a few years. They want to think for simpler methods beyond the scope. They want to try to do things in a new and creative way. Later, the chief guests were felicitated. Dr. Nasser Chahat, Senior Engineer, NASA/JPL, USA, Dr. Gaurangi Gupta, Antenna Engineer, NASA/JPL, USA, Professor P. Nagabhushan, Vice Chancellor of Vignan University, Registrar Dr. MS Raghunathan, Deans, Heads, faculty members and students of the respective departments participated in the program.', '2024-03-05 00:00:00', 'assets/images/news1-1.jpeg', 0, 'academics', NULL),
(16, 'MoU with Robocoupler', 'Vignan made a MoU with Robocoupler', 'University Vice Chancellor Professor P. Nagabhushan said on Wednesday that Robocoupler Private Limited of Vizag has entered into an MoU with Vadlamudi Science University of Chebrolu Mandal. In a program organized on this occasion, University Vice Chancellor Professor P. Nagabhushan exchanged documents related to the MoU with Robocoupler Private Limited CEO Praveen Malla. In the program organized on this occasion, the varsity vice chancellor said that they have signed a sensational MoU with India\'s premier andro-humanoid robotic company, Robocoupler, to set up a manufacturing hub with an advanced robotics laboratory in the B.Tech Mechanical Engineering department of their university. He said that the university is ready to bring revolutionary changes in the field of robotics due to this MoU. He said there will be an excellent opportunity for students as well as research faculty to not only design and develop robots but also take them to market for commercialization. Keeping in mind the needs of the industry, we will encourage innovation and provide practical experiences for the future of our students. Vice Chancellor Prof. P. Nagabhushan, Registrar Dr. MS Raghunathan, Deans, heads, staff and students of the respective departments of the university participated in the program.', '2024-04-24 00:00:00', 'assets/images/MOU WITH ROBOCOUPLER _25042024.jpeg', 0, 'academics', NULL),
(17, 'What’s Up in Department.', 'ICETMSC\'24 International Conference', 'IIT Kharagpur professor GP Rajasekhar said that all students should do extensive research on Data Science. Under the auspices of the Department of Mathematics and Statistics, School of Applied Science and Humanities, Chebrolu Mandal, an international conference on \"Emerging Trends in Mathematics and Scientific Computing\" will be organized for three days in hybrid mode (online and Offline) was grandly launched on Thursday. Professor G. P. Rajasekhar of IIT Kharagpur, who attended the program as the chief guest, said that students who have mastered mathematics and statistics should choose data science as their research field in future. Presently all multinational companies are using data science extensively. So there will be a good demand for students who have mastered it. <br><br>Professor P. Nagabhushan, Vice-Chancellor of Vignan’s University, who attended the program as the chief guest, said that information is always changing. They want to make learning a continuous process so that students can survive in the competitive world only if they are updated. They want to know as many new things as possible and not just limited to academic knowledge. Professor Nabil Malaiki of Prince Sultan University, Saudi Arabia, who attended the program online as the chief guest, informed the students how to use the latest developments in algebra in daily life. Also, Professor Zulkermain Sabir of the Lebanese American University in Lebanon, who was present as another chief guest online, explained the techniques of Numerical Network System to the students. Varsity Vice Chancellor Professor P. Nagabhushan, Deans, Heads, teaching staff and students of the respective departments participated in the programme.', '2024-06-13 00:00:00', 'assets/images/maths_wrkshp_13062024.webp', 0, 'academics', NULL),
(18, 'What’s Up in Department.', 'Maths International conference on Valedictory', 'Professor C. Shastri of IIT Hyderabad said that students who have done research in the field of mathematics will have a bright future. The three-day hybrid mode international conference on \"Emerging Trends in Mathematics and Scientific Computing\" under the auspices of the Department of Mathematics and Statistics, School of Applied Science and Humanities, Vadlamudi Science University, Chebrolu Mandal, concluded on Saturday. IIT Hyderabad Professor C. Shastri, who was the chief guest of the program, said that the students will have a bright future only if they gather information to identify different categories of consumers, their interests and their needs and collate and categorize them. He explained that if research in the fields of mathematics and statistics increases, many benefits will come to mankind. The youth should focus on this. <br><br>Dr. M. Venugopala Rao, Data Analyst, Novartis Company, Hyderabad, who attended the program online as the chief guest, said that it would be good if the engineering students were not only aware of the subjects related to their branches but also of basic science and mathematics. It is suggested that this knowledge will be very useful in the future. He said that by studying specializations like mathematics, statistics, probability and getting trained in statistical analysis system, Hadoop and other software programs, the skills of a data scientist can be acquired. Certificates were given to the students who excelled in various competitions organized for the students. Later, the chief guests who attended the program were felicitated. Deans, heads, staff and students of the respective departments participated in the program.', '2024-06-15 00:00:00', 'assets/images/maths_internatioanlcof_15062024.webp', 0, 'academics', NULL),
(19, 'Internatioanl Yoga Day', 'Yoga session was conducted by Vignan University', 'D. Durga Rao, Vice President of Bharat Swabhiman Trust in AP said that yoga is very helpful for a healthy life. The 10th International Yoga Day was organized under the auspices of Physical Education Department of Vadlamudi Science University, Chebrolu Mandal this year with the theme \"Yoga for Women Empowerment\". D. Durga Rao, Vice President of Bharat Swabhiman Trust, AP, who attended the program as a part of the weekly celebrations organized in honor of Yoga Day, said that it is not an exaggeration to say that life is free of mental stress and problems. Health problems arise due to work pressure, financial problems and other difficulties. Students are urged to do at least half an hour of physical activity every day. He informed the students that yoga is the best way to do that. Many claim that yoga provides relief from their hectic busy lives. Doing yoga rejuvenates the body.  Yoga helps in controlling the mind, body and spirit. AP High Court Advocate GVR Krishna Prasad, who was the guest of honor at the event, said that yoga is a powerful tool for mindfulness.<br><br>Yoga reduces stress and makes you calm. Doing yoga can control blood pressure. Yoga also improves breathing power. Practicing yoga may seem like a stretch, but it gives the body a good feeling and changes the way it moves. Industrialist VR Srilakshmi, who was present as another chief guest, said that by practicing yoga regularly, it is possible to lose weight and reduce stress.All the students are informed that if they practice Ashtanga Yoga in trinity form then they will live with good Rajayoga. Yogasana Sports State Secretary P. Prem Kumar, Vice Chancellor Prof. P. Nagabhushan, Registrar Dr. MS Raghunathan, Deans, heads and students of the respective departments participated in the program.', '2024-06-21 00:00:00', 'assets/images/yogaday_21062024.jpg', 0, 'all', NULL),
(20, 'MoU with CDAC', 'An MoU is Exchanged with Executive director of CDAC', 'Professor P. Nagabhushan, vice chancellor of the university said on Saturday that a memorandum of understanding has been signed between Vigyans University and SEDAC (Center for Development of Advanced Computing) in Bangalore. In the program organized on this occasion, University Vice Chancellor Prof. P. Nagabhushan exchanged documents related to MoU with Dr. SD Sudarshan, Executive Director of Seadoc.In a program organized on this occasion, the varsity vice chancellor said that due to this MoU, students and teachers will get special training in the fields of research and development, product development, training and skill development. Apart from this, artificial intelligence, high performance computing, big data analytics, cyber security, internet of things, embedded systems, robotics, power electronics, VLSI, etc. are developing day by day.RF microwave, drone technology and electrical technology will be brought closer. Students will also be offered internship programs in selected technologies.<br><br>From now on, students will include minor or credit courses in their syllabus so that they can be useful for industries. Keeping in mind the needs of the industry, innovation will be encouraged and practical experiences will be provided for the future of our students. On this occasion, Dr. S.D. Sudarshan, Executive Director of Seadoc said that he is very happy to enter into a Memorandum of Understanding with Vignans University.The aim of this agreement is to encourage the students towards the latest technologies and give them promotion in the respective fields. Seadoc Scientist-F Haribabu, Chairman of Science Educational Institutions Dr. Lau Rattaiah, Vice Chancellor Prof. P. Nagabhushan, Registrar Dr. MS Raghunathan, Deans, heads, staff and students of the respective departments of the University participated in the program.', '2024-06-22 00:00:00', 'assets/images/Mou with CDAC.jpg', 0, 'all', NULL),
(21, 'What’s Up in Vignan.', 'Vignan\'s V-C receives honorary rank in NCC', 'The Government of India - Ministry of Defense in New Delhi announced on Friday that Prof. P. Nagabhushan, Vice-Chancellor of Vadlamudi Science University, will be given the rank of Honorary Colonel in the NCC Division. It has been revealed that the certificate and gazette notification will be given to him soon.It has been revealed that for the efforts being made to integrate NCC in the academic framework of Vignans University, improve the infrastructure and promote discipline, camaraderie, commitment and comprehensive development among the students, we are offering the honorary colonel rank in the NCC department.It informed that he has shown remarkable commitment in organizing more NCC activities in the university. Among his most important achievements was the introduction of the NCC Minor Program which offered 20 credits to both NCC and non-NCC cadets. Recognizing the importance of NCC training, integrated disaster management and SSB training have been integrated into the NCC minor course in the academic curriculum, it said.<br><br>It revealed that under his leadership, efforts were made to create a suitable environment for conducting camps in the university to inculcate strict training, discipline and camaraderie among the cadets. His role in providing camp space for two camps here during the past school year proved invaluable.The Vice-Chancellor informed that the Vice-Chancellor was instrumental in motivating the cadets to actively participate in the Republic Day Camp, Thalasainic Camp, Army Attachment Camp and other national-level competitions. These camps have not only improved the skills of the students but have also given good recognition to Vigyans University. It has been revealed that after recognizing the uniqueness of NCC units, efforts have been made to increase new units within the university.He said that by increasing the scope of this expansion, more students will get an opportunity to join NCC. NCC has introduced the course as an add-on diploma. On this occasion, Professor P. Nagabhushan, Vice-Chancellor of Vignans University said that he is very happy to be awarded the rank of Honorary Colonel as a part of NCC.<br><br>He said that getting this rank has increased his responsibility in managing the activities of NCC. He said that NCC will work harder to design new programs and improve infrastructure to be useful for students.Vignans University Vice-Chancellor Professor P. Nagabhushan, who achieved the rank of Honorary Colonel, was congratulated by Vignans University Chairman Dr. Lavu Rattaiah, Vice-Chairman Lavu Srikrishnadevarayalu, Registrar Dr. MS Raghunathan, Deans, Heads and faculty members of the respective departments.', '2024-06-29 00:00:00', 'assets/images/VICE CHANCELLOR PROF. P.NAGABHUSHAN_29062024.jpg', 0, 'all', NULL),
(22, 'Inauguration of classes', 'Vignan inaugurated classes for first years', 'Dr. Lavu Rattaiah, Chairman of Vignans Educational Institutions stated that education and development of students should be a happy process. Vadlamudi Vignans University of Chebrolu Mandal has started classes for BTech first year students from Monday. Students and their parents from all over the state attended the program organized on this occasion.He, who attended the meeting as the chief guest, thanked the parents for enrolling students in their university and congratulated the students.He stated that the students who studied under him are climbing high positions in life because of the Panchasutras (1.Faculty Development Program, 2.Planning, Training, Communication System, 3.Counseling System, 4.CRT Classes, 5.Teaching Method) specially organized by Vignan University.<br><br>All parents know that if you encourage your children well, they will develop healthy, mentally and all round. It has been revealed that we are offering credits for physical fitness keeping in mind the health of the students. He informed that all the students will develop a good profile only if they participate not only in studies but also in cultural and social activities to increase communication and team spirit in the university.So far, students have been preparing only for writing exams, but from now on, they should prepare to succeed in life. He said that 90 percent of the students who studied in their university got jobs in multinational companies. They said that they will appoint one teacher for every 20 students through the counseling system in their university.<br><br>Through this, the students will be constantly monitored to bring out the hidden skills in the students and support them in their development and perfect personality formation.  He said that the teachers working in their university are getting 100% results due to updating the available technologies from time to time. Vignans University Vice Chancellor Professor P. Nagabhushan, Registrar Dr. Raghunathan, Deans, Heads and parents,Faculty and students of respective departments were present in the program.', '2024-07-01 00:00:00', 'assets/images/b.tech_inaugration_02072024.jpg', 0, 'academics', NULL),
(23, 'Bharat Pichathon 3.0', 'Vignan TBI organized Pichathon 3.0', 'Chebrolu mandal Vadlamudi Vigyans University Office of Dean Promotions Collaborations and Faculty Affairs, Vigyan TBI, Easel and Headstart jointly organized the \"Bharat Pichathon 3.0\" program on Saturday. The program was organized with the theme \"Unearthing Startups from India\".Representatives of companies from various start-ups in Andhra Pradesh enthusiastically participated in this program aimed at promoting innovation and entrepreneurship. Prof. P. Nagabhushan, Vice Chancellor of Vigyan University attended the program as the chief guest and interacted with the entrepreneurs and encouraged them and spoke about the contribution of Vigyan to the entrepreneurs.<br><br>Later, an MoU was signed with Nandi Ventures in Hyderabad. Later, the MoU documents were handed over to Vikas Katragadda, co-founder of Nandi Ventures. This Bharat Pichathon 3.0 organized by Headstart has encouraged entrepreneurs to pursue their ventures and contribute to the economic growth of Andhra Pradesh. The main objective of the event is to provide platforms for startups to grow and connect with industry experts and investors.Rajorpe Community Platforms Lead Ishita Maheshwari, who attended the program as the chief guest, said that financial support will also be provided to those who come up with new innovations. If anyone has new ideas, they should be developed and released to the market immediately. He said that the problems faced by the people of the country can be solved only if different types of entrepreneurs are established in the country.<br><br>He said that one can get good employment and high positions in life only with technical knowledge and skill development in accordance with the ever-changing conditions. Ashwati Venugopal, AP Lead, Headstart Foundation, co-founder of Avasarsha, said that small ideas can be turned into big business by adding technology.Jaran Bhagwagar, Associate Vice President of Jelpa Mac, Varun AG Reddy, CEO of AGR Corporate Consultants, Vikas Katragadda, Cofounder of Nandi Ventures, Professor P. Nagabhushan, Vice Chancellor of Vigyan University, Deans, heads, staff and students of the respective departments of the university participated in the program.', '2024-07-06 00:00:00', 'assets/images/tbi_0872024.jpg', 0, 'students', NULL),
(24, 'TCS Drive', 'Vignan conducts TCS- NQT', 'On Monday, the representatives of TCS grandly started the TCS-NCT (National Qualified Test) interviews to be held for three days at Vadlamudi Knowledge University, Chebrolu Mandal, Guntur District. In the program organized on this occasion, the representatives of TCS said that interviews are being conducted at Vigyans University for students who have completed B.Tech in the year 2024 and have been selected through NQT (National Qualified Test).<br><br>\r\nIt is stated that 3000 students from all the engineering colleges in Guntur, Krishna and Vizag regions will attend this mega drive. In the interview, it was revealed that TCS-Ninja Rs.3.39 Lakhs, TCS-Digital Rs.7 Lakhs and TCS Prime Rs.9 Lakhs will be given annual salary to the students who have proved their ability. TCS company representatives, Vigyans University Vice Chancellor Professor P. Nagabhushan, In-charge Registrar Dr. PMV Rao, Deans and Heads of respective departments were present in the program.', '2024-07-09 00:00:00', 'assets/images/tcs_interview_10072024.jpg', 0, 'career', NULL),
(25, 'ROBOT LAB INAUGURATION', 'Vignan inaugurates Robot Lab', 'Praveen Malla, CEO of Robocoupler Private Limited said that there will be revolutionary changes in the field of robotics in the future. The Department of Mechanical Engineering (Robotics and Automation) of the School of Core Engineering, Vadlamudi Science University, Chebrolu Mandal inaugurated the \"Robocoupler\'s Semi-Humanoid Robot Manufacturing Hub\" on Thursday. Praveen Malla, CEO, Robocoupler Private Limited, who was the chief guest of the event, spoke that it is commendable that Vigyans University has come forward to set up a manufacturing hub with Advanced Robotics Laboratory. He said that this robot manufacturing hub will provide an excellent opportunity for students as well as research faculty to not only design and develop robots but also take them to market for commercialization. <br><br>Keeping in mind the needs of the industry, innovation will be encouraged and the students will get practical multidisciplinary knowledge experience. Vice Chancellor Prof. P. Nagabhushan, Registrar Dr. MS Raghunathan, Deans, heads, staff and students of the respective departments of the university participated in the program.', '2024-07-12 12:37:09', 'assets/images/robotlab_11072024.jpg', 0, 'academics', NULL),
(26, 'Award News', 'Principal Librarian achieves award', 'University Vice Chancellor Prof. P. Nagabhushan said that the chief librarian of Chebrolu Mandal Vadlamudi Vignan’s University, Achanta Rajanikumari, received the prestigious library award in the name of Padmashri Iyanki Venkataramanaya and Dr. Velaga Venkatappayya of the library .In the congratulatory program organized on this occasion, the VC said that retired high court judge Dr. Justice KG Shankar and Dr. Areti Krishnakumari presented the library award along with Rs.10 thousand cash prize to her. Achanta Rajanikumari , she has rendered valuable services as a librarian for the past 28 years and this award was given for her efforts in providing the necessary books and research papers to the students, research scholars and teachers along with setting up a digital library in the university. He said that 1,15,000 books and 2 lakh e-books have been made available in the NT University Library.<br><br> Apart from being recognized as a permanent member of APLA, she has participated in national and international conferences held in many universities and presented many papers on library development. Besides, it was revealed that one national and international conferences and 4 national workshops were organized in the university. Achanta Rajanikumari, who received the Ayanki Velaga award, said that she thanked the committee members who selected the library award in the names of Padma Shri Ayanki Venkataramaniah and Granthalaya Gandhi Dr. Velaga Venkatappayya. <br><br> She said that she is very happy to receive this award. She stated that this award will increase the responsibility on me and I will work more for the development of libraries. Afterwards, Dr. Lau Rattaiah, Chairman of Vignan’s Educational Institutions, specially congratulated Achanta Rajinikumari who received the Library Award. Vignans University Vice Chancellor Professor P. Nagabhushan, Registrar Dr. MS Raghunathan, Deans, Heads of respective departments and library staff participated in the program.', '2024-07-25 08:50:00', 'assets/images/librarymam_26072024.jpg', 0, 'all', NULL),
(27, 'Student achieves Ph.D', 'EEE student got Ph.D', 'Vice Chancellor Professor P. Nagabhushan said on Saturday that Muthukuri Narendra Kumar, a student of the EEE Department of the School of Electrical Electronics Communication Engineering, Vadlamudi Vignan\'s University, Chebrolu Mandal, has been awarded the PhD degree by his university. He informed that he has done research on \"Design and Development of Proportional Resonant Current Controlled Single Phase Fifteen Level Packed U Cell Multilevel Inverter for PV Applications\". <br><br>Dr. Mopidevi Subbarao, who is working as an associate professor in the EEE department of Vignan\'s University, acted as his guide. He revealed that as part of his research, he has published in SCI-1, Scopus Journals-2 and International Conferences-2. The deans, heads and teaching staff of the respective departments felicitated Muthukuri Narendra Kumar who received his PhD degree.', '2024-07-20 08:50:00', 'assets/images/stu_phd_22072024.png', 0, 'students', NULL),
(28, 'GUEST LECTURE', 'Vignan – SHAR group director guest lecture', 'P. Gopikrishna, Director, Management Systems Group, SHAR (Satish Dhawan Space Center, Sriharikota) said that there will be a bright future for the students of mechanical and civil engineering fields in the field of automation. P. Gopikrishna, Group Director of SHAR Management Systems, who was the chief guest at Vadlamudi Science University, Chebrolu Mandal, gave a special guest lecture program to the faculty and students of Mechanical and Civil Engineering. Speaking on this occasion, he imparted awareness on high technical skills in mechatronics, robotics and space craft design.<br><br> Job opportunities in the fields of core engineering and space technology were shared with the students. He said that the rest of the world is currently lagging behind in the manufacturing sector and this is the right time for our country to be the leader in the manufacturing sector. He said that robotics, product design and development and medical instrumentation will become important in the coming days. He said that in the future, robots will be used in all fields of automobiles, agriculture, hospitals, software and hardware. Vehicles will also be driven by robots. He called upon the students to undertake research to meet the needs of the world. <br><br>  He said that the students should form groups of four and beyond and undertake new innovations. Vignan’s University Vice Chancellor Professor P. Nagabhushan, deans, heads, staff and students of the respective departments participated in the program.', '2024-07-26 10:09:47', 'assets/images/sharguestlecture_26-07-2024.jpg', 0, 'academics', NULL),
(30, 'BLOOD DONATION', 'Blood donation camp organized by VIGNAN.', 'Dr. Lavu Rathaiah, Chairman of Vignan’s Educational Institutions, called for blood donation to be equal to life donation and all the students should commit themselves to blood donation. Students donated blood at Vignan’s University in Vadlamudi, Chebrolu mandal on Saturday. In celebration of the birthday of Vignan’s Educational Institutions Chairman Dr. Lavu Rattaiah, the NSS department organized this blood donation camp in the university under the joint auspices of GGH Guntur, Needs Blood Bank, Lifeshare, Thalassemia Needs Blood Bank. Dr. Lavu Rattaiah, Chairman of Vignan’s Educational Institutions, who attended the program as the chief guest, said that every two seconds, someone somewhere in the world is in need of blood. Apart from donating blood, students also asked their friends to participate in this great event. It has been revealed that after donating blood, the body replaces the lost blood within 48 hours. It was revealed that blood cannot be prepared artificially, it can be obtained only if someone donates it. He said that during accidents, the victims need blood a lot. It has been revealed that many people are alive today due to blood donation.<br><br> On this occasion, 400 students from Vignan’s University, Vignan’s Lara and Vignan’s College of Pharmacy donated blood. After that, certificates were given to the students who donated blood. Besides, essential items, blankets and sarees were given to Yelchuri Amma Charitable Trust, Koyavaripalem Old Age Home, Gandhi Ashram, two blind schools (Shiridi Sai Blind School, Kalabharati Blind School) and Children\'s Ashram in Tenali Chenchupet. Competitions were organized and prizes were distributed to the students of Vejandla, Jagarlamudi, Angalakuduru and Narakoduru government schools. A medical camp was organized at Veeranayakunipalem. An eye checkup camp will be organized at Vadlamudi today. Vignan’s University Vice Chancellor Professor P. Nagabhushan, Registrar Dr. MS Raghunathan, Deans, Heads of respective departments and NSS students participated in the program.', '2024-07-27 10:31:53', 'assets/images/blooddonation_27-07-2024.jpg', 0, 'all', NULL),
(31, 'Celebrations', 'Dr. Lavu Rathaiah\'s Birthday', 'Dr. Lavu Rathaiah, Chairman of Vignans Educational Institutions, celebrated his birthday in Vignans University on Sunday. On this occasion, Dr. Lavu Rathaiah, Chairman of Vignans Educational Institutions, said that only students will wish without any discrimination.He informed that he would be even more happy if all the students rise to higher positions in life. He said that his bond with the students is indescribable and that\'s why he likes to celebrate his birthday every year in the company of students. Students were advised that they can be successful only if they think creatively and not with simple ideas.<br><br>He said that from the beginning he believed in the theory that students can grow in the right direction only in a free environment. He said that they are implementing the same principle in every school and college.  That is why their students are able to do many miracles. He said that it is because of the admiration of the students studying in their educational institutions, their parents, and the science staff that they are giving them the physical and mental strength they need to work more enthusiastically every day. He thanked them all by name. He said that the main reason for the development of science institutions is that everyone who works here is willing and happy to work. He said that if anyone wants to reach a higher level in life, they will get results based on the hardships they face and the sacrifices they make.<br><br>After that, the birthday cake was cut. B. Rudramadevi, Vice-Chancellor of Vignans Institutions, Professor P. Nagabhushan, Registrar Dr. MS Raghunathan, Coordinator Gudimella Srikurmanath, Lara Principal Dr. K. Phaneendrakumar, Pharmacy Principal Dr. P. Sreenivasababu, Junior College Principal were present in the program LJ. Mohan Rao, Deans of respective departments , heads, teaching staff, non-teaching staff and students participated.', '2024-07-28 16:54:25', 'assets/images/chairman_HBD_28072024.jpg', 0, 'all', NULL),
(32, 'Alumni Meet', 'An unprecedented gathering', 'An unprecedented gathering of Vignans students<br><br>Busily Vignans Alumni Association<br><br> Students from 26 batches attended at a time<br><br>Students attended from all over the country<br><br>\r\nGreetings from the memories of those days to the family situation of today... Chebrolu Mandal became the stage for the alumni of Vadlamudi Vignans University. All the 26 batches of students from the academic year 1997 to 2023 met with their family members at Vigans University on Saturday.<br><br>\r\nAfter two and a half decades, they all met in a noisy, fun and smart way. Met the teachers who taught the lessons that day. They informed about who settled where and also inquired about the well-being of all the friends. Self portraits and group portraits were taken. Remembering the days of studying in the university, everyone got a new feeling. Dr. Lavu Rathaiah, Chairman of Vignans Educational Institutions, who attended the program as the chief guest, expressed his gratitude to each and every student who came from different places for the Alumni Association. He said that he is very happy that all of you have settled in high professional positions in life. May all of you aspire to rise higher in your respective fields.He called for more such alumni associations to be organized. He said that with the support given by all of you, currently Vigyans University is standing at the level of competing with leading educational institutions. If any students stop at B.Tech, they are called to do Masters and Ph.D. He said that the parents who gave birth and the teachers who taught them should always be respected. It is stated that the University of Wigan has achieved the prestigious Knock A Grade, 75th rank in NIRF, Diamond rating in NBA and QSI-Gauge rankings within no time. Vice Chancellor of Vigyans University Prof. P. Nagabhushanam, Registrar Dr. MS Raghunathan, Vice Chairperson of Vigyans Institutions B. Rudramadevi, Deans, heads, faculty members and alumni of the respective departments participated in the program.', '2024-07-28 17:00:15', 'assets/images/alimnimeet_28072024.jpg', 0, 'alumni', NULL);
INSERT INTO `news` (`id`, `title`, `subheading`, `descr`, `date`, `img`, `active`, `type`, `deptname`) VALUES
(33, 'GUEST LECTURE', 'Satellite launching is a wonderful process', 'Satellite launching is a wonderful process said Dr. MYS Prasad, former director of Satish Dhawan Space Center, Sriharikota, director of Chandrayaan-1 mission, former vice chancellor of Vignan’s University, Padma Shri Dr. MYS Prasad. A special lecture program on \"Satellite Launching\" was held on Friday in celebration of National Space Day at Vadlamudi Science University, Chebrolu Mandal. Padmashri Dr. MYS Prasad, who attended the program as the chief guest, spoke to the students and explained the procedures and methods followed in various PSLV and GSLV satellite launching occasions. Before launching the satellite, the precautions to be taken to get into the designated orbit are explained. What kind of spare parts are installed in a satellite? Their weights and their goals were shared with the students.  Students are informed how to use space specifications such as various engineering disciplines. <br><br>Besides, the students were made aware of the issues like space missions, technical details about them, general working crew of ISS, old space stations, space station crew activities, environment control and life support systems of ISS, space suits, crew training on ground, research activities on ISS. Dr. Lavu Rattaiah, Chairman of Vignan’s Educational Institutions, Vice-Chancellor Professor P. Nagabhushan, Registrar Dr. MS Raghunathan, Deans, heads, teaching staff and students of the respective departments participated in the program.', '2024-08-09 10:56:06', 'assets/images/Satellitelaunching_08082024.jpg', 0, 'academics', NULL),
(34, 'NIRF RANKING', 'University of Vignan is ranked 72nd in NIRF', 'Vice Chancellor of the University Prof. P. Nagabhushan said that in the NIRF (National Institute of Ranking Framework) ranks of higher education institutions for the year 2024 released by the Central Human Resource Development Department (MHRD) on Monday, Vignan’s University has been ranked 72nd nationally. Speaking in a special program organized on this occasion, he said that Vignan’s University was ranked 72nd among the universities across the country. In the same way, it has been informed that the 91st rank has been achieved in the engineering department as well. He said that the Center has examined the performance of Vignan’s University in the categories of Teaching Learning Resources, Research and Professional Practice, Graduation Outcomes, Outreach and Inclusivity and PR Perception and assigned these ranks as a standard score of 100 points. He said that Vignan’s University will receive grants from central and state governments and private agencies due to NIRF rank.  <br><br>He said that Vignan getting NIRF rank will provide more job opportunities to varsity students by leading multinational companies. Vignan’s University has achieved a better rank at the national level due to providing quality education to students from all walks of life as well as developing innovative technology and promoting research for the future of students. The main reason for Vignan’s University achieving this rank is the university faculty, research scholars and students. MoUs have also been formed with leading research organizations in the country to promote research in the university. The IQAC team who worked hard to achieve the best rank in NIRF were specially congratulated by Dr. Lavu Rattaiah, Vice Chairman of Vignan’s Institutions, Vice Chairman Lavu Sri Krishnadevarayalu, Vice Chancellor Prof. P. Nagabhushan and Registrar Dr. MS Raghunathan.', '2024-08-12 10:03:13', 'assets/images/VIGNAN-NIRFRANKING_12082024.jpg', 0, 'all', NULL),
(35, 'MOU Cambridge', 'Cambridge MoU with University of Vignan', 'Professor P. Nagabhushan, Vice-Chancellor of Vignan’s University said on Wednesday that the English Assessment Department of the prestigious Cambridge University in England has entered into a Memorandum of Understanding (MoU) on Linguistic Certification in English Language with Vignan’s University of Chebrolu Mandal Vadlamudi. Dr. MS Raghunathan, registrar of Vignan’s University presented the documents of understanding regarding the MoU to Cambridge University South Asia Regional Director Arunachalam and South India DGM Karthi Subramanian in the program organized on this occasion. On this occasion, University Vice Chancellor Professor P. Nagabhushan informed that Cambridge University is the first in the world to introduce language skill certification in English language in their university. <br><br> Besides, Cambridge will establish a center of excellence and industry partners from all over the world and entrepreneurs from all over the world to interact with the students, he said. Collaborating on research, a joint project to study the impact of Cambridge certification exams on students\' language skills is already in progress. It furthers the mission of providing high-level training and certification to enhance students\' language skills. He said that the New Language Skill online test can check the English levels of students through artificial intelligence technology. The modules test the four language skills of speaking, writing, reading and listening. It has been revealed that a large number of their students have been attending the certification courses conducted by Cambridge University for several years and almost one hundred percent of them have passed. <br><br> He said that as a result of the special courses conducted at the University of Cambridge University, the students here are able to learn the English language with international standards. He said that they are also getting plenty of job opportunities. He said that Cambridge University has made a memorandum of understanding by considering all these factors. Cambridge Corporate Relations Regional Manager Padmaja Sivakumar, ELT Manager Malikarjuna Naidu Pachipala, Vigyans Educational Institutions Chairman Dr. Lau Rattaiah, Vignan’s University Registrar Ms Raghunathan, Deans, heads, staff and students of the respective departments participated in the programme.', '2024-08-14 11:29:31', 'assets/images/CAMBRIDGE UNIVERSITY_14082024.jpg', 0, 'all', NULL),
(36, 'CELEBRATIONS', '78TH INDEPENDENCE DAY', 'Vice Chancellor of Science University Prof. P. Nagabhushan said that if the country is to develop and change is to be started in the society, it is possible only with the students Vignan’s University, Vignan Lara, Pharmacy, Junior College in Chebrolu mandal Vadlamudi celebrated the 78th Independence Day on Thursday. Professor P. Nagabhushan, Vice-Chancellor of Vignan’s University, who attended the program as the chief guest, said that no matter how much progress the country has made, there is still a long way to go. He said that the more creativity students have, the more the country will grow. He said that in the next 10 to 20 years, India will become the most powerful country in the world. Students should analyse the past and understand the present and examine the possibilities to shape the future of the country. <br><br> Registrar Dr. MS Raghunathan said that many great people sacrificed their lives for the freedom of our country and it is because of their sacrifice that day that we are enjoying freedom today. He said that if the students take their sacrifices as an inspiration, you will also develop a sense of nationalism. The freedom of today\'s youth should be handled responsibly without being used to extremes. Later, cash prizes and certificates of appreciation were presented to the students who excelled in debate, mock parliament, quiz, drawing, hand painting, elocution and short film held as part of the week-long Independence Day celebrations. Certificates were given to NCC students. Dr. Lau Rattaiah, Chairman of Vignan’s Educational Institutions, Vice-Chancellor Prof. P. Nagabhushan, Registrar Dr. MS Raghunathan, Deans and Heads of the respective departments participated in the program.', '2024-08-15 09:33:09', 'assets/images/INDEPENDENCEDAY_15082024.jpg', 0, 'all', NULL),
(37, 'CURTAIN RAISER', 'VIGNAN - 12TH CONVOCATION', 'University Vice-Chancellor Prof. P. Nagabhushan said on Saturday that the 12th graduation ceremony of Vignan’s University will be held on Saturday, August 24. In a program organized at Chebrolu Mandal Vadlamudi Vignan’s University, Vice Chancellor Prof. P. Nagabhushan said that Supreme Court Judge Pamidigantam Shri Narasimha will be the chief guest for the 12th graduation ceremony and Dontineni Seshagiri Rao, Founder and Chairman of SEC Industries, Hyderabad will be the guests of honour Mullapudi Lokeshwara Rao, founder of Lokesh Machines, Indian composer And singer Saluri Koteswara Rao (Koti) is present.<br><br> The Vice-Chancellor said that on the occasion of the 12th Convocation, his university will award degrees to more than 1526 students. On the occasion of the 12th graduation, gold medals will be awarded to 26 students who have shown the best in their branches. Apart from these, there will be Best Outgoing Student Medal, Endowment Awards, Chairman\'s Gold Medal, Best NSS, NCC, Social Engagement Award and Best Leader Medals for the multi-talented student. He said that special prizes are also given to students who have shown excellent talent in various departments.<br><br> In celebration of the 12th graduation ceremony, Vignan’s University will award honorary doctorates to three eminent persons for their services and efforts in various fields, he said. Dontineni Seshagiri Rao, founder and chairman of SEC Industries, Hyderabad, Mullapudi Lokeshwara Rao, founder of Lokesh Machines, Hyderabad, and Indian composer and singer Saluri Koteswara Rao (Koti) will receive honorary doctorates. Chairman and Chancellor Dr. Lau Rattaiah, Vice-Chairman Lau Srikrishnadevarayalu, University Vice-Chancellor Prof. P. Nagabhushan, Registrar Dr. MS Raghunathan, members of the Executive Council, Academic Council, Deans, Heads of the respective departments will participate in the graduation ceremony on 24th mentioned .', '2024-08-17 17:21:11', 'assets/images/curtainraiser12thconv_17082024.jpg', 0, 'all', NULL),
(38, 'Hyderabad Campus', 'First year classes started', 'Dr. Lavu Rattaiah, Chairman of Vignan’s Institutions stated that knowledge, development, education and development in students should be a happy process. The classes for first year students of B.Tech have started from Monday at the campus of Vignan’s University of Hyderabad at Ramoji Film City in Deshmukhi village of Pochampalli mandal of Yadadri Bhuvanagiri district. Students and their parents from all over the state attended the program organized on this occasion. Dr. Lavu Rattaiah, Chairman of Vignan’s Educational Institutions, who attended the meeting as the chief guest, said that he thanked the parents for enrolling students in Vignan’s University Hyderabad Off Campus, which was opened this year with all the central government approvals, and congratulated the students. Parents should not worry that we have just started in Hyderabad, we promise that we will work hard to make your children perfect and reach higher positions in life and get good jobs.<br><br> On this occasion, it was already mentioned that the students who have studied are climbing high positions in life due to Panchasutras (1.Faculty Development Program, 2.Planning, Training, Communication System, 3.Counseling System, 4.CRT Classes, 5.Teaching Method) specially organized by Vignan’s University in Guntur. All parents know that if you encourage your children well, they will develop healthy, mentally and all round. It has been revealed that we are offering credits for physical fitness keeping in mind the health of the students. He informed that a good profile will be developed only if all the students participate not only in studies but also in cultural and social activities to increase communication and team spirit in the university. On this occasion, it was informed that Mrs. Poonam Malakondaiah garu, a retired IAS officer, has been appointed as an off-campus advisor to provide the necessary advice and guidance to the students. Lavu Srikrishna Devarayalu, Vice Chairman of Vignan’s Educational Institutions, said that till now students only prepare for writing exams, from now on they have to prepare for success in life. He said that 90 percent of the students who studied in their university got jobs in multinational companies. <br><br>They said that they will appoint one teacher for every 20 students through the counselling system in their university. Through this, the students will be constantly monitored and the hidden skills of the students will be brought out and they will be supported in their development and perfect personality formation. He said that the teachers working in their university are getting 100% results due to updating the available technologies from time to time. Vice-Chairperson of Vignan’s Educational Institutions Boyapati Rudramadevi, Vice-Chancellor of Vignan’s University Professor P. Nagabhushan, Registrar Dr. MS Raghunathan, Deans, heads, parents, teaching staff, parents and students of the respective departments participated in the program.', '2024-08-19 17:03:55', 'assets/images/hydcampusfirstyearclasses_19082024.jpg', 0, 'all', NULL),
(39, 'ABET', 'Prestigious ABET Accreditation for Vignan\'s University', 'Chebrolu Mandal Vadlamudi Science University has been awarded the prestigious USA based ABET (Accreditation Board for Engineering and Technology) accreditation, said the University Vice Chancellor Colonel, Prof. P. Nagabhushan on Friday. Speaking in the program organized on this occasion, he informed that only 12 universities in the country have ABET accreditation, among which Vignan’s University is one of them. Vignan has become the first university in two Telugu states to achieve ABET accreditation. It was revealed that 5 branches of the university (CSE, EEE, ECE, Mechanical, Biotechnology) have been granted ABET accreditation for 6 years. He said that a 10-member inspection team from America inspected the university for three days and provided accreditation.  He informed that because of ABET Accreditation, employment opportunities in foreign countries along with higher education will be greatly improved. <br><br> In addition to these, students will have more opportunities to enter into training programs, exchange programs and MoUs with universities abroad. It is said that universities with ABET accreditation always have self-assessment and continuous improvement. The IQAC staff who worked hard in getting the USA based ABET accreditation were specially congratulated by Dr. Lavu Rattaiah, Chairman of the Institute of Science, Vice Chancellor Colonel, Prof. P. Nagabhushan, Registrar Dr. MS Raghunathan, Deans and Heads of the respective departments.', '2024-08-23 09:26:43', 'assets/images/abetAccreditation_23082024.jpg', 0, 'all', NULL),
(40, 'Convocation', 'Vignan 12th graduation ceremony', 'The 12th graduation ceremony of Vignan’s University was on Saturday with great pomp. Supreme Court Judge Justice Pamidighantam Shri Narasimha, who was the chief guest of the program, said that it was a great honour and pleasure to come to Vignan’s University to celebrate the success of the graduates. When you step beyond the confines of academia with a degree, the real world presents new challenges that will prove to be moments that test the mettle of your education. Similarly, you want to express your gratitude to your family, your mentors and your peers who have supported you. Becoming an engineer is not a small matter. <br><br> \r\n<b>Honorary doctorates to three dignitaries</b><br><br>\r\nIn 12th graduation ceremony, Vignan’s University awarded honorary doctorates to Donthineni Seshagiri Rao, founder and chairman of SEC Industries, Hyderabad, Mullapudi Lokeshwara Rao, founder of Lokesh Machines, Hyderabad, Indian composer and singer Saluri Koteswara Rao (Koti), who worked in various fields. <br><br>\r\n<b>Degrees for 1539 people: Vice Chancellor of Science University Prof. P. Nagabhushan</b><br><br>\r\nHe said that in 12th graduation ceremony, degrees were awarded to a total of 1539 students. Apart from these 60 (Academic Gold Medals – 26, Best Outgoing Student Awards – 24, Chairman Gold Medal – 1, Lavu Venkateswarlu, Bandarupalli Venkateswara Rao, Alapati Rabindranath Endowment Gold Medals – 3, Best Leader – 1, Best NCC Cadet – 1, SS Volunteer-1, Vignan Online Programs Academic Toppers-3, students were awarded gold medals. <br><br>\r\n<b>Memorable Venue:  Mullapudi Lokeshwara Rao, Founder of Lokesh Machines, Hyderabad</b><br><br>\r\nHe said, \"It is a memorable platform to celebrate students\' intellectual and academic pursuits and their professional achievements with family, friends and well-wishers. <br><br>\r\n<b>Don\'t forget the way you grew up: Dr. Lavu Rattaiah, Chairman of Vignan’s Educational Institutions</b><br><br>\r\nHe stated that we should never forget the way we have grown up to this point. We want to reflect our way to the future generations. He informed that the values, traditions and clothes we wear are symbols of our future heritage. <br> <br>\r\n<b>Make your mark on the world: Lavu Srikrishna Devarayalu, Vice-Chairman, Vigan’s Group Of Institutes</b><br><br>\r\nHe called upon all of you who are graduating today to try to make your mark on the world. All the guests present at today\'s graduation ceremony can be taken as examples of what a person can achieve in a lifetime.<br><br>\r\nOn the occasion of the graduation ceremony, Vignan’s University awarded gold medals to 60 students who have shown their ability in their respective departments. <br><br>\r\n<ul>\r\n<li>Prestigious Chairman\'s Gold Medal – Devi Sindhu (Biotechnology) </li>\r\n<li>Lavu Venkateswarla Endowment Award – Jangala Kusuma Kumari (CSE) </li>\r\n<li>Bandarupalli Venkateswara Rao Award – G.Adityavarma (Bioinformatics) </li>\r\n<li>Alapati Rabindranath Endowment Award – Murrah Snehalatha (CSE) </li>\r\n<li>Best Leader Award – A.Kushal Chaudhary (CSE) </li>\r\n<li>Best NCC Cadet – Tirumalashetty Pawan Kumar (CSE) </li>\r\n<li>Best NSS Award – Sheikh Shakira (Biotechnology) </li>\r\n</ul><br><br>\r\n<b>Best outgoing students from various departments</b><br><br>\r\n<ul>\r\n<li>Devi Sindhu from Department of Biotechnology</li>\r\n<li>Veerapaneni Chaitanya from the Department of Chemical Engineering</li>\r\n<li>Civil to Nomula Amarnaad</li>\r\n<li>Jangala Kusuma Kumari from CSE department</li>\r\n<li>Sheikh Baji from ECE</li>\r\n<li>Kissing Sairam from EEE department</li>\r\n<li>Juhi Kumari from IT</li>\r\n<li>P. Ravi Shankar from Mechanical Department</li>\r\n<li>T. Bharat Chand from Agricultural Engineering</li>\r\n<li>Vadiara Gopichand from Textile</li>\r\n<li>Gavin Aditya Varma from the Department of Bioinformatics</li>\r\n<li>Gongal Reddy Jyotirmai from Food Technology</li>\r\n<li>Narishetti Amala from BME</li>\r\n<li>Kakani Vamsi from CSE – AIML</li>\r\n<li>Vemuluri Hemanth Kumar from CSE – CSBS</li>\r\n<li>Poojita Tadepalli from CSE – Cyber Security</li>\r\n<li>Shehbaz Ali from Pharmacy</li>\r\n<li>Kokirala Shivsai from BCA</li>\r\n<li>V. Sai Priya from BBA</li>\r\n<li>Sheikh Nuruddin Language from B.Sc</li>\r\n<li>Y. Mahima from MBA</li>\r\n<li>Irfan Syed from MCA</li>\r\n<li>K. Shravani Priya from M.Sc Chemistry</li>\r\n<li>Sheikh Sardar Jani and others won gold medals from M.C. Organic Chemistry. </li>\r\n</ul><br><br>\r\n<b>A Glittering Celebration</b><br><br>\r\nThe celebration of the students when they get their degrees is celebratory. The whole varsity premises erupted with cheers. Students shared their experiences of four years with each other. They remembered the moments spent in the classrooms. Remembering the connection they developed with the university. They had a happy time reminiscing over and over the fun times. They took selfies as a sign. They promised to do their best for the development of the country. All the students wore turbans and scarves and looked like tall men. Technical education certificates are obtained while reflecting the cultural traditions.<br><br>\r\nChairman Dr. Lavu Rattaiah, Vice-Chairman Lavu Srikrishnadevarayalu, Vice-Chancellor Professor P. Nagabhushan, Registrar Dr. MS Raghunathan, Board of Management members, Deans, Heads, staff, students and parents of Vignan’s Educational Institutions participated in the program.', '2024-08-24 10:05:29', 'assets/images/12thConvocation_24082024.jpg', 0, 'all', NULL),
(41, 'Janmashtami 2024', 'Vignan celebrates Utti event', 'Chebrolu Mandal Vadlamudi Vigyans University celebrated the Utti Utsav on Tuesday in honor of Sri Krishnashtami celebrations. Dr. Lau Rattaiah, Chairman of Vigyans Educational Institutions, who attended the program as the chief guest, said that wherever there is happiness, there is little Krishna. All students want to be happy all the time and study well.He said that Utti Utsav is a symbol of unity and collective philosophy. On this occasion, he participated in the Utti festival and broke the Utti. He said that by breaking a very high thread, something can be achieved with collective effort. He revealed that for every success in life, collective effort is essential. From now on, students are advised to get used to working together with four people.<br><br>The Utti Utsav held as a part of the Krishnashtami celebrations was full of merriment. Around 50 teams participated in this Utti festival. Each team was represented by 12 people and participated in the Utti beating ceremony. The 12-man formation like a pyramid and smashing Utti was astonishing.A festive atmosphere prevailed throughout the university premises. The dances performed by the students were impressive and the foreign students were a special attraction. After that, the first three teams who cracked the Utti in the shortest time were awarded with cash prizes and certificates of appreciation. Deans, heads, staff and students of the respective departments participated in the program.', '2024-08-27 17:05:29', 'assets/images/utti_2024.jpg', 0, 'all', NULL),
(42, 'Faculty achieves Ph.D', 'BT faculty got Ph.D', 'Vice Chancellor Professor P. Nagabhushan said on Wednesday that Assistant Professor Annam Nagalakshmi of the Department of Biotechnology of the School of Biotech and Pharmaceutical Sciences, Vadlamudi Vignan’s University, Chebrolu Mandal, has been awarded the PhD degree by their university. In the program organized on this occasion, he informed that she has done research on \"Screening and Evolution of Bioactive Metabolites from Curcuma Longa and Tinospora Cordifolio Against Pulmonary Fibrosis in Mice\". It is stated that S. Krupanidhi, a retired professor of Biotechnology Department of Vignan’s University acted as her guide. Assistant Professor Annam Nagalakshmi, who received her doctorate degree, was felicitated by Vice Chancellor Professor P. Nagabhushan, Deans, Heads and teaching staff of the respective departments.', '2024-08-28 09:44:33', 'assets/images/stu_phd_28082024.jpg', 0, 'all', 'BioTechnology'),
(43, 'Celebrations ', 'National Sports Day at Vignan’s University', 'On the occasion of Dhyan Chand Jayanthi, National Sports Day was organized in grand style under the auspices of Physical Education Department at Chebrolu Mandal Vadlamudi Vignan’s University on Thursday. On this occasion, the students first took out a huge rally with the national flag. Vice-Chancellor Professor P. Nagabhushan, who was the chief guest of the program, said that Dhyan Chand has the honour of giving gold medals to the country three times in a row in the Olympic Games. In his name, the Indian government will present the highest award in sports, the \"Major Dhyan Chand Khel Ratna\" award to sportspersons. With the intention that all students participate in sports, marks have also been allocated for sports related subjects in three semesters in Vignan\'s University. Students should set clear goals and work hard to achieve what they want. Students are advised to always be cheerful and enthusiastic and never be careless. Later, certificates and medals were presented to the students who showed talent in various sports. Deans, heads, staff and students of the respective departments participated in the program.', '2024-08-29 09:06:56', 'assets/images/sportsday_29082024.jpg', 0, 'all', NULL),
(44, 'Varalakshmi Vratam', 'Celebrations in Vignan’s University', 'Varalakshmi Vrata Puja Mahotsav was organized in grand style at Chebrolu Mandal Vadlamudi Vignan’s University on the occasion of Shravan Friday. On this occasion, Vignan’s University staff and many students performed mass Vrata Puja. Professor P. Nagabhushan, Vice Chancellor of Vignan’s University, who attended the program as the chief guest, said that Vratam means regular conduct, disciplined practice, and the importance of Vratam in personal and professional lives. Varam means excellence and we want whatever we get to be the best. Also, whatever responsibility is accepted in life, they should perform it in the best way. He said that if you do it with care and interest, you will get good results. So he called upon the students to complete their studies and other tasks with full concentration. <br><br>Amma is the symbol of joy, enthusiasm, happiness and smile. It is said that the mother who looks like Soumyalakshmi with kindness and compassion turns into Veeralakshmi if she gets angry. Jayalakshmi can be worshiped if one achieves success with an optimistic outlook, Vidyalakshmi can be worshiped by acquiring the knowledge, timeliness and decision-making powers needed for the work one has set his mind on. He said that Varalakshmi Puja is better than other Lakshmi Pujas and gives special results. He said that foreigners are also practicing our traditions now. He said that the world is amazed by our festivals and the way we celebrate them. He said that we are organizing all these festivals in a grand manner so that the youth will never forget our culture. <br><br>Varalakshmi Vrata continued after Vigneswara Puja first. College students enthusiastically participated in special pujas. Vignan’s Educational Institutions Chairman Dr. Lavu Rattaiah\'s wife Lavu Nirmala, University VC Professor P. Nagabhushan, Registrar Dr. MS Raghunathan, Deans, heads and staff of the respective departments participated in the program.', '2024-08-30 09:37:06', 'assets/images/varalakshmivratham_31082024.jpg', 0, 'all', NULL),
(45, 'MOU', 'VIGNAN - MOU WITH NAPL', 'University Vice Chancellor Professor P. Nagabhushan said on Saturday that a memorandum of understanding was signed between Vadlamudi Science University, Chebrolu Mandal and Newcon Aerospace Private Limited (NAPL) in Hyderabad. In a program organized on this occasion, University Vice Chancellor Professor P. Nagabhushan exchanged documents related to MoU with NAPLR R&D General Manager JLP Tilak. In a program organized on the occasion, the varsity vice chancellor said that this MoU will facilitate joint research and development projects in the fields of aerospace engineering and defense technologies. We will work together to solve the challenges currently facing the industries and develop innovative solutions for them. Joint training programmes, workshops, seminars and industry-academia interactions will be organized to enhance skill development among students, faculty and researchers. Along with these, students will be provided internship opportunities, practical industry experience and professional growth will be enhanced. <br><br>An MTech course will be specially designed for NAPL employees to improve their technical skills and increase their educational qualifications. In addition, Newcon will introduce tailored minor/honours/modular programs in aerospace technologies to enhance the educational experience while meeting specific industry needs. In addition to these, Newcon employees will also be given an opportunity to take admission in Ph.D. On this occasion, JLP Tilak, General Manager of NAPLR R&D, said that he is very happy to enter into an MoU with Vignan’s University. The aim of this agreement is to encourage the students towards the latest technologies and give them promotion in the respective fields. NAPL HR Department Head Arvind Kumar, Vice Chancellor Professor P. Nagabhushan, Registrar Dr. MS Raghunathan, Deans, heads, staff and students of the respective departments of the university participated in the program.', '2024-08-31 09:21:31', 'assets/images/mouwithnapl_31082024.jpg', 0, 'all', NULL),
(46, 'Faculty Got PHD', 'Ph.D for Vignan\'s Faculty', 'Vice Chancellor Professor P. Nagabhushan said on Tuesday that Assistant Professor Pamidi Lakshminarayana of the EEE Department of the School of Electrical Electronics Communication Engineering, Vadlamudi Vignan’s University, Chebrolu Mandal, has been awarded the PhD degree in the EEE Department of their university. He informed that he has done research on \"Phaser Measurement Unit Placement with Complete Observability for Dynamic State Estimation in Power System\". It is stated that he was guided by Prof. Mercy Rosalina of the EEE Department of Wigans University. He revealed that as part of his research, he has published SCI-1, Scopus Journals-3 and International Conferences-2. Pamidi Lakshminarayana, who has completed PhD, was congratulated by Dr. Lavu Rattaiah, Chairman of Vignan’s Educational Institutions, University Vice-Chancellor Col. Prof. P. Nagabhushan, Registrar Dr. MS Raghunathan, Deans, Heads and teaching staff of the respective departments.', '2024-09-03 09:35:03', 'assets/images/facultyphd_03092024.jpg', 0, 'all', NULL),
(47, 'Flood Victims', 'Vignan’s University helps the flood victims', 'University Vice-Chancellor Colonel, Prof. P. Nagabhushan said on Wednesday that they provided food to the flood victims of Chebrolu Mandal Vadlamudi Science University Vijayawada. In the program organized on this occasion, 6 special buses arranged by the university were flagged off for the second consecutive day. On this occasion, he said that on behalf of the university, 10,000 kichidi, curd rice and water packets were specially packed for the flood victims and given to the victims. It is a difficult time and it is time for everyone to respond. He said that no one should suffer the hardships people are facing due to natural calamities. Also, all people should come forward with the theory that Manavseva is Madhavaseva. Deans, Heads of respective departments and NSS students participated in the program.', '2024-09-04 09:20:50', 'assets/images/floodvictims_04092024.jpg', 0, 'all', NULL),
(48, 'TEACHERS DAY ', 'VIGNAN - TEACHERS DAY CELEBRATIONS ', 'Vignan’s Educational Institutions Chairman Dr. Lavu Rattaiah said that teachers should have a loving relationship with students. Vignan’s University and Vignan’s Junior College in Vadlamudi, Chebrolu Mandal celebrated Teacher\'s Day on Thursday. Dr. Lavu Rattaiah, Chairman of Vignan\'s Educational Institutions, who attended the program as the chief guest, said that teachers should also improve their skills in accordance with technology. Accordingly, arrangements are being made to send the teachers of the university to the industries for 6 months for practical knowledge. He said that teachers have the responsibility to teach students values as well as education. It was revealed that the greatest opportunity that teachers have in any field is to get as many disciples as possible. The Vice Chancellor of the University, Col. P. Nagabhushan, who was another chief guest of the program, said that teaching is the highest profession in the society. His growth from a teacher to the President is exemplary for all those in the teaching profession. <br><br>He suggested that even if some students are lagging behind in their studies, many of them have become world champions and become intellectuals. Dr. PMV Rao, in-charge registrar of Vignan’s University, said that the future of the country is in the hands of the teacher and he is responsible for preparing the future citizens. He wished all the students to rise to higher heights in life by taking Radhakrishnan as an example. Later, prizes were awarded to the winning faculty members in various sports events organized to celebrate Teacher\'s Day. University Vice-Chancellor Colonel, Prof. P. Nagabhushan, In-charge Registrar Dr. PMV Rao, Co-ordinator of Vignan’s Educational Institutions Gudimella Srikurmanath, Principal J. Mohana Rao, Deans, Heads, University staff and students participated in the programme.', '2024-09-05 09:10:57', 'assets/images/teachersday_05092024.jpg', 0, 'all', NULL),
(49, 'International conference', 'International conference at Vignan', 'University Vice-Chancellor Colonel, Prof. P. Nagabhushan said on Friday that an international conference will be organized for two days from December 17 at Vadlamudi Science University, Chebrolu Mandal. A brochure related to the international conference was unveiled in the program organized on the occasion. On this occasion, the Vice-Chancellor said that under the joint auspices of the Department of Agricultural and Horticultural Sciences of the School of Agriculture and Food Technology, Apari (Asia-Pacific Association of Agricultural Research Institutes) and European Plant Health Research and Coordination, \"Plant Health in Asia: Research Priorities and Pa Partnerships It has been revealed that the conference is being organized on the topic. Apari Executive Director Dr. Ravi Khetarpal, ICRSAT Director General Dr. Jacqueline D. Rose Hughes, ICRAF World Agroforestry Director General Dr. Ravi Prabhu, Angru Vice Chancellor Dr. R. Sarada Jayalakshmi Devi, Dr. YSRHU were the chief guests Vice Chancellor Dr. K. Gopal, PPAI President Dr. B .Informed that Sarathbabu is coming.<br><br> Agri-Entrepreneurships and Public Private Farmer Partnership for Plant Health, Artificial Intelligence and IoT for Plant Health Management, Plant Health Advocacy in Asia, Changing Pest Scenario, Epidemiology, Forecasting and Monitoring in Relation to Climate It is mentioned that this international conference is being organized with the theme of Change. University Vice Chancellor Col. Prof. P. Nagabhushan, Registrar Dr. MS Raghunathan, Deans, Heads of respective departments and research students participated in the program.', '2024-09-07 09:41:29', 'assets/images/agricultureinterconf_07-09-2024.jpg', 0, 'all', NULL),
(50, 'Foolds Survey ', 'Survey of science students in flood areas', 'NSS students of Chebrolu mandal Vadlamudi Vignan’s University participated in the flood relief survey for the fourth consecutive day in the flooded areas of Vijayawada, University Vice Chancellor Colonel Professor P. Nagabhushan said on Tuesday. In the program organized on this occasion, the Vice Chancellor said that 300 NSS students of the university were divided into five groups and visited Vambe Colony Road, Shanti Nagar, Disneyland Road, Pipel Road, Ajit Singh Nagar, Ambedkar Inner Ring Road, Prakash Nagar, Rajiv Nagar, Fire Station in Vijayawada city. Road, Sundarayya Nagar, Thota Wari Vedi, Singh Nagar, Vaddera Colony, PNT Nagar Colony, whether the relief programs received from the government are properly received or not. <br><br>As part of the survey, it was revealed that the students had conducted a survey on whether food, milk and water were being provided at the right time in the respective colony. And some students informed that they helped by unloading the food items that came in lorries from different areas into tractors and served them to the people in the nearby areas. The students who participated in the flood relief activities were attended by Vignan’s Educational Institutions Chairman Dr. Lavu Rattaiah, Vice Chancellor Col. Prof. P. Nagabhushan, Registrar Dr. M. M. Raghunathan, Deans, Heads and students of the respective departments.', '2024-09-10 09:52:42', 'assets/images/fooldssurvey10092024.jpeg', 0, 'all', NULL),
(51, 'Awareness of diseases', 'Awareness of science students on protection from diseases', 'NSS students of Vadlamudi Vignan’s University, Chebrolu Mandal have educated the people trapped in Vijayawada flood areas on how to get protection from seasonal diseases caused by heavy rains and floods, University Vice Chancellor Colonel, Prof. P. Nagabhushan said on Wednesday. In a program organized on this occasion, the Vice Chancellor said that 280 NSS students of the university were divided into three groups and informed the people of Thota Vari Veedhi, Nandamuri Nagar and Indira Colonies in Vijayawada city about the precautions to be taken during floods. They want to make sure that there are no mosquitoes and flies in the house and surroundings. As it is the time of flood, the electrical appliances in the house should be used carefully. They want to ensure that there is no water stagnation inside the house, outside the house, in the materials like rolls. <br><br>It is advised to drink boiled and cooled clean water, keep lids on the food items and use a washclsoth after washing vegetables and fruits with good water. Those with symptoms of diarrhea should take liquid products available at home or contact the nearest health personnel. Since it is flood time, along with the flood water, snakes, scorpions etc. enter the surrounding areas of the house, so be careful. Doors and windows should be closed every evening to prevent mosquitoes from entering the house. The students who participated in the flood relief activities were attended by Vignan’s Educational Institutions Chairman Dr. Lavu Rattaiah, Vice Chancellor Col. Prof. P. Nagabhushan, Registrar Dr. M. S. Raghunathan, Deans, Heads and students of the respective departments.', '2024-09-11 09:07:48', 'assets/images/fooldsdiseases11092024.jpeg', 1, 'all', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `Id` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(200) DEFAULT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT '1994-01-01 00:00:00',
  `notify_type` varchar(100) DEFAULT NULL,
  `hlink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`Id`, `title`, `descr`, `date`, `notify_type`, `hlink`) VALUES
('noti_1', 'Non teaching & teaching staff walk-in (VFSTR Guntur)', NULL, '2024-08-03 16:28:27', 'career', 'https://vignan.ac.in/images/walkins/Walk%20in%20and%20Appli%20Invited_Eligibility%20(03-08-2024)%20Main%20Campus.pdf'),
('noti_10', 'BTech I-0, II-II, II-II (R19) and BTech I-0 (R16) July 2024 Supplementary Examinations - Revaluation Notification', NULL, '2024-08-02 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BTech%20I-0,%20II-II,%20II-II%20(R19)%20and%20BTech%20I-0%20(R16)%20July%202024%20Supplementary%20Examinations%20-%20Revaluation%20Notification.pdf'),
('noti_11', 'B.Tech. II-I (R16), III-I (R19) and B.Tech. - AGE II-I (R19) July 2024 Supplementary Examinations - Retotaling Notification', NULL, '2024-07-28 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/B.Tech.%20II-I%20(R16),%20III-I%20(R19)%20and%20B.Tech.%20-%20AGE%20II-I%20(R19)%20July%202024%20Supplementary%20Examinations%20-%20Retotaling%20Notification.pdf'),
('noti_12', 'B.Tech. II-I (R16), III-I (R19) and B.Tech. - AGE II-I (R19) July 2024 Supplementary Examinations - Revaluation Notification', NULL, '2024-07-28 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/B.Tech.%20II-I%20(R16),%20III-I%20(R19)%20and%20B.Tech.%20-%20AGE%20II-I%20(R19)%20July%202024%20Supplementary%20Examinations%20-%20Revaluation%20Notification.pdf'),
('noti_13', 'BBA III-I, III-II (R20), BCA I-II (R18), II-I, II-II, III-II (R21) July 2024 Supplementary Examinations - Retotaling Notification', NULL, '2024-07-28 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BBA%20III-I,%20III-II%20(R20),%20BCA%20I-II%20(R18),%20II-I,%20II-II,%20III-II%20(R21)%20July%202024%20Supplementary%20Examinations%20-%20Retotaling%20Notification.pdf'),
('noti_14', 'BBA III-I, III-II (R20), BCA I-II (R18), II-I, II-II, III-II (R21) July 2024 Supplementary Examinations - Revaluation Notification', NULL, '2024-07-28 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BBA%20III-I,%20III-II%20(R20),%20BCA%20I-II%20(R18),%20II-I,%20II-II,%20III-II%20(R21)%20July%202024%20Supplementary%20Examinations%20-%20Revaluation%20Notification.pdf'),
('noti_15', 'BPharmacy II-II, III-II (R18), BA-LLB I-I, I-II (R20) and Diploma II-II (R21) July 2024 Supplementary Examinations - Retotaling Notification', NULL, '2024-07-28 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BPharmacy%20II-II,%20III-II%20(R18),%20BA-LLB%20I-I,%20I-II%20(R20)%20and%20Diploma%20II-II%20(R21)%20July%202024%20Supplementary%20Examinations%20-%20Retotaling%20Notification.pdf'),
('noti_16', 'BPharmacy II-II, III-II (R18), BA-LLB I-I, I-II (R20) and Diploma II-II (R21) July 2024 Supplementary Examinations - Revaluation Notification', NULL, '2024-07-28 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BPharmacy%20II-II,%20III-II%20(R18),%20BA-LLB%20I-I,%20I-II%20(R20)%20and%20Diploma%20II-II%20(R21)%20July%202024%20Supplementary%20Examinations%20-%20Revaluation%20Notification.pdf'),
('noti_17', 'BSc I-I, I-II, II-II (R20) July 2024 Supplementary Examinations - Retotaling Notification', NULL, '2024-07-28 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BSc%20I-I,%20I-II,%20II-II%20(R20)%20July%202024%20Supplementary%20Examinations%20-%20Retotaling%20Notification.pdf'),
('noti_18', 'BSc I-I, I-II, II-II (R20) July 2024 Supplementary Examinations - Revaluation Notification', NULL, '2024-07-28 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BSc%20I-I,%20I-II,%20II-II%20(R20)%20July%202024%20Supplementary%20Examinations%20-%20Revaluation%20Notification.pdf'),
('noti_19', 'B. Pharmacy II-I, III-I and IV-I (R18) Supplementary Examinations July 2024 Revaluation Notification', NULL, '2024-07-25 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/B.%20Pharmacy%20II-I,%20III-I%20and%20IV-I%20(R18)%20Supplementary%20Examinations%20July%202024%20Revaluation%20Notification.pdf'),
('noti_2', 'Non teaching & teaching staff walk-in (VFSTR Off Campus)', NULL, '2024-08-03 00:00:00', 'career', 'https://vignan.ac.in/images/walkins/Walk%20in%20and%20Appli%20Invited_Eligibility%20(03-08-2024)%20Off%20Campus.pdf'),
('noti_20', 'B. Pharmacy II-I, III-I and IV-I (R18) Supplementary Examinations July 2024 Retotalling Notification', NULL, '2024-07-25 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/B.%20Pharmacy%20II-I,%20III-I%20and%20IV-I%20(R18)%20Supplementary%20Examinations%20July%202024%20Retotalling%20Notification.pdf'),
('noti_21', 'B. Sc., III-I, (R20 & R17), M. Sc., II-I, II-II (R20) Supplementary Examinations July 2024 Retotalling Notification', NULL, '2024-07-25 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/B.%20Sc.,%20III-I,%20(R20%20&%20R17),%20M.%20Sc.,%20II-I,%20II-II%20(R20)%20Supplementary%20Examinations%20July%202024%20Retotalling%20Notification.pdf'),
('noti_22', 'B. Sc., III-I, (R20 & R17), M. Sc., II-I, II-II (R20) Supplementary Examinations July 2024 Revaluation Notification', NULL, '2024-07-25 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/B.%20Sc.,%20III-I,%20(R20%20&%20R17),%20M.%20Sc.,%20II-I,%20II-II%20(R20)%20Supplementary%20Examinations%20July%202024%20Revaluation%20Notification.pdf'),
('noti_23', 'B. Tech. II-I (R19), B.Tech. III-I (R16) and B. Tech.Age. I-I (R19) Supply Examinations July 2024 Retotalling Notification', NULL, '2024-07-25 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/B.%20Tech.%20II-I%20(R19),%20B.Tech.%20III-I%20(R16)%20and%20B.%20Tech.%20I-I%20(R19)%20Supply%20Examinations%20%20July%202024%20Retotalling%20Notification.pdf'),
('noti_24', 'B. Tech. II-I (R19), B.Tech. III-I (R16) and B. Tech.Age. I-I (R19) Supply Examinations July 2024 Revaluation Notification', NULL, '2024-07-25 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/B.%20Tech.%20II-I%20(R19),%20B.Tech.%20III-I%20(R16)%20and%20B.%20Tech.%20I-I%20(R19)%20Supply%20Examinations%20%20July%202024%20Revaluation%20Notification.pdf'),
('noti_25', 'BBA I-I, II-I, II-II (R20) BBA III-I and II-I (R17) Supply Examinations July 2024 Retotalling Notification', NULL, '2024-07-25 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BBA%20I-I,%20II-I,%20II-II%20(R20)%20BBA%20III-I%20and%20II-I%20(R17)%20Supply%20Examinations%20July%202024%20Retotalling%20Notification.pdf'),
('noti_26', 'BBA I-I, II-I, II-II (R20) BBA III-I and II-I (R17) Supply Examinations July 2024 Revaluation Notification', NULL, '2024-07-25 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BBA%20I-I,%20II-I,%20II-II%20(R20)%20BBA%20III-I%20and%20II-I%20(R17)%20Supply%20Examinations%20July%202024%20Revaluation%20Notification.pdf'),
('noti_27', 'BCA I-I, III-I (R21), BCA I-I (R18) Supplementary Examinations July 2024 Retotalling Notification', NULL, '2024-07-25 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BCA%20I-I,%20III-I%20(R21),%20BCA%20I-I%20(R18)%20Supplementary%20Examinations%20July%202024%20Retotalling%20Notification.pdf'),
('noti_28', 'BCA I-I, III-I (R21), BCA I-I (R18) Supplementary Examinations July 2024 Revaluation Notification', NULL, '2024-07-25 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BCA%20I-I,%20III-I%20(R21),%20BCA%20I-I%20(R18)%20Supplementary%20Examinations%20July%202024%20Revaluation%20Notification.pdf'),
('noti_29', 'Diploma I-I (R21), Diploma II-I (R21) Supplementary Examinations July 2024 Retotalling Notification', NULL, '2024-07-25 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/Diploma%20I-I%20(R21),%20Diploma%20II-I%20(R21)%20Supplementary%20Examinations%20July%202024%20Retotalling%20Notification.pdf'),
('noti_3', 'Industry-Ready Professional Training (VLSI & Embeded System)', NULL, '2024-07-20 00:00:00', 'academics', 'https://vignan.ac.in/2023pdf/Industry%20Ready%20Professional%20Training%20Course.pdf'),
('noti_30', 'Diploma I-I (R21), Diploma II-I (R21) Supplementary Examinations July 2024 Revaluation Notification', NULL, '2024-07-25 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/Diploma%20I-I%20(R21),%20Diploma%20II-I%20(R21)%20Supplementary%20Examinations%20July%202024%20Revaluation%20Notification.pdf'),
('noti_31', 'B. Pharmacy I-I (R18) Reg. Examinations June 2024 Retotalling Notification', NULL, '2024-07-23 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/B.%20Pharmacy%20I-I%20(R18)%20Reg.%20Examinations%20June%202024%20Retotalling%20Notification.pdf'),
('noti_32', 'B. Pharmacy I-I (R18) Reg. Examinations June 2024 Revaluation Notification', NULL, '2024-07-23 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/B.%20Pharmacy%20I-I%20(R18)%20Reg.%20Examinations%20June%202024%20Revaluation%20Notification.pdf'),
('noti_33', 'NPTEL Substitute Subject Notification July 2024', NULL, '2024-07-11 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/NPEL%20Substitute%20Subject%20Notification%20July%202024.pdf'),
('noti_34', 'I B.TECH I,II Semester (R21), I,II MBA I,II Semester (R22) Supplementary Examinations-July 2024 Fee Notification', NULL, '2024-07-02 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/I%20B.TECH%20I,II%20Semester%20(R21),%20I,II%20MBA%20I,II%20Semester%20(R22)%20%20Supplementary%20Examinations-July%202024%20Fee%20Notification.pdf'),
('noti_35', 'BTech-I-0,II-II,III-II R19 and BTech-I-0,II-II,III-II, IV-0 R16 Supplementary Examinations Retotaling Notification', NULL, '2024-06-24 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BTech-I-0,II-II,III-II%20R19%20and%20BTech-I-0,II-II,III-II,%20IV-0%20R16%20Supplementary%20Examinations%20Retotaling%20Notification.pdf'),
('noti_36', 'BTech-I-0,II-II,III-II R19 and BTech-I-0,II-II,III-II, IV-0 R16 Supplementary Examinations Revaluation Notification', NULL, '2024-06-24 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BTech-I-0,II-II,III-II%20R19%20and%20BTech-I-0,II-II,III-II,%20IV-0%20R16%20Supplementary%20Examinations%20Revaluation%20Notification.pdf'),
('noti_37', 'I,II, B.Sc. (Hons) AGE R22 Sup End Exams-July 2024 Fee Notification', NULL, '2024-06-25 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/I,II,%20B.Sc.%20(Hons)%20AGE%20R22%20%20Sup%20End%20Exams-July%202024%20Fee%20Notification.pdf'),
('noti_38', 'BTech-IV-II R19 and BTech.AGE-IV-II R19 May 2024 Regular Examinations Retotaling Notification', NULL, '2024-06-24 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BTech-IV-II%20R19%20and%20BTech.AGE-IV-II%20R19%20May%202024%20Regular%20Examinations%20Retotaling%20Notification.pdf'),
('noti_39', 'BTech-IV-II R19 and BTech.AGE-IV-II R19 May 2024 Regular Examinations Revaluation Notification', NULL, '2024-06-24 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BTech-IV-II%20R19%20and%20BTech.AGE-IV-II%20R19%20May%202024%20Regular%20Examinations%20Revaluation%20Notification.pdf'),
('noti_4', 'Non teaching & teaching staff walk-in (VFSTR Guntur)', NULL, '2024-06-14 00:00:00', 'career', 'https://vignan.ac.in/images/walkins/Walk%20in%20Interviews%20Eligibility%20(15-06-2024).pdf'),
('noti_40', 'BBA-III-II R20, BPharmacy-II-II,III-II R18 May2024 Regular Examinations - Retotalling Notification', NULL, '2024-06-19 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BBA-III-II%20R20,%20BPharmacy-II-II,III-II%20R18%20May2024%20Regular%20Examinations%20-%20Retotalling%20Notification.pdf'),
('noti_41', 'BBA-III-II R20, BPharmacy-II-II,III-II R18 May2024 Regular Examinations - Revaluation Notification', NULL, '2024-06-19 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BBA-III-II%20R20,%20BPharmacy-II-II,III-II%20R18%20May2024%20Regular%20Examinations%20-%20Revaluation%20Notification.pdf'),
('noti_42', 'All courses supplementary examinations II Semester - JULY 2024 Fee Notification', NULL, '2024-06-12 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/All%20courses%20supplementary%20examinations%20II%20Semester%20-%20JULY%202024%20Fee%20Notification.pdf'),
('noti_43', 'All courses supplementary examinations I Semester - JULY 2024 Fee Notification', NULL, '2024-06-12 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/All%20courses%20supplementary%20examinations%20I%20Semester%20-%20JULY%202024%20Fee%20Notification.pdf'),
('noti_44', 'BBA II-II and III-II R17, BBA I-II and II-II R20, BCA I-II R18, BCA I-II AND II-II R21, BSc III-II R17, BSC I-II and II-II R20 and BTech-AGE II-II R19 Retotalling', NULL, '2024-06-10 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BBA%20II-II%20and%20III-II%20R17,%20BBA%20I-II%20and%20II-II%20R20,%20BCA%20I-II%20R18,%20BCA%20I-II%20AND%20II-II%20R21,%20BSc%20III-II%20R17,%20BSC%20I-II%20and%20II-II%20R20%20and%20BTech-AGE%20II-II%20R19%20Retotalling.pdf'),
('noti_45', 'BBA II-II and III-II R17, BBA I-II and II-II R20, BCA I-II R18, BCA I-II AND II-II R21, BSc III-II R17, BSC I-II and II-II R20 and BTech-AGE II-II R19 Revaluation', NULL, '2024-06-10 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BBA%20II-II%20and%20III-II%20R17,%20BBA%20I-II%20and%20II-II%20R20,%20BCA%20I-II%20R18,%20BCA%20I-II%20AND%20II-II%20R21,%20BSc%20III-II%20R17,%20BSC%20I-II%20and%20II-II%20R20%20and%20BTech-AGE%20II-II%20R19%20Revaluation.pdf'),
('noti_46', 'Diploma I-II and II-II R21, BCA-III-II R21, BSc-III-II R20 May2024 Regular Examinations Retotaling Notification', NULL, '2024-06-10 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/Diploma%20I-II%20and%20II-II%20R21,%20BCA-III-II%20R21,%20BSc-III-II%20R20%20May2024%20Regular%20Examinations%20Retotaling%20Notification.pdf'),
('noti_47', 'Diploma I-II and II-II R21, BCA-III-II R21, BSc-III-II R20 May2024 Regular Examinations Revaluation Notification', NULL, '2024-06-10 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/Diploma%20I-II%20and%20II-II%20R21,%20BCA-III-II%20R21,%20BSc-III-II%20R20%20May2024%20Regular%20Examinations%20Revaluation%20Notification.pdf'),
('noti_48', 'I B.Pharmacy & I B.Tech. AG Supplementary End Exams II Semester - JUNE 2024 Fee Notification', NULL, '2024-05-22 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/I%20B.Pharmacy%20&%20I%20B.Tech.%20AG%20Supplementary%20End%20Exams%20II%20Semester%20-%20JUNE%202024%20Fee%20Notification.pdf'),
('noti_49', 'B. Pharmacy IV-II, I-I (R18) Regular Examinations April 2024 Retotalling Notification', NULL, '2024-05-18 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/B.%20Pharmacy%20IV-II,%20I-I%20(R18)%20Regular%20Examinations%20April%202024%20Retotalling%20Notification.pdf'),
('noti_5', 'B.Tech._4YEAR_0SEM_SUP_R19 JULY 2024 Retotalling Notification', NULL, '2024-08-05 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/B.Tech._4YEAR_0SEM_SUP_R19_JULY_2024%20Retotalling%20Notification.pdf'),
('noti_50', 'B. Pharmacy IV-II, I-I (R18) Regular Examinations April 2024 Revaluation Notification', NULL, '2024-05-18 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/B.%20Pharmacy%20IV-II,%20I-I%20(R18)%20Regular%20Examinations%20April%202024%20Revaluation%20Notification.pdf'),
('noti_51', 'BALLB, BBALLB II-II, III-II IV-II Reg. R20, BBALLB I-II (R20) Sup. April 2024 Retotalling Notification', NULL, '2024-05-18 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BALLB,%20BBALLB%20II-II,%20III-II%20IV-II%20Reg.%20R20,%20BBALLB%20I-II%20(R20)%20Sup.%20April%202024%20Retotalling%20Notification.pdf'),
('noti_52', 'BALLB, BBALLB II-II, III-II IV-II Reg. R20, BBALLB I-II (R20) Sup. April 2024 Revaluation Notification', NULL, '2024-05-18 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BALLB,%20BBALLB%20II-II,%20III-II%20IV-II%20Reg.%20R20,%20BBALLB%20I-II%20(R20)%20Sup.%20April%202024%20Revaluation%20Notification.pdf'),
('noti_53', 'Summer semester 2024 – Notification for B. Tech.(R19), BCA(R21), BBA(R20), B.Sc.(R20), B. Pharmacy(R18), M. Sc.(R20), LAW (R20), Diploma(R21)', NULL, '2024-05-21 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/Summer%20semester%202024%20–%20Notification.pdf'),
('noti_54', 'Summer semester 2024 – Notification for B. Tech. (R22) BBA (R22), BCA (R22) B. SC. (R22) M. Tech. (R22) MBA (R22) MCA(R22) (R22)', NULL, '2024-05-21 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/Summer%20semester%202024%20–%20Notification%20%20for%20R22.pdf'),
('noti_55', 'M.Sc II-II Reg (R20) April 2024 - Retotaling Notification', NULL, '2024-05-08 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/M.Sc%20II-II%20Reg%20(R20)%20April%202024%20-%20Retotaling%20Notification.pdf'),
('noti_56', 'M.Sc II-II Reg (R20) April 2024 - Revaluation Notification', NULL, '2024-05-08 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/M.Sc%20II-II%20Reg%20(R20)%20April%202024%20-%20Revaluation%20Notification.pdf'),
('noti_57', 'Diploma I-I, II-I Sup (R21) February 2024 - Retotaling Notification', NULL, '2024-04-19 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/Diploma%20I-I,%20II-I%20Sup%20(R21)%20February%202024%20-%20Retotaling%20Notification.pdf'),
('noti_58', 'Diploma I-I, II-I Sup (R21) February 2024 - Revaluation Notification', NULL, '2024-04-19 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/Diploma%20I-I,%20II-I%20Sup%20(R21)%20February%202024%20-%20Revaluation%20Notification.pdf'),
('noti_59', 'Pre-Ph.D I-I Reg (R18) Feb 24, B.Tech IV - 0 Sup (R19) and B.B.A III - 0 Sup (R20) Mar\'24 - Retotaling Notification', NULL, '2024-04-13 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/Pre-Ph.D%20I-I%20Reg%20(R18)%20Feb%2024,%20B.Tech%20IV%20-%200%20Sup%20(R19)%20and%20B.B.A%20III%20-%200%20Sup%20(R20)%20Mar24%20-%20Retotaling%20Notification.pdf'),
('noti_6', 'B.Tech._4YEAR_0SEM_SUP_R19 JULY 2024 Revaluation Notification', NULL, '2024-08-05 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/B.Tech._4YEAR_0SEM_SUP_R19_JULY_2024%20Revaluation%20Notification.pdf'),
('noti_60', 'Pre-Ph.D I-I Reg (R18) Feb 24, B.Tech IV - 0 Sup (R19) and B.B.A III - 0 Sup (R20) Mar\'24 - Revaluation Notification', NULL, '2024-04-13 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/Pre-Ph.D%20I-I%20Reg%20(R18)%20Feb%2024,%20B.Tech%20IV%20-%200%20Sup%20(R19)%20and%20B.B.A%20III%20-%200%20Sup%20(R20)%20Mar24%20-%20Revaluation%20Notification.pdf'),
('noti_61', 'Supplementary End Exams II Semester - May 2024 Fee Notification', NULL, '2024-04-07 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/Supplementary%20End%20Exams%20II%20Semester%20-%20May%202024%20Fee%20Notification.pdf'),
('noti_62', 'I,II,III & IV B.A. & B.B.A. LLB(Hons), IV-B.Pharmacy, II-M.Sc_ II Sem Sup End Exams-April 2024 Fee Notification', NULL, '2024-03-22 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/I,II,III%20&%20IV%20B.A.%20&%20B.B.A.%20LLB(Hons),%20IV-B.Pharmacy,%20II-M.Sc_%20II%20Sem%20%20Sup%20End%20Exams-April%202024%20Fee%20Notification.pdf'),
('noti_63', 'I & II Diploma (R21) I Semester_ Supplementary Examinations_ April 2024 fee notification', NULL, '2024-03-18 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/I%20&%20II%20Diploma%20(R21)%20I%20Semester_%20Supplementary%20Examinations_%20April%202024%20fee%20notification.pdf'),
('noti_64', 'B.Pharmacy (R18)- Regular Examinations_ April 2024 fee notification', NULL, '2024-04-13 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/B.Pharmacy%20(R18)-%20Regular%20Examinations_%20April%202024%20fee%20notification.pdf'),
('noti_65', 'B.Tech (R19) & BBA (R20)_Special Supplementary Examinations_ March 2024 fee notification', NULL, '2024-03-12 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/B.Tech%20(R19)%20&%20BBA%20(R20)_Special%20Supplementary%20Examinations_%20March%202024%20fee%20notification.pdf'),
('noti_66', 'I-B.tech II-Supplementary exam- march2024', NULL, '2024-03-05 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/I-B.tech%20II-Supplementary%20exam-%20march2024.pdf'),
('noti_7', 'BBA I-II (R20), III-II (R17), BCA I-II (R21), BSc II-II (R20) and Diploma I-II (R21) July 2024 Supplementary Examinations - Retotaling Notification', NULL, '2024-08-02 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BBA%20I-II%20(R20),%20III-II%20(R17),%20BCA%20I-II%20(R21),%20BSc%20II-II%20(R20)%20and%20Diploma%20I-II%20(R21)%20July%202024%20Supplementary%20Examinations%20-%20Retotaling%20Notificat.pdf'),
('noti_8', 'BBA I-II (R20), III-II (R17), BCA I-II (R21), BSc II-II (R20) and Diploma I-II (R21) July 2024 Supplementary Examinations - Revaluation Notification', NULL, '2024-08-02 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BBA%20I-II%20(R20),%20III-II%20(R17),%20BCA%20I-II%20(R21),%20BSc%20II-II%20(R20)%20and%20Diploma%20I-II%20(R21)%20July%202024%20Supplementary%20Examinations%20-%20Revaluation%20Notifica.pdf'),
('noti_9', 'BTech I-0, II-II, II-II (R19) and BTech I-0 (R16) July 2024 Supplementary Examinations - Retotaling Notification', NULL, '2024-08-02 00:00:00', 'exam', 'https://vignan.ac.in/2023pdf/BTech%20I-0,%20II-II,%20II-II%20(R19)%20and%20BTech%20I-0%20(R16)%20July%202024%20Supplementary%20Examinations%20-%20Retotaling%20Notification.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `patents`
--

CREATE TABLE `patents` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `descr` varchar(1000) DEFAULT NULL,
  `from_year` year(4) DEFAULT NULL,
  `to_year` year(4) DEFAULT NULL,
  `dept` varchar(200) DEFAULT NULL,
  `btn_nm` varchar(100) DEFAULT NULL,
  `btn_hlink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patents`
--

INSERT INTO `patents` (`id`, `title`, `descr`, `from_year`, `to_year`, `dept`, `btn_nm`, `btn_hlink`) VALUES
(1, 'Ms. Syed Habibunnisa, Dr N.Ruben', 'An unique sustainable construction material extracted from WRIGTHIA –TINCTORIA seed fiber and analyzing its properties thereof', 2019, 2020, 'Civil Engg.', 'Read More', NULL),
(2, 'Dr. U. Srilakshmi', 'Aeroplane, Aircraft accidents predictive analytics using machine learning, deep learning and other programing', 2019, 2020, 'Computer Science & Engg.', 'Read More', NULL),
(3, 'Mr.T.R.Rajesh', 'Segmenatation of surface cacks based on a fully convolutional neural network and gated scale pooling', 2019, 2020, 'Computer Science & Engg.', 'Read More', NULL),
(4, 'Dr.T.P.Latchoumi', 'Method For Diagnose Medical Problem Using Medical Image Processing Using Big Data And Machine Learning', 2019, 2020, 'Computer Science & Engg.', 'Read More', NULL),
(5, 'Mr.K.V.RangaRao', 'Developemnt of Pesticides Spray Drone for Agriculture Fields', 2019, 2020, 'Computer Science & Engg.', 'Read More', NULL),
(6, 'Mr.M.Chithambarathanu', 'An approach for empowering edge computing for source allocation based learning for industrial IOT', 2019, 2020, 'Computer Science & Engg.', 'Read More', NULL),
(7, 'Mr.G.Suresh', 'Solid state deposition process of surface alloy coating', 2019, 2020, 'Mechanical Engg.', 'Read More', NULL),
(8, 'Mr. Suresh Kommu, Mr.Asadi Siva Sankar', 'Geo Composite Liner Systems', 2019, 2020, 'Civil Engg.', 'Read More', NULL),
(9, 'Dr. B.Singarvel, Mr. K .Mangapathi Rao, Dr. D. Vinay Kumar, Dr. K. Chandra Shekar, Dr S.Deva Prasad, Dr. Syed MujahedHussain, Mr. N. Venkateswarlu, Dr. M Mohammed Asif', 'ED-Machine: Nano Powder mixed vegetable oil as dielectric fluid coupled with cryogenically treated electrode and bio thiner for enhancement of process performance in electrical discharge machining', 2019, 2020, 'Mechanical Engg.', 'Read More', NULL),
(10, 'Mr. B. Singaravel, Mr.Dr. L Suvarna Raju, Ms. Ch. Divya', 'IT-Turning Process: Intelligent Image Processing Technology for Textured Cutting Tool Wear Measurement in Turning Process', 2019, 2020, 'Mechanical Engg.', 'Read More', NULL),
(11, 'Mr.Sriramireddy K, Dr.D.Satyanarayana, Dr.Ravikumar M, Dr.Lam SuvarnaRaju, Mr.P S R GopalaSetti', 'An efficient Methodology and a system to Rescue a child fell into abandoned bore well', 2019, 2020, 'Mechanical Engg.', 'Read More', NULL),
(12, 'Mr. R.V. Omkumar, Mr.C. Sadasivan, Dr.Shaik Anwar, V. Elessery, C. Remya, Mr.E.Kotireddy', 'Tacrine Derivatives targeting NMDA rElectronics& Communication Engg.ptor, acetylcholine esterase, Butyryl choline and beta secretace activity', 2019, 2020, 'Science & Humanities', 'Read More', NULL),
(13, 'Dr B.Srinivasa Rao, Dr.Kamepalli Sujatha', 'Implement industry institution interaction for management students', 2019, 2020, 'Management Science', 'Read More', NULL),
(14, 'Dr K.Satya Prasad', 'A Method of Image denoising and a system thereof', 2019, 2020, 'Electronics & Communication Engg.', 'Read More', NULL),
(15, 'Dr.Shaik Anwar, Mr.E.Koti Reddy', 'Novel Tacrine Derivatives that target NMDA rElectronics& Communication Engg.ptoracetylcholinesterase, Butyrylcholinesterase and beta secretace activities', 2019, 2020, 'Science & Humanities', 'Read More', NULL),
(16, 'Dr.G.Srinivasa Rao, Mr.M.V.Rayudu, Mr.V.Nagesh', 'Soft switching in flyback converters using a fixed dead time', 2019, 2020, 'Electrical & Electronics Engg.', 'Read More', NULL),
(17, 'Dr.M.Alagar, Dr.S.Devaraju, Dr.K.Krishnadevi', 'Process route for the novel latent curative for a epoxy resin', 2019, 2020, 'Science & Humanities', 'Read More', NULL),
(18, 'Dr. K.Satya Prasad', 'Methodology and system for image restoration', 2018, 2019, 'Electronics & Communication Engg.', 'Read More', NULL),
(19, 'Mr. M.V. Rayudu, Mr. V. Nagesh, Dr.G.Srinivasa Rao', 'Realizing ZVS and ZCS in a continuous conduction boost converter with boundary mode control', 2018, 2019, 'Electrical & Electronics Engg.', 'Read More', NULL),
(20, 'Mr. M.V. Rayudu, Mr. V. Nagesh, Dr.G. Srinivasa Rao', 'Realizing ZVS and ZCS in a CCM boost converter with BCM control with a single switch', 2018, 2019, 'Electrical & Electronics Engg.', 'Read More', NULL),
(21, 'Dr. G.Srinivasa Rao, Mr.M.V.Rayudu, Mr. V.Nagesh', 'Soft switching in single switch boundary conduction mode fly back converters using fixed dead time', 2018, 2019, 'Electrical & Electronics Engg.', 'Read More', NULL),
(22, 'Dr. N.S. Sampath Kumar, Ms. K. MrudulaChowdary, Mr.Sathish Kumar Thirumalasetti, Ms.J. Jasmine Reddy, Dr.Vijaya R. Dirisala', 'An Edible Flavor Enhancer From PterygoplichthysPardalis', 2018, 2019, 'Biotechnology', 'Read More', NULL),
(23, 'Dr.Kodali Vidya Prabhakar, Mr.Ch Ravi Teja, Dr.Karlapudi Abraham Peele, Dr.Ravuru Bharath Kumar', 'Novel alkaline laccas from a marine bacterium:Isolation and preparation thereof', 2018, 2019, 'Biotechnology', 'Read More', NULL),
(24, 'Dr.M. Alagar, Dr. Murthy Chavali', 'Process for the production of novel dual functional curatives and impact modifiers for epoxy resin', 2018, 2019, 'Science & Humanities', 'Read More', NULL),
(25, 'Dr.M. Alagar, Dr. Murthy Chavali', 'Process for the production of novel low temperature cure benzoxazines', 2018, 2019, 'Science & Humanities', 'Read More', NULL),
(26, 'Mr.Jadhav, Mr.Chaya Ravi, Dr. N. Usha Rani', 'System and Method for complaint registration, Management and Tracking', 2017, 2018, 'Electronics & Communication Engg.', 'Read More', NULL),
(27, 'Dr.G.Durga Sukumar, Dr.M.Rama Krishna', 'Intelligent embedded priority based energy management system and method', 2017, 2018, 'Mechanical Engg.', 'Read More', NULL),
(28, 'Mr.Aradhyula Thirumala Vasu, Dr.Balaga Nageswara Rao, Dr.Domakonda Vinay Kumar, Dr.Chavali Murthy', 'A method of operation and a magnetic flux based Mechanical Engg.anical power generator', 2015, 2016, 'Mechanical Engg.', 'Read More', NULL),
(29, 'Mr.Aradhyula Thirumala Vasu, Dr. M. Ramakrishna, Dr.Chavali Murthy', 'Contemporary Duster', 2015, 2016, 'Mechanical Engg.', 'Read More', NULL),
(30, 'Dr.Usharani . N, Mr. John William Carey. Medithe', 'Automatic eye blink detector using Ni Myrio', 2015, 2016, 'Electronics & Communication Engg.', 'Read More', NULL),
(31, 'Dr. N.S. Sampath Kumar, Ms.Shaik Shaheena, Dr. D. VijayaRamu, Dr. S. Krupanidhi', 'A oral composition dentifrice void of chemicals', 2015, 2016, 'Biotechnology', 'Read More', NULL),
(32, 'Prof. Srirama Krupanidhi, Ms.Jampala Harshitha, Dr. Sunil Kumar, Prof. Jonathan wong', 'An apparatus and a method for the biotransformation of the domestic vegetable scrap into manure compost', 2015, 2016, 'Biotechnology', 'Read More', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peoples`
--

CREATE TABLE `peoples` (
  `name` varchar(40) DEFAULT NULL,
  `designation` varchar(40) DEFAULT NULL,
  `type` varchar(60) DEFAULT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('Dr. Vijaybabu Palukuri', 'Program Officer', 'ueac', 'assets/images/award1.webp'),
('Dr. Vijaybabu Palukuri', 'Associate Dean', 'ueac', 'assets/images/award2.webp'),
('Mr. G. Aditya', 'UEAC Coordinator', 'ueac', 'assets/images/award3.webp'),
('Mr. V. Nagireddy', 'UEAC Coordinator', 'ueac', 'assets/images/award4.webp'),
('Dr Ramadeva Reddy Bodapati', 'Psychologist', 'physiology', 'assets/images/ramadevareddy'),
('Dr Jyostna Devi Bodapati', 'Psychologist', 'physiology', 'assets/images/jyotsnadevi'),
('Dr Rajendrakumar Vishawa Pallikal', 'Psychologist', 'physiology', 'assets/images/rajendrakumarvishwa'),
('Dr Jyoti Bodapati', 'Psychologist', 'physiology', 'assets/images/jyotibodapati'),
('Dr. Y. Ravi Sekhar', 'Chairman', 'lib_advisory_committee', 'assets/images/aboutus_img12.webp'),
('Dr.M. Subba Rao', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img14.webp'),
('Dr. A. Vijaya Sai', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img13.webp'),
('Dr. Sk. Farooq', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img11.webp'),
('Dr. Y. Ravi Sekhar', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img12.webp'),
('Dr.M. Subba Rao', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img14.webp'),
('Dr. A. Vijaya Sai', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img13.webp'),
('Dr. Sk. Farooq', 'Member', 'lib_advisory_committee', 'assets/images/aboutus_img11.webp'),
('Gorantla Jahnavi', 'BA.LLB(Hons.)', 'lib_student_committee', 'assets/images/pexels_photo_by_pegah_sharifi (3).webp'),
('K. Dinesh', 'Mechanical', 'lib_student_committee', 'assets/images/studentimage1.png'),
('Shaik Nasmeen', 'Mechanical', 'lib_student_committee', 'assets/images/studentimage2.png'),
('Vadiyara Gopichand', 'Mechanical', 'lib_student_committee', 'assets/images/studentimage3.png'),
('Gorantla Jahnavi', 'BA.LLB(Hons.)', 'lib_student_committee', 'assets/images/pexels_photo_by_pegah_sharifi (3).webp'),
('K. Dinesh', 'Mechanical', 'lib_student_committee', 'assets/images/studentimage1.png'),
('Shaik Nasmeen', 'Mechanical', 'lib_student_committee', 'assets/images/studentimage2.png'),
('Vadiyara Gopichand', 'Member', 'lib_student_committee', 'assets/images/studentimage3.png'),
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

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `Id` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(100) DEFAULT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `duration` varchar(10) DEFAULT NULL,
  `btn_nm` varchar(100) DEFAULT NULL,
  `btn_hlink` varchar(225) DEFAULT NULL,
  `program_type` varchar(100) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `program_order` int(3) DEFAULT NULL,
  `course_str` varchar(255) DEFAULT NULL,
  `page` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`Id`, `title`, `descr`, `duration`, `btn_nm`, `btn_hlink`, `program_type`, `dept`, `program_order`, `course_str`, `page`) VALUES
(' prog_ugbtech', 'B.Tech', 'Bachelors of Technology', '4 years', 'View all departments', 'department.php', 'ug', NULL, 1, NULL, ''),
(' prog_ugfarm', 'B.Pharm', 'Bachelors of Pharmacy', '4 years', 'View all departments', 'department.php', 'ug', NULL, 1, NULL, ''),
('cal_sec1_card1', 'CSE', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20Diploma%20Courses%20(CSE%20&%20ECE).pdf', 'diploma', NULL, NULL, NULL, ''),
('cal_sec1_card2', 'ECE', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20Diploma%20Courses%20(CSE%20&%20ECE).pdf', 'diploma', NULL, NULL, NULL, ''),
('cal_sec2_card1', 'Bachelor of Technology', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20Bachelor%20of%20Technology.pdf', 'btech', NULL, NULL, NULL, ''),
('cal_sec2_card2', 'Agriculture Engineering', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20B.Tech-AGE.pdf', 'btech', NULL, NULL, NULL, ''),
('cal_sec2_card3', 'Computer Applications', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20Bachelor%20of%20Computer%20Applications.pdf', 'btech', NULL, NULL, NULL, ''),
('cal_sec2_card4', 'Business Administrations ', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20Bachelor%20of%20Business%20Administration%202024-25.pdf', 'btech', NULL, NULL, NULL, ''),
('cal_sec3_card1', 'Mathematics', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20B.Sc(Mathematics,%20Statistics,%20Computer%20Science).pdf', 'bsc', NULL, NULL, NULL, ''),
('cal_sec3_card2', 'Statistics', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20B.Sc(Mathematics,%20Statistics,%20Computer%20Science).pdf', 'bsc', NULL, NULL, NULL, ''),
('cal_sec3_card3', 'Computer Science', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20B.Sc(Mathematics,%20Statistics,%20Computer%20Science).pdf', 'bsc', NULL, NULL, NULL, ''),
('cal_sec3_card4', 'Agriculture', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20B.Sc(Hons)%20-%20Agriculture.pdf', 'bsc', NULL, NULL, NULL, ''),
('cal_sec4_card1', 'Chemistry ', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20M.Sc-Chemistry%20&%20Organic%20Chemistry.pdf', 'msc', NULL, NULL, NULL, ''),
('cal_sec4_card2', 'Organic Chemistry  ', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20M.Sc-Chemistry%20&%20Organic%20Chemistry.pdf', 'msc', NULL, NULL, NULL, ''),
('cal_sec4_card3', 'Computer Science ', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20Master%20of%20Technology%202024-25.pdf', 'mtech', NULL, NULL, NULL, ''),
('cal_sec5_card1', ' Computer Application', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20Master%20of%20Technology%202024-25.pdf', 'mtech', NULL, NULL, NULL, ''),
('cal_sec5_card2', 'Business Administration ', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20Master%20of%20Technology%202024-25.pdf', 'mtech', NULL, NULL, NULL, ''),
('cal_sec5_card3', 'MA English', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20Master%20of%20Technology%202024-25.pdf', 'mtech', NULL, NULL, NULL, ''),
('cal_sec6_card1', 'B. Pharmacy', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20B.Pharmacy.pdf', 'other', NULL, NULL, NULL, ''),
('cal_sec6_card2', 'BA.LLB (Hons)', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20BA.LLB(Hons)%20and%20BBA.LLB(Hons)%202024-25.pdf', 'other', NULL, NULL, NULL, ''),
('cal_sec6_card3', 'BBA.LLB (Hons)', NULL, NULL, 'Download Calendar', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20BA.LLB(Hons)%20and%20BBA.LLB(Hons)%202024-25.pdf', 'other', NULL, NULL, NULL, ''),
('policies_card1', 'Maintenance Policy', '', '', 'Download', 'https://vignan.ac.in/pdf/Procedures%20and%20Policy%20for%20Maintenance.pdf', 'policy', NULL, NULL, NULL, ''),
('policies_card10', 'Research Policy', NULL, NULL, 'Download', 'https://vignan.ac.in/pdf/University%20Research%20Policy.pdf', 'policy', NULL, NULL, NULL, ''),
('policies_card11', 'Industrial Training Policy', NULL, NULL, 'Download', 'https://vignan.ac.in/pdf/INDUSTRIAL%20TRAINING%20POLICY.pdf', 'policy', NULL, NULL, NULL, ''),
('policies_card12', 'Financial Policy', NULL, NULL, 'Download', 'https://vignan.ac.in/pdf/Financial%20Policy.pdf', 'policy', NULL, NULL, NULL, ''),
('policies_card13', 'Resource Mobilisation Policy', NULL, NULL, 'Download', 'https://vignan.ac.in/pdf/Resource%20Mobilization%20Policy.pdf', 'policy', NULL, NULL, NULL, ''),
('policies_card14', 'Environment & Sustainability Policy', NULL, NULL, 'Download', 'https://vignan.ac.in/pdf/Environment%20&%20Sustainability%20Policy.pdf', 'policy', NULL, NULL, NULL, ''),
('policies_card15', 'Gender Equity Policy', NULL, NULL, 'Download', 'https://vignan.ac.in/pdf/Gender%20Equity%20Policy.pdf', 'policy', NULL, NULL, NULL, ''),
('policies_card16', 'IT Policy', NULL, NULL, 'Download', 'https://vignan.ac.in/naacdownload/IT-Policy.pdf', 'policy', NULL, NULL, NULL, ''),
('policies_card17', 'COVID19 Policy Document', NULL, NULL, 'Download', 'https://vignan.ac.in/pdf/covid19.pdf', 'policy', NULL, NULL, NULL, ''),
('policies_card18', 'Admission Policy', '', '', 'Download', 'https://vignan.ac.in/pdf/Admission_Policy%20and%20procedure.pdf', 'policy', NULL, NULL, NULL, ''),
('policies_card2', 'Service Rules, Policies & Procedures', '', '', 'Download', 'https://vignan.ac.in/Service%20Rules%20(VFSTR).pdf', 'policy', NULL, NULL, NULL, ''),
('policies_card3', 'Admission Policy', '', '', 'Download', 'https://vignan.ac.in/pdf/Admission_Policy%20and%20procedure.pdf', 'policy', NULL, NULL, NULL, ''),
('policies_card4', 'Reservation Policy', '', '', 'Download', 'https://vignan.ac.in/naacdownload/IT-Policy.pdf', 'policy', NULL, NULL, NULL, ''),
('policies_card5', 'E-Governance Policy', '', '', 'Download', 'https://vignan.ac.in/pdf/E-Governance%20VFSTR%20overall%20software%20brief%20report.pdf', 'policy', NULL, NULL, NULL, ''),
('policies_card6', 'Consultancy Policy', NULL, NULL, 'Download', 'https://vignan.ac.in/pdf/Consultancy%20Policy.pdf', 'policy', NULL, NULL, NULL, ''),
('policies_card7', 'Scholarships Policy', NULL, NULL, 'Download', 'https://vignan.ac.in/pdf/SCHOLARSHIPS%20POLICY.pdf', 'policy', NULL, NULL, NULL, ''),
('policies_card8', 'Student Grievance redressal Policy', NULL, NULL, 'Download', 'https://vignan.ac.in/pdf/Policy%20for%20Student%20Grievance%20redressal.pdf', 'policy', NULL, NULL, NULL, ''),
('policies_card9', 'Divyangjan Policy', NULL, NULL, 'Download', 'https://vignan.ac.in/pdf/Policy%20on%20Divyangjan.pdf', 'policy', NULL, NULL, NULL, ''),
('policy_hand_card1', 'Hand Books', '', '', 'Download', 'https://vignan.ac.in/handbooks.html', 'hand', NULL, NULL, NULL, ''),
('policy_hand_card2', 'Code of Conduct for Students', '', '', 'Download', 'https://vignan.ac.in/pdf/Code_of_Conduct.pdf', 'hand', NULL, NULL, NULL, ''),
('prog_ba', 'B.A', 'Bachelor of Arts LL.B', '3 year', 'View all departments', 'https://vignan.ac.in/lawhome.php', 'ug', NULL, 1, NULL, ''),
('prog_bballb', 'BBA. LL.B', 'Law Department', '5 year', 'View all departments', 'https://vignan.ac.in/ballb.php', 'ug', NULL, 1, NULL, ''),
('prog_bca', 'BCA/BCA (Hons)', 'Bachelor of Computer Applications', '3 year', 'View all departments', 'https://vignan.ac.in/bbabca.php', 'ug', NULL, 1, NULL, ''),
('prog_diploma', 'Diploma', 'Polytechnic Education', '3 year', 'View all departments', 'https://vignan.ac.in/diplomacourse.php', 'dip', NULL, 1, NULL, ''),
('prog_pgch', 'M.Sc (Chemistry)', 'M.Sc (Chemistry)', '2 year', 'View all departments\r\n', '#', 'pg', 'Chemistry', 2, '#', 'dept'),
('prog_pgcse', 'M.Tech in Computer Science and Engineering ', 'Masters in Computer Science and Engineering ', '4 year', 'View all departments', '#', 'pg', 'cse', 2, 'https://vignan.ac.in/r22/R22%20M.Tech%20CSE%20syllabus%20and%20contents.pdf', 'dept'),
('prog_pgft', 'M.Tech in Food Processing Technology', 'M.Tech in Food Processing Technology', '2 year', 'View all departments\r\n', '#', 'pg', 'ft', 2, '#', 'dept'),
('prog_pgmaeng', 'MA English', 'Master of Arts', '2 years', 'View all departments\r\n', 'https://vignan.ac.in/maenglish.php', 'pg', NULL, 2, NULL, ''),
('prog_pgmba', 'MBA', 'Master of Business Administration', '2 years', 'View all departments\r\n', 'https://vignan.ac.in/mbamca.php', 'pg', 'mgt', 2, 'https://vignan.ac.in/r22/R22%20MBA%20Course%20Structure%20and%20Contents.pdf', 'dept'),
('prog_pgmca', 'MCA', 'Master of Computer Application', '2 years', 'View all departments\r\n', 'https://vignan.ac.in/mbamca.php', 'pg', NULL, 2, NULL, ''),
('prog_pgmscch', 'M. Sc. Chemistry', 'Master of Science', '2 years', 'View all departments\r\n', 'https://vignan.ac.in/mscchemistry.php', 'pg', 'chmstry', 2, NULL, 'dept'),
('prog_pgmscoch', 'M. Sc. Organic Chemistry', 'Master of Science', '2 years', 'View all departments\r\n', '#', 'pg', 'chmstry', 2, NULL, 'dept'),
('prog_pgmtech', 'M.Tech', 'Masters of Technology', '2 year', 'View all departments\r\n', 'https://vignan.ac.in/mtech.php', 'pg', NULL, 2, NULL, ''),
('prog_pgoch', 'M.Sc (Organic Chemistry)', 'M.Sc (Organic Chemistry)', '2 year', 'View all departments\r\n', '#', 'pg', 'Chemistry', 2, '#', 'dept'),
('prog_phd', 'Ph.D', 'Doctor of Philosophy ', '3 year', 'View all departments\r\n', 'https://vignan.ac.in/phd.php', 'phd', 'mgt', 3, NULL, 'dept'),
('prog_phdch', 'Ph.D in Chemistry', 'Ph.D', 'min 3 year', 'View all departments\r\n', '#', 'phd', 'Chemistry', 3, '#', 'dept'),
('prog_phdcse', 'Ph.D in Computer Science and Engineering ', 'Ph.D in Computer Science and Engineering ', 'Min 3 year', 'View all departments', '#', 'phd', 'cse', 3, 'https://vignan.ac.in/phd.php', 'dept'),
('prog_phdft', 'Ph.D. in Food Processing Technology', 'Ph.D. in Food Processing Technology', 'Min 3 year', 'View all departments\r\n', '#', 'phd', 'ft', 3, '#', 'dept'),
('prog_phdpy', 'Ph.D in Physics', 'Ph.D', 'min 3 year', 'View all departments\r\n', '#', 'phd', 'physics', NULL, NULL, 'dept'),
('prog_ugbba', 'BBA/BBA (Hons)', 'Bachelor of Business Administration', '3/4 year', 'View all departments', 'https://vignan.ac.in/bbabca.php', 'ug', 'mgt', 1, 'https://vignan.ac.in/r22/R22%20BBA%20Course%20Structure%20and%20Contents.pdf', 'dept'),
('prog_ugbsc', 'B.Sc/B.Sc (Hons)', 'Bachelor of Science', '3/4 year', 'View all departments', 'https://vignan.ac.in/bsc.php', 'ug', NULL, 1, NULL, ''),
('prog_ugcse', 'B.Tech in Computer Science and Engineering ', 'Bachelors in Computer Science and Engineering ', '4 year', 'View all departments', '#', 'ug', 'cse', 1, 'https://vignan.ac.in/r22/R22%20B.Tech%20(CSE)%20Course%20Structure%20&Contents.pdf', 'dept'),
('prog_ugft', 'B.Tech in Food Technology', 'B.Tech in Food Technology', '4 year', 'View all departments\r\n', '#', 'ug', 'ft', 1, '#', 'dept'),
('prog_ugle', 'LE', 'Lateral Entry', '3 year', 'View all departments', 'https://vignan.ac.in/lateralentry.php', 'ug', NULL, 1, NULL, ''),
('reg_sec1_card1', 'University', NULL, NULL, 'View More', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20Bachelor%20of%20Technology%202023-24.pdf', 'com', NULL, NULL, NULL, ''),
('reg_sec1_card2', 'Internet', NULL, NULL, 'View More', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20Bachelor%20of%20Technology%202023-24.pdf', 'com', NULL, NULL, NULL, ''),
('reg_sec1_card3', 'Discrimination', NULL, NULL, 'View More', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20Bachelor%20of%20Technology%202023-24.pdf', 'com', NULL, NULL, NULL, ''),
('reg_sec2_card1', 'B.tech', 'Bachelors of Technology', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22%20regulations%20for%20B.Tech.pdf', 'bdr22', NULL, NULL, NULL, ''),
('reg_sec2_card10', 'B.Pharmacy', 'Bachelors of Pharmacy', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R18%20Regulations%20for%20B.Pharmacy.pdf', 'bdr22', NULL, NULL, NULL, NULL),
('reg_sec2_card11', 'B.A.-LL.B (Hons.)', 'Bachelors of Arts & LLB', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22%20Regulations%20for%20B.A.-LL.B%20(Hons.).pdf', 'bdr22', NULL, NULL, NULL, NULL),
('reg_sec2_card12', 'B.B.A.-LL.B (Hons.)', 'Bachelors of Business Administration & LLB', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22%20Regulations%20for%20B.B.A.-LL.B%20(Hons.).pdf', 'bdr22', NULL, NULL, NULL, NULL),
('reg_sec2_card13', 'B.tech-R22.1', 'Bachelors of Technology', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22.1%20Regulations%20for%20B.Tech.pdf', 'bdr22', NULL, NULL, NULL, NULL),
('reg_sec2_card14', 'BBA-R22.1', 'Bachelor of Business Administration', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22.1%20Regulations%20for%20BBA.pdf', 'bdr22', NULL, NULL, NULL, NULL),
('reg_sec2_card15', 'BCA-R22.1', 'Bachelor of Computer Applications', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22.1%20Regulations%20for%20BCA.pdf', 'bdr22', NULL, NULL, NULL, NULL),
('reg_sec2_card16', 'BSC-R22.1', 'Bachelor of Science', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22.1%20Regulations%20for%20BSC.pdf', 'bdr22', NULL, NULL, NULL, NULL),
('reg_sec2_card17', 'B.Sc. (Hons)-AG.-R22.1', 'Bachelor of Science', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22.1%20Regulations%20for%20B.Sc.%20(Hons.)%20Agriculture.pdf', 'bdr22', NULL, NULL, NULL, NULL),
('reg_sec2_card18', 'B.A.-LL.B (Hons.)-R22.1', 'Bachelors of Arts &LLB', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22.1%20Regulations%20for%20B.A.-LL.B%20(Hons.).pdf', 'bdr22', NULL, NULL, NULL, NULL),
('reg_sec2_card19', 'B.B.A.-LL.B (Hons.)-R22.1', 'Bachelors of Business Administration & LLB', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22.1%20Regulations%20for%20B.B.A.-LL.B%20(Hons.).pdf', 'bdr22', NULL, NULL, NULL, NULL),
('reg_sec2_card3', 'B.tech Minors', 'Bachelors of Technology', NULL, 'Download', 'https://vignan.ac.in/pdf1/R22%20B.Tech%20Minors.pdf', 'bdr22', NULL, NULL, NULL, ''),
('reg_sec2_card4', 'B.Tech Open Electives', 'Bachelors of Technology', NULL, 'Download', 'https://vignan.ac.in/pdf1/R22%20B.Tech%20Open%20Electives.pdf', 'bdr22', NULL, NULL, NULL, ''),
('reg_sec2_card5', 'B.Sc. (Hons)-AG.', 'Bachelors of Science', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22%20Regulations%20for%20B.Sc.%20(Hons.)%20Agriculture.pdf', 'bdr22', NULL, NULL, NULL, ''),
('reg_sec2_card6', 'BSC', 'Bachelors of Science', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22%20regulations%20for%20BSC.pdf', 'bdr22', NULL, NULL, NULL, ''),
('reg_sec2_card7', 'BCA', 'Bachelors of Computer Applications', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22%20regulations%20for%20BCA.pdf', 'bdr22', NULL, NULL, NULL, ''),
('reg_sec2_card8', 'BBA', 'Bachelors of Business Administration', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22%20regulations%20for%20BBA.pdf', 'bdr22', '', NULL, NULL, ''),
('reg_sec2_card9', 'B.Tech AGE', 'Bachelors of Technology', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22%20Regulations%20for%20B.Tech.%20(AGE).pdf', 'bdr22', NULL, NULL, NULL, NULL),
('reg_sec3_card1', 'M.Tech', 'Masters of Technology', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22%20regulations%20for%20M.Tech.pdf', 'mdr22', NULL, NULL, NULL, ''),
('reg_sec3_card2', 'M.Sc. Chemistry', 'Masters of Science', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22%20Regulations%20for%20M.Sc.%20Chemistry.pdf', 'mdr22', NULL, NULL, NULL, ''),
('reg_sec3_card3', 'M.Sc. Organic Chemistry', 'Masters of Science', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22%20Regulations%20for%20M.Sc.%20Organic%20Chemistry.pdf', 'mdr22', NULL, NULL, NULL, ''),
('reg_sec3_card4', 'M.Sc. Data Science', 'Masters of Science', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22%20Regulations%20for%20M.Sc.%20Data%20Science.pdf', 'mdr22', NULL, NULL, NULL, ''),
('reg_sec3_card5', 'MCA', 'Masters of Computer Application', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22%20regulations%20for%20MCA.pdf', 'mdr22', NULL, NULL, NULL, ''),
('reg_sec3_card6', 'MBA', 'Masters of Business Administration', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22%20regulations%20for%20MBA.pdf', 'mdr22', '', NULL, NULL, ''),
('reg_sec3_card7', 'MA-English', 'Masters of Technology', NULL, 'Download', 'https://vignan.ac.in/2023pdf/R22%20Regulations%20for%20MA-English.pdf', 'mdr22', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questionpapers`
--

CREATE TABLE `questionpapers` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `btn_nm` varchar(100) DEFAULT NULL,
  `btn_hlink` varchar(255) DEFAULT NULL,
  `sub_code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionpapers`
--

INSERT INTO `questionpapers` (`id`, `title`, `btn_nm`, `btn_hlink`, `sub_code`) VALUES
(1, 'Engineering Physics (A)', 'Download', 'https://vignan.ac.in/scheme.php', '19HS113'),
(2, 'Engineering Physics (B)', 'Download', 'https://vignan.ac.in/scheme.php', '19HS113'),
(3, 'Engineering Physics (C)', 'Download', 'https://vignan.ac.in/scheme.php', '19HS113'),
(4, 'Engineering Physics (D)', 'Download', 'https://vignan.ac.in/scheme.php', '19HS113');

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE `ranks` (
  `id` varchar(100) NOT NULL,
  `rank_nm` varchar(200) DEFAULT NULL,
  `descr` varchar(1000) DEFAULT NULL,
  `btn_nm` varchar(100) DEFAULT NULL,
  `hlink` varchar(200) DEFAULT NULL,
  `date` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`id`, `rank_nm`, `descr`, `btn_nm`, `hlink`, `date`) VALUES
('rank_2022_1', 'NIRF', 'University Category Rank 76', 'View More', 'https://vignan.ac.in/nirf/NIRF%202024%20Overall%20DCS.pdf', 2022),
('rank_2023_1', 'NIRF', 'University Category Rank 76', 'View More', 'https://vignan.ac.in/nirf/NIRF%202024%20Overall%20DCS.pdf', 2023),
('rank_2023_2', 'The Week HANSA Research Survey', 'India\'s Best Technical Universities Rank: 35', 'View More', 'https://vignan.ac.in/iqac/Thee%20Week%20Hansa%202022%20Ranks.pdf', 2023),
('rank_2023_3', 'UI GREEN Metric World University Ranking', '891th World’s Most Sustainable University', 'View More', 'https://vignan.ac.in/naac/UI%20World%20Ranking%202023%20Certificates.pdf', 2023),
('rank_2023_4', 'The Impact Global Ranking', 'Overall Rank : 1001+', 'View More', 'https://vignan.ac.in/naac/Global%20Impact%20Rankings.pdf%202022.pdf', 2023),
('rank_2023_5', 'R World Ranking ', 'Research Excellence Ranking Positioned in the DIAMOND Band', 'View More', 'https://vignan.ac.in/naac/research_rank_2023.png', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `exam_title` varchar(100) DEFAULT NULL,
  `btn_nm` varchar(50) DEFAULT NULL,
  `btn_hlink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `exam_title`, `btn_nm`, `btn_hlink`) VALUES
(1, 'B. Sc. (Hons.) Agriculture - Batch 2', 'View Details', 'https://vignan.ac.in/examinations.php'),
(2, 'II B.Sc.(Hons.) Agriculture', 'View Details', 'https://vignan.ac.in/examinations.php'),
(3, 'II MBA Semester', 'View Details', 'https://vignan.ac.in/examinations.php'),
(4, 'I B. Pharmacy II Semester', 'View Details', 'https://vignan.ac.in/examinations.php'),
(5, 'I B.Sc.(Hons.) Agricultural II Semester)', 'View Details', 'https://vignan.ac.in/examinations.php'),
(6, 'I B.Tech, B.Sc, BBA & Diploma ll Semester', 'View Details', 'https://vignan.ac.in/examinations.php');

-- --------------------------------------------------------

--
-- Table structure for table `researchfacilities`
--

CREATE TABLE `researchfacilities` (
  `id` int(11) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `equipmentname` varchar(255) NOT NULL,
  `equipmentcompany` varchar(255) NOT NULL,
  `maxtemparature` varchar(255) NOT NULL,
  `facultyinchargename` varchar(255) NOT NULL,
  `facultyinchargecontact` varchar(255) NOT NULL,
  `methods` varchar(255) NOT NULL,
  `maxpressure` varchar(255) NOT NULL,
  `measurementrange` varchar(255) NOT NULL,
  `coatingrange` varchar(255) NOT NULL,
  `usages` varchar(255) NOT NULL,
  `speedortemparature` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `researchfacilities`
--

INSERT INTO `researchfacilities` (`id`, `dept`, `equipmentname`, `equipmentcompany`, `maxtemparature`, `facultyinchargename`, `facultyinchargecontact`, `methods`, `maxpressure`, `measurementrange`, `coatingrange`, `usages`, `speedortemparature`, `img`) VALUES
(1, 'physics', 'Muffle Furnace', 'INDFURR', '1600ºC', 'Dr. M. L. Madhumohan', '9344125524', 'Solid State synthesis of Oxide Materials, Ceramics and Glasses and Sintering /Calcination.', '', '', '', '', '', 'dep_assets/images/phyreserachfacility_1.jpg'),
(2, 'physics', 'Hot air Oven', 'INDFURR', '250ºC', 'Dr. M. L. Madhumohan', '9344125524', 'For drying and solid state reaction', '', '', '', '', '', 'dep_assets/images/phyreserachfacility_2.jpg'),
(3, 'physics', 'Spin coater', 'Navson Technology', '', 'Dr. P. Srinivasa Rao', '9515906180', 'For thin film deposition of solution dispersion', '', '', '', '', '12000rpm', 'dep_assets/images/phyreserachfacility_3.jpg'),
(4, 'physics', 'Hydraulic Press', '', '', 'Dr. M. L. Madhumohan', '9344125524', 'For pressing powder samples and to prepare pellets', '20 Tons', '', '', '', '', 'dep_assets/images/phyreserachfacility_4.jpg'),
(5, 'physics', 'UV-Visible absorption spectrometer', 'Shimadzu UV-1800 Spectrophotometer', '', 'Center of Excellence', '9515091064', 'For absorption and transmittance measurements of  thin films and liquid dispersions', '', '200-2000nm', '', '', '', 'dep_assets/images/phyreserachfacility_5.jpg'),
(6, 'physics', 'X-Ray Diffractometer', 'Rigaku MiniFlex', '', 'Center of Excellence', '9515091064', 'For X-ray diffraction experiments on Powder and thin film samples', '', '5-90º -CuKa Radiation', '', '', '', 'dep_assets/images/phyreserachfacility_6.jpg'),
(7, 'physics', 'SEM and EDAX', 'VEGA 3, SBH, TESCON', '', 'Center of Excellence', '9515091064', 'Surface morphology up to few nanometers and surface elements ', '', 'Nanometer range and elemental analysis of the surface', '', '', '', 'dep_assets/images/phyreserachfacility_7.jpg'),
(8, 'physics', 'Sputter coater', 'Cressington Manual sputter coater', '', 'Center of Excellence', '9515091064', 'For surface coating of the SEM samples ', '', '', 'Few nanometer to microns', '', '', 'dep_assets/images/phyreserachfacility_8.jpg'),
(9, 'physics', 'FTIR Spectroscopy', 'Cary 630 FTIR, Agilent Technologies', '', 'Center of Excellence', '9515091064', 'For surface functionalities of the given samples ', '', '500cm-1 to 6000cm-1', '', '', '', 'dep_assets/images/phyreserachfacility_9.jpg'),
(10, 'physics', 'Particle size analyzer', 'Nanoparticle size analyzer,Horiba', '', 'Center of Excellence', '9515091064', 'To estimate the size of the nanoparticles in the dispersion ', '', 'Few nanometers to several microns ', '', '', '', 'dep_assets/images/phyreserachfacility_10.jpg'),
(11, 'physics', 'Raman Spectrometer', 'Agiltroninspire, Analytical Technology', '', 'Center of Excellence', '9515091064', 'To measure the Raman spectrum of nanomaterials ', '', '300-1700cm-1', '', '', '', 'dep_assets/images/phyreserachfacility_11.jpg'),
(12, 'physics', 'Photoluminescence Spectrophotometer', 'Cary Eclipse fluorescence spectrometer (Agilent Technologies)', '', 'Center of Excellence', '9515091064', 'To measure the excitation and Emission of the liquid and solid films', '', '300-1000nm', '', '', '', 'dep_assets/images/phyreserachfacility_12.jpg'),
(13, 'physics', 'Electrochemical Work station', 'Autolab PGSTAT, Metrohm', '', 'Center of Excellence', '9515091064', 'To estimate the Cyclic Voltammetry measurements ', '', '-5V to +5V', '', '', '', 'dep_assets/images/phyreserachfacility_13.jpg'),
(14, 'physics', 'Differential Scanning Calorimeter', 'EXSTAR DSC 7020 Hitachi Japan', '', 'Center of Excellence', '9515091064', 'Glass Transition temperature', '', '0 to 400ºC', '', '', '', 'dep_assets/images/phyreserachfacility_14.jpg'),
(15, 'physics', 'Thermogravimmetry and Differential thermal analyzer', 'Simultaneous Thermal analyzer, Hitachi', '', 'Center of Excellence', '9515091064', 'Change in mass as a function of temperature ', '', '0 to 800ºC', '', '', '', 'dep_assets/images/phyreserachfacility_15.jpg'),
(16, 'physics', 'Cooling Centrifuge', 'Eppendorf 5430R', '', 'Center of Excellence', '9515091064', '', '', '', '', 'Ultracentifugation of nanoparticles ', '0 to 800ºC', 'dep_assets/images/phyreserachfacility_16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `researchs`
--

CREATE TABLE `researchs` (
  `id` varchar(100) NOT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `researcher_name` varchar(255) DEFAULT NULL,
  `role` varchar(30) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `btn_nm` varchar(50) DEFAULT NULL,
  `btn_hlink` varchar(255) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `researchs`
--

INSERT INTO `researchs` (`id`, `topic`, `researcher_name`, `role`, `date`, `btn_nm`, `btn_hlink`, `dept`) VALUES
('dept_research1', 'Value chain analysis of the chillies in Andhra Pradesh', 'Dr.K.Kalpana, Aruna Kumari', NULL, '1899-12-30 00:00:00', 'Read More', NULL, 'mgt'),
('dept_research10', 'A Longitudinal study of welfare schemes on rural', 'Dr. Suneel Sankala, Dr. Nabirasool, Dr. Preeti Thakur', NULL, NULL, 'Read More', NULL, 'mgt'),
('dept_research11', 'Women Reservation in Politics', 'Dr. P Lakshmi Narayanamma, Dr. V. Rama Devi, Dr. Apoorva', NULL, NULL, 'Read More', NULL, 'mgt'),
('dept_research12', 'Study on Performance of Vande Bharath Express', 'Dr. Apoorva, Dr. Sarita, Dr. P. Lakshmi', NULL, NULL, 'Read More', NULL, 'mgt'),
('dept_research13', 'A study on role of Vishwakarma scheme', 'Dr. Sarita, Dr. P. Lakshmi Narayanamma', NULL, NULL, 'Read More', NULL, 'mgt'),
('dept_research14', 'A Study on initiatives of Government for well-being ', 'Dr.B.Hari Babu, Dr. Ch. Hymavathi', NULL, NULL, 'Read More', NULL, 'mgt'),
('dept_research15', 'A study on socioeconomic impact of organized circular', 'Dr.B.M.Rao', NULL, NULL, 'Read More', NULL, 'mgt'),
('dept_research16', 'assesing the effect of various factors on online learning', 'Dr.B.S.R, Dr.Y.S.R. Dr.K Sujatha', NULL, NULL, 'Read More', NULL, 'mgt'),
('dept_research17', 'STI Hub for income generation and livelihood improvement of Scheduled Caste Community of Guntur Dist, AP', 'Prof. K V Krishna Kishore ', NULL, NULL, 'Read More', NULL, 'cse'),
('dept_research18', 'An adaptive classifier for unbalanced evolving streams: An application to fraudulent data streams', 'Dr. T Maruthi Padmaja (PI),   Dr. N Gnaneswara Rao (CO-PI) ', NULL, NULL, 'Read More', NULL, 'cse'),
('dept_research2', 'Competency assessment and gap analysis of engineering students :a case on VFSTR', 'Dr.A .Sai Manideep ', NULL, NULL, 'Read More', NULL, 'mgt'),
('dept_research3', 'A study on the problems faced by the rural women enterprenuers of MSME’s in Guntur and NTR district of Andhra pradesh', 'Dr. G.Krishna Harshitha, Dr.Ch.Hymavathi ', NULL, NULL, 'Read More', NULL, 'mgt'),
('dept_research4', 'Marlating Strategy and plan for royal wood furniture ,Guntur ', 'DR.B.S.R', NULL, NULL, 'Read More', NULL, 'mgt'),
('dept_research5', 'Organization- Lead well E.M School .', 'Dr.Saritha Sathpathy', NULL, NULL, 'Read More', NULL, 'mgt'),
('dept_research6', 'Organization- Tiru Pallavi Agro Products Private Limited', 'Dr.M.Siva Koti Reddy', NULL, NULL, 'Read More', NULL, 'mgt'),
('dept_research7', 'Understanding the Role of Mahila Police Volunteers for the Preventation of Crime against Women and Children in the State of Andhrapradesh\r\n', 'Dr.Ch.Hymavathi	Dr.K. .Kalpana, Dr.M.Sivakoti Reddy', NULL, NULL, 'Read More', NULL, 'mgt'),
('dept_research8', 'Assessing the Impact of Demographic', 'Dr Ch Hymavathi. Dr G Krishna', NULL, NULL, 'Read More', NULL, 'mgt'),
('dept_research9', 'Predictive Analysis on the Impact of Quality of Post', 'Dr. Ghali Krishna Harshitha, Dr. D. Vijay Krishna, Dr. Ch.', NULL, NULL, 'Read More', NULL, 'mgt'),
('home_research1', 'To build competencies and engagement in 5G technologies for students & startup communities', 'Dr. Y. Ravi Sekhar', 'PROFESSOR', '2023-10-27 00:00:00', '', '', NULL),
('home_research2', 'Solar Based Technologies for clean water and sewage treatment.', 'Dr. Vinay Kumar', 'Asst. Prof', '2023-12-20 00:00:00', '', '', NULL),
('research_ini_card1', 'Robotic Multi Seed Drill (RMSD)', 'Dr.D.S. Ayyanna', NULL, NULL, 'Read More', NULL, NULL),
('research_ini_card10', 'Three Axis Modern Pneumatic Trailer', 'Mr.S.Sebastian', NULL, NULL, 'Read More', NULL, NULL),
('research_ini_card11', 'Photovoltaic Mobile Chilli Dryer (PV-MCD)', 'Mr. R. RavindraRaju', NULL, NULL, 'Read More', NULL, NULL),
('research_ini_card12', 'Determination of Infiltration Rate of Soils using single and Double Ring Infiltrometer', 'Mr.Animul Islam', NULL, NULL, 'Read More', NULL, NULL),
('research_ini_card13', 'Fabrication of automatic hand brake release', 'Mr.Selvamuthu Kumar', NULL, NULL, 'Read More', NULL, NULL),
('research_ini_card14', 'Tractor operated pneumaticpiegeon PEA Panter', 'Mr. T. ShyamSundhar', NULL, NULL, 'Read More', NULL, NULL),
('research_ini_card15', 'Manually Operated Onion Planter (MO-OP)', 'Dr. M. Ravi Kumar', NULL, NULL, 'Read More', NULL, NULL),
('research_ini_card2', 'Design and Development of Multi Stage Weeder', 'Dr.A.RamaRao', NULL, NULL, 'Read More', NULL, NULL),
('research_ini_card3', 'Farmer Friendly Robotic Sprayer (FFRS)', 'Ms. B. Anitha Reddy', NULL, NULL, 'Read More', NULL, NULL),
('research_ini_card4', 'Development of E-bike from scrap', 'Mr.M.Naresh', NULL, NULL, 'Read More', NULL, NULL),
('research_ini_card5', 'Design and Evaluation of AonlaDeseeder Cum Cutter', 'Ms. K. Sai Manogna', NULL, NULL, 'Read More', NULL, NULL),
('research_ini_card6', 'Hybrid Vehicle by using Electric Thermo Generator', 'Mr. B. Harish Babu', NULL, NULL, 'Read More', NULL, NULL),
('research_ini_card7', 'PTO operated low pneumatic planter cost', 'Ms. V. Sai Tejaswini', NULL, NULL, 'Read More', NULL, NULL),
('research_ini_card8', 'Battery (Solar) Operated Reel Lawn Mover (BORLM)', 'Mr. B.S. Bibek', NULL, NULL, 'Read More', NULL, NULL),
('research_ini_card9', 'Mobile Motorized Sprayer (M-MS)', 'Mr.Samresh Kumar', NULL, NULL, 'Read More', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `btn_nm` varchar(100) DEFAULT NULL,
  `btn_hlink` varchar(255) DEFAULT NULL,
  `sub_code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`id`, `title`, `btn_nm`, `btn_hlink`, `sub_code`) VALUES
(1, 'Engineering Physics (A)', 'Download', 'https://vignan.ac.in/scheme.php', '19HS113'),
(2, 'Engineering Physics (B)', 'Download', 'https://vignan.ac.in/scheme.php', '19HS113'),
(3, 'Engineering Physics (C)', 'Download', 'https://vignan.ac.in/scheme.php', '19HS113'),
(4, 'Engineering Physics (D)', 'Download', 'https://vignan.ac.in/scheme.php', '19HS113');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` varchar(100) NOT NULL,
  `sch_num` varchar(255) DEFAULT NULL,
  `sch_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `sch_num`, `sch_name`) VALUES
('sch1', '01', 'SCHOOL OF CORE ENGINEERING'),
('sch2', '02', 'SCHOOL OF ELECTRICAL ELECTRONICS AND COMMUNICATION ENGINEERING'),
('sch3', '03', 'SCHOOL OF COMPUTING AND INFORMATICS'),
('sch4', '04', 'SCHOOL OF BIOTECHNOLOGY & PHARMACEUTICAL SCIENCES'),
('sch5', '05', 'SCHOOL OF LAW & MANAGEMNET'),
('sch6', '06', 'SCHOOL OF AGRI, FOOD SCIENCE & TECHNOLOGY'),
('sch7', '07', 'SCHOOL OF APPLIED SCIENCES & HUMANITIES');

-- --------------------------------------------------------

--
-- Table structure for table `search_queries`
--

CREATE TABLE `search_queries` (
  `query_search` varchar(255) DEFAULT NULL,
  `page_url` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_queries`
--

INSERT INTO `search_queries` (`query_search`, `page_url`, `page_title`) VALUES
('ueac', 'ueac.php', 'UEAC'),
('university extension activities', 'ueac.php', 'UEAC'),
('council', 'ueac.php', 'UEAC'),
('activities', 'ueac.php', 'UEAC'),
('extension activities', 'ueac.php', 'UEAC'),
('extra curricular', 'ueac.php', 'UEAC'),
('ueac events', 'ueacevents.php', 'UEAC Events'),
('events', 'ueacevents.php', 'UEAC Events'),
('ueac member', 'ueacmembers.php', 'UEAC Members'),
('ueac team', 'ueacmembers.php', 'UEAC Members'),
('wedc', 'wedc.php', 'WEDC'),
('women enterpreneurs', 'wedc.php', 'WEDC'),
('council', 'wedc.php', 'WEDC'),
('activities', 'wedc.php', 'WEDC Activities'),
('women empowerment', 'wedc.php', 'WEDC'),
('wedc member', 'commiteemembers.php', 'WEDC Members'),
('accreditations', 'iqac.php', 'IQAC'),
('accreditations', 'naac.php', 'NAAC'),
('accreditations', 'nad.php', 'NAD'),
('accreditations', 'https://vignan.ac.in/pdf/NBA%20Approval%202023-26.pdf', 'NBA'),
('certification', 'iqac.php', 'IQAC'),
('certification', 'naac.php', 'NAAC'),
('certification', 'nad.php', 'NAD'),
('certification', 'https://vignan.ac.in/pdf/NBA%20Approval%202023-26.pdf', 'NBA'),
('certified', 'iqac.php', 'IQAC'),
('certified', 'naac.php', 'NAAC'),
('certified', 'nad.php', 'NAD'),
('certified', 'https://vignan.ac.in/pdf/NBA%20Approval%202023-26.pdf', 'NBA'),
('affiliated', 'iqac.php', 'IQAC'),
('affiliated', 'naac.php', 'NAAC'),
('affiliated', 'nad.php', 'NAD'),
('affiliated', 'https://vignan.ac.in/pdf/NBA%20Approval%202023-26.pdf', 'NBA'),
('ueac members', 'ueacmembers.php', 'UEAC Members'),
('wedc members', 'commiteemembers.php', 'WEDC Members'),
('vignan members', 'administration.php', 'Administration'),
('library members', 'librarymembers.php', 'Library Members'),
('members', 'ueacmembers.php', 'UEAC Members'),
('members', 'commiteemembers.php', 'WEDC Members'),
('members', 'administration.php', 'Administration'),
('members', 'librarymembers.php', 'Library Members'),
('teams', 'ueacmembers.php', 'UEAC Members'),
('teams', 'commiteemembers.php', 'WEDC Members'),
('teams', 'administration.php', 'Administration Members'),
('teams', 'librarymembers.php', 'Library Members'),
('Programs', 'program.php', 'All Programs'),
('Programs', 'program.php#ugcourse', 'UG Programs'),
('Programs', 'program.php#pgcourse', 'PG Programs'),
('Programs', 'program.php#phdcourse', 'P.HD Programs'),
('Courses', 'program.php', 'All Courses'),
('Courses', 'program.php#ugcourse', 'UG Programs'),
('Courses', 'program.php#pgcourse', 'PG Programs'),
('Courses', 'program.php#phdcourse', 'P.HD Programs'),
('undergraduate', 'department.php', 'B.Tech'),
('undergraduate', 'https://vignan.ac.in/pharmacy.php', 'B.Pharm'),
('undergraduate', 'https://vignan.ac.in/lawhome.php', 'BA.LLB'),
('undergraduate', 'https://vignan.ac.in/bbabca.php', 'BBA'),
('undergraduate', 'https://vignan.ac.in/bbabca.php', 'BCA'),
('undergraduate', 'https://vignan.ac.in/bsc.php', 'B.Sc'),
('undergraduate', 'https://vignan.ac.in/diplomacourse.php', 'Diploma'),
('post graduate', 'https://vignan.ac.in/mtech.php', 'M.Tech'),
('post graduate', 'https://vignan.ac.in/maenglish.php', 'MA.English'),
('post graduate', 'https://vignan.ac.in/mbamca.php', 'MBA'),
('post graduate', 'https://vignan.ac.in/mbamca.php', 'MCA'),
('post graduate', 'https://vignan.ac.in/mscchemistry.php', 'M.Sc'),
('departments', 'department.php', 'All Department'),
('school', 'department.php', 'All Department'),
('domain', 'department.php', 'All Department'),
('field', 'department.php', 'All Department'),
('bachelor', 'department.php', 'All Department'),
('departments', 'department.php#core', 'Core Engg.'),
('school', 'department.php#core', 'Core Engg.'),
('domain', 'department.php#core', 'Core Engg.'),
('field', 'department.php#core', 'Core Engg.'),
('bachelor', 'department.php#core', 'Core Engg.'),
('departments', 'department.php#eceee', 'Electrical-Electronics Engg.'),
('school', 'department.php#eceee', 'Electrical-Electronics Engg.'),
('domain', 'department.php#eceee', 'Electrical-Electronics Engg.'),
('field', 'department.php#eceee', 'Electrical-Electronics Engg.'),
('bachelor', 'department.php#eceee', 'Electrical-Electronics Engg.'),
('departments', 'department.php#csit', 'Computing & Informatics'),
('school', 'department.php#csit', 'Computing & Informatics'),
('domain', 'department.php#csit', 'Computing & Informatics'),
('field', 'department.php#csit', 'Computing & Informatics'),
('bachelor', 'department.php#csit', 'Computing & Informatics'),
('departments', 'department.php#pharm', 'Pharmaceutical.'),
('school', 'department.php#pharm', 'Pharmaceutical'),
('domain', 'department.php#pharm', 'Pharmaceutical'),
('field', 'department.php#pharm', 'Pharmaceutical'),
('bachelor', 'department.php#pharm', 'Pharmaceutical.'),
('departments', 'department.php#lawman', 'Law & Management'),
('school', 'department.php#lawman', 'Law & Management'),
('domain', 'department.php#lawman', 'Law & Management'),
('field', 'department.php#lawman', 'Law & Management'),
('bachelor', 'department.php#lawman', 'Law & Management'),
('departments', 'department.php#agri', 'Agriculture'),
('school', 'department.php#agri', 'Agriculture'),
('domain', 'department.php#agri', 'Agriculture'),
('field', 'department.php#agri', 'Agriculture'),
('bachelor', 'department.php#agri', 'Agriculture'),
('departments', 'department.php#sh', 'Science & Humanities'),
('school', 'department.php#sh', 'Science & Humanities'),
('domain', 'department.php#sh', 'Science & Humanities'),
('field', 'department.php#sh', 'Science & Humanities'),
('bachelor', 'department.php#sh', 'Science & Humanities'),
('research papers', 'uniresearch.php', 'Research'),
('innovations', 'uniresearch.php', 'Research'),
('scholars', 'uniresearch.php', 'Research'),
('patents', 'uniresearch.php', 'Research'),
('ideas', 'uniresearch.php', 'Research'),
('research papers', 'research-ini.php', 'Research Initiatives'),
('innovations', 'research-ini.php', 'Research Initiatives'),
('initiatives', 'research-ini.php', 'Research Initiatives'),
('ideas', 'research-ini.php', 'Research Initiatives'),
('research papers', 'patents.php', 'Research Patents'),
('patents', 'patents.php', 'Research Patents'),
('funded projects', 'patents.php', 'Research Patents'),
('projects', 'patents.php', 'Research Patents'),
('ideas', 'patents.php', 'Research Patents'),
('research papers', 'uniresearch.php#researchstats', 'Research Statistics'),
('research stats', 'uniresearch.php#researchstats', 'Research Statistics'),
('statistics', 'uniresearch.php#researchstats', 'Research Statistics'),
('research fund', 'https://vignan.ac.in/research/Funding_Agencies.pdf', 'Funding Agencies'),
('fund', 'https://vignan.ac.in/research/Funding_Agencies.pdf', 'Funding Agencies'),
('anti ragging', 'anti-ragging.php', 'Anti-Ragging Cell'),
('student safety', 'anti-ragging.php', 'Anti-Ragging Cell'),
('student protection', 'anti-ragging.php', 'Anti-Ragging Cell'),
('bullying', 'anti-ragging.php', 'Anti-Ragging Policies'),
('ragging', 'anti-ragging.php', 'Anti-Ragging Policies'),
('policies', 'anti-ragging.php', 'Anti-Ragging Policies'),
('Complaints', 'anti-ragging.php', 'Anti-Ragging Guidelines'),
('guidelines', 'anti-ragging.php', 'Anti-Ragging Guidelines'),
('bullying', 'ucommittee.php', 'Anti-Ragging Committee'),
('ragging', 'ucommittee.php', 'Anti-Ragging Committee'),
('anti ragging', 'ucommittee.php', 'Anti-Ragging Committee'),
('naac', 'naac.php', 'NAAC'),
('naac', 'iqac.php', 'IQAC'),
('naac', 'nad.php', 'NAD'),
('naac', 'https://vignan.ac.in/pdf/NBA%20Approval%202023-26.pdf', 'NBA'),
('iqac', 'naac.php', 'NAAC'),
('iqac', 'iqac.php', 'IQAC'),
('iqac', 'nad.php', 'NAD'),
('iqac', 'https://vignan.ac.in/pdf/NBA%20Approval%202023-26.pdf', 'NBA'),
('nba', 'naac.php', 'NAAC'),
('nba', 'iqac.php', 'IQAC'),
('nba', 'nad.php', 'NAD'),
('nba', 'https://vignan.ac.in/pdf/NBA%20Approval%202023-26.pdf', 'NBA'),
('nad', 'naac.php', 'NAAC'),
('nad', 'iqac.php', 'IQAC'),
('nad', 'nad.php', 'NAD'),
('nad', 'https://vignan.ac.in/pdf/NBA%20Approval%202023-26.pdf', 'NBA'),
('ug', 'program.php#ugcourse', 'UG Programs'),
('pg', 'program.php#pgcourse', 'PG Programs'),
('phd', 'program.php#phdcourse', 'Ph.D Programs'),
('examinations', 'exam_home.php', 'Examination Cell'),
('examinations', 'exam.php', 'Examination Registration'),
('exam registration', 'exam.php', 'Examination Registration'),
('examinations', 'https://vignan.ac.in/pdf/Details%20of%20Grading%20System.pdf', 'Grading system'),
('grading system', 'https://vignan.ac.in/pdf/Details%20of%20Grading%20System.pdf', 'Grading system'),
('marking system', 'https://vignan.ac.in/pdf/Details%20of%20Grading%20System.pdf', 'Grading system'),
('examinations', 'https://vignan.ac.in/pdf/Disciplinary_Action_-_Malpractices.pdf', 'Examination Disciplinary Actions'),
('cheating', 'https://vignan.ac.in/pdf/Disciplinary_Action_-_Malpractices.pdf', 'Examination Disciplinary Actions'),
('examinations', 'https://vignan.ac.in/fmidmarks.php', 'Finalized Internal Marks'),
('marks', 'https://vignan.ac.in/fmidmarks.php', 'Finalized Internal Marks'),
('internal marks', 'https://vignan.ac.in/fmidmarks.php', 'Finalized Internal Marks'),
('examinations', 'https://vignan.ac.in/tutionfee.php', 'Pay Examination Fee'),
('fee', 'https://vignan.ac.in/tutionfee.php', 'Pay Examination Fee'),
('fee payment', 'https://vignan.ac.in/tutionfee.php', 'Pay Examination Fee'),
('notification', 'https://vignan.ac.in/notifications.php', 'Examination Notice'),
('examinations', 'https://vignan.ac.in/notifications.php', 'Examination Notice'),
('academic calendar', 'calender.php', 'All Academic Calendar'),
('academic calendar', 'calender.php#bsccalendar', 'B.Sc Academic Calendar'),
('academic calendar', 'calender.php#msccalendar', 'M.Sc Academic Calendar'),
('academic calendar', 'calender.php#btechcalendar', 'B.Tech Academic Calendar'),
('academic calendar', 'calender.php#mtechcalendar', 'M.Tech Academic Calendar'),
('academic calendar', 'calender.php#diplomacalendar', 'Diploma Academic Calendar'),
('policies', 'policies.php#policies', 'Organizational Policies'),
('handbooks', 'policies.php#handbooks', 'Organizational Handbooks'),
('morals', 'policies.php#policies', 'Organizational Policies'),
('morals', 'policies.php#handbooks', 'Organizational Handbooks'),
('masters', 'https://vignan.ac.in/mtech.php', 'M.Tech'),
('masters', 'https://vignan.ac.in/maenglish.php', 'MA.English'),
('masters', 'https://vignan.ac.in/mbamca.php', 'MBA'),
('masters', 'https://vignan.ac.in/mbamca.php', 'MCA'),
('masters', 'https://vignan.ac.in/mscchemistry.php', 'M.Sc Chemistry'),
('academic', 'Regulations.php', 'Academic Regulation'),
('regulation', 'Regulations.php', 'Academic Regulation (All)'),
('regulation', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20Bachelor%20of%20Technology%202023-24.pdf', 'Bachelors <br> (R22 Regulation)'),
('regulation', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20Bachelor%20of%20Technology%202023-24.pdf', 'Masters <br> (R22 Regulation)'),
('r22', 'Regulations.php', 'Academic Regulation (All)'),
('r22', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20Bachelor%20of%20Technology%202023-24.pdf', 'Bachelors <br> (R22 Regulation)'),
('r22', 'https://vignan.ac.in/accalendar/Academic%20Calendar%20for%20Bachelor%20of%20Technology%202023-24.pdf', 'Masters <br> (R22 Regulation)'),
('admission requirements', 'https://vignan.ac.in/vignantest/assets/pdf/brochure%202024.pdf', 'Admission Brochure'),
('admission requirements', 'placements.php', 'Placement Report'),
('admission requirements', 'fee_str.php', 'Fee Structure'),
('admission', 'fee_str.php', 'Fee Structure'),
('admission', 'https://admissions2024.vignan.ac.in/', 'VSAT Registration'),
('vsat exam', 'https://admissions2024.vignan.ac.in/', 'VSAT Registration'),
('exam', 'https://admissions2024.vignan.ac.in/', 'VSAT Registration'),
('admission requirements', 'scholarship.php', 'Scholarship'),
('placement', 'placements.php', 'Placement Report'),
('placement', 'placements.php', 'Top Recruiters'),
('jobs', 'placements.php', 'Placement Report'),
('jobs', 'placements.php', 'Top Recruiters'),
('company', 'placements.php', 'Placement Report'),
('company', 'placements.php', 'Top Recruiters'),
('recruitment', 'placements.php', 'Placement Report'),
('recruitment', 'placements.php', 'Top Recruiters'),
('admission requirements', 'admissions.php', 'Bank Loans'),
('council', 'u-life.php#studentcouncil', 'Student Council'),
('sports', 'https://vignan.ac.in/recreational.php', 'Sports Life'),
('sports', 'https://vignan.ac.in/recreational.php', 'Cultural Life'),
('cultural', 'https://vignan.ac.in/recreational.php', 'Sports Life'),
('cultural', 'https://vignan.ac.in/recreational.php', 'Cultural Life'),
('art', 'https://vignan.ac.in/recreational.php', 'Sports Life'),
('art', 'https://vignan.ac.in/recreational.php', 'Cultural Life'),
('art', 'https://vignan.ac.in/recreational.php', 'Art Life'),
('extra curricular', 'u-life.php', 'University Life'),
('cocurricular', 'u-life.php', 'University Life'),
('library', 'https://vignan.ac.in/libonlineresources.php', 'Library Online Resource'),
('library', 'https://vignan.ac.in/libautomation.php', 'Library Automation'),
('online resource', 'https://vignan.ac.in/libonlineresources.php', 'Library Online Resource'),
('university', 'u-life.php', 'University Life'),
('university', 'u-life.php#studentcouncil', 'Student Council'),
('university', 'anti-ragging.php', 'Anti Ragging Cell'),
('university', 'anti-ragging.php', 'Anti Ragging Policies'),
('university', 'institutionalCommittees.php', 'Institutional Committee'),
('committee', 'institutionalCommittees.php', 'Institutional Committee'),
('team', 'institutionalCommittees.php', 'Institutional Team'),
('members', 'institutionalCommittees.php', 'Institutional Members'),
('about university', 'whychooseus.php', 'About Us'),
('about university', 'whychooseus.php', 'Why Vignan?'),
('administration', 'administration.php', 'Administration Members'),
('about university', 'administration.php', 'Administration Members'),
('about university', 'history.php', 'Our Journey'),
('about university', 'https://vignan.ac.in/2023pdf/Institutionaldevelopmentplan.pdf', 'Development Plan'),
('about university', 'https://vignan.ac.in/hyd/', 'HYD Campus'),
('university facilities', 'whychooseus.php', 'Why Vignan?'),
('academic achievements', 'whychooseus.php', 'Why Vignan?'),
('future plans', 'whychooseus.php', 'Why Vignan?'),
('university values', 'whychooseus.php', 'Why Vignan?'),
('administration contact', 'administration.php', 'Administration Members'),
('leadership team', 'administration.php', 'Administration Members'),
('institution history', 'history.php', 'Our Journey'),
('growth strategy', 'https://vignan.ac.in/2023pdf/Institutionaldevelopmentplan.pdf', 'Development Plan'),
('campus locations', 'https://vignan.ac.in/hyd/', 'HYD Campus'),
('join now', 'https://admissions2024.vignan.ac.in/', 'Apply Now'),
('vsat', 'https://admissions2024.vignan.ac.in/', 'Apply Now'),
('exam', 'https://admissions2024.vignan.ac.in/', 'Take VSAT'),
('international ', 'https://internationaladmissions.vignan.ac.in/', 'International Admission'),
('foreigner ', 'https://internationaladmissions.vignan.ac.in/', 'International Admission'),
('admission ', 'https://admissions2024.vignan.ac.in/', 'Admission (Indian)'),
('admission ', 'https://internationaladmissions.vignan.ac.in/', 'Admission (Foreigner)'),
('apply now', 'https://admissions2024.vignan.ac.in/', 'Apply Now (Indian)'),
('admission ', 'https://internationaladmissions.vignan.ac.in/', 'Apply Now (Foreigner)'),
('apply now ', 'https://internationaladmissions.vignan.ac.in/', 'Apply Now (Foreigner)'),
('fee', 'https://vignan.ac.in/tutionfee.php', 'Pay Tution Fee'),
('others', 'https://vignan.ac.in/hyd', 'HYD Campus'),
('others', 'https://vignanonline.com/', 'Vignan Online'),
('others', 'https://vignan.ac.in/blog', 'Vignan Blog'),
('online', 'https://vignanonline.com/', 'Vignan Online'),
('slambook', 'https://vignan.ac.in/slambook/', 'Slambook Website'),
('others', 'https://vignan.ac.in/slambook/', 'Slambook Website'),
('others', 'https://vignan.ac.in/mahotsav/', 'Mahotsav Website'),
('others', 'https://vignan.ac.in/facultyprofiles/index.php', 'Faculty Portal'),
('others', 'https://vignan.ac.in/Deologin/', 'DEO Portal'),
('deo', 'https://vignan.ac.in/Deologin/', 'DEO Portal'),
('faculty', 'https://vignan.ac.in/facultyprofiles/index.php', 'Faculty Portal'),
('student', 'http://14.139.85.171/student/', 'Student Portal'),
('others', 'http://14.139.85.171/student/', 'Student Portal'),
('vignan', 'https://vignan.ac.in/hyd', 'Vignan HYD'),
('vignan', 'https://vignanonline.com/', 'Vignan Online'),
('vignan', 'https://vignan.ac.in/blog', 'Vignan Blog'),
('vignan', 'https://vignan.ac.in/VUtodaypdf/1-6-2024.pdf', 'Vignan Today');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) DEFAULT NULL,
  `descr` varchar(3000) DEFAULT NULL,
  `btn_nm1` varchar(100) DEFAULT NULL,
  `btn1_hlink` varchar(255) DEFAULT NULL,
  `btn_nm2` varchar(100) DEFAULT NULL,
  `btn2_hlink` varchar(255) DEFAULT NULL,
  `btn_nm3` varchar(100) DEFAULT NULL,
  `btn3_hlink` varchar(255) DEFAULT NULL,
  `subsec1_title` varchar(500) DEFAULT NULL,
  `subsec1_desc` varchar(1000) DEFAULT NULL,
  `subsec1_btn1` varchar(20) DEFAULT NULL,
  `subsec1_btn1_hlink` varchar(255) DEFAULT NULL,
  `subsec2_title` varchar(150) DEFAULT NULL,
  `subsec2_desc` varchar(3000) DEFAULT NULL,
  `subsec2_btn1` varchar(20) DEFAULT NULL,
  `subsec2_btn1_hlink` varchar(255) DEFAULT NULL,
  `subsec3_title` varchar(150) DEFAULT NULL,
  `subsec3_desc` varchar(1000) DEFAULT NULL,
  `subsec3_btn1` varchar(20) DEFAULT NULL,
  `subsec3_btn1_hlink` varchar(255) DEFAULT NULL,
  `img1` varchar(100) DEFAULT NULL,
  `img2` varchar(100) DEFAULT NULL,
  `img3` varchar(100) DEFAULT NULL,
  `img4` varchar(100) DEFAULT NULL,
  `btn_nm4` varchar(100) DEFAULT NULL,
  `btn4_hlink` varchar(255) DEFAULT NULL,
  `img5` varchar(100) DEFAULT NULL,
  `img6` varchar(100) DEFAULT NULL,
  `subsec4_title` varchar(150) DEFAULT NULL,
  `subsec4_desc` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `title`, `descr`, `btn_nm1`, `btn1_hlink`, `btn_nm2`, `btn2_hlink`, `btn_nm3`, `btn3_hlink`, `subsec1_title`, `subsec1_desc`, `subsec1_btn1`, `subsec1_btn1_hlink`, `subsec2_title`, `subsec2_desc`, `subsec2_btn1`, `subsec2_btn1_hlink`, `subsec3_title`, `subsec3_desc`, `subsec3_btn1`, `subsec3_btn1_hlink`, `img1`, `img2`, `img3`, `img4`, `btn_nm4`, `btn4_hlink`, `img5`, `img6`, `subsec4_title`, `subsec4_desc`) VALUES
('aboutus_sec1', 'Others saw the problem, He Sought the Solution.', 'Today the state of A.P is an acknowledged hub for education. It has especially become famous for its technical education.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/aboutus_img17.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('aboutus_sec10', 'National Academic Depository (NAD)', 'National Academic Depository (NAD) is an initiative of the Ministry of Human Resources Development, Govt. of India (MHRD) to provide an online storehouse of all academic awards viz. certificates, diplomas, degrees, mark-sheets etc. It allows the academic institutions/boards/eligibility assessment bodies etc. to lodge and upload the academic awards which are authenticated and validated. NAD would be of immense benefit to various stakeholders viz., academic institutions, students, prospective empl', 'View Document', NULL, NULL, NULL, NULL, NULL, 'Initiative of Government of India', 'VFSTR Deemed to be University participated in NAD depository\r\n                  services on 06.04.2018 by signing Service Level Agreement (SLA). The\r\n                  academic degrees awarded by VFSTR from the 2009-2010 onwards are\r\n                  being uploaded into the NAD portal in the NAD certificate template\r\n                  format (digitally signed).', NULL, NULL, 'Digitalisation & Authenticity', NULL, NULL, NULL, 'Convenience & Flexibility', NULL, NULL, NULL, '', NULL, 'assets/images/image17.svg', 'assets/images/key.svg', NULL, NULL, 'assets/images/image18.svg', NULL, 'Safe Storage', ''),
('aboutus_sec11_1', 'Reports', NULL, 'View All Annual Report', 'annualreports()', 'View All Annual Report', 'annualreports()', '', NULL, 'ANNUAL REPORT', 'It covers academic activities, student activities, content developed by faculties, department level details, physical education & sport achievements, university budget etc', NULL, NULL, 'FINANCIAL REPORTS', 'It covers Audit Report under section 12A(b) of Income Tax Act, 1961, In case of charitable or religious trusts or institutions', NULL, NULL, '', '', NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, ''),
('aboutus_sec11_2', 'Act and Status', ' Vignan\'s Foundation for Science\' Technology and Research (VFSTR)\r\n                  (Deemed ro be Lrniversity), vadlamudi. Guntur Dist\' - 522 213, A\'P\r\n                  herehy deciare that the institute wiil provide ali information\r\n                  sought for under Section 1( 1) (b) of the RTI Act 2005', 'Download', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('aboutus_sec11_3', 'Study in India\r\n', 'The Study In India (SII) programme is a flagship project introduced by the Ministry of Education (MoE), Government of India. The Study in India portal (https://studyinindia.gov.in/) was jointly launched on 18th April 2018 by the former Minister of Union External Affairs, Late Smt. Sushma Swaraj and former Minister of State for HRD, Dr Satya Pal Singh at the India Habitat Centre in New Delhi. The Study in India programme seeks to endorse India as a prime education hub for international students b', 'Go to study in India Website \r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('aboutus_sec13', 'Off-Campus\r\nHydrabad', 'Discover the vibrant academic experience off-campus in Hyderabad, where educational excellence meets the dynamic culture of the city. Our off-campus offerings provide students with unique opportunities to engage in a thriving academic environment within the heart of this dynamic and culturally rich metropolis.', 'Explore', 'offcampus()', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/offcampus_img2n.webp', 'assets/images/offcampus_img3n.webp', 'assets/images/offcampus_img1n.webp', 'assets/images/offcampus_img2.webp', NULL, NULL, 'assets/images/offcampus_img1.webp', 'assets/images/offcampus_img3.webp', NULL, ''),
('aboutus_sec3', 'Administration\r\n', 'The six pillars of university education, like academic programmes and curriculum, teaching and learning processes, research and innovation, student outcomes, human resources, and infrastructure, are integral to shaping the vision of Vignan?s Foundation for Science, Technology, and Research.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/aboutus_img16.webp', 'assets/images/aboutus_img15.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('aboutus_sec5', 'History', 'Vignan’s saga that sets through time is to step back to the year 1997, a pivotal moment when Vignan Engineering College emerged as the inaugural campus in Vadlamudi. This esteemed institution was meticulously brought to life under the visionary guidance of the Vignan Educational Trust, with the driving force behind it being none other than Dr. Lavu Rathaiah.<br><br> Vignan Engineering College transitioned to a Deemed University in 2008 after a decade of establishment. It is affiliated with JNTU Hyderabad, Kakinada, and Anantapur, approved by AICTE and NBA, and holds ISO 9001:2000 certification. VFSTR achieved NAAC \'A\' grade in 2015, UGC (12B) recognition in 2020, NBA accreditation for five programmes, ISO 9001:2015 certification, and maintains a consistent NIRF ranking around 100. It\'s also recognized as a research centre by DSIR.', 'Read More', 'history.php', NULL, NULL, NULL, NULL, '47', NULL, NULL, NULL, 'YEARS LEGACY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/aboutus_img8.webp', 'assets/images/aboutus_img9.webp', 'assets/images/aboutus_img10.webp', '', NULL, NULL, 'assets/images/aboutus_img9n.webp', 'assets/images/aboutus_img10n.webp', NULL, ''),
('aboutus_sec6', 'Institutional Committees', NULL, 'View Details', 'parentteach()', NULL, 'advisory()', NULL, 'eval()', 'Parents Teachers  Association', NULL, NULL, NULL, 'Admissions Advisory Committee', NULL, NULL, NULL, 'Evaluation Standards Committee', NULL, NULL, NULL, '', 'assets/icons/arrow_forward.svg', NULL, NULL, 'View All', 'institutionalCommittees.php', NULL, NULL, NULL, ''),
('aboutus_sec7', 'National Institutional Ranking Framework', 'The National Institutional Ranking Framework (NIRF) has been accepted by the MoE and launched by Honourable Minister for Education on 29th September 2015. This framework outlines a methodology to rank institutions across the country', 'View Document', '', NULL, NULL, NULL, NULL, '72', NULL, NULL, NULL, 'NIRF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('aboutus_sec9', 'Institutional Development Plan', 'The five-year plan for the period between 2013-2018 is developed for effective functioning of the University in the following areas: Enhance Excellence in programs and services wherein it is proposed to take the action points on the existing courses and new courses coupled with interdisciplinary flavor. The second proposed point is Student success which is an essential aspect in any educational institution as the whole planning and monitoring is to make students to achieve success in their pursu', 'Download', 'https://vignan.ac.in/2023pdf/Institutionaldevelopmentplan.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/aboutus_img7.webp', 'assets/icons/download.svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('Admissions_Accreditations', 'Accreditations.', 'Vignan is awarded by accrediting bodies, these accreditations validate that a university meets or exceeds predefined standards in areas like curriculum, faculty qualifications, student support, and infrastructure.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'National Board of Accreditation CSE,ECE,EEE,Mechanical & Biotech For 3 years', 'Know more', '#', NULL, 'National Board of Accreditation CSE,ECE,EEE,Mechanical & Biotech For 3 years', 'Know more', '#', NULL, 'National Board of Accreditation CSE,ECE,EEE,Mechanical & Biotech For 3', 'Know more', '#', NULL, NULL, NULL, NULL, NULL, NULL, '', '0', NULL, NULL),
('Admissions_Apply to Programs', 'Apply to Programs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Under Graduate', '3 years & 4 years', 'Apply Now', 'program.php', 'Post Graduate', '2 years', 'Apply Now', 'program.php', 'Ph.D', 'Min. 3 years', 'Apply Now', 'program.php', NULL, NULL, NULL, NULL, NULL, NULL, '', '0', NULL, NULL),
('Admissions_Bank Loans', 'Bank Loans', 'We are associated with 14+ banks (public/pvt) in India and help you get the best education loan matching your profile.', 'View all list of ban', '#', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', NULL, NULL),
('Admissions_Goals for Your Enriching Journey', 'Goals for Your Enriching Journey.', 'Embark on your enriching journey by setting clear, ambitious goals. These milestones will guide your path, fuelling motivation and purpose, shaping a fulfilling and successful trajectory ahead. With well-defined objectives, you empower yourself to make the most of every opportunity.', 'Placement details', 'placements.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', NULL, NULL),
('Admissions_Scholarship', '', '', '', '', NULL, NULL, NULL, NULL, 'Scholarship', 'There are a wide range of scholarships open to students at the University. Scholarships are offered to the best and brightest applicants from undergraduate and graduate programs. Students with good academic track record, having the confidence of maintaining the consistency of their performance may a', 'Know more', 'scholarship.php', 'Fee Details', 'About 1lakh Tuition Fee difference between students coming through  V-SAT/EAMCET/JEE(Mains/Advanced)2023 to open admission.', 'Fee with Respect to ', 'fee_str.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', NULL, NULL),
('Admissions_V-SAT', 'V-SAT', 'Admits students based on a written exam (V-SAT), Eamcet, JEE Mains/Advanced, and Inter scores. The VSAT exam pattern will be similar to JEE Main and EAMCET; sample papers can be downloaded from Vignan\'s website.', 'Check Eligibility', 'https://admissions2024.vignan.ac.in/', 'Sample papers', 'https://admissions2024.vignan.ac.in/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', NULL, NULL),
('antiragging_hero', 'Anti-Ragging', 'VFSTR is dedicated to prohibiting, preventing, and eliminating the scourge of ragging. We strive to foster a safe and inclusive environment where all students can thrive and succeed.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/ulife_antiragging1.webp', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
('antiragging_messagefromchairman', 'Message from Chairman', 'Ragging is a social evil and a criminal offense under the Indian Penal Code (IPC). VFSTR is dedicated to upholding high ethical norms and principles, ensuring the development of professionals with excellent ethical judgment, social integration, and leadership skills.We are committed to outlawing, preventing, and eradicating ragging. Ragging will not be tolerated under any circumstances. Our robust anti-ragging policy and grievance redressal mechanism ensure that any incidents are addressed promptly and effectively.', 'Rules & Regulations', NULL, NULL, NULL, NULL, NULL, 'Dr. Lavu Rathaiah ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/antiragging_chairman.webp', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
('antiragging_national_programme', 'National Anti-Ragging Programme', 'The Centre for Youth (C4Y) is working as a monitoring agency in association with the Ministry of Education, Government of India, and the University Grant Commission (UGC), to support the National Ragging Prevention Programme in the country. C4Y monitors the 24x7 anti-ragging helpline, compliances, and technological support and creates awareness to de-ragging in universities and colleges across India.', 'Read More', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/antiragging.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('BillBoard_Admissions', 'Admissions open for 2024', 'Thanks for choosing Vignan, Your are making right decision to achieve ', 'Download Brochure', 'assets/pdf/brochure 2024.pdf', 'How to Reach', 'howtoreach.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/admission_open.webp', './assets/MediumHorizontalArrow', './assets/MediumHorizontalArrow', NULL, NULL, NULL, '', '0', NULL, NULL),
('Billboard_CoExAMMPC', 'The Centre of Excellence for Advanced Materials, Manufacturing, Processing\r\nand Characterization', 'The centre caters to the multidisciplinary needs combining research and development activities in different fields ranging from fundamental scientific concepts to applied engineering.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, './assets/images/GirlInLab.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Billboard_Wedc', 'WEDC', 'The Women Entrepreneurs Development Council (WEDC) is dedicated to empowering women entrepreneurs through various initiatives and support programmes<br><br> The Women Empowerment and Development Cell of VFSTR (deemed to be university) organises several programmes on awareness sessions on sexual harassment of women at work.', 'Know More', '#', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, './assets/images/image_card_4x.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Billboard_WhyChooseUs', 'Why Vignan? ', 'VFSTR, deemed to be university, provides a stimulating ambience in pursuit of higher studies in a multicultural campus environment.', 'Apply now', 'https://vignan.ac.in/v-sat', 'International Students', 'https://internationaladmissions.vignan.ac.in', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, './assets/images/WCUmain.png', NULL, NULL, NULL, NULL, NULL, '', '0', '', ''),
('CoExAMMPC_Collaborators', 'Collaborators<br>Academic', NULL, 'Show All', '#', NULL, NULL, NULL, NULL, 'M. S. S. Rukmini', 'Best Women Leader', NULL, NULL, 'P. M. V. Rao', 'Best Speaker', NULL, NULL, 'Y. RAVI SEKHAR', 'Best motivator', NULL, NULL, './assets/images/Dean_SA.jpg', './assets/images/Dean _ AAA.jpg', './assets/images/aboutus_img12.webp', './assets/images/aboutus_img11.webp', NULL, NULL, NULL, NULL, 'D. Vijaya Ramu', 'Best Speaker'),
('CoExAMMPC_Contact', 'Contact Us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'G. SRINIVASA RAO', 'Dean, R&D', NULL, NULL, 'Phone', '+91 863 2344700<br>Office : 0863-2344700<br>Intercom No : 404', NULL, NULL, 'Email', 'dean_res@vignanuniversity.org', NULL, NULL, './assets/images/prof2.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('CoExAMMPC_Contributors', 'Contributors', NULL, 'Show All', '#', NULL, NULL, NULL, NULL, 'M. RAMA KRISHNA', 'Best motivator', '', '', 'G. Srinivasa Rao', 'Best Women Leader', NULL, NULL, 'K.V. Krishna Kishore', 'Best Speaker', NULL, NULL, './assets/images/profl.webp', './assets/images/prof2.webp', './assets/images/prof3.webp', './assets/images/prof4.webp', NULL, NULL, NULL, NULL, 'D. Vijay Krishna', 'Best Speaker'),
('CoExAMMPC_Facilities', 'Facilities Available', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Atomic force microscopes', NULL, NULL, NULL, 'Raman Spectrometer', NULL, NULL, NULL, 'TG/DTA', NULL, NULL, NULL, './assets/images/rectangle_120_4x.webp', './assets/images/rectangle_119_4x1.webp', './assets/images/rectangle_119_4x2.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('CoExAMMPC_Fluorescence', 'Fluorescence Spectrophotometer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, './assets/images/rectangle_118_3x.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('CoExAMMPC_overview', 'Overview', 'It encompasses cutting edge areas in science, technology and engineering. The centre is actively involved in promoting active R&D activities through sponsored and consultancy projects. And also to achieve excellence in science & technology research and publish quality articles in SCI journals in order to enhance the h-index of the Centre/University on par with leading National / International institutions.<br><br>The centre is committed to explore/ experiment all the aspects of new materials including design, development, synthesis, preparation, characterization, properties, testing, performance, sustainability etc. The center is well equipped with an integrated state of the art facilities with sophisticated analytical instrumentation.<br><br>The Centre of Excellence for Advanced Materials, Manufacturing, Processing and Characterization (CoExAMMPC), started in VFSTR University, Guntur as a major research centre in this part of the country to work in close collaboration with leading higher learning institutions and industries within India and abroad.', 'Objectives', '#', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('CommiteeMembers_1', 'Commitee Members', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DR. N. USHA RANI', 'Chair Person', NULL, NULL, 'MRS. PRIYA GUTTA', 'Member', NULL, NULL, 'MRS. LOKI MADINENI', 'Member', NULL, NULL, './assets/images/pexels_photo_by_pegah_sharifi.webp', './assets/images/pexels_photo_by_pegah_sharifi (1).webp', './assets/images/pexels_photo_by_pegah_sharifi (2).webp', './assets/images/pexels_photo_by_pegah_sharifi (3).webp', NULL, NULL, NULL, NULL, 'MISS. ARUNA ANCHULA', 'Student Member'),
('CommiteeMembers_2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dr. N. Usha Rani', 'Member', NULL, NULL, 'Mrs. Priya Gutta', 'Member', NULL, NULL, 'Mrs. Loki Madineni', 'Member', NULL, NULL, './assets/images/pexels_photo_by_pegah_sharifi (4).webp', './assets/images/pexels_photo_by_pegah_sharifi (5).webp', './assets/images/pexels_photo_by_pegah_sharifi (6).webp', './assets/images/pexels_photo_by_pegah_sharifi (7).webp', NULL, NULL, NULL, NULL, 'MISS. Aruna Anchula', 'Student Member'),
('CommiteeMembers_3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dr. N. Usha Rani', 'Chair Person', NULL, NULL, 'MRS. PRIYA GUTTA', 'Member', NULL, NULL, 'MRS. LOKI MADINENI', 'Member', NULL, NULL, './assets/images/pexels_photo_by_pegah_sharifi (8).webp', './assets/images/pexels_photo_by_pegah_sharifi (9).webp', './assets/images/pexels_photo_by_pegah_sharifi (10).webp', './assets/images/pexels_photo_by_pegah_sharifi (11).webp', NULL, NULL, NULL, NULL, 'MISS. ARUNA ANCHULA', 'Student Member'),
('CommiteeMembers_4', NULL, NULL, 'Re-constitution of ICC 2023-24', '#', NULL, NULL, NULL, NULL, 'Mrs. Priya Gutta', 'Member', NULL, NULL, 'MISS. Aruna Anchula', 'Student Member', NULL, NULL, 'MISS. Aruna Anchula', 'Student Member', NULL, NULL, './assets/images/pexels_photo_by_pegah_sharifi.webp', './assets/images/pexels_photo_by_pegah_sharifi (1).webp', './assets/images/pexels_photo_by_pegah_sharifi (2).webp', './assets/images/pexels_photo_by_pegah_sharifi (3).webp', NULL, NULL, NULL, NULL, 'Mrs. Loki Madineni', 'Member'),
('dept', 'ACADEMICS', 'Departments', 'Filter', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('exam_sec1', 'Examination', 'The examination page consolidates essential information such as timetables, schedules, past year questions, and application processes, streamlining students\' access to crucial exam details.', 'Apply for exam', NULL, 'Pay Tution Fee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/exam.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('exam_sec3_1', 'Registration\r\n', 'Registration for exams is now open from 27 Feb to 13 March for all UG and PG students. Registration for exams is now open from 27 Feb to 13 March for all UG and PG students.', 'Register', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('exam_sec3_2', 'Results', 'Keep track of updates to know when to expect your outcome. The dates for Bsc Msc are out. The dates for Bsc Msc are out. The dates for Bsc Msc are out. The dates for Bsc Msc are out.\r\n\r\n', 'View Results', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('exam_sec3_3', 'Rules & Regulations', 'Familiarize yourself with the rules and regulations governing exam conduct to ensure a smooth testing experience for all candidates. Adherence to these guidelines is essential for maintaining fairness and integrity throughout the examination process.\r\n\r\n', 'View More', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('exam_sec4_register', 'Steps to follow Duplicate Provisional Certificate', 'Students have to pay a fee of Rs. 500/- in the bank and fill application available at examination cell and submit the application to examination cell DEO.\r\n<br /><br />\r\nEnclosures :1. Not traceable certificate from Police department (obtained from e-seva center)<br />\r\n&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp \r\n&nbsp &nbsp &nbsp &nbsp &nbsp 2. Bank Challan', 'Download Application', NULL, 'Pay Fee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('exam_sec4_result', 'Results', 'Please select your current academic level from the options provided below and enter your details along with your hall ticket number to access your results.\r\n\r\n', 'View Results', NULL, NULL, NULL, NULL, NULL, 'FINAL RESULTS', 'Final results crystallize the essence of effort and determination, marking the definitive endpoint of a journey and illuminating the path forward with clarity.\r\n\r\n', NULL, NULL, 'CONTINUOUS ASSESSMENT MARK', 'Final results crystallize the essence of effort and determination, marking the definitive endpoint of a journey and illuminating the path forward with clarity.\r\n\r\n', NULL, NULL, 'FINALISED INTERNAL MARKS', 'Final results crystallize the essence of effort and determination, marking the definitive endpoint of a journey and illuminating the path forward with clarity.\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('exam_sec4_rule', 'Disciplinary Actions', 'In academic institutions, maintaining exam integrity is paramount. To this end, clear guidelines are established to deter malpractices. These rules prohibit possession of unauthorized materials and communication with others during exams. Violations result in expulsion from the exam hall and cancellation of subject performance. Severe cases may lead to broader consequences, including legal action. Upholding these standards ensures fairness and credibility in the evaluation process.\r\n\r\n', 'Download', NULL, NULL, NULL, NULL, NULL, 'Grading system', 'The grading system provides a standardized method for evaluating and quantifying academic performance. It serves as a benchmark for students\' progress and aids in assessing their comprehension and mastery of subject matter.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('exam_sec5', 'Obtaining Certificates', 'Certificates will be available for collection upon successful completion of exams. Stay informed for details on certificate distribution dates and procedures.', 'Discard', NULL, 'Submit', NULL, NULL, NULL, 'Contact Us', '91 889889987', NULL, NULL, NULL, '91 889889987', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('facilities_accessibility', 'Accessibility', 'At our institute, we prioritise accessibility, ensuring that all students have equal opportunities to engage fully in their educational pursuits through inclusive infrastructure and support services', 'Ramps', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'Lifts', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'Sign Boards', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/facilities_ramps.webp', 'assets/images/facilities_lifts.webp', 'assets/images/facilities_signboards.webp', 'assets/images/facilities_assistivetechnology.webp', 'Assistive Technologies Lab', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', NULL, NULL, NULL, NULL),
('facilities_food', 'Food', 'Experience culinary excellence at our college institute with diverse dining options, catering to varied tastes and dietary preferences', 'Cafe', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'Girl\'s Mess', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'Boy\'s Mess', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/facilities_cafe.webp', 'assets/images/facilities_gmess.webp', 'assets/images/facilities_bmess.webp', 'assets/images/facilities_canteen.webp', 'Canteen', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', NULL, NULL, NULL, NULL),
('facilities_general', 'General Facility', 'Equipped with state-of-the-art facilities, our university fosters an environment conducive to holistic learning and growth', 'Gallery Hall', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'Spoorthy <br> Seminar Hall', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'Convocation Hall', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', NULL, NULL, 'Sangam Seminar Hall', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/facilities_gallery.webp', 'assets/images/facilities_spoorthy.webp', 'assets/images/facilities_convo.webp', 'assets/images/facilities_theater.webp', 'Open <br> Theater', '#', 'assets/images/facilities_sangam.webp', NULL, NULL, NULL),
('facilities_guesthouse', 'Guest House', 'Our college institute offers a welcoming and comfortable guest house facility, providing accommodation for visitors and guests, enhancing their experience on campus', 'Guest Room 1', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'Guest Room 2', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'Guest House', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/facilities_guestroom1.webp', 'assets/images/facilities_guestroom2.webp', 'assets/images/facilities_guesthouse.webp', '', '', '', NULL, NULL, NULL, NULL),
('facilities_hero', 'Facilities', 'Our Institute boasts comprehensive facilities catering to diverse academic and personal needs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/facilities_hero.webp', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
('facilities_hostel', 'Hostel', 'Our institute provides comfortable and secure hostel facilities, ensuring a supportive living environment that complements the academic journey of our students', 'Girl\'s <br> Hostel', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'Boy\'s Hostel Room', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'Girl\'s Hostel Room', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', NULL, NULL, 'Know More', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/facilities_ghostel.webp', 'assets/images/facilities_bhostelroom.webp', 'assets/images/facilities_ghostelroom.webp', 'assets/images/facilities_hostel.webp', 'Hostel', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', NULL, NULL, NULL, NULL),
('facilities_indoor', 'Indoor Sports', 'Our institute offers exceptional indoor facilities tailored to enrich every aspect of academic exploration', 'Table <br> Tennis', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'Gym', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'Karate', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/facilities_tabletennis.webp', 'assets/images/facilities_gym.webp', 'assets/images/facilities_karate.webp', 'assets/images/facilities_kabbadi.webp', 'Kabbadi', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', NULL, NULL, NULL, NULL),
('facilities_library', 'Library', 'At our institute, the library facility serves as a hub for academic exploration, offering extensive resources and tranquil study spaces for students\' intellectual growth', 'Video Conference Hall', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'Sitting <br> Area', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'Civil <br> Services <br> Aspirants', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', NULL, NULL, 'Know More', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/facilities_vconference.webp', 'assets/images/facilities_sittingarea.webp', 'assets/images/facilities_civilservices.webp', 'assets/images/facilities_libraryentrance.webp', 'Library Entrance', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', NULL, NULL, NULL, NULL),
('facilities_medical', 'Medical Facilities', 'Our college institute prioritizes student well-being by providing comprehensive medical facilities, ensuring prompt and quality healthcare services on campus', 'Clinic <br> Beds', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'Clinic Services', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'Health Clinic', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/facilities_clinicbeds.webp', 'assets/images/facilities_clinicservices.webp', 'assets/images/facilities_healthclinic.webp', '', '', '', NULL, NULL, NULL, NULL),
('facilities_outdoor', 'Outdoor Sports', 'Embrace the thrill of competition and camaraderie under the open sky with our university outdoor sports programs', 'BasketBall', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'FootBall', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'Running', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', NULL, NULL, 'Cricket', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/facilities_basketball.webp', 'assets/images/facilities_football.webp', 'assets/images/facilities_running.webp', 'assets/images/facilities_handball.webp', 'HandBall', 'https://www.easytourz.com/BT-EmabedTour/DEMO/a0ccdb54f97e5369', 'assets/images/facilities_cricket.webp', NULL, NULL, NULL),
('facilities_safety', 'Safety & Security', 'At our institute, safety and security are paramount, with robust measures in place to safeguard the well-being of our students and staff', 'Security', NULL, 'Police <br> Station', NULL, 'CCTV\'s', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/facilities_security.webp', 'assets/images/facilities_policestation.webp', 'assets/images/facilities_cctvs.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('facilities_transport', 'Transport ', 'Experience convenient commuting with our college institute\'s efficient transport facility, ensuring seamless connectivity for students across various destination', 'Bus <br> Services', NULL, 'Car <br> Services', NULL, 'Transport Buses', NULL, NULL, NULL, 'Read More', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/facilities_busservices.webp', 'assets/images/facilities_carservices.webp', 'assets/images/facilities_transportbuses.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('fee_scholar_sec1', 'Goals for Your Enriching Journey.', 'Embark on your enriching journey by setting clear, ambitious goals. These milestones will guide your path, fuelling motivation and purpose, shaping a fulfilling and successful trajectory ahead. With well-defined objectives, you empower yourself to make the most of every opportunity.', 'Placement details', 'placements.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('fee_scholar_sec2', 'Scholarship', 'There are a wide range of scholarships open to students at the University. Scholarships are offered to the best and brightest applicants from undergraduate and graduate programs. Students with good academic track record, having the confidence of maintaining the consistency of their performance may apply for the Vignan Scholarship Programme.', 'See scholarship Details', 'https://vignan.ac.in/feesbtech.php', NULL, NULL, NULL, NULL, 'Fee Details ', 'About 1lakh Tuition Fee difference between students coming through  V-SAT/EAMCET/JEE(Mains/Advanced)2023 to open admission.', 'Fee with Respect to ', 'https://vignan.ac.in/feesbtech.php', 'Vignan has always been at my side, and to be honest, I’ve made the right decision for my future.', 'Kunita Rao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('grievance_hero', 'Online Grievance Redressal', 'VFSTR  has constituted Grievance Redressal cell, Anti Ragging Committee and Internal Complaints Committee for the redressal of students\' grievances', 'Read More', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/grievance_hero.webp', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
('History_1983', '1983', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'STARTED FIRST SCHOOL', 'Dr.Rathaiah observed during his educational career, how and why most of his friends had become dropouts from schools and colleges due to lack of guidance and direction. This has sowed the 1st seed in his mind as to what to be done to parent it, and in due course, it has become an obsession for him that he should see people educated along with him.\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, './assets/images/KidsOnGround.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('History_1991', '1991', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'STARTED FIRST HIGH SCHOOL', 'Dr.Rathaiah observed during his educational career, how and why most of his friends had become dropouts from schools and colleges due to lack of guidance and direction. This has sowed the 1st seed in his mind as to what to be done to parent it, and in due course, it has become an obsession for him that he should see people educated along with him.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, './assets/images/HighSchool.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('History_2003', '2003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'STARTED FIRST JUNIOR COLLEGE', 'Dr.Rathaiah observed during his educational career, how and why most of his friends had become dropouts from schools and colleges due to lack of guidance and direction. This has sowed the 1st seed in his mind as to what to be done to parent it, and in due course, it has become an obsession for him that he should see people educated along with him.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, './assets/images/JuniorCollege.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('History_2024', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'STARTED FIRST ENGINEERING COLLEGE', 'Dr.Rathaiah observed during his educational career, how and why most of his friends had become dropouts from schools and colleges due to lack of guidance and direction. This has sowed the 1st seed in his mind as to what to be done to parent it, and in due course, it has become an obsession for him that he should see people educated along with him.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, './assets/images/Ablock.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('History_OurJourney', 'Our Journey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('home_accrd', 'Accreditations.', ' Vignan University has earned significant rankings and accreditations across various domains. In 2023, it was\r\n            ranked 75th among universities by NIRF. It holds an \'A+\' grade of accreditation from NAAC and tier-1\r\n            accreditation from the NBA. Additionally, it has 12(B) status and approval from AICTE. The university is\r\n            also DSIR certified by the Department of Science and Industrial Research. In QS-I-GAUGE accreditation, it\r\n            achieved a DIAMOND rating,, showcasing outstanding performance with a score of 90%.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('home_alumni', 'Alumni Hall of Fame', 'The esteemed graduates of our institution serve as compelling examples of the profound influence of education, with their noteworthy accomplishments spanning various fields worldwide. Their accomplishments serve as a testament to the extraordinary calibre and impact fostered by our university, inspiring current and prospective students to strive for even greater success.', 'Explore More', 'https://vignan.ac.in/alumni/?type=individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/renowed-img1.webp', 'assets/images/renowed-img2.webp', 'assets/images/renowed-img3.webp', 'assets/images/renowed-img4.webp', NULL, NULL, NULL, NULL, NULL, NULL),
('home_cultivate', 'Cultivating Academic Excellence.', 'We believe learning should be an enjoyable experience & emphasis\r\n                        on\r\n                        learning skills over exam scores. We have curated our programs in a unique style of\r\n                        teaching, which\r\n                        help students to recall the content that they studied in an efficient way. ', 'View all Faculty', 'people.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/cultivate-img1.svg', 'assets/images/cultivate-img2.svg', 'assets/images/cultifvate-img3.svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('home_emotional', 'Emotional and Physiological Development.', 'In addition to state-of-the-art facilities, we provide personalized counseling and unlimited sessions at the Student Counseling Centre to address academic, personal, and professional challenges. Many students have found significant benefits from these counseling sessions.', 'Explore More', 'https://vignan.ac.in/holistic.php/?type=individual', 'Explore More', 'https://vignan.ac.in/holistic.php/?type=individual', NULL, NULL, ' Holistic Training Program at Vignan', 'In order to foster physical fitness among students, sports and related activities are given significant recognition and weight in the curriculum. The goal of Vignan University\'s value-added programmes, co-curricular activities, and extracurricular events is to develop students into adaptable, energetic professionals. A range of programmes are organized by the Student Activities Council and 40+ optional clubs to develop students\' abilities and life skills.', NULL, NULL, 'Extended emotional support Vignan provides', ' We provide a nurturing environment with comprehensive emotional support, fostering student\r\n                        well-being and resilience throughout their educational journey.', NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/emotional-img1.webp', 'assets/images/emotional-img2.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('home_facility', 'Facilities for Your <br>Advancement.', 'Nestled within 350 acres of lush greenery near Guntur, Vignan boasts a sprawling campus equipped with cutting-edge amenities. Our campus also features dedicated sports grounds for cricket, basketball, tennis,\r\n    badminton, and more. A state-of-the-art gym, fully equipped and staffed by dedicated professionals, is at your disposal.', 'Explore All Facilities', 'facilities.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/facilities-img1.webp', 'assets/images/facilities-img2.webp', 'assets/images/facilities-img3.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('home_felictation', 'We forge strong bonds with our families', 'Parents\' felicitation is a platform for all of us to create meaningful connections, to engage in open communication, and to spend quality time with our loved students and their families.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/honor-img1.webp', 'assets/images/honor-img2.svg', 'assets/images/honor-img3.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('home_goals', 'Win-Win Tie-Ups for Industry Placements', 'The Training and Placement Cell caters to the needs of students in fine\r\n                    tuning, grooming, and developing their skill set in different domains to make them industry-ready.\r\n                    The Training and Placement Cell enjoys a close rapport with industry and facilitates students\r\n                    finding jobs in top product- and service-based companies.', 'Placement details', 'placements.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('home_goodfood', 'Good Food for Optimal Health.', 'Hygienically maintained, spacious dining halls with a capacity to accommodate 500 students at a time provide appetising and wholesome meals. \"Eating nourishing food sustains your spirit, mind, and body, ensuring you reach your destination with vitality and longevity.', 'View Article', 'underconstruction.php', NULL, NULL, NULL, NULL, '', 'Healthy food that you feed your spirit, mind and body keep you long enough to reach your destination.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/goodfood-img1.webp', 'assets/images/goodfood-img2.webp', 'assets/images/goodfood-img3.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('home_research', 'Discover Our Research Endeavours', 'Our institution encourages a strong scientific culture that motivates both staff and students to pursue their research goals with tenacity. Undergraduate students\' curiosity is piqued by this culture, which gives them the confidence to take on a variety of challenging assignments with excitement.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('iqac_hero', 'IQAC', 'Internal Quality Assurance Cell (IQAC) is meant for planning, guiding and monitoring Quality Assurance (QA) and Quality Enhancement (QE) activities of the college.', 'Read More', 'https://vignan.ac.in/iqacranks.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('iqac_overview', 'Overview', 'In pursuance of the National Action Plan of the National Assessment and Accreditation Council (NAAC), for performance evaluation, assessment and accreditation and quality up-gradation of institutions of higher education, the NAAC proposes that every accredited institution establish an Internal Quality Assurance Cell (IQAC) as a post-accreditation quality sustenance measure.<br /><br /> Since quality enhancement is a continuous process, the IQAC will become a part of an institution\'s system and work towards realising the goals of quality enhancement and sustenance. The prime task of the IQAC is to develop a system for conscious, consistent and catalytic improvement in the performance of institutions.<br /><br /> The IQAC will make a significant and meaningful contribution in the post-accreditation phase of institutions. During the post-accreditation period, the IQAC will channelize the efforts and measures of an institution towards academic excellence.', 'IQAC Functions', NULL, 'Experts on Quality Management', NULL, NULL, NULL, 'Dr. M. Ramakrishna', 'Dean, IQAC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/iqac_dean.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('lib_adv_committee', 'Advisory Committe', NULL, 'Show All', 'libadvcommittee.php', NULL, NULL, NULL, NULL, 'Dr. Y. Ravi Sekhar', 'Chairman', NULL, NULL, 'Dr.M. Subba Rao', 'Member', NULL, NULL, 'Dr. A. Vijaya Sai', 'Member', NULL, NULL, 'assets\\images\\aboutus_img12.webp', 'assets\\images\\aboutus_img14.webp', 'assets\\images\\aboutus_img13.webp', 'assets\\images\\aboutus_img11.webp', NULL, NULL, NULL, NULL, 'Dr. Sk. Farooq', 'Member'),
('lib_resources', 'Resources', 'The college library offers a wide range of online resources, including e-books, academic journals, databases, and research tools accessible from anywhere. These resources support students\' and faculty\'s academic and research needs, providing convenient and comprehensive access to information.', 'Book Search', 'booksearch.php', 'Open Access Journals', 'https://vignan.ac.in/pdf/open_sources_links.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('lib_resources_books', 'Books', NULL, 'Show All Books', 'libbooks.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('lib_resources_ebooks', 'E-Books', NULL, 'Show All E-Books', 'libebooks.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('lib_resources_econtent', 'E-Content', NULL, 'Show All E-Contents', 'libecontent.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('lib_resources_ejournals', 'E-JOURNALS PACKAGES', NULL, 'Show All E-Books', 'libejournals.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('lib_resources_others', 'Other Online Courses   ', NULL, 'Show All E-Contents', 'libothers.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `sections` (`id`, `title`, `descr`, `btn_nm1`, `btn1_hlink`, `btn_nm2`, `btn2_hlink`, `btn_nm3`, `btn3_hlink`, `subsec1_title`, `subsec1_desc`, `subsec1_btn1`, `subsec1_btn1_hlink`, `subsec2_title`, `subsec2_desc`, `subsec2_btn1`, `subsec2_btn1_hlink`, `subsec3_title`, `subsec3_desc`, `subsec3_btn1`, `subsec3_btn1_hlink`, `img1`, `img2`, `img3`, `img4`, `btn_nm4`, `btn4_hlink`, `img5`, `img6`, `subsec4_title`, `subsec4_desc`) VALUES
('lib_rules', 'Library Rules', NULL, 'Copyright & Guidelines  on usage', NULL, NULL, NULL, NULL, NULL, ' I. Method of issuing books ', '<br><strong>Staff: </strong> Teaching staff are eligible for 10 books to borrow from library. Non-teaching staff (technical) are eligible for 4 books.</br> \n<strong>Students: \n </strong> Students (all under graduate, post graduate and research scholars), are eligible for 6 books to borrow from the library. </br></br> ', NULL, NULL, 'II. Instructions (or) rules & regulations  ', '</br><strong>Care of books: </strong> Books and bound volumes should be handled with great care. Mutilation and disfiguring of pages, books and bound volumes by ink or pencil marks are strictly prohibited. Books taken out for reading or borrowing should be checked by the borrower for defects / multilations at the time of drawing. Cost of mutilations observed will be charged to the last borrower.<br> \n<strong>Over due charges: </strong>Books should be returned on or before the due date after which a fine of rs. 2 /- per day will be charged.<br> \n<strong>Loss of books: </strong>The concerned student or staff member has to pay double the amount of the original price of the book or replace it with a brand new book within 7 days of reporting the loss.  Whenever a borrower loses a book, he / she should report and submit an application at the counter within the period of due date. If he / she submits the application after the due date, he / she must replace the book together with the over due charges from the due date to the date of application. <br>\n<strong>No dues certificate: </strong> Students have to return the library books before they take their final year-end exams.  Borrowing books on others borrower’s card is considered seriously and if students found misusing borrower’s card. They will be deprived of the library facility. Even fine will not accepted if the borrower returns the book after 30 days (from the date of issue). He / she has to forego the library facility.  Students / staff leaving the campus on account of completion of expulsion must return the library books in good condition. Staff members should not transfer their books or dues to other staff members at the time of leaving the institution to obtain “no dues certificate”.<br> \n<strong>Special penalty: </strong> Any student seen marking or cutting any portions of magazines, journals, news papers or books or caught in the act of pilfering books will be fined a minimum of rs. 500/- in addition to the disciplinary action recommended by the committee constituted for this purpose.</br></br> ', NULL, NULL, 'III General rules ', '</br>1. Students are not allowed to enter the library when they have scheduled class work.<br> \n2. Newspapers and journals will not be issued for reference outside the library.<br> \n3. combined or group study is not allowed in the reading room because it disturbs other members.<br> \n4. in order to enable the librarian to maintain the library on sound lines, full and unstinted co-operation of staff members and students is expected.<br> \n5. no person shall attend cellphones in the library. They shall neither bring food, drinks nor chew gums in the library. \n</br></br>\n<strong>Reference books: </strong>reference books are kept in the reference section. The books should be referred in the library only.<br> \n<strong>Special reference books / materials: </strong>ISI code books, encyclopaedia, videocassettes, audiocassettes cd’s are shelved separately under closed access.', NULL, NULL, 'assets\\images\\library.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('lib_sec1', 'NTR Vignan\nLibrary', 'It provides access to a vast collection of books, journals, digital resources, and study spaces to support academic and research activities.', 'Brochure', 'https://vignan.ac.in/pdf/Library_Brochure.pdf', 'Login', 'librarylogin.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/ntrlibrary.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('lib_sec2', 'Overview', '<br />The Central library at Vignan\'s University, inaugurated in the year of 2005 by the Coal and Mines Minister, Govt. of India, Sri. Dasari Narayana Rao has an exclusive user friendly and comfort oriented infrastructure, which is spread over a space of about 5902 Sqm. It is an air conditioned, aesthetically designed facility with plenty of indoor greenery, modern furniture and reprographic conveniences. There are separate enclaves for individual and group study. The NTR library stocks more than 1,12,633 volumes, which include competitive exam resources for UPSC, IES etc, and plenty of audio-visual learning materials. Also, 261 national and international referred journals are available.<br /><br /><br>\nNTR Vignan Library subscribes to more than 6,748 e-journals (like IEEE, ASME, ASCE, Springer, EBSCO, JSTOR & DELNET) and has access to 10,000 DOAJ. Library is a member of an inter-library loan service (DELNET), INFLIBNET and is also supported by reprographic facilities.<br /><br /><br>\nWhile one Assistant Director looks after the Ph.D. programmes and the projects funded by the external funding agencies like DST, UGC, CSIR, AICTE, ISRO etc.<br>', 'Overview', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('lib_stu_members', 'Student Members', NULL, 'Show All', 'libstucommittee.php', NULL, NULL, NULL, NULL, 'D. Chanikya Chandra Sekhar', 'BA.LLB(Hons.)', NULL, NULL, 'Gorantla Jahnavi', 'BBA.LLB(Hons.)', NULL, NULL, 'K. Dinesh', 'EEE', NULL, NULL, 'assets/images/studentimage1.png', 'assets\\images\\studentimage0.png', 'assets\\images\\studentimage2.png', 'assets\\images\\studentimage3.png', NULL, NULL, NULL, NULL, 'P. Ravi Shankar', 'Mechanical'),
('naac', 'NAAC', 'National Assessment and Accreditation Council (NAAC) accredited VFSTR and awarded \"A+\" grade ', 'Read More', 'https://vignan.ac.in/naac.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('nad_sec1', 'NAD', 'Degrees, Certificates, Mark sheets etc. are stored digitally & available to students 24x7. Degrees, Certificates, Mark sheets etc. are stored digitally & available to students 24x7.', 'Read More', 'https://vignan.ac.in/nad.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('nad_sec2', 'Academic Bank of Credits (ABC)', 'Credit Bank for Students', 'View Circular', 'https://vignan.ac.in/nadcir.php', NULL, NULL, NULL, NULL, 'Students can accumulate credits from prior learning experiences', 'As per National Education Policy 2020,  the Academic Bank of Credits (ABC) has been envisaged to facilitate the academic mobility of students with the freedom to study across the Higher Education Institutions in the country with an appropriate \"credit transfer\" mechanism from one programme to another, leading to attain a Degree/Diploma/PG-diploma, etc', NULL, NULL, '26 Cr', 'students registered', NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/nad-sec-31.svg', 'assets/images/nad-sec-32.svg', 'assets/images/nad_sec_33.webp', 'assets/images/nad-sec-34.svg', NULL, NULL, NULL, NULL, NULL, NULL),
('nad_sec7', 'Contact Us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dr. Vijayaraghavan V', '<br>Associate Dean-Academics Assessment and Awards.', NULL, NULL, 'Phone', '+91 99423 23293\r\nOffice : 0863-2344700\r\nIntercom No : 256', NULL, NULL, 'Email', 'abc_vfstr@vignan.ac', NULL, NULL, 'assets/images/nad_cu.svg\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ncc_sec1', 'National Cadet Corps', 'Experience the crux of leadership, discipline, and camaraderie with our National Cadet Corps (NCC) program', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/ncc_img1.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ncc_sec3', 'Activities', 'During the training, certain cadets are chosen to undergo intensive military training at army training centres, national integration camps, and other related attachments. They are encouraged to pursue \"B\" and \"C\" certificate examinations and are also inspired to pursue careers in the Armed Forces, including the Army, Navy, and Air Force.', 'View All Activities\r\n', 'nccActivity.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/ncc_img2.webp', 'assets/images/ncc_img3.webp', 'assets/images/ncc_img4.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('newpar_alumni', 'Alumni Hall of Fame', 'Our institution\'s esteemed graduates exemplify the profound impact of Vignan’s education \r\nthrough their remarkable achievements across diverse global fields. Their success underscores the exceptional quality and transformative \r\ninfluence of our university, inspiring current and prospective students to aim for even greater accomplishments.', 'Explore More', 'https://vignan.ac.in/alumni/?type=individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/renowed-img1.webp', 'assets/images/renowed-img2.webp', 'assets/images/renowed-img3.webp', 'assets/images/renowed-img4.webp', NULL, NULL, NULL, NULL, NULL, NULL),
('newpar_bankloan', 'Bank Loans', 'We partner with over 14 leading banks in India to facilitate tailored education loans that best suit your needs. Eligible \r\nstudents, who achieve over 60% in their board exams on the first attempt, can apply for loans covering tuition fees, hostel fees, \r\ntransportation, and book purchases. Conveniently located on campus, UCO Bank provides these loan facilities, allowing students to \r\nrepay after graduation upon starting their careers, following RBI guidelines.', 'View all list of ban', '#', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', NULL, NULL),
('newpar_emotional', 'Emotional and Physiological Development.', 'In addition to state-of-the-art facilities, \r\n we provide personalized counseling and unlimited sessions at the Student Counseling Centre to address academic, personal, \r\n and professional challenges. Many students have found significant benefits from these counseling sessions.', 'Explore More', 'https://vignan.ac.in/holistic.php/?type=individual', 'Explore More', 'https://vignan.ac.in/holistic.php/?type=individual', NULL, NULL, ' Holistic Training Program at Vignan', 'Vignan’s University places a strong emphasis on physical fitness through comprehensive sports and \r\n co-curricular activities. Our student-driven approach, supported by over 40 clubs and the Student Activities Council, fosters adaptable, \r\n energetic professionals. With a proactive activity calendar featuring technical and cultural competitions at various levels, \r\n students gain invaluable hands-on experience in event organization.', '', '', 'Extended emotional s', ' The Student Counselling Centre, staffed by qualified psychologists, \r\n provides solution-focused counselling services, and follow-up meetings are scheduled based on the severity of the issues, with the goal of \r\n monitoring student behaviour improvements', NULL, NULL, NULL, NULL, NULL, '', 'assets/images/emotional-img1.webp', 'assets/images/emotional-img2.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('newpar_hero', 'A welcoming message to parents', 'Join us on an academic journey where your child\'s potential is nurtured by our unwavering commitment.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/newparentimg1.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('newpar_overview', 'Overview', 'Vignan\'s amazing journey began 47 years ago. Embedded in humble beginnings today, it stands tall as an emblem of educational excellence, encompassing a diverse group of institutions within its venerated fold. The Vignan Group of Institutions boasts 7 Engineering Colleges, 3 Pharmacy Colleges, 1 B. Ed. College, 1 Degree College, 1 Law School, 1 Diploma College, and 1 P.G. College, alongside its own university. Additionally, there are 6 Junior Colleges and 20 Schools, forming a comprehensive educational network. Serving approximately 45,000 students across Andhra Pradesh and Telangana.  Vignan\'s success in the private sector higher education setting is a testament to the persistent dedication and visionary leadership of its Chairman and Founder, Dr. Lavu Rathaiah.<br><br> VFSTR achieved significant accolades: Ranked 75th in NIRF 2023, \'A+\' grade from NAAC, and NBA tier-1 accreditation for CSE, ECE, EEE, Mechanical Engineering, and Biotechnology. It holds AICTE approval, 12(B) status, and DSIR certification. Notably, it earned a DIAMOND rating in QS-I-GAUGE Accreditation with a score of 90%.', '  View all Departments', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('newpar_safety', 'Safety & Security', 'We prioritize the safety and well-being of all our students. We offer comprehensive support services, including counselling and self-defence workshops, designed to empower our female students with essential skills and knowledge. We continuously enhance our security measures to ensure a safe and secure learning environment for everyone. ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/safetyimg1.webp', 'assets/images/safetyimg2.webp', 'assets/images/safetyimg3.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('newpar_whrdostugo', 'Career Paths After Graduation', 'After graduation, students embark on diverse paths, few enter the workforce to apply their knowledge, while others pursue higher education to deepen their expertise. They shape their futures with purpose and ambition, making impactful strides in their chosen fields.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('newstu_dayscholar', 'If you are day scholar then these are the bus routes', 'Vignan\'s University, is located along National Highway-5 and lies between Guntur and Tenali. It is 13 km from Guntur and 12 km from Tenali. It is well connected by road. Government buses are available on regular basis from different area?s of the city & local transportation is also easily accessible to reach to the university', 'Link for Bus Routes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/buses.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('newstu_frst6days', 'A Journey of Insights and Discoveries', 'Vignan hosts a comprehensive six-day orientation program for new students. The program includes goal-setting and orientation to Vignan\'s lifestyle, psychological counseling, comprehensive career training, civil service preparation, educational quality sessions by the Vice Chancellor, stress assessment and management, and discussions on society and nature.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/newstu_img1.webp', 'assets/images/newstu_img2.webp', 'assets/images/newstu_img3.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('newstu_goodfood', 'Good Food for Optimal Health.', 'Our meticulously maintained, expansive dining halls comfortably host up to 500 students, offering delicious and nutritious meals. At Vignan, we prioritize serving healthy meals that support your mind, body, and spirit, ensuring you reach your academic goals with vitality and longevity in mind.', 'View Article', 'underconstruction.php', NULL, NULL, NULL, NULL, '', 'Healthy food that you feed your spirit, mind and body keep you long enough to reach your destination.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/goodfood-img1.webp', 'assets/images/goodfood-img2.webp', 'assets/images/goodfood-img3.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('newstu_hero', 'A Fresh Start', 'We welcome new students to this extraordinary chapter in their lives! As you embark on this thrilling academic journey, we warmly extend our greetings.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/newstudentimg1.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('newstu_hstl', 'Hostel Life', 'Your first year stay at the University will be packed with exciting possibilities. The on-campus hostels for boys and girls, will provide you a home away from home with every comfort and amenity. The campus hostel can accommodate 1300 boys and 1200 girls. Each hostel has an exclusive and dedicated team to take care of the students’ welfare. The hostel dispensary is manned by a doctor and a nurse, with facilities for first-aid and treatment of minor ailments. A 24X7 ambulance facility is available for emergencies. ', 'Explore Hostel Facility', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/hostellife_img1.webp', 'assets/images/hostellife_img2.webp', 'assets/images/hostellife_img3.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('newstu_training', 'Training for an Extra Edge', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Campus Recruitment Training (CRT)', 'A 200-hour program that offers rigorous training and learning opportunities to students aspiring for campus placements. The program covers training on quantitative ability, verbal ability, reasoning skills, soft skills and mock interview sessions, conducted by both in- house and external experts. ', NULL, NULL, 'Win-Win tie-ups with Industry', 'The university has MoUs with industry for curriculum development, collaborative R&D, as well as for training students and faculty members. We also have MoUs for student internships with VEDA IIT, Virchow, ZOHO, Hetero Biopharma Limited, Nova Agri Tech Limited, and KOREA TECH.<br><br> Vignan also collaborates with FACE, ITC etc., to provide better placements and internships in software and core areas. The university has been accredited by TCS.', NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/training_img1.webp', 'assets/images/training_img2.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('notification_sec', 'Notifications', 'Stay informed and connected with the <br>\nlatest university notifications', 'All', NULL, 'Admissions', NULL, 'Students', NULL, 'Showing All Notifications', NULL, 'Career', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Research', NULL, NULL, NULL, NULL, NULL),
('safety_main', 'Safety & Security', 'At Vignan, we are dedicated to empowering our female students with the knowledge and skills to protect themselves. We offer various support services, including counselling and self-defence workshops, designed to enhance their safety and confidence. We are proud to report that there have been no incidents on our campus. However, we remain committed to continuously improving our security measures to maintain a safe and secure learning environment for all our students. Your safety and well-being are our utmost concerns, and we are devoted to upholding the highest standards in this regard.', 'LoRa Faceted Device Assisting Women’s Safety', '#', NULL, NULL, NULL, NULL, NULL, 'The Gender Sensitisation Committee Against Sexual Harassment (GSCASH) at Vignan aims to foster a gender-sensitive environment and prevent all forms of sexual harassment within VFSTR.<br><br>Additionally, the POSH (Prevention of Sexual Harassment) committee ensures strict adherence to regulations regarding the prevention of sexual harassment of women within the institute.<br><br>Our campus is equipped with rigorous safety measures to ensure the well-being of our students. These include advanced fire detection and alarm systems across the campus, a dedicated team of trained security personnel on duty, extensive CCTV surveillance to monitor and prevent incidents, and enhanced security measures to maintain discipline during examinations.', 'Read More', '#', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/safety_1.webp', 'assets/images/safety_2.webp', 'assets/images/safety_3.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ueac_card1', 'Overview', 'The UEAC Unit of VFSTR, established in 2009, evolved from Vignan\'s Engineering College NSS unit to inspire students towards community service. These initiatives instill social responsibility in future engineers and strengthen VFSTR\'s community ties through various extension activities. The unit received a Silver Medal from the Indian Red Cross Society, awarded by the Honorable Governor of Andhra Pradesh in 2016. Over the past six years, the UEAC has organized blood donation camps, tree plantations, special camps, visits to old age homes and orphanages, fundraising for armed forces and flood victims, and various awareness days. They also support adopted schools with health checkups, academic classes, infrastructure, and hygienic food during exams.', NULL, NULL, NULL, NULL, NULL, NULL, '2009', 'year of establishment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ueac_card2', 'Unnat Bharat Abhiyan (UBA)', 'Envisioned by Mahatma Gandhi in \"Hind Swaraj,\" the Western developmental paradigm, rooted in centralised technologies and urbanisation, has led to challenges like growing inequality and climate change. Addressing these requires fostering rural development in line with Gandhi\'s vision of self-sufficient \"village republics\" using local resources and decentralised, eco-friendly technologies. This approach aims to meet essential local needs, promoting sustainable development. Currently, 70% of India\'s population resides in rural areas, primarily engaged in agriculture, which employs 51% of the workforce but contributes only 17% to the GDP. Significant disparities between rural and urban sectors in health, education, income, amenities, and employment drive migration to cities. Sustainable development necessitates eco-friendly rural development and local employment opportunities, as unchecked urbanisation is unsustainable. Professional higher education institutions have historically focused on the industrial sector, offering little to rural development. The Unnat Bharat Abhiyan (UBA) is a crucial initiative for comprehensive rural development.', NULL, NULL, NULL, NULL, NULL, NULL, '2014', 'year of establishment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ueac_event2', 'UEAC Events', 'UEAC has organised blood donation camps, tree plantations, special camps, visits to old age homes and orphanages, fundraising for armed forces and flood victims, and various awareness days.', 'Archives', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ueac_event_1', 'Events', 'UEAC has organised blood donation camps, tree plantations, special camps, visits to old age homes and orphanages, fundraising for armed forces and flood victims, and various awareness days. They also support adopted schools with health checkups, academic classes, infrastructure, and hygienic food during exams', 'View All Events', 'ueacevents.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/ueacevent1.png', 'assets/images/ueacevent2.png', 'assets/images/ueacevent3.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ueac_sec1', 'University Extension Activity Council - UEAC', 'It is aimed to motivate students towards community-oriented services.', 'Login', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/icons/Button_forwardarrow.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ulife_antiragging', 'Anti Ragging', 'Ragging in essence is a human rights abuse... In present times shocking incidents of ragging have come to the notice... The student is physically tortured or psychologically terrorized...\"', 'Read More', 'https://vignan.ac.in/antiragginghome.php', '', '', NULL, NULL, 'Grievance Redressal', 'A committee attends to both the academic and personal problems of the students, such as academic functioning, lab facilities, access to information, unfair evaluation in exams (if any), and any discrimination based on gender or social status.', 'Read More', 'https://vignan.ac.in/antiragginghome.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/ulife_antiragging1.webp', 'assets/images/ulife_antiragging2.webp', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
('ulife_artculture', 'Art & Cultural Amenities', 'The institution provides rich scope and facilities for different clubs like literary, cultural, sports and fine arts. These clubs offer a platform for students to exhibit their innate and latent talents in the areas of their interest.For facilitating students to conduct and participate in the wide spectrum of recreational activities,the institution has well planned infrastructure.', 'Explore All Amenities', 'https://vignan.ac.in/recreational.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/ulife_artculture1.webp', 'assets/images/ulife_artculture2.webp', 'assets/images/ulife_artculture3.webp', NULL, NULL, '', NULL, NULL, NULL, NULL),
('ulife_experience', 'Experience the Ambience', '\"The campus at Vignan?s University, with its lush greenery, offers an enchanting haven for those embarking on their academic journey amidst the vibrant environment of a multicultural campus.\"', 'Green Campus', 'https://vignan.ac.in/ambience.php', 'Canteen Tour', 'https://vignan.ac.in/ambience.php', 'Auditorium', 'https://vignan.ac.in/ambience.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/ulife_green_campus.png', 'assets/images/ulife_canteen_tour.webp', 'assets/images/ulife_auditorium.webp', NULL, NULL, '', NULL, NULL, NULL, NULL),
('ulife_hero', 'Learn, Thrive, Enjoy, and Grow.', 'The beautifully landscaped campus has green tree lined avenues, lush green lawns, spacious classrooms, open corridors and large playgrounds.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/ulife_hero.webp', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
('ulife_library', 'Library', 'The Central library at Vignan\'s University, inaugurated in the year of 2005 by the Coal and Mines Minister, Govt. of India, Sri. Dasari Narayana Rao has an exclusive user friendly and comfort oriented infrastructure, which is spread over a space of about 5902 Sqm. It is an air conditioned, aesthetically designed facility with plenty of indoor greenery, modern furniture and reprographic conveniences.', NULL, NULL, NULL, NULL, NULL, NULL, 'NTR Vignan Library Infrastruct', 'The NTR library stocks more than 1,12,633 volumes, which include competitive exam resources for UPSC, IES etc, and plenty of audio-visual learning materials. Also, 261 national and international referred journals are available.', 'Explore More', 'https://vignan.ac.in/vignantest/library.php', 'Online Resources', 'Vignan\'s University subscribes to the online Journals and now available for all students and faculty through IP based (no need of password)', 'Explore More', 'https://vignan.ac.in/libonlineresources.php', 'Vignan Library Services', 'The artistically designed octagonal shaped library with more than 1,12', 'Explore More', 'https://vignan.ac.in/libonlineresources.php', 'assets/images/ulife_library.webp', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
('ulife_sport', 'Sports Amenities', 'The campus is equipped with facilities for all outdoor games like cricket, football, volleyball, tennis, basketball, and a 400-meter track athletics. An Indoor Sports Complex offers provision for indoor games like table tennis, badminton etc.', 'Athletics', 'https://vignan.ac.in/recreational.php', 'Kabbadi', 'https://vignan.ac.in/recreational.php', 'Cricket', 'https://vignan.ac.in/recreational.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/ulife_athletics.webp', 'assets/images/ulife_kabbadi.webp', 'assets/images/ulife_cricket.webp', 'assets/images/ulife_basketball.webp', 'Basketball', 'https://vignan.ac.in/recreational.php', NULL, NULL, NULL, NULL),
('unires_sec1', 'Encourages,challenges,<br>you to be inquisitive, ', 'A strong scientific spirit and commitment to innovation drive faculty and students at VFSTR University.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/image_card.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('unires_sec10', 'Funding Agencies', 'University research thrives on support from prominent funding agencies, such as the  AERB, BRNS,CSIR etc. These agencies fuel groundbreaking discoveries and scholarly pursuits, enabling universities to pursue cutting-edge projects that contribute to the broader landscape of knowledge and innovation.', 'Funding Agencies', 'https://vignan.ac.in/research/Funding_Agencies.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/fund1.webp', 'assets/images/fund2.webp', 'assets/images/fund3.webp', 'assets/images/fund4.webp', NULL, NULL, 'assets/images/fund5.webp', 'assets/images/fund6.webp', NULL, NULL),
('unires_sec11', 'Policies and Board', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Research Policy', 'Every student should appear in V-SAT Exam to get admission in  Vignan', 'Know more', NULL, 'Consultancy Policy', 'All student will get discount on Tuition fee, depending on V-SAT results.', 'Know more', NULL, 'URB', 'Every student should appear in V-SAT Exam to get admission in  Vignan', 'Know more', NULL, NULL, NULL, NULL, NULL, 'Know more', NULL, NULL, NULL, 'RMC', 'All student will get discount on Tuition fee, depending on V-SAT results.'),
('unires_sec12', 'Downloads', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ph.D Application', NULL, 'Download', 'https://vignan.ac.in/pdf/Ph.D_Application_Form.pdf', 'Brochure', 'Ph.D. Regulations', 'Download ', 'https://vignan.ac.in/pdf/vignan-phd-rules.pdf', 'Forms', 'For selected candidates', 'Download', NULL, 'https://vignan.ac.in/pdf/Acceptance_of_the_Internal_Supervisor.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('unires_sec13', 'Admission Open <br> for 2024', 'Ph.D', 'Apply Now', 'https://admissions2024.vignan.ac.in/', 'Sign in', 'https://admissions2024.vignan.ac.in/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('unires_sec2', 'Overview', 'A sound scientific temperament and quest for continuous innovation drives both faculty and students to keep pursuing research activities at the institute. This infuses an investigative spirit even among under-graduate students and motivates them to take up various challenging projects.<br><br><br>To conduct and to promote research activities, VFSTR has a Directorate of Research and Development hooded by a Director who is assisted by two Assistant Directors.<br><br><br>While one Assistant Director looks after the Ph.D. programmes and the projects funded by the external funding agencies like DST, UGC, CSIR, AICTE ISRO etc.', 'View all Departments', 'department.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('unires_sec3', 'Explore Our Research Initiatves', 'We believe learning should be an enjoyable experience & emphasis on learning skills over exam scores. We have curated our programs in a unique style of teaching, which help students to recall the content that they studied in an efficient way. ', 'View all', 'research-ini.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/me1.webp', 'assets/images/me2.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('unires_sec4', 'Professors leading in Research areas', NULL, 'View all', 'https://vignan.ac.in/bshresearch.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('unires_sec6', 'Awards\n& Appreciations', NULL, 'Show All', 'awards.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('unires_sec7', 'Event', NULL, 'View All', 'https://vignan.ac.in/oldhome.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('unires_sec8', 'Patents', NULL, 'Explore Patents', 'patents.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('unires_sec9', 'Research Statistics ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SCOPUS', 'The CoE enhanced our research growth, research funding, publications (which grew thrice), citations (which increased twenty-five times-WoS), and student enrolment in Ph.D programmes. Our University’s H-index stands at 30.', NULL, NULL, 'Web of Science', 'We’ve published 963 journal articles and 1066 conference papers. 87% of articles published in indexed journals in WOS/SCOPUS.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('uni_exe', 'Centre Of Excellence for Advanced Materials, Manufacturing , Processing and Characterization (CoExAMMPC)', 'CoExAMMPC at VFSTR University, Guntur, is a multidisciplinary hub for research and development. It focuses on diverse fields from fundamental scientific concepts to applied engineering, actively engaging in R&D through sponsored projects. The center aims for excellence in science and technology research, striving to publish quality articles in SCI journals to enhance its h-index. CoExAMMPC is dedicated to exploring all aspects of new materials, equipped with state-of-the-art facilities and collaborating with leading institutions and industries nationally and internationally.', 'Explore More', 'CoExAMMPC.php', 'Explore More', 'CoExAMMPC.php', NULL, NULL, 'Objectives', 'The objectives include establishing cutting-edge interdisciplinary research facilities, engaging undergraduate, postgraduate, and PhD scholars in multidisciplinary research, executing industry-sponsored projects, providing material processing and analytical services, and producing industry-ready engineering graduates.', NULL, NULL, 'Scanning Electron Microscope (SEM)', ' SEM Invented some 50 years ago, SEM is now a\r\nmature technique and is applied widely in many scientific\r\napplications. SEM is a powerful technique in the examination of materials, metallurgy, geology, biology and medicine etc.', NULL, NULL, NULL, NULL, NULL, NULL, 'assets/images/coe1.webp', 'assets/images/coe2.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Wedc_categories_1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gender Equity', 'Gender equity and equality, fundamental human rights, are essential for achieving peaceful societies, full human potential, and sustainable development. Empowering women has been shown to enhance productivity and economic growth. At VFSTR, we place paramount importance on ensuring equal access to quality education, research opportunities, and participation in administration for both women and men, as well as girls and boys.', 'View Document', '#', 'GSCASH', 'The Gender Sensitization Committee Against Sexual Harassment (GSCASH) at Vignan is dedicated to fostering a gender-sensitive environment and addressing instances of sexual harassment. Established as per UGC guidelines on July 23, 2015, VFSTR’s GSCASH-IICC is chaired by Dr. N. Usha Rani, appointed by the Vice-Chancellor on June 14, 2016. Our committee is committed to creating awareness and ensuring a safe and respectful campus for all.<br><br>Sexual harassment, as defined in the Visakha judgment upheld by the Supreme Court and adopted by VFSTR University, encompasses any unwelcome sexually-oriented behaviour, whether direct or implied. This includes physical contact, advances, requests for sexual favours, sexually suggestive remarks, displaying pornography, and other inappropriate physical, verbal, or non-verbal actions of a sexual nature.', 'View Document', '#', 'POSH', 'The Prevention of Sexual Harassment Committee (POSH) ensures compliance with the Sexual Harassment of Women at Workplace (Prevention, Prohibition, and Redressal) Act and Rules, 2013 (\"Law\"), which stipulates that every employer must ensure a safe working environment, safeguarding individuals from any form of harassment from those they come into contact with in the workplace (Section 19(a)). \r\nComprising representatives from diverse backgrounds, including management, employees, and external exper', 'View Document', '#', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Wedc_categories_2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Year Wise Cases', 'Monitoring annual cases of POSH offers valuable insights into the efficacy of prevention measures and the prevalence of workplace harassment trends over time.\r\nBy analysing trends in reported cases, organizations can adapt policies and interventions to better address issues of sexual harassment and ensure a safer working environment for all employees.\r\n', 'View Document', '#', 'Annual Reports', 'The annual reports from POSH provide a detailed summary of the committee\'s activities, encompassing the number of cases managed, interventions undertaken, and outcomes attained.\r\nThese reports serve as critical tools for evaluating the effectiveness of policies, identifying areas for improvement, and fostering transparency and accountability within the institute.\r\n', 'View Document', '#', 'Minutes of Meetings', 'The minutes of POSH meetings offer a comprehensive record detailing discussions, decisions, and actions taken to address workplace harassment cases.\r\nThese documents ensure transparency, accountability, and compliance with legal obligations, guiding the committee\'s efforts towards fostering a safe and respectful work environment.\r\n', 'View Document', '#', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Wedc_Committee_Members', 'Committee<br>Members', 'The Internal Complaints Committee (ICC) will be responsible for addressing all complaints made by victims and ensuring timely resolution of these complaints in accordance with the Sexual Harassment of Women (Prevention, Prohibition, and Redressal) Act, 2013.', 'Show All Members', './commiteemembers.php', NULL, NULL, NULL, NULL, 'Dr. N. Usha Rani', 'Chair Person', NULL, NULL, 'Mrs. Priya Gutta', 'Member', NULL, NULL, 'Mrs. Loki Madineni', 'Member', NULL, NULL, './assets/images/pexels_photo_by_pegah_sharifi.webp', './assets/images/pexels_photo_by_pegah_sharifi (1).webp', './assets/images/pexels_photo_by_pegah_sharifi (2).webp', './assets/images/pexels_photo_by_pegah_sharifi (3).webp', NULL, NULL, NULL, NULL, 'MISS. Aruna Anchula', 'Student Member'),
('Wedc_Overlays_1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WEDC', 'Women Empowerment and Development Cell of VFSTR (Deemed to be University) organises several programs on awareness session on Sexual Harassment of Women at Workplace.<br><br>Mrs. Sushma Uday Singumahanthy, Regional Head-HR, Wipro Technologies, Hyderabad had been invited as a guest speaker in one of the program. She emphasised how the Act aimed to give women a secure working environment and that it had put in place procedures for preventing and resolving sexual harassment claims.<br><br>She also discussed acceptable and unacceptable workplace behaviour. The students thought the lesson was interesting and helpful for them in their daily lives.', 'View Document', '#', 'GSCASH', 'Gender Sensitisation Committee Against Sexual Harassment(GSCASH) works towards creating and propagating a gender sensitive environment and spurn any kind of instances of sexual harassment in VFSTRU has constituted Gender SCASH - ICC chaired by Dr. N. Usha Rani appointed by Vice-Chancellor on 14.06.2016 by UGC notification dated 23.07.2015.<br><br>Sexual harassment, as described in the Visakha judgment by the hon’ble supreme court and adopted by VFSTR University, includes any unwelcome sexually determined behaviour, whether directly or by implication, and includes physical contact and advances, a demand or request for sexual favours, sexually coloured remarks, showing pornography, and other unwelcome physical, verbal or non-verbal conduct of a sexual nature.', 'View Document', '#', 'POSH', 'The Prevention of Sexual Harassment Committee (POSH) serves as a vital entity within Vignan, dedicated to fostering safe and respectful workplaces. Established in accordance with the Sexual Harassment of Women at Workplace (Prevention, Prohibition & Redressal) Act and Rules, 2013, POSH functions as a proactive mechanism for addressing and preventing instances of sexual harassment.<br><br> Comprising representatives from diverse backgrounds, including management, employees, and external experts, ', 'View Document', '#', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Wedc_Overlays_2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Year Wise Cases', 'Tracking year-wise cases of POSH provides valuable insights into the effectiveness of prevention measures and the prevalence of workplace harassment over time.<br><br>By analyzing trends in reported cases, organizations can adapt policies and interventions to better address issues of sexual harassment and ensure a safer working environment for all employees.', 'View Document', '#', 'Annual Reports', 'The annual reports of POSH offer a comprehensive overview of the committee\'s activities, including the number of cases handled, interventions made, and outcomes achieved.<br><br>These reports serve as critical tools for evaluating the effectiveness of policies, identifying areas for improvement, and fostering transparency and accountability within institute.', 'View Document', '#', 'Minutes of Meetings', 'The minutes of meetings of POSH serve as a detailed record of discussions, decisions, and actions taken to address cases of workplace harassment.<br><br>These documents ensure transparency, accountability, and compliance with legal obligations, guiding the committee\'s efforts towards fostering a safe and respectful work environment.', 'View Document', '#', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('WhyChooseUs_ARichRepository', 'A Rich Repository for Learning', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NTR Library', 'The NTR Vignan Library stocks more than 112633 volumes, examination papers, and books for research, as well as plenty of audio and visual material, in addition to the 280 national-referenced journals. Also available are preparation materials for GRE, TOEFL, IELTS, GATE, etc.<br><br>Each department has its own library to serve as a quick reference center. The department library holds around 400 books, journals, project reports, recorded lectures, etc. for advanced learning.', NULL, NULL, 'Institutional LMS', 'Every student gets access to our institutional LMS. This robust platform offers a wealth of digital content, including videos, PowerPoint presentations, assignments, quizzes, forums, Virtual Programming Labs (VPL), and much more. ', NULL, NULL, NULL, NULL, NULL, NULL, './assets/images/WorkLife.jpeg', './assets/images/BookShelf.jpeg', NULL, NULL, NULL, NULL, '', '0', '', ''),
('WhyChooseUs_ChalkingOut', 'Chalking out a Career of Choice', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Incubation Centers', 'Across the world, as well as in India, higher education institutions are striving to motivate engineers not to remain mere job seekers but to evolve into job creators. Vignan offers its students a unique blend of technical skills and management capabilities through opportunities to explore and experiment with their ideas and come up with innovative solutions and products. Students who have entrepreneurial zeal are drawn to the in-house incubator centres, where they are guided and mentored by a team of dedicated and expert faculty members. ', NULL, NULL, 'Entrepreneurship Development', 'Students who want to start up are provided initial funding by the university. Regular talks, workshops, symposiums, and conferences inform, encourage, and sharpen budding entrepreneurs to realize their goals. The university also collaborates with the Ministry of Small and Medium-Scale Enterprises, i.e., MSME, Government of India. The annual E-fest and Idea Carnival hosted by the university attract several business models, and the Business Skill Development Programme (BSDP), in partnership with the MSME, enables our young minds to further hone their entrepreneurial skills. ', NULL, NULL, NULL, NULL, NULL, NULL, './assets/images/WomenWithTab.jpeg', './assets/images/DreamBig.jpeg', './assets/images/PapersShare.jpeg', NULL, NULL, NULL, '', '0', '', ''),
('WhyChooseUs_EncouragingMerit', 'Grooming Excellence ', 'Vignan’s Deemed University is on a mission to ensure that financial barriers never become a hurdle in the mission of students’ pursuit. We care and mentor through recognising and rewarding excellence, and that’s why we’re generous enough to present our exclusive scholarships. ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'V-SAT,JEE,EAPCET,Intermediate / +2 Scores', NULL, NULL, NULL, 'Academic scholarships are awarded to the tune of Rs. 2 crores and are provided to 2nd, 3rd, and 4th year students who constitute the top 5% of respective branches in the current academic year. ', NULL, NULL, NULL, NULL, NULL, NULL, './assets/images/womenwalking.webp', './assets/images/MixedGirlHat.jpeg', './assets/images/MenBW.webp', '', NULL, NULL, '', '0', '', ''),
('WhyChooseUs_InvirogatingEnv', 'Invigorating Environment.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Stimulating Ambience', 'It is an established fact that human behaviour is influenced by the surroundings. The serene atmosphere of a temple has an elevating effect on all of us.<br><br>\r\nGuided by this fact, meticulous care has been taken in the design of the University campus. The beautifully landscaped campus has green tree lined avenues, lush green lawns, spacious classrooms, open corridors, and large playgrounds.\r\nAll this creates a pleasant and stress free atmosphere for students to learn and develop.', NULL, NULL, 'Convenient locale', 'Strategically situated on the Guntur-Tenali highway, our institution is a mere 35-kilometre journey from the bustling city of Vijayawada. The location is ideal and has seamless connectivity to all three vibrant towns, Guntur, Tenali, and Vijayawada, through an extensive public transport network. <br><br>Our campus is well connected both by railways and airways; the Vijayawada airport is just an hour’s drive from our campus. This airport is a bustling hub, with daily flights connecting to major cities such as Bangalore, Mumbai, Chennai, Hyderabad, Pune, and Delhi. ', NULL, NULL, NULL, NULL, NULL, NULL, './assets/images/UniversityGarden.jpeg', './assets/images/GirlBoy.webp', NULL, NULL, NULL, NULL, '', '0', '', ''),
('WhyChooseUs_JoinTheRanks', 'Join the ranks of the highest cadre in the country', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Focus on UPSC', 'The university has a unique B.Tech. + Civil Services Programme in its first year itself. The programme prepares students to prepare for the UPSC Civil Services Examination alongside their engineering courses. On successful completion, students would earn a minor degree in the humanities. More importantly, the programme aims at preparing civil servants who can explore opportunities to serve the nation by joining public services.', NULL, NULL, NULL, 'The goal of the programme is to enable at least five to ten youngsters to qualify for coveted positions every year. Vignan has several illustrious alumni in IAS, IES, IFS, etc. The 5th ranker of UPSC, Mr. A. Sridhar Babu, for the year 2007, is one such alumni. After serving as the District Collector of Uttarakhand, he is currently serving as Director, Tobacco Board, Guntur, Ministry of Commerce & Industry, Govt. of India.', NULL, NULL, NULL, NULL, NULL, NULL, './assets/images/FloorParking.jpeg', './assets/images/LadakhiGuitar.jpeg', NULL, NULL, NULL, NULL, '', '0', '', '');
INSERT INTO `sections` (`id`, `title`, `descr`, `btn_nm1`, `btn1_hlink`, `btn_nm2`, `btn2_hlink`, `btn_nm3`, `btn3_hlink`, `subsec1_title`, `subsec1_desc`, `subsec1_btn1`, `subsec1_btn1_hlink`, `subsec2_title`, `subsec2_desc`, `subsec2_btn1`, `subsec2_btn1_hlink`, `subsec3_title`, `subsec3_desc`, `subsec3_btn1`, `subsec3_btn1_hlink`, `img1`, `img2`, `img3`, `img4`, `btn_nm4`, `btn4_hlink`, `img5`, `img6`, `subsec4_title`, `subsec4_desc`) VALUES
('WhyChooseUs_KeepingPace', 'Keeping pace with Industry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cutting-Edge Courses ', 'We acknowledge that technical education is undergoing a significant transformation. In response to the growing demand for innovative and hybrid technologies, we have introduced courses in emerging areas such as textile engineering, automobile engineering, petroleum engineering, artificial intelligence and machine learning, cyber security, and computer science and business systems, robotics, and automation.', NULL, NULL, 'Humanities', 'For those with aspirations of joining the public service, our Humanities programme provides broad exposure to various subjects, like politics, sociology, economics, history, international relations, and data interpretation, which prepares them for a wide range of career opportunities that involve service to society. ', NULL, NULL, NULL, NULL, NULL, NULL, './assets/images/GuyInIndustry.jpeg', './assets/images/GirlAndComputer.jpeg', NULL, NULL, NULL, NULL, '', '0', '', ''),
('WhyChooseUs_LetsCreateHistory', 'Let’s Create History Together. Join Vignan', NULL, 'Apply now', 'https://internationaladmissions.vignan.ac.in', 'International students', 'https://vignan.ac.in/inadproc.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, './assets/images/ScholarStatue.png', NULL, NULL, NULL, NULL, NULL, '', '0', '', ''),
('WhyChooseUs_Training', 'Training for an extra edge', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Campus Recruitment Training (CRT)', 'A 200-hour programme that offers rigorous training and learning opportunities to students aspiring for campus placements. The programme covers training on quantitative ability, verbal ability, reasoning skills, soft skills, and mock interview sessions conducted by both in-house and external experts.', NULL, NULL, 'Win-Win tie-ups with Industry', 'The university has MoUs with industry for curriculum development, collaborative R&D, and training students and faculty members. \r\nThe university has MoUs for student internships with VEDA IIT, Virchow, ZOHO, Hetero Biopharma Limited, Nova Agri Tech Limited, and Korea Tech. \r\n<br><br>Vignan also collaborates with FACE, ITC, etc. to provide better placements and internships in software and core areas and has been accredited by TCS. ', NULL, NULL, NULL, NULL, NULL, NULL, './assets/images/Belding.jpeg', './assets/images/Classroom.jpeg', NULL, NULL, NULL, NULL, '', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` varchar(50) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `statvalue` varchar(80) DEFAULT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `statorder` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `logo`, `statvalue`, `descr`, `statorder`) VALUES
('home_fac', NULL, '40%', 'From iit,<br> iisc, Nit', 2),
('home_nirf', 'assets/images/nirf.svg', '75', NULL, 1),
('home_ratio', NULL, '1:20', 'Faculty to Student Ratio', 3),
('home_researchfund', NULL, '46.31', 'RESEARCH FUNDING', 4),
('home_researchpapers', NULL, '5700+', 'RESEARCH PAPERS PUBLISHED', 5),
('home_researchpat', NULL, '35+', 'PATENT GRANTED', 6),
('iqac_naacrank', NULL, 'A+', 'NAAC', 0),
('lib_inaug', NULL, '2005', 'YEAR OF INAUGURATION', 1),
('lib_space', NULL, '5902', 'SPACE', 2),
('lib_timings', NULL, '7<span class=\"small-text\">am</span> - 10<span class=\"small-text\">pm</span>', 'Timings', 0),
('naac_card1', NULL, 'A+', 'NAAC 2021', 0),
('naac_card2', NULL, '3.9/5', 'CGPA', 0),
('naac_card3', NULL, '5 Years', '16 NOV 20-17 NOV 24', 0),
('nad_sec1_card1', NULL, '<p>April 06</p> 2018', 'signing Service Level Agreement', 0),
('nad_sec1_card2', 'assets/images/nad_sec1_card2.webp', '', '', 0),
('nad_sec1_card3', '', '9942323293', 'Helpline', 0),
('newpar_legacy', NULL, '47', 'YEARS LEGACY', 7),
('newpar_nirf', NULL, '75', 'NIRF RANK', 9),
('newpar_package', NULL, '44', NULL, 8),
('unires_fun', NULL, '40', 'RESEARCH FUNDING', 0),
('unires_pap', NULL, '2337', 'RESEARCH PAPERS PUBLISHED', 0),
('unires_pat', NULL, '153', 'RESEARCH PATENTS', 0),
('uni_stat1', NULL, '6393', 'CITATIONS 2024', 0),
('uni_stat2', NULL, '27', 'H-INDEX 2024', 0),
('uni_stat3', NULL, '2953', 'CITATIONS 2024', 0),
('uni_stat4', NULL, '23', 'H-INDEX 2024', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `Id` varchar(100) NOT NULL DEFAULT '',
  `img` varchar(100) DEFAULT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `caption` varchar(100) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`Id`, `img`, `descr`, `name`, `caption`, `title`) VALUES
('aboutus_sec12_1', 'assets/images/NITINJAIRAMGADKARI.webp', 'Future lay in the conversion of knowledgeinto wealth', 'SHRI NITIN JAIRAM GADKARI', 'Minister of Road Transport and Highways Govt. of India', 'What guests say'),
('aboutus_sec12_2', 'assets/images/KAILASHSATYARTHI.webp', 'Vignan has been doing a wonderful job. The knowledge you acquire from Vignan will help the students to kiss sky.', 'DR. KAILASH SATYARTHI', 'Social Activist, Nobel peace laureate, CNN-IBN Indian of the Year Outstanding Achievement', NULL),
('aboutus_sec12_3', 'assets/images/PULLELAGOPICHAND.webp', 'Vignan, an inspiration, a visionary produce gems who will be taking the country forward', 'SHRI PULLELA GOPICHAND', 'Chief National Badminton Coach, Padma Sri, Padma Bhushan, Dronaacharya Awards Winner', NULL),
('Admissions_KUNITA RAO', NULL, 'Vignan has always been at my side, and to be honest, I\'ve made the right decision for my future.', 'KUNITA RAO', NULL, NULL),
('Admissions_NAVEEN VARMA', NULL, 'Our daughter\'s college experience has been transformative. She\'s not only gaining valuable knowledge but also developing essential life skills. The supportive environment and diverse opportunities have truly shaped her into a confident and well-rounded in', 'NAVEEN VARMA', 'Class of 2023', NULL),
('Admissions_SAMIRA REDDY', NULL, 'I can confidently say that my college years have been the most transformative and enriching period of my life, and I owe it all to Vignan. I stepped onto campus, I knew I had found a second home.', 'SAMIRA REDDY', 'Class of 2023', NULL),
('Admissions_SUJAY SHEKHAR', NULL, 'My college years were the foundation of my success today. The rigorous academic curriculum and mentorship from dedicated faculty prepared me for a fulfilling career. The lifelong friendships and professional network I built continue to positively impact m', 'SUJAY SHEKHAR', 'Class of 2023', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timetables`
--

CREATE TABLE `timetables` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `btn_nm` varchar(50) DEFAULT NULL,
  `btn_hlink` varchar(255) DEFAULT NULL,
  `revised` tinyint(4) DEFAULT NULL,
  `prog_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetables`
--

INSERT INTO `timetables` (`id`, `title`, `descr`, `date`, `btn_nm`, `btn_hlink`, `revised`, `prog_type`) VALUES
(1, 'UG/PG - R18/R19/R20/R21', 'SUMMER SEMESTER - 2024', '2023-12-31 18:30:00', 'Download', 'https://vignan.ac.in/2023pdf/SUMMER%20SEMESTER%20%E2%80%93%202024%20-%20TIME%20TABLE.pdf', 0, 'ug'),
(5, 'M.Sc-I', 'Regular (R22) Summative Assessment', '2024-04-30 18:30:00', 'Download', 'https://vignan.ac.in/2023pdf/Revised%20I%20M.Sc.%20II%20Semester%20(R22)%20Regular%20Summative%20Assessment%20May%E2%80%932024.pdf', 1, 'pg'),
(6, 'M.Tech-I', 'Regular (R22) Summative Assessment', '2024-04-30 18:30:00', 'Download', 'https://vignan.ac.in/2023pdf/Revised%20I%20M.Tech.%20II%20Semester%20Regular%20(R22)%20Summative%20Assessment%20May%20%E2%80%932024.pdf', 1, 'pg'),
(7, 'Pre-Ph.D', '(R18) End Examination', '2024-01-31 18:30:00', 'Download', 'https://vignan.ac.in/2023pdf/Revised%20Pre-Ph.D_Regular%20(R18)%20End%20Examination%20Time%20Table%20February%202024.pdf', 1, 'phd'),
(15, 'UG/PG - R22', 'SUMMER SEMESTER - 2024', '2023-12-31 18:30:00', 'Download', 'https://vignan.ac.in/2023pdf/SUMMER%20SEMESTER%20%E2%80%93%202024%20-%20TIME%20TABLE%20for%20R22.pdf', 0, 'ug'),
(16, 'B.Tech-I Agricultural', 'Supplementary (R19) Examination', '2024-05-31 18:30:00', 'Download', 'https://vignan.ac.in/2023pdf/I%20B.Tech%20II%20Semester%20Agricultural%20Engineering%20Supplementary%20(R19)%20Examination%20Time%20Table%20June%E2%80%932024.pdf', 0, 'ug'),
(17, 'B.Tech-I Agricultural', 'Regular (R22) Summative Assessment', '2024-05-31 18:30:00', 'Download', 'https://vignan.ac.in/2023pdf/I%20B.Tech.%20II%20Semester%20(R22)%20Regular%20Summative%20Assessment%20June%20%E2%80%93%202024.pdf', 0, 'ug'),
(18, 'B.Pharmacy-I', 'Regular (R18) Summative Examination', '2024-05-31 18:30:00', 'Download', 'https://vignan.ac.in/pdf/I%20B.%20Pharmacy%20II%20Semester%20Regular%20(R18)%20Examination%20Time%20Table%20June%E2%80%932024.pdf', 0, 'ug'),
(19, 'B.Tech-I Agricultural', 'Regular (R22) Summative Assessment', '2024-05-31 18:30:00', 'Download', 'https://vignan.ac.in/pdf/I%20B.Tech.%20II%20Semester%20Agricultural%20Engineering%20(R22)%20Regular%20Summative%20Assessment%20June%20%E2%80%93%202024.pdf', 0, 'ug'),
(20, 'B.Sc-I', 'Regular (R22) Summative Assessment', '2024-04-30 18:30:00', 'Download', 'https://vignan.ac.in/2023pdf/Revised%20BSc%20I%20Year%20II%20Semester%20(R22)%20Regular%20Summative%20Assessment%20May%E2%80%932024.pdf', 1, 'ug'),
(21, 'B.Tech-I', 'Regular (R22) Summative Assessment', '2024-04-30 18:30:00', 'Download', 'https://vignan.ac.in/2023pdf/Revised%20I%20B.Tech.%20II%20Semester%20(R22)%20Regular%20Summative%20Assessment%20May%20%E2%80%93%202024.pdf', 1, 'ug'),
(22, 'BBA-I', 'Regular (R22) Summative Assessment', '2024-04-30 18:30:00', 'Download', 'https://vignan.ac.in/2023pdf/Revised%20I%20BBA%20II%20Semester%20(R22)%20Regular%20Summative%20Assessment%20May%E2%80%932024.pdf', 1, 'ug'),
(23, 'MBA-I', 'Regular (R22) Summative Assessment', '2024-04-30 18:30:00', 'Download', 'https://vignan.ac.in/2023pdf/Revised%20I%20MBA%20II%20Semester%20(R22)%20Regular%20Summative%20Assessment%20May%E2%80%932024.pdf', 1, 'pg'),
(24, 'MCA-I', 'Regular (R22) Summative Assessment', '2024-04-30 18:30:00', 'Download', 'https://vignan.ac.in/2023pdf/Revised%20I%20MCA%20II%20Semester%20(R22)%20Regular%20Summative%20Assessment%20May%E2%80%932024.pdf', 1, 'pg'),
(25, 'MBA-I', 'Regular (R22) Summative Assessment', '2024-04-30 18:30:00', 'Download', 'https://vignan.ac.in/2023pdf/Revised%20II%20MBA%20II%20Semester%20(R22)%20Regular%20Summative%20Assessment%20May%E2%80%932024.pdf', 1, 'pg'),
(26, 'MBA-I', 'Supplementary (R21) Examiantion', '2024-04-30 18:30:00', 'Download', 'https://vignan.ac.in/2023pdf/Revised%20I%20MBA%20II%20Semester%20(R21)%20Supplementary%20Examiantion%20Time%20Table%20May-2024.pdf', 1, 'pg'),
(27, 'Pre-Ph.D', 'End (R18) Semester Examination', '2022-09-30 18:30:00', 'Download', 'https://vignan.ac.in/pdf/Pre-Ph.D%20(R18)%20Regulation%20End%20Semester%20Examination%20October%202022.pdf', 1, 'phd'),
(28, 'Pre-Ph.D', 'End (R18) Semester Examination', '2021-08-31 18:30:00', 'Download', 'https://vignan.ac.in/pdf/Pre-Ph.D_Regular_R18_End%20Semester_Examination_September%202021.pdf', 1, 'phd');

-- --------------------------------------------------------

--
-- Table structure for table `uninames`
--

CREATE TABLE `uninames` (
  `id` int(11) NOT NULL,
  `uni_nm` varchar(100) DEFAULT NULL,
  `hlink` varchar(400) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `modal_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uninames`
--

INSERT INTO `uninames` (`id`, `uni_nm`, `hlink`, `img`, `dept`, `modal_id`) VALUES
(1, 'Montclair State University Newjersey USA', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjWlZzB3OuGAxUW5DQHHUylD2IQFnoECBAQAQ&url=https%3A%2F%2Fwww.montclair.edu%2F&usg=AOvVaw3DmNZI1TCFvjBFGAvIUmg3&opi=89978449', 'dep_assets/images/stanford.webp', 'FT', '#higedu'),
(2, 'Royal Melbourne Institute of Technology', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiVqtWA3euGAxXIxTgGHZIsBMQQFnoECEwQAQ&url=https%3A%2F%2Fwww.rmit.edu.au%2F&usg=AOvVaw3amaaiuD-3NWrX8qC3p9Wi&opi=89978449', 'dep_assets/images/stanford.webp', 'FT', '#higedu'),
(3, 'Texas Tech University', 'https://www.ttu.edu/', 'dep_assets/images/stanford.webp', 'FT', '#higedu'),
(4, 'IIT, Guwahati ', 'https://www.bing.com/ck/a?!&&p=a1f308af26c8bbb7JmltdHM9MTcxODg0MTYwMCZpZ3VpZD0yYzdiYmRhNC1jNDRmLTY2YjItMWQ5Yy1hZTU5YzVmZDY3YmQmaW5zaWQ9NTIyNA&ptn=3&ver=2&hsh=3&fclid=2c7bbda4-c44f-66b2-1d9c-ae59c5fd67bd&psq=%e2%80%a2+IIT%2c+Guwahati&u=a1aHR0cHM6Ly93d3cuaWl0Zy5hYy5pbi8&ntb=1', 'dep_assets/images/stanford.webp', 'FT', '#higedu'),
(5, 'Gulu university', 'https://www.bing.com/ck/a?!&&p=0e834de46b7997e4JmltdHM9MTcxODg0MTYwMCZpZ3VpZD0yYzdiYmRhNC1jNDRmLTY2YjItMWQ5Yy1hZTU5YzVmZDY3YmQmaW5zaWQ9NTI0NA&ptn=3&ver=2&hsh=3&fclid=2c7bbda4-c44f-66b2-1d9c-ae59c5fd67bd&psq=Gilu+univeristy&u=a1aHR0cHM6Ly9ndS5hYy51Zy8&ntb=1', 'dep_assets/images/stanford.webp', 'FT', '#higedu'),
(6, 'CFTRI', 'https://www.bing.com/ck/a?!&&p=77bf310a38055b3dJmltdHM9MTcxODkyODAwMCZpZ3VpZD0yYzdiYmRhNC1jNDRmLTY2YjItMWQ5Yy1hZTU5YzVmZDY3YmQmaW5zaWQ9NTIxNw&ptn=3&ver=2&hsh=3&fclid=2c7bbda4-c44f-66b2-1d9c-ae59c5fd67bd&psq=%e2%80%a2%09CFTRI&u=a1aHR0cHM6Ly93d3cuY2Z0cmkucmVzLmluLw&ntb=1', 'dep_assets/images/stanford.webp', 'FT', '#acad'),
(7, 'DFRL', 'https://www.bing.com/ck/a?!&&p=c59cccdaf8d10cf5JmltdHM9MTcxODkyODAwMCZpZ3VpZD0yYzdiYmRhNC1jNDRmLTY2YjItMWQ5Yy1hZTU5YzVmZDY3YmQmaW5zaWQ9NTIxMw&ptn=3&ver=2&hsh=3&fclid=2c7bbda4-c44f-66b2-1d9c-ae59c5fd67bd&psq=%e2%80%a2%09DFRL&u=a1aHR0cHM6Ly9kcmRvLmdvdi5pbi9kcmRvL2xhYnMtYW5kLWVzdGFibGlzaG1lbnRzL2RlZmVu', 'dep_assets/images/stanford.webp', 'FT', '#acad'),
(8, 'IIMR', 'https://www.bing.com/ck/a?!&&p=1374c5c4591aecb8JmltdHM9MTcxODkyODAwMCZpZ3VpZD0yYzdiYmRhNC1jNDRmLTY2YjItMWQ5Yy1hZTU5YzVmZDY3YmQmaW5zaWQ9NTIyNQ&ptn=3&ver=2&hsh=3&fclid=2c7bbda4-c44f-66b2-1d9c-ae59c5fd67bd&psq=%e2%80%a2%09IIMR&u=a1aHR0cHM6Ly93d3cubWlsbGV0cy5yZXMuaW4v&ntb=1', 'dep_assets/images/stanford.webp', 'FT', '#acad'),
(9, 'NIT Rourkela', 'https://www.bing.com/ck/a?!&&p=d1d6339c5c7b30e5JmltdHM9MTcxODkyODAwMCZpZ3VpZD0yYzdiYmRhNC1jNDRmLTY2YjItMWQ5Yy1hZTU5YzVmZDY3YmQmaW5zaWQ9NTIyNg&ptn=3&ver=2&hsh=3&fclid=2c7bbda4-c44f-66b2-1d9c-ae59c5fd67bd&psq=%e2%80%a2%09NIT+Rourkela&u=a1aHR0cHM6Ly9uaXRya2wuYWMuaW4v&ntb=1 ', 'dep_assets/images/stanford.webp', 'FT', '#acad'),
(10, 'University of Roehampton', 'https://www.bing.com/ck/a?!&&p=163169e952c9057dJmltdHM9MTcxODg0MTYwMCZpZ3VpZD0yYzdiYmRhNC1jNDRmLTY2YjItMWQ5Yy1hZTU5YzVmZDY3YmQmaW5zaWQ9NTI0NA&ptn=3&ver=2&hsh=3&fclid=2c7bbda4-c44f-66b2-1d9c-ae59c5fd67bd&psq=University+of+roehampton&u=a1aHR0cHM6Ly93d3cucm9laGFtcHRvbi5hYy51ay8&ntb=1', 'dep_assets/images/stanford.webp', 'FT', '#higedu'),
(11, 'NIFTEM, Haryana', 'https://www.bing.com/ck/a?!&&p=d45c4d5e2905c453JmltdHM9MTcxODg0MTYwMCZpZ3VpZD0yYzdiYmRhNC1jNDRmLTY2YjItMWQ5Yy1hZTU5YzVmZDY3YmQmaW5zaWQ9NTIyOA&ptn=3&ver=2&hsh=3&fclid=2c7bbda4-c44f-66b2-1d9c-ae59c5fd67bd&psq=NIFTEM%2c+Harayana&u=a1aHR0cHM6Ly9uaWZ0ZW0uYWMuaW4vbmV3c2l0ZS8&ntb=1', 'dep_assets/images/stanford.webp', 'FT', '#higedu'),
(12, 'University of Central Oklahoma', 'https://www.bing.com/search?q=university+of+central+oklahoma&filters=dtbk:%22MCFvdmVydmlldyFvdmVydmlldyE4YWVmM2E5NC00NzFmLTU5NTktYTUzMC1kZDZlYmY0ZjY5ZTY%3d%22+sid:%228aef3a94-471f-5959-a530-dd6ebf4f69e6%22+tphint:%22f%22&FORM=DEPNAV', 'dep_assets/images/stanford.webp', 'FT', '#higedu'),
(13, 'University of Wisconsin stout', 'https://www.bing.com/ck/a?!&&p=99d920abbbb9ed62JmltdHM9MTcxODg0MTYwMCZpZ3VpZD0yYzdiYmRhNC1jNDRmLTY2YjItMWQ5Yy1hZTU5YzVmZDY3YmQmaW5zaWQ9NTIzMQ&ptn=3&ver=2&hsh=3&fclid=2c7bbda4-c44f-66b2-1d9c-ae59c5fd67bd&psq=University+of+Wisconsin+stout&u=a1aHR0cHM6Ly93d3cudXdzdG91dC5lZHUv&ntb=1', 'dep_assets/images/stanford.webp', 'FT', '#higedu');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `vtype` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `descr`, `link`, `vtype`) VALUES
('nad_sec5_v1', 'How to create an ABC account', NULL, 'assets/video/vi1.mp4', 'nad_sec5'),
('nad_sec5_v2', 'Benefits of ABC', NULL, 'assets/video/vi1.mp4', 'nad_sec5'),
('nad_sec5_v3', 'How Credit transfer works', NULL, 'assets/video/vi1.mp4', 'nad_sec5'),
('nad_sec5_v4', 'ABC for parent’s understanding', NULL, 'assets/video/vi1.mp4', 'nad_sec5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accreditation`
--
ALTER TABLE `accreditation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificatenames`
--
ALTER TABLE `certificatenames`
  ADD UNIQUE KEY `ind` (`ind`);

--
-- Indexes for table `circulars`
--
ALTER TABLE `circulars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conferences`
--
ALTER TABLE `conferences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conf_reg`
--
ALTER TABLE `conf_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conf_schedu`
--
ALTER TABLE `conf_schedu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `coordinators`
--
ALTER TABLE `coordinators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_data`
--
ALTER TABLE `dept_data`
  ADD PRIMARY KEY (`sec_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `importantdates`
--
ALTER TABLE `importantdates`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `importantdt`
--
ALTER TABLE `importantdt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modals`
--
ALTER TABLE `modals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `naac`
--
ALTER TABLE `naac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `naac_link`
--
ALTER TABLE `naac_link`
  ADD PRIMARY KEY (`lid`),
  ADD KEY `naac` (`id`);

--
-- Indexes for table `naac_tg`
--
ALTER TABLE `naac_tg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `patents`
--
ALTER TABLE `patents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researchfacilities`
--
ALTER TABLE `researchfacilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researchs`
--
ALTER TABLE `researchs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `timetables`
--
ALTER TABLE `timetables`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `uninames`
--
ALTER TABLE `uninames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conf_reg`
--
ALTER TABLE `conf_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `conf_schedu`
--
ALTER TABLE `conf_schedu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `coordinators`
--
ALTER TABLE `coordinators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dept_data`
--
ALTER TABLE `dept_data`
  MODIFY `sec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `importantdt`
--
ALTER TABLE `importantdt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `modals`
--
ALTER TABLE `modals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `naac`
--
ALTER TABLE `naac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `naac_link`
--
ALTER TABLE `naac_link`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `naac_tg`
--
ALTER TABLE `naac_tg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `patents`
--
ALTER TABLE `patents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `researchfacilities`
--
ALTER TABLE `researchfacilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `uninames`
--
ALTER TABLE `uninames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
