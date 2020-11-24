-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 07:16 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drift_v4_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` varchar(200) NOT NULL,
  `author_name` varchar(200) DEFAULT NULL,
  `article_title` varchar(200) DEFAULT NULL,
  `article_desc` longtext DEFAULT NULL,
  `article_content` longtext DEFAULT NULL,
  `image_link` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `articles_comment`
--

CREATE TABLE `articles_comment` (
  `article_id` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `comment` longtext DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `average_rating`
--

CREATE TABLE `average_rating` (
  `rating_id` varchar(200) NOT NULL,
  `product_id` varchar(200) DEFAULT NULL,
  `total_reviews` varchar(200) DEFAULT NULL,
  `average_rating` varchar(200) DEFAULT NULL,
  `5star_amount` int(20) DEFAULT NULL,
  `4star_amount` int(20) DEFAULT NULL,
  `3star_amount` int(20) DEFAULT NULL,
  `2star_amount` int(20) DEFAULT NULL,
  `1star_amount` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` varchar(200) NOT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `no_of_items` int(20) DEFAULT NULL,
  `full_price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `tax` int(20) DEFAULT NULL,
  `shipping` int(20) DEFAULT NULL,
  `total_amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `billing_id` varchar(200) NOT NULL,
  `cart_id` varchar(200) DEFAULT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `checkout_date` varchar(200) DEFAULT NULL,
  `no_of_items` int(20) DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `address2` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `zip` varchar(200) DEFAULT NULL,
  `payment_method` varchar(200) DEFAULT NULL,
  `card_name` varchar(200) DEFAULT NULL,
  `card_no` varchar(200) DEFAULT NULL,
  `expiration` varchar(20) DEFAULT NULL,
  `CVV` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` varchar(200) NOT NULL,
  `cart_id` varchar(200) DEFAULT NULL,
  `product_id` varchar(200) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `membership_id` varchar(200) NOT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `membership_type` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `sub_date` varchar(200) DEFAULT NULL,
  `exp_date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` varchar(200) NOT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `product_description` longtext DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `ratings` varchar(20) DEFAULT NULL,
  `platform` varchar(200) DEFAULT NULL,
  `developer` varchar(200) DEFAULT NULL,
  `date_release` varchar(200) DEFAULT NULL,
  `image_link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promo_code`
--

CREATE TABLE `promo_code` (
  `billing_id` varchar(200) DEFAULT NULL,
  `code` varchar(200) DEFAULT NULL,
  `discount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store_accessories`
--

CREATE TABLE `store_accessories` (
  `product_id` varchar(200) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `variants` varchar(200) DEFAULT NULL,
  `discount_offer` varchar(200) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount_price` double DEFAULT NULL,
  `stock` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store_console`
--

CREATE TABLE `store_console` (
  `product_id` varchar(200) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `variants` varchar(200) DEFAULT NULL,
  `discount_offer` varchar(200) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount_price` double DEFAULT NULL,
  `stock` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store_game`
--

CREATE TABLE `store_game` (
  `product_id` varchar(200) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `variants` varchar(200) DEFAULT NULL,
  `discount_offer` varchar(200) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount_price` double DEFAULT NULL,
  `stock` int(20) DEFAULT NULL,
  `isMembershipExclusive` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` varchar(200) NOT NULL,
  `user_type` varchar(200) DEFAULT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `phone_no` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `postcode` varchar(200) DEFAULT NULL,
  `district` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `image_link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_rating`
--

CREATE TABLE `user_rating` (
  `rating_id` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `rating` varchar(200) DEFAULT NULL,
  `review` longtext DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `articles_comment`
--
ALTER TABLE `articles_comment`
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `average_rating`
--
ALTER TABLE `average_rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `cart_id` (`cart_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`membership_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `promo_code`
--
ALTER TABLE `promo_code`
  ADD KEY `billing_id` (`billing_id`);

--
-- Indexes for table `store_accessories`
--
ALTER TABLE `store_accessories`
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `store_console`
--
ALTER TABLE `store_console`
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `store_game`
--
ALTER TABLE `store_game`
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_rating`
--
ALTER TABLE `user_rating`
  ADD KEY `rating_id` (`rating_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles_comment`
--
ALTER TABLE `articles_comment`
  ADD CONSTRAINT `articles_comment_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`);

--
-- Constraints for table `average_rating`
--
ALTER TABLE `average_rating`
  ADD CONSTRAINT `average_rating_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_details` (`product_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`);

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`),
  ADD CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_details` (`product_id`);

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`);

--
-- Constraints for table `promo_code`
--
ALTER TABLE `promo_code`
  ADD CONSTRAINT `promo_code_ibfk_1` FOREIGN KEY (`billing_id`) REFERENCES `checkout` (`billing_id`);

--
-- Constraints for table `store_accessories`
--
ALTER TABLE `store_accessories`
  ADD CONSTRAINT `store_accessories_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_details` (`product_id`);

--
-- Constraints for table `store_console`
--
ALTER TABLE `store_console`
  ADD CONSTRAINT `store_console_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_details` (`product_id`);

--
-- Constraints for table `store_game`
--
ALTER TABLE `store_game`
  ADD CONSTRAINT `store_game_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_details` (`product_id`);

--
-- Constraints for table `user_rating`
--
ALTER TABLE `user_rating`
  ADD CONSTRAINT `user_rating_ibfk_1` FOREIGN KEY (`rating_id`) REFERENCES `average_rating` (`rating_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
