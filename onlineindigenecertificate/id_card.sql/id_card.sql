-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2018 at 08:05 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `id_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(0, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `subject` varchar(65) NOT NULL,
  `complaint` longtext NOT NULL,
  `date` varchar(25) NOT NULL,
  `reply_id` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `complaint`
--


-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `id` int(11) NOT NULL,
  `subject` varchar(65) NOT NULL,
  `complaint` longtext NOT NULL,
  `date` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--


-- --------------------------------------------------------

--
-- Table structure for table `processed`
--

CREATE TABLE IF NOT EXISTS `processed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `occ` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `fpob` varchar(255) NOT NULL,
  `faddress` varchar(255) NOT NULL,
  `focc` varchar(255) NOT NULL,
  `fphone` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mpob` varchar(255) NOT NULL,
  `maddress` varchar(255) NOT NULL,
  `mocc` varchar(255) NOT NULL,
  `mphone` varchar(255) NOT NULL,
  `village_name` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `district_head` varchar(255) NOT NULL,
  `dagaci` varchar(255) NOT NULL,
  `mai_unguwa` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `processed`
--

INSERT INTO `processed` (`id`, `full_name`, `gender`, `religion`, `date_of_birth`, `place_of_birth`, `address`, `occ`, `phone`, `photo`, `father_name`, `fpob`, `faddress`, `focc`, `fphone`, `mother_name`, `mpob`, `maddress`, `mocc`, `mphone`, `village_name`, `ward`, `district_head`, `dagaci`, `mai_unguwa`, `user_name`) VALUES
(24, 'Babangida Magaji', 'Male', 'Islam', '12/12/1990', 'Kazaure', 'Yan Makada', 'Student', '08065646565', '', 'Magaji', 'Kazaure ', '', 'Civil', '0349299929', 'Aminatu Ibrahim', 'kano', '', 'student', '0984030030', '', 'Kanti', '', 'Dan Adamu Ado', '', 'Bangis');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(65) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`fname`, `lname`, `gender`, `username`, `password`, `id`) VALUES
('Abdulrahim', 'Magaji', 'Male', 'Abdulrahim', '827ccb0eea8a706c4c34a16891f84e7b', 15),
('Babangida', 'Magaji', 'Male', 'Bangis', '827ccb0eea8a706c4c34a16891f84e7b', 16),
('Abdullahi', 'Muhd', 'Male', 'Abdul', '827ccb0eea8a706c4c34a16891f84e7b', 17);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `occ` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `fpob` varchar(255) NOT NULL,
  `faddress` varchar(255) NOT NULL,
  `focc` varchar(255) NOT NULL,
  `fphone` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mpob` varchar(255) NOT NULL,
  `maddress` varchar(255) NOT NULL,
  `mocc` varchar(255) NOT NULL,
  `mphone` varchar(255) NOT NULL,
  `village_name` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `district_head` varchar(255) NOT NULL,
  `dagaci` varchar(255) NOT NULL,
  `mai_unguwa` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `full_name`, `gender`, `religion`, `date_of_birth`, `place_of_birth`, `address`, `occ`, `phone`, `photo`, `father_name`, `fpob`, `faddress`, `focc`, `fphone`, `mother_name`, `mpob`, `maddress`, `mocc`, `mphone`, `village_name`, `ward`, `district_head`, `dagaci`, `mai_unguwa`, `user_name`) VALUES
(16, 'Abdulrahim Magaji', 'Male', 'Islma ', '12/12/1990', 'Kazaure', 'Jarda zone 4 kazaure ', 'Student', '08065646565', 'images/uploadsentt.jpg', 'Muhammad Muhammad', 'Kazaure ', 'Kazaure Jigawa State', 'Civil servant', '09037748373', 'Aminatu Ibrahim', 'Kazaure Kano ', 'Gawon Bature Kazaure', 'Trader ', '09037747373', 'Gidan Gona', 'Kanti', 'Alhaji Abdullahi', 'Dan Adamu Ado', 'Ilu kazaure', 'Abdulrahim'),
(17, 'Babangida Magaji', 'Male', 'Islam', '12/12/1990', 'Kazaure', 'Yan Makada', 'Student', '08065646565', 'images/uploadsentt.jpg', 'Magaji', 'Kazaure ', 'Kazaure', 'Civil', '0349299929', 'Aminatu Ibrahim', 'kano', 'jahun', 'student', '0984030030', 'Kankara', 'Kanti', 'Alhaji Abdullahi', 'Dan Adamu Ado', 'kanta', 'Bangis'),
(18, 'Abdul Muhd', 'Male', 'Islam', '12/12/1990', 'Kazaure', 'Yan Makada', 'Student', '08065646565', 'admin/uploadedsent.png', 'Magaji', 'Garki', 'Kazaure', 'Civil servant', '0349299929', 'Aminatu Ibrahim', 'jahun', 'kano', 'student', '0984030030', 'Gidan Gona', 'Zaki', 'Alhaji Abdullahi', 'mai goro', 'Nuhu', 'abdul');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `status` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `username`, `status`) VALUES
(19, 'Abdulrahim', 'We are not yet confirm your application our staff are busy working for other things they will be back for you soon sorry for the inconvenience. Come Back Later!'),
(20, 'Bangis', 'We are not yet confirm your application our staff are busy working for other things they will be back for you soon sorry for the inconvenience. Come Back Later!'),
(21, 'abdul', 'We are not yet confirm your application our staff are busy working for other things they will be back for you soon sorry for the inconvenience. Come Back Later!');
