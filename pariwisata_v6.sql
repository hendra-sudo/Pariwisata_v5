-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 10:25 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata_v6`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_wisata`
--

CREATE TABLE `fasilitas_wisata` (
  `id` int(11) NOT NULL,
  `faswis_nama` text NOT NULL,
  `faswis_icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas_wisata`
--

INSERT INTO `fasilitas_wisata` (`id`, `faswis_nama`, `faswis_icon`) VALUES
(1, 'KEAMANAN', 'keamanan.png'),
(2, 'KLINIK KESEHATAN', 'klinik.png'),
(3, 'LOKER/PENITIPAN BARANG', 'safebox.png'),
(4, 'PARKIR', 'parkir.png'),
(5, 'PENGINAPAN', 'PENGINAPAN.png'),
(6, 'SOUVENIR SHOP', 'souvenir.png'),
(7, 'TEMPAT IBADAH', 'tempat_ibadah.png'),
(8, 'TEMPAT MAKAN', 'tempat_makan.png'),
(9, 'TOILET', 'toilet.png'),
(10, 'TOUR GUIDE', 'tourist_information.png'),
(11, 'TOURIST INFORMATION', 'tourist_information.png');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_02_10_093257_create_table_kategori', 1),
(4, '2021_02_10_103934_create_table_wisata', 1),
(5, '2021_02_10_170140_create_table_berita', 1),
(6, '2021_02_10_224013_create_table_pendapatan', 1),
(7, '2021_02_10_225820_create_table_about', 1),
(8, '2021_02_10_230255_create_table_kontak', 2),
(9, '2021_02_10_232943_create_table_event', 2),
(10, '2021_02_11_091128_create_table_cinderamata', 2),
(11, '2021_02_11_160554_create_table_kuliner', 3),
(12, '2021_02_11_163012_create_table_akomodasi', 4),
(13, '2021_02_14_061650_create_table_wahana', 5);

-- --------------------------------------------------------

--
-- Table structure for table `m_about`
--

CREATE TABLE `m_about` (
  `about_id` int(10) UNSIGNED NOT NULL,
  `id_admin` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_gambar` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_about`
--

INSERT INTO `m_about` (`about_id`, `id_admin`, `about_deskripsi`, `status`, `about_gambar`, `created_at`, `updated_at`) VALUES
(1, NULL, '<p><b>Kabupaten Malang</b> adalah kabupaten terluas kedua di Jawa Timur setelah Kabupaten Banyuwangi dan merupakan kabupaten dengan populasi terbesar di Jawa Timur. Ibu kota Kabupaten Malang adalah Kepanjen.</p>', 'Aktif', 'Ijo bg.png', '2021-02-17 02:39:46', '2021-02-21 03:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `m_akomodasi`
--

CREATE TABLE `m_akomodasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `wisata` int(10) UNSIGNED NOT NULL,
  `nama_akomodasi` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_akomodasi`
--

INSERT INTO `m_akomodasi` (`id`, `wisata`, `nama_akomodasi`, `deskripsi`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 3, 'motor', '<p>aaaaaaaaaaaaaaaaaaaaa</p>', 28000, NULL, '2021-02-15 18:55:19', '2021-02-15 18:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `m_alamat`
--

CREATE TABLE `m_alamat` (
  `id` int(5) NOT NULL,
  `nama_kecamatan` varchar(25) NOT NULL,
  `nama_desa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_alamat`
--

INSERT INTO `m_alamat` (`id`, `nama_kecamatan`, `nama_desa`) VALUES
(1, 'Ampelgading', 'Argoyuwono'),
(2, 'Ampelgading', 'Lebakharjo'),
(3, 'Ampelgading', 'Mulyoasri'),
(4, 'Ampelgading', 'Purwoharjo'),
(5, 'Ampelgading', 'Sidorenggo'),
(6, 'Ampelgading', 'Simojayan'),
(7, 'Ampelgading', 'Sonowangi '),
(8, 'Ampelgading', 'Tamanasri '),
(9, 'Ampelgading', 'Tamansari '),
(10, 'Ampelgading', 'Tawangagung '),
(11, 'Ampelgading', 'Tirtomarto '),
(12, 'Ampelgading', 'Tirtomoyo '),
(13, 'Ampelgading', 'Wirotaman '),
(14, 'Bantur', 'Bandungrejo '),
(15, 'Bantur', 'Bantur '),
(16, 'Bantur', 'Karangsari '),
(17, 'Bantur', 'Pringgodani '),
(18, 'Bantur', 'Rejosari '),
(19, 'Bantur', 'Rejoyoso '),
(20, 'Bantur', 'Srigonco '),
(21, 'Bantur', 'Sumberbening '),
(22, 'Bantur', 'Wonokerto '),
(23, 'Bantur', 'Wonorejo '),
(24, 'Bantur', 'Bandungrejo '),
(25, 'Bantur', 'Bantur '),
(26, 'Bantur', 'Karangsari '),
(27, 'Bantur', 'Pringgodani '),
(28, 'Bantur', 'Rejosari '),
(29, 'Bantur', 'Rejoyoso '),
(30, 'Bantur', 'Srigonco '),
(31, 'Bantur', 'Sumberbening '),
(32, 'Bantur', 'Wonokerto '),
(33, 'Bantur', 'Wonorejo '),
(34, 'Bululawang', 'Bakalan '),
(35, 'Bululawang', 'Bululawang'),
(36, 'Bululawang', 'Gading'),
(37, 'Bululawang', 'Kasembon'),
(38, 'Bululawang', 'Kasri '),
(39, 'Bululawang', 'Krebet '),
(40, 'Bululawang', 'Krebet Senggrong'),
(41, 'Bululawang', 'Kuwolu '),
(42, 'Bululawang', 'Lumbangsari '),
(43, 'Bululawang', 'Pringu '),
(44, 'Bululawang', 'Sempalwadak '),
(45, 'Bululawang', 'Sudimoro '),
(46, 'Bululawang', 'Sukonolo '),
(47, 'Bululawang', 'Wandanpuro '),
(48, 'Bululawang', 'Bakalan '),
(49, 'Bululawang', 'Bululawang'),
(50, 'Bululawang', 'Gading'),
(51, 'Bululawang', 'Kasembon'),
(52, 'Bululawang', 'Kasri '),
(53, 'Bululawang', 'Krebet '),
(54, 'Bululawang', 'Krebet Senggrong'),
(55, 'Bululawang', 'Kuwolu '),
(56, 'Bululawang', 'Lumbangsari '),
(57, 'Bululawang', 'Pringu '),
(58, 'Bululawang', 'Sempalwadak '),
(59, 'Bululawang', 'Sudimoro '),
(60, 'Bululawang', 'Sukonolo '),
(61, 'Bululawang', 'Wandanpuro '),
(62, 'Dampit', 'Amadanom '),
(63, 'Dampit', 'Baturetno '),
(64, 'Dampit', 'Bumirejo '),
(65, 'Dampit', 'Dampit '),
(66, 'Dampit', 'Jambangan '),
(67, 'Dampit', 'Majangtengah '),
(68, 'Dampit', 'Pamotan '),
(69, 'Dampit', 'Pojok '),
(70, 'Dampit', 'Rembun '),
(71, 'Dampit', 'Srimulyo '),
(72, 'Dampit', 'Sukodono '),
(73, 'Dampit', 'Sumbersuko '),
(74, 'Dampit', 'Amadanom '),
(75, 'Dampit', 'Baturetno '),
(76, 'Dampit', 'Bumirejo '),
(77, 'Dampit', 'Dampit '),
(78, 'Dampit', 'Jambangan '),
(79, 'Dampit', 'Majangtengah '),
(80, 'Dampit', 'Pamotan '),
(81, 'Dampit', 'Pojok '),
(82, 'Dampit', 'Rembun '),
(83, 'Dampit', 'Srimulyo '),
(84, 'Dampit', 'Sukodono '),
(85, 'Dampit', 'Sumbersuko '),
(86, 'Dau', 'Gadingkulon '),
(87, 'Dau', 'Kalisongo '),
(88, 'Dau', 'Karangwidoro '),
(89, 'Dau', 'Kucur '),
(90, 'Dau', 'Landungsari '),
(91, 'Dau', 'Mulyoagung '),
(92, 'Dau', 'Petung Sewu'),
(93, 'Dau', 'Selorejo '),
(94, 'Dau', 'Sumbersekar '),
(95, 'Dau', 'Tegalweru '),
(96, 'Dau', 'Gadingkulon '),
(97, 'Dau', 'Kalisongo '),
(98, 'Dau', 'Karangwidoro '),
(99, 'Dau', 'Kucur '),
(100, 'Dau', 'Landungsari '),
(101, 'Dau', 'Mulyoagung '),
(102, 'Dau', 'Petung Sewu'),
(103, 'Dau', 'Selorejo '),
(104, 'Dau', 'Sumbersekar '),
(105, 'Dau', 'Tegalweru '),
(106, 'Donomulyo', 'Banjarjo '),
(107, 'Donomulyo', 'Donomulyo '),
(108, 'Donomulyo', 'Kedungsalam '),
(109, 'Donomulyo', 'Mentaraman '),
(110, 'Donomulyo', 'Purwodadi '),
(111, 'Donomulyo', 'Purworejo '),
(112, 'Donomulyo', 'Sumberoto '),
(113, 'Donomulyo', 'Tempursari '),
(114, 'Donomulyo', 'Tlogosari '),
(115, 'Donomulyo', 'Tulungrejo '),
(116, 'Donomulyo', 'Banjarjo '),
(117, 'Donomulyo', 'Donomulyo '),
(118, 'Donomulyo', 'Kedungsalam '),
(119, 'Donomulyo', 'Mentaraman '),
(120, 'Donomulyo', 'Purwodadi '),
(121, 'Donomulyo', 'Purworejo '),
(122, 'Donomulyo', 'Sumberoto '),
(123, 'Donomulyo', 'Tempursari '),
(124, 'Donomulyo', 'Tlogosari '),
(125, 'Donomulyo', 'Tulungrejo '),
(126, 'Gedangan', 'Gajahrejo '),
(127, 'Gedangan', 'Gedangan '),
(128, 'Gedangan', 'Girimulyo '),
(129, 'Gedangan', 'Segaran '),
(130, 'Gedangan', 'Sidodadi '),
(131, 'Gedangan', 'Sindurejo '),
(132, 'Gedangan', 'Sumberejo '),
(133, 'Gedangan', 'Tumpakrejo '),
(134, 'Gedangan', 'Gajahrejo '),
(135, 'Gedangan', 'Gedangan '),
(136, 'Gedangan', 'Girimulyo '),
(137, 'Gedangan', 'Segaran '),
(138, 'Gedangan', 'Sidodadi '),
(139, 'Gedangan', 'Sindurejo '),
(140, 'Gedangan', 'Sumberejo '),
(141, 'Gedangan', 'Tumpakrejo '),
(142, 'Gondanglegi', 'Bulupitu '),
(143, 'Gondanglegi', 'Ganjaran '),
(144, 'Gondanglegi', 'Gondanglegi Kulon'),
(145, 'Gondanglegi', 'Gondanglegi Wetan'),
(146, 'Gondanglegi', 'Ketawang '),
(147, 'Gondanglegi', 'Panggungharjo '),
(148, 'Gondanglegi', 'Putat Kidul'),
(149, 'Gondanglegi', 'Putat Lor'),
(150, 'Gondanglegi', 'Putukrejo '),
(151, 'Gondanglegi', 'Sepanjang '),
(152, 'Gondanglegi', 'Sukorejo '),
(153, 'Gondanglegi', 'Sukosari '),
(154, 'Gondanglegi', 'Sumberjaya '),
(155, 'Gondanglegi', 'Urek Urek'),
(156, 'Gondanglegi', 'Bulupitu '),
(157, 'Gondanglegi', 'Ganjaran '),
(158, 'Gondanglegi', 'Gondanglegi Kulon'),
(159, 'Gondanglegi', 'Gondanglegi Wetan'),
(160, 'Gondanglegi', 'Ketawang '),
(161, 'Gondanglegi', 'Panggungharjo '),
(162, 'Gondanglegi', 'Putat Kidul'),
(163, 'Gondanglegi', 'Putat Lor'),
(164, 'Gondanglegi', 'Putukrejo '),
(165, 'Gondanglegi', 'Sepanjang '),
(166, 'Gondanglegi', 'Sukorejo '),
(167, 'Gondanglegi', 'Sukosari '),
(168, 'Gondanglegi', 'Sumberjaya '),
(169, 'Gondanglegi', 'Urek Urek'),
(170, 'Jabung', 'Argosari '),
(171, 'Jabung', 'Gading Kembar'),
(172, 'Jabung', 'Gunung Jati'),
(173, 'Jabung', 'Jabung '),
(174, 'Jabung', 'Kemantren '),
(175, 'Jabung', 'Kemiri '),
(176, 'Jabung', 'Kenongo '),
(177, 'Jabung', 'Ngadirejo '),
(178, 'Jabung', 'Pandansari Lor'),
(179, 'Jabung', 'Sidomulyo'),
(180, 'Jabung', 'Sidorejo '),
(181, 'Jabung', 'Slamparejo '),
(182, 'Jabung', 'Sukolilo '),
(183, 'Jabung', 'Sukopuro '),
(184, 'Jabung', 'Taji '),
(185, 'Jabung', 'Argosari '),
(186, 'Jabung', 'Gading Kembar'),
(187, 'Jabung', 'Gunung Jati'),
(188, 'Jabung', 'Jabung '),
(189, 'Jabung', 'Kemantren '),
(190, 'Jabung', 'Kemiri '),
(191, 'Jabung', 'Kenongo '),
(192, 'Jabung', 'Ngadirejo '),
(193, 'Jabung', 'Pandansari Lor'),
(194, 'Jabung', 'Sidomulyo'),
(195, 'Jabung', 'Sidorejo '),
(196, 'Jabung', 'Slamparejo '),
(197, 'Jabung', 'Sukolilo '),
(198, 'Jabung', 'Sukopuro '),
(199, 'Jabung', 'Taji '),
(200, 'Kalipare', 'Arjosari '),
(201, 'Kalipare', 'Arjowilangun '),
(202, 'Kalipare', 'Kaliasri '),
(203, 'Kalipare', 'Kalipare '),
(204, 'Kalipare', 'Kalirejo '),
(205, 'Kalipare', 'Putukrejo '),
(206, 'Kalipare', 'Sukowilangun '),
(207, 'Kalipare', 'Sumberpetung '),
(208, 'Kalipare', 'Tumpakrejo '),
(209, 'Kalipare', 'Arjosari '),
(210, 'Kalipare', 'Arjowilangun '),
(211, 'Kalipare', 'Kaliasri '),
(212, 'Kalipare', 'Kalipare '),
(213, 'Kalipare', 'Kalirejo '),
(214, 'Kalipare', 'Putukrejo '),
(215, 'Kalipare', 'Sukowilangun '),
(216, 'Kalipare', 'Sumberpetung '),
(217, 'Kalipare', 'Tumpakrejo '),
(218, 'Karangploso', 'Ampeldento '),
(219, 'Karangploso', 'Bocek '),
(220, 'Karangploso', 'Donowarih '),
(221, 'Karangploso', 'Girimoyo '),
(222, 'Karangploso', 'Kepuharjo '),
(223, 'Karangploso', 'Ngenep '),
(224, 'Karangploso', 'Ngijo '),
(225, 'Karangploso', 'Tawangargo '),
(226, 'Karangploso', 'Tegalgondo '),
(227, 'Karangploso', 'Ampeldento '),
(228, 'Karangploso', 'Bocek '),
(229, 'Karangploso', 'Donowarih '),
(230, 'Karangploso', 'Girimoyo '),
(231, 'Karangploso', 'Kepuharjo '),
(232, 'Karangploso', 'Ngenep '),
(233, 'Karangploso', 'Ngijo '),
(234, 'Karangploso', 'Tawangargo '),
(235, 'Karangploso', 'Tegalgondo '),
(236, 'Kasembon', 'Bayem '),
(237, 'Kasembon', 'Kasembon '),
(238, 'Kasembon', 'Pait '),
(239, 'Kasembon', 'Pondok Agung'),
(240, 'Kasembon', 'Sukosari '),
(241, 'Kasembon', 'Wonoagung '),
(242, 'Kasembon', 'Bayem '),
(243, 'Kasembon', 'Kasembon '),
(244, 'Kasembon', 'Pait '),
(245, 'Kasembon', 'Pondok Agung'),
(246, 'Kasembon', 'Sukosari '),
(247, 'Kasembon', 'Wonoagung '),
(248, 'Kepanjen', 'Ardirejo '),
(249, 'Kepanjen', 'Cepokomulyo '),
(250, 'Kepanjen', 'Curung Rejo'),
(251, 'Kepanjen', 'Dilem '),
(252, 'Kepanjen', 'Jatirejoyoso '),
(253, 'Kepanjen', 'Jenggolo '),
(254, 'Kepanjen', 'Kedungpedaringan '),
(255, 'Kepanjen', 'Kemiri '),
(256, 'Kepanjen', 'Kepanjen '),
(257, 'Kepanjen', 'Mangunrejo '),
(258, 'Kepanjen', 'Mojosari '),
(259, 'Kepanjen', 'Ngadilangkung '),
(260, 'Kepanjen', 'Panggungrejo '),
(261, 'Kepanjen', 'Penarukan '),
(262, 'Kepanjen', 'Sengguruh '),
(263, 'Kepanjen', 'Sukoraharjo '),
(264, 'Kepanjen', 'Talangagung '),
(265, 'Kepanjen', 'Tegalsari '),
(266, 'Kepanjen', 'Ardirejo '),
(267, 'Kepanjen', 'Cepokomulyo '),
(268, 'Kepanjen', 'Curung Rejo'),
(269, 'Kepanjen', 'Dilem '),
(270, 'Kepanjen', 'Jatirejoyoso '),
(271, 'Kepanjen', 'Jenggolo '),
(272, 'Kepanjen', 'Kedungpedaringan '),
(273, 'Kepanjen', 'Kemiri '),
(274, 'Kepanjen', 'Kepanjen '),
(275, 'Kepanjen', 'Mangunrejo '),
(276, 'Kepanjen', 'Mojosari '),
(277, 'Kepanjen', 'Ngadilangkung '),
(278, 'Kepanjen', 'Panggungrejo '),
(279, 'Kepanjen', 'Penarukan '),
(280, 'Kepanjen', 'Sengguruh '),
(281, 'Kepanjen', 'Sukoraharjo '),
(282, 'Kepanjen', 'Talangagung '),
(283, 'Kepanjen', 'Tegalsari '),
(284, 'Kromengan', 'Jambuwer '),
(285, 'Kromengan', 'Jatikerto '),
(286, 'Kromengan', 'Karangrejo '),
(287, 'Kromengan', 'Kromengan '),
(288, 'Kromengan', 'Ngadirejo '),
(289, 'Kromengan', 'Peniwen '),
(290, 'Kromengan', 'Slorok '),
(291, 'Kromengan', 'Jambuwer '),
(292, 'Kromengan', 'Jatikerto '),
(293, 'Kromengan', 'Karangrejo '),
(294, 'Kromengan', 'Kromengan '),
(295, 'Kromengan', 'Ngadirejo '),
(296, 'Kromengan', 'Peniwen '),
(297, 'Kromengan', 'Slorok '),
(298, 'Lawang', 'Lawang'),
(299, 'Lawang', 'Turirejo '),
(300, 'Lawang', 'Ketindan '),
(301, 'Lawang', 'Bedali '),
(302, 'Lawang', 'Kalirejo '),
(303, 'Lawang', 'Mulyoarjo '),
(304, 'Lawang', 'Sidodadi '),
(305, 'Lawang', 'Sidoluhur '),
(306, 'Lawang', 'Srigading '),
(307, 'Lawang', 'Sumber Ngepoh'),
(308, 'Lawang', 'Sumber Porong'),
(309, 'Lawang', 'Wonorejo '),
(310, 'Lawang', 'Lawang'),
(311, 'Lawang', 'Turirejo '),
(312, 'Lawang', 'Ketindan '),
(313, 'Lawang', 'Bedali '),
(314, 'Lawang', 'Kalirejo '),
(315, 'Lawang', 'Mulyoarjo '),
(316, 'Lawang', 'Sidodadi '),
(317, 'Lawang', 'Sidoluhur '),
(318, 'Lawang', 'Srigading '),
(319, 'Lawang', 'Sumber Ngepoh'),
(320, 'Lawang', 'Sumber Porong'),
(321, 'Lawang', 'Wonorejo '),
(322, 'Ngajum', 'Babadan '),
(323, 'Ngajum', 'Balesari '),
(324, 'Ngajum', 'Banjarsari '),
(325, 'Ngajum', 'Kesamben '),
(326, 'Ngajum', 'Kranggan '),
(327, 'Ngajum', 'Maguan '),
(328, 'Ngajum', 'Ngajum '),
(329, 'Ngajum', 'Ngasem '),
(330, 'Ngajum', 'Palaan '),
(331, 'Ngajum', 'Babadan '),
(332, 'Ngajum', 'Balesari '),
(333, 'Ngajum', 'Banjarsari '),
(334, 'Ngajum', 'Kesamben '),
(335, 'Ngajum', 'Kranggan '),
(336, 'Ngajum', 'Maguan '),
(337, 'Ngajum', 'Ngajum '),
(338, 'Ngajum', 'Ngasem '),
(339, 'Ngajum', 'Palaan '),
(340, 'Ngantang', 'Banjarejo '),
(341, 'Ngantang', 'Banturejo '),
(342, 'Ngantang', 'Jombok '),
(343, 'Ngantang', 'Kaumrejo '),
(344, 'Ngantang', 'Mulyorejo '),
(345, 'Ngantang', 'Ngantru '),
(346, 'Ngantang', 'Pagersari '),
(347, 'Ngantang', 'Pandansari '),
(348, 'Ngantang', 'Purworejo '),
(349, 'Ngantang', 'Sidodadi '),
(350, 'Ngantang', 'Sumberagung '),
(351, 'Ngantang', 'Tulungrejo '),
(352, 'Ngantang', 'Waturejo '),
(353, 'Ngantang', 'Banjarejo '),
(354, 'Ngantang', 'Banturejo '),
(355, 'Ngantang', 'Jombok '),
(356, 'Ngantang', 'Kaumrejo '),
(357, 'Ngantang', 'Mulyorejo '),
(358, 'Ngantang', 'Ngantru '),
(359, 'Ngantang', 'Pagersari '),
(360, 'Ngantang', 'Pandansari '),
(361, 'Ngantang', 'Purworejo '),
(362, 'Ngantang', 'Sidodadi '),
(363, 'Ngantang', 'Sumberagung '),
(364, 'Ngantang', 'Tulungrejo '),
(365, 'Ngantang', 'Waturejo '),
(366, 'Pagak', 'Gampingan '),
(367, 'Pagak', 'Pagak '),
(368, 'Pagak', 'Pandanrejo '),
(369, 'Pagak', 'Sempol'),
(370, 'Pagak', 'Sumberkerto '),
(371, 'Pagak', 'Sumbermanjing Kulon'),
(372, 'Pagak', 'Sumberrejo '),
(373, 'Pagak', 'Tlogorejo '),
(374, 'Pagak', ''),
(375, 'Pagak', 'Gampingan '),
(376, 'Pagak', 'Pagak '),
(377, 'Pagak', 'Pandanrejo '),
(378, 'Pagak', 'Sempol'),
(379, 'Pagak', 'Sumberkerto '),
(380, 'Pagak', 'Sumbermanjing Kulon'),
(381, 'Pagak', 'Sumberrejo '),
(382, 'Pagak', 'Tlogorejo '),
(383, 'Pagak', ''),
(384, 'Pagelaran', 'Balearjo '),
(385, 'Pagelaran', 'Banjarejo '),
(386, 'Pagelaran', 'Brongkal '),
(387, 'Pagelaran', 'Clumprit '),
(388, 'Pagelaran', 'Kademangan '),
(389, 'Pagelaran', 'Kanigoro '),
(390, 'Pagelaran', 'Karangsuko '),
(391, 'Pagelaran', 'Pagelaran '),
(392, 'Pagelaran', 'Sidorejo '),
(393, 'Pagelaran', 'Suwaru '),
(394, 'Pagelaran', 'Balearjo '),
(395, 'Pagelaran', 'Banjarejo '),
(396, 'Pagelaran', 'Brongkal '),
(397, 'Pagelaran', 'Clumprit '),
(398, 'Pagelaran', 'Kademangan '),
(399, 'Pagelaran', 'Kanigoro '),
(400, 'Pagelaran', 'Karangsuko '),
(401, 'Pagelaran', 'Pagelaran '),
(402, 'Pagelaran', 'Sidorejo '),
(403, 'Pagelaran', 'Suwaru '),
(434, 'Pakis', 'Ampeldento '),
(435, 'Pakis', 'Asrikaton'),
(436, 'Pakis', 'Banjarrejo'),
(437, 'Pakis', 'Bunutwetan '),
(438, 'Pakis', 'Kedungrejo '),
(439, 'Pakis', 'Mangliawan '),
(440, 'Pakis', 'Pakisjajar '),
(441, 'Pakis', 'Pakiskembar '),
(442, 'Pakis', 'Pucang Songo'),
(443, 'Pakis', 'Saptorenggo '),
(444, 'Pakis', 'Sekarpuro '),
(445, 'Pakis', 'Sukoanyar '),
(446, 'Pakis', 'Sumberkradenan '),
(447, 'Pakis', 'Sumberpasir '),
(448, 'Pakis', 'Tirtomoyo '),
(449, 'Pakis', 'Ampeldento '),
(450, 'Pakis', 'Asrikaton'),
(451, 'Pakis', 'Banjarrejo'),
(452, 'Pakis', 'Bunutwetan '),
(453, 'Pakis', 'Kedungrejo '),
(454, 'Pakis', 'Mangliawan '),
(455, 'Pakis', 'Pakisjajar '),
(456, 'Pakis', 'Pakiskembar '),
(457, 'Pakis', 'Pucang Songo'),
(458, 'Pakis', 'Saptorenggo '),
(459, 'Pakis', 'Sekarpuro '),
(460, 'Pakis', 'Sukoanyar '),
(461, 'Pakis', 'Sumberkradenan '),
(462, 'Pakis', 'Sumberpasir '),
(463, 'Pakis', 'Tirtomoyo '),
(464, 'Pakisaji', 'Genengan '),
(465, 'Pakisaji', 'Glanggang '),
(466, 'Pakisaji', 'Jatisari '),
(467, 'Pakisaji', 'Karangduren '),
(468, 'Pakisaji', 'Karangpandan '),
(469, 'Pakisaji', 'Kebonagung '),
(470, 'Pakisaji', 'Kendalpayak '),
(471, 'Pakisaji', 'Pakisaji '),
(472, 'Pakisaji', 'Permanu '),
(473, 'Pakisaji', 'Sutojayan '),
(474, 'Pakisaji', 'Wadung '),
(475, 'Pakisaji', 'Wonokerso '),
(476, 'Pakisaji', 'Genengan '),
(477, 'Pakisaji', 'Glanggang '),
(478, 'Pakisaji', 'Jatisari '),
(479, 'Pakisaji', 'Karangduren '),
(480, 'Pakisaji', 'Karangpandan '),
(481, 'Pakisaji', 'Kebonagung '),
(482, 'Pakisaji', 'Kendalpayak '),
(483, 'Pakisaji', 'Pakisaji '),
(484, 'Pakisaji', 'Permanu '),
(485, 'Pakisaji', 'Sutojayan '),
(486, 'Pakisaji', 'Wadung '),
(487, 'Pakisaji', 'Wonokerso '),
(488, 'Poncokusumo', 'Argosuko '),
(489, 'Poncokusumo', 'Belung '),
(490, 'Poncokusumo', 'Dawuhan '),
(491, 'Poncokusumo', 'Gubukklakah '),
(492, 'Poncokusumo', 'Jambesari '),
(493, 'Poncokusumo', 'Karanganyar '),
(494, 'Poncokusumo', 'Karangnongko '),
(495, 'Poncokusumo', 'Ngadas '),
(496, 'Poncokusumo', 'Ngadireso '),
(497, 'Poncokusumo', 'Ngebruk '),
(498, 'Poncokusumo', 'Pajaran '),
(499, 'Poncokusumo', 'Pandansari '),
(500, 'Poncokusumo', 'Poncokusumo '),
(501, 'Poncokusumo', 'Sumberejo '),
(502, 'Poncokusumo', 'Wonomulyo '),
(503, 'Poncokusumo', 'Wonorejo '),
(504, 'Poncokusumo', 'Wringinanom '),
(505, 'Poncokusumo', 'Argosuko '),
(506, 'Poncokusumo', 'Belung '),
(507, 'Poncokusumo', 'Dawuhan '),
(508, 'Poncokusumo', 'Gubukklakah '),
(509, 'Poncokusumo', 'Jambesari '),
(510, 'Poncokusumo', 'Karanganyar '),
(511, 'Poncokusumo', 'Karangnongko '),
(512, 'Poncokusumo', 'Ngadas '),
(513, 'Poncokusumo', 'Ngadireso '),
(514, 'Poncokusumo', 'Ngebruk '),
(515, 'Poncokusumo', 'Pajaran '),
(516, 'Poncokusumo', 'Pandansari '),
(517, 'Poncokusumo', 'Poncokusumo '),
(518, 'Poncokusumo', 'Sumberejo '),
(519, 'Poncokusumo', 'Wonomulyo '),
(520, 'Poncokusumo', 'Wonorejo '),
(521, 'Poncokusumo', 'Wringinanom '),
(522, 'Pujon', 'Bendosari '),
(523, 'Pujon', 'Madiredo '),
(524, 'Pujon', 'Ngabab '),
(525, 'Pujon', 'Ngroto '),
(526, 'Pujon', 'Pandesari '),
(527, 'Pujon', 'Pujon Kidul'),
(528, 'Pujon', 'Pujon Lor'),
(529, 'Pujon', 'Sukomulyo '),
(530, 'Pujon', 'Tawangsari '),
(531, 'Pujon', 'Wiyurejo '),
(533, 'Pujon', 'Bendosari '),
(534, 'Pujon', 'Madiredo '),
(535, 'Pujon', 'Ngabab '),
(536, 'Pujon', 'Ngroto '),
(537, 'Pujon', 'Pandesari '),
(538, 'Pujon', 'Pujon Kidul'),
(539, 'Pujon', 'Pujon Lor'),
(540, 'Pujon', 'Sukomulyo '),
(541, 'Pujon', 'Tawangsari '),
(542, 'Pujon', 'Wiyurejo '),
(544, 'Singosari', 'Ardimulyo '),
(545, 'Singosari', 'Banjararum '),
(546, 'Singosari', 'Baturetno '),
(547, 'Singosari', 'Candirenggo '),
(548, 'Singosari', 'Dengkol '),
(549, 'Singosari', 'Gunungrejo '),
(550, 'Singosari', 'Klampok '),
(551, 'Singosari', 'Langlang '),
(552, 'Singosari', 'Losari '),
(553, 'Singosari', 'Pagentan '),
(554, 'Singosari', 'Purwoasri '),
(555, 'Singosari', 'Randuagung '),
(556, 'Singosari', 'Tamanharjo '),
(557, 'Singosari', 'Toyomarto '),
(558, 'Singosari', 'Tunjungtirto '),
(559, 'Singosari', 'Watugede '),
(560, 'Singosari', 'Wonorejo '),
(561, 'Singosari', 'Ardimulyo '),
(562, 'Singosari', 'Banjararum '),
(563, 'Singosari', 'Baturetno '),
(564, 'Singosari', 'Candirenggo '),
(565, 'Singosari', 'Dengkol '),
(566, 'Singosari', 'Gunungrejo '),
(567, 'Singosari', 'Klampok '),
(568, 'Singosari', 'Langlang '),
(569, 'Singosari', 'Losari '),
(570, 'Singosari', 'Pagentan '),
(571, 'Singosari', 'Purwoasri '),
(572, 'Singosari', 'Randuagung '),
(573, 'Singosari', 'Tamanharjo '),
(574, 'Singosari', 'Toyomarto '),
(575, 'Singosari', 'Tunjungtirto '),
(576, 'Singosari', 'Watugede '),
(577, 'Singosari', 'Wonorejo '),
(578, 'Sumbermanjing Wetan', 'Argotirto '),
(579, 'Sumbermanjing Wetan', 'Druju '),
(580, 'Sumbermanjing Wetan', 'Harjokuncaran '),
(581, 'Sumbermanjing Wetan', 'Kedungbanteng '),
(582, 'Sumbermanjing Wetan', 'Klepu '),
(583, 'Sumbermanjing Wetan', 'Ringinkembar '),
(584, 'Sumbermanjing Wetan', 'Ringinsari '),
(585, 'Sumbermanjing Wetan', 'Sekarbanyu '),
(586, 'Sumbermanjing Wetan', 'Sidoasri '),
(587, 'Sumbermanjing Wetan', 'Sitiarjo '),
(588, 'Sumbermanjing Wetan', 'Sumberagung '),
(589, 'Sumbermanjing Wetan', 'Sumbermanjing Wetan'),
(590, 'Sumbermanjing Wetan', 'Tambak Asri'),
(591, 'Sumbermanjing Wetan', 'Tambakrejo '),
(592, 'Sumbermanjing Wetan', 'Tegalrejo '),
(593, 'Sumbermanjing Wetan', 'Argotirto '),
(594, 'Sumbermanjing Wetan', 'Druju '),
(595, 'Sumbermanjing Wetan', 'Harjokuncaran '),
(596, 'Sumbermanjing Wetan', 'Kedungbanteng '),
(597, 'Sumbermanjing Wetan', 'Klepu '),
(598, 'Sumbermanjing Wetan', 'Ringinkembar '),
(599, 'Sumbermanjing Wetan', 'Ringinsari '),
(600, 'Sumbermanjing Wetan', 'Sekarbanyu '),
(601, 'Sumbermanjing Wetan', 'Sidoasri '),
(602, 'Sumbermanjing Wetan', 'Sitiarjo '),
(603, 'Sumbermanjing Wetan', 'Sumberagung '),
(604, 'Sumbermanjing Wetan', 'Sumbermanjing Wetan'),
(605, 'Sumbermanjing Wetan', 'Tambak Asri'),
(606, 'Sumbermanjing Wetan', 'Tambakrejo '),
(607, 'Sumbermanjing Wetan', 'Tegalrejo '),
(608, 'Sumberpucung', 'Jatiguwi '),
(609, 'Sumberpucung', 'Karangkates '),
(610, 'Sumberpucung', 'Ngebruk '),
(611, 'Sumberpucung', 'Sambigede '),
(612, 'Sumberpucung', 'Senggreng '),
(613, 'Sumberpucung', 'Sumberpucung '),
(614, 'Sumberpucung', 'Ternyang '),
(615, 'Sumberpucung', 'Jatiguwi '),
(616, 'Sumberpucung', 'Karangkates '),
(617, 'Sumberpucung', 'Ngebruk '),
(618, 'Sumberpucung', 'Sambigede '),
(619, 'Sumberpucung', 'Senggreng '),
(620, 'Sumberpucung', 'Sumberpucung '),
(621, 'Sumberpucung', 'Ternyang '),
(622, 'Tajinan', 'Gunungronggo '),
(623, 'Tajinan', 'Gunungsari '),
(624, 'Tajinan', 'Jambearjo '),
(625, 'Tajinan', 'Jatisari '),
(626, 'Tajinan', 'Ngawonggo '),
(627, 'Tajinan', 'Pandanmulyo '),
(628, 'Tajinan', 'Purwosekar '),
(629, 'Tajinan', 'Randugading '),
(630, 'Tajinan', 'Sumbersuko '),
(631, 'Tajinan', 'Tajinan '),
(632, 'Tajinan', 'Tambakasri '),
(633, 'Tajinan', 'Tangkilsari '),
(634, 'Tajinan', 'Gunungronggo '),
(635, 'Tajinan', 'Gunungsari '),
(636, 'Tajinan', 'Jambearjo '),
(637, 'Tajinan', 'Jatisari '),
(638, 'Tajinan', 'Ngawonggo '),
(639, 'Tajinan', 'Pandanmulyo '),
(640, 'Tajinan', 'Purwosekar '),
(641, 'Tajinan', 'Randugading '),
(642, 'Tajinan', 'Sumbersuko '),
(643, 'Tajinan', 'Tajinan '),
(644, 'Tajinan', 'Tambakasri '),
(645, 'Tajinan', 'Tangkilsari '),
(646, 'Tirtoyudo', 'Gadungsari '),
(647, 'Tirtoyudo', 'Jogomulyan '),
(648, 'Tirtoyudo', 'Kepatihan '),
(649, 'Tirtoyudo', 'Pujiharjo '),
(650, 'Tirtoyudo', 'Purwodadi '),
(651, 'Tirtoyudo', 'Sukorejo '),
(652, 'Tirtoyudo', 'Sumbertangkil '),
(653, 'Tirtoyudo', 'Tamankuncaran '),
(654, 'Tirtoyudo', 'Tamansatriyan '),
(655, 'Tirtoyudo', 'Tirtoyudo '),
(656, 'Tirtoyudo', 'Tlogosari '),
(657, 'Tirtoyudo', 'Wonoagung '),
(658, 'Tirtoyudo', 'Ampelgading '),
(659, 'Tirtoyudo', 'Gadungsari '),
(660, 'Tirtoyudo', 'Jogomulyan '),
(661, 'Tirtoyudo', 'Kepatihan '),
(662, 'Tirtoyudo', 'Pujiharjo '),
(663, 'Tirtoyudo', 'Purwodadi '),
(664, 'Tirtoyudo', 'Sukorejo '),
(665, 'Tirtoyudo', 'Sumbertangkil '),
(666, 'Tirtoyudo', 'Tamankuncaran '),
(667, 'Tirtoyudo', 'Tamansatriyan '),
(668, 'Tirtoyudo', 'Tirtoyudo '),
(669, 'Tirtoyudo', 'Tlogosari '),
(670, 'Tirtoyudo', 'Wonoagung '),
(671, 'Tirtoyudo', 'Ampelgading '),
(672, 'Tumpang', 'Benjor '),
(673, 'Tumpang', 'Bokor '),
(674, 'Tumpang', 'Duwet '),
(675, 'Tumpang', 'Duwet Krajan'),
(676, 'Tumpang', 'Jeru '),
(677, 'Tumpang', 'Kambingan '),
(678, 'Tumpang', 'Kidal '),
(679, 'Tumpang', 'Malangsuko '),
(680, 'Tumpang', 'Ngingit '),
(681, 'Tumpang', 'Pandanajeng '),
(682, 'Tumpang', 'Pulungdowo '),
(683, 'Tumpang', 'Slamet '),
(684, 'Tumpang', 'Tulusbesar '),
(685, 'Tumpang', 'Tumpang '),
(686, 'Tumpang', 'Wringinsongo '),
(687, 'Tumpang', 'Benjor '),
(688, 'Tumpang', 'Bokor '),
(689, 'Tumpang', 'Duwet '),
(690, 'Tumpang', 'Duwet Krajan'),
(691, 'Tumpang', 'Jeru '),
(692, 'Tumpang', 'Kambingan '),
(693, 'Tumpang', 'Kidal '),
(694, 'Tumpang', 'Malangsuko '),
(695, 'Tumpang', 'Ngingit '),
(696, 'Tumpang', 'Pandanajeng '),
(697, 'Tumpang', 'Pulungdowo '),
(698, 'Tumpang', 'Slamet '),
(699, 'Tumpang', 'Tulusbesar '),
(700, 'Tumpang', 'Tumpang '),
(701, 'Tumpang', 'Wringinsongo '),
(702, 'Turen', 'Gedog Kulon '),
(703, 'Turen', 'Gedog Wetan'),
(704, 'Turen', 'Jeru '),
(705, 'Turen', 'Kedok '),
(706, 'Turen', 'Kemulan '),
(707, 'Turen', 'Pagedangan '),
(708, 'Turen', 'Sanankerto '),
(709, 'Turen', 'Sananrejo '),
(710, 'Turen', 'Sawahan '),
(711, 'Turen', 'Sedayu '),
(712, 'Turen', 'Talangsuko '),
(713, 'Turen', 'Talok '),
(714, 'Turen', 'Tanggung '),
(715, 'Turen', 'Tawangrejeni '),
(716, 'Turen', 'Tumpukrenteng '),
(717, 'Turen', 'Turen '),
(718, 'Turen', 'Undaan '),
(719, 'Turen', 'Gedog Kulon '),
(720, 'Turen', 'Gedog Wetan'),
(721, 'Turen', 'Jeru '),
(722, 'Turen', 'Kedok '),
(723, 'Turen', 'Kemulan '),
(724, 'Turen', 'Pagedangan '),
(725, 'Turen', 'Sanankerto '),
(726, 'Turen', 'Sananrejo '),
(727, 'Turen', 'Sawahan '),
(728, 'Turen', 'Sedayu '),
(729, 'Turen', 'Talangsuko '),
(730, 'Turen', 'Talok '),
(731, 'Turen', 'Tanggung '),
(732, 'Turen', 'Tawangrejeni '),
(733, 'Turen', 'Tumpukrenteng '),
(734, 'Turen', 'Turen '),
(735, 'Turen', 'Undaan '),
(736, 'Wagir', 'Dalisodo '),
(737, 'Wagir', 'Gondowangi '),
(738, 'Wagir', 'Jedong '),
(739, 'Wagir', 'Mendalanwangi '),
(740, 'Wagir', 'Pandanlandung '),
(741, 'Wagir', 'Pandanrejo '),
(742, 'Wagir', 'Parangargo '),
(743, 'Wagir', 'Petungsewu '),
(744, 'Wagir', 'Sidorahayu '),
(745, 'Wagir', 'Sitirejo '),
(746, 'Wagir', 'Sukodadi '),
(747, 'Wagir', 'Sumbersuko '),
(748, 'Wagir', 'Dalisodo '),
(749, 'Wagir', 'Gondowangi '),
(750, 'Wagir', 'Jedong '),
(751, 'Wagir', 'Mendalanwangi '),
(752, 'Wagir', 'Pandanlandung '),
(753, 'Wagir', 'Pandanrejo '),
(754, 'Wagir', 'Parangargo '),
(755, 'Wagir', 'Petungsewu '),
(756, 'Wagir', 'Sidorahayu '),
(757, 'Wagir', 'Sitirejo '),
(758, 'Wagir', 'Sukodadi '),
(759, 'Wagir', 'Sumbersuko '),
(760, 'Wajak', 'Bambang '),
(761, 'Wajak', 'Blayu '),
(762, 'Wajak', 'Bringin '),
(763, 'Wajak', 'Codo '),
(764, 'Wajak', 'Dadapan '),
(765, 'Wajak', 'Kidangbang'),
(766, 'Wajak', 'Ngembal '),
(767, 'Wajak', 'Patokpicis '),
(768, 'Wajak', 'Sukoanyar '),
(769, 'Wajak', 'Sukolilo '),
(770, 'Wajak', 'Sumberputih '),
(771, 'Wajak', 'Wajak '),
(772, 'Wajak', 'Wonoayu '),
(773, 'Wajak', 'Bambang '),
(774, 'Wajak', 'Blayu '),
(775, 'Wajak', 'Bringin '),
(776, 'Wajak', 'Codo '),
(777, 'Wajak', 'Dadapan '),
(778, 'Wajak', 'Kidangbang'),
(779, 'Wajak', 'Ngembal '),
(780, 'Wajak', 'Patokpicis '),
(781, 'Wajak', 'Sukoanyar '),
(782, 'Wajak', 'Sukolilo '),
(783, 'Wajak', 'Sumberputih '),
(784, 'Wajak', 'Wajak '),
(785, 'Wajak', 'Wonoayu '),
(786, 'Wonosari', 'Bangelan '),
(787, 'Wonosari', 'Kebobang '),
(788, 'Wonosari', 'Kluwut '),
(789, 'Wonosari', 'Plandi '),
(790, 'Wonosari', 'Plaosan '),
(791, 'Wonosari', 'Sumber Tempur'),
(792, 'Wonosari', 'Sumberdem '),
(793, 'Wonosari', 'Wonosari '),
(794, 'Wonosari', 'Bangelan '),
(795, 'Wonosari', 'Kebobang '),
(796, 'Wonosari', 'Kluwut '),
(797, 'Wonosari', 'Plandi '),
(798, 'Wonosari', 'Plaosan '),
(799, 'Wonosari', 'Sumber Tempur'),
(800, 'Wonosari', 'Sumberdem '),
(801, 'Wonosari', 'Wonosari ');

-- --------------------------------------------------------

--
-- Table structure for table `m_berita`
--

CREATE TABLE `m_berita` (
  `berita_id` int(10) UNSIGNED NOT NULL,
  `berita_judul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita_deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita_tgl` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita_autor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita_gambar` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_berita`
--

INSERT INTO `m_berita` (`berita_id`, `berita_judul`, `berita_deskripsi`, `berita_tgl`, `berita_autor`, `berita_gambar`, `created_at`, `updated_at`) VALUES
(1, 'PPKM Kota Malang Jilid 2 Akan Berakhir, Ini Pernyataan Wali Kota Malang Sutiaji   Artikel ini telah tayang di suryamalang.com', '<div>Pemberlakuan Pembatasan Kegiatan Masyarakat (PPKM) Jilid 2 di Kota Malang sesuai jadwal akan berakhir pada 8 Februari 2021. Kemudian muncul wacana, bahwa pemerintah pusat akan menggantinya dengan PPKM skala mikro. Terkait wacana itu, Walikota Malang, Sutiaji mengatakan pihaknya masih belum mendapatkan petunjuk lebih lanjut dari pemerintah pusat. \"Kami tunggu sampai ada informasi dari pusat,\" ujar Sutiaji, Minggu (7/2/2021). Menurut pria berkacamata ini, PPKM yang telah dilaksanakan dua kali di Kota Malang telah membuat kasus Covid 19 mulai mengalami penurunan. Hal itu terlihat dari persentase angka kesembuhan pasien Covid 19 yang meningkat. Di mana dari sebelumnya 82,7 persen, kini menjadi 84,4 persen. Lalu untuk angka positivity rate dari 32 persen, kini turun menjadi 27,4 persen. \"Kemudian angka kematian juga mengalami penurunan. Di mana dari sebelumnya 9,2 persen, kini menjadi 8,7 persen. Lalu untuk rate transmission atau penyebaran Covid 19 juga menurun. Sebelumnya 1,2 persen, dan saat ini menjadi 0 koma sekian,\" bebernya. Dan berdasarkan data tersebut, Sutiaji menuturkan bahwa penerapan PPKM dinilai efektif. Di mana dengan membatasi kegiatan masyarakat, ada hasil yang cukup memuaskan dalam penanganan Covid 19. \"Ada hasil yang cukup signifikan dari pelaksanaan PPKM dua kali. Untuk itu, kami meminta kesadaran masyarakat untuk tetap menerapkan protokol kesehatan, utamanya menggunakan masker dengan benar,\" jelasnya. Saat ini, lanjut Sutiaji, penerapan protokol kesehatan di Kota Malang sudah masuk 6M, yakni mencuci tangan menggunakan sabun dan air mengalir, menggunakan masker, menjaga jarak, mengurangi mobilitas, menghindari kerumunan, serta menjaga imun. \"Dan hal ini yang terus kami kuatkan (disiplin protokol kesehatan) agar bagaimana ekonomi tetap jalan dan kesehatan tetap terjaga. Sebab, kami belum tahu kapan Covid 19 akan berakhir,\" pungkasnya.</div><div><br></div><div><br></div><div><br></div><div><br></div>', '2021-02-07', 'Malang', 'berita.jpg', '2021-02-11 10:19:31', '2021-02-21 06:20:33'),
(4, 'Libur Panjang Imlek 2021, Satlantas Polres Malang Minta Warga Tetap di Rumah   Artikel ini telah tayang di suryamalang.com', '<h3 style=\"margin: 15px 0px; padding: 0px;\"><font face=\"Open Sans, Arial, sans-serif\"><span style=\"font-size: 14px;\">Satlantas Polres Malang meminta masyarakat berdiam diri di rumah untuk berkontribusi dalam pencegahan penularan Covid-19 pada masa libur panjang Imlek 2021.</span></font></h3><h3 style=\"margin: 15px 0px; padding: 0px;\"><font face=\"Open Sans, Arial, sans-serif\"><span style=\"font-size: 14px;\">\"Kami mengimbau masyarakat agar berdiam diri di rumah. Tujuannya untuk membantu pemerintah untuk memutus mata rantai Penyebaran Virus Covid-19 atau Corona,\" kata Kasatlantas Polres Malang, AKP Ady Nugroho ketika ditemui di Pos Polisi Karanglo pada Kamis (11/2/2021).</span></font></h3><h3 style=\"margin: 15px 0px; padding: 0px;\"><font face=\"Open Sans, Arial, sans-serif\"><span style=\"font-size: 14px;\">Ady tetap memprediksi terjadinya kemacetan lalu lintas bisa saja terjadi saat libur panjang Imlek.</span></font></h3><h3 style=\"margin: 15px 0px; padding: 0px;\"><font face=\"Open Sans, Arial, sans-serif\"><span style=\"font-size: 14px;\">Sebagai solusi, Ady menyerukan kepada petugas Satlantas Polres Malang agar berjaga di wilayah rawan terjadinya kemacetan. Terutama di wilayah Malang Utara.</span></font></h3><h3 style=\"margin: 15px 0px; padding: 0px;\"><font face=\"Open Sans, Arial, sans-serif\"><span style=\"font-size: 14px;\">Puncak kepadatan lalu lintas diprediksi terjadi pada Minggu (14/2/2021).</span></font></h3><h3 style=\"margin: 15px 0px; padding: 0px;\"><font face=\"Open Sans, Arial, sans-serif\"><span style=\"font-size: 14px;\">\"Jalanan sepanjang menuju Kota Malang dan Kota Batu rawan terjadi kemacetan,\" beber Ady.</span></font></h3><h3 style=\"margin: 15px 0px; padding: 0px;\"><font face=\"Open Sans, Arial, sans-serif\"><span style=\"font-size: 14px;\">Mantan Kasatlantas Polresta Malang Kota ini menerangkan, terdapat 4 titik rawan kemacetan di Kabupaten Malang saat libur Imlek tahun ini, yakni di Pasar Singosari, Kepuharjo, Simpang Tiga Karanglo, Simpang Tiga Karangploso dan Pasar Lawang.</span></font></h3><h3 style=\"margin: 15px 0px; padding: 0px;\"><font face=\"Open Sans, Arial, sans-serif\"><span style=\"font-size: 14px;\">Sebagai persiapan, Satlantas Polres Malang telah menyediakan&nbsp; Rambu Pendahulu Petunjuk Jurusan (RPPJ) untuk dipasang jelang libur panjang.</span></font></h3><h3 style=\"margin: 15px 0px; padding: 0px;\"><font face=\"Open Sans, Arial, sans-serif\"><span style=\"font-size: 14px;\">\"Kami akan memasangnya apabila di titik itu nantinya terjadi kemacetan. Petugas kami juga turun lapangan untuk mengurai arus lalulintas,\" beber Ady.</span></font></h3><h3 style=\"margin: 15px 0px; padding: 0px;\"><font face=\"Open Sans, Arial, sans-serif\"><span style=\"font-size: 14px;\">Ady juga menuturkan jika pihaknya telah menyiapkan skema pengaturan lalu lintas bila terjadi kepadatan.</span></font></h3><h3 style=\"margin: 15px 0px; padding: 0px;\"><font face=\"Open Sans, Arial, sans-serif\"><span style=\"font-size: 14px;\">\"Petugas kami akan mengalihkan arus lalu lintas sehingga bisa mengatasi kemacetan,\" terangnya.</span></font></h3><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><br></h3>', '2021-02-11', 'Malang', 'berita 1.jpg', '2021-02-21 04:35:17', '2021-02-21 06:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `m_cinderamata`
--

CREATE TABLE `m_cinderamata` (
  `id` int(10) UNSIGNED NOT NULL,
  `wisata` int(10) UNSIGNED NOT NULL,
  `nama_cinderamata` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_cinderamata`
--

INSERT INTO `m_cinderamata` (`id`, `wisata`, `nama_cinderamata`, `deskripsi`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(6, 3, 'Gelang', '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>', 12, 'Ijo bg.png', '2021-02-15 18:54:49', '2021-02-15 18:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `m_detail_wisata`
--

CREATE TABLE `m_detail_wisata` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_wisata` int(10) UNSIGNED NOT NULL,
  `nama_wisata` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_event`
--

CREATE TABLE `m_event` (
  `event_id` int(10) UNSIGNED NOT NULL,
  `event_judul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_penyelenggara` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_tgl` datetime NOT NULL,
  `event_deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_tag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_gambar` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_event`
--

INSERT INTO `m_event` (`event_id`, `event_judul`, `event_penyelenggara`, `event_tgl`, `event_deskripsi`, `event_tag`, `event_gambar`, `created_at`, `updated_at`) VALUES
(1, 'GIS2FEST 2021 “Wizard”', 'Sekolah Global Islamic School 2', '2021-02-16 00:00:00', '<p style=\"margin-top: 15px; margin-bottom: 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\">GIS2FEST adalah acara tahunan yang diselenggarakan oleh sekolah Global Islamic School 2, event ini menunjukan minat dan bakat siswa &amp; siswi melalui perlombaan dan pentas seni serta sebagai sosialisasi pelajar antar sekolah, dimana event ini memiliki ciri khas tersendiri yaitu terdiri dari 4 pillar kekhasan GIS, yaitu keislaman, keglobalan, kepemimpinan, dan akademik.</p><p style=\"margin-top: 15px; margin-bottom: 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\">Empat pillar tersebut tertuang dalam kegiatan berupa, Perlombaan dan Pertandingan, Talkshow, Edu-Fair dan Closing / Pentas Seni.</p>', '#kompetisi #seminar #talkshow', 'event.jpg', '2021-02-11 02:32:40', '2021-02-23 17:36:34'),
(3, 'Festival Kampung Pecinan 2021', 'FKP_2021', '2021-05-08 00:00:00', '<p style=\"margin-top: 15px; margin-bottom: 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\">Festival Kampung Pecinan 2021 Proudly Present</p><p style=\"margin-top: 15px; margin-bottom: 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\">Exploring Chinese Culture in the New Way</p><p style=\"margin-top: 15px; margin-bottom: 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\">Acara yang bertemakan menjelajahi budaya China dengan cara baru, Ada banyak sekali acara dan Lomba yang menarik di dalamnya. Acaranya Mulai dari talkshow,barongsai,wushu dll. Acaranya dilakukan secara online via zoom dan youtube, Selain itu Lombanya Sangat bermacam-macam dan menarik.</p><p style=\"margin-top: 15px; margin-bottom: 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\">Buruan Join berbagai lomba dari kegiatan acara Festival Kampung Pecinan 2021 ini!! Pemenang akan mendapatkan Uang tunai dan Sertifikat💵🧾</p><p style=\"margin-top: 15px; margin-bottom: 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\">Pengumuman Pemenang akan diberitahukan</p>', '#Kompetisi #Live Show #Talkshow', 'event 1.jpg', '2021-02-21 06:04:57', '2021-02-21 06:04:57'),
(4, 'Harta, Tahta, Cerita', 'Detik.com', '2021-02-07 00:00:00', '<p style=\"margin-top: 15px; margin-bottom: 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\">Cerita ke @detikcom Malah Dikasih Hadiah Hingga Jutaan Rupiah. Mau?⁣</p><p style=\"margin-top: 15px; margin-bottom: 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\">Kamu bebas menceritakan kisah menarik bisa berupa perjuangan cinta, karir, ataupun cerita hidup lho. Cerita paling menarik akan dipilih untuk dibacakan oleh sederet publik figur hingga tokoh kenamaan Indonesia.⁣</p><p style=\"margin-top: 15px; margin-bottom: 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\">Nggak hanya itu, detikers juga berkesempatan mendapatkan Harta senilai total 5 Juta Rupiah untuk 5 pemenang serta akan diberi Tahta oleh para Publik Figur. Penasaran?</p><p style=\"margin-top: 15px; margin-bottom: 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\">Yuk cek selengkapnya hanya di detik.com/hartatahtacerita</p>', '#Kompetisi', 'event 2.jpg', '2021-02-21 06:10:27', '2021-02-21 06:10:27');

-- --------------------------------------------------------

--
-- Table structure for table `m_fasilitas`
--

CREATE TABLE `m_fasilitas` (
  `id` int(10) UNSIGNED NOT NULL,
  `wisata` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `farwis_1` varchar(115) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_fasilitas`
--

INSERT INTO `m_fasilitas` (`id`, `wisata`, `farwis_1`, `created_at`, `updated_at`) VALUES
(27, NULL, '1,3', NULL, NULL),
(28, NULL, '9,10,11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_kategori`
--

CREATE TABLE `m_kategori` (
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `kategori_nama` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_icon` varchar(115) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_kategori`
--

INSERT INTO `m_kategori` (`kategori_id`, `kategori_nama`, `kategori_icon`, `created_at`, `updated_at`) VALUES
(1, 'Sejarah', NULL, '2021-02-11 02:34:07', '2021-02-20 22:08:09'),
(2, 'Religi', NULL, '2021-02-11 02:34:16', '2021-02-20 22:07:48'),
(3, 'Bahari', NULL, '2021-02-11 02:34:31', '2021-02-20 22:08:29'),
(5, 'Alam', NULL, '2021-02-20 22:07:25', '2021-02-20 22:07:25'),
(6, 'Pertanian', NULL, '2021-02-20 22:09:43', '2021-02-20 22:09:43'),
(7, 'Budaya', NULL, '2021-02-20 22:10:05', '2021-02-20 22:10:05'),
(8, 'Pendidikan', NULL, '2021-02-20 22:10:24', '2021-02-20 22:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `m_kontak`
--

CREATE TABLE `m_kontak` (
  `kontak_id` int(10) UNSIGNED NOT NULL,
  `latitude` varchar(65) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(65) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak_deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_kontak`
--

INSERT INTO `m_kontak` (`kontak_id`, `latitude`, `longitude`, `kontak_deskripsi`, `created_at`, `updated_at`) VALUES
(1, '121', 'asa212', '<p>asasas</p>', '2021-02-17 02:46:48', '2021-02-17 02:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `m_kuliner`
--

CREATE TABLE `m_kuliner` (
  `id` int(10) UNSIGNED NOT NULL,
  `wisata` int(10) UNSIGNED NOT NULL,
  `nama_kuliner` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_kuliner`
--

INSERT INTO `m_kuliner` (`id`, `wisata`, `nama_kuliner`, `deskripsi`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(3, 3, 'nasi', '<p>asasa</p>', 30000, 'Ijo bg.png', '2021-02-15 18:55:57', '2021-02-15 18:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `m_pendapatan`
--

CREATE TABLE `m_pendapatan` (
  `pendapatan_id` int(10) UNSIGNED NOT NULL,
  `tahun` varchar(65) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wst_lokal` varchar(65) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wst_intl` varchar(165) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendapatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_pendapatan`
--

INSERT INTO `m_pendapatan` (`pendapatan_id`, `tahun`, `wst_lokal`, `wst_intl`, `pendapatan`, `created_at`, `updated_at`) VALUES
(1, '2021', '12000000', '10000000', '1800000000', '2021-02-12 02:27:57', '2021-02-12 02:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `m_verifikasi`
--

CREATE TABLE `m_verifikasi` (
  `id` int(11) NOT NULL,
  `wisata` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_verifikasi`
--

INSERT INTO `m_verifikasi` (`id`, `wisata`, `user`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, '2021-02-15 09:44:46', '2021-02-15 13:33:03'),
(5, 3, 1, NULL, '2021-02-15 10:28:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_wahana`
--

CREATE TABLE `m_wahana` (
  `id` int(10) UNSIGNED NOT NULL,
  `wisata` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_wahana`
--

INSERT INTO `m_wahana` (`id`, `wisata`, `created_at`, `updated_at`) VALUES
(45, 11, '2021-02-16 08:08:29', '2021-02-16 08:08:29'),
(46, 3, '2021-02-16 08:16:53', '2021-02-16 08:16:53'),
(47, 11, '2021-02-16 08:19:21', '2021-02-16 08:19:21'),
(48, 3, '2021-02-16 08:20:18', '2021-02-16 08:20:18'),
(49, 11, '2021-02-16 08:23:23', '2021-02-16 08:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `m_wahana_detail`
--

CREATE TABLE `m_wahana_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wahana_id` int(11) NOT NULL,
  `nama_wahana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_wahana` int(255) DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_wahana_detail`
--

INSERT INTO `m_wahana_detail` (`id`, `wahana_id`, `nama_wahana`, `gambar`, `harga_wahana`, `deskripsi`, `created_at`, `updated_at`) VALUES
(19, 45, 'aaa', NULL, 5000, 'aaa', '2021-02-16 08:08:29', '2021-02-16 08:08:29'),
(20, 45, 'bbb', NULL, 4000, 'bbb', '2021-02-16 08:08:29', '2021-02-16 08:08:29'),
(21, 45, 'ccc', NULL, 3000, 'ccc', '2021-02-16 08:08:29', '2021-02-16 08:08:29'),
(22, 46, 'aaa', NULL, NULL, 'asas', '2021-02-16 08:16:53', '2021-02-16 08:16:53'),
(23, 47, 'aaa', NULL, NULL, 'aaa', '2021-02-16 08:19:21', '2021-02-16 08:19:21'),
(24, 48, 'aaa', NULL, NULL, 'ccc', '2021-02-16 08:20:18', '2021-02-16 08:20:18'),
(25, 49, 'ccc', NULL, NULL, 'ccc', '2021-02-16 08:23:23', '2021-02-16 08:23:23'),
(26, 49, 'ccc', NULL, NULL, '12212', '2021-02-16 08:23:23', '2021-02-16 08:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `m_wisata`
--

CREATE TABLE `m_wisata` (
  `wisata_id` int(10) UNSIGNED NOT NULL,
  `kategori` int(10) UNSIGNED NOT NULL,
  `url_video` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wisata_tag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `htm_lokal` int(115) NOT NULL,
  `htm_intl` int(115) NOT NULL,
  `latitude` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_wisata`
--

INSERT INTO `m_wisata` (`wisata_id`, `kategori`, `url_video`, `nama`, `deskripsi`, `wisata_tag`, `htm_lokal`, `htm_intl`, `latitude`, `longitude`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(3, 8, 'http://www.museumindonesia.com/museum/50/1/Museum_Brawijaya_Malang', 'Brawijaya Museum', '<p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\"><strong>SEJARAH BERDIRINYA</strong><br>Usaha untuk pendirian Museum Brawijaya telah dilakukan sejak tahun 1962 oleh Brigjend TNI (Purn) Soerachman (mantan Pangdam VIII/Brawijaya tahun 1959-1962). Pembangunan gedung museum kemudian mendapat dukungan pemerintah daerah kotamadya Malang dengan penyediaan lokasi tanah seluas 10.500 meter persegi, dan dukungan biaya dari Sdr.Martha, pemilik hotel di Tretes Pandaan. Arsitek museum adalah Kapten Czi Ir.Soemadi. Museum dibangun pada tahun 1967 dan selesai 1968.</span></p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\"><br></span></p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Nama Museum Brawijaya ditetapkan berdasarkan keputusan Pangdam VIII/Brawijaya tanggal 16 April 1968 dengan sesanti (wejangan) \'Citra Uthapana Cakra\' yang berarti sinar (citra) yang membangkitkan (uthapana) semangat/kekuatan (cakra). Sedangkan museum diresmikan pada tanggal 4 Mei 1968.</span></p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">&nbsp;</p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\"><strong>PERANAN MUSEUM BRAWIJAYA</strong><br></span></p><ol style=\"font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Sebagai media pendidikan</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Sebagai tempat rekreasi</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Sebagai tempat penelitian ilmiah</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Sebagai tempat pembinaan mental kejuangan dan pewarisan nilai-nilai \'45 dan TNI \'45 bagi prajurit TNI dan masyarakat umum</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Sebagai tempat pembinaan mental kejuangan dalam rangka pembinaan wilayah</span></li></ol><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">&nbsp;</p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\"><strong>BENDA KOLEKSI MUSEUM BRAWIJAYA</strong><br><strong>Halaman Depan</strong><br>Halaman depan Museum Brawijaya adalah taman senjata bernama \'Agne Yastra Loka\'. Diartikan secara bebas sebagai tempat/taman (loka) senjata (yastra) yang diperoleh dari api (agne) Revolusi 1945.</span></p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">&nbsp;</p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Adapun benda-benda yang dipamerkan adalah sebagai berikut:<br></span></p><ol style=\"font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Tank buatan Jepang hasil rampasan arek-arek Suroboyo pada bulan Oktober 1945. Selanjutnya oleh rakyat Surabaya tank ini dipakai untuk melawan sekutu dalam perang 10 November 1945.</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Senjata Penangkis Serangan Udara (PSU). dikenal dengan Pompom Double Loop direbut oleh pemuda BKR dari tentara Jepang dalam suatu pertempuran pada bulan September 1945. Kemudian dipergunakan oleh BKR dalam rangka mempertahankan kemerdekaan baik dari serangan tentara sekutu maupun tentara Belanda yang ingin kembali menjajah Indonesia. Dalam pertempuran di barat Bangkalan senjata tersebut berhasil menembak jatuh dua pesawat tempur Belanda.</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Meriam 3,7 Inch (Si Buang), dirampas dari Belanda dalam serangan 10 Desember 1945 yang dilancarkan pasukan TKR dan laskar pejuang lainnya terhadap kedudukan tentara Belanda di pos pantai Desa Betering. Dalam pertempuran sengit yang berlangsung hampir 6 jam tersebut, gugur seorang prajurit TKR bernama Kopral Buang. Untuk mengenang jasa-jasa prajurit tersebut kemudian meriam ini diberi nama \'Si Buang\'.</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Tank Amfibi AM Track pernah digunakan oleh tentara Belanda yang hendak menduduki kota Malang pada masa Perang Kemerdekaan I. Namun usaha ini mendapat perlawanan sengit di Jalan Salak dan sekitar lapangan pacuan kuda antara tentara Belanda yang mempunyai persenjataan lengkap dengan pasukan TRIP yang senjatanya sangat minim dan terbatas sehingga mengakibatkan 35 orang anggota pasukan TRIP gugur. Jenazah dimakamkan dalam kuburan massal sebelah utara ujung timur Jalan Salak dan tempat ini sekarang dikenal sebagai Taman Makam Pahlawan TRIP Malang.</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Patung Jenderal Sudirman, dimaksudkan untuk mengabadikan dan mengenang jasa-jasa Panglima Besar Jenderal Sudirman.<br></span></li></ol><p class=\"p1\" style=\"padding: 0px; margin-top: 15px; margin-right: 15px; margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; font-family: Arial, Helvetica, sans-serif; color: rgb(69, 69, 69);\">&nbsp;</p><p class=\"p1\" style=\"padding: 0px; margin-top: 15px; margin-right: 15px; margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; font-family: Arial, Helvetica, sans-serif; color: rgb(69, 69, 69);\"><strong>Ruang Lobi</strong><br>Ruang ini terletak di antara Ruang Koleksi I dan Ruang Koleksi II. Di ruang ini terdapat dua relief dan dua perangkat lambang-lambang kodam di Indonesia.</p><ol style=\"font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Relief sebelah selatan melukiskan wilayah kekuasaan Majapahit, juga dipahatkan perahu Hongi yang menggambarkan bahwa Majapahit memiliki armada laut yang kuat sehingga berhasil mempersatukan Nusantara, serta pahatan Raden Wijaya dalam bentuk Harihara.</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Relief sebelah utara menunjukkan daerah-daerah tugas yang pernah dijalani oleh pasukan Brawijya dalam rangka menegakkan kemerdekaan; menumpas gerakan separatis dan gerombolan pengacau keamanan; serta tugas internasional sebagai pasukan perdamaian dan keamanan PBB di luar negeri.</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Lambang-lambang Kodam/Kotama TNI AD di Indonesia.</span></li></ol><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">&nbsp;</p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\"><strong>Halaman Tengah</strong><br>Dua koleksi di halaman tengah adalah Gerbong Maut dan Perahu Segigir.</span></p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">&nbsp;</p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\"><strong>Ruang Koleksi I</strong><br>Memamerkan benda-benda koleksi dari tahun 1945-1949. Koleksi yang dipamerkan sebagai berikut,<br></span></p><ol style=\"font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Foto-foto Panglima Kodam di Jawa Timur sejak 1945 sampai sekarang</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Lukisan pakaian seragam PETA, HEIHO, dan pejuang</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Lukisan Pamen, Pama, Bintara, dan Tamtama prajurit PETA</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Burung merpati pos yang pernah digunakan sebagai kurir di daerah Komando Ronggolawe, Lamongan/Bojonegoro dengan front Surabaya pada tahun 1946</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Termos dibuat dari tempurung kelapa yang pernah digunakan oleh tentara PETA pada masa penjajahan Jepang</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Pedang samurai sebagai kelengkapan perwira Jepang yang berhasil direbut TKR dari tentara Jepang di perkebunan Ngrakah, Sepanon, Kabupaten Kediri</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Meja kursi yang digunakan untuk perundingan penghentian tembak-menembak (gencatan senjata) antara TKR/pejuang dengan Sekutu di Surabaya pada tanggal 29 Oktober 1945. Pihak Indonesia diwakili oleh Bung Karno, sedangkan pihak Sekutu diwakili oleh Mayjen Havtorn dan Brigjen Mallaby</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Senjata buatan pabrik senjata Mrican, Kediri tahun 1945-1946</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Alat perhubungan atau radio yang pernah digunakan oleh Denhub Brawijaya pada tahun 1945-1946</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Lukisan pertempuran Surabaya sekitar 10 November 1945</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Senjata-senjata hasil rampasan</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Peta pendudukan musuh dan kantong-kantong gerilya serta garis pertahanan TKR</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Peta Perang Kemerdekaan I (21 Juli 1947)</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Peta Perang Kemerdekaan II (19 Desember 1948)</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Peralatan yang pernah dipakai Jenderal Sudirman saat memimpin gerilya di Desa Loceret, Bajulan, Nganjuk</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Peta rute gerilya Panglima Besar Jenderal Sudirman</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Alat-alat kesehatan yang pernah digunakan dr.Harjono yang gugur menghadapi Belanda dalam pertempuran di Krian, Mojokerto pada tahun 1948</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Pakaian dan mantel Letkol dr.Soebandi, dokter Brigade III/Damarwulam merangkap Resimen Militer Jember<br></span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Peralatan yang pernah digunakan Kapten Soemitro dalam Perang Kemerdekaan di Nongkojajar, Pasuruan pada tahun 1948</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Lukisan Jenderal Sudirman mengadakan inspeksi pasukan di Malang dalam rangka persiapan pemulangan tawanan perang Jepang</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Lukisan pertempuran terbunuhnya Brigjen AWS Mallaby di depan Gedung Internatio, Jembatan Merah, Surabaya pada tanggal 30 Oktober 1945</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Lukisan pertempuran di depan Gedung Kempetai (markas tentara Jepang); tempat ini sekarang didirikan Tugu Pahlawan</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Lukisan pemberangkatan tawanan Jepang di Stasiun KA Malang selatan (Stasiun Kota Lama) pada tahun 1945</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Lukisan pemberangkatan tawanan Jepang ke Pelabuhan Probolinggo menuju Pulau Galang pada tahun 1945</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Lukisan serah terima samurai dari Brigjen Wabe Sigewa kepada Jenderal Sudirman pada tanggal 28 April 1946 Malang</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Mata uang yang pernah berlaku di Indonesia pada masa revolusi</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Senjata peninggalan TRIP yang pernah dipakai dalam pertempuran di Gunungsari tanggal 28 November 1945</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Mobil sedan keluaran pabrik Desoto USA tahun 1941 yang pernah digunakan Kolonel Sungkono, Panglima Divisi I/Jawa Timur 1948</span></li><li><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Panji-panji/lambang-lambang satuan yang pernah digunakan oleh kesatuan-kesatuan Kodam VIII/Brawijaya pada tahun 1945</span></li></ol><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">&nbsp;</p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><strong></strong><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\"><br></span></strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\"><strong>RUANG KOLEKSI II</strong></span><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\"><br>Memamerkan benda-benda koleksi dari tahun 1950-1976. Koleksi yang dipamerkan adalah,</span></strong></p><ol style=\"font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Peta kota Malang dan perkembangannya</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Foto-foto burgemester dan walikota Malang dari zaman pemerintahan Belanda sampai sekarang</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Meriam dan bejana besi<br></span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Senjata rampasan dari PRRI/Permesta</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Komputer pertama yang digunakan oleh Jawatan Keuangan, Kodam VIII/Brawijaya</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Maket patung Raden Wijaya sebagai Prabu Brawijaya</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Teks Sapta Marga dan Sumpah Prajurit dari marmer</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Peta penugasan pasukan Brawijaya</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Alat musik yang dipernah digunakan oleh Detasemen Musik Kodam V/Brawijaya</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Peralatan perang yang pernah digunakan pasukan Brawijaya untuk merebut Irian Barat pada Operasi Trikora tanggal 19 Desember 1961</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Peralatan tradisional rakyat Irian Jaya</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Lukisan timbul Mayjen Soeharto sebagai Panglima Mandala dalam rangka merebut kembali Irian Barat</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Atribut Kapten dr.Arjoko dari Jawatan Kesehatan Kodam VIII/Brawijaya yang gugur di Irian Jaya pada bulan Maret 1964 akibat pesawat udara yang ditumpanginya jatuh di Ganyem, Irian Jaya</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Bendera Katanga<br></span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Pakaian seragam tentara Papua buatan Belanda</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Meja dan lilin yang pernah digunakan sesepuh Brawijaya untuk asas pembinaan keluarga besar Brawijaya pada tahun 1966 di Candi Panataran</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Peralatan topografi yang pernah digunakan oleh Brigade Topografi Angkatan Darat pada tahun 1945</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Senjata-senjata hasil rampasan Operasi Trisula dalam rangka penumpasan sisa-sisa komunis di Blitar Selatan tahun 1968</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Senjata-senjata hasil rampasan Operasi Seroja di Timor Timur oleh pasukan Brawijaya tahun 1975-1976</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Album nama prajurit Brigif 2 Dharma Yudha yang gugur dalam Operasi Seroja</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Bendera Portugal hasil rampasan Brigif Linud 18 pada Operasi Seroja 1975</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Mata uang Jepang yang beredar di Indonesia</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Patung burung elang merupakan lambang satuan Brigif 10 yang dilikuidasi pada tahun 1975</span></strong></li><li><strong><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Piala dan tanda penghargaan dari satuan Kodam Brawijaya yang dilikuidasi</span></strong></li></ol><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">&nbsp;</p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">&nbsp;</p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\"><strong>Perpustakaan</strong><br>Perpustakaan Museum Brawijaya merupakan tempat untuk mengoleksi buku-buku dan dokumen-dokumen sejarah perjuangan TNI, karya-karya umum, dan referensi yang terkait dengan pengabdian terhadap Negara Kesatuan Republik Indonesia.</span></p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">&nbsp;</p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\">Sumber: Buku panduan \'Sekilas Mengenal Museum Brawijaya\' (Malang, 2008)</span></p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">&nbsp;</p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\"><strong>Alamat:</strong><br>MUSEUM BRAWIJAYA<br>Jl. Ijen<br>Malang<br>Jawa Timur</span></p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\"><br></span></p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\"><strong>Jam Kunjungan:</strong><br>Senin-Kamis 08.00-14.30<br>Jumat 08.00-11.30<br>Sabtu-Minggu 08.00-13.00</span></p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\"><br></span></p><p style=\"padding: 0px; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><span class=\"p1\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 13px; line-height: 1.6em; color: rgb(69, 69, 69); margin: 15px 15px 0px 0px;\"><strong>Tiket:</strong><br>Rp --</span></p>', 'Pendidikan', 1212, 1212, '-7.97178006480098', '112.62130992780762', 'museum.jpg', 1, '2021-02-11 19:58:16', '2021-02-23 19:06:52'),
(11, 6, 'http://kominfo.jatimprov.go.id/read/umum/desa-wisata-pertanian-dawuhan-malang-gaet-petani-milenial', 'Desa Wisata Pertanian Dawuhan', '<p style=\"color: rgb(51, 51, 51); font-size: 13px; line-height: 24px; text-align: justify; font-family: &quot;Open Sans&quot;, sans-serif;\"><em>Desa Wisata Pertanian yang dirintis oleh masyarakat&nbsp;Dusun Dawuhan Desa Jatirejoyoso Kecamatan Kepanjen Kabupaten Malang. Foto Istimewa</em></p><p style=\"color: rgb(51, 51, 51); font-size: 13px; line-height: 24px; text-align: justify; font-family: &quot;Open Sans&quot;, sans-serif;\"></p><p style=\"color: rgb(51, 51, 51); font-size: 13px; line-height: 24px; text-align: justify; font-family: &quot;Open Sans&quot;, sans-serif;\"></p><p style=\"color: rgb(51, 51, 51); font-size: 13px; line-height: 24px; text-align: justify; font-family: &quot;Open Sans&quot;, sans-serif;\"><strong>Jatim Newsroom-&nbsp;</strong>Inovasi perlu terus dilakukan untuk menggaet kalangan milenial di masa sekarang. Salah satunya adalah dengan membuat Desa Wisata Pertanian yang kini dirintis oleh masyarakat&nbsp;Dusun Dawuhan Desa Jatirejoyoso Kecamatan Kepanjen Kabupaten Malang.</p><p style=\"color: rgb(51, 51, 51); font-size: 13px; line-height: 24px; text-align: justify; font-family: &quot;Open Sans&quot;, sans-serif;\">\"Konsep Desa Wisata Pertanian ini merupakan&nbsp;pengembangan sejak tahun 2017 yang mengembangkan Wisata Edukasi tanaman Refugia sebagai tanaman tempat hidup musuh alami hama Wereng Batang Coklat (WBC),\" ungkap Ketua&nbsp;Kelompok Sadar Wisata (PokDarWis), Moh Arifin, Senin (11/1).</p><p style=\"color: rgb(51, 51, 51); font-size: 13px; line-height: 24px; text-align: justify; font-family: &quot;Open Sans&quot;, sans-serif;\"><span lang=\"EN-US\">Pada saat itu, terjadi serangan hama WBC sehingga perlu dilakukan pengendalian secara kimia dan alami agar kedepan penggunaan bahan kimia dapat dikurangi dan ditekan. \"Akhirnya kami berinovasi dan bekerjasama dengan&nbsp;</span>kelompoktani Sumber Rejeki yang diketuai M. Fatkan untuk menjadikannya berkelanjutan menjadi Desa Wisata Pertanian Dawuhan,\" bebernya.</p><p style=\"color: rgb(51, 51, 51); font-size: 13px; line-height: 24px; text-align: justify; font-family: &quot;Open Sans&quot;, sans-serif;\">Upaya ini juga didukung oleh&nbsp;Pemerintah Desa melalui Kades Didit Mulyo serta UPT Balai Penyuluhan Pertanian Kepanjen Yusuf Sugiarto hingga Mantri Tani Dwi Pujiwati hingga penyuluh pertanian wilayah Jatirejoyoso Ida Setyoningsih dan Rini Ilham M.&nbsp;\"Pemerintah desa sangat penting dalam mendukung dan menjalankan program dan kegiatan pengembangan desa wisata hingga memberikan modal,\" tambahnya.&nbsp;</p><p style=\"color: rgb(51, 51, 51); font-size: 13px; line-height: 24px; text-align: justify; font-family: &quot;Open Sans&quot;, sans-serif;\">Sementara itu,&nbsp;Penyuluh Pertanian Ida Setyoningsih tetap dalam tugasnya mendampingi kelompoktani dan petani dalam meningkatkan produktivitas budidaya pertaniannya serta tetap menjaga kelestarian dan kelanjutan lahan pertaniannya melalui pertemuan rutin kelompok yang diadakan.</p><p style=\"color: rgb(51, 51, 51); font-size: 13px; line-height: 24px; text-align: justify; font-family: &quot;Open Sans&quot;, sans-serif;\"><span lang=\"EN-US\">Di awal Tahun 2021 ini, Poktan dan Pokdarwis sudah dapat mengembangkan sarana pendukung Desa Wisata Pertanian ini sambil tetap menjaga kelestarian dan potensi pertaniannya. Beberapa bentuk perhatian salah satunya dari Dinas Pariwisata Provinsi Jawa Timur dengan memberikan bantuan dana sebesar 50 juta melalui Badan Usaha Milik Desa (BUMDES) yang diketuai M Eko Nur Salam dan dimanfaatkan umtuk membuat kolam anak-anak.</span></p><p style=\"color: rgb(51, 51, 51); font-size: 13px; line-height: 24px; text-align: justify; font-family: &quot;Open Sans&quot;, sans-serif;\"><span lang=\"EN-US\">Selain itu melalui Penyuluh Pertaniannya dikembangkan Tanaman Buah Dalam Pot (TABULAMPOT) yang bekerjasama dengan Universitas Negeri Malang (UM) dan adanya pemeliharan jalan usaha tani dan gazebo yang ada di sepanjang lahan pertanian. Dengan adanya desa wisata di dusun Dawuhan ini, maka masih banyak hal yang harus disempurnakan dan dibenahi. Adanya inovasi dari lembaga atau mitra kerja yang mendukung maka akan dapat menjadi daya tarik bagi masyarakat untuk mengenal dunia pertanian.</span></p><p style=\"color: rgb(51, 51, 51); font-size: 13px; line-height: 24px; text-align: justify; font-family: &quot;Open Sans&quot;, sans-serif;\"><span lang=\"EN-US\">Diharapkan pengembangan Desa Wisata ini dapat memberikan Manfaat berupa Pemberdayan masyarakat, membuka dan menciptakan lapangan kerja baru bagi masyarakat desa serta memunculkan usaha baru disekitar wisata; Meningkatkan pendapatan, melalui program-program desa yang dikembangkan maka pendapatan diluar usaha bertani bagi petani itu sendiri meningkat dan masyarakat sekitar dengan membuka kios/warung dan diharapkan nenumbuhkan kreativitas bagi masyarakat; membuka wawasan baru, salah satu nya mengubah perilaku generasi muda nya untuk berfikir kritis dalam mengembangkan pertanian didesa nya secara umum tanpa meninggalkan dan menggunakan teknologi bagi kemajuan Desa Wisata ini. (jal)</span></p>', 'Pertanian', 12000, 120000, '-8.084721139603117', '112.76480066964878', 'sawah.jpg', 1, '2021-02-16 07:22:47', '2021-02-23 18:56:23'),
(12, 5, 'https://explorewisata.com/2017/01/coban-rais-batu.html', 'Coban Rais', '<h2 style=\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\"><p style=\"font-family: Barlow; font-size: 17px; line-height: 1.6; color: rgb(74, 85, 104); overflow-wrap: break-word; margin-bottom: 20px;\"><span style=\"font-weight: 700;\">Coban Rais</span>&nbsp;identik dengan air terjunnya yang jatuh dari sela-sela bebatuan padas setinggi 70 meter. Air terjun ini berada di lereng Gunung Panderman dengan ketinggian sekitar 1.150 mdpl. Berlokasi di Desa Oro-oro Ombo, Kota Batu, sekitar 25 km dari Kota Malang.</p><p style=\"font-family: Barlow; font-size: 17px; line-height: 1.6; color: rgb(74, 85, 104); overflow-wrap: break-word; margin-bottom: 20px;\">Air Terjun ini menawarkan panorama pegunungan dan udara yang sejuk alami. Sebelumnya, tempat ini bernama Coban Sabrangan yang berarti jika hendak ke air terjun ini harus menyebrangi 14 sungai. Wisata ini telah dikembangkan dan dilengkapi dengan berbagai wahana seru dan menarik.</p></h2>', 'Alam', 10000, 249996, '-7.911348599643247', '112.52074148362775', 'coban.jpg', 1, '2021-02-20 22:13:31', '2021-02-23 19:25:40'),
(13, 3, 'https://blogkulo.com/pantai-teluk-asmara-asmoro/', 'Pantai Teluk Asmara', '<h2 style=\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\"><p style=\"margin-bottom: 24px; color: rgb(68, 68, 68); font-family: &quot;Roboto Condensed&quot;; font-size: 18px; text-align: justify;\">Bagi Anda penyuka wisata pantai yang saat ini berada di kawasan Malang Raya, mungkin ada baiknya memperpanjang durasi wisata.</p><p style=\"margin-bottom: 24px; color: rgb(68, 68, 68); font-family: &quot;Roboto Condensed&quot;; font-size: 18px; text-align: justify;\">Bermanjalah dalam pesona pantai-pantai di Malang Selatan dan lihatlah betapa Kabupaten Malang memiliki banyak cara untuk mengikis habis rasa ketakjuban setiap penikmatnya.</p><p style=\"margin-bottom: 24px; color: rgb(68, 68, 68); font-family: &quot;Roboto Condensed&quot;; font-size: 18px; text-align: justify;\">Tahukah Anda, diantara sekian pantai yang baru ditemukan, Pantai Teluk Asmoro adalah salah satu yang paling menawan. Datangi pantai ini di Tambakrejo, Sumbermanjing Wetan, Malang, Jawa Timur.</p><p style=\"margin-bottom: 24px; color: rgb(68, 68, 68); font-family: &quot;Roboto Condensed&quot;; font-size: 18px; text-align: justify;\">Pantai Teluk Asmara adalah salah satu wujud nyata keindahan Malang Selatan yang sering dikatakan sebagai Raja Ampatnya Kabupaten Malang. Sebelum ada kesiapan yang benar-benar siap ke Raja Ampat di Papua nan jauh, realisasikan dulu obsesi Anda di pantai ini.</p><p style=\"margin-bottom: 24px; color: rgb(68, 68, 68); font-family: &quot;Roboto Condensed&quot;; font-size: 18px; text-align: justify;\">Niscaya akan terpenuhi segala bentuk ketakjuban oleh pesona yang dihadirkan, sementara disetiap bagiannya selalu siap memanjakan petualangan setiap mereka yang datang.</p><p style=\"margin-bottom: 24px; color: rgb(68, 68, 68); font-family: &quot;Roboto Condensed&quot;; font-size: 18px; text-align: justify;\">Sebagai pantai yang masih tersembunyi, Teluk Asmara menjadi pantai yang lebih asri dan hampir tanpa sampah. Keeksotikan alam terutama dihadirkan melalui gugusan pulau-pulau karang kecil yang tertata acak dengan berbalut rimbunnya hijau tetumbuhan.</p></h2>', 'Bahari', 15000, 150000, '-8.442093146898934', '112.66529379300717', 'asmara.jpg', 1, '2021-02-20 22:14:21', '2021-02-23 19:19:39'),
(14, 7, 'https://kebudayaan.kemdikbud.go.id/bpnbyogyakarta/polowijen-kampung-budaya-di-kota-malang/', 'Seni Topeng Malangan di Kampung Budaya Polowijen', '<p style=\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\"></p><p style=\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\"><ul></ul></p><p style=\"text-align: left; margin: 42px auto 40px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; text-rendering: optimizelegibility; width: 768px; color: rgb(53, 64, 90); max-width: 780px !important;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Bicara soal budaya di Malang tentu tak bisa lepas dari Kesenian Topeng Malangan.Tak hanya seni tari, namun topeng yang digunakan sebagai properti juga merupakan produk hasil buatan tangan masyarakat di daerah Malang.&nbsp;</span></p><p style=\"margin: 42px auto 40px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; text-rendering: optimizelegibility; width: 768px; color: rgb(53, 64, 90); max-width: 780px !important;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Apabila ingin mengenal dan mendalami tentang kesenian ini, sobat tiket bisa mampir ke Kampung Budaya Polowijen. Kampung Budaya Polowijen ini merupakan salah satu kampung tematik yang ada di kota Malang, selain Kampung Pelangi. Kamu bisa mempelajari seluk beluk tentang Tari Topeng Malangan dan nilai budaya yang ada di dalamnya.&nbsp;</span></p><p style=\"margin: 42px auto 40px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; text-rendering: optimizelegibility; width: 768px; color: rgb(53, 64, 90); max-width: 780px !important;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Sebelum akhirnya diresmikan sebagai Kampung Budaya di tahun 2017, Kelurahan Polowijen sudah terkenal karena banyaknya penari dan pengrajin Topeng Malangan. Karena nilai budaya dan seni yang sangat kental, seorang warganya mengusulkan agar kampung ini dijadikan kampung budaya.&nbsp;</span></p><p style=\"margin: 42px auto 40px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; text-rendering: optimizelegibility; width: 768px; color: rgb(53, 64, 90); max-width: 780px !important;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Suasana yang begitu khas akan langsung terasa saat kamu sampai di kampung ini. Mulai dari gazebo, panggung bambu, hingga rumah warga setempat, dibuat dengan gaya khas tempo dulu untuk menambah nuansa kampung yang khas.&nbsp;</span></p><p style=\"margin: 42px auto 40px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; text-rendering: optimizelegibility; width: 768px; color: rgb(53, 64, 90); max-width: 780px !important;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Selain mengenal budaya warga sekitar, sobat tiket juga bisa belajar menari dan membuat Topeng Malangan di kampung budaya ini. Ada banyak rumah penari yang bisa kamu kunjungi, untuk mengetahui lebih jauh tentang kesenian asli Malang ini. Terdapat juga perpustakaan bagi kamu yang ingin mencari literasi mengenai Kampung Budaya Polowijen dan seluk beluk di dalamnya.&nbsp;</span></p><p style=\"margin: 42px auto 40px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; text-rendering: optimizelegibility; width: 768px; color: rgb(53, 64, 90); max-width: 780px !important;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Selain untuk melestarikan nilai seni dan budaya setempat, Kampung Budaya Polowijen juga ditujukan untuk meningkatkan ekonomi kreatif masyarakat sekitar. Hal ini lah yang menjadikan&nbsp;</span><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Kampung Budaya Polowijen sebagai destinasi wisata budaya yang wajib dikunjungi ketika kamu di Malang.</span></p>', 'Budaya', 1212, 1212, '-7.92907019532382', '112.64324891246378', 'poliwijen.jpg', 1, '2021-02-20 22:15:03', '2021-02-23 19:02:13');
INSERT INTO `m_wisata` (`wisata_id`, `kategori`, `url_video`, `nama`, `deskripsi`, `wisata_tag`, `htm_lokal`, `htm_intl`, `latitude`, `longitude`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(15, 2, 'https://surabaya.liputan6.com/read/4397837/video-megahnya-masjid-tiban-turen-malang-bak-istana', 'Masjid Tiban', '<h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><p style=\"color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif; font-size: 15px; font-weight: 400;\">Masjid Tiban adalah salah satu tempat yang sangat menakjubkan bagi pengunjung yang datang ke Malang, Jawa Timur.&nbsp;<a href=\"https://www.liputan6.com/lifestyle/read/4398190/melihat-keindahan-masjid-terbesar-yang-ada-di-pakistan\" title=\"Masjid \" style=\"color: rgb(255, 51, 0);\">Masjid&nbsp;</a>ini terletak di Jalan KH. Wahid Hasyim, Gang Anggur No. 10 RT 07 / RW 06, Desa Sananrejo, Turen.</p><p style=\"color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif; font-size: 15px; font-weight: 400;\">Tempat ibadah umat Islam ini mempunyai bentuk bangunan menyerupai sebuah istana kerajaan dengan nuansa biru,&nbsp;<a href=\"https://www.liputan6.com/tag/masjid\" style=\"color: rgb(255, 51, 0);\">Masjid&nbsp;</a>Tiban ini terdiri dari 10 lantai. Berikut video liputannya pada program Fokus,&nbsp;30 Oktober 2020.</p><p style=\"color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif; font-size: 15px; font-weight: 400;\">Berdiri megah di tengah lahan perkebunan dan pertanian yang luas, di Kabupaten Malang, Jawa Timur, adalah Masjid Tiban. Desain arsitektur masjid berwarna biru ini sangat mencolok, karena mengusung desain perpaduan khas Turki, India, Rusia, dan Mesir.</p><p style=\"color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif; font-size: 15px; font-weight: 400;\">Tidak hanya dari luar, keindahan masjid pun menjalar hingga ke bagian dalam bangunan. Masjid Tiban sebenarnya merupakan sebuah pondok pesantren yang bernama Salafiyah Bihaaru Bahri ‘Asali Fadlaailir Rahmah.</p></h3>', 'Religi', 0, 0, '-8.151205223947736', '112.7123762701373', 'tiban.jpg', 1, '2021-02-20 22:15:56', '2021-02-23 18:51:09'),
(16, 1, 'a', 'Candi Singosari', '<h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><p style=\"color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-weight: 400; font-size: 15px !important; line-height: 1.7 !important;\">Pasti masyarakat Jawa Timur sudah tidak asing lagi dengan salah satu&nbsp;<strong>Tempat Wisata Sejarah</strong>&nbsp;di malang ini, yaa candi singosari yang dulunya milik kerajaan singosari yang di pimpin oleh Ken Arok pendiri kerajaan singosari.</p><p style=\"color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-weight: 400; font-size: 15px !important; line-height: 1.7 !important;\">Komplek wisata Candi Singosari berukuran 200 m x 400 m, sudah cukup lebar ya buat berwisata barsama keluarga, candi singosari terletak di tengah dan di kelilingi beberapa candi-candi kecil yang memperindah candi ini dan taukah kalian candi singosari ini adalah karya terahir dari kerajaan singosari sebelum runtuhnya kerajaan Singosari.</p></h3>', 'Sejarah', 10000, 100000, '-7.887625102391308', '112.66439662357085', 'singosari.jpg', 1, '2021-02-20 22:16:34', '2021-02-23 19:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lihat_pw` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_lengkap` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` int(25) DEFAULT NULL,
  `desa` int(25) DEFAULT NULL,
  `alamat` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` int(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `lihat_pw`, `status`, `nama_lengkap`, `kecamatan`, `desa`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$hEaQPM4lJ5vKPXu9bDXwHOkfuQ5HK0mHb26GvLS99NjgcrojqUqFy', NULL, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, '2021-02-11 02:31:17', '2021-02-11 02:31:17'),
(2, 'User 22121', 'user@gmail.commmmmm', NULL, '$2y$10$65VILifq/AsR4tN292On3uRHMKx0TNCriE2NDULE5b9.8pyHCU6Su', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-14 04:36:34', '2021-02-14 06:43:08'),
(4, 'anggota', 'anggota@gmail.com', NULL, '$2y$10$as2hjaKQtBw5vuUNpqA3weJPfxV.oHUd.pou9NVy6XjxNzR1DaqVu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-14 06:29:25', '2021-02-14 06:29:25'),
(7, 'Vendor', 'vendor@gmail.com', NULL, '$2y$10$6tvFYsWULOwrc.RNpY0ONeDhlij5KYgMhMGvyDqJ7pVtm83ULjtxK', NULL, NULL, 'vendor', 'Vendor', NULL, NULL, 'jember', 81, '2021-02-17 03:11:19', '2021-02-17 03:11:19'),
(8, 'hendra', 'hendra@gmail.com', NULL, '$2y$10$TJgYOTJQFiiImwQHqrlI3uLT1xivMvsuFQSH6JbXY0H7jwKo8NKm6', NULL, '12345678', NULL, 'hendra', NULL, NULL, 'jember', 87878787, '2021-02-19 03:38:22', '2021-02-19 03:38:22'),
(9, 'virgi', 'user@gmail.com', NULL, '$2y$10$0wTUUMNvS7VujD1jtTnieO1oO8xd6rxaYjiNREPl.cMwMzRRjP04y', NULL, '12345678', NULL, 'virgi', 434, 488, 'bekasi', 87444744, '2021-02-19 17:37:16', '2021-02-19 17:37:16'),
(11, 'aaaaa', 'aaaaa@gmail.com', NULL, '$2y$10$Z/hHxQRGF9M3ZKwsu2xqvOGCOVnQEzVN7bSqzQU0UbGlyPovakVY6', NULL, '159753', NULL, 'aaaa', 435, 227, 'jember', 89605584, '2021-02-19 17:56:17', '2021-02-19 17:56:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas_wisata`
--
ALTER TABLE `fasilitas_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_about`
--
ALTER TABLE `m_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `m_akomodasi`
--
ALTER TABLE `m_akomodasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_akomodasi_wisata_foreign` (`wisata`);

--
-- Indexes for table `m_alamat`
--
ALTER TABLE `m_alamat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_berita`
--
ALTER TABLE `m_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `m_cinderamata`
--
ALTER TABLE `m_cinderamata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_cinderamata_wisata_foreign` (`wisata`);

--
-- Indexes for table `m_detail_wisata`
--
ALTER TABLE `m_detail_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_event`
--
ALTER TABLE `m_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `m_fasilitas`
--
ALTER TABLE `m_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_kategori`
--
ALTER TABLE `m_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `m_kontak`
--
ALTER TABLE `m_kontak`
  ADD PRIMARY KEY (`kontak_id`);

--
-- Indexes for table `m_kuliner`
--
ALTER TABLE `m_kuliner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_kuliner_wisata_foreign` (`wisata`);

--
-- Indexes for table `m_pendapatan`
--
ALTER TABLE `m_pendapatan`
  ADD PRIMARY KEY (`pendapatan_id`);

--
-- Indexes for table `m_verifikasi`
--
ALTER TABLE `m_verifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_wahana`
--
ALTER TABLE `m_wahana`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_wahana_wisata_foreign` (`wisata`);

--
-- Indexes for table `m_wahana_detail`
--
ALTER TABLE `m_wahana_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_wisata`
--
ALTER TABLE `m_wisata`
  ADD PRIMARY KEY (`wisata_id`),
  ADD KEY `m_wisata_kategori_foreign` (`kategori`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas_wisata`
--
ALTER TABLE `fasilitas_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `m_about`
--
ALTER TABLE `m_about`
  MODIFY `about_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_akomodasi`
--
ALTER TABLE `m_akomodasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_berita`
--
ALTER TABLE `m_berita`
  MODIFY `berita_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_cinderamata`
--
ALTER TABLE `m_cinderamata`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_detail_wisata`
--
ALTER TABLE `m_detail_wisata`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_event`
--
ALTER TABLE `m_event`
  MODIFY `event_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_fasilitas`
--
ALTER TABLE `m_fasilitas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `m_kategori`
--
ALTER TABLE `m_kategori`
  MODIFY `kategori_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `m_kontak`
--
ALTER TABLE `m_kontak`
  MODIFY `kontak_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_kuliner`
--
ALTER TABLE `m_kuliner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_pendapatan`
--
ALTER TABLE `m_pendapatan`
  MODIFY `pendapatan_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_verifikasi`
--
ALTER TABLE `m_verifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_wahana`
--
ALTER TABLE `m_wahana`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `m_wahana_detail`
--
ALTER TABLE `m_wahana_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `m_wisata`
--
ALTER TABLE `m_wisata`
  MODIFY `wisata_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `m_akomodasi`
--
ALTER TABLE `m_akomodasi`
  ADD CONSTRAINT `m_akomodasi_wisata_foreign` FOREIGN KEY (`wisata`) REFERENCES `m_wisata` (`wisata_id`);

--
-- Constraints for table `m_cinderamata`
--
ALTER TABLE `m_cinderamata`
  ADD CONSTRAINT `m_cinderamata_wisata_foreign` FOREIGN KEY (`wisata`) REFERENCES `m_wisata` (`wisata_id`);

--
-- Constraints for table `m_kuliner`
--
ALTER TABLE `m_kuliner`
  ADD CONSTRAINT `m_kuliner_wisata_foreign` FOREIGN KEY (`wisata`) REFERENCES `m_wisata` (`wisata_id`);

--
-- Constraints for table `m_wahana`
--
ALTER TABLE `m_wahana`
  ADD CONSTRAINT `m_wahana_wisata_foreign` FOREIGN KEY (`wisata`) REFERENCES `m_wisata` (`wisata_id`);

--
-- Constraints for table `m_wisata`
--
ALTER TABLE `m_wisata`
  ADD CONSTRAINT `m_wisata_kategori_foreign` FOREIGN KEY (`kategori`) REFERENCES `m_kategori` (`kategori_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
