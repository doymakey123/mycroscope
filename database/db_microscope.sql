-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2024 at 06:43 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_microscope`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE `tbl_answer` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `correct_answer` int(11) NOT NULL,
  `choices` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`id`, `question_number`, `correct_answer`, `choices`) VALUES
(1, 1, 0, 'To blur the image'),
(2, 1, 0, 'To measure the height of the object'),
(3, 1, 0, 'To smaller the image'),
(4, 1, 1, 'To enlarge the image'),
(5, 2, 1, 'To study small objects'),
(6, 2, 0, 'To measure boundaries'),
(7, 2, 0, 'To increase the size of some cell parts'),
(8, 2, 0, 'To hide cell parts'),
(9, 3, 0, 'y'),
(10, 3, 0, 'm'),
(11, 3, 0, '*'),
(12, 3, 1, 'x'),
(13, 4, 1, 'A beam of electron'),
(14, 4, 0, 'A beam of alpha rays'),
(15, 4, 0, 'A beam of gamma rays'),
(16, 4, 0, 'A beam of radio rays'),
(17, 5, 0, 'Magnification'),
(18, 5, 1, 'Resolution'),
(19, 5, 0, 'Focus'),
(20, 5, 0, 'Micrographs'),
(21, 6, 0, 'It has a wider field of view'),
(22, 6, 0, 'There is less chance of breaking the slide'),
(23, 6, 1, 'It has a narrower field of view'),
(24, 6, 0, 'It increases the size of small cell'),
(25, 7, 0, 'Nosepiece'),
(26, 7, 0, 'Base'),
(27, 7, 1, 'Arm'),
(28, 7, 0, 'Objective lenses'),
(29, 8, 0, 'Binocular head'),
(30, 8, 1, 'Eyepiece (ocular lens)'),
(31, 8, 0, 'Specimen or slide'),
(32, 8, 0, 'Stage or platform'),
(33, 9, 0, 'Abbe condenser'),
(34, 9, 0, 'Mirror'),
(35, 9, 1, 'Stage clips'),
(36, 9, 0, 'Specimen or slide'),
(37, 10, 0, 'Specimen or slide'),
(38, 10, 0, 'Stage or platform'),
(39, 10, 0, 'Objective lenses'),
(40, 10, 0, 'Stage clips or mechanical stage'),
(41, 11, 0, '250x'),
(42, 11, 0, '200x'),
(43, 11, 0, '350x'),
(44, 11, 1, '300x'),
(45, 12, 1, 'Micrometers'),
(46, 12, 0, 'Macrometers'),
(47, 12, 0, 'Nanometers'),
(48, 12, 0, 'Nanimeters'),
(49, 13, 1, '1590'),
(50, 13, 0, '1593'),
(51, 13, 0, '1595'),
(52, 13, 0, '1599'),
(53, 14, 0, 'Adjustable stomach'),
(54, 14, 1, 'Adjustable diaphragm'),
(55, 14, 0, 'Adjustable heart'),
(56, 14, 0, 'Adjustable lung'),
(57, 15, 0, 'Eyepiece'),
(58, 15, 1, 'Arm'),
(59, 15, 0, 'Stage'),
(60, 15, 0, 'Slide');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `name`, `email`, `message`, `date_created`) VALUES
(1, 'junmark', 'jun@gmail.com', 'sample', '2022-04-03 14:00:27'),
(2, 'Junmark M Timon', 'doymakey@gmail.com', 'sa', '2022-04-03 14:01:37'),
(3, 'Junmark M Timon', 'junmarktimon@yahoo.com', 'sa', '2022-04-03 14:02:36'),
(4, 'Sagrado Company', 'junmarktimon@yahoo.com', 'assdssf', '2022-04-03 14:08:16'),
(5, 'Sagrado Company', 'junmarktimon@yahoo.com', 'SAS', '2022-04-03 14:14:22'),
(6, 'junmark timon', 'doymakey@gmail.com', 'ssds', '2022-04-03 14:56:17'),
(7, 'Jhon Doe', 'Doe@gmail.com', 'Sample message', '2022-04-06 03:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE `tbl_question` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`id`, `question`, `date_created`) VALUES
(1, 'What is the purpose of a microscope?', '2022-03-10 09:26:30'),
(2, 'What is a microscope used for?', '2022-03-10 09:26:30'),
(3, 'Which symbol is used to express the magnifying power of a microscope?', '2022-03-10 09:27:04'),
(4, 'What is used in electron microscopes for forming the image?', '2022-03-10 09:27:04'),
(5, 'Which term is used to describe a microscope’s ability to show detail?', '2022-03-10 09:31:24'),
(6, 'Why should a low power objective lens be used first when viewing cells?', '2022-03-10 09:31:24'),
(7, 'It supports the microscope head and attaches it to the base.', '2022-03-10 09:32:04'),
(8, 'This is the part that is looked through at the top of the compound microscope.', '2022-03-10 09:32:04'),
(9, 'This clips on the stage that hold slide in place on the mechanical stage.', '2022-03-10 09:32:51'),
(10, 'The object used to hold the specimen in place along the slide covers for viewing.', '2022-03-10 09:32:51'),
(11, 'Up to what extent can single microscope lens magnify?', '2022-03-10 09:33:19'),
(12, 'In which unit the resolution of a microscope is expressed?', '2022-03-10 09:33:19'),
(13, 'In what year microscope is invented?', '2022-03-10 09:34:22'),
(14, 'It is a part of the microscope that allows you to adjust the amount of light that shines through?', '2022-03-10 09:34:22'),
(15, 'This is the recommended part of microscope to hold when transporting it.', '2022-03-10 09:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ques_choice`
--

