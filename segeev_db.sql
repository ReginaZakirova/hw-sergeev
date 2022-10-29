-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 29 2022 г., 16:10
-- Версия сервера: 8.0.29
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `segeev_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `magaz`
--

CREATE TABLE `magaz` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(15) NOT NULL,
  `price` float NOT NULL,
  `data` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `magaz`
--

INSERT INTO `magaz` (`id`, `name`, `price`, `data`) VALUES
(1, 'Продукт1', 100, 2022),
(2, 'Продукт2', 110, 2022),
(3, 'Продукт3', 120, 2021),
(4, 'Продукт4', 130, 2023),
(5, 'Продукт5', 140, 2020),
(6, 'Продукт6', 150, 2022),
(7, 'Продукт7', 160, 2022),
(8, 'Продукт8', 170, 2021),
(9, 'Продукт9', 180, 2023),
(10, 'Продукт10', 190, 2020);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `reg_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `reg_date`) VALUES
(9, 'admin', 'YWRtaW4=', NULL),
(10, 'root', 'cm9vdA==', NULL),
(15, 'admin', 'YWRtaW4=', NULL),
(16, 'root', 'cm9vdA==', NULL),
(17, 'aaaa', 'YWFhYQ==', NULL),
(18, 'aaaas', 'YWFhYQ==', NULL),
(19, 'qqq', 'cXFx', NULL),
(20, 'qwer', 'cXdlcg==', NULL),
(21, 'asdf', 'YXNmZ2Rm', NULL),
(22, 'asgasg', 'YXNnc2FnYQ==', NULL),
(23, 'qwerty', 'MTI1NTI1Mg==', NULL),
(24, 'admins', 'YWRtaW5z', NULL),
(25, 'admon', 'YWRtb24=', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `magaz`
--
ALTER TABLE `magaz`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `magaz`
--
ALTER TABLE `magaz`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
