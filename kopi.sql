-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 08:28 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kopi_id` int(255) NOT NULL,
  `nama_kopi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datakopi`
--

CREATE TABLE `datakopi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namakopi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketersediaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datakopi`
--

INSERT INTO `datakopi` (`id`, `namakopi`, `ketersediaan`, `keterangan`, `harga`, `jenis`, `gambar`, `created_at`, `updated_at`) VALUES
(20, 'Gesha', '10', '250gr', '30000', 'Bubuk', 'assets/gambar/lI937c6XViwVjyIRTB0SCN5agarUscxah4QhxsNe.jpg', NULL, NULL),
(21, 'Jamaika', '50', '250gr', '50000', 'Bubuk', 'assets/gambar/pA5z6wpBsjyfUOvKGP0g3c7GQsmkAIgB5ThxicZf.jpg', NULL, NULL),
(22, 'Catimor', '5', '250gr', '55000', 'Bubuk', 'assets/gambar/RRN61ILcPch1QERmhX8YOJscRHigb346ydjXwDtf.jpg', NULL, NULL),
(23, 'Liberika', '10', '500gr', '30000', 'Bubuk', 'assets/gambar/rkY9s0ivvbNMPD6EosS2aiLsy7RuWh4RRp1u9UHs.jpg', NULL, NULL),
(24, 'Arabica', '25', '500gr', '40000', 'Bubuk', 'assets/gambar/fGEaAc7HOKuudtF66BRLBin9Jwxlh0AeIiQ1XBpo.jpg', NULL, NULL),
(25, 'Robusta', '35', '500gr', '60000', 'Bubuk', 'assets/gambar/FvJsnMD5qtuIhXaFEX0PAsIirB78HUmKa7pWx5GL.jpg', NULL, NULL),
(26, 'Luwak', '30', '500gr', '60000', 'Bubuk', 'assets/gambar/Ar3HE6KB1NTfEw7rf88Dt3qMmzsNOhga4YpjyKnM.jpg', NULL, NULL),
(27, 'Toraja', '20', '500gr', '70000', 'Bubuk', 'assets/gambar/Bcdthw3lBYkGkB23f6481eGxij0bfMPPK6sOczCk.jpg', NULL, NULL),
(28, 'Excelsa', '15', '500gr', '90000', 'Bubuk', 'assets/gambar/YcmYN9tamSrTRxSDY2bHXBQZ6FELfJxiXsl6rKb3.jpg', NULL, NULL),
(29, 'Gayo', '20', '500gr', '45000', 'Bubuk', 'assets/gambar/x4FJY4cRJeVnB9MNVqVaurNtC384Kv7sORUJxH4c.jpg', NULL, NULL),
(30, 'Gesha', '15', '500gr', '60000', 'Bubuk', 'assets/gambar/lI937c6XViwVjyIRTB0SCN5agarUscxah4QhxsNe.jpg', NULL, NULL),
(31, 'Jamaika', '40', '500gr', '100000', 'Bubuk', 'assets/gambar/pA5z6wpBsjyfUOvKGP0g3c7GQsmkAIgB5ThxicZf.jpg', NULL, NULL),
(32, 'Catimor', '20', '500gr', '11000', 'Bubuk', 'assets/gambar/RRN61ILcPch1QERmhX8YOJscRHigb346ydjXwDtf.jpg', NULL, NULL),
(33, 'Liberika', '30', '1kg', '90000', 'Bubuk', 'assets/gambar/rkY9s0ivvbNMPD6EosS2aiLsy7RuWh4RRp1u9UHs.jpg', NULL, NULL),
(34, 'Arabica', '35', '1kg', '60000', 'Bubuk', 'assets/gambar/fGEaAc7HOKuudtF66BRLBin9Jwxlh0AeIiQ1XBpo.jpg', NULL, NULL),
(35, 'Robusta', '30', '1kg', '90000', 'Bubuk', 'assets/gambar/FvJsnMD5qtuIhXaFEX0PAsIirB78HUmKa7pWx5GL.jpg', NULL, NULL),
(36, 'Luwak', '25', '1kg', '90000', 'Bubuk', 'assets/gambar/Ar3HE6KB1NTfEw7rf88Dt3qMmzsNOhga4YpjyKnM.jpg', NULL, NULL),
(37, 'Toraja', '10', '1kg', '105000', 'Bubuk', 'assets/gambar/Bcdthw3lBYkGkB23f6481eGxij0bfMPPK6sOczCk.jpg', NULL, NULL),
(38, 'Excelsa', '10', '1kg', '135000', 'Bubuk', 'assets/gambar/YcmYN9tamSrTRxSDY2bHXBQZ6FELfJxiXsl6rKb3.jpg', NULL, NULL),
(39, 'Gayo', '10', '1kg', '65000', 'Bubuk', 'assets/gambar/x4FJY4cRJeVnB9MNVqVaurNtC384Kv7sORUJxH4c.jpg', NULL, NULL),
(40, 'Gesha', '10', '1kg', '90000', 'Bubuk', 'assets/gambar/lI937c6XViwVjyIRTB0SCN5agarUscxah4QhxsNe.jpg', NULL, NULL),
(41, 'Jamaika', '20', '1kg', '150000', 'Bubuk', 'assets/gambar/pA5z6wpBsjyfUOvKGP0g3c7GQsmkAIgB5ThxicZf.jpg', NULL, NULL),
(42, 'Catimor', '10', '1kg', '16000', 'Bubuk', 'assets/gambar/RRN61ILcPch1QERmhX8YOJscRHigb346ydjXwDtf.jpg', NULL, NULL),
(43, 'Liberika', '25', '500gr', '25000', 'Biji', 'assets/gambar/rkY9s0ivvbNMPD6EosS2aiLsy7RuWh4RRp1u9UHs.jpg', NULL, NULL),
(44, 'Arabica', '25', '500gr', '55000', 'Biji', 'assets/gambar/fGEaAc7HOKuudtF66BRLBin9Jwxlh0AeIiQ1XBpo.jpg', NULL, NULL),
(45, 'Robusta', '25', '500gr', '50000', 'Biji', 'assets/gambar/FvJsnMD5qtuIhXaFEX0PAsIirB78HUmKa7pWx5GL.jpg', NULL, NULL),
(46, 'Luwak', '25', '500gr', '55000', 'Biji', 'assets/gambar/Ar3HE6KB1NTfEw7rf88Dt3qMmzsNOhga4YpjyKnM.jpg', NULL, NULL),
(47, 'Toraja', '20', '500gr', '65000', 'Biji', 'assets/gambar/Bcdthw3lBYkGkB23f6481eGxij0bfMPPK6sOczCk.jpg', NULL, NULL),
(48, 'Excelsa', '10', '500gr', '80000', 'Biji', 'assets/gambar/YcmYN9tamSrTRxSDY2bHXBQZ6FELfJxiXsl6rKb3.jpg', NULL, NULL),
(49, 'Gayo', '10', '500gr', '40000', 'Biji', 'assets/gambar/x4FJY4cRJeVnB9MNVqVaurNtC384Kv7sORUJxH4c.jpg', NULL, NULL),
(50, 'Gesha', '10', '500gr', '55000', 'Biji', 'assets/gambar/lI937c6XViwVjyIRTB0SCN5agarUscxah4QhxsNe.jpg', NULL, NULL),
(51, 'Jamaika', '10', '500gr', '90000', 'Biji', 'assets/gambar/pA5z6wpBsjyfUOvKGP0g3c7GQsmkAIgB5ThxicZf.jpg', NULL, NULL),
(52, 'Catimor', '10', '500gr', '95000', 'Biji', 'assets/gambar/RRN61ILcPch1QERmhX8YOJscRHigb346ydjXwDtf.jpg', NULL, NULL),
(53, 'Liberika', '30', '1kg', '50000', 'Biji', 'assets/gambar/rkY9s0ivvbNMPD6EosS2aiLsy7RuWh4RRp1u9UHs.jpg', NULL, NULL),
(54, 'Arabica', '30', '1kg', '100000', 'Biji', 'assets/gambar/fGEaAc7HOKuudtF66BRLBin9Jwxlh0AeIiQ1XBpo.jpg', NULL, NULL),
(55, 'Robusta', '30', '1kg', '95000', 'Biji', 'assets/gambar/FvJsnMD5qtuIhXaFEX0PAsIirB78HUmKa7pWx5GL.jpg', NULL, NULL),
(56, 'Luwak', '25', '1kg', '110000', 'Biji', 'assets/gambar/Ar3HE6KB1NTfEw7rf88Dt3qMmzsNOhga4YpjyKnM.jpg', NULL, NULL),
(57, 'Toraja', '20', '1kg', '130000', 'Biji', 'assets/gambar/Bcdthw3lBYkGkB23f6481eGxij0bfMPPK6sOczCk.jpg', NULL, NULL),
(58, 'Excelsa', '10', '1kg', '160000', 'Biji', 'assets/gambar/YcmYN9tamSrTRxSDY2bHXBQZ6FELfJxiXsl6rKb3.jpg', NULL, NULL),
(59, 'Gayo', '10', '1kg', '55000', 'Biji', 'assets/gambar/x4FJY4cRJeVnB9MNVqVaurNtC384Kv7sORUJxH4c.jpg', NULL, NULL),
(60, 'Gesha', '10', '1kg', '85000', 'Biji', 'assets/gambar/lI937c6XViwVjyIRTB0SCN5agarUscxah4QhxsNe.jpg', NULL, NULL),
(61, 'Jamaika', '10', '1kg', '140000', 'Biji', 'assets/gambar/pA5z6wpBsjyfUOvKGP0g3c7GQsmkAIgB5ThxicZf.jpg', NULL, NULL),
(62, 'Catimor', '10', '1kg', '150000', 'Biji', 'assets/gambar/RRN61ILcPch1QERmhX8YOJscRHigb346ydjXwDtf.jpg', NULL, NULL),
(63, 'Liberika', '5', '250gr', '15000', 'Bubuk', 'assets/gambar/rkY9s0ivvbNMPD6EosS2aiLsy7RuWh4RRp1u9UHs.jpg', NULL, NULL),
(64, 'Arabica', '15', '250gr', '20000', 'Bubuk', 'assets/gambar/fGEaAc7HOKuudtF66BRLBin9Jwxlh0AeIiQ1XBpo.jpg', NULL, NULL),
(65, 'Robusta', '25', '250gr', '30000', 'Bubuk', 'assets/gambar/FvJsnMD5qtuIhXaFEX0PAsIirB78HUmKa7pWx5GL.jpg', NULL, NULL),
(66, 'Luwak', '50', '250gr', '30000', 'Bubuk', 'assets/gambar/Ar3HE6KB1NTfEw7rf88Dt3qMmzsNOhga4YpjyKnM.jpg', NULL, NULL),
(67, 'Toraja', '40', '250gr', '35000', 'Bubuk', 'assets/gambar/Bcdthw3lBYkGkB23f6481eGxij0bfMPPK6sOczCk.jpg', NULL, NULL),
(68, 'Excelsa', '25', '250gr', '45000', 'Bubuk', 'assets/gambar/YcmYN9tamSrTRxSDY2bHXBQZ6FELfJxiXsl6rKb3.jpg', NULL, NULL),
(69, 'Gayo', '15', '250gr', '23000', 'Bubuk', 'assets/gambar/x4FJY4cRJeVnB9MNVqVaurNtC384Kv7sORUJxH4c.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kodeResi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargaKopi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subTotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `kodeResi`, `id_barang`, `hargaKopi`, `jumlah`, `subTotal`, `created_at`, `updated_at`) VALUES
(10, 'Q2DqiTeII2', '11', '15000', '1', '15000', '2021-08-19 02:16:50', '2021-08-19 02:16:50'),
(11, 'y09mmp8jcH', '14', '75000', '3', '225000', '2021-08-19 02:41:48', '2021-08-19 02:41:48'),
(12, 'n6HlZg5i2y', '14', '50000', '2', '100000', '2021-08-19 21:19:06', '2021-08-19 21:19:06'),
(13, 'PWNnDfpQ03', '46', '55000', '1', '55000', '2021-04-19 23:31:49', '2021-08-19 23:31:49'),
(14, 'IcTeMrQFty', '24', '80000', '2', '160000', '2021-05-19 23:34:06', '2021-08-19 23:34:06'),
(15, 'aiNwqhvXDM', '46', '55000', '1', '55000', '2021-07-19 23:37:55', '2021-08-19 23:37:55'),
(16, 'aiNwqhvXDM', '24', '80000', '2', '160000', '2021-07-19 23:37:55', '2021-08-19 23:37:55'),
(17, 'ooFXuaaOzP', '64', '80000', '4', '320000', '2021-01-20 00:53:08', '2021-08-19 23:53:08'),
(18, 'ooFXuaaOzP', '25', '60000', '1', '60000', '2021-01-20 00:53:08', '2021-08-19 23:53:08'),
(19, 'T0GCrVLOpp', '24', '40000', '1', '40000', '2021-06-19 23:57:13', '2021-08-19 23:57:13'),
(20, 'aKsqyrdVOM', '24', '80000', '2', '160000', '2021-02-20 01:00:44', '2021-08-20 00:00:44'),
(21, 'aKsqyrdVOM', '34', '60000', '1', '60000', '2021-02-20 01:00:44', '2021-08-20 00:00:44'),
(22, 'FFgOdC32mo', '24', '40000', '1', '40000', '2021-03-20 00:02:58', '2021-08-20 00:02:58'),
(23, 'FFgOdC32mo', '25', '60000', '1', '60000', '2021-03-20 00:02:59', '2021-08-20 00:02:59'),
(24, 'ieZ2FMYjET', '25', '120000', '2', '240000', '2021-08-20 00:09:35', '2021-08-20 00:09:35'),
(25, 'lYWrmAzWgY', '25', '180000', '3', '540000', '2021-08-20 00:11:11', '2021-08-20 00:11:11'),
(26, 'vJlOccNdbw', '20', '360000', '12', '4320000', '2021-08-20 01:56:13', '2021-08-20 01:56:13'),
(27, 'Z5XnM23SYU', '22', '5500000', '100', '550000000', '2021-08-20 01:57:41', '2021-08-20 01:57:41'),
(28, 'DXI7xz3Bhn', '25', '9000000', '150', '1350000000', '2021-07-20 01:58:38', '2021-08-20 01:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kopi`
--

