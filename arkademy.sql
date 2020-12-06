-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 03:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arkademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `keterangan`, `harga`, `jumlah`) VALUES
(6, 'iPhone 12 Pro Max 512GB', 'RESMI (Barang dari luar negri, signal sudah diaktifkan) signal pasti bisa, silahkan di test (Garansi signal pasti bisa all operator) bukti pajak tidak diberikan, minta pun tidak akan diberikan', 27000000, 5),
(7, 'iPhone XS Max 256GB Second', 'Garansi jika sinyal diblokir, barang Bekas garansi international, Fulset Oem (kabel+adaptor original), kondisi 99% LIKE NEW/MULUS, baterry perfect- Good', 11200000, 3),
(8, 'iPad Generasi 8', 'Layar Retina 10,2 inci yang menawan, Chip A12 Bionic dengan Neural Engine, Mendukung Apple Pencil (generasi ke-1) dan Smart Keyboard, Kamera belakang 8 MP, kamera depan FaceTime HD 1,2 MP, Speaker stereo, Wi-Fi 802.11ac dan data seluler LTE kelas Gigabit(2)', 6299000, 2),
(9, 'iPhone SE Gen 2 128GB', 'iPhone SE adalah iPhone 4,7 inci paling canggih yang pernah ada. Dilengkapi A13 Bionic, chip paling cepat di ponsel pintar, untuk performa menakjubkan dalam aplikasi, game, dan fotografi. Mode Potret untuk potret kualitas studio dan enam efek pencahayaan.', 7499000, 6),
(10, 'iPhone 11 Pro Max 256GB', 'Sistem tiga kamera transformatif yang menambahkan kemampuan luar biasa tanpa kerumitan. Lompatan tak tertandingi dalam hal kekuatan baterai. Dan chip luar biasa dengan pembelajaran mesin yang semakin canggih dan menghilangkan batasan kemampuan ponsel pintar. Selamat datang di iPhone pertama yang karena kecanggihannya layak disebut Pro.', 18999000, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
