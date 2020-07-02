-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 09:18 AM
-- Server version: 10.4.6-MariaDB-log
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
-- Database: `ecomm1`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `log_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `event` varchar(60) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`log_id`, `user`, `event`, `date`, `desc`) VALUES
(16, 'admin', 'logout', '2020-03-28 15:58:34', 'Logout'),
(17, 'admin', 'login', '2020-04-01 11:10:18', 'Login'),
(18, 'admin', 'Delete', '2020-04-01 11:10:34', 'Delete Product'),
(19, 'admin', 'logout', '2020-04-01 11:11:49', 'Logout'),
(20, 'admin', 'login', '2020-04-01 16:37:46', 'Login'),
(21, 'admin', 'Insert', '2020-04-01 17:30:21', 'Insert Product : awdawd'),
(22, 'admin', 'Insert', '2020-04-01 17:30:59', 'Insert Product : asdasfd'),
(23, 'admin', 'Insert', '2020-04-01 17:31:28', 'Insert Product : asdasfd'),
(24, 'admin', 'Insert', '2020-04-01 17:33:11', 'Insert Product : asdasfd'),
(25, 'admin', 'Insert', '2020-04-01 17:33:17', 'Insert Product : asdasfd'),
(26, 'admin', 'Insert', '2020-04-01 17:34:44', 'Insert Product : Es Teh'),
(27, 'admin', 'Delete', '2020-04-01 17:34:58', 'Delete Product'),
(28, 'admin', 'login', '2020-04-02 04:41:02', 'Login'),
(29, 'admin', 'logout', '2020-04-02 04:45:39', 'Logout'),
(30, 'admin', 'login', '2020-04-02 05:12:57', 'Login'),
(31, 'admin', 'Insert', '2020-04-02 05:14:22', 'Insert Product : Nasi Goreng Telur'),
(32, 'admin', 'Update', '2020-04-02 05:21:07', 'Update Product'),
(33, 'admin', 'Update', '2020-04-02 05:21:20', 'Update Product'),
(34, 'admin', 'Update', '2020-04-02 05:23:53', 'Update Product'),
(35, 'admin', 'Update', '2020-04-02 05:26:24', 'Update Product'),
(36, 'admin', 'Update', '2020-04-02 05:28:08', 'Update Product'),
(37, 'admin', 'Update', '2020-04-02 05:29:21', 'Update Product'),
(38, 'admin', 'Update', '2020-04-02 05:30:07', 'Update Product'),
(39, 'admin', 'Update', '2020-04-02 05:31:11', 'Update Product'),
(40, 'admin', 'Delete', '2020-04-02 05:32:14', 'Delete Product'),
(41, 'admin', 'Delete', '2020-04-02 05:32:17', 'Delete Product'),
(42, 'admin', 'Insert', '2020-04-02 05:32:52', 'Insert Product : Sop Ayam'),
(43, 'admin', 'Insert', '2020-04-02 05:33:14', 'Insert Product : asdasd'),
(44, 'admin', 'Delete', '2020-04-02 05:33:22', 'Delete Product'),
(45, 'admin', 'Insert', '2020-04-02 05:38:57', 'Insert Product : Es Jeruk'),
(46, 'admin', 'Insert', '2020-04-02 05:40:25', 'Insert Product : Sop Buntut'),
(47, 'admin', 'Insert', '2020-04-02 05:43:47', 'Insert Product : Sambal Terasi'),
(48, 'admin', 'Update', '2020-04-02 08:14:13', 'Update Product'),
(49, 'admin', 'Update', '2020-04-02 08:30:17', 'Update Product'),
(50, 'admin', 'Update', '2020-04-02 08:30:29', 'Update Product'),
(51, 'admin', 'login', '2020-04-03 17:33:47', 'Login'),
(52, 'admin', 'Insert', '2020-04-03 17:35:45', 'Insert Product : Pasta 1'),
(53, 'admin', 'Insert', '2020-04-03 17:36:23', 'Insert Product : Pasta 2'),
(54, 'admin', 'Insert', '2020-04-03 17:37:18', 'Insert Product : Pasta 3'),
(55, 'admin', 'Insert', '2020-04-03 17:37:46', 'Insert Product : Es 1'),
(56, 'admin', 'Insert', '2020-04-03 17:38:13', 'Insert Product : Es 2'),
(57, 'admin', 'Insert', '2020-04-03 17:38:40', 'Insert Product : Es 3'),
(58, 'admin', 'Update', '2020-04-03 17:42:01', 'Update Product'),
(59, 'admin', 'login', '2020-04-05 11:41:29', 'Login'),
(60, 'admin', 'login', '2020-04-11 01:08:44', 'Login'),
(61, 'admin', 'Update', '2020-04-11 02:32:01', 'Update Product'),
(62, 'admin', 'Update', '2020-04-11 02:32:09', 'Update Product'),
(63, 'admin', 'Update', '2020-04-11 02:32:18', 'Update Product'),
(64, 'admin', 'Update', '2020-04-11 02:32:26', 'Update Product'),
(65, 'admin', 'Update', '2020-04-11 02:32:36', 'Update Product'),
(66, 'admin', 'Update', '2020-04-11 02:32:44', 'Update Product'),
(67, 'admin', 'Update', '2020-04-11 04:24:07', 'Update Product'),
(68, 'admin', 'Update', '2020-04-11 04:24:35', 'Update Product'),
(69, 'admin', 'Update', '2020-04-11 04:25:02', 'Update Product'),
(70, 'admin', 'Update', '2020-04-11 04:25:18', 'Update Product'),
(71, 'admin', 'login', '2020-04-15 13:50:36', 'Login'),
(72, 'admin', 'login', '2020-04-21 08:51:38', 'Login'),
(73, 'admin', 'login', '2020-04-29 07:55:27', 'Login'),
(74, 'admin', 'login', '2020-04-30 03:34:23', 'Login'),
(75, 'admin', 'Insert', '2020-04-30 05:11:44', 'Insert Product : Pizza 1'),
(76, 'admin', 'logout', '2020-04-30 08:41:33', 'Logout'),
(77, 'admin', 'login', '2020-04-30 08:42:20', 'Login'),
(78, 'admin', 'Insert', '2020-04-30 09:03:59', 'Insert Product : Pizza 2'),
(79, 'admin', 'Update', '2020-04-30 09:07:03', 'Update Product'),
(80, 'admin', 'Update', '2020-04-30 09:07:52', 'Update Product'),
(81, 'admin', 'Update', '2020-04-30 09:09:03', 'Update Product'),
(82, 'admin', 'Update', '2020-04-30 09:10:55', 'Update Product'),
(83, 'admin', 'login', '2020-06-23 09:11:40', 'Login'),
(84, 'admin', 'logout', '2020-06-23 09:11:47', 'Logout'),
(85, 'kasir', 'login', '2020-06-23 09:13:54', 'Login'),
(86, 'admin', 'login', '2020-06-23 10:33:57', 'Login'),
(87, 'admin', 'login', '2020-06-23 10:50:54', 'Login'),
(88, 'admin', 'logout', '2020-06-23 10:51:02', 'Logout'),
(89, 'admin', 'login', '2020-06-23 10:51:05', 'Login'),
(90, 'admin', 'logout', '2020-06-23 10:52:01', 'Logout'),
(91, 'kasir', 'login', '2020-06-23 10:52:06', 'Login'),
(92, 'kasir', 'logout', '2020-06-23 10:53:16', 'Logout'),
(93, 'admin', 'login', '2020-06-23 10:53:19', 'Login'),
(94, 'admin', 'logout', '2020-06-23 10:54:08', 'Logout'),
(95, 'admin', 'login', '2020-06-23 10:54:12', 'Login'),
(96, 'admin', 'logout', '2020-06-23 10:54:24', 'Logout'),
(97, 'kasir', 'login', '2020-06-23 10:54:30', 'Login'),
(98, 'kasir', 'logout', '2020-06-23 10:55:39', 'Logout'),
(99, 'admin', 'login', '2020-06-23 10:55:43', 'Login'),
(100, 'admin', 'logout', '2020-06-23 10:55:49', 'Logout'),
(101, 'kasir', 'login', '2020-06-23 10:55:55', 'Login'),
(102, 'kasir', 'logout', '2020-06-23 11:06:10', 'Logout'),
(103, 'admin', 'login', '2020-06-23 11:06:13', 'Login'),
(104, 'admin', 'logout', '2020-06-23 11:07:37', 'Logout'),
(105, 'kasir', 'login', '2020-06-23 11:07:45', 'Login'),
(106, 'kasir', 'login', '2020-06-23 12:58:16', 'Login'),
(107, 'admin', 'login', '2020-06-23 13:38:28', 'Login'),
(108, 'admin', 'logout', '2020-06-23 13:39:23', 'Logout'),
(109, 'kasir', 'login', '2020-06-23 13:39:28', 'Login'),
(110, 'admin', 'login', '2020-06-23 13:58:59', 'Login'),
(111, 'admin', 'login', '2020-06-23 15:03:31', 'Login'),
(112, 'admin', 'login', '2020-06-24 15:37:13', 'Login'),
(113, 'admin', 'login', '2020-06-28 09:22:51', 'Login'),
(114, 'admin', 'Update', '2020-06-28 13:45:06', 'Update Product'),
(115, 'admin', 'Insert', '2020-06-28 13:45:48', 'Insert Product : Pizza 3'),
(116, 'admin', 'Delete', '2020-06-28 13:45:57', 'Delete Product'),
(117, 'admin', 'logout', '2020-06-28 13:47:43', 'Logout'),
(118, 'admin', 'login', '2020-06-28 16:13:36', 'Login'),
(119, 'admin', 'logout', '2020-06-28 16:13:43', 'Logout'),
(120, 'admin', 'login', '2020-06-28 16:27:32', 'Login'),
(121, 'admin', 'logout', '2020-06-28 16:28:26', 'Logout'),
(122, 'admin', 'login', '2020-06-29 08:51:25', 'Login'),
(123, 'admin', 'logout', '2020-06-29 09:49:52', 'Logout'),
(124, 'admin', 'login', '2020-06-29 09:51:43', 'Login'),
(125, 'admin', 'login', '2020-06-30 09:39:55', 'Login'),
(126, 'admin', 'logout', '2020-06-30 09:40:01', 'Logout'),
(127, 'gudang', 'login', '2020-06-30 09:52:54', 'Login'),
(128, 'gudang', 'logout', '2020-06-30 09:53:02', 'Logout'),
(129, 'admin', 'login', '2020-06-30 10:00:45', 'Login'),
(130, 'admin', 'logout', '2020-06-30 10:00:53', 'Logout'),
(131, 'admin', 'login', '2020-06-30 10:31:45', 'Login'),
(132, 'admin', 'logout', '2020-06-30 10:32:26', 'Logout'),
(133, 'admin', 'login', '2020-06-30 13:37:08', 'Login'),
(134, 'admin', 'login', '2020-06-30 15:11:42', 'Login'),
(135, 'admin', 'logout', '2020-06-30 15:11:53', 'Logout'),
(136, 'kasir', 'login', '2020-06-30 15:11:59', 'Login'),
(137, 'kasir', 'login', '2020-06-30 15:32:13', 'Login'),
(138, 'admin', 'login', '2020-06-30 15:44:16', 'Login'),
(139, 'admin', 'Insert', '2020-06-30 16:30:51', 'Insert Product : aaaaa'),
(140, 'admin', 'Delete', '2020-06-30 16:31:50', 'Delete Product'),
(141, 'kasir', 'login', '2020-06-30 17:46:42', 'Login'),
(142, 'kasir', 'logout', '2020-06-30 17:48:17', 'Logout'),
(143, 'admin', 'login', '2020-06-30 17:48:22', 'Login'),
(144, 'kasir', 'logout', '2020-06-30 18:16:08', 'Logout');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` varchar(25) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
('1', 'Pasta'),
('2', 'Pizza'),
('3', 'Minuman'),
('4', 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(64) NOT NULL,
  `date` date NOT NULL,
  `status` enum('paid','unpaid','canceled') NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `table_number` int(3) NOT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `date`, `status`, `customer_name`, `table_number`, `notes`) VALUES
