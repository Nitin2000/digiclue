-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 10:49 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalclue`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `Chat_Id` int(3) NOT NULL,
  `Chat_C_Name` varchar(50) NOT NULL,
  `Customer_Message` text NOT NULL,
  `Admin  message` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=REDUNDANT;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`Chat_Id`, `Chat_C_Name`, `Customer_Message`, `Admin  message`, `date_time`) VALUES
(1, '', 'hi', '', '2021-05-17 20:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_id` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Password` varchar(8096) NOT NULL,
  `Email_Id` varchar(50) NOT NULL,
  `Phone_no` varchar(10) NOT NULL,
  `Address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_id`, `Name`, `Password`, `Email_Id`, `Phone_no`, `Address`) VALUES
(1, 'nitin', 'Password', 'nitin@gmail.com', '9803472389', 'adczzs'),
(3, 'nitin bhala', 'bhala', 'nitinbhala@gmail.com', '9803472389', ''),
(4, 'kritika', 'password', 'afsfasdf@gmail.com', '9803472389', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `O_ID` int(5) NOT NULL,
  `O_C_Name` varchar(30) NOT NULL,
  `O_S_ID` int(5) NOT NULL,
  `Account_Number` varchar(25) NOT NULL,
  `O_Reciept` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`O_ID`, `O_C_Name`, `O_S_ID`, `Account_Number`, `O_Reciept`) VALUES
(1001, 'nitin', 101, '9803472389', 'reciept1.html');

-- --------------------------------------------------------

--
-- Table structure for table `paymentdetails`
--

CREATE TABLE `paymentdetails` (
  `PaymentId` int(5) NOT NULL,
  `Payer_Name` varchar(20) NOT NULL,
  `PayUsing` varchar(30) NOT NULL,
  `Payment_Number` varchar(10) NOT NULL,
  `Payed_Amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentdetails`
--

INSERT INTO `paymentdetails` (`PaymentId`, `Payer_Name`, `PayUsing`, `Payment_Number`, `Payed_Amount`) VALUES
(1, 'Nitin bhala', 'Paytm', '9803472389', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `S_Id` int(5) NOT NULL,
  `S_PLAN` varchar(50) NOT NULL,
  `S_PRICE` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`S_Id`, `S_PLAN`, `S_PRICE`) VALUES
(101, 'Email Marketing', 2000),
(102, 'Social Media Marketing', 2500),
(103, 'SEO', 4000),
(104, 'Graphic Designing', 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`Chat_Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`O_ID`);

--
-- Indexes for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  ADD PRIMARY KEY (`PaymentId`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`S_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `Chat_Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cust_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `O_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  MODIFY `PaymentId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `S_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
