-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 26. Jul 2017 um 00:58
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
-- Tabellenstruktur für Tabelle `kurse`
--

CREATE TABLE `kurse` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `labor` varchar(255) NOT NULL,
  `beschreibung` longtext NOT NULL,
  `zielgruppe` varchar(255) NOT NULL,
  `grundschule` varchar(255) NOT NULL,
  `foerderschule` varchar(255) NOT NULL,
  `oberschule` varchar(255) NOT NULL,
  `gymnasium` varchar(255) NOT NULL,
  `dauer` varchar(255) NOT NULL,
  `zeitraum` varchar(255) NOT NULL,
  `kosten` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `labore`
--

CREATE TABLE `labore` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `ort` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `biologie` varchar(255) NOT NULL,
  `physik` varchar(255) NOT NULL,
  `chemie` varchar(255) NOT NULL,
  `technikinformatik` varchar(255) NOT NULL,
  `mathematik` varchar(255) NOT NULL,
  `fachuebergreifend` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `labore`
--

INSERT INTO `labore` (`id`, `name`, `ort`, `email`, `telefon`, `website`, `biologie`, `physik`, `chemie`, `technikinformatik`, `mathematik`, `fachuebergreifend`) VALUES
(1, 'Testlabor 2', 'Chemnitz', 'labor2@labor.de', '01725633841', 'http://affenland.de', 'Ja', 'Nein', 'Nein', 'Ja', 'Nein', 'Ja'),
(2, 'Testlabor 3', 'Bautzen', 'labor3@labor.de', '01725633841', 'http://affenland.de', 'Ja', 'Ja', 'Nein', 'Ja', 'Nein', 'Ja'),
(3, 'Testlabor 4', 'Dresden', 'labor4@labor.de', '01725633841', 'http://affenland.de', 'Ja', 'Nein', 'Ja', 'Nein', 'Nein', 'Ja'),
(6, 'Testlabor 5', 'Leipzig', 'labor5@labor.de', '01725633841', 'http://affenland.de', 'Nein', 'Nein', 'Ja', 'Nein', 'Ja', 'Ja');

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
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schuelerlabor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `administrator` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `schuelerlabor`, `administrator`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sven Liebert', 'Kein Schülerlabor', 'Ja', 'svenliebert.dd@gmail.com', '$2y$10$l1nd1ORUHHAyXXo8vOmRe.owA0sMc7RNKsfCZpHVQT5PeF3o50PJa', 'shZSHrTQwqc7Nui45bJpHW3W61MvTv2VJr6iQAdOn0YAaxbo6Mezfcd5V6T0', '2017-06-10 08:14:39', '2017-07-25 20:46:43');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `kurse`
--
ALTER TABLE `kurse`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `labore`
--
ALTER TABLE `labore`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `kurse`
--
ALTER TABLE `kurse`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `labore`
--
ALTER TABLE `labore`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
