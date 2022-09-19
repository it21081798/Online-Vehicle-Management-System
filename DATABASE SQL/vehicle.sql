-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 10, 2021 at 08:45 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `mobile` int(10) NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `license` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password1` varchar(10) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `account_no` int(20) NOT NULL,
  `branch_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `fname`, `lname`, `gender`, `mobile`, `DOB`, `address`, `license`, `email`, `password1`, `branch_name`, `account_no`, `branch_no`) VALUES
(5, 'Achini', 'Palliyaguru', 'female', 715303817, '1999-11-22', 'Digapittaniya Hiththatiya West Matara', 'B1238547', 'achinipalliyaguru9@gmail.com', 'Achini@098', 'Sampath', 145697, 42),
(6, 'Achini', 'Palliyaguru', 'female', 715303817, '1999-11-22', 'Digapittaniya Hiththatiya West Matara', 'B1234556', 'achinipalliyaguru9@gmail.com', 'Achini@123', 'Sampath', 54789621, 789);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_ID` int(11) NOT NULL,
  `First_name` varchar(25) NOT NULL,
  `Last_name` varchar(25) NOT NULL,
  `Feedback_email` varchar(30) NOT NULL,
  `Feedback_phone` int(9) NOT NULL,
  `Feedback_Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_ID`, `First_name`, `Last_name`, `Feedback_email`, `Feedback_phone`, `Feedback_Description`) VALUES
(1, 'Dewmi', 'Nihara', 'dewni@gmail.com', 734567821, 'good'),
(3, 'Kavindu', 'Lakshan', 'kav34@gmailcom', 713456782, 'excellent'),
(4, 'Heshan', 'Lakshan', 'hes45@gmail.com', 723456211, 'good'),
(5, 'achini', 'lakshani', 'achi34@gmail.com', 734567822, 'good'),
(7, 'Naduni', 'Gamage', 'naduni3@gmail.com', 734999782, 'Good service');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `career_ID` int(15) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Career_email` varchar(50) NOT NULL,
  `career_contact_number` int(9) NOT NULL,
  `Location` varchar(20) NOT NULL,
  `Career_number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`career_ID`, `First_name`, `Last_name`, `Career_email`, `career_contact_number`, `Location`, `Career_number`) VALUES
(1, 'Menaka', 'Lakshan', 'mge3@gmail.com', 713452678, 'Panadura', 1),
(2, 'Geeshan', 'pasindu', 'geesh@gmail.com', 776545346, 'Panadura', 2),
(3, 'Kavindu', 'Heshan', 'kavi@gmail.com', 456782336, 'Matara', 1),
(4, 'Nimal', 'Lakshan', 'nimaa@gmail.com', 456782333, 'Matara', 1),
(5, 'Kavisha', 'Hasaranga', 'Kavis1@gmail.gmail', 723456789, 'Matara', 1),
(6, 'achini', 'Nihara', 'ac6@gmail.com', 2147483647, 'moratuwa', 1),
(7, 'Geeshan', 'Hasaranga', 'rhu3@gmail.com', 723456789, 'Matara', 1),
(8, 'Naduni', 'prabodha', 'n56@gmail.com', 477782333, 'Matara', 1),
(9, 'Heshan', 'Gamage', 'ga12@gmail.com', 743562111, 'Matara', 1),
(10, 'Achini', 'Gamage', 'Gam65@gmail.com', 713425121, 'Matara', 1),
(11, 'Dewaki', 'Thathsarani', 'Dewaki99@gmail.com', 456782333, 'Matara', 1);

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE `name` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `mobile` int(10) NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password1` varchar(10) NOT NULL,
  `password2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `name`
--

INSERT INTO `name` (`id`, `fname`, `lname`, `gender`, `mobile`, `DOB`, `address`, `email`, `password1`, `password2`) VALUES
(1, 'thamiru', 'yasith', 'male', 763413282, '2005-12-13', '135,kombala,imaduwa.', 'thamiru@icloud.com', 'THEmax1234', 'THEmax1234'),
(2, 'sewe', 'wsetws', 'male', 1324567893, '2005-12-06', 'dsafdfwsaefewa', 'ajsfbajhbk@gmail.com', 'Asdfghjklm', 'Asdfghjklm'),
(3, 'Amisha', 'Prathyanga', 'male', 1234567895, '2021-10-29', ' asfdafda', 'it21132582@my.sliit.lk', 'Asdfghjklm', 'Asdfghjklm'),
(4, 'sewe', 'Doo', 'female', 1324567893, '2005-11-27', 'asddD', 'himashreigns@gmail.com', 'aSDFGHJMK3', 'aSDFGHJMK3');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `distance` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package_name`, `duration`, `distance`, `price`, `details`) VALUES
(12, 'Colombo to Matara', '12 hours', '850 km', '5000 LKR', 'A journey to Matara is approximately 850km away and when travelling with Ceylon Cabs, you will be offered a selection of our finest fleet of vans, cars, 4x4 cabs,  to choose from.\r\nRental charges per day/hour.\r\nOur experienced drivers will choose the best routes for you.'),
(13, 'Colombo to Kandy ', '16 hours', '550 km ', '8700 LKR', 'Tours by Ceylon Cabs are guaranteed to have you travel in comfort and style in our choice of vehicles that range from cars, vans,  4x4 cabs and buses.\r\nRental charges per day/hour.\r\nOur experienced drivers will choose the best routes for you for your convenience.'),
(14, 'Colombo to Jaffna', '20 hours', '800 km', '2000 LKR', 'Experience the rugged beauty of the north with our Jaffna tour. You can either choose to journey to the capital city of the Northern Province yourself or trust our skilled drivers / guides to take you safely through the best routes available.\r\nRental charges per day'),
(15, 'Colombo to Nuwara Eliya', '20 hours', '167 km ', '15000 LKR', 'The mountainous city of Nuwara Eliya, surrounded tea plantations; is located 167 km from the city of Colombo.  Travel with Ceyalon Cabs and choose from our vehicles such as cars vans, 4x4 cabs, or buses,and be rest assured that your long journey via the A7.\r\nRental charges per day/hour'),
(16, 'Colombo to Deniyaya', '25 hours', '400km', '6500 LKR', 'A journey to Deniyaya with Ceylon Cabs will be amazed while offere a selection of our finest fleet of vans , cars to choose from. \r\nOur experienced drivers will choose the best routes for you.\r\nRental charges per day'),
(17, 'Colombo to Trincomalee', '35 hours', '500 km', '15000 LKR', 'Journey to the land of beautiful beaches with Ceylon Cabs. We will provide you well experienced drivers and confortable journey.\r\nYou can have a relaxed journey with us.\r\nRental charges per day/hour.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `ride_details`
--

CREATE TABLE `ride_details` (
  `id` int(11) NOT NULL,
  `pickup_loc` varchar(15) NOT NULL,
  `drop_loc` varchar(15) NOT NULL,
  `duration` int(2) NOT NULL,
  `pickup_date` date NOT NULL,
  `pickup_time` time NOT NULL,
  `user_ID` varchar(20) NOT NULL,
  `vehicle` varchar(25) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ride_details`
--

INSERT INTO `ride_details` (`id`, `pickup_loc`, `drop_loc`, `duration`, `pickup_date`, `pickup_time`, `user_ID`, `vehicle`, `price`) VALUES
(14, 'Galle', 'kurunegala', 4, '2021-10-06', '22:19:00', '2', 'op2', 0),
(15, 'Jaffna', 'Matara', 4, '2021-10-21', '19:23:00', '3', 'op10', 0),
(16, 'Galle', 'Colombo', 12, '2021-10-20', '19:26:00', '3', 'op11', 0),
(17, 'Jaffna', 'Galle', 6, '2021-11-04', '23:53:00', '', 'Land-Crusier Prado', 0),
(18, 'Galle', 'Colombo', 4, '2021-10-28', '23:55:00', '3', 'Suzuki Wagon R', 0),
(19, 'Jaffna', 'Colombo', 4, '2021-10-27', '16:59:00', '1', 'Toyota Hilux', 0),
(20, 'Galle', 'Colombo', 4, '2021-10-19', '18:33:00', '6', 'Land-Crusier Prado', 40),
(21, 'Jaffna', 'Colombo', 4, '2021-10-27', '00:08:00', '', 'Land-Rover Defender', 8),
(22, 'Galle', 'kurunegala', 4, '2021-10-23', '00:12:00', '', 'Suzuki Wagon R', 28),
(23, 'Jaffna', 'kurunegala', 4, '2021-10-28', '00:12:00', '', 'Land-Rover Defender', 8);

-- --------------------------------------------------------

--
-- Table structure for table `userpass`
--

CREATE TABLE `userpass` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` int(50) NOT NULL,
  `user_ID` int(5) NOT NULL,
  `full_Name` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpass`
--

INSERT INTO `userpass` (`id`, `user`, `pass`, `user_ID`, `full_Name`, `mobile`, `address`, `email`) VALUES
(2, 'amisha', 12345, 12, 'Amisha Prathyanga', 912252416, '80-A, Karapitiya, Galle', 'amisha@gmail.com'),
(3, 'sliit', 123, 45, 'Sri Lanka Institute of technology', 912225476, '45-A, Malabe, Colombo', 'sliit@sliit.lk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_ID`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`career_ID`);

--
-- Indexes for table `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ride_details`
--
ALTER TABLE `ride_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpass`
--
ALTER TABLE `userpass`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `career_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `name`
--
ALTER TABLE `name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ride_details`
--
ALTER TABLE `ride_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `userpass`
--
ALTER TABLE `userpass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
