-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Eyl 2022, 13:16:06
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mehmetsite`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fotograflar`
--

CREATE TABLE `fotograflar` (
  `id` int(11) NOT NULL,
  `fotograf_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `fotograf_resim_url` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `fotograflar`
--

INSERT INTO `fotograflar` (`id`, `fotograf_ad`, `fotograf_resim_url`) VALUES
(8, 'foto3', 'uploads/lorem3.jpg'),
(9, 'foto4', 'uploads/lorem4.jpg'),
(10, 'foto5', 'uploads/lorem5.jpg'),
(11, 'foto6', 'uploads/lorem6.jpg'),
(12, 'foto7', 'uploads/lorem7.jpg'),
(13, 'foto8', 'uploads/lorem8.jpg'),
(14, 'foto9', 'uploads/lorem9.jpg'),
(15, 'foto10', 'uploads/lorem10.jpg'),
(16, 'foto11', 'uploads/lorem11.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `ad`, `soyad`, `sifre`) VALUES
(1, 'mdoganer', 'mehmet', 'doğaner', '1234'),
(2, 'eypio', 'eyup', 'duygun', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

CREATE TABLE `yazilar` (
  `id` int(11) NOT NULL,
  `yazaradi` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `makale` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `makaleadi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `makaleozeet` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `resim_url` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`id`, `yazaradi`, `makale`, `makaleadi`, `makaleozeet`, `resim_url`) VALUES
(17, 'Eyüp Duygun', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. At officiis asperiores dignissimos, ducimus eius adipisci doloribus provident nobis a, omnis dolor natus nihil aspernatur totam odit debitis explicabo eaque? Recusandae.\r\n', 'Giresunlular', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. At officiis asperiores dignissimos, ducimus eius adipisci doloribus provident nobis a, omnis dolor natus nihil aspernatur totam odit debitis explicabo eaque? Recusandae.\r\n', 'uploads/pdf.png'),
(18, 'Erol Sarmaşık', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. At officiis asperiores dignissimos, ducimus eius adipisci doloribus provident nobis a, omnis dolor natus nihil aspernatur totam odit debitis explicabo eaque? Recusandae.\r\n', 'Manisalılar', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. At officiis asperiores dignissimos, ducimus eius adipisci doloribus provident nobis a, omnis dolor natus nihil aspernatur totam odit debitis explicabo eaque? Recusandae.\r\n', 'uploads/pdf.png'),
(19, 'Doğukan Duman', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. At officiis asperiores dignissimos, ducimus eius adipisci doloribus provident nobis a, omnis dolor natus nihil aspernatur totam odit debitis explicabo eaque? Recusandae.\r\n', 'Aydınlılar', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. At officiis asperiores dignissimos, ducimus eius adipisci doloribus provident nobis a, omnis dolor natus nihil aspernatur totam odit debitis explicabo eaque? Recusandae.\r\n', 'uploads/pdf.png'),
(21, 'Mehmet Doğaner', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. At officiis asperiores dignissimos, ducimus eius adipisci doloribus provident nobis a, omnis dolor natus nihil aspernatur totam odit debitis explicabo eaque? Recusandae.\r\n', 'Yozgatlılar', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. At officiis asperiores dignissimos, ducimus eius adipisci doloribus provident nobis a, omnis dolor natus nihil aspernatur totam odit debitis explicabo eaque? Recusandae.\r\n', 'uploads/pdf.png'),
(22, 'İsimsiz Kahraman', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. At officiis asperiores dignissimos, ducimus eius adipisci doloribus provident nobis a, omnis dolor natus nihil aspernatur totam odit debitis explicabo eaque? Recusandae.\r\n', 'Zonguldaklılar', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. At officiis asperiores dignissimos, ducimus eius adipisci doloribus provident nobis a, omnis dolor natus nihil aspernatur totam odit debitis explicabo eaque? Recusandae.\r\n', 'uploads/pdf.png'),
(23, 'Kahraman', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. At officiis asperiores dignissimos, ducimus eius adipisci doloribus provident nobis a, omnis dolor natus nihil aspernatur totam odit debitis explicabo eaque? Recusandae.\r\n', 'Ankaralılar', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. At officiis asperiores dignissimos, ducimus eius adipisci doloribus provident nobis a, omnis dolor natus nihil aspernatur totam odit debitis explicabo eaque? Recusandae.\r\n', 'uploads/pdf.png');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `fotograflar`
--
ALTER TABLE `fotograflar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yazilar`
--
ALTER TABLE `yazilar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `fotograflar`
--
ALTER TABLE `fotograflar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `yazilar`
--
ALTER TABLE `yazilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
