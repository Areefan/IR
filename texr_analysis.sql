-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 28, 2018 at 04:12 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `texr_analysis`
--

-- --------------------------------------------------------

--
-- Table structure for table `table 1`
--

CREATE TABLE `table 1` (
  `term` varchar(20) NOT NULL,
  `id_term` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table 1`
--

INSERT INTO `table 1` (`term`, `id_term`) VALUES
('activity', '1'),
('computational', '10'),
('computer', '11'),
('data', '12'),
('design', '13'),
('designed', '14'),
('devices', '15'),
('electronic', '16'),
('embedded', '17'),
('engine', '18'),
('experimentation', '19'),
('application', '2'),
('extraction', '20'),
('global', '21'),
('hardware', '22'),
('home', '23'),
('indexing', '24'),
('Information', '25'),
('interconnected', '26'),
('Internet', '27'),
('language', '28'),
('linked', '29'),
('automatically', '3'),
('network', '30'),
('networks', '31'),
('obtaining', '32'),
('organization', '33'),
('organized', '34'),
('parses', '35'),
('parts', '36'),
('perform', '37'),
('physical', '38'),
('processing', '39'),
('based', '4'),
('program', '40'),
('programs', '41'),
('resources', '42'),
('retrieval', '43'),
('science', '44'),
('Search', '45'),
('searching', '46'),
('short', '47'),
('simply', '48'),
('software', '49'),
('card', '5'),
('storage', '50'),
('stores', '51'),
('structured', '52'),
('study', '53'),
('system', '54'),
('task', '55'),
('theory', '56'),
('vehicles', '57'),
('collection', '6'),
('collects', '7'),
('communication', '8'),
('components', '9');

-- --------------------------------------------------------

--
-- Table structure for table `table 2`
--

CREATE TABLE `table 2` (
  `id` int(11) NOT NULL,
  `id_term` varchar(5) NOT NULL,
  `doc#` varchar(5) NOT NULL,
  `F` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table 2`
--

INSERT INTO `table 2` (`id`, `id_term`, `doc#`, `F`) VALUES
(1, '1', '8', '1'),
(2, '2', '5', '5'),
(3, '3', '10', '1'),
(4, '4', '8', '2'),
(5, '5', '3', '2'),
(6, '6', '7', '1'),
(7, '7', '9', '1'),
(8, '8', '7', '1'),
(9, '9', '3', '1'),
(10, '10', '1', '2'),
(11, '11', '1', '3'),
(12, '11', '2', '9'),
(13, '11', '3', '3'),
(14, '11', '5', '2'),
(15, '12', '2', '3'),
(16, '12', '9', '1'),
(17, '13', '1', '2'),
(18, '14', '5', '1'),
(19, '15', '6', '1'),
(20, '16', '4', '2'),
(21, '17', '6', '2'),
(22, '18', '9', '1'),
(23, '19', '1', '1'),
(24, '20', '10', '4'),
(25, '21', '4', '2'),
(26, '22', '2', '2'),
(27, '22', '3', '4'),
(28, '23', '6', '1'),
(29, '24', '9', '2'),
(30, '25', '7', '2'),
(31, '25', '8', '6'),
(32, '25', '10', '3'),
(33, '26', '4', '1'),
(34, '27', '4', '3'),
(35, '27', '6', '2'),
(36, '28', '10', '2'),
(37, '29', '4', '2'),
(38, '30', '6', '2'),
(39, '31', '4', '3'),
(40, '32', '8', '1'),
(41, '33', '7', '1'),
(42, '34', '7', '1'),
(43, '35', '9', '1'),
(44, '36', '3', '1'),
(45, '37', '5', '1'),
(46, '38', '3', '1'),
(47, '38', '6', '1'),
(48, '39', '10', '3'),
(49, '40', '5', '2'),
(50, '41', '2', '2'),
(51, '42', '8', '2'),
(52, '43', '8', '2'),
(53, '44', '1', '2'),
(54, '45', '9', '2'),
(55, '46', '8', '3'),
(56, '47', '5', '1'),
(57, '48', '2', '1'),
(58, '49', '2', '6'),
(59, '49', '3', '3'),
(60, '49', '5', '2'),
(61, '50', '7', '1'),
(62, '51', '9', '1'),
(63, '52', '10', '2'),
(64, '53', '1', '3'),
(65, '54', '2', '2'),
(66, '54', '4', '1'),
(67, '54', '7', '2'),
(68, '55', '10', '1'),
(69, '56', '1', '2'),
(70, '57', '6', '1'),
(71, 'id_te', 'doc#', 'F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table 1`
--
ALTER TABLE `table 1`
  ADD PRIMARY KEY (`id_term`);

--
-- Indexes for table `table 2`
--
ALTER TABLE `table 2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table 2`
--
ALTER TABLE `table 2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
