-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 13 Nis 2023, 07:30:00
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tiklamasayisi`
--
CREATE DATABASE IF NOT EXISTS `tiklamasayisi` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tiklamasayisi`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makaleler`
--

DROP TABLE IF EXISTS `makaleler`;
CREATE TABLE IF NOT EXISTS `makaleler` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `makalebasligi` varchar(255) NOT NULL,
  `makaleicerigi` varchar(155) NOT NULL,
  `gösterimsayisi` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `makaleler`
--

INSERT INTO `makaleler` (`id`, `makalebasligi`, `makaleicerigi`, `gösterimsayisi`) VALUES
(1, 'SON DAKİKA | Bağ-Kurluya 5 yıl erken emeklilik! 2008den sonrasını kapsayacak… ', 'Son dakika: 4A ile 4B arasındaki prim farkı bitiyor. 9 bin gün prim şartı 7.200e düşüyor.', 4),
(2, 'Köye inen kurt dehşet saçtı! 1i ağır 4 yaralı', 'Erzurumun Tortum ilçesine bağlı kırsal Kireçli Mahallesinde dehşete düşüren bir olay yaşandı. Köye gelen kurt, ', 1),
(3, 'Darphane den madeni para kararı! 14 yıl sonra ilk kez… Piyasaya sürüldü: 1 TL ve 50 kuruşlar artık… ', 'Darphane, madeni Türk Lirası için 14 yıl sonra ilk kez değişiklik yaptı. Artan maliyetler sonrası madeni 1 lira ve 50 kuruşlarda ağırlık azaltıldı. ', 3),
(4, 'Rıdvan Dilmen Karagümrük Fenerbahçe maçı sonrası canlı yayında çılgına döndü! \"Bu formayı hezimete uğrattı\"', 'Süper Lig\'in 28 inci haftasında heyecan kaldığı yerden devam ediyor.  ', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
