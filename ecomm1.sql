-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 05:24 AM
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
(66, 'admin', 'Update', '2020-04-11 02:32:44', 'Update Product');

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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(64) NOT NULL,
  `date` date NOT NULL,
  `customer_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `od_id` varchar(25) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `order_id` varchar(64) NOT NULL,
  `product_id` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('5e8773f191ad0', 'Pasta 1', 20000, '5e8773f191ad0.jpg', 'Pasta satu', 'Pasta'),
('5e87741753323', 'Pasta 2', 22000, '5e87741753323.jpg', 'Pasta Dua', 'Pasta'),
('5e87744e16818', 'Pasta 3', 24000, '5e87744e16818.jpg', 'Pasta Tiga', 'Pasta'),
('5e87746a2b470', 'Es 1', 10000, '5e87746a2b470.jpg', 'Minuman satu', 'Minuman'),
('5e877485a7ee5', 'Es 2', 12500, '5e877485a7ee5.jpg', 'Es 2', 'Minuman'),
('5e8774a0262f5', 'Es 3', 15000, '5e8774a0262f5.jpg', 'Es 3', 'Minuman');

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
(2, 'admin', 'admin@mail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'mola', 'mola@mail.net', 'molamola', '5d5a1b02af69436cdd7507069e257112');

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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
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
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

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
