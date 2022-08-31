-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 31 أغسطس 2022 الساعة 01:28
-- إصدار الخادم: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temmam_pharma`
--

-- --------------------------------------------------------

--
-- بنية الجدول `aboutcom`
--

DROP TABLE IF EXISTS `aboutcom`;
CREATE TABLE IF NOT EXISTS `aboutcom` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `title2` varchar(50) NOT NULL,
  `img1` varchar(50) NOT NULL,
  `img2` varchar(50) NOT NULL,
  `img3` varchar(50) NOT NULL,
  `img4` varchar(50) NOT NULL,
  `img5` varchar(50) NOT NULL,
  `img6` varchar(50) NOT NULL,
  `name1` varchar(50) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `name4` varchar(50) NOT NULL,
  `name5` varchar(50) NOT NULL,
  `name6` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `aboutcom`
--

INSERT INTO `aboutcom` (`id`, `title`, `title2`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `name1`, `name2`, `name3`, `name4`, `name5`, `name6`) VALUES
(1, 'About Company', 'Our Team', '339581661891282.png', '953261661893592.png', '943141661891282.png', '308181661891282.png', '163641661891282.png', '67781661891390.png', 'Ali', 'Mohammed', 'Abdalsalam', 'Sakhr', 'Ahmed', 'EZZZZZZZ');

-- --------------------------------------------------------

--
-- بنية الجدول `aboutus`
--

DROP TABLE IF EXISTS `aboutus`;
CREATE TABLE IF NOT EXISTS `aboutus` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `question` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `video` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `question`, `description`, `video`) VALUES
(1, 'About US', 'Who We Are', 'Temmam Pharma is a Full-Solution Distributor for Medical and Life\r\nScience Technologies in Yemen. With offices in Sanaâ€™a, Taiz, Aden\r\nand Hadramout. We import, market, and distribute products to all\r\nover the Yemeni pharmaceutical market. We work with many\r\ncompanies through various agreements, partnerships and joint\r\nventures, the group aims to be a leading healthcare, medical\r\nequipment and consumer care company in Yemen, and is committed\r\nto meeting the growing needs of healthcare and pharmaceutical\r\ndistribution in the country. Temmam Pharma has a unique\r\ndistribution and marketing network of more than 50 sales and medical\r\nrepresentatives team that has been hand-picked and is highly qualified\r\nto lead a path of success that ensures submitting results of high\r\nstandards to our partners. We have established various commercial\r\nand cost sharing agreements and partnerships with wholesalers and\r\nTemmam Pharma is a Full-Solution Distributor for Medical and Life\r\nScience Technologies in Yemen. With offices in Sanaâ€™a, Taiz, Aden\r\nand Hadramout. We import, market, and distribute products to all\r\nover the Yemeni pharmaceutical market. We work with many\r\ncompanies through various agreements, partnerships and joint\r\nventures, the group aims to be a leading healthcare, medical\r\nequipment and consumer care company in Yemen, and is committed\r\nto meeting the growing needs of healthcare and pharmaceutical\r\ndistribution in the country. Temmam Pharma has a unique\r\ndistribution and marketing network of more than 50 sales and medical\r\nrepresentatives team that has been hand-picked and is highly qualified\r\nto lead a path of success that ensures submitting results of high\r\nstandards to our partners. We have established various commercial\r\nand cost sharing agreements and partnerships with wholesalers and', '865331661887371.mp4');

-- --------------------------------------------------------

--
-- بنية الجدول `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `number` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `contactus`
--

INSERT INTO `contactus` (`id`, `title`, `facebook`, `twitter`, `insta`, `number`) VALUES
(1, 'Contact US', 'https://facebook.com', 'https://twitter.com', 'https://instagram.com', '+967774025666');

-- --------------------------------------------------------

--
-- بنية الجدول `header_data`
--

DROP TABLE IF EXISTS `header_data`;
CREATE TABLE IF NOT EXISTS `header_data` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `button_name` text NOT NULL,
  `button_url` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `insta` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `header_data`
--

INSERT INTO `header_data` (`id`, `description`, `button_name`, `button_url`, `img`, `facebook`, `twitter`, `insta`) VALUES
(1, 'We at Jubran Pharma are\r\ncommitted to working with\r\npartners to lead the healthcare\r\nindustry in Yemen with the\r\nhighest standards.', 'Explore Now', 'https://google.com', '526841661717665.png', 'https://facebook.com', 'https://twitter.com', 'https://instagram.com');

-- --------------------------------------------------------

--
-- بنية الجدول `login_information`
--

DROP TABLE IF EXISTS `login_information`;
CREATE TABLE IF NOT EXISTS `login_information` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Email` varchar(30) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `login_information`
--

INSERT INTO `login_information` (`id`, `Email`, `UserName`, `Password`, `Name`) VALUES
(1, 'ali@gmail.com', 'aliwaz12', '$2y$10$qt/IHDW3P9tX0u8jvC8BP.Br0.TckOGg54mwpG00GWcqU0aPPhtQO', 'Ali Alwaziry'),
(2, 'abdalgany@gmail.com', 'abdalganywaz12', '$2y$10$wYW1C/g5/n1TVXR8bDy3eObNF4SmwRlFi/ytcjwBPLQCMRKDfT4i6', 'Abdalgany Alwaziry'),
(3, 'abdalsalam@gmail.com', 'abdalsalamwaz', '$2y$10$5Mcdfwt7xr0AERLpV19V6eK2Bqy4cF3rxiILD.ld36r7rg2s3Usni', 'Abdalsalam Alwaziry');

-- --------------------------------------------------------

--
-- بنية الجدول `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `img1` varchar(50) NOT NULL,
  `img2` varchar(50) NOT NULL,
  `img3` varchar(50) NOT NULL,
  `img4` varchar(50) NOT NULL,
  `img5` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `partners`
