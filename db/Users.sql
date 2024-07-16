-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 16, 2024 at 10:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `StriveHighSchool`
--

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `Learner_id` int(11) NOT NULL,
  `Names_of_Learner` varchar(255) NOT NULL,
  `Names_of_Guardian` varchar(255) DEFAULT NULL,
  `Email_of_Guardian` varchar(255) NOT NULL,
  `Contacts_of_Guardian` varchar(15) NOT NULL,
  `Role` enum('Guardian','Learner','Aministrator') NOT NULL,
  `Class` enum('10A','10B','10C','11A','11B','11C','12A','12B','12C') DEFAULT NULL,
  `Status` enum('New Learner','Current Learner') DEFAULT NULL,
  `Location` enum('Rooihuiskraal','Wierdapark','Centurion') NOT NULL,
  `PasswordHash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`Learner_id`, `Names_of_Learner`, `Names_of_Guardian`, `Email_of_Guardian`, `Contacts_of_Guardian`, `Role`, `Class`, `Status`, `Location`, `PasswordHash`) VALUES
(1, 'Kananelo Mafole', 'Ishmael Mafole', 'ishmaelmafole@gmail.com', '0658734843', 'Guardian', '12C', 'New Learner', 'Centurion', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
(2, 'Fedora Rebo', 'Kerileng Rebo', 'kerirebo@hotmail.com', '07612344567', 'Guardian', '10C', 'New Learner', 'Wierdapark', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
(3, ' Mpho Mokela', 'George Mokela', 'georgemokela@gmail.com', '07566433321', 'Guardian', '10A', 'New Learner', 'Rooihuiskraal', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Learner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `Learner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
