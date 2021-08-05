-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2018 at 09:41 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotels-reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `usname` varchar(14) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `pass` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `usname`, `pass`) VALUES
(1, 'admin', 'admin'),
(3, 'fayza', '1234'),
(4, 'fayza', 'fayza');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `amenity-id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`amenity-id`, `name`) VALUES
(1, 'Wi-Fi'),
(2, 'News Paper'),
(3, 'Power BackUp'),
(4, 'Refrigerator'),
(5, 'Restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking-id` int(11) NOT NULL,
  `start-date` datetime DEFAULT NULL,
  `end-date` datetime DEFAULT NULL,
  `room-id` int(11) NOT NULL,
  `guest-id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking-id`, `start-date`, `end-date`, `room-id`, `guest-id`) VALUES
(138, NULL, NULL, 10, 10),
(139, NULL, NULL, 1, 15),
(146, NULL, NULL, 92, 2),
(185, NULL, NULL, 92, 2),
(186, NULL, NULL, 92, 2),
(187, NULL, NULL, 115, 2),
(190, NULL, NULL, 128, 2);

-- --------------------------------------------------------

--
-- Table structure for table `booking-payment`
--

CREATE TABLE `booking-payment` (
  `payment-id` int(11) DEFAULT NULL,
  `booking-id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking-payment`
--

INSERT INTO `booking-payment` (`payment-id`, `booking-id`) VALUES
(23, 138),
(24, 139),
(25, 186),
(25, 185),
(25, 146);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest-id` int(11) NOT NULL,
  `username` varchar(11) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest-id`, `username`, `password`, `email`) VALUES
