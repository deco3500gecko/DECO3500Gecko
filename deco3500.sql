-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 04:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deco3500`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` varchar(20) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `class` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `student_id`, `student_name`, `class`, `date`) VALUES
('attendance1012655104', '9', 'Maryellen Li', '1-1', '2020-10-29'),
('attendance108221818', '13', 'Alejandra Allison', '1-1', '2020-10-26'),
('attendance1135893353', '7', 'Verna Moody', '1-1', '2020-10-26'),
('attendance1167731073', '7', 'Verna Moody', '1-1', '2020-10-27'),
('attendance1215931573', '6', 'Sylvester Bradshaw', '1-1', '2020-10-27'),
('attendance1236946476', '4', 'Beulah Jackson', '1-1', '2020-10-26'),
('attendance1260370783', '3', 'Cindy Holt', '1-1', '2020-10-29'),
('attendance1277000110', '11', 'Carmen White', '1-1', '2020-10-26'),
('attendance1401063873', '3', 'Cindy Holt', '1-1', '2020-10-28'),
('attendance1493094296', '12', 'Thaddeus Flynn', '1-1', '2020-10-26'),
('attendance1497271909', '2', 'Penelope Peterson', '1-1', '2020-10-29'),
('attendance1519449252', '14', 'Millard Sims', '1-1', '2020-10-26'),
('attendance1551017931', '9', 'Maryellen Li', '1-1', '2020-10-26'),
('attendance1602732591', '2', 'Penelope Peterson', '1-1', '2020-10-27'),
('attendance1661315401', '1', 'Sam Charles', '1-1', '2020-10-29'),
('attendance1691252605', '10', 'Abraham Bright', '1-1', '2020-10-28'),
('attendance1695921235', '4', 'Beulah Jackson', '1-1', '2020-10-28'),
('attendance1704389187', '6', 'Sylvester Bradshaw', '1-1', '2020-10-28'),
('attendance1720363795', '10', 'Abraham Bright', '1-1', '2020-10-29'),
('attendance1743450023', '1', 'Sam Charles', '1-1', '2020-10-27'),
('attendance1881820470', '2', 'Penelope Peterson', '1-1', '2020-10-28'),
('attendance1883563588', '3', 'Cindy Holt', '1-1', '2020-10-27'),
('attendance1964097800', '5', 'Trisha Vaughn', '1-1', '2020-10-28'),
('attendance2030230335', '10', 'Abraham Bright', '1-1', '2020-10-27'),
('attendance2031026410', '4', 'Beulah Jackson', '1-1', '2020-10-29'),
('attendance2053182576', '13', 'Alejandra Allison', '1-1', '2020-10-27'),
('attendance2133409703', '7', 'Verna Moody', '1-1', '2020-10-29'),
('attendance252264340', '1', 'Sam Charles', '1-1', '2020-10-28'),
('attendance252980436', '3', 'Cindy Holt', '1-1', '2020-10-26'),
('attendance262831836', '13', 'Alejandra Allison', '1-1', '2020-10-29'),
('attendance29403428', '15', 'Johnny Houston', '1-1', '2020-10-26'),
('attendance361974353', '6', 'Sylvester Bradshaw', '1-1', '2020-10-26'),
('attendance439175963', '4', 'Beulah Jackson', '1-1', '2020-10-27'),
('attendance486469080', '9', 'Maryellen Li', '1-1', '2020-10-27'),
('attendance493051437', '5', 'Trisha Vaughn', '1-1', '2020-10-27'),
('attendance576096942', '5', 'Trisha Vaughn', '1-1', '2020-10-29'),
('attendance645447741', '6', 'Sylvester Bradshaw', '1-1', '2020-10-29'),
('attendance686397432', '16', 'Kellie Ferrell', '1-1', '2020-10-26'),
('attendance779016382', '8', 'Jewell Hickman', '1-1', '2020-10-26'),
('attendance864067849', '10', 'Abraham Bright', '1-1', '2020-10-26'),
('attendance873150717', '2', 'Penelope Peterson', '1-1', '2020-10-26'),
('attendance879652570', '1', 'Sam Charles', '1-1', '2020-10-26'),
('attendance92726529', '13', 'Alejandra Allison', '1-1', '2020-10-28'),
('attendance942399617', '9', 'Maryellen Li', '1-1', '2020-10-28'),
('attendance982651122', '5', 'Trisha Vaughn', '1-1', '2020-10-26'),
('attendance988780199', '7', 'Verna Moody', '1-1', '2020-10-28');

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE `reward` (
  `reward_id` varchar(20) NOT NULL,
  `reward_name` varchar(50) NOT NULL,
  `reward_description` varchar(100) NOT NULL,
  `redeemed` tinyint(1) NOT NULL,
  `class` varchar(10) NOT NULL,
  `redeemed_by` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reward`
--

INSERT INTO `reward` (`reward_id`, `reward_name`, `reward_description`, `redeemed`, `class`, `redeemed_by`) VALUES
('reward1', 'Classroom Party', 'End of term classroom party where we\'ll eat snacks and play party games.', 0, '1-1', ''),
('reward2', 'Free Time', 'Do anything you want within the classroom in the given free time', 0, '1-1', ''),
('reward3', 'Subject Choice for the Day', 'Choose a subject for the class to do for one period', 0, '1-1', ''),
('reward4', 'Classroom Bingo', 'Play Bingo with the Class', 1, '1-1', ''),
('reward5', 'Class Excursion', 'Go on a class excursion at the end of the term', 1, '1-1', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `points` int(11) NOT NULL,
  `class` varchar(5) NOT NULL,
  `team` varchar(20) NOT NULL,
  `days_attended` int(11) NOT NULL DEFAULT 0,
  `dietary` varchar(50) NOT NULL DEFAULT 'none',
  `extra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `points`, `class`, `team`, `days_attended`, `dietary`, `extra`) VALUES
