-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 06, 2017 at 10:11 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `personalty_classification`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE IF NOT EXISTS `alogin` (
  `username` varchar(555) NOT NULL,
  `passwordd` varchar(555) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`username`, `passwordd`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cust_reg`
--

CREATE TABLE IF NOT EXISTS `cust_reg` (
  `cuto_id` varchar(111) NOT NULL,
  `cus_name` varchar(444) NOT NULL,
  `cus_mobile` varchar(444) NOT NULL,
  `cus_email` varchar(444) NOT NULL,
  `fpassword` varchar(444) NOT NULL,
  `fdate` varchar(444) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_reg`
--

INSERT INTO `cust_reg` (`cuto_id`, `cus_name`, `cus_mobile`, `cus_email`, `fpassword`, `fdate`) VALUES
('e001', 'Ravi Jangid', '9887063789', 'ravi@gmail.com', '1234', '17-05-04'),
('e002', 'Shubhanshu', '9887063789', 'pacejaipur@gmail.com', '1234', '17-05-04'),
('veena1', 'veena', '9828041224', 'veena@gmail.com', '123123', '17-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `cus_id` varchar(555) NOT NULL,
  `feed` varchar(555) NOT NULL,
  `fdate` varchar(555) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`cus_id`, `feed`, `fdate`) VALUES
('e001', 'Very nice question\r\n', '17-05-04'),
('e001', 'very Nice ..........................Question Set', '17-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `question_add`
--

CREATE TABLE IF NOT EXISTS `question_add` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `question_add` varchar(444) NOT NULL,
  `marks_yes` varchar(444) NOT NULL,
  `marks_no` varchar(444) NOT NULL,
  `marks_nautral` varchar(444) NOT NULL,
  `ques_cat` varchar(444) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `question_add`
--

INSERT INTO `question_add` (`sno`, `question_add`, `marks_yes`, `marks_no`, `marks_nautral`, `ques_cat`) VALUES
(1, 'You are almost never late for your appointments ?', '2', '1', '0', 'Category1'),
(2, 'You like to be engaged in an active and fast-paced job ?', '5', '8', '2', 'Category2'),
(3, 'You enjoy having a wide circle of acquaintances ?', '9', '8', '7', 'Category3'),
(4, 'You feel involved when watching TV soaps ?', '1', '2', '3', 'Category4'),
(5, 'You are usually the first to react to a sudden event: the telephone ringing or unexpected question ?', '4', '3', '8', 'Category4'),
(6, 'You feel that the world is founded on compassion ?', '5', '4', '8', 'Category3');

-- --------------------------------------------------------

--
-- Table structure for table `question_add_based`
--

CREATE TABLE IF NOT EXISTS `question_add_based` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `based_question` varchar(444) NOT NULL,
  ` marks_yes` varchar(444) NOT NULL,
  ` marks_no` varchar(444) NOT NULL,
  ` marks_nautral` varchar(444) NOT NULL,
  ` ques_cat` varchar(444) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `question_add_based`
--

INSERT INTO `question_add_based` (`sno`, `based_question`, ` marks_yes`, ` marks_no`, ` marks_nautral`, ` ques_cat`) VALUES
(1, 'You are almost never late for your appointments ?', '2', '1', '0', 'Type A'),
(2, 'You like to be engaged in an active and fast-paced job ?', '5', '8', '2', 'Type B'),
(3, 'You enjoy having a wide circle of acquaintances ?', '9', '8', '7', 'Type A'),
(4, 'You feel involved when watching TV soaps ?', '1', '2', '3', 'Type A'),
(5, 'You are usually the first to react to a sudden event: the telephone ringing or unexpected question ?', '4', '3', '8', 'Type B'),
(6, 'You feel that the world is founded on compassion ?', '5', '4', '8', 'Type A');

-- --------------------------------------------------------

--
-- Table structure for table `take_survey`
--

CREATE TABLE IF NOT EXISTS `take_survey` (
  `uid` varchar(333) NOT NULL,
  `uname` varchar(444) NOT NULL,
  `type` varchar(444) NOT NULL,
  `fdate` varchar(444) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `take_survey`
--

INSERT INTO `take_survey` (`uid`, `uname`, `type`, `fdate`) VALUES
('e001', 'Ravi Jangid', 'Openness to experience , Agreeableness vs. Disagreeable , Extraversion vs. Introversion , Agreeableness vs. Disagreeable , Openness to experience ', '17-05-06'),
('e001', 'Ravi Jangid', 'Openness to experience , Agreeableness vs. Disagreeable , Extraversion vs. Introversion , Agreeableness vs. Disagreeable , Openness to experience ', '17-05-06'),
('e002', 'Shubhanshu', 'Openness to experience , Openness to experience , Extraversion vs. Introversion , Conscientiousness vs. Unconscientiously , Openness to experience ', '17-05-06'),
('e001', 'Ravi Jangid', 'Openness to experience , Agreeableness vs. Disagreeable , Emotional stability vs. Neuroticism , Conscientiousness vs. Unconscientiously , Openness to experience ', '17-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `take_survey_based`
--

CREATE TABLE IF NOT EXISTS `take_survey_based` (
  `uid` varchar(400) NOT NULL,
  `uname` varchar(444) NOT NULL,
  `type` varchar(400) NOT NULL,
  `fdate` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `take_survey_based`
--

