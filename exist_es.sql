-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2023 pada 16.07
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

-- CREATE TABLE `characteristics` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `ciri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(15, 'C010', 'Lebih memilih untuk menulis dalam presentasi kelompok', '2023-05-29 20:38:29', '2023-05-29 20:38:29'),
(19, 'C011', 'Dapat menggunakan banyak kata-kata yang berbeda untuk mengekspresikan diri', '2023-06-10 06:39:41', '2023-06-10 06:39:41'),
(20, 'C012', 'Menyukai perdebatan dan diskusi', '2023-06-10 06:39:53', '2023-06-10 06:39:53'),
(21, 'C013', 'Sangat menyukai pelajaran matematika', '2023-06-10 06:40:06', '2023-06-10 06:40:06'),
(22, 'C014', 'Menyukai permainan yang menggunakan logika, seperti teka-teki angka', '2023-06-10 06:40:29', '2023-06-10 06:40:29'),
(23, 'C015', 'Dapat memecahkan soal-soal hitungan', '2023-06-10 06:40:41', '2023-06-10 06:40:41'),
(24, 'C016', 'Jika harus mengingat sesuatu, cenderung menempatkan setiap kejadian dalam urutan yang logis', '2023-06-10 06:41:08', '2023-06-10 06:41:08'),
(25, 'C017', 'Senang mencari tahu bagaimana cara kerja setiap benda', '2023-06-10 06:41:19', '2023-06-10 06:41:19'),
(26, 'C018', 'Menyukai komputer dan berbagai permainan angka-angka', '2023-06-10 06:41:32', '2023-06-10 06:41:32'),
(27, 'C019', 'Menyukai permainan catur, sudoku, atau monopoli', '2023-06-10 06:41:44', '2023-06-10 06:41:44'),
(28, 'C020', 'Dapat menghitung angka di luar kepala dengan mudah', '2023-06-10 06:41:56', '2023-06-10 06:41:56'),
(29, 'C021', 'Jika sesuatu rusak dan tidak berfungsi, akan melihat bagian-bagiannya dan mencari tahu bagaimana cara kerjanya', '2023-06-10 06:42:08', '2023-06-10 06:42:08'),
(30, 'C022', 'Suka berpikir melalui masalah dengan hati-hati, mempertimbangkan segala konsekuensinya', '2023-06-10 06:42:20', '2023-06-10 06:42:20'),
(31, 'C023', 'Senang menonton film atau membaca buku yang melibatkan berpikir logis seperti buku atau film detektif', '2023-06-10 06:42:56', '2023-06-10 06:42:56'),
(32, 'C024', 'Senang membuat eksperimen sederhana', '2023-06-10 06:43:07', '2023-06-10 06:43:07'),
(33, 'C025', 'Lebih memilih peta daripada petunjuk tertulis dalam mencari sebuah alamat', '2023-06-10 06:43:19', '2023-06-10 06:43:19'),
(34, 'C026', 'Gemar dan mampu mengerjakan teka-teki menyusun potongan gambar, labirin dan teka-teki visual lainnya', '2023-06-10 06:43:37', '2023-06-10 06:43:37'),
(35, 'C027', 'Hobi dalam bidang fotografi', '2023-06-10 06:43:52', '2023-06-10 06:43:52'),
(36, 'C028', 'Senang menggambar dan menciptakan sesuatu', '2023-06-10 06:44:03', '2023-06-10 06:44:03'),
(37, 'C029', 'Menyukai pelajaran geografi daripada matematika', '2023-06-10 06:44:17', '2023-06-10 06:44:17'),
(38, 'C030', 'Senang membuat coretan-coretan di kertas', '2023-06-10 06:44:29', '2023-06-10 06:44:29'),
(39, 'C031', 'Ketika membaca majalah, lebih suka melihat gambar-gambarnya daripada membaca teksnya', '2023-06-10 06:44:43', '2023-06-10 06:44:43'),
(40, 'C032', 'Mahir membangun konstruksi tiga dimensi seperti lego', '2023-06-10 06:44:56', '2023-06-10 06:44:56'),
(41, 'C033', 'Lebih mudah belajar dengan gambar daripada dengan teks', '2023-06-10 06:45:08', '2023-06-10 06:45:08'),
(42, 'C034', 'Menyukai pelajaran seni rupa', '2023-06-10 06:45:20', '2023-06-10 06:45:20'),
(43, 'C035', 'Menata ulang ruang adalah hal menyenangkan', '2023-06-10 06:45:38', '2023-06-10 06:45:38'),
(44, 'C036', 'Dapat dengan mudah mambayangkan bagaimana penampakan suatu benda dilihat dari berbagai sisi', '2023-06-10 06:46:06', '2023-06-10 06:46:06'),
(45, 'C037', 'Senang mendengarkan musik dan radio', '2023-06-10 06:46:20', '2023-06-10 06:46:20'),
(46, 'C038', 'Cenderung bersenandung ketika sedang melakukan aktivitas', '2023-06-10 06:46:33', '2023-06-10 06:46:33'),
(47, 'C039', 'Memiliki suara yang merdu', '2023-06-10 06:46:46', '2023-06-10 06:46:46'),
(48, 'C040', 'Bisa memainkan salah satu alat musik dengan baik', '2023-06-10 06:47:13', '2023-06-10 06:47:13'),
(49, 'C041', 'Suka mendengarkan musik sambil belajar atau sambil membaca buku', '2023-06-10 06:47:26', '2023-06-10 06:47:26'),
(50, 'C042', 'Jika harus mengingat sesuatu, mencoba untuk membuat irama tentang hal tersebut', '2023-06-10 06:47:46', '2023-06-10 06:47:46'),
(51, 'C043', 'Menikmati berbagai macam gaya musik', '2023-06-10 06:47:59', '2023-06-10 06:47:59'),
(52, 'C044', 'Apabila mendengarkan suatu karya musik satu atau dua kali, dapat menyanyikannya kembali dengan cukup baik', '2023-06-10 06:48:16', '2023-06-10 06:48:16'),
(53, 'C045', 'Jika sesuatu rusak dan tidak berfungsi, cenderung mengetuk-ngetuk jari membentuk suatu irama sambil mencari jalan keluar', '2023-06-10 06:48:28', '2023-06-10 06:48:28'),
(54, 'C046', 'Lebih bersemangat ketika musik dimainkan', '2023-06-10 06:48:38', '2023-06-10 06:48:38'),
(55, 'C047', 'Tahu apabila ada nada musik yang sumbang', '2023-06-10 06:48:49', '2023-06-10 06:48:49'),
(56, 'C048', 'Terkadang berjalan kaki sambil melantunkan lagu', '2023-06-10 06:49:16', '2023-06-10 06:49:16'),
(57, 'C049', 'Olahraga merupakan suatu hobi', '2023-06-10 06:49:28', '2023-06-10 06:49:28'),
(58, 'C050', 'Menyukai kegiatan-kegiatan seperti menjahit dan membuat bentuk-bentuk', '2023-06-10 06:49:44', '2023-06-10 06:49:44'),
(59, 'C051', 'Penting untuk menyentuh benda yang baru ditemukan untuk melengkapi informasi mengenai benda tersebut', '2023-06-10 06:50:24', '2023-06-10 06:50:24'),
(60, 'C052', 'Tidak dapat duduk diam dalam waktu yang lama', '2023-06-10 06:50:38', '2023-06-10 06:50:38'),
(61, 'C053', 'Selalu menggunakan gerak tangan atau bahasa tubuh lain ketika berbicara dengan orang lain', '2023-06-10 06:50:57', '2023-06-10 06:50:57'),
(62, 'C054', 'Pernah mempunyai prestasi yanng cukup menonjol di salah satu atau lebih cabang olahraga', '2023-06-10 06:51:11', '2023-06-10 06:51:11'),
(63, 'C055', 'Menikmati kegiatan yang menantang bahaya atau pengalaman fisik yang menegangkan', '2023-06-10 06:51:26', '2023-06-10 06:51:26'),
(64, 'C056', 'Suka pekerjaan yang melibatkan keterampilan tangan', '2023-06-10 06:51:46', '2023-06-10 06:51:46'),
(65, 'C057', 'Jika sesuatu rusak dan tidak berfungsi, cenderung memisahkan setiap bagian lalu menggabungkannya kembali', '2023-06-10 06:51:58', '2023-06-10 06:51:58'),
(66, 'C058', 'Harus mempraktikan sesuatu keterampilan yang baru, tidak sekedar membaca atau melihat', '2023-06-10 06:52:10', '2023-06-10 06:52:10'),
(67, 'C059', 'Gagasan terbaik biasanya muncul ketika jalan-jalan atau joging atau saat terlibat kegiatan fisik lainnya', '2023-06-10 06:52:23', '2023-06-10 06:52:23'),
(68, 'C060', 'Ikut sekurang-kurangnya satu kegiatan olahraga atau kegiatan fisik secara teratur', '2023-06-10 06:52:36', '2023-06-10 06:52:36'),
(69, 'C061', 'Mampu bergaul baik dengan orang lain', '2023-06-10 06:52:56', '2023-06-10 06:52:56'),
(70, 'C062', 'Senang berkumpul dan berorganisasi', '2023-06-10 06:53:14', '2023-06-10 06:53:14'),
(71, 'C063', 'Mempunyai beberapa teman dekat', '2023-06-10 06:53:25', '2023-06-10 06:53:25'),
(72, 'C064', 'Suka untuk mengajar orang lain tentang hal-hal yang dipelajari', '2023-06-10 06:53:37', '2023-06-10 06:53:37'),
(73, 'C065', 'Senang bekerja sama dalam kelompok', '2023-06-10 06:53:48', '2023-06-10 06:53:48'),
(74, 'C066', 'Sering didatangi orang untuk dimintai nasehat atau saran, baik di sekolah maupun di lingkungan tempat tinggal', '2023-06-10 06:54:02', '2023-06-10 06:54:02'),
(75, 'C067', 'Jika harus mengingat sesuatu akan meminta seseorang untuk menguji', '2023-06-10 06:54:15', '2023-06-10 06:54:15'),
(76, 'C068', 'Dalam berargumentasi, cenderung meminta bantuan teman atau pihak- pihak yang memiliki otoritas (ahli) dalam bidang tersebut', '2023-06-10 06:54:30', '2023-06-10 06:54:30'),
(77, 'C069', 'Senang terlibat dalam kegiatan sosial yang berkaitan dengan organisasi sekolah atau lingkungan tempat tinggal', '2023-06-10 06:54:50', '2023-06-10 06:54:50'),
(78, 'C070', 'Orang sering menunjuk sebagai pemimpin', '2023-06-10 06:54:59', '2023-06-10 06:54:59'),
(79, 'C071', 'Ketika sedang ada masalah, cenderung meminta bantuan kepada orang lain daripada berusaha menyelesaikan masalah itu sendirian', '2023-06-10 06:55:16', '2023-06-10 06:55:16'),
(80, 'C072', 'Lebih suka permainan bersama untuk mengisi waktu luang dari pada hiburan bersifat individual seperti main game', '2023-06-10 06:55:28', '2023-06-10 06:55:28'),
(81, 'C073', 'Suka mengerjakan sesuatu sendirian tanpa ada gangguan orang lain', '2023-06-10 06:55:40', '2023-06-10 06:55:40'),
(82, 'C074', 'Memiliki buku harian atau catatan pribadi untuk menuliskan kehidupan pribadi', '2023-06-10 06:55:51', '2023-06-10 06:55:51'),
(83, 'C075', 'Mampu belajar dari kegagalan dan keberhasilan yang pernah di alami', '2023-06-10 06:56:04', '2023-06-10 06:56:04'),
(84, 'C076', 'Tidak suka keramaian', '2023-06-10 06:56:17', '2023-06-10 06:56:17'),
(85, 'C077', 'Tahu kelebihan dan kekurangan diri sendiri', '2023-06-10 06:56:30', '2023-06-10 06:56:30'),
(86, 'C078', 'Memiliki tekad yang kuat, mandiri dan berpendirian kuat (tidak mudah ikut-ikutan orang lain)', '2023-06-10 06:56:48', '2023-06-10 06:56:48'),
(87, 'C079', 'Jika harus mengingat sesuatu, cenderung menutup mata dan merasakan situasi yang sedang terjadi', '2023-06-10 06:57:00', '2023-06-10 06:57:00'),
(88, 'C080', 'Lebih memilih menghabiskan akhir pekan sendirian dari pada menghabiskan waktu bersama teman', '2023-06-10 06:57:23', '2023-06-10 06:57:23'),
(89, 'C081', 'Jika sesuatu rusak dan tidak berfungsi, akan mempertimbangkan apakah benda tersebut layak untuk diperbaiki', '2023-06-10 06:57:40', '2023-06-10 06:57:40'),
(90, 'C082', 'Menganggap sebagai orang yang mandiri', '2023-06-10 06:57:51', '2023-06-10 06:57:51'),
(91, 'C083', 'Memiliki tujuan-tujuan penting dalam hidup, yang dipikirkan secara teratur', '2023-06-10 06:58:02', '2023-06-10 06:58:02'),
(92, 'C084', 'Memiliki hobi atau minat khusus yang disimpan untuk diri sendiri', '2023-06-10 06:58:13', '2023-06-10 06:58:13'),
(93, 'C085', 'Sangat memperhatikan sekeliling dan apa yang sedang terjadi di sekitar', '2023-06-10 06:58:25', '2023-06-10 06:58:25'),
(94, 'C086', 'Senang berjalan-jalan di hutan (atau taman) dan melihat-lihat pohon serta bunga', '2023-06-10 06:58:41', '2023-06-10 06:58:41'),
(95, 'C087', 'Senang berkebun', '2023-06-10 06:58:51', '2023-06-10 06:58:51'),
(96, 'C088', 'Mempunyai minat cukup besar pada alam, ekologi, tanaman atau binatang', '2023-06-10 06:59:03', '2023-06-10 06:59:03'),
(97, 'C089', 'Ketika dewasa, ingin pergi dari kota yang ramai ke tempat yang masih alamiah untuk menikmati alam', '2023-06-10 06:59:14', '2023-06-10 06:59:14'),
(98, 'C090', 'Suka berkelana, hiking, atau sekedar jalan-jalan di alam terbuka', '2023-06-10 06:59:26', '2023-06-10 06:59:26'),
(99, 'C091', 'Senang mempelajari nama-nama makhluk hidup di lingkungan, seperti bunga dan pohon', '2023-06-10 06:59:41', '2023-06-10 06:59:41'),
(100, 'C092', 'Dalam berargumentasi, cenderung membandingkan lawan dengan seseorang atau sesuatu yang pernah dibaca atau dengar lalu bereaksi', '2023-06-10 06:59:56', '2023-06-10 06:59:56'),
(101, 'C093', 'Jika sesuatu rusak dan tidak berfungsi, akan memperhatikan sekeliling untuk melihat apa yang bisa ditemukan untuk memperbaikinya', '2023-06-10 07:00:43', '2023-06-10 07:00:43'),
(102, 'C094', 'Mampu mengerjakan dengan baik tugas atau kegiatan yang berkaitan dengan sistem kehidupan (biologi, ilmu alam)', '2023-06-10 07:01:28', '2023-06-10 07:01:28'),
(103, 'C095', 'Cukup fasih menjelaskan perbedaan jenis pohon atau jenis flora dan fauna', '2023-06-10 07:01:39', '2023-06-10 07:01:39'),
(104, 'C096', 'Memiliki hewan peliharaan yang bermacam-macam atau setidaknya dua jenis hewan peliharaan dan mempunyai kebun', '2023-06-10 07:01:50', '2023-06-10 07:01:50'),
(105, 'C097', 'Menyukai pembahasan tentang kehidupan', '2023-06-10 07:02:00', '2023-06-10 07:02:00'),
(106, 'C098', 'Agama adalah hal yang penting', '2023-06-10 07:02:14', '2023-06-10 07:02:14'),
(107, 'C099', 'Menikmati jika melihat karya seni', '2023-06-10 07:02:26', '2023-06-10 07:02:26'),
(108, 'C100', 'Relaksasi dan meditasi latihan yang bermanfaat', '2023-06-10 07:02:43', '2023-06-10 07:02:43'),
(109, 'C101', 'Suka mengunjungi situs alam', '2023-06-10 07:03:00', '2023-06-10 07:03:00'),
(110, 'C102', 'Menikmati membaca filsuf kuno dan modern', '2023-06-10 07:03:14', '2023-06-10 07:03:14'),
(111, 'C103', 'Belajar hal-hal baru lebih mudah ketika memahaminya', '2023-06-10 07:03:28', '2023-06-10 07:03:28'),
(112, 'C104', 'Ingin mengetahui apakah ada bentuk-bentuk lain dari kehidupan di alam semesta', '2023-06-10 07:03:39', '2023-06-10 07:03:39'),
(113, 'C105', 'Mempelajari sejarah dan budaya kuno membantu memberi suatu pandangan yang nyata', '2023-06-10 07:03:51', '2023-06-10 07:03:51'),
(114, 'C106', 'Hobi membaca buku sejarah', '2023-06-10 07:04:02', '2023-06-10 07:04:02'),
(115, 'C107', 'Cukup fasih dalam menjelaskan budaya kuno', '2023-06-10 07:04:19', '2023-06-10 07:04:19'),
(116, 'C108', 'Mempunyai minat cukup besar dalam mempelajari sejarah', '2023-06-10 07:04:30', '2023-06-10 07:04:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

-- CREATE TABLE `failed_jobs` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
--   `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
--   `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
--   `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
--   `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- -- --------------------------------------------------------

-- --
-- -- Struktur dari tabel `intelligences`
-- --

-- CREATE TABLE `intelligences` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `intelligences`
--

INSERT INTO `intelligences` (`id`, `kode`, `jenis`, `prodi`, `created_at`, `updated_at`) VALUES
(5, 'I001', 'Kecerdasan Linguistik-Verbal', 'Ilmu Perpustakaan,Ilmu Komunikasi,Bahasa dan Sastra,Ilmu Hubungan Internasional,Ilmu Hukum,Ilmu Politik', '2023-05-29 20:59:03', '2023-05-29 20:59:03'),
(6, 'I002', 'Kecerdasan Logika-Matematik', 'Statistika,Administrasi Negara,Akuntansi,Ilmu Ekonomi,Pendidikan Matematika,Ilmu Fisika,Ilmu Kimia,Teknik Informatika,Sistem Informasi', '2023-06-10 06:25:37', '2023-06-10 06:25:37'),
(7, 'I003', 'Kecerdasan Spasial-Visual', 'Seni Rupa,Teknik Arsitektur,Planologi,Teknik Sipil', '2023-06-10 06:27:51', '2023-06-10 06:27:51'),
(8, 'I004', 'Kecerdasan Ritmik-Musik', 'Seni Musik', '2023-06-10 06:28:16', '2023-06-10 06:28:16'),
(9, 'I005', 'Kecerdasan Kinestetik', 'Kedokteran Gigi,Kebidanan,Seni Tari,PJKR,Teknik Mesin', '2023-06-10 06:29:37', '2023-06-10 06:29:37'),
(10, 'I006', 'Kecerdasan Interpersonal', 'Ilmu Sosiologi,PGPAUD,PGSD,Psikologi,Kedokteran,Ilmu Keperawatan,Kesehatan Masyarakat,Antropologi', '2023-06-10 06:31:27', '2023-06-10 06:31:27'),
(11, 'I007', 'Kecerdasan Intrapersonal', 'Ilmu Agama,Administrasi Niaga', '2023-06-10 06:32:18', '2023-06-10 06:32:18'),
(12, 'I008', 'Kecerdasan Naturalis', 'Kedokteran Hewan,Perikanan,Peternakan,Ilmu Biologi,Pertanian', '2023-06-10 06:34:01', '2023-06-10 06:34:01'),
(13, 'I009', 'Kecerdasan Eksistensial', 'Ilmu Filsafat,Ilmu Sejarah', '2023-06-10 06:34:31', '2023-06-10 06:34:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `knowledge`
--

-- CREATE TABLE `knowledge` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `ciri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `knowledge`
--

