-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2018 at 10:40 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kms`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigned_tasks`
--

CREATE TABLE IF NOT EXISTS `assigned_tasks` (
  `task_id` int(11) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `date_add` varchar(255) NOT NULL,
  `estimated` varchar(255) NOT NULL,
  `actual` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigned_tasks`
--

INSERT INTO `assigned_tasks` (`task_id`, `emp_name`, `pro_name`, `date_add`, `estimated`, `actual`, `status`) VALUES
(2, 'asran', 'sdf', '2017/01/08 11:41:32am', '2', '1', 'yes'),
(3, 'ajus', 'Test1', '2017/01/09 03:51:56pm', '3', '2', 'yes'),
(2, 'ajus', 'sdf', '2017/01/09 03:58:57pm', '3', '4', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `emp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`, `emp`) VALUES
(1, 'All Day Event', '#40E0D0', '2016-01-01 00:00:00', '0000-00-00 00:00:00', ''),
(2, 'Long Event', '#FF0000', '2016-01-07 00:00:00', '2016-01-10 00:00:00', ''),
(3, 'Repeating Event', '#0071c5', '2016-01-09 16:00:00', '0000-00-00 00:00:00', ''),
(4, 'Conference', '#40E0D0', '2016-01-11 00:00:00', '2016-01-13 00:00:00', ''),
(5, 'Meeting', '#000', '2016-01-12 10:30:00', '2016-01-12 12:30:00', ''),
(6, 'Lunch', '#0071c5', '2016-01-12 12:00:00', '0000-00-00 00:00:00', ''),
(7, 'Happy Hour', '#0071c5', '2016-01-12 17:30:00', '0000-00-00 00:00:00', ''),
(8, 'Dinner', '#0071c5', '2016-01-12 20:00:00', '0000-00-00 00:00:00', ''),
(9, 'Birthday Party', '#FFD700', '2016-01-14 07:00:00', '2016-01-14 07:00:00', ''),
(10, 'Double click to change', '#008000', '2016-01-28 00:00:00', '0000-00-00 00:00:00', ''),
(15, 'Test1', '#40E0D0', '2016-02-02 00:00:00', '2016-02-03 00:00:00', ''),
(16, 'dcsd', '#40E0D0', '2016-06-28 00:00:00', '2016-06-29 00:00:00', 'dfsf'),
(17, 'dcvsdvf', '#40E0D0', '2015-12-29 00:00:00', '2015-12-30 00:00:00', 'dfsf'),
(18, 'fsdfdf', '#FF8C00', '2016-01-06 00:00:00', '2016-01-07 00:00:00', 'dfsf'),
(19, 'dfdsf', '#008000', '2015-12-28 00:00:00', '2015-12-29 00:00:00', 'dfsf'),
(20, 'test3', '#40E0D0', '2015-12-31 00:00:00', '2016-01-01 00:00:00', 'dfsf'),
(21, 'dfdsf', '#40E0D0', '2015-12-28 00:00:00', '2015-12-29 00:00:00', 'asran'),
(22, 'vfb', '#FFD700', '2017-01-10 00:00:00', '2017-01-11 00:00:00', 'asran'),
(23, 'fhfdh', '#0071c5', '2016-02-02 00:00:00', '2016-02-03 00:00:00', 'dfsf');

-- --------------------------------------------------------

--
-- Table structure for table `forum_reply`
--

CREATE TABLE IF NOT EXISTS `forum_reply` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `reply` varchar(1000) NOT NULL,
  `date_reply` varchar(255) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `forum_reply`
--

INSERT INTO `forum_reply` (`rid`, `topic_id`, `user_name`, `reply`, `date_reply`) VALUES
(2, 5, 'dfsf', 'sdfdf', '2016/12/23 12:56:11pm'),
(3, 5, 'dfsf', 'dfsf', '2016/12/23 12:56:28pm'),
(4, 5, 'dfsf', 'fgerge', '2016/12/23 04:03:04pm'),
(5, 5, 'dfsf', 'sca', '2016/12/23 04:03:24pm'),
(6, 5, 'dfsf', 'ffefergegerg', '2016/12/23 07:12:17pm'),
(17, 5, 'sdsf', 'scsdcsv', '2016/12/24 05:31:09am'),
(18, 5, 'sdsf', 'Hello test1', '2016/12/24 05:31:59am'),
(19, 0, 'sdsf', 'Hello test2', '2016/12/24 05:38:09am'),
(20, 0, 'sdsf', 'dsvsdv', '2016/12/24 05:40:27am'),
(21, 0, 'sdsf', 'fgrerg', '2016/12/24 05:44:00am'),
(22, 5, 'sdsf', 'vsdvsdvbf', '2016/12/24 05:44:20am'),
(25, 2, 'sdsf', 'dsvs', '2016/12/24 06:01:26am'),
(26, 5, 'sdsf', 'sacasc', '2016/12/24 06:02:15am'),
(27, 0, 'sdsf', 'sdsfsdf', '2016/12/26 07:25:32am'),
(28, 0, 'sdsf', 'fghg', '2016/12/26 07:27:44am'),
(29, 1, 'sdsf', 'dvcsvdv', '2016/12/26 07:28:39am'),
(30, 9, 'sdsf', 'scsdf', '2016/12/26 07:29:07am'),
(31, 3, 'sdsf', 'dsdfsf', '2016/12/26 07:29:29am'),
(32, 1, 'sdsf', 'xcvbcxbfb', '2016/12/26 07:30:43am'),
(33, 2, 'sdsf', 'fdsfsdf', '2016/12/26 07:36:27am'),
(34, 1, 'asran', '', '2017/03/15 05:23:41pm');

-- --------------------------------------------------------

--
-- Table structure for table `learn_material`
--

CREATE TABLE IF NOT EXISTS `learn_material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `file_loca` varchar(255) NOT NULL,
  `date_upload` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `upload_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `learn_material`
--

INSERT INTO `learn_material` (`id`, `category`, `file_loca`, `date_upload`, `title`, `upload_by`) VALUES
(1, 'Management', 'profile.php', '2016/12/26 09:13:31am', 'cxvcxv', ''),
(2, 'Architecture', 'login.php', '2016/12/26 09:19:43am', 'dvdvfdf', 'sdsf'),
(3, 'Computer Science & Technology', '134005f_SE.pdf', '2016/12/26 11:28:36am', 'xvxv', 'sdsf'),
(4, 'Management', '134005f_SE.pdf', '2016/12/26 02:01:34pm', 'cxvv', 'sdsf');

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE IF NOT EXISTS `leave_request` (
  `Leave_type_id` int(6) NOT NULL AUTO_INCREMENT,
  `Leave_type` varchar(30) NOT NULL,
  `Leave_type_description` varchar(200) NOT NULL,
  `Request_date` varchar(255) NOT NULL,
  `leave_date` varchar(255) NOT NULL,
  `num` int(2) NOT NULL,
  `emp_id` int(11) NOT NULL,
  PRIMARY KEY (`Leave_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `leave_request`
--

INSERT INTO `leave_request` (`Leave_type_id`, `Leave_type`, `Leave_type_description`, `Request_date`, `leave_date`, `num`, `emp_id`) VALUES
(4, 'Personal', 'cdfsf', '2017/01/08', '03 January 2017', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `leave_status`
--

CREATE TABLE IF NOT EXISTS `leave_status` (
  `Leave_type_id` int(11) NOT NULL,
  `Leave_type` varchar(255) NOT NULL,
  `Leave_type_description` varchar(255) NOT NULL,
  `Request_date` varchar(255) NOT NULL,
  `leave_date` varchar(255) NOT NULL,
  `num` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`Leave_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_status`
--

INSERT INTO `leave_status` (`Leave_type_id`, `Leave_type`, `Leave_type_description`, `Request_date`, `leave_date`, `num`, `emp_id`, `status`) VALUES
(1, 'Personal', 'bdfbdb', '2016/12/28', '30 December 2016', 2, 6, 'Accepted'),
(2, 'Personal', 'fxxbhf', '2017/01/08', '12 January 2017', 2, 11, 'Accepted'),
(3, 'Personal', 'sdsad', '2017/01/08', '10 January 2017', 2, 3, 'Accepted'),
(4, 'Full Time', 'dfsf', '2016/12/22', '16 December 2016', 3, 6, 'Denied'),
(5, 'Personal', 'scd', '2017/01/08', '11 January 2017', 2, 3, 'Accepted'),
(6, 'Personal', 'sdsdd', '2017/01/08', '18 January 2017', 2, 3, 'Denied');

-- --------------------------------------------------------

--
-- Table structure for table `memo`
--

CREATE TABLE IF NOT EXISTS `memo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dat_rem` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `memo`
--

INSERT INTO `memo` (`id`, `title`, `description`, `dat_rem`, `user_name`) VALUES
(1, 'xacs', 'sacasc', '05 January 2017', 'dfsf'),
(2, 'test2', 'dsad', '05 January 2017', 'dfsf'),
(3, '', '', '', 'dfsf');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(255) NOT NULL,
  `reciever` varchar(255) NOT NULL,
  `date_send` varchar(255) NOT NULL,
  `mesg` varchar(500) NOT NULL,
  `sender_read` varchar(255) NOT NULL,
  `reciever_read` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sender`, `reciever`, `date_send`, `mesg`, `sender_read`, `reciever_read`) VALUES
(1, 'asran', 'dfsf', '2017/01/08 02:36:35am', 'dfsf', 'yes', 'yes'),
(2, 'asran', 'dfsf', '2017/01/08 02:36:56am', 'dvsdvv', 'yes', 'yes'),
(3, 'dfsf', 'asran', '2017/01/08 02:39:19am', 'dsvsv', 'yes', 'yes'),
(4, 'dfsf', 'asran', '2017/01/08 02:39:20am', 'dsvsv', 'yes', 'yes'),
(5, 'dfsf', 'ajus', '2017/01/08 03:03:19am', 'Hello friend', 'yes', 'yes'),
(6, 'asran', 'dfsf', '2017/01/08 06:30:05am', 'afddagfh', 'yes', 'yes'),
(7, 'asran', 'dfsf', '2017/01/08 06:30:06am', 'afddagfh', 'yes', 'no'),
(8, 'asran', '', '2017/01/08 03:47:14pm', '', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `post_topic`
--

CREATE TABLE IF NOT EXISTS `post_topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `category` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `time_post` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `post_topic`
--

INSERT INTO `post_topic` (`id`, `title`, `message`, `category`, `user_name`, `time_post`) VALUES
(1, 'test1', 'cdsdfsdf', 'Computer Science & Technology', 'dfsf', '2016/12/23 10:04:02am'),
(2, 'efw', 'dsfdf', 'Computer Science & Technology', 'dfsf', '2016/12/23 10:05:10am'),
(3, 'dv', 'dvdsv', 'Architecture', 'dfsf', '2016/12/23 10:06:11am'),
(4, 'dcdc', 'dvdv', 'Question & Answers', 'dfsf', '2016/12/23 10:10:19am'),
(5, 'dfdf', 'dvd', 'Others', 'dfsf', '2016/12/23 10:11:17am'),
(7, 'dssdf', 'dsfsdfsdfsdfsdf', 'Management', 'dfsf', '2016/12/23 06:05:07pm'),
(8, 'sdasf', 'htgfjjjhj', 'Architecture', 'sdsf', '2016/12/26 07:05:43am'),
(9, 'dgsg', 'dsvsdvsdffg', 'Computer Science & Technology', 'sdsf', '2016/12/26 07:06:25am'),
(10, 'sdff', 'dfsdfdf', 'Question & Answers', 'sdsf', '2016/12/26 07:07:59am'),
(11, 'test2222', 'dfdggf', 'Architecture', 'sdsf', '2016/12/26 07:09:19am'),
(12, 'test3', 'dfdsfsdf', 'Computer Science & Technology', 'sdsf', '2016/12/26 07:09:53am'),
(13, 'dsfsf', 'sdfdf', 'Computer Science & Technology', 'sdsf', '2016/12/26 07:12:14am'),
(14, 'test2', 'sjknfdjdb', 'Management', 'sdsf', '2016/12/26 07:13:13am'),
(15, 'test3', 'dfsdfsdf', 'Architecture', 'sdsf', '2016/12/26 07:13:35am'),
(16, 'test4', 'sdfsdf', 'Question & Answers', 'sdsf', '2016/12/26 07:13:59am'),
(17, 'test5', 'sdfdfsfd', 'Others', 'sdsf', '2016/12/26 07:14:21am'),
(18, 'Test123', 'fddsfsdf', 'Management', 'asran', '2017/03/15 05:27:07pm');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `members` varchar(255) NOT NULL,
  `pro_file` varchar(255) NOT NULL,
  `date_add` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `category`, `members`, `pro_file`, `date_add`) VALUES
(2, 'test2', 'Computer Science & Technology', 'suja,Asran', '134005f_SE.pdf', '2016/12/26 02:04:20pm'),
(10, 'dsfd', 'Management', 'suasj,asran,dfsf,,', 'connected_multiple.jpg', '2017/01/04 06:18:06am');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `name`, `start_date`, `end_date`) VALUES
(2, 'sdf', '14 December 2016', '28 December 2016'),
(3, 'Test1', '11 January 2017', '17 March 2017');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `NIC` bigint(11) NOT NULL,
  `pro_image` varchar(255) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `expert` varchar(255) NOT NULL,
  `leave_no` int(11) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `email`, `password`, `NIC`, `pro_image`, `contactno`, `role`, `expert`, `leave_no`) VALUES
