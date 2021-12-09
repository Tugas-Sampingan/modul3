-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2021 pada 16.49
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_table`
--

CREATE TABLE `buku_table` (
  `id_buku` int(100) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penulis_buku` varchar(255) NOT NULL,
  `tahun_terbit` int(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `bahasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku_table`
--

INSERT INTO `buku_table` (`id_buku`, `judul_buku`, `penulis_buku`, `tahun_terbit`, `deskripsi`, `gambar`, `tag`, `bahasa`) VALUES
(1, 'OTODIDAK DESAIN DAN PEMROGRAMAN WEBSITE', 'Firenze_120219401', 2021, 'Mengenalkan pemrograman dan desain website secara cepat dan mudah Edisi-1', 'buku 1.jpg', 'website; oop; mvc', 'indonesia'),
(2, 'OTODIDAK DESAIN DAN PEMROGRAMAN WEBSITE', 'Firenze_120219401', 2021, 'Mengenalkan pemrograman dan desain website secara cepat dan mudah Edisi-2', 'buku 1.jpg', 'website; oop; mvc', 'indonesia'),
(3, 'OTODIDAK DESAIN DAN PEMROGRAMAN WEBSITE', 'Firenze_120219401', 2021, 'Mengenalkan pemrograman dan desain website secara cepat dan mudah Edisi-3', 'buku 1.jpg', 'website; oop; mvc', 'indonesia'),
(4, 'LAUT BERCERITA', 'Firenze_120219401', 2020, '\r\nSebuah Novel yang ditulis oleh Leila S. Shudori\r\nPart-1', 'buku 2.jpg', 'lainnya', 'lainnya'),
(5, 'LAUT BERCERITA', 'Firenze_120219401', 2020, 'Sebuah Novel yang ditulis oleh Leila S. Shudori\r\nPart-2', 'buku 2.jpg', 'lainnya', 'lainnya'),
(6, 'LAUT BERCERITA', 'Firenze_120219401', 2020, 'Sebuah Novel yang ditulis oleh Leila S. Shudori\r\nPart-3', 'buku 2.jpg', 'lainnya', 'lainnya'),
(7, 'KALKULUS', 'Firenze_120219401', 2020, 'Edisi 1', 'buku 3.jpeg', 'kalkulus', 'indonesia'),
(8, 'KALKULUS', 'Firenze_120219401', 2020, 'Edisi 2', 'buku 3.jpeg', 'kalkulus', 'indonesia'),
(9, 'KALKULUS', 'Firenze_120219401', 2020, 'Edisi 3', 'buku 3.jpeg', 'kalkulus', 'indonesia'),
(10, 'MEMBANGUN APLIKASI WEB DENGAN METODE OOP', 'Firenze_120219401', 2021, 'Ditulis oleh Anton Subagia Edisi-1', 'buku 4.jpg', 'pemrogaman; website; java; oop', 'indonesia'),
(11, 'MEMBANGUN APLIKASI WEB DENGAN METODE OOP', 'Firenze_120219401', 2021, 'Ditulis oleh Anton Subagia Edisi-2', 'buku 4.jpg', 'pemrogaman; website; java; oop', 'indonesia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku_table`
--
ALTER TABLE `buku_table`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku_table`
--
ALTER TABLE `buku_table`
  MODIFY `id_buku` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
