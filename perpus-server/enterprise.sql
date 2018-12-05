-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Nov 2018 pada 14.09
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_tk2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(2) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`nis`, `nama`, `jk`, `ttl`, `kelas`, `image`) VALUES
('111', 'Fany', 'L', '2018-09-04', '3E', 'profile2.jpg'),
('1111', 'yudha', 'L', '2018-09-01', '3E', 'matematika.jpg'),
('122', 'Nitha', 'P', '2018-09-03', '3E', 'Hydrangeas.jpg'),
('1222', 'Jerry', 'L', '0000-00-00', '3E', 'user2.png'),
('123', 'qwerty', 'L', '2018-08-26', '3E', 'user.png'),
('124', 'asd', 'L', '2018-08-01', '3E', 'user1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `kode_buku` varchar(5) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `klasifikasi` varchar(25) DEFAULT NULL,
  `tanggal_input` date NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul`, `pengarang`, `klasifikasi`, `tanggal_input`, `kategori`, `stok`, `image`) VALUES
('1', 'naksn', 'ajnsjk', '<p>nasjk</p>', '2018-10-09', '400', 8, 'ipa4.jpg'),
('111', 'IPA', 'Edition', '<p>Buku Ipa&nbsp;</p>', '2018-09-03', 'Pelajaran', 9, 'bio.jpg'),
('112', 'Matematika', 'Edition', '<p>Buku Matematika</p>', '2018-09-04', 'Pelajaran', 4, 'matematika2.jpg'),
('113', 'Fisika', 'Edition', '<p>Buku Fisika SMA</p>', '2018-09-12', 'Pelajaran', 8, 'fisika.jpg'),
('114', 'Kimia', 'Edition', '<p>Kimia SMA</p>', '2018-09-12', 'Pelajaran', 8, 'kimia.jpg'),
('124', 'Tsubasa', 'Tokyo', '<p>Komik Kartun</p>', '2018-09-17', 'Komik', 0, 'buku11.jpg'),
('2', 'nkdclk', 'ksbdjbs', '<p>jbsjdkb</p>', '2004-12-12', 'Filsafat dan Psikologi', 0, 'fiksi3.jpg'),
('2001', 'mbjbsa', 'ajsbjabs', '<p>ajsbjavs</p>', '1211-12-12', 'Filsafat dan Psikologi', 0, 'fiksi1.jpg'),
('2002', '1', '2', '<p>11</p>', '2211-11-11', 'Filsafat dan Psikologi', 0, 'fiksi2.jpg'),
('4001', 'fiksi', 'ghjgj', '<p>gcghchg</p>', '2013-12-12', 'Umum14', 0, 'fiksi.jpg'),
('4003', 'naskln', 'anskn', '<p>nakn</p>', '1313-12-12', 'Umum14', 0, 'buku21.jpg'),
('4005', 'nklaSNK', 'AKLDSNLK', '<p>KNAJSKB</p>', '2004-12-12', 'Umum14', 0, 'profile.jpg'),
('4007', 'penjasorkes', 'penjasorkes', '<p>penjasorkes</p>', '2009-12-12', 'Umum14', 0, '11.jpg'),
('4008', 'penjasorkes', 'penjasorkes', '<p>penjasorkes</p>', '2009-12-12', 'Umum14', 0, '111.jpg'),
('4009', 'qwerty', 'qwerty', '<p>qwerty`</p>', '1999-12-12', 'Umum14', 0, '1.jpg'),
('9011', 'Matematika', 'dhdt', '<p>efsrtgs</p>', '2009-02-13', 'hukum', 0, 'buku9.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_buku`
--

INSERT INTO `kategori_buku` (`id_kategori`, `nama_kategori`) VALUES
(100, 'pelajaran'),
(200, 'Filsafat dan Psikologi'),
(300, 'Agama'),
(400, 'Umum14'),
(500, 'Sosial'),
(600, 'Sains dan Matematika'),
(700, 'Teknologi'),
(800, 'Seni dan Rekreasi'),
(900, 'komik'),
(901, 'hukum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_transaksi` varchar(12) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `kode_buku` varchar(5) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_transaksi`, `nis`, `kode_buku`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
('20181119015', '1111', '111', '2018-11-19', '2018-11-26'),
('20181119016', '1222', '111', '2018-11-19', '2018-11-26'),
('20181125001', '1111', '112', '2018-11-25', '2018-12-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_transaksi` varchar(12) DEFAULT NULL,
  `tgl_pengembalian` date DEFAULT NULL,
  `denda` varchar(2) DEFAULT NULL,
  `nominal` double DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id_transaksi`, `tgl_pengembalian`, `denda`, `nominal`, `id_petugas`) VALUES
('20180910001', '2018-09-10', 'Y', 100000, NULL),
('20180910001', '2018-09-10', 'Y', 100000, NULL),
('20180910002', '2018-09-10', 'N', 0, NULL),
('20180910002', '2018-09-10', 'N', 0, NULL),
('20180910003', '2018-09-10', 'Y', 100000, NULL),
('20180910003', '2018-09-10', 'Y', 100000, NULL),
('20180911001', '2018-09-13', '', 0, NULL),
('20180911001', '2018-09-13', '', 0, NULL),
('20180913001', '2018-09-13', '', 0, NULL),
('20180913001', '2018-09-13', '', 0, NULL),
('20180913002', '2018-09-13', '', 0, NULL),
('20180913002', '2018-09-13', '', 0, NULL),
('20180913003', '2018-09-13', '', 0, NULL),
('20180913003', '2018-09-13', '', 0, NULL),
('20180913004', '2018-09-13', '', 0, NULL),
('20180913004', '2018-09-13', '', 0, NULL),
('20180913005', '2018-09-13', '', 0, NULL),
('20180913005', '2018-09-13', '', 0, NULL),
('20180917001', '2018-10-31', '', 0, NULL),
('20180917001', '2018-10-31', '', 0, NULL),
('20181031002', '2018-10-31', '', 0, NULL),
('20181031002', '2018-10-31', '', 0, NULL),
('20181031001', '2018-10-31', '', 0, NULL),
('20181031001', '2018-10-31', '', 0, NULL),
('20181027001', '2018-10-31', '', 0, NULL),
('20181027001', '2018-10-31', '', 0, NULL),
('20181029001', '2018-10-31', '', 0, NULL),
('20181029001', '2018-10-31', '', 0, NULL),
('20181029002', '2018-10-31', '', 0, NULL),
('20181029002', '2018-10-31', '', 0, NULL),
('20181030001', '2018-10-31', '', 0, NULL),
('20181030001', '2018-10-31', '', 0, NULL),
('20181030002', '2018-10-31', '', 0, NULL),
('20181030002', '2018-10-31', '', 0, NULL),
('20181030003', '2018-10-31', '', 0, NULL),
('20181030003', '2018-10-31', '', 0, NULL),
('20181030004', '2018-10-31', '', 0, NULL),
('20181030004', '2018-10-31', '', 0, NULL),
('20181030005', '2018-10-31', '', 0, NULL),
('20181030005', '2018-10-31', '', 0, NULL),
('20181031003', '2018-11-01', '', 0, NULL),
('20181031003', '2018-11-01', '', 0, NULL),
('20181101001', '2018-11-01', '', 0, NULL),
('20181101001', '2018-11-01', '', 0, NULL),
('20181101002', '2018-11-01', '', 0, NULL),
('20181101002', '2018-11-01', '', 0, NULL),
('20181101003', '2018-11-01', '', 0, NULL),
('20181101003', '2018-11-01', '', 0, NULL),
('20181101004', '2018-11-01', '', 0, NULL),
('20181101004', '2018-11-01', '', 0, NULL),
('20181101005', '2018-11-01', '', 0, NULL),
('20181101005', '2018-11-01', '', 0, NULL),
('20181101006', '2018-11-02', '', 0, NULL),
('20181101006', '2018-11-02', '', 0, NULL),
('20181101007', '2018-11-02', '', 0, NULL),
('20181101007', '2018-11-02', '', 0, NULL),
('20181101008', '2018-11-05', '', 0, NULL),
('20181101008', '2018-11-05', '', 0, NULL),
('20181105001', '2018-11-08', '', 0, NULL),
('20181101009', '2018-11-08', '', 0, NULL),
('20181105002', '2018-11-08', '', 0, NULL),
('20181105002', '2018-11-08', '', 0, NULL),
('20181105003', '2018-11-10', '', 0, NULL),
('20181105003', '2018-11-10', '', 0, NULL),
('20181105004', '2018-11-10', '', 0, NULL),
('20181105004', '2018-11-10', '', 0, NULL),
('20181110001', '2018-11-10', '', 0, NULL),
('20181110001', '2018-11-10', '', 0, NULL),
('20181110002', '2018-11-10', 'N', 0, NULL),
('20181110002', '2018-11-10', 'N', 0, NULL),
('20181110003', '2018-11-10', '', 0, NULL),
('20181110003', '2018-11-10', '', 0, NULL),
('20181110004', '2018-11-10', '', 0, NULL),
('20181110004', '2018-11-10', '', 0, NULL),
('20181110005', '2018-11-10', '', 0, NULL),
('20181110005', '2018-11-10', '', 0, NULL),
('20181110006', '2018-11-10', '', 0, NULL),
('20181112002', '2018-11-16', '', 0, NULL),
('20181112002', '2018-11-16', '', 0, NULL),
('20181112004', '2018-11-16', '', 0, NULL),
('20181112004', '2018-11-16', '', 0, NULL),
('20181112003', '2018-11-16', '', 0, NULL),
('20181112003', '2018-11-16', '', 0, NULL),
('20181112001', '2018-11-16', '', 0, NULL),
('20181112001', '2018-11-16', '', 0, NULL),
('20181112005', '2018-11-16', '', 0, NULL),
('20181112005', '2018-11-16', '', 0, NULL),
('20181116001', '2018-11-16', '', 0, NULL),
('20181116001', '2018-11-16', '', 0, NULL),
('20181116003', '2018-11-19', '', 0, NULL),
('20181116003', '2018-11-19', '', 0, NULL),
('20181119002', '2018-11-19', '', 0, NULL),
('20181119002', '2018-11-19', '', 0, NULL),
('20181119003', '2018-11-19', '', 0, NULL),
('20181119003', '2018-11-19', '', 0, NULL),
('20181119004', '2018-11-19', '', 0, NULL),
('20181119004', '2018-11-19', '', 0, NULL),
('20181119005', '2018-11-19', '', 0, NULL),
('20181119005', '2018-11-19', '', 0, NULL),
('20181119001', '2018-11-19', '', 0, NULL),
('20181119001', '2018-11-19', '', 0, NULL),
('20181116002', '2018-11-19', '', 0, NULL),
('20181116002', '2018-11-19', '', 0, NULL),
('20181119006', '2018-11-19', '', 0, NULL),
('20181119006', '2018-11-19', '', 0, NULL),
('20181119007', '2018-11-19', '', 0, NULL),
('20181119007', '2018-11-19', '', 0, NULL),
('20181119007', '2018-11-19', '', 0, NULL),
('20181119007', '2018-11-19', '', 0, NULL),
('20181119009', '2018-11-19', '', 0, NULL),
('20181119009', '2018-11-19', '', 0, NULL),
('20181119008', '2018-11-19', '', 0, NULL),
('20181119010', '2018-11-19', '', 0, NULL),
('20181119010', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('0', '2018-11-19', '0', 0, NULL),
('0', '2018-11-19', '0', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119012', '2018-11-19', '', 0, NULL),
('20181119012', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119011', '2018-11-19', '', 0, NULL),
('20181119013', '2018-11-19', '', 0, NULL),
('20181119013', '2018-11-19', '', 0, NULL),
('20181119014', '2018-11-19', '', 0, NULL),
('20181119014', '2018-11-19', '', 0, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `user` varchar(45) DEFAULT NULL,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `user`, `password`) VALUES
(2, 'jamal', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'admin', '0192023a7bbd73250516f069df18b500'),
(4, 'doraemon', 'd4388c4d4b47c6655b16fe5b13184b32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp`
--

CREATE TABLE `tmp` (
  `kode_buku` varchar(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(12) DEFAULT NULL,
  `nis` varchar(10) DEFAULT NULL,
  `kode_buku` varchar(5) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nis`, `kode_buku`, `tanggal_pinjam`, `tanggal_kembali`, `status`, `id_petugas`, `keterangan`) VALUES
('20180910001', '123', '111', '2018-09-10', '2018-09-17', 'Y', NULL, '35000'),
('20180910002', '123', '111', '2018-09-10', '2018-09-17', 'Y', NULL, '35000'),
('20180910002', '123', '112', '2018-09-10', '2018-09-17', 'Y', NULL, '35000'),
('20180910003', '123', '111', '2018-08-10', '2018-08-17', 'Y', NULL, '50500'),
('20180911001', '123', '111', '2018-09-11', '2018-09-18', 'Y', NULL, '34500'),
('20180911001', '123', '112', '2018-09-11', '2018-09-18', 'Y', NULL, '34500'),
('20180913001', '123', '114', '2018-09-13', '2018-09-20', 'Y', NULL, '33500'),
('20180913001', '123', '112', '2018-09-13', '2018-09-20', 'Y', NULL, '33500'),
('20180913002', '123', '111', '2018-09-13', '2018-09-20', 'Y', NULL, '33500'),
('20180913003', '123', '111', '2018-09-13', '2018-09-20', 'Y', NULL, '33500'),
('20180913003', '123', '112', '2018-09-13', '2018-09-20', 'Y', NULL, '33500'),
('20180913004', '123', '111', '2018-09-13', '2018-09-20', 'Y', NULL, '33500'),
('20180913005', '123', '111', '2018-09-13', '2018-09-20', 'Y', NULL, '33500'),
('20180913005', '123', '114', '2018-09-13', '2018-09-20', 'Y', NULL, '33500'),
('20180917001', '122', '124', '2018-09-17', '2018-09-24', 'Y', NULL, '31500'),
('20181027001', '122', '112', '2018-10-27', '2018-11-03', 'Y', NULL, '11500'),
('20181029001', '124', '112', '2018-10-29', '2018-11-05', 'Y', NULL, '10500'),
('20181029002', '124', '112', '2018-10-29', '2018-11-05', 'Y', NULL, '10500'),
('20181030001', '124', '111', '2018-10-30', '2018-11-06', 'Y', NULL, '10000'),
('20181030002', '124', '111', '2018-10-30', '2018-11-06', 'Y', NULL, '10000'),
('20181030003', '124', '111', '2018-10-30', '2018-11-06', 'Y', NULL, '10000'),
('20181030004', '124', '111', '2018-10-30', '2018-11-06', 'Y', NULL, '10000'),
('20181030005', '124', '111', '2018-10-30', '2018-11-06', 'Y', NULL, '10000'),
('20181031001', '1111', '111', '2018-10-31', '2018-11-07', 'Y', NULL, '9500'),
('20181031002', '111', '111', '2018-10-31', '2018-11-07', 'Y', NULL, '9500'),
('20181031003', '124', '112', '2018-10-31', '2018-11-07', 'Y', NULL, '9500'),
('20181101001', '123', '113', '2018-11-01', '2018-11-08', 'Y', NULL, '9000'),
('20181101002', '123', '111', '2018-11-01', '2018-11-08', 'Y', NULL, '9000'),
('20181101003', '123', '111', '2018-11-01', '2018-11-08', 'Y', NULL, '9000'),
('20181101004', '1111', '111', '2018-11-01', '2018-11-08', 'Y', NULL, '9000'),
('20181101005', '124', '112', '2018-11-01', '2018-11-08', 'Y', NULL, '9000'),
('20181101006', '122', '9011', '2018-11-01', '2018-11-08', 'Y', NULL, '9000'),
('20181101007', '111', '112', '2018-11-01', '2018-11-08', 'Y', NULL, '9000'),
('20181101008', '123', '112', '2018-11-01', '2018-11-08', 'Y', NULL, '9000'),
('20181105002', '122', '111', '2018-11-05', '2018-11-12', 'Y', NULL, '7000'),
('20181105003', '124', '111', '2018-11-05', '2018-11-12', 'Y', NULL, '7000'),
('20181105004', '111', '111', '2018-11-05', '2018-11-12', 'Y', NULL, '7000'),
('20181110001', '123', '111', '2018-11-10', '2018-11-17', 'Y', NULL, '4500'),
('20181110002', '122', '112', '2018-11-10', '2018-11-17', 'Y', NULL, '4500'),
('20181110003', '124', '111', '2018-11-10', '2018-11-17', 'Y', NULL, '4500'),
('20181110004', '122', '111', '2018-11-10', '2018-11-17', 'Y', NULL, '4500'),
('20181110005', '124', '111', '2018-11-10', '2018-11-17', 'Y', NULL, '4500'),
('20181112001', '1111', '111', '2018-11-12', '2018-11-19', 'Y', NULL, '3500'),
('20181112002', '124', '113', '2018-11-12', '2018-11-19', 'Y', NULL, '3500'),
('20181112003', '1111', '114', '2018-11-12', '2018-11-19', 'Y', NULL, '3500'),
('20181112004', '124', '111', '2018-11-12', '2018-11-19', 'Y', NULL, '3500'),
('20181112005', '123', '111', '2018-11-12', '2018-11-19', 'Y', NULL, '3500'),
('20181116001', '123', '111', '2018-11-16', '2018-11-23', 'Y', NULL, '1500'),
('20181116002', '111', '111', '2018-11-16', '2018-11-23', 'Y', NULL, '1500'),
('20181116003', '111', '111', '2018-11-16', '2018-11-23', 'Y', NULL, '1500'),
('20181119001', '111', '111', '2018-11-19', '2018-11-26', 'Y', NULL, '0'),
('20181119002', '1111', '111', '2018-11-19', '2018-11-26', 'Y', NULL, '0'),
('20181119003', '1111', '112', '2018-11-19', '2018-11-26', 'Y', NULL, '0'),
('20181119004', '123', '112', '2018-11-19', '2018-11-26', 'Y', NULL, '0'),
('20181119005', '123', '112', '2018-11-19', '2018-11-26', 'Y', NULL, '0'),
('20181119006', '111', '112', '2018-11-19', '2018-11-26', 'Y', NULL, '0'),
('20181119007', '111', '112', '2018-11-19', '2018-11-26', 'Y', NULL, '0'),
('20181119008', '111', '1', '2018-11-19', '2018-11-26', 'N', NULL, '0'),
('20181119009', '1222', '1', '2018-11-19', '2018-11-26', 'Y', NULL, '0'),
('20181119010', '1111', '111', '2018-11-19', '2018-11-26', 'Y', NULL, '0'),
('20181119011', '1111', '111', '2018-11-19', '2018-11-26', 'Y', NULL, '0'),
('20181119012', '1111', '111', '2018-11-19', '2018-11-26', 'Y', NULL, '0'),
('20181119013', '1111', '111', '2018-11-19', '2018-11-26', 'Y', NULL, '0'),
('20181119014', '1111', '111', '2018-11-19', '2018-11-26', 'Y', NULL, '0'),
('20181119015', '1111', '111', '2018-11-19', '2018-11-26', 'N', NULL, '0'),
('20181119016', '1222', '111', '2018-11-19', '2018-11-26', 'N', NULL, '0'),
('20181125001', '1111', '112', '2018-11-25', '2018-12-02', 'N', NULL, '3000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=902;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;