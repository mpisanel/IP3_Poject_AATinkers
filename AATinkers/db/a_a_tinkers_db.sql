-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2016 at 11:37 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `a_a_tinkers_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `CategoryId` int(11) NOT NULL,
  `CategoryName` varchar(55) NOT NULL,
  `DefaultValue` varchar(55) NOT NULL,
  PRIMARY KEY (`CategoryId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryId`, `CategoryName`, `DefaultValue`) VALUES
(2, 'accessories', 'acc'),
(4, 'clothing', 'clothing'),
(5, 'necklaces', 'necklaces'),
(6, 'wall canvas', 'painting');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) NOT NULL,
  `customer_surname` varchar(50) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_phoneNo` int(10) NOT NULL,
  `customer_password` varchar(50) NOT NULL,
  `customer_bank` varchar(50) NOT NULL,
  `customer_card_no` int(11) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_surname`, `customer_address`, `customer_email`, `customer_phoneNo`, `customer_password`, `customer_bank`, `customer_card_no`) VALUES
(1, 'Luxolo', 'Mpisane', 'FF 143 Khayelitsha', 'root@gmail.com', 1234567890, 'root', 'Capitec', 789654123),
(11, 'dudu', 'vuvu', 'du87', 'm@gmail.com', 21365478, 'm', 'NedBank', 789321456),
(12, 'Google', 'Chrome', 'GC', 'root@gmail.com', 763455678, 'root', 'NedBank', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `email_queries`
--

CREATE TABLE IF NOT EXISTS `email_queries` (
  `queryId` int(5) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`queryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `email_queries`
--

INSERT INTO `email_queries` (`queryId`, `fullname`, `email_address`, `subject`, `message`) VALUES
(1, 'Tamonne Cotodie', 'tm@gmail.com', 'PHP', 'Hi am T, n am an addict to PHP.'),
(3, 'cotodie', 'kenilworth@gmail.com', 'enquiry', 'hello.. my name is tam I need some tiles'),
(4, 'tamie', 'tc@gmail.com', 'bangles', 'is there any bangles in store?'),
(5, 'tamie', 'tc@gmail.com', 'bangles', 'is there any bangles in store?'),
(6, 'test', 'test@gmail.com', 'root', 'dummy message'),
(7, 'test', 'test@gmail.com', 'root', 'dummy message');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `total_price` float NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `date`, `total_price`) VALUES
(1, 123456, '2016-10-14', 1),
(2, 2, '2016-10-27', 750),
(3, 3, '2016-10-29', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `aat_image` varchar(500) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `CategoryId` (`CategoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `CategoryId`, `name`, `description`, `price`, `aat_image`) VALUES
(11, 4, 'Beaded Zulu Skirt', 'Zulu Skirt pleated long, black, wrap around with bead work and bottom trim.', 200, 'Clothes/2.jpg'),
(12, 4, 'African Sandals', 'Beaded African Sandals', 150, 'Clothes/3.jpg'),
(13, 4, 'African Shirt', 'African Shirt Red - pull over shirt with two front pockets and intricate neck detail.', 250, 'Clothes/7.jpg'),
(14, 4, 'Zulu Mens Skirt', 'Zulu Men''s Traditional "skirt" worn during ceremonial dances - adjustable. handmade from cowhide.', 950, 'Clothes/12.jpg'),
(15, 4, 'African Men Vest Trouser Set', 'African Men''s vest and Trouser set.', 695, 'Clothes/10.jpg'),
(16, 4, 'Leopard Print vest', 'Leopard Print vest - Ingwe.', 100, 'Clothes/9.jpg'),
(21, 2, 'Mixed Wide Bangles', 'African Beaded Bangles Contemporary Wide Mixed', 90, 'Bangles/1.jpg'),
(22, 2, 'Bangle Wide SA Flag', 'Beaded Bangle SA Flag Wide.', 90, 'Bangles/2.jpg'),
(23, 2, 'Grey Zulu Bead Bracelet', 'African Bracelets, Zulu bead bracelet.', 20, 'Bangles/3.jpg'),
(24, 2, 'Safety Pin Bracelet', 'Beaded Elasticated Bracelet hand.', 65, 'Bangles/4.jpg'),
(25, 2, 'Leather Bracelets Mixed', 'Leather Bracelets with Beadwork trim.', 25, 'Bangles/5.jpg'),
(26, 2, 'Bangle Round Mixed', 'African Beadwork Bangle round hand.', 35, 'Bangles/6.jpg'),
(28, 5, 'Beaded Colorful Necklace', 'Zulu Traditional Necklace', 250, 'necklaces/1.jpg'),
(29, 5, 'Green Head Cover', 'Zulu Traditional Head Cover', 250, 'necklaces/2.jpg'),
(30, 5, 'Beaded Colorful Necklace', 'Zulu Traditional Necklace', 250, 'necklaces/3.jpg'),
(31, 5, 'Beaded Colorful Necklace', 'Zulu Traditional Necklace', 250, 'necklaces/4.jpg'),
(32, 5, 'Beaded Colorful Necklace', 'Zulu Traditional Necklace', 250, 'necklaces/5.jpg'),
(33, 5, 'Beaded Colorful Necklace', 'Zulu Traditional Necklace', 250, 'necklaces/6.jpg'),
(34, 5, 'Beaded Colorful Necklace', 'Zulu Traditional Necklace', 250, 'necklaces/7.jpg'),
(35, 5, 'Beaded Colorful Necklace', 'Zulu Traditional Necklace', 250, 'necklaces/8.jpg'),
(36, 5, 'Beaded Colorful Necklace', 'Zulu Traditional Necklace', 250, 'necklaces/9.jpg'),
(37, 6, 'Art & Paintings', 'african inspired paintings', 350, 'painting/1.jpg'),
(38, 6, 'Art & Paintings', 'african inspired paintings', 350, 'painting/2.jpg'),
(39, 6, 'Art & Paintings', 'african inspired paintings', 350, 'painting/3.jpg'),
(40, 6, 'Art & Paintings', 'african inspired paintings', 350, 'painting/4.jpg'),
(41, 6, 'Art & Paintings', 'african inspired paintings', 350, 'painting/9.jpg'),
(42, 6, 'Art & Paintings', 'african inspired paintings', 350, 'painting/10.jpg'),
(43, 6, 'Art & Paintings', 'african inspired paintings', 350, 'painting/11.jpg'),
(44, 6, 'Art & Paintings', 'african inspired paintings', 350, 'painting/13.jpg'),
(45, 6, 'Art & Paintings', 'african inspired paintings', 350, 'painting/14.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
