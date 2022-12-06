-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 04:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_onyx`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `id_category` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `delivery_status` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone_no` int(15) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ordered`
--

CREATE TABLE `tb_ordered` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `address` text NOT NULL,
  `phone_no` int(15) NOT NULL,
  `delivery_status` varchar(100) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_detail`
--

CREATE TABLE `tb_order_detail` (
  `id_detail` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `quantity_product` int(11) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_payment`
--

CREATE TABLE `tb_payment` (
  `id_purchase` int(11) NOT NULL,
  `first_name` int(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone_no` int(15) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_pict` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name`, `username`, `password`, `level`) VALUES
(1, '', 'rajwa', 'rajwa', 'admin'),
(3, 'jasmine', 'jass', '$2y$10$JZHxlJAMpzN2UQr6DJOpFO6Pqnuv.caKmftzFdUDMZkA.hu8zj3C6', 'user'),
(4, 'ruto', 'haruto', '$2y$10$f0s8hO0XJeOvOglWS8FYVOcbP38Dm0GW9NjOqiXXPCjfFuZOgKRGy', 'user'),
(5, 'admin', 'admin', '$2y$10$BkQUMtnjQkHUcZLThT8cqOyTihguJMr4GYJaMlvRCqsMJOge5UN7y', 'admin'),
(6, 'wawa', 'rajwa athaya', '$2y$10$nwg3xngAZCu0HIQRy00olO7GPddpCaFdP.8MjOaO4dmUbnKWEJv8.', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wishlist`
--

CREATE TABLE `tb_wishlist` (
  `id_wishlist` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `product_pict` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `quantity_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tb_ordered`
--
ALTER TABLE `tb_ordered`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD PRIMARY KEY (`id_purchase`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_wishlist`
--
ALTER TABLE `tb_wishlist`
  ADD PRIMARY KEY (`id_wishlist`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ordered`
--
ALTER TABLE `tb_ordered`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_payment`
--
ALTER TABLE `tb_payment`
  MODIFY `id_purchase` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_wishlist`
--
ALTER TABLE `tb_wishlist`
  MODIFY `id_wishlist` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
