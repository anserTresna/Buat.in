-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2023 pada 10.20
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buatin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_08_160255_create_product_table', 1),
(6, '2022_12_11_070651_create_checkout_table', 1),
(7, '2022_12_24_151427_create_profil_table', 1),
(8, '2022_12_26_055522_create_role_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `nama`, `harga`, `detail`, `gambar`, `created_at`, `updated_at`) VALUES
(10, 'Akad Only', 'Rp.5.500.000', 'Include : - Mini Dekorasi - Mixed Flower - Fresh Bouquet - Set Kursi akad & meja - Karpet - Make up & Wardrobe -Lighting', 'gambarproduk/UT0ymTANIdNozeSbolffPPZBtctvGkV4RaNqR9aC.jpg', NULL, NULL),
(11, 'Rumahan Me & You', 'Rp.16.000.000', 'Include : - Dekorasi 6 meter - Mixed Flower - Hand Bouquet - Mini Garden - Set Kursi akad & meja - Gate masuk Pelaminan - Karpet jalan - Make up & Wardrobe -Lighting - Tenda Ekslusif -Photoghrapper', 'gambarproduk/PjQTlD7qlfTkAxz7jmzppuyItvRGoSXRCr1pAMhO.jpg', NULL, NULL),
(13, 'Rumahan Gold', 'Rp.26.000.000', 'Include : - Dekorasi 8 meter - Fresh Flower - Hand Bouquet - Mini Garden - Set Kursi akad & meja - Lorong - Welcom sign -Gate masuk - Make up & Wardrobe -MC -Tim WO - Tenda 2 set -Photoghrapper & Cinematik', 'gambarproduk/h1neSY1S5yF5roBixXoPJFRX5gkYpaXEOnTA7jX3.jpg', NULL, NULL),
(14, 'Rumahan Silver', 'Rp 21.000.000', 'Include : - Mini Dekorasi - Mixed Flower - Fresh Bouquet - Set Kursi akad & meja - Karpet - Make up & Wardrobe -Lighting', 'gambarproduk/6f330psafWyYVgWmTeilmeHg6sodzu6DMLGlniQI.jpg', NULL, NULL),
(15, 'Rumahan Platinum', 'Rp. 31.000.000', 'Include : - Dekorasi 8 meter - Mixed Flower - Hand Bouquet - Mini Garden - Set Kursi akad & meja - Photobooth - Gate masuk Pelaminan - Karpet jalan - Make up & Wardrobe -Lighting - Tenda serut 2 set full tirai -Photoghraper', 'gambarproduk/3D3qHU6VW3CWUOUdr3tKAoSQsQwFkwh2AYGxwQX2.jpg', NULL, NULL),
(16, 'Engagement', 'Rp.1.500.00', 'include: Mini Dekorasi, mixed flower, set kursi 6 unit, karpet, lightimg', 'gambarproduk/jwjcR6tG5H4iITjLHEGG2leOrPFhHP8hWqfFkBVA.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `email` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'jaya', 'jaya@gmail.com', NULL, '$2y$10$3.sAuzDYRSE9NC7iEXxQz.U//oD7wq/w2N.vb6AkayxEX/.DjAOtK', 'seller', NULL, '2023-01-04 20:59:42', '2023-01-04 21:00:28'),
(4, 'ririn', 'ririnrahayu@gmail.com', NULL, '$2y$10$gIu.4mB3wE8vkJ89jou9aulyL2wXNHGXJc3DC8FQ5GeVhA77RUkhG', 'user', NULL, '2023-01-04 21:32:57', '2023-01-04 21:32:57'),
(5, 'muhammad', 'muhammad@gmail.com', NULL, '$2y$10$emsp11/vTBqW3YGbLohcc.F7TL5dLc41pEdug1v8UHcr4Ufe4C8N6', 'user', NULL, '2023-01-04 21:42:56', '2023-01-04 21:42:56'),
(7, 'azzahra', 'azzahra@gmail.com', NULL, '$2y$10$M7HCovwRfgpxm6z80l3nrOA9Kd0mxX502sbEotwWvmhOR4kHzIAHa', 'user', NULL, '2023-01-04 21:54:31', '2023-01-04 21:54:31'),
(9, 'lifah', 'lifah@gmail.com', NULL, '$2y$10$0gLnv0YmFGUfjGOpL1V/uuE6m2alrqoqBXmE5.gcBAawE7bbYX9eG', 'user', NULL, '2023-01-04 22:26:20', '2023-01-04 22:26:20'),
(10, 'lorem lorem', 'lorem@gmail.com', NULL, '$2y$10$pGRYVg8k1SBA9Qh6gh7pnOMsTUAO4h9hXWvLsgB.a9P8giEo3j4Nu', 'user', NULL, '2023-01-04 22:38:01', '2023-01-04 22:38:01'),
(13, 'admin', 'admin@gmail.com', NULL, '$2y$10$TQ/bmTTmXrId5dxplJYNtO8lpIgtMRr6junXPHkzWcvCB7o6wd3T.', 'admin', NULL, '2023-04-10 00:53:52', '2023-04-10 00:53:52'),
(14, 'seller', 'seller@gmail.com', NULL, '$2y$10$m52QU1cx5BINS2vP0I2rs.xa6K8IvfaqDot3LfzQBspDRFkoAFXpK', 'seller', NULL, '2023-04-10 01:05:02', '2023-04-10 01:06:24'),
(15, 'tresna', 'tresna@gmail.com', NULL, '$2y$10$MrcTIc.nF3t3Gs5qFEOvOOx9wTpoF865PP5HQKMdIq7RR75F/C4Ru', 'user', NULL, '2023-04-10 01:09:59', '2023-04-10 01:09:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
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
-- AUTO_INCREMENT untuk tabel `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
