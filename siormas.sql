-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 01:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siyanmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `id_akses` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `fitur` varchar(100) NOT NULL,
  `tanggal_mulai` datetime NOT NULL,
  `tanggal_selesai` datetime NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `foto`, `judul`, `keterangan`) VALUES
(1, '1660794908download-removebg-preview.png', 'aaaaa', 'bbbbb');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `judul` text NOT NULL,
  `keterangan` text NOT NULL,
  `detail` text NOT NULL,
  `detail1` text NOT NULL,
  `detail2` text NOT NULL,
  `detail3` text NOT NULL,
  `detail4` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `gambar1` varchar(100) NOT NULL,
  `gambar2` varchar(100) NOT NULL,
  `gambar3` varchar(100) NOT NULL,
  `gambar4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `judul`, `keterangan`, `detail`, `detail1`, `detail2`, `detail3`, `detail4`, `gambar`, `gambar1`, `gambar2`, `gambar3`, `gambar4`) VALUES
(11, 'Bagaimana Cara Melakukan Pengajuan Surat Keterangan Terdaftar (SKT)', 'Pengajuan SKT ormas dapat dilakukan dengan melengkapi persyaratan berikut', '1. Buka menu Pengajuan SKT', '2. Terdapat beberapa form yang harus di isi pada halaman tersebut', '3. Terdapat form yang mengisi file. perlu diingat file yang d uploaod wajib dengan format pdf ', '4. Setelah file terisi maka pastikan terlebih dahulu agar file tidak salah input/upload. selanjutnya tekan tombol simpan', '5. Setlanjutnya kamu akan di arahkan ke halaman informasi perjalanan surat yang telah anda kirim', 'Screenshot 2024-07-15 160918.png', 'Screenshot 2024-07-15 161228.png', 'Screenshot 2024-07-15 161334.png', 'Screenshot 2024-07-15 161511.png', 'Screenshot 2024-07-15 161717.png'),
(12, 'Bagimana cara melakukan Pendaftaran Ormas?', 'Pendaftaran ormas dapat dilakukan dengan melengkapi persyaratan berikut', '1. Buka Halaman Pendaftaran Ormas', '2. Isi form yang terdapat pada halaman tersebut', '3. Terdapat form yang mengisi file. perlu diingat file yang di uploaod wajib dengan format pdf ', '4. Setelah file terisi maka pastikan terlebih dahulu agar file tidak salah input/upload. selanjutnya tekan tombol simpan', '5. Setlanjutnya kamu akan di arahkan ke halaman informasi perjalanan surat yang telah anda kirim', '1721053594Screenshot 2024-07-15 212129.png', '1721053594Screenshot 2024-07-15 212034.png', '1721053594Screenshot 2024-07-15 212210.png', '1721053594Screenshot 2024-07-15 212413.png', '1721053594Screenshot 2024-07-15 212626.png');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_kerja`
--

