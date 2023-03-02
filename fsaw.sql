-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Mar 2023 pada 08.43
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
-- Struktur dari tabel `kriteria_bobot`
--

CREATE TABLE `kriteria_bobot` (
  `id_bobot` int(11) NOT NULL,
  `bobot_pendidikan` int(11) NOT NULL,
  `bobot_tulis` int(11) NOT NULL,
  `bobot_wawancara` int(11) NOT NULL,
  `bobot_praktik` int(11) NOT NULL,
  `bobot_btq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria_bobot`
--

INSERT INTO `kriteria_bobot` (`id_bobot`, `bobot_pendidikan`, `bobot_tulis`, `bobot_wawancara`, `bobot_praktik`, `bobot_btq`) VALUES
(1, 20, 20, 20, 20, 20);

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
(8, 'Dwi Narko, S.PdI', 'Pendidikan Jenjang D4/S1', 'kediri', '1981-01-30', 'Laki-laki', 'Dusun Pojok Desa Plemahan Kec. Plemahan Kab. Kediri\r\n', 'Guru Mapel Biologi', 2, 1),
(9, 'Nikmatul Fauziah, S.Pd.I', 'Pendidikan Jenjang D4/S1', 'kediri', '1984-06-29', 'Perempuan', 'Desa Putih RT 03 RW O3 Kecamatan Gampengrejo Kabupaten Kediri 64182\r\n', 'Guru Mapel Bhs. Inggris', 2, 1),
(10, 'Dwi Pujiono, S.T', 'Pendidikan Jenjang D4/S1', 'kediri', '1980-03-31', 'Laki-laki', 'Jl. Pepaya RT 001 RW 003 Ds Jantok Kec Purwoasri Kab. Kediri\r\n', 'Guru Mapel Ketrampilan Elektro', 2, 1),
(11, 'Yakarim Huda, S.Pd, S.Sos', 'Pendidikan Jenjang D4/S1', 'kediri', '1983-10-19', 'Laki-laki', 'Dsn. Yuwono RT 004 RW 002 Desa Belor Kecamatan Purwoasri Kab. Kediri\r\n', 'Guru Mapel Sosiologi', 2, 1),
(12, 'Zaenal Abidin, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1975-12-28', 'Laki-laki', 'Jl. Nanas Dsn.Templek Ds. Gadungan Kec. Puncu Kab. Kediri\r\n', 'Guru Mapel Sejarah', 2, 1),
(13, 'Muhamad Safi\'udin, S.S', 'Pendidikan Jenjang D4/S1', 'kediri', '1983-06-15', 'Laki-laki', 'JL. Pahlawan 27 RT. 02 / RW. 08 Ds. Purwoasri Kec. Purwoasri Kab. Kediri\r\n', 'Guru Mapel bahasa arab', 2, 1),
(14, 'Nur Huda, S.Pd.I', 'Pendidikan Jenjang D4/S1', 'kediri', '1981-01-01', 'Laki-laki', 'Jl. Ontoseno RT.01/ RW.17 Desa Gedangsewu Kec. Pare Kab. Kediri', 'Guru Mapel Sejarah Kebudayaan Islam', 2, 1),
(15, 'Nurul Khotimah, S.Pd', 'Pendidikan Jenjang D4/S1', 'bojonegoro', '1975-04-10', 'Perempuan', 'RT. 02 RW. 01 Desa Padangan Kec. Kayen Kidul\r\n', 'Guru Mapel Geografi', 2, 1),
(16, 'Saniyatul Hazimah, S.Pd.I', 'Pendidikan Jenjang D4/S1', 'kediri', '1988-04-07', 'Laki-laki', 'Jl. Pahlawan No. 13 RT.01 RW.07 Ds. Purwoasri Kec. Purwoasri Kab. Kediri\r\n', 'Guru Mapel Matematika', 2, 1),
(17, 'Ibrohim Bajuri, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1983-03-16', 'Laki-laki', 'Dusun Blawe Wetan Desa Blawe Kec. Purwoasri Kab. Kediri\r\n', 'Guru Mapel PJOK', 2, 1),
(18, 'Eddy Susanto, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1988-01-28', 'Laki-laki', 'Dsn. Bangi Ds. Kayenlor RT 002 RW 006 Kec. Plemahan Kab. Kediri\r\n', 'Guru Mapel Seni Rupa', 2, 1),
(19, 'Mohamad Ali Mashadi, S.Pd.I', 'Pendidikan Jenjang D4/S1', 'nganjuk', '1988-06-16', 'Laki-laki', 'Dsn Nglerep RT 002 RW 001 Desa Trayang Kecamatan Ngronggot Kabupaten Nganjuk\r\n', 'Guru Mapel Bhs. Arab', 2, 1),
(20, 'Irfan Zaky, S.Pd', 'Pendidikan Jenjang D4/S1', 'pacitan', '1982-06-19', 'Laki-laki', 'RT 1 RW 2 Dusun Pesing Desa Pesing Kec Purwoasri Kab Kediri\r\n', 'Guru Mapel Aqidah Akhlaq', 2, 1),
(21, 'Zainal Abidin, M.Pd.I', 'Pendidikan Jenjang S2', 'kediri', '1984-01-28', 'Laki-laki', 'Dsn. Wonorenggo Ds. Pesing Kec. Purwoasri Kab. Kediri\r\n', 'Guru Mapel Aqidah Akhlaq', 2, 2),
(22, 'Zumro Atus Saidah, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1986-10-10', 'Perempuan', 'RT 02 RW 02 Dsn. Plemahan Ds. Plemahan Kec. Plemahan Kab. Kediri\r\n', 'Guru Mapel PPKN', 2, 1),
(23, 'Aris Subangkit Wahyu Styawan, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1990-05-20', 'Laki-laki', 'Ds. Mejono Kec. Plemahan Kab. Kediri\r\n', 'Guru Mapel PJOK', 2, 1),
(24, 'Faridatul Munawaroh, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1989-11-12', 'Perempuan', 'Dsn. Kudu RW 002 RT 007 Desa Jantok Kec.Purwoasri Kab.Kediri\r\n', 'Guru Mapel Bhs. Indonesia', 2, 1),
(25, 'Elinda Ayu April Liantika, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1990-04-21', 'Perempuan', 'Dsn. Bogo RT/RW 002/008 Ds. Bulu Kec. Semen Kab. Kediri\r\n', 'Guru Mapel Bimbingan Konseling', 2, 1),
(26, 'Desti Hayutama, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1991-12-30', 'Perempuan', 'Jln. Raya Papar No. 81 Dsn. Papar Selatan Ds. Papar Kab. Kediri', 'Guru Mapel Geografi', 2, 1),
(27, 'Nanung Setyowati, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1983-10-28', 'Perempuan', 'Dsn Berjel RT 02/08 Ds. Jantok kec. Purwoasri Kab. Kediri\r\n', 'Guru Mapel Bimbingan Konseling', 2, 1),
(28, 'Muhayyinatus Sholichah, S.Hum', 'Pendidikan Jenjang D4/S1', 'kediri', '1993-11-15', 'Laki-laki', 'JL salak, RT 03 RW 07 Wonotengah Purwoasri Kediri\r\n', 'Guru Mapel bahasa arab', 2, 1),
(29, 'Ika Tri Nuryati, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1991-12-01', 'Perempuan', 'RT 03 RW 07 Desa Wonotengah Kecamatan Purwoasri Kabupaten Kediri Jawa Timur\r\n', 'Guru Mapel Matematika', 2, 1),
(30, 'Hermin Novitasari, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1993-11-30', 'Perempuan', 'Ds. Mejono Kec. Plemahan Kab. Kediri\r\n', 'Guru Mapel Fisika', 2, 1),
(31, 'Shofi Atul Laily, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1991-06-01', 'Perempuan', 'Dusun Santren Desa Puhjajar RT 001 RW 002 Kecamatan Papar Kabupaten Kediri\r\n', 'Guru Mapel Bhs. Indonesia', 2, 1),
(32, 'Bagus Eriendy Yuli Purnama, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1989-07-16', 'Laki-laki', 'Jl. Raya Papar No. 152 Kec. Papar Kab. Kediri\r\n', 'Guru Mapel Seni Budaya', 2, 1),
(33, 'Dessy Aristyawati, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1992-12-13', 'Perempuan', 'Dsn Papar Utara Rt.  02 Rw.  03 Ds. Papar Kec.  Papar Kab. Kediri\r\n', 'Guru Mapel Matematika', 2, 1),
(34, 'Isnaini Novi Sufaida, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1993-11-12', 'Perempuan', 'Dsn. Petok RT.004 RW.004 Desa Petok Kecamatan Mojo Kabupaten Kediri\r\n', 'Guru Mapel Fisika', 2, 1),
(35, 'Muchamad Ichsan, S.Pd.I', 'Pendidikan Jenjang D4/S1', 'kediri', '1993-04-04', 'Laki-laki', 'Dsn. Kemiri RT 03 RW 01 Ds. Pehkulon Kec. Papar Kab. Kediri\r\n', 'Guru Mapel Sejarah Kebudayaan Islam', 2, 1),
(36, 'Brilli Shouma Amrulloh, S.S', 'Pendidikan Jenjang D4/S1', 'kediri', '1991-03-13', 'Laki-laki', 'Dsn. Matakan RT. 01 RW. 01 Desa Badas  Kec. Badas Kab. Kediri\r\n', 'Guru Mapel Bhs. Inggris', 2, 1),
(37, 'Muhammad Azharul Munir, S.Psi', 'Pendidikan Jenjang D4/S1', 'kediri', '1996-06-08', 'Laki-laki', 'Dusun Pakis RT 008 RW 003 Desa Pakis Kecamatan Kunjang Kabupaten Kediri Provinsi Jawa Timur\r\n', 'Guru Mapel Bimbingan Konseling', 2, 1),
(38, 'Nuansa Fitri Sukma, S.Tr.Kom', 'Pendidikan Jenjang D4/S1', 'trenggalek', '1997-04-19', 'Perempuan', 'Jl.Flamboyan 72 RT.6 RW.2 Kel. Krajan Kec.Mejayan Kab Madiun\r\n', 'Guru Mapel Ketrampilan multimedia', 2, 1),
(39, 'Harishul Ilmi', 'Pendidikan Jenjang D4/S1', 'kediri', '1991-08-01', 'Laki-laki', 'RT 001 RW 001 Dsn. Bongkal Ds. Sambirobyong Kec. Kayen Kidul Kab. Kediri\r\n', 'Guru Mapel Tafsir', 2, 1),
(40, 'Miftakul Khoiri, M.Pd', 'Pendidikan Jenjang S2', 'nganjuk', '1995-02-22', 'Laki-laki', 'RT 02 RW 03 Ds. Dadapan Kec. Ngronggot Kab. Nganjuk\r\n', 'Guru Mapel Qur\'an Hadist', 2, 2),
(41, 'Ainul Adela Rusdiana, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1997-08-11', 'Perempuan', 'RT 002 RW 002 Dsn. Bongkal Ds. Sambirobyong Kec. Kayen Kidul Kab. Kediri\r\n', 'Guru Mapel Ketrampilan Tata boga', 2, 1),
(42, 'Anggraini Ratna Hakim, A.Md', 'Pendidikan Jenjang D3', 'kediri', '1995-01-21', 'Perempuan', 'Jl. Cibaling No.28 Desa Darungan Kecamatan Pare Kab. Kediri\r\n', 'Guru Mapel Ketrampilan Tata busana', 2, 1),
(43, 'Alfin Permana, S.T', 'Pendidikan Jenjang D4/S1', 'kediri', '1997-12-01', 'Laki-laki', 'RT 07 RW 01 Desa Puhjajar Kec. Papar Kab Kediri\r\n', 'Guru Mapel Ketrampilan Tata elektro', 2, 1),
(44, 'Ratna Safira, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1999-05-09', 'Perempuan', 'RT 01 RW 03 Desa Brumbun Kec. Kepung Kab Kediri\r\n', 'Guru Mapel Sosiologi', 2, 1),
(45, 'Akmal Hisbunahar, M.Pd', 'Pendidikan Jenjang S2', 'kediri', '2000-01-03', 'Laki-laki', 'RT 01 RW 01 Desa Jombangan Kec. Pare Kab Kediri\r\n', 'Guru Mapel PJOK', 2, 1),
(46, 'Emelia yesrada, S.E', 'Pendidikan Jenjang D4/S1', 'kediri', '1999-08-11', 'Perempuan', 'RT 002 RW 007 Dsn. Sidorejo Ds. Sidorejo Kec. Pare Kab. Kediri', 'Guru Mapel Ekonomi', 2, 1),
(47, 'Aina hibatul latifah, S.Pd', 'Pendidikan Jenjang D4/S1', 'kediri', '1999-07-27', 'Perempuan', 'RT 02 RW 01 Dsn. Santren Ds. Nanggungan Kec. Kayen Kidul Kab. Kediri', 'Guru Mapel Matematika', 2, 1);

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
(8, 5, 1, 1, 1, 1, 1, 0.2, 0.2, 0.2, 0.2, 0.2, 1),
(9, 8, 0.5, 0.75, 0.5, 0.75, 0, 0.1, 0.15, 0.1, 0.15, 0, 0.5),
(10, 9, 0.5, 0.75, 0.5, 0.75, 0, 0.1, 0.15, 0.1, 0.15, 0, 0.5),
(11, 10, 0.5, 0.75, 0.5, 0.75, 1, 0.1, 0.15, 0.1, 0.15, 0.2, 0.7),
(12, 11, 0.5, 0.75, 0.5, 0.75, 0, 0.1, 0.15, 0.1, 0.15, 0, 0.5),
(13, 12, 0.5, 0.25, 0.5, 0.75, 0.5, 0.1, 0.05, 0.1, 0.15, 0.1, 0.5),
(14, 13, 0.5, 0.5, 0.5, 1, 0.5, 0.1, 0.1, 0.1, 0.2, 0.1, 0.6),
(15, 14, 0.5, 0.75, 0.5, 0.75, 0.5, 0.1, 0.15, 0.1, 0.15, 0.1, 0.6),
(16, 15, 0.5, 0.75, 0.5, 1, 0.5, 0.1, 0.15, 0.1, 0.2, 0.1, 0.65),
(17, 16, 0.5, 0.75, 0.5, 0.75, 0, 0.1, 0.15, 0.1, 0.15, 0, 0.5),
(18, 17, 0.5, 0.75, 0.5, 0.75, 1, 0.1, 0.15, 0.1, 0.15, 0.2, 0.7),
(19, 18, 0.5, 0.75, 0.5, 0.5, 1, 0.1, 0.15, 0.1, 0.1, 0.2, 0.65),
(20, 19, 0.5, 0.75, 0.5, 0.75, 0, 0.1, 0.15, 0.1, 0.15, 0, 0.5),
(21, 20, 0.5, 0.75, 0, 0.75, 0, 0.1, 0.15, 0, 0.15, 0, 0.4),
(22, 21, 1, 1, 1, 0.75, 1, 0.2, 0.2, 0.2, 0.15, 0.2, 0.95),
(23, 22, 0.5, 0.75, 1, 1, 0, 0.1, 0.15, 0.2, 0.2, 0, 0.65),
(24, 23, 0.5, 0.75, 1, 0.75, 1, 0.1, 0.15, 0.2, 0.15, 0.2, 0.8),
(25, 24, 0.5, 0.75, 0, 0.75, 1, 0.1, 0.15, 0, 0.15, 0.2, 0.6),
(26, 25, 0.5, 0.75, 0, 0.75, 0, 0.1, 0.15, 0, 0.15, 0, 0.4),
(27, 26, 0.5, 1, 1, 0.75, 0, 0.1, 0.2, 0.2, 0.15, 0, 0.65),
(28, 27, 0.5, 0.75, 0, 0.75, 0, 0.1, 0.15, 0, 0.15, 0, 0.4),
(29, 28, 0.5, 0.5, 0.5, 0.75, 0, 0.1, 0.1, 0.1, 0.15, 0, 0.45),
(30, 29, 0.5, 0.5, 0.5, 0.75, 0, 0.1, 0.1, 0.1, 0.15, 0, 0.45),
(31, 30, 0.5, 0.75, 0.5, 0.75, 0.5, 0.1, 0.15, 0.1, 0.15, 0.1, 0.6),
(32, 31, 0.5, 0.5, 0.5, 0.75, 0.5, 0.1, 0.1, 0.1, 0.15, 0.1, 0.55),
(33, 32, 0.5, 0.75, 0.5, 0.75, 0.5, 0.1, 0.15, 0.1, 0.15, 0.1, 0.6),
(34, 33, 0.5, 0.75, 1, 0.75, 0.5, 0.1, 0.15, 0.2, 0.15, 0.1, 0.7),
(35, 34, 0.5, 0.75, 1, 0.75, 0.5, 0.1, 0.15, 0.2, 0.15, 0.1, 0.7),
(36, 35, 0.5, 0.5, 0, 0.75, 0.5, 0.1, 0.1, 0, 0.15, 0.1, 0.45),
(37, 36, 0.5, 0.25, 0, 0.75, 0.5, 0.1, 0.05, 0, 0.15, 0.1, 0.4),
(38, 37, 0.5, 0.75, 1, 0.75, 0.5, 0.1, 0.15, 0.2, 0.15, 0.1, 0.7),
(39, 38, 0.5, 0.75, 0, 0.75, 0.5, 0.1, 0.15, 0, 0.15, 0.1, 0.5),
(40, 39, 0.5, 0.5, 1, 0.75, 0.5, 0.1, 0.1, 0.2, 0.15, 0.1, 0.65),
(41, 40, 1, 0.75, 1, 0.75, 0.5, 0.2, 0.15, 0.2, 0.15, 0.1, 0.8),
(42, 41, 0.5, 0.75, 0, 0.75, 0.5, 0.1, 0.15, 0, 0.15, 0.1, 0.5),
(43, 42, 0, 0.75, 0, 0.75, 0, 0, 0.15, 0, 0.15, 0, 0.3),
(44, 43, 0.5, 0.75, 0, 0.5, 1, 0.1, 0.15, 0, 0.1, 0.2, 0.55),
(45, 44, 0.5, 0.75, 0, 0.75, 1, 0.1, 0.15, 0, 0.15, 0.2, 0.6),
(46, 45, 1, 0.75, 0, 0.75, 1, 0.2, 0.15, 0, 0.15, 0.2, 0.7),
(47, 46, 0.5, 0.75, 0, 0.75, 0, 0.1, 0.15, 0, 0.15, 0, 0.4),
(48, 47, 0.5, 0.75, 0, 0.75, 1, 0.1, 0.15, 0, 0.15, 0.2, 0.6),
(49, 49, 0.5, 0.25, 1, 0.75, 0.5, 0.1, 0.05, 0.2, 0.15, 0.1, 0.6);

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
(2, 'admintu', 'admintu', 'admin tugas', 3),
(3, 'adminwaka', 'adminwaka', 'waka', 2),
(4, 'kepsek', 'kepsek', 'kepsek', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kriteria_bobot`
--
ALTER TABLE `kriteria_bobot`
  ADD PRIMARY KEY (`id_bobot`);

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
-- AUTO_INCREMENT untuk tabel `kriteria_bobot`
--
ALTER TABLE `kriteria_bobot`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `penilaian_pegawai`
--
ALTER TABLE `penilaian_pegawai`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
