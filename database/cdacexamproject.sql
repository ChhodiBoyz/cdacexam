-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 02:15 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `cid` int(11) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phno` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`cid`, `cname`, `email`, `phno`) VALUES
(1601227184, 'Sarthak saurav kar', 'sarthakkaryo@gmail.com', '7008581379');

-- --------------------------------------------------------

--
-- Table structure for table `candidateexam`
--

CREATE TABLE `candidateexam` (
  `cid` int(11) NOT NULL,
  `eid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidatemock`
--

CREATE TABLE `candidatemock` (
  `cid` int(11) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `chid` int(11) NOT NULL,
  `studytime` varchar(200) NOT NULL DEFAULT '0',
  `cname` varchar(200) NOT NULL,
  `syallabus` varchar(400) NOT NULL,
  `did` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `comid` int(11) NOT NULL,
  `cname` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `companydomain`
--

CREATE TABLE `companydomain` (
  `comid` int(11) NOT NULL DEFAULT '0',
  `did` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE `domain` (
  `did` int(11) NOT NULL,
  `dname` varchar(200) NOT NULL,
  `domainworth` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `eid` int(11) NOT NULL,
  `time` varchar(200) NOT NULL,
  `noofquestions` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mockexam`
--

CREATE TABLE `mockexam` (
  `mid` int(11) NOT NULL,
  `dateofexam` varchar(200) NOT NULL,
  `noofquestions` int(11) NOT NULL,
  `time` varchar(200) NOT NULL,
  `aid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
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
-- Table structure for table `quizresult`
--

CREATE TABLE `quizresult` (
  `cid` int(15) NOT NULL,
  `chid` int(5) NOT NULL,
  `did` int(5) NOT NULL,
  `result` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizresult`
--

INSERT INTO `quizresult` (`cid`, `chid`, `did`, `result`) VALUES
(1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `cid` int(11) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `confirmed` int(11) NOT NULL DEFAULT '0',
  `confirmed_code` int(11) NOT NULL DEFAULT '0',
  `salt` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`cid`, `cname`, `password`, `email`, `contact`, `confirmed`, `confirmed_code`, `salt`) VALUES
(1601227184, 'Sarthak saurav kar', 'MjAyY2I5NjJhYzU5MDc1Yjk2NGIwNzE1MmQyMzRiNzA5OW5uZWV1dWVlcHBoaDAwbm43N3h4Z2d5eTAwb29lZTc3aWlra2VldHRra2pqdXViYmtrNzc1NWxsaGg0NDQ0cnI4OGJieXk=', 'sarthakkaryo@gmail.com', '7008581379', 0, 1595334689, '99nneeuueepphh00nn77xxggyy00ooee77iikkeettkkjjuubbkk7755llhh4444rr88bbyy');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `rid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `result` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uploadquestions`
--

CREATE TABLE `uploadquestions` (
  `qid` int(11) NOT NULL,
  `chid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `op1` varchar(50) NOT NULL,
  `op2` varchar(50) NOT NULL,
  `op3` varchar(50) NOT NULL,
  `op4` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadquestions`
--

INSERT INTO `uploadquestions` (`qid`, `chid`, `did`, `question`, `op1`, `op2`, `op3`, `op4`, `ans`) VALUES
(1, 1, 1, 'What is full form of cs?', 'counter strike', 'combat strike', 'computer science ', 'cs', 'C'),
(2, 1, 1, 'what is the full form ee?', 'Electrical Engg', 'EE', 'EE2', 'EE#', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`chid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`comid`);

--
-- Indexes for table `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `mockexam`
--
ALTER TABLE `mockexam`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `quizresult`
--
ALTER TABLE `quizresult`
  ADD PRIMARY KEY (`chid`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `uploadquestions`
--
ALTER TABLE `uploadquestions`
  ADD PRIMARY KEY (`qid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1601227185;

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `chid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `comid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `domain`
--
ALTER TABLE `domain`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mockexam`
--
ALTER TABLE `mockexam`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploadquestions`
--
ALTER TABLE `uploadquestions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
