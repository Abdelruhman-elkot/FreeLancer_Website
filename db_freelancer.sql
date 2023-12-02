-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 09:20 PM
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
-- Table structure for table `jobposts`
--

CREATE TABLE `jobposts` (
  `PostID` int(10) NOT NULL,
  `ClientID` int(10) NOT NULL,
  `JobType` varchar(100) NOT NULL,
  `JobBudget` int(20) NOT NULL,
  `CreationDate` date NOT NULL DEFAULT current_timestamp(),
  `JobDescription` varchar(200) NOT NULL,
  `ProposalCount` int(20) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(10) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNumber` varchar(11) NOT NULL,
  `ProfileImage` varchar(200) NOT NULL,
  `UserRole` varchar(100) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `userPassword` varchar(200) NOT NULL,
  `TimeCreated` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `Email`, `PhoneNumber`, `ProfileImage`, `UserRole`, `Username`, `userPassword`, `TimeCreated`) VALUES
(4, 'Abdelruhman', 'elkot', '3bdo3lkot@gmail.com', '01099803449', '', '', 'Abdelruhman_elkot#', 'JDWCSb8k', '2023-12-02'),
(5, 'Ahmed', 'Ali', 'sffsgsg@ghdh.com', '02828277', '', '', 'Ahmed_Ali#', 'SC0YlhcM', '2023-12-02');

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
  MODIFY `PostID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `ProposalID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
