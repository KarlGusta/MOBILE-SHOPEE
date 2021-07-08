-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www/phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 8th 2021 at 12:56 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */

--
-- Database: `shopee`
--

-- --------------------------------------------------------------


--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
    `cart_id` int(11) NOT NULL,
    `user_id` int(11) NOT NULL,
    `item_id` int(11) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
    `item_id` int(11) NOT NULL,
    `item_brand` varchar(200) NOT NULL,
    `item_name` varchar(255) NOT NULL,
    `item_price` double(10,2) NOT NULL,
    `item_image` varchar(255) NOT NULL,
    `item_register` datetime DEFAULT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` ()