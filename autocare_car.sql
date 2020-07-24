-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 11:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autocare_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'jay patel', 'my12@gmai', 'my', 'cool'),
(18, 'Jay Patel', 'jay190301@gmail.com', 'polo', 'repair');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id` int(20) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `img`) VALUES
(1, 'Image/wheel.jpg'),
(2, 'Image/wheel2.jpg'),
(3, 'Image/service4.jpg'),
(4, 'Image/wheel3.jpg'),
(5, 'Image/g5.jpg'),
(6, 'Image/wheel4.jpg'),
(7, 'Image/engine3.jpg'),
(8, 'Image/g8.jpg'),
(9, 'Image/engine2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `info` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `disc` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `info`, `img`, `disc`, `data`, `type`) VALUES
(1, 'Engine Diagnostics', 'Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius', 'engine1.jpg', '<p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>\r\n', '', 1),
(2, 'Lube Oil And Filter', 'Dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius', 'engine2.jpg', '<p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>\r\n', '', 1),
(3, 'Air Conditioning', 'Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius', 'engine3.jpg', 'Air Conditioning systems require maintenance to continue functioning well.We offer the best car AC repair services at affordable prices which include compressor check, fixing refrigerant leaks and more. </p>\r\n                        ', '<p>To ensure your comfort with an efficiently working car AC system, you need to conduct periodic AC system service checks for the following:</p>\r\n                        <ul>\r\n                            <li>Visual Inspection of all components</li>\r\n    ', 3),
(4, 'Body Repair', 'Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius', 'service4.jpg', '<h5>Car Dent Repair and Painting Services</h5>\r\nUnfortunately, accidents happen that can cause damage to the vehicle in terms of paint damage and dent. Paint scratches and dents shows detract from the appearance of your car.</p>\r\n		', '', 4),
(5, 'Wheel Services', 'Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius', 'service5.jpg', '<p>Wheels get damaged from a variety of causes including bad roads and potholes, leading to misalignment. Hence wheels of your car need regular attention for you to ensure proper wheel alignment and balancing. Service experts help you maximize the life.', 'Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius', 5),
(6, 'Lube Oil And Filter', 'Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius', 'engine2.jpg', '<p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>\r\n', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `caption` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `img`, `caption`) VALUES
(1, 'https://images.unsplash.com/photo-1562232661-b9429e20f13a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80', '1'),
(2, 'https://images.unsplash.com/photo-1568644310089-8fce475968a7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1106&q=80', '2'),
(3, 'https://images.unsplash.com/photo-1543061647-e034089f6a2b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80', '3');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `img`) VALUES
(1, 'Nashid Martines', 'team1.jpg'),
(2, 'konne Backfield', 'team2.jpg'),
(3, 'Hackson Willingham', 'team3.jpg'),
(4, 'kony Martines', 'team4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'jay', 1212121212, 'jay@gmail', '1212'),
(2, 'jay patel', 123456982, 'jay190301@', '12345'),
(3, 'Jaku', 1234567890, 'jay190301@', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `haha` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
