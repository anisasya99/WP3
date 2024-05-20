-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2024 pada 05.34
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pustaka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` varchar(12) NOT NULL,
  `tgl_booking` date NOT NULL,
  `batas_ambil` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking_detail`
--

CREATE TABLE `booking_detail` (
  `id` int(11) NOT NULL,
  `id_booking` varchar(12) CHARACTER SET latin1 NOT NULL,
  `id_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(118) CHARACTER SET latin1 NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `pengarang` varchar(64) CHARACTER SET latin1 NOT NULL,
  `penerbit` varchar(64) CHARACTER SET latin1 NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `isbn` varchar(64) CHARACTER SET latin1 NOT NULL,
  `stok` int(11) NOT NULL,
  `dipinjam` int(11) NOT NULL,
  `dibooking` int(11) NOT NULL,
  `image` varchar(256) CHARACTER SET latin1 NOT NULL DEFAULT 'book-default-cover.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `id_kategori`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `stok`, `dipinjam`, `dibooking`, `image`) VALUES
(26, 'Filosofi Teras', 13, 'Henry Manampiring', 'Buku Kompas', 2018, '9786024125189', 7, 0, 0, 'img1702959554.jpg'),
(27, 'Ubur-Ubur lembur', 5, 'Raditya Dika', 'Gagas Media', 2018, '9789797809157', 8, 2, 1, 'img1702959678.jpg'),
(28, 'Sebening Syahadat', 11, 'Diva Sinar Rembulan', 'PT Melvana Media Indonesia', 2016, '9786026940346', 9, 0, 0, 'img1702959799.jpg'),
(29, 'Si Juki: Komik Strip', 1, 'Faza Meonk', 'Bukune', 2014, '9786022201397', 9, 0, 0, 'img1702960024.jpg'),
(30, 'Attack on Titan, Vol. 1  ', 1, 'Hajime Isayama', 'Kodansha Comics', 2012, '9781612620244', 7, 0, 0, 'img1702960163.jpg'),
(31, 'Nanti Kita Cerita Tentang Hari Ini', 15, 'Marchella FP', 'POP', 2018, '9786024248215', 12, 0, 0, 'img1702960390.jpg'),
(32, 'Dilan Bagian Kedua: Dia Adalah Dilanku Tahun 1991', 6, 'Pidi Baiq', 'Pastel Boks', 2015, '9786027870994', 6, 0, 0, 'img1702960524.jpg'),
(34, 'Membunuh Orang Gila: Kumpulan Cerpen ', 7, 'Sapardi Djoko Damono', 'Buku Kompas', 2004, '9786024125189', 7, 0, 0, 'img1702960876.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pinjam`
--

CREATE TABLE `detail_pinjam` (
  `no_pinjam` varchar(12) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `image`
--

CREATE TABLE `image` (
  `img` varchar(256) NOT NULL DEFAULT 'lmg.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(5) NOT NULL,
  `kategori` varchar(45) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Komik'),
(2, 'Novel'),
(3, 'Musik'),
(4, 'Horor'),
(5, 'Komedi'),
(6, 'Fiksi Remaja'),
(7, 'Cerpen'),
(8, 'Romance'),
(9, 'Fiksi sejarah'),
(10, 'Fiksi Umum'),
(11, 'Religi'),
(12, 'Chicklit'),
(13, 'Non-Fiksi'),
(14, 'Misteri'),
(15, 'Puisi'),
(25, 'ekonomi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `no_pinjam` varchar(12) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `id_booking` varchar(12) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status` enum('pinjam','kembali') NOT NULL DEFAULT 'pinjam',
  `total_denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `tgl_booking` datetime NOT NULL,
  `id_user` varchar(12) CHARACTER SET latin1 NOT NULL,
  `email_user` varchar(128) CHARACTER SET latin1 NOT NULL,
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` varchar(256) CHARACTER SET latin1 NOT NULL,
  `penulis` varchar(128) CHARACTER SET latin1 NOT NULL,
  `penerbit` varchar(128) CHARACTER SET latin1 NOT NULL,
  `tahun_terbit` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `temp`
--

INSERT INTO `temp` (`id`, `tgl_booking`, `id_user`, `email_user`, `id_buku`, `judul_buku`, `image`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(3, '2024-04-22 10:07:37', '1234567892', 'anisatusya68@gmail.com', 31, 'Nanti Kita Cerita Tentang Hari Ini', 'img1702960390.jpg', 'Marchella FP', 'POP', 2018),
(4, '2024-04-22 10:30:36', '1234567892', 'anisatusya68@gmail.com', 26, 'Filosofi Teras', 'img1702959554.jpg', 'Henry Manampiring', 'Buku Kompas', 2018);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) CHARACTER SET latin1 NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(128) CHARACTER SET latin1 NOT NULL,
  `image` varchar(128) CHARACTER SET latin1 NOT NULL,
  `password` varchar(256) CHARACTER SET latin1 NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `email`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(1234567891, 'Miftya Amanoor\r\n', '', 'mifty@gmail.com', 'pro1700957167.jpg', '$2y$10$6pkFmGsu0SRN7aQVNux/1ebdXli1f3hIGujuMOdxDfKSPoRKacuhG', 2, 1, 1700955703),
(1234567892, 'Anisa Tusya\'adah', '', 'anisatusya68@gmail.com', 'pro1703142439.jpg', '$2y$10$4jOQyQnUyleZcviLW8PEUOB1dXKlJ4gVAElhuEu4CeBYgYyqD4e0G', 1, 1, 1700983061),
(1234567895, 'Ahmad Akrom Mubarok', '', 'akrom@gmai.com', 'default.jpg', '$2y$10$I3Tr4WF8ltu7Sro9gqx4AeU5cG4bcl9JrE6GxpA72Um0JO/tjnI7K', 2, 0, 1703069619),
(1234567896, 'Adelia Safira', '', 'adelia@yahoo.com', 'default.jpg', '$2y$10$uGokM4xHY..4vZTJ88439uYN8egeJ0rSM5H7iEre6.cwNfPJB2Woi', 2, 0, 1703140977),
(1234567897, 'Putri Khairunnisa', '', 'putri@gmail.com', 'default.jpg', '$2y$10$UEODvn.K2EUQtrTRmn0ViOLEtEcHY0ffaLBEnV9gsyIfn51sznmpa', 2, 0, 1703141006),
(1234567898, 'syaha', 'tangerang', 'aadah493@gmail.com', 'default.jpg', '$2y$10$T1hxoWz1GADuzWyOz13cIum5X3HKxNEJ.oYskJdymY3R1IHZWT.Za', 2, 1, 1712301291);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`no_pinjam`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567899;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
