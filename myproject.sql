-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 06:11 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `infoID` int(11) NOT NULL,
  `Characteristics1` text COLLATE utf8_bin DEFAULT NULL,
  `Char_Description1` text COLLATE utf8_bin DEFAULT NULL,
  `Characteristics2` text COLLATE utf8_bin DEFAULT NULL,
  `Char_Description2` text COLLATE utf8_bin DEFAULT NULL,
  `Characteristics3` text COLLATE utf8_bin DEFAULT NULL,
  `Char_Description3` text COLLATE utf8_bin DEFAULT NULL,
  `CompanyName` text COLLATE utf8_bin DEFAULT NULL,
  `CompanyDescription` text COLLATE utf8_bin DEFAULT NULL,
  `Description1title` text COLLATE utf8_bin DEFAULT NULL,
  `Description1` text COLLATE utf8_bin DEFAULT NULL,
  `Description2title` text COLLATE utf8_bin DEFAULT NULL,
  `Description2` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`infoID`, `Characteristics1`, `Char_Description1`, `Characteristics2`, `Char_Description2`, `Characteristics3`, `Char_Description3`, `CompanyName`, `CompanyDescription`, `Description1title`, `Description1`, `Description2title`, `Description2`) VALUES
(1, 'I love programming', 'I love programming', 'I love programming', 'I love programming', 'I love programming', 'I love programming', 'I love programming', 'I love programming', 'I love programming', 'I love programming', 'I love programming', 'I love programming'),
(5, 'BB', 'CC', 'qweeqw', 'qweewq', 'qeweqw', 'qweeq', 'KOSONG', 'YEA', 'DD', 'EE', 'FF', 'GG'),
(9, 'eqweqweq', 'eqweqw', 'qwewqeqewqwe', 'qwewqeqewqwe', '', 'qwewqeqewqwe', 'qweeqwweqw', 'qweqewe', 'qwewqeqewqwe', 'qwewqeqewqwe', 'qwewqeqewqwe', 'qwewqeqewqwe');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `blog_title` varchar(50) NOT NULL,
  `author_name` varchar(30) NOT NULL,
  `featured_image` varchar(300) NOT NULL,
  `primary_content` varchar(2000) NOT NULL,
  `secondary_image` varchar(300) NOT NULL,
  `secondary_content` varchar(2000) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_title`, `author_name`, `featured_image`, `primary_content`, `secondary_image`, `secondary_content`, `date`) VALUES
(1, 'How to create website', 'Admin', 'blog1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis ratione reiciendis aliquam aperiam reprehenderit inventore, eos, unde ipsam libero, dignissimos similique aspernatur sequi soluta! Sit alias sed facilis harum illum.', 'aboutus.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis ratione reiciendis aliquam aperiam reprehenderit inventore, eos, unde ipsam libero, dignissimos similique aspernatur sequi soluta! Sit alias sed facilis harum illum.', '2021-07-09'),
(4, 'How to buy domain', 'Tahmid', 'pexels-pixabay-458983.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis ratione reiciendis aliquam aperiam reprehenderit inventore, eos, unde ipsam libero, dignissimos similique aspernatur sequi soluta! Sit alias sed facilis harum illum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis ratione reiciendis aliquam aperiam reprehenderit inventore, eos, unde ipsam libero, dignissimos similique aspernatur sequi soluta! Sit alias sed facilis harum illum.', 'contact.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis ratione reiciendis aliquam aperiam reprehenderit inventore, eos, unde ipsam libero, dignissimos similique aspernatur sequi soluta! Sit alias sed facilis harum illum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis ratione reiciendis aliquam aperiam reprehenderit inventore, eos, unde ipsam libero, dignissimos similique aspernatur sequi soluta! Sit alias sed facilis harum illum.', '2021-07-09'),
(17, 'How to host website', 'Admin', '2159547.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid dicta odit voluptate voluptas, id nisi possimus placeat rerum aspernatur impedit officiis sunt? Alias amet eveniet vel necessitatibus corporis dolore pariatur!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid dicta odit voluptate voluptas, id nisi possimus placeat rerum aspernatur impedit officiis sunt? Alias amet eveniet vel necessitatibus corporis dolore pariatur!', 'services.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid dicta odit voluptate voluptas, id nisi possimus placeat rerum aspernatur impedit officiis sunt? Alias amet eveniet vel necessitatibus corporis dolore pariatur!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid dicta odit voluptate voluptas, id nisi possimus placeat rerum aspernatur impedit officiis sunt? Alias amet eveniet vel necessitatibus corporis dolore pariatur!', '2021-07-11'),
(18, 'Block Chain', 'Tahmid', 'contact.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid dicta odit voluptate voluptas, id nisi possimus placeat rerum aspernatur impedit officiis sunt? Alias amet eveniet vel necessitatibus corporis dolore pariatur!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid dicta odit voluptate voluptas, id nisi possimus placeat rerum aspernatur impedit officiis sunt? Alias amet eveniet vel necessitatibus corporis dolore pariatur!', '1.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid dicta odit voluptate voluptas, id nisi possimus placeat rerum aspernatur impedit officiis sunt? Alias amet eveniet vel necessitatibus corporis dolore pariatur!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid dicta odit voluptate voluptas, id nisi possimus placeat rerum aspernatur impedit officiis sunt? Alias amet eveniet vel necessitatibus corporis dolore pariatur!', '2021-07-11'),
(27, 'demo', 'demo', 'Canadasample02.jpg', 'demo', 'correct.jpg', 'demo', '2021-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactID` int(11) NOT NULL,
  `contactDetails` text COLLATE utf8_bin DEFAULT NULL,
  `contactLocation` text COLLATE utf8_bin DEFAULT NULL,
  `contactPhone` text COLLATE utf8_bin DEFAULT NULL,
  `contactFax` text COLLATE utf8_bin DEFAULT NULL,
  `contactEmail` text COLLATE utf8_bin DEFAULT NULL,
  `MapsLatitude` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `MapsLongitude` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactID`, `contactDetails`, `contactLocation`, `contactPhone`, `contactFax`, `contactEmail`, `MapsLatitude`, `MapsLongitude`) VALUES
(1, 'qweeqw', 'qewwqe', 'eqwwqeewq', 'wqewqe', 'wqeeqw', 'ewqewq', 'weqew'),
(3, 'wqe', 'qwe', 'qwe', 'qwe', 'qwe', 'qw', '23'),
(4, 'wqeweq', 'weqweq', 'ewq', 'ewqeqw', 'eqwewq', 'ewq', 'ewqwqe');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `pricingID` int(11) NOT NULL,
  `planName1` text COLLATE utf8_bin DEFAULT NULL,
  `planValue1` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionA1` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionA2` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionA3` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionA4` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionA5` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionA6` text COLLATE utf8_bin DEFAULT NULL,
  `planName2` text COLLATE utf8_bin DEFAULT NULL,
  `planValue2` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionB1` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionB2` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionB3` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionB4` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionB5` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionB6` text COLLATE utf8_bin DEFAULT NULL,
  `planName3` text COLLATE utf8_bin DEFAULT NULL,
  `planValue3` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionC1` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionC2` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionC3` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionC4` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionC5` text COLLATE utf8_bin DEFAULT NULL,
  `planDescriptionC6` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`pricingID`, `planName1`, `planValue1`, `planDescriptionA1`, `planDescriptionA2`, `planDescriptionA3`, `planDescriptionA4`, `planDescriptionA5`, `planDescriptionA6`, `planName2`, `planValue2`, `planDescriptionB1`, `planDescriptionB2`, `planDescriptionB3`, `planDescriptionB4`, `planDescriptionB5`, `planDescriptionB6`, `planName3`, `planValue3`, `planDescriptionC1`, `planDescriptionC2`, `planDescriptionC3`, `planDescriptionC4`, `planDescriptionC5`, `planDescriptionC6`) VALUES
