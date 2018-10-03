-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 11:37 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `stud_id` varchar(8) NOT NULL,
  `surname` varchar(15) NOT NULL,
  `othernames` varchar(25) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `DOB` date NOT NULL,
  `program` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `stu_stat` varchar(15) NOT NULL,
  `year_enrol` int(4) NOT NULL,
  `year_complete` int(4) NOT NULL,
  `hall_residence` varchar(15) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `guardian_name` varchar(40) NOT NULL,
  `guardian_contact` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`stud_id`, `surname`, `othernames`, `gender`, `DOB`, `program`, `course`, `stu_stat`, `year_enrol`, `year_complete`, `hall_residence`, `contact`, `email`, `nationality`, `guardian_name`, `guardian_contact`) VALUES
('10614888', 'Boahene', 'Kelvin', 'Male', '1998-07-30', 'BSc', 'Computer Science', 'regular', 2016, 2020, 'Akuafo', '0541604324', 'kelvin2691@gmail.com', 'Ghanaian', 'Isaac Amankwah', '0506789554'),
('10615757', 'Odame', 'Priscilla', 'Female', '1999-05-18', 'BSc', 'Computer Science', 'regular', 2016, 2020, 'Kwapong', '0241604324', 'priscillaodame5@gmail.com', 'Ghanaian', 'Samuel Odame', '024351367'),
('10615957', 'Lutterodt', 'Carol', 'Female', '1997-11-24', 'BSc', 'Food Science', 'regular', 2017, 2021, 'Kwapong', '0201654324', 'ccaromina9@gmail.com', 'Ghanaian', 'Veronica Addo', '0234567536'),
('10619757', 'Ansah', 'Portia', 'Female', '1998-04-19', 'BSc', 'Computer Science', 'regular', 2016, 2020, 'Kwapong', '0241604442', 'portiaansah15@gmail.com', 'Ghanaian', 'Joseph Ansah', '0246176087'),
('10619809', 'Frimpong', 'Kojo Nimo', 'Male', '1997-11-10', 'BA', 'Political Science', 'regular', 2016, 2020, 'Nelson', '0241604304', 'nimokf905@gmail.com', 'Ghanaian', 'Mr Frimpong', '0243789097'),
('10623457', 'Isichei', 'Phelim', 'Male', '1997-01-18', 'BSc', 'Computer Engineering', 'Fee Paying', 2016, 2020, 'Sarbah', '023456574', 'ischiphelim665@gmail.com', 'Nigerian', 'Isichei David', '0809909768'),
('10637898', 'Dzansi', 'Makafui', 'Female', '1998-11-03', 'BA', 'Languages', 'Distance', 2018, 2022, 'Sey', '0241604980', 'mackay675@gmail.com', 'Ghanaian', 'Emmanuel Dzansi', '024357865');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`stud_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
