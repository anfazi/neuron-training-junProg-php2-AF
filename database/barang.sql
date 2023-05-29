-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 29, 2023 at 01:44 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_elektronik`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int NOT NULL,
  `ketersediaan` enum('Ya','Tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `harga`, `ketersediaan`, `created_at`, `updated_at`) VALUES
(24, 'Powerbank Samsung', 200000, 'Ya', NULL, NULL),
(25, 'Powerbank Sony', 250000, 'Ya', NULL, NULL),
(26, 'Charger Android', 50000, 'Ya', NULL, NULL),
(27, 'Charger Android Type C to C', 75000, 'Ya', NULL, NULL),
(28, 'Charger Iphone', 50000, 'Ya', NULL, NULL),
(29, 'Kabel USB Type A', 50000, 'Tidak', NULL, NULL),
(30, 'Kabel USB Type C', 75000, 'Ya', NULL, NULL),
(31, 'Kabel Iphone', 100000, 'Tidak', NULL, NULL),
(32, 'Charger Docking Mobil', 125000, 'Tidak', NULL, NULL),
(33, 'Charger Docking Motor', 100000, 'Ya', NULL, NULL),
(34, 'Case Android', 50000, 'Ya', NULL, NULL),
(35, 'Case Iphone', 100000, 'Ya', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
