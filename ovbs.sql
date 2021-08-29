-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 01:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ovbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `name`) VALUES
(1, 'Pending'),
(2, 'Available'),
(3, 'Not Available'),
(4, 'Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(6) NOT NULL,
  `car_number` varchar(30) NOT NULL,
  `price` int(6) NOT NULL,
  `car_status` int(6) NOT NULL DEFAULT 1,
  `vendor_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `car_number`, `price`, `car_status`, `vendor_id`) VALUES
(1, 'Lex-1313', 8000, 1, 1),
(2, 'LER-8899', 5000, 2, 1),
(3, 'Abc-1215', 98000, 1, 1),
(5, 'W-100 V2', 10000, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `image` int(6) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `password`, `date_of_birth`, `image`) VALUES
(1, 'Naveed Javed', 'naveed@nj.com', '123', '1997-09-15', 1),
(6, 'M. Zain Manzoor', 'ceo@zafhn.com', '123', '1999-08-08', 46),
(7, 'Salman Afzal', 'salman@ucp.com', '123', '2021-04-27', 48);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`) VALUES
(1, '1619639179.png'),
(40, '1619639838.png'),
(41, '1619640351.JPG'),
(42, '1619642806.jpeg'),
(43, '1619642988.jpeg'),
(44, '1619643181.JPG'),
(45, '1619643276.jpg'),
(46, '1619643400.JPG'),
(47, '1619645350.jpeg'),
(48, '1619645515.jpg'),
(49, '1619645714.jpg'),
(50, '1620149695.jpg'),
(51, '1620150021.jpg'),
(52, '1620150156.jpg'),
(53, '1620150706.jpg'),
(54, '1620158157.jpg'),
(55, '1620159491.jpg'),
(56, '1620160709.jpg'),
(57, '1620160772.jpg'),
(58, '1620161769.jpg'),
(59, '1620161823.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Pending'),
(2, 'Approved'),
(3, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date_of_birth`) VALUES
(1, 'Naveed', 'naveed@nj.com', '123', '1997-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `image` int(6) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `email`, `password`, `date_of_birth`, `image`) VALUES
(1, 'Naveed Javed', 'naveed@nj.com', '123', '1997-09-15', 47),
(2, 'CM. Rana Ali Akbar', 'ali@gmail.com', '123', '1999-12-18', 49);

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `venue_status` int(6) NOT NULL DEFAULT 1,
  `vendor_id` int(11) NOT NULL DEFAULT 1,
  `availability` int(6) NOT NULL DEFAULT 1,
  `image` int(11) NOT NULL DEFAULT 50
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `name`, `address`, `description`, `price`, `venue_status`, `vendor_id`, `availability`, `image`) VALUES
(1, 'Taj Mehal', 'abc road | Updated.', 'this is a demo text description this is a demo text description this is a demo text description this is a demo text description this is a demo text description this is a demo text description this is a demo text description this is a demo text description this is a demo text description this is a demo text description', 55000, 2, 1, 2, 55),
(2, 'Punjab Marquee', 'std road on fff park', 'This is a demo text description and this is a demo text description this is a demo text description. this is a demo text description this is a demo text description', 85000, 2, 1, 3, 58),
(3, 'New Venue III', 'this venue is located at III place from zzz road xyz place, skp', 'temp this venue is located at III place from zzz road xyz place, skp. temp this venue is located at III place from zzz road xyz place, skp.', 125000, 1, 1, 2, 59),
(17, 'Royal Palace', 'kkk kljlj jkhk', 'this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. ', 98000, 1, 2, 1, 50),
(18, 'Mini Marquee', 'near abc town xyz', 'this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. ', 888, 1, 2, 2, 0),
(19, 'New Shine cottage', 'kkk place jjj new road xxxxx', 'this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. ', 75000, 2, 2, 2, 0),
(21, 'Desi Dera', 'test3 test3 test3v test3', 'this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. ', 85000, 3, 2, 1, 0),
(23, 'Our Venue', 'abc road text to gg place kk', 'this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. this is a demo text description. ', 55000, 1, 1, 1, 0),
(24, 'New 1', 'ghang road st #3 near hhh road xy', 'This is a very beautifull hall in this area. we support abx functions. ask us for more info. danke !', 90000, 1, 1, 1, 57),
(25, 'New 2', 'ghang road st #3 near hhh road xy', 'This is a very beautifull hall in this area. we support abx functions. ask us for more info. danke !', 90000, 1, 1, 1, 0),
(26, 'New 3', 'ghang road st #3 near hhh road xy', 'This is a very beautifull hall in this area. we support abx functions. ask us for more info. danke !', 100000, 1, 1, 1, 0),
(27, 'New 4', 'ghang road st #3 near hhh road xy', 'This is a very beautifull hall in this area. we support abx functions. ask us for more info. danke !', 95000, 1, 1, 1, 0),
(31, 'Qasar E Sultan', '5-KM Lahore Sargodha Road Sheikhupura', 'This is a very beautifull hall in this area. we support abx functions. ask us for more info. danke !', 75000, 1, 1, 1, 53),
(32, 'Royal Lands', '5-KM Lahore Road Sheikhupura, Near PSO Pump', 'Temp This is a very beautifull hall in this area. we support abx functions. ask us for more info. danke !', 98000, 1, 1, 1, 54);

-- --------------------------------------------------------

--
-- Table structure for table `venue_bookings`
--

CREATE TABLE `venue_bookings` (
  `id` int(6) NOT NULL,
  `details` text NOT NULL,
  `date` date NOT NULL,
  `client_id` int(6) NOT NULL,
  `venue_id` int(6) DEFAULT NULL,
  `vendor_id` int(6) NOT NULL,
  `status` int(6) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue_bookings`
--

INSERT INTO `venue_bookings` (`id`, `details`, `date`, `client_id`, `venue_id`, `vendor_id`, `status`) VALUES
(1, 'first temp booking\r\nfirst temp bookingfirst temp booking', '2021-04-30', 1, 2, 1, 1),
(2, 'first temp booking\r\nfirst temp bookingfirst temp booking', '2021-05-30', 6, 19, 2, 1),
(3, 'first temp booking\r\nfirst temp bookingfirst temp booking', '2021-05-15', 6, 19, 1, 2),
(4, 'first temp booking\r\nfirst temp bookingfirst temp booking', '2021-05-20', 6, 19, 1, 4),
(10, '*************************', '2021-04-30', 1, 1, 1, 1),
(25, '2nd booking from form', '2021-04-28', 1, 2, 1, 1),
(26, 'test 2  test 2 test 2 test 2 test 2 test 2  test 2 test 2 test 2 test 2 ', '2021-05-25', 6, 18, 1, 1),
(29, 'this is alos a temp testing booking. this is alos a temp testing booking this is alos a temp testing booking this is alos a temp testing bookingthis is alos a temp testing booking.', '2021-05-08', 7, 1, 1, 1),
(31, 'test4', '2021-05-13', 6, 19, 2, 1),
(32, 'test5', '2021-05-20', 6, 19, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendor_id` (`vendor_id`),
  ADD KEY `car_status` (`car_status`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image` (`image`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image` (`image`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendor_id` (`vendor_id`),
  ADD KEY `venue_status` (`venue_status`),
  ADD KEY `availability` (`availability`),
  ADD KEY `image` (`image`);

--
-- Indexes for table `venue_bookings`
--
ALTER TABLE `venue_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `venue_id` (`venue_id`),
  ADD KEY `vendor_id` (`vendor_id`),
  ADD KEY `status` (`status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `venue_bookings`
--
ALTER TABLE `venue_bookings`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_ibfk_2` FOREIGN KEY (`car_status`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`image`) REFERENCES `images` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vendors`
--
ALTER TABLE `vendors`
  ADD CONSTRAINT `vendors_ibfk_1` FOREIGN KEY (`image`) REFERENCES `images` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `venues`
--
ALTER TABLE `venues`
  ADD CONSTRAINT `venues_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `venues_ibfk_2` FOREIGN KEY (`venue_status`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `venues_ibfk_3` FOREIGN KEY (`availability`) REFERENCES `availability` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `venues_ibfk_4` FOREIGN KEY (`image`) REFERENCES `images` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `venue_bookings`
--
ALTER TABLE `venue_bookings`
  ADD CONSTRAINT `venue_bookings_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `venue_bookings_ibfk_2` FOREIGN KEY (`venue_id`) REFERENCES `venues` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `venue_bookings_ibfk_3` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `venue_bookings_ibfk_4` FOREIGN KEY (`status`) REFERENCES `availability` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
