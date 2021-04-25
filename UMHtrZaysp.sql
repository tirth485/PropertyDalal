-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2021 at 04:59 AM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `UMHtrZaysp`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `images`, `proid`) VALUES
(1, '1.jpg', 1),
(2, '2.jpg', 2),
(3, '3.jpg', 2),
(4, '4.jpg', 2),
(5, '3.jpg', 3),
(6, '4.jpg', 3),
(7, '4.jpg', 4),
(8, '1.jpg', 5),
(9, '2.jpg', 5),
(10, '1.jpg', 6),
(11, '2.jpg', 6),
(12, '', 7),
(13, 'WhatsApp Image 2020-04-15 at 8.43.51 PM.jpeg', 8),
(14, 'WhatsApp Image 2020-04-15 at 8.43.51 PM.jpeg', 9),
(15, '', 10),
(16, '0b5f4a76c14b688e2a4cbd4d8b1e4228l-m23xd-w1020_h770_q80.jpg', 11),
(17, '002.jpg', 11),
(18, 'ab5de9678d68ee74349f4fe7836f2582l-m1xd-w1020_h770_q80.jpg', 12),
(19, 'BuOiLm.jpg', 13),
(20, 'Rc6dd2cdadb0412350e0ec0e09c255d2a.jfif', 13),
(21, '0b5f4a76c14b688e2a4cbd4d8b1e4228l-m23xd-w1020_h770_q80.jpg', 14),
(22, '002.jpg', 14),
(23, '1126980.jpg', 14),
(24, 'BuOiLm.jpg', 14),
(25, '1126980.jpg', 15),
(26, 'BuOiLm.jpg', 15),
(27, 'Rc6dd2cdadb0412350e0ec0e09c255d2a.jfif', 15),
(28, '1126980.jpg', 16),
(29, 'BuOiLm.jpg', 16),
(30, 'BuOiLm.jpg', 17),
(31, 'Rc6dd2cdadb0412350e0ec0e09c255d2a.jfif', 17),
(32, '0b5f4a76c14b688e2a4cbd4d8b1e4228l-m23xd-w1020_h770_q80.jpg', 18),
(33, '002.jpg', 18),
(34, '1126980.jpg', 18),
(35, 'Rc6dd2cdadb0412350e0ec0e09c255d2a.jfif', 18),
(36, '0b5f4a76c14b688e2a4cbd4d8b1e4228l-m23xd-w1020_h770_q80.jpg', 19),
(37, '002.jpg', 19),
(38, '1126980.jpg', 19);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fbid` int(8) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fbid`, `name`, `email`, `subject`, `message`) VALUES
(15, 'savan', 's@p.com', 'sub1', 'msg1'),
(16, 'Tirth Shah', 'tirthshah485@gmail.com', 'ok', 'ok'),
(17, 'Tirth Shah', 'tirthshah485@gmail.com', 'ok', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `pid` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(10) DEFAULT NULL,
  `sqft` int(10) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`pid`, `name`, `address`, `type`, `image`, `description`, `price`, `userid`, `sqft`, `category`) VALUES
(1, '1', '1', '2', '1.jpg', '12', '12', NULL, 0, ''),
(2, 'MyProp', '1Ad', 'buy', '1.jpg', '123', '123', NULL, 0, ''),
(3, 'XYZ', '12', '123', '1.jpg', '123', '123', NULL, 0, ''),
(4, 'MyProp', 'Ahmd', 'Buy', '1.jpg', '123', '123', NULL, 0, ''),
(5, 'Savan', 'Ahmd', 'sell', '4.jpg', 'My Property', '500', 17, 0, ''),
(6, 'Savan', 'Ahmd', 'sell', '2.jpg', 'My Property 2', '10000', 17, 0, ''),
(7, 'My New Property', 'Dahegam,Gandhinagar,Gujarat', 'Rent', '4.jpg', 'This is a new Property', '15000', 17, 2500, ''),
(9, 'yash shah', 'ahmedabad', 'Sell', 'pexels-photo-1535244.jpeg', 'qwd', '23', 22, 222, 'flat'),
(10, 'RTE', 'mikusuku', 'Sell', '2.jpg', 'My Psdjfsjdfbjsdbfkjdsbfjksdbfjksbdfjkbsdjfkbsdjfbsdjfbsdkjfbkj', '10000', 17, 5000, 'land'),
(11, 'Jineshvar vila', 'goa india', 'Sell', '1126980.jpg', '10 bedroom + kitchen', '82222', 22, 32056, 'comercial'),
(12, 'Gaur World Smart Street - Greater Noida West', 'Block No. 482, Narthan Dandi Road, Near Agrawal Vikas Parisad College, Dandi, Surat', 'Sell', '0b5f4a76c14b688e2a4cbd4d8b1e4228l-m23xd-w1020_h770_q80.jpg', 'As the first builder to have pioneered the farmhouse concept in South Gujarat, 99 Developers is developing a new eco-friendly community in Surat where the focus is on living in harmony with the natural environment without changing the luxurious lifestyles everyone has become used to. We welcome you to our eco-friendly farm houses that abound in the goodness of community living and freshness of nature.Come, enjoy green living!\r\nUsp of project-\r\nOnly 47 Elite Families.\r\nFully Furnished Bungalows with Interiors.\r\n15000 Sq.Ft. Club House with Preserved Trees.\r\nBanquet Hall\r\nMembers can organise events Free of Charge.', '500000', 22, 30256, 'comercial'),
(13, 'demo', 'feads', 'Sell', 'ab5de9678d68ee74349f4fe7836f2582l-m1xd-w1020_h770_q80.jpg', 'dsa', '23', 22, 333, 'flat'),
(14, 'demo', 'ihhisac', 'Sell', '0b5f4a76c14b688e2a4cbd4d8b1e4228l-m23xd-w1020_h770_q80.jpg', 'sad', '342', 22, 2332, 'flat'),
(15, 'demo', 'wdqn', 'Sell', 'BuOiLm.jpg', 'wwdqw', '324', 22, 453, 'flat'),
(16, 'demo4', 'efwioh', 'Sell', '1126980.jpg', 'wqeweq', '223', 22, 32423, 'flat'),
(17, 'hjdfhsk33', 'adads', 'Sell', '1126980.jpg', 'wqeewq', '32', 22, 432, 'flat'),
(18, 'demo_sp', '222', 'Sell', '', '3e24', '32', 22, 5453, 'flat'),
(19, 'tirth', '324u923', 'Sell', '', 'rtsdfgds', '123', 22, 4334, 'flat');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `userid` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `isverified` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`userid`, `name`, `email`, `password`, `phone`, `city`, `type`, `isverified`) VALUES
(17, 'Savan', 'savan9080@gmail.com', '202cb962ac59075b964b07152d234b70', '123', 'sda', 'agent', 1),
(18, 'Mosam', 'mnp0837@outlook.com', '202cb962ac59075b964b07152d234b70', '12345', 'Brd', 'agent', 0),
(19, 'Mosam', 'mmp0837@outlook.com', '6512bd43d9caa6e02c990b0a82652dca', '12345', 'Brd', 'agent', 1),
(20, 'Yash', '49yash@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', '111', 'JASJ', 'agent', 1),
(22, 'tirth', 'tirthshah485@gmail.com', '42949cccb6553532843694f062142a17', '7874720982', 'dahegam', 'agent', 0),
(23, 'tirth', 'vs2147136@gmail.com', '8af0faaaad7d857fffcbe4005eeef578', '3242', 'snon', 'builder', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fbid`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fbid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `Users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
