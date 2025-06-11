-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2025 pada 06.55
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`) VALUES
(1, 'zada', '12345', 'zadasugiarto3@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_prov` char(2) NOT NULL,
  `nama` tinytext NOT NULL,
  `ongkir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `nama`, `ongkir`) VALUES
('11', 'Aceh', 20000),
('12', 'Sumatera Utara', 19500),
('13', 'Sumatera Barat', 19500),
('14', 'Riau', 20000),
('15', 'Jambi', 18000),
('16', 'Sumatera Selatan', 19500),
('17', 'Bengkulu', 18000),
('18', 'Lampung', 19000),
('19', 'Kepulauan Bangka Belitung', 20000),
('21', 'Kepulauan Riau', 20000),
('31', 'DKI Jakarta', 18000),
('32', 'Jawa Barat', 15000),
('33', 'Jawa Tengah', 12000),
('34', 'DI Yogyakarta', 12000),
('35', 'Jawa Timur', 10000),
('36', 'Banten', 15000),
('51', 'Bali', 20000),
('52', 'Nusa Tenggara Barat', 25000),
('53', 'Nusa Tenggara Timur', 25000),
('61', 'Kalimantan Barat', 20000),
('62', 'Kalimantan Tengah', 22000),
('63', 'Kalimantan Selatan', 22000),
('64', 'Kalimantan Timur', 23000),
('65', 'Kalimantan Utara', 23000),
('71', 'Sulawesi Utara', 25000),
('72', 'Sulawesi Tengah', 25000),
('73', 'Sulawesi Selatan', 25000),
('74', 'Sulawesi Tenggara', 25000),
('75', 'Gorontalo', 22000),
('76', 'Sulawesi Barat', 25000),
('81', 'Maluku', 25000),
('82', 'Maluku Utara', 25000),
('91', 'Papua Barat', 30000),
('92', 'Papua', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'Teguh Kurniawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `telepon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `email`, `password`, `nama_pelanggan`, `telepon`) VALUES
(1, 'teguhkrniawan@gmail.com', '12345', 'Teguh Kurniawan', '0702163058'),
(2, 'teguh.kurniawan@uinsu.ac.id', '12345', 'Teguh', '082267616612'),
(3, 'sixtee@gmail.com', '12345', 'Sixtee Olshop', '070672163058'),
(5, 'user@gmail.com', '12345', 'USER', '09899912132'),
(6, 'zadasugiarto3@gmail.com', '12345', 'Zada wirayuda Sugiarto ', '081328622867');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_pembelian`, `nama`, `bank`, `jumlah`, `tanggal`, `bukti`) VALUES
(3, 17, 'Teguh Kurniawan', 'BCA', 200000, '2019-07-03', '20190703061724bukti1.jpg'),
(4, 16, 'USER', 'BCA', 200000, '2019-07-03', '20190703062611bukti2.jpg'),
(5, 18, 'Sixtee', 'BNI', 250000, '2019-07-07', '20190707034141bukti1.jpg'),
(6, 21, 'Zada wirayuda Sugiarto ', 'bni', 555000, '2025-02-26', '20250226051719Home.jpg'),
(7, 22, 'Zada wirayuda Sugiarto ', 'bni', 900000, '2025-02-27', '20250227014632Blue Simple Busi'),
(8, 23, 'violet', '', 0, '2025-04-03', '20250403164621listrik.jpg'),
(9, 24, 'Zada wirayuda Sugiarto ', '', 0, '2025-04-04', '20250404035027_2.jpg'),
(10, 25, 'Zada wirayuda Sugiarto ', 'bri', 270000, '2025-04-19', '20250404040155_gambar 1.jpg'),
(11, 20, 'ZAHRA AULIA KANSANA', 'bri', 270000, '2025-06-12', '20250610102201_eac8eefd9e3e5ff'),
(12, 27, 'Muhammad Syaugi farandi', 'bni', 1212000, '2025-06-12', '20250610102556_959fab301d77b02'),
(13, 28, 'satria faza putra sugiarto', 'vni', 267000, '2025-06-20', '20250610102648_pensil.jpg'),
(14, 28, 'Zada wirayuda Sugiarto ', 'bni', 267000, '2025-06-20', '20250610103819_959fab301d77b02'),
(15, 26, 'Zada wirayuda Sugiarto ', 'bri', 270000, '2025-06-13', '20250610162949_smiling-young-f');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `tarif` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`id_pembelian`, `id_pelanggan`, `id_prov`, `tanggal_pembelian`, `total_pembelian`, `tarif`, `alamat`, `status`) VALUES
(16, 3, 34, '2019-07-02', 62000, 12000, 'Jl.Ambai', 'Produk di Terima'),
(17, 3, 91, '2019-07-02', 285000, 30000, 'Jl.Kartanegara Gg Cempaka No.108B ', 'Produk di Terima'),
(18, 3, 16, '2019-07-07', 449500, 19500, 'Jl.Gunung Merapi', 'Produk di Terima'),
(19, 3, 53, '2019-07-07', 275000, 25000, 'Jl.Patimmura No 91', 'Pending'),
(20, 5, 32, '2025-02-25', 270000, 15000, 'COKRODINGRATAN JT2/81', 'Produk di Terima'),
(21, 6, 33, '2025-02-26', 522000, 12000, 'COKRODINGRATAN JT2/81', 'Produk di Terima'),
(22, 6, 32, '2025-02-27', 270000, 15000, 'COKRODINGRATAN JT2/81', 'Produk di Terima'),
(23, 6, 34, '2025-03-15', 5112000, 12000, 'COKRODINGRATAN JT2/81', 'Produk di Terima'),
(24, 6, 0, '2025-04-03', 255000, 0, '', 'Produk di Terima'),
(25, 6, 32, '2025-04-04', 270000, 15000, 'COKRODINGRATAN JT2/81', 'Produk di Terima'),
(26, 6, 32, '2025-04-07', 270000, 15000, 'COKRODINGRATAN JT2/81', 'Menunggu Konfirmasi'),
(27, 5, 34, '2025-06-10', 1212000, 12000, 'COKRODINGRATAN JT2/81', 'Produk di Terima'),
(28, 5, 34, '2025-06-10', 267000, 12000, 'COKRODINGRATAN JT2/81', 'Produk di Terima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian_produk`
--

