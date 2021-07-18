-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Lip 2021, 01:23
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `smartoffer`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `etui`
--

CREATE TABLE `etui` (
  `EtuiID` tinyint(4) NOT NULL,
  `EtuiProducent` text COLLATE utf8_polish_ci NOT NULL,
  `EtuiNazwa` text COLLATE utf8_polish_ci NOT NULL,
  `EtuiAtrybut` text COLLATE utf8_polish_ci NOT NULL,
  `EtuiSzklo_CH` tinytext COLLATE utf8_polish_ci NOT NULL,
  `EtuiSzklo_3MK` tinytext COLLATE utf8_polish_ci NOT NULL,
  `EtuiSzklo_SPP` tinytext COLLATE utf8_polish_ci NOT NULL,
  `EtuiKiedy` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Uwagi` text COLLATE utf8_polish_ci NOT NULL,
  `UserID` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `etui`
--

INSERT INTO `etui` (`EtuiID`, `EtuiProducent`, `EtuiNazwa`, `EtuiAtrybut`, `EtuiSzklo_CH`, `EtuiSzklo_3MK`, `EtuiSzklo_SPP`, `EtuiKiedy`, `Uwagi`, `UserID`) VALUES
(2, 'Dux Ducis', 'Skin Pro', 'SKÓRZANE;PORTFELOWE;PORTFEL;SKÓRA', 'Tak', 'Tak', 'Tak', '2021-06-13 20:32:53', '', 1),
(3, 'Ringke', 'Air', 'MOCNE;TPU', 'Tak', 'Tak', 'Tak', '2021-06-23 20:22:05', '', 1),
(4, 'ESR', 'Air Shield Boost', 'MOCNE;PANCERNE;TPU;ORGINALNE', 'Tak', 'Tak', 'Tak', '2021-06-23 20:25:28', '', 1),
(5, 'Spigen', 'Rugged Armor', 'PANCERNE;MOCNE;ORGINALNE;TPU', 'Tak', 'Nie', 'Tak', '2021-06-23 20:27:41', '', 1),
(6, 'YouTab', 'Litchi', 'SKÓRZANE;JEBAĆ PIS', 'Tak', 'Nie', 'Tak', '2021-07-10 19:54:33', 'Jebać pis i konfederacje\r\n', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `modele`
--

CREATE TABLE `modele` (
  `TelefonID` smallint(6) NOT NULL,
  `ProducentID` smallint(3) NOT NULL,
  `NazwaModelu` text COLLATE utf8_polish_ci NOT NULL,
  `InnaNazwa` text COLLATE utf8_polish_ci NOT NULL,
  `Cale` float(3,2) NOT NULL,
  `GsmArenaUrl` text COLLATE utf8_polish_ci NOT NULL,
  `Szklo_CH` char(5) COLLATE utf8_polish_ci NOT NULL,
  `Szklo_3MK` char(5) COLLATE utf8_polish_ci NOT NULL,
  `Szklo_SPP` char(5) COLLATE utf8_polish_ci NOT NULL,
  `KiedyDodany` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UserID` smallint(3) NOT NULL,
  `Uwagi` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci ROW_FORMAT=COMPACT;

--
-- Zrzut danych tabeli `modele`
--

INSERT INTO `modele` (`TelefonID`, `ProducentID`, `NazwaModelu`, `InnaNazwa`, `Cale`, `GsmArenaUrl`, `Szklo_CH`, `Szklo_3MK`, `Szklo_SPP`, `KiedyDodany`, `UserID`, `Uwagi`) VALUES
(1, 1, 'Apple iPhone 12 Pro Max', '', 6.70, 'https://www.gsmarena.com/apple_iphone_12_pro_max-10237.php', 'Nie', 'Nie', 'Nie', '2021-07-10 19:25:30', 1, ''),
(4, 1, 'Samsung Galaxy A12', '', 6.50, 'https://www.gsmarena.com/samsung_galaxy_a12-10604.php', 'Nie', 'Nie', 'Nie', '2021-07-10 19:25:36', 1, ''),
(7, 14, 'Samsung Galaxy A72 4G / 5G', '', 6.70, 'https://www.gsmarena.com/samsung_galaxy_a72-10469.php', 'Nie', 'Nie', 'Nie', '2021-07-17 18:10:09', 1, ''),
(8, 2, 'Asus Zenfone 8 Flip', '', 6.67, 'https://www.gsmarena.com/asus_zenfone_8_flip-10892.php', 'Nie', 'Nie', 'Nie', '2021-07-17 18:27:18', 1, ''),
(9, 13, 'Realme GT 5G', '', 6.43, 'https://www.gsmarena.com/realme_gt_5g-10689.php', 'Nie', 'Nie', 'Nie', '2021-07-17 18:27:27', 1, ''),
(10, 17, 'Xiaomi Redmi Note 10 Pro', '', 6.67, '', 'Nie', 'Nie', 'Nie', '2021-07-17 18:27:39', 1, ''),
(11, 14, 'Samsung Galaxy S20 FE 5G', '', 6.50, '', 'Nie', 'Nie', 'Nie', '2021-07-10 19:52:44', 1, ''),
(12, 17, 'Xiaomi POCO X3 Pro ', '', 6.67, '', 'Tak', 'Tak', 'Tak', '2021-07-17 18:28:15', 1, ''),
(13, 17, 'Xiaomi Mi 11 Lite 5G ', '', 6.55, '', 'Nie', 'Nie', 'Nie', '2021-07-17 18:28:31', 1, ''),
(14, 14, 'Samsung Galaxy A32 4G', '', 6.40, '', 'Nie', 'Nie', 'Nie', '2021-07-17 18:29:02', 1, ''),
(15, 17, 'Xiaomi Redmi Note 8 Pro', '', 6.50, '', 'Nie', 'Nie', 'Nie', '2021-07-10 20:28:45', 1, ''),
(16, 14, 'Samsung Galaxy S21', '', 6.20, '', 'Nie', 'Nie', 'Nie', '2021-07-10 20:29:46', 1, ''),
(17, 14, 'Samsung Galaxy M12', '', 6.50, '', 'Nie', 'Nie', 'Nie', '2021-07-10 20:30:08', 1, ''),
(18, 13, 'Realme 8 Pro', '', 6.40, '', 'Nie', 'Nie', 'Nie', '2021-07-10 20:31:06', 1, ''),
(19, 17, 'Xiaomi Mi 11', '', 6.80, '', 'Nie', 'Nie', 'Nie', '2021-07-10 20:32:32', 1, ''),
(20, 17, 'Xiaomi Redmi Note 9', '', 6.50, '', 'Nie', 'Nie', 'Nie', '2021-07-10 20:33:04', 1, ''),
(21, 17, 'Xiaomi Redmi Note 10', '', 6.40, '', 'Nie', 'Nie', 'Nie', '2021-07-10 20:33:38', 1, ''),
(22, 14, 'Samsung Galaxy A52 5G', '', 6.50, '', 'Nie', 'Nie', 'Nie', '2021-07-10 20:34:03', 1, ''),
(23, 17, 'Xiaomi Redmi Note 10s', '', 6.43, '', 'Nie', 'Nie', 'Nie', '2021-07-10 20:36:53', 1, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `producenci`
--

CREATE TABLE `producenci` (
  `ProducentID` smallint(3) NOT NULL,
  `NazwaProducenta` tinytext COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `producenci`
--

INSERT INTO `producenci` (`ProducentID`, `NazwaProducenta`) VALUES
(1, 'Apple'),
(2, 'Asus'),
(3, 'Blackview'),
(4, 'Google'),
(5, 'HTC'),
(6, 'Huawei'),
(7, 'LG'),
(8, 'Lenovo'),
(9, 'Meizu'),
(10, 'Nokia'),
(11, 'OnePlus'),
(12, 'Oppo'),
(13, 'Realme'),
(14, 'Samsung'),
(15, 'Sony'),
(16, 'Vivo'),
(17, 'Xiaomi'),
(18, 'ZTE');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `UserID` smallint(3) NOT NULL,
  `UserName` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `UserPassword` text COLLATE utf8_polish_ci NOT NULL,
  `UserMail` text COLLATE utf8_polish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `UserPassword`, `UserMail`, `date`) VALUES
(1, 'b.kaleta', 'admin', 'borys.youtab@gmail.com', '2021-07-17 22:43:16');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `etui`
--
ALTER TABLE `etui`
  ADD PRIMARY KEY (`EtuiID`),
  ADD KEY `EtuiUserID` (`UserID`);
ALTER TABLE `etui` ADD FULLTEXT KEY `Atrybuty Etui` (`EtuiAtrybut`);
ALTER TABLE `etui` ADD FULLTEXT KEY `Nazwa` (`EtuiProducent`,`EtuiNazwa`);

--
-- Indeksy dla tabeli `modele`
--
ALTER TABLE `modele`
  ADD PRIMARY KEY (`TelefonID`),
  ADD UNIQUE KEY `UniqNazwamodelu` (`NazwaModelu`,`InnaNazwa`) USING HASH,
  ADD KEY `Modele_Users` (`UserID`),
  ADD KEY `SzkloCH` (`Szklo_CH`),
  ADD KEY `Szklo3MK` (`Szklo_3MK`),
  ADD KEY `SzkloSPP` (`Szklo_SPP`),
  ADD KEY `Modele Producenci` (`ProducentID`);
ALTER TABLE `modele` ADD FULLTEXT KEY `NazwaModelu` (`NazwaModelu`,`InnaNazwa`);

--
-- Indeksy dla tabeli `producenci`
--
ALTER TABLE `producenci`
  ADD PRIMARY KEY (`ProducentID`),
  ADD UNIQUE KEY `Nazwa prod` (`NazwaProducenta`) USING HASH;

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserMail` (`UserMail`(30)),
  ADD UNIQUE KEY `User name` (`UserName`) USING HASH;

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `etui`
--
ALTER TABLE `etui`
  MODIFY `EtuiID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `modele`
--
ALTER TABLE `modele`
  MODIFY `TelefonID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT dla tabeli `producenci`
--
ALTER TABLE `producenci`
  MODIFY `ProducentID` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `UserID` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `etui`
--
ALTER TABLE `etui`
  ADD CONSTRAINT `EtuiUserID` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `modele`
--
ALTER TABLE `modele`
  ADD CONSTRAINT `Mdele_Porducenci` FOREIGN KEY (`ProducentID`) REFERENCES `producenci` (`ProducentID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Modele_Users` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
