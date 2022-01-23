-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 07:54 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shru`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `clients` ()  SELECT * FROM clients$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `dispayments` ()  SELECT * FROM payment$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `displogs` ()  SELECT * FROM clientlogs$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `dispmess` ()  SELECT * FROM contact$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updatecomission` (IN `ag_id` INT(100))  BEGIN
DECLARE tot INT(100);
DECLARE com INT(100);
DECLARE c_no INT(100);
SET com=(SELECT comission FROM agent WHERE agent_id=ag_id);
SET c_no=(SELECT clients FROM agent WHERE agent_id=ag_id);
SET tot=com+1000;
SET c_no=c_no+1;
UPDATE agent SET comission=tot WHERE agent_id=ag_id;
UPDATE agent SET clients=c_no WHERE agent_id=ag_id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'Shruthi', 'shru@123');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` int(200) NOT NULL,
  `aname` varchar(200) NOT NULL,
  `address` longtext NOT NULL,
  `phone` bigint(10) NOT NULL,
  `clients` int(200) NOT NULL,
  `comission` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `aname`, `address`, `phone`, `clients`, `comission`) VALUES
(1, 'Chinmai', 'bengaluru', 7788445511, 4, 4000),
(2, 'vinuth', 'bengaluru', 7788445566, 2, 2000),
(3, 'prajwal', 'mysore', 9985745512, 3, 3000),
(4, 'ananya', 'udupi', 9854587855, 2, 2000),
(5, 'rajendra', 'mangaluru', 9955445657, 3, 3000),
(6, 'pradeep', 'Bangalore', 8854125698, 4, 4000),
(7, 'babu', 'Bangalore', 8854125698, 1, 1000),
(8, 'Hitesh', 'Bangalore', 8854125698, 3, 3000),
(9, 'Hashal', 'Bangalore', 8854125698, 4, 4000),
(10, 'Sanjana', 'Bangalore', 8854125698, 1, 1000),
(11, 'Naman', 'Bangalore', 8854125698, 1, 1000),
(12, 'Muktha', 'Bangalore', 8854125698, 0, 0),
(13, 'Trisha', 'Bangalore', 8854125698, 1, 1000),
(14, 'Sagarika', 'Bangalore', 8854125698, 2, 2000),
(15, 'Tarun', 'Bangalore', 8854125698, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `clientlogs`
--

CREATE TABLE `clientlogs` (
  `ID` int(200) NOT NULL,
  `client_id` int(200) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `policy_id` int(200) NOT NULL,
  `action` varchar(200) NOT NULL,
  `c_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientlogs`
--

INSERT INTO `clientlogs` (`ID`, `client_id`, `client_name`, `policy_id`, `action`, `c_time`) VALUES
(1, 1, 'mahesh', 1, 'ADDED', '2019-11-06 00:18:20'),
(2, 1, 'mahesh', 1, 'DELETED', '2019-11-06 00:31:54'),
(3, 1, 'mahesh', 3, 'ADDED', '2019-11-06 00:32:24'),
(4, 5, 'josin', 1, 'ADDED', '2019-11-06 00:32:57'),
(5, 4, 'Varun', 3, 'ADDED', '2019-11-06 00:33:40'),
(6, 6, 'pooja', 1, 'ADDED', '2019-11-06 00:34:34'),
(7, 3, 'priya', 3, 'ADDED', '2019-11-06 00:34:59'),
(8, 7, 'sam', 1, 'ADDED', '2019-11-06 12:37:28'),
(9, 1, 'mahesh', 3, 'ADDED', '2019-11-06 20:14:17'),
(10, 1, 'mahesh', 3, 'ADDED', '2019-11-06 20:14:43'),
(11, 1, 'mahesh', 3, 'ADDED', '2019-11-06 20:18:57'),
(12, 1, 'mahesh', 3, 'ADDED', '2019-11-06 20:39:26'),
(13, 1, 'mahesh', 3, 'DELETED', '2019-11-06 20:55:54'),
(14, 1, 'mahesh', 3, 'DELETED', '2019-11-06 20:55:54'),
(15, 1, 'mahesh', 3, 'DELETED', '2019-11-06 20:55:54'),
(16, 1, 'mahesh', 3, 'DELETED', '2019-11-06 20:55:54'),
(17, 1, 'mahesh', 3, 'DELETED', '2019-11-06 20:55:54'),
(18, 1, 'mahesh', 1, 'ADDED', '2019-11-07 11:57:52'),
(19, 1, 'mahesh', 3, 'ADDED', '2019-11-07 16:51:50'),
(20, 6, 'pooja', 1, 'ADDED', '2019-11-08 20:12:01'),
(21, 6, 'pooja', 4, 'ADDED', '2019-11-08 20:23:18'),
(22, 6, 'pooja', 4, 'DELETED', '2019-11-08 20:24:42'),
(23, 6, 'pooja', 1, 'DELETED', '2019-11-08 20:24:46'),
(24, 6, 'pooja', 1, 'DELETED', '2019-11-08 20:24:46'),
(25, 1, 'mahesh', 3, 'DELETED', '2019-11-08 20:24:49'),
(26, 2, 'Chinmai', 3, 'ADDED', '2019-11-08 20:26:13'),
(27, 8, 'ramesh', 4, 'ADDED', '2019-11-08 20:26:46'),
(28, 9, 'suraj', 5, 'ADDED', '2019-11-08 20:27:33'),
(29, 10, 'rajesh', 1, 'ADDED', '2019-11-08 20:28:23'),
(30, 11, 'ahalya', 1, 'ADDED', '2019-11-08 20:28:56'),
(31, 25, 'Archana', 5, 'ADDED', '2019-11-08 20:30:05'),
(32, 12, 'Aditi', 3, 'ADDED', '2019-11-08 20:39:40'),
(33, 13, 'Aditya', 4, 'ADDED', '2019-11-08 20:40:39'),
(34, 14, 'Ashith', 5, 'ADDED', '2019-11-08 20:42:01'),
(35, 15, 'Bharath', 5, 'ADDED', '2019-11-08 20:42:34'),
(36, 17, 'Santosh', 4, 'ADDED', '2019-11-08 20:43:57'),
(37, 18, 'Ravi', 4, 'ADDED', '2019-11-08 20:44:40'),
(38, 19, 'Punith', 1, 'ADDED', '2019-11-08 20:45:10'),
(39, 20, 'Soundarya', 3, 'ADDED', '2019-11-08 20:45:47'),
(40, 26, 'Vedanth', 3, 'ADDED', '2019-11-08 20:47:02'),
(41, 27, 'Vasistha', 4, 'ADDED', '2019-11-08 20:47:50'),
(42, 41, 'Sree hari', 3, 'ADDED', '2019-11-08 20:48:32'),
(43, 42, 'Jatin', 5, 'ADDED', '2019-11-08 20:51:31'),
(44, 43, 'Kaushal', 3, 'ADDED', '2019-11-08 20:52:00'),
(45, 45, 'Boss', 4, 'ADDED', '2019-11-08 20:52:34'),
(46, 46, 'Vaibhav', 5, 'ADDED', '2019-11-08 20:53:28'),
(47, 50, 'Darshan', 5, 'ADDED', '2019-11-08 20:54:02'),
(48, 51, 'Naveen', 3, 'ADDED', '2019-11-08 20:54:51'),
(49, 52, 'Yash', 4, 'ADDED', '2019-11-08 20:55:59'),
(50, 56, 'Rakshith', 5, 'ADDED', '2019-11-08 20:56:42'),
(51, 1, 'mahesh', 3, 'ADDED', '2019-11-17 10:20:30'),
(52, 1, 'mahesh', 4, 'ADDED', '2019-11-17 10:23:31'),
(53, 1, 'mahesh', 3, 'ADDED', '2019-11-17 10:31:25'),
(54, 1, 'mahesh', 3, 'ADDED', '2019-11-17 10:32:08'),
(55, 1, 'mahesh', 3, 'ADDED', '2019-11-17 10:32:55'),
(56, 1, 'mahesh', 3, 'ADDED', '2019-11-17 10:38:21'),
(57, 1, 'mahesh', 3, 'ADDED', '2019-11-17 10:43:29'),
(58, 1, 'mahesh', 3, 'ADDED', '2019-11-17 10:44:09'),
(59, 1, 'mahesh', 3, 'DELETED', '2019-11-17 10:44:38'),
(60, 1, 'mahesh', 3, 'DELETED', '2019-11-17 10:44:38'),
(61, 1, 'mahesh', 3, 'DELETED', '2019-11-17 10:44:38'),
(62, 1, 'mahesh', 3, 'DELETED', '2019-11-17 10:44:38'),
(63, 1, 'mahesh', 3, 'DELETED', '2019-11-17 10:44:38'),
(64, 1, 'mahesh', 3, 'DELETED', '2019-11-17 10:44:38'),
(65, 1, 'mahesh', 3, 'DELETED', '2019-11-17 10:44:38'),
(66, 1, 'mahesh', 4, 'DELETED', '2019-11-17 10:44:43'),
(67, 1, 'mahesh', 4, 'ADDED', '2019-11-17 10:48:34'),
(68, 1, 'mahesh', 4, 'DELETED', '2019-11-17 12:17:16'),
(69, 7, 'sam', 5, 'ADDED', '2019-11-17 12:19:04'),
(70, 7, 'sam', 5, 'DELETED', '2019-11-17 12:19:23'),
(71, 42, 'Jatin', 5, 'DELETED', '2019-11-17 12:34:17'),
(72, 76, 'Deepak', 4, 'ADDED', '2019-11-17 12:35:09'),
(73, 68, 'Joseph', 1, 'ADDED', '2019-11-17 12:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address` longtext NOT NULL,
  `age` int(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `agent_id` int(200) NOT NULL,
  `policy_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `phone`, `address`, `age`, `gender`, `agent_id`, `policy_id`) VALUES
(5, 'josin', 9874563210, 'mysore', 22, 'M', 5, 1),
(4, 'Varun', 8888888889, 'mangaluru', 23, 'M', 1, 3),
(3, 'priya', 98545787854, 'bangalore', 21, 'F', 3, 3),
(7, 'sam', 9535082363, 'bangalore', 21, 'M', 2, 1),
(1, 'mahesh', 9885566552, 'bangalore', 21, 'M', 3, 1),
(2, 'Chinmai', 7896541254, 'mysore', 20, 'M', 6, 3),
(8, 'ramesh', 8545478545, 'mangaluru', 20, 'M', 9, 4),
(9, 'suraj', 9965874558, 'bidar', 20, 'M', 11, 5),
(10, 'rajesh', 9658965874, 'Ranchi', 35, 'M', 13, 1),
(11, 'ahalya', 7896542158, 'belgaum', 40, 'F', 15, 1),
(25, 'Archana', 9965896547, 'bangalore', 21, 'F', 17, 5),
(12, 'Aditi', 9965896587, 'Chikmagalur', 25, 'F', 14, 3),
(13, 'Aditya', 8888888888, 'belgaum', 36, 'M', 14, 4),
(14, 'Ashith', 8745698855, 'Dharward', 39, 'M', 7, 5),
(15, 'Bharath', 7788545874, 'bangalore', 26, 'M', 8, 5),
(17, 'Santosh', 9685454554, 'Dharward', 29, 'M', 6, 4),
(18, 'Ravi', 9656985658, 'bangalore', 36, 'M', 8, 4),
(19, 'Punith', 9685742132, 'mysore', 45, 'M', 9, 1),
(20, 'Soundarya', 9685478545, 'mangaluru', 34, 'F', 10, 3),
(26, 'Vedanth', 9632587410, 'mysore', 25, 'M', 11, 3),
(27, 'Vasistha', 9874563211, 'mangaluru', 29, 'M', 12, 4),
(41, 'Sree hari', 9874554125, 'belgaum', 32, 'M', 15, 3),
(43, 'Kaushal', 7854454545, 'Ranchi', 25, 'M', 13, 3),
(45, 'Boss', 9985457845, 'mangaluru', 25, 'M', 1, 4),
(46, 'Vaibhav', 7896555874, 'UttarPradesh', 21, 'M', 5, 5),
(50, 'Darshan', 8877454545, 'mangaluru', 21, 'M', 6, 5),
(51, 'Naveen', 7532159875, 'mangaluru', 25, 'M', 6, 3),
(52, 'Yash', 7412588744, 'Mandya', 35, 'M', 9, 4),
(56, 'Rakshith', 9985455545, 'nagmangla', 32, 'M', 9, 5),
(76, 'Deepak', 9854785656, 'mangaluru', 21, 'M', 14, 4),
(68, 'Joseph', 9855458745, 'Mandya', 21, 'M', 13, 1);

--
-- Triggers `clients`
--
DELIMITER $$
CREATE TRIGGER `deleclient` BEFORE DELETE ON `clients` FOR EACH ROW INSERT INTO clientlogs (ID,client_id,client_name,policy_id,action,c_time) VALUES (null,OLD.client_id,OLD.name,OLD.policy_id,'DELETED',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insclient` AFTER INSERT ON `clients` FOR EACH ROW INSERT INTO clientlogs (ID,client_id,client_name,policy_id,action,c_time) VALUES (null,NEW.client_id,NEW.name,NEW.policy_id,'ADDED',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `fname`, `lname`, `mobile`, `email`, `message`) VALUES
(1, 'Jhonson', 'kc', 7898745874, 'jhonson@gmail.com', 'hey your insurance is sooo helpful'),
(2, 'sam', 'm', 9535082363, 'sam@123', 'hey');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `policy_id` int(100) NOT NULL,
  `premium` int(100) NOT NULL,
  `policy_asu_amt` int(100) NOT NULL,
  `tenure` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`policy_id`, `premium`, `policy_asu_amt`, `tenure`) VALUES