CREATE TABLE `tb_pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembelian_produk`
--

INSERT INTO `tb_pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`) VALUES
(23, 16, 10, 1),
(24, 17, 1, 1),
(25, 18, 1, 1),
(26, 18, 8, 1),
(27, 19, 9, 1),
(28, 20, 1, 1),
(29, 21, 1, 2),
(30, 22, 1, 1),
(31, 23, 1, 20),
(32, 24, 1, 1),
(33, 25, 1, 1),
(34, 26, 1, 1),
(35, 27, 12, 1),
(36, 28, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(40) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `foto_produk` varchar(40) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat_produk`, `foto_produk`, `deskripsi_produk`) VALUES
(1, 'Baju Kemeja Levis ', 255000, 1000, 'baju1.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.'),
(8, 'Celana ', 175000, 200, 'celana1.jpg', 'Celana Jeans'),
(9, 'Jam Tangan', 250000, 50, 'jam tangan.jpg', 'Adalah Sebuah Produk Totalitas'),
(10, 'Tali Pinggang', 50000, 100, 'ikatpinggang.jpg', 'Produk Tervaforit'),
(12, 'baju bagus', 1200000, 1200, '22.jpg', 'k2k2k2kk2'),
(13, 'adnann', 1200200, 200, 'sampah.jpg', 'wkwkwkwkwkw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan`
--

CREATE TABLE `ulasan` (
  `id` int(11) NOT NULL,
  `rating` int(20) NOT NULL,
  `coment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ulasan`
--

INSERT INTO `ulasan` (`id`, `rating`, `coment`, `created_at`) VALUES
(1, 5, 'baguss', '2025-06-08 14:43:24'),
(2, 2, 'bagus tapi kurang', '2025-06-08 14:45:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `tb_pembelian_produk`
--
ALTER TABLE `tb_pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian_produk`
--
ALTER TABLE `tb_pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
