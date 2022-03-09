-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2022 pada 14.05
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
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `admin_role_id`, `username`, `fullname`, `email`, `password`, `token`, `created_at`, `updated_at`) VALUES
(1, 1, 'jkautzer', 'Autumn Thiel', 'ricardo.damore@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BX5w9Ao0KyYyzZSwwUGp6RiJzu3JP0AjLeKdiVAMKoLDWab6Mj', '2022-03-04 02:33:40', '2022-03-04 02:33:40'),
(2, 1, 'vdoyle', 'Dr. Weston Daniel Jr.', 'esta.shields@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tiK0TEUx91OulCENsKpmH7QrOFmAZU06fJo2zpkJoZeRQK8zYL', '2022-03-04 02:33:40', '2022-03-04 02:33:40'),
(3, 1, 'ykautzer', 'Leo Hermann Jr.', 'jkonopelski@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wckqdcIznnI8SIdryYXEvzQa2yc2hWcWcB8pKz6G3FneNI4kQ5', '2022-03-04 02:33:40', '2022-03-04 02:33:40'),
(4, 1, 'gjacobs', 'Dr. Lauren Heidenreich', 'cmurray@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5suCFKMbizTTu8JeHiuoFHK3IFvGUTlVgkg1LlkKXoNqFIqaeT', '2022-03-04 02:33:41', '2022-03-04 02:33:41'),
(5, 1, 'runolfsdottir.kory', 'Prof. Kieran Olson Sr.', 'qpowlowski@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WVEdpAAKNFQdnJbMtNJzwl1pmprXIOXU53I2SDecpjyQfgYEMM', '2022-03-04 02:33:41', '2022-03-04 02:33:41'),
(6, 1, 'liza.mosciski', 'Dr. Amely Feest', 'rosie.little@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'B8tYcMMoJTGNEFVL7KdJ9dxJV4vJh2xWS1MsHLpaxSalzI8QPm', '2022-03-04 02:33:41', '2022-03-04 02:33:41'),
(7, 1, 'ccasper', 'Morgan Carter', 'constance14@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rwvXVXDh0y0OdkU5QSb7NZdOddpXIZUbWBWdL1i7v3WgaIwiOn', '2022-03-04 02:33:41', '2022-03-04 02:33:41'),
(8, 1, 'okon.jerrod', 'Sebastian Runolfsdottir', 'lance74@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'q7bQtWGNqaPS1WmYQH1UuZOaI1AEeKPLn44Z7K7rDU73sXnjgM', '2022-03-04 02:33:41', '2022-03-04 02:33:41'),
(9, 1, 'kemmer.andres', 'Chance Gutkowski', 'oreichel@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'F60y2jHe4Noeok3UnhhEug2c54ZpUqEXdBqY6V1ZMlkNHqJs6j', '2022-03-04 02:33:41', '2022-03-04 02:33:41'),
(10, 1, 'jschowalter', 'Emiliano Sipes', 'vivienne.schneider@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JXiakiS1hidl1oGNcIzdrLkRqFIhYcLhMIr168T2N5euJUEAjJ', '2022-03-04 02:33:41', '2022-03-04 02:33:41'),
(11, 2, 'helloirfanaditya', 'Irfan Aditya', 'helloirfanaditya@gmail.com', '$2y$10$OkV.4tN/U7zTTCRnZm1thOOdnDKeg1s2t30I9RRmlOqXrcv3ZMENu', '1Ydv5HXLVxvyeyehlTy8hrXnHBWVDfXnwaun9CWzTdv7zTOGiH', '2022-03-07 01:20:35', '2022-03-07 01:30:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `roles`, `created_at`, `updated_at`) VALUES
(1, 'Admin Master', '2022-03-04 02:30:26', '2022-03-04 02:30:26'),
(2, 'Administrator', '2022-03-04 02:30:34', '2022-03-04 02:30:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `collections`
--

CREATE TABLE `collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `collection_category_id` bigint(20) UNSIGNED NOT NULL,
  `collection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `collections`
--

INSERT INTO `collections` (`id`, `collection_category_id`, `collection`, `url_link`, `image`, `description`, `view`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gajah Madaaaa', 'https://opensea.io/assets/0x892848074ddea461a15f337250da3ce55580ca85/5171', 'gajah-madaaaazmv36wrbev.png', '<p>Trained in everything from packet sniffing to ray casting to sample slicing, these TPL spies are able to record and recreate any situation they witness, anywhere in the metaverse. However, their bulky, beeping gear tends to make it easy to catch them looking over your shoulder.</p>', 0, '2022-03-07 03:55:31', '2022-03-08 06:05:13'),
(3, 5, 'Azuki #9572', 'https://opensea.io/assets/0xed5af388653567af2f388e6224dc7c4b3241c544/9572', 'azuki-9572wfy4itauub.png', '<p>Created by&nbsp;</p>', 0, '2022-03-08 06:04:49', '2022-03-08 06:04:49'),
(4, 1, 'Azuki #9016', 'https://opensea.io/assets/0xed5af388653567af2f388e6224dc7c4b3241c544/9016', 'azuki-9016fv7a1st5en.png', '<p>Created by&nbsp;<a href=\"https://opensea.io/TeamAzuki?tab=created\">TeamAzuki</a></p>', 0, '2022-03-08 06:06:26', '2022-03-08 06:06:26'),
(5, 1, 'Azuki #6574', 'https://opensea.io/assets/0xed5af388653567af2f388e6224dc7c4b3241c544/6574', 'azuki-6574ffk0iqbcqu.png', '<p>Created by&nbsp;<a href=\"https://opensea.io/TeamAzuki?tab=created\">TeamAzuki</a></p>\r\n\r\n<p>&nbsp;</p>', 0, '2022-03-09 05:21:32', '2022-03-09 05:21:32'),
(6, 2, 'Azuki #5059', 'https://opensea.io/assets/0xed5af388653567af2f388e6224dc7c4b3241c544/5059', 'azuki-5059hwwrpeucwd.png', '<p>https://opensea.io/assets/0xed5af388653567af2f388e6224dc7c4b3241c544/5059</p>', 0, '2022-03-09 05:22:03', '2022-03-09 05:22:03'),
(7, 3, 'Azuki #4752', 'https://opensea.io/assets/0xed5af388653567af2f388e6224dc7c4b3241c544/4752', 'azuki-4752qmt0p4lqhj.png', '<p>https://opensea.io/assets/0xed5af388653567af2f388e6224dc7c4b3241c544/4752</p>', 0, '2022-03-09 05:23:06', '2022-03-09 05:23:06'),
(8, 4, 'Azuki #9024', 'https://opensea.io/assets/0xed5af388653567af2f388e6224dc7c4b3241c544/9024', 'azuki-9024qf11gkkkqo.png', '<p>https://opensea.io/assets/0xed5af388653567af2f388e6224dc7c4b3241c544/9024</p>', 0, '2022-03-09 05:23:49', '2022-03-09 05:23:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `collection_categories`
--

CREATE TABLE `collection_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `collection_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `collection_categories`
--

INSERT INTO `collection_categories` (`id`, `collection_category`, `created_at`, `updated_at`) VALUES
(1, 'Pahlawan', '2022-03-07 03:33:01', '2022-03-08 00:57:51'),
(2, 'Spirituals', '2022-03-07 03:33:12', '2022-03-07 03:33:12'),
(3, 'Senjata', '2022-03-07 03:33:22', '2022-03-07 03:33:22'),
(4, 'Jimat', '2022-03-07 03:33:30', '2022-03-07 03:33:30'),
(5, 'Mantra', '2022-03-07 03:33:40', '2022-03-07 03:33:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `title`, `image`, `date`, `place`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Event 1', 'event-1anzndzvd1x.png', '2022-03-16 18:47:00', 'Indonesia, Jakarta', '<p><br />\r\n<strong>Disebutkan awal mula kerajaan Majapahit berdiri adalah setelah runtuhnya kerajaan Singasari akibat pemberontakan Jayakatwang pada 1292 masehi.<br />\r\nKeponakan Kartanegara (raja Singosari yang kalah oleh Jayakatwang) yang terdesak yakni Raden Wijaya kemudian melarikan diri.<br />\r\n&nbsp;Dalam pelariannya ia mendapat bantuan dari seseorang bernama Arya Wiraja. Raden Wijaya kemudian membuat desa kecil di hutan Trowulan dan menamai desa tersebut dengan Majapahit.<br />\r\nPenamaan diambil dari nama buah maja yang tumbuh subur di hutan itu namun memiliki rasa yang pahit, merujuk Historia.</strong></p>\r\n\r\n<p>Perkuat Masing-Masing Jenderal Terbaikmu&nbsp;<br />\r\nJenderal pada game Dinasti Garuda adalah kunci bagi para pemain untuk &nbsp;memenangkan pertempuran mereka. Para pemain akan dapat memperkuat &nbsp;jenderal-jenderal terbaik mereka dengan menambahkan berbagai items &nbsp;seperti senjata, jimat, kitab, kuda, jubah, dan zirah. Item-item yang dapat &nbsp;dipilih untuk memperkuat masing-masing Jenderal akan berjumlah lebih &nbsp;dari 100 items. Setiap items yang ditambahkan pada Jenderal akan &nbsp;mempengaruhi stats mereka pada pertempuran yang akan datang. &nbsp;Terdapat juga spirit yang akan menambah stats keseluruhan dari para &nbsp;jenderal-jenderal terbaikmu.&nbsp;</p>', 'v-sELLPC2aFf0efOH2hQdRnt-sELLPC2aFf0efOH2hQdR1', '2022-03-08 01:44:35', '2022-03-09 05:42:37'),
(3, 'Event 2', 'event-2yzsc5azmuo.png', '2022-03-20 23:31:00', 'Indonesia, Jakarta', '<p><br />\r\n<strong>Disebutkan awal mula kerajaan Majapahit berdiri adalah setelah runtuhnya kerajaan Singasari akibat pemberontakan Jayakatwang pada 1292 masehi.<br />\r\nKeponakan Kartanegara (raja Singosari yang kalah oleh Jayakatwang) yang terdesak yakni Raden Wijaya kemudian melarikan diri.<br />\r\n&nbsp;Dalam pelariannya ia mendapat bantuan dari seseorang bernama Arya Wiraja. Raden Wijaya kemudian membuat desa kecil di hutan Trowulan dan menamai desa tersebut dengan Majapahit.<br />\r\nPenamaan diambil dari nama buah maja yang tumbuh subur di hutan itu namun memiliki rasa yang pahit, merujuk Historia.</strong></p>\r\n\r\n<p>Perkuat Masing-Masing Jenderal Terbaikmu&nbsp;<br />\r\nJenderal pada game Dinasti Garuda adalah kunci bagi para pemain untuk &nbsp;memenangkan pertempuran mereka. Para pemain akan dapat memperkuat &nbsp;jenderal-jenderal terbaik mereka dengan menambahkan berbagai items &nbsp;seperti senjata, jimat, kitab, kuda, jubah, dan zirah. Item-item yang dapat &nbsp;dipilih untuk memperkuat masing-masing Jenderal akan berjumlah lebih &nbsp;dari 100 items. Setiap items yang ditambahkan pada Jenderal akan &nbsp;mempengaruhi stats mereka pada pertempuran yang akan datang. &nbsp;Terdapat juga spirit yang akan menambah stats keseluruhan dari para &nbsp;jenderal-jenderal terbaikmu.&nbsp;</p>', 'event-2y7prsz6gpgobd3axenbh', '2022-03-09 05:27:33', '2022-03-09 05:42:44'),
(4, 'Event 3', 'event-3qro90o5vjq.png', '2022-03-31 22:30:00', 'Indonesia, Jakarta', '<p><br />\r\n<strong>Disebutkan awal mula kerajaan Majapahit berdiri adalah setelah runtuhnya kerajaan Singasari akibat pemberontakan Jayakatwang pada 1292 masehi.<br />\r\nKeponakan Kartanegara (raja Singosari yang kalah oleh Jayakatwang) yang terdesak yakni Raden Wijaya kemudian melarikan diri.<br />\r\n&nbsp;Dalam pelariannya ia mendapat bantuan dari seseorang bernama Arya Wiraja. Raden Wijaya kemudian membuat desa kecil di hutan Trowulan dan menamai desa tersebut dengan Majapahit.<br />\r\nPenamaan diambil dari nama buah maja yang tumbuh subur di hutan itu namun memiliki rasa yang pahit, merujuk Historia.</strong></p>\r\n\r\n<p>Perkuat Masing-Masing Jenderal Terbaikmu&nbsp;<br />\r\nJenderal pada game Dinasti Garuda adalah kunci bagi para pemain untuk &nbsp;memenangkan pertempuran mereka. Para pemain akan dapat memperkuat &nbsp;jenderal-jenderal terbaik mereka dengan menambahkan berbagai items &nbsp;seperti senjata, jimat, kitab, kuda, jubah, dan zirah. Item-item yang dapat &nbsp;dipilih untuk memperkuat masing-masing Jenderal akan berjumlah lebih &nbsp;dari 100 items. Setiap items yang ditambahkan pada Jenderal akan &nbsp;mempengaruhi stats mereka pada pertempuran yang akan datang. &nbsp;Terdapat juga spirit yang akan menambah stats keseluruhan dari para &nbsp;jenderal-jenderal terbaikmu.&nbsp;</p>', 'event-34kyufnk9i6rj1trhlflf', '2022-03-09 05:27:46', '2022-03-09 05:42:51'),
(5, 'Event 5', 'event-5i4ogness7p.png', '2022-03-13 21:34:00', 'Indonesia, Jakarta', '<p><br />\r\n<strong>Disebutkan awal mula kerajaan Majapahit berdiri adalah setelah runtuhnya kerajaan Singasari akibat pemberontakan Jayakatwang pada 1292 masehi.<br />\r\nKeponakan Kartanegara (raja Singosari yang kalah oleh Jayakatwang) yang terdesak yakni Raden Wijaya kemudian melarikan diri.<br />\r\n&nbsp;Dalam pelariannya ia mendapat bantuan dari seseorang bernama Arya Wiraja. Raden Wijaya kemudian membuat desa kecil di hutan Trowulan dan menamai desa tersebut dengan Majapahit.<br />\r\nPenamaan diambil dari nama buah maja yang tumbuh subur di hutan itu namun memiliki rasa yang pahit, merujuk Historia.</strong></p>\r\n\r\n<p>Perkuat Masing-Masing Jenderal Terbaikmu&nbsp;<br />\r\nJenderal pada game Dinasti Garuda adalah kunci bagi para pemain untuk &nbsp;memenangkan pertempuran mereka. Para pemain akan dapat memperkuat &nbsp;jenderal-jenderal terbaik mereka dengan menambahkan berbagai items &nbsp;seperti senjata, jimat, kitab, kuda, jubah, dan zirah. Item-item yang dapat &nbsp;dipilih untuk memperkuat masing-masing Jenderal akan berjumlah lebih &nbsp;dari 100 items. Setiap items yang ditambahkan pada Jenderal akan &nbsp;mempengaruhi stats mereka pada pertempuran yang akan datang. &nbsp;Terdapat juga spirit yang akan menambah stats keseluruhan dari para &nbsp;jenderal-jenderal terbaikmu.&nbsp;</p>', 'event-5wnhsv6h2rapqvjjyr0co', '2022-03-09 05:31:01', '2022-03-09 05:42:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kingdoms`
--

CREATE TABLE `kingdoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kingdoms`
--

INSERT INTO `kingdoms` (`id`, `title`, `period`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Kerajaan Kutai', '200SM - 1000SM', 'kerajaan-kutaiiiiiii123123rf9vt6kjqj.png', '<p>It is a long established fact that a reader will be distracted by the readable c</p>\r\n\r\n<p>ontent of a page when looking at its</p>\r\n\r\n<p>layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;,</p>', '2022-03-07 02:12:37', '2022-03-07 02:57:09'),
(3, 'Kerajaan Tarumanegara', '358M - 669M', 'kerajaan-tarumanegara5qintlfxpl.png', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-03-09 05:25:42', '2022-03-09 05:25:42'),
(4, 'Kerajaan Kediri', '1045M - 1222M', 'kerajaan-kediripzsk66fsda.png', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-03-09 05:26:08', '2022-03-09 05:26:08');

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
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_03_04_092628_create_admin_roles_table', 1),
(4, '2022_03_04_092655_create_admins_table', 1),
(5, '2022_03_07_084910_create_kingdoms_table', 2),
(10, '2022_03_07_102647_create_collection_categories_table', 3),
(11, '2022_03_07_102707_create_collections_table', 3),
(12, '2022_03_08_082100_create_events_table', 4),
(13, '2022_03_08_093921_create_news_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` bigint(20) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `date`, `description`, `view`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'News 1', 'news-1lcd7ap7byj.png', '2022-03-17 17:24:00', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 0, 'news-1ij9efotbywdazcehybfm', '2022-03-08 03:25:37', '2022-03-09 05:28:43'),
(3, 'News 2', 'news-2cskzy86tht.png', '2022-03-22 23:32:00', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 0, 'news-2jigiosoto4dgny3vegji', '2022-03-09 05:28:03', '2022-03-09 05:28:03'),
(4, 'News 3', 'news-3xfuqjjxokv.png', '2022-03-25 19:28:00', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 0, 'news-3h0bdjmxosiheogijsfz0', '2022-03-09 05:28:13', '2022-03-09 05:28:13'),
(5, 'News 4', 'news-4rz6gofu59s.png', '2022-03-24 19:28:00', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 0, 'news-4kyre1m1jnhatyves2gk9', '2022-03-09 05:28:24', '2022-03-09 05:28:24');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_admin_role_id_foreign` (`admin_role_id`);

--
-- Indeks untuk tabel `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collections_collection_category_id_foreign` (`collection_category_id`);

--
-- Indeks untuk tabel `collection_categories`
--
ALTER TABLE `collection_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kingdoms`
--
ALTER TABLE `kingdoms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `collection_categories`
--
ALTER TABLE `collection_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kingdoms`
--
ALTER TABLE `kingdoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_admin_role_id_foreign` FOREIGN KEY (`admin_role_id`) REFERENCES `admin_roles` (`id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `collections`
--
ALTER TABLE `collections`
  ADD CONSTRAINT `collections_collection_category_id_foreign` FOREIGN KEY (`collection_category_id`) REFERENCES `collection_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
