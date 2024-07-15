-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 07:15 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `agent_id`, `name`, `dob`, `address`, `mobile_no`, `email`, `aadhar_card_no`, `aadhar_image`, `pan_no`, `pan_image`, `commission_type`, `password`, `account_no`, `ifsc_code`, `branch_name`, `bank_name`, `nominee_name`, `nominee_number`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(38, '905936', 'RAJU KUMAR', '1998-01-01', 'PATNA', '8569745858', 'agent@gmail.com', '8524785695', '', '65494984', '', '1,2', '123456', '', '', '', '', '', '', 1, '2023-07-07', '2023-07-07 07:18:51', 1),
(39, '944127', 'ALOK KUMAR', '2000-08-24', 'PATNA', '9875452111', 'alok@gmail.com', '867753452342', 'http://demo.camwel.org/demo/dsa/uploads/agent_document/download_(4).jpg', 'DERSS9784R', 'http://demo.camwel.org/demo/dsa/uploads/agent_document/download_(4)1.jpg', '1', '123456', '123456789123', 'SBIN78124424', 'PATNA', 'SBI', 'DEMO', '9876543210', 1, '2023-08-24', '2023-08-24 11:46:16', 1);

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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`id`, `bank_name`, `ifsc_code`, `branch_name`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(3, 'State Bank of India', 'SBI0001234', 'Kumharar', 1, '2023-05-10', '2023-05-10 10:00:49', 1),
(4, 'Central Bank of India', 'CBI00008523', 'Boaring Road', 1, '2023-05-10', '2023-06-13 06:19:46', 1),
(5, 'Punjab National Bank', 'PNB00002529', 'Rajendra Nagar', 1, '2023-06-13', '2023-06-13 07:59:25', 1),
(6, 'idusind bank', 'IND0002529', 'kumharar', 1, '2023-06-13', '2023-10-18 10:33:46', 1);

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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_type`
--

INSERT INTO `business_type` (`id`, `business_type_name`, `description`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(2, 'Real state', 'Business for agent', 1, '2023-06-19', '2023-10-27 09:54:22', 1),
(3, 'Credit Card/Loan', 'Business for agent', 1, '2023-06-19', '2023-10-27 09:53:12', 1),
(4, 'CAR Reseller', 'CAR SELLING BUSINESS', 1, '2023-08-24', '2023-10-27 09:52:54', 1),
(5, 'Health Insurance', '', 1, '2023-12-22', '2023-12-22 11:14:59', 1),
(6, 'Life insurance', 'Insurance provider', 1, '2023-12-22', '2023-12-22 11:15:20', 1);

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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commission_category`
--

