-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Machine: 159.253.0.244
-- Genereertijd: 15 okt 2016 om 23:06
-- Serverversie: 5.6.31
-- PHP-versie: 5.5.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `brentca106_ait`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`content_id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Gegevens worden uitgevoerd voor tabel `content`
--

INSERT INTO `content` (`content_id`, `title`, `body`, `created`) VALUES
(1, 'ATV boek over Twitter', '<p>Beste lezers dit is een <strong>titel</strong> van het boek met bijhorende video.&nbsp;Dit is mijn aangepaste versie.&nbsp;Beste lezers dit is een titel van het boek met bijhorende video.&nbsp;Dit is mijn aangepaste versie.&nbsp;Beste lezers dit is een titel van het boek met bijhorende video.&nbsp;Dit is mijn aangepaste versie.&nbsp;Beste lezers dit is een titel van het boek met bijhorende video.&nbsp;Dit is mijn aangepaste versie.&nbsp;Beste lezers dit is een titel van het boek met bijhorende video.&nbsp;Dit is mijn aangepaste versie.</p>\r\n<p>Beste lezers dit is een <strong>titel</strong> van het boek met bijhorende video. <a href="http://www.brentschuddinck.be">Dit is mijn aangepaste versie</a>.&nbsp;Beste lezers dit is een titel van het boek met bijhorende video.&nbsp;Dit is mijn aangepaste versie.&nbsp;Beste lezers dit is een titel van het boek met bijhorende video.&nbsp;Dit is mijn aangepaste versie.&nbsp;Beste lezers dit is een titel van het boek met bijhorende video.&nbsp;Dit is mijn aangepaste versie.&nbsp;Beste lezers dit is een titel van het boek met bijhorende video.&nbsp;Dit is mijn aangepaste versie.</p>\r\n<p><iframe src="//www.youtube.com/embed/Omy25fngoRg" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>\r\n<p>Beste lezers dit is een <strong>titel</strong> van het <em>boek</em> met bijhorende video.&nbsp;Dit is mijn aangepaste versie.&nbsp;Beste lezers dit is een titel van het boek met <a href="http://www.brentschuddinck.be">bijhorende video.</a> Dit is mijn aangepaste versie.&nbsp;Beste lezers dit is een titel van het boek met bijhorende video.&nbsp;Dit is mijn aangepaste versie.&nbsp;Beste lezers dit is een titel van het boek met bijhorende video.&nbsp;Dit is mijn aangepaste versie.&nbsp;Beste lezers dit is een titel van het boek met bijhorende video.&nbsp;Dit is mijn aangepaste versie.</p>\r\n<p>Beste lezers dit is een <strong>titel</strong> van het <em>boek</em> met bijhorende video.&nbsp;Dit is mijn aangepaste versie.&nbsp;Beste lezers dit is een titel van het boek met bijhorende video.&nbsp;Dit is mijn aangepaste versie.&nbsp;Beste lezers dit is een titel van het boek met bijhorende video.&nbsp;Dit is mijn aangepaste versie.&nbsp;Beste lezers dit is een titel van het boek met bijhorende video.&nbsp;Dit is mijn aangepaste versie.&nbsp;Beste lezers dit is een titel van het boek met bijhorende video.&nbsp;Dit is mijn aangepaste versie.</p>\r\n<p style="text-align: right;">&nbsp;</p>', '2016-10-15 12:11:07');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`) VALUES
(1, 'brent@designosource.be', '$2y$12$2//1ycPyfNvzWsGPTOu6UOESZPfB3p9kAOQ/Ltd/p6JI4TabMXbxe'),
(2, 'luc.colemont@yahoo.com', '$2y$12$Y6s35NOmIIevD6Jc1yDWeOkgqPYgSxOCOjA3wJoPxiHoi2ShkMMre');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
