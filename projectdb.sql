-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2021 at 08:41 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `docdata`
--

CREATE TABLE IF NOT EXISTS `docdata` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `cat` varchar(500) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `caddress` varchar(500) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `yearexp` varchar(500) NOT NULL,
  `phone` varchar(600) NOT NULL,
  `emailid` varchar(500) NOT NULL,
  `pincode` varchar(500) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `docdata`
--

INSERT INTO `docdata` (`did`, `cat`, `fname`, `lname`, `caddress`, `qualification`, `yearexp`, `phone`, `emailid`, `pincode`) VALUES
(1, 'General Physician', 'Dr. Vinod', 'Sharma', 'Sharma Hospital Shyam Nagan', 'M.B.B.S , M.D.', '15+ ', '9828011121', 'dr.vsharma@gmail.com', '302019'),
(2, 'General Physician', 'Dr. Anil', 'Agarwal', 'Agarwal Clinic Jhotwara Jaipur', 'M.B.B.S', '10+', '9414011221', 'agarwal.clinic@gmail.com', '300001');

-- --------------------------------------------------------

--
-- Table structure for table `tbank`
--

CREATE TABLE IF NOT EXISTS `tbank` (
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `emailid` varchar(500) NOT NULL,
  `passwd` varchar(500) NOT NULL,
  `rdate` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbank`
--

INSERT INTO `tbank` (`fname`, `lname`, `mobile`, `emailid`, `passwd`, `rdate`) VALUES
('Subhanshu', 'Mathur', '9828041224', 'paceinfotecjaipur@gmail.com', '123123', '21-06-07'),
('Akash', 'Singh', '98280451224', 'akash.singh@gmail.com', '123123', '21-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbbal`
--

CREATE TABLE IF NOT EXISTS `tbbal` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `emailid` varchar(500) NOT NULL,
  `totbal` int(11) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbbal`
--

INSERT INTO `tbbal` (`bid`, `emailid`, `totbal`) VALUES
(1, 'paceinfotecjaipur@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbreq`
--

CREATE TABLE IF NOT EXISTS `tbreq` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `remailid` varchar(500) NOT NULL,
  `cperson` varchar(500) NOT NULL,
  `cmobile` varchar(500) NOT NULL,
  `rdate` varchar(500) NOT NULL,
  `tslot` varchar(500) NOT NULL,
  `details` varchar(2000) NOT NULL,
  `hours` int(11) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbreq`
--

INSERT INTO `tbreq` (`rid`, `remailid`, `cperson`, `cmobile`, `rdate`, `tslot`, `details`, `hours`) VALUES
(1, 'amitjpr@gmail.com', 'Mr. K.L. Sharma', '9414012367', '12-06-2021', '12 pm to 2 pm', 'Require to go for the vaccination', 2),
(2, 'paceinfotecjaipur@gmail.com', 'Mr. Anil Gupta', '9314511129', '12-07-2021', '12pm to 3pm', 'Have to consult to doctor', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbreqapp`
--

CREATE TABLE IF NOT EXISTS `tbreqapp` (
  `appid` int(11) NOT NULL AUTO_INCREMENT,
  `reqid` int(11) NOT NULL,
  `app_emailid` varchar(500) NOT NULL,
  `Status` varchar(500) NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbreqapp`
--

INSERT INTO `tbreqapp` (`appid`, `reqid`, `app_emailid`, `Status`) VALUES
(1, 1, 'paceinfotecjaipur@gmail.com', 'Done'),
(2, 2, 'akash.singh@gmail.com', 'Applied');