(1, '323', '3232', '2332', '2323', '3232', '32', '2323', '2332', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ServicesID` int(11) NOT NULL,
  `ServicesTitle1` text COLLATE utf8_bin DEFAULT NULL,
  `ServicesDescription1` text COLLATE utf8_bin DEFAULT NULL,
  `ServicesTitle2` text COLLATE utf8_bin DEFAULT NULL,
  `ServicesDescription2` text COLLATE utf8_bin DEFAULT NULL,
  `ServicesTitle3` text COLLATE utf8_bin DEFAULT NULL,
  `ServicesDescription3` text COLLATE utf8_bin DEFAULT NULL,
  `ServicesTitle4` text COLLATE utf8_bin DEFAULT NULL,
  `ServicesDescription4` text COLLATE utf8_bin DEFAULT NULL,
  `ServicesTitle5` text COLLATE utf8_bin DEFAULT NULL,
  `ServicesDescription5` text COLLATE utf8_bin DEFAULT NULL,
  `ServicesTitle6` text COLLATE utf8_bin DEFAULT NULL,
  `ServicesDescription6` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ServicesID`, `ServicesTitle1`, `ServicesDescription1`, `ServicesTitle2`, `ServicesDescription2`, `ServicesTitle3`, `ServicesDescription3`, `ServicesTitle4`, `ServicesDescription4`, `ServicesTitle5`, `ServicesDescription5`, `ServicesTitle6`, `ServicesDescription6`) VALUES
