-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 08:59 PM
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
('ziadadel@gmail.com', 1234556, 'TGGRVGTG');

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
  `Status` varchar(100) NOT NULL,
  `JobPostTitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobposts`
--

INSERT INTO `jobposts` (`PostID`, `ClientID`, `JobType`, `JobBudget`, `CreationDate`, `JobDescription`, `ProposalCount`, `Status`, `JobPostTitle`) VALUES
(1, 4, 'full time', 5000, '2023-12-03', 'UI/UX YA wlad el7lal Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto voluptates in debitis, maiores doloribus laborum nihil similique laudantium saepe dignissimos facilis assumend', 50, '', 'UI/UX'),
(2, 5, 'half time', 3000, '2023-12-03', 'mhnds bsmgyat Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto voluptates in debitis, maiores doloribus laborum nihil similique laudantium saepe dignissimos facilis assumenda nesci', 30, '', 'Software Engineer'),
(3, 4, 'full time ', 2000, '2023-12-03', 'software for ihgdvhvigvodshibsvdbhisvdbhiosdvibhdsvbhisvdhbljenflenvlmsnlm,\r\ngrbnbvlsmbnvnwljbfewljbjfbkaejsbf;lfksddbvmb;l\r\nsmbfw;ljkbnfl;ae\r\nkebflkbflkbelkefwb;lkefh;lewkbwe;ljkbeflkrgblgwrkbrg;lkeg', 0, '', 'SWE'),
(4, 6, 'full time ', 1000, '2023-12-05', 'graphic designer for a company that jdhfsf;jvbdbljbssjlvbjkldvbjvbdlkjbvkjbdvljbdavbdvdjvbdlvb.dabvl.jbdaljavbd ljwqefh;lefhlwbf;fblew;kjbfljhjkhgflkwe\r\niwefhogrqihgrowihgoihgropihwropirghopwrqih\r\n', 12, '', 'Graphic designer');

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `ProposalID` int(10) NOT NULL,
  `FreelancerID` int(10) NOT NULL,
  `PostID` int(10) NOT NULL,
  `ProposalText` varchar(200) NOT NULL,
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
(1, 6);

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
  `TimeCreated` date NOT NULL DEFAULT current_timestamp(),
  `About` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `Email`, `PhoneNumber`, `ProfileImage`, `UserRole`, `Username`, `userPassword`, `TimeCreated`, `About`) VALUES
(4, 'Abdelruhman', 'elkot', '3bdo3lkot@gmail.com', '01099803449', 'defaultimage.png', 'Admin', 'Abdelruhman_elkot#4', 'JDWCSb8k', '2023-12-02', ''),
(5, 'Ziad', 'Yasser', 'ZiadYasser@gmail.com', '01120011456', 'defaultimage.png', 'Client', 'Ziad_Yasser#5', 'SC0YlhcM', '2023-12-02', ''),
(6, 'Farah ', 'Hossam', 'ziadadelashour@gmail.com', '01120011456', 'defaultimage.png', 'Freelancer', 'Farah_Hossam#6', 'K8oqcFLU', '2023-12-04', '');

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
  MODIFY `PostID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `ProposalID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobposts`
--
ALTER TABLE `jobposts`
  ADD CONSTRAINT `jobposts_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `proposals`
--
ALTER TABLE `proposals`
  ADD CONSTRAINT `proposals_ibfk_1` FOREIGN KEY (`FreelancerID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `proposals_ibfk_2` FOREIGN KEY (`PostID`) REFERENCES `jobposts` (`PostID`);

--
-- Constraints for table `savedposts`
--
ALTER TABLE `savedposts`
  ADD CONSTRAINT `savedposts_ibfk_1` FOREIGN KEY (`PostID`) REFERENCES `jobposts` (`PostID`),
  ADD CONSTRAINT `savedposts_ibfk_2` FOREIGN KEY (`FreelancerId`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
