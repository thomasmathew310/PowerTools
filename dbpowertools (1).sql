-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 10:11 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbpowertools`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladminlogin`
--

CREATE TABLE IF NOT EXISTS `tbladminlogin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `adminusername` varchar(50) NOT NULL,
  `adminpassword` varchar(50) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbladminlogin`
--

INSERT INTO `tbladminlogin` (`adminid`, `adminusername`, `adminpassword`) VALUES
(1, 'meera', '1234'),
(2, 'tony', '3456');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomerlogin`
--

CREATE TABLE IF NOT EXISTS `tblcustomerlogin` (
  `customerid` int(11) NOT NULL AUTO_INCREMENT,
  `customername` varchar(50) NOT NULL,
  `customerhousename` varchar(150) NOT NULL,
  `districtid` int(11) NOT NULL,
  `locationid` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `aadharno` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tblcustomerlogin`
--

INSERT INTO `tblcustomerlogin` (`customerid`, `customername`, `customerhousename`, `districtid`, `locationid`, `pincode`, `email`, `contactno`, `aadharno`, `username`, `password`) VALUES
(1, 'gghjj', 'jhgffgg', 0, 2, 78900, '78900009854321', 0, 6789005432, 'uigyt', '5667'),
(2, 'gghjj', 'jhgffgg', 0, 2, 78900, '78900009854321', 0, 6789005432, 'uigyt', '5667'),
(3, 'jkjlkl', 'ghjjj', 0, 11, 78900, '9211234567890', 0, 86212345678, 'uigyt', '1234'),
(4, 'jkjlkl', 'ghjjj', 0, 11, 78900, '9211234567890', 0, 86212345678, 'uigyt', '1234'),
(5, 'jkjlkl', 'ghjjj', 0, 11, 78900, '9211234567890', 0, 86212345678, 'uigyt', '1234'),
(6, 'aswathy', 'mabcdefgh', 6, 0, 685607, '9211234567890', 0, 86212345678, 'aswathy123', 'aswathy@123'),
(7, '$name', '$address', 0, 0, 0, '$aadharno', 0, 0, '$username', '$password'),
(8, 'hima', 'safghjjk', 7, 0, 678, '6789098765', 0, 6789876543, 'aswathy123', '123'),
(9, 'Test', 'test', 11, 1, 345678, '1234567898765', 0, 345678987, 'test', '123456'),
(10, 'Hari', 'test', 10, 1, 78900, 'bghj@gmail.com', 1234567890, 9211234567890, 'meera123', '123456'),
(11, 'aswathy', 'ty', 14, 1, 78900, 'bghj@gmail.com', 6789876543, 8763245678, 'aswathy123', 'rt566'),
(12, 'ammu', 'abcd h', 7, 1, 588, 'ammu@gmail.com', 9087654321, 8763245678, 'ammu123', 'ammu@123'),
(13, 'meena', 'palackal(H) mulanmudy p.o vepinkandam', 12, 5, 78900, 'meena@gmail.com', 862123456780, 9211234567890, 'meena345', '2021'),
(14, 'aswathy', 'fsass', 13, 4, 78900, 'ammu@gmail.com', 6789876543, 6789098765, 'aswathy123', '678'),
(15, 'sree', 'ujkkl', 12, 5, 890, 'sree123@gmail.com', 86212345678, 907654, 'sree34', '300'),
(16, 'kll', 'hidlkd', 4, 4, 685607, 'meena@gmail.com', 86212345678, 9211234567890, 'hjkl', '789'),
(17, 'qwweer', 'ytrew', 7, 1, 789000, 'uiuijop@gmail.com', 12345678, 9877778, 'uigyt', '0000'),
(18, 'rini', 'jjigituystrw', 7, 1, 987654, 'abcd@gmail.com', 86212345677, 87632456780, 'rini678', '12345'),
(19, 'joel', 'gujkhljk', 12, 5, 78900, 'abcd@gmai.com', 86212345678, 9211234567890, 'joel234', '5678'),
(20, 'sujith', 'Puthenpurackel H Koodappulam', 6, 0, 686576, 'sujith@gmail.com', 9645689736, 56772982726728, 'sujith', 'sujith123');

-- --------------------------------------------------------

--
-- Table structure for table `tbldistrict`
--

