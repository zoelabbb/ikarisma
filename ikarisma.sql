-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2024 pada 12.18
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikarisma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acl_user`
--

CREATE TABLE `acl_user` (
  `id_user` int(11) NOT NULL,
  `user_nama` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `acl_user`
--

INSERT INTO `acl_user` (`id_user`, `user_nama`, `user_pass`) VALUES
(2, 'FIKRI_BAKUL', '$2y$10$S46LhZcjLKBBLaVkL2fq1OtKHcc9puESyYsXAd60wmFTeTqNZaer6'),
(3, 'IJONK', '$2y$10$ygUfG/Pv/kDwDNepnGUPV.JW.L3i6uI/YRriwcIZrBDliuVsG8B1O'),
(4, 'OGENK', '$2y$10$AvZqAcrkNICzg/NIKWGAKeYMeyPf6zGJ8d2WN4x5zMEEZMcmf5Veu'),
(5, 'OBI', '$2y$10$Dz0INDW4C3Iw0/hi8k7A2.yPQsNE1MgtBzBzUzPBCqQw2aklYUota'),
(6, 'FANI', '$2y$10$D7N7lJximh88G/Fw18/dgOcOC.9doq7bL3oN8ji7dYL0AgcFjQdKm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anak`
--

CREATE TABLE `anak` (
  `id_anak` int(11) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `nama_panggilan` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL DEFAULT '0',
  `id_kaos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anak`
--

INSERT INTO `anak` (`id_anak`, `nama_anak`, `nama_panggilan`, `ukuran`, `jenis`, `jumlah`, `id_kaos`) VALUES
(1, 'rere', '', 'M', 'pendek', '668753588', 0),
(2, 'ian_asep', '', 'S', 'pendek', '75000', 0),
(4, 'tetetetete', 'ggg', 'XL', 'PENDEK', '90000', 0),
(22, 'dfdfdfff', 'sfsfsfs', 'L', 'PENDEK', '65768678658', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `approve_anak`
--

CREATE TABLE `approve_anak` (
  `id_approve` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_panggilan` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `approve_anak`
--

INSERT INTO `approve_anak` (`id_approve`, `nama_lengkap`, `nama_panggilan`, `ukuran`, `model`, `deleted_at`) VALUES
(6, 'dgdgdg', 'dgdgdg', 'PILIH', 'PENDEK', '2022-03-20 11:24:29'),
(7, 'trtrt', 'tes', 'L', 'PENDEK', '2022-03-30 11:48:43'),
(8, 'dfdfdfff', 'sfsfsfs', 'L', 'PENDEK', '2022-03-30 12:10:58'),
(9, 'ff', 'ffk', 'S', 'PENDEK', '2024-03-07 16:57:49'),
(10, 'ROBI', 'ggaet', 'S', 'PENDEK', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `approve_dewasa`
--

CREATE TABLE `approve_dewasa` (
  `id_approve` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_panggilan` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `approve_dewasa`
--

INSERT INTO `approve_dewasa` (`id_approve`, `nama_lengkap`, `nama_panggilan`, `ukuran`, `model`, `deleted_at`) VALUES
(9, 'grrtt', 'fdettq', 'S', 'PENDEK', '2022-03-18 18:36:41'),
(10, 'jala falidasi3', '36', 'L', 'PANJANG', '2022-03-18 19:27:12'),
(11, 'fikri', 'ganteng', 'M', 'PANJANG', '2022-03-18 19:08:05'),
(12, 'teslagiiiii', 'iiiiii', 'XL', 'PENDEK', '2022-03-19 21:41:53'),
(13, 'hdhdh', 'tryurur', 'M', 'PENDEK', '2022-03-26 23:10:53'),
(14, 'dfdfdf', 'dfdd', 'M', 'PENDEK', '2022-03-30 10:58:46'),
(15, 'yyiy', 'ggaet', 'M', 'PANJANG', '2022-03-30 10:58:52'),
(16, 'tiara', 'ggaet', 'XXL', 'PANJANG', '2022-03-30 10:59:00'),
(17, 'yusron', 'ucon', 'XL', 'PANJANG', '2022-03-30 10:59:05'),
(18, 'fikri', 'bakul', 'M', 'PENDEK', '2022-03-30 10:59:24'),
(19, 'jffhv', 'ggaet', 'XL', 'PANJANG', '2022-03-30 12:13:36'),
(20, 'tuthfh', 'fhruru', 'M', 'PENDEK', '2024-03-01 23:49:44'),
(21, 'reee', 'siti', 'M', 'PANJANG', '2024-03-01 23:40:57'),
(22, 'yuyu', 'hh', 'M', 'PANJANG', NULL),
(23, 'tesravv', 'aaaa', 'M', 'PANJANG', NULL),
(24, '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupt', 'gga9008', 'M', 'PANJANG', '2024-03-09 07:28:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayar_anak`
--

CREATE TABLE `bayar_anak` (
  `id_anak` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bayar` varchar(255) NOT NULL,
  `id_bayar` int(11) NOT NULL,
  `user_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bayar_anak`
--

INSERT INTO `bayar_anak` (`id_anak`, `tgl_bayar`, `bayar`, `id_bayar`, `user_nama`) VALUES
(1, '2022-03-18', '75000', 18, 'IJONK'),
(2, '2022-03-24', '20000', 19, 'IJONK'),
(2, '2022-03-16', '20000', 20, 'IJONK'),
(2, '2022-03-18', '35000', 21, 'IJONK'),
(4, '2022-03-23', '5000', 22, 'IJONK'),
(4, '2022-03-09', '5000', 23, 'IJONK'),
(4, '2022-03-14', '30000', 24, 'IJONK'),
(4, '2022-03-08', '15000', 25, 'IJONK'),
(4, '2022-03-10', '20000', 26, 'IJONK');

--
-- Trigger `bayar_anak`
--
DELIMITER $$
CREATE TRIGGER `jumlah_bayar_anak` AFTER INSERT ON `bayar_anak` FOR EACH ROW BEGIN
UPDATE anaks set jumlah =jumlah + new.bayar WHERE id_anak = new.id_anak;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayar_dewasa`
--

CREATE TABLE `bayar_dewasa` (
  `tanggal` date DEFAULT NULL,
  `id_bayar` int(11) NOT NULL,
  `bayar` varchar(255) NOT NULL,
  `id_dewasa` int(11) NOT NULL,
  `user_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bayar_dewasa`
--

INSERT INTO `bayar_dewasa` (`tanggal`, `id_bayar`, `bayar`, `id_dewasa`, `user_nama`) VALUES
('2022-03-16', 103, '10000', 1, 'IJONK'),
('2022-03-04', 104, '10000', 1, 'IJONK'),
('2022-03-11', 105, '12000', 1, 'IJONK'),
('2022-03-13', 106, '28000', 1, 'IJONK'),
('2022-03-18', 107, '40000', 1, 'IJONK'),
('2022-03-17', 108, '50000', 2, 'IJONK'),
('2022-03-18', 109, '30000', 3, 'IJONK'),
('2022-03-16', 110, '20000', 2, 'IJONK'),
('2022-03-17', 111, '40000', 2, 'IJONK'),
('2022-03-18', 112, '50000', 3, 'IJONK'),
('2022-03-14', 113, '20000', 3, 'IJONK');

--
-- Trigger `bayar_dewasa`
--
DELIMITER $$
CREATE TRIGGER `jumlah_bayar_dewasa` AFTER INSERT ON `bayar_dewasa` FOR EACH ROW BEGIN
UPDATE dewasa set jumlah =jumlah + new.bayar
WHERE id_dewasa = new.id_dewasa;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_jumlah` AFTER UPDATE ON `bayar_dewasa` FOR EACH ROW BEGIN
UPDATE dewasa set dewasa.jumlah =dewasa.jumlah - new.bayar WHERE dewasa.id_dewasa = new.id_dewasa;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dewasa`
--

CREATE TABLE `dewasa` (
  `id_dewasa` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_panggilan` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL DEFAULT '0',
  `status` varchar(25) NOT NULL DEFAULT 'BELUM LUNAS',
  `id_kaos` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dewasa`
--

INSERT INTO `dewasa` (`id_dewasa`, `nama_lengkap`, `nama_panggilan`, `model`, `ukuran`, `jumlah`, `status`, `id_kaos`) VALUES
(1, 'KADUT', '', 'PANJANG', 'XL', '10000', 'LUNAS', '1'),
(2, 'ROBI', '', 'PANJANG', 'XL', '10000', 'BELUM LUNAS', '1'),
(3, 'UST_MUSTARI', '', 'PENDEK', 'XL', '20000', 'BELUM LUNAS', '2'),
(41, 'fikri', 'bakul', 'PENDEK', 'M', '7.575757768878785e15', 'BELUM LUNAS', '2'),
(42, 'tuthfh', 'fhruru', 'PENDEK', 'M', '100000', 'BELUM LUNAS', '2'),
(43, 'tuthfh', 'fhruru', 'PENDEK', 'M', '0', 'BELUM LUNAS', '2'),
(44, 'tuthfh', 'fhruru', 'PENDEK', 'M', '0', 'BELUM LUNAS', '1'),
(45, 'tuthfh', 'fhruru', 'PENDEK', 'M', '0', 'BELUM LUNAS', '2'),
(46, 'reee', 'siti', 'PANJANG', 'M', '96767', 'BELUM LUNAS', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kaos`
--

CREATE TABLE `kaos` (
  `jenis` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_kaos` int(11) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kaos`
--

INSERT INTO `kaos` (`jenis`, `gambar`, `id_kaos`, `harga`, `status`) VALUES
('PANJANG', 'panjang.png', 1, '110000', 'LUNAS'),
('PENDEK', 'pendek.png', 2, '100000', 'LUNAS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `tgl_pengeluaran` date NOT NULL,
  `pengeluaran` varchar(255) DEFAULT NULL,
  `id_transaksi` int(11) NOT NULL,
  `nama_admin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jml_transaksi` varchar(50) NOT NULL DEFAULT '0',
  `id_dewasa` int(11) DEFAULT 0,
  `id_anak` int(11) DEFAULT 0,
  `nama_admin` varchar(50) NOT NULL,
  `tgl_pengeluaran` date DEFAULT NULL,
  `jml_pengeluaran` varchar(50) DEFAULT NULL,
  `keterangan` text NOT NULL,
  `admin_pengeluaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_transaksi`, `jml_transaksi`, `id_dewasa`, `id_anak`, `nama_admin`, `tgl_pengeluaran`, `jml_pengeluaran`, `keterangan`, `admin_pengeluaran`) VALUES
(20, '2022-03-10', '10000', 1, 0, 'IJONK', NULL, NULL, '', ''),
(21, '2022-03-18', '10000', 2, 0, 'IJONK', NULL, NULL, '', ''),
(22, '2022-03-25', '10000', 3, 0, 'IJONK', NULL, NULL, '', ''),
(23, '0000-00-00', '', 0, 0, '', '2022-03-20', '5000', '', 'IJONK'),
(24, '0000-00-00', '', 0, 0, '', '0000-00-00', '5000', '', 'IJONK'),
(25, '2022-03-11', '10000', 0, 1, 'IJONK', NULL, NULL, '', ''),
(26, '0000-00-00', '0', 0, 0, '', '0000-00-00', '10000', '', 'IJONK'),
(27, '0000-00-00', '0', 0, 0, '', '0000-00-00', '5000', '', 'IJONK'),
(28, '0000-00-00', '0', 0, 0, '', '2022-03-18', '5000', '', 'IJONK'),
(29, '0000-00-00', '0', 0, 0, '', '2022-03-08', '5000', '', ''),
(30, '0000-00-00', '0', 0, 0, '', '2022-03-26', '1000', '', ''),
(31, '0000-00-00', '0', 0, 0, '', '0000-00-00', '2000', '', 'IJONK'),
(32, '0000-00-00', '0', 0, 0, '', '2022-03-19', '1000', '', 'IJONK'),
(33, '2022-03-11', '100000', 41, 0, 'IJONK', NULL, NULL, '', ''),
(35, '0000-00-00', '0', 0, 0, '', '2022-03-31', NULL, 'setor sablon dan ongkos', 'IJONK'),
(36, '2022-03-18', '10000', 0, 22, 'IJONK', NULL, NULL, '', ''),
(37, '0000-00-00', '0', 0, 0, '', '2022-03-31', '11000', 'setor sablon dan ongkos', 'IJONK'),
(38, '2022-03-19', '10000', 3, 0, 'IJONK', NULL, NULL, '', ''),
(39, '2022-03-26', '10000', 0, 22, 'IJONK', NULL, NULL, '', ''),
(40, '2024-03-02', '10000', 46, 0, 'FIKRI_BAKUL', NULL, NULL, '', ''),
(41, '2024-03-03', '10000', 46, 0, 'FIKRI_BAKUL', NULL, NULL, '', ''),
(42, '2024-03-15', '7575757768778785', 41, 0, 'FIKRI_BAKUL', NULL, NULL, '', ''),
(43, '2024-03-05', '76767', 46, 0, 'FIKRI_BAKUL', NULL, NULL, '', ''),
(44, '2024-03-14', '65768658658', 0, 22, 'FIKRI_BAKUL', NULL, NULL, '', ''),
(45, '0000-00-00', '0', 0, 0, '', '2024-03-12', '7,575,823,537,654,210 ', 'hfhdh', 'FIKRI_BAKUL'),
(46, '0000-00-00', '0', 0, 0, '', '2024-03-12', '7575823537704210', 'ini', 'FIKRI_BAKUL'),
(47, '2024-03-08', '668658588', 0, 1, 'FIKRI_BAKUL', NULL, NULL, '', ''),
(48, '2024-03-20', '100000', 42, 0, 'FIKRI_BAKUL', NULL, NULL, '', '');

--
-- Trigger `transaksi`
--
DELIMITER $$
CREATE TRIGGER `jumlah_tansaksi_anak` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
UPDATE anak set jumlah =jumlah + new.jml_transaksi
WHERE id_anak = new.id_anak;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `jumlah_tansaksi_dewasa` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
UPDATE dewasa set jumlah =jumlah + new.jml_transaksi
WHERE id_dewasa = new.id_dewasa;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `acl_user`
--
ALTER TABLE `acl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`),
  ADD KEY `nama` (`nama_anak`);

--
-- Indeks untuk tabel `approve_anak`
--
ALTER TABLE `approve_anak`
  ADD PRIMARY KEY (`id_approve`);

--
-- Indeks untuk tabel `approve_dewasa`
--
ALTER TABLE `approve_dewasa`
  ADD PRIMARY KEY (`id_approve`);

--
-- Indeks untuk tabel `bayar_anak`
--
ALTER TABLE `bayar_anak`
  ADD PRIMARY KEY (`id_bayar`) USING BTREE;

--
-- Indeks untuk tabel `bayar_dewasa`
--
ALTER TABLE `bayar_dewasa`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indeks untuk tabel `dewasa`
--
ALTER TABLE `dewasa`
  ADD PRIMARY KEY (`id_dewasa`);

--
-- Indeks untuk tabel `kaos`
--
ALTER TABLE `kaos`
  ADD PRIMARY KEY (`id_kaos`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `acl_user`
--
ALTER TABLE `acl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `anak`
--
ALTER TABLE `anak`
  MODIFY `id_anak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `approve_anak`
--
ALTER TABLE `approve_anak`
  MODIFY `id_approve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `approve_dewasa`
--
ALTER TABLE `approve_dewasa`
  MODIFY `id_approve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `bayar_anak`
--
ALTER TABLE `bayar_anak`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `bayar_dewasa`
--
ALTER TABLE `bayar_dewasa`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT untuk tabel `dewasa`
--
ALTER TABLE `dewasa`
  MODIFY `id_dewasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `kaos`
--
ALTER TABLE `kaos`
  MODIFY `id_kaos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
