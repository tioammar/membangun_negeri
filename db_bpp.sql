-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2017 at 03:55 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `assurance`
--

CREATE TABLE `assurance` (
  `id` int(11) NOT NULL,
  `witel` varchar(20) NOT NULL,
  `segment` varchar(15) NOT NULL,
  `v1_1` float NOT NULL,
  `v1_2` float NOT NULL,
  `v1_3` float NOT NULL,
  `v1_4` float NOT NULL,
  `v1_5` float NOT NULL,
  `v1_6` float NOT NULL,
  `v1_7` float NOT NULL,
  `v1_8` float NOT NULL,
  `v1_9` float NOT NULL,
  `v1_10` float NOT NULL,
  `v1_11` float NOT NULL,
  `v1_12` float NOT NULL,
  `v2_1` float NOT NULL,
  `v2_2` float NOT NULL,
  `v2_3` float NOT NULL,
  `v2_4` float NOT NULL,
  `v2_5` float NOT NULL,
  `v2_6` float NOT NULL,
  `v2_7` float NOT NULL,
  `v2_8` float NOT NULL,
  `v2_9` float NOT NULL,
  `v2_10` float NOT NULL,
  `v2_11` float NOT NULL,
  `v2_12` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assurance`
--

INSERT INTO `assurance` (`id`, `witel`, `segment`, `v1_1`, `v1_2`, `v1_3`, `v1_4`, `v1_5`, `v1_6`, `v1_7`, `v1_8`, `v1_9`, `v1_10`, `v1_11`, `v1_12`, `v2_1`, `v2_2`, `v2_3`, `v2_4`, `v2_5`, `v2_6`, `v2_7`, `v2_8`, `v2_9`, `v2_10`, `v2_11`, `v2_12`) VALUES
(1, 'MAKASAR', 'slg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'SULSELBAR', 'slg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'SULTENG', 'slg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'GORONTALO', 'slg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'SULUT & MALUT', 'slg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'SULTRA', 'slg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'MALUKU', 'slg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'PAPUA BARAT', 'slg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'PAPUA', 'slg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'MAKASAR', 'gaul', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'SULSELBAR', 'gaul', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'SULTENG', 'gaul', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'GORONTALO', 'gaul', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'SULUT & MALUT', 'gaul', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'SULTRA', 'gaul', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'MALUKU', 'gaul', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'PAPUA BARAT', 'gaul', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'PAPUA', 'gaul', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'MAKASAR', 'q_ggn', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'SULSELBAR', 'q_ggn', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'SULTENG', 'q_ggn', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'GORONTALO', 'q_ggn', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'SULUT & MALUT', 'q_ggn', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'SULTRA', 'q_ggn', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'MALUKU', 'q_ggn', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'PAPUA BARAT', 'q_ggn', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'PAPUA', 'q_ggn', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 'TR7', 'q_ggn', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 'TR7', 'slg', 20399, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 18974, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 'TR7', 'gaul', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `km`
--

CREATE TABLE `km` (
  `id` int(11) NOT NULL,
  `l_1` text NOT NULL,
  `l_2` text NOT NULL,
  `l_3` text NOT NULL,
  `l_4` text NOT NULL,
  `unit` varchar(5) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `bobot_tw1` float NOT NULL,
  `bobot_tw2` float NOT NULL,
  `bobot_tw3` float NOT NULL,
  `bobot_tw4` float NOT NULL,
  `tar_tw1` varchar(11) NOT NULL,
  `tar_tw2` varchar(11) NOT NULL,
  `tar_tw3` varchar(11) NOT NULL,
  `tar_tw4` varchar(11) NOT NULL,
  `real_tw1` varchar(11) NOT NULL,
  `real_tw2` varchar(11) NOT NULL,
  `real_tw3` varchar(11) NOT NULL,
  `real_tw4` varchar(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `stt_tw1` varchar(11) NOT NULL,
  `stt_tw2` varchar(11) NOT NULL,
  `stt_tw3` varchar(11) NOT NULL,
  `stt_tw4` varchar(11) NOT NULL,
  `evid_tw1` varchar(100) NOT NULL,
  `evid_tw2` varchar(100) NOT NULL,
  `evid_tw3` varchar(100) NOT NULL,
  `evid_tw4` varchar(100) NOT NULL,
  `len` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `km`
--

INSERT INTO `km` (`id`, `l_1`, `l_2`, `l_3`, `l_4`, `unit`, `satuan`, `tahun`, `bobot_tw1`, `bobot_tw2`, `bobot_tw3`, `bobot_tw4`, `tar_tw1`, `tar_tw2`, `tar_tw3`, `tar_tw4`, `real_tw1`, `real_tw2`, `real_tw3`, `real_tw4`, `type`, `stt_tw1`, `stt_tw2`, `stt_tw3`, `stt_tw4`, `evid_tw1`, `evid_tw2`, `evid_tw3`, `evid_tw4`, `len`) VALUES
(1, 'Financial', 'CFU Perspective', 'Regional Unconsol', 'Consumer', 'CCM', 'Rp. M', '2017', 3, 0, 0, 0, '50', '', '', '', '70', '', '', '', 'normal', 'edited', '', '', '', '', '', '', '', 4),
(2, 'Financial', 'CFU Perspective', 'Regional Unconsol', 'EGBIS', 'EGBIS', 'Rp. T', '2017', 4, 0, 0, 0, '100', '', '', '', '100', '', '', '', 'normal', '', '', '', '', '', '', '', '', 4),
(3, 'Financial', 'Telkom Consolidated', 'Revenue Growth', '', 'CCM', '%', '2017', 3, 0, 0, 0, '12', '', '', '', '10', '', '', '', 'down', 'released', '', '', '', '', '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL,
  `unit` varchar(10) NOT NULL,
  `user_nik` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL,
  `owner` varchar(10) NOT NULL,
  `unit` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quickwin`
--

CREATE TABLE `quickwin` (
  `id` int(11) NOT NULL,
  `program` varchar(50) NOT NULL,
  `unit` varchar(5) NOT NULL,
  `tar_w1` float NOT NULL,
  `tar_w2` float NOT NULL,
  `tar_w3` float NOT NULL,
  `tar_w4` float NOT NULL,
  `tar_w5` float NOT NULL,
  `tar_w6` float NOT NULL,
  `real_w1` float NOT NULL,
  `stt_w1` varchar(10) NOT NULL,
  `real_w2` float NOT NULL,
  `stt_w2` varchar(10) NOT NULL,
  `real_w3` float NOT NULL,
  `stt_w3` varchar(10) NOT NULL,
  `real_w4` float NOT NULL,
  `stt_w4` varchar(10) NOT NULL,
  `real_w5` float NOT NULL,
  `stt_w5` varchar(10) NOT NULL,
  `real_w6` float NOT NULL,
  `stt_w6` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE `revenue` (
  `id` int(11) NOT NULL,
  `witel` varchar(20) NOT NULL,
  `segment` varchar(15) NOT NULL,
  `tar_1` float NOT NULL,
  `tar_2` float NOT NULL,
  `tar_3` float NOT NULL,
  `tar_4` float NOT NULL,
  `tar_5` float NOT NULL,
  `tar_6` float NOT NULL,
  `tar_7` float NOT NULL,
  `tar_8` float NOT NULL,
  `tar_9` float NOT NULL,
  `tar_10` float NOT NULL,
  `tar_11` float NOT NULL,
  `tar_12` float NOT NULL,
  `real_1` float NOT NULL,
  `real_2` float NOT NULL,
  `real_3` float NOT NULL,
  `real_4` float NOT NULL,
  `real_5` float NOT NULL,
  `real_6` float NOT NULL,
  `real_7` float NOT NULL,
  `real_8` float NOT NULL,
  `real_9` float NOT NULL,
  `real_10` float NOT NULL,
  `real_11` float NOT NULL,
  `real_12` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `revenue`
--

INSERT INTO `revenue` (`id`, `witel`, `segment`, `tar_1`, `tar_2`, `tar_3`, `tar_4`, `tar_5`, `tar_6`, `tar_7`, `tar_8`, `tar_9`, `tar_10`, `tar_11`, `tar_12`, `real_1`, `real_2`, `real_3`, `real_4`, `real_5`, `real_6`, `real_7`, `real_8`, `real_9`, `real_10`, `real_11`, `real_12`) VALUES
(1, 'MAKASAR', 'Consumer', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'SULSELBAR', 'Consumer', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'SULTENG', 'Consumer', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'GORONTALO', 'Consumer', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'SULUT & MALUT', 'Consumer', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'SULTRA', 'Consumer', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'MALUKU', 'Consumer', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'PAPUA BARAT', 'Consumer', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'PAPUA', 'Consumer', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'MAKASAR', 'Wholesale', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'SULSELBAR', 'Wholesale', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'SULTENG', 'Wholesale', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'GORONTALO', 'Wholesale', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'SULUT & MALUT', 'Wholesale', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'SULTRA', 'Wholesale', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'MALUKU', 'Wholesale', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'PAPUA BARAT', 'Wholesale', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'PAPUA', 'Wholesale', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'MAKASAR', 'EGBIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'SULSELBAR', 'EGBIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'SULTENG', 'EGBIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'GORONTALO', 'EGBIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'SULUT & MALUT', 'EGBIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'SULTRA', 'EGBIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'MALUKU', 'EGBIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'PAPUA BARAT', 'EGBIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'PAPUA', 'EGBIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assurance`
--
ALTER TABLE `assurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `km`
--
ALTER TABLE `km`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quickwin`
--
ALTER TABLE `quickwin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revenue`
--
ALTER TABLE `revenue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `km`
--
ALTER TABLE `km`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quickwin`
--
ALTER TABLE `quickwin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
