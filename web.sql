-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Ara 2016, 22:30:38
-- Sunucu sürümü: 10.1.10-MariaDB
-- PHP Sürümü: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `web`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alt_kategoriler`
--

CREATE TABLE `alt_kategoriler` (
  `id` int(11) NOT NULL,
  `kategoriadi` varchar(20) NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `alt_kategoriler`
--

INSERT INTO `alt_kategoriler` (`id`, `kategoriadi`, `kategori_id`) VALUES
(1, 'Php', 1),
(2, 'Python', 1),
(3, 'Linux', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(200) CHARACTER SET latin1 NOT NULL,
  `baslik` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `text` text COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kategori_id` int(11) NOT NULL,
  `altkategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `documents`
--

INSERT INTO `documents` (`id`, `thumbnail`, `baslik`, `text`, `aciklama`, `date`, `kategori_id`, `altkategori_id`) VALUES
(2, 'http://blog.room34.com/wp-content/uploads/underdog/logo.thumbnail.png', 'Bişeyler', 'akjhdkjsahdasj dashdkj ashd haskjd ahkjdhsa kjh dkjhsakdhkjsahdsajlkdj asjd lsjlakjd klsa djsal daksjdlk sjalkdj ajdlsa', 'falan filan', '2016-12-19 14:59:33', 1, 1),
(3, 'http://blog.room34.com/wp-content/uploads/underdog/logo.thumbnail.png', 'Abuzittin', 'kdhaskjdhah daskhd asd haskhdk hajd sajkhd kjsahd ashdh sakdhaskhdas h dkashd ask dh', 'Purple Lamborghini', '2016-12-19 15:03:18', 1, 1),
(4, 'http://blog.room34.com/wp-content/uploads/underdog/logo.thumbnail.png', 'DCASCSACAS ', 'dsada', 'djhasdgsajh ', '2016-12-19 15:04:53', 1, 1),
(5, 'http://blog.room34.com/wp-content/uploads/underdog/logo.thumbnail.png', 'Skrillex', 'dsajkhdsa hkjdsadsa', 'AÇıklıyorum', '2016-12-19 15:04:53', 2, 2),
(6, 'http://blog.room34.com/wp-content/uploads/underdog/logo.thumbnail.png', 'jakdhsakjhdsajkhdkja', 'dkjsahdakjh', 'dskjahdjsahdjhsakjdhasjk', '2016-12-19 15:06:24', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategori_id` int(11) NOT NULL,
  `kategori_adi` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_adi`) VALUES
(1, 'Yazılım'),
(2, 'Networking');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `alt_kategoriler`
--
ALTER TABLE `alt_kategoriler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Tablo için indeksler `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `altkategori_id` (`altkategori_id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategori_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `alt_kategoriler`
--
ALTER TABLE `alt_kategoriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
