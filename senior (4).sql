-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 10:42 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senior`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `to_userName` varchar(50) NOT NULL,
  `from_userName` varchar(50) NOT NULL,
  `chat_mssg` varchar(200) NOT NULL,
  `chat_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `to_userName`, `from_userName`, `chat_mssg`, `chat_status`) VALUES
(4, 'admin', 'user', 'hello', 0),
(5, 'user', 'admin', 'how are you ', 0),
(6, 'admin', 'user', 'fine and you ', 1),
(7, 'admin', 'owner', 'i.mmm', 1),
(11, 'admin', 'user', 'hi', 1),
(12, 'admin', 'user', 'helooo', 1),
(13, 'admin', 'user', 'hellooooo', 1),
(14, 'admin', 'user', 'hii', 1),
(15, 'admin', 'user', 'test status', 1),
(16, 'admin', 'owner', 'hii', 1),
(17, 'admin', 'user', 'kifak', 1),
(20, 'charbel', 'admin', 'hii', 0),
(21, 'ALL', 'admin', 'sale 50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `storeName` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `userName`, `storeName`, `comment`, `date`) VALUES
(2, 'user', 'ownerStore', 'good store', '2020-05-13 09:07:29'),
(3, 'user', 'ownerStore', 'good', '2020-05-13 09:08:40'),
(11, 'user', 'ownerStore', 'goooooodd', '2020-06-10 09:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `storeName` varchar(50) NOT NULL,
  `points` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `userName`, `storeName`, `points`) VALUES
(1, 'user', 'Adidas', 100),
(3, 'user', 'computer Lab', 25),
(4, 'user', 'Adidas', 5),
(5, 'user', 'Adidas', 5),
(6, 'john_t2', 'Adidas', 1),
(7, 'user', 'rewards', -100),
(8, 'user', 'Adidas', 8),
(9, 'user', 'Adidas', 5),
(10, 'user', 'Fashion department', 125),
(11, 'user', 'Game stop', 20),
(12, 'john_t2', 'Adidas', 20),
(13, 'smith_j30', 'Adidas', 50),
(14, 'lea.b21', 'Adidas', 80),
(15, 'john_t2', 'Computer Lab', 4),
(16, 'user', 'Computer Lab', 6),
(17, 'smith_j30', 'Computer Lab', 10),
(18, 'lea.b21', 'Computer Lab', 2),
(19, 'user', 'Fashion department ', 3),
(20, 'john_t2', 'Fashion department ', 3),
(21, 'smith_j30', 'Fashion department ', 5),
(22, 'lea.b21', 'Fashion department ', 13),
(23, 'user', 'Game Stop', 5),
(24, 'john_t2', 'Game Stop', 6),
(25, 'smith_j30', 'Game Stop', 4);

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `id` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `pts` int(200) NOT NULL,
  `Retitle` varchar(50) NOT NULL,
  `fromC` int(200) NOT NULL,
  `toC` int(200) NOT NULL,
  `sale` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`id`, `userName`, `img`, `pts`, `Retitle`, `fromC`, `toC`, `sale`) VALUES
(34, 'admin', 'phone.jpg', 100, 'Power Bank 10000MA', 50, 25, 50),
(36, 'franky.12', 'makeup.jpg', 50, 'Makeup Cream', 0, 0, 100),
(37, 'admin', 'desert.jpg', 2000, 'Trip to Sahara Desert in Africa ', 600, 200, 67),
(40, 'owner', 'weight.png', 500, 'full Plan for weight loss', 50, 10, 60),
(44, 'adams.bk01', 'phone.jpg', 200, 'Power Bank 10000MA', 30, 10, 67),
(45, 'junior.j101', 'controller.jpg', 500, 'ps4 Controller', 80, 10, 90);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `fromCash` int(50) NOT NULL,
  `toPoints` int(50) NOT NULL,
  `pp` varchar(200) NOT NULL,
  `slideImg1` varchar(200) NOT NULL,
  `slideImg2` varchar(200) NOT NULL,
  `slideImg3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`ID`, `name`, `userName`, `address`, `phone`, `fromCash`, `toPoints`, `pp`, `slideImg1`, `slideImg2`, `slideImg3`) VALUES
(1, 'Adidas', 'owner', 'zgharta', '123456', 10, 1, 'adidas.jpg', 'adidas.jpg', 'ss.jpg', 'slide3.jpg'),
(2, 'Computer Lab', 'adams.bk01', 'zgharta', '0111235', 5, 1, 'computer.jpg', 'pc1.jpg', 'pc2.jpg', 'pc3.jpg'),
(3, 'Fashion department ', 'franky.12', 'Beirut', '12345678', 15, 1, 'fashion3.jpg', 'fashion1.jpg', 'fashion2.png', 'fashion3.jpg'),
(4, 'Game Stop', 'junior.j101', 'Zalka', '44556677', 20, 1, 'gamestop.jpg', 'gam1.jpg', 'game2.jpg', 'game3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` varchar(25) NOT NULL,
  `roleID` int(10) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nameOnCredit` varchar(100) NOT NULL,
  `cardNb` int(100) NOT NULL,
  `expYear` int(25) NOT NULL,
  `cvv` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `userName`, `password`, `fname`, `lname`, `Email`, `Address`, `Phone`, `roleID`, `img`, `nameOnCredit`, `cardNb`, `expYear`, `cvv`) VALUES
(15, 'admin', 'admin123456', 'admin', 'admin', 'admin@gmail.com', 'admin', '015478963', 1, '', '', 0, 0, 0),
(25, 'charbel', 'charbel', 'charbel', 'charbel', 'chabel', 'charbel', '123', 1, '', '', 0, 0, 0),
(26, 'user', 'user', 'user', 'user', 'user', 'user', '123000', 3, 'screen.png', '', 0, 0, 0),
(28, 'owner', 'owner', 'owner', 'owner', 'owner@owner.com', 'owner', '03/030303', 2, '', '', 0, 0, 0),
(41, 'john_t2', 'john12345', 'john', 'terry', 'john_t@gmail.com', 'Beirut  ', '012345678', 3, '', '', 0, 0, 0),
(42, 'smith_j30', 'jhonny123', 'jhonny', 'smith', 'jhonny_smith30@gmail.com', 'Zalka', '06666789', 3, '', '', 0, 0, 0),
(43, 'lea.b21', 'leaborrow12', 'lea', 'borrow', 'borrow_lea21@gmail.com', 'Jounieh', '041234567', 3, '', '', 0, 0, 0),
(44, 'adams.bk01', 'adamsbarker', 'Adams', 'Barker', 'barker.adams01@gmail.com', 'Byblos', '042125234', 2, '', 'adams Barker', 2147483647, 2021, 321),
(46, 'franky.12', 'frank4545', 'Frank', 'Hills', 'franky_hills.12@gmail.com', 'Byblos', '067485965', 2, '', 'Frank Hills', 2147483647, 2022, 753),
(64, 'junior.j101', 'junior101', 'junior', 'Junior', 'junior.j101@gmail.com', 'zgharta', '03698521', 2, '', 'junior junior ', 2147483647, 2021, 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userName` (`userName`,`storeName`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`ID`,`name`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`,`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
