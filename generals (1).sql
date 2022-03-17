-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2022 pada 13.22
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynasti_garuda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `generals`
--

CREATE TABLE `generals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `generals`
--

INSERT INTO `generals` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(2, 'LOGO_DARK', 'logo-darkkavvfxmyof.png', '2022-03-10 01:51:09', '2022-03-10 01:51:09'),
(3, 'LOGO_LIGHT', 'logo-lighthmeflvuna6.png', '2022-03-10 01:52:31', '2022-03-10 01:52:31'),
(4, 'LOGO_ICON', 'logo-icon1sikpxh5zd.png', '2022-03-10 01:53:44', '2022-03-10 01:53:44'),
(5, 'LOGO_FAVICON', 'logo-faviconqrhi5r0miv.png', '2022-03-10 01:54:48', '2022-03-10 02:23:37'),
(6, 'TITLE', 'Dinasti Garuda', '2022-03-10 01:55:53', '2022-03-10 02:32:01'),
(7, 'APP_URL', 'https://play.google.com/store/apps/details?id=com.NusantaraInteractiveStudio.DinastiGaruda', '2022-03-10 01:56:07', '2022-03-10 01:56:07'),
(8, 'DESCRIPTION', 'Tunjukkan dan Asah Pengetahuanmu serta Bangga dengan sejarah dan budaya yang kita miliki!', '2022-03-10 01:56:16', '2022-03-10 01:56:16'),
(9, 'EMAIL', 'support@dinastigaruda.id', '2022-03-10 01:56:52', '2022-03-10 01:56:52'),
(10, 'PHONE', '(021) 1232 1232', '2022-03-10 01:56:59', '2022-03-10 01:56:59'),
(11, 'YOUTUBE_LINK', 'https://www.youtube.com/watch?v=t09LvIet_vU', '2022-03-13 15:44:18', '2022-03-13 15:44:18'),
(12, 'TITLE_HEADER', '<h2>Main Game sambil mengenal Sejarah Kerajaan-Kerajaan di INDONESIA!&nbsp;</h2>', '2022-03-13 17:30:33', '2022-03-13 17:31:19'),
(13, 'ABOUT', '<h3>Dynasty Garuda is a STRATEGY Game with the initial concept of a Card Battle Game that takes the theme of Majapahit as the opening game to usher in the Vision and Mission of &quot;Mempersatukan Nusantara&quot; in accordance with the Sumpah Palapa.</h3>', '2022-03-13 23:25:59', '2022-03-13 23:27:09'),
(14, 'VISI_PAGE', '<ul>\r\n	<li>\r\n	<h3>Menjadi Provider Platform Games No. 1 di Indonesia yang mengangkat tema budaya, kerajaan dan sejarah Indonesia.</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Menjadi Studio Animasi dengan konten-konten sejarah dan budaya Indonesia.</h3>\r\n	</li>\r\n</ul>', '2022-03-13 23:38:24', '2022-03-13 23:42:02'),
(15, 'MISI_PAGE', '<ul>\r\n	<li>\r\n	<h3>Mengangkat sejarah dan budaya Indonesia lewat Games.</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Mengembangkan banyak Games dengan tema Kerajaan-Kerajaan yang pernah ada di Indonesia.</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Memberikan edukasi sejarah melalui Games.</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Mengembangkan beberapa video dan konten animasi dengan tema budaya dan sejarah Indonesia dengan cara yang keren.</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Mengembangkan Ratusan Games dan Aplikasi dengan unsur Pendidikan yang berkualitas.</h3>\r\n	</li>\r\n</ul>', '2022-03-13 23:39:12', '2022-03-13 23:41:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `generals`
--
ALTER TABLE `generals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `generals`
--
ALTER TABLE `generals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
