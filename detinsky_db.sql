-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Čtv 10. bře 2016, 17:12
-- Verze serveru: 5.6.16
-- Verze PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `detinsky_db`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `fotky`
--

CREATE TABLE IF NOT EXISTS `fotky` (
  `id_fotky` int(11) NOT NULL,
  `miniatura` varchar(80) COLLATE utf8_czech_ci DEFAULT NULL,
  `plna` varchar(80) COLLATE utf8_czech_ci DEFAULT NULL,
  `zobrazit` int(11) NOT NULL,
  `razeni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `fotky`
--

INSERT INTO `fotky` (`id_fotky`, `miniatura`, `plna`, `zobrazit`, `razeni`) VALUES
(3, 'media/img/fotogalerie/nahledy/3.JPG', 'media/img/fotogalerie/fotky/3.JPG', 1, 2),
(4, 'media/img/fotogalerie/nahledy/4.JPG', 'media/img/fotogalerie/fotky/4.JPG', 1, 3),
(5, 'media/img/fotogalerie/nahledy/5.JPG', 'media/img/fotogalerie/fotky/5.JPG', 1, 0),
(11, 'media/img/fotogalerie/nahledy/11.JPG', 'media/img/fotogalerie/fotky/11.JPG', 1, 5),
(12, 'media/img/fotogalerie/nahledy/12.JPG', 'media/img/fotogalerie/fotky/12.JPG', 1, 6),
(13, 'media/img/fotogalerie/nahledy/13.JPG', 'media/img/fotogalerie/fotky/13.JPG', 1, 1),
(14, 'media/img/fotogalerie/nahledy/14.JPG', 'media/img/fotogalerie/fotky/14.JPG', 1, 4),
(15, 'media/img/fotogalerie/nahledy/15.JPG', 'media/img/fotogalerie/fotky/15.JPG', 1, 7),
(16, 'media/img/fotogalerie/nahledy/16.JPG', 'media/img/fotogalerie/fotky/16.JPG', 1, 8),
(17, 'media/img/fotogalerie/nahledy/17.JPG', 'media/img/fotogalerie/fotky/17.JPG', 1, 9),
(18, 'media/img/fotogalerie/nahledy/18.JPG', 'media/img/fotogalerie/fotky/18.JPG', 1, 11),
(19, 'media/img/fotogalerie/nahledy/19.JPG', 'media/img/fotogalerie/fotky/19.JPG', 1, 10);

-- --------------------------------------------------------

--
-- Struktura tabulky `rezervace`
--

CREATE TABLE IF NOT EXISTS `rezervace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazev` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `odDatum` date NOT NULL,
  `doDatum` date NOT NULL,
  `email` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `telefon` text COLLATE utf8_czech_ci,
  `pocet_osob` int(11) DEFAULT NULL,
  `typPokoje` int(11) NOT NULL,
  `zaloha` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=14 ;

--
-- Vypisuji data pro tabulku `rezervace`
--

INSERT INTO `rezervace` (`id`, `nazev`, `odDatum`, `doDatum`, `email`, `telefon`, `pocet_osob`, `typPokoje`, `zaloha`) VALUES
(12, 'nová rezervace sdfsdf', '2016-03-17', '2016-03-18', 'mokrusa.p@google.com', '', 0, 2, 1),
(13, 'rezervace malý pokoj', '2016-03-09', '2016-03-11', 'mokrusa.p@google.com', '', 3, 1, 0);

-- --------------------------------------------------------

--
-- Struktura tabulky `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=3 ;

--
-- Vypisuji data pro tabulku `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(2, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
