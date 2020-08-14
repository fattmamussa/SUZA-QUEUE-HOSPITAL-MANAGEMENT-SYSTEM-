-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 12:56 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suza_hqms`
--

-- --------------------------------------------------------

--
-- Table structure for table `laboratory_table`
--

CREATE TABLE `laboratory_table` (
  `ID_lab_table` int(11) NOT NULL,
  `urine_appearence` varchar(45) NOT NULL,
  `Urobilinogen` varchar(45) DEFAULT NULL,
  `Protein` varchar(45) DEFAULT NULL,
  `Ketone` varchar(45) DEFAULT NULL,
  `Blood` varchar(45) DEFAULT NULL,
  `Nitrites` varchar(45) DEFAULT NULL,
  `Leucocytes` varchar(45) DEFAULT NULL,
  `Sugar` varchar(45) DEFAULT NULL,
  `Ph` varchar(45) DEFAULT NULL,
  `SG` varchar(45) DEFAULT NULL,
  `C_deposite` varchar(45) DEFAULT NULL,
  `Hepatitis_C_Screening` varchar(45) DEFAULT NULL,
  `ABO_blood_group` varchar(45) DEFAULT NULL,
  `ID_request_table` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laboratory_table`
--

INSERT INTO `laboratory_table` (`ID_lab_table`, `urine_appearence`, `Urobilinogen`, `Protein`, `Ketone`, `Blood`, `Nitrites`, `Leucocytes`, `Sugar`, `Ph`, `SG`, `C_deposite`, `Hepatitis_C_Screening`, `ABO_blood_group`, `ID_request_table`) VALUES
(7, 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 29);

-- --------------------------------------------------------

--
-- Table structure for table `physical_examination_table`
--

