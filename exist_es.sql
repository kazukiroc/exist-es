-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2023 pada 10.11
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exist_es`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `characteristics`
--

CREATE TABLE `characteristics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `characteristics`
--

INSERT INTO `characteristics` (`id`, `kode`, `ciri`, `created_at`, `updated_at`) VALUES
(6, 'C001', 'Suka bercerita', '2023-05-29 20:32:28', '2023-05-29 20:33:53'),
(7, 'C002', 'Memiliki ingatan yang baik untuk hal-hal yang sepele', '2023-05-29 20:34:08', '2023-05-29 20:34:08'),
(8, 'C003', 'Menyukai permainan kata-kata', '2023-05-29 20:34:24', '2023-05-29 20:34:24'),
(9, 'C004', 'Hobi membaca buku', '2023-05-29 20:34:34', '2023-05-29 20:34:34'),
(10, 'C005', 'Seorang pembicara yang baik', '2023-05-29 20:35:00', '2023-05-29 20:35:00'),
(11, 'C006', 'Menyukai pelajaran bahasa daripada matematika dan ilmu alam', '2023-05-29 20:35:28', '2023-05-29 20:35:28'),
(12, 'C007', 'Senang membicarakan dan menulis ide-ide yang ada di otak', '2023-05-29 20:36:58', '2023-05-29 20:36:58'),
(13, 'C008', 'Memiliki kosakata yang cukup banyak sehingga tidak ada hambatan atau kesulitan dalam berkomunikasi dengan berbagai kalangan', '2023-05-29 20:37:23', '2023-05-29 20:37:23'),
(14, 'C009', 'Senang menulis karangan atau segala hal yang berbentuk tulisan', '2023-05-29 20:38:11', '2023-05-29 20:38:11'),
(15, 'C010', 'Lebih memilih untuk menulis dalam presentasi kelompok', '2023-05-29 20:38:29', '2023-05-29 20:38:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `intelligences`
--

CREATE TABLE `intelligences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `intelligences`
--

INSERT INTO `intelligences` (`id`, `kode`, `jenis`, `prodi`, `created_at`, `updated_at`) VALUES
(5, 'I001', 'Kecerdasan Linguistik-Verbal', 'Ilmu Perpustakaan,Ilmu Komunikasi,Bahasa dan Sastra,Ilmu Hubungan Internasional,Ilmu Hukum,Ilmu Politik', '2023-05-29 20:59:03', '2023-05-29 20:59:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `knowledge`
--

CREATE TABLE `knowledge` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ciri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `knowledge`
--

INSERT INTO `knowledge` (`id`, `ciri`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'C001', 'I001', '2023-06-03 00:34:00', '2023-06-03 00:55:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_27_065907_create_intelligences_table', 1),
(6, '2023_05_27_085051_create_characteristics_table', 1),
(7, '2023_05_27_132649_create_studies_table', 1),
(8, '2023_06_03_071329_create_knowledge_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `studies`
--

CREATE TABLE `studies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `studies`
--

INSERT INTO `studies` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(6, 'Ilmu Perpustakaan', 'Lorem ipsum dolor', '2023-05-29 20:54:49', '2023-05-29 20:54:49'),
(7, 'Ilmu Komunikasi', 'Lorem ipsum dolor', '2023-05-29 20:54:58', '2023-05-29 20:54:58'),
(8, 'Bahasa dan Sastra', 'Lorem ipsum dolor', '2023-05-29 20:55:11', '2023-05-29 20:55:11'),
(9, 'Ilmu Hubungan Internasional', 'Lorem ipsum dolor', '2023-05-29 20:55:25', '2023-05-29 20:55:25'),
(10, 'Ilmu Hukum', 'Lorem ipsum dolor', '2023-05-29 20:55:33', '2023-05-29 20:55:33'),
(11, 'Ilmu Politik', 'Lorem ipsum dolor', '2023-05-29 20:55:43', '2023-05-29 20:55:43'),
(12, 'Statistika', 'Lorem ipsum dolor', '2023-05-29 20:55:56', '2023-05-29 20:55:56'),
(13, 'Administrasi Negara', 'Lorem ipsum dolor', '2023-05-29 20:56:10', '2023-05-29 20:56:10'),
(14, 'Akuntansi', 'Lorem ipsum dolor', '2023-05-29 20:56:17', '2023-05-29 20:56:17'),
(15, 'Ilmu Ekonomi', 'Lorem ipsum dolor', '2023-05-29 20:56:32', '2023-05-29 20:56:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mamal', 'mamal@gmail.com', NULL, '$2y$10$.ltJnYjTuEsSvSY0V2th2.psOG5srPQLmeHtNQHzrP1rrM0Xg.kse', NULL, '2023-05-29 05:16:49', '2023-05-29 05:16:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `characteristics`
--
ALTER TABLE `characteristics`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `intelligences`
--
ALTER TABLE `intelligences`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `knowledge`
--
ALTER TABLE `knowledge`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `studies`
--
ALTER TABLE `studies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `characteristics`
--
ALTER TABLE `characteristics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `intelligences`
--
ALTER TABLE `intelligences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `knowledge`
--
ALTER TABLE `knowledge`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `studies`
--
ALTER TABLE `studies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
