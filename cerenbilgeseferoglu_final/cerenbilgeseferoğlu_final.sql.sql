-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Oca 2021, 18:49:57
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
CREATE DATABASE IF NOT EXISTS `cerenbilgeseferoglu_01` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `cerenbilgeseferoglu_01`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `eser`
--

CREATE TABLE `eser` (
  `EsKayNo` smallint(6) NOT NULL COMMENT 'Kitap Kayıt Numarası\r\n',
  `EsISBN` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `EsAdi` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Eserin Adı',
  `EsDil` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EsBasYil` year(4) NOT NULL COMMENT 'Eserin basım yılı bilgisi',
  `EsKayTar` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Kitabın Veri Tabanına kaydedildiği tarih',
  `EsAciklama` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Eser hakkında açıklama',
  `YayineviNo` int(11) NOT NULL COMMENT 'Yayınevi No',
  `YazNo` int(11) NOT NULL COMMENT 'Yazar No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Esere Ait Özellikler';

--
-- Tablo döküm verisi `eser`
--

INSERT INTO `eser` (`EsKayNo`, `EsISBN`, `EsAdi`, `EsDil`, `EsBasYil`, `EsKayTar`, `EsAciklama`, `YayineviNo`, `YazNo`) VALUES
(1, '9786059503532', 'Çevre imtihanımız: ekoloji bağlamında', 'Türkçe', 2019, '2020-11-02 10:56:16', 'Bu kitap, dünyanın en önemli sorunlarından birisi haline gelen çevre problemleriyle Müslüman dünyayı yüzleştirmeyi amaçlamaktadır. ', 2, 2),
(2, '9786058133990', 'Kent ve ekoloji araştırmaları için internetten kamusal veriye ulaşma rehberi 2019', 'Türkçe', 2019, '2020-11-02 11:03:57', 'Bu rehber, internet üzerinden yaşadığı yerle ilgili bilgiye erişmek isteyen yurttaşların ve ekoloji, kent gibi konulara merak duyan ve araştırma yapan, yapmak isteyen herkesin işini kolaylaştırmak için hazırlandı.', 2, 2),
(3, '9789751414137', 'Çevre ve ekoloji', 'Türkçe', 2010, '2020-11-02 11:08:22', 'Çevre ve ekoloji konuları herkesin günlük yaşamını temelden ilgilendiriyor. Bu konularda Türkiye´yi ele alan, özgün ve genel okur kitlesine ulaşabilecek bu kitap yayınlandığı dönemde bir ilkti.  Aziz Nesin’in önsözüyle…', 3, 3),
(4, '9786054613878', 'Biyocoğrafya & Bir Paleocoğrafya ve Ekoloji Yaklaşımı', 'Türkçe', 2015, '2020-11-02 11:13:52', '“Biyocoğrafya, Bir Paleocoğrafya ve Ekoloji Yaklaşımı” başlıklı bu kitabın asıl amacı, “en geniş anlamıyla Coğrafi Bilimler, Biyolojik Bilimler ve Doğa Bilimleri lisans ve lisansüstü öğrencilerinin yanı sıra, konuyla ilgili bilim ve meslek dallarında bilimsel çalışmalar yapan genç akademisyen, uzman ve araştırmacıların, yeryüzündeki organizmaların (hayvanlar, bitkiler, mantarlar, yosunlar, algler, likenler, bakteriler, vb.) populasyon, topluluk ve komünitelerinin (yaşam birliği) coğrafi dağılış desenlerinin ve dinamik özelliklerinin arkasındaki tarihsel, evrimsel ve ekolojik neden, etmen ve süreçlerin ya da düzeneklerin neler olduğunu öğrenmelerini ve bu bilgileri hem doğal ekosistemleri ve biyolojik çeşitliliği anlamak hem de onların korunması amacıyla kullanabilmelerini” sağlamaktır.', 4, 4),
(5, '9789759637705', 'Ekoloji', 'Türkçe', 1997, '2020-11-02 11:17:17', 'Kütüphanede cilt 1 bulunmaktadır.', 5, 5),
(6, '9789758109432', 'Ekoloji Terimleri Sözlüğü', 'Türkçe', 2000, '2020-11-02 11:19:50', 'Ekoloji, organik varlıkların yerküredeki dağılımını ve bunların kütlesel niceliklerinin etkileşimini inceleyen çağdaş bir bilim dalıdır. Çevre konusunda uzman akademisyenlerin beğenisini kazanan \"Ekoloji Terimleri Sözlüğü\"nü yayınlamakla katkı sağladığımız inancındayız.', 6, 6),
(7, '9789759493905', 'Çevre bilim: Ekoloji', 'Türkçe', 1999, '2020-11-02 11:21:32', 'Kütüphanede bulunmaktadır.', 7, 7),
(8, '9789759225711', ' Ekoloji, toplum ve siyaset', 'Türkçe', 2003, '2020-11-02 11:23:14', 'İnsanın doğası iler ilişkisinin tarihi, bir türk olarak ortaya çıkışıyla başlamıştır. Onu, zoolojik bir varlık olmaktan çıkarıp beşeri bir varlık haline getiren temel unsur, doğa müdahale yeteneğidir. Bu müdahale, aynı zamanda, doğaya toplumsal bir nitelik de kazandırmaktadır. Çünkü insan-doğa ilişkisi, \"değer\"den bağımsız, boşlukta vereyan eden bir ilişki değildir. Bu ilişki, kültür dolayımında gerçekleşir. Yani, doğa/çevre, insan zihninde bağımsız dışsal bir düzenlilik değil; insan tarafından tasavvur edilen, anlamlandırılan bir kategoridir. -Tuncay Önder-', 8, 8),
(9, '9789754831771', 'Ekoloji ve çevre biyolojisi', 'Türkçe', 1997, '2020-11-02 11:24:23', 'Ekolojik Sorunlar ve Toplumların Gündemine Yerleşmesi, Ekoloji Bilimi ve Tarihsel Gelişimi, Çevre Bilimi ve Tarihsel Gelişimi Yeryuvarının Tarihsel Değişimi ve Türlerin Oluşumuna Etkisi Ekolojide Temel Bazı Kuram ve Kavramlar Birey Ekolojisi Abiyotik Faktörler ve Organizmalara Etkileri, Edafik Faktörler Biyotik Faktörler Populasyon ve Yapısal Özellikleri, Populasyon Dinamiği Tür Toplulukları Ekolojisi. Kommunite ve Özellikleri Ekosistem ve Özellikleri Dünyanın Büyük Ekosistemleri ve Dağılışları İnsanlığın Ekolojik Sorunları, Doğanın Korunması Çevresel Koruma ve Düzenlemede Yeni Yaklaşımlar', 9, 9),
(10, '9786054445219', 'Çevre sağlığı : (çevre ve ekoloji bağlantılarıyla)', 'Türkçe', 2012, '2020-11-02 11:27:19', 'Kitap 2 ciltten oluşmaktadır.', 2, 2);

-- --------------------------------------------------------

--
-- Görünüm yapısı durumu `liste`
-- (Asıl görünüm için aşağıya bakın)
--
CREATE TABLE `liste` (
`EsAdi` varchar(200)
,`AdSoyad` varchar(200)
,`YayineviAd` varchar(100)
,`YayinTar` year(4)
,`YayinYer` varchar(100)
);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yayin`
--

CREATE TABLE `yayin` (
  `YayineviNo` int(11) NOT NULL COMMENT 'Yayınevi No',
  `YayTar` timestamp NOT NULL DEFAULT current_timestamp(),
  `YayinTar` year(4) DEFAULT NULL COMMENT 'Yayın Tarihi',
  `YayineviAd` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Yayınevinin Adı',
  `YayinYer` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Yayın Yeri'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Yayınevine Ait Özellikler';

--
-- Tablo döküm verisi `yayin`
--

INSERT INTO `yayin` (`YayineviNo`, `YayTar`, `YayinTar`, `YayineviAd`, `YayinYer`) VALUES
(1, '2021-01-07 20:11:46', 1999, 'Araştırma Yayınları', 'Ankara'),
(2, '2021-01-07 20:11:46', 2019, 'Ekoloji Kolektifi Derneği', 'İstanbul'),
(3, '2021-01-07 20:11:46', 2010, 'Remzi Kitabevi', 'İstanbul'),
(4, '2021-01-07 20:11:46', 2015, 'Kriter Basım Yayın Dağıtım', 'Ankara'),
(5, '2021-01-07 20:11:46', 1997, 'Başkent Klişe Matbaacılık', 'Ankara'),
(6, '2021-01-07 20:11:46', 2000, 'Birleşik Dağıtım', 'istanbul'),
(7, '2021-01-07 20:11:46', 1999, 'Gazi Kitabevi', 'Ankara'),
(8, '2021-01-07 20:11:46', 2003, 'Odak', 'Ankara'),
(9, '2021-01-07 20:11:46', 1997, 'Ege Üniversitesi', 'İzmir'),
(10, '2021-01-07 20:11:46', 2012, 'Yazıt Yayıncılık', 'Ankara');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazar`
--

CREATE TABLE `yazar` (
  `YazNo` smallint(11) NOT NULL COMMENT 'Yazara Ait Numara Bilgisi',
  `YazTar` timestamp NOT NULL DEFAULT current_timestamp(),
  `YazUrl` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Yazar Url',
  `YazAdi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `YazSoyad` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Yazara ait özellikler';

--
-- Tablo döküm verisi `yazar`
--

INSERT INTO `yazar` (`YazNo`, `YazTar`, `YazUrl`, `YazAdi`, `YazSoyad`) VALUES
(1, '2021-01-07 20:04:27', 'https://www.kitapyurdu.com/kitap/ekoloji-baglaminda-cevre-imtihanimiz/512197.html', 'Süleyman', 'Kaya'),
(2, '2021-01-19 20:04:49', 'https://ekolojikolektifi.org/portfolio/1867/', 'Elif ', 'İnce'),
(3, '2021-01-04 20:04:54', 'https://kidega.com/yazar/mine-kislalioglu-142976', 'Mine ', 'Kışlalıoğlu'),
(4, '2021-01-12 20:04:57', 'https://www.researchgate.net/profile/Murat_Tuerkes2', 'Murat', 'Türkeş'),
(5, '2021-01-10 20:05:02', NULL, 'Ayşe', 'Boşgelmez'),
(6, '2021-01-03 20:05:06', NULL, 'Beyhan ', 'İslam'),
(7, '2021-01-06 20:05:14', NULL, 'M. Nihat', 'Şişli'),
(8, '2021-01-05 20:05:17', 'https://scholar.google.com.tr/citations?user=j3qWKsYAAAAJ&hl=tr', 'Tuncay', 'Önder'),
(9, '2021-01-05 20:05:26', NULL, 'Ahmet ', 'Kocataş'),
(10, '2021-01-11 20:05:30', 'http://www.halksagligi.hacettepe.edu.tr/personel/guler.php', 'Çağatay', 'Güler'),
(14, '2021-01-04 20:05:33', 'https://www.idefix.com/yazar/kemal-tahir/s=253783', 'Kemal ', 'Tahir');

-- --------------------------------------------------------

--
-- Görünüm yapısı `liste`
--
DROP TABLE IF EXISTS `liste`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `liste`  AS SELECT `k`.`EsAdi` AS `EsAdi`, concat(`r`.`YazAdi`,'',`r`.`YazSoyad`) AS `AdSoyad`, `y`.`YayineviAd` AS `YayineviAd`, `y`.`YayinTar` AS `YayinTar`, `y`.`YayinYer` AS `YayinYer` FROM ((`eser` `k` join `yayin` `y`) join `yazar` `r`) WHERE `k`.`YayineviNo` = `y`.`YayineviNo` AND `k`.`YazNo` = `r`.`YazNo` ;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `eser`
--
ALTER TABLE `eser`
  ADD PRIMARY KEY (`EsKayNo`) USING BTREE;

--
-- Tablo için indeksler `yayin`
--
ALTER TABLE `yayin`
  ADD PRIMARY KEY (`YayineviNo`);

--
-- Tablo için indeksler `yazar`
--
ALTER TABLE `yazar`
  ADD PRIMARY KEY (`YazNo`),
  ADD UNIQUE KEY `YazUrl` (`YazUrl`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `eser`
--
ALTER TABLE `eser`
  MODIFY `EsKayNo` smallint(6) NOT NULL AUTO_INCREMENT COMMENT 'Kitap Kayıt Numarası\r\n', AUTO_INCREMENT=55;

--
-- Tablo için AUTO_INCREMENT değeri `yayin`
--
ALTER TABLE `yayin`
  MODIFY `YayineviNo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Yayınevi No', AUTO_INCREMENT=50;

--
-- Tablo için AUTO_INCREMENT değeri `yazar`
--
ALTER TABLE `yazar`
  MODIFY `YazNo` smallint(11) NOT NULL AUTO_INCREMENT COMMENT 'Yazara Ait Numara Bilgisi', AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
