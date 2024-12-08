-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2024 at 03:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `padamana`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `quantitas` int(11) NOT NULL,
  `harga_total` decimal(10,2) NOT NULL,
  `tgl_order` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `nama` text NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `namaq` varchar(30) NOT NULL,
  `descq` varchar(30) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` enum('makanan','mainan','pakaian','elektronik') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `id_penjual`, `nama`, `deskripsi`, `namaq`, `descq`, `harga`, `stok`, `kategori`) VALUES
(16, 8, 'kfgjfovmsprignldkpwkvpspfkfmre', 'rogndpwefkokrpmmksdmkfmkrmkrngiiesnknfnaasdm amogus ada lah yang punya', 'kfgjfovmsprignldk...', 'rogndpwefkokrpmmk...', 23.00, 2, 'pakaian'),
(17, 8, 'Kalau aku memang bisa ngetik cepet harunya aku bisa ngetik sambil ngak liat keyboar, jadi tinggal ngeliat layarnya', '2', 'Kalau aku memang ...', '2', 1222.00, 2, 'makanan'),
(18, 8, 'aaaæę amdon dkncqp d;ks,df. kefkls,dmfa', 'ndkn', 'aaaæę amdon dkncq...', 'ndkn', 2322.00, 3, 'mainan'),
(24, 11, 'kucing', 'perkumpulan', 'kucing', 'perkumpulan', 1000.00, 1, 'mainan'),
(25, 11, 'Nuklir', 'rogndpwefkokrpmmksdmkfmkrmkrngiiesnknfnaasdm amogus ada lah yang punyafjdnsjofNJFbdjsbjdbfjJSFB', 'Nuklir', 'rogndpwefkokrp...', 12231.00, 1, 'elektronik'),
(26, 11, 'Nuklir', 'rogndpwefkokrpmmksdmkfmkrmkrngiiesnknfnaasdm amogus ada lah yang punyafjdnsjofNJFbdjsbjdbfjJSFB', 'Nuklir', 'rogndpwefkokrp...', 12231.00, 1, 'elektronik'),
(27, 11, 'Tes', 'perkumpulan Orang orang sigma', 'Tes', 'perkumpulan Or...', 1000000.00, 10000, 'pakaian'),
(28, 11, 'Tes', 'perkumpulan Orang orang sigma', 'Tes', 'perkumpulan Or...', 1000000.00, 1000, 'pakaian'),
(29, 11, 'saye lah', 'sayaadalahkapiten1sayaadalahkapiten2sayaadalahkapiten3', 'saye lah', 'sayaadalahkapi...', 10000.00, 231, 'mainan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Pembeli','Penjual') NOT NULL,
  `saldo_virtual` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `telepon`, `password`, `role`, `saldo_virtual`) VALUES
(6, '2', '2', '2', 'Pembeli', 0.00),
(7, '3', '3', '3', 'Pembeli', 0.00),
(8, 'coba', '0', '1', 'Penjual', 0.00),
(9, '9', '9', '9', 'Penjual', 0.00),
(10, '10', '10', '$2y$10$rqdctrT/jA4fWbG0mQOxXOU9o6bT8CzxKsJ/XkzDSRJa91irmm5Xm', 'Pembeli', 0.00),
(11, 'Alif_is', '1', '$2y$10$K8E6rysxUYwkHWfWGH.4ru9bG0HDKBtr31iUDl9P5aCMZPyke3srq', 'Penjual', 0.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pembeli` (`id_pembeli`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penjual` (`id_penjual`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_penjual`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
