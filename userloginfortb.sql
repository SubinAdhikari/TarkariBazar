-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2019 at 03:01 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userloginfortb`
--

-- --------------------------------------------------------

--
-- Table structure for table `marquee_info`
--

CREATE TABLE `marquee_info` (
  `id` int(100) NOT NULL,
  `notice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marquee_info`
--

INSERT INTO `marquee_info` (`id`, `notice`) VALUES
(1, 'Hello Welcome to HamroTarkariBazar!!'),
(2, 'Sale up to 50 % off on cauliflower');

-- --------------------------------------------------------

--
-- Table structure for table `tb_addadmin`
--

CREATE TABLE `tb_addadmin` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_addadmin`
--

INSERT INTO `tb_addadmin` (`id`, `fname`, `lname`, `email`, `password`, `phoneno`) VALUES
(1, 'Subin', 'Adhikari', 'subinadhikari61@gmail.com', '95c31bc0ebabaac9eda009feaa8cd7ad', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `tb_addorder`
--

CREATE TABLE `tb_addorder` (
  `id` int(100) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `product_id` int(100) NOT NULL,
  `productquantity` int(50) NOT NULL,
  `price` int(100) NOT NULL,
  `order_by` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `state` int(10) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_addproduct`
--

CREATE TABLE `tb_addproduct` (
  `id` int(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `update_date` varchar(255) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_addproduct`
--

INSERT INTO `tb_addproduct` (`id`, `image`, `link`, `quantity`, `title`, `description`, `update_date`, `price`) VALUES
(28, 'Asparagus(kurilo).jpg', 'à¤•à¥à¤°à¤¿à¤²à¥‹.php', 10, 'Asparagus(kurilo)', '', '2019-06-18', 100),
(29, 'Cabbage.jpg', 'à¤¬à¤¨à¥à¤¦à¤¾.php', 100, 'Cabbage', '', '2019-06-18', 50),
(30, 'BeetRoot(chukundar).jpg', 'BeetRoot(chukundar).php', 100, 'BeetRoot', '', '2019-06-18', 20),
(31, 'BitterGourd(titakarala).jpg', 'BitterGourd(titakarala).php', 50, 'BitterGourd', '', '2019-06-18', 55),
(32, 'BlackEyeBeans(bodi).jpg', 'BlackEyeBeans(bodi).php', 50, 'Black Eye Beans', '', '2019-06-18', 30),
(33, 'BottleGourd(lauka).png', 'BottleGourd(lauka).php', 10, 'Bottle Gourd', '', '2019-06-11', 50),
(34, 'Brinjal(Bhanta).jpg', 'Brinjal(Bhanta).php', 20, 'Brinjal', '', '2019-06-18', 55),
(35, 'Broccoli.jpg', 'Broccoli.php', 30, 'Broccoli', '', '2019-06-18', 125),
(41, 'capsicum.jpg', 'capsicum.php', 150, 'Capsicum', '', '2019-06-19', 125),
(43, 'chilly.jpg', 'chilly.php', 100, 'Chilly', '', '2019-06-21', 30),
(44, 'BrownRice.jpg', 'BrownRice.php', 30, 'Brown Rice', '', '2019-06-21', 2500),
(45, 'longGrainRice.jpg', 'LongGrainRice.php', 50, 'Long Grain Rice', '', '2019-06-22', 1625),
(46, 'basmatiRice.jpg', 'BasmatiRice.php', 50, 'Basmati Rice', '', '2019-06-21', 1525),
(48, 'Gundruk.png', 'gundruk.php', 100, 'gundruk', '', '2019-07-12', 100),
(49, 'apples.jpg', 'apple.php', 100, 'Mustang Apple', '', '2019-07-16', 125),
(50, 'potatoes.jpg', 'potato.php', 100, 'Potato', '', '2019-07-16', 50),
(51, 'cauliflower.jpg', 'cauliflower.php', 50, 'Cauliflower', '', '2019-07-31', 130),
(52, 'avocado.jpg', 'avocado.php', 20, 'Avocado', '', '2019-07-31', 350),
(53, 'orange.jpg', 'orange.php', 100, 'orange', '', '2019-08-01', 100),
(54, 'spinach.jpg', 'spinach.php', 20, 'Spinach', '', '2019-08-02', 80);

-- --------------------------------------------------------

--
-- Table structure for table `tb_adduser`
--

CREATE TABLE `tb_adduser` (
  `id` int(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `status` varchar(100) NOT NULL,
  `decline_times` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_adduser`
--

INSERT INTO `tb_adduser` (`id`, `fname`, `lname`, `email`, `password`, `phoneno`, `status`, `decline_times`) VALUES
(1, 'user1', 'user1', 'user1@gmail.com', '24c9e15e52afc47c225b757e7bee1f9d', '9860275399', 'active', 0),
(2, 'user2', 'user2', 'user2@gmail.com', '7e58d63b60197ceb55a1c487989a3720', '9860275377', 'active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_confirmorder`
--

CREATE TABLE `tb_confirmorder` (
  `id` int(100) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `product_id` int(100) NOT NULL,
  `productquantity` int(50) NOT NULL,
  `price` int(100) NOT NULL,
  `order_by` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `state` int(10) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_confirmorder`
--

INSERT INTO `tb_confirmorder` (`id`, `productname`, `product_id`, `productquantity`, `price`, `order_by`, `fname`, `lname`, `phone`, `state`, `municipality`, `city`, `area`) VALUES
(8, ' BeetRoot(chukundar) ', 30, 2, 20, 'user1@gmail.com ', 'Subin', 'Adhikari', '9860275399', 3, 'Budhanilkhanta', 'Kathmandu', 'Kapan'),
(4, ' à¤¬à¤¨à¥à¤¦à¤¾ ', 29, 4, 50, 'user2@gmail.com ', 'user2', 'user2', '9860275377', 3, 'patan', 'Lalitpur', 'Sathdobato');

-- --------------------------------------------------------

--
-- Table structure for table `tb_deliveredorder`
--

CREATE TABLE `tb_deliveredorder` (
  `id` int(100) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `product_id` int(100) NOT NULL,
  `productquantity` int(50) NOT NULL,
  `price` int(100) NOT NULL,
  `order_by` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `state` int(10) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_deliveredorder`
--

INSERT INTO `tb_deliveredorder` (`id`, `productname`, `product_id`, `productquantity`, `price`, `order_by`, `fname`, `lname`, `phone`, `state`, `municipality`, `city`, `area`) VALUES
(1, ' avocado ', 52, 3, 350, 'user1@gmail.com ', 'User1', 'User1', '9860275399', 3, 'Budhanilkhanta', 'Kathmandu', 'Kapan'),
(3, ' gundruk ', 48, 3, 100, 'user1@gmail.com ', 'User1', 'user1', '9860275399', 3, 'Budhanilkhanta', 'Kathmandu', 'Kapan'),
(6, ' spinach ', 54, 3, 80, 'user1@gmail.com ', 'Sabita', 'Adhikari', '9841986298', 3, 'Budhanilkhanta', 'Kathmandu', 'Kapan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marquee_info`
--
ALTER TABLE `marquee_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_addadmin`
--
ALTER TABLE `tb_addadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_addorder`
--
ALTER TABLE `tb_addorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_addproduct`
--
ALTER TABLE `tb_addproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_adduser`
--
ALTER TABLE `tb_adduser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marquee_info`
--
ALTER TABLE `marquee_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_addadmin`
--
ALTER TABLE `tb_addadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_addorder`
--
ALTER TABLE `tb_addorder`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_addproduct`
--
ALTER TABLE `tb_addproduct`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tb_adduser`
--
ALTER TABLE `tb_adduser`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