CREATE TABLE `physical_examination_table` (
  `ID_physical_table` int(11) NOT NULL,
  `weight` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `Bp` varchar(11) DEFAULT NULL,
  `vision_Rt` varchar(45) DEFAULT NULL,
  `vision_Lt` varchar(45) DEFAULT NULL,
  `hearing` varchar(45) DEFAULT NULL,
  `ID_lab_table` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physical_examination_table`
--

INSERT INTO `physical_examination_table` (`ID_physical_table`, `weight`, `height`, `Bp`, `vision_Rt`, `vision_Lt`, `hearing`, `ID_lab_table`) VALUES
(7, NULL, NULL, NULL, NULL, NULL, NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `request_table`
--

CREATE TABLE `request_table` (
  `ID_request_table` int(11) NOT NULL,
  `ID_user_table` int(11) DEFAULT NULL,
  `to_days_date` date DEFAULT NULL,
  `current_times` time DEFAULT NULL,
  `request_status` varchar(20) NOT NULL,
  `request_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_table`
--

INSERT INTO `request_table` (`ID_request_table`, `ID_user_table`, `to_days_date`, `current_times`, `request_status`, `request_number`) VALUES
(29, 13, '2020-08-13', '22:28:06', 'done', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_logs_table`
--

CREATE TABLE `user_logs_table` (
  `ID_user_log` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `user_status` varchar(45) DEFAULT NULL,
  `ID_user_table` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_logs_table`
--

INSERT INTO `user_logs_table` (`ID_user_log`, `username`, `password`, `user_status`, `ID_user_table`) VALUES
(1, 'n', 'w', NULL, 7),
(2, 'd', 'd', 'Registered', 8),
(3, 's', 's', 'Registered', 9),
(4, 'd', 'd', 'Registered', 10),
(5, 'd', 'x', 'Registered', 11),
(6, 'lab_tech', 'admin', 'lab_tech', 12),
(7, 'username', 'username', 'Registered', 13),
(8, 'n', '123456', 'Registered', 14),
(9, '', '', 'Registered', 15),
(10, 'n', 'bnmjhghj', 'Registered', 16),
(11, 'new', '123456', 'Registered', 17),
(12, '', '', 'Registered', 18),
(13, '', '', 'Registered', 19),
(14, '', '', 'Registered', 20),
(15, '', '', 'Registered', 21),
(16, 'jh', '123ab', 'Registered', 22);

-- --------------------------------------------------------

--
-- Table structure for table `user_role_table`
--

CREATE TABLE `user_role_table` (
  `ID_user_role` int(11) NOT NULL,
  `user_role` varchar(45) DEFAULT NULL,
  `ID_user_log` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role_table`
--

INSERT INTO `user_role_table` (`ID_user_role`, `user_role`, `ID_user_log`) VALUES
(1, 'Partient', 3),
(2, 'Partient', 4),
(3, 'Dr', 5),
(4, 'Lab_technician', 6),
(5, 'Partient', 7),
(6, 'Partient', 8),
(7, 'Partient', 9),
(8, 'Partient', 10),
(9, 'Partient', 11),
(10, 'Partient', 12),
(11, 'Partient', 13),
(12, 'Partient', 14),
(13, 'Partient', 15),
(14, 'Partient', 16);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `ID_user_table` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `date_of_brith` date DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `nationality` varchar(45) DEFAULT NULL,
  `marital_status` varchar(45) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `educational_level` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`ID_user_table`, `first_name`, `middle_name`, `last_name`, `date_of_brith`, `sex`, `nationality`, `marital_status`, `course`, `educational_level`) VALUES
(1, 'n', 's', 's', '2020-08-12', 'female', 'm', 'single', 'n', 'degree'),
(2, 'n', 's', 's', '2020-08-12', 'female', 'm', 'single', 'n', 'degree'),
(3, 'n', 's', 's', '2020-08-12', 'female', 'm', 'single', 'n', 'degree'),
(4, 'n', 's', 's', '2020-08-12', 'female', 'm', 'single', 'n', 'degree'),
(5, 'n', 's', 's', '2020-08-12', 'female', 'm', 'single', 'n', 'degree'),
(6, 'n', 's', 's', '2020-08-12', 'female', 'm', 'single', 'n', 'degree'),
(7, 'n', 's', 's', '2020-08-12', 'female', 'm', 'single', 'n', 'degree'),
(8, 'd', 'd', 'd', '2020-08-19', 'male', 'd', 'married', 'd', 'master'),
(9, 'd', 'd', 'd', '2020-08-13', 'others', 's', 'married', 'd', 'degree'),
(10, 'x', 'c', 'd', '2020-08-12', 'female', 'dd', 'widow', 'ss', 'degree'),
(11, 'd', 's', 'sd', '2020-08-19', 'others', 'x', 'widow', 'x', 'diploma'),
(12, 'n', 'b', 'v', '2020-08-12', 'male', 'tz', 'single', 'staff', 'staff'),
(13, 'd', 'd', 'd', '2020-08-20', 'female', 'd', 'married', 'd', 'master'),
(14, '', '', '', '0000-00-00', 'SELECT YOU', '', 'SELECT MARITAL STATUS', '', 'SELECT YOUE EDUCATIONALLEVEL'),
(15, '', '', '', '0000-00-00', 'SELECT YOU', '', 'SELECT MARITAL STATUS', '', 'SELECT YOUE EDUCATIONALLEVEL'),
(16, '', '', '', '0000-00-00', 'SELECT YOU', '', 'SELECT MARITAL STATUS', '', 'SELECT YOUE EDUCATIONALLEVEL'),
(17, 'new', 'w', 'w', '2020-08-13', 'female', 'w', 'single', 'wd', 'master'),
(18, '', '', '', '0000-00-00', 'SELECT YOU', '', 'SELECT MARITAL STATUS', '', 'SELECT YOUE EDUCATIONALLEVEL'),
(19, '', '', '', '0000-00-00', 'SELECT YOU', '', 'SELECT MARITAL STATUS', '', 'SELECT YOUE EDUCATIONALLEVEL'),
(20, 'e', '', '', '0000-00-00', 'SELECT YOU', '', 'SELECT MARITAL STATUS', '', 'SELECT YOUE EDUCATIONALLEVEL'),
(21, 'd', '', '', '0000-00-00', 'SELECT YOU', '', 'SELECT MARITAL STATUS', '', 'SELECT YOUE EDUCATIONALLEVEL'),
(22, 'h', 'j', 'k', '0000-00-00', 'SELECT YOU', 'j', 'SELECT MARITAL STATUS', '', 'SELECT YOUE EDUCATIONALLEVEL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laboratory_table`
--
ALTER TABLE `laboratory_table`
  ADD PRIMARY KEY (`ID_lab_table`),
  ADD KEY `ID_request_table` (`ID_request_table`);

--
-- Indexes for table `physical_examination_table`
--
ALTER TABLE `physical_examination_table`
  ADD PRIMARY KEY (`ID_physical_table`),
  ADD KEY `ID_lab_table` (`ID_lab_table`);

--
-- Indexes for table `request_table`
--
ALTER TABLE `request_table`
  ADD PRIMARY KEY (`ID_request_table`),
  ADD KEY `ID_user_table` (`ID_user_table`);

--
-- Indexes for table `user_logs_table`
--
ALTER TABLE `user_logs_table`
  ADD PRIMARY KEY (`ID_user_log`),
  ADD KEY `ID_user_table` (`ID_user_table`);

--
-- Indexes for table `user_role_table`
--
ALTER TABLE `user_role_table`
  ADD PRIMARY KEY (`ID_user_role`),
  ADD KEY `ID_user_log` (`ID_user_log`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`ID_user_table`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laboratory_table`
--
ALTER TABLE `laboratory_table`
  MODIFY `ID_lab_table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `physical_examination_table`
--
ALTER TABLE `physical_examination_table`
  MODIFY `ID_physical_table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `request_table`
--
ALTER TABLE `request_table`
  MODIFY `ID_request_table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user_logs_table`
--
ALTER TABLE `user_logs_table`
  MODIFY `ID_user_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user_role_table`
--
ALTER TABLE `user_role_table`
  MODIFY `ID_user_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `ID_user_table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `laboratory_table`
--
ALTER TABLE `laboratory_table`
  ADD CONSTRAINT `laboratory_table_ibfk_1` FOREIGN KEY (`ID_request_table`) REFERENCES `request_table` (`ID_request_table`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `physical_examination_table`
--
ALTER TABLE `physical_examination_table`
  ADD CONSTRAINT `physical_examination_table_ibfk_1` FOREIGN KEY (`ID_lab_table`) REFERENCES `laboratory_table` (`ID_lab_table`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request_table`
--
ALTER TABLE `request_table`
  ADD CONSTRAINT `request_table_ibfk_1` FOREIGN KEY (`ID_user_table`) REFERENCES `user_table` (`ID_user_table`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_logs_table`
--
ALTER TABLE `user_logs_table`
  ADD CONSTRAINT `user_logs_table_ibfk_1` FOREIGN KEY (`ID_user_table`) REFERENCES `user_table` (`ID_user_table`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_role_table`
--
ALTER TABLE `user_role_table`
  ADD CONSTRAINT `user_role_table_ibfk_1` FOREIGN KEY (`ID_user_log`) REFERENCES `user_logs_table` (`ID_user_log`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