(1, 300, 15000, 2),
(3, 200, 20000, 5),
(4, 500, 100000, 10),
(5, 500, 500000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `client_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confirm` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`client_id`, `name`, `email`, `password`, `confirm`) VALUES
(1, 'mahesh', 'mahi@gmail.com', '123456', '123456'),
(2, 'Chinmai', 'chins@gmail.com', '123456', '123456\r\n'),
(3, 'priya', 'priya@gmail.com', '123456', '123456'),
(4, 'Varun', 'varun@gmail.com', '123456', '123456'),
(5, 'josin', 'josin@gmail.com', '123456', '123456'),
(6, 'pooja', 'pooja@gmail.com', '123456', '123456'),
(7, 'sam', 'sam@123', '123456', '123456'),
(8, 'ramesh', 'rami@gmail.com', '123456', '123456'),
(9, 'suraj', 'suraj@gmail.com', '123456', '123456'),
(10, 'rajesh', 'rajesh@gmail.com', '123456', '123456'),
(11, 'ahalya', 'ahalya@gmail.com', '123456', '123456'),
(12, 'Aditi', 'Aditi@gmail.com', '123456', '123456'),
(13, 'Aditya', 'Aditya@gmail.com', '123456', '123456'),
(14, 'Ashith', 'Ashith@gmail.com', '123456', '123456'),
(15, 'Bharath', 'Bharath@gmail.com', '123456', '123456'),
(16, 'Bhavesh', 'Bhavesh@gmail.com', '123456', '123456'),
(17, 'Santosh', 'Santosh@gmail.com', '123456', '123456'),
(18, 'Ravi', 'Ravi@gmail.com', '123456', '123456'),
(19, 'Punith', 'Punith@gmail.com', '123456', '123456'),
(20, 'Soundarya', 'Soundarya@gmail.com', '123456', '123456'),
(21, 'Anoksha', 'Anoksha@gmail.com', '123456', '123456'),
(22, 'Preethi', 'Preethi@gmail.com', '123456', '123456'),
(23, 'Narendra', 'Narendra@gmail.com', '123456', '123456'),
(24, 'Bhavya', 'Bhavya@gmail.com', '123456', '123456'),
(25, 'Archana', 'Archana@gmail.com', '123456', '123456'),
(26, 'Vedanth', 'Vedanth@gmail.com', '123456', '123456'),
(27, 'Vasistha', 'Vasistha@gmail.com', '123456', '123456'),
(28, 'Varshini', 'Varshini@gmail.com', '123456', '123456'),
(29, 'Varsha', 'Varsha@gmail.com', '123456', '123456'),
(30, 'Deepa', 'deepa@gmail.com', '123456', '123456'),
(31, 'Chandana', 'chandana@gmail.com', '123456', '123456'),
(32, 'Chandan', 'chandan@gmail.com', '123456', '123456'),
(33, 'Hari', 'hari@gmail.com', '123456', '123456'),
(34, 'Hemanth', 'Hemanth@gmail.com', '123456', '123456'),
(35, 'Chethan', 'Chethan@gmail.com', '123456', '123456'),
(36, 'Krishna', 'krishna@gmail.com', '123456', '123456'),
(37, 'Akilesh', 'kughhha@gmail.com', '123456', '123456'),
(38, 'Abhilesh', 'abhi@gmail.com', '123456', '123456'),
(39, 'Narsihma', 'narshima@gmail.com', '123456', '123456'),
(40, 'jaruthi', 'jaruthi@gmail.com', '123456', '123456'),
(41, 'Sree hari', 'shree@gmail.com', '123456', '123456'),
(42, 'Jatin', 'Jatin@gmail.com', '123456', '123456'),
(43, 'Kaushal', 'kaushal@gmail.com', '123456', '123456'),
(44, 'Drusti', 'Drusti@gmail.com', '123456', '123456'),
(45, 'Boss', 'Boss@gmail.com', '123456', '123456'),
(46, 'Vaibhav', 'Vaibhav@gmail.com', '123456', '123456'),
(47, 'Vagesh', 'Vagesh@gmail.com', '123456', '123456'),
(48, 'Vignesh', 'Vignesh@gmail.com', '123456', '123456'),
(49, 'Ganesh', 'Ganesh@gmail.com', '123456', '123456'),
(50, 'Darshan', 'Darshan@gmail.com', '123456', '123456'),
(51, 'Naveen', 'Naveen@gmail.com', '123456', '123456'),
(52, 'Yash', 'Yash@gmail.com', '123456', '123456'),
(53, 'Prema', 'Prema@gmail.com', '123456', '123456'),
(54, 'Prem', 'Prem@gmail.com', '123456', '123456'),
(55, 'Rakshitha', 'Rakshitha@gmail.com', '123456', '123456'),
(56, 'Rakshith', 'Rakshith@gmail.com', '123456', '123456'),
(57, 'Disha', 'Disha@gmail.com', '123456', '123456'),
(58, 'Aishwarya', 'Aishwarya@gmail.com', '123456', '123456'),
(59, 'Harshitha', 'Harshitha@gmail.com', '123456', '123456'),
(60, 'Jayanth Joshi', 'Jayanth@gmail.com', '123456', '123456'),
(61, 'Pratap', 'Pratap@gmail.com', '123456', '123456'),
(62, 'Sudeep', 'Sudeep@gmail.com', '123456', '123456'),
(63, 'Tejas', 'Tejas@gmail.com', '123456', '123456'),
(64, 'Kiran', 'Kiran@gmail.com', '123456', '123456'),
(65, 'Vimuktha', 'Vimuktha@gmail.com', '123456', '123456'),
(66, 'Jane', 'Jane@gmail.com', '123456', '123456'),
(67, 'Jasmine', 'Jasmine@gmail.com', '123456', '123456'),
(68, 'Joseph', 'Joseph@gmail.com', '123456', '123456'),
(69, 'Bhargav', 'Bhargav@gmail.com', '123456', '123456'),
(70, 'Rahul', 'Rahul@gmail.com', '123456', '123456'),
(71, 'Nandan', 'Nandan@gmail.com', '123456', '123456'),
(72, 'Shree Nandan', 'Shree@gmail.com', '123456', '123456'),
(73, 'Brahma', 'Brahma@gmail.com', '123456', '123456'),
(74, 'Rajat', 'Rajat@gmail.com', '123456', '123456'),
(75, 'Raghav', 'Raghav@gmail.com', '123456', '123456'),
(76, 'Deepak', 'Deepak@gmail.com', '123456', '123456'),
(77, 'Sakshi', 'Sakshi@gmail.com', '123456', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ID` int(200) NOT NULL,
  `client_id` int(200) NOT NULL,
  `policy_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `policy` varchar(200) NOT NULL,
  `paid` int(200) NOT NULL,
  `date_in` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`ID`, `client_id`, `policy_id`, `name`, `email`, `policy`, `paid`, `date_in`) VALUES
