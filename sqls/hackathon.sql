-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 09:31 AM
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
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `cbc`
--

CREATE TABLE `cbc` (
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

-- --------------------------------------------------------

--
-- Table structure for table `urine`
--

CREATE TABLE `urine` (
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cbc`
--
ALTER TABLE `cbc`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `urine`
--
ALTER TABLE `urine`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
