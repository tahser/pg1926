-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Şub 2021, 20:35:24
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hasta`
--

CREATE TABLE `hasta` (
  `HASTA_ID` int(11) NOT NULL,
  `HASTA_AD` varchar(1000) NOT NULL,
  `HASTA_SOYAD` varchar(1000) NOT NULL,
  `ADRES` varchar(1000) NOT NULL,
  `KAYIT_TRH` date NOT NULL,
  `IL_ID` int(11) NOT NULL,
  `ILCE_ID` int(11) NOT NULL,
  `TELEFON` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hasta`
--

INSERT INTO `hasta` (`HASTA_ID`, `HASTA_AD`, `HASTA_SOYAD`, `ADRES`, `KAYIT_TRH`, `IL_ID`, `ILCE_ID`, `TELEFON`) VALUES
(14, 'hasan', 'adıgüzel', 'istanbul esenler', '0000-00-00', 34, 0, '54878954758');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `il`
--

CREATE TABLE `il` (
  `IL_ID` int(11) NOT NULL,
  `IL_KOD` int(11) NOT NULL,
  `IL_AD` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `il`
--

INSERT INTO `il` (`IL_ID`, `IL_KOD`, `IL_AD`) VALUES
(1, 1, 'Adana'),
(2, 2, 'Adıyaman'),
(3, 3, 'Afyonkarahisar'),
(4, 4, 'Ağrı'),
(5, 5, 'Amasya'),
(6, 6, 'Ankara'),
(7, 7, 'Antalya'),
(8, 8, 'Artvin'),
(9, 9, 'Aydın'),
(10, 10, 'Balıkesir'),
(11, 11, 'Bilecik'),
(12, 12, 'Bingöl'),
(13, 13, 'Bitlis'),
(14, 14, 'Bolu'),
(15, 15, 'Burdur'),
(16, 16, 'Bursa'),
(17, 17, 'Çanakkale'),
(18, 18, 'Çankırı'),
(19, 19, 'Çorum'),
(20, 20, 'Denizli'),
(21, 21, 'Diyarbakır'),
(22, 22, 'Edirne'),
(23, 23, 'Elâzığ'),
(24, 24, 'Erzincan'),
(25, 25, 'Erzurum'),
(26, 26, 'Eskişehir'),
(27, 27, 'Gaziantep'),
(28, 28, 'Giresun'),
(29, 29, 'Gümüşhane'),
(30, 30, 'Hakkâri'),
(31, 31, 'Hatay'),
(32, 32, 'Isparta'),
(33, 33, 'Mersin'),
(34, 34, 'İstanbul'),
(35, 35, 'İzmir'),
(36, 36, 'Kars'),
(37, 37, 'Kastamonu'),
(38, 38, 'Kayseri'),
(39, 39, 'Kırklareli'),
(40, 40, 'Kırşehir'),
(41, 41, 'Kocaeli'),
(42, 42, 'Konya'),
(43, 43, 'Kütahya'),
(44, 44, 'Malatya'),
(45, 45, 'Manisa'),
(46, 46, 'Kahramanmaraş'),
(47, 47, 'Mardin'),
(48, 48, 'Muğla'),
(49, 49, 'Muş'),
(50, 50, 'Nevşehir'),
(51, 51, 'Niğde'),
(52, 52, 'Ordu'),
(53, 53, 'Rize'),
(54, 54, 'Sakarya'),
(55, 55, 'Samsun'),
(56, 56, 'Siirt'),
(57, 57, 'Sinop'),
(58, 58, 'Sivas'),
(59, 59, 'Tekirdağ'),
(60, 60, 'Tokat'),
(61, 61, 'Trabzon'),
(62, 62, 'Tunceli'),
(63, 63, 'Şanlıurfa'),
(64, 64, 'Uşak'),
(65, 65, 'Van'),
(66, 66, 'Yozgat'),
(67, 67, 'Zonguldak'),
(68, 68, 'Aksaray'),
(69, 69, 'Bayburt'),
(70, 70, 'Karaman'),
(71, 71, 'Kırıkkale'),
(72, 72, 'Batman'),
(73, 73, 'Şırnak'),
(74, 74, 'Bartın'),
(75, 75, 'Ardahan'),
(76, 76, 'Iğdır'),
(77, 77, 'Yalova'),
(78, 78, 'Karabük'),
(79, 79, 'Kilis'),
(80, 80, 'Osmaniye'),
(81, 81, 'Düzce');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `hasta`
--
ALTER TABLE `hasta`
  ADD PRIMARY KEY (`HASTA_ID`);

--
-- Tablo için indeksler `il`
--
ALTER TABLE `il`
  ADD PRIMARY KEY (`IL_ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `hasta`
--
ALTER TABLE `hasta`
  MODIFY `HASTA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `il`
--
ALTER TABLE `il`
  MODIFY `IL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