('5efb533e08c37', '2020-06-30', 'paid', 'nana', 2, 'gpl'),
('5efb552c667ad', '2020-06-30', 'paid', 'nana', 2, 'gpl'),
('5efd5a502dc2c', '2020-07-02', 'unpaid', 'abab', 1, 'aaa'),
('5efd82ba96cc1', '2020-07-02', 'unpaid', 'kaka', 2, NULL),
('5efd86e4b6c0b', '2020-07-02', 'unpaid', 'wildan', 4, NULL),
('5efd87a5479d5', '2020-07-02', 'unpaid', 'wildan', 4, NULL),
('5efd893d3f865', '2020-07-02', 'unpaid', 'wildan', 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `od_id` int(10) NOT NULL,
  `order_id` varchar(64) NOT NULL,
  `product_id` varchar(64) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`od_id`, `order_id`, `product_id`, `product_name`, `qty`, `price`) VALUES
(2, '5efb533e08c37', '5e87744e16818', 'Pasta 3', 1, 24000),
(3, '5efb533e08c37', '5e8774a0262f5', 'Es 3', 1, 15000),
(4, '5efb552c667ad', '5e87741753323', 'Pasta 2', 1, 22000),
(5, '5efb552c667ad', '5e877485a7ee5', 'Es 2', 1, 12500),
(20, '5efd82ba96cc1', '5e87744e16818', 'Pasta 3', 2, 24000),
(21, '5efd86e4b6c0b', '5e8774a0262f5', 'Es 3', 1, 15000),
(22, '5efd87a5479d5', '5e8774a0262f5', 'Es 3', 1, 15000),
(23, '5efd893d3f865', '5e87744e16818', 'Pasta 3', 1, 24000),
(24, '5efd893d3f865', '5e8774a0262f5', 'Es 3', 1, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description` text NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `image`, `description`, `category`) VALUES
('5e8773f191ad0', 'Pasta 1', 20000, '5e8773f191ad0.jpg', 'Pasta dengan disirami saus cabai', 'Pasta'),
('5e87741753323', 'Pasta 2', 22000, '5e87741753323.jpg', 'Pasta dengan saus keju', 'Pasta'),
('5e87744e16818', 'Pasta 3', 24000, '5e87744e16818.jpg', 'spageti dengan irisan daging', 'Pasta'),
('5e87746a2b470', 'Es 1', 10000, '5e87746a2b470.jpg', 'Minuman satu', 'Minuman'),
('5e877485a7ee5', 'Es 2', 12500, '5e877485a7ee5.jpg', 'Minuman 2', 'Minuman'),
('5e8774a0262f5', 'Es 3', 15000, '5e8774a0262f5.jpg', 'Es 3', 'Minuman'),
('5eaa5e10a2c0c', 'Pizza 1', 55000, '5eaa5e10a2c0c.jpg', 'Pizza 1', 'Pizza'),
('5eaa947f31594', 'Pizza 2', 70000, '5eaa947f31594.jpg', 'Pizza 2 dengan topping macam-macam', 'Pizza');

-- --------------------------------------------------------

--
-- Table structure for table `produk_hapus`
--

CREATE TABLE `produk_hapus` (
  `product_id` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description` text NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(1, 'admin', 'admin@mail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'kasir', 'kasir@mail.com', 'kasir', 'de28f8f7998f23ab4194b51a6029416f'),
(8, 'gudang', 'gudang@mail.com', 'gudang', 'cbb7449d78314665f9e7c7dd0a18a68a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`od_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `od_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
