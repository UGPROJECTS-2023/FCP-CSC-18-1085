-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2014 at 07:57 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `custom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE IF NOT EXISTS `clearance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_of_importer` varchar(25) NOT NULL,
  `platenumber` varchar(25) NOT NULL,
  `state_of_import` varchar(25) NOT NULL,
  `import_name` varchar(25) NOT NULL,
  `company_name` varchar(25) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`id`, `name_of_importer`, `platenumber`, `state_of_import`, `import_name`, `company_name`, `phone`, `address`, `date`, `username`) VALUES
(1, 'jkjk', 'jkljk', 'kjk', 'kjk', 'jkjk', 'kjk', 'kjklljklkl', '11/05/14', ''),
(2, 'Dangote & Sons', '12345', 'Yobe', 'minerals', 'Dangote & Sons', '0808778827', 'Kano Municipal', '11/05/14', 'dangote'),
(3, 'Dangote & Sons', '12345', 'Yobe', 'Container', 'Dangote & Sons', '08033222', 'Fedpodam', '11/05/14', 'alkasima'),
(4, '', '', '', '', '', '', '', '11/05/14', ''),
(5, 'alkasima ltd', '54321', 'Yobe', 'Laptops', 'alkasima ltd', '0803332232', 'Lagos', '11/05/14', 'alkasima'),
(6, 'Dangote & Sons', '54321', 'Yobe', 'Jeweleries', 'Dangote & Sons', '08068262120', 'Fedpodam', '20/05/14', ''),
(7, 'Dangote & Sons', '54321', 'Yobe', 'Jeweleries', 'Dangote & Sons', '08068262120', 'Fedpodam', '20/05/14', 'dangote'),
(8, 'Dangote & Sons', '22122', 'Yobe', 'Accessories', 'Dangote & Sons', '08068262120', 'Fedpodam', '20/05/14', 'dangote'),
(9, 'Dangote & Sons', '22122', 'Yobe', 'Accessories', 'Dangote & Sons', '08068262120', 'Fedpodam', '20/05/14', 'dangote'),
(10, 'Kasim', '4553', 'Yobe', 'Accessories', 'Dangote & Sons', '08022332', 'sabon pegi', '20/05/14', 'dangote');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE IF NOT EXISTS `company_info` (
  `id` int(11) NOT NULL,
  `company_name` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(25) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`company_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`id`, `company_name`, `address`, `state`, `phone`, `email`, `username`, `password`) VALUES
(0, '', '', '', '', '', '', ''),
(0, 'abbakar ltd', 'Fedpodam', 'Yobe', '08032897828', 'abbakar@mail.com', 'abbakar', '12345'),
(0, 'Dangote & Sons', 'Kano Municipal', 'Kano', '08026338228', 'dangote@mail.com', 'dangote', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `offence`
--

CREATE TABLE IF NOT EXISTS `offence` (
  `platenumber` varchar(25) NOT NULL,
  `comment` longtext NOT NULL,
  `date` varchar(25) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`platenumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offence`
--

INSERT INTO `offence` (`platenumber`, `comment`, `date`, `id`) VALUES
('12345', 'make an offence in lagos', '11/05/14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slip`
--

CREATE TABLE IF NOT EXISTS `slip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_of_importer` varchar(25) NOT NULL,
  `platenumber` varchar(25) NOT NULL,
  `state_of_import` varchar(25) NOT NULL,
  `import_name` varchar(25) NOT NULL,
  `company_name` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `slip`
--

INSERT INTO `slip` (`id`, `name_of_importer`, `platenumber`, `state_of_import`, `import_name`, `company_name`, `phone`, `address`, `date`, `username`) VALUES
(3, 'Dangote & Sons', '12345', 'Yobe', 'Container', 'Dangote & Sons', '08033222', 'Fedpodam', '11/05/14', ''),
(4, '', '', '', '', '', '', '', '11/05/14', ''),
(5, 'alkasima ltd', '54321', 'Yobe', 'Laptops', 'alkasima ltd', '0803332232', 'Lagos', '11/05/14', ''),
(6, 'Dangote & Sons', '54321', 'Yobe', 'Jeweleries', 'Dangote & Sons', '08068262120', 'Fedpodam', '20/05/14', ''),
(7, 'Dangote & Sons', '54321', 'Yobe', 'Jeweleries', 'Dangote & Sons', '08068262120', 'Fedpodam', '20/05/14', ''),
(8, 'Dangote & Sons', '22122', 'Yobe', 'Accessories', 'Dangote & Sons', '08068262120', 'Fedpodam', '20/05/14', 'dangote'),
(9, 'Dangote & Sons', '22122', 'Yobe', 'Accessories', 'Dangote & Sons', '08068262120', 'Fedpodam', '20/05/14', 'dangote'),
(10, 'Kasim', '4553', 'Yobe', 'Accessories', 'Dangote & Sons', '08022332', 'sabon pegi', '20/05/14', 'dangote');
