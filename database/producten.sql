-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 jan 2020 om 10:12
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `producten`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE `producten` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `discription` varchar(1000) NOT NULL,
  `price` double NOT NULL,
  `img` varchar(1000) NOT NULL,
  `href` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`id`, `title`, `discription`, `price`, `img`, `href`) VALUES
(1, 'Dior Homme', 'Zonnebril BLACKTIE2.0S K', 650, 'https://cdn-1.debijenkorf.nl/web_detail/dior-zonnebril-blacktie2-0s-k/?reference=066/670/13_0666701963200000_pro_flt_frt_01_1108_1528_2125728.jpg', 'producten/1'),
(2, 'Gucci', 'Zonnebril gepolariseerd GG0463S ', 290, 'https://cdn-1.debijenkorf.nl/web_detail/gucci-zonnebril-gepolariseerd-gg0463s/?reference=066/670/13_0666702332500000_pro_flt_frt_01_1108_1528_4009663.jpg', 'producten/2'),
(3, 'Ray-Ban', 'Scuderia Ferrari Collection zonnebril RB3647M', 242, 'https://cdn-1.debijenkorf.nl/web_detail/ray-ban-scuderia-ferrari-collection-zonnebril-rb3647m/?reference=066/670/13_0666702290300000_pro_flt_frt_01_1108_1528_3890471.jpg', 'producten/3');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
