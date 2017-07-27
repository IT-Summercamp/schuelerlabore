-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 27. Jul 2017 um 22:56
-- Server-Version: 5.7.19-0ubuntu0.16.04.1
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
-- Tabellenstruktur für Tabelle `fuerlehrer`
--

CREATE TABLE `fuerlehrer` (
  `id` int(11) NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `fuerlehrer`
--

INSERT INTO `fuerlehrer` (`id`, `text`) VALUES
(1, 'Teeext');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fuerschueler`
--

CREATE TABLE `fuerschueler` (
  `id` int(11) NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `fuerschueler`
--

INSERT INTO `fuerschueler` (`id`, `text`) VALUES
(1, 'Teeext');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `impressum`
--

CREATE TABLE `impressum` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `strasse` varchar(255) NOT NULL,
  `plz` varchar(10) NOT NULL,
  `ort` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `impressum`
--

INSERT INTO `impressum` (`id`, `name`, `strasse`, `plz`, `ort`, `email`, `telefon`) VALUES
(1, 'Stadt Dresden', 'Dr.-Külz-Ring 19', '01067', 'Dresden', 'xxx@dresden.de', '035148810002');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kurse`
--

CREATE TABLE `kurse` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `labor` varchar(255) NOT NULL,
  `fach` varchar(255) NOT NULL,
  `beschreibung` longtext NOT NULL,
  `zielgruppe` varchar(255) NOT NULL,
  `primarstufe` varchar(255) NOT NULL,
  `sek1` varchar(255) NOT NULL,
  `sek2` varchar(255) NOT NULL,
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

--
-- Daten für Tabelle `kurse`
--

INSERT INTO `kurse` (`id`, `name`, `labor`, `fach`, `beschreibung`, `zielgruppe`, `primarstufe`, `sek1`, `sek2`, `grundschule`, `foerderschule`, `oberschule`, `gymnasium`, `dauer`, `zeitraum`, `kosten`, `telefon`, `email`, `website`) VALUES
(2, 'Chemielabor', 'solaris', 'Fachübergreifend', 'Chemie, Sachkunde', 'ab Klasse 1', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', '1 bis 5 UE', 'Mo bis Fr, nach Absprache', '1 Euro pro UE', '03714959970', 'jugendwerkstaetten@solaris-fzu.de', 'http://www.solaris-fzu.de'),
(3, 'Werkstatt Umwelt & Technik', 'solaris', 'Fachübergreifend', 'Physik, Sachkunde, WTH', 'ab Klasse 1', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', '1 bis 5 UE', 'M', '1 Euro pro UE', '03714959970', 'jugendwerkstaetten@solaris-fzu.de', 'http://www.solaris-fzu.de'),
(4, 'Wasserprojekttag - 1', 'Aquamundi Schülerlabor', 'Biologie', 'Wassereigenschaften auf der Spur', '2. bis 3. Klasse', 'Ja', 'Nein', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', '3,5 Stunden', 'Montag bis Freitag, nach Terminvereinbarung', 'kostenlos', '03518221169', 'jana.wenke@se-dresden.de', 'http://www.stadtentwaesserung-dresden.de'),
(5, 'Werkstatt Papier & Druck', 'solaris', 'Fachübergreifend', 'Sachkunde, WTH, Kunst, Geschichte', 'ab Klasse 1', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', '1 bis 5 UE', 'Mo bis Fr, nach Absprache', '1 Euro pro UE', '03714959970', 'jugendwerkstaetten@solaris-fzu.de', 'http://www.solaris-fzu.de'),
(6, 'Werkstatt Elektronik & Informatik', 'solaris', 'Fachübergreifend', 'Physik, Informatik, WTH, Sachkunde', 'ab Klasse 1', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', '1 bis 5 UE', 'Mo bis Fr, nach Absprache', '1 Euro pro UE', '03714959970', 'jugendwerkstaetten@solaris-fzu.de', 'http://www.solaris-fzu.de'),
(7, 'Wasserprojekttag - 2', 'Aquamundi Schülerlabor', 'Biologie', 'Verfahren der Wasserreinigung', '3. bis 5. Klasse', 'Ja', 'Ja', 'Nein', 'Ja', 'Nein', 'Ja', 'Ja', '3,5 Stunden', 'Montag bis Freitag, nach Terminvereinbarung', 'kostenlos', '03518221169', 'jana.wenke@se-dresden.de', 'http://www.stadtentwaesserung-dresden.de'),
(8, 'Wasserprojekttag - 3', 'Aquamundi Schülerlabor', 'Biologie', 'verschiedene Untersuchungen beleuchten Einflussfaktoren auf Gewässer', '8. bis 12. Klasse', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Nein', 'Ja', '4 Stunden', 'Montag bis Freitag, nach Terminvereinbarung', 'kostenlos', '03518221169', 'jana.wenke@se-dresden.de', 'http://www.stadtentwaesserung-dresden.de'),
(9, 'Physik und Lasertechnik', 'Schülerlabor Hochschule Mittweida', 'Physik', 'Laserlabyrinth, 3D-Scanner, optische Datenübertragung, Farbmischung, geometrische Optik, LEGO-Michelson-Interferometer', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '0,5 bis 2 Stunden', 'auf Anfrage', 'kostenlos', '03727581180', 'schuelerlabor@hs-mittweida.de', 'http://www.hs-mittweida.de/schuelerlabor'),
(10, 'Lehrplanorientierte Angebote ', 'COM-LAB', 'Biologie', 'Biologie, Biologietechnik', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '2 bis 6 Stunden', 'auf Anfrage', 'je Kurs 4,50 bis 9 Euro pro Person', '03514445700', 'c.seibold@sbgdd.de', 'http://www.sbg-dresden.de'),
(11, 'Fertigungs- und Werkstofftechnik', 'Schülerlabor Hochschule Mittweida', 'Informatik', 'Technik und Konstruktion, Elektronenmikroskop, Beschichten, Stahl härten, Funktion eines Getriebes, virtuelle Welten, Werkstoff - Materialien in mikroskopische Bildern', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '1 bis 8 Stunden', 'auf Anfrage', 'kostenlos', '03727581180', 'schuelerlabor@hs-mittweida.de', 'http://www.hs-mittweida.de/schuelerlabor'),
(12, 'Umweltpädagogischer Unterricht', 'COM-LAB', 'Biologie', 'Abfallwirtschaft, Ressourcenschonung und Wertstoffkreisläufe, Spur des Wassers, Bodenständig, Kreislauf von Papier, Nachwachsende Rohstoffe, Schadstoffvermeidung', 'GS, Sek 1 und 2', 'Ja', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '4 Stunden', 'auf Anfrage', 'kostenlos', '03514445700', 'c.seibold@sbgdd.de', 'http://www.sbg-dresden.de'),
(13, 'Mathematik', 'Schülerlabor Hochschule Mittweida', 'Mathematik', 'Topologie-Polyeder-Dimension, Kombinatorik', 'Sek 2', 'Nein', 'Nein', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '4 Stunden', 'auf Anfrage', 'kostenlos', '03727581180', 'schuelerlabor@hs-mittweida.de', 'http://www.hs-mittweida.de/schuelerlabor'),
(14, 'Expertenvorträge', 'COM-LAB', 'Biologie', 'von Nanobiotechnologie bis hin zu Pharmakogenomik', 'Sek 1 und 2 und Interessierte', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '', 'auf Anfrage', 'kostenlos', '03514445700', 'c.seibold@sbgdd.de', 'http://www.sbg-dresden.de'),
(15, 'Ferienakademie', 'COM-LAB', 'Biologie', 'Biologie, Chemie, Physik und Pharmazie', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '1 Woche', 'Ferien', 'pro Person 115 Euro', '03514445700', 'c.seibold@sbgdd.de', 'http://www.sbg-dresden.de'),
(16, 'Biotechnologie', 'Schülerlabor Hochschule Mittweida', 'Biotechnologie', 'Bakterienidentifikation, Einblick in dein Genom, Zelkultur, DNA-Extraktion', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '2 bis 5 Stunden', 'auf Anfrage', 'kostenlos', '03727581180', 'schuelerlabor@hs-mittweida.de', 'http://www.hs-mittweida.de/schuelerlabor'),
(17, 'Projekttag Energie', 'Schülerlabor Hochschule Mittweida', 'Fachübergreifend', 'Strom aus der Steckdose', 'Sek 1', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', 'Ja', 'Ja', '3,5 bis 4 Stunden', 'auf Anfrage', '2 Euro pro Person', '03727581180', 'schuelerlabor@hs-mittweida.de', 'http://www.hs-mittweida.de/schuelerlabor'),
(18, 'Molekularbiologie-Genetik 2', 'Gläsernes Labor ', 'Biologie', 'großer Labortag', 'Sek 2', 'Nein', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', 'Ja', '5,5 Stunden', 'auf Anfrage', 'pro Person 9 Euro', '0351444560', 'info@sbgdd.de', 'http://www.sbg-dresden.de/glaesernes-labor.html'),
(19, 'Individuell organisierte Labortermine', 'Wunderland Physik', 'Physik', 'Licht, Wärme, Wasser, Luft, Elektrik', '1. bis 4. Klasse', 'Ja', 'Nein', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', '1,5 bis 4 Stunden', 'nach Absprache, bei freien Kapazitäten durchgehend möglich, frühzeitige Anmeldung', 'kostenlos', '037153133575', 'sascha.gruner@physik.tu-chemnitz.de', 'http://www.tu-chemnitz.de/physik/S_Labor'),
(20, 'Molekularbiologie-Genetik 1', 'Gläsernes Labor ', 'Biologie', 'kleiner Labortag ', 'Sek 1', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', 'Ja', 'Ja', '3,5 Stunden', 'auf Anfrage', 'pro Person 5 Euro', '0351444560', 'info@sbgdd.de', 'http://www.sbg-dresden.de/glaesernes-labor.html'),
(21, 'Lehrplanbezogene Schülerexperimente', 'Wunderland Physik', 'Physik', 'Elektrizität, Mechanik, Optik, Wärme, Atomphysik, Modellbildung (Moebius), computergestütztes Messen', '(5.) 6. bis 12. Klasse', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Nein', 'Ja', '1,5 bis 6 Stunden', 'nach Absprache, bei freien Kapazitäten durchgehend möglich, frühzeitige Anmeldung', 'kostenlos', '037153133575', 'sascha.gruner@physik.tu-chemnitz.de', 'http://www.tu-chemnitz.de/physik/S_Labor'),
(22, 'Labortag Chemie - 1', 'Gläsernes Labor ', 'Chemie', 'Duft und Aromen, Biokunststoffe', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Ja', 'Ja', 'Ja', '5 Stunden', 'auf Anfrage', 'pro Person 7 bzw. 8 Euro', '0351444560', 'info@sbgdd.de', 'http://www.sbg-dresden.de/glaesernes-labor.html'),
(23, 'Labortag Chemie - 2', 'Gläsernes Labor ', 'Chemie', 'Wasser', 'max. 24 Personen', 'Ja', 'Ja', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', '2,5 Stunden', 'auf Anfrage', 'pro Person 5 Euro', '0351444560', 'info@sbgdd.de', 'http://www.sbg-dresden.de/glaesernes-labor.html'),
(24, 'Ferienprojekt CSI Dresden', 'Gläsernes Labor', 'Chemie', 'Kriminalistik', '9 bis 12 Jahre ', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', 'Ja', '2 Stunden', '', 'insg. 60 Euro', '0351444560', 'info@sbgdd.de', 'http://www.sbg-dresden.de/glaesernes-labor.html'),
(25, 'Labortag für Sek. I und Sek. II - 1', 'Science meets School', 'Physik', '', 'ab 8. Klasse', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Nein', 'Ja', '4 bis 6 Stunden', 'nach Anmeldung, Die Einzelversuche erfolgen in Kleingruppen zu je 5 Personen. Bei 20 Personen müssen die Themen miteinander kombiniert werden.', 'kostenlos', '03731392730', 'a.wolf@ww.tu-freiberg.de', 'http://www.schuelerlabor.tu-freiberg.de'),
(26, 'Labortag für Sek. I und Sek. II - 2', 'Science meets School', 'Physik', 'mechanische Eigenschaften von Werkstoffen mit Zugversuch und Kerbschlagbiegversuch', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '3 Stunden', 'nach Anmeldung', 'kostenlos', '03731392730', 'a.wolf@ww.tu-freiberg.de', 'http://www.schuelerlabor.tu-freiberg.de'),
(27, 'Labortag für Sek. I und Sek. II - 3', 'Science meets School', 'Physik', 'Reise ins Innere der Werkstoffe mit Probenpräperation sowie Licht- und Rasterelektronenmikroskopie', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '3 Stunden', 'nach Anmeldung', 'kostenlos', '03731392730', 'a.wolf@ww.tu-freiberg.de', 'http://www.schuelerlabor.tu-freiberg.de'),
(28, 'Projektschwerpunkte', 'LernLaborFarbe ', 'Chemie', 'aktuelle farb- und lichtbasierte technische Neuerungen wie OLEDs, Wirkung von Licht und Farbigkeit auf Menschen, Umwelt und Gesellschaft, Synthese und Gewinnung von Farbstoffen, farbtechnische Anwendungen, Charakterisierung von Farbstoffen und Färbeproben mittels moderner Analysemethoden, Nachhaltigkeit', '', 'Nein', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', '', '', '', '035146334984', 'lernlabor-farbe@mailbox.tu-dresden.de', 'http://www.tu-dresden.de/ew/lernlaborfarbe'),
(29, 'Labortag für Sek. I und Sek. II - 4', 'Science meets School', 'Physik', 'Zerstörungsfreie Prüfverfahren mit elektromagnetischem Induktionsverfahren und Ultraschallprüfung', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '3 Stunden', 'nach Anmeldung', 'kostenlos', '03731392730', 'a.wolf@ww.tu-freiberg.de', 'http://www.schuelerlabor.tu-freiberg.de'),
(30, 'Farbe hautnah', 'LernLaborFarbe', 'Chemie', 'Sachunterricht, Werken und Kunst', 'Primarstufe', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'ab 1,5 Stunden', 'auf Anfrage', 'nach Materialverbrauch', '035146334984', 'lernlabor-farbe@mailbox.tu-dresden.de', 'http://www.tu-dresden.de/ew/lernlaborfarbe'),
(31, 'Farbe und Kosmetik', 'LernLaborFarbe ', 'Chemie', 'Chemie, Physik, Biologie, WTH, Kunst', 'Sek 1', 'Nein', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', 'Ja', 'ab 3 Stunden', 'auf Anfrage', 'nach Materialverbrauch', '035146334984', 'lernlabor-farbe@mailbox.tu-dresden.de', 'http://www.tu-dresden.de/ew/lernlaborfarbe'),
(32, 'Labortag für Sek. I und Sek. II - 5', 'Science meets School', 'Physik', 'Formgedächtnislegierungen mit Vortrag und Demonstrationsexperiment sowie der experimentellen Untersuchung des Materials Nitinol', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '3 Stunden', 'nach Anmeldung', 'kostenlos', '03731392730', 'a.wolf@ww.tu-freiberg.de', 'http://www.schuelerlabor.tu-freiberg.de'),
(33, 'Farbe in Wissenschaft und Technik ', 'LernLaborFarbe', 'Chemie', 'Chemie, Physik, Biologie, WTH, Kunst', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', 'ab 3 Stunden', 'auf Anfrage', 'nach Materialverbrauch', '035146334984', 'lernlabor-farbe@mailbox.tu-dresden.de', 'http://www.tu-dresden.de/ew/lernlaborfarbe'),
(34, 'Labortag für Sek. I und Sek. II - 6', 'Science meets School', 'Physik', 'Bionik- Leichtbauprinzipien in der Natur, Licht- und rasterelektronische Untersuchungen von Holz und Seegelstacheln', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '3 Stunden', 'nach Anmeldung', 'kostenlos', '03731392730', 'a.wolf@ww.tu-freiberg.de', 'http://www.schuelerlabor.tu-freiberg.de'),
(35, 'Labortag für Sek 1', 'Schülerlabor Chemie', 'Chemie', 'Experimentieren rund ums Zündholz', 'Sek 1', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', 'Ja', 'Ja', '3 Stunden', 'auf Anfrage', 'kostenlos', '03514623285', 'skinfill@htw-dresden.de', 'http://www.bit.ly/SLChemie'),
(37, 'Projekttag', 'UFZ-Schülerlabor', 'Biologie', 'DNA-Isolierung und Gelektrophorese, Honiguntersuchung im Labor, Erneuerbare Energie - Grätzel- und Brennstoffzelle', 'ab 9. Klasse', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '5 Stunden', 'Di, Mi und Do, nach telefonischer Absprache', 'kostenlos', '03412351845', 'schuelerlabor@ufz.de', 'http://www.ufz-schuelerlabor.de'),
(38, 'Labortag für Sek 1 und 2 - 1', 'Schülerlabor Chemie', 'Chemie', 'Fuselöle in alk. Getränken', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '3 Stunden', 'auf Anfrage', 'kostenlos', '03514623285', 'skinfill@htw-dresden.de', 'http://www.bit.ly/SLChemie'),
(39, 'Labortag für Sek 1 und 2 - 2', 'Schülerlabor Chemie', 'Chemie', 'Extraktion ätherischer Öle', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '3 Stunden', 'auf Anfrage', 'kostenlos', '03514623285', 'skinfill@htw-dresden.de', 'http://www.bit.ly/SLChemie'),
(40, 'Labortag für Sek 1 und 2 - 3', 'Schülerlabor Chemie', 'Chemie', 'Dünnschichtchromatographie von Schmerzmitteln', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '2 Stunden', 'auf Anfrage', 'kostenlos', '03514623285', 'skinfill@htw-dresden.de', 'http://www.bit.ly/SLChemie'),
(41, 'Labortag für Sek 1 und 2 - 4', 'Schülerlabor Chemie', 'Chemie', 'DNA-Isolierung', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '1,5 Stunden', 'auf Anfrage', 'kostenlos', '03514623285', 'skinfill@htw-dresden.de', 'http://www.bit.ly/SLChemie'),
(42, 'Labortag für Sek 2 - 1', 'Schülerlabor Chemie', 'Chemie', 'Aufschluss einer Erzprobe', 'Sek 2', 'Nein', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', 'Ja', '3 Stunden', 'auf Anfrage', 'kostenlos', '03514623285', 'skinfill@htw-dresden.de', 'http://www.bit.ly/SLChemie'),
(43, 'Projekttag: Naturwissenschaft trifft Kunst', 'Lernort Albertinum', 'Fachübergreifend', 'Kunst, Physik, Chemie', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Ja', 'Ja', 'Ja', '3 bis 5 Stunden', 'auf Anfrage', 'pro Person 3 Euro', '035149142000', 'bersucherservice@skd.museum', 'http://www.skd.museum'),
(44, 'Labortag für Sek 2 - 2', 'Schülerlabor Chemie', 'Chemie', 'Komplexsynthesen und Analyse', 'Sek 2', 'Nein', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', 'Ja', '3 Stunden', 'auf Anfrage', 'kostenlos', '03514623285', 'skinfill@htw-dresden.de', 'http://www.bit.ly/SLChemie'),
(45, 'Labortag für Sek 2 - 3', 'Schülerlabor Chemie', 'Chemie', 'Molmassenbestimmung mit Hilfe idealer Gasgleichung', 'Sek 2', 'Nein', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', 'Ja', '1,5 Stunden', 'auf Anfrage', 'kostenlos', '03514623285', 'skinfill@htw-dresden.de', 'http://www.bit.ly/SLChemie'),
(46, 'Labortag für Sek 2 - 4', 'Schülerlabor Chemie', 'Chemie', 'Potentiometrische Titration von Essigsäure und Cola', 'Sek 2', 'Nein', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', 'Ja', '1,5 Stunden', 'auf Anfrage', 'kostenlos', '03514623285', 'skinfill@htw-dresden.de', 'http://www.bit.ly/SLChemie'),
(47, 'Rätselrallye durch das Erlebnisland', 'Erlebnisland Mathematik', 'Mathematik', 'Mathematik', 'Primarstufe', 'Ja', 'Nein', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', '1 Stunde', 'auf Anfrage, Di bis So', 'pro Person 3 Euro', '03514887272', 'service@tsd.de', 'http://www.tsd.de'),
(48, 'Von Formen und Körpern', 'Erlebnisland Mathematik', 'Mathematik', 'Mathematik', 'Sek 1', 'Nein', 'Ja', 'Nein', 'Ja', 'Nein', 'Ja', 'Ja', '1,5 Stunden', 'auf Anfrage, Di bis So', 'pro Person 3 Euro', '03514887272', 'service@tsd.de', 'http://www.tsd.de'),
(49, 'Rechenkunst und Zahlenzauber', 'Erlebnisland Mathematik', 'Mathematik', 'Mathematik', 'Primarstufe', 'Ja', 'Nein', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', '1 Stunde', 'auf Anfrage, Di bis So', 'pro Person 3 Euro', '03514887272', 'service@tsd.de', 'http://www.tsd.de'),
(50, 'Diode, Transisor und Co.', 'Erlebnisland Mathematik', 'Informatik', 'Elektronik', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Ja', 'Ja', 'Ja', '2 Stunden', 'auf Anfrage, Di bis So', '4 Euro pro Person', '03514887272', 'service@tsd.de', 'http://www.tsd.de'),
(51, 'Eine Nasenlänge voraus', 'Erlebnisland Mathematik', 'Fachübergreifend', 'Mathematik, Sachkunde', 'Primarstufe', 'Ja', 'Nein', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', '1 Stunde', 'auf Anfrage, Di bis So', 'pro Person 3 Euro', '03514887272', 'service@tsd.de', 'http://www.tsd.de'),
(52, 'Antike im Albertinum', 'Lernort Albertinum', 'Fachübergreifend', 'Kunst, Deutsch, Geschichte, Latein, Ethik, etc.', 'Primarstufe, Sek 1 und 2', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', '2 Stunden', 'auf Anfrage', 'pro Person 2 Euro', '035149142000', 'bersucherservice@skd.museum', 'http://www.skd.museum'),
(53, 'Gerhard Richter im Albertinum', 'Lernort Albertinum', 'Fachübergreifend', 'Kunst, Deutsch, Mathematik, Ethik, Physik, Musik, etc.', 'Primarstufe, Sek 1 und 2', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', '2 Stunden', 'auf Anfrage', 'pro Person 2 Euro', '035149142000', 'bersucherservice@skd.museum', 'http://www.skd.museum'),
(54, 'Kunst ins Quadrat', 'Lernort Albertinum', 'Fachübergreifend', 'Kunst, Mathemathik, etc.', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Ja', 'Ja', 'Ja', '2 Stunden', 'auf Anfrage', 'pro Person 2 Euro', '035149142000', 'bersucherservice@skd.museum', 'http://www.skd.museum'),
(55, 'Otto Dix im Albertinum', 'Lernort Albertinum', 'Fachübergreifend', 'Kunst, Deutsch, Biologie, etc.', 'Primarstufe, Sek 1 und 2', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', '2 Stunden', 'auf Anfrage', 'pro Person 2 Euro', '035149142000', 'bersucherservice@skd.museum', 'http://www.skd.museum'),
(56, 'Waldspaziergänge', 'Lernort Albertinum', 'Fachübergreifend', 'Kunst, Deutsch, Biologie, etc.', 'Primarstufe, Sek 1 und 2', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', '2 Stunden', 'auf Anfrage', 'pro Person 2 Euro', '035149142000', 'bersucherservice@skd.museum', 'http://www.skd.museum'),
(57, 'Vorbereitungskurse', 'Schülerrechenzentrum', 'Informatik', 'Informatik, Elektronik, Programmierung und Robotersteuerung', 'Sek 1', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', 'Ja', 'Ja', '2 Wochenstunden (Halbjahreskurs)', 'Einzelanmeldung (jeweils 1. Schulwoche pro Halbjahr)', 'pro Person 62,50 Euro', '035148672634', 'info@srz-dresden.de', 'http://www.srz.tu-dresden.de'),
(58, 'Sonderkurse', 'Schülerrechenzentrum', 'Informatik', 'spezielle Thematiken', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '2 Wochenkurs (Jahreskurs)', 'Einzelanmeldung (jeweils 1. Woche des neuen Schuljahres)', 'pro Person 125 Euro', '035148672634', 'info@srz-dresden.de', 'http://www.srz.tu-dresden.de'),
(59, 'Jahreskurse', 'Schülerrechenzentrum', 'Informatik', 'Informatik, Elektronik', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '3 Wochenstunden (Jahreskurs)', 'Einzelanmeldung (jeweils 1. Woche des neuen Schuljahres)', 'pro Person 170 Euro', '035148672634', 'info@srz-dresden.de', 'http://www.srz.tu-dresden.de'),
(60, 'Spezialkurse', 'Schülerrechenzentrum', 'Informatik', 'Vertiefung anspruchsvoller Themen', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', 'nach Absprache', 'Teilnahme am Kurs für im SRZ angemeldete Schüler', 'kostenlos', '035148672634', 'info@srz-dresden.de', 'http://www.srz.tu-dresden.de'),
(61, 'Magnetismus', 'Schülerlabor DeltaX', 'Physik', 'Arten des Magnetismus, Supraleitung', 'Sek 1 und 2 (ab Klasse 10)', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '6 Stunden', '', 'kostenlos', '03512602272', 'deltax@hzdr.de', 'http://www.hzdr.de/deltax'),
(62, 'Ferienangebote 1', 'Schülerlabor DeltaX', 'Physik', 'Astro-Tage im DeltaX', 'ab 16 Jahre', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '3 Tage', 'Winterferien', '', '03512602272', 'deltax@hzdr.de', 'http://www.hzdr.de/deltax'),
(63, 'Ferienangebote 2', 'Schülerlabor DeltaX', 'Physik', 'SommerferienForscherTag', '10 bis 14 Jahre', 'Ja', 'Ja', 'Nein', 'Nein', 'Nein', 'Ja', 'Ja', '1 Tag', 'Sommerferien', '', '03512602272', 'deltax@hzdr.de', 'http://www.hzdr.de/deltax'),
(64, 'Ferienangebote 3', 'Schülerlabor DeltaX', 'Physik', 'DeltaX-Sommerkurs', 'ab 16 Jahre', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '3 Tage', 'Sommerferien', '', '03512602272', 'deltax@hzdr.de', 'http://www.hzdr.de/deltax'),
(65, 'Ferienangebote 4', 'Schülerlabor DeltaX', 'Physik', 'FerienForscherWoche', '12 bis 16 Jahre', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '4 Tage', 'Herbstferien', '', '03512602272', 'deltax@hzdr.de', 'http://www.hzdr.de/deltax'),
(66, 'Licht und Farbe', 'Schülerlabor DeltaX', 'Physik', 'Farbmischung, Spektren', 'Klasse 7 bis 10', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', 'Ja', 'Ja', '5 Stunden', '', 'kostenlos', '03512602272', 'deltax@hzdr.de', 'http://www.hzdr.de/deltax'),
(67, 'Suche nach Licht und Farbe', 'Schülerlabor DeltaX', 'Physik', 'Farbwahrnehmung, leuchtende Körper', 'Klasse 5 bis 6', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', 'Ja', 'Ja', '4 Stunden', '', 'kostenlos', '03512602272', 'deltax@hzdr.de', 'http://www.hzdr.de/deltax'),
(68, 'Radioaktivität und Strahlung', 'Schülerlabor DeltaX', 'Physik', 'Umweltradioaktivität/Strahlenschutz', 'ab Klasse 9/10', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '5 Stunden (Klasse 9/10), 6 Stunden (OS)', '', 'kostenlos', '03512602272', 'deltax@hzdr.de', 'http://www.hzdr.de/deltax'),
(69, 'Schülerforschungstag: Masterclass 1', 'Netzwerk Teilchenwelt', 'Physik', 'Teilchenphysik', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '6 Stunden', 'auf Anfrage', 'kostenlos', '035146332957', 'mail@teilchenwelt.de', 'http://www.teilchenwelt.de'),
(70, 'Kleiner Labortag', 'DLR_School_Lab TU Dresden', 'Physik', 'Physik, Chemie, Biologie, Technik, Verkehr, Baustoffe, Reise ins Flugzeug, Leichtbau, Fügetechniken kleben, Superkondensatoren, Wasserstoff aus Bakterien, Organische Photovoltaik, Strom ernten im Weltraum, Verkehrssteuerung, Energieumwandlung im Dampfkraftwerk, Organische LEDs, Bionik: wasserabweisende Oberflächen', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '3 Stunden', 'Di bis Fr auf Anfrage', 'kostenlos', '03514887262', 'dlr.school.lab@tu-dresden.de', 'http://www.dlr.de/schoollab'),
(71, 'Projektwoche: Astroteilchenphysik', 'Netzwerk Teilchenwelt', 'Physik', 'Astroteilchenphysik', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '5 Tage, insg. 10 Stunden', 'auf Anfrage', 'kostenlos', '035146332957', 'mail@teilchenwelt.de', 'http://www.teilchenwelt.de'),
(72, 'Großer Labortag', 'DLR_School_Lab TU Dresden', 'Physik', 'Physik, Chemie, Biologie, Technik, Verkehr, Baustoffe, Reise ins Flugzeug, Leichtbau, Fügetechniken kleben, Superkondensatoren, Wasserstoff aus Bakterien, Organische Photovoltaik, Strom ernten im Weltraum, Verkehrssteuerung, Energieumwandlung im Dampfkraftwerk', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '6 Stunden', 'Di bis Fr auf Anfrage', 'kostenlos', '03514887262', 'dlr.school.lab@tu-dresden.de', 'http://www.dlr.de/schoollab'),
(73, 'Schülerforschungstag: International Masterclass', 'Netzwerk Teilchenwelt', 'Physik', 'Teilchenphysik', 'Sek 1 und 2', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '8 Stunden', 'jährlich im Frühjahr', 'kostenlos', '035146332956', 'masterclass@physik.tu-dresden.de', 'http://bit.ly/IntMasterclass'),
(74, 'Lebensmittelchemie', 'Gläsernes Labor', 'Chemie', 'Honig, Milch, Cola', 'Sek I und II', 'Nein', 'Ja', 'Ja', 'Nein', 'Ja', 'Ja', 'Ja', '4 Stunden', 'auf Anfrage', 'pro Person 5 Euro', '0351444560', 'info@sbgdd.de', 'http://www.sbg-dresden.de/glaesernes-labor.html'),
(75, 'Schülerforschungstag: Masterclass 2', 'Netzwerk Teilchenwelt', 'Physik', 'Astroteilchenphysik', 'Sek I und II', 'Nein', 'Ja', 'Ja', 'Nein', 'Nein', 'Ja', 'Ja', '6 Stunden', 'auf Anfrage', 'kostenlos', '035146332957', 'mail@teilchenwelt.de', 'http://www.teilchenwelt.de'),
(76, 'Deutsch-tschechische Projekttage', 'Aquamundi Schülerlabor', 'Biologie', 'Wasserprojekttage für deutsche und tschechische Schülerinnen und Schüler mit naturwissenschaftlichen, gesellschaftlichen und künstlerischen Inhalten zu den Themen: Wasser und Leben, Wasserkreisläufe, Wasser und seine Eigenschaften, Wasser und Landschaft, Wasser und seine Nutzung', '3. bis 11. Klasse', 'Ja', 'Ja', 'Ja', 'Ja', 'Nein', 'Ja', 'Ja', '2 Tage à 6 Stunden', 'auf Anfrage', 'kostenlos', '03514943501', 'info@aquamundi.eu', 'http://www.aquamundi.eu/de');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `labore`
--

CREATE TABLE `labore` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `beschreibung` longtext NOT NULL,
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

INSERT INTO `labore` (`id`, `name`, `beschreibung`, `ort`, `email`, `telefon`, `website`, `biologie`, `physik`, `chemie`, `technikinformatik`, `mathematik`, `fachuebergreifend`) VALUES
(10, 'Aquamundi Schülerlabor', 'Das Aquamundi Schülerlabor auf dem Gelände der Kläranlage Dresden-Kaditz bietet großen Praxisbezug zu Wasserthemen und ist Begegnungsstätte für deutsche sowie tschechische Schüler.', 'Dresden', 'info@aquamundi.eu', '03514943501', 'http://www.aquamundi.eu/de', 'Ja', 'Nein', 'Nein', 'Nein', 'Nein', 'Nein'),
(11, 'COM-LAB', 'Das COM-LABBIO bietet die Möglichkeit zur praktischen Auseinandersetzung in Naturwissenschaft und Technik und bereitet auf die Berufsentscheidung vor.', 'Dresden', 'c.seibold@sbgdd.de', '03514445700', 'http://www.sbg-dresden.de', 'Ja', 'Nein', 'Nein', 'Nein', 'Nein', 'Nein'),
(12, 'Gläsernes Labor', 'Das Gläserne Labor bietet die Möglichkeit, unter sachkundiger Anleitung sowohl einfache Experimente als auch anspruchsvolle molekular- und zellbiologische Versuchsreihen durchzuführen.', 'Dresden', 'info@sbgdd.de', '0351444560', 'http://www.sbg-dresden.de/glaesernes-labor.html', 'Ja', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein'),
(14, 'Schülerlabor Chemie', 'Das Schülerlabor Chemie der HTW Dresden bietet neben verschiedensten Laborangeboten auch regelmäßig Experimentalvorlesungen zum Zuschauen und Mitmachen.', 'Dresden', 'skinfill@htw-dresden.de', '03514623285', 'http://www.bit.ly/SLChemie', 'Nein', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein'),
(15, 'Erlebnisland Mathematik', 'Im Dresdner Erlebnisland kann man Mathematik spielerisch erleben und findet auf 1 000 Quadratmetern Ausstellungsfläche über 100 Experimente zum Mitmachen, Nachdenken und Staunen.', 'Dresden', 'service@tsd.de', '03514887272', 'http://www.tsd.de', 'Nein', 'Nein', 'Nein', 'Ja', 'Ja', 'Ja'),
(16, 'DLR_School_Lab TU Dresden', 'Im DLR_School_Lab TU Dresden können sich Schülerinnen und Schüler mit aktuellen Fragestellungen aus den Bereichen Energie und Mobilität vertraut gemacht.', 'Dresden', 'dlr.school.lab@tu-dresden.de', '03514887262', 'http://www.dlr.de/schoollab', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', 'Nein'),
(17, 'Netzwerk Teilchenwelt', 'Das Netzwerk Teilchenwelt bietet Teilchenphysik und Astroteilchenphysik zum Anfassen. Jugendliche erleben hier die Welt von Quarks, Elektronen & Co. hautnah in ihrem Klassenzimmer.', 'Dresden', 'mail@teilchenwelt.de', '035146332957', 'http://www.teilchenwelt.de', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', 'Nein'),
(18, 'Schülerlabor DeltaX', 'Das Schülerlabor DeltaX macht die Forschung am HelmholtzZentrum Dresden-Rossendorf erlebbar und bietet Experimente an, die in dieser Form im Schulunterricht nicht möglich sind.', 'Dresden', 'deltax@hzdr.de', '03512602272', 'http://www.hzdr.de/deltax', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', 'Nein'),
(19, 'Schülerrechenzentrum', 'Das Schülerrechenzentrum der Technischen Universität Dresden (SRZ) ist ein Zentrum der Begabtenförderung für Schüler in den Bereichen Informatik und Elektronik.', 'Dresden', 'info@srz-dresden.de', '035148672634', 'http://www.srz.tu-dresden.de', 'Nein', 'Nein', 'Nein', 'Ja', 'Nein', 'Nein'),
(20, 'Lernort Albertinum', 'Im Lernort Albertinum wird die sinnlich-ästhetische Wahrnehmung der Kinder und Jugendlichen mittels Kunst als auch interdisziplinär über Geistes- und Naturwissenschaft gefördert.', 'Dresden', 'bersucherservice@skd.museum', '035149142000', 'http://www.skd.museum', 'Nein', 'Nein', 'Nein', 'Nein', 'Nein', 'Ja'),
(21, 'UFZ-Schülerlabor', 'Im UFZ-Schülerlabor in Leipzig können Schüler ab der Klassenstufe 9 ihr theoretisches Wissen mit ihren praktischen Fertigkeiten kombinieren und Methoden der aktuellen Umweltforschung testen. Wo werden genetisch veränderte Mikroorganismen zur Wasserkontrolle eingesetzt und wie läuft eine DNA-Analyse ab? Warum stehen Bienen in der Reihenfolge unserer Nutztiere an dritter Stelle und wie tragen sie zur Artenvielfalt bei? Welche Energieträger kommen nach dem Erdöl und wie funktioniert eine Brennstoffzelle? Diese und viele weitere Fragen werden hier geklärt. Ein Tag im Labor gibt Einblicke in den Forscheralltag und eröffnet ganz neue Sichtweisen auf die eigenen Fähigkeiten.', 'Leipzig', 'schuelerlabor@ufz.de', '03412351845', 'http://www.ufz-schuelerlabor.de', 'Ja', 'Nein', 'Nein', 'Nein', 'Nein', 'Nein'),
(22, 'Science meets School', 'Was sind Werkstoffe? Wozu brauchen wir sie? Dies und mehr kann man im Freiberger Schülerlabor erfahren und experimentell selbst Eigenschaften von Materialien überprüfen.', 'Freiberg', 'a.wolf@ww.tu-freiberg.de', '03731392730', 'http://www.schuelerlabor.tu-freiberg.de', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', 'Nein'),
(23, 'Wunderland Physik', 'Das Wunderland Physik bietet Spannendes aus der Welt der Naturwissenschaft en. Experimentiert wird im modernen Praktikumslabor des Institutes für Physik der TU Chemnitz.', 'Chemnitz', 'sascha.gruner@physik.tu-chemnitz.de', '037153133575', 'http://www.tu-chemnitz.de/physik/S_Labor', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein', 'Nein'),
(24, 'Schülerlabor Hochschule Mittweida', 'Klasse Raum statt Klassenraum – in Mittweida werden Schülerinnen und Schülern wissenschaft lich/ technische Experimente mit Hintergrundinformationen aus der Berufswelt und der aktuellen Forschung geboten.', 'Mittweida', 'schuelerlabor@hs-mittweida.de', '03727581180', 'http://www.hs-mittweida.de/schuelerlabor', 'Ja', 'Ja', 'Nein', 'Ja', 'Ja', 'Ja'),
(25, 'solaris', 'Die solaris Jugend- und Umweltwerkstätten in Chemnitz fördern die Auseinandersetzung mit Naturwissenschaft, Technik und Ökologie u. a. durch Experimente, Workshops und vielem mehr. ', 'Chemnitz', 'jugendwerkstaetten@solaris-fzu.de', '03714959970', 'http://www.solaris-fzu.de', 'Nein', 'Nein', 'Nein', 'Nein', 'Nein', 'Ja'),
(26, 'LernLaborFarbe', 'Im LernLaborFarbe können Lernende durch vielfältige Experimente anwendungsorientierte und interdisziplinäre Problemstellungen zu den Themen Farbe und Licht bearbeiten.', 'Dresden', 'lernlabor-farbe@mailbox.tu-dresden.de', '035146334984', 'http://www.tu.dresden.de/ew/lernlaborfarbe', 'Nein', 'Nein', 'Ja', 'Nein', 'Nein', 'Nein');

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

--
-- Daten für Tabelle `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('itsc@itsc.de', '788cc237e14726ccc2efae18eb47f696c1d5843dac85acae8ad86ed9956773d3', '2017-07-27 06:09:00');

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
(1, 'Sven Liebert', 'Kein Schülerlabor', 'Ja', 'svenliebert.dd@gmail.com', '$2y$10$l1nd1ORUHHAyXXo8vOmRe.owA0sMc7RNKsfCZpHVQT5PeF3o50PJa', 'q1pqc6QWn7ha4Dk1IROXu6QWxiUkeB9Fci5eT99igljm3V4zW1hiG1bW7k6K', '2017-06-10 08:14:39', '2017-07-27 17:30:03'),
(21, 'IT-Summercamp', 'Kein Schülerlabor', 'Nein', 'itsc@itsc.de', '$2y$10$zLwkfMn.uZaEx1dVvJtUM.3eUcljTEBKVeKuPm7FH9u71BtnRPNva', 'Y6ak4CYtweGd00q6ZgpNvVRMa7yUzf2krHMOG4hls1VFEJ97QtBbdZA4vTts', '2017-07-25 21:16:26', '2017-07-27 17:25:36'),
(24, 'Luca', 'Kein Schülerlabor', 'Ja', 'luca.roehrborn@googlemail.com', '$2y$10$g6tOCuGgxCLyW/Vw7j5xEe9WVotHILjoj/o6hoEYnldr0vqL6lsCW', 'NdxEZXn1bdia33vKzniihMj5HwZ2lVJoAcqfTNNMvuYMaoe1oErmcbzDDdPG', '2017-07-26 16:24:11', '2017-07-27 09:49:45');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `fuerlehrer`
--
ALTER TABLE `fuerlehrer`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `fuerschueler`
--
ALTER TABLE `fuerschueler`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `impressum`
--
ALTER TABLE `impressum`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `kurse`
--
ALTER TABLE `kurse`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indizes für die Tabelle `labore`
--
ALTER TABLE `labore`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

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
-- AUTO_INCREMENT für Tabelle `fuerlehrer`
--
ALTER TABLE `fuerlehrer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `fuerschueler`
--
ALTER TABLE `fuerschueler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `impressum`
--
ALTER TABLE `impressum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `kurse`
--
ALTER TABLE `kurse`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT für Tabelle `labore`
--
ALTER TABLE `labore`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
