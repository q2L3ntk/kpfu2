-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 26 2024 г., 18:40
-- Версия сервера: 5.7.39-log
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `UniversityDB`
--

-- --------------------------------------------------------

--
-- Структура таблицы `directions`
--

CREATE TABLE `directions` (
  `id` int(11) NOT NULL,
  `direction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `directions`
--

INSERT INTO `directions` (`id`, `direction`) VALUES
(1, 'Программирование'),
(2, 'Экономика предприятий и организации'),
(3, 'Электроника и электротехника'),
(4, 'Компьютерные сети'),
(5, 'Машиностроение'),
(6, 'Филология'),
(7, 'Лингвистика'),
(8, 'Таможенное дело');

-- --------------------------------------------------------

--
-- Структура таблицы `organisations`
--

CREATE TABLE `organisations` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organized` date NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `organisations`
--

INSERT INTO `organisations` (`id`, `type`, `name`, `organized`, `login`, `password`) VALUES
(1, 'ООО', 'РОМАШКА', '2024-06-05', 'romashka', '123'),
(2, 'ПАО', 'ИНДИГО', '2015-02-27', 'rrr', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `resume`
--

INSERT INTO `resume` (`id`, `title`, `surname`, `name`, `patronymic`, `direction`, `discription`, `money`) VALUES
(3, 'Инженер', 'Фесянов', 'Илья', 'Алексеевич', 'Машиностроение', 'Описание для работодателей', 40000),
(4, 'Мастер', 'Иванов', 'Иван', 'Иванович', 'Таможенное дело', 'мастер', 45000);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `surname`, `name`, `patronymic`, `login`, `password`) VALUES
(1, 'Илья', 'Фесянов', 'Алексеевич', 'q2l3ntk', '123'),
(2, 'Фесянов', 'Илья', 'Алексеевич', 'q2l3ntk', '123'),
(3, 'Фесянов', 'Илья', 'Алексеевич', 'q2l3ntk', '123'),
(4, 'Фесянов', 'Илья', 'Алексеевич', 'q2l3ntk', '123'),
(5, 'Фесянов', 'Илья', 'Алексеевич', 'q2l3ntk', '123'),
(6, 'Фесянов', 'Илья', 'Алексеевич', 'q2l3ntk', '123'),
(7, 'Фесянов', 'Илья', 'Алексеевич', 'q2l3ntk', '123'),
(8, 'Фесянов', 'Илья', 'Алексеевич', 'q2l3ntk', '123'),
(9, '', '', '', '', ''),
(10, '', '', '', '', ''),
(11, '', '', '', '', ''),
(12, '', '', '', '', ''),
(13, '', '', '', '', ''),
(14, '', '', '', '', ''),
(15, '', '', '', '', ''),
(16, '', '', '', '', ''),
(17, '', '', '', '', ''),
(18, '', '', '', '', ''),
(19, '', '', '', '', ''),
(20, '', '', '', '', ''),
(21, '', '', '', '', ''),
(22, '', '', '', '', ''),
(23, '', '', '', '', ''),
(24, '', '', '', '', ''),
(25, '', '', '', '', ''),
(26, '', '', '', '', ''),
(27, '', '', '', '', ''),
(28, '', '', '', '', ''),
(29, '', '', '', '', ''),
(30, '', '', '', '', ''),
(31, 'Фесянов', 'Илья', 'Алексеевич', 'q2l3ntk', '123'),
(32, 'Фесянов', 'Илья', 'Алексеевич', 'q2l3ntk', '123'),
(33, 'Фесянов', 'Илья', 'Алексеевич', 'q2l3ntk', '123'),
(34, 'Фесянов', 'Илья', 'Алексеевич', 'q2l3ntk', '1234'),
(35, 'Иванов', 'Иван', 'Иванович', 'kkk', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `vacancy`
--

CREATE TABLE `vacancy` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vacancy`
--

INSERT INTO `vacancy` (`id`, `title`, `organization`, `direction`, `discription`, `money`) VALUES
(1, 'Электрик', 'ООО Ромашка', 'Компьютерные сети', 'электрик', 35000),
(4, 'Токарь', 'ПАО ИНДИГО', 'Электроника и электротехника', 'токарь', 50000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `directions`
--
ALTER TABLE `directions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `organisations`
--
ALTER TABLE `organisations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `directions`
--
ALTER TABLE `directions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `organisations`
--
ALTER TABLE `organisations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