(2, 1, 1, 'mahesh', 'mahi@gmail.com', 'Term', 300, '2019-11-05 07:56:30'),
(3, 7, 1, 'sam', 'sam@123', 'Term', 300, '2019-11-06 08:08:54'),
(4, 11, 1, 'ahalya', 'ahalya@gmail.com', 'Term', 300, '2019-11-08 03:59:15'),
(5, 25, 5, 'Archana', 'Archana@gmail.com', 'Permanent', 500, '2019-11-08 04:00:21'),
(6, 5, 1, 'josin', 'josin@gmail.com', 'Term', 300, '2019-11-08 04:00:46'),
(7, 8, 4, 'ramesh', 'rami@gmail.com', 'Universal', 500, '2019-11-08 04:01:12'),
(8, 12, 3, 'Aditi', 'Aditi@gmail.com', 'Whole', 200, '2019-11-08 04:10:00'),
(9, 12, 3, 'Aditi', 'Aditi@gmail.com', 'Whole', 200, '2019-11-08 04:10:07'),
(10, 13, 4, 'Aditya', 'Aditya@gmail.com', 'Universal', 500, '2019-11-08 04:11:04'),
(11, 14, 5, 'Ashith', 'Ashith@gmail.com', 'Permanent', 500, '2019-11-08 04:12:10'),
(12, 15, 5, 'Bharath', 'Bharath@gmail.com', 'Permanent', 500, '2019-11-08 04:13:08'),
(13, 17, 4, 'Santosh', 'Santosh@gmail.com', 'Universal', 500, '2019-11-08 04:14:07'),
(14, 19, 1, 'Punith', 'Punith@gmail.com', 'Term', 300, '2019-11-08 04:15:18'),
(15, 20, 3, 'Soundarya', 'Soundarya@gmail.com', 'Whole', 200, '2019-11-08 04:15:56'),
(16, 26, 3, 'Vedanth', 'Vedanth@gmail.com', 'Whole', 200, '2019-11-08 04:17:14'),
(17, 26, 3, 'Vedanth', 'Vedanth@gmail.com', 'Whole', 200, '2019-11-08 04:17:22'),
(18, 27, 4, 'Vasistha', 'Vasistha@gmail.com', 'Universal', 500, '2019-11-08 04:17:57'),
(19, 41, 3, 'Sree hari', 'shree@gmail.com', 'Whole', 200, '2019-11-08 04:18:39'),
(20, 41, 3, 'Sree hari', 'shree@gmail.com', 'Whole', 200, '2019-11-08 04:18:46'),
(21, 42, 5, 'Jatin', 'Jatin@gmail.com', 'Permanent', 500, '2019-11-08 04:21:38'),
(22, 43, 3, 'Kaushal', 'kaushal@gmail.com', 'Whole', 200, '2019-11-08 04:22:11'),
(23, 45, 4, 'Boss', 'Boss@gmail.com', 'Universal', 500, '2019-11-08 04:22:58'),
(24, 46, 5, 'Vaibhav', 'Vaibhav@gmail.com', 'Permanent', 500, '2019-11-08 04:23:35'),
(25, 50, 5, 'Darshan', 'Darshan@gmail.com', 'Permanent', 500, '2019-11-08 04:24:28'),
(26, 51, 3, 'Naveen', 'Naveen@gmail.com', 'Whole', 200, '2019-11-08 04:25:00'),
(27, 52, 4, 'Yash', 'Yash@gmail.com', 'Universal', 500, '2019-11-08 04:26:06'),
(28, 56, 5, 'Rakshith', 'Rakshith@gmail.com', 'Permanent', 500, '2019-11-08 04:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `policy_id` int(100) NOT NULL,
  `policy_name` varchar(200) NOT NULL,
  `tenure` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`policy_id`, `policy_name`, `tenure`) VALUES
(1, 'Term', 2),
(3, 'Whole', 5),
(4, 'Universal', 10),
(5, 'Permanent', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `clientlogs`
--
ALTER TABLE `clientlogs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agent_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `clientlogs`
--
ALTER TABLE `clientlogs`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `client_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