(2, 'suasj', 'sdfa@gmail.com', '34324', 243423, '', 23423535, 'employee', '', 40),
(3, 'asran', 'dcfsd@gmail.com', '34253545', 4323543, '', 2443434, 'employee', 'IT,Marketing', 38),
(5, 'sdsf', 'sfdsaf@gmail.com', '232323', 234243, '1.png', 3424424, 'Admin', '', 0),
(6, 'dfsf', 'dsfdsf', 'erferewr', 4566646, 'BackAP3.jpg', 43546, 'employee', 'IT,Management', 40),
(7, 'ajus', 'asdas@gmail.com', 'sfdsdff', 233555, 'connected_multiple.jpg', 32555346, 'employee', 'Computer Science & Technology,Management,Architecture,', 40),
(8, 'ssfd', 'dssdf@gmail.com', 'dff', 4324, '4.png', 24324, 'employee', 'Computer Science & Technology,', 40),
(9, 'scscsd', 'sdasd@gmail.com', '1234', 332434, '5.png', 234242, 'employee', 'Computer Science & Technology,', 40),
(10, 'dsdfdf', 'ds@gmail.com', '1234', 443, '3.png', 0, 'employee', 'Management,', 40),
(11, 'dfsf', 'sdsdf@gmail.com', '1234', 233555, '1.png', 0, 'employee', 'Management,', 40);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
