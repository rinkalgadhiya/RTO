-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 05:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rto`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(100) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `uname` varchar(55) NOT NULL,
  `email` varchar(85) NOT NULL,
  `adharno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `uname`, `email`, `adharno`) VALUES
(1, 'hardeep', 'hardeepchavda2206@gmail.com', '23231231231232'),
(3, 'surbhi', 'surbhichavda9@gmail.com', '0103001230123013'),
(10, 'rinkal', 'gadhiyarinkal66@gmail.com', '23231231231232'),
(11, 'hardeep', 'hardeepchavda2206@gmail.com', '23231231231232'),
(12, 'hardeep', 'hardeepchavda2206@gmail.com', 'dfsasffasdfaaf'),
(13, 'hardeep', 'hardeepchavda2206@gmail.com', '0103001230123013'),
(14, 'hardeep', 'hardeepchavda2206@gmail.com', '23231231231232'),
(15, 'admin', 'hardeepchavda2206@gmail.com', '23231231231232'),
(16, 'huiods hj', 's@gmail.com', '23231231231232'),
(17, 'xs  ds', 'hardeepchavda2206@gmail.com', 'dc'),
(18, 'abhay', 'abhayfataniya@gmail.com', '0103001230123013');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `rate` varchar(80) NOT NULL,
  `extra` varchar(200) NOT NULL,
  `email` varchar(95) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `rate`, `extra`, `email`) VALUES
