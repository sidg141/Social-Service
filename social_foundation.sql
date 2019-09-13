-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2019 at 05:06 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_foundation`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_detail`
--

DROP TABLE IF EXISTS `acc_detail`;
CREATE TABLE IF NOT EXISTS `acc_detail` (
  `cre_tid` int(11) NOT NULL AUTO_INCREMENT,
  `deb_bit` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `trans_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cre_tid`,`deb_bit`),
  KEY `deb_did` (`deb_bit`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acc_detail`
--

INSERT INTO `acc_detail` (`cre_tid`, `deb_bit`, `amount`, `trans_date`) VALUES
(1, 2, 100, '1998-03-07 18:30:00'),
(2, 0, 100, '1998-03-07 18:30:00'),
(3, 0, 100, '2019-04-07 07:38:11'),
(4, 0, 100, '2019-04-07 07:46:46'),
(5, 0, 5000, '2019-04-07 07:49:50'),
(6, 0, 100, '2019-04-07 08:36:58'),
(7, 0, 100, '2019-04-07 08:39:35'),
(8, 1, -100, '2019-04-07 11:50:24'),
(9, 1, -100, '2019-04-07 11:51:12'),
(10, 1, -100, '2019-04-07 11:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `post` varchar(10) DEFAULT NULL,
  `contact` bigint(10) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `sex` enum('m','f') DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `a_email` varchar(30) NOT NULL,
  PRIMARY KEY (`a_email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `lname`, `post`, `contact`, `address`, `city`, `sex`, `password`, `a_email`) VALUES