CREATE TABLE IF NOT EXISTS `tbldistrict` (
  `districtid` int(11) NOT NULL AUTO_INCREMENT,
  `districtname` varchar(25) NOT NULL,
  PRIMARY KEY (`districtid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbldistrict`
--

INSERT INTO `tbldistrict` (`districtid`, `districtname`) VALUES
(1, 'Trivandram'),
(2, 'Kollam'),
(3, 'pathanamthitta'),
(4, 'Alappuzha'),
(5, 'Kottayam'),
(6, 'Idukki'),
(7, 'Ernakulam'),
(8, 'Thrissur'),
(9, 'Palakkad'),
(10, 'Malapuram'),
(11, 'Kozhikode'),
(12, 'Wayanad'),
(13, 'Kannur'),
(14, 'Kasargod');

-- --------------------------------------------------------

--
-- Table structure for table `tbllocation`
--

CREATE TABLE IF NOT EXISTS `tbllocation` (
  `districtid` int(11) NOT NULL,
  `locationid` int(11) NOT NULL AUTO_INCREMENT,
  `locationname` varchar(50) NOT NULL,
  PRIMARY KEY (`locationid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbllocation`
--

INSERT INTO `tbllocation` (`districtid`, `locationid`, `locationname`) VALUES
(7, 1, 'muvattupuzha'),
(0, 2, 'Thodupuzha'),
(6, 3, 'Thodupuzha'),
(7, 4, 'vannappuram'),
(3, 5, 'pandhalam');

-- --------------------------------------------------------

--
-- Table structure for table `tblpowertool`
--

CREATE TABLE IF NOT EXISTS `tblpowertool` (
  `powertoolid` int(50) NOT NULL AUTO_INCREMENT,
  `powertoolname` varchar(50) NOT NULL,
  `powertooldescription` varchar(50) NOT NULL,
  `powertoolcategory` varchar(50) NOT NULL,
  `powertoolprice` int(50) NOT NULL,
  `tool_stock` int(11) NOT NULL,
  `powertoolimage` varchar(50) NOT NULL,
  PRIMARY KEY (`powertoolid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tblpowertool`
--

INSERT INTO `tblpowertool` (`powertoolid`, `powertoolname`, `powertooldescription`, `powertoolcategory`, `powertoolprice`, `tool_stock`, `powertoolimage`) VALUES
(5, 'grinding machine', 'to grind workpieces', '6', 1500, 6, 'images.jpg'),
(20, 'drill machine', 'for drilling', '5', 1500, 6, 'dewalt-20v-hammer-drill-ecomm-via-amazon heavy.jpg'),
(21, 'driller', 'hand driller', '6', 700, 5, '8.jpg'),
(22, 'Air flower', 'Air Flower machine', '6', 1000, 12, 'leaf blower - Copy.jpg'),
(23, 'Hand plainer', 'hand plainer machine', '6', 900, 10, '4.jpg'),
(24, 'wood cutter', 'wood cutter machine', '5', 1500, 12, 'wood cutter heavy_.jpg'),
(26, 'power drill', 'power drill machine', '5', 1200, 8, '1.jpg'),
(27, 'Plainer ', 'Paliner machine', '5', 1000, 11, '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblpowertoolbooking`
--

CREATE TABLE IF NOT EXISTS `tblpowertoolbooking` (
  `bookingid` int(11) NOT NULL AUTO_INCREMENT,
  `customerid` int(11) NOT NULL,
  `powertoolid` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `requestdate` int(11) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `rentamount` int(11) NOT NULL,
  `bookingstatus` varchar(50) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tblpowertoolbooking`
--

INSERT INTO `tblpowertoolbooking` (`bookingid`, `customerid`, `powertoolid`, `categoryid`, `quantity`, `requestdate`, `fromdate`, `todate`, `rentamount`, `bookingstatus`) VALUES
(9, 20, 22, 6, 2, 22, '0000-00-00', '0000-00-00', 0, 'requested'),
(10, 20, 20, 5, 2, 22, '2022-11-07', '2022-11-09', 6000, 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `tblpowertoolcategory`
--

CREATE TABLE IF NOT EXISTS `tblpowertoolcategory` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(50) NOT NULL,
  `categorydescription` varchar(50) NOT NULL,
  PRIMARY KEY (`categoryid`),
  KEY `categoryid` (`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tblpowertoolcategory`
--

INSERT INTO `tblpowertoolcategory` (`categoryid`, `categoryname`, `categorydescription`) VALUES
(5, 'heavypowertool ', 'hard'),
(6, 'lightpowertool', 'light weight');

-- --------------------------------------------------------

--
-- Table structure for table `tblrating`
--

CREATE TABLE IF NOT EXISTS `tblrating` (
  `ratingid` int(11) NOT NULL AUTO_INCREMENT,
  `customerid` int(11) NOT NULL,
  `powertoolid` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_rating` int(11) NOT NULL,
  `customer_review` varchar(50) NOT NULL,
  `review_date` date NOT NULL,
  PRIMARY KEY (`ratingid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblrating`
--

INSERT INTO `tblrating` (`ratingid`, `customerid`, `powertoolid`, `customer_name`, `customer_rating`, `customer_review`, `review_date`) VALUES
(1, 3, 5, 'sujith', 5, 'good center', '2022-09-29'),
(2, 3, 22, 'sujith', 5, 'Nice', '2022-09-29'),
(3, 3, 22, 'sujith', 3, 'jah', '2022-09-29'),
(4, 3, 23, 'JOKXY', 5, 'HGHG', '2022-09-29'),
(5, 3, 24, 'GREESHMA', 4, 'BAD', '2022-09-29'),
(6, 3, 27, 'arun', 3, 'nice', '2022-10-26'),
(7, 3, 27, 'saranya', 5, 'good\n', '2022-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `tblrentdetails`
--

CREATE TABLE IF NOT EXISTS `tblrentdetails` (
  `rentid` int(11) NOT NULL AUTO_INCREMENT,
  `customerid` int(11) NOT NULL,
  `powertoolid` int(11) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `returndate` date NOT NULL,
  `adv_amount` int(11) NOT NULL,
  `bal_amount` int(11) NOT NULL,
  `total_rentamount` int(11) NOT NULL,
  `tool_qnty` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `rent_status` varchar(50) NOT NULL,
  PRIMARY KEY (`rentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tblrentdetails`
--

INSERT INTO `tblrentdetails` (`rentid`, `customerid`, `powertoolid`, `fromdate`, `todate`, `returndate`, `adv_amount`, `bal_amount`, `total_rentamount`, `tool_qnty`, `description`, `rent_status`) VALUES
(8, 20, 20, '2022-11-07', '2022-11-10', '2022-11-10', 2000, 7000, 9000, 2, 'work', 'Rent Completed');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
