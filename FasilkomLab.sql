-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2021 at 05:07 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FasilkomLab`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id_anggota` bigint(20) UNSIGNED NOT NULL,
  `nim_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggotas`
--

INSERT INTO `anggotas` (`id_anggota`, `nim_anggota`, `nama_anggota`, `ket_anggota`, `foto_anggota`, `created_at`, `updated_at`) VALUES
(1, '00000', 'Nama Anggota', 'Anggota Lab', 'public/anggota/qKRCB7oBbItnw20PhKa7hSNxyLKyIuUERYvIeuVy.png', '2021-10-22 22:57:37', '2021-10-22 22:57:37'),
(2, '11111', 'Nama Anggota 2', 'Anggota Lab', 'public/anggota/weIqxlwGHdeMQ7k0Uz38EaWWFxzXhCQwDxRCSWMl.png', '2021-10-22 22:57:56', '2021-10-22 22:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id_beritas` bigint(20) UNSIGNED NOT NULL,
  `judul_beritas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_beritas` date NOT NULL,
  `foto_beritas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_beritas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id_beritas`, `judul_beritas`, `tanggal_beritas`, `foto_beritas`, `isi_beritas`, `created_at`, `updated_at`) VALUES
(1, 'Judul Berita', '2021-10-23', 'public/berita/TYY2L688ufOR0mZbq2j6Wi6qktExMhRV4uQtm2u0.png', 'Isi Berita', '2021-10-23 07:50:31', '2021-10-23 08:02:06'),
(2, 'Judul Berita 2', '2021-10-23', 'public/berita/fAFvxDUaKqs6irvS9pYGEtHa9pGO9Fk8WunbjuDo.png', 'Isi Berita', '2021-10-23 07:52:32', '2021-10-23 07:52:46');

-- --------------------------------------------------------

--
-- Table structure for table `bimbingans`
--