--

INSERT INTO `partners` (`id`, `title`, `description`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(1, 'Our Partners', 'Temmam Pharma represents and aims to be the agent of major and minor multinational pharmaceutical industries worldwide\r\nand partner with international NGOs in the country to pave the way for better access for Yemeni patients.', '629251661899354.png', '481771661899085.png', '606441661899085.png', '496121661899085.png', '12291661899354.png');

-- --------------------------------------------------------

--
-- بنية الجدول `strategy`
--

DROP TABLE IF EXISTS `strategy`;
CREATE TABLE IF NOT EXISTS `strategy` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `img` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `strategy`
--

INSERT INTO `strategy` (`id`, `title`, `description`, `img`) VALUES
(1, 'Our Strategy', 'Temmam Pharma is a Full-Solution Distributor for Medical and Life\r\nScience Technologies in Yemen. With offices in Sanaâ€™a, Taiz, Aden\r\nand Hadramout. We import, market, and distribute products to all\r\nover the Yemeni pharmaceutical market. We work with many\r\ncompanies through various agreements, partnerships and joint\r\nventures, the group aims to be a leading healthcare, medical\r\nequipment and consumer care company in Yemen, and is committed\r\nto meeting the growing needs of healthcare and pharmaceutical\r\ndistribution in the country. Temmam Pharma has a unique\r\ndistribution and marketing network of more than 50 sales and medical\r\nrepresentatives team that has been hand-picked and is highly qualified\r\nto lead a path of success that ensures submitting results of high\r\nstandards to our partners. We have established various commercial\r\nand cost sharing agreements and partnerships with wholesalers and\r\nTemmam Pharma is a Full-Solution Distributor for Medical and Life\r\nScience Technologies in Yemen. With offices in Sanaâ€™a, Taiz, Aden\r\nand Hadramout. We import, market, and distribute products to all\r\nover the Yemeni pharmaceutical market. We work with many\r\ncompanies through various agreements, partnerships and joint\r\nventures, the group aims to be a leading healthcare, medical\r\nequipment and consumer care company in Yemen, and is committed\r\nto meeting the growing needs of healthcare and pharmaceutical\r\ndistribution in the country. Temmam Pharma has a unique\r\ndistribution and marketing network of more than 50 sales and medical\r\nrepresentatives team that has been hand-picked and is highly qualified\r\nto lead a path of success that ensures submitting results of high\r\nstandards to our partners. We have established various commercial\r\nand cost sharing agreements and partnerships with wholesalers and', '489621661895038.png');

-- --------------------------------------------------------

--
-- بنية الجدول `timeline`
--

DROP TABLE IF EXISTS `timeline`;
CREATE TABLE IF NOT EXISTS `timeline` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date1` varchar(4) NOT NULL,
  `date2` varchar(4) NOT NULL,
  `date3` varchar(4) NOT NULL,
  `date4` varchar(4) NOT NULL,
  `date5` varchar(4) NOT NULL,
  `event1` varchar(50) NOT NULL,
  `event2` varchar(50) NOT NULL,
  `event3` varchar(50) NOT NULL,
  `event4` varchar(50) NOT NULL,
  `event5` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `timeline`
--

INSERT INTO `timeline` (`id`, `title`, `description`, `date1`, `date2`, `date3`, `date4`, `date5`, `event1`, `event2`, `event3`, `event4`, `event5`) VALUES
(1, 'Timeline for Company', 'Temmam Pharma represents and aims to be the agent of major and minor multinational pharmaceutical industries worldwide\r\nand partner with international NGOs in the country to pave the way for better access for Yemeni patients.', '1999', '1999', '1999', '1999', '1999', 'expansion', 'Trust and commitment', 'Competitiveness', 'continuity', 'Temmam Pharma Establishment');

-- --------------------------------------------------------

--
-- بنية الجدول `welcome`
--

DROP TABLE IF EXISTS `welcome`;
CREATE TABLE IF NOT EXISTS `welcome` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `agent_num` int(5) NOT NULL,
  `agent_name` varchar(50) NOT NULL,
  `emp_num` int(5) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `branch_num` int(5) NOT NULL,
  `brunch_name` varchar(50) NOT NULL,
  `customer_num` int(5) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `welcome`
--

INSERT INTO `welcome` (`id`, `title`, `description`, `agent_num`, `agent_name`, `emp_num`, `emp_name`, `branch_num`, `brunch_name`, `customer_num`, `customer_name`) VALUES
(1, ' Welcome to Temmam Pharma Company ', 'Temmam Pharma represents and aims to be the agent of major and minor multinational pharmaceutical industries worldwide\r\nand partner with international NGOs in the country to pave the way for better access for Yemeni patients.', 100, 'ÙˆÙƒÙŠÙ„', 700, 'Ù…ÙˆØ¸Ù', 20, 'ÙØ±Ø¹', 7000, 'Ø¹Ù…ÙŠÙ„');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
