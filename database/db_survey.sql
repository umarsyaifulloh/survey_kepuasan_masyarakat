-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 14 Bulan Mei 2022 pada 10.34
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_survey`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-04-08-034303', 'App\\Database\\Migrations\\OPD', 'default', 'App', 1652363950, 1),
(2, '2022-04-08-035758', 'App\\Database\\Migrations\\Role', 'default', 'App', 1652363950, 1),
(3, '2022-04-08-040450', 'App\\Database\\Migrations\\Users', 'default', 'App', 1652363950, 1),
(4, '2022-04-08-040843', 'App\\Database\\Migrations\\Berita', 'default', 'App', 1652363950, 1),
(5, '2022-04-08-041745', 'App\\Database\\Migrations\\Survey', 'default', 'App', 1652363950, 1),
(6, '2022-04-08-041751', 'App\\Database\\Migrations\\Pertanyaan', 'default', 'App', 1652363950, 1),
(7, '2022-04-08-041913', 'App\\Database\\Migrations\\Opsi', 'default', 'App', 1652363950, 1),
(8, '2022-04-08-042052', 'App\\Database\\Migrations\\PertanyaanOpsi', 'default', 'App', 1652363950, 1),
(9, '2022-04-08-042504', 'App\\Database\\Migrations\\Responden', 'default', 'App', 1652363950, 1),
(10, '2022-05-12-133629', 'App\\Database\\Migrations\\RespondenSurvey', 'default', 'App', 1652363950, 1),
(11, '2022-05-12-134500', 'App\\Database\\Migrations\\RespondenPertanyaanOpsiJawaban', 'default', 'App', 1652363950, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_opd`
--

