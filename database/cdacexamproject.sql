-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 05, 2018 at 06:02 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdacexamproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

DROP TABLE IF EXISTS `candidate`;
CREATE TABLE IF NOT EXISTS `candidate` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phno` varchar(200) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=1601227183 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`cid`, `cname`, `email`, `phno`) VALUES
(1601227182, 'Aakash Kumar', 'aakash.nanda99@gmail.com', '7008313332');

-- --------------------------------------------------------

--
-- Table structure for table `candidateexam`
--

DROP TABLE IF EXISTS `candidateexam`;
CREATE TABLE IF NOT EXISTS `candidateexam` (
  `cid` int(11) NOT NULL,
  `eid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidatemock`
--

DROP TABLE IF EXISTS `candidatemock`;
CREATE TABLE IF NOT EXISTS `candidatemock` (
  `cid` int(11) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

DROP TABLE IF EXISTS `chapter`;
CREATE TABLE IF NOT EXISTS `chapter` (
  `chid` int(11) NOT NULL AUTO_INCREMENT,
  `studytime` varchar(200) NOT NULL DEFAULT '0',
  `cname` varchar(200) NOT NULL,
  `syallabus` varchar(400) NOT NULL,
  `did` int(11) NOT NULL,
  PRIMARY KEY (`chid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `comid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(200) NOT NULL,
  PRIMARY KEY (`comid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `companydomain`
--

DROP TABLE IF EXISTS `companydomain`;
CREATE TABLE IF NOT EXISTS `companydomain` (
  `comid` int(11) NOT NULL DEFAULT '0',
  `did` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

DROP TABLE IF EXISTS `domain`;
CREATE TABLE IF NOT EXISTS `domain` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `dname` varchar(200) NOT NULL,
  `domainworth` int(11) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
CREATE TABLE IF NOT EXISTS `exam` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(200) NOT NULL,
  `noofquestions` int(11) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mockexam`
--

DROP TABLE IF EXISTS `mockexam`;
CREATE TABLE IF NOT EXISTS `mockexam` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `dateofexam` varchar(200) NOT NULL,
  `noofquestions` int(11) NOT NULL,
  `time` varchar(200) NOT NULL,
  `aid` int(11) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `q1` varchar(40) DEFAULT NULL,
  `q2` varchar(40) DEFAULT NULL,
  `q3` varchar(40) DEFAULT NULL,
  `q4` varchar(40) DEFAULT NULL,
  `q5` varchar(40) DEFAULT NULL,
  `q6` varchar(40) DEFAULT NULL,
  `q7` varchar(40) DEFAULT NULL,
  `q8` varchar(40) DEFAULT NULL,
  `q9` varchar(40) DEFAULT NULL,
  `q10` varchar(40) DEFAULT NULL,
  `q11` varchar(40) DEFAULT NULL,
  `q12` varchar(40) DEFAULT NULL,
  `q13` varchar(40) DEFAULT NULL,
  `q14` varchar(40) DEFAULT NULL,
  `q15` varchar(40) DEFAULT NULL,
  `q16` varchar(40) DEFAULT NULL,
  `q17` varchar(40) DEFAULT NULL,
  `q18` varchar(40) DEFAULT NULL,
  `q19` varchar(40) DEFAULT NULL,
  `q20` varchar(40) DEFAULT NULL,
  `q21` varchar(40) DEFAULT NULL,
  `q22` varchar(40) DEFAULT NULL,
  `q23` varchar(40) DEFAULT NULL,
  `q24` varchar(40) DEFAULT NULL,
  `q25` varchar(40) DEFAULT NULL,
  `q26` varchar(40) DEFAULT NULL,
  `q27` varchar(40) DEFAULT NULL,
  `q28` varchar(40) DEFAULT NULL,
  `q29` varchar(40) DEFAULT NULL,
  `q30` varchar(40) DEFAULT NULL,
  `q31` varchar(40) DEFAULT NULL,
  `q32` varchar(40) DEFAULT NULL,
  `q33` varchar(40) DEFAULT NULL,
  `q34` varchar(40) DEFAULT NULL,
  `q35` varchar(40) DEFAULT NULL,
  `q36` varchar(40) DEFAULT NULL,
  `q37` varchar(40) DEFAULT NULL,
  `q38` varchar(40) DEFAULT NULL,
  `q39` varchar(40) DEFAULT NULL,
  `q40` varchar(40) DEFAULT NULL,
  `q41` varchar(40) DEFAULT NULL,
  `q42` varchar(40) DEFAULT NULL,
  `q43` varchar(40) DEFAULT NULL,
  `q44` varchar(40) DEFAULT NULL,
  `q45` varchar(40) DEFAULT NULL,
  `q46` varchar(40) DEFAULT NULL,
  `q47` varchar(40) DEFAULT NULL,
  `q48` varchar(40) DEFAULT NULL,
  `q49` varchar(40) DEFAULT NULL,
  `q50` varchar(40) DEFAULT NULL,
  `cid` varchar(11) DEFAULT NULL,
  `eid` varchar(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

DROP TABLE IF EXISTS `registered_users`;
CREATE TABLE IF NOT EXISTS `registered_users` (
  `cid` int(11) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `confirmed` int(11) NOT NULL DEFAULT '0',
  `confirmed_code` int(11) NOT NULL DEFAULT '0',
  `salt` varchar(200) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`cid`, `cname`, `password`, `email`, `contact`, `confirmed`, `confirmed_code`, `salt`) VALUES
(1, 'a', 'p', 'p', '12', 1, 0, '123asd456'),
(1601227182, 'Aakash Kumar', 'MWExZGM5MWM5MDczMjVjNjkyNzFkZGYwYzk0NGJjNzIyMmVlOTlvbzMzZWVjY3l5OTlycnV1a2t5eWtrMzN4eHd3aGhqajc3aWk1NXd3MDBubjExbm4zM25ubm5ra2xsZGR5eTExeHg=', 'aakash.nanda99@gmail.com', '7008313332', 1, 0, '22ee99oo33eeccyy99rruukkyykk33xxwwhhjj77ii55ww00nn11nn33nnnnkkllddyy11xx');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `rid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `result` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uploadquestions`
--

DROP TABLE IF EXISTS `uploadquestions`;
CREATE TABLE IF NOT EXISTS `uploadquestions` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `chid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `op1` varchar(50) NOT NULL,
  `op2` varchar(50) NOT NULL,
  `op3` varchar(50) NOT NULL,
  `op4` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadquestions`
--

INSERT INTO `uploadquestions` (`qid`, `chid`, `did`, `question`, `op1`, `op2`, `op3`, `op4`, `ans`) VALUES
(1, 1, 1, 'What is full form of cs?', 'counter strike', 'combat strike', 'computer science ', 'cs', 'computer science'),
(2, 1, 1, 'what is the full form ee?', 'Electrical Engg', 'EE', 'EE2', 'EE#', 'Electrical Engg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
