-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2016 at 06:02 �
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zertwof4_carol`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'احذيه'),
(2, 'حقائب');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name`) VALUES
(1, 'Red'),
(2, 'Green'),
(3, 'Blue');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_view` text NOT NULL,
  `form_view` text NOT NULL,
  `index_controller` text NOT NULL,
  `form_controller` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `index_view`, `form_view`, `index_controller`, `form_controller`) VALUES
(1, 'categories', 'Add', 'category', 'category'),
(2, 'size of products', 'Add', 'sizes', 'sizes'),
(3, 'colors', 'Add', 'color', 'color'),
(4, 'slider', 'Add ', 'slider', 'slider'),
(6, 'size of single product', 'Add', 'product_size', 'product_size'),
(7, 'color of product', 'color of product', 'product_color', 'product_color'),
(8, 'payment_type', 'payment_type', 'payment_type', 'payment_type'),
(9, 'products', 'Add', 'product', 'product');

-- --------------------------------------------------------

--
-- Table structure for table `payment_type`
--

CREATE TABLE IF NOT EXISTS `payment_type` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `payment_type`
--


-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `img` text,
  `description` text,
  `price` int(5) unsigned NOT NULL,
  `category_id` int(5) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `description`, `price`, `category_id`) VALUES
(1, 'LB-HB-0173', 'http://1024-apps.com/carol/rec/upload/bags/IMG_5802.png', 'Casual hand bag, made in refine synthetic leather. Beautiful boundary on the flap with neat small seams. Adjustable long strap, carry it by shoulder. Try it with casual sandals or slip on.', 12, 1),
(2, 'LB-HB-0046', 'http://1024-apps.com/carol/rec/upload/bags/IMG_5947.png', 'Forget diamonds, a lady’s handbag is their new best friend that is with them from desk to dinner. Shop our latest Coral shoulder bags for women and find the one that matches your style. Whether you use them as a corporate lady or as an elegant lady going to a dinner party, we have the collection for you.', 24, 1),
(3, 'LB-HB-0045', 'http://1024-apps.com/carol/rec/upload/bags/LB-HB-00452.png', 'A perfect match of Shoe and bag gives you wonderful  look. Enjoy a Soft PU top handle large bag.\r\nGorgeous floral patterned bag in pastel color. Shop our latest Coral Hand bags for woman and find the one that matches your style.', 30, 1),
(4, 'LB-HB-0123', 'http://1024-apps.com/carol/rec/upload/bags/IMG_0609.png', 'Magnificent Bag with top handle that may glam-up  your everyday’ s routine. The sleek PU with dull gold buckle add shine to this perfect design.\r\nAlways in style, can be carried by top handles or shoulder strap. Shop our latest Coral Hand bags for woman and find the one that matches your style.', 26, 1),
(5, 'LB-HB-0115', 'http://1024-apps.com/carol/rec/upload/bags/IMG_5684.png', 'The latest flap bag with a top handle in refine material. \r\nDeep colors with the contrast of white & multi sides , a gold element of lock. Sometimes fashion is about inspiration.\r\nSo, Enjoy colorful bags that match your wardrobe.', 20, 1),
(6, 'LB-HB-0124', 'http://1024-apps.com/carol/rec/upload/bags/IMG_5802.png', 'This Sophisticated style has a barrel shape but large enough to be a tote.\r\nStore your iPad or tablet, cosmetic pouch and phone easily inside it.\r\nCarry by the dual handles in hand or use a shoulder strap for longer look.\r\nThe light & dark toned texture adds charm to this hottest trend of woman bag.', 24, 1),
(7, 'LB-HB-0121', 'http://1024-apps.com/carol/rec/upload/bags/IMG_5947.png', 'A perfect fusion of bag and shoe can give you an elegant posture. Such  innovative wallets are trendy now a days.These are easy to carry with a long shoulder strap.Flats too are important part of any woman’s shoe collection. Girls! now ready to shine with Coral’s classic match of shoe & wallets.\r\n', 16, 1),
(8, 'LB-HB-0104', 'http://1024-apps.com/carol/rec/upload/bags/LB-HB-00452.png', 'We all know how important it is to be seen with the perfect bag on your shoulder.\r\nThis Hobo bag is typically made from the Soft & Slouchy material. Its  big enough to hold a Lady’s essential necessaries.\r\nThe bag gives you a leather like soft feeling, now no more plastic-like squeaky bag straps on your shoulder.', 26, 1),
(9, 'kh', 'khaled_2016_10_22_15_10_28_end.png', 'dgffdgdfgdgdgf', 1000, 2),
(12, 'kh', 'khaled_2016_10_22_15_10_58_end.png', 'dgffdgdfgdgdgf', 1000, 2),
(13, 'kh', 'khaled_2016_10_22_15_10_00_end.png', 'dgffdgdfgdgdgf', 1000, 2),
(14, 'kh', 'khaled_2016_10_22_15_10_02_end1.png', 'dgffdgdfgdgdgf', 1000, 2),
(15, 'kh', 'khaled_2016_10_22_15_10_24_end.png', 'dgffdgdfgdgdgf', 1000, 2),
(18, 'inter net', 'khaled_2016_10_23_00_10_02_end.png', 'Slowww', 95, 1),
(19, 'حقيبة مدرسة', 'khaled_2016_10_23_00_10_58_end.jpg', 'حقيبة للمدارس', 60, 2),
(20, 'test', 'khaled_2016_10_23_05_10_01_end.jpg', 'test', 20, 1),
(21, 'last one', 'khaled_2016_10_23_06_10_53_end.png', 'last one last one last one', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE IF NOT EXISTS `product_color` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `color_id` int(5) unsigned NOT NULL,
  `product_id` int(5) unsigned NOT NULL,
  `color_code` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `product_color`
--

INSERT INTO `product_color` (`id`, `color_id`, `product_id`, `color_code`) VALUES
(1, 1, 8, '0x2b32eb'),
(2, 2, 8, '0xd01959'),
(3, 1, 7, '0x0b8a22'),
(4, 2, 7, '0xa5a01b'),
(5, 2, 6, '0xfd00d6'),
(6, 2, 6, '0x870c74'),
(7, 2, 6, '0x572e51'),
(8, 0, 0, '0xffffff'),
(9, 0, 0, '0xffffff'),
(12, 0, 18, '0xffffff'),
(13, 0, 19, '0xffff00'),
(14, 0, 20, '0x46d6db'),
(15, 0, 21, '0x51b749');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE IF NOT EXISTS `product_size` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `size_id` int(5) unsigned NOT NULL,
  `product_id` int(5) unsigned NOT NULL,
  `size_code` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `size_id`, `product_id`, `size_code`) VALUES
(1, 1, 8, 'L'),
(2, 2, 8, 'M'),
(3, 3, 8, 'XXL'),
(4, 1, 7, 'XXL'),
(5, 0, 0, 'XXL'),
(6, 0, 0, 'XXL'),
(9, 0, 18, 'XL'),
(10, 0, 19, 'M'),
(11, 0, 20, 'XXXL'),
(12, 0, 21, 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE IF NOT EXISTS `sizes` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `img` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `img`) VALUES
(7, 'khaled_2016_10_23_03_10_29_end.png'),
(8, 'khaled_2016_10_23_04_10_08_end.jpg'),
(9, 'khaled_2016_10_23_04_10_02_end.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` mediumtext NOT NULL,
  `password` mediumtext NOT NULL,
  `usertype` int(11) NOT NULL,
  `mobile` mediumtext NOT NULL,
  `date_created` text NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `usertype`, `mobile`, `date_created`, `last_login`) VALUES
(1, 'mohamed', 'admin', 'admin123', 1, '123456789', '2016-10-1', '2016-10-23 04:10:48'),
(2, 'Ahmed Said', 'dev.asaid@gmail.com', '123123', 2, '01111028251', '2016-10-09', '2016-10-09 15:09:58'),
(3, 'Ahmed Said', 'a@a.com', '123123', 2, '1111028251', '2016-10-11', '2016-10-11 14:09:30'),
(4, 'ahmed', 'a@a.comm', '123123', 2, '11110282511', '2016-10-11', '2016-10-11 17:44:08'),
(5, 'كرم', 'karamraed94@gmail.com', '621501', 2, '0507471937', '2016-10-11', '2016-10-11 19:44:59'),
(6, 'asa', 'dev.ass@gmail.com', '123', 2, '1111028252', '2016-10-17', '2016-10-23 04:10:27'),
(8, 'test', 'khaled710017@gmail.com', '00', 2, '01124934942', '2016-10-23', '2016-10-23 04:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'editor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