INSERT INTO `knowledge` (`id`, `ciri`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'C001', 'I001', '2023-06-03 00:34:00', '2023-06-03 00:55:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

-- CREATE TABLE `migrations` (
--   `id` int(10) UNSIGNED NOT NULL,
--   `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `batch` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- CREATE TABLE `password_reset_tokens` (
--   `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

-- CREATE TABLE `personal_access_tokens` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `tokenable_id` bigint(20) UNSIGNED NOT NULL,
--   `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
--   `last_used_at` timestamp NULL DEFAULT NULL,
--   `expires_at` timestamp NULL DEFAULT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `studies`
--

-- CREATE TABLE `studies` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(15, 'Ilmu Ekonomi', 'Lorem ipsum dolor', '2023-05-29 20:56:32', '2023-05-29 20:56:32'),
(16, 'Pendidikan Matematika', 'Lorem ipsum dolor', '2023-06-10 06:23:42', '2023-06-10 06:23:42'),
(17, 'Ilmu Fisika', 'Lorem ipsum dolor', '2023-06-10 06:24:01', '2023-06-10 06:24:01'),
(18, 'Ilmu Kimia', 'Lorem ipsum dolor', '2023-06-10 06:24:17', '2023-06-10 06:24:17'),
(19, 'Teknik Informatika', 'Lorem ipsum dolor', '2023-06-10 06:24:27', '2023-06-10 06:24:27'),
(20, 'Sistem Informasi', 'Lorem ipsum dolor', '2023-06-10 06:24:37', '2023-06-10 06:24:37'),
(21, 'Seni Rupa', 'Lorem ipsum dolor', '2023-06-10 06:26:34', '2023-06-10 06:26:34'),
(22, 'Teknik Arsitektur', 'Lorem ipsum dolor', '2023-06-10 06:26:42', '2023-06-10 06:26:42'),
(23, 'Planologi', 'Lorem ipsum dolor', '2023-06-10 06:26:52', '2023-06-10 06:26:52'),
(24, 'Teknik Sipil', 'Lorem ipsum dolor', '2023-06-10 06:27:06', '2023-06-10 06:27:06'),
(25, 'Seni Musik', 'Lorem ipsum dolor', '2023-06-10 06:27:18', '2023-06-10 06:27:18'),
(26, 'Kedokteran Gigi', 'Lorem ipsum dolor', '2023-06-10 06:28:31', '2023-06-10 06:28:31'),
(27, 'Kebidanan', 'Lorem ipsum dolor', '2023-06-10 06:28:39', '2023-06-10 06:28:39'),
(28, 'Seni Tari', 'Lorem ipsum dolor', '2023-06-10 06:28:51', '2023-06-10 06:28:51'),
(29, 'PJKR', 'Lorem ipsum dolor', '2023-06-10 06:28:59', '2023-06-10 06:28:59'),
(30, 'Teknik Mesin', 'Lorem ipsum dolor', '2023-06-10 06:29:06', '2023-06-10 06:29:06'),
(31, 'Ilmu Sosiologi', 'Lorem ipsum dolor', '2023-06-10 06:29:56', '2023-06-10 06:29:56'),
(32, 'PGPAUD', 'Lorem ipsum dolor', '2023-06-10 06:30:03', '2023-06-10 06:30:03'),
(33, 'PGSD', 'Lorem ipsum dolor', '2023-06-10 06:30:10', '2023-06-10 06:30:10'),
(34, 'Psikologi', 'Lorem ipsum dolor', '2023-06-10 06:30:24', '2023-06-10 06:30:24'),
(35, 'Kedokteran', 'Lorem ipsum dolor', '2023-06-10 06:30:31', '2023-06-10 06:30:31'),
(36, 'Ilmu Keperawatan', 'Lorem ipsum dolor', '2023-06-10 06:30:41', '2023-06-10 06:30:41'),
(37, 'Kesehatan Masyarakat', 'Lorem ipsum dolor', '2023-06-10 06:30:52', '2023-06-10 06:30:52'),
(38, 'Antropologi', 'Lorem ipsum dolor', '2023-06-10 06:31:01', '2023-06-10 06:31:01'),
(39, 'Ilmu Agama', 'Lorem ipsum dolor', '2023-06-10 06:31:44', '2023-06-10 06:31:44'),
(40, 'Administrasi Niaga', 'Lorem ipsum dolor', '2023-06-10 06:31:51', '2023-06-10 06:31:51'),
(41, 'Kedokteran Hewan', 'Lorem ipsum dolor', '2023-06-10 06:32:30', '2023-06-10 06:32:30'),
(42, 'Perikanan', 'Lorem ipsum dolor', '2023-06-10 06:32:43', '2023-06-10 06:32:43'),
(43, 'Peternakan', 'Lorem ipsum dolor', '2023-06-10 06:32:57', '2023-06-10 06:32:57'),
(44, 'Ilmu Biologi', 'Lorem ipsum dolor', '2023-06-10 06:33:07', '2023-06-10 06:33:07'),
(45, 'Pertanian', 'Lorem ipsum dolor', '2023-06-10 06:33:15', '2023-06-10 06:33:15'),
(46, 'Ilmu Filsafat', 'Lorem ipsum dolor', '2023-06-10 06:33:24', '2023-06-10 06:33:24'),
(47, 'Ilmu Sejarah', 'Lorem ipsum dolor', '2023-06-10 06:33:33', '2023-06-10 06:33:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

-- CREATE TABLE `users` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `email_verified_at` timestamp NULL DEFAULT NULL,
--   `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- ALTER TABLE `characteristics`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indeks untuk tabel `failed_jobs`
-- --
-- ALTER TABLE `failed_jobs`
--   ADD PRIMARY KEY (`id`),
--   ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

-- --
-- -- Indeks untuk tabel `intelligences`
-- --
-- ALTER TABLE `intelligences`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indeks untuk tabel `knowledge`
-- --
-- ALTER TABLE `knowledge`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indeks untuk tabel `migrations`
-- --
-- ALTER TABLE `migrations`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indeks untuk tabel `password_reset_tokens`
-- --
-- ALTER TABLE `password_reset_tokens`
--   ADD PRIMARY KEY (`email`);

-- --
-- -- Indeks untuk tabel `personal_access_tokens`
-- --
-- ALTER TABLE `personal_access_tokens`
--   ADD PRIMARY KEY (`id`),
--   ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
--   ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

-- --
-- -- Indeks untuk tabel `studies`
-- --
-- ALTER TABLE `studies`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indeks untuk tabel `users`
-- --
-- ALTER TABLE `users`
--   ADD PRIMARY KEY (`id`),
--   ADD UNIQUE KEY `users_email_unique` (`email`);

-- --
-- -- AUTO_INCREMENT untuk tabel yang dibuang
-- --

-- --
-- -- AUTO_INCREMENT untuk tabel `characteristics`
-- --
-- ALTER TABLE `characteristics`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

-- --
-- -- AUTO_INCREMENT untuk tabel `failed_jobs`
-- --
-- ALTER TABLE `failed_jobs`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

-- --
-- -- AUTO_INCREMENT untuk tabel `intelligences`
-- --
-- ALTER TABLE `intelligences`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

-- --
-- -- AUTO_INCREMENT untuk tabel `knowledge`
-- --
-- ALTER TABLE `knowledge`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- --
-- -- AUTO_INCREMENT untuk tabel `migrations`
-- --
-- ALTER TABLE `migrations`
--   MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

-- --
-- -- AUTO_INCREMENT untuk tabel `personal_access_tokens`
-- --
-- ALTER TABLE `personal_access_tokens`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

-- --
-- -- AUTO_INCREMENT untuk tabel `studies`
-- --
-- ALTER TABLE `studies`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

-- --
-- -- AUTO_INCREMENT untuk tabel `users`
-- --
-- ALTER TABLE `users`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
-- COMMIT;

-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
