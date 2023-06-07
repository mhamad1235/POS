-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 08:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recordsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `name` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`name`, `value`, `id`) VALUES
('bank', '809', 1);

-- --------------------------------------------------------

--
-- Table structure for table `casher`
--

CREATE TABLE `casher` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `casher`
--

INSERT INTO `casher` (`id`, `name`, `password`, `phonenumber`, `location`, `gender`) VALUES
(8, 'mhamad', '789456', '07452311', 'Koya', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `dept` varchar(200) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `location`, `phonenumber`, `dept`) VALUES
(9, 'HF', 'halwer', '07736947018', '0'),
(10, 'mhamdsalim', 'Koya', '07736947019', '0');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `phonenumber` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `location`, `phonenumber`, `gender`, `dept`) VALUES
(15, 'mhamad', 'Koya', '07736947025', 'male', '0'),
(16, 'dawan', 'halwer', '077503652', 'male', '100');

-- --------------------------------------------------------

--
-- Table structure for table `deptcompany`
--

CREATE TABLE `deptcompany` (
  `id` int(100) NOT NULL,
  `id_wasl` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`name`)),
  `type` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`type`)),
  `barcode` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`barcode`)),
  `price` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`price`)),
  `number` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`number`)),
  `payed` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deptcompany`
--

INSERT INTO `deptcompany` (`id`, `id_wasl`, `company`, `name`, `type`, `barcode`, `price`, `number`, `payed`, `dept`, `date`) VALUES
(37, '1', 'HF', '[\"Product 2\"]', '[\"klens\"]', '[\"21462145\"]', '[\"5\"]', '[\"5\"]', '25', '0', '2023-05-01'),
(38, '2', 'HF', '[\"Product 1\"]', '[\"shamo\"]', '[\"746541\"]', '[\"10\"]', '[\"10\"]', '100', '0', '2023-05-01'),
(39, '1', 'HF', '[\"Product 2\",\"Product 1\"]', '[\"shmpo\",\"shmpo\"]', '[\"12441\",\"4185324\"]', '[\"5\",\"10\"]', '[\"5\",\"10\"]', '125', '0', '2023-05-02'),
(40, '2', 'jalal', '[\"danana\"]', '[\"jbs\"]', '[\"653263253\"]', '[\"5\"]', '[\"10\"]', '50', '0', '2023-06-01'),
(41, '3', 'HF', '[\"Product\"]', '[\"shmpo\"]', '[\"1244\"]', '[\"10\"]', '[\"10\"]', '100', '0', '2023-06-01'),
(42, '4', 'jalal', '[\"HF\"]', '[\"shmpo\"]', '[\"5421\"]', '[\"100\"]', '[\"20\"]', '20', '1980', '2023-06-01'),
(43, '5', 'jalal', '[\"gzbsty\"]', '[\"ice cream\"]', '[\"6291103985453\"]', '[\"5\"]', '[\"5\"]', '25', '0', '2023-06-02'),
(44, '5', 'jalal', '[\"gzbsty\"]', '[\"ice cream\"]', '[\"6291103985453\"]', '[\"5\"]', '[\"5\"]', '25', '0', '2023-06-02'),
(45, '5', 'jalal', '[\"gzbsty\"]', '[\"ice cream\"]', '[\"6291103985453\"]', '[\"5\"]', '[\"5\"]', '25', '0', '2023-06-02'),
(46, '6', 'HF', '[\"mus\"]', '[\"jbs\"]', '[\"8908011719954\"]', '[\"1\"]', '[\"6\"]', '6', '0', '2023-06-02'),
(47, '7', 'jalal', '[\"kindar\"]', '[\"shmpo\"]', '[\"80177609\"]', '[\"5\"]', '[\"10\"]', '50', '0', '2023-06-02'),
(48, '8', 'HF', '[\"spra\"]', '[\"shmpo\"]', '[\"6970493400783\"]', '[\"5\"]', '[\"5\"]', '25', '0', '2023-06-02'),
(49, '9', 'HF', '[\"daftar\"]', '[\"shmpo\"]', '[\"6895254121861\"]', '[\"1\"]', '[\"1\"]', '1', '0', '2023-06-02'),
(50, '10', 'HF', '[\"rola\"]', '[\"shmpo\"]', '[\"6902540752361\"]', '[\"1\"]', '[\"5\"]', '5', '0', '2023-06-02'),
(51, '11', 'jalal', '[\"gzbsty\"]', '[\"shmpo\"]', '[\"6261754606427\"]', '[\"1\"]', '[\"10\"]', '10', '0', '2023-06-02'),
(52, '12', 'HF', '[\"mountain dew\"]', '[\"dew\"]', '[\"6212201121093\"]', '[\"2\"]', '[\"2\"]', '4', '0', '2023-06-02'),
(53, '13', 'HF', '[\"mus\"]', '[\"jbs\"]', '[\"8908011719954\"]', '[\"1\"]', '[\"10\"]', '10', '0', '2023-06-03'),
(54, '14', 'HF', '[\"product 4\",\"HF\"]', '[\"jbs\",\"shmpo\"]', '[\"1254555\",\"5421\"]', '[\"5\",\"5\"]', '[\"20\",\"10\"]', '150', '0', '2023-06-07'),
(55, '15', 'HF', '[\"Product 2\",\"Product 3\",\"Product 1\"]', '[\"shmpo\",\"jbs\",\"shmpo\"]', '[\"1244\",\"8908011719954\",\"5421\"]', '[\"1\",\"2\",\"10\"]', '[\"5\",\"3\",\"10\"]', '111', '0', '2023-06-07'),
(56, '16', 'HF', '[\"P 1\",\"p 3\",\"p 2\"]', '[\"kek\",\"shmpo\",\"kek\"]', '[\"1244\",\"8908011719954\",\"5421\"]', '[\"1\",\"5\",\"20\"]', '[\"10\",\"10\",\"20\"]', '460', '0', '2023-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `id_wasl` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `barcode` varchar(300) NOT NULL,
  `bussinessname` varchar(100) NOT NULL,
  `buy` int(100) NOT NULL,
  `sell` int(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL DEFAULT '0',
  `expired` date NOT NULL DEFAULT current_timestamp(),
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_wasl`, `name`, `type`, `barcode`, `bussinessname`, `buy`, `sell`, `number`, `total`, `dept`, `expired`, `date`) VALUES
(171, 1, 'Product 2  expired', 'shmpo', '12441', 'HF', 5, 10, '2', '25', '0', '2023-05-25', '2023-05-02'),
(172, 1, 'Product 1  expired', 'shmpo', '4185324', 'HF', 10, 12, '8', '100', '0', '2023-05-31', '2023-05-02'),
(173, 2, 'danana', 'jbs', '653263253', 'jalal', 5, 10, '4', '50', '0', '2023-06-26', '2023-06-01'),
(174, 3, 'Product', 'shmpo', '1244', 'HF', 10, 100, '4', '100', '0', '2023-06-27', '2023-06-01'),
(175, 4, 'HF', 'shmpo', '5421', 'jalal', 100, 200, '17', '2000', '20', '2023-06-29', '2023-06-01'),
(177, 6, 'mus zero', 'jbs', '8908011719954', 'HF', 1, 5, '0', '6', '0', '2023-06-28', '2023-06-02'),
(178, 7, 'kindar', 'shmpo', '80177609', 'jalal', 5, 10, '10', '50', '0', '2023-06-28', '2023-06-02'),
(179, 8, 'spra', 'shmpo', '6970493400783', 'HF', 5, 10, '5', '25', '0', '2023-06-20', '2023-06-02'),
(180, 9, 'daftar', 'shmpo', '6895254121861', 'HF', 1, 3, '1', '1', '0', '2023-06-19', '2023-06-02'),
(181, 10, 'rola', 'shmpo', '6902540752361', 'HF', 1, 2, '5', '5', '0', '2023-06-21', '2023-06-02'),
(182, 11, 'gzbsty', 'shmpo', '6261754606427', 'jalal', 1, 2, '10', '10', '0', '2023-06-27', '2023-06-02'),
(183, 12, 'mountain dew', 'dew', '6212201121093', 'HF', 2, 3, '2', '4', '0', '2023-06-27', '2023-06-02'),
(184, 13, 'mus', 'jbs', '8908011719954', 'HF', 1, 6, '8', '10', '0', '2023-06-26', '2023-06-03'),
(185, 14, 'product 4', 'jbs', '1254555', 'HF', 5, 10, '20', '100', '0', '2023-09-27', '2023-06-07'),
(186, 14, 'HF', 'shmpo', '5421', 'HF', 5, 20, '10', '50', '0', '2023-06-30', '2023-06-07'),
(187, 15, 'Product 2 zero', 'shmpo', '1244', 'HF', 1, 5, '0', '5', '0', '2023-09-21', '2023-06-07'),
(188, 15, 'Product 3', 'jbs', '8908011719954', 'HF', 2, 10, '2', '6', '0', '2023-09-21', '2023-06-07'),
(189, 15, 'Product 1', 'shmpo', '5421', 'HF', 10, 20, '9', '100', '0', '2023-06-29', '2023-06-07'),
(190, 16, 'P 1', 'kek', '1244', 'HF', 1, 5, '5', '10', '0', '2023-06-28', '2023-06-07'),
(191, 16, 'p 3', 'shmpo', '8908011719954', 'HF', 5, 10, '7', '50', '0', '2023-11-21', '2023-06-07'),
(192, 16, 'p 2', 'kek', '5421', 'HF', 20, 30, '11', '400', '0', '2024-09-16', '2023-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `productinfo`
--

CREATE TABLE `productinfo` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `barcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productinfo`
--

INSERT INTO `productinfo` (`id`, `name`, `type`, `barcode`) VALUES
(47, 'Product', 'shmpo', '54219565'),
(48, 'Product', 'shmpo', '12444444421'),
(49, 'Product', 'shmpo', '896556568'),
(50, 'P 1', 'kek', '1244'),
(51, 'p 2', 'kek', '5421'),
(52, 'p 3', 'shmpo', '8908011719954');

-- --------------------------------------------------------

--
-- Table structure for table `sellproduct`
--

CREATE TABLE `sellproduct` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `barcode` int(100) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `index` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `casher_id` int(100) NOT NULL,
  `total_profit` int(200) NOT NULL,
  `payed` varchar(200) NOT NULL,
  `date` date DEFAULT NULL,
  `dept` varchar(200) NOT NULL DEFAULT '0',
  `name_product` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '\'[]\'',
  `quantity` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`quantity`)),
  `nrx_tak` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`nrx_tak`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellproduct`
--

INSERT INTO `sellproduct` (`id`, `name`, `type`, `barcode`, `customer`, `index`, `p_id`, `casher_id`, `total_profit`, `payed`, `date`, `dept`, `name_product`, `quantity`, `nrx_tak`) VALUES
(306, '0', '0', 0, 'Dawan', 0, 0, -1, 19, '54', '2023-05-02', '0', '[\"Product 2\",\"Product 1\"]', '[\"3\",\"2\"]', '[10,12]'),
(307, '0', '0', 0, 'Dawan', 0, 0, -1, 105, '130', '2023-06-01', '0', '[\"danana\",\"Product\"]', '[\"3\",\"1\"]', '[10,100]'),
(308, '0', '0', 0, 'Dawan', 0, 0, -1, 0, '10', '2023-06-01', '10', '[\"danana\"]', '[\"2\"]', '[10]'),
(309, '0', '0', 0, 'Dawan', 0, 0, -1, 175, '5', '2023-06-01', '195', '[\"Product\"]', '[\"2\"]', '[100]'),
(310, '0', '0', 0, 'Dawan', 0, 0, -1, 195, '310', '2023-06-02', '0', '[\"danana\",\"HF\",\"Product\"]', '[\"1\",\"1\",\"1\"]', '[10,100,200]'),
(311, '0', '0', 0, 'Dawan', 0, 0, -1, 194, '305', '2023-06-02', '0', '[\"mus\",\"Product\",\"HF\"]', '[\"1\",\"1\",\"1\"]', '[100,200,5]'),
(312, '0', '0', 0, 'Dawan', 0, 0, -1, 4, '5', '2023-06-02', '0', '[\"mus\"]', '[\"1\"]', '[5]'),
(313, '0', '0', 0, 'Dawan', 0, 0, -1, 16, '20', '2023-06-02', '0', '[\"mus\"]', '[\"4\"]', '[5]'),
(315, '0', '0', 0, 'Dawan', 0, 0, -1, 5, '6', '2023-06-03', '0', '[\"mus\"]', '[\"1\"]', '[6]'),
(316, '0', '0', 0, 'mhamad', 0, 0, -1, 22, '35', '2023-06-07', '0', '[\"Product 1\",\"Product 2\",\"Product 3\"]', '[\"1\",\"1\",\"1\"]', '[5,10,20]'),
(317, '0', '0', 0, 'dawan', 0, 0, -1, 73, '190', '2023-06-07', '0', '[\"P 1\",\"p 2\",\"p 3\"]', '[\"2\",\"3\",\"5\"]', '[5,10,30]'),
(318, '0', '0', 0, 'dawan', 0, 0, -1, 42, '10', '2023-06-07', '125', '[\"p 2\",\"P 1\"]', '[\"3\",\"4\"]', '[5,30]');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(10, 'shmpo'),
(11, 'jbs'),
(12, 'ice cream'),
(13, 'dew'),
(14, 'lastik'),
(15, 'kek');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casher`
--
ALTER TABLE `casher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `deptcompany`
--
ALTER TABLE `deptcompany`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productinfo`
--
ALTER TABLE `productinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellproduct`
--
ALTER TABLE `sellproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `casher`
--
ALTER TABLE `casher`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `deptcompany`
--
ALTER TABLE `deptcompany`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `productinfo`
--
ALTER TABLE `productinfo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `sellproduct`
--
ALTER TABLE `sellproduct`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
