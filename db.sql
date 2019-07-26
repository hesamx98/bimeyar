-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 26, 2019 at 08:32 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimeyar`
--

-- --------------------------------------------------------

--
-- Table structure for table `aghsat`
--

DROP TABLE IF EXISTS `aghsat`;
CREATE TABLE IF NOT EXISTS `aghsat`
(
  `ghest_id`   int(11)                      NOT NULL AUTO_INCREMENT,
  `price`      int(11)                      NOT NULL,
  `issue_date` date                         NOT NULL,
  `percent`    int(11)                      NOT NULL,
  `telephone`  mediumint(9)                 NOT NULL,
  `time`       time                         NOT NULL,
  `name`       text COLLATE utf8_persian_ci NOT NULL,
  `status`     tinyint(1)                   NOT NULL,
  PRIMARY KEY (`ghest_id`)
) ENGINE = MyISAM
  DEFAULT CHARSET = utf8
  COLLATE = utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bime_name`
--

DROP TABLE IF EXISTS `bime_name`;
CREATE TABLE IF NOT EXISTS `bime_name`
(
  `ins_id`        int(11)                      NOT NULL AUTO_INCREMENT,
  `ins_nmber`     int(11)                      NOT NULL,
  `issue_date`    date                         NOT NULL,
  `name`          text COLLATE utf8_persian_ci NOT NULL,
  `national_code` int(11)                      NOT NULL,
  `telephone`     mediumint(9)                 NOT NULL,
  `time`          int(11)                      NOT NULL,
  `adviser_name`  text COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`ins_id`)
) ENGINE = MyISAM
  DEFAULT CHARSET = utf8
  COLLATE = utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users`
(
  `user_id`             int(11)                                               NOT NULL AUTO_INCREMENT,
  `name`                text COLLATE utf8_persian_ci                          NOT NULL,
  `telephone`           bigint(12)                                            NOT NULL,
  `ins`                 text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `representation_code` int(11)                                               NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE = MyISAM
  AUTO_INCREMENT = 3
  DEFAULT CHARSET = utf8
  COLLATE = utf8_persian_ci;

--
-- Dumping data for table `users`
--

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
