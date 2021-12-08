-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 08. Dez 2021 um 12:52
-- Server-Version: 10.4.21-MariaDB
-- PHP-Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `fswd14_cr12_mount_everest_hikmet_prizreni`
--
CREATE DATABASE IF NOT EXISTS `fswd14_cr12_mount_everest_hikmet_prizreni` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fswd14_cr12_mount_everest_hikmet_prizreni`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `trips`
--

CREATE TABLE `trips` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `lat` decimal(8,6) DEFAULT NULL,
  `lng` decimal(9,6) DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `trips`
--

INSERT INTO `trips` (`id`, `name`, `price`, `description`, `lat`, `lng`, `picture`) VALUES
(1, 'Niagarawaterfall', '500.00', 'Famous, high waterfalls on the border between Canada and the U.S., with guided tours and boat rides', '43.082970', '-79.074110', 'niagara.jpg'),
(2, 'Vltava river', '499.50', 'The city of Prague is not only the capital city of the Czech Republic; it is the largest city in the country and the fourteenth largest in the entire European Union.', '49.533720', '14.157400', 'czechrepublic.jpg'),
(3, 'Cala de Sant Vicent', '490.90', 'Super beautiful bay with crystal clear sea. Great restaurants and hotels. A bay to unwind.', '39.993990', '3.049640', 'ibiza.jpg'),
(4, 'Himalaya', '850.90', 'We stayed there 1 night after visiting the EBC.\r\nI\'m amazed at what the people up there conjure up.', '30.195700', '83.440990', 'himalaya.jpg'),
(5, 'Cinque Terre Italy', '680.90', 'Be inspired and discover new regions, sights and attractions for your holiday in Italy.', '44.204030', '9.699240', 'italy.jpg'),
(6, 'Jablanica Bosnia', '990.90', 'If you think of Bosnia, the country on the Balkan Peninsula probably does not come to mind as a holiday destination at first. And this despite the fact that there are numerous natural beauties and incredible treasures of different cultures to discover in the Balkan state of 3 million inhabitants. ', '43.662110', '17.162780', 'winterbosnia.jpg'),
(7, 'Imatran Kylpylä Spa Finnish', '799.99', 'Dieses Spa-Resort am Saimaa-See ist 1 Gehminute von Saimaa Adventures für Sportaktivitäten und -ausrüstung sowie 14 km von der Kirche der Drei Kreuze entfernt.Die funktionalen Zimmer bieten Fernseher und Minibar sowie kostenloses WLAN. Zimmer mit gehobener Ausstattung haben einen Balkon, während Suiten eine Küche und eine Sauna haben.', '61.215950', '28.727840', 'finnish.jpg'),
(8, 'Mount Everest', '215.00', 'This mountain will teach you a lots of great lessons in life, and one of them is that when you see the peak, it doesn\'t mean that you will always climb higher, as sometimes the mountain will force you to go down many time to reach high levels, and this life as you sometimes go down to go up and high.', '27.989260', '86.925400', 'mountain1.jpg'),
(9, 'Red Mountain USA', '1280.90', 'Mountain is not as red as described. Too much sand. It was too hot due to sun being overhead. Tore up my $300 boots.', '35.524100', '-111.875010', 'redmountain.jpg');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
