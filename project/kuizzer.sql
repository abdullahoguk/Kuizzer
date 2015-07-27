-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2015 at 02:44 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kuizzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE IF NOT EXISTS `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 1, 'PHP Hypertext Preprocessor'),
(2, 1, 0, 'Private Hompage'),
(3, 1, 0, 'Personal Hompage'),
(4, 1, 0, 'Personal Hypertext Preprocessor'),
(5, 2, 0, 'Document.Write("Hello World");'),
(6, 2, 1, 'echo "Hello World";'),
(7, 2, 0, '"Hello World";'),
(8, 3, 0, ';'),
(9, 3, 0, 'New line'),
(10, 3, 0, '.'),
(11, 3, 1, '"</php>"'),
(12, 4, 0, 'Request.Form;'),
(13, 4, 1, '$_GET[];'),
(14, 4, 0, 'Request.QueryString;'),
(15, 5, 1, 'function myFunction()'),
(16, 5, 0, 'create myFunction()'),
(17, 5, 0, 'new_function myFunction()'),
(18, 6, 1, '$my-Var'),
(19, 6, 0, '$my_Var'),
(20, 6, 0, '$myVar');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'What is PHP stand for?'),
(2, 'How do you write "Hello World" in PHP'),
(3, 'What is the correct way to end a PHP statement?'),
(4, 'How do you get information from a form that is submitted using the "get" method?'),
(5, 'What is the correct way to create a function in PHP?'),
(6, 'Which one of these variables has an illegal name?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
