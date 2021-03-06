-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2019 pada 02.44
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sate`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `event` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `location` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `is_active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `user_id`, `event`, `date`, `location`, `address`, `phone`, `is_active`) VALUES
(1, 12, 'Seminar Startup 2019 part 1', '20/04/2020', 'USM', 'Semarang', '081215212066', 0),
(2, 12, 'Seminar Startup 2019 part 2', '20/04/2020', 'Unnes', 'Semarang', '081215212066', 1),
(4, 12, 'Fauza Aulia', '20/04/2019', 'Auditorium Unnes', 'Semarang', '081234567890', 1),
(9, 12, 'Aulia', '22/02/2019', 'UGM', 'Semarang', '081234567890', 1),
(10, 12, 'My Event', '20/04/2021', 'Semarang', 'Jl. Raya Unnes', '4367568762', 1),
(11, 12, 'event 2', '20/04/2019', 'Semarang', 'Jl. Kauman', '081234567890', 1),
(14, 15, 'Event 86', '20/04/2020', 'Semarang', 'Jl. Kauman', '+6281215212066', 1),
(15, 15, 'Kemerdekaan', '17/08/2020', 'Lapangan Merdeka', 'Jl. Lapangan Merdeka', '09876543214', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `id_order` varchar(20) NOT NULL,
  `buyer` varchar(128) NOT NULL,
  `buyer_email` varchar(128) NOT NULL,
  `buyer_phone` varchar(128) NOT NULL,
  `event_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `waiter` varchar(128) NOT NULL,
  `datetime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `id_order`, `buyer`, `buyer_email`, `buyer_phone`, `event_id`, `ticket_id`, `waiter`, `datetime`) VALUES
(1, 'H4QF77', 'FAUZA', 'AA@AA.AA', '081234567890', 2, 1, 'Aa', '20/04/2019'),
(2, 'O-597JM', 'Ahmad Fauza Aulia', 'a_fauza@ymail.com', '+6281215212066', 1, 1, '12', '1560821207'),
(3, 'O-N74W9', 'Fauza Aulia', 'aa@aa.aa', '081234567890', 2, 1, 'Fauza Aulia', '1560821320'),
(4, 'O-2TWU8', 'aa', 'aa@aa.aa', '081215212066', 1, 1, 'Fauza Aulia', '18/06/2019'),
(5, 'O-Q59ID', 'bb', 'bb@ymail.com', '+6281215212066', 1, 1, 'Fauza Aulia', '18/06/2019'),
(6, 'O-LFMZJ', 'Seminar Startup', 'aa@aa.aa', '081215212067', 2, 1, 'aa', '18/06/2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `ticket` varchar(128) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tickets`
--

INSERT INTO `tickets` (`id`, `event_id`, `ticket`, `price`, `total`, `is_active`) VALUES
(1, 2, 'VIP', 50000, 99, 1),
(2, 2, 'Platinum', 200000, 100, 1),
(3, 1, 'VVIP', 300000, 50, 1),
(4, 1, 'GOLD', 200000, 200, 1),
(7, 14, 'Free', 0, 20, 1),
(8, 15, 'FREE', 0, 500, 1),
(9, 14, 'Anak Kampung', 200000, 100, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `parent_id`, `name`, `email`, `phone`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(12, 0, 'Fauza Aulia', 'fauzaauliia@gmail.com', '081215212066', 'F7-02.png', '$2y$10$fnqv3SVJorc7VVXn3bM7t.G3sZnXg4zGPNRnNkU1mV/Db9NKdgbxO', 1, 1, 1556982081),
(15, 0, 'Fauza Aulia', 'exsyezet@gmail.com', '', '4c73cda4757a2467f193bbc3dea08b76.png', '$2y$10$T6qaeSRt9DBe.Itu7Ex/IeslWf5mQCyESIuozf8rmqvfCOjRIpNJm', 2, 1, 1557406219),
(24, 15, 'Fauza Aulia', 'me@fauza.id', '081215212067', 'default.jpg', '$2y$10$rLypUHKWXgA2ov/Y.kHbh.2SjPb1HF54KY92UTMGzpSVEBoLykZ4W', 3, 1, 1559013338),
(25, 15, 'Fauza Aulia', 'gue@fauza.id', '081215212066', 'default.jpg', '$2y$10$wUgOioYStYv9ouhYPMCeb.n60VN4lLdfHoGM/va3ixGKxrWwob8SG', 3, 1, 1559024559),
(30, 12, 'aa', 'aa@aa.aa', '081215212066', 'pp.jpg', '$2y$10$nKvkeTv33fwHuaz7CpffjeBK.FQO25kNKLd2KJ1D3G4ZRa9pt0ryi', 3, 1, 1560781916),
(31, 12, 'bbb', 'bb@ymail.com', '123456789', 'default.jpg', '$2y$10$qq/bo8ArMHmmDQikoGX.oeOaaBiJFzb0KYzH1PrxcTVanKS0YUP2.', 3, 1, 1561535798),
(32, 15, 'cc', 'cc@cc.c', '09876543', 'default.jpg', '$2y$10$Q6CEhGL473FtUPkqQ5g/eejObCk.nS7oeqRbbqqvW1EYPYvwleKTa', 3, 1, 1561536058),
(33, 15, 'dd', 'dd@dd.dd', '09876543456', 'default.jpg', '$2y$10$tjhX34.xgdt.PjWX9qsNQ.oL9RhZWqlfHY3RJ68R1egP3Kt11Gw1i', 3, 1, 1561536114);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_event`
--

CREATE TABLE `user_access_event` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 3),
(8, 1, 2),
(9, 7, 2),
(13, 2, 16),
(17, 7, 17),
(18, 2, 17),
(20, 2, 18),
(27, 3, 2),
(28, 3, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `priority`) VALUES
(1, 'Admin', 1),
(2, 'User', 9),
(3, 'Menu', 8),
(16, 'Events', 5),
(17, 'Tickets', 6),
(18, 'Member', 2),
(20, 'Seller', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(3, 'Seller');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(19, 16, 'Events', 'events', 'far fa-fw fa-calendar-alt', 1),
(21, 17, 'Tickets', 'tickets', 'fas fa-fw fa-ticket-alt', 1),
(22, 1, 'List Member', 'admin/list', 'fas fa-fw fa-users', 1),
(23, 18, 'Dashboard', 'member', 'fas fa-fw fa-tachometer-alt', 1),
(24, 18, 'List Seller', 'member/list', 'fas fa-fw fa-users', 1),
(25, 20, 'Dashboard', 'seller', 'fas fa-fw fa-tachometer-alt', 1),
(26, 20, 'Order', 'seller/order', 'fas fa-fw fa-edit', 1),
(27, 20, 'List Order', 'seller/listorder', 'fas fa-fw fa-list', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_event`
--
ALTER TABLE `user_access_event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `user_access_event`
--
ALTER TABLE `user_access_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
