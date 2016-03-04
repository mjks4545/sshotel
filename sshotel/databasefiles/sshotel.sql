-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2015 at 07:48 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sshotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Reg_No` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `Profession` varchar(255) NOT NULL,
  `Id_Card_Passport` varchar(255) NOT NULL,
  `Date of Issue` date NOT NULL,
  `Telephon_No` varchar(255) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Company` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This is customer table for entering customer initial data and registering him if not registered already...';

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Emp_No` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Role_Or_Title` varchar(255) DEFAULT NULL,
  `Notes` varchar(255) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='all the information regarding employee or other things will be stores here';

-- --------------------------------------------------------

--
-- Table structure for table `felio`
--

CREATE TABLE IF NOT EXISTS `felio` (
  `F_No` int(11) NOT NULL,
  `Room_Rent` decimal(10,0) NOT NULL,
  `Food_Vn` decimal(10,0) NOT NULL,
  `Food_Rs` decimal(10,0) NOT NULL,
  `Hall_Vn` decimal(10,0) NOT NULL,
  `Hall_Rs` decimal(10,0) NOT NULL,
  `Mini_Bar_Vn` decimal(10,0) NOT NULL,
  `Mini_Bar_Rs` decimal(10,0) NOT NULL,
  `Laundry_Vn` decimal(10,0) NOT NULL,
  `Landry_Rs` decimal(10,0) NOT NULL,
  `Misc_Vn` decimal(10,0) NOT NULL,
  `Misc_Rs` decimal(10,0) NOT NULL,
  `Remarks` decimal(10,0) NOT NULL,
  `Reg_No` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `occupancies`
--

CREATE TABLE IF NOT EXISTS `occupancies` (
  `O_No` int(11) NOT NULL,
  `Room_No` int(11) NOT NULL,
  `Reg_No` int(11) NOT NULL,
  `Emp_No` int(11) NOT NULL,
  `No_Persons` int(11) NOT NULL,
  `Arrival_Date` date NOT NULL,
  `Arrival_Time` time NOT NULL,
  `From` varchar(255) NOT NULL,
  `Departure_Date` date NOT NULL,
  `Departure_TIme` time NOT NULL,
  `Destination` varchar(255) NOT NULL,
  `Purpose` varchar(255) NOT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_udpated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='some_date_to_be_added';

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `P_No` int(11) NOT NULL,
  `Paid` decimal(10,0) NOT NULL,
  `Due` decimal(10,0) NOT NULL,
  `Emp_No` int(11) NOT NULL,
  `Reg_No` int(11) NOT NULL,
  `Total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='payments table for everything';

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `Room_No` int(11) NOT NULL,
  `Room_Type` varchar(255) DEFAULT NULL,
  `Room_Rent` decimal(10,0) DEFAULT NULL,
  `Notes` varchar(255) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `Room_Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='this is room table for all the rooms in hotel';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Reg_No`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_No`);

--
-- Indexes for table `felio`
--
ALTER TABLE `felio`
  ADD PRIMARY KEY (`F_No`);

--
-- Indexes for table `occupancies`
--
ALTER TABLE `occupancies`
  ADD PRIMARY KEY (`O_No`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`P_No`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Reg_No` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Emp_No` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `felio`
--
ALTER TABLE `felio`
  MODIFY `F_No` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `P_No` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `Room_No` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