CREATE TABLE `bimbingans` (
  `id_bimbingan` bigint(20) UNSIGNED NOT NULL,
  `id_anggota` bigint(20) UNSIGNED NOT NULL,
  `tanggal_bimbingan` date NOT NULL,
  `ket_bimbingan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bimbingans`
--

INSERT INTO `bimbingans` (`id_bimbingan`, `id_anggota`, `tanggal_bimbingan`, `ket_bimbingan`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-01-01', 'Bimbingan Penelitian', '2021-10-22 22:58:37', '2021-10-22 22:58:37'),
(2, 2, '2022-01-01', 'Bimbingan Penelitian', '2021-10-22 22:58:46', '2021-10-22 22:58:46');

-- --------------------------------------------------------

--
-- Table structure for table `demo_dokumentasi_penelitians`
--

CREATE TABLE `demo_dokumentasi_penelitians` (
  `id_demo_dokumentasi_penelitian` bigint(20) UNSIGNED NOT NULL,
  `id_penelitian` bigint(20) UNSIGNED NOT NULL,
  `ket_demo_dokumentasi_penelitian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkvideo_demo_dokumentasi_penelitian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demo_dokumentasi_penelitians`
--

INSERT INTO `demo_dokumentasi_penelitians` (`id_demo_dokumentasi_penelitian`, `id_penelitian`, `ket_demo_dokumentasi_penelitian`, `linkvideo_demo_dokumentasi_penelitian`, `created_at`, `updated_at`) VALUES
(1, 1, 'Keterangan Dokumentasi', 'https://www.youtube.com/watch?v=r6ywRzqvmBc&ab_channel=JJChannel', '2021-10-22 22:52:31', '2021-10-22 22:52:31'),
(2, 2, 'Keterangan Dokumentasi', 'https://www.youtube.com/watch?v=r6ywRzqvmBc&ab_channel=JJChannel', '2021-10-22 22:56:19', '2021-10-22 22:56:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fokuspenelitians`
--

CREATE TABLE `fokuspenelitians` (
  `id_fokuspenelitians` bigint(20) UNSIGNED NOT NULL,
  `topik_fokuspenelitians` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fokuspenelitians`
--

INSERT INTO `fokuspenelitians` (`id_fokuspenelitians`, `topik_fokuspenelitians`, `created_at`, `updated_at`) VALUES
(1, 'Fokus Penelitian 1', '2021-10-23 04:54:25', '2021-10-23 04:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `laboratoria`
--

CREATE TABLE `laboratoria` (
  `id_laboratoriums` bigint(20) UNSIGNED NOT NULL,
  `logo_laboratoriums` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_laboratoriums` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_laboratoriums` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjelasan_laboratoriums` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_laboratoriums` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_laboratoriums` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github_laboratoriums` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_laboratoriums` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warnatajuk_laboratoriums` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laboratoria`
--

INSERT INTO `laboratoria` (`id_laboratoriums`, `logo_laboratoriums`, `foto_laboratoriums`, `nama_laboratoriums`, `penjelasan_laboratoriums`, `instagram_laboratoriums`, `youtube_laboratoriums`, `github_laboratoriums`, `email_laboratoriums`, `warnatajuk_laboratoriums`, `created_at`, `updated_at`) VALUES
(1, 'public/laboratorium/xiSVJeiiSVrgYAc1IN4o6d5l6VF0q71a2jRlJ6qD.png', 'public/laboratorium/QFrB20kS8TVJyaz89rU9lKjBoCLoynbABfQ6QSRL.png', 'FasilkomLab', 'Penjelasan FasilkomLab', 'https://instagram.com', 'https://youtube.com', 'https://github.com', 'informasi@fasilkomlab.ilkom.unsri.ac.id', '#ff5b24', '2021-10-23 04:52:16', '2021-10-23 20:07:04');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_06_29_140415_create_pembimbings_table', 1),
(7, '2021_06_29_140451_create_anggotas_table', 1),
(8, '2021_06_29_140525_create_penelitians_table', 1),
(9, '2021_06_29_140541_create_saranmasukans_table', 1),
(10, '2021_06_29_140559_create_bimbingans_table', 1),
(11, '2021_06_29_160052_create_sessions_table', 1),
(12, '2021_06_30_010449_drop_id_pembimbing_bimbingans_table', 1),
(13, '2021_06_30_011214_add_ket_bimbingan_to_bimbingans_table', 1),
(14, '2021_06_30_061459_add_nip_to_pembimbings_table', 1),
(15, '2021_07_02_002335_adding_ondelete_foreign_bimbingans_table', 1),
(16, '2021_07_08_044621_create_demo_dokumentasi_penelitians_table', 1),
(17, '2021_07_08_044722_create_publikasi_penelitians_table', 1),
(18, '2021_10_21_135437_create_praktikums_table', 1),
(19, '2021_10_22_033326_create_laboratoria_table', 1),
(20, '2021_10_22_033830_create_fokuspenelitians_table', 1),
(21, '2021_10_23_140759_create_beritas_table', 2);

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
-- Table structure for table `pembimbings`
--

CREATE TABLE `pembimbings` (
  `id_pembimbing` bigint(20) UNSIGNED NOT NULL,
  `nip_pembimbing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pembimbing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_pembimbing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_pembimbing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembimbings`
--

INSERT INTO `pembimbings` (`id_pembimbing`, `nip_pembimbing`, `nama_pembimbing`, `ket_pembimbing`, `foto_pembimbing`, `created_at`, `updated_at`) VALUES
(1, '00000', 'Pembimbing Lab', 'Pembimbing Lab Fasilkom', 'public/pembimbing/MKm6v5Yt12er9C1ZR7GmUGMPOd830Kp1lsMRE4yJ.png', '2021-10-22 22:48:42', '2021-10-22 22:48:42'),
(2, '11111', 'Pembimbing Lab 2', 'Pembimbing Lab Fasilkom', 'public/pembimbing/vnnaf1gjYDDNOqv8W5ZHVvVoaYKzmDT0xK0ziBv8.png', '2021-10-22 22:53:37', '2021-10-22 22:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `penelitians`
--

CREATE TABLE `penelitians` (
  `id_penelitian` bigint(20) UNSIGNED NOT NULL,
  `judul_penelitian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penelitian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_penelitian` date NOT NULL,
  `status_penelitian` enum('SELESAI','BELUMSELESAI') COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjelasan_penelitian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_penelitian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penelitians`
--

INSERT INTO `penelitians` (`id_penelitian`, `judul_penelitian`, `nama_penelitian`, `tanggal_penelitian`, `status_penelitian`, `penjelasan_penelitian`, `foto_penelitian`, `created_at`, `updated_at`) VALUES
(1, 'Judul Penelitian', 'Nama Peneliti', '2021-10-23', 'BELUMSELESAI', 'Penjelasan Penelitian', 'public/penelitian/OTDlAl9cwtbXzgZZBRQaOUymlssepEXFq3QVxnjj.png', '2021-10-22 22:49:40', '2021-10-22 22:49:40'),
(2, 'Judul Penelitian 2', 'Nama Peneliti', '2021-10-23', 'SELESAI', 'Penjelasan Penelitian 2', 'public/penelitian/r2KDWmCTjlm9n6D0I1hdaQSKrh5kkBce5SPWWmyv.png', '2021-10-22 22:54:17', '2021-10-23 03:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `praktikums`
--

CREATE TABLE `praktikums` (
  `id_praktikums` bigint(20) UNSIGNED NOT NULL,
  `hari_praktikums` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktumulai_praktikums` time NOT NULL,
  `waktuselesai_praktikums` time NOT NULL,
  `matakuliah_praktikums` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_praktikums` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen_praktikums` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `praktikums`
--

INSERT INTO `praktikums` (`id_praktikums`, `hari_praktikums`, `waktumulai_praktikums`, `waktuselesai_praktikums`, `matakuliah_praktikums`, `kelas_praktikums`, `dosen_praktikums`, `created_at`, `updated_at`) VALUES
(1, 'Senin', '08:00:00', '09:00:00', 'Alpro 1', '7 IFBIL', 'Dosen Pengajar', '2021-10-22 22:59:56', '2021-10-22 22:59:56'),
(2, 'Selasa', '10:00:00', '11:59:00', 'Alpro 3', '7 SIBIL', 'Dosen Pengajar', '2021-10-22 23:00:56', '2021-10-23 08:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `publikasi_penelitians`
--

CREATE TABLE `publikasi_penelitians` (
  `id_publikasi_penelitian` bigint(20) UNSIGNED NOT NULL,
  `id_penelitian` bigint(20) UNSIGNED NOT NULL,
  `tempat_publikasi_penelitian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_publikasi_penelitian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_publikasi_penelitian` date NOT NULL,
  `foto_publikasi_penelitian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publikasi_penelitians`
--

INSERT INTO `publikasi_penelitians` (`id_publikasi_penelitian`, `id_penelitian`, `tempat_publikasi_penelitian`, `ket_publikasi_penelitian`, `tanggal_publikasi_penelitian`, `foto_publikasi_penelitian`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tempat Publikasi', 'Keterangan Publikasi', '2021-10-23', 'public/publikasi_penelitian/vSvSIlVh7vOFJ5TgMu1eeoyv2IvrSmE7sjwnSm5b.png', '2021-10-22 22:50:39', '2021-10-22 22:50:39'),
(2, 2, 'Tempat Publikasi', 'Keterangan Publikasi', '2021-10-23', 'public/publikasi_penelitian/uUOyIxlnzGqeNDc3fRYF7uxTCccbyNDxd9QLIuG1.png', '2021-10-22 22:55:01', '2021-10-22 22:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `saranmasukans`
--

CREATE TABLE `saranmasukans` (
  `id_saranmasukan` bigint(20) UNSIGNED NOT NULL,
  `isi_saranmasukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_saranmasukan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('TIAJ2tomqELJMsscsN6UetWDCBQ7s50zlfW5ZEm4', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:93.0) Gecko/20100101 Firefox/93.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoicnpTWUVZRGtnamFKTWpQZldURFlYNXM4T2Z4UWQ4cVVzaDZ4QjhtbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sYWJvcmF0b3JpdW0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDNMZXJ2MWRadUUwT0tENTRVR1hxTGVpc2pBMktyTTBoVEpWaEdmQlpoYk5ZLzlKZ3l2SS9tIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQzTGVydjFkWnVFME9LRDU0VUdYcUxlaXNqQTJLck0waFRKVmhHZkJaaGJOWS85Smd5dkkvbSI7fQ==', 1635044824),
('VwwXwJ6yVk9dezaQpxeOKQTxveP6HmiVN8U1bIHz', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidUJjN1loOVlicG9yNkdzQkpBcTBySjJzVXdvWEh4cEtNVjJqd1ZOOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1635043061);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin FasilkomLab', 'admin@fasilkomlab.ilkom.unsri.ac.id', NULL, '$2y$10$3Lerv1dZuE0OKD54UGXqLeisjA2KrM0hTJVhGfBZhbNY/9JgyvI/m', NULL, NULL, NULL, NULL, 'profile-photos/srGNKRwQP83ScS7zTFbbik2Bvt9dXrJVbKRFj2VJ.png', '2021-10-22 21:50:21', '2021-10-23 02:58:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id_beritas`);

--
-- Indexes for table `bimbingans`
--
ALTER TABLE `bimbingans`
  ADD PRIMARY KEY (`id_bimbingan`),
  ADD KEY `bimbingans_id_anggota_foreign` (`id_anggota`);

--
-- Indexes for table `demo_dokumentasi_penelitians`
--
ALTER TABLE `demo_dokumentasi_penelitians`
  ADD PRIMARY KEY (`id_demo_dokumentasi_penelitian`),
  ADD KEY `demo_dokumentasi_penelitians_id_penelitian_foreign` (`id_penelitian`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fokuspenelitians`
--
ALTER TABLE `fokuspenelitians`
  ADD PRIMARY KEY (`id_fokuspenelitians`);

--
-- Indexes for table `laboratoria`
--
ALTER TABLE `laboratoria`
  ADD PRIMARY KEY (`id_laboratoriums`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembimbings`
--
ALTER TABLE `pembimbings`
  ADD PRIMARY KEY (`id_pembimbing`);

--
-- Indexes for table `penelitians`
--
ALTER TABLE `penelitians`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `praktikums`
--
ALTER TABLE `praktikums`
  ADD PRIMARY KEY (`id_praktikums`);

--
-- Indexes for table `publikasi_penelitians`
--
ALTER TABLE `publikasi_penelitians`
  ADD PRIMARY KEY (`id_publikasi_penelitian`),
  ADD KEY `publikasi_penelitians_id_penelitian_foreign` (`id_penelitian`);

--
-- Indexes for table `saranmasukans`
--
ALTER TABLE `saranmasukans`
  ADD PRIMARY KEY (`id_saranmasukan`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id_anggota` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id_beritas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bimbingans`
--
ALTER TABLE `bimbingans`
  MODIFY `id_bimbingan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `demo_dokumentasi_penelitians`
--
ALTER TABLE `demo_dokumentasi_penelitians`
  MODIFY `id_demo_dokumentasi_penelitian` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fokuspenelitians`
--
ALTER TABLE `fokuspenelitians`
  MODIFY `id_fokuspenelitians` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laboratoria`
--
ALTER TABLE `laboratoria`
  MODIFY `id_laboratoriums` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pembimbings`
--
ALTER TABLE `pembimbings`
  MODIFY `id_pembimbing` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penelitians`
--
ALTER TABLE `penelitians`
  MODIFY `id_penelitian` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `praktikums`
--
ALTER TABLE `praktikums`
  MODIFY `id_praktikums` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `publikasi_penelitians`
--
ALTER TABLE `publikasi_penelitians`
  MODIFY `id_publikasi_penelitian` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `saranmasukans`
--
ALTER TABLE `saranmasukans`
  MODIFY `id_saranmasukan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bimbingans`
--
ALTER TABLE `bimbingans`
  ADD CONSTRAINT `bimbingans_id_anggota_foreign` FOREIGN KEY (`id_anggota`) REFERENCES `anggotas` (`id_anggota`) ON DELETE CASCADE;

--
-- Constraints for table `demo_dokumentasi_penelitians`
--
ALTER TABLE `demo_dokumentasi_penelitians`
  ADD CONSTRAINT `demo_dokumentasi_penelitians_id_penelitian_foreign` FOREIGN KEY (`id_penelitian`) REFERENCES `penelitians` (`id_penelitian`);

--
-- Constraints for table `publikasi_penelitians`
--
ALTER TABLE `publikasi_penelitians`
  ADD CONSTRAINT `publikasi_penelitians_id_penelitian_foreign` FOREIGN KEY (`id_penelitian`) REFERENCES `penelitians` (`id_penelitian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