CREATE TABLE `tbl_ques_choice` (
  `id` int(11) NOT NULL,
  `que_id` int(11) NOT NULL,
  `ques` varchar(255) NOT NULL,
  `choicea` varchar(255) NOT NULL,
  `choiceb` varchar(255) NOT NULL,
  `choicec` varchar(255) NOT NULL,
  `choiced` varchar(255) NOT NULL,
  `correct_ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ques_choice`
--

INSERT INTO `tbl_ques_choice` (`id`, `que_id`, `ques`, `choicea`, `choiceb`, `choicec`, `choiced`, `correct_ans`) VALUES
(1, 1, 'What is the purpose of a microscope?', 'To blur the image', 'To measure the height of the object', 'To smaller the image', 'To enlarge the image', 'To enlarge the image'),
(2, 2, 'What is a microscope used for?', 'To study small objects', 'To measure boundaries', 'To increase the size of some cell parts', 'To hide cell parts', 'To study small objects'),
(3, 3, 'Which symbol is used to express the magnifying power of a microscope?', 'y', 'm', '*', 'x', 'x'),
(4, 4, 'What is used in electron microscopes for forming the image?', 'A beam of electron', 'A beam of alpha rays', 'A beam of gamma rays', 'A beam of radio rays', 'A beam of electron'),
(5, 5, 'Which term is used to describe a microscope’s ability to show detail?', 'Magnification', 'Resolution', 'Focus', 'Micrographs', 'Resolution'),
(6, 6, 'Why should a low power objective lens be used first when viewing cells?', 'It has a wider field of view.', 'There is less chance of breaking the slide', 'It has a narrower field of view.', 'It increases the size of small cell.', 'It has a narrower field of view.'),
(7, 7, 'It supports the microscope head and attaches it to the base.', 'Nosepiece', 'Base', 'Arm', 'Objective lenses', 'Arm'),
(8, 8, 'This is the part that is looked through at the top of the compound microscope.', 'Binocular head', 'Eyepiece (ocular lens)', 'Specimen or slide', 'Stage or platform', 'Eyepiece (ocular lens)'),
(9, 9, 'This clips on the stage that hold slide in place on the mechanical stage.', 'Abbe condenser', 'Mirror', 'Stage clips', 'Specimen or slide', 'Stage clips'),
(10, 10, 'The object used to hold the specimen in place along the slide covers for viewing.', 'Specimen or slide', 'Stage or platform', 'Objective lenses', 'Stage clips or mechanical stage', 'Stage clips or mechanical stage');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', '0192023a7bbd73250516f069df18b500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_question`
--
ALTER TABLE `tbl_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ques_choice`
--
ALTER TABLE `tbl_ques_choice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_question`
--
ALTER TABLE `tbl_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_ques_choice`
--
ALTER TABLE `tbl_ques_choice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