CREATE TABLE `ms_opd` (
  `opd_kode` varchar(20) NOT NULL,
  `opd_nama` varchar(100) NOT NULL,
  `opd_logo` varchar(100) NOT NULL,
  `opd_email` varchar(100) NOT NULL,
  `opd_alamat` varchar(255) DEFAULT NULL,
  `opd_telp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ms_opd`
--

INSERT INTO `ms_opd` (`opd_kode`, `opd_nama`, `opd_logo`, `opd_email`, `opd_alamat`, `opd_telp`) VALUES
('001', 'DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN WONOGIRI (DISKOMINFO)', 'logo1.png', 'diskominfo@wonogirikab.go.id', 'Jln. Kabupaten No. 5, Wonogiri', '(0273)321002'),
('002', 'BADAN KEPEGAWAIAN DAERAH KABUPATEN WONOGIRI (BKD)', 'logo2.png', 'bkd@wonogirikab.go.id', 'Jl. Kabupaten Nomor 5 Wonogiri', '(0273)321002'),
('003', 'BADAN PENGELOLAAN KEUANGAN DAERAH KABUPATEN WONOGIRI (BPKD)', 'logo3.png', 'bkd@wonogirikab.go.id', 'Jl. Raden Mas Said, Wonogiri', '(0273)322804'),
('004', 'INSPEKTORAT WONOGIRI', 'logo4.png', ' inspektorat@wonogirikab.go.id', 'Jl Pemuda I / 55 Wonogiri', '(0273)321138'),
('005', 'DINAS SOSIAL KABUPATEN WONOGIRI (DINSOS)', 'logo5.png', 'dinsos@wonogirikab.go.id', 'Jln. dr. Cipto II No.10, Wonogiri', '(0273)321018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_opsi`
--

CREATE TABLE `ms_opsi` (
  `opsi_id` int(11) UNSIGNED NOT NULL,
  `opsi_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ms_opsi`
--

INSERT INTO `ms_opsi` (`opsi_id`, `opsi_nama`) VALUES
(1, 'Tidak Puas'),
(2, 'Kurang Puas'),
(3, 'Puas'),
(4, 'Sangat Puas'),
(5, 'Tidak Menarik'),
(6, 'Menarik'),
(7, 'Sangat Menarik'),
(8, 'Tidak Setuju'),
(9, 'Setuju'),
(10, 'Sangat Setuju');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_responden`
--

CREATE TABLE `ms_responden` (
  `responden_id` int(11) UNSIGNED NOT NULL,
  `responden_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ms_responden`
--

INSERT INTO `ms_responden` (`responden_id`, `responden_email`) VALUES
(1, 'alexander@gmail.com'),
(2, 'jonathan@gmail.com'),
(3, 'kirigaya@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_role`
--

CREATE TABLE `ms_role` (
  `role_id` int(11) NOT NULL,
  `role_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ms_role`
--

INSERT INTO `ms_role` (`role_id`, `role_nama`) VALUES
(1, 'SuperAdmin'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_users`
--

CREATE TABLE `ms_users` (
  `users_nip` varchar(20) NOT NULL,
  `users_nama` varchar(100) NOT NULL,
  `users_email` varchar(100) NOT NULL,
  `users_password` varchar(255) NOT NULL,
  `users_alamat` varchar(255) NOT NULL,
  `users_image` varchar(255) NOT NULL,
  `users_telp` varchar(50) NOT NULL,
  `users_opd_kode` varchar(20) DEFAULT NULL,
  `users_role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ms_users`
--

INSERT INTO `ms_users` (`users_nip`, `users_nama`, `users_email`, `users_password`, `users_alamat`, `users_image`, `users_telp`, `users_opd_kode`, `users_role_id`) VALUES
('123456700', 'Admin Super', 'adminsuper@gmail.com', '$2y$10$2T.0.q47lsX7KYFOLyq.gOo1dIAfpCP6NXetUl82qIJxwRJOvxHoK', 'Jln. Kabupaten No. 5, Wonogiri', 'users1.png', '1234567889', '001', 1),
('123456789', 'Admin Biasa', 'adminbiasa@gmail.com', '$2y$10$R4HvFaH1T86TXKeJUtKIdul8GIxicQnX8EMwb1LEuCRQe7qrc9Pa.', 'Jln. Kabupaten No. 5, Wonogiri', 'users2.png', '1234567889', '001', 2),
('123456798', 'Dhimas Risang Maulana', 'dhimas@gmail.com', '$2y$10$Wpcz5oqYHBiRIMzXAKAy8edXSbeacfKSUSRCzNv0dAMM12X/34BtG', 'Langenharjo, Grogol, Sukoharjo', 'users3.png', '1234567889', '002', 2),
('123456799', 'MasBag Herlambang', 'masbag@gmail.com', '$2y$10$.StSPIeeN3aUil.l.3p6ju2s.uamCtJadHRadnYP1GF.bFWXiDO6u', 'Langenharjo, Grogol, Sukoharjo', 'users4.png', '1234567889', '003', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_berita`
--

CREATE TABLE `tr_berita` (
  `berita_id` int(11) UNSIGNED NOT NULL,
  `berita_judul` varchar(255) NOT NULL,
  `berita_isi` text NOT NULL,
  `berita_gambar` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(20) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tr_berita`
--

INSERT INTO `tr_berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_gambar`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Berita 1 DISKOMINFO', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et iusto labore sed quas quisquam, laudantium ab est asperiores reprehenderit esse facere cumque voluptatem ipsam quod illum veniam quaerat tenetur eius excepturi omnis sapiente temporibus voluptate? Accusantium excepturi cum molestias? Fugit eveniet earum quod nemo non rem optio amet rerum at!', 'gambar1.jpg', '2022-05-12 09:11:14', '123456789', '2022-05-12 09:11:14', '123456789'),
(2, 'Berita 1 BKD', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea molestias soluta explicabo consectetur natus corporis quibusdam modi adipisci nostrum ipsa! Ipsum repellendus voluptatem similique voluptate fugit et, eum voluptatum sunt quod. Dignissimos repudiandae vero aliquid libero eius eaque omnis commodi aspernatur, dolorem, blanditiis dolores quae, quos exercitationem saepe id. Quo, quia cum illum quod quos ex adipisci accusantium voluptatum nemo!', 'gambar2.jpg', '2022-05-12 09:11:14', '123456798', '2022-05-12 09:11:14', '123456798'),
(3, 'Berita 1 BPKD', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea molestias soluta explicabo consectetur natus corporis quibusdam modi adipisci nostrum ipsa! Ipsum repellendus voluptatem similique voluptate fugit et, eum voluptatum sunt quod. Dignissimos repudiandae vero aliquid libero eius eaque omnis commodi aspernatur, dolorem, blanditiis dolores quae, quos exercitationem saepe id. Quo, quia cum illum quod quos ex adipisci accusantium voluptatum nemo!', 'gambar3.jpg', '2022-05-12 09:11:14', '123456799', '2022-05-12 09:11:14', '123456799');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_pertanyaan`
--

CREATE TABLE `tr_pertanyaan` (
  `pertanyaan_id` int(11) UNSIGNED NOT NULL,
  `pertanyaan_nama` varchar(255) NOT NULL,
  `pertanyaan_survey_id` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(20) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tr_pertanyaan`
--

INSERT INTO `tr_pertanyaan` (`pertanyaan_id`, `pertanyaan_nama`, `pertanyaan_survey_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Pertanyaan 1 Survey SKM DISKOMINFO 1', 1, '2022-05-12 09:11:42', '123456789', '2022-05-12 09:11:42', '123456789'),
(2, 'Pertanyaan 2 Survey SKM DISKOMINFO 1', 1, '2022-05-12 09:11:42', '123456789', '2022-05-12 09:11:42', '123456789'),
(3, 'Pertanyaan 3 Survey SKM DISKOMINFO 1', 1, '2022-05-12 09:11:42', '123456789', '2022-05-12 09:11:42', '123456789'),
(4, 'Pertanyaan 1 Survey SKM BKD', 2, '2022-05-12 09:11:42', '123456798', '2022-05-12 09:11:42', '123456798'),
(5, 'Pertanyaan 2 Survey SKM BKD', 2, '2022-05-12 09:11:42', '123456798', '2022-05-12 09:11:42', '123456798'),
(6, 'Pertanyaan 3 Survey SKM BKD', 2, '2022-05-12 09:11:42', '123456798', '2022-05-12 09:11:42', '123456798');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_pertanyaanopsi`
--

CREATE TABLE `tr_pertanyaanopsi` (
  `pertanyaanopsi_id` int(11) UNSIGNED NOT NULL,
  `pertanyaanopsi_pertanyaan_id` int(11) UNSIGNED DEFAULT NULL,
  `pertanyaanopsi_opsi_id` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tr_pertanyaanopsi`
--

INSERT INTO `tr_pertanyaanopsi` (`pertanyaanopsi_id`, `pertanyaanopsi_pertanyaan_id`, `pertanyaanopsi_opsi_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(2, 1, 2, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(3, 1, 3, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(4, 1, 4, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(5, 2, 5, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(6, 2, 6, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(7, 2, 7, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(8, 3, 8, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(9, 3, 9, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(10, 3, 10, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(11, 4, 1, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(12, 4, 2, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(13, 4, 3, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(14, 4, 4, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(15, 5, 5, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(16, 5, 6, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(17, 5, 7, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(18, 6, 8, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(19, 6, 9, '2022-05-12 09:20:32', '2022-05-12 09:20:32'),
(20, 6, 10, '2022-05-12 09:20:32', '2022-05-12 09:20:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_respondensurvey`
--

CREATE TABLE `tr_respondensurvey` (
  `respondensurvey_id` int(11) UNSIGNED NOT NULL,
  `respondensurvey_responden_id` int(11) UNSIGNED DEFAULT NULL,
  `respondensurvey_survey_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tr_respondensurvey`
--

INSERT INTO `tr_respondensurvey` (`respondensurvey_id`, `respondensurvey_responden_id`, `respondensurvey_survey_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 1, 2),
(5, 2, 2),
(6, 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_rpoj`
--

CREATE TABLE `tr_rpoj` (
  `rpoj_id` int(11) UNSIGNED NOT NULL,
  `rpoj_respondensurvey_id` int(11) UNSIGNED DEFAULT NULL,
  `rpoj_pertanyaanopsi_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tr_rpoj`
--

INSERT INTO `tr_rpoj` (`rpoj_id`, `rpoj_respondensurvey_id`, `rpoj_pertanyaanopsi_id`) VALUES
(1, 1, 4),
(2, 1, 7),
(3, 1, 10),
(4, 2, 4),
(5, 2, 7),
(6, 2, 10),
(7, 3, 4),
(8, 3, 7),
(9, 3, 10),
(10, 4, 11),
(11, 4, 15),
(12, 4, 18),
(13, 5, 11),
(14, 5, 15),
(15, 5, 18),
(16, 6, 11),
(17, 6, 15),
(18, 6, 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_survey`
--

CREATE TABLE `tr_survey` (
  `survey_id` int(11) UNSIGNED NOT NULL,
  `survey_judul` varchar(255) NOT NULL,
  `survey_deskripsi` text NOT NULL,
  `survey_tahun` year(4) NOT NULL,
  `survey_status` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(20) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tr_survey`
--

INSERT INTO `tr_survey` (`survey_id`, `survey_judul`, `survey_deskripsi`, `survey_tahun`, `survey_status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'SURVEI SKM DISKOMINFO 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati natus facilis molestiae maxime perspiciatis amet saepe fuga excepturi sequi necessitatibus.', 2021, 'nonaktif', '2022-05-12 09:11:23', '123456789', '2022-05-12 09:11:23', '123456789'),
(2, 'SURVEI SKM BKD 1  ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quo suscipit obcaecati dignissimos aspernatur ad?', 2022, 'Aktif', '2022-05-12 09:11:23', '123456798', '2022-05-12 09:11:23', '123456798'),
(3, 'SURVEI SKM BPKD 1  ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quo suscipit obcaecati dignissimos aspernatur ad?', 2022, 'Aktif', '2022-05-12 09:11:23', '123456799', '2022-05-12 09:11:23', '123456799');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ms_opd`
--
ALTER TABLE `ms_opd`
  ADD PRIMARY KEY (`opd_kode`);

--
-- Indeks untuk tabel `ms_opsi`
--
ALTER TABLE `ms_opsi`
  ADD PRIMARY KEY (`opsi_id`);

--
-- Indeks untuk tabel `ms_responden`
--
ALTER TABLE `ms_responden`
  ADD PRIMARY KEY (`responden_id`);

--
-- Indeks untuk tabel `ms_role`
--
ALTER TABLE `ms_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indeks untuk tabel `ms_users`
--
ALTER TABLE `ms_users`
  ADD PRIMARY KEY (`users_nip`),
  ADD KEY `ms_users_users_opd_kode_foreign` (`users_opd_kode`),
  ADD KEY `ms_users_users_role_id_foreign` (`users_role_id`);

--
-- Indeks untuk tabel `tr_berita`
--
ALTER TABLE `tr_berita`
  ADD PRIMARY KEY (`berita_id`),
  ADD KEY `tr_berita_created_by_foreign` (`created_by`),
  ADD KEY `tr_berita_updated_by_foreign` (`updated_by`);

--
-- Indeks untuk tabel `tr_pertanyaan`
--
ALTER TABLE `tr_pertanyaan`
  ADD PRIMARY KEY (`pertanyaan_id`),
  ADD KEY `tr_pertanyaan_created_by_foreign` (`created_by`),
  ADD KEY `tr_pertanyaan_updated_by_foreign` (`updated_by`),
  ADD KEY `pertanyaan_survey_id` (`pertanyaan_survey_id`);

--
-- Indeks untuk tabel `tr_pertanyaanopsi`
--
ALTER TABLE `tr_pertanyaanopsi`
  ADD PRIMARY KEY (`pertanyaanopsi_id`),
  ADD KEY `tr_pertanyaanopsi_pertanyaanopsi_pertanyaan_id_foreign` (`pertanyaanopsi_pertanyaan_id`),
  ADD KEY `tr_pertanyaanopsi_pertanyaanopsi_opsi_id_foreign` (`pertanyaanopsi_opsi_id`);

--
-- Indeks untuk tabel `tr_respondensurvey`
--
ALTER TABLE `tr_respondensurvey`
  ADD PRIMARY KEY (`respondensurvey_id`),
  ADD KEY `tr_respondensurvey_respondensurvey_responden_id_foreign` (`respondensurvey_responden_id`),
  ADD KEY `tr_respondensurvey_respondensurvey_survey_id_foreign` (`respondensurvey_survey_id`);

--
-- Indeks untuk tabel `tr_rpoj`
--
ALTER TABLE `tr_rpoj`
  ADD PRIMARY KEY (`rpoj_id`),
  ADD KEY `tr_rpoj_rpoj_respondensurvey_id_foreign` (`rpoj_respondensurvey_id`),
  ADD KEY `tr_rpoj_rpoj_pertanyaanopsi_id_foreign` (`rpoj_pertanyaanopsi_id`);

--
-- Indeks untuk tabel `tr_survey`
--
ALTER TABLE `tr_survey`
  ADD PRIMARY KEY (`survey_id`),
  ADD KEY `tr_survey_created_by_foreign` (`created_by`),
  ADD KEY `tr_survey_updated_by_foreign` (`updated_by`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `ms_opsi`
--
ALTER TABLE `ms_opsi`
  MODIFY `opsi_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `ms_responden`
--
ALTER TABLE `ms_responden`
  MODIFY `responden_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `ms_role`
--
ALTER TABLE `ms_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tr_berita`
--
ALTER TABLE `tr_berita`
  MODIFY `berita_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tr_pertanyaan`
--
ALTER TABLE `tr_pertanyaan`
  MODIFY `pertanyaan_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tr_pertanyaanopsi`
--
ALTER TABLE `tr_pertanyaanopsi`
  MODIFY `pertanyaanopsi_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tr_respondensurvey`
--
ALTER TABLE `tr_respondensurvey`
  MODIFY `respondensurvey_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tr_rpoj`
--
ALTER TABLE `tr_rpoj`
  MODIFY `rpoj_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tr_survey`
--
ALTER TABLE `tr_survey`
  MODIFY `survey_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ms_users`
--
ALTER TABLE `ms_users`
  ADD CONSTRAINT `ms_users_users_opd_kode_foreign` FOREIGN KEY (`users_opd_kode`) REFERENCES `ms_opd` (`opd_kode`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ms_users_users_role_id_foreign` FOREIGN KEY (`users_role_id`) REFERENCES `ms_role` (`role_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tr_berita`
--
ALTER TABLE `tr_berita`
  ADD CONSTRAINT `tr_berita_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `ms_users` (`users_nip`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `tr_berita_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `ms_users` (`users_nip`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tr_pertanyaan`
--
ALTER TABLE `tr_pertanyaan`
  ADD CONSTRAINT `tr_pertanyaan_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `ms_users` (`users_nip`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `tr_pertanyaan_ibfk_1` FOREIGN KEY (`pertanyaan_survey_id`) REFERENCES `tr_survey` (`survey_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `tr_pertanyaan_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `ms_users` (`users_nip`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tr_pertanyaanopsi`
--
ALTER TABLE `tr_pertanyaanopsi`
  ADD CONSTRAINT `tr_pertanyaanopsi_pertanyaanopsi_opsi_id_foreign` FOREIGN KEY (`pertanyaanopsi_opsi_id`) REFERENCES `ms_opsi` (`opsi_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `tr_pertanyaanopsi_pertanyaanopsi_pertanyaan_id_foreign` FOREIGN KEY (`pertanyaanopsi_pertanyaan_id`) REFERENCES `tr_pertanyaan` (`pertanyaan_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tr_respondensurvey`
--
ALTER TABLE `tr_respondensurvey`
  ADD CONSTRAINT `tr_respondensurvey_respondensurvey_responden_id_foreign` FOREIGN KEY (`respondensurvey_responden_id`) REFERENCES `ms_responden` (`responden_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `tr_respondensurvey_respondensurvey_survey_id_foreign` FOREIGN KEY (`respondensurvey_survey_id`) REFERENCES `tr_survey` (`survey_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tr_rpoj`
--
ALTER TABLE `tr_rpoj`
  ADD CONSTRAINT `tr_rpoj_rpoj_pertanyaanopsi_id_foreign` FOREIGN KEY (`rpoj_pertanyaanopsi_id`) REFERENCES `tr_pertanyaanopsi` (`pertanyaanopsi_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `tr_rpoj_rpoj_respondensurvey_id_foreign` FOREIGN KEY (`rpoj_respondensurvey_id`) REFERENCES `tr_respondensurvey` (`respondensurvey_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tr_survey`
--
ALTER TABLE `tr_survey`
  ADD CONSTRAINT `tr_survey_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `ms_users` (`users_nip`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `tr_survey_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `ms_users` (`users_nip`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
