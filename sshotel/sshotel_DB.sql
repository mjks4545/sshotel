-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 02, 2016 at 05:38 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `sshotel-db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `bill`
-- 

CREATE TABLE `bill` (
  `id` int(11) NOT NULL auto_increment,
  ` customer_name` varchar(50) default NULL,
  `address` varchar(100) default NULL,
  `date_of_arrival` datetime default NULL,
  `departure_date` datetime default NULL,
  ` rent_of_room` int(11) default NULL,
  `no_of_person` int(11) default NULL,
  `no_of_room` int(11) default NULL,
  `time_arr` int(11) default NULL,
  `time_dep` int(11) default NULL,
  `remarks` varchar(200) default NULL,
  `date_updated` datetime default NULL,
  `date_added` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `bill`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `check_in`
-- 

CREATE TABLE `check_in` (
  `check_id` int(11) default NULL,
  `purpose_of_visit` varchar(50) default NULL,
  `arrival_date` datetime default NULL,
  `arr_time` time default NULL,
  `from` varchar(50) default NULL,
  `dep_date` datetime default NULL,
  `dep_time` time default NULL,
  `destination` varchar(50) default NULL,
  `room_no` int(100) default NULL,
  `no_of_person` int(50) default NULL,
  `rate` int(100) default NULL,
  `advance` int(100) default NULL,
  `remarks` varchar(100) default NULL,
  `reg_n0` varchar(100) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `check_in`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `customer`
-- 

CREATE TABLE `customer` (
  `customer_id` int(11) default NULL,
  `name` varchar(50) default NULL,
  `profession` varchar(50) default NULL,
  `nationality` varchar(50) default NULL,
  `telephone_no` int(11) default NULL,
  `address` varchar(50) default NULL,
  `date_of_issue` datetime default NULL,
  `date_of_birth` datetime default NULL,
  `company_name` datetime default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `customer`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `folio`
-- 

CREATE TABLE `folio` (
  `folio_id` int(11) default NULL,
  `room_no` int(11) default NULL,
  `customer_id` int(11) default NULL,
  `bill_no` int(11) default NULL,
  `date` datetime default NULL,
  `room_rent` int(11) default NULL,
  `food` varchar(50) default NULL,
  `food_vn` varchar(50) default NULL,
  `food_rs` varchar(50) default NULL,
  `hall` int(11) default NULL,
  `hall_vn` varchar(50) default NULL,
  `hall_rs` varchar(50) default NULL,
  `mini_bar` varchar(50) default NULL,
  `mini_vn` varchar(50) default NULL,
  `mini_rs` varchar(50) default NULL,
  `laundary` varchar(50) default NULL,
  `laundary_vn` varchar(50) default NULL,
  `laundary_rs` varchar(50) default NULL,
  `misc` varchar(50) default NULL,
  `misc_vn` varchar(50) default NULL,
  `misc_rs` varchar(50) default NULL,
  `remarks` varchar(500) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `folio`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `room`
-- 

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_status` varchar(500) default NULL,
  `room_type` varchar(500) default NULL,
  `date_updated` datetime default NULL,
  `date_added` datetime default NULL,
  PRIMARY KEY  (`room_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `room`
-- 

