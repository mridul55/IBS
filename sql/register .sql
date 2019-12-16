-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 16, 2019 at 06:02 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name_bangla` varchar(255) NOT NULL,
  `full_name_english` varchar(255) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `cell_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `office_name` varchar(255) NOT NULL,
  `name_of_degree` varchar(255) NOT NULL,
  `topic_of_research` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `awarded` varchar(255) NOT NULL,
  `name_of_superviser` varchar(255) NOT NULL,
  `crest` varchar(255) NOT NULL,
  `recived_awarde` varchar(255) NOT NULL,
  `number_of_publication` varchar(255) NOT NULL,
  `number_of_article` varchar(255) NOT NULL,
  `list_of_publication` varchar(255) NOT NULL,
  `list_of_books` varchar(255) NOT NULL,
  `checkboxlist` varchar(255) NOT NULL,
  `spouse_name` varchar(255) NOT NULL,
  `number_of_children` varchar(255) NOT NULL,
  `mytext` varchar(255) NOT NULL,
  `number_of_driver` varchar(255) NOT NULL,
  `total_to_be_paid` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `ref_id` varchar(255) NOT NULL,
  `user_profile_picture` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `parmition_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `full_name_bangla`, `full_name_english`, `present_address`, `permanent_address`, `cell_number`, `email`, `password`, `occupation`, `designation`, `office_name`, `name_of_degree`, `topic_of_research`, `session`, `awarded`, `name_of_superviser`, `crest`, `recived_awarde`, `number_of_publication`, `number_of_article`, `list_of_publication`, `list_of_books`, `checkboxlist`, `spouse_name`, `number_of_children`, `mytext`, `number_of_driver`, `total_to_be_paid`, `payment_type`, `ref_id`, `user_profile_picture`, `status`, `parmition_status`) VALUES
(1, 'à¦®à§‹à¦ƒ à¦¸à¦¾à¦•à¦¿à¦° à¦¹à¦¾à¦¸à¦¾à¦¨', 'Md Sakir Hasan', 'Monnafer Mor, Rajsahi', 'Monnafer Mor, Rajsahi', '01310883344', 'sakir1234@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Student', 'Developer', 'City collage', 'MPhil', ' The title summarizes the main idea or ideas of your study', '1974-1975', '1974', 'Md khalek', 'Yes', 'No', '2', '3', 'There are two types of articles indefinite \'a\'and \'an\' or definite \'the\'. ...\r\nIndefinite Article Definition. ...', 'The editors of the Norwegian Book Clubs, with the Norwegian Nobel Institute,', '2500', 'asa', '1', 'jone', '1', '5000', 'Bkash', '34534653', 'upload/5ed100f8d8.jpg', 0, 0),
(2, 'à¦®à§‹à¦ƒ à¦¹à¦¾à¦®à¦¿à¦¦ à¦¹à¦¾à¦¸à¦¾à¦¨', 'MD hamid Hasan', 'Boalia, Rajsahi', 'Boalia, Rajsahi', '01770815965', 'hamid1234@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Student', 'Developer', 'NothSouth Univercity', 'MPhil', 'Definition. The title summarizes the main idea or ideas of your study. ', '1974-1975', '1974', 'samim hasan', 'Yes', 'Awwwards are the Website Awards that recognize and promote the talent and effort of the best developers, designers and web agencies in the world.', 'An article is a word that is used with a noun to specify grammatical definiteness of the noun, ... Within each type', '2', '3', 'This is a list of book lists (bibliographies) on Wikipedia, organized by various criteria. Contents. 1 General lists; 2 Selective lists; 3 Subject lists. 3.1 History', '2500', 'hasina', '1', 'jone', '1', '5000', 'Check', '222333', 'upload/01245c1199.jpg', 1, 0),
(3, '', 'Md Minhaj Ul Abedin', '', '', '', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'upload/IMG_0386.JPG', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'Md minhaj Ul abedin', 'mridul9650@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01770815965');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