(1, 'lona', 123, 'lona@gmail.com'),
(2, 'Fayza', 1234, 'fayzaaaa@gmail.com'),
(5, 'shabz', 123, 'shahba3ali@gmail.com'),
(10, 'zaynab', 1234, 'zaynab@gmail.com'),
(12, 'chnar', 123, 'chnar@gmail.com'),
(13, 'mzhda', 123, 'mzhda@gmail.com'),
(15, 'ahmed', 1234, 'ahmed@gmail.com'),
(16, 'lana', 123, 'lana@gmail,com'),
(17, 'wena', 1234, 'wena@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `guest-details`
--

CREATE TABLE `guest-details` (
  `name` varchar(15) DEFAULT NULL,
  `contact-no1` varchar(50) DEFAULT NULL,
  `contact-no2` varchar(50) DEFAULT NULL,
  `gender` text,
  `guest-id` int(11) DEFAULT NULL,
  `guest-details_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest-details`
--

INSERT INTO `guest-details` (`name`, `contact-no1`, `contact-no2`, `gender`, `guest-id`, `guest-details_id`) VALUES
('Fayza', '12344', 'bnsalawaa', 'F', 2, 1),
('zaynab', '2345566', 'erbil,iraq', 'F', 10, 2),
('lona', '4553398', 'Slemani,chwarchra', 'F', 1, 3),
('chnar', '23455699', 'gullan str.', 'F', 12, 4),
('mzhda', '889898989', 'bnslawa', 'F', 13, 5),
('ahmed', '898989', 'brayan', 'M', 15, 6),
('lana', '9989896', 'waziran', 'F', 16, 9),
('wena', '453443', 'andazyaran', 'F', 17, 10);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel-id` int(11) NOT NULL,
  `country` varchar(15) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `name` text,
  `street-address` text,
  `Description` text,
  `postal/code-zip` int(11) DEFAULT NULL,
  `URL-website` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel-id`, `country`, `city`, `name`, `street-address`, `Description`, `postal/code-zip`, `URL-website`) VALUES
(1, 'iraq', 'erbil', 'Al-Habib', 'Block A, 4th Street Gulberg Town', 'This is the nearest hotel.', 4500, 'index.php'),
(2, 'iraq', 'erbil', 'Al-Habib', 'Block A, 4th Street Gulberg Town', 'This is the nearest hotel.', 4500, 'index.php'),
(3, 'iraq', 'sulaymania', 'Hotel Renova', 'malik str', 'near shopping', 10500, NULL),
(4, 'iraq', 'sulaymania', 'Hotel Renova', 'malik str', 'near shopping', 10500, NULL),
(5, 'iraq', 'sulaymania', 'Hotel GK', 'azadi park', 'near shopping ', 10500, NULL),
(6, 'iraq', 'sulaymania', 'Hotel GK', 'azadi park', 'near shopping ', 10500, NULL),
(7, 'iraq', 'Erbil', 'Crystal', 'badawa', 'small hotl', 44001, ''),
(8, 'Iraq', 'Erbil', 'Rotana', 'gullan', 'fast services', 44001, 'details.php'),
(9, 'Iraq', 'Erbil', 'Classy', 'azadi', 'high rates', 44001, 'index.php'),
(10, 'iraq', 'erbil', 'Crystal', 'Block A, 4th Street Gulberg Town', 'This is the nearest hotel.', 4500, 'index.php'),
(11, 'iraq', 'Erbil', 'Crystal', 'badawa', 'small hotl', 44001, ''),
(12, 'Iraq', 'Erbil', 'Rotana', 'gullan', 'fast services', 44001, 'details.php'),
(13, 'Iraq', 'Erbil', 'Classy', 'azadi', 'high rates', 44001, 'index.php'),
(14, 'Iraq', 'Erbil', 'Quaint', 'ankawa', '3 star', 300001, 'index.php'),
(15, 'Iraq', 'Erbil', 'family motel', '30 matery', 'gud servicess', 2001, 'index.php'),
(20, 'iraq', 'Erbil', 'Crystal', 'badawa', 'small hotl', 44001, ''),
(21, 'Iraq', 'Erbil', 'Rotana', 'gullan', 'fast services', 44001, 'details.php'),
(24, 'Iraq', 'Erbil', 'Classy', 'azadi', 'high rates', 44001, 'index.php'),
(25, 'iraq', 'erbil', 'Crystal', 'Block A, 4th Street Gulberg Town', 'This is the nearest hotel.', 4500, 'index.php'),
(26, 'iraq', 'Erbil', 'Crystal', 'badawa', 'small hotl', 44001, ''),
(27, 'Iraq', 'Erbil', 'Rotana', 'gullan', 'fast services', 44001, 'details.php'),
(28, 'Iraq', 'Erbil', 'Classy', 'azadi', 'high rates', 44001, 'index.php'),
(29, 'Iraq', 'Erbil', 'Quaint', 'ankawa', '3 star', 300001, 'index.php'),
(30, 'Iraq', 'Erbil', 'family motel', '30 matery', 'gud servicess', 2001, 'index.php');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment-id` int(11) NOT NULL,
  `amount` int(100) NOT NULL,
  `account/card-no` int(11) NOT NULL,
  `guest-id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment-id`, `amount`, `account/card-no`, `guest-id`) VALUES
(23, 100, 4, 10),
(24, 100, 1, 15),
(25, 300, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room-id` int(11) NOT NULL,
  `room-no` int(11) DEFAULT NULL,
  `hotel-id` int(11) DEFAULT NULL,
  `room_type-id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room-id`, `room-no`, `hotel-id`, `room_type-id`) VALUES
(1, 101, 1, 4),
(2, 102, 1, 6),
(9, 101, 3, 4),
(10, 101, 5, 4),
(11, 102, 3, 5),
(12, 102, 5, 4),
(13, 103, 3, 6),
(14, 103, 5, 4),
(16, 104, 5, 5),
(17, 105, 3, 4),
(18, 105, 5, 5),
(19, 106, 3, 5),
(20, 106, 5, 5),
(21, 107, 3, 6),
(22, 107, 5, 6),
(24, 108, 5, 6),
(25, 109, 3, 5),
(26, 109, 5, 6),
(69, 102, 21, 37),
(72, 101, 24, 40),
(73, 200, 2, 2),
(74, 100, 3, 6),
(75, 38, 7, 39),
(92, 63, 1, 1),
(93, 23, 2, 2),
(94, 12, 1, 3),
(95, 33, 2, 40),
(100, 23, 1, 1),
(101, 25, 1, 2),
(104, 34, 2, 2),
(105, 77, 1, 3),
(106, 70, 1, 40),
(108, 70, 2, 40),
(110, 70, 29, 40),
(112, 55, 29, 40),
(114, 25, 2, 40),
(115, 28, 7, 3),
(116, 13, 1, 2),
(117, 14, 28, 4),
(118, 115, 29, 4),
(119, 112, 30, 4),
(120, 15, 27, 53),
(121, 16, 30, 54),
(122, 17, 27, 55),
(123, 18, 5, 53),
(124, 19, 14, 54),
(125, 32, 12, 55),
(126, 34, 4, 53),
(127, 90, 7, 55),
(128, 79, 29, 6),
(129, 81, 10, 6),
(130, 82, 30, 41),
(131, 83, 27, 42),
(132, 84, 30, 43),
(133, 85, 27, 44),
(134, 61, 27, 45),
(135, 62, 28, 46),
(136, 63, 29, 47),
(137, 65, 15, 48),
(138, 91, 30, 49),
(139, 92, 29, 51),
(140, 93, 2, 50),
(141, 94, 2, 52),
(142, 95, 1, 51),
(143, 96, 28, 39),
(144, 98, 29, 49);

