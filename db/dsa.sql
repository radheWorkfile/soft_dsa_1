-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 12:17 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `agent_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `mobile_no` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `aadhar_card_no` varchar(100) NOT NULL,
  `aadhar_image` varchar(200) NOT NULL,
  `pan_no` varchar(100) NOT NULL,
  `pan_image` varchar(200) NOT NULL,
  `commission_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `account_no` varchar(100) NOT NULL,
  `ifsc_code` varchar(100) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `nominee_name` varchar(100) NOT NULL,
  `nominee_number` varchar(100) NOT NULL,
  `created_by_user_type_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `agent_id`, `name`, `dob`, `address`, `mobile_no`, `email`, `aadhar_card_no`, `aadhar_image`, `pan_no`, `pan_image`, `commission_type`, `password`, `account_no`, `ifsc_code`, `branch_name`, `bank_name`, `nominee_name`, `nominee_number`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(40, '172155', 'RAJU KUMAR', '1990-02-02', 'BHAGWAT NAGAR PATNA', '98745465452', 'AGENT@GMAIL.COM', '987845646541', 'http://prsloancenter.com/uploads/agent_document/download_(3).jpg', 'DFDF34345GH', 'http://prsloancenter.com/uploads/agent_document/download_(4)2.jpg', '2', '123456', '8956456465654', 'SBIN0006445', 'KANKARBAG, PATNA', 'STATE BANK OF INDIA', 'AGENT BINOD', '7984567684', 1, '2024-01-03', '2024-01-03 05:25:32', 1),
(41, '988939', 'RAJIV KUMAR', '2000-02-02', 'BHAGWAT NAGAR', '7896132456', 'AGENT1@GMAIL.COM', '79845645465465', 'http://prsloancenter.com/uploads/agent_document/aadhar_demo.jpeg', 'DFDF34345GH', 'http://prsloancenter.com/uploads/agent_document/download_(3)1.jpg', '1,2', '123456', '7896316345645', 'SBIN0006445', 'KANKARBAG, PATNA', 'STATE BANK OF INDIA', 'AGENT BINOD', '7896132345345', 1, '2024-01-03', '2024-01-03 05:28:04', 1),
(42, '403404', 'RATAN KUMAR', '1990-04-04', 'BHAGWAT NAGAR', '9886454545', 'AGENT2@GMAIL.COM', '984321356465465', 'http://prsloancenter.com/uploads/agent_document/download_(4)3.jpg', 'DFDF34345GH', 'http://prsloancenter.com/uploads/agent_document/DTYER6UU.jpg', '1', '123456', '78654644545', 'CBIN00058859612', 'KANKARBAG, PATNA', 'CENTRAL BANK OF INDIA', 'AGENT BINOD', '874345453465', 1, '2024-01-03', '2024-01-03 05:30:23', 1),
(43, '609820', 'arjun', '2024-03-20', 'BHAGWAT NAGAR', '9876541356498', 'arjun@gmail.com', '987964865465', 'https://test.camwel.com/dsa/uploads/agent_document/aadhar_card.png', 'DFDF34345GH', 'https://test.camwel.com/dsa/uploads/agent_document/aadhar_demo.jpeg', '1,2', '123456', '85465111111121', 'SBIN0006445', 'KANKARBAG, PATNA', 'STATE BANK OF INDIA', 'AGENT BINOD', '9874654165465', 1, '2024-03-21', '2024-03-21 07:16:35', 1),
(44, '262366', 'sonu kr', '2024-05-01', 'Rajgir  Nalanda', '1234567891', 'sonu@gmail.com', '121212121212', 'http://localhost/dsa/uploads/agent_document/images.JPG', 'sssss1111d', 'http://localhost/dsa/uploads/agent_document/images1.JPG', '1', '1212121212', '11111111111111', '11111', '111111', '111111', '111111', '213131133', 1, '2024-05-27', '2024-05-27 10:48:16', 1),
(45, '738774', 'dfsf', '2024-05-02', 'Rajgir Nalanda', '12321312312', 'rk@gmail.com', '12312312312', '', 'AAAAA1111A', '', '2', '3123123213', '312312', '312312321', '312312312312', 'fffffffffffffff', '111111', '312312312', 43, '2024-05-30', '2024-05-30 05:21:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `assign_menu`
--

CREATE TABLE `assign_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(111) NOT NULL COMMENT '1-ageMan, 2-empMan, 3-cummPayMan, 4-commMan',
  `mem_id` int(11) NOT NULL,
  `department_type` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_by_user_type_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_menu`
--

INSERT INTO `assign_menu` (`id`, `menu`, `mem_id`, `department_type`, `status`, `created_by_user_type_id`, `created_at`, `updated_at`) VALUES
(1, '4', 46, 3, 1, 0, 2024, '2024-06-04 09:46:51'),
(2, '4', 63, 2, 1, 0, 2024, '2024-06-04 10:03:59'),
(3, '3', 68, 2, 1, 0, 2024, '2024-06-04 10:07:34'),
(4, '3', 69, 2, 1, 0, 2024, '2024-06-04 10:07:34'),
(5, '3', 63, 2, 1, 0, 2024, '2024-06-04 10:07:46'),
(6, '2', 63, 2, 1, 0, 2024, '2024-06-04 10:07:55'),
(7, '1', 63, 2, 1, 0, 2024, '2024-06-04 10:08:04'),
(8, '4', 67, 3, 1, 0, 2024, '2024-06-04 10:11:17'),
(9, '3', 67, 3, 1, 0, 2024, '2024-06-04 10:11:30'),
(10, '2', 67, 3, 1, 0, 2024, '2024-06-04 10:11:37'),
(11, '1', 67, 3, 1, 0, 2024, '2024-06-04 10:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `ifsc_code` varchar(100) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `created_by_user_type_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`id`, `bank_name`, `ifsc_code`, `branch_name`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(7, 'STATE BANK OF INDIA', 'SBIN0006445', 'KANKARBAG, PATNA', 1, '2024-01-03', '2024-01-04 16:53:14', 0),
(8, 'CENTRAL BANK OF INDIA', 'CBIN00058859612', 'KANKARBAG, PATNA', 1, '2024-01-03', '2024-01-04 16:53:05', 0),
(9, 'IDFC BANK', 'IDFC012245612', 'KANKARBAG, PATNA', 1, '2024-01-03', '2024-01-03 05:07:19', 1),
(10, 'HDFC BANK', 'HDFC0115155', 'NE', 1, '2024-01-03', '2024-01-04 16:53:08', 1),
(11, 'CHOLA MANDLAM', '555555', 'GGGG', 1, '2024-01-04', '2024-01-04 16:53:38', 1),
(12, 'HERO FINCORP', 'HERO', 'NE', 1, '2024-01-04', '2024-01-04 16:54:07', 1),
(13, 'STATE BANK OF INDIA', 'SBIN0006445', 'KANKARBAG, PATNA', 1, '2024-03-21', '2024-03-21 07:10:42', 1),
(14, 'PUNJAB NATIONAL BANK', 'UTIB0001300', 'PANSKURA', 1, '2024-03-23', '2024-03-23 13:36:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `business_type`
--

CREATE TABLE `business_type` (
  `id` int(11) NOT NULL,
  `business_type_name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `created_by_user_type_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_type`
--

INSERT INTO `business_type` (`id`, `business_type_name`, `description`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(7, 'CAR LOAN', 'LOAN PROVIDE BY CONNECECTING BANK FOR CAR LOAN', 1, '2024-01-03', '2024-01-03 05:13:17', 1),
(8, 'MRTGAGE LOAN', 'LOAN PROVIDE VIA BANK AGAINST HIS MOTGAGE.', 1, '2024-01-03', '2024-01-03 05:14:53', 1),
(9, 'BUSINESS LOAN', 'LOAN PROVIDE BY BANK FOR BUSINESS ONLY.', 1, '2024-01-03', '2024-01-03 05:15:45', 1),
(10, 'CREDIT CARD', 'ALL BANK CREDIT CARD SELL.', 1, '2024-01-03', '2024-01-03 05:18:02', 1),
(11, 'HEALTH INSURANCE', 'HEALTH INSURANCE PROVIDE FROM DIFFERENT TYPE OF INSURER', 1, '2024-01-03', '2024-01-03 05:19:42', 1),
(12, 'Life insurance', '', 1, '2024-01-03', '2024-01-03 05:20:06', 1),
(13, 'CAR RESELLING', '', 1, '2024-01-03', '2024-01-03 05:20:17', 1),
(14, 'REAL STATE BUSINESS', 'LAND SELL AND PURCHASE BUSINESS.', 1, '2024-01-03', '2024-01-03 05:21:03', 1),
(15, 'REAL STATE BUSINESS', 'REAL STATE BUSINESS', 1, '2024-03-20', '2024-03-20 14:14:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `commission_category`
--

CREATE TABLE `commission_category` (
  `id` int(11) NOT NULL,
  `loan_type` varchar(50) NOT NULL,
  `commission_type` varchar(20) NOT NULL COMMENT '1.on file\r\n2.on approve',
  `commission` varchar(20) NOT NULL COMMENT '1.in percentage\r\n2.in amount',
  `commission_amount` varchar(100) NOT NULL,
  `commission_percentage` varchar(50) NOT NULL,
  `created_by_user_type_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commission_category`
--

INSERT INTO `commission_category` (`id`, `loan_type`, `commission_type`, `commission`, `commission_amount`, `commission_percentage`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(17, '10', '2', '1', '', '3', 1, '2024-01-03', '2024-01-03 05:16:10', 1),
(18, '10', '1', '', '500', '', 1, '2024-01-03', '2024-01-03 05:16:30', 1),
(19, '11', '2', '1', '', '1', 1, '2024-01-03', '2024-01-03 05:16:49', 1),
(20, '11', '1', '', '500', '', 1, '2024-01-03', '2024-01-03 05:17:01', 1),
(21, '12', '2', '1', '', '1', 1, '2024-01-03', '2024-01-03 05:17:15', 1),
(22, '12', '1', '', '200', '', 1, '2024-01-03', '2024-01-03 05:17:27', 1),
(23, '13', '2', '1', '', '1.5', 1, '2024-01-08', '2024-01-08 11:00:12', 1),
(24, '15', '2', '1', '', '10', 1, '2024-03-14', '2024-03-14 11:38:17', 1),
(25, '14', '1', '', '100', '', 1, '2024-03-14', '2024-03-14 11:38:50', 1),
(26, '12', '1', '', '200', '', 1, '2024-03-15', '2024-03-15 06:43:09', 1),
(27, '13', '2', '1', '', '3', 1, '2024-03-15', '2024-03-15 06:43:23', 1),
(28, '18', '2', '1', '', '2', 1, '2024-03-21', '2024-03-21 07:12:45', 1),
(29, '18', '1', '', '200', '', 1, '2024-03-21', '2024-03-21 07:13:23', 1),
(30, '19', '1', '', '150', '', 1, '2024-03-29', '2024-03-29 07:45:09', 1),
(31, '19', '2', '1', '', '3', 1, '2024-03-29', '2024-03-29 07:45:31', 1),
(32, '20', '2', '1', '', '2', 1, '2024-04-06', '2024-04-06 09:51:25', 1),
(33, '21', '2', '1', '', '3', 1, '2024-04-17', '2024-04-17 06:21:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `commission_earning`
--

CREATE TABLE `commission_earning` (
  `id` int(11) NOT NULL,
  `agent_name` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `aadhar_card_no` varchar(100) NOT NULL,
  `loan_type` varchar(100) NOT NULL,
  `commission_type` varchar(100) NOT NULL COMMENT '1.on file\r\n2.on approved\r\n',
  `commission` varchar(100) NOT NULL COMMENT '1.in percentage\r\n2.in amount',
  `commission_amount` varchar(100) NOT NULL,
  `commission_percentage` varchar(20) NOT NULL,
  `loan_amount` varchar(100) NOT NULL,
  `total_commission_amount` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL COMMENT '1.un_paid\r\n2.paid',
  `created_by_user_type_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commission_earning`
--

INSERT INTO `commission_earning` (`id`, `agent_name`, `customer_name`, `aadhar_card_no`, `loan_type`, `commission_type`, `commission`, `commission_amount`, `commission_percentage`, `loan_amount`, `total_commission_amount`, `payment_status`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(187, '40', '35', '798465454655', '10', '2', '1', '', '3', '500000', '15000', '2', 1, '2024-01-03', '2024-01-03 06:28:03', 1),
(188, '42', '34', '987415654653', '11', '2', '1', '', '1', '500000', '5000', '', 1, '2024-01-03', '2024-01-03 06:26:51', 1),
(189, '40', '44', '65746556565465466654', '20', '2', '1', '', '2', '300000', '6000', '', 1, '2024-04-06', '2024-04-06 10:19:21', 1),
(190, '40', '42', '98746546546546', '19', '2', '1', '', '3', '800000', '24000', '2', 1, '2024-04-06', '2024-04-17 06:24:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `commission_payment_details`
--

CREATE TABLE `commission_payment_details` (
  `id` int(11) NOT NULL,
  `commission_earning_id` varchar(100) NOT NULL,
  `agent_id` varchar(100) NOT NULL,
  `total_payble_amount` varchar(100) NOT NULL,
  `paid_amount` varchar(200) NOT NULL,
  `rest_amount` varchar(200) NOT NULL,
  `mop` varchar(100) NOT NULL,
  `acc_no` varchar(100) NOT NULL,
  `cash_received_by` varchar(100) NOT NULL,
  `pay_date` varchar(100) NOT NULL,
  `pay_remarks` longtext NOT NULL,
  `recipet` varchar(300) NOT NULL,
  `created_by_user_type_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1.un_paid\r\n2.paid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commission_payment_details`
--

INSERT INTO `commission_payment_details` (`id`, `commission_earning_id`, `agent_id`, `total_payble_amount`, `paid_amount`, `rest_amount`, `mop`, `acc_no`, `cash_received_by`, `pay_date`, `pay_remarks`, `recipet`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(6, '187', '40', '15000', '10000', '5000', '3', '', 'RAJU KUMAR', '2024-01-03', 'DFGHDFGDF', 'uploads/recipet/download_(2).png', 1, '2024-01-03', '2024-01-03 06:20:24', 2),
(7, '187', '40', '15000', '5000', '0', '1', '1', '', '2024-01-03', 'VBNVNV', 'uploads/recipet/download_(3).jpg', 1, '2024-01-03', '2024-01-03 06:28:03', 2),
(8, '188', '42', '5000', '1000', '4000', '3', '', 'Self', '2024-03-20', 'Ok', '', 1, '2024-03-20', '2024-03-20 14:22:37', 2),
(9, '188', '42', '5000', '2000', '2000', '3', '', 'RAJU KUMAR', '2024-03-29', 'gdfhgfjh', 'uploads/recipet/download_(2).png', 1, '2024-03-29', '2024-03-29 07:50:49', 2),
(10, '188', '42', '5000', '2000', '2000', '3', '', 'RAJU KUMAR', '2024-04-02', 'hjgfhgfgh', '', 1, '2024-04-02', '2024-04-02 11:42:55', 2),
(11, '190', '40', '24000', '24000', '0', '3', '', 'RAJU KUMAR', '2024-04-17', 'hfgjh', '', 1, '2024-04-17', '2024-04-17 06:24:53', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` longtext NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `aadhar_card_no` varchar(50) NOT NULL,
  `pan_no` varchar(50) NOT NULL,
  `identifier_name` varchar(100) NOT NULL,
  `identifier_number` varchar(14) NOT NULL,
  `identifier_email` varchar(50) NOT NULL,
  `assign_employee` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `account_no` varchar(20) NOT NULL,
  `ifsc_code` varchar(20) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `loan_amount` varchar(200) NOT NULL,
  `customer_type` varchar(20) NOT NULL,
  `collateral` varchar(20) NOT NULL,
  `loan_type` varchar(20) NOT NULL,
  `assigned_bank` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `document_status` varchar(100) NOT NULL,
  `next_follow_up_feedback` longtext NOT NULL,
  `next_follow_date` varchar(100) NOT NULL,
  `created_by_user_type_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_id`, `name`, `dob`, `address`, `mobile_no`, `email`, `aadhar_card_no`, `pan_no`, `identifier_name`, `identifier_number`, `identifier_email`, `assign_employee`, `password`, `account_no`, `ifsc_code`, `branch_name`, `bank_name`, `loan_amount`, `customer_type`, `collateral`, `loan_type`, `assigned_bank`, `description`, `document_status`, `next_follow_up_feedback`, `next_follow_date`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(34, 940666, 'AMIT KUMAR', '1996-06-06', 'BHAGWAT NAGAR', '987654165465', 'CUSTOMER@GMAIL.COM', '987415654653', 'DFDF34345GH', '42', '9886454545', 'AGENT2@GMAIL.COM', '20', '123456', '9876547897645', 'IDFC012245612', 'KANKARBAG, PATNA', 'IDFC BANK', '500000', '1', '', '11', '', '', '', '', '', 1, '2024-01-03', '2024-01-03 05:46:32', 1),
(35, 903845, 'AJAY KUMAR', '2000-02-02', 'BHAGWAT NAGAR', '78963534564', 'ajay@gmail.com', '798465454655', 'DFDF34345GH', '40', '', '', '20', '123456', '798465132165465', 'CBIN00058859612', 'KANKARBAG, PATNA', 'CENTRAL BANK OF INDIA', '500000', '2', '10', '10', '', 'OK', '2', '', '', 43, '2024-01-03', '2024-01-03 08:07:29', 1),
(36, 518325, 'arjun', '2000-02-22', 'BHAGWAT NAGAR', '8945634564', 'arjun@gmail.com', '9854564654465', 'DFDF34345GH', '41', '7896132456', 'AGENT1@GMAIL.COM', '19', '123456', '9874654651132', 'IDFC012245612', 'KANKARBAG, PATNA', 'PUNJAB NATIONAL BANK', '500000', '1', '', '11', '', '', '', '', '', 1, '2024-01-03', '2024-01-03 07:24:45', 1),
(37, 139998, 'RANJAN', '2000-02-22', 'BHAGWAT NAGAR', '789654634545', 'RANJAN@GMAIL.COM', '9879864654', 'DFDF34345GH', '40', '', '', '19', '123456', '7856676576', 'IDFC012245612', 'KANKARBAG, PATNA', 'IDFC BANK', '1000000', '1', '', '11', '', 'JHKGHJF', '2', '', '2024-01-04', 43, '2024-01-03', '2024-01-03 08:07:33', 1),
(38, 781254, 'SUMIT SINHA', '2000-02-02', 'BHAGWAT NAGAR', '9843214563', 'SUMIT@GMAIL.COM', '798456146545', 'DFDF34345GH', '40', '', '', '20', '123456', '787985466445', 'CBIN00058859612', 'KANKARBAG, PATNA', 'CENTRAL BANK OF INDIA', '200000', '2', '', '10', '', 'FKHKJH', '2', '', '', 43, '2024-01-03', '2024-01-03 08:07:26', 1),
(39, 540428, 'SAGAR', '1992-02-02', 'FGHDFGD', '7898564564', 'SAGAR@GMAIL.COM', '78965356345', 'FGHR654634GF', '42', '9886454545', 'AGENT2@GMAIL.COM', '19', '123456', '78945645654', 'FDGHER76754656', 'PATNA', 'SBI', '500000', '1', '', '11', '', 'GHJHFGJ', '1', '', '', 46, '2024-01-03', '2024-01-03 07:50:39', 1),
(40, 436243, 'puneet nigam', '1983-09-15', 'hbdfhgwhefigw`', '8765455421', 'puneet.word99@gmail.com', '1212121212121', 'aeopn', '42', '9886454545', 'AGENT2@GMAIL.COM', '20', '123456', '', '', '', '', '2500000', '2', '10', '15', '', '', '', '', '', 1, '2024-03-20', '2024-03-20 10:16:40', 1),
(41, 103251, 'ghdfgghf', '2000-01-01', 'iuojuyuiopy', '7984654654646', 'ADITYAYA117@GMAIL.COM', '9874651646516', 'ouihiou54', '43', '9876541356498', 'arjun@gmail.com', '20', '123456', '7984354132435', 'kl;\'654654', 'gkugilhiu', 'sbi', '500000', '1', '', '11', '', '', '', '', '', 1, '2024-03-21', '2024-03-21 07:31:31', 1),
(42, 445879, 'ajit kumar', '2000-02-02', 'BHAGWAT NAGAR', '987654566358', 'ajay@gmail.com', '98746546546546', 'DFDF34345GH', '40', '', '', '', '123456', '98765465465465', 'SBIN0006445', 'KANKARBAG, PATNA', 'STATE BANK OF INDIA', '800000', '1', '', '19', '', 'hgcvbhm', '2', '', '', 43, '2024-03-29', '2024-03-29 07:59:03', 1),
(43, 535400, 'Nikhil', '2024-04-04', 'Patna', '9887546532', 'nik@g.com', '654545454564654', 'ds3546542566', '43', '9876541356498', 'arjun@gmail.com', '21', '852369', '', '', '', '', '50000', '', '', '19', '', '', '', '', '', 1, '2024-04-04', '2024-04-04 10:07:12', 1),
(44, 106868, 'ram', '2000-04-06', 'fjjh,k', '987654654654', 'admin123@gmail.com', '65746556565465466654', 'GFDFG76545H', '40', '98745465452', 'AGENT@GMAIL.COM', '19', '123456', '7846546546545', 'jhfggg78988888888888', 'patna', 'sbi', '300000', '2', '', '20', '', 'alll doc ok and verified', '2', '', '', 46, '2024-04-06', '2024-04-06 10:02:34', 1),
(45, 143675, 'Rk ', '2024-05-01', 'Rajgir Nalanda', '1111111111', 'rk@gmail.com', '323232323232', '213133213123312', '43', '', '', '', '1231312231231', '123123131312', '31231223', 'ggdfgfdgdf', 'fdfdfdfds', '100000', '1', '13', '21', '', 'dsffds', '1', '', '', 57, '2024-05-25', '2024-05-25 04:56:52', 1),
(46, 609846, 'sonu kr 2', '2024-05-01', 'Rajgir Nalanda', '111111111', 'sonu2@g.com', '111111111111', 'AAAAA1111A', '44', '', '', '', '11111', '113123123123', 'DSAE12E12', '3312321123', 'QWEWQEQW', '100000', '1', '13', '20', '', 'WEEWRW', '1', '', '', 63, '2024-05-27', '2024-05-27 10:53:15', 1),
(47, 595626, 'ashish kr', '2024-05-04', 'Rajgir Nalanda', '111111111', 'ashish@g.com', '1212121212', 'aaaaa1111s', '44', '1234567891', 'sonu@gmail.com', '22', '12345', '312312312312', '12331312', '32131231', '312312321312', '100000', '2', '13', '21', '', '', '', '', '', 1, '2024-05-27', '2024-05-27 11:47:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_document`
--

CREATE TABLE `customer_document` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `customer_type` varchar(50) NOT NULL,
  `customer_passport_size_photo` varchar(100) NOT NULL,
  `customer_identity_proof` varchar(100) NOT NULL,
  `customer_address_proof` varchar(100) NOT NULL,
  `customer_bank_statement` varchar(100) NOT NULL,
  `customer_salary_slip` varchar(100) NOT NULL,
  `customer_proof_of_business` varchar(100) NOT NULL,
  `customer_business_profile` varchar(100) NOT NULL,
  `customer_itr` varchar(100) NOT NULL,
  `customer_profit_loss_statement` varchar(100) NOT NULL,
  `customer_balance_sheet` varchar(100) NOT NULL,
  `collateral_document` varchar(100) NOT NULL,
  `loan_identity_proof` varchar(100) NOT NULL,
  `loan_address_proof` varchar(100) NOT NULL,
  `loan_passport_size_photo` varchar(100) NOT NULL,
  `loan_signature` varchar(100) NOT NULL,
  `loan_age_proof` varchar(100) NOT NULL,
  `loan_pan_card` varchar(100) NOT NULL,
  `loan_aadhaar_card` varchar(100) NOT NULL,
  `loan_voter_id` varchar(100) NOT NULL,
  `loan_passport` varchar(100) NOT NULL,
  `loan_driving_license` varchar(100) NOT NULL,
  `loan_bank_statement` varchar(100) NOT NULL,
  `loan_salary_slip` varchar(100) NOT NULL,
  `loan_work_in_hand_copies` varchar(100) NOT NULL,
  `loan_performa_invoice` varchar(100) NOT NULL,
  `loan_property_document` varchar(100) NOT NULL,
  `loan_academic_document` varchar(100) NOT NULL,
  `document_status` varchar(100) NOT NULL,
  `created_by_user_type_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1.pending\r\n2.approved\r\n3.reject',
  `reason` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_document`
--

INSERT INTO `customer_document` (`id`, `customer_id`, `customer_type`, `customer_passport_size_photo`, `customer_identity_proof`, `customer_address_proof`, `customer_bank_statement`, `customer_salary_slip`, `customer_proof_of_business`, `customer_business_profile`, `customer_itr`, `customer_profit_loss_statement`, `customer_balance_sheet`, `collateral_document`, `loan_identity_proof`, `loan_address_proof`, `loan_passport_size_photo`, `loan_signature`, `loan_age_proof`, `loan_pan_card`, `loan_aadhaar_card`, `loan_voter_id`, `loan_passport`, `loan_driving_license`, `loan_bank_statement`, `loan_salary_slip`, `loan_work_in_hand_copies`, `loan_performa_invoice`, `loan_property_document`, `loan_academic_document`, `document_status`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`, `reason`) VALUES
(26, '940666', '1', 'http://prsloancenter.com/uploads/customer_all_document/download_(1).jpg', 'http://prsloancenter.com/uploads/customer_all_document/download_(3).jpg', 'http://prsloancenter.com/uploads/customer_all_document/download_(3)1.jpg', 'http://prsloancenter.com/uploads/customer_all_document/aadhar_card1.png', 'http://prsloancenter.com/uploads/customer_all_document/download_(4).jpg', '', '', '', '', '', '', 'http://prsloancenter.com/uploads/customer_all_document/download_(3)2.jpg', 'http://prsloancenter.com/uploads/customer_all_document/download_(3)3.jpg', 'http://prsloancenter.com/uploads/customer_all_document/download_(1)1.jpg', 'http://prsloancenter.com/uploads/customer_all_document/download_(2).png', 'http://prsloancenter.com/uploads/customer_all_document/download_(3)4.jpg', 'http://prsloancenter.com/uploads/customer_all_document/download_(4)1.jpg', 'http://prsloancenter.com/uploads/customer_all_document/download_(3)5.jpg', 'http://prsloancenter.com/uploads/customer_all_document/download_(3)6.jpg', '', '', '', '', '', '', '', '', '1', 1, '2024-01-03', '2024-01-03 10:56:21', 2, 'All Document Varified'),
(27, '903845', '2', 'http://prsloancenter.com/uploads/customer_all_document/ftgfadgsdg.jpg', 'http://prsloancenter.com/uploads/customer_all_document/download_(4)2.jpg', 'http://prsloancenter.com/uploads/customer_all_document/download_(4)3.jpg', 'http://prsloancenter.com/uploads/customer_all_document/math.JPG', '', 'http://prsloancenter.com/uploads/customer_all_document/download_(12).jpg', 'http://prsloancenter.com/uploads/customer_all_document/download_(11).jpg', 'http://prsloancenter.com/uploads/customer_all_document/download_(4)4.jpg', '', 'http://prsloancenter.com/uploads/customer_all_document/download_(3)7.jpg', 'http://prsloancenter.com/uploads/customer_all_document/math1.JPG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', 43, '2024-01-03', '2024-01-03 06:15:43', 2, 'All Document Varified'),
(28, '518325', '1', 'http://prsloancenter.com/uploads/customer_all_document/images_(23).jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2024-01-03', '2024-01-03 07:24:45', 1, ''),
(29, '139998', '1', 'http://prsloancenter.com/uploads/customer_all_document/images_(1).jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 43, '2024-01-03', '2024-03-20 14:26:07', 3, 'Document issue'),
(30, '781254', '2', 'http://prsloancenter.com/uploads/customer_all_document/images_(2).jpg', 'http://prsloancenter.com/uploads/customer_all_document/images_(6).jpg', 'http://prsloancenter.com/uploads/customer_all_document/download_(3).jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', 43, '2024-01-03', '2024-01-03 07:41:42', 1, ''),
(31, '540428', '1', '', '', '', '', '', '', '', '', '', '', 'http://prsloancenter.com/uploads/customer_all_document/download_(11).jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 46, '2024-01-03', '2024-01-03 07:50:39', 1, ''),
(32, '436243', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2024-03-20', '2024-03-20 10:16:40', 1, ''),
(33, '103251', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2024-03-21', '2024-03-21 07:31:31', 1, ''),
(34, '445879', '1', 'https://test.camwel.com/dsa/uploads/customer_all_document/images_(1)1.jpg', '', 'https://test.camwel.com/dsa/uploads/customer_all_document/aadhar_card1.png', 'https://test.camwel.com/dsa/uploads/customer_all_document/GHJDGJFGJG.JPG', 'https://test.camwel.com/dsa/uploads/customer_all_document/Capture2.PNG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', 43, '2024-03-29', '2024-03-29 08:01:57', 2, 'All Document Varified'),
(35, '535400', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2024-04-04', '2024-04-04 10:07:12', 1, ''),
(36, '106868', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', 46, '2024-04-06', '2024-04-06 10:05:07', 2, 'All Document Varified'),
(37, '143675', '1', 'http://localhost/dsa/uploads/customer_all_document/fdsfdsf.png', 'http://localhost/dsa/uploads/customer_all_document/fdsfdsf1.png', 'http://localhost/dsa/uploads/customer_all_document/fdsfdsf2.png', 'http://localhost/dsa/uploads/customer_all_document/fdsfdsf3.png', 'http://localhost/dsa/uploads/customer_all_document/fdsfdsf4.png', '', '', '', '', '', 'http://localhost/dsa/uploads/customer_all_document/fdsfdsf5.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 57, '2024-05-25', '2024-05-25 04:56:52', 1, ''),
(38, '609846', '1', 'http://localhost/dsa/uploads/customer_all_document/images.JPG', 'http://localhost/dsa/uploads/customer_all_document/images1.JPG', '', 'http://localhost/dsa/uploads/customer_all_document/images2.JPG', 'http://localhost/dsa/uploads/customer_all_document/images3.JPG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 63, '2024-05-27', '2024-05-27 10:53:15', 1, ''),
(39, '595626', '2', 'http://localhost/dsa/uploads/customer_all_document/images4.JPG', 'http://localhost/dsa/uploads/customer_all_document/images5.JPG', 'http://localhost/dsa/uploads/customer_all_document/images6.JPG', 'http://localhost/dsa/uploads/customer_all_document/images7.JPG', '', 'http://localhost/dsa/uploads/customer_all_document/images8.JPG', 'http://localhost/dsa/uploads/customer_all_document/images9.JPG', 'http://localhost/dsa/uploads/customer_all_document/images10.JPG', 'http://localhost/dsa/uploads/customer_all_document/images11.JPG', 'http://localhost/dsa/uploads/customer_all_document/images12.JPG', '', 'http://localhost/dsa/uploads/customer_all_document/images13.JPG', 'http://localhost/dsa/uploads/customer_all_document/images14.JPG', 'http://localhost/dsa/uploads/customer_all_document/images15.JPG', 'http://localhost/dsa/uploads/customer_all_document/images16.JPG', '', 'http://localhost/dsa/uploads/customer_all_document/images17.JPG', 'http://localhost/dsa/uploads/customer_all_document/images18.JPG', 'http://localhost/dsa/uploads/customer_all_document/images19.JPG', '', '', 'http://localhost/dsa/uploads/customer_all_document/images20.JPG', 'http://localhost/dsa/uploads/customer_all_document/images21.JPG', '', '', '', '', '', 1, '2024-05-27', '2024-05-27 11:44:04', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_by_user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `designation` varchar(111) NOT NULL,
  `description` varchar(111) NOT NULL,
  `created_at` varchar(11) NOT NULL,
  `created_by_user_type_id` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `designation`, `description`, `created_at`, `created_by_user_type_id`, `status`, `update_at`) VALUES
(5, 'Software Engineer', 'Software engineering is not just about writing code', '2024-05-28', 0, 1, '2024-05-28 05:01:15'),
(7, 'Marketing Manager', 'A Marketing Manager is a crucial role within a company', '2024-05-28', 0, 1, '2024-05-28 06:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `mobile_no` varchar(13) NOT NULL,
  `email` varchar(25) NOT NULL,
  `aadhar_card_no` int(11) NOT NULL,
  `aadhar_image` varchar(100) NOT NULL,
  `pan_no` varchar(100) NOT NULL,
  `designation` varchar(111) NOT NULL,
  `pan_image` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `account_no` varchar(100) NOT NULL,
  `ifsc_code` varchar(100) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `created_by_user_type_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_id`, `name`, `dob`, `address`, `mobile_no`, `email`, `aadhar_card_no`, `aadhar_image`, `pan_no`, `designation`, `pan_image`, `password`, `account_no`, `ifsc_code`, `branch_name`, `bank_name`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(19, '743627', 'EMPLOYEE', '1999-05-05', 'BHAGWAT NAGAR', '9874564654', 'EMP@GMAIL.COM', 2147483647, 'http://prsloancenter.com/uploads/employee_document/DTYER6UU.jpg', 'DFDF34345GH', '', 'http://prsloancenter.com/uploads/employee_document/download_(3).jpg', '123456', '57546586789567654', 'IDFC012245612', 'KANKARBAG, PATNA', 'IDFC BANK', 1, '2024-01-03', '2024-01-03 05:32:23', 1),
(20, '367162', 'EMPLOYEE2', '1999-09-09', 'BHAGWAT NAGAR', '987946546465', 'EMP2@GMAIL.COM', 2147483647, 'http://prsloancenter.com/uploads/employee_document/download_(12).jpg', 'DFDF34345GH', '', 'http://prsloancenter.com/uploads/employee_document/download_(3)1.jpg', '123456', '6756634534', 'CBIN00058859612', 'KANKARBAG, PATNA', 'CENTRAL BANK OF INDIA', 1, '2024-01-03', '2024-01-03 05:33:57', 1),
(21, '975648', 'Rasidul Alam', '2000-12-20', 'VILL-BHOKOT PARA,DARRANG', '9401409056', 'rasidulalam786s@gmail.com', 2147483647, '', 'DEQPA0897N', '', '', 'Assam@123', '', '', '', '', 1, '2024-01-04', '2024-01-04 06:10:47', 1),
(22, '969484', 'monu kr', '2024-05-02', 'Rajgir Nalanda', '1111111111', 'monu@g.com', 111111111, 'http://localhost/dsa/uploads/employee_document/images.JPG', 'AAAAA1111A', '', 'http://localhost/dsa/uploads/employee_document/images1.JPG', 'monu@g.com', '111111111', '11111111111', 'ggdfgfdgdf', 'QWEWQEQW', 1, '2024-05-27', '2024-05-27 11:40:46', 1),
(23, '708054', 'Radhe Radhe ', '2024-05-01', 'Rajgir Nalanda', '1111111111', 'radhe@gmail.com', 2147483647, 'http://localhost/dsa/uploads/employee_document/gfdf.JPG', 'AAAAA1111A', '7', 'http://localhost/dsa/uploads/employee_document/gfdf1.JPG', '11111', '1111111111111', '1111', 'Rajgir ', 'Canara Bank', 1, '2024-05-28', '2024-05-30 05:38:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loan_type`
--

CREATE TABLE `loan_type` (
  `id` int(11) NOT NULL,
  `loan_type_name` varchar(100) NOT NULL,
  `document` varchar(50) NOT NULL,
  `created_by_user_type_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_type`
--

INSERT INTO `loan_type` (`id`, `loan_type_name`, `document`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(10, 'BUSINESS LOAN', '1,2,3,4,5,6,7,8,9,11,12,13,14,15', 1, '2024-01-03', '2024-01-03 05:08:40', 1),
(11, 'CAR LOAN', '1,2,3,4,5,6,7,8,9,10,11,12,13,15', 1, '2024-01-03', '2024-01-03 05:09:11', 1),
(12, 'MORTGAGE LOAN', '1,2,3,4,5,6,7,8,9,11,12,14,15', 1, '2024-01-03', '2024-01-03 05:10:38', 1),
(13, 'Personal Loan', '1,2,3,6,7,11,12', 1, '2024-01-04', '2024-01-04 16:49:16', 1),
(14, 'CC LOAN', '1,2,3,6,7,11', 1, '2024-01-04', '2024-01-04 16:50:00', 1),
(15, 'OD LOAN', '1,2,3,6,7,11', 1, '2024-01-04', '2024-01-04 16:50:29', 1),
(16, 'home loan ', '2,6,7,15', 1, '2024-03-18', '2024-03-18 05:27:41', 1),
(17, 'Gold Loan', '1,2,6,7,11', 1, '2024-03-20', '2024-03-20 14:14:16', 1),
(18, 'BUSINESS LOAN', '1,2,3,4,6,7,8,9,11,12,13,14,15,16', 1, '2024-03-21', '2024-03-21 07:11:47', 1),
(19, 'personal loan', '1,2,3,4,6,7,8,11,12', 1, '2024-03-29', '2024-03-29 07:44:40', 1),
(20, 'Auto loan', '1,2,3,4,5,6,7,8,11,12,15', 1, '2024-04-06', '2024-04-06 09:49:41', 1),
(21, 'persaonal loan', '1,2,3,4,6,7,8,11,12', 1, '2024-04-17', '2024-04-17 06:20:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(111) NOT NULL,
  `assign_to` varchar(111) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_by_user_type_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`, `assign_to`, `status`, `created_by_user_type_id`, `created_at`, `updated_at`) VALUES
(1, 'Agent Management', '', 1, 0, 0, '2024-05-28 11:21:22'),
(2, 'Employee Management', '', 1, 0, 0, '2024-05-28 11:21:22'),
(3, 'Commission Payment', '', 1, 0, 0, '2024-05-28 11:22:40'),
(4, 'Commission Management', '', 1, 0, 0, '2024-05-28 11:23:59');

-- --------------------------------------------------------

--
-- Table structure for table `pledged_category`
--

CREATE TABLE `pledged_category` (
  `id` int(11) NOT NULL,
  `pledged_assets_name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `created_by_user_type_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pledged_category`
--

INSERT INTO `pledged_category` (`id`, `pledged_assets_name`, `description`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(9, 'FD BOND', 'ALL TYPE FD (ANY BANK AND FINANCIAL)', 1, '2024-01-03', '2024-01-03 05:02:24', 1),
(10, 'PROPERTY DOCUMENTS', 'ANY TYPE OF PROPERTY DOCUMENTS.', 1, '2024-01-03', '2024-01-03 05:03:17', 1),
(11, 'GOLD', 'GOLD', 1, '2024-01-03', '2024-01-03 05:04:51', 1),
(12, 'SILVER', 'SILVER', 1, '2024-01-03', '2024-03-20 14:12:14', 1),
(13, 'JWELLERY', 'EITHER(GOLD,SILVER)', 1, '2024-01-03', '2024-06-03 10:00:58', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_document`
--

CREATE TABLE `sub_document` (
  `id` int(11) NOT NULL,
  `document_name` varchar(100) NOT NULL,
  `sub_document_name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `created_by_user_type_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `system_config`
--

CREATE TABLE `system_config` (
  `id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_address` varchar(200) NOT NULL,
  `company_url` varchar(200) NOT NULL,
  `default_timezone` int(11) NOT NULL,
  `session_timeout` int(11) NOT NULL,
  `inactive_timeout` int(11) NOT NULL,
  `max_file_size` int(11) NOT NULL,
  `allowed_file_types` varchar(200) NOT NULL,
  `default_time_format` varchar(100) NOT NULL,
  `default_date_format` varchar(100) NOT NULL,
  `default_date_time_format` varchar(100) NOT NULL,
  `updates_enabled` int(11) NOT NULL,
  `error_reporting` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_config`
--

INSERT INTO `system_config` (`id`, `company_name`, `company_address`, `company_url`, `default_timezone`, `session_timeout`, `inactive_timeout`, `max_file_size`, `allowed_file_types`, `default_time_format`, `default_date_format`, `default_date_time_format`, `updates_enabled`, `error_reporting`) VALUES
(1, 'Natraj', '       Patna', 'http://shantamanipaper.com/', 49, 60, 0, 10000000, 'jpg,JPG,JPEG,jpeg,png,PNG,GIF,gif,doc,DOC,docx,DOCX,pdf,PDF,RAR,rar,ZIP,zip', 'h:i:A', 'j M, Y', 'd-m-Y h:i:s A', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `user` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `ipaddress` varchar(100) DEFAULT NULL,
  `user_agent` varchar(500) DEFAULT NULL,
  `login_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `user`, `role`, `ipaddress`, `user_agent`, `login_datetime`) VALUES
(1, 'admin@g.com', '1', '::1', 'Chrome 102.0.0.0, Windows 10', '2022-06-21 10:23:27'),
(2, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-24 07:45:00'),
(3, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-03 10:32:20'),
(4, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-03 10:52:54'),
(5, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-03 10:55:36'),
(6, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 05:27:36'),
(7, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 06:42:50'),
(8, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 10:08:30'),
(9, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-05 10:32:39'),
(10, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-05 11:48:41'),
(11, 'admin@g.com', '1', '192.168.1.203', 'Chrome 111.0.0.0, Android', '2023-04-05 12:15:23'),
(12, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-06 07:43:10'),
(13, 'admin@g.com', '1', '192.168.1.203', 'Chrome 111.0.0.0, Android', '2023-04-06 11:51:09'),
(14, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-07 11:11:46'),
(15, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-07 11:49:22'),
(16, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-08 05:21:55'),
(17, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-08 10:19:18'),
(18, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-08 11:19:41'),
(19, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-10 05:20:43'),
(20, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-11 06:13:06'),
(21, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-11 11:55:59'),
(22, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-12 05:21:37'),
(23, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-12 05:48:02'),
(24, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-13 05:12:45'),
(25, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-14 05:57:27'),
(26, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-15 04:58:32'),
(27, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-15 05:02:00'),
(28, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-17 06:24:40'),
(29, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-17 10:04:11'),
(30, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-17 11:29:26'),
(31, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-17 11:40:22'),
(32, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-18 05:02:05'),
(33, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-18 06:07:41'),
(34, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-18 07:55:49'),
(35, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-19 04:57:46'),
(36, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-25 05:15:42'),
(37, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-25 06:15:09'),
(38, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-25 09:51:19'),
(39, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-27 05:10:40'),
(40, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-27 10:53:37'),
(41, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-28 05:34:37'),
(42, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-29 06:43:31'),
(43, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-29 11:21:13'),
(44, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-01 05:11:58'),
(45, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-02 07:06:41'),
(46, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-02 10:48:36'),
(47, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-02 11:20:28'),
(48, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-02 12:21:14'),
(49, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-03 05:06:20'),
(50, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-03 07:15:20'),
(51, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-03 08:15:21'),
(52, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-03 11:03:13'),
(53, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-04 04:53:22'),
(54, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-04 07:10:39'),
(55, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-04 10:01:27'),
(56, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-06 05:05:35'),
(57, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-06 05:52:03'),
(58, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-06 08:19:59'),
(59, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-06 10:59:28'),
(60, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-06 12:32:05'),
(61, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-09 05:04:59'),
(62, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-09 05:23:32'),
(63, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-09 05:36:35'),
(64, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-09 05:56:00'),
(65, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-09 06:09:19'),
(66, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-10 05:14:49'),
(67, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-10 05:18:33'),
(68, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-10 06:12:03'),
(69, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-11 08:05:23'),
(70, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-11 10:15:34'),
(71, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-12 05:23:25'),
(72, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-05-12 06:32:39'),
(73, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-13 05:17:21'),
(74, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-15 05:05:37'),
(75, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-16 05:26:23'),
(76, 'admin@g.com', '1', '192.168.1.250', 'Chrome 113.0.0.0, Windows 10', '2023-05-16 11:46:38'),
(77, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-17 05:31:06'),
(78, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-18 05:04:46'),
(79, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-19 05:20:45'),
(80, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-20 05:04:33'),
(81, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-20 10:31:32'),
(82, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-22 05:24:24'),
(83, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-22 05:57:45'),
(84, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-22 06:40:15'),
(85, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 05:32:04'),
(86, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 06:33:46'),
(87, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 06:34:00'),
(88, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 06:35:00'),
(89, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 06:36:40'),
(90, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 06:37:59'),
(91, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 06:42:46'),
(92, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 06:43:09'),
(93, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 06:43:58'),
(94, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 06:45:02'),
(95, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 06:57:47'),
(96, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 07:02:59'),
(97, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 07:05:24'),
(98, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 07:18:02'),
(99, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 07:23:09'),
(100, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 07:28:33'),
(101, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 07:34:59'),
(102, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 07:55:24'),
(103, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 11:03:21'),
(104, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 11:22:09'),
(105, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 11:25:29'),
(106, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 11:27:50'),
(107, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-23 11:29:15'),
(108, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 06:00:05'),
(109, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 06:01:46'),
(110, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 06:03:16'),
(111, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 06:17:55'),
(112, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 09:55:38'),
(113, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 10:15:22'),
(114, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 10:21:44'),
(115, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 10:22:47'),
(116, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 10:29:43'),
(117, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 10:30:00'),
(118, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 10:36:13'),
(119, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 10:45:19'),
(120, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 10:47:31'),
(121, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 10:48:22'),
(122, 'abhi@2529g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 10:53:11'),
(123, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 10:53:37'),
(124, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 11:09:42'),
(125, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 11:09:51'),
(126, 'rashmikantsingh@gmail.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 11:19:09'),
(127, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 11:19:31'),
(128, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 11:23:03'),
(129, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 11:25:58'),
(130, 'kau@g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 11:49:57'),
(131, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 11:50:35'),
(132, 'man@g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 11:56:53'),
(133, 'man@g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 11:58:43'),
(134, 'man@g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 11:59:43'),
(135, 'man@g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-24 12:04:57'),
(136, 'man@g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-25 05:06:23'),
(137, 'man@g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-25 06:12:49'),
(138, 'man@g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-25 07:02:19'),
(139, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-25 10:30:51'),
(140, 'man@g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-25 10:31:19'),
(141, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-25 11:23:15'),
(142, 'man@g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-25 11:23:33'),
(143, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-26 05:09:34'),
(144, 'man@g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-26 05:27:00'),
(145, 'man@g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-27 05:26:52'),
(146, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-27 06:57:30'),
(147, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-27 08:01:35'),
(148, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-29 05:18:46'),
(149, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-29 06:39:13'),
(150, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-29 06:40:33'),
(151, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-29 06:40:52'),
(152, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-30 05:03:10'),
(153, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-31 05:06:01'),
(154, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-31 10:58:35'),
(155, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-31 11:33:24'),
(156, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-31 12:10:32'),
(157, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-31 12:30:49'),
(158, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-31 12:31:01'),
(159, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-05-31 12:32:12'),
(160, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-01 05:13:27'),
(161, 'sun@g.com', '4', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-01 06:13:43'),
(162, 'sud@g.com', '4', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-01 07:16:31'),
(163, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-02 05:09:00'),
(164, 'sud@g.com', '4', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-02 05:27:35'),
(165, 'sun@g.com', '4', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-02 08:01:40'),
(166, 'sud@g.com', '4', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-03 05:14:50'),
(167, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-03 06:55:01'),
(168, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-03 08:24:14'),
(169, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-03 08:31:31'),
(170, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-05 05:29:49'),
(171, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-05 05:37:17'),
(172, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-05 05:39:48'),
(173, 'admin@g.com', '1', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-05 05:49:10'),
(174, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-05 06:44:44'),
(175, 'abhi@2529g.com', '3', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-05 06:54:41'),
(176, 'sud@g.com', '4', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-05 07:01:06'),
(177, 'ashu@g.com', '2', '::1', 'Chrome 113.0.0.0, Windows 10', '2023-06-05 07:24:03'),
(178, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-06 05:09:59'),
(179, 'sud@g.com', '4', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-06 05:16:48'),
(180, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-06 06:59:25'),
(181, 'sud@g.com', '4', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-06 07:07:29'),
(182, 'sun@g.com', '4', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-06 11:01:22'),
(183, 'sud@g.com', '4', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-06 11:04:16'),
(184, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-06 11:08:09'),
(185, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-06 11:47:44'),
(186, 'abhi@2529g.com', '3', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-06 11:55:57'),
(187, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-07 05:04:41'),
(188, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-07 05:21:05'),
(189, 'abhi@2529g.com', '3', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-07 05:32:23'),
(190, 'sud@g.com', '4', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-07 06:03:13'),
(191, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-07 06:08:55'),
(192, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-07 08:28:14'),
(193, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-07 11:30:16'),
(194, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-07 11:30:37'),
(195, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-08 05:11:35'),
(196, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-08 05:36:40'),
(197, 'abhi@2529g.com', '3', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-08 05:52:48'),
(198, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-08 05:53:36'),
(199, 'abhi@2529g.com', '3', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-08 07:35:26'),
(200, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-12 05:04:37'),
(201, 'abhi@2529g.com', '3', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-12 05:05:24'),
(202, 'sud@g.com', '4', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-12 05:08:08'),
(203, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-12 05:09:11'),
(204, 'sud@g.com', '4', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-12 05:33:57'),
(205, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-12 11:53:01'),
(206, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-12 11:57:11'),
(207, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-13 05:26:20'),
(208, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-13 05:28:26'),
(209, 'abhi@2529g.com', '3', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-13 05:30:46'),
(210, 'sun@g.com', '4', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-13 06:05:39'),
(211, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-13 06:17:27'),
(212, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-13 06:27:13'),
(213, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-13 06:30:20'),
(214, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-13 06:38:31'),
(215, 'abhi@2529g.com', '3', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-13 06:39:51'),
(216, 'sud@g.com', '4', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-13 06:51:08'),
(217, 'sud@g.com', '4', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-13 06:57:43'),
(218, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-13 07:57:29'),
(219, 'sud@g.com', '4', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-13 08:09:21'),
(220, 'sud@g.com', '4', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-13 08:29:50'),
(221, 'sud@g.com', '4', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-13 08:30:27'),
(222, 'sud@g.com', '4', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-13 08:33:38'),
(223, 'admin@g.com', '1', '192.168.1.250', 'Chrome 114.0.0.0, Windows 10', '2023-06-13 11:36:53'),
(224, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-14 10:09:42'),
(225, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-15 06:29:34'),
(226, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-15 10:12:22'),
(227, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-16 05:43:03'),
(228, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-16 12:12:19'),
(229, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-19 05:54:54'),
(230, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-19 10:55:26'),
(231, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-20 05:03:18'),
(232, 'admin@g.com', '1', '192.168.1.212', 'Chrome 114.0.0.0, Windows 10', '2023-06-20 11:24:58'),
(233, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-21 05:39:00'),
(234, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-21 10:18:47'),
(235, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-22 05:38:34'),
(236, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-22 10:32:52'),
(237, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-23 05:13:37'),
(238, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-23 09:45:01'),
(239, 'abhi@2529g.com', '3', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-23 09:49:12'),
(240, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-23 10:28:01'),
(241, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-23 10:30:28'),
(242, 'abhi@2529g.com', '3', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-23 10:38:11'),
(243, 'sud@g.com', '4', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-23 10:44:11'),
(244, 'sun@g.com', '4', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-23 10:47:43'),
(245, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-23 11:45:42'),
(246, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-24 05:08:06'),
(247, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-26 06:43:30'),
(248, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-27 05:57:55'),
(249, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-27 07:07:53'),
(250, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-28 05:15:28'),
(251, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-28 10:08:47'),
(252, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-29 05:12:05'),
(253, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-29 10:13:53'),
(254, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-29 12:37:40'),
(255, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-06-30 05:24:53'),
(256, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-01 05:26:10'),
(257, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-03 05:08:56'),
(258, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-03 11:17:53'),
(259, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-03 11:18:06'),
(260, 'abhi@2529g.com', '3', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-03 11:18:36'),
(261, 'sud@g.com', '4', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-03 11:18:53'),
(262, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-03 11:19:25'),
(263, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-03 11:23:08'),
(264, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-03 11:28:10'),
(265, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-03 11:29:34'),
(266, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-04 05:04:31'),
(267, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-04 06:03:35'),
(268, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-04 06:18:11'),
(269, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-04 06:50:36'),
(270, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-04 08:00:42'),
(271, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-04 11:18:46'),
(272, 'am@gmail.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-04 12:05:13'),
(273, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-04 12:05:26'),
(274, 'ashu@g.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-04 12:06:13'),
(275, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-04 12:36:15'),
(276, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-04 12:37:41'),
(277, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 05:07:26'),
(278, 'am@gmail.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 05:08:40'),
(279, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 05:09:39'),
(280, 'abhi@gmail.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 05:12:51'),
(281, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 05:13:38'),
(282, 'am@gmail.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 05:30:32'),
(283, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 05:31:14'),
(284, 'am@gmail.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 05:31:48'),
(285, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 05:32:06'),
(286, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 05:32:58'),
(287, 'man@g.com', '3', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 05:33:17'),
(288, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 05:37:06'),
(289, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 05:53:48'),
(290, 'am@gmail.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 05:54:11'),
(291, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 07:03:38'),
(292, 'kau@g.com', '3', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 07:04:08'),
(293, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 07:08:28'),
(294, 'am@gmail.com', '2', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 07:09:04'),
(295, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 07:09:30'),
(296, 'kau@g.com', '3', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 07:10:07'),
(297, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 07:17:19'),
(298, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 07:48:46'),
(299, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 11:31:09'),
(300, 'admin@g.com', '1', '192.168.1.1', 'Chrome 114.0.0.0, Windows 10', '2023-07-05 11:37:46'),
(301, 'admin@g.com', '1', '192.168.1.1', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 07:10:23'),
(302, 'admin@g.com', '1', '192.168.10.227', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 07:15:16'),
(303, 'agent@gmail.com', '2', '192.168.10.227', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 07:21:41'),
(304, 'admin@g.com', '1', '192.168.10.227', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 07:21:59'),
(305, 'agent@gmail.com', '2', '192.168.10.227', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 07:22:35'),
(306, 'admin@g.com', '1', '192.168.10.227', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 07:26:35'),
(307, 'agent@gmail.com', '2', '192.168.10.227', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 07:29:02'),
(308, 'emp@gmail.com', '3', '192.168.10.227', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 07:29:56'),
(309, 'emp@gmail.com', '3', '192.168.10.218', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 07:31:31'),
(310, 'agent@gmail.com', '2', '192.168.10.218', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 07:33:33'),
(311, 'admin@g.com', '1', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 10:52:44'),
(312, 'agent@gmail.com', '2', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 10:53:14'),
(313, 'emp@gmail.com', '3', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 10:53:57'),
(314, 'agent@gmail.com', '2', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 10:56:55'),
(315, 'emp@gmail.com', '3', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 10:58:31'),
(316, 'agent@gmail.com', '2', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 10:59:07'),
(317, 'emp@gmail.com', '3', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 11:00:55'),
(318, 'admin@g.com', '1', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 11:02:49'),
(319, 'emp@gmail.com', '3', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 11:04:57'),
(320, 'agent@gmail.com', '2', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 11:05:26'),
(321, 'admin@g.com', '1', '192.168.10.218', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 11:08:26'),
(322, 'agent@gmail.com', '2', '192.168.10.218', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 11:09:20'),
(323, 'agent@gmail.com', '2', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 11:10:10'),
(324, 'emp@gmail.com', '3', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 11:10:33'),
(325, 'agent@gmail.com', '2', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 11:11:48'),
(326, 'admin@g.com', '1', '192.168.10.218', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 11:13:25'),
(327, 'admin@g.com', '1', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 11:20:04'),
(328, 'agent@gmail.com', '2', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 11:26:59'),
(329, 'admin@g.com', '1', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 11:30:25'),
(330, 'agent@gmail.com', '2', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 11:45:10'),
(331, 'support@gmail.com', '4', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 11:46:01'),
(332, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 12:03:40'),
(333, 'admin@g.com', '1', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-07 12:16:07'),
(334, 'admin@g.com', '1', '192.168.10.218', 'Chrome 114.0.0.0, Windows 10', '2023-07-08 13:17:08'),
(335, 'agent@gmail.com', '2', '192.168.10.218', 'Chrome 114.0.0.0, Windows 10', '2023-07-08 13:18:30'),
(336, 'admin@g.com', '1', '192.168.10.218', 'Chrome 114.0.0.0, Windows 10', '2023-07-08 13:18:55'),
(337, 'emp@gmail.com', '3', '192.168.10.218', 'Chrome 114.0.0.0, Windows 10', '2023-07-08 13:19:22'),
(338, 'admin@g.com', '1', '192.168.1.1', 'Chrome 114.0.0.0, Windows 10', '2023-07-11 04:42:06'),
(339, 'admin@g.com', '1', '192.168.1.1', 'Chrome 114.0.0.0, Windows 10', '2023-07-11 06:42:22'),
(340, 'admin@g.com', '1', '::1', 'Chrome 114.0.0.0, Windows 10', '2023-07-13 12:28:40'),
(341, 'admin@g.com', '1', '192.168.10.232', 'Chrome 114.0.0.0, Windows 10', '2023-07-14 06:14:26'),
(342, 'admin@g.com', '1', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-14 06:16:51'),
(343, 'admin@g.com', '1', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-14 06:28:55'),
(344, 'admin@g.com', '1', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-14 06:30:48'),
(345, 'admin@g.com', '1', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-14 06:36:43'),
(346, 'admin@g.com', '1', '192.168.1.228', 'Chrome 114.0.0.0, Windows 10', '2023-07-15 12:16:06'),
(347, 'admin@g.com', '1', '192.168.1.1', 'Chrome 115.0.0.0, Windows 10', '2023-07-19 11:12:24'),
(348, 'admin@g.com', '1', '192.168.1.215', 'Chrome 115.0.0.0, Windows 10', '2023-08-19 04:54:36'),
(349, 'admin@g.com', '1', '192.168.1.1', 'Chrome 115.0.0.0, Windows 10', '2023-08-19 04:56:38'),
(350, 'admin@g.com', '1', '192.168.1.1', 'Chrome 115.0.0.0, Windows 10', '2023-08-19 05:15:20'),
(351, 'admin@g.com', '1', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-24 05:05:40'),
(352, 'agent@gmail.com', '2', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-24 05:13:13'),
(353, 'admin@g.com', '1', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-24 05:29:40'),
(354, 'admin@g.com', '1', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-24 05:33:07'),
(355, 'emp@gmail.com', '3', '103.104.183.2', 'Chrome 116.0.0.0, Windows 10', '2023-08-24 05:44:58'),
(356, 'admin@g.com', '1', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-24 06:11:14'),
(357, 'admin@g.com', '1', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-24 06:29:03'),
(358, 'admin@g.com', '1', '192.168.1.1', 'Firefox 116.0, Windows 10', '2023-08-24 06:33:51'),
(359, 'admin@g.com', '1', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-24 06:36:39'),
(360, 'admin@g.com', '1', '192.168.1.1', 'Chrome 115.0.0.0, Android', '2023-08-24 07:33:13'),
(361, 'admin@g.com', '1', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-24 08:06:32'),
(362, 'agent@gmail.com', '2', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-24 08:20:22'),
(363, 'emp@gmail.com', '3', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-24 08:21:13'),
(364, 'suraj@gmail.com', '4', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-24 08:22:23'),
(365, 'admin@g.com', '1', '103.104.183.2', 'Chrome 116.0.0.0, Windows 10', '2023-08-24 11:32:01'),
(366, 'admin@g.com', '1', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-24 12:14:00'),
(367, 'admin@g.com', '1', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-25 00:23:52'),
(368, 'admin@g.com', '1', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-25 00:39:22'),
(369, 'admin@g.com', '1', '152.58.186.167', 'Chrome 116.0.0.0, Windows 10', '2023-08-25 00:54:51'),
(370, 'admin@g.com', '1', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-25 01:09:16'),
(371, 'admin@g.com', '1', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-25 07:45:39'),
(372, 'admin@g.com', '1', '103.104.183.2', 'Chrome 116.0.0.0, Windows 10', '2023-08-25 08:18:44'),
(373, 'admin@g.com', '1', '152.58.188.108', 'Chrome 116.0.0.0, Windows 10', '2023-08-26 01:02:16'),
(374, 'agent@gmail.com', '2', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-26 01:04:04'),
(375, 'emp@gmail.com', '3', '152.58.188.108', 'Chrome 116.0.0.0, Windows 10', '2023-08-26 01:11:02'),
(376, 'admin@g.com', '1', '152.58.188.108', 'Chrome 116.0.0.0, Windows 10', '2023-08-26 01:47:59'),
(377, 'agent@gmail.com', '2', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-26 01:52:12'),
(378, 'emp@gmail.com', '3', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-26 01:55:18'),
(379, 'sohan@gmail.com', '4', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-26 01:57:25'),
(380, 'admin@g.com', '1', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-28 05:44:04'),
(381, 'admin@g.com', '1', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-29 06:02:13'),
(382, 'emp@gmail.com', '3', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-29 06:06:19'),
(383, 'agent@gmail.com', '2', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-29 06:16:13'),
(384, 'suraj@gmail.com', '4', '192.168.1.1', 'Chrome 116.0.0.0, Windows 10', '2023-08-29 06:18:04'),
(385, 'admin@g.com', '1', '192.168.1.1', 'Chrome 117.0.0.0, Windows 10', '2023-10-04 07:24:05'),
(386, 'admin@g.com', '1', '192.168.1.1', 'Chrome 117.0.0.0, Windows 10', '2023-10-04 07:27:24'),
(387, 'admin@g.com', '1', '192.168.1.1', 'Chrome 117.0.0.0, Windows 10', '2023-10-04 09:39:58'),
(388, 'agent@gmail.com', '2', '103.104.183.2', 'Chrome 117.0.0.0, Windows 10', '2023-10-04 09:40:53'),
(389, 'admin@g.com', '1', '192.168.1.1', 'Chrome 117.0.0.0, Windows 10', '2023-10-04 10:07:20'),
(390, 'emp@gmail.com', '3', '103.104.183.2', 'Chrome 117.0.0.0, Windows 10', '2023-10-04 11:59:42'),
(391, 'agent@gmail.com', '2', '103.104.183.2', 'Chrome 117.0.0.0, Windows 10', '2023-10-04 12:03:12'),
(392, 'admin@g.com', '1', '192.168.1.1', 'Chrome 117.0.0.0, Windows 10', '2023-10-05 06:00:27'),
(393, 'admin@g.com', '1', '192.168.1.1', 'Chrome 117.0.0.0, Windows 10', '2023-10-05 06:02:16'),
(394, 'admin@g.com', '1', '103.104.183.2', 'Chrome 117.0.0.0, Windows 10', '2023-10-05 06:08:30'),
(395, 'admin@g.com', '1', '192.168.1.1', 'Chrome 117.0.0.0, Windows 10', '2023-10-06 10:57:35'),
(396, 'admin@g.com', '1', '192.168.1.1', 'Chrome 117.0.0.0, Windows 10', '2023-10-06 11:44:12'),
(397, 'agent@gmail.com', '2', '192.168.1.1', 'Chrome 117.0.0.0, Windows 10', '2023-10-06 11:49:27'),
(398, 'admin@g.com', '1', '192.168.1.1', 'Chrome 117.0.0.0, Windows 10', '2023-10-06 11:55:39'),
(399, 'emp@gmail.com', '3', '103.104.183.2', 'Chrome 117.0.0.0, Windows 10', '2023-10-06 11:56:30'),
(400, 'admin@g.com', '1', '192.168.1.1', 'Chrome 117.0.0.0, Windows 10', '2023-10-11 10:56:03'),
(401, 'agent@gmail.com', '2', '192.168.1.1', 'Chrome 117.0.0.0, Windows 10', '2023-10-11 11:00:57'),
(402, 'admin@g.com', '1', '192.168.1.1', 'Chrome 117.0.0.0, Windows 10', '2023-10-11 11:08:31'),
(403, 'admin@g.com', '1', '192.168.1.1', 'Chrome 117.0.0.0, Windows 10', '2023-10-12 05:24:08'),
(404, 'admin@g.com', '1', '192.168.1.1', 'Chrome 118.0.0.0, Windows 10', '2023-10-18 10:26:31'),
(405, 'admin@g.com', '1', '103.104.183.2', 'Chrome 118.0.0.0, Windows 10', '2023-10-18 10:31:42'),
(406, 'admin@g.com', '1', '103.104.183.2', 'Chrome 118.0.0.0, Windows 10', '2023-10-20 09:48:37'),
(407, 'admin@g.com', '1', '123.63.97.202', 'Chrome 118.0.0.0, Windows 10', '2023-10-20 09:56:46'),
(408, 'emp@gmail.com', '3', '123.63.97.202', 'Chrome 118.0.0.0, Windows 10', '2023-10-20 10:07:24'),
(409, 'admin@g.com', '1', '192.168.1.1', 'Chrome 118.0.0.0, Windows 10', '2023-10-20 10:11:07'),
(410, 'agent@gmail.com', '2', '192.168.1.1', 'Chrome 118.0.0.0, Windows 10', '2023-10-20 10:11:37'),
(411, 'admin@g.com', '1', '192.168.1.1', 'Chrome 118.0.0.0, Windows 10', '2023-10-20 10:13:09'),
(412, 'test@gmail.com', '4', '192.168.1.1', 'Chrome 118.0.0.0, Windows 10', '2023-10-20 10:13:46'),
(413, 'admin@g.com', '1', '103.104.183.2', 'Chrome 118.0.0.0, Windows 10', '2023-10-27 09:43:38'),
(414, 'admin@g.com', '1', '192.168.1.1', 'Chrome 118.0.0.0, Windows 10', '2023-10-28 04:54:18'),
(415, 'emp@gmail.com', '3', '192.168.1.1', 'Chrome 118.0.0.0, Windows 10', '2023-10-28 04:55:45'),
(416, 'admin@g.com', '1', '192.168.1.1', 'Chrome 118.0.0.0, Windows 10', '2023-10-28 05:03:41'),
(417, 'admin@g.com', '1', '192.168.1.1', 'Chrome 118.0.0.0, Windows 10', '2023-10-31 08:12:08'),
(418, 'admin@g.com', '1', '192.168.1.1', 'Chrome 119.0.0.0, Windows 10', '2023-11-07 05:27:31'),
(419, 'admin@g.com', '1', '103.104.183.2', 'Chrome 119.0.0.0, Windows 10', '2023-11-09 06:22:24'),
(420, 'admin@g.com', '1', '192.168.1.1', 'Chrome 119.0.0.0, Windows 10', '2023-11-13 06:44:44'),
(421, 'admin@g.com', '1', '192.168.1.1', 'Chrome 119.0.0.0, Windows 10', '2023-11-13 06:52:35'),
(422, 'agent@gmail.com', '2', '103.104.183.2', 'Chrome 119.0.0.0, Windows 10', '2023-11-13 07:02:26'),
(423, 'admin@g.com', '1', '103.104.183.2', 'Chrome 119.0.0.0, Windows 10', '2023-11-13 07:04:46'),
(424, 'agent@gmail.com', '2', '103.104.183.2', 'Chrome 119.0.0.0, Windows 10', '2023-11-13 07:05:53'),
(425, 'admin@g.com', '1', '103.104.183.2', 'Chrome 119.0.0.0, Windows 10', '2023-11-13 07:08:08'),
(426, 'emp@gmail.com', '3', '103.104.183.2', 'Chrome 119.0.0.0, Windows 10', '2023-11-13 07:08:44'),
(427, 'agent@gmail.com', '2', '192.168.1.1', 'Chrome 119.0.0.0, Windows 10', '2023-11-13 07:11:41'),
(428, 'admin@g.com', '1', '192.168.1.1', 'Chrome 119.0.0.0, Windows 10', '2023-11-14 11:33:08'),
(429, 'emp@gmail.com', '3', '192.168.1.1', 'Chrome 119.0.0.0, Windows 10', '2023-11-14 11:35:08'),
(430, 'admin@g.com', '1', '192.168.1.1', 'Chrome 119.0.0.0, Windows 10', '2023-11-16 05:39:46'),
(431, 'alok@gmail.com', '2', '192.168.1.1', 'Chrome 119.0.0.0, Windows 10', '2023-11-16 05:43:30'),
(432, 'emp@gmail.com', '3', '192.168.1.1', 'Chrome 119.0.0.0, Windows 10', '2023-11-16 05:44:55'),
(433, 'admin@g.com', '1', '192.168.1.1', 'Chrome 119.0.0.0, Windows 10', '2023-11-16 05:45:24'),
(434, 'admin@g.com', '1', '182.74.185.58', 'Chrome 120.0.0.0, Windows 10', '2023-12-15 11:04:44'),
(435, 'agent@gmail.com', '2', '192.168.1.1', 'Chrome 120.0.0.0, Windows 10', '2023-12-15 11:16:04'),
(436, 'emp@gmail.com', '3', '192.168.1.1', 'Chrome 120.0.0.0, Windows 10', '2023-12-15 11:20:50'),
(437, 'agent@gmail.com', '2', '192.168.1.1', 'Chrome 120.0.0.0, Windows 10', '2023-12-15 11:21:25'),
(438, 'emp@gmail.com', '3', '192.168.1.1', 'Chrome 120.0.0.0, Windows 10', '2023-12-15 11:22:10'),
(439, 'agent@gmail.com', '2', '192.168.1.1', 'Chrome 120.0.0.0, Windows 10', '2023-12-15 11:24:27'),
(440, 'admin@g.com', '1', '192.168.1.1', 'Chrome 120.0.0.0, Windows 10', '2023-12-21 09:51:10'),
(441, 'alok@gmail.com', '2', '192.168.1.1', 'Chrome 120.0.0.0, Windows 10', '2023-12-21 09:52:30'),
(442, 'admin@g.com', '1', '192.168.1.1', 'Chrome 120.0.0.0, Windows 10', '2023-12-22 08:34:08'),
(443, 'admin@g.com', '1', '192.168.1.1', 'Chrome 120.0.0.0, Windows 10', '2023-12-22 11:03:24'),
(444, 'admin@g.com', '1', '117.99.242.198', 'Chrome 120.0.0.0, Windows 10', '2023-12-23 08:31:24'),
(445, 'admin@g.com', '1', '192.168.1.1', 'Chrome 120.0.0.0, Windows 10', '2023-12-25 11:43:11'),
(446, 'admin@g.com', '1', '192.168.1.1', 'Chrome 120.0.0.0, Windows 10', '2023-12-27 05:03:33'),
(447, 'emp@gmail.com', '3', '192.168.1.1', 'Chrome 120.0.0.0, Windows 10', '2023-12-27 05:09:38'),
(448, 'admin@g.com', '1', '192.168.1.1', 'Chrome 120.0.0.0, Windows 10', '2023-12-27 05:11:54'),
(449, 'agent@gmail.com', '2', '192.168.1.1', 'Chrome 120.0.0.0, Windows 10', '2023-12-27 05:12:12'),
(450, 'admin@g.com', '1', '192.168.1.1', 'Chrome 120.0.0.0, Windows 10', '2023-12-27 06:51:23'),
(451, 'admin@g.com', '1', '192.168.1.1', 'Chrome 120.0.0.0, Windows 10', '2023-12-30 10:49:50'),
(452, 'admin@g.com', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-02 10:00:56'),
(453, 'admin@g.com', '1', '103.168.223.82', 'Chrome 120.0.0.0, Windows 10', '2024-01-02 11:17:10'),
(454, 'admin@g.com', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-02 12:48:00'),
(455, 'admin@g.com', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 03:52:03'),
(456, 'admin@g.com', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 05:49:09'),
(457, 'EMP@GMAIL.COM', '3', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 05:49:30'),
(458, 'EMP2@GMAIL.COM', '3', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 05:50:06'),
(459, 'admin@g.com', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 05:50:25'),
(460, 'EMP2@GMAIL.COM', '3', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 05:51:32'),
(461, 'admin@g.com', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 05:53:47'),
(462, 'AGENT2@GMAIL.COM', '2', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 05:54:34'),
(463, 'admin@g.com', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 05:54:56'),
(464, 'admin@g.com', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 05:55:40'),
(465, 'EMP2@GMAIL.COM', '3', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 05:57:25'),
(466, 'EMP@GMAIL.COM', '3', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 05:58:33'),
(467, 'EMP2@GMAIL.COM', '3', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 06:00:15'),
(468, 'EMP2@GMAIL.COM', '3', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 06:01:44'),
(469, 'admin@g.com', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 06:02:27'),
(470, 'AGENT@GMAIL.COM', '2', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 06:03:07'),
(471, 'EMP@GMAIL.COM', '3', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 06:14:49'),
(472, 'admin@g.com', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 06:18:09'),
(473, 'admin@g.com', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 06:50:05'),
(474, 'admin@g.com', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 07:07:18'),
(475, 'EMP@GMAIL.COM', '3', '103.104.183.2', 'Firefox 121.0, Windows 10', '2024-01-03 07:26:21'),
(476, 'admin@g.com', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 07:41:29'),
(477, 'EMP2@GMAIL.COM', '3', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 07:43:09'),
(478, 'admin@g.com', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 07:53:12'),
(479, 'EMP@GMAIL.COM', '3', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 07:53:36'),
(480, 'EMP@GMAIL.COM', '3', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 10:57:20'),
(481, 'admin@g.com', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 10:58:54'),
(482, 'EMP@GMAIL.COM', '3', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-03 11:00:48'),
(483, 'admin@g.com', '1', '152.58.168.189', 'Chrome 120.0.0.0, Linux', '2024-01-03 17:12:12'),
(484, 'admin@mrktech.in', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 05:11:11'),
(485, 'admin@mrktech.in', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 05:15:23'),
(486, 'admin@mrktech.in', '1', '152.58.169.178', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 06:06:14'),
(487, 'admin@mrktech.in', '1', '152.58.169.178', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 06:14:33'),
(488, 'admin@mrktech.in', '1', '152.58.169.178', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 06:17:19'),
(489, 'rasidulalam786s@gmail.com', '3', '152.58.145.138', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 06:24:59'),
(490, 'rasidulalam786s@gmail.com', '3', '152.58.145.138', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 06:28:23'),
(491, 'admin@mrktech.in', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 06:30:27'),
(492, 'SUMIT@GMAIL.COM', '4', '152.58.145.138', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 06:34:59'),
(493, 'admin@mrktech.in', '1', '152.58.145.138', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 06:35:45'),
(494, 'rasidulalam786s@gmail.com', '3', '47.29.170.15', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 06:36:16'),
(495, 'AGENT2@GMAIL.COM', '2', '152.58.169.124', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 06:36:33'),
(496, 'AGENT2@GMAIL.COM', '2', '47.29.170.15', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 06:42:24'),
(497, 'rasidulalam786s@gmail.com', '3', '47.29.170.15', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 06:49:42'),
(498, 'AGENT2@GMAIL.COM', '2', '47.29.170.15', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 06:53:19'),
(499, 'admin@mrktech.in', '1', '152.58.168.132', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 07:08:47'),
(500, 'admin@mrktech.in', '1', '152.58.144.19', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 07:09:06'),
(501, 'admin@mrktech.in', '1', '152.58.168.132', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 07:12:12'),
(502, 'admin@mrktech.in', '1', '152.58.168.215', 'Chrome 120.0.0.0, Windows 10', '2024-01-04 16:48:11'),
(503, 'rasidulalam786s@gmail.com', '3', '47.29.171.84', 'Chrome 120.0.0.0, Windows 10', '2024-01-08 10:49:00'),
(504, 'admin@mrktech.in', '1', '152.58.144.136', 'Chrome 120.0.0.0, Windows 10', '2024-01-08 10:58:54'),
(505, 'admin@mrktech.in', '1', '103.104.183.2', 'Chrome 120.0.0.0, Windows 10', '2024-01-10 10:05:51'),
(506, 'rasidulalam786s@gmail.com', '3', '47.29.167.134', 'Chrome 120.0.0.0, Windows 10', '2024-01-11 14:12:22'),
(507, 'AGENT2@GMAIL.COM', '2', '47.29.167.134', 'Chrome 120.0.0.0, Windows 10', '2024-01-11 14:18:36'),
(508, 'rasidulalam786s@gmail.com', '3', '47.29.172.78', 'Chrome 120.0.0.0, Windows 10', '2024-01-12 16:55:54'),
(509, 'rasidulalam786s@gmail.com', '3', '47.29.166.110', 'Chrome 120.0.0.0, Windows 10', '2024-01-16 04:58:07'),
(510, 'rasidulalam786s@gmail.com', '3', '47.29.171.129', 'Chrome 120.0.0.0, Windows 10', '2024-01-17 16:13:41'),
(511, 'admin@g.com', '1', '::1', 'Chrome 122.0.0.0, Windows 10', '2024-03-04 06:07:02'),
(512, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-04 06:15:16'),
(513, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-04 06:16:38'),
(514, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-07 05:14:23'),
(515, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-07 10:19:56'),
(516, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-07 10:20:37'),
(517, 'admin@g.com', '1', '106.217.186.51', 'Safari 604.1, iOS', '2024-03-07 11:17:35'),
(518, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-13 06:22:53'),
(519, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-13 06:24:24'),
(520, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-13 06:30:34'),
(521, 'EMP@GMAIL.COM', '3', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-13 06:37:14'),
(522, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-13 06:38:43'),
(523, 'AGENT@GMAIL.COM', '2', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-13 06:39:04'),
(524, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-13 06:40:18'),
(525, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-13 06:41:11'),
(526, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-13 06:42:01'),
(527, 'ajay@gmail.com', '4', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-13 06:42:27'),
(528, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-13 06:43:27'),
(529, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-14 11:37:26'),
(530, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-15 06:27:23'),
(531, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-15 06:37:00'),
(532, 'EMP@GMAIL.COM', '3', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-15 06:48:04'),
(533, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-15 06:49:27'),
(534, 'AGENT@GMAIL.COM', '2', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-15 06:49:55'),
(535, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-15 06:52:07'),
(536, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-15 07:21:46'),
(537, 'admin@g.com', '1', '183.83.53.1', 'Chrome 122.0.0.0, Windows 10', '2024-03-15 07:52:59'),
(538, 'EMP@GMAIL.COM', '3', '183.83.53.1', 'Chrome 122.0.0.0, Windows 10', '2024-03-15 08:32:59'),
(539, 'admin@g.com', '1', '49.43.114.250', 'Firefox 123.0, Windows 10', '2024-03-18 05:20:03'),
(540, 'admin@g.com', '1', '103.139.56.77', 'Firefox 123.0, Windows 10', '2024-03-18 09:44:22'),
(541, 'admin@g.com', '1', '152.58.157.43', 'Chrome 122.0.0.0, Android', '2024-03-18 14:20:18'),
(542, 'admin@g.com', '1', '223.190.85.96', 'Chrome 122.0.0.0, Windows 10', '2024-03-20 04:41:39'),
(543, 'admin@g.com', '1', '223.190.85.96', 'Chrome 122.0.0.0, Windows 10', '2024-03-20 04:41:53');
INSERT INTO `userlog` (`id`, `user`, `role`, `ipaddress`, `user_agent`, `login_datetime`) VALUES
(544, 'admin@g.com', '1', '103.139.56.127', 'Firefox 123.0, Windows 10', '2024-03-20 10:10:02'),
(545, 'admin@g.com', '1', '103.211.54.37', 'Chrome 122.0.0.0, Windows 10', '2024-03-20 13:59:18'),
(546, 'EMP@GMAIL.COM', '3', '103.211.54.37', 'Chrome 122.0.0.0, Windows 10', '2024-03-20 14:00:02'),
(547, 'AGENT@GMAIL.COM', '2', '103.211.54.37', 'Chrome 122.0.0.0, Windows 10', '2024-03-20 14:03:22'),
(548, 'admin@g.com', '1', '103.211.54.37', 'Chrome 122.0.0.0, Windows 10', '2024-03-20 14:05:36'),
(549, 'admin@g.com', '1', '103.211.54.37', 'Chrome 122.0.0.0, Windows 10', '2024-03-20 14:10:30'),
(550, 'EMP@GMAIL.COM', '3', '103.211.54.37', 'Chrome 122.0.0.0, Windows 10', '2024-03-20 14:24:05'),
(551, 'AGENT@GMAIL.COM', '2', '103.211.54.37', 'Chrome 122.0.0.0, Windows 10', '2024-03-20 14:26:33'),
(552, 'puneet.word99@gmail.com', '2', '103.211.54.37', 'Chrome 122.0.0.0, Windows 10', '2024-03-20 14:27:31'),
(553, 'puneet.word99@gmail.com', '2', '103.211.54.37', 'Chrome 122.0.0.0, Windows 10', '2024-03-20 14:28:27'),
(554, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-03-21 06:55:31'),
(555, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-03-21 07:07:57'),
(556, 'admin@g.com', '1', '152.59.108.167', 'Chrome 122.0.0.0, Windows 10', '2024-03-21 07:22:18'),
(557, 'rasidulalam786s@gmail.com', '3', '152.59.108.167', 'Chrome 122.0.0.0, Windows 10', '2024-03-21 07:32:53'),
(558, 'admin@g.com', '1', '152.59.108.167', 'Chrome 122.0.0.0, Windows 10', '2024-03-21 07:34:39'),
(559, 'EMP2@GMAIL.COM', '3', '152.59.108.167', 'Chrome 122.0.0.0, Windows 10', '2024-03-21 07:35:39'),
(560, 'AGENT@GMAIL.COM', '2', '152.59.108.167', 'Chrome 122.0.0.0, Windows 10', '2024-03-21 07:37:46'),
(561, 'admin@g.com', '1', '152.59.108.167', 'Chrome 122.0.0.0, Windows 10', '2024-03-21 07:39:11'),
(562, 'admin@g.com', '1', '152.59.108.167', 'Chrome 122.0.0.0, Windows 10', '2024-03-21 07:39:51'),
(563, 'admin@g.com', '1', '152.59.108.167', 'Chrome 122.0.0.0, Windows 10', '2024-03-21 07:41:22'),
(564, 'admin@g.com', '1', '152.59.108.167', 'Chrome 122.0.0.0, Windows 10', '2024-03-21 07:45:12'),
(565, 'admin@g.com', '1', '103.252.166.82', 'Chrome 122.0.0.0, Windows 10', '2024-03-21 11:21:11'),
(566, 'admin@g.com', '1', '103.167.204.91', 'Chrome 122.0.0.0, Windows 10', '2024-03-21 11:22:28'),
(567, 'EMP@GMAIL.COM', '3', '103.252.166.82', 'Chrome 122.0.0.0, Windows 10', '2024-03-21 11:23:26'),
(568, 'AGENT@GMAIL.COM', '2', '103.252.166.82', 'Chrome 122.0.0.0, Windows 10', '2024-03-21 11:25:43'),
(569, 'EMP@GMAIL.COM', '3', '103.167.204.91', 'Chrome 122.0.0.0, Windows 10', '2024-03-21 11:29:19'),
(570, 'AGENT@GMAIL.COM', '2', '103.167.204.91', 'Chrome 122.0.0.0, Windows 10', '2024-03-21 11:30:58'),
(571, 'admin@g.com', '1', '103.167.204.91', 'Chrome 122.0.0.0, Windows 10', '2024-03-21 11:33:38'),
(572, 'admin@g.com', '1', '115.187.63.206', 'Opera 108.0.0.0, Windows 10', '2024-03-21 11:54:29'),
(573, 'EMP@GMAIL.COM', '3', '115.187.63.206', 'Opera 108.0.0.0, Windows 10', '2024-03-21 11:58:38'),
(574, 'AGENT@GMAIL.COM', '2', '115.187.63.206', 'Opera 108.0.0.0, Windows 10', '2024-03-21 12:00:52'),
(575, 'admin@g.com', '1', '223.178.212.73', 'Chrome 123.0.0.0, Mac OS X', '2024-03-21 12:36:15'),
(576, 'admin@g.com', '1', '103.204.188.94', 'Chrome 91.0.4472.88, Android', '2024-03-21 14:39:39'),
(577, 'EMP@GMAIL.COM', '3', '103.204.188.94', 'Chrome 91.0.4472.88, Android', '2024-03-21 14:45:27'),
(578, 'AGENT@GMAIL.COM', '2', '103.204.188.94', 'Chrome 91.0.4472.88, Android', '2024-03-21 14:47:57'),
(579, 'admin@g.com', '1', '106.66.223.230', 'Firefox 123.0, Windows 10', '2024-03-21 14:49:01'),
(580, 'AGENT@GMAIL.COM', '2', '106.66.219.77', 'Firefox 123.0, Windows 10', '2024-03-21 14:53:21'),
(581, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-22 10:19:57'),
(582, 'ajay@gmail.com', '4', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-22 10:20:31'),
(583, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-22 10:20:52'),
(584, 'admin@g.com', '1', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-22 10:21:30'),
(585, 'ajay@gmail.com', '4', '223.188.255.126', 'Safari 604.1, iOS', '2024-03-22 10:25:14'),
(586, 'ajay@gmail.com', '4', '103.104.183.2', 'Chrome 122.0.0.0, Windows 10', '2024-03-22 10:29:56'),
(587, 'admin@g.com', '1', '103.18.169.58', 'Chrome 122.0.0.0, Android', '2024-03-22 15:24:25'),
(588, 'admin@g.com', '1', '223.239.62.95', 'Chrome 122.0.0.0, Android', '2024-03-23 13:34:07'),
(589, 'admin@g.com', '1', '223.239.50.104', 'Chrome 122.0.0.0, Windows 10', '2024-03-24 07:36:17'),
(590, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-03-29 07:28:15'),
(591, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-03-29 07:41:08'),
(592, 'EMP@GMAIL.COM', '3', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-03-29 07:52:11'),
(593, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-03-29 07:55:09'),
(594, 'AGENT@GMAIL.COM', '2', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-03-29 07:56:50'),
(595, 'EMP@GMAIL.COM', '3', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-03-29 08:00:55'),
(596, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-03-29 08:03:07'),
(597, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-03-29 08:03:48'),
(598, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-03-29 08:04:20'),
(599, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-02 11:38:04'),
(600, 'AGENT@GMAIL.COM', '2', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-02 11:43:56'),
(601, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-02 11:46:18'),
(602, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-02 11:46:58'),
(603, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-02 11:50:18'),
(604, 'AGENT@GMAIL.COM', '2', '103.204.188.85', 'Chrome 122.0.0.0, Android', '2024-04-02 17:37:33'),
(605, 'admin@g.com', '1', '103.204.188.85', 'Chrome 122.0.0.0, Android', '2024-04-02 17:40:45'),
(606, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-04 10:03:04'),
(607, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-04 10:04:35'),
(608, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-06 08:32:17'),
(609, 'admin@g.com', '1', '132.154.62.120', 'Chrome 123.0.0.0, Windows 10', '2024-04-06 09:45:39'),
(610, 'EMP@GMAIL.COM', '3', '132.154.62.120', 'Chrome 123.0.0.0, Windows 10', '2024-04-06 09:56:55'),
(611, 'admin@g.com', '1', '132.154.62.120', 'Chrome 123.0.0.0, Windows 10', '2024-04-06 10:06:05'),
(612, 'AGENT@GMAIL.COM', '2', '132.154.62.120', 'Chrome 123.0.0.0, Windows 10', '2024-04-06 10:07:04'),
(613, 'admin@g.com', '1', '132.154.62.120', 'Chrome 123.0.0.0, Windows 10', '2024-04-06 10:14:49'),
(614, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-08 06:26:14'),
(615, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-17 06:17:43'),
(616, 'AGENT@GMAIL.COM', '2', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-17 06:26:09'),
(617, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-17 06:28:48'),
(618, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-17 06:29:13'),
(619, 'EMP@GMAIL.COM', '3', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-17 06:29:33'),
(620, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-17 06:31:07'),
(621, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-17 06:33:16'),
(622, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-18 06:35:06'),
(623, 'admin@g.com', '1', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-18 06:44:01'),
(624, 'AGENT@GMAIL.COM', '2', '103.104.183.2', 'Chrome 123.0.0.0, Windows 10', '2024-04-18 06:44:26'),
(625, 'admin@g.com', '1', '103.104.183.2', 'Chrome 124.0.0.0, Windows 10', '2024-04-19 10:27:45'),
(626, 'admin@g.com', '1', '103.104.183.2', 'Chrome 124.0.0.0, Windows 10', '2024-04-23 06:06:45'),
(627, 'admin@g.com', '1', '152.58.190.247', 'Chrome 124.0.0.0, Windows 10', '2024-04-24 11:36:11'),
(628, 'admin@g.com', '1', '103.104.183.2', 'Chrome 124.0.0.0, Windows 10', '2024-05-13 06:05:18'),
(629, 'admin@g.com', '1', '103.104.183.2', 'Chrome 124.0.0.0, Windows 10', '2024-05-13 06:09:09'),
(630, 'EMP@GMAIL.COM', '3', '103.104.183.2', 'Chrome 124.0.0.0, Windows 10', '2024-05-13 06:10:42'),
(631, 'admin@g.com', '1', '103.104.183.2', 'Chrome 124.0.0.0, Windows 10', '2024-05-13 06:16:24'),
(632, 'AGENT@GMAIL.COM', '2', '103.104.183.2', 'Chrome 124.0.0.0, Windows 10', '2024-05-13 06:17:34'),
(633, 'admin@g.com', '1', '::1', 'Chrome 124.0.0.0, Windows 10', '2024-05-18 05:02:53'),
(634, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-25 04:50:22'),
(635, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-25 04:52:30'),
(636, 'arjun@gmail.com', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-25 04:53:52'),
(637, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-25 07:59:40'),
(638, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-27 09:55:44'),
(639, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-27 10:37:38'),
(640, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-27 10:50:20'),
(641, 'sonu@gmail.com', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-27 10:51:26'),
(642, 'sonu@gmail.com', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-27 10:54:34'),
(643, 'admin@g.com', '1', '127.0.0.1', 'Firefox 126.0, Windows 10', '2024-05-27 11:01:57'),
(644, 'sonu@gmail.com', '2', '127.0.0.1', 'Firefox 126.0, Windows 10', '2024-05-27 11:03:50'),
(645, 'sonu@gmail.com', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-27 11:39:23'),
(646, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-27 11:39:40'),
(647, 'monu@g.com', '3', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-27 11:41:10'),
(648, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-27 11:41:35'),
(649, 'monu@g.com', '3', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-27 11:57:33'),
(650, 'monu@g.com', '3', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-27 12:05:42'),
(651, 'monu@g.com', '3', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-27 12:06:01'),
(652, 'monu@g.com', '3', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-27 12:08:42'),
(653, 'monu@g.com', '3', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-27 12:08:50'),
(654, 'ashish@g.com', '4', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-27 12:10:50'),
(655, 'ashish@g.com', '4', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-27 12:11:26'),
(656, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-27 12:18:24'),
(657, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-28 04:07:11'),
(658, 'admin@g.com', '1', '127.0.0.1', 'Firefox 126.0, Windows 10', '2024-05-28 04:13:26'),
(659, 'rasidulalam786s@gmail.com', '3', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-28 09:59:07'),
(660, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-29 04:42:15'),
(661, 'admin@g.com', '1', '127.0.0.1', 'Firefox 126.0, Windows 10', '2024-05-29 06:55:38'),
(662, 'admin@g.com', '1', '127.0.0.1', 'Firefox 126.0, Windows 10', '2024-05-29 11:49:08'),
(663, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-29 12:08:18'),
(664, 'AGENT@GMAIL.COM', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-29 12:08:56'),
(665, 'AGENT@GMAIL.COM', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-30 04:41:12'),
(666, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-30 04:46:10'),
(667, 'AGENT@GMAIL.COM', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-30 04:56:11'),
(668, 'EMP@GMAIL.COM', '3', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-30 06:40:03'),
(669, 'AGENT@GMAIL.COM', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-30 06:43:01'),
(670, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-30 06:46:17'),
(671, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-31 05:18:01'),
(672, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-31 05:18:29'),
(673, 'sonu2@g.com', '4', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-31 05:20:05'),
(674, 'monu@g.com', '3', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-31 05:20:42'),
(675, 'rk@gmail.com', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-31 05:21:53'),
(676, 'sonu2@g.com', '4', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-31 05:23:40'),
(677, 'rk@gmail.com', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-31 05:26:48'),
(678, 'AGENT2@GMAIL.COM', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-31 06:04:44'),
(679, 'AGENT2@GMAIL.COM', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-31 06:05:40'),
(680, 'AGENT1@GMAIL.COM', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-31 06:23:29'),
(681, 'monu@g.com', '3', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-31 06:37:38'),
(682, 'monu@g.com', '3', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-31 07:25:03'),
(683, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-05-31 11:05:44'),
(684, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-03 04:35:21'),
(685, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-03 04:35:55'),
(686, 'AGENT@GMAIL.COM', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-03 04:37:41'),
(687, 'AGENT1@GMAIL.COM', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-03 04:41:43'),
(688, 'AGENT1@GMAIL.COM', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-03 04:52:15'),
(689, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-03 11:40:44'),
(690, 'sonu2@g.com', '4', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-03 11:41:37'),
(691, 'rk@gmail.com', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-03 11:42:40'),
(692, 'monu@g.com', '3', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-03 11:54:39'),
(693, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-04 04:33:10'),
(694, 'rk@gmail.com', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-04 04:34:05'),
(695, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-04 04:40:59'),
(696, 'monu@g.com', '3', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-04 04:41:34'),
(697, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-04 04:45:02'),
(698, 'rk@gmail.com', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-04 04:45:40'),
(699, 'radhe@gmail.com', '3', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-04 08:04:33'),
(700, 'admin@g.com', '1', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-04 08:05:05'),
(701, 'admin@g.com', '1', '127.0.0.1', 'Firefox 126.0, Windows 10', '2024-06-04 08:29:00'),
(702, 'EMP@GMAIL.COM', '3', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-04 09:39:35'),
(703, 'EMP@GMAIL.COM', '3', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-04 09:52:39'),
(704, 'sonu@gmail.com', '2', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-04 10:03:33'),
(705, 'radhe@gmail.com', '3', '::1', 'Chrome 125.0.0.0, Windows 10', '2024-06-04 10:10:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `agent_id` varchar(100) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `department_type` int(11) NOT NULL COMMENT '1.super_admin\r\n2.agent\r\n3.employee\r\n4.customer',
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `show_ps` varchar(200) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'uploads/user/no_image.png',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_by_user_id` varchar(10) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `agent_id`, `employee_id`, `customer_id`, `department_type`, `email`, `password`, `show_ps`, `name`, `address`, `mobile`, `photo`, `status`, `created_by_user_id`, `created_at`, `update_at`) VALUES
(1, '', '', '', 1, 'admin@g.com', '1593ea35effffa72e44264f78de0a25a', ' admin@g.com', 'Admin', 'Patna', '8453147337', 'uploads/user/admin.png', 1, '1', '2022-06-02', '2024-05-27 09:55:33'),
(54, '', '975648', '', 3, 'rasidulalam786s@gmail.com', 'ed4be253871524064e4a5c673d96c23a', 'Assam@123', 'Rasidul Alam', 'VILL-BHOKOT PARA,DARRANG', '9401409056', 'uploads/user/no_image.png', 1, '1', '2024-01-04', '2024-01-04 06:10:47'),
(53, '', '', '540428', 4, 'SAGAR@GMAIL.COM', 'd41d8cd98f00b204e9800998ecf8427e', '123456', 'SAGAR', 'FGHDFGD', '7898564564', 'uploads/user/no_image.png', 1, '46', '2024-01-03', '2024-01-03 07:50:39'),
(52, '', '', '781254', 4, 'SUMIT@GMAIL.COM', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'SUMIT SINHA', 'BHAGWAT NAGAR', '9843214563', 'uploads/user/no_image.png', 1, '43', '2024-01-03', '2024-01-03 07:41:42'),
(51, '', '', '139998', 4, 'RANJAN@GMAIL.COM', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'RANJAN', 'BHAGWAT NAGAR', '789654634545', 'uploads/user/no_image.png', 1, '43', '2024-01-03', '2024-01-03 07:31:08'),
(50, '', '', '518325', 4, 'arjun@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '123456', 'arjun', 'BHAGWAT NAGAR', '8945634564', 'uploads/user/no_image.png', 1, '1', '2024-01-03', '2024-01-03 07:24:45'),
(49, '', '', '903845', 4, 'ajay@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'AJAY KUMAR', 'BHAGWAT NAGAR', '78963534564', 'uploads/user/no_image.png', 1, '43', '2024-01-03', '2024-01-03 06:07:28'),
(48, '', '', '940666', 4, 'CUSTOMER@GMAIL.COM', 'd41d8cd98f00b204e9800998ecf8427e', '123456', 'AMIT KUMAR', 'BHAGWAT NAGAR', '987654165465', 'uploads/user/no_image.png', 1, '1', '2024-01-03', '2024-01-03 05:46:32'),
(47, '', '367162', '', 3, 'EMP2@GMAIL.COM', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'EMPLOYEE2', 'BHAGWAT NAGAR', '987946546465', 'uploads/user/no_image.png', 1, '1', '2024-01-03', '2024-01-03 05:33:57'),
(46, '', '743627', '', 3, 'EMP@GMAIL.COM', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'EMPLOYEE', 'BHAGWAT NAGAR', '9874564654', 'uploads/user/no_image.png', 1, '1', '2024-01-03', '2024-01-03 05:32:23'),
(45, '403404', '', '', 2, 'AGENT2@GMAIL.COM', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'RATAN KUMAR', 'BHAGWAT NAGAR', '9886454545', 'uploads/user/no_image.png', 1, '1', '2024-01-03', '2024-01-03 05:30:23'),
(44, '988939', '', '', 2, 'AGENT1@GMAIL.COM', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'RAJIV KUMAR', 'BHAGWAT NAGAR', '7896132456', 'uploads/user/no_image.png', 1, '1', '2024-01-03', '2024-01-03 05:28:04'),
(43, '172155', '', '', 2, 'AGENT@GMAIL.COM', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'RAJU KUMAR', 'BHAGWAT NAGAR PATNA', '98745465452', 'uploads/user/no_image.png', 1, '1', '2024-01-03', '2024-01-03 05:25:32'),
(55, '934157', '', '', 2, 'puneet.word99@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'puneet nigam', 'kanpur', '8765455421', 'uploads/user/no_image.png', 1, '1', '2024-03-20', '2024-03-20 10:13:20'),
(56, '', '', '436243', 4, 'puneet.word99@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '123456', 'puneet nigam', 'hbdfhgwhefigw`', '8765455421', 'uploads/user/no_image.png', 1, '1', '2024-03-20', '2024-03-20 10:16:40'),
(57, '609820', '', '', 2, 'arjun@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'arjun', 'BHAGWAT NAGAR', '9876541356498', 'uploads/user/no_image.png', 1, '1', '2024-03-21', '2024-03-21 07:16:35'),
(58, '', '', '103251', 4, 'ADITYAYA117@GMAIL.COM', 'd41d8cd98f00b204e9800998ecf8427e', '123456', 'ghdfgghf', 'iuojuyuiopy', '7984654654646', 'uploads/user/no_image.png', 1, '1', '2024-03-21', '2024-03-21 07:31:31'),
(59, '', '', '445879', 4, 'ajay@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'ajit kumar', 'BHAGWAT NAGAR', '987654566358', 'uploads/user/no_image.png', 1, '43', '2024-03-29', '2024-03-29 07:59:03'),
(60, '', '', '535400', 4, 'nik@g.com', 'd41d8cd98f00b204e9800998ecf8427e', '852369', 'Nikhil', 'Patna', '9887546532', 'uploads/user/no_image.png', 1, '1', '2024-04-04', '2024-04-04 10:07:12'),
(61, '', '', '106868', 4, 'admin123@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '123456', 'ram', 'fjjh,k', '987654654654', 'uploads/user/no_image.png', 1, '46', '2024-04-06', '2024-04-06 10:02:34'),
(62, '', '', '143675', 4, 'rk@gmail.com', 'ffc1921c5ae0cd4a6440bf040e6cfd5e', '1231312231231', 'Rk ', 'Rajgir Nalanda', '1111111111', 'uploads/user/no_image.png', 1, '57', '2024-05-25', '2024-05-25 04:56:52'),
(63, '262366', '', '', 2, 'sonu@gmail.com', '00cedcf91beffa9ee69f6cfe23a4602d', '1212121212', 'sonu kr', 'Rajgir  Nalanda', '1234567891', 'uploads/user/no_image.png', 1, '1', '2024-05-27', '2024-05-27 10:48:16'),
(64, '', '', '609846', 4, 'sonu2@g.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '11111', 'sonu kr 2', 'Rajgir Nalanda', '111111111', 'uploads/user/no_image.png', 1, '63', '2024-05-27', '2024-05-27 10:53:15'),
(65, '', '969484', '', 3, 'monu@g.com', 'c45af3a244a05f67186335fc98b36797', 'monu@g.com', 'monu kr', 'Rajgir Nalanda', '1111111111', 'uploads/user/no_image.png', 1, '1', '2024-05-27', '2024-05-27 11:40:46'),
(66, '', '', '595626', 4, 'ashish@g.com', 'e33d0dc281f9dfa3959ca838d3b60e0a', 'ashish@g.com', 'ashish kr', 'Rajgir Nalanda', '111111111', 'uploads/user/no_image.png', 1, '1', '2024-05-27', '2024-05-27 12:10:30'),
(67, '', '708054', '', 3, 'radhe@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '11111', 'Radhe Radhe ', 'Rajgir Nalanda', '1111111111', 'uploads/user/no_image.png', 1, '1', '2024-05-28', '2024-05-28 06:51:01'),
(68, '183609', '', '', 2, 'rk@gmail.com', 'a8c75b6d8c70c014b929f531951c1dbc', '4324324234', 'sonu kumar', 'Rajgir Nalanda', '42342342323', 'uploads/user/no_image.png', 1, '43', '2024-05-30', '2024-05-30 05:19:09'),
(69, '738774', '', '', 2, 'rk@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '11111', 'dfsf', 'Rajgir Nalanda', '12321312312', 'uploads/user/no_image.png', 1, '43', '2024-05-30', '2024-06-04 08:04:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_menu`
--
ALTER TABLE `assign_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_type`
--
ALTER TABLE `business_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commission_category`
--
ALTER TABLE `commission_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commission_earning`
--
ALTER TABLE `commission_earning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commission_payment_details`
--
ALTER TABLE `commission_payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_document`
--
ALTER TABLE `customer_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_type`
--
ALTER TABLE `loan_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pledged_category`
--
ALTER TABLE `pledged_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_document`
--
ALTER TABLE `sub_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_config`
--
ALTER TABLE `system_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `assign_menu`
--
ALTER TABLE `assign_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `business_type`
--
ALTER TABLE `business_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `commission_category`
--
ALTER TABLE `commission_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `commission_earning`
--
ALTER TABLE `commission_earning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `commission_payment_details`
--
ALTER TABLE `commission_payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `customer_document`
--
ALTER TABLE `customer_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `loan_type`
--
ALTER TABLE `loan_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pledged_category`
--
ALTER TABLE `pledged_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sub_document`
--
ALTER TABLE `sub_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=706;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