(1, 'Sam Charles', 15, '1-1', 'Red', 4, 'none', 'test'),
(2, 'Penelope Peterson', 20, '1-1', 'Red', 4, 'none', ''),
(3, 'Cindy Holt', 20, '1-1', 'Red', 4, 'none', ''),
(4, 'Beulah Jackson', 20, '1-1', 'Red', 4, 'none', ''),
(5, 'Trisha Vaughn', 20, '1-1', 'Yellow', 4, 'none', ''),
(6, 'Sylvester Bradshaw', 20, '1-1', 'Yellow', 4, 'none', ''),
(7, 'Verna Moody', 20, '1-1', 'Yellow', 4, 'none', ''),
(8, 'Jewell Hickman', 5, '1-1', 'Yellow', 1, 'none', ''),
(9, 'Maryellen Li', 20, '1-1', 'Green', 4, 'none', ''),
(10, 'Abraham Bright', 20, '1-1', 'Green', 4, 'none', ''),
(11, 'Carmen White', 5, '1-1', 'Green', 2, 'none', ''),
(12, 'Thaddeus Flynn', 5, '1-1', 'Green', 1, 'none', ''),
(13, 'Alejandra Allison', 20, '1-1', 'Blue', 4, 'none', ''),
(14, 'Millard Sims', 5, '1-1', 'Blue', 2, 'none', ''),
(15, 'Johnny Houston', 5, '1-1', 'Blue', 1, 'none', ''),
(16, 'Kellie Ferrell', 5, '1-1', '', 1, 'none', ''),
(17, 'Lyndon Lamb', 0, '1-2', '', 0, 'none', ''),
(18, 'Leann Riggs', 0, '1-2', '', 0, 'none', ''),
(19, 'Leah Rhodes', 0, '1-2', '', 0, 'none', ''),
(20, 'Terence Vasquez', 0, '1-2', '', 0, 'none', ''),
(123, 'Branden Lee', 0, '1-2', '', 0, 'no dietary ', '');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` varchar(10) NOT NULL,
  `team_name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `points` int(11) NOT NULL,
  `wins` int(11) NOT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `description`, `points`, `wins`, `class`) VALUES
('team1', 'Red', 'edited', 75, 2, '1-1'),
('team2', 'Yellow', 'no description', 65, 1, '1-1'),
('team3', 'Green', 'no description', 50, 1, '1-1'),
('team4', 'Blue', 'no description', 30, 0, '1-1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `reward`
--
ALTER TABLE `reward`
  ADD PRIMARY KEY (`reward_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