(1, 'Good', 'You should complete your report first.', 'hardeepchavda2206@gmail.com'),
(3, 'Good', 'jklhdfshlvdhsdhkdvkdhvj', 'lhhjldvdjklew@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `lmv1`
--

CREATE TABLE `lmv1` (
  `id` int(10) NOT NULL,
  `name` varchar(65) NOT NULL,
  `lname` varchar(65) NOT NULL,
  `ano` varchar(55) NOT NULL,
  `mno` varchar(55) NOT NULL,
  `age` varchar(99) NOT NULL,
  `vno` varchar(45) NOT NULL,
  `city` varchar(75) NOT NULL,
  `email` varchar(95) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lmv1`
--

INSERT INTO `lmv1` (`id`, `name`, `lname`, `ano`, `mno`, `age`, `vno`, `city`, `email`, `addr`, `gender`) VALUES
(1, 'hardeep', 'chavda', '1234678768', '9726906220', '20', 'GJ11BK1412', 'Junagadh', 'hardeepchavda2206@gm', '24,Shivkrupa Nr Noble School', 'Male'),
(2, 'Viken', 'Hadavani', '343245324', '6489327342', '20', 'GJ11BN2144', 'Junagadh (GJ-11)', 'VH@gmail.com', 'abc etc....', 'Male'),
(3, 'hardeep', 'chavda', '534243546', '2147483647', '55', 'GJ03AB8203', 'Junagadh (GJ-11)', 'bghed@gmail.com', 'abc etc....', 'Male'),
(5, 'vehjkwdwfhbj', 'ukdgkc', 'klhjedhkqhed', 'lkhedhkhqe', '67', 'kejnfjkw', 'Ahemdabad (GJ-01)', 'cjkwjk@gmail.com', 'skjcjkcewwc', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `mcwg`
--

CREATE TABLE `mcwg` (
  `id` int(100) NOT NULL,
  `name` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `ano` varchar(85) NOT NULL,
  `mno` varchar(50) NOT NULL,
  `age` varchar(99) NOT NULL,
  `vno` varchar(45) NOT NULL,
  `city` varchar(175) NOT NULL,
  `email` varchar(195) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `gender` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mcwg`
--

INSERT INTO `mcwg` (`id`, `name`, `lname`, `ano`, `mno`, `age`, `vno`, `city`, `email`, `addr`, `gender`) VALUES
(1, 'abc', 'xyz', '1213244343434', '4554654765767', '32', 'GJ18bc7759', 'djbhjb', 'adad@gmail.com', 'dwadwdaaffafff', 'Male'),
(11, 'abc', 'xyz', '1213244343434', '4554654765767', '32', 'GJ18bc7759', 'djbhjb', 'adad@gmail.com', 'dwadwdaaffafff', 'Male'),
(12, 'hardeep', 'chavda', '23231231231232', '9726906220', '19', 'Gj11BK2190', 'Junagadh (GJ-11)', 'hardeepchavda2206@gmail.com', 'fghdggdfrgfgdgfdgfdgfdggdggfdfgfdgfvgdfvgfdgv', 'Male'),
(13, 'ffesfesf', 'fdaae', '5teetheshgye5', 'gsrfgsgf', '41', 'sefgfg', 'Ahemdabad (GJ-01)', 'efsefesf@gmail.com', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'Male'),
(14, 'hjgfhjgfj', 'ddwcefewfef', 'hjhjg', 'efewf', '22', 'efewfewfe', 'Ahemdabad (GJ-01)', 'v@gmail.com', 'efwfewffefw', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `mcwog`
--

CREATE TABLE `mcwog` (
  `id` int(100) NOT NULL,
  `name` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `ano` varchar(65) NOT NULL,
  `mno` varchar(45) NOT NULL,
  `age` varchar(100) NOT NULL,
  `vno` varchar(55) NOT NULL,
  `city` varchar(95) NOT NULL,
  `email` varchar(95) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `gender` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mcwog`
--

INSERT INTO `mcwog` (`id`, `name`, `lname`, `ano`, `mno`, `age`, `vno`, `city`, `email`, `addr`, `gender`) VALUES
(3, 'abc', 'xyz', '4343243233423', '9157273866', '23', 'gj6nh9484', 'wdedsd', 'feefef@gmail.com', 'wddsada dawsdadadsdas dwdw ', 'Female'),
(4, 'parth', 'chorera', '01030012301230', '9825530793', '20', 'GJ11BK1412', 'Patan (GJ-24)', 'parth@gmail.com', 'svgejfhgjs dtwtn trr qaa te5r  4rqarf 3 3 3', 'Male'),
(5, 'hjhjvdj', 'jkdchj', 'jkjle', 'biqe', '22', 'shjkchjksc', 'Ahemdabad (GJ-01)', 's@gmail.com', 'fcfjgjhjsahj', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg_scrap_vehicle`
--

CREATE TABLE `reg_scrap_vehicle` (
  `id` int(100) NOT NULL,
  `RVSFO` varchar(30) NOT NULL,
  `vehicle_no` varchar(35) NOT NULL,
  `adhar_no` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg_scrap_vehicle`
--

INSERT INTO `reg_scrap_vehicle` (`id`, `RVSFO`, `vehicle_no`, `adhar_no`) VALUES
(2, 'RVSF Owner', 'Gj11BK2190', '123123123123'),
(4, '', 'Gj11BK2190', '123123123123');

-- --------------------------------------------------------

--
-- Table structure for table `rto_registration`
--

CREATE TABLE `rto_registration` (
  `id` int(11) NOT NULL,
  `vehicle_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `state` varchar(55) NOT NULL,
  `city` varchar(85) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rto_registration`
--

INSERT INTO `rto_registration` (`id`, `vehicle_no`, `email`, `state`, `city`) VALUES
(45, '12212', 'hardeepchavda2206@gmail.com', 'Gujrat', 'Junagadh'),
(46, '12212', 'hardeepchavda2206@gmail.com', 'Gujrat', 'Bavla (GJ-38)'),
(49, '122124', 'hardeepchavda2206@gmail.com', 'Gujrat', 'Ahemdabad (GJ-01)'),
(50, '122124', 'hardeepchavda2206@gmail.com', 'Gujrat', 'Ahemdabad (GJ-01)'),
(57, '12212', 'hardeepchavda2206@gmail.com', 'Gujrat', 'Ahemdabad (GJ-01)'),
(60, '122124', 'hardeepchavda2206@gmail.com', 'Gujarat', 'Junagadh (GJ-11)'),
(61, '122124', 'hardeepchavda2206@gmail.com', 'Gujarat', 'Junagadh (GJ-11)'),
(62, '1212312123', 'surabhichavda9@gmail.com', 'Gujarat', 'Ahemdabad (GJ-01)'),
(64, '1234567', 'gadhiyarinkal66@gmail.com', 'Gujarat', 'Vadodara (GJ-06)'),
(65, '4645646', 'parvgadhiya1711@gmail.com', 'Gujarat', 'Ahemdabad (GJ-01)'),
(66, '122124', 'hardeepchavda2206@gmail.com', 'Gujarat', 'Amreli (GJ-14)'),
(67, '122124', 'gadhiyarinkal66@gmail.com', 'Gujarat', 'Morbi (GJ-36)'),
(69, '1234567', 'hardeepchavda2206@gmail.com', 'Gujarat', 'Gandhinagar (GJ-18)'),
(71, '1212312123', 'hardeepchavda2206@gmail.com', 'Gujarat', 'Gandhinagar (GJ-18)'),
(72, '12212', 'hardeepchavda2206@gmail.com', 'Gujarat', 'Ahemdabad (GJ-01)'),
(73, '994578', 'hardeepchavda2206@gmail.com', 'Gujarat', 'Junagadh (GJ-11)');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(100) NOT NULL,
  `vno` varchar(15) NOT NULL,
  `unm` varchar(40) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `utype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `vno`, `unm`, `pass`, `email`, `utype`) VALUES
(3, 'GJ01AA1000', 'admin', 'admin', 'admin@gmail.com', 'admin'),
(6, '5687899', 'GJ11BK1412', 'deven', 'd@gmail.com', 'user'),
(7, 'dgsg', 'dsgs', 'gdsg', 'dgdsg', 'user'),
(8, 'GJ11BK1412', 'hardeep', 'h123', 'hardeepchavda2206@gmail.com', 'user'),
(10, 'Gj11ab7868', 'rinkal', 'rinkal123', 'a@gmail.com', 'user'),
(11, 'gj11FZ0912', 'viken', '098', 'v@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lmv1`
--
ALTER TABLE `lmv1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcwg`
--
ALTER TABLE `mcwg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcwog`
--
ALTER TABLE `mcwog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_scrap_vehicle`
--
ALTER TABLE `reg_scrap_vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rto_registration`
--
ALTER TABLE `rto_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lmv1`
--
ALTER TABLE `lmv1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mcwg`
--
ALTER TABLE `mcwg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mcwog`
--
ALTER TABLE `mcwog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reg_scrap_vehicle`
--
ALTER TABLE `reg_scrap_vehicle`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rto_registration`
--
ALTER TABLE `rto_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
