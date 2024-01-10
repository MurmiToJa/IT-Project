-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Sty 2024, 12:21
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `fintax`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admins`
--

CREATE TABLE `admins` (
  `Id_klienta` int(11) NOT NULL,
  `Administrator` text COLLATE utf8mb4_polish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `admins`
--

INSERT INTO `admins` (`Id_klienta`, `Administrator`) VALUES
(6, 'ja2137@gmail.com');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `clients`
--

CREATE TABLE `clients` (
  `Id_klienta` int(11) NOT NULL,
  `Imie` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Nazwisko` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Telefon` varchar(15) COLLATE utf8mb4_polish_ci NOT NULL,
  `Godziny_spotkania` varchar(255) COLLATE utf8mb4_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `clients`
--

INSERT INTO `clients` (`Id_klienta`, `Imie`, `Nazwisko`, `Telefon`, `Godziny_spotkania`) VALUES
(3, 'Andrzej', 'Nowak', '575344122', '11-03-2024 09:30'),
(8, '213123', 'Murmyłowski', '123213333', '2003-03-11T09:12');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `newsletter`
--

INSERT INTO `newsletter` (`id`, `mail`) VALUES
(1, 'murmuleszyn210@gmail.com'),
(2, 'murmuleszyn2120@gmail.com');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `Id_klienta` int(11) NOT NULL,
  `Login` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Haslo` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`Id_klienta`, `Login`, `Haslo`, `Email`) VALUES
(1, 'murmuleszyn210@gmail.com', '$2y$10$XynqJigQOOa/bon1WQsBuO1Vm.Y8UlqlIvDXyCjluqSJx4gyE.HAa', 'murmuleszyn210@gmail.com'),
(2, 'murmuleszyn21110@gmail.com', '$2y$10$pOHNjxYwNK6vYRZhDZrUvOWiTffQE8xwW.K9b6pBop2Gw0m7qvl2m', 'murmuleszyn21110@gmail.com'),
(3, 'murmuleszyn2111110@gmail.com', '$2y$10$LK/AENmpjOl92l6zVGNA0.SzKNBz7nc1NrwrbyQy0plB0o.Vrl39e', 'murmuleszyn2111110@gmail.com'),
(4, 'murmuleszyn21220@gmail.com', '$2y$10$YXT9u79il6pH5Mqhahai7O9t/AHu5njXWLLT3oExdfaQY4YZ1YUUy', 'murmuleszyn21220@gmail.com'),
(5, 'kawalec2115@gmail.com', '$2y$10$E5eh3pq5lOrfj5XSD/Txv.QSurz.c239Kr1HQuiu86b5ZseMHd1q.', 'kawalec2115@gmail.com'),
(6, 'ja2137@gmail.com', '$2y$10$AXtvR8dwNRGXwSaNsovbiupcIzlSzdEnfGgirejufKlEMc2iTB07C', 'ja2137@gmail.com'),
(7, 'porwalko@gmail.com', '$2y$10$NJXKN.hpS8Rfxvudgsl6IO4.ywpEj0Fd/LXiePPkMIeD1DyhUfAEO', 'porwalko@gmail.com'),
(8, 'kawalec2137@gmail.com', '$2y$10$/1Q.60njxLvg6P8n4ISkguUut1uvC9d7WgQTmgCLSvoOuDfe9rfT.', 'kawalec2137@gmail.com'),
(9, 'janpawel@gmail.com', '$2y$10$/zF58fHxWvnvKvsrHmuVtuLev9n7MFlBlpv96U6oUkEEcP2ZvfEwi', 'janpawel@gmail.com');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Id_klienta`);

--
-- Indeksy dla tabeli `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`Id_klienta`);

--
-- Indeksy dla tabeli `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_klienta`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `Id_klienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`Id_klienta`) REFERENCES `users` (`Id_klienta`),
  ADD CONSTRAINT `fk_Admin_Uzytkownik` FOREIGN KEY (`Id_klienta`) REFERENCES `users` (`Id_klienta`);

--
-- Ograniczenia dla tabeli `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`Id_klienta`) REFERENCES `users` (`Id_klienta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
