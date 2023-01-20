-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 08:32 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_no` int(200) NOT NULL,
  `question` varchar(999) NOT NULL,
  `img` longtext DEFAULT NULL,
  `opt1` varchar(999) NOT NULL,
  `opt2` varchar(999) NOT NULL,
  `opt3` varchar(999) NOT NULL,
  `opt4` varchar(999) NOT NULL,
  `answer` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_no`, `question`, `img`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`) VALUES
(1, 'HTML stands for -', 'uploads/', 'HighText Machine Language', 'HyperText and links Markup Language', 'HyperText Markup Language', 'None of these', 'HyperText Markup Language'),
(2, 'नेताजी की मूर्ति पर सरकंडे का चश्मा किसने लगाया होगा?', 'uploads/', 'पानवाले ने', 'लेखक ने', 'हवलदार ने', 'किसी बच्चे ने', 'किसी बच्चे ने'),
(3, 'चश्मेवाले के प्रति पानवाले के मन में कैसी भावना थी?', 'uploads/', 'घृणा', 'उत्साह', 'उपेक्षा', 'इनमें से कोई नहीं', 'उपेक्षा');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
