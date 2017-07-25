-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 13. Jul 2017 um 13:42
-- Server-Version: 10.1.21-MariaDB
-- PHP-Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `laravel`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `andereveranstaltungen`
--

CREATE TABLE `andereveranstaltungen` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zeit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ort` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_06_05_182551_create_protokolle_vollversammlungen', 2),
('2017_06_05_182551_create_protokolle_vorstandssitzungen', 2),
('2017_06_06_073619_create_andereveranstaltungen', 2),
('2017_06_06_073619_create_vollversammlungen', 2),
('2017_06_06_073619_create_vorstandssitzungen', 2),
('2017_06_10_120256_schuljahre', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `protokolle_vollversammlungen`
--

CREATE TABLE `protokolle_vollversammlungen` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schuljahr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `protokolle_vorstandssitzungen`
--

CREATE TABLE `protokolle_vorstandssitzungen` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schuljahr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `schuljahre`
--

CREATE TABLE `schuljahre` (
  `id` int(10) UNSIGNED NOT NULL,
  `jahr` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `benutzerrang` int(11) NOT NULL,
  `posten` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `schule`, `email`, `password`, `benutzerrang`, `posten`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sven Liebert', 'Julius-Ambrosius-Hülße Gymnasium', 'sven@ssr-dresden.de', '$2y$10$l1nd1ORUHHAyXXo8vOmRe.owA0sMc7RNKsfCZpHVQT5PeF3o50PJa', 3, 3, 'P9UoHhxqNhQ8Gc2ngQMm82ze8oW0TM398EKSuSkNmoOzEYRnYHCau07wyy74', '2017-06-10 10:14:39', '2017-07-12 13:56:55'),
(2, 'Test', 'Testschule', 'test@test.de', '$2y$10$XISCciCY7DrQTIjegaB2b.29BVZ71bGkWz5bimnzkA/wb3M57nM7y', 1, 0, 'MvrMpt6m0nbZFuOtmaHdFXRPXzhvTP2Yhp6BwA4LgByf7blcJDhMkEoerrdX', '2017-06-24 08:23:40', '2017-07-12 15:37:27');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `vollversammlungen`
--

CREATE TABLE `vollversammlungen` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zeit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ort` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tagesordnung` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `vorstandssitzungen`
--

CREATE TABLE `vorstandssitzungen` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zeit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ort` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tagesordnung` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `andereveranstaltungen`
--
ALTER TABLE `andereveranstaltungen`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indizes für die Tabelle `protokolle_vollversammlungen`
--
ALTER TABLE `protokolle_vollversammlungen`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `protokolle_vorstandssitzungen`
--
ALTER TABLE `protokolle_vorstandssitzungen`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `schuljahre`
--
ALTER TABLE `schuljahre`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indizes für die Tabelle `vollversammlungen`
--
ALTER TABLE `vollversammlungen`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `vorstandssitzungen`
--
ALTER TABLE `vorstandssitzungen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `andereveranstaltungen`
--
ALTER TABLE `andereveranstaltungen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `protokolle_vollversammlungen`
--
ALTER TABLE `protokolle_vollversammlungen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `protokolle_vorstandssitzungen`
--
ALTER TABLE `protokolle_vorstandssitzungen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `schuljahre`
--
ALTER TABLE `schuljahre`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `vollversammlungen`
--
ALTER TABLE `vollversammlungen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `vorstandssitzungen`
--
ALTER TABLE `vorstandssitzungen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
