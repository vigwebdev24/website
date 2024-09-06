-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2024 at 12:58 PM
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
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `ques` varchar(500) DEFAULT NULL,
  `answer` varchar(2000) DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `page` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `ques`, `answer`, `dept`, `page`) VALUES
(1, 'How can I apply to the Computer Science program?', 'Applications are typically submitted online through the university\'s admission portal. Required documents usually include Class 12th mark sheets, entrance exam scores (such as JEE Main/Advanced for undergraduate programs), and personal statements. Specific details are available on the university\'s admissions page.', 'cse', 'depthome'),
(2, 'What are the admission requirements for the Computer Science department?', 'Admission requirements often include a strong background in mathematics and science. For undergraduate programs, a good score in entrance exams like JEE Main/Advanced or state-level CETs is essential. For postgraduate programs, exams like GATE may be required.', 'cse', 'depthome'),
(3, 'Are there any prerequisites for specific courses within the department?', 'Many advanced courses have prerequisites, including basic programming, data structures, and algorithms courses. The academic advisor or course catalog can provide details on specific prerequisites.', 'cse', 'depthome'),
(4, 'What are the key skills I should develop during my CSE course?', 'Important skills include programming languages (such as Python, Java, C++), data structures and algorithms, database management, software development, and soft skills like teamwork and communication. ', 'cse', 'depthome'),
(5, 'Are there opportunities for entrepreneurship within the CSE department?', 'The university has incubation centers and entrepreneurship cells that support students in starting their ventures. They offer mentorship, funding opportunities, and workshops to nurture innovative ideas.', 'cse', 'depthome'),
(6, 'How do I become a member of the Library', 'Vignan\'s University faculty, students, and staff are bona-fide members and no other formality is required. As soon as you get your ID card, please visit the library once to activate your membership.', NULL, 'library'),
(7, 'How do I search books', '1. Go to library home page. There is a search box with caption \"Search Catalogue (OPAC)\". Enter a word or words from title or subject or author of a book you like to search. Press enter. It will list all books matching the words you input.</br></br>\n2. You can also click on \"Advanced Search\" just below the search box. It will take you to another page \"Web OPAC Page\". It provides Advanced Search option.</br></br>\n3. In Simple Search, you can search books by Author, Title (any word in the title, subtitle ) , Keyword or Publisher.', NULL, 'library'),
(8, 'What is OPAC', 'OPAC stands for Online Public Access Catalogue. This is a database of all books, theses,Journals back volumes, CD\'s & DVD\'s etc. available in the library. It enables speedy searching of a particular book, books on a given subject, and/or a book by an author.', NULL, 'library'),
(9, 'How do I Know what e-books are available / accessible to VU users', 'Go to library online Resource page. Click E-Books.', NULL, 'library'),
(10, 'How do I Borrow books', 'Go to the library, pick up the books you like to borrow, carry these books to the Circulation Counter. Show your ID Card. The library staff will assist you in getting these books issued to you.', NULL, 'library'),
(11, 'What are the Issue / Return Timings of the library', '9.00 AM - 6.00 PM (9 hrs) on all working days', NULL, 'library'),
(12, 'How do I renew / re - issue books I have already barrowed', 'Off-line - Bring all books back to the library and get them one time renewed at the Circulation Counter.', NULL, 'library'),
(13, 'How many books can I borrow', 'Faculty can borrow 10 books, UG Students (I,II,III Years) eligible for 3 books ,IVth Year Students eligible for 4 books and PG Students can borrow 5 books and Scholars and PDFs can borrow 5 books. More details can be seen at \"Circulation Counter\" .', NULL, 'library'),
(14, 'Is there a fine for late return (Over-due) of books', 'Yes, a member is required to pay late fee, as per the late fee structure, if he/she fails to return the books within prescribed period of time. Members can consult the library staff to know their overdue charges at Circulation Counter.', NULL, 'library'),
(15, 'How / where do I pay Library dues', 'Library dues (late fees/cost of lost books etc) can be paid at Circulation Counter in cash on the Ground floor of the Library.', NULL, 'library'),
(16, 'How do I borrow the reference books', 'Reference books are issued only to the faculty, Scholars and students for overnight or before the holidays at the time of closing the library can borrow the book (s).', NULL, 'library'),
(17, 'How do I refer to Dissertations/ theses & Journals Back Volumes', 'Vignan\'s University Faculty, students and staff can refer to dissertations, theses, Journals Back Volumes which are kept in Reference Section (Ground floor) .', NULL, 'library'),
(18, 'How do I replace a lost book (What am I required to do for a lost book)', 'The latest procurement cost will be intimated to the member and he/she has to pay the double cost of book or the member can buy the same New Book and it can be Replaced.', NULL, 'library'),
(19, 'How do I recommend a book for purchase in the Library', 'Faculty and Students can recommend books (aSuggestion book is available in Circulation Counter) for purchase by the library or through the LAC (Library Advisory Committee)', NULL, 'library'),
(20, 'Are E-RESOURCES accessible to all the users ', 'E-Resources are accessible only to Vignan\'s University students and faculty on the campus (IP Based) . However, others can request copies of articles from the E-Resources and the library will download and supply them (Inter Library loan members) to the users on personal request.', NULL, 'library'),
(21, 'Can the Library borrow documents from other libraries', 'Yes, the Library can arrange books and copies of articles on inter-library loan from other libraries.', NULL, 'library');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
