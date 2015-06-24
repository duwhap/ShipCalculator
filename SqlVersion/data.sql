-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 24, 2015 at 01:50 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `shipping_cal`
--

-- --------------------------------------------------------

--
-- Table structure for table `zipcode_zone`
--

CREATE TABLE `zipcode_zone` (
  `id` int(11) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `zone` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zipcode_zone`
--

INSERT INTO `zipcode_zone` (`id`, `zipcode`, `zone`) VALUES
(1, 55555, 4),
(2, 55556, 3),
(3, 55557, 9);

-- --------------------------------------------------------

--
-- Table structure for table `zone_weight_cost`
--

CREATE TABLE `zone_weight_cost` (
  `id` int(11) NOT NULL,
  `zone` int(11) NOT NULL,
  `weight` float NOT NULL,
  `cost` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zone_weight_cost`
--

INSERT INTO `zone_weight_cost` (`id`, `zone`, `weight`, `cost`) VALUES
(1, 4, 1, 1.25),
(2, 4, 1.5, 2),
(3, 4, 2, 3.25),
(4, 3, 1, 1.75),
(5, 3, 1.5, 2.25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zipcode_zone`
--
ALTER TABLE `zipcode_zone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_index` (`zone`);

--
-- Indexes for table `zone_weight_cost`
--
ALTER TABLE `zone_weight_cost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_index` (`zone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zipcode_zone`
--
ALTER TABLE `zipcode_zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `zone_weight_cost`
--
ALTER TABLE `zone_weight_cost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;