-- --------------------------------------------------------

--
-- Table structure for table `room-type`
--

CREATE TABLE `room-type` (
  `room_type-id` int(11) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `adults` int(11) NOT NULL,
  `childs` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `price-perday` int(11) DEFAULT NULL,
  `total-rooms` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room-type`
--

INSERT INTO `room-type` (`room_type-id`, `name`, `adults`, `childs`, `picture`, `price-perday`, `total-rooms`) VALUES
(1, 'General Rooms', 2, 0, 'images/super-general-rooms_001.jpg', 100, 2),
(2, 'Delux Rooms', 1, 2, 'images/super-delux-rooms_002.jpg', 150, 3),
(3, 'Executive Rooms', 2, 0, 'images/super-executive-rooms_003.jpg', 200, 1),
(4, 'General Rooms', 2, 3, 'images/super-general-rooms_001.jpg', 100, 2),
(5, 'Delux Rooms', 1, 2, 'images/rotana-general.jpg', 150, 3),
(6, 'Executive Rooms', 2, 0, 'images/r1 (1).jpg', 200, 1),
(7, 'Luxury Rooms', 1, 0, 'images/super-luxury-rooms_004.jpg', 250, 1),
(8, 'Luxury Rooms', 1, 0, 'images/super-luxury-rooms_004.jpg', 250, 1),
(9, 'General Rooms', 2, 3, 'images/crystal-general.jpg', 100, 2),
(10, 'Luxury Rooms', 2, 3, 'images/crystal-general.jpg', 100, 2),
(37, 'Luxury Rooms', 1, 0, 'images/super-luxury-rooms_004.jpg', 250, 1),
(38, 'Luxury Rooms', 1, 0, 'images/super-luxury-rooms_004.jpg', 250, 1),
(39, 'General Rooms', 2, 3, 'images/crystal-general.jpg', 100, 2),
(40, 'Luxury Rooms', 2, 3, 'images/crystal-general.jpg', 100, 2),
(41, 'General Rooms', 2, 0, 'images/super-general-rooms_001.jpg', 100, 2),
(42, 'General Rooms', 2, 2, 'images/super-general-rooms_001.jpg', 100, 2),
(43, 'General Rooms', 2, 3, 'images/super-general-rooms_001.jpg', 100, 2),
(44, 'General Rooms', 2, 1, 'images/super-general-rooms_001.jpg', 100, 2),
(45, 'Delux Rooms', 1, 0, 'images/super-delux-rooms_002.jpg', 150, 3),
(46, 'Delux Rooms', 1, 1, 'images/super-delux-rooms_002.jpg', 150, 3),
(47, 'Delux Rooms', 2, 0, 'images/super-delux-rooms_002.jpg', 150, 3),
(48, 'Delux Rooms', 2, 1, 'images/super-delux-rooms_002.jpg', 150, 3),
(49, 'Executive Rooms', 2, 1, 'images/r1 (1).jpg', 200, 1),
(50, 'Executive Rooms', 3, 2, 'images/super-executive-rooms_003.jpg', 200, 1),
(51, 'Luxury Rooms', 2, 0, 'images/crystal-general.jpg', 100, 2),
(52, 'Luxury Rooms', 1, 1, 'images/super-luxury-rooms_004.jpg', 250, 1),
(53, 'General Rooms', 1, 2, 'images/super-general-rooms_001.jpg', 100, 2),
(54, 'General Rooms', 1, 0, 'images/super-general-rooms_001.jpg', 100, 2),
(55, 'General Rooms', 2, 0, 'images/super-general-rooms_001.jpg', 100, 2);

-- --------------------------------------------------------

--
-- Table structure for table `room-type-amenities`
--

CREATE TABLE `room-type-amenities` (
  `id` int(11) NOT NULL,
  `room_type-id` int(11) DEFAULT NULL,
  `amenity-id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room-type-amenities`
--

INSERT INTO `room-type-amenities` (`id`, `room_type-id`, `amenity-id`) VALUES
(1, 5, 1),
(2, 5, 4),
(6, 4, 1),
(7, 4, 2),
(8, 6, 2),
(9, 6, 3),
(10, 4, 5),
(20, 37, 1),
(21, 38, 1),
(22, 39, 1),
(23, 40, 1),
(24, 39, 5),
(25, 37, 4),
(26, 37, 5),
(27, 38, 3),
(28, 1, 1),
(29, 2, 2),
(30, 5, 5),
(31, 40, 4),
(32, 38, 3),
(33, 3, 2),
(34, 4, 4),
(35, 4, 3),
(36, 5, 3),
(37, 6, 1),
(38, 7, 3),
(39, 8, 1),
(40, 9, 5),
(41, 10, 4),
(42, 37, 4),
(43, 40, 1),
(44, 39, 1),
(45, 41, 1),
(46, 42, 5),
(47, 43, 4),
(48, 44, 5),
(49, 45, 1),
(50, 46, 4),
(51, 47, 4),
(52, 48, 3),
(53, 49, 3),
(54, 49, 3),
(55, 50, 1),
(56, 51, 5),
(57, 52, 4),
(58, 53, 4),
(59, 54, 4),
(60, 54, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`amenity-id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking-id`),
  ADD KEY `guest-id` (`guest-id`),
  ADD KEY `booking_ibfk_2` (`room-id`);

--
-- Indexes for table `booking-payment`
--
ALTER TABLE `booking-payment`
  ADD KEY `booking_bfk_1` (`payment-id`),
  ADD KEY `booking_bfk_2` (`booking-id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest-id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `guest-details`
--
ALTER TABLE `guest-details`
  ADD PRIMARY KEY (`guest-details_id`),
  ADD KEY `guest-id` (`guest-id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel-id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment-id`),
  ADD KEY `guest-id` (`guest-id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room-id`),
  ADD UNIQUE KEY `UK` (`room-no`,`hotel-id`),
  ADD KEY `room_type-id` (`room_type-id`),
  ADD KEY `hotel-id` (`hotel-id`);

--
-- Indexes for table `room-type`
--
ALTER TABLE `room-type`
  ADD PRIMARY KEY (`room_type-id`);

--
-- Indexes for table `room-type-amenities`
--
ALTER TABLE `room-type-amenities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `amenity-id` (`amenity-id`),
  ADD KEY `room_type-id` (`room_type-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `amenity-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `guest-details`
--
ALTER TABLE `guest-details`
  MODIFY `guest-details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
--
-- AUTO_INCREMENT for table `room-type`
--
ALTER TABLE `room-type`
  MODIFY `room_type-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `room-type-amenities`
--
ALTER TABLE `room-type-amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`guest-id`) REFERENCES `guest` (`guest-id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`room-id`) REFERENCES `room` (`room-id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking-payment`
--
ALTER TABLE `booking-payment`
  ADD CONSTRAINT `booking_bfk_1` FOREIGN KEY (`payment-id`) REFERENCES `payment` (`payment-id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_bfk_2` FOREIGN KEY (`booking-id`) REFERENCES `booking` (`booking-id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guest-details`
--
ALTER TABLE `guest-details`
  ADD CONSTRAINT `guest-details_ibfk_1` FOREIGN KEY (`guest-id`) REFERENCES `guest` (`guest-id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`guest-id`) REFERENCES `guest` (`guest-id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`hotel-id`) REFERENCES `hotel` (`hotel-id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `room_typ_ibfk_1` FOREIGN KEY (`room_type-id`) REFERENCES `room-type` (`room_type-id`);

--
-- Constraints for table `room-type-amenities`
--
ALTER TABLE `room-type-amenities`
  ADD CONSTRAINT `room-type-amenities_ibfk_1` FOREIGN KEY (`amenity-id`) REFERENCES `amenities` (`amenity-id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `room-type-amenities_ibfk_2` FOREIGN KEY (`room_type-id`) REFERENCES `room-type` (`room_type-id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
