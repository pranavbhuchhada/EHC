-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 01:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehc`
--

-- --------------------------------------------------------

--
-- Table structure for table `cbc`
--

CREATE TABLE `cbc` (
  `id` int(11) NOT NULL,
  `Haemoglobin` varchar(255) NOT NULL,
  `TotalRBC` varchar(255) NOT NULL,
  `PCV` varchar(255) NOT NULL,
  `MCV` varchar(255) NOT NULL,
  `MCH` varchar(255) NOT NULL,
  `MCHC` varchar(255) NOT NULL,
  `RDW` varchar(255) NOT NULL,
  `TotalWBC` varchar(255) NOT NULL,
  `PlateletCount` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Neutrophils` varchar(255) NOT NULL,
  `Lymphocytes` varchar(255) NOT NULL,
  `Eosinophils` varchar(255) NOT NULL,
  `Monocytes` varchar(255) NOT NULL,
  `Basophils` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cbc`
--

INSERT INTO `cbc` (`id`, `Haemoglobin`, `TotalRBC`, `PCV`, `MCV`, `MCH`, `MCHC`, `RDW`, `TotalWBC`, `PlateletCount`, `username`, `Neutrophils`, `Lymphocytes`, `Eosinophils`, `Monocytes`, `Basophils`) VALUES
(1, '13', '4.93', '41.6', '26', '31', '12', '12', '1200', '113000', 'pranav', '68', '25', '3', '4', '0'),
(3, '15', '4000', '5', '7', '45', '45', '152', '45', '7', 'pranav', '78', '12', '45', '8', '47');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `username` varchar(300) NOT NULL,
  `pmh` text NOT NULL,
  `fh` text NOT NULL,
  `psh` text NOT NULL,
  `mpl` text NOT NULL,
  `kal` text NOT NULL,
  `sh` text NOT NULL,
  `hm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`username`, `pmh`, `fh`, `psh`, `mpl`, `kal`, `sh`, `hm`) VALUES
('doctor', 'My data for user pranav', 'My data for user pranav', 'My data for user pranav', 'My data for user pranav', 'My data for user pranav', 'My data for user pranav', 'My data for user pranav'),
('pranav', 'My data for user pranav', 'My data for user pranav', 'My data for user pranav', 'My data for user pranav', 'My data for user pranav', 'My data for user pranav', 'My data for user pranav');

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `username` varchar(300) NOT NULL,
  `medname` varchar(40) NOT NULL,
  `presby` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `duration` varchar(20) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`username`, `medname`, `presby`, `date`, `duration`, `status`) VALUES
('pranav', 'med1', 'doctor', '2020-02-28', '1', '0'),
('pranav', 'med1', 'doctor', '2020-02-28', '3', '1'),
('pranav', 'med3', 'doctor', '2020-02-28', '3', '1'),
('pranav', 'med4', 'doctor', '2020-02-28', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `reid` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `labname` varchar(50) NOT NULL,
  `docname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`reid`, `username`, `rname`, `date`, `labname`, `docname`) VALUES
(1, 'pranav', 'CBC', '2020-02-28', 'MyLAB', 'doctor'),
(2, 'pranav', 'urine', '2020-02-28', 'MyLAB', 'doctor'),
(3, 'pranav', 'CBC', '2020-02-28', 'MyLAB', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `urine`
--

CREATE TABLE `urine` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `Color` varchar(255) NOT NULL,
  `Apperance` varchar(255) NOT NULL,
  `Glucose` varchar(255) NOT NULL,
  `Bilirubin` varchar(255) NOT NULL,
  `Ketone` varchar(255) NOT NULL,
  `SpecGrav` varchar(255) NOT NULL,
  `Blood` varchar(255) NOT NULL,
  `PH` varchar(255) NOT NULL,
  `Protein` varchar(255) NOT NULL,
  `Urobilinogen` varchar(255) NOT NULL,
  `Nitrite` varchar(255) NOT NULL,
  `LeukEsterase` varchar(255) NOT NULL,
  `MicroscopicIndicated` varchar(255) NOT NULL,
  `RBC` varchar(255) NOT NULL,
  `WBC` varchar(255) NOT NULL,
  `Bacteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `mstatus` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `bg` varchar(3) NOT NULL,
  `mnum` varchar(15) NOT NULL,
  `rnum` varchar(15) NOT NULL,
  `wnum` varchar(15) NOT NULL,
  `enum` varchar(15) NOT NULL,
  `adress` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `wstatus` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `rdate` date NOT NULL,
  `username` varchar(10) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `UID` varchar(12) NOT NULL,
  `docname` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`fname`, `mname`, `lname`, `DOB`, `mstatus`, `sex`, `bg`, `mnum`, `rnum`, `wnum`, `enum`, `adress`, `city`, `state`, `country`, `wstatus`, `occupation`, `rdate`, `username`, `pincode`, `UID`, `docname`) VALUES
('temp3', 'temp3', 'temp3', '1999-09-04', 'single', 'male', 'A+', '+919876543210', '+919876543210', '+919876543210', '+919876543210', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id est vitae felis tincidunt pellentesque vitae sed diam', 'temp', 'temp', 'temp', 'retired', 'business', '2020-02-27', 'doctor', '360370', '123412341234', 'doctor'),
('temp2', 'temp2', 'temp2', '1999-09-04', 'single', 'male', 'A+', '+919876543210', '+919876543210', '+919876543210', '+919876543210', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id est vitae felis tincidunt pellentesque vitae sed diam', 'temp', 'temp', 'temp', 'retired', 'business', '2020-02-27', 'lab', '360370', '123412341234', 'doctor'),
('temp', 'temp', 'temp', '1999-09-04', 'single', 'male', 'A+', '+919876543210', '+919876543210', '+919876543210', '+919876543210', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id est vitae felis tincidunt pellentesque vitae sed diam', 'temp', 'temp', 'temp', 'retired', 'business', '2020-02-27', 'pranav', '360370', '123412341234', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `role` varchar(3) NOT NULL,
  `expiry` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`username`, `password`, `role`, `expiry`) VALUES
('doctor', 'admin', '001', NULL),
('lab', 'admin', '011', NULL),
('pharma', 'admin', '010', NULL),
('pranav', 'admin', '000', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD KEY `username` (`username`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD KEY `username` (`username`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
