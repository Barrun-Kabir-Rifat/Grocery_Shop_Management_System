-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 03:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT;
SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS;
SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION;
SET NAMES utf8mb4;

--
-- Database: shop_db
--

-- --------------------------------------------------------

--
-- Table structure for table cart
--

CREATE TABLE cart (
  id int(100) NOT NULL,
  user_id int(100) NOT NULL,
  pid int(100) NOT NULL,
  name varchar(100) NOT NULL,
  price int(100) NOT NULL,
  quantity int(100) NOT NULL,
  image varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table message
--

CREATE TABLE message (
  id int(100) NOT NULL,
  user_id int(100) NOT NULL,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  number varchar(12) NOT NULL,
  message varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table orders
--

CREATE TABLE orders (
  id int(100) NOT NULL,
  user_id int(100) NOT NULL,
  name varchar(100) NOT NULL,
  number varchar(12) NOT NULL,
  email varchar(100) NOT NULL,
  method varchar(50) NOT NULL,
  address varchar(500) NOT NULL,
  total_products varchar(1000) NOT NULL,
  total_price int(100) NOT NULL,
  placed_on varchar(50) NOT NULL,
  payment_status varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table products
--

CREATE TABLE products (
  id int(100) NOT NULL,
  name varchar(100) NOT NULL,
  category varchar(20) NOT NULL,
  details varchar(500) NOT NULL,
  price int(100) NOT NULL,
  image varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table users
--

CREATE TABLE users (
  id int(100) NOT NULL,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  password varchar(100) NOT NULL,
  user_type varchar(20) NOT NULL DEFAULT 'user',
  image varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table wishlist
--

CREATE TABLE wishlist (
  id int(100) NOT NULL,
  user_id int(100) NOT NULL,
  pid int(100) NOT NULL,
  name varchar(100) NOT NULL,
  price int(100) NOT NULL,
  image varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

ALTER TABLE cart
  ADD PRIMARY KEY (id);

ALTER TABLE message
  ADD PRIMARY KEY (id);

ALTER TABLE orders
  ADD PRIMARY KEY (id);

ALTER TABLE products
  ADD PRIMARY KEY (id);

ALTER TABLE users
  ADD PRIMARY KEY (id);

ALTER TABLE wishlist
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

ALTER TABLE cart
  MODIFY id int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

ALTER TABLE message
  MODIFY id int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE orders
  MODIFY id int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE products
  MODIFY id int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

ALTER TABLE users
  MODIFY id int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

ALTER TABLE wishlist
  MODIFY id int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

COMMIT;

SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT;
SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS;
SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION;
