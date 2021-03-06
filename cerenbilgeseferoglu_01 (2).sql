-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Kas 2020, 11:00:15
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cerenbilgeseferoglu_01`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `eser bilgisi`
--

CREATE TABLE `eser bilgisi` (
  `EsISBN` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `EsAdi` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Eserin Adı',
  `EsKayNo` smallint(6) NOT NULL COMMENT 'Kitap Kayıt Numarası\r\n',
  `EsDil` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EsKayTar` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Kitabın Veri Tabanına kaydedildiği tarih'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Esere Ait Özellikler';

--
-- Tablo döküm verisi `eser bilgisi`
--

INSERT INTO `eser bilgisi` (`EsISBN`, `EsAdi`, `EsKayNo`, `EsDil`, `EsKayTar`) VALUES
('9786059503532', 'Çevre imtihanımız: ekoloji bağlamında', 1, 'Türkçe', '2020-11-02 10:56:16'),
('9786058133990', 'Kent ve ekoloji araştırmaları için internetten kamusal veriye ulaşma rehberi 2019', 2, 'Türkçe', '2020-11-02 11:03:57'),
('9789751414137', 'Çevre ve ekoloji', 3, 'Türkçe', '2020-11-02 11:08:22'),
('9786054613878', 'Biyocoğrafya & Bir Paleocoğrafya ve Ekoloji Yaklaşımı', 4, 'Türkçe', '2020-11-02 11:13:52'),
('9789759637705', 'Ekoloji', 5, 'Türkçe', '2020-11-02 11:17:17'),
('9789758109432', 'Ekoloji Terimleri Sözlüğü', 6, 'Türkçe', '2020-11-02 11:19:50'),
('9789759493905', 'Çevre bilim: Ekoloji', 7, 'Türkçe', '2020-11-02 11:21:32'),
('9789759225711', ' Ekoloji, toplum ve siyaset', 8, 'Türkçe', '2020-11-02 11:23:14'),
('9789754831771', 'Ekoloji ve çevre biyolojisi', 9, 'Türkçe', '2020-11-02 11:24:23'),
('9786054445219', 'Çevre sağlığı : (çevre ve ekoloji bağlantılarıyla)', 10, 'Türkçe', '2020-11-02 11:27:19');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yayin bilgisi`
--

CREATE TABLE `yayin bilgisi` (
  `YayıneviAd` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Yayınevinin Adı',
  `YayınTar` year(4) DEFAULT NULL COMMENT 'Yayın Tarihi',
  `YayınYer` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Yayın Yeri',
  `YayıneviNo` int(11) NOT NULL COMMENT 'Yayınevi No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Yayınevine Ait Özellikler';

--
-- Tablo döküm verisi `yayin bilgisi`
--

INSERT INTO `yayin bilgisi` (`YayıneviAd`, `YayınTar`, `YayınYer`, `YayıneviNo`) VALUES
('Araştırma Yayınları', 2019, 'Ankara', 1),
('Ekoloji Kolektifi Derneği', 2019, 'İstanbul', 2),
('Remzi Kitabevi', 2010, 'İstanbul', 3),
('Kriter Basım Yayın Dağıtım', 2015, 'Ankara', 4),
('Başkent Klişe Matbaacılık', 1997, 'Ankara', 5),
('Birleşik Dağıtım', 2000, 'istanbul', 6),
('Gazi Kitabevi', 1999, 'Ankara', 7),
('Odak', 2003, 'Ankara', 8),
('Ege Üniversitesi', 1997, 'İzmir', 9),
('Yazıt Yayıncılık', 2012, 'Ankara', 10);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazar bilgisi`
--

CREATE TABLE `yazar bilgisi` (
  `YazAdı` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `YazSoyad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `YazNo` smallint(11) NOT NULL COMMENT 'Yazara Ait Numara Bilgisi',
  `YazUrl` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Yazar Url'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Yazara ait özellikler';

--
-- Tablo döküm verisi `yazar bilgisi`
--

INSERT INTO `yazar bilgisi` (`YazAdı`, `YazSoyad`, `YazNo`, `YazUrl`) VALUES
('Süleyman ', 'Kaya', 1, NULL),
('Elif ', 'İnce', 2, NULL),
('Mine ', 'Kışlalıoğlu', 3, NULL),
('Murat', 'Türkeş', 4, 'https://www.researchgate.net/profile/Murat_Tuerkes2'),
('Ayşe', 'Boşgelmez', 5, NULL),
('Beyhan ', 'İslam', 6, NULL),
('M. Nihat', 'Şişli', 7, NULL),
('Tuncay', 'Önder', 8, 'https://scholar.google.com.tr/citations?user=j3qWKsYAAAAJ&hl=tr'),
('Ahmet ', 'Kocataş', 9, NULL),
('Çağatay', 'Güler', 10, 'http://www.halksagligi.hacettepe.edu.tr/personel/guler.php');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `eser bilgisi`
--
ALTER TABLE `eser bilgisi`
  ADD PRIMARY KEY (`EsKayNo`);

--
-- Tablo için indeksler `yayin bilgisi`
--
ALTER TABLE `yayin bilgisi`
  ADD PRIMARY KEY (`YayıneviNo`);

--
-- Tablo için indeksler `yazar bilgisi`
--
ALTER TABLE `yazar bilgisi`
  ADD PRIMARY KEY (`YazNo`),
  ADD UNIQUE KEY `YazUrl` (`YazUrl`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `eser bilgisi`
--
ALTER TABLE `eser bilgisi`
  MODIFY `EsKayNo` smallint(6) NOT NULL AUTO_INCREMENT COMMENT 'Kitap Kayıt Numarası\r\n', AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `yayin bilgisi`
--
ALTER TABLE `yayin bilgisi`
  MODIFY `YayıneviNo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Yayınevi No', AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `yazar bilgisi`
--
ALTER TABLE `yazar bilgisi`
  MODIFY `YazNo` smallint(11) NOT NULL AUTO_INCREMENT COMMENT 'Yazara Ait Numara Bilgisi', AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
