-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 15 2023 г., 13:45
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `registration`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(15) NOT NULL,
  `pass_hash` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img_src` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass_hash`, `img_src`) VALUES
(25, 'й', 'a12207f8da01011e9f903083fb7e9c3f', ''),
(40, '', 'e7bd25f566a38790d51d5e9fd8e3810c', ''),
(41, 'w', '7a99820bb7cbab2446caef6683f9c64d', ''),
(42, 's', '7a99820bb7cbab2446caef6683f9c64d', ''),
(43, 'c', '11df2a12c179b9140a21610a7ce59d23', ''),
(44, '', 'e7bd25f566a38790d51d5e9fd8e3810c', ''),
(45, '1', 'e327eb3bfd5e0a3728f400195d5a4756', ''),
(46, '2', 'c01b6f10a02d105e03fa0c22ea3e9553', ''),
(47, '3', 'e760869f0c2897e57157ba7c5c1c8e09', ''),
(48, '2', 'e7bd25f566a38790d51d5e9fd8e3810c', ''),
(49, 'z', '512ec836c2c022348486211301270a5c', ''),
(50, 'rew', '235ffdad3cdb59c81c96bab59eb811cc', ''),
(51, 'xzx', 'bbe0d86b27f128bb48a4d7f558a66c6a', ''),
(52, 'xxcvv', '2d7d3649a4e5f7b31da71898dba8149e', ''),
(53, 'asddf', '41cddcc4029f8357d1e1aaa022001e14', ''),
(54, 'zxza', '75d6daf963f5d02ff32206b85b6ca762', ''),
(55, 'gfds', 'd6706729ae3d8c0068fcf22377e6363f', ''),
(56, 'sdf', '200556e120359a21ba7135b9ccf82d6d', ''),
(57, 'aaaq', 'ddbeadbd64b7ce07995d49479dd9fd9a', ''),
(58, 'lk', 'c6457c288eb0fb6f726b945be2f88ac8', ''),
(59, 'ikm,', 'af6f06bdbc86dd3502a5883a884b2666', '/foto/'),
(60, '098', '684af4f0be0abe7b634b0bcfb91bc63b', '/foto/1.jpg'),
(61, 'w', 'f49bb6b41b0c8d465a7772b745777624', '/foto/1.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
