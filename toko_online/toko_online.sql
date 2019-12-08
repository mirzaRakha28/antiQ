-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2019 pada 04.37
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

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
(1, 'bajaj', 'Warna merah \r\nBarang Berfungsi\r\ntahun 2000', 'vehicle', 30000000, 1, 'bajai.jpg'),
(2, 'Mobil ', 'BArang mulus,mesin tetap bekerja', 'vehicle', 100000000, 1, 'mobil.jpg'),
(3, 'mobil jadul', 'barang mulus, mesin ok', 'vehicle', 2000000000, 1, 'mobil2.jpg'),
(4, 'mobil antik', 'mobil dengan kondisi mulus dan mesin masih ok', 'vehicle', 200000000, 1, 'mobil2.jpg'),
(5, 'motor supra', 'motor antik yang sangat keren ', 'vehicle', 7000000, 1, 'motor.jpg'),
(6, 'The Ladie\'s Almanac', 'Buku novel antik asal paris', 'book', 150000, 1, 'buku_antik.jpg'),
(7, 'Buku Saku Penemuan', 'Buku saku antik yang berisi tentang penemuan-penemuan pada zaman 80an', 'book', 100000, 1, 'buku_penemuan.jpg'),
(8, 'Buku Teknik', 'Buku antik yang berisi tentang ilmu-ilmu di dunia teknik', 'book', 125000, 1, 'buku_teknik.jpg'),
(9, 'Kitab Biebel', 'Kitab Biebel peninggalan gereja tahun 70an', 'book', 1000000, 1, 'kitab_biebel.jpg'),
(10, 'Buku Sejarah', 'Buku antik yang berisi sejarah-sejarah peradaban dunia', 'book', 300000, 1, 'buku_sejarah.jpg'),
(11, 'Celana Antik', 'Celana antik yang sangat modis pada zamannya', 'fashion', 150000, 1, 'celana_antik.jpg'),
(12, 'Kebaya Antik', 'Kebaya antik yang sangat unik dan modis pada zamannya', 'fashion', 400000, 1, 'kebaya_antik.jpg'),
(13, 'Aksesoris Baju Antik', 'Aksesoris antik untuk baju yang sangat modis', 'fashion', 175000, 1, 'pakaian_antik.jpg'),
(14, 'Kacamata Antik', 'Kacamata antik yang sangat modis dan keren pada zamannya', 'fashion', 150000, 1, 'kacamata_antik.jpg'),
(15, 'Topi Tentara China', 'Topi peninggalan tentara china pada masa Perang Dunia II', 'fashion', 500000, 1, 'topi_antik.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `pass`, `alamat`, `is_active`) VALUES
(5, 'mirza rakha', 'mirzarakhadwipradana28@gmail.com', '$2y$10$cUPiEzucItxhLir03b4Hmug1HEjhhcWbypCX4io5T95YI4iWkNgga', 'Jalan Melati no : 39a', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