INSERT INTO `commission_category` (`id`, `loan_type`, `commission_type`, `commission`, `commission_amount`, `commission_percentage`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(9, '4', '1', '', '100', '', 1, '2023-06-20', '2023-06-30 06:19:23', 1),
(10, '3', '1', '', '200', '', 1, '2023-07-20', '2023-06-30 07:26:10', 1),
(11, '5', '2', '2', '400', '', 1, '2023-08-20', '2023-06-30 07:26:16', 1),
(12, '3', '2', '1', '', '11', 1, '2023-05-20', '2023-06-30 07:26:26', 1),
(13, '5', '1', '', '50', '', 1, '2023-04-30', '2023-06-30 07:26:37', 1),
(14, '6', '2', '2', '5000', '', 1, '2023-08-24', '2023-08-24 11:40:06', 1),
(15, '6', '1', '', '1000', '', 1, '2023-08-24', '2023-08-24 11:40:53', 1),
(16, '8', '2', '1', '', '3', 1, '2023-12-22', '2023-12-22 11:09:00', 1);

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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commission_earning`
--

INSERT INTO `commission_earning` (`id`, `agent_name`, `customer_name`, `aadhar_card_no`, `loan_type`, `commission_type`, `commission`, `commission_amount`, `commission_percentage`, `loan_amount`, `total_commission_amount`, `payment_status`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(184, '38', '25', '65546544855', '5', '1', '0', '50', '0', '450000', '50', '2', 1, '2023-07-07', '2023-07-07 07:28:30', 1),
(185, '38', '24', '49898494984', '5', '1', '0', '50', '0', '50000', '50', '2', 1, '2023-07-07', '2023-07-07 07:28:00', 1),
(186, '39', '32', '45645645645665', '6', '2', '2', '5000', '0', '50000', '5000', '', 1, '2023-11-16', '2023-11-16 05:46:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `commission_payment_details`
--

CREATE TABLE `commission_payment_details` (
  `id` int(100) NOT NULL,
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1.un_paid\r\n2.paid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commission_payment_details`
--

INSERT INTO `commission_payment_details` (`id`, `commission_earning_id`, `agent_id`, `total_payble_amount`, `paid_amount`, `rest_amount`, `mop`, `acc_no`, `cash_received_by`, `pay_date`, `pay_remarks`, `recipet`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(4, '185', '38', '50', '50', '0', '3', '', 'self', '2023-07-07', 'done', '', 1, '2023-07-07', '2023-07-07 07:28:00', 2),
(5, '184', '38', '50', '20', '30', '1', '1', 'seld', '2023-07-07', 'done', '', 1, '2023-07-07', '2023-07-07 07:28:30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `customer_id` int(20) NOT NULL,
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_id`, `name`, `dob`, `address`, `mobile_no`, `email`, `aadhar_card_no`, `pan_no`, `identifier_name`, `identifier_number`, `identifier_email`, `assign_employee`, `password`, `account_no`, `ifsc_code`, `branch_name`, `bank_name`, `loan_amount`, `customer_type`, `collateral`, `loan_type`, `assigned_bank`, `description`, `document_status`, `next_follow_up_feedback`, `next_follow_date`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(24, 769852, 'SURAJ KUMAR', '1998-01-01', 'PATNA', '8745852158', 'test@gmail.com', '49898494984', '87979879798', '38', '', '', '', '123456', '', '', '', '', '50000', '1', '7', '5', '', 'document submitted', '1', '', '', 30, '2023-07-07', '2023-07-07 07:24:19', 1),
(25, 443933, 'SUMIT KUMAR', '1998-01-01', 'BHAGWAT NAGAR CHAURAHA, NEAR- PUSHPANJALI HOSPITAL, KUMHRAR, PATNA', '790336326', 'demo@gmail.com', '65546544855', '545445', '38', '', '', '', '123456', '', '', '', '', '450000', '1', '6', '5', '', 'done', '2', '', '', 30, '2023-07-07', '2023-07-07 07:25:40', 1),
(26, 895459, 'RAJU KUMAR', '1998-01-01', 'PATNA', '09921177888', 'support@gmail.com', '65454465454', '65446554', '38', '', '', '', '123456', '', '', '', '', '50000', '1', '6', '6', '', '', '2', '', '', 30, '2023-07-07', '2023-07-07 10:58:04', 1),
(27, 601247, 'SANTOSH KUMAR', '1995-01-01', 'PATNA', '09921177888', 'sant@gmail.com', '65456454', '56554', '38', '', '', '', '123456', '', '', '', '', '25000', '1', '6', '5', '', 'done', '2', '', '', 30, '2023-07-07', '2023-07-07 11:00:43', 1),
(28, 101004, 'SURAJ KUMAR', '1998-01-01', 'PATNA', '85555555', 'suraj@gmail.com', '65545465', '655654', '38', '', '', '', '123456', '', '', '', '', '54000', '1', '7', '5', '6', '', '2', 'tomorrow visit.', '2023-08-25', 30, '2023-07-07', '2023-11-14 11:36:48', 1),
(29, 229157, 'AJAY K,UMAR', '2023-08-25', 'PATNA', '9876543210', 'alok@gmail.com', '98796456345', 'DERSS9784R', '39', '9875452111', 'alok@gmail.com', '18', '123456', '123456789', 'SBIN78124424', 'PATNA', 'SBI', '1000000', '1', '4', '6', '', '', '', '', '', 1, '2023-08-24', '2023-08-24 12:37:01', 1),
(30, 848681, 'KUNDAN THAKUR', '2000-08-24', 'PATNA', '9876543210', 'alok@gmail.com', '78976456345343', 'DERSS9784R', '39', '9875452111', 'alok@gmail.com', '18', '123456', '123456789', 'SBIN78124424', 'PATNA', 'SBI', '5000000', '1', '', '6', '', '', '', '', '', 1, '2023-08-24', '2023-08-24 12:39:51', 1),
(31, 193601, 'sohan kumar', '2000-02-02', 'patna', '9878974365', 'sohan@gmail.com', '8796786565687', 'SDFSD7656G', '38', '', '', '18', '123456', '85765764654563', 'FGFDS64563245DS', 'PATNA', 'SBI', '500000', '1', '6', '3', '3', 'ALL DOC ARE CORRECT', '2', '', '', 30, '2023-08-26', '2023-11-14 11:37:12', 1),
(32, 897518, 'AMAN KUMAR', '2000-01-01', 'H.N14, ARFABAD COLONY, BAJRANGPURI,', '09431840840', 'annapurnamorganfinance@gmail.com', '45645645645665', '456546456', '39', '', '', '', '123456', '', '', '', '', '50000', '2', '', '6', '', '', '2', '', '', 37, '2023-11-16', '2023-11-16 05:44:40', 1),
(33, 588028, 'Prakash Pradhan', '2011-06-15', 'SCR 28 Kharavelanagar', '5236854258', 'pradhanprakash1@gmail.com', '521458745214', '4565645645645', '38', '', '', '', '123456', '543543445434334', '453543', 'SBI PATNA', 'SBI', '50000', '1', '', '3', '', 'SOME DOCUMENTS ARE PENDING', '2', 'AFTER 10 DAYS HE GIVE SOME DOCUMENT', '2023-12-28', 30, '2023-12-15', '2023-12-27 05:13:55', 1);

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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1.pending\r\n2.approved\r\n3.reject',
  `reason` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_document`
--

INSERT INTO `customer_document` (`id`, `customer_id`, `customer_type`, `customer_passport_size_photo`, `customer_identity_proof`, `customer_address_proof`, `customer_bank_statement`, `customer_salary_slip`, `customer_proof_of_business`, `customer_business_profile`, `customer_itr`, `customer_profit_loss_statement`, `customer_balance_sheet`, `collateral_document`, `loan_identity_proof`, `loan_address_proof`, `loan_passport_size_photo`, `loan_signature`, `loan_age_proof`, `loan_pan_card`, `loan_aadhaar_card`, `loan_voter_id`, `loan_passport`, `loan_driving_license`, `loan_bank_statement`, `loan_salary_slip`, `loan_work_in_hand_copies`, `loan_performa_invoice`, `loan_property_document`, `loan_academic_document`, `document_status`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`, `reason`) VALUES
(16, '769852', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 30, '2023-07-07', '2023-07-07 07:24:19', 1, ''),
(17, '443933', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 30, '2023-07-07', '2023-07-07 07:25:40', 1, ''),
(18, '895459', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 31, '2023-07-07', '2023-07-07 10:58:53', 2, 'All Document Varified'),
(19, '601247', '1', '', '', '', 'https://192.168.1.252/demo/dsa/uploads/customer_all_document/BANK_STATEMENT_DEMO.jpg', 'https://192.168.1.252/demo/dsa/uploads/customer_all_document/BANK_STATEMENT_DEMO1.jpg', '', '', '', '', '', 'https://192.168.1.252/demo/dsa/uploads/customer_all_document/BANK_STATEMENT_DEMO2.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 31, '2023-07-07', '2023-07-07 11:01:58', 3, 'not correct document'),
(20, '101004', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', 31, '2023-07-07', '2023-11-14 11:38:04', 3, 'doc incomplete'),
(21, '229157', '1', 'http://demo.camwel.org/demo/dsa/uploads/customer_all_document/download_(9).jpg', 'http://demo.camwel.org/demo/dsa/uploads/customer_all_document/aadhar_demo.jpeg', 'http://demo.camwel.org/demo/dsa/uploads/customer_all_document/aadhar_demo1.jpeg', 'http://demo.camwel.org/demo/dsa/uploads/customer_all_document/aadhar_card.png', 'http://demo.camwel.org/demo/dsa/uploads/customer_all_document/aadhar_demo2.jpeg', '', '', '', '', '', 'http://demo.camwel.org/demo/dsa/uploads/customer_all_document/aadhar_demo3.jpeg', 'http://demo.camwel.org/demo/dsa/uploads/customer_all_document/aadhar_demo4.jpeg', 'http://demo.camwel.org/demo/dsa/uploads/customer_all_document/aadhar_demo5.jpeg', 'http://demo.camwel.org/demo/dsa/uploads/customer_all_document/download_(9)1.jpg', 'http://demo.camwel.org/demo/dsa/uploads/customer_all_document/download_(4).png', '', 'http://demo.camwel.org/demo/dsa/uploads/customer_all_document/aadhar_demo6.jpeg', 'http://demo.camwel.org/demo/dsa/uploads/customer_all_document/aadhar_demo7.jpeg', '', '', 'http://demo.camwel.org/demo/dsa/uploads/customer_all_document/aadhar_demo8.jpeg', 'http://demo.camwel.org/demo/dsa/uploads/customer_all_document/aadhar_demo9.jpeg', '', '', '', '', '', '', 1, '2023-08-24', '2023-08-24 12:37:01', 1, ''),
(22, '848681', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2023-08-24', '2023-08-24 12:39:51', 1, ''),
(23, '193601', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', 30, '2023-08-26', '2023-11-13 07:11:06', 3, 'CIBIL IS LOW'),
(24, '897518', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', 37, '2023-11-16', '2023-11-16 05:45:13', 2, 'All Document Varified'),
(25, '588028', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', 30, '2023-12-15', '2023-12-15 11:24:07', 3, 'ADDHAR NUMBER IS INVALID');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_by_user_id` int(11) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `created_by_user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 1, 1, '2021-12-30', '2023-04-04 10:10:50');

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
  `aadhar_card_no` int(100) NOT NULL,
  `aadhar_image` varchar(100) NOT NULL,
  `pan_no` varchar(100) NOT NULL,
  `pan_image` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `account_no` varchar(100) NOT NULL,
  `ifsc_code` varchar(100) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `created_by_user_type_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_id`, `name`, `dob`, `address`, `mobile_no`, `email`, `aadhar_card_no`, `aadhar_image`, `pan_no`, `pan_image`, `password`, `account_no`, `ifsc_code`, `branch_name`, `bank_name`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(18, '553652', 'SURESH KUMAR', '1998-01-01', 'BHAGWAT NAGAR CHAURAHA, NEAR- PUSHPANJALI HOSPITAL, KUMHRAR , PATNA-800026', '08547258742', 'emp@gmail.com', 2147483647, '', '8449484', '', '123456', '', '', '', '', 1, '2023-07-07', '2023-07-07 07:19:53', 1);

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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_type`
--

INSERT INTO `loan_type` (`id`, `loan_type_name`, `document`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(3, 'Personal Loan', '1,2,3,4,5,6,7,11,12', 1, '2023-05-11', '2023-05-11 11:45:35', 1),
(4, 'Gold Loan', '1,2,3,4,5,6,7', 1, '2023-05-12', '2023-06-13 08:00:52', 1),
(5, 'Education Loan', '1,3,4,6,7,16', 1, '2023-05-12', '2023-06-13 08:00:54', 1),
(6, 'car loan', '1,2,3,4,6,7,10,11', 1, '2023-06-13', '2023-06-13 11:43:24', 1),
(7, 'TWO Wheeler LOAN', '1,2,3,4,5,6,7,12,13,15', 1, '2023-11-13', '2023-11-13 07:05:24', 1),
(8, 'Credit card', '1,2,3,4,6,7,8,11,12', 1, '2023-12-22', '2023-12-22 11:04:38', 1),
(9, 'Insurance', '1,2,3,4,5,6,7,8', 1, '2023-12-22', '2023-12-22 11:13:58', 1);

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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pledged_category`
--

INSERT INTO `pledged_category` (`id`, `pledged_assets_name`, `description`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(4, 'Property Paper', 'fdtgfgdfgfdgfdg', 1, '2023-05-10', '2023-05-10 07:46:13', 1),
(5, 'Gold', 'sdfasdffdf', 1, '2023-05-10', '2023-05-10 07:47:13', 1),
(6, 'FD BOND', 'DCFDSFF', 1, '2023-05-29', '2023-06-13 06:18:27', 1),
(7, 'Property Document', 'document', 1, '2023-06-13', '2023-06-13 11:41:08', 1),
(8, 'LIC BOND', 'LIC POLICY BOND PAPER', 1, '2023-08-24', '2023-10-27 09:44:38', 1);

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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_document`
--

INSERT INTO `sub_document` (`id`, `document_name`, `sub_document_name`, `description`, `created_by_user_type_id`, `created_at`, `updated_at`, `status`) VALUES
(1, '1', 'Aadhar Card', 'sdfdsg', 1, '2023-04-14', '2023-04-14 11:15:07', 1),
(2, '1', 'Pan Card', 'rtertr', 1, '2023-04-14', '2023-04-14 11:15:22', 1),
(3, '2', 'Aadhar Card', 'fghgfhfgh', 1, '2023-04-14', '2023-04-14 11:16:15', 1),
(4, '2', 'Pass Port Size', 'dfgdfg', 1, '2023-04-14', '2023-04-15 05:42:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `system_config`
--

CREATE TABLE `system_config` (
  `id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_address` varchar(200) NOT NULL,
  `company_url` varchar(200) NOT NULL,
  `default_timezone` int(10) NOT NULL,
  `session_timeout` int(10) NOT NULL,
  `inactive_timeout` int(1) NOT NULL,
  `max_file_size` int(11) NOT NULL,
  `allowed_file_types` varchar(200) NOT NULL,
  `default_time_format` varchar(100) NOT NULL,
  `default_date_format` varchar(100) NOT NULL,
  `default_date_time_format` varchar(100) NOT NULL,
  `updates_enabled` int(1) NOT NULL,
  `error_reporting` int(1) NOT NULL
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
  `login_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
(451, 'admin@g.com', '1', '192.168.1.1', 'Chrome 120.0.0.0, Windows 10', '2023-12-30 10:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `agent_id` varchar(100) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `department_type` int(5) NOT NULL COMMENT '1.super_admin\r\n2.agent\r\n3.employee\r\n4.customer',
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `show_ps` varchar(200) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'uploads/user/no_image.png',
  `status` int(1) NOT NULL DEFAULT 1,
  `created_by_user_id` varchar(10) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `agent_id`, `employee_id`, `customer_id`, `department_type`, `email`, `password`, `show_ps`, `name`, `address`, `mobile`, `photo`, `status`, `created_by_user_id`, `created_at`, `update_at`) VALUES
(1, '', '', '', 1, 'admin@g.com', '1593ea35effffa72e44264f78de0a25a', '1593ea35effffa72e44264f78de0a25a', 'Admin', 'Patna', '9874335133', 'uploads/user/admin.png', 1, '1', '2022-06-02', '2023-04-05 12:17:23'),
(40, '', '', '193601', 4, 'sohan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'sohan kumar', 'patna', '9878974365', 'uploads/user/no_image.png', 1, '30', '2023-08-26', '2023-08-26 01:09:09'),
(39, '', '', '848681', 4, 'alok@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '123456', 'KUNDAN THAKUR', 'PATNA', '9876543210', 'uploads/user/no_image.png', 1, '1', '2023-08-24', '2023-08-24 12:39:51'),
(38, '', '', '229157', 4, 'alok@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '123456', 'AJAY K,UMAR', 'PATNA', '9876543210', 'uploads/user/no_image.png', 1, '1', '2023-08-24', '2023-08-24 12:37:01'),
(37, '944127', '', '', 2, 'alok@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'ALOK KUMAR', 'PATNA', '9875452111', 'uploads/user/no_image.png', 1, '1', '2023-08-24', '2023-08-24 11:46:16'),
(36, '', '', '101004', 4, 'suraj@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'SURAJ KUMAR', 'PATNA', '85555555', 'uploads/user/no_image.png', 1, '30', '2023-07-07', '2023-07-07 11:07:35'),
(35, '', '', '601247', 4, 'sant@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'SANTOSH KUMAR', 'PATNA', '09921177888', 'uploads/user/no_image.png', 1, '30', '2023-07-07', '2023-07-07 11:00:43'),
(34, '', '', '895459', 4, 'support@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'RAJU KUMAR', 'PATNA', '09921177888', 'uploads/user/no_image.png', 1, '30', '2023-07-07', '2023-07-07 10:58:04'),
(33, '', '', '443933', 4, 'demo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'SUMIT KUMAR', 'BHAGWAT NAGAR CHAURAHA, NEAR- PUSHPANJALI HOSPITAL, KUMHRAR, PATNA', '790336326', 'uploads/user/no_image.png', 1, '30', '2023-07-07', '2023-07-07 07:25:40'),
(32, '', '', '769852', 4, 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'SURAJ KUMAR', 'PATNA', '8745852158', 'uploads/user/no_image.png', 1, '30', '2023-07-07', '2023-07-07 07:24:19'),
(31, '', '553652', '', 3, 'emp@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'SURESH KUMAR', 'BHAGWAT NAGAR CHAURAHA, NEAR- PUSHPANJALI HOSPITAL, KUMHRAR , PATNA-800026', '08547258742', 'uploads/user/no_image.png', 1, '1', '2023-07-07', '2023-07-07 07:19:53'),
(30, '905936', '', '', 2, 'agent@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'RAJU KUMAR', 'PATNA', '8569745858', 'uploads/user/no_image.png', 1, '1', '2023-07-07', '2023-07-07 07:18:51'),
(41, '', '', '897518', 4, 'annapurnamorganfinance@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'AMAN KUMAR', 'H.N14, ARFABAD COLONY, BAJRANGPURI,', '09431840840', 'uploads/user/no_image.png', 1, '37', '2023-11-16', '2023-11-16 05:44:40'),
(42, '', '', '588028', 4, 'pradhanprakash1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'Prakash Pradhan', 'SCR 28 Kharavelanagar', '5236854258', 'uploads/user/no_image.png', 1, '30', '2023-12-15', '2023-12-15 11:18:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `business_type`
--
ALTER TABLE `business_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `commission_category`
--
ALTER TABLE `commission_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `commission_earning`
--
ALTER TABLE `commission_earning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `commission_payment_details`
--
ALTER TABLE `commission_payment_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `customer_document`
--
ALTER TABLE `customer_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `loan_type`
--
ALTER TABLE `loan_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pledged_category`
--
ALTER TABLE `pledged_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_document`
--
ALTER TABLE `sub_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=452;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
