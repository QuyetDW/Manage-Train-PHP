-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 07:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orrsphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `orrs_admin`
--

CREATE TABLE `orrs_admin` (
  `admin_id` int(20) NOT NULL,
  `admin_fname` varchar(200) NOT NULL,
  `admin_lname` varchar(200) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_uname` varchar(200) NOT NULL,
  `admin_pwd` varchar(200) NOT NULL,
  `admin_dpic` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orrs_admin`
--

INSERT INTO `orrs_admin` (`admin_id`, `admin_fname`, `admin_lname`, `admin_email`, `admin_uname`, `admin_pwd`, `admin_dpic`) VALUES
(1, 'System ', 'Admin', 'admin@mail.com', 'Nhom3PHP', '040bd08a4290267535cd247b8ba2eca129d9fe9f', 'admin-icn.png');

-- --------------------------------------------------------

--
-- Table structure for table `orrs_employee`
--

CREATE TABLE `orrs_employee` (
  `emp_id` int(20) NOT NULL,
  `emp_fname` varchar(200) NOT NULL,
  `emp_lname` varchar(200) NOT NULL,
  `emp_nat_idno` varchar(200) NOT NULL,
  `emp_phone` varchar(200) NOT NULL,
  `emp_addr` varchar(200) NOT NULL,
  `emp_uname` varchar(200) NOT NULL,
  `emp_email` varchar(200) NOT NULL,
  `emp_pwd` varchar(200) NOT NULL,
  `emp_dpic` varchar(200) NOT NULL,
  `emp_dept` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orrs_employee`
--

INSERT INTO `orrs_employee` (`emp_id`, `emp_fname`, `emp_lname`, `emp_nat_idno`, `emp_phone`, `emp_addr`, `emp_uname`, `emp_email`, `emp_pwd`, `emp_dpic`, `emp_dept`) VALUES
(2, 'Nguyễn Văn ', 'Quyết', 'Việt Nam', '0326387050', 'Hải Dương', 'Nguyễn Quyết', 'quyetnv@mail.com', '040bd08a4290267535cd247b8ba2eca129d9fe9f', '', 'Quản lý khách hàng'),
(3, 'Nguyễn Thiện Nhật ', 'Nam', 'Việt Nam', '012121212', 'Thái Bình', 'Nhật Nam', 'namnv@mail.com', '67a74306b06d0c01624fe0d0249a570f4d093747', '', 'Quản lý tàu'),
(4, 'Nguyễn Đức ', 'Thịnh', 'Việt Nam', '023232323', 'Nghệ An', 'Đức Thịnh', 'thinhnv@mail.com', '67a74306b06d0c01624fe0d0249a570f4d093747', '', 'Quản lý page'),
(5, 'Phạm Thế ', 'Hùng', 'Việt Nam', '034343434', 'Hưng Yên', 'Thế Hùng', 'hungnv@mail.com', '040bd08a4290267535cd247b8ba2eca129d9fe9f', '', 'Quản lý doanh thu'),
(6, 'Nguyễn Quốc ', 'Khánh', 'Việt Nam', '045454545', 'Hưng Yên', 'Quốc Khánh', 'khanhnv@mail.com', '040bd08a4290267535cd247b8ba2eca129d9fe9f', '', 'Quản lý vé');

-- --------------------------------------------------------

--
-- Table structure for table `orrs_passenger`
--

CREATE TABLE `orrs_passenger` (
  `pass_id` int(20) NOT NULL,
  `pass_fname` varchar(200) NOT NULL,
  `pass_lname` varchar(200) NOT NULL,
  `pass_phone` varchar(200) NOT NULL,
  `pass_addr` varchar(200) NOT NULL,
  `pass_email` varchar(200) NOT NULL,
  `pass_pwd` varchar(200) NOT NULL,
  `pass_dpic` varchar(200) NOT NULL,
  `pass_uname` varchar(200) NOT NULL,
  `pass_bday` varchar(200) NOT NULL,
  `pass_bio` longtext NOT NULL,
  `pass_train_number` varchar(200) NOT NULL,
  `pass_train_name` varchar(200) NOT NULL,
  `pass_dep_station` varchar(200) NOT NULL,
  `pass_dep_time` varchar(200) NOT NULL,
  `pass_arr_station` varchar(200) NOT NULL,
  `pass_train_fare` varchar(200) NOT NULL,
  `pass_fare_payment_code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orrs_passenger`
--

INSERT INTO `orrs_passenger` (`pass_id`, `pass_fname`, `pass_lname`, `pass_phone`, `pass_addr`, `pass_email`, `pass_pwd`, `pass_dpic`, `pass_uname`, `pass_bday`, `pass_bio`, `pass_train_number`, `pass_train_name`, `pass_dep_station`, `pass_dep_time`, `pass_arr_station`, `pass_train_fare`, `pass_fare_payment_code`) VALUES
(26, 'Nguyễn ', 'Quyết', '012121212', 'Hải Dương', 'quyet@mail.com', '040bd08a4290267535cd247b8ba2eca129d9fe9f', 'hinh-nen-luffy-gear-5.jpg', 'QuyetDW', '', '', 'PHP_007', 'Tàu 007', 'Hải Dương', '16:00', 'Thái Bình', '85000', '123123'),
(27, 'Nguyễn', 'Nam', '023232323', 'Thái Bình', 'nam@mail.com', '040bd08a4290267535cd247b8ba2eca129d9fe9f', '', 'Nhật Nam', '', '', 'PHP_007', 'Tàu 007', 'Hải Dương', '16:00', 'Thái Bình', '85000', '123321'),
(28, 'Nguyễn', 'Khánh', '034343434', 'Hưng Yên', 'khanh@mail.com', '040bd08a4290267535cd247b8ba2eca129d9fe9f', '', 'Quốc Khánh', '', '', 'PHP_005', 'Tàu 005', 'Vĩnh Phúc', '15:00', 'Ninh Bình', '125000', '1112'),
(29, 'Nguyễn', 'Thịnh', '045454545', 'Nghệ An', 'thinh@mail.com', '040bd08a4290267535cd247b8ba2eca129d9fe9f', '', 'Đức Thịnh', '', '', 'PHP_008', 'Tàu 008', 'Bắc Ninh', '17:30', 'Quảng Ninh', '69000', '31123'),
(30, 'Phạm', 'Hùng', '056565656', 'Hưng Yên', 'hung@mail.com', '040bd08a4290267535cd247b8ba2eca129d9fe9f', '', 'Thế Hùng', '', '', 'PHP_004', 'Tàu 004', 'Hà Nội', '7:00', 'Thanh Hóa', '154000', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `orrs_passwordresets`
--

CREATE TABLE `orrs_passwordresets` (
  `pwd_id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orrs_train`
--

CREATE TABLE `orrs_train` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `route` varchar(200) NOT NULL,
  `current` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `passengers` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `fare` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orrs_train`
--

INSERT INTO `orrs_train` (`id`, `name`, `route`, `current`, `destination`, `time`, `passengers`, `number`, `fare`) VALUES
(18, 'Tàu 001', 'HaNoi - HaGiang', 'Hà Nội', 'Hà Giang', '6:30', '70', 'PHP_001', '120000'),
(19, 'Tàu 002', 'HaiDuong - HaiPhong', 'Hải Dương', 'Hải Phòng', '12:00', '69', 'PHP_002', '90000'),
(20, 'Tàu 003', 'ThaiBinh - HungYen', 'Thái Bình', 'Hưng Yên', '18:30', '55', 'PHP_003', '73000'),
(21, 'Tàu 004', 'HaNoi - ThanhHoa', 'Hà Nội', 'Thanh Hóa', '7:00', '73', 'PHP_004', '154000'),
(22, 'Tàu 005', 'VinhPhuc - NinhBinh', 'Vĩnh Phúc', 'Ninh Bình', '15:00', '88', 'PHP_005', '125000'),
(23, 'Tàu 006', 'HaNoi - NgheAn', 'Hà Nội', 'Nghệ An', '6:00', '90', 'PHP_006', '169000'),
(24, 'Tàu 007', 'HaiDuong - ThaiBinh', 'Hải Dương', 'Thái Bình', '16:00', '66', 'PHP_007', '85000'),
(25, 'Tàu 008', 'BacNinh - QuangNinh', 'Bắc Ninh', 'Quảng Ninh', '17:30', '55', 'PHP_008', '69000'),
(26, 'Tàu 009', 'HaNoi - HoChiMinh', 'Hà Nội', 'Hồ Chí Minh', '5:00', '120', 'PHP_009', '240000');

-- --------------------------------------------------------

--
-- Table structure for table `orrs_train_tickets`
--

CREATE TABLE `orrs_train_tickets` (
  `ticket_id` int(20) NOT NULL,
  `pass_name` varchar(200) NOT NULL,
  `pass_email` varchar(200) NOT NULL,
  `pass_addr` varchar(200) NOT NULL,
  `train_name` varchar(200) NOT NULL,
  `train_no` varchar(200) NOT NULL,
  `train_dep_stat` varchar(200) NOT NULL,
  `train_arr_stat` varchar(200) NOT NULL,
  `train_fare` varchar(200) NOT NULL,
  `fare_payment_code` varchar(200) NOT NULL,
  `confirmation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orrs_train_tickets`
--

INSERT INTO `orrs_train_tickets` (`ticket_id`, `pass_name`, `pass_email`, `pass_addr`, `train_name`, `train_no`, `train_dep_stat`, `train_arr_stat`, `train_fare`, `fare_payment_code`, `confirmation`) VALUES
(17, 'Nguyễn  Quyết', 'quyet@mail.com', 'Hải Dương', 'Tàu 009', 'PHP_009', 'Hà Nội', 'Hồ Chí Minh', '240000', '123123', 'Pending'),
(18, 'Nguyễn  Quyết', 'quyet@mail.com', 'Hải Dương', 'Tàu 007', 'PHP_007', 'Hải Dương', 'Thái Bình', '85000', '123123', 'Approved'),
(19, 'Nguyễn Nam', 'nam@mail.com', 'Thái Bình', 'Tàu 003', 'PHP_003', 'Thái Bình', 'Hưng Yên', '73000', '123321', 'Approved'),
(20, 'Nguyễn Nam', 'nam@mail.com', 'Thái Bình', 'Tàu 001', 'PHP_001', 'Hà Nội', 'Hà Giang', '120000', '123321', 'Approved'),
(21, 'Phạm Hùng', 'hung@mail.com', 'Hưng Yên', 'Tàu 008', 'PHP_008', 'Bắc Ninh', 'Quảng Ninh', '69000', '1111', 'Approved'),
(22, 'Nguyễn Khánh', 'khanh@mail.com', 'Hưng Yên', 'Tàu 003', 'PHP_003', 'Thái Bình', 'Hưng Yên', '73000', '1112', 'Approved'),
(23, 'Nguyễn Thịnh', 'thinh@mail.com', 'Nghệ An', 'Tàu 006', 'PHP_006', 'Hà Nội', 'Nghệ An', '169000', '31123', 'Approved'),
(24, 'Phạm Hùng', 'hung@mail.com', 'Hưng Yên', 'Tàu 004', 'PHP_004', 'Hà Nội', 'Thanh Hóa', '154000', '1111', 'Approved'),
(25, 'Nguyễn Nam', 'nam@mail.com', 'Thái Bình', 'Tàu 007', 'PHP_007', 'Hải Dương', 'Thái Bình', '85000', '123321', ''),
(26, 'Nguyễn Thịnh', 'thinh@mail.com', 'Nghệ An', 'Tàu 008', 'PHP_008', 'Bắc Ninh', 'Quảng Ninh', '69000', '31123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orrs_admin`
--
ALTER TABLE `orrs_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `orrs_employee`
--
ALTER TABLE `orrs_employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `orrs_passenger`
--
ALTER TABLE `orrs_passenger`
  ADD PRIMARY KEY (`pass_id`);

--
-- Indexes for table `orrs_passwordresets`
--
ALTER TABLE `orrs_passwordresets`
  ADD PRIMARY KEY (`pwd_id`);

--
-- Indexes for table `orrs_train`
--
ALTER TABLE `orrs_train`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orrs_train_tickets`
--
ALTER TABLE `orrs_train_tickets`
  ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orrs_admin`
--
ALTER TABLE `orrs_admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orrs_employee`
--
ALTER TABLE `orrs_employee`
  MODIFY `emp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orrs_passenger`
--
ALTER TABLE `orrs_passenger`
  MODIFY `pass_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orrs_passwordresets`
--
ALTER TABLE `orrs_passwordresets`
  MODIFY `pwd_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orrs_train`
--
ALTER TABLE `orrs_train`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orrs_train_tickets`
--
ALTER TABLE `orrs_train_tickets`
  MODIFY `ticket_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
