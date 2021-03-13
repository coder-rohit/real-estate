-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 08:14 PM
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
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `name`, `username`, `phone`, `email`, `dob`, `password`) VALUES
(1, 'Rohit Panchal', 'irohit', '7876123777', 'rohit.panchal.737@gm', '05121999', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `admin_property`
--

CREATE TABLE `admin_property` (
  `ID` int(10) NOT NULL,
  `for_to` varchar(10) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `property_name` varchar(20) DEFAULT NULL,
  `buil_deal_name` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `property_type` varchar(20) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `marketed_by` varchar(50) DEFAULT NULL,
  `propdesc` varchar(1000) DEFAULT NULL,
  `img_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_property`
--

INSERT INTO `admin_property` (`ID`, `for_to`, `location`, `property_name`, `buil_deal_name`, `address`, `property_type`, `price`, `marketed_by`, `propdesc`, `img_name`) VALUES
(31, 'sale', 'Model Town', 'M3M Skycity', 'M3M India', '#46, SCO 13', 'Residential', '72 Lac', 'Mapsco Builders', 'This is a nice place', 'top1.jpg'),
(33, 'sale', 'Model Town', 'Uttam Nagar Floors', 'Aggarwal Real Estate', 'Uttam Nagar', '2, 3 BHK Flats', '19.5 Lac', 'ARE Infra Heights', 'Nice One', 'top4.jpg'),
(34, 'sale', 'Panipat', 'Bharat Luxury Homes', 'Bharat Real Estates', 'Uttam Nagar', 'Massive Flats', '55.5 Lac', 'Bharat Homes', 'Nice One', 'pexels-4.jpg'),
(35, 'sale', 'Sec 4', 'Agent Hero Homes', 'Greater Home', 'Rohatak', 'Residential', '30.5 Cr', 'Agent Hero', 'Good', 'uploadprop4.jpg'),
(36, 'sale', 'Sec 34', 'J R Desiginers Floor', 'J R Developers', 'Rohini, Sec-7', 'Special Use', '30.5 Lac', 'J R Developers', 'Nice', 'uploadprop6.jpg'),
(37, 'sale', 'Sec 32', 'DLF King Homes', 'DLF', 'Greater Noida', 'Residential', '60 Cr', 'DLF limited', 'good', 'uploadprop.jpg'),
(38, 'rent', 'Sec 6', 'Seven Eleven', '7-11 Builders', 'Mansarover Park, Shadhra', 'Industrial', '72 Lac', 'Aket 7-11', 'Nice', 'uploadprop2.jpg'),
(40, 'rent', 'Dubai', 'Burj Khalifa', 'Samsung C&T', 'Downtown Dubai - Arab Emirates', 'Special Use', '1090 Cr', 'Emaar Properties, ARAB EMIRATES', 'Largest Building in the worls', 'burjkhalifa.jpg'),
(43, 'sale', 'Ghrounda', 'Swastik Appartment', 'Real Builders', 'Near Bus Stand, Nagla Chowk', 'Residential', '60 Lac', 'Swastik Pvt Ltd', 'm', 'uploadprop5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `ID` int(10) NOT NULL,
  `Registrar` varchar(50) DEFAULT NULL,
  `Contact_No` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `For_To` varchar(10) DEFAULT NULL,
  `Property_Type` varchar(50) DEFAULT NULL,
  `Location` varchar(1000) DEFAULT NULL,
  `Budget` varchar(50) DEFAULT NULL,
  `Address` varchar(2000) DEFAULT NULL,
  `Property_Desc` varchar(2000) DEFAULT NULL,
  `date_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`ID`, `Registrar`, `Contact_No`, `Email`, `For_To`, `Property_Type`, `Location`, `Budget`, `Address`, `Property_Desc`, `date_time`) VALUES
(5, 'Aman', '+917876123777', 'rohit.panchal.737@gmail.com', 'sale', 'Commercial', 'Model Town', '30L - 50L', 'House No. 298, Moti Nagar Karnal', 'dacd\r\n', '2021-03-09 21:04:56.769630'),
(6, 'Rohit Panchal', '+917876123777', 'rohit.panchal.737@gmail.com', 'sale', 'Commercial', 'Model Town', '30L - 50L', 'House No. 298, Moti Nagar Karnal', 's', '2021-03-09 21:05:29.240981'),
(9, 'Turrent Singh', '78586659665', 'rovsfjk@fakemai.com', 'sale', 'Commercial', 'Sec 32/33/34', '2Cr - 5Cr', 'Gali no. 9, Vikas Colony,  Karnal\r\nVikas Colony', 'Vhi aake baat krunga dhundke rkhna', '2021-03-12 20:45:23.814188'),
(10, 'hello', 'da', 'dw@gmail.com', 'rent', 'Commercial', 'Karnal', '30L - 50L', 'cds', 'DC\r\n', '2021-03-13 18:33:12.187008'),
(12, 'Rohit Panchal', '+917876123777', 'rohit.panchal.737@gmail.com', 'rent', 'Residential', 'Model Town', '1Cr - 2Cr', 'House No. 298, Moti Nagar Karnal', 'CASDC', '2021-03-13 18:35:38.619412');

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Contact_Number` varchar(20) DEFAULT NULL,
  `Property_Type` varchar(50) DEFAULT NULL,
  `Location` varchar(50) DEFAULT NULL,
  `Budget` varchar(20) DEFAULT NULL,
  `Message` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`ID`, `Name`, `Contact_Number`, `Property_Type`, `Location`, `Budget`, `Message`) VALUES
(1, 'Rohit Panchal', '+917876123777', 'Commercial', 'Karnal', '80L - 1.2Cr', 'i want to buy now I have a lot of money'),
(2, 'Rohit Panchal', '917876123777', 'Special Use', 'Model Town', '80L - 1.2Cr', 'I have a lot of money'),
(16, 'Karan ', '07876123777', 'Industrial', 'Sec 32/33/34', '80L - 1.2Cr', 'I want to buy now this these'),
(17, 'Rohit Panchal', '+917876123777', 'Residential', 'Karnal', '80L - 1.2Cr', 'asdcasc'),
(19, 'Laala', '85849', 'Commercial', 'Model Town', '50L - 80L', 'FVadvadf'),
(20, 'Rohit Panchal', '+917876123777', 'Industrial', 'Model Town', '50L - 80L', 'Aegrhnhfd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin_property`
--
ALTER TABLE `admin_property`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `requirement`
--
ALTER TABLE `requirement`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_property`
--
ALTER TABLE `admin_property`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `requirement`
--
ALTER TABLE `requirement`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