(1, 'Responsive Design', 'Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.', 'Media & Advertisement', 'Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.', 'Graphic Design', 'Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.', 'Apps Development', 'Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.', 'Networking', 'Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.', 'AI', 'Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.'),
(2, 'Web Design2', 'aaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaa', 'Java', 'bbbbbbbbbbbbbbbbbbbbbbbbb\r\nbbbbbbbbbbbbbbbbbbb', 'Python', 'cccccccccccccccccccccc\r\nccccccccccccccccccccccccc', 'C++', 'ddddddddddddddddddddddd\r\nddddddddddddddddddddddddddd', 'Database', 'eeeeeeeeeeeeeeeeeeeeeee\r\neeeeeeeeeeeeeeeeeeeeeee', 'Software Modelling', 'fffffffffffffffffffffffff\r\nfffffffffffffffffffffffffff'),
(3, 'aaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaa', 'bbb', 'bbbbbbbbbbbbbbbbbbbbbbbb\r\nbbbbbbbbbbbbbbbbbbbbbbbb', 'ccc', 'ccccccccccccccccccccccc\r\ncccccccccccccccccccccccc\r\ncccccccccc', 'ddd', 'ddddddddddddddddddddd\r\nddddddddddddddddddddd\r\nddddddddddddddddddddd', 'eee', 'eeeeeeeeeeeeeeeeeeeee\r\neeeeeeeeeeeeeeeeeeeee\r\neeeeeeeeeeeeeeeeeeeeee', 'fff', 'ffffffffffffffffffffff\r\nfffffffffffffffffffffff\r\nffffffffffffffff'),
(6, 'eqwweqewq', 'ewqewqew', 'qewqewq', 'ewqewqewq', 'ewqewq', 'weqweq', 'weqeewq', 'weqwe', 'weqewq', 'eqwewqwew', 'qeqwew', 'eqwewq'),
(7, 'wewqeewq', 'weqeqweqw', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `memberId` char(3) COLLATE utf8_bin DEFAULT NULL,
  `fbLink` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `twitterLink` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `youtubeLink` varchar(255) COLLATE utf8_bin DEFAULT '',
  `printerestLink` varchar(255) COLLATE utf8_bin DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`memberId`, `fbLink`, `twitterLink`, `youtubeLink`, `printerestLink`) VALUES
('M01', 'www.facebook.com/Syaz', 'www.twitter.com/Syaz001', 'www.youtube.com/Syaz', 'www.printerest.com/Syaz'),
('M02', 'www.facebook.com/Ali', 'www.twitter.com/Ali', 'www.youtube.com/Ali', 'www.printerest.com/Ali'),
('M04', 'www.facebook.com/AVilla', 'www.twitter.com/AVilla', 'www.youtube.com/AVilla', 'www.printerest.com/AVilla'),
('M03', 'www.facebook.com/sha2hampston', 'www.twitter.com/sha2hampston', 'www.youtube.com/sha2hampston', 'www.printerest.com/sha2hampston'),
('M05', 'www.facebook.com/cleggefan', 'www.twitter.com/cleggefan', 'www.youtube.com/cleggefan', 'www.printerest.com/cleggefan');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `UserType` varchar(255) COLLATE utf8_bin NOT NULL,
  `Description` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Interface` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`UserType`, `Description`, `Interface`) VALUES
('Administrator', 'Allow for changing web contents', './admin/admin.php'),
('User', 'Normal user', './user/user.php');

-- --------------------------------------------------------

--
-- Table structure for table `tblimg`
--

CREATE TABLE `tblimg` (
  `imageId` int(11) NOT NULL,
  `imgName` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `img_dir` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `memberId` char(3) COLLATE utf8_bin DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tblimg`
--

