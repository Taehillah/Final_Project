-- Table structure for table `Administrators`
--

CREATE TABLE Administrators (
  Admin_id int NOT NULL PRIMARY KEY IDENTITY(1,1),
  First_Names varchar(255) NOT NULL,
  Surname varchar(255) NOT NULL,
  Email_of_Administrator varchar(255) NOT NULL,
  Contacts_of_Administrator varchar(15) NOT NULL,
  Role nvarchar(50) NOT NULL CHECK (Role IN ('Guardian', 'Learner', 'Administrator')),
  PasswordHash varchar(255) NOT NULL
);

--
-- Dumping data for table `Administrators`
--

INSERT INTO Administrators (First_Names, Surname, Email_of_Administrator, Contacts_of_Administrator, Role, PasswordHash) VALUES
('Ishmael Lehlohonolo', 'Mafole', 'ishmael@gmail.com', '0657789980', 'Administrator', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
('Nami', 'Kaleb', 'nami@gmail.com', '0114174432', 'Administrator', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
('Namisto', 'Mokoena', 'mmokwenas@hotmail.com', '0111234567', 'Administrator', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
('tiroyaone', 'mokaila', 'tiroyaonemokaila@gmail.com', '0663418160', 'Administrator', 'ff532ab459016fcb6a19bf0cd5a486878a08ea224aac5e5bdc1d6387cb991792'),
('tiroyaone', 'mokaila', 'tiroyaonemokaila@gmail.com', '0663418160', 'Learner', 'ff532ab459016fcb6a19bf0cd5a486878a08ea224aac5e5bdc1d6387cb991792'),
('Beverly', 'Hills', 'bervely@hotmail.com', '0112345678', 'Administrator', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
('syus', 'vcb', 'sas@hi.com', '0112345679', 'Administrator', '95a88235925481ba7c1d47442d30ee24d5d651490072ef8756292b38675f490a');

-- --------------------------------------------------------

-- Table structure for table `Buses`
--

CREATE TABLE Buses (
  Bus_id int NOT NULL PRIMARY KEY IDENTITY(1,1),
  Bus_Registration varchar(15) NOT NULL,
  Route varchar(255) NOT NULL,
  Capacity int NOT NULL,
  Schedule varchar(255) NOT NULL
);

--
-- Dumping data for table `Buses`
--

INSERT INTO Buses (Bus_Registration, Route, Capacity, Schedule) VALUES
('FGZ745GP', 'Centurion', 24, '05:45-06:45');

-- --------------------------------------------------------

-- Table structure for table `Registrations`
--

CREATE TABLE Registrations (
  Registration_id int NOT NULL PRIMARY KEY IDENTITY(1,1),
  Learner_id int NULL,
  Bus_id int NULL,
  Status nvarchar(50) NOT NULL CHECK (Status IN ('Registered', 'Unregistered')),
  Registration_date datetime NOT NULL DEFAULT GETDATE()
);

-- --------------------------------------------------------

-- Table structure for table `Users`
--

CREATE TABLE Users (
  Learner_id int NOT NULL PRIMARY KEY IDENTITY(1,1),
  Names_of_Learner varchar(255) NOT NULL,
  Names_of_Guardian varchar(255) NULL,
  Email_of_Guardian varchar(255) NOT NULL,
  Contacts_of_Guardian varchar(15) NOT NULL,
  Role nvarchar(50) NOT NULL CHECK (Role IN ('Guardian', 'Learner', 'Administrator')),
  Class nvarchar(50) NULL CHECK (Class IN ('10A', '10B', '10C', '11A', '11B', '11C', '12A', '12B', '12C')),
  Status nvarchar(50) NULL CHECK (Status IN ('New Learner', 'Current Learner')),
  Location nvarchar(50) NOT NULL CHECK (Location IN ('Rooihuiskraal', 'Wierdapark', 'Centurion')),
  PasswordHash varchar(255) NOT NULL
);

--
-- Dumping data for table `Users`
--

INSERT INTO Users (Names_of_Learner, Names_of_Guardian, Email_of_Guardian, Contacts_of_Guardian, Role, Class, Status, Location, PasswordHash) VALUES
('Kananelo Mafole', 'Ishmael Mafole', 'ishmaelmafole@gmail.com', '0658734843', 'Guardian', '12C', 'New Learner', 'Centurion', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
('Fedora Rebo', 'Kerileng Rebo', 'kerirebo@hotmail.com', '07612344567', 'Guardian', '10C', 'New Learner', 'Wierdapark', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
('Mpho Mokela', 'George Mokela', 'georgemokela@gmail.com', '07566433321', 'Guardian', '10A', 'New Learner', 'Rooihuiskraal', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
('thabo', 'lepatso', 'thabo@hot.com', '0111234567', 'Guardian', '10B', 'Current Learner', 'Rooihuiskraal', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0'),
('Bervelia', 'Hills', 'bevs@gmail.com', '0711234567', 'Guardian', '10B', 'New Learner', 'Rooihuiskraal', '2a3d4a80aa7481df2d65446bdc5b55a5eec9d940aa44b326882fceac780b24d0');

-- --------------------------------------------------------

-- Foreign Keys and Relationships
--

-- Foreign Keys for table `Registrations`
--

ALTER TABLE Registrations
  ADD CONSTRAINT FK_Registrations_Users FOREIGN KEY (Learner_id) REFERENCES Users(Learner_id),
ADD CONSTRAINT FK_Registrations_Buses FOREIGN KEY (Bus_id) REFERENCES Buses(Bus_id);

