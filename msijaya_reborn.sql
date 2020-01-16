-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 02:47 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msijaya_reborn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL COMMENT 'admin role',
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_warga` int(11) DEFAULT NULL COMMENT 'warga / not',
  `keterangan` varchar(50) NOT NULL COMMENT 'keterangan siapa'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`id`, `role`) VALUES
(1, 'superadmin'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `belanja_bulanan`
--

CREATE TABLE `belanja_bulanan` (
  `id_bbulanan` int(1) NOT NULL,
  `periode` int(10) NOT NULL,
  `keperluan` int(10) NOT NULL,
  `nominal` float DEFAULT NULL,
  `waktu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `belanja_insidental`
--

CREATE TABLE `belanja_insidental` (
  `id_binsidental` int(10) NOT NULL,
  `periode` int(10) NOT NULL,
  `kegiatan` text,
  `waktu` varchar(100) DEFAULT NULL,
  `nominal` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `belanja_insidental`
--

INSERT INTO `belanja_insidental` (`id_binsidental`, `periode`, `kegiatan`, `waktu`, `nominal`) VALUES
(1, 2, 'Buka Puasa Warga MSI', '2017-4-6', 2000000),
(2, 2, 'Pembangunan FASUM', '2017-4-12', 5000000),
(6, 3, 'Kerja Bakti FASUM', '2018-6-7', 1000000),
(8, 2, 'Kerja Bakti Masjid', '2017-4-12', 200000),
(10, 2, 'Kerjabakti Plensengan', '2017-4-6', 100000),
(11, 12, 'Jalan Santai', '2018-09-12', 20000000),
(12, 12, 'Buka Bersama', '2018-09-29', 17500000),
(13, 16, 'Balap Sepeda', '2018-10-17', 500000),
(14, 17, 'Halal bi halal', '2018-09-24', 50000000);

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(10) NOT NULL,
  `donatur` int(10) NOT NULL,
  `kegiatan` int(10) DEFAULT NULL,
  `nominal` float NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `donatur`, `kegiatan`, `nominal`, `tanggal`) VALUES
