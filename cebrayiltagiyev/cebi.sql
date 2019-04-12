-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 12, 2019 at 03:59 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `cebi`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `menu`
-- 

CREATE TABLE `menu` (
  `id` int(50) NOT NULL auto_increment,
  `menu` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=ucs2 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `menu`
-- 

INSERT INTO `menu` VALUES (1, 'home');
INSERT INTO `menu` VALUES (2, 'generic');
INSERT INTO `menu` VALUES (3, 'Elements');
INSERT INTO `menu` VALUES (4, 'Sign-up');
INSERT INTO `menu` VALUES (5, 'login');

-- --------------------------------------------------------

-- 
-- Table structure for table `metn`
-- 

CREATE TABLE `metn` (
  `text` varchar(500) NOT NULL,
  PRIMARY KEY  (`text`)
) ENGINE=MyISAM DEFAULT CHARSET=ucs2;

-- 
-- Dumping data for table `metn`
-- 

INSERT INTO `metn` VALUES ('ARCU ALIQUET VEL LOBORTIS ATA NISL EGET AUGUE AMET');
INSERT INTO `metn` VALUES ('ARCU ALIQUET VEL LOBORTIS ATA NISL EGET AUGUE AMET ALIQUET NISL CEP DONE');
