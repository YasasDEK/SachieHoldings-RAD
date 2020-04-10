-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 10, 2020 at 04:46 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rad`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `custNIC` varchar(12) NOT NULL,
  `custPassword` char(32) NOT NULL COMMENT 'size is 32 characters. suitable for md5 hash algorithm. if you use another algorithm, change the size\\n',
  `custPhoto` varchar(50) DEFAULT NULL,
  `custName` varchar(50) NOT NULL,
  `custLicence` char(8) DEFAULT NULL COMMENT 'customer driver license number',
  `custDOB` datetime NOT NULL,
  `custAddress` varchar(60) NOT NULL,
  `custTelephone` varchar(10) NOT NULL,
  `custEmail` varchar(45) NOT NULL,
  `custStatus` int(11) NOT NULL DEFAULT '1' COMMENT '0 : deleted\n1 : active\n',
  PRIMARY KEY (`custNIC`),
  UNIQUE KEY `cust_driverlicence_UNIQUE` (`custLicence`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custNIC`, `custPassword`, `custPhoto`, `custName`, `custLicence`, `custDOB`, `custAddress`, `custTelephone`, `custEmail`, `custStatus`) VALUES
('963064292v', '6c8349cc7260ae62e3b1396831a8398f', 'http://[::1]/SYS/uploads/team-mem-4.png', 'Rajitha Dulanjith', '56789123', '1996-11-01 00:00:00', '13 Thunmulla Junction Colombo', '0710540555', 'rajitha@gmail.com', 1),
('975630870v', '202cb962ac59075b964b07152d234b70', 'http://[::1]/SYS/uploads/team-mem-2.png', 'Sanjali Nanayakkara', '12345678', '1997-03-03 00:00:00', '12 Temple Road Maharagama', '0112837860', 'sanjalisupunnadi@gmail.com', 1),
('975630871v', 'c20ad4d76fe97759aa27a0c99bff6710', 'http://[::1]/SYS/uploads/_103597778_bluestarfilter', 'ss ss', '12345671', '1997-09-08 00:00:00', '12 hh gg', '0710540555', 's@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
CREATE TABLE IF NOT EXISTS `driver` (
  `drvNIC` varchar(12) NOT NULL,
  `drvFirstName` varchar(50) NOT NULL,
  `drvLastName` varchar(50) NOT NULL,
  `drvEmail` varchar(50) NOT NULL,
  `drvPassword` varchar(32) NOT NULL COMMENT 'size is 32 characters. suitable for md5 hash algorithm. if you use another algorithm, change the size',
  `drvLicense` char(8) DEFAULT NULL COMMENT 'driver license number',
  `drvDOB` date NOT NULL,
  `drvAddress` varchar(60) NOT NULL,
  `drvMobile` int(11) NOT NULL,
  `drvLAND` int(11) NOT NULL,
  `empNIC` varchar(12) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `sum` int(11) NOT NULL DEFAULT '0',
  `drvimg` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`drvNIC`),
  KEY `drv-emp_idx` (`empNIC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`drvNIC`, `drvFirstName`, `drvLastName`, `drvEmail`, `drvPassword`, `drvLicense`, `drvDOB`, `drvAddress`, `drvMobile`, `drvLAND`, `empNIC`, `count`, `sum`, `drvimg`) VALUES
('1', '1', '1', 'ni@gmail.com', '202cb962ac59075b964b07152d234b70', '123', '1997-08-13', 'asd', 1, 1, '123456789v', 0, 0, 'http://[::1]/SYS/upload/yasas2.jpg'),
('123456788v', 'sunil', 'perera', 'yd@gmail.com', '202cb962ac59075b964b07152d234b70', '78451296', '0000-00-00', '345/78, kum mw,New town', 114785236, 115478896, '966862572v', 0, 0, 'http://[::1]/SYS/upload/service3-img.png'),
('972262560v', 'Yasas', 'Dilshan', 'ydilshan.ek@gmail.com', '202cb962ac59075b964b07152d234b70', '15948726', '1997-08-13', '479/12,Kumara mawatha,New Town', 772145088, 112419958, '966862572v', 2, 6, NULL),
('972262561v', 'Nisali', 'de Silva', 'yasas@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', '15948263', '1995-10-12', '11/2,Straight road,Rajagiriya', 772145099, 112415587, '966862572v', 2, 6, 'http://[::1]/SYS/upload/team-mem-thumb-3.png');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `empNIC` varchar(12) NOT NULL,
  `emPassword` char(32) NOT NULL COMMENT 'size is 32 characters. suitable for md5 hash algorithm. if you use another algorithm, change the size',
  `empPhoto` varchar(50) DEFAULT NULL,
  `empName` varchar(50) NOT NULL,
  `empAddress` varchar(60) NOT NULL,
  `empTelephone` varchar(10) NOT NULL,
  `empRights` int(11) NOT NULL DEFAULT '1' COMMENT '1 : lowest privilage level',
  `empStatus` int(11) NOT NULL DEFAULT '1' COMMENT '0 : Deleted\n1 : Active',
  PRIMARY KEY (`empNIC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empNIC`, `emPassword`, `empPhoto`, `empName`, `empAddress`, `empTelephone`, `empRights`, `empStatus`) VALUES
('123456789v', '123', 'Screenshot (5).png', 'Kamal Nimal', 'temp Rd, temp town ', '1234566789', 0, 0),
('896754345v', '123', 'team-mem-thumb-4.png', 'Kamal', 'asdf', '1113426543', 1, 0),
('966862572v', '123', 'team-mem-2.png', 'Hasini Tharushika', 'No 48, Gunasekara Road, Fort, Matara', '0772087177', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

DROP TABLE IF EXISTS `other`;
CREATE TABLE IF NOT EXISTS `other` (
  `attribute` varchar(50) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`attribute`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `pmtID` int(11) NOT NULL AUTO_INCREMENT,
  `resID` int(11) NOT NULL,
  `empNIC` varchar(12) NOT NULL,
  `pmtAmount` int(11) NOT NULL,
  `pmtStatus` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pmtID`),
  KEY `pmt-res_idx` (`resID`),
  KEY `pmt-emp_idx` (`empNIC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE IF NOT EXISTS `promo` (
  `prCode` varchar(10) NOT NULL,
  `prStart` datetime NOT NULL COMMENT 'promotion start date',
  `prEnd` datetime DEFAULT NULL COMMENT 'promotion end date',
  `prDiscount` int(11) NOT NULL,
  `empNIC` varchar(12) NOT NULL,
  PRIMARY KEY (`prCode`),
  KEY `pr-emp_idx` (`empNIC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `resID` int(11) NOT NULL AUTO_INCREMENT,
  `custNIC` varchar(12) NOT NULL,
  `drvNIC` varchar(12) NOT NULL,
  `vhRegNO` varchar(8) NOT NULL,
  `resPick` datetime NOT NULL COMMENT 'vehicle pickup date',
  `resDrop` datetime NOT NULL COMMENT 'vehicle drop off date',
  `estCost` int(11) DEFAULT NULL,
  `totCost` int(11) DEFAULT NULL,
  `resStatus` int(11) NOT NULL DEFAULT '1' COMMENT '0 : deleted\n1 : pending\n2 : completed',
  PRIMARY KEY (`resID`),
  KEY `res-cust_idx` (`custNIC`),
  KEY `res-drv_idx` (`drvNIC`),
  KEY `res-vh_idx` (`vhRegNO`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`resID`, `custNIC`, `drvNIC`, `vhRegNO`, `resPick`, `resDrop`, `estCost`, `totCost`, `resStatus`) VALUES
(18, '975630870v', '972262560v', 'ABC-0001', '2019-07-05 00:00:00', '2019-07-08 00:00:00', 4500, NULL, 3),
(20, '975630870v', '972262560v', 'ABC-0003', '2019-07-10 00:00:00', '2019-07-24 00:00:00', 210000, NULL, 3),
(21, '975630870v', '972262560v', 'ABC-0002', '2019-08-01 00:00:00', '2019-08-05 00:00:00', 10000, NULL, 1),
(22, '975630870v', '123456788v', 'ABC-0001', '2019-07-05 00:00:00', '2019-07-10 00:00:00', 7500, NULL, 1),
(23, '963064292v', '972262560v', 'ABC-0001', '2019-08-05 00:00:00', '2019-08-07 00:00:00', 3000, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `tyID` int(11) NOT NULL AUTO_INCREMENT,
  `tyName` varchar(45) NOT NULL,
  `tyPassenger` int(11) NOT NULL COMMENT 'nomber of passengers',
  `tyDRate` int(11) NOT NULL,
  `tyWParcent` double DEFAULT '0' COMMENT 'discount percentage when rent duration > 7 days',
  `tyMPercent` double DEFAULT '0' COMMENT 'discount percentage when rent duration > 4weeks (28days)',
  `tyDescription` text,
  `tyPhoto` varchar(50) DEFAULT NULL,
  `tyStatus` int(11) NOT NULL DEFAULT '1' COMMENT '0 : deleted1 : active',
  PRIMARY KEY (`tyID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`tyID`, `tyName`, `tyPassenger`, `tyDRate`, `tyWParcent`, `tyMPercent`, `tyDescription`, `tyPhoto`, `tyStatus`) VALUES
(5, 'Car', 4, 1500, 0.95, 0.93, 'this is updated', 'Uploads/car-23.jpg', 0),
(6, 'Van', 11, 2500, 0.96, 0.97, 'A van is a type of road vehicle used for transporting goods or people. Depending on the type of van, it can be bigger or smaller than a truck and SUV, and bigger than a common car. There is some varying in the scope of the word across the different English-speaking countries. The smallest vans, microvans, are used for transporting either goods or people in tiny quantities. Mini MPVs, Compact MPVs, and MPVs are all small vans usually used for transporting people in small quantities. Larger vans with passenger seats are used for institutional purposes, such as transporting students. Larger vans with only front seats are often used for business purposes, to carry goods and equipment. Specially-equipped vans are used by television stations as mobile studios. Postal services and courier companies use large step vans to deliver packages. ', 'Uploads/hiacevan_super-GL.png', 1),
(7, 'Bus', 56, 7500, 0.92, 0.9, 'A bus (contracted from omnibus,[1] with variants multibus, motorbus, autobus, etc.) is a road vehicle designed to carry many passengers. Buses can have a capacity as high as 300 passengers.[2] The most common type of bus is the single-deck rigid bus, with larger loads carried by double-decker and articulated buses, and smaller loads carried by midibuses and minibuses; coaches are used for longer-distance services. Many types of buses, such as city transit buses and inter-city coaches, charge a fare. Other types, such as elementary or secondary school buses or shuttle buses within a post-secondary education campus do not charge a fare. In many jurisdictions, bus drivers require a special licence above and beyond a regular driver\'s licence. ', 'Uploads/_103597778_bluestarfilteringbus6-2.jpg', 1),
(9, 'mini car', 3, 3000, 0.95, 0.94, 'mini car', 'Uploads/car-4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `vhRegNo` varchar(8) NOT NULL,
  `tyID` int(11) NOT NULL,
  `vhInsurance` varchar(45) DEFAULT NULL COMMENT 'vehicle insurance umber',
  `vhName` varchar(50) NOT NULL,
  `vhColor` varchar(10) NOT NULL,
  `vhDescription` text,
  `vhStatus` int(11) NOT NULL DEFAULT '1' COMMENT '0 : Removed\n1 : active',
  `vhPhoto` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`vhRegNo`),
  UNIQUE KEY `vhInsurance_UNIQUE` (`vhInsurance`),
  KEY `vh-ty_idx` (`tyID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vhRegNo`, `tyID`, `vhInsurance`, `vhName`, `vhColor`, `vhDescription`, `vhStatus`, `vhPhoto`) VALUES
('ABC-0001', 5, '1234567', 'Nissan Corolla', 'Black', 'This is car', 1, 'car-31.jpg'),
('ABC-0002', 6, '2222222', 'Toyota HiAce', 'Blue', 'This is van', 1, 'hiacevan_super-GL.png'),
('ABC-0003', 5, '333333', 'Lanka Ashok Layland', 'Red', 'This is bus', 1, '_103597778_bluestarfilteringbus6-2.jpg'),
('XYZ-2344', 5, '123444', 'TOyota abc', 'Black', 'This is a car', 0, 'car-41.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `drv-emp` FOREIGN KEY (`empNIC`) REFERENCES `employee` (`empNIC`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `pmt-emp` FOREIGN KEY (`empNIC`) REFERENCES `employee` (`empNIC`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pmt-res` FOREIGN KEY (`resID`) REFERENCES `reservation` (`resID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `pr-emp` FOREIGN KEY (`empNIC`) REFERENCES `employee` (`empNIC`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `res-cust` FOREIGN KEY (`custNIC`) REFERENCES `customer` (`custNIC`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `res-drv` FOREIGN KEY (`drvNIC`) REFERENCES `driver` (`drvNIC`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `res-vh` FOREIGN KEY (`vhRegNO`) REFERENCES `vehicle` (`vhRegNo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vh-ty` FOREIGN KEY (`tyID`) REFERENCES `type` (`tyID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
