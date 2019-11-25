-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2019 pada 06.54
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(120) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `keterangan`, `kategori`, `harga`, `stock`, `gambar`) VALUES
(1, 'meja belajar', 'meja belajar lipat bekas', 'meja', 100000, 2, 'mejaBelajar.jpg'),
(2, 'kursi', 'kursi bekas baru kepake 1 kali', 'kursi', 100000, 5, 'kursi.jpg'),
(3, 'jam dinding', 'jam dinding warna putih', 'jam', 30000, 6, 'jam.jpg'),
(4, 'lampu meja belajar', 'lampu meja belajar gambbar bagus', 'lampu', 100000, 5, 'lampu.jpg'),
(7, '1', '2', '3', 4, 5, 'Screenshot_10_9_2019_10_28_21_PM.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