(1, 1, 1, 2000000, '2018-08-12'),
(2, 1, 2, 2300000, '2018-08-18'),
(3, 1, 4, 200000, '2018-09-23'),
(4, 2, 3, 700000, '2018-09-22'),
(6, 2, 3, 300000, '2019-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `id_donatur` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `telepon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`id_donatur`, `nama`, `alamat`, `instansi`, `telepon`) VALUES
(1, 'Jajan Sunaryo', 'Gading Utara Blok 5', 'Lamborghini', '087663546'),
(2, 'Siti Ubaid', 'Kemangmang Indah', 'Google', '0872635162');

-- --------------------------------------------------------

--
-- Table structure for table `iuran_bulanan`
--

CREATE TABLE `iuran_bulanan` (
  `id` int(200) NOT NULL,
  `periode` int(10) NOT NULL,
  `detail` mediumtext NOT NULL,
  `status` enum('open','close') CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL DEFAULT 'close' COMMENT 'status pembayaran OPEN / CLOSE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iuran_bulanan`
--

INSERT INTO `iuran_bulanan` (`id`, `periode`, `detail`, `status`) VALUES
(1, 1, '[\r\n	{\r\n		color: \"red\",\r\n		value: \"#f00\"\r\n	},\r\n	{\r\n		color: \"green\",\r\n		value: \"#0f0\"\r\n	},\r\n	{\r\n		color: \"blue\",\r\n		value: \"#00f\"\r\n	},\r\n	{\r\n		color: \"cyan\",\r\n		value: \"#0ff\"\r\n	},\r\n	{\r\n		color: \"magenta\",\r\n		value: \"#f0f\"\r\n	},\r\n	{\r\n		color: \"yellow\",\r\n		value: \"#ff0\"\r\n	},\r\n	{\r\n		color: \"black\",\r\n		value: \"#000\"\r\n	}\r\n]', 'close');

-- --------------------------------------------------------

--
-- Table structure for table `iuran_insidental`
--

CREATE TABLE `iuran_insidental` (
  `id_iinsidental` int(10) NOT NULL,
  `kegiatan` int(10) NOT NULL,
  `detail` mediumtext NOT NULL,
  `status` enum('open','close') NOT NULL DEFAULT 'close' COMMENT 'status pembayaran OPEN / CLOSE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_insidental`
--

CREATE TABLE `kegiatan_insidental` (
  `id_kegiatan` int(10) NOT NULL,
  `periode` int(10) NOT NULL,
  `kegiatan` text NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_insidental`
--

INSERT INTO `kegiatan_insidental` (`id_kegiatan`, `periode`, `kegiatan`, `tanggal`, `keterangan`) VALUES
(1, 9, 'Tarik Tambang', '2018-09-03', 'Hanya tarik tambang.'),
(2, 9, 'Balap Sepeda', '2018-09-19', 'Offroad balap sepeda.'),
(3, 9, 'Jalan Sehat', '2020-01-04', 'Hanya jalan-jalan'),
(4, 14, 'Tarik Tambang', '2018-09-22', 'Tarik tambang anak-anak'),
(5, 15, 'Balap Sepeda', '2018-10-17', 'Balap sepeda 20 km'),
(6, 19, 'Hadiah agustusan', '2020-08-17', 'pembelian hadiah agustusan'),
(8, 19, 'Halal bi halal', '12-12-2019', 'kegiatan halal bi halal tahunan');

--
-- Triggers `kegiatan_insidental`
--
DELIMITER $$
CREATE TRIGGER `hapusinsiden` AFTER DELETE ON `kegiatan_insidental` FOR EACH ROW begin delete from iinsidental where kegiatan=old.id_kegiatan;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `keperluan_bulanan`
--

CREATE TABLE `keperluan_bulanan` (
  `id_keperluan` int(10) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keperluan_bulanan`
--

INSERT INTO `keperluan_bulanan` (`id_keperluan`, `keperluan`, `keterangan`) VALUES
(1, 'Internet IndiHome', 'Tagihan akses internet warga'),
(2, 'Gaji Satpam', NULL),
(3, 'Jasa Angkut Sampah', NULL),
(4, 'Cicilan CCTV', NULL),
(5, 'Konser Dangdut', 'Konser dangdut bulanan');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus_bidang`
--

CREATE TABLE `pengurus_bidang` (
  `pid` varchar(10) NOT NULL,
  `tid` int(1) NOT NULL,
  `bid` int(1) NOT NULL,
  `uid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengurus_bidang`
--

INSERT INTO `pengurus_bidang` (`pid`, `tid`, `bid`, `uid`) VALUES
('15200711', 7, 1, 129),
('15200721', 7, 2, 35),
('15200731', 7, 3, 14),
('15200741', 7, 4, 175),
('15200751', 7, 5, 98),
('15200761', 7, 6, 149),
('15200771', 7, 7, 89),
('15200781', 7, 8, 71),
('15200812', 8, 1, 155),
('15200813', 8, 1, 86),
('15200814', 8, 1, 179),
('15200822', 8, 2, 131),
('15200823', 8, 2, 142),
('15200832', 8, 3, 15),
('15200833', 8, 3, 48),
('15200842', 8, 4, 180),
('15200843', 8, 4, 174),
('15200844', 8, 4, 153),
('15200845', 8, 4, 183),
('15200852', 8, 5, 171),
('15200853', 8, 5, 22),
('15200854', 8, 5, 170),
('15200862', 8, 6, 43),
('15200863', 8, 6, 82),
('15200864', 8, 6, 11),
('15200872', 8, 7, 75),
('15200873', 8, 7, 176),
('15200874', 8, 7, 60),
('15200882', 8, 8, 124),
('15200883', 8, 8, 77);

-- --------------------------------------------------------

--
-- Table structure for table `pengurus_bidang_tipe`
--

CREATE TABLE `pengurus_bidang_tipe` (
  `bid` int(1) NOT NULL,
  `deskripsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengurus_bidang_tipe`
--

INSERT INTO `pengurus_bidang_tipe` (`bid`, `deskripsi`) VALUES
(1, 'keamanan dan ketertiban'),
(2, 'kebersihan, kesehatan dan lingkungan hidup'),
(3, 'pemuda olahraga, seni, kreasi dan lingkungan hidup'),
(4, 'sarana, prasarana dan pembangunan'),
(5, 'hubungan masyarakat dan publikasi'),
(6, 'kerohanian dan sosial'),
(7, 'seksi khusus rukun kematian (RKM)'),
(8, 'seksi PKK');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus_tipe`
--

CREATE TABLE `pengurus_tipe` (
  `id` int(1) NOT NULL,
  `tid` varchar(2) NOT NULL,
  `deskripsi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengurus_tipe`
--

INSERT INTO `pengurus_tipe` (`id`, `tid`, `deskripsi`) VALUES
(1, '01', 'penasehat'),
(2, '02', 'ketua'),
(3, '03', 'sekretaris'),
(4, '04', 'wakil sekretaris'),
(5, '05', 'bendahara'),
(6, '06', 'wakil bendahara'),
(7, '07', 'koordinator'),
(8, '08', 'anggota');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus_utama`
--

CREATE TABLE `pengurus_utama` (
  `pid` varchar(10) NOT NULL,
  `tid` int(1) NOT NULL,
  `uid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengurus_utama`
--

INSERT INTO `pengurus_utama` (`pid`, `tid`, `uid`) VALUES
('152002', 1, 68),
('152003', 2, 126),
('152004', 3, 127),
('152005', 4, 107),
('152006', 5, 93);

-- --------------------------------------------------------

--
-- Table structure for table `periode_bulanan`
--

CREATE TABLE `periode_bulanan` (
  `id` int(10) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `tipe` varchar(8) NOT NULL COMMENT 'iuran / belanja',
  `posisi` int(1) NOT NULL COMMENT 'id from table POSISI'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `periode_bulanan`
--
DELIMITER $$
CREATE TRIGGER `hapusbulan` AFTER DELETE ON `periode_bulanan` FOR EACH ROW begin delete from ibulanan where periode=old.id_periode; 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `periode_insidental`
--

CREATE TABLE `periode_insidental` (
  `id` int(10) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `tipe` varchar(8) NOT NULL COMMENT 'iuran / belanja',
  `posisi` int(1) NOT NULL COMMENT 'id from table POSISI'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `periode_laporan`
--

CREATE TABLE `periode_laporan` (
  `id` int(10) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `posisi` int(1) NOT NULL COMMENT 'id from table POSISI'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `id_petugas` int(100) NOT NULL,
  `tipe` int(1) NOT NULL COMMENT '0 or 1 | dalam / luar',
  `status` int(1) NOT NULL COMMENT '1, 2 or 3 | active, pending, non-active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='this table for status petugas activate, pending or non-active';

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `id_petugas`, `tipe`, `status`) VALUES
(3, 75, 0, 2),
(4, 76, 0, 2),
(5, 77, 0, 2),
(6, 78, 0, 2),
(7, 79, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `petugas_activity`
--

CREATE TABLE `petugas_activity` (
  `id` int(11) NOT NULL COMMENT 'ID for row',
  `id_petugas` int(11) NOT NULL COMMENT 'ID for petugas',
  `id_warga` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas_activity`
--

INSERT INTO `petugas_activity` (`id`, `id_petugas`, `id_warga`, `tanggal`, `activity`) VALUES
(1, 75, 1, '2019-06-11 08:15:00', 'penarikan iuran bulanan'),
(2, 75, 2, '2019-06-11 08:40:00', 'penarikan iuran bulanan'),
(3, 75, 2, '2019-06-12 13:40:00', 'penarikan iuran bulanan');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_dalam`
--

CREATE TABLE `petugas_dalam` (
  `id` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `id_warga` int(20) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `masa_dari` date NOT NULL,
  `masa_sampai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas_dalam`
--

INSERT INTO `petugas_dalam` (`id`, `tipe`, `id_warga`, `status`, `created`, `masa_dari`, `masa_sampai`) VALUES
(75, 'iuran', 4, 2, '2019-03-12 11:06:21', '2019-03-13', '2019-12-19'),
(76, 'iuran', 2, 2, '2019-03-12 11:06:21', '2019-03-13', '2019-12-19'),
(77, 'iuran', 37, 2, '2019-03-12 11:06:21', '2019-03-13', '2019-12-19'),
(78, 'iuran', 23, 3, '2019-03-12 11:06:21', '2019-03-13', '2019-01-16'),
(79, 'iuran', 3, 3, '2019-06-29 12:53:13', '2018-11-27', '2019-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_luar`
--

CREATE TABLE `petugas_luar` (
  `id` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `masa_dari` date NOT NULL,
  `masa_sampai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petugas_status`
--

CREATE TABLE `petugas_status` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas_status`
--

INSERT INTO `petugas_status` (`id`, `deskripsi`) VALUES
(1, 'aktif'),
(2, 'tunda'),
(3, 'nonaktif');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_tipe`
--

CREATE TABLE `petugas_tipe` (
  `id` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE `posisi` (
  `id` int(11) NOT NULL,
  `posisi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rumah`
--

CREATE TABLE `rumah` (
  `id` int(10) NOT NULL,
  `no_rumah` varchar(10) NOT NULL,
  `blok_rumah` varchar(5) NOT NULL,
  `pemilik` int(10) NOT NULL,
  `pj` int(10) NOT NULL COMMENT 'penanggung jawab',
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `id_warga` int(11) DEFAULT NULL COMMENT 'id warga',
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` tinyint(2) NOT NULL DEFAULT '0' COMMENT 'liat table USER_ROLE',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL COMMENT '__DIR__/uploads/user-avatar/',
  `tipe` varchar(5) NOT NULL COMMENT 'warga LUAR / DALAM'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='this table for android login';

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat_asal` varchar(50) NOT NULL,
  `rumah` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL COMMENT 'warga TETAP / KONTRAK',
  `ktp` varchar(50) DEFAULT NULL COMMENT '__DIR__/uploads/ktp/',
  `posisi` int(1) NOT NULL COMMENT 'warga RT'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `belanja_bulanan`
--
ALTER TABLE `belanja_bulanan`
  ADD PRIMARY KEY (`id_bbulanan`);

--
-- Indexes for table `belanja_insidental`
--
ALTER TABLE `belanja_insidental`
  ADD PRIMARY KEY (`id_binsidental`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id_donatur`);

--
-- Indexes for table `iuran_bulanan`
--
ALTER TABLE `iuran_bulanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iuran_insidental`
--
ALTER TABLE `iuran_insidental`
  ADD PRIMARY KEY (`id_iinsidental`);

--
-- Indexes for table `kegiatan_insidental`
--
ALTER TABLE `kegiatan_insidental`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `keperluan_bulanan`
--
ALTER TABLE `keperluan_bulanan`
  ADD PRIMARY KEY (`id_keperluan`);

--
-- Indexes for table `pengurus_bidang`
--
ALTER TABLE `pengurus_bidang`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `pengurus_bidang_tipe`
--
ALTER TABLE `pengurus_bidang_tipe`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `pengurus_tipe`
--
ALTER TABLE `pengurus_tipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus_utama`
--
ALTER TABLE `pengurus_utama`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `periode_bulanan`
--
ALTER TABLE `periode_bulanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periode_insidental`
--
ALTER TABLE `periode_insidental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periode_laporan`
--
ALTER TABLE `periode_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas_activity`
--
ALTER TABLE `petugas_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas_dalam`
--
ALTER TABLE `petugas_dalam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas_luar`
--
ALTER TABLE `petugas_luar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas_tipe`
--
ALTER TABLE `petugas_tipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `belanja_bulanan`
--
ALTER TABLE `belanja_bulanan`
  MODIFY `id_bbulanan` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `belanja_insidental`
--
ALTER TABLE `belanja_insidental`
  MODIFY `id_binsidental` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id_donatur` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `iuran_bulanan`
--
ALTER TABLE `iuran_bulanan`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iuran_insidental`
--
ALTER TABLE `iuran_insidental`
  MODIFY `id_iinsidental` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan_insidental`
--
ALTER TABLE `kegiatan_insidental`
  MODIFY `id_kegiatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `keperluan_bulanan`
--
ALTER TABLE `keperluan_bulanan`
  MODIFY `id_keperluan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `periode_bulanan`
--
ALTER TABLE `periode_bulanan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `periode_insidental`
--
ALTER TABLE `periode_insidental`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `periode_laporan`
--
ALTER TABLE `periode_laporan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `petugas_activity`
--
ALTER TABLE `petugas_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID for row', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `petugas_dalam`
--
ALTER TABLE `petugas_dalam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `petugas_luar`
--
ALTER TABLE `petugas_luar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petugas_tipe`
--
ALTER TABLE `petugas_tipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