('dr. raghvendra', 'singh', 'director', 7895465123, 'arera colony bhopal', 'bhopal', 'm', '08dbd4a469ee02490642be641c0c3c70', 'raghvendra123@gmail.com'),
('dr. vishal', 'rao', 'chairman', 7812345123, 'danish hills', 'bhopal', 'm', 'b4e4e406ea92f2c83d2bbced7d4ada2', 'raovishal@gmail.com'),
('dr. hemant', 'khatri', 'v.chair', 9876543210, 'danish hills', 'bhopal', 'm', '59fa23160638900447ae9888bdc83a4b', 'hemant12@gmail.com'),
('dr. saif', 'khan', 'inspector', 9876543210, 'sahajanbad', 'bhopal', 'm', '07ef54181bad773ef0d7d6ddf001f858', 'khan12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `credit_donate`
--

DROP TABLE IF EXISTS `credit_donate`;
CREATE TABLE IF NOT EXISTS `credit_donate` (
  `cre_did` int(11) NOT NULL,
  `email_p` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cre_did`),
  KEY `email_p` (`email_p`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit_donate`
--

INSERT INTO `credit_donate` (`cre_did`, `email_p`) VALUES
(7, 'sidg141@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `debit_donate`
--

DROP TABLE IF EXISTS `debit_donate`;
CREATE TABLE IF NOT EXISTS `debit_donate` (
  `deb_id` int(11) NOT NULL,
  `o_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`deb_id`),
  KEY `o_id` (`o_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debit_donate`
--

INSERT INTO `debit_donate` (`deb_id`, `o_id`) VALUES
(9, 1),
(10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `e_name` varchar(20) DEFAULT NULL,
  `e_date` date DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `society_name` varchar(20) DEFAULT NULL,
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`e_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_name`, `e_date`, `link`, `society_name`, `e_id`) VALUES
('children day', '2019-04-13', 'http://www.indiatomorrow.net/eng/-universal-childrens-day-turns-smile-day-for-orphans', 'india tommorow', 7),
('HEALING THROUNGH ART', '2019-04-10', 'https://www.canyonranch.com/blog/mind-and-spirit/art-therapy-healing-through-self-expression/', 'canyonRanch', 3),
('feedingindia', '2019-06-13', 'https://www.feedingindia.org/', 'feeding india', 4),
('foodwaste', '2019-04-13', 'https://www.nofoodwaste.in/', 'food waste', 5),
('food-bank', '2019-04-20', 'http://ehsaas.org.in/food-bank/', 'ehsas', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orphanage`
--

DROP TABLE IF EXISTS `orphanage`;
CREATE TABLE IF NOT EXISTS `orphanage` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `o_name` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `no_people` varchar(10) DEFAULT NULL,
  `caretaker` varchar(10) DEFAULT NULL,
  `o_v_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`o_id`),
  KEY `o_v_id` (`o_v_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orphanage`
--

INSERT INTO `orphanage` (`o_id`, `o_name`, `address`, `city`, `no_people`, `caretaker`, `o_v_id`) VALUES
(1, 'dindayal', 'jaipur', 'jaipur', '45', 'ram singh', 2);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `sex` enum('m','f') DEFAULT NULL,
  `contact` bigint(10) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`fname`, `lname`, `email`, `address`, `sex`, `contact`, `password`, `city`) VALUES
('vishant', 'garg', 'vishant123@gmail.com', 'jaipur', 'm', 7845123691, 'e10adc3949ba59abbe56e057f20f883e', 'jaipur'),
('siddharth', 'gautam', 'sidg141@gmail.com', 'manit', 'm', 9171528811, '2e68258d6057a8f3e9711dec2c1c9fbf', 'bhopal'),
('anirudh', 'goyal', 'anirudh123@gmail.com', 'up', 'm', 9854785625, '51b2151d365316cd1e6fce9007919222', 'lackhnow'),
('asif', 'rza', 'asif123@gmail.com', 'bihar', 'm', 7488486460, 'ce0b996aa0b7d64169a4b8ffeaf878c5', 'patna'),
('hemant', 'garg', 'hemant132@gmail.com', 'haryana', 'm', 9171528811, '17563740df9a804bc5e3b31c5cb58984', 'chandigarh'),
('kuldeep', 'meena', 'kuldeep123@gmail.com', 'rajsthan', 'm', 9171528811, 'a8029adfae3bca6d42ac99453b200db9', 'jaipur'),
('palak', 'maheshwari', 'palak348@gmail.com', 'mp', 'f', 9171528819, '6418d24e63f4a9e5fc73a03cdd2fac30', 'raisen');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE IF NOT EXISTS `subscribe` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`sid`, `email`) VALUES
(1, 'sidg141@gmail.com'),
(2, 'sidg141@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
CREATE TABLE IF NOT EXISTS `volunteer` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `experience` varchar(200) DEFAULT NULL,
  `specilization` varchar(150) DEFAULT NULL,
  `email_a` varchar(30) DEFAULT NULL,
  `email_p` varchar(20) DEFAULT NULL,
  `adhar` bigint(10) DEFAULT NULL,
  `purpose` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`v_id`),
  KEY `email_a` (`email_a`),
  KEY `email_p` (`email_p`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`v_id`, `experience`, `specilization`, `email_a`, `email_p`, `adhar`, `purpose`) VALUES
(1, 'i am currently pursuing my b.tech', 'web developer', 'hemant12@gmail.com', 'sidg141@gmail.com', 12345679, 'because i want to help'),
(2, 'i am currently pursuing my b.tech', 'web developer', 'raghvendra123@gmail.com', 'sidg141@gmail.com', 12345679, 'because i want to help'),
(3, 'i am currently pursuing my b.tech', 'web developer', 'raovishal@gmail.com', 'vishant123@gmail.com', 215215165, 'because i want to help');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_work`
--

DROP TABLE IF EXISTS `volunteer_work`;
CREATE TABLE IF NOT EXISTS `volunteer_work` (
  `vid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  PRIMARY KEY (`vid`,`eid`),
  KEY `eid` (`eid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer_work`
--

INSERT INTO `volunteer_work` (`vid`, `eid`) VALUES
(1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
