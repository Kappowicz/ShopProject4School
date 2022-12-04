-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 04 Gru 2022, 19:40
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `magazyn`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkt`
--

CREATE TABLE `produkt` (
  `ID_Produktu` int(11) NOT NULL,
  `Nazwa` text NOT NULL,
  `Ilosc` int(10) NOT NULL,
  `Zdjecie` text NOT NULL,
  `Cena` float NOT NULL,
  `Promocja` float DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `produkt`
--

INSERT INTO `produkt` (`ID_Produktu`, `Nazwa`, `Ilosc`, `Zdjecie`, `Cena`, `Promocja`) VALUES
(1, 'Czarna kawa', 69, 'Canada/Usa/Mexico', 21.37, 0.1),
(2, 'Młynek do kawy', 21, 'Columbia/Uruguay/Malta', 50, 0),
(3, 'Kubek', 37, 'Chad/Uzbekhistan/Moldavia', 15, 0),
(4, 'Mleko Sojowe', 53, 'Croatia/Ukraine/Madagascar', 6.49, 0.2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`ID_Produktu`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `produkt`
--
ALTER TABLE `produkt`
  MODIFY `ID_Produktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