CREATE TABLE `laporan_kerja` (
  `id_laporan_kerja` int(11) NOT NULL,
  `id_ormas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_organisasi` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `foto1` varchar(200) NOT NULL,
  `foto2` varchar(200) NOT NULL,
  `foto3` varchar(100) NOT NULL,
  `foto4` varchar(100) DEFAULT NULL,
  `foto5` varchar(100) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan_kerja`
--

INSERT INTO `laporan_kerja` (`id_laporan_kerja`, `id_ormas`, `id_user`, `nama_organisasi`, `foto`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `tanggal`, `judul`, `keterangan`, `status`) VALUES
(23, 0, 19, 'Ormas Pemuda', '1714583935Foto KTP.jpeg', '1714583935Foto KTP.jpeg', '1714583935Foto KTP.jpeg', '', '', '', '0000-00-00', 'Bagaimana Cara Melakukan Pengajuan Surat Keterangan Terdaftar (SKT)', 'Pengajuan SKT ormas dapat dilakukan dengan melengkapi persyaratan berikut', ''),
(24, 14, 52, 'aaaaaaaaaaa', '1720716063gotong royong2.jpeg', '1720716063gotong royong2.jpeg', '1720716063gotong royong2.jpeg', '1720711591gotong royong3.jpg', '1720711591gotong royong3.jpg', '1720711591gotong royong3.jpg', '2024-07-11', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'adafasfsafsafdfasdsfdsfdsdsfds', '1'),
(25, 14, 52, 'aaaaaaaaaaa', '1720716774gotong royong1.jpg', '1720716774gotong royong1.jpg', '1720716774gotong royong1.jpg', '1720716774gotong royong1.jpg', '', '', '2024-07-11', 'aaaaa', 'sdsfsfsdfsdf', '1'),
(26, 14, 52, 'aaaaaaaaaaa', '1720716834gotong royong2.jpeg', '1720716834gotong royong2.jpeg', '1720716834gotong royong2.jpeg', '1720716834gotong royong2.jpeg', '', '', '2024-07-11', 'bbbbbb', 'bdgshgdfhfgdjfgjgdj', '1'),
(27, 14, 52, 'aaaaaaaaaaa', '1720717600gotong royong3.jpg', '1720717600gotong royong3.jpg', '1720717600gotong royong3.jpg', '1720717600gotong royong3.jpg', '1720717600gotong royong3.jpg', '1720717600gotong royong3.jpg', '2024-07-12', 'jjjjjjj', 'jsdgdsggdsg', '1'),
(28, 14, 52, 'aaaaaaaaaaa', '1720717662gotong royong3.jpg', '1720717662gotong royong3.jpg', '1720717662gotong royong3.jpg', '1720717662gotong royong3.jpg', '1720717662gotong royong3.jpg', '1720717662gotong royong3.jpg', '2024-07-12', 'jjjjjjj', 'jsdgdsggdsg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `aktifitas` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id_notifikasi`, `id_user`, `aktifitas`, `tanggal`) VALUES
(176, 25, 'Login', '2023-08-02 13:39:08'),
(177, 25, 'Login', '2023-08-22 22:23:47'),
(178, 25, 'Login', '2023-08-28 11:26:57'),
(179, 25, 'Login', '2023-08-28 11:29:30'),
(180, 25, 'Login', '2023-08-28 11:40:08'),
(181, 19, 'Login', '2023-08-28 11:47:28'),
(182, 25, 'Login', '2023-08-30 15:58:52'),
(183, 25, 'Login', '2023-08-30 16:05:23'),
(184, 25, 'Login', '2023-09-01 07:51:54'),
(185, 48, 'Login', '2023-09-01 07:54:20'),
(186, 18, 'Login', '2023-09-01 09:06:47'),
(187, 18, 'Login', '2023-09-01 09:10:43'),
(188, 25, 'Login', '2023-09-01 09:16:57'),
(189, 48, 'Login', '2023-09-01 09:21:48'),
(190, 25, 'Login', '2023-09-01 09:22:04'),
(191, 19, 'Login', '2023-09-01 09:37:10'),
(192, 25, 'Login', '2024-04-25 14:43:53'),
(193, 25, 'Login', '2024-04-25 15:18:15'),
(194, 25, 'Login', '2024-04-28 21:23:08'),
(195, 25, 'Login', '2024-04-29 10:56:16'),
(196, 25, 'Login', '2024-04-29 11:25:31'),
(197, 25, 'Login', '2024-04-29 21:01:40'),
(198, 19, 'Login', '2024-04-29 21:03:55'),
(199, 25, 'Login', '2024-04-29 21:13:59'),
(200, 25, 'Login', '2024-04-29 21:34:14'),
(201, 25, 'Login', '2024-04-29 21:38:41'),
(202, 19, 'Login', '2024-04-29 21:56:01'),
(203, 19, 'Login', '2024-05-01 21:12:32'),
(204, 19, 'Login', '2024-05-01 21:13:24'),
(205, 19, 'Pengajuan SKT', '2024-05-01 21:56:07'),
(206, 19, 'Pengajuan SKT', '2024-05-01 21:57:52'),
(207, 19, 'Pengajuan SKT', '2024-05-01 22:05:42'),
(208, 25, 'Login', '2024-05-01 22:45:57'),
(209, 19, 'Login', '2024-05-01 23:16:47'),
(210, 25, 'Login', '2024-05-01 23:53:38'),
(211, 52, 'Login', '2024-05-02 00:00:10'),
(212, 25, 'Login', '2024-05-02 00:01:39'),
(213, 19, 'Login', '2024-05-02 00:16:34'),
(214, 52, 'Login', '2024-05-02 00:19:10'),
(215, 25, 'Login', '2024-05-02 13:56:40'),
(216, 52, 'Login', '2024-05-02 14:01:44'),
(217, 52, 'Login', '2024-05-02 14:52:00'),
(218, 19, 'Login', '2024-05-02 14:53:58'),
(219, 25, 'Login', '2024-05-02 23:04:29'),
(220, 52, 'Login', '2024-05-02 23:05:58'),
(221, 55, 'Login', '2024-05-02 23:09:02'),
(222, 19, 'Login', '2024-05-02 23:13:46'),
(223, 25, 'Login', '2024-05-02 23:14:14'),
(224, 25, 'Login', '2024-07-11 21:04:19'),
(225, 25, 'Login', '2024-07-11 21:05:31'),
(226, 41, 'Login', '2024-07-11 21:21:28'),
(227, 52, 'Login', '2024-07-11 21:21:38'),
(228, 52, 'Pengajuan SKT', '2024-07-11 21:53:30'),
(229, 56, 'Login', '2024-07-11 22:01:59'),
(230, 25, 'Login', '2024-07-11 22:02:16'),
(231, 25, 'Login', '2024-07-11 22:03:31'),
(232, 52, 'Login', '2024-07-11 22:24:10'),
(233, 25, 'Login', '2024-07-12 14:45:26'),
(234, 25, 'Login', '2024-07-15 11:16:38'),
(235, 25, 'Login', '2024-07-15 14:45:21'),
(236, 25, 'Login', '2024-07-15 14:45:52'),
(237, 47, 'Login', '2024-07-15 15:32:59'),
(238, 47, 'Login', '2024-07-15 15:33:16'),
(239, 25, 'Login', '2024-07-15 15:36:35'),
(240, 47, 'Login', '2024-07-15 15:37:14'),
(241, 25, 'Login', '2024-07-15 15:41:08'),
(242, 47, 'Login', '2024-07-15 15:41:22'),
(243, 25, 'Login', '2024-07-15 15:44:20'),
(244, 47, 'Login', '2024-07-15 15:44:28'),
(245, 47, 'Login', '2024-07-15 15:44:37'),
(246, 58, 'Login', '2024-07-15 15:53:47'),
(247, 25, 'Login', '2024-07-15 15:54:18'),
(248, 58, 'Login', '2024-07-15 15:55:33'),
(249, 25, 'Login', '2024-07-15 15:55:51'),
(250, 25, 'Login', '2024-07-15 16:04:44'),
(251, 52, 'Login', '2024-07-15 16:06:18'),
(252, 59, 'Login', '2024-07-15 16:07:32'),
(253, 25, 'Login', '2024-07-15 16:08:06'),
(254, 52, 'Login', '2024-07-15 16:17:06'),
(255, 52, 'Login', '2024-07-15 20:35:04'),
(256, 25, 'Login', '2024-07-15 20:35:14'),
(257, 59, 'Login', '2024-07-15 21:19:02'),
(258, 48, 'Login', '2024-07-15 21:24:47'),
(259, 59, 'Login', '2024-07-15 21:25:18'),
(260, 25, 'Login', '2024-07-15 22:35:33'),
(261, 61, 'Login', '2024-07-15 22:36:43'),
(262, 61, 'Pengajuan SKT', '2024-07-15 22:50:08'),
(263, 25, 'Login', '2024-07-15 22:59:23'),
(264, 61, 'Login', '2024-07-15 23:00:56'),
(265, 25, 'Login', '2024-07-15 23:18:13'),
(266, 25, 'Login', '2024-07-16 00:04:28'),
(267, 25, 'Login', '2024-07-16 00:05:46'),
(268, 25, 'Login', '2024-07-16 04:47:54'),
(269, 25, 'Login', '2024-07-16 04:47:58'),
(270, 25, 'Login', '2024-07-16 04:48:05'),
(271, 25, 'Login', '2024-07-16 04:48:23'),
(272, 25, 'Login', '2024-07-16 04:48:27'),
(273, 25, 'Login', '2024-07-16 04:48:28'),
(274, 25, 'Login', '2024-07-16 04:48:42'),
(275, 25, 'Login', '2024-07-16 04:48:44'),
(276, 25, 'Login', '2024-07-16 04:48:53'),
(277, 25, 'Login', '2024-07-16 04:49:45'),
(278, 25, 'Login', '2024-07-16 04:49:47'),
(279, 25, 'Login', '2024-07-16 04:49:48'),
(280, 25, 'Login', '2024-07-16 04:50:55'),
(281, 25, 'Login', '2024-07-16 04:54:23'),
(282, 61, 'Login', '2024-07-16 05:24:17'),
(283, 25, 'Login', '2024-07-16 05:43:32'),
(284, 25, 'Login', '2024-07-16 05:45:05'),
(285, 63, 'Login', '2024-07-16 05:45:37'),
(286, 25, 'Login', '2024-07-16 05:50:17'),
(287, 64, 'Login', '2024-07-16 05:51:29'),
(288, 68, 'Login', '2024-07-16 06:02:23'),
(289, 68, 'Login', '2024-07-16 06:08:10');

-- --------------------------------------------------------

--
-- Table structure for table `ormas`
--

