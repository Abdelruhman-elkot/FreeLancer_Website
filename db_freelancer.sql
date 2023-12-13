-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 11:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_freelancer`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyform`
--

CREATE TABLE `applyform` (
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `FreelancerSkills` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applyform`
--

INSERT INTO `applyform` (`Email`, `PhoneNumber`, `FreelancerSkills`) VALUES
('ziadadel@gmail.com', 1120011456, ''),
('ziadadel@gmail.com', 1120011456, ''),
('ziadadel@gmail.com', 1120011456, ''),
('farah@123.com', 1014418986, ''),
('farah@123.com', 1014418986, ''),
('farah@123.com', 1120011456, 'farah ljkjksvdnlkvdshlvkfhnldfbk'),
('farah@123.com', 1120011456, 'farah ljkjksvdnlkvdshlvkfhnldfbk'),
('farah@123.com', 1014418986, 'kfghfgjbdgsldsjvblvzd'),
('farah@123.com', 1120011456, 'lkvnlsevkrnlebk'),
('farah@123.com', 1120011456, 'ljvbnvkl l mblvklewfkncadL;KNADVL'),
('ziadadel@gmail.com', 1120011456, 'KV VNKBNOD[IHBEPIVBNFSPK'),
('ziadadel@gmail.com', 1120011456, 'kdjcbkj'),
('farah@123.com', 1014418986, 'front end expert\r\nnative englisch \r\n\r\ndriver '),
('ziadadel@gmail.com', 2147483647, 'eFWRBVFSA ERDFSVD'),
('ziadadel@gmail.com', 2147483647, 'eFWRBVFSA ERDFSVD'),
('ziadadel@gmail.com', 5454545, 'ugvvvvvvvvvvvv'),
('farah@123.com', 1014418986, 'The most beautiful girl in the world'),
('farah@123.com', 1014418986, 'The most beautiful girl in the world'),
('ziadadel@gmail.com', 1234556, 'TGGRVGTG'),
('ziadadelashour@gmail.com', 1120011456, 'Abc'),
('3bdo3lkot@gmail.com', 1143195741, 'Skills\r\nPHP'),
('3bdo3lkot@gmail.com', 1143195741, 'gvgvhg'),
('3bdo3lkot@gmail.com', 1143195741, 'fdfgdgfg'),
('3bdo3lkot@gmail.com', 1143195741, 'dwd'),
('EgyEye@gmail.com', 43443, 'rere');

-- --------------------------------------------------------

--
-- Table structure for table `jobposts`
--

CREATE TABLE `jobposts` (
  `PostID` int(10) NOT NULL,
  `ClientID` int(10) NOT NULL,
  `JobType` varchar(100) NOT NULL,
  `JobBudget` int(20) NOT NULL,
  `CreationDate` date NOT NULL DEFAULT current_timestamp(),
  `JobDescription` varchar(2000) NOT NULL,
  `ProposalCount` int(20) NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'Pending',
  `JobPostTitle` varchar(50) NOT NULL,
  `propStatue` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobposts`
--

INSERT INTO `jobposts` (`PostID`, `ClientID`, `JobType`, `JobBudget`, `CreationDate`, `JobDescription`, `ProposalCount`, `Status`, `JobPostTitle`, `propStatue`) VALUES
(1, 4, 'full time', 5000, '2023-12-03', 'UI/UX YA wlad el7lal Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto voluptates in debitis, maiores doloribus laborum nihil similique laudantium saepe dignissimos facilis assumend', 50, 'Accepted', 'UI/UX', ''),
(2, 5, 'half time', 3000, '2023-12-03', 'mhnds bsmgyat Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto voluptates in debitis, maiores doloribus laborum nihil similique laudantium saepe dignissimos facilis assumenda nesci', 30, 'Refuse', 'Software Engineer', ''),
(3, 4, 'full time ', 2000, '2023-12-03', 'software for ihgdvhvigvodshibsvdbhisvdbhiosdvibhdsvbhisvdhbljenflenvlmsnlm,\r\ngrbnbvlsmbnvnwljbfewljbjfbkaejsbf;lfksddbvmb;l\r\nsmbfw;ljkbnfl;ae\r\nkebflkbflkbelkefwb;lkefh;lewkbwe;ljkbeflkrgblgwrkbrg;lkeg', 0, 'Accepted', 'SWE', ''),
(4, 6, 'full time ', 1000, '2023-12-05', 'graphic designer for a company that jdhfsf;jvbdbljbssjlvbjkldvbjvbdlkjbvkjbdvljbdavbdvdjvbdlvb.dabvl.jbdaljavbd ljwqefh;lefhlwbf;fblew;kjbfljhjkhgflkwe\r\niwefhogrqihgrowihgoihgropihwropirghopwrqih\r\n', 12, '', 'Graphic designer', ''),
(7, 5, 'fixed', 50, '2023-12-09', 'UI Developer \r\nExperience 5 Years \r\nSkill \r\nHtml\r\nCSS\r\nJS', 0, '', 'UI', ''),
(8, 12, 'fixed', 50, '2023-12-09', 'Skills \r\nHTML\r\nCSS\r\nJS', 0, '', 'UI', ''),
(9, 5, 'Full Time', 50, '2023-12-09', 'sgdhjkdsdkkdslkdlskldskdllkdslkdlkslkkjckjckjcxcxmckxkjdjfdfjjkfd', 20, 'Accepted', 'UI/UX', ''),
(10, 5, 'Full Time', 50, '2023-12-09', 'sgdhjkdsdkkdslkdlskldskdllkdslkdlkslkkjckjckjcxcxmckxkjdjfdfjjkfd', 20, 'Accept', 'Software', ''),
(11, 5, 'Full Time', 50, '2023-12-09', 'sgdhjkdsdkkdslkdlskldskdllkdslkdlkslkkjckjckjcxcxmckxkjdjfdfjjkfd', 20, 'Accept', 'Software', ''),
(12, 14, 'fixed', 5, '2023-12-10', 'resertdfytfguguiuhuih\r\nhfcvhvhvvygjygugu\r\nhgvchgvhgvhghg', 0, 'Accept', 'SW1', ''),
(13, 1, 'fixed', 5, '2023-12-10', 'uihsrehyriuhiurehihrfiurhfirfhih\r\nrguyguydhuyrdrfydhrf\r\nuyhuyrfyuhrfuyh\r\nuyyuy', 0, 'Accept', 'SW1', ''),
(14, 6, 'fixed', 5, '2023-12-11', 'fcgfch', 0, '', 'SW1', ''),
(15, 6, 'fixed', 50, '2023-12-11', 'dsfddffdfdfdfd', 5, 'Accept', 'SW1', ''),
(16, 18, 'Full Time', 5, '2023-12-13', 'yeyjejhrjh', 0, '', 'SW1', ''),
(17, 17, 'Full Time', 5, '2023-12-13', 'fesrgdfgugi', 0, 'Pending', 'SW1', ''),
(18, 17, 'Full Time', 5, '2023-12-13', 'fesrgdfgugi', 0, 'Pending', 'SW1', ''),
(19, 17, 'Full Time', 5, '2023-12-13', 'gfdcthfyyg', 0, 'Pending', 'SW1', ''),
(20, 17, 'Full Time', 5, '2023-12-13', 'hgvvhvh', 0, 'Pending', 'SW1', ''),
(21, 17, 'Full Time', 9, '2023-12-13', 'ytfytfyt', 0, 'Pending', 'SW1h', ''),
(22, 17, 'Full Time', 9, '2023-12-13', 'tfjyujhuhk', 0, 'Pending', 'SW1h', ''),
(23, 17, 'Full Time', 9, '2023-12-13', 'uyygjgy', 0, 'Pending', 'SW1h', ''),
(24, 17, 'Full Time', 9, '2023-12-13', 'tthgghhg', 0, 'Pending', 'SW1h', ''),
(25, 17, 'Full Time', 9, '2023-12-13', 'ytfytfutfutf', 0, 'Pending', 'SW1h', ''),
(26, 15, 'Full Time', 9, '2023-12-13', 'hghtf', 0, 'Pending', 'SW1h', ''),
(27, 15, 'Part Time', 9, '2023-12-13', 'ytfytftyfytf', 0, 'Pending', 'SW1h', ''),
(28, 15, 'Full Time', 9, '2023-12-13', 'ytfyujyujgyjyjh', 0, 'Pending', 'SW1h', ''),
(29, 15, 'Part Time', 9, '2023-12-13', 'ersdgtrfhtfvjgyjhgbygsuygfvryfmxyjdxjkxtxxxxdrxfhxngxxhfygu\r\nersdgtrfhtfvjgyjhgbygsuygfvryfmxyjdxjkxtxxxxdrxfhxngxxhfygu\r\nersdgtrfhtfvjgyjhgbygsuygfvryfmxyjdxjkxtxxxxdrxfhxngxxhfygu\r\nersdgtrfhtfvjgyjhgbygsuygfvryfmxyjdxjkxtxxxxdrxfhxngxxhfygu', 0, 'Pending', 'SW1h', ''),
(30, 15, 'Full Time', 9, '2023-12-13', 'ersdgtrfhtfvjgyjhgbygsuygfvryfmxyjdxjkxtxxxxdrxfhxngxxhfyguersdgtrfhtfvjgyjhgbygsuygfvryfmxyjdxjkxtxxxxdrxfhxngxxhfyguersdgtrfhtfvjgyjhgbygsuygfvryfmxyjdxjkxtxxxxdrxfhxngxxhfyguersdgtrfhtfvjgyjhgbygsuygfvryfmxyjdxjkxtxxxxdrxfhxngxxhfyguersdgtrfhtfvjgyjhgbygsuygfvryfmxyjdxjkxtxxxxdrxfhxngxxhfyguersdgtrfhtfvjgyjhgbygsuygfvryfmxyjdxjkxtxxxxdrxfhxngxxhfygu', 0, 'Pending', 'SW1h', ''),
(31, 15, 'Full Time', 9, '2023-12-13', 'jygjygjygu', 0, 'Pending', 'SW1h', '');

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `ProposalID` int(10) NOT NULL,
  `FreelancerID` int(10) NOT NULL,
  `PostID` int(10) NOT NULL,
  `CV` varchar(200) NOT NULL,
  `ProposalDate` date NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `savedposts`
--

CREATE TABLE `savedposts` (
  `PostID` int(10) NOT NULL,
  `FreelancerId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `savedposts`
--

INSERT INTO `savedposts` (`PostID`, `FreelancerId`) VALUES
(2, 4),
(2, 4),
(1, 4),
(1, 5),
(4, 5),
(3, 5),
(3, 5),
(3, 5),
(2, 5),
(1, 5),
(1, 5),
(1, 5),
(2, 5),
(1, 5),
(2, 5),
(3, 5),
(2, 5),
(2, 5),
(3, 5),
(2, 5),
(2, 5),
(1, 5),
(1, 6),
(1, 6),
(1, 6),
(1, 6),
(1, 6),
(1, 6),
(1, 6),
(9, 6),
(1, 6),
(9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(10) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNumber` varchar(11) NOT NULL,
  `ProfileImage` varchar(200) NOT NULL DEFAULT 'defaultimage.png',
  `UserRole` varchar(100) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `userPassword` varchar(200) NOT NULL,
  `About` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `Email`, `PhoneNumber`, `ProfileImage`, `UserRole`, `Username`, `userPassword`, `About`) VALUES
(1, 'Abdelruhman', 'elkot', '3bdo3lkot@gmail.com', '01143195741', 'photo_2023-03-13_04-44-24.jpg', 'Admin', 'Abdelruhman_elkot#1', '111aaa', ''),
(4, 'Abdelruhman', 'kot', '3bdo3lkot@gmail.com', '01143195741', 'photo_2023-03-13_04-43-52.jpg', 'Client', 'Abdelruhman_elkot#4', 'ZJhWgTeo', 'Software engineer\r\nFaculty of Computer Science and Artificial Intelligence Helwan University'),
(5, 'Abdelruhman', 'elkot', '3bdo3lkot@gmail.com', '01143195741', 'defaultimage.png', 'Client', 'Abdelruhman_elkot#5', 'GgZUh5Lj', ''),
(6, 'Abdelruhman', 'elkot', '3bdo3lkot@gmail.com', '01143195741', 'defaultimage.png', 'Client', 'Abdelruhman_elkot#6', 'aaa111', ''),
(7, 'Abdelruhman', 'elkot', '3bdo3lkot@gmail.com', '01143195741', 'defaultimage.png', 'Client', '', '', ''),
(8, 'Abdelruhman', 'elkot', '3bdo3lkot@gmail.com', '01143195741', 'defaultimage.png', 'Client', '', '', ''),
(9, 'عبدالرحمن', 'قط', '3bdo3lkot@gmail.com', '01143195741', 'defaultimage.png', 'Client', 'عبدالرحمن_قط#9', '', ''),
(10, 'Abdelruhman', 'elkot', '3bdo3lkot@gmail.com', '01143195741', 'defaultimage.png', 'Freelancer', 'Abdelruhman_elkot#10', '', ''),
(11, 'Abdelruhman', 'elkot', '3bdo3lkot@gmail.com', '01143195741', 'defaultimage.png', 'Client', 'Abdelruhman_elkot#11', '', ''),
(12, 'Abdelruhman', 'elkot', '3bdo3lkot@gmail.com', '01143195741', 'defaultimage.png', 'Client', 'Abdelruhman_elkot#12', '', ''),
(13, 'Abdelruhman', 'elkot', '3bdo3lkot@gmail.com', '01143195741', 'defaultimage.png', 'Client', 'Abdelruhman_elkot#13', '', ''),
(14, 'Abdelruhman', 'elkot', '3bdo3lkot@gmail.com', '01143195741', 'defaultimage.png', 'Client', 'Abdelruhman_elkot#14', '', ''),
(15, 'Abdelruhman', 'elkot', '3bdo3lkot@gmail.com', '01143195741', 'Abdelruhman.jpg', 'Client', 'Abdelruhman_elkot#15', 'aaa111', 'Software engineer'),
(16, 'Abdelruhman', 'elkot', '3bdo3lkot@gmail.com', '01143195741', 'defaultimage.png', 'Client', '', '0jEGjDjf', ''),
(17, 'Abdelruhman', 'kot', '3bdo3lkot@gmail.com', '01143195741', 'Abdelruhman.jpg', 'Client', 'Abdelruhman_elkot#17', '2xeysALu', ''),
(18, 'Abdelruhman', 'kot', '3bdo3lkot@gmail.com', '01143195741', '', 'Client', 'Abdelruhman_elkot#18', 'r2dkGxKt', 'Software Engineer'),
(20, 'Abdelruhman', 'elkot', '3bdo3lkot@gmail.com', '01143195741', 'defaultimage.png', 'Freelancer', 'Abdelruhman_elkot#20', 'KfTBF2h5', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobposts`
--
ALTER TABLE `jobposts`
  ADD PRIMARY KEY (`PostID`),
  ADD KEY `ClientID` (`ClientID`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`ProposalID`),
  ADD KEY `FreelancerID` (`FreelancerID`),
  ADD KEY `PostID` (`PostID`);

--
-- Indexes for table `savedposts`
--
ALTER TABLE `savedposts`
  ADD KEY `PostID` (`PostID`),
  ADD KEY `ClientId` (`FreelancerId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobposts`
--
ALTER TABLE `jobposts`
  MODIFY `PostID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `ProposalID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobposts`
--
ALTER TABLE `jobposts`
  ADD CONSTRAINT `jobposts_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proposals`
--
ALTER TABLE `proposals`
  ADD CONSTRAINT `proposals_ibfk_1` FOREIGN KEY (`FreelancerID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proposals_ibfk_2` FOREIGN KEY (`PostID`) REFERENCES `jobposts` (`PostID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `savedposts`
--
ALTER TABLE `savedposts`
  ADD CONSTRAINT `savedposts_ibfk_1` FOREIGN KEY (`PostID`) REFERENCES `jobposts` (`PostID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `savedposts_ibfk_2` FOREIGN KEY (`FreelancerId`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
