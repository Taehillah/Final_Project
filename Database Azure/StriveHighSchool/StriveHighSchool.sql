-- Table structure for table `Administrators`
--

CREATE TABLE `Administrators` (
  `Admin_id` int(11) NOT NULL,
  `First_Names` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Email_of_Administrator` varchar(255) NOT NULL,
  `Contacts_of_Administrator` varchar(15) NOT NULL,
  `Role` enum('Guardian','Learner','Administrator') NOT NULL,
  `PasswordHash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Administrators`
--

INSERT INTO `Administrators` (`Admin_id`, `First_Names`, `Surname`, `Email_of_Administrator`, `Contacts_of_Administrator`, `Role`, `PasswordHash`) VALUES
(1, 'Ishmael Lehlohonolo', 'Mafole', 'ishmael@gmail.com', '0657789980', 'Administrator', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
(2, 'Nami', 'Kaleb', 'nami@gmail.com', '0114174432', 'Administrator', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
(3, 'Namisto', 'Mokoena', 'mmokwenas@hotmail.com', '0111234567', 'Administrator', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
(4, 'tiroyaone', 'mokaila', 'tiroyaonemokaila@gmail.com', '0663418160', 'Administrator', 'ff532ab459016fcb6a19bf0cd5a486878a08ea224aac5e5bdc1d6387cb991792'),
(5, 'tiroyaone', 'mokaila', 'tiroyaonemokaila@gmail.com', '0663418160', 'Learner', 'ff532ab459016fcb6a19bf0cd5a486878a08ea224aac5e5bdc1d6387cb991792'),
(6, 'tiroyaone', 'mokaila', 'tiroyaonemokaila@gmail.com', '0663418160', 'Administrator', 'ff532ab459016fcb6a19bf0cd5a486878a08ea224aac5e5bdc1d6387cb991792'),
(7, 'Beverly', 'Hills', 'bervely@hotmail.com', '0112345678', 'Administrator', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
(8, 'syus', 'vcb', 'sas@hi.com', '0112345679', 'Administrator', '95a88235925481ba7c1d47442d30ee24d5d651490072ef8756292b38675f490a');

-- --------------------------------------------------------

--
-- Table structure for table `Buses`
--

CREATE TABLE `Buses` (
  `Bus_id` int(11) NOT NULL,
  `Bus_Registration` varchar(15) NOT NULL,
  `Route` varchar(255) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `Schedule` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Buses`
--

INSERT INTO `Buses` (`Bus_id`, `Bus_Registration`, `Route`, `Capacity`, `Schedule`) VALUES
(1, 'FGZ745GP', 'Centurion', 24, '05:45-06:45');

-- --------------------------------------------------------

--
-- Table structure for table `Registrations`
--

CREATE TABLE `Registrations` (
  `Registration_id` int(11) NOT NULL,
  `Learner_id` int(11) DEFAULT NULL,
  `Bus_id` int(11) DEFAULT NULL,
  `Status` enum('Registered','Unregistered') NOT NULL,
  `Registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(3, ' Mpho Mokela', 'George Mokela', 'georgemokela@gmail.com', '07566433321', 'Guardian', '10A', 'New Learner', 'Rooihuiskraal', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(4, 'thabo', 'lepatso', 'thabo@hot.com', '0111234567', 'Guardian', '10B', 'Current Learner', 'Rooihuiskraal', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
(5, 'thabo', 'lepatso', 'thabo@hot.com', '0111234567', 'Guardian', '10B', 'Current Learner', 'Rooihuiskraal', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
(6, 'thabo', 'lepatso', 'thabo@hot.com', '0111234567', 'Guardian', '10B', 'Current Learner', 'Rooihuiskraal', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
(7, 'thabo', 'lepatso', 'thabo@hot.com', '0111234567', 'Guardian', '10B', 'Current Learner', 'Rooihuiskraal', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
(8, 'thabo', 'lepatso', 'thabo@hot.com', '0111234567', 'Guardian', '10B', 'Current Learner', 'Rooihuiskraal', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
(9, 'thabo', 'lepatso', 'thabo@hot.com', '0111234567', 'Guardian', '10B', 'Current Learner', 'Rooihuiskraal', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
(10, 'Bervelia', 'Hills', 'bevs@gmail.com', '0711234567', 'Guardian', '10B', 'New Learner', 'Rooihuiskraal', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Administrators`
--
ALTER TABLE `Administrators`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `Buses`
--
ALTER TABLE `Buses`
  ADD PRIMARY KEY (`Bus_id`);

--
-- Indexes for table `Registrations`
--
ALTER TABLE `Registrations`
  ADD PRIMARY KEY (`Registration_id`),
  ADD KEY `Learner_id` (`Learner_id`),
  ADD KEY `Bus_id` (`Bus_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Learner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Administrators`
--
ALTER TABLE `Administrators`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Buses`
--
ALTER TABLE `Buses`
  MODIFY `Bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Registrations`
--
ALTER TABLE `Registrations`
  MODIFY `Registration_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `Learner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Registrations`
--
ALTER TABLE `Registrations`
  ADD CONSTRAINT `registrations_ibfk_1` FOREIGN KEY (`Learner_id`) REFERENCES `Users` (`Learner_id`),
  ADD CONSTRAINT `registrations_ibfk_2` FOREIGN KEY (`Bus_id`) REFERENCES `Buses` (`Bus_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;