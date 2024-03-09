-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 24, 2023 at 05:27 PM
-- Server version: 10.3.39-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventor_webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataplan`
--

CREATE TABLE `dataplan` (
  `id` int(11) NOT NULL,
  `dataPlan` varchar(500) NOT NULL,
  `dataQuantity` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `endDate` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dataplan`
--

INSERT INTO `dataplan` (`id`, `dataPlan`, `dataQuantity`, `status`, `endDate`, `username`) VALUES
(1, '6 Months Plan - 3GB/month', 1, 'Unsubscribed', '2024-01-06', 'teoh123B'),
(2, '3 Months Plan - 3GB/month', 1, 'Unsubscribed', '2023-10-07', 'teoh123B'),
(3, '3 Months Plan - 3GB/month', 1, 'Unsubscribed', '2023-10-10', 'abc123A'),
(4, '3 Months Plan - 3GB/month', 1, 'Unsubscribed', '2023-10-10', 'Teocheahming1'),
(5, '12 Months Plan - 3GB/month', 1, 'Unsubscribed', '2024-07-10', 'Abc123'),
(6, '6 Months Plan - UNLIMITED', 1, 'Unsubscribed', '2024-01-13', 'Yong11'),
(7, '12 Months Plan - 3GB/month', 1, 'Unsubscribed', '2024-07-13', 'Yong11'),
(8, '6 Months Plan - 3GB/month', 1, 'Recurring', '2024-01-13', 'Yong11'),
(9, '6 Months Plan - 9GB/month', 1, 'Unsubscribed', '2024-01-13', 'Mike12');

-- --------------------------------------------------------

--
-- Table structure for table `phoneplan`
--

CREATE TABLE `phoneplan` (
  `id` int(11) NOT NULL,
  `phonePlan` varchar(500) NOT NULL,
  `phoneQuantity` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `phoneplan`
--

INSERT INTO `phoneplan` (`id`, `phonePlan`, `phoneQuantity`, `username`) VALUES
(1, 'IShuang 12', 1, 'teoh123B'),
(2, 'IShuang 12', 1, 'teoh123B'),
(3, 'IShuang 12', 1, 'abc123A'),
(4, 'IYuen 13', 1, 'Abc123'),
(5, 'IHean 7', 1, 'Yong11'),
(6, 'IKwong 3 Lite', 1, 'Yong11'),
(7, 'IHean 7', 1, 'Mike12');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `id` int(11) NOT NULL,
  `dataPlan` varchar(500) NOT NULL,
  `phonePlan` varchar(500) NOT NULL,
  `username` varchar(50) NOT NULL,
  `image_path` varchar(500) NOT NULL,
  `file_extension` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`id`, `dataPlan`, `phonePlan`, `username`, `image_path`, `file_extension`) VALUES
(1, '6 Months Plan - 3GB/month', 'IShuang 12', 'teoh123B', 'receipt/64a6d31d5cf5c.JPG', 'JPG'),
(2, '3 Months Plan - 3GB/month', 'IShuang 12', 'teoh123B', 'receipt/64a7bc895c87a.png', 'png'),
(3, '3 Months Plan - 3GB/month', 'IShuang 12', 'abc123A', 'receipt/64abab20072ab.png', 'png'),
(4, '3 Months Plan - 3GB/month', 'None', 'Teocheahming1', 'receipt/64abaefd2c40e.jpeg', 'jpeg'),
(5, '12 Months Plan - 3GB/month', 'IYuen 13', 'Abc123', 'receipt/64abb52dbc032.jpeg', 'jpeg'),
(6, '6 Months Plan - UNLIMITED', 'None', 'Yong11', 'receipt/64af7fb1c6801.png', 'png'),
(7, '12 Months Plan - 3GB/month', 'IHean 7', 'Yong11', 'receipt/64af82ea54b1a.png', 'png'),
(8, '6 Months Plan - 3GB/month', 'IKwong 3 Lite', 'Yong11', 'receipt/64af84b270cbe.png', 'png'),
(9, '6 Months Plan - 9GB/month', 'IHean 7', 'Mike12', 'receipt/64afa53c4a983.png', 'png');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `star` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `content`, `star`, `username`) VALUES
(1, 'This is good', 5, 'ali123C'),
(2, 'Good company', 4, 'abu123C'),
(3, 'Good service', 5, 'lee123C'),
(4, 'Very good ', 4, 'teoh123B'),
(5, 'Very good ', 4, 'teoh123B'),
(6, 'This is a very nice website', 5, 'abc123A'),
(7, 'GOOD PLAN', 5, 'Teocheahming1'),
(9, 'dsgsdsgsd', 5, 'TeoCheahMing1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `phoneNumber`, `password`) VALUES
('teoh123B', '011-20619201', '123456ba'),
('abc123A', '012-78390712', '123456ba'),
('Teocheahming1', '011-11737673', 'abc123'),
('Saaaf34', '017-2853718', 'abc123'),
('Abc123', '012-3456789', 'abc123'),
('Yong11', '011-51432667', '123456'),
('Mike12', '012-3456789', 'abc123'),
('teoh123C', '011-20370192', '123abc'),
('teoh123As', '013-2073902', '123abc'),
('teoh123As', '012-2390791', '123abc'),
('teoh123Bc', '011-20370192', '123abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataplan`
--
ALTER TABLE `dataplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phoneplan`
--
ALTER TABLE `phoneplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataplan`
--
ALTER TABLE `dataplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `phoneplan`
--
ALTER TABLE `phoneplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
