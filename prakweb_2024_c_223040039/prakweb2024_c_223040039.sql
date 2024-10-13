-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 13, 2024 at 05:35 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb2024_c_223040039`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `pengarang` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `tahun_terbit` year DEFAULT NULL,
  `genre` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `genre`) VALUES
(1, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', '2005', 'Fiksi'),
(2, 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Hasta Mitra', '1980', 'Non-Fiksi'),
(3, 'Supernova: Ksatria, Puteri, dan Bintang Jatuh', 'Dewi Lestari (Dee)', 'Truedee Books', '2001', 'Novel'),
(4, 'Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia Pustaka Utama', '2009', 'Sejarah'),
(5, 'Ayat-Ayat Cinta', 'Habiburrahman El Shirazy', 'Republika', '2004', 'Fiksi'),
(6, 'Perahu Kertas', 'Dewi Lestari (Dee)', 'Bentang Pustaka', '2009', 'Non-Fiksi'),
(7, 'Pulang', 'Leila S. Chudori', 'Kepustakaan Populer Gramedia', '2012', 'Novel'),
(8, 'Ronggeng Dukuh Paruk', 'Ahmad Tohari', 'Gramedia Pustaka Utama', '1982', 'Sejarah'),
(9, 'Hujan', 'Tere Liye', 'Gramedia Pustaka Utama', '2016', 'Fiksi'),
(10, 'Sabtu Bersama Bapak', 'Adhitya Mulya', 'GagasMedia', '2014', 'Non-Fiksi'),
(11, 'Tetralogi Buru: Anak Semua Bangsa', 'Pramoedya Ananta Toer', 'Hasta Mitra', '1981', 'Novel'),
(12, 'Saman', 'Ayu Utami', 'Kepustakaan Populer Gramedia', '1998', 'Sejarah'),
(13, '5 CM', 'Donny Dhirgantoro', 'Grasindo', '2005', 'Fiksi'),
(14, 'Cantik Itu Luka', 'Eka Kurniawan', 'Gramedia Pustaka Utama', '2002', 'Non-Fiksi'),
(15, 'Arus Balik', 'Pramoedya Ananta Toer', 'Hasta Mitra', '1995', 'Novel'),
(16, 'Garis Batas', 'Agustinus Wibowo', 'Gramedia Pustaka Utama', '2011', 'Sejarah'),
(17, 'Dilan: Dia Adalah Dilanku Tahun 1990', 'Pidi Baiq', 'Pastel Books', '2014', 'Fiksi'),
(18, 'Aroma Karsa', 'Dewi Lestari (Dee)', 'Bentang Pustaka', '2018', 'Non-Fiksi'),
(19, 'O Amuk Kapak', 'Seno Gumira Ajidarma', 'Gramedia Pustaka Utama', '1999', 'Novel'),
(20, 'Jakarta Sebelum Pagi', 'Ziggy Zezsyazeoviennazabrizkie', 'Gramedia Pustaka Utama', '2016', 'Sejarah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
