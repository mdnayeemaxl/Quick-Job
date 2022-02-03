-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 06:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(400) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `dob`, `gender`, `image`) VALUES
(1, 'Md.Nayeem', 'mdnayeemaxl6162@gmail.com', '12345678', '1995-06-29', 'Male', 'admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(100) NOT NULL,
  `name` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `skills` varchar(400) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `skid` int(100) NOT NULL,
  `postid` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `name`, `email`, `skills`, `resume`, `skid`, `postid`, `status`, `time`) VALUES
(16, 'Md Fahim', 'fahim@gmail.com', 'Environment scientest', 'resume.pdf', 8, 22, 'Rejected', '06-01-2021 16:18:42'),
(20, 'MD. NAYEEM', 'Karim@gmail.com', 'Ethical Hacker', 'English 2nd.pdf', 5, 14, 'Accepted', '05-03-2021 00:06:49'),
(21, 'MD.NAYEEM', 'Karim@gmail.com', 'Ethical Hacker', 'CSE464(1)_T_Assignment_2.pdf', 5, 23, 'Accepted', '06-05-2021 00:00:54'),
(22, 'Fahim', 'fahim@gmail.com', 'PHP,Java Script,CSS', '2021_10_03_15-50-43_pm.pdf', 8, 27, 'pending', '07-11-2021 21:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `title` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(4, 'IT and Technology'),
(7, 'Agriculture'),
(9, 'Medical'),
(10, 'Education'),
(11, 'Automobile');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `name`, `email`, `password`, `dob`, `gender`, `image`) VALUES
(21, 'NAYEEM', 'mdnayeem_axl6162@yahoo.com', '12345678', '1995-10-01', 'Male', 'sd.jpg'),
(23, 'Ebrahim', 'ebrahim@gmail.com', '1122334455', '2000-07-07', 'Male', 'e3.jpg'),
(24, 'Muhammad', 'muhammad@gmail.com', '12345678', '0199-05-02', 'Male', 'p.jpg'),
(26, 'AXL', 'Karim@gmail.com', '@xl113114', '2021-11-28', 'Male', 'cringe-awkward.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `id` int(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(70) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `image` varchar(20) NOT NULL,
  `jobdescription` varchar(1000) NOT NULL,
  `tme` varchar(30) NOT NULL,
  `empid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`id`, `category`, `title`, `salary`, `image`, `jobdescription`, `tme`, `empid`) VALUES
(14, 'IT and Technology', 'Full Time Software Developer', '80000-90000 Tk', 'emm.jpg', '  We are seeking someone who has previous experience building chat bots using SnatchBot. The candidate should be able to:\r\n1.use variables and attributes\r\n2.use JSON API & Webhooks\r\n3.use NLP\r\n4.create reports\r\n\r\n\r\n- 1 per media channel\r\n\r\n- 1 per language\r\n\r\nthis will be decided according to features and limitations available in SnatchBot and to business requirements.', '06-01-2021 15:44:16', 21),
(21, 'Agriculture', 'Food scientist', '40000-50000 Tk', 'food.jpg', ' What is Food Technology? Food technology is the application of food science to the selection, preservation, processing, packaging, distribution, and use of safe food. Related fields include analytical chemistry, biotechnology, engineering, nutrition, quality control, and food safety management.', '06-01-2021 15:32:54', 23),
(22, 'IT and Technology', 'Agricultural Food Scientist.', '80000-90000 Tk', 'es.jpg', ' Agricultural scientists study all aspects of living organisms and the relationships of plants and animals to their environment. They conduct basic research in laboratories or in the field. They apply the results to such tasks as increasing crop and animal yields and improving the environment.', '06-01-2021 15:34:06', 23),
(23, 'Medical', 'Mechanical Engineer', '80000-90000 Tk', 'eh.png', ' dfsdfsfsf', '06-01-2021 16:48:48', 21),
(25, 'Medical', 'Doctor', '20000-30000 Tk', 'Capture.PNG', ' gfgfgfgfg', '06-05-2021 00:23:28', 21),
(27, 'IT and Technology', 'Teaching Assistant in Ethics and Leadership ', '40000-50000 Tk', 'images.jpg', ' fdsuhg gdfdggf gdfgdx r rts  srg', '07-11-2021 21:47:57', 26);

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`id`, `name`, `email`, `password`, `dob`, `gender`, `image`) VALUES
(5, 'DJ Khaled hhh', 'Karim@gmail.com', '11223344', '2006-06-29', 'Male', 'man.jpg'),
(8, 'Md. Fahim', 'fahim@gmail.com', '1122334455', '1995-05-03', 'Male', '120033688_767594927358771_666876760019106756_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postid` (`postid`),
  ADD KEY `skid` (`skid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empid` (`empid`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply`
--
ALTER TABLE `apply`
  ADD CONSTRAINT `For` FOREIGN KEY (`postid`) REFERENCES `jobpost` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fo` FOREIGN KEY (`skid`) REFERENCES `jobseeker` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD CONSTRAINT `Foreign` FOREIGN KEY (`empid`) REFERENCES `employer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