CREATE TABLE `kopi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namakopi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2021_06_03_145734_create_kopi_table', 1),
(14, '2021_06_03_150535_create_penjualan_table', 1),
(15, '2021_06_03_151531_create_pemesanan_table', 1),
(16, '2021_06_03_152234_create_prediksi_table', 1),
(17, '2021_06_18_131943_create_permission_tables', 1),
(18, '2021_06_25_124303_create_datakopi_table', 1),
(19, '2021_08_17_165630_create_cart_table', 2),
(21, '2021_08_18_170905_create_transaksi_table', 3),
(22, '2021_08_18_171552_create_detail_transaksi_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 5),
(2, 'App\\User', 3),
(2, 'App\\User', 6),
(2, 'App\\User', 7),
(2, 'App\\User', 8),
(2, 'App\\User', 9),
(2, 'App\\User', 10),
(2, 'App\\User', 11),
(2, 'App\\User', 12),
(2, 'App\\User', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kopi_id` bigint(20) UNSIGNED NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalitem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalharga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prediksi`
--

CREATE TABLE `prediksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kopi_id` bigint(20) UNSIGNED NOT NULL,
  `hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahitem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-07-01 04:14:14', '2021-07-01 04:14:14'),
(2, 'user', 'web', '2021-07-01 04:14:14', '2021-07-01 04:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kodeResi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idPembeli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Dikemas',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `kodeResi`, `idPembeli`, `alamat`, `pesan`, `total`, `status`, `created_at`, `updated_at`) VALUES
(14, 'PWNnDfpQ03', '6', 'Jl. Cemara Raya No.23, Tanjung Senang', 'Packing yang rapi', '55000', 'Dikirim', '2021-04-19 23:31:49', '2021-08-19 23:32:20'),
(15, 'IcTeMrQFty', '6', 'Jl. Cemara Raya No.23, Tanjung Senang', 'Packing yang rapi', '80000', 'Dikirim', '2021-05-19 23:34:05', '2021-08-19 23:34:18'),
(16, 'aiNwqhvXDM', '7', 'Jl. Flamboyan IV No.15, Labuhan Ratu, Bandar Lampung', 'Kemasan yg tebal', '135000', 'Dikemas', '2021-07-19 23:37:55', '2021-08-19 23:37:55'),
(17, 'ooFXuaaOzP', '8', 'Jl. Tirtaria No.21, Tanjung Senang, Bandar Lampung', 'Packing rapi', '140000', 'Dikemas', '2021-01-20 00:53:08', '2021-08-19 23:53:08'),
(18, 'T0GCrVLOpp', '9', 'Jl. Bumi manti 2 No.35, Kampung Baru, Labuhan Ratu, Bandar Lampung', 'Kemasan yg rapi', '40000', 'Dikemas', '2021-06-19 23:57:13', '2021-08-19 23:57:13'),
(19, 'aKsqyrdVOM', '10', 'Jl. Pulau damar Gg.Nusa Indah 1', 'Kemasan rapi', '140000', 'Dikemas', '2021-02-20 01:00:43', '2021-08-20 00:00:43'),
(20, 'FFgOdC32mo', '11', 'Jl. Kayu manis No.25, Bandar Lampung', 'Kemasan rapi', '100000', 'Dikemas', '2021-03-20 00:02:58', '2021-08-20 00:02:58'),
(21, 'ieZ2FMYjET', '12', 'Jl. Teluk bone No.110', 'kemasan rapi', '120000', 'Dikemas', '2021-08-20 00:09:35', '2021-08-20 00:09:35'),
(22, 'lYWrmAzWgY', '14', 'Jl. Zainal Abidin Pagar Alam No. 10', 'Kemasan rapi', '180000', 'Dikemas', '2021-08-20 00:11:11', '2021-08-20 00:11:11'),
(23, 'vJlOccNdbw', '3', 'sssss', 'sss', '360000', 'Dikemas', '2021-08-20 01:56:13', '2021-08-20 01:56:13'),
(24, 'Z5XnM23SYU', '3', 'sfdf', 'sdf', '5500000', 'Dikemas', '2021-08-20 01:57:41', '2021-08-20 01:57:41'),
(25, 'DXI7xz3Bhn', '3', 'sddff', 'ff', '9000000', 'Dikemas', '2021-08-20 01:58:37', '2021-08-20 01:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'okta', 'okta@gmail.com', '2021-08-17 20:59:57', '$2y$10$50x6kVloZ7AJQIgj/lrJ/e68D0yhqOPV3Vz8xNb2gAFUc4f7BBPD2', NULL, '2021-07-01 04:52:58', '2021-08-17 20:59:57'),
(5, 'AdminKopi', 'adminkopi@gmail.com', '2021-07-01 04:59:50', '$2y$10$/siDvkks4k4avvFQb4TFjO8G1ZKTuEXdigYh9f12TE3g65fZxB/aO', NULL, '2021-07-01 04:59:50', '2021-07-01 04:59:50'),
(6, 'mayangsari', 'mayangsari@gmail.com', '2021-08-19 22:13:44', '$2y$10$DCA9BJOTy11WK9RMicbF4OmLGIJGG4bwJk4KA.3/EgM.N1u99mgri', NULL, '2021-08-19 22:11:03', '2021-08-19 22:13:44'),
(7, 'fajarahmad', 'fajara5@gmail.com', '2021-08-19 22:16:27', '$2y$10$1RsKCzaXhONKR6kR6zc0h..F3j4MqP7YkzaYTworAqa3WzBp9UYla', NULL, '2021-08-19 22:15:40', '2021-08-19 22:16:27'),
(8, 'Septi Diana', 'septidiana@gmail.com', NULL, '$2y$10$koeRITbmSv8XZ8BP68mvhOctHQ0pLgJN8pg7ViGGrGxhUMK6bUpIm', NULL, '2021-08-19 23:50:36', '2021-08-19 23:50:36'),
(9, 'Ramadan Fatwa', 'rfatwa15@gmail.com', NULL, '$2y$10$FEK9g7hYk5KaM18fQFmYUuPMFCZj1hdt3Qvq0dusStMaMW0BK.hIm', NULL, '2021-08-19 23:54:38', '2021-08-19 23:54:38'),
(10, 'Dina Saputri', 'dinasaputrii@gmail.com', NULL, '$2y$10$mkJ/aJZnnQGwp7DliU4Wfu9gHlIc9E.kw46Am.xA3V1AHWBJsvi5O', NULL, '2021-08-19 23:58:40', '2021-08-19 23:58:40'),
(11, 'Hadi Nopri', 'hadinopri27@gmail.com', NULL, '$2y$10$JBmLjgnh2XlYoyle/0ZhUuj715/n5CJXjtHJ8a8Jm8Wx2ENJp2l2G', NULL, '2021-08-20 00:01:55', '2021-08-20 00:01:55'),
(12, 'Nurnia Lestari', 'nnialestari@gmail.com', NULL, '$2y$10$66iNdss6y.fbZ9vixHRvSurpz3H4Bt/zW8EcWrDqZdznr.rMpZ3Ja', NULL, '2021-08-20 00:04:48', '2021-08-20 00:04:48'),
(14, 'Abi Irsya', 'abiirsya09@gmail.com', NULL, '$2y$10$1cks2mnFeUdZaox7CeaD1uw5jUCxoi69842b03N3503kxo3QMSnz2', NULL, '2021-08-20 00:10:18', '2021-08-20 00:10:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datakopi`
--
ALTER TABLE `datakopi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kopi`
--
ALTER TABLE `kopi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesanan_kopi_id_foreign` (`kopi_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `prediksi`
--
ALTER TABLE `prediksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prediksi_kopi_id_foreign` (`kopi_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `datakopi`
--
ALTER TABLE `datakopi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kopi`
--
ALTER TABLE `kopi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prediksi`
--
ALTER TABLE `prediksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_kopi_id_foreign` FOREIGN KEY (`kopi_id`) REFERENCES `kopi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prediksi`
--
ALTER TABLE `prediksi`
  ADD CONSTRAINT `prediksi_kopi_id_foreign` FOREIGN KEY (`kopi_id`) REFERENCES `kopi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
