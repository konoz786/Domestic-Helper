-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 04:17 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dh`
--

-- --------------------------------------------------------

--
-- Table structure for table `cancelled_requests_t`
--

CREATE TABLE `cancelled_requests_t` (
  `request_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `helper_id` int(11) NOT NULL,
  `work_type` varchar(100) NOT NULL,
  `starting_date` varchar(100) NOT NULL,
  `starting_time` varchar(100) NOT NULL,
  `services` varchar(1000) NOT NULL,
  `total_fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complete_service_t`
--

CREATE TABLE `complete_service_t` (
  `cs_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `helper_id` int(11) NOT NULL,
  `work_type` varchar(100) NOT NULL,
  `starting_date` varchar(100) NOT NULL,
  `starting_time` varchar(100) NOT NULL,
  `services` varchar(1000) NOT NULL,
  `total_fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complete_service_t`
--

INSERT INTO `complete_service_t` (`cs_id`, `customer_id`, `helper_id`, `work_type`, `starting_date`, `starting_time`, `services`, `total_fees`) VALUES
(1, 1, 9, 'one time', '2023-04-06', '17:29', 'baby sitting', 3000),
(2, 1, 1, 'one time', '2023-03-29', '17:26', 'cleaning, baby sitting', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `domestic_helper`
--

CREATE TABLE `domestic_helper` (
  `helper_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `age` int(11) NOT NULL,
  `details` mediumtext NOT NULL,
  `image_name` varchar(1000) NOT NULL,
  `fee_per_work` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `services` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `domestic_helper`
--

INSERT INTO `domestic_helper` (`helper_id`, `name`, `age`, `details`, `image_name`, `fee_per_work`, `email`, `password`, `gender`, `services`) VALUES
(1, 'Elizabeth Olsen', 28, 'Hello, I am Elizabeth. I am 28 and I am looking for work.', 'pexels-andrea-piacquadio-774909.jpg', 700, 'rollins.seth98@yahoo.com', '123', 'female', 'cooking, cleaning'),
(2, 'Rossinni', 47, 'Good Day Maa\'m &Sir, I am Rossinni, 42 years old, Married and have 3 children from Philippines,.I am with my current employer for 10 years,1 couple and 3 children, ages 9,7 and newborn baby.Iam proficient in household chores,like general cleaning, laundry, ironing, carwashing, gardenning, cooking and taking care of their children,I am hardworking,highly organized and productive. My contract ends on May 4 2023. Thank you and God bless!', 'rosinni.jpg', 1250, 'ayon.rahman81@yahoo.com', '1234567', 'female', 'cooking, cleaning, baby sitting'),
(7, 'Godisable Jacob', 32, 'Hello, My name is Jacob and I am 32 years old. I am currently looking for some part-time work.', 'pexels-godisable-jacob-718978.jpg', 2000, 'godisable_jacob@gmail.com', '123', 'female', 'house keeping, running errands, pet sitting'),
(8, 'Stacy Leonardo', 21, 'Hello, my name is Stacy. I am looking for some household work such as cooking, cleaning etc. I have 3 years worth of experience in such fields.', 'pexels-pixabay-371160.jpg', 890, 'stacy@gmail.com', '123', 'female', 'cooking,cleaning,house keeping'),
(9, 'Julia Cvrtoon', 22, 'Assalamu Alaykum. My name is Julia and I am 22 years old. I am looking for some part-time work such as baby sitting.', 'pexels-tuấn-kiệt-jr-1468379.jpg', 3000, 'julia@gmail.com', '123', 'female', 'baby sitting'),
(10, 'Ella Scarlette', 26, 'Greetings to all the respected Employers. My name is Ella and I am looking for some house cleaning job. I am well experienced in this field.', 'pexels-tung-vu-3269411.jpg', 1380, 'ella@gmail.com', '123', 'female', 'cleaning'),
(11, 'Danang Wickaksono', 27, 'Assalamu Alaykum. My name is Danang. I am from Malaysia and I am 27 years old and currently unemployed and looking for a job.', 'pexels-danang-wicaksono-539727.jpg', 1380, 'danang@gmail.com', '123', 'female', 'cooking,baby sitting'),
(12, 'Jennifer Salvadori', 26, 'My name is jennifer. I am from Sao Paulo, Brasil. I am single mother with two kids. I am currently unemployed and looking for some part-time/full-time work.', 'pexels-bruno-salvadori-2277937.jpg', 900, 'jennifer@gmail.com', '123', 'female', 'house keeping');

-- --------------------------------------------------------

--
-- Table structure for table `employer_t`
--

CREATE TABLE `employer_t` (
  `employer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_t`
--

INSERT INTO `employer_t` (`employer_id`, `name`, `age`, `gender`, `contact`, `address`, `email`, `password`, `image_name`) VALUES
(1, 'Abdur Rahman Ayon', 21, 'male', '01993452678', 'h-3, Mohamadpur', 'ayonrahman488@yahoo.com', '1234', 'pexels-pixabay-220453.jpg'),
(2, 'Sabrina Ahmed', 29, 'female', '0199864359', 'H-3, Dhanmondi road-6', 'sabrina_ahmed@gmail.com', '1234', 'pexels-andrea-piacquadio-733872.jpg'),
(3, 'Alex Hales', 26, 'male', '0199654232', 'House-28, Bashundara R/A, Block-C', 'alex_hales@gmail.com', '1234', 'pexels-daniel-xavier-1212984.jpg'),
(4, 'Selena Pazani', 32, 'female', '0199654246', 'H-28, Melbourne, Australia', 'selena_pazani@yahoo.com', '1234', 'pexels-ali-pazani-2787341.jpg'),
(12, 'Hayley Cooper', 21, 'female', '0199654232', 'R-26, Queens, New York', 'hayley@gmail.com', '1234', 'pexels-ali-pazani-2584269.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `helper_services_t`
--

CREATE TABLE `helper_services_t` (
  `helper_id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `hs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `helper_services_t`
--

INSERT INTO `helper_services_t` (`helper_id`, `service_name`, `hs_id`) VALUES
(1, 'cooking', 1),
(1, 'cleaning', 2),
(2, 'cooking', 3),
(2, 'cleaning', 4),
(2, 'baby sitting', 5),
(7, 'house keeping', 16),
(7, 'running errands', 17),
(7, 'pet sitting', 18),
(8, 'cooking', 19),
(8, 'cleaning', 20),
(8, 'house keeping', 21),
(9, 'baby sitting', 22),
(10, 'cleaning', 23),
(11, 'cooking', 24),
(11, 'baby sitting', 25),
(12, 'house keeping', 26);

-- --------------------------------------------------------

--
-- Table structure for table `ordered_services_t`
--

CREATE TABLE `ordered_services_t` (
  `os_id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_t`
--

CREATE TABLE `order_t` (
  `order_id` int(11) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `helper_id` varchar(100) NOT NULL,
  `work_type` varchar(100) NOT NULL,
  `starting_date` varchar(100) NOT NULL,
  `starting_time` varchar(100) NOT NULL,
  `services` varchar(1000) NOT NULL,
  `total_fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_t`
--

INSERT INTO `order_t` (`order_id`, `customer_id`, `helper_id`, `work_type`, `starting_date`, `starting_time`, `services`, `total_fees`) VALUES
(1, '1', '8', 'monthly', '23-12-23', '8:20', 'cooking, cleaning', 1780),
(20, '3', '3', '', '', '', '', 0),
(21, '3', '1', 'one time', '2023-03-27', '08:01', 'cooking, cleaning', 1400),
(23, '12', '1', 'one time', '2023-03-27', '09:21', 'cooking', 700);

-- --------------------------------------------------------

--
-- Table structure for table `pending_requests_t`
--

CREATE TABLE `pending_requests_t` (
  `request_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `helper_id` int(11) NOT NULL,
  `work_type` varchar(100) NOT NULL,
  `starting_date` varchar(100) NOT NULL,
  `starting_time` varchar(100) NOT NULL,
  `services` varchar(200) NOT NULL,
  `total_fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_requests_t`
--

INSERT INTO `pending_requests_t` (`request_id`, `customer_id`, `helper_id`, `work_type`, `starting_date`, `starting_time`, `services`, `total_fees`) VALUES
(21, 1, 4, 'monthly', '2023-03-21', '18:10', 'cooking', 2000),
(22, 2, 1, 'monthly', '2023-03-29', '07:58', 'cleaning', 700),
(24, 4, 1, 'one time', '2023-04-03', '21:07', 'cooking', 700),
(26, 1, 12, 'one time', '2023-04-25', '21:24', 'house keeping', 900),
(27, 1, 7, 'one time', '2023-03-26', '08:28', 'running errands', 2000),
(28, 1, 11, 'one time', '2023-05-12', '16:21', 'cooking, baby sitting', 2760);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cancelled_requests_t`
--
ALTER TABLE `cancelled_requests_t`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `complete_service_t`
--
ALTER TABLE `complete_service_t`
  ADD PRIMARY KEY (`cs_id`);

--
-- Indexes for table `domestic_helper`
--
ALTER TABLE `domestic_helper`
  ADD PRIMARY KEY (`helper_id`);

--
-- Indexes for table `employer_t`
--
ALTER TABLE `employer_t`
  ADD PRIMARY KEY (`employer_id`);

--
-- Indexes for table `helper_services_t`
--
ALTER TABLE `helper_services_t`
  ADD PRIMARY KEY (`hs_id`);

--
-- Indexes for table `ordered_services_t`
--
ALTER TABLE `ordered_services_t`
  ADD PRIMARY KEY (`os_id`);

--
-- Indexes for table `order_t`
--
ALTER TABLE `order_t`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `pending_requests_t`
--
ALTER TABLE `pending_requests_t`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cancelled_requests_t`
--
ALTER TABLE `cancelled_requests_t`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `complete_service_t`
--
ALTER TABLE `complete_service_t`
  MODIFY `cs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `domestic_helper`
--
ALTER TABLE `domestic_helper`
  MODIFY `helper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employer_t`
--
ALTER TABLE `employer_t`
  MODIFY `employer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `helper_services_t`
--
ALTER TABLE `helper_services_t`
  MODIFY `hs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ordered_services_t`
--
ALTER TABLE `ordered_services_t`
  MODIFY `os_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_t`
--
ALTER TABLE `order_t`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pending_requests_t`
--
ALTER TABLE `pending_requests_t`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