INSERT INTO `tblimg` (`imageId`, `imgName`, `img_dir`, `memberId`) VALUES
(1, 'correct.jpg', '../images/correct.jpg', 'M01'),
(2, 'correct.jpg', '../images/correct.jpg', 'M02'),
(3, 'male-avatar-realistic-face-man-260nw-643013149.jpg', '../images/male-avatar-realistic-face-man-260nw-643013149.jpg', 'M03'),
(4, 'businessperson-computer-icons-avatar-png-favpng-B8ky3XmC82yLn1QkdvZ17t1vC.jpg', '../images/businessperson-computer-icons-avatar-png-favpng-B8ky3XmC82yLn1QkdvZ17t1vC.jpg', 'M04'),
(5, 'images.jpg', '../images/images.jpg', 'M05');

-- --------------------------------------------------------

--
-- Table structure for table `tblmember`
--

CREATE TABLE `tblmember` (
  `memberId` char(3) COLLATE utf8_bin NOT NULL,
  `memberName` varchar(50) COLLATE utf8_bin DEFAULT '',
  `memberPosition` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tblmember`
--

INSERT INTO `tblmember` (`memberId`, `memberName`, `memberPosition`, `desc`) VALUES
('M01', 'Sam Rickson223', 'Director', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('M02', 'Keely Bowen', 'CEO/Founder', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim felis'),
('M03', 'Sasha Hampton', 'Editor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac posuere lacus. In facilisis ligula risus, aDonec ac posuere lacus. In facilisis ligula risus, a..'),
('M04', 'Aqib Villa', 'CEO', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim felis, porttitor a urna et, sodales venenatis libero. Vivamus finibus leo purus, id aliqVivamus finibus leo purus, id aliqFusce enim felis.rus, id aliqFusce enim felis.'),
('M05', 'Efan Clegg', 'Consultant', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et odio luctus, semper turpis sit.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `UserID` varchar(255) COLLATE utf8_bin NOT NULL,
  `Password` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Address1` tinytext COLLATE utf8_bin DEFAULT NULL,
  `Address2` tinytext COLLATE utf8_bin DEFAULT NULL,
  `PostCode` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `State` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `City` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Country` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `UserType` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`UserID`, `Password`, `Name`, `Address1`, `Address2`, `PostCode`, `State`, `City`, `Country`, `Email`, `UserType`, `created_time`, `avatar`) VALUES
('chensiang@graduate.utm.my', '123', 'Chen ', 'No.39', 'Pekan Batu Kawa', '93250', 'Sarawak', 'Kuching', 'Malaysia', 'chensiang@graduate.utm.my', 'Administrator', '2021-07-04 23:20:45', 'Donaldtrump.jpg'),
('gege', 'gegegege', 'gegegege', 'gegegege', 'gegegege', 'gegegege', 'gegegege', 'gegegege', 'gegegege', 'gege', 'Administrator', '2021-07-10 16:08:38', '2159547.jpg'),
('hcisecr123@gmail.com', '123', 'wq', 'NO.39, PEKAN BATU KAWA', '1221', '93250', 'NO', 'KUCHING', 'Malaysia', 'hcisecr123@gmail.com', 'User', '2021-07-04 23:20:45', 'Zone aomine.png'),
('hcisecr123@gmail.com1', '2121', 'wq', 'NO.39, PEKAN BATU KAWA', '1221', '93250', 'NO', 'KUCHING', 'Malaysia', 'hcisecr123@gmail.com1', 'User', '2021-07-04 23:23:23', NULL),
('hcisecr123@gmail.com1wq', '3232', 'wq', 'NO.39, PEKAN BATU KAWA', '1221', '93250', 'NO', 'KUCHING', 'Malaysia', 'hcisecr123@gmail.com1wq', 'User', '2021-07-04 23:23:30', NULL),
('hcisecr123@gmail.com1wq1212', 'wqqwwq', 'wq', 'NO.39, PEKAN BATU KAWA', '1221', '93250', 'NO', 'KUCHING', 'Malaysia', 'hcisecr123@gmail.com1wq1212', 'User', '2021-07-04 23:24:22', NULL),
('hcisecr@gmail.com', '213312', '123', 'NO.39, PEKAN BATU KAWA', '1221', '93250', 'NO', 'KUCHING', 'Malaysia', 'hcisecr@gmail.com', 'User', '2021-07-04 16:00:28', NULL),
('hcisecr@gmail.com11', '', '123', 'NO.39, PEKAN BATU KAWA', '1221', '93250', 'NO', 'KUCHING', 'Malaysia', 'hcisecr@gmail.com11', 'Administrator', '2021-07-04 16:01:16', NULL),
('hcisecr@gmail.com11123', '555', '123', 'NO.39, PEKAN BATU KAWA', '1221', '93250', 'NO', 'KUCHING', 'Malaysia', 'hcisecr@gmail.com11123', 'Administrator', '2021-07-04 16:01:45', NULL),
('hcisecr@gmail.com333', '222', 'chensiang@graduate.utm.my', 'NO.39, PEKAN BATU KAWA', '1221', '93250', 'NO', 'KUCHING', 'Malaysia', 'hcisecr@gmail.com333', 'Administrator', '2021-07-07 16:31:16', NULL),
('myg11mail@gmail.com', '123', 'wq1233', 'GG123', 'PEKAN KL', '9302022222', 'JOHOR', 'SKUDAI', 'Malaysia', 'myg11mail@gmail.com', 'Administrator', '0000-00-00 00:00:00', '22.jpg'),
('qqqqqqq@mgialfweewf', '123', '123', '123', '123', '123', '123', '123', '13', 'qqqqqqq@mgialfweewf', 'Administrator', '2021-07-10 00:49:29', '03241125558005741.png'),
('wqeweq', 'qweeqw', 'qweqwqew', 'wqewq', 'qewqwe', 'qweeqw', 'wqewqe', 'qweqew', 'qweeqw', 'wqeweq', 'Administrator', '2021-07-10 00:53:18', 'dota1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_password_reset`
--

CREATE TABLE `tbl_password_reset` (
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_bin NOT NULL,
  `expDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `webcontents`
--

CREATE TABLE `webcontents` (
  `infoID` int(11) NOT NULL,
  `pricingID` int(11) DEFAULT NULL,
  `contactID` int(11) DEFAULT NULL,
  `ServicesID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `webcontents`
--

INSERT INTO `webcontents` (`infoID`, `pricingID`, `contactID`, `ServicesID`) VALUES
(1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`infoID`) USING BTREE;

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactID`) USING BTREE;

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`pricingID`) USING BTREE;

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ServicesID`) USING BTREE;

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD KEY `socialmedia_ibfk_1` (`memberId`) USING BTREE;

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`UserType`) USING BTREE;

