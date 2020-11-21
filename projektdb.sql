-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Cze 2019, 15:47
-- Wersja serwera: 10.1.38-MariaDB
-- Wersja PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projektdb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `live`
--

CREATE TABLE `live` (
  `ID` int(5) UNSIGNED NOT NULL,
  `Nick` varchar(16) COLLATE utf8_polish_ci NOT NULL,
  `Tekst` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `live`
--

INSERT INTO `live` (`ID`, `Nick`, `Tekst`, `data`) VALUES
(1, 'admin', 'A to miejsce na to by podzieliÄ‡ siÄ™ waszymi ulubionymi grami :)', '2019-06-10 13:34:58'),
(2, 'Krycu', 'Super stronka. Wiedzmin3 oczywiÅ›cie na propsie', '2019-06-10 13:35:28'),
(3, 'Pioter', 'Fallout 4ever <3', '2019-06-10 13:35:59');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logowanie`
--

CREATE TABLE `logowanie` (
  `Login` varchar(16) COLLATE utf8_polish_ci NOT NULL,
  `Haslo` varchar(16) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `logowanie`
--

INSERT INTO `logowanie` (`Login`, `Haslo`) VALUES
('admin', 'admin'),
('Krycu', '12345'),
('Pioter', '12345');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `live`
--
ALTER TABLE `live`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `live`
--
ALTER TABLE `live`
  MODIFY `ID` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
