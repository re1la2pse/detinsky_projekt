-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vytvořeno: Ned 17. led 2016, 12:54
-- Verze serveru: 5.6.20
-- Verze PHP: 5.5.15

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
(1, 'media/img/fotogalerie/nahledy/1.jpg', 'media/img/fotogalerie/fotky/1.jpg', 1, 0),
(2, 'media/img/fotogalerie/nahledy/2.JPG', 'media/img/fotogalerie/fotky/2.JPG', 1, 3),
(3, 'media/img/fotogalerie/nahledy/3.JPG', 'media/img/fotogalerie/fotky/3.JPG', 1, 2),
(4, 'media/img/fotogalerie/nahledy/4.JPG', 'media/img/fotogalerie/fotky/4.JPG', 1, 4),
(5, 'media/img/fotogalerie/nahledy/5.JPG', 'media/img/fotogalerie/fotky/5.JPG', 1, 5),
(6, 'media/img/fotogalerie/nahledy/6.JPG', 'media/img/fotogalerie/fotky/6.JPG', 1, 6),
(7, 'media/img/fotogalerie/nahledy/7.JPG', 'media/img/fotogalerie/fotky/7.JPG', 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=3 ;

--
-- Vypisuji data pro tabulku `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(2, 'admin', 'admin');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