CREATE TABLE `ormas` (
  `id_ormas` int(8) NOT NULL,
  `id_user` int(8) NOT NULL,
  `nama_organisasi` varchar(100) DEFAULT NULL,
  `nama_bidang` varchar(100) DEFAULT NULL,
  `no_skt` varchar(100) DEFAULT NULL,
  `alamat` varchar(35) DEFAULT NULL,
  `tanggal` datetime NOT NULL,
  `tahun` varchar(5) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nomor_hp` varchar(13) DEFAULT NULL,
  `skt` varchar(100) DEFAULT NULL,
  `sk_keberadaan` varchar(100) DEFAULT NULL,
  `sk_pengurus` varchar(100) DEFAULT NULL,
  `program_kerja` varchar(100) DEFAULT NULL,
  `domisili` varchar(100) DEFAULT NULL,
  `ad_art` varchar(100) DEFAULT NULL,
  `foto_ketua` varchar(100) DEFAULT NULL,
  `foto_sekretaris` varchar(100) DEFAULT NULL,
  `foto_bendahara` varchar(100) DEFAULT NULL,
  `tanggal_buat` datetime NOT NULL,
  `surat_permohonan_skt` varchar(100) NOT NULL,
  `salinan_akte_pendirian` varchar(100) NOT NULL,
  `program_kerja_organisasi` varchar(100) NOT NULL,
  `susunan_pengurus` varchar(100) DEFAULT NULL,
  `surat_pernyataan_kesanggupan` varchar(100) DEFAULT NULL,
  `surat_pernyataan` varchar(100) DEFAULT NULL,
  `formulir_isian` varchar(100) NOT NULL,
  `surat_rekomendasi` varchar(100) NOT NULL,
  `surat_pernyataan_kesediaan` varchar(100) NOT NULL,
  `no_induk` varchar(100) NOT NULL,
  `no_keberadaan` varchar(100) NOT NULL,
  `berakhirnya` varchar(10) NOT NULL,
  `kartu_ormas` varchar(100) NOT NULL,
  `ktp_ketua` varchar(100) NOT NULL,
  `ktp_sekretaris` varchar(100) NOT NULL,
  `ktp_bendahara` varchar(100) NOT NULL,
  `no_akte_pendirian` varchar(100) NOT NULL,
  `no_sk_kepengurusan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tracking` varchar(100) DEFAULT NULL,
  `proses` varchar(100) NOT NULL,
  `alur_proses` varchar(100) NOT NULL,
  `nama_ketua` varchar(100) NOT NULL,
  `nama_sekretaris` varchar(100) NOT NULL,
  `nama_bendahara` varchar(100) NOT NULL,
  `akte_pendirian` varchar(100) DEFAULT NULL,
  `surat` varchar(100) NOT NULL,
  `surat1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ormas`
--

INSERT INTO `ormas` (`id_ormas`, `id_user`, `nama_organisasi`, `nama_bidang`, `no_skt`, `alamat`, `tanggal`, `tahun`, `email`, `nomor_hp`, `skt`, `sk_keberadaan`, `sk_pengurus`, `program_kerja`, `domisili`, `ad_art`, `foto_ketua`, `foto_sekretaris`, `foto_bendahara`, `tanggal_buat`, `surat_permohonan_skt`, `salinan_akte_pendirian`, `program_kerja_organisasi`, `susunan_pengurus`, `surat_pernyataan_kesanggupan`, `surat_pernyataan`, `formulir_isian`, `surat_rekomendasi`, `surat_pernyataan_kesediaan`, `no_induk`, `no_keberadaan`, `berakhirnya`, `kartu_ormas`, `ktp_ketua`, `ktp_sekretaris`, `ktp_bendahara`, `no_akte_pendirian`, `no_sk_kepengurusan`, `status`, `tracking`, `proses`, `alur_proses`, `nama_ketua`, `nama_sekretaris`, `nama_bendahara`, `akte_pendirian`, `surat`, `surat1`) VALUES
(1, 0, 'Himpunan Mahasiswa Riau', 'Pendidikan', NULL, 'Jl. Air Dingin Ujung', '0000-00-00 00:00:00', '2024', 'doniduasembilan@gmai', '082385306767', '1714035855fadillah akbar II.pd', '1714035855Tesis Ridho Harapan ', '1714035855fadillah akbar II.pd', '1714035855Tesis Ridho Harapan ', '1714035855Tesis Ridho Harapan ', '1714035855Proposal Tesis Ridho', '1714035855Tesis Ridho Harapan ', '1714035855Tesis Ridho Harapan ', '1714035855Tesis Ridho Harapan ', '0000-00-00 00:00:00', '', '', '', NULL, NULL, NULL, '', '', '', '12345', '12345', '2029', '1714035855Tesis Ridho Harapan ', '', '', '', '111111', '222222', '', '1', '', '', '', '', '', NULL, '', ''),
(2, 0, 'Remaja Mesjid', 'Agama', NULL, 'Jl. Air Dingin Ujung', '0000-00-00 00:00:00', '2024', 'doniandrean@student.', '082385306767', '1714318464Tesis Ridho Harapan Bunda Rev. 1 (1) (1)', '1714318464Tesis Ridho Harapan Bunda Rev. 1 (1) (1)', '1714318464Tesis Ridho Harapan Bunda Rev. 1 (1) (1)', '1714318464Tesis Ridho Harapan Bunda Rev. 1 (1) (1)', '1714318464Tesis Ridho Harapan Bunda Rev. 1 (1) (1)', '1714318464Proposal Tesis Ridho Harapan Bunda Rev. ', '1714318464Tesis Ridho Harapan Bunda Rev. 1 (1) (1)', '1714318464Proposal Tesis Ridho Harapan Bunda Rev. ', '1714318464Proposal Tesis Ridho Harapan Bunda Rev. ', '0000-00-00 00:00:00', '', '', '', NULL, NULL, NULL, '', '', '', '3333333', '4444444', '2029', '1714318464Proposal Tesis Ridho Harapan Bunda Rev. ', '', '', '', '1111111', '222222', '', '', '', '', '', '', '', '1714318464Tesis Ridho Harapan Bunda Rev. 1 (1) (1)', '', ''),
(3, 0, 'Pemuda Pancasila', 'Olah Raga', NULL, 'Jl. Air Dingin Ujung', '0000-00-00 00:00:00', '2024', 'doniandrean@student.', '082385306767', '1714363465Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1714363465Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1714363465Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1714363465Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1714363465Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1714363465Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1714363465Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1714363465Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1714363465Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '0000-00-00 00:00:00', '', '', '', NULL, NULL, NULL, '', '', '', '3333333', '4444444', '2029', '1714363465Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1714363465Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1714363465Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1714363465Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1111111', '222222', '', '', '', '', '', '', '', '1714363465Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '', ''),
(10, 19, 'Ormas Pemuda', 'Pendidikan', NULL, 'Jl. Air Dingin Ujung', '2024-05-01 22:05:42', NULL, 'doniandrean@student.', '082385306767', NULL, NULL, NULL, NULL, '1714575942Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', NULL, NULL, NULL, NULL, '2024-05-01 00:00:00', '1714575942Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1714575942Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '', '1714575942Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1714575942Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1714575942Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1714575942Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1714575942Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '1714575942Proposal Tesis Ridho Harapan Bunda Rev. 1 (1) (1).pdf', '', '', '', '', '', '', '', '', '', 'Pengajuan SKT', '8', '', '', '', '', '', NULL, '', ''),
(20, 0, 'DPN Lembaga Pemantau Penyelenggara Negara Republik Indonesia', 'Bidang Anti Korupsi', NULL, 'Jl. Soekarno Hatta/Arengka 1 Komp D', '0000-00-00 00:00:00', '2021', 'lembaga@gmail.com', '0812 7777 856', '1721060732data ormas 2018.pdf', '1721060732data ormas 2018.pdf', '1721060732data ormas 2018.pdf', '1721060732data ormas 2018.pdf', '1721060732data ormas 2018.pdf', '1721060732data ormas 2018.pdf', '1721060732data ormas 2018.pdf', '1721060732data ormas 2018.pdf', '1721060732data ormas 2018.pdf', '0000-00-00 00:00:00', '', '', '', NULL, NULL, NULL, '', '', '', 'AHU-0005387.AH.01.07.TAHUN 2015, Senin, 21 September 2015', '898/BKBP-BID.III/SPKO/2015/045', '2024', '1721060732data ormas 2018.pdf', '1721060732data ormas 2018.pdf', '1721060732data ormas 2018.pdf', '1721060732data ormas 2018.pdf', 'NO SPKO : 220/BAKESBANGPOL-', ' 123413/INT/DPP_DPN/ll/2015', '', NULL, '', '', ' H. DEDY SYAH PUTRA SAGALA, SE', 'HASRAN IRAWANDI SITOMPUL', ' BUDI SETIAWAN, S.I.Kom', '1721060732data ormas 2018.pdf', '', ''),
(21, 0, 'Dewan Pimpinan Wilayah Jurnalis Online Indonesia', 'Kemanusiaan', NULL, ' Jl. Bukit Barisan Ruko Permata Buk', '0000-00-00 00:00:00', '2018', 'julius@gmail.com', ' 0812 7777 85', '1721061274data ormas 2019.pdf', '1721061274data ormas 2019.pdf', '1721061274data ormas 2019.pdf', '1721061274data ormas 2019.pdf', '1721061274data ormas 2019.pdf', '1721061274data ormas 2019.pdf', '1721061274data ormas 2019.pdf', '1721061274data ormas 2019.pdf', '1721061274data ormas 2019.pdf', '0000-00-00 00:00:00', '', '', '', NULL, NULL, NULL, '', '', '', 'AHU-0008952.AH.01.07, 5 Juni 2017', '345/BKBP-BID.III/SPKO/2017/045', '2023', '1721061274data ormas 2019.pdf', '1721061274data ormas 2019.pdf', '1721061274data ormas 2019.pdf', '1721061274data ormas 2019.pdf', '005/KEP-17.3/XI/2017, Minggu, 31 Januari 2017', '0070/INT/DPP_DPW/II/2017', '', NULL, '', '', ' RISWAN NDRURU', ' JULIUS HALAWA', 'NERAWATI', '1721061274data ormas 2019.pdf', '', ''),
(22, 0, 'Forum Komunitas Bela Nusantara', 'Lingkungan Hidup', NULL, 'DELIMA-TAMPAN', '0000-00-00 00:00:00', '2020', 'belanusantara@gmail.com', ' 0812-5945-40', '1721061847data ormas 2020.pdf', '1721061847data ormas 2020.pdf', '1721061847data ormas 2020.pdf', '1721061847data ormas 2020.pdf', '1721061847data ormas 2020.pdf', '1721061847data ormas 2020.pdf', '1721061847data ormas 2020.pdf', '1721061847data ormas 2020.pdf', '1721061847data ormas 2020.pdf', '0000-00-00 00:00:00', '', '', '', NULL, NULL, NULL, '', '', '', 'AHU-0009984.AH.01.07.TAHUN 2019', '672/BKBP-BID.IV/SPKO/2020/045', '2025', '1721061847data ormas 2020.pdf', '1721061847data ormas 2020.pdf', '1721061847data ormas 2020.pdf', '1721061847data ormas 2020.pdf', '912/KEP-17.3/XI/2023, 4 Februari 2020', ' 5672/INT/DPP_BelaNusantara/ll/20230', '', NULL, '', '', ' DR. TUTI KHAIRANI HARAHAP, S.Sos.,  M.Si', 'Ir. MANGASA PANJAITAN, M.Si', ' IRMA KUSUMA SALIM, M.Psi', '1721061847data ormas 2020.pdf', '', ''),
(23, 0, 'PERHIMPUNAN ALUMNI JERMAN  WILAYAH RIAU', 'Pendidikan', NULL, 'JL. TAMAN SARI NO. 31, TANGKERANG S', '0000-00-00 00:00:00', '2020', 'wazni@gmail.com', ' 0853-6486-15', '1721062076data ormas 2020.pdf', '1721062076data ormas 2020.pdf', '1721062076data ormas 2020.pdf', '1721062076data ormas 2020.pdf', '1721062076data ormas 2020.pdf', '1721062076data ormas 2020.pdf', '1721062076data ormas 2020.pdf', '1721062076data ormas 2020.pdf', '1721062076data ormas 2020.pdf', '0000-00-00 00:00:00', '', '', '', NULL, NULL, NULL, '', '', '', ' AHU-0009984.AH.01.07.TAHUN 2019', '23343/BKBP-BID.III/SPKO/2020/045', '2020', '1721062076data ormas 2020.pdf', '1721062076data ormas 2020.pdf', '1721062076data ormas 2020.pdf', '1721062076data ormas 2020.pdf', '912/KEP-17.3/XI/2023, 04 Februari 2020', '220/BKBP-BID.IV/123', '', NULL, '', '', 'DARWIS', 'IRWAN ISKANDAR, S.IP., MA', 'WAZNI, S.IP., M.Si', '1721062076data ormas 2020.pdf', '', ''),
(24, 0, ' JURU SEMBELIH HALAL INDONESIA', 'Agama', NULL, 'JL. BUNDO KANDUANG NO 1,KEL LABUH B', '0000-00-00 00:00:00', '2017', 'usman@gmail.com', '0852-6564-484', '1721062339data ormas 2018.pdf', '1721062339data ormas 2018.pdf', '1721062339data ormas 2018.pdf', '1721062339data ormas 2018.pdf', '1721062339data ormas 2018.pdf', '1721062339data ormas 2018.pdf', '1721062339data ormas 2018.pdf', '1721062339data ormas 2018.pdf', '1721062339data ormas 2018.pdf', '0000-00-00 00:00:00', '', '', '', NULL, NULL, NULL, '', '', '', 'AHU-0000118.AH.01.07.TAHUN 2019', '99987/BKBP-BID.III/SPKO/2023/045', '2022', '1721062339data ormas 2018.pdf', '1721062339data ormas 2018.pdf', '1721062339data ormas 2018.pdf', '1721062339data ormas 2018.pdf', '912/KEP-17.3/XI/2023, 31 Januari 2017', '220/BKBP-BID.IV/177', '', NULL, '', '', 'ROIS, S.Sg', ' JONNI MARDANI', 'USMAN RAPI', '1721062339data ormas 2018.pdf', '', ''),
(25, 0, 'DPD PIJAR KEADILAN DEMOKRASI PROVINSI RIAU', 'Kemanusiaan', NULL, 'Jalan Nenas No 65 AB', '0000-00-00 00:00:00', '2022', 'romma@gmail.com', '081261239898', '1721080795data ormas 2022.pdf', '1721080795data ormas 2022.pdf', '1721080795data ormas 2022.pdf', '1721080795data ormas 2022.pdf', '1721080795data ormas 2022.pdf', '1721080795data ormas 2022.pdf', '1721080795data ormas 2022.pdf', '1721080795data ormas 2022.pdf', '1721080795data ormas 2022.pdf', '0000-00-00 00:00:00', '', '', '', NULL, NULL, NULL, '', '', '', 'AHU-0012839.AH.01.07.TAHUN 2020, 03 Januari 2021', ' 220/BAKESBANGPOL-HanekBudgamas/2022/65, jumat, January 14, 2022', '2027', '1721080795data ormas 2022.pdf', '1721080795data ormas 2022.pdf', '1721080795data ormas 2022.pdf', '1721080795data ormas 2022.pdf', '4323/KEP-17.3/XI/2022, Minggu, 31 Januari 2022', '34222/INT/DPP_DPD/ll/2022', '', NULL, '', '', ' JONNER MTS, SE', 'YEFRIZAL, SE', 'ROMA TUA MAGDALENA', '1721080795data ormas 2022.pdf', '', ''),
(26, 0, 'YAYASAN TUAH AMALIYAH PEKANBARU', 'Agama', NULL, ' Jalan Hangtuah No 271 Komplek Masj', '0000-00-00 00:00:00', '2019', 'yayasanamaliyah@gmail.com', '08127574288/0', '1721081085data ormas 2019.pdf', '1721081085data ormas 2019.pdf', '1721081085data ormas 2019.pdf', '1721081085data ormas 2019.pdf', '1721081085data ormas 2019.pdf', '1721081085data ormas 2019.pdf', '1721081085data ormas 2019.pdf', '1721081085data ormas 2019.pdf', '1721081085data ormas 2019.pdf', '0000-00-00 00:00:00', '', '', '', NULL, NULL, NULL, '', '', '', 'AHU-0001547.AH.01.04.TAHUN 2018,  05 Februari 2018', ' 220/BAKESBANGPOL-HanekBudgamas/2022/67, Jumat, January 14, 2022', '2024', '1721081085data ormas 2019.pdf', '1721081085data ormas 2019.pdf', '1721081085data ormas 2019.pdf', '1721081085data ormas 2019.pdf', '97859KEP-17.3/XI/2023, 05 Februari 2018', '0168/INT/DPP_ASPEDI/ll/2023 ', '', NULL, '', '', ' IDHAM TEJA SANTOSO', ' SUKATMIN', 'HENDRA BUANA', '1721081085data ormas 2019.pdf', '', ''),
(27, 0, 'DEWAN PIMPINAN PUSAT ANGKATAN MUDA SRIWIJAYA RIAU', 'Kemanusiaan', NULL, 'Jl. Jendral Sudirman Komp. Sudirman', '0000-00-00 00:00:00', '2023', 'dewan@gmail.com', ' 085278879369', '1721081835data ormas 2022.pdf', '1721081835data ormas 2022.pdf', '1721081835data ormas 2022.pdf', '1721081835data ormas 2022.pdf', '1721081835data ormas 2022.pdf', '1721081835data ormas 2022.pdf', '1721081835data ormas 2022.pdf', '1721081835data ormas 2022.pdf', '1721081835data ormas 2022.pdf', '0000-00-00 00:00:00', '', '', '', NULL, NULL, NULL, '', '', '', ' AHU-0011871.AH.01.07.Tahun 2021', '220/BAKESBANGPOL- HanekBudgamas/2022/108, Jumat, January 28, 2022', '2028', '1721081835data ormas 2022.pdf', '1721081835data ormas 2022.pdf', '1721081835data ormas 2022.pdf', '1721081835data ormas 2022.pdf', '5646/KEP-17.3/XI/2023, Minggu, 31 Januari 2023', '22313/INT/DPP_DPPAMI/ll/2023 ', '', NULL, '', '', 'JEMY OKTAFIAN, SE', ' ADI RACHMADIANSYAH, SE', 'YOGI IMANDA MALIK, SE', '1721081835data ormas 2022.pdf', '', ''),
(28, 17, 'DEWAN PIMPINAN WILAYAH MASYARAKAT PELESTARI LINGKUNGAN', 'Lingkungan Hidup', NULL, 'Jl. SM. Amin RT 003 RW 011, Kel. To', '0000-00-00 00:00:00', '2020', 'candra@gmail.com', ' 081365726972', '1721082132data ormas 2020.pdf', '1721082132data ormas 2020.pdf', '1721082132data ormas 2020.pdf', '1721082132data ormas 2020.pdf', '1721082132data ormas 2020.pdf', '1721082132data ormas 2020.pdf', '1721082132data ormas 2020.pdf', '1721082132data ormas 2020.pdf', '1721082132data ormas 2020.pdf', '0000-00-00 00:00:00', '', '', '', NULL, NULL, NULL, '', '', '', ' AHU-0017577.AH.01.04.Tahun 2021', '220/BAKESBANGPOL-HanekBudgamas/2022/69 , Jumat, January 14, 2022', '2024', '1721082132data ormas 2020.pdf', '1721082132data ormas 2020.pdf', '1721082132data ormas 2020.pdf', '1721082132data ormas 2020.pdf', '522/KEP-17.3/XI/2023, Minggu, 31 Januari 2023', '426723/INT/DPP_DPW/ll/2023 ', '', NULL, '', '', 'SULAIMAN ZUHDI, S.Sos., M.Si', 'MILA TURI SEVA SEMBIRING', 'ARFAN SUHERI', '1721082132data ormas 2020.pdf', '', ''),
(30, 0, 'Si Raja Tambun', 'Kemanusiaan', NULL, 'Jl. Arengka Gg. Tenaga No. 133, RT.', '0000-00-00 00:00:00', '2024', 'silalahi.wesly@yahoo.com', ' 0812-5945-40', '1721084755Surat Keterangan Terdaftar.pdf', '1721084755SK Keberedaan SPKO PERSAUDARAAB SETIA HATI TERATE PERWAPUS RIAU.pdf', '1721084755SUSUNAN PENGURUS HARIAN SI RAJA TAMBUN (1).pdf', '1721084755PROGRAM KERJA Si-Raja Tambun.pdf', '1721084755Surat Domisili SPS RIAU.pdf', '1721084755AD - ART KAMTIBMAS.pdf', '1721084755data ormas 2018.pdf', '1721084755data ormas 2018.pdf', '1721084755data ormas 2018.pdf', '0000-00-00 00:00:00', '', '', '', NULL, NULL, NULL, '', '', '', 'SKT-9300-00-00/576/XII/2023', '235/BKBP-BID.III/SPKO/2023/045', '2029', '1721084755data ormas 2019.pdf', '1721084755data ormas 2020.pdf', '1721084755data ormas 2020.pdf', '1721084755data ormas 2020.pdf', '912/KEP-17.3/XI/2023, Minggu, 31 Januari 2023', '0168/INT/DPP_ASPEDI/ll/2023 ', '', NULL, '', '', 'Parulian Dapot Tambunan, S.E.', 'Royredno Matondang, S.E.', ' Parlaungan Simorangkir, S.E.', '17210847556018022731101194_AKTA-PERKUMPULAN-POMPARAN-SI-RAJA-TAMBUN-SE-INDONESIA-(SALINAN).pdf', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ormas_riwayat`
--

CREATE TABLE `ormas_riwayat` (
  `id_ormas_riwayat` int(8) NOT NULL,
  `id_ormas` int(8) NOT NULL,
  `nama_organisasi` varchar(100) DEFAULT NULL,
  `nama_bidang` varchar(100) DEFAULT NULL,
  `no_skt` varchar(100) DEFAULT NULL,
  `alamat` varchar(35) DEFAULT NULL,
  `tanggal` datetime NOT NULL,
  `tahun` varchar(5) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nomor_hp` varchar(13) DEFAULT NULL,
  `skt` varchar(100) DEFAULT NULL,
  `sk_keberadaan` varchar(100) DEFAULT NULL,
  `sk_pengurus` varchar(100) DEFAULT NULL,
  `program_kerja` varchar(100) DEFAULT NULL,
  `domisili` varchar(100) DEFAULT NULL,
  `ad_art` varchar(100) DEFAULT NULL,
  `foto_ketua` varchar(100) DEFAULT NULL,
  `foto_sekretaris` varchar(100) DEFAULT NULL,
  `foto_bendahara` varchar(100) DEFAULT NULL,
  `tanggal_buat` datetime NOT NULL,
  `surat_permohonan_skt` varchar(100) NOT NULL,
  `salinan_akte_pendirian` varchar(100) NOT NULL,
  `program_kerja_organisasi` varchar(100) NOT NULL,
  `susunan_pengurus` varchar(100) DEFAULT NULL,
  `surat_pernyataan_kesanggupan` varchar(100) DEFAULT NULL,
  `surat_pernyataan` varchar(100) DEFAULT NULL,
  `formulir_isian` varchar(100) NOT NULL,
  `surat_rekomendasi` varchar(100) NOT NULL,
  `surat_pernyataan_kesediaan` varchar(100) NOT NULL,
  `no_induk` varchar(25) NOT NULL,
  `no_keberadaan` varchar(25) NOT NULL,
  `berakhirnya` varchar(10) NOT NULL,
  `kartu_ormas` varchar(100) NOT NULL,
  `ktp_ketua` varchar(100) NOT NULL,
  `ktp_sekretaris` varchar(100) NOT NULL,
  `ktp_bendahara` varchar(100) NOT NULL,
  `no_akte_pendirian` varchar(25) NOT NULL,
  `no_sk_kepengurusan` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `tracking` varchar(25) DEFAULT NULL,
  `proses` varchar(25) NOT NULL,
  `alur_proses` varchar(25) NOT NULL,
  `nama_ketua` varchar(25) NOT NULL,
  `nama_sekretaris` varchar(25) NOT NULL,
  `nama_bendahara` varchar(25) NOT NULL,
  `akte_pendirian` varchar(100) DEFAULT NULL,
  `surat` varchar(100) NOT NULL,
  `surat1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_organisasi` varchar(100) NOT NULL,
  `nama_bidang` varchar(100) NOT NULL,
  `no_skt` varchar(100) NOT NULL,
  `nama_pengurus` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `skt` varchar(100) NOT NULL,
  `sk_keberadaan` varchar(100) NOT NULL,
  `sk_pengurus` varchar(100) NOT NULL,
  `program_kerja` varchar(100) NOT NULL,
  `domisili` varchar(100) NOT NULL,
  `ad_art` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_user`, `nama_organisasi`, `nama_bidang`, `no_skt`, `nama_pengurus`, `alamat`, `tanggal`, `email`, `nomor_hp`, `skt`, `sk_keberadaan`, `sk_pengurus`, `program_kerja`, `domisili`, `ad_art`, `foto`) VALUES
(2, 0, 'DEWAN PIMPINAN PUSAT PAGUYUBAN  MITRA SUNDA RIAU  (MISURI)', 'Seni Budaya, Sosial dan Pendidikan', 'afaegsdg', 'agsdgsd', 'Jalan Hijrah RT 002/RW 005', '2022-03-12 00:00:00', 'doniduasembilan03@gmail.com', '12345678', '1665410700PROPOSAL KP DONI ANDREAN(193510732).pdf', '1665410700PROPOSAL KP DONI ANDREAN(193510732).pdf', '1665410700PROPOSAL KP DONI ANDREAN(193510732).pdf', '1665410700PROPOSAL KP DONI ANDREAN(193510732).pdf', '1665410700PROPOSAL KP DONI ANDREAN(193510732).pdf', '1665410700PROPOSAL KP DONI ANDREAN(193510732).pdf', '1665410700PROPOSAL KP DONI ANDREAN(193510732).pdf'),
(3, 0, 'PEMUDA PANCASILA', 'Seni Budaya, Sosial dan Pendidikan', 'AHU-1234567890', 'aaaa', 'aaaaaaaaa', '0000-00-00 00:00:00', 'aaaaaaaa', 'aaaaaaaaaaaaaa', '1669792386revisi 2.pdf', '1669792386revisi 2.pdf', '1669792386revisi 2.pdf', '1669792386revisi 2.pdf', '1669792386revisi 2.pdf', '1669792386revisi 2.pdf', '1669792386revisi 2.pdf'),
(6, 52, 'Pramuka', 'Seni Budaya, Sosial dan Pendidikan', 'AHU-12345678901111', 'aaaaaa', 'aaaaaaaa', '0000-00-00 00:00:00', 'aaaaaaaaaa', 'aaaaaaaaaaa', '16734917671211-1232-4-PB.pdf', '16734917671211-1232-4-PB.pdf', '16734917671211-1232-4-PB.pdf', '16734917671211-1232-4-PB.pdf', '16734917671211-1232-4-PB.pdf', '16734917671211-1232-4-PB.pdf', '16734917671211-1232-4-PB.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_skt`
--

CREATE TABLE `pengajuan_skt` (
  `id_pengajuan_skt` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_organisasi` varchar(100) NOT NULL,
  `tanggal_buat` datetime NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `surat_permohonan_skt` varchar(100) NOT NULL,
  `salinan_akte_pendirian` varchar(100) NOT NULL,
  `program_kerja_organisasi` varchar(100) NOT NULL,
  `susunan_pengurus` varchar(100) NOT NULL,
  `domisili` varchar(100) NOT NULL,
  `surat_pernyataan_kesanggupan` varchar(100) NOT NULL,
  `surat_pernyataan` varchar(100) NOT NULL,
  `formulir_isian` varchar(100) NOT NULL,
  `surat_rekomendasi` varchar(100) NOT NULL,
  `surat_pernyataan_kesediaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengajuan_skt`
--

INSERT INTO `pengajuan_skt` (`id_pengajuan_skt`, `id_user`, `nama_organisasi`, `tanggal_buat`, `alamat`, `tanggal`, `email`, `nomor_hp`, `surat_permohonan_skt`, `salinan_akte_pendirian`, `program_kerja_organisasi`, `susunan_pengurus`, `domisili`, `surat_pernyataan_kesanggupan`, `surat_pernyataan`, `formulir_isian`, `surat_rekomendasi`, `surat_pernyataan_kesediaan`) VALUES
(6, 25, 'YAYASAN TUAH AMALIYAH PEKANBARU', '2022-10-06 16:00:07', 'Jalan Hangtuah No 271 Komplek Masjid Paripurna Amaliyah', '2022-3-12', 'kecamatan.subi@bnpp.go.id', '', '1659892970Surat Pengantar.pdf', '1659892970Surat Pengantar.pdf', '1659892970Surat Pengantar.pdf', '1659892970Surat Pengantar.pdf', '1659892970Surat Pengantar.pdf', '1659892970Surat Pengantar.pdf', '1659892970Surat Pengantar.pdf', '', '1659892970Surat Pengantar.pdf', '1659892970Surat Pengantar.pdf'),
(39, 19, 'DEWAN PIMPINAN PUSAT PAGUYUBAN  MITRA SUNDA RIAU  (MISURI)', '2022-04-12 00:00:00', 'Jl. Ronggowarsito No 42 Ronggo Town House B10, Kelurahan Sukamaju, Kecamatan Sail, Pekanbaru-Riau', '', 'doniandrean2903@gmail.com', '081261239898', '1665153724Transkip Nilai Doni Andrean(193510732).pdf', '1665153724Surat KP.pdf', '1665153724Surat KP.pdf', '1665153724Surat KP.pdf', '1665153724Surat KP.pdf', '1665153724Surat KP.pdf', '1665153724Surat KP.pdf', '1665153724Surat KP.pdf', '1665153724Surat KP.pdf', '1665153724Transkip Nilai Doni Andrean(193510732).pdf'),
(40, 48, 'PEMUDA PANCASILA', '2022-04-12 00:00:00', 'aaaaaaaaaaaa', '', 'aaaaaaaaaaaa', '123467885785', '1669792647revisi 2.pdf', '1669792647revisi 2.pdf', '1669792647revisi 2.pdf', '1669792647revisi 2.pdf', '1669792647revisi 2.pdf', '1669792647revisi 2.pdf', '1669792647revisi 2.pdf', '1669792647revisi 2.pdf', '1669792647revisi 2.pdf', '1669792647revisi 2.pdf'),
(41, 52, '1asdfgh', '0000-00-00 00:00:00', 'asdfg', '', 'asdfgh', 'asdfgh', '1672888825Kartu Bimbingan.pdf', '1672888825Kartu Bimbingan.pdf', '1672888825Kartu Bimbingan.pdf', '1672888825Kartu Bimbingan.pdf', '1672888825Kartu Bimbingan.pdf', '1672888825Kartu Bimbingan.pdf', '1672888825Kartu Bimbingan.pdf', '1672888825Kartu Bimbingan.pdf', '1672888825Kartu Bimbingan.pdf', '1672888825Kartu Bimbingan.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_login`
--

CREATE TABLE `riwayat_login` (
  `id_riwayat_login` int(11) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lon` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_login`
--

INSERT INTO `riwayat_login` (`id_riwayat_login`, `id_user`, `alamat`, `lat`, `lon`, `tanggal`, `status`) VALUES
(511, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489084', '101.4644068', '2024-07-15 16:04:44', 'Login'),
(512, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489179', '101.4643887', '2024-07-15 16:05:01', 'Logout'),
(513, '52', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489179', '101.4643887', '2024-07-15 16:06:18', 'Login'),
(514, '52', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489157', '101.4643984', '2024-07-15 16:06:26', 'Logout'),
(515, '59', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489168', '101.4643961', '2024-07-15 16:07:32', 'Login'),
(516, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489111', '101.4644084', '2024-07-15 16:08:06', 'Login'),
(517, '59', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489111', '101.4644084', '2024-07-15 16:17:01', 'Logout'),
(518, '52', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489071', '101.4643756', '2024-07-15 16:17:06', 'Login'),
(519, '52', 'GC2Q+CWF, Gg. Hmi, Tengkerang Tengah, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28124, Indonesia', '0.5013504', '101.4398976', '2024-07-15 20:35:04', 'Login'),
(520, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489128', '101.4643813', '2024-07-15 20:35:14', 'Login'),
(521, '59', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.448901', '101.4644107', '2024-07-15 21:19:02', 'Login'),
(522, '59', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.448901', '101.4644107', '2024-07-15 21:24:42', 'Logout'),
(523, '48', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.448888', '101.4643945', '2024-07-15 21:24:47', 'Login'),
(524, '48', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.448888', '101.4643945', '2024-07-15 21:24:54', 'Logout'),
(525, '59', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.448888', '101.4643945', '2024-07-15 21:25:18', 'Login'),
(526, '59', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.448901', '101.4644107', '2024-07-15 21:29:48', 'Logout'),
(527, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489122', '101.4644048', '2024-07-15 22:18:57', 'Logout'),
(528, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.448906', '101.4644016', '2024-07-15 22:35:33', 'Login'),
(529, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.448906', '101.4644016', '2024-07-15 22:35:42', 'Logout'),
(530, '61', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489112', '101.4644005', '2024-07-15 22:36:43', 'Login'),
(531, '61', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489074', '101.4644014', '2024-07-15 22:59:18', 'Logout'),
(532, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489095', '101.4644037', '2024-07-15 22:59:23', 'Login'),
(533, '61', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489088', '101.4644043', '2024-07-15 23:00:56', 'Login'),
(534, '61', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489186', '101.4643866', '2024-07-15 23:18:02', 'Logout'),
(535, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489021', '101.4644165', '2024-07-15 23:18:13', 'Login'),
(536, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489087', '101.4644076', '2024-07-15 23:53:28', 'Logout'),
(537, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489231', '101.4643857', '2024-07-15 23:59:29', 'Logout'),
(538, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489077', '101.4644086', '2024-07-16 00:04:28', 'Login'),
(539, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489077', '101.4644086', '2024-07-16 00:04:31', 'Logout'),
(540, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489076', '101.4644089', '2024-07-16 00:05:46', 'Login'),
(541, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4488546', '101.4643747', '2024-07-16 04:47:54', 'Login'),
(542, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4488546', '101.4643747', '2024-07-16 04:47:58', 'Login'),
(543, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4488546', '101.4643747', '2024-07-16 04:48:05', 'Login'),
(544, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489142', '101.4644037', '2024-07-16 04:48:23', 'Login'),
(545, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489142', '101.4644037', '2024-07-16 04:48:27', 'Login'),
(546, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489142', '101.4644037', '2024-07-16 04:48:28', 'Login'),
(547, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489142', '101.4644037', '2024-07-16 04:48:42', 'Login'),
(548, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489246', '101.464381', '2024-07-16 04:48:44', 'Login'),
(549, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489246', '101.464381', '2024-07-16 04:48:53', 'Login'),
(550, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489143', '101.4643887', '2024-07-16 04:49:45', 'Login'),
(551, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489143', '101.4643887', '2024-07-16 04:49:47', 'Login'),
(552, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489143', '101.4643887', '2024-07-16 04:49:48', 'Login'),
(553, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489143', '101.4643887', '2024-07-16 04:50:55', 'Login'),
(554, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489124', '101.4644054', '2024-07-16 04:54:23', 'Login'),
(555, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489143', '101.4643887', '2024-07-16 05:24:12', 'Logout'),
(556, '61', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489124', '101.4644054', '2024-07-16 05:24:17', 'Login'),
(557, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489108', '101.4643948', '2024-07-16 05:42:54', 'Logout'),
(558, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4488845', '101.4643839', '2024-07-16 05:43:32', 'Login'),
(559, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4488845', '101.4643839', '2024-07-16 05:44:28', 'Logout'),
(560, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4488845', '101.4643839', '2024-07-16 05:45:05', 'Login'),
(561, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489101', '101.4644102', '2024-07-16 05:45:35', 'Logout'),
(562, '63', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489101', '101.4644102', '2024-07-16 05:45:37', 'Login'),
(563, '63', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489047', '101.46441', '2024-07-16 05:46:11', 'Logout'),
(564, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489025', '101.4644112', '2024-07-16 05:50:17', 'Login'),
(565, '25', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4488976', '101.4644042', '2024-07-16 05:51:27', 'Logout'),
(566, '64', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4488976', '101.4644042', '2024-07-16 05:51:29', 'Login'),
(567, '64', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489014', '101.4644082', '2024-07-16 06:02:16', 'Logout'),
(568, '68', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489014', '101.4644082', '2024-07-16 06:02:23', 'Login'),
(569, '68', 'CFX7+JRP, Gg. Pisang, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282, Indonesia', '0.4489126', '101.4643979', '2024-07-16 06:08:10', 'Login');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `password_hash` varchar(200) NOT NULL,
  `password2` varchar(100) NOT NULL,
  `level_user` varchar(20) NOT NULL,
  `status_user` tinyint(1) NOT NULL,
  `tanggal_akses` date DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_user`, `foto`, `password_hash`, `password2`, `level_user`, `status_user`, `tanggal_akses`, `created_at`, `updated_at`, `deleted_at`) VALUES
(18, 'admin', 'Kasubbid', '', '$2y$10$UMoWldPktrxLBsxENYYj6u6bxwmPMmDvZnChUjGA6ShPhYdKuSWzS', '', 'admin', 1, '2021-06-09', '2021-06-02 17:38:05', '2022-08-05 09:17:01', '0000-00-00 00:00:00'),
(19, 'pendaftar', 'ormas', '', '$2y$10$gxtz/orFGvN/haoobIrb2OYbfxaP7barYrnpBuaLOrmNpwwH0OrdK', '', 'pendaftar', 1, NULL, '2021-06-27 01:39:45', '2022-10-05 22:23:37', '0000-00-00 00:00:00'),
(25, 'Doni Andrean', 'superadmin', '1720706703WhatsApp Image 2021-01-23 at 22.38.28.jpeg', '$2y$10$y7aTjHNH2466/Tg1TdqBKe6Uc/in5IS5TTnBU1BwFXHO4tigXn5ta', '123456789', 'superadmin', 1, NULL, '2022-08-18 02:31:02', '2024-07-11 21:05:03', '0000-00-00 00:00:00'),
(58, 'doniduasembilan@gmail.com', 'Doni Andrean', '1721033725WhatsApp Image 2021-01-22 at 03.54.03.jpeg', '$2y$10$cgKGA9NLOUWAycJTHEWkPuyI.VeoVjDCpU0sUFs2g7EgfFFgreIb.', '', 'pendaftar', 1, NULL, '2024-07-15 15:32:15', '2024-07-15 15:55:25', '0000-00-00 00:00:00'),
(59, 'meisya@gmail.com', 'aaaaaa', '', '$2y$10$ymhKdl8UksVXkcimLPx/neiclpiw775IedDmKx4Ry2/pL9K/zVSFi', '', 'pendaftar', 0, NULL, '2024-07-15 16:07:17', '2024-07-15 22:28:34', '0000-00-00 00:00:00'),
(61, 'sirajatambun@gmail.com', 'Si Raja Tambun', '', '$2y$10$5OWzPNyQ.G5VN75bIT9sLeeCn6iWOx1iqcAEMFADqEGy/OvtmH6Im', '', 'pendaftar', 0, NULL, '2024-07-15 22:36:34', '2024-07-15 22:36:34', '0000-00-00 00:00:00'),
(63, 'Doni ', 'doni', '', '$2y$10$etjj6AWJlt0Dfc56wsh1meCfeuwuASJ9AQ9wD8O5..AXdoAAd1W1u', '', 'superadmin', 1, NULL, '2024-07-16 05:45:25', '2024-07-16 05:45:25', '0000-00-00 00:00:00'),
(64, 'Rizky Muhari Yahfiiz, S.STP., M,Si', 'Kepala Sub Bagian Umum', '', '$2y$10$uXYILYJKCD59sBVDVnEHkuI9uLwATsX/aeVeWZrfAtk.fshFRjWYG', '', 'superadmin', 1, NULL, '2024-07-16 05:46:06', '2024-07-16 05:51:19', '0000-00-00 00:00:00'),
(65, 'Nerry Cloudio Popindo S.STP', 'Staf', '', '$2y$10$wX3hcTfp7GA.CywUkC1yFu8M2Rk7M6QSeuX7/.AMtE9i33MFzqU9.', '', 'superadmin', 1, NULL, '2024-07-16 06:00:02', '2024-07-16 06:00:02', '0000-00-00 00:00:00'),
(66, 'Lil Fadly Jamil, S.STP., M.Si', 'Kepala Sub Bidang', '', '$2y$10$T.mZDEpV9am46fzSSNExTuij8UZ.z2iZ.ZCJYckalqX/5IS/9vq6y', '', 'admin', 1, NULL, '2024-07-16 06:00:32', '2024-07-16 06:01:10', '0000-00-00 00:00:00'),
(67, 'Lil Fadly Jamil, S.STP., M.Si', 'Kepala Bidang', '', '$2y$10$mBg9Q4mldFZShukbEp78Y.XxSwDQ8/ehUhg22X.zLql8EViSu3UvS', '', 'superadmin', 1, NULL, '2024-07-16 06:00:52', '2024-07-16 06:00:52', '0000-00-00 00:00:00'),
(68, 'Jendri Salmon Ginting, AP., M.si', 'Kepala Badan Kesbangpol', '', '$2y$10$Lu4EZgbNfARju/Of9BB4u.mu5un1EuWPbkK0fFvM04V467sFiRYkm', '', 'superadmin', 1, NULL, '2024-07-16 06:01:33', '2024-07-16 06:01:33', '0000-00-00 00:00:00'),
(69, 'Murnis', 'Sekretaris Kaban', '', '$2y$10$/.eq.BdRZQUVcYXFKTHZLewN.V9jVc4xeMRmvLLup5Y.PTbX4rNZK', '', 'admin', 1, NULL, '2024-07-16 06:02:10', '2024-07-16 06:02:10', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `laporan_kerja`
--
ALTER TABLE `laporan_kerja`
  ADD PRIMARY KEY (`id_laporan_kerja`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`);

--
-- Indexes for table `ormas`
--
ALTER TABLE `ormas`
  ADD PRIMARY KEY (`id_ormas`);

--
-- Indexes for table `ormas_riwayat`
--
ALTER TABLE `ormas_riwayat`
  ADD PRIMARY KEY (`id_ormas_riwayat`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `pengajuan_skt`
--
ALTER TABLE `pengajuan_skt`
  ADD PRIMARY KEY (`id_pengajuan_skt`);

--
-- Indexes for table `riwayat_login`
--
ALTER TABLE `riwayat_login`
  ADD PRIMARY KEY (`id_riwayat_login`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akses`
--
ALTER TABLE `akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `laporan_kerja`
--
ALTER TABLE `laporan_kerja`
  MODIFY `id_laporan_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=290;

--
-- AUTO_INCREMENT for table `ormas`
--
ALTER TABLE `ormas`
  MODIFY `id_ormas` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `ormas_riwayat`
--
ALTER TABLE `ormas_riwayat`
  MODIFY `id_ormas_riwayat` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengajuan_skt`
--
ALTER TABLE `pengajuan_skt`
  MODIFY `id_pengajuan_skt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `riwayat_login`
--
ALTER TABLE `riwayat_login`
  MODIFY `id_riwayat_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=570;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
