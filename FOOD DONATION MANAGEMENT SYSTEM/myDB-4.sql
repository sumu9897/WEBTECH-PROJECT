-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2023 at 02:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `address_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `address_name`) VALUES
(1, 'Adabar'),
(2, 'Badda'),
(3, 'Bangsal'),
(4, 'Bimanbandar'),
(5, 'Cantonment'),
(6, 'Chowkbazer'),
(7, 'Darus Salam'),
(8, 'Demra'),
(9, 'Dhakshinkhan'),
(10, 'Danmondi'),
(11, 'Gendaria'),
(12, 'Gulshan'),
(13, 'Hazaribagh'),
(14, 'Kadamtali'),
(15, 'Kafrul'),
(16, 'Kalabagan'),
(17, 'Kamrangirchar'),
(18, 'Khilgaon'),
(19, 'Khilkhet'),
(20, 'Kotwali'),
(21, 'Lalbagh'),
(22, 'Mirpur'),
(23, 'Mohammadpur'),
(24, 'New Market'),
(25, 'Pallabi'),
(26, 'Paltan'),
(30, 'Panthapath'),
(31, 'Ramna'),
(32, 'Rampur'),
(33, 'Sabujbagh'),
(34, 'Shah Ali'),
(35, 'Sher-e-Bangla Nagar'),
(36, 'Shyampur'),
(37, 'Sutrapur'),
(38, 'Tejgaon'),
(39, 'Tuareg'),
(40, 'Uttar Khan'),
(41, 'Vatara'),
(42, 'Wari');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_mail` varchar(50) NOT NULL,
  `password` varchar(90) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_phone` varchar(50) NOT NULL,
  `admin_image` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_mail`, `password`, `admin_name`, `admin_phone`, `admin_image`) VALUES
(1, 'admin@gmail.com', 'Admin@123', 'MD SUMON', '01731057540', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` int(10) NOT NULL,
  `donor_mail` varchar(50) NOT NULL,
  `password` varchar(90) NOT NULL,
  `donor_name` varchar(50) NOT NULL,
  `donor_phone` varchar(50) NOT NULL,
  `donor_image` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `donor_mail`, `password`, `donor_name`, `donor_phone`, `donor_image`) VALUES
(1, 'maimona@gmail.com', 'Maimona@12', 'Maimona Rahman Farjana', '01756426162', 'N/A'),
(2, 'shakil@gmail.com', 'Shakil@12', 'MD SHAKIL', '0171032828', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `ID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `person` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`ID`, `name`, `description`, `date`, `address`, `person`, `phone`, `image`) VALUES
(9, 'Rice, Dal , Chingri', 'Good', '2023-04-24', 'Basundara', 'Rahim', '01987657652', ''),
(14, 'Mango', 'Good', '2023-05-02', 'Shahajadpur, Gulshan', 'MD JAMAL', '01903846166', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_image` varchar(50) DEFAULT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_mail`, `password`, `user_name`, `user_phone`, `user_image`, `user_gender`, `user_address`) VALUES
(1, 'rislam@gmail.com', 'Ras@1234', 'Rashedul Islam', '01717171777', 'N/A', 'Male', 'Mirpur 2');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `fName`, `lName`, `Phone`, `Email`, `Message`) VALUES
(1, 'MD', 'SUMON', '01731057540', 'sumon.bncd@gmail.com', 'hello'),
(2, 'MOHAMMAD', 'JIBON', '01903846166', 'mohammad@gmail.com', 'Nice word'),
(3, 'MD', 'SHAKIL', '0171032828', 'shakil.bncd@gmail.com', 'Thank you');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
