-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 10:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_id` varchar(2) NOT NULL COMMENT 'Id',
  `admin_name` text NOT NULL COMMENT 'Name',
  `admin_phone_no` varchar(45) NOT NULL COMMENT 'Phone number',
  `admin_dob` date DEFAULT NULL COMMENT 'Date of Birth',
  `admin_email` varchar(20) DEFAULT NULL COMMENT 'Email ID',
  `admin_address` varchar(150) NOT NULL COMMENT 'contact Address '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_id`, `admin_name`, `admin_phone_no`, `admin_dob`, `admin_email`, `admin_address`) VALUES
('1', 'Mruthyunjaya M R', '9591776169', '1999-09-04', 'muthuraj15009@gmail.', 'hiriyur,chitrdurga'),
('2', 'leelananda', '123', '2020-12-01', 'leela@gmail.com', 'manglore'),
('3', 'prathap', '12345', '2020-12-02', 'prathap@gmail.com', 'chikkamanglore');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(15) DEFAULT NULL COMMENT 'username',
  `password` varchar(10) DEFAULT NULL COMMENT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('muthu', 'muthu123'),
('prathap', 'prathap123'),
('leela', 'leela123');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Package_id` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `Package_name` varchar(40) NOT NULL,
  `Amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Package_id`, `Package_name`, `Amount`) VALUES
('121', 'preliminary', 800),
('122', 'Wt. gain', 1500),
('123', 'Wt.loss', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `payment_no` int(244) NOT NULL COMMENT 'Payment Number',
  `user_id` varchar(6) NOT NULL COMMENT 'User ID',
  `amount` int(244) NOT NULL COMMENT 'amount paid',
  `payment_type` varchar(20) NOT NULL COMMENT 'Payment Type',
  `payment_date` date NOT NULL COMMENT 'Date of Payment'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`payment_no`, `user_id`, `amount`, `payment_type`, `payment_date`) VALUES
(12, '202102', 1500, 'cash', '2021-01-09'),
(13, '202102', 500, 'google_pay', '2020-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_assign`
--

CREATE TABLE `trainer_assign` (
  `assignment_no` int(3) NOT NULL,
  `trainer_id` varchar(2) NOT NULL,
  `user_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer_assign`
--

INSERT INTO `trainer_assign` (`assignment_no`, `trainer_id`, `user_id`) VALUES
(18, 'T3', '202102'),
(20, 'T2', '202101'),
(22, 'T3', '202101');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_details`
--

CREATE TABLE `trainer_details` (
  `trainer_id` varchar(2) NOT NULL COMMENT 'Trainer ID',
  `trainer_name` varchar(35) NOT NULL COMMENT 'Name',
  `trainer_dob` date DEFAULT NULL COMMENT 'Date of Birth',
  `trainer_phone_no` varchar(45) NOT NULL COMMENT 'Phone Number',
  `trainer_email` varchar(20) DEFAULT NULL COMMENT 'Email ID',
  `trainer_address` varchar(150) NOT NULL COMMENT 'Address'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer_details`
--

INSERT INTO `trainer_details` (`trainer_id`, `trainer_name`, `trainer_dob`, `trainer_phone_no`, `trainer_email`, `trainer_address`) VALUES
('T1', 'Ramesh M V', '2021-01-01', '123', 'r121@gmail.com', 'babbur'),
('T2', 'suresh', '2021-01-02', '124', 's121@gmail.com', 'haalur'),
('T3', 'rahul', '2021-01-08', '125', 'leela@gmail.com', 'Haalur');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` varchar(6) NOT NULL COMMENT 'User ID',
  `user_name` text NOT NULL COMMENT 'Name',
  `user_phone_no` varchar(45) NOT NULL COMMENT 'Phone Number',
  `user_dob` date DEFAULT NULL COMMENT 'Date of Birth',
  `user_email` varchar(20) DEFAULT NULL COMMENT 'Email ID',
  `user_address` varchar(150) NOT NULL COMMENT 'Address'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_name`, `user_phone_no`, `user_dob`, `user_email`, `user_address`) VALUES
('202101', 'ramu', '12334455', '2021-01-01', 'ravi123@gmai.com', 'harihara'),
('202102', 'mahesh', '99999999', '2021-01-02', 'muthuraj15009@gmail.', 'bang');

-- --------------------------------------------------------

--
-- Table structure for table `user_package`
--

CREATE TABLE `user_package` (
  `Numbers` int(100) NOT NULL COMMENT 'no of assigned packages',
  `Package_id` varchar(40) NOT NULL COMMENT 'Package ID',
  `user_id` varchar(6) NOT NULL COMMENT 'User ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_package`
--

INSERT INTO `user_package` (`Numbers`, `Package_id`, `user_id`) VALUES
(1, '121', '202102'),
(3, '123', '202101');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_id`) USING BTREE,
  ADD UNIQUE KEY `admin_phone_no` (`admin_phone_no`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Package_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`payment_no`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `trainer_assign`
--
ALTER TABLE `trainer_assign`
  ADD PRIMARY KEY (`assignment_no`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Indexes for table `trainer_details`
--
ALTER TABLE `trainer_details`
  ADD PRIMARY KEY (`trainer_id`),
  ADD UNIQUE KEY `trainer_phone_no` (`trainer_phone_no`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`) USING BTREE,
  ADD UNIQUE KEY `user_phone_no` (`user_phone_no`);

--
-- Indexes for table `user_package`
--
ALTER TABLE `user_package`
  ADD PRIMARY KEY (`Numbers`),
  ADD KEY `package_id` (`Package_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `payment_no` int(244) NOT NULL AUTO_INCREMENT COMMENT 'Payment Number', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `trainer_assign`
--
ALTER TABLE `trainer_assign`
  MODIFY `assignment_no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_package`
--
ALTER TABLE `user_package`
  MODIFY `Numbers` int(100) NOT NULL AUTO_INCREMENT COMMENT 'no of assigned packages', AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD CONSTRAINT `payment_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`);

--
-- Constraints for table `trainer_assign`
--
ALTER TABLE `trainer_assign`
  ADD CONSTRAINT `c1` FOREIGN KEY (`trainer_id`) REFERENCES `trainer_details` (`trainer_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `c2` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`) ON DELETE NO ACTION;

--
-- Constraints for table `user_package`
--
ALTER TABLE `user_package`
  ADD CONSTRAINT `user_package_ibfk_1` FOREIGN KEY (`Package_id`) REFERENCES `package` (`Package_id`),
  ADD CONSTRAINT `user_package_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
