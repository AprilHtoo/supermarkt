-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 jun 2023 om 14:35
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supermarkt`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artikelen`
--

CREATE TABLE `artikelen` (
  `artId` int(11) NOT NULL,
  `levId` int(11) DEFAULT NULL,
  `artOmschrijving` varchar(12) NOT NULL,
  `artInkoop` decimal(2,0) DEFAULT NULL,
  `artVerkoop` decimal(2,0) DEFAULT NULL,
  `artVoorraad` int(11) NOT NULL,
  `artMinVoorraad` int(11) NOT NULL,
  `artMaxVoorraad` int(11) NOT NULL,
  `artLocatie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `artikelen`
--

INSERT INTO `artikelen` (`artId`, `levId`, `artOmschrijving`, `artInkoop`, `artVerkoop`, `artVoorraad`, `artMinVoorraad`, `artMaxVoorraad`, `artLocatie`) VALUES
(1, 1, 'appel', NULL, NULL, 200, 100, 1000, NULL),
(3, 4, 'Worst', NULL, NULL, 15, 100, 300, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `inkooporders`
--

CREATE TABLE `inkooporders` (
  `inkOrdId` int(11) NOT NULL,
  `Artikelen_artId` int(11) NOT NULL,
  `Leveranciers_levId` int(11) NOT NULL,
  `inkOrdDatum` date DEFAULT NULL,
  `inkOrdBestAantal` int(11) DEFAULT NULL,
  `inkOrdStatus` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `inkooporders`
--

INSERT INTO `inkooporders` (`inkOrdId`, `Artikelen_artId`, `Leveranciers_levId`, `inkOrdDatum`, `inkOrdBestAantal`, `inkOrdStatus`) VALUES
(3, 1, 1, '2023-06-20', 100, 1),
(4, 1, 1, '2023-06-21', 200, 1),
(5, 3, 4, '2023-06-21', 300, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klanten`
--

CREATE TABLE `klanten` (
  `klantId` int(11) NOT NULL,
  `klantNaam` varchar(20) DEFAULT NULL,
  `klantEmail` varchar(30) NOT NULL,
  `klantAdres` varchar(30) NOT NULL,
  `klantPostcode` varchar(6) DEFAULT NULL,
  `klantWoonplaats` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `klanten`
--

INSERT INTO `klanten` (`klantId`, `klantNaam`, `klantEmail`, `klantAdres`, `klantPostcode`, `klantWoonplaats`) VALUES
(1, 'haaha', 'test@live.nl', 'test 24', '1234ZA', 'Rotterdam'),
(3, 'test', 'teste@live.nl', 'test', '2348dc', 'RTortder'),
(5, 'Kayra', 'kayra@live.nl', 'kayrahuuis', '2334WE', 'Tilburg'),
(6, 'Hendrick', 'Hendrick@gmail.com', 'Waddenweg 1', '2134WA', 'Scheveningen'),
(7, 'John', 'John@test.com', 'Johnlaan 10', '1234 A', 'Rotterdam'),
(10, 'Bianca', 'Bianca@test.com', 'Biancalaan 364', '1234DR', 'Amsterdam');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leveranciers`
--

CREATE TABLE `leveranciers` (
  `levId` int(11) NOT NULL,
  `levNaam` varchar(15) NOT NULL,
  `levContact` varchar(30) DEFAULT NULL,
  `levEmail` varchar(30) NOT NULL,
  `levAdres` varchar(30) DEFAULT NULL,
  `levPostcode` varchar(6) DEFAULT NULL,
  `levWoonplaats` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `leveranciers`
--

INSERT INTO `leveranciers` (`levId`, `levNaam`, `levContact`, `levEmail`, `levAdres`, `levPostcode`, `levWoonplaats`) VALUES
(1, 'Pink Lady', 'Grégoire Van den Ostende', 'info@breaking-news.be', 'Louizalaan 367', '1050BE', 'Brussels'),
(4, 'stegeman', 'idk', 'stegeman@test.com', 'Watlan 12', '3241 A', 'Domdorp');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `verkooporders`
--

CREATE TABLE `verkooporders` (
  `verOrdId` int(11) NOT NULL,
  `Klanten_klantId` int(11) NOT NULL,
  `Artikelen_artId` int(11) NOT NULL,
  `verOrdDatum` date DEFAULT NULL,
  `verOrdBestAantal` int(11) DEFAULT NULL,
  `verOrdStatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `verkooporders`
--

INSERT INTO `verkooporders` (`verOrdId`, `Klanten_klantId`, `Artikelen_artId`, `verOrdDatum`, `verOrdBestAantal`, `verOrdStatus`) VALUES
(3, 3, 1, '2023-05-31', 10, 3),
(8, 1, 1, '2023-06-07', 12, 2),
(10, 6, 1, '2023-06-07', 123, 1),
(11, 1, 1, '2023-06-13', 123, 1),
(12, 6, 1, '2023-06-13', 555, 2),
(13, 7, 1, '2023-06-20', 55, 1),
(15, 7, 1, '2023-06-21', 10, 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `artikelen`
--
ALTER TABLE `artikelen`
  ADD PRIMARY KEY (`artId`),
  ADD UNIQUE KEY `artId_UNIQUE` (`artId`),
  ADD KEY `levId_idx` (`levId`);

--
-- Indexen voor tabel `inkooporders`
--
ALTER TABLE `inkooporders`
  ADD PRIMARY KEY (`inkOrdId`,`Artikelen_artId`,`Leveranciers_levId`),
  ADD UNIQUE KEY `inkOrdId_UNIQUE` (`inkOrdId`),
  ADD KEY `fk_Inkoop Orders_Leveranciers1_idx` (`Leveranciers_levId`),
  ADD KEY `fk_Inkoop Orders_Artikelen1_idx` (`Artikelen_artId`);

--
-- Indexen voor tabel `klanten`
--
ALTER TABLE `klanten`
  ADD PRIMARY KEY (`klantId`);

--
-- Indexen voor tabel `leveranciers`
--
ALTER TABLE `leveranciers`
  ADD PRIMARY KEY (`levId`),
  ADD UNIQUE KEY `levId_UNIQUE` (`levId`);

--
-- Indexen voor tabel `verkooporders`
--
ALTER TABLE `verkooporders`
  ADD PRIMARY KEY (`verOrdId`,`Klanten_klantId`,`Artikelen_artId`),
  ADD UNIQUE KEY `verOrdId_UNIQUE` (`verOrdId`),
  ADD KEY `fk_Verkooporders_Artikelen_idx` (`Artikelen_artId`),
  ADD KEY `fk_Verkooporders_Klanten1_idx` (`Klanten_klantId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `artikelen`
--
ALTER TABLE `artikelen`
  MODIFY `artId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `inkooporders`
--
ALTER TABLE `inkooporders`
  MODIFY `inkOrdId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `klanten`
--
ALTER TABLE `klanten`
  MODIFY `klantId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `leveranciers`
--
ALTER TABLE `leveranciers`
  MODIFY `levId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `verkooporders`
--
ALTER TABLE `verkooporders`
  MODIFY `verOrdId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `artikelen`
--
ALTER TABLE `artikelen`
  ADD CONSTRAINT `levId` FOREIGN KEY (`levId`) REFERENCES `leveranciers` (`levId`);

--
-- Beperkingen voor tabel `inkooporders`
--
ALTER TABLE `inkooporders`
  ADD CONSTRAINT `fk_Inkoop Orders_Artikelen1` FOREIGN KEY (`Artikelen_artId`) REFERENCES `artikelen` (`artId`),
  ADD CONSTRAINT `fk_Inkoop Orders_Leveranciers1` FOREIGN KEY (`Leveranciers_levId`) REFERENCES `leveranciers` (`levId`);

--
-- Beperkingen voor tabel `verkooporders`
--
ALTER TABLE `verkooporders`
  ADD CONSTRAINT `fk_Verkooporders_Artikelen` FOREIGN KEY (`Artikelen_artId`) REFERENCES `artikelen` (`artId`),
  ADD CONSTRAINT `fk_Verkooporders_Klanten1` FOREIGN KEY (`Klanten_klantId`) REFERENCES `klanten` (`klantId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