--
-- Indexes for table `tblimg`
--
ALTER TABLE `tblimg`
  ADD PRIMARY KEY (`imageId`) USING BTREE,
  ADD KEY `memberId` (`memberId`) USING BTREE;

--
-- Indexes for table `tblmember`
--
ALTER TABLE `tblmember`
  ADD PRIMARY KEY (`memberId`) USING BTREE;

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`UserID`) USING BTREE,
  ADD KEY `tbluser_fk_1` (`UserType`) USING BTREE;

--
-- Indexes for table `tbl_password_reset`
--
ALTER TABLE `tbl_password_reset`
  ADD PRIMARY KEY (`token`) USING BTREE;

--
-- Indexes for table `webcontents`
--
ALTER TABLE `webcontents`
  ADD KEY `config_temp_fk1` (`infoID`) USING BTREE,
  ADD KEY `config_temp_fk2` (`ServicesID`) USING BTREE,
  ADD KEY `config_temp_fk3` (`pricingID`) USING BTREE,
  ADD KEY `config_temp_fk4` (`contactID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tblimg`
--
ALTER TABLE `tblimg`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD CONSTRAINT `socialmedia_ibfk_1` FOREIGN KEY (`memberId`) REFERENCES `tblmember` (`memberId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblimg`
--
ALTER TABLE `tblimg`
  ADD CONSTRAINT `tblimg_ibfk_1` FOREIGN KEY (`memberId`) REFERENCES `tblmember` (`memberId`);

--
-- Constraints for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD CONSTRAINT `tbluser_fk_1` FOREIGN KEY (`UserType`) REFERENCES `tblcategory` (`UserType`);

--
-- Constraints for table `webcontents`
--
ALTER TABLE `webcontents`
  ADD CONSTRAINT `config_temp_fk1` FOREIGN KEY (`infoID`) REFERENCES `aboutus` (`infoID`),
  ADD CONSTRAINT `config_temp_fk2` FOREIGN KEY (`ServicesID`) REFERENCES `services` (`ServicesID`),
  ADD CONSTRAINT `config_temp_fk3` FOREIGN KEY (`pricingID`) REFERENCES `pricing` (`pricingID`),
  ADD CONSTRAINT `config_temp_fk4` FOREIGN KEY (`contactID`) REFERENCES `contact` (`contactID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
