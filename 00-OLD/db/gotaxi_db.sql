-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2018 at 10:55 AM
-- Server version: 10.2.17-MariaDB-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gotaxibi_aplikasidemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ac_type`
--

CREATE TABLE `ac_type` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `ac_type` varchar(50) NOT NULL,
  `fare` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ac_type`
--

INSERT INTO `ac_type` (`nomor`, `ac_type`, `fare`) VALUES
(1, 'Split 0.5 - 1.2 PK', 1),
(2, 'Split 1.5 - 2 PK', 1.2),
(3, 'Inverter 0.5 - 1 PK', 1.4),
(4, 'Inverter 1.5 - 2 PK', 1.6),
(5, 'Cassete', 1.8),
(6, 'Standing', 2),
(7, 'Central', 2.3);

-- --------------------------------------------------------

--
-- Table structure for table `additional_config`
--

CREATE TABLE `additional_config` (
  `id` int(11) NOT NULL,
  `fitur` int(11) NOT NULL,
  `additional` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `additional_config`
--

INSERT INTO `additional_config` (`id`, `fitur`, `additional`, `value`) VALUES
(1, 7, 'additional_shipper', '10');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `ip_addr` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nik`, `email`, `password`, `ip_addr`) VALUES
(1, '1', 'admin@test.com', 'admin', '101.128.80.148');

-- --------------------------------------------------------

--
-- Table structure for table `alamat_perusahaan`
--

CREATE TABLE `alamat_perusahaan` (
  `id` int(11) NOT NULL,
  `id_cabang` int(11) NOT NULL,
  `alamat_perusahaan` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alamat_perusahaan`
--

INSERT INTO `alamat_perusahaan` (`id`, `id_cabang`, `alamat_perusahaan`) VALUES
(1, 1, 'Singapore');

-- --------------------------------------------------------

--
-- Table structure for table `app_versions`
--

CREATE TABLE `app_versions` (
  `id` int(11) NOT NULL,
  `application` int(11) NOT NULL,
  `version` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_versions`
--

INSERT INTO `app_versions` (`id`, `application`, `version`) VALUES
(1, 0, 1),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `asuransi`
--

CREATE TABLE `asuransi` (
  `id` int(11) NOT NULL,
  `premi` int(11) NOT NULL,
  `estimasi_biaya` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asuransi`
--

INSERT INTO `asuransi` (`id`, `premi`, `estimasi_biaya`) VALUES
(2, 5, 1000),
(3, 7, 2500),
(4, 10, 3000),
(5, 12, 5000),
(6, 15, 10000),
(7, 17, 20000),
(8, 20, 50000),
(1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `barang_toko`
--

CREATE TABLE `barang_toko` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `kategori_barang` int(11) NOT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `satuan_barang` varchar(10) NOT NULL COMMENT 'gr/ml'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `belanja_mfood`
--

CREATE TABLE `belanja_mfood` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `catatan` varchar(500) DEFAULT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `belanja_mmart`
--

CREATE TABLE `belanja_mmart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `belanja_mstore`
--

CREATE TABLE `belanja_mstore` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `catatan` varchar(500) DEFAULT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berkas_lamaran_kerja`
--

CREATE TABLE `berkas_lamaran_kerja` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `foto_ktp` varchar(50) NOT NULL,
  `foto_stnk` varchar(50) NOT NULL,
  `foto_sim` varchar(50) NOT NULL,
  `foto_diri` varchar(50) NOT NULL,
  `berkas_lamaran` varchar(50) NOT NULL,
  `berkas_cv` varchar(50) NOT NULL,
  `kendaraan` int(11) NOT NULL,
  `job` int(11) NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `is_valid` varchar(20) NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `biaya_promo`
--

CREATE TABLE `biaya_promo` (
  `id` int(11) NOT NULL,
  `fitur` int(11) NOT NULL,
  `biaya` int(11) NOT NULL,
  `biaya_minimum` int(11) NOT NULL,
  `keterangan_biaya` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biaya_promo`
--

INSERT INTO `biaya_promo` (`id`, `fitur`, `biaya`, `biaya_minimum`, `keterangan_biaya`) VALUES
(1, 3, 5, 6, 'per ORDER');

-- --------------------------------------------------------

--
-- Table structure for table `blog_content`
--

CREATE TABLE `blog_content` (
  `id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `isi` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cabang_perusahaan`
--

CREATE TABLE `cabang_perusahaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cabang_perusahaan` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang_perusahaan`
--

INSERT INTO `cabang_perusahaan` (`id`, `cabang_perusahaan`) VALUES
(1, 'Amsterdam'),
(4, 'Berlin');

-- --------------------------------------------------------

--
-- Table structure for table `config_driver`
--

CREATE TABLE `config_driver` (
  `id_driver` varchar(10) NOT NULL,
  `latitude` varchar(30) NOT NULL DEFAULT '0',
  `longitude` varchar(30) NOT NULL DEFAULT '0',
  `uang_belanja` int(11) NOT NULL DEFAULT 1,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` char(1) NOT NULL DEFAULT '2'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_temp`
--

CREATE TABLE `data_temp` (
  `id_driver` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` varchar(10) NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `rating` double NOT NULL DEFAULT 0,
  `job` int(11) NOT NULL,
  `gender` int(11) DEFAULT 2,
  `kendaraan` int(11) DEFAULT 1,
  `nama_bank` varchar(50) DEFAULT NULL,
  `rekening_bank` varchar(50) DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reg_id` varchar(250) DEFAULT NULL,
  `status` char(1) DEFAULT '2'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driver_job`
--

CREATE TABLE `driver_job` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver_job` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_job`
--

INSERT INTO `driver_job` (`id`, `driver_job`) VALUES
(1, 'mride'),
(2, 'mcar'),
(3, 'mmassage'),
(4, 'mbox'),
(5, 'mservice');

-- --------------------------------------------------------

--
-- Table structure for table `fitur_mangjek`
--

CREATE TABLE `fitur_mangjek` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fitur` varchar(20) NOT NULL,
  `biaya` int(11) NOT NULL,
  `biaya_minimum` int(11) NOT NULL,
  `keterangan_biaya` varchar(50) NOT NULL,
  `driver_job` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fitur_mangjek`
--

INSERT INTO `fitur_mangjek` (`id`, `fitur`, `biaya`, `biaya_minimum`, `keterangan_biaya`, `driver_job`, `keterangan`) VALUES
(1, 'Go-Moto', 5, 8, 'per KM', 1, 'online motorcycle'),
(2, 'Go-Cab', 12, 15, 'per KM', 2, 'online taxi'),
(3, 'Go-Food', 7, 8, 'per ORDER', 1, 'order food'),
(4, 'Go-Mart', 10, 15, 'per ORDER', 1, 'Mart '),
(5, 'Go-Send', 5, 5, 'per KM', 1, 'item Send'),
(6, 'Go-Massage', 6, 0, 'per HOUR', 3, 'Massage'),
(7, 'Go-Box', 5, 0, 'per KM', 4, 'Car Box'),
(8, 'Go-Service', 4, 5, 'per ORDER', 5, 'maintenance Air Conditioning');

-- --------------------------------------------------------

--
-- Table structure for table `fitur_mservice`
--

CREATE TABLE `fitur_mservice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_service` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fitur_mservice`
--

INSERT INTO `fitur_mservice` (`id`, `nama_service`) VALUES
(1, 'service-ac');

-- --------------------------------------------------------

--
-- Table structure for table `fitur_promosi`
--

CREATE TABLE `fitur_promosi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fitur_promosi` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fitur_promosi`
--

INSERT INTO `fitur_promosi` (`id`, `fitur_promosi`) VALUES
(0, 'general'),
(1, 'Go-bike'),
(2, 'Go-car'),
(3, 'Go-food'),
(4, 'Go-mart'),
(5, 'Go-send'),
(6, 'Go-massage'),
(7, 'Go-box'),
(8, 'Go-service');

-- --------------------------------------------------------

--
-- Table structure for table `gender_pemijat`
--

CREATE TABLE `gender_pemijat` (
  `id` int(11) NOT NULL,
  `pemijat` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender_pemijat`
--

INSERT INTO `gender_pemijat` (`id`, `pemijat`) VALUES
(1, 'Female'),
(2, 'Male'),
(3, 'no preference');

-- --------------------------------------------------------

--
-- Table structure for table `help_general`
--

CREATE TABLE `help_general` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `subjek` varchar(200) NOT NULL,
  `isi_bantuan` varchar(1000) NOT NULL,
  `is_helped` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `help_pelanggan`
--

CREATE TABLE `help_pelanggan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `id_fitur` int(50) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `isi_bantuan` varchar(1000) NOT NULL,
  `is_helped` int(11) NOT NULL,
  `is_admin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_transaksi`
--

CREATE TABLE `history_transaksi` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_driver` varchar(10) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL,
  `catatan` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kendaraan`
--

CREATE TABLE `jenis_kendaraan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kendaraan` varchar(20) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `hargaminimum_mbox` int(11) NOT NULL,
  `dimensi_kendaraan` varchar(50) DEFAULT NULL,
  `maxweight_kendaraan` varchar(50) DEFAULT NULL,
  `foto_kendaraan` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kendaraan`
--

INSERT INTO `jenis_kendaraan` (`id`, `jenis_kendaraan`, `harga`, `hargaminimum_mbox`, `dimensi_kendaraan`, `maxweight_kendaraan`, `foto_kendaraan`) VALUES
(1, 'motor', NULL, 0, NULL, NULL, NULL),
(2, 'mobil', NULL, 0, NULL, NULL, NULL),
(3, 'PICKUP-BAK', 10, 12, '200x130x120', '1000 Kg', 'pickup_bak.jpg'),
(4, 'PICKUP BOX', 10, 19, '200x130x130', '1000 Kg', 'pickup_box.jpg'),
(5, 'ENGKEL BAK', 9, 20, '300x160x130', '2000 Kg', 'engkel_bak.jpg'),
(6, 'ENGKEL BOX', 9, 20, '300x160x160', '2000 Kg', 'engkel_box.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `id_toko` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_barang`
--

INSERT INTO `kategori_barang` (`id`, `kategori`, `id_toko`) VALUES
(1, 'barang pecah belah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_resto`
--

CREATE TABLE `kategori_resto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_resto`
--

INSERT INTO `kategori_resto` (`id`, `kategori`, `foto`) VALUES
(2, 'spicy cuisine', '1525153842_ayam_geprek.jpg'),
(4, 'Italian', '1527418224_italian-min.jpg'),
(5, 'Sushi', '1527418015_sushi-min.jpg'),
(9, 'Meatball Parmesan', '1485570319_bakso.jpg'),
(13, 'Snack', '1485587194_snack.jpg'),
(14, 'Bakery', '1485587277_roti.jpg'),
(15, 'Drink', '1485587372_WL41c.jpg'),
(16, 'Coffee', '1485587467_copy.jpg'),
(18, 'Lobster', '1485587640_thai.jpg'),
(19, 'Capcay', '1485686361_south-korean-food-guide.jpg'),
(20, 'Pizza', '1485591671_11210-pizza-close1.jpg'),
(21, ' Roast Beef', '1527154429_Roast_Beef_Sub.jpg'),
(24, 'Striped Bass', '1527418936_Striped_Bass-min.jpg'),
(25, ' Chicken Salad', '1527159832_Chicken_Salad.jpg'),
(26, 'Cake', '1486197950_Vietnamese.jpg'),
(28, 'Sweet & Desserts', '1486200304_dessert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_toko`
--

CREATE TABLE `kategori_toko` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_toko`
--

INSERT INTO `kategori_toko` (`id`, `kategori`) VALUES
(1, 'shop');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merek` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `jenis` char(1) NOT NULL,
  `nomor_kendaraan` varchar(10) NOT NULL,
  `warna` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `layanan_pijat`
--

CREATE TABLE `layanan_pijat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `layanan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL COMMENT 'per JAM',
  `foto` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan_pijat`
--

INSERT INTO `layanan_pijat` (`id`, `layanan`, `harga`, `foto`) VALUES
(1, 'full body massage', 12, 'full_body.jpg'),
(2, 'reflection', 13, 'reflection.jpg'),
(3, 'facial treatment', 10, 'facial_massage.jpg'),
(4, 'full body + scrub', 20, 'scrub.jpg'),
(5, 'thai massage', 12, 'thai_massage.jpg'),
(6, 'baby massage', 10, 'baby_massage.jpg'),
(7, 'prenatal massage', 9, 'prenatal_massage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_pelanggan`
--

CREATE TABLE `lokasi_pelanggan` (
  `id_pelanggan` varchar(10) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori_menu_makanan` int(11) NOT NULL,
  `deskripsi_menu` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu_makanan`
--

CREATE TABLE `menu_makanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_makanan` varchar(50) NOT NULL,
  `id_restoran` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mitra_mmart_mfood`
--

CREATE TABLE `mitra_mmart_mfood` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `jenis_identitas` varchar(10) NOT NULL,
  `nomor_identitas` varchar(50) NOT NULL,
  `alamat_pemilik` varchar(100) NOT NULL COMMENT 'Lampung / Palembang / Jambi',
  `kota` varchar(20) NOT NULL,
  `nama_penanggung_jawab` varchar(50) NOT NULL,
  `email_penanggung_jawab` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telepon_penanggung_jawab` varchar(15) NOT NULL,
  `jenis_lapak` int(11) NOT NULL,
  `lapak` int(11) NOT NULL,
  `is_partner` int(2) NOT NULL COMMENT '0 = non partner |  1 = partner',
  `is_valid` int(11) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mservice_jenis`
--

CREATE TABLE `mservice_jenis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_service` varchar(50) NOT NULL,
  `fitur_mservice` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mservice_jenis`
--

INSERT INTO `mservice_jenis` (`id`, `jenis_service`, `fitur_mservice`, `harga`, `deskripsi`) VALUES
(1, 'Wash', 1, 5, 'Air-conditioning service.'),
(2, 'Repair', 1, 4, 'Air conditioning repair service'),
(3, 'Wash & Repair', 1, 8, 'Wash and repair the air conditioner'),
(4, 'Install', 1, 4, 'Install New AC'),
(5, 'Unload', 1, 4, 'Unloading your old air conditioner'),
(6, 'Relocation', 1, 5, 'Move your air conditioner');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` varchar(10) NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `tgl_lahir` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `rating` double NOT NULL DEFAULT 0,
  `reg_id` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemijat_in_keahlian`
--

CREATE TABLE `pemijat_in_keahlian` (
  `id_layanan_pijat` int(11) NOT NULL,
  `id_pemijat` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_acservice`
--

CREATE TABLE `pendaftaran_acservice` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nomor_ktp` varchar(50) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat_tinggal` varchar(100) NOT NULL,
  `kecamatan_tinggal` varchar(50) NOT NULL,
  `kota_tinggal` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `peralatan` varchar(500) NOT NULL,
  `keahlian` varchar(500) NOT NULL,
  `area_kerja` int(11) NOT NULL,
  `foto_ktp` varchar(100) NOT NULL,
  `job` int(11) NOT NULL,
  `is_valid` int(11) NOT NULL DEFAULT 0 COMMENT '1/0',
  `foto_diri` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_mmassage`
--

CREATE TABLE `pendaftaran_mmassage` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL COMMENT '1 = L , 2 = P',
  `nomor_ktp` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `alamat_tinggal` varchar(100) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `pengalaman_pijat` int(11) NOT NULL COMMENT 'Tahun',
  `keahlian_pijat` varchar(100) NOT NULL,
  `area_kerja` int(11) NOT NULL,
  `pekerjaan_terakhir` varchar(50) NOT NULL,
  `nama_telepon_keluarga` varchar(100) NOT NULL,
  `foto_ktp` varchar(100) NOT NULL,
  `job` int(11) NOT NULL,
  `is_valid` int(11) NOT NULL DEFAULT 0 COMMENT '0=belum divalidasi, 1=sudah valid , 2= ditolak',
  `foto_diri` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peralatan_service`
--

CREATE TABLE `peralatan_service` (
  `id` int(10) NOT NULL,
  `nama_peralatan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peralatan_service`
--

INSERT INTO `peralatan_service` (`id`, `nama_peralatan`) VALUES
(1, 'brash'),
(2, 'stairs');

-- --------------------------------------------------------

--
-- Table structure for table `profil_perusahaan`
--

CREATE TABLE `profil_perusahaan` (
  `nama` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `alamat` int(11) NOT NULL,
  `akun_facebook` varchar(50) NOT NULL,
  `akun_instagram` varchar(50) NOT NULL,
  `akun_twitter` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cabang` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_perusahaan`
--

INSERT INTO `profil_perusahaan` (`nama`, `telepon`, `alamat`, `akun_facebook`, `akun_instagram`, `akun_twitter`, `email`, `cabang`) VALUES
('GoTaxi App', '085341214224', 1, 'gotaxi-app', 'gotaxi-app', '@gotaxi-app', 'sales@gotaxi-app.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `promosi`
--

CREATE TABLE `promosi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_dibuat` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `fitur_promosi` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `is_show` varchar(3) NOT NULL,
  `action` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promosi_mfood`
--

CREATE TABLE `promosi_mfood` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_resto` int(11) NOT NULL,
  `is_show` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proporsi_biaya`
--

CREATE TABLE `proporsi_biaya` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_fitur` int(11) NOT NULL,
  `persentase_driver` int(11) NOT NULL,
  `waktu_update` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proporsi_biaya`
--

INSERT INTO `proporsi_biaya` (`nomor`, `id_fitur`, `persentase_driver`, `waktu_update`) VALUES
(1, 1, 85, '2018-04-27 08:14:08'),
(2, 2, 80, '2018-02-01 20:41:37'),
(3, 3, 90, '2017-02-06 17:14:52'),
(4, 4, 90, '2016-12-11 12:00:29'),
(5, 5, 80, '2018-02-01 08:27:25'),
(6, 6, 90, '2017-02-02 17:35:33'),
(7, 7, 80, '2016-11-21 22:24:41'),
(8, 8, 80, '2016-11-21 22:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `rating_driver`
--

CREATE TABLE `rating_driver` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `id_driver` varchar(10) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `catatan` varchar(500) DEFAULT 'Good job',
  `rating` int(11) NOT NULL,
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating_pelanggan`
--

CREATE TABLE `rating_pelanggan` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_driver` varchar(10) NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `catatan` varchar(500) DEFAULT NULL,
  `rating` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `redeemed_voucher`
--

CREATE TABLE `redeemed_voucher` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `id_voucher` int(11) NOT NULL,
  `tanggal_redeem` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `count_of_use` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_resto` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `jam_buka` varchar(10) NOT NULL,
  `jam_tutup` varchar(10) NOT NULL,
  `deskripsi_resto` varchar(1000) NOT NULL,
  `kategori_resto` int(11) NOT NULL,
  `foto_resto` varchar(100) NOT NULL,
  `kontak_telepon` varchar(15) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_open` int(2) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `saldo` int(11) NOT NULL,
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_driver`
--

CREATE TABLE `status_driver` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_driver` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_driver`
--

INSERT INTO `status_driver` (`id`, `status_driver`) VALUES
(1, 'Bebas'),
(2, 'Diterima'),
(3, 'Bekerja'),
(4, 'Berhenti Bekerja'),
(5, 'Keluar');

-- --------------------------------------------------------

--
-- Table structure for table `status_topup`
--

CREATE TABLE `status_topup` (
  `id` int(11) NOT NULL,
  `status_topup` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_topup`
--

INSERT INTO `status_topup` (`id`, `status_topup`) VALUES
(1, 'unverified'),
(2, 'success'),
(3, 'failed'),
(4, 'In process');

-- --------------------------------------------------------

--
-- Table structure for table `status_transaksi`
--

CREATE TABLE `status_transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_transaksi` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_transaksi`
--

INSERT INTO `status_transaksi` (`id`, `status_transaksi`) VALUES
(1, 'Search'),
(2, 'Menawarkan'),
(3, 'Succeed'),
(4, 'Rejected'),
(5, 'Canceled'),
(7, 'Finish'),
(6, 'Start');

-- --------------------------------------------------------

--
-- Table structure for table `status_user`
--

CREATE TABLE `status_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_user` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_user`
--

INSERT INTO `status_user` (`id`, `status_user`) VALUES
(1, 'Aktif'),
(2, 'Non Aktif'),
(3, 'Banned');

-- --------------------------------------------------------

--
-- Table structure for table `status_withdraw`
--

CREATE TABLE `status_withdraw` (
  `id` int(11) NOT NULL,
  `status_withdraw` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_withdraw`
--

INSERT INTO `status_withdraw` (`id`, `status_withdraw`) VALUES
(1, 'unverified'),
(2, 'success'),
(3, 'failed');

-- --------------------------------------------------------

--
-- Table structure for table `teknisi`
--

CREATE TABLE `teknisi` (
  `id` varchar(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nomor_ktp` varchar(500) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `rating` double NOT NULL,
  `reg_id` varchar(250) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1/0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teknisi_in_jenis_service`
--

CREATE TABLE `teknisi_in_jenis_service` (
  `id_teknisi` varchar(10) NOT NULL,
  `id_service` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipe_transaksi`
--

CREATE TABLE `tipe_transaksi` (
  `id` int(11) NOT NULL,
  `tipe_transaksi` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_transaksi`
--

INSERT INTO `tipe_transaksi` (`id`, `tipe_transaksi`) VALUES
(1, 'customer pay order'),
(2, 'customer pay order (wallet)'),
(3, 'customer give tips (walle)'),
(4, 'topup saldo'),
(5, 'driver cut orders'),
(6, 'driver receives payment order (wallet)'),
(9, 'fine'),
(7, 'the driver received a bonus'),
(8, 'driver accept tips'),
(10, 'withdraw'),
(11, 'addition of admin manual'),
(12, 'wallet reduction by admin');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_voucher`
--

CREATE TABLE `tipe_voucher` (
  `id` int(11) NOT NULL,
  `tipe_voucher` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_voucher`
--

INSERT INTO `tipe_voucher` (`id`, `tipe_voucher`) VALUES
(1, 'diskon persen'),
(2, 'diskon nominal'),
(3, 'dapat saldo');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `jam_buka` varchar(10) NOT NULL,
  `jam_tutup` varchar(10) NOT NULL,
  `kategori_toko` int(11) NOT NULL,
  `kontak_telepon` varchar(15) NOT NULL,
  `foto_toko` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topup`
--

CREATE TABLE `topup` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `no_rekening` varchar(30) NOT NULL,
  `bank` varchar(20) NOT NULL DEFAULT '',
  `atas_nama` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bukti` varchar(50) DEFAULT NULL,
  `status` char(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `id_driver` varchar(10) DEFAULT NULL,
  `order_fitur` tinyint(4) NOT NULL,
  `start_latitude` varchar(20) NOT NULL,
  `start_longitude` varchar(20) NOT NULL,
  `end_latitude` varchar(20) NOT NULL,
  `end_longitude` varchar(20) NOT NULL,
  `jarak` double NOT NULL,
  `harga` int(11) NOT NULL,
  `waktu_order` timestamp NOT NULL DEFAULT current_timestamp(),
  `waktu_selesai` timestamp NULL DEFAULT NULL,
  `alamat_asal` varchar(500) NOT NULL,
  `alamat_tujuan` varchar(500) NOT NULL,
  `kode_promo` varchar(50) DEFAULT NULL,
  `kredit_promo` int(11) NOT NULL DEFAULT 0,
  `biaya_akhir` int(11) DEFAULT 0,
  `pakai_mpay` tinyint(1) NOT NULL DEFAULT 0,
  `rate` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail_mbox`
--

CREATE TABLE `transaksi_detail_mbox` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `tanggal_pelayanan` date NOT NULL,
  `jam_pelayanan` varchar(10) NOT NULL,
  `waktu_pelayanan` varchar(20) NOT NULL,
  `nama_pengirim` varchar(100) DEFAULT NULL,
  `telepon_pengirim` varchar(15) DEFAULT NULL,
  `kendaraan_angkut` int(11) NOT NULL,
  `asuransi` int(11) DEFAULT NULL,
  `shipper` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail_mbox_destinasi`
--

CREATE TABLE `transaksi_detail_mbox_destinasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `detail_lokasi` varchar(200) DEFAULT '-',
  `nama_penerima` varchar(50) DEFAULT NULL,
  `telepon_penerima` varchar(15) DEFAULT NULL,
  `instruksi` varchar(500) DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail_mfood`
--

CREATE TABLE `transaksi_detail_mfood` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_resto` int(11) NOT NULL,
  `total_biaya` int(11) NOT NULL,
  `harga_akhir` int(11) NOT NULL,
  `foto_struk` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail_mmart`
--

CREATE TABLE `transaksi_detail_mmart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `estimasi_biaya` int(11) NOT NULL,
  `harga_akhir` int(11) NOT NULL,
  `foto_struk` varchar(50) NOT NULL DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail_mmassage`
--

CREATE TABLE `transaksi_detail_mmassage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `tanggal_pelayanan` date NOT NULL,
  `massage_menu` varchar(50) NOT NULL,
  `jam_pelayanan` varchar(10) NOT NULL,
  `lama_pelayanan` int(11) NOT NULL,
  `pelanggan_gender` int(11) NOT NULL,
  `prefer_gender` int(1) NOT NULL,
  `catatan_tambahan` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail_msend`
--

CREATE TABLE `transaksi_detail_msend` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` varchar(10) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `nama_pengirim` varchar(100) DEFAULT NULL,
  `telepon_pengirim` varchar(15) DEFAULT NULL,
  `nama_penerima` varchar(100) DEFAULT NULL,
  `telepon_penerima` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail_mservice_ac`
--

CREATE TABLE `transaksi_detail_mservice_ac` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `mservice_jenis` int(11) NOT NULL,
  `ac_type` int(11) NOT NULL,
  `tanggal_pelayanan` varchar(20) NOT NULL,
  `jam_pelayanan` varchar(5) NOT NULL,
  `quantity` int(11) NOT NULL,
  `residential_type` varchar(20) NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail_mstore`
--

CREATE TABLE `transaksi_detail_mstore` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `total_biaya` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_driver`
--

CREATE TABLE `transaksi_driver` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_driver` varchar(10) NOT NULL,
  `debit` int(11) NOT NULL DEFAULT 0,
  `kredit` int(11) NOT NULL DEFAULT 0,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_transaksi` int(11) NOT NULL,
  `tipe_transaksi` char(2) NOT NULL,
  `saldo` int(11) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pelanggan`
--

CREATE TABLE `transaksi_pelanggan` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `debit` int(11) NOT NULL DEFAULT 0,
  `kredit` int(11) DEFAULT 0,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_transaksi` int(11) DEFAULT NULL,
  `tipe_transaksi` char(3) NOT NULL,
  `pakai_mpay` tinyint(1) NOT NULL DEFAULT 0,
  `saldo` int(11) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uang_belanja`
--

CREATE TABLE `uang_belanja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uang_belanja`
--

INSERT INTO `uang_belanja` (`id`, `nominal`) VALUES
(1, 5),
(2, 10),
(3, 20),
(4, 30),
(5, 50),
(6, 100),
(7, 150);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voucher` varchar(20) NOT NULL,
  `tipe_voucher` char(1) NOT NULL,
  `untuk_fitur` int(11) NOT NULL,
  `tanggal_expired` date NOT NULL,
  `nilai` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `count_to_use` int(11) NOT NULL,
  `is_valid` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `voucher`, `tipe_voucher`, `untuk_fitur`, `tanggal_expired`, `nilai`, `keterangan`, `count_to_use`, `is_valid`) VALUES
(19, 'MPAYDISKON9', '1', 1, '2017-01-31', 10, 'DISKON MITRA MFOOD MENGGUNAKAN MPAY', 0, 'yes'),
(7, 'MPAYDISKON1', '1', 1, '2017-01-31', 10, 'DISKON MRIDE MENGGUNAKAN MPAY', 0, 'yes'),
(9, 'MPAYDISKON2', '1', 2, '2017-01-31', 10, 'DISKON MCAR MENGGUNAKAN MPAY', 0, 'yes'),
(10, 'MPAYDISKON3', '1', 3, '2017-01-31', 0, 'DISKON MFOOD MENGGUNAKAN MPAY', 0, 'yes'),
(11, 'MPAYDISKON4', '1', 4, '2017-01-31', 50, 'DISKON MMART MENGGUNAKAN MPAY', 0, 'yes'),
(12, 'MPAYDISKON5', '1', 5, '2017-01-31', 20, 'DISKON MSEND MENGGUNAKAN MPAY', 0, 'yes'),
(13, 'MPAYDISKON6', '1', 6, '2017-01-31', 0, 'DISKON MMASSAGE MENGGUNAKAN MPAY', 0, 'yes'),
(14, 'MPAYDISKON7', '1', 7, '2017-01-31', 0, 'DISKON MBOX MENGGUNAKAN MPAY', 0, 'yes'),
(15, 'MPAYDISKON8', '1', 8, '2017-01-31', 0, 'DISKON MSERVICE MENGGUNAKAN MPAY', 0, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `waktu_pelayanan_pemijat`
--

CREATE TABLE `waktu_pelayanan_pemijat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pemijat` varchar(10) NOT NULL,
  `waktu_pelayanan` varchar(20) NOT NULL,
  `lama_pelayanan` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_driver` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ac_type`
--
ALTER TABLE `ac_type`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `additional_config`
--
ALTER TABLE `additional_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `alamat_perusahaan`
--
ALTER TABLE `alamat_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_versions`
--
ALTER TABLE `app_versions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asuransi`
--
ALTER TABLE `asuransi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_toko`
--
ALTER TABLE `barang_toko`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `belanja_mfood`
--
ALTER TABLE `belanja_mfood`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `belanja_mmart`
--
ALTER TABLE `belanja_mmart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `belanja_mstore`
--
ALTER TABLE `belanja_mstore`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `berkas_lamaran_kerja`
--
ALTER TABLE `berkas_lamaran_kerja`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`),
  ADD UNIQUE KEY `no_ktp` (`no_ktp`),
  ADD UNIQUE KEY `no_telepon` (`no_telepon`);

--
-- Indexes for table `biaya_promo`
--
ALTER TABLE `biaya_promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_content`
--
ALTER TABLE `blog_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabang_perusahaan`
--
ALTER TABLE `cabang_perusahaan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `config_driver`
--
ALTER TABLE `config_driver`
  ADD PRIMARY KEY (`id_driver`),
  ADD KEY `latitude` (`latitude`),
  ADD KEY `longitude` (`longitude`);

--
-- Indexes for table `data_temp`
--
ALTER TABLE `data_temp`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `no_telepon` (`no_telepon`),
  ADD UNIQUE KEY `no_ktp` (`no_ktp`);

--
-- Indexes for table `driver_job`
--
ALTER TABLE `driver_job`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `fitur_mangjek`
--
ALTER TABLE `fitur_mangjek`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `fitur_mservice`
--
ALTER TABLE `fitur_mservice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `fitur_promosi`
--
ALTER TABLE `fitur_promosi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `gender_pemijat`
--
ALTER TABLE `gender_pemijat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_general`
--
ALTER TABLE `help_general`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `help_pelanggan`
--
ALTER TABLE `help_pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `history_transaksi`
--
ALTER TABLE `history_transaksi`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `jenis_kendaraan`
--
ALTER TABLE `jenis_kendaraan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `kategori_resto`
--
ALTER TABLE `kategori_resto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `kategori` (`kategori`);

--
-- Indexes for table `kategori_toko`
--
ALTER TABLE `kategori_toko`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `layanan_pijat`
--
ALTER TABLE `layanan_pijat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `lokasi_pelanggan`
--
ALTER TABLE `lokasi_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `mitra_mmart_mfood`
--
ALTER TABLE `mitra_mmart_mfood`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `mservice_jenis`
--
ALTER TABLE `mservice_jenis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pemijat_in_keahlian`
--
ALTER TABLE `pemijat_in_keahlian`
  ADD PRIMARY KEY (`id_layanan_pijat`,`id_pemijat`);

--
-- Indexes for table `pendaftaran_acservice`
--
ALTER TABLE `pendaftaran_acservice`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `pendaftaran_mmassage`
--
ALTER TABLE `pendaftaran_mmassage`
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `profil_perusahaan`
--
ALTER TABLE `profil_perusahaan`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `promosi`
--
ALTER TABLE `promosi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `promosi_mfood`
--
ALTER TABLE `promosi_mfood`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `proporsi_biaya`
--
ALTER TABLE `proporsi_biaya`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `rating_driver`
--
ALTER TABLE `rating_driver`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `rating_pelanggan`
--
ALTER TABLE `rating_pelanggan`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `redeemed_voucher`
--
ALTER TABLE `redeemed_voucher`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `latitude` (`latitude`,`longitude`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `status_driver`
--
ALTER TABLE `status_driver`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `status_topup`
--
ALTER TABLE `status_topup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_transaksi`
--
ALTER TABLE `status_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `status_user`
--
ALTER TABLE `status_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `status_withdraw`
--
ALTER TABLE `status_withdraw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `teknisi_in_jenis_service`
--
ALTER TABLE `teknisi_in_jenis_service`
  ADD PRIMARY KEY (`id_teknisi`,`id_service`);

--
-- Indexes for table `tipe_transaksi`
--
ALTER TABLE `tipe_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_voucher`
--
ALTER TABLE `tipe_voucher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `latitude` (`latitude`,`longitude`);

--
-- Indexes for table `topup`
--
ALTER TABLE `topup`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_pelanggan`,`waktu_order`),
  ADD UNIQUE KEY `nomor` (`id`);

--
-- Indexes for table `transaksi_detail_mbox`
--
ALTER TABLE `transaksi_detail_mbox`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `transaksi_detail_mbox_destinasi`
--
ALTER TABLE `transaksi_detail_mbox_destinasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `transaksi_detail_mfood`
--
ALTER TABLE `transaksi_detail_mfood`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `transaksi_detail_mmart`
--
ALTER TABLE `transaksi_detail_mmart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `transaksi_detail_mmassage`
--
ALTER TABLE `transaksi_detail_mmassage`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `transaksi_detail_msend`
--
ALTER TABLE `transaksi_detail_msend`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `transaksi_detail_mservice_ac`
--
ALTER TABLE `transaksi_detail_mservice_ac`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `transaksi_detail_mstore`
--
ALTER TABLE `transaksi_detail_mstore`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `transaksi_driver`
--
ALTER TABLE `transaksi_driver`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `transaksi_pelanggan`
--
ALTER TABLE `transaksi_pelanggan`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `uang_belanja`
--
ALTER TABLE `uang_belanja`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `waktu_pelayanan_pemijat`
--
ALTER TABLE `waktu_pelayanan_pemijat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ac_type`
--
ALTER TABLE `ac_type`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `barang_toko`
--
ALTER TABLE `barang_toko`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `belanja_mfood`
--
ALTER TABLE `belanja_mfood`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `belanja_mmart`
--
ALTER TABLE `belanja_mmart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=862;

--
-- AUTO_INCREMENT for table `belanja_mstore`
--
ALTER TABLE `belanja_mstore`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `berkas_lamaran_kerja`
--
ALTER TABLE `berkas_lamaran_kerja`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_content`
--
ALTER TABLE `blog_content`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cabang_perusahaan`
--
ALTER TABLE `cabang_perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `driver_job`
--
ALTER TABLE `driver_job`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fitur_mangjek`
--
ALTER TABLE `fitur_mangjek`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fitur_mservice`
--
ALTER TABLE `fitur_mservice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fitur_promosi`
--
ALTER TABLE `fitur_promosi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `help_general`
--
ALTER TABLE `help_general`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `help_pelanggan`
--
ALTER TABLE `help_pelanggan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_transaksi`
--
ALTER TABLE `history_transaksi`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_kendaraan`
--
ALTER TABLE `jenis_kendaraan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori_resto`
--
ALTER TABLE `kategori_resto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `kategori_toko`
--
ALTER TABLE `kategori_toko`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanan_pijat`
--
ALTER TABLE `layanan_pijat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mitra_mmart_mfood`
--
ALTER TABLE `mitra_mmart_mfood`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mservice_jenis`
--
ALTER TABLE `mservice_jenis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pendaftaran_acservice`
--
ALTER TABLE `pendaftaran_acservice`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendaftaran_mmassage`
--
ALTER TABLE `pendaftaran_mmassage`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promosi`
--
ALTER TABLE `promosi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promosi_mfood`
--
ALTER TABLE `promosi_mfood`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proporsi_biaya`
--
ALTER TABLE `proporsi_biaya`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rating_driver`
--
ALTER TABLE `rating_driver`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating_pelanggan`
--
ALTER TABLE `rating_pelanggan`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `redeemed_voucher`
--
ALTER TABLE `redeemed_voucher`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_driver`
--
ALTER TABLE `status_driver`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status_transaksi`
--
ALTER TABLE `status_transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `status_user`
--
ALTER TABLE `status_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topup`
--
ALTER TABLE `topup`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_detail_mbox`
--
ALTER TABLE `transaksi_detail_mbox`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_detail_mbox_destinasi`
--
ALTER TABLE `transaksi_detail_mbox_destinasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_detail_mfood`
--
ALTER TABLE `transaksi_detail_mfood`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_detail_mmart`
--
ALTER TABLE `transaksi_detail_mmart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_detail_mmassage`
--
ALTER TABLE `transaksi_detail_mmassage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_detail_msend`
--
ALTER TABLE `transaksi_detail_msend`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_detail_mservice_ac`
--
ALTER TABLE `transaksi_detail_mservice_ac`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_detail_mstore`
--
ALTER TABLE `transaksi_detail_mstore`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_driver`
--
ALTER TABLE `transaksi_driver`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_pelanggan`
--
ALTER TABLE `transaksi_pelanggan`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uang_belanja`
--
ALTER TABLE `uang_belanja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `waktu_pelayanan_pemijat`
--
ALTER TABLE `waktu_pelayanan_pemijat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
