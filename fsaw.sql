-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2023 pada 11.11
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fsaw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_btq`
--

CREATE TABLE `kriteria_btq` (
  `id_btq` int(11) NOT NULL,
  `jenis_btq` varchar(20) NOT NULL,
  `bobot_btq` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria_btq`
--

INSERT INTO `kriteria_btq` (`id_btq`, `jenis_btq`, `bobot_btq`) VALUES
(1, 'Tidak Lancar', 0),
(2, 'Cukup Lancar', 0.5),
(3, 'Sangat Lancar', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_pendidikan`
--

CREATE TABLE `kriteria_pendidikan` (
  `id_kp` int(11) NOT NULL,
  `jenis_kp` varchar(20) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria_pendidikan`
--

INSERT INTO `kriteria_pendidikan` (`id_kp`, `jenis_kp`, `bobot`) VALUES
(1, 'Baik', 0),
(2, 'Memenuhi', 0.5),
(3, 'Sangat Memenuhi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_praktik_keahlian`
--

CREATE TABLE `kriteria_praktik_keahlian` (
  `id_pk` int(11) NOT NULL,
  `jenis_pk` varchar(20) NOT NULL,
  `bobot_pk` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria_praktik_keahlian`
--

INSERT INTO `kriteria_praktik_keahlian` (`id_pk`, `jenis_pk`, `bobot_pk`) VALUES
(1, 'Sangat Rendah', 0),
(2, 'Rendah', 0.25),
(3, 'Cukup', 0.5),
(4, 'Tinggi', 0.75),
(5, 'Sangat Tinggi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_tes_tulis`
--

CREATE TABLE `kriteria_tes_tulis` (
  `id_ktl` int(11) NOT NULL,
  `jenis_ktl` varchar(20) NOT NULL,
  `bobot_ktl` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria_tes_tulis`
--

INSERT INTO `kriteria_tes_tulis` (`id_ktl`, `jenis_ktl`, `bobot_ktl`) VALUES
(1, 'Sangat Rendah', 0),
(2, 'Rendah', 0.25),
(3, 'Cukup', 0.5),
(4, 'Tinggi', 0.75),
(5, 'Sangat Tinggi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_wawancara`
--

CREATE TABLE `kriteria_wawancara` (
  `id_kw` int(11) NOT NULL,
  `jenis_kw` varchar(20) NOT NULL,
  `bobot_kw` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria_wawancara`
--

INSERT INTO `kriteria_wawancara` (`id_kw`, `jenis_kw`, `bobot_kw`) VALUES
(1, 'Tidak Lancar', 0),
(2, 'Cukup Lancar', 0.5),
(3, 'Sangat Lancar', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `status_pegawai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_lengkap`, `pendidikan`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `posisi`, `status`, `status_pegawai`) VALUES
(1, 'Dan Giri', 'Pendidikan Jenjang D4/S1', 'Malang', '2023-01-10', 'Laki-laki', 'Jalan kanan kiri 12 malang', 'Guru Honorer Psikis', 2, 1),
(3, 'Dedy Hermina', 'Pendidikan Jenjang D4/S1', 'Malang', '1999-01-25', 'Laki-laki', 'Oke', 'Guru Matematika', 2, 1),
(4, 'Hiens Ozawa', 'Pendidikan Jenjang S2', 'Malang', '1999-01-11', 'Laki-laki', 'Oke', 'Guru PA', 2, 2),
(5, 'Wati', 'Pendidikan Jenjang S2', 'Malang', '1995-01-26', 'Laki-laki', 'Oke', 'Guru Acrobat', 2, 2),
(6, 'Tes', 'Pendidikan Jenjang D4/S1', 'Malang', '1999-01-10', 'Perempuan', 'Tes', 'Tes', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_pegawai`
--

CREATE TABLE `penilaian_pegawai` (
  `id_penilaian` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `pendidikan_nilai` float NOT NULL,
  `tes_tulis` float NOT NULL,
  `wawancara` float NOT NULL,
  `praktik_keahlian` float NOT NULL,
  `btq` float NOT NULL,
  `na_pendidikan` float NOT NULL,
  `na_testulis` float NOT NULL,
  `na_wawancara` float NOT NULL,
  `na_pk` float NOT NULL,
  `na_btq` float NOT NULL,
  `nilai_preferensi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penilaian_pegawai`
--

INSERT INTO `penilaian_pegawai` (`id_penilaian`, `id_pegawai`, `pendidikan_nilai`, `tes_tulis`, `wawancara`, `praktik_keahlian`, `btq`, `na_pendidikan`, `na_testulis`, `na_wawancara`, `na_pk`, `na_btq`, `nilai_preferensi`) VALUES
(5, 1, 0.5, 0.5, 0.5, 0.5, 0.5, 0.1, 0.1, 0.1, 0.1, 0.1, 0.5),
(6, 3, 1, 0.5, 1, 1, 1, 0.2, 0.1, 0.2, 0.2, 0.2, 0.9),
(7, 4, 0.5, 0.75, 0.5, 0.75, 0.5, 0.1, 0.15, 0.1, 0.15, 0.1, 0.6),
(8, 5, 1, 1, 1, 1, 1, 0.2, 0.2, 0.2, 0.2, 0.2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `jabatan`) VALUES
(2, 'admintu', 'admintu', 'admin tu', 3),
(3, 'adminwaka', 'adminwaka', 'waka', 2),
(4, 'kepsek', 'kepsek', 'kepsek', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kriteria_btq`
--
ALTER TABLE `kriteria_btq`
  ADD PRIMARY KEY (`id_btq`);

--
-- Indeks untuk tabel `kriteria_pendidikan`
--
ALTER TABLE `kriteria_pendidikan`
  ADD PRIMARY KEY (`id_kp`);

--
-- Indeks untuk tabel `kriteria_praktik_keahlian`
--
ALTER TABLE `kriteria_praktik_keahlian`
  ADD PRIMARY KEY (`id_pk`);

--
-- Indeks untuk tabel `kriteria_tes_tulis`
--
ALTER TABLE `kriteria_tes_tulis`
  ADD PRIMARY KEY (`id_ktl`);

--
-- Indeks untuk tabel `kriteria_wawancara`
--
ALTER TABLE `kriteria_wawancara`
  ADD PRIMARY KEY (`id_kw`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `penilaian_pegawai`
--
ALTER TABLE `penilaian_pegawai`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kriteria_btq`
--
ALTER TABLE `kriteria_btq`
  MODIFY `id_btq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kriteria_pendidikan`
--
ALTER TABLE `kriteria_pendidikan`
  MODIFY `id_kp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kriteria_praktik_keahlian`
--
ALTER TABLE `kriteria_praktik_keahlian`
  MODIFY `id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kriteria_tes_tulis`
--
ALTER TABLE `kriteria_tes_tulis`
  MODIFY `id_ktl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kriteria_wawancara`
--
ALTER TABLE `kriteria_wawancara`
  MODIFY `id_kw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `penilaian_pegawai`
--
ALTER TABLE `penilaian_pegawai`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
